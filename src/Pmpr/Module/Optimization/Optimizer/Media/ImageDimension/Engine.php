<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665c30d9443ce             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\143\x61\153\153\171\161\x69\171\x77\x63\163\157\x69\x6b\x77\163"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\x69\x6d\147\x3a\156\x6f\x74\50\x5b\167\151\x64\164\x68\x5d\51\72\x6e\x6f\x74\x28\x5b\150\x65\x69\x67\x68\x74\x5d\x29"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto iwsuawwqomaowuii; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\x61\164\141\55\x6c\141\172\x79\x2d\157\x72\151\x67\151\x6e\141\x6c") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\x61\164\x61\x2d\156\x6f\55\x69\155\x61\x67\145\x2d\x64\151\x6d\145\156\x73\x69\x6f\156\x73"))) { goto qoqskyuuwueqkquk; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\162\x63"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto wkeuuycukmuqiaom; } if (!ini_get("\141\x6c\x6c\x6f\x77\x5f\165\x72\154\x5f\146\x6f\160\145\156")) { goto sggawugoykqcmsug; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\x73\143\x68\145\x6d\x65"] . "\72\57\57" . $yiasugywggckywoa["\x68\157\x73\x74"] . $yiasugywggckywoa["\160\x61\x74\x68"]); sggawugoykqcmsug: goto wakmayaoqoskekqy; wkeuuycukmuqiaom: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa["\160\x61\164\150"]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto ueigkucgaucgeimc; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); ueigkucgaucgeimc: wakmayaoqoskekqy: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto eogwckcymuugikuy; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\163\164\171\154\x65")) { goto eeauyscekuckoues; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\164\171\154\145"); if (!preg_match_all("\57\x28\167\x69\144\x74\x68\51\72\x5c\x73\x2a\50\134\x64\x2b\51\160\x78\73\x7c\x28\150\x65\151\x67\150\164\51\x3a\134\x73\x2a\50\134\144\x2b\51\x70\x78\73\57", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto mwsmsguqqkcwiiuk; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; owmuceyswmgueasi: } qmuwoecuacmkwgem: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::sogmkkcwuamuqegw, 0); mwsmsguqqkcwiiuk: eeauyscekuckoues: goto msemumccgceyugmg; eogwckcymuugikuy: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); msemumccgceyugmg: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto wagqgeqymeqoeuyi; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::sogmkkcwuamuqegw, $cswemwoyesycwkuq); wagqgeqymeqoeuyi: qoqskyuuwueqkquk: return $ymyisaeksssueeik; }, false, true); iwsuawwqomaowuii: return $moooemyaqewumiay; } }
