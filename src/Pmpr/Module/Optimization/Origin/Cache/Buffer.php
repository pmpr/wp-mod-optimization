<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6554aae47c553             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; class Buffer extends BaseClass { protected ?string $id = "\143\x61\x63\150\151\x6e\147\x5f\160\162\x6f\143\145\x73\x73"; protected Config $config; protected ?string $path; protected ?Filesystem $filesystem = null; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = trailingslashit($ywmkwiwkosakssii["\x70\x61\x74\x68"]); $this->config = $uiewakwqscemywuo; $this->filesystem = Filesystem::symcgieuakksimmu(); parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function kcciqwskewsuaemk() : ?Filesystem { return $this->filesystem; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq() && $this->wmgoigiyyeauqwaq()->aceaeommyuooiqge()->get("\143\x61\143\x68\x65\x5f\x65\x6e\x61\142\x6c\145")) { goto gykuaukukosiocoy; } $this->muiwqeouwouegcao(); goto camawumockccayaq; gykuaukukosiocoy: $xswggycymueygwse = $this->gskqygiceygcguyo(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\x2e\x68\x74\155\x6c"; $this->log("\114\x6f\157\x6b\x69\156\x67\40\146\x6f\x72\x20\x63\x61\143\x68\x65\40\146\151\x6c\145\56", ["\160\141\x74\150" => $nsmgceoqaqogqmuw]); $ecggassyswkoyocq = $nsmgceoqaqogqmuw . "\x5f\x67\x7a\151\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\x5f\x41\x43\103\x45\120\x54\137\x45\116\103\117\x44\x49\116\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\x7a\x69\x70"); if (!($acggykmsksykwyqy && $iiaumsgauuyeqksw->coeoweawgagkycwe($ecggassyswkoyocq))) { goto agemeseegiuuowgo; } $this->qmkgowiegksamcou($ecggassyswkoyocq); agemeseegiuuowgo: if (!$iiaumsgauuyeqksw->coeoweawgagkycwe($nsmgceoqaqogqmuw)) { goto goswwiomuackymqi; } $this->ecsimoiakyygwais($nsmgceoqaqogqmuw); goswwiomuackymqi: $this->log("\x53\164\141\x72\164\x20\x62\x75\146\x66\x65\x72\56", ["\x70\x61\164\150" => $nsmgceoqaqogqmuw]); ob_start([$this, "\157\161\143\161\x6b\x6f\161\x77\x63\x75\x6f\x71\165\x73\x6b\165"]); camawumockccayaq: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $yciaosuiyeieceug = true; if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay) && $this->wmgoigiyyeauqwaq()->ocysssyiuaueqiei("\143\x61\x63\150\x65")) { goto qesqgumuouyymcwa; } $yciaosuiyeieceug = false; goto csyoimsqgwcmiwki; qesqgumuouyymcwa: $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($this->omgegoiwsakgwwug()) { goto qowcwmsiyscackaa; } $yciaosuiyeieceug = false; goto aqigiwmamkowomiw; qowcwmsiyscackaa: $xswggycymueygwse = $this->gskqygiceygcguyo(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\56\x68\164\155\x6c"; $qwqyukkaswwygsyg = dirname($nsmgceoqaqogqmuw); $wmgiiumwscoyqkqa = $iiaumsgauuyeqksw->mkdir($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto uuisaeysawuagysg; } $this->log("\x63\x61\143\x68\145\40\144\151\x72\x65\143\x74\x6f\162\x79\40\156\x6f\164\x20\x67\x65\x6e\x65\162\x61\x74\x65\144\x3a\40{$qwqyukkaswwygsyg}"); goto ggqeakyaggiuegek; uuisaeysawuagysg: $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($nsmgceoqaqogqmuw, $moooemyaqewumiay); ggqeakyaggiuegek: if (!$iiaumsgauuyeqksw->exists($nsmgceoqaqogqmuw)) { goto usgcoawgqswoeiec; } header("\x4c\x61\x73\164\x2d\x4d\157\144\151\146\151\x65\x64\72\40" . gmdate("\x44\x2c\x20\x64\x20\x4d\x20\x59\40\110\x3a\x69\72\163", filemtime($nsmgceoqaqogqmuw)) . "\40\x47\x4d\124"); usgcoawgqswoeiec: aqigiwmamkowomiw: csyoimsqgwcmiwki: if ($yciaosuiyeieceug) { goto ggqwcqssoauckuic; } header("\x43\x61\143\150\x65\x2d\x43\x6f\x6e\164\x72\x6f\x6c\x3a\40\156\x6f\x2d\163\x74\x6f\x72\x65\54\x20\x6e\157\55\x63\141\x63\x68\x65\x2c\40\x6d\x75\x73\164\55\162\145\166\141\154\151\x64\x61\x74\145\54\x20\155\x61\170\x2d\141\x67\145\x3d\60"); header("\x50\162\x61\x67\155\141\x3a\40\156\x6f\x2d\143\x61\x63\x68\145"); header("\105\170\x70\x69\162\x65\x73\x3a\x20" . gmdate("\104\54\x20\x64\x20\115\x20\131\x20\x48\72\x69\72\163\40\x5c\107\x5c\115\x5c\x54", time())); ggqwcqssoauckuic: return $moooemyaqewumiay; } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\141\163\x74\x2d\x4d\x6f\144\151\x66\151\x65\x64\72\40" . gmdate("\x44\54\40\x64\40\115\40\131\40\110\72\151\72\163", filemtime($esaqeawoigqgagum)) . "\x20\x47\x4d\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto ggwcauaeuagekeyo; } readfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\x76\151\x6e\x67\40\x63\x61\143\150\145\40\146\151\154\145\56", ["\160\141\x74\150" => $esaqeawoigqgagum, "\x6d\157\x64\x69\146\151\x65\x64" => $cocykkikgmcykggu]); ggwcauaeuagekeyo: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\x61\163\164\55\115\157\x64\x69\146\x69\x65\x64\x3a\x20" . gmdate("\x44\54\x20\144\x20\115\40\131\40\x48\x3a\151\72\163", filemtime($esaqeawoigqgagum)) . "\x20\x47\x4d\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto mmkoqmccusoeaoyi; } readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\162\x76\151\156\147\x20\147\172\151\x70\x20\143\141\x63\150\x65\x20\x66\x69\x6c\x65\56", ["\x70\x61\164\x68" => $esaqeawoigqgagum, "\155\157\x64\x69\x66\x69\145\144" => $cocykkikgmcykggu]); mmkoqmccusoeaoyi: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\147\x7a\151\x70"; $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\x65\155\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\145\x6d\x70"; if ($iiaumsgauuyeqksw->exists($egqeikuccqmogcum)) { goto yyamycyesguwueuw; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->rename($egqeikuccqmogcum, $esaqeawoigqgagum, true); if (!function_exists("\147\x7a\x65\156\143\157\x64\145")) { goto waewaiuiogywqigu; } $gomewsucumqsiske = DecoratorHook::sscegwueamckwmcy("\143\141\x63\150\x65\x5f\x67\172\145\156\x63\x6f\144\x65\x5f\154\x65\166\145\154\x5f\x63\157\x6d\160\x72\145\x73\x73\151\x6f\x6e", 6); $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske)); $iiaumsgauuyeqksw->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw, true); waewaiuiogywqigu: $this->log("\143\141\143\x68\x65\x20\146\151\x6c\x65\x20\147\145\156\x65\162\x61\x74\x65\x64\x2e"); yyamycyesguwueuw: } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto aymmymequcisekie; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\x52\126\105\x52\137\x50\x52\x4f\x54\x4f\103\x4f\114", '') . "\40\x33\x30\x34\40\116\157\164\40\x4d\157\x64\x69\x66\151\145\x64", true, 304); header("\x45\170\160\x69\x72\x65\163\x3a\x20" . gmdate("\104\54\40\x64\x20\x4d\40\x59\40\x48\x3a\151\72\163") . "\40\x47\x4d\124"); header("\x43\x61\143\x68\x65\55\103\157\x6e\164\x72\x6f\154\x3a\x20\156\157\55\x63\x61\143\150\x65\x2c\x20\155\165\x73\164\55\x72\x65\166\141\154\x69\x64\x61\x74\145"); $this->log("\123\x65\x72\x76\151\x6e\147\x20\140\x33\60\64\140\x20\x63\141\x63\x68\x65\40\x66\x69\x6c\145\56", ["\x70\141\x74\150" => $esaqeawoigqgagum, "\155\x6f\144\151\146\x69\145\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; aymmymequcisekie: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo() : string { $ouwgeioocoeccyik = $this->scsyywuaiumequqw(); $ouwgeioocoeccyik = preg_replace_callback("\57\x25\133\60\55\71\x41\x2d\x46\135\173\62\x7d\x2f", [$this, "\x6d\x71\x77\157\163\171\151\165\x6d\x65\x77\x71\145\147\x6d\153"], $ouwgeioocoeccyik); return str_replace("\77", "\x23", $ouwgeioocoeccyik); } private function muiwqeouwouegcao() { if (defined("\104\117\116\124\137\x50\x45\x52\x46\117\x52\x4d\101\x4e\x43\105\x5f\x4f\x50\124\x49\115\111\132\x45")) { goto gyeayeuuyiemuwuq; } define("\104\117\x4e\124\x5f\x50\x45\122\106\x4f\122\115\101\x4e\x43\105\137\x4f\120\x54\111\x4d\111\132\105", true); gyeayeuuyiemuwuq: } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = ManipulateServer::iawueuwikeeeseya(); if ($uykgysuswksgmwqy) { goto kyggwyywiycksgqq; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\137\111\x46\137\x4d\117\104\x49\x46\111\105\104\137\123\x49\116\x43\x45", ''); goto sugumgeqcwgekcqs; kyggwyywiycksgqq: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\x2d\115\157\144\x69\146\151\x65\144\55\123\x69\156\x63\x65"] ?? ''; sugumgeqcwgekcqs: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\144\157\137\x63\141\143\x68\145\x5f\x67\145\x6e\145\162\x61\x74\145\137\x63\141\143\x68\151\x6e\x67\137\146\x69\154\x65\x73", true); } private function scsyywuaiumequqw() : string { return $this->amqagusacuuuaswg() . ManipulateFormat::ocyiomiukusoicuc(ManipulateServer::ekcymmyqoceukosc()); } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto imeaiksowuukikui; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); imeaiksowuukikui: return $qcgkuqesqqymcuui; } }
