<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652bc1a0098e2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Exception; use FilesystemIterator; use IteratorIterator; use RegexIterator; use WP_Post; use WP_Taxonomy; use WP_Term; use WP_Upgrader; abstract class Temp extends Container { protected ?string $id = null; protected $paths; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x73\x77\151\x74\143\x68\137\164\150\x65\x6d\x65", [$this, "\x77\145\x69\153\153\171\x69\161\x6f\157\x67\x6b\157\171\143\x65"])->qcsmikeggeemccuu("\x70\162\x65\137\160\x6f\163\x74\x5f\x75\x70\x64\141\164\145", [$this, "\141\165\167\x71\171\x67\x6d\x77\167\151\x75\147\143\x69\145\x65"], 2)->qcsmikeggeemccuu("\x75\x70\x67\x72\x61\144\145\x72\137\160\x72\x6f\x63\145\x73\x73\x5f\x63\x6f\155\x70\x6c\145\164\x65", [$this, "\153\157\x6f\143\x75\x79\151\171\151\x69\145\x75\141\x6b\155\155"], 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\160\165\x72\x67\145\x5f\143\141\143\x68\145\137\x66\x69\154\145\163"), [$this, "\167\145\x69\x6b\153\171\151\161\x6f\157\x67\x6b\157\171\143\x65"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\x74\x5f\141\146\x74\145\x72\137\143\x6c\145\x61\156\137\x70\x6f\x73\164"), [$this, "\161\141\x67\x6d\167\167\155\x71\x69\151\143\x61\171\141\x71\x67"])->qcsmikeggeemccuu("\143\157\x6d\x6d\x65\156\164\x5f\x70\x6f\163\164", [$this, "\x6d\155\x65\151\x75\171\x75\147\x65\145\x6b\157\x71\x77\x63\x73"], 2, 99)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\164\x5f{$this->mwikyscisascoeea()}\x5f\143\154\145\141\156\x5f\144\x6f\x6d\141\x69\x6e"), [$this, "\x77\x65\151\153\x6b\x79\151\161\157\157\x67\x6b\157\x79\143\x65"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x63\154\x65\141\156\137\x66\151\x6c\145\163"), [$this, "\x69\x6d\157\x77\141\x6d\x69\167\x65\145\153\171\147\157\143\x6d"]); if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto ykuqeyogsasokqis; } $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\160\x75\x62\154\x69\143" => true, "\160\x75\142\154\x69\143\x6c\x79\137\x71\165\145\x72\x79\x61\x62\154\x65" => true, self::aisguagukaewucii => self::emgcgiseaoouacge]); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $this->cecaguuoecmccuse("{$kesssewsiegssiya}\x5f\x72\157\167\137\141\143\164\151\157\156\163", [$this, "\x77\x73\x71\171\163\171\141\x77\167\x77\x67\147\x67\x6f\x77\143"], 2); eokikuciuqkyauum: } imykswegcuekqwio: ykuqeyogsasokqis: parent::kgquecmsgcouyaya(); } public function mmeiuyugeekoqwcs($aqqmosqmsuueyaes, $swyywyqesisooayc) { $post = ManipulateComment::ayueggmoqeeukqmq($aqqmosqmsuueyaes); if (!$post) { goto mqaamqyoywyekiko; } $this->ekcemquyyiqykmoo(ManipulatePost::mwikyscisascoeea($post)); mqaamqyoywyekiko: } public function mwikyscisascoeea() : string { return $this->id; } public function iwqysmawycmsmces() : array { $oegoegssokkyiqam = $this->paths; if (!is_string($oegoegssokkyiqam)) { goto smkakiyekkqoggao; } $oegoegssokkyiqam = [$oegoegssokkyiqam]; smkakiyekkqoggao: return $oegoegssokkyiqam; } public function auwqygmwwiugciee($yekqqesogweecqyc, $icwicymcioeyeyek) { $post = ManipulatePost::get($yekqqesogweecqyc); if (!($post && "\x70\165\x62\154\151\163\150" === ManipulatePost::ucwmcwqmqwaymkkc($post))) { goto zggweikegkcgkmma; } $swaukaagekiououo = ManipulateI18N::emqmaiomewcmuacu($yekqqesogweecqyc); $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $owwcaiyoucwcwmmq = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\160\x6f\x73\x74\137\160\x75\x72\147\x65\137\x75\162\154\x73"), $owwcaiyoucwcwmmq, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\137\142\145\x66\157\162\x65\x5f\143\154\145\141\x6e\137\x70\157\x73\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\137\x61\146\x74\x65\x72\x5f\143\154\x65\x61\x6e\137\160\157\x73\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f{$this->mwikyscisascoeea()}\x5f\x61\x66\x74\x65\x72\137\x63\154\145\x61\156\137\160\x6f\163\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); zggweikegkcgkmma: } public function imowamiweekygocm(array $auwuoyyagaiegwae = []) { $iaceaqwggsgmasqe = []; foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iaceaqwggsgmasqe[] = $mgoiyiawsmmgasic["\x73\143\x68\x65\155\145"] . "\x3a\57\x2f" . $mgoiyiawsmmgasic["\150\157\x73\x74"] . "\x2a" . $mgoiyiawsmmgasic["\x70\x61\164\150"]; gcsosokicycukoyc: } yisoawmmammassqk: return $iaceaqwggsgmasqe; } public function koocuyiyiieuakmm($kkkswwyyaoeysaio, $iaakskwmyqceoscy) { if (!("\165\x70\x64\x61\x74\x65" === $iaakskwmyqceoscy["\x61\143\164\x69\x6f\156"])) { goto ekgkiioywougquka; } if (!("\x74\150\x65\155\145" === $iaakskwmyqceoscy["\164\171\160\145"])) { goto umccwcqwkoiaakmu; } if (!is_array($iaakskwmyqceoscy["\x74\150\x65\155\x65\x73"])) { goto coskmuqsawiaeyqg; } $current_theme = wp_get_theme(); $sgmuqamasucuikqa = [ $current_theme->get_template(), $current_theme->get_stylesheet(), ]; if (!array_intersect($iaakskwmyqceoscy["\x74\x68\145\155\145\163"], $sgmuqamasucuikqa)) { goto seqammocqkyswaim; } $this->weikkyiqoogkoyce(); seqammocqkyswaim: coskmuqsawiaeyqg: umccwcqwkoiaakmu: ekgkiioywougquka: } public function eugcsqcwkqseakoe($mceokigoiqekskwe, $gywkakmagykqkiei, $kesssewsiegssiya) { if (!ManipulateTaxonomy::cekoogweeooasayu($kesssewsiegssiya)) { goto wyyowcsciaqkuiuq; } $this->weikkyiqoogkoyce(); wyyowcsciaqkuiuq: } private function wgokqcqsmcqsiiue($miawkwqioaeasiig) { if (!$this->kcciqwskewsuaemk()->asysewkmisimumay($miawkwqioaeasiig)) { goto imquwacukaswoyka; } ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); imquwacukaswoyka: } private function qeoaoiweucueeuqu(string $eeamcawaiqocomwy, $ymiyawysimukkoso = false) { global $wp_rewrite; $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\157\x73\x74"]) as $miawkwqioaeasiig) { $mkomwsiykqigmqca = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\x61\x74\x68"]; if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto qocgmocqauaaekii; } foreach (ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca) as $igqsaukqcqscimok) { if (!ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok)) { goto kcqueaewmayywqeq; } $this->kcciqwskewsuaemk()->remove(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok)); kcqueaewmayywqeq: gcoeaokkagaaeuse: } maeccckgcsaaumkw: if (!$ymiyawysimukkoso) { goto uagsgicwwcakecwq; } $this->wgokqcqsmcqsiiue(trailingslashit($mkomwsiykqigmqca) . $wp_rewrite->pagination_base); uagsgicwwcakecwq: qocgmocqauaaekii: qwgkwokcyocqiyee: } smksoismyouykeoa: } public function gqguucgwsqasamke($qcqaayguacmuykwi, $mkomwsiykqigmqca = '', $iuomscuiswckwcoe = false) { if (!$mkomwsiykqigmqca) { goto ikygockuuyimmmwk; } if (!is_array($mkomwsiykqigmqca)) { goto gsggsmmwcmkgyyss; } $oegoegssokkyiqam = $mkomwsiykqigmqca; goto yweucowesgsoewyc; gsggsmmwcmkgyyss: $oegoegssokkyiqam = [$mkomwsiykqigmqca]; yweucowesgsoewyc: goto uwmcugkwqwcuqqsq; ikygockuuyimmmwk: $oegoegssokkyiqam = $this->iwqysmawycmsmces(); uwmcugkwqwcuqqsq: if (isset($eewgemuwouukmwgk[$qcqaayguacmuykwi])) { goto gysmigyakgaakeoy; } $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca = trailingslashit($mkomwsiykqigmqca); try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($mkomwsiykqigmqca)); } catch (Exception $iewosgggaueeyymg) { return []; } $ucccueqywigcukcc = sprintf("\57\x25\61\x24\x73\x25\x32\x24\x73\x28\56\52\51\x2f\x69", ManipulateFile::cgwcgscqeqauaagi($mkomwsiykqigmqca, true), $qcqaayguacmuykwi); try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$qcqaayguacmuykwi][] = ManipulateFile::scikcaaaiwcsqowm($uwsgakoiqomwikmy); kmcygqkmwcgwamkw: } yicaqocukqoauqgc: } catch (Exception $iewosgggaueeyymg) { $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; } muimagegskoisckc: } cycasoiysmksuwqk: gysmigyakgaakeoy: return $eewgemuwouukmwgk[$qcqaayguacmuykwi]; } public function qagmwwmqiicayaqg(WP_Post $post) { foreach ($this->soycogqiiekoekgq($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy); mmesoisgqucowwms: } sueeqeioeiwkscao: } public function wsqysyawwwgggowc($ccowyogiqwikkkie, $iwewcwusemqaiggk) { if (!DecoratorUser::scmcyesmmikkucie()) { goto uieuouugckwokske; } $eeamcawaiqocomwy = wp_nonce_url(ManipulateServer::oiucukewkckkwiqc("\141\144\x6d\x69\156\x2d\x70\x6f\x73\x74\x2e\160\x68\x70\x3f\141\143\164\x69\157\x6e\x3d\157\160\x74\151\x6d\x69\172\141\164\x69\x6f\156\x5f\160\x75\x72\147\x65\137{$this->mwikyscisascoeea()}\46\164\x79\160\145\75\x74\145\162\x6d\55{$iwewcwusemqaiggk->term_id}\46\x74\x61\170\x6f\156\157\x6d\171\x3d{$iwewcwusemqaiggk->taxonomy}"), "\157\160\164\x69\155\151\172\141\164\x69\157\x6e\x5f\x70\165\x72\x67\145\137{$this->mwikyscisascoeea()}\x5f\164\x65\162\155\55{$iwewcwusemqaiggk->term_id}"); $ccowyogiqwikkkie["\157\x70\x74\x69\x6d\151\172\141\x74\x69\157\156\137\x70\165\162\x67\145\x5f{$this->mwikyscisascoeea()}"] = ManipulateHTML::yuawgssgauywkiia(sprintf(__("\103\154\145\x61\162\x20\164\x68\151\x73\x20\45\x73", PR__MDL__OPTIMIZATION), $this->mwikyscisascoeea()), $eeamcawaiqocomwy); uieuouugckwokske: return $ccowyogiqwikkkie; } private function wgkqeyqiyacgqeso($post) { $cqgoimumaewouews = get_the_time("\131\x2d\x6d\x2d\144", $post); $auwuoyyagaiegwae = []; if (!$cqgoimumaewouews) { goto seaiwkkgyyegiyug; } $ocogsiouoiuuguym = explode("\55", $cqgoimumaewouews); $auwuoyyagaiegwae = [get_year_link($ocogsiouoiuuguym[0]), get_month_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1]), get_day_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1], $ocogsiouoiuuguym[2])]; $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\160\x6f\x73\164\137\x64\x61\164\x65\x73\137\165\162\x6c\x73"), $auwuoyyagaiegwae); seaiwkkgyyegiyug: return $auwuoyyagaiegwae; } public function yeimaqssyuewkcgm($post) { foreach ($this->wgkqeyqiyacgqeso($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy, true); kmwwqgiacsoksgcy: } uauuoyigkmqoasaq: } private function soycogqiiekoekgq(WP_Post $post) { $auwuoyyagaiegwae = []; $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs($post, self::ckmqoekmugkggeym); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!($kesssewsiegssiya instanceof WP_Taxonomy && $kesssewsiegssiya->public && "\160\x72\x6f\144\165\x63\164\x5f\x73\x68\151\160\x70\x69\x6e\x67\137\x63\x6c\x61\163\x73" === $kesssewsiegssiya->name)) { goto uaiiuywoakccusge; } $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $kesssewsiegssiya); if (!$uyuaosigqymaqsaa) { goto uekueeyqaackuwao; } foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); if (!$migiiksoiymissge) { goto woaoeyaowkuukkqm; } $auwuoyyagaiegwae[] = $migiiksoiymissge; woaoeyaowkuukkqm: if (!ManipulateTaxonomy::aewcsqigycuaekym($kesssewsiegssiya)) { goto wassyiqsqasaoiau; } $mogoquygwgkamaaw = (array) get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya); foreach ($mogoquygwgkamaaw as $aqguqemekkmogkee) { $uasmmsomeawcggee = ManipulateTerm::get($aqguqemekkmogkee, $kesssewsiegssiya); if (!$uasmmsomeawcggee) { goto icmsyimgycuocisu; } $yaycyieqogmsoamk = ManipulateTerm::qmgcisuuikgmqcsu($uasmmsomeawcggee, $kesssewsiegssiya); if (!$yaycyieqogmsoamk) { goto oeeasouoaaoaaemm; } $auwuoyyagaiegwae[] = $yaycyieqogmsoamk; oeeasouoaaoaaemm: icmsyimgycuocisu: iaockwkwaiqgeuyu: } mmqkuymyyycywmqu: wassyiqsqasaoiau: aemoyqueimayqcaw: } sequgigsgkqaikmq: uekueeyqaackuwao: uaiiuywoakccusge: ugqucegcucyyayga: } akieeaeqiwugimie: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\x70\157\163\x74\137\x74\145\162\155\x73\137\x75\162\154\163"), $auwuoyyagaiegwae); } public function weikkyiqoogkoyce($swaukaagekiououo = '') { $auwuoyyagaiegwae = !$swaukaagekiououo || is_object($swaukaagekiououo) || is_array($swaukaagekiououo) || is_int($swaukaagekiououo) ? (array) ManipulateI18N::kmmygsqekuksyeuy() : (array) ManipulateI18N::smickumaawgqkmco($swaukaagekiououo); $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\x5f\x63\154\145\x61\156\x5f\144\157\155\x61\151\x6e\137\x75\x72\154\163"), $auwuoyyagaiegwae, $swaukaagekiououo); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); if (!($auwuoyyagaiegwae && $oegoegssokkyiqam)) { goto uccuykggugcmiyam; } foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $gwyacgiwokuuwouo = ManipulateI18N::augqukusksqwwuus($swaukaagekiououo, $mkomwsiykqigmqca); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $couygeouymagssgw = $mkomwsiykqigmqca . $msimssikcguyqcac["\x68\x6f\163\164"] . $msimssikcguyqcac["\160\141\x74\150"]; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\x62\145\x66\157\x72\145\x5f\143\x6c\145\141\156\137\x64\157\x6d\x61\x69\x6e"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\157\163\164"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\141\164\150"]; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto gskaqcgccswmuqsy; } if ($iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto ykuycowuguumseuu; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); goto qugsgsscqyikugyc; ykuycowuguumseuu: ManipulateFile::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); qugsgsscqyikugyc: gskaqcgccswmuqsy: esuuweysgwuwcuue: } gigiwwouakeekoim: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\x61\146\164\x65\x72\137\143\154\x65\x61\156\x5f\144\x6f\x6d\141\x69\156"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); eauiumeeyckucuyc: } gokwmwmaumiwscua: eieiwacwqkgsewai: } ysiwoiqiaosqoikm: uccuykggugcmiyam: } public function skomiaywsggiyamc($aokagokqyuysuksm, $post) { $auwuoyyagaiegwae = []; $mqqisesagsuooios = Manipulate::yygaymuiikwoakuc($aokagokqyuysuksm); $migiiksoiymissge = str_replace(["\x25\160\157\x73\x74\156\141\155\x65\x25", "\45\x70\141\147\x65\156\x61\x6d\145\x25"], $mqqisesagsuooios[1], $mqqisesagsuooios[0]); if (!($this->eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH) !== "\x2f")) { goto saycoceqywiekqsi; } $auwuoyyagaiegwae[] = $migiiksoiymissge; saycoceqywiekqsi: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $myyccyuumcscsagc = ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg); if (!$myyccyuumcscsagc) { goto sqaowueaequoigsa; } global $wp_rewrite; $auwuoyyagaiegwae[] = $myyccyuumcscsagc; $auwuoyyagaiegwae[] = $myyccyuumcscsagc . "{$wp_rewrite->pagination_base}"; sqaowueaequoigsa: $dokeeoamkysymmqw = []; if (!$dokeeoamkysymmqw) { goto eyskqaccgeomqmyw; } global $blog_id; $uogwqioiiwqsyksu = DecoratorOption::get("\x68\157\x6d\145"); if (!(!empty($blog_id) && ManipulateServer::gsaomcwyacqcumaa())) { goto eqmauwqqowsiwaue; } switch_to_blog($blog_id); $uogwqioiiwqsyksu = DecoratorOption::get("\150\x6f\155\145"); restore_current_blog(); eqmauwqqowsiwaue: $scyimseukcmieyuw = ManipulateFormat::kcwgwosqkkkkmuks($uogwqioiiwqsyksu); $uogwqioiiwqsyksu = "{$scyimseukcmieyuw["\163\x63\150\x65\155\145"]}\x3a\57\57{$scyimseukcmieyuw["\x68\x6f\163\x74"]}"; $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca .= $scyimseukcmieyuw["\150\x6f\163\x74"]; foreach ($dokeeoamkysymmqw as $suaemuyiacqyugsm) { if (!strstr($suaemuyiacqyugsm, "\x2a")) { goto oegaywiwywuyksaq; } $meyiiwcswqmuggyg = ManipulateFile::qawkooaucwoseaia($mkomwsiykqigmqca, "\x23" . $suaemuyiacqyugsm . "\43\151"); foreach ($meyiiwcswqmuggyg as $qogsmwakwacwqogk) { $auwuoyyagaiegwae[] = str_replace($mkomwsiykqigmqca, untrailingslashit($uogwqioiiwqsyksu), $qogsmwakwacwqogk->amqagusacuuuaswg()); ysaumykuimqigeqa: } qmiqicgscsuoyeqo: goto kkogaccoqmsmmkmo; oegaywiwywuyksaq: $auwuoyyagaiegwae[] = trailingslashit($uogwqioiiwqsyksu) . $suaemuyiacqyugsm; kkogaccoqmsmmkmo: } yuyiqaawwgaywgqo: yqkyoaiwcyqeaqwu: } waycokyiesmqgqcg: eyskqaccgeomqmyw: $auwuoyyagaiegwae[] = ManipulatePost::ocigkomwiuwmmkks($post); $eyagosskwwmgwmog = DecoratorPost::iimmeiugygssweyc($aokagokqyuysuksm); if (!(bool) $eyagosskwwmgwmog) { goto icawmkaswkmwicsa; } foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) { $auwuoyyagaiegwae[] = ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom); wscikmsmwmocsqeu: } uiowwckamqucksim: icawmkaswkmwicsa: return array_flip(array_flip($auwuoyyagaiegwae)); } public function ekcemquyyiqykmoo(?string $yekqqesogweecqyc) { static $gqiuywqwmiieqcww = []; if (isset($gqiuywqwmiieqcww[$yekqqesogweecqyc])) { goto wgmeyycmqioioaqc; } $gqiuywqwmiieqcww[$yekqqesogweecqyc] = 1; if (defined("\x44\x4f\111\x4e\x47\137\x41\125\124\x4f\123\101\x56\x45")) { goto igckskemqkqueukg; } $post = ManipulatePost::get($yekqqesogweecqyc); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); if (!($post && $useksmwkuswkwcqg && !in_array($useksmwkuswkwcqg, ["\x61\164\x74\x61\x63\x68\155\145\156\x74", "\156\141\x76\x5f\x6d\x65\156\x75\137\x69\164\145\155"]) && !in_array($post->post_status, ["\x64\x72\141\x66\x74", "\141\165\x74\157\55\144\x72\x61\146\x74"]))) { goto weuueokkumksgaeo; } if (!ManipulatePost::qeosassuekcieuuy($useksmwkuswkwcqg)) { goto csoeisssoumqqeoa; } $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); $swaukaagekiououo = false; if ("\x77\x70\x6d\x6c" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\x6f\x6f\143\157\155\155\x65\x72\143\145\x2d\x6d\x75\x6c\x74\x69\x6c\x69\156\x67\x75\x61\154\x2f\x77\x70\x6d\154\x2d\x77\157\157\143\x6f\x6d\x6d\x65\162\x63\x65\x2e\x70\x68\160")) { goto qwueqigcisoogaec; } if (!("\x70\157\154\171\154\141\x6e\x67" === $eokyomeiuimoaiac && function_exists("\160\154\154\x5f\147\145\x74\x5f\x70\157\x73\x74\137\154\141\x6e\x67\x75\x61\x67\x65"))) { goto imsgusweocmiyygi; } $swaukaagekiououo = pll_get_post_language($yekqqesogweecqyc); imsgusweocmiyygi: goto kmeekqukcecuscye; qwueqigcisoogaec: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($yekqqesogweecqyc, "\160\157\x73\x74\137" . $useksmwkuswkwcqg); kmeekqukcecuscye: $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\142\145\146\157\162\x65\137\143\x6c\145\141\156\137\160\157\x73\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x70\x6f\x73\164\137\160\x75\x72\x67\x65\137\x75\162\154\163"), $owwcaiyoucwcwmmq, $post); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\x61\146\164\x65\162\137\x63\x6c\145\x61\x6e\x5f\x70\x6f\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); csoeisssoumqqeoa: weuueokkumksgaeo: igckskemqkqueukg: wgmeyycmqioioaqc: } public function wckuqskowgoaoqom($auwuoyyagaiegwae) { $auwuoyyagaiegwae = array_filter((array) $auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto mioqycmmeucswoms; } $oegoegssokkyiqam = $this->iwqysmawycmsmces(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\142\145\146\x6f\x72\145\137\143\x6c\x65\141\156\x5f\146\x69\x6c\x65\163"), $auwuoyyagaiegwae); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137\142\x65\146\157\x72\x65\137\x63\x6c\x65\x61\x6e\137\146\x69\x6c\145"), $eeamcawaiqocomwy); $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\x6f\x73\x74"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\141\164\x68"]; if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto imaiuooqwwokwemw; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); imaiuooqwwokwemw: keyiswqkmqqquosw: } qmuikumqukcyaeqa: momgmqemgcasyuqq: } ucugeysomcyceyos: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\x61\x66\x74\145\x72\137\x63\x6c\x65\141\156\137\146\x69\x6c\145"), $eeamcawaiqocomwy); pssquaaiioygwqoq: } ykiyuciecskusaae: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\x61\x66\x74\145\x72\137\143\154\x65\x61\x6e\x5f\146\151\x6c\x65\x73"), $auwuoyyagaiegwae); mioqycmmeucswoms: } public function ciyymuaoqiqmucei($swaukaagekiououo = '') { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks(ManipulateI18N::csacaukgwwayassy($swaukaagekiououo)); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $couygeouymagssgw = $mkomwsiykqigmqca . $mgoiyiawsmmgasic["\x68\x6f\163\x74"] . "\52" . untrailingslashit($mgoiyiawsmmgasic["\x70\141\164\x68"]); $couygeouymagssgw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\x63\154\145\x61\156\137\150\x6f\155\x65\137\162\157\x6f\x74"), $couygeouymagssgw, $mgoiyiawsmmgasic["\150\157\163\x74"], $mgoiyiawsmmgasic["\160\141\164\x68"]); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\142\145\x66\157\162\145\x5f\143\x6c\145\141\156\137\150\x6f\x6d\x65"), $couygeouymagssgw, $swaukaagekiououo); $ucasskoyoewwmmii = glob($couygeouymagssgw . "\x2f\173\151\156\x64\145\170\x2c\x69\156\x64\x65\x78\55\x2a\175\56\x7b\x68\164\x6d\x6c\54\x68\x74\x6d\154\137\x67\172\151\x70\x7d", GLOB_BRACE | GLOB_NOSORT); if (!$ucasskoyoewwmmii) { goto kisuswmyqsocukgk; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $this->kcciqwskewsuaemk()->remove($qogsmwakwacwqogk); gimsiyauegmikyka: } kuymgsewmeoimeuq: kisuswmyqsocukgk: global $wp_rewrite; $qmwoqyacswkwkiog = glob($couygeouymagssgw . "\x2a\x2f" . $wp_rewrite->pagination_base, GLOB_NOSORT); if (!$qmwoqyacswkwkiog) { goto emqmqkeygumaasam; } foreach ($qmwoqyacswkwkiog as $miawkwqioaeasiig) { ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); aosasoogesueygak: } wisaekiyyweeemuy: emqmqkeygumaasam: $lgqgmusqcgekwgui = glob($couygeouymagssgw . "\57\56\x6d\157\142\151\x6c\145\55\141\143\164\x69\166\145", GLOB_BRACE | GLOB_NOSORT); if (!$lgqgmusqcgekwgui) { goto asueqykmkoaimguq; } foreach ($lgqgmusqcgekwgui as $eagqciqqakiuokus) { $this->kcciqwskewsuaemk()->remove($eagqciqqakiuokus); scccyaiaggeasgqg: } meegaqaesckqmyec: asueqykmkoaimguq: $okyqgikguumqkcas = glob($couygeouymagssgw . "\57\x2e\x6e\157\x2d\x77\x65\142\160", GLOB_BRACE | GLOB_NOSORT); if (!$okyqgikguumqkcas) { goto kcwyeqmysgqkoqcm; } foreach ($okyqgikguumqkcas as $kaggcuumyeuscqui) { $this->kcciqwskewsuaemk()->remove($kaggcuumyeuscqui); isaouwiaamimceeg: } iyocimuyeemkaaso: kcwyeqmysgqkoqcm: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137\141\x66\x74\145\162\x5f\x63\154\x65\x61\156\137\150\157\155\x65"), $couygeouymagssgw, $swaukaagekiououo); oaseseemoaqcgqeu: } mioaoacqueiyueak: } public function uqigacqieikayuac() { $auwuoyyagaiegwae = []; $auwuoyyagaiegwae[] = get_feed_link(); $auwuoyyagaiegwae[] = get_feed_link("\x63\x6f\155\x6d\145\156\x74\163\x5f"); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\143\154\x65\141\156\x5f\150\157\x6d\145\137\x66\145\145\x64\163"), $auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x62\x65\146\157\x72\x65\137\143\154\x65\x61\x6e\137\150\157\155\145\x5f\x66\145\x65\x64\x73"), $auwuoyyagaiegwae); self::wckuqskowgoaoqom($auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\137\x61\x66\x74\145\x72\137\x63\154\x65\141\156\137\x68\157\155\145\x5f\146\x65\x65\x64\x73"), $auwuoyyagaiegwae); } public function suiuswewcumcyqms($mceokigoiqekskwe, $uemuuqsgymiqyuuu) { $owwcaiyoucwcwmmq = []; $iwewcwusemqaiggk = DecoratorTerm::woimamkkeyoyauoa("\151\144", $mceokigoiqekskwe, $uemuuqsgymiqyuuu); $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); if ("\x77\160\x6d\154" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\167\x6f\157\143\x6f\155\155\145\x72\143\x65\x2d\155\x75\154\164\x69\154\151\x6e\147\x75\141\x6c\x2f\167\x70\x6d\x6c\x2d\x77\157\x6f\143\157\155\x6d\x65\x72\143\x65\56\x70\150\160")) { goto ugowqoisymsioeye; } if ("\x70\x6f\x6c\171\x6c\x61\x6e\147" === $eokyomeiuimoaiac && function_exists("\160\x6c\154\137\x67\145\164\x5f\x74\145\162\x6d\x5f\x6c\141\156\x67\165\141\x67\x65")) { goto wamgcqkaieummksu; } $swaukaagekiououo = false; goto mwgaaiaswusakkaq; wamgcqkaieummksu: $swaukaagekiououo = pll_get_term_language($mceokigoiqekskwe); mwgaaiaswusakkaq: goto gooqkmwgsmseuiwq; ugowqoisymsioeye: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($mceokigoiqekskwe, "\164\x61\170\137" . $uemuuqsgymiqyuuu); gooqkmwgsmseuiwq: $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $uemuuqsgymiqyuuu); if (!("\x2f" !== $this->eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH))) { goto oeosugomyqyekmuq; } $owwcaiyoucwcwmmq[] = $migiiksoiymissge; oeosugomyqyekmuq: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x62\x65\146\x6f\x72\145\x5f\143\x6c\145\x61\156\x5f\x74\x65\x72\x6d"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\164\145\x72\x6d\x5f\160\165\x72\x67\145\137\165\x72\154\163"), $owwcaiyoucwcwmmq, $iwewcwusemqaiggk); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x61\x66\x74\145\x72\137\143\154\145\x61\156\137\164\145\162\155"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); } public function eyayuwiqsqsmkamc(?string $eeamcawaiqocomwy, ?string $wksoawcgagcgoask) { return _get_component_from_parsed_url_array(ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy), $wksoawcgagcgoask); } }
