<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c70cbf24c2f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Bypass; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; class Bypass extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\x5f\143\x6f\x6e\x66\151\x67\x75\162\141\164\151\x6f\x6e\163"), [$this, "\x77\x75\x67\x6f\153\171\165\157\x6d\x73\151\x69\167\x61\x77\151"]); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { Setting::symcgieuakksimmu(); } public function wugokyuomsiiwawi($uiewakwqscemywuo) { $auwuoyyagaiegwae = array_filter(Setting::symcgieuakksimmu()->nwskemwouwsesmus()); if (!(is_array($auwuoyyagaiegwae) && $auwuoyyagaiegwae)) { goto uwsmcsiiisuocgwg; } $gmigwwwmwemyaayy = untrailingslashit(ManipulateServer::auksikwsewaywikq()); foreach ($auwuoyyagaiegwae as $momcykaoccoymeig => $eeamcawaiqocomwy) { if (!($eeamcawaiqocomwy = ManipulateString::wiecmkiugmyyqiqc($gmigwwwmwemyaayy, '', $eeamcawaiqocomwy))) { goto swmgucaogosuueug; } $auwuoyyagaiegwae[$momcykaoccoymeig] = $eeamcawaiqocomwy; swmgucaogosuueug: yomoeykcqyukscmi: } ysssquieawyysiyc: $uiewakwqscemywuo["\x69\x67\x6e\x6f\x72\x65\x64\x5f\165\162\154\x73"] = str_replace("\x2a", "\x2e\52", implode("\174", array_unique($auwuoyyagaiegwae))); uwsmcsiiisuocgwg: return $uiewakwqscemywuo; } }
