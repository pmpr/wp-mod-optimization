<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624f0c0d6af12             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Exception; use FilesystemIterator; use IteratorIterator; use RegexIterator; use WP_Post; use WP_Taxonomy; use WP_Term; use WP_Upgrader; abstract class Temp extends Container { protected ?string $id = null; protected $paths; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\163\x77\x69\164\x63\150\137\x74\150\145\155\x65", [$this, "\x77\x65\x69\x6b\x6b\x79\x69\x71\157\x6f\x67\x6b\157\171\x63\145"])->qcsmikeggeemccuu("\x70\162\x65\x5f\x70\157\163\x74\x5f\165\x70\144\141\164\145", [$this, "\x61\x75\x77\161\x79\147\x6d\x77\167\x69\x75\147\x63\151\145\145"], 2)->qcsmikeggeemccuu("\x75\160\x67\162\x61\x64\x65\162\x5f\x70\x72\x6f\143\145\163\x73\137\143\x6f\x6d\x70\154\145\x74\145", [$this, "\153\157\157\x63\165\171\x69\x79\151\x69\145\165\x61\153\155\155"], 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\x74\137\160\165\x72\147\x65\137\143\x61\x63\x68\x65\137\146\x69\154\145\x73"), [$this, "\167\x65\x69\153\x6b\171\151\x71\x6f\157\147\153\x6f\171\x63\x65"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\164\137\x61\146\164\145\x72\137\143\x6c\x65\x61\156\x5f\x70\x6f\163\x74"), [$this, "\x71\x61\x67\155\167\x77\155\x71\151\151\143\x61\x79\x61\161\147"])->qcsmikeggeemccuu("\x63\x6f\155\155\x65\156\x74\137\160\x6f\x73\164", [$this, "\x6d\x6d\x65\151\x75\x79\x75\147\145\145\x6b\157\161\167\x63\163"], 2, 99)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\x74\x5f{$this->mwikyscisascoeea()}\137\x63\154\145\141\156\x5f\x64\x6f\x6d\x61\x69\156"), [$this, "\x77\x65\151\153\153\x79\x69\x71\157\157\x67\x6b\x6f\x79\143\145"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\137\143\154\x65\141\156\137\146\151\x6c\145\x73"), [$this, "\x69\x6d\x6f\167\x61\x6d\x69\x77\x65\145\153\x79\x67\x6f\x63\x6d"]); if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto qogqewiwmwiwskgm; } $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\x70\165\x62\154\151\x63" => true, "\x70\165\x62\154\x69\143\x6c\x79\137\161\x75\145\x72\x79\141\x62\x6c\145" => true, self::aisguagukaewucii => self::emgcgiseaoouacge]); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $this->cecaguuoecmccuse("{$kesssewsiegssiya}\137\162\157\x77\137\141\143\x74\x69\157\x6e\x73", [$this, "\167\163\161\171\163\171\x61\167\167\x77\147\x67\147\157\x77\143"], 2); qiaqsassksqiuyae: } cecuyayqoioasumi: qogqewiwmwiwskgm: parent::kgquecmsgcouyaya(); } public function mmeiuyugeekoqwcs($aqqmosqmsuueyaes, $swyywyqesisooayc) { $post = ManipulateComment::ayueggmoqeeukqmq($aqqmosqmsuueyaes); if (!$post) { goto qgoiooayqmqqsiok; } $this->ekcemquyyiqykmoo(ManipulatePost::mwikyscisascoeea($post)); qgoiooayqmqqsiok: } public function mwikyscisascoeea() : string { return $this->id; } public function iwqysmawycmsmces() : array { $oegoegssokkyiqam = $this->paths; if (!is_string($oegoegssokkyiqam)) { goto qwigomakwmyiwkgo; } $oegoegssokkyiqam = [$oegoegssokkyiqam]; qwigomakwmyiwkgo: return $oegoegssokkyiqam; } public function auwqygmwwiugciee($yekqqesogweecqyc, $icwicymcioeyeyek) { $post = ManipulatePost::get($yekqqesogweecqyc); if (!($post && "\160\165\142\x6c\151\163\x68" === ManipulatePost::ucwmcwqmqwaymkkc($post))) { goto myoicgcuugciueis; } $swaukaagekiououo = ManipulateI18N::emqmaiomewcmuacu($yekqqesogweecqyc); $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $owwcaiyoucwcwmmq = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\160\x6f\163\x74\137\x70\165\x72\147\x65\x5f\165\162\154\x73"), $owwcaiyoucwcwmmq, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\142\145\146\x6f\162\145\137\x63\x6c\145\141\156\x5f\x70\157\x73\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\141\x66\164\x65\162\x5f\x63\x6c\145\141\x6e\x5f\x70\157\163\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\x5f{$this->mwikyscisascoeea()}\137\x61\x66\164\145\162\x5f\x63\154\x65\x61\x6e\137\160\157\x73\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); myoicgcuugciueis: } public function imowamiweekygocm(array $auwuoyyagaiegwae = []) { $iaceaqwggsgmasqe = []; foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iaceaqwggsgmasqe[] = $mgoiyiawsmmgasic["\163\x63\x68\x65\x6d\x65"] . "\x3a\57\x2f" . $mgoiyiawsmmgasic["\150\157\163\164"] . "\52" . $mgoiyiawsmmgasic["\160\141\x74\150"]; csscmcacoikwsecs: } asmecuqiyyswueqe: return $iaceaqwggsgmasqe; } public function koocuyiyiieuakmm($kkkswwyyaoeysaio, $iaakskwmyqceoscy) { if (!("\x75\x70\x64\x61\x74\145" === $iaakskwmyqceoscy["\141\143\164\x69\x6f\x6e"])) { goto sciwggaeogcoesiu; } if (!("\x74\150\145\x6d\145" === $iaakskwmyqceoscy["\164\171\x70\145"])) { goto mkwskuycuyguqqok; } if (!is_array($iaakskwmyqceoscy["\x74\150\x65\155\145\x73"])) { goto kuicqywysciceggs; } $current_theme = wp_get_theme(); $sgmuqamasucuikqa = [ $current_theme->get_template(), $current_theme->get_stylesheet(), ]; if (!array_intersect($iaakskwmyqceoscy["\x74\x68\x65\155\x65\163"], $sgmuqamasucuikqa)) { goto cuykwgmswkskqkyi; } $this->weikkyiqoogkoyce(); cuykwgmswkskqkyi: kuicqywysciceggs: mkwskuycuyguqqok: sciwggaeogcoesiu: } public function eugcsqcwkqseakoe($mceokigoiqekskwe, $gywkakmagykqkiei, $kesssewsiegssiya) { if (!ManipulateTaxonomy::cekoogweeooasayu($kesssewsiegssiya)) { goto eqkauqciwewmgeoi; } $this->weikkyiqoogkoyce(); eqkauqciwewmgeoi: } private function wgokqcqsmcqsiiue($miawkwqioaeasiig) { if (!$this->kcciqwskewsuaemk()->asysewkmisimumay($miawkwqioaeasiig)) { goto kwagwqyusyiyoaqs; } ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); kwagwqyusyiyoaqs: } private function qeoaoiweucueeuqu(string $eeamcawaiqocomwy, $ymiyawysimukkoso = false) { global $wp_rewrite; $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\157\163\x74"]) as $miawkwqioaeasiig) { $mkomwsiykqigmqca = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\x61\x74\150"]; if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto cggowoquuiwqkyew; } foreach (ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca) as $igqsaukqcqscimok) { if (!ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok)) { goto eequksumcoogyoem; } $this->kcciqwskewsuaemk()->remove(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok)); eequksumcoogyoem: sqiciiuwmykocycc: } iomcaiwewsawiamu: if (!$ymiyawysimukkoso) { goto uukumskkeggaowck; } $this->wgokqcqsmcqsiiue(trailingslashit($mkomwsiykqigmqca) . $wp_rewrite->pagination_base); uukumskkeggaowck: cggowoquuiwqkyew: kiqogmwcgcamwiig: } yowsmsiyimmimemc: } public function gqguucgwsqasamke($qcqaayguacmuykwi, $mkomwsiykqigmqca = '', $iuomscuiswckwcoe = false) { if (!$mkomwsiykqigmqca) { goto goacqqsgaaigyuaw; } if (!is_array($mkomwsiykqigmqca)) { goto ocokwuuquaokmasc; } $oegoegssokkyiqam = $mkomwsiykqigmqca; goto yiwiqaqmwiogawym; ocokwuuquaokmasc: $oegoegssokkyiqam = [$mkomwsiykqigmqca]; yiwiqaqmwiogawym: goto meawswgwagoqgkye; goacqqsgaaigyuaw: $oegoegssokkyiqam = $this->iwqysmawycmsmces(); meawswgwagoqgkye: if (isset($eewgemuwouukmwgk[$qcqaayguacmuykwi])) { goto kecwuwwcwokuksyq; } $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca = trailingslashit($mkomwsiykqigmqca); try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($mkomwsiykqigmqca)); } catch (Exception $iewosgggaueeyymg) { return []; } $ucccueqywigcukcc = sprintf("\x2f\x25\61\x24\x73\45\x32\44\x73\50\56\x2a\51\x2f\x69", ManipulateFile::cgwcgscqeqauaagi($mkomwsiykqigmqca, true), $qcqaayguacmuykwi); try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$qcqaayguacmuykwi][] = ManipulateFile::scikcaaaiwcsqowm($uwsgakoiqomwikmy); egasokooagakisiy: } mswsoaimesegiiic: } catch (Exception $iewosgggaueeyymg) { $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; } usqgaogkqgemuima: } wcesymwqykqoyuqk: kecwuwwcwokuksyq: return $eewgemuwouukmwgk[$qcqaayguacmuykwi]; } public function qagmwwmqiicayaqg(WP_Post $post) { foreach ($this->soycogqiiekoekgq($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy); qmiwsequckckoaei: } qgegkeomwscwwiuw: } public function wsqysyawwwgggowc($ccowyogiqwikkkie, $iwewcwusemqaiggk) { if (!DecoratorUser::scmcyesmmikkucie()) { goto goeoymmqqqeeoime; } $eeamcawaiqocomwy = wp_nonce_url(ManipulateServer::oiucukewkckkwiqc("\x61\x64\155\151\156\x2d\160\x6f\x73\x74\56\x70\x68\160\77\141\143\164\151\x6f\x6e\75\x6f\160\164\151\155\x69\172\141\164\151\x6f\156\137\x70\x75\x72\147\x65\x5f{$this->mwikyscisascoeea()}\x26\164\171\160\145\75\x74\x65\x72\155\x2d{$iwewcwusemqaiggk->term_id}\46\x74\x61\170\x6f\x6e\157\155\171\75{$iwewcwusemqaiggk->taxonomy}"), "\157\x70\164\151\155\x69\172\141\164\x69\x6f\x6e\x5f\160\165\x72\147\145\x5f{$this->mwikyscisascoeea()}\x5f\164\x65\x72\155\55{$iwewcwusemqaiggk->term_id}"); $ccowyogiqwikkkie["\x6f\x70\164\151\155\x69\x7a\141\x74\x69\157\x6e\x5f\160\x75\162\x67\x65\137{$this->mwikyscisascoeea()}"] = ManipulateHTML::yuawgssgauywkiia(sprintf(__("\x43\154\x65\141\162\x20\164\150\x69\163\x20\45\x73", PR__MDL__OPTIMIZATION), $this->mwikyscisascoeea()), $eeamcawaiqocomwy); goeoymmqqqeeoime: return $ccowyogiqwikkkie; } private function wgkqeyqiyacgqeso($post) { $cqgoimumaewouews = get_the_time("\131\55\x6d\55\x64", $post); $auwuoyyagaiegwae = []; if (!$cqgoimumaewouews) { goto eiawsoasmscmqswa; } $ocogsiouoiuuguym = explode("\55", $cqgoimumaewouews); $auwuoyyagaiegwae = [get_year_link($ocogsiouoiuuguym[0]), get_month_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1]), get_day_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1], $ocogsiouoiuuguym[2])]; $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\x70\x6f\x73\164\x5f\x64\141\x74\145\163\x5f\165\x72\x6c\163"), $auwuoyyagaiegwae); eiawsoasmscmqswa: return $auwuoyyagaiegwae; } public function yeimaqssyuewkcgm($post) { foreach ($this->wgkqeyqiyacgqeso($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy, true); qmeoaqmsuseueqiy: } ickcmqoiosquugwe: } private function soycogqiiekoekgq(WP_Post $post) { $auwuoyyagaiegwae = []; $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs($post, self::ckmqoekmugkggeym); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!($kesssewsiegssiya instanceof WP_Taxonomy && $kesssewsiegssiya->public && "\x70\x72\x6f\x64\x75\143\164\137\163\150\151\160\x70\151\156\147\x5f\x63\x6c\141\x73\x73" === $kesssewsiegssiya->name)) { goto yssscwioiyygssec; } $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $kesssewsiegssiya); if (!$uyuaosigqymaqsaa) { goto qcessicwuikwqsis; } foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); if (!$migiiksoiymissge) { goto igymseewwyiocoug; } $auwuoyyagaiegwae[] = $migiiksoiymissge; igymseewwyiocoug: if (!ManipulateTaxonomy::aewcsqigycuaekym($kesssewsiegssiya)) { goto qwcegcuowwgiccos; } $mogoquygwgkamaaw = (array) get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya); foreach ($mogoquygwgkamaaw as $aqguqemekkmogkee) { $uasmmsomeawcggee = ManipulateTerm::get($aqguqemekkmogkee, $kesssewsiegssiya); if (!$uasmmsomeawcggee) { goto kooskuwkuayiuose; } $yaycyieqogmsoamk = ManipulateTerm::qmgcisuuikgmqcsu($uasmmsomeawcggee, $kesssewsiegssiya); if (!$yaycyieqogmsoamk) { goto twkmiuomimomscew; } $auwuoyyagaiegwae[] = $yaycyieqogmsoamk; twkmiuomimomscew: kooskuwkuayiuose: eyiamcekkgkiawqy: } mqccmesakuemceqi: qwcegcuowwgiccos: sukskmcwsoysiuqu: } cgewcsueoyaeikgm: qcessicwuikwqsis: yssscwioiyygssec: cuoqqgaygogsmmic: } ygkcacsyyckescqs: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\x5f\x70\157\x73\x74\137\x74\145\162\155\163\137\165\162\x6c\163"), $auwuoyyagaiegwae); } public function weikkyiqoogkoyce($swaukaagekiououo = '') { $auwuoyyagaiegwae = !$swaukaagekiououo || is_object($swaukaagekiououo) || is_array($swaukaagekiououo) || is_int($swaukaagekiououo) ? (array) ManipulateI18N::kmmygsqekuksyeuy() : (array) ManipulateI18N::smickumaawgqkmco($swaukaagekiououo); $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\143\x6c\x65\x61\x6e\x5f\144\157\x6d\x61\151\156\137\165\162\154\x73"), $auwuoyyagaiegwae, $swaukaagekiououo); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); if (!($auwuoyyagaiegwae && $oegoegssokkyiqam)) { goto umgaesggesswoaqe; } foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $gwyacgiwokuuwouo = ManipulateI18N::augqukusksqwwuus($swaukaagekiououo, $mkomwsiykqigmqca); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $couygeouymagssgw = $mkomwsiykqigmqca . $msimssikcguyqcac["\150\x6f\163\164"] . $msimssikcguyqcac["\160\141\164\x68"]; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\142\x65\146\x6f\x72\145\x5f\x63\x6c\x65\x61\x6e\137\x64\157\155\x61\x69\156"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\150\157\x73\x74"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\141\x74\x68"]; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto wwkgkaecgiwggcck; } if ($iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto gygawoqywkukmqee; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); goto kciouyuaqkyqomam; gygawoqywkukmqee: ManipulateFile::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); kciouyuaqkyqomam: wwkgkaecgiwggcck: sycygoiaiqqageym: } oouoqimaaqcmccay: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\141\x66\x74\x65\x72\137\143\154\145\141\156\137\144\157\x6d\x61\151\x6e"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); ycakugokkqkuqyiu: } siqagquguiemuoku: coywmiyqgsweuiic: } ieumumsgyguceusy: umgaesggesswoaqe: } public function skomiaywsggiyamc($aokagokqyuysuksm, $post) { $auwuoyyagaiegwae = []; $mqqisesagsuooios = Manipulate::yygaymuiikwoakuc($aokagokqyuysuksm); $migiiksoiymissge = str_replace(["\x25\x70\x6f\163\164\156\x61\155\145\x25", "\45\x70\x61\x67\x65\156\141\x6d\145\45"], $mqqisesagsuooios[1], $mqqisesagsuooios[0]); if (!(ManipulateFormat::eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH) !== "\x2f")) { goto qsygcycwieukkgwc; } $auwuoyyagaiegwae[] = $migiiksoiymissge; qsygcycwieukkgwc: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $myyccyuumcscsagc = ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg); if (!$myyccyuumcscsagc) { goto kiwqkcaekqqyuegq; } global $wp_rewrite; $auwuoyyagaiegwae[] = $myyccyuumcscsagc; $auwuoyyagaiegwae[] = $myyccyuumcscsagc . "{$wp_rewrite->pagination_base}"; kiwqkcaekqqyuegq: $dokeeoamkysymmqw = []; if (!$dokeeoamkysymmqw) { goto ygcsmkuycoagwyou; } global $blog_id; $uogwqioiiwqsyksu = DecoratorOption::get("\x68\157\155\145"); if (!(!empty($blog_id) && is_multisite())) { goto quwcqmyokicssyew; } switch_to_blog($blog_id); $uogwqioiiwqsyksu = DecoratorOption::get("\x68\x6f\155\x65"); restore_current_blog(); quwcqmyokicssyew: $scyimseukcmieyuw = ManipulateFormat::kcwgwosqkkkkmuks($uogwqioiiwqsyksu); $uogwqioiiwqsyksu = "{$scyimseukcmieyuw["\x73\x63\150\145\155\x65"]}\x3a\57\57{$scyimseukcmieyuw["\x68\157\x73\164"]}"; $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca .= $scyimseukcmieyuw["\x68\157\163\164"]; foreach ($dokeeoamkysymmqw as $suaemuyiacqyugsm) { if (!strstr($suaemuyiacqyugsm, "\x2a")) { goto omugkkesagcyagmk; } $meyiiwcswqmuggyg = ManipulateFile::qawkooaucwoseaia($mkomwsiykqigmqca, "\43" . $suaemuyiacqyugsm . "\43\151"); foreach ($meyiiwcswqmuggyg as $qogsmwakwacwqogk) { $auwuoyyagaiegwae[] = str_replace($mkomwsiykqigmqca, untrailingslashit($uogwqioiiwqsyksu), $qogsmwakwacwqogk->amqagusacuuuaswg()); mosqsmqimqgqoase: } ayyweymyuuiauamo: goto yqykqysmiquwoasu; omugkkesagcyagmk: $auwuoyyagaiegwae[] = trailingslashit($uogwqioiiwqsyksu) . $suaemuyiacqyugsm; yqykqysmiquwoasu: } cmqucgoewuyieoyk: gimmuoqwckiseaik: } iqcogmsguwoikame: ygcsmkuycoagwyou: $auwuoyyagaiegwae[] = ManipulatePost::ocigkomwiuwmmkks($post); $eyagosskwwmgwmog = DecoratorPost::iimmeiugygssweyc($aokagokqyuysuksm); if (!(bool) $eyagosskwwmgwmog) { goto qqewoyookaskiuek; } foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) { $auwuoyyagaiegwae[] = ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom); iggyqogweyosuikc: } kqksuugcgsyeoayy: qqewoyookaskiuek: return array_flip(array_flip($auwuoyyagaiegwae)); } public function ekcemquyyiqykmoo(?string $yekqqesogweecqyc) { static $gqiuywqwmiieqcww = []; if (isset($gqiuywqwmiieqcww[$yekqqesogweecqyc])) { goto soqqemyioggmoakg; } $gqiuywqwmiieqcww[$yekqqesogweecqyc] = 1; if (defined("\104\117\x49\116\x47\137\x41\125\124\117\x53\101\x56\105")) { goto wmmggowmigekyoso; } $post = ManipulatePost::get($yekqqesogweecqyc); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); if (!($post && $useksmwkuswkwcqg && !in_array($useksmwkuswkwcqg, ["\x61\164\x74\x61\143\x68\x6d\145\156\164", "\x6e\x61\x76\137\155\145\x6e\x75\x5f\151\164\x65\x6d"]) && !in_array($post->post_status, ["\x64\x72\141\x66\164", "\141\165\x74\157\x2d\144\x72\141\146\x74"]))) { goto ywqgcegomwaiuquc; } if (!ManipulatePost::qeosassuekcieuuy($useksmwkuswkwcqg)) { goto eegqyykygiccaoeo; } $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); $swaukaagekiououo = false; if ("\x77\x70\155\x6c" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\x6f\157\143\x6f\x6d\x6d\145\x72\x63\145\55\155\x75\x6c\x74\x69\x6c\x69\156\x67\165\x61\x6c\57\167\x70\x6d\x6c\x2d\x77\157\157\143\157\155\x6d\145\162\143\x65\56\x70\x68\x70")) { goto qkcyqocqqwmqgqww; } if (!("\x70\157\x6c\x79\154\x61\x6e\x67" === $eokyomeiuimoaiac && function_exists("\x70\x6c\x6c\137\147\145\x74\x5f\160\x6f\163\164\x5f\154\141\x6e\x67\x75\141\147\x65"))) { goto ssoucoucsgccekwe; } $swaukaagekiououo = pll_get_post_language($yekqqesogweecqyc); ssoucoucsgccekwe: goto miyqyeiwquwsacsm; qkcyqocqqwmqgqww: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($yekqqesogweecqyc, "\160\x6f\x73\x74\137" . $useksmwkuswkwcqg); miyqyeiwquwsacsm: $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\142\x65\146\157\x72\x65\137\143\154\x65\141\156\137\x70\x6f\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x70\157\163\x74\x5f\x70\165\162\147\x65\x5f\x75\x72\x6c\163"), $owwcaiyoucwcwmmq, $post); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x61\x66\x74\145\162\137\143\154\145\x61\156\137\160\x6f\x73\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); eegqyykygiccaoeo: ywqgcegomwaiuquc: wmmggowmigekyoso: soqqemyioggmoakg: } public function wckuqskowgoaoqom($auwuoyyagaiegwae) { $auwuoyyagaiegwae = array_filter((array) $auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto kymkucucyeoeikim; } $oegoegssokkyiqam = $this->iwqysmawycmsmces(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\142\x65\x66\157\x72\145\137\143\154\x65\x61\x6e\x5f\x66\x69\154\x65\x73"), $auwuoyyagaiegwae); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\x62\145\146\157\162\x65\137\143\154\145\x61\x6e\137\x66\151\x6c\x65"), $eeamcawaiqocomwy); $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\157\x73\164"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\x61\164\x68"]; if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto hoeeyiowekaeemko; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); hoeeyiowekaeemko: iekumemscwieugqw: } foeeqckqsyockkak: oqugqwcyomiaaoqu: } eeqesooyqagwawae: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\x61\146\x74\x65\162\x5f\x63\x6c\x65\141\156\x5f\x66\x69\154\145"), $eeamcawaiqocomwy); suswcqoyyqkkquuo: } acaqummmoyiemqss: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x61\146\164\145\162\x5f\143\154\145\x61\156\x5f\146\151\154\145\163"), $auwuoyyagaiegwae); kymkucucyeoeikim: } public function ciyymuaoqiqmucei($swaukaagekiououo = '') { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks(ManipulateI18N::csacaukgwwayassy($swaukaagekiououo)); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $couygeouymagssgw = $mkomwsiykqigmqca . $mgoiyiawsmmgasic["\150\157\163\x74"] . "\x2a" . untrailingslashit($mgoiyiawsmmgasic["\x70\141\164\150"]); $couygeouymagssgw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\x63\x6c\145\x61\156\137\150\157\155\145\137\162\157\157\x74"), $couygeouymagssgw, $mgoiyiawsmmgasic["\150\x6f\x73\x74"], $mgoiyiawsmmgasic["\160\x61\x74\x68"]); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\137\x62\x65\146\157\x72\145\x5f\143\154\145\141\x6e\137\x68\157\x6d\x65"), $couygeouymagssgw, $swaukaagekiououo); $ucasskoyoewwmmii = glob($couygeouymagssgw . "\x2f\x7b\x69\x6e\144\x65\170\x2c\151\x6e\x64\145\170\55\52\x7d\56\173\150\x74\155\x6c\x2c\x68\x74\x6d\154\x5f\147\172\151\160\175", GLOB_BRACE | GLOB_NOSORT); if (!$ucasskoyoewwmmii) { goto esuiysskoweawsue; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $this->kcciqwskewsuaemk()->remove($qogsmwakwacwqogk); uqqaiagaeqgqgaiy: } uguigkcmukuouway: esuiysskoweawsue: global $wp_rewrite; $qmwoqyacswkwkiog = glob($couygeouymagssgw . "\52\x2f" . $wp_rewrite->pagination_base, GLOB_NOSORT); if (!$qmwoqyacswkwkiog) { goto suqkuqygkkgwyaie; } foreach ($qmwoqyacswkwkiog as $miawkwqioaeasiig) { ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); aegysmeecgcgayyw: } gaomwagkcciesyqy: suqkuqygkkgwyaie: $lgqgmusqcgekwgui = glob($couygeouymagssgw . "\57\56\x6d\x6f\x62\151\154\x65\x2d\141\143\164\x69\x76\145", GLOB_BRACE | GLOB_NOSORT); if (!$lgqgmusqcgekwgui) { goto skkamseieeusycye; } foreach ($lgqgmusqcgekwgui as $eagqciqqakiuokus) { $this->kcciqwskewsuaemk()->remove($eagqciqqakiuokus); wiysogeqqwgioyka: } soaccwqimeksgwiw: skkamseieeusycye: $okyqgikguumqkcas = glob($couygeouymagssgw . "\57\56\156\x6f\55\167\145\142\160", GLOB_BRACE | GLOB_NOSORT); if (!$okyqgikguumqkcas) { goto giaacoqqqsekcayy; } foreach ($okyqgikguumqkcas as $kaggcuumyeuscqui) { $this->kcciqwskewsuaemk()->remove($kaggcuumyeuscqui); syiqkaasoueowwui: } cgiscsqwwgqqaeqi: giaacoqqqsekcayy: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\137\x61\146\x74\145\x72\137\x63\154\x65\141\x6e\x5f\x68\x6f\x6d\145"), $couygeouymagssgw, $swaukaagekiououo); qicwaskssogcokgm: } usquiuuyiyqaeyiu: } public function uqigacqieikayuac() { $auwuoyyagaiegwae = []; $auwuoyyagaiegwae[] = get_feed_link(); $auwuoyyagaiegwae[] = get_feed_link("\143\157\155\155\x65\156\x74\163\x5f"); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\143\x6c\145\x61\x6e\137\150\x6f\155\x65\x5f\146\145\x65\x64\x73"), $auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\142\145\x66\x6f\x72\145\137\x63\x6c\145\141\156\137\x68\157\155\x65\137\x66\145\145\144\x73"), $auwuoyyagaiegwae); self::wckuqskowgoaoqom($auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\141\x66\164\x65\162\137\143\154\x65\141\156\x5f\150\x6f\x6d\145\x5f\x66\x65\145\x64\x73"), $auwuoyyagaiegwae); } public function suiuswewcumcyqms($mceokigoiqekskwe, $uemuuqsgymiqyuuu) { $owwcaiyoucwcwmmq = []; $iwewcwusemqaiggk = DecoratorTerm::woimamkkeyoyauoa("\x69\x64", $mceokigoiqekskwe, $uemuuqsgymiqyuuu); $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); if ("\167\x70\155\x6c" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\167\x6f\157\x63\x6f\x6d\x6d\x65\x72\x63\x65\x2d\155\x75\x6c\164\x69\154\x69\x6e\147\x75\x61\154\57\167\x70\155\x6c\x2d\167\157\157\143\157\155\x6d\x65\162\143\x65\x2e\160\150\x70")) { goto wmywuusgukmmaams; } if ("\x70\157\154\x79\154\141\156\147" === $eokyomeiuimoaiac && function_exists("\160\154\x6c\137\x67\x65\164\x5f\x74\145\162\x6d\x5f\x6c\x61\x6e\x67\x75\x61\147\x65")) { goto ewymsmkkiksgwysk; } $swaukaagekiououo = false; goto cmegwsegsosyqcai; ewymsmkkiksgwysk: $swaukaagekiououo = pll_get_term_language($mceokigoiqekskwe); cmegwsegsosyqcai: goto gkyawqqcmigqgaiq; wmywuusgukmmaams: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($mceokigoiqekskwe, "\x74\x61\170\137" . $uemuuqsgymiqyuuu); gkyawqqcmigqgaiq: $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $uemuuqsgymiqyuuu); if (!("\57" !== ManipulateFormat::eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH))) { goto ooeausyowguqicuo; } array_push($owwcaiyoucwcwmmq, $migiiksoiymissge); ooeausyowguqicuo: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x62\145\x66\x6f\x72\145\x5f\x63\x6c\x65\x61\x6e\x5f\x74\x65\x72\x6d"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\164\145\x72\x6d\137\x70\x75\x72\147\145\x5f\165\x72\154\163"), $owwcaiyoucwcwmmq, $iwewcwusemqaiggk); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\141\146\164\x65\x72\137\143\154\145\141\x6e\x5f\x74\x65\x72\155"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); } }
