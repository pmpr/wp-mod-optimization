<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66c7b6e5555be             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\x65\x74\x5f\x61\x63\x74\151\x76\x65\x5f\154\141\x6e\147\165\141\x67\x65\163")) { goto mmusoowesqcmuqew; } if (!empty($polylang) && function_exists("\x70\154\154\x5f\x6c\141\x6e\x67\x75\x61\147\x65\163\137\154\151\163\x74")) { goto oaciskoioaecgwee; } if (!empty($q_config) && is_array($q_config)) { goto ysusaysykymegguk; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x68\141\x73\137\x69\61\x38\x6e", ''); if (is_string($mkysicwccoeicumg)) { goto emgssiqceagusgyg; } $mkysicwccoeicumg = ''; emgssiqceagusgyg: goto yskswskmsgoouyco; ysusaysykymegguk: if (function_exists("\161\164\162\x61\x6e\170\x66\137\x63\x6f\156\166\145\x72\164\x55\x52\114")) { goto gooqkmwgsmseuiwq; } if (!function_exists("\x71\x74\x72\141\156\163\x5f\143\157\x6e\166\x65\162\164\x55\x52\x4c")) { goto ugowqoisymsioeye; } $mkysicwccoeicumg = "\x71\x74\162\141\156\163\154\x61\x74\x65"; ugowqoisymsioeye: goto oeosugomyqyekmuq; gooqkmwgsmseuiwq: $mkysicwccoeicumg = "\x71\x74\162\x61\x6e\x73\154\x61\164\x65\55\170"; oeosugomyqyekmuq: yskswskmsgoouyco: goto csskguekqcwcmocu; oaciskoioaecgwee: if (empty(pll_languages_list())) { goto mwgaaiaswusakkaq; } $mkysicwccoeicumg = "\160\x6f\x6c\171\x6c\x61\x6e\x67"; mwgaaiaswusakkaq: csskguekqcwcmocu: goto wkwkeicwosmkcygc; mmusoowesqcmuqew: $mkysicwccoeicumg = "\167\160\x6d\154"; wkwkeicwosmkcygc: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto kygcymkakucoeock; } switch ($mkysicwccoeicumg) { case "\167\160\x6d\154": $ymkomcgesksuuysk = $GLOBALS["\163\x69\x74\x65\x70\162\145\163\163"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto ugcyukgoaiiysymc; case "\x71\x74\162\141\x6e\163\x6c\141\164\145": case "\x71\x74\x72\141\156\163\154\x61\164\145\55\x78": $ymkomcgesksuuysk = !empty($GLOBALS["\x71\x5f\143\157\156\x66\151\147"]["\145\156\141\x62\x6c\145\x64\137\x6c\x61\x6e\x67\x75\141\x67\145\x73"]) ? $GLOBALS["\161\x5f\143\157\x6e\146\151\x67"]["\145\x6e\x61\142\154\145\144\x5f\154\x61\156\x67\165\141\x67\145\x73"] : []; goto ugcyukgoaiiysymc; case "\160\x6f\x6c\171\154\141\x6e\147": $ymkomcgesksuuysk = pll_languages_list(); goto ugcyukgoaiiysymc; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\61\70\156\137\154\x61\x6e\147\165\x61\x67\x65\x73", []); } yuoyeeuqqaockyqw: ugcyukgoaiiysymc: kygcymkakucoeock: if (is_array($ymkomcgesksuuysk)) { goto qkiqquymecyoouki; } $ymkomcgesksuuysk = []; qkiqquymecyoouki: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\167\x70\155\x6c" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\157\157\143\157\155\x6d\x65\x72\x63\145\55\x6d\x75\x6c\164\x69\x6c\x69\x6e\x67\x75\x61\x6c\57\167\x70\x6d\154\x2d\x77\157\x6f\x63\x6f\x6d\x6d\145\162\143\x65\x2e\x70\150\x70")) { goto amkcomscieegkygc; } if (!("\x70\157\154\171\x6c\141\x6e\147" === $eokyomeiuimoaiac && function_exists("\160\x6c\154\x5f\147\145\164\137\160\x6f\x73\x74\137\x6c\141\x6e\x67\x75\141\x67\x65"))) { goto iqukigoyiqgcggue; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); iqukigoyiqgcggue: goto uugekiumuwemyuyc; amkcomscieegkygc: $swaukaagekiououo = $GLOBALS["\x73\x69\164\145\x70\162\x65\x73\x73"]->get_language_for_element($gcqseksiskwueksc, "\x70\x6f\x73\164\137" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); uugekiumuwemyuyc: return $swaukaagekiououo; } }
