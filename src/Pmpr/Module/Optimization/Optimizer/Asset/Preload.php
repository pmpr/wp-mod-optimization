<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d23d0b3ad57             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Preload extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x70\137\x68\x65\141\144", [$this, "\x73\x67\157\x6f\x6f\x75\141\151\x67\161\x77\151\141\161\x6f\161"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse(Optimization::kgswyesggeyekgmg . "\x63\x61\143\150\x65\x5f\x68\x65\x61\x64\x65\x72\163\x5f\154\x69\x73\164", [$this, "\x73\x73\147\171\153\x75\x75\x75\x63\153\x61\153\x79\147\167\147"]); } public function auwoukwweaicagsq() { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\141\163\163\145\x74\137\x70\162\145\x6c\157\x61\x64\137\x6c\151\156\x6b\x73", []); } public function sgooouaigqwiaqoq() { if (!$this->ocysssyiuaueqiei()) { goto syusgosewwkoagoq; } if (!headers_sent()) { goto ugogoekeckgcmuaw; } echo $this->ukkcoiggmmycaeuw(); goto egesuwkqkmaigaoe; ugogoekeckgcmuaw: header("\61\x30\x33\40\105\x61\x72\154\x79\x20\110\151\156\164\x73", false); header("\114\x69\156\153\x3a\x20" . $this->wecsewaimwquoqkk(), false); egesuwkqkmaigaoe: syusgosewwkoagoq: } public function wecsewaimwquoqkk() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { $aqykuigiuwmmcieu .= $this->gqiiiaisiqmqomww($ogiyyuwciysokiuc) . "\x2c"; eweaaismksecwagy: } mcqucouuiuoagqwc: return rtrim($aqykuigiuwmmcieu, "\x2c"); } public function ukkcoiggmmycaeuw() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { if (!isset($ogiyyuwciysokiuc["\156\157\163\143\162\151\x70\164"])) { goto owgsameoayaogsma; } $cuiaccicqeqwyyuo = $ogiyyuwciysokiuc["\156\x6f\163\143\162\x69\x70\164"]; unset($ogiyyuwciysokiuc["\156\x6f\x73\x63\162\151\x70\164"]); $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yoamscgeuweiugse($cuiaccicqeqwyyuo); owgsameoayaogsma: $aqykuigiuwmmcieu .= $this->oqsucquusggqcoao($ogiyyuwciysokiuc); oeamoqweiueaueay: } icumkkykaoqycqqu: return $aqykuigiuwmmcieu; } public function ssgykuuuckakygwg($uykgysuswksgmwqy) : array { $aiwcguiecocoyqqi = $this->wecsewaimwquoqkk(); if (!$aiwcguiecocoyqqi) { goto kyiwsiakwgiwouyi; } $uykgysuswksgmwqy[] = "\61\x30\63\x20\105\x61\x72\154\171\x20\110\151\156\164\x73"; $uykgysuswksgmwqy["\x4c\x69\x6e\153"] = $aiwcguiecocoyqqi; kyiwsiakwgiwouyi: return $uykgysuswksgmwqy; } private function gqiiiaisiqmqomww(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if (!$siquossayskcwkea) { goto sksgcusuyqcwqswe; } if (isset($siquossayskcwkea["\162\145\154"])) { goto awgmegueeqeyqamu; } $siquossayskcwkea["\162\x65\154"] = Constants::iwksyuwwwkucsisq; awgmegueeqeyqamu: $qookweymeqawmcwo = ''; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!(!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\x72\145\x6c", "\x61\x73", "\143\162\x6f\x73\x73\157\162\x69\x67\x69\x6e", "\x74\171\x70\x65", "\156\x6f\x70\x75\x73\x68"], true))) { goto esagiiawomyacuiw; } goto aoaqwygkaagiuuws; esagiiawomyacuiw: if (!is_string($eqgoocgaqwqcimie)) { goto maaisuqwkymeguys; } $qookweymeqawmcwo .= "\x20{$ymkomoccmymcoiea}\75\42{$eqgoocgaqwqcimie}\x22\73"; goto qkyciyiwkmgkmquk; maaisuqwkymeguys: $qookweymeqawmcwo .= "\40{$eqgoocgaqwqcimie}\x3b"; qkyciyiwkmgkmquk: aoaqwygkaagiuuws: } gqimwsyemoewagcy: $qookweymeqawmcwo = trim($qookweymeqawmcwo); $qookweymeqawmcwo = rtrim($qookweymeqawmcwo, "\73"); $sogksuscggsicmac = sprintf("\x3c\45\x73\x3e\x3b\x20\x25\163", esc_url_raw($siquossayskcwkea["\x68\x72\145\x66"]), $qookweymeqawmcwo); sksgcusuyqcwqswe: return $sogksuscggsicmac; } public function oqsucquusggqcoao(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if (!$siquossayskcwkea) { goto aeiemwacaiygemmg; } $wwgucssaecqekuek = []; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!(!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\x72\145\x6c", "\x68\x72\145\x66", "\141\x73", "\x63\x72\x6f\x73\x73\x6f\x72\x69\147\x69\x6e", "\164\171\x70\145", "\157\x6e\154\157\141\x64"], true))) { goto yggseoaommssscwo; } goto iuwkiyimqmgguose; yggseoaommssscwo: $wwgucssaecqekuek[$ymkomoccmymcoiea] = $eqgoocgaqwqcimie; iuwkiyimqmgguose: } ayceeyuocgowqwsa: $sogksuscggsicmac = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\x6c\151\156\x6b", $wwgucssaecqekuek); aeiemwacaiygemmg: return $sogksuscggsicmac; } public function iwwioqumuewcikoq(array $siquossayskcwkea) : array { if (isset($siquossayskcwkea["\x68\162\x65\146"])) { goto yyqygaokeccgugos; } return []; yyqygaokeccgugos: if (!isset($siquossayskcwkea[Constants::caoiqkqugiqqqimm])) { goto oeusomaaeekakake; } $siquossayskcwkea[Constants::caoiqkqugiqqqimm] = Constants::iwksyuwwwkucsisq; oeusomaaeekakake: return $siquossayskcwkea; } }
