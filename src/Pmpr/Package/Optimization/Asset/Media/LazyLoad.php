<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0278673873             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Media; use DOMElement; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Package\Optimization\Asset\Setting; class LazyLoad extends Common { const LAZY_LOAD_PATTERN = ["\x73\x72\143" => "\144\141\164\141\x2d\163\162\143", "\x73\151\x7a\x65\x73" => "\x64\141\164\x61\55\163\151\x7a\145\x73", "\163\x72\x63\163\x65\x74" => "\144\x61\x74\x61\55\163\162\143\x73\145\164", "\x70\157\x73\x74\145\x72" => "\144\141\x74\141\x2d\x70\x6f\163\164\x65\x72"]; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\145\156\x71\x75\x65\165\145"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x6c\141\x7a\x79\x5f\154\x6f\141\144\137\145\x6e\x61\x62\x6c\145", "\137\137\162\x65\164\x75\x72\x6e\137\146\x61\154\x73\x65")->cecaguuoecmccuse("\167\x70\x5f\154\x61\x7a\x79\137\x6c\157\141\144\x69\x6e\147\137\145\156\141\142\154\x65\x64", "\137\x5f\x72\x65\164\x75\162\x6e\x5f\x66\x61\154\x73\145")->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\x5f\142\x75\146\x66\145\x72\137\x70\x72\157\x63\145\163\x73"), [$this, "\x61\x6d\x6b\167\x67\x6b\x6d\171\x67\153\147\x6d\x61\161\x73\x67"], 15); } public function enqueue() { if (!$this->gaogimymcgsiqois()) { goto wukuisoeoeomgegu; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\155\x65\x64\x69\141\55\x6c\x61\172\x79\154\x6f\141\144", $eygsasmqycagyayw->get("\x6c\x61\x7a\171\x6c\157\x61\x64\56\x6a\x73")))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye("\x6d\145\144\151\x61\x2d\x6c\x61\x7a\171\154\x6f\141\x64")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x6c\x61\x7a\x79\x6c\x6f\141\x64\x2e\143\163\163"))); wukuisoeoeomgegu: } public function gaogimymcgsiqois() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\154\x61\172\171\x5f\x6c\x6f\x61\x64\137\x63\x61\x6e\x5f\160\162\157\143\145\163\163"), true); } public function amkwgkmygkgmaqsg($moooemyaqewumiay) { if (!($moooemyaqewumiay && $this->gaogimymcgsiqois() && $this->ocysssyiuaueqiei())) { goto eyuoecmogqwkmomi; } if (!$this->weysguygiseoukqw(Setting::LAZY_LOAD_IMAGES)) { goto gsimeiqkoyqkuecq; } $moooemyaqewumiay = $this->owqscsmucwgiqsim($moooemyaqewumiay); $moooemyaqewumiay = $this->mqqggimwoqogukwm($moooemyaqewumiay); gsimeiqkoyqkuecq: if (!$this->weysguygiseoukqw(Setting::LAZY_LOAD_IFRAME_AND_VIDEOS)) { goto gqywcowiigceimaw; } $moooemyaqewumiay = $this->iagoosqgoismuqwe($moooemyaqewumiay); gqywcowiigceimaw: eyuoecmogqwkmomi: return $moooemyaqewumiay; } public function owqscsmucwgiqsim($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\151\x6d\x67\54\x20\160\151\x63\164\165\x72\x65\40\x3e\x20\163\157\165\x72\143\x65"); } public function omiaycacqkmkeeaw($moooemyaqewumiay) { $yuumukkaswwoywya = "\133\163\x74\x79\154\x65\135"; if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto geugsymgsiuuqccg; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) { $eqgoocgaqwqcimie = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\164\171\x6c\x65"); if (!$eqgoocgaqwqcimie) { goto quewwumogiocouii; } DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\x61\164\x61\55\x73\x74\x79\x6c\x65", $eqgoocgaqwqcimie); quewwumogiocouii: DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, "\x73\164\x79\154\145"); return $this->akqamsokouooqqgw($ymyisaeksssueeik); }); geugsymgsiuuqccg: return $moooemyaqewumiay; } public function iagoosqgoismuqwe($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\151\146\162\141\x6d\x65\x2c\40\x76\151\144\145\157"); } public function mqqggimwoqogukwm($moooemyaqewumiay) { $yuumukkaswwoywya = "\144\x69\x76\133\163\164\171\154\145\x5d\54\x20\x66\x69\x67\x75\x72\145\133\163\164\x79\x6c\x65\135\x2c\40\x73\145\143\164\x69\x6f\156\x5b\163\x74\x79\x6c\x65\135\54\40\x73\x70\141\156\x5b\x73\164\x79\x6c\x65\135\x2c\x20\154\151\x5b\x73\164\x79\x6c\145\135"; if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto ioacywuoyuskqmwy; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) { $kswaimykcacqyaay = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\x74\171\x6c\145"); preg_match("\43\x62\141\143\x6b\147\x72\x6f\x75\x6e\x64\x28\x2d\151\x6d\x61\x67\145\x29\77\x5c\163\52\x3a\134\x73\52\50\x5c\163\x2a\165\162\154\134\x73\x2a\x5c\x28\x28\x3f\74\165\162\x6c\76\x5b\x5e\x29\135\53\x29\134\51\51\134\163\52\73\x3f\43\x69\x73", $kswaimykcacqyaay, $eeamcawaiqocomwy); if (!$eeamcawaiqocomwy) { goto mgwgiesscqoaqcau; } $eeamcawaiqocomwy["\165\x72\154"] = trim($eeamcawaiqocomwy["\x75\x72\x6c"], "\x27\x22\x20"); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\x61\164\x61\55\x62\147", "\165\162\154\x28" . esc_attr($eeamcawaiqocomwy["\x75\x72\x6c"]) . "\51"); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\x73\x74\171\x6c\145", str_replace($eeamcawaiqocomwy[0], '', $kswaimykcacqyaay)); $ymyisaeksssueeik = $this->akqamsokouooqqgw($ymyisaeksssueeik); mgwgiesscqoaqcau: return $ymyisaeksssueeik; }); ioacywuoyuskqmwy: return $moooemyaqewumiay; } public function akqamsokouooqqgw(DOMElement $ymyisaeksssueeik) : DOMElement { $egkyssmuqcwaciya = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\143\x6c\x61\163\x73"); $egkyssmuqcwaciya .= "\x20\x6c\141\172\171\154\x6f\141\144"; DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\143\154\x61\163\163", rtrim($egkyssmuqcwaciya)); return $ymyisaeksssueeik; } public function swgieuwskmoyukoq($moooemyaqewumiay, $yuumukkaswwoywya) : string { if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto oskwkeaemiqcaqkc; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) { foreach (self::LAZY_LOAD_PATTERN as $msqkueqksqwmskak => $uwomkgseoiegeume) { if (!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, $msqkueqksqwmskak)) { goto iisieuaeyiqwckou; } $eqgoocgaqwqcimie = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, $msqkueqksqwmskak); if (!$eqgoocgaqwqcimie) { goto cgmcwkmmcmmkiooc; } DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, $uwomkgseoiegeume, $eqgoocgaqwqcimie); cgmcwkmmcmmkiooc: if ($msqkueqksqwmskak === "\x73\162\x63") { goto eygqeoiskweuiuqi; } DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto uykwmucgoywoesui; eygqeoiskweuiuqi: $wwgucssaecqekuek = DOMCrawler::wuuawmeqqyyyemsw($ymyisaeksssueeik); $aiooqyausygaasqm = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x64\141\x74\141\x2d\x69\x64"); $iwiewowoqmoekyqi = $this->kkkaiqweiaqiaycg($aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto iamooqskosymqsmw; } DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto wwccoougkywoaoui; iamooqskosymqsmw: DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, $msqkueqksqwmskak, $iwiewowoqmoekyqi); wwccoougkywoaoui: uykwmucgoywoesui: iisieuaeyiqwckou: awgaewwsskasueke: } bgoygegmogcmeaou: return $this->akqamsokouooqqgw($ymyisaeksssueeik); }, false, true); oskwkeaemiqcaqkc: return $moooemyaqewumiay; } public function kkkaiqweiaqiaycg($aiooqyausygaasqm, $wwgucssaecqekuek) { $iwiewowoqmoekyqi = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\137\155\145\x64\x69\x61\x5f\154\141\x7a\x79\137\154\x6f\141\x64\x5f\x70\154\141\x63\145\x68\x6f\154\x64\145\x72"), '', $aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto kiqmcymowosckmii; } $iwiewowoqmoekyqi = "\144\x61\164\141\72\x69\x6d\x61\147\x65\x2f\x70\156\147\x3b\x62\x61\163\145\x36\64\x2c\x69\126\102\x4f\x52\167\x30\x4b\x47\147\157\101\101\101\101\116\x53\125\150\x45\125\x67\x41\x41\x41\101\105\101\x41\101\x41\x42\103\x41\131\101\101\x41\101\x66\x46\x63\x53\x4a\101\x41\x41\x41\x44\125\x6c\105\x51\126\x52\64\62\155\116\153\x59\120\150\x66\x44\167\101\x43\x68\167\107\x41\x36\60\145\x36\153\x67\x41\101\x41\101\x42\112\122\125\65\x45\162\x6b\x4a\147\x67\147\x3d\x3d"; kiqmcymowosckmii: return $iwiewowoqmoekyqi; } }
