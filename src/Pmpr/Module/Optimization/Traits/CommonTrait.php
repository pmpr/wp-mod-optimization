<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d04ce34c3b0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; trait CommonTrait { public function cyoqmkeuiuaasqmo($migiiksoiymissge = null, $icwicymcioeyeyek = null) { if ($migiiksoiymissge) { goto mssaawaiaimogowg; } $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); mssaawaiaimogowg: $aokagokqyuysuksm = ManipulateFormat::ocyiomiukusoicuc($migiiksoiymissge); if (is_array($icwicymcioeyeyek)) { goto ccyiggckemwgooco; } $icwicymcioeyeyek = DecoratorOption::igqksmmwesguiaae("\160\162\x65\x2d\157\x70\164\x2d{$aokagokqyuysuksm}"); goto umamqqwcoewcigew; ccyiggckemwgooco: DecoratorOption::gawcqwcqgwgucgya("\x70\162\145\x2d\157\x70\164\x2d{$aokagokqyuysuksm}", $icwicymcioeyeyek); umamqqwcoewcigew: return $icwicymcioeyeyek; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\145\x4f\x70\x74\x69\155\x69\172\145", PR__MDL__OPTIMIZATION); return ManipulateHTML::yuawgssgauywkiia($ewgwqamkygiqaawc, "\x23", ["\143\154\141\x73\163" => "\x6f\x70\x74\55\160\x61\x67\x65\x2d\x61\143\164\x69\x6f\156\40\160\162\x2d\x63\157\156\x66\151\x72\155\141\x62\x6c\145\55\x61\143\x74\151\x6f\156", "\141\x72\x69\141\x2d\x6c\x61\x62\x65\154" => $meqocwsecsywiiqs, "\x64\x61\x74\141\x2d\143\157\156\x66\x69\147" => ManipulateHTML::uskieqmcqyecigmy([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\101\x72\x65\x20\171\x6f\165\x20\x73\165\162\x65\40\x61\142\x6f\165\x74\40\x72\x65\x4f\160\164\x69\x6d\x69\172\145\x20\164\150\151\163\40\160\141\x67\145\77", PR__MDL__OPTIMIZATION), "\142\x75\x74\164\x6f\x6e\163" => ["\143\x61\156\143\x65\154", ["\x63\x6c\x61\x73\x73" => "\157\x70\x74\55\x70\165\x72\147\x65\55\160\157\163\x74\x2d\143\141\x63\150\x65\40\x62\x74\156\x20\x62\164\x6e\x2d\x70\162\x69\x6d\x61\162\171", "\x74\x69\164\154\x65" => $meqocwsecsywiiqs, "\144\x61\164\141\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\x61\x74\141\55\x6d\x69\x63\162\x6f\x6d\x6f\144\141\154\55\143\x6c\157\163\145"]]])]); } public function eiykqgmgyuowgeog() : int { return (int) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\x5f\x67\145\164\137\142\165\144\x67\145\164"), 0); } public function ggcikeumgqoockyo() : int { return (int) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x75\x73\145\x64\x5f\x62\165\x64\x67\x65\x74"), 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { return ManipulateServer::get($uusmaiomayssaecw) || ManipulateServer::gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\157\x70\164\55\x70\162\145\154\157\141\144") || $this->ccmqswoueyeqkoeq("\x70\162\145\154\x6f\x61\144"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\157\x6e\164\x2d\157\x70\x74"); } public function ocysssyiuaueqiei(string $iqaosyayeiuaisqi = self::yygyasgygkeqacou) : bool { return !ManipulateQuery::miccagckiqwseasi() && ManipulateQuery::eewqyocggsagyuis() && !DecoratorUser::ksgkoukcicwkkaum() && !$this->eeegakaauwcyugqy() && $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x61\x6c\x6c\x6f\167\x5f\164\x6f\x5f\157\160\164\x69\155\x69\172\145"), false, $iqaosyayeiuaisqi); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\x62\x79\x70\x61\163\x73\137\x6c\x69\x73\x74"), $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto swkeiggkawwgewuw; } $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(true); swkeiggkawwgewuw: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\151\x73\137\x62\171\160\x61\163\163"), false, $migiiksoiymissge); } public function eaoemakycwuywqsy($migiiksoiymissge, $suaemuyiacqyugsm = null) : string { static $oqseeekuqisekiwy; if (isset($oqseeekuqisekiwy[$migiiksoiymissge])) { goto miigqygoawqmkkqm; } $iueymcwwscwqkiyq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\137\160\141\x67\145\137\x73\164\141\164\x75\163"), '', $migiiksoiymissge, $suaemuyiacqyugsm); if ($iueymcwwscwqkiyq) { goto aacaoywsaqscgyua; } $geyqgckicikewwke = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\137\x69\163\137\157\x70\x74\151\155\151\x7a\x65\x64"), [], $migiiksoiymissge, $suaemuyiacqyugsm); if (!$geyqgckicikewwke || !in_array(true, $geyqgckicikewwke, true)) { goto kuimgwmkcgcoecko; } if (in_array(false, $geyqgckicikewwke, true)) { goto gaiaucesmcqgqwac; } $iueymcwwscwqkiyq = self::amcogigwsaqssuai; gaiaucesmcqgqwac: goto oaskqsoyesmmeaew; kuimgwmkcgcoecko: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; oaskqsoyesmmeaew: $oqseeekuqisekiwy[$migiiksoiymissge] = $iueymcwwscwqkiyq; aacaoywsaqscgyua: goto yywwaaiicukuwcao; miigqygoawqmkkqm: $iueymcwwscwqkiyq = $oqseeekuqisekiwy[$migiiksoiymissge]; yywwaaiicukuwcao: return $iueymcwwscwqkiyq; } public function ccioymuswicowwkw($migiiksoiymissge, $suaemuyiacqyugsm = null) { $iueymcwwscwqkiyq = $this->eaoemakycwuywqsy($migiiksoiymissge, $suaemuyiacqyugsm); $iuikoekwkkmcimwq = false; switch ($iueymcwwscwqkiyq) { case self::uasuowkaguiwoouw: $wkaqekwwgqsqwcoi = IconInterface::kcyyouekgyaqyqak; $sqeykgyoooqysmca = self::wyaqwomqwwaoiwas; $meqocwsecsywiiqs = __("\x4e\x6f\164\x20\x4f\x70\x74\151\155\151\x7a\x65\144", PR__MDL__OPTIMIZATION); goto eykiuqsamowqykam; case self::kywgiyyageyqwuuc: $wkaqekwwgqsqwcoi = IconInterface::cusyymqgcoccukom; $sqeykgyoooqysmca = self::PRIMARY; $meqocwsecsywiiqs = __("\117\160\164\x69\x6d\x69\172\x61\164\x69\157\x6e\40\x52\165\156\156\x69\156\147", PR__MDL__OPTIMIZATION); $iuikoekwkkmcimwq = true; goto eykiuqsamowqykam; case self::amcogigwsaqssuai: $wkaqekwwgqsqwcoi = IconInterface::sucyqiucaqowyomk; $sqeykgyoooqysmca = self::ckcawaoawwioqecq; $meqocwsecsywiiqs = __("\117\160\x74\x69\155\x69\x7a\145\x64", PR__MDL__OPTIMIZATION); goto eykiuqsamowqykam; default: $wkaqekwwgqsqwcoi = IconInterface::kiqsyooieeusaemw; $sqeykgyoooqysmca = self::ecioqysekgaasegg; $meqocwsecsywiiqs = __("\116\x6f\164\40\103\x6f\x6d\160\154\145\164\145\154\171\x20\x4f\x70\164\x69\x6d\151\172\x65\144", PR__MDL__OPTIMIZATION); goto eykiuqsamowqykam; } ywqouwqomiqwoquu: eykiuqsamowqykam: return ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\x6c\141\163\x73" => "\x69\143\x6f\x6e\55\154\x67\40\151\x63\157\156\55{$sqeykgyoooqysmca}" . ($iuikoekwkkmcimwq ? "\x20\x69\143\x6f\x6e\x2d\x73\160\141\x69\x6e" : ''), self::qescuiwgsyuikume => $meqocwsecsywiiqs, "\x64\141\x74\x61\55\154\145\166\145\x6c" => $suaemuyiacqyugsm ? self::cwoackywkgsameww : self::yygyasgygkeqacou, "\x64\x61\x74\141\x2d\163\164\x61\164\x75\x73" => $iueymcwwscwqkiyq, "\144\141\164\141\55\x70\145\162\x6d\x61\x6c\151\156\x6b" => $migiiksoiymissge], ["\x6d\x61\162\x6b\165\160" => true]); } public function yyauwmoecaeskcae($suaemuyiacqyugsm) : ?string { $sqeykgyoooqysmca = ManipulateArray::get($suaemuyiacqyugsm, self::squoamkioomemiyi); $ccamueccusigaaio = ManipulateArray::get($suaemuyiacqyugsm, self::mgsccwumkcawaqcy); return $sqeykgyoooqysmca === self::mswmgkkakuooukme ? ManipulatePost::mqgeysameoesmuqw($ccamueccusigaaio) : ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio); } }
