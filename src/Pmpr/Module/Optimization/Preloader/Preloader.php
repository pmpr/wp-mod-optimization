<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             630109f80ebad             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Module\Optimization\Preloader\Offline\Offline; use Pmpr\Module\Optimization\Preloader\Online\Online; class Preloader extends Common { const skacwisqkwicqmos = "\160\162\x65\154\x6f\141\144\137\163\164\x61\162\x74\137\157\160\x74\151\x6f\156"; const uociwasiscgeeisk = self::wowuwuigyoceikas . "\137\x70\x72\x65\x6c\157\x61\144\145\162\x5f\x63\x72\x6f\x6e\137\152\157\142\137\150\x6f\x6f\x6b"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\151\x6e\151\164"])->qcsmikeggeemccuu("\141\x64\x6d\151\156\x5f\151\156\151\164", [$this, "\171\x65\171\x69\x67\165\171\x65\x67\155\x6d\171\x75\163\x65\x61"])->qcsmikeggeemccuu(self::uociwasiscgeeisk, [$this, "\x63\141\161\x6f\x73\157\x63\x69\161\143\153\x6f\143\x6f\x73\145"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x75\160\144\141\x74\x65\x5f\162\x65\155\157\164\x65\x5f\x61\x70\160\163"), [$this, "\171\x6b\x69\161\141\x61\x6b\x6d\x6b\163\167\151\163\161\153\x63"]); } public function iemaakgqgqosiecm() { Online::symcgieuakksimmu(); Offline::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto kqksuugcgsyeoayy; } Ajax::symcgieuakksimmu(); kqksuugcgsyeoayy: } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::uociwasiscgeeisk)) { goto iggyqogweyosuikc; } DecoratorCron::uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::uociwasiscgeeisk); iggyqogweyosuikc: } public function yeyiguyegmmyusea() { $usmiuwiumyygmucg = DecoratorOption::get(self::ikmkgmwegyasgqmo); if ($usmiuwiumyygmucg) { goto qqewoyookaskiuek; } $this->ykiqaakmkswisqkc(); qqewoyookaskiuek: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto ssoucoucsgccekwe; } $this->miocmcoykayoyyau()->ikqyiskqaaymscgw("\x70\162\x65\x6c\157\141\144", ["\141\x6a\x61\170" => Ajax::myikkigscysoykgy]); ssoucoucsgccekwe: } public function ykiqaakmkswisqkc() { if (!($ayuascquymiygggw = Manager::symcgieuakksimmu())) { goto eegqyykygiccaoeo; } $usmiuwiumyygmucg = $ayuascquymiygggw->wskswuomqkmqkkmm(); if ($usmiuwiumyygmucg && !is_wp_error($usmiuwiumyygmucg)) { goto qkcyqocqqwmqgqww; } DecoratorOption::delete(self::ikmkgmwegyasgqmo); goto miyqyeiwquwsacsm; qkcyqocqqwmqgqww: DecoratorOption::update(self::ikmkgmwegyasgqmo, $usmiuwiumyygmucg); miyqyeiwquwsacsm: eegqyykygiccaoeo: } }
