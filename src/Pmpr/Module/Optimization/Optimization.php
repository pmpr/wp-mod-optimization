<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66000aba21b1a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator implements CommonInterface { use CommonTrait; public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\117\160\x74\151\155\x69\172\141\164\151\157\156", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x70\x75\162\x67\145\137\143\141\x63\x68\x65"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\151\156\x5f\151\156\151\x74", [$this, "\171\x65\x79\151\147\x75\x79\x65\x67\x6d\x6d\x79\165\x73\145\141"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x61\154\x6c\157\167\137\x74\x6f\x5f\x61\144\144\x5f\x62\141\x63\153\x6c\151\x6e\153", [$this, "\163\145\x69\x61\x69\x6f\153\x75\x73\147\x79\x73\x6d\x73\x79\x71"]); } public function mameiwsayuyquoeq() { Optimizer::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto yoqakewookqoqacm; } Subscription::symcgieuakksimmu(); yoqakewookqoqacm: } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto gswcoeiisamakwii; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\144\155\x69\x6e", $eygsasmqycagyayw->get("\141\144\155\x69\156\56\x6a\x73"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\141\x64\x6d\151\156", $eygsasmqycagyayw->get("\141\x64\x6d\x69\x6e\x2e\143\163\x73"))); gswcoeiisamakwii: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto yuimwyoywaiiqacs; } $cuakwceieagskoaa = false; yuimwyoywaiiqacs: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->kcciqwskewsuaemk()))) { goto mscgewkcqcoowweg; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto ikqeeaysmqgcgawq; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto qiiigwkqeoewsuwm; } $this->syiuacooagmooima("\143\157\156\146\x69\147", __("\103\x6f\x6e\x66\x69\x67\x75\x72\141\x74\151\157\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto esaqcqqwuussiiwo; qiiigwkqeoewsuwm: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto okkmcocqokkskasy; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); okkmcocqokkskasy: esikeyqyuikmaiek: } iwsmmkqaoksmocok: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\x6f\156\146\151\x67\56\x70\x68\160", ["\143\x6f\x6e\x66\x69\x67\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\x61\x72\162\x61\171\134\163\53\x5c\50\x40\151", "\x61\x72\x72\x61\x79\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\100\141\162\162\141\x79\134\x28\x5c\163\x2b\134\x29\100\x69", "\x61\x72\x72\x61\x79\x28\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\160\164\151\155\151\x7a\141\x74\151\x6f\156\x20\x63\157\156\146\151\x67\x20\146\x69\154\x65\x20\x25\x73\40\147\145\x6e\x65\x72\x61\x74\145\x64\40\151\156\x20\45\163", PR__MDL__OPTIMIZATION), "\74\x63\157\x64\145\x3e{$qogsmwakwacwqogk}\x3c\x2f\143\x6f\x64\145\76", "\74\x63\x6f\x64\x65\x3e{$mkomwsiykqigmqca}\x3c\x2f\x63\x6f\x64\x65\76"), "\x6f\160\x74\151\155\x69\x7a\141\164\151\x6f\156\x2d\x63\157\x6e\x66\x69\147", self::smkwuwawwaqyimcq); esaqcqqwuussiiwo: ikqeeaysmqgcgawq: emqswoaawgeyosmi: } ocywegekakimmwcq: mscgewkcqcoowweg: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = [ "\x64\145\x62\x75\x67\x5f\155\157\x64\145" => false, "\x63\157\157\x6b\x69\x65\137\x68\x61\163\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\x4f\x4f\x4b\x49\105\110\101\x53\x48"), "\x72\145\152\145\x63\x74\x5f\x63\x6f\157\x6b\x69\145\163" => $this->mukwwwucwusmmqau(), "\x6c\x6f\x67\x67\x65\x64\x5f\x69\x6e\137\x63\x6f\157\153\151\145" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x4c\x4f\x47\107\105\104\x5f\x49\x4e\x5f\x4b\105\131"), ]; return $this->ocksiywmkyaqseou("\157\x70\164\x5f\x63\x6f\156\x66\151\147\165\162\x61\x74\x69\x6f\x6e\163", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\x72\145\147\137\161\x75\157\x74\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\160\x2d\x70\157\163\164\x70\x61\x73\163\x5f"; $osqkgokmuiasuukg[] = "\167\x70\164\x6f\x75\x63\150\x5f\163\x77\151\x74\x63\150\x5f\164\157\147\x67\154\x65"; $osqkgokmuiasuukg[] = "\x63\157\x6d\x6d\x65\x6e\164\x5f\x61\165\x74\x68\x6f\x72\x5f"; $osqkgokmuiasuukg[] = "\143\157\x6d\x6d\145\x6e\x74\x5f\x61\x75\x74\x68\157\x72\x5f\x65\155\141\x69\154\137"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x72\145\x6a\145\143\x74\x5f\143\157\157\x6b\x69\145\x73", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
