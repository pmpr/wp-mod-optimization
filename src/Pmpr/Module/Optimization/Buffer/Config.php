<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6327197fdd72f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Buffer; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct($ywmkwiwkosakssii = []) { if ($this->amqagusacuuuaswg()) { goto kiwiesucugwoiuum; } $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\141\x74\x68" => '', "\163\145\162\166\145\x72" => $_SERVER]); $this->path = trailingslashit($ywmkwiwkosakssii["\160\x61\164\x68"]); if (!(is_array($ywmkwiwkosakssii["\163\145\x72\166\145\x72"]) && $ywmkwiwkosakssii["\x73\x65\x72\166\x65\162"])) { goto ksgwgcguemcescqg; } $this->server = $ywmkwiwkosakssii["\163\x65\x72\166\145\162"]; ksgwgcguemcescqg: kiwiesucugwoiuum: } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto cmagycousakeeaei; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; cmagycousakeeaei: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto eekeksysqeuoskoo; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; eekeksysqeuoskoo: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto okemsmmeceoeaswi; } return $this->eecucukcqkqysiau(__FUNCTION__); okemsmmeceoeaswi: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\x75\143\x63\145\163\x73"]) || !$oqwuasygwcckkios["\x73\x75\x63\x63\145\x73\163"])) { goto ossyqogewmggmaoc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ossyqogewmggmaoc: if (!file_exists($oqwuasygwcckkios["\x70\x61\x74\150"])) { goto ggkoiouwecyiosym; } include $oqwuasygwcckkios["\160\141\164\150"]; ggkoiouwecyiosym: $uiewakwqscemywuo = ["\x64\145\x62\165\x67\137\155\157\x64\145" => 0, "\143\141\x63\x68\x65\137\x77\145\142\x70" => 0, "\143\157\x6f\153\151\145\137\x68\141\x73\150" => '', "\143\x61\143\x68\x65\137\x65\x6e\x61\142\154\145" => 1, "\151\147\x6e\x6f\162\145\144\x5f\165\162\154\x73" => [], "\162\145\x6a\145\143\x74\x5f\x63\x6f\157\153\151\x65\163" => '', "\x73\x65\143\x72\x65\x74\x5f\x63\141\143\150\x65\137\x6b\x65\x79" => '', "\154\x6f\x67\x67\x65\144\x5f\151\156\x5f\143\x6f\x6f\153\151\x65" => '', "\143\157\x6d\155\157\x6e\137\x63\141\x63\150\145\137\154\157\x67\147\x65\144\x5f\x75\163\x65\x72\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto eymiqwsygoowowuu; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; eymiqwsygoowowuu: eosmwawqaocwgccq: } egosmwkuuikwqeak: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto keqagmaiqqsgkmso; } return $this->eecucukcqkqysiau(__FUNCTION__); keqagmaiqqsgkmso: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\x54\124\120\137\110\x4f\x53\124", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\x3a\x5c\x64\x2b\x24\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = trim(strtolower($gwgucoaaqcwwciqq), "\x2e"); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ekgsawcuswowmosm; } return $this->eecucukcqkqysiau(__FUNCTION__); ekgsawcuswowmosm: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\x2e\x70\150\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto ekgcquiosyesyism; } $mkomwsiykqigmqca = str_replace("\x5c", "\57", strtok($this->iuocyymeygwuweag("\x52\x45\121\125\x45\x53\124\x5f\125\122\x49", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\x7c\x28\77\x3c\x3d\x2e\x29\57\x2b\174", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\62\106", preg_replace("\x2f\x5e\50\77\x3a\x25\x32\x46\x29\x2a\50\x2e\x2a\x3f\51\50\77\x3a\x25\62\x46\51\52\x24\x2f", "\x24\61", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\x70\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\160\150\160"), $yykkewcosaecgqyg)) { goto usgmimcwygsmcioa; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\x68\x70"), $yykkewcosaecgqyg))) { goto wkcwuemioaiyouek; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\x63\145\163\163" => true, "\160\x61\x74\x68" => $oqwuasygwcckkios]); wkcwuemioaiyouek: goto qggiogeyowcoaiqy; usgmimcwygsmcioa: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\160\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\x63\143\145\x73\163" => true, "\x70\x61\164\150" => $oqwuasygwcckkios]); qggiogeyowcoaiqy: $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; euogcyyayioyyiyg: } uiwswesymogiwsgg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\x63\145\163\163" => false, "\x70\141\x74\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\57", $mkomwsiykqigmqca) . "\56\160\x68\160"]); goto qosckaqceoumcasm; ekgcquiosyesyism: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\143\x65\163\163" => true, "\x70\x61\x74\150" => $oqwuasygwcckkios]); qosckaqceoumcasm: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\x72\145\x6a\145\x63\164\x5f\143\x6f\x6f\153\151\x65\x73"); if (!$osqkgokmuiasuukg) { goto gmcqkoqwkiawaikw; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; gmcqkoqwkiawaikw: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\x69\147\156\x6f\x72\145\x64\137\x75\x72\x6c\163"))) { goto kgeggsckmgcgwcqm; } $iqisissicwwuksyi = "\43{$iqisissicwwuksyi}\43"; kgeggsckmgcgwcqm: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\x61\x63\150\145\137\x6d\x61\x6e\x64\x61\164\157\162\171\x5f\x63\157\x6f\x6b\x69\145\163"); if (!('' !== $osqkgokmuiasuukg)) { goto qimieogaimwmukmu; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; qimieogaimwmukmu: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\145\142\165\147\137\155\157\x64\145"); } }
