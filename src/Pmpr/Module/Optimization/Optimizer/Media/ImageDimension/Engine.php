<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2ec2cd5b75             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\143\141\x6b\x6b\171\161\x69\171\x77\x63\163\157\151\153\x77\163"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\x69\155\x67\x3a\156\x6f\164\50\x5b\x77\x69\x64\x74\x68\135\x29\72\x6e\157\164\50\133\150\145\x69\147\x68\164\x5d\x29"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto igwkcikeyoowosoi; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\x61\164\141\x2d\154\x61\x7a\171\x2d\x6f\x72\151\147\151\156\141\x6c") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\164\x61\x2d\156\157\55\151\x6d\x61\147\145\55\144\151\x6d\145\x6e\x73\x69\157\156\x73"))) { goto ksckqkmwiqggykke; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x72\x63"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto suqckoccuyeeymww; } if (!ini_get("\x61\x6c\x6c\x6f\x77\137\165\x72\154\x5f\146\x6f\160\145\x6e")) { goto yoqsigmoyaaceqky; } $mkomwsiykqigmqca = $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!in_array(pathinfo($mkomwsiykqigmqca, PATHINFO_EXTENSION), ["\x70\156\x67", "\167\145\x62\x70", "\147\151\146", "\x73\166\x67", "\x6a\160\145\x67", "\152\x70\x67"], true)) { goto yksywwikmeksikqc; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\163\143\x68\x65\155\x65"] . "\x3a\x2f\57" . $yiasugywggckywoa[Constants::ckiaowgkqoewoseo] . $mkomwsiykqigmqca); yksywwikmeksikqc: yoqsigmoyaaceqky: goto giugwaeuwaomossq; suqckoccuyeeymww: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto masakmomqmeocqqg; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); masakmomqmeocqqg: giugwaeuwaomossq: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto ekoqieigyoeyauqa; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x73\164\x79\x6c\145")) { goto mqgeseysuwcaqwiy; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\171\154\x65"); if (!preg_match_all("\x2f\50\167\x69\144\x74\150\51\x3a\x5c\x73\52\x28\x5c\x64\x2b\x29\160\170\73\174\x28\x68\145\151\x67\x68\164\51\72\x5c\163\52\x28\x5c\144\53\x29\160\x78\x3b\x2f", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto ssagcgqaucssyego; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; sycougcyeqmeiagk: } acgqaeakoyasgkku: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::sogmkkcwuamuqegw, 0); ssagcgqaucssyego: mqgeseysuwcaqwiy: goto cuwcsamuuqyuyqsu; ekoqieigyoeyauqa: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); cuwcsamuuqyuyqsu: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto mimacwyuueomgwwy; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::sogmkkcwuamuqegw, $cswemwoyesycwkuq); mimacwyuueomgwwy: ksckqkmwiqggykke: return $ymyisaeksssueeik; }, false); igwkcikeyoowosoi: return $moooemyaqewumiay; } }
