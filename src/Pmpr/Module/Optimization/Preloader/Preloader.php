<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e0e3312730f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Module\Optimization\Preloader\Offline\Offline; use Pmpr\Module\Optimization\Preloader\Online\Online; class Preloader extends Common { const skacwisqkwicqmos = "\x70\162\x65\x6c\157\x61\x64\137\x73\164\141\x72\164\137\x6f\160\164\x69\x6f\x6e"; const uociwasiscgeeisk = self::wowuwuigyoceikas . "\x5f\160\x72\145\x6c\x6f\x61\x64\x65\x72\x5f\143\162\157\x6e\137\x6a\157\142\x5f\150\x6f\157\x6b"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\x69\156\151\x74"])->qcsmikeggeemccuu("\x61\x64\155\151\x6e\x5f\x69\x6e\151\164", [$this, "\171\x65\x79\151\147\x75\171\x65\x67\x6d\x6d\x79\165\x73\145\141"])->qcsmikeggeemccuu(self::uociwasiscgeeisk, [$this, "\143\141\x71\157\163\157\143\151\x71\143\153\157\143\x6f\x73\x65"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\164\137\165\x70\x64\x61\164\x65\137\162\x65\x6d\x6f\x74\145\137\141\x70\160\x73"), [$this, "\x79\x6b\151\x71\x61\x61\153\155\153\163\x77\x69\x73\x71\153\x63"]); } public function iemaakgqgqosiecm() { Online::symcgieuakksimmu(); Offline::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto cquecqekuucwoumw; } Ajax::symcgieuakksimmu(); cquecqekuucwoumw: } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::uociwasiscgeeisk)) { goto koiscokkkaimiecq; } DecoratorCron::uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::uociwasiscgeeisk); koiscokkkaimiecq: } public function yeyiguyegmmyusea() { $usmiuwiumyygmucg = DecoratorOption::get(self::ikmkgmwegyasgqmo); if ($usmiuwiumyygmucg) { goto owuuuiekkaeoeacq; } $this->ykiqaakmkswisqkc(); owuuuiekkaeoeacq: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto saauykgakaeiyoua; } $this->miocmcoykayoyyau()->ikqyiskqaaymscgw("\x70\x72\x65\154\x6f\141\144", ["\x61\x6a\x61\x78" => Ajax::myikkigscysoykgy]); saauykgakaeiyoua: } public function ykiqaakmkswisqkc() { if (!($ayuascquymiygggw = Manager::symcgieuakksimmu())) { goto kwyimqumkuuyaiku; } $usmiuwiumyygmucg = $ayuascquymiygggw->wskswuomqkmqkkmm(); if ($usmiuwiumyygmucg && !is_wp_error($usmiuwiumyygmucg)) { goto qwemkcoaseywkuuc; } DecoratorOption::delete(self::ikmkgmwegyasgqmo); goto mqimkwickkgqqeoi; qwemkcoaseywkuuc: DecoratorOption::update(self::ikmkgmwegyasgqmo, $usmiuwiumyygmucg); mqimkwickkgqqeoi: kwyimqumkuuyaiku: } }
