<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d31c5704a7a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; use WpOrg\Requests\Exception; class Buffer extends BaseClass { protected ?string $id = "\x63\141\143\150\151\156\147\x5f\160\x72\157\143\x65\x73\x73"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\160\141\164\x68"], "\57") . "\57"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto uaicwcqwauosmsqm; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; uaicwcqwauosmsqm: $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\56\x6a\x73\157\x6e"); $this->log("\x4c\x6f\x6f\153\151\x6e\147\40\146\x6f\x72\40\x63\x61\143\x68\x65\x20\146\x69\154\x65\56", ["\x70\141\164\150" => $xswggycymueygwse]); if (!@is_readable($kqeuymmkaacwmkic)) { goto gsqcoqqsioiyoykq; } $this->egygswiqouyukscu($kqeuymmkaacwmkic); gsqcoqqsioiyoykq: if (!$this->aceaeommyuooiqge()->get("\x67\x7a\x69\x70\137\x65\x6e\x61\142\154\x65")) { goto iaomqomgiwiegoca; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\x67\172\x69\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\x5f\x41\103\x43\x45\x50\124\x5f\x45\x4e\103\117\104\111\116\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\172\x69\160"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto goaowamiyyamueiw; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); goaowamiyyamueiw: iaomqomgiwiegoca: if (!@is_readable($xswggycymueygwse)) { goto ysweqawmawicakeo; } $this->ecsimoiakyygwais($xswggycymueygwse); ysweqawmawicakeo: $this->log("\123\x74\x61\x72\164\x20\x62\x75\x66\x66\145\162\x2e", ["\x70\x61\x74\x68" => $xswggycymueygwse]); ob_start([$this, "\x6f\161\x63\161\153\157\x71\x77\143\165\x6f\x71\x75\163\x6b\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto owisckseoogsugqq; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; owisckseoogsugqq: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto ookcgumoacskyymy; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); ookcgumoacskyymy: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto cuseccewekgcgkyg; } $this->log("\x43\x61\x6e\40\156\x6f\x74\x20\163\164\141\x72\x74\40\142\x75\x66\146\145\162\x20\160\162\x6f\x63\x65\x73\x73\x2c\40\x6d\x61\171\142\x65\40\160\141\147\x65\x20\x6e\157\164\40\x65\x78\151\163\164\163\40\157\x72\x20\156\x6f\x74\40\141\143\x74\151\166\x65"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; cuseccewekgcgkyg: if ($this->omgegoiwsakgwwug()) { goto kgysyqkoqgwmoscq; } $this->log("\x41\166\x6f\151\x64\40\x63\x61\143\150\145\x20\160\141\147\x65\40\x62\171\40\x66\151\154\x74\145\162", ["\x66\151\x6c\x74\x65\162" => "\x70\x72\x5f\x6f\160\x74\x69\x6d\x69\172\x61\164\x69\x6f\156\137\x63\141\x63\150\145\137\x68\x74\155\154\137\144\x6f\137\147\x65\x6e\x65\x72\x61\x74\x65\137\x63\x61\x63\x68\151\156\147\x5f\x66\151\154\145\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; kgysyqkoqgwmoscq: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto makomwwyomweyamm; } $this->log("\143\x61\143\150\x65\40\144\151\162\x65\143\x74\157\x72\x79\x20\156\157\164\40\147\x65\156\x65\162\x61\164\x65\144\72\x20{$qwqyukkaswwygsyg}"); goto oqwcmgwimeisusoe; makomwwyomweyamm: oqwcmgwimeisusoe: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto acesyuieuuqwgkwm; } header("\x4c\141\163\x74\x2d\x4d\157\x64\x69\x66\x69\x65\x64\x3a\40" . gmdate("\104\x2c\40\x64\40\115\40\131\40\110\x3a\151\72\163", filemtime($xswggycymueygwse)) . "\40\107\115\x54"); acesyuieuuqwgkwm: $this->log("\x50\x61\147\x65\40\143\141\143\150\x65\144\56", ["\x70\x61\164\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\x61\143\x68\145\55\x43\x6f\x6e\x74\162\157\x6c\x3a\x20\156\157\x2d\x73\x74\x6f\162\145\x2c\x20\156\157\x2d\x63\x61\x63\150\x65\54\x20\x6d\165\163\164\x2d\x72\x65\x76\141\x6c\151\x64\x61\164\x65\x2c\x20\155\141\x78\55\x61\x67\x65\75\60"); header("\x50\x72\141\147\x6d\x61\72\x20\x6e\x6f\55\143\x61\x63\x68\145"); header("\105\170\160\151\162\145\163\x3a\x20" . gmdate("\104\x2c\40\144\40\115\40\131\40\x48\x3a\151\x3a\163\40\134\107\x5c\115\x5c\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\x61\x73\x74\x2d\x4d\157\144\151\x66\x69\145\144\x3a\40" . gmdate("\104\54\40\144\40\x4d\x20\x59\x20\110\x3a\151\72\163", filemtime($esaqeawoigqgagum)) . "\40\x47\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto asaowisseacciyia; } readfile($esaqeawoigqgagum); $this->log("\x53\145\162\x76\x69\x6e\147\40\143\x61\x63\x68\145\x20\x66\151\154\145\56", ["\160\141\x74\150" => $esaqeawoigqgagum, "\x6d\x6f\x64\151\x66\151\145\x64" => $cocykkikgmcykggu]); asaowisseacciyia: exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if (!$uykgysuswksgmwqy) { goto cigesysuauaiccms; } foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { goto gwiaimosqoiquwkc; } header("{$ymqmyyeuycgmigyo}\72\40{$eqgoocgaqwqcimie}", false); goto owgakkqgckqcegoi; gwiaimosqoiquwkc: header($eqgoocgaqwqcimie, false); owgakkqgckqcegoi: ugswokwmkumcmigc: } qiaaqkymeuuueoqk: $this->log("\x53\145\162\x76\x69\x6e\147\40\143\141\143\150\x65\40\x68\145\141\x64\x65\x72\163\x2e", ["\x70\x61\164\x68" => $esaqeawoigqgagum]); cigesysuauaiccms: } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\141\163\x74\x2d\115\157\x64\x69\x66\151\145\144\72\40" . gmdate("\x44\54\x20\144\x20\x4d\40\x59\x20\x48\x3a\151\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto qumkwsqqocooyuoq; } readgzfile($esaqeawoigqgagum); $this->log("\123\145\x72\x76\151\156\x67\x20\147\x7a\151\x70\40\x63\141\x63\x68\145\x20\x66\x69\154\145\x2e", ["\x70\x61\164\150" => $esaqeawoigqgagum, "\155\157\144\151\x66\151\x65\x64" => $cocykkikgmcykggu]); qumkwsqqocooyuoq: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\164\x65\155\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto gcskyqewysqaceeg; } return; gcskyqewysqaceeg: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto kkewoqqowugagwoy; } return; kkewoqqowugagwoy: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\172\x69\160\x5f\145\156\x61\x62\154\145")) { goto ocgkwqqmgasuoies; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\x67\172\151\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\x74\145\155\x70"; if (!function_exists("\x67\172\145\156\x63\x6f\x64\145")) { goto wsemeeocquawyauo; } $gomewsucumqsiske = apply_filters("\160\162\137\x6f\x70\164\x69\155\x69\172\141\x74\x69\157\x6e\x5f\143\x61\x63\x68\x65\137\150\x74\155\x6c\137\147\x7a\x65\156\x63\157\144\x65\137\154\x65\x76\145\x6c\137\x63\157\x6d\x70\162\x65\x73\x73\151\157\156", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto wwswmaewcaisauei; } return; wwswmaewcaisauei: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); wsemeeocquawyauo: ocgkwqqmgasuoies: pmpr_do_action("\160\x72\137\157\160\x74\x69\x6d\151\x7a\141\x74\x69\157\x6e\137\x63\x61\x63\150\145\x5f\150\164\155\x6c\x5f\x67\x65\156\x65\x72\141\164\x65\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\143\x61\x63\x68\x65\x20\x66\x69\x6c\x65\40\147\x65\156\145\x72\x61\164\x65\x64\56"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\160\x72\x5f\157\x70\x74\x69\155\151\172\141\x74\x69\157\156\137\143\141\143\150\x65\x5f\x68\x65\141\144\145\x72\163\x5f\154\151\x73\x74", []); if (!$uykgysuswksgmwqy) { goto kwoyiysciqumswcy; } $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\164\145\x6d\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto wmaeicoyyciuaiuy; } return; wmaeicoyyciuaiuy: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { goto ooysmgyeqoiesgqm; } return; ooysmgyeqoiesgqm: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\x70\162\x5f\x6f\x70\164\151\x6d\x69\172\x61\x74\x69\157\156\x5f\143\141\143\150\145\x5f\x68\x65\141\x64\145\162\163\x5f\147\145\x6e\x65\162\141\164\145\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x68\x65\141\x64\145\162\x73\x20\x63\x61\143\x68\x65\40\146\x69\154\145\x20\147\x65\x6e\145\x72\x61\164\145\144\x2e"); kwoyiysciqumswcy: } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto aaogeemgkogagkai; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\122\126\x45\122\x5f\120\x52\117\x54\117\103\x4f\114", '') . "\x20\x33\60\x34\x20\x4e\157\x74\40\115\157\144\151\x66\151\x65\x64", true, 304); header("\x45\170\x70\x69\162\145\163\72\x20" . gmdate("\x44\54\x20\x64\x20\115\40\x59\40\110\72\151\x3a\x73") . "\40\107\115\x54"); header("\x43\x61\x63\150\145\55\103\x6f\x6e\164\162\x6f\x6c\72\x20\156\x6f\55\x63\x61\143\x68\145\54\40\x6d\165\x73\x74\55\x72\145\166\141\x6c\x69\144\x61\164\145"); $this->log("\x53\x65\x72\x76\151\156\147\x20\x60\63\60\x34\140\x20\143\x61\143\x68\145\40\x66\151\x6c\145\56", ["\x70\x61\164\x68" => $esaqeawoigqgagum, "\x6d\x6f\144\151\146\x69\x65\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; aaogeemgkogagkai: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\x2e\x68\x74\155\154") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\156\x64\x65\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\45\x5b\x30\55\71\x41\55\106\x5d\x7b\x32\x7d\x2f", [$this, "\x6d\161\167\157\163\x79\151\x75\x6d\x65\x77\161\145\x67\155\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\x2f" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\x44\x65\164\145\143\164\151\157\156\134\x4d\x6f\142\151\x6c\x65\x44\x65\x74\145\x63\x74") && $this->aceaeommyuooiqge()->get("\x6d\157\x62\x69\x6c\145\x5f\143\x61\x63\150\145"))) { goto isqwwmikecauwyuc; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto qqmmycmsoqegcqqw; } $wkcwykowmmmwioqs .= "\x2d\155\157\x62\151\x6c\145"; qqmmycmsoqegcqqw: isqwwmikecauwyuc: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\x50\x52\137\x4f\x50\x54\x49\x4d\111\x5a\101\x54\111\x4f\x4e\x5f\104\x4f\x4e\124\x5f\x4f\120\x54\x49\115\x49\x5a\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\160\141\143\150\x65\x5f\162\145\x71\165\145\x73\164\x5f\x68\145\141\144\x65\162\163")) { goto oiiqqgyqmggyiums; } $uykgysuswksgmwqy = apache_request_headers(); oiiqqgyqmggyiums: if ($uykgysuswksgmwqy) { goto magymcqykamwqigw; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\x5f\x49\106\x5f\115\x4f\x44\x49\x46\111\105\x44\x5f\123\111\x4e\x43\x45", ''); goto ukogwqiuuuakkawy; magymcqykamwqigw: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\55\115\157\x64\151\x66\x69\145\x64\x2d\x53\151\156\143\x65"] ?? ''; ukogwqiuuuakkawy: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\x72\137\157\x70\164\151\155\x69\x7a\x61\164\x69\x6f\x6e\x5f\143\x61\x63\150\145\x5f\150\x74\155\154\137\x64\x6f\137\147\145\x6e\x65\162\x61\x74\145\137\x63\141\x63\x68\151\x6e\x67\137\146\151\x6c\145\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\x50\x52\x5f\117\x50\x54\x5f\x43\x41\103\110\105\137\x44\117\116\124\137\x45\x4e\103\117\x44\x45\137\x46\111\x4c\x45\x4e\101\115\x45\x53")) { goto ayamomygygmgwgkg; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); oymyqcoekqyuiguq: } gicmaqmuscawegie: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); ayamomygygmgwgkg: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\134") . "\57\146\x69\x6c\145\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto gygqgauaceiuawkq; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); gygqgauaceiuawkq: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\41\55\55\40\x43\141\x63\150\x65\x64\40\146\157\162\x20\x67\162\x65\x61\x74\40\x70\145\162\x66\157\162\x6d\x61\x6e\x63\145\40\x62\171\40\120\x4d\x50\122\40\x4f\160\x74\x69\155\x69\172\141\164\151\157\x6e\x20\115\157\x64\x75\x6c\x65"; if (empty($cqgoimumaewouews)) { goto ucksaiwquekagyqe; } $kaaaegwagmaoscys .= "\x20\55\40\104\x65\142\x75\x67\72\40\x63\141\143\150\x65\x64\x40{$cqgoimumaewouews}"; ucksaiwquekagyqe: $kaaaegwagmaoscys .= "\40\55\x2d\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\174", ["\x28\x2e\x2a\51\167\160\x5c\55\x6a\163\157\x6e\50\x2f\56\x2a\174\x24\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\x23{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { goto iyeswoaqkaeggiiy; } return false; iyeswoaqkaeggiiy: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\160\145\162\155\x61\x6c\151\x6e\x6b\x5f\x73\x74\x72\x75\143\164\165\x72\145"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\x2f"; if (!('' === $qmgwgiyuicsgkmcs)) { goto jkgouewqysmscmqs; } $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\x61\164\x68"])); $sycgeiyakseiumqy = str_replace(["\56\x70\150\160", "\x2e"], ['', "\57"], $sycgeiyakseiumqy); if (!("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy)) { goto asqqqqakiagymemk; } $ygygweamcggggmce = ''; asqqqqakiagymemk: jkgouewqysmscmqs: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
