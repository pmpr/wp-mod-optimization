<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6688fb3b4b1ce             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator implements CommonInterface { use CommonTrait; public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4f\x70\x74\151\155\x69\172\141\164\151\157\156", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\160\x75\x72\147\x65\x5f\143\141\143\150\145"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\x69\156\x5f\151\156\151\x74", [$this, "\x79\145\x79\151\147\x75\x79\145\x67\155\155\171\165\163\145\141"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\141\x6c\154\x6f\x77\137\164\x6f\x5f\141\x64\x64\137\142\141\x63\x6b\154\151\x6e\153", [$this, "\x73\145\x69\x61\x69\157\x6b\165\x73\x67\171\163\x6d\x73\171\161"]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto kiwqkcaekqqyuegq; } Dashboard::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); kiwqkcaekqqyuegq: Optimizer::symcgieuakksimmu(); Capability::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto quwcqmyokicssyew; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\144\x6d\151\x6e", $eygsasmqycagyayw->get("\x61\144\155\151\x6e\x2e\x6a\x73"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x61\144\x6d\151\156", $eygsasmqycagyayw->get("\141\144\155\x69\x6e\x2e\143\163\163"))); quwcqmyokicssyew: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto iqcogmsguwoikame; } $cuakwceieagskoaa = false; iqcogmsguwoikame: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto iggyqogweyosuikc; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto kqksuugcgsyeoayy; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto omugkkesagcyagmk; } $this->syiuacooagmooima("\x63\157\156\146\x69\x67", __("\x43\x6f\156\146\x69\x67\x75\x72\x61\x74\x69\157\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto ygcsmkuycoagwyou; omugkkesagcyagmk: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto mosqsmqimqgqoase; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); mosqsmqimqgqoase: ayyweymyuuiauamo: } yqykqysmiquwoasu: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\x6f\156\146\151\x67\56\160\150\160", ["\143\157\156\x66\x69\x67\163" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\141\x72\x72\x61\x79\x5c\163\53\x5c\50\100\151", "\141\x72\x72\x61\x79\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\x61\162\162\141\171\134\50\x5c\163\x2b\x5c\51\100\151", "\141\x72\162\x61\171\50\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\x70\164\x69\x6d\151\x7a\x61\x74\151\157\x6e\x20\143\157\156\146\x69\x67\40\146\x69\154\145\x20\45\x73\40\147\145\x6e\145\162\141\164\145\144\40\x69\x6e\40\x25\163", PR__MDL__OPTIMIZATION), "\74\143\157\x64\145\x3e{$qogsmwakwacwqogk}\x3c\57\x63\157\144\145\76", "\x3c\143\x6f\144\145\x3e{$mkomwsiykqigmqca}\x3c\x2f\143\157\144\x65\76"), "\157\x70\x74\151\x6d\x69\x7a\141\164\151\157\156\55\143\157\x6e\146\x69\147", self::smkwuwawwaqyimcq); ygcsmkuycoagwyou: kqksuugcgsyeoayy: cmqucgoewuyieoyk: } gimmuoqwckiseaik: iggyqogweyosuikc: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\x64\x65\166\137\155\157\144\x65" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(self::qeuquamuuwueeiyi, false), "\x64\145\142\165\147\x5f\155\157\144\145" => false, "\x63\x6f\x6f\x6b\x69\x65\137\x68\141\x73\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\x4f\117\113\x49\x45\110\x41\x53\x48"), "\162\x65\x6a\145\143\x74\137\143\157\157\x6b\151\x65\x73" => $this->mukwwwucwusmmqau(), "\154\x6f\x67\147\x65\144\137\151\x6e\137\x63\x6f\157\x6b\x69\145" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\114\x4f\107\x47\105\104\137\x49\116\137\113\x45\131")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\x6f\156\x66\151\147\x75\x72\141\x74\151\157\156\163", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\x72\x65\147\x5f\161\165\x6f\164\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\x2b", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\x70\55\160\x6f\x73\164\160\141\x73\163\137"; $osqkgokmuiasuukg[] = "\167\x70\x74\157\165\143\150\137\163\x77\x69\164\x63\150\137\164\157\x67\x67\154\x65"; $osqkgokmuiasuukg[] = "\143\157\155\155\x65\x6e\x74\x5f\x61\x75\164\150\157\x72\137"; $osqkgokmuiasuukg[] = "\x63\157\155\155\145\156\164\137\x61\165\164\150\x6f\162\137\x65\155\x61\151\154\x5f"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x72\x65\152\x65\x63\164\137\x63\157\x6f\x6b\151\145\163", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
