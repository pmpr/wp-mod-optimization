<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665afacdd5cec             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\143\x61\153\x6b\x79\161\151\171\167\x63\163\x6f\x69\153\167\x73"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\151\155\x67\x3a\x6e\x6f\164\50\x5b\167\151\x64\x74\150\135\x29\x3a\x6e\x6f\164\50\133\150\x65\151\x67\150\164\135\x29"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto iwsuawwqomaowuii; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\x61\x74\x61\x2d\x6c\141\172\x79\55\x6f\162\151\x67\151\x6e\141\154") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\x61\x74\x61\x2d\x6e\x6f\x2d\151\155\x61\x67\x65\55\x64\x69\x6d\145\156\x73\151\x6f\156\x73"))) { goto qoqskyuuwueqkquk; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x72\143"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto wkeuuycukmuqiaom; } if (!ini_get("\141\154\154\157\x77\x5f\x75\x72\154\137\146\157\160\145\156")) { goto sggawugoykqcmsug; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\x73\143\x68\x65\155\145"] . "\x3a\57\x2f" . $yiasugywggckywoa["\x68\x6f\x73\164"] . $yiasugywggckywoa["\160\x61\x74\x68"]); sggawugoykqcmsug: goto wakmayaoqoskekqy; wkeuuycukmuqiaom: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa["\x70\x61\164\150"]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto ueigkucgaucgeimc; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); ueigkucgaucgeimc: wakmayaoqoskekqy: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto eogwckcymuugikuy; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\163\164\x79\154\x65")) { goto eeauyscekuckoues; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\x74\171\x6c\x65"); if (!preg_match_all("\57\x28\x77\x69\x64\164\150\51\x3a\x5c\163\x2a\50\134\x64\53\51\160\170\x3b\174\50\x68\x65\x69\x67\x68\x74\51\x3a\x5c\x73\52\50\x5c\x64\53\x29\160\x78\x3b\x2f", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto mwsmsguqqkcwiiuk; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; owmuceyswmgueasi: } qmuwoecuacmkwgem: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::sogmkkcwuamuqegw, 0); mwsmsguqqkcwiiuk: eeauyscekuckoues: goto msemumccgceyugmg; eogwckcymuugikuy: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); msemumccgceyugmg: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto wagqgeqymeqoeuyi; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::sogmkkcwuamuqegw, $cswemwoyesycwkuq); wagqgeqymeqoeuyi: qoqskyuuwueqkquk: return $ymyisaeksssueeik; }, false, true); iwsuawwqomaowuii: return $moooemyaqewumiay; } }
