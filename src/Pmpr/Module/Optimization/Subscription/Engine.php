<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6686855490492             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Asset\Setting as AssetSetting; use Pmpr\Module\Optimization\Optimizer\Media\LazyLoad\Setting as LazyLoadSetting; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; class Engine extends Common { public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(self::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto oegaywiwywuyksaq; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto qmiqicgscsuoyeqo; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto kkogaccoqmsmmkmo; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); kkogaccoqmsmmkmo: goto ysaumykuimqigeqa; qmiqicgscsuoyeqo: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); ysaumykuimqigeqa: yuyiqaawwgaywgqo: } yqkyoaiwcyqeaqwu: oegaywiwywuyksaq: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto wgmeyycmqioioaqc; } $yygmoeguaqyumuui = ["\x65\x78\164\162\x61\163", "\163\x75\142\x73\143\x72\151\x70\164\x69\x6f\156\x73"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][self::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto weuueokkumksgaeo; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\163\x75\x62\x73\143\162\151\x70\164\151\157\156\x73"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[self::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? self::eoigaocgcaekssuw : self::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto csoeisssoumqqeoa; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([$yakcyegsoqusmiak::squoamkioomemiyi => $sqeykgyoooqysmca, $yakcyegsoqusmiak::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto qwueqigcisoogaec; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[self::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, self::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto imsgusweocmiyygi; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [self::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); imsgusweocmiyygi: goto kmeekqukcecuscye; qwueqigcisoogaec: $yakcyegsoqusmiak->gscuuyuyauokoyuo([$yakcyegsoqusmiak::squoamkioomemiyi => $sqeykgyoooqysmca, $yakcyegsoqusmiak::kumuoysauoagaiiy => $igqsaukqcqscimok[self::kumuoysauoagaiiy], $yakcyegsoqusmiak::uiwqcumqkgikqyue => $igqsaukqcqscimok[self::uiwqcumqkgikqyue], $yakcyegsoqusmiak::acymsykymkiewqsy => $igqsaukqcqscimok[self::acymsykymkiewqsy], $yakcyegsoqusmiak::yocqkmeouaamomke => $qkasemkceamoceiy]); kmeekqukcecuscye: csoeisssoumqqeoa: icawmkaswkmwicsa: } wscikmsmwmocsqeu: weuueokkumksgaeo: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][self::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto igckskemqkqueukg; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[self::asmooogmgyecqqka], $ymiyawysimukkoso[self::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[self::asmooogmgyecqqka] < $ymiyawysimukkoso[self::yusuiaeueqwieqqq]; igckskemqkqueukg: uiowwckamqucksim: } eyskqaccgeomqmyw: wgmeyycmqioioaqc: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\123\x79\x6e\x63\40\x44\x61\164\141", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::smkwuwawwaqyimcq, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\x54\150\145\x20\144\141\x74\x61\40\141\x73\163\157\143\x69\141\x74\145\144\40\167\151\164\150\x20\171\157\165\x72\x20\x61\143\x63\x6f\165\156\164\40\x69\163\40\x75\x70\144\141\x74\x65\x64\x20\167\x69\164\150\40\x74\x68\x65\40\x73\145\x72\x76\145\162\x20\x61\x74\40\x72\x65\147\x75\154\141\x72\x20\151\x6e\x74\145\162\x76\x61\x6c\163\x2e\x20\124\x6f\x20\x65\x6e\x73\x75\162\145\40\x74\x68\x65\x20\x6c\x61\x74\145\163\x74\x20\165\160\x64\141\x74\x65\54\x20\x79\x6f\x75\40\143\x61\156\40\165\x70\x64\141\164\x65\x20\171\157\165\x72\40\x61\143\x63\x6f\165\156\x74\40\144\x61\x74\x61\x20\167\151\164\150\40\164\150\x65\40\x73\x65\x72\x76\x65\x72\x20\x6e\157\x77\56", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\x63\154\141\x73\163" => "\157\x70\164\x2d\163\171\x6e\143\55\x64\x61\164\x61\x20\160\162\x2d\142\x74\156\x20\142\x74\x6e\55\x70\162\x69\155\141\x72\x79", self::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\x63\x6c\141\x73\163" => "\x77\x2d\x31\60\60\40\x70\x72\x2d\142\x74\x6e\40\142\x74\156\x2d\141\x63\164\x69\157\156\x20\142\164\156\x2d\x6f\165\164\154\x69\156\x65\x2d\x70\162\151\155\141\x72\x79"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto pssquaaiioygwqoq; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto ykiyuciecskusaae; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::eoigaocgcaekssuw); ykiyuciecskusaae: pssquaaiioygwqoq: $eymaoksggoskuikg = __("\x55\156\x6b\x6e\157\167\156", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\x25\163\40\143\x6f\x69\156\x73", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto ucugeysomcyceyos; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); ucugeysomcyceyos: if ($ymyueyaumiqiuaqa <= 0) { goto momgmqemgcasyuqq; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\45\x73\x20\x44\141\x79", "\x25\x73\x20\104\141\x79\163", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->msywmyaoqmaegsuy($ymyueyaumiqiuaqa)), ["\x63\x6c\x61\x73\x73" => "\164\145\x78\164\x2d\163\165\143\x63\x65\163\163"]); goto qmuikumqukcyaeqa; momgmqemgcasyuqq: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\105\x78\x70\x69\162\145\x64", PR__MDL__OPTIMIZATION), ["\x63\x6c\x61\x73\x73" => "\x74\x65\170\x74\x2d\144\x61\156\147\145\x72"]); qmuikumqukcyaeqa: $cesmwwwcymckqaku = $qwgquweoiskugckg[self::eoigaocgcaekssuw][self::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[self::eoigaocgcaekssuw][self::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[self::mayesweykoooyugy][self::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[self::mayesweykoooyugy][self::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([self::squoamkioomemiyi => self::mayesweykoooyugy, [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw, self::meisqwykgaymauka => self::kumuoysauoagaiiy, self::ciyoccqkiamemcmm => self::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto keyiswqkmqqquosw; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\x4e\x6f\x20\x50\x75\x72\x63\150\x61\163\x65", PR__MDL__OPTIMIZATION); goto imaiuooqwwokwemw; keyiswqkmqqquosw: $ocsquaqymuwoyisw = $this->msywmyaoqmaegsuy($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, self::uiwqcumqkgikqyue)[self::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->eciukqcoqmyacwow($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, self::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); imaiuooqwwokwemw: $gkeiousaoygaimia = [self::eoigaocgcaekssuw => [self::qescuiwgsyuikume => __("\x53\x75\x62\163\x63\162\151\160\x74\x69\157\x6e\40\120\x6c\x61\156", PR__MDL__OPTIMIZATION), self::qwumqqyuasyskkkc => ["\160\154\x61\156" => [self::qescuiwgsyuikume => __("\x53\x75\142\163\x63\162\x69\160\x74\x69\157\156\40\120\x6c\x61\156", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::qescuiwgsyuikume, $eymaoksggoskuikg)], "\160\x65\162\x69\x6f\144" => [self::qescuiwgsyuikume => __("\120\154\141\156\40\120\x65\162\x69\157\x64", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\162\145\155\141\151\x6e\x5f\x64\x61\171" => [self::qescuiwgsyuikume => __("\122\145\155\141\x69\156\x69\156\147\40\x54\x69\x6d\x65", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\x63\x6f\151\156\163" => [self::qescuiwgsyuikume => __("\x43\157\x75\x6e\164\x20\157\x66\40\x49\156\151\164\x69\141\x6c\40\x43\157\151\156\x73", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy($cesmwwwcymckqaku))], "\x75\163\x65\144\x5f\143\x6f\x69\x6e\163" => [self::qescuiwgsyuikume => __("\125\x73\145\x64\x20\x43\x6f\x69\156\x73", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\162\145\x6d\141\x69\156\x5f\143\157\x69\x6e\163" => [self::qescuiwgsyuikume => __("\x52\145\x6d\x61\x69\156\x20\103\x6f\151\x6e\163", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [self::qescuiwgsyuikume => __("\x45\x78\164\x72\141\40\103\157\151\156", PR__MDL__OPTIMIZATION), self::qwumqqyuasyskkkc => ["\154\141\164\x65\x73\x74\137\160\165\162\143\150\x61\x73\x65\x5f\143\x6f\165\x6e\164" => [self::qescuiwgsyuikume => __("\114\141\x74\x65\163\164\40\120\165\162\x63\x68\x61\163\145\x20\103\157\165\156\x74", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\x6c\x61\164\x65\163\x74\137\160\165\162\143\x68\141\x73\x65\x5f\144\x61\164\x65" => [self::qescuiwgsyuikume => __("\x4c\x61\x74\145\163\164\40\x50\x75\x72\x63\150\x61\x73\x65\40\104\141\164\x65", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\x65\x78\x70\151\162\x61\x74\x69\x6f\156" => [self::qescuiwgsyuikume => __("\x45\170\x70\x69\x72\145\x20\104\141\164\145", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\127\x69\x74\x68\x6f\x75\x74\40\x65\x78\x70\151\162\145\40\x64\x61\164\x65", PR__MDL__OPTIMIZATION), ["\143\154\x61\x73\x73" => "\x74\x65\170\164\x2d\163\x75\x63\143\145\163\x73"])], "\143\x6f\151\156\163\x5f\x63\x6f\165\x6e\164" => [self::qescuiwgsyuikume => __("\101\x6c\154\x20\x43\157\151\x6e\x73\x20\x43\157\165\x6e\164", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy($yeyequgieweqoume))], "\x75\x73\145\144\137\x63\x6f\x69\x6e\x73" => [self::qescuiwgsyuikume => __("\x55\x73\145\x64\40\x43\x6f\x69\x6e\163", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\162\x65\x6d\141\x69\x6e\x5f\143\157\151\x6e\x73" => [self::qescuiwgsyuikume => __("\x52\x65\155\x61\151\x6e\40\x43\x6f\151\156\x73", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][self::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[self::qwumqqyuasyskkkc], ["\x74\x61\x62\154\145\x5f\141\164\x74\x72\163" => ["\x63\154\x61\x73\x73" => "\155\x62\55\60\x20\164\141\x62\154\145\40\x74\141\142\154\x65\x2d\142\x6f\162\144\145\162\154\x65\163\163"], "\164\x64\137\141\164\x74\162\x73" => ["\143\154\x61\163\x73" => "\x70\170\x2d\x30\x20\x70\171\55\62"], "\x6c\x61\x73\x74\x5f\164\x64\137\141\164\164\162\163" => ["\x63\x6c\141\163\x73" => "\160\170\55\x30\x20\160\x79\x2d\x32\x20\x66\x6f\x6e\x74\x2d\x77\x65\151\x67\x68\x74\55\142\x6f\x6c\x64\40\164\145\x78\164\x2d\162\x69\147\150\x74"]]); mioaoacqueiyueak: } mioqycmmeucswoms: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto oaseseemoaqcgqeu; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); oaseseemoaqcgqeu: $qookweymeqawmcwo = ["\154\x69\163\x74\x5f\150\164\x6d\x6c" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\160\x75\x72\x63\x68\141\163\145\x73", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\145\160\x6f\x72\x74\57\x70\x75\162\143\x68\141\x73\x65", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\154\x69\x73\x74\x5f\x68\164\155\154" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\x75\163\141\147\145\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\x65\x70\157\162\164\57\165\x73\141\147\145", $qookweymeqawmcwo); } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(self::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto kisuswmyqsocukgk; } $ywmkwiwkosakssii = []; if (!$scsaeueqgyymsyei) { goto kuymgsewmeoimeuq; } $ywmkwiwkosakssii[self::ausqeuugegoygouq] = 4; kuymgsewmeoimeuq: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto gimsiyauegmikyka; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\126\x69\145\x77\x20\x74\150\x65\x20\x46\165\x6c\154\x20\x52\x65\x70\157\162\x74", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\163\145\147\x6d\x65\x6e\x74" => "{$ymqmyyeuycgmigyo}\137\x72\145\160\x6f\x72\x74"], $eeamcawaiqocomwy), ["\x63\x6c\141\163\x73" => "\x70\x72\x2d\x62\x74\x6e\40\x62\x74\156\x2d\x70\162\x69\x6d\x61\x72\171\40\x62\164\156\55\x61\x63\164\151\157\x6e"]); gimsiyauegmikyka: kisuswmyqsocukgk: return $wqgwesyciiqcoocs; } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(self::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(AssetSetting::eoeewcigeywcquis))) { goto wisaekiyyweeemuy; } $ccowyogiqwikkkie[] = self::eoeewcigeywcquis; wisaekiyyweeemuy: if (!(LazyLoadSetting::ekoiwoksaoemsgky === $this->weysguygiseoukqw(LazyLoadSetting::kmkkamyqcgmygkoi))) { goto aosasoogesueygak; } $ccowyogiqwikkkie[] = self::esoamusawucumuew; aosasoogesueygak: return $ccowyogiqwikkkie; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto isaouwiaamimceeg; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case self::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto scccyaiaggeasgqg; case self::esoamusawucumuew: $uymsgmyyeikucgae = "\167\x65\x62\x5f\x76\151\x74\141\x6c"; goto scccyaiaggeasgqg; } asueqykmkoaimguq: scccyaiaggeasgqg: if (!$uymsgmyyeikucgae) { goto iyocimuyeemkaaso; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\137\x75\x73\141\147\x65", 0); iyocimuyeemkaaso: meegaqaesckqmyec: } emqmqkeygumaasam: isaouwiaamimceeg: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto oaciskoioaecgwee; } $nsmgceoqaqogqmuw = __("\124\150\145\162\145\40\x69\163\40\x6e\x6f\164\40\144\x61\x74\141\40\x74\x6f\40\x73\x68\x6f\167\40\171\x6f\x75\54\x20\x70\x6c\145\141\163\x65\40\x72\145\x66\x72\x65\163\150\x20\x70\x61\147\x65\40\x6f\162\40\143\x6f\156\164\141\143\x74\40\165\163\56", PR__MDL__OPTIMIZATION); goto csskguekqcwcmocu; oaciskoioaecgwee: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\160\154\141\156\x5f\x69\144")))) { goto yskswskmsgoouyco; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto oeosugomyqyekmuq; } $guacamgosccsckmq = [self::eqewsqmqmsiocaeg => true, self::qescuiwgsyuikume => __("\x59\157\x75\162\x20\123\165\142\163\143\162\151\160\164\151\157\x6e", PR__MDL__OPTIMIZATION)]; goto emgssiqceagusgyg; oeosugomyqyekmuq: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = [self::mykiyeswieqamagm, "\x77\145\142\137\166\x69\x74\x61\154\x5f\165\163\x61\147\x65", "\x63\162\151\x74\151\x63\x61\154\137\143\163\163\x5f\165\x73\141\x67\x65"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto mwgaaiaswusakkaq; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto kcwyeqmysgqkoqcm; mwgaaiaswusakkaq: wamgcqkaieummksu: } kcwyeqmysgqkoqcm: if ($ycqsugugqomewkke) { goto ugowqoisymsioeye; } $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::eqewsqmqmsiocaeg] = true; goto gooqkmwgsmseuiwq; ugowqoisymsioeye: $guacamgosccsckmq[self::qescuiwgsyuikume] = sprintf("\x25\163\40\x28\45\163\51", $guacamgosccsckmq[self::qescuiwgsyuikume], __("\131\x6f\x75\x72\40\123\x75\142\163\143\162\x69\160\164\x69\x6f\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume] = sprintf("\45\x73\40\50\45\x73\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume], __("\x4e\145\167", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[self::eqewsqmqmsiocaeg] = true; gooqkmwgsmseuiwq: emgssiqceagusgyg: if (!$guacamgosccsckmq) { goto ysusaysykymegguk; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); ysusaysykymegguk: yskswskmsgoouyco: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x73\x65\x72\166\x69\143\x65\137\x63\157\x73\x74\163", ["\160\154\x61\156\163" => $kekgkgqeyesmkywu, "\x6d\x65\164\162\x69\143\163" => ["\143\x72\x69\164\151\143\x61\x6c\137\143\163\163" => __("\105\170\164\162\141\143\x74\x20\x43\162\x69\x74\x69\143\141\x6c\x20\x43\x53\x53", PR__MDL__OPTIMIZATION), "\x77\145\x62\137\x76\151\x74\141\x6c" => __("\x45\x78\164\162\141\143\164\40\x4c\103\x50\x20\x45\x6c\145\155\x65\156\x74", PR__MDL__OPTIMIZATION)], "\x63\x6f\x69\x6e\137\155\x61\163\153" => __("\45\x73\x20\x63\x6f\x69\x6e\x73", PR__MDL__OPTIMIZATION), "\x73\x75\142\163\x63\162\151\160\x74\151\x6f\156\137\x70\154\x61\156\163\x5f\164\x69\164\x6c\x65" => __("\123\x75\x62\x73\143\x72\151\x70\164\x69\157\x6e\x20\x50\x6c\141\156\x73", PR__MDL__OPTIMIZATION)]); csskguekqcwcmocu: return $nsmgceoqaqogqmuw; } }
