<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d04ce34c3b0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Asset\Asset; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Bypass\Bypass; use Pmpr\Module\Optimization\Cloudflare\Cloudflare; use Pmpr\Module\Optimization\Extension\Extension; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Origin\Origin; use Pmpr\Module\Optimization\Page\Page; use Pmpr\Module\Optimization\Preloader\Preloader; use Pmpr\Module\Optimization\PreOpt\PreOpt; use Pmpr\Module\Optimization\Purge\Purge; class Optimization extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\117\x70\x74\x69\155\x69\x7a\x61\x74\151\157\x6e", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\145\x6e\x61\142\x6c\145\144")); })->gwcqooogwwkcamag(function () { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x64\x69\163\141\x62\154\x65\x64"))->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\160\165\x72\147\145\x5f\x63\141\x63\x68\145")); }); if (!$this->gmiyqqaekqcsoime()) { goto saiuoomgskwgyeya; } parent::__construct(); $this->cyowaaeywssoooeo(); saiuoomgskwgyeya: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\x69\x6e\x5f\151\x6e\x69\164", [$this, "\171\x65\x79\x69\x67\x75\x79\x65\147\x6d\155\171\x75\x73\145\141"])->qcsmikeggeemccuu("\164\x65\155\x70\x6c\x61\x74\145\x5f\x72\x65\x64\x69\162\x65\143\164", [$this, "\147\x69\167\171\x73\x6b\x77\167\155\x63\151\x65\x75\141\x63\x71"])->qcsmikeggeemccuu("\160\154\165\147\x69\156\x73\137\x6c\x6f\141\x64\145\x64", [$this, "\151\145\155\141\141\x6b\x67\x71\x67\161\x6f\x73\151\x65\x63\155"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\141\x6c\154\157\167\x5f\164\x6f\137\141\x64\144\x5f\x62\141\143\153\x6c\151\x6e\x6b"), [$this, "\163\x65\151\x61\151\x6f\x6b\165\x73\147\x79\x73\155\163\x79\161"]); } public function iemaakgqgqosiecm() { Page::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Purge::symcgieuakksimmu(); Bypass::symcgieuakksimmu(); Origin::symcgieuakksimmu(); PreOpt::symcgieuakksimmu(); Preloader::symcgieuakksimmu(); Extension::symcgieuakksimmu(); Cloudflare::symcgieuakksimmu(); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\x50\122\137\137\103\x41\x43\x48\x45\137\137\x50\101\124\110")) { goto kuuawiosmkgqsscy; } $this->syiuacooagmooima("\143\157\156\146\x69\147\x2d\x70\x61\x74\150", __("\103\157\156\x66\x69\x67\40\120\x61\164\150", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); goto kwocaqggwcksesce; kuuawiosmkgqsscy: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck(self::muqmwceaiwwakwws, "{$skacuygeqykiwiwy}\x2f\x63\x6f\x6e\x66\151\147"); kwocaqggwcksesce: return $ksaameoqigiaoigg; } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto momuweiasiwskekw; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\144\155\151\x6e", $eygsasmqycagyayw->get("\x61\144\x6d\151\156\x2e\x6a\x73"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\141\144\x6d\151\156", $eygsasmqycagyayw->get("\141\144\155\x69\x6e\56\x63\163\163"))); momuweiasiwskekw: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto qaewauyekqucciyc; } $cuakwceieagskoaa = false; qaewauyekqucciyc: return $cuakwceieagskoaa; } public function giwyskwwmcieuacq() { $uiewakwqscemywuo = new Config(["\160\x61\x74\x68" => Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws)]); new Buffer(new Test($uiewakwqscemywuo, ["\x6c\x6f\x67\x67\x65\x72" => $this->ygaescewwyaseaoy()])); } public function ymioscmsquoqmasi() : array { $ucasskoyoewwmmii = []; $auwuoyyagaiegwae = [ManipulateI18N::auksikwsewaywikq()]; $kymsmcekmemqmews = ManipulateI18N::yeaukamowmkwaowi(); if (!$kymsmcekmemqmews) { goto bgakaasgwwygosyi; } $auwuoyyagaiegwae = $kymsmcekmemqmews; bgakaasgwwygosyi: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $yckucuyiaykemqea = Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws); $qogsmwakwacwqogk = ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy); if (!$yckucuyiaykemqea) { goto iiiwsgameuomumgw; } $mkomwsiykqigmqca = ManipulateArray::get($qogsmwakwacwqogk, "\x70\x61\x74\150"); $qogsmwakwacwqogk["\x70\x61\x74\150"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\157\x73\x74"]) . $qogsmwakwacwqogk["\160\x61\164\150"] . "\56\160\x68\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; iiiwsgameuomumgw: agyooskogigyayws: } aucwccaiqwsmyuaq: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x63\x6f\156\146\x69\147\165\x72\x61\x74\x69\157\x6e\x5f\146\151\154\x65\163\137\160\141\164\x68"), $ucasskoyoewwmmii); } public function qayieuscsskiqacs() { if (!(($ucasskoyoewwmmii = $this->ymioscmsquoqmasi()) && ($iiaumsgauuyeqksw = $this->kcciqwskewsuaemk()))) { goto acaeigkmigikeuyu; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto mciumqyyossyiuyk; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto kssuqmsgmaaeqigw; } $this->syiuacooagmooima("\x63\157\156\x66\x69\x67", __("\103\157\156\146\151\x67\165\x72\x61\164\x69\157\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto uwusswwekqcsisus; kssuqmsgmaaeqigw: foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto egwgyekaiqomyeaa; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = ManipulateString::amkcmaguoecyiscg($uiewakwqscemywuo, false); egwgyekaiqomyeaa: cgwokqwakqcmiieo: } okycquokqoamsquy: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\157\x6e\146\x69\147\56\160\x68\160", ["\x63\157\x6e\x66\x69\x67\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\141\x72\x72\141\171\x5c\x73\x2b\x5c\x28\100\151", "\141\162\x72\141\x79\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\141\x72\162\141\171\134\50\134\163\53\x5c\51\100\x69", "\x61\162\162\x61\171\x28\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\x70\x74\x69\x6d\x69\x7a\141\x74\151\x6f\x6e\x20\x63\157\156\146\x69\147\x20\x66\x69\x6c\145\x20\x25\x73\40\x67\145\x6e\x65\x72\141\164\x65\x64\40\x69\156\40\45\163", PR__MDL__OPTIMIZATION), "\x3c\143\x6f\144\x65\x3e{$qogsmwakwacwqogk}\74\x2f\143\157\144\x65\76", "\74\x63\x6f\144\145\76{$mkomwsiykqigmqca}\x3c\57\x63\157\144\145\x3e"), "\157\x70\x74\151\x6d\x69\172\x61\164\x69\x6f\156\x2d\x63\157\x6e\146\x69\147", self::smkwuwawwaqyimcq); uwusswwekqcsisus: mciumqyyossyiuyk: scockmiqikwwkqse: } mcukocaaoyuugoeu: acaeigkmigikeuyu: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $oyuikeusicgqgwak = ["\144\145\x62\165\147\137\155\x6f\144\145" => $this->weysguygiseoukqw(Setting::cmgikuaeswggsasy, false), "\143\157\157\x6b\x69\145\137\x68\141\163\150" => Manipulate::cmaecekuqkwmemms("\x43\117\x4f\113\111\105\x48\x41\x53\x48"), "\162\x65\x6a\x65\143\x74\137\143\x6f\157\x6b\151\x65\163" => $this->mukwwwucwusmmqau(), "\154\x6f\147\147\145\x64\137\x69\x6e\137\143\157\x6f\x6b\x69\x65" => Manipulate::cmaecekuqkwmemms("\x4c\x4f\107\x47\x45\x44\137\x49\116\137\x4b\105\131")]; return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\x5f\x63\x6f\x6e\x66\151\x67\x75\162\x61\x74\151\157\x6e\x73"), $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\x72\x65\147\x5f\161\165\157\164\x65", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\x70\x2d\x70\157\163\164\x70\x61\x73\x73\137"; $osqkgokmuiasuukg[] = "\x77\x70\x74\157\x75\x63\x68\x5f\163\x77\151\164\x63\150\137\x74\x6f\x67\x67\x6c\x65"; $osqkgokmuiasuukg[] = "\x63\157\155\155\x65\156\x74\137\x61\x75\164\x68\x6f\162\x5f"; $osqkgokmuiasuukg[] = "\x63\x6f\155\x6d\145\156\164\x5f\x61\165\164\x68\157\162\137\145\x6d\x61\151\x6c\x5f"; $osqkgokmuiasuukg = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\x72\x65\152\145\x63\164\137\x63\157\x6f\153\x69\145\x73"), $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
