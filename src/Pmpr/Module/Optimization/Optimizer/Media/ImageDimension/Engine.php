<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66375048491fe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\143\141\153\153\171\161\x69\x79\167\143\163\157\151\x6b\x77\x73"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\151\x6d\x67\x3a\156\x6f\x74\x28\x5b\x77\151\144\x74\150\135\51\x3a\156\157\x74\50\133\x68\145\151\147\150\x74\x5d\x29"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto aqekkeqmmewoyawu; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\x74\x61\55\x6c\x61\172\171\x2d\157\x72\x69\147\151\156\x61\154") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\141\164\141\x2d\156\157\55\x69\x6d\x61\147\x65\55\144\x69\155\x65\156\x73\151\157\156\x73"))) { goto miugmimciywcgswm; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x72\x63"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto sockocsycmkaeosg; } if (!ini_get("\x61\154\154\157\167\x5f\x75\162\154\x5f\x66\x6f\x70\145\x6e")) { goto uoewiggumomegksg; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\163\143\x68\145\155\x65"] . "\x3a\57\x2f" . $yiasugywggckywoa["\x68\x6f\x73\164"] . $yiasugywggckywoa["\x70\x61\x74\150"]); uoewiggumomegksg: goto ugkwqaywmwqucoeo; sockocsycmkaeosg: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa["\160\141\164\x68"]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto ywokggauuiosegog; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); ywokggauuiosegog: ugkwqaywmwqucoeo: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto oaqeoqsksuyyggmg; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\163\x74\171\154\145")) { goto kiskwawumeiiieuk; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\171\154\x65"); if (!preg_match_all("\x2f\x28\167\x69\144\164\150\51\72\x5c\163\52\50\134\144\53\51\160\170\x3b\174\x28\x68\x65\x69\147\x68\164\51\72\x5c\x73\52\50\134\x64\53\51\160\x78\x3b\57", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto kwasqmcyiswoaiuu; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; asoecuscmsyusmkg: } syisomgawcsqeemk: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::sogmkkcwuamuqegw, 0); kwasqmcyiswoaiuu: kiskwawumeiiieuk: goto kkmuuoscccmokkiw; oaqeoqsksuyyggmg: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); kkmuuoscccmokkiw: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto awuwuuuagqysukku; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::sogmkkcwuamuqegw, $cswemwoyesycwkuq); awuwuuuagqysukku: miugmimciywcgswm: return $ymyisaeksssueeik; }, false, true); aqekkeqmmewoyawu: return $moooemyaqewumiay; } }
