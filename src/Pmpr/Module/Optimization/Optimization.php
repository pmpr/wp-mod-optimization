<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eafa500a52f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\HelperTrait; class Optimization extends ComponentInitiator { use HelperTrait; const kgswyesggeyekgmg = "\x70\x72\x5f\157\160\x74\x69\155\151\x7a\x61\164\x69\157\x6e\x5f"; const eaegumogucmwsmsk = "\x50\122\137\117\x50\124\x49\115\x49\132\101\x54\111\117\116\x5f"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\117\160\x74\x69\155\x69\x7a\x61\x74\151\157\x6e", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x70\165\162\x67\x65\137\143\141\x63\150\x65"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\151\x6e\137\151\156\151\x74", [$this, "\161\141\x79\x69\145\x75\163\x63\163\163\153\151\x71\141\x63\x73"]); $this->waqewsckuayqguos("\x62\x65\146\x6f\x72\145\137\145\x6e\x71\165\145\x75\145\137\142\141\x63\x6b\145\x6e\144\x5f\141\x73\163\145\164\163", [$this, "\145\x6e\x71\x75\x65\165\145"]); } public function kgquecmsgcouyaya() { } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto gscyiqmmegqmqcoe; } Dashboard::symcgieuakksimmu(); Capability::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); gscyiqmmegqmqcoe: Optimizer::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\142\141\x63\153\x65\x6e\x64", $eygsasmqycagyayw->get("\x62\x61\143\153\145\156\x64\x2e\x6a\163"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\142\141\x63\153\x65\x6e\x64", $eygsasmqycagyayw->get("\142\x61\x63\153\x65\x6e\x64\x2e\143\163\x73"))); } public function qayieuscsskiqacs() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto igmawmwssyskqqag; } if (!(($ucasskoyoewwmmii = $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto cuayqmasemsqsume; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto eekkcooqswqouoei; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto kocaieyauyiqmyiy; } $this->syiuacooagmooima("\143\157\x6e\x66\151\147", __("\x43\x6f\x6e\x66\x69\x67\165\x72\141\164\x69\157\x6e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto gcqssckowmywoesw; kocaieyauyiqmyiy: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto icoiqskygugkgmkm; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); icoiqskygugkgmkm: maguoggkqamaiuag: } swicauyqusmgeccu: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\x6f\156\x66\x69\147\x2e\160\150\160", ["\143\x6f\156\146\x69\147\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\100\141\162\x72\141\x79\134\163\53\x5c\x28\x40\151", "\x61\162\x72\141\x79\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\x61\x72\162\x61\x79\x5c\50\x5c\x73\x2b\x5c\x29\100\151", "\141\x72\x72\x61\171\x28\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\x70\x74\x69\x6d\151\x7a\141\164\151\x6f\156\40\143\157\x6e\146\151\147\x20\x66\x69\x6c\x65\x20\x25\163\40\x67\145\156\x65\x72\141\x74\145\144\40\151\156\40\45\x73", PR__MDL__OPTIMIZATION), "\74\x63\x6f\144\x65\76{$qogsmwakwacwqogk}\74\57\143\157\x64\x65\x3e", "\74\143\157\x64\145\x3e{$mkomwsiykqigmqca}\74\x2f\143\x6f\x64\x65\x3e"), "\x6f\160\164\151\x6d\151\172\141\164\151\157\156\x2d\x63\157\x6e\146\151\147", Constants::smkwuwawwaqyimcq); gcqssckowmywoesw: eekkcooqswqouoei: qosswumywsaeyqus: } mieoguuqiwqioeqa: cuayqmasemsqsume: igmawmwssyskqqag: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\144\x65\166\137\x6d\x6f\x64\145" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false), "\144\x65\x62\165\147\137\x6d\157\144\145" => false, "\143\x6f\x6f\x6b\x69\x65\137\x68\141\x73\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\117\x4f\x4b\x49\105\110\x41\x53\x48"), "\x72\145\x6a\x65\x63\x74\x5f\x63\157\x6f\153\x69\x65\x73" => $this->mukwwwucwusmmqau(), "\154\157\x67\x67\x65\x64\137\x69\x6e\x5f\x63\x6f\x6f\153\151\145" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x4c\x4f\x47\x47\105\104\137\111\x4e\x5f\113\x45\x59")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\157\x6e\146\151\x67\165\x72\141\164\x69\x6f\x6e\163", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\x72\145\x67\x5f\x71\x75\157\164\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\x2e\x2b", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\160\x2d\160\x6f\x73\x74\160\141\x73\163\137"; $osqkgokmuiasuukg[] = "\x77\160\164\x6f\165\x63\x68\x5f\x73\x77\x69\x74\x63\150\x5f\164\x6f\147\147\154\x65"; $osqkgokmuiasuukg[] = "\x63\x6f\x6d\155\x65\x6e\x74\x5f\x61\x75\x74\150\157\162\137"; $osqkgokmuiasuukg[] = "\143\x6f\x6d\155\x65\156\164\137\x61\x75\x74\x68\157\162\137\145\155\141\x69\x6c\x5f"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x72\145\x6a\145\x63\164\x5f\143\x6f\x6f\x6b\x69\145\163", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
