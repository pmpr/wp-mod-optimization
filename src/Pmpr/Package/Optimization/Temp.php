<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c342aab9e69             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Package\Optimization\Manipulate\Manipulate; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Exception; use FilesystemIterator; use IteratorIterator; use RegexIterator; use WP_Post; use WP_Taxonomy; use WP_Term; use WP_Upgrader; abstract class Temp extends Container { protected ?string $id = null; protected $paths; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\163\167\151\164\143\150\137\x74\x68\x65\x6d\145", [$this, "\x77\x65\151\x6b\x6b\x79\x69\161\157\157\x67\x6b\x6f\171\143\145"])->qcsmikeggeemccuu("\160\x72\145\137\160\x6f\x73\164\x5f\x75\x70\x64\x61\164\145", [$this, "\141\x75\x77\161\x79\147\155\x77\167\x69\165\147\x63\151\145\145"], 2)->qcsmikeggeemccuu("\x75\160\147\x72\141\x64\145\162\137\x70\162\157\143\x65\163\163\137\143\x6f\x6d\x70\154\x65\164\145", [$this, "\153\x6f\x6f\143\165\171\x69\x79\x69\151\x65\x75\x61\x6b\155\155"], 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\x74\x5f\160\x75\162\147\x65\x5f\x63\x61\x63\x68\145\137\146\x69\154\145\163"), [$this, "\x77\x65\x69\x6b\x6b\171\x69\x71\157\157\147\153\x6f\171\x63\145"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\x74\137\141\x66\164\x65\x72\x5f\x63\154\x65\x61\156\137\160\x6f\163\x74"), [$this, "\x71\141\x67\x6d\167\x77\x6d\161\151\x69\x63\x61\171\141\161\x67"])->qcsmikeggeemccuu("\x63\x6f\155\155\145\156\164\x5f\x70\x6f\x73\164", [$this, "\155\155\x65\151\x75\171\165\147\145\145\153\x6f\x71\167\143\163"], 2, 99)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\164\137{$this->mwikyscisascoeea()}\137\143\154\145\141\156\x5f\144\157\x6d\141\151\x6e"), [$this, "\167\x65\151\x6b\153\x79\x69\161\157\157\x67\153\157\171\x63\145"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\137\x63\x6c\145\141\156\137\x66\x69\154\x65\163"), [$this, "\x69\155\157\x77\141\155\151\x77\x65\x65\153\x79\147\x6f\143\155"]); if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto smcguieygyqcaqgs; } $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\160\165\x62\x6c\x69\143" => true, "\160\165\x62\x6c\x69\x63\154\171\137\x71\165\x65\x72\171\141\x62\x6c\x65" => true, self::aisguagukaewucii => self::emgcgiseaoouacge]); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $this->cecaguuoecmccuse("{$kesssewsiegssiya}\137\x72\157\167\x5f\141\x63\164\x69\157\156\x73", [$this, "\167\x73\161\x79\163\x79\141\167\167\167\147\x67\x67\157\167\x63"], 2); wmumywgyyeagqoeq: } mmgmqogugasaqkgg: smcguieygyqcaqgs: parent::kgquecmsgcouyaya(); } public function mmeiuyugeekoqwcs($aqqmosqmsuueyaes, $swyywyqesisooayc) { $post = ManipulateComment::ayueggmoqeeukqmq($aqqmosqmsuueyaes); if (!$post) { goto mgcuiguaomoqwwwm; } $this->ekcemquyyiqykmoo(ManipulatePost::mwikyscisascoeea($post)); mgcuiguaomoqwwwm: } public function mwikyscisascoeea() : string { return $this->id; } public function iwqysmawycmsmces() : array { $oegoegssokkyiqam = $this->paths; if (!is_string($oegoegssokkyiqam)) { goto eoyiumycaigawmmc; } $oegoegssokkyiqam = [$oegoegssokkyiqam]; eoyiumycaigawmmc: return $oegoegssokkyiqam; } public function auwqygmwwiugciee($yekqqesogweecqyc, $icwicymcioeyeyek) { $post = ManipulatePost::get($yekqqesogweecqyc); if (!($post && "\160\165\142\x6c\x69\x73\150" === ManipulatePost::ucwmcwqmqwaymkkc($post))) { goto yuoeumyiuqkuouey; } $swaukaagekiououo = ManipulateI18N::emqmaiomewcmuacu($yekqqesogweecqyc); $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $owwcaiyoucwcwmmq = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x70\x6f\x73\164\137\x70\x75\162\x67\x65\137\x75\162\x6c\163"), $owwcaiyoucwcwmmq, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\x62\x65\146\157\x72\145\137\x63\x6c\x65\x61\x6e\x5f\x70\157\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\141\x66\164\x65\x72\137\x63\x6c\x65\x61\156\137\160\x6f\163\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f{$this->mwikyscisascoeea()}\x5f\141\146\164\145\162\x5f\x63\x6c\x65\x61\x6e\137\x70\157\x73\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); yuoeumyiuqkuouey: } public function imowamiweekygocm(array $auwuoyyagaiegwae = []) { $iaceaqwggsgmasqe = []; foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iaceaqwggsgmasqe[] = $mgoiyiawsmmgasic["\x73\x63\x68\x65\155\x65"] . "\72\x2f\57" . $mgoiyiawsmmgasic["\x68\157\163\x74"] . "\52" . $mgoiyiawsmmgasic["\x70\141\164\150"]; sckioayasmkcoeoo: } eyiwqgqcsqakwqss: return $iaceaqwggsgmasqe; } public function koocuyiyiieuakmm($kkkswwyyaoeysaio, $iaakskwmyqceoscy) { if (!("\165\160\144\141\x74\x65" === $iaakskwmyqceoscy["\x61\x63\164\151\x6f\x6e"])) { goto wgiygcmqaokywuqa; } if (!("\x74\x68\145\155\145" === $iaakskwmyqceoscy["\x74\171\x70\145"])) { goto osmmoyqkqoucsgow; } if (!is_array($iaakskwmyqceoscy["\x74\x68\145\x6d\145\163"])) { goto ooqksueucyagyuoe; } $current_theme = wp_get_theme(); $sgmuqamasucuikqa = [ $current_theme->get_template(), $current_theme->get_stylesheet(), ]; if (!array_intersect($iaakskwmyqceoscy["\164\x68\145\x6d\x65\163"], $sgmuqamasucuikqa)) { goto yssqmyoaokkksukc; } $this->weikkyiqoogkoyce(); yssqmyoaokkksukc: ooqksueucyagyuoe: osmmoyqkqoucsgow: wgiygcmqaokywuqa: } public function eugcsqcwkqseakoe($mceokigoiqekskwe, $gywkakmagykqkiei, $kesssewsiegssiya) { if (!ManipulateTaxonomy::cekoogweeooasayu($kesssewsiegssiya)) { goto iauwuugggmegwisk; } $this->weikkyiqoogkoyce(); iauwuugggmegwisk: } private function wgokqcqsmcqsiiue($miawkwqioaeasiig) { if (!$this->kcciqwskewsuaemk()->asysewkmisimumay($miawkwqioaeasiig)) { goto aukucaieceiwesmm; } ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); aukucaieceiwesmm: } private function qeoaoiweucueeuqu(string $eeamcawaiqocomwy, $ymiyawysimukkoso = false) { global $wp_rewrite; $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\150\157\x73\x74"]) as $miawkwqioaeasiig) { $mkomwsiykqigmqca = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\141\164\150"]; if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto egaymskkosukqeao; } foreach (ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca) as $igqsaukqcqscimok) { if (!ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok)) { goto acggikioyeueeowg; } $this->kcciqwskewsuaemk()->remove(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok)); acggikioyeueeowg: ykwasaaoeeiuomim: } iwueukqcywkiyqge: if (!$ymiyawysimukkoso) { goto cwikoaeqmmoimmso; } $this->wgokqcqsmcqsiiue(trailingslashit($mkomwsiykqigmqca) . $wp_rewrite->pagination_base); cwikoaeqmmoimmso: egaymskkosukqeao: micceocwuwkyusic: } kqyoakickmseyyeq: } public function gqguucgwsqasamke($qcqaayguacmuykwi, $mkomwsiykqigmqca = '', $iuomscuiswckwcoe = false) { if (!$mkomwsiykqigmqca) { goto cwswueuqoamqasya; } if (!is_array($mkomwsiykqigmqca)) { goto kaiesowkgwogqseg; } $oegoegssokkyiqam = $mkomwsiykqigmqca; goto kicwiowcogmauwiy; kaiesowkgwogqseg: $oegoegssokkyiqam = [$mkomwsiykqigmqca]; kicwiowcogmauwiy: goto kgmeiwiakwicgkkk; cwswueuqoamqasya: $oegoegssokkyiqam = $this->iwqysmawycmsmces(); kgmeiwiakwicgkkk: if (isset($eewgemuwouukmwgk[$qcqaayguacmuykwi])) { goto mykiyqcqiegkiqys; } $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca = trailingslashit($mkomwsiykqigmqca); try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($mkomwsiykqigmqca)); } catch (Exception $iewosgggaueeyymg) { return []; } $ucccueqywigcukcc = sprintf("\x2f\45\61\x24\x73\x25\x32\x24\163\x28\56\x2a\51\57\151", ManipulateFile::cgwcgscqeqauaagi($mkomwsiykqigmqca, true), $qcqaayguacmuykwi); try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$qcqaayguacmuykwi][] = ManipulateFile::scikcaaaiwcsqowm($uwsgakoiqomwikmy); aquqkiggamaoegoo: } csieaismmmocyacu: } catch (Exception $iewosgggaueeyymg) { $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; } omykokikgocoikec: } suuskagowwgsouqw: mykiyqcqiegkiqys: return $eewgemuwouukmwgk[$qcqaayguacmuykwi]; } public function qagmwwmqiicayaqg(WP_Post $post) { foreach ($this->soycogqiiekoekgq($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy); cquecqekuucwoumw: } agemwookwseyycqo: } public function wsqysyawwwgggowc($ccowyogiqwikkkie, $iwewcwusemqaiggk) { if (!DecoratorUser::scmcyesmmikkucie()) { goto koiscokkkaimiecq; } $eeamcawaiqocomwy = wp_nonce_url(ManipulateServer::oiucukewkckkwiqc("\141\x64\155\151\x6e\x2d\x70\x6f\x73\164\x2e\160\150\160\x3f\x61\x63\164\151\x6f\156\x3d\x6f\x70\164\x69\155\151\172\141\164\x69\x6f\156\x5f\x70\165\162\147\145\137{$this->mwikyscisascoeea()}\46\x74\x79\160\145\x3d\164\145\162\x6d\x2d{$iwewcwusemqaiggk->term_id}\46\164\x61\x78\157\156\x6f\x6d\x79\75{$iwewcwusemqaiggk->taxonomy}"), "\157\x70\164\x69\155\151\x7a\x61\164\151\x6f\156\137\160\165\162\147\x65\137{$this->mwikyscisascoeea()}\x5f\x74\x65\x72\x6d\55{$iwewcwusemqaiggk->term_id}"); $ccowyogiqwikkkie["\x6f\160\x74\151\x6d\151\172\x61\164\x69\157\x6e\x5f\160\165\x72\147\145\137{$this->mwikyscisascoeea()}"] = ManipulateHTML::uuccukgasskgimsq("\141", ["\150\162\x65\x66" => $eeamcawaiqocomwy], sprintf(__("\x43\x6c\145\141\x72\40\164\x68\151\163\x20\45\163", PR__PKG__OPTIMIZATION), $this->mwikyscisascoeea())); koiscokkkaimiecq: return $ccowyogiqwikkkie; } private function wgkqeyqiyacgqeso($post) { $cqgoimumaewouews = get_the_time("\131\55\x6d\x2d\x64", $post); $auwuoyyagaiegwae = []; if (!$cqgoimumaewouews) { goto owuuuiekkaeoeacq; } $ocogsiouoiuuguym = explode("\55", $cqgoimumaewouews); $auwuoyyagaiegwae = [get_year_link($ocogsiouoiuuguym[0]), get_month_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1]), get_day_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1], $ocogsiouoiuuguym[2])]; $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\160\157\163\164\x5f\x64\x61\x74\x65\x73\x5f\x75\x72\154\x73"), $auwuoyyagaiegwae); owuuuiekkaeoeacq: return $auwuoyyagaiegwae; } public function yeimaqssyuewkcgm($post) { foreach ($this->wgkqeyqiyacgqeso($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy, true); qwemkcoaseywkuuc: } saauykgakaeiyoua: } private function soycogqiiekoekgq(WP_Post $post) { $auwuoyyagaiegwae = []; $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs($post, self::ckmqoekmugkggeym); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!($kesssewsiegssiya instanceof WP_Taxonomy && $kesssewsiegssiya->public && "\160\162\x6f\x64\165\143\x74\x5f\163\150\x69\160\160\x69\156\147\137\143\154\141\x73\163" === $kesssewsiegssiya->name)) { goto sqwuqegeiisoiiuq; } $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $kesssewsiegssiya); if (!$uyuaosigqymaqsaa) { goto eouwacqiommmeaqc; } foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); if (!$migiiksoiymissge) { goto ceiuqsiqgiuiekem; } $auwuoyyagaiegwae[] = $migiiksoiymissge; ceiuqsiqgiuiekem: if (!ManipulateTaxonomy::aewcsqigycuaekym($kesssewsiegssiya)) { goto igmmqwyawcuuckkq; } $mogoquygwgkamaaw = (array) get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya); foreach ($mogoquygwgkamaaw as $aqguqemekkmogkee) { $uasmmsomeawcggee = ManipulateTerm::get($aqguqemekkmogkee, $kesssewsiegssiya); if (!$uasmmsomeawcggee) { goto wiwoiyoakywqyaiy; } $yaycyieqogmsoamk = ManipulateTerm::qmgcisuuikgmqcsu($uasmmsomeawcggee, $kesssewsiegssiya); if (!$yaycyieqogmsoamk) { goto isewysikysqewkis; } $auwuoyyagaiegwae[] = $yaycyieqogmsoamk; isewysikysqewkis: wiwoiyoakywqyaiy: ugykmcouiwiscoqu: } gsymkkskwsgggoic: igmmqwyawcuuckkq: mceucsaeouuwyumm: } gkqiqaqecmoogmaa: eouwacqiommmeaqc: sqwuqegeiisoiiuq: kwyimqumkuuyaiku: } mqimkwickkgqqeoi: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\x70\x6f\163\164\137\x74\x65\x72\155\163\137\165\162\154\163"), $auwuoyyagaiegwae); } public function weikkyiqoogkoyce($swaukaagekiououo = '') { $auwuoyyagaiegwae = !$swaukaagekiououo || is_object($swaukaagekiououo) || is_array($swaukaagekiououo) || is_int($swaukaagekiououo) ? (array) ManipulateI18N::kmmygsqekuksyeuy() : (array) ManipulateI18N::smickumaawgqkmco($swaukaagekiououo); $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\143\154\145\x61\x6e\137\144\157\x6d\141\151\156\x5f\x75\x72\154\x73"), $auwuoyyagaiegwae, $swaukaagekiououo); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); if (!($auwuoyyagaiegwae && $oegoegssokkyiqam)) { goto owgsameoayaogsma; } foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $gwyacgiwokuuwouo = ManipulateI18N::augqukusksqwwuus($swaukaagekiououo, $mkomwsiykqigmqca); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $couygeouymagssgw = $mkomwsiykqigmqca . $msimssikcguyqcac["\x68\x6f\x73\164"] . $msimssikcguyqcac["\x70\x61\164\150"]; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x62\x65\146\157\x72\x65\137\x63\154\x65\x61\x6e\137\144\x6f\155\141\x69\156"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\150\x6f\x73\x74"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\141\x74\x68"]; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto oeamoqweiueaueay; } if ($iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto eweaaismksecwagy; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); goto icumkkykaoqycqqu; eweaaismksecwagy: ManipulateFile::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); icumkkykaoqycqqu: oeamoqweiueaueay: mcqucouuiuoagqwc: } syusgosewwkoagoq: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\141\146\x74\x65\x72\137\x63\x6c\145\x61\156\x5f\x64\x6f\155\141\x69\x6e"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); egesuwkqkmaigaoe: } ugogoekeckgcmuaw: ykqsuiyyosyeyscc: } uscokkmquayiukag: owgsameoayaogsma: } public function skomiaywsggiyamc($aokagokqyuysuksm, $post) { $auwuoyyagaiegwae = []; $mqqisesagsuooios = Manipulate::yygaymuiikwoakuc($aokagokqyuysuksm); $migiiksoiymissge = str_replace(["\x25\x70\x6f\163\164\156\141\155\x65\45", "\45\x70\x61\x67\x65\x6e\141\x6d\x65\45"], $mqqisesagsuooios[1], $mqqisesagsuooios[0]); if (!(ManipulateFormat::eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH) !== "\57")) { goto kyiwsiakwgiwouyi; } $auwuoyyagaiegwae[] = $migiiksoiymissge; kyiwsiakwgiwouyi: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $myyccyuumcscsagc = ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg); if (!$myyccyuumcscsagc) { goto awgmegueeqeyqamu; } global $wp_rewrite; $auwuoyyagaiegwae[] = $myyccyuumcscsagc; $auwuoyyagaiegwae[] = $myyccyuumcscsagc . "{$wp_rewrite->pagination_base}"; awgmegueeqeyqamu: $dokeeoamkysymmqw = []; if (!$dokeeoamkysymmqw) { goto yggseoaommssscwo; } global $blog_id; $uogwqioiiwqsyksu = DecoratorOption::get("\x68\x6f\155\145"); if (!(!empty($blog_id) && is_multisite())) { goto gqimwsyemoewagcy; } switch_to_blog($blog_id); $uogwqioiiwqsyksu = DecoratorOption::get("\150\x6f\155\x65"); restore_current_blog(); gqimwsyemoewagcy: $scyimseukcmieyuw = ManipulateFormat::kcwgwosqkkkkmuks($uogwqioiiwqsyksu); $uogwqioiiwqsyksu = "{$scyimseukcmieyuw["\x73\x63\x68\145\155\145"]}\72\x2f\x2f{$scyimseukcmieyuw["\150\x6f\x73\164"]}"; $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca .= $scyimseukcmieyuw["\x68\x6f\x73\164"]; foreach ($dokeeoamkysymmqw as $suaemuyiacqyugsm) { if (!strstr($suaemuyiacqyugsm, "\x2a")) { goto iuwkiyimqmgguose; } $meyiiwcswqmuggyg = ManipulateFile::qawkooaucwoseaia($mkomwsiykqigmqca, "\x23" . $suaemuyiacqyugsm . "\x23\151"); foreach ($meyiiwcswqmuggyg as $qogsmwakwacwqogk) { $auwuoyyagaiegwae[] = str_replace($mkomwsiykqigmqca, untrailingslashit($uogwqioiiwqsyksu), $qogsmwakwacwqogk->amqagusacuuuaswg()); ayceeyuocgowqwsa: } sksgcusuyqcwqswe: goto qkyciyiwkmgkmquk; iuwkiyimqmgguose: $auwuoyyagaiegwae[] = trailingslashit($uogwqioiiwqsyksu) . $suaemuyiacqyugsm; qkyciyiwkmgkmquk: } maaisuqwkymeguys: esagiiawomyacuiw: } aoaqwygkaagiuuws: yggseoaommssscwo: $auwuoyyagaiegwae[] = ManipulatePost::ocigkomwiuwmmkks($post); $eyagosskwwmgwmog = DecoratorPost::iimmeiugygssweyc($aokagokqyuysuksm); if (!(bool) $eyagosskwwmgwmog) { goto oeusomaaeekakake; } foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) { $auwuoyyagaiegwae[] = ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom); yyqygaokeccgugos: } aeiemwacaiygemmg: oeusomaaeekakake: return array_flip(array_flip($auwuoyyagaiegwae)); } public function ekcemquyyiqykmoo(?string $yekqqesogweecqyc) { static $gqiuywqwmiieqcww = []; if (isset($gqiuywqwmiieqcww[$yekqqesogweecqyc])) { goto gcucsowqoeiwmyyq; } $gqiuywqwmiieqcww[$yekqqesogweecqyc] = 1; if (defined("\x44\x4f\x49\116\107\x5f\101\x55\124\117\123\x41\x56\x45")) { goto eqiiaokcgakicaye; } $post = ManipulatePost::get($yekqqesogweecqyc); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); if (!($post && $useksmwkuswkwcqg && !in_array($useksmwkuswkwcqg, ["\141\x74\164\x61\x63\x68\155\145\156\x74", "\156\x61\166\x5f\x6d\145\x6e\165\137\151\164\145\155"]) && !in_array($post->post_status, ["\x64\162\141\146\x74", "\141\165\164\157\55\144\x72\x61\146\x74"]))) { goto ikcwmsgocyuqiumc; } if (!ManipulatePost::qeosassuekcieuuy($useksmwkuswkwcqg)) { goto cyosacayacumuaks; } $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); $swaukaagekiououo = false; if ("\x77\160\155\154" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\157\157\x63\157\x6d\155\145\162\143\145\55\x6d\x75\x6c\x74\x69\154\x69\156\x67\165\141\x6c\x2f\x77\160\x6d\154\x2d\167\157\157\143\157\155\x6d\x65\162\143\x65\x2e\160\150\x70")) { goto giuccakymqymawgk; } if (!("\160\x6f\154\171\x6c\x61\x6e\147" === $eokyomeiuimoaiac && function_exists("\160\x6c\x6c\x5f\147\145\x74\137\160\x6f\x73\164\x5f\154\x61\x6e\x67\x75\x61\147\x65"))) { goto kwuckkyqaygwgcuy; } $swaukaagekiououo = pll_get_post_language($yekqqesogweecqyc); kwuckkyqaygwgcuy: goto sicgyiyiocyygkoc; giuccakymqymawgk: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($yekqqesogweecqyc, "\160\x6f\163\164\137" . $useksmwkuswkwcqg); sicgyiyiocyygkoc: $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x62\145\146\157\x72\145\137\x63\154\x65\x61\156\x5f\160\157\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\x5f\160\157\x73\x74\x5f\x70\165\162\147\x65\137\x75\x72\x6c\x73"), $owwcaiyoucwcwmmq, $post); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\141\x66\x74\145\162\x5f\143\x6c\145\141\x6e\137\x70\157\x73\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); cyosacayacumuaks: ikcwmsgocyuqiumc: eqiiaokcgakicaye: gcucsowqoeiwmyyq: } public function wckuqskowgoaoqom($auwuoyyagaiegwae) { $auwuoyyagaiegwae = array_filter((array) $auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto iymaiwqimisgacmk; } $oegoegssokkyiqam = $this->iwqysmawycmsmces(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\x5f\142\145\146\157\x72\x65\137\143\x6c\x65\x61\156\137\146\151\154\145\163"), $auwuoyyagaiegwae); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\137\x62\145\x66\157\x72\x65\137\x63\x6c\x65\x61\156\x5f\x66\151\154\145"), $eeamcawaiqocomwy); $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\150\x6f\163\x74"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\141\x74\150"]; if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto qcssigmcayuyweiy; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); qcssigmcayuyweiy: quamuugoocyyceec: } wwcqoeuwskquakwy: omuauimgkygcecsc: } oasggeyceiyieuuo: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f\141\x66\164\x65\162\x5f\143\154\145\x61\x6e\137\146\x69\x6c\145"), $eeamcawaiqocomwy); aumowowgewgqmwci: } kyiuewcikkqagwwg: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\141\146\x74\x65\x72\137\143\154\x65\x61\156\x5f\x66\151\x6c\x65\163"), $auwuoyyagaiegwae); iymaiwqimisgacmk: } public function ciyymuaoqiqmucei($swaukaagekiououo = '') { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks(ManipulateI18N::csacaukgwwayassy($swaukaagekiououo)); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $couygeouymagssgw = $mkomwsiykqigmqca . $mgoiyiawsmmgasic["\150\x6f\163\164"] . "\x2a" . untrailingslashit($mgoiyiawsmmgasic["\x70\x61\x74\x68"]); $couygeouymagssgw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\137\143\154\x65\x61\x6e\137\150\x6f\x6d\145\x5f\x72\157\x6f\164"), $couygeouymagssgw, $mgoiyiawsmmgasic["\x68\157\163\164"], $mgoiyiawsmmgasic["\x70\141\164\150"]); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x62\x65\x66\x6f\x72\145\x5f\x63\x6c\x65\x61\x6e\137\150\157\155\x65"), $couygeouymagssgw, $swaukaagekiououo); $ucasskoyoewwmmii = glob($couygeouymagssgw . "\x2f\x7b\151\x6e\x64\145\x78\x2c\151\156\x64\145\x78\55\x2a\x7d\x2e\x7b\x68\x74\x6d\x6c\54\150\x74\x6d\x6c\137\147\172\151\160\175", GLOB_BRACE | GLOB_NOSORT); if (!$ucasskoyoewwmmii) { goto ysiqakyaiooyscwy; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $this->kcciqwskewsuaemk()->remove($qogsmwakwacwqogk); ygcgoaokauigwuus: } ssywsaaqqaucesau: ysiqakyaiooyscwy: global $wp_rewrite; $qmwoqyacswkwkiog = glob($couygeouymagssgw . "\52\x2f" . $wp_rewrite->pagination_base, GLOB_NOSORT); if (!$qmwoqyacswkwkiog) { goto qeuyekusasqmcqms; } foreach ($qmwoqyacswkwkiog as $miawkwqioaeasiig) { ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); ousmyagwsiooumos: } auumaoycmsmsgigs: qeuyekusasqmcqms: $lgqgmusqcgekwgui = glob($couygeouymagssgw . "\x2f\56\155\157\142\x69\154\x65\55\141\143\x74\151\x76\145", GLOB_BRACE | GLOB_NOSORT); if (!$lgqgmusqcgekwgui) { goto qwisiamkmkkwucyo; } foreach ($lgqgmusqcgekwgui as $eagqciqqakiuokus) { $this->kcciqwskewsuaemk()->remove($eagqciqqakiuokus); sgocecweikecwwgq: } yiceawuuiusakwiq: qwisiamkmkkwucyo: $okyqgikguumqkcas = glob($couygeouymagssgw . "\x2f\56\x6e\x6f\x2d\x77\145\142\160", GLOB_BRACE | GLOB_NOSORT); if (!$okyqgikguumqkcas) { goto masakmomqmeocqqg; } foreach ($okyqgikguumqkcas as $kaggcuumyeuscqui) { $this->kcciqwskewsuaemk()->remove($kaggcuumyeuscqui); iwkckkeimmeoquyq: } yqcusaeysomccaok: masakmomqmeocqqg: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\137\141\x66\164\x65\162\137\x63\x6c\145\141\156\x5f\x68\x6f\155\145"), $couygeouymagssgw, $swaukaagekiououo); qyyyycwaookqaoke: } mugscgugcogcasue: } public function uqigacqieikayuac() { $auwuoyyagaiegwae = []; $auwuoyyagaiegwae[] = get_feed_link(); $auwuoyyagaiegwae[] = get_feed_link("\143\x6f\x6d\155\x65\156\164\x73\137"); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\x63\x6c\145\141\156\x5f\x68\x6f\155\145\137\x66\145\x65\144\x73"), $auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x62\145\x66\x6f\x72\145\x5f\x63\x6c\x65\141\156\x5f\x68\x6f\x6d\145\x5f\146\x65\x65\144\163"), $auwuoyyagaiegwae); self::wckuqskowgoaoqom($auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\141\146\x74\x65\x72\x5f\143\x6c\145\x61\x6e\137\150\x6f\155\x65\137\x66\x65\x65\144\163"), $auwuoyyagaiegwae); } public function suiuswewcumcyqms($mceokigoiqekskwe, $uemuuqsgymiqyuuu) { $owwcaiyoucwcwmmq = []; $iwewcwusemqaiggk = DecoratorTerm::woimamkkeyoyauoa("\x69\x64", $mceokigoiqekskwe, $uemuuqsgymiqyuuu); $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); if ("\x77\x70\155\154" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\x6f\x6f\143\x6f\x6d\155\145\162\x63\x65\55\x6d\x75\154\x74\151\154\x69\156\x67\x75\x61\x6c\57\167\160\155\154\x2d\x77\x6f\157\143\x6f\155\x6d\145\x72\143\145\x2e\x70\150\x70")) { goto suqckoccuyeeymww; } if ("\x70\157\154\171\x6c\x61\156\x67" === $eokyomeiuimoaiac && function_exists("\x70\x6c\x6c\137\x67\145\164\x5f\x74\145\162\x6d\137\154\141\x6e\147\165\x61\147\145")) { goto yksywwikmeksikqc; } $swaukaagekiououo = false; goto yoqsigmoyaaceqky; yksywwikmeksikqc: $swaukaagekiououo = pll_get_term_language($mceokigoiqekskwe); yoqsigmoyaaceqky: goto giugwaeuwaomossq; suqckoccuyeeymww: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($mceokigoiqekskwe, "\164\x61\170\137" . $uemuuqsgymiqyuuu); giugwaeuwaomossq: $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $uemuuqsgymiqyuuu); if (!("\x2f" !== ManipulateFormat::eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH))) { goto acgqaeakoyasgkku; } array_push($owwcaiyoucwcwmmq, $migiiksoiymissge); acgqaeakoyasgkku: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\x5f\x62\145\x66\x6f\x72\145\x5f\143\154\145\x61\x6e\137\x74\x65\162\155"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\x74\x65\162\x6d\x5f\160\x75\162\147\145\x5f\165\162\154\x73"), $owwcaiyoucwcwmmq, $iwewcwusemqaiggk); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\141\146\164\x65\x72\x5f\x63\154\145\141\x6e\x5f\x74\x65\x72\155"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); } }
