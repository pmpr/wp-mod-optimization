<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d22e0b4cda5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Common; abstract class Advanced extends Common { protected string $filename = ''; protected string $directory = ''; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\x69\156\x5f\151\156\x69\164", [$this, "\171\x65\171\151\x67\x75\171\145\x67\x6d\x6d\x79\165\163\x65\141"]); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs, [$this, "\x73\167\x69\x65\141\x79\x65\x79\x73\x61\167\143\145\x65\x6b\153"]); } public function mawoacksgosuccme() : string { return $this->filename; } public function uouwqaeikimumwki() : string { return $this->directory; } public function swieayeysawceekk() { if (!($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk())) { goto gqaimiooakyykccy; } $iiaumsgauuyeqksw->remove($this->agkwcckksaegcsce()); gqaimiooakyykccy: } public function yeyiguyegmmyusea() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { goto agemeseegiuuowgo; } $this->qeoakmiowssoqaom(); agemeseegiuuowgo: } public function qeoakmiowssoqaom() { if (!($qookweymeqawmcwo = $this->gayqqwwuycceosii())) { goto uuisaeysawuagysg; } $acqcekoeswseswws = $this->agkwcckksaegcsce(); $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists($acqcekoeswseswws)) { goto gykuaukukosiocoy; } $oceoeyaeucyymkao = $this->couwksyewgyeooqe()->gikwwgqmwccescgy(); $sccqccoqgskgygmg = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\x50\122\137\117\x50\124\111\115\x49\x5a\x41\124\x49\x4f\x4e\x5f\x56\105\122\x53\x49\117\116", ''); if (!($oceoeyaeucyymkao !== $sccqccoqgskgygmg)) { goto goswwiomuackymqi; } $iiaumsgauuyeqksw->remove($acqcekoeswseswws); goswwiomuackymqi: gykuaukukosiocoy: if (!(!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk())) { goto camawumockccayaq; } $mkomwsiykqigmqca = $this->uouwqaeikimumwki(); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\141\144\166\x61\156\143\x65\144\56\160\150\160", $qookweymeqawmcwo); $ewgwqamkygiqaawc = (string) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\143\x61\143\x68\145\x5f\x68\x74\155\154\x5f\141\x64\166\141\156\x63\x65\144\137\146\151\x6c\145", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $this->mawoacksgosuccme(), $ewgwqamkygiqaawc); $wkcwykowmmmwioqs = $this->mawoacksgosuccme(); $this->cimaucgayqyyccoc(sprintf(__("\117\160\164\x69\155\151\172\141\x74\151\x6f\x6e\40\45\163\x20\x66\151\x6c\145\40\147\145\x6e\145\x72\141\x74\x65\x64\40\163\x75\x63\143\x65\x73\163\x66\x75\154\x6c\171\40\151\x6e\x20\x25\x73\x2e", PR__MDL__OPTIMIZATION), $wkcwykowmmmwioqs, $mkomwsiykqigmqca), $wkcwykowmmmwioqs, Constants::smkwuwawwaqyimcq); camawumockccayaq: uuisaeysawuagysg: } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if (!(!$this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\141\143\x68\x65\x5f\150\164\155\154\137\147\x65\x6e\145\x72\141\x74\x65\137\141\144\x76\x61\x6e\143\x65\x64\x5f\146\151\x6c\145", true) && !$miiyyswuessymmwe->cmaecekuqkwmemms("\x50\x52\137\117\x50\124\x49\115\111\132\101\124\111\x4f\116\x5f\101\104\x56\x41\116\103\105\104") && !$miiyyswuessymmwe->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->uouwqaeikimumwki()))) { goto ggqeakyaggiuegek; } $umuecysoywoumgwo = false; $this->syiuacooagmooima("\x61\144\x76\141\156\x63\145\x64", sprintf(__("\101\x64\166\141\x6e\x63\145\x64\x20\x46\151\154\145\50\45\x73\51", PR__MDL__OPTIMIZATION), $this->mawoacksgosuccme()), $this->uouwqaeikimumwki()); ggqeakyaggiuegek: return $umuecysoywoumgwo; } public function agkwcckksaegcsce() : string { return trailingslashit($this->uouwqaeikimumwki()) . $this->mawoacksgosuccme(); } public abstract function gayqqwwuycceosii() : array; }
