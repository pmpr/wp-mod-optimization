<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668709b77727f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Mobile_Detect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\143\x61\143\x68\x69\x6e\147\137\x70\x72\157\143\x65\x73\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\160\141\x74\150"], "\57") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto qkcsykuocwuyaice; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; qkcsykuocwuyaice: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\114\x6f\x6f\x6b\151\x6e\x67\x20\x66\157\x72\40\x63\x61\143\150\145\x20\146\151\154\x65\56", ["\x70\141\164\x68" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\x67\x7a\151\x70\x5f\145\156\x61\x62\x6c\x65")) { goto egsycocugqyyswsi; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\147\x7a\151\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\120\x5f\x41\x43\x43\105\120\x54\x5f\105\x4e\x43\117\x44\x49\x4e\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\x7a\151\x70"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto uoeasoimegouymka; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); uoeasoimegouymka: egsycocugqyyswsi: if (!@is_readable($xswggycymueygwse)) { goto qiaimmucomukkeka; } $this->ecsimoiakyygwais($xswggycymueygwse); qiaimmucomukkeka: $this->log("\123\x74\141\162\164\x20\x62\x75\146\x66\x65\162\x2e", ["\x70\141\164\150" => $xswggycymueygwse]); ob_start([$this, "\x6f\161\x63\x71\153\x6f\161\x77\x63\165\157\x71\x75\x73\x6b\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto aoquoewagkseayug; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; aoquoewagkseayug: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto osuscoaaomwcqkew; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); osuscoaaomwcqkew: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto ciucewqgyoiouesq; } $this->log("\103\141\156\x20\x6e\x6f\x74\40\163\164\141\162\x74\x20\142\165\146\146\x65\x72\40\x70\x72\157\x63\145\x73\163\54\40\x6d\141\x79\142\145\x20\160\141\147\145\x20\156\x6f\164\x20\x65\x78\151\x73\164\x73\40\157\162\40\156\x6f\164\x20\x61\x63\164\x69\x76\x65"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; ciucewqgyoiouesq: if ($this->omgegoiwsakgwwug()) { goto cgmgqucewwssmicq; } $this->log("\101\x76\157\x69\144\x20\143\141\x63\150\x65\x20\160\141\147\x65\40\142\x79\40\146\x69\x6c\x74\145\x72", ["\x66\151\x6c\x74\145\162" => "\x70\162\137\157\160\x74\151\155\151\172\x61\x74\151\157\x6e\137\x63\141\143\150\x65\137\x68\x74\155\x6c\137\144\157\137\147\x65\156\x65\x72\141\164\145\137\x63\x61\143\x68\151\x6e\147\137\x66\151\154\x65\x73"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; cgmgqucewwssmicq: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto mkomygccqkmkumsi; } $this->log("\143\141\143\150\x65\x20\144\151\x72\x65\143\164\x6f\162\171\x20\x6e\x6f\164\x20\147\x65\x6e\x65\x72\x61\164\145\x64\x3a\x20{$qwqyukkaswwygsyg}"); goto ussceseaimqywuiy; mkomygccqkmkumsi: $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); ussceseaimqywuiy: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto oyiuemaaykgkqqam; } header("\x4c\141\163\164\55\115\x6f\144\151\x66\x69\x65\x64\72\40" . gmdate("\104\54\x20\x64\x20\115\x20\131\40\x48\72\151\72\163", filemtime($xswggycymueygwse)) . "\x20\107\115\x54"); oyiuemaaykgkqqam: $this->log("\x50\141\x67\145\x20\x63\141\x63\x68\x65\144\56", ["\x70\141\164\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\x61\143\150\145\55\x43\x6f\x6e\x74\x72\157\154\x3a\x20\156\157\55\x73\x74\x6f\162\145\x2c\x20\156\157\x2d\x63\x61\143\x68\x65\x2c\x20\155\165\x73\x74\x2d\x72\x65\166\x61\x6c\x69\144\x61\x74\145\54\40\155\141\x78\55\141\x67\145\75\x30"); header("\120\x72\141\147\x6d\141\72\40\156\x6f\55\x63\x61\143\150\x65"); header("\105\170\160\x69\x72\145\x73\x3a\40" . gmdate("\104\54\40\x64\x20\115\x20\x59\40\x48\x3a\x69\72\163\40\134\107\134\x4d\134\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\141\163\x74\x2d\x4d\157\x64\151\146\151\x65\144\72\40" . gmdate("\x44\x2c\x20\144\x20\115\40\131\x20\x48\x3a\151\72\163", filemtime($esaqeawoigqgagum)) . "\x20\x47\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto gqmewagyagamokok; } readfile($esaqeawoigqgagum); $this->log("\x53\x65\162\166\151\x6e\147\40\143\x61\143\150\145\x20\x66\x69\154\x65\x2e", ["\160\141\164\150" => $esaqeawoigqgagum, "\x6d\x6f\x64\x69\146\x69\x65\144" => $cocykkikgmcykggu]); gqmewagyagamokok: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\141\163\x74\x2d\115\157\144\151\x66\151\x65\x64\72\x20" . gmdate("\104\x2c\x20\x64\x20\115\40\131\40\x48\72\151\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto sqmoqymckwsogsqg; } readgzfile($esaqeawoigqgagum); $this->log("\123\x65\162\166\x69\156\x67\x20\x67\172\151\x70\x20\143\141\143\x68\145\40\x66\151\x6c\x65\x2e", ["\x70\141\164\x68" => $esaqeawoigqgagum, "\x6d\x6f\x64\x69\x66\x69\145\144" => $cocykkikgmcykggu]); sqmoqymckwsogsqg: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\145\x6d\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto uycesqqkoeamocgm; } return; uycesqqkoeamocgm: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto ceiwqkyquikcemmo; } return; ceiwqkyquikcemmo: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\172\x69\x70\137\145\156\x61\x62\x6c\145")) { goto oyiuyywyeoskckuw; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\x67\x7a\151\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\x74\x65\155\x70"; if (!function_exists("\147\172\145\156\x63\157\144\145")) { goto wkgskiuiukiuyque; } $gomewsucumqsiske = apply_filters("\x70\162\x5f\x6f\x70\x74\x69\155\x69\172\x61\164\x69\157\x6e\137\143\x61\x63\150\x65\137\150\x74\155\154\x5f\147\172\145\x6e\x63\157\144\x65\x5f\x6c\x65\x76\x65\x6c\x5f\x63\157\155\160\x72\x65\163\x73\x69\157\156", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto ukomuiwukymcoaso; } return; ukomuiwukymcoaso: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); wkgskiuiukiuyque: oyiuyywyeoskckuw: $this->log("\143\141\x63\x68\x65\x20\x66\x69\154\x65\x20\x67\x65\156\x65\162\x61\164\x65\x64\56"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto goqmywuiicciasyk; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\x52\x56\105\x52\x5f\120\x52\117\x54\x4f\103\117\x4c", '') . "\x20\x33\x30\x34\40\116\x6f\x74\x20\x4d\x6f\144\x69\x66\151\145\144", true, 304); header("\105\170\160\x69\x72\x65\x73\x3a\x20" . gmdate("\x44\x2c\x20\144\40\115\x20\131\x20\x48\x3a\151\72\163") . "\40\107\115\124"); header("\x43\x61\143\150\145\55\103\x6f\x6e\x74\x72\x6f\154\72\x20\156\x6f\55\x63\x61\x63\150\145\54\x20\x6d\x75\163\x74\55\162\145\166\141\154\151\144\141\164\145"); $this->log("\123\x65\x72\166\151\x6e\147\40\x60\x33\60\x34\140\40\x63\141\x63\150\x65\40\x66\151\154\x65\x2e", ["\x70\x61\164\150" => $esaqeawoigqgagum, "\x6d\x6f\144\151\146\151\x65\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; goqmywuiicciasyk: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\x69\156\144\145\170"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\x25\133\x30\x2d\x39\x41\x2d\x46\x5d\x7b\62\x7d\57", [$this, "\155\x71\167\157\163\171\x69\165\x6d\x65\x77\x71\145\x67\x6d\153"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\77", "\x23", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . "\56\x68\164\x6d\154"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\115\157\142\151\x6c\x65\x5f\x44\x65\164\145\x63\x74") && $this->aceaeommyuooiqge()->get("\x6d\x6f\x62\151\154\x65\x5f\x63\141\x63\150\x65"))) { goto qkuiwoqksgayqqmg; } $swwqmuqmmyoquiyi = new Mobile_Detect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto siecswkggyikqkga; } $wkcwykowmmmwioqs .= "\x2d\x6d\x6f\142\x69\x6c\145"; siecswkggyikqkga: qkuiwoqksgayqqmg: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\x52\137\x4f\x50\124\111\x4d\111\132\101\124\x49\117\x4e\137\x44\117\x4e\x54\137\x4f\x50\x54\111\x4d\111\x5a\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\x61\160\x61\143\x68\145\x5f\x72\x65\x71\165\x65\x73\x74\x5f\x68\x65\x61\144\145\x72\x73")) { goto easqmyamcmeesgya; } $uykgysuswksgmwqy = apache_request_headers(); easqmyamcmeesgya: if ($uykgysuswksgmwqy) { goto yuqgwwmqwqiuwmaw; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\120\x5f\x49\x46\x5f\115\117\x44\x49\x46\111\x45\104\137\x53\111\116\x43\x45", ''); goto quaqmuusokiyqgqe; yuqgwwmqwqiuwmaw: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\x66\x2d\x4d\157\x64\151\146\151\x65\x64\55\x53\151\156\143\x65"] ?? ''; quaqmuusokiyqgqe: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\x72\137\157\160\x74\x69\x6d\x69\172\x61\x74\x69\157\x6e\x5f\x63\x61\143\150\x65\x5f\x68\x74\x6d\x6c\x5f\144\x6f\137\147\x65\156\x65\162\x61\x74\145\x5f\x63\141\x63\x68\151\156\147\x5f\x66\151\154\x65\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\x50\122\137\x4f\x50\124\137\103\101\x43\x48\x45\137\x44\117\x4e\124\137\105\x4e\103\117\x44\105\137\106\111\114\x45\116\x41\x4d\105\x53")) { goto yamyagayiooyeekg; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); iksewmsaugayqaqq: } smiemmcqqukyguuu: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); yamyagayiooyeekg: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\57\x5c") . "\57\x66\x69\x6c\x65\163"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto yoagcooekomeokwg; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); yoagcooekomeokwg: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\x21\55\x2d\40\x43\x61\x63\x68\x65\144\40\x66\x6f\x72\x20\x67\x72\145\141\164\x20\160\145\x72\x66\x6f\x72\x6d\141\156\x63\145\x20\142\171\40\120\x4d\120\122\x20\x4f\160\x74\151\x6d\x69\172\x61\x74\x69\157\x6e\40\x4d\x6f\x64\165\154\145"; if (empty($cqgoimumaewouews)) { goto eckcqesiokgwkkiw; } $kaaaegwagmaoscys .= "\x20\x2d\40\x44\145\x62\165\147\72\x20\143\141\143\x68\145\144\100{$cqgoimumaewouews}"; eckcqesiokgwkkiw: $kaaaegwagmaoscys .= "\x20\55\55\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\x28\56\52\x29\167\160\x5c\x2d\x6a\x73\157\156\50\x2f\56\x2a\x7c\44\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\43{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { goto ecouwqosmoyyqmkw; } return false; ecouwqosmoyyqmkw: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\145\x72\155\141\154\151\156\153\137\163\x74\162\165\143\164\165\162\145"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\x2f" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if (!('' === $qmgwgiyuicsgkmcs)) { goto qmoocweoekqueuyy; } $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\x70\141\164\150"])); $sycgeiyakseiumqy = str_replace(["\x2e\160\150\160", "\56"], ['', "\x2f"], $sycgeiyakseiumqy); if (!("\x2f" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\x2f") === $sycgeiyakseiumqy)) { goto mqiiqkuaoekeuswo; } $ygygweamcggggmce = ''; mqiiqkuaoekeuswo: qmoocweoekqueuyy: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
