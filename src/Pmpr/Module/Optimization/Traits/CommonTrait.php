<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665c30d9443ce             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::gyiksueiaeykqaqq))) { goto cgewcsueoyaeikgm; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\141\164\x68"); $qogsmwakwacwqogk["\160\x61\x74\x68"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\157\x73\x74"]) . $qogsmwakwacwqogk["\x70\x61\x74\150"] . "\56\x70\x68\160"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; cgewcsueoyaeikgm: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\x6f\156\x66\151\x67\165\x72\141\x74\151\x6f\156\137\146\151\154\x65\x73\x5f\x70\141\x74\x68", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\x50\122\137\x4f\120\124\x5f\103\101\x43\110\105\x5f\x44\x4f\116\x54\x5f\x45\x4e\x43\117\x44\105\x5f\x46\x49\x4c\105\116\101\115\x45\123")) { goto mqccmesakuemceqi; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); igymseewwyiocoug: } sukskmcwsoysiuqu: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); mqccmesakuemceqi: return untrailingslashit($migiiksoiymissge) . "\57\146\151\x6c\x65\x73\57\151\156\x64\145\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\x65\x4f\x70\164\151\x6d\x69\x7a\x65", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\101\x72\x65\40\171\157\165\40\x73\x75\162\x65\x20\141\x62\157\165\x74\40\x72\145\117\160\x74\151\x6d\151\x7a\145\x20\x74\150\151\x73\x20\x70\x61\147\145\x3f", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\x63\x6c\141\163\163" => "\157\160\x74\55\x70\165\162\147\145\x2d\160\x6f\163\x74\x2d\143\x61\x63\150\x65\x20\160\162\55\142\x74\156\40\142\x74\x6e\x2d\160\162\151\x6d\x61\162\x79", "\x74\151\x74\154\x65" => $meqocwsecsywiiqs, "\144\141\x74\x61\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\x61\164\x61\x2d\x6d\x69\143\162\157\155\x6f\x64\141\x6c\x2d\x63\x6c\157\x73\x65"]]], $meqocwsecsywiiqs, ["\x63\x6c\x61\x73\163" => "\157\160\164\x2d\x70\x61\147\x65\x2d\141\143\x74\x69\157\x6e"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\x6f\x70\x74\x5f\147\145\164\137\x62\x75\x64\147\145\164", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\157\x70\x74\137\x75\163\x65\144\x5f\142\x75\x64\147\x65\164", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x6f\160\164\55\160\x72\x65\x6c\x6f\141\144") || $this->ccmqswoueyeqkoeq("\160\x72\145\x6c\157\x61\144"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\x64\157\x6e\164\55\157\x70\x74"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(self::kgswyesggeyekgmg . "\141\154\154\157\167\x5f\164\x6f\x5f\x73\164\141\x72\164\x5f\x62\165\146\146\x65\x72\137\x70\x72\x6f\143\x65\x73\x73", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\122\137\x4f\120\x54\x49\115\x49\132\x41\124\x49\x4f\116\137\x44\117\x4e\x54\x5f\x4f\120\x54\111\115\111\x5a\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\142\171\160\x61\163\x73\137\x6c\151\163\x74", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto eyiamcekkgkiawqy; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); eyiamcekkgkiawqy: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\x73\x5f\x62\171\x70\141\163\x73", false, $migiiksoiymissge); } }
