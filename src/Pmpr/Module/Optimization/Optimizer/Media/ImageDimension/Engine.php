<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ef4e02be33a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\x63\141\x6b\153\x79\x71\x69\x79\x77\x63\163\157\151\153\x77\x73"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\151\155\x67\x3a\156\157\x74\50\x5b\167\151\x64\164\x68\x5d\51\72\x6e\157\x74\50\x5b\150\x65\x69\147\150\x74\x5d\x29"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto qywkykqkeeuccoui; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\164\141\55\154\141\172\x79\55\157\x72\151\147\151\x6e\x61\x6c") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\x61\164\x61\55\x6e\x6f\55\151\x6d\x61\x67\x65\55\144\151\155\145\x6e\x73\151\157\156\163"))) { goto oqgymyiwckkwueuw; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\162\143"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto ceaamccscgcmqgka; } if (!ini_get("\141\154\154\157\167\x5f\x75\x72\x6c\x5f\146\x6f\x70\x65\x6e")) { goto ycecaauekkiqacuu; } $mkomwsiykqigmqca = $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!in_array(pathinfo($mkomwsiykqigmqca, PATHINFO_EXTENSION), ["\160\x6e\x67", "\167\145\x62\x70", "\x67\x69\146", "\163\166\147", "\152\x70\145\147", "\x6a\160\147"], true)) { goto qmguoqeawegcoeoa; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\x73\143\150\145\x6d\145"] . "\x3a\x2f\x2f" . $yiasugywggckywoa[Constants::ckiaowgkqoewoseo] . $mkomwsiykqigmqca); qmguoqeawegcoeoa: ycecaauekkiqacuu: goto omumkeywqqogwwue; ceaamccscgcmqgka: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto sayqggaieocmskko; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); sayqggaieocmskko: omumkeywqqogwwue: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto qiikwossequwiuom; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\163\164\x79\x6c\145")) { goto ymucaguacemwsgsi; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\164\171\x6c\x65"); if (!preg_match_all("\57\x28\x77\x69\144\x74\x68\51\72\x5c\163\52\x28\134\x64\x2b\x29\160\170\73\174\50\x68\x65\x69\x67\150\x74\51\72\134\163\52\50\x5c\144\53\51\160\x78\x3b\57", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto ociesuicgmkekcue; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; wiaymoucakyaikii: } igyesgemqesackws: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::sogmkkcwuamuqegw, 0); ociesuicgmkekcue: ymucaguacemwsgsi: goto gaouaiemokqqgssw; qiikwossequwiuom: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); gaouaiemokqqgssw: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto wqwmuuicoqigqwyc; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::sogmkkcwuamuqegw, $cswemwoyesycwkuq); wqwmuuicoqigqwyc: oqgymyiwckkwueuw: return $ymyisaeksssueeik; }, false); qywkykqkeeuccoui: return $moooemyaqewumiay; } }
