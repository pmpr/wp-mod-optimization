<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e645a0a3356             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Asset\Asset; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Bypass\Bypass; use Pmpr\Module\Optimization\Cloudflare\Cloudflare; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Origin\Origin; use Pmpr\Module\Optimization\Page\Page; use Pmpr\Module\Optimization\Preloader\Preloader; use Pmpr\Module\Optimization\Purge\Purge; class Optimization extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\117\160\164\151\155\151\172\x61\164\151\x6f\x6e", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\x65\156\x61\x62\154\145\x64"))->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\141\x75\x74\157\137\160\162\145\x6c\x6f\141\144")); })->gwcqooogwwkcamag(function () { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\144\151\163\141\142\x6c\x65\144"))->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x70\x75\x72\147\x65\x5f\x63\x61\x63\x68\145")); }); if (!$this->gmiyqqaekqcsoime()) { goto wmqegaqemgiggsce; } parent::__construct(); $this->cyowaaeywssoooeo(); wmqegaqemgiggsce: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\x69\x6e\x5f\151\x6e\x69\x74", [$this, "\171\x65\171\151\147\165\171\x65\147\155\155\x79\x75\x73\x65\x61"])->qcsmikeggeemccuu("\164\x65\155\160\x6c\x61\164\x65\x5f\162\145\144\x69\x72\x65\143\x74", [$this, "\x67\x69\167\x79\163\153\167\x77\x6d\x63\151\x65\x75\141\x63\161"])->qcsmikeggeemccuu("\160\x6c\x75\147\x69\x6e\163\x5f\x6c\x6f\141\144\145\144", [$this, "\x69\145\155\x61\141\153\147\161\147\x71\157\x73\x69\x65\x63\x6d"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\141\x6c\154\x6f\167\137\x74\x6f\x5f\x61\x64\x64\137\x62\x61\143\153\x6c\151\156\x6b"), [$this, "\x73\x65\x69\x61\151\157\x6b\165\163\x67\171\x73\x6d\x73\x79\x71"]); } public function iemaakgqgqosiecm() { Page::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Purge::symcgieuakksimmu(); Bypass::symcgieuakksimmu(); Origin::symcgieuakksimmu(); Preloader::symcgieuakksimmu(); Cloudflare::symcgieuakksimmu(); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\120\122\x5f\137\x43\101\x43\x48\x45\137\137\120\101\x54\x48")) { goto cqeceeagmysoyoqg; } $this->syiuacooagmooima("\x63\x6f\156\146\x69\147\55\x70\141\x74\x68", __("\x43\x6f\156\146\151\147\40\120\141\x74\x68", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); goto wggeggkumkwaaesu; cqeceeagmysoyoqg: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck(self::muqmwceaiwwakwws, "{$skacuygeqykiwiwy}\57\x63\x6f\156\146\151\x67"); wggeggkumkwaaesu: return $ksaameoqigiaoigg; } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto gkyguugwwoaqoigy; } $this->qayieuscsskiqacs(); if (!($eygsasmqycagyayw = $this->miocmcoykayoyyau())) { goto uauqmaeueukkmuwa; } $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\141\144\x6d\x69\x6e", $eygsasmqycagyayw->get("\x61\x64\x6d\151\x6e\x2e\x6a\x73"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x61\x64\x6d\151\156", $eygsasmqycagyayw->get("\141\144\x6d\151\156\x2e\x63\x73\x73"))); uauqmaeueukkmuwa: gkyguugwwoaqoigy: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto kmikwoqwigwuyqae; } $cuakwceieagskoaa = false; kmikwoqwigwuyqae: return $cuakwceieagskoaa; } public function giwyskwwmcieuacq() { $uiewakwqscemywuo = new Config(["\x70\x61\164\x68" => Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws)]); new Buffer(new Test($uiewakwqscemywuo, ["\154\157\147\x67\145\x72" => $this->ygaescewwyaseaoy()])); } public function ymioscmsquoqmasi() : array { $ucasskoyoewwmmii = []; $auwuoyyagaiegwae = [ManipulateI18N::auksikwsewaywikq()]; $kymsmcekmemqmews = ManipulateI18N::yeaukamowmkwaowi(); if (!$kymsmcekmemqmews) { goto qcuywygiosoqycaa; } $auwuoyyagaiegwae = $kymsmcekmemqmews; qcuywygiosoqycaa: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $yckucuyiaykemqea = Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws); $qogsmwakwacwqogk = ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy); if (!$yckucuyiaykemqea) { goto uusyaguomkqeakkm; } $mkomwsiykqigmqca = ManipulateArray::get($qogsmwakwacwqogk, "\160\x61\164\x68"); $qogsmwakwacwqogk["\160\141\x74\x68"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\x6f\163\x74"]) . $qogsmwakwacwqogk["\160\141\x74\150"] . "\x2e\160\x68\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; uusyaguomkqeakkm: ykymogaqkgaiiiyi: } coaysoeouasaekie: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\143\157\x6e\x66\x69\147\165\x72\141\164\x69\x6f\x6e\137\x66\151\154\145\x73\137\x70\x61\x74\x68"), $ucasskoyoewwmmii); } public function qayieuscsskiqacs() { if (!($ucasskoyoewwmmii = $this->ymioscmsquoqmasi())) { goto scaciowogmayswms; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto imgagmqusgiqissi; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto qikmwaessamuueoe; } $this->syiuacooagmooima("\x63\157\x6e\146\151\147", __("\103\x6f\156\146\151\x67\165\x72\141\x74\x69\x6f\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto aeekgeqawgsmgiqw; qikmwaessamuueoe: foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto yegkgccwomcgkumi; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = ManipulateString::amkcmaguoecyiscg($uiewakwqscemywuo); yegkgccwomcgkumi: mgiwqumikeuieocg: } jweeyemwqyqmyuys: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\157\156\146\151\x67\x2e\160\150\160", ["\143\x6f\x6e\146\x69\x67\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\100\141\x72\162\x61\x79\x5c\163\53\x5c\x28\100\x69", "\141\162\x72\141\x79\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\x61\x72\x72\x61\x79\134\x28\x5c\163\x2b\x5c\x29\x40\151", "\141\162\162\141\x79\x28\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\160\x74\151\155\151\172\141\164\151\157\x6e\40\143\157\x6e\146\x69\x67\x20\x66\x69\154\x65\40\x25\x73\x20\147\145\x6e\x65\162\141\x74\145\x64\x20\x69\x6e\40\x25\x73", PR__MDL__OPTIMIZATION), "\74\143\157\x64\145\76{$qogsmwakwacwqogk}\74\57\143\x6f\x64\145\x3e", "\x3c\143\x6f\144\x65\x3e{$mkomwsiykqigmqca}\74\x2f\143\157\144\145\76"), "\157\x70\x74\x69\155\x69\172\141\164\x69\x6f\x6e\55\x63\157\x6e\x66\x69\147", self::smkwuwawwaqyimcq); aeekgeqawgsmgiqw: imgagmqusgiqissi: qsyyeoosgigiiequ: } qoigaauuokyusmgk: scaciowogmayswms: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $oyuikeusicgqgwak = ["\x64\x65\142\165\147\137\x6d\157\x64\x65" => $this->weysguygiseoukqw(Setting::cmgikuaeswggsasy, false), "\143\x6f\x6f\153\x69\145\137\150\x61\163\150" => Manipulate::cmaecekuqkwmemms("\x43\x4f\117\x4b\x49\x45\110\x41\x53\x48"), "\162\145\x6a\145\x63\164\137\x63\157\x6f\x6b\151\x65\163" => $this->mukwwwucwusmmqau(), "\x6c\157\147\147\x65\x64\137\x69\x6e\x5f\143\157\157\x6b\151\x65" => Manipulate::cmaecekuqkwmemms("\x4c\117\107\x47\105\x44\x5f\111\116\137\x4b\105\x59")]; return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\143\x6f\x6e\x66\151\x67\x75\162\141\164\151\x6f\156\x73"), $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\162\145\x67\x5f\161\165\x6f\x74\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\160\55\x70\x6f\163\164\160\141\163\163\x5f"; $osqkgokmuiasuukg[] = "\x77\160\x74\157\x75\143\x68\137\x73\167\x69\164\x63\x68\x5f\164\157\x67\147\x6c\x65"; $osqkgokmuiasuukg[] = "\143\157\x6d\x6d\145\156\164\x5f\141\x75\164\150\x6f\x72\x5f"; $osqkgokmuiasuukg[] = "\x63\x6f\155\155\x65\156\164\137\141\165\164\x68\157\x72\137\145\x6d\x61\151\x6c\137"; $osqkgokmuiasuukg = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\x72\x65\x6a\x65\x63\x74\137\143\x6f\x6f\153\x69\x65\x73"), $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
