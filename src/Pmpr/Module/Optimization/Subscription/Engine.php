<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a5875d8609d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Asset\Setting as AssetSetting; use Pmpr\Module\Optimization\Optimizer\Media\LazyLoad\Setting as LazyLoadSetting; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; class Engine extends Common { public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(self::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto csskguekqcwcmocu; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto yskswskmsgoouyco; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto ysusaysykymegguk; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); ysusaysykymegguk: goto oaciskoioaecgwee; yskswskmsgoouyco: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); oaciskoioaecgwee: emgssiqceagusgyg: } oeosugomyqyekmuq: csskguekqcwcmocu: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto osoqssymqqoqcuky; } $yygmoeguaqyumuui = ["\145\170\x74\162\141\x73", "\x73\x75\142\x73\x63\x72\151\x70\164\x69\157\156\163"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][self::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto uugekiumuwemyuyc; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\x73\x75\x62\163\143\162\151\x70\x74\x69\157\156\x73"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[self::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? self::eoigaocgcaekssuw : self::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto amkcomscieegkygc; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([$yakcyegsoqusmiak::squoamkioomemiyi => $sqeykgyoooqysmca, $yakcyegsoqusmiak::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto qkiqquymecyoouki; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[self::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, self::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto kygcymkakucoeock; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [self::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); kygcymkakucoeock: goto iqukigoyiqgcggue; qkiqquymecyoouki: $yakcyegsoqusmiak->gscuuyuyauokoyuo([$yakcyegsoqusmiak::squoamkioomemiyi => $sqeykgyoooqysmca, $yakcyegsoqusmiak::kumuoysauoagaiiy => $igqsaukqcqscimok[self::kumuoysauoagaiiy], $yakcyegsoqusmiak::uiwqcumqkgikqyue => $igqsaukqcqscimok[self::uiwqcumqkgikqyue], $yakcyegsoqusmiak::acymsykymkiewqsy => $igqsaukqcqscimok[self::acymsykymkiewqsy], $yakcyegsoqusmiak::yocqkmeouaamomke => $qkasemkceamoceiy]); iqukigoyiqgcggue: amkcomscieegkygc: yuoyeeuqqaockyqw: } ugcyukgoaiiysymc: uugekiumuwemyuyc: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][self::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto qoameasiqwaqgmca; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[self::asmooogmgyecqqka], $ymiyawysimukkoso[self::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[self::asmooogmgyecqqka] < $ymiyawysimukkoso[self::yusuiaeueqwieqqq]; qoameasiqwaqgmca: wkwkeicwosmkcygc: } mmusoowesqcmuqew: osoqssymqqoqcuky: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\123\171\156\143\x20\x44\141\164\141", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::smkwuwawwaqyimcq, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\x54\x68\145\x20\144\x61\164\141\40\x61\x73\x73\x6f\143\x69\x61\164\x65\144\40\167\x69\164\150\x20\x79\157\165\x72\40\141\x63\x63\x6f\165\156\x74\x20\151\163\x20\x75\160\144\x61\x74\x65\x64\40\x77\151\164\x68\x20\164\150\145\x20\x73\145\x72\166\x65\x72\40\141\x74\40\x72\145\147\x75\x6c\141\x72\x20\x69\156\164\145\162\166\x61\154\163\x2e\x20\x54\x6f\x20\145\x6e\163\x75\x72\145\40\x74\150\145\x20\154\141\164\145\x73\x74\x20\x75\x70\144\141\x74\145\54\x20\171\157\x75\40\143\141\x6e\x20\165\x70\x64\x61\x74\x65\40\x79\x6f\165\x72\x20\x61\143\143\157\165\156\164\x20\144\141\164\x61\40\167\x69\x74\150\x20\x74\150\145\40\x73\x65\162\166\x65\162\x20\x6e\157\x77\56", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\x63\x6c\141\163\163" => "\x6f\x70\x74\x2d\163\171\x6e\143\55\144\x61\164\x61\40\x70\x72\55\142\164\x6e\x20\x62\164\156\x2d\160\162\151\155\x61\x72\x79", self::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\143\x6c\141\163\163" => "\167\55\61\x30\x30\x20\160\x72\x2d\x62\x74\x6e\40\142\164\156\x2d\141\143\164\x69\157\156\40\142\164\x6e\x2d\157\165\164\154\151\x6e\x65\55\x70\x72\151\x6d\141\162\x79"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto giiucsyqgcooaima; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto qcywwqceiqogcoyo; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::eoigaocgcaekssuw); qcywwqceiqogcoyo: giiucsyqgcooaima: $eymaoksggoskuikg = __("\x55\x6e\153\156\x6f\x77\156", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\x25\163\x20\x63\x6f\151\156\163", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto awikkaqmmuqkukma; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); awikkaqmmuqkukma: if ($ymyueyaumiqiuaqa <= 0) { goto uckeuuaqimqamuyc; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\x25\x73\40\x44\141\x79", "\45\163\40\104\x61\171\x73", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->msywmyaoqmaegsuy($ymyueyaumiqiuaqa)), ["\143\154\141\163\x73" => "\x74\x65\x78\164\55\163\165\x63\x63\x65\x73\x73"]); goto mieeugiewckceagc; uckeuuaqimqamuyc: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x45\x78\160\x69\x72\145\144", PR__MDL__OPTIMIZATION), ["\x63\x6c\141\x73\x73" => "\164\145\x78\x74\x2d\x64\x61\x6e\147\x65\x72"]); mieeugiewckceagc: $cesmwwwcymckqaku = $qwgquweoiskugckg[self::eoigaocgcaekssuw][self::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[self::eoigaocgcaekssuw][self::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[self::mayesweykoooyugy][self::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[self::mayesweykoooyugy][self::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([self::squoamkioomemiyi => self::mayesweykoooyugy, [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw, self::meisqwykgaymauka => self::kumuoysauoagaiiy, self::ciyoccqkiamemcmm => self::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto uqkqmseoeemyaqck; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\x4e\x6f\x20\120\x75\162\x63\150\x61\163\145", PR__MDL__OPTIMIZATION); goto cceyoumkiicaguio; uqkqmseoeemyaqck: $ocsquaqymuwoyisw = $this->msywmyaoqmaegsuy($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, self::uiwqcumqkgikqyue)[self::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->eciukqcoqmyacwow($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, self::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); cceyoumkiicaguio: $gkeiousaoygaimia = [self::eoigaocgcaekssuw => [self::qescuiwgsyuikume => __("\x53\x75\142\x73\x63\162\151\x70\164\x69\157\156\x20\120\154\141\156", PR__MDL__OPTIMIZATION), self::qwumqqyuasyskkkc => ["\160\154\x61\x6e" => [self::qescuiwgsyuikume => __("\x53\165\x62\x73\143\162\151\x70\x74\151\157\156\x20\120\x6c\x61\156", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::qescuiwgsyuikume, $eymaoksggoskuikg)], "\x70\145\x72\x69\157\x64" => [self::qescuiwgsyuikume => __("\120\154\x61\156\40\120\x65\162\x69\157\x64", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\162\145\x6d\x61\151\x6e\x5f\x64\x61\x79" => [self::qescuiwgsyuikume => __("\x52\145\155\141\151\x6e\x69\156\147\40\x54\x69\x6d\145", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\x63\x6f\x69\x6e\163" => [self::qescuiwgsyuikume => __("\103\157\x75\156\164\40\x6f\146\40\111\156\x69\164\x69\x61\x6c\x20\103\157\151\156\x73", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy($cesmwwwcymckqaku))], "\x75\x73\145\144\137\143\x6f\x69\156\x73" => [self::qescuiwgsyuikume => __("\x55\x73\x65\x64\x20\103\157\151\x6e\163", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\162\x65\x6d\141\151\x6e\x5f\x63\157\151\x6e\x73" => [self::qescuiwgsyuikume => __("\122\x65\155\141\151\x6e\40\x43\x6f\151\156\163", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [self::qescuiwgsyuikume => __("\105\170\x74\x72\141\x20\x43\157\x69\156", PR__MDL__OPTIMIZATION), self::qwumqqyuasyskkkc => ["\154\x61\164\x65\x73\x74\x5f\160\165\x72\143\150\141\x73\x65\x5f\x63\157\x75\156\x74" => [self::qescuiwgsyuikume => __("\x4c\141\x74\x65\x73\x74\x20\120\165\162\143\150\x61\163\x65\x20\103\157\x75\x6e\x74", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\154\x61\x74\145\x73\164\137\160\165\162\143\150\x61\163\145\x5f\x64\x61\164\x65" => [self::qescuiwgsyuikume => __("\x4c\x61\164\145\x73\164\40\120\x75\x72\x63\x68\141\163\x65\40\x44\x61\x74\x65", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\145\170\160\151\x72\141\x74\x69\x6f\156" => [self::qescuiwgsyuikume => __("\105\170\x70\151\162\145\40\x44\141\164\x65", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x57\x69\164\x68\x6f\165\164\40\x65\x78\160\151\x72\145\40\144\141\x74\x65", PR__MDL__OPTIMIZATION), ["\x63\154\141\163\163" => "\164\x65\x78\164\x2d\x73\x75\x63\x63\145\163\163"])], "\143\x6f\x69\156\163\x5f\143\157\x75\x6e\164" => [self::qescuiwgsyuikume => __("\101\x6c\x6c\x20\103\157\x69\x6e\x73\x20\103\x6f\165\x6e\x74", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy($yeyequgieweqoume))], "\165\163\x65\144\x5f\143\157\151\x6e\x73" => [self::qescuiwgsyuikume => __("\x55\x73\145\144\40\x43\157\151\x6e\163", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\162\x65\155\141\x69\x6e\137\143\x6f\151\x6e\x73" => [self::qescuiwgsyuikume => __("\x52\145\x6d\x61\151\x6e\x20\x43\x6f\x69\x6e\x73", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][self::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[self::qwumqqyuasyskkkc], ["\x74\141\x62\154\x65\137\141\164\x74\162\163" => ["\143\154\141\x73\x73" => "\155\x62\x2d\x30\x20\x74\141\x62\154\x65\40\164\141\142\154\145\x2d\142\x6f\x72\144\x65\x72\154\145\163\x73"], "\164\x64\137\141\164\x74\162\163" => ["\x63\x6c\x61\163\163" => "\x70\x78\x2d\x30\x20\x70\x79\55\x32"], "\154\x61\163\164\137\x74\x64\x5f\x61\164\164\x72\x73" => ["\143\x6c\x61\163\163" => "\x70\170\55\60\40\x70\x79\x2d\62\40\146\157\x6e\164\x2d\x77\x65\151\147\150\164\x2d\142\157\x6c\144\x20\164\x65\170\x74\x2d\x72\151\x67\150\x74"]]); yuiouamaogkkqmck: } yayykakkyeoieicm: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto mmwqwowqcaseyyki; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); mmwqwowqcaseyyki: $qookweymeqawmcwo = ["\x6c\x69\163\164\137\150\x74\x6d\154" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\x70\165\x72\143\150\x61\x73\x65\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\x65\160\157\162\164\x2f\x70\x75\162\143\x68\x61\163\x65", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\x6c\x69\163\x74\x5f\150\x74\155\x6c" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\165\x73\x61\x67\x65\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\x65\160\x6f\x72\x74\57\165\163\141\x67\x65", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(self::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(AssetSetting::eoeewcigeywcquis))) { goto wsckacayikksiswo; } $ccowyogiqwikkkie[] = self::eoeewcigeywcquis; wsckacayikksiswo: if (!(LazyLoadSetting::ekoiwoksaoemsgky === $this->weysguygiseoukqw(LazyLoadSetting::kmkkamyqcgmygkoi))) { goto qiawociayswicugw; } $ccowyogiqwikkkie[] = self::esoamusawucumuew; qiawociayswicugw: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(self::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto kkacggiosquqagew; } $ywmkwiwkosakssii = [self::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto ngagwiymmmycgscu; } $ywmkwiwkosakssii[self::ausqeuugegoygouq] = 4; ngagwiymmmycgscu: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto qimomesqamyyicmo; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\x56\151\x65\x77\x20\164\150\145\40\106\165\154\x6c\40\x52\x65\x70\x6f\x72\x74", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\163\145\x67\x6d\145\x6e\x74" => "{$ymqmyyeuycgmigyo}\x5f\162\145\x70\x6f\x72\164"], $eeamcawaiqocomwy), ["\143\x6c\141\x73\x73" => "\160\162\x2d\142\x74\156\x20\x62\164\x6e\55\160\x72\x69\x6d\x61\x72\171\x20\142\x74\x6e\x2d\x61\x63\x74\x69\x6f\156"]); qimomesqamyyicmo: kkacggiosquqagew: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto qkwckeqowgaokkuy; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case self::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto cooeoemccqiyewks; case self::esoamusawucumuew: $uymsgmyyeikucgae = "\x77\145\x62\x5f\x76\x69\x74\x61\154"; goto cooeoemccqiyewks; } qcceyyqiuiqcyqqm: cooeoemccqiyewks: if (!$uymsgmyyeikucgae) { goto ssesmiwwmsayksum; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\x5f\x75\x73\141\147\x65", 0); ssesmiwwmsayksum: aescssauecumgwso: } augqweqsqioesmim: qkwckeqowgaokkuy: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto sgkwaiuukkaqyqki; } $nsmgceoqaqogqmuw = __("\x54\150\x65\162\145\40\151\163\x20\x6e\157\x74\x20\x64\x61\x74\141\40\x74\x6f\x20\163\150\x6f\167\x20\x79\157\165\x2c\x20\x70\154\x65\x61\163\145\x20\162\x65\146\x72\145\x73\150\x20\x70\141\147\x65\40\157\x72\40\143\157\156\164\x61\x63\164\x20\x75\x73\56", PR__MDL__OPTIMIZATION); goto emagssesowicacoa; sgkwaiuukkaqyqki: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\160\x6c\x61\156\137\x69\x64")))) { goto gwksywaoeowkesei; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto bagkewioewygysea; } $guacamgosccsckmq = [self::eqewsqmqmsiocaeg => true, self::qescuiwgsyuikume => __("\x59\157\x75\x72\x20\123\x75\x62\x73\x63\x72\x69\x70\164\x69\x6f\x6e", PR__MDL__OPTIMIZATION)]; goto mgieeyuyuoeccaog; bagkewioewygysea: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\167\x65\x62\x5f\x76\x69\x74\x61\154\137\x75\163\141\x67\145", "\143\x72\151\x74\x69\x63\141\x6c\x5f\143\163\x73\x5f\165\163\141\x67\x65"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto sykuuisikqcwuaqu; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto kqkymieyyqaoeymw; sykuuisikqcwuaqu: gqyyccceswkqcmaa: } kqkymieyyqaoeymw: if ($ycqsugugqomewkke) { goto mquyemuqcqeassqc; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume] = sprintf("\45\163\x20\x28\x25\x73\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume] ?? '', __("\x59\x6f\165\x72\40\123\165\x62\x73\143\x72\x69\x70\164\x69\157\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::eqewsqmqmsiocaeg] = true; goto weiaigyyigkusucy; mquyemuqcqeassqc: $guacamgosccsckmq[self::qescuiwgsyuikume] = sprintf("\x25\x73\x20\x28\45\x73\51", $guacamgosccsckmq[self::qescuiwgsyuikume], __("\131\157\165\162\x20\x53\x75\142\x73\143\162\x69\160\164\x69\x6f\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume] = sprintf("\45\x73\x20\50\x25\x73\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume], __("\116\145\167", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[self::eqewsqmqmsiocaeg] = true; weiaigyyigkusucy: mgieeyuyuoeccaog: if (!$guacamgosccsckmq) { goto amgsicqmemeuuaem; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); amgsicqmemeuuaem: gwksywaoeowkesei: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x73\x65\x72\166\151\143\145\137\x63\157\x73\164\x73", ["\160\x6c\x61\x6e\x73" => $kekgkgqeyesmkywu, "\155\x65\x74\x72\151\143\163" => ["\143\162\x69\x74\x69\143\x61\x6c\x5f\143\x73\163" => __("\x43\162\151\164\x69\143\x61\154\x20\x43\123\123", PR__MDL__OPTIMIZATION), "\167\x65\142\x5f\166\x69\164\x61\x6c" => __("\x49\x6d\160\162\157\166\x65\40\x4c\103\x50", PR__MDL__OPTIMIZATION)], "\x63\x6f\x69\x6e\x5f\155\x61\163\x6b" => __("\45\x73\40\x63\157\x69\x6e\x73", PR__MDL__OPTIMIZATION), "\x73\x75\x62\163\x63\x72\151\x70\164\x69\157\156\x5f\160\x6c\x61\x6e\163\137\x74\151\x74\x6c\145" => __("\123\165\142\163\x63\x72\x69\x70\164\x69\157\x6e\40\x50\154\141\x6e\x73", PR__MDL__OPTIMIZATION)]); emagssesowicacoa: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([self::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
