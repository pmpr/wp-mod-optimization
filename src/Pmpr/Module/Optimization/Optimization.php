<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665e0f163107a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator implements CommonInterface { use CommonTrait; public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\117\x70\164\151\x6d\x69\x7a\141\x74\x69\x6f\x6e", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::wwgqqgayyagycysu); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\151\x6e\137\x69\156\151\x74", [$this, "\171\145\171\x69\x67\165\171\145\x67\155\155\x79\165\163\x65\x61"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x61\x6c\x6c\x6f\167\x5f\x74\157\x5f\x61\144\144\x5f\142\x61\143\x6b\x6c\151\x6e\153", [$this, "\x73\145\151\x61\x69\157\153\x75\x73\x67\171\x73\x6d\163\171\x71"]); } public function mameiwsayuyquoeq() { Optimizer::symcgieuakksimmu(); Capability::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto umccwcqwkoiaakmu; } Subscription::symcgieuakksimmu(); umccwcqwkoiaakmu: } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto ekgkiioywougquka; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\141\144\x6d\x69\x6e", $eygsasmqycagyayw->get("\141\144\x6d\151\x6e\56\152\163"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x61\x64\x6d\151\x6e", $eygsasmqycagyayw->get("\x61\x64\155\x69\156\56\x63\163\163"))); ekgkiioywougquka: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto wyyowcsciaqkuiuq; } $cuakwceieagskoaa = false; wyyowcsciaqkuiuq: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto gsggsmmwcmkgyyss; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto qocgmocqauaaekii; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto kcqueaewmayywqeq; } $this->syiuacooagmooima("\143\157\156\x66\151\147", __("\x43\x6f\x6e\x66\151\147\165\162\141\164\x69\157\x6e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto uagsgicwwcakecwq; kcqueaewmayywqeq: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto gcoeaokkagaaeuse; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); gcoeaokkagaaeuse: maeccckgcsaaumkw: } qwgkwokcyocqiyee: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\x6f\x6e\x66\151\x67\56\x70\x68\x70", ["\143\x6f\x6e\x66\x69\147\163" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\x61\x72\x72\141\171\x5c\x73\53\134\x28\100\x69", "\141\162\162\141\x79\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\100\141\162\162\x61\x79\x5c\x28\x5c\163\53\x5c\51\x40\x69", "\141\x72\x72\x61\x79\x28\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\160\x74\151\155\x69\172\x61\x74\x69\x6f\x6e\40\x63\157\x6e\146\x69\x67\40\x66\x69\154\x65\40\x25\x73\x20\147\x65\156\145\x72\141\x74\145\144\x20\151\x6e\x20\45\x73", PR__MDL__OPTIMIZATION), "\x3c\x63\157\144\x65\x3e{$qogsmwakwacwqogk}\x3c\57\x63\157\x64\x65\x3e", "\x3c\143\x6f\144\x65\76{$mkomwsiykqigmqca}\74\57\143\157\x64\145\76"), "\x6f\x70\x74\x69\155\151\x7a\141\x74\x69\x6f\156\x2d\143\157\156\146\x69\147", self::smkwuwawwaqyimcq); uagsgicwwcakecwq: qocgmocqauaaekii: smksoismyouykeoa: } imquwacukaswoyka: gsggsmmwcmkgyyss: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\144\x65\142\165\x67\x5f\155\157\144\x65" => false, "\143\157\x6f\x6b\151\145\137\150\141\x73\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\117\x4f\113\x49\x45\x48\x41\x53\x48"), "\162\145\152\145\143\x74\x5f\x63\157\x6f\153\x69\145\x73" => $this->mukwwwucwusmmqau(), "\x6c\157\x67\147\145\x64\x5f\x69\156\x5f\143\x6f\x6f\x6b\151\145" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\114\x4f\x47\107\x45\104\x5f\111\116\137\x4b\x45\131")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\157\156\146\x69\147\x75\x72\x61\x74\x69\157\x6e\x73", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\x72\145\147\137\x71\165\157\x74\x65", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\x70\x2d\160\157\x73\x74\160\141\163\x73\137"; $osqkgokmuiasuukg[] = "\x77\x70\x74\x6f\x75\x63\x68\137\x73\167\x69\x74\x63\150\x5f\x74\157\147\147\154\x65"; $osqkgokmuiasuukg[] = "\143\157\155\x6d\x65\156\164\x5f\x61\x75\164\x68\x6f\162\137"; $osqkgokmuiasuukg[] = "\x63\x6f\155\155\x65\156\164\x5f\141\165\x74\150\x6f\x72\137\145\155\141\151\154\137"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\162\x65\152\x65\x63\x74\137\143\x6f\157\153\151\145\163", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
