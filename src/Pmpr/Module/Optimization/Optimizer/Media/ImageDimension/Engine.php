<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d316fa74495             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\x63\141\153\x6b\171\161\x69\171\167\x63\x73\x6f\151\153\167\163"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\151\155\147\72\x6e\157\x74\50\x5b\167\x69\144\164\150\135\x29\72\156\x6f\x74\x28\x5b\150\x65\151\x67\x68\164\x5d\x29"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto igwkcikeyoowosoi; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\x74\141\55\154\x61\172\171\55\x6f\x72\151\147\x69\156\x61\x6c") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\164\141\x2d\x6e\x6f\55\151\x6d\x61\x67\x65\55\x64\x69\x6d\x65\156\x73\x69\x6f\x6e\x73"))) { goto ksckqkmwiqggykke; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\162\x63"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto suqckoccuyeeymww; } if (!ini_get("\141\154\154\157\167\137\165\x72\x6c\137\x66\157\160\145\156")) { goto yoqsigmoyaaceqky; } $mkomwsiykqigmqca = $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!in_array(pathinfo($mkomwsiykqigmqca, PATHINFO_EXTENSION), ["\160\x6e\147", "\x77\145\142\x70", "\x67\151\146", "\x73\x76\147", "\152\160\145\147", "\152\160\x67"], true)) { goto yksywwikmeksikqc; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\163\143\150\x65\x6d\x65"] . "\72\57\57" . $yiasugywggckywoa[Constants::ckiaowgkqoewoseo] . $mkomwsiykqigmqca); yksywwikmeksikqc: yoqsigmoyaaceqky: goto giugwaeuwaomossq; suqckoccuyeeymww: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto masakmomqmeocqqg; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); masakmomqmeocqqg: giugwaeuwaomossq: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto ekoqieigyoeyauqa; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\163\x74\x79\x6c\x65")) { goto mqgeseysuwcaqwiy; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\164\x79\x6c\x65"); if (!preg_match_all("\x2f\x28\167\151\x64\x74\x68\x29\72\x5c\163\x2a\50\x5c\x64\x2b\x29\160\x78\73\x7c\50\150\x65\x69\147\150\164\x29\72\134\x73\x2a\50\134\144\x2b\51\160\x78\73\57", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto ssagcgqaucssyego; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; sycougcyeqmeiagk: } acgqaeakoyasgkku: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::sogmkkcwuamuqegw, 0); ssagcgqaucssyego: mqgeseysuwcaqwiy: goto cuwcsamuuqyuyqsu; ekoqieigyoeyauqa: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); cuwcsamuuqyuyqsu: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto mimacwyuueomgwwy; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::sogmkkcwuamuqegw, $cswemwoyesycwkuq); mimacwyuueomgwwy: ksckqkmwiqggykke: return $ymyisaeksssueeik; }, false); igwkcikeyoowosoi: return $moooemyaqewumiay; } }
