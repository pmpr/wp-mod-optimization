<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e8fa75eb5af             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Exception; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Module\Optimization\Buffer\Buffer as BaseClass; class Buffer extends BaseClass implements ConstantInterface { use HookTrait, ComponentTrait; protected ?string $id = "\157\x70\164\x69\155\151\x7a\141\164\x69\157\156\x5f\x70\162\157\143\145\x73\163"; public function qqcykaeioiwwaqos() { if (!$this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto cgqkqmiekaageyka; } ob_start([$this, "\x6f\x71\x63\161\x6b\x6f\161\x77\x63\165\157\x71\x75\163\153\x75"]); cgqkqmiekaageyka: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x62\x75\x66\146\145\162\137\142\145\146\157\162\145\137\155\x61\171\x62\145\x5f\x70\162\x6f\143\145\x73\x73"), $moooemyaqewumiay); if (!$this->uuksaskqamgouosy($moooemyaqewumiay)) { goto cqyiukmuqceicqwa; } if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto goimywgsweeqsewo; } $moooemyaqewumiay = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\142\165\146\x66\x65\162\x5f\156\x6f\164\137\x70\162\157\143\145\163\x73\145\x64"), $moooemyaqewumiay); goto uomwseyiqckeewgo; goimywgsweeqsewo: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\x62\x75\146\146\x65\162\x5f\142\145\146\x6f\x72\145\137\160\x72\157\143\145\x73\163"), $moooemyaqewumiay); $this->log("\157\x70\164\151\x6d\x69\172\141\164\x69\157\156\40\x62\x75\x66\x66\x65\x72\x20\x70\x72\x6f\143\145\163\163\40\x73\x74\141\162\164\x2e"); try { $moooemyaqewumiay = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\142\x75\x66\x66\x65\162\x5f\160\x72\157\143\x65\163\x73"), $moooemyaqewumiay); } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage(); $this->log("\x65\x72\162\157\162\40\157\156\40\x62\165\146\x66\145\x72\40\x6f\160\164\x69\155\x69\x7a\x61\x74\x69\157\156\72\40{$uamcoiueqaamsqma}"); } uomwseyiqckeewgo: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\137\142\165\x66\146\145\162\x5f\141\x66\x74\145\x72\x5f\x70\x72\157\x63\x65\x73\x73"), $moooemyaqewumiay); $moooemyaqewumiay = $this->kcikawaummeuyeoq($moooemyaqewumiay); cqyiukmuqceicqwa: return $moooemyaqewumiay; } public function kcikawaummeuyeoq($moooemyaqewumiay) { $moooemyaqewumiay = html_entity_decode($moooemyaqewumiay); if (!preg_match_all("\57\x68\x72\x65\x66\134\163\x2a\75\x5c\163\52\50\77\72\x5b\x22\47\135\50\133\x5e\x22\47\x5d\52\51\x5b\42\x27\135\174\x28\x5c\x53\53\x29\x29\x2f", $moooemyaqewumiay, $meyiiwcswqmuggyg)) { goto wamkaouokmyoyuqu; } foreach ($meyiiwcswqmuggyg[1] as $geecqyososceumsk) { $moooemyaqewumiay = str_replace($geecqyososceumsk, urldecode($geecqyososceumsk), $moooemyaqewumiay); iuieyqacggsykgus: } kmocamaieycogugg: wamkaouokmyoyuqu: return $moooemyaqewumiay; } }
