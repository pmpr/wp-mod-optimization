<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb5f17f3222             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\143\x61\143\150\x69\x6e\x67\137\160\162\157\143\x65\163\x73"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\141\x74\x68"], "\57") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto wkiymcoqqiigqaaw; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; wkiymcoqqiigqaaw: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\x4c\x6f\157\x6b\x69\x6e\x67\40\146\x6f\162\x20\x63\x61\x63\150\x65\40\x66\151\154\x65\x2e", ["\x70\141\x74\150" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\147\172\151\160\x5f\x65\x6e\x61\142\154\145")) { goto qmokwkocmcyeyesc; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\x67\x7a\151\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\x50\x5f\x41\x43\x43\105\x50\x54\137\105\116\x43\x4f\104\111\116\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\x7a\x69\x70"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto esqwswmoegiqcckg; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); esqwswmoegiqcckg: qmokwkocmcyeyesc: if (!@is_readable($xswggycymueygwse)) { goto mosuacsuaasssciu; } $this->ecsimoiakyygwais($xswggycymueygwse); mosuacsuaasssciu: $this->log("\123\164\141\x72\x74\40\142\165\x66\146\145\x72\56", ["\160\141\x74\150" => $xswggycymueygwse]); ob_start([$this, "\157\x71\x63\x71\153\x6f\161\167\x63\165\157\x71\165\x73\x6b\x75"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto qksckewucmosemuo; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; qksckewucmosemuo: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto kmooekeyemqgucci; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); kmooekeyemqgucci: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto skuuyysooocugyww; } $this->log("\103\141\156\x20\156\x6f\164\40\x73\164\141\x72\164\x20\142\x75\146\146\x65\x72\x20\x70\162\x6f\143\145\163\x73\54\40\155\141\171\142\145\x20\160\x61\x67\x65\40\156\x6f\x74\x20\x65\x78\151\163\164\163\40\157\x72\x20\x6e\x6f\x74\40\141\143\x74\x69\x76\x65"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; skuuyysooocugyww: if ($this->omgegoiwsakgwwug()) { goto cmmusgkieoqyymgs; } $this->log("\x41\x76\x6f\151\144\40\143\x61\x63\150\145\x20\160\141\147\x65\40\x62\171\40\x66\151\154\x74\145\x72", ["\x66\151\154\164\x65\162" => "\160\162\x5f\x6f\160\x74\151\x6d\151\172\141\164\x69\157\x6e\x5f\x63\141\143\x68\145\137\x68\x74\155\x6c\137\144\x6f\137\147\x65\156\145\162\141\x74\x65\x5f\x63\141\x63\150\x69\x6e\147\137\146\x69\x6c\x65\x73"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; cmmusgkieoqyymgs: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto mkgmaguyswskyioa; } $this->log("\x63\x61\x63\x68\x65\x20\144\151\162\x65\143\x74\x6f\x72\171\40\156\x6f\164\x20\147\145\x6e\x65\x72\141\164\x65\x64\72\40{$qwqyukkaswwygsyg}"); goto skwusmoyomgqkimm; mkgmaguyswskyioa: skwusmoyomgqkimm: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto usyckeewsgwaysam; } header("\114\141\x73\x74\x2d\x4d\157\144\151\x66\x69\x65\x64\72\x20" . gmdate("\104\54\x20\144\x20\115\x20\131\40\x48\72\151\72\x73", filemtime($xswggycymueygwse)) . "\x20\107\115\124"); usyckeewsgwaysam: $this->log("\x50\x61\147\145\40\143\141\143\150\x65\144\x2e", ["\x70\141\164\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\x61\x63\150\145\55\x43\157\156\x74\x72\157\154\72\40\x6e\x6f\55\163\x74\x6f\162\x65\x2c\40\x6e\157\x2d\143\x61\x63\x68\145\54\x20\x6d\x75\163\x74\55\x72\x65\166\141\x6c\151\144\141\164\145\54\40\155\141\170\x2d\x61\147\145\75\x30"); header("\x50\162\141\x67\x6d\x61\x3a\40\156\157\x2d\x63\141\143\x68\145"); header("\105\170\x70\x69\162\x65\163\72\40" . gmdate("\x44\x2c\x20\144\x20\115\40\131\x20\110\72\151\x3a\x73\40\x5c\x47\134\115\x5c\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\141\x73\164\55\115\157\x64\x69\x66\x69\145\144\72\x20" . gmdate("\x44\x2c\x20\x64\40\115\x20\131\40\x48\x3a\151\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto gicuuwuuuwumyooa; } readfile($esaqeawoigqgagum); $this->log("\x53\x65\162\x76\151\x6e\147\40\143\141\x63\x68\145\x20\146\151\154\145\56", ["\x70\x61\x74\150" => $esaqeawoigqgagum, "\x6d\157\x64\151\146\151\145\x64" => $cocykkikgmcykggu]); gicuuwuuuwumyooa: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\141\x73\164\x2d\115\157\144\x69\x66\x69\x65\x64\x3a\x20" . gmdate("\x44\54\x20\x64\x20\115\40\131\40\x48\x3a\151\x3a\163", filemtime($esaqeawoigqgagum)) . "\x20\107\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto kakkuyeccaacewyo; } readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\166\151\x6e\x67\40\x67\x7a\151\160\x20\143\x61\143\150\x65\40\146\151\x6c\145\x2e", ["\160\141\164\150" => $esaqeawoigqgagum, "\155\157\144\151\146\151\145\x64" => $cocykkikgmcykggu]); kakkuyeccaacewyo: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\164\145\x6d\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto cysgqimowcqoqqsc; } return; cysgqimowcqoqqsc: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto ismeikacqqyqcmqe; } return; ismeikacqqyqcmqe: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\147\172\x69\160\137\145\156\141\x62\154\145")) { goto yseyyukqaowwouua; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\147\x7a\x69\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\x74\145\x6d\x70"; if (!function_exists("\147\172\145\x6e\143\157\x64\x65")) { goto casgoamcqkekgeeo; } $gomewsucumqsiske = apply_filters("\x70\x72\x5f\157\x70\164\151\155\151\x7a\x61\x74\151\157\156\137\x63\x61\143\150\145\x5f\x68\x74\155\154\137\x67\x7a\x65\x6e\x63\x6f\144\145\137\154\145\166\x65\x6c\x5f\x63\157\155\x70\x72\x65\x73\x73\151\157\x6e", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto qsokkkyoackoycie; } return; qsokkkyoackoycie: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); casgoamcqkekgeeo: yseyyukqaowwouua: pmpr_do_action("\160\162\x5f\157\x70\164\151\155\151\172\x61\x74\x69\157\156\x5f\x63\141\x63\150\145\137\150\164\x6d\x6c\x5f\147\x65\x6e\145\x72\x61\x74\145\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x63\x61\143\x68\x65\x20\x66\151\x6c\x65\x20\x67\145\156\x65\162\x61\x74\x65\x64\56"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto qcgyggiaowuqswuw; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\x52\x56\x45\122\137\120\x52\x4f\x54\x4f\x43\117\114", '') . "\40\63\60\x34\x20\x4e\x6f\164\40\x4d\x6f\144\x69\146\x69\x65\x64", true, 304); header("\x45\x78\160\151\162\145\163\72\40" . gmdate("\104\x2c\x20\144\40\x4d\x20\x59\x20\110\72\151\x3a\163") . "\x20\x47\x4d\x54"); header("\x43\141\143\x68\x65\55\103\157\156\x74\x72\157\x6c\x3a\x20\156\x6f\55\x63\x61\143\x68\145\54\x20\x6d\165\163\164\55\162\x65\x76\x61\x6c\151\x64\141\x74\145"); $this->log("\x53\145\x72\166\151\x6e\147\x20\x60\x33\x30\x34\x60\x20\x63\x61\x63\x68\145\40\x66\x69\154\x65\x2e", ["\x70\x61\164\150" => $esaqeawoigqgagum, "\155\157\144\151\x66\x69\x65\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; qcgyggiaowuqswuw: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\x6e\x64\x65\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\57\x25\133\60\x2d\71\101\x2d\106\x5d\173\x32\x7d\x2f", [$this, "\155\161\167\157\163\x79\x69\165\155\x65\167\x71\145\x67\x6d\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . "\x2e\x68\x74\155\154"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\104\x65\x74\145\x63\x74\151\157\156\x5c\x4d\x6f\142\x69\154\145\x44\145\x74\145\143\164") && $this->aceaeommyuooiqge()->get("\x6d\157\x62\x69\x6c\x65\x5f\143\x61\x63\150\x65"))) { goto ywqakqkmmcoceqka; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto sooecucuakgkuyis; } $wkcwykowmmmwioqs .= "\x2d\x6d\157\142\x69\x6c\145"; sooecucuakgkuyis: ywqakqkmmcoceqka: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\x50\x52\137\x4f\x50\x54\x49\x4d\x49\132\x41\x54\111\117\116\x5f\104\117\116\124\x5f\x4f\x50\x54\111\x4d\x49\132\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\160\141\143\x68\x65\137\x72\x65\x71\x75\x65\163\x74\x5f\150\145\141\x64\145\x72\163")) { goto kwsqgqmwyyeykgum; } $uykgysuswksgmwqy = apache_request_headers(); kwsqgqmwyyeykgum: if ($uykgysuswksgmwqy) { goto emauuoieewwoeyqq; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\120\137\x49\x46\137\115\117\x44\111\106\111\105\x44\x5f\123\x49\x4e\x43\105", ''); goto koukiyqaccegmquc; emauuoieewwoeyqq: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\x2d\x4d\157\144\x69\146\151\145\x64\55\x53\x69\156\x63\145"] ?? ''; koukiyqaccegmquc: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x70\x72\137\157\160\x74\x69\x6d\151\172\141\x74\151\x6f\156\x5f\x63\x61\x63\150\x65\137\x68\164\155\x6c\137\144\x6f\137\147\x65\x6e\x65\x72\x61\164\145\137\x63\x61\143\150\x69\x6e\147\137\x66\x69\154\x65\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\x50\122\x5f\x4f\x50\124\x5f\103\101\103\110\x45\x5f\x44\117\x4e\124\137\105\x4e\103\117\x44\x45\x5f\x46\111\x4c\105\x4e\101\x4d\105\x53")) { goto egkeqqgakieyimuq; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); oqwwacmigasucsoc: } ekakkiuuquqkccse: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); egkeqqgakieyimuq: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\57\x5c") . "\57\146\151\154\145\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto cakuguiciaiaeukg; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); cakuguiciaiaeukg: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\74\x21\55\55\40\x43\x61\x63\x68\x65\x64\40\146\157\x72\x20\x67\162\145\x61\x74\x20\x70\x65\x72\146\x6f\x72\x6d\141\156\x63\145\x20\x62\171\x20\120\x4d\x50\x52\x20\117\160\164\x69\x6d\151\172\x61\164\151\x6f\156\x20\115\157\144\x75\x6c\x65"; if (empty($cqgoimumaewouews)) { goto wswikooyuaaouqgk; } $kaaaegwagmaoscys .= "\x20\55\x20\104\145\x62\x75\147\x3a\40\x63\x61\x63\x68\145\x64\x40{$cqgoimumaewouews}"; wswikooyuaaouqgk: $kaaaegwagmaoscys .= "\x20\x2d\55\x3e"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\x28\56\52\x29\167\x70\134\55\x6a\x73\x6f\156\50\x2f\x2e\52\x7c\x24\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\43{$seooyyaygyioqeue}\x23", $aweiaismcsuikses)) { goto awwaiioyywmokwsm; } return false; awwaiioyywmokwsm: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\160\x65\x72\x6d\x61\154\151\156\x6b\x5f\x73\164\162\165\143\x74\165\162\x65"); $qmgwgiyuicsgkmcs = "\57" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\x2f" !== substr($magawcseesgowoeo, -1) ? '' : "\x2f"; if (!('' === $qmgwgiyuicsgkmcs)) { goto cumeycwmuuqawwyu; } $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\141\164\x68"])); $sycgeiyakseiumqy = str_replace(["\x2e\x70\150\x70", "\x2e"], ['', "\57"], $sycgeiyakseiumqy); if (!("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy)) { goto ckwmkquuyyugigom; } $ygygweamcggggmce = ''; ckwmkquuyyugigom: cumeycwmuuqawwyu: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
