<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6635076d1df7d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\x65\x74\137\x61\143\x74\151\166\x65\x5f\154\x61\x6e\147\x75\x61\x67\x65\x73")) { goto kwiuqqwamsimqgme; } if (!empty($polylang) && function_exists("\x70\154\154\x5f\154\x61\156\147\x75\141\x67\145\163\x5f\x6c\151\x73\164")) { goto gskacikgkwcuauko; } if (!empty($q_config) && is_array($q_config)) { goto mcmkqgkwyqoiikcq; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x68\x61\163\137\x69\x31\70\x6e", ''); if (is_string($mkysicwccoeicumg)) { goto aiukiwqmikscoswm; } $mkysicwccoeicumg = ''; aiukiwqmikscoswm: goto ssyukuseoymackeo; mcmkqgkwyqoiikcq: if (function_exists("\x71\x74\x72\x61\156\x78\146\137\143\157\156\166\x65\162\164\125\x52\x4c")) { goto mqoygcuqwacgycek; } if (!function_exists("\x71\164\x72\141\x6e\163\137\x63\157\x6e\166\145\162\x74\x55\x52\x4c")) { goto wiiqigwgyuiuksia; } $mkysicwccoeicumg = "\161\x74\x72\x61\156\163\x6c\x61\164\145"; wiiqigwgyuiuksia: goto agyycikucwgmysee; mqoygcuqwacgycek: $mkysicwccoeicumg = "\161\164\162\x61\156\163\x6c\x61\x74\x65\x2d\x78"; agyycikucwgmysee: ssyukuseoymackeo: goto yyieomeeqycmikqw; gskacikgkwcuauko: if (empty(pll_languages_list())) { goto yaumwqeommqigswq; } $mkysicwccoeicumg = "\160\x6f\x6c\x79\x6c\141\156\147"; yaumwqeommqigswq: yyieomeeqycmikqw: goto qmegcmqemmywoqas; kwiuqqwamsimqgme: $mkysicwccoeicumg = "\x77\160\155\x6c"; qmegcmqemmywoqas: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto seieguyaaiqismgo; } switch ($mkysicwccoeicumg) { case "\x77\x70\155\x6c": $ymkomcgesksuuysk = $GLOBALS["\163\151\x74\x65\160\162\x65\x73\x73"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto giooasyeqwaaocea; case "\x71\x74\x72\141\x6e\163\154\x61\x74\x65": case "\x71\x74\162\141\x6e\x73\x6c\x61\164\x65\x2d\170": $ymkomcgesksuuysk = !empty($GLOBALS["\161\137\x63\x6f\x6e\146\x69\x67"]["\x65\156\141\142\154\x65\144\137\x6c\x61\156\147\165\141\x67\x65\x73"]) ? $GLOBALS["\161\137\x63\157\156\x66\151\x67"]["\145\x6e\141\x62\x6c\145\144\137\x6c\141\156\147\165\x61\147\x65\x73"] : []; goto giooasyeqwaaocea; case "\160\157\x6c\171\x6c\x61\156\x67": $ymkomcgesksuuysk = pll_languages_list(); goto giooasyeqwaaocea; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\x31\x38\156\x5f\154\141\x6e\147\x75\x61\147\x65\x73", []); } uueywyysiicuauem: giooasyeqwaaocea: seieguyaaiqismgo: if (is_array($ymkomcgesksuuysk)) { goto qgyoesyiasqimcoe; } $ymkomcgesksuuysk = []; qgyoesyiasqimcoe: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\x77\160\x6d\154" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\x6f\x6f\143\x6f\x6d\x6d\145\x72\x63\x65\55\155\165\154\164\x69\x6c\151\x6e\147\x75\x61\x6c\57\x77\160\155\154\x2d\167\x6f\x6f\143\157\x6d\x6d\145\162\143\x65\x2e\160\150\160")) { goto gsgkayokisiesciy; } if (!("\160\x6f\154\x79\154\x61\x6e\147" === $eokyomeiuimoaiac && function_exists("\x70\154\154\137\147\145\x74\137\x70\157\x73\x74\137\x6c\x61\x6e\147\x75\x61\x67\x65"))) { goto kkwqmewaksmokuqy; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); kkwqmewaksmokuqy: goto ascogkesqmuuaesq; gsgkayokisiesciy: $swaukaagekiououo = $GLOBALS["\163\x69\164\145\x70\x72\145\x73\163"]->get_language_for_element($gcqseksiskwueksc, "\160\x6f\x73\x74\137" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); ascogkesqmuuaesq: return $swaukaagekiououo; } }
