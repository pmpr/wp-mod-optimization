<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c3699ff30b7             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\Optimization\API\Manager; use Pmpr\Package\Optimization\Asset\Asset; use Pmpr\Package\Optimization\Buffer\Config; use Pmpr\Package\Optimization\Buffer\Test; use Pmpr\Package\Optimization\Bypass\Bypass; use Pmpr\Package\Optimization\Cloudflare\Cloudflare; use Pmpr\Package\Optimization\Manipulate\Manipulate; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; use Pmpr\Package\Optimization\Origin\Origin; use Pmpr\Package\Optimization\Page\Page; use Pmpr\Package\Optimization\Page\Model as PageModel; use Pmpr\Package\Optimization\Preloader\Preloader; use Pmpr\Package\Optimization\Purge\Purge; use WP_Post_Type; class Optimization extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__); if (!$this->gmiyqqaekqcsoime()) { goto oiywguooqeasueqq; } parent::__construct(); $this->cyowaaeywssoooeo(); oiywguooqeasueqq: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\x69\x6e\x5f\151\156\151\164", [$this, "\171\x65\x79\x69\x67\x75\x79\145\147\155\155\171\165\163\145\x61"])->qcsmikeggeemccuu("\141\x64\155\x69\156\137\x6d\x65\x6e\165", [$this, "\145\x75\x71\147\167\151\x73\x63\x77\147\161\153\x71\153\145\143"])->qcsmikeggeemccuu("\x74\x65\155\x70\x6c\x61\x74\145\137\x72\145\x64\x69\162\x65\x63\164", [$this, "\147\151\x77\171\x73\153\x77\x77\155\x63\x69\145\165\141\x63\x71"])->qcsmikeggeemccuu("\141\x66\x74\145\162\x5f\x73\145\164\x75\160\x5f\164\x68\145\x6d\145", [$this, "\151\145\x6d\141\141\x6b\x67\161\147\x71\157\163\151\x65\143\x6d"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\164\x5f\x72\145\x6e\144\145\x72\x5f\x73\164\x61\x74\x69\163\x74\151\x63\x73"), [$this, "\163\171\x61\x71\x77\157\x71\147\x73\x71\141\141\x71\143\x65\x67"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x66\157\x72\x6d\x5f\155\x61\153\145\x72\137\142\x65\146\x6f\x72\x65\137\164\141\x62\163"), [$this, "\141\147\x79\171\x73\171\x77\161\145\x6f\157\x69\x6f\x6d\x79\141"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\x5f\x67\x65\164\x5f\163\164\x61\164\151\x73\x74\151\x63\163\x5f\150\x74\x6d\154"), [$this, "\151\x69\x6f\x6d\141\147\x6d\x73\x6b\167\x69\141\x77\x67\x79\157"], 10, 2); } public function agyysywqeooiomya() { if (!$this->kmuweyayaqoeqiyw()->eaiyegoagkgeowae()) { goto equwcsciiggsuiam; } $this->syaqwoqgsqaaqceg(); equwcsciiggsuiam: } protected function uyeaqmeewagakagw() : array { $uymyaeeowcuoksgm = 0; $gyiuucqgwckqiiqe = Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym); foreach ($gyiuucqgwckqiiqe as $ymqmyyeuycgmigyo => $sqeykgyoooqysmca) { if (!$sqeykgyoooqysmca instanceof WP_Post_Type) { goto yugmwomumkosucsc; } $gaeqamemwmwsyukm = ManipulatePost::wsqeykgqiemswysa($ymqmyyeuycgmigyo); $uymyaeeowcuoksgm += $gaeqamemwmwsyukm; $ygqyiqguoomyooyq = ManipulatePage::eokiwumgqmymgyoa(); if (!($ymqmyyeuycgmigyo !== self::imywcsggckkcywgk || (!$ygqyiqguoomyooyq || $ymqmyyeuycgmigyo !== self::mswoacegomcucaik))) { goto awkqcyusycccekwq; } $uymyaeeowcuoksgm++; awkqcyusycccekwq: yugmwomumkosucsc: myooisakyuggoggc: } qsaoyggkqwcgskwk: $iuekmkswcsacoawq = PageModel::symcgieuakksimmu(); return ["\x61\x6c\154" => [self::ciyoccqkiamemcmm => $uymyaeeowcuoksgm, self::qescuiwgsyuikume => __("\123\151\164\x65\x20\x50\141\147\x65\x73", PR__PKG__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes], "\x62\165\144\147\x65\164" => [self::ciyoccqkiamemcmm => $this->eiykqgmgyuowgeog(), self::qescuiwgsyuikume => __("\101\154\x6c\x20\x59\157\165\x72\x20\x42\165\x64\147\x65\164", PR__PKG__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes], "\x75\163\145\144" => [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ggcikeumgqoockyo(), self::qescuiwgsyuikume => __("\x55\163\145\x64\x20\102\165\x64\x67\x65\x74", PR__PKG__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes], "\162\x65\x6d\x61\151\156" => [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ewcikckouwmuqkms(), self::qescuiwgsyuikume => __("\122\x65\155\141\151\156\x69\156\x67\x20\x42\x75\144\147\x65\164", PR__PKG__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes]]; } public function iiomagmskwiawgyo($nsmgceoqaqogqmuw, $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $this->uyeaqmeewagakagw(), "\x62\x75\164\164\157\x6e\x73" => ["\165\x70\x64\x61\x74\145" => [self::ELEMENT => "\x61", self::qescuiwgsyuikume => __("\x55\160\144\x61\164\145\x20\116\165\155\142\x65\x72\x73", PR__PKG__OPTIMIZATION), self::ysskgssgwuwmqwym => ["\x63\x6c\141\163\x73" => "\x62\164\x6e\40\142\x74\156\55\163\145\x63\x6f\x6e\144\x61\x72\171\40\165\x70\x64\141\164\x65\x2d\x62\165\x64\147\x65\164\40\155\x62\55\62", "\150\x72\x65\x66" => "\43"]], "\x62\x75\x79" => [self::ELEMENT => "\141", self::qescuiwgsyuikume => __("\x49\156\x63\x72\x65\141\163\145\40\102\x75\144\147\145\164", PR__PKG__OPTIMIZATION), self::ysskgssgwuwmqwym => ["\143\154\141\163\163" => "\142\x74\156\40\142\164\156\55\x70\162\151\155\141\162\171", "\150\x72\145\x66" => self::couwksyewgyeooqe()->giiuwsmyumqwwiyq(self::sauwwsocmukoaayu), "\164\141\x72\147\x65\164" => "\x5f\x62\154\141\x6e\x6b"]]], "\x6c\145\166\145\154\x5f\155\145\163\x73\141\x67\x65" => ManipulateHTML::oockkqiqsssakuug(sprintf(__("\45\x73\40\x6f\x70\x74\151\x6d\151\x7a\x61\x74\x69\157\156\40\141\160\160\154\x79\40\141\165\164\157\x6d\x61\x74\x69\x63\x61\154\x6c\171\x20\x74\157\x20\141\x6c\x6c\x20\x70\141\x67\x65\163\x20\167\151\x74\x68\157\165\164\40\x74\150\x65\40\x6e\145\x65\x64\x20\x66\x6f\x72\40\x61\x20\142\165\144\x67\145\164\56", PR__PKG__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\x4c\145\x76\x65\154\40\61", PR__PKG__OPTIMIZATION))), self::smkwuwawwaqyimcq, [], false, true)]); return $this->iuygowkemiiwqmiw("\163\x74\141\164\x69\163\x74\x69\143", $ywmkwiwkosakssii); } public function syaqwoqgsqaaqceg($ywmkwiwkosakssii = []) { echo $this->iiomagmskwiawgyo('', $ywmkwiwkosakssii); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\x50\122\137\137\x43\101\103\x48\105\x5f\x5f\x50\x41\124\110")) { goto kqwyogqqwumumiwg; } Notice::ymqcyaqqcyuicwqu("\157\x70\x74\x69\x6d\151\172\x61\x74\x69\x6f\156\x2d\x63\x6f\156\x66\x69\147\x2d\x70\x61\164\150", __("\x4f\x70\164\151\155\x69\172\141\x74\x69\157\156\x20\x43\157\156\146\151\147\x20\x50\141\x74\150", PR__PKG__OPTIMIZATION), $skacuygeqykiwiwy); goto ykogqmmywykgouqy; kqwyogqqwumumiwg: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck(self::muqmwceaiwwakwws, "{$skacuygeqykiwiwy}\x2f\x63\x6f\x6e\146\151\x67"); ykogqmmywykgouqy: return $ksaameoqigiaoigg; } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto eiicmcasqikiyasw; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\141\144\x6d\x69\x6e", $eygsasmqycagyayw->get("\141\x64\155\151\x6e\56\x6a\163"))->ayuciigykaswwqeo("\x6a\161\x75\x65\162\x79"))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\141\x64\155\151\x6e", $eygsasmqycagyayw->get("\141\144\x6d\151\x6e\x2e\x63\163\x73"))); $usmiuwiumyygmucg = DecoratorOption::get(self::gwccmwywmiccammg); if ($usmiuwiumyygmucg) { goto gmsyoscesymiwwue; } $usmiuwiumyygmucg = Manager::symcgieuakksimmu()->mksgiocmqcaikoem(); if (!(!is_wp_error($usmiuwiumyygmucg) && is_array($usmiuwiumyygmucg) && $usmiuwiumyygmucg)) { goto aqksouwmeckaqyaq; } DecoratorOption::update(self::gwccmwywmiccammg, $usmiuwiumyygmucg); aqksouwmeckaqyaq: gmsyoscesymiwwue: eiicmcasqikiyasw: } public function iemaakgqgqosiecm() { Page::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Purge::symcgieuakksimmu(); Bypass::symcgieuakksimmu(); Origin::symcgieuakksimmu(); Preloader::symcgieuakksimmu(); Cloudflare::symcgieuakksimmu(); } public function euqgwiscwgqkqkec() { ManipulateMenu::aemwscceysomkuea(["\160\x61\x67\x65\137\x74\151\164\154\x65" => __("\117\160\164\151\x6d\151\x7a\141\164\x69\x6f\x6e", PR__PKG__OPTIMIZATION), "\x6d\145\x6e\165\137\x73\154\x75\147" => $this->akuociswqmoigkas(), "\x70\157\x73\x69\x74\151\x6f\156" => 1]); } public function giwyskwwmcieuacq() { $uiewakwqscemywuo = new Config(["\160\x61\164\150" => Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws)]); new Buffer(new Test($uiewakwqscemywuo, ["\154\x6f\x67\x67\x65\x72" => $this->ygaescewwyaseaoy()])); } public function ymioscmsquoqmasi() : array { $ucasskoyoewwmmii = []; $auwuoyyagaiegwae = [ManipulateI18N::auksikwsewaywikq()]; $kymsmcekmemqmews = ManipulateI18N::yeaukamowmkwaowi(); if (!$kymsmcekmemqmews) { goto ayucsuwsiocgycww; } $auwuoyyagaiegwae = $kymsmcekmemqmews; ayucsuwsiocgycww: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $yckucuyiaykemqea = Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws); $qogsmwakwacwqogk = ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy); if (!$yckucuyiaykemqea) { goto swesqeqmagkicuws; } $mkomwsiykqigmqca = ManipulateArray::get($qogsmwakwacwqogk, "\160\x61\164\x68"); $qogsmwakwacwqogk["\160\x61\164\x68"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\x6f\x73\164"]) . $qogsmwakwacwqogk["\x70\x61\164\x68"] . "\56\160\150\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; swesqeqmagkicuws: wsqeiwkgoiekwasy: } smmagoyuqoigoesc: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x63\x6f\x6e\146\151\x67\165\x72\141\164\x69\157\x6e\x5f\146\x69\154\145\163\x5f\160\x61\164\x68"), $ucasskoyoewwmmii); } public function qayieuscsskiqacs() { $ucasskoyoewwmmii = $this->ymioscmsquoqmasi(); if (!(is_array($ucasskoyoewwmmii) && $ucasskoyoewwmmii)) { goto kygccamgawookukq; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto agsuaimomgsoyiem; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto eucakkcoiiwkwsme; } Notice::ymqcyaqqcyuicwqu("\157\x70\164\151\x6d\151\172\141\164\x69\x6f\156\55\x63\157\156\146\x69\x67", $mkomwsiykqigmqca); goto iwsaaiggkciigsmc; eucakkcoiiwkwsme: foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto mcmcocyuugueaeww; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = ManipulateString::amkcmaguoecyiscg($uiewakwqscemywuo); mcmcocyuugueaeww: rgaagksgsewuwgmo: } kwayumouacgkgyas: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\157\156\x66\x69\147\x2e\x70\150\x70", ["\x63\157\x6e\146\x69\x67\163" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\x61\x72\x72\x61\x79\x5c\x73\53\x5c\x28\100\151", "\141\162\x72\x61\x79\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\100\141\162\162\x61\171\134\x28\x5c\x73\53\134\51\x40\151", "\141\162\162\141\171\x28\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); Notice::info(sprintf(__("\x4f\160\x74\151\155\151\172\x61\x74\x69\x6f\156\x20\x63\x6f\x6e\146\151\x67\40\x66\151\x6c\x65\40\45\x73\40\x67\145\156\145\162\141\164\x65\x64\x20\151\156\x20\x25\x73", PR__PKG__OPTIMIZATION), "\x3c\x63\x6f\x64\x65\76{$qogsmwakwacwqogk}\x3c\x2f\x63\x6f\144\145\76", "\x3c\143\x6f\x64\x65\x3e{$mkomwsiykqigmqca}\74\57\143\157\x64\145\x3e"), "\x6f\160\164\151\x6d\151\x7a\141\x74\151\157\x6e\x2d\x63\x6f\156\x66\x69\x67"); iwsaaiggkciigsmc: agsuaimomgsoyiem: kgqgcggccmiwayua: } cwyaysecsakaqgew: kygccamgawookukq: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $oyuikeusicgqgwak = ["\x64\x65\142\x75\x67\137\x6d\157\144\145" => $this->weysguygiseoukqw(Setting::cmgikuaeswggsasy, false), "\x63\x6f\x6f\x6b\x69\145\x5f\150\141\x73\150" => Manipulate::cmaecekuqkwmemms("\x43\117\x4f\113\111\x45\x48\101\x53\x48"), "\x72\145\x6a\145\x63\164\x5f\143\x6f\x6f\153\151\x65\163" => $this->mukwwwucwusmmqau(), "\154\x6f\x67\147\145\144\x5f\x69\156\x5f\x63\x6f\x6f\x6b\x69\x65" => Manipulate::cmaecekuqkwmemms("\x4c\x4f\107\107\105\104\x5f\111\116\137\113\x45\131")]; return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x63\157\x6e\x66\151\x67\165\x72\141\x74\151\157\156\x73"), $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\x72\x65\147\x5f\x71\x75\x6f\x74\x65", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\x70\55\x70\x6f\x73\164\160\141\x73\163\137"; $osqkgokmuiasuukg[] = "\x77\160\164\157\x75\143\150\x5f\x73\167\151\164\143\150\137\164\157\x67\147\154\145"; $osqkgokmuiasuukg[] = "\x63\x6f\x6d\155\x65\156\164\x5f\141\x75\x74\x68\x6f\x72\x5f"; $osqkgokmuiasuukg[] = "\x63\157\x6d\x6d\145\156\x74\x5f\x61\x75\x74\x68\157\x72\137\145\x6d\141\x69\x6c\x5f"; $osqkgokmuiasuukg = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\162\145\x6a\145\x63\164\137\143\x6f\x6f\x6b\x69\145\163"), $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
