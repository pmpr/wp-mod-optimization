<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e79fd80d6bb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Exception; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Module\Optimization\Buffer\Buffer as BaseClass; class Buffer extends BaseClass implements ConstantInterface { use HookTrait, ComponentTrait; protected ?string $id = "\x6f\x70\164\151\x6d\x69\x7a\141\x74\x69\x6f\x6e\137\x70\x72\x6f\143\x65\163\x73"; public function qqcykaeioiwwaqos() { if (!$this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto qwogeocemuaaasiw; } ob_start([$this, "\x6f\161\x63\x71\153\157\161\167\143\x75\x6f\161\x75\x73\x6b\165"]); qwogeocemuaaasiw: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\137\142\x75\146\146\x65\x72\137\142\145\x66\x6f\162\x65\137\x6d\141\x79\142\145\x5f\x70\162\157\x63\x65\x73\x73"), $moooemyaqewumiay); if (!$this->uuksaskqamgouosy($moooemyaqewumiay)) { goto goimywgsweeqsewo; } if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto ywmuoigomwwigqea; } $moooemyaqewumiay = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\142\165\x66\x66\x65\x72\x5f\156\x6f\x74\x5f\x70\162\x6f\x63\145\x73\163\145\x64"), $moooemyaqewumiay); goto cgqkqmiekaageyka; ywmuoigomwwigqea: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\142\165\146\x66\x65\x72\x5f\142\x65\x66\x6f\x72\x65\x5f\x70\x72\157\x63\145\x73\163"), $moooemyaqewumiay); $this->log("\157\x70\x74\x69\155\151\x7a\x61\x74\151\x6f\x6e\x20\142\165\x66\146\145\162\40\160\162\x6f\x63\x65\163\x73\x20\163\164\x61\x72\164\x2e"); try { $moooemyaqewumiay = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\142\165\x66\x66\145\162\x5f\160\x72\157\x63\x65\x73\x73"), $moooemyaqewumiay); } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage(); $this->log("\x65\162\162\157\x72\x20\157\156\40\x62\165\146\x66\x65\x72\x20\x6f\160\164\151\155\x69\172\141\x74\x69\157\156\72\40{$uamcoiueqaamsqma}"); } cgqkqmiekaageyka: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\142\165\146\x66\x65\162\x5f\x61\146\x74\145\x72\x5f\160\162\x6f\x63\x65\163\x73"), $moooemyaqewumiay); $moooemyaqewumiay = $this->kcikawaummeuyeoq($moooemyaqewumiay); goimywgsweeqsewo: return $moooemyaqewumiay; } public function kcikawaummeuyeoq($moooemyaqewumiay) { $moooemyaqewumiay = html_entity_decode($moooemyaqewumiay); if (!preg_match_all("\x2f\150\x72\145\x66\x5c\x73\x2a\75\x5c\163\x2a\x28\x3f\x3a\133\42\47\x5d\50\x5b\136\42\47\x5d\x2a\x29\x5b\x22\47\135\174\50\134\x53\x2b\x29\x29\x2f", $moooemyaqewumiay, $meyiiwcswqmuggyg)) { goto kmocamaieycogugg; } foreach ($meyiiwcswqmuggyg[1] as $geecqyososceumsk) { $moooemyaqewumiay = str_replace($geecqyososceumsk, urldecode($geecqyososceumsk), $moooemyaqewumiay); cqyiukmuqceicqwa: } uomwseyiqckeewgo: kmocamaieycogugg: return $moooemyaqewumiay; } }
