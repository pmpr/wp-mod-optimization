<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ae3139832e9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Exception; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Module\Optimization\Buffer\Buffer as BaseClass; class Buffer extends BaseClass implements ConstantInterface { use HookTrait, ComponentTrait; protected ?string $id = "\157\x70\164\151\x6d\x69\x7a\x61\164\151\157\156\137\160\162\157\x63\145\163\163"; public function qqcykaeioiwwaqos() { if (!$this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto qwigomakwmyiwkgo; } ob_start([$this, "\x6f\161\x63\x71\x6b\x6f\161\x77\143\x75\x6f\x71\165\x73\153\165"]); qwigomakwmyiwkgo: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137\142\165\x66\146\145\162\x5f\x62\145\x66\x6f\x72\145\137\x6d\x61\x79\142\145\137\160\x72\157\x63\x65\163\163"), $moooemyaqewumiay); if (!$this->uuksaskqamgouosy($moooemyaqewumiay)) { goto csscmcacoikwsecs; } if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto myoicgcuugciueis; } $moooemyaqewumiay = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\142\165\x66\x66\x65\162\x5f\156\157\x74\x5f\160\x72\x6f\x63\x65\x73\x73\145\144"), $moooemyaqewumiay); goto asmecuqiyyswueqe; myoicgcuugciueis: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x62\165\x66\146\x65\162\x5f\142\x65\x66\x6f\x72\x65\137\x70\162\157\143\x65\163\x73"), $moooemyaqewumiay); $this->log("\157\x70\x74\151\x6d\x69\172\x61\164\151\x6f\156\x20\142\165\146\146\x65\162\x20\x70\162\x6f\x63\145\x73\163\x20\x73\164\x61\x72\164\56"); try { $moooemyaqewumiay = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\137\142\165\146\x66\145\x72\x5f\160\162\x6f\143\x65\163\163"), $moooemyaqewumiay); } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage(); $this->log("\145\x72\162\157\162\40\x6f\156\40\x62\x75\x66\146\x65\162\x20\x6f\x70\164\151\x6d\x69\x7a\x61\164\151\x6f\x6e\x3a\x20{$uamcoiueqaamsqma}"); } asmecuqiyyswueqe: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\x62\x75\x66\146\x65\x72\x5f\x61\x66\164\145\x72\137\160\x72\157\143\145\x73\x73"), $moooemyaqewumiay); $moooemyaqewumiay = $this->kcikawaummeuyeoq($moooemyaqewumiay); csscmcacoikwsecs: return $moooemyaqewumiay; } public function kcikawaummeuyeoq($moooemyaqewumiay) { $moooemyaqewumiay = html_entity_decode($moooemyaqewumiay); if (!preg_match_all("\57\150\x72\x65\x66\x5c\x73\x2a\75\134\163\52\50\x3f\72\x5b\42\47\x5d\x28\x5b\136\42\x27\135\52\51\x5b\42\x27\135\174\x28\x5c\123\x2b\x29\51\57", $moooemyaqewumiay, $meyiiwcswqmuggyg)) { goto mkwskuycuyguqqok; } foreach ($meyiiwcswqmuggyg[1] as $geecqyososceumsk) { $moooemyaqewumiay = str_replace($geecqyososceumsk, urldecode($geecqyososceumsk), $moooemyaqewumiay); kuicqywysciceggs: } cuykwgmswkskqkyi: mkwskuycuyguqqok: return $moooemyaqewumiay; } }
