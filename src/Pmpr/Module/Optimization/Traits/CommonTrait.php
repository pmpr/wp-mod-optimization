<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65198726e209e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; trait CommonTrait { public function gkwegwsaoomuiqsa() : array { $ucasskoyoewwmmii = []; $auwuoyyagaiegwae = [ManipulateI18N::auksikwsewaywikq()]; $kymsmcekmemqmews = ManipulateI18N::yeaukamowmkwaowi(); if (!$kymsmcekmemqmews) { goto esokkakkumskkmiu; } $auwuoyyagaiegwae = $kymsmcekmemqmews; esokkakkumskkmiu: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $okguqgiiewywyoaq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms("\x50\122\137\x54\x48\x45\x5f\103\117\x4e\x46\x49\x47\x5f\x50\x41\x54\110"); $qogsmwakwacwqogk = $okguqgiiewywyoaq->gooqqcmsyseiaikc($eeamcawaiqocomwy); if (!$yckucuyiaykemqea) { goto sqiyuasgusgawuoi; } $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\160\x61\x74\150"); $qogsmwakwacwqogk["\x70\141\164\150"] = $mkomwsiykqigmqca ? str_replace("\57", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\157\163\x74"]) . $qogsmwakwacwqogk["\x70\x61\164\x68"] . "\x2e\160\x68\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; sqiyuasgusgawuoi: gqycmyieayoegcsy: } msiuqseowuumiwuo: return $this->ocksiywmkyaqseou("\x6f\x70\x74\x5f\143\157\x6e\146\x69\147\165\x72\141\x74\151\x6f\x6e\137\x66\151\x6c\x65\x73\137\160\141\x74\x68", $ucasskoyoewwmmii); } public function cyoqmkeuiuaasqmo($migiiksoiymissge = null, $icwicymcioeyeyek = null) { if ($migiiksoiymissge) { goto iayguaeseyaemwkk; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); iayguaeseyaemwkk: $owqaeesoaygymmcy = $this->aisuyoiqugewaocg($migiiksoiymissge); $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if (is_array($icwicymcioeyeyek)) { goto akyiiioycmgqyuok; } $icwicymcioeyeyek = $qkqgcaykemoiecma->igqksmmwesguiaae("\x70\162\x65\x2d\x6f\160\164\x2d{$owqaeesoaygymmcy}"); goto ycomeuqeessamows; akyiiioycmgqyuok: $qkqgcaykemoiecma->gawcqwcqgwgucgya("\x70\x72\145\55\x6f\x70\164\55{$owqaeesoaygymmcy}", $icwicymcioeyeyek); ycomeuqeessamows: return $icwicymcioeyeyek; } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\117\120\124\137\103\x41\103\110\x45\137\104\x4f\x4e\x54\x5f\105\x4e\x43\x4f\x44\105\137\x46\111\x4c\105\x4e\x41\115\105\123")) { goto mqacqosyicuiqwia; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); guummoewucyeuiek: } owiguescmqyqukui: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); mqacqosyicuiqwia: return untrailingslashit($migiiksoiymissge) . "\x2f\151\156\x64\x65\170"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\145\x4f\x70\164\x69\x6d\x69\172\x65", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($ewgwqamkygiqaawc, "\x23", ["\x63\154\141\x73\x73" => "\x6f\x70\164\x2d\x70\x61\x67\x65\55\x61\x63\x74\151\157\156\x20\x70\x72\55\143\x6f\156\146\151\162\x6d\x61\x62\154\145\x2d\141\x63\x74\x69\x6f\x6e", "\x61\162\151\x61\x2d\154\141\x62\145\154" => $meqocwsecsywiiqs, "\x64\x61\164\x61\55\143\x6f\156\146\x69\147" => $this->caokeucsksukesyo()->wmkogisswkckmeua()->uskieqmcqyecigmy([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\x41\162\145\40\x79\157\165\x20\163\165\x72\x65\40\141\x62\157\165\164\40\162\145\x4f\x70\164\151\155\151\172\145\x20\x74\150\151\x73\x20\160\x61\147\145\77", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\x63\154\141\x73\163" => "\157\160\164\x2d\x70\165\x72\147\x65\x2d\x70\x6f\163\164\55\x63\x61\x63\150\145\40\142\x74\156\x20\x62\x74\156\x2d\x70\162\151\x6d\x61\162\x79", "\x74\151\164\154\145" => $meqocwsecsywiiqs, "\x64\141\x74\141\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\x61\x74\x61\x2d\x6d\151\143\162\x6f\155\157\144\141\x6c\55\143\154\157\163\145"]]])]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\157\160\164\x5f\x67\145\164\137\142\x75\144\147\145\164", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\x6f\160\x74\x5f\x75\x73\x65\x64\137\x62\165\x64\147\145\x74", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\157\x70\x74\x2d\160\x72\145\154\x6f\141\144") || $this->ccmqswoueyeqkoeq("\160\x72\145\154\x6f\x61\x64"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\x6f\156\x74\x2d\157\x70\x74"); } public function ocysssyiuaueqiei(string $iqaosyayeiuaisqi = self::yygyasgygkeqacou) : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum() && !$this->eeegakaauwcyugqy() && $this->ocksiywmkyaqseou("\157\x70\164\x5f\141\x6c\x6c\x6f\x77\137\164\x6f\137\157\x70\x74\151\155\151\x7a\x65", false, $iqaosyayeiuaisqi); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou("\x6f\160\164\x5f\x62\x79\160\141\x73\x73\137\154\x69\163\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto mcuoyseuwoueyaie; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); mcuoyseuwoueyaie: return $this->ocksiywmkyaqseou("\x6f\x70\x74\x5f\x69\x73\x5f\x62\x79\160\x61\x73\x73", false, $migiiksoiymissge); } public function eaoemakycwuywqsy($migiiksoiymissge, $suaemuyiacqyugsm = null) : string { static $oqseeekuqisekiwy; if (isset($oqseeekuqisekiwy[$migiiksoiymissge])) { goto soqkewsayowwcmco; } $iueymcwwscwqkiyq = $this->ocksiywmkyaqseou("\157\160\x74\x5f\160\x61\x67\145\x5f\x73\164\x61\164\x75\x73", '', $migiiksoiymissge, $suaemuyiacqyugsm); if ($iueymcwwscwqkiyq) { goto ugyawwukegyoqmsq; } $geyqgckicikewwke = $this->ocksiywmkyaqseou("\x6f\160\164\137\151\x73\137\x6f\160\x74\151\155\151\172\x65\144", [], $migiiksoiymissge, $suaemuyiacqyugsm); if (!$geyqgckicikewwke || !in_array(true, $geyqgckicikewwke, true)) { goto ieoeeyieoskuyiyw; } if (in_array(false, $geyqgckicikewwke, true)) { goto kwowggaooiyqawyq; } $iueymcwwscwqkiyq = self::amcogigwsaqssuai; kwowggaooiyqawyq: goto ciiyqsiswkcwsocm; ieoeeyieoskuyiyw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; ciiyqsiswkcwsocm: $oqseeekuqisekiwy[$migiiksoiymissge] = $iueymcwwscwqkiyq; ugyawwukegyoqmsq: goto ukigmkeewuqomooc; soqkewsayowwcmco: $iueymcwwscwqkiyq = $oqseeekuqisekiwy[$migiiksoiymissge]; ukigmkeewuqomooc: return $iueymcwwscwqkiyq; } public function ccioymuswicowwkw($migiiksoiymissge, $suaemuyiacqyugsm = null) { $iueymcwwscwqkiyq = $this->eaoemakycwuywqsy($migiiksoiymissge, $suaemuyiacqyugsm); $iuikoekwkkmcimwq = false; switch ($iueymcwwscwqkiyq) { case self::uasuowkaguiwoouw: $wkaqekwwgqsqwcoi = IconInterface::kcyyouekgyaqyqak; $sqeykgyoooqysmca = self::wyaqwomqwwaoiwas; $meqocwsecsywiiqs = __("\x4e\157\x74\40\117\160\164\151\x6d\151\x7a\x65\x64", PR__MDL__OPTIMIZATION); goto wwgikwuigiiqsswq; case self::kywgiyyageyqwuuc: $wkaqekwwgqsqwcoi = IconInterface::cusyymqgcoccukom; $sqeykgyoooqysmca = self::PRIMARY; $meqocwsecsywiiqs = __("\x4f\x70\x74\x69\x6d\x69\172\141\164\151\157\x6e\40\x52\x75\x6e\x6e\x69\156\147", PR__MDL__OPTIMIZATION); $iuikoekwkkmcimwq = true; goto wwgikwuigiiqsswq; case self::amcogigwsaqssuai: $wkaqekwwgqsqwcoi = IconInterface::sucyqiucaqowyomk; $sqeykgyoooqysmca = self::ckcawaoawwioqecq; $meqocwsecsywiiqs = __("\117\x70\x74\151\155\151\172\x65\144", PR__MDL__OPTIMIZATION); goto wwgikwuigiiqsswq; default: $wkaqekwwgqsqwcoi = IconInterface::kiqsyooieeusaemw; $sqeykgyoooqysmca = self::ecioqysekgaasegg; $meqocwsecsywiiqs = __("\x4e\x6f\x74\x20\x43\157\x6d\x70\154\x65\x74\x65\x6c\171\40\x4f\160\x74\151\155\151\x7a\x65\144", PR__MDL__OPTIMIZATION); goto wwgikwuigiiqsswq; } seyygcwcaogkmaqe: wwgikwuigiiqsswq: return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\x6c\x61\x73\x73" => "\x69\x63\157\x6e\55\x6c\147\x20\151\143\157\156\x2d{$sqeykgyoooqysmca}" . ($iuikoekwkkmcimwq ? "\x20\151\143\x6f\x6e\55\163\x70\141\151\156" : ''), self::qescuiwgsyuikume => $meqocwsecsywiiqs, "\144\141\x74\141\x2d\x6c\145\166\145\x6c" => $suaemuyiacqyugsm ? self::cwoackywkgsameww : self::yygyasgygkeqacou, "\144\141\164\x61\x2d\x73\164\141\164\x75\163" => $iueymcwwscwqkiyq, "\x64\141\x74\x61\55\160\x65\x72\155\x61\x6c\151\156\153" => $migiiksoiymissge], [self::kicoscymgmgqeqgy => true]); } public function yyauwmoecaeskcae($suaemuyiacqyugsm) : ?string { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($suaemuyiacqyugsm, self::squoamkioomemiyi); $ccamueccusigaaio = $gkyciwoiiisgywcs->get($suaemuyiacqyugsm, self::mgsccwumkcawaqcy); return $sqeykgyoooqysmca === self::mswmgkkakuooukme ? $this->caokeucsksukesyo()->gscioiumssogceuc()->myagyqumwekameww($ccamueccusigaaio) : $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($ccamueccusigaaio); } }
