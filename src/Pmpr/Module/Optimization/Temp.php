<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf2522bd2c4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Exception; use FilesystemIterator; use IteratorIterator; use RegexIterator; use WP_Post; use WP_Taxonomy; use WP_Term; use WP_Upgrader; abstract class Temp extends Container { protected ?string $id = null; protected $paths; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x73\167\151\x74\x63\x68\x5f\164\x68\x65\155\145", [$this, "\x77\x65\151\153\x6b\171\151\x71\157\x6f\147\x6b\x6f\171\143\x65"])->qcsmikeggeemccuu("\x70\x72\x65\x5f\160\x6f\x73\164\137\x75\160\x64\141\164\x65", [$this, "\141\165\167\161\171\x67\155\x77\167\151\x75\x67\x63\151\x65\145"], 2)->qcsmikeggeemccuu("\x75\x70\x67\162\x61\x64\x65\x72\137\x70\x72\x6f\x63\x65\163\x73\x5f\x63\x6f\155\160\154\x65\x74\x65", [$this, "\153\x6f\x6f\143\x75\x79\151\x79\x69\151\145\x75\x61\153\155\155"], 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\164\x5f\x70\165\162\x67\x65\x5f\143\141\143\x68\145\x5f\146\x69\x6c\145\163"), [$this, "\167\145\151\x6b\x6b\171\x69\x71\x6f\x6f\x67\x6b\x6f\x79\x63\145"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\164\x5f\x61\x66\164\x65\162\x5f\143\x6c\145\141\x6e\x5f\160\157\x73\164"), [$this, "\x71\141\x67\155\167\x77\155\x71\151\151\x63\141\171\141\x71\x67"])->qcsmikeggeemccuu("\x63\x6f\x6d\155\x65\x6e\x74\137\160\157\163\x74", [$this, "\155\155\145\151\165\171\165\147\145\x65\x6b\x6f\161\167\x63\x73"], 2, 99)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\x74\x5f{$this->mwikyscisascoeea()}\x5f\143\154\x65\141\156\x5f\x64\x6f\x6d\x61\151\x6e"), [$this, "\x77\x65\x69\x6b\153\171\x69\161\157\157\147\x6b\x6f\x79\143\x65"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x63\x6c\x65\x61\156\137\x66\151\x6c\145\x73"), [$this, "\x69\155\157\167\141\x6d\151\167\x65\145\153\171\x67\157\143\x6d"]); if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto ugqaaewwmkocwwgy; } $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\160\x75\142\154\151\x63" => true, "\x70\x75\x62\x6c\151\143\x6c\x79\137\x71\165\145\x72\171\141\142\x6c\x65" => true, self::aisguagukaewucii => self::emgcgiseaoouacge]); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $this->cecaguuoecmccuse("{$kesssewsiegssiya}\137\162\157\167\137\x61\143\164\x69\157\156\x73", [$this, "\167\x73\x71\171\x73\x79\141\x77\x77\167\147\147\147\x6f\x77\x63"], 2); omqiayeucoioqoao: } igooksugieceoege: ugqaaewwmkocwwgy: parent::kgquecmsgcouyaya(); } public function mmeiuyugeekoqwcs($aqqmosqmsuueyaes, $swyywyqesisooayc) { $post = ManipulateComment::ayueggmoqeeukqmq($aqqmosqmsuueyaes); if (!$post) { goto wgewmqieuamsoayy; } $this->ekcemquyyiqykmoo(ManipulatePost::mwikyscisascoeea($post)); wgewmqieuamsoayy: } public function mwikyscisascoeea() : string { return $this->id; } public function iwqysmawycmsmces() : array { $oegoegssokkyiqam = $this->paths; if (!is_string($oegoegssokkyiqam)) { goto kqgcyoscsusgoaqi; } $oegoegssokkyiqam = [$oegoegssokkyiqam]; kqgcyoscsusgoaqi: return $oegoegssokkyiqam; } public function auwqygmwwiugciee($yekqqesogweecqyc, $icwicymcioeyeyek) { $post = ManipulatePost::get($yekqqesogweecqyc); if (!($post && "\x70\165\142\154\x69\x73\150" === ManipulatePost::ucwmcwqmqwaymkkc($post))) { goto ueigkucgaucgeimc; } $swaukaagekiououo = ManipulateI18N::emqmaiomewcmuacu($yekqqesogweecqyc); $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $owwcaiyoucwcwmmq = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\160\x6f\163\164\x5f\x70\x75\162\x67\145\137\x75\162\154\163"), $owwcaiyoucwcwmmq, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\137\142\145\146\157\x72\145\137\143\154\145\141\156\x5f\x70\157\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f\141\x66\164\x65\162\x5f\x63\x6c\x65\x61\156\137\x70\157\x73\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f{$this->mwikyscisascoeea()}\x5f\x61\x66\164\x65\x72\x5f\x63\x6c\x65\141\156\137\x70\157\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); ueigkucgaucgeimc: } public function imowamiweekygocm(array $auwuoyyagaiegwae = []) { $iaceaqwggsgmasqe = []; foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iaceaqwggsgmasqe[] = $mgoiyiawsmmgasic["\x73\x63\150\x65\x6d\145"] . "\72\x2f\x2f" . $mgoiyiawsmmgasic["\150\157\x73\164"] . "\52" . $mgoiyiawsmmgasic["\x70\141\164\x68"]; wkeuuycukmuqiaom: } sggawugoykqcmsug: return $iaceaqwggsgmasqe; } public function koocuyiyiieuakmm($kkkswwyyaoeysaio, $iaakskwmyqceoscy) { if (!("\x75\160\144\x61\164\145" === $iaakskwmyqceoscy["\141\143\x74\151\x6f\x6e"])) { goto mwsmsguqqkcwiiuk; } if (!("\x74\x68\145\x6d\x65" === $iaakskwmyqceoscy["\x74\171\160\x65"])) { goto owmuceyswmgueasi; } if (!is_array($iaakskwmyqceoscy["\164\150\145\x6d\145\x73"])) { goto qmuwoecuacmkwgem; } $current_theme = wp_get_theme(); $sgmuqamasucuikqa = [ $current_theme->get_template(), $current_theme->get_stylesheet(), ]; if (!array_intersect($iaakskwmyqceoscy["\164\x68\x65\x6d\145\x73"], $sgmuqamasucuikqa)) { goto wakmayaoqoskekqy; } $this->weikkyiqoogkoyce(); wakmayaoqoskekqy: qmuwoecuacmkwgem: owmuceyswmgueasi: mwsmsguqqkcwiiuk: } public function eugcsqcwkqseakoe($mceokigoiqekskwe, $gywkakmagykqkiei, $kesssewsiegssiya) { if (!ManipulateTaxonomy::cekoogweeooasayu($kesssewsiegssiya)) { goto eeauyscekuckoues; } $this->weikkyiqoogkoyce(); eeauyscekuckoues: } private function wgokqcqsmcqsiiue($miawkwqioaeasiig) { if (!$this->kcciqwskewsuaemk()->asysewkmisimumay($miawkwqioaeasiig)) { goto eogwckcymuugikuy; } ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); eogwckcymuugikuy: } private function qeoaoiweucueeuqu(string $eeamcawaiqocomwy, $ymiyawysimukkoso = false) { global $wp_rewrite; $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\150\157\x73\x74"]) as $miawkwqioaeasiig) { $mkomwsiykqigmqca = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\141\x74\x68"]; if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto ciykoyeioqgyaeqo; } foreach (ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca) as $igqsaukqcqscimok) { if (!ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok)) { goto wcugqegqsuuuwqao; } $this->kcciqwskewsuaemk()->remove(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok)); wcugqegqsuuuwqao: iwsuawwqomaowuii: } qoqskyuuwueqkquk: if (!$ymiyawysimukkoso) { goto asiqwuoswmigcaki; } $this->wgokqcqsmcqsiiue(trailingslashit($mkomwsiykqigmqca) . $wp_rewrite->pagination_base); asiqwuoswmigcaki: ciykoyeioqgyaeqo: wagqgeqymeqoeuyi: } msemumccgceyugmg: } public function gqguucgwsqasamke($qcqaayguacmuykwi, $mkomwsiykqigmqca = '', $iuomscuiswckwcoe = false) { if (!$mkomwsiykqigmqca) { goto emmsycooskoqmgeg; } if (!is_array($mkomwsiykqigmqca)) { goto mqicocmqegwukkwg; } $oegoegssokkyiqam = $mkomwsiykqigmqca; goto qgeugwymkkiacwoc; mqicocmqegwukkwg: $oegoegssokkyiqam = [$mkomwsiykqigmqca]; qgeugwymkkiacwoc: goto ouamogymawucwswu; emmsycooskoqmgeg: $oegoegssokkyiqam = $this->iwqysmawycmsmces(); ouamogymawucwswu: if (isset($eewgemuwouukmwgk[$qcqaayguacmuykwi])) { goto wyuemgggaqogsmsq; } $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca = trailingslashit($mkomwsiykqigmqca); try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($mkomwsiykqigmqca)); } catch (Exception $iewosgggaueeyymg) { return []; } $ucccueqywigcukcc = sprintf("\x2f\45\61\x24\x73\x25\x32\44\163\50\56\x2a\51\x2f\x69", ManipulateFile::cgwcgscqeqauaagi($mkomwsiykqigmqca, true), $qcqaayguacmuykwi); try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$qcqaayguacmuykwi][] = ManipulateFile::scikcaaaiwcsqowm($uwsgakoiqomwikmy); samwkqgwouggsguc: } oomguqikqokqwgku: } catch (Exception $iewosgggaueeyymg) { $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; } acsqgiuageaasiyy: } mugqyyeayeyggqqk: wyuemgggaqogsmsq: return $eewgemuwouukmwgk[$qcqaayguacmuykwi]; } public function qagmwwmqiicayaqg(WP_Post $post) { foreach ($this->soycogqiiekoekgq($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy); kkumywowcoycymeo: } guykyqecgswcsmws: } public function wsqysyawwwgggowc($ccowyogiqwikkkie, $iwewcwusemqaiggk) { if (!DecoratorUser::scmcyesmmikkucie()) { goto miweggwqeiaeweia; } $eeamcawaiqocomwy = wp_nonce_url(ManipulateServer::oiucukewkckkwiqc("\141\144\155\x69\156\x2d\160\157\163\x74\56\x70\150\x70\77\141\x63\x74\151\157\156\x3d\157\160\164\151\x6d\x69\x7a\141\164\x69\157\x6e\137\160\165\x72\x67\145\x5f{$this->mwikyscisascoeea()}\46\164\171\x70\145\x3d\164\145\x72\155\x2d{$iwewcwusemqaiggk->term_id}\46\x74\141\x78\157\156\x6f\155\171\75{$iwewcwusemqaiggk->taxonomy}"), "\157\x70\164\x69\x6d\x69\x7a\141\x74\151\157\156\x5f\x70\x75\x72\147\145\137{$this->mwikyscisascoeea()}\137\164\145\x72\155\x2d{$iwewcwusemqaiggk->term_id}"); $ccowyogiqwikkkie["\x6f\160\164\x69\x6d\151\x7a\141\x74\x69\157\156\137\160\165\x72\x67\145\137{$this->mwikyscisascoeea()}"] = ManipulateHTML::yuawgssgauywkiia(sprintf(__("\103\154\x65\x61\x72\40\164\150\151\163\40\x25\x73", PR__MDL__OPTIMIZATION), $this->mwikyscisascoeea()), $eeamcawaiqocomwy); miweggwqeiaeweia: return $ccowyogiqwikkkie; } private function wgkqeyqiyacgqeso($post) { $cqgoimumaewouews = get_the_time("\x59\55\x6d\x2d\144", $post); $auwuoyyagaiegwae = []; if (!$cqgoimumaewouews) { goto kqqiegkuqagcqsya; } $ocogsiouoiuuguym = explode("\x2d", $cqgoimumaewouews); $auwuoyyagaiegwae = [get_year_link($ocogsiouoiuuguym[0]), get_month_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1]), get_day_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1], $ocogsiouoiuuguym[2])]; $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\160\x6f\163\x74\x5f\x64\141\164\x65\x73\x5f\165\162\154\163"), $auwuoyyagaiegwae); kqqiegkuqagcqsya: return $auwuoyyagaiegwae; } public function yeimaqssyuewkcgm($post) { foreach ($this->wgkqeyqiyacgqeso($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy, true); ogsaaqsaogcqiouy: } ousiuuwgwkiyikyq: } private function soycogqiiekoekgq(WP_Post $post) { $auwuoyyagaiegwae = []; $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs($post, self::ckmqoekmugkggeym); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!($kesssewsiegssiya instanceof WP_Taxonomy && $kesssewsiegssiya->public && "\x70\x72\157\x64\165\143\x74\x5f\163\x68\151\160\x70\151\x6e\x67\137\143\154\141\163\x73" === $kesssewsiegssiya->name)) { goto uiosisocuwokwkie; } $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $kesssewsiegssiya); if (!$uyuaosigqymaqsaa) { goto iikiiioqiyegyaak; } foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); if (!$migiiksoiymissge) { goto awoaooyoeoyeeqee; } $auwuoyyagaiegwae[] = $migiiksoiymissge; awoaooyoeoyeeqee: if (!ManipulateTaxonomy::aewcsqigycuaekym($kesssewsiegssiya)) { goto gicyayswqyuoekcq; } $mogoquygwgkamaaw = (array) get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya); foreach ($mogoquygwgkamaaw as $aqguqemekkmogkee) { $uasmmsomeawcggee = ManipulateTerm::get($aqguqemekkmogkee, $kesssewsiegssiya); if (!$uasmmsomeawcggee) { goto kosaqwikueyksqmw; } $yaycyieqogmsoamk = ManipulateTerm::qmgcisuuikgmqcsu($uasmmsomeawcggee, $kesssewsiegssiya); if (!$yaycyieqogmsoamk) { goto mqkmcysgoiaouiwm; } $auwuoyyagaiegwae[] = $yaycyieqogmsoamk; mqkmcysgoiaouiwm: kosaqwikueyksqmw: ykomgumacooyomsk: } ogqmesokykywseys: gicyayswqyuoekcq: cwwmimggaaecmucw: } aomysykcgikegiau: iikiiioqiyegyaak: uiosisocuwokwkie: ikqqskkqqwmwssoo: } iwekmyyccgiyuecc: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x70\x6f\163\164\x5f\164\x65\x72\155\163\x5f\x75\x72\x6c\163"), $auwuoyyagaiegwae); } public function weikkyiqoogkoyce($swaukaagekiououo = '') { $auwuoyyagaiegwae = !$swaukaagekiououo || is_object($swaukaagekiououo) || is_array($swaukaagekiououo) || is_int($swaukaagekiououo) ? (array) ManipulateI18N::kmmygsqekuksyeuy() : (array) ManipulateI18N::smickumaawgqkmco($swaukaagekiououo); $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\143\x6c\145\x61\x6e\137\x64\157\x6d\141\151\156\x5f\x75\162\x6c\163"), $auwuoyyagaiegwae, $swaukaagekiououo); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); if (!($auwuoyyagaiegwae && $oegoegssokkyiqam)) { goto uaukmuiwskcemcsw; } foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $gwyacgiwokuuwouo = ManipulateI18N::augqukusksqwwuus($swaukaagekiououo, $mkomwsiykqigmqca); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $couygeouymagssgw = $mkomwsiykqigmqca . $msimssikcguyqcac["\150\x6f\163\164"] . $msimssikcguyqcac["\x70\141\x74\150"]; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x62\x65\x66\157\x72\x65\x5f\143\x6c\x65\x61\x6e\x5f\x64\157\155\x61\151\x6e"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\157\163\164"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\x61\x74\150"]; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto ugqwuugsweqgmywk; } if ($iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto cogywoqcqummsyus; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); goto gmwykkouysyaqwqm; cogywoqcqummsyus: ManipulateFile::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); gmwykkouysyaqwqm: ugqwuugsweqgmywk: eekcoeikaeaaeyii: } ocaguquugeamqckq: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\141\x66\164\x65\x72\137\x63\x6c\145\x61\156\137\x64\157\x6d\141\151\x6e"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); csammceowmqwaamq: } qmkaeeomgkwggoyo: gcckqucukawcasgk: } cuumeogeomowqisc: uaukmuiwskcemcsw: } public function skomiaywsggiyamc($aokagokqyuysuksm, $post) { $auwuoyyagaiegwae = []; $mqqisesagsuooios = Manipulate::yygaymuiikwoakuc($aokagokqyuysuksm); $migiiksoiymissge = str_replace(["\45\160\x6f\x73\164\156\141\155\x65\x25", "\x25\160\141\x67\145\156\141\x6d\x65\x25"], $mqqisesagsuooios[1], $mqqisesagsuooios[0]); if (!($this->eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH) !== "\57")) { goto sockeswygwcskeuq; } $auwuoyyagaiegwae[] = $migiiksoiymissge; sockeswygwcskeuq: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $myyccyuumcscsagc = ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg); if (!$myyccyuumcscsagc) { goto mkwkkmkgiqiamacc; } global $wp_rewrite; $auwuoyyagaiegwae[] = $myyccyuumcscsagc; $auwuoyyagaiegwae[] = $myyccyuumcscsagc . "{$wp_rewrite->pagination_base}"; mkwkkmkgiqiamacc: $dokeeoamkysymmqw = []; if (!$dokeeoamkysymmqw) { goto kqswcsysqawkcgye; } global $blog_id; $uogwqioiiwqsyksu = DecoratorOption::get("\150\x6f\155\x65"); if (!(!empty($blog_id) && ManipulateServer::gsaomcwyacqcumaa())) { goto uaqackioaiqwcocy; } switch_to_blog($blog_id); $uogwqioiiwqsyksu = DecoratorOption::get("\x68\x6f\x6d\145"); restore_current_blog(); uaqackioaiqwcocy: $scyimseukcmieyuw = ManipulateFormat::kcwgwosqkkkkmuks($uogwqioiiwqsyksu); $uogwqioiiwqsyksu = "{$scyimseukcmieyuw["\163\143\x68\x65\155\145"]}\72\57\57{$scyimseukcmieyuw["\x68\157\163\164"]}"; $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca .= $scyimseukcmieyuw["\x68\x6f\x73\164"]; foreach ($dokeeoamkysymmqw as $suaemuyiacqyugsm) { if (!strstr($suaemuyiacqyugsm, "\52")) { goto ewscugeuicukkycc; } $meyiiwcswqmuggyg = ManipulateFile::qawkooaucwoseaia($mkomwsiykqigmqca, "\x23" . $suaemuyiacqyugsm . "\43\x69"); foreach ($meyiiwcswqmuggyg as $qogsmwakwacwqogk) { $auwuoyyagaiegwae[] = str_replace($mkomwsiykqigmqca, untrailingslashit($uogwqioiiwqsyksu), $qogsmwakwacwqogk->amqagusacuuuaswg()); eeyyskqsmquyquqw: } cgyakcqgugqgkqiw: goto uegouoiuyoqkcscg; ewscugeuicukkycc: $auwuoyyagaiegwae[] = trailingslashit($uogwqioiiwqsyksu) . $suaemuyiacqyugsm; uegouoiuyoqkcscg: } mggeqkcksyaymcsa: isgwkwacoyimiauk: } cscusseysqygsoiy: kqswcsysqawkcgye: $auwuoyyagaiegwae[] = ManipulatePost::ocigkomwiuwmmkks($post); $eyagosskwwmgwmog = DecoratorPost::iimmeiugygssweyc($aokagokqyuysuksm); if (!(bool) $eyagosskwwmgwmog) { goto ukkcmocamwgiqayu; } foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) { $auwuoyyagaiegwae[] = ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom); iiiccouaaqsyikae: } wusciwkkckmqigms: ukkcmocamwgiqayu: return array_flip(array_flip($auwuoyyagaiegwae)); } public function ekcemquyyiqykmoo(?string $yekqqesogweecqyc) { static $gqiuywqwmiieqcww = []; if (isset($gqiuywqwmiieqcww[$yekqqesogweecqyc])) { goto ucqmumuygcywwqma; } $gqiuywqwmiieqcww[$yekqqesogweecqyc] = 1; if (defined("\104\117\111\x4e\107\137\101\125\x54\x4f\x53\101\126\x45")) { goto ukqocwewouckikso; } $post = ManipulatePost::get($yekqqesogweecqyc); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); if (!($post && $useksmwkuswkwcqg && !in_array($useksmwkuswkwcqg, ["\141\164\164\x61\x63\150\155\145\x6e\164", "\156\x61\166\x5f\155\145\156\x75\x5f\x69\x74\x65\155"]) && !in_array($post->post_status, ["\144\162\x61\x66\x74", "\x61\165\164\157\x2d\x64\162\141\146\x74"]))) { goto gommacygsykyussk; } if (!ManipulatePost::qeosassuekcieuuy($useksmwkuswkwcqg)) { goto uougwgeyiokewkkm; } $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); $swaukaagekiououo = false; if ("\167\x70\x6d\x6c" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\x6f\157\143\157\x6d\x6d\x65\x72\x63\x65\55\155\165\x6c\x74\x69\154\151\x6e\147\x75\141\x6c\x2f\x77\x70\x6d\154\55\167\157\157\x63\x6f\155\x6d\145\x72\x63\145\x2e\x70\150\x70")) { goto amgsueumgaguceaa; } if (!("\x70\x6f\x6c\x79\154\141\x6e\x67" === $eokyomeiuimoaiac && function_exists("\160\x6c\x6c\x5f\x67\145\164\x5f\160\x6f\x73\164\137\x6c\141\x6e\x67\165\x61\147\145"))) { goto mwysseaekcsiesmm; } $swaukaagekiououo = pll_get_post_language($yekqqesogweecqyc); mwysseaekcsiesmm: goto gygwewcqsmwqismo; amgsueumgaguceaa: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($yekqqesogweecqyc, "\x70\x6f\163\x74\x5f" . $useksmwkuswkwcqg); gygwewcqsmwqismo: $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\142\145\146\x6f\162\x65\137\143\154\145\x61\156\137\160\x6f\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\x5f\x70\157\x73\x74\x5f\160\x75\162\147\145\137\x75\162\x6c\x73"), $owwcaiyoucwcwmmq, $post); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f\141\146\164\145\162\137\143\x6c\x65\x61\156\137\x70\157\x73\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); uougwgeyiokewkkm: gommacygsykyussk: ukqocwewouckikso: ucqmumuygcywwqma: } public function wckuqskowgoaoqom($auwuoyyagaiegwae) { $auwuoyyagaiegwae = array_filter((array) $auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto yiowgigkkwsoqcci; } $oegoegssokkyiqam = $this->iwqysmawycmsmces(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\x62\x65\146\157\162\145\137\143\154\145\141\156\137\x66\x69\x6c\x65\x73"), $auwuoyyagaiegwae); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\142\x65\146\157\x72\145\x5f\143\154\145\141\156\137\x66\x69\x6c\x65"), $eeamcawaiqocomwy); $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\157\163\164"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\x61\164\150"]; if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto sioekkmekwygemyc; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); sioekkmekwygemyc: qukocuwgakemmyga: } uqokiksoqcwwqgio: kocqqoyymosmuksu: } iuuuususuuuaieem: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\141\x66\164\x65\162\137\x63\x6c\x65\141\156\137\x66\x69\x6c\145"), $eeamcawaiqocomwy); uimeeckqksqeekqq: } uykousayyomcaeaa: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x61\x66\x74\145\162\137\x63\x6c\145\141\x6e\137\146\x69\x6c\x65\163"), $auwuoyyagaiegwae); yiowgigkkwsoqcci: } public function ciyymuaoqiqmucei($swaukaagekiououo = '') { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks(ManipulateI18N::csacaukgwwayassy($swaukaagekiououo)); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $couygeouymagssgw = $mkomwsiykqigmqca . $mgoiyiawsmmgasic["\150\157\x73\164"] . "\x2a" . untrailingslashit($mgoiyiawsmmgasic["\x70\141\164\150"]); $couygeouymagssgw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\x63\x6c\x65\x61\x6e\x5f\150\x6f\x6d\145\137\x72\157\x6f\x74"), $couygeouymagssgw, $mgoiyiawsmmgasic["\150\157\163\164"], $mgoiyiawsmmgasic["\x70\141\x74\x68"]); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x62\x65\x66\x6f\x72\145\x5f\143\154\145\141\156\x5f\150\x6f\x6d\145"), $couygeouymagssgw, $swaukaagekiououo); $ucasskoyoewwmmii = glob($couygeouymagssgw . "\x2f\173\x69\x6e\144\x65\x78\x2c\151\x6e\x64\x65\170\55\52\x7d\x2e\173\150\164\x6d\x6c\x2c\x68\164\155\x6c\137\x67\x7a\x69\x70\175", GLOB_BRACE | GLOB_NOSORT); if (!$ucasskoyoewwmmii) { goto iesekaeqeomeuaui; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $this->kcciqwskewsuaemk()->remove($qogsmwakwacwqogk); oyeyomcgkmgymogq: } mscyggqcesgqqksu: iesekaeqeomeuaui: global $wp_rewrite; $qmwoqyacswkwkiog = glob($couygeouymagssgw . "\52\x2f" . $wp_rewrite->pagination_base, GLOB_NOSORT); if (!$qmwoqyacswkwkiog) { goto wkwamkgkwykeqkec; } foreach ($qmwoqyacswkwkiog as $miawkwqioaeasiig) { ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); mogkoocsoeuyoqqa: } wsesqmcqoiyyqkqi: wkwamkgkwykeqkec: $lgqgmusqcgekwgui = glob($couygeouymagssgw . "\57\x2e\155\157\x62\151\x6c\145\x2d\x61\143\164\x69\166\x65", GLOB_BRACE | GLOB_NOSORT); if (!$lgqgmusqcgekwgui) { goto suqceasgacskcmkc; } foreach ($lgqgmusqcgekwgui as $eagqciqqakiuokus) { $this->kcciqwskewsuaemk()->remove($eagqciqqakiuokus); oeocukauoyosicso: } oimkeqocuguqqsqk: suqceasgacskcmkc: $okyqgikguumqkcas = glob($couygeouymagssgw . "\57\56\x6e\157\x2d\x77\145\142\x70", GLOB_BRACE | GLOB_NOSORT); if (!$okyqgikguumqkcas) { goto uckewycoogsogwiy; } foreach ($okyqgikguumqkcas as $kaggcuumyeuscqui) { $this->kcciqwskewsuaemk()->remove($kaggcuumyeuscqui); kwiggogcgciwuwqk: } yykqaowwsqgqysmq: uckewycoogsogwiy: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\x5f\x61\x66\164\145\x72\137\143\x6c\145\x61\156\x5f\150\157\155\145"), $couygeouymagssgw, $swaukaagekiououo); gamqcwuwkikwqoay: } ieqesiiageaauiuw: } public function uqigacqieikayuac() { $auwuoyyagaiegwae = []; $auwuoyyagaiegwae[] = get_feed_link(); $auwuoyyagaiegwae[] = get_feed_link("\143\x6f\155\155\145\156\164\x73\137"); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\137\143\154\145\141\x6e\x5f\150\x6f\x6d\145\137\146\145\145\x64\x73"), $auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\137\142\145\146\157\x72\145\x5f\143\x6c\x65\x61\156\137\x68\157\155\x65\x5f\146\145\x65\144\x73"), $auwuoyyagaiegwae); self::wckuqskowgoaoqom($auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137\141\146\164\145\x72\x5f\x63\x6c\x65\141\156\137\150\157\x6d\145\137\146\145\x65\x64\x73"), $auwuoyyagaiegwae); } public function suiuswewcumcyqms($mceokigoiqekskwe, $uemuuqsgymiqyuuu) { $owwcaiyoucwcwmmq = []; $iwewcwusemqaiggk = DecoratorTerm::woimamkkeyoyauoa("\151\x64", $mceokigoiqekskwe, $uemuuqsgymiqyuuu); $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); if ("\x77\x70\x6d\x6c" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\x6f\x6f\143\157\155\155\145\162\x63\145\x2d\x6d\165\x6c\164\x69\154\x69\156\147\165\141\x6c\x2f\x77\160\155\154\55\167\157\x6f\x63\x6f\x6d\155\145\162\x63\x65\56\x70\x68\160")) { goto gswcoeiisamakwii; } if ("\160\x6f\154\x79\154\x61\x6e\x67" === $eokyomeiuimoaiac && function_exists("\160\154\x6c\137\x67\x65\x74\137\164\x65\162\x6d\x5f\x6c\141\x6e\147\x75\x61\x67\145")) { goto ikuuiauwouuqawuw; } $swaukaagekiououo = false; goto yoqakewookqoqacm; ikuuiauwouuqawuw: $swaukaagekiououo = pll_get_term_language($mceokigoiqekskwe); yoqakewookqoqacm: goto yuimwyoywaiiqacs; gswcoeiisamakwii: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($mceokigoiqekskwe, "\164\x61\170\137" . $uemuuqsgymiqyuuu); yuimwyoywaiiqacs: $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $uemuuqsgymiqyuuu); if (!("\x2f" !== $this->eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH))) { goto ocywegekakimmwcq; } $owwcaiyoucwcwmmq[] = $migiiksoiymissge; ocywegekakimmwcq: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\137\x62\145\146\157\x72\145\137\x63\x6c\x65\141\156\x5f\x74\145\162\155"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\164\145\162\155\x5f\160\165\162\147\145\137\165\162\x6c\x73"), $owwcaiyoucwcwmmq, $iwewcwusemqaiggk); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\x61\x66\x74\145\162\137\x63\x6c\x65\x61\156\x5f\x74\145\x72\155"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); } public function eyayuwiqsqsmkamc(?string $eeamcawaiqocomwy, ?string $wksoawcgagcgoask) { return _get_component_from_parsed_url_array(ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy), $wksoawcgagcgoask); } }
