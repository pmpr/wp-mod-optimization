<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2ec2cd5b75             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Engine extends Common { const eeyiwgsusysqessu = "\160\154\141\156\163"; const mkciamyomkiccoes = "\143\x6f\151\156\163"; const owimkwkiwawmeicq = "\x75\163\141\x67\145\163"; const moamckowewogygog = "\x70\165\x72\x63\150\141\x73\145\x73"; const ikmkgmwegyasgqmo = "\x72\x65\155\x6f\x74\145\x5f\x61\160\160\x73"; const uysmymaeucegyiyw = "\x65\170\x74\x72\141\x5f\x63\x6f\151\x6e\x73"; const emywgcsiygeskckg = "\x72\x65\x6d\141\x69\156\x5f\x63\157\151\156\163"; public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(Constants::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function wskswuomqkmqkkmm() : array { return (array) $this->weysguygiseoukqw(self::ikmkgmwegyasgqmo, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto omyquyiguuaociwq; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::ikmkgmwegyasgqmo, Constants::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto qwosyqcomiosguoa; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto iumgcesksuawyuyo; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); iumgcesksuawyuyo: goto qaqooueskgciuqgc; qwosyqcomiosguoa: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); qaqooueskgciuqgc: iyawqekeeawqkymm: } yagscaikmmuagqcu: omyquyiguuaociwq: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto myooisakyuggoggc; } $yygmoeguaqyumuui = ["\x65\x78\164\162\141\x73", "\163\x75\x62\x73\143\x72\x69\160\164\151\x6f\156\x73"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto equwcsciiggsuiam; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\163\x75\x62\163\143\162\151\160\x74\x69\x6f\156\x73"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[Constants::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? Constants::eoigaocgcaekssuw : Constants::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto oiywguooqeasueqq; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto oqckuigyqswmqcqg; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[Constants::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, Constants::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto ioiwoukauoeamuca; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [Constants::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); ioiwoukauoeamuca: goto owismwmeqcmukagu; oqckuigyqswmqcqg: $yakcyegsoqusmiak->gscuuyuyauokoyuo([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::kumuoysauoagaiiy => $igqsaukqcqscimok[Constants::kumuoysauoagaiiy], Constants::uiwqcumqkgikqyue => $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue], Constants::acymsykymkiewqsy => $igqsaukqcqscimok[Constants::acymsykymkiewqsy], Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); owismwmeqcmukagu: oiywguooqeasueqq: cceggewquoaemcwq: } iuwccksomkkouogy: equwcsciiggsuiam: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto qsaoyggkqwcgskwk; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[Constants::asmooogmgyecqqka], $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[Constants::asmooogmgyecqqka] < $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]; qsaoyggkqwcgskwk: mesesokuoomcioom: } aqwoykqaquewcaki: myooisakyuggoggc: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\x53\x79\156\x63\40\x44\141\164\x61", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x54\150\145\x20\x64\141\164\x61\x20\141\163\163\x6f\143\151\x61\164\145\144\40\167\x69\164\x68\40\x79\x6f\x75\162\x20\x61\143\x63\157\x75\156\164\x20\151\x73\x20\165\160\x64\x61\x74\145\144\40\167\x69\164\x68\x20\164\x68\x65\40\x73\x65\x72\x76\x65\162\40\141\x74\40\x72\145\x67\x75\154\x61\162\40\151\x6e\164\145\x72\x76\x61\154\163\x2e\40\124\x6f\40\145\156\x73\x75\x72\145\40\x74\x68\145\x20\x6c\141\x74\145\x73\164\40\165\160\144\x61\x74\x65\x2c\40\171\157\165\40\143\x61\x6e\40\x75\160\x64\x61\x74\x65\x20\171\x6f\x75\162\40\141\x63\x63\157\x75\x6e\164\40\144\x61\164\141\x20\x77\151\x74\x68\x20\x74\x68\x65\x20\163\145\162\x76\145\x72\x20\156\157\x77\56", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\x6c\141\163\x73" => "\157\x70\x74\x2d\163\171\x6e\x63\x2d\x64\141\x74\141\x20\160\162\x2d\142\x74\156\x20\x62\164\x6e\55\160\x72\151\155\141\x72\x79", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\x63\154\x61\x73\x73" => "\x77\55\x31\x30\60\40\160\x72\x2d\x62\x74\156\40\142\164\x6e\x2d\x61\143\164\x69\157\x6e\40\x62\x74\156\x2d\x6f\165\164\154\151\156\145\55\x70\x72\151\x6d\x61\162\171"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto yugmwomumkosucsc; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto awkqcyusycccekwq; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::eoigaocgcaekssuw); awkqcyusycccekwq: yugmwomumkosucsc: $eymaoksggoskuikg = __("\125\156\153\156\157\x77\x6e", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\45\163\40\x63\x6f\x69\156\163", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto kqwyogqqwumumiwg; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); kqwyogqqwumumiwg: if ($ymyueyaumiqiuaqa <= 0) { goto ykogqmmywykgouqy; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\x25\x73\x20\x44\x61\x79", "\x25\x73\40\104\141\x79\x73", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($ymyueyaumiqiuaqa)), ["\143\154\141\x73\x73" => "\164\x65\x78\164\x2d\163\x75\143\143\145\x73\163"]); goto aqksouwmeckaqyaq; ykogqmmywykgouqy: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x45\170\160\x69\x72\x65\144", PR__MDL__OPTIMIZATION), ["\x63\154\x61\x73\163" => "\164\x65\x78\x74\55\144\141\156\147\x65\162"]); aqksouwmeckaqyaq: $cesmwwwcymckqaku = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Constants::mayesweykoooyugy, [Constants::euoaaiqkqcqcgeco => Constants::cqcimoqckgmaacyw, Constants::meisqwykgaymauka => Constants::kumuoysauoagaiiy, Constants::ciyoccqkiamemcmm => Constants::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto gmsyoscesymiwwue; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\116\157\x20\x50\165\x72\x63\150\141\163\x65", PR__MDL__OPTIMIZATION); goto eiicmcasqikiyasw; gmsyoscesymiwwue: $ocsquaqymuwoyisw = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::uiwqcumqkgikqyue)[Constants::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); eiicmcasqikiyasw: $gkeiousaoygaimia = [Constants::eoigaocgcaekssuw => [Constants::qescuiwgsyuikume => __("\x53\x75\x62\x73\x63\x72\x69\160\164\x69\157\x6e\x20\x50\x6c\x61\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\160\154\x61\156" => [Constants::qescuiwgsyuikume => __("\x53\x75\142\163\x63\162\151\x70\x74\151\157\156\x20\x50\x6c\141\156", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::qescuiwgsyuikume, $eymaoksggoskuikg)], "\x70\145\x72\x69\157\144" => [Constants::qescuiwgsyuikume => __("\x50\154\141\x6e\x20\x50\145\x72\x69\157\x64", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\x72\145\155\x61\x69\156\x5f\x64\141\171" => [Constants::qescuiwgsyuikume => __("\122\145\155\141\151\156\151\x6e\147\40\x54\151\155\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\x63\157\151\156\163" => [Constants::qescuiwgsyuikume => __("\103\157\x75\156\x74\x20\157\x66\x20\111\156\x69\x74\x69\141\154\x20\103\157\x69\156\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($cesmwwwcymckqaku))], "\x75\163\145\144\x5f\x63\157\151\x6e\x73" => [Constants::qescuiwgsyuikume => __("\125\163\x65\x64\x20\x43\x6f\x69\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\x72\145\155\141\x69\x6e\x5f\x63\157\151\156\163" => [Constants::qescuiwgsyuikume => __("\x52\145\x6d\x61\x69\x6e\x20\103\x6f\151\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [Constants::qescuiwgsyuikume => __("\x45\170\x74\162\x61\x20\103\x6f\151\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\154\141\x74\x65\x73\164\x5f\160\165\x72\143\x68\x61\163\x65\137\x63\x6f\165\x6e\164" => [Constants::qescuiwgsyuikume => __("\x4c\x61\164\145\163\164\x20\x50\165\x72\x63\150\141\x73\145\40\x43\157\x75\156\164", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\x6c\141\164\145\x73\x74\x5f\x70\x75\162\x63\x68\x61\x73\x65\x5f\144\x61\164\x65" => [Constants::qescuiwgsyuikume => __("\114\141\x74\x65\163\x74\40\x50\x75\162\143\x68\x61\163\145\40\104\141\x74\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\145\x78\160\x69\x72\x61\x74\x69\157\x6e" => [Constants::qescuiwgsyuikume => __("\105\x78\160\x69\162\145\x20\104\141\164\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\127\x69\164\x68\x6f\165\164\x20\145\x78\x70\x69\162\x65\40\144\x61\x74\x65", PR__MDL__OPTIMIZATION), ["\143\154\141\163\x73" => "\164\x65\x78\164\55\163\x75\x63\x63\x65\163\163"])], "\143\157\x69\x6e\x73\x5f\143\x6f\x75\156\164" => [Constants::qescuiwgsyuikume => __("\101\x6c\x6c\x20\103\x6f\x69\156\x73\40\103\157\x75\156\164", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yeyequgieweqoume))], "\x75\x73\145\x64\x5f\143\157\x69\x6e\163" => [Constants::qescuiwgsyuikume => __("\125\x73\145\144\x20\103\x6f\151\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\x72\145\x6d\141\151\x6e\137\x63\157\x69\156\x73" => [Constants::qescuiwgsyuikume => __("\122\145\155\141\151\156\40\103\157\151\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][Constants::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[Constants::qwumqqyuasyskkkc], ["\164\141\x62\x6c\145\x5f\x61\x74\164\162\x73" => ["\143\154\141\163\163" => "\x6d\142\x2d\x30\40\x74\x61\142\154\145\40\164\141\x62\x6c\x65\55\x62\x6f\162\x64\145\162\x6c\x65\163\163"], "\164\x64\x5f\x61\164\x74\162\x73" => ["\x63\154\x61\163\x73" => "\160\170\x2d\x30\40\160\x79\x2d\62"], "\x6c\141\163\164\137\x74\x64\x5f\141\164\164\x72\163" => ["\x63\x6c\141\x73\x73" => "\160\170\x2d\60\x20\160\x79\x2d\62\x20\x66\157\x6e\x74\x2d\x77\145\151\x67\x68\164\x2d\x62\157\x6c\144\x20\x74\x65\170\164\x2d\x72\151\x67\x68\164"]]); smmagoyuqoigoesc: } ayucsuwsiocgycww: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto wsqeiwkgoiekwasy; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); wsqeiwkgoiekwasy: $qookweymeqawmcwo = ["\x6c\151\x73\164\x5f\150\164\x6d\154" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\x70\x75\162\143\x68\x61\x73\145\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\x65\x70\x6f\x72\x74\x2f\x70\x75\x72\143\x68\x61\163\x65", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\x6c\151\163\x74\x5f\x68\164\x6d\154" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\x75\x73\x61\147\145\x73", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\x65\160\157\x72\x74\57\165\x73\x61\x67\145", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(VirtualBrowserSetting::eoeewcigeywcquis))) { goto swesqeqmagkicuws; } $ccowyogiqwikkkie[] = VirtualBrowser::eoeewcigeywcquis; swesqeqmagkicuws: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto kwayumouacgkgyas; } $ywmkwiwkosakssii = [Constants::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto cwyaysecsakaqgew; } $ywmkwiwkosakssii[Constants::ausqeuugegoygouq] = 4; cwyaysecsakaqgew: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto kgqgcggccmiwayua; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\126\x69\145\x77\x20\x74\x68\x65\40\106\x75\x6c\154\40\122\x65\x70\x6f\x72\x74", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x73\145\147\155\145\156\x74" => "{$ymqmyyeuycgmigyo}\137\162\x65\x70\x6f\x72\164"], $eeamcawaiqocomwy), ["\143\154\x61\163\x73" => "\x70\x72\55\142\164\156\x20\x62\164\156\x2d\x70\x72\x69\155\x61\x72\171\x20\x62\x74\x6e\x2d\x61\143\164\151\x6f\156"]); kgqgcggccmiwayua: kwayumouacgkgyas: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto kygccamgawookukq; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case VirtualBrowser::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto eucakkcoiiwkwsme; } iwsaaiggkciigsmc: eucakkcoiiwkwsme: if (!$uymsgmyyeikucgae) { goto agsuaimomgsoyiem; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\x5f\x75\x73\x61\147\145", 0); agsuaimomgsoyiem: mcmcocyuugueaeww: } rgaagksgsewuwgmo: kygccamgawookukq: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto gcaykgmmmqomsyis; } $nsmgceoqaqogqmuw = __("\124\150\x65\x72\145\40\151\163\40\156\157\164\40\x64\x61\164\141\40\x74\157\40\x73\x68\x6f\167\x20\x79\157\165\54\40\160\154\x65\141\163\x65\x20\162\145\146\x72\145\163\150\x20\160\x61\x67\145\x20\x6f\x72\x20\143\157\x6e\164\x61\143\x74\40\165\163\x2e", PR__MDL__OPTIMIZATION); goto yccuomocgmewkeca; gcaykgmmmqomsyis: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\160\154\141\156\137\x69\144")))) { goto ocwouquuwsaqakae; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto tagquiiokseckkqs; } $guacamgosccsckmq = [Constants::eqewsqmqmsiocaeg => true, Constants::qescuiwgsyuikume => __("\131\157\x75\x72\x20\123\165\x62\x73\143\x72\151\x70\x74\x69\x6f\156", PR__MDL__OPTIMIZATION)]; goto qoacckkkwsqkokye; tagquiiokseckkqs: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\167\x65\x62\137\166\151\x74\141\x6c\137\x75\163\x61\147\145", "\143\x72\151\164\151\143\141\x6c\x5f\x63\163\163\137\x75\x73\x61\x67\145"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto ooooceiweeackgie; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto qysmyemoucigsmua; ooooceiweeackgie: kuaiscyqkgcouiye: } qysmyemoucigsmua: if ($ycqsugugqomewkke) { goto gkeymcqqsewayscs; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\45\163\x20\50\45\163\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] ?? '', __("\131\x6f\x75\x72\x20\123\x75\142\x73\x63\x72\x69\160\x74\151\157\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::eqewsqmqmsiocaeg] = true; goto qwiyicoywcekgyce; gkeymcqqsewayscs: $guacamgosccsckmq[Constants::qescuiwgsyuikume] = sprintf("\45\x73\x20\x28\45\x73\x29", $guacamgosccsckmq[Constants::qescuiwgsyuikume], __("\131\157\x75\162\40\x53\165\x62\163\x63\x72\151\x70\x74\x69\x6f\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\45\163\40\50\x25\163\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume], __("\116\145\x77", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[Constants::eqewsqmqmsiocaeg] = true; qwiyicoywcekgyce: qoacckkkwsqkokye: if (!$guacamgosccsckmq) { goto swuggqyiaiqywgge; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); swuggqyiaiqywgge: ocwouquuwsaqakae: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x73\x65\x72\166\151\143\x65\137\143\x6f\163\164\163", ["\160\x6c\141\x6e\x73" => $kekgkgqeyesmkywu, "\155\145\x74\162\x69\143\x73" => ["\x63\x72\151\x74\x69\143\x61\x6c\137\x63\x73\x73" => __("\103\x72\x69\x74\151\x63\x61\154\x20\103\x53\123", PR__MDL__OPTIMIZATION), "\x77\x65\142\137\x76\151\164\x61\x6c" => __("\111\x6d\x70\162\157\166\x65\x20\x4c\103\120", PR__MDL__OPTIMIZATION)], "\143\x6f\151\156\137\155\x61\x73\x6b" => __("\45\163\x20\x63\x6f\x69\156\163", PR__MDL__OPTIMIZATION), "\x73\165\142\163\143\162\151\x70\164\x69\x6f\x6e\137\x70\154\141\x6e\x73\137\164\151\164\x6c\x65" => __("\123\x75\x62\163\143\162\151\160\x74\x69\x6f\x6e\40\x50\154\x61\x6e\163", PR__MDL__OPTIMIZATION)]); yccuomocgmewkeca: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
