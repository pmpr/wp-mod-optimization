<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a69ee00a3ca             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Asset\Setting as AssetSetting; use Pmpr\Module\Optimization\Optimizer\Media\LazyLoad\Setting as LazyLoadSetting; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; class Engine extends Common { public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(self::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto uqkqmseoeemyaqck; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto uckeuuaqimqamuyc; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto awikkaqmmuqkukma; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); awikkaqmmuqkukma: goto mieeugiewckceagc; uckeuuaqimqamuyc: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); mieeugiewckceagc: giiucsyqgcooaima: } qcywwqceiqogcoyo: uqkqmseoeemyaqck: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto aescssauecumgwso; } $yygmoeguaqyumuui = ["\x65\x78\x74\x72\141\x73", "\x73\165\142\163\143\162\151\x70\164\151\x6f\156\x73"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][self::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto kkacggiosquqagew; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\x73\165\142\x73\x63\x72\151\x70\164\x69\157\x6e\163"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[self::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? self::eoigaocgcaekssuw : self::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto qimomesqamyyicmo; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([$yakcyegsoqusmiak::squoamkioomemiyi => $sqeykgyoooqysmca, $yakcyegsoqusmiak::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto qiawociayswicugw; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[self::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, self::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto wsckacayikksiswo; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [self::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); wsckacayikksiswo: goto ngagwiymmmycgscu; qiawociayswicugw: $yakcyegsoqusmiak->gscuuyuyauokoyuo([$yakcyegsoqusmiak::squoamkioomemiyi => $sqeykgyoooqysmca, $yakcyegsoqusmiak::kumuoysauoagaiiy => $igqsaukqcqscimok[self::kumuoysauoagaiiy], $yakcyegsoqusmiak::uiwqcumqkgikqyue => $igqsaukqcqscimok[self::uiwqcumqkgikqyue], $yakcyegsoqusmiak::acymsykymkiewqsy => $igqsaukqcqscimok[self::acymsykymkiewqsy], $yakcyegsoqusmiak::yocqkmeouaamomke => $qkasemkceamoceiy]); ngagwiymmmycgscu: qimomesqamyyicmo: mmwqwowqcaseyyki: } yuiouamaogkkqmck: kkacggiosquqagew: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][self::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto augqweqsqioesmim; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[self::asmooogmgyecqqka], $ymiyawysimukkoso[self::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[self::asmooogmgyecqqka] < $ymiyawysimukkoso[self::yusuiaeueqwieqqq]; augqweqsqioesmim: yayykakkyeoieicm: } cceyoumkiicaguio: aescssauecumgwso: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\x53\x79\156\143\x20\104\141\164\x61", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::smkwuwawwaqyimcq, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\124\x68\145\40\144\141\x74\x61\40\141\163\163\x6f\x63\151\x61\164\x65\144\x20\167\151\164\x68\40\x79\x6f\x75\162\40\141\143\x63\157\x75\x6e\164\x20\x69\163\40\x75\160\144\141\x74\x65\x64\x20\167\151\164\x68\x20\x74\150\145\x20\163\x65\162\166\145\162\x20\141\164\x20\162\x65\147\165\154\x61\x72\x20\x69\156\164\x65\162\166\141\x6c\163\56\x20\x54\x6f\x20\145\156\x73\165\x72\x65\40\x74\x68\x65\40\154\x61\x74\145\163\164\40\x75\x70\144\141\164\x65\x2c\40\171\157\x75\40\x63\x61\x6e\40\x75\x70\144\x61\164\x65\40\x79\x6f\x75\162\40\141\143\143\157\x75\156\x74\40\144\x61\x74\141\x20\x77\151\164\150\x20\164\150\145\40\163\145\x72\166\x65\162\40\156\157\167\x2e", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\154\141\x73\163" => "\157\160\x74\55\x73\171\156\143\55\144\x61\x74\x61\x20\x70\x72\55\x62\164\156\40\142\164\x6e\x2d\x70\x72\151\155\141\162\171", self::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\143\154\141\163\163" => "\x77\x2d\61\60\60\x20\160\x72\x2d\x62\164\x6e\x20\x62\x74\x6e\55\141\143\x74\151\x6f\x6e\x20\x62\164\x6e\55\x6f\x75\x74\x6c\x69\156\145\x2d\x70\162\x69\155\x61\x72\x79"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto qcceyyqiuiqcyqqm; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto cooeoemccqiyewks; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::eoigaocgcaekssuw); cooeoemccqiyewks: qcceyyqiuiqcyqqm: $eymaoksggoskuikg = __("\125\156\153\x6e\x6f\167\x6e", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\x25\163\40\x63\x6f\x69\156\163", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto ssesmiwwmsayksum; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); ssesmiwwmsayksum: if ($ymyueyaumiqiuaqa <= 0) { goto qkwckeqowgaokkuy; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\x25\x73\x20\x44\141\171", "\45\163\40\x44\x61\x79\x73", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->msywmyaoqmaegsuy($ymyueyaumiqiuaqa)), ["\x63\154\141\163\x73" => "\164\145\x78\164\x2d\x73\x75\143\x63\145\x73\163"]); goto kqkymieyyqaoeymw; qkwckeqowgaokkuy: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x45\170\x70\151\162\x65\144", PR__MDL__OPTIMIZATION), ["\x63\x6c\x61\163\x73" => "\x74\x65\x78\164\x2d\x64\141\156\147\x65\162"]); kqkymieyyqaoeymw: $cesmwwwcymckqaku = $qwgquweoiskugckg[self::eoigaocgcaekssuw][self::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[self::eoigaocgcaekssuw][self::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[self::mayesweykoooyugy][self::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[self::mayesweykoooyugy][self::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([self::squoamkioomemiyi => self::mayesweykoooyugy, [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw, self::meisqwykgaymauka => self::kumuoysauoagaiiy, self::ciyoccqkiamemcmm => self::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto gqyyccceswkqcmaa; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\116\x6f\40\x50\x75\x72\143\150\141\x73\x65", PR__MDL__OPTIMIZATION); goto sykuuisikqcwuaqu; gqyyccceswkqcmaa: $ocsquaqymuwoyisw = $this->msywmyaoqmaegsuy($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, self::uiwqcumqkgikqyue)[self::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->eciukqcoqmyacwow($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, self::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); sykuuisikqcwuaqu: $gkeiousaoygaimia = [self::eoigaocgcaekssuw => [self::qescuiwgsyuikume => __("\123\x75\142\163\143\162\151\160\x74\151\x6f\156\40\x50\154\141\156", PR__MDL__OPTIMIZATION), self::qwumqqyuasyskkkc => ["\x70\154\x61\156" => [self::qescuiwgsyuikume => __("\123\165\142\163\x63\162\x69\160\164\x69\x6f\x6e\40\x50\x6c\141\156", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::qescuiwgsyuikume, $eymaoksggoskuikg)], "\160\x65\162\151\157\144" => [self::qescuiwgsyuikume => __("\120\154\x61\156\x20\120\x65\x72\151\x6f\144", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\x72\145\x6d\141\x69\156\x5f\x64\x61\x79" => [self::qescuiwgsyuikume => __("\122\145\x6d\141\x69\x6e\x69\x6e\x67\x20\124\x69\155\x65", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\143\157\x69\x6e\163" => [self::qescuiwgsyuikume => __("\103\x6f\165\x6e\x74\40\157\x66\40\111\156\151\x74\151\141\x6c\x20\x43\157\x69\156\163", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy($cesmwwwcymckqaku))], "\x75\x73\145\144\x5f\143\x6f\x69\156\x73" => [self::qescuiwgsyuikume => __("\125\163\x65\144\x20\103\157\x69\x6e\163", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\162\145\155\141\x69\156\x5f\143\157\151\x6e\163" => [self::qescuiwgsyuikume => __("\x52\145\x6d\x61\x69\156\x20\103\157\x69\156\x73", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [self::qescuiwgsyuikume => __("\105\x78\164\x72\x61\40\x43\157\151\156", PR__MDL__OPTIMIZATION), self::qwumqqyuasyskkkc => ["\154\141\164\x65\163\164\137\160\165\162\x63\x68\141\x73\x65\x5f\143\x6f\x75\156\164" => [self::qescuiwgsyuikume => __("\114\141\164\145\x73\x74\x20\x50\165\x72\143\150\x61\x73\x65\40\103\x6f\165\x6e\x74", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\x6c\141\x74\x65\163\x74\x5f\x70\x75\162\143\x68\141\163\145\x5f\144\x61\164\x65" => [self::qescuiwgsyuikume => __("\114\141\x74\145\x73\x74\40\120\x75\x72\x63\x68\x61\163\x65\x20\104\x61\164\x65", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\145\170\160\151\162\x61\164\151\x6f\156" => [self::qescuiwgsyuikume => __("\105\170\x70\x69\x72\145\x20\x44\x61\164\x65", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x57\151\164\x68\157\165\164\x20\x65\170\160\x69\162\x65\40\144\141\x74\145", PR__MDL__OPTIMIZATION), ["\143\x6c\x61\x73\x73" => "\164\x65\170\164\55\163\x75\x63\x63\x65\x73\x73"])], "\x63\x6f\x69\x6e\x73\137\x63\157\x75\156\x74" => [self::qescuiwgsyuikume => __("\x41\154\x6c\x20\x43\x6f\x69\x6e\x73\40\103\x6f\165\x6e\164", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy($yeyequgieweqoume))], "\x75\163\145\144\x5f\143\x6f\151\x6e\x73" => [self::qescuiwgsyuikume => __("\125\163\x65\x64\x20\103\x6f\x69\x6e\x73", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\x72\x65\155\141\151\x6e\x5f\x63\157\151\156\x73" => [self::qescuiwgsyuikume => __("\122\145\155\141\151\x6e\x20\x43\x6f\x69\x6e\x73", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][self::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[self::qwumqqyuasyskkkc], ["\x74\141\x62\x6c\145\137\141\x74\x74\x72\163" => ["\x63\x6c\141\x73\x73" => "\x6d\142\55\60\40\164\x61\142\x6c\145\x20\164\141\142\x6c\145\x2d\x62\x6f\x72\144\145\162\x6c\x65\x73\163"], "\x74\x64\137\x61\x74\x74\162\x73" => ["\x63\154\x61\163\x73" => "\x70\x78\x2d\60\x20\160\171\x2d\62"], "\x6c\x61\x73\x74\137\164\x64\x5f\x61\164\164\162\163" => ["\x63\154\141\163\x73" => "\x70\170\x2d\x30\x20\160\171\x2d\62\40\146\157\x6e\164\x2d\167\x65\x69\x67\150\x74\x2d\x62\157\x6c\144\x20\164\x65\x78\x74\55\162\x69\x67\150\164"]]); weiaigyyigkusucy: } mquyemuqcqeassqc: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto bagkewioewygysea; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); bagkewioewygysea: $qookweymeqawmcwo = ["\x6c\x69\163\164\x5f\x68\x74\x6d\x6c" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\x70\x75\x72\x63\x68\x61\163\x65\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\145\x70\157\162\164\x2f\x70\165\162\143\150\141\x73\145", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\x6c\151\163\x74\x5f\150\164\155\154" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\x75\x73\x61\x67\145\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\145\x70\x6f\162\164\x2f\x75\163\x61\147\145", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(self::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(AssetSetting::eoeewcigeywcquis))) { goto mgieeyuyuoeccaog; } $ccowyogiqwikkkie[] = self::eoeewcigeywcquis; mgieeyuyuoeccaog: if (!(LazyLoadSetting::ekoiwoksaoemsgky === $this->weysguygiseoukqw(LazyLoadSetting::kmkkamyqcgmygkoi))) { goto amgsicqmemeuuaem; } $ccowyogiqwikkkie[] = self::wgeawuowgusmmece; amgsicqmemeuuaem: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(self::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto emagssesowicacoa; } $ywmkwiwkosakssii = [self::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto gwksywaoeowkesei; } $ywmkwiwkosakssii[self::ausqeuugegoygouq] = 4; gwksywaoeowkesei: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto sgkwaiuukkaqyqki; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\x56\151\x65\167\40\x74\150\145\x20\x46\x75\x6c\154\40\x52\x65\x70\x6f\162\164", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x73\145\147\x6d\145\x6e\164" => "{$ymqmyyeuycgmigyo}\x5f\x72\145\160\157\x72\x74"], $eeamcawaiqocomwy), ["\x63\154\141\x73\163" => "\160\x72\55\142\x74\156\40\142\x74\x6e\55\x70\162\151\155\x61\162\171\40\142\x74\x6e\55\x61\143\x74\151\x6f\156"]); sgkwaiuukkaqyqki: emagssesowicacoa: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto uqiekawkwcegsumy; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case self::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto uugwoygiyecgymgw; case self::wgeawuowgusmmece: $uymsgmyyeikucgae = "\167\x65\142\x5f\x76\x69\164\141\154"; goto uugwoygiyecgymgw; } acmgueaoaaweiqqu: uugwoygiyecgymgw: if (!$uymsgmyyeikucgae) { goto awaaowoqskgokwiy; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\137\x75\163\141\147\145", 0); awaaowoqskgokwiy: gusgywuaimwooawc: } cauqmacqkssciwyq: uqiekawkwcegsumy: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto iikgiaocummweiga; } $nsmgceoqaqogqmuw = __("\x54\150\x65\162\x65\x20\151\163\x20\x6e\157\x74\40\144\141\x74\141\40\x74\x6f\x20\x73\150\157\167\40\x79\x6f\x75\x2c\x20\x70\x6c\x65\141\163\x65\40\x72\x65\x66\x72\x65\163\150\x20\x70\x61\147\x65\40\x6f\x72\40\143\157\x6e\x74\141\x63\164\40\x75\x73\56", PR__MDL__OPTIMIZATION); goto gsusqquicmukegcs; iikgiaocummweiga: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\x70\154\141\156\137\x69\x64")))) { goto ueqsiwuwumoqgsck; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto cksoeiwawiygyiyg; } $guacamgosccsckmq = [self::eqewsqmqmsiocaeg => true, self::qescuiwgsyuikume => __("\x59\x6f\x75\x72\x20\x53\x75\142\163\x63\162\151\x70\x74\151\157\x6e", PR__MDL__OPTIMIZATION)]; goto cyqokqcacysioeyc; cksoeiwawiygyiyg: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\167\145\142\137\166\151\164\x61\x6c\x5f\165\x73\141\147\x65", "\x63\x72\x69\164\x69\x63\141\154\137\x63\163\163\137\x75\163\x61\x67\145"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto gkoyqgogsukuowqi; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto kgikoagqwkuocesg; gkoyqgogsukuowqi: skaayekywasksoug: } kgikoagqwkuocesg: if ($ycqsugugqomewkke) { goto sgikkoswwyesqomo; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume] = sprintf("\45\x73\40\x28\45\163\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume] ?? '', __("\131\157\165\162\x20\x53\165\142\x73\x63\x72\151\x70\164\151\157\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::eqewsqmqmsiocaeg] = true; goto aayysiegiyweiyuu; sgikkoswwyesqomo: $guacamgosccsckmq[self::qescuiwgsyuikume] = sprintf("\x25\x73\x20\x28\45\163\x29", $guacamgosccsckmq[self::qescuiwgsyuikume], __("\x59\157\165\162\x20\123\165\142\x73\x63\162\x69\160\164\151\157\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume] = sprintf("\45\x73\x20\x28\45\x73\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume], __("\116\x65\167", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[self::eqewsqmqmsiocaeg] = true; aayysiegiyweiyuu: cyqokqcacysioeyc: if (!$guacamgosccsckmq) { goto akwwuuiykscgicuw; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); akwwuuiykscgicuw: ueqsiwuwumoqgsck: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\163\145\162\x76\151\143\x65\x5f\143\157\x73\x74\163", ["\x70\154\141\x6e\x73" => $kekgkgqeyesmkywu, "\x6d\x65\164\x72\151\143\x73" => ["\x63\162\x69\x74\151\x63\141\x6c\137\x63\x73\163" => __("\103\x72\151\164\151\143\x61\x6c\x20\103\x53\x53", PR__MDL__OPTIMIZATION), "\167\145\142\x5f\x76\x69\x74\x61\154" => __("\111\x6d\160\x72\x6f\x76\x65\40\x4c\103\120", PR__MDL__OPTIMIZATION)], "\143\157\151\156\137\155\x61\x73\x6b" => __("\45\x73\40\x63\157\151\156\163", PR__MDL__OPTIMIZATION), "\x73\165\142\x73\x63\162\x69\x70\x74\x69\157\x6e\137\x70\154\141\156\163\x5f\x74\x69\164\154\145" => __("\x53\x75\x62\x73\x63\x72\x69\160\x74\151\157\x6e\40\x50\x6c\x61\x6e\163", PR__MDL__OPTIMIZATION)]); gsusqquicmukegcs: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([self::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
