<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             631c3953605e9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Purge\Traits; use Exception; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Setting; trait PurgeTrait { public function kqmkucymmoswoimq($ocqawgquwsqioses) : bool { $ksaameoqigiaoigg = false; if (!(is_array($ocqawgquwsqioses) && $ocqawgquwsqioses)) { goto eogomkswkaqwyycm; } $ksaameoqigiaoigg = true; foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { if ($this->ywuwaieucessammu($suaemuyiacqyugsm)) { goto iecqkqoiqimmisyw; } $ksaameoqigiaoigg = false; goto kiewcwsykccgocuc; iecqkqoiqimmisyw: eysuawiooiswaseq: } kiewcwsykccgocuc: eogomkswkaqwyycm: return $ksaameoqigiaoigg; } public function ywuwaieucessammu($suaemuyiacqyugsm, &$uamcoiueqaamsqma = '') : bool { $ksaameoqigiaoigg = false; $yyimiwcuegayoskq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x70\141\x67\145\137\147\145\x74\137\151\x6e\x66\x6f\137\142\171\137\x69\144"), $suaemuyiacqyugsm); if ($eeamcawaiqocomwy = ManipulateArray::get($yyimiwcuegayoskq, self::sauwwsocmukoaayu)) { goto egiauwuekseyeaeq; } $uamcoiueqaamsqma = sprintf("\45\x73\72\40\45\x73", __("\x43\x61\x6e\x20\x6e\x6f\164\x20\x66\x69\x6e\144\x20\x69\x6e\x66\157\40\x62\x79\x20\160\141\147\x65\40\x69\x64", PR__MDL__OPTIMIZATION), $suaemuyiacqyugsm); goto euuekiyqwkowiees; egiauwuekseyeaeq: $ksaameoqigiaoigg = $this->kggeaycqkokcquqk([$eeamcawaiqocomwy], $uamcoiueqaamsqma); euuekiyqwkowiees: return $ksaameoqigiaoigg; } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { try { $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\x70\165\162\x67\x65\x5f\141\x6c\x6c"), ...$ywmkwiwkosakssii); } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici("\160\165\x72\x67\145\x20\x61\154\154\40\x65\162\162\157\x72\x3a\x20{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}"); $occymigcemkqucuw = false; } return $occymigcemkqucuw; } public function kggeaycqkokcquqk($auwuoyyagaiegwae = [], &$uamcoiueqaamsqma = '') : bool { $occymigcemkqucuw = false; try { $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\137\160\x75\x72\x67\x65\x5f\165\162\x6c\x73\137\x6c\151\163\x74"), $auwuoyyagaiegwae); if ($auwuoyyagaiegwae) { goto assoyoeukmqiucyq; } $uamcoiueqaamsqma = __("\125\x72\x6c\x73\40\x61\162\x65\x20\145\155\160\164\x79\x20\x66\157\x72\40\x70\165\x72\147\x65\x20\165\162\154\x73\56", PR__MDL__OPTIMIZATION); goto kikkkoqiumqoeiyy; assoyoeukmqiucyq: $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\160\x75\x72\x67\x65\137\x75\162\x6c\163"), $auwuoyyagaiegwae); kikkkoqiumqoeiyy: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf("\45\163\x3a\40\x25\163", __("\x50\x75\x72\147\145\40\x75\162\x6c\163\x20\145\162\162\x6f\x72", PR__MDL__OPTIMIZATION), $this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } return $occymigcemkqucuw; } public function ycqquoiyyuesegsy($post) : string { return ManipulatePost::ycqquoiyyuesegsy($post); } public function ugwqkyyoomkmekqg() : bool { $ksaameoqigiaoigg = false; if (!($this->weysguygiseoukqw(Setting::kamcoqgmemeeqmsc) && extension_loaded("\x5a\x65\x6e\x64\40\117\x50\143\141\x63\150\x65"))) { goto gqycmyieayoegcsy; } $iueymcwwscwqkiyq = opcache_get_status(); $iqsymysgkgosmiys = ManipulateArray::get($iueymcwwscwqkiyq, "\157\x70\x63\141\x63\x68\145\137\x65\x6e\141\x62\x6c\x65\x64", false); if (!($iqsymysgkgosmiys && opcache_reset())) { goto msiuqseowuumiwuo; } foreach (ManipulateArray::get($iueymcwwscwqkiyq, "\163\143\x72\151\160\164\x73") as $uusmaiomayssaecw => $icwicymcioeyeyek) { $qmwoqyacswkwkiog[dirname($uusmaiomayssaecw)][basename($uusmaiomayssaecw)] = $icwicymcioeyeyek; opcache_invalidate(ManipulateArray::get($icwicymcioeyeyek, "\x66\x75\154\x6c\x5f\160\x61\164\150"), true); esokkakkumskkmiu: } wyqueeskecameuks: $ksaameoqigiaoigg = true; msiuqseowuumiwuo: gqycmyieayoegcsy: return $ksaameoqigiaoigg; } public function cekqoisoaceaqiam($post) : array { return ManipulatePost::cekqoisoaceaqiam($post); } public function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '') : string { return ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); } }
