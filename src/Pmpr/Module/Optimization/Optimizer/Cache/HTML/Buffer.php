<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669eebb592725             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Automattic\WooCommerce\Vendor\Detection\MobileDetect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\x63\x61\x63\x68\151\x6e\147\x5f\160\x72\157\143\145\x73\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\160\x61\164\150"], "\57") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto ioacywuoyuskqmwy; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; ioacywuoyuskqmwy: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\x4c\157\x6f\x6b\151\156\147\x20\146\157\162\x20\x63\141\x63\x68\145\40\146\x69\154\x65\56", ["\160\141\164\150" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\147\x7a\x69\160\x5f\x65\156\141\x62\x6c\x65")) { goto awgaewwsskasueke; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\x67\x7a\151\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\x50\x5f\101\103\x43\105\120\124\137\105\x4e\103\117\x44\x49\116\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\x7a\x69\160"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto bgoygegmogcmeaou; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); bgoygegmogcmeaou: awgaewwsskasueke: if (!@is_readable($xswggycymueygwse)) { goto cgmcwkmmcmmkiooc; } $this->ecsimoiakyygwais($xswggycymueygwse); cgmcwkmmcmmkiooc: $this->log("\x53\164\x61\x72\164\x20\x62\x75\146\x66\145\x72\56", ["\x70\x61\164\150" => $xswggycymueygwse]); ob_start([$this, "\157\161\143\x71\x6b\x6f\161\167\x63\165\x6f\161\x75\163\x6b\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto iamooqskosymqsmw; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; iamooqskosymqsmw: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto wwccoougkywoaoui; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); wwccoougkywoaoui: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto eygqeoiskweuiuqi; } $this->log("\103\141\156\40\156\157\x74\x20\x73\164\x61\x72\x74\40\142\165\x66\146\x65\x72\x20\x70\162\x6f\x63\x65\x73\163\x2c\40\155\x61\171\142\x65\40\x70\141\147\145\x20\156\x6f\164\x20\145\170\x69\x73\164\163\40\x6f\x72\40\x6e\157\x74\x20\x61\x63\x74\x69\166\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; eygqeoiskweuiuqi: if ($this->omgegoiwsakgwwug()) { goto uykwmucgoywoesui; } $this->log("\x41\166\157\151\x64\40\x63\x61\143\150\145\40\x70\x61\x67\x65\40\142\x79\x20\x66\151\x6c\164\145\162", ["\x66\x69\x6c\164\145\162" => "\x70\x72\x5f\x6f\x70\x74\151\x6d\x69\172\141\x74\x69\157\x6e\137\143\141\x63\150\x65\137\150\x74\155\x6c\137\x64\x6f\x5f\x67\x65\156\x65\162\141\x74\x65\x5f\x63\x61\x63\150\x69\156\147\137\x66\151\x6c\x65\x73"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; uykwmucgoywoesui: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto iisieuaeyiqwckou; } $this->log("\143\x61\x63\x68\x65\x20\144\151\162\145\143\164\x6f\x72\171\40\156\x6f\x74\x20\x67\x65\x6e\145\162\x61\x74\x65\144\72\x20{$qwqyukkaswwygsyg}"); goto oskwkeaemiqcaqkc; iisieuaeyiqwckou: $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); oskwkeaemiqcaqkc: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto kiqmcymowosckmii; } header("\114\141\x73\164\x2d\115\157\144\x69\146\x69\145\x64\72\40" . gmdate("\104\54\40\144\40\115\x20\131\40\110\72\x69\72\163", filemtime($xswggycymueygwse)) . "\40\107\x4d\x54"); kiqmcymowosckmii: $this->log("\x50\x61\x67\x65\40\x63\141\x63\150\145\x64\x2e", ["\x70\x61\164\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\141\143\150\145\55\x43\157\156\164\x72\157\154\x3a\x20\x6e\x6f\55\x73\164\x6f\162\145\54\x20\x6e\157\x2d\x63\x61\143\x68\x65\54\x20\x6d\x75\x73\164\x2d\162\x65\166\141\x6c\x69\x64\x61\164\145\54\40\155\141\x78\55\x61\x67\145\x3d\60"); header("\120\x72\x61\x67\x6d\x61\72\x20\x6e\157\x2d\x63\141\x63\150\145"); header("\x45\170\x70\151\x72\145\x73\x3a\x20" . gmdate("\x44\54\40\x64\40\115\x20\131\40\110\x3a\151\72\x73\x20\x5c\x47\134\x4d\134\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\141\163\x74\x2d\115\x6f\144\x69\x66\151\145\144\72\x20" . gmdate("\x44\x2c\40\x64\x20\115\40\131\x20\110\72\x69\x3a\163", filemtime($esaqeawoigqgagum)) . "\x20\x47\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto iaygaasesyymwgss; } readfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\x76\151\156\147\40\x63\x61\x63\x68\x65\40\x66\151\154\x65\x2e", ["\x70\x61\164\150" => $esaqeawoigqgagum, "\155\x6f\144\151\146\151\145\144" => $cocykkikgmcykggu]); iaygaasesyymwgss: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\141\x73\x74\x2d\x4d\157\144\x69\146\151\145\144\x3a\40" . gmdate("\104\x2c\x20\144\40\115\x20\x59\x20\110\72\151\72\163", filemtime($esaqeawoigqgagum)) . "\x20\107\x4d\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto iwosouqsesoqcska; } readgzfile($esaqeawoigqgagum); $this->log("\123\145\x72\x76\151\156\147\x20\x67\x7a\151\x70\40\143\141\x63\150\x65\x20\146\x69\154\145\x2e", ["\160\x61\x74\150" => $esaqeawoigqgagum, "\155\157\x64\x69\x66\151\145\144" => $cocykkikgmcykggu]); iwosouqsesoqcska: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\164\145\155\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto iacwyogogoccmwsg; } return; iacwyogogoccmwsg: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto wqmwcuggcisqieao; } return; wqmwcuggcisqieao: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\172\151\160\x5f\145\156\141\142\x6c\145")) { goto yeiicwscguyokwyu; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\147\x7a\151\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\164\x65\155\160"; if (!function_exists("\147\x7a\145\x6e\x63\x6f\144\x65")) { goto issgmmkcgesyeoas; } $gomewsucumqsiske = apply_filters("\160\162\137\157\160\164\x69\155\151\172\141\164\x69\157\x6e\137\143\x61\x63\150\145\137\x68\x74\155\154\x5f\147\x7a\x65\x6e\143\157\144\x65\137\154\x65\x76\x65\154\137\143\157\155\x70\162\145\163\163\x69\157\x6e", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto qsyqcokomswykyso; } return; qsyqcokomswykyso: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); issgmmkcgesyeoas: yeiicwscguyokwyu: $this->log("\143\141\x63\150\145\40\146\x69\154\x65\x20\x67\x65\x6e\x65\x72\x61\164\x65\144\56"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto yueosioyegouuwqo; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\122\126\x45\x52\x5f\120\122\117\124\117\x43\117\x4c", '') . "\x20\x33\60\x34\40\x4e\x6f\x74\x20\115\x6f\144\x69\146\151\x65\144", true, 304); header("\x45\x78\160\x69\162\x65\163\72\x20" . gmdate("\104\54\x20\144\40\x4d\x20\x59\40\x48\72\x69\x3a\163") . "\x20\107\x4d\x54"); header("\x43\x61\x63\150\145\55\103\157\x6e\164\x72\x6f\154\72\40\x6e\157\x2d\x63\x61\143\x68\x65\54\40\x6d\x75\x73\x74\x2d\x72\145\166\141\x6c\151\x64\x61\x74\x65"); $this->log("\123\145\162\166\x69\x6e\x67\x20\x60\x33\x30\64\140\x20\x63\x61\143\150\x65\40\146\x69\154\x65\56", ["\x70\141\x74\x68" => $esaqeawoigqgagum, "\155\x6f\144\151\146\x69\x65\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; yueosioyegouuwqo: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\x69\x6e\144\x65\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\x25\x5b\60\55\71\101\x2d\106\x5d\173\62\x7d\57", [$this, "\x6d\161\x77\x6f\163\171\x69\165\x6d\x65\167\161\x65\x67\155\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\77", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . "\56\x68\x74\x6d\154"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\104\145\164\145\143\164\x69\x6f\x6e\x5c\x4d\157\x62\151\x6c\x65\x44\145\x74\x65\x63\164") && $this->aceaeommyuooiqge()->get("\x6d\157\x62\x69\x6c\x65\x5f\143\141\x63\x68\145"))) { goto mssaawaiaimogowg; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto giuoqsumkimmuaya; } $wkcwykowmmmwioqs .= "\55\x6d\157\142\151\x6c\145"; giuoqsumkimmuaya: mssaawaiaimogowg: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\x50\x52\x5f\x4f\120\124\111\x4d\x49\x5a\x41\124\x49\x4f\x4e\x5f\104\117\116\x54\x5f\x4f\x50\x54\x49\x4d\x49\132\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\160\x61\143\150\145\x5f\x72\x65\x71\x75\x65\x73\x74\x5f\x68\x65\x61\144\145\x72\x73")) { goto ccyiggckemwgooco; } $uykgysuswksgmwqy = apache_request_headers(); ccyiggckemwgooco: if ($uykgysuswksgmwqy) { goto umamqqwcoewcigew; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\137\x49\106\x5f\115\117\x44\x49\106\x49\105\x44\x5f\123\x49\116\x43\x45", ''); goto swkeiggkawwgewuw; umamqqwcoewcigew: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\x2d\115\157\x64\x69\146\x69\x65\x64\x2d\123\x69\156\x63\x65"] ?? ''; swkeiggkawwgewuw: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x70\x72\x5f\157\160\x74\x69\x6d\x69\x7a\141\164\151\157\156\x5f\x63\x61\143\150\145\x5f\x68\x74\155\154\x5f\144\x6f\137\x67\145\156\145\x72\141\164\145\x5f\x63\x61\143\150\151\156\147\137\146\x69\154\145\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\122\137\117\120\x54\x5f\x43\101\103\110\105\137\x44\117\x4e\x54\x5f\x45\116\103\117\x44\105\x5f\106\x49\x4c\105\x4e\101\x4d\105\123")) { goto oaskqsoyesmmeaew; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); kuimgwmkcgcoecko: } gaiaucesmcqgqwac: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); oaskqsoyesmmeaew: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\134") . "\57\146\x69\x6c\145\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto aacaoywsaqscgyua; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); aacaoywsaqscgyua: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\41\x2d\x2d\x20\103\141\x63\150\x65\144\x20\x66\x6f\162\40\x67\162\145\141\x74\x20\160\x65\x72\x66\157\x72\155\x61\x6e\x63\145\40\142\x79\x20\x50\115\x50\x52\x20\x4f\x70\x74\151\155\x69\172\x61\x74\151\x6f\156\x20\115\x6f\x64\x75\x6c\145"; if (empty($cqgoimumaewouews)) { goto miigqygoawqmkkqm; } $kaaaegwagmaoscys .= "\40\55\40\x44\x65\142\165\147\x3a\x20\x63\x61\x63\150\145\144\x40{$cqgoimumaewouews}"; miigqygoawqmkkqm: $kaaaegwagmaoscys .= "\40\55\x2d\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\x28\56\x2a\51\x77\160\134\x2d\152\x73\x6f\x6e\50\57\56\x2a\x7c\44\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\x23{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { goto yywwaaiicukuwcao; } return false; yywwaaiicukuwcao: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\145\162\x6d\x61\x6c\151\156\153\x5f\x73\x74\162\165\x63\x74\x75\162\145"); $qmgwgiyuicsgkmcs = "\57" !== substr($mqqisesagsuooios, -1) ? '' : "\57"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\x2f"; if (!('' === $qmgwgiyuicsgkmcs)) { goto ywqouwqomiqwoquu; } $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\x70\x61\x74\x68"])); $sycgeiyakseiumqy = str_replace(["\56\x70\150\160", "\x2e"], ['', "\x2f"], $sycgeiyakseiumqy); if (!("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy)) { goto eykiuqsamowqykam; } $ygygweamcggggmce = ''; eykiuqsamowqykam: ywqouwqomiqwoquu: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
