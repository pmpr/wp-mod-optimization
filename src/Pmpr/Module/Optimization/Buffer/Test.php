<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             629654a236839             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Buffer; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected $logger = null; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\162\151" => 1, "\167\x70\x5f\64\60\x34" => 1, "\163\145\141\162\x63\150" => 1, "\x71\165\x65\x72\x79\137\x73\164\162\151\156\x67" => 1, "\151\x67\156\157\x72\x65\144\137\x75\162\x6c\x73" => 1, "\144\157\x6e\157\164\143\x61\x63\x68\145\x70\141\x67\x65" => 1, "\x72\x65\152\145\x63\164\145\x64\x5f\x63\x6f\x6f\x6b\151\x65" => 1, "\155\x61\156\144\141\164\x6f\x72\171\137\x63\x6f\157\x6b\x69\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; $ywmkwiwkosakssii = wp_parse_args($ywmkwiwkosakssii, ["\x67\145\x74" => is_array($_GET) && $_GET ? $_GET : [], "\x70\x6f\163\164" => is_array($_POST) && $_POST ? $_POST : [], "\164\x65\163\x74" => [], "\154\157\147\147\x65\162" => null, "\x63\x6f\157\153\151\145\x73" => is_array($_COOKIE) && $_COOKIE ? $_COOKIE : []]); if ($ywmkwiwkosakssii["\164\x65\163\x74"]) { goto skaayekywasksoug; } $this->okkwqquawsoemamu((array) $ywmkwiwkosakssii["\164\x65\x73\164"]); skaayekywasksoug: $this->get = $ywmkwiwkosakssii["\x67\145\164"] && is_array($ywmkwiwkosakssii["\147\145\x74"]) ? $ywmkwiwkosakssii["\147\x65\164"] : []; $this->post = $ywmkwiwkosakssii["\x70\x6f\x73\164"] && is_array($ywmkwiwkosakssii["\160\157\x73\164"]) ? $ywmkwiwkosakssii["\x70\x6f\163\164"] : []; $this->logger = $ywmkwiwkosakssii["\x6c\157\147\x67\x65\x72"] ?: null; $this->cookies = $ywmkwiwkosakssii["\143\157\x6f\153\x69\145\163"] && is_array($ywmkwiwkosakssii["\143\157\x6f\x6b\151\145\x73"]) ? $ywmkwiwkosakssii["\143\x6f\157\x6b\151\x65\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto gkoyqgogsukuowqi; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\160\x5f\x63\165\x73\x74\157\x6d\151\172\145" => '']); gkoyqgogsukuowqi: } public function mskuyeumceaigegs() { return $this->logger; } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { $uamcoiueqaamsqma = ''; $mgkceomocowocqyo = []; $this->lastError = []; if ($this->kgkoeoeseyuugaao()) { goto qcweoyigoaeacsow; } if ($this->gymgcceeqssmesiu()) { goto aqaaqeucgoegeeuk; } if ($this->goecwaaykqoaaagg()) { goto iyikuwuweqigiuey; } if ($this->sgsscqasgeyeicoe()) { goto ceusyscosamyaiws; } if (!$this->gooeyogikcusgwuu()) { goto wcsysckgigeykkwy; } if (!$this->cskwmweqysskwckg()) { goto gsusqquicmukegcs; } $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if (!isset($uiewakwqscemywuo["\163\165\143\143\x65\163\163"]) || !$uiewakwqscemywuo["\x73\165\143\x63\145\x73\x73"]) { goto ueqsiwuwumoqgsck; } if ($this->cskwmweqysskwckg("\161\x75\145\162\171\x5f\x73\164\x72\151\x6e\147") && !$this->koguieumooaesyww()) { goto cyqokqcacysioeyc; } if ($this->cskwmweqysskwckg("\x72\145\x6a\x65\x63\x74\x65\x64\137\x63\x6f\157\153\151\145") && $this->cokqaygwwygweuyk()) { goto aayysiegiyweiyuu; } if (!($this->cskwmweqysskwckg("\x69\x67\x6e\157\162\145\144\x5f\x75\x72\x6c\x73") && $this->sywgeyscigqsokyg())) { goto sgikkoswwyesqomo; } $uamcoiueqaamsqma = "\111\x67\156\x6f\x72\x65\144\x20\x75\x72\x6c\x20\146\157\165\x6e\144\x2e"; $mgkceomocowocqyo = ["\160\x65\x72\155\x61\154\151\156\153" => $this->iqyukmiuoisswoei()]; sgikkoswwyesqomo: goto cksoeiwawiygyiyg; aayysiegiyweiyuu: $uamcoiueqaamsqma = "\105\x78\x63\154\165\144\x65\144\x20\x63\157\x6f\153\x69\145\x20\146\x6f\165\x6e\144\x2e"; $mgkceomocowocqyo = ["\x70\145\x72\155\141\x6c\x69\156\x6b" => $this->iqyukmiuoisswoei(), "\x65\170\x63\154\x75\x64\x65\x64\137\x63\157\157\153\x69\x65\163" => $this->cokqaygwwygweuyk()]; cksoeiwawiygyiyg: goto akwwuuiykscgicuw; cyqokqcacysioeyc: $uamcoiueqaamsqma = "\121\165\145\162\171\x20\163\x74\x72\151\156\147\x20\x55\x52\114\x20\151\x73\x20\x65\x78\x63\154\x75\144\145\x64\x2e"; akwwuuiykscgicuw: goto iikgiaocummweiga; ueqsiwuwumoqgsck: $uamcoiueqaamsqma = "\x4e\x6f\x20\143\157\x6e\x66\151\147\x20\x66\x69\x6c\x65\40\146\x6f\x75\156\144\x2e"; $mgkceomocowocqyo = ["\143\157\x6e\x66\x69\147\137\x70\141\164\150" => $uiewakwqscemywuo["\160\x61\164\x68"]]; iikgiaocummweiga: gsusqquicmukegcs: goto scgmwokeuqwiekkk; wcsysckgigeykkwy: $uamcoiueqaamsqma = "\x52\145\161\x75\145\163\x74\40\x6d\145\164\150\157\x64\40\151\x73\40\156\x6f\164\x20\x61\154\x6c\157\x77\x65\144\56\40\x50\x61\x67\145\40\143\x61\156\156\x6f\x74\x20\142\x65\x20\x63\141\143\x68\x65\x64\56"; $mgkceomocowocqyo = ["\162\x65\161\165\x65\163\164\137\155\x65\164\x68\x6f\x64" => $this->ciyocmkwssocskiy()]; scgmwokeuqwiekkk: goto gysmmooawoeggaow; ceusyscosamyaiws: $uamcoiueqaamsqma = "\103\165\x73\x74\157\155\x69\172\x65\x72\x20\x70\162\145\166\x69\x65\x77\40\x69\163\40\145\170\x63\154\165\x64\x65\x64\x2e"; gysmmooawoeggaow: goto acsigwcaesyyoiie; iyikuwuweqigiuey: $uamcoiueqaamsqma = "\101\x64\155\151\x6e\x20\157\162\40\101\x4a\x41\x58\40\125\x52\114\40\151\163\40\145\x78\143\x6c\165\x64\145\144\56"; acsigwcaesyyoiie: goto wycmcqaauqkgegau; aqaaqeucgoegeeuk: $uamcoiueqaamsqma = "\x50\x48\x50\54\x20\130\115\x4c\x2c\x20\157\162\x20\130\123\114\40\x66\151\x6c\145\40\151\x73\40\x65\170\x63\x6c\165\144\x65\x64\x2e"; wycmcqaauqkgegau: goto iyceygqsmokgmams; qcweoyigoaeacsow: $uamcoiueqaamsqma = "\122\x6f\142\157\164\x73\x2e\x74\x78\x74\40\x6f\162\40\56\150\x74\141\143\x63\x65\163\163\x20\x66\151\154\145\40\151\x73\x20\145\x78\143\x6c\165\x64\145\x64\56"; iyceygqsmokgmams: $yciaosuiyeieceug = true; if (!$uamcoiueqaamsqma) { goto wcekgciqeggiiwgk; } $this->log($uamcoiueqaamsqma, $mgkceomocowocqyo); $yciaosuiyeieceug = false; wcekgciqeggiiwgk: return $yciaosuiyeieceug; } public function ocysssyiuaueqiei($iqaosyayeiuaisqi = null) : bool { return (bool) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x6f\160\x74\x5f\141\154\x6c\x6f\x77\137\164\x6f\137\157\x70\164\151\155\x69\x7a\145"), false, $iqaosyayeiuaisqi); } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { $this->lastError = []; $yciaosuiyeieceug = true; if (strlen($moooemyaqewumiay) <= 255) { goto yggciikgkomgeqsc; } if (!$this->ocysssyiuaueqiei("\154\x65\x76\x65\154\55\61")) { goto iyaugygcsmqqqkmo; } if (http_response_code() !== 200) { goto uamuuwkyuqomqyuy; } if ($this->cskwmweqysskwckg("\x64\157\x6e\x6f\x74\x63\141\143\x68\x65\160\141\x67\145") && $this->uykysuaiooyewmsc()) { goto yeiokcoikcysyimu; } if ($this->cskwmweqysskwckg("\x77\160\x5f\x34\60\x34") && $this->kmmyuiwaogukwqqi()) { goto sagemooicmgceiug; } if (!($this->cskwmweqysskwckg("\163\145\141\162\x63\x68") && $this->gouusicsisumuiei())) { goto gkwuewqmqeswqukg; } $this->log("\x53\x65\141\x72\143\150\x20\160\x61\x67\x65\x20\151\x73\x20\x65\x78\x63\x6c\x75\144\145\144\x2e"); $yciaosuiyeieceug = false; gkwuewqmqeswqukg: goto uqcwyyiykmwygeau; sagemooicmgceiug: $this->log("\x57\120\40\64\x30\x34\x20\x70\x61\x67\x65\x20\x69\x73\x20\x65\x78\x63\x6c\x75\x64\145\144\56"); $yciaosuiyeieceug = false; uqcwyyiykmwygeau: goto kkmwwqyesmkescyg; yeiokcoikcysyimu: $this->log("\x44\117\116\117\x54\x43\101\103\110\x45\120\101\x47\105\40\151\x73\40\144\145\146\151\156\x65\144\56\40\120\141\147\145\x20\143\x61\156\156\x6f\x74\40\x62\x65\40\143\141\143\150\145\x64\56"); $yciaosuiyeieceug = false; kkmwwqyesmkescyg: goto ekwuycsiuqwycqea; uamuuwkyuqomqyuy: $this->log("\x50\141\147\x65\x20\x69\163\40\x6e\x6f\164\40\x61\x20\x32\60\60\x20\x48\124\x54\x50\x20\x72\145\163\x70\157\156\163\145\40\141\156\144\40\x63\141\x6e\156\x6f\164\40\142\145\x20\x63\x61\x63\150\145\144\x2e"); $yciaosuiyeieceug = false; ekwuycsiuqwycqea: goto cieumoqayigkoocy; iyaugygcsmqqqkmo: $this->log("\156\157\164\40\141\154\x6c\157\167\40\164\x6f\x20\x6f\x70\164\x69\x6d\x69\172\145\40\x74\150\151\x73\40\160\141\x67\x65\x2e"); $yciaosuiyeieceug = false; cieumoqayigkoocy: goto eoeiaccouaymakgm; yggciikgkomgeqsc: $this->log("\102\165\x66\146\145\162\40\x63\157\156\164\x65\156\164\40\x75\x6e\144\x65\162\40\62\x35\x35\x20\143\141\162\141\x63\164\x65\162\x73\56\72\40{$moooemyaqewumiay}"); $yciaosuiyeieceug = false; eoeiaccouaymakgm: return $yciaosuiyeieceug; } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg($ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto owaimkmgemoqewmm; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]); goto ysoqeuugiuswykyu; owaimkmgemoqewmm: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); ysoqeuugiuswykyu: return $umuecysoywoumgwo; } public function okkwqquawsoemamu(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto usmuqsuwuueogimc; } return $this->eecucukcqkqysiau(__FUNCTION__); usmuqsuwuueogimc: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto koiiaewwicsckseu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); koiiaewwicsckseu: $ucasskoyoewwmmii = ["\162\x6f\142\x6f\x74\163\56\x74\x78\x74", "\56\150\x74\141\x63\x63\145\163\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto yuqisiwgqacgmsym; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yuqisiwgqacgmsym: ksawwekgswywwuwm: } umcyeiusoakewyaa: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wickgagwgqqsomum; } return $this->eecucukcqkqysiau(__FUNCTION__); wickgagwgqqsomum: $iyiwooigkweeewey = $this->iqyukmiuoisswoei(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($iyiwooigkweeewey && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $iyiwooigkweeewey, $meyiiwcswqmuggyg))) { goto uqugcugeomqakcqo; } if (!($meyiiwcswqmuggyg[0] == $iyiwooigkweeewey)) { goto wmwgeoequuwwwywa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wmwgeoequuwwwywa: uqugcugeomqakcqo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qmoisuweiskkekca; } return $this->eecucukcqkqysiau(__FUNCTION__); qmoisuweiskkekca: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto wywwieycqskuqcwc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wywwieycqskuqcwc: if (!(strtolower($iyiwooigkweeewey) === "\x2f\x69\156\x64\145\170\x2e\x70\x68\x70")) { goto gwyseusuceuwwccu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gwyseusuceuwwccu: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\x68\160" => 1, "\x78\x6d\154" => 1, "\170\x73\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || defined("\104\117\x49\116\x47\x5f\x41\x4a\101\130") && DOING_AJAX; } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\x70\137\143\x75\163\x74\157\155\151\x7a\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\x45\124" => 1, "\x48\x45\101\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto icouowaoycuuisqe; } return $this->eecucukcqkqysiau(__FUNCTION__); icouowaoycuuisqe: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto ocmwuquguuqigose; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ocmwuquguuqigose: $yccgiaiouekkouay = [ "\x6c\141\156\147" => 1, "\160\x72\x65\154\157\141\x64" => 1, "\157\x70\x74\55\x70\x72\145\x6c\157\x61\144" => 1, "\x70\145\x72\155\x61\x6c\x69\156\x6b\137\x6e\x61\155\x65" => 1, "\154\x70\55\x76\x61\x72\x69\x61\164\151\157\156\55\x69\144" => 1, ]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto kmqusaiaiogecyiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kmqusaiaiogecyiy: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\x61\x63\150\145\137\161\x75\145\162\171\x5f\163\164\x72\151\x6e\147\163"); if ($yccgiaiouekkouay) { goto swckikycciugciqq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); swckikycciugciqq: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto coogyackikgmecic; } return $this->eecucukcqkqysiau(__FUNCTION__); coogyackikgmecic: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto iqwsqykoueqyyomy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iqwsqykoueqyyomy: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto ggaucuaykyuiikem; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ggaucuaykyuiikem: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto yoaewquyogiimyic; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; yoaewquyogiimyic: caaygouikgagsssc: } egikqoaqqegawugu: if (empty($eiocugauqgouiuyi)) { goto wmcmqmmcweecqmsw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); wmcmqmmcweecqmsw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function uykysuaiooyewmsc() : bool { if (!(!defined("\x4f\x50\124\111\115\x49\x5a\101\124\111\117\116\137\x44\x4f\x4e\x54\137\x43\101\x43\110\x45\x5f\120\101\x47\x45") || !OPTIMIZATION_DONT_CACHE_PAGE)) { goto aakoeuuosouyeemc; } return false; aakoeuuosouyeemc: return !apply_filters("\143\141\143\150\145\x5f\x6f\166\x65\x72\162\x69\144\x65\137\x64\157\x6e\164\137\143\141\x63\x68\x65\x5f\x70\141\147\x65", false); } public function kmmyuiwaogukwqqi() : bool { return !function_exists("\x69\163\x5f\64\60\x34") || is_404(); } public function gouusicsisumuiei() : bool { if (!(function_exists("\151\x73\137\163\145\x61\x72\143\150") && !is_search())) { goto qsmoiwqcuamyuwyu; } return false; qsmoiwqcuamyuwyu: return !apply_filters("\x63\x61\x63\x68\x65\x5f\x63\141\143\x68\145\137\x73\x65\x61\x72\x63\150", false); } public function iqyukmiuoisswoei() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\121\125\105\123\x54\x5f\x55\x52\111", ''); if (!$iyiwooigkweeewey) { goto cicegcoqyuoggiwy; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\57"); cicegcoqyuoggiwy: return $iyiwooigkweeewey; } public function mcqmgiwowqqyiewk() : string { if (!($iyiwooigkweeewey = $this->iqyukmiuoisswoei())) { goto ugcwqacogqoswyse; } $iyiwooigkweeewey = explode("\77", $iyiwooigkweeewey); $iyiwooigkweeewey = reset($iyiwooigkweeewey); ugcwqacogqoswyse: return $iyiwooigkweeewey; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\121\x55\105\123\x54\x5f\x4d\x45\124\110\x4f\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto wycuyiukyceccaow; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\x61\x63\x68\145\137\151\x67\x6e\157\x72\x65\144\x5f\x70\x61\x72\x61\x6d\x65\164\x65\x72\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto saekesoeysauokkq; } ksort($eyagkkkqkwcuygso); saekesoeysauokkq: wycuyiukyceccaow: return $eyagkkkqkwcuygso; } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log($uamcoiueqaamsqma, $mgkceomocowocqyo = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto csqakuuiyywassgw; } $eawuoscsaksyqwiw = $this->mskuyeumceaigegs(); if ($eawuoscsaksyqwiw && is_a($eawuoscsaksyqwiw, "\120\155\x70\x72\134\103\x6f\x6d\155\157\x6e\x5c\x46\x6f\165\x6e\x64\x61\164\x69\x6f\156\x5c\114\157\x67\147\145\162\x5c\x45\156\147\151\x6e\145")) { goto meseuuacmkuowqau; } error_log($uamcoiueqaamsqma); goto sqmiymiemeegegic; meseuuacmkuowqau: $eawuoscsaksyqwiw->uimukyawykswgwsm("\x64\145\x66\x61\165\x6c\x74", $eawuoscsaksyqwiw::swmsegkcoseieecu, $uamcoiueqaamsqma, $mgkceomocowocqyo); sqmiymiemeegegic: csqakuuiyywassgw: } }
