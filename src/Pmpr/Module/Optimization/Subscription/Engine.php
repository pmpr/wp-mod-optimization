<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d31c5704a7a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Engine extends Common { const eeyiwgsusysqessu = "\160\x6c\141\x6e\x73"; const mkciamyomkiccoes = "\x63\157\x69\x6e\x73"; const owimkwkiwawmeicq = "\x75\163\x61\147\145\163"; const moamckowewogygog = "\x70\165\162\143\150\x61\163\x65\x73"; const ikmkgmwegyasgqmo = "\x72\x65\x6d\x6f\x74\x65\137\x61\160\x70\163"; const uysmymaeucegyiyw = "\x65\170\x74\x72\141\x5f\143\x6f\x69\x6e\x73"; const emywgcsiygeskckg = "\x72\145\155\141\151\x6e\x5f\x63\x6f\151\x6e\x73"; public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(Constants::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function wskswuomqkmqkkmm() : array { return (array) $this->weysguygiseoukqw(self::ikmkgmwegyasgqmo, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto omyquyiguuaociwq; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::ikmkgmwegyasgqmo, Constants::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto qwosyqcomiosguoa; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto iumgcesksuawyuyo; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); iumgcesksuawyuyo: goto qaqooueskgciuqgc; qwosyqcomiosguoa: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); qaqooueskgciuqgc: iyawqekeeawqkymm: } yagscaikmmuagqcu: omyquyiguuaociwq: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto myooisakyuggoggc; } $yygmoeguaqyumuui = ["\145\x78\x74\x72\x61\163", "\x73\165\x62\x73\x63\162\151\x70\164\151\x6f\156\163"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto equwcsciiggsuiam; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\x73\165\142\x73\x63\x72\x69\x70\x74\x69\x6f\156\163"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[Constants::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? Constants::eoigaocgcaekssuw : Constants::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto oiywguooqeasueqq; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto oqckuigyqswmqcqg; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[Constants::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, Constants::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto ioiwoukauoeamuca; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [Constants::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); ioiwoukauoeamuca: goto owismwmeqcmukagu; oqckuigyqswmqcqg: $yakcyegsoqusmiak->gscuuyuyauokoyuo([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::kumuoysauoagaiiy => $igqsaukqcqscimok[Constants::kumuoysauoagaiiy], Constants::uiwqcumqkgikqyue => $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue], Constants::acymsykymkiewqsy => $igqsaukqcqscimok[Constants::acymsykymkiewqsy], Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); owismwmeqcmukagu: oiywguooqeasueqq: cceggewquoaemcwq: } iuwccksomkkouogy: equwcsciiggsuiam: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto qsaoyggkqwcgskwk; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[Constants::asmooogmgyecqqka], $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[Constants::asmooogmgyecqqka] < $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]; qsaoyggkqwcgskwk: mesesokuoomcioom: } aqwoykqaquewcaki: myooisakyuggoggc: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\123\x79\x6e\143\40\104\x61\164\141", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\124\150\x65\x20\x64\141\x74\x61\x20\141\163\x73\x6f\x63\x69\x61\164\145\x64\x20\x77\151\164\150\x20\171\157\165\x72\40\x61\143\143\157\165\x6e\x74\40\x69\x73\x20\x75\x70\144\141\x74\145\x64\x20\x77\151\164\150\40\x74\x68\145\x20\163\145\x72\x76\x65\162\x20\x61\164\40\162\145\x67\x75\x6c\x61\162\x20\x69\156\164\x65\162\166\x61\154\x73\x2e\x20\x54\157\40\x65\156\163\165\x72\x65\40\x74\x68\145\x20\154\141\x74\x65\x73\x74\40\x75\x70\x64\141\164\145\x2c\x20\x79\157\x75\40\x63\x61\156\40\x75\x70\144\x61\164\145\x20\171\157\165\162\40\141\143\x63\157\x75\156\x74\40\144\x61\164\x61\x20\167\151\164\x68\40\164\150\145\40\x73\x65\162\166\145\x72\x20\x6e\x6f\167\56", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\x6c\141\x73\163" => "\157\160\x74\x2d\x73\171\156\x63\x2d\144\x61\164\141\40\x70\162\55\x62\164\156\40\x62\164\x6e\x2d\160\x72\x69\x6d\141\x72\171", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\x63\154\141\x73\x73" => "\167\x2d\x31\x30\x30\40\x70\162\x2d\142\164\x6e\x20\x62\164\156\55\x61\x63\x74\x69\x6f\156\40\x62\x74\156\55\157\x75\x74\x6c\151\156\x65\x2d\160\162\x69\x6d\141\162\x79"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto yugmwomumkosucsc; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto awkqcyusycccekwq; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::eoigaocgcaekssuw); awkqcyusycccekwq: yugmwomumkosucsc: $eymaoksggoskuikg = __("\x55\156\x6b\x6e\157\x77\x6e", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\x25\x73\x20\x63\x6f\x69\x6e\x73", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto kqwyogqqwumumiwg; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); kqwyogqqwumumiwg: if ($ymyueyaumiqiuaqa <= 0) { goto ykogqmmywykgouqy; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\x25\x73\40\x44\x61\171", "\45\163\40\104\x61\171\x73", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($ymyueyaumiqiuaqa)), ["\143\x6c\x61\x73\163" => "\164\x65\170\164\x2d\163\x75\143\143\x65\x73\163"]); goto aqksouwmeckaqyaq; ykogqmmywykgouqy: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x45\x78\160\151\x72\145\x64", PR__MDL__OPTIMIZATION), ["\143\x6c\141\163\x73" => "\164\145\x78\164\55\x64\141\x6e\147\x65\x72"]); aqksouwmeckaqyaq: $cesmwwwcymckqaku = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Constants::mayesweykoooyugy, [Constants::euoaaiqkqcqcgeco => Constants::cqcimoqckgmaacyw, Constants::meisqwykgaymauka => Constants::kumuoysauoagaiiy, Constants::ciyoccqkiamemcmm => Constants::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto gmsyoscesymiwwue; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\x4e\x6f\x20\x50\x75\162\x63\x68\141\163\145", PR__MDL__OPTIMIZATION); goto eiicmcasqikiyasw; gmsyoscesymiwwue: $ocsquaqymuwoyisw = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::uiwqcumqkgikqyue)[Constants::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); eiicmcasqikiyasw: $gkeiousaoygaimia = [Constants::eoigaocgcaekssuw => [Constants::qescuiwgsyuikume => __("\123\165\142\x73\x63\162\x69\160\x74\151\157\156\40\120\154\x61\x6e", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\160\154\141\x6e" => [Constants::qescuiwgsyuikume => __("\x53\165\142\x73\x63\162\151\x70\164\x69\157\156\x20\120\154\x61\x6e", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::qescuiwgsyuikume, $eymaoksggoskuikg)], "\160\x65\162\151\157\144" => [Constants::qescuiwgsyuikume => __("\120\154\x61\x6e\40\120\145\x72\x69\x6f\144", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\162\145\x6d\141\x69\x6e\137\x64\x61\x79" => [Constants::qescuiwgsyuikume => __("\x52\145\155\x61\x69\x6e\x69\x6e\x67\x20\x54\x69\155\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\x63\x6f\151\156\x73" => [Constants::qescuiwgsyuikume => __("\103\157\165\x6e\x74\40\157\x66\x20\x49\x6e\151\164\151\x61\x6c\x20\103\157\x69\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($cesmwwwcymckqaku))], "\x75\163\x65\x64\137\x63\157\151\156\163" => [Constants::qescuiwgsyuikume => __("\125\163\145\x64\x20\x43\x6f\151\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\x72\x65\155\141\151\156\x5f\143\x6f\x69\156\163" => [Constants::qescuiwgsyuikume => __("\x52\145\x6d\x61\151\x6e\x20\103\x6f\151\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [Constants::qescuiwgsyuikume => __("\105\170\164\162\141\40\103\x6f\151\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\154\141\164\145\x73\164\x5f\x70\165\x72\x63\x68\x61\163\145\137\x63\157\165\156\x74" => [Constants::qescuiwgsyuikume => __("\x4c\x61\164\145\163\x74\x20\120\x75\x72\x63\x68\141\x73\x65\x20\103\x6f\x75\156\x74", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\x6c\x61\x74\145\x73\164\x5f\x70\165\162\143\150\141\163\x65\x5f\144\x61\x74\x65" => [Constants::qescuiwgsyuikume => __("\114\x61\164\x65\163\x74\x20\120\165\x72\x63\x68\141\163\x65\40\x44\x61\164\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\x65\170\x70\x69\162\x61\x74\151\x6f\x6e" => [Constants::qescuiwgsyuikume => __("\105\170\x70\151\162\145\x20\x44\141\x74\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x57\x69\164\150\157\x75\x74\40\x65\170\x70\151\162\x65\x20\x64\x61\164\145", PR__MDL__OPTIMIZATION), ["\x63\154\141\163\x73" => "\x74\x65\170\x74\55\163\165\143\143\x65\163\163"])], "\x63\157\x69\156\x73\137\143\157\x75\156\164" => [Constants::qescuiwgsyuikume => __("\101\154\154\x20\103\157\151\156\x73\x20\x43\x6f\165\x6e\x74", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yeyequgieweqoume))], "\165\x73\145\x64\x5f\x63\x6f\x69\x6e\x73" => [Constants::qescuiwgsyuikume => __("\x55\163\x65\144\40\103\x6f\x69\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\162\145\x6d\x61\x69\156\137\143\157\151\x6e\163" => [Constants::qescuiwgsyuikume => __("\122\145\155\x61\x69\x6e\x20\103\x6f\151\156\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][Constants::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[Constants::qwumqqyuasyskkkc], ["\x74\x61\x62\154\145\137\x61\x74\164\x72\x73" => ["\x63\154\x61\163\163" => "\155\x62\x2d\60\40\x74\x61\142\154\145\40\x74\141\x62\x6c\145\x2d\x62\x6f\x72\144\145\x72\x6c\145\x73\163"], "\x74\144\x5f\x61\x74\x74\162\x73" => ["\143\154\141\163\163" => "\160\x78\55\x30\x20\x70\171\x2d\x32"], "\x6c\x61\x73\164\137\x74\x64\x5f\x61\164\x74\162\x73" => ["\x63\x6c\141\163\163" => "\x70\x78\55\x30\40\160\x79\x2d\62\40\x66\157\x6e\164\x2d\x77\x65\151\147\150\x74\55\142\x6f\154\x64\x20\164\145\170\164\x2d\x72\x69\147\150\x74"]]); smmagoyuqoigoesc: } ayucsuwsiocgycww: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto wsqeiwkgoiekwasy; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); wsqeiwkgoiekwasy: $qookweymeqawmcwo = ["\x6c\x69\x73\164\x5f\x68\x74\155\154" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\160\x75\x72\x63\x68\141\163\145\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\145\x70\x6f\x72\164\x2f\x70\165\x72\x63\x68\141\x73\x65", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\154\151\x73\x74\x5f\150\x74\x6d\154" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\165\x73\141\x67\145\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\x65\x70\157\162\x74\x2f\165\x73\x61\147\145", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(VirtualBrowserSetting::eoeewcigeywcquis))) { goto swesqeqmagkicuws; } $ccowyogiqwikkkie[] = VirtualBrowser::eoeewcigeywcquis; swesqeqmagkicuws: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto kwayumouacgkgyas; } $ywmkwiwkosakssii = [Constants::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto cwyaysecsakaqgew; } $ywmkwiwkosakssii[Constants::ausqeuugegoygouq] = 4; cwyaysecsakaqgew: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto kgqgcggccmiwayua; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\126\151\145\x77\40\164\x68\x65\40\x46\x75\154\x6c\x20\122\145\160\157\162\164", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\163\x65\147\x6d\x65\156\x74" => "{$ymqmyyeuycgmigyo}\137\x72\145\x70\x6f\x72\164"], $eeamcawaiqocomwy), ["\143\154\141\x73\x73" => "\x70\162\x2d\142\164\156\40\142\164\156\x2d\160\x72\x69\155\141\x72\171\40\142\x74\156\x2d\x61\x63\164\x69\157\x6e"]); kgqgcggccmiwayua: kwayumouacgkgyas: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto kygccamgawookukq; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case VirtualBrowser::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto eucakkcoiiwkwsme; } iwsaaiggkciigsmc: eucakkcoiiwkwsme: if (!$uymsgmyyeikucgae) { goto agsuaimomgsoyiem; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\137\x75\163\x61\x67\145", 0); agsuaimomgsoyiem: mcmcocyuugueaeww: } rgaagksgsewuwgmo: kygccamgawookukq: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto gcaykgmmmqomsyis; } $nsmgceoqaqogqmuw = __("\x54\150\x65\162\x65\x20\x69\x73\40\156\x6f\164\x20\x64\141\164\141\x20\x74\157\40\x73\150\157\167\x20\171\x6f\x75\x2c\40\160\154\x65\141\163\x65\x20\162\x65\146\162\x65\x73\150\x20\160\x61\147\145\40\x6f\x72\40\143\x6f\x6e\x74\141\143\x74\40\165\x73\56", PR__MDL__OPTIMIZATION); goto yccuomocgmewkeca; gcaykgmmmqomsyis: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\x70\x6c\x61\x6e\x5f\151\144")))) { goto ocwouquuwsaqakae; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto tagquiiokseckkqs; } $guacamgosccsckmq = [Constants::eqewsqmqmsiocaeg => true, Constants::qescuiwgsyuikume => __("\131\157\x75\x72\40\x53\x75\x62\x73\143\162\151\x70\164\x69\x6f\156", PR__MDL__OPTIMIZATION)]; goto qoacckkkwsqkokye; tagquiiokseckkqs: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\x77\145\x62\137\x76\151\164\x61\154\x5f\x75\x73\x61\147\145", "\x63\162\151\x74\151\x63\141\x6c\137\x63\163\163\x5f\165\163\x61\x67\x65"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto ooooceiweeackgie; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto qysmyemoucigsmua; ooooceiweeackgie: kuaiscyqkgcouiye: } qysmyemoucigsmua: if ($ycqsugugqomewkke) { goto gkeymcqqsewayscs; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\x25\163\40\x28\x25\163\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] ?? '', __("\x59\x6f\x75\x72\40\x53\165\142\x73\143\x72\151\160\x74\x69\157\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::eqewsqmqmsiocaeg] = true; goto qwiyicoywcekgyce; gkeymcqqsewayscs: $guacamgosccsckmq[Constants::qescuiwgsyuikume] = sprintf("\45\163\x20\x28\x25\163\51", $guacamgosccsckmq[Constants::qescuiwgsyuikume], __("\131\157\165\162\40\123\165\142\163\143\162\151\x70\x74\151\157\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\45\163\40\50\45\163\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume], __("\x4e\x65\167", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[Constants::eqewsqmqmsiocaeg] = true; qwiyicoywcekgyce: qoacckkkwsqkokye: if (!$guacamgosccsckmq) { goto swuggqyiaiqywgge; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); swuggqyiaiqywgge: ocwouquuwsaqakae: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\163\x65\x72\166\151\143\x65\137\x63\x6f\x73\164\x73", ["\x70\154\141\x6e\163" => $kekgkgqeyesmkywu, "\x6d\x65\x74\162\x69\x63\163" => ["\143\162\151\164\151\143\x61\154\137\x63\x73\163" => __("\x43\162\151\x74\x69\143\141\x6c\40\103\123\123", PR__MDL__OPTIMIZATION), "\x77\x65\142\x5f\166\x69\164\141\154" => __("\111\x6d\160\x72\x6f\166\145\x20\114\103\x50", PR__MDL__OPTIMIZATION)], "\x63\157\151\x6e\137\x6d\x61\x73\x6b" => __("\x25\x73\40\x63\157\151\156\163", PR__MDL__OPTIMIZATION), "\163\165\142\163\x63\x72\x69\160\x74\x69\157\x6e\x5f\x70\154\x61\156\163\137\164\151\x74\x6c\x65" => __("\x53\165\142\x73\x63\162\151\x70\x74\151\157\156\x20\120\x6c\141\x6e\x73", PR__MDL__OPTIMIZATION)]); yccuomocgmewkeca: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
