<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6321c656ef420             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Module\Optimization\Preloader\Offline\Offline; use Pmpr\Module\Optimization\Preloader\Online\Online; class Preloader extends Common { const skacwisqkwicqmos = "\x70\x72\x65\x6c\x6f\x61\144\x5f\x73\x74\141\x72\164\x5f\157\x70\x74\151\x6f\x6e"; const uociwasiscgeeisk = self::wowuwuigyoceikas . "\x5f\x70\x72\145\x6c\x6f\141\x64\x65\x72\137\x63\162\x6f\x6e\x5f\152\x6f\142\137\x68\x6f\157\153"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\x69\156\151\x74"])->qcsmikeggeemccuu("\x61\144\x6d\x69\x6e\x5f\151\156\151\164", [$this, "\171\x65\171\x69\147\165\x79\145\x67\x6d\155\171\x75\163\145\x61"])->qcsmikeggeemccuu(self::uociwasiscgeeisk, [$this, "\143\141\161\157\x73\157\x63\151\x71\143\153\x6f\143\157\163\145"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x75\x70\x64\141\x74\145\137\x72\145\155\157\164\x65\137\141\x70\x70\163"), [$this, "\x79\x6b\151\x71\x61\x61\153\155\x6b\163\x77\151\163\x71\x6b\x63"]); } public function iemaakgqgqosiecm() { Online::symcgieuakksimmu(); Offline::symcgieuakksimmu(); if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto yqykqysmiquwoasu; } Ajax::symcgieuakksimmu(); yqykqysmiquwoasu: } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::uociwasiscgeeisk)) { goto ayyweymyuuiauamo; } DecoratorCron::uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::uociwasiscgeeisk); ayyweymyuuiauamo: } public function yeyiguyegmmyusea() { if (DecoratorOption::get(self::ikmkgmwegyasgqmo)) { goto mosqsmqimqgqoase; } $this->ykiqaakmkswisqkc(); mosqsmqimqgqoase: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto omugkkesagcyagmk; } $this->miocmcoykayoyyau()->ikqyiskqaaymscgw("\160\162\x65\x6c\157\x61\x64", ["\141\152\x61\x78" => Ajax::myikkigscysoykgy]); omugkkesagcyagmk: } public function ykiqaakmkswisqkc() { if (!($ayuascquymiygggw = Manager::symcgieuakksimmu())) { goto iggyqogweyosuikc; } $usmiuwiumyygmucg = $ayuascquymiygggw->wskswuomqkmqkkmm(); if ($usmiuwiumyygmucg && !is_wp_error($usmiuwiumyygmucg)) { goto ygcsmkuycoagwyou; } DecoratorOption::delete(self::ikmkgmwegyasgqmo); goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: DecoratorOption::update(self::ikmkgmwegyasgqmo, $usmiuwiumyygmucg); kqksuugcgsyeoayy: iggyqogweyosuikc: } }
