<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665aec46370c2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Mobile_Detect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\143\x61\143\x68\151\x6e\x67\x5f\160\162\157\x63\145\x73\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\160\141\164\x68"], "\x2f") . "\57"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto mwysseaekcsiesmm; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; mwysseaekcsiesmm: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\114\157\157\x6b\151\x6e\147\40\146\157\x72\40\143\x61\x63\x68\x65\40\146\x69\154\x65\56", ["\x70\141\x74\150" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\147\172\151\160\x5f\145\156\141\142\154\x65")) { goto gygwewcqsmwqismo; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\x67\x7a\x69\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\x50\137\x41\x43\x43\105\120\124\137\105\116\x43\117\104\111\116\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\172\151\x70"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto amgsueumgaguceaa; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); amgsueumgaguceaa: gygwewcqsmwqismo: if (!@is_readable($xswggycymueygwse)) { goto uougwgeyiokewkkm; } $this->ecsimoiakyygwais($xswggycymueygwse); uougwgeyiokewkkm: $this->log("\x53\x74\141\x72\x74\40\142\165\146\x66\x65\162\x2e", ["\x70\x61\164\x68" => $xswggycymueygwse]); ob_start([$this, "\x6f\161\143\161\x6b\x6f\x71\x77\x63\x75\x6f\161\x75\x73\x6b\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto gommacygsykyussk; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; gommacygsykyussk: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto ukqocwewouckikso; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); ukqocwewouckikso: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto ucqmumuygcywwqma; } $this->log("\x43\141\156\x20\156\x6f\x74\x20\163\x74\141\x72\164\40\x62\165\x66\146\x65\x72\40\x70\x72\157\x63\x65\163\x73\54\x20\155\141\x79\142\x65\40\x70\141\147\x65\40\x6e\x6f\x74\x20\x65\170\151\163\164\163\40\157\x72\40\156\157\164\x20\x61\x63\164\x69\x76\x65"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; ucqmumuygcywwqma: if ($this->omgegoiwsakgwwug()) { goto uykousayyomcaeaa; } $this->log("\x41\166\x6f\x69\144\x20\x63\x61\143\x68\145\x20\x70\141\147\x65\x20\x62\x79\x20\x66\151\x6c\x74\x65\x72", ["\146\151\x6c\164\x65\162" => "\160\162\137\157\x70\x74\x69\x6d\151\172\x61\x74\x69\157\x6e\137\143\141\x63\x68\x65\x5f\150\x74\155\x6c\137\144\157\137\x67\x65\x6e\145\x72\x61\164\x65\x5f\143\x61\143\x68\151\x6e\147\137\x66\x69\x6c\145\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; uykousayyomcaeaa: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto uimeeckqksqeekqq; } $this->log("\x63\141\x63\x68\x65\40\144\151\x72\x65\143\x74\x6f\x72\x79\x20\156\x6f\x74\x20\x67\x65\x6e\x65\162\141\164\145\x64\x3a\x20{$qwqyukkaswwygsyg}"); goto iuuuususuuuaieem; uimeeckqksqeekqq: $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); iuuuususuuuaieem: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto kocqqoyymosmuksu; } header("\114\x61\x73\164\x2d\x4d\x6f\x64\x69\x66\x69\145\144\x3a\40" . gmdate("\x44\54\40\x64\40\115\40\x59\40\x48\x3a\x69\x3a\163", filemtime($xswggycymueygwse)) . "\x20\107\115\124"); kocqqoyymosmuksu: $this->log("\x50\141\147\x65\40\x63\x61\x63\150\x65\x64\x2e", ["\x70\x61\x74\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\141\143\x68\x65\x2d\x43\157\156\164\x72\157\x6c\72\x20\x6e\157\x2d\163\x74\x6f\x72\x65\x2c\40\x6e\157\55\143\x61\143\150\x65\x2c\x20\x6d\165\163\164\x2d\x72\145\x76\141\x6c\x69\144\x61\x74\x65\54\x20\155\x61\170\x2d\x61\147\x65\x3d\60"); header("\120\x72\141\x67\155\x61\72\40\x6e\157\55\143\x61\x63\150\145"); header("\x45\170\x70\151\x72\x65\163\72\40" . gmdate("\x44\x2c\x20\144\40\115\40\x59\x20\x48\72\151\x3a\163\x20\134\107\134\x4d\x5c\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\141\163\164\55\x4d\x6f\x64\x69\x66\151\145\144\72\40" . gmdate("\104\x2c\40\144\40\x4d\x20\x59\40\x48\72\x69\72\163", filemtime($esaqeawoigqgagum)) . "\40\x47\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto uqokiksoqcwwqgio; } readfile($esaqeawoigqgagum); $this->log("\123\145\x72\166\x69\156\x67\x20\x63\x61\143\150\145\x20\146\x69\x6c\145\x2e", ["\160\141\164\150" => $esaqeawoigqgagum, "\155\157\x64\151\x66\151\x65\144" => $cocykkikgmcykggu]); uqokiksoqcwwqgio: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\x61\x73\x74\x2d\115\157\x64\151\x66\x69\x65\x64\72\40" . gmdate("\104\x2c\x20\144\40\x4d\40\x59\40\110\x3a\151\x3a\163", filemtime($esaqeawoigqgagum)) . "\40\107\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto qukocuwgakemmyga; } readgzfile($esaqeawoigqgagum); $this->log("\123\145\x72\x76\x69\156\147\40\147\172\151\160\x20\143\141\x63\150\145\x20\x66\151\x6c\145\x2e", ["\160\141\x74\x68" => $esaqeawoigqgagum, "\x6d\x6f\144\x69\x66\x69\145\x64" => $cocykkikgmcykggu]); qukocuwgakemmyga: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\x65\155\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto sioekkmekwygemyc; } return; sioekkmekwygemyc: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto yiowgigkkwsoqcci; } return; yiowgigkkwsoqcci: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\147\x7a\151\160\137\145\156\x61\142\x6c\145")) { goto mscyggqcesgqqksu; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\x67\172\151\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\x65\x6d\160"; if (!function_exists("\147\172\x65\x6e\143\x6f\x64\x65")) { goto gamqcwuwkikwqoay; } $gomewsucumqsiske = apply_filters("\x70\x72\x5f\x6f\160\164\151\155\x69\172\x61\x74\151\157\156\x5f\x63\141\143\150\145\x5f\x68\x74\155\154\x5f\x67\x7a\145\156\143\x6f\144\145\x5f\x6c\x65\166\145\154\x5f\x63\x6f\155\x70\162\145\163\163\x69\x6f\156", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto ieqesiiageaauiuw; } return; ieqesiiageaauiuw: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); gamqcwuwkikwqoay: mscyggqcesgqqksu: $this->log("\x63\141\x63\x68\x65\x20\146\151\154\145\40\x67\x65\156\x65\x72\141\x74\145\x64\x2e"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto oyeyomcgkmgymogq; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\122\126\105\122\x5f\x50\122\x4f\124\117\x43\117\114", '') . "\40\x33\x30\64\x20\x4e\157\x74\40\x4d\x6f\144\x69\x66\151\x65\x64", true, 304); header("\105\x78\x70\x69\162\x65\163\72\x20" . gmdate("\104\x2c\x20\144\40\115\x20\131\40\110\x3a\x69\72\163") . "\40\x47\115\x54"); header("\103\141\143\x68\x65\x2d\103\157\x6e\164\x72\157\x6c\x3a\40\156\x6f\55\x63\x61\x63\x68\x65\x2c\x20\155\x75\x73\164\x2d\162\x65\x76\141\154\x69\144\x61\164\x65"); $this->log("\x53\x65\162\166\x69\156\x67\40\140\63\60\64\x60\x20\143\141\143\x68\x65\40\146\x69\x6c\x65\x2e", ["\160\x61\164\x68" => $esaqeawoigqgagum, "\155\157\x64\151\146\x69\145\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; oyeyomcgkmgymogq: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\x69\x6e\144\145\170"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\x25\133\60\55\x39\101\x2d\x46\135\x7b\62\x7d\57", [$this, "\x6d\x71\x77\x6f\163\171\x69\x75\155\145\167\x71\145\x67\x6d\153"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\x23", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . "\56\x68\x74\x6d\x6c"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\115\157\x62\151\x6c\x65\137\104\x65\x74\145\x63\164") && $this->aceaeommyuooiqge()->get("\x6d\x6f\142\x69\x6c\145\x5f\x63\x61\x63\x68\145"))) { goto wsesqmcqoiyyqkqi; } $swwqmuqmmyoquiyi = new Mobile_Detect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto iesekaeqeomeuaui; } $wkcwykowmmmwioqs .= "\x2d\x6d\x6f\x62\151\x6c\145"; iesekaeqeomeuaui: wsesqmcqoiyyqkqi: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\122\137\x4f\x50\x54\111\x4d\111\132\101\x54\111\x4f\x4e\137\104\x4f\116\124\137\x4f\120\x54\x49\x4d\x49\132\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\x70\x61\x63\150\145\x5f\162\x65\x71\165\145\x73\x74\137\x68\x65\141\144\145\x72\x73")) { goto mogkoocsoeuyoqqa; } $uykgysuswksgmwqy = apache_request_headers(); mogkoocsoeuyoqqa: if ($uykgysuswksgmwqy) { goto wkwamkgkwykeqkec; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\120\137\111\106\137\115\x4f\104\x49\x46\111\105\x44\137\123\111\x4e\103\x45", ''); goto oimkeqocuguqqsqk; wkwamkgkwykeqkec: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\x2d\115\157\144\151\146\x69\145\144\x2d\123\151\156\x63\145"] ?? ''; oimkeqocuguqqsqk: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\162\x5f\x6f\x70\164\151\x6d\x69\x7a\x61\x74\151\x6f\x6e\137\x63\x61\143\x68\145\x5f\150\164\x6d\x6c\137\x64\157\137\147\x65\156\145\162\141\x74\145\137\x63\141\143\150\151\x6e\147\x5f\x66\x69\154\x65\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\x50\x52\x5f\x4f\120\124\137\x43\101\x43\x48\105\x5f\104\117\x4e\124\137\105\116\103\x4f\104\x45\x5f\106\x49\x4c\x45\x4e\x41\115\x45\x53")) { goto yykqaowwsqgqysmq; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); suqceasgacskcmkc: } oeocukauoyosicso: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); yykqaowwsqgqysmq: return $mkomwsiykqigmqca . untrailingslashit($migiiksoiymissge) . "\57\146\151\x6c\x65\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto kwiggogcgciwuwqk; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); kwiggogcgciwuwqk: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\x21\55\x2d\40\103\x61\143\150\x65\x64\x20\146\157\162\40\147\162\x65\141\x74\x20\x70\145\x72\x66\157\162\155\x61\156\x63\x65\x20\x62\171\40\120\115\x50\122\40\x4f\160\164\151\x6d\151\x7a\x61\x74\x69\x6f\156\40\x4d\x6f\144\165\154\145"; if (empty($cqgoimumaewouews)) { goto uckewycoogsogwiy; } $kaaaegwagmaoscys .= "\x20\x2d\x20\104\145\x62\x75\147\x3a\x20\143\x61\143\150\145\x64\100{$cqgoimumaewouews}"; uckewycoogsogwiy: $kaaaegwagmaoscys .= "\x20\x2d\x2d\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\x28\56\x2a\x29\x77\160\x5c\x2d\152\163\157\156\x28\x2f\x2e\52\x7c\x24\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\x23{$seooyyaygyioqeue}\x23", $aweiaismcsuikses)) { goto ikuuiauwouuqawuw; } return false; ikuuiauwouuqawuw: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\145\x72\x6d\x61\x6c\x69\x6e\153\x5f\163\164\162\165\143\x74\165\x72\x65"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\57"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\x2f"; if (!('' === $qmgwgiyuicsgkmcs)) { goto gswcoeiisamakwii; } $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\x70\141\164\150"])); $sycgeiyakseiumqy = str_replace(["\56\160\150\x70", "\56"], ['', "\57"], $sycgeiyakseiumqy); if (!("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy)) { goto yoqakewookqoqacm; } $ygygweamcggggmce = ''; yoqakewookqoqacm: gswcoeiisamakwii: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
