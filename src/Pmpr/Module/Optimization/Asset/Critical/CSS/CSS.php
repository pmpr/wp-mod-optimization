<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c026a362a9d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical\CSS; use Exception; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class CSS extends Common { const qmmkckgoqyucomiy = "\x6f\160\164\163\x74\x79\154\145\163"; const qmyicsgiomwgeswc = "\157\x70\164\x69\x6d\151\x7a\141\164\x69\x6f\x6e\137\x63\162\x69\x74\151\143\x61\154\137\143\x73\x73\137\x68\x61\156\x64\x6c\145"; const eauaaousugoecaui = "\157\x70\164\151\x6d\x69\x7a\141\164\151\x6f\156\x5f\x63\x72\x69\x74\151\x63\x61\154\x5f\x63\163\x73\137\147\145\x6e\x65\162\x61\x74\x69\157\x6e\x5f"; const yagyiemiycosowge = self::eauaaousugoecaui . "\160\162\x6f\143\x65\x73\163\x5f\162\165\x6e\156\x69\x6e\x67"; const eukyiewmgskwgiiu = self::eauaaousugoecaui . "\144\x6f\x6e\145"; protected bool $optimized = false; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x62\x75\146\146\x65\162\137\x70\x72\x6f\x63\145\163\163"), [$this, "\145\170\164\162\141\x63\x74"], 20)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\x5f\141\154\154\157\x77\x5f\144\145\x6c\141\171\137\163\164\171\x6c\145\x73"), [$this, "\161\x63\x63\155\x77\x69\x69\x6f\x6b\x71\x6b\x75\151\145\x6b\x6f"]); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { } public function qccmwiiokqkuieko($cuakwceieagskoaa) { if (!$this->qgmkawgcegiogqwy()) { goto maaisuqwkymeguys; } $cuakwceieagskoaa = true; maaisuqwkymeguys: return $cuakwceieagskoaa; } public function extract($moooemyaqewumiay) { if (!($ogiyyuwciysokiuc = ManipulateServer::get("\160\162\145\x6c\x6f\141\x64", 0))) { goto ikcwmsgocyuqiumc; } $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); if (!$this->ocysssyiuaueqiei(self::cwoackywkgsameww)) { goto cyosacayacumuaks; } try { if ($yqimccamkgmmuuyg = API::symcgieuakksimmu()) { goto giuccakymqymawgk; } $this->uocccyeugiykcmes($this->aqgegcykekmuggsu()); goto sicgyiyiocyygkoc; giuccakymqymawgk: if ($aokagokqyuysuksm = $yqimccamkgmmuuyg->extract($migiiksoiymissge, $ogiyyuwciysokiuc, $iswcokucwmiosiaq)) { goto oeusomaaeekakake; } $this->yqkwsouguwgoywcw($iswcokucwmiosiaq); goto kwuckkyqaygwgcuy; oeusomaaeekakake: $oyiokksswogocuwm = 20; $gugkgkcqscgeiiao = 5; sleep($gugkgkcqscgeiiao); sksgcusuyqcwqswe: if (!($oyiokksswogocuwm > 0)) { goto qkyciyiwkmgkmquk; } $sogksuscggsicmac = $yqimccamkgmmuuyg->cemakceqaqeeuyuk($aokagokqyuysuksm, $iswcokucwmiosiaq); if ($iswcokucwmiosiaq) { goto aeiemwacaiygemmg; } $iwskiosiswyoiesg = ManipulateArray::get($sogksuscggsicmac, self::eikgweiqgomeisyo); switch ($iwskiosiswyoiesg) { case self::scigcyyimwwgmiui: case self::eqewsqmqmsiocaeg: sleep($gugkgkcqscgeiiao); goto ayceeyuocgowqwsa; case self::uasuowkaguiwoouw: $aggamyqqskiqkcea = ManipulateArray::get($sogksuscggsicmac, "\162\x65\x61\163\157\x6e", ''); $this->yqkwsouguwgoywcw(sprintf("\x63\162\151\164\151\143\141\x6c\x20\143\x73\163\x20\145\x78\x74\x72\141\143\164\151\x6e\147\x20\x66\141\151\154\x65\144\x3a\x20\45\x73", $aggamyqqskiqkcea)); goto ayceeyuocgowqwsa; case self::amcogigwsaqssuai: $caokcyqaukiegscs = ManipulateArray::qamwegcyimgcqksw($sogksuscggsicmac, self::uiwqcumqkgikqyue); if (!$caokcyqaukiegscs) { goto yggseoaommssscwo; } $caokcyqaukiegscs = ManipulateHTML::uuccukgasskgimsq("\x73\164\x79\154\145", [self::gouqcwikiiygyasc => self::qmmkckgoqyucomiy], $caokcyqaukiegscs); $kqywgoqsmuswammk = DOMCrawler::qqimkcgcmeewwwei($moooemyaqewumiay, "\x68\145\141\x64\x20\76\40\x73\x74\x79\x6c\145\x2c\40\150\x65\x61\x64\40\x3e\40\x6c\151\x6e\x6b"); $moooemyaqewumiay = str_replace($kqywgoqsmuswammk, "{$caokcyqaukiegscs}{$kqywgoqsmuswammk}", $moooemyaqewumiay); yggseoaommssscwo: $oyiokksswogocuwm = 0; goto ayceeyuocgowqwsa; } iuwkiyimqmgguose: ayceeyuocgowqwsa: goto yyqygaokeccgugos; aeiemwacaiygemmg: $this->yqkwsouguwgoywcw($iswcokucwmiosiaq); yyqygaokeccgugos: $oyiokksswogocuwm--; goto sksgcusuyqcwqswe; qkyciyiwkmgkmquk: $this->optimized = true; kwuckkyqaygwgcuy: sicgyiyiocyygkoc: } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici(sprintf(__("\x43\162\x69\x74\x69\x63\141\154\40\x43\123\123\72\x20\x25\x73", PR__MDL__OPTIMIZATION), $this->kyacickkomkioeyu($wgaoewqkwgomoaai))); Manipulate::wwckmeoskuagomki("\x4f\x50\x54\x49\x4d\111\132\x41\124\x49\x4f\x4e\x5f\104\117\x4e\x54\137\x43\x41\x43\x48\105\x5f\x50\101\107\105", 1); } cyosacayacumuaks: ikcwmsgocyuqiumc: return $moooemyaqewumiay; } public function qgmkawgcegiogqwy($kaogqwcskswkymgo = true) : bool { return $kaogqwcskswkymgo && $this->optimized; } }
