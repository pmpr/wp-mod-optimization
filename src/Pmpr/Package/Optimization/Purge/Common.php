<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62265ddd10fe9             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Purge; use Exception; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Container; use Pmpr\Package\Optimization\Setting; class Common extends Container { public function kqmkucymmoswoimq($ocqawgquwsqioses) : bool { $ksaameoqigiaoigg = false; if (!(is_array($ocqawgquwsqioses) && $ocqawgquwsqioses)) { goto aamgqoqyyooimqkm; } $ksaameoqigiaoigg = true; foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { if ($this->ywuwaieucessammu($suaemuyiacqyugsm)) { goto mcagemacuqyskogs; } $ksaameoqigiaoigg = false; goto gyskcwykkyakeims; mcagemacuqyskogs: ossakckwskyqusmm: } gyskcwykkyakeims: aamgqoqyyooimqkm: return $ksaameoqigiaoigg; } public function ywuwaieucessammu($suaemuyiacqyugsm, &$uamcoiueqaamsqma = '') : bool { $ksaameoqigiaoigg = false; $yyimiwcuegayoskq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\x70\x61\x67\x65\137\147\145\164\x5f\151\156\146\157\x5f\x62\x79\137\x69\x64"), $suaemuyiacqyugsm); if ($yyimiwcuegayoskq !== $suaemuyiacqyugsm) { goto cimascmiesomqgqs; } $uamcoiueqaamsqma = sprintf("\45\163\x3a\x20\x25\163", __("\x43\x61\156\40\x6e\157\164\40\x66\151\x6e\x64\40\x69\x6e\x66\157\x20\142\x79\x20\x70\x61\147\145\40\151\144", PR__PKG__OPTIMIZATION), $suaemuyiacqyugsm); goto easuiqiooiwgswmm; cimascmiesomqgqs: $auwuoyyagaiegwae[] = ManipulateArray::get($yyimiwcuegayoskq, self::sauwwsocmukoaayu); $ksaameoqigiaoigg = $this->kggeaycqkokcquqk($auwuoyyagaiegwae, $uamcoiueqaamsqma); easuiqiooiwgswmm: return $ksaameoqigiaoigg; } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { try { $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\160\165\x72\x67\145\137\x61\x6c\x6c"), ...$ywmkwiwkosakssii); } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici("\160\x75\162\147\x65\x20\141\x6c\x6c\40\145\x72\162\x6f\x72\72\x20{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}"); $occymigcemkqucuw = false; } return $occymigcemkqucuw; } public function kggeaycqkokcquqk($auwuoyyagaiegwae = [], &$uamcoiueqaamsqma = '') : bool { $occymigcemkqucuw = false; try { $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\x70\165\x72\x67\145\x5f\x75\x72\x6c\163\137\x6c\x69\x73\x74"), $auwuoyyagaiegwae); if ($auwuoyyagaiegwae && is_array($auwuoyyagaiegwae)) { goto saiuoomgskwgyeya; } $uamcoiueqaamsqma = __("\125\x72\154\163\x20\x61\162\x65\40\x65\x6d\160\164\171\40\146\157\x72\40\160\165\x72\x67\x65\x20\x75\x72\154\163\x2e", PR__PKG__OPTIMIZATION); goto kuuawiosmkgqsscy; saiuoomgskwgyeya: $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\160\x75\162\147\145\137\x75\162\154\x73"), $auwuoyyagaiegwae); kuuawiosmkgqsscy: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf("\x25\163\x3a\x20\x25\x73", __("\120\165\x72\x67\x65\x20\x75\x72\154\x73\40\x65\x72\162\x6f\162", PR__PKG__OPTIMIZATION), $this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } return $occymigcemkqucuw; } public function ycqquoiyyuesegsy($post) : string { return ManipulatePost::ycqquoiyyuesegsy($post); } public function ugwqkyyoomkmekqg() : bool { $ksaameoqigiaoigg = false; if (!$this->weysguygiseoukqw(Setting::kamcoqgmemeeqmsc)) { goto aucwccaiqwsmyuaq; } if (!extension_loaded("\132\x65\x6e\x64\40\x4f\120\x63\141\143\150\x65")) { goto bgakaasgwwygosyi; } $iueymcwwscwqkiyq = opcache_get_status(); $iqsymysgkgosmiys = ManipulateArray::get($iueymcwwscwqkiyq, "\x6f\160\x63\141\x63\x68\x65\x5f\x65\156\141\x62\x6c\145\x64", false); if (!($iqsymysgkgosmiys && opcache_reset())) { goto qaewauyekqucciyc; } foreach (ManipulateArray::get($iueymcwwscwqkiyq, "\x73\x63\162\x69\160\164\x73") as $uusmaiomayssaecw => $icwicymcioeyeyek) { $qmwoqyacswkwkiog[dirname($uusmaiomayssaecw)][basename($uusmaiomayssaecw)] = $icwicymcioeyeyek; opcache_invalidate(ManipulateArray::get($icwicymcioeyeyek, "\146\x75\x6c\x6c\x5f\x70\x61\164\150"), $cwwowqyuwccuykom = true); momuweiasiwskekw: } kwocaqggwcksesce: $this->oaumimwssciwumys("\x50\x75\162\147\145\x20\x4f\120\143\141\143\x68\x65\x20\x63\x61\143\x68\x65"); $ksaameoqigiaoigg = true; qaewauyekqucciyc: bgakaasgwwygosyi: aucwccaiqwsmyuaq: return $ksaameoqigiaoigg; } public function cekqoisoaceaqiam($post) : array { return ManipulatePost::cekqoisoaceaqiam($post); } public function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '') : string { return ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); } }
