<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cf8fcabf8fd             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Engine extends Common { const eeyiwgsusysqessu = "\x70\x6c\141\156\163"; const mkciamyomkiccoes = "\143\157\151\x6e\x73"; const owimkwkiwawmeicq = "\165\163\x61\147\145\x73"; const moamckowewogygog = "\160\165\x72\x63\150\141\x73\x65\163"; const ikmkgmwegyasgqmo = "\162\x65\x6d\157\x74\145\137\x61\160\160\x73"; const uysmymaeucegyiyw = "\x65\170\164\x72\141\x5f\x63\x6f\151\x6e\163"; const emywgcsiygeskckg = "\162\x65\155\141\x69\156\x5f\x63\157\x69\x6e\163"; public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(Constants::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function wskswuomqkmqkkmm() : array { return (array) $this->weysguygiseoukqw(self::ikmkgmwegyasgqmo, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto ogciikaecauiwgyk; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::ikmkgmwegyasgqmo, Constants::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto eqsuaywswuesuika; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto wasuquysysmqyegg; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); wasuquysysmqyegg: goto okawiaowosqickgq; eqsuaywswuesuika: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); okawiaowosqickgq: geoiegikocwmwosi: } qykcggwgkweasuii: ogciikaecauiwgyk: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto iaywwgssaoecwmeg; } $yygmoeguaqyumuui = ["\x65\x78\164\x72\x61\x73", "\163\165\142\x73\143\x72\x69\x70\164\x69\x6f\156\x73"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto eiegguecasykwmyq; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\163\165\142\163\x63\162\x69\160\164\x69\x6f\x6e\163"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[Constants::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? Constants::eoigaocgcaekssuw : Constants::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto sosqgaswegsomgkw; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto iicaisyekagswmey; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[Constants::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, Constants::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto quiguyyimiqeqcwa; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [Constants::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); quiguyyimiqeqcwa: goto ogwwasqkaageiwwi; iicaisyekagswmey: $yakcyegsoqusmiak->gscuuyuyauokoyuo([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::kumuoysauoagaiiy => $igqsaukqcqscimok[Constants::kumuoysauoagaiiy], Constants::uiwqcumqkgikqyue => $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue], Constants::acymsykymkiewqsy => $igqsaukqcqscimok[Constants::acymsykymkiewqsy], Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); ogwwasqkaageiwwi: sosqgaswegsomgkw: isaacywgkascmcsw: } eomcuogskessyicy: eiegguecasykwmyq: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto qiiqceousoicgeee; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[Constants::asmooogmgyecqqka], $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[Constants::asmooogmgyecqqka] < $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]; qiiqceousoicgeee: oyeygeykqwcqoeic: } meiqywmwuoogckss: iaywwgssaoecwmeg: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\x53\171\x6e\143\x20\104\141\x74\141", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\124\150\145\40\144\141\x74\x61\x20\141\163\163\157\x63\x69\x61\x74\x65\x64\x20\167\151\x74\x68\x20\171\157\165\x72\x20\141\x63\x63\x6f\165\x6e\164\x20\151\x73\40\165\160\144\x61\164\145\x64\x20\167\x69\x74\150\40\164\x68\145\40\x73\145\x72\x76\145\162\x20\141\x74\x20\x72\145\x67\x75\154\x61\162\x20\x69\x6e\164\145\x72\x76\x61\x6c\163\x2e\40\x54\x6f\40\x65\x6e\x73\x75\162\145\x20\164\x68\x65\x20\x6c\x61\164\145\163\x74\40\x75\x70\x64\x61\x74\145\x2c\40\171\157\165\x20\143\141\x6e\x20\x75\160\x64\141\x74\x65\40\x79\157\x75\162\x20\x61\143\143\157\x75\x6e\164\40\144\x61\x74\141\x20\x77\x69\164\150\x20\x74\x68\145\x20\163\x65\x72\x76\x65\x72\40\156\x6f\167\56", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\x6c\141\x73\163" => "\157\x70\164\55\163\171\156\143\x2d\144\x61\x74\x61\40\160\162\55\x62\x74\156\x20\x62\164\x6e\x2d\x70\x72\151\x6d\141\x72\171", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\x63\154\141\163\163" => "\x77\55\61\60\60\40\160\x72\x2d\x62\164\156\x20\142\x74\156\x2d\x61\x63\x74\151\x6f\156\40\x62\x74\x6e\x2d\x6f\x75\x74\x6c\x69\x6e\145\x2d\160\x72\151\155\141\162\x79"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto jyekikocgagcgywq; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto maeueeueqoywkiom; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::eoigaocgcaekssuw); maeueeueqoywkiom: jyekikocgagcgywq: $eymaoksggoskuikg = __("\x55\x6e\x6b\156\157\167\156", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\45\x73\x20\x63\157\151\156\163", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto qoiyiuoyamwimusy; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); qoiyiuoyamwimusy: if ($ymyueyaumiqiuaqa <= 0) { goto oeogyayooiwqcmia; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\x25\x73\x20\x44\141\171", "\x25\x73\40\x44\x61\171\163", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($ymyueyaumiqiuaqa)), ["\143\154\141\x73\x73" => "\164\x65\x78\164\55\x73\x75\143\x63\145\163\163"]); goto uowiiyqmiaaaaoas; oeogyayooiwqcmia: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x45\170\160\151\162\x65\144", PR__MDL__OPTIMIZATION), ["\143\x6c\x61\x73\163" => "\164\145\170\x74\55\x64\x61\x6e\x67\145\x72"]); uowiiyqmiaaaaoas: $cesmwwwcymckqaku = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Constants::mayesweykoooyugy, [Constants::euoaaiqkqcqcgeco => Constants::cqcimoqckgmaacyw, Constants::meisqwykgaymauka => Constants::kumuoysauoagaiiy, Constants::ciyoccqkiamemcmm => Constants::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto vokekoceocuskqsm; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\x4e\x6f\40\120\x75\162\x63\150\x61\x73\x65", PR__MDL__OPTIMIZATION); goto ooykyoowougqkaso; vokekoceocuskqsm: $ocsquaqymuwoyisw = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::uiwqcumqkgikqyue)[Constants::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); ooykyoowougqkaso: $gkeiousaoygaimia = [Constants::eoigaocgcaekssuw => [Constants::qescuiwgsyuikume => __("\x53\165\x62\x73\x63\x72\151\160\164\151\x6f\156\x20\x50\x6c\141\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\x70\154\141\156" => [Constants::qescuiwgsyuikume => __("\123\x75\142\x73\143\x72\151\x70\x74\151\157\x6e\40\x50\154\141\156", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::qescuiwgsyuikume, $eymaoksggoskuikg)], "\160\x65\162\x69\x6f\x64" => [Constants::qescuiwgsyuikume => __("\x50\x6c\141\x6e\40\120\145\162\151\x6f\144", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\162\145\155\x61\151\x6e\137\144\x61\x79" => [Constants::qescuiwgsyuikume => __("\x52\145\x6d\x61\151\x6e\151\156\x67\x20\124\x69\155\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\x63\157\x69\x6e\163" => [Constants::qescuiwgsyuikume => __("\103\157\165\156\164\x20\x6f\146\x20\111\x6e\x69\x74\151\x61\x6c\x20\x43\x6f\151\156\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($cesmwwwcymckqaku))], "\x75\x73\x65\x64\137\143\157\x69\156\163" => [Constants::qescuiwgsyuikume => __("\125\163\x65\144\x20\103\x6f\x69\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\162\145\155\x61\x69\x6e\x5f\143\157\151\156\163" => [Constants::qescuiwgsyuikume => __("\x52\x65\x6d\x61\x69\156\x20\x43\x6f\151\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [Constants::qescuiwgsyuikume => __("\x45\170\164\162\x61\x20\x43\x6f\x69\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\154\141\x74\145\x73\164\137\160\165\x72\x63\x68\141\x73\x65\137\x63\157\165\156\x74" => [Constants::qescuiwgsyuikume => __("\x4c\x61\x74\145\163\164\40\120\x75\162\x63\150\x61\x73\145\40\x43\157\165\156\164", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\154\141\x74\x65\163\164\137\x70\x75\x72\x63\x68\141\163\x65\137\144\x61\164\x65" => [Constants::qescuiwgsyuikume => __("\114\x61\x74\145\163\164\40\x50\x75\x72\x63\x68\141\x73\145\x20\x44\141\164\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\145\170\x70\151\162\x61\164\151\157\156" => [Constants::qescuiwgsyuikume => __("\x45\170\x70\x69\x72\x65\40\104\x61\x74\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\127\x69\x74\x68\x6f\165\x74\40\x65\x78\x70\151\162\145\x20\144\141\164\145", PR__MDL__OPTIMIZATION), ["\x63\154\x61\x73\163" => "\x74\145\170\x74\x2d\163\x75\143\x63\x65\163\x73"])], "\x63\157\151\156\163\x5f\143\x6f\x75\x6e\x74" => [Constants::qescuiwgsyuikume => __("\101\154\154\40\x43\x6f\x69\156\x73\x20\103\x6f\x75\x6e\x74", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yeyequgieweqoume))], "\x75\x73\145\x64\137\143\157\x69\156\163" => [Constants::qescuiwgsyuikume => __("\125\163\x65\x64\x20\x43\x6f\x69\156\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\162\x65\x6d\141\151\x6e\x5f\143\157\151\156\x73" => [Constants::qescuiwgsyuikume => __("\122\145\x6d\x61\151\156\40\x43\x6f\x69\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][Constants::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[Constants::qwumqqyuasyskkkc], ["\x74\x61\x62\154\145\137\x61\164\164\162\x73" => ["\x63\154\x61\x73\163" => "\155\x62\x2d\60\40\164\141\142\x6c\145\40\x74\141\x62\154\x65\55\142\157\x72\144\145\162\154\x65\x73\x73"], "\164\x64\x5f\141\x74\164\x72\163" => ["\x63\x6c\141\x73\163" => "\160\x78\x2d\x30\x20\160\171\x2d\x32"], "\154\x61\163\164\x5f\x74\144\x5f\x61\x74\x74\162\163" => ["\143\154\141\x73\x73" => "\x70\x78\x2d\x30\40\x70\171\x2d\x32\x20\146\x6f\156\164\55\167\145\151\x67\150\x74\x2d\x62\157\x6c\144\40\x74\145\x78\x74\55\x72\x69\147\x68\x74"]]); kusuakkwcuqkcqaw: } sckyiekoceuisqyq: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto sikckcmeiwmyakeu; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); sikckcmeiwmyakeu: $qookweymeqawmcwo = ["\154\x69\163\164\137\x68\x74\155\x6c" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\160\x75\162\x63\150\x61\x73\145\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\x65\x70\x6f\162\164\x2f\x70\x75\x72\143\x68\141\163\145", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\154\151\x73\164\137\150\x74\155\154" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\x75\x73\141\147\x65\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\145\x70\x6f\162\164\x2f\165\163\141\147\x65", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(VirtualBrowserSetting::eoeewcigeywcquis))) { goto qaycycmeqkqcumog; } $ccowyogiqwikkkie[] = VirtualBrowser::eoeewcigeywcquis; qaycycmeqkqcumog: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto yagscaikmmuagqcu; } $ywmkwiwkosakssii = [Constants::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto ikuwigsmisimaqoc; } $ywmkwiwkosakssii[Constants::ausqeuugegoygouq] = 4; ikuwigsmisimaqoc: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto sigukociqouigous; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\x56\x69\145\167\40\x74\150\145\x20\x46\x75\x6c\154\x20\122\145\160\x6f\x72\x74", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x73\x65\x67\155\x65\156\164" => "{$ymqmyyeuycgmigyo}\x5f\x72\145\160\x6f\162\164"], $eeamcawaiqocomwy), ["\143\154\x61\163\163" => "\x70\162\55\142\164\156\40\x62\164\x6e\x2d\160\162\x69\x6d\141\162\x79\40\x62\164\x6e\x2d\141\143\x74\x69\x6f\156"]); sigukociqouigous: yagscaikmmuagqcu: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto aqwoykqaquewcaki; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case VirtualBrowser::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto qwosyqcomiosguoa; } qaqooueskgciuqgc: qwosyqcomiosguoa: if (!$uymsgmyyeikucgae) { goto omyquyiguuaociwq; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\137\165\163\x61\147\x65", 0); omyquyiguuaociwq: iumgcesksuawyuyo: } iyawqekeeawqkymm: aqwoykqaquewcaki: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto myooisakyuggoggc; } $nsmgceoqaqogqmuw = __("\124\150\x65\162\x65\40\151\x73\40\x6e\x6f\164\x20\x64\x61\164\x61\x20\164\x6f\40\x73\150\x6f\x77\x20\x79\157\165\54\40\160\154\x65\141\x73\145\40\162\145\x66\162\x65\163\x68\x20\160\x61\x67\x65\40\157\x72\40\x63\157\156\x74\x61\143\x74\40\165\x73\x2e", PR__MDL__OPTIMIZATION); goto awkqcyusycccekwq; myooisakyuggoggc: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\x70\154\x61\156\137\x69\144")))) { goto qsaoyggkqwcgskwk; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto owismwmeqcmukagu; } $guacamgosccsckmq = [Constants::eqewsqmqmsiocaeg => true, Constants::qescuiwgsyuikume => __("\131\x6f\165\x72\40\123\165\142\163\x63\x72\151\x70\x74\x69\157\x6e", PR__MDL__OPTIMIZATION)]; goto oiywguooqeasueqq; owismwmeqcmukagu: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\x77\x65\x62\x5f\x76\x69\x74\141\154\137\x75\x73\x61\x67\145", "\143\162\x69\x74\151\x63\141\154\137\x63\x73\163\x5f\165\x73\x61\x67\x65"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto cceggewquoaemcwq; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto mesesokuoomcioom; cceggewquoaemcwq: iuwccksomkkouogy: } mesesokuoomcioom: if ($ycqsugugqomewkke) { goto ioiwoukauoeamuca; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\x25\x73\40\x28\x25\x73\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] ?? '', __("\x59\x6f\x75\162\x20\x53\165\x62\163\x63\162\x69\x70\x74\x69\x6f\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::eqewsqmqmsiocaeg] = true; goto oqckuigyqswmqcqg; ioiwoukauoeamuca: $guacamgosccsckmq[Constants::qescuiwgsyuikume] = sprintf("\45\x73\40\50\45\x73\x29", $guacamgosccsckmq[Constants::qescuiwgsyuikume], __("\131\157\x75\x72\x20\x53\165\x62\163\x63\x72\x69\x70\x74\x69\157\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\x25\x73\40\x28\x25\163\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume], __("\x4e\x65\167", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[Constants::eqewsqmqmsiocaeg] = true; oqckuigyqswmqcqg: oiywguooqeasueqq: if (!$guacamgosccsckmq) { goto equwcsciiggsuiam; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); equwcsciiggsuiam: qsaoyggkqwcgskwk: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\163\145\x72\x76\151\143\145\137\143\157\163\x74\163", ["\160\x6c\x61\156\163" => $kekgkgqeyesmkywu, "\x6d\145\x74\x72\x69\143\163" => ["\x63\162\x69\164\x69\x63\x61\x6c\137\x63\x73\x73" => __("\x43\x72\151\x74\x69\143\141\x6c\x20\x43\123\123", PR__MDL__OPTIMIZATION), "\x77\145\x62\x5f\x76\x69\164\x61\x6c" => __("\111\x6d\160\162\x6f\166\x65\x20\x4c\x43\120", PR__MDL__OPTIMIZATION)], "\x63\x6f\x69\156\x5f\x6d\x61\x73\153" => __("\45\163\x20\x63\157\151\x6e\x73", PR__MDL__OPTIMIZATION), "\x73\165\x62\x73\x63\162\x69\160\164\x69\x6f\156\137\160\154\141\156\x73\137\164\151\164\x6c\145" => __("\x53\165\x62\163\143\x72\151\x70\164\x69\157\156\40\x50\x6c\x61\156\163", PR__MDL__OPTIMIZATION)]); awkqcyusycccekwq: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
