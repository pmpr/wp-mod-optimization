<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62bc22330c5ef             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Module\Optimization\Page\Basic\Basic; use Pmpr\Module\Optimization\Page\Modal\Modal; class Page extends Common { const keiioquaamkumwae = self::wowuwuigyoceikas . "\137\143\150\145\x63\x6b\137\142\165\x64\147\x65\164\x5f\150\x6f\x6f\x6b"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\x69\x74", [$this, "\151\x6e\x69\x74"])->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\x5f\x69\156\151\164", [$this, "\171\x65\x79\151\147\165\171\x65\x67\x6d\x6d\171\165\163\x65\x61"])->qcsmikeggeemccuu(self::keiioquaamkumwae, [$this, "\171\157\x65\157\141\167\145\145\163\x65\161\x69\171\145\163\147"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\x67\x65\x74\137\x62\165\x64\x67\x65\164"), [$this, "\x71\x67\x6b\147\x6d\x61\x69\x69\x77\147\x73\157\165\147\147\x73"], 999999); } public function iemaakgqgqosiecm() { Model::symcgieuakksimmu(); if (!DecoratorQuery::goecwaaykqoaaagg()) { goto gwyseusuceuwwccu; } Basic::symcgieuakksimmu(); if (ManipulateAjax::mcgoysmkqsqooceq()) { goto qmoisuweiskkekca; } Rule::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Modal::symcgieuakksimmu(); goto wywwieycqskuqcwc; qmoisuweiskkekca: Ajax::symcgieuakksimmu(); wywwieycqskuqcwc: gwyseusuceuwwccu: } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::keiioquaamkumwae)) { goto icouowaoycuuisqe; } DecoratorCron::uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::keiioquaamkumwae); icouowaoycuuisqe: } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto coogyackikgmecic; } $mkecsaoyggsmwmau = $this->kwauokaoasomsimk(); if (isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe])) { goto kmqusaiaiogecyiy; } goto swckikycciugciqq; kmqusaiaiogecyiy: $owiuekcekysskaoe = $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]; if (!ManipulateDatetime::wguceomqgwouoyks($owiuekcekysskaoe)) { goto ocmwuquguuqigose; } $this->yoeoaweeseqiyesg(); ocmwuquguuqigose: swckikycciugciqq: coogyackikgmecic: } public function qgkgmaiiwgsouggs() : int { $mkecsaoyggsmwmau = (int) ManipulateArray::get($this->kwauokaoasomsimk(), self::qiyqwyiiwykeccmo, 0); if (!($this->ggcikeumgqoockyo() > $mkecsaoyggsmwmau)) { goto iqwsqykoueqyyomy; } iqwsqykoueqyyomy: return $mkecsaoyggsmwmau; } public function kwauokaoasomsimk() { return DecoratorOption::get(self::kqgagmgieeucmuik, []); } }
