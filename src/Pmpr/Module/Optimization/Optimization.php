<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d31ce4ed382             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator { use CommonTrait; const kgswyesggeyekgmg = "\160\162\x5f\x6f\x70\x74\x69\155\151\172\x61\x74\151\157\x6e\x5f"; const eaegumogucmwsmsk = "\x50\122\137\x4f\x50\124\x49\115\x49\132\101\124\x49\117\116\137"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\117\x70\164\x69\155\151\172\x61\164\151\157\156", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x70\165\162\x67\145\x5f\x63\141\x63\150\145"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\151\156\137\151\156\151\x74", [$this, "\161\x61\171\x69\x65\165\x73\x63\x73\163\x6b\151\x71\141\x63\163"]); $this->waqewsckuayqguos("\x62\145\x66\x6f\162\x65\137\145\156\161\165\145\165\x65\x5f\142\141\x63\153\145\156\x64\x5f\141\163\x73\x65\164\163", [$this, "\145\156\x71\x75\145\x75\145"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x61\x6c\x6c\157\x77\137\164\157\137\141\144\x64\137\142\x61\143\153\154\151\x6e\153", [$this, "\x73\145\x69\x61\x69\x6f\x6b\x75\163\147\x79\163\155\163\x79\161"]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto qcceyyqiuiqcyqqm; } Dashboard::symcgieuakksimmu(); Capability::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); qcceyyqiuiqcyqqm: Optimizer::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\142\x61\143\153\145\x6e\x64", $eygsasmqycagyayw->get("\142\x61\x63\x6b\x65\156\x64\56\x6a\x73"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x62\x61\x63\x6b\145\156\144", $eygsasmqycagyayw->get("\142\141\143\x6b\x65\156\x64\x2e\x63\163\163"))); } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto ssesmiwwmsayksum; } $cuakwceieagskoaa = false; ssesmiwwmsayksum: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto gwksywaoeowkesei; } if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto amgsicqmemeuuaem; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto mgieeyuyuoeccaog; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto weiaigyyigkusucy; } $this->syiuacooagmooima("\x63\157\x6e\146\151\x67", __("\103\157\156\x66\151\x67\x75\162\141\x74\x69\157\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto bagkewioewygysea; weiaigyyigkusucy: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto mquyemuqcqeassqc; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); mquyemuqcqeassqc: sykuuisikqcwuaqu: } gqyyccceswkqcmaa: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\157\x6e\x66\x69\147\56\x70\150\x70", ["\x63\x6f\x6e\146\151\147\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\100\141\x72\162\x61\x79\x5c\x73\x2b\134\x28\100\x69", "\141\162\x72\x61\x79\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\141\x72\162\x61\171\x5c\50\x5c\x73\53\134\x29\x40\151", "\141\162\x72\141\171\x28\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\x70\164\151\x6d\x69\172\x61\x74\151\157\156\x20\143\157\x6e\x66\x69\147\x20\x66\x69\154\x65\40\45\163\x20\147\145\x6e\145\162\x61\164\x65\x64\40\x69\156\x20\x25\x73", PR__MDL__OPTIMIZATION), "\74\x63\x6f\x64\145\76{$qogsmwakwacwqogk}\x3c\57\143\157\144\145\x3e", "\74\143\157\x64\145\x3e{$mkomwsiykqigmqca}\x3c\57\x63\x6f\x64\x65\76"), "\157\x70\x74\151\155\x69\x7a\141\164\151\x6f\x6e\x2d\143\157\156\146\151\x67", Constants::smkwuwawwaqyimcq); bagkewioewygysea: mgieeyuyuoeccaog: kqkymieyyqaoeymw: } qkwckeqowgaokkuy: amgsicqmemeuuaem: gwksywaoeowkesei: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\144\x65\x76\x5f\x6d\157\x64\145" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false), "\144\x65\142\x75\147\137\155\x6f\144\x65" => false, "\143\157\157\x6b\151\x65\137\x68\x61\x73\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x43\x4f\x4f\x4b\111\x45\x48\x41\x53\x48"), "\x72\x65\x6a\x65\143\164\137\x63\x6f\x6f\x6b\151\x65\163" => $this->mukwwwucwusmmqau(), "\x6c\157\x67\x67\x65\x64\137\x69\x6e\x5f\x63\157\157\153\151\145" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\114\x4f\x47\x47\105\104\x5f\111\116\137\x4b\x45\131")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\x6f\x6e\x66\x69\147\165\162\x61\164\151\157\x6e\x73", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\162\145\x67\137\161\x75\157\x74\x65", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\x2e\x2b", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\x70\x2d\x70\157\163\164\x70\141\163\163\x5f"; $osqkgokmuiasuukg[] = "\167\160\164\157\x75\143\x68\x5f\163\x77\151\164\x63\150\137\x74\x6f\147\147\154\145"; $osqkgokmuiasuukg[] = "\x63\157\x6d\x6d\145\156\164\137\141\165\x74\x68\157\162\137"; $osqkgokmuiasuukg[] = "\143\x6f\155\155\145\156\x74\137\x61\165\x74\x68\157\162\x5f\145\x6d\141\151\154\x5f"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x72\x65\152\x65\x63\164\x5f\x63\157\157\153\151\x65\x73", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
