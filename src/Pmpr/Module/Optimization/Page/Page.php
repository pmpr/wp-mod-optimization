<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65310fbf7f1f7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Module\Optimization\Page\Basic\Basic; use Pmpr\Module\Optimization\Page\Modal\Modal; class Page extends Common { const keiioquaamkumwae = self::wowuwuigyoceikas . "\x5f\143\x68\x65\x63\153\137\142\x75\144\x67\x65\x74\137\150\x6f\x6f\153"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\164", [$this, "\151\156\x69\164"])->qcsmikeggeemccuu("\141\x64\155\x69\156\x5f\x69\x6e\151\x74", [$this, "\x79\x65\x79\151\x67\x75\171\145\147\x6d\x6d\171\x75\x73\x65\x61"])->qcsmikeggeemccuu(self::keiioquaamkumwae, [$this, "\171\x6f\145\x6f\141\x77\145\145\163\x65\x71\x69\171\145\x73\x67"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x67\x65\x74\x5f\142\x75\144\147\145\x74"), [$this, "\161\147\x6b\x67\x6d\x61\x69\x69\167\147\163\157\x75\147\x67\x73"], 999999); } public function iemaakgqgqosiecm() { Model::symcgieuakksimmu(); if (!DecoratorQuery::goecwaaykqoaaagg()) { goto ugqucegcucyyayga; } Tool::symcgieuakksimmu(); if (ManipulateAjax::mcgoysmkqsqooceq()) { goto kmwwqgiacsoksgcy; } Rule::symcgieuakksimmu(); Asset::symcgieuakksimmu(); goto akieeaeqiwugimie; kmwwqgiacsoksgcy: Ajax::symcgieuakksimmu(); akieeaeqiwugimie: ugqucegcucyyayga: } public function init() { if (DecoratorCron::sceqickmyoseqcue(self::keiioquaamkumwae)) { goto sequgigsgkqaikmq; } DecoratorCron::uwugaiqywmseksqm(self::wmasmcgmyeoaisoa, self::keiioquaamkumwae); sequgigsgkqaikmq: } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto iaockwkwaiqgeuyu; } $mkecsaoyggsmwmau = $this->kwauokaoasomsimk(); if (isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe])) { goto woaoeyaowkuukkqm; } goto mmqkuymyyycywmqu; woaoeyaowkuukkqm: $owiuekcekysskaoe = $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]; if (!ManipulateDatetime::wguceomqgwouoyks($owiuekcekysskaoe)) { goto aemoyqueimayqcaw; } $this->yoeoaweeseqiyesg(); aemoyqueimayqcaw: mmqkuymyyycywmqu: iaockwkwaiqgeuyu: } public function qgkgmaiiwgsouggs() : int { $mkecsaoyggsmwmau = (int) ManipulateArray::get($this->kwauokaoasomsimk(), self::qiyqwyiiwykeccmo, 0); if (!($this->ggcikeumgqoockyo() > $mkecsaoyggsmwmau)) { goto oeeasouoaaoaaemm; } oeeasouoaaoaaemm: return $mkecsaoyggsmwmau; } public function kwauokaoasomsimk() { return DecoratorOption::get(self::kqgagmgieeucmuik, []); } }
