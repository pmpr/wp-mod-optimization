<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6533a38a20125             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Page\Admin\Page as BaseClass; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Model; use WP_Post_Type; class Page extends BaseClass { public function __construct() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\x70\x61\x72\145\x6e\164\x5f\x73\x6c\x75\x67" => $wksoawcgagcgoask, "\x70\x61\x67\x65\x5f\x74\x69\x74\154\x65" => __("\x4c\x65\x76\145\x6c\x20\61\40\x70\141\147\x65\x73", PR__MDL__OPTIMIZATION), "\x6d\145\156\165\137\163\154\165\x67" => $this->oyqkaeooscmcweyc("\x62\141\163\151\x63\137\160\x61\147\x65"), "\160\157\x73\151\164\151\x6f\x6e" => 0]; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\x69\156\137\151\156\151\164", [$this, "\171\x65\x79\x69\147\x75\x79\145\147\x6d\155\x79\165\163\145\141"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\x5f\160\162\x65\x6c\157\x61\144\137\x61\154\x6c\x5f\x6f\x66\146\x6c\x69\x6e\x65\137\165\x72\154\163"), [$this, "\x63\171\x6f\163\151\x61\145\163\147\x61\x6f\x77\145\151\x6d\x6d"]); parent::kgquecmsgcouyaya(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto wgmeyycmqioioaqc; } $this->cimaucgayqyyccoc(sprintf(__("\45\x73\40\157\160\x74\x69\155\x69\172\141\164\x69\157\156\x20\x61\x70\160\x6c\x79\x20\x61\x75\x74\x6f\155\141\164\x69\143\141\154\154\171\x20\164\x6f\40\141\154\x6c\40\x70\141\x67\145\163\x20\167\x69\164\x68\x6f\x75\x74\x20\164\150\145\40\156\145\145\x64\40\146\157\162\40\141\x20\142\165\x64\147\x65\164\x2e", PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(__("\114\x65\166\x65\154\x20\x31", PR__MDL__OPTIMIZATION))), "\154\x65\166\x65\154\55\61", self::smkwuwawwaqyimcq); wgmeyycmqioioaqc: } public function cyosiaesgaoweimm($auwuoyyagaiegwae = []) : array { if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto ykiyuciecskusaae; } $sciomagaqmgggsiu = Manipulate::maykkqauyaoqmqeu(); $seyqqsmuaiegkeeq = Manipulate::iikwikykskimciuc(); $auwuoyyagaiegwae = Manipulate::imyuqaesowgauoam([self::ccyeycyyykwuymsy => $jwsqucqyaoaasykk->mqiucouukiymaswc($seyqqsmuaiegkeeq), self::kkekqeuyycwqggou => $auwuoyyagaiegwae, self::kcaoouwiygwwmiok => $jwsqucqyaoaasykk->mqiucouukiymaswc($sciomagaqmgggsiu)]); ykiyuciecskusaae: return $auwuoyyagaiegwae; } public function suicksywcwiggasc() { $sciomagaqmgggsiu = array_reverse(Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym), true); foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { if (!$useksmwkuswkwcqg instanceof WP_Post_Type) { goto momgmqemgcasyuqq; } $ymqmyyeuycgmigyo = ManipulatePost::yyqgaciccoiwuwyq($useksmwkuswkwcqg); $aokagokqyuysuksm = self::uouymeyqasaeckso . "\x5f{$ymqmyyeuycgmigyo}"; $this->aucimgwswmgaocae(Tab::ocmycskcuiawkecq($aokagokqyuysuksm, new ListTable($useksmwkuswkwcqg), $aokagokqyuysuksm, ManipulatePost::gaeyeooascowgiac($useksmwkuswkwcqg, self::NAME))); momgmqemgcasyuqq: ucugeysomcyceyos: } pssquaaiioygwqoq: parent::suicksywcwiggasc(); } }
