<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             629654a236839             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical\CSS; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Property; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Rule; use Pmpr\Module\Optimization\Asset\Critical\Manipulate as BaseClass; class Manipulate extends BaseClass { public static function uigyooscomiegggk(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (!Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto syoeqaqkseguwmgy; } $fkgqmwkusywysaus = false; syoeqaqkseguwmgy: return $fkgqmwkusywysaus; } public static function aaoqaaaoaewyokkw(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto sgiouaqukyycswqm; } $fkgqmwkusywysaus = false; sgiouaqukyycswqm: return $fkgqmwkusywysaus; } public static function guugkagukymokgas(?string $mkomwsiykqigmqca = null) : string { return parent::guugkagukymokgas("\57\x63\x73\163"); } public static function csyeqcysyissgowm(?string $migiiksoiymissge = null, ?string $mkomwsiykqigmqca = null) : ?string { return parent::csyeqcysyissgowm($migiiksoiymissge, "\x2f\143\163\163"); } public static function ogmguwgoqkqkkisa($iesegggmcccqyquo) { preg_match_all("\57\100\x63\x68\x61\x72\163\x65\x74\x20\42\x5b\136\42\135\x2b\53\x22\x3b\x2f", $iesegggmcccqyquo, $meyiiwcswqmuggyg); if (!($guuwoyaeoeeaauug = reset($meyiiwcswqmuggyg))) { goto gwkawguwsamuomuo; } $guuwoyaeoeeaauug = reset($guuwoyaeoeeaauug); gwkawguwsamuomuo: return $guuwoyaeoeeaauug; } private static function ieckauqqqiksqksc(string $iesegggmcccqyquo) : string { $iesegggmcccqyquo = preg_replace("\x2f\x40\143\150\x61\x72\163\145\164\x20\x22\133\x5e\x22\x5d\53\x2b\x22\73\57", '', $iesegggmcccqyquo); return self::sqsemkikkiaaqeig($iesegggmcccqyquo); } private static function sqsemkikkiaaqeig(string $sociqikgoyemqaac) : string { $sociqikgoyemqaac = str_replace(["\15", "\12"], '', $sociqikgoyemqaac); $sociqikgoyemqaac = str_replace(["\x9"], "\x20", $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\x7c\x2f\134\x2a\56\x2a\x3f\134\52\57\x7c", '', $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\x2f\x5c\x73\x5c\163\53\x2f", "\40", $sociqikgoyemqaac); $sociqikgoyemqaac = trim($sociqikgoyemqaac); return rtrim($sociqikgoyemqaac, "\x3b"); } public static function oowkueqscaoakmck(string $icyaoosaykeskiuu) : array { $ymkqyawksmqcgsei = []; $oqaacwamwqqwsmgc = []; $qiacwcmymioiqyia = "\x2f\100\155\145\x64\151\141\x2e\52\x3f\x5b\136\x7b\x5d\53\x5c\x7b\50\x5b\134\x73\134\x53\135\x2b\x3f\134\x7d\x29\134\x73\x2a\x5c\x7d\x7c\100\x6b\x65\x79\146\x72\141\155\x65\x73\x2e\52\77\133\136\173\135\x2b\x5c\x7b\x28\x5b\134\163\134\123\x5d\53\x3f\x5c\175\x29\134\163\52\134\175\174\100\x73\x75\160\x70\157\x72\x74\x73\56\x2a\77\x5b\136\173\135\53\134\173\x28\133\134\163\134\123\x5d\53\77\x5c\175\51\134\x73\x2a\x5c\x7d\x7c\100\x66\x6f\x6e\164\55\x66\x61\x63\x65\x2e\52\77\133\136\173\135\x2b\x28\x5b\x5c\x73\x5c\x53\x5d\53\77\51\x5c\x73\52\x5c\x7d\57"; preg_match_all($qiacwcmymioiqyia, $icyaoosaykeskiuu, $oqaacwamwqqwsmgc); $oqaacwamwqqwsmgc = reset($oqaacwamwqqwsmgc); foreach ($oqaacwamwqqwsmgc as $momcykaoccoymeig => $mwcwkymkagwwoyow) { $skueimwaqauscmoc = explode($mwcwkymkagwwoyow, $icyaoosaykeskiuu); $uusmaiomayssaecw = array_key_first($skueimwaqauscmoc); $ymkqyawksmqcgsei[] = ManipulateArray::unset($skueimwaqauscmoc, $uusmaiomayssaecw); $ymkqyawksmqcgsei[] = $mwcwkymkagwwoyow; if ($skueimwaqauscmoc && is_array($skueimwaqauscmoc)) { goto wowmysuygugawmmu; } $icyaoosaykeskiuu = ''; goto mmmqqoemusicwgqg; wowmysuygugawmmu: $icyaoosaykeskiuu = join('', $skueimwaqauscmoc); mmmqqoemusicwgqg: uugwmywmaqomeksa: } ucasigqmoiwaimkk: $ymkqyawksmqcgsei[] = $icyaoosaykeskiuu; $ymkqyawksmqcgsei = array_filter(array_filter($ymkqyawksmqcgsei, "\164\162\x69\x6d")); $ycoqoegmwiiwyeuo = []; $umwmyskgiuekmemq = []; foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $sogksuscggsicmac = []; if (!preg_match($qiacwcmymioiqyia, $agywggmyywaimwuy)) { goto syiyemqigyugagks; } $kmmsieagmcwqiako = substr($agywggmyywaimwuy, 0, strpos($agywggmyywaimwuy, "\173")); if (!(trim($kmmsieagmcwqiako) !== "\x40\x6d\x65\x64\x69\141\x20\160\x72\151\x6e\164")) { goto gsiaskgsukseumig; } $mckgwmgmgigaiuwg = substr($agywggmyywaimwuy, strpos($agywggmyywaimwuy, "\173") + 1); $mckgwmgmgigaiuwg = substr($mckgwmgmgigaiuwg, 0, -1); $sogksuscggsicmac = (array) explode("\x7d", $mckgwmgmgigaiuwg); $umwmyskgiuekmemq[][$kmmsieagmcwqiako] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); gsiaskgsukseumig: goto woqkgwmkmqsuceuy; syiyemqigyugagks: $sogksuscggsicmac = (array) explode("\x7d", $agywggmyywaimwuy); $umwmyskgiuekmemq[][''] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); woqkgwmkmqsuceuy: if (!$sogksuscggsicmac) { goto imwiyqcekcykscui; } $ycoqoegmwiiwyeuo = array_merge($ycoqoegmwiiwyeuo, $sogksuscggsicmac); imwiyqcekcykscui: xogaycsaesgqeqig: } iquugwoswgkoiieg: return $umwmyskgiuekmemq; } public static function musqiscwwwkyuosg(string $gmawcgiwcmsukeiu) : array { $gmawcgiwcmsukeiu = self::sqsemkikkiaaqeig($gmawcgiwcmsukeiu); $oammesyieqmwuwyi = (array) preg_split("\x2f\x3b\x28\77\x3d\50\133\136\x5c\x28\135\52\134\x28\x5b\136\x5c\x28\x5d\52\x5c\x29\51\x2a\x5b\x5e\x5c\51\135\x2a\x24\x29\x28\x3f\x3d\x28\x5b\136\x5c\42\x5d\52\134\x22\x5b\x5e\134\42\135\x2a\x5c\42\51\x2a\133\x5e\x5c\x22\135\52\x24\51\50\x3f\x3d\x28\133\x5e\134\47\x5d\x2a\x5c\47\133\x5e\134\x27\x5d\x2a\134\x27\51\x2a\x5b\x5e\134\x27\135\x2a\x24\x29\x2f", $gmawcgiwcmsukeiu); return array_values($oammesyieqmwuwyi); } public static function eeewcumgoiuaygow(array $gmawcgiwcmsukeiu) : string { $ukgsssmgkskkuoow = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { if (!$oaukocmsckciqaok instanceof Property) { goto geasgywiogoeamek; } $ukgsssmgkskkuoow[] = trim($oaukocmsckciqaok->__toString(), "\73") . "\x3b"; geasgywiogoeamek: omsmaougqkqigogw: } umemmgiwimkymaya: return trim(implode("\40", $ukgsssmgkskkuoow), "\x3b"); } public static function mysegoauqwiccoeo(array $acqqmqmcquukaqsc) : array { $mguygkocuoaoqqkg = []; foreach ($acqqmqmcquukaqsc as $umwqusowiqmyseom => $ssaikkeuusoagacm) { foreach (reset($ssaikkeuusoagacm) as $ekuqiqmikiicgoss) { $ekuqiqmikiicgoss = self::wsokikoeayomqico(key($ssaikkeuusoagacm), $ekuqiqmikiicgoss, $umwqusowiqmyseom); $mguygkocuoaoqqkg = array_merge($mguygkocuoaoqqkg, $ekuqiqmikiicgoss); ucaoyoamaycsiacq: } mccimkgwkkamsime: guqmgiqaaowaauyo: } qweyymyuuqwcmkqg: return $mguygkocuoaoqqkg; } public static function uosumyqkueiykgiu(string $iesegggmcccqyquo) { $iesegggmcccqyquo = self::ieckauqqqiksqksc($iesegggmcccqyquo); $acqqmqmcquukaqsc = self::oowkueqscaoakmck($iesegggmcccqyquo); return self::mysegoauqwiccoeo($acqqmqmcquukaqsc); } public static function wsokikoeayomqico(string $qsmqqqccagyuaiso, string $ekuqiqmikiicgoss, int $umwqusowiqmyseom) : array { $ekuqiqmikiicgoss = self::sqsemkikkiaaqeig($ekuqiqmikiicgoss); $ukgsssmgkskkuoow = explode("\x7b", $ekuqiqmikiicgoss); $wcwugqcsqsmmiuqi = 0; $gkywegkkgiaaqqom = 1; $acqqmqmcquukaqsc = []; if (!isset($ukgsssmgkskkuoow[$gkywegkkgiaaqqom])) { goto iaoyeugekskmewgs; } $sgksuwkwyimqgaii = (array) explode("\x2c", trim($ukgsssmgkskkuoow[$wcwugqcsqsmmiuqi])); $gmawcgiwcmsukeiu = self::musqiscwwwkyuosg($ukgsssmgkskkuoow[$gkywegkkgiaaqqom]); foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) { $yuumukkaswwoywya = trim($yuumukkaswwoywya); $gmawcgiwcmsukeiu = self::gowgwikayqgeqgca($gmawcgiwcmsukeiu); $acqqmqmcquukaqsc[] = new Rule($qsmqqqccagyuaiso, $yuumukkaswwoywya, $gmawcgiwcmsukeiu, $umwqusowiqmyseom); oasisywuwssumsok: } iuyagqakcieasiua: iaoyeugekskmewgs: return $acqqmqmcquukaqsc; } public static function gowgwikayqgeqgca(array $gmawcgiwcmsukeiu) : array { $mguygkocuoaoqqkg = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { $mksyucucyswaukig = self::gcamqqaucqewaucu($oaukocmsckciqaok); if (!$mksyucucyswaukig) { goto eciksmgaqikwegwq; } $mguygkocuoaoqqkg[] = $mksyucucyswaukig; eciksmgaqikwegwq: okagauksoqkoqygi: } iokemmkgmcaksiqu: return $mguygkocuoaoqqkg; } public static function gcamqqaucqewaucu(string $oaukocmsckciqaok) : ?Property { $mksyucucyswaukig = null; if (!(strpos($oaukocmsckciqaok, "\x3a") !== false)) { goto kieyoaoawqacqamy; } [$ymqmyyeuycgmigyo, $eqgoocgaqwqcimie] = array_map("\164\162\x69\x6d", explode("\72", $oaukocmsckciqaok, 2)); $mksyucucyswaukig = new Property($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); kieyoaoawqacqamy: return $mksyucucyswaukig; } }
