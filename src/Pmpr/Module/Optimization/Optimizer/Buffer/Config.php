<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d3161a77b51             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto skkamseieeusycye; } return; skkamseieeusycye: if (!(!isset($ywmkwiwkosakssii["\163\x65\x72\166\x65\x72"]) && !empty($_SERVER) && is_array($_SERVER))) { goto cgiscsqwwgqqaeqi; } $ywmkwiwkosakssii["\163\145\x72\x76\145\x72"] = $_SERVER; cgiscsqwwgqqaeqi: $this->path = rtrim($ywmkwiwkosakssii["\160\141\164\150"], "\57") . "\57"; $this->server = !empty($ywmkwiwkosakssii["\163\x65\x72\x76\145\x72"]) && is_array($ywmkwiwkosakssii["\x73\145\x72\166\x65\162"]) ? $ywmkwiwkosakssii["\x73\145\162\x76\145\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto syiqkaasoueowwui; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; syiqkaasoueowwui: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto giaacoqqqsekcayy; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; giaacoqqqsekcayy: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ewymsmkkiksgwysk; } return $this->eecucukcqkqysiau(__FUNCTION__); ewymsmkkiksgwysk: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\x75\143\143\145\x73\163"]) || !$oqwuasygwcckkios["\x73\165\x63\x63\145\x73\163"])) { goto cmegwsegsosyqcai; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cmegwsegsosyqcai: if (!file_exists($oqwuasygwcckkios["\160\141\x74\150"])) { goto wmywuusgukmmaams; } include $oqwuasygwcckkios["\x70\141\164\150"]; wmywuusgukmmaams: $uiewakwqscemywuo = ["\144\x65\x76\x5f\155\157\x64\145" => 0, "\x64\145\142\x75\x67\x5f\155\157\144\x65" => 1, "\143\x61\143\x68\145\137\x77\145\142\160" => 0, "\x67\172\151\160\137\145\x6e\141\x62\x6c\x65" => 1, "\143\157\x6f\153\151\145\x5f\150\141\x73\150" => '', "\155\157\x62\151\154\x65\137\x63\x61\143\x68\145" => 1, "\143\x61\143\x68\x65\137\x65\x6e\x61\x62\x6c\x65" => 1, "\151\x67\156\x6f\x72\x65\144\x5f\165\x72\154\163" => [], "\162\145\x6a\145\143\164\137\x63\157\157\153\151\145\163" => '', "\163\145\143\162\145\164\x5f\x63\x61\143\150\145\x5f\153\145\171" => '', "\154\x6f\x67\x67\145\144\137\x69\156\137\x63\157\x6f\x6b\151\145" => '', "\x63\157\x6d\155\157\x6e\x5f\143\x61\143\x68\145\x5f\x6c\157\x67\x67\x65\x64\x5f\165\163\x65\x72\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto egyyiccaeeiooaua; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; egyyiccaeeiooaua: ooeausyowguqicuo: } gkyawqqcmigqgaiq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto scisgsyemmsekgos; } return $this->eecucukcqkqysiau(__FUNCTION__); scisgsyemmsekgos: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\124\124\x50\137\110\117\x53\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\x3a\134\x64\53\44\57", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\x2e")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cewmoqyysgsmuiya; } return $this->eecucukcqkqysiau(__FUNCTION__); cewmoqyysgsmuiya: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\x70\150\x70"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto ueigkucgaucgeimc; } $mkomwsiykqigmqca = str_replace("\x5c", "\x2f", strtok($this->iuocyymeygwuweag("\122\x45\121\x55\105\x53\124\137\125\122\111", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\x7c\x28\x3f\x3c\75\x2e\51\57\x2b\174", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\62\x46", preg_replace("\57\136\x28\77\72\45\62\106\51\x2a\x28\56\52\x3f\x29\50\77\72\x25\62\106\51\52\x24\x2f", "\x24\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\x70\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\x68\x70"), $yykkewcosaecgqyg)) { goto wgewmqieuamsoayy; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\150\160"), $yykkewcosaecgqyg))) { goto ugqaaewwmkocwwgy; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\x63\x65\163\163" => true, "\160\x61\x74\x68" => $oqwuasygwcckkios]); ugqaaewwmkocwwgy: goto kqgcyoscsusgoaqi; wgewmqieuamsoayy: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\x70\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\143\145\x73\x73" => true, "\160\141\x74\150" => $oqwuasygwcckkios]); kqgcyoscsusgoaqi: $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; omqiayeucoioqoao: } igooksugieceoege: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\x63\x65\x73\x73" => false, "\160\x61\x74\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\x2e\160\150\160"]); goto sggawugoykqcmsug; ueigkucgaucgeimc: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\143\145\163\x73" => true, "\160\141\x74\x68" => $oqwuasygwcckkios]); sggawugoykqcmsug: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\x65\152\145\143\x74\x5f\x63\157\157\153\x69\145\x73"); if (!$osqkgokmuiasuukg) { goto wkeuuycukmuqiaom; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; wkeuuycukmuqiaom: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\x69\147\x6e\157\162\x65\144\137\x75\x72\x6c\163"))) { goto wakmayaoqoskekqy; } $iqisissicwwuksyi = "\43{$iqisissicwwuksyi}\x23"; wakmayaoqoskekqy: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\141\x63\x68\x65\x5f\155\141\156\144\141\164\x6f\162\x79\x5f\x63\157\157\153\x69\x65\x73") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto qmuwoecuacmkwgem; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; qmuwoecuacmkwgem: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\144\145\142\165\x67\137\155\157\144\x65"); } }
