<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c026a362a9d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; class Buffer extends BaseClass { protected ?string $id = "\x63\x61\143\x68\151\x6e\x67\x5f\x70\162\x6f\x63\x65\x73\x73"; protected Config $config; protected ?string $path; protected ?Filesystem $filesystem = null; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = trailingslashit($ywmkwiwkosakssii["\160\x61\x74\150"]); $this->config = $uiewakwqscemywuo; $this->filesystem = Filesystem::symcgieuakksimmu(); parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function kcciqwskewsuaemk() : ?Filesystem { return $this->filesystem; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq() && $this->wmgoigiyyeauqwaq()->aceaeommyuooiqge()->get("\143\x61\143\150\x65\137\145\156\x61\x62\154\145")) { goto uscissuaiyuiukea; } $this->muiwqeouwouegcao(); goto kuyqusuycscumuek; uscissuaiyuiukea: $xswggycymueygwse = $this->gskqygiceygcguyo(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\56\x68\x74\155\154"; $this->log("\x4c\157\157\153\x69\x6e\x67\x20\x66\157\162\x20\x63\141\143\150\x65\x20\146\151\x6c\x65\56", ["\160\141\164\150" => $nsmgceoqaqogqmuw]); $ecggassyswkoyocq = $nsmgceoqaqogqmuw . "\137\147\172\x69\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\x50\137\x41\103\103\105\120\124\x5f\105\116\x43\117\104\111\x4e\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\172\151\x70"); if (!($acggykmsksykwyqy && $iiaumsgauuyeqksw->coeoweawgagkycwe($ecggassyswkoyocq))) { goto qmgueimkwqmsakis; } $this->qmkgowiegksamcou($ecggassyswkoyocq); qmgueimkwqmsakis: if (!$iiaumsgauuyeqksw->coeoweawgagkycwe($nsmgceoqaqogqmuw)) { goto ooqmaweuqmcmwsuk; } $this->ecsimoiakyygwais($nsmgceoqaqogqmuw); ooqmaweuqmcmwsuk: $this->log("\x53\x74\x61\162\164\40\x62\165\x66\146\x65\x72\x2e", ["\160\x61\x74\x68" => $nsmgceoqaqogqmuw]); ob_start([$this, "\157\161\x63\161\153\157\161\x77\x63\165\157\x71\165\x73\153\x75"]); kuyqusuycscumuek: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $yciaosuiyeieceug = true; if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto qioswooukgoowsuc; } $yciaosuiyeieceug = false; goto ggoimgeeuugseiwk; qioswooukgoowsuc: $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($this->omgegoiwsakgwwug()) { goto koemwyegoqwiikom; } $yciaosuiyeieceug = false; goto qycsooiomiugimqc; koemwyegoqwiikom: $xswggycymueygwse = $this->gskqygiceygcguyo(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\x2e\150\x74\155\x6c"; $qwqyukkaswwygsyg = dirname($nsmgceoqaqogqmuw); $wmgiiumwscoyqkqa = $iiaumsgauuyeqksw->mkdir($qwqyukkaswwygsyg); if (!$wmgiiumwscoyqkqa) { goto cycwgukowsksmkyc; } $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($nsmgceoqaqogqmuw, $moooemyaqewumiay); cycwgukowsksmkyc: if (!$iiaumsgauuyeqksw->exists($nsmgceoqaqogqmuw)) { goto siuyaemoiiqyoggo; } header("\114\141\163\x74\55\115\x6f\x64\x69\146\x69\x65\x64\x3a\x20" . gmdate("\x44\54\40\144\x20\x4d\40\131\40\x48\72\x69\72\163", filemtime($nsmgceoqaqogqmuw)) . "\40\107\115\x54"); siuyaemoiiqyoggo: qycsooiomiugimqc: ggoimgeeuugseiwk: if ($yciaosuiyeieceug) { goto gimquiiwucueoqkw; } header("\103\x61\143\150\x65\55\103\157\x6e\x74\162\157\154\72\40\156\x6f\x2d\163\x74\x6f\162\x65\x2c\40\156\x6f\55\143\x61\x63\150\145\54\x20\x6d\x75\x73\164\x2d\162\145\166\141\154\151\x64\x61\x74\145\54\x20\155\x61\x78\55\x61\x67\145\75\60"); header("\120\162\141\147\155\141\72\40\x6e\157\x2d\x63\141\143\150\145"); header("\105\x78\x70\151\x72\145\x73\72\x20" . gmdate("\x44\x2c\40\x64\x20\x4d\40\x59\x20\x48\72\151\72\x73\x20\134\107\x5c\115\x5c\124", time())); gimquiiwucueoqkw: return $moooemyaqewumiay; } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\x61\163\x74\55\x4d\157\144\151\x66\151\145\144\x3a\40" . gmdate("\104\54\40\x64\x20\x4d\x20\131\x20\110\72\151\72\163", filemtime($esaqeawoigqgagum)) . "\40\x47\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto eimouyomcoqkmaae; } readfile($esaqeawoigqgagum); $this->log("\x53\x65\162\166\x69\x6e\147\40\143\x61\143\150\x65\x20\x66\x69\154\x65\56", ["\160\x61\164\150" => $esaqeawoigqgagum, "\x6d\157\x64\x69\146\151\145\144" => $cocykkikgmcykggu]); eimouyomcoqkmaae: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\141\x73\164\x2d\x4d\x6f\x64\x69\x66\151\x65\x64\x3a\40" . gmdate("\104\54\40\x64\40\115\x20\131\40\110\72\151\x3a\x73", filemtime($esaqeawoigqgagum)) . "\40\x47\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto kkwqmoeeqygoimwg; } readgzfile($esaqeawoigqgagum); $this->log("\123\x65\x72\x76\x69\x6e\x67\40\x67\x7a\x69\160\x20\143\x61\143\x68\145\40\x66\x69\154\145\x2e", ["\x70\x61\x74\x68" => $esaqeawoigqgagum, "\x6d\x6f\x64\151\x66\x69\145\x64" => $cocykkikgmcykggu]); kkwqmoeeqygoimwg: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\147\x7a\x69\x70"; $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\145\155\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\164\x65\x6d\x70"; if ($iiaumsgauuyeqksw->exists($egqeikuccqmogcum)) { goto awgmyaycugswmwae; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->rename($egqeikuccqmogcum, $esaqeawoigqgagum, true); if (!function_exists("\x67\172\x65\x6e\143\157\x64\145")) { goto mwqcykaeywsmoumm; } $gomewsucumqsiske = DecoratorHook::sscegwueamckwmcy("\x63\141\x63\x68\x65\137\147\172\x65\156\143\x6f\144\145\x5f\154\145\x76\145\x6c\x5f\x63\157\155\160\x72\x65\x73\x73\x69\157\x6e", 6); $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske)); $iiaumsgauuyeqksw->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw, true); mwqcykaeywsmoumm: awgmyaycugswmwae: } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto ywoyioqqyuocoygk; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\x45\x52\x56\x45\122\x5f\x50\122\x4f\124\x4f\103\117\114", '') . "\x20\63\60\x34\40\116\157\x74\40\115\x6f\144\151\146\x69\145\144", true, 304); header("\x45\170\160\151\x72\145\163\72\40" . gmdate("\104\x2c\x20\x64\40\x4d\x20\x59\x20\110\72\151\x3a\x73") . "\x20\x47\x4d\124"); header("\x43\141\143\x68\145\55\x43\x6f\x6e\164\162\157\x6c\72\40\x6e\157\x2d\x63\141\x63\150\145\x2c\40\x6d\x75\x73\164\x2d\162\145\166\x61\x6c\151\x64\x61\x74\145"); $this->log("\x53\x65\x72\x76\x69\x6e\147\40\140\63\60\x34\x60\x20\143\x61\143\150\x65\40\146\x69\154\x65\56", ["\x70\141\164\150" => $esaqeawoigqgagum, "\155\157\x64\x69\x66\151\145\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; ywoyioqqyuocoygk: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo() : string { $ouwgeioocoeccyik = $this->scsyywuaiumequqw(); $ouwgeioocoeccyik = preg_replace_callback("\x2f\45\133\x30\55\x39\101\55\x46\135\x7b\62\x7d\x2f", [$this, "\155\x71\167\157\x73\171\151\165\x6d\x65\167\161\145\x67\x6d\x6b"], $ouwgeioocoeccyik); return str_replace("\x3f", "\43", $ouwgeioocoeccyik); } private final function muiwqeouwouegcao() { if (defined("\104\117\116\124\x5f\120\x45\122\106\117\122\115\101\x4e\103\x45\x5f\117\120\124\x49\x4d\x49\x5a\105")) { goto iauwkeeaqsgweeoo; } define("\104\x4f\116\x54\137\120\105\x52\x46\x4f\x52\x4d\x41\x4e\103\105\x5f\117\120\124\x49\x4d\x49\132\x45", true); iauwkeeaqsgweeoo: } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = ManipulateServer::iawueuwikeeeseya(); if ($uykgysuswksgmwqy) { goto aycqgowuwagcgque; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\x5f\x49\106\x5f\x4d\x4f\104\111\106\x49\105\104\x5f\123\111\x4e\x43\x45", ''); goto icuukwkwqeoogyae; aycqgowuwagcgque: $sieoyimycoskwwku = $uykgysuswksgmwqy["\x49\x66\x2d\115\x6f\x64\151\x66\151\x65\x64\x2d\123\x69\156\143\145"] ?? ''; icuukwkwqeoogyae: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x64\x6f\x5f\143\141\143\150\x65\137\x67\145\156\x65\x72\141\x74\145\137\x63\141\143\x68\x69\x6e\147\137\x66\x69\154\145\x73", true); } private function scsyywuaiumequqw() : string { $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); $migiiksoiymissge = ManipulateFormat::gokuyqsimauyacke($migiiksoiymissge); $migiiksoiymissge = rawurldecode($migiiksoiymissge); return $this->amqagusacuuuaswg() . sha1(untrailingslashit($migiiksoiymissge)); } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto iwcmgioeaiyuacwi; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); iwcmgioeaiyuacwi: return $qcgkuqesqqymcuui; } }
