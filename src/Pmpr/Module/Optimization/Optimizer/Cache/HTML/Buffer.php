<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6686f091293fe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Mobile_Detect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\x63\141\143\150\x69\156\x67\x5f\x70\x72\157\x63\x65\163\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\x61\x74\150"], "\x2f") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto qkcsykuocwuyaice; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; qkcsykuocwuyaice: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\114\x6f\x6f\153\151\156\147\x20\146\x6f\162\x20\x63\141\x63\x68\145\40\146\x69\x6c\145\x2e", ["\160\141\164\150" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\147\172\151\160\137\x65\156\141\142\x6c\x65")) { goto egsycocugqyyswsi; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\147\172\151\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\x50\x5f\x41\x43\103\105\x50\x54\x5f\105\116\x43\x4f\x44\x49\116\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\172\151\x70"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto uoeasoimegouymka; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); uoeasoimegouymka: egsycocugqyyswsi: if (!@is_readable($xswggycymueygwse)) { goto qiaimmucomukkeka; } $this->ecsimoiakyygwais($xswggycymueygwse); qiaimmucomukkeka: $this->log("\x53\x74\x61\x72\x74\x20\142\x75\x66\x66\145\162\56", ["\x70\141\x74\x68" => $xswggycymueygwse]); ob_start([$this, "\157\x71\x63\161\153\x6f\x71\167\x63\165\x6f\x71\165\x73\x6b\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto aoquoewagkseayug; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; aoquoewagkseayug: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto osuscoaaomwcqkew; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); osuscoaaomwcqkew: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto ciucewqgyoiouesq; } $this->log("\x43\x61\156\40\x6e\157\x74\40\163\x74\x61\x72\x74\x20\x62\x75\146\146\x65\x72\40\160\x72\157\143\x65\x73\x73\x2c\x20\x6d\x61\x79\142\145\40\160\141\147\x65\x20\156\157\164\x20\x65\x78\151\x73\x74\x73\40\157\x72\x20\x6e\x6f\x74\40\141\143\x74\151\166\x65"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; ciucewqgyoiouesq: if ($this->omgegoiwsakgwwug()) { goto cgmgqucewwssmicq; } $this->log("\101\x76\x6f\x69\144\40\x63\141\143\x68\x65\x20\160\141\147\x65\x20\x62\x79\x20\x66\x69\x6c\x74\x65\162", ["\146\151\x6c\164\x65\162" => "\160\162\137\x6f\160\x74\x69\155\151\x7a\141\164\151\x6f\x6e\137\143\x61\x63\x68\145\137\x68\164\155\154\x5f\x64\157\x5f\147\145\156\145\x72\141\x74\145\137\x63\x61\143\150\151\x6e\x67\137\146\151\x6c\x65\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; cgmgqucewwssmicq: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto mkomygccqkmkumsi; } $this->log("\x63\141\143\150\x65\x20\x64\x69\162\145\x63\164\x6f\162\x79\40\156\x6f\164\40\x67\x65\156\145\x72\x61\x74\145\144\72\40{$qwqyukkaswwygsyg}"); goto ussceseaimqywuiy; mkomygccqkmkumsi: $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); ussceseaimqywuiy: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto oyiuemaaykgkqqam; } header("\x4c\141\x73\x74\55\x4d\x6f\x64\151\146\x69\145\144\x3a\40" . gmdate("\104\54\x20\x64\40\115\40\131\x20\x48\72\151\x3a\x73", filemtime($xswggycymueygwse)) . "\x20\x47\x4d\124"); oyiuemaaykgkqqam: $this->log("\x50\x61\147\145\40\x63\141\x63\150\145\144\x2e", ["\x70\141\164\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\141\x63\150\145\55\x43\x6f\156\x74\162\157\x6c\x3a\x20\x6e\157\x2d\x73\x74\x6f\162\145\54\40\156\157\x2d\143\x61\x63\150\x65\54\x20\x6d\165\x73\x74\55\x72\x65\x76\x61\154\151\x64\141\x74\x65\x2c\x20\155\x61\170\55\141\147\145\x3d\60"); header("\x50\x72\x61\x67\x6d\x61\72\40\x6e\157\x2d\143\x61\143\150\145"); header("\x45\x78\160\x69\x72\145\x73\x3a\40" . gmdate("\x44\x2c\40\144\x20\x4d\40\131\40\110\x3a\x69\x3a\x73\x20\x5c\107\x5c\115\x5c\124", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\141\x73\x74\55\x4d\x6f\x64\151\146\151\x65\x64\x3a\x20" . gmdate("\104\54\40\x64\x20\x4d\x20\131\40\x48\x3a\x69\72\x73", filemtime($esaqeawoigqgagum)) . "\40\107\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto gqmewagyagamokok; } readfile($esaqeawoigqgagum); $this->log("\x53\145\x72\166\x69\x6e\147\x20\x63\141\x63\150\x65\x20\x66\151\154\145\56", ["\160\141\164\x68" => $esaqeawoigqgagum, "\155\157\144\151\146\151\x65\144" => $cocykkikgmcykggu]); gqmewagyagamokok: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\141\x73\x74\x2d\115\x6f\x64\x69\x66\x69\x65\144\72\40" . gmdate("\104\54\40\x64\x20\x4d\40\x59\x20\x48\x3a\x69\x3a\163", filemtime($esaqeawoigqgagum)) . "\40\x47\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto sqmoqymckwsogsqg; } readgzfile($esaqeawoigqgagum); $this->log("\123\x65\x72\x76\x69\156\x67\40\x67\172\151\x70\x20\143\x61\x63\x68\x65\x20\x66\x69\154\145\56", ["\160\x61\x74\x68" => $esaqeawoigqgagum, "\155\157\144\151\146\x69\x65\144" => $cocykkikgmcykggu]); sqmoqymckwsogsqg: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\x65\x6d\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto uycesqqkoeamocgm; } return; uycesqqkoeamocgm: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto ceiwqkyquikcemmo; } return; ceiwqkyquikcemmo: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\x7a\x69\160\x5f\145\156\x61\x62\x6c\145")) { goto oyiuyywyeoskckuw; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\x67\x7a\151\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\x74\x65\x6d\160"; if (!function_exists("\147\x7a\x65\156\143\x6f\x64\145")) { goto wkgskiuiukiuyque; } $gomewsucumqsiske = apply_filters("\x70\x72\137\x6f\160\x74\x69\155\x69\172\141\x74\151\x6f\156\137\143\141\x63\150\x65\137\x68\164\x6d\154\137\x67\x7a\145\x6e\x63\x6f\x64\x65\137\154\x65\x76\x65\x6c\137\143\x6f\x6d\160\162\145\x73\x73\151\x6f\156", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto ukomuiwukymcoaso; } return; ukomuiwukymcoaso: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); wkgskiuiukiuyque: oyiuyywyeoskckuw: $this->log("\x63\x61\143\x68\x65\40\x66\x69\154\145\40\x67\x65\x6e\145\162\141\x74\145\x64\56"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto goqmywuiicciasyk; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\122\126\x45\x52\x5f\x50\x52\x4f\124\117\103\117\114", '') . "\x20\63\60\64\x20\116\x6f\164\40\x4d\x6f\144\151\146\151\x65\144", true, 304); header("\105\170\x70\151\162\145\x73\72\40" . gmdate("\104\x2c\x20\144\x20\x4d\x20\131\40\x48\72\x69\x3a\x73") . "\40\x47\x4d\x54"); header("\103\141\143\150\145\55\103\x6f\x6e\164\162\x6f\x6c\x3a\x20\156\x6f\x2d\143\x61\143\150\x65\54\x20\x6d\x75\x73\x74\x2d\162\x65\x76\141\x6c\x69\x64\141\164\145"); $this->log("\x53\145\162\166\151\156\x67\x20\140\x33\x30\64\x60\40\x63\x61\143\150\145\40\146\x69\x6c\145\x2e", ["\160\x61\164\x68" => $esaqeawoigqgagum, "\155\x6f\144\x69\146\151\145\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; goqmywuiicciasyk: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\x69\156\x64\145\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\x25\133\60\x2d\x39\x41\x2d\x46\135\x7b\62\x7d\57", [$this, "\x6d\161\167\157\x73\171\x69\165\x6d\x65\167\161\145\147\x6d\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\77", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . "\56\150\164\155\154"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\x4d\157\142\151\154\145\137\104\145\x74\x65\143\x74") && $this->aceaeommyuooiqge()->get("\x6d\157\142\x69\154\x65\137\143\x61\143\x68\x65"))) { goto qkuiwoqksgayqqmg; } $swwqmuqmmyoquiyi = new Mobile_Detect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto siecswkggyikqkga; } $wkcwykowmmmwioqs .= "\x2d\155\157\x62\151\154\x65"; siecswkggyikqkga: qkuiwoqksgayqqmg: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\x50\122\137\x4f\x50\x54\x49\115\x49\132\x41\124\111\117\x4e\137\x44\x4f\116\124\x5f\x4f\x50\x54\111\115\111\x5a\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\160\141\143\x68\145\x5f\x72\x65\x71\165\x65\x73\164\x5f\x68\x65\141\144\x65\x72\x73")) { goto easqmyamcmeesgya; } $uykgysuswksgmwqy = apache_request_headers(); easqmyamcmeesgya: if ($uykgysuswksgmwqy) { goto yuqgwwmqwqiuwmaw; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\x50\137\111\106\x5f\115\117\104\111\x46\111\105\104\x5f\123\x49\x4e\x43\x45", ''); goto quaqmuusokiyqgqe; yuqgwwmqwqiuwmaw: $sieoyimycoskwwku = $uykgysuswksgmwqy["\x49\x66\55\x4d\x6f\144\x69\146\x69\x65\x64\55\123\x69\156\x63\145"] ?? ''; quaqmuusokiyqgqe: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\x72\x5f\x6f\160\164\x69\x6d\151\x7a\x61\x74\151\x6f\156\x5f\x63\x61\143\150\145\137\x68\164\x6d\154\137\144\x6f\x5f\147\145\x6e\145\x72\x61\164\x65\137\x63\141\143\x68\151\156\x67\x5f\146\x69\x6c\145\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\122\x5f\x4f\x50\124\x5f\x43\x41\x43\x48\x45\x5f\x44\x4f\x4e\x54\137\x45\x4e\103\117\x44\x45\137\x46\x49\x4c\x45\116\x41\x4d\x45\123")) { goto yamyagayiooyeekg; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); iksewmsaugayqaqq: } smiemmcqqukyguuu: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); yamyagayiooyeekg: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\57\x5c") . "\x2f\x66\x69\x6c\145\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto yoagcooekomeokwg; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); yoagcooekomeokwg: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\74\41\x2d\55\40\103\x61\143\150\145\x64\x20\x66\157\162\x20\147\162\x65\x61\x74\40\x70\145\x72\x66\157\162\155\x61\x6e\143\145\x20\142\x79\40\x50\115\x50\122\40\117\x70\x74\x69\x6d\x69\172\x61\x74\151\x6f\156\x20\x4d\157\x64\x75\x6c\x65"; if (empty($cqgoimumaewouews)) { goto eckcqesiokgwkkiw; } $kaaaegwagmaoscys .= "\x20\55\x20\x44\x65\142\x75\147\72\x20\143\x61\143\150\145\x64\100{$cqgoimumaewouews}"; eckcqesiokgwkkiw: $kaaaegwagmaoscys .= "\x20\x2d\55\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\50\56\52\51\167\x70\134\55\x6a\x73\157\x6e\x28\x2f\56\x2a\174\44\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\43{$seooyyaygyioqeue}\x23", $aweiaismcsuikses)) { goto ecouwqosmoyyqmkw; } return false; ecouwqosmoyyqmkw: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\160\145\x72\x6d\x61\x6c\151\x6e\153\137\x73\x74\162\x75\143\164\165\x72\145"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if (!('' === $qmgwgiyuicsgkmcs)) { goto qmoocweoekqueuyy; } $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\141\164\x68"])); $sycgeiyakseiumqy = str_replace(["\x2e\x70\150\160", "\56"], ['', "\57"], $sycgeiyakseiumqy); if (!("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy)) { goto mqiiqkuaoekeuswo; } $ygygweamcggggmce = ''; mqiiqkuaoekeuswo: qmoocweoekqueuyy: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
