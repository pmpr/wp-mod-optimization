<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d31ce4ed382             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; use WpOrg\Requests\Exception; class Buffer extends BaseClass { protected ?string $id = "\143\x61\143\x68\151\156\x67\137\160\162\x6f\x63\145\163\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\x61\x74\150"], "\57") . "\57"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto uaicwcqwauosmsqm; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; uaicwcqwauosmsqm: $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\x2e\x6a\163\157\x6e"); $this->log("\x4c\x6f\157\x6b\151\x6e\147\x20\x66\157\x72\x20\x63\141\143\150\x65\x20\146\x69\x6c\145\56", ["\160\141\164\x68" => $xswggycymueygwse]); if (!@is_readable($kqeuymmkaacwmkic)) { goto gsqcoqqsioiyoykq; } $this->egygswiqouyukscu($kqeuymmkaacwmkic); gsqcoqqsioiyoykq: if (!$this->aceaeommyuooiqge()->get("\147\x7a\151\160\137\x65\x6e\x61\142\154\145")) { goto iaomqomgiwiegoca; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\x67\x7a\151\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\137\x41\x43\103\x45\x50\124\137\105\x4e\103\117\104\111\x4e\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\172\x69\x70"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto goaowamiyyamueiw; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); goaowamiyyamueiw: iaomqomgiwiegoca: if (!@is_readable($xswggycymueygwse)) { goto ysweqawmawicakeo; } $this->ecsimoiakyygwais($xswggycymueygwse); ysweqawmawicakeo: $this->log("\x53\x74\141\x72\164\x20\142\165\146\x66\x65\162\56", ["\x70\141\x74\150" => $xswggycymueygwse]); ob_start([$this, "\x6f\161\x63\161\153\157\161\x77\x63\x75\157\x71\165\163\153\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto owisckseoogsugqq; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; owisckseoogsugqq: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto ookcgumoacskyymy; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); ookcgumoacskyymy: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto cuseccewekgcgkyg; } $this->log("\103\x61\156\x20\x6e\x6f\164\x20\163\164\x61\x72\x74\40\142\x75\146\146\x65\162\40\160\162\x6f\x63\x65\x73\x73\54\x20\x6d\141\171\142\x65\40\x70\x61\x67\x65\x20\156\157\164\x20\x65\x78\151\163\164\163\40\x6f\162\x20\156\157\164\x20\x61\143\164\x69\x76\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; cuseccewekgcgkyg: if ($this->omgegoiwsakgwwug()) { goto kgysyqkoqgwmoscq; } $this->log("\101\166\x6f\x69\144\40\x63\x61\x63\x68\145\40\x70\x61\147\145\40\142\171\40\x66\x69\x6c\x74\x65\x72", ["\146\x69\x6c\164\x65\162" => "\x70\x72\137\x6f\x70\x74\x69\x6d\151\172\x61\x74\x69\x6f\156\137\x63\141\143\x68\145\137\150\x74\x6d\x6c\137\x64\157\137\x67\145\x6e\145\162\141\x74\x65\137\143\x61\x63\150\151\156\x67\137\x66\x69\x6c\x65\x73"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; kgysyqkoqgwmoscq: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto makomwwyomweyamm; } $this->log("\x63\x61\143\150\145\x20\x64\151\162\x65\x63\x74\x6f\162\171\40\x6e\x6f\164\x20\x67\145\x6e\x65\162\141\x74\145\144\72\40{$qwqyukkaswwygsyg}"); goto oqwcmgwimeisusoe; makomwwyomweyamm: oqwcmgwimeisusoe: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto acesyuieuuqwgkwm; } header("\114\x61\163\x74\55\x4d\x6f\x64\x69\x66\151\x65\144\x3a\x20" . gmdate("\104\54\x20\144\x20\115\x20\131\40\x48\72\x69\x3a\x73", filemtime($xswggycymueygwse)) . "\x20\x47\115\x54"); acesyuieuuqwgkwm: $this->log("\x50\141\147\145\x20\x63\x61\143\150\145\144\x2e", ["\x70\x61\x74\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\x61\x63\x68\145\55\103\157\x6e\x74\162\157\x6c\72\40\x6e\157\x2d\163\164\x6f\x72\145\x2c\x20\x6e\157\x2d\x63\x61\143\150\145\x2c\40\155\165\x73\164\x2d\162\145\x76\141\x6c\x69\144\141\164\x65\x2c\40\x6d\141\x78\55\x61\x67\x65\75\x30"); header("\120\162\x61\147\x6d\x61\x3a\x20\x6e\x6f\x2d\x63\x61\x63\150\x65"); header("\x45\x78\160\x69\x72\x65\163\72\40" . gmdate("\104\54\40\x64\x20\115\x20\131\40\110\x3a\151\x3a\x73\40\134\x47\x5c\115\134\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\x61\x73\x74\x2d\115\x6f\x64\x69\146\x69\145\144\72\40" . gmdate("\104\54\40\144\40\115\40\x59\x20\x48\72\151\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\x47\x4d\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto asaowisseacciyia; } readfile($esaqeawoigqgagum); $this->log("\123\145\x72\166\x69\156\x67\40\143\x61\143\x68\x65\40\x66\x69\154\145\x2e", ["\x70\x61\164\150" => $esaqeawoigqgagum, "\x6d\x6f\x64\x69\146\x69\145\x64" => $cocykkikgmcykggu]); asaowisseacciyia: exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if (!$uykgysuswksgmwqy) { goto cigesysuauaiccms; } foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { goto gwiaimosqoiquwkc; } header("{$ymqmyyeuycgmigyo}\x3a\x20{$eqgoocgaqwqcimie}", false); goto owgakkqgckqcegoi; gwiaimosqoiquwkc: header($eqgoocgaqwqcimie, false); owgakkqgckqcegoi: ugswokwmkumcmigc: } qiaaqkymeuuueoqk: $this->log("\x53\x65\x72\166\151\x6e\x67\x20\x63\x61\x63\150\145\40\150\x65\x61\144\x65\162\x73\56", ["\160\x61\164\150" => $esaqeawoigqgagum]); cigesysuauaiccms: } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\x61\x73\x74\55\115\x6f\144\151\x66\x69\145\144\x3a\x20" . gmdate("\x44\54\x20\144\40\115\40\131\40\x48\72\x69\x3a\x73", filemtime($esaqeawoigqgagum)) . "\40\107\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto qumkwsqqocooyuoq; } readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\166\151\x6e\147\40\x67\x7a\x69\160\40\x63\141\143\150\145\x20\x66\151\x6c\x65\56", ["\160\x61\x74\x68" => $esaqeawoigqgagum, "\x6d\157\144\151\x66\151\145\144" => $cocykkikgmcykggu]); qumkwsqqocooyuoq: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\164\145\155\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto gcskyqewysqaceeg; } return; gcskyqewysqaceeg: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto kkewoqqowugagwoy; } return; kkewoqqowugagwoy: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\x7a\x69\x70\137\x65\156\x61\142\x6c\x65")) { goto ocgkwqqmgasuoies; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\147\172\x69\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\x65\x6d\x70"; if (!function_exists("\x67\x7a\x65\156\x63\157\x64\145")) { goto wsemeeocquawyauo; } $gomewsucumqsiske = apply_filters("\x70\162\137\157\160\x74\151\155\151\172\x61\164\151\x6f\156\x5f\143\x61\x63\x68\x65\x5f\x68\x74\x6d\x6c\137\147\x7a\x65\156\143\x6f\x64\145\137\x6c\145\166\x65\x6c\x5f\x63\157\x6d\160\162\145\x73\x73\x69\x6f\x6e", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto wwswmaewcaisauei; } return; wwswmaewcaisauei: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); wsemeeocquawyauo: ocgkwqqmgasuoies: pmpr_do_action("\x70\x72\137\x6f\x70\164\151\155\x69\172\x61\x74\x69\157\x6e\x5f\x63\141\x63\x68\x65\137\x68\x74\x6d\x6c\137\147\x65\156\145\162\141\164\x65\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\143\x61\143\150\145\x20\x66\151\154\x65\40\147\x65\x6e\x65\x72\141\x74\145\x64\x2e"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\160\x72\x5f\x6f\x70\164\151\x6d\x69\x7a\141\164\151\x6f\156\137\x63\x61\143\150\x65\137\150\145\141\x64\x65\x72\163\137\x6c\x69\x73\164", []); if (!$uykgysuswksgmwqy) { goto kwoyiysciqumswcy; } $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\145\x6d\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto wmaeicoyyciuaiuy; } return; wmaeicoyyciuaiuy: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { goto ooysmgyeqoiesgqm; } return; ooysmgyeqoiesgqm: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\160\x72\137\x6f\x70\164\x69\155\x69\172\x61\164\x69\x6f\x6e\x5f\x63\x61\143\x68\145\x5f\150\x65\141\144\145\162\x73\x5f\x67\145\x6e\x65\162\141\164\145\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x68\x65\x61\x64\x65\162\163\40\x63\x61\x63\150\145\x20\146\151\154\x65\x20\x67\145\x6e\145\162\x61\164\145\144\56"); kwoyiysciqumswcy: } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto aaogeemgkogagkai; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\105\x52\x56\x45\x52\137\x50\122\117\124\x4f\x43\117\x4c", '') . "\40\63\x30\x34\40\116\x6f\x74\x20\115\157\x64\x69\x66\x69\145\x64", true, 304); header("\x45\x78\x70\x69\x72\x65\163\x3a\40" . gmdate("\x44\54\x20\144\x20\x4d\40\x59\40\110\x3a\151\x3a\x73") . "\40\x47\115\124"); header("\103\141\x63\150\145\x2d\103\x6f\x6e\164\x72\x6f\x6c\x3a\x20\156\x6f\x2d\143\141\143\x68\145\54\40\155\x75\x73\164\55\162\145\x76\141\x6c\151\144\141\x74\145"); $this->log("\x53\145\162\x76\x69\x6e\x67\40\x60\63\x30\x34\140\x20\143\141\x63\x68\145\40\x66\151\x6c\x65\x2e", ["\x70\x61\x74\x68" => $esaqeawoigqgagum, "\x6d\x6f\x64\x69\146\x69\x65\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; aaogeemgkogagkai: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\x2e\150\164\x6d\x6c") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\156\144\145\170"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\x25\133\x30\55\x39\x41\x2d\x46\135\173\62\175\x2f", [$this, "\155\x71\x77\157\163\171\151\165\155\145\167\x71\145\x67\155\153"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\77", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\x2f" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\x44\x65\164\145\x63\164\x69\157\156\x5c\115\x6f\x62\x69\x6c\145\104\x65\x74\x65\143\164") && $this->aceaeommyuooiqge()->get("\x6d\157\x62\x69\154\x65\x5f\x63\x61\x63\x68\145"))) { goto isqwwmikecauwyuc; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto qqmmycmsoqegcqqw; } $wkcwykowmmmwioqs .= "\x2d\155\x6f\142\x69\x6c\145"; qqmmycmsoqegcqqw: isqwwmikecauwyuc: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\122\137\117\x50\124\x49\x4d\x49\132\101\x54\111\x4f\116\137\104\117\116\124\137\117\x50\x54\x49\115\111\x5a\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\x70\141\143\150\145\137\162\x65\x71\165\145\x73\164\x5f\x68\145\141\x64\145\x72\x73")) { goto oiiqqgyqmggyiums; } $uykgysuswksgmwqy = apache_request_headers(); oiiqqgyqmggyiums: if ($uykgysuswksgmwqy) { goto magymcqykamwqigw; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\120\x5f\111\106\x5f\115\x4f\x44\111\x46\x49\105\104\137\123\111\x4e\103\x45", ''); goto ukogwqiuuuakkawy; magymcqykamwqigw: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\x66\x2d\x4d\x6f\144\x69\x66\151\x65\x64\x2d\123\151\156\x63\x65"] ?? ''; ukogwqiuuuakkawy: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\x72\137\157\160\164\x69\x6d\x69\x7a\x61\164\151\157\156\137\143\141\143\150\145\x5f\150\x74\x6d\x6c\x5f\144\x6f\x5f\147\145\x6e\145\x72\141\x74\145\x5f\x63\141\143\150\151\x6e\147\137\x66\151\154\x65\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\122\x5f\117\x50\x54\x5f\103\101\103\110\105\137\104\117\x4e\x54\137\105\x4e\x43\x4f\x44\x45\137\106\x49\x4c\x45\116\101\115\105\123")) { goto ayamomygygmgwgkg; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); oymyqcoekqyuiguq: } gicmaqmuscawegie: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); ayamomygygmgwgkg: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\57\134") . "\57\x66\x69\154\145\163"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto gygqgauaceiuawkq; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); gygqgauaceiuawkq: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\74\x21\x2d\x2d\40\x43\x61\143\x68\145\x64\x20\146\x6f\x72\40\x67\x72\145\141\164\40\x70\145\x72\x66\157\x72\x6d\141\156\143\145\40\x62\171\x20\x50\115\120\122\40\x4f\160\164\x69\x6d\x69\172\x61\x74\151\157\x6e\x20\115\157\144\165\154\x65"; if (empty($cqgoimumaewouews)) { goto ucksaiwquekagyqe; } $kaaaegwagmaoscys .= "\x20\x2d\x20\x44\145\x62\x75\x67\x3a\x20\x63\141\143\x68\x65\x64\x40{$cqgoimumaewouews}"; ucksaiwquekagyqe: $kaaaegwagmaoscys .= "\40\x2d\x2d\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\x28\x2e\x2a\51\x77\160\134\x2d\x6a\163\x6f\x6e\50\57\56\52\x7c\x24\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\43{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { goto iyeswoaqkaeggiiy; } return false; iyeswoaqkaeggiiy: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\145\x72\x6d\x61\x6c\151\x6e\x6b\x5f\x73\x74\162\x75\143\x74\165\x72\x65"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\x2f" !== substr($magawcseesgowoeo, -1) ? '' : "\x2f"; if (!('' === $qmgwgiyuicsgkmcs)) { goto jkgouewqysmscmqs; } $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\x61\164\150"])); $sycgeiyakseiumqy = str_replace(["\x2e\x70\x68\x70", "\x2e"], ['', "\x2f"], $sycgeiyakseiumqy); if (!("\x2f" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy)) { goto asqqqqakiagymemk; } $ygygweamcggggmce = ''; asqqqqakiagymemk: jkgouewqysmscmqs: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
