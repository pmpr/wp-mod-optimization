<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2162b04da4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\LazyLoad; use DOMElement; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; use Pmpr\Module\Optimization\PageManager\Model\Process; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; class Engine extends BufferEngine { use PageManagerEngineTrait; const uoogwumawwsywcaq = ["\163\162\x63" => "\144\x61\164\x61\55\x73\x72\143", "\x73\151\x7a\x65\163" => "\x64\141\x74\x61\55\x73\x69\172\145\x73", "\x73\162\143\163\145\x74" => "\144\141\164\x61\55\x73\162\143\163\145\x74", "\160\157\x73\164\145\x72" => "\x64\141\164\141\x2d\x70\x6f\163\164\145\x72"]; public function wigskegsqequoeks() { $this->waqewsckuayqguos("\142\145\146\x6f\162\x65\x5f\x65\x6e\161\x75\145\165\145\x5f\x66\x72\x6f\156\164\x65\x6e\x64\137\141\163\163\x65\164\x73", [$this, "\x65\x6e\161\x75\x65\x75\x65"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x70\137\154\141\x7a\x79\137\x6c\157\x61\x64\151\156\147\137\145\156\141\142\x6c\x65\144", [$this, "\x6d\147\153\x65\x71\161\153\x6d\163\x71\x71\x69\x6b\x73\x79\x6f"], 10, 2); $this->miasamwyaiagioug([$this, "\x71\163\x75\x73\x75\145\147\x67\x6f\x6b\171\141\141\x65\x77\155"], 15); } public function enqueue() { if (!$this->ocysssyiuaueqiei()) { goto mqgeseysuwcaqwiy; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\155\145\x64\x69\x61\55\154\141\x7a\x79\154\x6f\141\144")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x6c\141\172\171\154\x6f\x61\144\56\152\163")))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye("\x6d\145\x64\151\141\x2d\x6c\141\172\171\x6c\157\141\144")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\154\x61\x7a\171\x6c\157\141\144\56\x63\163\163"))); mqgeseysuwcaqwiy: } public function qsusueggokyaaewm($moooemyaqewumiay) { if (!$this->ocysssyiuaueqiei()) { goto mimacwyuueomgwwy; } $kqywgoqsmuswammk = $this->weysguygiseoukqw(Setting::souisqooyuiygceo); if (!in_array($kqywgoqsmuswammk, [Constants::ALL, Constants::mkousmkiawwousws], true)) { goto ekoqieigyoeyauqa; } $moooemyaqewumiay = $this->owqscsmucwgiqsim($moooemyaqewumiay); $moooemyaqewumiay = $this->mqqggimwoqogukwm($moooemyaqewumiay); ekoqieigyoeyauqa: if (!in_array($kqywgoqsmuswammk, [Constants::ALL, Constants::ykigkkwgecsygowo], true)) { goto cuwcsamuuqyuyqsu; } $moooemyaqewumiay = $this->iagoosqgoismuqwe($moooemyaqewumiay); cuwcsamuuqyuyqsu: mimacwyuueomgwwy: return $moooemyaqewumiay; } public function omiaycacqkmkeeaw($moooemyaqewumiay) { $yuumukkaswwoywya = "\133\163\164\x79\x6c\145\x5d"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto igwkcikeyoowosoi; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!($eqgoocgaqwqcimie = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\164\171\x6c\145"))) { goto ksckqkmwiqggykke; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\x61\164\x61\55\x73\x74\x79\154\x65", $eqgoocgaqwqcimie); ksckqkmwiqggykke: $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, "\x73\x74\171\x6c\145"); return $this->akqamsokouooqqgw($ymyisaeksssueeik); }); igwkcikeyoowosoi: return $moooemyaqewumiay; } public function owqscsmucwgiqsim($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\x69\x6d\x67\x3a\156\x6f\164\x28\56\144\157\156\x74\55\x6c\141\x7a\x79\x2d\154\157\x61\x64\x29\x2c\40\160\151\x63\164\165\162\x65\72\156\x6f\164\50\x2e\144\x6f\156\x74\55\154\141\172\x79\x2d\x6c\157\x61\x64\x29\x20\x3e\40\163\157\165\162\x63\x65"); } public function iagoosqgoismuqwe($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\151\146\162\141\x6d\145\72\x6e\x6f\x74\50\56\x64\x6f\156\x74\x2d\154\141\172\x79\55\154\157\141\144\51\54\x20\x76\151\x64\145\157\72\156\157\164\x28\x2e\x64\157\156\164\x2d\x6c\x61\x7a\171\55\154\157\141\144\51", Constants::ykigkkwgecsygowo); } public function mqqggimwoqogukwm($moooemyaqewumiay) { $yuumukkaswwoywya = "\x64\151\x76\133\163\164\x79\x6c\145\135\54\x66\x69\x67\165\162\x65\133\x73\x74\x79\x6c\x65\x5d\54\163\145\x63\164\151\x6f\156\x5b\x73\164\171\154\x65\x5d\x2c\x73\x70\x61\156\133\x73\164\171\154\145\x5d\x2c\x6c\x69\x5b\163\x74\x79\x6c\145\x5d"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto awaqksikyomsuaeo; } $samwssuokaguuqcs = $this->ucoeomeeyokssocw($moooemyaqewumiay); $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos, $samwssuokaguuqcs) { $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\164\171\x6c\x65"); if (!(($eeamcawaiqocomwy = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->eqggmuyywiawyigi($kswaimykcacqyaay)) && !$this->ogomcyeyumwiqekm($eeamcawaiqocomwy, $samwssuokaguuqcs))) { goto iqsgossweywksoia; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\x61\x74\141\x2d\142\x67", $eeamcawaiqocomwy); $kswaimykcacqyaay = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($eeamcawaiqocomwy, "\42{$this->kkkaiqweiaqiaycg($eeamcawaiqocomwy)}\42", $kswaimykcacqyaay); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\163\x74\x79\x6c\x65", $kswaimykcacqyaay); $ymyisaeksssueeik = $this->akqamsokouooqqgw($ymyisaeksssueeik); iqsgossweywksoia: return $ymyisaeksssueeik; }); awaqksikyomsuaeo: return $moooemyaqewumiay; } public function akqamsokouooqqgw(DOMElement $ymyisaeksssueeik) : DOMElement { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $egkyssmuqcwaciya = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x63\x6c\141\x73\163"); $egkyssmuqcwaciya .= "\x20\x6c\141\x7a\171\154\157\141\144"; $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\143\x6c\141\x73\x73", rtrim($egkyssmuqcwaciya)); return $ymyisaeksssueeik; } public function meqmqgiwykuymcki() : array { $ogomymegcoacqisg = []; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); if (!$this->weysguygiseoukqw(Setting::wsksomawosgqayso)) { goto uwaimsisescsgyqk; } $cquauiyyegoequum = $goqqimcssiyagkwy->mmosakwauqogckem(Process::ikkumeueakggamkk); if (!$cquauiyyegoequum) { goto qyeswawykmasuqye; } foreach ($cquauiyyegoequum as $kiyaycgqkoueoscs) { $ogomymegcoacqisg[$kiyaycgqkoueoscs] = Constants::ymugckeogmscmacc; ggeoqeowscwkeumy: } cuommomwmsackoqc: qyeswawykmasuqye: uwaimsisescsgyqk: $yiiskoaqwycgymko = $goqqimcssiyagkwy->mmosakwauqogckem(Process::aseoemqucqqamsky); if (!($yiiskoaqwycgymko && isset($yiiskoaqwycgymko["\x73\x72\x63"]))) { goto uqcsksaywyqeumig; } $ogomymegcoacqisg[$yiiskoaqwycgymko["\163\x72\x63"]] = Constants::sgiwkasmqqockceq; uqcsksaywyqeumig: return $ogomymegcoacqisg; } public function swgieuwskmoyukoq($moooemyaqewumiay, $yuumukkaswwoywya, string $ccamueccusigaaio = Constants::mkousmkiawwousws) : string { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto qmokwkocmcyeyesc; } $samwssuokaguuqcs = $ycqyusukiuikceae = []; if (!($ccamueccusigaaio === Constants::mkousmkiawwousws)) { goto yggmaskeguaqkusc; } $samwssuokaguuqcs = $this->ucoeomeeyokssocw($moooemyaqewumiay); $ycqyusukiuikceae = $this->meqmqgiwykuymcki(); yggmaskeguaqkusc: $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos, $ycqyusukiuikceae, $samwssuokaguuqcs) { if (!$samwssuokaguuqcs) { goto kwmiwaecqcgiaqye; } $ogomymegcoacqisg = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\162\143"); if (!$this->aosmowmawkceeses($ogomymegcoacqisg, $samwssuokaguuqcs)) { goto jsmisuccwyukksgc; } if (!isset($ycqyusukiuikceae[$ogomymegcoacqisg])) { goto ukwoswyyogmsygqg; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x66\145\164\143\x68\x70\x72\x69\157\x72\x69\x74\x79", $ycqyusukiuikceae[$ogomymegcoacqisg]); ukwoswyyogmsygqg: return $ymyisaeksssueeik; jsmisuccwyukksgc: kwmiwaecqcgiaqye: foreach (self::uoogwumawwsywcaq as $msqkueqksqwmskak => $uwomkgseoiegeume) { if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, $msqkueqksqwmskak)) { goto esqwswmoegiqcckg; } $eqgoocgaqwqcimie = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, $msqkueqksqwmskak); if (!$eqgoocgaqwqcimie) { goto eekaiaeqewiqkkgm; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, $uwomkgseoiegeume, $eqgoocgaqwqcimie); eekaiaeqewiqkkgm: if ($msqkueqksqwmskak === "\x73\x72\x63") { goto mwieyyqamgwicgco; } $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto wkiymcoqqiigqaaw; mwieyyqamgwicgco: $wwgucssaecqekuek = $smuykqsageuocuos->wuuawmeqqyyyemsw($ymyisaeksssueeik); $aiooqyausygaasqm = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x64\141\164\x61\x2d\151\x64"); $iwiewowoqmoekyqi = $this->kkkaiqweiaqiaycg($aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto kceuusiekagyeoys; } $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto uyeyscsaigimsqwq; kceuusiekagyeoys: $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, $msqkueqksqwmskak, $iwiewowoqmoekyqi); uyeyscsaigimsqwq: wkiymcoqqiigqaaw: esqwswmoegiqcckg: gkoaeuekqockuoiq: } yqicwmekwuoywyus: return $this->akqamsokouooqqgw($ymyisaeksssueeik); }, false); qmokwkocmcyeyesc: return $moooemyaqewumiay; } public function mgkeqqkmsqqiksyo($eqgoocgaqwqcimie, $wkgkmowokewiiaoo) : ?bool { if (!($eqgoocgaqwqcimie === false || !$this->ocysssyiuaueqiei())) { goto mosuacsuaasssciu; } return $eqgoocgaqwqcimie; mosuacsuaasssciu: switch ($wkgkmowokewiiaoo) { case "\x69\155\147": $eqgoocgaqwqcimie = !$this->yoqcwmkacmggcksg(Constants::mkousmkiawwousws); goto qksckewucmosemuo; case "\x69\146\x72\141\155\145": $eqgoocgaqwqcimie = !$this->yoqcwmkacmggcksg(Constants::ykigkkwgecsygowo); goto qksckewucmosemuo; } kmooekeyemqgucci: qksckewucmosemuo: return $eqgoocgaqwqcimie; } public function yoqcwmkacmggcksg($kqywgoqsmuswammk) : bool { return in_array($this->weysguygiseoukqw(Setting::souisqooyuiygceo), [Constants::ALL, $kqywgoqsmuswammk], true); } public function kkkaiqweiaqiaycg($aiooqyausygaasqm, array $wwgucssaecqekuek = []) : string { $iwiewowoqmoekyqi = (string) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x6d\x65\144\151\141\137\x6c\141\x7a\x79\137\154\157\x61\144\x5f\x70\x6c\141\143\x65\x68\x6f\154\144\145\x72", '', $aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto skuuyysooocugyww; } $qeswwaqqsyymqawg = absint($wwgucssaecqekuek[Constants::qomookamaskuoswk] ?? 0); $cswemwoyesycwkuq = absint($wwgucssaecqekuek[Constants::sogmkkcwuamuqegw] ?? 0); $iwiewowoqmoekyqi = (string) str_replace("\40", "\45\x32\60", "\x64\141\x74\x61\x3a\151\x6d\x61\147\x65\57\163\166\x67\53\x78\155\154\x2c\x25\63\103\x73\166\147\x20\x78\155\154\156\163\x3d\x27\x68\164\164\x70\x3a\57\x2f\x77\167\167\56\167\x33\x2e\x6f\162\147\x2f\62\60\x30\x30\57\x73\x76\x67\x27\x20\166\x69\x65\167\x42\x6f\170\x3d\x27\x30\40\60\40{$qeswwaqqsyymqawg}\40{$cswemwoyesycwkuq}\x27\x25\63\x45\x25\x33\103\57\163\x76\x67\x25\x33\105"); skuuyysooocugyww: return $iwiewowoqmoekyqi; } public function aciqoewcqaqqqumc($siquossayskcwkea) : bool { $siquossayskcwkea = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->asouumsaymkgawie($siquossayskcwkea); return $this->ogomcyeyumwiqekm($siquossayskcwkea, $this->siciigyskwogeucw()); } public function aosmowmawkceeses(string $ogomymegcoacqisg, array $aowmesqseaiqimyu = []) : bool { return $this->ogomcyeyumwiqekm($ogomymegcoacqisg, $aowmesqseaiqimyu); } public function ucoeomeeyokssocw(string $moooemyaqewumiay) { $aowmesqseaiqimyu = ["\57\x77\x70\x63\146\67\x5f\143\141\160\x74\143\x68\141\x2f", "\164\x69\x6d\x74\150\x75\155\142\x2e\160\150\x70\77\163\162\x63", "\x77\157\x6f\143\x6f\x6d\x6d\145\x72\143\x65\57\x61\163\x73\145\164\163\57\151\155\x61\x67\145\x73\x2f\x70\x6c\x61\x63\145\150\157\154\x64\145\162\x2e\x70\156\147"]; $gyoeyakugsuggyoi = $this->meqmqgiwykuymcki(); if (!$gyoeyakugsuggyoi) { goto cmmusgkieoqyymgs; } $aowmesqseaiqimyu = array_merge($aowmesqseaiqimyu, array_keys($gyoeyakugsuggyoi)); cmmusgkieoqyymgs: return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\155\145\x64\151\x61\137\154\x61\x7a\x79\154\157\141\x64\x5f\x65\170\x63\x6c\x75\x64\x65\144\137\x73\162\143", $aowmesqseaiqimyu, $moooemyaqewumiay); } public function siciigyskwogeucw() : array { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\155\145\x64\x69\x61\x5f\154\x61\x7a\171\x6c\x6f\141\x64\137\x65\170\x63\x6c\x75\x64\x65\x64\x5f\x61\164\164\162\151\142\x75\164\x65\163", ["\x64\x61\164\141\x2d\163\162\143\75", "\x64\141\164\141\x2d\156\x6f\55\x6c\141\172\171\x3d", "\x64\141\x74\141\x2d\x6c\x61\172\171\55\x6f\x72\x69\147\151\156\141\154\x3d", "\144\141\x74\141\55\x6c\x61\x7a\171\55\x73\x72\143\x3d", "\x64\x61\x74\141\55\154\x61\x7a\x79\163\x72\143\x3d", "\x64\141\x74\x61\55\154\x61\x7a\x79\154\x6f\x61\x64\75", "\144\x61\x74\141\x2d\x62\147\160\157\163\x69\x74\x69\157\x6e\75", "\x64\x61\x74\141\55\145\156\x76\151\162\x61\x2d\163\x72\x63\75", "\146\x75\x6c\x6c\165\162\154\x3d", "\x6c\x61\172\x79\x2d\163\154\x69\144\145\x72\55\151\x6d\x67\x3d", "\x64\141\x74\141\55\163\x72\143\x73\145\164\x3d", "\x63\154\141\163\163\75\x22\x6c\x73\55\x6c", "\x63\x6c\141\x73\x73\x3d\42\154\163\x2d\142\x67", "\163\x6f\154\151\154\157\x71\x75\x79\55\151\155\x61\147\145", "\154\x6f\141\144\x69\156\x67\x3d\x22\x65\x61\147\145\162\x22", "\163\167\x61\164\x63\150\x2d\151\155\x67", "\144\141\x74\x61\x2d\150\145\151\147\x68\x74\55\x70\x65\162\x63\145\x6e\164\141\147\x65", "\144\141\164\141\55\154\x61\162\x67\x65\x5f\151\155\x61\147\145", "\141\166\151\x61\x2d\x62\147\x2d\x73\x74\x79\x6c\145\x2d\x66\151\170\x65\144", "\x64\141\164\x61\x2d\x73\153\x69\x70\x2d\x6c\141\172\171", "\x73\x6b\151\160\55\154\x61\172\171", "\x69\155\141\147\145\55\143\x6f\x6d\x70\141\x72\x65\137\x5f"]); } public function ogomcyeyumwiqekm(string $sociqikgoyemqaac, array $aowmesqseaiqimyu) : bool { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ogomcyeyumwiqekm($sociqikgoyemqaac, $aowmesqseaiqimyu); } }
