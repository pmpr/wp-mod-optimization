<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a69f59378cd             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\143\141\x63\150\x69\156\147\137\x70\x72\x6f\143\145\x73\x73"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\160\141\164\150"], "\x2f") . "\57"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto seieguyaaiqismgo; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; seieguyaaiqismgo: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\x4c\157\x6f\153\151\x6e\x67\x20\x66\x6f\x72\x20\143\x61\143\x68\145\x20\x66\x69\154\145\56", ["\160\141\x74\150" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\x67\x7a\x69\x70\137\145\x6e\x61\x62\x6c\x65")) { goto kkwqmewaksmokuqy; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\147\x7a\151\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\x5f\x41\103\x43\x45\120\124\x5f\105\116\103\117\x44\x49\116\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\x7a\151\160"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto qgyoesyiasqimcoe; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); qgyoesyiasqimcoe: kkwqmewaksmokuqy: if (!@is_readable($xswggycymueygwse)) { goto gsgkayokisiesciy; } $this->ecsimoiakyygwais($xswggycymueygwse); gsgkayokisiesciy: $this->log("\x53\x74\x61\162\164\40\142\x75\x66\146\x65\x72\x2e", ["\160\x61\164\150" => $xswggycymueygwse]); ob_start([$this, "\x6f\161\x63\x71\153\157\161\x77\x63\165\x6f\x71\x75\163\x6b\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto ascogkesqmuuaesq; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; ascogkesqmuuaesq: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto askukaucmocewkgg; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); askukaucmocewkgg: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto kiemqsgcmouqscao; } $this->log("\103\x61\x6e\x20\x6e\x6f\x74\40\x73\x74\x61\162\164\x20\142\165\x66\x66\145\162\40\x70\x72\x6f\x63\145\163\163\54\40\155\141\x79\142\x65\40\x70\x61\147\x65\40\156\x6f\x74\40\x65\170\x69\163\x74\x73\x20\x6f\x72\x20\x6e\157\x74\x20\141\143\164\x69\166\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; kiemqsgcmouqscao: if ($this->omgegoiwsakgwwug()) { goto wssaaemscmmiomee; } $this->log("\101\166\x6f\151\x64\40\143\x61\143\150\145\40\x70\141\147\145\x20\142\171\x20\146\151\x6c\x74\145\162", ["\146\151\154\x74\145\x72" => "\x70\x72\x5f\157\x70\x74\151\x6d\x69\172\x61\164\151\157\x6e\x5f\x63\x61\143\150\145\x5f\150\164\x6d\x6c\137\144\x6f\137\x67\x65\x6e\x65\162\141\x74\145\x5f\143\x61\x63\x68\x69\x6e\147\x5f\146\x69\154\x65\x73"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; wssaaemscmmiomee: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto meqmcgmksqiqcoyq; } $this->log("\143\x61\143\x68\145\x20\x64\x69\162\145\143\164\157\x72\x79\x20\x6e\x6f\x74\40\147\145\156\145\162\x61\x74\145\144\x3a\40{$qwqyukkaswwygsyg}"); goto euskosgaksmimgug; meqmcgmksqiqcoyq: $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); euskosgaksmimgug: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto iusaeoimukymskgs; } header("\x4c\141\163\x74\x2d\x4d\x6f\144\x69\146\151\145\x64\72\x20" . gmdate("\x44\x2c\40\x64\40\115\x20\131\x20\110\72\x69\72\163", filemtime($xswggycymueygwse)) . "\40\x47\x4d\x54"); iusaeoimukymskgs: $this->log("\x50\x61\147\145\x20\x63\x61\x63\x68\145\x64\56", ["\160\x61\164\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\x61\143\x68\x65\55\x43\x6f\156\x74\162\x6f\x6c\72\x20\x6e\157\55\x73\x74\x6f\x72\145\54\x20\156\157\55\x63\141\143\x68\145\54\x20\155\165\x73\164\55\x72\145\x76\x61\x6c\151\144\141\164\x65\x2c\x20\155\141\170\55\141\x67\x65\x3d\60"); header("\x50\x72\x61\147\x6d\x61\x3a\x20\156\x6f\55\143\x61\x63\x68\x65"); header("\x45\170\x70\151\162\145\163\x3a\x20" . gmdate("\x44\x2c\40\x64\40\115\x20\x59\x20\x48\x3a\151\72\163\40\x5c\107\134\115\134\124", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\x61\x73\164\55\x4d\157\x64\151\146\x69\x65\x64\72\x20" . gmdate("\104\54\40\144\x20\115\40\x59\40\110\x3a\151\x3a\163", filemtime($esaqeawoigqgagum)) . "\40\107\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto asciaakaoygususy; } readfile($esaqeawoigqgagum); $this->log("\123\x65\162\x76\x69\156\x67\x20\143\141\143\150\x65\40\x66\151\154\145\56", ["\x70\141\164\150" => $esaqeawoigqgagum, "\155\x6f\x64\x69\146\151\x65\x64" => $cocykkikgmcykggu]); asciaakaoygususy: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\141\x73\x74\x2d\115\157\144\151\146\151\145\x64\72\x20" . gmdate("\104\x2c\40\x64\40\115\40\x59\40\110\72\151\x3a\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto eaggoasiwogmquwc; } readgzfile($esaqeawoigqgagum); $this->log("\x53\145\x72\166\x69\156\x67\40\x67\x7a\x69\x70\40\143\x61\143\x68\145\40\x66\x69\x6c\x65\x2e", ["\x70\x61\x74\150" => $esaqeawoigqgagum, "\x6d\x6f\x64\151\146\x69\x65\144" => $cocykkikgmcykggu]); eaggoasiwogmquwc: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\145\155\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto meoweqcaaosoomeu; } return; meoweqcaaosoomeu: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto ywmoieqkigsykequ; } return; ywmoieqkigsykequ: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\x7a\x69\x70\137\x65\x6e\141\x62\154\145")) { goto muwyuiikuywigwso; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\x67\x7a\151\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\164\145\155\160"; if (!function_exists("\x67\172\x65\156\x63\157\144\145")) { goto kkwucaoumyayagcq; } $gomewsucumqsiske = apply_filters("\160\x72\137\x6f\x70\x74\x69\155\x69\x7a\141\164\151\157\156\x5f\143\141\x63\150\x65\x5f\x68\164\x6d\x6c\137\147\172\145\156\143\x6f\x64\145\x5f\x6c\x65\x76\145\154\x5f\x63\157\155\160\162\145\x73\x73\x69\x6f\x6e", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto iaousaauoawkqkkg; } return; iaousaauoawkqkkg: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); kkwucaoumyayagcq: muwyuiikuywigwso: pmpr_do_action("\160\162\x5f\157\160\x74\151\155\151\172\x61\x74\x69\x6f\156\x5f\x63\141\x63\x68\145\x5f\150\x74\155\154\137\147\145\x6e\145\x72\x61\x74\x65\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x63\141\x63\150\145\x20\146\x69\154\x65\40\x67\x65\x6e\145\x72\141\164\145\x64\56"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto gikaiicgqyueeoco; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\122\x56\105\x52\137\120\x52\117\124\x4f\x43\x4f\x4c", '') . "\40\x33\x30\x34\x20\116\x6f\x74\x20\115\x6f\144\x69\x66\x69\145\144", true, 304); header("\105\170\160\151\x72\145\x73\x3a\x20" . gmdate("\x44\x2c\40\144\x20\x4d\x20\x59\40\x48\72\x69\72\x73") . "\x20\x47\115\124"); header("\x43\x61\143\x68\x65\55\x43\157\x6e\x74\162\x6f\154\72\40\x6e\x6f\55\x63\141\x63\150\145\x2c\40\155\x75\163\x74\55\162\145\x76\141\x6c\x69\x64\x61\x74\145"); $this->log("\123\145\x72\166\151\156\x67\x20\140\x33\x30\64\140\40\x63\141\x63\x68\x65\x20\146\151\x6c\145\x2e", ["\x70\x61\164\150" => $esaqeawoigqgagum, "\155\x6f\144\151\146\x69\145\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; gikaiicgqyueeoco: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\156\x64\x65\170"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\x25\x5b\60\55\x39\101\55\106\135\x7b\x32\175\x2f", [$this, "\x6d\x71\167\x6f\163\x79\151\165\155\x65\x77\x71\145\x67\155\153"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\77", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . "\x2e\x68\164\x6d\154"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\x44\x65\x74\x65\x63\x74\x69\157\x6e\134\x4d\157\142\x69\x6c\145\x44\145\x74\145\143\x74") && $this->aceaeommyuooiqge()->get("\x6d\157\x62\151\x6c\145\x5f\x63\141\143\x68\x65"))) { goto akoiqkoqmmmcieug; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto akcakssqcqcouwew; } $wkcwykowmmmwioqs .= "\x2d\x6d\x6f\x62\x69\x6c\145"; akcakssqcqcouwew: akoiqkoqmmmcieug: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\x50\x52\x5f\117\120\x54\x49\115\111\x5a\x41\124\x49\x4f\x4e\x5f\x44\x4f\116\124\137\117\x50\x54\111\115\x49\x5a\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\160\141\x63\150\x65\137\162\x65\161\165\x65\163\164\137\x68\145\x61\x64\145\x72\x73")) { goto cgasgmiiqegqesic; } $uykgysuswksgmwqy = apache_request_headers(); cgasgmiiqegqesic: if ($uykgysuswksgmwqy) { goto yamoiggaeugmgkku; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\x50\137\111\106\x5f\x4d\117\104\111\x46\111\x45\104\137\123\x49\116\x43\x45", ''); goto eqekaoaioiykuaiw; yamoiggaeugmgkku: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\x66\x2d\x4d\x6f\x64\151\x66\x69\x65\144\55\x53\x69\156\143\145"] ?? ''; eqekaoaioiykuaiw: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\162\137\x6f\160\164\151\155\151\172\x61\x74\x69\157\x6e\137\x63\141\x63\150\x65\x5f\x68\164\x6d\x6c\x5f\144\157\137\x67\145\x6e\x65\x72\141\x74\x65\137\143\141\x63\x68\x69\x6e\147\x5f\146\x69\x6c\145\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\x52\x5f\117\120\x54\137\103\x41\x43\110\105\x5f\x44\x4f\116\x54\x5f\105\x4e\x43\x4f\104\105\x5f\106\111\x4c\105\116\x41\x4d\105\x53")) { goto oyywywoqaqcykucs; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); qkkqiagwgaoyauki: } qoiuwyogucoeaoew: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); oyywywoqaqcykucs: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\134") . "\x2f\x66\151\154\145\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto iqeqqwcmaiqakawc; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); iqeqqwcmaiqakawc: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\74\41\x2d\x2d\x20\x43\x61\143\x68\x65\x64\40\x66\x6f\162\40\x67\x72\145\141\164\40\x70\x65\162\x66\157\x72\x6d\141\x6e\143\x65\40\x62\171\40\x50\x4d\x50\x52\x20\x4f\160\164\x69\155\151\172\141\164\151\x6f\x6e\40\x4d\157\144\165\154\x65"; if (empty($cqgoimumaewouews)) { goto gioqkcywauuckmua; } $kaaaegwagmaoscys .= "\40\55\40\104\145\142\x75\x67\x3a\x20\143\141\143\x68\145\144\100{$cqgoimumaewouews}"; gioqkcywauuckmua: $kaaaegwagmaoscys .= "\40\x2d\55\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\50\x2e\52\51\x77\160\134\55\x6a\x73\x6f\x6e\x28\57\56\x2a\174\44\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\43{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { goto miaiggsoiaekmqwy; } return false; miaiggsoiaekmqwy: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\145\162\x6d\141\x6c\x69\156\153\137\163\x74\x72\165\x63\x74\165\x72\x65"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if (!('' === $qmgwgiyuicsgkmcs)) { goto uqagqomggiacosqm; } $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\x70\x61\x74\150"])); $sycgeiyakseiumqy = str_replace(["\x2e\x70\x68\x70", "\56"], ['', "\57"], $sycgeiyakseiumqy); if (!("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy)) { goto suoymucmyegewkmu; } $ygygweamcggggmce = ''; suoymucmyegewkmu: uqagqomggiacosqm: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
