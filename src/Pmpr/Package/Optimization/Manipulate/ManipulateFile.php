<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d55de5ebbe6             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Manipulate; use Exception; use FilesystemIterator; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateFile as BaseClass; class ManipulateFile extends BaseClass { public static function kmyyisssekummkcg() { $yckucuyiaykemqea = self::cmaecekuqkwmemms("\117\120\x54\111\x4d\x49\132\101\x54\x49\x4f\x4e\x5f\x43\117\x4e\106\111\x47\137\x50\x41\x54\110"); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if (!($yckucuyiaykemqea && $iiaumsgauuyeqksw->exists($yckucuyiaykemqea))) { goto uegouoiuyoqkcscg; } $mcowwqgmkuemoumu = self::kiygcugekegoqauw($yckucuyiaykemqea); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!self::mecmkmogggamegic($igqsaukqcqscimok)) { goto mggeqkcksyaymcsa; } $iiaumsgauuyeqksw->remove(self::scikcaaaiwcsqowm($igqsaukqcqscimok)); mggeqkcksyaymcsa: isgwkwacoyimiauk: } cscusseysqygsoiy: uegouoiuyoqkcscg: } public static function cqciwowseqkmwcwg(?string $sqeykgyoooqysmca) : int { static $acymccsiqqqsmkyo = []; switch ($sqeykgyoooqysmca) { case "\x64\151\x72": case "\144\x69\x72\x73": case "\x66\157\x6c\x64\145\x72": case "\146\157\x6c\144\145\162\163": $sqeykgyoooqysmca = "\x64\x69\162"; goto cgyakcqgugqgkqiw; case "\x66\151\x6c\145": case "\x66\151\154\x65\163": $sqeykgyoooqysmca = "\146\151\154\x65"; goto cgyakcqgugqgkqiw; default: return 0755; } eeyyskqsmquyquqw: cgyakcqgugqgkqiw: if (!isset($acymccsiqqqsmkyo[$sqeykgyoooqysmca])) { goto ewscugeuicukkycc; } return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; ewscugeuicukkycc: if ("\144\x69\162" === $sqeykgyoooqysmca) { goto kqswcsysqawkcgye; } $qecuaowsssqskeqe = (int) self::cmaecekuqkwmemms("\106\123\x5f\x43\110\115\117\104\137\x46\x49\x4c\105", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qecuaowsssqskeqe > 0 ? $qecuaowsssqskeqe : fileperms(self::cmaecekuqkwmemms("\x41\x42\123\x50\101\124\x48") . "\151\156\144\x65\x78\56\160\x68\x70") & 0777 | 0644; goto wusciwkkckmqigms; kqswcsysqawkcgye: $qkmeeoscasiwuega = (int) self::cmaecekuqkwmemms("\x46\x53\x5f\103\x48\115\x4f\x44\x5f\104\111\122", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qkmeeoscasiwuega > 0 ? $qkmeeoscasiwuega : fileperms(self::cmaecekuqkwmemms("\x41\102\123\120\101\124\x48")) & 0777 | 0755; wusciwkkckmqigms: return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; } public static function cgwcgscqeqauaagi($mkomwsiykqigmqca, $sekkmwqwqwcayiwg = false, $cwwowqyuwccuykom = false) : string { if (!self::ikeooymesgsuggoe($mkomwsiykqigmqca)) { goto iiiccouaaqsyikae; } $mkomwsiykqigmqca = str_replace("\x2f", "\134", $mkomwsiykqigmqca); return $sekkmwqwqwcayiwg ? str_replace("\134", "\x5c\x5c", $mkomwsiykqigmqca) : $mkomwsiykqigmqca; iiiccouaaqsyikae: if (!$sekkmwqwqwcayiwg) { goto ukkcmocamwgiqayu; } return str_replace("\57", "\x5c\x2f", $mkomwsiykqigmqca); ukkcmocamwgiqayu: if ($cwwowqyuwccuykom) { goto mwysseaekcsiesmm; } return $mkomwsiykqigmqca; mwysseaekcsiesmm: return DecoratorFile::cgwcgscqeqauaagi($mkomwsiykqigmqca); } public static function cseoaieqoukqgcay($miawkwqioaeasiig, array $gwyacgiwokuuwouo = [], $iiaumsgauuyeqksw = null) { if ($iiaumsgauuyeqksw) { goto amgsueumgaguceaa; } $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); amgsueumgaguceaa: $miawkwqioaeasiig = untrailingslashit($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\157\x70\164\137\142\145\146\x6f\162\x65\x5f\x72\x72\155\144\151\x72"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); $eagqciqqakiuokus = $miawkwqioaeasiig . "\57\x2e\x6d\x6f\x62\151\154\145\55\141\143\164\151\166\145"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($eagqciqqakiuokus))) { goto gygwewcqsmwqismo; } $iiaumsgauuyeqksw->remove($eagqciqqakiuokus); gygwewcqsmwqismo: $kaggcuumyeuscqui = $miawkwqioaeasiig . "\x2f\x2e\156\157\x2d\167\x65\x62\160"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($kaggcuumyeuscqui))) { goto uougwgeyiokewkkm; } $iiaumsgauuyeqksw->remove($kaggcuumyeuscqui); uougwgeyiokewkkm: if ($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig)) { goto gommacygsykyussk; } $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); return; gommacygsykyussk: $owouacqkcukeeomw = []; try { foreach (new FilesystemIterator($miawkwqioaeasiig) as $uwsgakoiqomwikmy) { $owouacqkcukeeomw[] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); ucqmumuygcywwqma: } ukqocwewouckikso: } catch (Exception $iewosgggaueeyymg) { } if (!(!empty($gwyacgiwokuuwouo) && !empty($owouacqkcukeeomw))) { goto uqokiksoqcwwqgio; } $yygmoeguaqyumuui = []; foreach ($gwyacgiwokuuwouo as $aqgogemocmauywas) { $meyiiwcswqmuggyg = preg_grep("\x23\136{$aqgogemocmauywas}\x24\x23", $owouacqkcukeeomw); $yygmoeguaqyumuui[] = reset($meyiiwcswqmuggyg); uimeeckqksqeekqq: } uykousayyomcaeaa: if (empty($yygmoeguaqyumuui)) { goto kocqqoyymosmuksu; } $yygmoeguaqyumuui = array_filter($yygmoeguaqyumuui); if (empty($yygmoeguaqyumuui)) { goto iuuuususuuuaieem; } $owouacqkcukeeomw = array_diff($owouacqkcukeeomw, $yygmoeguaqyumuui); iuuuususuuuaieem: kocqqoyymosmuksu: uqokiksoqcwwqgio: foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { if (!$iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto yiowgigkkwsoqcci; } self::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); goto ieqesiiageaauiuw; yiowgigkkwsoqcci: $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); ieqesiiageaauiuw: sioekkmekwygemyc: } qukocuwgakemmyga: $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\157\x70\164\x5f\x61\x66\x74\x65\162\x5f\162\162\155\144\x69\x72"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); } }
