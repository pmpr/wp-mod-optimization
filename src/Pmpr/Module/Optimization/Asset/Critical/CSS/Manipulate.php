<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6321c656ef420             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical\CSS; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Property; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Rule; use Pmpr\Module\Optimization\Asset\Critical\Manipulate as BaseClass; class Manipulate extends BaseClass { public static function uigyooscomiegggk(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (!Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto kskqquqsegiiogek; } $fkgqmwkusywysaus = false; kskqquqsegiiogek: return $fkgqmwkusywysaus; } public static function aaoqaaaoaewyokkw(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto mocaoayiouggauiy; } $fkgqmwkusywysaus = false; mocaoayiouggauiy: return $fkgqmwkusywysaus; } public static function guugkagukymokgas(?string $mkomwsiykqigmqca = null) : string { return parent::guugkagukymokgas("\57\x63\163\163"); } public static function csyeqcysyissgowm(?string $migiiksoiymissge = null, ?string $mkomwsiykqigmqca = null) : ?string { return parent::csyeqcysyissgowm($migiiksoiymissge, "\x2f\143\x73\163"); } public static function ogmguwgoqkqkkisa($iesegggmcccqyquo) { preg_match_all("\x2f\x40\x63\x68\141\162\163\x65\164\40\42\x5b\x5e\x22\135\53\x2b\x22\x3b\57", $iesegggmcccqyquo, $meyiiwcswqmuggyg); if (!($guuwoyaeoeeaauug = reset($meyiiwcswqmuggyg))) { goto ygskksomysgaokek; } $guuwoyaeoeeaauug = reset($guuwoyaeoeeaauug); ygskksomysgaokek: return $guuwoyaeoeeaauug; } private static function ieckauqqqiksqksc(string $iesegggmcccqyquo) : string { $iesegggmcccqyquo = preg_replace("\x2f\x40\x63\150\x61\x72\x73\145\x74\x20\x22\x5b\136\42\x5d\x2b\53\42\73\x2f", '', $iesegggmcccqyquo); return self::sqsemkikkiaaqeig($iesegggmcccqyquo); } private static function sqsemkikkiaaqeig(string $sociqikgoyemqaac) : string { $sociqikgoyemqaac = str_replace(["\xd", "\12"], '', $sociqikgoyemqaac); $sociqikgoyemqaac = str_replace(["\11"], "\x20", $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\x7c\x2f\134\x2a\56\52\77\x5c\52\x2f\x7c", '', $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\x2f\134\163\x5c\x73\53\57", "\40", $sociqikgoyemqaac); $sociqikgoyemqaac = trim($sociqikgoyemqaac); return rtrim($sociqikgoyemqaac, "\x3b"); } public static function oowkueqscaoakmck(string $icyaoosaykeskiuu) : array { $ymkqyawksmqcgsei = []; $oqaacwamwqqwsmgc = []; $qiacwcmymioiqyia = "\57\x40\155\145\x64\x69\x61\x2e\x2a\x3f\133\x5e\173\x5d\x2b\134\x7b\50\133\134\163\x5c\123\x5d\x2b\77\134\175\51\x5c\x73\x2a\134\x7d\x7c\x40\153\x65\x79\146\x72\x61\x6d\145\x73\56\x2a\77\133\x5e\173\135\x2b\x5c\x7b\x28\133\x5c\x73\x5c\123\135\x2b\x3f\134\x7d\x29\134\x73\52\x5c\x7d\x7c\100\x73\165\160\160\x6f\162\x74\163\56\52\77\133\x5e\173\135\x2b\134\x7b\x28\x5b\x5c\x73\x5c\x53\x5d\x2b\x3f\134\175\51\x5c\x73\52\134\175\x7c\x40\146\x6f\x6e\x74\x2d\146\141\143\x65\56\52\77\133\136\173\x5d\x2b\x28\133\134\163\134\x53\x5d\53\77\x29\x5c\163\x2a\134\175\57"; preg_match_all($qiacwcmymioiqyia, $icyaoosaykeskiuu, $oqaacwamwqqwsmgc); $oqaacwamwqqwsmgc = reset($oqaacwamwqqwsmgc); foreach ($oqaacwamwqqwsmgc as $momcykaoccoymeig => $mwcwkymkagwwoyow) { $skueimwaqauscmoc = explode($mwcwkymkagwwoyow, $icyaoosaykeskiuu); $uusmaiomayssaecw = array_key_first($skueimwaqauscmoc); $ymkqyawksmqcgsei[] = ManipulateArray::unset($skueimwaqauscmoc, $uusmaiomayssaecw); $ymkqyawksmqcgsei[] = $mwcwkymkagwwoyow; if ($skueimwaqauscmoc && is_array($skueimwaqauscmoc)) { goto becceuuwokgoaewy; } $icyaoosaykeskiuu = ''; goto wyugqoowakyicyic; becceuuwokgoaewy: $icyaoosaykeskiuu = join('', $skueimwaqauscmoc); wyugqoowakyicyic: qgkiguggkyiycwow: } wwcwmkowgooocaem: $ymkqyawksmqcgsei[] = $icyaoosaykeskiuu; $ymkqyawksmqcgsei = array_filter(array_filter($ymkqyawksmqcgsei, "\164\x72\151\155")); $ycoqoegmwiiwyeuo = []; $umwmyskgiuekmemq = []; foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $sogksuscggsicmac = []; if (!preg_match($qiacwcmymioiqyia, $agywggmyywaimwuy)) { goto weouocwmwicayyiy; } $kmmsieagmcwqiako = substr($agywggmyywaimwuy, 0, strpos($agywggmyywaimwuy, "\x7b")); if (!(trim($kmmsieagmcwqiako) !== "\x40\155\x65\144\x69\x61\40\x70\162\x69\x6e\164")) { goto iuysqgmmgqiywssm; } $mckgwmgmgigaiuwg = substr($agywggmyywaimwuy, strpos($agywggmyywaimwuy, "\173") + 1); $mckgwmgmgigaiuwg = substr($mckgwmgmgigaiuwg, 0, -1); $sogksuscggsicmac = (array) explode("\x7d", $mckgwmgmgigaiuwg); $umwmyskgiuekmemq[][$kmmsieagmcwqiako] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); iuysqgmmgqiywssm: goto ggyoywwggggekycs; weouocwmwicayyiy: $sogksuscggsicmac = (array) explode("\175", $agywggmyywaimwuy); $umwmyskgiuekmemq[][''] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); ggyoywwggggekycs: if (!$sogksuscggsicmac) { goto gkkwmqoacciwomqs; } $ycoqoegmwiiwyeuo = array_merge($ycoqoegmwiiwyeuo, $sogksuscggsicmac); gkkwmqoacciwomqs: ugiqiewymimqecsu: } aeaciamekuqyieys: return $umwmyskgiuekmemq; } public static function musqiscwwwkyuosg(string $gmawcgiwcmsukeiu) : array { $gmawcgiwcmsukeiu = self::sqsemkikkiaaqeig($gmawcgiwcmsukeiu); $oammesyieqmwuwyi = (array) preg_split("\x2f\73\x28\x3f\x3d\x28\x5b\x5e\x5c\50\x5d\x2a\x5c\50\x5b\136\134\x28\x5d\52\x5c\x29\x29\52\x5b\136\x5c\x29\135\x2a\44\51\x28\77\75\x28\x5b\136\x5c\42\135\52\134\42\133\136\x5c\42\135\x2a\x5c\x22\x29\52\133\x5e\134\x22\x5d\x2a\44\51\50\x3f\75\50\x5b\136\x5c\47\x5d\52\134\47\x5b\x5e\x5c\x27\x5d\x2a\134\47\x29\x2a\133\136\x5c\47\135\x2a\x24\x29\57", $gmawcgiwcmsukeiu); return array_values($oammesyieqmwuwyi); } public static function eeewcumgoiuaygow(array $gmawcgiwcmsukeiu) : string { $ukgsssmgkskkuoow = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { if (!$oaukocmsckciqaok instanceof Property) { goto ocmagamuyawyiyka; } $ukgsssmgkskkuoow[] = trim($oaukocmsckciqaok->__toString(), "\73") . "\73"; ocmagamuyawyiyka: oycuaqewsskgkqci: } kucqcgeesiccuuia: return trim(implode("\x20", $ukgsssmgkskkuoow), "\x3b"); } public static function mysegoauqwiccoeo(array $acqqmqmcquukaqsc) : array { $mguygkocuoaoqqkg = []; foreach ($acqqmqmcquukaqsc as $umwqusowiqmyseom => $ssaikkeuusoagacm) { foreach (reset($ssaikkeuusoagacm) as $ekuqiqmikiicgoss) { $ekuqiqmikiicgoss = self::wsokikoeayomqico(key($ssaikkeuusoagacm), $ekuqiqmikiicgoss, $umwqusowiqmyseom); $mguygkocuoaoqqkg = array_merge($mguygkocuoaoqqkg, $ekuqiqmikiicgoss); sgiouaqukyycswqm: } syoeqaqkseguwmgy: iwgmywqocewwgoeo: } amqgiisymksuuuss: return $mguygkocuoaoqqkg; } public static function uosumyqkueiykgiu(string $iesegggmcccqyquo) { $iesegggmcccqyquo = self::ieckauqqqiksqksc($iesegggmcccqyquo); $acqqmqmcquukaqsc = self::oowkueqscaoakmck($iesegggmcccqyquo); return self::mysegoauqwiccoeo($acqqmqmcquukaqsc); } public static function wsokikoeayomqico(string $qsmqqqccagyuaiso, string $ekuqiqmikiicgoss, int $umwqusowiqmyseom) : array { $ekuqiqmikiicgoss = self::sqsemkikkiaaqeig($ekuqiqmikiicgoss); $ukgsssmgkskkuoow = explode("\173", $ekuqiqmikiicgoss); $wcwugqcsqsmmiuqi = 0; $gkywegkkgiaaqqom = 1; $acqqmqmcquukaqsc = []; if (!isset($ukgsssmgkskkuoow[$gkywegkkgiaaqqom])) { goto uugwmywmaqomeksa; } $sgksuwkwyimqgaii = (array) explode("\x2c", trim($ukgsssmgkskkuoow[$wcwugqcsqsmmiuqi])); $gmawcgiwcmsukeiu = self::musqiscwwwkyuosg($ukgsssmgkskkuoow[$gkywegkkgiaaqqom]); foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) { $yuumukkaswwoywya = trim($yuumukkaswwoywya); $gmawcgiwcmsukeiu = self::gowgwikayqgeqgca($gmawcgiwcmsukeiu); $acqqmqmcquukaqsc[] = new Rule($qsmqqqccagyuaiso, $yuumukkaswwoywya, $gmawcgiwcmsukeiu, $umwqusowiqmyseom); ucasigqmoiwaimkk: } gwkawguwsamuomuo: uugwmywmaqomeksa: return $acqqmqmcquukaqsc; } public static function gowgwikayqgeqgca(array $gmawcgiwcmsukeiu) : array { $mguygkocuoaoqqkg = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { $mksyucucyswaukig = self::gcamqqaucqewaucu($oaukocmsckciqaok); if (!$mksyucucyswaukig) { goto iquugwoswgkoiieg; } $mguygkocuoaoqqkg[] = $mksyucucyswaukig; iquugwoswgkoiieg: mmmqqoemusicwgqg: } wowmysuygugawmmu: return $mguygkocuoaoqqkg; } public static function gcamqqaucqewaucu(string $oaukocmsckciqaok) : ?Property { $mksyucucyswaukig = null; if (!(strpos($oaukocmsckciqaok, "\72") !== false)) { goto xogaycsaesgqeqig; } [$ymqmyyeuycgmigyo, $eqgoocgaqwqcimie] = array_map("\164\x72\x69\x6d", explode("\x3a", $oaukocmsckciqaok, 2)); $mksyucucyswaukig = new Property($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); xogaycsaesgqeqig: return $mksyucucyswaukig; } }
