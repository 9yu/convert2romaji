<?php
namespace Yubako2\Convert2Romaji;

const YAHOO_API_KEY = 'dj00aiZpPWt3YlpOTk9kZEhvcSZzPWNvbnN1bWVyc2VjcmV0Jng9YjI-';
const YAHOO_FURIGANA = 'https://jlp.yahooapis.jp/FuriganaService/V1/furigana';

use GuzzleHttp\Exception\RequestException;

class Convertor
{
    public static function convert($text)
    {
        // pre
        $text = trim($text);
        $text = urlencode($text);

        // api
        $url = YAHOO_FURIGANA . '?appid=' .  YAHOO_API_KEY . '&grade=1&sentence=' . $text;
        $client = new \GuzzleHttp\Client();
        try {
            $res = $client->request('GET', $url);
            // error catcher
        } catch (RequestException $e) {
            trigger_error('String is not valid Japanese',E_USER_WARNING);
            return null;
        }

        // getbody
        $xml = $res->getBody();

        // convert to json
        $xml = simplexml_load_string($xml);
        $json = json_encode($xml);

        // convert to object
        $array = json_decode($json, true);

        // print
        if (isset($array['Result']['WordList']['Word']['Roman']))
            return $array['Result']['WordList']['Word']['Roman'];
        else
            return self::each_item($array);
    }

    protected static function each_item($array)
    {
        $roman = '';
        foreach ($array['Result']['WordList']['Word'] as $item) {
            $roman .= isset($item['Roman']) ? $item['Roman'] : \Yubako2\Convert2Romaji\Kana::from_kana($item['Surface']);
        }
        return $roman;
    }

}
