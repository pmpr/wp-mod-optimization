<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ae3139832e9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Buffer; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\x72\151" => 1, "\x61\x6a\141\x78" => 1, "\x63\x72\x6f\156" => 1, "\162\145\163\x74" => 1, "\x77\160\137\x34\60\64" => 1, "\x73\x65\x61\x72\x63\150" => 1, "\161\165\x65\162\171\x5f\163\x74\162\x69\156\x67" => 1, "\151\x67\156\157\162\145\144\x5f\165\162\154\163" => 1, "\144\157\156\157\x74\x63\141\x63\150\145\x70\x61\x67\x65" => 1, "\x72\145\x6a\x65\x63\x74\145\144\x5f\143\157\157\x6b\x69\x65" => 1, "\155\x61\156\x64\141\164\x6f\x72\171\x5f\x63\157\157\x6b\x69\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; $ywmkwiwkosakssii = wp_parse_args($ywmkwiwkosakssii, ["\147\x65\164" => is_array($_GET) && $_GET ? $_GET : [], "\x70\157\163\164" => is_array($_POST) && $_POST ? $_POST : [], "\x74\145\163\x74" => [], "\143\157\x6f\153\151\x65\163" => is_array($_COOKIE) && $_COOKIE ? $_COOKIE : []]); if ($ywmkwiwkosakssii["\164\145\x73\164"]) { goto igooksugieceoege; } $this->okkwqquawsoemamu((array) $ywmkwiwkosakssii["\x74\145\163\164"]); igooksugieceoege: $this->get = $ywmkwiwkosakssii["\147\x65\164"] && is_array($ywmkwiwkosakssii["\x67\x65\164"]) ? $ywmkwiwkosakssii["\147\145\x74"] : []; $this->post = $ywmkwiwkosakssii["\x70\x6f\163\x74"] && is_array($ywmkwiwkosakssii["\x70\x6f\163\x74"]) ? $ywmkwiwkosakssii["\160\157\x73\x74"] : []; $this->cookies = $ywmkwiwkosakssii["\143\157\157\x6b\151\x65\163"] && is_array($ywmkwiwkosakssii["\x63\157\x6f\x6b\x69\145\x73"]) ? $ywmkwiwkosakssii["\x63\157\x6f\x6b\151\x65\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto omqiayeucoioqoao; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\x70\137\143\165\163\164\157\155\151\x7a\145" => '']); omqiayeucoioqoao: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { $uamcoiueqaamsqma = ''; $mgkceomocowocqyo = []; $this->lastError = []; if ($this->kgkoeoeseyuugaao()) { goto ciykoyeioqgyaeqo; } if ($this->gymgcceeqssmesiu()) { goto wcugqegqsuuuwqao; } if ($this->goecwaaykqoaaagg()) { goto qoqskyuuwueqkquk; } if ($this->sgsscqasgeyeicoe()) { goto msemumccgceyugmg; } if (!$this->gooeyogikcusgwuu()) { goto eeauyscekuckoues; } if (!$this->cskwmweqysskwckg()) { goto mwsmsguqqkcwiiuk; } $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if (!isset($uiewakwqscemywuo["\163\x75\x63\143\x65\163\x73"]) || !$uiewakwqscemywuo["\x73\165\143\143\145\x73\163"]) { goto qmuwoecuacmkwgem; } if ($this->cskwmweqysskwckg("\x71\x75\x65\162\171\137\163\x74\162\151\x6e\x67") && !$this->koguieumooaesyww()) { goto wkeuuycukmuqiaom; } if ($this->cskwmweqysskwckg("\162\145\152\145\143\164\145\x64\137\143\x6f\157\x6b\x69\x65") && $this->cokqaygwwygweuyk()) { goto ueigkucgaucgeimc; } if ($this->cskwmweqysskwckg("\151\x67\x6e\x6f\x72\145\144\x5f\165\x72\154\163") && $this->sywgeyscigqsokyg()) { goto wgewmqieuamsoayy; } if (!($this->cskwmweqysskwckg("\162\x65\163\x74") && $this->okimameeykkqkuww())) { goto ugqaaewwmkocwwgy; } $uamcoiueqaamsqma = "\x49\147\156\157\162\145\144\40\165\162\154\x20\x72\x65\163\164\40\x72\x65\x71\165\145\x73\x74\x73\x2e"; ugqaaewwmkocwwgy: goto kqgcyoscsusgoaqi; wgewmqieuamsoayy: $uamcoiueqaamsqma = "\x49\x67\156\x6f\x72\x65\144\40\165\162\154\x20\146\157\165\156\x64\x2e"; kqgcyoscsusgoaqi: goto sggawugoykqcmsug; ueigkucgaucgeimc: $uamcoiueqaamsqma = "\x45\x78\143\x6c\x75\144\145\144\40\143\157\157\153\151\x65\40\x66\157\165\x6e\x64\56"; $mgkceomocowocqyo = ["\x65\x78\143\x6c\x75\x64\145\x64\137\x63\x6f\x6f\153\151\x65\x73" => $this->cokqaygwwygweuyk()]; sggawugoykqcmsug: goto wakmayaoqoskekqy; wkeuuycukmuqiaom: $uamcoiueqaamsqma = "\x51\x75\145\162\171\40\x73\164\162\151\156\147\x20\x55\122\114\x20\151\x73\x20\x65\x78\x63\154\x75\144\x65\x64\x2e"; wakmayaoqoskekqy: goto owmuceyswmgueasi; qmuwoecuacmkwgem: $uamcoiueqaamsqma = "\116\157\x20\143\157\156\146\x69\x67\40\x66\x69\x6c\145\40\146\157\x75\156\144\x2e"; $mgkceomocowocqyo = ["\143\157\156\x66\x69\x67\137\x70\141\x74\x68" => $uiewakwqscemywuo["\160\141\164\150"]]; owmuceyswmgueasi: mwsmsguqqkcwiiuk: goto eogwckcymuugikuy; eeauyscekuckoues: $uamcoiueqaamsqma = "\x52\x65\x71\165\x65\163\x74\40\155\x65\x74\150\x6f\144\40\151\x73\x20\156\x6f\x74\x20\x61\x6c\154\157\x77\145\144\x2e\x20\120\x61\147\145\40\x63\141\156\x6e\157\x74\40\x62\145\40\143\x61\x63\x68\145\x64\56"; $mgkceomocowocqyo = ["\x72\x65\161\x75\x65\x73\164\x5f\155\x65\x74\x68\157\144" => $this->ciyocmkwssocskiy()]; eogwckcymuugikuy: goto wagqgeqymeqoeuyi; msemumccgceyugmg: $uamcoiueqaamsqma = "\x43\165\x73\x74\157\x6d\151\172\x65\162\x20\160\162\x65\x76\151\x65\167\x20\x69\163\40\145\x78\x63\x6c\x75\x64\145\144\56"; wagqgeqymeqoeuyi: goto iwsuawwqomaowuii; qoqskyuuwueqkquk: $uamcoiueqaamsqma = "\101\144\155\151\156\x20\x6f\162\x20\101\112\101\x58\x20\x55\x52\114\x20\x69\163\x20\145\170\143\x6c\165\x64\x65\x64\56"; iwsuawwqomaowuii: goto asiqwuoswmigcaki; wcugqegqsuuuwqao: $uamcoiueqaamsqma = "\120\110\120\x2c\x20\130\x4d\x4c\x2c\40\x6f\162\x20\130\x53\114\40\146\x69\x6c\145\40\151\x73\x20\145\170\143\x6c\165\x64\145\x64\x2e"; asiqwuoswmigcaki: goto mqicocmqegwukkwg; ciykoyeioqgyaeqo: $uamcoiueqaamsqma = "\x52\x6f\142\x6f\164\163\x2e\x74\x78\x74\40\x6f\162\x20\56\150\x74\141\143\x63\x65\x73\x73\40\x66\x69\154\145\x20\151\x73\40\x65\170\x63\154\165\x64\x65\144\56"; mqicocmqegwukkwg: $yciaosuiyeieceug = true; if (!$uamcoiueqaamsqma) { goto qgeugwymkkiacwoc; } $this->log($uamcoiueqaamsqma, $mgkceomocowocqyo); $yciaosuiyeieceug = false; qgeugwymkkiacwoc: return $yciaosuiyeieceug; } public function ocysssyiuaueqiei($iqaosyayeiuaisqi = null) : bool { return (bool) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\157\x70\164\137\x61\x6c\154\157\167\x5f\x74\x6f\137\157\x70\164\151\155\151\x7a\x65"), false, $iqaosyayeiuaisqi); } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { $yciaosuiyeieceug = true; $this->lastError = []; if (strlen($moooemyaqewumiay) <= 255) { goto aomysykcgikegiau; } if (!$this->ocysssyiuaueqiei("\x6c\x65\x76\145\154\x2d\61")) { goto iwekmyyccgiyuecc; } if (http_response_code() !== 200) { goto ousiuuwgwkiyikyq; } if ($this->cskwmweqysskwckg("\x64\157\x6e\x6f\164\x63\x61\143\x68\145\160\x61\147\145") && $this->uykysuaiooyewmsc()) { goto miweggwqeiaeweia; } if ($this->cskwmweqysskwckg("\167\x70\x5f\64\60\64") && $this->kmmyuiwaogukwqqi()) { goto guykyqecgswcsmws; } if ($this->cskwmweqysskwckg("\x73\145\141\162\143\150") && $this->gouusicsisumuiei()) { goto samwkqgwouggsguc; } if ($this->cskwmweqysskwckg("\x61\x6a\x61\x78") && $this->mcgoysmkqsqooceq()) { goto acsqgiuageaasiyy; } if ($this->cskwmweqysskwckg("\143\x72\x6f\156") && $this->auqoeckqueqiiike()) { goto ouamogymawucwswu; } if (!($this->cskwmweqysskwckg("\x72\x65\x73\164") && $this->okimameeykkqkuww())) { goto emmsycooskoqmgeg; } $this->log("\x52\145\163\164\x20\x41\x50\x49\x20\x52\145\x71\165\145\163\x74\40\151\163\40\145\x78\x63\x6c\165\x64\x65\144\x2e"); $yciaosuiyeieceug = false; emmsycooskoqmgeg: goto mugqyyeayeyggqqk; ouamogymawucwswu: $this->log("\103\x72\x6f\156\40\122\x65\161\x75\x65\163\x74\x20\x69\x73\40\x65\170\x63\x6c\165\144\x65\x64\56"); $yciaosuiyeieceug = false; mugqyyeayeyggqqk: goto oomguqikqokqwgku; acsqgiuageaasiyy: $this->log("\x41\x6a\x61\x78\x20\122\145\161\165\x65\163\164\x20\x69\163\40\x65\x78\143\x6c\x75\144\145\144\x2e"); $yciaosuiyeieceug = false; oomguqikqokqwgku: goto wyuemgggaqogsmsq; samwkqgwouggsguc: $this->log("\x53\145\141\162\143\x68\x20\160\x61\147\x65\x20\151\x73\x20\x65\x78\143\154\165\x64\x65\144\56"); $yciaosuiyeieceug = false; wyuemgggaqogsmsq: goto kkumywowcoycymeo; guykyqecgswcsmws: $this->log("\127\120\40\64\x30\x34\40\x70\x61\147\x65\x20\x69\x73\x20\145\170\x63\154\165\144\x65\x64\x2e"); $yciaosuiyeieceug = false; kkumywowcoycymeo: goto kqqiegkuqagcqsya; miweggwqeiaeweia: $this->log("\x44\x4f\116\x4f\124\x43\x41\103\110\105\120\x41\x47\105\40\x69\163\x20\x64\145\x66\151\156\x65\144\56\40\x50\141\147\x65\x20\143\x61\x6e\x6e\x6f\x74\40\x62\x65\x20\143\141\x63\150\x65\x64\56"); $yciaosuiyeieceug = false; kqqiegkuqagcqsya: goto ogsaaqsaogcqiouy; ousiuuwgwkiyikyq: $this->log("\x50\x61\147\x65\40\151\x73\40\x6e\x6f\164\x20\x61\x20\62\x30\60\x20\110\124\124\120\x20\x72\145\x73\x70\x6f\x6e\163\x65\x20\141\156\144\40\x63\x61\156\x6e\x6f\x74\x20\x62\145\40\x63\141\x63\x68\145\x64\x2e"); $yciaosuiyeieceug = false; ogsaaqsaogcqiouy: goto ikqqskkqqwmwssoo; iwekmyyccgiyuecc: $this->log("\156\x6f\x74\x20\x61\x6c\154\157\167\40\164\x6f\x20\x6f\x70\x74\151\155\x69\x7a\x65\40\x74\x68\151\163\x20\x70\141\147\x65\56"); $yciaosuiyeieceug = false; ikqqskkqqwmwssoo: goto cwwmimggaaecmucw; aomysykcgikegiau: $this->log("\x42\x75\146\146\x65\162\x20\143\x6f\156\164\x65\x6e\164\40\165\156\144\x65\x72\40\x32\65\65\40\143\141\162\x61\143\x74\x65\x72\163\x2e\x3a\40{$moooemyaqewumiay}"); $yciaosuiyeieceug = false; cwwmimggaaecmucw: return $yciaosuiyeieceug; } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg($ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto awoaooyoeoyeeqee; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]); goto ogqmesokykywseys; awoaooyoeoyeeqee: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); ogqmesokykywseys: return $umuecysoywoumgwo; } public function okkwqquawsoemamu(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ykomgumacooyomsk; } return $this->eecucukcqkqysiau(__FUNCTION__); ykomgumacooyomsk: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto mqkmcysgoiaouiwm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mqkmcysgoiaouiwm: $ucasskoyoewwmmii = ["\x72\x6f\x62\157\x74\x73\56\164\170\164", "\56\150\x74\x61\x63\x63\145\163\163"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto iikiiioqiyegyaak; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); iikiiioqiyegyaak: gicyayswqyuoekcq: } kosaqwikueyksqmw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uiosisocuwokwkie; } return $this->eecucukcqkqysiau(__FUNCTION__); uiosisocuwokwkie: $iyiwooigkweeewey = $this->iqyukmiuoisswoei(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($iyiwooigkweeewey && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $iyiwooigkweeewey, $meyiiwcswqmuggyg))) { goto gcckqucukawcasgk; } if (!($meyiiwcswqmuggyg[0] === $iyiwooigkweeewey)) { goto cuumeogeomowqisc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cuumeogeomowqisc: gcckqucukawcasgk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qmkaeeomgkwggoyo; } return $this->eecucukcqkqysiau(__FUNCTION__); qmkaeeomgkwggoyo: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto csammceowmqwaamq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); csammceowmqwaamq: if (!(strtolower($iyiwooigkweeewey) === "\x2f\x69\x6e\x64\145\x78\56\160\150\160")) { goto ocaguquugeamqckq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ocaguquugeamqckq: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\x68\x70" => 1, "\170\155\x6c" => 1, "\170\x73\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || defined("\104\117\x49\116\x47\137\101\x4a\101\130") && DOING_AJAX; } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\160\x5f\143\165\163\x74\x6f\155\x69\x7a\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\x45\124" => 1, "\x48\x45\x41\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eekcoeikaeaaeyii; } return $this->eecucukcqkqysiau(__FUNCTION__); eekcoeikaeaaeyii: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto cogywoqcqummsyus; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cogywoqcqummsyus: $yccgiaiouekkouay = [ "\x6c\x61\156\147" => 1, "\x70\162\x65\x6c\157\x61\144" => 1, "\157\x70\164\55\x70\x72\x65\x6c\157\x61\x64" => 1, "\x70\x65\x72\155\141\x6c\151\x6e\153\x5f\156\x61\x6d\x65" => 1, "\x6c\x70\55\166\x61\x72\151\x61\x74\151\x6f\156\x2d\x69\144" => 1, "\x58\104\105\x42\125\x47\137\x53\x45\123\123\x49\x4f\x4e\x5f\x53\x54\101\x52\x54" => 1, ]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto gmwykkouysyaqwqm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gmwykkouysyaqwqm: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\x61\143\150\145\137\161\165\x65\162\171\137\x73\164\162\151\156\x67\x73"); if ($yccgiaiouekkouay) { goto ugqwuugsweqgmywk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ugqwuugsweqgmywk: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uaukmuiwskcemcsw; } return $this->eecucukcqkqysiau(__FUNCTION__); uaukmuiwskcemcsw: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto sockeswygwcskeuq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); sockeswygwcskeuq: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto mkwkkmkgiqiamacc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mkwkkmkgiqiamacc: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto isgwkwacoyimiauk; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; isgwkwacoyimiauk: cscusseysqygsoiy: } uaqackioaiqwcocy: if (empty($eiocugauqgouiuyi)) { goto mggeqkcksyaymcsa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); mggeqkcksyaymcsa: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function uykysuaiooyewmsc() : bool { if (!(!defined("\x4f\x50\124\x49\115\x49\x5a\x41\124\111\x4f\x4e\x5f\x44\117\x4e\124\x5f\x43\101\x43\110\105\x5f\x50\x41\107\x45") || !OPTIMIZATION_DONT_CACHE_PAGE)) { goto uegouoiuyoqkcscg; } return false; uegouoiuyoqkcscg: return !apply_filters("\143\x61\143\150\145\x5f\157\166\145\x72\162\x69\x64\x65\137\144\157\156\x74\x5f\143\141\x63\150\x65\137\x70\141\147\145", false); } public function kmmyuiwaogukwqqi() : bool { $weksiguqgqscsoee = false; if (!function_exists("\x69\x73\x5f\64\x30\64")) { goto cgyakcqgugqgkqiw; } $weksiguqgqscsoee = is_404(); cgyakcqgugqgkqiw: return $weksiguqgqscsoee; } public function okimameeykkqkuww() : bool { $cccswkigaicmqkkc = "\167\160\x2d\x6a\163\x6f\x6e"; if (!function_exists("\162\145\163\164\x5f\147\145\164\x5f\x75\162\x6c\137\x70\x72\x65\146\x69\170")) { goto eeyyskqsmquyquqw; } $cccswkigaicmqkkc = rest_get_url_prefix(); eeyyskqsmquyquqw: return false !== strpos($this->iqyukmiuoisswoei(), trailingslashit($cccswkigaicmqkkc)); } public function auqoeckqueqiiike() : bool { $weksiguqgqscsoee = false; if (!function_exists("\167\x70\x5f\144\157\151\x6e\x67\x5f\143\162\x6f\156")) { goto ewscugeuicukkycc; } $weksiguqgqscsoee = wp_doing_cron(); ewscugeuicukkycc: return $weksiguqgqscsoee; } public function mcgoysmkqsqooceq() : bool { $weksiguqgqscsoee = false; if (function_exists("\x77\x70\137\x64\x6f\x69\156\147\x5f\x61\x6a\141\x78") && wp_doing_ajax()) { goto ukkcmocamwgiqayu; } if (function_exists("\151\163\137\141\x6a\141\x78") && is_ajax()) { goto wusciwkkckmqigms; } if (!(isset($_SERVER["\x48\124\124\120\x5f\x58\x5f\x52\x45\x51\x55\x45\x53\124\105\104\x5f\x57\x49\x54\x48"]) && $_SERVER["\x48\124\x54\x50\137\x58\x5f\x52\x45\121\125\x45\x53\124\x45\x44\x5f\x57\x49\x54\110"] === "\x58\x4d\114\110\x74\x74\160\x52\145\x71\x75\x65\163\164")) { goto kqswcsysqawkcgye; } $weksiguqgqscsoee = true; kqswcsysqawkcgye: goto iiiccouaaqsyikae; wusciwkkckmqigms: $weksiguqgqscsoee = true; iiiccouaaqsyikae: goto mwysseaekcsiesmm; ukkcmocamwgiqayu: $weksiguqgqscsoee = true; mwysseaekcsiesmm: return $weksiguqgqscsoee; } public function gouusicsisumuiei() : bool { if (!(function_exists("\151\x73\x5f\x73\145\x61\162\143\150") && !is_search())) { goto amgsueumgaguceaa; } return false; amgsueumgaguceaa: return !apply_filters("\x63\x61\143\x68\x65\137\143\x61\143\x68\x65\137\163\x65\141\x72\143\150", false); } public function iqyukmiuoisswoei() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\121\125\x45\x53\x54\x5f\x55\x52\111", ''); if (!$iyiwooigkweeewey) { goto gygwewcqsmwqismo; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\57"); gygwewcqsmwqismo: return $iyiwooigkweeewey; } public function mcqmgiwowqqyiewk() : string { if (!($iyiwooigkweeewey = $this->iqyukmiuoisswoei())) { goto uougwgeyiokewkkm; } $iyiwooigkweeewey = explode("\x3f", $iyiwooigkweeewey); $iyiwooigkweeewey = reset($iyiwooigkweeewey); uougwgeyiokewkkm: return $iyiwooigkweeewey; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\125\105\x53\124\x5f\115\x45\124\110\117\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto ukqocwewouckikso; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\x61\x63\x68\145\x5f\x69\147\156\x6f\162\x65\x64\x5f\x70\141\x72\x61\155\x65\x74\x65\162\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto gommacygsykyussk; } ksort($eyagkkkqkwcuygso); gommacygsykyussk: ukqocwewouckikso: return $eyagkkkqkwcuygso; } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto ucqmumuygcywwqma; } $icwicymcioeyeyek["\160\145\x72\155\141\x6c\151\x6e\x6b"] = $this->iqyukmiuoisswoei(); $this->uiagwusgwcassqua($uamcoiueqaamsqma, $icwicymcioeyeyek); ucqmumuygcywwqma: } }
