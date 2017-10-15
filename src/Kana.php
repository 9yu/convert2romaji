<?php
namespace Yubako2;

/**
 * Class Kana
 * @author timw4mail
 * @link https://gist.github.com/timw4mail/1154969
 */


class Kana
{
    public static function from_kana($text)
    {
        $hiragana =  array(
            //vowels
            'あ' => 'a',
            'い' => 'i',
            'う' => 'u',
            'え' => 'e',
            'お' => 'o',
            //k
            'か' => 'ka',
            'き' => 'ki',
            'く' => 'ku',
            'け' => 'ke',
            'こ' => 'ko',
            //g
            'が' => 'ga',
            'ぎ' => 'gi',
            'ぐ' => 'gu',
            'げ' => 'ge',
            'ご' => 'go',
            //s
            'さ' => 'sa',
            'し' => 'shi',
            'す' => 'su',
            'せ' => 'se',
            'そ' => 'so',
            //j
            'じゃ' => 'ja',
            'じ' => 'ji',
            'ぢ' => 'ji',
            'じゅ' => 'ju',
            'じぇ' => 'je',
            'じょ' => 'jo',
            //z
            'ざ' => 'za',
            'ず' => 'zu',
            'ぜ' => 'ze',
            'ぞ' => 'zo',
            //t
            'た' => 'ta',
            'ち' => 'chi',
            'つ' => 'tsu',
            'て' => 'te',
            'と' => 'to',
            //d
            'だ' => 'da',
            'づ' => 'du',
            'で' => 'de',
            'ど' => 'do',
            //n
            'な' => 'na',
            'に' => 'ni',
            'ぬ' => 'nu',
            'ね' => 'ne',
            'の' => 'no',
            //h
            'は' => 'ha',
            'ひ' => 'hi',
            'ふ' => 'fu',
            'へ' => 'he',
            'ほ' => 'ho',
            //b
            'ば' => 'ba',
            'び' => 'bi',
            'ぶ' => 'bu',
            'べ' => 'be',
            'ぼ' => 'bo',
            //p
            'ぱ' => 'pa',
            'ぴ' => 'pi',
            'ぷ' => 'pu',
            'ぺ' => 'pe',
            'ぽ' => 'po',
            //m
            'ま' => 'ma',
            'み' => 'mi',
            'む' => 'mu',
            'め' => 'me',
            'も' => 'mo',
            //y
            'や' => 'ya',
            'ゆ' => 'yu',
            'よ' => 'yo',
            //r
            'ら' => 'ra',
            'り' => 'ri',
            'る' => 'ru',
            'れ' => 're',
            'ろ' => 'ro',
            //w
            'わ' => 'wa',
            'を' => 'wo',
            'ん' => 'n',
            //compound
            'きゃ' => 'kya',
            'きゅ' => 'kyu',
            'きょ' => 'kyo',
            'ぎゃ' => 'gya',
            'ぎゅ' => 'gyu',
            'ぎょ' => 'gyo',
            'しゃ' => 'sha',
            'しゅ' => 'shu',
            'しょ' => 'sho',
            'ちゃ' => 'cha',
            'ちゅ' => 'chu',
            'ちょ' => 'cho',
            'にゃ' => 'nya',
            'にゅ' => 'nyu',
            'にょ' => 'nyo',
            'ひゃ' => 'hya',
            'ひゅ' => 'hyu',
            'ひょ' => 'hyo',
            'びゃ' => 'bya',
            'びゅ' => 'byu',
            'びょ' => 'byo',
            'ぴゃ' => 'pya',
            'ぴゅ' => 'pyu',
            'ぴょ' => 'pyo',
            'みゃ' => 'mya',
            'みゅ' => 'myu',
            'みょ' => 'myo',
            'りゃ' => 'rya',
            'りゅ' => 'ryu',
            'りょ' => 'ryo',
        );

        $hira_repeated = array(
            'っk' => 'kk',
            'っs' => 'ss',
            'っt' => 'tt',
            'っn' => 'nn',
            'っh' => 'hh',
            'っm' => 'mm',
            'っy' => 'yy',
            'っr' => 'rr',
            'っw' => 'ww',
            'っg' => 'gg',
            'っz' => 'zz',
            'っj' => 'jj',
            'っd' => 'dd',
            'っb' => 'bb',
            'っp' => 'pp',
        );

        $katakana =  array(
            //vowels
            'ア' => 'a',
            'イ' => 'i',
            'ウ' => 'u',
            'エ' => 'e',
            'オ' => 'o',
            //k
            'カ' => 'ka',
            'キ' => 'ki',
            'ク' => 'ku',
            'ケ' => 'ke',
            'コ' => 'ko',
            //g
            'ガ' => 'ga',
            'ギ' => 'gi',
            'グ' => 'gu',
            'ゲ' => 'ge',
            'ゴ' => 'go',
            //s
            'サ' => 'sa',
            'シ' => 'shi',
            'ス' => 'su',
            'セ' => 'se',
            'ソ' => 'so',
            //j
            'ジャ' => 'ja',
            'ジ' => 'ji',
            'ヂ' => 'ji',
            'ジュ' => 'ju',
            'ジェ' => 'je',
            'ジョ' => 'jo',
            //z
            'ザ' => 'za',
            'ズ' => 'zu',
            'ゼ' => 'ze',
            'ゾ' => 'zo',
            //t
            'タ' => 'ta',
            'チ' => 'chi',
            'ツ' => 'tsu',
            'テ' => 'te',
            'ト' => 'to',
            //d
            'ダ' => 'da',
            'ヅ' => 'du',
            'デ' => 'de',
            'ド' => 'do',
            //n
            'ナ' => 'na',
            'ニ' => 'ni',
            'ヌ' => 'nu',
            'ネ' => 'ne',
            'ノ' => 'no',
            //h
            'ハ' => 'ha',
            'ヒ' => 'hi',
            'フ' => 'fu',
            'ヘ' => 'he',
            'ホ' => 'ho',
            //b
            'バ' => 'ba',
            'ビ' => 'bi',
            'ブ' => 'bu',
            'ベ' => 'be',
            'ボ' => 'bo',
            //p
            'パ' => 'pa',
            'ピ' => 'pi',
            'プ' => 'pu',
            'ペ' => 'pe',
            'ポ' => 'po',
            //m
            'マ' => 'ma',
            'ミ' => 'mi',
            'ム' => 'mu',
            'メ' => 'me',
            'モ' => 'mo',
            //y
            'ヤ' => 'ya',
            'ユ' => 'yu',
            'ヨ' => 'yo',
            //r
            'ラ' => 'ra',
            'リ' => 'ri',
            'ル' => 'ru',
            'レ' => 're',
            'ロ' => 'ro',
            //w
            'ワ' => 'wa',
            'ヲ' => 'wo',
            'ン' => 'n',
            //compound
            'キャ' => 'kya',
            'キュ' => 'kyu',
            'キョ' => 'kyo',
            'ギャ' => 'gya',
            'ギュ' => 'gyu',
            'ギョ' => 'gyo',
            'シャ' => 'sha',
            'シュ' => 'shu',
            'ショ' => 'sho',
            'チャ' => 'cha',
            'チュ' => 'chu',
            'チョ' => 'cho',
            'ニャ' => 'nya',
            'ニュ' => 'nyu',
            'ニョ' => 'nyo',
            'ヒャ' => 'hya',
            'ヒュ' => 'hyu',
            'ヒョ' => 'hyo',
            'ビャ' => 'bya',
            'ビュ' => 'byu',
            'ビョ' => 'byo',
            'ピャ' => 'pya',
            'ピュ' => 'pyu',
            'ピョ' => 'pyo',
            'ミャ' => 'mya',
            'ミュ' => 'myu',
            'ミョ' => 'myo',
            'リャ' => 'rya',
            'リュ' => 'ryu',
            'リョ' => 'ryo',
        );

        $kata_repeated = array(
            'ッk' => 'kk',
            'ッs' => 'ss',
            'ッt' => 'tt',
            'ッn' => 'nn',
            'ッh' => 'hh',
            'ッm' => 'mm',
            'ッy' => 'yy',
            'ッr' => 'rr',
            'ッw' => 'ww',
            'ッg' => 'gg',
            'ッz' => 'zz',
            'ッj' => 'jj',
            'ッd' => 'dd',
            'ッb' => 'bb',
            'ッp' => 'pp',
            'aー' => 'aa',
            'iー' => 'ii',
            'uー' => 'uu',
            'eー' => 'ee',
            'oー' => 'oo',
            'oー' => 'oh',
        );

        $kata_only = array(
            'ヴァ' => 'va',
            'ファ' => 'fa',
            'ウィ' => 'wi',
            'ヴィ' => 'vi',
            'フィ' => 'fi',
            'ヴ' => 'vu',
            'イェ' => 'ye',
            'ウェ' => 'we',
            'ヴェ' => 've',
            'フェ' => 'fe',
            'ヴォ' => 'vo',
            'フォ' => 'fo',
            'クァ' => 'kwa',
            'グァ' => 'gwa',
            'ツァ' => 'tsa',
            'クィ' => 'kwi',
            'グィ' => 'gwi',
            'ツィ' => 'tsi',
            'ティ' => 'thi',
            'クェ' => 'kwe',
            'グェ' => 'gwe',
            'シェ' => 'she',
            'チェ' => 'che',
            'ツェ' => 'tse',
            'クォ' => 'kwo',
            'グォ' => 'gwo',
            'ツォ' => 'tso',
            'ヴャ' => 'vya',
            'テャ' => 'tha',
            'ヂャ' => 'dya',
            'フャ' => 'fya',
            'ヴュ' => 'vyu',
            'テュ' => 'thu',
            'ヂュ' => 'dyu',
            'フュ' => 'fyu',
            'ヴョ' => 'vyo',
            'テョ' => 'tho',
            'ヂョ' => 'dyo',
            'フョ' => 'fyo',
        );

        //Merge arrays
        $pairs = array_merge($hiragana, $katakana, $kata_only);

        //Replace normal characters
        $text = strtr($text, $pairs);

        //Replace doubled letters
        $text = strtr($text, array_merge($hira_repeated, $kata_repeated));

        return $text;
    }

}