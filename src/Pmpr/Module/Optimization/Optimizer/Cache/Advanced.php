<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581d1c9b1ab             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; abstract class Advanced extends Container { protected string $filename = ''; protected string $directory = ''; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\151\156\137\x69\156\151\164", [$this, "\171\x65\171\x69\x67\165\171\x65\147\x6d\155\171\x75\x73\145\x61"]); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs, [$this, "\x73\167\151\x65\x61\x79\x65\x79\163\141\x77\143\x65\x65\153\x6b"]); } public function mawoacksgosuccme() : string { return $this->filename; } public function uouwqaeikimumwki() : string { return $this->directory; } public function swieayeysawceekk() { if ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()) { $iiaumsgauuyeqksw->remove($this->agkwcckksaegcsce()); } } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { $this->qeoakmiowssoqaom(); } } public function qeoakmiowssoqaom() { if ($qookweymeqawmcwo = $this->gayqqwwuycceosii()) { $acqcekoeswseswws = $this->agkwcckksaegcsce(); $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw->exists($acqcekoeswseswws)) { $oceoeyaeucyymkao = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gikwwgqmwccescgy($this); $sccqccoqgskgygmg = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\x50\x52\x5f\117\120\124\x49\x4d\x49\x5a\101\x54\111\117\116\137\x56\105\122\123\111\117\116", ''); if ($oceoeyaeucyymkao !== $sccqccoqgskgygmg) { $iiaumsgauuyeqksw->remove($acqcekoeswseswws); } } if (!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk()) { $mkomwsiykqigmqca = $this->uouwqaeikimumwki(); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\141\x64\x76\141\156\x63\145\144\x2e\x70\150\x70", $qookweymeqawmcwo); $ewgwqamkygiqaawc = (string) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\x61\143\x68\145\x5f\150\164\x6d\x6c\137\x61\x64\x76\141\x6e\143\145\144\x5f\x66\151\154\x65", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $this->mawoacksgosuccme(), $ewgwqamkygiqaawc); $wkcwykowmmmwioqs = $this->mawoacksgosuccme(); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__("\117\x70\164\151\155\x69\x7a\x61\164\x69\157\x6e\40\x25\x73\x20\146\151\154\145\x20\147\145\156\145\x72\x61\x74\145\144\x20\x73\165\143\x63\145\163\163\x66\x75\x6c\x6c\171\40\151\156\40\x25\163\56", PR__MDL__OPTIMIZATION), $wkcwykowmmmwioqs, $mkomwsiykqigmqca), $wkcwykowmmmwioqs, Constants::smkwuwawwaqyimcq); } } } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if (!$this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\141\143\150\x65\x5f\x68\x74\x6d\x6c\137\147\x65\x6e\145\162\141\x74\x65\x5f\141\x64\166\x61\156\143\x65\144\137\x66\x69\154\145", true) && !$miiyyswuessymmwe->cmaecekuqkwmemms("\x50\x52\x5f\x4f\x50\x54\111\x4d\x49\132\101\124\x49\x4f\116\x5f\101\x44\x56\101\116\x43\x45\x44") && !$miiyyswuessymmwe->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->uouwqaeikimumwki())) { $umuecysoywoumgwo = false; $this->caokeucsksukesyo()->kwoycoqogoswycgg()->gsucycggaoeuokcg($this, "\x61\x64\166\x61\x6e\143\145\x64", sprintf(__("\101\144\x76\141\156\x63\x65\x64\x20\106\151\154\145\50\45\163\51", PR__MDL__OPTIMIZATION), $this->mawoacksgosuccme()), $this->uouwqaeikimumwki()); } return $umuecysoywoumgwo; } public function agkwcckksaegcsce() : string { return trailingslashit($this->uouwqaeikimumwki()) . $this->mawoacksgosuccme(); } public abstract function gayqqwwuycceosii() : array; }
