<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e8fa75eb5af             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; class ManipulateI18N extends Manipulate { public static function umuecysoywoumgwo() { global $sitepress, $q_config, $polylang; if (!(!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\147\145\x74\x5f\141\143\164\x69\x76\x65\137\154\x61\x6e\147\165\141\147\x65\x73"))) { goto giiucsyqgcooaima; } return "\x77\160\155\x6c"; giiucsyqgcooaima: if (!(!empty($polylang) && function_exists("\x70\154\x6c\x5f\154\x61\156\x67\165\141\147\145\x73\137\x6c\x69\163\164"))) { goto uckeuuaqimqamuyc; } $ymkomcgesksuuysk = pll_languages_list(); if (!empty($ymkomcgesksuuysk)) { goto awikkaqmmuqkukma; } return false; awikkaqmmuqkukma: return "\160\157\154\171\x6c\141\156\x67"; uckeuuaqimqamuyc: if (!(!empty($q_config) && is_array($q_config))) { goto cceyoumkiicaguio; } if (!function_exists("\161\x74\162\x61\156\x78\146\137\143\x6f\156\x76\x65\x72\164\x55\122\x4c")) { goto mieeugiewckceagc; } return "\161\164\x72\141\156\x73\154\141\x74\145\55\x78"; mieeugiewckceagc: if (!function_exists("\161\164\x72\141\156\163\137\143\x6f\x6e\166\145\162\164\125\122\114")) { goto uqkqmseoeemyaqck; } return "\x71\x74\162\141\x6e\x73\154\141\164\x65"; uqkqmseoeemyaqck: cceyoumkiicaguio: return false; } public static function mceoyuqgagciommq() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); $auwuoyyagaiegwae = []; if ("\167\x70\x6d\x6c" === $eokyomeiuimoaiac) { goto augqweqsqioesmim; } if ("\x71\164\x72\x61\x6e\163\x6c\x61\164\145" === $eokyomeiuimoaiac || "\x71\164\x72\141\156\x73\x6c\141\164\x65\x2d\x78" === $eokyomeiuimoaiac) { goto aescssauecumgwso; } if ("\160\x6f\154\x79\154\x61\x6e\147" === $eokyomeiuimoaiac) { goto cooeoemccqiyewks; } goto kkacggiosquqagew; augqweqsqioesmim: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { global $sitepress; $auwuoyyagaiegwae[] = $sitepress->language_url($swaukaagekiououo); yuiouamaogkkqmck: } yayykakkyeoieicm: goto kkacggiosquqagew; aescssauecumgwso: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { if ("\x71\x74\162\x61\x6e\163\154\x61\x74\x65" === $eokyomeiuimoaiac) { goto qiawociayswicugw; } $auwuoyyagaiegwae[] = qtranxf_convertURL(home_url(), $swaukaagekiououo, true); goto ngagwiymmmycgscu; qiawociayswicugw: $auwuoyyagaiegwae[] = qtrans_convertURL(home_url(), $swaukaagekiououo, true); ngagwiymmmycgscu: wsckacayikksiswo: } mmwqwowqcaseyyki: goto kkacggiosquqagew; cooeoemccqiyewks: global $polylang; $cycooskwyukkaimm = function_exists("\120\x4c\114") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm))) { goto qimomesqamyyicmo; } $auwuoyyagaiegwae = wp_list_pluck($cycooskwyukkaimm->model->get_languages_list(), "\x73\145\141\x72\143\150\x5f\x75\x72\x6c"); qimomesqamyyicmo: kkacggiosquqagew: if (!empty($auwuoyyagaiegwae)) { goto qcceyyqiuiqcyqqm; } $auwuoyyagaiegwae[] = ManipulateServer::gmigwwwmwemyaayy(); qcceyyqiuiqcyqqm: return $auwuoyyagaiegwae; } public static function iciiggecqkuyiyaa() { $mmgwamioewukeoom = []; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$eokyomeiuimoaiac) { goto gqyyccceswkqcmaa; } if (!("\167\160\x6d\154" === $eokyomeiuimoaiac)) { goto ssesmiwwmsayksum; } global $sitepress; $mmgwamioewukeoom = array_keys($sitepress->get_active_languages()); ssesmiwwmsayksum: if (!("\161\x74\x72\141\x6e\x73\154\141\164\x65" === $eokyomeiuimoaiac || "\161\x74\x72\141\x6e\163\x6c\141\x74\x65\55\x78" === $eokyomeiuimoaiac)) { goto qkwckeqowgaokkuy; } global $q_config; $mmgwamioewukeoom = !empty($q_config["\x65\156\x61\142\154\x65\144\x5f\x6c\x61\156\x67\x75\x61\x67\145\x73"]) ? $q_config["\145\x6e\x61\142\154\x65\144\x5f\x6c\x61\156\147\165\141\147\145\x73"] : []; qkwckeqowgaokkuy: if (!("\160\157\x6c\171\154\141\156\147" === $eokyomeiuimoaiac)) { goto kqkymieyyqaoeymw; } $mmgwamioewukeoom = pll_languages_list(); kqkymieyyqaoeymw: gqyyccceswkqcmaa: return $mmgwamioewukeoom; } public static function yeaukamowmkwaowi() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if ($eokyomeiuimoaiac) { goto sykuuisikqcwuaqu; } return []; sykuuisikqcwuaqu: global $q_config; switch ($eokyomeiuimoaiac) { case "\x77\x70\155\x6c": $omkysikckkcieckq = DecoratorOption::get("\x69\143\154\x5f\x73\x69\164\145\160\162\x65\x73\x73\137\x73\x65\x74\164\151\156\147\x73"); if (!(2 === (int) $omkysikckkcieckq["\x6c\141\156\x67\165\141\x67\x65\137\156\x65\147\x6f\x74\x69\141\164\x69\x6f\x6e\137\x74\171\x70\145"])) { goto bagkewioewygysea; } return self::mceoyuqgagciommq(); bagkewioewygysea: goto mquyemuqcqeassqc; case "\x71\164\x72\x61\x6e\x73\154\x61\164\145": if (!(3 === (int) $q_config["\165\162\x6c\137\x6d\157\x64\x65"])) { goto mgieeyuyuoeccaog; } return self::mceoyuqgagciommq(); mgieeyuyuoeccaog: goto mquyemuqcqeassqc; case "\x71\x74\162\141\156\163\x6c\141\x74\145\x2d\x78": if (!(3 === (int) $q_config["\x75\x72\154\x5f\155\x6f\x64\145"] || 4 === (int) $q_config["\x75\x72\x6c\x5f\x6d\x6f\x64\x65"])) { goto amgsicqmemeuuaem; } return self::mceoyuqgagciommq(); amgsicqmemeuuaem: goto mquyemuqcqeassqc; case "\x70\x6f\154\x79\154\x61\x6e\147": global $polylang; $cycooskwyukkaimm = function_exists("\x50\114\114") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm) && (2 === (int) $cycooskwyukkaimm->options["\x66\x6f\x72\143\145\x5f\154\x61\156\147"] || 3 === (int) $cycooskwyukkaimm->options["\146\x6f\x72\x63\x65\137\x6c\x61\x6e\x67"]))) { goto gwksywaoeowkesei; } return self::mceoyuqgagciommq(); gwksywaoeowkesei: } weiaigyyigkusucy: mquyemuqcqeassqc: return []; } public static function emqmaiomewcmuacu($post = null) { $swaukaagekiououo = false; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$post) { goto gusgywuaimwooawc; } if ("\x77\x70\x6d\154" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\x6f\x6f\143\x6f\155\x6d\x65\162\x63\x65\x2d\155\x75\x6c\x74\x69\x6c\x69\156\x67\165\x61\x6c\57\167\160\x6d\154\x2d\x77\x6f\x6f\x63\157\x6d\155\145\162\x63\x65\56\160\150\160")) { goto emagssesowicacoa; } if ("\160\x6f\x6c\171\154\x61\156\147" === $eokyomeiuimoaiac && function_exists("\160\x6c\154\x5f\x67\x65\164\x5f\x70\x6f\163\164\137\154\141\156\x67\165\x61\147\x65")) { goto cauqmacqkssciwyq; } goto sgkwaiuukkaqyqki; emagssesowicacoa: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($post, "\160\x6f\163\164\x5f" . ManipulatePost::gueasuouwqysmomu($post)); goto sgkwaiuukkaqyqki; cauqmacqkssciwyq: $swaukaagekiououo = pll_get_post_language($post); sgkwaiuukkaqyqki: gusgywuaimwooawc: return $swaukaagekiououo; } public static function auksikwsewaywikq($mkomwsiykqigmqca = '') { global $wpml_url_filters; static $uogwqioiiwqsyksu = []; static $sckcicueiusskgie; if (isset($uogwqioiiwqsyksu[$mkomwsiykqigmqca])) { goto uqiekawkwcegsumy; } if (isset($sckcicueiusskgie)) { goto uugwoygiyecgymgw; } $sckcicueiusskgie = $wpml_url_filters && is_object($wpml_url_filters) && method_exists($wpml_url_filters, "\x68\x6f\155\145\137\165\x72\x6c\x5f\146\151\x6c\164\145\162"); uugwoygiyecgymgw: if (!$sckcicueiusskgie) { goto acmgueaoaaweiqqu; } DecoratorHook::ggmgmqswqkgecosg("\x68\x6f\155\145\x5f\x75\162\154", [$wpml_url_filters, "\150\157\155\x65\137\165\162\x6c\x5f\x66\x69\154\164\145\162"], -10); acmgueaoaaweiqqu: $uogwqioiiwqsyksu[$mkomwsiykqigmqca] = ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca); if (!$sckcicueiusskgie) { goto awaaowoqskgokwiy; } DecoratorHook::cecaguuoecmccuse("\x68\157\x6d\145\x5f\165\x72\x6c", [$wpml_url_filters, "\150\x6f\155\145\x5f\x75\162\x6c\x5f\146\x69\154\164\x65\162"], -10, 4); awaaowoqskgokwiy: uqiekawkwcegsumy: return $uogwqioiiwqsyksu[$mkomwsiykqigmqca]; } public static function csacaukgwwayassy($swaukaagekiououo = '') { $mkysicwccoeicumg = self::umuecysoywoumgwo(); $eeamcawaiqocomwy = home_url(); if (!$mkysicwccoeicumg) { goto sgikkoswwyesqomo; } switch ($mkysicwccoeicumg) { case "\x77\160\155\x6c": $eeamcawaiqocomwy = $GLOBALS["\x73\151\164\145\x70\x72\x65\x73\163"]->language_url($swaukaagekiououo); goto kgikoagqwkuocesg; case "\161\164\x72\141\x6e\163\x6c\x61\x74\x65": $eeamcawaiqocomwy = qtrans_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto kgikoagqwkuocesg; case "\161\x74\x72\x61\x6e\x73\154\x61\164\x65\55\x78": $eeamcawaiqocomwy = qtranxf_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto kgikoagqwkuocesg; case "\x70\x6f\154\171\x6c\x61\x6e\147": global $polylang; $cycooskwyukkaimm = function_exists("\x50\114\114") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm->options["\146\x6f\x72\x63\145\137\154\141\156\x67"]) && isset($cycooskwyukkaimm->links))) { goto gkoyqgogsukuowqi; } $eeamcawaiqocomwy = pll_home_url($swaukaagekiououo); gkoyqgogsukuowqi: } skaayekywasksoug: kgikoagqwkuocesg: sgikkoswwyesqomo: return $eeamcawaiqocomwy; } public static function augqukusksqwwuus($aakkemqaqeckisew = '', $skacuygeqykiwiwy = '') { $msyoeiaqaaseqiaw = []; if (!($aakkemqaqeckisew && is_string($aakkemqaqeckisew))) { goto iikgiaocummweiga; } $mkysicwccoeicumg = self::umuecysoywoumgwo(); if (!$mkysicwccoeicumg) { goto ueqsiwuwumoqgsck; } $ymkomcgesksuuysk = self::iciiggecqkuyiyaa(); if (!$ymkomcgesksuuysk) { goto akwwuuiykscgicuw; } $ymkomcgesksuuysk = array_diff($ymkomcgesksuuysk, [$aakkemqaqeckisew]); if (!('' === $skacuygeqykiwiwy)) { goto aayysiegiyweiyuu; } $skacuygeqykiwiwy = self::cmaecekuqkwmemms("\x4f\120\124\111\x4d\111\132\x41\x54\x49\x4f\x4e\x5f\x43\101\103\x48\x45\137\120\x41\x54\110"); aayysiegiyweiyuu: $mwgaccygeckyuamg = []; foreach ($ymkomcgesksuuysk as $swaukaagekiououo) { $parse_url = ManipulateFormat::gooqqcmsyseiaikc(self::csacaukgwwayassy($swaukaagekiououo)); $mwgaccygeckyuamg[] = ManipulateFile::cgwcgscqeqauaagi("{$skacuygeqykiwiwy}{$parse_url["\150\x6f\x73\x74"]}\50\x2e\52\x29\x2f" . untrailingslashit($parse_url["\160\x61\x74\x68"]), true); cyqokqcacysioeyc: } cksoeiwawiygyiyg: return (array) DecoratorHook::sscegwueamckwmcy("\143\x61\143\x68\x65\x5f\x6c\141\156\147\163\137\x74\x6f\x5f\x70\162\145\x73\145\162\x76\145", $mwgaccygeckyuamg); akwwuuiykscgicuw: ueqsiwuwumoqgsck: iikgiaocummweiga: return $msyoeiaqaaseqiaw; } }
