<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d23d0b3ad57             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Module\Optimization\Optimization; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\145\164\137\x61\x63\x74\x69\x76\145\137\154\141\156\147\165\141\x67\145\x73")) { goto awaaowoqskgokwiy; } if (!empty($polylang) && function_exists("\x70\x6c\154\137\154\141\x6e\x67\x75\x61\147\145\x73\x5f\x6c\151\163\x74")) { goto uugwoygiyecgymgw; } if (!empty($q_config) && is_array($q_config)) { goto cauqmacqkssciwyq; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\150\x61\163\137\x69\61\70\x6e", ''); if (is_string($mkysicwccoeicumg)) { goto emagssesowicacoa; } $mkysicwccoeicumg = ''; emagssesowicacoa: goto gusgywuaimwooawc; cauqmacqkssciwyq: if (function_exists("\x71\164\162\141\x6e\x78\146\x5f\x63\157\156\166\145\162\x74\x55\x52\114")) { goto gwksywaoeowkesei; } if (!function_exists("\x71\x74\x72\x61\x6e\x73\x5f\x63\157\156\x76\x65\162\x74\125\x52\114")) { goto amgsicqmemeuuaem; } $mkysicwccoeicumg = "\x71\164\x72\141\156\x73\154\x61\164\x65"; amgsicqmemeuuaem: goto sgkwaiuukkaqyqki; gwksywaoeowkesei: $mkysicwccoeicumg = "\161\164\x72\x61\x6e\163\x6c\141\x74\x65\55\170"; sgkwaiuukkaqyqki: gusgywuaimwooawc: goto acmgueaoaaweiqqu; uugwoygiyecgymgw: if (empty(pll_languages_list())) { goto mgieeyuyuoeccaog; } $mkysicwccoeicumg = "\x70\x6f\x6c\x79\x6c\141\156\x67"; mgieeyuyuoeccaog: acmgueaoaaweiqqu: goto uqiekawkwcegsumy; awaaowoqskgokwiy: $mkysicwccoeicumg = "\x77\x70\155\x6c"; uqiekawkwcegsumy: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto gkoyqgogsukuowqi; } switch ($mkysicwccoeicumg) { case "\167\x70\155\x6c": $ymkomcgesksuuysk = $GLOBALS["\x73\151\x74\x65\160\x72\145\x73\x73"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto kgikoagqwkuocesg; case "\x71\164\x72\141\x6e\x73\x6c\x61\164\x65": case "\161\x74\x72\x61\156\x73\154\141\x74\145\x2d\x78": $ymkomcgesksuuysk = !empty($GLOBALS["\161\137\x63\157\x6e\146\151\147"]["\145\156\141\142\x6c\x65\144\x5f\154\141\156\147\x75\x61\x67\x65\x73"]) ? $GLOBALS["\x71\x5f\x63\x6f\156\x66\151\x67"]["\x65\156\141\x62\x6c\x65\x64\x5f\154\141\156\147\165\141\x67\145\x73"] : []; goto kgikoagqwkuocesg; case "\160\x6f\154\171\x6c\141\156\147": $ymkomcgesksuuysk = pll_languages_list(); goto kgikoagqwkuocesg; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\61\x38\x6e\137\154\141\x6e\x67\x75\141\x67\145\163", []); } skaayekywasksoug: kgikoagqwkuocesg: gkoyqgogsukuowqi: if (is_array($ymkomcgesksuuysk)) { goto sgikkoswwyesqomo; } $ymkomcgesksuuysk = []; sgikkoswwyesqomo: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\x77\x70\x6d\154" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\157\157\143\157\x6d\155\x65\162\x63\x65\x2d\155\x75\154\164\151\x6c\x69\156\x67\x75\141\154\57\x77\160\155\154\x2d\167\157\x6f\x63\157\155\x6d\145\162\x63\x65\x2e\160\x68\160")) { goto cksoeiwawiygyiyg; } if (!("\x70\x6f\x6c\171\x6c\141\x6e\x67" === $eokyomeiuimoaiac && function_exists("\160\x6c\154\137\147\145\164\137\160\157\x73\x74\137\154\x61\x6e\147\165\141\x67\x65"))) { goto aayysiegiyweiyuu; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); aayysiegiyweiyuu: goto cyqokqcacysioeyc; cksoeiwawiygyiyg: $swaukaagekiououo = $GLOBALS["\x73\151\x74\x65\160\x72\x65\163\x73"]->get_language_for_element($gcqseksiskwueksc, "\x70\x6f\x73\164\x5f" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); cyqokqcacysioeyc: return $swaukaagekiououo; } }
