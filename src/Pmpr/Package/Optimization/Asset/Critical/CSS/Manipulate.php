<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c342aab9e69             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Critical\CSS; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Asset\Critical\CSS\Data\Property; use Pmpr\Package\Optimization\Asset\Critical\CSS\Data\Rule; use Pmpr\Package\Optimization\Asset\Critical\Manipulate as BaseClass; class Manipulate extends BaseClass { public static function uigyooscomiegggk(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (!Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto iaygaasesyymwgss; } $fkgqmwkusywysaus = false; iaygaasesyymwgss: return $fkgqmwkusywysaus; } public static function aaoqaaaoaewyokkw(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto iwosouqsesoqcska; } $fkgqmwkusywysaus = false; iwosouqsesoqcska: return $fkgqmwkusywysaus; } public static function guugkagukymokgas(?string $mkomwsiykqigmqca = null) : string { return parent::guugkagukymokgas("\x2f\x63\163\163"); } public static function csyeqcysyissgowm(?string $migiiksoiymissge = null, ?string $mkomwsiykqigmqca = null) : ?string { return parent::csyeqcysyissgowm($migiiksoiymissge, "\57\143\163\163"); } public static function ogmguwgoqkqkkisa($iesegggmcccqyquo) { preg_match_all("\57\100\143\x68\x61\x72\163\x65\164\40\42\133\136\x22\135\53\x2b\x22\73\57", $iesegggmcccqyquo, $meyiiwcswqmuggyg); if (!($guuwoyaeoeeaauug = reset($meyiiwcswqmuggyg))) { goto iacwyogogoccmwsg; } $guuwoyaeoeeaauug = reset($guuwoyaeoeeaauug); iacwyogogoccmwsg: return $guuwoyaeoeeaauug; } private static function ieckauqqqiksqksc(string $iesegggmcccqyquo) : string { $iesegggmcccqyquo = preg_replace("\x2f\x40\143\x68\x61\x72\163\x65\x74\x20\x22\x5b\136\x22\135\53\x2b\x22\x3b\x2f", '', $iesegggmcccqyquo); return self::sqsemkikkiaaqeig($iesegggmcccqyquo); } private static function sqsemkikkiaaqeig(string $sociqikgoyemqaac) : string { $sociqikgoyemqaac = str_replace(["\xd", "\xa"], '', $sociqikgoyemqaac); $sociqikgoyemqaac = str_replace(["\x9"], "\x20", $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\174\x2f\134\52\56\x2a\x3f\134\x2a\57\x7c", '', $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\x2f\134\163\134\x73\x2b\57", "\40", $sociqikgoyemqaac); $sociqikgoyemqaac = trim($sociqikgoyemqaac); return rtrim($sociqikgoyemqaac, "\x3b"); } public static function oowkueqscaoakmck(string $icyaoosaykeskiuu) : array { $ymkqyawksmqcgsei = []; $oqaacwamwqqwsmgc = []; $qiacwcmymioiqyia = "\57\100\155\x65\x64\151\141\x2e\x2a\x3f\133\136\173\x5d\53\x5c\x7b\x28\x5b\x5c\x73\134\123\135\x2b\x3f\x5c\x7d\51\x5c\163\52\134\175\174\x40\153\145\x79\x66\x72\141\155\x65\163\56\52\77\133\136\173\135\53\x5c\173\x28\133\x5c\163\134\123\135\x2b\x3f\134\175\51\134\x73\x2a\x5c\175\x7c\100\x73\x75\160\x70\157\162\x74\163\56\x2a\77\133\136\x7b\135\53\x5c\173\x28\x5b\x5c\x73\134\x53\x5d\x2b\x3f\x5c\x7d\x29\x5c\163\52\134\x7d\174\x40\146\157\156\164\55\146\x61\143\x65\x2e\x2a\x3f\x5b\136\x7b\x5d\53\50\x5b\x5c\x73\x5c\123\x5d\53\x3f\51\x5c\163\x2a\x5c\175\57"; preg_match_all($qiacwcmymioiqyia, $icyaoosaykeskiuu, $oqaacwamwqqwsmgc); $oqaacwamwqqwsmgc = reset($oqaacwamwqqwsmgc); foreach ($oqaacwamwqqwsmgc as $momcykaoccoymeig => $mwcwkymkagwwoyow) { $skueimwaqauscmoc = explode($mwcwkymkagwwoyow, $icyaoosaykeskiuu); $uusmaiomayssaecw = array_key_first($skueimwaqauscmoc); $ymkqyawksmqcgsei[] = ManipulateArray::unset($skueimwaqauscmoc, $uusmaiomayssaecw); $ymkqyawksmqcgsei[] = $mwcwkymkagwwoyow; if ($skueimwaqauscmoc && is_array($skueimwaqauscmoc)) { goto issgmmkcgesyeoas; } $icyaoosaykeskiuu = ''; goto yeiicwscguyokwyu; issgmmkcgesyeoas: $icyaoosaykeskiuu = join('', $skueimwaqauscmoc); yeiicwscguyokwyu: qsyqcokomswykyso: } wqmwcuggcisqieao: $ymkqyawksmqcgsei[] = $icyaoosaykeskiuu; $ymkqyawksmqcgsei = array_filter(array_filter($ymkqyawksmqcgsei, "\x74\x72\x69\155")); $ycoqoegmwiiwyeuo = []; $umwmyskgiuekmemq = []; foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $sogksuscggsicmac = []; if (!preg_match($qiacwcmymioiqyia, $agywggmyywaimwuy)) { goto ccyiggckemwgooco; } $kmmsieagmcwqiako = substr($agywggmyywaimwuy, 0, strpos($agywggmyywaimwuy, "\173")); if (!(trim($kmmsieagmcwqiako) !== "\100\155\145\144\x69\x61\40\160\162\x69\x6e\164")) { goto mssaawaiaimogowg; } $mckgwmgmgigaiuwg = substr($agywggmyywaimwuy, strpos($agywggmyywaimwuy, "\x7b") + 1); $mckgwmgmgigaiuwg = substr($mckgwmgmgigaiuwg, 0, -1); $sogksuscggsicmac = (array) explode("\x7d", $mckgwmgmgigaiuwg); $umwmyskgiuekmemq[][$kmmsieagmcwqiako] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); mssaawaiaimogowg: goto umamqqwcoewcigew; ccyiggckemwgooco: $sogksuscggsicmac = (array) explode("\175", $agywggmyywaimwuy); $umwmyskgiuekmemq[][''] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); umamqqwcoewcigew: if (!$sogksuscggsicmac) { goto swkeiggkawwgewuw; } $ycoqoegmwiiwyeuo = array_merge($ycoqoegmwiiwyeuo, $sogksuscggsicmac); swkeiggkawwgewuw: giuoqsumkimmuaya: } yueosioyegouuwqo: return $umwmyskgiuekmemq; } public static function musqiscwwwkyuosg(string $gmawcgiwcmsukeiu) : array { $gmawcgiwcmsukeiu = self::sqsemkikkiaaqeig($gmawcgiwcmsukeiu); $oammesyieqmwuwyi = (array) preg_split("\x2f\x3b\x28\x3f\75\50\x5b\x5e\x5c\x28\135\52\134\x28\133\136\134\x28\x5d\52\x5c\x29\51\x2a\133\x5e\x5c\51\x5d\52\x24\x29\x28\77\75\x28\x5b\136\x5c\42\135\x2a\x5c\x22\x5b\x5e\x5c\x22\135\x2a\134\42\51\x2a\133\x5e\x5c\42\x5d\52\44\x29\x28\77\75\x28\133\136\134\47\x5d\x2a\134\47\x5b\136\x5c\47\x5d\x2a\134\x27\51\x2a\133\x5e\134\47\135\x2a\44\51\57", $gmawcgiwcmsukeiu); return array_values($oammesyieqmwuwyi); } public static function eeewcumgoiuaygow(array $gmawcgiwcmsukeiu) : string { $ukgsssmgkskkuoow = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { if (!$oaukocmsckciqaok instanceof Property) { goto oaskqsoyesmmeaew; } $ukgsssmgkskkuoow[] = trim($oaukocmsckciqaok->__toString(), "\x3b") . "\73"; oaskqsoyesmmeaew: kuimgwmkcgcoecko: } gaiaucesmcqgqwac: return trim(implode("\x20", $ukgsssmgkskkuoow), "\x3b"); } public static function mysegoauqwiccoeo(array $acqqmqmcquukaqsc) : array { $mguygkocuoaoqqkg = []; foreach ($acqqmqmcquukaqsc as $umwqusowiqmyseom => $ssaikkeuusoagacm) { foreach (reset($ssaikkeuusoagacm) as $ekuqiqmikiicgoss) { $ekuqiqmikiicgoss = self::wsokikoeayomqico(key($ssaikkeuusoagacm), $ekuqiqmikiicgoss, $umwqusowiqmyseom); $mguygkocuoaoqqkg = array_merge($mguygkocuoaoqqkg, $ekuqiqmikiicgoss); eykiuqsamowqykam: } yywwaaiicukuwcao: miigqygoawqmkkqm: } aacaoywsaqscgyua: return $mguygkocuoaoqqkg; } public static function uosumyqkueiykgiu(string $iesegggmcccqyquo) { $iesegggmcccqyquo = self::ieckauqqqiksqksc($iesegggmcccqyquo); $acqqmqmcquukaqsc = self::oowkueqscaoakmck($iesegggmcccqyquo); return self::mysegoauqwiccoeo($acqqmqmcquukaqsc); } public static function wsokikoeayomqico(string $qsmqqqccagyuaiso, string $ekuqiqmikiicgoss, int $umwqusowiqmyseom) : array { $ekuqiqmikiicgoss = self::sqsemkikkiaaqeig($ekuqiqmikiicgoss); $ukgsssmgkskkuoow = explode("\173", $ekuqiqmikiicgoss); $wcwugqcsqsmmiuqi = 0; $gkywegkkgiaaqqom = 1; $acqqmqmcquukaqsc = []; if (!isset($ukgsssmgkskkuoow[$gkywegkkgiaaqqom])) { goto wmcucyuieqgqisis; } $sgksuwkwyimqgaii = (array) explode("\x2c", trim($ukgsssmgkskkuoow[$wcwugqcsqsmmiuqi])); $gmawcgiwcmsukeiu = self::musqiscwwwkyuosg($ukgsssmgkskkuoow[$gkywegkkgiaaqqom]); foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) { $yuumukkaswwoywya = trim($yuumukkaswwoywya); $gmawcgiwcmsukeiu = self::gowgwikayqgeqgca($gmawcgiwcmsukeiu); $acqqmqmcquukaqsc[] = new Rule($qsmqqqccagyuaiso, $yuumukkaswwoywya, $gmawcgiwcmsukeiu, $umwqusowiqmyseom); qcwkymcgqacaaywc: } ywqouwqomiqwoquu: wmcucyuieqgqisis: return $acqqmqmcquukaqsc; } public static function gowgwikayqgeqgca(array $gmawcgiwcmsukeiu) : array { $mguygkocuoaoqqkg = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { $mksyucucyswaukig = self::gcamqqaucqewaucu($oaukocmsckciqaok); if (!$mksyucucyswaukig) { goto usmagcaocwiugqum; } $mguygkocuoaoqqkg[] = $mksyucucyswaukig; usmagcaocwiugqum: yyyyawaqcowsgqcs: } qwsmiaegmcwuskwi: return $mguygkocuoaoqqkg; } public static function gcamqqaucqewaucu(string $oaukocmsckciqaok) : ?Property { $mksyucucyswaukig = null; if (!(strpos($oaukocmsckciqaok, "\x3a") !== false)) { goto sikmqkecsiyciaei; } [$ymqmyyeuycgmigyo, $eqgoocgaqwqcimie] = array_map("\164\x72\x69\155", explode("\72", $oaukocmsckciqaok, 2)); $mksyucucyswaukig = new Property($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); sikmqkecsiyciaei: return $mksyucucyswaukig; } }
