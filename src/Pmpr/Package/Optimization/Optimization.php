<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d55de5ebbe6             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\Optimization\Asset\Asset; use Pmpr\Package\Optimization\Buffer\Config; use Pmpr\Package\Optimization\Buffer\Test; use Pmpr\Package\Optimization\Bypass\Bypass; use Pmpr\Package\Optimization\Cloudflare\Cloudflare; use Pmpr\Package\Optimization\Manipulate\Manipulate; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; use Pmpr\Package\Optimization\Origin\Origin; use Pmpr\Package\Optimization\Page\Page; use Pmpr\Package\Optimization\Page\Model as PageModel; use Pmpr\Package\Optimization\Preloader\Preloader; use Pmpr\Package\Optimization\Purge\Purge; use WP_Post_Type; class Optimization extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__); if (!$this->gmiyqqaekqcsoime()) { goto wsqeiwkgoiekwasy; } parent::__construct(); $this->cyowaaeywssoooeo(); wsqeiwkgoiekwasy: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\137\x69\x6e\151\x74", [$this, "\171\145\171\151\x67\165\x79\145\x67\155\155\171\x75\163\145\141"])->qcsmikeggeemccuu("\141\x64\155\151\156\x5f\155\x65\156\165", [$this, "\145\x75\161\x67\x77\x69\163\x63\x77\147\x71\x6b\161\153\x65\143"])->qcsmikeggeemccuu("\x74\145\155\160\154\141\164\x65\137\162\x65\x64\x69\x72\145\x63\164", [$this, "\147\x69\167\171\163\153\x77\167\155\x63\x69\x65\x75\x61\143\x71"])->qcsmikeggeemccuu("\x61\x66\164\x65\162\137\x73\x65\x74\x75\x70\x5f\164\150\x65\x6d\145", [$this, "\151\145\x6d\x61\x61\153\x67\161\x67\x71\157\163\151\145\x63\x6d"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x72\145\x6e\x64\145\x72\x5f\163\164\x61\164\x69\x73\164\151\x63\163"), [$this, "\163\171\x61\161\167\x6f\161\x67\163\x71\141\141\161\143\x65\147"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x66\157\x72\155\137\155\x61\153\145\162\137\x62\145\146\157\x72\x65\x5f\164\141\142\163"), [$this, "\x61\x67\x79\x79\x73\171\167\x71\145\x6f\x6f\x69\x6f\155\x79\x61"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\137\x67\145\164\137\163\164\141\x74\x69\163\164\x69\143\163\137\150\164\155\x6c"), [$this, "\151\x69\157\x6d\141\x67\x6d\x73\153\x77\x69\x61\167\x67\171\157"], 10, 2); } public function iemaakgqgqosiecm() { Page::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Purge::symcgieuakksimmu(); Bypass::symcgieuakksimmu(); Origin::symcgieuakksimmu(); Preloader::symcgieuakksimmu(); Cloudflare::symcgieuakksimmu(); } public function agyysywqeooiomya() { if (!$this->kmuweyayaqoeqiyw()->eaiyegoagkgeowae()) { goto swesqeqmagkicuws; } $this->syaqwoqgsqaaqceg(); swesqeqmagkicuws: } protected function uyeaqmeewagakagw() : array { $uymyaeeowcuoksgm = 0; $gyiuucqgwckqiiqe = Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym); foreach ($gyiuucqgwckqiiqe as $ymqmyyeuycgmigyo => $sqeykgyoooqysmca) { if (!$sqeykgyoooqysmca instanceof WP_Post_Type) { goto rgaagksgsewuwgmo; } $gaeqamemwmwsyukm = ManipulatePost::wsqeykgqiemswysa($ymqmyyeuycgmigyo); $uymyaeeowcuoksgm += $gaeqamemwmwsyukm; $ygqyiqguoomyooyq = ManipulatePage::eokiwumgqmymgyoa(); if (!($ymqmyyeuycgmigyo !== self::imywcsggckkcywgk || (!$ygqyiqguoomyooyq || $ymqmyyeuycgmigyo !== self::mswoacegomcucaik))) { goto kwayumouacgkgyas; } $uymyaeeowcuoksgm++; kwayumouacgkgyas: rgaagksgsewuwgmo: kgqgcggccmiwayua: } cwyaysecsakaqgew: $iuekmkswcsacoawq = PageModel::symcgieuakksimmu(); return ["\141\154\x6c" => [self::ciyoccqkiamemcmm => $uymyaeeowcuoksgm, self::qescuiwgsyuikume => __("\123\x69\x74\145\x20\x50\141\147\x65\163", PR__PKG__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes], "\x62\165\x64\x67\145\164" => [self::ciyoccqkiamemcmm => $this->eiykqgmgyuowgeog(), self::qescuiwgsyuikume => __("\101\154\154\40\x59\x6f\x75\162\x20\102\x75\144\147\145\164", PR__PKG__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes], "\165\x73\x65\x64" => [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ggcikeumgqoockyo(), self::qescuiwgsyuikume => __("\125\x73\145\x64\x20\x42\165\144\x67\145\x74", PR__PKG__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes], "\162\145\x6d\141\x69\x6e" => [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ewcikckouwmuqkms(), self::qescuiwgsyuikume => __("\x52\145\155\141\x69\156\x69\156\147\x20\102\x75\144\147\x65\x74", PR__PKG__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes]]; } public function iiomagmskwiawgyo($nsmgceoqaqogqmuw, $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $this->uyeaqmeewagakagw(), "\142\165\164\164\x6f\x6e\x73" => ["\165\x70\x64\141\x74\145" => [self::ELEMENT => "\141", self::qescuiwgsyuikume => __("\x55\x70\x64\141\x74\145\40\116\x75\155\142\145\162\x73", PR__PKG__OPTIMIZATION), self::ysskgssgwuwmqwym => ["\143\154\141\x73\x73" => "\x62\164\x6e\x20\x62\164\x6e\x2d\163\x65\x63\x6f\x6e\x64\141\162\171\x20\x75\160\144\141\x74\x65\55\x62\x75\x64\147\x65\164\x20\155\x62\x2d\x32", "\150\162\x65\146" => "\x23"]], "\142\165\x79" => [self::ELEMENT => "\x61", self::qescuiwgsyuikume => __("\x49\156\x63\x72\145\141\x73\x65\x20\102\165\144\x67\x65\164", PR__PKG__OPTIMIZATION), self::ysskgssgwuwmqwym => ["\143\154\x61\163\163" => "\142\x74\156\x20\x62\x74\x6e\55\x70\x72\x69\155\141\162\x79", "\x68\162\145\x66" => self::couwksyewgyeooqe()->giiuwsmyumqwwiyq(self::sauwwsocmukoaayu), "\x74\x61\162\x67\145\x74" => "\137\142\x6c\141\156\x6b"]]], "\154\x65\166\145\x6c\137\155\x65\163\163\x61\147\145" => ManipulateHTML::oockkqiqsssakuug(sprintf(__("\x25\x73\40\157\x70\x74\x69\x6d\x69\172\x61\x74\151\157\x6e\x20\141\160\x70\154\x79\40\141\x75\x74\x6f\155\x61\x74\x69\143\141\x6c\x6c\x79\x20\x74\x6f\40\x61\154\x6c\x20\160\x61\x67\145\163\40\x77\151\164\150\x6f\165\164\x20\x74\150\145\x20\156\x65\x65\144\x20\x66\x6f\x72\x20\x61\40\142\165\144\147\145\x74\56", PR__PKG__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\x4c\145\x76\145\x6c\x20\61", PR__PKG__OPTIMIZATION))), self::smkwuwawwaqyimcq, [], false, true)]); return $this->iuygowkemiiwqmiw("\x73\x74\141\164\151\163\164\x69\143", $ywmkwiwkosakssii); } public function syaqwoqgsqaaqceg($ywmkwiwkosakssii = []) { echo $this->iiomagmskwiawgyo('', $ywmkwiwkosakssii); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\120\x52\137\x5f\103\101\103\x48\105\137\x5f\120\101\124\x48")) { goto mcmcocyuugueaeww; } Notice::ymqcyaqqcyuicwqu("\x6f\x70\164\x69\155\x69\172\141\x74\151\157\x6e\55\143\157\x6e\146\x69\x67\55\160\x61\x74\x68", __("\x4f\x70\164\151\155\x69\172\x61\x74\151\x6f\156\x20\x43\157\x6e\x66\x69\x67\x20\120\141\x74\150", PR__PKG__OPTIMIZATION), $skacuygeqykiwiwy); goto eucakkcoiiwkwsme; mcmcocyuugueaeww: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck(self::muqmwceaiwwakwws, "{$skacuygeqykiwiwy}\57\x63\157\156\146\x69\x67"); eucakkcoiiwkwsme: return $ksaameoqigiaoigg; } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto agsuaimomgsoyiem; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\x64\x6d\x69\156", $eygsasmqycagyayw->get("\x61\x64\x6d\151\x6e\56\152\x73"))->ayuciigykaswwqeo("\152\161\x75\145\x72\171"))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x61\144\x6d\151\x6e", $eygsasmqycagyayw->get("\x61\144\x6d\x69\x6e\x2e\x63\x73\x73"))); $usmiuwiumyygmucg = DecoratorOption::get(self::gwccmwywmiccammg); if ($usmiuwiumyygmucg) { goto iwsaaiggkciigsmc; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\x75\160\x64\141\164\145\137\x68\145\162\x6f\153\165\x5f\141\x70\160\163")); iwsaaiggkciigsmc: agsuaimomgsoyiem: } public function euqgwiscwgqkqkec() { ManipulateMenu::aemwscceysomkuea(["\160\x61\147\145\137\x74\151\164\154\145" => __("\x4f\160\x74\x69\155\x69\x7a\141\164\151\157\156", PR__PKG__OPTIMIZATION), "\155\x65\x6e\165\137\163\x6c\165\x67" => $this->akuociswqmoigkas(), "\160\157\163\x69\x74\151\x6f\x6e" => 1]); } public function giwyskwwmcieuacq() { $uiewakwqscemywuo = new Config(["\x70\141\x74\x68" => Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws)]); new Buffer(new Test($uiewakwqscemywuo, ["\x6c\x6f\x67\147\145\162" => $this->ygaescewwyaseaoy()])); } public function ymioscmsquoqmasi() : array { $ucasskoyoewwmmii = []; $auwuoyyagaiegwae = [ManipulateI18N::auksikwsewaywikq()]; $kymsmcekmemqmews = ManipulateI18N::yeaukamowmkwaowi(); if (!$kymsmcekmemqmews) { goto kygccamgawookukq; } $auwuoyyagaiegwae = $kymsmcekmemqmews; kygccamgawookukq: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $yckucuyiaykemqea = Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws); $qogsmwakwacwqogk = ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy); if (!$yckucuyiaykemqea) { goto ooooceiweeackgie; } $mkomwsiykqigmqca = ManipulateArray::get($qogsmwakwacwqogk, "\160\141\x74\x68"); $qogsmwakwacwqogk["\x70\x61\164\150"] = $mkomwsiykqigmqca ? str_replace("\57", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\x6f\163\164"]) . $qogsmwakwacwqogk["\160\x61\164\x68"] . "\56\160\150\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; ooooceiweeackgie: kuaiscyqkgcouiye: } qysmyemoucigsmua: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\143\x6f\x6e\x66\151\x67\x75\x72\141\164\x69\x6f\x6e\137\146\151\x6c\x65\x73\x5f\160\x61\164\150"), $ucasskoyoewwmmii); } public function qayieuscsskiqacs() { $ucasskoyoewwmmii = $this->ymioscmsquoqmasi(); if (!(is_array($ucasskoyoewwmmii) && $ucasskoyoewwmmii)) { goto suiywiakesiegcwu; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto yccuomocgmewkeca; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto ocwouquuwsaqakae; } Notice::ymqcyaqqcyuicwqu("\157\160\164\x69\155\x69\x7a\141\164\151\x6f\x6e\x2d\143\x6f\x6e\x66\x69\147", $mkomwsiykqigmqca); goto gcaykgmmmqomsyis; ocwouquuwsaqakae: foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto swuggqyiaiqywgge; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = ManipulateString::amkcmaguoecyiscg($uiewakwqscemywuo); swuggqyiaiqywgge: qoacckkkwsqkokye: } tagquiiokseckkqs: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\157\x6e\x66\x69\147\56\x70\150\x70", ["\143\157\156\x66\151\x67\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\100\x61\x72\x72\141\171\134\163\53\x5c\50\100\151", "\x61\x72\x72\x61\171\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\141\x72\x72\x61\x79\134\50\134\163\x2b\x5c\x29\100\x69", "\x61\x72\x72\x61\171\x28\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); Notice::info(sprintf(__("\117\160\164\x69\x6d\151\172\141\x74\151\x6f\156\x20\x63\x6f\x6e\x66\x69\x67\x20\146\x69\x6c\145\40\x25\x73\x20\147\x65\x6e\x65\162\x61\164\145\144\x20\x69\x6e\x20\x25\x73", PR__PKG__OPTIMIZATION), "\74\143\157\x64\145\x3e{$qogsmwakwacwqogk}\74\x2f\x63\x6f\144\145\76", "\x3c\x63\157\x64\x65\x3e{$mkomwsiykqigmqca}\x3c\x2f\143\157\x64\x65\x3e"), "\x6f\160\164\x69\x6d\151\172\141\164\x69\157\x6e\55\143\157\156\x66\151\x67"); gcaykgmmmqomsyis: yccuomocgmewkeca: qwiyicoywcekgyce: } gkeymcqqsewayscs: suiywiakesiegcwu: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $oyuikeusicgqgwak = ["\x64\x65\142\165\x67\x5f\x6d\157\144\145" => $this->weysguygiseoukqw(Setting::cmgikuaeswggsasy, false), "\x63\x6f\x6f\x6b\x69\145\137\150\141\163\x68" => Manipulate::cmaecekuqkwmemms("\103\x4f\117\113\111\x45\110\101\123\110"), "\x72\145\152\x65\x63\x74\137\143\157\x6f\153\x69\x65\x73" => $this->mukwwwucwusmmqau(), "\154\157\147\147\x65\x64\x5f\x69\x6e\x5f\143\x6f\157\x6b\151\x65" => Manipulate::cmaecekuqkwmemms("\114\117\107\107\x45\x44\x5f\111\x4e\x5f\113\105\131")]; return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\x5f\143\x6f\x6e\x66\x69\147\165\x72\141\x74\151\157\156\x73"), $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\162\145\x67\x5f\x71\x75\157\x74\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\x2e\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\160\55\160\157\x73\164\160\x61\163\163\137"; $osqkgokmuiasuukg[] = "\x77\x70\x74\157\x75\x63\150\x5f\163\167\151\x74\x63\150\137\164\157\x67\x67\x6c\x65"; $osqkgokmuiasuukg[] = "\143\157\x6d\155\145\x6e\164\137\x61\165\164\150\x6f\162\x5f"; $osqkgokmuiasuukg[] = "\143\157\155\x6d\145\x6e\164\137\x61\165\x74\x68\x6f\x72\137\x65\155\x61\151\154\x5f"; $osqkgokmuiasuukg = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\x72\145\152\x65\x63\164\x5f\143\157\x6f\x6b\x69\145\163"), $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
