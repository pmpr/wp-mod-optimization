<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6321c656ef420             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; class Buffer extends BaseClass { protected ?string $id = "\x63\x61\x63\x68\151\x6e\147\x5f\x70\x72\157\143\145\163\163"; protected Config $config; protected ?string $path; protected ?Filesystem $filesystem = null; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = trailingslashit($ywmkwiwkosakssii["\x70\141\x74\150"]); $this->config = $uiewakwqscemywuo; $this->filesystem = Filesystem::symcgieuakksimmu(); parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function kcciqwskewsuaemk() : ?Filesystem { return $this->filesystem; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq() && $this->wmgoigiyyeauqwaq()->aceaeommyuooiqge()->get("\143\141\x63\x68\145\x5f\145\x6e\141\x62\154\x65")) { goto scgmwokeuqwiekkk; } $this->muiwqeouwouegcao(); goto ceusyscosamyaiws; scgmwokeuqwiekkk: $xswggycymueygwse = $this->gskqygiceygcguyo(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\x2e\150\x74\x6d\x6c"; $this->log("\114\157\x6f\153\x69\156\147\40\x66\x6f\162\40\143\x61\143\x68\x65\x20\146\x69\x6c\x65\56", ["\160\x61\164\150" => $nsmgceoqaqogqmuw]); $ecggassyswkoyocq = $nsmgceoqaqogqmuw . "\137\147\172\x69\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\120\x5f\x41\x43\x43\105\x50\124\137\x45\116\103\x4f\104\111\x4e\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\172\x69\x70"); if (!($acggykmsksykwyqy && $iiaumsgauuyeqksw->coeoweawgagkycwe($ecggassyswkoyocq))) { goto gsusqquicmukegcs; } $this->qmkgowiegksamcou($ecggassyswkoyocq); gsusqquicmukegcs: if (!$iiaumsgauuyeqksw->coeoweawgagkycwe($nsmgceoqaqogqmuw)) { goto wcsysckgigeykkwy; } $this->ecsimoiakyygwais($nsmgceoqaqogqmuw); wcsysckgigeykkwy: $this->log("\123\164\141\162\164\x20\x62\x75\146\x66\145\x72\56", ["\x70\x61\x74\150" => $nsmgceoqaqogqmuw]); ob_start([$this, "\157\x71\143\161\153\157\x71\167\143\165\x6f\161\165\163\153\165"]); ceusyscosamyaiws: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $yciaosuiyeieceug = true; if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto wycmcqaauqkgegau; } $yciaosuiyeieceug = false; goto qcweoyigoaeacsow; wycmcqaauqkgegau: $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($this->omgegoiwsakgwwug()) { goto acsigwcaesyyoiie; } $yciaosuiyeieceug = false; goto aqaaqeucgoegeeuk; acsigwcaesyyoiie: $xswggycymueygwse = $this->gskqygiceygcguyo(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\x2e\150\x74\155\154"; $qwqyukkaswwygsyg = dirname($nsmgceoqaqogqmuw); $wmgiiumwscoyqkqa = $iiaumsgauuyeqksw->mkdir($qwqyukkaswwygsyg); if (!$wmgiiumwscoyqkqa) { goto gysmmooawoeggaow; } $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($nsmgceoqaqogqmuw, $moooemyaqewumiay); gysmmooawoeggaow: if (!$iiaumsgauuyeqksw->exists($nsmgceoqaqogqmuw)) { goto iyikuwuweqigiuey; } header("\114\141\x73\164\x2d\x4d\x6f\x64\151\x66\x69\145\144\72\40" . gmdate("\x44\54\x20\144\40\x4d\40\x59\40\x48\x3a\151\x3a\x73", filemtime($nsmgceoqaqogqmuw)) . "\40\x47\x4d\124"); iyikuwuweqigiuey: aqaaqeucgoegeeuk: qcweoyigoaeacsow: if ($yciaosuiyeieceug) { goto iyceygqsmokgmams; } header("\103\141\143\150\145\x2d\x43\157\156\x74\162\x6f\154\72\40\x6e\x6f\x2d\x73\x74\x6f\x72\145\54\40\x6e\x6f\x2d\x63\x61\x63\150\145\x2c\x20\x6d\165\163\164\x2d\x72\145\166\141\154\x69\144\x61\164\x65\x2c\x20\x6d\141\x78\55\141\x67\145\75\60"); header("\120\x72\141\147\x6d\141\72\x20\156\x6f\55\x63\x61\x63\x68\x65"); header("\105\x78\160\x69\x72\x65\163\x3a\x20" . gmdate("\104\54\40\144\40\115\40\131\40\110\x3a\151\x3a\x73\40\134\x47\134\x4d\134\124", time())); iyceygqsmokgmams: return $moooemyaqewumiay; } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\141\x73\x74\x2d\x4d\x6f\144\151\x66\x69\145\144\x3a\40" . gmdate("\104\54\x20\x64\40\x4d\40\131\40\x48\x3a\x69\x3a\163", filemtime($esaqeawoigqgagum)) . "\x20\x47\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto wcekgciqeggiiwgk; } readfile($esaqeawoigqgagum); $this->log("\123\145\162\166\151\x6e\147\x20\x63\141\143\150\145\40\146\x69\x6c\x65\56", ["\x70\141\x74\150" => $esaqeawoigqgagum, "\x6d\157\144\151\x66\x69\x65\x64" => $cocykkikgmcykggu]); wcekgciqeggiiwgk: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\141\x73\164\x2d\x4d\x6f\x64\x69\146\x69\145\144\x3a\40" . gmdate("\104\x2c\40\x64\40\x4d\40\x59\x20\x48\72\151\72\163", filemtime($esaqeawoigqgagum)) . "\40\107\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto gkwuewqmqeswqukg; } readgzfile($esaqeawoigqgagum); $this->log("\123\x65\x72\x76\151\156\x67\40\147\172\151\x70\40\x63\x61\x63\150\x65\x20\146\x69\154\x65\x2e", ["\x70\x61\164\150" => $esaqeawoigqgagum, "\x6d\157\144\151\146\151\x65\144" => $cocykkikgmcykggu]); gkwuewqmqeswqukg: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\147\172\x69\160"; $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\x65\x6d\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\145\155\x70"; if ($iiaumsgauuyeqksw->exists($egqeikuccqmogcum)) { goto uqcwyyiykmwygeau; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->rename($egqeikuccqmogcum, $esaqeawoigqgagum, true); if (!function_exists("\x67\x7a\x65\156\143\x6f\144\145")) { goto sagemooicmgceiug; } $gomewsucumqsiske = DecoratorHook::sscegwueamckwmcy("\x63\141\143\x68\145\137\147\x7a\x65\x6e\x63\x6f\144\145\137\154\145\x76\x65\x6c\x5f\143\x6f\x6d\160\x72\145\x73\163\x69\x6f\x6e", 6); $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske)); $iiaumsgauuyeqksw->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw, true); sagemooicmgceiug: uqcwyyiykmwygeau: } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto yeiokcoikcysyimu; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\x52\x56\105\122\137\x50\122\x4f\124\x4f\103\x4f\x4c", '') . "\40\63\x30\64\x20\x4e\x6f\164\x20\115\x6f\144\x69\x66\151\x65\x64", true, 304); header("\x45\x78\x70\151\x72\145\x73\72\40" . gmdate("\104\54\40\x64\x20\115\x20\131\40\x48\72\x69\x3a\x73") . "\40\107\x4d\124"); header("\x43\141\143\150\x65\55\x43\157\x6e\164\x72\157\154\72\40\156\157\55\143\141\x63\x68\145\x2c\40\x6d\x75\x73\164\x2d\162\145\x76\141\154\151\x64\x61\164\x65"); $this->log("\x53\145\162\x76\151\156\x67\40\140\63\x30\x34\140\40\143\141\143\x68\x65\40\146\x69\x6c\145\x2e", ["\x70\141\x74\x68" => $esaqeawoigqgagum, "\x6d\157\x64\151\146\x69\x65\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; yeiokcoikcysyimu: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo() : string { $ouwgeioocoeccyik = $this->scsyywuaiumequqw(); $ouwgeioocoeccyik = preg_replace_callback("\x2f\x25\x5b\x30\x2d\71\101\55\106\x5d\173\x32\175\x2f", [$this, "\155\x71\167\157\163\171\151\x75\155\145\167\x71\145\x67\x6d\x6b"], $ouwgeioocoeccyik); return str_replace("\77", "\43", $ouwgeioocoeccyik); } private function muiwqeouwouegcao() { if (defined("\x44\117\116\x54\x5f\120\105\122\x46\x4f\x52\x4d\101\116\x43\x45\x5f\x4f\x50\124\111\115\111\x5a\105")) { goto kkmwwqyesmkescyg; } define("\x44\117\x4e\124\x5f\x50\x45\x52\106\117\122\115\101\x4e\103\105\x5f\117\120\x54\x49\115\x49\x5a\105", true); kkmwwqyesmkescyg: } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = ManipulateServer::iawueuwikeeeseya(); if ($uykgysuswksgmwqy) { goto uamuuwkyuqomqyuy; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\x50\137\x49\106\x5f\115\117\x44\111\x46\x49\x45\x44\x5f\x53\x49\x4e\103\x45", ''); goto ekwuycsiuqwycqea; uamuuwkyuqomqyuy: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\x2d\x4d\157\144\151\146\x69\145\x64\x2d\123\151\x6e\143\145"] ?? ''; ekwuycsiuqwycqea: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\144\x6f\x5f\x63\x61\143\x68\x65\137\x67\145\156\145\x72\x61\x74\145\137\x63\141\x63\x68\151\156\147\x5f\x66\x69\154\x65\x73", true); } private function scsyywuaiumequqw() : string { return $this->amqagusacuuuaswg() . ManipulateFormat::ocyiomiukusoicuc(ManipulateServer::ekcymmyqoceukosc()); } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto iyaugygcsmqqqkmo; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); iyaugygcsmqqqkmo: return $qcgkuqesqqymcuui; } }
