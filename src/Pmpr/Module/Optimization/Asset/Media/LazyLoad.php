<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ae3139832e9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Media; use DOMElement; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Asset\Setting; class LazyLoad extends Common { const uoogwumawwsywcaq = ["\163\162\x63" => "\x64\141\x74\x61\x2d\163\162\143", "\163\151\172\145\163" => "\x64\x61\164\x61\55\x73\x69\x7a\x65\163", "\163\162\143\163\x65\x74" => "\x64\x61\x74\x61\x2d\163\162\x63\163\145\x74", "\x70\157\163\164\145\x72" => "\x64\x61\x74\x61\x2d\160\157\163\x74\145\162"]; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\x65\x6e\x71\165\x65\x75\x65"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x70\x5f\x6c\x61\x7a\171\x5f\x6c\x6f\141\x64\151\156\147\x5f\x65\156\x61\142\154\x65\144", "\x5f\137\162\x65\x74\x75\162\156\x5f\146\x61\154\163\x65")->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\142\165\146\146\x65\x72\x5f\x70\x72\x6f\x63\x65\163\x73"), [$this, "\141\x6d\x6b\167\x67\x6b\x6d\x79\x67\153\x67\155\x61\161\163\x67"], 15)->cecaguuoecmccuse("\x77\x70\137\x67\145\164\137\x61\164\164\x61\143\150\155\145\x6e\164\x5f\151\155\x61\147\x65\x5f\141\164\164\162\x69\142\x75\164\x65\163", [$this, "\157\x77\x79\147\161\x65\x61\167\143\165\x77\141\x67\x6b\147\x67"], 999, 3); } public function owygqeawcuwagkgg($wwgucssaecqekuek, $aiooqyausygaasqm, $oiegiwogmwmawkeo) { if (!is_array($wwgucssaecqekuek)) { goto egkeqqgakieyimuq; } ManipulateArray::unset($wwgucssaecqekuek, "\x6c\157\x61\x64\151\x6e\x67"); if (is_string($oiegiwogmwmawkeo)) { goto oqwwacmigasucsoc; } $oiegiwogmwmawkeo = implode("\55", (array) $oiegiwogmwmawkeo); oqwwacmigasucsoc: $cwgqkcumeaswoscu = ManipulateAttachment::mwikyscisascoeea($aiooqyausygaasqm); $wwgucssaecqekuek["\144\x61\164\141\x2d\x75\156\x69\x71"] = "{$cwgqkcumeaswoscu}\55{$oiegiwogmwmawkeo}"; egkeqqgakieyimuq: return $wwgucssaecqekuek; } public function enqueue() { if (!$this->gaogimymcgsiqois()) { goto cakuguiciaiaeukg; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x6d\x65\x64\151\141\x2d\x6c\x61\172\x79\154\x6f\x61\144")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\154\x61\172\171\154\157\141\x64\x2e\x6a\163")))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye("\x6d\145\x64\151\x61\x2d\x6c\x61\x7a\171\x6c\157\x61\144")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x6c\141\x7a\x79\x6c\157\x61\144\56\x63\163\163"))); cakuguiciaiaeukg: } public function gaogimymcgsiqois() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\154\x61\172\171\x5f\x6c\157\141\144\137\x63\141\x6e\x5f\160\x72\x6f\143\x65\163\x73"), true); } public function amkwgkmygkgmaqsg($moooemyaqewumiay) { if (!($moooemyaqewumiay && $this->gaogimymcgsiqois() && $this->ocysssyiuaueqiei())) { goto ckwmkquuyyugigom; } if (!$this->weysguygiseoukqw(Setting::uwgswmisuuigoucw)) { goto wswikooyuaaouqgk; } $moooemyaqewumiay = $this->owqscsmucwgiqsim($moooemyaqewumiay); $moooemyaqewumiay = $this->mqqggimwoqogukwm($moooemyaqewumiay); wswikooyuaaouqgk: if (!$this->weysguygiseoukqw(Setting::gowiqmkskqiqsgsc)) { goto awwaiioyywmokwsm; } $moooemyaqewumiay = $this->iagoosqgoismuqwe($moooemyaqewumiay); awwaiioyywmokwsm: ckwmkquuyyugigom: return $moooemyaqewumiay; } public function owqscsmucwgiqsim($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\151\x6d\x67\54\x20\x70\151\x63\x74\165\x72\x65\x20\x3e\x20\163\157\x75\162\143\x65"); } public function omiaycacqkmkeeaw($moooemyaqewumiay) { $yuumukkaswwoywya = "\x5b\163\x74\171\x6c\145\135"; if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto uaicwcqwauosmsqm; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) { $eqgoocgaqwqcimie = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\171\154\x65"); if (!$eqgoocgaqwqcimie) { goto cumeycwmuuqawwyu; } DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\144\141\x74\x61\x2d\x73\164\x79\x6c\145", $eqgoocgaqwqcimie); cumeycwmuuqawwyu: DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, "\163\x74\171\154\x65"); return $this->akqamsokouooqqgw($ymyisaeksssueeik); }); uaicwcqwauosmsqm: return $moooemyaqewumiay; } public function iagoosqgoismuqwe($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\x69\146\x72\x61\x6d\145\x2c\x20\x76\x69\144\x65\x6f"); } public function mqqggimwoqogukwm($moooemyaqewumiay) { $yuumukkaswwoywya = "\144\x69\x76\x5b\163\164\171\x6c\145\x5d\54\40\146\151\147\x75\162\145\133\163\164\x79\x6c\x65\x5d\x2c\x20\163\x65\x63\164\151\x6f\156\x5b\x73\164\171\x6c\145\x5d\x2c\x20\x73\160\141\x6e\133\163\164\x79\154\x65\x5d\x2c\x20\154\151\x5b\163\x74\171\x6c\145\x5d"; if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto ysweqawmawicakeo; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) { $kswaimykcacqyaay = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\x79\x6c\145"); if (!preg_match("\43\142\x61\x63\153\147\162\157\165\156\x64\50\x2d\151\x6d\141\x67\145\51\x3f\x5c\x73\52\x3a\x5c\x73\x2a\50\134\x73\52\x75\162\x6c\x5c\x73\x2a\134\x28\50\x3f\x3c\165\162\x6c\76\x5b\x5e\x29\135\53\x29\x5c\x29\51\134\163\x2a\73\77\43\x69\x73", $kswaimykcacqyaay, $meyiiwcswqmuggyg)) { goto iaomqomgiwiegoca; } $eeamcawaiqocomwy = $meyiiwcswqmuggyg["\x75\162\154"]; DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\x61\x74\141\x2d\142\147", esc_attr(trim($eeamcawaiqocomwy, "\x27\x22\x20"))); if ($iwiewowoqmoekyqi = $this->kkkaiqweiaqiaycg($eeamcawaiqocomwy)) { goto gsqcoqqsioiyoykq; } $kswaimykcacqyaay = ManipulateString::wiecmkiugmyyqiqc($meyiiwcswqmuggyg[0], '', $kswaimykcacqyaay); goto goaowamiyyamueiw; gsqcoqqsioiyoykq: $kswaimykcacqyaay = ManipulateString::wiecmkiugmyyqiqc($eeamcawaiqocomwy, $iwiewowoqmoekyqi, $kswaimykcacqyaay); goaowamiyyamueiw: DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\x73\164\x79\x6c\145", $kswaimykcacqyaay); $ymyisaeksssueeik = $this->akqamsokouooqqgw($ymyisaeksssueeik); iaomqomgiwiegoca: return $ymyisaeksssueeik; }); ysweqawmawicakeo: return $moooemyaqewumiay; } public function akqamsokouooqqgw(DOMElement $ymyisaeksssueeik) : DOMElement { $egkyssmuqcwaciya = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\143\x6c\x61\163\163"); $egkyssmuqcwaciya .= "\40\154\141\x7a\171\x6c\x6f\141\x64"; DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\143\154\x61\x73\x73", rtrim($egkyssmuqcwaciya)); return $ymyisaeksssueeik; } public function swgieuwskmoyukoq($moooemyaqewumiay, $yuumukkaswwoywya) : string { if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto ugswokwmkumcmigc; } $yemgmmgogcwccuky = ManipulateArray::get($this->cyoqmkeuiuaasqmo(), "\156\157\x2d\x6c\141\172\x79\154\x6f\x61\144", []); $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($yemgmmgogcwccuky) { $ooqiacaskuuekygc = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\144\x61\x74\141\55\x75\156\151\161"); if (!(!$yemgmmgogcwccuky || !in_array($ooqiacaskuuekygc, $yemgmmgogcwccuky, true))) { goto qiaaqkymeuuueoqk; } foreach (self::uoogwumawwsywcaq as $msqkueqksqwmskak => $uwomkgseoiegeume) { if (!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, $msqkueqksqwmskak)) { goto asaowisseacciyia; } $eqgoocgaqwqcimie = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, $msqkueqksqwmskak); if (!$eqgoocgaqwqcimie) { goto cuseccewekgcgkyg; } DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, $uwomkgseoiegeume, $eqgoocgaqwqcimie); cuseccewekgcgkyg: if ($msqkueqksqwmskak === "\x73\x72\x63") { goto oqwcmgwimeisusoe; } DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto acesyuieuuqwgkwm; oqwcmgwimeisusoe: $wwgucssaecqekuek = DOMCrawler::wuuawmeqqyyyemsw($ymyisaeksssueeik); $aiooqyausygaasqm = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x64\x61\164\141\55\x69\144"); $iwiewowoqmoekyqi = $this->kkkaiqweiaqiaycg($aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto kgysyqkoqgwmoscq; } DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto makomwwyomweyamm; kgysyqkoqgwmoscq: DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, $msqkueqksqwmskak, $iwiewowoqmoekyqi); makomwwyomweyamm: acesyuieuuqwgkwm: asaowisseacciyia: ookcgumoacskyymy: } owisckseoogsugqq: $ymyisaeksssueeik = $this->akqamsokouooqqgw($ymyisaeksssueeik); qiaaqkymeuuueoqk: return $ymyisaeksssueeik; }, false, true); ugswokwmkumcmigc: return $moooemyaqewumiay; } public function kkkaiqweiaqiaycg($aiooqyausygaasqm, array $wwgucssaecqekuek = []) { $iwiewowoqmoekyqi = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\155\x65\x64\x69\141\x5f\x6c\x61\172\x79\x5f\154\157\141\144\137\x70\154\141\143\145\150\x6f\x6c\144\x65\162"), '', $aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto gwiaimosqoiquwkc; } $iwiewowoqmoekyqi = "\144\141\164\141\72\151\155\141\x67\145\57\x70\x6e\147\x3b\142\x61\163\x65\x36\64\54\151\x56\102\117\x52\x77\60\113\107\x67\157\101\x41\x41\x41\116\x53\x55\x68\105\125\147\101\x41\x41\101\105\101\101\x41\101\102\103\101\x59\101\x41\101\x41\146\x46\x63\x53\112\x41\x41\101\x41\104\x55\x6c\105\121\x56\122\x34\62\155\116\153\131\x50\150\x66\104\167\x41\x43\x68\x77\107\x41\x36\60\x65\66\x6b\147\x41\x41\x41\x41\102\x4a\x52\x55\65\105\x72\153\112\x67\147\x67\75\x3d"; gwiaimosqoiquwkc: return $iwiewowoqmoekyqi; } }
