<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665f4289276f4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Common { use PageManagerEngineTrait; const swkaqiikoaickuui = "\x6f\x70\164\151\155\x69\x7a\145"; const eueyiwccigugisqe = "\143\150\145\x63\153\137\x6c\151\x6e\x6b"; const wwgqqgayyagycysu = "\160\165\162\x67\145\137\x63\x61\x63\x68\x65"; const aeksqkkekigwssku = self::kgswyesggeyekgmg . "\163\145\x74\x75\160\137\x70\x61\164\x74\x65\162\x6e\137\141\x63\x74\x69\x6f\x6e"; const quuasuseuccsemsw = self::kgswyesggeyekgmg . "\141\143\x74\x69\166\x65\137\160\141\x74\164\x65\x72\x6e\137\x61\x63\x74\x69\x6f\x6e"; const qskskgmuqiggaqeg = self::kgswyesggeyekgmg . "\143\150\x65\x63\x6b\137\160\141\x74\x74\145\x72\156\x5f\x72\165\156\137\x61\143\x74\x69\x6f\156"; const kaqawyqaekuookgi = self::kgswyesggeyekgmg . "\x70\x61\147\145\163\137\x63\141\x63\x68\x65\x5f\x73\x74\141\164\165\x73"; const kusgmosaoigiukgi = self::kgswyesggeyekgmg . "\162\145\157\160\164\x69\155\x69\172\145\137\160\x61\x74\164\x65\162\x6e\x5f\x61\143\x74\151\x6f\x6e"; const wegmeawoaymsqkyi = self::kgswyesggeyekgmg . "\x64\x65\141\143\164\x69\x76\x61\x74\x65\x5f\x70\x61\x74\x74\145\x72\x6e\x5f\x61\143\x74\x69\x6f\156"; const maqcykaweqimuomu = self::kgswyesggeyekgmg . "\x63\150\x65\143\153\x5f\143\141\156\x64\151\144\141\164\x65\137\165\x72\x6c\x5f\x61\x63\x74\151\157\156"; const ggmmioeoauiyccec = self::kgswyesggeyekgmg . "\160\141\147\145\163\x5f\x63\141\143\x68\x65\137\x70\x72\157\147\162\145\x73\x73"; const esiucesqiemeickk = self::kgswyesggeyekgmg . "\160\165\x72\147\145\x5f\160\141\x74\x74\145\x72\x6e\137\160\141\x67\x65\163\x5f\143\x61\143\x68\145\137\141\x63\x74\x69\157\x6e"; const ccyqqagwskwauoem = ["\x70\x75\162\147\x65\x5f\x70\x61\x74\x74\x65\x72\156\137\x70\141\147\145\x73\x5f\x63\x61\143\150\145" => self::esiucesqiemeickk, "\160\x61\147\145\x73\x5f\x63\x61\143\150\145\137\x70\x72\157\147\162\x65\163\x73" => self::ggmmioeoauiyccec, "\x63\150\145\x63\x6b\x5f\143\x61\x6e\x64\151\x64\x61\x74\x65\137\154\x69\x6e\153" => self::maqcykaweqimuomu, "\x70\141\x67\x65\163\x5f\x63\x61\143\150\145\137\x73\x74\x61\164\165\163" => self::kaqawyqaekuookgi, "\x64\x65\141\143\164\x69\x76\x61\x74\x65\x5f\160\141\x74\164\x65\162\156" => self::wegmeawoaymsqkyi, "\x72\145\x6f\x70\164\151\x6d\x69\x7a\145\137\160\x61\164\x74\x65\x72\156" => self::kusgmosaoigiukgi, "\143\150\x65\143\x6b\x5f\160\141\164\164\145\162\156\137\x72\165\156" => self::qskskgmuqiggaqeg, "\141\x63\x74\151\x76\x61\x74\x65\137\160\141\x74\164\145\162\156" => self::quuasuseuccsemsw, "\163\x65\x74\165\160\137\160\141\x74\164\x65\162\156" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\x63\x67\143\x71\155\x69\x6f\153\x73\x79\167\x6b\x65\153\141\x6f"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\143\x69\167\x77\157\x6f\167\x77\x63\163\x63\x73\143\x67\x75\147"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\165\x77\155\161\x61\163\153\x63\167\141\155\151\147\x69\155\x65"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\147\x71\x75\143\171\161\x71\x6b\147\x73\161\171\163\141\x6f\x69"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\x69\167\x75\141\x71\x6f\163\155\x71\155\x77\155\145\x6f\151\167"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\x6d\x77\x75\167\171\151\141\147\x65\145\x61\x65\157\171\165\x79"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\145\x6b\x61\x6d\x67\145\x71\157\147\157\163\x67\147\145\157\141"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\x61\141\145\x6d\143\163\x6b\145\x6d\147\171\x61\157\141\x6f\x77"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\163\x65\163\x61\x71\153\145\x73\141\x65\141\x65\x63\157\141\x6f"]); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(self::ccoesaeoiusskiew); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(self::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(self::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(self::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($keccaugmemegoimu)) { goto awimwukcyiceackk; } $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(self::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($sameaqkagyqomooq)) { goto kkieqqwwascekcmo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x50\x61\164\164\145\162\156\40\x4e\157\x74\x20\x46\157\x75\156\x64", PR__MDL__OPTIMIZATION)); goto ycueoqkeakismiqw; kkieqqwwascekcmo: switch ($aiamqeawckcsuaou) { case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\160\x72\x6f\147\x72\145\x73\x73" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), self::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; goto kuaiscyqkgcouiye; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); goto kuaiscyqkgcouiye; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto ocwouquuwsaqakae; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\124\x68\145\162\145\40\x69\x73\x20\x6e\157\40\162\x65\x6d\x6f\x74\x65\40\x72\165\156\40\146\x6f\162\x20\160\141\164\164\145\162\x6e\56", PR__MDL__OPTIMIZATION)); goto gcaykgmmmqomsyis; ocwouquuwsaqakae: $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if (!($iueymcwwscwqkiyq === self::eyemmiwoaayukksq)) { goto swuggqyiaiqywgge; } $sogksuscggsicmac = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\166\x69\162\x74\165\141\154\x5f\142\x72\157\167\x73\x65\x72\x5f\x63\x68\145\x63\x6b\137\146\151\156\151\163\150\x65\144", $sameaqkagyqomooq); if (!($sogksuscggsicmac !== $sameaqkagyqomooq)) { goto qoacckkkwsqkokye; } if (is_wp_error($sogksuscggsicmac)) { goto qwiyicoywcekgyce; } if (!$sogksuscggsicmac) { goto gkeymcqqsewayscs; } $iueymcwwscwqkiyq = self::amcogigwsaqssuai; gkeymcqqsewayscs: goto tagquiiokseckkqs; qwiyicoywcekgyce: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; tagquiiokseckkqs: qoacckkkwsqkokye: swuggqyiaiqywgge: $keccaugmemegoimu = [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\x6c\141\x74\145\163\x74\137\162\165\156" => $iueymcwwscwqkiyq !== self::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\154\x61\x74\145\x73\164\137\x72\x75\156", true) : '', "\x70\141\x67\x65\163\137\x63\141\143\150\x65" => $iueymcwwscwqkiyq !== self::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; gcaykgmmmqomsyis: goto kuaiscyqkgcouiye; case self::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); goto kuaiscyqkgcouiye; case self::ccoesaeoiusskiew: if (!$goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { goto suiywiakesiegcwu; } $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); if (is_wp_error($keccaugmemegoimu)) { goto yccuomocgmewkeca; } $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); yccuomocgmewkeca: suiywiakesiegcwu: goto kuaiscyqkgcouiye; case self::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::eqewsqmqmsiocaeg); if (is_wp_error($keccaugmemegoimu)) { goto kmseiouukkqiumum; } $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); kmseiouukkqiumum: goto kuaiscyqkgcouiye; case self::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::uucoeqmmykkwsmqc); goto kuaiscyqkgcouiye; case self::wwgqqgayyagycysu: if ($goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo)) { goto syuywgysqyckcqay; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\155\145\x74\150\x69\x6e\147\40\167\162\157\156\x67\x20\x6f\x6e\x20\160\165\x72\x67\151\x6e\x67\x20\160\141\147\x65\x73\x20\143\x61\x63\x68\145\x2e", PR__MDL__OPTIMIZATION)); goto ggewkaiwwgkmkwgc; syuywgysqyckcqay: $keccaugmemegoimu = __("\x50\x61\147\145\x73\x20\143\141\x63\x68\x65\x20\160\x75\x72\x67\145\144\x20\x73\x75\x63\x63\145\x73\163\146\x75\x6c\154\x79\56", PR__MDL__OPTIMIZATION); ggewkaiwwgkmkwgc: goto kuaiscyqkgcouiye; case self::eueyiwccigugisqe: $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); goto kuaiscyqkgcouiye; } ooooceiweeackgie: kuaiscyqkgcouiye: ycueoqkeakismiqw: $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; awimwukcyiceackk: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } private function _checkLink($eouekqmooogkoqoo, array $ocqawgquwsqioses = []) { if ($ocqawgquwsqioses) { goto mugeiwyysiemwaym; } $ocqawgquwsqioses = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); mugeiwyysiemwaym: $ksaameoqigiaoigg = ''; if (!($iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(self::ogigqueukwysusii, '', true))) { goto cyymeyomuakqakwo; } $iwywmkygwewiamwm = trailingslashit($iwywmkygwewiamwm); if (isset($ocqawgquwsqioses[$iwywmkygwewiamwm])) { goto euymeegkukskiowq; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\x55\x52\x4c\40\151\x73\40\x6e\157\x74\x20\155\141\164\143\150\x65\x64\40\x74\x6f\x20\160\141\x74\164\145\x72\x6e\56", PR__MDL__OPTIMIZATION)); goto cquikgykuscqmigw; euymeegkukskiowq: $ksaameoqigiaoigg = $iwywmkygwewiamwm; cquikgykuscqmigw: cyymeyomuakqakwo: return $ksaameoqigiaoigg; } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { goto iuaeeeeggkikuiig; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\120\141\x74\164\145\162\156\40\x61\154\162\145\x61\144\x79\40\x73\x65\x74\165\x70\145\x64\x2e", PR__MDL__OPTIMIZATION)); goto kmiqskugkmaiugae; iuaeeeeggkikuiig: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(self::ogigqueukwysusii, '', true); $mokmmyiueoiqokyc = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); if ($iwywmkygwewiamwm && is_wp_error($this->_checkLink($eouekqmooogkoqoo, $mokmmyiueoiqokyc))) { goto sieykcqauaygcais; } $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo, $mokmmyiueoiqokyc); if (empty($awyumwiewiauosqy)) { goto yukacyeckkwagusw; } $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[self::iwyueouqaqegmcas]) && $igqsaukqcqscimok[self::iwyueouqaqegmcas])) { goto wgeueumgacuuuama; } $ueeagokqmgisgauy .= "\74\142\x72\76{$this->gcsweumukyckmgik($igqsaukqcqscimok[self::iwyueouqaqegmcas])}"; wgeueumgacuuuama: ewoqyogcaksucksk: } auaywaskqooasiuq: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(sprintf(__("\x53\157\155\x65\x20\160\141\x67\145\40\156\x6f\164\x20\141\x64\x64\x2e\40\x25\x73", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); goto qgyaeoqgekocwkmw; yukacyeckkwagusw: if ($this->wkagassgcaqeosio()->gqwuqkumkkkygwuw($jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto gkwoqoeaecgkymeu; } $ksaameoqigiaoigg = $this->wkagassgcaqeosio()->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::eqewsqmqmsiocaeg); goto ouaoyqugwsagkqaa; gkwoqoeaecgkymeu: if ($iwywmkygwewiamwm) { goto uwscegkmmumymoaq; } $iwywmkygwewiamwm = array_key_first($mokmmyiueoiqokyc); uwscegkmmumymoaq: $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $iwywmkygwewiamwm); ouaoyqugwsagkqaa: qgyaeoqgekocwkmw: goto simkiasocoimioew; sieykcqauaygcais: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\x55\122\114\40\151\163\x20\156\x6f\164\x20\x6d\x61\164\x63\x68\x65\144\x20\x74\x6f\40\160\141\x74\x74\x65\x72\156\56", PR__MDL__OPTIMIZATION)); simkiasocoimioew: kmiqskugkmaiugae: return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if (!$ycikkiiimgoqqgsq->qumqowkwyaceeqwu([self::ciywsqoeiymemsys => self::eyemmiwoaayukksq, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc])) { goto ysggiwiksocomkek; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x41\156\x6f\164\x68\x65\162\40\160\162\157\143\x65\163\x73\40\141\154\x72\145\141\144\171\40\x73\164\141\x72\164\145\144\x2e", PR__MDL__OPTIMIZATION), 401); goto wkqwywgikoyqkyeg; ysggiwiksocomkek: if (!(!$emyowuimauuisimy || !is_string($emyowuimauuisimy))) { goto wcioaoeiiawwqqqq; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if (!($suaemuyiacqyugsm = $iuekmkswcsacoawq->akkkoiiymmamsauc($sameaqkagyqomooq, $iuekmkswcsacoawq::ewyamgkooeqiecwg))) { goto cqemkecywkkwaaii; } $emyowuimauuisimy = $iuekmkswcsacoawq->esewqawcwouwyesq($iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::auqoykcmsiauccao)); cqemkecywkkwaaii: wcioaoeiiawwqqqq: $sogksuscggsicmac = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\166\x69\162\164\165\141\x6c\137\142\162\x6f\167\x73\145\162\137\141\144\x64\x5f\152\x6f\142", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (!($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac))) { goto qaikeckkiwasykwk; } $ycikkiiimgoqqgsq->gscuuyuyauokoyuo([self::uiwqcumqkgikqyue => $sogksuscggsicmac, self::ciywsqoeiymemsys => self::eyemmiwoaayukksq, Remote::oayciggqokqmayuy => $this->wkagassgcaqeosio()->mqaysguwaikckgey($sameaqkagyqomooq), Remote::eksgkcqkmumuceii => self::meksegaoamowuwoq, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc]); qaikeckkiwasykwk: if (is_wp_error($sogksuscggsicmac)) { goto gkuwmiusoqwesqoo; } $sogksuscggsicmac = ["\160\141\x67\x65\163\137\143\141\x63\x68\145\137\163\x74\x61\164\165\x73" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\x70\x61\147\x65\x73\137\x63\x61\x63\x68\x65", true), "\x70\141\164\164\x65\x72\156\137\160\162\157\147\x72\x65\163\x73\x62\141\x72" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\154\x61\164\145\163\164\137\x72\165\x6e", true)]; goto wmsiqkyqsiysgcyy; gkuwmiusoqwesqoo: $iswcokucwmiosiaq = $this->gcsweumukyckmgik($sogksuscggsicmac); if (!(false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\x63\165\x72\x6c\x20\145\x72\x72\x6f\162"))) { goto ieoiygycmseqmmgc; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\103\141\156\x20\x6e\157\x74\40\x63\x6f\x6e\156\145\x63\x74\40\x74\157\x20\x73\145\162\x76\145\x72\40\x72\151\x67\150\164\x20\156\157\167\x2c\x20\160\x6c\145\141\163\145\x20\164\x72\x79\40\x6c\x61\x74\145\162\x20\157\162\40\143\x6f\x6e\164\x61\x63\x74\x20\x75\163\x2e", PR__MDL__OPTIMIZATION), 500); ieoiygycmseqmmgc: wmsiqkyqsiysgcyy: wkqwywgikoyqkyeg: return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); if ($mokmmyiueoiqokyc) { goto wqieuwguumokgyqg; } $mokmmyiueoiqokyc = $goqqimcssiyagkwy->wegymsqmyauaoqce($eouekqmooogkoqoo); wqieuwguumokgyqg: $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ccosqsyuggiqiuwu = $iuekmkswcsacoawq->cwkywyqksyucoyia([$iuekmkswcsacoawq::ewyamgkooeqiecwg => $sameaqkagyqomooq, self::auqoykcmsiauccao => [self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::ciyoccqkiamemcmm => array_column($mokmmyiueoiqokyc, self::auqoykcmsiauccao), self::sieeooaigsmwocym => true]]); if (!$ccosqsyuggiqiuwu) { goto omekuqkuugyocmoc; } foreach ($ccosqsyuggiqiuwu as $mmoasaykomcwqeus) { $iuekmkswcsacoawq->gccwawquiskkswiu($mmoasaykomcwqeus, $iuekmkswcsacoawq::ewyamgkooeqiecwg); qswqmgiwiyyqwioa: } aueiggyawkmkamum: omekuqkuugyocmoc: $awyumwiewiauosqy = []; foreach ($mokmmyiueoiqokyc as $oaeaekwuocwiymuy) { $sogksuscggsicmac = $goqqimcssiyagkwy->igwoeqicuykaamye($sameaqkagyqomooq, $oaeaekwuocwiymuy); if (!(isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && !$sogksuscggsicmac[self::ckcawaoawwioqecq])) { goto miqmoasmioksggkm; } $this->oaumimwssciwumys($this->gcsweumukyckmgik($sogksuscggsicmac[self::iwyueouqaqegmcas])); $awyumwiewiauosqy[] = $oaeaekwuocwiymuy; miqmoasmioksggkm: uogkcsaewswoaosw: } giuswooyckooaoms: return $awyumwiewiauosqy; } }
