<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             664697c805b60             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\x65\x74\x5f\141\x63\x74\x69\x76\145\137\x6c\x61\x6e\147\x75\x61\x67\x65\163")) { goto uwyeycaywowwiquu; } if (!empty($polylang) && function_exists("\160\154\154\x5f\154\x61\156\x67\165\141\x67\x65\x73\137\154\x69\x73\164")) { goto ykcmomsiayaymysm; } if (!empty($q_config) && is_array($q_config)) { goto seyygcwcaogkmaqe; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\150\141\x73\137\x69\61\70\x6e", ''); if (is_string($mkysicwccoeicumg)) { goto wwgikwuigiiqsswq; } $mkysicwccoeicumg = ''; wwgikwuigiiqsswq: goto uugiuqkesegaamqw; seyygcwcaogkmaqe: if (function_exists("\161\x74\x72\x61\156\x78\146\137\x63\157\x6e\x76\145\x72\x74\125\x52\x4c")) { goto soqkewsayowwcmco; } if (!function_exists("\x71\164\x72\x61\x6e\x73\137\x63\157\x6e\166\145\x72\164\x55\122\114")) { goto ugyawwukegyoqmsq; } $mkysicwccoeicumg = "\x71\164\162\141\x6e\163\x6c\x61\164\145"; ugyawwukegyoqmsq: goto ukigmkeewuqomooc; soqkewsayowwcmco: $mkysicwccoeicumg = "\161\164\x72\141\156\x73\154\141\164\x65\55\170"; ukigmkeewuqomooc: uugiuqkesegaamqw: goto qoaawmmcqyacokws; ykcmomsiayaymysm: if (empty(pll_languages_list())) { goto ciiyqsiswkcwsocm; } $mkysicwccoeicumg = "\x70\x6f\154\171\154\x61\156\x67"; ciiyqsiswkcwsocm: qoaawmmcqyacokws: goto cwmuqmoeauqcewoy; uwyeycaywowwiquu: $mkysicwccoeicumg = "\x77\160\x6d\154"; cwmuqmoeauqcewoy: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto ceosmkqgqgwsowwg; } switch ($mkysicwccoeicumg) { case "\167\x70\x6d\154": $ymkomcgesksuuysk = $GLOBALS["\x73\151\164\x65\160\x72\x65\163\163"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto eiecgqokmuekaesc; case "\161\x74\x72\141\x6e\x73\154\141\x74\x65": case "\161\164\162\141\156\163\154\141\164\x65\x2d\x78": $ymkomcgesksuuysk = !empty($GLOBALS["\x71\137\x63\x6f\x6e\146\151\147"]["\x65\x6e\141\142\154\145\x64\137\x6c\x61\x6e\147\165\x61\x67\145\x73"]) ? $GLOBALS["\161\x5f\143\157\x6e\x66\151\147"]["\x65\156\141\x62\154\x65\x64\137\x6c\141\156\x67\165\141\x67\145\x73"] : []; goto eiecgqokmuekaesc; case "\x70\157\154\171\x6c\x61\156\x67": $ymkomcgesksuuysk = pll_languages_list(); goto eiecgqokmuekaesc; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\x31\x38\x6e\137\154\x61\156\x67\x75\x61\x67\145\163", []); } ggsugekocmsukuci: eiecgqokmuekaesc: ceosmkqgqgwsowwg: if (is_array($ymkomcgesksuuysk)) { goto kcwgiwimgqesukqu; } $ymkomcgesksuuysk = []; kcwgiwimgqesukqu: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\167\160\155\x6c" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\157\x6f\x63\157\x6d\155\145\162\143\145\55\x6d\x75\x6c\x74\x69\x6c\x69\156\x67\x75\141\x6c\57\x77\160\155\154\x2d\167\x6f\157\x63\157\155\155\145\x72\143\x65\x2e\160\150\x70")) { goto gcecieuocqawmgci; } if (!("\160\157\x6c\171\x6c\141\156\x67" === $eokyomeiuimoaiac && function_exists("\160\154\154\x5f\x67\x65\164\x5f\x70\x6f\163\164\137\154\x61\156\x67\x75\x61\x67\x65"))) { goto wicuauokauykwoeu; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); wicuauokauykwoeu: goto msmmiaumiasmsiog; gcecieuocqawmgci: $swaukaagekiououo = $GLOBALS["\163\x69\x74\145\x70\x72\x65\x73\163"]->get_language_for_element($gcqseksiskwueksc, "\x70\157\163\x74\137" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); msmmiaumiasmsiog: return $swaukaagekiououo; } }
