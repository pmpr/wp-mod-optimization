<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63010f2431cc2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; class Buffer extends BaseClass { protected ?string $id = "\x63\141\x63\150\151\x6e\x67\x5f\160\x72\x6f\143\145\163\163"; protected Config $config; protected ?string $path; protected ?Filesystem $filesystem = null; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = trailingslashit($ywmkwiwkosakssii["\x70\141\x74\150"]); $this->config = $uiewakwqscemywuo; $this->filesystem = Filesystem::symcgieuakksimmu(); parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function kcciqwskewsuaemk() : ?Filesystem { return $this->filesystem; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq() && $this->wmgoigiyyeauqwaq()->aceaeommyuooiqge()->get("\x63\x61\143\150\x65\137\x65\x6e\x61\142\x6c\145")) { goto ceusyscosamyaiws; } $this->muiwqeouwouegcao(); goto gysmmooawoeggaow; ceusyscosamyaiws: $xswggycymueygwse = $this->gskqygiceygcguyo(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\x2e\150\x74\155\x6c"; $this->log("\114\157\157\x6b\x69\156\147\x20\146\x6f\162\40\x63\141\143\150\145\x20\x66\151\154\145\x2e", ["\160\141\164\x68" => $nsmgceoqaqogqmuw]); $ecggassyswkoyocq = $nsmgceoqaqogqmuw . "\137\147\172\x69\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\x50\137\101\103\x43\105\x50\x54\137\x45\116\103\x4f\104\x49\x4e\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\x7a\x69\x70"); if (!($acggykmsksykwyqy && $iiaumsgauuyeqksw->coeoweawgagkycwe($ecggassyswkoyocq))) { goto wcsysckgigeykkwy; } $this->qmkgowiegksamcou($ecggassyswkoyocq); wcsysckgigeykkwy: if (!$iiaumsgauuyeqksw->coeoweawgagkycwe($nsmgceoqaqogqmuw)) { goto scgmwokeuqwiekkk; } $this->ecsimoiakyygwais($nsmgceoqaqogqmuw); scgmwokeuqwiekkk: $this->log("\123\164\141\x72\164\40\x62\x75\146\x66\x65\162\56", ["\x70\141\x74\x68" => $nsmgceoqaqogqmuw]); ob_start([$this, "\x6f\x71\143\x71\x6b\157\161\167\143\165\x6f\x71\x75\x73\x6b\x75"]); gysmmooawoeggaow: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $yciaosuiyeieceug = true; if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto qcweoyigoaeacsow; } $yciaosuiyeieceug = false; goto iyceygqsmokgmams; qcweoyigoaeacsow: $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($this->omgegoiwsakgwwug()) { goto aqaaqeucgoegeeuk; } $yciaosuiyeieceug = false; goto wycmcqaauqkgegau; aqaaqeucgoegeeuk: $xswggycymueygwse = $this->gskqygiceygcguyo(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\56\x68\x74\x6d\x6c"; $qwqyukkaswwygsyg = dirname($nsmgceoqaqogqmuw); $wmgiiumwscoyqkqa = $iiaumsgauuyeqksw->mkdir($qwqyukkaswwygsyg); if (!$wmgiiumwscoyqkqa) { goto iyikuwuweqigiuey; } $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($nsmgceoqaqogqmuw, $moooemyaqewumiay); iyikuwuweqigiuey: if (!$iiaumsgauuyeqksw->exists($nsmgceoqaqogqmuw)) { goto acsigwcaesyyoiie; } header("\x4c\x61\163\x74\x2d\115\x6f\x64\151\x66\x69\x65\x64\x3a\40" . gmdate("\x44\x2c\40\x64\x20\x4d\x20\x59\x20\x48\72\x69\72\x73", filemtime($nsmgceoqaqogqmuw)) . "\x20\107\x4d\x54"); acsigwcaesyyoiie: wycmcqaauqkgegau: iyceygqsmokgmams: if ($yciaosuiyeieceug) { goto wcekgciqeggiiwgk; } header("\103\x61\143\x68\145\x2d\x43\157\x6e\164\162\157\x6c\x3a\40\156\x6f\x2d\163\164\157\162\145\x2c\40\x6e\x6f\x2d\143\141\x63\x68\x65\54\x20\x6d\165\x73\x74\x2d\x72\145\x76\x61\154\x69\x64\141\x74\x65\x2c\x20\x6d\141\170\x2d\141\147\145\x3d\x30"); header("\x50\x72\x61\x67\155\x61\72\40\x6e\157\55\x63\x61\143\150\145"); header("\105\x78\160\x69\x72\145\163\x3a\x20" . gmdate("\x44\54\40\144\x20\115\40\x59\40\x48\x3a\x69\x3a\163\x20\x5c\107\134\x4d\x5c\124", time())); wcekgciqeggiiwgk: return $moooemyaqewumiay; } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\x61\x73\164\x2d\x4d\157\x64\151\146\151\145\144\72\40" . gmdate("\x44\x2c\40\144\40\x4d\40\131\40\x48\72\x69\x3a\163", filemtime($esaqeawoigqgagum)) . "\40\107\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto gkwuewqmqeswqukg; } readfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\x76\151\x6e\147\40\143\141\x63\150\145\x20\146\151\x6c\x65\56", ["\x70\x61\x74\150" => $esaqeawoigqgagum, "\155\x6f\144\x69\146\151\145\144" => $cocykkikgmcykggu]); gkwuewqmqeswqukg: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\x61\163\164\55\x4d\x6f\144\x69\146\x69\x65\x64\72\x20" . gmdate("\x44\54\40\144\x20\115\x20\x59\40\110\72\x69\x3a\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto sagemooicmgceiug; } readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\x76\x69\x6e\x67\x20\x67\x7a\x69\x70\x20\x63\141\x63\150\x65\x20\x66\x69\154\145\56", ["\x70\x61\164\150" => $esaqeawoigqgagum, "\155\x6f\x64\151\146\x69\145\x64" => $cocykkikgmcykggu]); sagemooicmgceiug: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\147\172\x69\160"; $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\145\155\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\x74\x65\155\160"; if ($iiaumsgauuyeqksw->exists($egqeikuccqmogcum)) { goto yeiokcoikcysyimu; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->rename($egqeikuccqmogcum, $esaqeawoigqgagum, true); if (!function_exists("\x67\172\x65\156\x63\x6f\x64\x65")) { goto uqcwyyiykmwygeau; } $gomewsucumqsiske = DecoratorHook::sscegwueamckwmcy("\x63\x61\143\150\x65\x5f\x67\x7a\145\156\x63\157\x64\145\137\154\145\166\x65\x6c\137\x63\157\155\x70\x72\x65\x73\163\x69\157\x6e", 6); $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske)); $iiaumsgauuyeqksw->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw, true); uqcwyyiykmwygeau: yeiokcoikcysyimu: } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto kkmwwqyesmkescyg; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\122\126\105\x52\137\x50\122\117\x54\x4f\x43\x4f\114", '') . "\x20\63\x30\x34\40\x4e\x6f\164\x20\x4d\157\144\151\146\151\145\144", true, 304); header("\x45\170\160\151\x72\145\x73\72\x20" . gmdate("\104\54\x20\144\x20\115\x20\x59\x20\x48\72\151\72\x73") . "\40\x47\x4d\124"); header("\x43\x61\x63\150\145\x2d\x43\x6f\x6e\164\162\157\x6c\72\40\x6e\157\55\x63\141\143\x68\x65\x2c\x20\155\165\163\x74\55\162\x65\x76\x61\154\x69\144\x61\164\x65"); $this->log("\x53\x65\162\166\x69\x6e\147\40\x60\x33\x30\64\140\40\143\141\143\150\x65\40\x66\151\x6c\x65\56", ["\160\141\x74\150" => $esaqeawoigqgagum, "\155\157\x64\151\x66\151\x65\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; kkmwwqyesmkescyg: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo() : string { $ouwgeioocoeccyik = $this->scsyywuaiumequqw(); $ouwgeioocoeccyik = preg_replace_callback("\57\45\133\60\55\71\x41\x2d\x46\135\173\62\175\57", [$this, "\x6d\x71\167\x6f\163\171\x69\x75\155\x65\x77\x71\145\147\x6d\153"], $ouwgeioocoeccyik); return str_replace("\77", "\43", $ouwgeioocoeccyik); } private final function muiwqeouwouegcao() { if (defined("\x44\117\x4e\x54\137\120\x45\x52\106\x4f\122\x4d\101\x4e\103\105\x5f\117\120\124\x49\x4d\111\x5a\x45")) { goto uamuuwkyuqomqyuy; } define("\x44\117\116\124\x5f\x50\105\x52\x46\x4f\122\115\x41\x4e\x43\105\137\x4f\x50\124\111\115\x49\132\x45", true); uamuuwkyuqomqyuy: } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = ManipulateServer::iawueuwikeeeseya(); if ($uykgysuswksgmwqy) { goto ekwuycsiuqwycqea; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\120\x5f\111\106\137\x4d\x4f\104\x49\x46\111\105\x44\137\x53\x49\x4e\103\105", ''); goto iyaugygcsmqqqkmo; ekwuycsiuqwycqea: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\x66\55\115\157\144\151\x66\151\x65\x64\55\x53\x69\x6e\143\x65"] ?? ''; iyaugygcsmqqqkmo: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x64\x6f\137\143\x61\143\150\145\137\x67\145\x6e\145\162\141\164\x65\137\143\141\143\x68\x69\156\147\137\146\151\154\x65\x73", true); } private function scsyywuaiumequqw() : string { $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); $migiiksoiymissge = ManipulateFormat::gokuyqsimauyacke($migiiksoiymissge); $migiiksoiymissge = rawurldecode($migiiksoiymissge); return $this->amqagusacuuuaswg() . sha1(untrailingslashit($migiiksoiymissge)); } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto cieumoqayigkoocy; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); cieumoqayigkoocy: return $qcgkuqesqqymcuui; } }
