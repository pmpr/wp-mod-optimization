<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6326c8204f364             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Bypass; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; class Bypass extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\162\x65\137\160\157\x73\x74\137\x75\160\x64\x61\x74\145", [$this, "\157\143\x6b\x73\141\143\151\x79\155\x67\x69\143\x6f\141\141\143"], 10, 2); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\164\137\143\157\156\146\151\147\x75\x72\x61\164\151\x6f\156\163"), [$this, "\x77\165\x67\x6f\x6b\171\x75\x6f\x6d\163\x69\151\167\x61\167\x69"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\164\137\x69\x73\137\142\x79\x70\x61\163\163"), [$this, "\x79\151\x77\x73\167\x65\x75\171\145\x6d\153\x79\x69\171\165\155"], 10, 2); } public function yiwsweuyemkyiyum($qeoqkiisysuqyeqw, $migiiksoiymissge) { $ucccueqywigcukcc = $this->iqkiiwsyqkwkyuyy(); if (!($ucccueqywigcukcc && preg_match("\43{$ucccueqywigcukcc}\43", $migiiksoiymissge))) { goto syeeegeygawwqiuu; } $qeoqkiisysuqyeqw = true; syeeegeygawwqiuu: return $qeoqkiisysuqyeqw; } public function ocksaciymgicoaac($yekqqesogweecqyc, $icwicymcioeyeyek) { if (!($mkomwsiykqigmqca = Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws))) { goto gwayeyymscmgwqkg; } $iueymcwwscwqkiyq = ManipulatePost::ucwmcwqmqwaymkkc($yekqqesogweecqyc); if (in_array($iueymcwwscwqkiyq, [self::ywskismomwmcsqam, self::sgoswgskyiiwkyuo, self::iuemaweiggauysws], true)) { goto isiqkeyciyqgkayu; } $aaokuekaimigoyue = ManipulatePost::aqcogscycyycgkuq($yekqqesogweecqyc); if (!($aaokuekaimigoyue && $aaokuekaimigoyue !== $icwicymcioeyeyek[self::uiaeiwkkmoayqasu])) { goto iuieskocqoqkkwus; } $this->kcciqwskewsuaemk()->remove($mkomwsiykqigmqca); iuieskocqoqkkwus: isiqkeyciyqgkayu: gwayeyymscmgwqkg: } public function iemaakgqgqosiecm() { Setting::symcgieuakksimmu(); } public function wugokyuomsiiwawi($uiewakwqscemywuo) { if (!($ucccueqywigcukcc = $this->iqkiiwsyqkwkyuyy())) { goto caoikoqmyeqsqqqe; } $uiewakwqscemywuo["\x69\x67\x6e\x6f\162\145\x64\x5f\x75\x72\x6c\x73"] = $ucccueqywigcukcc; caoikoqmyeqsqqqe: return $uiewakwqscemywuo; } public function iqkiiwsyqkwkyuyy() : string { $ucccueqywigcukcc = ''; if (!($auwuoyyagaiegwae = Setting::symcgieuakksimmu()->nwskemwouwsesmus())) { goto ckuagmyqkyoeeaeu; } $gmigwwwmwemyaayy = untrailingslashit(ManipulateServer::auksikwsewaywikq()); foreach ($auwuoyyagaiegwae as $momcykaoccoymeig => $eeamcawaiqocomwy) { if (!($eeamcawaiqocomwy = ManipulateString::wiecmkiugmyyqiqc($gmigwwwmwemyaayy, '', $eeamcawaiqocomwy))) { goto kcomueysiyyqagus; } $auwuoyyagaiegwae[$momcykaoccoymeig] = preg_quote($eeamcawaiqocomwy, "\x2f"); kcomueysiyyqagus: amoygaweoeymiuiy: } moimkkmkooeiyisc: $ucccueqywigcukcc = str_replace("\x5c\52", "\56\52", implode("\174", array_unique($auwuoyyagaiegwae))); ckuagmyqkyoeeaeu: return $ucccueqywigcukcc; } }
