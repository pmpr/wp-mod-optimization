<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf2522bd2c4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Module\Optimization\Preloader\Offline\Offline; use Pmpr\Module\Optimization\Preloader\Online\Online; class Preloader extends Common { const skacwisqkwicqmos = "\x70\x72\145\x6c\157\x61\144\137\x73\164\x61\162\x74\x5f\x6f\x70\164\x69\x6f\x6e"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\151\x6e\x5f\151\156\151\x74", [$this, "\171\145\171\151\147\165\171\x65\x67\155\x6d\x79\x75\163\x65\x61"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\164\x5f\x75\160\144\x61\164\x65\x5f\x72\x65\155\x6f\x74\x65\137\x61\x70\160\x73"), [$this, "\x79\x6b\151\x71\141\141\153\x6d\x6b\x73\x77\x69\163\161\153\x63"]); } public function iemaakgqgqosiecm() { Online::symcgieuakksimmu(); Offline::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto qoiuwyogucoeaoew; } Ajax::symcgieuakksimmu(); qoiuwyogucoeaoew: } public function yeyiguyegmmyusea() { $usmiuwiumyygmucg = DecoratorOption::get(self::ikmkgmwegyasgqmo); if ($usmiuwiumyygmucg) { goto qkkqiagwgaoyauki; } $this->ykiqaakmkswisqkc(); qkkqiagwgaoyauki: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto oyywywoqaqcykucs; } $this->miocmcoykayoyyau()->ikqyiskqaaymscgw("\x70\162\145\x6c\157\x61\x64", ["\141\x6a\141\170" => Ajax::myikkigscysoykgy]); oyywywoqaqcykucs: } public function ykiqaakmkswisqkc() { if (!($ayuascquymiygggw = Manager::symcgieuakksimmu())) { goto miaiggsoiaekmqwy; } $usmiuwiumyygmucg = $ayuascquymiygggw->wskswuomqkmqkkmm(); if ($usmiuwiumyygmucg && !is_wp_error($usmiuwiumyygmucg)) { goto iqeqqwcmaiqakawc; } DecoratorOption::delete(self::ikmkgmwegyasgqmo); goto gioqkcywauuckmua; iqeqqwcmaiqakawc: DecoratorOption::update(self::ikmkgmwegyasgqmo, $usmiuwiumyygmucg); gioqkcywauuckmua: miaiggsoiaekmqwy: } }
