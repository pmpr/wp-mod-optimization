<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a69ee00a3ca             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\162\x69" => 1, "\163\x73\154" => 0, "\x77\x70\137\64\60\64" => 1, "\163\x65\141\162\143\150" => 1, "\155\157\142\151\154\x65" => 1, "\x69\163\137\x68\164\x6d\x6c" => 1, "\x71\165\145\162\171\137\163\x74\x72\151\156\x67" => 1, "\144\x6f\156\x6f\164\x63\x61\x63\x68\x65\x70\141\x67\x65" => 1, "\x72\145\x6a\x65\143\164\145\144\x5f\143\157\157\x6b\151\x65" => 1, "\x6d\141\156\144\x61\x74\x6f\x72\171\137\143\157\x6f\153\x69\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\164\145\163\x74\163"])) { goto iuaeeeeggkikuiig; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\x65\x73\x74\163"]); iuaeeeeggkikuiig: if (!(!isset($ywmkwiwkosakssii["\x63\157\x6f\153\x69\145\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto kmiqskugkmaiugae; } $ywmkwiwkosakssii["\143\157\x6f\x6b\x69\145\163"] = $_COOKIE; kmiqskugkmaiugae: if (!(!isset($ywmkwiwkosakssii["\x70\x6f\x73\164"]) && !empty($_POST) && is_array($_POST))) { goto cqemkecywkkwaaii; } $ywmkwiwkosakssii["\160\157\163\164"] = $_POST; cqemkecywkkwaaii: if (!(!isset($ywmkwiwkosakssii["\x67\x65\x74"]) && !empty($_GET) && is_array($_GET))) { goto wcioaoeiiawwqqqq; } $ywmkwiwkosakssii["\x67\145\x74"] = $_GET; wcioaoeiiawwqqqq: $this->get = !empty($ywmkwiwkosakssii["\x67\x65\164"]) && is_array($ywmkwiwkosakssii["\x67\x65\x74"]) ? $ywmkwiwkosakssii["\x67\x65\164"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\157\x73\x74"]) && is_array($ywmkwiwkosakssii["\x70\157\163\164"]) ? $ywmkwiwkosakssii["\160\157\x73\164"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\x63\157\157\x6b\x69\x65\x73"]) && is_array($ywmkwiwkosakssii["\x63\x6f\157\x6b\151\145\163"]) ? $ywmkwiwkosakssii["\143\x6f\157\153\151\x65\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto qaikeckkiwasykwk; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\x70\x5f\x63\x75\163\164\157\155\151\172\x65" => '']); qaikeckkiwasykwk: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto ieoiygycmseqmmgc; } $this->yauwooaeicgosquo("\x44\x65\x76\x20\x4d\x6f\x64\145\40\x45\x6e\x61\142\x6c\145\x64\40\141\156\x64\40\141\154\x6c\x20\x72\145\161\165\x65\163\x74\40\x69\x73\40\142\171\160\x61\163\163\56"); return false; ieoiygycmseqmmgc: if (!$this->kgkoeoeseyuugaao()) { goto gkuwmiusoqwesqoo; } $this->yauwooaeicgosquo("\x52\x6f\142\157\164\163\56\x74\170\x74\40\157\x72\40\56\150\x74\x61\x63\143\x65\x73\163\40\x66\x69\x6c\x65\40\151\163\x20\145\x78\143\x6c\165\144\x65\144\x2e"); return false; gkuwmiusoqwesqoo: if (!$this->gymgcceeqssmesiu()) { goto wmsiqkyqsiysgcyy; } $this->yauwooaeicgosquo("\120\110\120\x2c\40\x58\x4d\x4c\x2c\x20\157\162\40\x58\123\x4c\x20\146\x69\x6c\x65\40\x69\x73\x20\145\170\143\x6c\x75\x64\145\x64\x2e"); return false; wmsiqkyqsiysgcyy: if (!$this->goecwaaykqoaaagg()) { goto ysggiwiksocomkek; } $this->yauwooaeicgosquo("\101\x64\155\151\156\40\x6f\162\x20\101\x4a\101\130\40\125\122\114\40\x69\x73\x20\145\170\143\154\165\144\x65\x64\x2e"); return false; ysggiwiksocomkek: if (!$this->sgsscqasgeyeicoe()) { goto wkqwywgikoyqkyeg; } $this->yauwooaeicgosquo("\x41\144\155\x69\x6e\x20\157\x72\40\x41\x4a\101\130\x20\x55\122\114\40\151\x73\40\x65\170\143\x6c\165\x64\145\x64\56"); return false; wkqwywgikoyqkyeg: if ($this->gooeyogikcusgwuu()) { goto wqieuwguumokgyqg; } $this->yauwooaeicgosquo("\x52\145\x71\x75\145\163\164\40\x6d\145\x74\150\x6f\x64\x20\x69\163\x20\156\x6f\x74\x20\x61\154\154\157\x77\145\144\x2e\40\120\141\x67\145\40\143\141\x6e\156\x6f\x74\x20\142\x65\40\x63\x61\143\150\145\x64\56", ["\162\145\161\x75\x65\x73\164\x5f\155\x65\164\150\x6f\x64" => $this->ciyocmkwssocskiy()]); return false; wqieuwguumokgyqg: if ($this->cskwmweqysskwckg()) { goto aueiggyawkmkamum; } $this->lastError = []; return true; aueiggyawkmkamum: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\x73\x75\x63\143\145\x73\x73"]) { goto qswqmgiwiyyqwioa; } $this->yauwooaeicgosquo("\x4e\157\x20\x63\x6f\156\x66\151\147\x20\x66\x69\154\x65\40\x66\x6f\165\x6e\144", ["\x63\157\156\x66\x69\x67\x5f\x70\141\164\x68" => $uiewakwqscemywuo["\x70\141\164\x68"]]); return false; qswqmgiwiyyqwioa: if (!($this->cskwmweqysskwckg("\161\165\145\x72\171\x5f\163\164\162\151\156\147") && !$this->koguieumooaesyww())) { goto omekuqkuugyocmoc; } $this->yauwooaeicgosquo("\x51\x75\145\162\x79\x20\163\164\162\x69\x6e\147\x20\125\x52\114\x20\151\x73\40\145\x78\143\154\x75\144\145\x64\56", $_GET); return false; omekuqkuugyocmoc: if (!($this->cskwmweqysskwckg("\163\x73\x6c") & !$this->eqwgocqwoyyykwke())) { goto giuswooyckooaoms; } $this->yauwooaeicgosquo("\x53\x53\x4c\x20\x63\x61\143\150\145\40\x6e\157\x74\40\x61\160\160\154\151\x65\x64\x20\x74\x6f\40\160\x61\x67\x65\56"); return false; giuswooyckooaoms: if (!($this->cskwmweqysskwckg("\165\162\151") && !$this->qweiomkkuikwugks())) { goto uogkcsaewswoaosw; } $this->yauwooaeicgosquo("\x50\141\x67\145\x20\x69\163\x20\145\170\x63\x6c\x75\x64\145\x64\56"); return false; uogkcsaewswoaosw: if (!($this->cskwmweqysskwckg("\x72\x65\x6a\x65\x63\164\145\144\x5f\143\157\x6f\153\x69\x65") && $this->cokqaygwwygweuyk())) { goto miqmoasmioksggkm; } $this->yauwooaeicgosquo("\105\170\x63\x6c\x75\144\x65\x64\40\143\157\x6f\153\151\145\40\146\157\165\x6e\144\56", ["\145\170\x63\x6c\165\x64\145\x64\x5f\143\157\x6f\153\x69\145\163" => $this->cokqaygwwygweuyk()]); return false; miqmoasmioksggkm: if (!($this->cskwmweqysskwckg("\x6d\x61\x6e\144\141\x74\157\162\x79\137\143\157\x6f\153\151\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto cykaikwsaskgeemo; } $this->yauwooaeicgosquo("\x4d\151\x73\x73\x69\156\x67\40\x6d\141\156\144\141\164\157\162\x79\40\143\x6f\157\153\x69\x65\72\x20\x70\141\147\145\40\156\157\164\x20\160\162\157\x63\145\163\163\145\x64\x2e", ["\155\x69\x73\x73\151\x6e\147\137\143\157\x6f\x6b\x69\145\x73" => $this->qgymyeqwqaiwmmea()]); return false; cykaikwsaskgeemo: if (!($this->cskwmweqysskwckg("\165\x73\145\162\137\141\147\145\156\164") && !$this->mqiqsuksgyekwkii())) { goto eqemoayymokeqaqi; } $this->yauwooaeicgosquo("\x55\163\145\x72\40\x41\147\145\156\164\40\x69\163\x20\145\x78\143\154\x75\144\145\x64\x2e", ["\x75\163\145\162\137\x61\x67\145\156\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\x5f\125\x53\105\x52\x5f\101\107\x45\116\x54")]); return false; eqemoayymokeqaqi: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto keewmqmgqegumiwa; } $this->yauwooaeicgosquo("\x42\165\146\146\x65\x72\x20\143\x6f\156\x74\x65\x6e\164\40\x75\x6e\144\145\x72\40\x32\x35\65\x20\x63\x68\141\x72\141\143\x74\x65\162\x73\x2e"); return false; keewmqmgqegumiwa: if (!(http_response_code() !== 200)) { goto oqsecqsucukywaee; } $this->yauwooaeicgosquo("\120\141\147\145\40\151\163\x20\156\x6f\164\40\x61\x20\x32\x30\x30\40\110\x54\124\x50\40\162\x65\x73\160\157\156\x73\145\x20\x61\x6e\x64\40\143\141\x6e\x6e\x6f\164\40\x62\x65\x20\143\141\x63\x68\145\x64\x2e"); return false; oqsecqsucukywaee: if (!($this->cskwmweqysskwckg("\x64\157\156\157\x74\157\x70\164\x69\155\x69\172\145\x70\x61\147\x65") && $this->cowcgqokiosgaqic())) { goto iqamwyasyoqsugeu; } $this->yauwooaeicgosquo("\x44\x4f\116\x54\117\x50\x54\x49\115\111\x5a\x45\x44\120\x41\x47\105\40\x69\163\40\144\x65\x66\151\156\145\x64\x2e\x20\x50\x61\x67\x65\40\x63\141\156\156\x6f\164\x20\x62\x65\40\x63\141\x63\x68\x65\144\56"); return false; iqamwyasyoqsugeu: if (!($this->cskwmweqysskwckg("\x77\160\137\64\60\64") && $this->kmmyuiwaogukwqqi())) { goto uiqycwuommmmuowy; } $this->yauwooaeicgosquo("\127\120\x20\64\x30\64\x20\x70\x61\147\x65\40\x69\x73\x20\x65\x78\x63\x6c\165\x64\x65\144\56"); return false; uiqycwuommmmuowy: if (!($this->cskwmweqysskwckg("\163\x65\141\162\143\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto moqcomgmwiamuomq; } $this->yauwooaeicgosquo("\123\x65\141\x72\x63\x68\40\160\x61\147\145\40\151\163\x20\x65\170\x63\x6c\165\144\145\x64\56"); return false; moqcomgmwiamuomq: if (!$this->cskwmweqysskwckg("\151\163\137\150\x74\x6d\x6c")) { goto kumuckkicykgwqqm; } if (!($this->cmaecekuqkwmemms("\x52\x45\123\124\137\x52\105\121\x55\x45\x53\x54") || $this->gaiygescoqgyusaa())) { goto omgkuuyoiugcymmy; } unset($this->tests["\x69\163\x5f\150\164\155\154"]); omgkuuyoiugcymmy: kumuckkicykgwqqm: if (!($this->cskwmweqysskwckg("\x69\163\137\x68\x74\155\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto sguyyaygwyikaggk; } $this->yauwooaeicgosquo("\x4e\157\40\x63\154\157\163\x69\156\x67\40\x3c\x2f\x68\164\x6d\154\x3e\40\167\141\x73\x20\x66\x6f\165\x6e\144\x2e"); return false; sguyyaygwyikaggk: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\162\x5f\x6f\x70\164\x69\x6d\151\x7a\141\x74\x69\x6f\x6e\137\x61\154\x6c\157\167\x5f\164\x6f\137\x73\164\141\162\164\x5f\142\165\146\x66\x65\x72\x5f\x70\162\x6f\x63\x65\163\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto ayyyeiyaosoacoqm; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto aiwygewkmigcwusw; ayyyeiyaosoacoqm: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); aiwygewkmigcwusw: return apply_filters("\x70\162\137\157\x70\164\151\x6d\151\172\x61\164\151\157\156\137\150\x61\x73\137{$ymqmyyeuycgmigyo}\137\164\x65\x73\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\x2f\74\134\x73\x2a\134\x2f\x5c\163\x2a\150\164\155\x6c\x5c\x73\52\76\57\x69", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\x2f\50\x3f\x3a\x2e\53\x2f\x29\77" . $wp_rewrite->feed_base . "\50\x3f\x3a\57\x28\x3f\72\x2e\53\x2f\x3f\x29\x3f\51\x3f\44"; return (bool) preg_match("\x23\136\x28{$uckmmkmoeikwsiqg}\51\x24\x23\151", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\x64\x65\166\x5f\155\157\x64\145"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ekmogkwmcqsykgsq; } return $this->eecucukcqkqysiau(__FUNCTION__); ekmogkwmcqsykgsq: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto ksoawacwkgasqgmk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ksoawacwkgasqgmk: $ucasskoyoewwmmii = ["\x72\157\x62\x6f\164\163\56\164\x78\164", "\56\x68\x74\x61\x63\x63\x65\163\163"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto cscskwugoamcmqyu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cscskwugoamcmqyu: wgaqkacekoyiwggi: } yqeqouqemksasmqc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto emioyucskiowqumg; } return $this->eecucukcqkqysiau(__FUNCTION__); emioyucskiowqumg: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto suwsiaeoumiwkiqg; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto jkaemsuwyyoamwim; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); jkaemsuwyyoamwim: suwsiaeoumiwkiqg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yoauoocuckogmsuw; } return $this->eecucukcqkqysiau(__FUNCTION__); yoauoocuckogmsuw: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto amyaoueckysgmmas; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); amyaoueckysgmmas: if (!(strtolower($iyiwooigkweeewey) === "\57\x69\x6e\x64\x65\170\56\x70\150\160")) { goto koiyaaokigmamqyc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); koiyaaokigmamqyc: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\150\160" => 1, "\170\x6d\x6c" => 1, "\170\x73\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\x4f\111\116\x47\x5f\x41\112\x41\x58"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\x50\123")), ["\157\x6e", "\61"]) || "\x34\64\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\x52\126\105\x52\x5f\x50\117\x52\x54"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\x70\x5f\143\x75\x73\x74\157\155\x69\x7a\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\105\x54" => 1, "\x48\105\101\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qiqegseqwywcmwoe; } return $this->eecucukcqkqysiau(__FUNCTION__); qiqegseqwywcmwoe: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto yosyyiksyyscacus; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yosyyiksyyscacus: $yccgiaiouekkouay = ["\163" => 1, "\154\141\156\147" => 1, "\x70\x65\x72\155\141\x6c\151\156\153\x5f\156\141\x6d\145" => 1, "\154\x70\55\x76\x61\x72\x69\x61\164\151\157\156\55\151\144" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto kwcscewawgicomok; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kwcscewawgicomok: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\x61\143\150\x65\137\x71\x75\145\x72\171\137\x73\x74\x72\151\156\x67\163"); if ($yccgiaiouekkouay) { goto kikkkocywiyuyuqw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kikkkocywiyuyuqw: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto aqeyqwuywqcmuoce; } return $this->eecucukcqkqysiau(__FUNCTION__); aqeyqwuywqcmuoce: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto aymoguycgmuggcik; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); aymoguycgmuggcik: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto qayiqaykkywcyisq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qayiqaykkywcyisq: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto cueuscqkicwwicei; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; cueuscqkicwwicei: oaociaioauummsey: } akoweomooyuwamow: if (empty($eiocugauqgouiuyi)) { goto gcecamucuogcciig; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); gcecamucuogcciig: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto suscosoukqeyyqgs; } return $this->eecucukcqkqysiau(__FUNCTION__); suscosoukqeyyqgs: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto kiewcwsykccgocuc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kiewcwsykccgocuc: $yiycakoikkyuokgk = array_flip(explode("\174", $this->aceaeommyuooiqge()->get("\143\141\x63\x68\x65\x5f\155\141\156\144\x61\x74\157\x72\171\x5f\x63\x6f\x6f\153\x69\x65\163"))); if ($this->wemyikwikgwqwuoc()) { goto eysuawiooiswaseq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); eysuawiooiswaseq: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto egiauwuekseyeaeq; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); egiauwuekseyeaeq: eogomkswkaqwyycm: } iecqkqoiqimmisyw: if (!empty($yiycakoikkyuokgk)) { goto euuekiyqwkowiees; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); euuekiyqwkowiees: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\160\162\x5f\157\x70\164\151\155\x69\172\x61\x74\x69\157\156\137\x6f\166\145\x72\x72\x69\144\145\x5f\x64\x6f\x6e\164\x5f\157\x70\164\151\x6d\x69\172\145", $this->cmaecekuqkwmemms("\x50\x52\137\x4f\120\x54\111\115\x49\x5a\101\x54\111\117\x4e\137\104\117\116\124\137\x4f\x50\124\x49\115\111\132\x45", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\x73\x5f\x34\60\x34") && is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\x69\163\137\163\145\x61\x72\x63\150") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\x72\x5f\x6f\x70\164\x69\x6d\x69\172\x61\164\151\157\x6e\137\x6f\160\164\151\155\151\x7a\145\137\x73\x65\x61\162\143\x68", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\x63\x61\x63\x68\x65\137\163\163\x6c"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto assoyoeukmqiucyq; } return $this->eecucukcqkqysiau(__FUNCTION__); assoyoeukmqiucyq: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto kikkkoqiumqoeiyy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kikkkoqiumqoeiyy: if (!$this->aceaeommyuooiqge()->get("\155\x6f\142\x69\154\x65\137\143\x61\143\150\145")) { goto wyqueeskecameuks; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wyqueeskecameuks: $wayquiskgeuoqamk = "\x32\56\x30\x5c\x20\x4d\115\x50\x7c\x32\64\60\x78\x33\62\60\x7c\x34\x30\x30\130\x32\64\x30\x7c\x41\x76\x61\156\164\x47\157\x7c\x42\x6c\x61\143\153\x42\x65\x72\x72\x79\174\x42\x6c\x61\x7a\145\x72\x7c\x43\x65\154\x6c\160\150\157\156\x65\174\x44\141\x6e\x67\145\162\x7c\x44\x6f\x43\x6f\x4d\x6f\x7c\105\154\141\151\x6e\x65\x2f\63\x2e\60\174\105\165\144\x6f\162\x61\x57\145\142\174\x47\157\157\147\154\145\x62\x6f\x74\55\x4d\157\x62\x69\154\145\x7c\150\x69\x70\x74\x6f\160\174\x49\105\115\157\x62\x69\x6c\145\174\x4b\131\117\x43\105\x52\101\57\127\x58\63\61\60\x4b\x7c\x4c\107\57\125\71\71\x30\174\x4d\111\104\x50\55\62\x2e\x7c\x4d\115\105\106\x32\x30\x7c\115\117\124\x2d\126\174\x4e\145\164\106\x72\157\156\164\174\116\x65\x77\x74\x7c\116\151\x6e\x74\145\x6e\144\157\134\x20\127\151\x69\x7c\116\151\x74\162\x6f\x7c\x4e\157\153\151\141\x7c\x4f\x70\145\x72\141\134\40\x4d\x69\156\151\174\120\x61\154\x6d\x7c\120\154\x61\x79\123\164\x61\164\151\x6f\156\x5c\x20\x50\157\162\164\x61\142\154\145\x7c\x70\x6f\162\164\141\x6c\x6d\155\155\x7c\120\x72\x6f\170\151\x6e\145\x74\x7c\x50\162\x6f\x78\x69\x4e\145\164\x7c\x53\x48\101\122\x50\55\x54\121\x2d\x47\x58\x31\x30\x7c\123\110\x47\55\x69\x39\x30\60\174\x53\x6d\x61\154\154\x7c\x53\x6f\156\x79\105\x72\151\143\x73\x73\157\156\x7c\123\171\x6d\x62\x69\x61\156\134\x20\x4f\123\174\123\x79\x6d\142\x69\141\x6e\117\123\174\124\123\x32\x31\151\55\x31\60\174\125\120\56\x42\162\x6f\x77\x73\145\162\x7c\x55\x50\x2e\114\x69\156\153\174\167\145\x62\x4f\x53\174\127\x69\156\x64\157\167\x73\134\x20\x43\x45\x7c\x57\x69\x6e\127\101\x50\174\131\x61\x68\157\157\123\x65\x65\153\x65\162\57\x4d\61\101\61\55\x52\x32\x44\62\174\x69\120\150\x6f\156\145\174\x69\x50\x6f\144\x7c\101\x6e\144\162\x6f\x69\144\x7c\102\x6c\141\143\x6b\x42\x65\162\x72\171\x39\65\x33\x30\174\114\x47\x2d\x54\125\x39\x31\65\x5c\40\x4f\x62\151\147\157\x7c\x4c\107\x45\134\40\126\130\174\x77\145\x62\117\123\x7c\116\x6f\153\x69\141\65\x38\x30\x30"; if (!preg_match("\43\136\56\52\x28{$wayquiskgeuoqamk}\x29\56\52\43\x69", $uowwycywwssskuys)) { goto esokkakkumskkmiu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); esokkakkumskkmiu: $wayquiskgeuoqamk = "\167\x33\143\134\x20\174\x77\63\143\x2d\x7c\141\143\163\55\174\x61\x6c\141\x76\174\141\154\143\141\x7c\x61\x6d\x6f\x69\x7c\x61\x75\x64\151\x7c\x61\x76\x61\x6e\x7c\x62\x65\156\x71\x7c\142\151\x72\144\x7c\x62\154\141\x63\174\142\x6c\141\172\174\x62\162\x65\x77\x7c\x63\x65\154\154\x7c\x63\x6c\x64\143\x7c\143\x6d\x64\55\174\x64\141\x6e\147\x7c\144\157\143\157\174\x65\x72\x69\x63\x7c\x68\x69\160\164\174\150\x74\143\x5f\174\x69\x6e\156\x6f\174\151\160\x61\161\174\x69\x70\157\144\174\x6a\x69\147\x73\174\153\x64\144\x69\174\x6b\145\152\x69\174\154\x65\x6e\x6f\x7c\154\147\x2d\x63\174\x6c\147\55\144\174\x6c\x67\55\147\x7c\x6c\x67\x65\55\x7c\154\147\57\x75\174\155\141\165\x69\174\x6d\x61\170\x6f\x7c\155\151\144\x70\174\155\151\164\163\174\155\x6d\145\x66\174\x6d\x6f\142\x69\174\155\157\x74\55\174\x6d\157\x74\x6f\x7c\155\x77\142\x70\x7c\x6e\x65\x63\55\x7c\156\x65\x77\164\x7c\156\x6f\153\151\x7c\x70\141\154\x6d\x7c\x70\x61\156\x61\x7c\160\x61\156\x74\174\x70\x68\x69\154\x7c\x70\154\x61\x79\x7c\160\157\162\164\x7c\160\162\157\x78\x7c\161\167\141\x70\x7c\x73\141\x67\145\x7c\163\x61\155\x73\174\163\x61\156\x79\x7c\163\143\x68\x2d\174\163\x65\143\x2d\174\x73\145\156\x64\x7c\163\145\162\x69\174\x73\x67\150\55\174\x73\x68\x61\162\174\x73\151\145\55\174\163\x69\145\x6d\x7c\x73\155\141\x6c\174\x73\x6d\141\x72\174\163\157\x6e\171\x7c\163\160\x68\x2d\x7c\163\x79\155\142\x7c\x74\55\x6d\157\174\164\145\x6c\x69\x7c\164\151\x6d\x2d\x7c\x74\x6f\x73\150\x7c\x74\163\x6d\x2d\174\165\160\147\61\174\x75\160\163\151\x7c\x76\153\55\x76\174\166\157\144\141\174\167\x61\160\x2d\x7c\167\x61\x70\x61\x7c\x77\x61\160\x69\x7c\x77\x61\160\x70\x7c\x77\141\x70\x72\x7c\167\x65\142\143\174\x77\151\156\167\x7c\x77\x69\x6e\x77\x7c\x78\144\x61\x5c\x20\x7c\x78\x64\x61\x2d"; if (!preg_match("\x23\x5e\x28{$wayquiskgeuoqamk}\x29\x2e\x2a\43\151", $uowwycywwssskuys)) { goto msiuqseowuumiwuo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); msiuqseowuumiwuo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gqycmyieayoegcsy; } return $this->eecucukcqkqysiau(__FUNCTION__); gqycmyieayoegcsy: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto sqiyuasgusgawuoi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sqiyuasgusgawuoi: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\x61\143\150\145\x5f\x72\145\x6a\145\143\x74\x5f\x75\x61"); if ($mqsuiayuwmwqaqwm) { goto iayguaeseyaemwkk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); iayguaeseyaemwkk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\43{$mqsuiayuwmwqaqwm}\x23", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto akyiiioycmgqyuok; } return $this->eecucukcqkqysiau(__FUNCTION__); akyiiioycmgqyuok: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\141\x63\150\145\x5f\x72\145\x6a\145\143\x74\137\165\162\x69"); if ($escsaeeosigewsme) { goto ycomeuqeessamows; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ycomeuqeessamows: $yciaosuiyeieceug = !preg_match("\43\136\50{$escsaeeosigewsme}\51\x24\43\x69", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\137\x55\123\x45\122\x5f\x41\x47\105\116\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto owiguescmqyqukui; } return $this->eecucukcqkqysiau(__FUNCTION__); owiguescmqyqukui: $yygmoeguaqyumuui = [ "\110\124\124\x50\137\x43\106\137\x43\117\x4e\x4e\105\103\124\111\116\107\x5f\x49\120", "\110\124\124\x50\x5f\103\x4c\111\105\116\x54\x5f\x49\x50", "\110\124\124\120\137\130\x5f\106\117\x52\127\x41\122\104\105\x44\x5f\106\117\x52", "\x48\124\x54\120\137\x58\x5f\106\117\122\127\101\122\104\105\104", "\110\124\124\x50\137\x58\137\x43\x4c\125\123\124\105\122\x5f\x43\x4c\x49\105\116\124\x5f\111\x50", "\x48\124\124\120\x5f\x58\137\x52\x45\101\x4c\137\111\x50", "\110\124\x54\x50\x5f\106\117\x52\x57\x41\x52\104\105\x44\137\106\x4f\x52", "\x48\124\x54\120\137\x46\117\x52\127\x41\x52\x44\105\x44", "\x52\x45\115\x4f\124\x45\137\x41\x44\x44\122", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto kwowggaooiyqawyq; } $kucumcusyyckayas = explode("\54", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto mcuoyseuwoueyaie; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); mcuoyseuwoueyaie: kwowggaooiyqawyq: mqacqosyicuiqwia: } guummoewucyeuiek: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\x30\56\x30\x2e\60\x2e\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ieoeeyieoskuyiyw; } return $this->eecucukcqkqysiau(__FUNCTION__); ieoeeyieoskuyiyw: $yywgiquyoymymqwk = [ "\62\x30\x38\56\x37\60\x2e\62\64\x37\x2e\61\65\x37" => '', "\61\x37\62\56\62\65\65\x2e\x34\70\56\x31\x33\x30" => '', "\x31\x37\62\56\x32\x35\x35\56\64\70\56\61\63\x31" => '', "\61\67\62\x2e\62\65\x35\x2e\64\x38\56\61\x33\62" => '', "\61\67\62\56\62\x35\65\x2e\64\x38\x2e\x31\x33\x33" => '', "\x31\67\62\x2e\62\x35\65\x2e\64\x38\56\61\63\64" => '', "\61\67\62\56\x32\x35\x35\x2e\x34\x38\56\61\63\x35" => '', "\61\x37\x32\x2e\x32\x35\65\56\x34\70\56\61\x33\66" => '', "\x31\x37\x32\x2e\62\65\65\56\64\x38\56\x31\x33\x37" => '', "\61\x37\62\56\x32\x35\x35\x2e\64\70\56\61\63\x38" => '', "\61\x37\62\x2e\62\x35\x35\x2e\64\x38\56\61\63\71" => '', "\61\67\x32\x2e\62\x35\65\x2e\64\70\56\x31\64\x30" => '', "\x31\67\62\x2e\x32\65\65\56\x34\70\x2e\x31\x34\61" => '', "\61\67\62\56\x32\65\65\x2e\x34\70\x2e\61\x34\x32" => '', "\x31\x37\x32\x2e\62\x35\65\56\x34\70\56\61\64\x33" => '', "\61\x37\x32\56\62\x35\65\56\64\x38\56\61\64\64" => '', "\61\x37\62\x2e\62\65\65\56\64\70\56\x31\x34\65" => '', "\x31\x37\x32\56\62\x35\65\56\x34\x38\x2e\x31\x34\66" => '', "\x31\x37\62\56\x32\x35\x35\x2e\x34\x38\x2e\x31\64\x37" => '', "\65\x32\x2e\62\62\71\x2e\x31\62\x32\x2e\x32\64\60" => '', "\61\x30\64\x2e\x32\x31\64\x2e\67\x32\56\61\x30\61" => '', "\61\x33\56\66\66\56\67\x2e\x31\x31" => '', "\61\63\56\x38\x35\56\62\x34\x2e\70\x33" => '', "\61\63\x2e\x38\65\56\x32\64\x2e\71\x30" => '', "\61\63\x2e\70\x35\x2e\x38\x32\x2e\62\66" => '', "\x34\60\56\67\x34\x2e\x32\64\x32\x2e\62\x35\63" => '', "\x34\60\56\x37\x34\x2e\62\64\63\x2e\x31\x33" => '', "\x34\60\56\67\x34\x2e\62\x34\63\56\61\67\x36" => '', "\x31\x30\x34\x2e\62\x31\64\x2e\x34\70\56\62\x34\67" => '', "\x31\65\67\x2e\x35\x35\56\61\x38\x39\56\61\x38\x39" => '', "\61\60\x34\56\x32\61\64\x2e\x31\x31\60\x2e\x31\63\x35" => '', "\x37\x30\56\x33\67\56\x38\63\x2e\62\64\x30" => '', "\66\x35\x2e\65\x32\56\x33\66\56\x32\65\60" => '', "\x31\x33\56\67\x38\x2e\62\x31\x36\x2e\65\x36" => '', "\65\62\56\61\x36\62\56\x32\x31\62\56\61\x36\x33" => '', "\62\x33\56\71\66\56\63\x34\x2e\61\x30\x35" => '', "\66\x35\56\x35\x32\x2e\61\61\x33\56\x32\63\x36" => '', "\x31\67\x32\56\62\x35\x35\x2e\x36\x31\56\63\x34" => '', "\x31\67\62\x2e\x32\x35\65\56\x36\61\56\x33\65" => '', "\61\67\62\56\62\x35\x35\x2e\x36\61\56\x33\66" => '', "\x31\67\62\x2e\62\x35\65\x2e\66\x31\56\x33\67" => '', "\x31\67\x32\56\x32\65\x35\x2e\66\x31\56\63\70" => '', "\61\67\62\x2e\62\x35\65\x2e\66\61\56\x33\x39" => '', "\x31\67\62\x2e\62\x35\x35\56\x36\61\56\64\x30" => '', "\65\x32\x2e\62\63\67\x2e\62\63\65\x2e\61\x38\65" => '', "\65\x32\x2e\62\x33\67\56\x32\x35\60\x2e\67\63" => '', "\65\62\x2e\x32\63\x37\56\62\63\66\56\61\64\x35" => '', "\61\x30\x34\x2e\64\x31\56\62\x2e\61\71" => '', "\61\x39\x31\x2e\x32\x33\x35\x2e\x39\70\x2e\61\x36\x34" => '', "\x31\71\61\56\x32\x33\65\x2e\71\x39\x2e\62\62\61" => '', "\x31\x39\x31\56\62\x33\x32\x2e\x31\x39\x34\x2e\65\61" => '', "\x31\60\64\x2e\x32\x31\61\56\x31\x34\x33\x2e\70" => '', "\x31\x30\64\56\x32\x31\x31\x2e\x31\x36\65\56\65\x33" => '', "\x35\62\56\61\67\x32\56\61\64\56\x38\67" => '', "\64\x30\x2e\70\x33\x2e\70\71\x2e\x32\x31\64" => '', "\65\x32\56\x31\x37\x35\56\65\67\56\70\61" => '', "\x32\60\x2e\61\x38\70\x2e\66\63\56\x31\65\61" => '', "\x32\60\56\x35\x32\x2e\63\66\56\64\71" => '', "\65\x32\x2e\62\64\x36\x2e\61\66\x35\x2e\61\x35\x33" => '', "\65\x31\56\61\64\64\x2e\x31\60\x32\x2e\x32\x33\63" => '', "\61\63\56\x37\x36\x2e\x39\x37\x2e\x32\x32\x34" => '', "\61\60\62\56\61\x33\63\56\61\66\x39\x2e\66\66" => '', "\x35\x32\56\62\63\61\56\x31\x39\x39\x2e\x31\x37\60" => '', "\x31\63\x2e\65\x33\x2e\61\x36\x32\56\x37" => '', "\64\60\56\61\x32\x33\56\x32\61\70\56\71\x34" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto ciiyqsiswkcwsocm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ciiyqsiswkcwsocm: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\137\125\123\x45\x52\137\x41\107\x45\116\x54"); if ($uowwycywwssskuys) { goto ugyawwukegyoqmsq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ugyawwukegyoqmsq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\x50\x69\x6e\147\144\157\x6d\x50\141\x67\x65\123\x70\145\145\144\x7c\x44\141\162\145\x42\157\157\163\164\x7c\107\x6f\157\147\x6c\x65\x7c\120\x54\123\124\174\x43\150\x72\157\155\x65\x2d\114\x69\x67\150\164\x68\x6f\165\x73\x65\x7c\x57\x50\x20\x52\x6f\x63\x6b\145\x74\43\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\121\x55\x45\x53\x54\137\x55\x52\111", ''); if (!$iyiwooigkweeewey) { goto soqkewsayowwcmco; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\57"); soqkewsayowwcmco: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto ukigmkeewuqomooc; } return ''; ukigmkeewuqomooc: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto wwgikwuigiiqsswq; } return $magawcseesgowoeo; wwgikwuigiiqsswq: return "{$magawcseesgowoeo}\x3f{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto seyygcwcaogkmaqe; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); seyygcwcaogkmaqe: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\x51\x55\105\x53\124\x5f\x4d\x45\124\110\117\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto ykcmomsiayaymysm; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\141\143\150\145\x5f\151\147\156\157\x72\145\144\137\x70\x61\162\141\155\x65\164\145\162\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto uugiuqkesegaamqw; } ksort($eyagkkkqkwcuygso); uugiuqkesegaamqw: ykcmomsiayaymysm: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; uwyeycaywowwiquu: if (!(strpos($euueacigmgoqkimu, "\x2e\57") !== false || strpos($euueacigmgoqkimu, "\57\56") !== false || "\x2e" === $euueacigmgoqkimu || "\x2e\x2e" === $euueacigmgoqkimu)) { goto qoaawmmcqyacokws; } if (strpos($euueacigmgoqkimu, "\56\x2e\57") === 0) { goto gscyiqmmegqmqcoe; } if (strpos($euueacigmgoqkimu, "\x2e\57") === 0) { goto cciakcwuweqmcose; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\57") === 0) { goto kkckyqmcyussauma; } if ("\x2f\x2e" === $euueacigmgoqkimu) { goto oksqsucimimsswcg; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\x2e\x2f") === 0) { goto gcecieuocqawmgci; } if ("\57\56\x2e" === $euueacigmgoqkimu) { goto kcwgiwimgqesukqu; } if ("\56" === $euueacigmgoqkimu || "\x2e\x2e" === $euueacigmgoqkimu) { goto ggsugekocmsukuci; } if (strpos($euueacigmgoqkimu, "\57", 1) !== false) { goto cwmuqmoeauqcewoy; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto eiecgqokmuekaesc; cwmuqmoeauqcewoy: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); eiecgqokmuekaesc: goto ceosmkqgqgwsowwg; ggsugekocmsukuci: $euueacigmgoqkimu = ''; ceosmkqgqgwsowwg: goto wicuauokauykwoeu; kcwgiwimgqesukqu: $euueacigmgoqkimu = "\x2f"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); wicuauokauykwoeu: goto msmmiaumiasmsiog; gcecieuocqawmgci: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); msmmiaumiasmsiog: goto gqeoaceyoiicoaec; oksqsucimimsswcg: $euueacigmgoqkimu = "\x2f"; gqeoaceyoiicoaec: goto ikukqooiowqywyqo; kkckyqmcyussauma: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); ikukqooiowqywyqo: goto uckusgwkoycmkeam; cciakcwuweqmcose: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); uckusgwkoycmkeam: goto mieoguuqiwqioeqa; gscyiqmmegqmqcoe: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); mieoguuqiwqioeqa: goto uwyeycaywowwiquu; qoaawmmcqyacokws: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto qosswumywsaeyqus; } $icwicymcioeyeyek["\x70\x65\162\x6d\141\154\151\x6e\x6b"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); qosswumywsaeyqus: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto swicauyqusmgeccu; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); swicauyqusmgeccu: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto maguoggkqamaiuag; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); maguoggkqamaiuag: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\162\x6c"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\155\145\x73\163\x61\x67\145" => $uamcoiueqaamsqma, "\x63\157\x6e\x74\x65\x78\164" => $icwicymcioeyeyek]; } }
