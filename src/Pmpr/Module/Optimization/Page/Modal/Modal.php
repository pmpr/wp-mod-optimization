<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652bc1a0098e2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Modal; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Modal\Modal as BaseClass; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Modal\Segment\Preview; use Pmpr\Module\Optimization\Page\Modal\Segment\Rule; use Pmpr\Module\Optimization\Page\Modal\Segment\Stats; class Modal extends BaseClass { public function __construct() { $this->name = "\x6f\x70\x74\151\x6d\x69\172\141\x74\x69\x6f\x6e\137\x72\165\x6c\145\163"; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\x69\156\x5f\x6d\145\156\165", [$this, "\x65\155\143\x69\x77\145\151\155\x67\x77\151\151\x61\145\155\153"], 15); parent::wigskegsqequoeks(); } public function emciweimgwiiaemk() { if (!($gaciecykoqycioyu = Stats::symcgieuakksimmu())) { goto oaskqsoyesmmeaew; } ManipulateMenu::wessoumqogciwogg(self::akuociswqmoigkas(), '', __("\x42\165\x64\x67\145\164\40\x43\x68\141\162\x67\x65", PR__MDL__OPTIMIZATION), "\x6d\x61\x6e\x61\147\145\x5f\157\x70\x74\x69\157\156\x73", ManipulateServer::msewgimgmcgcomey($this->oyqkaeooscmcweyc(self::imywcsggckkcywgk), ["\163\x65\x67\155\145\x6e\x74" => $gaciecykoqycioyu->aakmagwggmkoiiyu(), self::ismwycwsasweqomi => $this->aakmagwggmkoiiyu()]), null, 20); oaskqsoyesmmeaew: } public function gogaagekwoisaqgu() { $this->title = __("\117\160\x74\x69\x6d\x69\172\x61\164\x69\157\156\40\x52\x75\154\145\x73", PR__MDL__OPTIMIZATION); } public function ecwgiiuacoaokqkw() { $this->ogimmkwaymekmoky(Stats::symcgieuakksimmu())->ogimmkwaymekmoky(Rule::symcgieuakksimmu())->ogimmkwaymekmoky(Preview::symcgieuakksimmu()); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\160\x61\x67\x65", $eygsasmqycagyayw->get("\x70\141\x67\145\56\x6a\x73"))->simswskycwagoeqy()); parent::enqueue(); } public function qoqyomiqwooaeoiy() : bool { return Manipulate::kcwoaesycwouwems(); } }
