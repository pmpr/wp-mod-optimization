<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62d28016e6c23             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Page\Admin\Page as BaseClass; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Model; use WP_Post_Type; class Page extends BaseClass { public function __construct() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\x70\x61\162\145\156\164\137\x73\x6c\x75\x67" => $wksoawcgagcgoask, "\x70\141\x67\145\x5f\x74\151\164\154\145" => __("\114\x65\166\x65\x6c\x20\61\40\x70\x61\x67\x65\163", PR__MDL__OPTIMIZATION), "\x6d\x65\x6e\165\x5f\x73\x6c\165\147" => $this->oyqkaeooscmcweyc("\142\x61\x73\x69\x63\137\160\x61\x67\145"), "\160\x6f\x73\x69\x74\151\x6f\x6e" => 0]; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\151\x6e\x5f\x69\x6e\x69\x74", [$this, "\x79\145\x79\151\x67\165\x79\x65\147\x6d\155\x79\165\x73\x65\x61"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\x74\137\160\162\x65\154\157\x61\x64\137\141\x6c\154\x5f\x6f\x66\146\x6c\151\x6e\x65\137\x75\x72\x6c\x73"), [$this, "\143\171\x6f\x73\151\141\145\163\x67\x61\157\167\x65\151\x6d\155"]); parent::kgquecmsgcouyaya(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto awuwuuuagqysukku; } $this->cimaucgayqyyccoc(sprintf(__("\45\x73\40\157\x70\164\x69\155\x69\172\x61\x74\x69\x6f\x6e\40\141\x70\160\x6c\171\40\141\x75\164\157\155\141\164\x69\x63\141\x6c\x6c\171\x20\x74\x6f\x20\141\154\154\40\160\141\147\145\x73\40\167\151\x74\150\157\165\x74\x20\164\150\x65\40\x6e\x65\x65\144\x20\x66\x6f\162\x20\141\x20\x62\x75\x64\147\x65\164\x2e", PR__MDL__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\114\x65\166\145\154\x20\61", PR__MDL__OPTIMIZATION))), "\154\145\166\145\x6c\55\61", self::smkwuwawwaqyimcq); awuwuuuagqysukku: } public function cyosiaesgaoweimm($auwuoyyagaiegwae = []) : array { if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto miugmimciywcgswm; } $sciomagaqmgggsiu = Manipulate::maykkqauyaoqmqeu(); $seyqqsmuaiegkeeq = Manipulate::iikwikykskimciuc(); $auwuoyyagaiegwae = Manipulate::imyuqaesowgauoam([self::ccyeycyyykwuymsy => $jwsqucqyaoaasykk->mqiucouukiymaswc($seyqqsmuaiegkeeq), self::kkekqeuyycwqggou => $auwuoyyagaiegwae, self::kcaoouwiygwwmiok => $jwsqucqyaoaasykk->mqiucouukiymaswc($sciomagaqmgggsiu)]); miugmimciywcgswm: return $auwuoyyagaiegwae; } public function suicksywcwiggasc() { $sciomagaqmgggsiu = Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym); foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { if (!$useksmwkuswkwcqg instanceof WP_Post_Type) { goto emeeocqaisksyioq; } $ymqmyyeuycgmigyo = ManipulatePost::yyqgaciccoiwuwyq($useksmwkuswkwcqg); $aokagokqyuysuksm = self::uouymeyqasaeckso . "\137{$ymqmyyeuycgmigyo}"; $this->aucimgwswmgaocae(Tab::ocmycskcuiawkecq($aokagokqyuysuksm, new ListTable($useksmwkuswkwcqg), $aokagokqyuysuksm, ManipulatePost::gaeyeooascowgiac($useksmwkuswkwcqg, self::NAME))); emeeocqaisksyioq: mcqwuawosciucemq: } aqekkeqmmewoyawu: parent::suicksywcwiggasc(); } }
