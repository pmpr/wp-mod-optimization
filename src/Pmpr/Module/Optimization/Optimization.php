<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63010f2431cc2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Asset\Asset; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Bypass\Bypass; use Pmpr\Module\Optimization\Cloudflare\Cloudflare; use Pmpr\Module\Optimization\Extension\Extension; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Origin\Origin; use Pmpr\Module\Optimization\Page\Page; use Pmpr\Module\Optimization\Preloader\Preloader; use Pmpr\Module\Optimization\Purge\Purge; class Optimization extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4f\x70\x74\151\155\151\x7a\141\164\151\157\x6e", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\145\x6e\x61\142\154\x65\144")); })->gwcqooogwwkcamag(function () { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x64\151\x73\x61\x62\x6c\x65\144"))->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\x70\165\162\147\x65\x5f\x63\141\x63\x68\145")); }); if (!$this->gmiyqqaekqcsoime()) { goto gokwmwmaumiwscua; } parent::__construct(); $this->cyowaaeywssoooeo(); gokwmwmaumiwscua: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\151\x6e\x5f\x69\156\151\x74", [$this, "\x79\145\x79\151\x67\x75\x79\145\147\x6d\x6d\171\165\x73\145\x61"])->qcsmikeggeemccuu("\164\145\155\160\154\141\x74\145\137\x72\x65\x64\151\162\145\143\164", [$this, "\147\151\x77\x79\163\x6b\167\x77\x6d\x63\x69\x65\x75\x61\x63\161"])->qcsmikeggeemccuu("\160\x6c\165\x67\x69\156\163\137\154\x6f\141\144\145\x64", [$this, "\x69\145\x6d\141\141\x6b\147\161\x67\x71\157\x73\151\x65\143\155"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x61\x6c\x6c\x6f\x77\137\x74\x6f\x5f\141\x64\144\137\x62\x61\143\153\154\151\x6e\x6b"), [$this, "\x73\145\x69\141\151\x6f\153\165\163\147\171\x73\x6d\x73\171\x71"]); } public function iemaakgqgqosiecm() { Page::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Purge::symcgieuakksimmu(); Bypass::symcgieuakksimmu(); Origin::symcgieuakksimmu(); Preloader::symcgieuakksimmu(); Extension::symcgieuakksimmu(); Cloudflare::symcgieuakksimmu(); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\x50\122\137\137\x43\x41\x43\110\105\x5f\137\x50\101\x54\110")) { goto eauiumeeyckucuyc; } $this->syiuacooagmooima("\143\157\156\146\151\x67\55\160\x61\164\x68", __("\x43\x6f\156\x66\x69\147\40\120\x61\x74\150", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); goto gigiwwouakeekoim; eauiumeeyckucuyc: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck(self::muqmwceaiwwakwws, "{$skacuygeqykiwiwy}\x2f\143\x6f\x6e\x66\x69\147"); gigiwwouakeekoim: return $ksaameoqigiaoigg; } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto ykuycowuguumseuu; } $this->qayieuscsskiqacs(); if (!($eygsasmqycagyayw = $this->miocmcoykayoyyau())) { goto esuuweysgwuwcuue; } $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\x64\x6d\x69\156", $eygsasmqycagyayw->get("\141\144\x6d\x69\x6e\56\x6a\163"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x61\x64\x6d\x69\x6e", $eygsasmqycagyayw->get("\141\x64\155\151\156\56\143\163\x73"))); esuuweysgwuwcuue: ykuycowuguumseuu: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto qugsgsscqyikugyc; } $cuakwceieagskoaa = false; qugsgsscqyikugyc: return $cuakwceieagskoaa; } public function giwyskwwmcieuacq() { $uiewakwqscemywuo = new Config(["\x70\141\x74\150" => Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws)]); new Buffer(new Test($uiewakwqscemywuo, ["\x6c\x6f\x67\147\x65\x72" => $this->ygaescewwyaseaoy()])); } public function ymioscmsquoqmasi() : array { $ucasskoyoewwmmii = []; $auwuoyyagaiegwae = [ManipulateI18N::auksikwsewaywikq()]; $kymsmcekmemqmews = ManipulateI18N::yeaukamowmkwaowi(); if (!$kymsmcekmemqmews) { goto gskaqcgccswmuqsy; } $auwuoyyagaiegwae = $kymsmcekmemqmews; gskaqcgccswmuqsy: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $yckucuyiaykemqea = Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws); $qogsmwakwacwqogk = ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy); if (!$yckucuyiaykemqea) { goto sqaowueaequoigsa; } $mkomwsiykqigmqca = ManipulateArray::get($qogsmwakwacwqogk, "\160\x61\164\150"); $qogsmwakwacwqogk["\x70\141\x74\150"] = $mkomwsiykqigmqca ? str_replace("\57", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\x6f\163\164"]) . $qogsmwakwacwqogk["\x70\x61\x74\150"] . "\x2e\x70\x68\160"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; sqaowueaequoigsa: saycoceqywiekqsi: } uccuykggugcmiyam: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\x63\157\x6e\x66\x69\147\165\162\x61\164\151\x6f\156\x5f\146\151\154\145\x73\x5f\160\141\x74\150"), $ucasskoyoewwmmii); } public function qayieuscsskiqacs() { if (!($ucasskoyoewwmmii = $this->ymioscmsquoqmasi())) { goto eyskqaccgeomqmyw; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto oegaywiwywuyksaq; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto qmiqicgscsuoyeqo; } $this->syiuacooagmooima("\x63\157\156\146\151\147", __("\103\x6f\156\146\151\147\x75\x72\x61\164\x69\157\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto ysaumykuimqigeqa; qmiqicgscsuoyeqo: foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto kkogaccoqmsmmkmo; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = ManipulateString::amkcmaguoecyiscg($uiewakwqscemywuo, false); kkogaccoqmsmmkmo: yuyiqaawwgaywgqo: } yqkyoaiwcyqeaqwu: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\157\x6e\146\151\x67\56\160\x68\160", ["\x63\157\156\146\151\147\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\141\x72\162\x61\x79\134\163\53\x5c\50\100\x69", "\141\162\162\141\x79\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\141\162\162\x61\171\x5c\x28\134\163\x2b\134\51\100\x69", "\x61\x72\x72\141\x79\50\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\160\164\x69\x6d\151\172\141\164\x69\x6f\x6e\x20\x63\x6f\x6e\x66\x69\147\x20\146\151\x6c\x65\x20\x25\x73\40\147\x65\156\x65\162\141\x74\145\144\40\151\156\x20\45\x73", PR__MDL__OPTIMIZATION), "\74\143\x6f\144\145\x3e{$qogsmwakwacwqogk}\74\x2f\x63\157\144\x65\76", "\x3c\x63\157\144\x65\76{$mkomwsiykqigmqca}\74\57\143\x6f\x64\x65\x3e"), "\x6f\x70\164\x69\155\151\172\141\x74\151\x6f\156\x2d\143\157\156\146\151\147", self::smkwuwawwaqyimcq); ysaumykuimqigeqa: oegaywiwywuyksaq: waycokyiesmqgqcg: } eqmauwqqowsiwaue: eyskqaccgeomqmyw: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $oyuikeusicgqgwak = ["\x64\x65\x62\x75\x67\x5f\155\x6f\x64\x65" => $this->weysguygiseoukqw(Setting::cmgikuaeswggsasy, false), "\143\x6f\x6f\153\x69\145\137\150\141\x73\150" => Manipulate::cmaecekuqkwmemms("\103\117\x4f\113\111\x45\110\101\123\110"), "\162\145\x6a\145\143\x74\137\143\x6f\157\x6b\151\145\x73" => $this->mukwwwucwusmmqau(), "\154\157\x67\x67\x65\144\137\x69\156\137\143\x6f\x6f\x6b\x69\145" => Manipulate::cmaecekuqkwmemms("\114\x4f\107\107\x45\x44\x5f\x49\116\x5f\x4b\105\131")]; return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\143\157\156\146\x69\147\x75\162\x61\x74\x69\x6f\156\163"), $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\x72\145\147\x5f\x71\x75\157\164\x65", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\x2e\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\160\x2d\160\x6f\163\x74\x70\x61\163\x73\137"; $osqkgokmuiasuukg[] = "\x77\x70\x74\157\165\143\x68\137\163\167\151\164\x63\150\137\x74\157\147\x67\154\145"; $osqkgokmuiasuukg[] = "\143\157\155\x6d\x65\x6e\164\x5f\x61\x75\164\x68\157\x72\137"; $osqkgokmuiasuukg[] = "\x63\x6f\x6d\155\145\x6e\164\137\x61\x75\x74\x68\x6f\162\x5f\x65\155\x61\151\154\x5f"; $osqkgokmuiasuukg = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\x5f\x72\145\152\x65\x63\x74\137\x63\157\x6f\x6b\151\x65\163"), $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
