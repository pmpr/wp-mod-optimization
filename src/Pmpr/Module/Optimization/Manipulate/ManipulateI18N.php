<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             629654a236839             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; class ManipulateI18N extends Manipulate { public static function umuecysoywoumgwo() { global $sitepress, $q_config, $polylang; if (!(!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\147\145\164\x5f\x61\143\164\x69\166\145\137\x6c\x61\x6e\147\165\141\x67\145\163"))) { goto uukumskkeggaowck; } return "\167\x70\x6d\154"; uukumskkeggaowck: if (!(!empty($polylang) && function_exists("\x70\x6c\154\x5f\x6c\141\x6e\x67\x75\x61\x67\145\163\x5f\154\151\x73\164"))) { goto ocokwuuquaokmasc; } $ymkomcgesksuuysk = pll_languages_list(); if (!empty($ymkomcgesksuuysk)) { goto cggowoquuiwqkyew; } return false; cggowoquuiwqkyew: return "\x70\157\x6c\x79\154\141\156\x67"; ocokwuuquaokmasc: if (!(!empty($q_config) && is_array($q_config))) { goto meawswgwagoqgkye; } if (!function_exists("\161\164\x72\141\156\x78\146\137\143\x6f\156\x76\x65\162\x74\x55\122\114")) { goto yiwiqaqmwiogawym; } return "\161\x74\x72\x61\156\x73\154\141\164\145\55\x78"; yiwiqaqmwiogawym: if (!function_exists("\161\164\x72\141\x6e\163\x5f\x63\x6f\x6e\166\145\162\164\x55\x52\x4c")) { goto goacqqsgaaigyuaw; } return "\x71\x74\x72\x61\156\163\154\141\x74\x65"; goacqqsgaaigyuaw: meawswgwagoqgkye: return false; } public static function mceoyuqgagciommq() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); $auwuoyyagaiegwae = []; if ("\x77\160\155\x6c" === $eokyomeiuimoaiac) { goto eiawsoasmscmqswa; } if ("\x71\x74\x72\141\156\x73\154\141\x74\145" === $eokyomeiuimoaiac || "\x71\x74\162\141\x6e\x73\x6c\x61\164\x65\x2d\x78" === $eokyomeiuimoaiac) { goto ickcmqoiosquugwe; } if ("\x70\x6f\x6c\x79\x6c\141\x6e\147" === $eokyomeiuimoaiac) { goto qmeoaqmsuseueqiy; } goto goeoymmqqqeeoime; eiawsoasmscmqswa: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { global $sitepress; $auwuoyyagaiegwae[] = $sitepress->language_url($swaukaagekiououo); usqgaogkqgemuima: } wcesymwqykqoyuqk: goto goeoymmqqqeeoime; ickcmqoiosquugwe: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { if ("\x71\164\x72\141\x6e\163\x6c\x61\x74\145" === $eokyomeiuimoaiac) { goto kecwuwwcwokuksyq; } $auwuoyyagaiegwae[] = qtranxf_convertURL(home_url(), $swaukaagekiououo, true); goto qgegkeomwscwwiuw; kecwuwwcwokuksyq: $auwuoyyagaiegwae[] = qtrans_convertURL(home_url(), $swaukaagekiououo, true); qgegkeomwscwwiuw: egasokooagakisiy: } mswsoaimesegiiic: goto goeoymmqqqeeoime; qmeoaqmsuseueqiy: global $polylang; $cycooskwyukkaimm = function_exists("\120\x4c\114") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm))) { goto qmiwsequckckoaei; } $auwuoyyagaiegwae = wp_list_pluck($cycooskwyukkaimm->model->get_languages_list(), "\x73\x65\141\x72\x63\150\137\x75\x72\x6c"); qmiwsequckckoaei: goeoymmqqqeeoime: if (!empty($auwuoyyagaiegwae)) { goto ygkcacsyyckescqs; } $auwuoyyagaiegwae[] = ManipulateServer::gmigwwwmwemyaayy(); ygkcacsyyckescqs: return $auwuoyyagaiegwae; } public static function iciiggecqkuyiyaa() { $mmgwamioewukeoom = []; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$eokyomeiuimoaiac) { goto igymseewwyiocoug; } if (!("\167\x70\x6d\x6c" === $eokyomeiuimoaiac)) { goto cuoqqgaygogsmmic; } global $sitepress; $mmgwamioewukeoom = array_keys($sitepress->get_active_languages()); cuoqqgaygogsmmic: if (!("\x71\x74\x72\141\156\x73\154\141\x74\x65" === $eokyomeiuimoaiac || "\161\x74\162\141\x6e\163\154\x61\164\145\55\x78" === $eokyomeiuimoaiac)) { goto cgewcsueoyaeikgm; } global $q_config; $mmgwamioewukeoom = !empty($q_config["\x65\x6e\141\142\154\x65\x64\x5f\154\x61\x6e\x67\x75\141\x67\145\x73"]) ? $q_config["\145\x6e\141\142\154\x65\x64\137\154\141\156\x67\165\x61\x67\x65\163"] : []; cgewcsueoyaeikgm: if (!("\x70\x6f\x6c\171\154\141\x6e\147" === $eokyomeiuimoaiac)) { goto sukskmcwsoysiuqu; } $mmgwamioewukeoom = pll_languages_list(); sukskmcwsoysiuqu: igymseewwyiocoug: return $mmgwamioewukeoom; } public static function yeaukamowmkwaowi() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if ($eokyomeiuimoaiac) { goto mqccmesakuemceqi; } return []; mqccmesakuemceqi: global $q_config; switch ($eokyomeiuimoaiac) { case "\167\x70\x6d\154": $omkysikckkcieckq = DecoratorOption::get("\151\143\x6c\137\163\x69\x74\145\160\x72\145\x73\163\x5f\163\x65\x74\164\x69\156\147\163"); if (!(2 === (int) $omkysikckkcieckq["\x6c\141\x6e\147\165\141\147\145\x5f\156\145\147\157\164\151\141\x74\151\x6f\x6e\x5f\x74\171\x70\145"])) { goto kooskuwkuayiuose; } return self::mceoyuqgagciommq(); kooskuwkuayiuose: goto eyiamcekkgkiawqy; case "\x71\x74\162\x61\156\x73\154\x61\164\145": if (!(3 === (int) $q_config["\165\x72\154\x5f\155\x6f\144\145"])) { goto qwcegcuowwgiccos; } return self::mceoyuqgagciommq(); qwcegcuowwgiccos: goto eyiamcekkgkiawqy; case "\x71\164\162\x61\156\163\x6c\141\x74\x65\55\170": if (!(3 === (int) $q_config["\165\x72\x6c\137\x6d\157\144\x65"] || 4 === (int) $q_config["\x75\162\x6c\x5f\155\157\144\x65"])) { goto qcessicwuikwqsis; } return self::mceoyuqgagciommq(); qcessicwuikwqsis: goto eyiamcekkgkiawqy; case "\x70\157\x6c\171\x6c\x61\156\147": global $polylang; $cycooskwyukkaimm = function_exists("\120\114\114") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm) && (2 === (int) $cycooskwyukkaimm->options["\146\157\x72\143\145\x5f\x6c\x61\156\x67"] || 3 === (int) $cycooskwyukkaimm->options["\146\x6f\162\x63\x65\137\x6c\x61\156\x67"]))) { goto yssscwioiyygssec; } return self::mceoyuqgagciommq(); yssscwioiyygssec: } twkmiuomimomscew: eyiamcekkgkiawqy: return []; } public static function emqmaiomewcmuacu($post = null) { $swaukaagekiououo = false; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$post) { goto ycakugokkqkuqyiu; } if ("\x77\x70\x6d\154" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\167\157\x6f\x63\157\155\x6d\x65\x72\143\x65\55\155\165\x6c\164\151\x6c\x69\156\147\x75\x61\154\x2f\167\160\155\154\55\167\157\x6f\143\x6f\155\155\x65\162\x63\145\56\160\150\x70")) { goto coywmiyqgsweuiic; } if ("\160\x6f\x6c\171\154\141\x6e\147" === $eokyomeiuimoaiac && function_exists("\x70\154\x6c\x5f\x67\x65\164\x5f\x70\157\x73\164\x5f\x6c\x61\x6e\x67\x75\141\147\145")) { goto siqagquguiemuoku; } goto ieumumsgyguceusy; coywmiyqgsweuiic: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($post, "\160\x6f\163\164\x5f" . ManipulatePost::gueasuouwqysmomu($post)); goto ieumumsgyguceusy; siqagquguiemuoku: $swaukaagekiououo = pll_get_post_language($post); ieumumsgyguceusy: ycakugokkqkuqyiu: return $swaukaagekiououo; } public static function auksikwsewaywikq($mkomwsiykqigmqca = '') { global $wpml_url_filters; static $uogwqioiiwqsyksu = []; static $sckcicueiusskgie; if (isset($uogwqioiiwqsyksu[$mkomwsiykqigmqca])) { goto kciouyuaqkyqomam; } if (isset($sckcicueiusskgie)) { goto oouoqimaaqcmccay; } $sckcicueiusskgie = $wpml_url_filters && is_object($wpml_url_filters) && method_exists($wpml_url_filters, "\x68\x6f\155\145\x5f\x75\162\154\137\146\x69\154\x74\145\x72"); oouoqimaaqcmccay: if (!$sckcicueiusskgie) { goto sycygoiaiqqageym; } DecoratorHook::ggmgmqswqkgecosg("\x68\x6f\155\x65\137\165\x72\x6c", [$wpml_url_filters, "\x68\157\x6d\145\137\x75\162\x6c\x5f\146\151\x6c\164\145\x72"], -10); sycygoiaiqqageym: $uogwqioiiwqsyksu[$mkomwsiykqigmqca] = ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca); if (!$sckcicueiusskgie) { goto gygawoqywkukmqee; } DecoratorHook::cecaguuoecmccuse("\x68\x6f\x6d\x65\x5f\x75\162\x6c", [$wpml_url_filters, "\x68\x6f\155\145\x5f\165\x72\x6c\137\146\151\x6c\164\x65\x72"], -10, 4); gygawoqywkukmqee: kciouyuaqkyqomam: return $uogwqioiiwqsyksu[$mkomwsiykqigmqca]; } public static function csacaukgwwayassy($swaukaagekiououo = '') { $mkysicwccoeicumg = self::umuecysoywoumgwo(); $eeamcawaiqocomwy = home_url(); if (!$mkysicwccoeicumg) { goto kiwqkcaekqqyuegq; } switch ($mkysicwccoeicumg) { case "\167\x70\155\154": $eeamcawaiqocomwy = $GLOBALS["\163\151\164\x65\160\162\145\163\163"]->language_url($swaukaagekiououo); goto wwkgkaecgiwggcck; case "\161\164\x72\141\x6e\163\154\141\x74\145": $eeamcawaiqocomwy = qtrans_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto wwkgkaecgiwggcck; case "\161\x74\162\x61\156\x73\154\141\x74\x65\55\x78": $eeamcawaiqocomwy = qtranxf_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto wwkgkaecgiwggcck; case "\160\157\154\x79\154\x61\156\x67": global $polylang; $cycooskwyukkaimm = function_exists("\120\114\x4c") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm->options["\x66\x6f\x72\143\145\137\x6c\x61\x6e\x67"]) && isset($cycooskwyukkaimm->links))) { goto qsygcycwieukkgwc; } $eeamcawaiqocomwy = pll_home_url($swaukaagekiououo); qsygcycwieukkgwc: } umgaesggesswoaqe: wwkgkaecgiwggcck: kiwqkcaekqqyuegq: return $eeamcawaiqocomwy; } public static function augqukusksqwwuus($aakkemqaqeckisew = '', $skacuygeqykiwiwy = '') { $msyoeiaqaaseqiaw = []; if (!($aakkemqaqeckisew && is_string($aakkemqaqeckisew))) { goto ayyweymyuuiauamo; } $mkysicwccoeicumg = self::umuecysoywoumgwo(); if (!$mkysicwccoeicumg) { goto yqykqysmiquwoasu; } $ymkomcgesksuuysk = self::iciiggecqkuyiyaa(); if (!$ymkomcgesksuuysk) { goto cmqucgoewuyieoyk; } $ymkomcgesksuuysk = array_diff($ymkomcgesksuuysk, [$aakkemqaqeckisew]); if (!('' === $skacuygeqykiwiwy)) { goto quwcqmyokicssyew; } $skacuygeqykiwiwy = self::cmaecekuqkwmemms("\x4f\x50\124\x49\115\x49\x5a\101\124\111\117\x4e\x5f\x43\x41\103\x48\x45\x5f\120\x41\124\110"); quwcqmyokicssyew: $mwgaccygeckyuamg = []; foreach ($ymkomcgesksuuysk as $swaukaagekiououo) { $parse_url = ManipulateFormat::gooqqcmsyseiaikc(self::csacaukgwwayassy($swaukaagekiououo)); $mwgaccygeckyuamg[] = ManipulateFile::cgwcgscqeqauaagi("{$skacuygeqykiwiwy}{$parse_url["\150\157\163\164"]}\x28\56\52\51\x2f" . untrailingslashit($parse_url["\160\141\x74\150"]), true); gimmuoqwckiseaik: } iqcogmsguwoikame: return (array) DecoratorHook::sscegwueamckwmcy("\x63\141\x63\150\145\137\x6c\141\x6e\x67\x73\x5f\x74\157\x5f\x70\x72\x65\x73\145\162\166\x65", $mwgaccygeckyuamg); cmqucgoewuyieoyk: yqykqysmiquwoasu: ayyweymyuuiauamo: return $msyoeiaqaaseqiaw; } }
