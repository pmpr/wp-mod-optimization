<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665872dfe6b03             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::gyiksueiaeykqaqq))) { goto cgewcsueoyaeikgm; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\141\x74\150"); $qogsmwakwacwqogk["\160\141\164\x68"] = $mkomwsiykqigmqca ? str_replace("\57", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\x6f\163\164"]) . $qogsmwakwacwqogk["\160\x61\164\150"] . "\x2e\x70\150\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; cgewcsueoyaeikgm: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\157\x6e\146\151\x67\165\x72\141\x74\151\157\156\137\x66\151\x6c\145\163\137\160\x61\x74\150", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\120\x52\137\117\x50\x54\137\x43\x41\x43\110\x45\x5f\104\117\116\x54\x5f\x45\116\x43\x4f\x44\x45\x5f\x46\111\114\105\116\x41\x4d\x45\123")) { goto mqccmesakuemceqi; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); igymseewwyiocoug: } sukskmcwsoysiuqu: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); mqccmesakuemceqi: return untrailingslashit($migiiksoiymissge) . "\x2f\146\x69\154\145\163\x2f\x69\x6e\x64\145\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\145\117\160\164\x69\155\151\172\x65", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\101\x72\x65\x20\x79\x6f\x75\40\163\x75\162\x65\40\141\142\x6f\x75\164\x20\x72\x65\117\x70\164\x69\x6d\x69\x7a\x65\x20\164\150\x69\x73\40\x70\x61\147\145\x3f", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\x63\154\x61\x73\x73" => "\x6f\x70\164\55\x70\x75\162\x67\x65\x2d\x70\x6f\x73\x74\55\143\141\x63\150\145\x20\x70\162\55\x62\x74\156\x20\142\x74\x6e\55\160\x72\151\155\x61\x72\171", "\164\151\164\x6c\145" => $meqocwsecsywiiqs, "\144\141\x74\141\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\x64\141\164\141\x2d\x6d\151\143\x72\157\x6d\157\x64\141\154\55\x63\154\x6f\x73\x65"]]], $meqocwsecsywiiqs, ["\143\154\141\x73\163" => "\x6f\160\x74\x2d\160\x61\x67\x65\x2d\141\x63\164\x69\x6f\x6e"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\157\x70\x74\x5f\x67\145\x74\x5f\x62\165\144\x67\145\x74", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\x6f\x70\x74\137\x75\163\145\144\x5f\142\165\x64\x67\145\164", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\157\x70\x74\x2d\160\x72\x65\x6c\157\141\x64") || $this->ccmqswoueyeqkoeq("\x70\162\145\x6c\x6f\141\144"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\x6f\156\x74\55\x6f\160\x74"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(self::kgswyesggeyekgmg . "\141\154\x6c\157\167\137\164\157\137\163\x74\x61\x72\164\137\x62\165\x66\146\145\162\137\x70\x72\x6f\143\145\163\x73", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\122\x5f\x4f\120\x54\x49\115\111\132\101\124\111\117\116\137\104\117\x4e\124\137\117\x50\x54\x49\115\111\132\105", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\142\171\x70\x61\x73\163\x5f\x6c\x69\163\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto eyiamcekkgkiawqy; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); eyiamcekkgkiawqy: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\163\x5f\142\x79\160\x61\x73\x73", false, $migiiksoiymissge); } }
