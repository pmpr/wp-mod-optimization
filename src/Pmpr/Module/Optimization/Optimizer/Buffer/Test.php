<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66c7b6e5555be             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\x72\x69" => 1, "\163\163\x6c" => 0, "\x77\160\137\x34\60\64" => 1, "\163\145\x61\162\x63\150" => 1, "\x6d\157\x62\x69\x6c\x65" => 1, "\151\163\137\150\164\x6d\154" => 1, "\161\165\x65\162\171\x5f\x73\164\162\x69\156\x67" => 1, "\144\x6f\x6e\x6f\164\143\x61\x63\x68\x65\160\x61\147\145" => 1, "\162\x65\x6a\145\x63\164\x65\144\x5f\143\x6f\x6f\153\151\145" => 1, "\155\141\x6e\144\141\164\x6f\162\171\137\x63\157\157\153\151\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\145\x73\x74\x73"])) { goto mkwkkmkgiqiamacc; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\164\145\163\x74\163"]); mkwkkmkgiqiamacc: if (!(!isset($ywmkwiwkosakssii["\x63\x6f\x6f\153\151\x65\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto uaqackioaiqwcocy; } $ywmkwiwkosakssii["\x63\x6f\157\153\x69\x65\x73"] = $_COOKIE; uaqackioaiqwcocy: if (!(!isset($ywmkwiwkosakssii["\x70\x6f\163\164"]) && !empty($_POST) && is_array($_POST))) { goto cscusseysqygsoiy; } $ywmkwiwkosakssii["\x70\157\x73\x74"] = $_POST; cscusseysqygsoiy: if (!(!isset($ywmkwiwkosakssii["\x67\x65\164"]) && !empty($_GET) && is_array($_GET))) { goto isgwkwacoyimiauk; } $ywmkwiwkosakssii["\147\x65\x74"] = $_GET; isgwkwacoyimiauk: $this->get = !empty($ywmkwiwkosakssii["\147\145\x74"]) && is_array($ywmkwiwkosakssii["\x67\145\x74"]) ? $ywmkwiwkosakssii["\147\x65\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\x70\157\x73\x74"]) && is_array($ywmkwiwkosakssii["\160\157\163\164"]) ? $ywmkwiwkosakssii["\160\x6f\163\164"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\x63\x6f\x6f\153\x69\x65\x73"]) && is_array($ywmkwiwkosakssii["\143\x6f\157\x6b\x69\x65\163"]) ? $ywmkwiwkosakssii["\143\157\157\153\x69\x65\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto mggeqkcksyaymcsa; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\x70\x5f\x63\x75\x73\164\x6f\x6d\151\x7a\x65" => '']); mggeqkcksyaymcsa: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto uegouoiuyoqkcscg; } $this->yauwooaeicgosquo("\x44\x65\x76\x20\x4d\x6f\x64\x65\40\105\156\141\x62\x6c\145\144\40\141\156\x64\x20\141\154\154\x20\x72\x65\161\165\x65\x73\x74\x20\x69\163\x20\142\x79\x70\141\163\163\x2e"); return false; uegouoiuyoqkcscg: if (!$this->kgkoeoeseyuugaao()) { goto cgyakcqgugqgkqiw; } $this->yauwooaeicgosquo("\x52\x6f\142\x6f\x74\163\56\164\170\x74\40\x6f\x72\40\56\150\x74\x61\x63\143\x65\x73\163\x20\146\x69\x6c\x65\x20\151\x73\x20\x65\170\x63\154\x75\x64\145\144\x2e"); return false; cgyakcqgugqgkqiw: if (!$this->gymgcceeqssmesiu()) { goto eeyyskqsmquyquqw; } $this->yauwooaeicgosquo("\120\110\120\54\x20\x58\x4d\114\x2c\x20\157\x72\x20\130\x53\x4c\40\146\x69\154\145\x20\x69\163\x20\145\x78\143\154\x75\144\145\144\x2e"); return false; eeyyskqsmquyquqw: if (!$this->goecwaaykqoaaagg()) { goto ewscugeuicukkycc; } $this->yauwooaeicgosquo("\x41\144\155\151\x6e\x20\x6f\x72\40\x41\112\101\x58\40\x55\x52\x4c\40\151\163\x20\x65\x78\x63\x6c\x75\144\145\144\56"); return false; ewscugeuicukkycc: if (!$this->sgsscqasgeyeicoe()) { goto kqswcsysqawkcgye; } $this->yauwooaeicgosquo("\101\144\155\x69\156\x20\x6f\162\40\101\x4a\101\130\40\x55\122\114\x20\x69\x73\x20\145\x78\x63\x6c\165\144\x65\x64\56"); return false; kqswcsysqawkcgye: if ($this->gooeyogikcusgwuu()) { goto wusciwkkckmqigms; } $this->yauwooaeicgosquo("\122\x65\x71\x75\145\x73\164\x20\155\145\164\x68\157\144\x20\x69\163\x20\x6e\x6f\164\x20\x61\154\154\x6f\x77\x65\x64\x2e\40\x50\141\147\x65\x20\143\x61\156\156\x6f\164\40\142\x65\40\x63\x61\x63\150\145\144\56", ["\162\x65\161\165\x65\x73\164\x5f\x6d\x65\164\x68\157\x64" => $this->ciyocmkwssocskiy()]); return false; wusciwkkckmqigms: if ($this->cskwmweqysskwckg()) { goto iiiccouaaqsyikae; } $this->lastError = []; return true; iiiccouaaqsyikae: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\163\x75\143\x63\145\x73\163"]) { goto ukkcmocamwgiqayu; } $this->yauwooaeicgosquo("\116\x6f\40\x63\157\156\x66\x69\x67\x20\x66\x69\154\145\40\146\x6f\x75\x6e\144", ["\143\x6f\156\146\x69\147\137\x70\141\164\x68" => $uiewakwqscemywuo["\160\x61\x74\x68"]]); return false; ukkcmocamwgiqayu: if (!($this->cskwmweqysskwckg("\161\x75\x65\x72\x79\137\163\x74\162\x69\x6e\x67") && !$this->koguieumooaesyww())) { goto mwysseaekcsiesmm; } $this->yauwooaeicgosquo("\121\x75\145\x72\171\40\x73\x74\162\151\156\x67\40\125\122\x4c\x20\x69\x73\40\x65\x78\x63\154\165\x64\x65\x64\x2e", $_GET); return false; mwysseaekcsiesmm: if (!($this->cskwmweqysskwckg("\163\x73\x6c") & !$this->eqwgocqwoyyykwke())) { goto amgsueumgaguceaa; } $this->yauwooaeicgosquo("\x53\x53\x4c\40\143\x61\143\150\x65\40\156\157\164\40\x61\160\160\x6c\151\145\x64\40\164\x6f\40\160\x61\147\x65\x2e"); return false; amgsueumgaguceaa: if (!($this->cskwmweqysskwckg("\165\x72\151") && !$this->qweiomkkuikwugks())) { goto gygwewcqsmwqismo; } $this->yauwooaeicgosquo("\120\x61\x67\145\x20\151\x73\40\x65\x78\x63\x6c\165\144\145\144\56"); return false; gygwewcqsmwqismo: if (!($this->cskwmweqysskwckg("\162\145\152\145\143\x74\x65\x64\x5f\x63\x6f\x6f\153\x69\x65") && $this->cokqaygwwygweuyk())) { goto uougwgeyiokewkkm; } $this->yauwooaeicgosquo("\105\x78\143\x6c\165\144\145\144\x20\143\157\x6f\153\151\145\40\146\x6f\165\x6e\x64\x2e", ["\x65\170\x63\x6c\x75\x64\145\x64\137\143\x6f\x6f\x6b\151\145\x73" => $this->cokqaygwwygweuyk()]); return false; uougwgeyiokewkkm: if (!($this->cskwmweqysskwckg("\x6d\141\x6e\x64\141\x74\157\162\x79\137\143\x6f\x6f\153\x69\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto gommacygsykyussk; } $this->yauwooaeicgosquo("\x4d\151\163\163\x69\156\x67\x20\155\x61\156\144\141\164\157\162\x79\x20\143\x6f\157\x6b\x69\x65\x3a\x20\x70\x61\147\x65\x20\x6e\157\x74\40\160\162\x6f\143\x65\163\x73\145\x64\56", ["\155\x69\x73\163\x69\x6e\x67\137\143\157\x6f\153\151\x65\163" => $this->qgymyeqwqaiwmmea()]); return false; gommacygsykyussk: if (!($this->cskwmweqysskwckg("\165\x73\x65\162\137\x61\x67\x65\156\164") && !$this->mqiqsuksgyekwkii())) { goto ukqocwewouckikso; } $this->yauwooaeicgosquo("\125\x73\x65\162\40\101\147\x65\156\x74\x20\151\x73\40\145\170\143\x6c\165\x64\x65\144\56", ["\x75\163\145\x72\137\141\x67\145\156\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\x50\137\x55\123\x45\x52\137\x41\107\x45\116\124")]); return false; ukqocwewouckikso: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto ucqmumuygcywwqma; } $this->yauwooaeicgosquo("\x42\165\146\146\145\162\x20\143\157\x6e\164\x65\x6e\164\40\x75\156\x64\145\x72\40\x32\x35\65\x20\143\x68\141\162\x61\143\164\145\x72\163\x2e"); return false; ucqmumuygcywwqma: if (!(http_response_code() !== 200)) { goto uykousayyomcaeaa; } $this->yauwooaeicgosquo("\120\141\x67\x65\40\151\163\40\156\x6f\164\40\141\x20\62\60\60\x20\110\124\124\120\x20\162\x65\163\x70\x6f\x6e\163\145\40\x61\156\144\x20\x63\x61\156\x6e\157\x74\40\x62\145\x20\143\x61\143\150\x65\144\x2e"); return false; uykousayyomcaeaa: if (!($this->cskwmweqysskwckg("\x64\157\156\157\x74\157\160\164\x69\x6d\151\x7a\x65\x70\141\147\145") && $this->cowcgqokiosgaqic())) { goto uimeeckqksqeekqq; } $this->yauwooaeicgosquo("\104\117\x4e\x54\x4f\x50\x54\111\x4d\x49\x5a\105\104\x50\x41\107\105\40\x69\163\40\x64\145\146\151\156\x65\144\x2e\40\x50\141\147\145\40\143\141\156\x6e\157\x74\40\142\x65\40\143\x61\143\150\x65\x64\x2e"); return false; uimeeckqksqeekqq: if (!($this->cskwmweqysskwckg("\167\160\137\64\x30\x34") && $this->kmmyuiwaogukwqqi())) { goto iuuuususuuuaieem; } $this->yauwooaeicgosquo("\x57\120\x20\64\x30\64\x20\160\141\x67\x65\x20\151\x73\40\145\x78\x63\154\165\x64\x65\x64\56"); return false; iuuuususuuuaieem: if (!($this->cskwmweqysskwckg("\163\x65\x61\162\x63\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto kocqqoyymosmuksu; } $this->yauwooaeicgosquo("\x53\x65\x61\162\143\x68\40\x70\141\147\145\x20\x69\163\40\x65\170\143\x6c\165\x64\145\x64\x2e"); return false; kocqqoyymosmuksu: if (!$this->cskwmweqysskwckg("\151\163\137\x68\x74\x6d\154")) { goto qukocuwgakemmyga; } if (!($this->cmaecekuqkwmemms("\122\x45\x53\x54\x5f\x52\105\121\125\x45\123\124") || $this->gaiygescoqgyusaa())) { goto uqokiksoqcwwqgio; } unset($this->tests["\151\x73\x5f\x68\x74\155\x6c"]); uqokiksoqcwwqgio: qukocuwgakemmyga: if (!($this->cskwmweqysskwckg("\x69\163\x5f\x68\164\x6d\x6c") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto sioekkmekwygemyc; } $this->yauwooaeicgosquo("\116\x6f\40\x63\x6c\x6f\x73\x69\x6e\x67\x20\x3c\x2f\150\164\x6d\154\x3e\x20\x77\141\x73\40\146\x6f\165\156\x64\x2e"); return false; sioekkmekwygemyc: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\x70\162\x5f\157\x70\164\151\x6d\151\172\x61\164\151\157\x6e\x5f\141\x6c\154\x6f\167\137\164\157\137\x73\x74\141\162\x74\x5f\x62\x75\146\146\145\162\x5f\x70\162\x6f\x63\x65\163\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto yiowgigkkwsoqcci; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto ieqesiiageaauiuw; yiowgigkkwsoqcci: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); ieqesiiageaauiuw: return apply_filters("\160\x72\x5f\157\x70\164\x69\x6d\151\172\141\164\151\x6f\x6e\137\150\141\x73\137{$ymqmyyeuycgmigyo}\137\x74\145\163\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\57\x3c\134\x73\x2a\x5c\57\134\163\52\150\164\155\x6c\134\x73\52\x3e\57\x69", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\x28\x3f\x3a\56\x2b\x2f\51\x3f" . $wp_rewrite->feed_base . "\x28\x3f\72\57\50\x3f\x3a\x2e\x2b\x2f\x3f\51\77\51\x3f\x24"; return (bool) preg_match("\x23\136\x28{$uckmmkmoeikwsiqg}\51\x24\x23\151", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\144\x65\x76\x5f\155\x6f\144\x65"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gamqcwuwkikwqoay; } return $this->eecucukcqkqysiau(__FUNCTION__); gamqcwuwkikwqoay: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto mscyggqcesgqqksu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mscyggqcesgqqksu: $ucasskoyoewwmmii = ["\162\157\x62\157\x74\x73\x2e\x74\x78\164", "\x2e\x68\x74\x61\143\143\x65\163\163"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto wsesqmcqoiyyqkqi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wsesqmcqoiyyqkqi: iesekaeqeomeuaui: } oyeyomcgkmgymogq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mogkoocsoeuyoqqa; } return $this->eecucukcqkqysiau(__FUNCTION__); mogkoocsoeuyoqqa: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto oimkeqocuguqqsqk; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto wkwamkgkwykeqkec; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wkwamkgkwykeqkec: oimkeqocuguqqsqk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oeocukauoyosicso; } return $this->eecucukcqkqysiau(__FUNCTION__); oeocukauoyosicso: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto suqceasgacskcmkc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); suqceasgacskcmkc: if (!(strtolower($iyiwooigkweeewey) === "\57\x69\156\x64\x65\x78\56\160\x68\x70")) { goto yykqaowwsqgqysmq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yykqaowwsqgqysmq: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\150\x70" => 1, "\170\155\x6c" => 1, "\170\163\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\x44\x4f\111\116\107\x5f\101\112\x41\x58"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\120\123")), ["\x6f\x6e", "\61"]) || "\64\x34\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\x52\126\105\122\137\120\x4f\122\124"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\160\x5f\x63\165\163\164\157\155\151\172\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\x45\124" => 1, "\x48\x45\101\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kwiggogcgciwuwqk; } return $this->eecucukcqkqysiau(__FUNCTION__); kwiggogcgciwuwqk: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto uckewycoogsogwiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); uckewycoogsogwiy: $yccgiaiouekkouay = ["\x73" => 1, "\154\141\156\147" => 1, "\x70\145\162\x6d\141\x6c\x69\x6e\x6b\137\156\x61\x6d\145" => 1, "\x6c\x70\55\x76\x61\162\151\141\x74\x69\157\156\55\151\x64" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto ikuuiauwouuqawuw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ikuuiauwouuqawuw: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\141\143\x68\145\x5f\161\x75\145\162\171\x5f\163\164\162\151\x6e\147\x73"); if ($yccgiaiouekkouay) { goto yoqakewookqoqacm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yoqakewookqoqacm: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gswcoeiisamakwii; } return $this->eecucukcqkqysiau(__FUNCTION__); gswcoeiisamakwii: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto yuimwyoywaiiqacs; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yuimwyoywaiiqacs: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto ocywegekakimmwcq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ocywegekakimmwcq: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto esikeyqyuikmaiek; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; esikeyqyuikmaiek: iwsmmkqaoksmocok: } emqswoaawgeyosmi: if (empty($eiocugauqgouiuyi)) { goto okkmcocqokkskasy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); okkmcocqokkskasy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qiiigwkqeoewsuwm; } return $this->eecucukcqkqysiau(__FUNCTION__); qiiigwkqeoewsuwm: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto esaqcqqwuussiiwo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); esaqcqqwuussiiwo: $yiycakoikkyuokgk = array_flip(explode("\174", $this->aceaeommyuooiqge()->get("\x63\x61\143\x68\145\137\x6d\x61\156\x64\141\x74\x6f\x72\x79\137\x63\157\157\x6b\x69\145\x73"))); if ($this->wemyikwikgwqwuoc()) { goto ikqeeaysmqgcgawq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); ikqeeaysmqgcgawq: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto wwukgaquuyoissgy; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); wwukgaquuyoissgy: suqcsgaosywaauuu: } mscgewkcqcoowweg: if (!empty($yiycakoikkyuokgk)) { goto gsygwgsiawgmqiyi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gsygwgsiawgmqiyi: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\x70\162\x5f\157\x70\x74\151\x6d\151\x7a\141\164\x69\157\156\x5f\157\x76\145\162\162\x69\x64\x65\137\144\157\x6e\x74\x5f\157\x70\164\x69\x6d\x69\x7a\x65", $this->cmaecekuqkwmemms("\120\x52\137\117\x50\x54\x49\x4d\111\x5a\101\x54\111\x4f\x4e\137\104\117\x4e\x54\137\117\x50\124\x49\x4d\x49\132\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\151\163\137\64\60\64") && is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\151\x73\137\163\145\141\x72\x63\150") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\160\x72\137\x6f\160\x74\151\155\x69\172\141\x74\x69\157\156\137\157\160\164\151\155\x69\172\145\x5f\x73\145\x61\162\143\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\143\x61\x63\x68\145\137\x73\163\x6c"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qsgqwyqaqiowkmco; } return $this->eecucukcqkqysiau(__FUNCTION__); qsgqwyqaqiowkmco: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto yqagomygmeoecwey; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yqagomygmeoecwey: if (!$this->aceaeommyuooiqge()->get("\155\157\x62\x69\x6c\145\x5f\143\141\x63\150\145")) { goto qikaewekoecykeou; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qikaewekoecykeou: $wayquiskgeuoqamk = "\x32\x2e\60\x5c\x20\115\115\x50\174\x32\64\60\170\x33\x32\x30\x7c\x34\60\60\130\x32\x34\x30\x7c\101\x76\x61\156\164\x47\x6f\174\102\154\141\x63\153\x42\x65\x72\x72\x79\174\x42\x6c\x61\x7a\x65\x72\x7c\x43\x65\154\154\160\x68\157\x6e\145\174\x44\141\156\147\x65\x72\x7c\104\157\103\157\x4d\x6f\174\105\x6c\141\151\156\145\x2f\63\56\x30\174\x45\x75\x64\x6f\x72\x61\x57\x65\142\x7c\x47\x6f\x6f\147\154\x65\142\x6f\164\55\x4d\157\x62\x69\154\145\x7c\x68\x69\x70\164\157\160\174\111\x45\115\x6f\x62\151\x6c\145\174\x4b\131\x4f\103\105\122\x41\57\127\x58\63\x31\60\113\174\x4c\107\57\125\x39\x39\x30\x7c\x4d\111\104\x50\x2d\62\x2e\x7c\x4d\115\x45\106\62\x30\174\x4d\x4f\x54\x2d\126\174\x4e\x65\164\x46\x72\x6f\x6e\164\174\116\x65\x77\x74\174\116\x69\156\x74\x65\x6e\x64\157\x5c\40\x57\x69\151\x7c\x4e\x69\x74\162\x6f\x7c\x4e\157\x6b\x69\141\x7c\117\160\x65\x72\141\x5c\40\115\x69\x6e\151\x7c\120\141\x6c\155\x7c\x50\x6c\141\171\x53\164\141\x74\x69\157\156\134\40\x50\157\x72\x74\141\x62\154\x65\174\x70\x6f\x72\x74\x61\154\155\x6d\x6d\x7c\x50\x72\157\170\x69\156\145\x74\174\120\x72\x6f\x78\151\116\145\x74\x7c\x53\x48\x41\122\120\55\124\121\55\107\x58\x31\60\174\123\x48\107\x2d\151\71\60\60\174\x53\x6d\141\154\x6c\x7c\123\x6f\x6e\x79\x45\x72\x69\x63\x73\x73\157\x6e\x7c\123\x79\155\142\151\x61\156\134\40\x4f\x53\x7c\x53\x79\x6d\142\x69\141\156\117\x53\174\124\123\62\61\151\55\61\x30\174\x55\x50\56\102\x72\157\167\x73\x65\162\174\x55\x50\x2e\x4c\151\x6e\153\174\167\x65\142\117\123\174\127\151\x6e\144\157\167\163\134\40\103\105\x7c\127\x69\156\127\101\120\x7c\131\141\150\x6f\x6f\x53\x65\x65\153\x65\x72\x2f\115\x31\101\61\x2d\122\62\104\62\x7c\x69\x50\150\x6f\156\x65\x7c\151\x50\157\x64\x7c\101\156\144\x72\157\x69\x64\174\x42\154\x61\143\153\x42\x65\x72\162\x79\71\65\x33\60\x7c\114\x47\x2d\124\125\71\x31\x35\134\40\117\142\151\147\x6f\x7c\114\x47\x45\x5c\x20\126\130\174\x77\x65\x62\x4f\123\x7c\x4e\157\x6b\x69\x61\x35\x38\60\x30"; if (!preg_match("\x23\x5e\56\x2a\50{$wayquiskgeuoqamk}\51\56\x2a\43\x69", $uowwycywwssskuys)) { goto eucqomyqykgoiuge; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); eucqomyqykgoiuge: $wayquiskgeuoqamk = "\x77\x33\x63\134\x20\174\167\63\x63\55\174\x61\x63\x73\55\174\x61\x6c\x61\x76\x7c\141\x6c\143\141\x7c\141\x6d\x6f\x69\x7c\x61\165\x64\x69\174\141\x76\141\x6e\174\142\x65\156\x71\174\x62\x69\x72\x64\x7c\x62\154\141\x63\174\142\x6c\x61\x7a\x7c\142\162\x65\167\x7c\143\145\x6c\x6c\174\x63\154\144\143\174\x63\155\144\55\x7c\x64\141\x6e\x67\x7c\x64\157\143\x6f\x7c\145\x72\x69\143\x7c\150\x69\160\164\174\150\x74\x63\137\x7c\x69\156\x6e\157\x7c\151\x70\141\x71\x7c\x69\x70\157\x64\x7c\152\x69\147\163\x7c\153\144\x64\x69\174\153\145\x6a\151\174\x6c\145\x6e\157\x7c\154\147\55\x63\174\154\x67\x2d\x64\174\154\147\x2d\147\x7c\x6c\147\x65\55\174\x6c\147\57\165\174\x6d\141\165\151\174\155\x61\170\157\x7c\155\x69\x64\160\174\155\151\x74\163\174\x6d\155\x65\x66\174\155\x6f\x62\x69\x7c\155\157\x74\x2d\174\x6d\157\x74\157\x7c\155\x77\142\160\x7c\156\145\143\55\174\x6e\x65\x77\164\174\156\x6f\x6b\x69\x7c\x70\141\154\155\174\x70\x61\x6e\141\174\x70\141\156\164\174\x70\150\151\x6c\x7c\x70\154\x61\171\x7c\x70\x6f\x72\164\x7c\160\162\157\170\174\161\x77\x61\160\174\163\x61\x67\x65\174\x73\x61\155\163\174\163\141\x6e\171\174\x73\x63\150\55\174\x73\x65\x63\55\x7c\163\145\156\144\174\x73\145\x72\x69\x7c\163\147\x68\x2d\x7c\163\x68\x61\162\174\163\151\145\55\x7c\x73\x69\x65\155\x7c\x73\x6d\141\x6c\x7c\x73\x6d\141\x72\x7c\x73\x6f\156\x79\174\163\160\150\55\x7c\163\171\x6d\x62\174\x74\x2d\x6d\x6f\174\x74\145\154\x69\174\x74\151\155\x2d\174\164\157\x73\x68\174\x74\163\155\x2d\x7c\x75\x70\147\61\174\165\160\x73\151\x7c\x76\153\55\166\174\166\x6f\144\x61\x7c\x77\x61\x70\x2d\174\x77\141\160\x61\174\167\x61\x70\x69\174\x77\x61\x70\160\x7c\x77\x61\160\x72\174\x77\145\x62\143\174\167\151\x6e\x77\x7c\167\x69\x6e\x77\174\170\x64\141\134\40\x7c\x78\x64\x61\55"; if (!preg_match("\43\x5e\50{$wayquiskgeuoqamk}\51\56\x2a\43\151", $uowwycywwssskuys)) { goto usymasgsyqgsuocg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); usymasgsyqgsuocg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto aiccyaswigkaycqk; } return $this->eecucukcqkqysiau(__FUNCTION__); aiccyaswigkaycqk: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto sqyokemumceysegy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sqyokemumceysegy: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\x61\143\150\145\x5f\162\145\152\145\x63\164\x5f\x75\x61"); if ($mqsuiayuwmwqaqwm) { goto oqousikwiiqagoyw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); oqousikwiiqagoyw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\x23{$mqsuiayuwmwqaqwm}\x23", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto zayqqeqgcwkekwws; } return $this->eecucukcqkqysiau(__FUNCTION__); zayqqeqgcwkekwws: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\x61\143\150\x65\x5f\x72\x65\152\145\143\x74\x5f\x75\x72\x69"); if ($escsaeeosigewsme) { goto aueaceeyommgkicu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); aueaceeyommgkicu: $yciaosuiyeieceug = !preg_match("\x23\x5e\50{$escsaeeosigewsme}\x29\44\x23\x69", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\120\137\x55\123\105\x52\137\x41\x47\105\x4e\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mysueeoswqgccmui; } return $this->eecucukcqkqysiau(__FUNCTION__); mysueeoswqgccmui: $yygmoeguaqyumuui = [ "\x48\x54\124\120\137\103\x46\137\103\117\116\x4e\105\x43\x54\x49\116\x47\x5f\x49\x50", "\110\124\x54\x50\137\x43\114\x49\x45\116\124\x5f\x49\x50", "\110\124\124\120\137\130\137\x46\117\122\127\x41\x52\x44\x45\x44\x5f\x46\x4f\122", "\110\124\x54\x50\x5f\x58\137\106\x4f\122\127\101\x52\104\x45\x44", "\x48\x54\x54\120\x5f\130\137\x43\x4c\x55\123\124\x45\122\x5f\103\114\111\105\x4e\x54\137\111\x50", "\110\x54\124\120\x5f\x58\137\122\x45\x41\x4c\137\111\x50", "\110\124\x54\120\137\106\117\122\x57\x41\x52\104\x45\104\x5f\x46\117\122", "\110\124\x54\x50\137\x46\117\122\x57\101\122\x44\x45\x44", "\122\105\x4d\x4f\124\105\137\x41\x44\104\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto sguskaeaaqcagqgc; } $kucumcusyyckayas = explode("\x2c", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto yuuyikiacmmueosu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); yuuyikiacmmueosu: sguskaeaaqcagqgc: ucuoeymyqeokgsya: } egmayaiikwsskgmy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\60\x2e\60\x2e\x30\56\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto agkmiayuawacakau; } return $this->eecucukcqkqysiau(__FUNCTION__); agkmiayuawacakau: $yywgiquyoymymqwk = [ "\62\60\70\56\x37\60\x2e\62\64\67\56\x31\x35\67" => '', "\61\x37\x32\56\62\x35\x35\56\x34\70\56\x31\x33\x30" => '', "\61\x37\x32\x2e\62\x35\65\x2e\x34\70\56\x31\x33\x31" => '', "\61\x37\62\56\x32\x35\x35\x2e\x34\70\56\x31\x33\62" => '', "\x31\x37\x32\x2e\x32\x35\x35\x2e\x34\70\x2e\x31\63\x33" => '', "\61\x37\x32\x2e\62\65\x35\56\x34\x38\x2e\x31\63\x34" => '', "\61\x37\62\x2e\62\x35\65\x2e\64\70\x2e\61\x33\65" => '', "\61\x37\x32\x2e\62\x35\x35\x2e\x34\x38\56\61\x33\x36" => '', "\61\67\x32\x2e\62\x35\65\x2e\64\x38\56\x31\x33\x37" => '', "\61\67\x32\56\x32\65\x35\x2e\x34\x38\x2e\61\x33\70" => '', "\61\x37\62\x2e\62\65\x35\56\64\70\56\x31\63\71" => '', "\x31\67\62\x2e\x32\65\x35\56\x34\70\x2e\x31\x34\x30" => '', "\x31\x37\x32\x2e\62\x35\65\x2e\64\x38\x2e\61\x34\x31" => '', "\x31\x37\62\x2e\x32\65\x35\x2e\64\70\56\x31\x34\x32" => '', "\61\67\62\x2e\x32\x35\65\56\64\70\56\x31\64\63" => '', "\61\67\x32\x2e\x32\65\x35\56\64\70\56\61\64\64" => '', "\x31\x37\x32\x2e\62\65\65\56\64\x38\x2e\61\x34\x35" => '', "\61\x37\62\56\62\65\65\56\64\70\x2e\x31\64\x36" => '', "\61\67\x32\x2e\62\x35\65\56\64\70\x2e\x31\x34\67" => '', "\x35\x32\56\62\x32\71\56\61\62\x32\56\62\x34\60" => '', "\61\x30\64\56\62\x31\64\56\x37\x32\56\x31\x30\61" => '', "\61\x33\56\x36\66\56\67\x2e\61\x31" => '', "\x31\63\x2e\70\x35\x2e\x32\64\x2e\x38\x33" => '', "\61\x33\x2e\70\65\x2e\x32\64\56\71\x30" => '', "\x31\x33\56\70\x35\x2e\x38\x32\56\x32\x36" => '', "\x34\60\56\67\64\56\x32\64\x32\x2e\62\65\63" => '', "\x34\x30\56\x37\x34\56\62\64\x33\x2e\x31\x33" => '', "\x34\x30\x2e\67\64\56\x32\x34\63\x2e\x31\67\66" => '', "\x31\x30\64\x2e\62\x31\x34\56\x34\x38\x2e\62\x34\x37" => '', "\61\x35\67\x2e\x35\x35\x2e\x31\70\71\56\61\70\x39" => '', "\x31\x30\x34\x2e\62\61\64\56\x31\x31\60\x2e\x31\63\x35" => '', "\x37\x30\56\63\x37\x2e\70\x33\56\62\64\60" => '', "\66\65\56\x35\62\x2e\x33\x36\x2e\x32\65\x30" => '', "\x31\63\56\x37\70\x2e\x32\61\x36\56\x35\x36" => '', "\65\62\x2e\61\66\x32\56\x32\x31\62\x2e\x31\x36\63" => '', "\x32\x33\56\71\66\x2e\x33\64\x2e\x31\60\x35" => '', "\66\65\56\65\x32\x2e\61\61\x33\x2e\62\x33\66" => '', "\x31\67\62\56\62\65\x35\56\x36\61\56\63\x34" => '', "\x31\x37\62\x2e\x32\65\65\56\x36\x31\56\63\65" => '', "\61\x37\62\56\62\65\x35\56\x36\x31\56\63\x36" => '', "\61\x37\x32\56\x32\x35\x35\x2e\x36\x31\x2e\x33\67" => '', "\x31\67\x32\x2e\62\65\65\56\x36\x31\x2e\x33\70" => '', "\61\x37\62\x2e\62\65\x35\56\66\61\56\63\71" => '', "\x31\x37\62\56\62\x35\65\56\66\x31\x2e\x34\60" => '', "\65\x32\x2e\x32\63\67\x2e\x32\x33\65\56\x31\x38\x35" => '', "\x35\62\56\62\63\x37\x2e\x32\x35\x30\x2e\x37\x33" => '', "\x35\62\x2e\x32\x33\x37\x2e\x32\x33\x36\56\61\64\x35" => '', "\x31\60\64\56\x34\x31\x2e\x32\x2e\61\x39" => '', "\x31\71\61\x2e\62\x33\65\56\x39\70\56\61\66\64" => '', "\61\71\x31\56\x32\63\65\x2e\71\71\x2e\62\62\x31" => '', "\x31\x39\61\x2e\x32\x33\x32\56\61\x39\64\56\65\x31" => '', "\x31\60\64\x2e\x32\61\61\56\61\x34\x33\x2e\70" => '', "\x31\x30\64\x2e\x32\61\x31\56\x31\66\65\56\x35\x33" => '', "\65\x32\56\61\67\62\x2e\61\64\x2e\x38\x37" => '', "\x34\60\56\70\63\56\70\71\x2e\x32\61\x34" => '', "\65\x32\56\61\x37\65\x2e\x35\67\56\x38\x31" => '', "\62\60\x2e\61\70\70\56\x36\63\56\61\x35\x31" => '', "\62\x30\56\x35\62\x2e\x33\x36\56\x34\71" => '', "\x35\62\56\x32\x34\x36\x2e\x31\x36\65\56\x31\65\x33" => '', "\65\x31\56\61\x34\64\x2e\61\60\62\x2e\62\x33\x33" => '', "\x31\x33\56\x37\x36\56\71\67\56\62\x32\64" => '', "\x31\60\62\56\x31\x33\x33\x2e\61\x36\x39\56\66\x36" => '', "\x35\x32\56\62\63\61\56\x31\71\x39\56\61\67\60" => '', "\x31\63\x2e\65\x33\x2e\x31\x36\62\56\67" => '', "\64\x30\56\61\x32\x33\56\62\x31\x38\x2e\71\x34" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto syuaummumssgwwee; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); syuaummumssgwwee: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\x5f\x55\123\x45\x52\137\101\x47\105\116\x54"); if ($uowwycywwssskuys) { goto oocuemosmeeekgas; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oocuemosmeeekgas: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\x50\x69\x6e\x67\144\157\x6d\120\141\x67\x65\x53\160\145\145\144\x7c\x44\141\162\145\x42\157\157\163\164\174\107\157\x6f\147\x6c\145\x7c\120\x54\x53\x54\x7c\x43\150\162\157\155\x65\55\x4c\x69\x67\150\164\150\x6f\x75\x73\x65\174\127\x50\x20\x52\x6f\143\153\145\x74\x23\x69", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\x55\105\123\x54\x5f\125\122\x49", ''); if (!$iyiwooigkweeewey) { goto qkcsykuocwuyaice; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\57"); qkcsykuocwuyaice: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto uoeasoimegouymka; } return ''; uoeasoimegouymka: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto egsycocugqyyswsi; } return $magawcseesgowoeo; egsycocugqyyswsi: return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto qiaimmucomukkeka; } $magawcseesgowoeo = explode("\x3f", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); qiaimmucomukkeka: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\121\125\105\x53\x54\x5f\x4d\105\124\x48\x4f\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto osuscoaaomwcqkew; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\141\143\150\145\137\151\147\x6e\157\x72\x65\x64\x5f\160\x61\162\x61\x6d\x65\164\x65\162\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto aoquoewagkseayug; } ksort($eyagkkkqkwcuygso); aoquoewagkseayug: osuscoaaomwcqkew: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; cgmgqucewwssmicq: if (!(strpos($euueacigmgoqkimu, "\56\x2f") !== false || strpos($euueacigmgoqkimu, "\57\56") !== false || "\56" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu)) { goto ciucewqgyoiouesq; } if (strpos($euueacigmgoqkimu, "\x2e\x2e\x2f") === 0) { goto yuqgwwmqwqiuwmaw; } if (strpos($euueacigmgoqkimu, "\x2e\57") === 0) { goto qkuiwoqksgayqqmg; } if (strpos($euueacigmgoqkimu, "\57\x2e\57") === 0) { goto goqmywuiicciasyk; } if ("\57\x2e" === $euueacigmgoqkimu) { goto wkgskiuiukiuyque; } if (strpos($euueacigmgoqkimu, "\x2f\56\56\57") === 0) { goto ceiwqkyquikcemmo; } if ("\57\x2e\56" === $euueacigmgoqkimu) { goto sqmoqymckwsogsqg; } if ("\x2e" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu) { goto oyiuemaaykgkqqam; } if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { goto mkomygccqkmkumsi; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto ussceseaimqywuiy; mkomygccqkmkumsi: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); ussceseaimqywuiy: goto gqmewagyagamokok; oyiuemaaykgkqqam: $euueacigmgoqkimu = ''; gqmewagyagamokok: goto uycesqqkoeamocgm; sqmoqymckwsogsqg: $euueacigmgoqkimu = "\x2f"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); uycesqqkoeamocgm: goto ukomuiwukymcoaso; ceiwqkyquikcemmo: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); ukomuiwukymcoaso: goto oyiuyywyeoskckuw; wkgskiuiukiuyque: $euueacigmgoqkimu = "\57"; oyiuyywyeoskckuw: goto siecswkggyikqkga; goqmywuiicciasyk: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); siecswkggyikqkga: goto easqmyamcmeesgya; qkuiwoqksgayqqmg: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); easqmyamcmeesgya: goto quaqmuusokiyqgqe; yuqgwwmqwqiuwmaw: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); quaqmuusokiyqgqe: goto cgmgqucewwssmicq; ciucewqgyoiouesq: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto smiemmcqqukyguuu; } $icwicymcioeyeyek["\160\145\162\155\x61\x6c\x69\x6e\x6b"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); smiemmcqqukyguuu: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto iksewmsaugayqaqq; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); iksewmsaugayqaqq: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto yamyagayiooyeekg; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); yamyagayiooyeekg: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\x75\162\x6c"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\x6d\x65\x73\163\141\147\x65" => $uamcoiueqaamsqma, "\143\157\x6e\164\x65\170\x74" => $icwicymcioeyeyek]; } }
