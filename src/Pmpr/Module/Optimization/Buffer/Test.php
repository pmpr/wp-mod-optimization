<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65198726e209e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Buffer; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\x72\151" => 1, "\x61\152\141\170" => 1, "\143\x72\157\x6e" => 1, "\x72\x65\x73\164" => 1, "\167\160\x5f\64\x30\x34" => 1, "\x73\145\141\162\143\150" => 1, "\161\165\x65\x72\x79\x5f\x73\164\x72\151\156\147" => 1, "\x69\147\x6e\x6f\162\145\144\137\165\x72\x6c\163" => 1, "\x64\x6f\x6e\157\x74\x63\x61\143\x68\x65\160\141\147\x65" => 1, "\162\x65\152\x65\x63\164\x65\x64\137\x63\157\157\153\x69\x65" => 1, "\155\x61\156\x64\x61\x74\157\x72\x79\x5f\143\x6f\x6f\153\x69\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; $ywmkwiwkosakssii = wp_parse_args($ywmkwiwkosakssii, ["\147\x65\x74" => is_array($_GET) && $_GET ? $_GET : [], "\160\157\163\x74" => is_array($_POST) && $_POST ? $_POST : [], "\164\x65\x73\164" => [], "\143\x6f\157\153\151\x65\x73" => is_array($_COOKIE) && $_COOKIE ? $_COOKIE : []]); if ($ywmkwiwkosakssii["\164\x65\163\x74"]) { goto kgikoagqwkuocesg; } $this->okkwqquawsoemamu((array) $ywmkwiwkosakssii["\x74\145\x73\164"]); kgikoagqwkuocesg: $this->get = $ywmkwiwkosakssii["\147\x65\x74"] && is_array($ywmkwiwkosakssii["\147\x65\x74"]) ? $ywmkwiwkosakssii["\147\x65\164"] : []; $this->post = $ywmkwiwkosakssii["\160\157\x73\164"] && is_array($ywmkwiwkosakssii["\x70\x6f\163\x74"]) ? $ywmkwiwkosakssii["\160\157\163\x74"] : []; $this->cookies = $ywmkwiwkosakssii["\x63\x6f\157\x6b\151\x65\x73"] && is_array($ywmkwiwkosakssii["\143\x6f\x6f\153\151\x65\163"]) ? $ywmkwiwkosakssii["\x63\x6f\157\x6b\151\145\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto skaayekywasksoug; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\x70\x5f\x63\165\163\x74\x6f\155\151\x7a\x65" => '']); skaayekywasksoug: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { $uamcoiueqaamsqma = ''; $mgkceomocowocqyo = []; $this->lastError = []; if ($this->kgkoeoeseyuugaao()) { goto iyceygqsmokgmams; } if ($this->gymgcceeqssmesiu()) { goto wycmcqaauqkgegau; } if ($this->goecwaaykqoaaagg()) { goto acsigwcaesyyoiie; } if ($this->sgsscqasgeyeicoe()) { goto gysmmooawoeggaow; } if (!$this->gooeyogikcusgwuu()) { goto scgmwokeuqwiekkk; } if (!$this->cskwmweqysskwckg()) { goto wcsysckgigeykkwy; } $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if (!isset($uiewakwqscemywuo["\163\x75\x63\x63\x65\163\x73"]) || !$uiewakwqscemywuo["\x73\x75\143\x63\x65\163\x73"]) { goto iikgiaocummweiga; } if ($this->cskwmweqysskwckg("\x71\165\145\x72\171\x5f\163\x74\162\x69\156\x67") && !$this->koguieumooaesyww()) { goto akwwuuiykscgicuw; } if ($this->cskwmweqysskwckg("\x72\x65\152\145\x63\x74\145\144\137\143\x6f\x6f\153\x69\x65") && $this->cokqaygwwygweuyk()) { goto cksoeiwawiygyiyg; } if ($this->cskwmweqysskwckg("\151\147\x6e\x6f\x72\x65\144\x5f\165\162\x6c\x73") && $this->sywgeyscigqsokyg()) { goto sgikkoswwyesqomo; } if (!($this->cskwmweqysskwckg("\x72\145\x73\x74") && $this->okimameeykkqkuww())) { goto gkoyqgogsukuowqi; } $uamcoiueqaamsqma = "\x49\147\156\157\162\145\x64\x20\x75\162\x6c\40\162\145\x73\x74\x20\x72\x65\161\165\x65\x73\164\163\x2e"; gkoyqgogsukuowqi: goto aayysiegiyweiyuu; sgikkoswwyesqomo: $uamcoiueqaamsqma = "\x49\147\156\157\x72\x65\144\x20\x75\162\x6c\40\146\x6f\165\x6e\x64\x2e"; aayysiegiyweiyuu: goto cyqokqcacysioeyc; cksoeiwawiygyiyg: $uamcoiueqaamsqma = "\105\x78\x63\x6c\165\144\145\x64\x20\x63\157\x6f\x6b\151\145\x20\146\157\x75\x6e\x64\56"; $mgkceomocowocqyo = ["\145\170\x63\154\x75\144\145\144\x5f\x63\157\x6f\x6b\151\145\x73" => $this->cokqaygwwygweuyk()]; cyqokqcacysioeyc: goto ueqsiwuwumoqgsck; akwwuuiykscgicuw: $uamcoiueqaamsqma = "\x51\x75\x65\162\x79\40\163\x74\x72\151\x6e\147\40\125\x52\114\40\151\163\40\145\x78\143\x6c\x75\144\145\144\56"; ueqsiwuwumoqgsck: goto gsusqquicmukegcs; iikgiaocummweiga: $uamcoiueqaamsqma = "\x4e\157\40\143\157\156\146\151\x67\x20\146\x69\154\x65\x20\x66\x6f\x75\156\x64\56"; $mgkceomocowocqyo = ["\143\x6f\x6e\x66\151\x67\x5f\x70\x61\164\x68" => $uiewakwqscemywuo["\160\141\164\150"]]; gsusqquicmukegcs: wcsysckgigeykkwy: goto ceusyscosamyaiws; scgmwokeuqwiekkk: $uamcoiueqaamsqma = "\x52\145\x71\x75\145\x73\164\x20\x6d\145\164\x68\x6f\144\x20\151\163\40\156\x6f\x74\40\141\154\x6c\157\x77\145\x64\56\x20\x50\141\x67\x65\40\143\x61\x6e\x6e\x6f\x74\x20\142\x65\40\x63\x61\143\x68\145\144\56"; $mgkceomocowocqyo = ["\162\145\161\x75\x65\x73\x74\x5f\155\145\x74\x68\157\x64" => $this->ciyocmkwssocskiy()]; ceusyscosamyaiws: goto iyikuwuweqigiuey; gysmmooawoeggaow: $uamcoiueqaamsqma = "\103\x75\163\x74\x6f\155\x69\x7a\x65\x72\40\160\x72\x65\x76\x69\x65\x77\40\x69\x73\40\x65\x78\x63\x6c\165\x64\x65\144\x2e"; iyikuwuweqigiuey: goto aqaaqeucgoegeeuk; acsigwcaesyyoiie: $uamcoiueqaamsqma = "\101\144\155\151\x6e\x20\x6f\x72\40\x41\112\101\x58\x20\x55\x52\x4c\40\151\x73\x20\x65\x78\x63\x6c\x75\144\145\144\x2e"; aqaaqeucgoegeeuk: goto qcweoyigoaeacsow; wycmcqaauqkgegau: $uamcoiueqaamsqma = "\x50\110\x50\x2c\40\130\115\114\54\40\x6f\162\x20\130\x53\x4c\x20\146\x69\154\145\x20\151\x73\40\x65\170\143\154\165\144\145\x64\56"; qcweoyigoaeacsow: goto wcekgciqeggiiwgk; iyceygqsmokgmams: $uamcoiueqaamsqma = "\122\157\x62\x6f\x74\163\56\x74\x78\164\x20\x6f\x72\40\56\x68\x74\141\x63\x63\145\x73\163\x20\x66\x69\x6c\x65\x20\x69\x73\40\145\170\143\154\x75\144\x65\x64\x2e"; wcekgciqeggiiwgk: $yciaosuiyeieceug = true; if (!$uamcoiueqaamsqma) { goto gkwuewqmqeswqukg; } $this->log($uamcoiueqaamsqma, $mgkceomocowocqyo); $yciaosuiyeieceug = false; gkwuewqmqeswqukg: return $yciaosuiyeieceug; } public function ocysssyiuaueqiei($iqaosyayeiuaisqi = null) : bool { return (bool) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\157\160\164\137\141\x6c\x6c\157\x77\137\x74\157\x5f\x6f\160\x74\151\x6d\151\172\x65"), false, $iqaosyayeiuaisqi); } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { $yciaosuiyeieceug = true; $this->lastError = []; if (strlen($moooemyaqewumiay) <= 255) { goto ksawwekgswywwuwm; } if (!$this->ocysssyiuaueqiei("\154\x65\166\x65\x6c\x2d\61")) { goto koiiaewwicsckseu; } if (http_response_code() !== 200) { goto ysoqeuugiuswykyu; } if ($this->cskwmweqysskwckg("\144\x6f\x6e\x6f\x74\143\x61\143\x68\145\x70\141\147\145") && $this->uykysuaiooyewmsc()) { goto eoeiaccouaymakgm; } if ($this->cskwmweqysskwckg("\x77\x70\x5f\64\60\64") && $this->kmmyuiwaogukwqqi()) { goto cieumoqayigkoocy; } if ($this->cskwmweqysskwckg("\x73\145\141\162\143\x68") && $this->gouusicsisumuiei()) { goto ekwuycsiuqwycqea; } if ($this->cskwmweqysskwckg("\x61\x6a\141\x78") && $this->mcgoysmkqsqooceq()) { goto kkmwwqyesmkescyg; } if ($this->cskwmweqysskwckg("\x63\162\x6f\156") && $this->auqoeckqueqiiike()) { goto uqcwyyiykmwygeau; } if (!($this->cskwmweqysskwckg("\162\145\x73\x74") && $this->okimameeykkqkuww())) { goto sagemooicmgceiug; } $this->log("\122\x65\163\164\40\x41\x50\111\40\x52\x65\161\165\145\163\x74\x20\x69\x73\x20\x65\170\x63\x6c\x75\x64\145\144\56"); $yciaosuiyeieceug = false; sagemooicmgceiug: goto yeiokcoikcysyimu; uqcwyyiykmwygeau: $this->log("\x43\x72\x6f\x6e\x20\x52\145\x71\165\145\163\x74\x20\x69\x73\x20\145\x78\x63\154\165\144\x65\144\x2e"); $yciaosuiyeieceug = false; yeiokcoikcysyimu: goto uamuuwkyuqomqyuy; kkmwwqyesmkescyg: $this->log("\x41\x6a\x61\x78\x20\x52\x65\161\165\x65\163\164\40\151\163\40\x65\x78\143\154\x75\x64\x65\144\x2e"); $yciaosuiyeieceug = false; uamuuwkyuqomqyuy: goto iyaugygcsmqqqkmo; ekwuycsiuqwycqea: $this->log("\123\x65\x61\162\x63\x68\40\160\141\x67\145\40\151\x73\40\145\170\143\154\165\x64\x65\x64\56"); $yciaosuiyeieceug = false; iyaugygcsmqqqkmo: goto yggciikgkomgeqsc; cieumoqayigkoocy: $this->log("\x57\x50\x20\64\60\64\40\x70\141\x67\x65\x20\x69\163\40\x65\x78\143\154\165\144\145\x64\x2e"); $yciaosuiyeieceug = false; yggciikgkomgeqsc: goto owaimkmgemoqewmm; eoeiaccouaymakgm: $this->log("\104\x4f\x4e\x4f\124\103\101\x43\x48\105\120\x41\x47\105\x20\x69\x73\40\x64\x65\146\151\156\x65\144\56\x20\x50\141\147\145\x20\143\x61\x6e\156\x6f\x74\x20\142\145\40\x63\141\143\x68\x65\x64\56"); $yciaosuiyeieceug = false; owaimkmgemoqewmm: goto usmuqsuwuueogimc; ysoqeuugiuswykyu: $this->log("\120\x61\x67\145\40\151\x73\40\156\157\x74\x20\141\40\x32\60\x30\40\x48\x54\x54\120\x20\x72\145\x73\x70\157\x6e\163\145\40\141\156\144\x20\143\141\x6e\156\157\x74\40\x62\x65\40\143\141\x63\150\145\x64\x2e"); $yciaosuiyeieceug = false; usmuqsuwuueogimc: goto umcyeiusoakewyaa; koiiaewwicsckseu: $this->log("\156\x6f\x74\x20\141\x6c\x6c\x6f\167\40\164\157\x20\157\x70\x74\151\x6d\x69\x7a\145\40\164\150\151\x73\40\160\x61\147\145\x2e"); $yciaosuiyeieceug = false; umcyeiusoakewyaa: goto yuqisiwgqacgmsym; ksawwekgswywwuwm: $this->log("\x42\x75\x66\146\x65\162\40\143\157\x6e\164\145\x6e\164\40\165\156\144\145\x72\x20\62\x35\x35\40\143\141\x72\141\143\164\x65\x72\163\x2e\x3a\40{$moooemyaqewumiay}"); $yciaosuiyeieceug = false; yuqisiwgqacgmsym: return $yciaosuiyeieceug; } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg($ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto wickgagwgqqsomum; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]); goto wmwgeoequuwwwywa; wickgagwgqqsomum: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); wmwgeoequuwwwywa: return $umuecysoywoumgwo; } public function okkwqquawsoemamu(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uqugcugeomqakcqo; } return $this->eecucukcqkqysiau(__FUNCTION__); uqugcugeomqakcqo: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto qmoisuweiskkekca; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qmoisuweiskkekca: $ucasskoyoewwmmii = ["\162\157\142\157\x74\163\56\x74\x78\x74", "\x2e\x68\x74\141\143\x63\x65\163\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto icouowaoycuuisqe; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); icouowaoycuuisqe: gwyseusuceuwwccu: } wywwieycqskuqcwc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ocmwuquguuqigose; } return $this->eecucukcqkqysiau(__FUNCTION__); ocmwuquguuqigose: $iyiwooigkweeewey = $this->iqyukmiuoisswoei(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($iyiwooigkweeewey && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $iyiwooigkweeewey, $meyiiwcswqmuggyg))) { goto swckikycciugciqq; } if (!($meyiiwcswqmuggyg[0] === $iyiwooigkweeewey)) { goto kmqusaiaiogecyiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kmqusaiaiogecyiy: swckikycciugciqq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto coogyackikgmecic; } return $this->eecucukcqkqysiau(__FUNCTION__); coogyackikgmecic: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto iqwsqykoueqyyomy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iqwsqykoueqyyomy: if (!(strtolower($iyiwooigkweeewey) === "\x2f\151\156\x64\x65\170\56\160\150\x70")) { goto ggaucuaykyuiikem; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ggaucuaykyuiikem: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\150\160" => 1, "\170\x6d\154" => 1, "\170\163\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || defined("\104\117\111\x4e\107\137\x41\x4a\x41\130") && DOING_AJAX; } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\x70\137\x63\x75\163\164\x6f\x6d\151\172\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\105\x54" => 1, "\x48\x45\101\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto egikqoaqqegawugu; } return $this->eecucukcqkqysiau(__FUNCTION__); egikqoaqqegawugu: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto caaygouikgagsssc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); caaygouikgagsssc: $yccgiaiouekkouay = [ "\x6c\141\x6e\147" => 1, "\x70\162\145\x6c\x6f\141\144" => 1, "\x6f\x70\164\x2d\x70\162\x65\x6c\157\x61\x64" => 1, "\x70\145\162\155\x61\154\151\x6e\x6b\137\156\141\x6d\145" => 1, "\154\160\x2d\166\x61\x72\x69\141\164\x69\157\x6e\x2d\x69\144" => 1, "\130\x44\x45\102\x55\107\137\x53\105\x53\123\x49\117\116\137\123\124\101\x52\x54" => 1, ]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto yoaewquyogiimyic; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yoaewquyogiimyic: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\141\143\150\x65\137\161\165\145\162\171\x5f\163\164\162\151\156\x67\x73"); if ($yccgiaiouekkouay) { goto wmcmqmmcweecqmsw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wmcmqmmcweecqmsw: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto aakoeuuosouyeemc; } return $this->eecucukcqkqysiau(__FUNCTION__); aakoeuuosouyeemc: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto qsmoiwqcuamyuwyu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qsmoiwqcuamyuwyu: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto cicegcoqyuoggiwy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cicegcoqyuoggiwy: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto wycuyiukyceccaow; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; wycuyiukyceccaow: saekesoeysauokkq: } ugcwqacogqoswyse: if (empty($eiocugauqgouiuyi)) { goto meseuuacmkuowqau; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); meseuuacmkuowqau: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function uykysuaiooyewmsc() : bool { if (!(!defined("\x50\122\x5f\117\x50\x54\137\104\x4f\x4e\124\137\103\x41\x43\x48\105\x5f\120\x41\x47\105") || !PR_OPT_DONT_CACHE_PAGE)) { goto sqmiymiemeegegic; } return false; sqmiymiemeegegic: return !apply_filters("\143\141\x63\x68\x65\137\157\166\x65\x72\x72\x69\x64\x65\x5f\144\x6f\x6e\x74\137\143\x61\x63\150\x65\137\x70\x61\147\x65", false); } public function kmmyuiwaogukwqqi() : bool { $weksiguqgqscsoee = false; if (!function_exists("\151\x73\137\64\60\64")) { goto csqakuuiyywassgw; } $weksiguqgqscsoee = is_404(); csqakuuiyywassgw: return $weksiguqgqscsoee; } public function okimameeykkqkuww() : bool { $cccswkigaicmqkkc = "\167\x70\x2d\152\x73\x6f\156"; if (!function_exists("\x72\x65\163\x74\137\x67\x65\164\x5f\165\x72\x6c\137\160\x72\145\x66\151\170")) { goto esqiocgueosoksyq; } $cccswkigaicmqkkc = rest_get_url_prefix(); esqiocgueosoksyq: return false !== strpos($this->iqyukmiuoisswoei(), trailingslashit($cccswkigaicmqkkc)); } public function auqoeckqueqiiike() : bool { $weksiguqgqscsoee = false; if (!function_exists("\167\x70\x5f\x64\157\151\156\x67\137\143\x72\x6f\x6e")) { goto csggsqueaqmwgwkk; } $weksiguqgqscsoee = wp_doing_cron(); csggsqueaqmwgwkk: return $weksiguqgqscsoee; } public function mcgoysmkqsqooceq() : bool { $weksiguqgqscsoee = false; if (function_exists("\167\160\x5f\x64\x6f\x69\156\147\137\141\x6a\x61\170") && wp_doing_ajax()) { goto gemwkqocygssmequ; } if (function_exists("\151\163\137\141\x6a\141\x78") && is_ajax()) { goto wwwggoemicgwwasy; } if (!(isset($_SERVER["\110\124\124\x50\x5f\130\x5f\122\x45\x51\125\x45\x53\124\105\104\137\x57\x49\x54\x48"]) && $_SERVER["\x48\x54\x54\120\x5f\130\x5f\x52\x45\121\x55\x45\123\124\105\104\137\x57\x49\x54\110"] === "\130\x4d\114\110\164\x74\160\x52\x65\x71\x75\x65\x73\x74")) { goto sescaagayikiggyq; } $weksiguqgqscsoee = true; sescaagayikiggyq: goto egmocemomockemia; wwwggoemicgwwasy: $weksiguqgqscsoee = true; egmocemomockemia: goto cqaeiesyciakcagu; gemwkqocygssmequ: $weksiguqgqscsoee = true; cqaeiesyciakcagu: return $weksiguqgqscsoee; } public function gouusicsisumuiei() : bool { if (!(function_exists("\x69\x73\x5f\x73\x65\x61\162\143\150") && !is_search())) { goto acisycocoswkekik; } return false; acisycocoswkekik: return !apply_filters("\143\x61\x63\x68\x65\137\x63\141\x63\x68\145\137\x73\x65\141\x72\143\x68", false); } public function iqyukmiuoisswoei() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\125\x45\x53\124\x5f\125\x52\x49", ''); if (!$iyiwooigkweeewey) { goto aaiymmkqmocgakei; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\57"); aaiymmkqmocgakei: return $iyiwooigkweeewey; } public function mcqmgiwowqqyiewk() : string { if (!($iyiwooigkweeewey = $this->iqyukmiuoisswoei())) { goto kucqcqeesaiacekm; } $iyiwooigkweeewey = explode("\x3f", $iyiwooigkweeewey); $iyiwooigkweeewey = reset($iyiwooigkweeewey); kucqcqeesaiacekm: return $iyiwooigkweeewey; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\x51\125\105\123\x54\137\115\105\x54\x48\x4f\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto scyqmcegwikkoesw; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\x61\143\x68\145\x5f\x69\x67\156\x6f\x72\145\x64\x5f\x70\141\162\141\155\x65\x74\145\x72\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto cewyaqiqmmwmauce; } ksort($eyagkkkqkwcuygso); cewyaqiqmmwmauce: scyqmcegwikkoesw: return $eyagkkkqkwcuygso; } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto ycweseaccsomkioa; } $icwicymcioeyeyek["\x70\x65\162\x6d\x61\154\x69\156\153"] = $this->iqyukmiuoisswoei(); $this->uiagwusgwcassqua($uamcoiueqaamsqma, $icwicymcioeyeyek); ycweseaccsomkioa: } }
