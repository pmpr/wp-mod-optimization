<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1eae63b52e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\143\141\153\x6b\x79\x71\x69\x79\167\143\x73\157\x69\153\167\x73"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\151\155\147\72\x6e\157\x74\x28\133\x77\x69\x64\164\150\x5d\x29\x3a\156\x6f\x74\50\x5b\150\x65\x69\x67\150\164\135\x29"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto easuiqiooiwgswmm; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\x74\x61\x2d\154\141\x7a\171\55\x6f\162\x69\147\x69\156\141\x6c") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\x61\x74\x61\55\x6e\x6f\x2d\151\x6d\x61\147\x65\x2d\144\x69\x6d\145\x6e\163\x69\x6f\156\x73"))) { goto cimascmiesomqgqs; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\x72\143"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto emeeocqaisksyioq; } if (!ini_get("\x61\x6c\x6c\157\x77\137\165\162\x6c\x5f\x66\x6f\160\145\x6e")) { goto mcqwuawosciucemq; } $mkomwsiykqigmqca = $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!in_array(pathinfo($mkomwsiykqigmqca, PATHINFO_EXTENSION), ["\160\156\147", "\167\x65\142\160", "\147\151\x66", "\x73\x76\x67", "\152\160\145\147", "\152\x70\x67"], true)) { goto aqekkeqmmewoyawu; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\163\143\x68\x65\155\145"] . "\72\57\x2f" . $yiasugywggckywoa[Constants::ckiaowgkqoewoseo] . $mkomwsiykqigmqca); aqekkeqmmewoyawu: mcqwuawosciucemq: goto maggecymmmesqmqs; emeeocqaisksyioq: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto miugmimciywcgswm; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); miugmimciywcgswm: maggecymmmesqmqs: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto ossakckwskyqusmm; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x73\164\x79\154\x65")) { goto gyskcwykkyakeims; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\x74\x79\x6c\x65"); if (!preg_match_all("\57\x28\x77\x69\144\164\150\x29\x3a\x5c\163\52\50\134\x64\53\x29\160\x78\x3b\174\50\150\x65\x69\x67\x68\x74\x29\72\134\163\x2a\50\x5c\144\x2b\51\x70\x78\73\x2f", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto qkiyyywwuiuackao; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; ecgwgamiseokmise: } csaksaisgawusswg: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::sogmkkcwuamuqegw, 0); qkiyyywwuiuackao: gyskcwykkyakeims: goto mcagemacuqyskogs; ossakckwskyqusmm: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); mcagemacuqyskogs: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto aamgqoqyyooimqkm; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::sogmkkcwuamuqegw, $cswemwoyesycwkuq); aamgqoqyyooimqkm: cimascmiesomqgqs: return $ymyisaeksssueeik; }, false); easuiqiooiwgswmm: return $moooemyaqewumiay; } }
