<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e0e3312730f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; class ManipulateI18N extends Manipulate { public static function umuecysoywoumgwo() { global $sitepress, $q_config, $polylang; if (!(!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\x65\x74\137\x61\143\x74\x69\x76\x65\x5f\x6c\141\x6e\147\x75\141\x67\x65\x73"))) { goto wkwkeicwosmkcygc; } return "\167\x70\155\154"; wkwkeicwosmkcygc: if (!(!empty($polylang) && function_exists("\x70\154\154\x5f\x6c\141\x6e\x67\x75\141\147\x65\163\137\x6c\151\163\x74"))) { goto yuoyeeuqqaockyqw; } $ymkomcgesksuuysk = pll_languages_list(); if (!empty($ymkomcgesksuuysk)) { goto ugcyukgoaiiysymc; } return false; ugcyukgoaiiysymc: return "\160\x6f\154\x79\154\141\x6e\147"; yuoyeeuqqaockyqw: if (!(!empty($q_config) && is_array($q_config))) { goto iqukigoyiqgcggue; } if (!function_exists("\x71\x74\162\141\156\170\146\x5f\143\x6f\x6e\166\145\162\164\x55\122\x4c")) { goto kygcymkakucoeock; } return "\x71\x74\x72\141\x6e\163\x6c\141\164\145\x2d\x78"; kygcymkakucoeock: if (!function_exists("\x71\x74\162\x61\x6e\x73\x5f\x63\157\156\x76\x65\162\164\x55\122\x4c")) { goto qkiqquymecyoouki; } return "\161\164\162\141\x6e\x73\x6c\x61\x74\145"; qkiqquymecyoouki: iqukigoyiqgcggue: return false; } public static function mceoyuqgagciommq() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); $auwuoyyagaiegwae = []; if ("\167\160\x6d\154" === $eokyomeiuimoaiac) { goto mieeugiewckceagc; } if ("\161\x74\x72\x61\x6e\x73\x6c\x61\164\x65" === $eokyomeiuimoaiac || "\x71\164\162\141\x6e\x73\154\141\x74\145\55\170" === $eokyomeiuimoaiac) { goto uqkqmseoeemyaqck; } if ("\160\157\x6c\171\x6c\x61\x6e\x67" === $eokyomeiuimoaiac) { goto cceyoumkiicaguio; } goto uckeuuaqimqamuyc; mieeugiewckceagc: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { global $sitepress; $auwuoyyagaiegwae[] = $sitepress->language_url($swaukaagekiououo); uugekiumuwemyuyc: } amkcomscieegkygc: goto uckeuuaqimqamuyc; uqkqmseoeemyaqck: foreach (self::iciiggecqkuyiyaa() as $swaukaagekiououo) { if ("\161\164\x72\141\x6e\163\x6c\x61\164\145" === $eokyomeiuimoaiac) { goto qcywwqceiqogcoyo; } $auwuoyyagaiegwae[] = qtranxf_convertURL(home_url(), $swaukaagekiououo, true); goto giiucsyqgcooaima; qcywwqceiqogcoyo: $auwuoyyagaiegwae[] = qtrans_convertURL(home_url(), $swaukaagekiououo, true); giiucsyqgcooaima: osoqssymqqoqcuky: } qoameasiqwaqgmca: goto uckeuuaqimqamuyc; cceyoumkiicaguio: global $polylang; $cycooskwyukkaimm = function_exists("\x50\114\114") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm))) { goto awikkaqmmuqkukma; } $auwuoyyagaiegwae = wp_list_pluck($cycooskwyukkaimm->model->get_languages_list(), "\163\145\x61\162\x63\x68\x5f\x75\x72\x6c"); awikkaqmmuqkukma: uckeuuaqimqamuyc: if (!empty($auwuoyyagaiegwae)) { goto yayykakkyeoieicm; } $auwuoyyagaiegwae[] = ManipulateServer::gmigwwwmwemyaayy(); yayykakkyeoieicm: return $auwuoyyagaiegwae; } public static function iciiggecqkuyiyaa() { $mmgwamioewukeoom = []; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$eokyomeiuimoaiac) { goto qiawociayswicugw; } if (!("\167\160\x6d\x6c" === $eokyomeiuimoaiac)) { goto yuiouamaogkkqmck; } global $sitepress; $mmgwamioewukeoom = array_keys($sitepress->get_active_languages()); yuiouamaogkkqmck: if (!("\x71\x74\162\141\x6e\x73\154\141\x74\145" === $eokyomeiuimoaiac || "\x71\164\x72\141\156\x73\x6c\x61\x74\145\x2d\x78" === $eokyomeiuimoaiac)) { goto mmwqwowqcaseyyki; } global $q_config; $mmgwamioewukeoom = !empty($q_config["\x65\156\141\x62\154\145\x64\x5f\154\x61\156\147\x75\141\x67\145\163"]) ? $q_config["\145\156\141\x62\154\145\144\137\x6c\x61\x6e\x67\x75\x61\147\145\163"] : []; mmwqwowqcaseyyki: if (!("\160\157\x6c\171\154\x61\x6e\x67" === $eokyomeiuimoaiac)) { goto wsckacayikksiswo; } $mmgwamioewukeoom = pll_languages_list(); wsckacayikksiswo: qiawociayswicugw: return $mmgwamioewukeoom; } public static function yeaukamowmkwaowi() { $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if ($eokyomeiuimoaiac) { goto ngagwiymmmycgscu; } return []; ngagwiymmmycgscu: global $q_config; switch ($eokyomeiuimoaiac) { case "\x77\160\x6d\154": $omkysikckkcieckq = DecoratorOption::get("\151\143\x6c\137\163\151\164\x65\x70\x72\x65\163\163\137\x73\145\x74\164\x69\x6e\147\x73"); if (!(2 === (int) $omkysikckkcieckq["\x6c\141\156\x67\165\141\x67\x65\137\x6e\x65\x67\157\x74\151\141\x74\x69\x6f\156\x5f\x74\171\x70\145"])) { goto augqweqsqioesmim; } return self::mceoyuqgagciommq(); augqweqsqioesmim: goto qimomesqamyyicmo; case "\x71\x74\x72\141\156\163\x6c\x61\x74\145": if (!(3 === (int) $q_config["\165\162\154\137\155\x6f\x64\145"])) { goto aescssauecumgwso; } return self::mceoyuqgagciommq(); aescssauecumgwso: goto qimomesqamyyicmo; case "\161\164\x72\x61\156\x73\x6c\141\164\145\x2d\170": if (!(3 === (int) $q_config["\x75\162\x6c\x5f\155\x6f\x64\145"] || 4 === (int) $q_config["\x75\x72\x6c\x5f\155\x6f\x64\145"])) { goto cooeoemccqiyewks; } return self::mceoyuqgagciommq(); cooeoemccqiyewks: goto qimomesqamyyicmo; case "\160\157\154\x79\x6c\x61\x6e\147": global $polylang; $cycooskwyukkaimm = function_exists("\x50\x4c\114") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm) && is_object($cycooskwyukkaimm) && (2 === (int) $cycooskwyukkaimm->options["\x66\x6f\x72\143\145\x5f\x6c\141\x6e\147"] || 3 === (int) $cycooskwyukkaimm->options["\x66\157\x72\x63\145\x5f\x6c\x61\x6e\x67"]))) { goto qcceyyqiuiqcyqqm; } return self::mceoyuqgagciommq(); qcceyyqiuiqcyqqm: } kkacggiosquqagew: qimomesqamyyicmo: return []; } public static function emqmaiomewcmuacu($post = null) { $swaukaagekiououo = false; $eokyomeiuimoaiac = self::umuecysoywoumgwo(); if (!$post) { goto gqyyccceswkqcmaa; } if ("\167\x70\155\154" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\157\x6f\143\x6f\155\155\x65\162\143\x65\55\155\x75\154\x74\151\x6c\x69\x6e\147\x75\141\154\57\x77\x70\x6d\x6c\x2d\x77\x6f\157\143\x6f\x6d\x6d\x65\162\143\x65\56\160\x68\x70")) { goto qkwckeqowgaokkuy; } if ("\160\157\x6c\x79\154\141\156\147" === $eokyomeiuimoaiac && function_exists("\x70\154\154\137\147\x65\164\x5f\160\157\163\164\x5f\154\x61\156\x67\165\x61\x67\x65")) { goto kqkymieyyqaoeymw; } goto ssesmiwwmsayksum; qkwckeqowgaokkuy: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($post, "\160\x6f\163\x74\137" . ManipulatePost::gueasuouwqysmomu($post)); goto ssesmiwwmsayksum; kqkymieyyqaoeymw: $swaukaagekiououo = pll_get_post_language($post); ssesmiwwmsayksum: gqyyccceswkqcmaa: return $swaukaagekiououo; } public static function auksikwsewaywikq($mkomwsiykqigmqca = '') { global $wpml_url_filters; static $uogwqioiiwqsyksu = []; static $sckcicueiusskgie; if (isset($uogwqioiiwqsyksu[$mkomwsiykqigmqca])) { goto bagkewioewygysea; } if (isset($sckcicueiusskgie)) { goto sykuuisikqcwuaqu; } $sckcicueiusskgie = $wpml_url_filters && is_object($wpml_url_filters) && method_exists($wpml_url_filters, "\150\x6f\155\145\x5f\x75\162\154\x5f\x66\151\x6c\x74\x65\x72"); sykuuisikqcwuaqu: if (!$sckcicueiusskgie) { goto mquyemuqcqeassqc; } DecoratorHook::ggmgmqswqkgecosg("\x68\x6f\x6d\145\137\165\162\x6c", [$wpml_url_filters, "\x68\x6f\x6d\x65\137\x75\x72\154\137\146\x69\154\x74\145\x72"], -10); mquyemuqcqeassqc: $uogwqioiiwqsyksu[$mkomwsiykqigmqca] = ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca); if (!$sckcicueiusskgie) { goto weiaigyyigkusucy; } DecoratorHook::cecaguuoecmccuse("\150\x6f\155\145\137\x75\162\x6c", [$wpml_url_filters, "\150\x6f\155\x65\x5f\x75\x72\154\x5f\146\151\x6c\164\145\162"], -10, 4); weiaigyyigkusucy: bagkewioewygysea: return $uogwqioiiwqsyksu[$mkomwsiykqigmqca]; } public static function csacaukgwwayassy($swaukaagekiououo = '') { $mkysicwccoeicumg = self::umuecysoywoumgwo(); $eeamcawaiqocomwy = home_url(); if (!$mkysicwccoeicumg) { goto sgkwaiuukkaqyqki; } switch ($mkysicwccoeicumg) { case "\x77\160\155\x6c": $eeamcawaiqocomwy = $GLOBALS["\x73\x69\x74\x65\160\x72\x65\x73\163"]->language_url($swaukaagekiououo); goto mgieeyuyuoeccaog; case "\x71\164\162\x61\156\x73\154\141\x74\145": $eeamcawaiqocomwy = qtrans_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto mgieeyuyuoeccaog; case "\x71\x74\162\x61\x6e\x73\154\141\164\145\55\x78": $eeamcawaiqocomwy = qtranxf_convertURL($eeamcawaiqocomwy, $swaukaagekiououo, true); goto mgieeyuyuoeccaog; case "\160\157\154\171\154\141\x6e\x67": global $polylang; $cycooskwyukkaimm = function_exists("\120\x4c\114") ? PLL() : $polylang; if (!(!empty($cycooskwyukkaimm->options["\x66\x6f\x72\x63\x65\137\154\x61\156\147"]) && isset($cycooskwyukkaimm->links))) { goto gwksywaoeowkesei; } $eeamcawaiqocomwy = pll_home_url($swaukaagekiououo); gwksywaoeowkesei: } amgsicqmemeuuaem: mgieeyuyuoeccaog: sgkwaiuukkaqyqki: return $eeamcawaiqocomwy; } public static function augqukusksqwwuus($aakkemqaqeckisew = '', $skacuygeqykiwiwy = '') { $msyoeiaqaaseqiaw = []; if (!($aakkemqaqeckisew && is_string($aakkemqaqeckisew))) { goto awaaowoqskgokwiy; } $mkysicwccoeicumg = self::umuecysoywoumgwo(); if (!$mkysicwccoeicumg) { goto acmgueaoaaweiqqu; } $ymkomcgesksuuysk = self::iciiggecqkuyiyaa(); if (!$ymkomcgesksuuysk) { goto uugwoygiyecgymgw; } $ymkomcgesksuuysk = array_diff($ymkomcgesksuuysk, [$aakkemqaqeckisew]); if (!('' === $skacuygeqykiwiwy)) { goto emagssesowicacoa; } $skacuygeqykiwiwy = self::cmaecekuqkwmemms("\117\120\x54\111\115\111\132\101\x54\111\117\x4e\137\x43\x41\x43\x48\105\137\x50\101\x54\x48"); emagssesowicacoa: $mwgaccygeckyuamg = []; foreach ($ymkomcgesksuuysk as $swaukaagekiououo) { $parse_url = ManipulateFormat::gooqqcmsyseiaikc(self::csacaukgwwayassy($swaukaagekiououo)); $mwgaccygeckyuamg[] = ManipulateFile::cgwcgscqeqauaagi("{$skacuygeqykiwiwy}{$parse_url["\x68\x6f\x73\x74"]}\x28\56\x2a\x29\57" . untrailingslashit($parse_url["\160\141\x74\150"]), true); gusgywuaimwooawc: } cauqmacqkssciwyq: return (array) DecoratorHook::sscegwueamckwmcy("\143\x61\143\150\145\x5f\154\x61\156\147\x73\137\164\x6f\x5f\x70\x72\x65\x73\x65\x72\166\x65", $mwgaccygeckyuamg); uugwoygiyecgymgw: acmgueaoaaweiqqu: awaaowoqskgokwiy: return $msyoeiaqaaseqiaw; } }
