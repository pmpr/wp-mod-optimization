<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c04d4492ba5             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Buffer; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Package\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected $logger = null; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\162\x69" => 1, "\x77\160\137\64\x30\64" => 1, "\x73\x65\141\162\x63\150" => 1, "\x71\165\x65\162\x79\x5f\163\x74\162\151\x6e\147" => 1, "\151\147\x6e\157\162\x65\144\x5f\165\162\154\x73" => 1, "\x64\x6f\156\x6f\x74\143\141\143\150\x65\x70\141\x67\x65" => 1, "\162\145\152\x65\x63\x74\x65\x64\137\143\x6f\x6f\x6b\151\x65" => 1, "\155\141\156\x64\141\164\x6f\x72\x79\x5f\x63\x6f\x6f\x6b\151\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; $ywmkwiwkosakssii = wp_parse_args($ywmkwiwkosakssii, ["\147\x65\164" => is_array($_GET) && $_GET ? $_GET : [], "\160\x6f\x73\164" => is_array($_POST) && $_POST ? $_POST : [], "\164\x65\163\x74" => [], "\154\157\147\x67\145\x72" => null, "\143\157\157\153\151\145\163" => is_array($_COOKIE) && $_COOKIE ? $_COOKIE : []]); if ($ywmkwiwkosakssii["\x74\x65\x73\164"]) { goto cuykwgmswkskqkyi; } $this->okkwqquawsoemamu((array) $ywmkwiwkosakssii["\164\145\x73\164"]); cuykwgmswkskqkyi: $this->get = $ywmkwiwkosakssii["\147\x65\164"] && is_array($ywmkwiwkosakssii["\147\x65\164"]) ? $ywmkwiwkosakssii["\x67\145\x74"] : []; $this->post = $ywmkwiwkosakssii["\x70\157\x73\x74"] && is_array($ywmkwiwkosakssii["\160\x6f\x73\x74"]) ? $ywmkwiwkosakssii["\160\x6f\163\164"] : []; $this->logger = $ywmkwiwkosakssii["\154\157\x67\x67\x65\162"] ?: null; $this->cookies = $ywmkwiwkosakssii["\143\x6f\157\153\151\x65\163"] && is_array($ywmkwiwkosakssii["\143\x6f\x6f\x6b\151\x65\x73"]) ? $ywmkwiwkosakssii["\143\157\157\x6b\151\145\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto kuicqywysciceggs; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\160\x5f\143\165\x73\x74\157\x6d\151\x7a\145" => '']); kuicqywysciceggs: } public function mskuyeumceaigegs() { return $this->logger; } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { $uamcoiueqaamsqma = ''; $mgkceomocowocqyo = []; $this->lastError = []; if ($this->kgkoeoeseyuugaao()) { goto usqgaogkqgemuima; } if ($this->gymgcceeqssmesiu()) { goto meawswgwagoqgkye; } if ($this->goecwaaykqoaaagg()) { goto yiwiqaqmwiogawym; } if ($this->sgsscqasgeyeicoe()) { goto cggowoquuiwqkyew; } if (!$this->gooeyogikcusgwuu()) { goto eequksumcoogyoem; } if (!$this->cskwmweqysskwckg()) { goto sqiciiuwmykocycc; } $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if (!isset($uiewakwqscemywuo["\163\165\143\143\145\x73\163"]) || !$uiewakwqscemywuo["\163\165\143\x63\x65\163\163"]) { goto kiqogmwcgcamwiig; } if ($this->cskwmweqysskwckg("\161\x75\x65\162\x79\x5f\x73\x74\x72\151\156\147") && !$this->koguieumooaesyww()) { goto kwagwqyusyiyoaqs; } if ($this->cskwmweqysskwckg("\x72\x65\x6a\145\143\164\x65\144\x5f\x63\x6f\157\x6b\151\145") && $this->cokqaygwwygweuyk()) { goto sciwggaeogcoesiu; } if (!($this->cskwmweqysskwckg("\x69\x67\x6e\157\162\145\x64\x5f\165\162\x6c\x73") && $this->sywgeyscigqsokyg())) { goto mkwskuycuyguqqok; } $uamcoiueqaamsqma = "\x49\147\156\x6f\x72\x65\144\x20\165\162\154\40\146\157\165\x6e\144\56"; $mgkceomocowocqyo = ["\160\145\162\155\141\x6c\151\x6e\153" => $this->iqyukmiuoisswoei()]; mkwskuycuyguqqok: goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $uamcoiueqaamsqma = "\x45\170\143\x6c\x75\x64\145\x64\x20\143\157\157\153\x69\145\40\146\x6f\165\x6e\x64\x2e"; $mgkceomocowocqyo = ["\160\145\162\155\141\154\151\x6e\153" => $this->iqyukmiuoisswoei(), "\x65\x78\x63\x6c\x75\x64\145\144\x5f\x63\x6f\157\153\151\145\163" => $this->cokqaygwwygweuyk()]; eqkauqciwewmgeoi: goto yowsmsiyimmimemc; kwagwqyusyiyoaqs: $uamcoiueqaamsqma = "\121\165\145\x72\x79\x20\x73\x74\x72\151\156\x67\x20\x55\122\114\x20\x69\163\x20\145\170\143\154\x75\x64\x65\x64\56"; yowsmsiyimmimemc: goto iomcaiwewsawiamu; kiqogmwcgcamwiig: $uamcoiueqaamsqma = "\x4e\157\40\143\157\x6e\146\x69\147\40\146\151\x6c\145\40\146\157\165\156\x64\x2e"; $mgkceomocowocqyo = ["\143\157\x6e\x66\151\x67\x5f\160\x61\164\150" => $uiewakwqscemywuo["\x70\141\x74\x68"]]; iomcaiwewsawiamu: sqiciiuwmykocycc: goto uukumskkeggaowck; eequksumcoogyoem: $uamcoiueqaamsqma = "\x52\145\161\165\145\163\x74\x20\x6d\145\x74\x68\x6f\x64\40\x69\x73\x20\156\x6f\x74\40\x61\154\154\157\167\145\x64\x2e\40\x50\x61\x67\x65\x20\x63\x61\156\156\157\x74\40\142\x65\40\143\x61\143\150\x65\x64\56"; $mgkceomocowocqyo = ["\x72\x65\161\x75\145\x73\164\137\x6d\145\164\x68\157\x64" => $this->ciyocmkwssocskiy()]; uukumskkeggaowck: goto ocokwuuquaokmasc; cggowoquuiwqkyew: $uamcoiueqaamsqma = "\x43\x75\163\x74\157\x6d\151\x7a\145\x72\40\160\162\145\166\x69\145\x77\40\x69\163\40\145\x78\x63\154\x75\x64\x65\x64\56"; ocokwuuquaokmasc: goto goacqqsgaaigyuaw; yiwiqaqmwiogawym: $uamcoiueqaamsqma = "\101\x64\155\151\156\40\x6f\x72\x20\x41\112\x41\130\x20\x55\x52\x4c\40\x69\163\40\x65\170\143\x6c\165\144\145\144\56"; goacqqsgaaigyuaw: goto wcesymwqykqoyuqk; meawswgwagoqgkye: $uamcoiueqaamsqma = "\120\x48\120\54\x20\130\115\x4c\54\40\157\162\x20\x58\x53\x4c\x20\146\x69\x6c\x65\40\151\163\x20\x65\170\x63\x6c\x75\144\x65\144\x2e"; wcesymwqykqoyuqk: goto mswsoaimesegiiic; usqgaogkqgemuima: $uamcoiueqaamsqma = "\122\x6f\142\x6f\x74\163\x2e\164\x78\x74\40\x6f\x72\40\x2e\150\x74\141\x63\143\x65\x73\163\x20\x66\151\x6c\x65\x20\x69\x73\40\145\x78\143\154\x75\144\x65\x64\x2e"; mswsoaimesegiiic: $yciaosuiyeieceug = true; if (!$uamcoiueqaamsqma) { goto egasokooagakisiy; } $this->log($uamcoiueqaamsqma, $mgkceomocowocqyo); $yciaosuiyeieceug = false; egasokooagakisiy: return $yciaosuiyeieceug; } public function ocysssyiuaueqiei($iqaosyayeiuaisqi = null) : bool { return (bool) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x6f\160\x74\137\x61\x6c\x6c\157\x77\137\x74\157\x5f\x6f\x70\164\151\155\x69\172\145"), false, $iqaosyayeiuaisqi); } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { $this->lastError = []; $yciaosuiyeieceug = true; if (strlen($moooemyaqewumiay) <= 255) { goto cgewcsueoyaeikgm; } if (!$this->ocysssyiuaueqiei("\x6c\x65\166\x65\x6c\x2d\x31")) { goto ygkcacsyyckescqs; } if (http_response_code() !== 200) { goto ickcmqoiosquugwe; } if ($this->cskwmweqysskwckg("\144\x6f\x6e\x6f\164\143\141\x63\150\x65\160\141\147\145") && $this->uykysuaiooyewmsc()) { goto goeoymmqqqeeoime; } if ($this->cskwmweqysskwckg("\167\160\x5f\x34\x30\64") && $this->kmmyuiwaogukwqqi()) { goto qgegkeomwscwwiuw; } if (!($this->cskwmweqysskwckg("\163\x65\x61\162\143\x68") && $this->gouusicsisumuiei())) { goto kecwuwwcwokuksyq; } $this->log("\123\x65\x61\x72\x63\150\40\x70\x61\x67\x65\40\151\x73\x20\145\170\x63\x6c\x75\x64\145\x64\56"); $yciaosuiyeieceug = false; kecwuwwcwokuksyq: goto qmiwsequckckoaei; qgegkeomwscwwiuw: $this->log("\x57\x50\40\x34\60\x34\x20\x70\141\x67\145\x20\151\163\40\x65\x78\x63\154\165\x64\x65\x64\x2e"); $yciaosuiyeieceug = false; qmiwsequckckoaei: goto eiawsoasmscmqswa; goeoymmqqqeeoime: $this->log("\x44\117\x4e\117\124\103\x41\103\110\105\x50\101\107\105\40\151\163\40\144\x65\146\151\156\x65\144\56\40\120\x61\147\x65\x20\x63\x61\156\x6e\x6f\x74\40\x62\x65\40\x63\x61\143\x68\x65\144\x2e"); $yciaosuiyeieceug = false; eiawsoasmscmqswa: goto qmeoaqmsuseueqiy; ickcmqoiosquugwe: $this->log("\x50\141\x67\145\40\151\x73\40\156\x6f\164\x20\141\x20\x32\60\60\40\x48\124\x54\x50\x20\x72\x65\163\x70\x6f\x6e\163\x65\x20\141\x6e\144\x20\143\141\x6e\156\x6f\x74\40\142\145\x20\143\x61\143\x68\145\x64\56"); $yciaosuiyeieceug = false; qmeoaqmsuseueqiy: goto cuoqqgaygogsmmic; ygkcacsyyckescqs: $this->log("\x6e\157\164\x20\141\x6c\x6c\x6f\x77\40\164\x6f\40\x6f\160\164\151\x6d\151\172\x65\40\x74\x68\151\x73\40\x70\x61\x67\x65\56"); $yciaosuiyeieceug = false; cuoqqgaygogsmmic: goto sukskmcwsoysiuqu; cgewcsueoyaeikgm: $this->log("\102\165\146\146\145\x72\40\143\x6f\x6e\x74\145\156\164\x20\165\156\144\x65\x72\x20\x32\65\x35\40\x63\141\x72\141\143\x74\145\162\x73\x2e\72\40{$moooemyaqewumiay}"); $yciaosuiyeieceug = false; sukskmcwsoysiuqu: return $yciaosuiyeieceug; } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg($ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto igymseewwyiocoug; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]); goto mqccmesakuemceqi; igymseewwyiocoug: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); mqccmesakuemceqi: return $umuecysoywoumgwo; } public function okkwqquawsoemamu(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eyiamcekkgkiawqy; } return $this->eecucukcqkqysiau(__FUNCTION__); eyiamcekkgkiawqy: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto twkmiuomimomscew; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); twkmiuomimomscew: $ucasskoyoewwmmii = ["\162\157\142\157\164\x73\x2e\164\x78\164", "\56\x68\x74\x61\143\x63\x65\163\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto qcessicwuikwqsis; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qcessicwuikwqsis: qwcegcuowwgiccos: } kooskuwkuayiuose: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yssscwioiyygssec; } return $this->eecucukcqkqysiau(__FUNCTION__); yssscwioiyygssec: $iyiwooigkweeewey = $this->iqyukmiuoisswoei(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($iyiwooigkweeewey && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $iyiwooigkweeewey, $meyiiwcswqmuggyg))) { goto coywmiyqgsweuiic; } if (!($meyiiwcswqmuggyg[0] == $iyiwooigkweeewey)) { goto ieumumsgyguceusy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ieumumsgyguceusy: coywmiyqgsweuiic: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto siqagquguiemuoku; } return $this->eecucukcqkqysiau(__FUNCTION__); siqagquguiemuoku: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto ycakugokkqkuqyiu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ycakugokkqkuqyiu: if (!(strtolower($iyiwooigkweeewey) === "\x2f\151\x6e\144\x65\170\x2e\x70\150\x70")) { goto oouoqimaaqcmccay; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oouoqimaaqcmccay: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\150\x70" => 1, "\x78\x6d\x6c" => 1, "\170\x73\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || defined("\104\x4f\111\x4e\107\137\x41\112\101\x58") && DOING_AJAX; } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\x70\x5f\x63\165\x73\164\x6f\x6d\x69\x7a\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\x45\x54" => 1, "\x48\105\x41\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto sycygoiaiqqageym; } return $this->eecucukcqkqysiau(__FUNCTION__); sycygoiaiqqageym: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto gygawoqywkukmqee; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gygawoqywkukmqee: $yccgiaiouekkouay = [ "\154\141\x6e\x67" => 1, "\160\162\x65\154\x6f\141\144" => 1, "\x6f\x70\x74\55\x70\x72\x65\154\157\x61\144" => 1, "\x70\x65\x72\155\x61\x6c\151\156\x6b\137\156\x61\155\145" => 1, "\x6c\x70\x2d\x76\x61\162\x69\141\164\151\x6f\156\x2d\x69\x64" => 1, ]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto kciouyuaqkyqomam; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kciouyuaqkyqomam: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\x61\143\150\145\x5f\161\x75\x65\x72\x79\137\x73\x74\162\151\x6e\x67\163"); if ($yccgiaiouekkouay) { goto wwkgkaecgiwggcck; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wwkgkaecgiwggcck: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto umgaesggesswoaqe; } return $this->eecucukcqkqysiau(__FUNCTION__); umgaesggesswoaqe: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto qsygcycwieukkgwc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qsygcycwieukkgwc: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto kiwqkcaekqqyuegq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kiwqkcaekqqyuegq: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto gimmuoqwckiseaik; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; gimmuoqwckiseaik: iqcogmsguwoikame: } quwcqmyokicssyew: if (empty($eiocugauqgouiuyi)) { goto cmqucgoewuyieoyk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); cmqucgoewuyieoyk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function uykysuaiooyewmsc() : bool { if (!(!defined("\x4f\120\124\111\115\111\x5a\x41\124\111\x4f\x4e\137\x44\117\116\x54\x5f\103\x41\103\x48\x45\x5f\120\x41\107\105") || !OPTIMIZATION_DONT_CACHE_PAGE)) { goto yqykqysmiquwoasu; } return false; yqykqysmiquwoasu: return !apply_filters("\143\141\x63\150\145\137\x6f\166\145\x72\x72\151\144\145\137\144\x6f\156\164\x5f\143\141\x63\150\145\137\160\141\147\x65", false); } public function kmmyuiwaogukwqqi() : bool { return !function_exists("\151\x73\x5f\x34\60\x34") || is_404(); } public function gouusicsisumuiei() : bool { if (!(function_exists("\x69\x73\137\x73\x65\141\162\143\150") && !is_search())) { goto ayyweymyuuiauamo; } return false; ayyweymyuuiauamo: return !apply_filters("\143\x61\143\150\x65\x5f\143\x61\x63\x68\145\137\163\x65\x61\x72\x63\x68", false); } public function iqyukmiuoisswoei() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\125\105\123\124\x5f\x55\122\x49", ''); if (!$iyiwooigkweeewey) { goto mosqsmqimqgqoase; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\x2f"); mosqsmqimqgqoase: return $iyiwooigkweeewey; } public function mcqmgiwowqqyiewk() : string { if (!($iyiwooigkweeewey = $this->iqyukmiuoisswoei())) { goto omugkkesagcyagmk; } $iyiwooigkweeewey = explode("\77", $iyiwooigkweeewey); $iyiwooigkweeewey = reset($iyiwooigkweeewey); omugkkesagcyagmk: return $iyiwooigkweeewey; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\121\125\x45\x53\124\x5f\115\105\124\x48\x4f\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto kqksuugcgsyeoayy; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\x61\x63\x68\x65\137\x69\x67\156\157\162\x65\x64\x5f\x70\x61\x72\x61\x6d\x65\x74\145\162\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto ygcsmkuycoagwyou; } ksort($eyagkkkqkwcuygso); ygcsmkuycoagwyou: kqksuugcgsyeoayy: return $eyagkkkqkwcuygso; } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log($uamcoiueqaamsqma, $mgkceomocowocqyo = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto ssoucoucsgccekwe; } $eawuoscsaksyqwiw = $this->mskuyeumceaigegs(); if ($eawuoscsaksyqwiw && is_a($eawuoscsaksyqwiw, "\120\155\160\x72\x5c\103\157\x6d\155\157\x6e\x5c\x46\157\x75\x6e\x64\141\x74\151\x6f\x6e\134\x4c\x6f\147\x67\x65\x72\x5c\105\x6e\147\151\156\x65")) { goto iggyqogweyosuikc; } error_log($uamcoiueqaamsqma); goto qqewoyookaskiuek; iggyqogweyosuikc: $eawuoscsaksyqwiw->uimukyawykswgwsm("\x64\x65\x66\x61\165\x6c\164", $eawuoscsaksyqwiw::INFO_CODE, $uamcoiueqaamsqma, $mgkceomocowocqyo); qqewoyookaskiuek: ssoucoucsgccekwe: } }
