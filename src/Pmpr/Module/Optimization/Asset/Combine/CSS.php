<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6327197fdd72f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Manipulate\Manipulate; use WP_Styles; class CSS extends Combiner { const emmwouuqieykokuw = "\57\165\162\154\x5c\x73\52\134\x28\x5c\x73\x2a\x28\x3f\41\133\x22\47\135\77\144\141\164\141\72\x29\50\77\x21\x5b\47\x7c\x5c\x22\135\77\x5b\x5c\43\x7c\x5c\x25\x7c\x5d\x29\x28\133\136\x29\x5d\53\x29\x5c\163\x2a\134\51\50\133\136\73\x7d\x2c\134\x73\x5d\52\51\57\x69"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x70\x5f\x70\162\151\x6e\164\137\x73\x74\x79\154\x65\163", [$this, "\x71\x71\x63\x79\x6b\x61\x65\x69\x6f\151\x77\167\x61\161\157\163"], 0, 999); parent::wigskegsqequoeks(); } public function qqcykaeioiwwaqos() { global $wp_styles; $this->gaiaksuyqkeeiqgo($wp_styles); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { $ogomymegcoacqisg = $egsumesakcaaukem->src; if (!$ugmuiugkaygmsagq instanceof WP_Styles) { goto amgsueumgaguceaa; } $eueuqacmukymcyya = $egsumesakcaaukem->handle; $cksswamugeeeawgw = $egsumesakcaaukem->ver; $awyimywmcyoukaao = ManipulateArray::get($egsumesakcaaukem->extra, "\x72\164\154"); $ogomymegcoacqisg = $ugmuiugkaygmsagq->_css_href($ogomymegcoacqisg, $cksswamugeeeawgw, $eueuqacmukymcyya); if (!("\x72\x74\x6c" === $ugmuiugkaygmsagq->text_direction && $awyimywmcyoukaao)) { goto mwysseaekcsiesmm; } if (is_bool($awyimywmcyoukaao) || "\162\145\x70\x6c\141\143\x65" === $awyimywmcyoukaao) { goto iiiccouaaqsyikae; } $ogomymegcoacqisg = $ugmuiugkaygmsagq->_css_href($awyimywmcyoukaao, $cksswamugeeeawgw, "{$eueuqacmukymcyya}\55\x72\164\154"); goto ukkcmocamwgiqayu; iiiccouaaqsyikae: $scqcgogsiaiksiiq = ManipulateArray::get($egsumesakcaaukem->extra, "\x73\x75\x66\x66\151\170", ''); $ogomymegcoacqisg = str_replace("{$scqcgogsiaiksiiq}\56\143\163\x73", "\x2d\x72\164\x6c{$scqcgogsiaiksiiq}\x2e\x63\x73\163", $ugmuiugkaygmsagq->_css_href($ogomymegcoacqisg, $cksswamugeeeawgw, "{$eueuqacmukymcyya}\x2d\x72\x74\x6c")); ukkcmocamwgiqayu: mwysseaekcsiesmm: amgsueumgaguceaa: return $this->ukacwyckseuqsqgc($ogomymegcoacqisg); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { $ewgwqamkygiqaawc = $this->msgwwgomkkomssew($ewgwqamkygiqaawc, $egsumesakcaaukem); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); } public function msgwwgomkkomssew($ewgwqamkygiqaawc, $egsumesakcaaukem) { $couygeouymagssgw = untrailingslashit(Manipulate::cmaecekuqkwmemms("\x41\x42\x53\120\x41\124\x48")); $cgmkimaosyyuqeyg = site_url(); if (!($couygeouymagssgw && $egsumesakcaaukem instanceof _WP_Dependency)) { goto ucqmumuygcywwqma; } $geagigaoacaqqcwc = $couygeouymagssgw . trailingslashit(dirname(str_replace($cgmkimaosyyuqeyg, '', $egsumesakcaaukem->src))); $ksiyqouuaoymsycg = []; $gwgucoaaqcwwciqq = ManipulateArray::get(ManipulateFormat::gooqqcmsyseiaikc($cgmkimaosyyuqeyg), "\150\x6f\x73\164"); preg_match_all(self::emmwouuqieykokuw, $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto ukqocwewouckikso; } foreach ($meyiiwcswqmuggyg[1] as $wsiwwymgaoqsyagc) { $eeamcawaiqocomwy = trim($wsiwwymgaoqsyagc, "\40\x9\12\15\x0\13\x22\47"); $qoqyywgqmicskwsc = realpath("{$geagigaoacaqqcwc}{$eeamcawaiqocomwy}"); if (!$qoqyywgqmicskwsc) { goto gommacygsykyussk; } $ksiyqouuaoymsycg[$wsiwwymgaoqsyagc] = "\x2f\x2f" . str_replace($couygeouymagssgw, $gwgucoaaqcwwciqq, $qoqyywgqmicskwsc); gommacygsykyussk: uougwgeyiokewkkm: } gygwewcqsmwqismo: ukqocwewouckikso: $ewgwqamkygiqaawc = $this->qgsuqwiisyaoycya($ewgwqamkygiqaawc, $ksiyqouuaoymsycg); ucqmumuygcywwqma: return $ewgwqamkygiqaawc; } public function qgsuqwiisyaoycya($ewgwqamkygiqaawc, $qqueccegigsqmmmg = []) { if (!$qqueccegigsqmmmg) { goto uykousayyomcaeaa; } $yygmoeguaqyumuui = array_map("\163\x74\162\x6c\x65\156", array_keys($qqueccegigsqmmmg)); array_multisort($yygmoeguaqyumuui, SORT_DESC, $qqueccegigsqmmmg); $ewgwqamkygiqaawc = str_replace(array_keys($qqueccegigsqmmmg), array_values($qqueccegigsqmmmg), $ewgwqamkygiqaawc); uykousayyomcaeaa: return $ewgwqamkygiqaawc; } }
