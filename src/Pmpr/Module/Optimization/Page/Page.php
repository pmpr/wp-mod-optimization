<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c026a362a9d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Module\Optimization\Page\Basic\Basic; use Pmpr\Module\Optimization\Page\Modal\Modal; class Page extends Common { const keiioquaamkumwae = self::wowuwuigyoceikas . "\x5f\x63\150\x65\x63\153\x5f\x62\165\144\x67\145\164\x5f\x68\157\x6f\153"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\151\156\151\164"])->qcsmikeggeemccuu("\x61\x64\x6d\x69\x6e\137\151\156\151\164", [$this, "\x79\x65\x79\151\147\x75\171\145\147\155\x6d\171\x75\x73\x65\141"])->qcsmikeggeemccuu(self::keiioquaamkumwae, [$this, "\171\x6f\145\157\x61\167\x65\145\x73\x65\x71\x69\171\x65\x73\x67"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\x74\x5f\147\145\164\x5f\x62\x75\144\147\x65\164"), [$this, "\161\147\x6b\x67\155\141\x69\x69\167\147\x73\157\165\x67\147\163"], 999999); } public function iemaakgqgqosiecm() { Model::symcgieuakksimmu(); if (!DecoratorQuery::goecwaaykqoaaagg()) { goto gwyseusuceuwwccu; } Basic::symcgieuakksimmu(); if (ManipulateAjax::mcgoysmkqsqooceq()) { goto qmoisuweiskkekca; } Rule::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Modal::symcgieuakksimmu(); goto wywwieycqskuqcwc; qmoisuweiskkekca: Ajax::symcgieuakksimmu(); wywwieycqskuqcwc: gwyseusuceuwwccu: } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::keiioquaamkumwae)) { goto icouowaoycuuisqe; } DecoratorCron::uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::keiioquaamkumwae); icouowaoycuuisqe: } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto coogyackikgmecic; } $mkecsaoyggsmwmau = $this->kwauokaoasomsimk(); if (isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe])) { goto kmqusaiaiogecyiy; } goto swckikycciugciqq; kmqusaiaiogecyiy: $owiuekcekysskaoe = $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]; if (!ManipulateDatetime::wguceomqgwouoyks($owiuekcekysskaoe)) { goto ocmwuquguuqigose; } $this->yoeoaweeseqiyesg(); ocmwuquguuqigose: swckikycciugciqq: coogyackikgmecic: } public function qgkgmaiiwgsouggs() : int { $mkecsaoyggsmwmau = (int) ManipulateArray::get($this->kwauokaoasomsimk(), self::qiyqwyiiwykeccmo, 0); if (!($this->ggcikeumgqoockyo() > $mkecsaoyggsmwmau)) { goto iqwsqykoueqyyomy; } iqwsqykoueqyyomy: return $mkecsaoyggsmwmau; } public function kwauokaoasomsimk() { return DecoratorOption::get(self::kqgagmgieeucmuik, []); } }
