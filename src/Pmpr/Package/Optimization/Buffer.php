<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62265ddd10fe9             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Exception; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Package\Optimization\Buffer\Buffer as BaseClass; class Buffer extends BaseClass implements ConstantInterface { use HookTrait, ComponentTrait; protected ?string $id = "\157\160\164\x69\x6d\151\172\x61\x74\151\x6f\156\x5f\x70\162\x6f\x63\145\163\x73"; public function qqcykaeioiwwaqos() { if (!$this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto aqeyqwuywqcmuoce; } ob_start([$this, "\x6f\161\x63\x71\x6b\x6f\x71\x77\x63\165\x6f\161\165\x73\153\165"]); aqeyqwuywqcmuoce: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\137\x62\x75\146\x66\145\x72\x5f\142\x65\146\157\162\145\137\x6d\x61\171\x62\x65\137\160\x72\x6f\143\x65\x73\163"), $moooemyaqewumiay); if (!$this->uuksaskqamgouosy($moooemyaqewumiay)) { goto akoweomooyuwamow; } if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto aymoguycgmuggcik; } $moooemyaqewumiay = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x62\165\146\x66\145\x72\x5f\156\x6f\x74\x5f\160\162\157\x63\x65\x73\x73\x65\144"), $moooemyaqewumiay); goto qayiqaykkywcyisq; aymoguycgmuggcik: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\x5f\142\165\146\146\145\162\137\x62\x65\x66\157\x72\x65\x5f\x70\162\157\143\145\x73\163"), $moooemyaqewumiay); $this->log("\157\160\164\151\155\x69\x7a\141\x74\151\x6f\x6e\40\142\165\x66\x66\x65\x72\40\160\x72\157\x63\x65\x73\x73\40\x73\x74\x61\x72\x74\x2e"); try { $moooemyaqewumiay = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\142\x75\x66\146\x65\x72\137\x70\x72\x6f\143\145\163\163"), $moooemyaqewumiay); } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage(); $this->log("\145\x72\x72\x6f\162\x20\x6f\x6e\x20\x62\x75\x66\146\x65\162\40\157\160\164\151\155\151\x7a\x61\x74\x69\x6f\x6e\72\x20{$uamcoiueqaamsqma}"); } qayiqaykkywcyisq: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\142\165\x66\146\145\162\x5f\x61\x66\164\x65\162\137\x70\x72\x6f\143\x65\x73\163"), $moooemyaqewumiay); $moooemyaqewumiay = $this->kcikawaummeuyeoq($moooemyaqewumiay); akoweomooyuwamow: return $moooemyaqewumiay; } public function kcikawaummeuyeoq($moooemyaqewumiay) { $moooemyaqewumiay = html_entity_decode($moooemyaqewumiay); if (!preg_match_all("\57\x68\x72\145\146\134\x73\x2a\75\134\x73\52\x28\77\x3a\133\x22\47\x5d\50\x5b\136\x22\47\x5d\x2a\51\x5b\42\x27\x5d\174\x28\x5c\x53\53\x29\51\57", $moooemyaqewumiay, $meyiiwcswqmuggyg)) { goto gcecamucuogcciig; } foreach ($meyiiwcswqmuggyg[1] as $geecqyososceumsk) { $moooemyaqewumiay = str_replace($geecqyososceumsk, urldecode($geecqyososceumsk), $moooemyaqewumiay); cueuscqkicwwicei: } oaociaioauummsey: gcecamucuogcciig: return $moooemyaqewumiay; } }
