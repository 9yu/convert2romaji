<?php
namespace Yubako2;

const YAHOO_API_KEY = 'dj00aiZpPWt3YlpOTk9kZEhvcSZzPWNvbnN1bWVyc2VjcmV0Jng9YjI-';
const YAHOO_FURIGANA = 'https://jlp.yahooapis.jp/FuriganaService/V1/furigana';

class Convert2Romaji
{
    public static function convert($text)
    {
        // pre
        $text = trim($text);
        $text = urlencode($text);

        // api
        $url = YAHOO_FURIGANA . '?appid=' .  YAHOO_API_KEY . '&grade=1&sentence=' . $text;
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $url);
        $xml = $res->getBody();

        // convert to json
        $xml = simplexml_load_string($xml);
        $json = json_encode($xml);

        // convert to object
        $array = json_decode($json, true);

        // foreach
        $roman = '';
        foreach ($array['Result']['WordList']['Word'] as $item) {
            $roman .= isset($item['Roman']) ? $item['Roman'] : \App\Kana::from_kana($item['Surface']);
        }

        return $roman;
    }

}
