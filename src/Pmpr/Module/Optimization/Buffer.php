<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62fab02fddc1b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Exception; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Module\Optimization\Buffer\Buffer as BaseClass; class Buffer extends BaseClass implements ConstantInterface { use HookTrait, ComponentTrait; protected ?string $id = "\157\x70\164\151\x6d\151\172\141\164\151\x6f\156\x5f\160\162\x6f\143\x65\163\163"; public function qqcykaeioiwwaqos() { if (!$this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto mgiwqumikeuieocg; } ob_start([$this, "\157\x71\x63\161\x6b\x6f\161\167\143\165\x6f\x71\x75\163\153\165"]); mgiwqumikeuieocg: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\x62\x75\x66\146\x65\162\137\142\145\146\x6f\162\x65\137\155\x61\171\x62\145\137\x70\x72\x6f\143\145\x73\163"), $moooemyaqewumiay); if (!$this->uuksaskqamgouosy($moooemyaqewumiay)) { goto aeekgeqawgsmgiqw; } if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto yegkgccwomcgkumi; } $moooemyaqewumiay = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x62\165\x66\x66\x65\x72\x5f\156\x6f\164\137\x70\x72\157\x63\x65\x73\x73\145\144"), $moooemyaqewumiay); goto qikmwaessamuueoe; yegkgccwomcgkumi: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137\142\165\x66\146\x65\162\137\142\145\x66\x6f\x72\x65\137\x70\162\x6f\143\x65\x73\x73"), $moooemyaqewumiay); $this->log("\157\160\164\151\x6d\x69\172\x61\x74\x69\157\x6e\40\142\x75\146\x66\x65\x72\x20\x70\x72\x6f\143\145\163\x73\x20\163\164\141\x72\164\x2e"); try { $moooemyaqewumiay = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\142\165\146\x66\x65\162\x5f\x70\162\x6f\x63\x65\163\x73"), $moooemyaqewumiay); } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage(); $this->log("\x65\x72\162\x6f\x72\x20\x6f\156\40\142\165\146\x66\145\x72\40\x6f\x70\164\x69\x6d\x69\x7a\x61\x74\x69\x6f\x6e\72\x20{$uamcoiueqaamsqma}"); } qikmwaessamuueoe: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\x62\165\146\x66\145\x72\137\x61\x66\164\145\x72\137\x70\x72\x6f\x63\145\163\x73"), $moooemyaqewumiay); $moooemyaqewumiay = $this->kcikawaummeuyeoq($moooemyaqewumiay); aeekgeqawgsmgiqw: return $moooemyaqewumiay; } public function kcikawaummeuyeoq($moooemyaqewumiay) { $moooemyaqewumiay = html_entity_decode($moooemyaqewumiay); if (!preg_match_all("\x2f\150\162\x65\x66\x5c\x73\52\x3d\x5c\163\x2a\x28\77\72\133\x22\x27\x5d\50\x5b\x5e\42\47\135\x2a\x29\x5b\42\47\135\x7c\x28\134\x53\x2b\x29\51\x2f", $moooemyaqewumiay, $meyiiwcswqmuggyg)) { goto cesaaiguwciccysi; } foreach ($meyiiwcswqmuggyg[1] as $geecqyososceumsk) { $moooemyaqewumiay = str_replace($geecqyososceumsk, urldecode($geecqyososceumsk), $moooemyaqewumiay); scaciowogmayswms: } imgagmqusgiqissi: cesaaiguwciccysi: return $moooemyaqewumiay; } }
