<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0278673873             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Bypass; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; class Bypass extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\137\143\157\156\x66\x69\147\x75\x72\x61\164\x69\x6f\156\x73"), [$this, "\167\x75\x67\157\153\x79\165\x6f\155\163\x69\151\x77\x61\x77\x69"]); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { Setting::symcgieuakksimmu(); } public function wugokyuomsiiwawi($uiewakwqscemywuo) { $auwuoyyagaiegwae = array_filter(Setting::symcgieuakksimmu()->nwskemwouwsesmus()); if (!(is_array($auwuoyyagaiegwae) && $auwuoyyagaiegwae)) { goto sqmiymiemeegegic; } $gmigwwwmwemyaayy = untrailingslashit(ManipulateServer::auksikwsewaywikq()); foreach ($auwuoyyagaiegwae as $momcykaoccoymeig => $eeamcawaiqocomwy) { if (!($eeamcawaiqocomwy = ManipulateString::wiecmkiugmyyqiqc($gmigwwwmwemyaayy, '', $eeamcawaiqocomwy))) { goto meseuuacmkuowqau; } $auwuoyyagaiegwae[$momcykaoccoymeig] = $eeamcawaiqocomwy; meseuuacmkuowqau: wycuyiukyceccaow: } saekesoeysauokkq: $uiewakwqscemywuo["\x69\147\156\x6f\162\x65\x64\x5f\x75\162\154\x73"] = str_replace("\52", "\x2e\x2a", implode("\x7c", array_unique($auwuoyyagaiegwae))); sqmiymiemeegegic: return $uiewakwqscemywuo; } }
