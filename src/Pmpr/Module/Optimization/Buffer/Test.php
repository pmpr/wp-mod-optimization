<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf2522bd2c4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Buffer; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\162\x69" => 1, "\141\x6a\141\x78" => 1, "\x63\162\x6f\x6e" => 1, "\x72\x65\x73\x74" => 1, "\167\x70\x5f\x34\60\x34" => 1, "\163\145\x61\162\143\x68" => 1, "\161\x75\145\162\171\x5f\163\164\162\x69\x6e\147" => 1, "\151\x67\x6e\x6f\162\x65\144\137\165\x72\154\x73" => 1, "\x64\x6f\x6e\157\164\x63\x61\x63\150\x65\160\141\x67\145" => 1, "\x72\145\152\145\143\x74\145\144\x5f\x63\157\157\153\x69\145" => 1, "\x6d\x61\x6e\144\x61\x74\157\x72\171\137\143\x6f\157\153\x69\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; $ywmkwiwkosakssii = wp_parse_args($ywmkwiwkosakssii, ["\147\x65\x74" => is_array($_GET) && $_GET ? $_GET : [], "\160\157\x73\x74" => is_array($_POST) && $_POST ? $_POST : [], "\164\x65\163\164" => [], "\143\x6f\157\x6b\151\x65\163" => is_array($_COOKIE) && $_COOKIE ? $_COOKIE : []]); if ($ywmkwiwkosakssii["\164\x65\x73\x74"]) { goto cecuyayqoioasumi; } $this->okkwqquawsoemamu((array) $ywmkwiwkosakssii["\164\x65\163\164"]); cecuyayqoioasumi: $this->get = $ywmkwiwkosakssii["\147\x65\164"] && is_array($ywmkwiwkosakssii["\x67\145\164"]) ? $ywmkwiwkosakssii["\147\145\164"] : []; $this->post = $ywmkwiwkosakssii["\160\157\163\x74"] && is_array($ywmkwiwkosakssii["\160\157\163\x74"]) ? $ywmkwiwkosakssii["\x70\x6f\x73\x74"] : []; $this->cookies = $ywmkwiwkosakssii["\x63\157\x6f\x6b\x69\145\163"] && is_array($ywmkwiwkosakssii["\x63\157\157\x6b\x69\145\x73"]) ? $ywmkwiwkosakssii["\x63\x6f\x6f\x6b\151\145\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto qiaqsassksqiuyae; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\160\137\x63\165\x73\164\x6f\155\x69\172\x65" => '']); qiaqsassksqiuyae: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { $uamcoiueqaamsqma = ''; $mgkceomocowocqyo = []; $this->lastError = []; if ($this->kgkoeoeseyuugaao()) { goto cggowoquuiwqkyew; } if ($this->gymgcceeqssmesiu()) { goto eequksumcoogyoem; } if ($this->goecwaaykqoaaagg()) { goto iomcaiwewsawiamu; } if ($this->sgsscqasgeyeicoe()) { goto yowsmsiyimmimemc; } if (!$this->gooeyogikcusgwuu()) { goto eqkauqciwewmgeoi; } if (!$this->cskwmweqysskwckg()) { goto sciwggaeogcoesiu; } $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if (!isset($uiewakwqscemywuo["\163\x75\x63\x63\x65\x73\x73"]) || !$uiewakwqscemywuo["\163\165\x63\x63\145\163\x73"]) { goto kuicqywysciceggs; } if ($this->cskwmweqysskwckg("\161\x75\x65\x72\171\137\x73\164\x72\151\156\x67") && !$this->koguieumooaesyww()) { goto csscmcacoikwsecs; } if ($this->cskwmweqysskwckg("\x72\145\152\x65\143\164\145\x64\137\143\157\157\153\x69\145") && $this->cokqaygwwygweuyk()) { goto myoicgcuugciueis; } if ($this->cskwmweqysskwckg("\151\147\x6e\157\162\145\144\137\x75\x72\x6c\x73") && $this->sywgeyscigqsokyg()) { goto qgoiooayqmqqsiok; } if (!($this->cskwmweqysskwckg("\162\x65\x73\164") && $this->okimameeykkqkuww())) { goto qogqewiwmwiwskgm; } $uamcoiueqaamsqma = "\x49\147\x6e\157\162\145\144\40\x75\x72\x6c\x20\x72\145\x73\x74\40\162\145\x71\165\145\163\x74\x73\56"; qogqewiwmwiwskgm: goto qwigomakwmyiwkgo; qgoiooayqmqqsiok: $uamcoiueqaamsqma = "\x49\147\156\x6f\x72\x65\x64\x20\x75\x72\154\40\x66\x6f\165\x6e\144\56"; qwigomakwmyiwkgo: goto asmecuqiyyswueqe; myoicgcuugciueis: $uamcoiueqaamsqma = "\105\170\143\x6c\x75\x64\145\144\x20\x63\x6f\x6f\153\151\145\40\x66\157\165\156\x64\56"; $mgkceomocowocqyo = ["\145\x78\x63\x6c\165\x64\145\144\x5f\143\x6f\157\x6b\151\145\163" => $this->cokqaygwwygweuyk()]; asmecuqiyyswueqe: goto cuykwgmswkskqkyi; csscmcacoikwsecs: $uamcoiueqaamsqma = "\121\165\x65\x72\171\x20\163\164\x72\x69\156\147\x20\x55\122\114\x20\x69\x73\x20\145\x78\x63\154\x75\144\145\x64\x2e"; cuykwgmswkskqkyi: goto mkwskuycuyguqqok; kuicqywysciceggs: $uamcoiueqaamsqma = "\x4e\x6f\x20\143\x6f\156\x66\x69\x67\40\146\x69\154\145\40\146\x6f\165\156\144\56"; $mgkceomocowocqyo = ["\x63\x6f\156\x66\x69\x67\137\160\x61\x74\150" => $uiewakwqscemywuo["\160\x61\x74\150"]]; mkwskuycuyguqqok: sciwggaeogcoesiu: goto kwagwqyusyiyoaqs; eqkauqciwewmgeoi: $uamcoiueqaamsqma = "\122\145\161\x75\x65\163\164\x20\x6d\x65\164\150\x6f\144\x20\x69\x73\40\156\x6f\164\40\141\154\154\x6f\167\x65\x64\56\x20\x50\141\x67\x65\x20\143\141\x6e\156\157\164\x20\142\145\x20\143\141\143\150\145\x64\x2e"; $mgkceomocowocqyo = ["\162\145\x71\x75\145\163\164\137\155\x65\164\150\157\144" => $this->ciyocmkwssocskiy()]; kwagwqyusyiyoaqs: goto kiqogmwcgcamwiig; yowsmsiyimmimemc: $uamcoiueqaamsqma = "\x43\x75\163\x74\157\155\151\x7a\x65\x72\x20\160\x72\x65\166\x69\x65\x77\40\151\x73\x20\x65\170\143\x6c\x75\144\x65\144\56"; kiqogmwcgcamwiig: goto sqiciiuwmykocycc; iomcaiwewsawiamu: $uamcoiueqaamsqma = "\x41\x64\155\x69\x6e\40\157\162\40\101\112\x41\130\x20\125\x52\114\x20\x69\x73\x20\145\170\x63\x6c\x75\144\145\x64\56"; sqiciiuwmykocycc: goto uukumskkeggaowck; eequksumcoogyoem: $uamcoiueqaamsqma = "\x50\110\x50\x2c\40\x58\x4d\114\54\x20\157\x72\40\130\123\114\40\x66\x69\x6c\x65\40\x69\163\40\x65\170\143\x6c\x75\144\145\x64\x2e"; uukumskkeggaowck: goto ocokwuuquaokmasc; cggowoquuiwqkyew: $uamcoiueqaamsqma = "\122\x6f\x62\157\164\163\56\164\170\x74\x20\x6f\x72\40\x2e\150\164\141\143\x63\x65\163\163\x20\x66\x69\154\145\40\151\x73\x20\x65\x78\x63\154\x75\x64\x65\x64\x2e"; ocokwuuquaokmasc: $yciaosuiyeieceug = true; if (!$uamcoiueqaamsqma) { goto yiwiqaqmwiogawym; } $this->log($uamcoiueqaamsqma, $mgkceomocowocqyo); $yciaosuiyeieceug = false; yiwiqaqmwiogawym: return $yciaosuiyeieceug; } public function ocysssyiuaueqiei($iqaosyayeiuaisqi = null) : bool { return (bool) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\157\x70\x74\137\x61\154\154\157\x77\x5f\164\x6f\137\157\x70\x74\x69\x6d\x69\x7a\145"), false, $iqaosyayeiuaisqi); } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { $yciaosuiyeieceug = true; $this->lastError = []; if (strlen($moooemyaqewumiay) <= 255) { goto cgewcsueoyaeikgm; } if (!$this->ocysssyiuaueqiei("\154\145\166\145\x6c\x2d\61")) { goto ygkcacsyyckescqs; } if (http_response_code() !== 200) { goto ickcmqoiosquugwe; } if ($this->cskwmweqysskwckg("\144\157\x6e\x6f\164\x63\x61\x63\x68\145\x70\x61\147\x65") && $this->uykysuaiooyewmsc()) { goto goeoymmqqqeeoime; } if ($this->cskwmweqysskwckg("\167\x70\137\64\60\x34") && $this->kmmyuiwaogukwqqi()) { goto qgegkeomwscwwiuw; } if ($this->cskwmweqysskwckg("\163\145\141\x72\143\x68") && $this->gouusicsisumuiei()) { goto egasokooagakisiy; } if ($this->cskwmweqysskwckg("\141\x6a\141\170") && $this->mcgoysmkqsqooceq()) { goto usqgaogkqgemuima; } if ($this->cskwmweqysskwckg("\143\x72\x6f\156") && $this->auqoeckqueqiiike()) { goto meawswgwagoqgkye; } if (!($this->cskwmweqysskwckg("\162\x65\163\x74") && $this->okimameeykkqkuww())) { goto goacqqsgaaigyuaw; } $this->log("\122\x65\163\164\x20\x41\x50\x49\x20\122\x65\x71\165\x65\163\164\x20\x69\163\x20\145\170\143\x6c\x75\x64\x65\144\x2e"); $yciaosuiyeieceug = false; goacqqsgaaigyuaw: goto wcesymwqykqoyuqk; meawswgwagoqgkye: $this->log("\103\x72\157\x6e\x20\x52\x65\161\165\x65\163\164\x20\x69\163\x20\145\x78\143\154\165\144\145\144\56"); $yciaosuiyeieceug = false; wcesymwqykqoyuqk: goto mswsoaimesegiiic; usqgaogkqgemuima: $this->log("\x41\x6a\141\x78\40\122\145\161\x75\x65\x73\164\x20\151\x73\40\x65\x78\x63\154\165\x64\145\144\x2e"); $yciaosuiyeieceug = false; mswsoaimesegiiic: goto kecwuwwcwokuksyq; egasokooagakisiy: $this->log("\123\145\x61\162\143\x68\40\160\141\x67\145\40\x69\163\40\x65\170\x63\x6c\165\x64\145\x64\x2e"); $yciaosuiyeieceug = false; kecwuwwcwokuksyq: goto qmiwsequckckoaei; qgegkeomwscwwiuw: $this->log("\x57\x50\x20\x34\60\x34\x20\160\141\147\145\x20\151\163\40\x65\x78\143\x6c\165\x64\145\x64\56"); $yciaosuiyeieceug = false; qmiwsequckckoaei: goto eiawsoasmscmqswa; goeoymmqqqeeoime: $this->log("\104\x4f\116\x4f\124\103\x41\103\110\105\120\101\x47\105\40\151\x73\40\144\145\146\151\156\145\144\56\40\120\141\147\x65\40\x63\141\x6e\x6e\x6f\164\40\142\x65\40\143\141\143\150\145\144\56"); $yciaosuiyeieceug = false; eiawsoasmscmqswa: goto qmeoaqmsuseueqiy; ickcmqoiosquugwe: $this->log("\120\x61\x67\145\40\151\163\x20\x6e\157\x74\x20\x61\x20\62\60\x30\40\110\x54\124\x50\40\162\x65\x73\x70\x6f\156\x73\145\x20\141\x6e\144\x20\x63\141\x6e\156\157\164\x20\x62\145\40\x63\141\143\150\x65\x64\x2e"); $yciaosuiyeieceug = false; qmeoaqmsuseueqiy: goto cuoqqgaygogsmmic; ygkcacsyyckescqs: $this->log("\x6e\x6f\x74\40\141\x6c\x6c\x6f\167\40\164\x6f\40\x6f\x70\164\151\155\151\172\x65\40\x74\150\151\163\x20\160\x61\147\145\x2e"); $yciaosuiyeieceug = false; cuoqqgaygogsmmic: goto sukskmcwsoysiuqu; cgewcsueoyaeikgm: $this->log("\x42\165\x66\x66\145\162\40\x63\157\156\164\x65\x6e\164\x20\165\156\x64\x65\x72\40\x32\x35\x35\x20\x63\x61\162\141\143\x74\145\x72\x73\56\72\x20{$moooemyaqewumiay}"); $yciaosuiyeieceug = false; sukskmcwsoysiuqu: return $yciaosuiyeieceug; } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg($ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto igymseewwyiocoug; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]); goto mqccmesakuemceqi; igymseewwyiocoug: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); mqccmesakuemceqi: return $umuecysoywoumgwo; } public function okkwqquawsoemamu(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eyiamcekkgkiawqy; } return $this->eecucukcqkqysiau(__FUNCTION__); eyiamcekkgkiawqy: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto twkmiuomimomscew; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); twkmiuomimomscew: $ucasskoyoewwmmii = ["\x72\x6f\142\x6f\164\163\x2e\x74\x78\164", "\56\x68\164\141\143\143\x65\163\163"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto qcessicwuikwqsis; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qcessicwuikwqsis: qwcegcuowwgiccos: } kooskuwkuayiuose: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yssscwioiyygssec; } return $this->eecucukcqkqysiau(__FUNCTION__); yssscwioiyygssec: $iyiwooigkweeewey = $this->iqyukmiuoisswoei(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($iyiwooigkweeewey && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $iyiwooigkweeewey, $meyiiwcswqmuggyg))) { goto coywmiyqgsweuiic; } if (!($meyiiwcswqmuggyg[0] === $iyiwooigkweeewey)) { goto ieumumsgyguceusy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ieumumsgyguceusy: coywmiyqgsweuiic: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto siqagquguiemuoku; } return $this->eecucukcqkqysiau(__FUNCTION__); siqagquguiemuoku: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto ycakugokkqkuqyiu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ycakugokkqkuqyiu: if (!(strtolower($iyiwooigkweeewey) === "\57\x69\x6e\x64\x65\170\56\x70\x68\160")) { goto oouoqimaaqcmccay; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oouoqimaaqcmccay: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\150\160" => 1, "\x78\x6d\154" => 1, "\x78\x73\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || defined("\x44\x4f\x49\x4e\x47\x5f\101\112\x41\x58") && DOING_AJAX; } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\160\137\143\165\x73\164\157\155\151\172\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\105\124" => 1, "\x48\105\101\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto sycygoiaiqqageym; } return $this->eecucukcqkqysiau(__FUNCTION__); sycygoiaiqqageym: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto gygawoqywkukmqee; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gygawoqywkukmqee: $yccgiaiouekkouay = [ "\x6c\x61\x6e\147" => 1, "\160\x72\145\x6c\157\141\144" => 1, "\157\x70\x74\x2d\160\x72\x65\x6c\x6f\141\x64" => 1, "\160\145\x72\155\x61\x6c\x69\156\x6b\137\x6e\x61\x6d\x65" => 1, "\154\160\x2d\166\x61\x72\x69\x61\164\x69\x6f\156\55\x69\x64" => 1, "\130\x44\x45\x42\125\x47\137\123\x45\x53\x53\x49\117\116\x5f\x53\x54\101\122\124" => 1, ]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto kciouyuaqkyqomam; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kciouyuaqkyqomam: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\x61\143\150\x65\x5f\x71\165\145\x72\x79\137\x73\x74\x72\151\156\x67\163"); if ($yccgiaiouekkouay) { goto wwkgkaecgiwggcck; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wwkgkaecgiwggcck: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto umgaesggesswoaqe; } return $this->eecucukcqkqysiau(__FUNCTION__); umgaesggesswoaqe: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto qsygcycwieukkgwc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qsygcycwieukkgwc: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto kiwqkcaekqqyuegq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kiwqkcaekqqyuegq: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto gimmuoqwckiseaik; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; gimmuoqwckiseaik: iqcogmsguwoikame: } quwcqmyokicssyew: if (empty($eiocugauqgouiuyi)) { goto cmqucgoewuyieoyk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); cmqucgoewuyieoyk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function uykysuaiooyewmsc() : bool { if (!(!defined("\117\120\124\x49\115\111\x5a\x41\x54\111\x4f\x4e\137\x44\117\116\124\x5f\103\101\x43\110\x45\x5f\x50\x41\107\x45") || !OPTIMIZATION_DONT_CACHE_PAGE)) { goto yqykqysmiquwoasu; } return false; yqykqysmiquwoasu: return !apply_filters("\143\141\x63\150\x65\137\157\166\145\162\162\x69\x64\145\137\x64\x6f\x6e\164\x5f\x63\141\143\x68\145\x5f\160\141\147\145", false); } public function kmmyuiwaogukwqqi() : bool { $weksiguqgqscsoee = false; if (!function_exists("\x69\163\137\x34\x30\64")) { goto ayyweymyuuiauamo; } $weksiguqgqscsoee = is_404(); ayyweymyuuiauamo: return $weksiguqgqscsoee; } public function okimameeykkqkuww() : bool { $cccswkigaicmqkkc = "\167\x70\x2d\152\163\157\156"; if (!function_exists("\x72\x65\163\x74\137\147\x65\164\137\165\x72\154\x5f\160\x72\145\146\x69\x78")) { goto mosqsmqimqgqoase; } $cccswkigaicmqkkc = rest_get_url_prefix(); mosqsmqimqgqoase: return false !== strpos($this->iqyukmiuoisswoei(), trailingslashit($cccswkigaicmqkkc)); } public function auqoeckqueqiiike() : bool { $weksiguqgqscsoee = false; if (!function_exists("\x77\160\x5f\144\157\151\x6e\x67\137\143\162\157\x6e")) { goto omugkkesagcyagmk; } $weksiguqgqscsoee = wp_doing_cron(); omugkkesagcyagmk: return $weksiguqgqscsoee; } public function mcgoysmkqsqooceq() : bool { $weksiguqgqscsoee = false; if (function_exists("\167\160\x5f\144\157\x69\156\x67\x5f\x61\x6a\141\170") && wp_doing_ajax()) { goto qqewoyookaskiuek; } if (function_exists("\151\163\x5f\x61\152\x61\170") && is_ajax()) { goto kqksuugcgsyeoayy; } if (!(isset($_SERVER["\x48\124\124\x50\x5f\130\137\122\x45\x51\125\105\123\124\x45\104\x5f\x57\111\124\x48"]) && $_SERVER["\x48\124\124\120\x5f\x58\137\122\x45\121\125\105\x53\124\x45\104\x5f\127\111\124\x48"] === "\x58\x4d\x4c\x48\164\164\x70\x52\145\161\165\x65\163\x74")) { goto ygcsmkuycoagwyou; } $weksiguqgqscsoee = true; ygcsmkuycoagwyou: goto iggyqogweyosuikc; kqksuugcgsyeoayy: $weksiguqgqscsoee = true; iggyqogweyosuikc: goto ssoucoucsgccekwe; qqewoyookaskiuek: $weksiguqgqscsoee = true; ssoucoucsgccekwe: return $weksiguqgqscsoee; } public function gouusicsisumuiei() : bool { if (!(function_exists("\x69\163\x5f\163\x65\141\162\x63\150") && !is_search())) { goto qkcyqocqqwmqgqww; } return false; qkcyqocqqwmqgqww: return !apply_filters("\143\141\x63\150\x65\x5f\x63\141\x63\x68\x65\137\x73\x65\x61\x72\x63\150", false); } public function iqyukmiuoisswoei() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\125\x45\x53\x54\x5f\x55\122\111", ''); if (!$iyiwooigkweeewey) { goto miyqyeiwquwsacsm; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\x2f"); miyqyeiwquwsacsm: return $iyiwooigkweeewey; } public function mcqmgiwowqqyiewk() : string { if (!($iyiwooigkweeewey = $this->iqyukmiuoisswoei())) { goto eegqyykygiccaoeo; } $iyiwooigkweeewey = explode("\77", $iyiwooigkweeewey); $iyiwooigkweeewey = reset($iyiwooigkweeewey); eegqyykygiccaoeo: return $iyiwooigkweeewey; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\121\125\105\123\124\137\x4d\105\124\x48\117\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto wmmggowmigekyoso; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\141\143\x68\145\137\x69\x67\x6e\157\x72\145\x64\137\160\x61\x72\x61\x6d\145\x74\145\x72\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto ywqgcegomwaiuquc; } ksort($eyagkkkqkwcuygso); ywqgcegomwaiuquc: wmmggowmigekyoso: return $eyagkkkqkwcuygso; } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto soqqemyioggmoakg; } $icwicymcioeyeyek["\160\145\x72\155\141\x6c\151\x6e\x6b"] = $this->iqyukmiuoisswoei(); $this->uiagwusgwcassqua($uamcoiueqaamsqma, $icwicymcioeyeyek); soqqemyioggmoakg: } }
