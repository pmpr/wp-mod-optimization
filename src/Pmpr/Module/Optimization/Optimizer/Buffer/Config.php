<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb5f17f3222             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto ikqqskkqqwmwssoo; } return; ikqqskkqqwmwssoo: if (!(!isset($ywmkwiwkosakssii["\163\x65\162\x76\x65\162"]) && !empty($_SERVER) && is_array($_SERVER))) { goto aomysykcgikegiau; } $ywmkwiwkosakssii["\163\x65\162\166\145\x72"] = $_SERVER; aomysykcgikegiau: $this->path = rtrim($ywmkwiwkosakssii["\x70\141\164\150"], "\57") . "\x2f"; $this->server = !empty($ywmkwiwkosakssii["\x73\x65\162\166\145\162"]) && is_array($ywmkwiwkosakssii["\x73\145\x72\x76\x65\162"]) ? $ywmkwiwkosakssii["\163\x65\x72\x76\x65\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto cwwmimggaaecmucw; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; cwwmimggaaecmucw: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto awoaooyoeoyeeqee; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; awoaooyoeoyeeqee: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ogqmesokykywseys; } return $this->eecucukcqkqysiau(__FUNCTION__); ogqmesokykywseys: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\163\x75\x63\x63\145\163\163"]) || !$oqwuasygwcckkios["\163\165\x63\143\x65\x73\x73"])) { goto ykomgumacooyomsk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ykomgumacooyomsk: if (!file_exists($oqwuasygwcckkios["\160\141\164\150"])) { goto mqkmcysgoiaouiwm; } include $oqwuasygwcckkios["\160\141\164\150"]; mqkmcysgoiaouiwm: $uiewakwqscemywuo = ["\x64\x65\x76\x5f\x6d\x6f\x64\145" => 0, "\144\145\142\x75\147\x5f\x6d\x6f\144\x65" => 1, "\x63\x61\143\x68\145\137\x77\145\142\x70" => 0, "\147\x7a\151\160\137\x65\156\x61\x62\x6c\145" => 1, "\143\157\157\x6b\x69\x65\137\150\x61\x73\x68" => '', "\x6d\157\142\x69\154\145\x5f\x63\x61\x63\x68\145" => 1, "\x63\x61\143\x68\x65\137\145\156\x61\142\x6c\x65" => 1, "\x69\x67\156\157\x72\145\144\137\165\162\x6c\163" => [], "\162\x65\x6a\145\x63\x74\x5f\143\x6f\x6f\153\151\145\x73" => '', "\x73\145\143\162\145\x74\137\x63\141\x63\x68\x65\x5f\x6b\x65\x79" => '', "\x6c\x6f\147\147\x65\x64\137\151\156\x5f\x63\x6f\x6f\x6b\151\x65" => '', "\x63\157\x6d\155\157\156\137\143\141\143\150\x65\x5f\x6c\157\x67\x67\145\x64\137\x75\163\x65\x72\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto iikiiioqiyegyaak; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; iikiiioqiyegyaak: gicyayswqyuoekcq: } kosaqwikueyksqmw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uiosisocuwokwkie; } return $this->eecucukcqkqysiau(__FUNCTION__); uiosisocuwokwkie: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\110\124\x54\x50\137\110\117\x53\124", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\x3a\x5c\x64\53\44\57", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\x2e")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cuumeogeomowqisc; } return $this->eecucukcqkqysiau(__FUNCTION__); cuumeogeomowqisc: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\x70\150\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto cogywoqcqummsyus; } $mkomwsiykqigmqca = str_replace("\134", "\57", strtok($this->iuocyymeygwuweag("\122\105\121\125\x45\123\124\x5f\125\122\x49", ''), "\x3f")); $mkomwsiykqigmqca = preg_replace("\x7c\50\77\x3c\75\x2e\51\x2f\x2b\174", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\x32\106", preg_replace("\57\136\50\x3f\x3a\45\x32\x46\51\52\50\x2e\52\x3f\x29\50\x3f\72\45\x32\x46\51\x2a\x24\57", "\44\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\160\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\x68\160"), $yykkewcosaecgqyg)) { goto ocaguquugeamqckq; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\150\160"), $yykkewcosaecgqyg))) { goto csammceowmqwaamq; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\143\145\x73\163" => true, "\160\x61\x74\x68" => $oqwuasygwcckkios]); csammceowmqwaamq: goto eekcoeikaeaaeyii; ocaguquugeamqckq: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\x70\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\x63\x63\x65\x73\163" => true, "\x70\141\x74\150" => $oqwuasygwcckkios]); eekcoeikaeaaeyii: $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; qmkaeeomgkwggoyo: } gcckqucukawcasgk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\x63\x65\163\163" => false, "\x70\x61\x74\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\56\160\150\x70"]); goto gmwykkouysyaqwqm; cogywoqcqummsyus: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\x63\143\145\x73\163" => true, "\x70\x61\164\150" => $oqwuasygwcckkios]); gmwykkouysyaqwqm: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\145\152\x65\143\164\x5f\143\x6f\x6f\153\151\x65\x73"); if (!$osqkgokmuiasuukg) { goto ugqwuugsweqgmywk; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\43"; ugqwuugsweqgmywk: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\151\147\x6e\x6f\162\x65\x64\137\165\x72\154\x73"))) { goto uaukmuiwskcemcsw; } $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\x23"; uaukmuiwskcemcsw: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\141\143\x68\145\137\x6d\x61\x6e\x64\141\x74\x6f\162\171\x5f\143\x6f\157\153\x69\x65\x73") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto sockeswygwcskeuq; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\43"; sockeswygwcskeuq: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\144\x65\x62\165\147\x5f\x6d\x6f\144\145"); } }
