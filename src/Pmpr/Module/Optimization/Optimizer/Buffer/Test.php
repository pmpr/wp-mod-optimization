<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d31ce4ed382             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\x72\151" => 1, "\163\163\x6c" => 0, "\x77\x70\x5f\64\x30\64" => 1, "\x73\x65\141\x72\x63\x68" => 1, "\155\x6f\x62\x69\x6c\145" => 1, "\151\163\137\x68\x74\x6d\154" => 1, "\161\x75\x65\162\x79\x5f\163\x74\162\x69\156\147" => 1, "\144\x6f\156\157\x74\x63\x61\x63\x68\145\x70\x61\147\x65" => 1, "\x72\145\x6a\145\143\164\145\x64\x5f\x63\157\x6f\x6b\151\145" => 1, "\155\141\x6e\x64\141\x74\157\x72\171\x5f\143\157\157\153\x69\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\164\145\163\164\x73"])) { goto owmuceyswmgueasi; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\x65\163\x74\163"]); owmuceyswmgueasi: if (!(!isset($ywmkwiwkosakssii["\143\157\157\x6b\x69\145\x73"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto mwsmsguqqkcwiiuk; } $ywmkwiwkosakssii["\x63\x6f\x6f\x6b\x69\x65\x73"] = $_COOKIE; mwsmsguqqkcwiiuk: if (!(!isset($ywmkwiwkosakssii["\160\157\163\164"]) && !empty($_POST) && is_array($_POST))) { goto eeauyscekuckoues; } $ywmkwiwkosakssii["\160\157\x73\164"] = $_POST; eeauyscekuckoues: if (!(!isset($ywmkwiwkosakssii["\147\x65\164"]) && !empty($_GET) && is_array($_GET))) { goto eogwckcymuugikuy; } $ywmkwiwkosakssii["\147\145\164"] = $_GET; eogwckcymuugikuy: $this->get = !empty($ywmkwiwkosakssii["\147\x65\x74"]) && is_array($ywmkwiwkosakssii["\x67\x65\x74"]) ? $ywmkwiwkosakssii["\147\x65\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\157\163\x74"]) && is_array($ywmkwiwkosakssii["\160\x6f\x73\x74"]) ? $ywmkwiwkosakssii["\x70\x6f\163\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\x6f\157\x6b\x69\x65\x73"]) && is_array($ywmkwiwkosakssii["\143\157\157\153\x69\145\x73"]) ? $ywmkwiwkosakssii["\x63\157\x6f\x6b\x69\x65\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto msemumccgceyugmg; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\160\137\143\x75\x73\164\157\x6d\151\172\145" => '']); msemumccgceyugmg: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto wagqgeqymeqoeuyi; } $this->yauwooaeicgosquo("\104\x65\166\40\x4d\157\144\145\40\105\x6e\x61\142\x6c\x65\x64\40\x61\156\144\40\x61\x6c\154\x20\162\x65\161\165\145\x73\x74\x20\x69\x73\40\x62\171\x70\141\163\163\x2e"); return false; wagqgeqymeqoeuyi: if (!$this->kgkoeoeseyuugaao()) { goto qoqskyuuwueqkquk; } $this->yauwooaeicgosquo("\122\x6f\142\157\164\163\x2e\x74\170\x74\40\x6f\162\40\56\150\x74\141\143\x63\x65\x73\x73\x20\x66\x69\x6c\145\40\151\x73\40\145\170\x63\x6c\x75\x64\x65\x64\56"); return false; qoqskyuuwueqkquk: if (!$this->gymgcceeqssmesiu()) { goto iwsuawwqomaowuii; } $this->yauwooaeicgosquo("\x50\110\x50\54\40\x58\x4d\x4c\54\x20\157\x72\40\130\x53\x4c\x20\x66\151\x6c\145\x20\151\x73\x20\x65\170\143\x6c\165\144\x65\x64\56"); return false; iwsuawwqomaowuii: if (!$this->goecwaaykqoaaagg()) { goto wcugqegqsuuuwqao; } $this->yauwooaeicgosquo("\x41\x64\155\151\156\40\x6f\x72\x20\x41\x4a\x41\x58\40\125\x52\x4c\40\x69\x73\40\x65\x78\143\x6c\165\144\x65\144\56"); return false; wcugqegqsuuuwqao: if (!$this->sgsscqasgeyeicoe()) { goto asiqwuoswmigcaki; } $this->yauwooaeicgosquo("\101\144\155\151\156\40\157\x72\x20\101\112\101\x58\x20\x55\x52\114\40\x69\x73\40\x65\170\x63\154\x75\144\x65\144\x2e"); return false; asiqwuoswmigcaki: if ($this->gooeyogikcusgwuu()) { goto ciykoyeioqgyaeqo; } $this->yauwooaeicgosquo("\x52\145\161\165\x65\163\x74\x20\155\145\164\150\157\144\40\x69\163\x20\156\157\x74\x20\x61\x6c\x6c\157\x77\145\144\56\x20\120\141\x67\x65\40\x63\141\156\x6e\157\x74\x20\x62\x65\40\143\x61\x63\x68\x65\144\56", ["\162\x65\161\x75\145\x73\x74\x5f\x6d\145\164\150\x6f\144" => $this->ciyocmkwssocskiy()]); return false; ciykoyeioqgyaeqo: if ($this->cskwmweqysskwckg()) { goto mqicocmqegwukkwg; } $this->lastError = []; return true; mqicocmqegwukkwg: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\163\x75\143\x63\x65\163\163"]) { goto qgeugwymkkiacwoc; } $this->yauwooaeicgosquo("\x4e\x6f\40\x63\157\156\146\151\147\x20\146\x69\154\145\x20\146\157\x75\156\x64", ["\x63\x6f\x6e\x66\x69\x67\137\x70\x61\x74\150" => $uiewakwqscemywuo["\160\141\x74\x68"]]); return false; qgeugwymkkiacwoc: if (!($this->cskwmweqysskwckg("\x71\x75\x65\162\x79\x5f\163\164\162\x69\156\x67") && !$this->koguieumooaesyww())) { goto emmsycooskoqmgeg; } $this->yauwooaeicgosquo("\x51\165\x65\162\171\x20\x73\164\162\x69\x6e\147\40\125\122\114\40\x69\x73\40\x65\170\143\x6c\x75\x64\x65\x64\56", $_GET); return false; emmsycooskoqmgeg: if (!($this->cskwmweqysskwckg("\x73\x73\x6c") & !$this->eqwgocqwoyyykwke())) { goto ouamogymawucwswu; } $this->yauwooaeicgosquo("\123\123\x4c\40\x63\141\x63\150\145\40\x6e\x6f\164\40\141\x70\160\x6c\x69\x65\144\40\164\157\40\x70\x61\147\145\x2e"); return false; ouamogymawucwswu: if (!($this->cskwmweqysskwckg("\165\162\151") && !$this->qweiomkkuikwugks())) { goto mugqyyeayeyggqqk; } $this->yauwooaeicgosquo("\x50\141\147\145\x20\x69\x73\x20\x65\x78\143\x6c\165\x64\x65\144\56"); return false; mugqyyeayeyggqqk: if (!($this->cskwmweqysskwckg("\162\145\x6a\x65\143\164\145\x64\x5f\x63\157\157\153\x69\x65") && $this->cokqaygwwygweuyk())) { goto acsqgiuageaasiyy; } $this->yauwooaeicgosquo("\105\x78\x63\x6c\165\144\145\x64\40\x63\x6f\157\x6b\151\x65\x20\146\157\x75\x6e\144\56", ["\x65\170\x63\154\x75\144\x65\144\137\x63\x6f\157\153\151\x65\x73" => $this->cokqaygwwygweuyk()]); return false; acsqgiuageaasiyy: if (!($this->cskwmweqysskwckg("\x6d\141\x6e\x64\x61\164\x6f\x72\171\137\143\x6f\x6f\x6b\151\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto oomguqikqokqwgku; } $this->yauwooaeicgosquo("\x4d\x69\x73\x73\151\156\147\x20\155\141\156\x64\141\x74\x6f\x72\171\x20\x63\x6f\157\x6b\x69\145\72\40\160\x61\x67\145\x20\x6e\x6f\164\40\160\162\x6f\x63\x65\x73\163\x65\144\x2e", ["\x6d\x69\163\x73\x69\156\x67\137\x63\x6f\x6f\x6b\x69\145\x73" => $this->qgymyeqwqaiwmmea()]); return false; oomguqikqokqwgku: if (!($this->cskwmweqysskwckg("\x75\163\145\162\137\141\x67\145\x6e\164") && !$this->mqiqsuksgyekwkii())) { goto samwkqgwouggsguc; } $this->yauwooaeicgosquo("\125\x73\x65\x72\x20\101\x67\145\156\164\x20\151\x73\x20\145\x78\143\x6c\x75\x64\x65\x64\56", ["\x75\x73\145\162\137\x61\x67\145\156\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\137\125\123\x45\122\137\x41\x47\105\x4e\x54")]); return false; samwkqgwouggsguc: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto wyuemgggaqogsmsq; } $this->yauwooaeicgosquo("\102\x75\146\x66\x65\162\x20\x63\x6f\156\164\145\156\x74\x20\x75\x6e\x64\x65\162\40\x32\65\65\x20\x63\x68\x61\x72\141\x63\164\x65\162\163\x2e"); return false; wyuemgggaqogsmsq: if (!(http_response_code() !== 200)) { goto guykyqecgswcsmws; } $this->yauwooaeicgosquo("\120\141\x67\145\40\x69\x73\x20\156\157\164\x20\141\40\62\x30\60\x20\x48\x54\x54\120\40\x72\x65\163\x70\x6f\156\x73\145\x20\x61\x6e\144\x20\x63\141\x6e\156\x6f\x74\x20\142\145\40\x63\x61\x63\150\145\x64\56"); return false; guykyqecgswcsmws: if (!($this->cskwmweqysskwckg("\x64\157\x6e\157\164\157\160\164\151\155\151\x7a\145\160\141\x67\x65") && $this->cowcgqokiosgaqic())) { goto kkumywowcoycymeo; } $this->yauwooaeicgosquo("\104\x4f\116\x54\117\120\124\111\115\111\132\105\x44\x50\x41\107\x45\40\151\163\40\x64\x65\146\x69\x6e\x65\x64\x2e\40\120\141\147\145\x20\143\141\x6e\156\x6f\164\40\142\145\x20\143\141\143\150\x65\x64\x2e"); return false; kkumywowcoycymeo: if (!($this->cskwmweqysskwckg("\x77\x70\x5f\64\60\x34") && $this->kmmyuiwaogukwqqi())) { goto miweggwqeiaeweia; } $this->yauwooaeicgosquo("\x57\120\x20\x34\x30\x34\40\x70\x61\x67\x65\40\x69\x73\40\145\170\143\154\x75\x64\145\x64\56"); return false; miweggwqeiaeweia: if (!($this->cskwmweqysskwckg("\163\x65\141\162\143\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto kqqiegkuqagcqsya; } $this->yauwooaeicgosquo("\123\x65\x61\x72\143\150\40\x70\141\147\x65\x20\x69\163\x20\145\170\x63\x6c\165\x64\145\x64\x2e"); return false; kqqiegkuqagcqsya: if (!$this->cskwmweqysskwckg("\151\163\137\x68\x74\x6d\154")) { goto ogsaaqsaogcqiouy; } if (!($this->cmaecekuqkwmemms("\122\x45\x53\124\x5f\x52\x45\x51\125\x45\123\x54") || $this->gaiygescoqgyusaa())) { goto ousiuuwgwkiyikyq; } unset($this->tests["\151\x73\137\150\x74\155\154"]); ousiuuwgwkiyikyq: ogsaaqsaogcqiouy: if (!($this->cskwmweqysskwckg("\x69\x73\x5f\150\164\155\x6c") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto iwekmyyccgiyuecc; } $this->yauwooaeicgosquo("\x4e\x6f\x20\x63\154\x6f\x73\x69\x6e\x67\40\x3c\x2f\150\164\x6d\154\76\40\167\141\x73\x20\x66\157\165\156\x64\56"); return false; iwekmyyccgiyuecc: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\x70\x72\137\157\160\164\151\155\x69\x7a\x61\164\151\x6f\156\137\141\154\x6c\x6f\167\x5f\x74\x6f\137\163\x74\x61\162\x74\137\142\x75\146\146\145\162\x5f\160\162\157\143\x65\x73\x73", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto ikqqskkqqwmwssoo; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto aomysykcgikegiau; ikqqskkqqwmwssoo: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); aomysykcgikegiau: return apply_filters("\x70\x72\137\x6f\160\164\151\155\x69\x7a\141\164\151\157\156\137\x68\x61\163\x5f{$ymqmyyeuycgmigyo}\137\164\x65\163\164", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\x2f\74\x5c\x73\52\134\57\134\x73\52\150\x74\x6d\x6c\x5c\163\x2a\x3e\x2f\x69", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\x2f\50\77\72\x2e\x2b\57\x29\77" . $wp_rewrite->feed_base . "\x28\77\x3a\x2f\50\x3f\x3a\x2e\53\57\77\x29\x3f\51\x3f\x24"; return (bool) preg_match("\43\x5e\x28{$uckmmkmoeikwsiqg}\51\44\43\x69", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\x64\x65\166\137\x6d\x6f\144\145"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cwwmimggaaecmucw; } return $this->eecucukcqkqysiau(__FUNCTION__); cwwmimggaaecmucw: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto awoaooyoeoyeeqee; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); awoaooyoeoyeeqee: $ucasskoyoewwmmii = ["\x72\x6f\142\157\164\163\56\164\170\164", "\x2e\x68\164\141\143\x63\x65\163\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto mqkmcysgoiaouiwm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); mqkmcysgoiaouiwm: ykomgumacooyomsk: } ogqmesokykywseys: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kosaqwikueyksqmw; } return $this->eecucukcqkqysiau(__FUNCTION__); kosaqwikueyksqmw: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto iikiiioqiyegyaak; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto gicyayswqyuoekcq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gicyayswqyuoekcq: iikiiioqiyegyaak: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uiosisocuwokwkie; } return $this->eecucukcqkqysiau(__FUNCTION__); uiosisocuwokwkie: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto cuumeogeomowqisc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cuumeogeomowqisc: if (!(strtolower($iyiwooigkweeewey) === "\57\x69\x6e\x64\x65\x78\x2e\x70\150\160")) { goto gcckqucukawcasgk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gcckqucukawcasgk: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\150\x70" => 1, "\x78\x6d\x6c" => 1, "\x78\163\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\117\111\x4e\107\x5f\x41\x4a\101\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\x50\x53")), ["\x6f\x6e", "\x31"]) || "\x34\x34\63" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\122\126\x45\x52\137\120\x4f\x52\x54"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\x70\137\x63\x75\163\x74\157\x6d\151\x7a\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\105\124" => 1, "\x48\105\101\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qmkaeeomgkwggoyo; } return $this->eecucukcqkqysiau(__FUNCTION__); qmkaeeomgkwggoyo: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto csammceowmqwaamq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); csammceowmqwaamq: $yccgiaiouekkouay = ["\x73" => 1, "\154\141\156\147" => 1, "\x70\x65\x72\155\141\x6c\x69\x6e\x6b\137\156\141\155\x65" => 1, "\154\x70\55\166\141\x72\x69\141\x74\151\x6f\156\x2d\151\144" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto ocaguquugeamqckq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ocaguquugeamqckq: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\x65\137\161\x75\145\x72\x79\x5f\163\x74\162\x69\156\x67\163"); if ($yccgiaiouekkouay) { goto eekcoeikaeaaeyii; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); eekcoeikaeaaeyii: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cogywoqcqummsyus; } return $this->eecucukcqkqysiau(__FUNCTION__); cogywoqcqummsyus: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto gmwykkouysyaqwqm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gmwykkouysyaqwqm: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto ugqwuugsweqgmywk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ugqwuugsweqgmywk: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto mkwkkmkgiqiamacc; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; mkwkkmkgiqiamacc: sockeswygwcskeuq: } uaukmuiwskcemcsw: if (empty($eiocugauqgouiuyi)) { goto uaqackioaiqwcocy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); uaqackioaiqwcocy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cscusseysqygsoiy; } return $this->eecucukcqkqysiau(__FUNCTION__); cscusseysqygsoiy: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto isgwkwacoyimiauk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); isgwkwacoyimiauk: $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\x63\141\143\x68\145\137\155\x61\156\144\x61\x74\157\162\x79\137\143\157\x6f\153\151\145\163"))); if ($this->wemyikwikgwqwuoc()) { goto mggeqkcksyaymcsa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); mggeqkcksyaymcsa: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto eeyyskqsmquyquqw; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); eeyyskqsmquyquqw: cgyakcqgugqgkqiw: } uegouoiuyoqkcscg: if (!empty($yiycakoikkyuokgk)) { goto ewscugeuicukkycc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ewscugeuicukkycc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\160\162\x5f\157\160\164\151\155\x69\172\141\x74\x69\x6f\156\137\157\166\x65\162\162\151\144\145\137\144\x6f\156\164\x5f\x6f\160\164\x69\x6d\x69\x7a\145", $this->cmaecekuqkwmemms("\120\x52\x5f\x4f\x50\124\111\115\111\132\101\124\111\117\116\137\x44\117\116\124\137\117\120\x54\x49\x4d\111\132\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\151\163\137\x34\60\x34") && is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\151\x73\137\x73\145\x61\x72\143\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\162\x5f\157\x70\x74\151\155\151\172\x61\x74\x69\x6f\x6e\137\157\x70\164\151\x6d\151\x7a\x65\137\163\x65\x61\162\x63\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\143\141\x63\x68\145\x5f\x73\163\x6c"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kqswcsysqawkcgye; } return $this->eecucukcqkqysiau(__FUNCTION__); kqswcsysqawkcgye: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto wusciwkkckmqigms; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wusciwkkckmqigms: if (!$this->aceaeommyuooiqge()->get("\155\x6f\142\x69\x6c\x65\137\x63\x61\x63\150\145")) { goto iiiccouaaqsyikae; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); iiiccouaaqsyikae: $wayquiskgeuoqamk = "\62\56\60\134\40\x4d\x4d\x50\174\x32\x34\60\x78\63\x32\60\x7c\x34\60\x30\130\62\64\x30\x7c\101\x76\x61\x6e\164\107\157\174\102\154\x61\x63\x6b\102\145\x72\x72\171\174\102\154\x61\172\x65\162\x7c\103\145\x6c\154\x70\150\157\x6e\x65\174\104\x61\x6e\147\145\162\x7c\104\157\103\157\115\x6f\x7c\105\154\141\151\156\145\57\63\x2e\x30\x7c\x45\x75\144\157\x72\x61\x57\145\x62\x7c\x47\157\157\x67\x6c\145\x62\157\x74\x2d\x4d\157\142\x69\154\145\174\x68\151\x70\x74\x6f\x70\174\111\x45\x4d\157\x62\x69\x6c\x65\174\113\x59\117\x43\x45\122\x41\x2f\x57\130\63\x31\x30\113\174\114\x47\x2f\x55\x39\x39\x30\174\x4d\x49\x44\x50\55\62\56\174\115\115\105\106\x32\60\174\115\117\x54\55\126\x7c\x4e\145\164\106\162\x6f\x6e\x74\174\x4e\x65\x77\164\174\x4e\151\x6e\x74\x65\156\144\x6f\x5c\x20\x57\151\x69\174\x4e\x69\164\x72\157\x7c\116\157\x6b\151\x61\x7c\x4f\160\x65\162\141\134\x20\115\151\156\151\174\120\141\x6c\x6d\x7c\120\x6c\x61\x79\x53\x74\141\164\151\157\156\x5c\x20\x50\x6f\162\x74\x61\142\154\145\174\160\x6f\x72\164\141\154\x6d\x6d\155\174\x50\162\157\170\x69\156\145\164\x7c\120\x72\157\x78\151\116\145\164\x7c\123\x48\x41\122\120\x2d\124\x51\55\107\130\61\60\174\x53\x48\x47\55\x69\71\x30\x30\174\x53\155\x61\x6c\154\174\x53\157\x6e\171\x45\162\x69\143\x73\163\157\156\x7c\x53\171\x6d\x62\151\x61\156\x5c\x20\117\123\174\x53\x79\155\142\151\x61\x6e\117\x53\x7c\124\x53\x32\x31\x69\55\61\x30\x7c\x55\120\x2e\102\162\x6f\x77\x73\x65\162\x7c\x55\120\56\114\151\x6e\153\x7c\x77\145\x62\x4f\x53\x7c\x57\151\156\x64\157\x77\163\134\40\103\x45\174\x57\151\x6e\127\x41\x50\x7c\x59\141\x68\x6f\x6f\x53\x65\145\153\x65\162\57\x4d\x31\101\61\55\122\x32\104\62\x7c\151\120\150\157\x6e\x65\x7c\151\x50\157\x64\174\x41\x6e\x64\162\157\x69\x64\x7c\102\x6c\141\x63\153\102\x65\162\162\x79\x39\x35\63\x30\x7c\x4c\x47\x2d\124\125\x39\x31\x35\x5c\x20\117\142\x69\x67\157\174\x4c\107\105\x5c\40\126\x58\174\167\145\142\117\123\174\x4e\157\x6b\x69\x61\x35\x38\x30\x30"; if (!preg_match("\x23\x5e\x2e\x2a\50{$wayquiskgeuoqamk}\x29\56\x2a\x23\x69", $uowwycywwssskuys)) { goto ukkcmocamwgiqayu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ukkcmocamwgiqayu: $wayquiskgeuoqamk = "\167\x33\143\134\40\x7c\x77\x33\x63\x2d\174\x61\x63\163\55\174\x61\154\x61\x76\x7c\x61\x6c\x63\x61\x7c\141\155\x6f\151\x7c\141\165\144\151\x7c\141\x76\x61\x6e\x7c\142\145\x6e\x71\174\x62\x69\x72\144\x7c\x62\154\x61\143\x7c\x62\154\141\172\x7c\x62\x72\x65\x77\174\143\145\x6c\x6c\x7c\143\154\144\143\174\143\x6d\144\55\174\144\x61\x6e\x67\174\x64\157\x63\x6f\174\x65\x72\151\x63\x7c\x68\x69\160\164\x7c\x68\x74\143\x5f\174\x69\156\156\157\x7c\x69\160\141\161\x7c\x69\x70\x6f\144\x7c\152\x69\x67\x73\x7c\x6b\x64\144\x69\x7c\x6b\x65\x6a\x69\174\x6c\x65\x6e\x6f\174\154\x67\55\143\174\x6c\147\55\144\174\x6c\147\x2d\x67\x7c\154\147\145\x2d\x7c\x6c\x67\x2f\165\174\155\x61\x75\151\174\155\x61\x78\x6f\x7c\x6d\x69\x64\x70\174\155\x69\164\x73\x7c\155\x6d\x65\x66\174\155\157\x62\x69\174\155\157\164\x2d\x7c\x6d\x6f\164\x6f\x7c\155\x77\142\x70\x7c\156\145\x63\x2d\174\156\145\x77\x74\x7c\x6e\157\x6b\x69\x7c\160\141\154\155\174\x70\x61\x6e\141\x7c\160\x61\156\164\174\x70\x68\x69\x6c\x7c\x70\x6c\141\x79\174\x70\x6f\162\x74\x7c\160\x72\157\x78\x7c\161\167\x61\160\x7c\163\x61\147\145\x7c\x73\141\155\163\174\x73\x61\x6e\x79\174\163\x63\x68\55\x7c\x73\145\143\55\x7c\x73\x65\156\144\174\x73\145\x72\151\x7c\163\147\150\55\x7c\163\x68\x61\162\174\x73\151\145\x2d\x7c\163\151\145\x6d\174\x73\x6d\141\x6c\x7c\163\155\x61\x72\x7c\x73\157\156\x79\x7c\x73\160\x68\x2d\174\163\171\155\x62\174\164\x2d\155\x6f\x7c\x74\145\x6c\x69\x7c\164\x69\155\x2d\x7c\x74\x6f\163\x68\x7c\164\163\155\55\x7c\165\160\x67\61\174\165\x70\163\151\x7c\166\153\55\x76\x7c\x76\x6f\x64\x61\x7c\x77\141\160\x2d\174\167\x61\x70\x61\x7c\x77\141\x70\151\x7c\167\141\x70\160\x7c\167\x61\x70\162\x7c\167\x65\142\x63\x7c\x77\151\156\167\x7c\167\x69\x6e\x77\x7c\x78\x64\141\x5c\x20\174\170\x64\141\55"; if (!preg_match("\x23\136\50{$wayquiskgeuoqamk}\x29\x2e\52\43\151", $uowwycywwssskuys)) { goto mwysseaekcsiesmm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mwysseaekcsiesmm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto amgsueumgaguceaa; } return $this->eecucukcqkqysiau(__FUNCTION__); amgsueumgaguceaa: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto gygwewcqsmwqismo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gygwewcqsmwqismo: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\x61\143\x68\x65\137\162\145\x6a\145\143\x74\x5f\x75\141"); if ($mqsuiayuwmwqaqwm) { goto uougwgeyiokewkkm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); uougwgeyiokewkkm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\43{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gommacygsykyussk; } return $this->eecucukcqkqysiau(__FUNCTION__); gommacygsykyussk: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\141\143\150\145\x5f\162\x65\x6a\x65\143\164\x5f\x75\162\151"); if ($escsaeeosigewsme) { goto ukqocwewouckikso; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ukqocwewouckikso: $yciaosuiyeieceug = !preg_match("\x23\x5e\50{$escsaeeosigewsme}\x29\x24\x23\151", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\120\137\125\123\105\x52\137\x41\x47\x45\116\x54"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ucqmumuygcywwqma; } return $this->eecucukcqkqysiau(__FUNCTION__); ucqmumuygcywwqma: $yygmoeguaqyumuui = [ "\x48\124\x54\120\x5f\103\106\137\x43\x4f\116\116\105\x43\124\x49\116\x47\x5f\x49\120", "\x48\124\x54\x50\x5f\103\114\x49\105\116\x54\x5f\x49\x50", "\110\x54\124\120\137\x58\137\x46\x4f\122\x57\x41\122\104\105\x44\137\x46\x4f\x52", "\x48\x54\124\120\x5f\x58\137\106\x4f\x52\x57\x41\122\104\105\104", "\110\x54\124\120\x5f\x58\x5f\103\114\x55\x53\124\x45\x52\x5f\103\x4c\111\x45\116\124\137\x49\x50", "\x48\124\x54\x50\137\x58\137\x52\105\101\114\x5f\x49\120", "\x48\x54\x54\x50\x5f\106\x4f\x52\127\x41\x52\x44\x45\104\x5f\x46\117\122", "\110\x54\x54\x50\137\x46\117\122\127\x41\x52\104\105\x44", "\x52\x45\x4d\117\124\105\137\101\104\x44\122", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto kocqqoyymosmuksu; } $kucumcusyyckayas = explode("\54", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto iuuuususuuuaieem; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); iuuuususuuuaieem: kocqqoyymosmuksu: uimeeckqksqeekqq: } uykousayyomcaeaa: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\x30\56\60\56\x30\56\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uqokiksoqcwwqgio; } return $this->eecucukcqkqysiau(__FUNCTION__); uqokiksoqcwwqgio: $yywgiquyoymymqwk = [ "\x32\60\x38\56\67\60\56\x32\64\67\x2e\x31\65\x37" => '', "\61\x37\x32\x2e\62\x35\x35\x2e\64\70\x2e\61\63\60" => '', "\x31\x37\62\x2e\62\65\x35\x2e\x34\70\56\x31\x33\x31" => '', "\61\67\x32\x2e\x32\65\65\56\64\70\56\x31\63\62" => '', "\61\x37\x32\56\62\x35\65\x2e\x34\x38\56\61\63\63" => '', "\x31\x37\62\56\62\65\65\56\64\70\x2e\61\x33\x34" => '', "\x31\67\62\x2e\x32\65\65\56\x34\x38\56\61\63\x35" => '', "\61\67\62\x2e\62\65\65\x2e\64\70\56\x31\63\x36" => '', "\x31\x37\x32\x2e\62\65\65\56\64\x38\56\61\x33\67" => '', "\x31\x37\x32\56\62\65\65\x2e\64\70\x2e\x31\63\x38" => '', "\x31\x37\x32\x2e\x32\65\65\56\x34\x38\x2e\x31\x33\x39" => '', "\61\x37\62\56\x32\65\65\56\x34\x38\x2e\x31\x34\x30" => '', "\61\67\x32\56\62\x35\65\56\x34\70\x2e\x31\64\x31" => '', "\x31\67\62\56\62\65\65\x2e\64\70\56\61\64\x32" => '', "\61\x37\62\56\x32\65\x35\x2e\64\x38\x2e\x31\64\63" => '', "\61\x37\x32\x2e\x32\65\65\56\x34\70\x2e\61\64\64" => '', "\61\x37\x32\x2e\62\65\65\x2e\x34\x38\x2e\x31\64\x35" => '', "\61\67\62\56\62\65\x35\x2e\x34\x38\x2e\61\64\x36" => '', "\61\67\x32\x2e\x32\65\65\x2e\64\x38\56\61\x34\x37" => '', "\x35\x32\56\62\x32\71\56\61\x32\62\56\x32\64\60" => '', "\x31\x30\x34\x2e\x32\61\x34\x2e\x37\62\56\x31\x30\x31" => '', "\x31\x33\56\x36\x36\x2e\67\56\61\61" => '', "\61\x33\56\x38\65\x2e\x32\64\x2e\70\x33" => '', "\x31\x33\56\70\x35\x2e\62\x34\x2e\71\x30" => '', "\61\x33\x2e\x38\x35\x2e\70\62\x2e\62\x36" => '', "\64\x30\x2e\67\x34\56\62\x34\x32\x2e\62\65\63" => '', "\x34\x30\56\67\x34\56\62\x34\63\56\61\x33" => '', "\64\x30\56\67\64\56\x32\64\x33\56\61\67\66" => '', "\x31\60\64\56\x32\x31\x34\x2e\x34\70\56\62\x34\x37" => '', "\x31\65\x37\x2e\65\65\56\61\70\x39\56\61\70\71" => '', "\x31\x30\x34\x2e\x32\x31\x34\x2e\61\61\60\x2e\x31\x33\65" => '', "\67\60\56\63\x37\56\x38\63\56\x32\64\x30" => '', "\x36\x35\56\x35\x32\56\x33\x36\56\62\x35\60" => '', "\61\63\x2e\67\x38\56\x32\x31\66\x2e\65\66" => '', "\65\62\x2e\x31\66\x32\x2e\x32\61\62\x2e\x31\x36\x33" => '', "\x32\x33\x2e\x39\x36\x2e\63\64\x2e\x31\x30\x35" => '', "\x36\65\x2e\65\62\56\x31\61\x33\56\62\63\66" => '', "\61\x37\62\56\x32\65\65\x2e\x36\61\x2e\63\64" => '', "\x31\x37\62\x2e\62\x35\65\x2e\66\x31\56\63\x35" => '', "\61\x37\62\x2e\62\65\65\56\x36\x31\x2e\63\x36" => '', "\61\67\62\x2e\62\65\65\x2e\66\61\56\x33\x37" => '', "\61\67\62\56\x32\65\x35\56\66\x31\56\63\x38" => '', "\61\x37\62\56\62\x35\65\56\66\x31\56\63\x39" => '', "\61\x37\x32\56\62\65\x35\x2e\66\x31\56\x34\60" => '', "\x35\62\56\62\63\67\56\x32\63\x35\x2e\61\70\65" => '', "\65\62\x2e\62\x33\x37\x2e\x32\65\x30\x2e\67\63" => '', "\x35\x32\x2e\x32\63\67\x2e\62\x33\66\x2e\x31\64\x35" => '', "\x31\60\x34\56\x34\x31\56\x32\x2e\61\x39" => '', "\x31\71\x31\56\62\63\65\x2e\71\x38\x2e\x31\x36\x34" => '', "\61\x39\61\x2e\62\x33\x35\56\x39\71\56\x32\x32\x31" => '', "\61\71\x31\56\62\x33\x32\56\x31\71\64\56\65\61" => '', "\61\x30\64\56\62\x31\x31\x2e\x31\64\x33\56\x38" => '', "\61\x30\x34\x2e\62\x31\x31\x2e\x31\x36\65\x2e\65\x33" => '', "\x35\62\x2e\x31\67\x32\x2e\61\x34\56\x38\x37" => '', "\64\x30\56\70\63\x2e\x38\71\56\62\61\x34" => '', "\x35\62\56\x31\67\65\56\65\67\x2e\x38\x31" => '', "\x32\x30\x2e\x31\70\x38\x2e\66\x33\x2e\61\x35\61" => '', "\x32\60\x2e\x35\62\x2e\x33\x36\56\64\71" => '', "\x35\62\56\x32\64\66\56\61\66\x35\56\61\x35\x33" => '', "\65\x31\56\61\x34\64\56\x31\60\x32\56\x32\63\x33" => '', "\61\x33\x2e\x37\66\x2e\x39\67\56\x32\x32\64" => '', "\x31\x30\x32\x2e\61\x33\63\x2e\61\66\71\x2e\x36\x36" => '', "\x35\62\56\62\63\61\56\61\71\71\56\x31\67\60" => '', "\x31\63\56\x35\x33\56\x31\x36\62\56\67" => '', "\x34\60\56\61\62\x33\x2e\62\61\x38\x2e\x39\x34" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto qukocuwgakemmyga; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qukocuwgakemmyga: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\x50\x5f\x55\123\105\x52\137\x41\107\x45\116\124"); if ($uowwycywwssskuys) { goto sioekkmekwygemyc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); sioekkmekwygemyc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\43\120\x69\156\147\x64\157\155\120\141\147\x65\x53\160\x65\145\144\174\x44\x61\162\145\x42\x6f\x6f\x73\x74\x7c\x47\x6f\x6f\147\x6c\145\174\x50\x54\123\x54\x7c\103\150\162\157\155\x65\x2d\x4c\151\x67\x68\164\x68\x6f\165\163\x65\174\x57\120\40\x52\x6f\143\x6b\x65\x74\43\x69", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\x51\125\x45\x53\124\137\x55\122\x49", ''); if (!$iyiwooigkweeewey) { goto yiowgigkkwsoqcci; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\x2f"); yiowgigkkwsoqcci: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto ieqesiiageaauiuw; } return ''; ieqesiiageaauiuw: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto gamqcwuwkikwqoay; } return $magawcseesgowoeo; gamqcwuwkikwqoay: return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto mscyggqcesgqqksu; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); mscyggqcesgqqksu: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\125\x45\123\x54\x5f\x4d\105\x54\110\117\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto iesekaeqeomeuaui; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\141\x63\150\x65\x5f\x69\147\x6e\x6f\x72\145\x64\x5f\x70\x61\162\141\155\x65\164\x65\x72\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto oyeyomcgkmgymogq; } ksort($eyagkkkqkwcuygso); oyeyomcgkmgymogq: iesekaeqeomeuaui: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; mogkoocsoeuyoqqa: if (!(strpos($euueacigmgoqkimu, "\56\x2f") !== false || strpos($euueacigmgoqkimu, "\x2f\x2e") !== false || "\56" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu)) { goto wsesqmcqoiyyqkqi; } if (strpos($euueacigmgoqkimu, "\56\x2e\57") === 0) { goto esikeyqyuikmaiek; } if (strpos($euueacigmgoqkimu, "\x2e\x2f") === 0) { goto emqswoaawgeyosmi; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\57") === 0) { goto yuimwyoywaiiqacs; } if ("\x2f\x2e" === $euueacigmgoqkimu) { goto yoqakewookqoqacm; } if (strpos($euueacigmgoqkimu, "\57\56\x2e\x2f") === 0) { goto uckewycoogsogwiy; } if ("\x2f\56\x2e" === $euueacigmgoqkimu) { goto yykqaowwsqgqysmq; } if ("\56" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu) { goto oeocukauoyosicso; } if (strpos($euueacigmgoqkimu, "\57", 1) !== false) { goto wkwamkgkwykeqkec; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto oimkeqocuguqqsqk; wkwamkgkwykeqkec: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\x2f", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); oimkeqocuguqqsqk: goto suqceasgacskcmkc; oeocukauoyosicso: $euueacigmgoqkimu = ''; suqceasgacskcmkc: goto kwiggogcgciwuwqk; yykqaowwsqgqysmq: $euueacigmgoqkimu = "\57"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); kwiggogcgciwuwqk: goto ikuuiauwouuqawuw; uckewycoogsogwiy: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); ikuuiauwouuqawuw: goto gswcoeiisamakwii; yoqakewookqoqacm: $euueacigmgoqkimu = "\x2f"; gswcoeiisamakwii: goto ocywegekakimmwcq; yuimwyoywaiiqacs: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); ocywegekakimmwcq: goto iwsmmkqaoksmocok; emqswoaawgeyosmi: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); iwsmmkqaoksmocok: goto okkmcocqokkskasy; esikeyqyuikmaiek: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); okkmcocqokkskasy: goto mogkoocsoeuyoqqa; wsesqmcqoiyyqkqi: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto qiiigwkqeoewsuwm; } qiiigwkqeoewsuwm: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto esaqcqqwuussiiwo; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); esaqcqqwuussiiwo: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto ikqeeaysmqgcgawq; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); ikqeeaysmqgcgawq: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\162\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\155\145\x73\163\x61\147\x65" => $uamcoiueqaamsqma, "\x63\x6f\156\164\x65\x78\164" => $icwicymcioeyeyek]; } }
