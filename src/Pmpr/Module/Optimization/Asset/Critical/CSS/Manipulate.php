<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c026a362a9d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical\CSS; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Property; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Rule; use Pmpr\Module\Optimization\Asset\Critical\Manipulate as BaseClass; class Manipulate extends BaseClass { public static function uigyooscomiegggk(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (!Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto iauwuugggmegwisk; } $fkgqmwkusywysaus = false; iauwuugggmegwisk: return $fkgqmwkusywysaus; } public static function aaoqaaaoaewyokkw(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto aukucaieceiwesmm; } $fkgqmwkusywysaus = false; aukucaieceiwesmm: return $fkgqmwkusywysaus; } public static function guugkagukymokgas(?string $mkomwsiykqigmqca = null) : string { return parent::guugkagukymokgas("\x2f\x63\x73\x73"); } public static function csyeqcysyissgowm(?string $migiiksoiymissge = null, ?string $mkomwsiykqigmqca = null) : ?string { return parent::csyeqcysyissgowm($migiiksoiymissge, "\x2f\x63\x73\x73"); } public static function ogmguwgoqkqkkisa($iesegggmcccqyquo) { preg_match_all("\57\100\143\x68\141\162\163\145\x74\40\42\x5b\136\42\x5d\53\53\x22\73\x2f", $iesegggmcccqyquo, $meyiiwcswqmuggyg); if (!($guuwoyaeoeeaauug = reset($meyiiwcswqmuggyg))) { goto kqyoakickmseyyeq; } $guuwoyaeoeeaauug = reset($guuwoyaeoeeaauug); kqyoakickmseyyeq: return $guuwoyaeoeeaauug; } private static function ieckauqqqiksqksc(string $iesegggmcccqyquo) : string { $iesegggmcccqyquo = preg_replace("\x2f\100\143\150\141\x72\x73\x65\164\40\x22\x5b\136\x22\135\x2b\x2b\x22\x3b\x2f", '', $iesegggmcccqyquo); return self::sqsemkikkiaaqeig($iesegggmcccqyquo); } private static function sqsemkikkiaaqeig(string $sociqikgoyemqaac) : string { $sociqikgoyemqaac = str_replace(["\xd", "\xa"], '', $sociqikgoyemqaac); $sociqikgoyemqaac = str_replace(["\x9"], "\x20", $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\x7c\x2f\134\x2a\x2e\x2a\x3f\x5c\x2a\x2f\174", '', $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\57\134\x73\x5c\163\x2b\57", "\40", $sociqikgoyemqaac); $sociqikgoyemqaac = trim($sociqikgoyemqaac); return rtrim($sociqikgoyemqaac, "\x3b"); } public static function oowkueqscaoakmck(string $icyaoosaykeskiuu) : array { $ymkqyawksmqcgsei = []; $oqaacwamwqqwsmgc = []; $qiacwcmymioiqyia = "\57\100\x6d\145\x64\x69\x61\56\52\x3f\133\136\x7b\135\53\134\x7b\50\133\x5c\163\x5c\x53\135\x2b\x3f\134\x7d\51\134\x73\52\x5c\175\x7c\x40\153\145\171\x66\162\141\x6d\145\163\56\x2a\x3f\x5b\x5e\x7b\135\x2b\134\x7b\x28\133\134\x73\x5c\x53\x5d\53\77\x5c\x7d\51\x5c\x73\52\x5c\x7d\174\x40\163\x75\x70\x70\x6f\x72\x74\x73\x2e\52\x3f\133\136\173\135\x2b\x5c\173\x28\133\x5c\x73\x5c\123\x5d\53\77\x5c\175\x29\x5c\x73\x2a\134\x7d\x7c\x40\x66\x6f\x6e\x74\x2d\146\141\143\x65\x2e\52\77\x5b\x5e\x7b\x5d\x2b\x28\133\134\x73\x5c\123\x5d\x2b\x3f\51\x5c\163\52\134\x7d\57"; preg_match_all($qiacwcmymioiqyia, $icyaoosaykeskiuu, $oqaacwamwqqwsmgc); $oqaacwamwqqwsmgc = reset($oqaacwamwqqwsmgc); foreach ($oqaacwamwqqwsmgc as $momcykaoccoymeig => $mwcwkymkagwwoyow) { $skueimwaqauscmoc = explode($mwcwkymkagwwoyow, $icyaoosaykeskiuu); $uusmaiomayssaecw = array_key_first($skueimwaqauscmoc); $ymkqyawksmqcgsei[] = ManipulateArray::unset($skueimwaqauscmoc, $uusmaiomayssaecw); $ymkqyawksmqcgsei[] = $mwcwkymkagwwoyow; if ($skueimwaqauscmoc && is_array($skueimwaqauscmoc)) { goto ykwasaaoeeiuomim; } $icyaoosaykeskiuu = ''; goto acggikioyeueeowg; ykwasaaoeeiuomim: $icyaoosaykeskiuu = join('', $skueimwaqauscmoc); acggikioyeueeowg: iwueukqcywkiyqge: } micceocwuwkyusic: $ymkqyawksmqcgsei[] = $icyaoosaykeskiuu; $ymkqyawksmqcgsei = array_filter(array_filter($ymkqyawksmqcgsei, "\x74\162\x69\x6d")); $ycoqoegmwiiwyeuo = []; $umwmyskgiuekmemq = []; foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $sogksuscggsicmac = []; if (!preg_match($qiacwcmymioiqyia, $agywggmyywaimwuy)) { goto kicwiowcogmauwiy; } $kmmsieagmcwqiako = substr($agywggmyywaimwuy, 0, strpos($agywggmyywaimwuy, "\x7b")); if (!(trim($kmmsieagmcwqiako) !== "\100\155\145\x64\x69\x61\40\x70\162\x69\x6e\x74")) { goto kaiesowkgwogqseg; } $mckgwmgmgigaiuwg = substr($agywggmyywaimwuy, strpos($agywggmyywaimwuy, "\x7b") + 1); $mckgwmgmgigaiuwg = substr($mckgwmgmgigaiuwg, 0, -1); $sogksuscggsicmac = (array) explode("\175", $mckgwmgmgigaiuwg); $umwmyskgiuekmemq[][$kmmsieagmcwqiako] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); kaiesowkgwogqseg: goto cwswueuqoamqasya; kicwiowcogmauwiy: $sogksuscggsicmac = (array) explode("\175", $agywggmyywaimwuy); $umwmyskgiuekmemq[][''] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); cwswueuqoamqasya: if (!$sogksuscggsicmac) { goto kgmeiwiakwicgkkk; } $ycoqoegmwiiwyeuo = array_merge($ycoqoegmwiiwyeuo, $sogksuscggsicmac); kgmeiwiakwicgkkk: egaymskkosukqeao: } cwikoaeqmmoimmso: return $umwmyskgiuekmemq; } public static function musqiscwwwkyuosg(string $gmawcgiwcmsukeiu) : array { $gmawcgiwcmsukeiu = self::sqsemkikkiaaqeig($gmawcgiwcmsukeiu); $oammesyieqmwuwyi = (array) preg_split("\x2f\x3b\x28\x3f\75\x28\x5b\136\x5c\50\135\52\134\x28\133\x5e\x5c\50\x5d\x2a\134\x29\x29\52\133\136\134\x29\135\52\44\x29\50\x3f\x3d\50\133\136\134\42\135\52\x5c\x22\x5b\136\x5c\42\135\52\x5c\x22\x29\x2a\133\x5e\x5c\42\x5d\52\x24\51\x28\x3f\75\x28\x5b\136\x5c\47\135\52\x5c\47\x5b\136\x5c\47\135\52\x5c\47\51\52\133\x5e\134\47\x5d\x2a\44\51\x2f", $gmawcgiwcmsukeiu); return array_values($oammesyieqmwuwyi); } public static function eeewcumgoiuaygow(array $gmawcgiwcmsukeiu) : string { $ukgsssmgkskkuoow = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { if (!$oaukocmsckciqaok instanceof Property) { goto csieaismmmocyacu; } $ukgsssmgkskkuoow[] = trim($oaukocmsckciqaok->__toString(), "\73") . "\x3b"; csieaismmmocyacu: omykokikgocoikec: } suuskagowwgsouqw: return trim(implode("\x20", $ukgsssmgkskkuoow), "\73"); } public static function mysegoauqwiccoeo(array $acqqmqmcquukaqsc) : array { $mguygkocuoaoqqkg = []; foreach ($acqqmqmcquukaqsc as $umwqusowiqmyseom => $ssaikkeuusoagacm) { foreach (reset($ssaikkeuusoagacm) as $ekuqiqmikiicgoss) { $ekuqiqmikiicgoss = self::wsokikoeayomqico(key($ssaikkeuusoagacm), $ekuqiqmikiicgoss, $umwqusowiqmyseom); $mguygkocuoaoqqkg = array_merge($mguygkocuoaoqqkg, $ekuqiqmikiicgoss); cquecqekuucwoumw: } agemwookwseyycqo: mykiyqcqiegkiqys: } aquqkiggamaoegoo: return $mguygkocuoaoqqkg; } public static function uosumyqkueiykgiu(string $iesegggmcccqyquo) { $iesegggmcccqyquo = self::ieckauqqqiksqksc($iesegggmcccqyquo); $acqqmqmcquukaqsc = self::oowkueqscaoakmck($iesegggmcccqyquo); return self::mysegoauqwiccoeo($acqqmqmcquukaqsc); } public static function wsokikoeayomqico(string $qsmqqqccagyuaiso, string $ekuqiqmikiicgoss, int $umwqusowiqmyseom) : array { $ekuqiqmikiicgoss = self::sqsemkikkiaaqeig($ekuqiqmikiicgoss); $ukgsssmgkskkuoow = explode("\173", $ekuqiqmikiicgoss); $wcwugqcsqsmmiuqi = 0; $gkywegkkgiaaqqom = 1; $acqqmqmcquukaqsc = []; if (!isset($ukgsssmgkskkuoow[$gkywegkkgiaaqqom])) { goto saauykgakaeiyoua; } $sgksuwkwyimqgaii = (array) explode("\x2c", trim($ukgsssmgkskkuoow[$wcwugqcsqsmmiuqi])); $gmawcgiwcmsukeiu = self::musqiscwwwkyuosg($ukgsssmgkskkuoow[$gkywegkkgiaaqqom]); foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) { $yuumukkaswwoywya = trim($yuumukkaswwoywya); $gmawcgiwcmsukeiu = self::gowgwikayqgeqgca($gmawcgiwcmsukeiu); $acqqmqmcquukaqsc[] = new Rule($qsmqqqccagyuaiso, $yuumukkaswwoywya, $gmawcgiwcmsukeiu, $umwqusowiqmyseom); owuuuiekkaeoeacq: } koiscokkkaimiecq: saauykgakaeiyoua: return $acqqmqmcquukaqsc; } public static function gowgwikayqgeqgca(array $gmawcgiwcmsukeiu) : array { $mguygkocuoaoqqkg = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { $mksyucucyswaukig = self::gcamqqaucqewaucu($oaukocmsckciqaok); if (!$mksyucucyswaukig) { goto kwyimqumkuuyaiku; } $mguygkocuoaoqqkg[] = $mksyucucyswaukig; kwyimqumkuuyaiku: mqimkwickkgqqeoi: } qwemkcoaseywkuuc: return $mguygkocuoaoqqkg; } public static function gcamqqaucqewaucu(string $oaukocmsckciqaok) : ?Property { $mksyucucyswaukig = null; if (!(strpos($oaukocmsckciqaok, "\72") !== false)) { goto gkqiqaqecmoogmaa; } [$ymqmyyeuycgmigyo, $eqgoocgaqwqcimie] = array_map("\164\x72\151\x6d", explode("\x3a", $oaukocmsckciqaok, 2)); $mksyucucyswaukig = new Property($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); gkqiqaqecmoogmaa: return $mksyucucyswaukig; } }
