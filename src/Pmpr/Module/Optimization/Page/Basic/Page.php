<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             630109f80ebad             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Page\Admin\Page as BaseClass; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Model; use WP_Post_Type; class Page extends BaseClass { public function __construct() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\160\141\162\145\x6e\x74\137\x73\154\165\x67" => $wksoawcgagcgoask, "\160\x61\x67\145\137\x74\151\x74\154\145" => __("\114\145\166\145\x6c\40\61\x20\160\x61\x67\x65\x73", PR__MDL__OPTIMIZATION), "\155\x65\x6e\x75\x5f\163\154\165\x67" => $this->oyqkaeooscmcweyc("\x62\x61\x73\151\143\x5f\160\141\147\x65"), "\160\157\x73\151\x74\151\x6f\x6e" => 0]; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\x6d\x69\x6e\x5f\151\x6e\151\x74", [$this, "\x79\x65\x79\x69\x67\x75\171\x65\x67\x6d\155\171\165\x73\x65\141"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\x74\137\160\162\x65\154\x6f\141\144\137\141\154\154\x5f\157\146\x66\154\x69\156\x65\137\165\162\x6c\163"), [$this, "\143\171\x6f\163\x69\x61\145\163\147\141\157\167\x65\x69\x6d\155"]); parent::kgquecmsgcouyaya(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto gsimeiqkoyqkuecq; } $this->cimaucgayqyyccoc(sprintf(__("\45\163\x20\157\x70\164\151\x6d\151\172\x61\x74\x69\x6f\x6e\40\x61\x70\160\x6c\171\x20\x61\165\x74\157\155\x61\x74\151\143\141\154\154\x79\x20\164\x6f\40\x61\154\154\x20\160\141\147\145\163\40\x77\x69\164\x68\157\x75\x74\40\x74\x68\x65\40\156\x65\145\144\x20\x66\x6f\162\x20\x61\40\142\x75\x64\x67\145\x74\x2e", PR__MDL__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\114\145\166\145\x6c\40\x31", PR__MDL__OPTIMIZATION))), "\154\145\x76\x65\154\x2d\61", self::smkwuwawwaqyimcq); gsimeiqkoyqkuecq: } public function cyosiaesgaoweimm($auwuoyyagaiegwae = []) : array { if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto gqywcowiigceimaw; } $sciomagaqmgggsiu = Manipulate::maykkqauyaoqmqeu(); $seyqqsmuaiegkeeq = Manipulate::iikwikykskimciuc(); $auwuoyyagaiegwae = Manipulate::imyuqaesowgauoam([self::ccyeycyyykwuymsy => $jwsqucqyaoaasykk->mqiucouukiymaswc($seyqqsmuaiegkeeq), self::kkekqeuyycwqggou => $auwuoyyagaiegwae, self::kcaoouwiygwwmiok => $jwsqucqyaoaasykk->mqiucouukiymaswc($sciomagaqmgggsiu)]); gqywcowiigceimaw: return $auwuoyyagaiegwae; } public function suicksywcwiggasc() { $sciomagaqmgggsiu = array_reverse(Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym), true); foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { if (!$useksmwkuswkwcqg instanceof WP_Post_Type) { goto geugsymgsiuuqccg; } $ymqmyyeuycgmigyo = ManipulatePost::yyqgaciccoiwuwyq($useksmwkuswkwcqg); $aokagokqyuysuksm = self::uouymeyqasaeckso . "\137{$ymqmyyeuycgmigyo}"; $this->aucimgwswmgaocae(Tab::ocmycskcuiawkecq($aokagokqyuysuksm, new ListTable($useksmwkuswkwcqg), $aokagokqyuysuksm, ManipulatePost::gaeyeooascowgiac($useksmwkuswkwcqg, self::NAME))); geugsymgsiuuqccg: quewwumogiocouii: } eyuoecmogqwkmomi: parent::suicksywcwiggasc(); } }
