<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66000aba21b1a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; use Pmpr\Common\Foundation\Interfaces\IconInterface; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::gyiksueiaeykqaqq))) { goto wwukgaquuyoissgy; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\x61\x74\x68"); $qogsmwakwacwqogk["\x70\141\x74\x68"] = $mkomwsiykqigmqca ? str_replace("\57", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\x6f\x73\164"]) . $qogsmwakwacwqogk["\x70\x61\x74\150"] . "\x2e\160\150\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; wwukgaquuyoissgy: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\x6f\156\x66\151\147\x75\162\141\164\151\157\156\137\146\x69\x6c\x65\x73\x5f\x70\x61\x74\150", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\120\122\137\117\120\x54\137\103\x41\103\110\105\x5f\x44\117\x4e\124\x5f\105\x4e\x43\x4f\104\105\137\x46\111\x4c\105\116\x41\115\x45\123")) { goto yqagomygmeoecwey; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); qsgqwyqaqiowkmco: } gsygwgsiawgmqiyi: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); yqagomygmeoecwey: return untrailingslashit($migiiksoiymissge) . "\x2f\x69\156\x64\145\170"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\x65\x4f\x70\164\x69\x6d\x69\x7a\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\x41\162\x65\x20\171\x6f\165\x20\x73\x75\x72\145\x20\141\x62\157\165\164\40\x72\x65\x4f\x70\x74\151\155\151\172\x65\40\164\150\151\163\x20\160\141\x67\x65\x3f", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\x63\x6c\141\x73\x73" => "\x6f\x70\x74\x2d\160\165\x72\x67\145\55\160\x6f\x73\164\55\x63\x61\x63\150\145\x20\142\x74\x6e\x20\142\164\156\x2d\x70\162\151\x6d\x61\x72\x79", "\164\151\164\154\x65" => $meqocwsecsywiiqs, "\144\141\164\141\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\x61\x74\x61\55\155\x69\143\162\157\x6d\x6f\144\141\x6c\x2d\x63\154\x6f\163\x65"]]], $meqocwsecsywiiqs, ["\143\154\x61\163\x73" => "\157\x70\164\x2d\160\141\x67\145\55\x61\143\164\x69\157\156"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\157\x70\164\x5f\147\x65\x74\137\142\x75\144\x67\145\x74", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\x6f\160\164\x5f\x75\x73\x65\x64\137\x62\165\x64\x67\145\x74", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x6f\160\x74\55\x70\162\x65\x6c\157\x61\144") || $this->ccmqswoueyeqkoeq("\x70\162\145\x6c\157\141\144"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\157\156\164\x2d\x6f\160\164"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(self::kgswyesggeyekgmg . "\x61\154\154\157\x77\137\x74\x6f\x5f\163\164\x61\x72\164\137\142\x75\146\146\x65\x72\x5f\x70\x72\157\x63\x65\x73\163", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\x52\x5f\x4f\120\x54\111\115\111\x5a\101\124\x49\117\x4e\137\104\117\x4e\x54\137\117\120\124\x49\x4d\x49\x5a\105", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\142\x79\x70\x61\x73\163\x5f\154\x69\163\x74", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto qikaewekoecykeou; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); qikaewekoecykeou: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x69\x73\137\142\x79\160\141\163\163", false, $migiiksoiymissge); } public function eaoemakycwuywqsy($migiiksoiymissge, $suaemuyiacqyugsm = null) : string { static $oqseeekuqisekiwy; if (isset($oqseeekuqisekiwy[$migiiksoiymissge])) { goto oqousikwiiqagoyw; } $iueymcwwscwqkiyq = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\160\x61\x67\x65\x5f\163\x74\141\164\x75\x73", '', $migiiksoiymissge, $suaemuyiacqyugsm); if ($iueymcwwscwqkiyq) { goto sqyokemumceysegy; } $geyqgckicikewwke = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\163\x5f\157\160\164\x69\155\151\x7a\145\x64", [], $migiiksoiymissge, $suaemuyiacqyugsm); if (!$geyqgckicikewwke || !in_array(true, $geyqgckicikewwke, true)) { goto usymasgsyqgsuocg; } if (in_array(false, $geyqgckicikewwke, true)) { goto eucqomyqykgoiuge; } $iueymcwwscwqkiyq = self::amcogigwsaqssuai; eucqomyqykgoiuge: goto aiccyaswigkaycqk; usymasgsyqgsuocg: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; aiccyaswigkaycqk: $oqseeekuqisekiwy[$migiiksoiymissge] = $iueymcwwscwqkiyq; sqyokemumceysegy: goto zayqqeqgcwkekwws; oqousikwiiqagoyw: $iueymcwwscwqkiyq = $oqseeekuqisekiwy[$migiiksoiymissge]; zayqqeqgcwkekwws: return $iueymcwwscwqkiyq; } public function ccioymuswicowwkw($migiiksoiymissge, $suaemuyiacqyugsm = null) { $iueymcwwscwqkiyq = $this->eaoemakycwuywqsy($migiiksoiymissge, $suaemuyiacqyugsm); $iuikoekwkkmcimwq = false; switch ($iueymcwwscwqkiyq) { case self::uasuowkaguiwoouw: $wkaqekwwgqsqwcoi = IconInterface::kcyyouekgyaqyqak; $sqeykgyoooqysmca = self::wyaqwomqwwaoiwas; $meqocwsecsywiiqs = __("\x4e\157\x74\40\x4f\x70\x74\151\x6d\151\x7a\145\x64", PR__MDL__OPTIMIZATION); goto aueaceeyommgkicu; case self::kywgiyyageyqwuuc: $wkaqekwwgqsqwcoi = IconInterface::cusyymqgcoccukom; $sqeykgyoooqysmca = self::PRIMARY; $meqocwsecsywiiqs = __("\x4f\x70\x74\151\x6d\151\x7a\141\x74\151\x6f\156\40\x52\165\156\156\151\x6e\147", PR__MDL__OPTIMIZATION); $iuikoekwkkmcimwq = true; goto aueaceeyommgkicu; case self::amcogigwsaqssuai: $wkaqekwwgqsqwcoi = IconInterface::sucyqiucaqowyomk; $sqeykgyoooqysmca = self::ckcawaoawwioqecq; $meqocwsecsywiiqs = __("\117\x70\164\x69\155\151\x7a\145\x64", PR__MDL__OPTIMIZATION); goto aueaceeyommgkicu; default: $wkaqekwwgqsqwcoi = IconInterface::kiqsyooieeusaemw; $sqeykgyoooqysmca = self::ecioqysekgaasegg; $meqocwsecsywiiqs = __("\x4e\x6f\x74\x20\x43\x6f\x6d\x70\x6c\145\x74\x65\x6c\171\40\x4f\x70\x74\x69\155\x69\x7a\x65\x64", PR__MDL__OPTIMIZATION); goto aueaceeyommgkicu; } mysueeoswqgccmui: aueaceeyommgkicu: return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\x6c\x61\x73\163" => "\x69\x63\157\156\x2d\154\147\40\151\143\x6f\156\55{$sqeykgyoooqysmca}" . ($iuikoekwkkmcimwq ? "\40\x69\x63\x6f\x6e\55\x73\x70\141\151\x6e" : ''), self::qescuiwgsyuikume => $meqocwsecsywiiqs, "\x64\141\x74\x61\x2d\x6c\145\x76\145\154" => $suaemuyiacqyugsm ? self::cwoackywkgsameww : self::yygyasgygkeqacou, "\144\141\x74\141\55\163\x74\141\164\165\163" => $iueymcwwscwqkiyq, "\144\x61\164\141\x2d\x70\x65\162\155\141\154\x69\x6e\x6b" => $migiiksoiymissge], [self::kicoscymgmgqeqgy => true]); } public function yyauwmoecaeskcae($suaemuyiacqyugsm) : ?string { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($suaemuyiacqyugsm, self::squoamkioomemiyi); $ccamueccusigaaio = $gkyciwoiiisgywcs->get($suaemuyiacqyugsm, self::mgsccwumkcawaqcy); return $sqeykgyoooqysmca === self::mswmgkkakuooukme ? $this->caokeucsksukesyo()->gscioiumssogceuc()->myagyqumwekameww($ccamueccusigaaio) : $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($ccamueccusigaaio); } }
