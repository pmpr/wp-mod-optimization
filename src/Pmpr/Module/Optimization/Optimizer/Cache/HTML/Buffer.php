<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b9397c5c62b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\143\x61\143\150\x69\156\147\137\x70\162\157\x63\x65\x73\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\141\164\x68"], "\x2f") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto ysiqakyaiooyscwy; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; ysiqakyaiooyscwy: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\114\x6f\x6f\153\151\x6e\x67\x20\146\x6f\162\x20\143\141\143\150\145\x20\x66\x69\154\145\56", ["\160\x61\x74\150" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\147\x7a\x69\x70\137\145\156\x61\142\x6c\x65")) { goto ousmyagwsiooumos; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\147\172\x69\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\x50\x5f\x41\x43\103\x45\x50\x54\137\x45\116\x43\117\x44\111\x4e\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\x7a\x69\160"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto auumaoycmsmsgigs; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); auumaoycmsmsgigs: ousmyagwsiooumos: if (!@is_readable($xswggycymueygwse)) { goto qeuyekusasqmcqms; } $this->ecsimoiakyygwais($xswggycymueygwse); qeuyekusasqmcqms: $this->log("\x53\x74\x61\x72\x74\40\x62\165\146\x66\x65\x72\x2e", ["\160\141\164\150" => $xswggycymueygwse]); ob_start([$this, "\x6f\x71\143\x71\153\157\161\x77\143\165\x6f\161\165\x73\x6b\x75"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto yiceawuuiusakwiq; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; yiceawuuiusakwiq: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto sgocecweikecwwgq; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); sgocecweikecwwgq: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto qwisiamkmkkwucyo; } $this->log("\103\141\x6e\40\156\157\164\40\163\164\x61\162\164\40\142\165\146\x66\145\x72\x20\x70\x72\x6f\143\145\x73\x73\54\x20\x6d\x61\x79\x62\x65\40\160\x61\x67\x65\40\156\157\x74\x20\145\170\151\163\x74\163\x20\x6f\162\40\x6e\x6f\x74\40\x61\143\x74\x69\x76\x65"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; qwisiamkmkkwucyo: if ($this->omgegoiwsakgwwug()) { goto yqcusaeysomccaok; } $this->log("\x41\x76\x6f\151\x64\x20\143\x61\143\150\x65\x20\160\141\x67\145\x20\142\x79\40\x66\151\154\164\x65\162", ["\146\x69\154\164\145\x72" => "\160\x72\137\x6f\160\x74\151\x6d\x69\172\141\164\x69\x6f\156\137\x63\141\143\x68\x65\137\150\164\x6d\x6c\137\144\157\137\x67\x65\x6e\145\x72\x61\x74\145\137\x63\141\143\x68\151\x6e\x67\137\x66\x69\154\145\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; yqcusaeysomccaok: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto iwkckkeimmeoquyq; } $this->log("\x63\x61\143\150\x65\40\x64\151\x72\145\143\164\x6f\162\171\40\156\157\x74\x20\x67\x65\x6e\x65\x72\141\x74\x65\144\72\40{$qwqyukkaswwygsyg}"); goto masakmomqmeocqqg; iwkckkeimmeoquyq: $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); masakmomqmeocqqg: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto yksywwikmeksikqc; } header("\x4c\141\x73\x74\x2d\115\x6f\x64\151\x66\x69\145\144\72\40" . gmdate("\104\54\40\x64\x20\115\x20\131\40\x48\72\x69\72\x73", filemtime($xswggycymueygwse)) . "\x20\x47\115\124"); yksywwikmeksikqc: $this->log("\x50\141\x67\x65\x20\x63\x61\143\x68\x65\x64\x2e", ["\x70\x61\164\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\141\143\x68\145\55\x43\157\156\164\x72\x6f\154\72\40\x6e\157\x2d\163\164\157\x72\145\x2c\40\156\157\x2d\143\x61\143\x68\x65\x2c\40\155\165\x73\x74\x2d\x72\x65\166\141\x6c\x69\144\x61\164\145\54\40\155\141\x78\x2d\141\x67\145\x3d\x30"); header("\120\x72\x61\147\155\141\x3a\x20\x6e\x6f\x2d\143\x61\x63\x68\x65"); header("\x45\170\x70\151\x72\x65\x73\x3a\40" . gmdate("\104\54\40\x64\x20\115\40\131\40\110\72\x69\72\163\x20\x5c\x47\x5c\115\x5c\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\x61\x73\164\55\115\x6f\144\151\x66\151\145\x64\x3a\40" . gmdate("\104\54\40\x64\40\x4d\40\x59\40\110\72\151\x3a\x73", filemtime($esaqeawoigqgagum)) . "\40\x47\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto yoqsigmoyaaceqky; } readfile($esaqeawoigqgagum); $this->log("\123\x65\162\x76\x69\156\x67\x20\x63\141\143\150\x65\x20\x66\x69\x6c\x65\x2e", ["\160\x61\x74\x68" => $esaqeawoigqgagum, "\155\157\x64\151\146\151\x65\x64" => $cocykkikgmcykggu]); yoqsigmoyaaceqky: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\141\163\x74\55\115\x6f\x64\151\146\x69\145\x64\x3a\40" . gmdate("\104\54\x20\144\40\x4d\40\131\x20\x48\72\151\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto suqckoccuyeeymww; } readgzfile($esaqeawoigqgagum); $this->log("\x53\145\x72\x76\151\156\x67\x20\x67\x7a\151\160\40\143\141\x63\x68\145\x20\146\151\154\145\56", ["\x70\141\164\150" => $esaqeawoigqgagum, "\x6d\x6f\144\151\x66\x69\x65\x64" => $cocykkikgmcykggu]); suqckoccuyeeymww: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\145\x6d\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto giugwaeuwaomossq; } return; giugwaeuwaomossq: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto acgqaeakoyasgkku; } return; acgqaeakoyasgkku: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\x7a\x69\160\137\145\x6e\x61\142\154\x65")) { goto mqgeseysuwcaqwiy; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\147\172\x69\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\x74\145\155\160"; if (!function_exists("\147\172\145\156\143\157\144\145")) { goto ssagcgqaucssyego; } $gomewsucumqsiske = apply_filters("\x70\162\137\x6f\x70\164\151\x6d\151\172\141\164\151\157\x6e\x5f\143\x61\143\150\x65\137\150\164\x6d\154\137\x67\172\x65\x6e\x63\157\144\145\x5f\154\145\x76\x65\x6c\137\143\x6f\155\x70\x72\145\x73\163\151\157\156", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto sycougcyeqmeiagk; } return; sycougcyeqmeiagk: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); ssagcgqaucssyego: mqgeseysuwcaqwiy: pmpr_do_action("\160\x72\137\157\160\164\x69\x6d\x69\x7a\x61\x74\151\157\x6e\x5f\x63\x61\143\150\x65\x5f\x68\164\155\x6c\137\147\x65\156\145\162\141\164\x65\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\143\141\143\x68\145\x20\146\x69\154\x65\x20\147\145\x6e\145\162\x61\x74\x65\144\x2e"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto ekoqieigyoeyauqa; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\x52\x56\x45\122\137\120\x52\x4f\x54\x4f\103\117\114", '') . "\x20\63\x30\64\x20\x4e\157\164\x20\115\157\144\151\x66\151\x65\144", true, 304); header("\105\x78\x70\x69\162\x65\x73\72\40" . gmdate("\104\54\40\x64\40\115\x20\x59\x20\x48\72\x69\72\x73") . "\40\x47\x4d\124"); header("\103\141\143\x68\145\55\103\157\x6e\164\162\x6f\x6c\x3a\x20\156\x6f\55\143\141\x63\x68\145\54\x20\x6d\x75\163\164\x2d\162\x65\166\x61\154\x69\144\141\164\x65"); $this->log("\123\x65\x72\166\x69\156\147\40\x60\x33\x30\x34\x60\40\143\x61\143\150\145\x20\x66\x69\x6c\145\56", ["\x70\x61\x74\x68" => $esaqeawoigqgagum, "\155\157\144\151\146\151\x65\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; ekoqieigyoeyauqa: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\156\x64\x65\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\x25\133\x30\x2d\71\x41\55\x46\x5d\x7b\62\175\57", [$this, "\x6d\x71\167\157\x73\171\x69\165\155\x65\167\161\x65\x67\x6d\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\x23", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . "\56\x68\164\155\154"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\104\x65\164\145\x63\164\x69\157\x6e\x5c\x4d\157\142\151\x6c\x65\104\x65\x74\x65\143\x74") && $this->aceaeommyuooiqge()->get("\x6d\x6f\142\x69\x6c\x65\x5f\x63\x61\143\150\x65"))) { goto mimacwyuueomgwwy; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto cuwcsamuuqyuyqsu; } $wkcwykowmmmwioqs .= "\x2d\x6d\x6f\142\x69\154\145"; cuwcsamuuqyuyqsu: mimacwyuueomgwwy: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\x50\122\x5f\x4f\x50\124\111\115\111\x5a\x41\124\x49\117\116\137\104\x4f\x4e\124\137\x4f\120\124\x49\115\111\132\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\160\x61\x63\150\145\137\x72\x65\161\x75\145\x73\164\x5f\150\x65\141\x64\145\x72\x73")) { goto ksckqkmwiqggykke; } $uykgysuswksgmwqy = apache_request_headers(); ksckqkmwiqggykke: if ($uykgysuswksgmwqy) { goto igwkcikeyoowosoi; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\137\111\x46\x5f\115\x4f\104\x49\106\x49\105\x44\137\123\111\116\103\105", ''); goto iqsgossweywksoia; igwkcikeyoowosoi: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\x66\x2d\x4d\x6f\144\151\x66\x69\x65\x64\55\123\x69\156\143\145"] ?? ''; iqsgossweywksoia: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\x72\137\157\x70\164\x69\155\x69\172\x61\164\x69\x6f\156\137\x63\x61\x63\150\145\x5f\150\x74\x6d\154\137\x64\157\137\147\x65\x6e\145\162\x61\x74\x65\137\x63\x61\143\150\151\x6e\147\137\x66\151\x6c\145\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\x52\137\x4f\120\124\x5f\x43\101\x43\x48\105\x5f\x44\x4f\x4e\x54\x5f\105\116\x43\x4f\104\x45\x5f\x46\x49\x4c\x45\x4e\101\x4d\105\123")) { goto ggeoqeowscwkeumy; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); cuommomwmsackoqc: } awaqksikyomsuaeo: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); ggeoqeowscwkeumy: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\57\x5c") . "\x2f\146\151\154\x65\163"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto qyeswawykmasuqye; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); qyeswawykmasuqye: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\74\41\x2d\x2d\40\103\x61\143\x68\x65\x64\x20\x66\157\162\x20\x67\x72\x65\141\164\40\160\x65\162\146\x6f\x72\x6d\141\x6e\143\x65\40\x62\x79\40\120\115\x50\x52\40\x4f\160\164\x69\155\151\x7a\x61\x74\151\157\156\40\x4d\x6f\144\165\154\145"; if (empty($cqgoimumaewouews)) { goto uwaimsisescsgyqk; } $kaaaegwagmaoscys .= "\40\x2d\40\104\145\x62\165\x67\x3a\40\143\x61\x63\x68\145\144\x40{$cqgoimumaewouews}"; uwaimsisescsgyqk: $kaaaegwagmaoscys .= "\40\55\x2d\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\174", ["\x28\x2e\52\51\167\x70\134\55\152\163\157\156\x28\57\x2e\x2a\x7c\44\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\43{$seooyyaygyioqeue}\x23", $aweiaismcsuikses)) { goto uqcsksaywyqeumig; } return false; uqcsksaywyqeumig: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\x65\x72\x6d\141\x6c\151\x6e\x6b\137\163\164\162\x75\143\x74\x75\x72\145"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\x2f" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if (!('' === $qmgwgiyuicsgkmcs)) { goto ukwoswyyogmsygqg; } $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\141\x74\150"])); $sycgeiyakseiumqy = str_replace(["\x2e\x70\x68\x70", "\56"], ['', "\57"], $sycgeiyakseiumqy); if (!("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\x2f") === $sycgeiyakseiumqy)) { goto yggmaskeguaqkusc; } $ygygweamcggggmce = ''; yggmaskeguaqkusc: ukwoswyyogmsygqg: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
