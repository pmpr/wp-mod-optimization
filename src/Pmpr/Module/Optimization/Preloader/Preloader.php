<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63171273d0496             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Module\Optimization\Preloader\Offline\Offline; use Pmpr\Module\Optimization\Preloader\Online\Online; class Preloader extends Common { const skacwisqkwicqmos = "\160\x72\145\154\157\x61\144\137\163\164\x61\x72\164\x5f\x6f\160\x74\x69\x6f\x6e"; const uociwasiscgeeisk = self::wowuwuigyoceikas . "\x5f\x70\162\145\x6c\x6f\x61\144\x65\x72\137\x63\x72\157\156\x5f\152\x6f\x62\x5f\x68\157\x6f\153"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\x69\x6e\x69\164"])->qcsmikeggeemccuu("\x61\144\155\151\x6e\137\x69\156\x69\164", [$this, "\171\x65\171\151\147\x75\x79\145\x67\155\x6d\171\x75\x73\145\x61"])->qcsmikeggeemccuu(self::uociwasiscgeeisk, [$this, "\x63\141\161\157\163\157\143\x69\x71\143\153\x6f\x63\x6f\x73\x65"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\x74\x5f\165\160\144\x61\164\145\137\162\x65\155\157\164\x65\x5f\x61\160\x70\163"), [$this, "\x79\153\151\161\141\x61\x6b\x6d\x6b\163\x77\x69\x73\x71\x6b\143"]); } public function iemaakgqgqosiecm() { Online::symcgieuakksimmu(); Offline::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto kqksuugcgsyeoayy; } Ajax::symcgieuakksimmu(); kqksuugcgsyeoayy: } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::uociwasiscgeeisk)) { goto iggyqogweyosuikc; } DecoratorCron::uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::uociwasiscgeeisk); iggyqogweyosuikc: } public function yeyiguyegmmyusea() { $usmiuwiumyygmucg = DecoratorOption::get(self::ikmkgmwegyasgqmo); if ($usmiuwiumyygmucg) { goto qqewoyookaskiuek; } $this->ykiqaakmkswisqkc(); qqewoyookaskiuek: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto ssoucoucsgccekwe; } $this->miocmcoykayoyyau()->ikqyiskqaaymscgw("\160\x72\x65\154\x6f\141\144", ["\x61\x6a\x61\170" => Ajax::myikkigscysoykgy]); ssoucoucsgccekwe: } public function ykiqaakmkswisqkc() { if (!($ayuascquymiygggw = Manager::symcgieuakksimmu())) { goto eegqyykygiccaoeo; } $usmiuwiumyygmucg = $ayuascquymiygggw->wskswuomqkmqkkmm(); if ($usmiuwiumyygmucg && !is_wp_error($usmiuwiumyygmucg)) { goto qkcyqocqqwmqgqww; } DecoratorOption::delete(self::ikmkgmwegyasgqmo); goto miyqyeiwquwsacsm; qkcyqocqqwmqgqww: DecoratorOption::update(self::ikmkgmwegyasgqmo, $usmiuwiumyygmucg); miyqyeiwquwsacsm: eegqyykygiccaoeo: } }
