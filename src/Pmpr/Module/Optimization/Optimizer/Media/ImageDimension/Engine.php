<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66350189c616d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\x63\141\x6b\153\171\x71\x69\171\167\x63\x73\x6f\151\153\x77\x73"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\151\x6d\147\x3a\156\157\164\50\133\x77\151\144\164\x68\135\x29\x3a\156\x6f\164\x28\x5b\x68\145\x69\147\x68\164\135\x29"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto kiskwawumeiiieuk; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\164\141\x2d\154\141\x7a\x79\55\x6f\162\x69\x67\151\156\x61\154") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\x61\164\141\55\x6e\x6f\55\151\x6d\x61\147\145\55\144\x69\155\145\x6e\163\151\x6f\x6e\163"))) { goto kwasqmcyiswoaiuu; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x72\x63"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto oqgymyiwckkwueuw; } if (!ini_get("\x61\x6c\x6c\x6f\x77\137\165\x72\154\137\146\x6f\x70\145\x6e")) { goto wqwmuuicoqigqwyc; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\163\143\x68\145\155\145"] . "\x3a\57\57" . $yiasugywggckywoa["\x68\x6f\163\x74"] . $yiasugywggckywoa["\160\141\164\x68"]); wqwmuuicoqigqwyc: goto qywkykqkeeuccoui; oqgymyiwckkwueuw: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa["\x70\x61\x74\150"]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto gaouaiemokqqgssw; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); gaouaiemokqqgssw: qywkykqkeeuccoui: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto ugkwqaywmwqucoeo; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\163\x74\171\154\x65")) { goto sockocsycmkaeosg; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\164\171\x6c\145"); if (!preg_match_all("\57\50\x77\151\144\164\x68\51\72\x5c\x73\52\x28\134\x64\53\51\x70\170\73\x7c\50\150\145\151\147\x68\x74\x29\72\x5c\163\52\x28\x5c\x64\x2b\51\160\x78\73\x2f", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto uoewiggumomegksg; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; ywokggauuiosegog: } yqqseqskcqeqkacm: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::sogmkkcwuamuqegw, 0); uoewiggumomegksg: sockocsycmkaeosg: goto syisomgawcsqeemk; ugkwqaywmwqucoeo: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); syisomgawcsqeemk: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto asoecuscmsyusmkg; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::sogmkkcwuamuqegw, $cswemwoyesycwkuq); asoecuscmsyusmkg: kwasqmcyiswoaiuu: return $ymyisaeksssueeik; }, false, true); kiskwawumeiiieuk: return $moooemyaqewumiay; } }
