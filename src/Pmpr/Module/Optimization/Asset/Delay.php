<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffc5814be8b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset; use DOMElement; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Delay extends Common { protected array $priorities = []; public function uqaauswqgcmuosqe() : array { return $this->priorities; } public function yywskysiycwkwsgw($eueuqacmukymcyya) { return ManipulateArray::get($this->uqaauswqgcmuosqe(), $eueuqacmukymcyya); } public function kskcemmeowmwkoqa($eueuqacmukymcyya, $sqqewmoeaekuyyas) : self { $this->priorities[$eueuqacmukymcyya] = $sqqewmoeaekuyyas; return $this; } public function wigskegsqequoeks() { $qyqekswyqccmiyce = $this->weysguygiseoukqw(Setting::hoeamwwegymyeeeg); $xawimsyesokgqigw = $this->weysguygiseoukqw(Setting::komosgcgwesseeqo); if (!($xawimsyesokgqigw || $qyqekswyqccmiyce)) { goto cuwcsamuuqyuyqsu; } $this->qcsmikeggeemccuu("\x77\x70", [$this, "\x65\x6e\x71\165\145\165\145"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\137\142\165\146\146\145\162\137\160\x72\x6f\143\145\163\x73"), [$this, "\x75\155\x6b\x63\151\x63\x71\145\x73\153\x67\151\147\151\141\171"], 40); cuwcsamuuqyuyqsu: } public function enqueue() { if (!$this->ocysssyiuaueqiei()) { goto mimacwyuueomgwwy; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\141\x73\x79\x6e\x63\55\x6c\x6f\x61\x64\x2d\x61\x73\x73\145\164")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x61\x73\171\x6e\x63\x6c\157\x61\144\x2e\x6a\x73"))); mimacwyuueomgwwy: } public function umkcicqeskgigiay($moooemyaqewumiay) { if (!$this->ocysssyiuaueqiei()) { goto cuommomwmsackoqc; } $sqqewmoeaekuyyas = 0; $yuumukkaswwoywya = "\163\x63\162\x69\x70\164\133\163\x72\143\x5d\72\156\157\164\x28\x2e\x66\x6f\x72\143\145\x2d\154\x6f\141\144\x29"; if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\x61\154\154\x6f\167\137\x61\x73\x79\156\x63\137\154\x6f\141\144\137\x73\x74\x79\154\145\x73"), false, $moooemyaqewumiay)) { goto ksckqkmwiqggykke; } $yuumukkaswwoywya .= "\54\40\154\x69\156\153\x5b\150\162\145\x66\135\133\x72\145\154\x3d\163\164\171\x6c\x65\163\150\145\145\164\135\72\x6e\x6f\x74\50\x2e\x66\x6f\162\143\x65\x2d\x6c\x6f\141\x64\51"; ksckqkmwiqggykke: if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto awaqksikyomsuaeo; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use(&$sqqewmoeaekuyyas) { $oiamcuksgaymkewc = $ymyisaeksssueeik->nodeName === "\154\151\156\153"; $wisgiwskwawciiee = $oiamcuksgaymkewc ? "\150\x72\x65\x66" : "\x73\x72\143"; if (!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, $wisgiwskwawciiee)) { goto iqsgossweywksoia; } $eqgoocgaqwqcimie = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, $wisgiwskwawciiee); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\144\x61\164\x61\55\x73\157\165\x72\143\145", $this->ukacwyckseuqsqgc($eqgoocgaqwqcimie)); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\144\141\x74\141\55\x70\162\151\157\x72\x69\x74\171", $sqqewmoeaekuyyas); DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, $wisgiwskwawciiee); if ($oiamcuksgaymkewc) { goto igwkcikeyoowosoi; } DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, "\144\145\146\145\x72"); DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, "\x61\163\x79\x6e\143"); igwkcikeyoowosoi: $sqqewmoeaekuyyas++; iqsgossweywksoia: return $ymyisaeksssueeik; }, false, true); awaqksikyomsuaeo: cuommomwmsackoqc: return $moooemyaqewumiay; } }
