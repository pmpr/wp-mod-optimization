<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6626f1ce4e690             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator implements CommonInterface { use CommonTrait; public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\117\160\x74\x69\155\151\172\x61\x74\151\157\156", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::wwgqqgayyagycysu); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\151\x6e\x5f\151\x6e\151\164", [$this, "\171\x65\x79\151\147\165\x79\145\147\x6d\155\x79\x75\x73\145\141"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x61\154\154\157\167\137\164\157\x5f\141\x64\x64\137\142\141\143\153\154\x69\x6e\153", [$this, "\163\x65\x69\x61\151\157\153\x75\x73\x67\171\163\155\x73\171\x71"]); } public function mameiwsayuyquoeq() { Optimizer::symcgieuakksimmu(); Capability::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto kiemqsgcmouqscao; } Subscription::symcgieuakksimmu(); kiemqsgcmouqscao: } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto wssaaemscmmiomee; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\x64\x6d\x69\x6e", $eygsasmqycagyayw->get("\141\144\x6d\x69\156\x2e\152\163"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\141\x64\155\151\156", $eygsasmqycagyayw->get("\141\x64\x6d\151\x6e\x2e\x63\163\x73"))); wssaaemscmmiomee: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto meqmcgmksqiqcoyq; } $cuakwceieagskoaa = false; meqmcgmksqiqcoyq: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto muwyuiikuywigwso; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto kkwucaoumyayagcq; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto ywmoieqkigsykequ; } $this->syiuacooagmooima("\x63\157\156\x66\x69\147", __("\103\x6f\156\x66\x69\147\x75\162\141\x74\151\x6f\x6e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto iaousaauoawkqkkg; ywmoieqkigsykequ: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto meoweqcaaosoomeu; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); meoweqcaaosoomeu: eaggoasiwogmquwc: } asciaakaoygususy: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\157\x6e\x66\151\147\x2e\x70\x68\160", ["\x63\157\x6e\x66\x69\x67\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\x61\x72\x72\141\x79\134\163\x2b\x5c\x28\x40\x69", "\141\x72\162\141\x79\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\141\x72\x72\x61\x79\x5c\x28\x5c\163\x2b\134\x29\x40\151", "\141\162\x72\141\171\50\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\x70\x74\151\155\151\172\141\164\151\x6f\x6e\40\x63\157\x6e\146\x69\x67\40\146\x69\x6c\145\x20\45\x73\x20\147\145\x6e\x65\x72\141\164\x65\144\40\151\x6e\x20\45\x73", PR__MDL__OPTIMIZATION), "\74\x63\x6f\144\145\76{$qogsmwakwacwqogk}\x3c\57\143\157\x64\145\x3e", "\x3c\x63\x6f\144\x65\x3e{$mkomwsiykqigmqca}\74\x2f\x63\x6f\144\145\x3e"), "\157\160\x74\x69\155\x69\172\141\164\151\x6f\x6e\55\143\x6f\x6e\x66\151\147", self::smkwuwawwaqyimcq); iaousaauoawkqkkg: kkwucaoumyayagcq: iusaeoimukymskgs: } euskosgaksmimgug: muwyuiikuywigwso: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\144\x65\142\x75\x67\x5f\x6d\x6f\144\145" => false, "\143\157\x6f\x6b\x69\145\137\x68\x61\163\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x43\x4f\117\x4b\x49\105\110\101\x53\x48"), "\x72\145\152\x65\x63\x74\x5f\143\x6f\157\153\x69\145\163" => $this->mukwwwucwusmmqau(), "\x6c\x6f\147\x67\145\144\137\151\156\x5f\x63\x6f\x6f\x6b\151\x65" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x4c\117\x47\107\x45\104\137\111\116\x5f\x4b\105\131")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\x6f\x6e\146\151\147\165\x72\x61\164\151\x6f\156\163", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\162\x65\x67\137\x71\x75\157\x74\x65", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\x70\x2d\160\x6f\x73\x74\x70\141\x73\163\137"; $osqkgokmuiasuukg[] = "\167\x70\x74\157\x75\143\150\137\x73\x77\x69\x74\x63\150\137\164\x6f\x67\147\x6c\145"; $osqkgokmuiasuukg[] = "\143\157\155\155\145\x6e\164\137\x61\x75\164\150\157\162\x5f"; $osqkgokmuiasuukg[] = "\x63\x6f\155\155\145\x6e\164\x5f\x61\x75\164\x68\157\x72\x5f\x65\155\141\x69\154\137"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\162\145\x6a\x65\x63\164\137\143\157\157\153\151\145\163", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
