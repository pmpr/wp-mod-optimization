<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6686f091293fe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\162\x69" => 1, "\x73\163\154" => 0, "\167\160\137\x34\x30\x34" => 1, "\163\145\x61\x72\143\150" => 1, "\x6d\x6f\x62\x69\x6c\x65" => 1, "\151\x73\x5f\x68\164\155\154" => 1, "\x71\165\x65\162\171\x5f\x73\x74\162\x69\156\x67" => 1, "\144\x6f\156\x6f\x74\x63\x61\143\150\145\x70\141\147\145" => 1, "\162\145\152\145\x63\164\x65\144\x5f\x63\x6f\157\153\151\145" => 1, "\155\x61\x6e\144\141\164\157\162\171\137\143\157\157\x6b\151\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\145\x73\x74\163"])) { goto ssywsaaqqaucesau; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\x65\163\x74\163"]); ssywsaaqqaucesau: if (!(!isset($ywmkwiwkosakssii["\x63\x6f\x6f\153\151\145\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto ygcgoaokauigwuus; } $ywmkwiwkosakssii["\143\x6f\157\153\151\145\163"] = $_COOKIE; ygcgoaokauigwuus: if (!(!isset($ywmkwiwkosakssii["\160\x6f\x73\x74"]) && !empty($_POST) && is_array($_POST))) { goto ysiqakyaiooyscwy; } $ywmkwiwkosakssii["\x70\x6f\163\x74"] = $_POST; ysiqakyaiooyscwy: if (!(!isset($ywmkwiwkosakssii["\x67\145\164"]) && !empty($_GET) && is_array($_GET))) { goto auumaoycmsmsgigs; } $ywmkwiwkosakssii["\147\145\164"] = $_GET; auumaoycmsmsgigs: $this->get = !empty($ywmkwiwkosakssii["\147\145\164"]) && is_array($ywmkwiwkosakssii["\x67\x65\x74"]) ? $ywmkwiwkosakssii["\147\x65\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\x6f\x73\x74"]) && is_array($ywmkwiwkosakssii["\160\157\163\164"]) ? $ywmkwiwkosakssii["\160\x6f\163\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\157\x6f\x6b\151\x65\163"]) && is_array($ywmkwiwkosakssii["\143\x6f\x6f\153\x69\145\163"]) ? $ywmkwiwkosakssii["\143\x6f\157\x6b\151\x65\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto ousmyagwsiooumos; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\x70\137\143\165\x73\164\x6f\x6d\x69\x7a\x65" => '']); ousmyagwsiooumos: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto qeuyekusasqmcqms; } $this->yauwooaeicgosquo("\104\145\x76\40\x4d\157\x64\x65\40\105\x6e\x61\x62\154\x65\144\40\x61\156\144\x20\x61\154\154\40\162\x65\161\165\145\x73\x74\40\x69\163\40\x62\x79\160\141\163\x73\x2e"); return false; qeuyekusasqmcqms: if (!$this->kgkoeoeseyuugaao()) { goto yiceawuuiusakwiq; } $this->yauwooaeicgosquo("\122\157\142\157\164\x73\56\x74\x78\164\40\x6f\x72\x20\56\x68\x74\141\x63\143\x65\163\163\x20\146\x69\154\x65\x20\151\163\x20\145\170\143\154\x75\144\145\x64\x2e"); return false; yiceawuuiusakwiq: if (!$this->gymgcceeqssmesiu()) { goto sgocecweikecwwgq; } $this->yauwooaeicgosquo("\x50\x48\x50\54\x20\x58\x4d\114\54\x20\157\162\x20\x58\123\x4c\x20\146\x69\x6c\x65\x20\x69\163\40\145\x78\143\154\165\144\145\144\x2e"); return false; sgocecweikecwwgq: if (!$this->goecwaaykqoaaagg()) { goto qwisiamkmkkwucyo; } $this->yauwooaeicgosquo("\101\x64\x6d\151\156\x20\x6f\162\x20\101\x4a\101\x58\40\x55\x52\x4c\40\x69\x73\40\x65\x78\x63\154\165\144\145\144\x2e"); return false; qwisiamkmkkwucyo: if (!$this->sgsscqasgeyeicoe()) { goto yqcusaeysomccaok; } $this->yauwooaeicgosquo("\101\x64\x6d\151\156\40\157\x72\40\101\112\x41\130\40\125\x52\x4c\x20\x69\x73\40\145\170\x63\x6c\165\144\145\144\56"); return false; yqcusaeysomccaok: if ($this->gooeyogikcusgwuu()) { goto iwkckkeimmeoquyq; } $this->yauwooaeicgosquo("\x52\x65\x71\x75\x65\x73\164\40\x6d\145\164\x68\157\x64\40\x69\x73\x20\x6e\157\x74\40\x61\x6c\154\x6f\167\145\144\x2e\40\x50\x61\147\145\x20\x63\141\156\x6e\x6f\164\40\x62\145\x20\x63\x61\143\150\145\x64\x2e", ["\x72\145\161\x75\145\163\x74\x5f\155\x65\164\x68\157\x64" => $this->ciyocmkwssocskiy()]); return false; iwkckkeimmeoquyq: if ($this->cskwmweqysskwckg()) { goto masakmomqmeocqqg; } $this->lastError = []; return true; masakmomqmeocqqg: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\x73\165\x63\x63\145\163\x73"]) { goto yksywwikmeksikqc; } $this->yauwooaeicgosquo("\x4e\x6f\x20\143\x6f\x6e\x66\151\147\x20\x66\151\x6c\x65\x20\146\x6f\165\156\x64", ["\143\x6f\x6e\x66\x69\147\137\160\141\164\x68" => $uiewakwqscemywuo["\x70\x61\x74\x68"]]); return false; yksywwikmeksikqc: if (!($this->cskwmweqysskwckg("\161\x75\x65\x72\x79\137\x73\x74\162\x69\156\147") && !$this->koguieumooaesyww())) { goto yoqsigmoyaaceqky; } $this->yauwooaeicgosquo("\x51\x75\145\x72\171\x20\163\164\162\x69\156\x67\40\x55\122\114\x20\151\x73\40\x65\x78\143\x6c\x75\x64\145\x64\x2e", $_GET); return false; yoqsigmoyaaceqky: if (!($this->cskwmweqysskwckg("\x73\x73\154") & !$this->eqwgocqwoyyykwke())) { goto suqckoccuyeeymww; } $this->yauwooaeicgosquo("\x53\123\x4c\40\x63\x61\143\x68\145\x20\156\157\164\40\141\x70\160\x6c\151\145\x64\40\x74\x6f\40\160\x61\147\x65\x2e"); return false; suqckoccuyeeymww: if (!($this->cskwmweqysskwckg("\165\x72\x69") && !$this->qweiomkkuikwugks())) { goto giugwaeuwaomossq; } $this->yauwooaeicgosquo("\120\141\147\x65\40\151\163\40\x65\170\x63\154\x75\144\145\x64\x2e"); return false; giugwaeuwaomossq: if (!($this->cskwmweqysskwckg("\162\145\x6a\x65\143\x74\145\x64\137\143\x6f\157\x6b\x69\145") && $this->cokqaygwwygweuyk())) { goto acgqaeakoyasgkku; } $this->yauwooaeicgosquo("\105\170\x63\154\x75\x64\145\x64\x20\x63\x6f\x6f\153\x69\x65\40\146\157\165\x6e\144\x2e", ["\145\x78\x63\x6c\x75\144\145\144\x5f\143\157\x6f\x6b\151\145\163" => $this->cokqaygwwygweuyk()]); return false; acgqaeakoyasgkku: if (!($this->cskwmweqysskwckg("\155\x61\x6e\144\x61\x74\x6f\x72\171\x5f\x63\x6f\157\153\151\145") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto sycougcyeqmeiagk; } $this->yauwooaeicgosquo("\x4d\151\163\x73\x69\x6e\147\x20\155\x61\156\x64\141\x74\x6f\162\x79\40\143\157\x6f\153\151\x65\x3a\40\160\x61\x67\x65\x20\x6e\157\164\x20\x70\x72\x6f\143\x65\x73\163\145\144\x2e", ["\x6d\x69\163\x73\x69\x6e\147\137\143\157\157\153\x69\x65\163" => $this->qgymyeqwqaiwmmea()]); return false; sycougcyeqmeiagk: if (!($this->cskwmweqysskwckg("\x75\x73\145\x72\137\x61\147\145\x6e\x74") && !$this->mqiqsuksgyekwkii())) { goto ssagcgqaucssyego; } $this->yauwooaeicgosquo("\125\x73\145\162\x20\101\147\x65\x6e\x74\x20\x69\x73\40\145\x78\x63\x6c\165\x64\145\144\x2e", ["\165\x73\x65\162\x5f\141\x67\145\156\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\120\137\125\x53\x45\x52\x5f\x41\x47\105\x4e\124")]); return false; ssagcgqaucssyego: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto mqgeseysuwcaqwiy; } $this->yauwooaeicgosquo("\102\165\146\x66\145\x72\x20\x63\x6f\x6e\x74\x65\x6e\x74\40\x75\x6e\x64\145\x72\40\62\65\65\40\143\x68\141\x72\141\143\164\x65\162\163\x2e"); return false; mqgeseysuwcaqwiy: if (!(http_response_code() !== 200)) { goto ekoqieigyoeyauqa; } $this->yauwooaeicgosquo("\120\141\x67\145\x20\x69\x73\40\156\x6f\x74\40\141\x20\x32\x30\60\x20\x48\x54\124\x50\40\x72\x65\163\x70\157\x6e\163\x65\40\x61\x6e\x64\40\143\x61\156\x6e\x6f\x74\x20\x62\x65\40\x63\141\143\150\145\144\x2e"); return false; ekoqieigyoeyauqa: if (!($this->cskwmweqysskwckg("\x64\157\x6e\157\x74\157\x70\164\151\x6d\151\x7a\x65\x70\141\x67\145") && $this->cowcgqokiosgaqic())) { goto cuwcsamuuqyuyqsu; } $this->yauwooaeicgosquo("\x44\x4f\x4e\x54\117\x50\124\x49\115\x49\132\105\x44\x50\x41\x47\x45\x20\151\x73\40\x64\145\x66\151\x6e\145\144\56\x20\x50\141\x67\145\40\143\141\x6e\x6e\x6f\164\x20\142\x65\40\143\x61\143\x68\145\x64\56"); return false; cuwcsamuuqyuyqsu: if (!($this->cskwmweqysskwckg("\167\160\137\x34\x30\64") && $this->kmmyuiwaogukwqqi())) { goto mimacwyuueomgwwy; } $this->yauwooaeicgosquo("\x57\x50\40\64\x30\64\x20\x70\x61\147\145\40\151\163\40\145\170\x63\154\165\x64\x65\x64\x2e"); return false; mimacwyuueomgwwy: if (!($this->cskwmweqysskwckg("\163\x65\141\162\x63\x68") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto ksckqkmwiqggykke; } $this->yauwooaeicgosquo("\x53\145\x61\x72\143\x68\x20\160\141\x67\145\x20\151\163\40\145\170\x63\154\165\x64\145\x64\56"); return false; ksckqkmwiqggykke: if (!$this->cskwmweqysskwckg("\x69\x73\x5f\150\x74\155\x6c")) { goto iqsgossweywksoia; } if (!($this->cmaecekuqkwmemms("\122\x45\x53\x54\137\122\x45\x51\x55\105\x53\x54") || $this->gaiygescoqgyusaa())) { goto igwkcikeyoowosoi; } unset($this->tests["\151\163\x5f\150\164\155\x6c"]); igwkcikeyoowosoi: iqsgossweywksoia: if (!($this->cskwmweqysskwckg("\x69\x73\137\150\164\155\x6c") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto awaqksikyomsuaeo; } $this->yauwooaeicgosquo("\116\157\40\143\x6c\x6f\163\x69\156\x67\40\x3c\57\150\164\155\154\76\x20\x77\x61\163\40\x66\x6f\x75\156\144\56"); return false; awaqksikyomsuaeo: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\x72\x5f\x6f\160\x74\x69\x6d\151\172\141\164\151\x6f\x6e\137\141\x6c\x6c\x6f\167\x5f\164\157\x5f\163\x74\x61\162\164\x5f\x62\x75\x66\x66\145\162\137\160\162\157\143\145\163\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto cuommomwmsackoqc; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto ggeoqeowscwkeumy; cuommomwmsackoqc: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); ggeoqeowscwkeumy: return apply_filters("\x70\x72\x5f\x6f\160\164\151\x6d\151\172\141\x74\151\x6f\156\x5f\150\x61\x73\x5f{$ymqmyyeuycgmigyo}\137\164\145\163\164", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\57\74\134\163\x2a\134\x2f\134\x73\x2a\x68\x74\155\154\x5c\163\52\76\57\151", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\x28\77\x3a\x2e\53\57\x29\x3f" . $wp_rewrite->feed_base . "\x28\77\x3a\x2f\x28\x3f\72\x2e\53\57\x3f\x29\x3f\x29\x3f\44"; return (bool) preg_match("\x23\136\50{$uckmmkmoeikwsiqg}\x29\x24\x23\151", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\x64\x65\x76\137\x6d\157\144\145"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qyeswawykmasuqye; } return $this->eecucukcqkqysiau(__FUNCTION__); qyeswawykmasuqye: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto uwaimsisescsgyqk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uwaimsisescsgyqk: $ucasskoyoewwmmii = ["\x72\157\x62\x6f\x74\163\56\x74\x78\164", "\56\x68\164\141\x63\143\145\x73\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto ukwoswyyogmsygqg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ukwoswyyogmsygqg: yggmaskeguaqkusc: } uqcsksaywyqeumig: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto jsmisuccwyukksgc; } return $this->eecucukcqkqysiau(__FUNCTION__); jsmisuccwyukksgc: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto yqicwmekwuoywyus; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto kwmiwaecqcgiaqye; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kwmiwaecqcgiaqye: yqicwmekwuoywyus: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gkoaeuekqockuoiq; } return $this->eecucukcqkqysiau(__FUNCTION__); gkoaeuekqockuoiq: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto eekaiaeqewiqkkgm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); eekaiaeqewiqkkgm: if (!(strtolower($iyiwooigkweeewey) === "\57\x69\156\x64\x65\170\x2e\160\x68\160")) { goto kceuusiekagyeoys; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kceuusiekagyeoys: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\x68\x70" => 1, "\170\x6d\x6c" => 1, "\x78\x73\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\x44\x4f\x49\116\x47\137\x41\112\x41\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\123")), ["\x6f\x6e", "\61"]) || "\64\x34\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\x45\x52\126\105\x52\137\x50\117\122\x54"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\160\137\143\165\x73\x74\157\x6d\x69\172\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\x45\x54" => 1, "\x48\105\101\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uyeyscsaigimsqwq; } return $this->eecucukcqkqysiau(__FUNCTION__); uyeyscsaigimsqwq: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto mwieyyqamgwicgco; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); mwieyyqamgwicgco: $yccgiaiouekkouay = ["\163" => 1, "\x6c\141\156\147" => 1, "\160\145\x72\x6d\x61\154\x69\x6e\153\137\x6e\x61\155\145" => 1, "\x6c\160\55\x76\141\162\151\x61\164\151\157\x6e\55\x69\x64" => 1, "\x58\x44\x45\102\125\107\137\x53\105\x53\x53\111\x4f\x4e\x5f\123\x54\x41\122\x54" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto wkiymcoqqiigqaaw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wkiymcoqqiigqaaw: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\141\143\150\x65\137\161\x75\145\162\171\x5f\163\x74\162\151\x6e\147\163"); if ($yccgiaiouekkouay) { goto esqwswmoegiqcckg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); esqwswmoegiqcckg: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qmokwkocmcyeyesc; } return $this->eecucukcqkqysiau(__FUNCTION__); qmokwkocmcyeyesc: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto mosuacsuaasssciu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mosuacsuaasssciu: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto qksckewucmosemuo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qksckewucmosemuo: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto cmmusgkieoqyymgs; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; cmmusgkieoqyymgs: skuuyysooocugyww: } kmooekeyemqgucci: if (empty($eiocugauqgouiuyi)) { goto mkgmaguyswskyioa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); mkgmaguyswskyioa: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto skwusmoyomgqkimm; } return $this->eecucukcqkqysiau(__FUNCTION__); skwusmoyomgqkimm: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto usyckeewsgwaysam; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); usyckeewsgwaysam: $yiycakoikkyuokgk = array_flip(explode("\174", $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\145\137\x6d\x61\x6e\x64\x61\x74\157\162\x79\x5f\x63\157\157\153\151\x65\x73"))); if ($this->wemyikwikgwqwuoc()) { goto gicuuwuuuwumyooa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); gicuuwuuuwumyooa: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto ismeikacqqyqcmqe; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); ismeikacqqyqcmqe: cysgqimowcqoqqsc: } kakkuyeccaacewyo: if (!empty($yiycakoikkyuokgk)) { goto qsokkkyoackoycie; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qsokkkyoackoycie: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\x70\x72\x5f\x6f\160\164\x69\155\x69\x7a\x61\x74\x69\157\156\137\x6f\x76\x65\162\162\x69\x64\x65\x5f\144\x6f\156\x74\137\157\x70\x74\x69\155\151\x7a\x65", $this->cmaecekuqkwmemms("\x50\122\137\x4f\x50\x54\x49\115\111\132\x41\124\111\x4f\116\137\x44\x4f\116\124\137\117\x50\124\x49\115\111\132\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\151\x73\x5f\x34\x30\64") || is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\x69\x73\x5f\x73\145\x61\x72\x63\150") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\160\162\x5f\x6f\x70\164\x69\x6d\x69\x7a\x61\x74\151\157\156\137\x6f\x70\x74\x69\x6d\x69\x7a\x65\137\163\145\141\x72\143\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\143\x61\143\150\145\137\x73\x73\154"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto casgoamcqkekgeeo; } return $this->eecucukcqkqysiau(__FUNCTION__); casgoamcqkekgeeo: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto yseyyukqaowwouua; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yseyyukqaowwouua: if (!$this->aceaeommyuooiqge()->get("\x6d\157\x62\151\x6c\x65\x5f\143\x61\x63\150\x65")) { goto qcgyggiaowuqswuw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qcgyggiaowuqswuw: $wayquiskgeuoqamk = "\62\x2e\60\134\x20\115\115\x50\174\x32\64\x30\170\63\62\x30\x7c\x34\60\60\130\62\64\x30\x7c\x41\166\x61\x6e\164\107\x6f\x7c\x42\x6c\x61\x63\x6b\x42\x65\x72\x72\x79\x7c\102\x6c\x61\172\145\162\174\103\145\154\154\x70\150\x6f\156\145\174\x44\141\156\147\145\x72\x7c\104\x6f\x43\157\115\157\x7c\105\154\x61\151\156\145\x2f\63\56\60\174\x45\x75\x64\157\x72\141\x57\x65\142\174\x47\157\157\147\154\x65\142\x6f\164\55\x4d\x6f\142\x69\154\145\174\x68\x69\x70\x74\x6f\160\174\x49\105\x4d\x6f\142\x69\x6c\145\174\x4b\131\x4f\103\x45\x52\101\x2f\x57\130\x33\61\60\113\174\114\x47\57\125\71\71\x30\x7c\115\111\104\120\55\x32\56\x7c\115\x4d\105\106\x32\60\x7c\115\x4f\x54\55\x56\174\116\x65\x74\106\162\x6f\156\164\174\116\x65\x77\x74\x7c\116\151\x6e\164\x65\x6e\x64\157\x5c\40\127\151\151\x7c\116\151\x74\x72\x6f\174\116\157\x6b\x69\x61\x7c\x4f\x70\x65\x72\141\134\x20\115\x69\x6e\151\x7c\120\141\154\x6d\x7c\120\154\141\x79\x53\x74\141\x74\x69\157\156\134\x20\120\x6f\162\164\141\142\x6c\145\x7c\160\x6f\162\x74\141\154\155\155\155\174\120\x72\x6f\170\151\156\x65\x74\174\x50\x72\157\170\151\116\145\x74\x7c\x53\110\101\x52\x50\55\124\x51\55\107\130\x31\60\x7c\123\110\x47\x2d\151\71\60\x30\174\x53\x6d\x61\154\x6c\174\x53\x6f\156\171\x45\162\151\143\x73\163\x6f\156\174\x53\x79\155\x62\x69\x61\156\134\x20\117\x53\174\123\171\x6d\142\151\x61\x6e\x4f\x53\x7c\124\x53\62\61\x69\55\61\60\174\125\x50\56\102\162\157\167\x73\x65\x72\x7c\125\x50\x2e\114\x69\x6e\x6b\x7c\167\x65\142\117\x53\x7c\x57\151\x6e\144\x6f\x77\x73\x5c\x20\103\x45\x7c\x57\x69\x6e\x57\101\x50\174\131\x61\x68\x6f\x6f\123\x65\145\153\145\162\x2f\115\61\101\61\x2d\x52\x32\104\x32\x7c\x69\120\150\157\x6e\x65\x7c\151\120\x6f\x64\x7c\101\x6e\144\162\x6f\x69\x64\x7c\102\154\141\143\153\102\145\x72\x72\171\71\65\63\60\174\x4c\107\55\124\x55\71\61\65\134\x20\x4f\x62\x69\147\x6f\174\114\107\x45\x5c\40\126\130\174\167\x65\142\117\x53\174\116\157\153\151\141\x35\70\x30\60"; if (!preg_match("\x23\x5e\56\52\x28{$wayquiskgeuoqamk}\x29\x2e\52\43\151", $uowwycywwssskuys)) { goto sooecucuakgkuyis; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); sooecucuakgkuyis: $wayquiskgeuoqamk = "\x77\63\143\134\40\x7c\x77\x33\x63\x2d\174\141\x63\x73\55\x7c\x61\154\x61\x76\174\141\x6c\x63\x61\x7c\x61\155\157\x69\174\x61\165\144\151\174\x61\x76\141\x6e\174\x62\x65\x6e\x71\x7c\142\x69\162\144\x7c\x62\x6c\x61\143\174\142\154\141\172\174\142\162\x65\167\x7c\143\x65\154\154\174\143\154\x64\x63\x7c\143\155\144\55\x7c\x64\141\x6e\x67\x7c\144\157\x63\x6f\174\145\x72\x69\x63\174\150\151\x70\164\174\150\164\x63\137\174\151\x6e\156\x6f\x7c\x69\160\x61\x71\174\x69\x70\x6f\144\174\x6a\151\147\x73\x7c\x6b\144\x64\x69\174\x6b\x65\x6a\151\x7c\154\x65\156\157\x7c\154\x67\x2d\143\174\x6c\147\x2d\144\174\154\x67\x2d\x67\x7c\154\x67\x65\x2d\x7c\154\147\57\165\x7c\155\141\x75\151\174\x6d\141\x78\157\x7c\155\151\x64\x70\x7c\x6d\151\x74\163\174\x6d\155\145\x66\x7c\x6d\157\x62\x69\x7c\155\157\x74\x2d\x7c\x6d\157\x74\157\x7c\155\x77\142\160\174\156\145\x63\x2d\x7c\x6e\145\167\164\174\156\x6f\x6b\x69\x7c\160\x61\154\155\174\x70\141\156\x61\174\x70\141\156\x74\x7c\x70\150\151\x6c\174\x70\154\x61\171\174\160\x6f\162\x74\174\160\162\157\170\174\x71\167\x61\x70\x7c\x73\141\147\x65\x7c\163\x61\155\x73\x7c\x73\141\x6e\x79\x7c\x73\x63\150\55\174\163\x65\x63\x2d\x7c\x73\x65\x6e\x64\174\163\145\x72\x69\x7c\163\x67\x68\x2d\x7c\x73\x68\141\x72\174\x73\151\x65\55\x7c\x73\151\x65\x6d\x7c\x73\155\x61\x6c\174\163\155\141\x72\x7c\163\157\x6e\x79\174\x73\x70\x68\55\174\x73\171\x6d\142\174\x74\55\x6d\157\x7c\x74\x65\x6c\151\x7c\164\x69\x6d\x2d\174\164\x6f\x73\x68\x7c\164\x73\155\55\x7c\x75\x70\147\61\x7c\x75\x70\163\151\174\166\153\55\166\174\x76\x6f\144\x61\174\x77\141\x70\55\x7c\x77\x61\160\141\174\x77\141\x70\151\174\x77\x61\160\160\174\167\141\160\x72\x7c\x77\x65\142\x63\174\167\x69\x6e\167\x7c\167\151\156\167\174\x78\x64\141\134\40\174\170\144\141\x2d"; if (!preg_match("\43\x5e\50{$wayquiskgeuoqamk}\51\56\x2a\x23\x69", $uowwycywwssskuys)) { goto ywqakqkmmcoceqka; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ywqakqkmmcoceqka: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kwsqgqmwyyeykgum; } return $this->eecucukcqkqysiau(__FUNCTION__); kwsqgqmwyyeykgum: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto emauuoieewwoeyqq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); emauuoieewwoeyqq: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\143\x61\143\150\x65\137\162\145\152\145\143\164\x5f\165\141"); if ($mqsuiayuwmwqaqwm) { goto koukiyqaccegmquc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); koukiyqaccegmquc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\x23{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ekakkiuuquqkccse; } return $this->eecucukcqkqysiau(__FUNCTION__); ekakkiuuquqkccse: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\143\x61\143\150\x65\137\162\x65\152\145\143\164\x5f\x75\x72\x69"); if ($escsaeeosigewsme) { goto oqwwacmigasucsoc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); oqwwacmigasucsoc: $yciaosuiyeieceug = !preg_match("\x23\136\x28{$escsaeeosigewsme}\51\x24\43\151", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\x5f\125\123\x45\122\137\x41\x47\x45\116\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto egkeqqgakieyimuq; } return $this->eecucukcqkqysiau(__FUNCTION__); egkeqqgakieyimuq: $yygmoeguaqyumuui = [ "\x48\x54\124\120\137\103\x46\x5f\x43\x4f\116\116\x45\x43\124\x49\x4e\107\x5f\x49\120", "\110\x54\124\x50\x5f\103\x4c\x49\x45\116\124\137\x49\x50", "\x48\x54\x54\120\x5f\x58\137\x46\x4f\122\127\101\x52\104\x45\x44\137\106\x4f\122", "\x48\124\x54\120\x5f\130\137\x46\117\x52\127\x41\x52\x44\x45\x44", "\x48\x54\124\120\x5f\x58\137\103\114\125\123\x54\105\122\137\103\x4c\x49\x45\x4e\124\x5f\111\x50", "\x48\124\124\x50\x5f\x58\x5f\x52\x45\x41\x4c\x5f\x49\x50", "\110\124\124\x50\137\106\x4f\x52\x57\x41\122\x44\x45\104\137\x46\x4f\122", "\110\x54\x54\120\137\106\117\122\x57\x41\122\104\x45\104", "\122\x45\x4d\117\124\x45\137\x41\x44\x44\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto ckwmkquuyyugigom; } $kucumcusyyckayas = explode("\x2c", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto awwaiioyywmokwsm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); awwaiioyywmokwsm: ckwmkquuyyugigom: wswikooyuaaouqgk: } cakuguiciaiaeukg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\60\56\x30\56\x30\56\60"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cumeycwmuuqawwyu; } return $this->eecucukcqkqysiau(__FUNCTION__); cumeycwmuuqawwyu: $yywgiquyoymymqwk = [ "\x32\60\x38\x2e\67\x30\x2e\62\x34\x37\56\x31\x35\x37" => '', "\61\67\62\56\x32\65\65\x2e\64\70\56\61\63\60" => '', "\61\x37\62\56\x32\65\65\56\64\x38\56\x31\x33\61" => '', "\x31\67\62\x2e\x32\65\x35\56\x34\70\x2e\x31\63\x32" => '', "\x31\67\x32\56\x32\65\x35\x2e\x34\x38\56\x31\x33\63" => '', "\x31\x37\x32\x2e\62\x35\x35\x2e\x34\x38\x2e\61\x33\64" => '', "\x31\67\62\56\x32\65\65\x2e\64\x38\x2e\61\63\65" => '', "\x31\67\x32\x2e\62\x35\65\56\x34\x38\56\61\x33\x36" => '', "\x31\x37\62\x2e\x32\x35\65\x2e\64\70\56\61\x33\x37" => '', "\x31\67\x32\x2e\x32\x35\x35\56\64\x38\56\x31\63\x38" => '', "\x31\67\62\56\62\x35\x35\x2e\64\70\56\61\x33\x39" => '', "\x31\67\x32\56\62\x35\65\x2e\64\70\56\61\x34\60" => '', "\x31\67\62\56\62\65\x35\x2e\64\70\x2e\61\x34\x31" => '', "\x31\67\x32\x2e\x32\x35\65\56\x34\x38\x2e\x31\x34\62" => '', "\61\x37\x32\56\x32\x35\65\x2e\64\70\x2e\61\x34\x33" => '', "\61\x37\x32\56\62\x35\x35\x2e\64\x38\56\x31\x34\x34" => '', "\x31\67\62\x2e\62\65\x35\x2e\x34\70\x2e\61\64\65" => '', "\x31\x37\x32\56\x32\65\65\x2e\x34\70\x2e\x31\x34\x36" => '', "\61\67\x32\56\x32\65\x35\x2e\x34\x38\56\61\64\x37" => '', "\65\62\56\62\62\x39\56\61\62\62\56\x32\64\x30" => '', "\61\60\x34\x2e\x32\x31\x34\x2e\x37\x32\56\61\x30\61" => '', "\61\x33\x2e\66\x36\56\67\56\61\x31" => '', "\x31\x33\x2e\70\65\x2e\x32\x34\x2e\x38\x33" => '', "\x31\63\x2e\x38\65\56\x32\64\x2e\x39\60" => '', "\61\63\56\70\65\56\70\62\x2e\x32\66" => '', "\64\x30\x2e\x37\x34\56\x32\64\x32\56\62\x35\x33" => '', "\64\x30\56\67\x34\56\x32\64\x33\x2e\x31\x33" => '', "\x34\60\x2e\x37\x34\56\62\64\x33\56\61\67\66" => '', "\61\60\x34\x2e\x32\61\x34\x2e\x34\70\56\x32\64\x37" => '', "\61\65\67\x2e\x35\65\56\x31\x38\x39\x2e\x31\x38\x39" => '', "\x31\60\x34\56\62\61\x34\x2e\61\61\60\x2e\61\x33\65" => '', "\67\60\56\x33\67\56\70\x33\56\x32\64\60" => '', "\66\65\x2e\65\x32\x2e\x33\66\56\62\x35\60" => '', "\x31\x33\56\x37\x38\x2e\62\x31\x36\56\65\66" => '', "\x35\x32\x2e\61\x36\62\56\62\61\62\x2e\61\66\63" => '', "\x32\63\56\x39\x36\x2e\x33\64\56\x31\60\x35" => '', "\66\x35\x2e\x35\x32\56\61\61\x33\x2e\x32\x33\66" => '', "\x31\67\62\x2e\62\65\65\56\66\61\x2e\63\x34" => '', "\61\67\62\x2e\62\x35\x35\x2e\x36\x31\x2e\63\x35" => '', "\x31\x37\62\x2e\x32\x35\65\56\66\61\x2e\x33\66" => '', "\x31\67\62\x2e\x32\x35\65\x2e\x36\61\x2e\x33\x37" => '', "\x31\x37\x32\x2e\x32\65\65\x2e\66\x31\x2e\63\x38" => '', "\61\67\x32\56\x32\x35\65\56\66\61\56\63\71" => '', "\x31\x37\62\56\62\x35\65\x2e\66\x31\x2e\64\60" => '', "\x35\x32\x2e\x32\x33\67\56\62\63\65\x2e\x31\70\65" => '', "\x35\x32\56\x32\x33\67\56\x32\65\60\x2e\x37\63" => '', "\x35\x32\x2e\62\x33\x37\x2e\x32\63\x36\x2e\61\x34\65" => '', "\61\x30\x34\56\64\61\56\62\x2e\61\71" => '', "\61\x39\61\56\62\x33\65\56\x39\x38\x2e\61\66\x34" => '', "\61\x39\61\56\62\63\x35\56\71\71\x2e\x32\x32\x31" => '', "\61\71\61\56\62\x33\x32\x2e\61\71\x34\56\x35\61" => '', "\61\60\64\56\62\x31\x31\x2e\61\64\x33\x2e\70" => '', "\61\60\64\x2e\x32\x31\61\x2e\x31\x36\65\56\x35\63" => '', "\x35\62\x2e\61\x37\x32\56\61\x34\56\x38\x37" => '', "\x34\60\56\x38\63\56\70\x39\56\62\x31\64" => '', "\65\62\56\61\x37\65\56\x35\x37\x2e\70\61" => '', "\62\x30\56\61\70\x38\56\66\x33\56\61\65\x31" => '', "\x32\60\x2e\65\x32\x2e\63\66\56\x34\x39" => '', "\x35\x32\x2e\62\64\x36\x2e\x31\x36\65\56\61\x35\x33" => '', "\x35\x31\x2e\61\x34\x34\x2e\x31\60\x32\56\62\x33\63" => '', "\x31\x33\x2e\x37\x36\56\71\67\56\x32\62\64" => '', "\x31\60\x32\x2e\61\63\x33\56\61\66\71\56\x36\66" => '', "\65\62\56\x32\x33\61\56\61\71\71\56\x31\67\60" => '', "\61\63\x2e\x35\x33\56\x31\x36\62\x2e\x37" => '', "\64\60\x2e\x31\62\63\x2e\x32\61\70\56\71\x34" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto uaicwcqwauosmsqm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); uaicwcqwauosmsqm: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\x50\x5f\125\x53\105\122\x5f\x41\107\x45\x4e\124"); if ($uowwycywwssskuys) { goto gsqcoqqsioiyoykq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gsqcoqqsioiyoykq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\43\120\x69\x6e\147\x64\x6f\155\120\x61\x67\x65\123\160\x65\145\144\x7c\x44\141\x72\x65\x42\x6f\x6f\x73\164\x7c\x47\157\x6f\x67\154\145\174\x50\124\123\124\x7c\103\x68\x72\157\x6d\145\55\x4c\x69\x67\x68\164\x68\x6f\165\x73\x65\174\x57\x50\x20\x52\157\x63\153\x65\164\x23\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\121\125\x45\123\x54\x5f\x55\122\111", ''); if (!$iyiwooigkweeewey) { goto goaowamiyyamueiw; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\57"); goaowamiyyamueiw: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto iaomqomgiwiegoca; } return ''; iaomqomgiwiegoca: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto ysweqawmawicakeo; } return $magawcseesgowoeo; ysweqawmawicakeo: return "{$magawcseesgowoeo}\x3f{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto owisckseoogsugqq; } $magawcseesgowoeo = explode("\x3f", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); owisckseoogsugqq: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\121\x55\x45\123\124\x5f\115\105\x54\x48\x4f\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto cuseccewekgcgkyg; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\x61\x63\x68\x65\x5f\x69\147\x6e\x6f\x72\x65\x64\137\160\141\x72\141\x6d\x65\164\145\x72\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto ookcgumoacskyymy; } ksort($eyagkkkqkwcuygso); ookcgumoacskyymy: cuseccewekgcgkyg: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; makomwwyomweyamm: if (!(strpos($euueacigmgoqkimu, "\56\x2f") !== false || strpos($euueacigmgoqkimu, "\x2f\x2e") !== false || "\x2e" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu)) { goto kgysyqkoqgwmoscq; } if (strpos($euueacigmgoqkimu, "\x2e\x2e\57") === 0) { goto wmaeicoyyciuaiuy; } if (strpos($euueacigmgoqkimu, "\56\57") === 0) { goto wsemeeocquawyauo; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\57") === 0) { goto kkewoqqowugagwoy; } if ("\x2f\56" === $euueacigmgoqkimu) { goto qumkwsqqocooyuoq; } if (strpos($euueacigmgoqkimu, "\57\56\56\57") === 0) { goto owgakkqgckqcegoi; } if ("\57\56\56" === $euueacigmgoqkimu) { goto ugswokwmkumcmigc; } if ("\56" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu) { goto asaowisseacciyia; } if (strpos($euueacigmgoqkimu, "\57", 1) !== false) { goto oqwcmgwimeisusoe; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto acesyuieuuqwgkwm; oqwcmgwimeisusoe: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\x2f", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); acesyuieuuqwgkwm: goto qiaaqkymeuuueoqk; asaowisseacciyia: $euueacigmgoqkimu = ''; qiaaqkymeuuueoqk: goto gwiaimosqoiquwkc; ugswokwmkumcmigc: $euueacigmgoqkimu = "\57"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); gwiaimosqoiquwkc: goto cigesysuauaiccms; owgakkqgckqcegoi: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); cigesysuauaiccms: goto gcskyqewysqaceeg; qumkwsqqocooyuoq: $euueacigmgoqkimu = "\x2f"; gcskyqewysqaceeg: goto wwswmaewcaisauei; kkewoqqowugagwoy: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); wwswmaewcaisauei: goto ocgkwqqmgasuoies; wsemeeocquawyauo: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); ocgkwqqmgasuoies: goto ooysmgyeqoiesgqm; wmaeicoyyciuaiuy: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); ooysmgyeqoiesgqm: goto makomwwyomweyamm; kgysyqkoqgwmoscq: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto kwoyiysciqumswcy; } $icwicymcioeyeyek["\160\145\162\x6d\x61\154\x69\156\153"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); kwoyiysciqumswcy: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto aaogeemgkogagkai; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); aaogeemgkogagkai: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto qqmmycmsoqegcqqw; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); qqmmycmsoqegcqqw: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\x72\x6c"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\x6d\145\x73\163\141\147\x65" => $uamcoiueqaamsqma, "\143\x6f\x6e\x74\x65\170\x74" => $icwicymcioeyeyek]; } }
