<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e0ae98933fc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Exception; use FilesystemIterator; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateFile as BaseClass; class ManipulateFile extends BaseClass { public static function kmyyisssekummkcg() { $yckucuyiaykemqea = self::cmaecekuqkwmemms("\x4f\x50\x54\111\115\x49\132\x41\124\x49\117\x4e\x5f\103\117\x4e\106\111\107\x5f\120\x41\124\110"); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if (!($yckucuyiaykemqea && $iiaumsgauuyeqksw->exists($yckucuyiaykemqea))) { goto kgikoagqwkuocesg; } $mcowwqgmkuemoumu = self::kiygcugekegoqauw($yckucuyiaykemqea); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!self::mecmkmogggamegic($igqsaukqcqscimok)) { goto uqiekawkwcegsumy; } $iiaumsgauuyeqksw->remove(self::scikcaaaiwcsqowm($igqsaukqcqscimok)); uqiekawkwcegsumy: awaaowoqskgokwiy: } acmgueaoaaweiqqu: kgikoagqwkuocesg: } public static function cqciwowseqkmwcwg(?string $sqeykgyoooqysmca) : int { static $acymccsiqqqsmkyo = []; switch ($sqeykgyoooqysmca) { case "\144\x69\x72": case "\144\x69\162\x73": case "\146\157\x6c\144\x65\x72": case "\x66\x6f\154\144\145\162\x73": $sqeykgyoooqysmca = "\x64\x69\162"; goto skaayekywasksoug; case "\146\x69\x6c\145": case "\x66\151\x6c\145\x73": $sqeykgyoooqysmca = "\x66\x69\154\145"; goto skaayekywasksoug; default: return 0755; } gkoyqgogsukuowqi: skaayekywasksoug: if (!isset($acymccsiqqqsmkyo[$sqeykgyoooqysmca])) { goto sgikkoswwyesqomo; } return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; sgikkoswwyesqomo: if ("\x64\x69\162" === $sqeykgyoooqysmca) { goto aayysiegiyweiyuu; } $qecuaowsssqskeqe = (int) self::cmaecekuqkwmemms("\x46\123\137\103\110\115\117\x44\137\x46\111\x4c\x45", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qecuaowsssqskeqe > 0 ? $qecuaowsssqskeqe : fileperms(self::cmaecekuqkwmemms("\x41\102\123\120\x41\x54\110") . "\151\156\144\145\x78\56\x70\x68\160") & 0777 | 0644; goto cksoeiwawiygyiyg; aayysiegiyweiyuu: $qkmeeoscasiwuega = (int) self::cmaecekuqkwmemms("\106\x53\137\103\x48\x4d\117\x44\137\x44\x49\122", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qkmeeoscasiwuega > 0 ? $qkmeeoscasiwuega : fileperms(self::cmaecekuqkwmemms("\x41\102\123\x50\101\124\110")) & 0777 | 0755; cksoeiwawiygyiyg: return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; } public static function cgwcgscqeqauaagi($mkomwsiykqigmqca, $sekkmwqwqwcayiwg = false, $cwwowqyuwccuykom = false) : string { if (!self::ikeooymesgsuggoe($mkomwsiykqigmqca)) { goto cyqokqcacysioeyc; } $mkomwsiykqigmqca = str_replace("\x2f", "\134", $mkomwsiykqigmqca); return $sekkmwqwqwcayiwg ? str_replace("\134", "\x5c\134", $mkomwsiykqigmqca) : $mkomwsiykqigmqca; cyqokqcacysioeyc: if (!$sekkmwqwqwcayiwg) { goto akwwuuiykscgicuw; } return str_replace("\57", "\x5c\x2f", $mkomwsiykqigmqca); akwwuuiykscgicuw: if ($cwwowqyuwccuykom) { goto ueqsiwuwumoqgsck; } return $mkomwsiykqigmqca; ueqsiwuwumoqgsck: return DecoratorFile::cgwcgscqeqauaagi($mkomwsiykqigmqca); } public static function cseoaieqoukqgcay($miawkwqioaeasiig, array $gwyacgiwokuuwouo = [], $iiaumsgauuyeqksw = null) { if ($iiaumsgauuyeqksw) { goto iikgiaocummweiga; } $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); iikgiaocummweiga: $miawkwqioaeasiig = untrailingslashit($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\157\160\x74\x5f\142\x65\146\157\162\145\x5f\162\162\155\144\151\x72"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); $eagqciqqakiuokus = $miawkwqioaeasiig . "\x2f\x2e\155\x6f\x62\x69\154\145\55\x61\x63\x74\151\166\x65"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($eagqciqqakiuokus))) { goto gsusqquicmukegcs; } $iiaumsgauuyeqksw->remove($eagqciqqakiuokus); gsusqquicmukegcs: $kaggcuumyeuscqui = $miawkwqioaeasiig . "\x2f\x2e\x6e\x6f\55\x77\145\142\x70"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($kaggcuumyeuscqui))) { goto wcsysckgigeykkwy; } $iiaumsgauuyeqksw->remove($kaggcuumyeuscqui); wcsysckgigeykkwy: if ($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig)) { goto scgmwokeuqwiekkk; } $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); return; scgmwokeuqwiekkk: $owouacqkcukeeomw = []; try { foreach (new FilesystemIterator($miawkwqioaeasiig) as $uwsgakoiqomwikmy) { $owouacqkcukeeomw[] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); gysmmooawoeggaow: } ceusyscosamyaiws: } catch (Exception $iewosgggaueeyymg) { } if (!(!empty($gwyacgiwokuuwouo) && !empty($owouacqkcukeeomw))) { goto qcweoyigoaeacsow; } $yygmoeguaqyumuui = []; foreach ($gwyacgiwokuuwouo as $aqgogemocmauywas) { $meyiiwcswqmuggyg = preg_grep("\43\x5e{$aqgogemocmauywas}\44\43", $owouacqkcukeeomw); $yygmoeguaqyumuui[] = reset($meyiiwcswqmuggyg); acsigwcaesyyoiie: } iyikuwuweqigiuey: if (empty($yygmoeguaqyumuui)) { goto wycmcqaauqkgegau; } $yygmoeguaqyumuui = array_filter($yygmoeguaqyumuui); if (empty($yygmoeguaqyumuui)) { goto aqaaqeucgoegeeuk; } $owouacqkcukeeomw = array_diff($owouacqkcukeeomw, $yygmoeguaqyumuui); aqaaqeucgoegeeuk: wycmcqaauqkgegau: qcweoyigoaeacsow: foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { if (!$iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto gkwuewqmqeswqukg; } self::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); goto sagemooicmgceiug; gkwuewqmqeswqukg: $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); sagemooicmgceiug: wcekgciqeggiiwgk: } iyceygqsmokgmams: $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\157\x70\164\x5f\x61\x66\x74\x65\162\x5f\162\x72\155\144\151\162"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); } }
