<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0278673873             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Critical\CSS; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Asset\Critical\CSS\Data\Property; use Pmpr\Package\Optimization\Asset\Critical\CSS\Data\Rule; use Pmpr\Package\Optimization\Asset\Critical\Manipulate as BaseClass; class Manipulate extends BaseClass { public static function uigyooscomiegggk(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (!Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto iaygaasesyymwgss; } $fkgqmwkusywysaus = false; iaygaasesyymwgss: return $fkgqmwkusywysaus; } public static function aaoqaaaoaewyokkw(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto iwosouqsesoqcska; } $fkgqmwkusywysaus = false; iwosouqsesoqcska: return $fkgqmwkusywysaus; } public static function guugkagukymokgas(?string $mkomwsiykqigmqca = null) : string { return parent::guugkagukymokgas("\57\x63\x73\163"); } public static function csyeqcysyissgowm(?string $migiiksoiymissge = null, ?string $mkomwsiykqigmqca = null) : ?string { return parent::csyeqcysyissgowm($migiiksoiymissge, "\57\143\x73\x73"); } public static function ogmguwgoqkqkkisa($iesegggmcccqyquo) { preg_match_all("\57\100\143\x68\x61\162\x73\145\164\40\42\x5b\x5e\42\135\53\x2b\42\x3b\x2f", $iesegggmcccqyquo, $meyiiwcswqmuggyg); if (!($guuwoyaeoeeaauug = reset($meyiiwcswqmuggyg))) { goto iacwyogogoccmwsg; } $guuwoyaeoeeaauug = reset($guuwoyaeoeeaauug); iacwyogogoccmwsg: return $guuwoyaeoeeaauug; } private static function ieckauqqqiksqksc(string $iesegggmcccqyquo) : string { $iesegggmcccqyquo = preg_replace("\x2f\x40\x63\x68\141\x72\x73\x65\x74\x20\x22\133\136\42\x5d\53\53\42\73\x2f", '', $iesegggmcccqyquo); return self::sqsemkikkiaaqeig($iesegggmcccqyquo); } private static function sqsemkikkiaaqeig(string $sociqikgoyemqaac) : string { $sociqikgoyemqaac = str_replace(["\xd", "\12"], '', $sociqikgoyemqaac); $sociqikgoyemqaac = str_replace(["\x9"], "\40", $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\x7c\x2f\134\x2a\56\x2a\x3f\x5c\x2a\57\174", '', $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\57\x5c\x73\134\163\53\57", "\40", $sociqikgoyemqaac); $sociqikgoyemqaac = trim($sociqikgoyemqaac); return rtrim($sociqikgoyemqaac, "\73"); } public static function oowkueqscaoakmck(string $icyaoosaykeskiuu) : array { $ymkqyawksmqcgsei = []; $oqaacwamwqqwsmgc = []; $qiacwcmymioiqyia = "\x2f\100\x6d\145\144\151\141\x2e\52\x3f\x5b\x5e\173\135\x2b\x5c\x7b\50\133\134\x73\134\x53\135\x2b\x3f\134\x7d\51\134\163\x2a\134\x7d\x7c\x40\x6b\x65\171\x66\x72\x61\155\145\163\56\52\77\x5b\x5e\173\x5d\53\134\173\x28\x5b\134\163\134\x53\135\53\77\134\175\51\x5c\x73\52\x5c\x7d\174\x40\163\x75\x70\160\x6f\x72\x74\x73\x2e\52\77\133\136\173\x5d\53\x5c\x7b\x28\133\x5c\163\134\123\135\53\x3f\x5c\175\51\x5c\163\x2a\134\x7d\174\100\x66\157\156\x74\55\146\x61\143\145\x2e\x2a\77\133\x5e\x7b\x5d\53\x28\133\x5c\163\x5c\123\135\53\77\x29\x5c\163\52\x5c\x7d\x2f"; preg_match_all($qiacwcmymioiqyia, $icyaoosaykeskiuu, $oqaacwamwqqwsmgc); $oqaacwamwqqwsmgc = reset($oqaacwamwqqwsmgc); foreach ($oqaacwamwqqwsmgc as $momcykaoccoymeig => $mwcwkymkagwwoyow) { $skueimwaqauscmoc = explode($mwcwkymkagwwoyow, $icyaoosaykeskiuu); $uusmaiomayssaecw = array_key_first($skueimwaqauscmoc); $ymkqyawksmqcgsei[] = ManipulateArray::unset($skueimwaqauscmoc, $uusmaiomayssaecw); $ymkqyawksmqcgsei[] = $mwcwkymkagwwoyow; if ($skueimwaqauscmoc && is_array($skueimwaqauscmoc)) { goto issgmmkcgesyeoas; } $icyaoosaykeskiuu = ''; goto yeiicwscguyokwyu; issgmmkcgesyeoas: $icyaoosaykeskiuu = join('', $skueimwaqauscmoc); yeiicwscguyokwyu: qsyqcokomswykyso: } wqmwcuggcisqieao: $ymkqyawksmqcgsei[] = $icyaoosaykeskiuu; $ymkqyawksmqcgsei = array_filter(array_filter($ymkqyawksmqcgsei, "\x74\x72\151\x6d")); $ycoqoegmwiiwyeuo = []; $umwmyskgiuekmemq = []; foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $sogksuscggsicmac = []; if (!preg_match($qiacwcmymioiqyia, $agywggmyywaimwuy)) { goto ccyiggckemwgooco; } $kmmsieagmcwqiako = substr($agywggmyywaimwuy, 0, strpos($agywggmyywaimwuy, "\x7b")); if (!(trim($kmmsieagmcwqiako) !== "\x40\x6d\x65\x64\x69\141\40\160\x72\151\156\164")) { goto mssaawaiaimogowg; } $mckgwmgmgigaiuwg = substr($agywggmyywaimwuy, strpos($agywggmyywaimwuy, "\x7b") + 1); $mckgwmgmgigaiuwg = substr($mckgwmgmgigaiuwg, 0, -1); $sogksuscggsicmac = (array) explode("\175", $mckgwmgmgigaiuwg); $umwmyskgiuekmemq[][$kmmsieagmcwqiako] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); mssaawaiaimogowg: goto umamqqwcoewcigew; ccyiggckemwgooco: $sogksuscggsicmac = (array) explode("\175", $agywggmyywaimwuy); $umwmyskgiuekmemq[][''] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); umamqqwcoewcigew: if (!$sogksuscggsicmac) { goto swkeiggkawwgewuw; } $ycoqoegmwiiwyeuo = array_merge($ycoqoegmwiiwyeuo, $sogksuscggsicmac); swkeiggkawwgewuw: giuoqsumkimmuaya: } yueosioyegouuwqo: return $umwmyskgiuekmemq; } public static function musqiscwwwkyuosg(string $gmawcgiwcmsukeiu) : array { $gmawcgiwcmsukeiu = self::sqsemkikkiaaqeig($gmawcgiwcmsukeiu); $oammesyieqmwuwyi = (array) preg_split("\x2f\73\x28\77\x3d\50\133\136\x5c\x28\135\52\x5c\x28\133\x5e\x5c\x28\x5d\52\x5c\51\51\x2a\x5b\136\134\x29\x5d\x2a\44\x29\50\77\x3d\x28\x5b\136\134\x22\135\52\x5c\42\133\x5e\134\42\x5d\x2a\x5c\42\x29\52\133\x5e\x5c\x22\x5d\x2a\x24\51\50\x3f\75\x28\x5b\136\x5c\47\135\52\x5c\x27\133\x5e\x5c\47\x5d\x2a\x5c\47\x29\52\x5b\x5e\x5c\x27\x5d\52\x24\x29\x2f", $gmawcgiwcmsukeiu); return array_values($oammesyieqmwuwyi); } public static function eeewcumgoiuaygow(array $gmawcgiwcmsukeiu) : string { $ukgsssmgkskkuoow = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { if (!$oaukocmsckciqaok instanceof Property) { goto oaskqsoyesmmeaew; } $ukgsssmgkskkuoow[] = trim($oaukocmsckciqaok->__toString(), "\73") . "\73"; oaskqsoyesmmeaew: kuimgwmkcgcoecko: } gaiaucesmcqgqwac: return trim(implode("\x20", $ukgsssmgkskkuoow), "\x3b"); } public static function mysegoauqwiccoeo(array $acqqmqmcquukaqsc) : array { $mguygkocuoaoqqkg = []; foreach ($acqqmqmcquukaqsc as $umwqusowiqmyseom => $ssaikkeuusoagacm) { foreach (reset($ssaikkeuusoagacm) as $ekuqiqmikiicgoss) { $ekuqiqmikiicgoss = self::wsokikoeayomqico(key($ssaikkeuusoagacm), $ekuqiqmikiicgoss, $umwqusowiqmyseom); $mguygkocuoaoqqkg = array_merge($mguygkocuoaoqqkg, $ekuqiqmikiicgoss); eykiuqsamowqykam: } yywwaaiicukuwcao: miigqygoawqmkkqm: } aacaoywsaqscgyua: return $mguygkocuoaoqqkg; } public static function uosumyqkueiykgiu(string $iesegggmcccqyquo) { $iesegggmcccqyquo = self::ieckauqqqiksqksc($iesegggmcccqyquo); $acqqmqmcquukaqsc = self::oowkueqscaoakmck($iesegggmcccqyquo); return self::mysegoauqwiccoeo($acqqmqmcquukaqsc); } public static function wsokikoeayomqico(string $qsmqqqccagyuaiso, string $ekuqiqmikiicgoss, int $umwqusowiqmyseom) : array { $ekuqiqmikiicgoss = self::sqsemkikkiaaqeig($ekuqiqmikiicgoss); $ukgsssmgkskkuoow = explode("\x7b", $ekuqiqmikiicgoss); $wcwugqcsqsmmiuqi = 0; $gkywegkkgiaaqqom = 1; $acqqmqmcquukaqsc = []; if (!isset($ukgsssmgkskkuoow[$gkywegkkgiaaqqom])) { goto wmcucyuieqgqisis; } $sgksuwkwyimqgaii = (array) explode("\54", trim($ukgsssmgkskkuoow[$wcwugqcsqsmmiuqi])); $gmawcgiwcmsukeiu = self::musqiscwwwkyuosg($ukgsssmgkskkuoow[$gkywegkkgiaaqqom]); foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) { $yuumukkaswwoywya = trim($yuumukkaswwoywya); $gmawcgiwcmsukeiu = self::gowgwikayqgeqgca($gmawcgiwcmsukeiu); $acqqmqmcquukaqsc[] = new Rule($qsmqqqccagyuaiso, $yuumukkaswwoywya, $gmawcgiwcmsukeiu, $umwqusowiqmyseom); qcwkymcgqacaaywc: } ywqouwqomiqwoquu: wmcucyuieqgqisis: return $acqqmqmcquukaqsc; } public static function gowgwikayqgeqgca(array $gmawcgiwcmsukeiu) : array { $mguygkocuoaoqqkg = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { $mksyucucyswaukig = self::gcamqqaucqewaucu($oaukocmsckciqaok); if (!$mksyucucyswaukig) { goto usmagcaocwiugqum; } $mguygkocuoaoqqkg[] = $mksyucucyswaukig; usmagcaocwiugqum: yyyyawaqcowsgqcs: } qwsmiaegmcwuskwi: return $mguygkocuoaoqqkg; } public static function gcamqqaucqewaucu(string $oaukocmsckciqaok) : ?Property { $mksyucucyswaukig = null; if (!(strpos($oaukocmsckciqaok, "\x3a") !== false)) { goto sikmqkecsiyciaei; } [$ymqmyyeuycgmigyo, $eqgoocgaqwqcimie] = array_map("\x74\162\x69\x6d", explode("\72", $oaukocmsckciqaok, 2)); $mksyucucyswaukig = new Property($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); sikmqkecsiyciaei: return $mksyucucyswaukig; } }
