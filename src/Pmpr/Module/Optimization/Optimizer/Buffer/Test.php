<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66350189c616d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\162\151" => 1, "\163\163\154" => 0, "\x77\x70\137\64\x30\x34" => 1, "\x73\145\x61\162\x63\x68" => 1, "\x6d\x6f\x62\x69\154\x65" => 1, "\x69\163\137\x68\164\155\154" => 1, "\x71\165\x65\162\x79\137\163\164\x72\151\x6e\147" => 1, "\x64\x6f\156\157\x74\143\x61\143\150\x65\x70\141\x67\145" => 1, "\162\x65\152\x65\143\164\145\144\x5f\x63\x6f\x6f\x6b\x69\x65" => 1, "\x6d\141\156\x64\x61\x74\x6f\x72\171\137\143\157\157\153\x69\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\x65\163\x74\x73"])) { goto kwsqgqmwyyeykgum; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\x65\x73\x74\163"]); kwsqgqmwyyeykgum: if (!(!isset($ywmkwiwkosakssii["\143\x6f\x6f\x6b\151\x65\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto emauuoieewwoeyqq; } $ywmkwiwkosakssii["\143\x6f\157\x6b\x69\145\x73"] = $_COOKIE; emauuoieewwoeyqq: if (!(!isset($ywmkwiwkosakssii["\160\x6f\163\164"]) && !empty($_POST) && is_array($_POST))) { goto koukiyqaccegmquc; } $ywmkwiwkosakssii["\x70\157\163\x74"] = $_POST; koukiyqaccegmquc: if (!(!isset($ywmkwiwkosakssii["\x67\145\164"]) && !empty($_GET) && is_array($_GET))) { goto ekakkiuuquqkccse; } $ywmkwiwkosakssii["\x67\145\164"] = $_GET; ekakkiuuquqkccse: $this->get = !empty($ywmkwiwkosakssii["\x67\x65\164"]) && is_array($ywmkwiwkosakssii["\x67\145\164"]) ? $ywmkwiwkosakssii["\x67\145\164"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\x6f\163\x74"]) && is_array($ywmkwiwkosakssii["\160\x6f\x73\x74"]) ? $ywmkwiwkosakssii["\x70\x6f\163\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\x63\x6f\x6f\153\x69\x65\163"]) && is_array($ywmkwiwkosakssii["\x63\157\157\x6b\151\x65\163"]) ? $ywmkwiwkosakssii["\x63\x6f\x6f\x6b\151\145\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto oqwwacmigasucsoc; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\160\137\x63\x75\x73\x74\157\x6d\x69\172\x65" => '']); oqwwacmigasucsoc: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->kgkoeoeseyuugaao()) { goto egkeqqgakieyimuq; } $this->yauwooaeicgosquo("\x52\x6f\x62\157\164\x73\x2e\x74\x78\x74\x20\157\x72\40\x2e\150\164\141\x63\143\x65\x73\163\x20\x66\x69\154\145\x20\x69\x73\40\x65\170\143\x6c\x75\x64\x65\144\x2e"); return false; egkeqqgakieyimuq: if (!$this->gymgcceeqssmesiu()) { goto cakuguiciaiaeukg; } $this->yauwooaeicgosquo("\x50\x48\x50\54\x20\x58\115\114\x2c\x20\157\162\x20\130\123\x4c\40\x66\x69\x6c\145\x20\x69\x73\40\145\170\143\154\x75\144\x65\x64\56"); return false; cakuguiciaiaeukg: if (!$this->goecwaaykqoaaagg()) { goto wswikooyuaaouqgk; } $this->yauwooaeicgosquo("\101\144\x6d\151\156\40\157\x72\x20\101\x4a\x41\x58\x20\x55\122\114\40\x69\x73\40\145\x78\143\x6c\165\x64\145\144\x2e"); return false; wswikooyuaaouqgk: if (!$this->sgsscqasgeyeicoe()) { goto awwaiioyywmokwsm; } $this->yauwooaeicgosquo("\x41\x64\x6d\151\x6e\x20\157\x72\40\101\x4a\101\130\x20\125\122\x4c\40\x69\163\40\x65\x78\143\154\x75\144\145\x64\x2e"); return false; awwaiioyywmokwsm: if ($this->gooeyogikcusgwuu()) { goto ckwmkquuyyugigom; } $this->yauwooaeicgosquo("\x52\145\x71\165\145\163\x74\x20\x6d\145\x74\150\x6f\144\40\151\x73\40\156\x6f\x74\x20\x61\154\x6c\157\x77\145\144\56\x20\120\141\x67\145\x20\143\x61\x6e\x6e\157\164\40\142\x65\x20\x63\x61\x63\150\x65\144\56", ["\162\145\161\165\145\163\164\137\x6d\145\x74\150\x6f\144" => $this->ciyocmkwssocskiy()]); return false; ckwmkquuyyugigom: if ($this->cskwmweqysskwckg()) { goto cumeycwmuuqawwyu; } $this->lastError = []; return true; cumeycwmuuqawwyu: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\x73\x75\x63\143\x65\163\163"]) { goto uaicwcqwauosmsqm; } $this->yauwooaeicgosquo("\x4e\x6f\x20\x63\x6f\x6e\x66\x69\x67\40\x66\151\x6c\145\40\x66\157\x75\x6e\144", ["\143\x6f\156\146\151\x67\x5f\x70\x61\x74\150" => $uiewakwqscemywuo["\x70\x61\164\x68"]]); return false; uaicwcqwauosmsqm: if (!($this->cskwmweqysskwckg("\x71\x75\x65\x72\171\x5f\x73\164\x72\x69\156\x67") && !$this->koguieumooaesyww())) { goto gsqcoqqsioiyoykq; } $this->yauwooaeicgosquo("\x51\165\145\x72\x79\x20\163\x74\162\151\156\147\x20\125\x52\x4c\40\151\x73\40\145\x78\x63\x6c\x75\144\x65\144\56", $_GET); return false; gsqcoqqsioiyoykq: if (!($this->cskwmweqysskwckg("\163\163\x6c") & !$this->eqwgocqwoyyykwke())) { goto goaowamiyyamueiw; } $this->yauwooaeicgosquo("\123\x53\x4c\x20\143\141\143\x68\145\40\156\x6f\164\40\x61\x70\160\154\151\145\x64\x20\164\x6f\x20\x70\x61\147\145\x2e"); return false; goaowamiyyamueiw: if (!($this->cskwmweqysskwckg("\165\x72\151") && !$this->qweiomkkuikwugks())) { goto iaomqomgiwiegoca; } $this->yauwooaeicgosquo("\x50\x61\x67\145\x20\x69\x73\40\x65\170\x63\154\x75\x64\x65\144\56"); return false; iaomqomgiwiegoca: if (!($this->cskwmweqysskwckg("\x72\x65\x6a\x65\143\164\145\144\137\x63\157\157\x6b\151\x65") && $this->cokqaygwwygweuyk())) { goto ysweqawmawicakeo; } $this->yauwooaeicgosquo("\x45\170\x63\x6c\165\144\x65\x64\x20\143\x6f\157\x6b\x69\x65\40\146\157\x75\156\x64\x2e", ["\145\x78\x63\x6c\x75\144\x65\144\137\143\x6f\157\x6b\151\145\163" => $this->cokqaygwwygweuyk()]); return false; ysweqawmawicakeo: if (!($this->cskwmweqysskwckg("\155\x61\156\144\x61\x74\x6f\162\x79\137\x63\157\157\x6b\151\145") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto owisckseoogsugqq; } $this->yauwooaeicgosquo("\115\151\x73\x73\x69\x6e\147\x20\x6d\141\x6e\144\141\x74\x6f\x72\171\x20\x63\x6f\x6f\153\151\x65\x3a\x20\160\x61\x67\x65\x20\156\x6f\x74\x20\x70\x72\157\143\145\163\163\x65\144\56", ["\x6d\x69\x73\x73\151\x6e\147\x5f\143\157\x6f\x6b\x69\145\x73" => $this->qgymyeqwqaiwmmea()]); return false; owisckseoogsugqq: if (!($this->cskwmweqysskwckg("\165\163\145\x72\137\141\147\145\x6e\164") && !$this->mqiqsuksgyekwkii())) { goto ookcgumoacskyymy; } $this->yauwooaeicgosquo("\125\x73\145\162\x20\101\147\145\x6e\164\x20\x69\x73\x20\145\x78\143\154\x75\144\x65\144\x2e", ["\165\163\145\162\137\x61\147\x65\156\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\x5f\x55\123\105\x52\x5f\101\107\105\116\x54")]); return false; ookcgumoacskyymy: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto cuseccewekgcgkyg; } $this->yauwooaeicgosquo("\102\165\x66\146\x65\x72\x20\x63\x6f\156\164\x65\156\164\40\x75\156\x64\145\162\40\62\x35\65\40\x63\x68\x61\x72\x61\x63\x74\145\x72\163\x2e"); return false; cuseccewekgcgkyg: if (!(http_response_code() !== 200)) { goto kgysyqkoqgwmoscq; } $this->yauwooaeicgosquo("\120\x61\147\145\40\151\163\40\x6e\157\164\40\141\40\x32\60\60\40\x48\x54\x54\x50\x20\x72\145\x73\160\157\156\163\145\x20\x61\x6e\x64\40\143\x61\156\x6e\x6f\x74\40\x62\x65\40\x63\141\x63\150\145\144\x2e"); return false; kgysyqkoqgwmoscq: if (!($this->cskwmweqysskwckg("\144\x6f\156\157\x74\x6f\160\x74\x69\155\x69\172\145\160\141\147\x65") && $this->cowcgqokiosgaqic())) { goto makomwwyomweyamm; } $this->yauwooaeicgosquo("\x44\x4f\x4e\124\x4f\120\x54\x49\x4d\x49\132\105\104\x50\101\107\105\40\x69\163\x20\144\145\x66\x69\x6e\x65\x64\56\40\120\x61\x67\145\x20\x63\x61\156\x6e\x6f\164\40\x62\x65\x20\x63\141\143\x68\145\x64\56"); return false; makomwwyomweyamm: if (!($this->cskwmweqysskwckg("\x77\x70\x5f\64\x30\x34") && $this->kmmyuiwaogukwqqi())) { goto oqwcmgwimeisusoe; } $this->yauwooaeicgosquo("\127\120\x20\64\x30\x34\x20\160\x61\x67\145\40\x69\163\x20\x65\x78\143\154\x75\x64\145\144\x2e"); return false; oqwcmgwimeisusoe: if (!($this->cskwmweqysskwckg("\163\x65\141\162\x63\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto acesyuieuuqwgkwm; } $this->yauwooaeicgosquo("\123\145\x61\162\143\150\x20\x70\x61\147\145\40\151\x73\x20\145\x78\x63\154\165\144\145\x64\x2e"); return false; acesyuieuuqwgkwm: if (!$this->cskwmweqysskwckg("\x69\x73\x5f\150\164\x6d\x6c")) { goto qiaaqkymeuuueoqk; } if (!($this->cmaecekuqkwmemms("\122\105\123\x54\x5f\122\105\121\125\x45\x53\124") || $this->gaiygescoqgyusaa())) { goto asaowisseacciyia; } unset($this->tests["\x69\x73\137\x68\x74\155\154"]); asaowisseacciyia: qiaaqkymeuuueoqk: if (!($this->cskwmweqysskwckg("\151\163\137\150\x74\x6d\x6c") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto ugswokwmkumcmigc; } $this->yauwooaeicgosquo("\x4e\157\40\x63\154\157\163\x69\x6e\147\40\x3c\57\150\x74\x6d\x6c\76\40\167\141\x73\x20\146\x6f\165\x6e\144\56"); return false; ugswokwmkumcmigc: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\x70\x72\x5f\157\x70\x74\x69\155\x69\x7a\x61\164\x69\157\x6e\x5f\x61\x6c\154\x6f\x77\x5f\x74\157\137\163\164\141\162\164\137\x62\165\x66\x66\145\162\x5f\x70\x72\x6f\143\x65\x73\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto gwiaimosqoiquwkc; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto owgakkqgckqcegoi; gwiaimosqoiquwkc: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); owgakkqgckqcegoi: return apply_filters("\160\x72\x5f\157\x70\164\151\x6d\x69\x7a\x61\x74\151\157\x6e\137\x68\141\163\137{$ymqmyyeuycgmigyo}\x5f\x74\x65\163\164", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\x2f\x3c\134\x73\x2a\x5c\57\134\x73\x2a\x68\164\155\154\134\x73\x2a\x3e\x2f\x69", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\x2f\50\x3f\x3a\56\53\57\x29\77" . $wp_rewrite->feed_base . "\x28\x3f\x3a\x2f\50\77\x3a\x2e\53\57\x3f\51\x3f\x29\77\44"; return (bool) preg_match("\x23\x5e\x28{$uckmmkmoeikwsiqg}\x29\44\43\x69", $this->gygiweeesqqckgme()); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cigesysuauaiccms; } return $this->eecucukcqkqysiau(__FUNCTION__); cigesysuauaiccms: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto qumkwsqqocooyuoq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qumkwsqqocooyuoq: $ucasskoyoewwmmii = ["\162\x6f\142\157\164\x73\56\164\170\x74", "\x2e\150\x74\141\143\x63\x65\x73\163"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto wwswmaewcaisauei; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wwswmaewcaisauei: kkewoqqowugagwoy: } gcskyqewysqaceeg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wsemeeocquawyauo; } return $this->eecucukcqkqysiau(__FUNCTION__); wsemeeocquawyauo: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto wmaeicoyyciuaiuy; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto ocgkwqqmgasuoies; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ocgkwqqmgasuoies: wmaeicoyyciuaiuy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ooysmgyeqoiesgqm; } return $this->eecucukcqkqysiau(__FUNCTION__); ooysmgyeqoiesgqm: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto kwoyiysciqumswcy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kwoyiysciqumswcy: if (!(strtolower($iyiwooigkweeewey) === "\57\151\x6e\x64\145\x78\56\160\150\x70")) { goto aaogeemgkogagkai; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); aaogeemgkogagkai: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\x68\x70" => 1, "\x78\x6d\x6c" => 1, "\x78\x73\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\x44\117\x49\x4e\x47\137\101\x4a\x41\x58"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\x53")), ["\x6f\156", "\x31"]) || "\64\x34\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\122\x56\105\x52\137\120\117\122\x54"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\160\137\x63\165\163\164\x6f\x6d\151\x7a\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\x45\124" => 1, "\110\x45\101\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qqmmycmsoqegcqqw; } return $this->eecucukcqkqysiau(__FUNCTION__); qqmmycmsoqegcqqw: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto isqwwmikecauwyuc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); isqwwmikecauwyuc: $yccgiaiouekkouay = ["\163" => 1, "\x6c\x61\156\147" => 1, "\160\145\162\x6d\x61\154\151\156\153\137\x6e\141\155\145" => 1, "\x6c\x70\x2d\166\141\162\151\x61\164\x69\157\156\x2d\x69\x64" => 1, "\x58\x44\x45\x42\125\x47\137\123\x45\x53\x53\111\117\x4e\137\123\x54\x41\122\124" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto oiiqqgyqmggyiums; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); oiiqqgyqmggyiums: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\141\143\150\x65\x5f\x71\165\x65\162\171\x5f\x73\164\x72\x69\x6e\147\x73"); if ($yccgiaiouekkouay) { goto magymcqykamwqigw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); magymcqykamwqigw: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ukogwqiuuuakkawy; } return $this->eecucukcqkqysiau(__FUNCTION__); ukogwqiuuuakkawy: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto gicmaqmuscawegie; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gicmaqmuscawegie: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto oymyqcoekqyuiguq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oymyqcoekqyuiguq: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto ucksaiwquekagyqe; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; ucksaiwquekagyqe: gygqgauaceiuawkq: } ayamomygygmgwgkg: if (empty($eiocugauqgouiuyi)) { goto iyeswoaqkaeggiiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); iyeswoaqkaeggiiy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto asqqqqakiagymemk; } return $this->eecucukcqkqysiau(__FUNCTION__); asqqqqakiagymemk: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto jkgouewqysmscmqs; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); jkgouewqysmscmqs: $yiycakoikkyuokgk = array_flip(explode("\174", $this->aceaeommyuooiqge()->get("\x63\141\143\x68\145\137\155\x61\x6e\144\x61\164\157\162\x79\137\x63\157\157\x6b\151\145\163"))); if ($this->wemyikwikgwqwuoc()) { goto sgiuwkisugmewmcs; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); sgiuwkisugmewmcs: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto eacysqsegwcqawsa; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); eacysqsegwcqawsa: iquecygaakmiomeg: } kceeuicccqscwgsu: if (!empty($yiycakoikkyuokgk)) { goto yimeskeioamqmuwg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yimeskeioamqmuwg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\x70\x72\137\x6f\x70\164\x69\x6d\x69\172\x61\x74\x69\157\156\137\157\166\145\x72\162\151\x64\145\x5f\144\x6f\x6e\164\137\157\x70\x74\x69\x6d\x69\172\x65", $this->cmaecekuqkwmemms("\x50\x52\x5f\117\x50\x54\x49\115\x49\x5a\101\124\111\x4f\x4e\137\104\x4f\116\124\137\x4f\x50\x54\111\115\111\x5a\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\163\x5f\x34\x30\x34") || is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\151\163\x5f\x73\x65\x61\x72\143\150") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\162\x5f\157\160\x74\151\x6d\x69\x7a\141\164\x69\157\x6e\x5f\x6f\x70\x74\151\155\x69\x7a\x65\137\163\x65\x61\x72\x63\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\x65\x5f\163\163\154"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yeemsgmumygmumqw; } return $this->eecucukcqkqysiau(__FUNCTION__); yeemsgmumygmumqw: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto wkaoyycsoeoyqcae; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wkaoyycsoeoyqcae: if (!$this->aceaeommyuooiqge()->get("\155\157\x62\x69\154\145\137\x63\141\x63\x68\145")) { goto cwugokqsmiomgmqg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cwugokqsmiomgmqg: $wayquiskgeuoqamk = "\62\56\60\x5c\x20\115\x4d\120\174\62\64\x30\170\63\x32\60\x7c\64\x30\x30\130\62\64\60\174\x41\x76\x61\156\164\107\157\x7c\102\154\x61\x63\x6b\102\x65\x72\x72\171\x7c\102\x6c\x61\x7a\x65\162\174\103\145\154\154\x70\150\157\x6e\145\174\104\x61\x6e\147\x65\x72\174\104\x6f\103\x6f\115\157\174\105\x6c\x61\x69\156\x65\57\63\x2e\x30\x7c\x45\x75\144\157\162\x61\x57\x65\x62\x7c\x47\157\x6f\x67\x6c\x65\142\x6f\164\55\x4d\x6f\x62\151\x6c\x65\174\150\x69\x70\x74\157\x70\x7c\111\105\x4d\157\x62\151\154\x65\174\113\x59\x4f\103\105\122\101\x2f\127\130\63\61\60\x4b\174\114\x47\57\x55\x39\x39\60\x7c\x4d\x49\x44\x50\55\62\56\x7c\x4d\x4d\x45\x46\x32\60\174\x4d\117\x54\x2d\x56\174\116\145\164\106\x72\157\156\164\x7c\116\x65\167\x74\x7c\116\151\156\164\x65\156\144\x6f\134\40\x57\x69\151\x7c\x4e\151\164\x72\157\174\x4e\x6f\x6b\151\x61\x7c\x4f\160\x65\x72\141\x5c\x20\x4d\x69\x6e\x69\x7c\120\141\154\x6d\x7c\120\x6c\x61\x79\x53\164\x61\164\151\157\x6e\134\40\x50\x6f\162\164\141\x62\x6c\145\174\x70\157\x72\x74\141\154\x6d\155\x6d\x7c\120\x72\157\170\x69\x6e\145\x74\174\120\x72\x6f\x78\x69\x4e\x65\x74\x7c\123\110\101\x52\x50\x2d\x54\x51\x2d\107\130\61\60\x7c\123\x48\x47\x2d\x69\x39\x30\x30\x7c\123\x6d\141\x6c\x6c\174\x53\157\x6e\171\105\x72\151\143\x73\163\x6f\156\x7c\x53\x79\x6d\x62\x69\x61\x6e\x5c\x20\x4f\123\174\x53\x79\x6d\x62\x69\141\156\x4f\x53\x7c\x54\x53\x32\x31\151\55\61\60\x7c\x55\x50\56\102\x72\x6f\167\163\x65\x72\174\125\x50\56\114\151\x6e\x6b\x7c\167\145\x62\x4f\x53\x7c\x57\x69\x6e\x64\157\167\163\134\x20\103\105\174\127\x69\x6e\127\101\x50\174\x59\x61\150\x6f\157\x53\x65\x65\153\145\162\x2f\x4d\61\x41\x31\55\x52\62\104\62\174\x69\120\150\157\156\x65\x7c\151\120\x6f\x64\x7c\101\156\144\x72\x6f\151\144\x7c\102\154\141\143\x6b\102\x65\x72\x72\x79\71\x35\63\x30\x7c\x4c\107\x2d\124\125\x39\x31\x35\134\40\x4f\x62\x69\x67\157\174\x4c\107\x45\x5c\40\126\130\x7c\x77\145\142\117\x53\x7c\116\x6f\x6b\x69\141\x35\x38\x30\x30"; if (!preg_match("\x23\136\x2e\52\x28{$wayquiskgeuoqamk}\x29\x2e\52\43\x69", $uowwycywwssskuys)) { goto uuuceqkseqkqawko; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uuuceqkseqkqawko: $wayquiskgeuoqamk = "\x77\63\143\x5c\40\174\167\63\x63\55\174\x61\143\163\x2d\x7c\141\154\141\x76\x7c\x61\x6c\143\x61\174\x61\x6d\x6f\x69\x7c\x61\x75\144\151\174\x61\x76\x61\156\x7c\142\145\156\x71\174\142\x69\162\144\x7c\x62\x6c\141\x63\174\142\154\x61\172\174\142\x72\145\x77\x7c\x63\145\x6c\x6c\x7c\143\154\x64\143\174\143\x6d\x64\x2d\x7c\x64\x61\x6e\147\174\144\x6f\143\157\174\145\162\151\x63\174\150\151\x70\x74\174\x68\164\x63\137\174\151\156\156\x6f\x7c\151\160\141\161\x7c\151\160\157\144\x7c\x6a\x69\x67\x73\174\x6b\144\144\151\174\153\x65\x6a\151\x7c\154\x65\156\157\x7c\x6c\x67\x2d\143\174\x6c\x67\x2d\x64\174\x6c\147\x2d\147\174\154\x67\x65\55\x7c\154\x67\x2f\165\174\155\141\165\x69\174\155\141\x78\157\174\x6d\151\144\160\x7c\155\151\x74\x73\174\155\x6d\145\146\x7c\155\x6f\x62\x69\x7c\x6d\x6f\x74\55\x7c\155\x6f\164\x6f\174\155\167\x62\160\x7c\x6e\145\x63\55\x7c\x6e\145\167\164\x7c\x6e\x6f\x6b\151\x7c\x70\x61\x6c\155\x7c\160\x61\x6e\141\x7c\160\141\156\164\174\x70\150\x69\x6c\174\160\x6c\141\171\x7c\160\x6f\x72\164\174\160\x72\x6f\x78\174\x71\x77\141\x70\174\163\141\147\145\x7c\x73\141\x6d\x73\174\x73\x61\156\171\x7c\x73\143\x68\55\174\x73\x65\143\x2d\174\x73\145\156\x64\x7c\163\145\162\x69\174\x73\147\150\x2d\174\163\150\x61\162\x7c\163\x69\x65\x2d\174\x73\151\x65\155\174\x73\x6d\x61\154\174\163\x6d\x61\162\x7c\163\157\156\x79\x7c\x73\160\x68\x2d\x7c\x73\x79\x6d\142\174\x74\x2d\x6d\157\174\164\145\x6c\x69\x7c\x74\x69\155\55\174\164\x6f\x73\x68\x7c\x74\163\x6d\x2d\174\165\x70\147\x31\x7c\x75\x70\163\151\x7c\x76\153\x2d\x76\x7c\166\157\x64\141\174\167\x61\x70\55\174\167\x61\x70\x61\x7c\167\141\x70\151\x7c\x77\141\x70\160\174\x77\x61\160\162\174\x77\145\x62\143\174\x77\x69\156\x77\174\x77\151\x6e\x77\174\x78\x64\x61\134\40\x7c\170\x64\141\x2d"; if (!preg_match("\43\136\x28{$wayquiskgeuoqamk}\51\56\52\43\151", $uowwycywwssskuys)) { goto ekoegocuqoycoeyq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ekoegocuqoycoeyq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yksamaucqkqsawkk; } return $this->eecucukcqkqysiau(__FUNCTION__); yksamaucqkqsawkk: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto akeoaicoieaiekcw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); akeoaicoieaiekcw: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\143\141\143\x68\145\137\162\145\x6a\x65\143\x74\137\x75\x61"); if ($mqsuiayuwmwqaqwm) { goto kskqquqsegiiogek; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kskqquqsegiiogek: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\x23{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mocaoayiouggauiy; } return $this->eecucukcqkqysiau(__FUNCTION__); mocaoayiouggauiy: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\141\143\150\x65\137\x72\145\x6a\145\x63\x74\x5f\165\162\151"); if ($escsaeeosigewsme) { goto ygskksomysgaokek; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ygskksomysgaokek: $yciaosuiyeieceug = !preg_match("\x23\136\x28{$escsaeeosigewsme}\x29\x24\43\x69", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\120\x5f\x55\123\105\x52\x5f\x41\x47\105\116\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wwcwmkowgooocaem; } return $this->eecucukcqkqysiau(__FUNCTION__); wwcwmkowgooocaem: $yygmoeguaqyumuui = [ "\110\124\124\120\137\x43\x46\137\x43\x4f\x4e\116\x45\x43\124\x49\116\x47\x5f\x49\x50", "\x48\x54\x54\x50\137\x43\x4c\x49\105\116\124\x5f\111\x50", "\110\x54\x54\x50\x5f\x58\x5f\106\x4f\x52\x57\101\x52\104\x45\x44\x5f\106\117\x52", "\x48\124\124\x50\x5f\130\x5f\x46\117\x52\x57\x41\x52\104\x45\x44", "\110\x54\124\x50\137\130\x5f\103\x4c\125\123\124\105\122\x5f\x43\x4c\111\x45\116\x54\137\111\x50", "\x48\x54\124\120\137\130\137\122\x45\x41\114\137\111\120", "\110\124\x54\x50\137\x46\x4f\x52\127\101\122\104\x45\x44\x5f\x46\117\122", "\x48\124\124\x50\x5f\x46\x4f\x52\x57\101\x52\x44\x45\x44", "\x52\x45\115\x4f\x54\x45\x5f\x41\x44\104\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto aeaciamekuqyieys; } $kucumcusyyckayas = explode("\54", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto wyugqoowakyicyic; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); wyugqoowakyicyic: aeaciamekuqyieys: becceuuwokgoaewy: } qgkiguggkyiycwow: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\60\x2e\60\x2e\x30\56\60"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ugiqiewymimqecsu; } return $this->eecucukcqkqysiau(__FUNCTION__); ugiqiewymimqecsu: $yywgiquyoymymqwk = [ "\x32\x30\x38\x2e\x37\x30\56\x32\x34\x37\56\61\65\x37" => '', "\61\67\x32\x2e\62\x35\x35\x2e\64\x38\56\x31\63\60" => '', "\x31\x37\x32\56\x32\65\65\x2e\x34\70\x2e\61\63\61" => '', "\61\x37\x32\56\x32\65\65\x2e\64\x38\56\x31\63\x32" => '', "\x31\67\x32\56\62\x35\65\x2e\64\x38\x2e\x31\63\x33" => '', "\x31\x37\x32\56\62\65\x35\x2e\64\70\56\x31\63\64" => '', "\61\67\62\x2e\62\x35\x35\x2e\x34\x38\x2e\61\63\x35" => '', "\61\x37\62\x2e\x32\x35\x35\x2e\x34\70\x2e\61\63\x36" => '', "\61\x37\x32\56\x32\x35\x35\56\x34\x38\56\x31\63\x37" => '', "\61\x37\x32\56\x32\65\65\56\x34\x38\56\61\63\x38" => '', "\61\67\x32\x2e\62\65\x35\56\x34\x38\56\61\x33\x39" => '', "\x31\67\62\56\62\x35\x35\56\64\70\56\61\x34\60" => '', "\x31\x37\62\x2e\x32\x35\65\x2e\x34\70\56\61\64\61" => '', "\61\67\x32\x2e\62\65\x35\x2e\x34\x38\x2e\x31\x34\62" => '', "\x31\67\x32\x2e\x32\x35\x35\x2e\64\70\x2e\x31\64\63" => '', "\x31\x37\x32\56\62\x35\65\56\64\x38\x2e\61\64\64" => '', "\61\67\62\56\62\65\65\56\x34\70\56\x31\64\x35" => '', "\61\x37\62\x2e\x32\x35\x35\56\64\x38\x2e\61\x34\66" => '', "\x31\67\62\56\62\x35\x35\56\64\70\x2e\61\x34\67" => '', "\x35\x32\x2e\x32\x32\x39\x2e\x31\62\62\56\62\x34\x30" => '', "\x31\60\x34\x2e\62\x31\64\56\67\x32\x2e\x31\x30\x31" => '', "\x31\x33\56\x36\x36\x2e\67\x2e\61\61" => '', "\61\x33\56\x38\65\56\x32\64\56\x38\x33" => '', "\x31\63\56\70\x35\56\62\x34\x2e\x39\60" => '', "\61\63\x2e\70\65\x2e\x38\x32\x2e\x32\x36" => '', "\64\x30\x2e\x37\64\56\62\x34\62\56\62\x35\x33" => '', "\64\60\x2e\x37\64\x2e\62\64\x33\x2e\61\63" => '', "\64\x30\x2e\x37\x34\56\x32\x34\63\56\x31\x37\66" => '', "\61\x30\64\56\62\61\x34\x2e\x34\70\56\x32\x34\67" => '', "\61\65\67\x2e\x35\65\x2e\x31\x38\x39\x2e\61\x38\x39" => '', "\x31\60\x34\56\62\x31\64\56\x31\61\60\56\61\x33\65" => '', "\x37\x30\x2e\x33\x37\x2e\x38\63\x2e\x32\x34\60" => '', "\66\x35\x2e\65\62\56\x33\x36\56\62\65\x30" => '', "\x31\x33\56\x37\70\56\62\61\x36\56\65\x36" => '', "\x35\x32\x2e\61\x36\62\56\x32\x31\x32\56\61\66\63" => '', "\62\x33\56\x39\x36\x2e\63\64\56\61\60\65" => '', "\66\x35\56\x35\x32\x2e\x31\x31\63\56\x32\x33\x36" => '', "\x31\67\x32\56\62\x35\65\56\x36\61\56\x33\64" => '', "\x31\67\62\x2e\62\65\65\56\x36\61\56\63\x35" => '', "\61\67\62\56\x32\65\65\56\66\61\56\x33\66" => '', "\61\x37\x32\56\62\65\x35\x2e\x36\61\x2e\63\67" => '', "\x31\67\x32\x2e\62\x35\65\56\66\61\56\63\x38" => '', "\x31\67\62\56\x32\x35\x35\x2e\66\61\56\x33\x39" => '', "\61\67\x32\56\62\65\x35\56\x36\61\56\64\x30" => '', "\x35\x32\x2e\62\x33\67\x2e\62\x33\65\56\x31\70\x35" => '', "\x35\x32\x2e\62\63\67\56\x32\65\60\56\67\x33" => '', "\x35\x32\56\62\63\x37\x2e\x32\63\x36\x2e\61\x34\x35" => '', "\61\x30\x34\x2e\64\61\56\62\x2e\x31\x39" => '', "\61\x39\61\56\62\x33\x35\56\71\70\x2e\61\x36\x34" => '', "\x31\71\61\56\62\63\65\x2e\71\71\x2e\62\x32\61" => '', "\x31\71\61\x2e\x32\63\x32\x2e\x31\71\64\x2e\65\x31" => '', "\61\60\64\56\62\x31\61\56\x31\x34\63\56\70" => '', "\x31\x30\x34\x2e\x32\x31\x31\x2e\x31\x36\65\56\65\x33" => '', "\65\x32\x2e\x31\67\62\56\61\64\x2e\x38\x37" => '', "\64\60\x2e\70\x33\x2e\70\x39\56\62\x31\x34" => '', "\65\x32\x2e\x31\67\65\x2e\65\x37\56\70\x31" => '', "\62\x30\x2e\61\70\x38\56\x36\63\56\x31\x35\61" => '', "\62\x30\x2e\65\62\x2e\63\x36\x2e\64\x39" => '', "\x35\x32\x2e\x32\x34\x36\56\61\66\x35\x2e\x31\65\x33" => '', "\65\x31\56\61\x34\x34\56\61\x30\62\56\x32\x33\x33" => '', "\61\x33\x2e\67\66\56\x39\67\56\62\x32\64" => '', "\x31\x30\x32\x2e\61\63\63\56\x31\x36\71\x2e\66\x36" => '', "\65\62\x2e\x32\63\61\56\x31\71\71\56\x31\67\60" => '', "\x31\63\x2e\x35\63\56\x31\66\x32\x2e\67" => '', "\x34\60\x2e\61\x32\x33\56\62\61\70\x2e\71\64" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto iuysqgmmgqiywssm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); iuysqgmmgqiywssm: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\120\x5f\125\123\x45\x52\137\x41\107\105\116\124"); if ($uowwycywwssskuys) { goto weouocwmwicayyiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); weouocwmwicayyiy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\43\x50\151\156\x67\x64\157\x6d\x50\141\x67\145\123\x70\x65\145\x64\x7c\x44\x61\162\145\x42\157\157\x73\164\x7c\107\157\157\147\x6c\145\x7c\120\124\123\x54\174\x43\150\162\157\155\145\55\x4c\x69\x67\150\x74\150\x6f\165\163\x65\x7c\127\x50\x20\122\x6f\x63\x6b\145\x74\x23\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\x51\x55\x45\123\x54\137\125\x52\111", ''); if (!$iyiwooigkweeewey) { goto ggyoywwggggekycs; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\57"); ggyoywwggggekycs: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto gkkwmqoacciwomqs; } return ''; gkkwmqoacciwomqs: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto kucqcgeesiccuuia; } return $magawcseesgowoeo; kucqcgeesiccuuia: return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto oycuaqewsskgkqci; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); oycuaqewsskgkqci: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\121\125\105\123\x54\137\115\105\124\110\x4f\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto amqgiisymksuuuss; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\x61\x63\150\x65\x5f\151\147\x6e\x6f\162\145\144\137\160\141\162\x61\155\145\164\x65\162\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto ocmagamuyawyiyka; } ksort($eyagkkkqkwcuygso); ocmagamuyawyiyka: amqgiisymksuuuss: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; syoeqaqkseguwmgy: if (!(strpos($euueacigmgoqkimu, "\56\57") !== false || strpos($euueacigmgoqkimu, "\57\x2e") !== false || "\x2e" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu)) { goto iwgmywqocewwgoeo; } if (strpos($euueacigmgoqkimu, "\x2e\56\x2f") === 0) { goto geasgywiogoeamek; } if (strpos($euueacigmgoqkimu, "\56\x2f") === 0) { goto umemmgiwimkymaya; } if (strpos($euueacigmgoqkimu, "\x2f\56\57") === 0) { goto woqkgwmkmqsuceuy; } if ("\x2f\56" === $euueacigmgoqkimu) { goto gsiaskgsukseumig; } if (strpos($euueacigmgoqkimu, "\57\56\x2e\57") === 0) { goto iquugwoswgkoiieg; } if ("\x2f\x2e\x2e" === $euueacigmgoqkimu) { goto wowmysuygugawmmu; } if ("\x2e" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu) { goto ucasigqmoiwaimkk; } if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { goto sgiouaqukyycswqm; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto gwkawguwsamuomuo; sgiouaqukyycswqm: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); gwkawguwsamuomuo: goto uugwmywmaqomeksa; ucasigqmoiwaimkk: $euueacigmgoqkimu = ''; uugwmywmaqomeksa: goto mmmqqoemusicwgqg; wowmysuygugawmmu: $euueacigmgoqkimu = "\57"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); mmmqqoemusicwgqg: goto xogaycsaesgqeqig; iquugwoswgkoiieg: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); xogaycsaesgqeqig: goto syiyemqigyugagks; gsiaskgsukseumig: $euueacigmgoqkimu = "\57"; syiyemqigyugagks: goto imwiyqcekcykscui; woqkgwmkmqsuceuy: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); imwiyqcekcykscui: goto omsmaougqkqigogw; umemmgiwimkymaya: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); omsmaougqkqigogw: goto qweyymyuuqwcmkqg; geasgywiogoeamek: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); qweyymyuuqwcmkqg: goto syoeqaqkseguwmgy; iwgmywqocewwgoeo: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto guqmgiqaaowaauyo; } $icwicymcioeyeyek["\160\145\x72\x6d\x61\154\x69\156\153"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); guqmgiqaaowaauyo: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto mccimkgwkkamsime; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); mccimkgwkkamsime: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto ucaoyoamaycsiacq; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); ucaoyoamaycsiacq: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $this->lastError = ["\x6d\145\163\163\141\x67\x65" => $uamcoiueqaamsqma, "\x63\157\x6e\x74\x65\x78\164" => $icwicymcioeyeyek]; } }
