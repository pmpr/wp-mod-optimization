<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b9397c5c62b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::gyiksueiaeykqaqq))) { goto imaiuooqwwokwemw; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\x61\164\150"); $qogsmwakwacwqogk["\x70\x61\164\x68"] = $mkomwsiykqigmqca ? str_replace("\57", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\157\x73\x74"]) . $qogsmwakwacwqogk["\x70\x61\x74\150"] . "\56\160\150\160"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; imaiuooqwwokwemw: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\157\156\146\151\x67\x75\162\x61\164\x69\x6f\x6e\137\146\x69\154\145\x73\x5f\160\x61\164\150", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\120\x52\x5f\x4f\120\x54\137\103\x41\x43\x48\x45\x5f\104\117\x4e\x54\x5f\x45\x4e\103\117\x44\105\137\x46\x49\114\105\x4e\101\x4d\x45\123")) { goto oaseseemoaqcgqeu; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); mioaoacqueiyueak: } mioqycmmeucswoms: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); oaseseemoaqcgqeu: return untrailingslashit($migiiksoiymissge) . "\57\x66\151\x6c\145\163\x2f\x69\x6e\x64\x65\170"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\145\117\x70\164\151\155\151\172\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\101\162\x65\40\171\157\165\40\163\165\162\x65\40\x61\x62\x6f\x75\x74\40\x72\x65\x4f\x70\164\x69\x6d\x69\x7a\x65\x20\164\150\151\x73\40\160\x61\147\x65\x3f", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\x63\x6c\141\163\163" => "\x6f\160\x74\55\160\165\162\x67\145\x2d\x70\x6f\163\164\x2d\143\141\143\x68\x65\x20\x70\162\55\142\x74\156\40\x62\164\156\x2d\x70\x72\151\155\141\x72\171", "\164\x69\164\x6c\145" => $meqocwsecsywiiqs, "\144\141\x74\x61\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\x64\x61\164\x61\x2d\155\x69\143\162\157\155\x6f\144\141\154\55\x63\x6c\157\163\x65"]]], $meqocwsecsywiiqs, ["\143\x6c\141\x73\x73" => "\157\x70\x74\x2d\x70\141\147\145\x2d\x61\x63\164\x69\x6f\x6e"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\x6f\160\164\137\x67\x65\x74\137\142\x75\144\147\145\x74", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\157\160\x74\x5f\x75\x73\145\144\x5f\x62\x75\144\147\x65\164", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\157\x70\164\x2d\160\x72\x65\154\x6f\141\x64") || $this->ccmqswoueyeqkoeq("\x70\162\x65\154\x6f\x61\144"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\x64\157\x6e\164\x2d\157\160\x74"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(self::kgswyesggeyekgmg . "\x61\x6c\154\x6f\167\x5f\x74\x6f\x5f\x73\164\x61\x72\164\137\x62\165\146\x66\x65\162\x5f\x70\162\x6f\x63\x65\x73\163", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\120\x52\137\x4f\120\124\111\x4d\111\132\101\124\111\x4f\x4e\x5f\x44\x4f\x4e\x54\x5f\x4f\120\x54\111\x4d\x49\132\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x62\171\160\141\x73\163\x5f\154\151\163\x74", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto kuymgsewmeoimeuq; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); kuymgsewmeoimeuq: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x69\163\x5f\142\171\160\141\163\163", false, $migiiksoiymissge); } }
