<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2162b04da4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator { use CommonTrait; const kgswyesggeyekgmg = "\x70\162\x5f\157\x70\164\151\x6d\151\x7a\141\164\x69\157\x6e\x5f"; const eaegumogucmwsmsk = "\x50\122\x5f\117\120\124\x49\115\x49\132\x41\124\x49\117\116\x5f"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x4f\160\164\x69\x6d\151\172\x61\164\151\x6f\156", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\160\x75\162\x67\x65\x5f\143\x61\143\150\x65"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\x69\156\137\x69\x6e\x69\x74", [$this, "\x71\x61\x79\x69\145\x75\x73\x63\x73\x73\x6b\x69\161\x61\x63\163"]); $this->waqewsckuayqguos("\142\145\146\157\x72\145\x5f\145\x6e\161\x75\x65\x75\145\137\x62\x61\x63\x6b\x65\156\144\x5f\141\163\x73\145\x74\x73", [$this, "\x65\156\161\x75\x65\165\145"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x61\x6c\154\157\167\x5f\x74\x6f\x5f\x61\144\144\x5f\x62\x61\x63\153\154\x69\x6e\153", [$this, "\163\x65\x69\x61\151\x6f\153\x75\x73\147\171\163\155\163\x79\x71"]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto ngagwiymmmycgscu; } Dashboard::symcgieuakksimmu(); Capability::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); ngagwiymmmycgscu: Optimizer::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x62\x61\x63\x6b\145\x6e\x64", $eygsasmqycagyayw->get("\142\141\143\153\x65\x6e\144\x2e\x6a\163"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\142\141\143\x6b\145\156\x64", $eygsasmqycagyayw->get("\x62\x61\143\x6b\x65\156\144\x2e\x63\163\163"))); } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto qimomesqamyyicmo; } $cuakwceieagskoaa = false; qimomesqamyyicmo: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto sykuuisikqcwuaqu; } if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto gqyyccceswkqcmaa; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto kqkymieyyqaoeymw; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto ssesmiwwmsayksum; } $this->syiuacooagmooima("\143\x6f\156\146\151\x67", __("\x43\157\x6e\146\x69\147\165\x72\141\x74\x69\x6f\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto qkwckeqowgaokkuy; ssesmiwwmsayksum: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto qcceyyqiuiqcyqqm; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); qcceyyqiuiqcyqqm: cooeoemccqiyewks: } aescssauecumgwso: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\157\x6e\146\x69\147\x2e\160\x68\x70", ["\x63\x6f\x6e\146\151\147\163" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\100\x61\x72\x72\x61\x79\x5c\163\x2b\134\50\x40\x69", "\x61\x72\x72\141\171\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\x61\162\x72\141\x79\x5c\x28\134\x73\53\x5c\x29\x40\151", "\141\162\x72\x61\x79\50\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\160\164\x69\155\151\172\141\x74\x69\x6f\x6e\40\143\x6f\x6e\x66\x69\147\x20\146\x69\x6c\145\40\x25\x73\x20\x67\x65\x6e\x65\x72\x61\x74\x65\x64\x20\151\156\x20\x25\163", PR__MDL__OPTIMIZATION), "\x3c\x63\157\144\x65\76{$qogsmwakwacwqogk}\x3c\x2f\x63\157\144\145\x3e", "\74\143\157\144\x65\x3e{$mkomwsiykqigmqca}\74\x2f\x63\157\144\x65\76"), "\157\160\x74\x69\x6d\151\x7a\x61\164\x69\x6f\156\x2d\143\x6f\156\146\x69\147", Constants::smkwuwawwaqyimcq); qkwckeqowgaokkuy: kqkymieyyqaoeymw: augqweqsqioesmim: } kkacggiosquqagew: gqyyccceswkqcmaa: sykuuisikqcwuaqu: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\x64\145\x76\137\x6d\x6f\144\x65" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false), "\144\x65\x62\x75\x67\137\x6d\x6f\x64\145" => false, "\x63\x6f\x6f\153\x69\145\x5f\x68\x61\163\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\117\117\x4b\111\x45\x48\x41\123\110"), "\162\145\152\145\143\164\137\143\157\x6f\153\x69\145\x73" => $this->mukwwwucwusmmqau(), "\154\x6f\x67\147\145\x64\x5f\151\x6e\137\x63\x6f\157\x6b\151\145" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x4c\117\x47\x47\x45\x44\137\x49\116\x5f\113\105\x59")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\157\156\146\151\x67\x75\x72\x61\164\x69\157\x6e\x73", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\162\145\x67\x5f\x71\165\x6f\164\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\x2e\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\x70\x2d\160\157\x73\x74\x70\x61\163\163\137"; $osqkgokmuiasuukg[] = "\x77\160\x74\157\x75\143\150\x5f\x73\x77\151\x74\x63\150\137\x74\x6f\147\147\x6c\145"; $osqkgokmuiasuukg[] = "\x63\157\x6d\155\145\156\x74\137\x61\x75\164\150\x6f\x72\x5f"; $osqkgokmuiasuukg[] = "\143\x6f\155\155\145\156\x74\x5f\x61\x75\x74\x68\157\162\137\x65\x6d\x61\151\x6c\x5f"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x72\145\152\145\x63\x74\x5f\143\x6f\x6f\x6b\x69\145\x73", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
