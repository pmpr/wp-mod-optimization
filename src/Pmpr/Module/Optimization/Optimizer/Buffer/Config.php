<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             664697c805b60             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto suqckoccuyeeymww; } return; suqckoccuyeeymww: if (!(!isset($ywmkwiwkosakssii["\163\145\162\166\x65\162"]) && !empty($_SERVER) && is_array($_SERVER))) { goto giugwaeuwaomossq; } $ywmkwiwkosakssii["\x73\x65\x72\166\x65\x72"] = $_SERVER; giugwaeuwaomossq: $this->path = rtrim($ywmkwiwkosakssii["\x70\141\x74\x68"], "\x2f") . "\x2f"; $this->server = !empty($ywmkwiwkosakssii["\163\x65\162\166\145\x72"]) && is_array($ywmkwiwkosakssii["\x73\x65\x72\166\x65\162"]) ? $ywmkwiwkosakssii["\163\145\162\x76\145\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto acgqaeakoyasgkku; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; acgqaeakoyasgkku: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto sycougcyeqmeiagk; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; sycougcyeqmeiagk: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ssagcgqaucssyego; } return $this->eecucukcqkqysiau(__FUNCTION__); ssagcgqaucssyego: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\165\143\143\x65\x73\x73"]) || !$oqwuasygwcckkios["\x73\x75\143\x63\x65\163\x73"])) { goto mqgeseysuwcaqwiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mqgeseysuwcaqwiy: if (!file_exists($oqwuasygwcckkios["\x70\141\x74\150"])) { goto ekoqieigyoeyauqa; } include $oqwuasygwcckkios["\160\141\x74\150"]; ekoqieigyoeyauqa: $uiewakwqscemywuo = ["\x64\x65\142\x75\147\x5f\155\157\x64\x65" => 1, "\143\x61\143\x68\145\137\x77\x65\x62\x70" => 0, "\147\x7a\x69\160\137\145\x6e\x61\x62\154\x65" => 1, "\x63\157\157\x6b\x69\145\137\x68\141\x73\x68" => '', "\155\x6f\142\x69\x6c\x65\x5f\143\141\x63\150\145" => 1, "\143\x61\x63\x68\x65\x5f\x65\x6e\141\142\154\x65" => 1, "\x69\x67\x6e\157\162\x65\x64\x5f\165\162\154\x73" => [], "\x72\x65\152\x65\x63\164\x5f\143\x6f\157\153\x69\145\x73" => '', "\163\x65\x63\x72\145\164\137\x63\141\143\x68\x65\137\153\x65\x79" => '', "\154\x6f\x67\147\x65\x64\137\151\x6e\137\x63\157\157\153\151\x65" => '', "\143\157\x6d\x6d\157\156\x5f\143\x61\143\x68\145\x5f\x6c\157\x67\x67\x65\x64\x5f\x75\163\145\x72\163" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto ksckqkmwiqggykke; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; ksckqkmwiqggykke: mimacwyuueomgwwy: } cuwcsamuuqyuyqsu: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto igwkcikeyoowosoi; } return $this->eecucukcqkqysiau(__FUNCTION__); igwkcikeyoowosoi: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\110\124\x54\120\137\x48\x4f\123\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\72\x5c\144\53\44\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = trim(strtolower($gwgucoaaqcwwciqq), "\56"); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iqsgossweywksoia; } return $this->eecucukcqkqysiau(__FUNCTION__); iqsgossweywksoia: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\160\x68\x70"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto uqcsksaywyqeumig; } $mkomwsiykqigmqca = str_replace("\134", "\x2f", strtok($this->iuocyymeygwuweag("\x52\x45\121\125\x45\123\x54\137\x55\122\111", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\174\50\77\x3c\x3d\56\51\57\53\x7c", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\x32\x46", preg_replace("\57\x5e\50\77\72\x25\x32\x46\x29\x2a\x28\56\x2a\x3f\x29\50\77\x3a\x25\62\106\x29\x2a\44\57", "\44\61", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\x70\x68\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\160\x68\160"), $yykkewcosaecgqyg)) { goto qyeswawykmasuqye; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\160"), $yykkewcosaecgqyg))) { goto ggeoqeowscwkeumy; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\x68\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\x63\143\x65\163\x73" => true, "\x70\x61\164\x68" => $oqwuasygwcckkios]); ggeoqeowscwkeumy: goto uwaimsisescsgyqk; qyeswawykmasuqye: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\x68\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\143\x65\x73\163" => true, "\160\x61\164\150" => $oqwuasygwcckkios]); uwaimsisescsgyqk: $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; cuommomwmsackoqc: } awaqksikyomsuaeo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\143\x63\145\163\x73" => false, "\160\x61\164\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\x2e\x70\x68\x70"]); goto yggmaskeguaqkusc; uqcsksaywyqeumig: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\143\143\x65\x73\163" => true, "\160\141\164\x68" => $oqwuasygwcckkios]); yggmaskeguaqkusc: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\x65\152\145\x63\x74\x5f\143\157\x6f\x6b\x69\145\x73"); if (!$osqkgokmuiasuukg) { goto ukwoswyyogmsygqg; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; ukwoswyyogmsygqg: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\x69\x67\156\x6f\162\145\x64\137\165\162\x6c\163"))) { goto jsmisuccwyukksgc; } $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\43"; jsmisuccwyukksgc: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\141\x63\150\x65\137\155\141\x6e\144\141\x74\157\162\171\137\143\157\x6f\x6b\151\145\163") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto kwmiwaecqcgiaqye; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; kwmiwaecqcgiaqye: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\145\x62\x75\147\137\155\x6f\144\145"); } }
