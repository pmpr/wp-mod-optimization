<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6327197fdd72f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Exception; use FilesystemIterator; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateFile as BaseClass; class ManipulateFile extends BaseClass { public static function kmyyisssekummkcg() { $yckucuyiaykemqea = self::cmaecekuqkwmemms("\117\x50\x54\111\x4d\x49\132\x41\124\x49\x4f\x4e\x5f\x43\x4f\116\106\x49\107\137\x50\x41\124\110"); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if (!($yckucuyiaykemqea && $iiaumsgauuyeqksw->exists($yckucuyiaykemqea))) { goto qoameasiqwaqgmca; } $mcowwqgmkuemoumu = self::kiygcugekegoqauw($yckucuyiaykemqea); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!self::mecmkmogggamegic($igqsaukqcqscimok)) { goto uugekiumuwemyuyc; } $iiaumsgauuyeqksw->remove(self::scikcaaaiwcsqowm($igqsaukqcqscimok)); uugekiumuwemyuyc: amkcomscieegkygc: } iqukigoyiqgcggue: qoameasiqwaqgmca: } public static function cqciwowseqkmwcwg(?string $sqeykgyoooqysmca) : int { static $acymccsiqqqsmkyo = []; switch ($sqeykgyoooqysmca) { case "\144\x69\x72": case "\144\x69\162\x73": case "\x66\x6f\x6c\144\145\x72": case "\x66\157\154\x64\x65\162\x73": $sqeykgyoooqysmca = "\144\x69\162"; goto osoqssymqqoqcuky; case "\x66\x69\x6c\145": case "\x66\151\154\x65\x73": $sqeykgyoooqysmca = "\146\x69\154\145"; goto osoqssymqqoqcuky; default: return 0755; } qcywwqceiqogcoyo: osoqssymqqoqcuky: if (!isset($acymccsiqqqsmkyo[$sqeykgyoooqysmca])) { goto giiucsyqgcooaima; } return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; giiucsyqgcooaima: if ("\144\x69\162" === $sqeykgyoooqysmca) { goto awikkaqmmuqkukma; } $qecuaowsssqskeqe = (int) self::cmaecekuqkwmemms("\x46\x53\137\103\x48\x4d\x4f\x44\137\106\x49\114\x45", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qecuaowsssqskeqe > 0 ? $qecuaowsssqskeqe : fileperms(self::cmaecekuqkwmemms("\101\x42\x53\x50\101\x54\x48") . "\x69\x6e\x64\x65\x78\x2e\x70\150\x70") & 0777 | 0644; goto uckeuuaqimqamuyc; awikkaqmmuqkukma: $qkmeeoscasiwuega = (int) self::cmaecekuqkwmemms("\x46\x53\x5f\103\110\115\x4f\x44\x5f\x44\x49\x52", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qkmeeoscasiwuega > 0 ? $qkmeeoscasiwuega : fileperms(self::cmaecekuqkwmemms("\101\102\x53\120\x41\124\110")) & 0777 | 0755; uckeuuaqimqamuyc: return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; } public static function cgwcgscqeqauaagi($mkomwsiykqigmqca, $sekkmwqwqwcayiwg = false, $cwwowqyuwccuykom = false) : string { if (!self::ikeooymesgsuggoe($mkomwsiykqigmqca)) { goto mieeugiewckceagc; } $mkomwsiykqigmqca = str_replace("\57", "\x5c", $mkomwsiykqigmqca); return $sekkmwqwqwcayiwg ? str_replace("\134", "\134\134", $mkomwsiykqigmqca) : $mkomwsiykqigmqca; mieeugiewckceagc: if (!$sekkmwqwqwcayiwg) { goto uqkqmseoeemyaqck; } return str_replace("\x2f", "\134\x2f", $mkomwsiykqigmqca); uqkqmseoeemyaqck: if ($cwwowqyuwccuykom) { goto cceyoumkiicaguio; } return $mkomwsiykqigmqca; cceyoumkiicaguio: return DecoratorFile::cgwcgscqeqauaagi($mkomwsiykqigmqca); } public static function cseoaieqoukqgcay($miawkwqioaeasiig, array $gwyacgiwokuuwouo = [], $iiaumsgauuyeqksw = null) { if ($iiaumsgauuyeqksw) { goto yayykakkyeoieicm; } $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); yayykakkyeoieicm: $miawkwqioaeasiig = untrailingslashit($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\157\160\164\x5f\142\x65\146\x6f\x72\145\137\162\x72\155\x64\x69\x72"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); $eagqciqqakiuokus = $miawkwqioaeasiig . "\x2f\x2e\x6d\x6f\x62\151\x6c\x65\55\141\x63\164\151\x76\145"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($eagqciqqakiuokus))) { goto yuiouamaogkkqmck; } $iiaumsgauuyeqksw->remove($eagqciqqakiuokus); yuiouamaogkkqmck: $kaggcuumyeuscqui = $miawkwqioaeasiig . "\x2f\56\x6e\x6f\x2d\x77\x65\x62\x70"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($kaggcuumyeuscqui))) { goto mmwqwowqcaseyyki; } $iiaumsgauuyeqksw->remove($kaggcuumyeuscqui); mmwqwowqcaseyyki: if ($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig)) { goto wsckacayikksiswo; } $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); return; wsckacayikksiswo: $owouacqkcukeeomw = []; try { foreach (new FilesystemIterator($miawkwqioaeasiig) as $uwsgakoiqomwikmy) { $owouacqkcukeeomw[] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); ngagwiymmmycgscu: } qiawociayswicugw: } catch (Exception $iewosgggaueeyymg) { } if (!(!empty($gwyacgiwokuuwouo) && !empty($owouacqkcukeeomw))) { goto cooeoemccqiyewks; } $yygmoeguaqyumuui = []; foreach ($gwyacgiwokuuwouo as $aqgogemocmauywas) { $meyiiwcswqmuggyg = preg_grep("\x23\136{$aqgogemocmauywas}\x24\43", $owouacqkcukeeomw); $yygmoeguaqyumuui[] = reset($meyiiwcswqmuggyg); kkacggiosquqagew: } qimomesqamyyicmo: if (empty($yygmoeguaqyumuui)) { goto aescssauecumgwso; } $yygmoeguaqyumuui = array_filter($yygmoeguaqyumuui); if (empty($yygmoeguaqyumuui)) { goto augqweqsqioesmim; } $owouacqkcukeeomw = array_diff($owouacqkcukeeomw, $yygmoeguaqyumuui); augqweqsqioesmim: aescssauecumgwso: cooeoemccqiyewks: foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { if (!$iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto qkwckeqowgaokkuy; } self::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); goto kqkymieyyqaoeymw; qkwckeqowgaokkuy: $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); kqkymieyyqaoeymw: ssesmiwwmsayksum: } qcceyyqiuiqcyqqm: $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\157\160\x74\137\x61\x66\164\145\162\137\x72\x72\155\144\x69\x72"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); } }
