<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665e0f163107a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Mobile_Detect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\143\141\143\x68\x69\156\x67\137\160\162\157\x63\145\x73\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\160\x61\x74\x68"], "\57") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto mwysseaekcsiesmm; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; mwysseaekcsiesmm: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\x53\x74\141\x72\x74\x20\142\165\146\146\145\162\56", ["\x70\141\x74\x68" => $xswggycymueygwse]); ob_start([$this, "\157\x71\143\x71\153\x6f\161\x77\x63\x75\x6f\161\165\x73\x6b\x75"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto amgsueumgaguceaa; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; amgsueumgaguceaa: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto gygwewcqsmwqismo; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); gygwewcqsmwqismo: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto uougwgeyiokewkkm; } $this->log("\103\x61\x6e\40\x6e\157\x74\x20\163\x74\141\162\x74\40\142\165\x66\x66\145\x72\40\x70\x72\x6f\x63\145\x73\x73\x2c\x20\155\141\x79\x62\x65\40\160\141\147\145\40\156\157\x74\x20\145\x78\151\x73\164\163\40\x6f\x72\x20\x6e\157\164\40\x61\x63\164\x69\x76\x65"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; uougwgeyiokewkkm: if ($this->omgegoiwsakgwwug()) { goto gommacygsykyussk; } $this->log("\101\166\157\x69\x64\40\143\141\143\150\x65\40\160\x61\147\x65\x20\x62\171\40\146\x69\154\x74\145\x72", ["\146\151\x6c\164\x65\162" => "\x70\162\x5f\x6f\x70\164\x69\x6d\x69\x7a\x61\164\151\157\x6e\137\143\141\143\x68\x65\137\150\164\x6d\154\x5f\x64\157\137\147\145\x6e\145\162\x61\164\x65\137\x63\x61\x63\150\x69\156\x67\x5f\146\x69\x6c\145\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; gommacygsykyussk: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto ukqocwewouckikso; } $this->log("\x63\x61\x63\x68\x65\40\x64\x69\x72\145\143\164\x6f\162\171\40\x6e\157\x74\40\147\145\156\x65\162\141\x74\x65\144\72\40{$qwqyukkaswwygsyg}"); goto ucqmumuygcywwqma; ukqocwewouckikso: $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); ucqmumuygcywwqma: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto uykousayyomcaeaa; } header("\x4c\141\x73\x74\x2d\115\157\x64\151\x66\x69\x65\144\x3a\40" . gmdate("\x44\x2c\40\144\x20\115\40\x59\40\x48\x3a\x69\72\x73", filemtime($xswggycymueygwse)) . "\40\x47\x4d\x54"); uykousayyomcaeaa: $this->log("\120\x61\x67\145\x20\143\x61\x63\x68\x65\x64\56", ["\160\141\164\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\x61\143\150\x65\55\103\157\156\164\162\157\154\x3a\x20\x6e\x6f\55\163\164\x6f\x72\145\54\40\156\157\55\143\x61\143\x68\145\54\x20\x6d\x75\163\164\x2d\x72\x65\x76\141\x6c\151\144\x61\x74\x65\54\40\x6d\141\x78\55\141\147\145\75\x30"); header("\x50\162\141\147\x6d\x61\72\40\156\x6f\x2d\143\141\x63\x68\145"); header("\105\x78\x70\x69\x72\x65\x73\x3a\x20" . gmdate("\x44\54\40\144\40\x4d\x20\x59\40\x48\x3a\x69\x3a\x73\x20\x5c\107\134\x4d\134\124", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\141\x73\164\55\x4d\x6f\144\x69\146\151\145\x64\x3a\40" . gmdate("\x44\x2c\x20\x64\x20\115\40\131\x20\110\x3a\x69\x3a\x73", filemtime($esaqeawoigqgagum)) . "\x20\x47\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto uimeeckqksqeekqq; } readfile($esaqeawoigqgagum); $this->log("\123\x65\162\x76\151\156\x67\40\x63\141\143\150\x65\40\146\x69\x6c\145\x2e", ["\160\141\164\150" => $esaqeawoigqgagum, "\155\157\144\x69\x66\x69\x65\x64" => $cocykkikgmcykggu]); uimeeckqksqeekqq: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\x61\163\x74\x2d\x4d\x6f\144\151\146\x69\145\144\72\x20" . gmdate("\x44\x2c\40\144\x20\115\40\131\40\x48\x3a\x69\x3a\163", filemtime($esaqeawoigqgagum)) . "\40\107\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto iuuuususuuuaieem; } readgzfile($esaqeawoigqgagum); $this->log("\123\x65\x72\x76\x69\156\147\x20\x67\172\151\x70\40\x63\141\143\150\x65\40\146\x69\x6c\145\56", ["\160\141\164\150" => $esaqeawoigqgagum, "\155\157\x64\x69\146\x69\x65\x64" => $cocykkikgmcykggu]); iuuuususuuuaieem: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\x65\x6d\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto kocqqoyymosmuksu; } return; kocqqoyymosmuksu: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto uqokiksoqcwwqgio; } return; uqokiksoqcwwqgio: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\147\x7a\x69\x70\x5f\145\156\141\x62\154\145")) { goto yiowgigkkwsoqcci; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\147\172\x69\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\x74\x65\x6d\160"; if (!function_exists("\x67\x7a\145\156\143\x6f\144\x65")) { goto sioekkmekwygemyc; } $gomewsucumqsiske = apply_filters("\x70\162\137\x6f\x70\x74\x69\155\151\x7a\141\164\151\157\x6e\137\x63\141\143\150\x65\x5f\x68\164\155\154\x5f\147\172\145\x6e\x63\157\x64\x65\137\154\x65\x76\145\154\137\x63\x6f\x6d\x70\x72\x65\x73\163\x69\157\156", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto qukocuwgakemmyga; } return; qukocuwgakemmyga: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); sioekkmekwygemyc: yiowgigkkwsoqcci: $this->log("\x63\x61\143\150\145\x20\x66\x69\x6c\x65\40\x67\145\x6e\x65\162\x61\x74\145\x64\x2e"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto ieqesiiageaauiuw; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\x45\x52\126\x45\122\x5f\120\122\x4f\124\117\x43\117\x4c", '') . "\x20\x33\x30\64\x20\116\157\x74\40\115\x6f\144\151\146\x69\145\x64", true, 304); header("\105\x78\160\151\162\145\x73\x3a\40" . gmdate("\x44\54\40\x64\x20\115\40\x59\x20\110\72\x69\x3a\x73") . "\x20\x47\x4d\x54"); header("\x43\141\143\x68\145\55\103\x6f\156\164\162\x6f\x6c\72\x20\x6e\x6f\x2d\143\141\143\x68\x65\54\40\x6d\x75\x73\164\x2d\x72\145\x76\141\154\151\x64\141\164\x65"); $this->log("\123\x65\162\x76\151\x6e\x67\x20\140\63\60\x34\140\40\x63\141\x63\150\145\x20\146\151\x6c\145\x2e", ["\160\141\164\150" => $esaqeawoigqgagum, "\x6d\x6f\x64\151\146\151\145\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; ieqesiiageaauiuw: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\x6e\x64\x65\170"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\57\x25\133\x30\x2d\x39\x41\55\x46\x5d\x7b\62\x7d\57", [$this, "\x6d\x71\167\157\x73\171\151\x75\x6d\x65\167\x71\x65\x67\155\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\x2f" . substr($wkcwykowmmmwioqs, 0, 250) . "\x2e\x68\164\155\x6c"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\115\x6f\x62\x69\x6c\x65\x5f\104\145\x74\145\143\164") && $this->aceaeommyuooiqge()->get("\x6d\x6f\142\x69\x6c\x65\x5f\143\x61\143\x68\x65"))) { goto mscyggqcesgqqksu; } $swwqmuqmmyoquiyi = new Mobile_Detect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto gamqcwuwkikwqoay; } $wkcwykowmmmwioqs .= "\x2d\155\157\142\x69\x6c\145"; gamqcwuwkikwqoay: mscyggqcesgqqksu: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\x52\137\117\x50\124\x49\115\x49\132\x41\x54\111\117\116\137\x44\x4f\x4e\x54\x5f\117\120\x54\111\115\111\x5a\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\160\141\x63\x68\145\137\162\x65\161\x75\x65\x73\164\x5f\x68\x65\x61\x64\x65\162\163")) { goto oyeyomcgkmgymogq; } $uykgysuswksgmwqy = apache_request_headers(); oyeyomcgkmgymogq: if ($uykgysuswksgmwqy) { goto iesekaeqeomeuaui; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\x50\x5f\x49\106\137\x4d\x4f\x44\x49\106\x49\105\104\137\x53\111\x4e\103\105", ''); goto wsesqmcqoiyyqkqi; iesekaeqeomeuaui: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\x66\55\115\157\144\x69\146\x69\x65\144\x2d\123\151\156\143\145"] ?? ''; wsesqmcqoiyyqkqi: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\162\x5f\157\x70\164\x69\x6d\x69\x7a\x61\164\151\157\x6e\137\143\141\x63\x68\x65\x5f\150\164\155\x6c\x5f\x64\x6f\137\x67\145\x6e\x65\162\x61\164\145\x5f\x63\141\x63\x68\x69\x6e\147\137\146\x69\154\145\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\122\x5f\117\x50\x54\137\103\101\x43\x48\105\137\104\x4f\116\x54\137\x45\x4e\x43\117\x44\x45\137\106\x49\114\x45\116\x41\115\105\123")) { goto oimkeqocuguqqsqk; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); wkwamkgkwykeqkec: } mogkoocsoeuyoqqa: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); oimkeqocuguqqsqk: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\x5c") . "\x2f\146\151\154\x65\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto oeocukauoyosicso; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); oeocukauoyosicso: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\74\x21\55\55\40\103\141\143\150\145\x64\40\146\157\162\40\147\x72\145\x61\164\40\x70\145\162\x66\x6f\x72\155\x61\156\143\145\x20\x62\x79\40\120\115\120\x52\40\117\x70\x74\151\155\151\x7a\141\164\151\x6f\156\40\x4d\x6f\x64\x75\154\145"; if (empty($cqgoimumaewouews)) { goto suqceasgacskcmkc; } $kaaaegwagmaoscys .= "\x20\x2d\40\x44\x65\x62\x75\x67\72\x20\x63\x61\x63\x68\145\x64\100{$cqgoimumaewouews}"; suqceasgacskcmkc: $kaaaegwagmaoscys .= "\x20\x2d\x2d\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\x28\x2e\52\x29\167\160\134\55\152\x73\x6f\x6e\50\x2f\x2e\x2a\x7c\x24\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\43{$seooyyaygyioqeue}\x23", $aweiaismcsuikses)) { goto yykqaowwsqgqysmq; } return false; yykqaowwsqgqysmq: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\160\145\x72\155\141\x6c\151\156\x6b\x5f\x73\164\x72\x75\x63\x74\165\x72\x65"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if (!('' === $qmgwgiyuicsgkmcs)) { goto uckewycoogsogwiy; } $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\141\164\150"])); $sycgeiyakseiumqy = str_replace(["\56\160\x68\160", "\x2e"], ['', "\x2f"], $sycgeiyakseiumqy); if (!("\x2f" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy)) { goto kwiggogcgciwuwqk; } $ygygweamcggggmce = ''; kwiggogcgciwuwqk: uckewycoogsogwiy: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
