<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b73dc7163             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if ($this->amqagusacuuuaswg()) { return; } if (!isset($ywmkwiwkosakssii["\163\x65\x72\x76\x65\x72"]) && !empty($_SERVER) && is_array($_SERVER)) { $ywmkwiwkosakssii["\163\145\x72\166\x65\x72"] = $_SERVER; } $this->path = rtrim($ywmkwiwkosakssii["\160\x61\x74\x68"], "\57") . "\57"; $this->server = !empty($ywmkwiwkosakssii["\163\x65\162\x76\x65\x72"]) && is_array($ywmkwiwkosakssii["\x73\x65\x72\166\x65\x72"]) ? $ywmkwiwkosakssii["\x73\145\x72\166\145\162"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; } return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; } return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!isset($oqwuasygwcckkios["\x73\165\143\x63\145\x73\x73"]) || !$oqwuasygwcckkios["\163\165\x63\x63\145\x73\x73"]) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } if (file_exists($oqwuasygwcckkios["\x70\141\164\x68"])) { include $oqwuasygwcckkios["\x70\x61\164\150"]; } $uiewakwqscemywuo = ["\144\145\x76\x5f\155\x6f\x64\x65" => 0, "\144\145\x62\x75\x67\x5f\x6d\157\144\x65" => 1, "\x63\141\143\x68\x65\x5f\167\145\142\160" => 0, "\147\x7a\x69\x70\137\145\x6e\x61\x62\154\x65" => 1, "\x63\157\157\x6b\151\145\x5f\x68\x61\x73\x68" => '', "\155\157\142\151\x6c\145\x5f\143\141\x63\x68\145" => 1, "\x63\x61\143\150\145\137\145\156\x61\x62\x6c\145" => 1, "\x69\x67\156\x6f\x72\x65\x64\x5f\165\162\x6c\163" => [], "\162\x65\x6a\145\143\x74\137\x63\x6f\157\153\151\145\x73" => '', "\x73\x65\x63\162\x65\164\x5f\x63\x61\x63\x68\x65\137\153\x65\171" => '', "\x6c\157\x67\x67\x65\x64\137\151\156\x5f\143\x6f\x6f\153\x69\x65" => '', "\x63\157\155\155\x6f\156\137\x63\141\x63\x68\x65\137\x6c\157\x67\x67\x65\x64\x5f\x75\x73\145\x72\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo}) { $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; } } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\x54\x54\120\x5f\x48\117\x53\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\x3a\x5c\144\x2b\44\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\56")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\x70\150\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\143\145\x73\163" => true, "\160\141\x74\x68" => $oqwuasygwcckkios]); } else { $mkomwsiykqigmqca = str_replace("\134", "\x2f", strtok($this->iuocyymeygwuweag("\x52\105\121\125\105\x53\124\137\125\x52\x49", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\x7c\50\77\x3c\75\56\x29\x2f\x2b\174", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\62\106", preg_replace("\57\x5e\50\x3f\72\45\x32\106\x29\52\50\56\52\77\51\50\77\x3a\x25\62\106\x29\x2a\x24\x2f", "\44\61", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\x70\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\x68\160"), $yykkewcosaecgqyg)) { $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\x70\x68\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\143\145\163\x73" => true, "\x70\141\164\x68" => $oqwuasygwcckkios]); } else { if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\x68\160"), $yykkewcosaecgqyg)) { $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\x63\x65\163\x73" => true, "\x70\x61\164\150" => $oqwuasygwcckkios]); } } $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\x63\x65\x73\x73" => false, "\x70\x61\x74\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\x2e\160\x68\160"]); } } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\x65\x6a\x65\143\164\x5f\143\x6f\157\x6b\151\145\x73"); if ($osqkgokmuiasuukg) { $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; } return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if ($iqisissicwwuksyi = $this->get("\x69\x67\x6e\157\x72\145\x64\x5f\x75\x72\154\x73")) { $iqisissicwwuksyi = "\43{$iqisissicwwuksyi}\x23"; } return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\141\143\150\x65\137\155\141\156\144\x61\x74\x6f\x72\171\137\x63\157\x6f\x6b\151\145\x73") ?: ''; if ($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg)) { $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; } return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\x65\x62\165\x67\137\155\x6f\x64\145"); } }
