<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e645a0a3356             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Exception; use FilesystemIterator; use IteratorIterator; use RegexIterator; use WP_Post; use WP_Taxonomy; use WP_Term; use WP_Upgrader; abstract class Temp extends Container { protected ?string $id = null; protected $paths; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\163\167\151\x74\x63\x68\x5f\x74\x68\x65\x6d\145", [$this, "\167\145\151\x6b\x6b\171\x69\161\157\157\x67\x6b\157\x79\x63\145"])->qcsmikeggeemccuu("\x70\162\145\x5f\x70\157\x73\164\x5f\165\x70\x64\141\164\145", [$this, "\x61\165\167\x71\x79\x67\155\x77\167\151\165\x67\143\x69\x65\145"], 2)->qcsmikeggeemccuu("\x75\x70\x67\162\141\144\x65\162\137\x70\162\x6f\143\x65\163\163\137\143\157\x6d\160\x6c\145\164\145", [$this, "\x6b\157\x6f\x63\x75\x79\151\x79\151\151\145\165\141\153\155\x6d"], 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\160\x75\x72\x67\x65\137\143\x61\143\x68\x65\137\x66\151\x6c\145\x73"), [$this, "\167\x65\151\x6b\x6b\171\151\x71\x6f\x6f\147\153\x6f\171\x63\145"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\x74\137\x61\146\164\x65\162\x5f\x63\154\x65\x61\x6e\x5f\160\x6f\163\x74"), [$this, "\161\141\x67\x6d\167\167\155\161\151\151\143\x61\x79\x61\161\147"])->qcsmikeggeemccuu("\x63\157\x6d\155\x65\156\164\x5f\x70\157\163\x74", [$this, "\155\155\145\151\x75\x79\165\x67\x65\145\153\157\x71\x77\x63\x73"], 2, 99)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\164\137{$this->mwikyscisascoeea()}\x5f\x63\x6c\x65\x61\x6e\137\144\157\x6d\x61\151\x6e"), [$this, "\167\x65\x69\x6b\x6b\171\x69\161\x6f\x6f\147\x6b\157\171\x63\x65"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\164\137\x63\x6c\x65\x61\x6e\x5f\x66\x69\154\x65\163"), [$this, "\151\x6d\x6f\x77\x61\155\x69\x77\145\145\153\x79\147\x6f\143\155"]); if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto swckikycciugciqq; } $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\160\x75\142\x6c\x69\143" => true, "\160\x75\142\x6c\151\143\154\x79\137\161\165\145\162\171\141\x62\154\x65" => true, self::aisguagukaewucii => self::emgcgiseaoouacge]); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $this->cecaguuoecmccuse("{$kesssewsiegssiya}\137\162\157\167\137\x61\143\164\151\x6f\156\163", [$this, "\x77\x73\x71\x79\163\x79\x61\167\x77\x77\x67\147\x67\x6f\167\143"], 2); kmqusaiaiogecyiy: } ocmwuquguuqigose: swckikycciugciqq: parent::kgquecmsgcouyaya(); } public function mmeiuyugeekoqwcs($aqqmosqmsuueyaes, $swyywyqesisooayc) { $post = ManipulateComment::ayueggmoqeeukqmq($aqqmosqmsuueyaes); if (!$post) { goto coogyackikgmecic; } $this->ekcemquyyiqykmoo(ManipulatePost::mwikyscisascoeea($post)); coogyackikgmecic: } public function mwikyscisascoeea() : string { return $this->id; } public function iwqysmawycmsmces() : array { $oegoegssokkyiqam = $this->paths; if (!is_string($oegoegssokkyiqam)) { goto iqwsqykoueqyyomy; } $oegoegssokkyiqam = [$oegoegssokkyiqam]; iqwsqykoueqyyomy: return $oegoegssokkyiqam; } public function auwqygmwwiugciee($yekqqesogweecqyc, $icwicymcioeyeyek) { $post = ManipulatePost::get($yekqqesogweecqyc); if (!($post && "\160\165\x62\154\151\163\x68" === ManipulatePost::ucwmcwqmqwaymkkc($post))) { goto ggaucuaykyuiikem; } $swaukaagekiououo = ManipulateI18N::emqmaiomewcmuacu($yekqqesogweecqyc); $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $owwcaiyoucwcwmmq = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\160\157\163\x74\137\160\x75\x72\147\x65\x5f\x75\162\x6c\x73"), $owwcaiyoucwcwmmq, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\x62\145\146\157\x72\145\x5f\x63\154\145\x61\156\x5f\160\x6f\163\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\x61\x66\164\145\x72\137\143\x6c\145\141\156\x5f\x70\x6f\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f{$this->mwikyscisascoeea()}\137\141\x66\164\x65\x72\x5f\143\x6c\x65\x61\156\137\160\x6f\x73\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); ggaucuaykyuiikem: } public function imowamiweekygocm(array $auwuoyyagaiegwae = []) { $iaceaqwggsgmasqe = []; foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iaceaqwggsgmasqe[] = $mgoiyiawsmmgasic["\163\x63\150\145\155\x65"] . "\x3a\x2f\x2f" . $mgoiyiawsmmgasic["\x68\x6f\x73\x74"] . "\52" . $mgoiyiawsmmgasic["\x70\x61\164\x68"]; caaygouikgagsssc: } egikqoaqqegawugu: return $iaceaqwggsgmasqe; } public function koocuyiyiieuakmm($kkkswwyyaoeysaio, $iaakskwmyqceoscy) { if (!("\x75\x70\144\x61\164\145" === $iaakskwmyqceoscy["\x61\x63\x74\x69\x6f\156"])) { goto qsmoiwqcuamyuwyu; } if (!("\x74\150\145\155\x65" === $iaakskwmyqceoscy["\164\171\x70\x65"])) { goto aakoeuuosouyeemc; } if (!is_array($iaakskwmyqceoscy["\x74\x68\145\x6d\145\x73"])) { goto wmcmqmmcweecqmsw; } $current_theme = wp_get_theme(); $sgmuqamasucuikqa = [ $current_theme->get_template(), $current_theme->get_stylesheet(), ]; if (!array_intersect($iaakskwmyqceoscy["\164\x68\145\x6d\145\163"], $sgmuqamasucuikqa)) { goto yoaewquyogiimyic; } $this->weikkyiqoogkoyce(); yoaewquyogiimyic: wmcmqmmcweecqmsw: aakoeuuosouyeemc: qsmoiwqcuamyuwyu: } public function eugcsqcwkqseakoe($mceokigoiqekskwe, $gywkakmagykqkiei, $kesssewsiegssiya) { if (!ManipulateTaxonomy::cekoogweeooasayu($kesssewsiegssiya)) { goto cicegcoqyuoggiwy; } $this->weikkyiqoogkoyce(); cicegcoqyuoggiwy: } private function wgokqcqsmcqsiiue($miawkwqioaeasiig) { if (!$this->kcciqwskewsuaemk()->asysewkmisimumay($miawkwqioaeasiig)) { goto ugcwqacogqoswyse; } ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); ugcwqacogqoswyse: } private function qeoaoiweucueeuqu(string $eeamcawaiqocomwy, $ymiyawysimukkoso = false) { global $wp_rewrite; $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\157\x73\164"]) as $miawkwqioaeasiig) { $mkomwsiykqigmqca = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\x61\164\150"]; if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto csggsqueaqmwgwkk; } foreach (ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca) as $igqsaukqcqscimok) { if (!ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok)) { goto csqakuuiyywassgw; } $this->kcciqwskewsuaemk()->remove(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok)); csqakuuiyywassgw: sqmiymiemeegegic: } meseuuacmkuowqau: if (!$ymiyawysimukkoso) { goto esqiocgueosoksyq; } $this->wgokqcqsmcqsiiue(trailingslashit($mkomwsiykqigmqca) . $wp_rewrite->pagination_base); esqiocgueosoksyq: csggsqueaqmwgwkk: wycuyiukyceccaow: } saekesoeysauokkq: } public function gqguucgwsqasamke($qcqaayguacmuykwi, $mkomwsiykqigmqca = '', $iuomscuiswckwcoe = false) { if (!$mkomwsiykqigmqca) { goto egmocemomockemia; } if (!is_array($mkomwsiykqigmqca)) { goto sescaagayikiggyq; } $oegoegssokkyiqam = $mkomwsiykqigmqca; goto wwwggoemicgwwasy; sescaagayikiggyq: $oegoegssokkyiqam = [$mkomwsiykqigmqca]; wwwggoemicgwwasy: goto gemwkqocygssmequ; egmocemomockemia: $oegoegssokkyiqam = $this->iwqysmawycmsmces(); gemwkqocygssmequ: if (isset($eewgemuwouukmwgk[$qcqaayguacmuykwi])) { goto cewyaqiqmmwmauce; } $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca = trailingslashit($mkomwsiykqigmqca); try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($mkomwsiykqigmqca)); } catch (Exception $iewosgggaueeyymg) { return []; } $ucccueqywigcukcc = sprintf("\57\x25\61\44\163\x25\62\x24\163\x28\56\52\51\57\151", ManipulateFile::cgwcgscqeqauaagi($mkomwsiykqigmqca, true), $qcqaayguacmuykwi); try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$qcqaayguacmuykwi][] = ManipulateFile::scikcaaaiwcsqowm($uwsgakoiqomwikmy); kucqcqeesaiacekm: } aaiymmkqmocgakei: } catch (Exception $iewosgggaueeyymg) { $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; } acisycocoswkekik: } cqaeiesyciakcagu: cewyaqiqmmwmauce: return $eewgemuwouukmwgk[$qcqaayguacmuykwi]; } public function qagmwwmqiicayaqg(WP_Post $post) { foreach ($this->soycogqiiekoekgq($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy); ycweseaccsomkioa: } scyqmcegwikkoesw: } public function wsqysyawwwgggowc($ccowyogiqwikkkie, $iwewcwusemqaiggk) { if (!DecoratorUser::scmcyesmmikkucie()) { goto ciwggusyecgskagy; } $eeamcawaiqocomwy = wp_nonce_url(ManipulateServer::oiucukewkckkwiqc("\141\144\x6d\151\x6e\55\160\x6f\x73\x74\56\160\x68\x70\x3f\x61\143\164\x69\x6f\x6e\75\x6f\160\164\151\x6d\151\172\141\x74\151\157\x6e\137\x70\x75\x72\147\x65\137{$this->mwikyscisascoeea()}\46\164\x79\x70\145\75\x74\x65\162\155\55{$iwewcwusemqaiggk->term_id}\x26\x74\x61\170\157\156\157\x6d\171\x3d{$iwewcwusemqaiggk->taxonomy}"), "\157\160\x74\151\x6d\x69\172\x61\x74\x69\x6f\x6e\137\160\165\162\147\x65\137{$this->mwikyscisascoeea()}\137\164\145\x72\x6d\55{$iwewcwusemqaiggk->term_id}"); $ccowyogiqwikkkie["\x6f\x70\164\151\x6d\151\172\x61\x74\x69\x6f\x6e\x5f\160\165\162\147\145\x5f{$this->mwikyscisascoeea()}"] = ManipulateHTML::yuawgssgauywkiia(sprintf(__("\x43\x6c\145\141\x72\x20\x74\x68\x69\x73\x20\x25\x73", PR__MDL__OPTIMIZATION), $this->mwikyscisascoeea()), $eeamcawaiqocomwy); ciwggusyecgskagy: return $ccowyogiqwikkkie; } private function wgkqeyqiyacgqeso($post) { $cqgoimumaewouews = get_the_time("\131\x2d\x6d\x2d\x64", $post); $auwuoyyagaiegwae = []; if (!$cqgoimumaewouews) { goto sccqekuwywiisami; } $ocogsiouoiuuguym = explode("\x2d", $cqgoimumaewouews); $auwuoyyagaiegwae = [get_year_link($ocogsiouoiuuguym[0]), get_month_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1]), get_day_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1], $ocogsiouoiuuguym[2])]; $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x70\157\163\164\x5f\144\141\x74\x65\163\137\165\162\154\163"), $auwuoyyagaiegwae); sccqekuwywiisami: return $auwuoyyagaiegwae; } public function yeimaqssyuewkcgm($post) { foreach ($this->wgkqeyqiyacgqeso($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy, true); qgqasacusgwmoegy: } eokcuuwqaomkooag: } private function soycogqiiekoekgq(WP_Post $post) { $auwuoyyagaiegwae = []; $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs($post, self::ckmqoekmugkggeym); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!($kesssewsiegssiya instanceof WP_Taxonomy && $kesssewsiegssiya->public && "\160\162\157\144\165\143\x74\x5f\163\x68\151\x70\160\x69\x6e\147\x5f\143\154\x61\x73\163" === $kesssewsiegssiya->name)) { goto igscwycsqsckmcuq; } $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $kesssewsiegssiya); if (!$uyuaosigqymaqsaa) { goto ecqeqquikuomwgsu; } foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); if (!$migiiksoiymissge) { goto yomoeykcqyukscmi; } $auwuoyyagaiegwae[] = $migiiksoiymissge; yomoeykcqyukscmi: if (!ManipulateTaxonomy::aewcsqigycuaekym($kesssewsiegssiya)) { goto uekkkmwciocmosgg; } $mogoquygwgkamaaw = (array) get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya); foreach ($mogoquygwgkamaaw as $aqguqemekkmogkee) { $uasmmsomeawcggee = ManipulateTerm::get($aqguqemekkmogkee, $kesssewsiegssiya); if (!$uasmmsomeawcggee) { goto wsqoskqgyooqeyga; } $yaycyieqogmsoamk = ManipulateTerm::qmgcisuuikgmqcsu($uasmmsomeawcggee, $kesssewsiegssiya); if (!$yaycyieqogmsoamk) { goto suaymckwwgmugsaa; } $auwuoyyagaiegwae[] = $yaycyieqogmsoamk; suaymckwwgmugsaa: wsqoskqgyooqeyga: uwsmcsiiisuocgwg: } swmgucaogosuueug: uekkkmwciocmosgg: ysssquieawyysiyc: } gkoiyaagwgycysim: ecqeqquikuomwgsu: igscwycsqsckmcuq: ksqgwiceoomkuuiy: } qscqkykqskqmisgw: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\x70\157\x73\x74\137\164\145\x72\x6d\163\137\x75\x72\154\x73"), $auwuoyyagaiegwae); } public function weikkyiqoogkoyce($swaukaagekiououo = '') { $auwuoyyagaiegwae = !$swaukaagekiououo || is_object($swaukaagekiououo) || is_array($swaukaagekiououo) || is_int($swaukaagekiououo) ? (array) ManipulateI18N::kmmygsqekuksyeuy() : (array) ManipulateI18N::smickumaawgqkmco($swaukaagekiououo); $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\143\x6c\145\141\x6e\137\x64\157\x6d\141\151\x6e\137\165\162\x6c\x73"), $auwuoyyagaiegwae, $swaukaagekiououo); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); if (!($auwuoyyagaiegwae && $oegoegssokkyiqam)) { goto kcomueysiyyqagus; } foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $gwyacgiwokuuwouo = ManipulateI18N::augqukusksqwwuus($swaukaagekiououo, $mkomwsiykqigmqca); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $couygeouymagssgw = $mkomwsiykqigmqca . $msimssikcguyqcac["\x68\x6f\x73\x74"] . $msimssikcguyqcac["\160\141\x74\x68"]; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\142\145\x66\x6f\x72\x65\x5f\143\154\145\141\156\x5f\144\157\x6d\141\151\x6e"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\150\157\163\x74"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\160\141\x74\x68"]; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto amoygaweoeymiuiy; } if ($iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto caoikoqmyeqsqqqe; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); goto moimkkmkooeiyisc; caoikoqmyeqsqqqe: ManipulateFile::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); moimkkmkooeiyisc: amoygaweoeymiuiy: gwayeyymscmgwqkg: } isiqkeyciyqgkayu: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x61\146\164\x65\x72\137\143\x6c\145\x61\156\137\144\157\x6d\x61\151\x6e"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); iuieskocqoqkkwus: } syeeegeygawwqiuu: ycskuioouwwemgke: } wmcaecgwmmwuuqsq: kcomueysiyyqagus: } public function skomiaywsggiyamc($aokagokqyuysuksm, $post) { $auwuoyyagaiegwae = []; $mqqisesagsuooios = Manipulate::yygaymuiikwoakuc($aokagokqyuysuksm); $migiiksoiymissge = str_replace(["\x25\160\157\163\164\156\x61\x6d\145\45", "\45\160\x61\147\145\x6e\141\x6d\x65\45"], $mqqisesagsuooios[1], $mqqisesagsuooios[0]); if (!($this->eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH) !== "\57")) { goto ckuagmyqkyoeeaeu; } $auwuoyyagaiegwae[] = $migiiksoiymissge; ckuagmyqkyoeeaeu: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $myyccyuumcscsagc = ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg); if (!$myyccyuumcscsagc) { goto cqwgmwqiakmgyuee; } global $wp_rewrite; $auwuoyyagaiegwae[] = $myyccyuumcscsagc; $auwuoyyagaiegwae[] = $myyccyuumcscsagc . "{$wp_rewrite->pagination_base}"; cqwgmwqiakmgyuee: $dokeeoamkysymmqw = []; if (!$dokeeoamkysymmqw) { goto eosmwawqaocwgccq; } global $blog_id; $uogwqioiiwqsyksu = DecoratorOption::get("\150\x6f\155\145"); if (!(!empty($blog_id) && ManipulateServer::gsaomcwyacqcumaa())) { goto ksgwgcguemcescqg; } switch_to_blog($blog_id); $uogwqioiiwqsyksu = DecoratorOption::get("\x68\x6f\x6d\145"); restore_current_blog(); ksgwgcguemcescqg: $scyimseukcmieyuw = ManipulateFormat::kcwgwosqkkkkmuks($uogwqioiiwqsyksu); $uogwqioiiwqsyksu = "{$scyimseukcmieyuw["\163\x63\150\x65\x6d\145"]}\72\57\57{$scyimseukcmieyuw["\x68\x6f\x73\164"]}"; $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca .= $scyimseukcmieyuw["\150\x6f\x73\x74"]; foreach ($dokeeoamkysymmqw as $suaemuyiacqyugsm) { if (!strstr($suaemuyiacqyugsm, "\x2a")) { goto egosmwkuuikwqeak; } $meyiiwcswqmuggyg = ManipulateFile::qawkooaucwoseaia($mkomwsiykqigmqca, "\43" . $suaemuyiacqyugsm . "\43\151"); foreach ($meyiiwcswqmuggyg as $qogsmwakwacwqogk) { $auwuoyyagaiegwae[] = str_replace($mkomwsiykqigmqca, untrailingslashit($uogwqioiiwqsyksu), $qogsmwakwacwqogk->amqagusacuuuaswg()); ggkoiouwecyiosym: } ossyqogewmggmaoc: goto okemsmmeceoeaswi; egosmwkuuikwqeak: $auwuoyyagaiegwae[] = trailingslashit($uogwqioiiwqsyksu) . $suaemuyiacqyugsm; okemsmmeceoeaswi: } eekeksysqeuoskoo: cmagycousakeeaei: } kiwiesucugwoiuum: eosmwawqaocwgccq: $auwuoyyagaiegwae[] = ManipulatePost::ocigkomwiuwmmkks($post); $eyagosskwwmgwmog = DecoratorPost::iimmeiugygssweyc($aokagokqyuysuksm); if (!(bool) $eyagosskwwmgwmog) { goto ekgsawcuswowmosm; } foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) { $auwuoyyagaiegwae[] = ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom); keqagmaiqqsgkmso: } eymiqwsygoowowuu: ekgsawcuswowmosm: return array_flip(array_flip($auwuoyyagaiegwae)); } public function ekcemquyyiqykmoo(?string $yekqqesogweecqyc) { static $gqiuywqwmiieqcww = []; if (isset($gqiuywqwmiieqcww[$yekqqesogweecqyc])) { goto qosckaqceoumcasm; } $gqiuywqwmiieqcww[$yekqqesogweecqyc] = 1; if (defined("\104\117\111\116\x47\x5f\101\125\124\117\123\101\126\105")) { goto ekgcquiosyesyism; } $post = ManipulatePost::get($yekqqesogweecqyc); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); if (!($post && $useksmwkuswkwcqg && !in_array($useksmwkuswkwcqg, ["\x61\x74\164\x61\x63\150\x6d\x65\156\164", "\156\x61\166\x5f\155\x65\x6e\x75\x5f\x69\x74\x65\x6d"]) && !in_array($post->post_status, ["\x64\162\141\146\164", "\141\x75\x74\x6f\x2d\x64\162\141\x66\164"]))) { goto qggiogeyowcoaiqy; } if (!ManipulatePost::qeosassuekcieuuy($useksmwkuswkwcqg)) { goto usgmimcwygsmcioa; } $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); $swaukaagekiououo = false; if ("\x77\x70\155\x6c" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\167\157\x6f\143\x6f\x6d\155\x65\162\x63\145\55\x6d\165\x6c\x74\151\154\x69\x6e\x67\x75\141\x6c\x2f\x77\x70\x6d\x6c\x2d\x77\157\x6f\x63\x6f\x6d\x6d\145\x72\143\x65\x2e\160\x68\160")) { goto euogcyyayioyyiyg; } if (!("\160\x6f\154\x79\x6c\x61\156\147" === $eokyomeiuimoaiac && function_exists("\160\154\154\137\147\x65\x74\x5f\160\x6f\x73\x74\x5f\x6c\x61\156\147\165\141\147\145"))) { goto uiwswesymogiwsgg; } $swaukaagekiououo = pll_get_post_language($yekqqesogweecqyc); uiwswesymogiwsgg: goto wkcwuemioaiyouek; euogcyyayioyyiyg: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($yekqqesogweecqyc, "\160\157\x73\x74\x5f" . $useksmwkuswkwcqg); wkcwuemioaiyouek: $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\137\x62\145\x66\157\x72\145\137\143\154\x65\x61\156\x5f\160\x6f\x73\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\160\x6f\163\x74\137\160\x75\x72\x67\x65\137\165\162\x6c\163"), $owwcaiyoucwcwmmq, $post); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x61\146\x74\145\x72\x5f\143\x6c\x65\x61\156\x5f\x70\x6f\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); usgmimcwygsmcioa: qggiogeyowcoaiqy: ekgcquiosyesyism: qosckaqceoumcasm: } public function wckuqskowgoaoqom($auwuoyyagaiegwae) { $auwuoyyagaiegwae = array_filter((array) $auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto cycyaqqawmwiywwe; } $oegoegssokkyiqam = $this->iwqysmawycmsmces(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\x62\x65\146\157\x72\145\x5f\143\154\x65\141\x6e\x5f\146\x69\154\145\163"), $auwuoyyagaiegwae); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\x5f\142\x65\146\157\162\x65\137\x63\x6c\x65\x61\x6e\x5f\x66\151\x6c\145"), $eeamcawaiqocomwy); $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\x6f\163\x74"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\160\141\164\150"]; if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto cokacyaayuueyuuu; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); cokacyaayuueyuuu: koawwmccgquqqmwa: } wogokmgkgkumqcws: gmymycwymqkuiisi: } qimieogaimwmukmu: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\x61\146\164\145\x72\x5f\143\154\145\x61\156\137\146\x69\154\x65"), $eeamcawaiqocomwy); kgeggsckmgcgwcqm: } gmcqkoqwkiawaikw: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\141\146\x74\x65\x72\x5f\143\154\x65\x61\x6e\137\x66\x69\x6c\145\163"), $auwuoyyagaiegwae); cycyaqqawmwiywwe: } public function ciyymuaoqiqmucei($swaukaagekiououo = '') { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks(ManipulateI18N::csacaukgwwayassy($swaukaagekiououo)); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $couygeouymagssgw = $mkomwsiykqigmqca . $mgoiyiawsmmgasic["\150\x6f\x73\x74"] . "\x2a" . untrailingslashit($mgoiyiawsmmgasic["\x70\x61\164\150"]); $couygeouymagssgw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x63\154\145\x61\x6e\137\x68\157\155\145\x5f\162\x6f\157\164"), $couygeouymagssgw, $mgoiyiawsmmgasic["\150\x6f\x73\x74"], $mgoiyiawsmmgasic["\160\x61\164\x68"]); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\142\x65\146\x6f\162\145\x5f\143\154\145\x61\x6e\137\150\x6f\x6d\145"), $couygeouymagssgw, $swaukaagekiououo); $ucasskoyoewwmmii = glob($couygeouymagssgw . "\x2f\173\151\156\x64\145\x78\54\151\156\x64\145\170\x2d\x2a\175\56\x7b\150\x74\155\154\54\150\164\x6d\154\137\147\x7a\x69\160\x7d", GLOB_BRACE | GLOB_NOSORT); if (!$ucasskoyoewwmmii) { goto ikeyoyoigsuouokm; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $this->kcciqwskewsuaemk()->remove($qogsmwakwacwqogk); iuaommmyqoecmuss: } ygywkqgioiscmuie: ikeyoyoigsuouokm: global $wp_rewrite; $qmwoqyacswkwkiog = glob($couygeouymagssgw . "\52\x2f" . $wp_rewrite->pagination_base, GLOB_NOSORT); if (!$qmwoqyacswkwkiog) { goto oyicskieeaewgwce; } foreach ($qmwoqyacswkwkiog as $miawkwqioaeasiig) { ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); cuwkqgemkmuuegkc: } eecgougegqassgyq: oyicskieeaewgwce: $lgqgmusqcgekwgui = glob($couygeouymagssgw . "\x2f\x2e\155\157\x62\151\154\145\55\x61\x63\x74\x69\x76\x65", GLOB_BRACE | GLOB_NOSORT); if (!$lgqgmusqcgekwgui) { goto scaimkkukmgoeaya; } foreach ($lgqgmusqcgekwgui as $eagqciqqakiuokus) { $this->kcciqwskewsuaemk()->remove($eagqciqqakiuokus); cceakqgoysacqwmc: } wemmseueskwkcwou: scaimkkukmgoeaya: $okyqgikguumqkcas = glob($couygeouymagssgw . "\x2f\56\156\157\x2d\x77\x65\142\160", GLOB_BRACE | GLOB_NOSORT); if (!$okyqgikguumqkcas) { goto cugkqmkuyuwwqcec; } foreach ($okyqgikguumqkcas as $kaggcuumyeuscqui) { $this->kcciqwskewsuaemk()->remove($kaggcuumyeuscqui); ekmqouqsgsaukeiq: } ceeqguaoysyaasey: cugkqmkuyuwwqcec: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\141\x66\x74\145\162\137\143\x6c\145\141\156\x5f\x68\157\x6d\x65"), $couygeouymagssgw, $swaukaagekiououo); eqieeecackceeweg: } ckowiuagwmsqmiqc: } public function uqigacqieikayuac() { $auwuoyyagaiegwae = []; $auwuoyyagaiegwae[] = get_feed_link(); $auwuoyyagaiegwae[] = get_feed_link("\143\x6f\155\155\x65\156\x74\163\137"); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\x5f\143\154\x65\141\156\x5f\150\157\x6d\x65\137\x66\x65\x65\144\163"), $auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x62\x65\146\x6f\162\x65\x5f\143\154\x65\x61\x6e\137\x68\157\155\145\x5f\x66\x65\145\144\x73"), $auwuoyyagaiegwae); self::wckuqskowgoaoqom($auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\137\141\x66\164\145\x72\137\143\154\x65\141\156\x5f\150\157\x6d\x65\x5f\146\145\145\144\163"), $auwuoyyagaiegwae); } public function suiuswewcumcyqms($mceokigoiqekskwe, $uemuuqsgymiqyuuu) { $owwcaiyoucwcwmmq = []; $iwewcwusemqaiggk = DecoratorTerm::woimamkkeyoyauoa("\x69\144", $mceokigoiqekskwe, $uemuuqsgymiqyuuu); $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); if ("\x77\x70\x6d\x6c" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\157\157\143\157\155\x6d\x65\x72\143\x65\x2d\x6d\165\x6c\x74\151\154\151\x6e\147\x75\141\154\57\x77\x70\x6d\154\x2d\167\157\157\x63\x6f\155\x6d\145\162\x63\145\56\x70\150\160")) { goto kacgiqwewyeeyyam; } if ("\160\x6f\154\171\154\141\156\x67" === $eokyomeiuimoaiac && function_exists("\x70\x6c\154\137\147\145\164\137\164\145\x72\155\x5f\154\x61\x6e\x67\x75\x61\147\145")) { goto ewooakeuigcyuemu; } $swaukaagekiououo = false; goto wceiuqaeywmgscww; ewooakeuigcyuemu: $swaukaagekiououo = pll_get_term_language($mceokigoiqekskwe); wceiuqaeywmgscww: goto qwogeocemuaaasiw; kacgiqwewyeeyyam: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($mceokigoiqekskwe, "\164\x61\170\137" . $uemuuqsgymiqyuuu); qwogeocemuaaasiw: $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $uemuuqsgymiqyuuu); if (!("\x2f" !== $this->eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH))) { goto ywmuoigomwwigqea; } $owwcaiyoucwcwmmq[] = $migiiksoiymissge; ywmuoigomwwigqea: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\x62\145\146\x6f\x72\145\137\x63\154\145\141\x6e\x5f\164\145\x72\155"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\164\x65\x72\x6d\x5f\160\165\162\147\145\x5f\x75\x72\154\163"), $owwcaiyoucwcwmmq, $iwewcwusemqaiggk); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\141\146\164\x65\x72\137\x63\x6c\145\141\x6e\137\164\145\x72\155"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); } public function eyayuwiqsqsmkamc(?string $eeamcawaiqocomwy, ?string $wksoawcgagcgoask) { return _get_component_from_parsed_url_array(ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy), $wksoawcgagcgoask); } }
