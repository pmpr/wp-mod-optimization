<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d3161a77b51             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq))) { goto uamuuwkyuqomqyuy; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\x61\x74\150"); $qogsmwakwacwqogk["\160\x61\164\150"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\157\163\x74"]) . $qogsmwakwacwqogk["\x70\141\x74\x68"] . "\x2e\x70\x68\160"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; uamuuwkyuqomqyuy: return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\x6f\x6e\x66\x69\147\165\x72\141\164\151\157\x6e\x5f\146\151\154\x65\x73\137\x70\x61\x74\150", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\x50\122\137\117\x50\124\x5f\103\101\x43\110\105\x5f\x44\117\116\124\x5f\x45\116\103\117\x44\x45\137\x46\x49\x4c\105\116\101\x4d\x45\x53")) { goto cieumoqayigkoocy; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); iyaugygcsmqqqkmo: } ekwuycsiuqwycqea: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); cieumoqayigkoocy: return untrailingslashit($migiiksoiymissge) . "\x2f\146\151\x6c\x65\x73\x2f\151\156\x64\145\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = Constants::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\145\117\160\x74\x69\155\151\172\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x41\x72\x65\x20\x79\157\165\40\x73\x75\162\x65\40\x61\142\157\x75\164\x20\162\145\117\160\x74\151\x6d\151\x7a\145\x20\x74\x68\x69\x73\40\x70\141\147\x65\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\x6c\141\163\x73" => "\x6f\160\164\x2d\x70\165\162\x67\x65\55\x70\157\x73\x74\55\x63\141\x63\150\145\40\x70\162\55\x62\x74\x6e\x20\x62\164\x6e\55\160\162\x69\155\141\x72\171", "\x74\x69\164\x6c\x65" => $meqocwsecsywiiqs, "\x64\141\x74\141\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\x61\164\141\55\x6d\x69\x63\x72\x6f\155\x6f\144\x61\154\55\143\154\157\x73\x65"]]], $meqocwsecsywiiqs, ["\143\154\141\163\163" => "\x6f\x70\164\x2d\160\x61\147\145\x2d\141\143\164\151\x6f\156"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\x6f\160\x74\x5f\147\145\x74\137\142\165\144\147\145\x74", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\157\160\x74\137\165\163\145\144\x5f\x62\165\144\147\145\x74", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x6f\160\x74\x2d\160\x72\145\x6c\157\141\x64") || $this->ccmqswoueyeqkoeq("\160\162\145\x6c\157\x61\144"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\157\x6e\164\x2d\157\160\164"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(Optimization::kgswyesggeyekgmg . "\141\154\x6c\157\x77\137\x74\x6f\137\x73\164\141\162\x74\137\x62\x75\146\146\x65\162\x5f\160\x72\x6f\x63\145\x73\163", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\120\x52\137\117\x50\124\111\x4d\x49\x5a\101\124\111\x4f\x4e\x5f\x44\x4f\x4e\124\x5f\117\x50\124\111\115\111\132\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\142\171\160\x61\163\x73\x5f\x6c\x69\163\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto yggciikgkomgeqsc; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); yggciikgkomgeqsc: return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\163\x5f\142\171\160\141\x73\x73", false, $migiiksoiymissge); } }
