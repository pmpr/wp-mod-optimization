<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e8fa75eb5af             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Module\Optimization\Preloader\Offline\Offline; use Pmpr\Module\Optimization\Preloader\Online\Online; class Preloader extends Common { const skacwisqkwicqmos = "\160\x72\145\x6c\x6f\141\x64\137\x73\164\x61\162\x74\137\x6f\x70\x74\151\157\x6e"; const uociwasiscgeeisk = self::wowuwuigyoceikas . "\x5f\x70\162\x65\x6c\157\x61\144\x65\x72\137\143\x72\x6f\156\x5f\152\x6f\142\x5f\150\157\157\x6b"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\x69\164", [$this, "\x69\x6e\x69\164"])->qcsmikeggeemccuu("\x61\x64\x6d\x69\x6e\137\x69\156\151\164", [$this, "\171\145\x79\151\x67\165\171\x65\147\x6d\x6d\x79\165\x73\145\141"])->qcsmikeggeemccuu(self::uociwasiscgeeisk, [$this, "\143\x61\161\x6f\x73\157\x63\151\161\x63\x6b\157\x63\x6f\163\x65"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\164\137\165\160\x64\141\x74\x65\x5f\162\145\155\157\x74\145\x5f\x61\160\160\x73"), [$this, "\x79\153\151\161\141\141\153\x6d\x6b\x73\x77\151\x73\x71\x6b\143"]); } public function iemaakgqgqosiecm() { Online::symcgieuakksimmu(); Offline::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto ugykmcouiwiscoqu; } Ajax::symcgieuakksimmu(); ugykmcouiwiscoqu: } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::uociwasiscgeeisk)) { goto isewysikysqewkis; } DecoratorCron::uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::uociwasiscgeeisk); isewysikysqewkis: } public function yeyiguyegmmyusea() { $usmiuwiumyygmucg = DecoratorOption::get(self::ikmkgmwegyasgqmo); if ($usmiuwiumyygmucg) { goto wiwoiyoakywqyaiy; } $this->ykiqaakmkswisqkc(); wiwoiyoakywqyaiy: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto igmmqwyawcuuckkq; } $this->miocmcoykayoyyau()->ikqyiskqaaymscgw("\x70\162\145\x6c\157\141\144", ["\141\152\x61\170" => Ajax::myikkigscysoykgy]); igmmqwyawcuuckkq: } public function ykiqaakmkswisqkc() { if (!($ayuascquymiygggw = Manager::symcgieuakksimmu())) { goto uscokkmquayiukag; } $usmiuwiumyygmucg = $ayuascquymiygggw->wskswuomqkmqkkmm(); if ($usmiuwiumyygmucg && !is_wp_error($usmiuwiumyygmucg)) { goto eouwacqiommmeaqc; } DecoratorOption::delete(self::ikmkgmwegyasgqmo); goto sqwuqegeiisoiiuq; eouwacqiommmeaqc: DecoratorOption::update(self::ikmkgmwegyasgqmo, $usmiuwiumyygmucg); sqwuqegeiisoiiuq: uscokkmquayiukag: } }
