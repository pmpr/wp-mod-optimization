<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6321c656ef420             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Exception; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Module\Optimization\Buffer\Buffer as BaseClass; class Buffer extends BaseClass implements ConstantInterface { use HookTrait, ComponentTrait; protected ?string $id = "\157\160\x74\151\155\151\172\x61\x74\151\157\x6e\x5f\160\162\157\143\145\163\x73"; public function qqcykaeioiwwaqos() { if (!$this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto kwagwqyusyiyoaqs; } ob_start([$this, "\x6f\161\143\x71\x6b\x6f\x71\x77\x63\165\x6f\x71\x75\163\x6b\165"]); kwagwqyusyiyoaqs: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\142\x75\x66\146\145\162\137\142\145\146\157\x72\145\x5f\155\141\x79\x62\x65\137\160\162\157\143\145\163\x73"), $moooemyaqewumiay); if (!$this->uuksaskqamgouosy($moooemyaqewumiay)) { goto iomcaiwewsawiamu; } if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto yowsmsiyimmimemc; } $moooemyaqewumiay = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x62\x75\x66\146\x65\162\x5f\x6e\157\x74\x5f\x70\x72\157\143\x65\x73\x73\x65\144"), $moooemyaqewumiay); goto kiqogmwcgcamwiig; yowsmsiyimmimemc: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\142\x75\146\146\145\x72\x5f\x62\145\x66\157\162\145\x5f\x70\162\x6f\143\145\x73\163"), $moooemyaqewumiay); $this->log("\x6f\x70\164\x69\155\151\172\141\x74\x69\x6f\156\40\142\165\x66\x66\x65\x72\x20\x70\x72\x6f\x63\145\x73\163\x20\163\x74\141\x72\164\56"); try { $moooemyaqewumiay = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\x62\x75\x66\146\145\162\x5f\x70\x72\157\143\x65\163\163"), $moooemyaqewumiay); } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage(); $this->log("\x65\162\162\x6f\162\x20\x6f\x6e\40\142\165\146\x66\145\162\40\x6f\160\164\151\155\151\172\141\164\151\157\x6e\72\x20{$uamcoiueqaamsqma}"); } kiqogmwcgcamwiig: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x62\x75\146\x66\145\162\x5f\x61\x66\164\x65\x72\137\160\162\x6f\x63\x65\x73\163"), $moooemyaqewumiay); $moooemyaqewumiay = $this->kcikawaummeuyeoq($moooemyaqewumiay); iomcaiwewsawiamu: return $moooemyaqewumiay; } public function kcikawaummeuyeoq($moooemyaqewumiay) { $moooemyaqewumiay = html_entity_decode($moooemyaqewumiay); if (!preg_match_all("\x2f\x68\162\145\146\x5c\163\x2a\75\134\x73\52\50\77\72\x5b\x22\47\x5d\50\x5b\x5e\x22\47\x5d\52\51\133\42\x27\x5d\174\x28\x5c\x53\53\51\51\x2f", $moooemyaqewumiay, $meyiiwcswqmuggyg)) { goto uukumskkeggaowck; } foreach ($meyiiwcswqmuggyg[1] as $geecqyososceumsk) { $moooemyaqewumiay = str_replace($geecqyososceumsk, urldecode($geecqyososceumsk), $moooemyaqewumiay); eequksumcoogyoem: } sqiciiuwmykocycc: uukumskkeggaowck: return $moooemyaqewumiay; } }
