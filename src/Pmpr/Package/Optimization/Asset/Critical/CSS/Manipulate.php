<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d45f1553980             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Critical\CSS; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Asset\Critical\CSS\Data\Property; use Pmpr\Package\Optimization\Asset\Critical\CSS\Data\Rule; use Pmpr\Package\Optimization\Asset\Critical\Manipulate as BaseClass; class Manipulate extends BaseClass { public static function uigyooscomiegggk(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (!Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto sikmqkecsiyciaei; } $fkgqmwkusywysaus = false; sikmqkecsiyciaei: return $fkgqmwkusywysaus; } public static function aaoqaaaoaewyokkw(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto wmycwscioqackeig; } $fkgqmwkusywysaus = false; wmycwscioqackeig: return $fkgqmwkusywysaus; } public static function guugkagukymokgas(?string $mkomwsiykqigmqca = null) : string { return parent::guugkagukymokgas("\57\x63\163\x73"); } public static function csyeqcysyissgowm(?string $migiiksoiymissge = null, ?string $mkomwsiykqigmqca = null) : ?string { return parent::csyeqcysyissgowm($migiiksoiymissge, "\57\143\163\x73"); } public static function ogmguwgoqkqkkisa($iesegggmcccqyquo) { preg_match_all("\57\100\x63\150\x61\x72\x73\x65\164\40\x22\x5b\x5e\x22\x5d\53\x2b\x22\73\57", $iesegggmcccqyquo, $meyiiwcswqmuggyg); if (!($guuwoyaeoeeaauug = reset($meyiiwcswqmuggyg))) { goto wammkmaqucqagqww; } $guuwoyaeoeeaauug = reset($guuwoyaeoeeaauug); wammkmaqucqagqww: return $guuwoyaeoeeaauug; } private static function ieckauqqqiksqksc(string $iesegggmcccqyquo) : string { $iesegggmcccqyquo = preg_replace("\57\x40\x63\x68\141\x72\163\145\x74\x20\x22\x5b\x5e\x22\135\x2b\x2b\x22\x3b\57", '', $iesegggmcccqyquo); return self::sqsemkikkiaaqeig($iesegggmcccqyquo); } private static function sqsemkikkiaaqeig(string $sociqikgoyemqaac) : string { $sociqikgoyemqaac = str_replace(["\15", "\12"], '', $sociqikgoyemqaac); $sociqikgoyemqaac = str_replace(["\x9"], "\40", $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\x7c\x2f\134\52\x2e\52\77\x5c\x2a\57\174", '', $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\57\x5c\163\134\163\53\57", "\x20", $sociqikgoyemqaac); $sociqikgoyemqaac = trim($sociqikgoyemqaac); return rtrim($sociqikgoyemqaac, "\x3b"); } public static function oowkueqscaoakmck(string $icyaoosaykeskiuu) : array { $ymkqyawksmqcgsei = []; $oqaacwamwqqwsmgc = []; $qiacwcmymioiqyia = "\57\x40\155\145\x64\x69\x61\x2e\x2a\77\133\x5e\173\x5d\53\134\x7b\x28\133\x5c\x73\x5c\x53\x5d\x2b\x3f\134\175\x29\x5c\163\52\134\x7d\x7c\100\x6b\x65\x79\146\162\141\x6d\145\x73\x2e\x2a\77\x5b\x5e\173\135\x2b\134\173\50\133\x5c\x73\134\123\x5d\53\x3f\x5c\x7d\51\x5c\163\x2a\134\x7d\x7c\x40\x73\165\160\160\157\x72\164\x73\x2e\52\x3f\133\136\173\x5d\x2b\134\173\x28\x5b\x5c\x73\134\x53\x5d\53\x3f\x5c\175\x29\134\163\52\134\x7d\x7c\x40\146\x6f\156\164\x2d\146\x61\143\x65\56\52\x3f\x5b\x5e\x7b\135\53\x28\x5b\x5c\x73\x5c\123\x5d\53\x3f\x29\134\x73\x2a\x5c\x7d\57"; preg_match_all($qiacwcmymioiqyia, $icyaoosaykeskiuu, $oqaacwamwqqwsmgc); $oqaacwamwqqwsmgc = reset($oqaacwamwqqwsmgc); foreach ($oqaacwamwqqwsmgc as $momcykaoccoymeig => $mwcwkymkagwwoyow) { $skueimwaqauscmoc = explode($mwcwkymkagwwoyow, $icyaoosaykeskiuu); $uusmaiomayssaecw = array_key_first($skueimwaqauscmoc); $ymkqyawksmqcgsei[] = ManipulateArray::unset($skueimwaqauscmoc, $uusmaiomayssaecw); $ymkqyawksmqcgsei[] = $mwcwkymkagwwoyow; if ($skueimwaqauscmoc && is_array($skueimwaqauscmoc)) { goto imykswegcuekqwio; } $icyaoosaykeskiuu = ''; goto eokikuciuqkyauum; imykswegcuekqwio: $icyaoosaykeskiuu = join('', $skueimwaqauscmoc); eokikuciuqkyauum: cquyuwsisgqscemm: } iuooqassskiyeemo: $ymkqyawksmqcgsei[] = $icyaoosaykeskiuu; $ymkqyawksmqcgsei = array_filter(array_filter($ymkqyawksmqcgsei, "\164\x72\x69\x6d")); $ycoqoegmwiiwyeuo = []; $umwmyskgiuekmemq = []; foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $sogksuscggsicmac = []; if (!preg_match($qiacwcmymioiqyia, $agywggmyywaimwuy)) { goto zggweikegkcgkmma; } $kmmsieagmcwqiako = substr($agywggmyywaimwuy, 0, strpos($agywggmyywaimwuy, "\x7b")); if (!(trim($kmmsieagmcwqiako) !== "\x40\x6d\x65\x64\x69\x61\40\x70\162\151\x6e\x74")) { goto smkakiyekkqoggao; } $mckgwmgmgigaiuwg = substr($agywggmyywaimwuy, strpos($agywggmyywaimwuy, "\173") + 1); $mckgwmgmgigaiuwg = substr($mckgwmgmgigaiuwg, 0, -1); $sogksuscggsicmac = (array) explode("\x7d", $mckgwmgmgigaiuwg); $umwmyskgiuekmemq[][$kmmsieagmcwqiako] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); smkakiyekkqoggao: goto yisoawmmammassqk; zggweikegkcgkmma: $sogksuscggsicmac = (array) explode("\x7d", $agywggmyywaimwuy); $umwmyskgiuekmemq[][''] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); yisoawmmammassqk: if (!$sogksuscggsicmac) { goto gcsosokicycukoyc; } $ycoqoegmwiiwyeuo = array_merge($ycoqoegmwiiwyeuo, $sogksuscggsicmac); gcsosokicycukoyc: mqaamqyoywyekiko: } ykuqeyogsasokqis: return $umwmyskgiuekmemq; } public static function musqiscwwwkyuosg(string $gmawcgiwcmsukeiu) : array { $gmawcgiwcmsukeiu = self::sqsemkikkiaaqeig($gmawcgiwcmsukeiu); $oammesyieqmwuwyi = (array) preg_split("\57\x3b\x28\77\x3d\50\x5b\136\x5c\x28\x5d\52\134\x28\133\136\134\50\x5d\52\134\51\x29\52\133\136\134\51\x5d\x2a\44\51\50\x3f\75\x28\x5b\x5e\134\x22\135\x2a\x5c\42\133\x5e\x5c\x22\135\x2a\134\42\51\x2a\133\136\x5c\42\x5d\52\44\51\50\77\75\x28\x5b\136\134\47\135\x2a\134\47\x5b\x5e\134\x27\135\52\x5c\47\x29\52\x5b\136\x5c\x27\x5d\x2a\44\51\57", $gmawcgiwcmsukeiu); return array_values($oammesyieqmwuwyi); } public static function eeewcumgoiuaygow(array $gmawcgiwcmsukeiu) : string { $ukgsssmgkskkuoow = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { if (!$oaukocmsckciqaok instanceof Property) { goto umccwcqwkoiaakmu; } $ukgsssmgkskkuoow[] = trim($oaukocmsckciqaok->__toString(), "\x3b") . "\x3b"; umccwcqwkoiaakmu: coskmuqsawiaeyqg: } seqammocqkyswaim: return trim(implode("\x20", $ukgsssmgkskkuoow), "\73"); } public static function mysegoauqwiccoeo(array $acqqmqmcquukaqsc) : array { $mguygkocuoaoqqkg = []; foreach ($acqqmqmcquukaqsc as $umwqusowiqmyseom => $ssaikkeuusoagacm) { foreach (reset($ssaikkeuusoagacm) as $ekuqiqmikiicgoss) { $ekuqiqmikiicgoss = self::wsokikoeayomqico(key($ssaikkeuusoagacm), $ekuqiqmikiicgoss, $umwqusowiqmyseom); $mguygkocuoaoqqkg = array_merge($mguygkocuoaoqqkg, $ekuqiqmikiicgoss); smksoismyouykeoa: } imquwacukaswoyka: wyyowcsciaqkuiuq: } ekgkiioywougquka: return $mguygkocuoaoqqkg; } public static function uosumyqkueiykgiu(string $iesegggmcccqyquo) { $iesegggmcccqyquo = self::ieckauqqqiksqksc($iesegggmcccqyquo); $acqqmqmcquukaqsc = self::oowkueqscaoakmck($iesegggmcccqyquo); return self::mysegoauqwiccoeo($acqqmqmcquukaqsc); } public static function wsokikoeayomqico(string $qsmqqqccagyuaiso, string $ekuqiqmikiicgoss, int $umwqusowiqmyseom) : array { $ekuqiqmikiicgoss = self::sqsemkikkiaaqeig($ekuqiqmikiicgoss); $ukgsssmgkskkuoow = explode("\x7b", $ekuqiqmikiicgoss); $wcwugqcsqsmmiuqi = 0; $gkywegkkgiaaqqom = 1; $acqqmqmcquukaqsc = []; if (!isset($ukgsssmgkskkuoow[$gkywegkkgiaaqqom])) { goto gcoeaokkagaaeuse; } $sgksuwkwyimqgaii = (array) explode("\54", trim($ukgsssmgkskkuoow[$wcwugqcsqsmmiuqi])); $gmawcgiwcmsukeiu = self::musqiscwwwkyuosg($ukgsssmgkskkuoow[$gkywegkkgiaaqqom]); foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) { $yuumukkaswwoywya = trim($yuumukkaswwoywya); $gmawcgiwcmsukeiu = self::gowgwikayqgeqgca($gmawcgiwcmsukeiu); $acqqmqmcquukaqsc[] = new Rule($qsmqqqccagyuaiso, $yuumukkaswwoywya, $gmawcgiwcmsukeiu, $umwqusowiqmyseom); maeccckgcsaaumkw: } qwgkwokcyocqiyee: gcoeaokkagaaeuse: return $acqqmqmcquukaqsc; } public static function gowgwikayqgeqgca(array $gmawcgiwcmsukeiu) : array { $mguygkocuoaoqqkg = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { $mksyucucyswaukig = self::gcamqqaucqewaucu($oaukocmsckciqaok); if (!$mksyucucyswaukig) { goto qocgmocqauaaekii; } $mguygkocuoaoqqkg[] = $mksyucucyswaukig; qocgmocqauaaekii: uagsgicwwcakecwq: } kcqueaewmayywqeq: return $mguygkocuoaoqqkg; } public static function gcamqqaucqewaucu(string $oaukocmsckciqaok) : ?Property { $mksyucucyswaukig = null; if (!(strpos($oaukocmsckciqaok, "\x3a") !== false)) { goto gsggsmmwcmkgyyss; } [$ymqmyyeuycgmigyo, $eqgoocgaqwqcimie] = array_map("\x74\162\151\x6d", explode("\x3a", $oaukocmsckciqaok, 2)); $mksyucucyswaukig = new Property($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); gsggsmmwcmkgyyss: return $mksyucucyswaukig; } }
