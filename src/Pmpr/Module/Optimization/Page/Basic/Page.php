<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ccf32654208             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Page\Admin\Page as BaseClass; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Model; use WP_Post_Type; class Page extends BaseClass { public function __construct() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\160\x61\162\145\156\164\137\x73\154\x75\147" => $wksoawcgagcgoask, "\160\141\147\145\x5f\x74\x69\x74\154\145" => __("\114\x65\166\x65\154\40\61\40\160\x61\147\145\163", PR__MDL__OPTIMIZATION), "\155\145\x6e\165\x5f\x73\x6c\165\x67" => $this->oyqkaeooscmcweyc("\x62\x61\x73\151\x63\137\x70\141\x67\145"), "\x70\x6f\163\x69\x74\151\x6f\x6e" => 0]; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\151\x6e\137\x69\156\151\164", [$this, "\171\x65\171\x69\x67\165\x79\x65\147\x6d\x6d\171\x75\x73\x65\141"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x70\162\x65\154\157\x61\144\x5f\x61\x6c\x6c\137\x6f\x66\x66\154\151\156\145\137\165\x72\154\163"), [$this, "\x63\x79\x6f\163\x69\141\145\x73\147\141\x6f\x77\x65\151\x6d\155"]); parent::kgquecmsgcouyaya(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto cueuscqkicwwicei; } $this->cimaucgayqyyccoc(sprintf(__("\x25\163\x20\x6f\160\164\151\155\x69\172\141\x74\x69\x6f\156\x20\141\160\160\x6c\x79\40\x61\165\x74\x6f\x6d\x61\164\x69\143\x61\x6c\154\x79\40\164\x6f\40\141\154\x6c\40\x70\141\x67\x65\x73\x20\167\x69\x74\150\157\165\164\40\x74\150\x65\40\156\145\145\144\40\146\157\x72\40\141\40\x62\165\144\x67\145\x74\56", PR__MDL__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\x4c\145\166\145\x6c\40\61", PR__MDL__OPTIMIZATION))), "\x6c\x65\166\x65\154\x2d\61", self::smkwuwawwaqyimcq); cueuscqkicwwicei: } public function cyosiaesgaoweimm($auwuoyyagaiegwae = []) : array { if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto gcecamucuogcciig; } $sciomagaqmgggsiu = Manipulate::maykkqauyaoqmqeu(); $seyqqsmuaiegkeeq = Manipulate::iikwikykskimciuc(); $auwuoyyagaiegwae = Manipulate::imyuqaesowgauoam([self::ccyeycyyykwuymsy => $jwsqucqyaoaasykk->mqiucouukiymaswc($seyqqsmuaiegkeeq), self::kkekqeuyycwqggou => $auwuoyyagaiegwae, self::kcaoouwiygwwmiok => $jwsqucqyaoaasykk->mqiucouukiymaswc($sciomagaqmgggsiu)]); gcecamucuogcciig: return $auwuoyyagaiegwae; } public function suicksywcwiggasc() { $sciomagaqmgggsiu = array_reverse(Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym), true); foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { if (!$useksmwkuswkwcqg instanceof WP_Post_Type) { goto eysuawiooiswaseq; } $ymqmyyeuycgmigyo = ManipulatePost::yyqgaciccoiwuwyq($useksmwkuswkwcqg); $aokagokqyuysuksm = self::uouymeyqasaeckso . "\137{$ymqmyyeuycgmigyo}"; $this->aucimgwswmgaocae(Tab::ocmycskcuiawkecq($aokagokqyuysuksm, new ListTable($useksmwkuswkwcqg), $aokagokqyuysuksm, ManipulatePost::gaeyeooascowgiac($useksmwkuswkwcqg, self::NAME))); eysuawiooiswaseq: kiewcwsykccgocuc: } suscosoukqeyyqgs: parent::suicksywcwiggasc(); } }
