<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62bc22330c5ef             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Purge; use Exception; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Setting; class Common extends Container { public function kqmkucymmoswoimq($ocqawgquwsqioses) : bool { $ksaameoqigiaoigg = false; if (!(is_array($ocqawgquwsqioses) && $ocqawgquwsqioses)) { goto geugsymgsiuuqccg; } $ksaameoqigiaoigg = true; foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { if ($this->ywuwaieucessammu($suaemuyiacqyugsm)) { goto quewwumogiocouii; } $ksaameoqigiaoigg = false; goto gqywcowiigceimaw; quewwumogiocouii: eyuoecmogqwkmomi: } gqywcowiigceimaw: geugsymgsiuuqccg: return $ksaameoqigiaoigg; } public function ywuwaieucessammu($suaemuyiacqyugsm, &$uamcoiueqaamsqma = '') : bool { $ksaameoqigiaoigg = false; $yyimiwcuegayoskq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\160\141\147\x65\x5f\147\x65\164\137\x69\x6e\x66\x6f\x5f\142\171\x5f\x69\144"), $suaemuyiacqyugsm); if ($yyimiwcuegayoskq !== $suaemuyiacqyugsm) { goto mgwgiesscqoaqcau; } $uamcoiueqaamsqma = sprintf("\x25\163\72\40\45\x73", __("\x43\x61\156\40\x6e\157\164\40\x66\151\156\x64\40\x69\156\x66\157\40\142\x79\x20\160\x61\147\x65\x20\x69\144", PR__MDL__OPTIMIZATION), $suaemuyiacqyugsm); goto ioacywuoyuskqmwy; mgwgiesscqoaqcau: $auwuoyyagaiegwae[] = ManipulateArray::get($yyimiwcuegayoskq, self::sauwwsocmukoaayu); $ksaameoqigiaoigg = $this->kggeaycqkokcquqk($auwuoyyagaiegwae, $uamcoiueqaamsqma); ioacywuoyuskqmwy: return $ksaameoqigiaoigg; } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { try { $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\137\x70\165\162\x67\x65\x5f\141\x6c\154"), ...$ywmkwiwkosakssii); } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici("\x70\165\162\147\145\x20\141\x6c\154\x20\145\162\x72\x6f\x72\x3a\40{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}"); $occymigcemkqucuw = false; } return $occymigcemkqucuw; } public function kggeaycqkokcquqk($auwuoyyagaiegwae = [], &$uamcoiueqaamsqma = '') : bool { $occymigcemkqucuw = false; try { $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\160\x75\162\147\x65\x5f\165\x72\154\x73\137\154\151\x73\164"), $auwuoyyagaiegwae); if ($auwuoyyagaiegwae && is_array($auwuoyyagaiegwae)) { goto bgoygegmogcmeaou; } $uamcoiueqaamsqma = __("\x55\x72\154\163\40\141\162\x65\40\x65\155\x70\x74\x79\40\x66\x6f\x72\40\x70\x75\x72\147\145\40\x75\162\x6c\x73\x2e", PR__MDL__OPTIMIZATION); goto awgaewwsskasueke; bgoygegmogcmeaou: $occymigcemkqucuw = true; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x70\x75\x72\147\x65\137\165\162\154\x73"), $auwuoyyagaiegwae); awgaewwsskasueke: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf("\45\x73\x3a\x20\45\163", __("\120\165\162\147\145\x20\165\162\x6c\163\x20\x65\162\162\157\x72", PR__MDL__OPTIMIZATION), $this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } return $occymigcemkqucuw; } public function ycqquoiyyuesegsy($post) : string { return ManipulatePost::ycqquoiyyuesegsy($post); } public function ugwqkyyoomkmekqg() : bool { $ksaameoqigiaoigg = false; if (!$this->weysguygiseoukqw(Setting::kamcoqgmemeeqmsc)) { goto uykwmucgoywoesui; } if (!extension_loaded("\132\x65\x6e\x64\x20\117\120\x63\x61\x63\x68\x65")) { goto eygqeoiskweuiuqi; } $iueymcwwscwqkiyq = opcache_get_status(); $iqsymysgkgosmiys = ManipulateArray::get($iueymcwwscwqkiyq, "\x6f\x70\143\x61\143\150\145\137\145\156\x61\x62\154\x65\x64", false); if (!($iqsymysgkgosmiys && opcache_reset())) { goto wwccoougkywoaoui; } foreach (ManipulateArray::get($iueymcwwscwqkiyq, "\163\143\x72\151\x70\164\x73") as $uusmaiomayssaecw => $icwicymcioeyeyek) { $qmwoqyacswkwkiog[dirname($uusmaiomayssaecw)][basename($uusmaiomayssaecw)] = $icwicymcioeyeyek; opcache_invalidate(ManipulateArray::get($icwicymcioeyeyek, "\x66\165\154\154\x5f\x70\x61\164\150"), $cwwowqyuwccuykom = true); iamooqskosymqsmw: } cgmcwkmmcmmkiooc: $this->oaumimwssciwumys("\x50\165\162\x67\x65\40\117\x50\x63\141\x63\x68\145\40\143\x61\x63\150\145"); $ksaameoqigiaoigg = true; wwccoougkywoaoui: eygqeoiskweuiuqi: uykwmucgoywoesui: return $ksaameoqigiaoigg; } public function cekqoisoaceaqiam($post) : array { return ManipulatePost::cekqoisoaceaqiam($post); } public function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '') : string { return ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); } }
