<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66c4e0adc06c5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\143\x61\x6b\153\x79\161\x69\x79\x77\143\163\x6f\x69\153\x77\x73"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\151\x6d\x67\x3a\x6e\157\164\x28\x5b\167\x69\x64\164\x68\x5d\51\72\x6e\157\164\50\x5b\x68\145\x69\x67\x68\164\135\x29"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto ikcwmsgocyuqiumc; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\x61\x74\141\x2d\154\141\x7a\171\x2d\157\x72\151\x67\x69\x6e\141\154") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\x61\164\x61\x2d\156\157\55\x69\155\x61\147\x65\x2d\144\x69\155\145\156\x73\151\157\156\x73"))) { goto cyosacayacumuaks; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\x72\143"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto ayceeyuocgowqwsa; } if (!ini_get("\x61\154\154\x6f\167\137\x75\x72\154\x5f\x66\x6f\x70\145\156")) { goto sksgcusuyqcwqswe; } $mkomwsiykqigmqca = $yiasugywggckywoa[self::okmiyqowuqogaiiy]; if (!in_array(pathinfo($mkomwsiykqigmqca, PATHINFO_EXTENSION), ["\x70\156\147", "\x77\x65\x62\160", "\147\x69\146", "\163\166\147", "\x6a\x70\145\x67", "\x6a\x70\x67"], true)) { goto qkyciyiwkmgkmquk; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\163\x63\150\x65\x6d\145"] . "\x3a\57\57" . $yiasugywggckywoa[self::ckiaowgkqoewoseo] . $mkomwsiykqigmqca); qkyciyiwkmgkmquk: sksgcusuyqcwqswe: goto iuwkiyimqmgguose; ayceeyuocgowqwsa: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa[self::okmiyqowuqogaiiy]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto maaisuqwkymeguys; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); maaisuqwkymeguys: iuwkiyimqmgguose: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto kwuckkyqaygwgcuy; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\163\164\x79\154\x65")) { goto oeusomaaeekakake; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\171\154\x65"); if (!preg_match_all("\x2f\50\167\x69\x64\164\150\x29\72\x5c\x73\x2a\x28\x5c\x64\x2b\x29\160\x78\73\174\50\x68\145\x69\147\x68\164\x29\72\x5c\163\x2a\x28\x5c\144\53\x29\x70\170\x3b\57", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto yyqygaokeccgugos; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; aeiemwacaiygemmg: } yggseoaommssscwo: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::sogmkkcwuamuqegw, 0); yyqygaokeccgugos: oeusomaaeekakake: goto giuccakymqymawgk; kwuckkyqaygwgcuy: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); giuccakymqymawgk: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto sicgyiyiocyygkoc; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::sogmkkcwuamuqegw, $cswemwoyesycwkuq); sicgyiyiocyygkoc: cyosacayacumuaks: return $ymyisaeksssueeik; }, false); ikcwmsgocyuqiumc: return $moooemyaqewumiay; } }
