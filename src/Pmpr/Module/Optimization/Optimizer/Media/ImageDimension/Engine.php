<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66585f57028db             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\143\x61\153\153\171\161\151\x79\167\143\163\x6f\151\153\x77\x73"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\151\x6d\x67\72\156\x6f\164\50\x5b\167\151\144\164\x68\x5d\51\72\x6e\x6f\x74\50\133\150\x65\151\x67\150\x74\x5d\51"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto iwsuawwqomaowuii; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\x61\164\x61\55\154\x61\x7a\x79\x2d\x6f\x72\x69\147\x69\x6e\141\x6c") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\141\164\141\x2d\x6e\x6f\x2d\151\x6d\141\147\145\x2d\x64\151\x6d\145\x6e\163\151\x6f\156\163"))) { goto qoqskyuuwueqkquk; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x72\x63"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto wkeuuycukmuqiaom; } if (!ini_get("\141\154\x6c\157\167\137\x75\162\x6c\x5f\x66\x6f\160\145\156")) { goto sggawugoykqcmsug; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\x73\143\x68\145\155\x65"] . "\x3a\57\x2f" . $yiasugywggckywoa["\150\x6f\x73\164"] . $yiasugywggckywoa["\160\141\x74\150"]); sggawugoykqcmsug: goto wakmayaoqoskekqy; wkeuuycukmuqiaom: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa["\160\x61\x74\150"]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto ueigkucgaucgeimc; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); ueigkucgaucgeimc: wakmayaoqoskekqy: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto eogwckcymuugikuy; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\163\164\x79\154\x65")) { goto eeauyscekuckoues; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\x74\x79\x6c\x65"); if (!preg_match_all("\x2f\x28\167\151\144\164\x68\x29\x3a\x5c\163\52\x28\x5c\x64\53\x29\x70\170\x3b\x7c\50\x68\x65\x69\147\x68\x74\51\x3a\x5c\163\x2a\x28\x5c\144\53\x29\x70\x78\73\57", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto mwsmsguqqkcwiiuk; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; owmuceyswmgueasi: } qmuwoecuacmkwgem: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::sogmkkcwuamuqegw, 0); mwsmsguqqkcwiiuk: eeauyscekuckoues: goto msemumccgceyugmg; eogwckcymuugikuy: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); msemumccgceyugmg: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto wagqgeqymeqoeuyi; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::sogmkkcwuamuqegw, $cswemwoyesycwkuq); wagqgeqymeqoeuyi: qoqskyuuwueqkquk: return $ymyisaeksssueeik; }, false, true); iwsuawwqomaowuii: return $moooemyaqewumiay; } }
