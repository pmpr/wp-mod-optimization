<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6533a38a20125             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset; use DOMElement; class Delay extends Common { protected array $priorities = []; public function uqaauswqgcmuosqe() : array { return $this->priorities; } public function yywskysiycwkwsgw($eueuqacmukymcyya) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->uqaauswqgcmuosqe(), $eueuqacmukymcyya); } public function kskcemmeowmwkoqa($eueuqacmukymcyya, $sqqewmoeaekuyyas) : self { $this->priorities[$eueuqacmukymcyya] = $sqqewmoeaekuyyas; return $this; } public function wigskegsqequoeks() { $qyqekswyqccmiyce = $this->weysguygiseoukqw(Setting::hoeamwwegymyeeeg); $xawimsyesokgqigw = $this->weysguygiseoukqw(Setting::komosgcgwesseeqo); if (!($xawimsyesokgqigw || $qyqekswyqccmiyce)) { goto sigukociqouigous; } $this->qcsmikeggeemccuu("\x77\160", [$this, "\145\156\x71\165\145\165\145"]); $this->aqaqisyssqeomwom("\x6f\160\x74\x5f\142\165\146\x66\x65\162\x5f\x70\162\x6f\143\145\163\x73", [$this, "\165\x6d\153\x63\151\x63\x71\145\x73\x6b\147\x69\x67\151\x61\171"], 40); sigukociqouigous: } public function enqueue() { if (!$this->ocysssyiuaueqiei("\x64\x65\x6c\x61\x79")) { goto yagscaikmmuagqcu; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x61\x73\171\x6e\x63\55\154\157\141\144\x2d\x61\163\x73\145\x74")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x61\x73\x79\x6e\x63\x6c\x6f\141\x64\x2e\x6a\163"))); yagscaikmmuagqcu: } public function umkcicqeskgigiay($moooemyaqewumiay) { if (!$this->ocysssyiuaueqiei("\x64\x65\154\141\x79")) { goto omyquyiguuaociwq; } $sqqewmoeaekuyyas = 0; $yuumukkaswwoywya = "\163\x63\x72\x69\x70\x74\x5b\163\x72\x63\x5d\72\156\157\164\50\x2e\146\x6f\x72\x63\145\55\x6c\157\x61\144\51"; if (!$this->ocksiywmkyaqseou("\x6f\x70\x74\x5f\141\154\154\x6f\167\137\x61\x73\x79\156\x63\137\154\x6f\141\144\x5f\x73\x74\x79\154\x65\x73", false, $moooemyaqewumiay)) { goto iyawqekeeawqkymm; } $yuumukkaswwoywya .= "\x2c\40\154\151\x6e\153\133\150\162\145\x66\x5d\x5b\x72\x65\x6c\75\x73\x74\x79\x6c\145\163\x68\145\145\x74\x5d\72\x6e\x6f\x74\50\56\x66\157\162\143\x65\x2d\x6c\x6f\141\x64\51"; iyawqekeeawqkymm: $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto qaqooueskgciuqgc; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use(&$sqqewmoeaekuyyas, $smuykqsageuocuos) { $oiamcuksgaymkewc = $ymyisaeksssueeik->nodeName === "\x6c\x69\156\153"; $wisgiwskwawciiee = $oiamcuksgaymkewc ? "\x68\162\x65\x66" : "\x73\x72\x63"; if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, $wisgiwskwawciiee)) { goto qwosyqcomiosguoa; } $eqgoocgaqwqcimie = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, $wisgiwskwawciiee); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\144\141\x74\x61\55\163\157\x75\162\143\145", $this->ukacwyckseuqsqgc($eqgoocgaqwqcimie)); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\144\x61\x74\141\55\160\x72\151\x6f\x72\x69\x74\x79", $sqqewmoeaekuyyas); $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, $wisgiwskwawciiee); if ($oiamcuksgaymkewc) { goto iumgcesksuawyuyo; } $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, "\144\x65\x66\145\162"); $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, "\x61\163\x79\156\x63"); iumgcesksuawyuyo: $sqqewmoeaekuyyas++; qwosyqcomiosguoa: return $ymyisaeksssueeik; }, false, true); qaqooueskgciuqgc: omyquyiguuaociwq: return $moooemyaqewumiay; } }
