<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65198726e209e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Exception; use FilesystemIterator; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateFile as BaseClass; class ManipulateFile extends BaseClass { public static function kmyyisssekummkcg() { $yckucuyiaykemqea = self::cmaecekuqkwmemms("\117\x50\x54\x49\x4d\111\132\101\124\111\x4f\x4e\x5f\103\x4f\x4e\106\x49\107\x5f\120\x41\124\x48"); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if (!($yckucuyiaykemqea && $iiaumsgauuyeqksw->exists($yckucuyiaykemqea))) { goto wgaqkacekoyiwggi; } $mcowwqgmkuemoumu = self::kiygcugekegoqauw($yckucuyiaykemqea); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!self::mecmkmogggamegic($igqsaukqcqscimok)) { goto yqeqouqemksasmqc; } $iiaumsgauuyeqksw->remove(self::scikcaaaiwcsqowm($igqsaukqcqscimok)); yqeqouqemksasmqc: ksoawacwkgasqgmk: } ekmogkwmcqsykgsq: wgaqkacekoyiwggi: } public static function cqciwowseqkmwcwg(?string $sqeykgyoooqysmca) : int { static $acymccsiqqqsmkyo = []; switch ($sqeykgyoooqysmca) { case "\x64\x69\162": case "\144\151\x72\163": case "\x66\157\x6c\144\145\x72": case "\x66\x6f\154\144\145\162\x73": $sqeykgyoooqysmca = "\144\x69\x72"; goto cscskwugoamcmqyu; case "\x66\151\x6c\145": case "\x66\x69\x6c\145\x73": $sqeykgyoooqysmca = "\146\151\154\x65"; goto cscskwugoamcmqyu; default: return 0755; } emioyucskiowqumg: cscskwugoamcmqyu: if (!isset($acymccsiqqqsmkyo[$sqeykgyoooqysmca])) { goto jkaemsuwyyoamwim; } return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; jkaemsuwyyoamwim: if ("\x64\151\x72" === $sqeykgyoooqysmca) { goto suwsiaeoumiwkiqg; } $qecuaowsssqskeqe = (int) self::cmaecekuqkwmemms("\x46\123\x5f\x43\x48\x4d\117\x44\x5f\106\111\114\x45", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qecuaowsssqskeqe > 0 ? $qecuaowsssqskeqe : fileperms(self::cmaecekuqkwmemms("\101\x42\123\x50\101\x54\110") . "\x69\x6e\x64\x65\x78\56\x70\x68\x70") & 0777 | 0644; goto yoauoocuckogmsuw; suwsiaeoumiwkiqg: $qkmeeoscasiwuega = (int) self::cmaecekuqkwmemms("\106\x53\x5f\x43\110\115\x4f\x44\x5f\x44\x49\x52", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qkmeeoscasiwuega > 0 ? $qkmeeoscasiwuega : fileperms(self::cmaecekuqkwmemms("\101\102\123\x50\101\124\110")) & 0777 | 0755; yoauoocuckogmsuw: return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; } public static function cgwcgscqeqauaagi($mkomwsiykqigmqca, $sekkmwqwqwcayiwg = false, $cwwowqyuwccuykom = false) : string { if (!self::ikeooymesgsuggoe($mkomwsiykqigmqca)) { goto amyaoueckysgmmas; } $mkomwsiykqigmqca = str_replace("\x2f", "\134", $mkomwsiykqigmqca); return $sekkmwqwqwcayiwg ? str_replace("\x5c", "\x5c\134", $mkomwsiykqigmqca) : $mkomwsiykqigmqca; amyaoueckysgmmas: if (!$sekkmwqwqwcayiwg) { goto koiyaaokigmamqyc; } return str_replace("\57", "\134\57", $mkomwsiykqigmqca); koiyaaokigmamqyc: if ($cwwowqyuwccuykom) { goto qiqegseqwywcmwoe; } return $mkomwsiykqigmqca; qiqegseqwywcmwoe: return DecoratorFile::cgwcgscqeqauaagi($mkomwsiykqigmqca); } public static function cseoaieqoukqgcay($miawkwqioaeasiig, array $gwyacgiwokuuwouo = [], $iiaumsgauuyeqksw = null) { if ($iiaumsgauuyeqksw) { goto yosyyiksyyscacus; } $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); yosyyiksyyscacus: $miawkwqioaeasiig = untrailingslashit($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\x6f\160\x74\x5f\142\x65\x66\157\162\x65\x5f\x72\x72\x6d\144\x69\x72"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); $eagqciqqakiuokus = $miawkwqioaeasiig . "\x2f\x2e\155\157\142\x69\154\x65\55\141\x63\x74\151\166\x65"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($eagqciqqakiuokus))) { goto kwcscewawgicomok; } $iiaumsgauuyeqksw->remove($eagqciqqakiuokus); kwcscewawgicomok: $kaggcuumyeuscqui = $miawkwqioaeasiig . "\57\56\x6e\x6f\55\167\145\142\x70"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($kaggcuumyeuscqui))) { goto kikkkocywiyuyuqw; } $iiaumsgauuyeqksw->remove($kaggcuumyeuscqui); kikkkocywiyuyuqw: if ($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig)) { goto aqeyqwuywqcmuoce; } $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); return; aqeyqwuywqcmuoce: $owouacqkcukeeomw = []; try { foreach (new FilesystemIterator($miawkwqioaeasiig) as $uwsgakoiqomwikmy) { $owouacqkcukeeomw[] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); qayiqaykkywcyisq: } aymoguycgmuggcik: } catch (Exception $iewosgggaueeyymg) { } if (!(!empty($gwyacgiwokuuwouo) && !empty($owouacqkcukeeomw))) { goto suscosoukqeyyqgs; } $yygmoeguaqyumuui = []; foreach ($gwyacgiwokuuwouo as $aqgogemocmauywas) { $meyiiwcswqmuggyg = preg_grep("\43\136{$aqgogemocmauywas}\44\x23", $owouacqkcukeeomw); $yygmoeguaqyumuui[] = reset($meyiiwcswqmuggyg); oaociaioauummsey: } akoweomooyuwamow: if (empty($yygmoeguaqyumuui)) { goto gcecamucuogcciig; } $yygmoeguaqyumuui = array_filter($yygmoeguaqyumuui); if (empty($yygmoeguaqyumuui)) { goto cueuscqkicwwicei; } $owouacqkcukeeomw = array_diff($owouacqkcukeeomw, $yygmoeguaqyumuui); cueuscqkicwwicei: gcecamucuogcciig: suscosoukqeyyqgs: foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { if (!$iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto iecqkqoiqimmisyw; } self::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); goto eogomkswkaqwyycm; iecqkqoiqimmisyw: $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); eogomkswkaqwyycm: eysuawiooiswaseq: } kiewcwsykccgocuc: $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\157\160\164\x5f\141\146\x74\x65\x72\x5f\162\162\x6d\x64\151\x72"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); } }
