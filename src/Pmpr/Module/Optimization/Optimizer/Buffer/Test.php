<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665872dfe6b03             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\162\151" => 1, "\163\163\x6c" => 0, "\167\160\x5f\64\60\64" => 1, "\x73\x65\x61\162\x63\x68" => 1, "\x6d\157\x62\x69\154\x65" => 1, "\151\x73\137\150\164\155\154" => 1, "\x71\x75\145\162\x79\x5f\163\x74\x72\151\x6e\x67" => 1, "\144\x6f\x6e\x6f\x74\143\141\x63\150\145\160\141\x67\145" => 1, "\162\x65\152\x65\143\164\x65\x64\137\x63\157\157\153\151\145" => 1, "\x6d\141\156\144\x61\x74\157\162\x79\x5f\143\157\x6f\153\x69\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\x65\163\x74\163"])) { goto kqyoakickmseyyeq; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\145\163\x74\163"]); kqyoakickmseyyeq: if (!(!isset($ywmkwiwkosakssii["\x63\157\157\x6b\x69\145\x73"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto micceocwuwkyusic; } $ywmkwiwkosakssii["\x63\x6f\157\x6b\151\145\163"] = $_COOKIE; micceocwuwkyusic: if (!(!isset($ywmkwiwkosakssii["\x70\x6f\163\x74"]) && !empty($_POST) && is_array($_POST))) { goto iwueukqcywkiyqge; } $ywmkwiwkosakssii["\160\157\x73\x74"] = $_POST; iwueukqcywkiyqge: if (!(!isset($ywmkwiwkosakssii["\147\145\x74"]) && !empty($_GET) && is_array($_GET))) { goto ykwasaaoeeiuomim; } $ywmkwiwkosakssii["\147\x65\x74"] = $_GET; ykwasaaoeeiuomim: $this->get = !empty($ywmkwiwkosakssii["\x67\145\x74"]) && is_array($ywmkwiwkosakssii["\147\x65\164"]) ? $ywmkwiwkosakssii["\x67\145\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\x70\x6f\x73\164"]) && is_array($ywmkwiwkosakssii["\160\x6f\163\x74"]) ? $ywmkwiwkosakssii["\x70\157\x73\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\157\x6f\x6b\151\x65\163"]) && is_array($ywmkwiwkosakssii["\x63\x6f\x6f\153\151\x65\163"]) ? $ywmkwiwkosakssii["\x63\157\157\153\x69\145\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto acggikioyeueeowg; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\160\137\x63\x75\x73\164\157\x6d\151\172\145" => '']); acggikioyeueeowg: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->kgkoeoeseyuugaao()) { goto cwikoaeqmmoimmso; } $this->yauwooaeicgosquo("\x52\157\x62\x6f\x74\163\56\x74\x78\164\x20\157\162\40\56\x68\164\141\x63\143\x65\x73\163\x20\x66\151\x6c\x65\40\151\x73\x20\145\170\x63\x6c\165\x64\x65\144\56"); return false; cwikoaeqmmoimmso: if (!$this->gymgcceeqssmesiu()) { goto egaymskkosukqeao; } $this->yauwooaeicgosquo("\x50\x48\x50\54\x20\130\115\x4c\54\x20\x6f\x72\40\130\x53\x4c\40\146\151\x6c\x65\x20\151\x73\40\145\x78\143\x6c\165\x64\x65\x64\x2e"); return false; egaymskkosukqeao: if (!$this->goecwaaykqoaaagg()) { goto kaiesowkgwogqseg; } $this->yauwooaeicgosquo("\101\144\x6d\x69\156\x20\x6f\162\x20\101\112\101\x58\x20\x55\122\114\x20\151\x73\40\x65\170\143\154\x75\x64\x65\144\x2e"); return false; kaiesowkgwogqseg: if (!$this->sgsscqasgeyeicoe()) { goto kicwiowcogmauwiy; } $this->yauwooaeicgosquo("\x41\x64\x6d\x69\x6e\x20\x6f\162\40\101\x4a\101\x58\x20\x55\122\x4c\x20\151\x73\40\145\170\x63\x6c\x75\144\145\144\x2e"); return false; kicwiowcogmauwiy: if ($this->gooeyogikcusgwuu()) { goto cwswueuqoamqasya; } $this->yauwooaeicgosquo("\x52\x65\161\165\x65\x73\164\x20\x6d\x65\164\150\157\144\40\x69\x73\x20\x6e\157\x74\x20\141\x6c\x6c\157\x77\x65\144\x2e\x20\x50\x61\x67\145\40\143\141\156\156\157\164\40\x62\x65\40\143\x61\143\150\x65\144\56", ["\x72\145\161\x75\x65\163\164\137\x6d\x65\x74\150\x6f\x64" => $this->ciyocmkwssocskiy()]); return false; cwswueuqoamqasya: if ($this->cskwmweqysskwckg()) { goto kgmeiwiakwicgkkk; } $this->lastError = []; return true; kgmeiwiakwicgkkk: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\163\x75\143\x63\145\163\x73"]) { goto suuskagowwgsouqw; } $this->yauwooaeicgosquo("\x4e\157\x20\x63\157\156\x66\151\147\x20\x66\x69\154\145\x20\x66\157\x75\x6e\x64", ["\143\157\x6e\146\x69\x67\x5f\160\x61\x74\150" => $uiewakwqscemywuo["\160\x61\164\150"]]); return false; suuskagowwgsouqw: if (!($this->cskwmweqysskwckg("\161\165\x65\162\x79\137\x73\164\x72\151\x6e\x67") && !$this->koguieumooaesyww())) { goto omykokikgocoikec; } $this->yauwooaeicgosquo("\x51\x75\145\x72\x79\x20\163\x74\x72\x69\x6e\x67\x20\125\122\114\x20\x69\x73\40\145\x78\x63\x6c\165\x64\x65\144\x2e", $_GET); return false; omykokikgocoikec: if (!($this->cskwmweqysskwckg("\163\x73\154") & !$this->eqwgocqwoyyykwke())) { goto csieaismmmocyacu; } $this->yauwooaeicgosquo("\123\x53\114\x20\143\x61\143\150\145\x20\x6e\157\164\x20\141\160\x70\154\x69\145\144\40\164\157\x20\160\141\x67\145\x2e"); return false; csieaismmmocyacu: if (!($this->cskwmweqysskwckg("\165\162\151") && !$this->qweiomkkuikwugks())) { goto aquqkiggamaoegoo; } $this->yauwooaeicgosquo("\x50\141\x67\145\x20\151\x73\x20\145\170\143\x6c\x75\x64\145\x64\x2e"); return false; aquqkiggamaoegoo: if (!($this->cskwmweqysskwckg("\162\x65\x6a\x65\x63\x74\x65\144\x5f\x63\x6f\157\153\151\145") && $this->cokqaygwwygweuyk())) { goto mykiyqcqiegkiqys; } $this->yauwooaeicgosquo("\105\170\x63\154\x75\144\145\144\x20\143\157\x6f\x6b\x69\x65\x20\x66\157\x75\x6e\x64\x2e", ["\145\170\143\154\x75\x64\x65\144\137\143\157\157\x6b\x69\x65\163" => $this->cokqaygwwygweuyk()]); return false; mykiyqcqiegkiqys: if (!($this->cskwmweqysskwckg("\x6d\141\156\x64\x61\x74\157\x72\171\x5f\143\x6f\x6f\153\x69\145") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto agemwookwseyycqo; } $this->yauwooaeicgosquo("\115\x69\x73\x73\x69\x6e\x67\40\155\141\x6e\x64\x61\x74\x6f\162\171\x20\x63\x6f\x6f\x6b\x69\x65\x3a\x20\x70\141\147\x65\x20\156\157\164\x20\x70\x72\157\x63\x65\163\x73\x65\x64\x2e", ["\x6d\151\163\x73\151\x6e\x67\137\143\x6f\157\153\x69\x65\x73" => $this->qgymyeqwqaiwmmea()]); return false; agemwookwseyycqo: if (!($this->cskwmweqysskwckg("\x75\163\145\x72\x5f\x61\x67\x65\x6e\164") && !$this->mqiqsuksgyekwkii())) { goto cquecqekuucwoumw; } $this->yauwooaeicgosquo("\125\163\145\162\x20\x41\147\x65\156\164\40\151\x73\40\145\x78\143\x6c\x75\x64\145\x64\x2e", ["\x75\x73\145\162\x5f\x61\x67\145\156\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\137\x55\123\105\122\137\101\x47\x45\116\124")]); return false; cquecqekuucwoumw: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto koiscokkkaimiecq; } $this->yauwooaeicgosquo("\102\165\x66\x66\x65\x72\40\x63\x6f\156\164\145\x6e\x74\40\x75\x6e\144\x65\x72\x20\x32\65\65\x20\143\x68\x61\162\x61\143\x74\145\x72\163\x2e"); return false; koiscokkkaimiecq: if (!(http_response_code() !== 200)) { goto owuuuiekkaeoeacq; } $this->yauwooaeicgosquo("\120\141\x67\x65\40\151\163\40\x6e\157\x74\40\141\x20\62\x30\x30\x20\x48\x54\x54\x50\x20\x72\145\163\x70\x6f\x6e\163\x65\x20\x61\156\x64\x20\143\x61\x6e\156\157\164\40\142\145\x20\x63\141\x63\150\x65\x64\x2e"); return false; owuuuiekkaeoeacq: if (!($this->cskwmweqysskwckg("\144\x6f\x6e\x6f\x74\x6f\160\164\151\x6d\151\x7a\x65\160\x61\147\145") && $this->cowcgqokiosgaqic())) { goto saauykgakaeiyoua; } $this->yauwooaeicgosquo("\104\117\116\124\117\x50\x54\111\115\111\x5a\105\x44\120\101\x47\105\x20\151\x73\x20\x64\x65\146\151\156\145\x64\x2e\40\x50\x61\x67\145\40\x63\141\x6e\156\157\164\40\x62\x65\40\x63\x61\x63\150\x65\x64\x2e"); return false; saauykgakaeiyoua: if (!($this->cskwmweqysskwckg("\x77\x70\137\x34\60\x34") && $this->kmmyuiwaogukwqqi())) { goto qwemkcoaseywkuuc; } $this->yauwooaeicgosquo("\127\120\40\x34\x30\x34\40\x70\x61\147\x65\x20\x69\x73\40\145\170\143\x6c\165\x64\x65\x64\56"); return false; qwemkcoaseywkuuc: if (!($this->cskwmweqysskwckg("\x73\x65\x61\x72\143\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto mqimkwickkgqqeoi; } $this->yauwooaeicgosquo("\123\x65\x61\x72\143\x68\x20\160\x61\147\145\x20\151\163\40\x65\170\143\154\165\x64\145\144\x2e"); return false; mqimkwickkgqqeoi: if (!$this->cskwmweqysskwckg("\151\x73\137\150\164\155\154")) { goto gkqiqaqecmoogmaa; } if (!($this->cmaecekuqkwmemms("\x52\105\123\124\137\x52\x45\121\125\x45\x53\124") || $this->gaiygescoqgyusaa())) { goto kwyimqumkuuyaiku; } unset($this->tests["\x69\x73\x5f\x68\164\x6d\154"]); kwyimqumkuuyaiku: gkqiqaqecmoogmaa: if (!($this->cskwmweqysskwckg("\x69\x73\137\x68\x74\x6d\x6c") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto mceucsaeouuwyumm; } $this->yauwooaeicgosquo("\x4e\157\x20\x63\x6c\157\163\151\156\x67\40\74\x2f\150\x74\x6d\x6c\76\40\167\141\163\x20\146\x6f\165\156\144\x2e"); return false; mceucsaeouuwyumm: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\x72\137\x6f\x70\164\x69\x6d\151\172\x61\x74\x69\157\156\x5f\x61\x6c\x6c\x6f\167\x5f\x74\157\137\163\164\141\x72\164\137\x62\165\146\146\145\x72\137\x70\x72\157\143\x65\163\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto ceiuqsiqgiuiekem; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto gsymkkskwsgggoic; ceiuqsiqgiuiekem: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); gsymkkskwsgggoic: return apply_filters("\x70\x72\x5f\x6f\160\x74\151\155\x69\x7a\141\164\x69\x6f\x6e\x5f\x68\141\x73\x5f{$ymqmyyeuycgmigyo}\137\x74\145\163\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\x2f\x3c\x5c\163\x2a\134\x2f\134\x73\52\150\164\155\154\134\163\52\x3e\57\x69", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\x2f\50\77\x3a\x2e\x2b\x2f\51\x3f" . $wp_rewrite->feed_base . "\x28\77\x3a\57\50\77\72\56\x2b\57\x3f\51\x3f\x29\x3f\44"; return (bool) preg_match("\x23\x5e\50{$uckmmkmoeikwsiqg}\51\44\43\x69", $this->gygiweeesqqckgme()); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ugykmcouiwiscoqu; } return $this->eecucukcqkqysiau(__FUNCTION__); ugykmcouiwiscoqu: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto isewysikysqewkis; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); isewysikysqewkis: $ucasskoyoewwmmii = ["\x72\x6f\142\x6f\x74\x73\x2e\164\170\164", "\56\x68\x74\141\x63\x63\x65\x73\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto eouwacqiommmeaqc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); eouwacqiommmeaqc: igmmqwyawcuuckkq: } wiwoiyoakywqyaiy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto sqwuqegeiisoiiuq; } return $this->eecucukcqkqysiau(__FUNCTION__); sqwuqegeiisoiiuq: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto ykqsuiyyosyeyscc; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto uscokkmquayiukag; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); uscokkmquayiukag: ykqsuiyyosyeyscc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ugogoekeckgcmuaw; } return $this->eecucukcqkqysiau(__FUNCTION__); ugogoekeckgcmuaw: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto egesuwkqkmaigaoe; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); egesuwkqkmaigaoe: if (!(strtolower($iyiwooigkweeewey) === "\57\151\x6e\x64\145\170\56\160\150\160")) { goto syusgosewwkoagoq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); syusgosewwkoagoq: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\x68\160" => 1, "\x78\155\154" => 1, "\170\163\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\x4f\111\116\107\137\x41\112\101\x58"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\x53")), ["\x6f\156", "\x31"]) || "\64\64\63" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\x52\126\105\x52\x5f\120\x4f\x52\x54"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\160\x5f\x63\165\x73\x74\x6f\x6d\x69\x7a\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\x45\x54" => 1, "\110\105\x41\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mcqucouuiuoagqwc; } return $this->eecucukcqkqysiau(__FUNCTION__); mcqucouuiuoagqwc: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto eweaaismksecwagy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); eweaaismksecwagy: $yccgiaiouekkouay = ["\163" => 1, "\154\x61\x6e\147" => 1, "\160\145\x72\155\x61\154\x69\x6e\x6b\137\x6e\x61\x6d\x65" => 1, "\154\x70\55\166\141\162\x69\x61\164\151\157\156\x2d\151\144" => 1, "\x58\x44\105\x42\x55\107\137\123\x45\x53\x53\x49\x4f\x4e\137\123\x54\x41\x52\124" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto icumkkykaoqycqqu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); icumkkykaoqycqqu: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\141\143\x68\145\137\161\x75\145\x72\x79\137\x73\164\x72\x69\x6e\147\x73"); if ($yccgiaiouekkouay) { goto oeamoqweiueaueay; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oeamoqweiueaueay: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto owgsameoayaogsma; } return $this->eecucukcqkqysiau(__FUNCTION__); owgsameoayaogsma: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto kyiwsiakwgiwouyi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kyiwsiakwgiwouyi: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto awgmegueeqeyqamu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); awgmegueeqeyqamu: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto esagiiawomyacuiw; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; esagiiawomyacuiw: aoaqwygkaagiuuws: } gqimwsyemoewagcy: if (empty($eiocugauqgouiuyi)) { goto maaisuqwkymeguys; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); maaisuqwkymeguys: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qkyciyiwkmgkmquk; } return $this->eecucukcqkqysiau(__FUNCTION__); qkyciyiwkmgkmquk: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto sksgcusuyqcwqswe; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sksgcusuyqcwqswe: $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\143\141\x63\x68\x65\x5f\x6d\x61\x6e\144\x61\x74\x6f\162\x79\x5f\143\157\157\153\x69\x65\163"))); if ($this->wemyikwikgwqwuoc()) { goto ayceeyuocgowqwsa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); ayceeyuocgowqwsa: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto aeiemwacaiygemmg; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); aeiemwacaiygemmg: yggseoaommssscwo: } iuwkiyimqmgguose: if (!empty($yiycakoikkyuokgk)) { goto yyqygaokeccgugos; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yyqygaokeccgugos: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\x70\162\137\157\160\x74\x69\x6d\x69\172\x61\164\151\157\156\x5f\157\166\145\162\x72\x69\x64\145\x5f\144\x6f\x6e\x74\x5f\x6f\160\164\x69\x6d\151\172\145", $this->cmaecekuqkwmemms("\x50\x52\137\117\x50\x54\x49\115\x49\x5a\101\x54\111\x4f\x4e\x5f\104\x4f\x4e\x54\137\x4f\x50\124\x49\115\x49\x5a\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\x73\137\64\x30\x34") || is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\151\x73\x5f\x73\x65\141\x72\143\150") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\162\x5f\157\160\164\151\155\151\172\141\164\x69\x6f\156\137\157\160\x74\x69\155\x69\x7a\145\137\x73\x65\141\x72\143\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\x65\137\163\163\154"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oeusomaaeekakake; } return $this->eecucukcqkqysiau(__FUNCTION__); oeusomaaeekakake: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto kwuckkyqaygwgcuy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kwuckkyqaygwgcuy: if (!$this->aceaeommyuooiqge()->get("\x6d\x6f\x62\151\154\x65\137\143\141\x63\x68\145")) { goto giuccakymqymawgk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); giuccakymqymawgk: $wayquiskgeuoqamk = "\x32\56\60\134\x20\115\x4d\120\174\x32\x34\60\x78\63\62\x30\x7c\x34\x30\x30\130\62\x34\x30\x7c\101\166\x61\x6e\164\107\157\x7c\102\154\141\143\153\x42\145\162\x72\171\x7c\x42\x6c\141\172\x65\x72\174\x43\145\154\154\x70\150\x6f\156\x65\x7c\104\x61\x6e\147\x65\162\174\x44\x6f\x43\157\x4d\x6f\174\105\x6c\x61\x69\x6e\x65\57\63\x2e\60\174\x45\165\x64\157\x72\141\127\145\x62\x7c\x47\x6f\157\147\154\145\x62\x6f\x74\x2d\115\157\142\x69\x6c\x65\174\150\151\160\x74\x6f\160\174\111\105\x4d\x6f\142\151\x6c\x65\174\x4b\131\x4f\103\x45\x52\x41\x2f\x57\130\63\x31\60\113\174\x4c\107\57\x55\71\x39\60\174\115\x49\x44\x50\x2d\x32\x2e\x7c\x4d\x4d\105\x46\x32\x30\x7c\115\117\124\x2d\x56\x7c\116\x65\164\x46\162\157\x6e\164\x7c\x4e\x65\x77\x74\x7c\116\x69\x6e\164\x65\x6e\x64\x6f\x5c\x20\x57\151\151\x7c\116\151\164\x72\157\174\116\157\x6b\151\x61\174\x4f\x70\x65\x72\x61\134\x20\115\151\156\151\174\120\141\x6c\x6d\x7c\120\x6c\x61\x79\123\x74\x61\x74\151\x6f\156\134\x20\x50\157\x72\164\141\x62\154\x65\174\x70\x6f\162\x74\x61\154\x6d\x6d\x6d\x7c\120\x72\157\x78\x69\156\x65\x74\174\120\x72\157\x78\x69\x4e\145\x74\x7c\123\x48\x41\122\120\x2d\x54\x51\55\x47\130\x31\x30\x7c\x53\x48\107\55\x69\x39\x30\x30\174\x53\155\141\154\154\x7c\123\x6f\156\x79\105\162\151\x63\163\163\157\x6e\x7c\123\x79\x6d\x62\151\141\156\x5c\40\117\123\x7c\x53\171\155\142\x69\x61\156\117\123\x7c\x54\123\62\x31\151\x2d\61\60\174\x55\x50\56\x42\162\157\x77\x73\x65\162\x7c\125\x50\x2e\x4c\151\156\x6b\x7c\x77\x65\142\117\123\174\127\x69\156\144\157\167\x73\x5c\x20\103\x45\174\127\151\x6e\x57\x41\120\174\131\141\150\157\157\123\145\145\x6b\145\x72\x2f\x4d\61\x41\x31\x2d\122\x32\104\x32\174\x69\x50\150\157\x6e\x65\174\x69\120\x6f\x64\x7c\101\156\x64\x72\157\x69\x64\174\x42\154\x61\143\153\x42\x65\x72\162\171\x39\x35\63\x30\174\x4c\107\55\124\x55\x39\61\x35\x5c\x20\x4f\x62\151\x67\157\174\114\107\105\x5c\40\x56\130\174\167\x65\142\117\123\x7c\116\x6f\153\151\x61\x35\70\x30\60"; if (!preg_match("\43\136\56\x2a\x28{$wayquiskgeuoqamk}\x29\56\x2a\x23\x69", $uowwycywwssskuys)) { goto sicgyiyiocyygkoc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); sicgyiyiocyygkoc: $wayquiskgeuoqamk = "\167\63\x63\134\40\174\x77\x33\143\55\x7c\x61\x63\163\x2d\174\x61\154\141\166\x7c\x61\x6c\143\141\174\x61\x6d\x6f\151\174\141\x75\144\x69\174\x61\166\141\x6e\x7c\x62\x65\x6e\161\x7c\x62\x69\x72\x64\x7c\x62\154\x61\x63\174\142\x6c\141\172\x7c\142\162\x65\167\174\x63\145\x6c\x6c\x7c\x63\x6c\144\143\174\143\x6d\x64\x2d\174\x64\x61\156\147\174\x64\157\x63\157\174\145\x72\x69\143\174\150\151\x70\x74\x7c\150\164\x63\137\174\151\156\x6e\157\x7c\x69\x70\x61\x71\x7c\x69\160\x6f\x64\174\152\151\147\x73\x7c\x6b\144\x64\x69\x7c\153\x65\x6a\x69\174\154\145\156\157\174\154\x67\55\143\x7c\154\x67\55\x64\174\154\147\x2d\147\x7c\154\147\145\x2d\174\x6c\147\57\x75\x7c\155\x61\x75\151\x7c\x6d\141\170\x6f\x7c\x6d\151\144\160\x7c\x6d\x69\164\x73\174\155\155\x65\146\174\155\157\x62\151\174\x6d\157\164\55\x7c\x6d\x6f\x74\157\x7c\x6d\x77\142\x70\x7c\x6e\x65\x63\x2d\174\156\x65\167\x74\x7c\156\x6f\153\x69\x7c\x70\141\154\155\174\x70\x61\x6e\141\x7c\x70\141\156\x74\174\160\150\x69\154\x7c\160\154\141\x79\174\160\157\x72\164\x7c\160\x72\x6f\170\174\161\x77\141\x70\174\x73\x61\147\145\x7c\163\x61\155\x73\x7c\x73\141\x6e\171\174\163\143\150\55\174\163\x65\143\x2d\x7c\163\x65\156\x64\174\163\x65\x72\x69\x7c\x73\x67\x68\x2d\174\163\150\141\162\x7c\163\x69\145\x2d\174\163\x69\x65\x6d\x7c\x73\x6d\141\x6c\x7c\163\155\141\162\174\163\157\156\x79\x7c\163\x70\150\x2d\174\163\x79\155\x62\x7c\164\x2d\155\x6f\x7c\164\145\x6c\x69\174\164\x69\155\55\174\x74\x6f\x73\x68\x7c\164\163\155\x2d\174\x75\160\x67\61\174\x75\160\x73\151\x7c\166\153\55\166\x7c\166\157\x64\x61\174\x77\x61\x70\55\174\x77\x61\x70\141\x7c\x77\141\x70\151\174\167\141\x70\x70\174\167\x61\x70\162\x7c\167\x65\x62\143\x7c\x77\151\x6e\x77\x7c\167\x69\156\167\x7c\170\144\x61\134\x20\174\x78\x64\141\55"; if (!preg_match("\43\x5e\50{$wayquiskgeuoqamk}\x29\x2e\x2a\43\151", $uowwycywwssskuys)) { goto cyosacayacumuaks; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cyosacayacumuaks: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ikcwmsgocyuqiumc; } return $this->eecucukcqkqysiau(__FUNCTION__); ikcwmsgocyuqiumc: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto eqiiaokcgakicaye; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); eqiiaokcgakicaye: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\x65\137\x72\145\152\145\x63\x74\x5f\165\x61"); if ($mqsuiayuwmwqaqwm) { goto gcucsowqoeiwmyyq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gcucsowqoeiwmyyq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\43{$mqsuiayuwmwqaqwm}\x23", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kyiuewcikkqagwwg; } return $this->eecucukcqkqysiau(__FUNCTION__); kyiuewcikkqagwwg: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\143\x61\143\150\145\x5f\162\x65\152\x65\143\164\x5f\x75\162\x69"); if ($escsaeeosigewsme) { goto aumowowgewgqmwci; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); aumowowgewgqmwci: $yciaosuiyeieceug = !preg_match("\x23\136\50{$escsaeeosigewsme}\x29\x24\43\151", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\x5f\125\x53\x45\x52\x5f\x41\107\x45\116\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oasggeyceiyieuuo; } return $this->eecucukcqkqysiau(__FUNCTION__); oasggeyceiyieuuo: $yygmoeguaqyumuui = [ "\x48\x54\x54\120\x5f\x43\x46\x5f\103\x4f\116\x4e\x45\x43\124\111\x4e\107\x5f\x49\120", "\x48\x54\x54\x50\x5f\x43\x4c\x49\105\116\124\x5f\x49\x50", "\x48\x54\124\x50\x5f\130\137\106\117\122\x57\101\122\x44\x45\104\137\x46\x4f\x52", "\110\124\x54\120\x5f\130\137\x46\x4f\122\127\x41\x52\x44\105\x44", "\110\124\x54\120\137\130\137\x43\x4c\x55\x53\x54\x45\x52\137\103\x4c\111\105\116\x54\137\x49\x50", "\110\124\x54\120\137\130\137\x52\105\x41\x4c\137\x49\x50", "\110\x54\x54\120\137\106\117\122\127\101\122\104\x45\x44\137\x46\117\122", "\x48\124\124\120\x5f\x46\x4f\x52\127\x41\122\x44\105\104", "\x52\105\115\x4f\x54\x45\137\x41\104\104\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto qcssigmcayuyweiy; } $kucumcusyyckayas = explode("\x2c", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto quamuugoocyyceec; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); quamuugoocyyceec: qcssigmcayuyweiy: wwcqoeuwskquakwy: } omuauimgkygcecsc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\60\56\60\x2e\60\x2e\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iymaiwqimisgacmk; } return $this->eecucukcqkqysiau(__FUNCTION__); iymaiwqimisgacmk: $yywgiquyoymymqwk = [ "\x32\x30\70\56\67\x30\x2e\62\64\67\56\61\65\x37" => '', "\x31\67\62\56\x32\x35\x35\56\64\70\56\x31\63\60" => '', "\x31\x37\62\x2e\62\x35\65\56\x34\70\x2e\61\x33\61" => '', "\61\67\x32\x2e\62\x35\x35\56\64\x38\x2e\x31\63\62" => '', "\61\x37\62\x2e\62\65\65\x2e\x34\70\x2e\61\63\x33" => '', "\x31\x37\62\56\x32\65\x35\56\64\70\x2e\61\x33\x34" => '', "\61\67\x32\x2e\62\65\65\x2e\64\x38\x2e\x31\x33\x35" => '', "\61\67\x32\56\x32\65\65\x2e\x34\70\56\x31\x33\66" => '', "\61\67\x32\56\62\65\65\56\64\x38\56\61\63\x37" => '', "\61\67\x32\56\62\x35\65\x2e\64\70\x2e\61\63\x38" => '', "\x31\67\62\x2e\62\x35\x35\56\64\70\56\x31\x33\x39" => '', "\61\67\62\56\62\x35\65\56\64\70\56\61\x34\60" => '', "\x31\67\62\56\x32\x35\65\x2e\x34\70\x2e\x31\x34\x31" => '', "\x31\67\x32\56\x32\x35\65\56\x34\70\56\x31\64\62" => '', "\x31\x37\62\x2e\x32\65\65\x2e\64\x38\x2e\61\x34\63" => '', "\x31\x37\x32\56\x32\65\65\x2e\x34\x38\56\61\x34\64" => '', "\61\67\x32\x2e\x32\x35\x35\56\64\x38\56\x31\64\65" => '', "\x31\67\x32\56\62\65\65\x2e\x34\x38\x2e\61\x34\66" => '', "\61\67\62\56\62\x35\65\x2e\64\x38\56\x31\64\x37" => '', "\x35\x32\x2e\62\62\x39\56\x31\x32\x32\x2e\x32\64\x30" => '', "\x31\60\x34\56\x32\x31\64\56\67\62\56\x31\60\61" => '', "\x31\x33\56\x36\66\x2e\x37\56\61\61" => '', "\61\63\56\70\x35\x2e\62\64\x2e\70\63" => '', "\61\x33\x2e\70\x35\56\x32\x34\56\x39\60" => '', "\x31\63\x2e\x38\x35\x2e\x38\62\56\62\66" => '', "\64\x30\x2e\x37\64\56\62\x34\x32\x2e\x32\65\x33" => '', "\x34\60\56\x37\64\56\x32\64\63\x2e\x31\x33" => '', "\64\60\56\67\64\x2e\62\x34\x33\x2e\61\67\x36" => '', "\x31\x30\64\56\62\61\64\56\64\x38\x2e\62\x34\x37" => '', "\x31\65\67\x2e\65\65\x2e\61\x38\x39\56\61\70\71" => '', "\61\x30\64\x2e\x32\61\64\x2e\61\x31\x30\56\61\63\x35" => '', "\x37\x30\56\x33\x37\56\x38\63\x2e\62\x34\x30" => '', "\x36\65\x2e\65\62\x2e\x33\66\56\62\x35\x30" => '', "\61\63\56\x37\x38\56\x32\x31\x36\56\65\66" => '', "\x35\62\56\x31\66\62\56\x32\61\62\56\x31\x36\63" => '', "\62\x33\x2e\71\x36\56\63\64\x2e\61\60\x35" => '', "\66\65\56\x35\62\56\x31\x31\63\56\62\63\66" => '', "\x31\67\x32\x2e\x32\x35\65\x2e\x36\x31\56\63\x34" => '', "\61\x37\x32\x2e\62\65\x35\56\66\61\56\63\x35" => '', "\61\x37\62\x2e\62\65\65\56\x36\x31\56\63\66" => '', "\x31\x37\62\56\62\x35\x35\56\66\61\56\x33\x37" => '', "\61\67\x32\x2e\x32\x35\x35\x2e\x36\61\56\63\x38" => '', "\x31\x37\62\x2e\62\65\x35\56\66\x31\56\63\x39" => '', "\x31\67\x32\x2e\62\x35\65\x2e\x36\x31\x2e\64\60" => '', "\65\62\56\x32\x33\67\x2e\62\63\65\x2e\x31\70\65" => '', "\65\x32\56\62\63\67\56\62\65\x30\x2e\x37\63" => '', "\x35\62\x2e\x32\63\x37\56\62\63\x36\56\x31\64\x35" => '', "\x31\60\x34\56\x34\x31\56\62\56\x31\x39" => '', "\x31\x39\61\x2e\x32\63\65\56\71\x38\56\61\66\x34" => '', "\61\71\61\x2e\x32\x33\65\x2e\71\71\56\x32\x32\61" => '', "\61\x39\x31\x2e\62\63\x32\x2e\x31\71\64\x2e\65\x31" => '', "\x31\x30\x34\x2e\x32\x31\61\56\x31\x34\x33\x2e\x38" => '', "\61\60\x34\56\x32\x31\x31\56\x31\66\x35\x2e\65\x33" => '', "\x35\62\56\x31\x37\62\x2e\x31\64\x2e\70\67" => '', "\x34\60\x2e\x38\63\x2e\70\71\56\62\61\64" => '', "\x35\62\56\61\67\65\56\x35\67\56\70\x31" => '', "\62\60\x2e\x31\x38\x38\56\x36\x33\x2e\x31\65\61" => '', "\62\60\x2e\x35\62\x2e\x33\66\x2e\64\x39" => '', "\x35\62\56\62\64\x36\x2e\61\x36\x35\x2e\x31\x35\63" => '', "\65\61\x2e\x31\64\64\x2e\61\60\x32\x2e\62\63\63" => '', "\61\x33\x2e\x37\66\56\x39\67\x2e\x32\x32\64" => '', "\x31\60\x32\x2e\61\63\x33\x2e\x31\x36\71\x2e\x36\66" => '', "\x35\x32\x2e\x32\63\x31\56\x31\x39\x39\x2e\x31\67\x30" => '', "\x31\63\56\65\63\56\61\66\x32\56\67" => '', "\64\x30\x2e\x31\62\x33\56\62\61\x38\x2e\71\x34" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto mugscgugcogcasue; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); mugscgugcogcasue: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\x50\137\125\123\105\x52\x5f\101\x47\x45\116\124"); if ($uowwycywwssskuys) { goto qyyyycwaookqaoke; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qyyyycwaookqaoke: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\43\x50\151\156\x67\144\x6f\155\x50\x61\147\145\123\x70\x65\x65\x64\174\104\141\162\145\x42\x6f\x6f\x73\x74\174\x47\157\157\147\x6c\145\174\x50\124\123\124\174\x43\x68\x72\157\x6d\145\x2d\x4c\x69\x67\x68\164\150\157\165\163\x65\x7c\x57\120\x20\122\157\143\153\x65\164\x23\x69", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\x51\125\105\123\124\137\125\122\111", ''); if (!$iyiwooigkweeewey) { goto ssywsaaqqaucesau; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\x2f"); ssywsaaqqaucesau: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto ygcgoaokauigwuus; } return ''; ygcgoaokauigwuus: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto ysiqakyaiooyscwy; } return $magawcseesgowoeo; ysiqakyaiooyscwy: return "{$magawcseesgowoeo}\x3f{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto auumaoycmsmsgigs; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); auumaoycmsmsgigs: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\x55\x45\123\x54\137\115\105\124\x48\x4f\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto qeuyekusasqmcqms; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\x61\143\150\145\x5f\x69\147\x6e\157\x72\x65\x64\x5f\x70\141\x72\x61\155\x65\x74\x65\162\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto ousmyagwsiooumos; } ksort($eyagkkkqkwcuygso); ousmyagwsiooumos: qeuyekusasqmcqms: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; sgocecweikecwwgq: if (!(strpos($euueacigmgoqkimu, "\56\x2f") !== false || strpos($euueacigmgoqkimu, "\57\x2e") !== false || "\x2e" === $euueacigmgoqkimu || "\x2e\56" === $euueacigmgoqkimu)) { goto yiceawuuiusakwiq; } if (strpos($euueacigmgoqkimu, "\56\56\x2f") === 0) { goto mimacwyuueomgwwy; } if (strpos($euueacigmgoqkimu, "\x2e\57") === 0) { goto ekoqieigyoeyauqa; } if (strpos($euueacigmgoqkimu, "\x2f\56\x2f") === 0) { goto ssagcgqaucssyego; } if ("\57\x2e" === $euueacigmgoqkimu) { goto acgqaeakoyasgkku; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\x2e\x2f") === 0) { goto suqckoccuyeeymww; } if ("\57\56\x2e" === $euueacigmgoqkimu) { goto yksywwikmeksikqc; } if ("\x2e" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu) { goto iwkckkeimmeoquyq; } if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { goto qwisiamkmkkwucyo; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto yqcusaeysomccaok; qwisiamkmkkwucyo: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); yqcusaeysomccaok: goto masakmomqmeocqqg; iwkckkeimmeoquyq: $euueacigmgoqkimu = ''; masakmomqmeocqqg: goto yoqsigmoyaaceqky; yksywwikmeksikqc: $euueacigmgoqkimu = "\x2f"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); yoqsigmoyaaceqky: goto giugwaeuwaomossq; suqckoccuyeeymww: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); giugwaeuwaomossq: goto sycougcyeqmeiagk; acgqaeakoyasgkku: $euueacigmgoqkimu = "\x2f"; sycougcyeqmeiagk: goto mqgeseysuwcaqwiy; ssagcgqaucssyego: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); mqgeseysuwcaqwiy: goto cuwcsamuuqyuyqsu; ekoqieigyoeyauqa: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); cuwcsamuuqyuyqsu: goto ksckqkmwiqggykke; mimacwyuueomgwwy: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); ksckqkmwiqggykke: goto sgocecweikecwwgq; yiceawuuiusakwiq: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto igwkcikeyoowosoi; } $icwicymcioeyeyek["\160\x65\x72\x6d\x61\154\x69\156\153"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); igwkcikeyoowosoi: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto iqsgossweywksoia; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); iqsgossweywksoia: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto awaqksikyomsuaeo; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); awaqksikyomsuaeo: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\x75\162\x6c"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\155\145\163\x73\141\147\x65" => $uamcoiueqaamsqma, "\143\157\x6e\x74\x65\170\164" => $icwicymcioeyeyek]; } }
