<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66c7b6e5555be             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto ikqqskkqqwmwssoo; } return; ikqqskkqqwmwssoo: if (!(!isset($ywmkwiwkosakssii["\163\145\162\x76\x65\162"]) && !empty($_SERVER) && is_array($_SERVER))) { goto aomysykcgikegiau; } $ywmkwiwkosakssii["\x73\145\x72\x76\145\x72"] = $_SERVER; aomysykcgikegiau: $this->path = rtrim($ywmkwiwkosakssii["\160\x61\x74\x68"], "\x2f") . "\57"; $this->server = !empty($ywmkwiwkosakssii["\163\145\x72\166\x65\x72"]) && is_array($ywmkwiwkosakssii["\x73\145\162\166\x65\162"]) ? $ywmkwiwkosakssii["\x73\145\x72\166\145\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto cwwmimggaaecmucw; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; cwwmimggaaecmucw: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto awoaooyoeoyeeqee; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; awoaooyoeoyeeqee: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ogqmesokykywseys; } return $this->eecucukcqkqysiau(__FUNCTION__); ogqmesokykywseys: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\x75\x63\143\x65\x73\x73"]) || !$oqwuasygwcckkios["\163\x75\x63\143\x65\x73\x73"])) { goto ykomgumacooyomsk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ykomgumacooyomsk: if (!file_exists($oqwuasygwcckkios["\160\141\164\x68"])) { goto mqkmcysgoiaouiwm; } include $oqwuasygwcckkios["\x70\x61\x74\x68"]; mqkmcysgoiaouiwm: $uiewakwqscemywuo = ["\x64\x65\x76\x5f\155\x6f\x64\x65" => 0, "\x64\x65\x62\x75\x67\137\155\157\144\145" => 1, "\x63\x61\x63\x68\x65\x5f\x77\145\142\160" => 0, "\147\x7a\x69\x70\x5f\145\x6e\141\x62\x6c\145" => 1, "\x63\157\157\x6b\x69\x65\x5f\150\x61\x73\x68" => '', "\155\157\142\x69\x6c\x65\137\143\141\143\x68\x65" => 1, "\143\x61\x63\x68\145\137\x65\156\141\142\154\145" => 1, "\151\147\x6e\157\162\145\x64\x5f\x75\162\x6c\x73" => [], "\x72\145\x6a\145\143\164\x5f\x63\157\x6f\x6b\x69\x65\163" => '', "\163\x65\143\162\145\164\137\x63\x61\143\x68\145\x5f\153\145\x79" => '', "\x6c\x6f\147\147\145\144\137\151\156\137\143\157\157\153\151\145" => '', "\x63\157\155\155\x6f\x6e\137\143\x61\x63\x68\145\137\x6c\157\147\x67\145\144\x5f\x75\163\x65\x72\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto iikiiioqiyegyaak; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; iikiiioqiyegyaak: gicyayswqyuoekcq: } kosaqwikueyksqmw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uiosisocuwokwkie; } return $this->eecucukcqkqysiau(__FUNCTION__); uiosisocuwokwkie: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\110\124\124\120\137\110\117\x53\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\x3a\x5c\144\x2b\x24\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\x2e")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cuumeogeomowqisc; } return $this->eecucukcqkqysiau(__FUNCTION__); cuumeogeomowqisc: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\x2e\x70\150\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto cogywoqcqummsyus; } $mkomwsiykqigmqca = str_replace("\134", "\57", strtok($this->iuocyymeygwuweag("\122\x45\121\x55\105\x53\x54\x5f\x55\122\111", ''), "\x3f")); $mkomwsiykqigmqca = preg_replace("\x7c\50\x3f\74\75\56\x29\x2f\53\174", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\62\x46", preg_replace("\x2f\136\x28\x3f\x3a\x25\62\106\x29\52\50\56\52\x3f\x29\50\77\72\x25\x32\x46\51\52\44\x2f", "\44\61", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\x70\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\160\x68\160"), $yykkewcosaecgqyg)) { goto ocaguquugeamqckq; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\x68\160"), $yykkewcosaecgqyg))) { goto csammceowmqwaamq; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\x68\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\143\x63\145\163\x73" => true, "\x70\x61\x74\150" => $oqwuasygwcckkios]); csammceowmqwaamq: goto eekcoeikaeaaeyii; ocaguquugeamqckq: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\160\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\143\145\163\163" => true, "\160\x61\164\x68" => $oqwuasygwcckkios]); eekcoeikaeaaeyii: $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; qmkaeeomgkwggoyo: } gcckqucukawcasgk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\143\x63\145\x73\x73" => false, "\x70\141\x74\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\56\x70\150\x70"]); goto gmwykkouysyaqwqm; cogywoqcqummsyus: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\x63\x65\163\163" => true, "\160\x61\x74\150" => $oqwuasygwcckkios]); gmwykkouysyaqwqm: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\145\x6a\145\x63\x74\137\x63\x6f\157\x6b\x69\x65\163"); if (!$osqkgokmuiasuukg) { goto ugqwuugsweqgmywk; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; ugqwuugsweqgmywk: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\151\x67\156\x6f\162\145\144\137\x75\x72\154\x73"))) { goto uaukmuiwskcemcsw; } $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\x23"; uaukmuiwskcemcsw: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\141\143\150\145\137\155\x61\156\x64\141\x74\157\x72\171\137\x63\157\x6f\153\151\x65\163") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto sockeswygwcskeuq; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; sockeswygwcskeuq: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\145\142\165\x67\137\x6d\157\144\x65"); } }
