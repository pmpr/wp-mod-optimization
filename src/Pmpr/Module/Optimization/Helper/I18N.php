<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6686aaf854850             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\147\x65\164\x5f\141\143\x74\x69\x76\145\137\154\141\x6e\147\165\141\147\145\163")) { goto goeoymmqqqeeoime; } if (!empty($polylang) && function_exists("\x70\154\154\x5f\154\141\156\x67\x75\141\x67\x65\x73\137\154\x69\163\164")) { goto qgegkeomwscwwiuw; } if (!empty($q_config) && is_array($q_config)) { goto egasokooagakisiy; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x68\141\163\x5f\x69\x31\x38\x6e", ''); if (is_string($mkysicwccoeicumg)) { goto mswsoaimesegiiic; } $mkysicwccoeicumg = ''; mswsoaimesegiiic: goto kecwuwwcwokuksyq; egasokooagakisiy: if (function_exists("\161\164\162\x61\x6e\x78\x66\137\143\157\x6e\166\145\x72\164\125\x52\x4c")) { goto wcesymwqykqoyuqk; } if (!function_exists("\161\x74\162\141\x6e\163\137\x63\x6f\x6e\166\x65\x72\164\125\x52\x4c")) { goto meawswgwagoqgkye; } $mkysicwccoeicumg = "\161\x74\x72\x61\x6e\163\x6c\x61\x74\x65"; meawswgwagoqgkye: goto usqgaogkqgemuima; wcesymwqykqoyuqk: $mkysicwccoeicumg = "\161\164\x72\x61\x6e\x73\x6c\141\x74\x65\55\170"; usqgaogkqgemuima: kecwuwwcwokuksyq: goto qmiwsequckckoaei; qgegkeomwscwwiuw: if (empty(pll_languages_list())) { goto goacqqsgaaigyuaw; } $mkysicwccoeicumg = "\x70\157\x6c\171\x6c\141\156\x67"; goacqqsgaaigyuaw: qmiwsequckckoaei: goto eiawsoasmscmqswa; goeoymmqqqeeoime: $mkysicwccoeicumg = "\167\160\155\x6c"; eiawsoasmscmqswa: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto ygkcacsyyckescqs; } switch ($mkysicwccoeicumg) { case "\x77\x70\x6d\x6c": $ymkomcgesksuuysk = $GLOBALS["\x73\x69\x74\x65\160\162\x65\x73\x73"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto ickcmqoiosquugwe; case "\161\164\x72\141\x6e\163\154\141\x74\x65": case "\161\x74\x72\x61\156\x73\154\x61\x74\x65\55\x78": $ymkomcgesksuuysk = !empty($GLOBALS["\x71\x5f\x63\x6f\x6e\146\151\x67"]["\x65\156\141\x62\x6c\145\144\137\x6c\141\156\147\165\x61\x67\x65\x73"]) ? $GLOBALS["\x71\137\143\157\156\146\x69\x67"]["\145\156\141\x62\154\145\x64\137\x6c\141\x6e\147\x75\141\x67\x65\163"] : []; goto ickcmqoiosquugwe; case "\x70\157\154\171\154\141\156\x67": $ymkomcgesksuuysk = pll_languages_list(); goto ickcmqoiosquugwe; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x69\x31\x38\x6e\x5f\x6c\141\156\147\x75\x61\147\x65\163", []); } qmeoaqmsuseueqiy: ickcmqoiosquugwe: ygkcacsyyckescqs: if (is_array($ymkomcgesksuuysk)) { goto cuoqqgaygogsmmic; } $ymkomcgesksuuysk = []; cuoqqgaygogsmmic: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\x77\x70\x6d\154" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\157\x6f\143\157\x6d\155\145\x72\143\145\x2d\x6d\165\154\x74\151\154\151\156\147\165\141\154\x2f\x77\160\155\x6c\55\x77\157\x6f\x63\x6f\x6d\x6d\145\x72\143\145\x2e\160\x68\x70")) { goto sukskmcwsoysiuqu; } if (!("\x70\x6f\x6c\x79\x6c\141\x6e\147" === $eokyomeiuimoaiac && function_exists("\x70\154\154\137\x67\145\164\137\160\157\163\x74\x5f\x6c\x61\x6e\x67\165\141\147\145"))) { goto cgewcsueoyaeikgm; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); cgewcsueoyaeikgm: goto igymseewwyiocoug; sukskmcwsoysiuqu: $swaukaagekiououo = $GLOBALS["\163\x69\x74\145\x70\162\x65\x73\163"]->get_language_for_element($gcqseksiskwueksc, "\160\x6f\x73\164\x5f" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); igymseewwyiocoug: return $swaukaagekiououo; } }
