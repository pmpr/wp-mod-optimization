<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             664697c805b60             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\x72\151" => 1, "\x73\x73\x6c" => 0, "\167\x70\x5f\64\60\64" => 1, "\163\145\x61\x72\x63\150" => 1, "\155\157\142\151\x6c\145" => 1, "\x69\163\x5f\150\164\155\x6c" => 1, "\x71\165\145\x72\x79\137\x73\x74\162\x69\156\x67" => 1, "\144\x6f\156\157\x74\143\x61\143\150\x65\160\141\x67\x65" => 1, "\162\145\152\x65\x63\164\x65\x64\x5f\x63\x6f\157\x6b\x69\145" => 1, "\x6d\141\x6e\x64\x61\x74\157\162\171\137\x63\157\157\153\151\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\164\x65\x73\x74\163"])) { goto wmumywgyyeagqoeq; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\x65\163\x74\163"]); wmumywgyyeagqoeq: if (!(!isset($ywmkwiwkosakssii["\143\x6f\x6f\153\x69\x65\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto smcguieygyqcaqgs; } $ywmkwiwkosakssii["\143\x6f\x6f\x6b\x69\145\x73"] = $_COOKIE; smcguieygyqcaqgs: if (!(!isset($ywmkwiwkosakssii["\x70\x6f\x73\164"]) && !empty($_POST) && is_array($_POST))) { goto mgcuiguaomoqwwwm; } $ywmkwiwkosakssii["\x70\157\163\164"] = $_POST; mgcuiguaomoqwwwm: if (!(!isset($ywmkwiwkosakssii["\x67\x65\164"]) && !empty($_GET) && is_array($_GET))) { goto eoyiumycaigawmmc; } $ywmkwiwkosakssii["\147\x65\x74"] = $_GET; eoyiumycaigawmmc: $this->get = !empty($ywmkwiwkosakssii["\x67\x65\x74"]) && is_array($ywmkwiwkosakssii["\x67\145\x74"]) ? $ywmkwiwkosakssii["\147\x65\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\x6f\163\x74"]) && is_array($ywmkwiwkosakssii["\160\x6f\163\x74"]) ? $ywmkwiwkosakssii["\160\x6f\x73\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\157\157\x6b\151\x65\x73"]) && is_array($ywmkwiwkosakssii["\143\x6f\157\153\151\145\163"]) ? $ywmkwiwkosakssii["\143\x6f\x6f\x6b\151\145\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto yuoeumyiuqkuouey; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\160\137\x63\165\x73\x74\157\155\151\x7a\145" => '']); yuoeumyiuqkuouey: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->kgkoeoeseyuugaao()) { goto eyiwqgqcsqakwqss; } $this->yauwooaeicgosquo("\122\157\142\x6f\164\x73\x2e\164\x78\164\40\157\x72\x20\56\150\164\141\x63\x63\x65\x73\163\x20\146\151\x6c\145\40\151\x73\40\145\170\143\x6c\x75\x64\x65\144\56"); return false; eyiwqgqcsqakwqss: if (!$this->gymgcceeqssmesiu()) { goto sckioayasmkcoeoo; } $this->yauwooaeicgosquo("\120\110\x50\x2c\40\130\x4d\114\x2c\x20\157\x72\40\130\123\114\40\146\x69\154\145\40\x69\163\40\145\x78\143\154\x75\x64\x65\x64\56"); return false; sckioayasmkcoeoo: if (!$this->goecwaaykqoaaagg()) { goto yssqmyoaokkksukc; } $this->yauwooaeicgosquo("\101\144\155\151\x6e\40\157\162\x20\x41\x4a\101\x58\40\125\122\114\x20\x69\x73\40\145\170\143\154\x75\144\x65\x64\x2e"); return false; yssqmyoaokkksukc: if (!$this->sgsscqasgeyeicoe()) { goto ooqksueucyagyuoe; } $this->yauwooaeicgosquo("\x41\144\x6d\151\x6e\x20\x6f\x72\40\x41\x4a\x41\x58\40\x55\x52\x4c\40\151\x73\40\x65\x78\x63\x6c\165\144\145\x64\56"); return false; ooqksueucyagyuoe: if ($this->gooeyogikcusgwuu()) { goto osmmoyqkqoucsgow; } $this->yauwooaeicgosquo("\122\145\x71\x75\x65\163\164\x20\x6d\145\x74\150\157\x64\x20\151\x73\x20\x6e\157\164\40\x61\x6c\x6c\157\x77\x65\x64\x2e\x20\x50\x61\x67\145\x20\x63\x61\x6e\156\157\x74\40\142\x65\40\x63\141\x63\150\x65\144\x2e", ["\162\x65\161\165\145\x73\x74\x5f\x6d\x65\164\x68\x6f\x64" => $this->ciyocmkwssocskiy()]); return false; osmmoyqkqoucsgow: if ($this->cskwmweqysskwckg()) { goto wgiygcmqaokywuqa; } $this->lastError = []; return true; wgiygcmqaokywuqa: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\163\165\143\143\x65\x73\x73"]) { goto iauwuugggmegwisk; } $this->yauwooaeicgosquo("\116\157\x20\x63\x6f\x6e\x66\151\x67\40\x66\151\x6c\145\40\146\x6f\165\156\144", ["\x63\x6f\156\146\151\x67\x5f\160\x61\x74\150" => $uiewakwqscemywuo["\x70\x61\x74\150"]]); return false; iauwuugggmegwisk: if (!($this->cskwmweqysskwckg("\161\x75\145\162\x79\137\x73\x74\162\151\156\147") && !$this->koguieumooaesyww())) { goto aukucaieceiwesmm; } $this->yauwooaeicgosquo("\x51\165\145\x72\x79\x20\163\x74\162\151\x6e\147\x20\125\x52\x4c\x20\151\163\x20\x65\x78\143\x6c\165\144\145\x64\x2e", $_GET); return false; aukucaieceiwesmm: if (!($this->cskwmweqysskwckg("\x73\x73\x6c") & !$this->eqwgocqwoyyykwke())) { goto kqyoakickmseyyeq; } $this->yauwooaeicgosquo("\x53\x53\x4c\x20\143\141\143\150\145\40\156\157\164\40\141\160\x70\154\151\x65\x64\40\x74\x6f\x20\x70\141\147\145\56"); return false; kqyoakickmseyyeq: if (!($this->cskwmweqysskwckg("\x75\162\x69") && !$this->qweiomkkuikwugks())) { goto micceocwuwkyusic; } $this->yauwooaeicgosquo("\120\141\147\145\x20\x69\163\x20\x65\170\x63\x6c\165\x64\x65\x64\x2e"); return false; micceocwuwkyusic: if (!($this->cskwmweqysskwckg("\162\145\x6a\x65\143\x74\x65\x64\137\143\157\x6f\x6b\x69\145") && $this->cokqaygwwygweuyk())) { goto iwueukqcywkiyqge; } $this->yauwooaeicgosquo("\x45\170\x63\x6c\165\x64\145\x64\40\x63\157\x6f\153\x69\x65\40\146\157\165\156\144\x2e", ["\x65\170\x63\154\x75\x64\145\144\x5f\143\157\157\153\151\145\x73" => $this->cokqaygwwygweuyk()]); return false; iwueukqcywkiyqge: if (!($this->cskwmweqysskwckg("\155\141\156\144\x61\x74\x6f\x72\171\x5f\143\x6f\157\153\x69\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto ykwasaaoeeiuomim; } $this->yauwooaeicgosquo("\115\x69\x73\163\151\156\x67\40\155\x61\x6e\144\x61\x74\157\162\171\40\x63\x6f\x6f\153\x69\x65\72\x20\160\x61\x67\145\40\156\157\x74\40\160\162\157\143\x65\x73\163\145\144\x2e", ["\155\x69\x73\163\151\156\147\x5f\x63\157\x6f\x6b\151\145\163" => $this->qgymyeqwqaiwmmea()]); return false; ykwasaaoeeiuomim: if (!($this->cskwmweqysskwckg("\165\163\x65\162\137\x61\x67\x65\156\164") && !$this->mqiqsuksgyekwkii())) { goto acggikioyeueeowg; } $this->yauwooaeicgosquo("\x55\163\x65\x72\x20\101\x67\145\x6e\164\40\x69\x73\40\145\x78\x63\154\x75\144\x65\144\56", ["\165\x73\145\x72\137\x61\x67\x65\x6e\x74" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\137\125\123\105\x52\137\x41\x47\x45\x4e\x54")]); return false; acggikioyeueeowg: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto cwikoaeqmmoimmso; } $this->yauwooaeicgosquo("\x42\165\x66\x66\145\x72\x20\143\157\x6e\164\145\x6e\164\40\165\156\x64\145\x72\40\62\x35\65\x20\143\150\x61\x72\141\143\164\145\x72\163\x2e"); return false; cwikoaeqmmoimmso: if (!(http_response_code() !== 200)) { goto egaymskkosukqeao; } $this->yauwooaeicgosquo("\x50\x61\147\145\x20\151\163\x20\156\x6f\x74\x20\x61\40\x32\x30\60\x20\x48\124\124\x50\40\162\145\x73\160\x6f\156\x73\x65\x20\141\156\144\40\x63\141\156\x6e\157\164\40\142\145\40\x63\x61\143\150\x65\x64\56"); return false; egaymskkosukqeao: if (!($this->cskwmweqysskwckg("\x64\x6f\x6e\157\164\x6f\160\x74\x69\155\x69\x7a\x65\160\141\x67\145") && $this->cowcgqokiosgaqic())) { goto kaiesowkgwogqseg; } $this->yauwooaeicgosquo("\x44\117\116\124\117\120\x54\111\115\x49\x5a\x45\x44\120\101\107\105\40\151\163\x20\x64\145\146\151\x6e\145\x64\56\40\x50\141\147\x65\x20\x63\141\x6e\x6e\157\164\x20\x62\x65\x20\x63\141\143\x68\145\x64\56"); return false; kaiesowkgwogqseg: if (!($this->cskwmweqysskwckg("\x77\x70\x5f\x34\x30\x34") && $this->kmmyuiwaogukwqqi())) { goto kicwiowcogmauwiy; } $this->yauwooaeicgosquo("\127\x50\40\64\60\x34\40\x70\141\147\x65\40\151\x73\40\145\170\x63\x6c\165\144\145\x64\56"); return false; kicwiowcogmauwiy: if (!($this->cskwmweqysskwckg("\x73\x65\141\162\x63\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto cwswueuqoamqasya; } $this->yauwooaeicgosquo("\x53\145\141\x72\143\x68\40\160\x61\147\145\40\151\x73\x20\x65\x78\x63\x6c\x75\x64\145\144\x2e"); return false; cwswueuqoamqasya: if (!$this->cskwmweqysskwckg("\151\x73\x5f\150\164\155\154")) { goto suuskagowwgsouqw; } if (!($this->cmaecekuqkwmemms("\122\x45\x53\x54\x5f\122\105\x51\x55\105\x53\124") || $this->gaiygescoqgyusaa())) { goto kgmeiwiakwicgkkk; } unset($this->tests["\x69\x73\137\x68\x74\155\x6c"]); kgmeiwiakwicgkkk: suuskagowwgsouqw: if (!($this->cskwmweqysskwckg("\x69\163\137\x68\164\x6d\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto omykokikgocoikec; } $this->yauwooaeicgosquo("\x4e\x6f\x20\x63\x6c\x6f\163\x69\156\147\40\74\x2f\x68\164\x6d\154\x3e\40\x77\x61\x73\x20\146\157\165\156\144\x2e"); return false; omykokikgocoikec: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\x72\137\x6f\160\x74\x69\155\151\x7a\141\164\x69\157\156\x5f\x61\x6c\x6c\157\x77\137\164\x6f\x5f\x73\164\x61\162\164\x5f\x62\x75\146\x66\x65\162\x5f\160\162\157\x63\145\163\x73", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto csieaismmmocyacu; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto aquqkiggamaoegoo; csieaismmmocyacu: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); aquqkiggamaoegoo: return apply_filters("\x70\x72\x5f\157\160\x74\x69\155\151\x7a\x61\164\151\157\x6e\x5f\x68\x61\163\x5f{$ymqmyyeuycgmigyo}\x5f\164\145\163\164", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\57\x3c\134\163\x2a\x5c\57\134\x73\x2a\150\x74\x6d\154\134\163\52\76\57\151", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\x2f\x28\77\x3a\x2e\x2b\x2f\x29\x3f" . $wp_rewrite->feed_base . "\50\77\72\x2f\x28\77\72\x2e\x2b\57\77\x29\77\51\77\44"; return (bool) preg_match("\x23\136\50{$uckmmkmoeikwsiqg}\51\44\x23\x69", $this->gygiweeesqqckgme()); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mykiyqcqiegkiqys; } return $this->eecucukcqkqysiau(__FUNCTION__); mykiyqcqiegkiqys: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto agemwookwseyycqo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); agemwookwseyycqo: $ucasskoyoewwmmii = ["\162\x6f\x62\x6f\164\x73\56\x74\170\x74", "\56\150\164\x61\143\143\x65\x73\163"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto owuuuiekkaeoeacq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); owuuuiekkaeoeacq: koiscokkkaimiecq: } cquecqekuucwoumw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto saauykgakaeiyoua; } return $this->eecucukcqkqysiau(__FUNCTION__); saauykgakaeiyoua: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto mqimkwickkgqqeoi; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto qwemkcoaseywkuuc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qwemkcoaseywkuuc: mqimkwickkgqqeoi: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kwyimqumkuuyaiku; } return $this->eecucukcqkqysiau(__FUNCTION__); kwyimqumkuuyaiku: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto gkqiqaqecmoogmaa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gkqiqaqecmoogmaa: if (!(strtolower($iyiwooigkweeewey) === "\57\x69\156\x64\145\x78\x2e\x70\150\160")) { goto mceucsaeouuwyumm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mceucsaeouuwyumm: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\150\x70" => 1, "\x78\x6d\154" => 1, "\170\x73\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\117\111\116\107\x5f\x41\x4a\x41\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\120\x53")), ["\x6f\156", "\61"]) || "\64\x34\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\105\x52\x56\x45\122\x5f\x50\x4f\x52\124"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\x70\137\143\x75\163\164\157\x6d\x69\172\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\105\x54" => 1, "\110\x45\101\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ceiuqsiqgiuiekem; } return $this->eecucukcqkqysiau(__FUNCTION__); ceiuqsiqgiuiekem: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto gsymkkskwsgggoic; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gsymkkskwsgggoic: $yccgiaiouekkouay = ["\x73" => 1, "\x6c\x61\x6e\x67" => 1, "\160\145\162\155\x61\154\x69\156\x6b\x5f\x6e\x61\x6d\x65" => 1, "\x6c\160\x2d\x76\141\162\x69\141\164\151\x6f\156\x2d\x69\x64" => 1, "\x58\104\105\102\125\107\137\123\x45\123\123\111\117\x4e\137\123\124\101\x52\124" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto ugykmcouiwiscoqu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ugykmcouiwiscoqu: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\145\x5f\x71\x75\x65\162\x79\x5f\x73\164\162\151\x6e\147\163"); if ($yccgiaiouekkouay) { goto isewysikysqewkis; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); isewysikysqewkis: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wiwoiyoakywqyaiy; } return $this->eecucukcqkqysiau(__FUNCTION__); wiwoiyoakywqyaiy: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto igmmqwyawcuuckkq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); igmmqwyawcuuckkq: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto eouwacqiommmeaqc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); eouwacqiommmeaqc: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto ykqsuiyyosyeyscc; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; ykqsuiyyosyeyscc: uscokkmquayiukag: } sqwuqegeiisoiiuq: if (empty($eiocugauqgouiuyi)) { goto ugogoekeckgcmuaw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); ugogoekeckgcmuaw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto egesuwkqkmaigaoe; } return $this->eecucukcqkqysiau(__FUNCTION__); egesuwkqkmaigaoe: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto syusgosewwkoagoq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); syusgosewwkoagoq: $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\143\141\x63\150\x65\137\155\x61\156\144\141\x74\x6f\162\x79\137\143\157\x6f\x6b\x69\145\163"))); if ($this->wemyikwikgwqwuoc()) { goto mcqucouuiuoagqwc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); mcqucouuiuoagqwc: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto oeamoqweiueaueay; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); oeamoqweiueaueay: icumkkykaoqycqqu: } eweaaismksecwagy: if (!empty($yiycakoikkyuokgk)) { goto owgsameoayaogsma; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); owgsameoayaogsma: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\x70\x72\137\157\x70\x74\151\x6d\x69\x7a\x61\x74\151\x6f\x6e\137\x6f\166\145\162\x72\151\144\145\137\144\157\x6e\x74\137\157\160\164\x69\x6d\x69\x7a\x65", $this->cmaecekuqkwmemms("\x50\122\137\x4f\x50\124\111\115\111\132\x41\124\x49\x4f\116\x5f\104\117\116\x54\137\x4f\x50\x54\111\x4d\111\132\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\151\x73\x5f\64\x30\x34") || is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\x69\x73\x5f\163\145\141\x72\x63\150") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\160\162\137\x6f\x70\164\151\155\x69\172\141\164\x69\157\x6e\137\x6f\160\x74\151\155\151\172\x65\x5f\163\x65\141\162\x63\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\x63\141\x63\150\145\137\163\x73\154"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kyiwsiakwgiwouyi; } return $this->eecucukcqkqysiau(__FUNCTION__); kyiwsiakwgiwouyi: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto awgmegueeqeyqamu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); awgmegueeqeyqamu: if (!$this->aceaeommyuooiqge()->get("\155\x6f\142\x69\154\x65\x5f\143\x61\143\150\x65")) { goto gqimwsyemoewagcy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gqimwsyemoewagcy: $wayquiskgeuoqamk = "\x32\x2e\60\x5c\x20\x4d\x4d\120\x7c\x32\x34\60\x78\x33\x32\x30\174\x34\x30\x30\x58\x32\64\x30\174\x41\x76\141\156\164\x47\157\x7c\x42\x6c\x61\x63\x6b\x42\145\x72\162\171\174\102\x6c\x61\x7a\145\x72\174\x43\x65\x6c\x6c\160\x68\157\156\145\174\104\x61\156\x67\145\x72\x7c\104\157\103\157\115\x6f\174\x45\154\141\151\x6e\x65\x2f\x33\x2e\60\x7c\105\165\144\157\162\141\127\x65\142\x7c\x47\x6f\157\x67\x6c\x65\142\x6f\164\x2d\115\157\x62\x69\x6c\x65\x7c\x68\x69\x70\164\x6f\160\174\x49\x45\115\x6f\142\x69\154\145\x7c\113\x59\x4f\x43\x45\x52\x41\57\x57\x58\63\x31\x30\113\174\x4c\107\x2f\125\71\x39\x30\x7c\x4d\x49\104\x50\x2d\x32\x2e\x7c\x4d\x4d\x45\x46\x32\60\x7c\115\x4f\124\55\x56\x7c\x4e\x65\164\106\x72\x6f\x6e\x74\x7c\x4e\145\x77\x74\x7c\116\x69\x6e\164\145\156\x64\157\134\40\127\151\151\x7c\116\x69\x74\x72\x6f\x7c\116\157\x6b\151\x61\x7c\x4f\x70\x65\x72\141\x5c\40\115\151\x6e\151\174\x50\141\154\155\174\x50\x6c\141\x79\123\x74\x61\x74\151\x6f\x6e\134\x20\x50\157\x72\x74\x61\x62\154\x65\x7c\160\157\x72\x74\x61\x6c\155\155\x6d\x7c\x50\162\157\x78\x69\x6e\145\x74\x7c\120\162\x6f\170\x69\116\145\164\174\123\x48\x41\x52\x50\55\x54\121\x2d\x47\130\61\x30\174\x53\110\x47\55\x69\x39\x30\x30\174\123\155\x61\x6c\x6c\x7c\123\157\156\171\105\162\151\x63\163\163\x6f\156\174\123\x79\x6d\142\151\x61\x6e\x5c\40\x4f\123\x7c\123\171\155\142\151\x61\x6e\x4f\123\174\x54\x53\62\61\x69\x2d\61\60\174\x55\x50\56\x42\162\157\167\x73\x65\162\174\125\120\56\114\x69\156\153\x7c\167\145\142\117\123\174\127\151\156\144\157\x77\x73\134\40\x43\105\174\127\151\x6e\x57\101\x50\x7c\x59\141\150\157\157\x53\145\145\x6b\145\162\x2f\x4d\x31\x41\x31\55\122\62\x44\62\174\x69\120\150\x6f\156\145\x7c\x69\x50\x6f\x64\174\101\x6e\x64\x72\x6f\151\144\174\102\x6c\141\x63\x6b\x42\145\162\162\x79\x39\x35\63\60\174\x4c\x47\x2d\x54\125\x39\61\65\x5c\x20\x4f\142\151\147\157\x7c\x4c\107\x45\x5c\40\126\130\174\x77\145\142\117\123\174\116\157\153\x69\x61\x35\x38\x30\x30"; if (!preg_match("\x23\136\x2e\x2a\50{$wayquiskgeuoqamk}\51\x2e\52\43\151", $uowwycywwssskuys)) { goto aoaqwygkaagiuuws; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); aoaqwygkaagiuuws: $wayquiskgeuoqamk = "\x77\x33\x63\x5c\x20\174\x77\x33\x63\55\x7c\x61\x63\x73\55\x7c\141\x6c\141\x76\x7c\141\x6c\143\x61\174\x61\155\157\x69\174\x61\x75\x64\x69\x7c\141\166\141\156\174\x62\x65\x6e\161\x7c\x62\x69\162\x64\x7c\x62\154\141\143\174\142\154\141\172\174\x62\162\x65\167\x7c\x63\145\x6c\154\x7c\x63\x6c\x64\x63\x7c\x63\155\x64\55\x7c\x64\x61\x6e\147\174\x64\157\x63\157\x7c\x65\162\x69\x63\174\x68\x69\x70\x74\x7c\x68\x74\143\137\x7c\x69\156\x6e\157\x7c\151\x70\x61\x71\174\x69\160\x6f\x64\x7c\152\151\147\x73\174\x6b\144\x64\x69\174\153\145\152\151\x7c\x6c\145\156\157\x7c\x6c\x67\x2d\x63\x7c\x6c\147\x2d\144\174\x6c\x67\55\147\174\154\x67\145\x2d\174\154\147\x2f\165\174\x6d\141\x75\x69\174\155\141\170\x6f\174\x6d\151\x64\x70\x7c\x6d\x69\164\163\174\x6d\155\x65\146\x7c\155\157\x62\x69\x7c\155\157\164\55\174\155\157\164\157\174\155\167\142\160\174\156\145\x63\x2d\174\156\x65\x77\x74\174\156\x6f\153\x69\x7c\160\x61\154\x6d\174\160\141\x6e\141\x7c\160\x61\x6e\x74\x7c\x70\x68\x69\x6c\174\x70\154\x61\171\x7c\160\157\x72\x74\x7c\x70\x72\157\170\x7c\x71\167\141\160\x7c\x73\141\x67\x65\174\163\x61\155\163\x7c\x73\141\x6e\171\x7c\163\x63\150\55\x7c\x73\x65\x63\x2d\x7c\163\145\x6e\144\x7c\x73\145\162\151\174\163\147\150\55\174\x73\150\x61\162\174\x73\x69\145\55\x7c\163\151\145\155\x7c\x73\x6d\x61\x6c\x7c\163\155\141\x72\x7c\163\157\x6e\x79\174\163\x70\150\55\174\163\171\155\142\174\164\55\155\157\x7c\164\145\x6c\151\x7c\164\x69\x6d\x2d\174\164\x6f\163\150\x7c\x74\x73\x6d\x2d\174\x75\x70\x67\61\174\x75\160\x73\151\174\x76\x6b\x2d\x76\174\x76\157\144\141\174\167\x61\x70\x2d\174\167\141\x70\x61\x7c\x77\141\x70\151\x7c\167\141\x70\x70\174\167\x61\x70\x72\x7c\x77\145\142\143\x7c\167\151\x6e\x77\x7c\x77\151\156\x77\x7c\170\x64\141\x5c\40\174\x78\144\x61\55"; if (!preg_match("\43\136\50{$wayquiskgeuoqamk}\51\56\x2a\43\x69", $uowwycywwssskuys)) { goto esagiiawomyacuiw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); esagiiawomyacuiw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto maaisuqwkymeguys; } return $this->eecucukcqkqysiau(__FUNCTION__); maaisuqwkymeguys: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto qkyciyiwkmgkmquk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qkyciyiwkmgkmquk: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\143\x61\143\x68\x65\x5f\162\145\152\x65\143\164\x5f\165\x61"); if ($mqsuiayuwmwqaqwm) { goto sksgcusuyqcwqswe; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sksgcusuyqcwqswe: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\43{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ayceeyuocgowqwsa; } return $this->eecucukcqkqysiau(__FUNCTION__); ayceeyuocgowqwsa: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\143\x61\143\150\145\x5f\162\145\152\x65\x63\164\137\x75\162\151"); if ($escsaeeosigewsme) { goto iuwkiyimqmgguose; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); iuwkiyimqmgguose: $yciaosuiyeieceug = !preg_match("\x23\x5e\50{$escsaeeosigewsme}\51\44\43\x69", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\120\137\x55\123\105\122\137\101\x47\x45\116\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yggseoaommssscwo; } return $this->eecucukcqkqysiau(__FUNCTION__); yggseoaommssscwo: $yygmoeguaqyumuui = [ "\x48\x54\x54\120\x5f\x43\106\x5f\103\x4f\116\116\x45\103\124\111\x4e\107\137\x49\x50", "\110\x54\124\120\x5f\x43\114\x49\x45\x4e\124\137\x49\120", "\x48\x54\124\120\x5f\130\x5f\x46\x4f\x52\x57\101\122\x44\105\104\137\106\117\x52", "\110\124\x54\120\x5f\x58\137\106\x4f\122\127\101\x52\104\x45\104", "\x48\x54\x54\120\137\130\137\x43\114\x55\123\124\105\x52\x5f\x43\114\x49\105\116\124\x5f\111\x50", "\110\x54\x54\120\x5f\130\137\x52\x45\101\x4c\x5f\111\x50", "\x48\x54\124\120\x5f\106\x4f\122\x57\101\122\x44\105\104\137\106\117\122", "\x48\124\x54\x50\x5f\106\117\x52\127\x41\122\x44\x45\x44", "\x52\105\x4d\x4f\x54\x45\x5f\x41\104\104\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto kwuckkyqaygwgcuy; } $kucumcusyyckayas = explode("\54", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto oeusomaaeekakake; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); oeusomaaeekakake: kwuckkyqaygwgcuy: yyqygaokeccgugos: } aeiemwacaiygemmg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\x30\56\60\x2e\x30\56\60"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto giuccakymqymawgk; } return $this->eecucukcqkqysiau(__FUNCTION__); giuccakymqymawgk: $yywgiquyoymymqwk = [ "\62\x30\x38\x2e\67\x30\56\62\64\x37\56\61\65\x37" => '', "\x31\67\x32\56\62\65\65\x2e\x34\70\56\x31\63\60" => '', "\61\67\x32\56\62\x35\x35\x2e\64\x38\x2e\61\x33\61" => '', "\x31\x37\62\x2e\x32\65\x35\56\64\x38\56\x31\x33\x32" => '', "\61\67\x32\56\x32\x35\65\x2e\64\x38\x2e\61\63\63" => '', "\x31\67\x32\56\62\x35\65\x2e\x34\x38\56\x31\x33\64" => '', "\x31\67\x32\x2e\x32\x35\x35\56\x34\x38\x2e\61\63\65" => '', "\x31\67\62\56\62\65\x35\x2e\64\70\56\61\x33\66" => '', "\x31\x37\62\56\x32\65\65\56\64\x38\x2e\61\x33\67" => '', "\61\x37\x32\x2e\62\x35\65\56\64\70\x2e\61\63\70" => '', "\x31\x37\62\56\x32\x35\65\56\64\x38\x2e\61\63\x39" => '', "\x31\67\x32\56\x32\65\65\56\x34\x38\x2e\x31\64\60" => '', "\61\x37\x32\56\62\x35\65\x2e\64\70\x2e\x31\64\x31" => '', "\61\x37\x32\x2e\x32\65\65\x2e\x34\x38\x2e\61\x34\x32" => '', "\x31\x37\62\56\x32\65\x35\56\x34\70\x2e\61\x34\x33" => '', "\61\67\62\x2e\62\65\x35\56\x34\70\56\61\x34\x34" => '', "\61\x37\62\56\62\x35\x35\x2e\64\70\x2e\x31\64\65" => '', "\61\x37\62\x2e\62\65\65\56\64\70\56\x31\x34\66" => '', "\x31\x37\62\x2e\62\x35\65\x2e\64\70\56\61\x34\67" => '', "\65\x32\x2e\62\x32\x39\56\x31\x32\62\x2e\62\x34\x30" => '', "\x31\x30\64\56\x32\61\64\56\x37\x32\x2e\x31\60\61" => '', "\x31\63\x2e\x36\x36\56\67\x2e\61\x31" => '', "\61\63\x2e\70\65\x2e\x32\64\x2e\70\x33" => '', "\x31\x33\56\x38\65\56\62\64\x2e\71\60" => '', "\61\x33\56\70\65\56\70\x32\56\x32\x36" => '', "\64\60\56\x37\64\x2e\x32\64\62\56\x32\65\x33" => '', "\x34\x30\x2e\x37\64\x2e\62\64\63\x2e\61\63" => '', "\x34\x30\x2e\x37\64\x2e\x32\x34\63\56\x31\67\x36" => '', "\61\60\64\56\62\61\x34\56\x34\x38\56\62\64\x37" => '', "\x31\x35\x37\x2e\65\x35\56\x31\70\71\56\x31\x38\x39" => '', "\x31\x30\64\56\62\x31\64\x2e\61\61\x30\x2e\61\x33\x35" => '', "\x37\60\x2e\x33\x37\56\x38\x33\56\x32\64\x30" => '', "\x36\x35\56\65\62\56\x33\66\x2e\62\65\x30" => '', "\61\63\x2e\x37\x38\x2e\62\x31\x36\x2e\x35\x36" => '', "\x35\x32\x2e\x31\x36\62\56\x32\61\x32\56\61\x36\x33" => '', "\62\63\56\71\66\56\63\64\56\x31\x30\x35" => '', "\66\65\56\x35\x32\x2e\61\61\x33\56\x32\63\x36" => '', "\61\67\62\x2e\62\x35\65\x2e\66\61\56\x33\64" => '', "\61\x37\62\x2e\x32\x35\65\56\66\x31\56\63\65" => '', "\61\67\x32\56\x32\x35\65\56\66\61\56\x33\66" => '', "\61\67\x32\x2e\62\x35\65\x2e\66\x31\56\x33\67" => '', "\x31\x37\x32\56\62\65\x35\56\x36\x31\56\x33\70" => '', "\61\67\x32\56\x32\65\x35\x2e\x36\61\56\63\71" => '', "\61\x37\62\56\x32\65\65\56\66\x31\56\x34\x30" => '', "\x35\x32\x2e\x32\x33\x37\56\62\x33\65\x2e\x31\70\x35" => '', "\65\x32\56\x32\x33\x37\x2e\x32\65\x30\56\x37\63" => '', "\x35\62\x2e\62\x33\x37\56\x32\x33\x36\x2e\x31\x34\65" => '', "\x31\60\x34\56\x34\x31\x2e\62\x2e\61\71" => '', "\x31\71\61\x2e\x32\x33\65\56\x39\x38\56\61\x36\x34" => '', "\61\71\61\56\62\x33\x35\56\x39\x39\x2e\x32\x32\61" => '', "\61\x39\x31\56\62\63\62\x2e\x31\71\64\x2e\65\61" => '', "\61\x30\x34\x2e\62\x31\x31\x2e\61\64\63\x2e\x38" => '', "\61\x30\64\56\62\61\61\56\61\x36\65\56\x35\x33" => '', "\65\x32\56\61\x37\x32\x2e\61\64\x2e\x38\67" => '', "\x34\x30\x2e\x38\x33\x2e\70\71\x2e\x32\x31\64" => '', "\65\x32\x2e\x31\67\65\x2e\x35\x37\56\70\61" => '', "\62\60\x2e\61\x38\70\56\x36\x33\56\61\x35\61" => '', "\x32\x30\56\65\62\56\63\x36\x2e\x34\x39" => '', "\65\x32\56\62\64\x36\x2e\x31\66\x35\x2e\61\65\x33" => '', "\x35\x31\56\61\64\64\x2e\x31\x30\x32\56\x32\63\63" => '', "\61\x33\x2e\x37\x36\x2e\x39\67\56\62\x32\64" => '', "\61\60\x32\x2e\x31\x33\63\56\x31\x36\x39\x2e\66\66" => '', "\x35\62\56\62\63\61\x2e\61\71\x39\x2e\x31\67\60" => '', "\61\x33\x2e\65\63\x2e\61\x36\62\x2e\x37" => '', "\64\60\56\61\62\63\56\62\x31\70\x2e\71\x34" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto sicgyiyiocyygkoc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sicgyiyiocyygkoc: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\x5f\x55\x53\x45\x52\137\x41\x47\x45\x4e\x54"); if ($uowwycywwssskuys) { goto cyosacayacumuaks; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cyosacayacumuaks: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\x50\151\x6e\147\144\x6f\155\120\141\x67\x65\x53\160\145\145\144\174\x44\x61\x72\x65\102\157\x6f\x73\164\174\x47\157\157\x67\x6c\145\174\120\x54\123\124\174\103\x68\x72\157\x6d\145\x2d\114\x69\x67\x68\x74\150\157\x75\x73\145\174\x57\120\x20\x52\x6f\x63\x6b\x65\164\43\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\x51\x55\x45\123\124\137\x55\122\111", ''); if (!$iyiwooigkweeewey) { goto ikcwmsgocyuqiumc; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\57"); ikcwmsgocyuqiumc: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto eqiiaokcgakicaye; } return ''; eqiiaokcgakicaye: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto gcucsowqoeiwmyyq; } return $magawcseesgowoeo; gcucsowqoeiwmyyq: return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto kyiuewcikkqagwwg; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); kyiuewcikkqagwwg: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\121\x55\x45\x53\x54\137\x4d\x45\124\110\x4f\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto oasggeyceiyieuuo; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\x61\143\x68\x65\137\x69\x67\x6e\x6f\x72\145\144\137\x70\x61\x72\141\x6d\145\164\145\x72\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto aumowowgewgqmwci; } ksort($eyagkkkqkwcuygso); aumowowgewgqmwci: oasggeyceiyieuuo: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; wwcqoeuwskquakwy: if (!(strpos($euueacigmgoqkimu, "\x2e\x2f") !== false || strpos($euueacigmgoqkimu, "\x2f\56") !== false || "\x2e" === $euueacigmgoqkimu || "\x2e\56" === $euueacigmgoqkimu)) { goto omuauimgkygcecsc; } if (strpos($euueacigmgoqkimu, "\x2e\56\57") === 0) { goto yqcusaeysomccaok; } if (strpos($euueacigmgoqkimu, "\x2e\57") === 0) { goto sgocecweikecwwgq; } if (strpos($euueacigmgoqkimu, "\57\56\x2f") === 0) { goto qeuyekusasqmcqms; } if ("\57\56" === $euueacigmgoqkimu) { goto auumaoycmsmsgigs; } if (strpos($euueacigmgoqkimu, "\57\x2e\56\57") === 0) { goto ygcgoaokauigwuus; } if ("\57\x2e\x2e" === $euueacigmgoqkimu) { goto qyyyycwaookqaoke; } if ("\x2e" === $euueacigmgoqkimu || "\x2e\x2e" === $euueacigmgoqkimu) { goto iymaiwqimisgacmk; } if (strpos($euueacigmgoqkimu, "\57", 1) !== false) { goto quamuugoocyyceec; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto qcssigmcayuyweiy; quamuugoocyyceec: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\x2f", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); qcssigmcayuyweiy: goto mugscgugcogcasue; iymaiwqimisgacmk: $euueacigmgoqkimu = ''; mugscgugcogcasue: goto ssywsaaqqaucesau; qyyyycwaookqaoke: $euueacigmgoqkimu = "\57"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); ssywsaaqqaucesau: goto ysiqakyaiooyscwy; ygcgoaokauigwuus: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); ysiqakyaiooyscwy: goto ousmyagwsiooumos; auumaoycmsmsgigs: $euueacigmgoqkimu = "\57"; ousmyagwsiooumos: goto yiceawuuiusakwiq; qeuyekusasqmcqms: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); yiceawuuiusakwiq: goto qwisiamkmkkwucyo; sgocecweikecwwgq: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); qwisiamkmkkwucyo: goto iwkckkeimmeoquyq; yqcusaeysomccaok: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); iwkckkeimmeoquyq: goto wwcqoeuwskquakwy; omuauimgkygcecsc: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto masakmomqmeocqqg; } $icwicymcioeyeyek["\160\x65\x72\155\x61\x6c\151\156\x6b"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); masakmomqmeocqqg: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto yksywwikmeksikqc; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); yksywwikmeksikqc: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto yoqsigmoyaaceqky; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); yoqsigmoyaaceqky: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\162\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\x6d\x65\x73\163\x61\x67\145" => $uamcoiueqaamsqma, "\143\x6f\x6e\164\145\x78\x74" => $icwicymcioeyeyek]; } }
