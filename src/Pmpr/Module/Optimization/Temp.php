<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64202c1126f08             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Exception; use FilesystemIterator; use IteratorIterator; use RegexIterator; use WP_Post; use WP_Taxonomy; use WP_Term; use WP_Upgrader; abstract class Temp extends Container { protected ?string $id = null; protected $paths; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x73\x77\151\164\x63\x68\x5f\x74\150\145\x6d\145", [$this, "\x77\x65\151\153\x6b\171\151\161\157\x6f\x67\153\157\171\143\x65"])->qcsmikeggeemccuu("\160\162\145\137\x70\x6f\x73\x74\x5f\165\160\x64\141\x74\x65", [$this, "\141\165\167\x71\171\x67\155\x77\x77\x69\165\x67\143\151\x65\x65"], 2)->qcsmikeggeemccuu("\165\160\x67\162\x61\144\x65\162\x5f\x70\162\x6f\x63\x65\x73\x73\x5f\x63\157\155\x70\154\145\x74\x65", [$this, "\x6b\157\157\x63\x75\x79\151\x79\151\151\x65\x75\141\x6b\x6d\x6d"], 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\x74\x5f\x70\165\162\147\x65\137\143\x61\x63\x68\x65\x5f\x66\151\x6c\145\163"), [$this, "\167\145\x69\153\x6b\x79\151\x71\x6f\x6f\x67\x6b\157\171\x63\145"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\164\137\141\x66\x74\145\x72\137\x63\x6c\145\x61\156\137\160\157\163\x74"), [$this, "\161\x61\x67\x6d\167\x77\x6d\x71\151\x69\x63\141\171\141\161\x67"])->qcsmikeggeemccuu("\143\157\x6d\155\145\x6e\x74\x5f\x70\x6f\x73\164", [$this, "\x6d\155\x65\151\165\171\165\147\145\x65\x6b\x6f\161\167\143\163"], 2, 99)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\164\137{$this->mwikyscisascoeea()}\137\143\154\x65\141\x6e\137\x64\157\x6d\141\151\156"), [$this, "\x77\145\x69\153\153\x79\x69\161\x6f\x6f\x67\x6b\x6f\171\143\x65"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\x5f\143\x6c\x65\141\x6e\x5f\146\151\154\145\163"), [$this, "\x69\155\x6f\x77\x61\x6d\151\167\145\145\153\x79\147\x6f\143\155"]); if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto uscissuaiyuiukea; } $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\x70\x75\142\154\151\143" => true, "\160\x75\142\x6c\x69\x63\154\171\x5f\x71\165\x65\162\171\141\142\x6c\x65" => true, self::aisguagukaewucii => self::emgcgiseaoouacge]); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $this->cecaguuoecmccuse("{$kesssewsiegssiya}\137\162\x6f\167\137\x61\x63\164\151\x6f\x6e\x73", [$this, "\x77\x73\x71\171\163\171\141\167\167\x77\147\x67\147\x6f\x77\x63"], 2); ooqmaweuqmcmwsuk: } qmgueimkwqmsakis: uscissuaiyuiukea: parent::kgquecmsgcouyaya(); } public function mmeiuyugeekoqwcs($aqqmosqmsuueyaes, $swyywyqesisooayc) { $post = ManipulateComment::ayueggmoqeeukqmq($aqqmosqmsuueyaes); if (!$post) { goto kuyqusuycscumuek; } $this->ekcemquyyiqykmoo(ManipulatePost::mwikyscisascoeea($post)); kuyqusuycscumuek: } public function mwikyscisascoeea() : string { return $this->id; } public function iwqysmawycmsmces() : array { $oegoegssokkyiqam = $this->paths; if (!is_string($oegoegssokkyiqam)) { goto cycwgukowsksmkyc; } $oegoegssokkyiqam = [$oegoegssokkyiqam]; cycwgukowsksmkyc: return $oegoegssokkyiqam; } public function auwqygmwwiugciee($yekqqesogweecqyc, $icwicymcioeyeyek) { $post = ManipulatePost::get($yekqqesogweecqyc); if (!($post && "\160\165\142\x6c\x69\163\x68" === ManipulatePost::ucwmcwqmqwaymkkc($post))) { goto siuyaemoiiqyoggo; } $swaukaagekiououo = ManipulateI18N::emqmaiomewcmuacu($yekqqesogweecqyc); $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $owwcaiyoucwcwmmq = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\137\160\x6f\163\x74\x5f\160\165\162\x67\145\x5f\165\x72\154\163"), $owwcaiyoucwcwmmq, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\137\x62\145\146\157\162\145\137\143\x6c\145\141\x6e\137\x70\157\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\141\146\164\x65\162\x5f\x63\x6c\145\141\156\137\x70\157\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\137{$this->mwikyscisascoeea()}\137\x61\x66\x74\x65\162\x5f\x63\x6c\x65\141\x6e\137\x70\x6f\x73\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); siuyaemoiiqyoggo: } public function imowamiweekygocm(array $auwuoyyagaiegwae = []) { $iaceaqwggsgmasqe = []; foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iaceaqwggsgmasqe[] = $mgoiyiawsmmgasic["\x73\143\x68\145\155\145"] . "\72\57\57" . $mgoiyiawsmmgasic["\x68\x6f\163\164"] . "\52" . $mgoiyiawsmmgasic["\x70\141\164\x68"]; qycsooiomiugimqc: } koemwyegoqwiikom: return $iaceaqwggsgmasqe; } public function koocuyiyiieuakmm($kkkswwyyaoeysaio, $iaakskwmyqceoscy) { if (!("\x75\x70\x64\x61\x74\x65" === $iaakskwmyqceoscy["\x61\143\164\151\157\156"])) { goto eimouyomcoqkmaae; } if (!("\x74\150\x65\x6d\145" === $iaakskwmyqceoscy["\164\171\160\x65"])) { goto gimquiiwucueoqkw; } if (!is_array($iaakskwmyqceoscy["\164\150\x65\x6d\145\x73"])) { goto ggoimgeeuugseiwk; } $current_theme = wp_get_theme(); $sgmuqamasucuikqa = [ $current_theme->get_template(), $current_theme->get_stylesheet(), ]; if (!array_intersect($iaakskwmyqceoscy["\164\x68\x65\x6d\x65\x73"], $sgmuqamasucuikqa)) { goto qioswooukgoowsuc; } $this->weikkyiqoogkoyce(); qioswooukgoowsuc: ggoimgeeuugseiwk: gimquiiwucueoqkw: eimouyomcoqkmaae: } public function eugcsqcwkqseakoe($mceokigoiqekskwe, $gywkakmagykqkiei, $kesssewsiegssiya) { if (!ManipulateTaxonomy::cekoogweeooasayu($kesssewsiegssiya)) { goto kkwqmoeeqygoimwg; } $this->weikkyiqoogkoyce(); kkwqmoeeqygoimwg: } private function wgokqcqsmcqsiiue($miawkwqioaeasiig) { if (!$this->kcciqwskewsuaemk()->asysewkmisimumay($miawkwqioaeasiig)) { goto mwqcykaeywsmoumm; } ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); mwqcykaeywsmoumm: } private function qeoaoiweucueeuqu(string $eeamcawaiqocomwy, $ymiyawysimukkoso = false) { global $wp_rewrite; $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\157\163\x74"]) as $miawkwqioaeasiig) { $mkomwsiykqigmqca = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\x61\164\x68"]; if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto iyyaiuccouqowyga; } foreach (ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca) as $igqsaukqcqscimok) { if (!ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok)) { goto icuukwkwqeoogyae; } $this->kcciqwskewsuaemk()->remove(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok)); icuukwkwqeoogyae: aycqgowuwagcgque: } iauwkeeaqsgweeoo: if (!$ymiyawysimukkoso) { goto iwcmgioeaiyuacwi; } $this->wgokqcqsmcqsiiue(trailingslashit($mkomwsiykqigmqca) . $wp_rewrite->pagination_base); iwcmgioeaiyuacwi: iyyaiuccouqowyga: ywoyioqqyuocoygk: } awgmyaycugswmwae: } public function gqguucgwsqasamke($qcqaayguacmuykwi, $mkomwsiykqigmqca = '', $iuomscuiswckwcoe = false) { if (!$mkomwsiykqigmqca) { goto cksomiiqscosigke; } if (!is_array($mkomwsiykqigmqca)) { goto ikqagqacuwcgwmqy; } $oegoegssokkyiqam = $mkomwsiykqigmqca; goto gcogomgmqcgkeceg; ikqagqacuwcgwmqy: $oegoegssokkyiqam = [$mkomwsiykqigmqca]; gcogomgmqcgkeceg: goto ugmukcwgcioqgywy; cksomiiqscosigke: $oegoegssokkyiqam = $this->iwqysmawycmsmces(); ugmukcwgcioqgywy: if (isset($eewgemuwouukmwgk[$qcqaayguacmuykwi])) { goto eeomcmuiqwgwwuqk; } $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca = trailingslashit($mkomwsiykqigmqca); try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($mkomwsiykqigmqca)); } catch (Exception $iewosgggaueeyymg) { return []; } $ucccueqywigcukcc = sprintf("\57\45\x31\44\163\x25\x32\x24\163\x28\56\52\x29\57\x69", ManipulateFile::cgwcgscqeqauaagi($mkomwsiykqigmqca, true), $qcqaayguacmuykwi); try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$qcqaayguacmuykwi][] = ManipulateFile::scikcaaaiwcsqowm($uwsgakoiqomwikmy); wucacaegysmiusai: } mwwygasiagaqsimo: } catch (Exception $iewosgggaueeyymg) { $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; } euoscysqgugsqewc: } kisccmsaieigisiu: eeomcmuiqwgwwuqk: return $eewgemuwouukmwgk[$qcqaayguacmuykwi]; } public function qagmwwmqiicayaqg(WP_Post $post) { foreach ($this->soycogqiiekoekgq($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy); uookseqsmsqgweuy: } mseokuecmeoyoggk: } public function wsqysyawwwgggowc($ccowyogiqwikkkie, $iwewcwusemqaiggk) { if (!DecoratorUser::scmcyesmmikkucie()) { goto yeaqsiqgakskoykg; } $eeamcawaiqocomwy = wp_nonce_url(ManipulateServer::oiucukewkckkwiqc("\x61\144\x6d\x69\156\x2d\160\157\163\x74\x2e\160\x68\160\x3f\141\x63\x74\151\157\156\75\157\x70\x74\151\x6d\x69\172\141\164\x69\x6f\156\137\x70\x75\x72\147\145\x5f{$this->mwikyscisascoeea()}\46\x74\x79\x70\x65\75\164\145\162\x6d\x2d{$iwewcwusemqaiggk->term_id}\x26\x74\141\170\157\x6e\157\x6d\x79\x3d{$iwewcwusemqaiggk->taxonomy}"), "\157\x70\x74\x69\155\151\172\141\164\x69\x6f\156\137\x70\x75\x72\147\145\137{$this->mwikyscisascoeea()}\137\164\x65\x72\x6d\55{$iwewcwusemqaiggk->term_id}"); $ccowyogiqwikkkie["\x6f\160\x74\x69\x6d\151\x7a\141\x74\151\157\x6e\x5f\x70\x75\162\x67\145\x5f{$this->mwikyscisascoeea()}"] = ManipulateHTML::yuawgssgauywkiia(sprintf(__("\103\154\145\141\x72\40\x74\x68\151\x73\x20\45\163", PR__MDL__OPTIMIZATION), $this->mwikyscisascoeea()), $eeamcawaiqocomwy); yeaqsiqgakskoykg: return $ccowyogiqwikkkie; } private function wgkqeyqiyacgqeso($post) { $cqgoimumaewouews = get_the_time("\x59\55\x6d\55\x64", $post); $auwuoyyagaiegwae = []; if (!$cqgoimumaewouews) { goto esgyqksmcukeuwyk; } $ocogsiouoiuuguym = explode("\x2d", $cqgoimumaewouews); $auwuoyyagaiegwae = [get_year_link($ocogsiouoiuuguym[0]), get_month_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1]), get_day_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1], $ocogsiouoiuuguym[2])]; $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\x70\x6f\163\164\x5f\x64\141\164\x65\x73\x5f\x75\x72\154\163"), $auwuoyyagaiegwae); esgyqksmcukeuwyk: return $auwuoyyagaiegwae; } public function yeimaqssyuewkcgm($post) { foreach ($this->wgkqeyqiyacgqeso($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy, true); ycaqooeeseougumo: } iigmgswcogqemgao: } private function soycogqiiekoekgq(WP_Post $post) { $auwuoyyagaiegwae = []; $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs($post, self::ckmqoekmugkggeym); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!($kesssewsiegssiya instanceof WP_Taxonomy && $kesssewsiegssiya->public && "\x70\162\157\x64\165\x63\164\137\x73\150\x69\x70\x70\x69\x6e\147\137\143\154\141\163\x73" === $kesssewsiegssiya->name)) { goto geoiegikocwmwosi; } $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $kesssewsiegssiya); if (!$uyuaosigqymaqsaa) { goto qykcggwgkweasuii; } foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); if (!$migiiksoiymissge) { goto misiasooemyskoay; } $auwuoyyagaiegwae[] = $migiiksoiymissge; misiasooemyskoay: if (!ManipulateTaxonomy::aewcsqigycuaekym($kesssewsiegssiya)) { goto ukmgwuiqwgyiouec; } $mogoquygwgkamaaw = (array) get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya); foreach ($mogoquygwgkamaaw as $aqguqemekkmogkee) { $uasmmsomeawcggee = ManipulateTerm::get($aqguqemekkmogkee, $kesssewsiegssiya); if (!$uasmmsomeawcggee) { goto sukcyismwageqgok; } $yaycyieqogmsoamk = ManipulateTerm::qmgcisuuikgmqcsu($uasmmsomeawcggee, $kesssewsiegssiya); if (!$yaycyieqogmsoamk) { goto ksqmcugkcmsooeaw; } $auwuoyyagaiegwae[] = $yaycyieqogmsoamk; ksqmcugkcmsooeaw: sukcyismwageqgok: cqkyumayoemqsueu: } eomqeimoequmagum: ukmgwuiqwgyiouec: oysyuiqmsokoykaq: } omqyuuomwywmqeiq: qykcggwgkweasuii: geoiegikocwmwosi: aeockieewgkequae: } eceeoiwuagocweus: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x70\x6f\x73\x74\x5f\x74\145\x72\x6d\163\137\x75\162\154\x73"), $auwuoyyagaiegwae); } public function weikkyiqoogkoyce($swaukaagekiououo = '') { $auwuoyyagaiegwae = !$swaukaagekiououo || is_object($swaukaagekiououo) || is_array($swaukaagekiououo) || is_int($swaukaagekiououo) ? (array) ManipulateI18N::kmmygsqekuksyeuy() : (array) ManipulateI18N::smickumaawgqkmco($swaukaagekiououo); $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\137\x63\x6c\x65\x61\156\x5f\144\157\x6d\x61\151\x6e\x5f\x75\x72\154\x73"), $auwuoyyagaiegwae, $swaukaagekiououo); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); if (!($auwuoyyagaiegwae && $oegoegssokkyiqam)) { goto iicaisyekagswmey; } foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $gwyacgiwokuuwouo = ManipulateI18N::augqukusksqwwuus($swaukaagekiououo, $mkomwsiykqigmqca); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $couygeouymagssgw = $mkomwsiykqigmqca . $msimssikcguyqcac["\x68\x6f\163\x74"] . $msimssikcguyqcac["\x70\141\164\x68"]; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x62\145\146\157\x72\x65\x5f\x63\x6c\145\141\156\x5f\x64\x6f\155\x61\151\156"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\x6f\x73\164"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\x61\164\x68"]; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto quiguyyimiqeqcwa; } if ($iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto eomcuogskessyicy; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); goto isaacywgkascmcsw; eomcuogskessyicy: ManipulateFile::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); isaacywgkascmcsw: quiguyyimiqeqcwa: oyeygeykqwcqoeic: } meiqywmwuoogckss: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\137\141\x66\x74\145\x72\x5f\143\154\145\141\156\137\144\157\x6d\141\x69\x6e"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); ogciikaecauiwgyk: } okawiaowosqickgq: eqsuaywswuesuika: } wasuquysysmqyegg: iicaisyekagswmey: } public function skomiaywsggiyamc($aokagokqyuysuksm, $post) { $auwuoyyagaiegwae = []; $mqqisesagsuooios = Manipulate::yygaymuiikwoakuc($aokagokqyuysuksm); $migiiksoiymissge = str_replace(["\x25\160\157\x73\x74\x6e\x61\155\145\x25", "\x25\x70\141\147\145\156\141\155\x65\45"], $mqqisesagsuooios[1], $mqqisesagsuooios[0]); if (!($this->eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH) !== "\57")) { goto ogwwasqkaageiwwi; } $auwuoyyagaiegwae[] = $migiiksoiymissge; ogwwasqkaageiwwi: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $myyccyuumcscsagc = ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg); if (!$myyccyuumcscsagc) { goto sosqgaswegsomgkw; } global $wp_rewrite; $auwuoyyagaiegwae[] = $myyccyuumcscsagc; $auwuoyyagaiegwae[] = $myyccyuumcscsagc . "{$wp_rewrite->pagination_base}"; sosqgaswegsomgkw: $dokeeoamkysymmqw = []; if (!$dokeeoamkysymmqw) { goto vokekoceocuskqsm; } global $blog_id; $uogwqioiiwqsyksu = DecoratorOption::get("\x68\x6f\155\145"); if (!(!empty($blog_id) && ManipulateServer::gsaomcwyacqcumaa())) { goto eiegguecasykwmyq; } switch_to_blog($blog_id); $uogwqioiiwqsyksu = DecoratorOption::get("\x68\157\155\145"); restore_current_blog(); eiegguecasykwmyq: $scyimseukcmieyuw = ManipulateFormat::kcwgwosqkkkkmuks($uogwqioiiwqsyksu); $uogwqioiiwqsyksu = "{$scyimseukcmieyuw["\163\143\x68\145\x6d\145"]}\72\x2f\x2f{$scyimseukcmieyuw["\150\x6f\163\x74"]}"; $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca .= $scyimseukcmieyuw["\150\x6f\x73\x74"]; foreach ($dokeeoamkysymmqw as $suaemuyiacqyugsm) { if (!strstr($suaemuyiacqyugsm, "\52")) { goto uowiiyqmiaaaaoas; } $meyiiwcswqmuggyg = ManipulateFile::qawkooaucwoseaia($mkomwsiykqigmqca, "\43" . $suaemuyiacqyugsm . "\43\x69"); foreach ($meyiiwcswqmuggyg as $qogsmwakwacwqogk) { $auwuoyyagaiegwae[] = str_replace($mkomwsiykqigmqca, untrailingslashit($uogwqioiiwqsyksu), $qogsmwakwacwqogk->amqagusacuuuaswg()); oeogyayooiwqcmia: } qoiyiuoyamwimusy: goto jyekikocgagcgywq; uowiiyqmiaaaaoas: $auwuoyyagaiegwae[] = trailingslashit($uogwqioiiwqsyksu) . $suaemuyiacqyugsm; jyekikocgagcgywq: } maeueeueqoywkiom: iaywwgssaoecwmeg: } qiiqceousoicgeee: vokekoceocuskqsm: $auwuoyyagaiegwae[] = ManipulatePost::ocigkomwiuwmmkks($post); $eyagosskwwmgwmog = DecoratorPost::iimmeiugygssweyc($aokagokqyuysuksm); if (!(bool) $eyagosskwwmgwmog) { goto kusuakkwcuqkcqaw; } foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) { $auwuoyyagaiegwae[] = ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom); sckyiekoceuisqyq: } ooykyoowougqkaso: kusuakkwcuqkcqaw: return array_flip(array_flip($auwuoyyagaiegwae)); } public function ekcemquyyiqykmoo(?string $yekqqesogweecqyc) { static $gqiuywqwmiieqcww = []; if (isset($gqiuywqwmiieqcww[$yekqqesogweecqyc])) { goto iumgcesksuawyuyo; } $gqiuywqwmiieqcww[$yekqqesogweecqyc] = 1; if (defined("\104\x4f\x49\x4e\107\x5f\101\x55\x54\x4f\x53\101\x56\x45")) { goto iyawqekeeawqkymm; } $post = ManipulatePost::get($yekqqesogweecqyc); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); if (!($post && $useksmwkuswkwcqg && !in_array($useksmwkuswkwcqg, ["\141\164\x74\x61\x63\150\155\145\x6e\164", "\x6e\x61\166\x5f\155\145\156\x75\137\x69\x74\x65\155"]) && !in_array($post->post_status, ["\x64\162\x61\x66\164", "\x61\165\164\157\x2d\144\x72\141\146\164"]))) { goto yagscaikmmuagqcu; } if (!ManipulatePost::qeosassuekcieuuy($useksmwkuswkwcqg)) { goto sigukociqouigous; } $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); $swaukaagekiououo = false; if ("\167\160\x6d\x6c" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\167\x6f\157\x63\x6f\155\155\x65\162\x63\145\55\x6d\x75\x6c\x74\151\x6c\x69\x6e\x67\x75\x61\154\x2f\x77\160\155\154\x2d\167\157\157\143\157\x6d\x6d\145\162\143\145\x2e\x70\x68\x70")) { goto qaycycmeqkqcumog; } if (!("\160\x6f\x6c\x79\154\141\x6e\147" === $eokyomeiuimoaiac && function_exists("\x70\154\154\x5f\x67\x65\164\x5f\160\x6f\x73\164\x5f\154\141\x6e\x67\165\x61\x67\x65"))) { goto sikckcmeiwmyakeu; } $swaukaagekiououo = pll_get_post_language($yekqqesogweecqyc); sikckcmeiwmyakeu: goto ikuwigsmisimaqoc; qaycycmeqkqcumog: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($yekqqesogweecqyc, "\160\x6f\163\x74\x5f" . $useksmwkuswkwcqg); ikuwigsmisimaqoc: $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\142\x65\x66\x6f\162\x65\x5f\143\x6c\145\x61\x6e\x5f\x70\x6f\x73\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\160\x6f\163\x74\x5f\160\x75\162\147\145\137\165\x72\x6c\163"), $owwcaiyoucwcwmmq, $post); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\137\141\146\164\145\162\137\x63\154\x65\x61\156\x5f\x70\157\x73\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); sigukociqouigous: yagscaikmmuagqcu: iyawqekeeawqkymm: iumgcesksuawyuyo: } public function wckuqskowgoaoqom($auwuoyyagaiegwae) { $auwuoyyagaiegwae = array_filter((array) $auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto ioiwoukauoeamuca; } $oegoegssokkyiqam = $this->iwqysmawycmsmces(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\x5f\142\x65\146\157\x72\145\x5f\x63\x6c\145\x61\x6e\137\146\x69\x6c\x65\163"), $auwuoyyagaiegwae); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\142\x65\x66\x6f\162\145\137\143\x6c\x65\141\156\x5f\146\151\x6c\145"), $eeamcawaiqocomwy); $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\157\163\164"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\160\x61\164\x68"]; if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto cceggewquoaemcwq; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); cceggewquoaemcwq: iuwccksomkkouogy: } mesesokuoomcioom: aqwoykqaquewcaki: } omyquyiguuaociwq: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\141\x66\x74\x65\x72\x5f\143\x6c\x65\141\156\x5f\x66\151\154\x65"), $eeamcawaiqocomwy); qaqooueskgciuqgc: } qwosyqcomiosguoa: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x61\x66\x74\x65\x72\137\143\154\x65\141\x6e\137\146\x69\154\x65\x73"), $auwuoyyagaiegwae); ioiwoukauoeamuca: } public function ciyymuaoqiqmucei($swaukaagekiououo = '') { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks(ManipulateI18N::csacaukgwwayassy($swaukaagekiououo)); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $couygeouymagssgw = $mkomwsiykqigmqca . $mgoiyiawsmmgasic["\150\x6f\x73\x74"] . "\x2a" . untrailingslashit($mgoiyiawsmmgasic["\160\x61\x74\150"]); $couygeouymagssgw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\x63\154\145\x61\x6e\x5f\x68\x6f\155\x65\x5f\162\157\157\x74"), $couygeouymagssgw, $mgoiyiawsmmgasic["\150\x6f\x73\164"], $mgoiyiawsmmgasic["\x70\141\164\x68"]); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\142\145\146\x6f\162\x65\x5f\x63\x6c\145\141\x6e\137\x68\x6f\155\x65"), $couygeouymagssgw, $swaukaagekiououo); $ucasskoyoewwmmii = glob($couygeouymagssgw . "\57\173\x69\156\x64\145\x78\x2c\x69\x6e\144\x65\x78\55\52\x7d\x2e\173\150\x74\x6d\x6c\x2c\x68\164\x6d\154\137\147\x7a\151\160\x7d", GLOB_BRACE | GLOB_NOSORT); if (!$ucasskoyoewwmmii) { goto qsaoyggkqwcgskwk; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $this->kcciqwskewsuaemk()->remove($qogsmwakwacwqogk); equwcsciiggsuiam: } oiywguooqeasueqq: qsaoyggkqwcgskwk: global $wp_rewrite; $qmwoqyacswkwkiog = glob($couygeouymagssgw . "\x2a\x2f" . $wp_rewrite->pagination_base, GLOB_NOSORT); if (!$qmwoqyacswkwkiog) { goto yugmwomumkosucsc; } foreach ($qmwoqyacswkwkiog as $miawkwqioaeasiig) { ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); awkqcyusycccekwq: } myooisakyuggoggc: yugmwomumkosucsc: $lgqgmusqcgekwgui = glob($couygeouymagssgw . "\x2f\x2e\x6d\x6f\142\151\154\x65\55\x61\x63\164\151\166\145", GLOB_BRACE | GLOB_NOSORT); if (!$lgqgmusqcgekwgui) { goto aqksouwmeckaqyaq; } foreach ($lgqgmusqcgekwgui as $eagqciqqakiuokus) { $this->kcciqwskewsuaemk()->remove($eagqciqqakiuokus); ykogqmmywykgouqy: } kqwyogqqwumumiwg: aqksouwmeckaqyaq: $okyqgikguumqkcas = glob($couygeouymagssgw . "\x2f\56\156\x6f\55\x77\x65\x62\160", GLOB_BRACE | GLOB_NOSORT); if (!$okyqgikguumqkcas) { goto ayucsuwsiocgycww; } foreach ($okyqgikguumqkcas as $kaggcuumyeuscqui) { $this->kcciqwskewsuaemk()->remove($kaggcuumyeuscqui); eiicmcasqikiyasw: } gmsyoscesymiwwue: ayucsuwsiocgycww: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\x61\x66\x74\145\162\137\x63\x6c\145\x61\x6e\137\150\157\155\x65"), $couygeouymagssgw, $swaukaagekiououo); owismwmeqcmukagu: } oqckuigyqswmqcqg: } public function uqigacqieikayuac() { $auwuoyyagaiegwae = []; $auwuoyyagaiegwae[] = get_feed_link(); $auwuoyyagaiegwae[] = get_feed_link("\143\x6f\155\155\145\x6e\164\x73\x5f"); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x63\x6c\145\x61\156\x5f\150\157\155\145\x5f\146\x65\x65\x64\163"), $auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\142\x65\146\157\x72\x65\137\x63\154\145\x61\156\137\x68\x6f\155\145\137\x66\145\x65\x64\163"), $auwuoyyagaiegwae); self::wckuqskowgoaoqom($auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\141\146\164\x65\x72\137\143\x6c\x65\x61\x6e\x5f\150\157\155\x65\137\146\145\x65\x64\x73"), $auwuoyyagaiegwae); } public function suiuswewcumcyqms($mceokigoiqekskwe, $uemuuqsgymiqyuuu) { $owwcaiyoucwcwmmq = []; $iwewcwusemqaiggk = DecoratorTerm::woimamkkeyoyauoa("\151\144", $mceokigoiqekskwe, $uemuuqsgymiqyuuu); $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); if ("\x77\x70\155\x6c" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\x6f\x6f\x63\x6f\155\x6d\145\x72\143\x65\x2d\x6d\x75\154\x74\x69\x6c\151\x6e\147\x75\141\154\57\x77\x70\x6d\154\x2d\167\x6f\157\143\157\x6d\155\x65\x72\x63\x65\x2e\160\x68\x70")) { goto swesqeqmagkicuws; } if ("\x70\x6f\x6c\171\x6c\141\x6e\147" === $eokyomeiuimoaiac && function_exists("\160\x6c\x6c\x5f\147\145\x74\137\x74\x65\x72\155\137\x6c\x61\156\147\x75\x61\x67\145")) { goto smmagoyuqoigoesc; } $swaukaagekiououo = false; goto wsqeiwkgoiekwasy; smmagoyuqoigoesc: $swaukaagekiououo = pll_get_term_language($mceokigoiqekskwe); wsqeiwkgoiekwasy: goto cwyaysecsakaqgew; swesqeqmagkicuws: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($mceokigoiqekskwe, "\164\x61\x78\x5f" . $uemuuqsgymiqyuuu); cwyaysecsakaqgew: $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $uemuuqsgymiqyuuu); if (!("\x2f" !== $this->eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH))) { goto kgqgcggccmiwayua; } $owwcaiyoucwcwmmq[] = $migiiksoiymissge; kgqgcggccmiwayua: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\142\145\146\x6f\x72\145\x5f\x63\x6c\145\141\156\x5f\164\x65\x72\x6d"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\x5f\164\145\x72\x6d\137\160\165\162\147\x65\x5f\x75\162\x6c\x73"), $owwcaiyoucwcwmmq, $iwewcwusemqaiggk); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137\x61\x66\x74\x65\x72\x5f\x63\154\x65\x61\x6e\x5f\164\145\162\x6d"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); } public function eyayuwiqsqsmkamc(?string $eeamcawaiqocomwy, ?string $wksoawcgagcgoask) { return _get_component_from_parsed_url_array(ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy), $wksoawcgagcgoask); } }
