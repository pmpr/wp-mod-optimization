<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62d7c3928abb7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; class Buffer extends BaseClass { protected ?string $id = "\x63\x61\143\150\x69\x6e\147\137\160\162\x6f\x63\145\163\x73"; protected Config $config; protected ?string $path; protected ?Filesystem $filesystem = null; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = trailingslashit($ywmkwiwkosakssii["\160\141\164\x68"]); $this->config = $uiewakwqscemywuo; $this->filesystem = Filesystem::symcgieuakksimmu(); parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function kcciqwskewsuaemk() : ?Filesystem { return $this->filesystem; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq() && $this->wmgoigiyyeauqwaq()->aceaeommyuooiqge()->get("\x63\141\x63\x68\145\x5f\145\x6e\x61\x62\154\x65")) { goto skuuyysooocugyww; } $this->muiwqeouwouegcao(); goto cmmusgkieoqyymgs; skuuyysooocugyww: $xswggycymueygwse = $this->gskqygiceygcguyo(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\56\150\164\155\x6c"; $this->log("\114\157\x6f\153\151\156\147\x20\146\157\162\x20\x63\141\143\150\x65\x20\x66\x69\x6c\145\x2e", ["\160\141\164\x68" => $nsmgceoqaqogqmuw]); $ecggassyswkoyocq = $nsmgceoqaqogqmuw . "\x5f\147\x7a\151\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\x5f\x41\x43\x43\105\120\x54\x5f\105\116\103\117\104\x49\116\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\172\x69\160"); if (!($acggykmsksykwyqy && $iiaumsgauuyeqksw->coeoweawgagkycwe($ecggassyswkoyocq))) { goto qksckewucmosemuo; } $this->qmkgowiegksamcou($ecggassyswkoyocq); qksckewucmosemuo: if (!$iiaumsgauuyeqksw->coeoweawgagkycwe($nsmgceoqaqogqmuw)) { goto kmooekeyemqgucci; } $this->ecsimoiakyygwais($nsmgceoqaqogqmuw); kmooekeyemqgucci: $this->log("\123\164\141\x72\164\x20\142\x75\x66\146\x65\162\x2e", ["\x70\x61\x74\150" => $nsmgceoqaqogqmuw]); ob_start([$this, "\x6f\x71\x63\161\x6b\157\x71\167\x63\x75\157\161\x75\x73\153\165"]); cmmusgkieoqyymgs: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $yciaosuiyeieceug = true; if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto kakkuyeccaacewyo; } $yciaosuiyeieceug = false; goto cysgqimowcqoqqsc; kakkuyeccaacewyo: $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($this->omgegoiwsakgwwug()) { goto usyckeewsgwaysam; } $yciaosuiyeieceug = false; goto gicuuwuuuwumyooa; usyckeewsgwaysam: $xswggycymueygwse = $this->gskqygiceygcguyo(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\x2e\150\x74\155\x6c"; $qwqyukkaswwygsyg = dirname($nsmgceoqaqogqmuw); $wmgiiumwscoyqkqa = $iiaumsgauuyeqksw->mkdir($qwqyukkaswwygsyg); if (!$wmgiiumwscoyqkqa) { goto mkgmaguyswskyioa; } $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($nsmgceoqaqogqmuw, $moooemyaqewumiay); mkgmaguyswskyioa: if (!$iiaumsgauuyeqksw->exists($nsmgceoqaqogqmuw)) { goto skwusmoyomgqkimm; } header("\x4c\141\163\164\x2d\x4d\157\144\151\x66\x69\145\x64\x3a\x20" . gmdate("\x44\54\x20\x64\40\x4d\40\131\40\x48\72\151\72\163", filemtime($nsmgceoqaqogqmuw)) . "\40\107\115\x54"); skwusmoyomgqkimm: gicuuwuuuwumyooa: cysgqimowcqoqqsc: if ($yciaosuiyeieceug) { goto ismeikacqqyqcmqe; } header("\x43\141\143\x68\x65\55\103\x6f\156\x74\x72\157\x6c\x3a\x20\x6e\157\55\163\x74\157\162\x65\54\x20\x6e\157\55\143\x61\143\x68\x65\x2c\x20\x6d\x75\163\x74\55\162\145\x76\x61\154\151\x64\x61\x74\x65\x2c\x20\x6d\x61\x78\55\x61\147\145\75\x30"); header("\x50\162\141\x67\x6d\x61\x3a\40\156\157\55\143\x61\143\x68\x65"); header("\x45\170\x70\151\x72\145\x73\72\40" . gmdate("\x44\54\x20\x64\x20\115\40\131\40\x48\x3a\x69\x3a\x73\40\134\107\x5c\x4d\x5c\124", time())); ismeikacqqyqcmqe: return $moooemyaqewumiay; } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\x61\163\x74\55\115\x6f\x64\151\146\151\145\144\x3a\40" . gmdate("\104\54\x20\144\40\x4d\40\131\40\x48\72\x69\x3a\x73", filemtime($esaqeawoigqgagum)) . "\40\107\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto qsokkkyoackoycie; } readfile($esaqeawoigqgagum); $this->log("\x53\145\x72\x76\x69\x6e\147\40\143\x61\143\150\145\40\x66\x69\154\x65\56", ["\160\x61\x74\150" => $esaqeawoigqgagum, "\x6d\157\x64\x69\146\151\145\144" => $cocykkikgmcykggu]); qsokkkyoackoycie: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\141\163\x74\x2d\x4d\157\x64\151\146\x69\x65\x64\x3a\40" . gmdate("\104\54\x20\144\x20\115\x20\131\x20\110\x3a\151\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto casgoamcqkekgeeo; } readgzfile($esaqeawoigqgagum); $this->log("\123\x65\162\166\x69\156\x67\40\x67\172\151\160\40\143\141\143\150\145\x20\146\x69\154\145\x2e", ["\160\141\164\150" => $esaqeawoigqgagum, "\x6d\x6f\144\x69\x66\151\145\x64" => $cocykkikgmcykggu]); casgoamcqkekgeeo: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\x67\172\151\160"; $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\145\x6d\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\x65\155\x70"; if ($iiaumsgauuyeqksw->exists($egqeikuccqmogcum)) { goto qcgyggiaowuqswuw; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->rename($egqeikuccqmogcum, $esaqeawoigqgagum, true); if (!function_exists("\147\172\145\156\x63\157\144\145")) { goto yseyyukqaowwouua; } $gomewsucumqsiske = DecoratorHook::sscegwueamckwmcy("\143\141\x63\150\x65\137\147\172\x65\156\143\x6f\144\x65\x5f\x6c\145\x76\145\x6c\x5f\x63\x6f\x6d\x70\162\145\x73\163\x69\x6f\x6e", 6); $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske)); $iiaumsgauuyeqksw->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw, true); yseyyukqaowwouua: qcgyggiaowuqswuw: } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto sooecucuakgkuyis; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\122\126\x45\x52\x5f\x50\x52\x4f\x54\117\x43\117\x4c", '') . "\x20\63\60\64\40\x4e\x6f\x74\x20\x4d\157\x64\151\x66\151\145\144", true, 304); header("\x45\x78\160\151\162\x65\163\72\x20" . gmdate("\104\54\x20\144\x20\x4d\40\131\x20\110\x3a\x69\x3a\x73") . "\x20\x47\115\x54"); header("\103\141\143\150\x65\55\x43\x6f\x6e\164\x72\x6f\154\x3a\40\156\157\x2d\143\x61\x63\150\x65\54\x20\x6d\x75\163\164\x2d\x72\145\166\x61\154\x69\144\x61\164\145"); $this->log("\123\145\162\166\x69\x6e\147\x20\140\x33\60\x34\140\x20\x63\141\x63\150\145\40\x66\151\x6c\145\56", ["\160\141\164\150" => $esaqeawoigqgagum, "\155\157\144\x69\x66\151\145\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; sooecucuakgkuyis: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo() : string { $ouwgeioocoeccyik = $this->scsyywuaiumequqw(); $ouwgeioocoeccyik = preg_replace_callback("\57\x25\x5b\x30\55\x39\x41\55\x46\x5d\173\x32\175\57", [$this, "\x6d\x71\167\157\163\x79\x69\165\155\145\x77\x71\145\147\x6d\x6b"], $ouwgeioocoeccyik); return str_replace("\77", "\43", $ouwgeioocoeccyik); } private final function muiwqeouwouegcao() { if (defined("\x44\117\x4e\x54\137\120\105\122\106\117\x52\x4d\101\x4e\x43\105\x5f\x4f\120\x54\111\x4d\111\132\105")) { goto ywqakqkmmcoceqka; } define("\x44\x4f\116\124\137\x50\x45\122\x46\x4f\x52\x4d\101\x4e\103\x45\x5f\x4f\120\124\x49\115\x49\x5a\x45", true); ywqakqkmmcoceqka: } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = ManipulateServer::iawueuwikeeeseya(); if ($uykgysuswksgmwqy) { goto kwsqgqmwyyeykgum; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\120\137\111\106\x5f\x4d\x4f\104\111\x46\111\x45\104\137\123\111\x4e\x43\x45", ''); goto emauuoieewwoeyqq; kwsqgqmwyyeykgum: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\x2d\x4d\x6f\x64\151\146\151\145\x64\x2d\x53\151\156\x63\x65"] ?? ''; emauuoieewwoeyqq: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\144\157\137\143\141\x63\x68\145\137\147\145\156\x65\x72\141\164\x65\x5f\x63\x61\143\x68\151\156\x67\137\x66\151\154\x65\x73", true); } private function scsyywuaiumequqw() : string { $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); $migiiksoiymissge = ManipulateFormat::gokuyqsimauyacke($migiiksoiymissge); $migiiksoiymissge = rawurldecode($migiiksoiymissge); return $this->amqagusacuuuaswg() . sha1(untrailingslashit($migiiksoiymissge)); } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto koukiyqaccegmquc; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); koukiyqaccegmquc: return $qcgkuqesqqymcuui; } }
