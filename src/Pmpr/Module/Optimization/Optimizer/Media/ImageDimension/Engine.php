<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668660e287d70             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\x63\141\153\153\171\x71\x69\x79\x77\x63\x73\157\151\153\167\163"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\x69\x6d\x67\x3a\156\157\x74\x28\133\x77\151\x64\x74\150\x5d\51\x3a\156\157\164\50\x5b\x68\145\x69\x67\150\x74\x5d\51"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto eweaaismksecwagy; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\x74\141\55\x6c\x61\172\171\55\x6f\162\x69\x67\151\156\141\154") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\x61\x74\x61\55\156\157\x2d\x69\x6d\x61\x67\145\x2d\x64\151\155\145\156\x73\151\x6f\x6e\x73"))) { goto mcqucouuiuoagqwc; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\162\x63"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto wiwoiyoakywqyaiy; } if (!ini_get("\141\154\154\157\167\x5f\165\162\x6c\x5f\146\157\160\145\156")) { goto isewysikysqewkis; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\163\x63\150\145\x6d\145"] . "\72\57\57" . $yiasugywggckywoa["\150\x6f\163\164"] . $yiasugywggckywoa["\160\x61\164\150"]); isewysikysqewkis: goto igmmqwyawcuuckkq; wiwoiyoakywqyaiy: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa["\x70\141\x74\150"]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto ugykmcouiwiscoqu; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); ugykmcouiwiscoqu: igmmqwyawcuuckkq: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto ugogoekeckgcmuaw; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x73\x74\171\154\x65")) { goto ykqsuiyyosyeyscc; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\164\171\x6c\x65"); if (!preg_match_all("\x2f\50\x77\x69\144\x74\x68\51\72\134\x73\x2a\50\134\x64\x2b\51\x70\170\73\174\x28\x68\x65\x69\147\x68\x74\x29\72\x5c\x73\x2a\x28\134\x64\x2b\51\x70\170\73\x2f", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto uscokkmquayiukag; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; sqwuqegeiisoiiuq: } eouwacqiommmeaqc: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::sogmkkcwuamuqegw, 0); uscokkmquayiukag: ykqsuiyyosyeyscc: goto egesuwkqkmaigaoe; ugogoekeckgcmuaw: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); egesuwkqkmaigaoe: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto syusgosewwkoagoq; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::sogmkkcwuamuqegw, $cswemwoyesycwkuq); syusgosewwkoagoq: mcqucouuiuoagqwc: return $ymyisaeksssueeik; }, false, true); eweaaismksecwagy: return $moooemyaqewumiay; } }
