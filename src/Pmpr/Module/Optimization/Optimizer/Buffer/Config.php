<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e29dc7ba6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto cquyuwsisgqscemm; } return; cquyuwsisgqscemm: if (!(!isset($ywmkwiwkosakssii["\163\x65\162\x76\x65\x72"]) && !empty($_SERVER) && is_array($_SERVER))) { goto imykswegcuekqwio; } $ywmkwiwkosakssii["\x73\x65\162\x76\x65\162"] = $_SERVER; imykswegcuekqwio: $this->path = rtrim($ywmkwiwkosakssii["\x70\141\x74\x68"], "\x2f") . "\57"; $this->server = !empty($ywmkwiwkosakssii["\163\145\x72\x76\145\162"]) && is_array($ywmkwiwkosakssii["\163\x65\x72\x76\145\162"]) ? $ywmkwiwkosakssii["\x73\145\x72\x76\145\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto eokikuciuqkyauum; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; eokikuciuqkyauum: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto ykuqeyogsasokqis; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; ykuqeyogsasokqis: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mqaamqyoywyekiko; } return $this->eecucukcqkqysiau(__FUNCTION__); mqaamqyoywyekiko: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\x75\x63\x63\x65\x73\x73"]) || !$oqwuasygwcckkios["\163\165\143\x63\x65\x73\163"])) { goto smkakiyekkqoggao; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); smkakiyekkqoggao: if (!file_exists($oqwuasygwcckkios["\160\141\x74\150"])) { goto zggweikegkcgkmma; } include $oqwuasygwcckkios["\x70\x61\164\150"]; zggweikegkcgkmma: $uiewakwqscemywuo = ["\x64\145\x76\137\x6d\157\144\x65" => 0, "\x64\145\x62\165\x67\137\155\157\x64\x65" => 1, "\143\x61\x63\150\145\x5f\x77\145\142\160" => 0, "\147\x7a\151\160\x5f\145\x6e\141\x62\154\x65" => 1, "\x63\x6f\157\x6b\151\145\137\x68\x61\163\x68" => '', "\155\x6f\x62\151\x6c\145\137\143\141\x63\150\145" => 1, "\x63\141\143\150\145\x5f\x65\x6e\141\142\154\x65" => 1, "\x69\147\156\x6f\162\145\x64\137\165\x72\154\163" => [], "\162\145\x6a\x65\143\164\x5f\143\x6f\x6f\x6b\151\145\163" => '', "\x73\x65\143\x72\145\x74\137\143\x61\x63\x68\x65\x5f\153\x65\171" => '', "\154\157\147\147\145\144\137\x69\156\137\x63\157\157\153\x69\145" => '', "\143\157\155\155\157\x6e\x5f\x63\141\x63\x68\145\x5f\154\157\147\x67\145\x64\137\x75\x73\x65\x72\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto seqammocqkyswaim; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; seqammocqkyswaim: gcsosokicycukoyc: } yisoawmmammassqk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto coskmuqsawiaeyqg; } return $this->eecucukcqkqysiau(__FUNCTION__); coskmuqsawiaeyqg: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\110\124\x54\x50\137\x48\117\123\124", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\x3a\134\144\x2b\x24\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\x2e")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto umccwcqwkoiaakmu; } return $this->eecucukcqkqysiau(__FUNCTION__); umccwcqwkoiaakmu: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\160\150\x70"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto maeccckgcsaaumkw; } $mkomwsiykqigmqca = str_replace("\134", "\x2f", strtok($this->iuocyymeygwuweag("\122\105\x51\x55\105\123\124\x5f\x55\122\x49", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\174\50\77\74\x3d\56\x29\x2f\x2b\174", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\62\x46", preg_replace("\57\136\50\x3f\72\x25\x32\106\x29\x2a\x28\x2e\x2a\x3f\x29\50\x3f\x3a\45\x32\x46\51\x2a\44\x2f", "\44\61", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\x68\x70"), $yykkewcosaecgqyg)) { goto smksoismyouykeoa; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\150\160"), $yykkewcosaecgqyg))) { goto imquwacukaswoyka; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\143\145\163\163" => true, "\160\x61\x74\150" => $oqwuasygwcckkios]); imquwacukaswoyka: goto qwgkwokcyocqiyee; smksoismyouykeoa: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\160\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\143\145\x73\163" => true, "\160\x61\164\150" => $oqwuasygwcckkios]); qwgkwokcyocqiyee: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; wyyowcsciaqkuiuq: } ekgkiioywougquka: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\143\145\163\163" => false, "\160\141\x74\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\x2e\x70\x68\x70"]); goto gcoeaokkagaaeuse; maeccckgcsaaumkw: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\x63\145\x73\x73" => true, "\160\141\164\150" => $oqwuasygwcckkios]); gcoeaokkagaaeuse: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\x65\152\x65\x63\164\x5f\143\x6f\157\153\x69\x65\x73"); if (!$osqkgokmuiasuukg) { goto kcqueaewmayywqeq; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\43"; kcqueaewmayywqeq: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\151\x67\156\x6f\x72\x65\x64\x5f\x75\x72\154\x73"))) { goto uagsgicwwcakecwq; } $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\x23"; uagsgicwwcakecwq: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\x61\143\150\x65\x5f\x6d\x61\156\x64\x61\x74\157\x72\x79\137\143\157\157\153\x69\x65\163") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto qocgmocqauaaekii; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; qocgmocqauaaekii: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\x65\142\x75\x67\137\x6d\x6f\x64\x65"); } }
