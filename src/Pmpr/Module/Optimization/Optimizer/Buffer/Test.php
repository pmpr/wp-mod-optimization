<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6689b42493617             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\x72\151" => 1, "\163\163\x6c" => 0, "\x77\x70\137\64\60\64" => 1, "\163\x65\141\x72\143\x68" => 1, "\155\x6f\x62\151\x6c\145" => 1, "\x69\x73\137\150\164\155\x6c" => 1, "\x71\165\x65\162\x79\137\x73\164\162\x69\x6e\x67" => 1, "\x64\x6f\156\157\x74\143\141\143\x68\x65\x70\141\x67\145" => 1, "\x72\x65\x6a\145\143\x74\x65\x64\x5f\x63\157\x6f\153\151\145" => 1, "\x6d\141\x6e\144\x61\164\157\x72\x79\x5f\143\157\157\x6b\x69\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\x65\163\x74\x73"])) { goto ygcgoaokauigwuus; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\164\145\x73\164\163"]); ygcgoaokauigwuus: if (!(!isset($ywmkwiwkosakssii["\143\157\157\153\151\x65\x73"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto ysiqakyaiooyscwy; } $ywmkwiwkosakssii["\x63\x6f\157\153\x69\145\163"] = $_COOKIE; ysiqakyaiooyscwy: if (!(!isset($ywmkwiwkosakssii["\160\157\163\164"]) && !empty($_POST) && is_array($_POST))) { goto auumaoycmsmsgigs; } $ywmkwiwkosakssii["\160\x6f\x73\164"] = $_POST; auumaoycmsmsgigs: if (!(!isset($ywmkwiwkosakssii["\147\x65\x74"]) && !empty($_GET) && is_array($_GET))) { goto ousmyagwsiooumos; } $ywmkwiwkosakssii["\x67\145\164"] = $_GET; ousmyagwsiooumos: $this->get = !empty($ywmkwiwkosakssii["\x67\x65\x74"]) && is_array($ywmkwiwkosakssii["\147\145\164"]) ? $ywmkwiwkosakssii["\x67\145\164"] : []; $this->post = !empty($ywmkwiwkosakssii["\x70\x6f\x73\164"]) && is_array($ywmkwiwkosakssii["\x70\157\163\164"]) ? $ywmkwiwkosakssii["\x70\x6f\x73\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\x63\x6f\x6f\x6b\151\145\163"]) && is_array($ywmkwiwkosakssii["\143\x6f\157\x6b\151\145\163"]) ? $ywmkwiwkosakssii["\x63\157\x6f\153\x69\x65\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto qeuyekusasqmcqms; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\160\x5f\x63\x75\x73\x74\157\x6d\x69\x7a\x65" => '']); qeuyekusasqmcqms: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto yiceawuuiusakwiq; } $this->yauwooaeicgosquo("\104\x65\166\40\115\x6f\144\145\x20\105\156\x61\142\x6c\145\x64\x20\x61\x6e\144\x20\x61\x6c\x6c\40\x72\x65\x71\165\x65\163\164\40\151\163\x20\142\x79\x70\141\163\163\x2e"); return false; yiceawuuiusakwiq: if (!$this->kgkoeoeseyuugaao()) { goto sgocecweikecwwgq; } $this->yauwooaeicgosquo("\x52\x6f\142\157\164\x73\56\x74\170\x74\x20\157\x72\x20\56\150\x74\x61\143\143\145\x73\x73\x20\146\151\154\x65\x20\x69\163\40\x65\x78\x63\x6c\165\x64\145\144\56"); return false; sgocecweikecwwgq: if (!$this->gymgcceeqssmesiu()) { goto qwisiamkmkkwucyo; } $this->yauwooaeicgosquo("\x50\x48\x50\x2c\40\x58\115\114\x2c\40\157\x72\x20\130\123\114\x20\146\151\154\x65\40\151\x73\x20\x65\170\x63\x6c\165\144\x65\144\56"); return false; qwisiamkmkkwucyo: if (!$this->goecwaaykqoaaagg()) { goto yqcusaeysomccaok; } $this->yauwooaeicgosquo("\101\144\x6d\151\x6e\x20\x6f\162\40\101\x4a\101\x58\40\125\122\114\40\x69\163\x20\x65\170\x63\x6c\165\144\x65\144\56"); return false; yqcusaeysomccaok: if (!$this->sgsscqasgeyeicoe()) { goto iwkckkeimmeoquyq; } $this->yauwooaeicgosquo("\x41\144\155\x69\x6e\x20\x6f\162\40\x41\112\x41\130\40\x55\122\114\40\x69\163\40\x65\170\143\x6c\165\x64\x65\x64\x2e"); return false; iwkckkeimmeoquyq: if ($this->gooeyogikcusgwuu()) { goto masakmomqmeocqqg; } $this->yauwooaeicgosquo("\x52\x65\161\x75\145\x73\x74\40\x6d\x65\164\x68\157\x64\40\151\163\x20\x6e\x6f\x74\x20\141\154\x6c\157\167\145\144\x2e\x20\x50\141\x67\x65\40\x63\141\156\156\157\x74\40\142\145\x20\143\x61\x63\x68\x65\144\56", ["\x72\145\161\x75\145\x73\164\137\x6d\145\x74\x68\157\x64" => $this->ciyocmkwssocskiy()]); return false; masakmomqmeocqqg: if ($this->cskwmweqysskwckg()) { goto yksywwikmeksikqc; } $this->lastError = []; return true; yksywwikmeksikqc: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\x73\165\143\143\x65\163\x73"]) { goto yoqsigmoyaaceqky; } $this->yauwooaeicgosquo("\x4e\x6f\x20\x63\x6f\x6e\146\151\x67\40\146\x69\x6c\x65\40\x66\157\165\x6e\x64", ["\x63\157\x6e\146\x69\x67\137\x70\141\x74\x68" => $uiewakwqscemywuo["\x70\141\x74\150"]]); return false; yoqsigmoyaaceqky: if (!($this->cskwmweqysskwckg("\x71\165\145\x72\171\137\163\164\x72\151\x6e\147") && !$this->koguieumooaesyww())) { goto suqckoccuyeeymww; } $this->yauwooaeicgosquo("\x51\x75\145\162\x79\40\163\164\162\x69\156\x67\x20\x55\122\114\40\151\x73\x20\145\170\x63\154\165\144\x65\x64\56", $_GET); return false; suqckoccuyeeymww: if (!($this->cskwmweqysskwckg("\163\x73\154") & !$this->eqwgocqwoyyykwke())) { goto giugwaeuwaomossq; } $this->yauwooaeicgosquo("\x53\x53\114\40\143\141\x63\x68\145\x20\x6e\x6f\164\x20\141\160\160\x6c\x69\x65\x64\x20\x74\157\40\x70\x61\147\145\56"); return false; giugwaeuwaomossq: if (!($this->cskwmweqysskwckg("\165\162\151") && !$this->qweiomkkuikwugks())) { goto acgqaeakoyasgkku; } $this->yauwooaeicgosquo("\120\141\x67\145\x20\x69\x73\40\145\x78\x63\x6c\x75\x64\x65\144\56"); return false; acgqaeakoyasgkku: if (!($this->cskwmweqysskwckg("\162\145\x6a\x65\143\164\145\x64\137\x63\x6f\x6f\x6b\x69\145") && $this->cokqaygwwygweuyk())) { goto sycougcyeqmeiagk; } $this->yauwooaeicgosquo("\105\170\x63\154\x75\x64\145\144\x20\x63\157\x6f\153\x69\x65\x20\x66\157\x75\x6e\x64\x2e", ["\145\x78\x63\154\x75\144\x65\x64\137\x63\157\157\153\151\x65\163" => $this->cokqaygwwygweuyk()]); return false; sycougcyeqmeiagk: if (!($this->cskwmweqysskwckg("\155\x61\156\x64\141\164\x6f\162\171\x5f\143\x6f\157\153\x69\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto ssagcgqaucssyego; } $this->yauwooaeicgosquo("\115\151\x73\163\151\156\x67\x20\155\141\156\144\x61\x74\157\x72\171\40\143\x6f\157\x6b\151\x65\x3a\40\160\x61\x67\x65\x20\x6e\157\164\40\160\x72\x6f\143\x65\163\163\x65\x64\56", ["\x6d\x69\163\163\151\156\x67\137\143\x6f\157\x6b\x69\x65\163" => $this->qgymyeqwqaiwmmea()]); return false; ssagcgqaucssyego: if (!($this->cskwmweqysskwckg("\165\163\x65\x72\137\141\147\x65\x6e\164") && !$this->mqiqsuksgyekwkii())) { goto mqgeseysuwcaqwiy; } $this->yauwooaeicgosquo("\125\x73\x65\162\x20\x41\147\145\x6e\x74\x20\x69\x73\40\145\x78\143\x6c\165\x64\x65\144\56", ["\x75\163\x65\x72\x5f\141\x67\145\x6e\x74" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\137\x55\123\x45\x52\137\101\x47\x45\x4e\x54")]); return false; mqgeseysuwcaqwiy: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto ekoqieigyoeyauqa; } $this->yauwooaeicgosquo("\102\165\x66\x66\145\x72\40\143\x6f\x6e\x74\145\156\164\x20\165\156\144\145\162\x20\x32\65\65\x20\143\150\141\162\141\x63\x74\145\162\163\x2e"); return false; ekoqieigyoeyauqa: if (!(http_response_code() !== 200)) { goto cuwcsamuuqyuyqsu; } $this->yauwooaeicgosquo("\x50\141\x67\x65\x20\151\163\40\x6e\157\x74\x20\141\x20\x32\x30\x30\40\110\x54\x54\120\40\162\145\x73\x70\157\x6e\163\x65\x20\x61\x6e\x64\40\143\x61\156\x6e\x6f\164\x20\x62\x65\x20\x63\x61\x63\150\x65\144\x2e"); return false; cuwcsamuuqyuyqsu: if (!($this->cskwmweqysskwckg("\144\x6f\x6e\x6f\164\x6f\160\164\x69\155\x69\172\145\160\x61\147\x65") && $this->cowcgqokiosgaqic())) { goto mimacwyuueomgwwy; } $this->yauwooaeicgosquo("\x44\117\116\124\x4f\120\124\x49\115\x49\x5a\x45\x44\120\x41\x47\105\40\151\163\40\144\145\x66\151\x6e\145\x64\56\x20\120\141\x67\x65\40\143\x61\156\156\157\164\40\142\x65\40\x63\x61\x63\150\145\144\56"); return false; mimacwyuueomgwwy: if (!($this->cskwmweqysskwckg("\167\x70\137\x34\60\64") && $this->kmmyuiwaogukwqqi())) { goto ksckqkmwiqggykke; } $this->yauwooaeicgosquo("\127\120\x20\64\x30\x34\x20\160\x61\147\x65\x20\151\x73\x20\x65\x78\x63\x6c\x75\x64\x65\x64\56"); return false; ksckqkmwiqggykke: if (!($this->cskwmweqysskwckg("\163\145\x61\162\x63\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto igwkcikeyoowosoi; } $this->yauwooaeicgosquo("\123\145\x61\162\x63\x68\40\x70\x61\x67\145\40\x69\163\x20\x65\x78\143\x6c\165\144\145\x64\56"); return false; igwkcikeyoowosoi: if (!$this->cskwmweqysskwckg("\151\163\x5f\150\x74\155\154")) { goto awaqksikyomsuaeo; } if (!($this->cmaecekuqkwmemms("\x52\105\123\x54\x5f\x52\105\121\x55\x45\x53\124") || $this->gaiygescoqgyusaa())) { goto iqsgossweywksoia; } unset($this->tests["\x69\163\x5f\x68\x74\155\x6c"]); iqsgossweywksoia: awaqksikyomsuaeo: if (!($this->cskwmweqysskwckg("\x69\x73\137\150\164\155\x6c") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto cuommomwmsackoqc; } $this->yauwooaeicgosquo("\x4e\157\x20\143\x6c\x6f\x73\151\156\x67\40\74\57\x68\164\x6d\154\76\40\167\x61\x73\40\146\157\x75\x6e\x64\x2e"); return false; cuommomwmsackoqc: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\162\x5f\157\160\x74\x69\x6d\x69\172\x61\164\151\x6f\x6e\x5f\x61\x6c\154\157\167\x5f\x74\157\x5f\x73\164\141\162\164\x5f\x62\165\146\146\x65\x72\x5f\160\162\x6f\x63\x65\x73\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto ggeoqeowscwkeumy; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto qyeswawykmasuqye; ggeoqeowscwkeumy: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); qyeswawykmasuqye: return apply_filters("\160\x72\x5f\x6f\x70\164\x69\x6d\151\172\141\x74\x69\x6f\156\x5f\x68\141\x73\x5f{$ymqmyyeuycgmigyo}\137\x74\x65\163\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\x2f\74\x5c\163\x2a\134\57\134\163\52\150\164\155\154\134\x73\52\x3e\57\x69", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\x28\77\x3a\56\x2b\x2f\51\77" . $wp_rewrite->feed_base . "\50\77\72\x2f\x28\x3f\x3a\56\x2b\x2f\77\51\x3f\51\77\x24"; return (bool) preg_match("\43\136\x28{$uckmmkmoeikwsiqg}\51\44\43\151", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\144\145\166\137\155\157\144\x65"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uwaimsisescsgyqk; } return $this->eecucukcqkqysiau(__FUNCTION__); uwaimsisescsgyqk: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto uqcsksaywyqeumig; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uqcsksaywyqeumig: $ucasskoyoewwmmii = ["\162\x6f\x62\157\164\163\x2e\164\170\164", "\56\150\x74\141\143\x63\145\x73\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto jsmisuccwyukksgc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); jsmisuccwyukksgc: ukwoswyyogmsygqg: } yggmaskeguaqkusc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kwmiwaecqcgiaqye; } return $this->eecucukcqkqysiau(__FUNCTION__); kwmiwaecqcgiaqye: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto gkoaeuekqockuoiq; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto yqicwmekwuoywyus; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yqicwmekwuoywyus: gkoaeuekqockuoiq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eekaiaeqewiqkkgm; } return $this->eecucukcqkqysiau(__FUNCTION__); eekaiaeqewiqkkgm: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto kceuusiekagyeoys; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kceuusiekagyeoys: if (!(strtolower($iyiwooigkweeewey) === "\x2f\151\156\x64\145\x78\56\160\150\160")) { goto uyeyscsaigimsqwq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uyeyscsaigimsqwq: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\150\x70" => 1, "\x78\155\154" => 1, "\x78\163\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\x44\x4f\x49\x4e\107\x5f\x41\112\101\x58"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\x50\x53")), ["\157\x6e", "\61"]) || "\x34\64\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\x52\126\x45\x52\137\120\117\x52\124"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\160\137\143\x75\163\164\x6f\155\x69\x7a\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\x45\124" => 1, "\110\105\101\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mwieyyqamgwicgco; } return $this->eecucukcqkqysiau(__FUNCTION__); mwieyyqamgwicgco: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto wkiymcoqqiigqaaw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wkiymcoqqiigqaaw: $yccgiaiouekkouay = ["\163" => 1, "\154\x61\x6e\147" => 1, "\160\x65\x72\155\x61\154\x69\x6e\153\137\x6e\141\155\145" => 1, "\x6c\x70\55\x76\141\162\x69\141\164\151\157\x6e\x2d\151\144" => 1, "\130\104\x45\x42\125\107\137\123\x45\x53\123\x49\117\116\137\123\124\101\122\x54" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto esqwswmoegiqcckg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); esqwswmoegiqcckg: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\x61\143\150\x65\x5f\x71\165\145\x72\171\x5f\x73\164\x72\x69\156\x67\x73"); if ($yccgiaiouekkouay) { goto qmokwkocmcyeyesc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qmokwkocmcyeyesc: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mosuacsuaasssciu; } return $this->eecucukcqkqysiau(__FUNCTION__); mosuacsuaasssciu: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto qksckewucmosemuo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qksckewucmosemuo: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto kmooekeyemqgucci; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kmooekeyemqgucci: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto mkgmaguyswskyioa; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; mkgmaguyswskyioa: cmmusgkieoqyymgs: } skuuyysooocugyww: if (empty($eiocugauqgouiuyi)) { goto skwusmoyomgqkimm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); skwusmoyomgqkimm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto usyckeewsgwaysam; } return $this->eecucukcqkqysiau(__FUNCTION__); usyckeewsgwaysam: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto gicuuwuuuwumyooa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gicuuwuuuwumyooa: $yiycakoikkyuokgk = array_flip(explode("\174", $this->aceaeommyuooiqge()->get("\x63\141\x63\x68\x65\137\155\x61\156\x64\141\164\157\x72\171\x5f\143\157\157\153\x69\145\163"))); if ($this->wemyikwikgwqwuoc()) { goto kakkuyeccaacewyo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); kakkuyeccaacewyo: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto qsokkkyoackoycie; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); qsokkkyoackoycie: ismeikacqqyqcmqe: } cysgqimowcqoqqsc: if (!empty($yiycakoikkyuokgk)) { goto casgoamcqkekgeeo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); casgoamcqkekgeeo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\160\x72\137\x6f\160\164\151\x6d\151\172\141\164\x69\157\x6e\137\157\166\x65\162\x72\x69\x64\145\x5f\144\157\156\x74\137\x6f\x70\164\151\155\151\x7a\145", $this->cmaecekuqkwmemms("\x50\x52\x5f\x4f\x50\124\111\x4d\111\x5a\101\x54\x49\117\116\137\104\x4f\116\124\x5f\117\120\x54\111\115\x49\132\x45", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\151\x73\x5f\64\60\x34") || is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\151\163\x5f\163\145\141\x72\143\150") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\162\x5f\157\x70\x74\151\x6d\x69\x7a\x61\164\x69\x6f\x6e\137\x6f\x70\x74\x69\x6d\151\x7a\145\137\163\145\141\x72\x63\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\x63\x61\x63\x68\145\137\x73\x73\154"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yseyyukqaowwouua; } return $this->eecucukcqkqysiau(__FUNCTION__); yseyyukqaowwouua: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto qcgyggiaowuqswuw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qcgyggiaowuqswuw: if (!$this->aceaeommyuooiqge()->get("\155\x6f\x62\151\154\x65\137\x63\141\143\150\x65")) { goto sooecucuakgkuyis; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sooecucuakgkuyis: $wayquiskgeuoqamk = "\62\x2e\60\134\x20\x4d\115\x50\174\62\x34\60\170\x33\x32\60\x7c\64\x30\60\x58\x32\x34\x30\174\101\x76\x61\x6e\x74\x47\157\174\102\x6c\x61\143\153\102\145\x72\x72\x79\174\x42\x6c\x61\x7a\145\x72\x7c\x43\145\154\154\x70\x68\157\x6e\x65\x7c\104\141\156\x67\x65\162\x7c\104\x6f\x43\157\115\157\x7c\x45\154\141\x69\156\145\x2f\x33\56\x30\174\105\x75\144\x6f\162\x61\x57\145\x62\x7c\x47\157\x6f\147\x6c\x65\x62\x6f\164\x2d\115\x6f\142\151\154\145\174\150\151\x70\164\x6f\x70\174\x49\x45\115\x6f\x62\151\x6c\145\174\x4b\131\117\x43\105\x52\101\x2f\127\130\x33\61\x30\x4b\174\x4c\x47\57\x55\71\x39\60\174\115\x49\x44\120\x2d\x32\56\x7c\x4d\x4d\105\x46\x32\x30\x7c\x4d\117\x54\55\126\174\116\145\164\106\x72\x6f\156\164\174\116\145\x77\164\x7c\x4e\x69\156\164\x65\156\x64\157\134\x20\x57\151\x69\x7c\x4e\151\164\162\157\174\x4e\x6f\153\x69\x61\x7c\117\x70\145\x72\x61\134\x20\115\151\x6e\151\x7c\120\x61\x6c\155\174\x50\x6c\x61\x79\x53\164\x61\164\151\157\x6e\x5c\x20\120\157\162\x74\x61\142\154\145\174\160\x6f\x72\164\x61\x6c\x6d\155\155\174\x50\x72\x6f\170\151\156\x65\164\174\120\162\x6f\x78\x69\x4e\145\164\x7c\123\110\x41\x52\120\55\x54\x51\55\x47\130\61\x30\x7c\x53\110\x47\55\x69\71\x30\x30\x7c\123\155\x61\x6c\x6c\174\123\157\x6e\171\105\162\151\x63\163\x73\x6f\x6e\x7c\123\x79\x6d\142\x69\x61\156\x5c\x20\x4f\x53\x7c\123\171\155\142\x69\141\x6e\117\123\174\x54\123\62\61\151\55\61\60\x7c\125\120\56\x42\x72\x6f\167\x73\145\x72\174\x55\x50\x2e\x4c\x69\156\153\174\x77\145\x62\117\123\x7c\127\x69\156\144\157\x77\x73\x5c\40\103\105\174\x57\x69\156\127\x41\x50\x7c\131\x61\150\x6f\157\123\145\x65\153\x65\x72\57\x4d\61\101\61\x2d\122\x32\x44\62\174\x69\x50\150\x6f\156\x65\174\x69\x50\x6f\144\174\101\x6e\x64\x72\157\x69\144\174\102\154\x61\143\x6b\102\x65\x72\x72\171\x39\x35\63\x30\x7c\x4c\x47\55\124\x55\x39\61\65\x5c\40\x4f\142\151\x67\157\x7c\114\107\105\134\40\x56\x58\x7c\167\145\x62\x4f\x53\174\x4e\x6f\153\x69\x61\65\70\x30\60"; if (!preg_match("\x23\136\x2e\x2a\50{$wayquiskgeuoqamk}\x29\56\52\x23\151", $uowwycywwssskuys)) { goto ywqakqkmmcoceqka; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ywqakqkmmcoceqka: $wayquiskgeuoqamk = "\167\63\x63\x5c\x20\x7c\x77\x33\143\x2d\x7c\141\143\x73\55\x7c\141\x6c\x61\x76\174\141\154\x63\x61\174\x61\155\x6f\151\174\141\x75\144\x69\174\x61\166\x61\x6e\174\x62\x65\156\161\174\142\151\x72\x64\x7c\x62\x6c\x61\x63\174\142\154\x61\172\x7c\x62\x72\145\167\174\143\x65\154\154\174\143\154\x64\143\174\143\155\144\x2d\x7c\144\x61\156\x67\x7c\144\157\x63\157\174\145\x72\x69\x63\174\150\151\x70\164\174\150\164\143\x5f\x7c\x69\x6e\156\157\174\x69\x70\x61\161\174\151\160\157\144\x7c\x6a\151\147\163\174\x6b\x64\x64\151\x7c\153\x65\x6a\151\174\x6c\145\156\157\174\x6c\147\x2d\143\x7c\x6c\147\55\144\174\x6c\x67\x2d\x67\174\x6c\x67\145\x2d\x7c\x6c\147\57\x75\174\155\141\165\x69\x7c\x6d\141\x78\157\x7c\x6d\x69\x64\160\x7c\155\x69\164\x73\x7c\155\155\x65\x66\x7c\155\x6f\142\151\x7c\x6d\x6f\164\x2d\174\x6d\x6f\x74\157\174\155\167\142\160\x7c\x6e\x65\x63\x2d\174\156\145\x77\164\174\156\157\x6b\151\174\160\141\x6c\155\x7c\x70\141\156\141\174\160\x61\156\164\174\160\150\151\154\x7c\x70\x6c\x61\x79\174\160\157\162\x74\x7c\160\x72\x6f\170\x7c\161\x77\x61\x70\x7c\x73\141\x67\x65\x7c\163\141\155\x73\174\163\141\156\x79\174\x73\x63\x68\x2d\174\163\x65\x63\55\x7c\x73\145\156\x64\x7c\163\145\x72\x69\x7c\163\x67\150\55\x7c\x73\150\141\x72\x7c\x73\151\145\55\x7c\163\x69\145\x6d\174\163\155\x61\x6c\x7c\x73\155\x61\162\x7c\163\x6f\156\x79\x7c\x73\x70\x68\55\174\163\171\x6d\142\x7c\164\55\155\x6f\x7c\164\x65\x6c\x69\174\164\x69\x6d\x2d\x7c\164\x6f\163\150\174\x74\163\155\55\174\x75\x70\147\x31\x7c\x75\x70\163\x69\x7c\x76\153\x2d\x76\174\166\x6f\144\141\174\167\141\160\55\x7c\x77\141\160\x61\174\x77\141\x70\x69\174\167\x61\160\x70\x7c\167\141\160\162\x7c\x77\145\x62\x63\174\x77\151\156\167\x7c\x77\x69\x6e\x77\x7c\x78\x64\141\x5c\x20\x7c\x78\144\x61\x2d"; if (!preg_match("\43\x5e\x28{$wayquiskgeuoqamk}\x29\56\x2a\43\151", $uowwycywwssskuys)) { goto kwsqgqmwyyeykgum; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kwsqgqmwyyeykgum: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto emauuoieewwoeyqq; } return $this->eecucukcqkqysiau(__FUNCTION__); emauuoieewwoeyqq: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto koukiyqaccegmquc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); koukiyqaccegmquc: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\x61\x63\x68\x65\x5f\x72\x65\x6a\x65\x63\164\x5f\165\x61"); if ($mqsuiayuwmwqaqwm) { goto ekakkiuuquqkccse; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ekakkiuuquqkccse: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\x23{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oqwwacmigasucsoc; } return $this->eecucukcqkqysiau(__FUNCTION__); oqwwacmigasucsoc: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\141\143\x68\x65\x5f\162\145\x6a\x65\x63\164\x5f\165\162\151"); if ($escsaeeosigewsme) { goto egkeqqgakieyimuq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); egkeqqgakieyimuq: $yciaosuiyeieceug = !preg_match("\x23\x5e\x28{$escsaeeosigewsme}\51\x24\x23\151", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\x5f\x55\x53\105\x52\137\x41\x47\x45\x4e\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cakuguiciaiaeukg; } return $this->eecucukcqkqysiau(__FUNCTION__); cakuguiciaiaeukg: $yygmoeguaqyumuui = [ "\x48\124\124\120\137\103\x46\x5f\103\117\116\x4e\x45\x43\124\x49\116\107\137\x49\120", "\110\124\124\x50\x5f\103\x4c\x49\105\116\124\137\x49\120", "\110\124\x54\x50\x5f\x58\x5f\106\117\122\127\101\122\104\x45\x44\137\x46\x4f\x52", "\110\124\124\120\x5f\130\x5f\x46\117\122\x57\x41\x52\104\x45\104", "\x48\x54\x54\x50\137\x58\137\103\114\x55\x53\124\105\122\x5f\x43\114\x49\x45\116\x54\137\111\x50", "\x48\x54\x54\x50\x5f\x58\x5f\x52\x45\x41\x4c\137\x49\120", "\110\124\x54\x50\137\x46\117\x52\x57\x41\122\104\x45\104\x5f\x46\117\122", "\x48\124\x54\120\x5f\x46\x4f\122\127\101\x52\x44\105\104", "\122\105\115\x4f\x54\105\x5f\x41\104\x44\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto cumeycwmuuqawwyu; } $kucumcusyyckayas = explode("\x2c", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto ckwmkquuyyugigom; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); ckwmkquuyyugigom: cumeycwmuuqawwyu: awwaiioyywmokwsm: } wswikooyuaaouqgk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\x30\x2e\60\x2e\x30\x2e\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uaicwcqwauosmsqm; } return $this->eecucukcqkqysiau(__FUNCTION__); uaicwcqwauosmsqm: $yywgiquyoymymqwk = [ "\62\x30\x38\x2e\67\x30\x2e\62\x34\x37\56\x31\x35\x37" => '', "\x31\67\62\x2e\x32\65\x35\x2e\x34\70\x2e\x31\x33\x30" => '', "\x31\x37\x32\x2e\62\65\x35\56\x34\x38\56\61\x33\x31" => '', "\61\x37\62\x2e\x32\65\x35\56\x34\70\56\61\63\62" => '', "\x31\x37\x32\56\x32\x35\x35\x2e\x34\x38\56\x31\63\63" => '', "\x31\x37\62\x2e\x32\x35\65\x2e\64\x38\56\61\63\x34" => '', "\61\67\62\56\62\65\65\56\x34\70\x2e\61\63\x35" => '', "\61\67\x32\56\x32\x35\x35\56\64\70\x2e\x31\63\66" => '', "\x31\67\62\56\62\65\x35\56\64\70\x2e\61\x33\67" => '', "\x31\x37\x32\56\x32\x35\65\x2e\64\70\x2e\x31\63\x38" => '', "\x31\67\x32\56\62\65\x35\56\x34\70\56\x31\x33\x39" => '', "\61\x37\x32\x2e\x32\x35\x35\x2e\x34\x38\x2e\61\x34\x30" => '', "\61\x37\62\x2e\x32\65\65\56\x34\70\x2e\61\64\61" => '', "\61\x37\62\56\x32\x35\65\x2e\x34\70\56\x31\64\62" => '', "\x31\x37\62\56\x32\x35\65\x2e\64\70\x2e\x31\64\x33" => '', "\x31\x37\62\56\62\65\x35\56\x34\70\56\x31\x34\x34" => '', "\61\x37\x32\x2e\62\65\x35\56\x34\70\x2e\x31\x34\x35" => '', "\61\67\x32\x2e\62\x35\x35\x2e\x34\70\x2e\61\x34\66" => '', "\61\67\62\x2e\x32\x35\x35\56\x34\x38\56\x31\64\x37" => '', "\x35\62\56\62\x32\x39\x2e\x31\x32\62\x2e\62\64\60" => '', "\61\x30\64\56\x32\61\x34\56\67\62\56\61\60\x31" => '', "\x31\x33\56\66\66\56\x37\x2e\61\x31" => '', "\61\63\56\x38\65\x2e\x32\64\56\70\63" => '', "\x31\63\x2e\70\x35\x2e\62\64\x2e\71\60" => '', "\61\x33\56\x38\65\x2e\70\x32\56\62\66" => '', "\64\x30\56\67\64\56\x32\64\62\x2e\62\65\x33" => '', "\64\60\x2e\67\x34\56\x32\64\x33\x2e\x31\63" => '', "\64\60\56\x37\x34\56\x32\64\63\56\x31\x37\66" => '', "\x31\x30\x34\x2e\x32\61\64\56\64\70\56\62\64\67" => '', "\x31\65\x37\x2e\x35\x35\x2e\61\70\x39\x2e\61\70\x39" => '', "\x31\60\x34\56\62\x31\x34\56\61\x31\x30\56\x31\63\x35" => '', "\x37\60\x2e\63\x37\56\70\63\56\62\64\x30" => '', "\66\65\x2e\x35\x32\56\x33\66\56\x32\x35\60" => '', "\61\x33\x2e\x37\70\x2e\62\61\x36\56\65\66" => '', "\x35\62\56\61\66\x32\56\62\61\62\56\61\66\63" => '', "\62\63\x2e\71\x36\56\x33\64\x2e\x31\60\x35" => '', "\x36\x35\56\x35\62\56\x31\61\x33\56\x32\63\66" => '', "\61\67\x32\56\x32\65\65\x2e\x36\61\x2e\x33\64" => '', "\x31\67\62\56\x32\x35\65\x2e\x36\61\56\63\x35" => '', "\x31\x37\x32\x2e\x32\65\65\56\x36\61\x2e\63\x36" => '', "\61\x37\62\x2e\62\65\65\56\x36\x31\56\63\x37" => '', "\61\67\x32\x2e\62\x35\x35\56\66\x31\x2e\x33\x38" => '', "\61\67\x32\56\x32\65\65\56\66\61\56\x33\x39" => '', "\61\67\62\56\x32\x35\x35\56\x36\61\x2e\x34\x30" => '', "\65\x32\x2e\x32\63\67\x2e\62\x33\x35\56\x31\x38\65" => '', "\x35\x32\x2e\62\63\67\56\x32\65\60\x2e\67\63" => '', "\65\62\x2e\62\63\x37\56\62\63\66\x2e\61\x34\65" => '', "\61\60\x34\56\64\x31\56\62\56\61\71" => '', "\x31\x39\61\56\x32\x33\65\56\x39\x38\x2e\x31\66\x34" => '', "\61\x39\x31\56\x32\63\x35\x2e\x39\71\56\x32\x32\x31" => '', "\61\x39\61\x2e\x32\63\62\x2e\x31\71\64\x2e\65\x31" => '', "\x31\x30\x34\x2e\62\x31\x31\56\x31\x34\63\x2e\70" => '', "\61\60\x34\56\62\61\61\x2e\61\x36\x35\x2e\x35\63" => '', "\65\x32\x2e\61\x37\x32\56\x31\x34\x2e\x38\67" => '', "\64\x30\x2e\70\x33\x2e\70\71\x2e\x32\x31\x34" => '', "\65\x32\x2e\x31\67\x35\x2e\x35\67\x2e\x38\x31" => '', "\x32\x30\56\61\70\x38\x2e\x36\63\x2e\61\65\61" => '', "\62\x30\56\65\62\56\x33\66\56\64\71" => '', "\65\x32\x2e\62\64\x36\x2e\61\66\x35\56\x31\x35\x33" => '', "\x35\61\56\61\64\x34\56\x31\x30\x32\56\x32\63\63" => '', "\61\x33\56\x37\x36\x2e\x39\67\56\x32\62\x34" => '', "\61\60\x32\56\61\x33\x33\56\61\66\x39\x2e\66\x36" => '', "\65\x32\x2e\x32\x33\x31\56\x31\x39\71\x2e\61\x37\x30" => '', "\61\x33\56\65\63\56\61\x36\x32\56\x37" => '', "\64\x30\x2e\61\x32\x33\56\x32\x31\70\56\71\x34" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto gsqcoqqsioiyoykq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gsqcoqqsioiyoykq: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\x50\x5f\x55\123\x45\x52\x5f\101\x47\x45\x4e\x54"); if ($uowwycywwssskuys) { goto goaowamiyyamueiw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goaowamiyyamueiw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\43\x50\151\156\x67\x64\x6f\155\120\141\x67\x65\x53\160\x65\145\144\x7c\104\141\162\x65\x42\x6f\x6f\x73\x74\x7c\x47\x6f\157\147\x6c\145\174\120\124\x53\124\x7c\x43\x68\162\x6f\155\145\55\114\151\147\x68\x74\150\x6f\165\x73\x65\x7c\x57\x50\x20\x52\157\x63\153\145\x74\x23\x69", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\x51\x55\x45\123\x54\137\125\122\x49", ''); if (!$iyiwooigkweeewey) { goto iaomqomgiwiegoca; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\x2f"); iaomqomgiwiegoca: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto ysweqawmawicakeo; } return ''; ysweqawmawicakeo: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto owisckseoogsugqq; } return $magawcseesgowoeo; owisckseoogsugqq: return "{$magawcseesgowoeo}\x3f{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto ookcgumoacskyymy; } $magawcseesgowoeo = explode("\x3f", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); ookcgumoacskyymy: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\x51\x55\x45\123\x54\x5f\x4d\105\124\110\x4f\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto kgysyqkoqgwmoscq; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\141\143\150\145\x5f\151\147\156\157\162\x65\x64\x5f\160\x61\162\x61\x6d\x65\164\x65\162\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto cuseccewekgcgkyg; } ksort($eyagkkkqkwcuygso); cuseccewekgcgkyg: kgysyqkoqgwmoscq: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; oqwcmgwimeisusoe: if (!(strpos($euueacigmgoqkimu, "\x2e\x2f") !== false || strpos($euueacigmgoqkimu, "\x2f\x2e") !== false || "\x2e" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu)) { goto makomwwyomweyamm; } if (strpos($euueacigmgoqkimu, "\56\x2e\57") === 0) { goto ooysmgyeqoiesgqm; } if (strpos($euueacigmgoqkimu, "\56\57") === 0) { goto ocgkwqqmgasuoies; } if (strpos($euueacigmgoqkimu, "\57\x2e\57") === 0) { goto wwswmaewcaisauei; } if ("\x2f\x2e" === $euueacigmgoqkimu) { goto gcskyqewysqaceeg; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\x2e\x2f") === 0) { goto cigesysuauaiccms; } if ("\x2f\x2e\x2e" === $euueacigmgoqkimu) { goto gwiaimosqoiquwkc; } if ("\56" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu) { goto qiaaqkymeuuueoqk; } if (strpos($euueacigmgoqkimu, "\57", 1) !== false) { goto acesyuieuuqwgkwm; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto asaowisseacciyia; acesyuieuuqwgkwm: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); asaowisseacciyia: goto ugswokwmkumcmigc; qiaaqkymeuuueoqk: $euueacigmgoqkimu = ''; ugswokwmkumcmigc: goto owgakkqgckqcegoi; gwiaimosqoiquwkc: $euueacigmgoqkimu = "\57"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); owgakkqgckqcegoi: goto qumkwsqqocooyuoq; cigesysuauaiccms: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); qumkwsqqocooyuoq: goto kkewoqqowugagwoy; gcskyqewysqaceeg: $euueacigmgoqkimu = "\57"; kkewoqqowugagwoy: goto wsemeeocquawyauo; wwswmaewcaisauei: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); wsemeeocquawyauo: goto wmaeicoyyciuaiuy; ocgkwqqmgasuoies: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); wmaeicoyyciuaiuy: goto kwoyiysciqumswcy; ooysmgyeqoiesgqm: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); kwoyiysciqumswcy: goto oqwcmgwimeisusoe; makomwwyomweyamm: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto aaogeemgkogagkai; } $icwicymcioeyeyek["\x70\x65\x72\155\x61\x6c\151\156\x6b"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); aaogeemgkogagkai: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto qqmmycmsoqegcqqw; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); qqmmycmsoqegcqqw: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto isqwwmikecauwyuc; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); isqwwmikecauwyuc: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\x75\x72\x6c"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\x6d\x65\x73\163\141\147\x65" => $uamcoiueqaamsqma, "\143\x6f\x6e\164\145\x78\x74" => $icwicymcioeyeyek]; } }
