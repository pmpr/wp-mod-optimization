<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b61878830b2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::gyiksueiaeykqaqq))) { goto keyiswqkmqqquosw; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\141\164\150"); $qogsmwakwacwqogk["\x70\x61\x74\150"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\157\163\x74"]) . $qogsmwakwacwqogk["\x70\x61\x74\150"] . "\56\x70\150\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; keyiswqkmqqquosw: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\157\156\x66\x69\x67\165\162\141\x74\x69\157\x6e\137\146\x69\154\145\163\x5f\160\x61\164\x68", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\120\x52\x5f\x4f\120\x54\x5f\x43\x41\x43\110\105\x5f\x44\117\116\124\137\105\x4e\103\x4f\x44\x45\137\x46\111\x4c\x45\x4e\101\115\105\123")) { goto mioaoacqueiyueak; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); mioqycmmeucswoms: } imaiuooqwwokwemw: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); mioaoacqueiyueak: return untrailingslashit($migiiksoiymissge) . "\57\x66\x69\154\x65\x73\57\151\x6e\x64\x65\170"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\145\x4f\x70\164\x69\155\x69\x7a\x65", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\x41\162\x65\40\171\157\165\40\163\165\x72\145\x20\x61\x62\157\165\164\x20\x72\145\x4f\160\x74\x69\155\151\x7a\x65\40\164\x68\x69\163\x20\x70\x61\x67\145\x3f", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\x6c\x61\163\x73" => "\157\x70\x74\x2d\160\x75\162\147\145\55\x70\x6f\x73\164\x2d\x63\141\x63\x68\145\x20\160\162\55\142\164\x6e\x20\142\164\x6e\x2d\x70\162\x69\155\141\162\171", "\164\151\x74\x6c\x65" => $meqocwsecsywiiqs, "\x64\141\164\x61\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\141\164\x61\x2d\155\x69\x63\x72\157\x6d\157\144\x61\154\x2d\143\154\157\x73\x65"]]], $meqocwsecsywiiqs, ["\143\x6c\x61\x73\x73" => "\x6f\160\164\x2d\x70\x61\147\145\x2d\141\143\x74\151\157\x6e"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\157\x70\x74\x5f\147\145\164\137\x62\x75\144\x67\145\164", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\157\x70\164\137\x75\163\x65\144\137\x62\165\x64\147\x65\164", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\157\x70\164\55\x70\x72\145\x6c\157\x61\144") || $this->ccmqswoueyeqkoeq("\160\x72\x65\154\157\x61\144"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\x64\x6f\156\164\x2d\157\x70\x74"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(self::kgswyesggeyekgmg . "\141\154\154\x6f\167\x5f\164\157\x5f\x73\164\141\x72\164\137\x62\165\146\146\x65\x72\x5f\x70\x72\157\x63\145\163\x73", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\122\137\x4f\x50\124\x49\115\111\x5a\x41\x54\111\117\x4e\137\104\x4f\116\x54\137\117\120\x54\111\115\x49\x5a\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\142\171\x70\141\163\163\137\x6c\x69\x73\x74", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto oaseseemoaqcgqeu; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); oaseseemoaqcgqeu: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x69\x73\x5f\142\171\x70\x61\x73\x73", false, $migiiksoiymissge); } }
