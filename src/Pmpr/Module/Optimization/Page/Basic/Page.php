<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             631c3953605e9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Page\Admin\Page as BaseClass; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Model; use WP_Post_Type; class Page extends BaseClass { public function __construct() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\x70\141\162\145\x6e\x74\137\x73\x6c\165\x67" => $wksoawcgagcgoask, "\x70\x61\147\145\137\164\151\164\x6c\x65" => __("\114\145\x76\145\x6c\x20\x31\40\x70\141\x67\145\x73", PR__MDL__OPTIMIZATION), "\x6d\145\156\165\x5f\x73\x6c\x75\x67" => $this->oyqkaeooscmcweyc("\x62\x61\x73\151\143\x5f\160\141\x67\145"), "\160\157\163\x69\164\x69\x6f\156" => 0]; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\x69\156\x5f\x69\x6e\151\x74", [$this, "\171\145\171\151\147\165\171\x65\x67\155\x6d\x79\x75\163\x65\x61"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\164\137\160\x72\x65\154\157\141\144\x5f\x61\154\154\137\157\x66\146\154\x69\156\145\x5f\165\x72\x6c\163"), [$this, "\143\x79\157\x73\x69\141\x65\x73\147\x61\157\167\x65\x69\155\x6d"]); parent::kgquecmsgcouyaya(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto kcqieuukskyiywss; } $this->cimaucgayqyyccoc(sprintf(__("\45\163\40\157\x70\x74\151\x6d\x69\172\141\164\x69\x6f\156\40\141\160\x70\x6c\171\40\x61\165\x74\157\155\141\164\x69\x63\x61\x6c\x6c\171\x20\164\x6f\x20\141\x6c\154\x20\160\x61\x67\145\x73\x20\x77\x69\164\x68\157\x75\164\40\x74\150\145\x20\156\x65\145\144\40\146\157\x72\40\x61\x20\x62\165\x64\147\145\164\x2e", PR__MDL__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\114\x65\166\x65\154\40\61", PR__MDL__OPTIMIZATION))), "\154\x65\x76\x65\154\55\x31", self::smkwuwawwaqyimcq); kcqieuukskyiywss: } public function cyosiaesgaoweimm($auwuoyyagaiegwae = []) : array { if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto wukuisoeoeomgegu; } $sciomagaqmgggsiu = Manipulate::maykkqauyaoqmqeu(); $seyqqsmuaiegkeeq = Manipulate::iikwikykskimciuc(); $auwuoyyagaiegwae = Manipulate::imyuqaesowgauoam([self::ccyeycyyykwuymsy => $jwsqucqyaoaasykk->mqiucouukiymaswc($seyqqsmuaiegkeeq), self::kkekqeuyycwqggou => $auwuoyyagaiegwae, self::kcaoouwiygwwmiok => $jwsqucqyaoaasykk->mqiucouukiymaswc($sciomagaqmgggsiu)]); wukuisoeoeomgegu: return $auwuoyyagaiegwae; } public function suicksywcwiggasc() { $sciomagaqmgggsiu = array_reverse(Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym), true); foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { if (!$useksmwkuswkwcqg instanceof WP_Post_Type) { goto eyuoecmogqwkmomi; } $ymqmyyeuycgmigyo = ManipulatePost::yyqgaciccoiwuwyq($useksmwkuswkwcqg); $aokagokqyuysuksm = self::uouymeyqasaeckso . "\x5f{$ymqmyyeuycgmigyo}"; $this->aucimgwswmgaocae(Tab::ocmycskcuiawkecq($aokagokqyuysuksm, new ListTable($useksmwkuswkwcqg), $aokagokqyuysuksm, ManipulatePost::gaeyeooascowgiac($useksmwkuswkwcqg, self::NAME))); eyuoecmogqwkmomi: gqywcowiigceimaw: } gsimeiqkoyqkuecq: parent::suicksywcwiggasc(); } }
