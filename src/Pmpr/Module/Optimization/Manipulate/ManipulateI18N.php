<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62f7cb380fe9d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; class ManipulateI18N extends Manipulate { public static function umuecysoywoumgwo() { global $sitepress, $q_config, $polylang; if (!(!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\147\145\x74\x5f\141\143\x74\151\166\145\x5f\154\x61\156\x67\165\x61\x67\145\x73"))) { goto qkwckeqowgaokkuy; } return "\x77\160\155\x6c"; qkwckeqowgaokkuy: if (!(!empty($polylang) && function_exists("\x70\x6c\x6c\137\x6c\141\x6e\147\x75\x61\x67\x65\x73\x5f\154\x69\x73\x74"))) { goto gqyyccceswkqcmaa; } $ymkomcgesksuuysk = pll_languages_list(); if (!empty($ymkomcgesksuuysk)) { goto kqkymieyyqaoeymw; } return false; kqkymieyyqaoeymw: return "\x70\157\154\171\154\x61\156\147"; gqyyccceswkqcmaa: if (!(!empty($q_config) && is_array($q_config))) { goto weiaigyyigkusucy; } if (!function_exists("\x71\x74\x72\x61\x6e\170\146\x5f\143\x6f\x6e\x76\x65\x72\x74\x55\x52\x4c")) { goto sykuuisikqcwuaqu; } return "\x71\x74\x72\x61\156\163\154\x61\x74\145\55\x78"; sykuuisikqcwuaqu: if (!function_exists("\161\164\162\141\156\x73\137\143\157\156\166\145\162\164\125\x52\x4c")) { goto mquyemuqcqeassqc; } return "\x71\x74\x72\141\156\x73\154\141\164\145"; mquyemuqcqeassqc: weiaigyyigkusucy: return false; } public static function mceoyuqgagciommq() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); $auwuoyyagaiegwae = []; if ("\x77\160\155\154" === $eokyomeiuimoaiac) { goto uugwoygiyecgymgw; } if ("\x71\x74\162\x61\x6e\x73\x6c\x61\x74\145" === $eokyomeiuimoaiac || "\x71\x74\x72\141\156\x73\x6c\x61\x74\x65\x2d\170" === $eokyomeiuimoaiac) { goto acmgueaoaaweiqqu; } if ("\160\x6f\x6c\171\x6c\x61\x6e\x67" === $eokyomeiuimoaiac) { goto awaaowoqskgokwiy; } goto gusgywuaimwooawc; uugwoygiyecgymgw: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { global $sitepress; $auwuoyyagaiegwae[] = $sitepress->language_url($swaukaagekiououo); mgieeyuyuoeccaog: } bagkewioewygysea: goto gusgywuaimwooawc; acmgueaoaaweiqqu: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { if ("\161\164\x72\x61\x6e\163\x6c\x61\x74\x65" === $eokyomeiuimoaiac) { goto sgkwaiuukkaqyqki; } $auwuoyyagaiegwae[] = qtranxf_convertURL(home_url(), $swaukaagekiououo, true); goto emagssesowicacoa; sgkwaiuukkaqyqki: $auwuoyyagaiegwae[] = qtrans_convertURL(home_url(), $swaukaagekiououo, true); emagssesowicacoa: gwksywaoeowkesei: } amgsicqmemeuuaem: goto gusgywuaimwooawc; awaaowoqskgokwiy: global $polylang; $cycooskwyukkaimm = function_exists("\x50\114\x4c") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm))) { goto cauqmacqkssciwyq; } $auwuoyyagaiegwae = wp_list_pluck($cycooskwyukkaimm->model->get_languages_list(), "\x73\x65\141\162\x63\x68\137\165\x72\x6c"); cauqmacqkssciwyq: gusgywuaimwooawc: if (!empty($auwuoyyagaiegwae)) { goto uqiekawkwcegsumy; } $auwuoyyagaiegwae[] = ManipulateServer::gmigwwwmwemyaayy(); uqiekawkwcegsumy: return $auwuoyyagaiegwae; } public static function iciiggecqkuyiyaa() { $mmgwamioewukeoom = []; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$eokyomeiuimoaiac) { goto sgikkoswwyesqomo; } if (!("\x77\x70\x6d\x6c" === $eokyomeiuimoaiac)) { goto kgikoagqwkuocesg; } global $sitepress; $mmgwamioewukeoom = array_keys($sitepress->get_active_languages()); kgikoagqwkuocesg: if (!("\x71\164\x72\141\x6e\163\x6c\141\164\145" === $eokyomeiuimoaiac || "\x71\164\x72\141\156\x73\x6c\141\164\x65\55\170" === $eokyomeiuimoaiac)) { goto skaayekywasksoug; } global $q_config; $mmgwamioewukeoom = !empty($q_config["\145\x6e\141\x62\x6c\145\144\137\x6c\x61\156\x67\165\141\147\x65\163"]) ? $q_config["\145\x6e\141\142\x6c\145\x64\137\x6c\141\x6e\147\165\x61\147\x65\163"] : []; skaayekywasksoug: if (!("\160\x6f\154\171\x6c\x61\x6e\x67" === $eokyomeiuimoaiac)) { goto gkoyqgogsukuowqi; } $mmgwamioewukeoom = pll_languages_list(); gkoyqgogsukuowqi: sgikkoswwyesqomo: return $mmgwamioewukeoom; } public static function yeaukamowmkwaowi() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if ($eokyomeiuimoaiac) { goto aayysiegiyweiyuu; } return []; aayysiegiyweiyuu: global $q_config; switch ($eokyomeiuimoaiac) { case "\x77\160\x6d\x6c": $omkysikckkcieckq = DecoratorOption::get("\x69\x63\x6c\x5f\163\x69\164\145\x70\x72\x65\163\163\x5f\163\x65\164\164\151\156\x67\x73"); if (!(2 === (int) $omkysikckkcieckq["\x6c\141\x6e\147\x75\x61\x67\x65\x5f\156\145\147\x6f\x74\x69\x61\x74\151\157\156\x5f\x74\x79\160\x65"])) { goto akwwuuiykscgicuw; } return self::mceoyuqgagciommq(); akwwuuiykscgicuw: goto cksoeiwawiygyiyg; case "\x71\164\162\141\156\163\154\x61\164\x65": if (!(3 === (int) $q_config["\165\x72\154\137\155\157\144\x65"])) { goto ueqsiwuwumoqgsck; } return self::mceoyuqgagciommq(); ueqsiwuwumoqgsck: goto cksoeiwawiygyiyg; case "\161\164\x72\141\x6e\163\154\x61\x74\x65\x2d\170": if (!(3 === (int) $q_config["\165\162\x6c\137\x6d\157\x64\x65"] || 4 === (int) $q_config["\165\162\x6c\137\155\157\x64\x65"])) { goto iikgiaocummweiga; } return self::mceoyuqgagciommq(); iikgiaocummweiga: goto cksoeiwawiygyiyg; case "\160\x6f\x6c\x79\154\141\156\147": global $polylang; $cycooskwyukkaimm = function_exists("\x50\114\114") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm) && (2 === (int) $cycooskwyukkaimm->options["\146\157\162\143\145\137\x6c\141\x6e\147"] || 3 === (int) $cycooskwyukkaimm->options["\146\157\x72\143\x65\137\x6c\141\x6e\x67"]))) { goto gsusqquicmukegcs; } return self::mceoyuqgagciommq(); gsusqquicmukegcs: } cyqokqcacysioeyc: cksoeiwawiygyiyg: return []; } public static function emqmaiomewcmuacu($post = null) { $swaukaagekiououo = false; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$post) { goto gysmmooawoeggaow; } if ("\167\160\x6d\154" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\x6f\157\x63\x6f\x6d\x6d\145\x72\143\x65\55\x6d\x75\x6c\164\151\154\x69\x6e\x67\x75\x61\x6c\x2f\x77\160\155\154\55\167\157\157\x63\x6f\155\155\x65\x72\x63\x65\x2e\160\150\x70")) { goto scgmwokeuqwiekkk; } if ("\x70\x6f\154\171\x6c\141\x6e\147" === $eokyomeiuimoaiac && function_exists("\160\154\154\x5f\147\145\x74\137\160\x6f\163\x74\137\154\141\x6e\147\x75\141\147\x65")) { goto ceusyscosamyaiws; } goto wcsysckgigeykkwy; scgmwokeuqwiekkk: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($post, "\160\157\163\x74\137" . ManipulatePost::gueasuouwqysmomu($post)); goto wcsysckgigeykkwy; ceusyscosamyaiws: $swaukaagekiououo = pll_get_post_language($post); wcsysckgigeykkwy: gysmmooawoeggaow: return $swaukaagekiououo; } public static function auksikwsewaywikq($mkomwsiykqigmqca = '') { global $wpml_url_filters; static $uogwqioiiwqsyksu = []; static $sckcicueiusskgie; if (isset($uogwqioiiwqsyksu[$mkomwsiykqigmqca])) { goto wycmcqaauqkgegau; } if (isset($sckcicueiusskgie)) { goto iyikuwuweqigiuey; } $sckcicueiusskgie = $wpml_url_filters && is_object($wpml_url_filters) && method_exists($wpml_url_filters, "\150\x6f\155\x65\x5f\165\x72\154\x5f\x66\151\154\164\x65\x72"); iyikuwuweqigiuey: if (!$sckcicueiusskgie) { goto acsigwcaesyyoiie; } DecoratorHook::ggmgmqswqkgecosg("\x68\157\x6d\x65\137\x75\162\x6c", [$wpml_url_filters, "\x68\x6f\x6d\145\x5f\165\162\154\x5f\146\151\154\x74\145\x72"], -10); acsigwcaesyyoiie: $uogwqioiiwqsyksu[$mkomwsiykqigmqca] = ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca); if (!$sckcicueiusskgie) { goto aqaaqeucgoegeeuk; } DecoratorHook::cecaguuoecmccuse("\150\x6f\155\145\x5f\x75\x72\154", [$wpml_url_filters, "\150\x6f\155\145\x5f\165\x72\x6c\137\146\x69\154\x74\145\x72"], -10, 4); aqaaqeucgoegeeuk: wycmcqaauqkgegau: return $uogwqioiiwqsyksu[$mkomwsiykqigmqca]; } public static function csacaukgwwayassy($swaukaagekiououo = '') { $mkysicwccoeicumg = self::umuecysoywoumgwo(); $eeamcawaiqocomwy = home_url(); if (!$mkysicwccoeicumg) { goto gkwuewqmqeswqukg; } switch ($mkysicwccoeicumg) { case "\x77\x70\155\x6c": $eeamcawaiqocomwy = $GLOBALS["\x73\x69\x74\x65\160\x72\x65\x73\x73"]->language_url($swaukaagekiououo); goto qcweoyigoaeacsow; case "\161\x74\162\141\x6e\x73\154\x61\164\145": $eeamcawaiqocomwy = qtrans_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto qcweoyigoaeacsow; case "\161\x74\x72\141\x6e\x73\x6c\x61\x74\x65\55\170": $eeamcawaiqocomwy = qtranxf_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto qcweoyigoaeacsow; case "\160\157\x6c\x79\x6c\x61\x6e\147": global $polylang; $cycooskwyukkaimm = function_exists("\x50\114\114") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm->options["\146\157\x72\x63\x65\x5f\154\x61\156\x67"]) && isset($cycooskwyukkaimm->links))) { goto wcekgciqeggiiwgk; } $eeamcawaiqocomwy = pll_home_url($swaukaagekiououo); wcekgciqeggiiwgk: } iyceygqsmokgmams: qcweoyigoaeacsow: gkwuewqmqeswqukg: return $eeamcawaiqocomwy; } public static function augqukusksqwwuus($aakkemqaqeckisew = '', $skacuygeqykiwiwy = '') { $msyoeiaqaaseqiaw = []; if (!($aakkemqaqeckisew && is_string($aakkemqaqeckisew))) { goto ekwuycsiuqwycqea; } $mkysicwccoeicumg = self::umuecysoywoumgwo(); if (!$mkysicwccoeicumg) { goto uamuuwkyuqomqyuy; } $ymkomcgesksuuysk = self::iciiggecqkuyiyaa(); if (!$ymkomcgesksuuysk) { goto kkmwwqyesmkescyg; } $ymkomcgesksuuysk = array_diff($ymkomcgesksuuysk, [$aakkemqaqeckisew]); if (!('' === $skacuygeqykiwiwy)) { goto sagemooicmgceiug; } $skacuygeqykiwiwy = self::cmaecekuqkwmemms("\117\120\124\111\115\x49\x5a\101\124\111\x4f\x4e\137\103\101\103\x48\105\x5f\x50\101\124\110"); sagemooicmgceiug: $mwgaccygeckyuamg = []; foreach ($ymkomcgesksuuysk as $swaukaagekiououo) { $parse_url = ManipulateFormat::gooqqcmsyseiaikc(self::csacaukgwwayassy($swaukaagekiououo)); $mwgaccygeckyuamg[] = ManipulateFile::cgwcgscqeqauaagi("{$skacuygeqykiwiwy}{$parse_url["\150\x6f\x73\164"]}\50\x2e\x2a\x29\x2f" . untrailingslashit($parse_url["\x70\x61\x74\x68"]), true); yeiokcoikcysyimu: } uqcwyyiykmwygeau: return (array) DecoratorHook::sscegwueamckwmcy("\x63\141\143\x68\145\x5f\154\x61\156\x67\163\137\164\x6f\x5f\160\162\145\163\x65\162\x76\145", $mwgaccygeckyuamg); kkmwwqyesmkescyg: uamuuwkyuqomqyuy: ekwuycsiuqwycqea: return $msyoeiaqaaseqiaw; } }
