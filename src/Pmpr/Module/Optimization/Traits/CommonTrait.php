<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             664697c805b60             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::gyiksueiaeykqaqq))) { goto cgewcsueoyaeikgm; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\160\141\x74\x68"); $qogsmwakwacwqogk["\160\141\164\x68"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\x6f\163\x74"]) . $qogsmwakwacwqogk["\x70\x61\164\150"] . "\56\160\150\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; cgewcsueoyaeikgm: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\x6f\x6e\146\x69\x67\x75\162\141\164\151\157\156\x5f\x66\x69\154\145\x73\x5f\160\x61\x74\x68", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\x50\122\137\x4f\120\124\x5f\103\x41\103\x48\105\137\x44\x4f\x4e\124\x5f\x45\x4e\x43\117\x44\x45\137\106\x49\x4c\105\x4e\101\x4d\105\123")) { goto mqccmesakuemceqi; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); igymseewwyiocoug: } sukskmcwsoysiuqu: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); mqccmesakuemceqi: return untrailingslashit($migiiksoiymissge) . "\57\151\156\x64\x65\170"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\145\x4f\x70\164\x69\155\151\172\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\101\162\x65\40\171\x6f\x75\x20\x73\x75\x72\x65\40\141\x62\157\165\x74\x20\x72\145\x4f\160\164\151\155\x69\x7a\x65\40\x74\150\x69\163\40\x70\x61\x67\145\77", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\x6c\x61\163\x73" => "\157\160\164\x2d\160\x75\x72\x67\145\x2d\x70\x6f\x73\x74\55\143\141\x63\x68\x65\40\x62\164\x6e\40\x62\164\156\55\160\x72\x69\x6d\x61\162\x79", "\164\151\x74\x6c\x65" => $meqocwsecsywiiqs, "\x64\141\164\x61\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\x64\141\x74\141\55\x6d\151\143\x72\157\155\157\x64\x61\x6c\x2d\x63\x6c\157\163\145"]]], $meqocwsecsywiiqs, ["\x63\154\x61\163\163" => "\157\x70\164\55\160\141\x67\x65\x2d\141\x63\x74\151\157\x6e"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\x6f\160\x74\x5f\x67\x65\x74\x5f\x62\x75\144\x67\145\x74", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\x6f\160\164\137\165\163\145\x64\x5f\142\165\144\x67\x65\x74", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x6f\x70\x74\x2d\x70\162\145\x6c\x6f\x61\x64") || $this->ccmqswoueyeqkoeq("\160\162\x65\154\157\x61\144"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\157\156\x74\x2d\157\x70\164"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(self::kgswyesggeyekgmg . "\x61\154\154\157\x77\x5f\x74\x6f\137\163\164\x61\x72\x74\137\x62\165\x66\146\x65\x72\x5f\x70\x72\x6f\x63\x65\x73\x73", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\x52\x5f\x4f\120\124\111\x4d\x49\132\x41\x54\x49\x4f\x4e\137\104\x4f\116\124\x5f\117\x50\x54\x49\x4d\x49\x5a\105", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\142\171\x70\x61\163\x73\137\154\151\163\x74", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto eyiamcekkgkiawqy; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); eyiamcekkgkiawqy: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\163\x5f\142\171\160\141\163\163", false, $migiiksoiymissge); } }
