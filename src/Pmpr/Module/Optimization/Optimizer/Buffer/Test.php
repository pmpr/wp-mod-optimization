<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cf4c4bca826             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\x72\151" => 1, "\163\x73\154" => 0, "\x77\x70\x5f\x34\60\64" => 1, "\x73\145\141\162\143\150" => 1, "\x6d\157\142\x69\154\145" => 1, "\x69\163\x5f\x68\164\155\154" => 1, "\161\x75\x65\162\x79\x5f\x73\164\162\x69\x6e\147" => 1, "\144\157\156\157\x74\x63\x61\x63\150\x65\x70\x61\x67\145" => 1, "\162\145\x6a\145\x63\x74\145\x64\137\143\x6f\x6f\x6b\x69\145" => 1, "\x6d\x61\156\x64\x61\164\x6f\x72\x79\x5f\x63\x6f\x6f\x6b\x69\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\145\163\164\163"])) { goto gcckqucukawcasgk; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\145\x73\x74\x73"]); gcckqucukawcasgk: if (!(!isset($ywmkwiwkosakssii["\x63\x6f\157\153\x69\145\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto qmkaeeomgkwggoyo; } $ywmkwiwkosakssii["\x63\157\x6f\153\x69\145\x73"] = $_COOKIE; qmkaeeomgkwggoyo: if (!(!isset($ywmkwiwkosakssii["\160\x6f\163\164"]) && !empty($_POST) && is_array($_POST))) { goto csammceowmqwaamq; } $ywmkwiwkosakssii["\160\x6f\x73\164"] = $_POST; csammceowmqwaamq: if (!(!isset($ywmkwiwkosakssii["\147\x65\x74"]) && !empty($_GET) && is_array($_GET))) { goto ocaguquugeamqckq; } $ywmkwiwkosakssii["\x67\145\164"] = $_GET; ocaguquugeamqckq: $this->get = !empty($ywmkwiwkosakssii["\x67\x65\164"]) && is_array($ywmkwiwkosakssii["\147\x65\164"]) ? $ywmkwiwkosakssii["\x67\145\164"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\157\x73\164"]) && is_array($ywmkwiwkosakssii["\x70\x6f\x73\x74"]) ? $ywmkwiwkosakssii["\160\x6f\x73\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\x6f\x6f\x6b\x69\x65\163"]) && is_array($ywmkwiwkosakssii["\143\157\157\153\x69\x65\x73"]) ? $ywmkwiwkosakssii["\143\157\x6f\153\x69\145\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto eekcoeikaeaaeyii; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\x70\x5f\143\x75\163\x74\157\155\151\172\x65" => '']); eekcoeikaeaaeyii: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto cogywoqcqummsyus; } $this->yauwooaeicgosquo("\x44\x65\166\x20\x4d\x6f\x64\x65\40\x45\x6e\141\142\x6c\145\x64\40\141\156\x64\40\x61\154\154\x20\162\145\161\x75\x65\163\x74\x20\x69\x73\x20\142\171\160\141\x73\163\56"); return false; cogywoqcqummsyus: if (!$this->kgkoeoeseyuugaao()) { goto gmwykkouysyaqwqm; } $this->yauwooaeicgosquo("\x52\157\142\157\x74\163\x2e\164\170\x74\x20\157\x72\x20\x2e\150\164\x61\x63\143\x65\163\163\40\146\151\x6c\145\40\151\163\x20\145\x78\143\154\165\x64\x65\144\x2e"); return false; gmwykkouysyaqwqm: if (!$this->gymgcceeqssmesiu()) { goto ugqwuugsweqgmywk; } $this->yauwooaeicgosquo("\120\110\x50\54\40\x58\x4d\x4c\54\40\x6f\x72\x20\130\x53\x4c\x20\x66\151\x6c\x65\40\151\163\x20\x65\170\143\x6c\165\144\145\144\x2e"); return false; ugqwuugsweqgmywk: if (!$this->goecwaaykqoaaagg()) { goto uaukmuiwskcemcsw; } $this->yauwooaeicgosquo("\101\144\x6d\x69\x6e\40\157\x72\x20\101\x4a\101\x58\40\x55\x52\114\40\x69\x73\40\x65\x78\143\154\x75\x64\145\x64\x2e"); return false; uaukmuiwskcemcsw: if (!$this->sgsscqasgeyeicoe()) { goto sockeswygwcskeuq; } $this->yauwooaeicgosquo("\101\144\155\151\x6e\x20\x6f\x72\40\x41\x4a\101\x58\x20\125\122\114\x20\x69\x73\x20\145\x78\143\x6c\165\x64\x65\144\x2e"); return false; sockeswygwcskeuq: if ($this->gooeyogikcusgwuu()) { goto mkwkkmkgiqiamacc; } $this->yauwooaeicgosquo("\122\x65\161\165\145\x73\164\40\155\145\164\150\x6f\x64\40\151\163\x20\x6e\157\164\x20\x61\x6c\154\157\x77\x65\x64\56\40\120\141\x67\145\x20\143\141\x6e\x6e\x6f\164\x20\x62\145\40\143\141\x63\150\x65\144\56", ["\x72\145\x71\x75\x65\163\164\137\155\145\164\x68\157\144" => $this->ciyocmkwssocskiy()]); return false; mkwkkmkgiqiamacc: if ($this->cskwmweqysskwckg()) { goto uaqackioaiqwcocy; } $this->lastError = []; return true; uaqackioaiqwcocy: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\x73\x75\x63\143\145\x73\x73"]) { goto cscusseysqygsoiy; } $this->yauwooaeicgosquo("\116\157\x20\x63\x6f\x6e\x66\x69\x67\40\146\151\154\x65\x20\x66\157\x75\156\144", ["\x63\157\156\x66\x69\147\x5f\160\141\x74\x68" => $uiewakwqscemywuo["\160\141\164\x68"]]); return false; cscusseysqygsoiy: if (!($this->cskwmweqysskwckg("\161\165\x65\162\171\137\163\x74\162\x69\156\x67") && !$this->koguieumooaesyww())) { goto isgwkwacoyimiauk; } $this->yauwooaeicgosquo("\121\165\x65\x72\x79\x20\163\x74\x72\x69\156\x67\40\125\122\114\40\151\x73\40\x65\170\143\154\165\144\145\x64\x2e", $_GET); return false; isgwkwacoyimiauk: if (!($this->cskwmweqysskwckg("\x73\163\154") & !$this->eqwgocqwoyyykwke())) { goto mggeqkcksyaymcsa; } $this->yauwooaeicgosquo("\x53\123\x4c\40\x63\141\x63\x68\x65\40\156\157\x74\40\141\160\160\154\x69\145\144\x20\164\157\x20\160\141\x67\x65\56"); return false; mggeqkcksyaymcsa: if (!($this->cskwmweqysskwckg("\x75\162\151") && !$this->qweiomkkuikwugks())) { goto uegouoiuyoqkcscg; } $this->yauwooaeicgosquo("\x50\x61\147\145\40\x69\163\x20\x65\170\143\154\x75\144\145\x64\56"); return false; uegouoiuyoqkcscg: if (!($this->cskwmweqysskwckg("\x72\145\152\145\143\164\145\x64\x5f\143\x6f\157\153\151\145") && $this->cokqaygwwygweuyk())) { goto cgyakcqgugqgkqiw; } $this->yauwooaeicgosquo("\x45\170\143\x6c\165\144\145\144\40\143\157\x6f\x6b\x69\x65\x20\146\x6f\165\x6e\144\x2e", ["\x65\170\x63\x6c\165\x64\145\144\137\143\x6f\157\153\151\145\163" => $this->cokqaygwwygweuyk()]); return false; cgyakcqgugqgkqiw: if (!($this->cskwmweqysskwckg("\155\x61\x6e\x64\141\164\x6f\x72\171\x5f\x63\157\157\153\151\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto eeyyskqsmquyquqw; } $this->yauwooaeicgosquo("\x4d\x69\x73\163\151\156\147\x20\x6d\141\x6e\144\141\164\157\x72\171\x20\143\x6f\x6f\x6b\151\x65\x3a\40\x70\x61\x67\x65\x20\156\157\164\x20\160\x72\157\143\x65\163\x73\145\144\56", ["\x6d\x69\x73\x73\x69\156\147\x5f\143\x6f\x6f\153\x69\x65\163" => $this->qgymyeqwqaiwmmea()]); return false; eeyyskqsmquyquqw: if (!($this->cskwmweqysskwckg("\x75\163\x65\x72\x5f\x61\x67\x65\x6e\x74") && !$this->mqiqsuksgyekwkii())) { goto ewscugeuicukkycc; } $this->yauwooaeicgosquo("\x55\x73\145\x72\40\101\x67\145\156\x74\40\151\163\40\145\170\x63\x6c\x75\x64\145\x64\56", ["\165\x73\x65\162\x5f\x61\147\145\156\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\120\137\x55\x53\105\x52\137\x41\x47\x45\x4e\x54")]); return false; ewscugeuicukkycc: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto kqswcsysqawkcgye; } $this->yauwooaeicgosquo("\102\165\146\x66\145\162\x20\x63\157\156\x74\145\x6e\x74\40\165\156\x64\x65\x72\x20\62\65\65\x20\143\150\x61\x72\x61\143\164\x65\x72\163\x2e"); return false; kqswcsysqawkcgye: if (!(http_response_code() !== 200)) { goto wusciwkkckmqigms; } $this->yauwooaeicgosquo("\120\141\147\x65\40\151\x73\40\156\157\164\x20\x61\40\62\60\x30\40\x48\124\124\120\x20\162\x65\163\x70\x6f\156\x73\145\40\x61\156\144\x20\143\x61\156\x6e\157\x74\40\142\145\x20\x63\x61\x63\x68\x65\144\56"); return false; wusciwkkckmqigms: if (!($this->cskwmweqysskwckg("\144\157\156\157\164\x6f\x70\164\x69\155\x69\x7a\145\160\x61\147\145") && $this->cowcgqokiosgaqic())) { goto iiiccouaaqsyikae; } $this->yauwooaeicgosquo("\x44\x4f\116\x54\117\120\124\111\x4d\111\132\105\x44\x50\101\107\105\40\151\163\40\144\145\146\x69\x6e\145\144\56\x20\x50\141\x67\x65\x20\x63\x61\156\156\x6f\x74\x20\142\x65\x20\x63\141\143\150\145\144\56"); return false; iiiccouaaqsyikae: if (!($this->cskwmweqysskwckg("\167\x70\x5f\x34\60\64") && $this->kmmyuiwaogukwqqi())) { goto ukkcmocamwgiqayu; } $this->yauwooaeicgosquo("\127\120\40\x34\x30\64\40\160\141\147\145\x20\x69\163\40\x65\170\143\x6c\x75\144\x65\144\56"); return false; ukkcmocamwgiqayu: if (!($this->cskwmweqysskwckg("\x73\x65\141\162\x63\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto mwysseaekcsiesmm; } $this->yauwooaeicgosquo("\123\145\141\162\143\x68\x20\160\141\147\145\x20\151\163\x20\145\170\143\154\x75\x64\x65\x64\56"); return false; mwysseaekcsiesmm: if (!$this->cskwmweqysskwckg("\x69\163\x5f\150\x74\155\154")) { goto gygwewcqsmwqismo; } if (!($this->cmaecekuqkwmemms("\122\x45\x53\x54\137\x52\x45\x51\125\x45\x53\x54") || $this->gaiygescoqgyusaa())) { goto amgsueumgaguceaa; } unset($this->tests["\151\163\137\x68\x74\x6d\154"]); amgsueumgaguceaa: gygwewcqsmwqismo: if (!($this->cskwmweqysskwckg("\x69\x73\137\x68\x74\155\x6c") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto uougwgeyiokewkkm; } $this->yauwooaeicgosquo("\x4e\157\40\x63\x6c\x6f\163\x69\x6e\147\x20\74\57\x68\x74\155\154\76\x20\167\141\163\x20\x66\157\x75\x6e\x64\x2e"); return false; uougwgeyiokewkkm: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\162\137\157\x70\164\x69\x6d\151\x7a\141\x74\x69\x6f\156\x5f\141\154\x6c\157\x77\x5f\164\157\137\x73\164\141\162\164\137\x62\165\146\146\x65\162\x5f\160\162\x6f\143\145\x73\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto gommacygsykyussk; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto ukqocwewouckikso; gommacygsykyussk: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); ukqocwewouckikso: return apply_filters("\160\x72\137\157\x70\164\x69\x6d\151\172\x61\x74\x69\157\x6e\137\150\141\x73\137{$ymqmyyeuycgmigyo}\x5f\x74\x65\163\164", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\x2f\x3c\134\x73\x2a\x5c\x2f\x5c\163\52\150\164\x6d\154\134\x73\52\76\x2f\x69", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\x28\77\x3a\x2e\53\57\x29\77" . $wp_rewrite->feed_base . "\50\77\x3a\57\x28\x3f\x3a\56\x2b\57\x3f\51\77\x29\77\x24"; return (bool) preg_match("\x23\x5e\50{$uckmmkmoeikwsiqg}\51\44\x23\x69", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\x64\x65\166\x5f\x6d\157\144\x65"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ucqmumuygcywwqma; } return $this->eecucukcqkqysiau(__FUNCTION__); ucqmumuygcywwqma: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto uykousayyomcaeaa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uykousayyomcaeaa: $ucasskoyoewwmmii = ["\x72\x6f\x62\157\x74\163\x2e\164\170\x74", "\56\150\164\x61\x63\x63\x65\x73\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto kocqqoyymosmuksu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kocqqoyymosmuksu: iuuuususuuuaieem: } uimeeckqksqeekqq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uqokiksoqcwwqgio; } return $this->eecucukcqkqysiau(__FUNCTION__); uqokiksoqcwwqgio: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto sioekkmekwygemyc; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto qukocuwgakemmyga; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qukocuwgakemmyga: sioekkmekwygemyc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yiowgigkkwsoqcci; } return $this->eecucukcqkqysiau(__FUNCTION__); yiowgigkkwsoqcci: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto ieqesiiageaauiuw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ieqesiiageaauiuw: if (!(strtolower($iyiwooigkweeewey) === "\57\x69\x6e\x64\145\170\56\x70\x68\160")) { goto gamqcwuwkikwqoay; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gamqcwuwkikwqoay: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\150\x70" => 1, "\x78\x6d\154" => 1, "\x78\163\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\x44\x4f\111\116\x47\137\101\x4a\101\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\x50\123")), ["\x6f\156", "\61"]) || "\64\64\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\105\122\126\x45\122\137\120\117\122\124"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\x70\137\x63\165\x73\164\x6f\155\151\x7a\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\x45\124" => 1, "\110\105\x41\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mscyggqcesgqqksu; } return $this->eecucukcqkqysiau(__FUNCTION__); mscyggqcesgqqksu: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto oyeyomcgkmgymogq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); oyeyomcgkmgymogq: $yccgiaiouekkouay = ["\163" => 1, "\154\x61\x6e\147" => 1, "\160\x65\x72\155\141\x6c\x69\x6e\153\x5f\x6e\141\155\x65" => 1, "\x6c\160\x2d\166\141\x72\x69\141\164\x69\x6f\156\x2d\x69\x64" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto iesekaeqeomeuaui; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); iesekaeqeomeuaui: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\141\143\150\145\137\x71\165\x65\162\x79\137\163\x74\x72\x69\156\x67\163"); if ($yccgiaiouekkouay) { goto wsesqmcqoiyyqkqi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wsesqmcqoiyyqkqi: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mogkoocsoeuyoqqa; } return $this->eecucukcqkqysiau(__FUNCTION__); mogkoocsoeuyoqqa: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto wkwamkgkwykeqkec; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wkwamkgkwykeqkec: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto oimkeqocuguqqsqk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oimkeqocuguqqsqk: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto yykqaowwsqgqysmq; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; yykqaowwsqgqysmq: suqceasgacskcmkc: } oeocukauoyosicso: if (empty($eiocugauqgouiuyi)) { goto kwiggogcgciwuwqk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); kwiggogcgciwuwqk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uckewycoogsogwiy; } return $this->eecucukcqkqysiau(__FUNCTION__); uckewycoogsogwiy: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto ikuuiauwouuqawuw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ikuuiauwouuqawuw: $yiycakoikkyuokgk = array_flip(explode("\174", $this->aceaeommyuooiqge()->get("\143\x61\x63\150\x65\x5f\x6d\x61\156\144\x61\x74\157\162\171\x5f\143\157\157\x6b\x69\x65\163"))); if ($this->wemyikwikgwqwuoc()) { goto yoqakewookqoqacm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); yoqakewookqoqacm: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto ocywegekakimmwcq; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); ocywegekakimmwcq: yuimwyoywaiiqacs: } gswcoeiisamakwii: if (!empty($yiycakoikkyuokgk)) { goto emqswoaawgeyosmi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); emqswoaawgeyosmi: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\x70\162\137\157\x70\164\x69\x6d\151\172\141\x74\x69\x6f\x6e\x5f\157\x76\x65\162\x72\x69\144\x65\x5f\144\157\x6e\164\x5f\x6f\160\164\151\155\151\172\145", $this->cmaecekuqkwmemms("\120\122\137\117\120\124\111\x4d\111\x5a\x41\x54\x49\x4f\x4e\137\104\117\116\x54\x5f\117\x50\x54\111\115\x49\132\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\x73\x5f\64\x30\64") && is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\x69\163\x5f\x73\x65\141\162\143\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\160\x72\137\157\160\x74\151\155\151\x7a\141\x74\x69\x6f\x6e\x5f\x6f\x70\164\151\x6d\x69\172\x65\137\x73\x65\x61\162\143\x68", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\143\141\143\x68\x65\x5f\x73\163\x6c"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iwsmmkqaoksmocok; } return $this->eecucukcqkqysiau(__FUNCTION__); iwsmmkqaoksmocok: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto esikeyqyuikmaiek; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); esikeyqyuikmaiek: if (!$this->aceaeommyuooiqge()->get("\x6d\x6f\x62\x69\154\x65\137\143\x61\x63\150\145")) { goto okkmcocqokkskasy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); okkmcocqokkskasy: $wayquiskgeuoqamk = "\x32\56\x30\134\40\115\115\120\x7c\62\64\60\170\x33\62\x30\174\x34\60\60\x58\x32\x34\x30\x7c\x41\x76\141\156\164\x47\x6f\174\102\x6c\141\143\x6b\x42\x65\x72\162\171\174\x42\154\141\172\145\x72\174\103\145\x6c\x6c\160\150\x6f\x6e\x65\174\x44\x61\156\147\145\x72\x7c\104\157\103\157\x4d\157\x7c\105\154\141\151\x6e\145\x2f\63\x2e\x30\x7c\105\165\144\x6f\162\141\127\x65\x62\x7c\107\x6f\157\x67\154\145\x62\157\164\55\115\x6f\142\151\x6c\x65\x7c\x68\151\x70\x74\157\x70\x7c\x49\105\x4d\x6f\x62\151\x6c\x65\x7c\x4b\131\117\103\105\122\x41\x2f\x57\130\x33\61\x30\113\x7c\114\x47\57\125\71\71\60\174\115\x49\x44\x50\55\x32\x2e\174\115\115\105\x46\62\60\x7c\x4d\117\x54\x2d\x56\174\116\x65\x74\106\162\157\156\x74\174\x4e\x65\167\164\x7c\x4e\151\156\x74\145\156\144\157\134\x20\x57\x69\151\x7c\x4e\x69\164\162\157\174\116\157\x6b\151\141\174\x4f\x70\x65\x72\141\134\x20\x4d\151\x6e\151\x7c\120\141\x6c\155\174\x50\154\141\x79\x53\164\x61\164\151\x6f\156\134\40\120\x6f\162\164\141\x62\154\x65\174\x70\x6f\x72\x74\x61\154\155\155\155\x7c\120\x72\x6f\170\x69\x6e\x65\x74\174\120\162\x6f\170\x69\116\145\x74\x7c\123\110\x41\122\x50\x2d\124\121\55\107\130\61\x30\174\x53\110\x47\x2d\x69\x39\x30\x30\174\x53\x6d\x61\x6c\154\174\x53\157\x6e\x79\105\162\151\143\163\x73\x6f\x6e\174\x53\x79\x6d\x62\151\x61\156\134\x20\x4f\123\174\123\171\155\142\x69\x61\156\117\x53\174\x54\x53\x32\x31\151\x2d\61\60\x7c\125\120\x2e\x42\162\x6f\x77\x73\x65\x72\174\x55\x50\x2e\114\151\x6e\x6b\174\x77\x65\142\117\123\174\x57\151\156\144\x6f\167\x73\x5c\40\103\x45\174\127\x69\x6e\127\101\120\x7c\x59\141\150\x6f\x6f\123\x65\x65\x6b\145\x72\57\x4d\x31\101\61\x2d\x52\62\104\x32\174\x69\x50\150\x6f\x6e\x65\174\151\120\157\144\174\x41\156\x64\162\157\151\x64\174\x42\x6c\x61\143\x6b\x42\145\x72\162\x79\71\65\63\60\x7c\114\x47\55\124\125\x39\x31\65\134\40\117\x62\x69\x67\x6f\174\x4c\x47\105\134\x20\x56\x58\x7c\167\x65\142\117\x53\x7c\116\x6f\153\x69\141\65\70\x30\x30"; if (!preg_match("\x23\136\x2e\x2a\x28{$wayquiskgeuoqamk}\x29\56\52\x23\151", $uowwycywwssskuys)) { goto qiiigwkqeoewsuwm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qiiigwkqeoewsuwm: $wayquiskgeuoqamk = "\167\x33\143\x5c\x20\174\x77\63\143\x2d\x7c\141\143\163\55\174\141\154\141\x76\174\141\x6c\143\141\x7c\x61\155\157\x69\x7c\141\165\144\x69\x7c\x61\166\141\156\x7c\142\x65\156\x71\174\x62\151\x72\144\x7c\x62\154\141\143\x7c\142\154\x61\x7a\x7c\142\x72\x65\167\x7c\x63\145\154\154\x7c\143\154\144\x63\174\x63\x6d\x64\55\x7c\x64\x61\156\147\174\x64\x6f\x63\x6f\174\x65\162\151\143\x7c\150\151\160\x74\174\150\x74\143\x5f\174\151\x6e\156\157\174\151\160\141\x71\174\x69\x70\x6f\x64\x7c\x6a\151\x67\x73\174\153\x64\144\151\x7c\x6b\x65\152\x69\x7c\154\x65\156\157\x7c\x6c\x67\55\143\174\x6c\147\x2d\x64\x7c\x6c\x67\x2d\x67\174\x6c\x67\x65\x2d\174\154\x67\57\x75\x7c\x6d\141\x75\x69\174\x6d\x61\x78\157\x7c\x6d\151\144\160\x7c\155\151\164\x73\174\x6d\x6d\x65\x66\x7c\155\157\142\151\174\x6d\157\x74\55\x7c\155\157\x74\157\x7c\155\167\x62\x70\x7c\x6e\145\x63\x2d\x7c\x6e\x65\x77\164\174\156\x6f\x6b\x69\174\x70\x61\154\155\174\160\x61\156\141\x7c\x70\141\x6e\164\x7c\160\150\151\154\x7c\x70\154\141\171\x7c\x70\x6f\162\164\x7c\x70\162\x6f\x78\174\x71\167\141\160\174\x73\141\147\145\x7c\x73\141\155\x73\x7c\x73\x61\x6e\x79\174\163\x63\x68\x2d\174\x73\145\143\55\174\x73\x65\x6e\x64\174\x73\x65\162\x69\x7c\163\x67\x68\x2d\x7c\163\150\x61\162\174\x73\151\145\55\174\x73\151\145\x6d\174\163\x6d\x61\154\x7c\x73\155\141\x72\174\x73\x6f\156\x79\x7c\x73\160\150\x2d\174\163\171\155\142\x7c\164\x2d\155\157\x7c\x74\145\x6c\151\x7c\164\x69\155\x2d\x7c\x74\157\163\x68\x7c\x74\x73\155\55\x7c\165\x70\x67\x31\174\x75\x70\163\151\174\x76\x6b\55\166\174\166\x6f\x64\141\174\167\x61\x70\55\x7c\167\141\x70\141\x7c\167\141\x70\151\x7c\167\x61\x70\x70\x7c\167\x61\x70\x72\x7c\167\145\142\143\174\x77\151\156\x77\174\x77\151\156\x77\x7c\x78\x64\x61\134\40\x7c\x78\x64\141\x2d"; if (!preg_match("\x23\136\50{$wayquiskgeuoqamk}\x29\x2e\52\x23\151", $uowwycywwssskuys)) { goto esaqcqqwuussiiwo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); esaqcqqwuussiiwo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ikqeeaysmqgcgawq; } return $this->eecucukcqkqysiau(__FUNCTION__); ikqeeaysmqgcgawq: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto mscgewkcqcoowweg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); mscgewkcqcoowweg: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\141\143\150\x65\137\x72\x65\152\x65\143\x74\137\165\141"); if ($mqsuiayuwmwqaqwm) { goto suqcsgaosywaauuu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); suqcsgaosywaauuu: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\43{$mqsuiayuwmwqaqwm}\x23", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wwukgaquuyoissgy; } return $this->eecucukcqkqysiau(__FUNCTION__); wwukgaquuyoissgy: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\141\x63\x68\x65\137\x72\x65\152\x65\x63\164\x5f\165\162\151"); if ($escsaeeosigewsme) { goto gsygwgsiawgmqiyi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gsygwgsiawgmqiyi: $yciaosuiyeieceug = !preg_match("\x23\136\50{$escsaeeosigewsme}\51\x24\x23\x69", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\x50\x5f\x55\x53\x45\x52\x5f\x41\x47\x45\116\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qsgqwyqaqiowkmco; } return $this->eecucukcqkqysiau(__FUNCTION__); qsgqwyqaqiowkmco: $yygmoeguaqyumuui = [ "\110\x54\x54\120\137\103\106\x5f\103\x4f\116\116\x45\x43\124\111\x4e\x47\137\x49\x50", "\x48\x54\124\x50\137\x43\x4c\111\105\x4e\124\137\x49\120", "\110\124\124\120\x5f\130\137\106\117\x52\127\x41\122\x44\x45\104\137\x46\117\122", "\110\x54\124\x50\137\x58\137\106\x4f\x52\x57\101\x52\104\x45\104", "\110\124\x54\120\x5f\130\x5f\103\x4c\125\123\x54\105\122\x5f\103\114\111\x45\116\x54\x5f\x49\x50", "\110\x54\124\120\x5f\x58\x5f\122\105\x41\114\137\111\120", "\x48\x54\124\x50\137\x46\117\122\127\101\122\x44\x45\104\137\106\117\x52", "\110\x54\x54\x50\x5f\106\117\x52\x57\101\x52\104\105\104", "\122\105\x4d\117\x54\x45\x5f\101\104\x44\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto usymasgsyqgsuocg; } $kucumcusyyckayas = explode("\x2c", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto eucqomyqykgoiuge; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); eucqomyqykgoiuge: usymasgsyqgsuocg: qikaewekoecykeou: } yqagomygmeoecwey: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\60\56\x30\x2e\60\x2e\60"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto aiccyaswigkaycqk; } return $this->eecucukcqkqysiau(__FUNCTION__); aiccyaswigkaycqk: $yywgiquyoymymqwk = [ "\x32\x30\70\x2e\67\x30\56\x32\x34\67\56\61\x35\x37" => '', "\61\x37\x32\56\62\65\65\x2e\x34\70\56\x31\63\60" => '', "\x31\x37\x32\56\62\x35\x35\x2e\x34\70\x2e\x31\x33\x31" => '', "\61\67\62\56\62\x35\x35\56\64\x38\x2e\x31\x33\x32" => '', "\x31\x37\x32\56\x32\x35\x35\56\64\70\56\x31\63\63" => '', "\61\x37\x32\56\62\x35\x35\56\x34\x38\56\61\63\x34" => '', "\61\67\62\x2e\62\65\65\56\x34\x38\x2e\61\x33\x35" => '', "\x31\67\x32\x2e\62\x35\65\x2e\x34\70\x2e\x31\63\x36" => '', "\x31\67\62\x2e\x32\x35\x35\56\x34\70\56\x31\x33\67" => '', "\x31\67\62\x2e\62\x35\x35\56\64\x38\x2e\61\x33\x38" => '', "\x31\x37\x32\56\x32\x35\65\56\x34\70\56\x31\63\71" => '', "\x31\x37\x32\x2e\x32\x35\65\x2e\x34\x38\x2e\x31\64\60" => '', "\x31\67\x32\x2e\x32\x35\65\56\x34\x38\x2e\x31\x34\x31" => '', "\x31\x37\x32\56\62\65\x35\x2e\64\70\56\61\x34\62" => '', "\61\67\62\x2e\62\65\x35\x2e\x34\70\x2e\x31\x34\63" => '', "\x31\67\x32\x2e\62\65\x35\56\x34\x38\56\x31\64\64" => '', "\x31\67\62\x2e\x32\x35\65\56\x34\70\56\61\64\65" => '', "\x31\x37\x32\56\62\65\65\56\x34\70\x2e\61\x34\66" => '', "\61\x37\x32\56\x32\65\65\x2e\64\70\x2e\61\64\67" => '', "\x35\x32\x2e\62\62\71\x2e\61\62\x32\x2e\62\64\x30" => '', "\61\x30\x34\56\x32\x31\x34\56\x37\x32\x2e\61\60\x31" => '', "\x31\x33\56\x36\66\56\x37\56\x31\x31" => '', "\x31\x33\56\x38\65\x2e\x32\x34\56\x38\x33" => '', "\61\x33\x2e\70\x35\56\62\64\56\71\60" => '', "\x31\63\x2e\70\x35\56\70\x32\x2e\62\x36" => '', "\x34\x30\x2e\x37\64\x2e\62\x34\62\x2e\x32\65\63" => '', "\64\60\x2e\67\x34\56\62\x34\x33\56\61\x33" => '', "\64\x30\x2e\x37\x34\56\62\64\x33\x2e\x31\67\x36" => '', "\61\x30\64\x2e\x32\61\64\x2e\x34\x38\x2e\x32\64\67" => '', "\61\65\67\56\65\x35\x2e\x31\70\71\56\x31\70\x39" => '', "\x31\60\x34\x2e\62\x31\64\56\61\x31\x30\x2e\x31\x33\65" => '', "\x37\60\56\63\x37\x2e\70\63\56\62\x34\x30" => '', "\66\65\x2e\65\x32\x2e\x33\66\x2e\62\x35\60" => '', "\61\63\x2e\67\70\56\62\x31\66\56\x35\x36" => '', "\x35\62\x2e\x31\66\62\x2e\62\61\62\x2e\x31\66\x33" => '', "\x32\63\x2e\71\x36\x2e\63\64\56\x31\60\65" => '', "\x36\x35\56\x35\62\x2e\61\x31\x33\56\x32\x33\66" => '', "\x31\67\62\56\x32\x35\65\x2e\x36\x31\56\63\64" => '', "\61\x37\x32\56\62\x35\65\x2e\x36\x31\56\63\65" => '', "\61\x37\62\56\x32\x35\x35\56\66\x31\x2e\x33\66" => '', "\61\67\62\56\62\65\65\x2e\x36\61\x2e\63\67" => '', "\x31\67\62\56\x32\65\x35\x2e\66\x31\56\x33\70" => '', "\x31\x37\62\x2e\x32\65\65\56\x36\61\56\63\x39" => '', "\61\67\x32\x2e\62\65\65\x2e\x36\x31\x2e\64\x30" => '', "\65\62\x2e\x32\x33\67\x2e\x32\x33\65\56\61\70\x35" => '', "\x35\x32\x2e\x32\63\67\56\62\65\x30\x2e\x37\x33" => '', "\x35\x32\x2e\62\63\67\x2e\62\63\x36\x2e\x31\64\65" => '', "\x31\x30\64\56\x34\61\x2e\62\x2e\61\71" => '', "\61\x39\61\x2e\62\x33\x35\56\x39\x38\x2e\61\x36\64" => '', "\x31\71\61\56\62\63\65\56\x39\71\x2e\x32\x32\61" => '', "\x31\71\61\x2e\62\63\62\56\x31\x39\x34\56\x35\61" => '', "\61\x30\64\x2e\62\61\x31\56\x31\64\x33\56\70" => '', "\x31\x30\x34\x2e\x32\61\61\x2e\x31\66\65\x2e\x35\63" => '', "\65\62\x2e\x31\67\x32\56\61\x34\x2e\x38\67" => '', "\x34\60\56\x38\x33\x2e\70\x39\56\x32\61\64" => '', "\x35\62\x2e\61\x37\x35\x2e\65\67\x2e\70\x31" => '', "\62\60\56\x31\70\70\x2e\66\63\x2e\x31\x35\x31" => '', "\x32\60\x2e\65\x32\56\x33\x36\x2e\x34\71" => '', "\x35\x32\56\x32\x34\x36\56\x31\x36\65\x2e\x31\65\63" => '', "\65\x31\x2e\61\64\64\56\61\60\62\56\62\x33\x33" => '', "\x31\x33\x2e\x37\x36\x2e\71\67\x2e\x32\x32\64" => '', "\x31\x30\x32\56\61\63\63\x2e\x31\x36\x39\56\66\x36" => '', "\65\x32\x2e\62\x33\x31\x2e\61\x39\71\x2e\x31\67\60" => '', "\61\x33\x2e\x35\x33\x2e\x31\x36\x32\56\67" => '', "\x34\60\56\x31\x32\63\56\62\x31\70\x2e\x39\x34" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto sqyokemumceysegy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sqyokemumceysegy: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\x50\137\125\x53\105\122\137\101\x47\x45\116\124"); if ($uowwycywwssskuys) { goto oqousikwiiqagoyw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oqousikwiiqagoyw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\43\120\151\156\147\144\x6f\x6d\x50\x61\x67\145\123\160\x65\145\144\x7c\x44\141\162\145\102\x6f\x6f\163\x74\x7c\x47\157\157\x67\154\x65\174\120\x54\123\x54\174\103\150\162\x6f\x6d\x65\55\114\x69\147\150\164\150\157\x75\163\145\174\127\120\x20\x52\x6f\143\x6b\x65\x74\43\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\x51\125\105\123\124\x5f\125\x52\111", ''); if (!$iyiwooigkweeewey) { goto zayqqeqgcwkekwws; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\57"); zayqqeqgcwkekwws: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto aueaceeyommgkicu; } return ''; aueaceeyommgkicu: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto mysueeoswqgccmui; } return $magawcseesgowoeo; mysueeoswqgccmui: return "{$magawcseesgowoeo}\x3f{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto egmayaiikwsskgmy; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); egmayaiikwsskgmy: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\x51\125\105\x53\124\137\x4d\x45\x54\x48\117\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto yuuyikiacmmueosu; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\141\143\150\145\x5f\151\x67\156\157\162\x65\144\137\160\141\x72\x61\x6d\x65\x74\x65\162\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto ucuoeymyqeokgsya; } ksort($eyagkkkqkwcuygso); ucuoeymyqeokgsya: yuuyikiacmmueosu: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; agkmiayuawacakau: if (!(strpos($euueacigmgoqkimu, "\56\57") !== false || strpos($euueacigmgoqkimu, "\x2f\56") !== false || "\56" === $euueacigmgoqkimu || "\x2e\56" === $euueacigmgoqkimu)) { goto sguskaeaaqcagqgc; } if (strpos($euueacigmgoqkimu, "\x2e\x2e\x2f") === 0) { goto sqmoqymckwsogsqg; } if (strpos($euueacigmgoqkimu, "\56\57") === 0) { goto oyiuemaaykgkqqam; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\x2f") === 0) { goto mkomygccqkmkumsi; } if ("\57\x2e" === $euueacigmgoqkimu) { goto ciucewqgyoiouesq; } if (strpos($euueacigmgoqkimu, "\57\x2e\x2e\x2f") === 0) { goto aoquoewagkseayug; } if ("\x2f\56\56" === $euueacigmgoqkimu) { goto egsycocugqyyswsi; } if ("\x2e" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu) { goto qkcsykuocwuyaice; } if (strpos($euueacigmgoqkimu, "\57", 1) !== false) { goto syuaummumssgwwee; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto oocuemosmeeekgas; syuaummumssgwwee: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\x2f", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); oocuemosmeeekgas: goto uoeasoimegouymka; qkcsykuocwuyaice: $euueacigmgoqkimu = ''; uoeasoimegouymka: goto qiaimmucomukkeka; egsycocugqyyswsi: $euueacigmgoqkimu = "\57"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); qiaimmucomukkeka: goto osuscoaaomwcqkew; aoquoewagkseayug: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); osuscoaaomwcqkew: goto cgmgqucewwssmicq; ciucewqgyoiouesq: $euueacigmgoqkimu = "\x2f"; cgmgqucewwssmicq: goto ussceseaimqywuiy; mkomygccqkmkumsi: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); ussceseaimqywuiy: goto gqmewagyagamokok; oyiuemaaykgkqqam: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); gqmewagyagamokok: goto uycesqqkoeamocgm; sqmoqymckwsogsqg: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); uycesqqkoeamocgm: goto agkmiayuawacakau; sguskaeaaqcagqgc: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto ceiwqkyquikcemmo; } ceiwqkyquikcemmo: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto ukomuiwukymcoaso; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); ukomuiwukymcoaso: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto wkgskiuiukiuyque; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); wkgskiuiukiuyque: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\162\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\155\x65\163\x73\x61\147\x65" => $uamcoiueqaamsqma, "\143\157\x6e\164\145\170\164" => $icwicymcioeyeyek]; } }
