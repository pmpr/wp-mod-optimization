<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0d3aa9dad2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto usmagcaocwiugqum; } return; usmagcaocwiugqum: if (!(!isset($ywmkwiwkosakssii["\x73\x65\x72\x76\145\162"]) && !empty($_SERVER) && is_array($_SERVER))) { goto sikmqkecsiyciaei; } $ywmkwiwkosakssii["\163\x65\x72\166\145\162"] = $_SERVER; sikmqkecsiyciaei: $this->path = rtrim($ywmkwiwkosakssii["\x70\x61\x74\150"], "\57") . "\57"; $this->server = !empty($ywmkwiwkosakssii["\x73\x65\x72\166\145\x72"]) && is_array($ywmkwiwkosakssii["\163\x65\x72\x76\x65\x72"]) ? $ywmkwiwkosakssii["\163\145\162\166\145\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto wmycwscioqackeig; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; wmycwscioqackeig: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto wammkmaqucqagqww; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; wammkmaqucqagqww: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iuooqassskiyeemo; } return $this->eecucukcqkqysiau(__FUNCTION__); iuooqassskiyeemo: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\x75\x63\x63\x65\163\x73"]) || !$oqwuasygwcckkios["\163\x75\143\143\145\163\x73"])) { goto cquyuwsisgqscemm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cquyuwsisgqscemm: if (!file_exists($oqwuasygwcckkios["\x70\141\x74\x68"])) { goto imykswegcuekqwio; } include $oqwuasygwcckkios["\160\141\x74\150"]; imykswegcuekqwio: $uiewakwqscemywuo = ["\x64\145\x76\137\155\x6f\144\x65" => 0, "\144\145\x62\x75\x67\x5f\x6d\157\144\145" => 1, "\x63\141\x63\150\x65\x5f\x77\x65\x62\x70" => 0, "\147\172\151\160\137\x65\x6e\141\142\x6c\145" => 1, "\143\157\x6f\153\151\x65\x5f\x68\141\163\x68" => '', "\155\157\x62\x69\x6c\x65\x5f\x63\x61\x63\x68\x65" => 1, "\x63\141\143\150\145\x5f\145\156\x61\x62\154\x65" => 1, "\151\147\x6e\157\x72\x65\x64\x5f\165\x72\x6c\163" => [], "\162\145\x6a\145\143\164\137\143\157\x6f\x6b\151\x65\x73" => '', "\x73\x65\x63\162\x65\164\x5f\x63\x61\x63\150\145\137\x6b\x65\x79" => '', "\154\x6f\x67\x67\145\144\137\151\x6e\137\143\x6f\157\153\x69\x65" => '', "\143\157\x6d\155\157\156\x5f\143\x61\143\150\x65\137\154\x6f\147\147\145\x64\x5f\x75\163\145\162\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto mqaamqyoywyekiko; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; mqaamqyoywyekiko: ykuqeyogsasokqis: } eokikuciuqkyauum: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto smkakiyekkqoggao; } return $this->eecucukcqkqysiau(__FUNCTION__); smkakiyekkqoggao: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\124\x54\120\x5f\110\117\123\124", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\72\x5c\x64\x2b\x24\57", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\56")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto zggweikegkcgkmma; } return $this->eecucukcqkqysiau(__FUNCTION__); zggweikegkcgkmma: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\x2e\160\150\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto ekgkiioywougquka; } $mkomwsiykqigmqca = str_replace("\134", "\x2f", strtok($this->iuocyymeygwuweag("\x52\105\121\x55\105\x53\124\x5f\x55\122\x49", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\x7c\50\77\x3c\75\56\51\x2f\x2b\x7c", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\x32\106", preg_replace("\57\x5e\x28\77\x3a\45\x32\106\x29\52\x28\x2e\52\77\51\x28\x3f\x3a\45\62\x46\51\52\44\x2f", "\x24\61", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\160\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\160\x68\x70"), $yykkewcosaecgqyg)) { goto coskmuqsawiaeyqg; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\x68\160"), $yykkewcosaecgqyg))) { goto seqammocqkyswaim; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\x63\143\x65\x73\x73" => true, "\160\x61\164\150" => $oqwuasygwcckkios]); seqammocqkyswaim: goto umccwcqwkoiaakmu; coskmuqsawiaeyqg: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\x70\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\x63\145\x73\163" => true, "\160\x61\164\x68" => $oqwuasygwcckkios]); umccwcqwkoiaakmu: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; gcsosokicycukoyc: } yisoawmmammassqk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\x63\143\x65\x73\x73" => false, "\160\141\x74\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\57", $mkomwsiykqigmqca) . "\56\x70\x68\160"]); goto wyyowcsciaqkuiuq; ekgkiioywougquka: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\x63\145\163\163" => true, "\160\x61\x74\150" => $oqwuasygwcckkios]); wyyowcsciaqkuiuq: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\x72\145\152\145\143\x74\x5f\x63\157\157\x6b\x69\145\x73"); if (!$osqkgokmuiasuukg) { goto imquwacukaswoyka; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; imquwacukaswoyka: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\151\x67\x6e\157\162\x65\144\x5f\x75\x72\154\x73"))) { goto smksoismyouykeoa; } $iqisissicwwuksyi = "\43{$iqisissicwwuksyi}\43"; smksoismyouykeoa: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\141\143\x68\145\137\155\x61\x6e\144\141\x74\157\x72\x79\137\143\157\157\x6b\151\x65\163") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto qwgkwokcyocqiyee; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; qwgkwokcyocqiyee: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\x65\142\x75\x67\x5f\x6d\x6f\144\x65"); } }
