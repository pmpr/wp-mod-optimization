<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d23d0b3ad57             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\PageManager\SpeedTest\Setting as SpeedTestSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Common { use PageManagerEngineTrait; const swkaqiikoaickuui = "\157\160\x74\x69\x6d\151\172\145"; const eueyiwccigugisqe = "\143\150\145\x63\x6b\137\x6c\151\x6e\153"; const wwgqqgayyagycysu = "\x70\x75\x72\x67\145\x5f\143\141\x63\150\145"; const aeksqkkekigwssku = Optimization::kgswyesggeyekgmg . "\x73\145\164\165\160\x5f\160\x61\164\x74\x65\x72\x6e\137\x61\x63\164\151\x6f\156"; const quuasuseuccsemsw = Optimization::kgswyesggeyekgmg . "\141\x63\164\151\x76\x65\x5f\x70\x61\164\164\145\162\156\x5f\141\x63\164\x69\157\x6e"; const qskskgmuqiggaqeg = Optimization::kgswyesggeyekgmg . "\x63\150\145\x63\x6b\x5f\160\x61\x74\x74\x65\162\156\x5f\x72\165\x6e\137\141\143\x74\x69\x6f\x6e"; const kaqawyqaekuookgi = Optimization::kgswyesggeyekgmg . "\x70\x61\x67\145\163\x5f\143\x61\143\150\145\137\x73\164\141\164\x75\x73"; const kusgmosaoigiukgi = Optimization::kgswyesggeyekgmg . "\x72\145\x6f\160\164\151\155\x69\x7a\145\137\160\141\164\x74\x65\162\156\x5f\141\x63\x74\151\157\x6e"; const wegmeawoaymsqkyi = Optimization::kgswyesggeyekgmg . "\x64\x65\141\x63\x74\x69\166\141\x74\145\137\x70\x61\x74\x74\x65\162\x6e\x5f\141\x63\164\151\157\x6e"; const maqcykaweqimuomu = Optimization::kgswyesggeyekgmg . "\143\150\x65\143\153\137\143\141\x6e\144\151\144\141\164\145\x5f\x75\x72\154\x5f\141\143\164\x69\157\156"; const ggmmioeoauiyccec = Optimization::kgswyesggeyekgmg . "\160\x61\147\x65\x73\x5f\143\x61\x63\150\145\137\160\162\157\x67\x72\x65\x73\163"; const aikyaygyasegygma = Optimization::kgswyesggeyekgmg . "\160\141\x74\x74\x65\162\x6e\x5f\x6d\141\x6e\165\x61\154\x5f\157\160\164\x69\x6d\x69\172\145\x5f\141\143\x74\151\157\156"; const esiucesqiemeickk = Optimization::kgswyesggeyekgmg . "\x70\165\162\147\x65\x5f\160\x61\164\x74\145\x72\156\x5f\160\141\147\x65\163\137\x63\141\x63\x68\145\x5f\x61\143\164\x69\x6f\156"; const sggmuowkoiiuacig = Optimization::kgswyesggeyekgmg . "\x73\x70\145\x65\x64\137\164\x65\163\x74\x5f\x6e\157\x74\137\x64\x69\x73\160\141\143\x68\141\x62\x6c\145\137\146\151\x78\145\144"; const awqksmkmsquoymem = Optimization::kgswyesggeyekgmg . "\143\150\x61\x6e\x67\x65\137\x70\x61\147\x65\x5f\163\164\x61\164\165\x73"; const imigmiemwmuayaca = Optimization::kgswyesggeyekgmg . "\143\150\x61\x6e\x67\145\137\x70\x61\147\x65\137\151\155\x70\x6f\x72\x74\x61\x6e\164\x5f\163\164\x61\x74\165\x73"; const uyuegiyaymqqkcwa = Optimization::kgswyesggeyekgmg . "\143\150\141\156\x67\x65\x5f\160\141\147\145\x5f\163\160\x65\x65\144\x5f\164\145\x73\x74\137\x63\141\x6e\144\x69\x64\141\x74\x65\137\163\x74\x61\164\x75\x73"; const ccyqqagwskwauoem = ["\x63\150\x61\x6e\147\145\137\160\x61\147\x65\137\163\x70\145\x65\144\137\164\x65\x73\164\137\143\141\156\144\151\144\x61\164\145\137\x73\164\x61\164\x75\163" => self::uyuegiyaymqqkcwa, "\143\x68\x61\x6e\147\x65\x5f\160\x61\147\x65\137\x69\155\160\x6f\x72\x74\141\x6e\x74\137\x73\x74\x61\x74\165\163" => self::imigmiemwmuayaca, "\160\x75\162\147\145\137\160\x61\164\x74\145\162\156\137\160\141\147\x65\163\x5f\143\141\143\x68\145" => self::esiucesqiemeickk, "\x70\x61\164\x74\145\162\156\x5f\155\x61\156\x75\x61\x6c\137\x6f\160\164\151\155\151\x7a\145" => self::aikyaygyasegygma, "\x6e\157\x74\137\x64\151\x73\160\141\x63\150\x61\142\x6c\x65\137\146\x69\170\145\144" => self::sggmuowkoiiuacig, "\160\141\147\x65\x73\x5f\143\141\143\x68\145\137\x70\x72\x6f\147\162\145\163\x73" => self::ggmmioeoauiyccec, "\143\150\x65\x63\x6b\137\143\x61\156\x64\x69\x64\141\164\x65\x5f\x6c\x69\156\153" => self::maqcykaweqimuomu, "\143\x68\141\x6e\147\145\x5f\x70\x61\147\x65\137\163\x74\x61\x74\165\163" => self::awqksmkmsquoymem, "\x70\141\x67\145\x73\x5f\x63\x61\143\x68\x65\x5f\163\x74\x61\164\x75\163" => self::kaqawyqaekuookgi, "\144\x65\141\143\x74\x69\x76\141\164\145\x5f\160\x61\164\164\x65\162\x6e" => self::wegmeawoaymsqkyi, "\162\x65\x6f\x70\x74\151\155\x69\172\x65\x5f\x70\x61\164\164\145\162\156" => self::kusgmosaoigiukgi, "\x63\150\x65\143\x6b\x5f\160\141\x74\164\145\162\156\x5f\162\165\x6e" => self::qskskgmuqiggaqeg, "\141\143\x74\x69\x76\x61\x74\145\x5f\160\x61\164\x74\145\x72\x6e" => self::quuasuseuccsemsw, "\x73\x65\x74\x75\x70\137\160\141\x74\164\x65\x72\x6e" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\143\x67\x63\x71\x6d\151\x6f\x6b\163\x79\x77\153\145\x6b\141\157"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\143\x69\x77\x77\157\x6f\167\x77\x63\x73\143\163\x63\147\165\x67"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\165\167\155\x71\141\x73\153\143\x77\x61\x6d\151\x67\151\x6d\x65"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\147\x71\165\x63\171\161\x71\x6b\147\163\161\171\163\141\x6f\x69"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\x69\167\165\141\x71\x6f\163\x6d\x71\x6d\x77\155\145\157\151\167"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\155\167\x75\167\171\x69\x61\147\x65\145\141\145\157\x79\165\171"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\x65\x6b\x61\x6d\x67\x65\161\x6f\147\157\x73\x67\x67\145\157\141"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\x61\x61\145\x6d\x63\x73\153\x65\x6d\x67\171\x61\x6f\141\157\167"])->koaegcswmcqsiykq(self::aikyaygyasegygma, [$this, "\161\x77\x79\147\143\x67\165\x79\147\x75\x63\151\167\157\153\165"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\163\145\163\141\161\153\x65\x73\x61\x65\141\145\x63\157\141\x6f"]); $this->koaegcswmcqsiykq(self::sggmuowkoiiuacig, [$this, "\155\x67\x63\145\x6b\x71\x65\163\x63\161\155\147\x63\153\x6d\x79"]); $this->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\143\x79\x73\155\x63\x79\143\153\165\x75\145\157\141\151\x61\x67"], 10, 0)->koaegcswmcqsiykq(self::imigmiemwmuayaca, [$this, "\147\x63\x69\143\x65\163\167\147\x69\163\x65\153\151\143\147\151"], 10, 0)->koaegcswmcqsiykq(self::uyuegiyaymqqkcwa, [$this, "\x6f\x6b\153\x79\163\145\x79\145\171\x67\141\163\145\x69\x6f\161"], 10, 0); } public function mgcekqescqmgckmy() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto cyymeyomuakqakwo; } $keccaugmemegoimu = __("\131\x6f\165\40\150\141\x76\x65\40\156\157\40\160\145\x72\155\151\x73\163\x69\x6f\x6e\40\x74\157\x20\x64\157\40\x74\x68\x69\163\56", PR__MDL__OPTIMIZATION); goto uwscegkmmumymoaq; cyymeyomuakqakwo: $occymigcemkqucuw = true; Setting::symcgieuakksimmu()->qioweyiqewmsocem(SpeedTestSetting::quyascocmiiossme, false, false); $keccaugmemegoimu = __("\x53\x70\145\x65\x64\40\x54\145\163\164\x20\146\x75\x6e\143\x74\x69\x6f\156\141\x6c\151\164\x79\40\x66\157\162\x20\143\141\156\x64\x69\144\141\164\145\x20\160\141\147\145\163\40\162\145\163\165\155\x65\144\56", PR__MDL__OPTIMIZATION); uwscegkmmumymoaq: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function cysmcyckuueoaiag() { $this->ssgwweggiwmeowkw(Constants::ciywsqoeiymemsys, Page::symcgieuakksimmu()->uqeoyqiwywwmsiew(Constants::ciywsqoeiymemsys)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)); } public function gciceswgisekicgi() { $this->ssgwweggiwmeowkw(Page::uyeaawkisqygakmy, [0 => __("\116\x6f\162\x6d\141\x6c", PR__MDL__OPTIMIZATION), 1 => __("\x49\x6d\x70\x6f\x72\164\141\x6e\x74", PR__MDL__OPTIMIZATION)]); } public function okkyseyeygaseioq() { $this->ssgwweggiwmeowkw(Page::aewquksqwqiawiei, [0 => __("\x44\x6f\x6e\164\40\x54\141\x6b\x65\40\123\160\x65\x65\x64\x20\124\145\x73\x74", PR__MDL__OPTIMIZATION), 1 => __("\124\141\153\x65\40\123\160\145\x65\144\x20\124\145\x73\x74", PR__MDL__OPTIMIZATION)]); } public function ssgwweggiwmeowkw($qgoqiacsiccwoawi = Constants::ciywsqoeiymemsys, $oqseeekuqisekiwy = []) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto qgyaeoqgekocwkmw; } $keccaugmemegoimu = __("\x59\x6f\165\40\x68\x61\166\x65\x20\156\x6f\40\160\145\162\155\151\x73\x73\x69\x6f\x6e\40\x74\x6f\40\x64\157\x20\x74\150\151\163\x2e", PR__MDL__OPTIMIZATION); goto sieykcqauaygcais; qgyaeoqgekocwkmw: $qkcoyiyeuoyyoocy = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::imywcsggckkcywgk); if ($qkcoyiyeuoyyoocy) { goto wgeueumgacuuuama; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto yukacyeckkwagusw; wgeueumgacuuuama: $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $iueymcwwscwqkiyq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ciywsqoeiymemsys, 0); if (isset($oqseeekuqisekiwy[$iueymcwwscwqkiyq])) { goto auaywaskqooasiuq; } $keccaugmemegoimu = __("\131\157\165\x72\x20\163\x75\x62\x6d\151\163\x73\x69\x6f\x6e\x20\x73\164\x61\164\165\163\x20\x69\x73\x20\x6e\157\164\x20\x61\40\x76\x61\x6c\151\144\x20\x73\164\141\x74\x75\163\x2e", PR__MDL__OPTIMIZATION); goto ewoqyogcaksucksk; auaywaskqooasiuq: $sogksuscggsicmac = $iuekmkswcsacoawq->wqikesawekycweoi($qkcoyiyeuoyyoocy, [$qgoqiacsiccwoawi => $iueymcwwscwqkiyq]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto gkwoqoeaecgkymeu; } $keccaugmemegoimu = $sogksuscggsicmac[Constants::iwyueouqaqegmcas]; goto ouaoyqugwsagkqaa; gkwoqoeaecgkymeu: $occymigcemkqucuw = true; $keccaugmemegoimu = sprintf(__("\x50\x61\147\145\40\163\164\x61\x74\x75\x73\40\x63\x68\141\x6e\x67\145\x64\x20\164\x6f\x20\x25\163\40\x73\x75\143\143\x65\x73\163\x66\x75\x6c\x6c\x79\56", PR__MDL__OPTIMIZATION), $oqseeekuqisekiwy[$iueymcwwscwqkiyq]); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x70\165\162\x67\x65\x5f\x65\x6c\x65\143\x74\x65\144\137\160\x61\147\145\x5f\150\164\155\x6c\x5f\x63\x61\x63\150\x65", $qkcoyiyeuoyyoocy); ouaoyqugwsagkqaa: ewoqyogcaksucksk: yukacyeckkwagusw: sieykcqauaygcais: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function qwygcguyguciwoku() { $this->cgywqskcmcgkwueu(self::aikyaygyasegygma); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(Pattern::ccoesaeoiusskiew); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(Constants::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(Constants::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(Constants::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto keewmqmgqegumiwa; } $keccaugmemegoimu = __("\x59\157\165\x20\x68\141\166\145\40\x6e\157\x20\160\145\x72\x6d\151\163\x73\x69\157\156\x20\164\x6f\40\144\157\40\164\150\151\163\x2e", PR__MDL__OPTIMIZATION); goto oqsecqsucukywaee; keewmqmgqegumiwa: $keccaugmemegoimu = false; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($sameaqkagyqomooq)) { goto cykaikwsaskgeemo; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\141\x74\x74\x65\162\156\40\116\157\164\x20\106\x6f\165\156\144", PR__MDL__OPTIMIZATION)); goto eqemoayymokeqaqi; cykaikwsaskgeemo: switch ($aiamqeawckcsuaou) { case self::aikyaygyasegygma: if ($goqqimcssiyagkwy->iwoekuysekysqmke()) { goto wcioaoeiiawwqqqq; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\141\x74\x74\x65\162\156\x20\x6d\x61\x6e\165\141\154\x20\157\x70\164\x69\x6d\x69\172\145\x20\x6e\157\164\40\x61\x76\x61\151\x6c\141\x62\154\x65\x20\x72\151\x67\150\x74\x20\x6e\157\x77\41", PR__MDL__OPTIMIZATION)); goto qaikeckkiwasykwk; wcioaoeiiawwqqqq: $smgooosyoeqwcaeg = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::qmwqkaeamecekiso); if ($smgooosyoeqwcaeg) { goto kmiqskugkmaiugae; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\112\x53\117\x4e", PR__MDL__OPTIMIZATION)); goto cqemkecywkkwaaii; kmiqskugkmaiugae: $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x76\x69\x72\164\165\141\154\x5f\x62\x72\x6f\167\x73\145\x72\137\143\x61\x63\x68\x65\x5f\162\x65\163\x75\x6c\x74", $sameaqkagyqomooq, wp_unslash($smgooosyoeqwcaeg)); $keccaugmemegoimu = __("\120\141\x74\x74\x65\x72\x6e\40\144\141\x74\141\x20\x63\x61\143\x68\145\144\x20\x73\165\x63\x63\x65\x73\163\146\x75\x6c\154\171\x2e", PR__MDL__OPTIMIZATION); cqemkecywkkwaaii: qaikeckkiwasykwk: goto simkiasocoimioew; case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\160\162\x6f\147\x72\x65\163\163" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), Constants::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; goto simkiasocoimioew; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); goto simkiasocoimioew; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto wqieuwguumokgyqg; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\145\162\145\x20\x69\163\x20\156\157\40\162\145\x6d\x6f\164\145\x20\x72\165\156\40\x66\157\162\x20\x70\141\164\164\x65\x72\156\56", PR__MDL__OPTIMIZATION)); goto aueiggyawkmkamum; wqieuwguumokgyqg: $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if (!($iueymcwwscwqkiyq === Constants::eyemmiwoaayukksq)) { goto wkqwywgikoyqkyeg; } $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x76\x69\x72\164\x75\141\154\x5f\142\x72\157\x77\x73\x65\162\x5f\143\x68\x65\143\153\x5f\x66\151\x6e\x69\x73\150\x65\144", $sameaqkagyqomooq); if (!($sogksuscggsicmac !== $sameaqkagyqomooq)) { goto ysggiwiksocomkek; } if (is_wp_error($sogksuscggsicmac)) { goto gkuwmiusoqwesqoo; } if (!$sogksuscggsicmac) { goto ieoiygycmseqmmgc; } $iueymcwwscwqkiyq = Constants::amcogigwsaqssuai; ieoiygycmseqmmgc: goto wmsiqkyqsiysgcyy; gkuwmiusoqwesqoo: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; wmsiqkyqsiysgcyy: ysggiwiksocomkek: wkqwywgikoyqkyeg: $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\x6c\141\164\145\163\164\137\x72\165\156" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\x6c\x61\x74\x65\163\x74\x5f\162\165\156", true) : '', "\160\141\x67\145\x73\x5f\x63\141\x63\150\145" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; aueiggyawkmkamum: goto simkiasocoimioew; case Constants::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); goto simkiasocoimioew; case Pattern::ccoesaeoiusskiew: if (!$goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { goto omekuqkuugyocmoc; } $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); if (is_wp_error($keccaugmemegoimu)) { goto qswqmgiwiyyqwioa; } $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); qswqmgiwiyyqwioa: omekuqkuugyocmoc: goto simkiasocoimioew; case Constants::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); if (is_wp_error($keccaugmemegoimu)) { goto giuswooyckooaoms; } $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); giuswooyckooaoms: goto simkiasocoimioew; case Constants::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::uucoeqmmykkwsmqc); goto simkiasocoimioew; case self::wwgqqgayyagycysu: if ($goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo)) { goto uogkcsaewswoaosw; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\157\x6d\145\x74\x68\151\x6e\x67\x20\x77\162\x6f\x6e\x67\x20\x6f\x6e\40\x70\165\162\x67\151\156\x67\40\160\141\147\x65\x73\40\143\x61\x63\x68\x65\x2e", PR__MDL__OPTIMIZATION)); goto miqmoasmioksggkm; uogkcsaewswoaosw: $keccaugmemegoimu = __("\120\141\x67\x65\163\40\x63\x61\x63\150\145\x20\x70\165\162\x67\x65\144\x20\x73\x75\143\143\145\x73\163\x66\x75\x6c\x6c\171\56", PR__MDL__OPTIMIZATION); miqmoasmioksggkm: goto simkiasocoimioew; case self::eueyiwccigugisqe: $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); goto simkiasocoimioew; } iuaeeeeggkikuiig: simkiasocoimioew: eqemoayymokeqaqi: $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; oqsecqsucukywaee: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } private function _checkLink($eouekqmooogkoqoo, array $ocqawgquwsqioses = []) { if ($ocqawgquwsqioses) { goto iqamwyasyoqsugeu; } $ocqawgquwsqioses = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); iqamwyasyoqsugeu: $ksaameoqigiaoigg = ''; if (!($iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::ogigqueukwysusii, '', true))) { goto omgkuuyoiugcymmy; } $iwywmkygwewiamwm = trailingslashit($iwywmkygwewiamwm); if (isset($ocqawgquwsqioses[$iwywmkygwewiamwm])) { goto uiqycwuommmmuowy; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\x52\x4c\40\x69\x73\40\156\x6f\x74\x20\155\141\x74\143\x68\x65\144\40\x74\x6f\40\x70\x61\164\x74\145\x72\x6e\x2e", PR__MDL__OPTIMIZATION)); goto moqcomgmwiamuomq; uiqycwuommmmuowy: $ksaameoqigiaoigg = $iwywmkygwewiamwm; moqcomgmwiamuomq: omgkuuyoiugcymmy: return $ksaameoqigiaoigg; } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { goto jkaemsuwyyoamwim; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\141\164\x74\x65\x72\x6e\x20\x61\x6c\x72\145\141\144\171\x20\x73\x65\164\x75\160\x65\144\56", PR__MDL__OPTIMIZATION)); goto suwsiaeoumiwkiqg; jkaemsuwyyoamwim: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::ogigqueukwysusii, '', true); $mokmmyiueoiqokyc = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); if ($iwywmkygwewiamwm && is_wp_error($this->_checkLink($eouekqmooogkoqoo, $mokmmyiueoiqokyc))) { goto cscskwugoamcmqyu; } $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo, $mokmmyiueoiqokyc); if (empty($awyumwiewiauosqy)) { goto yqeqouqemksasmqc; } $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[Constants::iwyueouqaqegmcas]) && $igqsaukqcqscimok[Constants::iwyueouqaqegmcas])) { goto ksoawacwkgasqgmk; } $ueeagokqmgisgauy .= "\74\x62\x72\x3e{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($igqsaukqcqscimok[Constants::iwyueouqaqegmcas])}"; ksoawacwkgasqgmk: ekmogkwmcqsykgsq: } aiwygewkmigcwusw: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x53\x6f\155\x65\x20\160\x61\x67\x65\x20\x6e\x6f\x74\40\x61\x64\144\x2e\40\x25\x73", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); goto wgaqkacekoyiwggi; yqeqouqemksasmqc: if ($this->wkagassgcaqeosio()->gqwuqkumkkkygwuw($jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto sguyyaygwyikaggk; } $ksaameoqigiaoigg = $this->wkagassgcaqeosio()->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); goto ayyyeiyaosoacoqm; sguyyaygwyikaggk: if ($iwywmkygwewiamwm) { goto kumuckkicykgwqqm; } $iwywmkygwewiamwm = array_key_first($mokmmyiueoiqokyc); kumuckkicykgwqqm: $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $iwywmkygwewiamwm); ayyyeiyaosoacoqm: wgaqkacekoyiwggi: goto emioyucskiowqumg; cscskwugoamcmqyu: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\122\x4c\40\151\x73\40\x6e\x6f\164\40\155\141\164\143\x68\145\x64\x20\x74\x6f\40\160\x61\x74\164\x65\162\156\x2e", PR__MDL__OPTIMIZATION)); emioyucskiowqumg: suwsiaeoumiwkiqg: return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { if (!(!$emyowuimauuisimy || !is_string($emyowuimauuisimy))) { goto amyaoueckysgmmas; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if (!($suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([Page::ewyamgkooeqiecwg => $sameaqkagyqomooq, Constants::ciywsqoeiymemsys => Constants::eqewsqmqmsiocaeg]))) { goto yoauoocuckogmsuw; } $emyowuimauuisimy = $iuekmkswcsacoawq->esewqawcwouwyesq($iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, Constants::auqoykcmsiauccao)); yoauoocuckogmsuw: amyaoueckysgmmas: $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x76\151\162\164\x75\x61\x6c\137\x62\162\x6f\167\x73\x65\162\137\141\x64\x64\137\x6a\x6f\x62", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (is_wp_error($sogksuscggsicmac)) { goto qiqegseqwywcmwoe; } $sogksuscggsicmac = ["\x70\x61\x67\145\163\137\x63\x61\143\150\145\x5f\163\x74\x61\164\165\163" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\160\141\147\x65\163\x5f\x63\141\143\150\145", true), "\160\x61\x74\x74\x65\x72\156\137\x70\162\157\147\x72\x65\x73\163\142\x61\162" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\x6c\x61\164\145\x73\164\x5f\x72\x75\156", true)]; goto yosyyiksyyscacus; qiqegseqwywcmwoe: $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac); if (!(false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\x63\165\162\154\40\145\x72\x72\157\x72"))) { goto koiyaaokigmamqyc; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\103\141\156\40\x6e\x6f\164\40\143\157\x6e\x6e\145\x63\x74\x20\x74\157\40\x73\x65\162\166\145\x72\x20\162\151\x67\x68\164\40\x6e\157\167\54\x20\x70\x6c\145\141\x73\145\x20\164\x72\x79\x20\x6c\x61\164\145\162\x20\157\162\40\x63\157\x6e\x74\141\143\x74\x20\x75\x73\x2e", PR__MDL__OPTIMIZATION), 500); koiyaaokigmamqyc: yosyyiksyyscacus: return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { return $this->wkagassgcaqeosio()->iwuykycuaameiqes($eouekqmooogkoqoo, $mokmmyiueoiqokyc); } }
