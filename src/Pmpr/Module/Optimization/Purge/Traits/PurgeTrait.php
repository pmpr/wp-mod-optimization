<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e8fa75eb5af             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Purge\Traits; use Exception; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Setting; trait PurgeTrait { public function kqmkucymmoswoimq($ocqawgquwsqioses) : bool { $ksaameoqigiaoigg = false; if (!(is_array($ocqawgquwsqioses) && $ocqawgquwsqioses)) { goto gimsiyauegmikyka; } $ksaameoqigiaoigg = true; foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { if ($this->ywuwaieucessammu($suaemuyiacqyugsm)) { goto kuymgsewmeoimeuq; } $ksaameoqigiaoigg = false; goto mioaoacqueiyueak; kuymgsewmeoimeuq: oaseseemoaqcgqeu: } mioaoacqueiyueak: gimsiyauegmikyka: return $ksaameoqigiaoigg; } public function ywuwaieucessammu($suaemuyiacqyugsm, &$uamcoiueqaamsqma = '') : bool { $ksaameoqigiaoigg = false; $yyimiwcuegayoskq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\x70\x61\x67\145\137\147\x65\164\x5f\151\156\146\x6f\137\x62\171\x5f\x69\x64"), $suaemuyiacqyugsm); if ($eeamcawaiqocomwy = ManipulateArray::get($yyimiwcuegayoskq, self::sauwwsocmukoaayu)) { goto kisuswmyqsocukgk; } $uamcoiueqaamsqma = sprintf("\45\x73\x3a\x20\45\163", __("\103\141\x6e\x20\156\x6f\x74\x20\x66\151\x6e\x64\x20\151\156\146\x6f\40\142\171\x20\x70\x61\x67\145\x20\x69\x64", PR__MDL__OPTIMIZATION), $suaemuyiacqyugsm); goto wisaekiyyweeemuy; kisuswmyqsocukgk: $ksaameoqigiaoigg = $this->kggeaycqkokcquqk([$eeamcawaiqocomwy], $uamcoiueqaamsqma); wisaekiyyweeemuy: return $ksaameoqigiaoigg; } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { try { $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\160\165\x72\x67\x65\x5f\x61\x6c\x6c"), ...$ywmkwiwkosakssii); } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici("\x70\165\162\147\145\40\141\154\x6c\40\145\x72\162\157\x72\x3a\x20{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}"); $occymigcemkqucuw = false; } return $occymigcemkqucuw; } public function kggeaycqkokcquqk($auwuoyyagaiegwae = [], &$uamcoiueqaamsqma = '') : bool { $occymigcemkqucuw = false; try { $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\x70\x75\162\147\145\x5f\165\162\154\x73\137\154\x69\x73\x74"), $auwuoyyagaiegwae); if ($auwuoyyagaiegwae) { goto aosasoogesueygak; } $uamcoiueqaamsqma = __("\x55\x72\154\x73\x20\x61\x72\145\40\145\x6d\x70\164\x79\40\x66\157\x72\40\160\x75\162\x67\x65\40\165\x72\x6c\163\56", PR__MDL__OPTIMIZATION); goto emqmqkeygumaasam; aosasoogesueygak: $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x70\165\x72\147\145\137\165\x72\x6c\x73"), $auwuoyyagaiegwae); emqmqkeygumaasam: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf("\x25\x73\x3a\40\45\163", __("\x50\165\162\x67\x65\x20\165\162\154\x73\40\x65\x72\162\157\162", PR__MDL__OPTIMIZATION), $this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } return $occymigcemkqucuw; } public function ycqquoiyyuesegsy($post) : string { return ManipulatePost::ycqquoiyyuesegsy($post); } public function ugwqkyyoomkmekqg() : bool { $ksaameoqigiaoigg = false; if (!($this->weysguygiseoukqw(Setting::kamcoqgmemeeqmsc) && extension_loaded("\x5a\145\x6e\x64\x20\117\120\x63\x61\x63\x68\x65"))) { goto iyocimuyeemkaaso; } $iueymcwwscwqkiyq = opcache_get_status(); $iqsymysgkgosmiys = ManipulateArray::get($iueymcwwscwqkiyq, "\157\x70\x63\141\x63\x68\x65\x5f\x65\156\x61\142\x6c\x65\144", false); if (!($iqsymysgkgosmiys && opcache_reset())) { goto asueqykmkoaimguq; } foreach (ManipulateArray::get($iueymcwwscwqkiyq, "\x73\143\162\x69\160\x74\163") as $uusmaiomayssaecw => $icwicymcioeyeyek) { $qmwoqyacswkwkiog[dirname($uusmaiomayssaecw)][basename($uusmaiomayssaecw)] = $icwicymcioeyeyek; opcache_invalidate(ManipulateArray::get($icwicymcioeyeyek, "\x66\x75\x6c\x6c\x5f\x70\x61\x74\x68"), true); scccyaiaggeasgqg: } meegaqaesckqmyec: $ksaameoqigiaoigg = true; asueqykmkoaimguq: iyocimuyeemkaaso: return $ksaameoqigiaoigg; } public function cekqoisoaceaqiam($post) : array { return ManipulatePost::cekqoisoaceaqiam($post); } public function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '') : string { return ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); } }
