<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             622137a05c93e             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Critical\CSS; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Asset\Critical\CSS\Data\Property; use Pmpr\Package\Optimization\Asset\Critical\CSS\Data\Rule; use Pmpr\Package\Optimization\Asset\Critical\Manipulate as BaseClass; class Manipulate extends BaseClass { public static function uigyooscomiegggk(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (!Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto qsygcycwieukkgwc; } $fkgqmwkusywysaus = false; qsygcycwieukkgwc: return $fkgqmwkusywysaus; } public static function aaoqaaaoaewyokkw(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto kiwqkcaekqqyuegq; } $fkgqmwkusywysaus = false; kiwqkcaekqqyuegq: return $fkgqmwkusywysaus; } public static function guugkagukymokgas(?string $mkomwsiykqigmqca = null) : string { return parent::guugkagukymokgas("\57\x63\x73\163"); } public static function csyeqcysyissgowm(?string $migiiksoiymissge = null, ?string $mkomwsiykqigmqca = null) : ?string { return parent::csyeqcysyissgowm($migiiksoiymissge, "\57\x63\x73\163"); } public static function ogmguwgoqkqkkisa($iesegggmcccqyquo) { preg_match_all("\x2f\x40\x63\150\x61\162\163\145\x74\40\42\133\x5e\x22\135\x2b\53\42\73\57", $iesegggmcccqyquo, $meyiiwcswqmuggyg); if (!($guuwoyaeoeeaauug = reset($meyiiwcswqmuggyg))) { goto quwcqmyokicssyew; } $guuwoyaeoeeaauug = reset($guuwoyaeoeeaauug); quwcqmyokicssyew: return $guuwoyaeoeeaauug; } private static function ieckauqqqiksqksc(string $iesegggmcccqyquo) : string { $iesegggmcccqyquo = preg_replace("\x2f\x40\143\150\x61\x72\x73\x65\164\x20\42\x5b\x5e\42\135\53\53\x22\73\x2f", '', $iesegggmcccqyquo); return self::sqsemkikkiaaqeig($iesegggmcccqyquo); } private static function sqsemkikkiaaqeig(string $sociqikgoyemqaac) : string { $sociqikgoyemqaac = str_replace(["\xd", "\12"], '', $sociqikgoyemqaac); $sociqikgoyemqaac = str_replace(["\11"], "\40", $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\x7c\57\x5c\52\56\x2a\x3f\134\x2a\57\x7c", '', $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\57\134\163\134\163\53\x2f", "\40", $sociqikgoyemqaac); $sociqikgoyemqaac = trim($sociqikgoyemqaac); return rtrim($sociqikgoyemqaac, "\x3b"); } public static function oowkueqscaoakmck(string $icyaoosaykeskiuu) : array { $ymkqyawksmqcgsei = []; $oqaacwamwqqwsmgc = []; $qiacwcmymioiqyia = "\57\x40\155\145\144\151\141\x2e\x2a\x3f\133\x5e\173\x5d\x2b\x5c\x7b\50\133\x5c\x73\x5c\123\135\53\77\134\175\x29\134\163\52\134\175\x7c\x40\x6b\x65\x79\x66\162\x61\x6d\145\x73\56\x2a\77\133\136\173\135\53\134\x7b\50\133\x5c\163\134\123\135\53\77\134\x7d\51\x5c\x73\52\x5c\175\174\100\163\x75\160\x70\157\x72\164\x73\x2e\52\x3f\133\136\173\135\53\134\x7b\50\x5b\134\163\134\x53\x5d\x2b\x3f\x5c\x7d\51\134\163\x2a\134\175\x7c\100\146\157\156\164\x2d\x66\141\143\x65\x2e\52\77\133\x5e\173\x5d\x2b\x28\x5b\x5c\163\x5c\123\135\x2b\77\51\x5c\163\52\134\x7d\57"; preg_match_all($qiacwcmymioiqyia, $icyaoosaykeskiuu, $oqaacwamwqqwsmgc); $oqaacwamwqqwsmgc = reset($oqaacwamwqqwsmgc); foreach ($oqaacwamwqqwsmgc as $momcykaoccoymeig => $mwcwkymkagwwoyow) { $skueimwaqauscmoc = explode($mwcwkymkagwwoyow, $icyaoosaykeskiuu); $uusmaiomayssaecw = array_key_first($skueimwaqauscmoc); $ymkqyawksmqcgsei[] = ManipulateArray::unset($skueimwaqauscmoc, $uusmaiomayssaecw); $ymkqyawksmqcgsei[] = $mwcwkymkagwwoyow; if ($skueimwaqauscmoc && is_array($skueimwaqauscmoc)) { goto cmqucgoewuyieoyk; } $icyaoosaykeskiuu = ''; goto yqykqysmiquwoasu; cmqucgoewuyieoyk: $icyaoosaykeskiuu = join('', $skueimwaqauscmoc); yqykqysmiquwoasu: gimmuoqwckiseaik: } iqcogmsguwoikame: $ymkqyawksmqcgsei[] = $icyaoosaykeskiuu; $ymkqyawksmqcgsei = array_filter(array_filter($ymkqyawksmqcgsei, "\x74\162\x69\155")); $ycoqoegmwiiwyeuo = []; $umwmyskgiuekmemq = []; foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $sogksuscggsicmac = []; if (!preg_match($qiacwcmymioiqyia, $agywggmyywaimwuy)) { goto ygcsmkuycoagwyou; } $kmmsieagmcwqiako = substr($agywggmyywaimwuy, 0, strpos($agywggmyywaimwuy, "\173")); if (!(trim($kmmsieagmcwqiako) !== "\x40\x6d\145\144\151\141\x20\x70\x72\151\x6e\164")) { goto omugkkesagcyagmk; } $mckgwmgmgigaiuwg = substr($agywggmyywaimwuy, strpos($agywggmyywaimwuy, "\173") + 1); $mckgwmgmgigaiuwg = substr($mckgwmgmgigaiuwg, 0, -1); $sogksuscggsicmac = (array) explode("\x7d", $mckgwmgmgigaiuwg); $umwmyskgiuekmemq[][$kmmsieagmcwqiako] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); omugkkesagcyagmk: goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: $sogksuscggsicmac = (array) explode("\175", $agywggmyywaimwuy); $umwmyskgiuekmemq[][''] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); kqksuugcgsyeoayy: if (!$sogksuscggsicmac) { goto iggyqogweyosuikc; } $ycoqoegmwiiwyeuo = array_merge($ycoqoegmwiiwyeuo, $sogksuscggsicmac); iggyqogweyosuikc: mosqsmqimqgqoase: } ayyweymyuuiauamo: return $umwmyskgiuekmemq; } public static function musqiscwwwkyuosg(string $gmawcgiwcmsukeiu) : array { $gmawcgiwcmsukeiu = self::sqsemkikkiaaqeig($gmawcgiwcmsukeiu); $oammesyieqmwuwyi = (array) preg_split("\x2f\x3b\x28\77\x3d\x28\133\136\134\x28\x5d\52\x5c\x28\133\x5e\134\50\x5d\x2a\134\51\x29\x2a\x5b\x5e\x5c\x29\x5d\x2a\x24\51\x28\x3f\75\50\133\136\134\42\135\x2a\134\42\x5b\x5e\x5c\42\x5d\x2a\x5c\42\51\x2a\133\x5e\x5c\x22\135\52\x24\51\50\77\75\50\133\136\x5c\x27\x5d\52\x5c\47\x5b\136\134\47\x5d\52\134\x27\51\52\x5b\x5e\134\x27\135\x2a\x24\x29\57", $gmawcgiwcmsukeiu); return array_values($oammesyieqmwuwyi); } public static function eeewcumgoiuaygow(array $gmawcgiwcmsukeiu) : string { $ukgsssmgkskkuoow = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { if (!$oaukocmsckciqaok instanceof Property) { goto qkcyqocqqwmqgqww; } $ukgsssmgkskkuoow[] = trim($oaukocmsckciqaok->__toString(), "\73") . "\x3b"; qkcyqocqqwmqgqww: ssoucoucsgccekwe: } qqewoyookaskiuek: return trim(implode("\40", $ukgsssmgkskkuoow), "\73"); } public static function mysegoauqwiccoeo(array $acqqmqmcquukaqsc) : array { $mguygkocuoaoqqkg = []; foreach ($acqqmqmcquukaqsc as $umwqusowiqmyseom => $ssaikkeuusoagacm) { foreach (reset($ssaikkeuusoagacm) as $ekuqiqmikiicgoss) { $ekuqiqmikiicgoss = self::wsokikoeayomqico(key($ssaikkeuusoagacm), $ekuqiqmikiicgoss, $umwqusowiqmyseom); $mguygkocuoaoqqkg = array_merge($mguygkocuoaoqqkg, $ekuqiqmikiicgoss); wmmggowmigekyoso: } ywqgcegomwaiuquc: eegqyykygiccaoeo: } miyqyeiwquwsacsm: return $mguygkocuoaoqqkg; } public static function uosumyqkueiykgiu(string $iesegggmcccqyquo) { $iesegggmcccqyquo = self::ieckauqqqiksqksc($iesegggmcccqyquo); $acqqmqmcquukaqsc = self::oowkueqscaoakmck($iesegggmcccqyquo); return self::mysegoauqwiccoeo($acqqmqmcquukaqsc); } public static function wsokikoeayomqico(string $qsmqqqccagyuaiso, string $ekuqiqmikiicgoss, int $umwqusowiqmyseom) : array { $ekuqiqmikiicgoss = self::sqsemkikkiaaqeig($ekuqiqmikiicgoss); $ukgsssmgkskkuoow = explode("\173", $ekuqiqmikiicgoss); $wcwugqcsqsmmiuqi = 0; $gkywegkkgiaaqqom = 1; $acqqmqmcquukaqsc = []; if (!isset($ukgsssmgkskkuoow[$gkywegkkgiaaqqom])) { goto suswcqoyyqkkquuo; } $sgksuwkwyimqgaii = (array) explode("\54", trim($ukgsssmgkskkuoow[$wcwugqcsqsmmiuqi])); $gmawcgiwcmsukeiu = self::musqiscwwwkyuosg($ukgsssmgkskkuoow[$gkywegkkgiaaqqom]); foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) { $yuumukkaswwoywya = trim($yuumukkaswwoywya); $gmawcgiwcmsukeiu = self::gowgwikayqgeqgca($gmawcgiwcmsukeiu); $acqqmqmcquukaqsc[] = new Rule($qsmqqqccagyuaiso, $yuumukkaswwoywya, $gmawcgiwcmsukeiu, $umwqusowiqmyseom); acaqummmoyiemqss: } soqqemyioggmoakg: suswcqoyyqkkquuo: return $acqqmqmcquukaqsc; } public static function gowgwikayqgeqgca(array $gmawcgiwcmsukeiu) : array { $mguygkocuoaoqqkg = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { $mksyucucyswaukig = self::gcamqqaucqewaucu($oaukocmsckciqaok); if (!$mksyucucyswaukig) { goto foeeqckqsyockkak; } $mguygkocuoaoqqkg[] = $mksyucucyswaukig; foeeqckqsyockkak: oqugqwcyomiaaoqu: } eeqesooyqagwawae: return $mguygkocuoaoqqkg; } public static function gcamqqaucqewaucu(string $oaukocmsckciqaok) : ?Property { $mksyucucyswaukig = null; if (!(strpos($oaukocmsckciqaok, "\72") !== false)) { goto iekumemscwieugqw; } [$ymqmyyeuycgmigyo, $eqgoocgaqwqcimie] = array_map("\164\x72\x69\155", explode("\72", $oaukocmsckciqaok, 2)); $mksyucucyswaukig = new Property($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); iekumemscwieugqw: return $mksyucucyswaukig; } }
