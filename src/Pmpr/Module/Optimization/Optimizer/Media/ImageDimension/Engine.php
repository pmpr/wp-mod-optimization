<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a2f44c67227             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\143\141\153\x6b\171\161\x69\x79\167\x63\163\x6f\151\153\167\x73"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\151\x6d\147\x3a\x6e\157\164\50\133\167\151\x64\x74\150\x5d\x29\x3a\x6e\x6f\164\x28\133\150\145\151\x67\150\164\135\51"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto eieiwacwqkgsewai; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\164\x61\x2d\154\x61\172\171\x2d\157\x72\x69\x67\151\x6e\x61\154") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\x61\x74\141\55\156\157\55\x69\155\141\147\x65\55\x64\x69\155\x65\x6e\163\151\157\x6e\163"))) { goto ysiwoiqiaosqoikm; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\162\143"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto aemoyqueimayqcaw; } if (!ini_get("\x61\x6c\154\x6f\167\137\165\x72\x6c\x5f\146\x6f\160\x65\156")) { goto sequgigsgkqaikmq; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\163\x63\x68\x65\155\145"] . "\x3a\57\x2f" . $yiasugywggckywoa["\150\x6f\x73\x74"] . $yiasugywggckywoa["\x70\x61\x74\x68"]); sequgigsgkqaikmq: goto woaoeyaowkuukkqm; aemoyqueimayqcaw: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa["\160\141\164\150"]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto ugqucegcucyyayga; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); ugqucegcucyyayga: woaoeyaowkuukkqm: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto wassyiqsqasaoiau; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x73\x74\x79\x6c\x65")) { goto icmsyimgycuocisu; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\164\171\x6c\145"); if (!preg_match_all("\x2f\50\x77\151\144\164\150\51\72\134\x73\52\x28\134\x64\53\51\x70\x78\73\174\50\150\x65\x69\147\150\164\51\72\x5c\x73\x2a\x28\134\x64\53\51\x70\170\73\57", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto oeeasouoaaoaaemm; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; iaockwkwaiqgeuyu: } mmqkuymyyycywmqu: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::sogmkkcwuamuqegw, 0); oeeasouoaaoaaemm: icmsyimgycuocisu: goto uekueeyqaackuwao; wassyiqsqasaoiau: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); uekueeyqaackuwao: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto uaiiuywoakccusge; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::sogmkkcwuamuqegw, $cswemwoyesycwkuq); uaiiuywoakccusge: ysiwoiqiaosqoikm: return $ymyisaeksssueeik; }, false, true); eieiwacwqkgsewai: return $moooemyaqewumiay; } }
