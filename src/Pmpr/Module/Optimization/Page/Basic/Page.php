<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62fab02fddc1b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Page\Admin\Page as BaseClass; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Model; use WP_Post_Type; class Page extends BaseClass { public function __construct() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\160\x61\162\145\156\164\137\x73\x6c\x75\x67" => $wksoawcgagcgoask, "\160\x61\147\145\x5f\x74\151\164\154\145" => __("\114\145\x76\145\x6c\40\x31\x20\160\141\147\145\163", PR__MDL__OPTIMIZATION), "\x6d\x65\156\x75\137\163\154\165\147" => $this->oyqkaeooscmcweyc("\x62\141\163\x69\143\x5f\160\141\147\x65"), "\160\x6f\x73\x69\x74\151\157\x6e" => 0]; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\x69\156\137\151\x6e\x69\x74", [$this, "\x79\x65\171\x69\x67\x75\171\x65\x67\x6d\155\171\x75\x73\145\x61"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x70\x72\145\154\x6f\x61\144\137\x61\x6c\154\x5f\x6f\146\x66\154\x69\156\145\137\x75\162\154\163"), [$this, "\x63\x79\157\x73\x69\x61\145\x73\147\x61\x6f\167\145\x69\155\x6d"]); parent::kgquecmsgcouyaya(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto sgiouaqukyycswqm; } $this->cimaucgayqyyccoc(sprintf(__("\x25\x73\40\x6f\160\x74\x69\x6d\151\172\x61\x74\x69\x6f\x6e\40\x61\x70\160\x6c\171\40\x61\x75\164\x6f\x6d\141\x74\x69\143\141\x6c\x6c\171\x20\x74\x6f\40\141\x6c\x6c\40\160\141\147\145\163\40\167\151\x74\x68\157\x75\164\40\164\x68\145\40\156\145\x65\x64\x20\x66\x6f\x72\40\141\x20\142\165\x64\x67\145\x74\x2e", PR__MDL__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\114\145\166\145\x6c\x20\x31", PR__MDL__OPTIMIZATION))), "\x6c\x65\166\x65\154\55\61", self::smkwuwawwaqyimcq); sgiouaqukyycswqm: } public function cyosiaesgaoweimm($auwuoyyagaiegwae = []) : array { if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto gwkawguwsamuomuo; } $sciomagaqmgggsiu = Manipulate::maykkqauyaoqmqeu(); $seyqqsmuaiegkeeq = Manipulate::iikwikykskimciuc(); $auwuoyyagaiegwae = Manipulate::imyuqaesowgauoam([self::ccyeycyyykwuymsy => $jwsqucqyaoaasykk->mqiucouukiymaswc($seyqqsmuaiegkeeq), self::kkekqeuyycwqggou => $auwuoyyagaiegwae, self::kcaoouwiygwwmiok => $jwsqucqyaoaasykk->mqiucouukiymaswc($sciomagaqmgggsiu)]); gwkawguwsamuomuo: return $auwuoyyagaiegwae; } public function suicksywcwiggasc() { $sciomagaqmgggsiu = Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym); foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { if (!$useksmwkuswkwcqg instanceof WP_Post_Type) { goto wowmysuygugawmmu; } $ymqmyyeuycgmigyo = ManipulatePost::yyqgaciccoiwuwyq($useksmwkuswkwcqg); $aokagokqyuysuksm = self::uouymeyqasaeckso . "\137{$ymqmyyeuycgmigyo}"; $this->aucimgwswmgaocae(Tab::ocmycskcuiawkecq($aokagokqyuysuksm, new ListTable($useksmwkuswkwcqg), $aokagokqyuysuksm, ManipulatePost::gaeyeooascowgiac($useksmwkuswkwcqg, self::NAME))); wowmysuygugawmmu: uugwmywmaqomeksa: } ucasigqmoiwaimkk: parent::suicksywcwiggasc(); } }
