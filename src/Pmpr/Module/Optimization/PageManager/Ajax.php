<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66696e7e43c2d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Common { use PageManagerEngineTrait; const swkaqiikoaickuui = "\x6f\x70\164\151\155\151\172\x65"; const eueyiwccigugisqe = "\x63\x68\145\x63\x6b\x5f\154\151\156\x6b"; const wwgqqgayyagycysu = "\x70\x75\162\147\145\x5f\143\x61\x63\x68\x65"; const aeksqkkekigwssku = self::kgswyesggeyekgmg . "\x73\145\164\165\160\137\160\x61\x74\164\x65\x72\x6e\137\x61\143\x74\x69\x6f\156"; const quuasuseuccsemsw = self::kgswyesggeyekgmg . "\x61\x63\164\151\166\x65\137\x70\x61\x74\x74\145\162\x6e\x5f\x61\x63\164\x69\x6f\x6e"; const qskskgmuqiggaqeg = self::kgswyesggeyekgmg . "\143\150\145\x63\153\137\x70\141\x74\164\x65\162\x6e\x5f\x72\x75\x6e\x5f\x61\143\x74\x69\x6f\156"; const kaqawyqaekuookgi = self::kgswyesggeyekgmg . "\160\x61\x67\x65\x73\x5f\x63\x61\x63\x68\145\137\x73\x74\x61\164\x75\163"; const kusgmosaoigiukgi = self::kgswyesggeyekgmg . "\x72\145\x6f\160\164\151\155\x69\172\145\137\160\141\x74\164\x65\x72\156\x5f\x61\143\x74\x69\157\156"; const wegmeawoaymsqkyi = self::kgswyesggeyekgmg . "\144\145\141\143\164\151\166\141\x74\x65\x5f\160\x61\x74\164\x65\162\x6e\x5f\141\x63\164\x69\x6f\x6e"; const maqcykaweqimuomu = self::kgswyesggeyekgmg . "\143\150\x65\143\x6b\137\x63\141\x6e\x64\x69\144\x61\164\x65\x5f\x75\162\154\x5f\141\143\164\x69\157\x6e"; const ggmmioeoauiyccec = self::kgswyesggeyekgmg . "\x70\141\x67\145\x73\x5f\143\x61\143\150\145\x5f\160\162\x6f\147\162\145\163\x73"; const esiucesqiemeickk = self::kgswyesggeyekgmg . "\x70\165\x72\x67\x65\137\x70\141\164\x74\145\162\156\x5f\x70\141\147\145\163\137\x63\x61\143\150\x65\137\x61\x63\164\151\x6f\x6e"; const ccyqqagwskwauoem = ["\x70\165\162\x67\145\137\160\x61\164\x74\x65\x72\x6e\137\160\141\x67\x65\163\x5f\x63\x61\143\x68\x65" => self::esiucesqiemeickk, "\x70\x61\x67\x65\163\137\x63\x61\143\x68\x65\137\160\162\x6f\x67\162\145\163\163" => self::ggmmioeoauiyccec, "\x63\150\x65\x63\x6b\137\x63\x61\156\144\151\144\141\x74\x65\x5f\x6c\x69\156\x6b" => self::maqcykaweqimuomu, "\x70\141\147\145\x73\137\143\x61\143\x68\x65\137\163\164\x61\x74\x75\x73" => self::kaqawyqaekuookgi, "\144\145\x61\143\164\x69\x76\x61\164\x65\137\x70\x61\164\164\145\162\156" => self::wegmeawoaymsqkyi, "\162\x65\157\160\x74\151\155\x69\172\x65\x5f\160\141\164\x74\x65\x72\x6e" => self::kusgmosaoigiukgi, "\x63\150\145\143\153\x5f\160\x61\x74\164\x65\162\156\x5f\162\165\156" => self::qskskgmuqiggaqeg, "\141\x63\164\151\166\141\164\x65\x5f\160\141\x74\x74\x65\x72\156" => self::quuasuseuccsemsw, "\163\x65\x74\165\x70\x5f\160\x61\164\164\x65\162\156" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\143\147\x63\161\155\151\157\x6b\163\171\167\x6b\x65\x6b\x61\157"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\x63\x69\167\167\x6f\157\x77\x77\143\163\143\163\143\147\x75\147"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\x75\x77\x6d\x71\141\x73\x6b\143\167\x61\x6d\151\x67\x69\x6d\145"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\x67\x71\165\x63\x79\161\161\153\147\x73\x71\171\x73\x61\157\x69"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\x69\167\165\x61\161\157\163\x6d\x71\x6d\167\155\x65\157\x69\x77"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\155\x77\165\167\x79\151\141\147\145\145\x61\145\157\171\165\x79"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\x65\x6b\x61\155\147\145\x71\157\x67\157\x73\x67\x67\x65\x6f\141"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\x61\141\145\155\143\x73\153\145\155\147\171\141\x6f\x61\x6f\167"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\x73\145\163\141\x71\153\145\163\141\145\141\x65\x63\x6f\141\x6f"]); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(self::ccoesaeoiusskiew); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(self::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(self::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(self::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($keccaugmemegoimu)) { goto gkwoqoeaecgkymeu; } $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(self::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($sameaqkagyqomooq)) { goto cyymeyomuakqakwo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\120\x61\x74\164\x65\x72\x6e\40\x4e\x6f\x74\40\106\x6f\x75\156\x64", PR__MDL__OPTIMIZATION)); goto uwscegkmmumymoaq; cyymeyomuakqakwo: switch ($aiamqeawckcsuaou) { case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\160\162\157\x67\x72\145\163\163" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), self::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; goto swuggqyiaiqywgge; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); goto swuggqyiaiqywgge; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto ggewkaiwwgkmkwgc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\124\x68\145\x72\x65\40\x69\163\40\x6e\157\x20\x72\145\155\157\164\x65\40\x72\x75\x6e\x20\146\x6f\x72\x20\160\141\164\164\x65\x72\x6e\56", PR__MDL__OPTIMIZATION)); goto kkieqqwwascekcmo; ggewkaiwwgkmkwgc: $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if (!($iueymcwwscwqkiyq === self::eyemmiwoaayukksq)) { goto syuywgysqyckcqay; } $sogksuscggsicmac = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x76\x69\162\x74\x75\x61\x6c\x5f\142\x72\x6f\167\163\145\162\x5f\x63\150\x65\x63\153\137\x66\151\x6e\151\163\x68\145\144", $sameaqkagyqomooq); if (!($sogksuscggsicmac !== $sameaqkagyqomooq)) { goto kmseiouukkqiumum; } if (is_wp_error($sogksuscggsicmac)) { goto yccuomocgmewkeca; } if (!$sogksuscggsicmac) { goto gcaykgmmmqomsyis; } $iueymcwwscwqkiyq = self::amcogigwsaqssuai; gcaykgmmmqomsyis: goto suiywiakesiegcwu; yccuomocgmewkeca: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; suiywiakesiegcwu: kmseiouukkqiumum: syuywgysqyckcqay: $keccaugmemegoimu = [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\154\x61\x74\145\163\164\137\x72\x75\156" => $iueymcwwscwqkiyq !== self::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\x6c\141\164\145\x73\164\137\x72\165\156", true) : '', "\160\141\x67\145\x73\x5f\143\x61\x63\x68\x65" => $iueymcwwscwqkiyq !== self::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; kkieqqwwascekcmo: goto swuggqyiaiqywgge; case self::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); goto swuggqyiaiqywgge; case self::ccoesaeoiusskiew: if (!$goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { goto awimwukcyiceackk; } $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); if (is_wp_error($keccaugmemegoimu)) { goto ycueoqkeakismiqw; } $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); ycueoqkeakismiqw: awimwukcyiceackk: goto swuggqyiaiqywgge; case self::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::eqewsqmqmsiocaeg); if (is_wp_error($keccaugmemegoimu)) { goto mugeiwyysiemwaym; } $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); mugeiwyysiemwaym: goto swuggqyiaiqywgge; case self::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::uucoeqmmykkwsmqc); goto swuggqyiaiqywgge; case self::wwgqqgayyagycysu: if ($goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo)) { goto euymeegkukskiowq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\x6d\145\x74\150\151\x6e\147\40\167\162\157\156\x67\x20\x6f\156\x20\160\165\x72\147\x69\x6e\x67\x20\x70\x61\147\x65\163\40\143\141\143\150\x65\x2e", PR__MDL__OPTIMIZATION)); goto cquikgykuscqmigw; euymeegkukskiowq: $keccaugmemegoimu = __("\x50\x61\x67\x65\163\x20\143\141\143\x68\x65\x20\160\165\x72\147\x65\x64\40\163\165\x63\143\145\x73\163\146\x75\154\154\171\x2e", PR__MDL__OPTIMIZATION); cquikgykuscqmigw: goto swuggqyiaiqywgge; case self::eueyiwccigugisqe: $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); goto swuggqyiaiqywgge; } ocwouquuwsaqakae: swuggqyiaiqywgge: uwscegkmmumymoaq: $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; gkwoqoeaecgkymeu: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } private function _checkLink($eouekqmooogkoqoo, array $ocqawgquwsqioses = []) { if ($ocqawgquwsqioses) { goto ouaoyqugwsagkqaa; } $ocqawgquwsqioses = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); ouaoyqugwsagkqaa: $ksaameoqigiaoigg = ''; if (!($iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(self::ogigqueukwysusii, '', true))) { goto wgeueumgacuuuama; } $iwywmkygwewiamwm = trailingslashit($iwywmkygwewiamwm); if (isset($ocqawgquwsqioses[$iwywmkygwewiamwm])) { goto auaywaskqooasiuq; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\125\x52\114\x20\x69\163\x20\x6e\157\164\x20\155\x61\x74\143\150\145\x64\x20\164\x6f\40\x70\141\x74\x74\145\162\156\56", PR__MDL__OPTIMIZATION)); goto ewoqyogcaksucksk; auaywaskqooasiuq: $ksaameoqigiaoigg = $iwywmkygwewiamwm; ewoqyogcaksucksk: wgeueumgacuuuama: return $ksaameoqigiaoigg; } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { goto gkuwmiusoqwesqoo; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\120\141\x74\x74\145\162\156\x20\141\x6c\162\145\141\x64\x79\40\x73\x65\x74\x75\x70\145\144\56", PR__MDL__OPTIMIZATION)); goto wmsiqkyqsiysgcyy; gkuwmiusoqwesqoo: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(self::ogigqueukwysusii, '', true); $mokmmyiueoiqokyc = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); if ($iwywmkygwewiamwm && is_wp_error($this->_checkLink($eouekqmooogkoqoo, $mokmmyiueoiqokyc))) { goto qaikeckkiwasykwk; } $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo, $mokmmyiueoiqokyc); if (empty($awyumwiewiauosqy)) { goto cqemkecywkkwaaii; } $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[self::iwyueouqaqegmcas]) && $igqsaukqcqscimok[self::iwyueouqaqegmcas])) { goto kmiqskugkmaiugae; } $ueeagokqmgisgauy .= "\74\142\x72\76{$this->gcsweumukyckmgik($igqsaukqcqscimok[self::iwyueouqaqegmcas])}"; kmiqskugkmaiugae: iuaeeeeggkikuiig: } simkiasocoimioew: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(sprintf(__("\x53\x6f\x6d\145\x20\160\141\147\x65\40\156\157\x74\40\x61\x64\x64\x2e\40\45\163", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); goto wcioaoeiiawwqqqq; cqemkecywkkwaaii: if ($this->wkagassgcaqeosio()->gqwuqkumkkkygwuw($jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto qgyaeoqgekocwkmw; } $ksaameoqigiaoigg = $this->wkagassgcaqeosio()->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::eqewsqmqmsiocaeg); goto sieykcqauaygcais; qgyaeoqgekocwkmw: if ($iwywmkygwewiamwm) { goto yukacyeckkwagusw; } $iwywmkygwewiamwm = array_key_first($mokmmyiueoiqokyc); yukacyeckkwagusw: $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $iwywmkygwewiamwm); sieykcqauaygcais: wcioaoeiiawwqqqq: goto ieoiygycmseqmmgc; qaikeckkiwasykwk: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\125\x52\x4c\x20\x69\x73\40\156\157\x74\40\155\141\164\143\150\x65\x64\x20\164\x6f\40\160\x61\x74\x74\145\162\x6e\x2e", PR__MDL__OPTIMIZATION)); ieoiygycmseqmmgc: wmsiqkyqsiysgcyy: return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if (!$ycikkiiimgoqqgsq->qumqowkwyaceeqwu([self::ciywsqoeiymemsys => self::eyemmiwoaayukksq, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc])) { goto giuswooyckooaoms; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x41\x6e\157\x74\150\x65\x72\40\x70\x72\157\x63\x65\163\x73\x20\x61\x6c\162\x65\x61\144\x79\x20\163\x74\141\162\164\145\144\56", PR__MDL__OPTIMIZATION), 401); goto uogkcsaewswoaosw; giuswooyckooaoms: if (!(!$emyowuimauuisimy || !is_string($emyowuimauuisimy))) { goto wkqwywgikoyqkyeg; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if (!($suaemuyiacqyugsm = $iuekmkswcsacoawq->akkkoiiymmamsauc($sameaqkagyqomooq, $iuekmkswcsacoawq::ewyamgkooeqiecwg))) { goto ysggiwiksocomkek; } $emyowuimauuisimy = $iuekmkswcsacoawq->esewqawcwouwyesq($iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::auqoykcmsiauccao)); ysggiwiksocomkek: wkqwywgikoyqkyeg: $sogksuscggsicmac = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\166\x69\162\x74\165\141\154\x5f\142\x72\157\x77\x73\x65\162\137\x61\144\144\x5f\152\x6f\142", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (!($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac))) { goto wqieuwguumokgyqg; } $ycikkiiimgoqqgsq->gscuuyuyauokoyuo([self::uiwqcumqkgikqyue => $sogksuscggsicmac, self::ciywsqoeiymemsys => self::eyemmiwoaayukksq, Remote::oayciggqokqmayuy => $this->wkagassgcaqeosio()->mqaysguwaikckgey($sameaqkagyqomooq), Remote::eksgkcqkmumuceii => self::meksegaoamowuwoq, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc]); wqieuwguumokgyqg: if (is_wp_error($sogksuscggsicmac)) { goto qswqmgiwiyyqwioa; } $sogksuscggsicmac = ["\x70\141\x67\145\x73\137\143\141\143\x68\145\137\163\x74\x61\164\165\x73" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\160\x61\147\145\163\x5f\x63\141\x63\x68\x65", true), "\x70\x61\x74\164\x65\162\156\x5f\x70\162\157\x67\162\145\163\x73\142\x61\162" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\154\x61\x74\145\163\x74\x5f\162\x75\156", true)]; goto omekuqkuugyocmoc; qswqmgiwiyyqwioa: $iswcokucwmiosiaq = $this->gcsweumukyckmgik($sogksuscggsicmac); if (!(false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\x63\x75\x72\154\x20\x65\162\x72\x6f\x72"))) { goto aueiggyawkmkamum; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x43\141\x6e\40\x6e\157\x74\x20\143\157\156\156\x65\143\164\40\x74\x6f\x20\163\x65\162\166\x65\162\x20\x72\151\x67\150\x74\40\x6e\157\167\x2c\x20\x70\154\145\141\163\145\40\x74\x72\x79\40\x6c\141\x74\x65\162\x20\x6f\x72\x20\x63\x6f\156\164\141\143\x74\x20\165\x73\56", PR__MDL__OPTIMIZATION), 500); aueiggyawkmkamum: omekuqkuugyocmoc: uogkcsaewswoaosw: return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); if ($mokmmyiueoiqokyc) { goto miqmoasmioksggkm; } $mokmmyiueoiqokyc = $goqqimcssiyagkwy->wegymsqmyauaoqce($eouekqmooogkoqoo); miqmoasmioksggkm: $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ccosqsyuggiqiuwu = $iuekmkswcsacoawq->cwkywyqksyucoyia([$iuekmkswcsacoawq::ewyamgkooeqiecwg => $sameaqkagyqomooq, self::auqoykcmsiauccao => [self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::ciyoccqkiamemcmm => array_column($mokmmyiueoiqokyc, self::auqoykcmsiauccao), self::sieeooaigsmwocym => true]]); if (!$ccosqsyuggiqiuwu) { goto keewmqmgqegumiwa; } foreach ($ccosqsyuggiqiuwu as $mmoasaykomcwqeus) { $iuekmkswcsacoawq->gccwawquiskkswiu($mmoasaykomcwqeus, $iuekmkswcsacoawq::ewyamgkooeqiecwg); eqemoayymokeqaqi: } cykaikwsaskgeemo: keewmqmgqegumiwa: $awyumwiewiauosqy = []; foreach ($mokmmyiueoiqokyc as $oaeaekwuocwiymuy) { $sogksuscggsicmac = $goqqimcssiyagkwy->igwoeqicuykaamye($sameaqkagyqomooq, $oaeaekwuocwiymuy); if (!(isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && !$sogksuscggsicmac[self::ckcawaoawwioqecq])) { goto uiqycwuommmmuowy; } $this->oaumimwssciwumys($this->gcsweumukyckmgik($sogksuscggsicmac[self::iwyueouqaqegmcas])); $awyumwiewiauosqy[] = $oaeaekwuocwiymuy; uiqycwuommmmuowy: iqamwyasyoqsugeu: } oqsecqsucukywaee: return $awyumwiewiauosqy; } }
