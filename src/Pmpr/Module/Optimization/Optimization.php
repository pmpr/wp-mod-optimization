<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665afacdd5cec             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator implements CommonInterface { use CommonTrait; public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4f\160\x74\151\155\151\x7a\x61\x74\x69\157\156", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::wwgqqgayyagycysu); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\151\x6e\137\x69\x6e\151\164", [$this, "\171\145\x79\x69\147\165\171\x65\x67\155\x6d\171\165\163\145\x61"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x61\154\154\x6f\x77\x5f\164\157\x5f\x61\144\x64\137\x62\141\143\153\x6c\x69\x6e\153", [$this, "\x73\145\x69\x61\x69\157\x6b\165\x73\147\x79\x73\155\163\x79\161"]); } public function mameiwsayuyquoeq() { Optimizer::symcgieuakksimmu(); Capability::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto qwgkwokcyocqiyee; } Subscription::symcgieuakksimmu(); qwgkwokcyocqiyee: } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto maeccckgcsaaumkw; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\141\144\x6d\151\x6e", $eygsasmqycagyayw->get("\x61\144\155\x69\x6e\x2e\152\163"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x61\144\155\x69\x6e", $eygsasmqycagyayw->get("\141\144\x6d\151\x6e\x2e\143\163\x73"))); maeccckgcsaaumkw: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto gcoeaokkagaaeuse; } $cuakwceieagskoaa = false; gcoeaokkagaaeuse: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto muimagegskoisckc; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto cycasoiysmksuwqk; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto ikygockuuyimmmwk; } $this->syiuacooagmooima("\143\157\156\x66\x69\147", __("\103\x6f\x6e\x66\151\x67\165\162\x61\x74\151\157\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto uwmcugkwqwcuqqsq; ikygockuuyimmmwk: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto yweucowesgsoewyc; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); yweucowesgsoewyc: gsggsmmwcmkgyyss: } qocgmocqauaaekii: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\157\x6e\x66\151\147\56\x70\x68\160", ["\x63\157\156\146\x69\x67\163" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\141\162\x72\141\x79\134\163\53\x5c\x28\100\x69", "\141\162\162\x61\171\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\x61\x72\162\141\x79\134\50\134\x73\x2b\134\x29\100\151", "\141\162\162\141\171\50\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\x70\164\151\155\151\172\141\x74\151\157\x6e\x20\143\157\156\x66\x69\x67\40\146\x69\154\x65\40\x25\x73\x20\147\x65\156\145\x72\141\164\145\144\x20\x69\156\40\45\x73", PR__MDL__OPTIMIZATION), "\74\143\157\144\145\76{$qogsmwakwacwqogk}\x3c\57\x63\157\144\145\x3e", "\74\x63\x6f\x64\x65\76{$mkomwsiykqigmqca}\74\x2f\x63\157\144\145\76"), "\x6f\160\x74\151\155\x69\x7a\141\x74\x69\157\156\55\x63\157\156\x66\x69\x67", self::smkwuwawwaqyimcq); uwmcugkwqwcuqqsq: cycasoiysmksuwqk: uagsgicwwcakecwq: } kcqueaewmayywqeq: muimagegskoisckc: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\x64\x65\x62\165\x67\x5f\x6d\157\144\145" => false, "\143\157\x6f\x6b\x69\145\x5f\x68\141\x73\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x43\x4f\x4f\x4b\111\x45\x48\x41\x53\x48"), "\162\145\152\x65\x63\x74\137\x63\157\x6f\x6b\x69\145\163" => $this->mukwwwucwusmmqau(), "\154\157\147\x67\x65\144\x5f\x69\x6e\137\143\x6f\157\x6b\x69\145" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x4c\x4f\x47\x47\105\x44\x5f\111\x4e\137\x4b\105\x59")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\x6f\x6e\x66\151\147\x75\162\x61\x74\151\157\x6e\x73", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\162\x65\147\137\161\x75\x6f\164\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\160\55\160\x6f\x73\x74\160\141\163\163\137"; $osqkgokmuiasuukg[] = "\x77\x70\164\x6f\x75\143\150\x5f\x73\x77\151\x74\143\150\137\x74\x6f\147\147\x6c\x65"; $osqkgokmuiasuukg[] = "\143\x6f\x6d\155\145\x6e\164\x5f\x61\x75\164\x68\x6f\x72\137"; $osqkgokmuiasuukg[] = "\x63\x6f\155\155\x65\156\x74\x5f\141\165\164\x68\157\162\x5f\145\155\141\x69\154\x5f"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\162\x65\152\x65\x63\164\137\143\x6f\157\x6b\151\145\163", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
