<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581d1c9b1ab             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Module\Optimization\Optimization; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\145\x74\x5f\141\143\x74\x69\x76\x65\x5f\154\x61\x6e\147\x75\x61\147\145\163")) { $mkysicwccoeicumg = "\167\160\x6d\x6c"; } else { if (!empty($polylang) && function_exists("\160\x6c\x6c\137\x6c\141\x6e\x67\x75\x61\x67\145\163\x5f\x6c\151\163\x74")) { if (!empty(pll_languages_list())) { $mkysicwccoeicumg = "\160\x6f\154\171\x6c\x61\x6e\x67"; } } else { if (!empty($q_config) && is_array($q_config)) { if (function_exists("\x71\164\162\x61\x6e\x78\146\137\143\x6f\x6e\166\145\162\x74\125\122\114")) { $mkysicwccoeicumg = "\161\164\162\x61\x6e\163\154\x61\164\145\x2d\x78"; } else { if (function_exists("\161\164\162\x61\156\163\137\143\x6f\x6e\x76\x65\162\164\125\x52\114")) { $mkysicwccoeicumg = "\x71\164\162\141\156\163\154\141\164\145"; } } } else { $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x68\141\x73\137\x69\x31\x38\156", ''); if (!is_string($mkysicwccoeicumg)) { $mkysicwccoeicumg = ''; } } } } return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if ($mkysicwccoeicumg = $this->essaugkeosgskqme()) { switch ($mkysicwccoeicumg) { case "\x77\x70\x6d\x6c": $ymkomcgesksuuysk = $GLOBALS["\x73\x69\164\145\x70\162\x65\x73\x73"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); break; case "\x71\164\162\x61\156\x73\154\x61\164\145": case "\161\164\162\x61\156\x73\154\141\164\145\55\170": $ymkomcgesksuuysk = !empty($GLOBALS["\x71\x5f\143\157\156\x66\151\147"]["\x65\156\141\142\154\x65\x64\137\x6c\x61\156\147\165\141\147\x65\163"]) ? $GLOBALS["\161\x5f\x63\157\x6e\x66\x69\147"]["\145\x6e\x61\142\x6c\x65\144\137\154\x61\156\147\x75\141\147\x65\x73"] : []; break; case "\160\x6f\x6c\171\154\x61\x6e\x67": $ymkomcgesksuuysk = pll_languages_list(); break; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\61\70\156\x5f\154\x61\156\x67\x75\x61\147\145\163", []); } } if (!is_array($ymkomcgesksuuysk)) { $ymkomcgesksuuysk = []; } return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\167\160\155\154" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\x6f\157\143\157\155\155\x65\162\143\x65\55\155\x75\x6c\x74\x69\x6c\x69\156\147\x75\x61\154\x2f\167\x70\x6d\154\x2d\167\x6f\157\x63\x6f\155\155\145\162\143\x65\x2e\x70\x68\160")) { $swaukaagekiououo = $GLOBALS["\x73\x69\x74\145\x70\162\145\163\x73"]->get_language_for_element($gcqseksiskwueksc, "\160\x6f\x73\164\x5f" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); } else { if ("\x70\x6f\x6c\171\x6c\x61\156\147" === $eokyomeiuimoaiac && function_exists("\160\154\x6c\137\x67\x65\164\x5f\x70\157\163\x74\x5f\154\141\x6e\147\x75\x61\147\145")) { $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); } } return $swaukaagekiououo; } }
