<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c3699ff30b7             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Page; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use stdClass; class Ajax extends Common { const PREFIX = self::wowuwuigyoceikas . "\137\154\x69\143\x65\156\x73\145"; const ucwkciyokauwsyes = self::PREFIX . "\x5f\x63\150\145\x63\153\137\142\x75\x64\x67\145\x74"; const ikageqoesymqusss = self::PREFIX . "\x5f\147\x65\x74\137\160\157\163\164\163\x5f\x62\x79\137\162\x75\x6c\145\x73"; const qeyyssmaimicgksm = self::PREFIX . "\137\141\x64\x64\137\x70\x61\147\145\163\x5f\x62\171\137\162\x75\154\145\x73"; const awqksmkmsquoymem = self::PREFIX . "\137\x63\150\x61\156\x67\x65\x5f\160\x61\x67\145\x5f\163\164\x61\x74\165\163"; const ygggeyeauuuaqwou = self::wowuwuigyoceikas . "\137\x6e\145\x78\x74\x5f\x63\x68\145\x63\x6b\137\x62\x75\x64\147\x65\x74"; const myikkigscysoykgy = ["\147\145\x74\137\160\x6f\x73\164\163" => self::ikageqoesymqusss, "\141\x64\x64\x5f\160\x61\x67\145\x73" => self::qeyyssmaimicgksm, "\143\x68\x65\143\x6b\137\142\x75\144\x67\x65\x74" => self::ucwkciyokauwsyes, "\143\150\141\156\147\145\137\163\164\141\x74\x75\163" => self::awqksmkmsquoymem]; protected ?API $api = null; public function __construct() { $this->api = API::symcgieuakksimmu(); parent::__construct(); } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ucwkciyokauwsyes, [$this, "\x71\x77\x6d\167\x65\167\x69\x71\145\143\167\151\145\157\x75\x65"])->koaegcswmcqsiykq(self::ikageqoesymqusss, [$this, "\x75\171\145\143\171\x73\157\x73\x61\163\171\155\171\171\165\147"])->koaegcswmcqsiykq(self::qeyyssmaimicgksm, [$this, "\x75\x67\x67\x77\x63\x71\x75\155\x6f\141\163\163\x65\163\x75\x65"])->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\143\x79\x73\155\143\x79\143\153\165\165\x65\x6f\x61\151\141\147"]); parent::wigskegsqequoeks(); } public function auamgqiwisysomsa() : ?API { return $this->api; } public function qwmwewiqecwieoue() { $uuyoeicyoayimaoa = 1; $kigowwqauiumummw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto qoaawmmcqyacokws; } $ccosicygoaweskom = DecoratorOption::get(self::ygggeyeauuuaqwou, false); if (!$ccosicygoaweskom || ManipulateDatetime::wguceomqgwouoyks($ccosicygoaweskom)) { goto uugiuqkesegaamqw; } $uamcoiueqaamsqma = sprintf(__("\x50\x6c\145\x61\x73\145\40\x74\x72\171\40\141\147\141\151\156\40\141\x66\164\x65\x72\x20\45\x73\40\x68\157\165\162", PR__PKG__OPTIMIZATION), $this->msywmyaoqmaegsuy($uuyoeicyoayimaoa)); goto ykcmomsiayaymysm; uugiuqkesegaamqw: $kigowwqauiumummw = $this->yoeoaweeseqiyesg($uamcoiueqaamsqma); if (!$kigowwqauiumummw) { goto seyygcwcaogkmaqe; } DecoratorOption::update(self::ygggeyeauuuaqwou, date("\x59\55\155\55\x64\40\x48\x3a\151\x3a\163", strtotime("\53{$uuyoeicyoayimaoa}\x20\150\157\165\162"))); seyygcwcaogkmaqe: ykcmomsiayaymysm: qoaawmmcqyacokws: $this->uaggqsoeugksgooc($kigowwqauiumummw, $uamcoiueqaamsqma); } public function uyecysosasymyyug() { $occymigcemkqucuw = false; $keccaugmemegoimu = []; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto kcwgiwimgqesukqu; } $suuagcecoyuweoqk = []; $acqqmqmcquukaqsc = ManipulateServer::ayueggmoqeeukqmq("\162\165\x6c\145\x73", []); $keccaugmemegoimu = $this->ioucsiguaciwkgqc($acqqmqmcquukaqsc, $uamcoiueqaamsqma); foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { $sqsyqsscqaauwyyy = ManipulateArray::get($igqsaukqcqscimok, "\x75\163\145\x64"); $ocqawgquwsqioses = ManipulateArray::unset($igqsaukqcqscimok, "\x70\141\x67\x65\163"); if (!($sqsyqsscqaauwyyy > 0 && $ocqawgquwsqioses)) { goto eiecgqokmuekaesc; } $suuagcecoyuweoqk = array_merge($suuagcecoyuweoqk, array_slice($ocqawgquwsqioses, 0, $sqsyqsscqaauwyyy)); eiecgqokmuekaesc: cwmuqmoeauqcewoy: } uwyeycaywowwiquu: if ($suuagcecoyuweoqk) { goto ggsugekocmsukuci; } $uamcoiueqaamsqma = __("\x4e\x6f\x20\162\145\163\165\154\x74\40\146\157\165\x6e\144\x20\164\x6f\x20\163\150\157\x77\x2c\x20\160\154\145\x61\x73\145\x20\143\150\x61\156\x67\x65\40\162\x75\154\145\x73\40\141\x6e\x64\x20\164\162\x79\x20\141\147\x61\151\156\56", PR__PKG__OPTIMIZATION); goto ceosmkqgqgwsowwg; ggsugekocmsukuci: $occymigcemkqucuw = true; $keccaugmemegoimu["\x6c\151\163\164"] = $this->iuygowkemiiwqmiw("\164\x61\x62\154\x65", ["\x69\x74\145\x6d\163" => $suuagcecoyuweoqk, "\x61\x63\164\x69\157\156\x73" => ["\162\145\155\x6f\x76\x65" => ["\x74\151\164\154\x65" => __("\x52\145\x6d\157\x76\x65", PR__PKG__OPTIMIZATION), "\151\143\157\x6e" => IconFontawesomeInterface::cugwqwigakiwyiuk, "\141\x74\164\162\x73" => ["\143\x6c\141\x73\x73" => "\x72\x75\154\145\55\x72\x65\x6d\157\166\145\x2d\x61\143\164\x69\157\156\40\142\165\164\x74\157\156"]]], "\x74\151\164\154\145\163" => ["\164\151\164\x6c\x65" => __("\124\151\x74\x6c\x65", PR__PKG__OPTIMIZATION), "\x70\x61\147\x65\137\164\x79\x70\x65" => __("\x50\x61\147\145\x20\124\171\x70\145", PR__PKG__OPTIMIZATION), "\x61\x63\164\151\157\x6e\x73" => __("\101\x63\164\151\157\156\163", PR__PKG__OPTIMIZATION)]]); ceosmkqgqgwsowwg: kcwgiwimgqesukqu: if ($occymigcemkqucuw) { goto wicuauokauykwoeu; } $keccaugmemegoimu = $uamcoiueqaamsqma; wicuauokauykwoeu: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function uggwcqumoassesue() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto cuayqmasemsqsume; } $eciuecguuowmeyqg = []; $ocqawgquwsqioses = ManipulateServer::ayueggmoqeeukqmq(self::yusuiaeueqwieqqq, []); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $gqswsiquqaayuakq = $this->ewcikckouwmuqkms(); if ($ocqawgquwsqioses && is_array($ocqawgquwsqioses)) { goto gcqssckowmywoesw; } $uamcoiueqaamsqma = __("\120\141\x67\145\x20\x6c\151\163\164\x20\151\x73\40\145\x6d\x70\164\171\54\40\160\154\x65\x61\163\x65\40\162\x65\x64\145\146\x69\x6e\x65\x20\x70\x61\147\145\x73\x2e", PR__PKG__OPTIMIZATION); goto eekkcooqswqouoei; gcqssckowmywoesw: foreach ($ocqawgquwsqioses as $momcykaoccoymeig => $suaemuyiacqyugsm) { if (!($momcykaoccoymeig >= $gqswsiquqaayuakq)) { goto oksqsucimimsswcg; } goto gcecieuocqawmgci; oksqsucimimsswcg: $sqeykgyoooqysmca = ManipulateArray::get($suaemuyiacqyugsm, self::squoamkioomemiyi); $ccamueccusigaaio = ManipulateArray::get($suaemuyiacqyugsm, self::mgsccwumkcawaqcy); if (!($ccamueccusigaaio && $sqeykgyoooqysmca)) { goto icoiqskygugkgmkm; } $myagqecycsaiyqsk = $jwsqucqyaoaasykk->syoquewuemwigaaw($ccamueccusigaaio, $sqeykgyoooqysmca); $icwicymcioeyeyek = []; if ($myagqecycsaiyqsk) { goto gqeoaceyoiicoaec; } $icwicymcioeyeyek = [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::iiooageieusuyomy => $jwsqucqyaoaasykk::cwoackywkgsameww, self::mgsccwumkcawaqcy => $ccamueccusigaaio, self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]; gqeoaceyoiicoaec: if (!$icwicymcioeyeyek) { goto maguoggkqamaiuag; } if ($this->auamgqiwisysomsa()->auuqggkaeoomcksu($sqeykgyoooqysmca, $ccamueccusigaaio, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto qosswumywsaeyqus; } switch ($kgicwkyskyemksca) { case "\157\x75\164\x5f\157\146\x5f\x62\x75\144\x67\145\164": if ($momcykaoccoymeig == 0) { goto gscyiqmmegqmqcoe; } $uamcoiueqaamsqma = sprintf(__("\45\163\40\x6f\x66\x20\171\157\x75\162\x20\162\145\x71\x75\145\x73\164\145\144\x20\x70\141\147\145\x73\x20\141\x64\x64\x65\x64\54\40\164\150\145\40\x72\145\x6d\141\x69\x6e\x73\40\x61\162\145\40\156\x6f\164\40\x61\154\154\x6f\167\x20\x74\157\40\x61\144\144\x2e", PR__PKG__OPTIMIZATION), $this->msywmyaoqmaegsuy($momcykaoccoymeig)); goto mieoguuqiwqioeqa; gscyiqmmegqmqcoe: $uamcoiueqaamsqma = __("\123\157\x72\x72\x79\x2c\x20\x79\x6f\165\x72\40\162\x65\x71\x75\145\163\164\145\x64\40\160\x72\157\143\x65\163\163\40\164\x65\162\x6d\151\x6e\x61\164\145\144\54\40\142\145\x63\x61\165\163\x65\x20\x79\x6f\165\40\141\162\x65\40\157\165\164\40\157\146\x20\142\165\144\147\x65\164\56", PR__PKG__OPTIMIZATION); mieoguuqiwqioeqa: goto cciakcwuweqmcose; } uckusgwkoycmkeam: cciakcwuweqmcose: goto gcecieuocqawmgci; goto swicauyqusmgeccu; qosswumywsaeyqus: $sogksuscggsicmac = $jwsqucqyaoaasykk->gscuuyuyauokoyuo($icwicymcioeyeyek); if (!ManipulateArray::get($sogksuscggsicmac, self::ckcawaoawwioqecq)) { goto kkckyqmcyussauma; } $eciuecguuowmeyqg[] = ManipulateArray::get($sogksuscggsicmac, $jwsqucqyaoaasykk->kumuygiiqswoyasy()); goto ikukqooiowqywyqo; kkckyqmcyussauma: $uamcoiueqaamsqma .= print_r(ManipulateArray::get($sogksuscggsicmac, self::iwyueouqaqegmcas), true); ikukqooiowqywyqo: swicauyqusmgeccu: maguoggkqamaiuag: icoiqskygugkgmkm: msmmiaumiasmsiog: } gcecieuocqawmgci: if (!$eciuecguuowmeyqg) { goto kocaieyauyiqmyiy; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137\x70\165\162\x67\x65\x5f\x70\x61\x67\x65\x73"), $eciuecguuowmeyqg); kocaieyauyiqmyiy: eekkcooqswqouoei: cuayqmasemsqsume: if ($uamcoiueqaamsqma) { goto igmawmwssyskqqag; } $uamcoiueqaamsqma = __("\x50\141\x67\x65\163\40\141\144\x64\x65\144\40\x73\x75\x63\x63\x65\163\163\x66\165\x6c\154\171\56", PR__PKG__OPTIMIZATION); $occymigcemkqucuw = true; igmawmwssyskqqag: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cysmcyckuueoaiag() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto sgkqgucguyccaaki; } $suaemuyiacqyugsm = ManipulateServer::ayueggmoqeeukqmq("\x70\x61\147\x65\137\151\x64"); $iueymcwwscwqkiyq = ManipulateServer::ayueggmoqeeukqmq("\x70\x61\147\145\137\163\164\141\164\165\163"); if ($suaemuyiacqyugsm && $iueymcwwscwqkiyq) { goto okuqsqaiwwiigmyu; } $uamcoiueqaamsqma = __("\x6d\x69\163\x73\151\156\147\40\160\141\x72\141\x6d\145\x74\145\x72\54\x20\162\x65\161\165\x65\x73\164\x20\151\163\40\x6e\x6f\164\40\166\x61\x6c\x69\144\56", PR__PKG__OPTIMIZATION); goto ksiwgckusukisueg; okuqsqaiwwiigmyu: try { $meywaqqsugaoeyys = Model::symcgieuakksimmu(); $wkawwaegamqisugs = $meywaqqsugaoeyys->akkkoiiymmamsauc($suaemuyiacqyugsm); if ($wkawwaegamqisugs instanceof stdClass) { goto gaskcgoeywuyukke; } $uamcoiueqaamsqma = __("\122\x65\161\x75\151\x72\x65\40\160\x61\162\x61\155\145\164\145\x72\40\x6e\x6f\x74\x20\x66\157\165\x6e\x64\x2c\40\162\x65\154\x6f\x61\144\x20\160\141\147\x65\x20\141\x6e\x64\40\164\x72\171\x20\141\147\141\x69\156\56", PR__PKG__OPTIMIZATION); goto gqaqamewqeaqwcia; gaskcgoeywuyukke: if (ManipulateArray::get($wkawwaegamqisugs, self::ciywsqoeiymemsys) === self::wiewguakgwmoqaea && $this->ewcikckouwmuqkms() <= 0) { goto eussqkkimciywios; } if (!$meywaqqsugaoeyys->ayakoikewusskayc($wkawwaegamqisugs, $iueymcwwscwqkiyq, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto iomwkkieqcswkkaw; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\160\165\x72\x67\145\x5f\x70\141\x67\x65"), $suaemuyiacqyugsm); $occymigcemkqucuw = true; iomwkkieqcswkkaw: goto ewsigoeswimiueqe; eussqkkimciywios: $uamcoiueqaamsqma = __("\x53\x6f\162\x72\x79\40\171\x6f\x75\x20\x61\162\145\x20\157\x75\x74\x20\157\146\40\x62\x75\x64\x67\145\x74\x2c\40\x63\141\156\x20\156\x6f\x74\40\143\150\x61\x6e\147\x65\x20\x74\150\151\x73\40\x70\141\x67\145\x20\x73\164\141\x74\165\x73\x20\x74\x6f\x20\141\x63\164\x69\166\145\56\x20\143\x68\x61\162\x67\145\x20\x79\x6f\165\x72\40\x6c\151\143\x65\156\163\x65\x20\x66\162\157\155\40\x53\x65\164\x74\151\156\x67\163\x20\x3e\40\x44\x61\163\x68\142\x6f\141\162\x64\40\76\x20\114\151\x63\x65\156\x73\x65", PR__PKG__OPTIMIZATION); ewsigoeswimiueqe: gqaqamewqeaqwcia: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } ksiwgckusukisueg: sgkqgucguyccaaki: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gaeqamemwmwsyukm = 0) : array { $ocqawgquwsqioses = []; $cwwmimsuyiesweye = ManipulateArray::get($ekuqiqmikiicgoss, self::ayumoauqiqamccyu, []); $ocykusouawesukco = ManipulateArray::get($ekuqiqmikiicgoss, self::ksmykycegeiykemu); if (!$cwwmimsuyiesweye) { goto gmeiuoeewucukque; } foreach ($cwwmimsuyiesweye as $ooiewiwkegguusum) { switch ($ooiewiwkegguusum) { case self::mswmgkkakuooukme: $igqsaukqcqscimok = $this->okgswumokyoaosow(ManipulatePost::waaisqccqacqeium($sqeykgyoooqysmca)); if (!$igqsaukqcqscimok) { goto ccgsycueagwegqeu; } $ocqawgquwsqioses[$sqeykgyoooqysmca] = $igqsaukqcqscimok; ccgsycueagwegqeu: goto cmsiuimsiycomyay; } qmqmskywcgiqgygm: cmsiuimsiycomyay: geyiosucqswaeasw: } omuemegmkesqgwys: gmeiuoeewucukque: $scsyuucsumiwkqqc = ManipulateArray::get($ekuqiqmikiicgoss, self::osqayuckuuyukoiw); $ywmkwiwkosakssii = [self::goqgcigmiawyauai => $gaeqamemwmwsyukm]; switch ($ocykusouawesukco) { case self::ackcaikowcokggsc: $ywmkwiwkosakssii[self::eqomgewoayseioos] = $scsyuucsumiwkqqc; goto sayqggaieocmskko; case self::ccyeycyyykwuymsy: $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = $scsyuucsumiwkqqc; goto sayqggaieocmskko; } qmguoqeawegcoeoa: sayqggaieocmskko: $gsgqiucqammycmco = Model::symcgieuakksimmu()->yicuwciwamwisgsa($sqeykgyoooqysmca); if (!$gsgqiucqammycmco) { goto ycecaauekkiqacuu; } $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = array_merge(ManipulateArray::get($ywmkwiwkosakssii, self::kcaoouwiygwwmiok, []), $gsgqiucqammycmco); ycecaauekkiqacuu: $suuagcecoyuweoqk = ManipulatePost::ciugwooasaqcywas($sqeykgyoooqysmca, $ywmkwiwkosakssii); foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->okgswumokyoaosow($igqsaukqcqscimok); if (!$igqsaukqcqscimok) { goto igyesgemqesackws; } $ocqawgquwsqioses[$igqsaukqcqscimok[self::mgsccwumkcawaqcy]] = $igqsaukqcqscimok; igyesgemqesackws: omumkeywqqogwwue: } ceaamccscgcmqgka: return $ocqawgquwsqioses; } public function ioucsiguaciwkgqc($acqqmqmcquukaqsc, &$iswcokucwmiosiaq) : array { $ksaameoqigiaoigg = []; if ($acqqmqmcquukaqsc) { goto ymucaguacemwsgsi; } $iswcokucwmiosiaq = __("\x52\165\154\145\x73\x20\x69\163\x20\145\x6d\160\164\x79", PR__PKG__OPTIMIZATION); goto qiikwossequwiuom; ymucaguacemwsgsi: $gqswsiquqaayuakq = $this->ewcikckouwmuqkms(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $sqeykgyoooqysmca = ManipulateArray::get($ekuqiqmikiicgoss, self::immuuyigkyiuukwy); $ocqawgquwsqioses = $this->cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gqswsiquqaayuakq); $uuwmqqqiwksuaise = count($ocqawgquwsqioses); $sqsyqsscqaauwyyy = min($uuwmqqqiwksuaise, $gqswsiquqaayuakq); $ksaameoqigiaoigg[$sqeykgyoooqysmca] = ["\x70\141\147\145\163" => $ocqawgquwsqioses, "\165\163\x65\144" => $sqsyqsscqaauwyyy, "\164\x6f\x74\x61\x6c" => $uuwmqqqiwksuaise, "\x72\x65\x6d\x61\x69\156" => max($uuwmqqqiwksuaise, $gqswsiquqaayuakq) - $sqsyqsscqaauwyyy]; $gqswsiquqaayuakq -= $sqsyqsscqaauwyyy; ociesuicgmkekcue: } wiaymoucakyaikii: qiikwossequwiuom: return $ksaameoqigiaoigg; } }
