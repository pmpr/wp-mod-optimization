<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665e31ae394a5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto mimacwyuueomgwwy; } return; mimacwyuueomgwwy: if (!(!isset($ywmkwiwkosakssii["\x73\145\x72\x76\x65\x72"]) && !empty($_SERVER) && is_array($_SERVER))) { goto ksckqkmwiqggykke; } $ywmkwiwkosakssii["\x73\145\162\166\145\x72"] = $_SERVER; ksckqkmwiqggykke: $this->path = rtrim($ywmkwiwkosakssii["\160\141\x74\150"], "\x2f") . "\57"; $this->server = !empty($ywmkwiwkosakssii["\163\145\x72\x76\x65\x72"]) && is_array($ywmkwiwkosakssii["\x73\x65\x72\166\x65\162"]) ? $ywmkwiwkosakssii["\x73\x65\x72\166\145\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto igwkcikeyoowosoi; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; igwkcikeyoowosoi: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto iqsgossweywksoia; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; iqsgossweywksoia: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto awaqksikyomsuaeo; } return $this->eecucukcqkqysiau(__FUNCTION__); awaqksikyomsuaeo: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\165\143\x63\x65\x73\x73"]) || !$oqwuasygwcckkios["\163\x75\x63\143\145\163\x73"])) { goto cuommomwmsackoqc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cuommomwmsackoqc: if (!file_exists($oqwuasygwcckkios["\x70\x61\x74\x68"])) { goto ggeoqeowscwkeumy; } include $oqwuasygwcckkios["\x70\x61\x74\x68"]; ggeoqeowscwkeumy: $uiewakwqscemywuo = ["\144\x65\142\165\147\137\155\157\x64\x65" => 1, "\143\141\143\x68\x65\137\167\145\x62\x70" => 0, "\147\x7a\151\x70\137\x65\x6e\x61\142\x6c\145" => 1, "\x63\x6f\x6f\153\x69\x65\137\x68\x61\163\x68" => '', "\x6d\x6f\x62\x69\x6c\145\137\x63\x61\x63\150\145" => 1, "\x63\x61\x63\150\145\137\145\x6e\141\x62\154\x65" => 1, "\151\x67\156\157\162\145\x64\x5f\x75\162\x6c\x73" => [], "\162\145\x6a\145\x63\164\137\143\157\x6f\153\x69\x65\163" => '', "\x73\x65\x63\162\x65\x74\137\x63\141\x63\x68\x65\x5f\x6b\x65\x79" => '', "\154\157\x67\x67\x65\x64\137\x69\156\137\143\x6f\x6f\153\x69\145" => '', "\143\x6f\155\155\157\156\137\x63\141\x63\150\145\137\154\157\147\147\x65\144\137\x75\x73\145\162\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto uqcsksaywyqeumig; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; uqcsksaywyqeumig: uwaimsisescsgyqk: } qyeswawykmasuqye: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yggmaskeguaqkusc; } return $this->eecucukcqkqysiau(__FUNCTION__); yggmaskeguaqkusc: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\110\124\124\120\x5f\x48\117\x53\124", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\x3a\x5c\x64\53\44\57", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = trim(strtolower($gwgucoaaqcwwciqq), "\x2e"); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ukwoswyyogmsygqg; } return $this->eecucukcqkqysiau(__FUNCTION__); ukwoswyyogmsygqg: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\x2e\x70\x68\x70"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto kceuusiekagyeoys; } $mkomwsiykqigmqca = str_replace("\x5c", "\57", strtok($this->iuocyymeygwuweag("\122\105\121\125\x45\x53\124\137\125\x52\x49", ''), "\x3f")); $mkomwsiykqigmqca = preg_replace("\174\x28\77\74\x3d\56\x29\57\x2b\174", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\x32\x46", preg_replace("\x2f\136\50\x3f\72\x25\62\x46\51\52\x28\x2e\52\x3f\51\50\77\x3a\x25\x32\x46\51\52\x24\x2f", "\44\61", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\x70\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\x70\x68\160"), $yykkewcosaecgqyg)) { goto gkoaeuekqockuoiq; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\x70"), $yykkewcosaecgqyg))) { goto yqicwmekwuoywyus; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\143\x65\163\x73" => true, "\160\x61\164\150" => $oqwuasygwcckkios]); yqicwmekwuoywyus: goto eekaiaeqewiqkkgm; gkoaeuekqockuoiq: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\160\x68\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\x63\x63\x65\x73\x73" => true, "\160\141\164\x68" => $oqwuasygwcckkios]); eekaiaeqewiqkkgm: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; kwmiwaecqcgiaqye: } jsmisuccwyukksgc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\x63\145\x73\163" => false, "\x70\141\164\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\57", $mkomwsiykqigmqca) . "\x2e\160\150\x70"]); goto uyeyscsaigimsqwq; kceuusiekagyeoys: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\143\x65\x73\163" => true, "\160\141\164\150" => $oqwuasygwcckkios]); uyeyscsaigimsqwq: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\145\x6a\145\143\164\x5f\x63\157\x6f\153\151\x65\x73"); if (!$osqkgokmuiasuukg) { goto mwieyyqamgwicgco; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\43"; mwieyyqamgwicgco: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\151\147\156\x6f\x72\x65\144\x5f\x75\162\154\163"))) { goto wkiymcoqqiigqaaw; } $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\x23"; wkiymcoqqiigqaaw: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\141\x63\x68\145\137\155\141\156\x64\x61\164\x6f\162\x79\x5f\x63\x6f\x6f\x6b\151\x65\163") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto esqwswmoegiqcckg; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; esqwswmoegiqcckg: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\x65\x62\x75\147\x5f\x6d\x6f\x64\145"); } }
