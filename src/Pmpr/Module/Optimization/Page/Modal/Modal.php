<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63010f2431cc2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Modal; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Modal\Modal as BaseClass; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Modal\Segment\Preview; use Pmpr\Module\Optimization\Page\Modal\Segment\Rule; use Pmpr\Module\Optimization\Page\Modal\Segment\Stats; class Modal extends BaseClass { public function __construct() { $this->name = "\157\x70\164\151\x6d\x69\x7a\141\164\151\x6f\156\137\162\x75\154\x65\163"; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\151\156\137\155\145\x6e\x75", [$this, "\x65\155\143\151\167\145\151\155\x67\167\x69\151\x61\x65\155\153"], 15); parent::wigskegsqequoeks(); } public function emciweimgwiiaemk() { if (!($gaciecykoqycioyu = Stats::symcgieuakksimmu())) { goto emeeocqaisksyioq; } ManipulateMenu::wessoumqogciwogg(self::akuociswqmoigkas(), '', __("\102\x75\144\147\x65\x74\40\103\x68\x61\162\147\145", PR__MDL__OPTIMIZATION), "\x6d\141\156\x61\147\x65\137\157\x70\164\151\x6f\x6e\x73", ManipulateServer::msewgimgmcgcomey($this->oyqkaeooscmcweyc(self::imywcsggckkcywgk), ["\x6d\157\144\x61\154" => $this->aakmagwggmkoiiyu(), "\x73\x65\x67\x6d\x65\x6e\164" => $gaciecykoqycioyu->aakmagwggmkoiiyu()]), null, 20); emeeocqaisksyioq: } public function gogaagekwoisaqgu() { $this->title = __("\x4f\x70\164\x69\x6d\151\x7a\x61\164\151\157\x6e\40\x52\165\x6c\145\163", PR__MDL__OPTIMIZATION); } public function ecwgiiuacoaokqkw() { $this->ogimmkwaymekmoky(Stats::symcgieuakksimmu())->ogimmkwaymekmoky(Rule::symcgieuakksimmu())->ogimmkwaymekmoky(Preview::symcgieuakksimmu()); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\160\x61\147\x65", $eygsasmqycagyayw->get("\x70\x61\147\145\x2e\152\x73"))->simswskycwagoeqy()); parent::enqueue(); } public function qoqyomiqwooaeoiy() : bool { return Manipulate::kcwoaesycwouwems(); } }
