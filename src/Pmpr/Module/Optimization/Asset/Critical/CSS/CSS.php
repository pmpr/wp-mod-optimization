<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62d7c3928abb7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical\CSS; use Exception; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Asset\Setting; class CSS extends Common { const qmmkckgoqyucomiy = "\x6f\x70\x74\163\164\x79\x6c\145\163"; const qmyicsgiomwgeswc = "\x6f\x70\164\151\155\x69\172\141\x74\151\x6f\156\x5f\x63\x72\151\164\x69\143\x61\x6c\137\143\x73\163\137\x68\141\x6e\x64\154\145"; const eauaaousugoecaui = "\157\x70\x74\x69\x6d\x69\x7a\x61\x74\151\x6f\x6e\137\x63\162\x69\164\x69\x63\x61\x6c\137\143\x73\x73\x5f\x67\x65\x6e\145\162\141\164\x69\157\x6e\137"; const yagyiemiycosowge = self::eauaaousugoecaui . "\x70\x72\157\x63\145\x73\163\137\162\x75\x6e\x6e\x69\x6e\147"; const eukyiewmgskwgiiu = self::eauaaousugoecaui . "\144\157\x6e\x65"; protected bool $optimized = false; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\164\137\142\x75\x66\x66\145\x72\x5f\x70\162\x6f\143\x65\163\x73"), [$this, "\x65\x78\164\x72\141\x63\164"], 20)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\164\x5f\141\x6c\x6c\x6f\167\x5f\x61\163\171\156\143\137\x6c\x6f\x61\x64\x5f\163\x74\171\x6c\x65\x73"), [$this, "\x63\x75\161\x69\x6b\157\x79\161\x71\x77\153\165\165\155\153\x6d"]); parent::kgquecmsgcouyaya(); } public function cuqikoyqqwkuumkm($cuakwceieagskoaa) { if (!$this->qgmkawgcegiogqwy()) { goto qayiqaykkywcyisq; } $cuakwceieagskoaa = true; qayiqaykkywcyisq: return $cuakwceieagskoaa; } public function extract($moooemyaqewumiay) { if (!($ogiyyuwciysokiuc = ManipulateServer::get("\160\162\145\x6c\x6f\141\x64", 0))) { goto wyqueeskecameuks; } $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); if (!$this->ocysssyiuaueqiei(self::cwoackywkgsameww)) { goto kikkkoqiumqoeiyy; } try { $icyaoosaykeskiuu = ''; if ($yqimccamkgmmuuyg = API::symcgieuakksimmu()) { goto egiauwuekseyeaeq; } $this->uocccyeugiykcmes($this->aqgegcykekmuggsu()); goto euuekiyqwkowiees; egiauwuekseyeaeq: if ($aokagokqyuysuksm = $yqimccamkgmmuuyg->extract($migiiksoiymissge, $ogiyyuwciysokiuc, $iswcokucwmiosiaq)) { goto iecqkqoiqimmisyw; } $this->yqkwsouguwgoywcw($iswcokucwmiosiaq); goto eogomkswkaqwyycm; iecqkqoiqimmisyw: $oyiokksswogocuwm = 20; $gugkgkcqscgeiiao = 5; sleep($gugkgkcqscgeiiao); oaociaioauummsey: if (!($oyiokksswogocuwm > 0)) { goto akoweomooyuwamow; } $sogksuscggsicmac = $yqimccamkgmmuuyg->cemakceqaqeeuyuk($aokagokqyuysuksm, $iswcokucwmiosiaq); if ($iswcokucwmiosiaq) { goto kiewcwsykccgocuc; } $iwskiosiswyoiesg = ManipulateArray::get($sogksuscggsicmac, self::eikgweiqgomeisyo); switch ($iwskiosiswyoiesg) { case self::scigcyyimwwgmiui: case self::eqewsqmqmsiocaeg: sleep($gugkgkcqscgeiiao); goto cueuscqkicwwicei; case self::uasuowkaguiwoouw: $aggamyqqskiqkcea = ManipulateArray::get($sogksuscggsicmac, "\162\145\x61\163\157\x6e", ''); $this->yqkwsouguwgoywcw(sprintf("\x63\x72\x69\x74\151\143\141\154\40\x63\x73\x73\40\145\x78\x74\x72\x61\x63\x74\x69\156\x67\x20\x66\141\151\x6c\145\x64\72\40\x25\x73", $aggamyqqskiqkcea)); case self::amcogigwsaqssuai: if (!($icyaoosaykeskiuu = ManipulateArray::qamwegcyimgcqksw($sogksuscggsicmac, self::uiwqcumqkgikqyue))) { goto suscosoukqeyyqgs; } $icyaoosaykeskiuu .= $this->weysguygiseoukqw(Setting::qwmwuwqwwaiiaqou, ''); suscosoukqeyyqgs: $oyiokksswogocuwm = 0; goto cueuscqkicwwicei; } gcecamucuogcciig: cueuscqkicwwicei: goto eysuawiooiswaseq; kiewcwsykccgocuc: $this->yqkwsouguwgoywcw($iswcokucwmiosiaq); eysuawiooiswaseq: $oyiokksswogocuwm--; goto oaociaioauummsey; akoweomooyuwamow: $this->optimized = true; eogomkswkaqwyycm: euuekiyqwkowiees: } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici(sprintf(__("\x43\162\151\164\x69\143\x61\154\x20\x43\x53\x53\72\x20\45\163", PR__MDL__OPTIMIZATION), $this->kyacickkomkioeyu($wgaoewqkwgomoaai))); Manipulate::wwckmeoskuagomki("\117\x50\x54\x49\115\111\132\101\x54\x49\117\x4e\x5f\104\x4f\116\124\x5f\x43\101\x43\x48\105\x5f\x50\101\107\x45", 1); } $icyaoosaykeskiuu = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\143\x72\151\164\x69\x63\141\x6c\137\163\164\171\154\145\163"), $icyaoosaykeskiuu); if (!$icyaoosaykeskiuu) { goto assoyoeukmqiucyq; } $icyaoosaykeskiuu = ManipulateHTML::uuccukgasskgimsq("\163\164\x79\154\x65", [self::gouqcwikiiygyasc => self::qmmkckgoqyucomiy], $icyaoosaykeskiuu); $kqywgoqsmuswammk = DOMCrawler::qqimkcgcmeewwwei($moooemyaqewumiay, "\150\x65\x61\144\40\76\x20\163\164\x79\x6c\x65\54\x20\150\145\141\144\40\76\40\x6c\x69\x6e\153"); $moooemyaqewumiay = str_replace($kqywgoqsmuswammk, "{$icyaoosaykeskiuu}{$kqywgoqsmuswammk}", $moooemyaqewumiay); assoyoeukmqiucyq: kikkkoqiumqoeiyy: wyqueeskecameuks: return $moooemyaqewumiay; } public function qgmkawgcegiogqwy($kaogqwcskswkymgo = true) : bool { return $kaogqwcskswkymgo && $this->optimized; } }
