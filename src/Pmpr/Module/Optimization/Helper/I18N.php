<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e29dc7ba6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Module\Optimization\Optimization; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\145\164\137\x61\143\164\151\x76\x65\137\154\141\x6e\147\165\141\147\145\x73")) { goto oaociaioauummsey; } if (!empty($polylang) && function_exists("\160\154\x6c\x5f\154\141\156\x67\165\141\x67\x65\163\137\154\151\x73\164")) { goto qayiqaykkywcyisq; } if (!empty($q_config) && is_array($q_config)) { goto aqeyqwuywqcmuoce; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\150\x61\x73\137\x69\x31\x38\156", ''); if (is_string($mkysicwccoeicumg)) { goto kikkkocywiyuyuqw; } $mkysicwccoeicumg = ''; kikkkocywiyuyuqw: goto aymoguycgmuggcik; aqeyqwuywqcmuoce: if (function_exists("\x71\x74\x72\141\x6e\170\146\137\x63\157\156\x76\x65\162\164\125\122\x4c")) { goto yosyyiksyyscacus; } if (!function_exists("\x71\x74\x72\141\x6e\x73\x5f\143\157\x6e\x76\x65\162\164\x55\x52\114")) { goto qiqegseqwywcmwoe; } $mkysicwccoeicumg = "\161\164\162\x61\x6e\163\x6c\141\164\x65"; qiqegseqwywcmwoe: goto kwcscewawgicomok; yosyyiksyyscacus: $mkysicwccoeicumg = "\161\164\162\141\156\163\x6c\x61\x74\x65\x2d\x78"; kwcscewawgicomok: aymoguycgmuggcik: goto akoweomooyuwamow; qayiqaykkywcyisq: if (empty(pll_languages_list())) { goto koiyaaokigmamqyc; } $mkysicwccoeicumg = "\x70\x6f\154\171\154\x61\x6e\147"; koiyaaokigmamqyc: akoweomooyuwamow: goto cueuscqkicwwicei; oaociaioauummsey: $mkysicwccoeicumg = "\x77\160\155\154"; cueuscqkicwwicei: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto kiewcwsykccgocuc; } switch ($mkysicwccoeicumg) { case "\x77\x70\155\154": $ymkomcgesksuuysk = $GLOBALS["\x73\x69\164\145\x70\x72\145\163\163"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto gcecamucuogcciig; case "\x71\164\x72\x61\x6e\163\154\141\164\145": case "\161\x74\162\141\156\x73\x6c\141\x74\x65\55\170": $ymkomcgesksuuysk = !empty($GLOBALS["\x71\x5f\x63\157\x6e\146\151\x67"]["\145\x6e\x61\x62\154\x65\x64\x5f\154\141\156\147\165\141\x67\x65\x73"]) ? $GLOBALS["\161\137\143\157\156\x66\151\x67"]["\145\x6e\141\142\154\x65\x64\137\x6c\x61\x6e\147\165\141\x67\x65\163"] : []; goto gcecamucuogcciig; case "\160\157\154\x79\x6c\141\156\x67": $ymkomcgesksuuysk = pll_languages_list(); goto gcecamucuogcciig; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\x31\x38\156\x5f\154\x61\156\x67\x75\x61\x67\145\x73", []); } suscosoukqeyyqgs: gcecamucuogcciig: kiewcwsykccgocuc: if (is_array($ymkomcgesksuuysk)) { goto eysuawiooiswaseq; } $ymkomcgesksuuysk = []; eysuawiooiswaseq: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\167\160\x6d\154" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\167\157\x6f\143\x6f\x6d\155\x65\162\143\x65\55\x6d\165\154\164\x69\x6c\151\x6e\x67\x75\x61\x6c\x2f\167\160\155\154\x2d\x77\157\x6f\x63\x6f\x6d\x6d\145\x72\x63\x65\56\160\150\160")) { goto eogomkswkaqwyycm; } if (!("\160\157\154\x79\x6c\x61\x6e\x67" === $eokyomeiuimoaiac && function_exists("\x70\x6c\154\x5f\147\x65\164\x5f\x70\157\x73\x74\x5f\154\141\156\x67\165\x61\x67\145"))) { goto iecqkqoiqimmisyw; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); iecqkqoiqimmisyw: goto egiauwuekseyeaeq; eogomkswkaqwyycm: $swaukaagekiououo = $GLOBALS["\163\151\164\x65\x70\x72\145\x73\163"]->get_language_for_element($gcqseksiskwueksc, "\x70\x6f\163\164\x5f" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); egiauwuekseyeaeq: return $swaukaagekiououo; } }
