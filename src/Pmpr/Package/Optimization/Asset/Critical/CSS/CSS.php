<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0278673873             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Critical\CSS; use Exception; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class CSS extends Common { const STYLE_TAG_ID = "\157\160\164\163\x74\x79\154\x65\163"; const CRITICAL_CSS_HANDLE = "\157\160\164\151\x6d\151\x7a\x61\164\151\157\x6e\x5f\x63\162\x69\164\x69\x63\x61\x6c\x5f\x63\x73\x73\137\150\x61\x6e\144\154\145"; const CRITICAL_CSS_GENERATION_ = "\x6f\x70\x74\x69\155\x69\x7a\141\x74\x69\157\x6e\x5f\143\162\x69\164\151\x63\x61\x6c\137\143\163\x73\137\x67\145\x6e\145\162\141\164\x69\157\x6e\x5f"; const RUNNING_PROCESS_TRANSITION = self::CRITICAL_CSS_GENERATION_ . "\x70\162\x6f\x63\145\163\163\137\x72\165\156\x6e\151\x6e\x67"; const CRITICAL_CSS_GENERATION_DONE = self::CRITICAL_CSS_GENERATION_ . "\x64\x6f\x6e\145"; protected bool $optimized = false; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\x5f\x62\x75\x66\146\x65\162\137\x70\x72\x6f\143\145\x73\163"), [$this, "\x65\170\x74\x72\x61\143\164"], 20)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x61\154\154\x6f\167\137\144\145\154\x61\x79\x5f\163\x74\x79\x6c\x65\163"), [$this, "\x71\x63\x63\x6d\x77\151\x69\x6f\153\161\x6b\165\151\x65\x6b\x6f"]); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { } public function qccmwiiokqkuieko($cuakwceieagskoaa) { if (!$this->qgmkawgcegiogqwy()) { goto cycasoiysmksuwqk; } $cuakwceieagskoaa = true; cycasoiysmksuwqk: return $cuakwceieagskoaa; } public function extract($moooemyaqewumiay) { if ($this->ocysssyiuaueqiei("\x6c\x65\x76\145\154\55\62")) { goto kmwwqgiacsoksgcy; } $this->uiagwusgwcassqua("\x63\141\156\x20\x6e\157\164\x20\x65\x78\x74\162\x61\x63\x74\x20\x63\162\151\x74\x69\143\141\154\x20\143\x73\x73"); goto akieeaeqiwugimie; kmwwqgiacsoksgcy: $yqimccamkgmmuuyg = API::symcgieuakksimmu(); $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); try { $ogiyyuwciysokiuc = ManipulateServer::get("\x70\x72\x65\x6c\157\141\x64", 0); if ($aokagokqyuysuksm = $yqimccamkgmmuuyg->extract($migiiksoiymissge, $ogiyyuwciysokiuc, $iswcokucwmiosiaq)) { goto seaiwkkgyyegiyug; } $this->yqkwsouguwgoywcw($iswcokucwmiosiaq); goto uauuoyigkmqoasaq; seaiwkkgyyegiyug: $oyiokksswogocuwm = 20; sleep(2); yicaqocukqoauqgc: if (!($oyiokksswogocuwm > 0)) { goto muimagegskoisckc; } $sogksuscggsicmac = $yqimccamkgmmuuyg->gioggcykgoikcwiy($aokagokqyuysuksm, $iswcokucwmiosiaq); if ($iswcokucwmiosiaq) { goto mmesoisgqucowwms; } $iwskiosiswyoiesg = ManipulateArray::get($sogksuscggsicmac, "\163\164\x61\164\145"); switch ($iwskiosiswyoiesg) { case "\167\x61\x69\x74": case "\141\143\164\151\166\x65": sleep(2); goto kmcygqkmwcgwamkw; case "\146\x61\x69\154\x65\x64": $aggamyqqskiqkcea = ManipulateArray::get($sogksuscggsicmac, "\x72\x65\x61\163\157\x6e", ''); $this->yqkwsouguwgoywcw(sprintf("\143\162\x69\164\151\x63\x61\154\40\x63\163\x73\40\x65\170\x74\x72\x61\x63\164\x69\156\x67\40\146\x61\x69\x6c\x65\x64\72\40\45\163", $aggamyqqskiqkcea)); goto kmcygqkmwcgwamkw; case "\143\x6f\155\160\154\145\164\145\144": $caokcyqaukiegscs = ManipulateArray::qamwegcyimgcqksw($sogksuscggsicmac, self::uiwqcumqkgikqyue); if (!$caokcyqaukiegscs) { goto sueeqeioeiwkscao; } $caokcyqaukiegscs = ManipulateHTML::uuccukgasskgimsq("\163\164\171\154\x65", ["\x69\x64" => self::STYLE_TAG_ID], $caokcyqaukiegscs); $kqywgoqsmuswammk = DOMCrawler::qqimkcgcmeewwwei($moooemyaqewumiay, "\x68\145\141\144\40\x3e\40\163\164\x79\154\145\54\x20\150\x65\x61\144\x20\76\x20\154\151\x6e\x6b"); $moooemyaqewumiay = str_replace($kqywgoqsmuswammk, "{$caokcyqaukiegscs}{$kqywgoqsmuswammk}", $moooemyaqewumiay); sueeqeioeiwkscao: $oyiokksswogocuwm = 0; goto kmcygqkmwcgwamkw; } gysmigyakgaakeoy: kmcygqkmwcgwamkw: goto uieuouugckwokske; mmesoisgqucowwms: $this->yqkwsouguwgoywcw($iswcokucwmiosiaq); uieuouugckwokske: $oyiokksswogocuwm--; goto yicaqocukqoauqgc; muimagegskoisckc: $this->optimized = true; uauuoyigkmqoasaq: } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai)); Manipulate::wwckmeoskuagomki("\x4f\x50\x54\111\x4d\111\x5a\x41\124\x49\117\x4e\137\104\117\x4e\124\137\x43\101\103\x48\105\137\120\x41\x47\105", 1); } akieeaeqiwugimie: return $moooemyaqewumiay; } public function qgmkawgcegiogqwy($kaogqwcskswkymgo = true) : bool { return $kaogqwcskswkymgo && $this->optimized; } }
