<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624eb0824ce5d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; class Buffer extends BaseClass { protected ?string $id = "\x63\141\x63\x68\x69\156\x67\137\x70\x72\x6f\143\145\163\163"; protected Config $config; protected ?string $path; protected ?Filesystem $filesystem = null; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = trailingslashit($ywmkwiwkosakssii["\160\141\164\x68"]); $this->config = $uiewakwqscemywuo; $this->filesystem = Filesystem::symcgieuakksimmu(); parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function kcciqwskewsuaemk() : ?Filesystem { return $this->filesystem; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq() && $this->wmgoigiyyeauqwaq()->aceaeommyuooiqge()->get("\143\141\x63\150\x65\x5f\145\156\x61\x62\154\145")) { goto kwiuqqwamsimqgme; } $this->muiwqeouwouegcao(); goto qmegcmqemmywoqas; kwiuqqwamsimqgme: $xswggycymueygwse = $this->gskqygiceygcguyo(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\56\x68\164\155\x6c"; $this->log("\x4c\x6f\x6f\x6b\151\156\x67\40\x66\157\x72\x20\143\141\143\150\x65\x20\x66\x69\154\x65\x2e", ["\x70\141\164\x68" => $nsmgceoqaqogqmuw]); $ecggassyswkoyocq = $nsmgceoqaqogqmuw . "\137\147\172\151\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\137\x41\103\x43\105\120\124\x5f\105\x4e\103\117\104\111\x4e\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\172\x69\x70"); if (!($acggykmsksykwyqy && $iiaumsgauuyeqksw->coeoweawgagkycwe($ecggassyswkoyocq))) { goto gskacikgkwcuauko; } $this->qmkgowiegksamcou($ecggassyswkoyocq); gskacikgkwcuauko: if (!$iiaumsgauuyeqksw->coeoweawgagkycwe($nsmgceoqaqogqmuw)) { goto yyieomeeqycmikqw; } $this->ecsimoiakyygwais($nsmgceoqaqogqmuw); yyieomeeqycmikqw: $this->log("\x53\x74\141\162\164\x20\142\165\x66\146\145\x72\x2e", ["\160\141\x74\x68" => $nsmgceoqaqogqmuw]); ob_start([$this, "\x6f\x71\143\161\x6b\x6f\x71\x77\x63\x75\x6f\x71\x75\163\153\165"]); qmegcmqemmywoqas: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $yciaosuiyeieceug = true; if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto kkwqmewaksmokuqy; } $yciaosuiyeieceug = false; goto gsgkayokisiesciy; kkwqmewaksmokuqy: $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($this->omgegoiwsakgwwug()) { goto seieguyaaiqismgo; } $yciaosuiyeieceug = false; goto qgyoesyiasqimcoe; seieguyaaiqismgo: $xswggycymueygwse = $this->gskqygiceygcguyo(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\56\x68\164\x6d\x6c"; $qwqyukkaswwygsyg = dirname($nsmgceoqaqogqmuw); $wmgiiumwscoyqkqa = $iiaumsgauuyeqksw->mkdir($qwqyukkaswwygsyg); if (!$wmgiiumwscoyqkqa) { goto giooasyeqwaaocea; } $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($nsmgceoqaqogqmuw, $moooemyaqewumiay); giooasyeqwaaocea: if (!$iiaumsgauuyeqksw->exists($nsmgceoqaqogqmuw)) { goto uueywyysiicuauem; } header("\114\x61\x73\x74\x2d\115\x6f\144\151\x66\151\145\x64\72\x20" . gmdate("\x44\54\x20\x64\40\115\x20\131\x20\x48\72\x69\72\x73", filemtime($nsmgceoqaqogqmuw)) . "\x20\x47\x4d\x54"); uueywyysiicuauem: qgyoesyiasqimcoe: gsgkayokisiesciy: if ($yciaosuiyeieceug) { goto ascogkesqmuuaesq; } header("\103\x61\143\x68\145\55\x43\x6f\x6e\164\x72\x6f\x6c\72\x20\156\157\x2d\163\x74\x6f\162\145\54\x20\156\157\55\x63\141\x63\150\x65\x2c\40\x6d\165\x73\x74\x2d\162\x65\166\141\154\151\144\x61\x74\145\54\40\x6d\141\x78\55\141\x67\x65\x3d\x30"); header("\120\162\x61\147\155\141\72\40\x6e\x6f\x2d\x63\x61\x63\x68\x65"); header("\x45\170\160\x69\162\x65\163\x3a\40" . gmdate("\104\54\40\x64\x20\x4d\x20\131\x20\110\72\151\72\x73\x20\134\107\134\x4d\134\124", time())); ascogkesqmuuaesq: return $moooemyaqewumiay; } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\141\163\164\x2d\x4d\157\x64\151\146\151\x65\x64\72\x20" . gmdate("\104\x2c\40\x64\x20\115\40\x59\x20\x48\x3a\x69\72\163", filemtime($esaqeawoigqgagum)) . "\x20\x47\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto askukaucmocewkgg; } readfile($esaqeawoigqgagum); $this->log("\x53\145\x72\x76\151\x6e\147\40\x63\x61\143\x68\x65\40\x66\151\x6c\145\56", ["\x70\x61\164\150" => $esaqeawoigqgagum, "\155\157\144\151\x66\151\x65\144" => $cocykkikgmcykggu]); askukaucmocewkgg: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\141\x73\x74\55\x4d\157\144\151\146\151\145\144\x3a\x20" . gmdate("\x44\54\x20\x64\40\x4d\x20\131\40\x48\72\x69\72\163", filemtime($esaqeawoigqgagum)) . "\x20\x47\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto kiemqsgcmouqscao; } readgzfile($esaqeawoigqgagum); $this->log("\123\145\162\x76\x69\156\x67\x20\147\172\x69\x70\x20\143\141\143\x68\x65\x20\x66\151\x6c\145\x2e", ["\x70\x61\x74\150" => $esaqeawoigqgagum, "\155\x6f\x64\151\146\151\x65\144" => $cocykkikgmcykggu]); kiemqsgcmouqscao: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\x67\x7a\151\x70"; $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\145\155\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\164\x65\x6d\x70"; if ($iiaumsgauuyeqksw->exists($egqeikuccqmogcum)) { goto meqmcgmksqiqcoyq; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->rename($egqeikuccqmogcum, $esaqeawoigqgagum, true); if (!function_exists("\x67\172\145\x6e\143\x6f\x64\145")) { goto wssaaemscmmiomee; } $gomewsucumqsiske = DecoratorHook::sscegwueamckwmcy("\143\141\x63\150\145\x5f\147\x7a\145\156\x63\x6f\144\145\x5f\154\145\x76\145\154\x5f\143\x6f\155\160\162\x65\x73\x73\x69\157\x6e", 6); $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske)); $iiaumsgauuyeqksw->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw, true); wssaaemscmmiomee: meqmcgmksqiqcoyq: } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto euskosgaksmimgug; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\x52\x56\105\122\137\120\122\117\x54\117\103\x4f\x4c", '') . "\40\63\x30\64\x20\x4e\157\x74\40\x4d\x6f\144\151\x66\151\145\x64", true, 304); header("\x45\x78\160\x69\x72\145\163\72\40" . gmdate("\104\x2c\40\x64\x20\115\x20\131\x20\x48\72\x69\x3a\163") . "\40\107\x4d\124"); header("\103\x61\x63\x68\145\55\x43\x6f\156\x74\x72\157\154\x3a\x20\x6e\157\x2d\143\141\x63\x68\145\x2c\40\x6d\x75\x73\164\55\162\x65\166\x61\154\x69\144\141\x74\145"); $this->log("\x53\x65\162\166\x69\156\147\40\x60\63\60\x34\x60\x20\143\x61\143\x68\x65\40\146\151\x6c\145\56", ["\160\x61\x74\150" => $esaqeawoigqgagum, "\155\x6f\x64\151\146\x69\x65\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; euskosgaksmimgug: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo() : string { $ouwgeioocoeccyik = $this->scsyywuaiumequqw(); $ouwgeioocoeccyik = preg_replace_callback("\57\45\133\60\x2d\x39\x41\55\x46\135\173\x32\175\57", [$this, "\x6d\161\x77\157\x73\x79\x69\x75\155\145\x77\161\145\x67\155\x6b"], $ouwgeioocoeccyik); return str_replace("\77", "\x23", $ouwgeioocoeccyik); } private final function muiwqeouwouegcao() { if (defined("\104\117\116\x54\137\120\105\x52\106\117\x52\x4d\x41\x4e\x43\105\x5f\x4f\120\124\111\115\x49\132\105")) { goto iusaeoimukymskgs; } define("\x44\x4f\x4e\x54\x5f\x50\x45\x52\x46\117\122\x4d\x41\116\x43\x45\137\117\120\124\x49\x4d\x49\132\105", true); iusaeoimukymskgs: } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = ManipulateServer::iawueuwikeeeseya(); if ($uykgysuswksgmwqy) { goto asciaakaoygususy; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\x50\137\x49\x46\137\x4d\117\104\x49\x46\111\x45\x44\x5f\123\111\x4e\103\x45", ''); goto eaggoasiwogmquwc; asciaakaoygususy: $sieoyimycoskwwku = $uykgysuswksgmwqy["\x49\x66\x2d\x4d\x6f\144\151\146\x69\145\x64\55\123\151\x6e\x63\145"] ?? ''; eaggoasiwogmquwc: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x64\x6f\x5f\143\x61\x63\x68\145\x5f\147\x65\156\x65\x72\x61\164\x65\137\143\x61\x63\x68\x69\156\147\x5f\146\x69\x6c\145\163", true); } private function scsyywuaiumequqw() : string { $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); $migiiksoiymissge = ManipulateFormat::gokuyqsimauyacke($migiiksoiymissge); $migiiksoiymissge = rawurldecode($migiiksoiymissge); return $this->amqagusacuuuaswg() . sha1(untrailingslashit($migiiksoiymissge)); } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto meoweqcaaosoomeu; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); meoweqcaaosoomeu: return $qcgkuqesqqymcuui; } }
