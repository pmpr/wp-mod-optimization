<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e0e3312730f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset; use DOMElement; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Delay extends Common { protected array $priorities = []; public function uqaauswqgcmuosqe() : array { return $this->priorities; } public function yywskysiycwkwsgw($eueuqacmukymcyya) { return ManipulateArray::get($this->uqaauswqgcmuosqe(), $eueuqacmukymcyya); } public function kskcemmeowmwkoqa($eueuqacmukymcyya, $sqqewmoeaekuyyas) : self { $this->priorities[$eueuqacmukymcyya] = $sqqewmoeaekuyyas; return $this; } public function wigskegsqequoeks() { $qyqekswyqccmiyce = $this->weysguygiseoukqw(Setting::hoeamwwegymyeeeg); $xawimsyesokgqigw = $this->weysguygiseoukqw(Setting::komosgcgwesseeqo); if (!($xawimsyesokgqigw || $qyqekswyqccmiyce)) { goto yywwaaiicukuwcao; } $this->qcsmikeggeemccuu("\x77\x70", [$this, "\x65\x6e\x71\x75\x65\x75\145"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\x5f\142\165\146\146\x65\x72\x5f\160\x72\x6f\143\x65\x73\x73"), [$this, "\x75\155\x6b\x63\151\143\x71\145\163\153\x67\x69\147\x69\141\x79"], 40); yywwaaiicukuwcao: } public function enqueue() { if (!$this->ocysssyiuaueqiei()) { goto eykiuqsamowqykam; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x61\163\x79\156\x63\x2d\x6c\157\x61\x64\55\x61\x73\x73\145\164")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\141\x73\x79\x6e\143\x6c\x6f\141\144\56\x6a\x73"))); eykiuqsamowqykam: } public function umkcicqeskgigiay($moooemyaqewumiay) { if (!$this->ocysssyiuaueqiei()) { goto qwsmiaegmcwuskwi; } $sqqewmoeaekuyyas = 0; $yuumukkaswwoywya = "\163\x63\162\x69\x70\x74\133\x73\x72\x63\x5d\x3a\x6e\157\x74\50\56\x66\x6f\162\x63\145\x2d\154\157\141\144\x29"; if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\137\x61\x6c\154\157\x77\x5f\141\163\171\x6e\x63\x5f\154\157\141\x64\x5f\163\x74\171\154\145\163"), false, $moooemyaqewumiay)) { goto ywqouwqomiqwoquu; } $yuumukkaswwoywya .= "\54\x20\154\x69\x6e\153\133\x68\x72\x65\146\x5d\133\162\145\x6c\x3d\163\164\171\154\x65\163\x68\145\x65\x74\x5d\x3a\x6e\157\164\50\56\146\x6f\x72\x63\145\x2d\x6c\x6f\141\144\x29"; ywqouwqomiqwoquu: if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto wmcucyuieqgqisis; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use(&$sqqewmoeaekuyyas) { $wisgiwskwawciiee = $ymyisaeksssueeik->nodeName === "\154\x69\x6e\153" ? "\150\162\145\146" : "\x73\x72\143"; if (!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, $wisgiwskwawciiee)) { goto qcwkymcgqacaaywc; } $eqgoocgaqwqcimie = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, $wisgiwskwawciiee); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\144\141\x74\x61\x2d\x73\157\165\162\x63\145", $this->ukacwyckseuqsqgc($eqgoocgaqwqcimie)); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\144\x61\x74\x61\55\160\162\x69\x6f\162\x69\x74\171", $sqqewmoeaekuyyas); DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, $wisgiwskwawciiee); $sqqewmoeaekuyyas++; qcwkymcgqacaaywc: return $ymyisaeksssueeik; }, false, true); wmcucyuieqgqisis: qwsmiaegmcwuskwi: return $moooemyaqewumiay; } }
