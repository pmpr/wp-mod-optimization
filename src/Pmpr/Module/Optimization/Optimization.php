<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c026a362a9d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Asset\Asset; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Bypass\Bypass; use Pmpr\Module\Optimization\Cloudflare\Cloudflare; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Origin\Origin; use Pmpr\Module\Optimization\Page\Page; use Pmpr\Module\Optimization\Preloader\Preloader; use Pmpr\Module\Optimization\Purge\Purge; class Optimization extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__)->eokmosoqmeiakwki(function () { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x65\x6e\141\142\x6c\145\144"))->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x61\x75\164\157\x5f\x70\x72\145\x6c\157\141\144")); })->gwcqooogwwkcamag(function () { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\x64\151\x73\141\142\x6c\145\144"))->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\x70\x75\162\x67\145\x5f\x63\141\x63\x68\x65")); }); if (!$this->gmiyqqaekqcsoime()) { goto iaywwgssaoecwmeg; } parent::__construct(); $this->cyowaaeywssoooeo(); iaywwgssaoecwmeg: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\137\x69\156\x69\x74", [$this, "\x79\145\171\x69\x67\165\171\145\x67\x6d\x6d\171\165\163\145\141"])->qcsmikeggeemccuu("\x61\144\x6d\x69\x6e\x5f\x6d\x65\156\165", [$this, "\145\x75\161\147\167\x69\x73\143\167\147\x71\x6b\x71\x6b\x65\143"])->qcsmikeggeemccuu("\164\x65\x6d\x70\x6c\141\164\x65\x5f\162\145\x64\x69\x72\x65\143\x74", [$this, "\147\x69\167\x79\x73\153\x77\x77\x6d\143\151\x65\x75\x61\143\x71"])->qcsmikeggeemccuu("\x70\x6c\x75\147\151\x6e\x73\x5f\x6c\x6f\141\144\145\144", [$this, "\x69\x65\155\141\141\153\x67\x71\x67\161\157\163\151\x65\x63\x6d"]); } public function iemaakgqgqosiecm() { Page::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Purge::symcgieuakksimmu(); Bypass::symcgieuakksimmu(); Origin::symcgieuakksimmu(); Preloader::symcgieuakksimmu(); Cloudflare::symcgieuakksimmu(); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\120\x52\137\137\x43\101\x43\x48\x45\137\137\x50\x41\x54\x48")) { goto maeueeueqoywkiom; } $this->syiuacooagmooima("\143\x6f\156\x66\x69\x67\x2d\x70\141\x74\x68", __("\x43\x6f\x6e\146\151\x67\40\x50\x61\x74\150", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); goto jyekikocgagcgywq; maeueeueqoywkiom: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck(self::muqmwceaiwwakwws, "{$skacuygeqykiwiwy}\57\x63\x6f\x6e\x66\x69\147"); jyekikocgagcgywq: return $ksaameoqigiaoigg; } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto uowiiyqmiaaaaoas; } $this->qayieuscsskiqacs(); if (!($eygsasmqycagyayw = $this->miocmcoykayoyyau())) { goto oeogyayooiwqcmia; } $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\x64\155\x69\156", $eygsasmqycagyayw->get("\x61\x64\x6d\151\x6e\56\152\163"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\141\144\x6d\x69\156", $eygsasmqycagyayw->get("\141\144\155\x69\x6e\x2e\x63\x73\x73"))); $usmiuwiumyygmucg = DecoratorOption::get(self::ikmkgmwegyasgqmo); if ($usmiuwiumyygmucg) { goto qoiyiuoyamwimusy; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137\x75\160\144\141\x74\x65\x5f\162\x65\x6d\157\164\145\x5f\x61\x70\160\x73")); qoiyiuoyamwimusy: oeogyayooiwqcmia: uowiiyqmiaaaaoas: } public function euqgwiscwgqkqkec() { ManipulateMenu::aemwscceysomkuea(["\160\141\x67\x65\137\164\151\164\154\145" => __("\117\160\x74\151\155\x69\172\x61\164\x69\x6f\x6e", PR__MDL__OPTIMIZATION), "\x6d\x65\156\x75\x5f\163\154\165\x67" => self::akuociswqmoigkas(), "\160\157\x73\151\x74\x69\x6f\156" => 1]); } public function giwyskwwmcieuacq() { $uiewakwqscemywuo = new Config(["\x70\x61\164\150" => Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws)]); new Buffer(new Test($uiewakwqscemywuo, ["\154\x6f\x67\147\145\x72" => $this->ygaescewwyaseaoy()])); } public function ymioscmsquoqmasi() : array { $ucasskoyoewwmmii = []; $auwuoyyagaiegwae = [ManipulateI18N::auksikwsewaywikq()]; $kymsmcekmemqmews = ManipulateI18N::yeaukamowmkwaowi(); if (!$kymsmcekmemqmews) { goto vokekoceocuskqsm; } $auwuoyyagaiegwae = $kymsmcekmemqmews; vokekoceocuskqsm: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $yckucuyiaykemqea = Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws); $qogsmwakwacwqogk = ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy); if (!$yckucuyiaykemqea) { goto kusuakkwcuqkcqaw; } $mkomwsiykqigmqca = ManipulateArray::get($qogsmwakwacwqogk, "\x70\x61\164\150"); $qogsmwakwacwqogk["\160\x61\164\x68"] = $mkomwsiykqigmqca ? str_replace("\57", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\157\163\x74"]) . $qogsmwakwacwqogk["\160\141\164\150"] . "\56\160\150\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; kusuakkwcuqkcqaw: sckyiekoceuisqyq: } ooykyoowougqkaso: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\x63\157\156\146\x69\x67\x75\x72\141\x74\x69\x6f\156\137\146\x69\154\x65\163\x5f\160\141\164\x68"), $ucasskoyoewwmmii); } public function qayieuscsskiqacs() { if (!($ucasskoyoewwmmii = $this->ymioscmsquoqmasi())) { goto qaqooueskgciuqgc; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto qwosyqcomiosguoa; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto iyawqekeeawqkymm; } $this->syiuacooagmooima("\x63\157\x6e\x66\x69\x67", __("\x43\157\x6e\146\x69\x67\165\162\141\164\151\157\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto iumgcesksuawyuyo; iyawqekeeawqkymm: foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto yagscaikmmuagqcu; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = ManipulateString::amkcmaguoecyiscg($uiewakwqscemywuo); yagscaikmmuagqcu: sigukociqouigous: } ikuwigsmisimaqoc: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\157\156\146\151\x67\x2e\160\x68\x70", ["\143\x6f\x6e\146\151\x67\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\100\141\162\162\141\x79\x5c\x73\x2b\x5c\50\x40\151", "\x61\162\162\x61\171\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\100\x61\162\162\141\x79\x5c\x28\x5c\x73\x2b\134\51\100\x69", "\x61\162\x72\141\171\50\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\x70\x74\151\x6d\x69\x7a\x61\x74\151\157\156\x20\143\157\156\x66\151\x67\x20\x66\x69\154\145\x20\x25\x73\40\147\x65\156\145\162\141\x74\145\144\x20\x69\156\40\45\x73", PR__MDL__OPTIMIZATION), "\x3c\143\x6f\x64\x65\x3e{$qogsmwakwacwqogk}\x3c\x2f\x63\157\x64\x65\76", "\74\x63\x6f\144\x65\76{$mkomwsiykqigmqca}\x3c\x2f\x63\157\144\145\76"), "\x6f\160\x74\151\155\x69\172\x61\164\x69\157\x6e\55\x63\157\x6e\x66\x69\147", self::smkwuwawwaqyimcq); iumgcesksuawyuyo: qwosyqcomiosguoa: qaycycmeqkqcumog: } sikckcmeiwmyakeu: qaqooueskgciuqgc: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $oyuikeusicgqgwak = ["\144\145\x62\165\147\x5f\155\157\144\145" => $this->weysguygiseoukqw(Setting::cmgikuaeswggsasy, false), "\x63\x6f\x6f\x6b\151\x65\x5f\x68\141\x73\x68" => Manipulate::cmaecekuqkwmemms("\103\x4f\x4f\113\x49\105\x48\x41\123\110"), "\x72\x65\x6a\145\143\164\137\143\x6f\157\x6b\x69\x65\x73" => $this->mukwwwucwusmmqau(), "\154\x6f\x67\147\145\144\137\151\156\x5f\143\157\x6f\x6b\x69\x65" => Manipulate::cmaecekuqkwmemms("\114\117\x47\x47\105\104\137\x49\x4e\x5f\113\105\x59")]; return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x63\x6f\x6e\146\151\147\165\x72\x61\x74\151\x6f\x6e\x73"), $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\162\x65\x67\x5f\161\165\157\x74\x65", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\x2e\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\x70\55\x70\157\163\x74\x70\x61\x73\x73\x5f"; $osqkgokmuiasuukg[] = "\x77\x70\x74\157\165\143\150\x5f\x73\167\151\164\x63\x68\x5f\164\x6f\147\x67\x6c\145"; $osqkgokmuiasuukg[] = "\143\x6f\x6d\x6d\145\156\164\x5f\x61\165\164\x68\x6f\162\x5f"; $osqkgokmuiasuukg[] = "\x63\x6f\x6d\x6d\x65\156\x74\137\x61\x75\x74\150\157\x72\137\x65\x6d\x61\151\154\x5f"; $osqkgokmuiasuukg = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\x72\x65\152\145\x63\164\137\x63\x6f\157\x6b\151\x65\163"), $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
