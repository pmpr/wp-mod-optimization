<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf0451942c6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Module\Optimization\Preloader\Offline\Offline; use Pmpr\Module\Optimization\Preloader\Online\Online; class Preloader extends Common { const skacwisqkwicqmos = "\160\162\145\x6c\157\141\x64\x5f\163\x74\141\162\164\x5f\157\160\x74\151\157\x6e"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\151\156\137\151\x6e\x69\x74", [$this, "\171\145\x79\151\x67\165\171\145\x67\x6d\155\x79\165\163\145\x61"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\164\137\165\x70\x64\141\x74\x65\137\162\x65\x6d\157\x74\145\x5f\x61\160\160\163"), [$this, "\171\x6b\151\161\x61\x61\x6b\x6d\x6b\163\x77\x69\x73\x71\x6b\x63"]); } public function iemaakgqgqosiecm() { Online::symcgieuakksimmu(); Offline::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { $usmiuwiumyygmucg = DecoratorOption::get(self::ikmkgmwegyasgqmo); if ($usmiuwiumyygmucg) { goto akoiqkoqmmmcieug; } $this->ykiqaakmkswisqkc(); akoiqkoqmmmcieug: } public function ykiqaakmkswisqkc() { if (!($ayuascquymiygggw = Manager::symcgieuakksimmu())) { goto eqekaoaioiykuaiw; } $usmiuwiumyygmucg = $ayuascquymiygggw->wskswuomqkmqkkmm(); if ($usmiuwiumyygmucg && !is_wp_error($usmiuwiumyygmucg)) { goto cgasgmiiqegqesic; } DecoratorOption::delete(self::ikmkgmwegyasgqmo); goto yamoiggaeugmgkku; cgasgmiiqegqesic: DecoratorOption::update(self::ikmkgmwegyasgqmo, $usmiuwiumyygmucg); yamoiggaeugmgkku: eqekaoaioiykuaiw: } }
