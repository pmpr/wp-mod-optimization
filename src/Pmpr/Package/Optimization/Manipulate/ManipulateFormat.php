<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b0d2da8c55b             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class ManipulateFormat extends BaseClass { public static function kcwgwosqkkkkmuks(string $eeamcawaiqocomwy) { goto uwkuasmeoueseaou; qiiwgkcyqweecqoa: $yiasugywggckywoa = array_filter($yiasugywggckywoa, "\165\162\x6c\x64\145\x63\x6f\x64\x65"); goto ekkkweoucuyuqwik; ueeuassqywswigaq: $mkomwsiykqigmqca = ManipulateArray::get($eeamcawaiqocomwy, "\x70\141\x74\x68", ''); goto ugkqimokoeicsyqm; oqkqaggagwswaaqi: $yiasugywggckywoa = (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\157\160\x74\137\160\x61\162\163\145\x5f\x75\x72\154"), ["\x68\x6f\x73\x74" => $gwgucoaaqcwwciqq, "\x70\x61\164\150" => $mkomwsiykqigmqca, "\x73\x63\150\145\155\x65" => $aaceqemaqqeckueq, "\x71\165\x65\162\x79" => $gqgemcmoicmgaqie, "\146\x72\x61\147\155\x65\x6e\164" => $geqceacmoksoayem]); goto qiiwgkcyqweecqoa; sumiomammkayeqis: $gwgucoaaqcwwciqq = strtolower(ManipulateArray::get("\150\157\x73\164", '')); goto ueeuassqywswigaq; syokeusmqogkicks: $geqceacmoksoayem = ManipulateArray::get($eeamcawaiqocomwy, "\x66\162\x61\147\155\x65\x6e\164", ''); goto oqkqaggagwswaaqi; mkosooeggqemyqqy: return $yiasugywggckywoa; goto uyugkucyiqymcuus; kyuewcuomwmweguq: $aaceqemaqqeckueq = ManipulateArray::get($eeamcawaiqocomwy, "\163\143\x68\145\x6d\x61", ''); goto syokeusmqogkicks; msaugmwuooqkmwus: $kocecsiyeigoycei = preg_replace_callback("\45\133\136\72\x2f\x40\x3f\x26\75\x23\x5d\53\x25\x75\x73\104", function ($meyiiwcswqmuggyg) { return rawurlencode($meyiiwcswqmuggyg[0]); }, $eeamcawaiqocomwy); goto oqksakqyecmsuscq; ugkqimokoeicsyqm: $gqgemcmoicmgaqie = ManipulateArray::get($eeamcawaiqocomwy, "\x71\165\145\x72\x79", ''); goto kyuewcuomwmweguq; ekkkweoucuyuqwik: ugcquuakimgkmeqc: goto mkosooeggqemyqqy; oqksakqyecmsuscq: $eeamcawaiqocomwy = self::gooqqcmsyseiaikc($kocecsiyeigoycei); goto sumiomammkayeqis; agcugqouiqgiskcq: if (!is_string($eeamcawaiqocomwy)) { goto ugcquuakimgkmeqc; } goto msaugmwuooqkmwus; uwkuasmeoueseaou: $yiasugywggckywoa = []; goto agcugqouiqgiskcq; uyugkucyiqymcuus: } public static function cysksgacseyymyqs(string $qogsmwakwacwqogk) { goto iweickamaucqgysq; uiqaoucyoiwykywa: return false; goto umawcakyaoykccao; iweickamaucqgysq: if (!$qogsmwakwacwqogk) { goto kokkacggmoaagiae; } goto aecamacaoskqmccs; oekmoqcqwyauiaeg: kokkacggmoaagiae: goto uiqaoucyoiwykywa; aecamacaoskqmccs: return self::gooqqcmsyseiaikc($qogsmwakwacwqogk, PHP_URL_PATH); goto oekmoqcqwyauiaeg; umawcakyaoykccao: } public static function eyayuwiqsqsmkamc(?string $eeamcawaiqocomwy, ?string $wksoawcgagcgoask) { return _get_component_from_parsed_url_array(self::gooqqcmsyseiaikc($eeamcawaiqocomwy), $wksoawcgagcgoask); } }
