<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66375048491fe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator implements CommonInterface { use CommonTrait; public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4f\160\164\x69\x6d\x69\x7a\141\x74\151\x6f\x6e", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::wwgqqgayyagycysu); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\x69\156\137\151\x6e\151\164", [$this, "\x79\x65\x79\151\x67\x75\171\145\147\x6d\x6d\x79\165\163\145\x61"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x61\x6c\154\x6f\167\137\x74\157\137\x61\144\144\137\x62\x61\143\x6b\154\x69\x6e\x6b", [$this, "\x73\x65\x69\141\x69\157\x6b\165\163\147\x79\163\155\x73\x79\x71"]); } public function mameiwsayuyquoeq() { Optimizer::symcgieuakksimmu(); Capability::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto eaggoasiwogmquwc; } Subscription::symcgieuakksimmu(); eaggoasiwogmquwc: } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto meoweqcaaosoomeu; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\141\144\155\151\156", $eygsasmqycagyayw->get("\141\144\155\151\x6e\56\152\x73"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x61\x64\x6d\151\x6e", $eygsasmqycagyayw->get("\x61\x64\x6d\x69\x6e\x2e\x63\163\x73"))); meoweqcaaosoomeu: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto ywmoieqkigsykequ; } $cuakwceieagskoaa = false; ywmoieqkigsykequ: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto eqekaoaioiykuaiw; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto yamoiggaeugmgkku; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto akoiqkoqmmmcieug; } $this->syiuacooagmooima("\x63\157\156\x66\x69\147", __("\x43\x6f\156\146\151\147\165\162\x61\x74\x69\157\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto cgasgmiiqegqesic; akoiqkoqmmmcieug: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto akcakssqcqcouwew; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); akcakssqcqcouwew: gikaiicgqyueeoco: } muwyuiikuywigwso: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\157\x6e\x66\151\x67\56\x70\x68\160", ["\143\x6f\x6e\x66\x69\147\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\100\x61\x72\162\141\171\134\x73\53\x5c\x28\x40\151", "\x61\162\162\x61\171\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\x61\162\162\x61\x79\x5c\50\134\x73\x2b\x5c\51\x40\x69", "\141\x72\x72\141\171\50\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\x70\x74\x69\155\151\x7a\141\164\x69\x6f\156\40\x63\x6f\156\146\x69\x67\40\x66\151\x6c\145\40\x25\163\40\147\145\156\x65\162\x61\164\x65\144\40\x69\x6e\x20\45\163", PR__MDL__OPTIMIZATION), "\74\x63\157\x64\145\x3e{$qogsmwakwacwqogk}\x3c\57\x63\157\x64\x65\x3e", "\x3c\143\157\x64\145\x3e{$mkomwsiykqigmqca}\74\57\143\x6f\x64\x65\x3e"), "\x6f\160\x74\x69\x6d\x69\x7a\x61\x74\x69\x6f\x6e\55\143\x6f\156\146\151\x67", self::smkwuwawwaqyimcq); cgasgmiiqegqesic: yamoiggaeugmgkku: kkwucaoumyayagcq: } iaousaauoawkqkkg: eqekaoaioiykuaiw: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\144\x65\x62\165\147\x5f\x6d\x6f\x64\145" => false, "\x63\157\x6f\153\x69\x65\137\x68\141\x73\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x43\117\117\113\x49\105\x48\101\x53\110"), "\x72\x65\152\x65\x63\164\x5f\143\157\157\x6b\151\145\x73" => $this->mukwwwucwusmmqau(), "\x6c\157\x67\147\145\144\137\x69\156\x5f\x63\x6f\157\153\151\x65" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x4c\117\107\x47\x45\x44\137\x49\116\137\x4b\105\x59")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\x6f\x6e\x66\151\x67\x75\162\141\164\x69\157\156\x73", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\x72\145\x67\137\x71\x75\x6f\164\x65", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\x2b", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\x70\x2d\160\157\x73\164\160\x61\x73\163\137"; $osqkgokmuiasuukg[] = "\167\160\x74\157\x75\143\150\137\x73\167\x69\164\x63\150\x5f\164\157\x67\147\x6c\145"; $osqkgokmuiasuukg[] = "\143\157\155\155\145\156\164\137\141\165\x74\x68\157\162\x5f"; $osqkgokmuiasuukg[] = "\143\157\155\155\145\156\164\x5f\x61\165\164\x68\157\x72\x5f\145\155\141\x69\x6c\137"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x72\x65\152\x65\143\164\x5f\x63\157\157\153\151\145\x73", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
