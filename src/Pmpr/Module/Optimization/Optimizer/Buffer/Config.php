<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cf4c4bca826             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto oomguqikqokqwgku; } return; oomguqikqokqwgku: if (!(!isset($ywmkwiwkosakssii["\x73\145\x72\x76\145\x72"]) && !empty($_SERVER) && is_array($_SERVER))) { goto samwkqgwouggsguc; } $ywmkwiwkosakssii["\x73\145\162\x76\145\x72"] = $_SERVER; samwkqgwouggsguc: $this->path = rtrim($ywmkwiwkosakssii["\x70\141\164\x68"], "\57") . "\57"; $this->server = !empty($ywmkwiwkosakssii["\x73\145\x72\x76\145\162"]) && is_array($ywmkwiwkosakssii["\163\x65\x72\166\x65\162"]) ? $ywmkwiwkosakssii["\x73\x65\x72\x76\x65\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto wyuemgggaqogsmsq; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; wyuemgggaqogsmsq: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto guykyqecgswcsmws; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; guykyqecgswcsmws: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kkumywowcoycymeo; } return $this->eecucukcqkqysiau(__FUNCTION__); kkumywowcoycymeo: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\163\165\143\x63\x65\163\x73"]) || !$oqwuasygwcckkios["\x73\165\x63\x63\x65\x73\163"])) { goto miweggwqeiaeweia; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); miweggwqeiaeweia: if (!file_exists($oqwuasygwcckkios["\160\141\164\x68"])) { goto kqqiegkuqagcqsya; } include $oqwuasygwcckkios["\x70\x61\x74\150"]; kqqiegkuqagcqsya: $uiewakwqscemywuo = ["\x64\x65\x76\137\x6d\157\x64\145" => 0, "\144\x65\142\165\x67\x5f\155\x6f\144\x65" => 1, "\143\141\143\x68\145\x5f\x77\x65\142\160" => 0, "\x67\x7a\151\x70\x5f\145\156\141\x62\x6c\x65" => 1, "\143\157\157\x6b\151\145\137\150\141\x73\x68" => '', "\155\157\x62\151\154\145\137\143\x61\143\x68\145" => 1, "\143\x61\143\x68\x65\137\145\x6e\141\x62\154\x65" => 1, "\151\147\156\157\x72\145\x64\137\x75\162\154\163" => [], "\162\145\x6a\x65\143\164\137\x63\157\157\x6b\151\x65\163" => '', "\163\x65\x63\x72\x65\x74\137\x63\141\x63\150\x65\137\153\x65\171" => '', "\x6c\x6f\147\147\x65\x64\x5f\151\156\137\x63\157\x6f\153\151\x65" => '', "\x63\x6f\155\155\157\x6e\x5f\x63\x61\143\150\145\x5f\154\157\x67\147\x65\144\x5f\x75\163\145\162\163" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto iwekmyyccgiyuecc; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; iwekmyyccgiyuecc: ogsaaqsaogcqiouy: } ousiuuwgwkiyikyq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ikqqskkqqwmwssoo; } return $this->eecucukcqkqysiau(__FUNCTION__); ikqqskkqqwmwssoo: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\x54\124\120\137\110\117\x53\124", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\x3a\134\x64\53\44\57", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\x2e")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto aomysykcgikegiau; } return $this->eecucukcqkqysiau(__FUNCTION__); aomysykcgikegiau: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\160\x68\x70"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto kosaqwikueyksqmw; } $mkomwsiykqigmqca = str_replace("\134", "\57", strtok($this->iuocyymeygwuweag("\x52\105\121\125\x45\x53\124\x5f\x55\122\x49", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\x7c\50\77\74\x3d\x2e\x29\57\53\x7c", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\x32\x46", preg_replace("\57\136\x28\77\x3a\45\62\x46\51\52\50\x2e\52\x3f\x29\x28\x3f\x3a\x25\x32\106\x29\52\x24\57", "\44\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\160\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\x70\150\x70"), $yykkewcosaecgqyg)) { goto ykomgumacooyomsk; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\x68\160"), $yykkewcosaecgqyg))) { goto ogqmesokykywseys; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\143\145\x73\x73" => true, "\160\x61\x74\x68" => $oqwuasygwcckkios]); ogqmesokykywseys: goto mqkmcysgoiaouiwm; ykomgumacooyomsk: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\x70\x68\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\143\x65\x73\x73" => true, "\160\x61\x74\150" => $oqwuasygwcckkios]); mqkmcysgoiaouiwm: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; awoaooyoeoyeeqee: } cwwmimggaaecmucw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\x63\145\163\163" => false, "\160\x61\x74\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\x2e\160\x68\160"]); goto gicyayswqyuoekcq; kosaqwikueyksqmw: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\x63\143\x65\x73\x73" => true, "\x70\141\x74\x68" => $oqwuasygwcckkios]); gicyayswqyuoekcq: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\x65\x6a\x65\x63\x74\137\143\157\157\153\x69\145\x73"); if (!$osqkgokmuiasuukg) { goto iikiiioqiyegyaak; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; iikiiioqiyegyaak: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\x69\147\156\x6f\x72\145\x64\137\x75\162\154\163"))) { goto uiosisocuwokwkie; } $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\43"; uiosisocuwokwkie: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\141\143\150\x65\137\x6d\x61\156\144\x61\x74\157\162\171\137\143\x6f\x6f\153\x69\145\x73") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto cuumeogeomowqisc; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; cuumeogeomowqisc: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\144\145\x62\x75\147\137\x6d\x6f\x64\145"); } }
