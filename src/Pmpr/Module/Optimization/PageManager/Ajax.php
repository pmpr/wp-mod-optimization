<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2ec2cd5b75             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\PageManager\SpeedTest\Setting as SpeedTestSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Common { use PageManagerEngineTrait; const swkaqiikoaickuui = "\x6f\160\164\151\x6d\x69\x7a\145"; const eueyiwccigugisqe = "\143\150\145\x63\x6b\137\154\151\x6e\x6b"; const wwgqqgayyagycysu = "\x70\x75\x72\x67\x65\137\143\141\143\x68\x65"; const aeksqkkekigwssku = Optimization::kgswyesggeyekgmg . "\x73\x65\164\x75\x70\x5f\160\141\x74\x74\145\162\156\137\141\143\164\x69\x6f\x6e"; const quuasuseuccsemsw = Optimization::kgswyesggeyekgmg . "\x61\143\x74\151\x76\145\x5f\x70\x61\x74\164\x65\162\x6e\x5f\x61\143\x74\x69\157\x6e"; const qskskgmuqiggaqeg = Optimization::kgswyesggeyekgmg . "\x63\x68\x65\x63\153\137\x70\141\x74\164\145\x72\x6e\137\162\165\x6e\x5f\141\143\164\x69\x6f\x6e"; const kaqawyqaekuookgi = Optimization::kgswyesggeyekgmg . "\160\x61\147\145\x73\137\143\141\x63\150\x65\137\163\164\141\x74\x75\x73"; const kusgmosaoigiukgi = Optimization::kgswyesggeyekgmg . "\x72\145\x6f\x70\x74\151\x6d\x69\x7a\x65\x5f\160\x61\x74\164\x65\x72\x6e\137\x61\x63\164\x69\x6f\x6e"; const wegmeawoaymsqkyi = Optimization::kgswyesggeyekgmg . "\144\145\x61\x63\x74\x69\166\141\x74\145\x5f\160\x61\164\x74\x65\x72\x6e\x5f\141\143\x74\151\x6f\x6e"; const maqcykaweqimuomu = Optimization::kgswyesggeyekgmg . "\143\150\x65\x63\153\x5f\143\x61\x6e\x64\151\x64\141\x74\145\x5f\165\162\x6c\137\x61\143\164\151\157\x6e"; const ggmmioeoauiyccec = Optimization::kgswyesggeyekgmg . "\x70\141\147\145\163\137\x63\x61\143\150\145\x5f\160\162\157\x67\x72\x65\163\x73"; const aikyaygyasegygma = Optimization::kgswyesggeyekgmg . "\x70\141\x74\x74\x65\162\156\x5f\155\141\x6e\165\x61\x6c\x5f\x6f\160\x74\151\x6d\x69\x7a\x65\x5f\x61\x63\164\151\157\x6e"; const esiucesqiemeickk = Optimization::kgswyesggeyekgmg . "\160\x75\162\x67\145\x5f\160\141\164\x74\145\162\156\x5f\160\x61\147\145\163\137\x63\141\143\x68\145\137\x61\143\164\151\157\x6e"; const sggmuowkoiiuacig = Optimization::kgswyesggeyekgmg . "\x73\160\145\x65\x64\137\164\145\163\x74\137\156\157\164\137\144\151\163\x70\x61\143\x68\141\142\154\x65\137\x66\x69\170\145\x64"; const awqksmkmsquoymem = Optimization::kgswyesggeyekgmg . "\x63\150\141\156\147\145\x5f\x70\x61\x67\x65\x5f\163\164\x61\x74\x75\x73"; const imigmiemwmuayaca = Optimization::kgswyesggeyekgmg . "\143\x68\x61\156\x67\x65\x5f\x70\141\147\x65\x5f\151\155\x70\157\x72\x74\x61\156\164\137\x73\164\141\x74\165\x73"; const uyuegiyaymqqkcwa = Optimization::kgswyesggeyekgmg . "\x63\150\x61\x6e\x67\145\137\x70\x61\x67\x65\x5f\x73\x70\x65\x65\144\x5f\164\145\163\x74\137\x63\141\156\x64\151\x64\141\x74\x65\137\x73\x74\x61\x74\165\x73"; const ccyqqagwskwauoem = ["\x63\150\x61\156\147\x65\137\160\x61\x67\x65\137\163\160\145\x65\x64\x5f\x74\145\163\x74\x5f\143\141\x6e\144\151\144\x61\x74\145\x5f\163\x74\x61\x74\165\163" => self::uyuegiyaymqqkcwa, "\x63\x68\141\156\x67\145\137\160\x61\x67\x65\137\x69\155\x70\x6f\x72\x74\x61\156\164\x5f\x73\x74\x61\x74\165\163" => self::imigmiemwmuayaca, "\x70\x75\162\147\x65\x5f\160\x61\x74\x74\x65\162\x6e\137\x70\141\147\x65\x73\137\143\x61\143\x68\145" => self::esiucesqiemeickk, "\x70\x61\x74\164\x65\162\x6e\x5f\155\141\x6e\x75\x61\154\137\x6f\x70\x74\x69\155\x69\x7a\x65" => self::aikyaygyasegygma, "\x6e\157\x74\137\x64\x69\163\x70\x61\143\x68\x61\x62\154\x65\137\146\x69\x78\x65\144" => self::sggmuowkoiiuacig, "\x70\x61\x67\x65\x73\137\143\x61\x63\150\145\137\160\x72\x6f\147\162\x65\163\x73" => self::ggmmioeoauiyccec, "\143\150\145\143\x6b\137\143\x61\x6e\x64\x69\x64\141\164\x65\x5f\x6c\151\x6e\x6b" => self::maqcykaweqimuomu, "\143\150\x61\156\147\x65\137\x70\141\x67\145\137\163\164\x61\164\165\163" => self::awqksmkmsquoymem, "\x70\x61\147\x65\163\137\x63\x61\x63\x68\x65\137\x73\164\141\x74\x75\x73" => self::kaqawyqaekuookgi, "\144\145\141\143\164\151\166\x61\x74\145\137\160\x61\164\x74\145\162\156" => self::wegmeawoaymsqkyi, "\162\x65\x6f\x70\x74\x69\155\151\172\x65\137\x70\141\164\164\145\x72\156" => self::kusgmosaoigiukgi, "\x63\x68\145\143\153\137\160\141\164\164\145\x72\x6e\137\162\165\156" => self::qskskgmuqiggaqeg, "\141\143\x74\151\166\x61\164\145\x5f\160\141\164\164\145\x72\156" => self::quuasuseuccsemsw, "\163\145\x74\x75\x70\x5f\160\x61\x74\164\145\x72\156" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\143\147\x63\x71\155\x69\157\153\163\171\x77\153\145\x6b\141\x6f"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\x63\x69\x77\167\x6f\157\x77\167\x63\x73\143\163\143\x67\x75\x67"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\165\x77\155\x71\x61\x73\x6b\143\167\141\155\151\x67\151\x6d\x65"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\147\161\x75\x63\x79\161\161\x6b\147\x73\x71\x79\163\141\157\151"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\x69\167\x75\141\161\157\163\x6d\x71\155\167\155\145\157\151\167"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\x6d\x77\x75\x77\171\151\x61\147\x65\145\x61\145\157\171\165\x79"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\x65\153\x61\x6d\147\x65\161\157\147\157\x73\147\147\x65\157\141"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\141\x61\145\155\143\x73\153\145\x6d\147\171\x61\x6f\141\157\167"])->koaegcswmcqsiykq(self::aikyaygyasegygma, [$this, "\x71\167\x79\x67\x63\x67\165\x79\x67\x75\x63\151\167\157\153\165"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\x73\145\x73\x61\x71\153\145\163\141\x65\141\145\x63\x6f\141\x6f"]); $this->koaegcswmcqsiykq(self::sggmuowkoiiuacig, [$this, "\155\147\x63\145\153\161\x65\x73\143\161\155\147\x63\x6b\155\171"]); $this->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\x63\171\x73\x6d\x63\171\143\x6b\165\x75\145\157\141\x69\x61\147"], 10, 0)->koaegcswmcqsiykq(self::imigmiemwmuayaca, [$this, "\x67\143\x69\143\x65\x73\x77\147\151\x73\145\153\151\x63\147\x69"], 10, 0)->koaegcswmcqsiykq(self::uyuegiyaymqqkcwa, [$this, "\x6f\153\153\171\x73\x65\x79\x65\171\x67\x61\163\145\151\x6f\161"], 10, 0); } public function mgcekqescqmgckmy() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto auaywaskqooasiuq; } $keccaugmemegoimu = __("\131\157\165\40\x68\x61\x76\145\x20\x6e\x6f\40\x70\x65\x72\x6d\x69\163\163\151\157\x6e\40\x74\x6f\x20\x64\157\x20\164\150\x69\x73\56", PR__MDL__OPTIMIZATION); goto ewoqyogcaksucksk; auaywaskqooasiuq: $occymigcemkqucuw = true; Setting::symcgieuakksimmu()->qioweyiqewmsocem(SpeedTestSetting::quyascocmiiossme, false, false); $keccaugmemegoimu = __("\x53\160\145\145\x64\40\124\x65\163\164\40\x66\165\x6e\143\x74\x69\x6f\156\141\x6c\x69\164\171\x20\x66\x6f\162\x20\143\141\156\x64\x69\144\x61\164\x65\40\160\141\147\145\x73\x20\162\145\x73\165\155\145\144\56", PR__MDL__OPTIMIZATION); ewoqyogcaksucksk: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function cysmcyckuueoaiag() { $this->ssgwweggiwmeowkw(Constants::ciywsqoeiymemsys, Page::symcgieuakksimmu()->uqeoyqiwywwmsiew(Constants::ciywsqoeiymemsys)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)); } public function gciceswgisekicgi() { $this->ssgwweggiwmeowkw(Page::uyeaawkisqygakmy, [0 => __("\x4e\157\162\155\x61\x6c", PR__MDL__OPTIMIZATION), 1 => __("\111\x6d\160\x6f\162\164\141\156\x74", PR__MDL__OPTIMIZATION)]); } public function okkyseyeygaseioq() { $this->ssgwweggiwmeowkw(Page::aewquksqwqiawiei, [0 => __("\x44\x6f\156\164\x20\x54\141\153\145\40\x53\160\x65\x65\x64\x20\124\x65\163\164", PR__MDL__OPTIMIZATION), 1 => __("\124\x61\x6b\145\x20\x53\x70\x65\x65\x64\40\124\145\163\164", PR__MDL__OPTIMIZATION)]); } public function ssgwweggiwmeowkw($qgoqiacsiccwoawi = Constants::ciywsqoeiymemsys, $oqseeekuqisekiwy = []) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto kmiqskugkmaiugae; } $keccaugmemegoimu = __("\x59\x6f\165\40\150\x61\x76\x65\40\156\x6f\x20\160\145\162\155\151\x73\x73\x69\x6f\x6e\x20\x74\x6f\40\144\x6f\40\164\x68\x69\163\56", PR__MDL__OPTIMIZATION); goto cqemkecywkkwaaii; kmiqskugkmaiugae: $qkcoyiyeuoyyoocy = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::imywcsggckkcywgk); if ($qkcoyiyeuoyyoocy) { goto simkiasocoimioew; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto iuaeeeeggkikuiig; simkiasocoimioew: $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $iueymcwwscwqkiyq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ciywsqoeiymemsys, 0); if (isset($oqseeekuqisekiwy[$iueymcwwscwqkiyq])) { goto qgyaeoqgekocwkmw; } $keccaugmemegoimu = __("\x59\157\x75\162\x20\163\x75\x62\x6d\x69\163\x73\151\x6f\156\40\163\164\x61\164\165\x73\x20\x69\x73\40\x6e\x6f\164\x20\x61\40\166\141\x6c\151\144\x20\163\164\x61\x74\x75\163\56", PR__MDL__OPTIMIZATION); goto sieykcqauaygcais; qgyaeoqgekocwkmw: $sogksuscggsicmac = $iuekmkswcsacoawq->wqikesawekycweoi($qkcoyiyeuoyyoocy, [$qgoqiacsiccwoawi => $iueymcwwscwqkiyq]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto wgeueumgacuuuama; } $keccaugmemegoimu = $sogksuscggsicmac[Constants::iwyueouqaqegmcas]; goto yukacyeckkwagusw; wgeueumgacuuuama: $occymigcemkqucuw = true; $keccaugmemegoimu = sprintf(__("\x50\141\147\x65\x20\163\x74\x61\164\165\x73\40\x63\150\x61\156\x67\x65\x64\40\164\x6f\40\x25\x73\x20\x73\x75\x63\143\145\163\x73\146\165\154\x6c\x79\56", PR__MDL__OPTIMIZATION), $oqseeekuqisekiwy[$iueymcwwscwqkiyq]); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\160\x75\162\147\x65\137\x65\x6c\x65\x63\164\x65\144\x5f\x70\141\147\145\x5f\x68\164\x6d\x6c\x5f\x63\x61\x63\x68\x65", $qkcoyiyeuoyyoocy); yukacyeckkwagusw: sieykcqauaygcais: iuaeeeeggkikuiig: cqemkecywkkwaaii: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function qwygcguyguciwoku() { $this->cgywqskcmcgkwueu(self::aikyaygyasegygma); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(Pattern::ccoesaeoiusskiew); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(Constants::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(Constants::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(Constants::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto moqcomgmwiamuomq; } $keccaugmemegoimu = __("\131\157\165\x20\x68\141\166\x65\40\x6e\157\40\160\x65\x72\x6d\151\x73\163\x69\157\x6e\40\164\157\40\x64\157\40\164\x68\x69\x73\56", PR__MDL__OPTIMIZATION); goto omgkuuyoiugcymmy; moqcomgmwiamuomq: $keccaugmemegoimu = false; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($sameaqkagyqomooq)) { goto iqamwyasyoqsugeu; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\141\164\164\x65\x72\x6e\x20\x4e\157\x74\x20\106\x6f\x75\156\144", PR__MDL__OPTIMIZATION)); goto uiqycwuommmmuowy; iqamwyasyoqsugeu: switch ($aiamqeawckcsuaou) { case self::aikyaygyasegygma: if ($goqqimcssiyagkwy->iwoekuysekysqmke()) { goto wmsiqkyqsiysgcyy; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\x61\164\164\x65\x72\156\x20\155\141\156\x75\141\154\40\157\160\x74\151\155\x69\x7a\145\x20\156\157\x74\x20\141\166\x61\151\154\x61\142\x6c\145\x20\162\151\147\x68\164\x20\156\x6f\x77\x21", PR__MDL__OPTIMIZATION)); goto ysggiwiksocomkek; wmsiqkyqsiysgcyy: $smgooosyoeqwcaeg = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::qmwqkaeamecekiso); if ($smgooosyoeqwcaeg) { goto ieoiygycmseqmmgc; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\112\x53\117\116", PR__MDL__OPTIMIZATION)); goto gkuwmiusoqwesqoo; ieoiygycmseqmmgc: $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\166\151\162\x74\165\141\x6c\137\142\x72\x6f\x77\x73\145\162\x5f\x63\141\x63\150\x65\137\162\x65\x73\x75\x6c\x74", $sameaqkagyqomooq, wp_unslash($smgooosyoeqwcaeg)); $keccaugmemegoimu = __("\120\141\x74\x74\145\162\x6e\40\144\x61\164\141\40\x63\x61\143\150\x65\x64\x20\x73\165\x63\x63\x65\x73\163\x66\165\154\x6c\171\x2e", PR__MDL__OPTIMIZATION); gkuwmiusoqwesqoo: ysggiwiksocomkek: goto wcioaoeiiawwqqqq; case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\160\x72\x6f\x67\x72\145\163\x73" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), Constants::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; goto wcioaoeiiawwqqqq; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); goto wcioaoeiiawwqqqq; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto giuswooyckooaoms; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\x68\145\x72\145\40\x69\163\x20\156\157\40\162\145\155\157\x74\145\x20\x72\165\156\40\x66\157\x72\x20\x70\x61\164\164\145\162\156\56", PR__MDL__OPTIMIZATION)); goto uogkcsaewswoaosw; giuswooyckooaoms: $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if (!($iueymcwwscwqkiyq === Constants::eyemmiwoaayukksq)) { goto omekuqkuugyocmoc; } $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\166\x69\162\x74\x75\x61\154\137\x62\x72\157\x77\x73\145\x72\137\143\150\x65\143\x6b\137\146\x69\156\151\163\x68\145\144", $sameaqkagyqomooq); if (!($sogksuscggsicmac !== $sameaqkagyqomooq)) { goto qswqmgiwiyyqwioa; } if (is_wp_error($sogksuscggsicmac)) { goto wqieuwguumokgyqg; } if (!$sogksuscggsicmac) { goto wkqwywgikoyqkyeg; } $iueymcwwscwqkiyq = Constants::amcogigwsaqssuai; wkqwywgikoyqkyeg: goto aueiggyawkmkamum; wqieuwguumokgyqg: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; aueiggyawkmkamum: qswqmgiwiyyqwioa: omekuqkuugyocmoc: $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\x6c\x61\164\x65\x73\164\x5f\162\165\x6e" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\x6c\141\164\x65\x73\164\x5f\x72\x75\156", true) : '', "\160\141\147\145\163\x5f\143\141\143\x68\x65" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; uogkcsaewswoaosw: goto wcioaoeiiawwqqqq; case Constants::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); goto wcioaoeiiawwqqqq; case Pattern::ccoesaeoiusskiew: if (!$goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { goto cykaikwsaskgeemo; } $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); if (is_wp_error($keccaugmemegoimu)) { goto miqmoasmioksggkm; } $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); miqmoasmioksggkm: cykaikwsaskgeemo: goto wcioaoeiiawwqqqq; case Constants::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); if (is_wp_error($keccaugmemegoimu)) { goto eqemoayymokeqaqi; } $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); eqemoayymokeqaqi: goto wcioaoeiiawwqqqq; case Constants::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::uucoeqmmykkwsmqc); goto wcioaoeiiawwqqqq; case self::wwgqqgayyagycysu: if ($goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo)) { goto keewmqmgqegumiwa; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\x6f\155\145\x74\x68\x69\156\147\40\167\x72\157\156\147\x20\x6f\x6e\x20\160\165\x72\147\151\156\147\x20\x70\x61\147\x65\163\40\143\141\x63\150\x65\x2e", PR__MDL__OPTIMIZATION)); goto oqsecqsucukywaee; keewmqmgqegumiwa: $keccaugmemegoimu = __("\x50\141\147\145\163\x20\143\x61\143\x68\145\40\x70\165\x72\x67\145\x64\x20\163\165\143\143\145\x73\x73\x66\165\x6c\154\x79\x2e", PR__MDL__OPTIMIZATION); oqsecqsucukywaee: goto wcioaoeiiawwqqqq; case self::eueyiwccigugisqe: $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); goto wcioaoeiiawwqqqq; } qaikeckkiwasykwk: wcioaoeiiawwqqqq: uiqycwuommmmuowy: $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; omgkuuyoiugcymmy: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } private function _checkLink($eouekqmooogkoqoo, array $ocqawgquwsqioses = []) { if ($ocqawgquwsqioses) { goto kumuckkicykgwqqm; } $ocqawgquwsqioses = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); kumuckkicykgwqqm: $ksaameoqigiaoigg = ''; if (!($iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::ogigqueukwysusii, '', true))) { goto aiwygewkmigcwusw; } $iwywmkygwewiamwm = trailingslashit($iwywmkygwewiamwm); if (isset($ocqawgquwsqioses[$iwywmkygwewiamwm])) { goto sguyyaygwyikaggk; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\122\x4c\x20\151\163\x20\x6e\x6f\x74\40\x6d\x61\x74\143\150\x65\x64\x20\x74\x6f\x20\x70\141\164\164\x65\x72\156\x2e", PR__MDL__OPTIMIZATION)); goto ayyyeiyaosoacoqm; sguyyaygwyikaggk: $ksaameoqigiaoigg = $iwywmkygwewiamwm; ayyyeiyaosoacoqm: aiwygewkmigcwusw: return $ksaameoqigiaoigg; } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { goto koiyaaokigmamqyc; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\141\164\164\145\x72\x6e\x20\x61\x6c\162\x65\x61\144\x79\40\x73\145\164\x75\160\145\144\x2e", PR__MDL__OPTIMIZATION)); goto qiqegseqwywcmwoe; koiyaaokigmamqyc: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::ogigqueukwysusii, '', true); $mokmmyiueoiqokyc = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); if ($iwywmkygwewiamwm && is_wp_error($this->_checkLink($eouekqmooogkoqoo, $mokmmyiueoiqokyc))) { goto yoauoocuckogmsuw; } $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo, $mokmmyiueoiqokyc); if (empty($awyumwiewiauosqy)) { goto jkaemsuwyyoamwim; } $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[Constants::iwyueouqaqegmcas]) && $igqsaukqcqscimok[Constants::iwyueouqaqegmcas])) { goto emioyucskiowqumg; } $ueeagokqmgisgauy .= "\74\x62\162\x3e{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($igqsaukqcqscimok[Constants::iwyueouqaqegmcas])}"; emioyucskiowqumg: cscskwugoamcmqyu: } wgaqkacekoyiwggi: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x53\x6f\x6d\x65\40\x70\141\147\x65\x20\x6e\x6f\x74\40\x61\x64\144\x2e\x20\x25\163", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); goto suwsiaeoumiwkiqg; jkaemsuwyyoamwim: if ($this->wkagassgcaqeosio()->gqwuqkumkkkygwuw($jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto ksoawacwkgasqgmk; } $ksaameoqigiaoigg = $this->wkagassgcaqeosio()->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); goto yqeqouqemksasmqc; ksoawacwkgasqgmk: if ($iwywmkygwewiamwm) { goto ekmogkwmcqsykgsq; } $iwywmkygwewiamwm = array_key_first($mokmmyiueoiqokyc); ekmogkwmcqsykgsq: $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $iwywmkygwewiamwm); yqeqouqemksasmqc: suwsiaeoumiwkiqg: goto amyaoueckysgmmas; yoauoocuckogmsuw: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\x52\114\x20\151\163\40\x6e\157\x74\40\155\141\x74\x63\x68\145\144\40\164\x6f\x20\x70\x61\x74\164\x65\x72\156\x2e", PR__MDL__OPTIMIZATION)); amyaoueckysgmmas: qiqegseqwywcmwoe: return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { if (!(!$emyowuimauuisimy || !is_string($emyowuimauuisimy))) { goto kwcscewawgicomok; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if (!($suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([Page::ewyamgkooeqiecwg => $sameaqkagyqomooq, Constants::ciywsqoeiymemsys => Constants::eqewsqmqmsiocaeg]))) { goto yosyyiksyyscacus; } $emyowuimauuisimy = $iuekmkswcsacoawq->esewqawcwouwyesq($iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, Constants::auqoykcmsiauccao)); yosyyiksyyscacus: kwcscewawgicomok: $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\166\x69\162\x74\165\x61\x6c\137\142\162\157\x77\x73\145\162\137\x61\x64\144\x5f\152\x6f\142", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (is_wp_error($sogksuscggsicmac)) { goto aqeyqwuywqcmuoce; } $sogksuscggsicmac = ["\x70\x61\x67\x65\163\137\x63\x61\x63\x68\145\137\163\164\x61\164\165\163" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\160\x61\147\145\163\137\x63\141\143\150\x65", true), "\x70\141\x74\x74\145\x72\x6e\x5f\x70\162\x6f\147\x72\x65\x73\163\142\x61\162" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\154\141\164\x65\x73\x74\x5f\x72\x75\x6e", true)]; goto aymoguycgmuggcik; aqeyqwuywqcmuoce: $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac); if (!(false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\x63\x75\162\154\40\145\x72\162\157\x72"))) { goto kikkkocywiyuyuqw; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\103\141\156\40\x6e\157\x74\x20\x63\x6f\156\x6e\x65\143\x74\40\164\x6f\x20\163\x65\162\166\x65\x72\40\162\151\x67\x68\164\x20\x6e\157\x77\54\x20\160\x6c\x65\141\x73\x65\x20\x74\x72\x79\x20\x6c\141\x74\145\x72\x20\157\x72\x20\143\x6f\156\x74\x61\143\x74\x20\x75\163\56", PR__MDL__OPTIMIZATION), 500); kikkkocywiyuyuqw: aymoguycgmuggcik: return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { return $this->wkagassgcaqeosio()->iwuykycuaameiqes($eouekqmooogkoqoo, $mokmmyiueoiqokyc); } }
