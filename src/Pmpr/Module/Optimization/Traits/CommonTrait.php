<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d31c5704a7a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq))) { goto uamuuwkyuqomqyuy; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\x61\x74\150"); $qogsmwakwacwqogk["\x70\x61\x74\150"] = $mkomwsiykqigmqca ? str_replace("\57", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\157\x73\164"]) . $qogsmwakwacwqogk["\160\x61\x74\150"] . "\x2e\x70\150\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; uamuuwkyuqomqyuy: return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\143\157\x6e\146\x69\147\x75\162\x61\164\151\157\156\137\146\151\x6c\145\163\x5f\x70\x61\164\150", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\x50\x52\x5f\117\x50\x54\137\x43\x41\x43\x48\105\137\x44\117\x4e\x54\x5f\x45\116\103\x4f\104\105\x5f\x46\x49\114\105\x4e\101\115\x45\x53")) { goto cieumoqayigkoocy; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); iyaugygcsmqqqkmo: } ekwuycsiuqwycqea: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); cieumoqayigkoocy: return untrailingslashit($migiiksoiymissge) . "\x2f\146\x69\154\x65\163\x2f\x69\156\144\145\170"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = Constants::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\145\x4f\x70\x74\151\x6d\x69\172\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x41\162\x65\x20\171\157\x75\40\x73\165\x72\145\x20\x61\142\x6f\165\x74\x20\162\145\x4f\160\164\x69\155\151\172\x65\40\x74\x68\x69\163\x20\160\141\x67\145\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\x6c\141\163\163" => "\x6f\160\164\x2d\x70\165\162\x67\145\x2d\160\x6f\163\164\x2d\143\141\x63\x68\145\x20\160\x72\55\142\x74\156\40\x62\x74\156\x2d\x70\162\x69\155\x61\162\171", "\x74\x69\x74\x6c\145" => $meqocwsecsywiiqs, "\x64\141\164\x61\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\141\x74\x61\x2d\155\151\x63\162\x6f\155\x6f\144\x61\x6c\x2d\x63\154\x6f\x73\145"]]], $meqocwsecsywiiqs, ["\x63\154\141\x73\163" => "\157\x70\164\x2d\x70\x61\147\x65\x2d\141\x63\x74\x69\157\156"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\x6f\160\164\x5f\147\x65\x74\137\142\165\x64\x67\145\x74", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\x6f\x70\x74\x5f\165\163\x65\144\x5f\x62\165\144\x67\x65\x74", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x6f\160\164\x2d\160\162\145\154\x6f\x61\x64") || $this->ccmqswoueyeqkoeq("\x70\162\145\154\157\x61\x64"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\x64\x6f\156\x74\55\157\x70\x74"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(Optimization::kgswyesggeyekgmg . "\141\154\x6c\x6f\x77\137\x74\x6f\137\163\164\141\x72\164\x5f\x62\x75\146\x66\x65\x72\x5f\x70\x72\x6f\x63\145\163\x73", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\120\x52\137\x4f\120\124\111\115\x49\132\101\x54\x49\117\116\137\104\x4f\x4e\124\x5f\x4f\x50\x54\x49\115\111\132\105", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\142\x79\x70\141\163\x73\137\x6c\151\163\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto yggciikgkomgeqsc; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); yggciikgkomgeqsc: return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\163\x5f\x62\x79\160\141\163\163", false, $migiiksoiymissge); } }
