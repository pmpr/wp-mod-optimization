<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a54fbc54301             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::gyiksueiaeykqaqq))) { goto qmgueimkwqmsakis; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\141\x74\150"); $qogsmwakwacwqogk["\x70\x61\164\150"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\x6f\x73\x74"]) . $qogsmwakwacwqogk["\x70\x61\164\150"] . "\56\160\x68\160"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; qmgueimkwqmsakis: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\x6f\x6e\x66\x69\x67\165\x72\x61\164\x69\157\156\137\x66\x69\154\145\163\x5f\160\141\x74\150", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\x50\x52\137\x4f\120\124\137\103\x41\103\110\105\x5f\104\117\x4e\124\x5f\105\116\103\x4f\x44\105\x5f\106\111\x4c\105\x4e\101\x4d\x45\x53")) { goto kuyqusuycscumuek; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); uscissuaiyuiukea: } ooqmaweuqmcmwsuk: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); kuyqusuycscumuek: return untrailingslashit($migiiksoiymissge) . "\57\146\x69\154\x65\163\57\x69\x6e\x64\x65\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\145\x4f\160\164\151\155\x69\x7a\x65", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\x41\162\145\x20\171\x6f\x75\x20\163\x75\x72\145\40\x61\142\x6f\165\164\x20\x72\145\117\x70\x74\151\x6d\x69\172\145\40\x74\x68\x69\x73\x20\x70\141\147\145\x3f", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\x63\x6c\x61\x73\x73" => "\x6f\160\x74\55\x70\x75\x72\x67\145\55\160\157\163\x74\x2d\143\141\143\150\145\x20\x70\x72\x2d\x62\x74\156\x20\142\164\x6e\x2d\x70\x72\x69\x6d\x61\x72\x79", "\164\x69\164\154\145" => $meqocwsecsywiiqs, "\144\x61\164\x61\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\x61\164\x61\55\155\151\143\162\x6f\155\x6f\144\141\x6c\55\x63\154\x6f\163\x65"]]], $meqocwsecsywiiqs, ["\x63\154\x61\163\x73" => "\x6f\160\164\x2d\160\141\x67\x65\x2d\x61\x63\164\151\157\156"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\157\x70\x74\137\x67\145\164\x5f\x62\165\144\147\x65\x74", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\157\160\164\137\165\163\x65\x64\137\x62\x75\x64\147\x65\x74", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x6f\x70\x74\55\x70\x72\x65\x6c\157\x61\144") || $this->ccmqswoueyeqkoeq("\160\162\145\x6c\x6f\141\144"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\x64\157\156\x74\55\x6f\x70\164"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(self::kgswyesggeyekgmg . "\x61\154\154\x6f\167\137\x74\x6f\137\x73\164\141\x72\x74\137\x62\165\146\x66\x65\x72\137\x70\x72\157\143\x65\163\163", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\x52\x5f\x4f\120\x54\x49\x4d\x49\132\101\124\111\117\116\137\104\117\116\124\x5f\117\x50\124\111\115\x49\x5a\105", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\142\x79\160\x61\x73\163\x5f\x6c\x69\163\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto cycwgukowsksmkyc; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); cycwgukowsksmkyc: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x69\x73\x5f\x62\171\x70\141\163\x73", false, $migiiksoiymissge); } }
