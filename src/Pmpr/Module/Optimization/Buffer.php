<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6326c8204f364             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Exception; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Module\Optimization\Buffer\Buffer as BaseClass; class Buffer extends BaseClass implements ConstantInterface { use HookTrait, ComponentTrait; protected ?string $id = "\157\x70\x74\151\x6d\151\172\141\x74\x69\157\156\x5f\160\x72\157\x63\145\163\x73"; public function qqcykaeioiwwaqos() { if (!$this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto kwagwqyusyiyoaqs; } ob_start([$this, "\157\x71\143\x71\153\x6f\161\x77\x63\x75\x6f\161\165\163\x6b\x75"]); kwagwqyusyiyoaqs: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\x62\x75\146\x66\145\162\x5f\x62\x65\146\x6f\162\x65\x5f\155\141\171\x62\x65\x5f\160\x72\157\x63\x65\x73\163"), $moooemyaqewumiay); if (!$this->uuksaskqamgouosy($moooemyaqewumiay)) { goto iomcaiwewsawiamu; } if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto yowsmsiyimmimemc; } $moooemyaqewumiay = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\137\142\x75\146\x66\x65\162\x5f\156\x6f\x74\137\160\162\157\143\x65\x73\x73\145\144"), $moooemyaqewumiay); goto kiqogmwcgcamwiig; yowsmsiyimmimemc: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\x62\x75\x66\x66\x65\x72\x5f\x62\145\x66\157\x72\145\137\160\162\157\143\x65\163\163"), $moooemyaqewumiay); $this->log("\157\x70\164\151\x6d\x69\172\x61\164\x69\x6f\156\40\142\165\x66\146\x65\162\x20\x70\x72\157\x63\145\x73\163\x20\x73\164\141\x72\164\x2e"); try { $moooemyaqewumiay = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\142\165\x66\x66\145\162\x5f\160\162\x6f\x63\145\x73\x73"), $moooemyaqewumiay); } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage(); $this->log("\x65\x72\162\x6f\x72\x20\x6f\x6e\40\142\165\146\x66\145\x72\x20\157\160\164\x69\155\x69\172\141\x74\x69\157\x6e\x3a\40{$uamcoiueqaamsqma}"); } kiqogmwcgcamwiig: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\x62\165\146\x66\x65\162\137\141\146\164\x65\x72\137\160\162\x6f\x63\x65\163\163"), $moooemyaqewumiay); $moooemyaqewumiay = $this->kcikawaummeuyeoq($moooemyaqewumiay); iomcaiwewsawiamu: return $moooemyaqewumiay; } public function kcikawaummeuyeoq($moooemyaqewumiay) { $moooemyaqewumiay = html_entity_decode($moooemyaqewumiay); if (!preg_match_all("\57\150\162\x65\146\134\163\x2a\75\x5c\163\x2a\x28\x3f\72\133\x22\47\135\50\133\x5e\x22\47\x5d\x2a\51\133\42\x27\x5d\174\x28\134\123\53\51\x29\x2f", $moooemyaqewumiay, $meyiiwcswqmuggyg)) { goto uukumskkeggaowck; } foreach ($meyiiwcswqmuggyg[1] as $geecqyososceumsk) { $moooemyaqewumiay = str_replace($geecqyososceumsk, urldecode($geecqyososceumsk), $moooemyaqewumiay); eequksumcoogyoem: } sqiciiuwmykocycc: uukumskkeggaowck: return $moooemyaqewumiay; } }
