<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             631c3953605e9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; trait CommonTrait { public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\x65\117\x70\164\151\x6d\151\172\145", PR__MDL__OPTIMIZATION); return ManipulateHTML::yuawgssgauywkiia($ewgwqamkygiqaawc, "\43", ["\x63\x6c\141\x73\163" => "\157\160\164\x2d\160\x61\x67\x65\x2d\x61\143\x74\151\157\x6e\x20\160\x72\55\143\x6f\x6e\146\151\162\155\x61\142\154\x65\x2d\x61\x63\164\151\x6f\x6e", "\141\x72\151\141\x2d\154\x61\x62\145\x6c" => $meqocwsecsywiiqs, "\x64\x61\164\x61\55\143\157\x6e\x66\151\147" => ManipulateHTML::uskieqmcqyecigmy([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\101\162\x65\x20\171\157\165\40\163\165\x72\x65\x20\141\142\x6f\165\x74\x20\162\145\117\x70\164\151\155\151\x7a\145\x20\164\150\151\163\x20\x70\x61\x67\x65\x3f", PR__MDL__OPTIMIZATION), "\142\165\164\x74\157\x6e\163" => ["\x63\141\156\143\x65\x6c", ["\x63\154\x61\163\163" => "\157\160\164\x2d\160\165\x72\x67\145\55\x70\157\x73\x74\x2d\x63\141\143\150\145\x20\142\164\156\40\x62\164\x6e\55\x70\x72\x69\x6d\x61\162\x79", "\164\151\x74\x6c\x65" => $meqocwsecsywiiqs, "\x64\141\x74\x61\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\141\x74\x61\x2d\155\151\x63\x72\x6f\155\157\x64\141\x6c\55\x63\x6c\x6f\x73\x65"]]])]); } public function eiykqgmgyuowgeog() : int { return (int) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x67\x65\164\x5f\142\x75\x64\x67\145\164"), 0); } public function ggcikeumgqoockyo() : int { return (int) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\165\x73\145\x64\x5f\142\165\x64\x67\145\164"), 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { return ManipulateServer::get($uusmaiomayssaecw) || ManipulateServer::gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\157\160\164\55\160\162\145\154\x6f\x61\x64") || $this->ccmqswoueyeqkoeq("\160\162\145\154\x6f\x61\x64"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\x64\157\156\164\x2d\157\x70\x74"); } public function ocysssyiuaueqiei(string $iqaosyayeiuaisqi = self::yygyasgygkeqacou) : bool { return !ManipulateQuery::miccagckiqwseasi() && ManipulateQuery::eewqyocggsagyuis() && !DecoratorUser::ksgkoukcicwkkaum() && !$this->eeegakaauwcyugqy() && $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\x61\154\x6c\x6f\x77\137\164\x6f\137\x6f\160\x74\x69\155\x69\x7a\x65"), false, $iqaosyayeiuaisqi); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\142\171\x70\141\x73\163\x5f\154\x69\x73\x74"), $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto cecuyayqoioasumi; } $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(true); cecuyayqoioasumi: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x69\163\137\142\171\160\141\163\163"), false, $migiiksoiymissge); } public function eaoemakycwuywqsy($migiiksoiymissge, $suaemuyiacqyugsm = null) : string { static $oqseeekuqisekiwy; if (isset($oqseeekuqisekiwy[$migiiksoiymissge])) { goto myoicgcuugciueis; } $iueymcwwscwqkiyq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x70\x61\147\145\137\163\x74\x61\x74\165\163"), '', $migiiksoiymissge, $suaemuyiacqyugsm); if ($iueymcwwscwqkiyq) { goto qwigomakwmyiwkgo; } $geyqgckicikewwke = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\137\x69\x73\x5f\157\160\164\151\155\x69\x7a\145\x64"), [], $migiiksoiymissge, $suaemuyiacqyugsm); if (!$geyqgckicikewwke || !in_array(true, $geyqgckicikewwke, true)) { goto qogqewiwmwiwskgm; } if (in_array(false, $geyqgckicikewwke, true)) { goto qiaqsassksqiuyae; } $iueymcwwscwqkiyq = self::amcogigwsaqssuai; qiaqsassksqiuyae: goto qgoiooayqmqqsiok; qogqewiwmwiwskgm: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; qgoiooayqmqqsiok: $oqseeekuqisekiwy[$migiiksoiymissge] = $iueymcwwscwqkiyq; qwigomakwmyiwkgo: goto asmecuqiyyswueqe; myoicgcuugciueis: $iueymcwwscwqkiyq = $oqseeekuqisekiwy[$migiiksoiymissge]; asmecuqiyyswueqe: return $iueymcwwscwqkiyq; } public function ccioymuswicowwkw($migiiksoiymissge, $suaemuyiacqyugsm = null) { $iueymcwwscwqkiyq = $this->eaoemakycwuywqsy($migiiksoiymissge, $suaemuyiacqyugsm); $iuikoekwkkmcimwq = false; switch ($iueymcwwscwqkiyq) { case self::uasuowkaguiwoouw: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::mqwqioccoywwoysm; $sqeykgyoooqysmca = self::wyaqwomqwwaoiwas; $meqocwsecsywiiqs = __("\x4e\157\x74\x20\x4f\160\x74\x69\155\x69\172\145\144", PR__MDL__OPTIMIZATION); goto csscmcacoikwsecs; case self::kywgiyyageyqwuuc: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::ikqmakqaocqyimwe; $sqeykgyoooqysmca = self::PRIMARY; $meqocwsecsywiiqs = __("\x4f\x70\x74\x69\x6d\151\x7a\x61\x74\151\157\x6e\x20\x52\x75\156\156\x69\156\x67", PR__MDL__OPTIMIZATION); $iuikoekwkkmcimwq = true; goto csscmcacoikwsecs; case self::amcogigwsaqssuai: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::umkismkaiusiugkg; $sqeykgyoooqysmca = self::ckcawaoawwioqecq; $meqocwsecsywiiqs = __("\117\160\164\x69\155\151\x7a\x65\x64", PR__MDL__OPTIMIZATION); goto csscmcacoikwsecs; default: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::oigokooooayswskg; $sqeykgyoooqysmca = self::ecioqysekgaasegg; $meqocwsecsywiiqs = __("\x4e\x6f\x74\40\x43\x6f\155\x70\154\145\164\x65\x6c\171\40\117\x70\x74\x69\x6d\151\172\145\x64", PR__MDL__OPTIMIZATION); goto csscmcacoikwsecs; } cuykwgmswkskqkyi: csscmcacoikwsecs: return ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\x6c\x61\x73\x73" => "\151\x63\157\156\x2d\x6c\x67\x20\151\x63\x6f\x6e\x2d{$sqeykgyoooqysmca}" . ($iuikoekwkkmcimwq ? "\40\151\x63\157\x6e\x2d\163\160\x61\151\156" : ''), self::qescuiwgsyuikume => $meqocwsecsywiiqs, "\x64\x61\164\141\55\154\145\166\145\154" => $suaemuyiacqyugsm ? self::cwoackywkgsameww : self::yygyasgygkeqacou, "\x64\x61\x74\141\x2d\x73\x74\141\x74\165\163" => $iueymcwwscwqkiyq, "\144\141\x74\141\x2d\160\x65\162\155\141\x6c\151\x6e\153" => $migiiksoiymissge], ["\x6d\141\162\x6b\165\x70" => true]); } public function yyauwmoecaeskcae($suaemuyiacqyugsm) : ?string { $sqeykgyoooqysmca = ManipulateArray::get($suaemuyiacqyugsm, self::squoamkioomemiyi); $ccamueccusigaaio = ManipulateArray::get($suaemuyiacqyugsm, self::mgsccwumkcawaqcy); return $sqeykgyoooqysmca === self::mswmgkkakuooukme ? ManipulatePost::mqgeysameoesmuqw($ccamueccusigaaio) : ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio); } }
