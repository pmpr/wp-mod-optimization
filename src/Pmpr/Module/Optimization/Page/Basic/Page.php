<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf0451942c6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Page\Admin\Page as BaseClass; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Model; use WP_Post_Type; class Page extends BaseClass { public function __construct() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\160\141\x72\145\x6e\x74\137\163\x6c\x75\147" => $wksoawcgagcgoask, "\x70\141\147\x65\137\x74\x69\x74\154\145" => __("\114\x65\166\145\x6c\x20\x31\40\160\x61\147\x65\x73", PR__MDL__OPTIMIZATION), "\155\x65\x6e\x75\x5f\163\x6c\x75\x67" => $this->oyqkaeooscmcweyc("\142\x61\x73\151\143\x5f\x70\x61\x67\145"), "\160\157\163\151\164\151\x6f\x6e" => 0]; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\151\156\x5f\151\156\151\x74", [$this, "\171\145\x79\151\147\x75\171\x65\x67\x6d\155\x79\165\x73\x65\141"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x70\x72\145\154\157\x61\x64\x5f\141\154\154\137\157\146\x66\154\x69\x6e\x65\137\x75\162\154\163"), [$this, "\x63\171\x6f\163\x69\x61\x65\x73\x67\141\x6f\167\x65\x69\x6d\155"]); parent::kgquecmsgcouyaya(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto syisomgawcsqeemk; } $this->cimaucgayqyyccoc(sprintf(__("\45\163\x20\157\x70\164\x69\x6d\x69\172\x61\164\151\157\156\x20\141\160\x70\154\x79\x20\141\x75\x74\157\155\141\164\x69\143\x61\154\x6c\171\40\164\x6f\x20\141\154\x6c\x20\x70\141\147\x65\163\40\x77\151\x74\150\157\165\x74\x20\164\150\145\40\156\x65\145\x64\x20\x66\x6f\x72\x20\x61\x20\x62\x75\x64\147\145\164\x2e", PR__MDL__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\x4c\145\166\145\x6c\x20\x31", PR__MDL__OPTIMIZATION))), "\x6c\145\x76\x65\x6c\x2d\x31", self::smkwuwawwaqyimcq); syisomgawcsqeemk: } public function cyosiaesgaoweimm($auwuoyyagaiegwae = []) : array { if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto asoecuscmsyusmkg; } $sciomagaqmgggsiu = Manipulate::maykkqauyaoqmqeu(); $seyqqsmuaiegkeeq = Manipulate::iikwikykskimciuc(); $auwuoyyagaiegwae = Manipulate::imyuqaesowgauoam([self::ccyeycyyykwuymsy => $jwsqucqyaoaasykk->mqiucouukiymaswc($seyqqsmuaiegkeeq), self::kkekqeuyycwqggou => $auwuoyyagaiegwae, self::kcaoouwiygwwmiok => $jwsqucqyaoaasykk->mqiucouukiymaswc($sciomagaqmgggsiu)]); asoecuscmsyusmkg: return $auwuoyyagaiegwae; } public function suicksywcwiggasc() { $sciomagaqmgggsiu = Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym); foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { if (!$useksmwkuswkwcqg instanceof WP_Post_Type) { goto oaqeoqsksuyyggmg; } $aokagokqyuysuksm = self::uouymeyqasaeckso . "\137{$useksmwkuswkwcqg->name}"; $this->aucimgwswmgaocae(Tab::ocmycskcuiawkecq($aokagokqyuysuksm, new ListTable($useksmwkuswkwcqg), $aokagokqyuysuksm, ManipulatePost::gaeyeooascowgiac($useksmwkuswkwcqg, self::NAME))); oaqeoqsksuyyggmg: kiskwawumeiiieuk: } kwasqmcyiswoaiuu: parent::suicksywcwiggasc(); } }
