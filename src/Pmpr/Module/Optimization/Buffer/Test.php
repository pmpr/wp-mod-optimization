<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6321c656ef420             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Buffer; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\x72\x69" => 1, "\x61\152\x61\x78" => 1, "\143\162\157\156" => 1, "\162\145\163\164" => 1, "\x77\x70\x5f\64\x30\x34" => 1, "\x73\145\x61\x72\143\150" => 1, "\x71\165\x65\162\171\137\x73\x74\162\x69\156\147" => 1, "\x69\x67\156\157\x72\145\x64\x5f\x75\x72\x6c\163" => 1, "\144\x6f\156\x6f\x74\143\141\143\150\x65\x70\x61\147\145" => 1, "\x72\x65\152\x65\x63\x74\145\144\x5f\143\x6f\x6f\x6b\x69\145" => 1, "\x6d\141\156\x64\141\x74\x6f\x72\171\137\143\157\x6f\x6b\151\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; $ywmkwiwkosakssii = wp_parse_args($ywmkwiwkosakssii, ["\147\x65\x74" => is_array($_GET) && $_GET ? $_GET : [], "\160\x6f\x73\164" => is_array($_POST) && $_POST ? $_POST : [], "\164\145\163\164" => [], "\143\157\157\153\x69\x65\x73" => is_array($_COOKIE) && $_COOKIE ? $_COOKIE : []]); if ($ywmkwiwkosakssii["\x74\145\163\164"]) { goto qimieogaimwmukmu; } $this->okkwqquawsoemamu((array) $ywmkwiwkosakssii["\164\145\x73\x74"]); qimieogaimwmukmu: $this->get = $ywmkwiwkosakssii["\x67\145\164"] && is_array($ywmkwiwkosakssii["\147\x65\164"]) ? $ywmkwiwkosakssii["\147\x65\164"] : []; $this->post = $ywmkwiwkosakssii["\x70\157\x73\164"] && is_array($ywmkwiwkosakssii["\160\157\163\164"]) ? $ywmkwiwkosakssii["\160\x6f\163\x74"] : []; $this->cookies = $ywmkwiwkosakssii["\x63\157\x6f\153\151\x65\x73"] && is_array($ywmkwiwkosakssii["\143\157\157\x6b\151\x65\163"]) ? $ywmkwiwkosakssii["\143\157\157\153\151\145\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto gmymycwymqkuiisi; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\x70\x5f\x63\x75\x73\x74\x6f\155\x69\x7a\x65" => '']); gmymycwymqkuiisi: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { $uamcoiueqaamsqma = ''; $mgkceomocowocqyo = []; $this->lastError = []; if ($this->kgkoeoeseyuugaao()) { goto ewooakeuigcyuemu; } if ($this->gymgcceeqssmesiu()) { goto ekmqouqsgsaukeiq; } if ($this->goecwaaykqoaaagg()) { goto scaimkkukmgoeaya; } if ($this->sgsscqasgeyeicoe()) { goto wemmseueskwkcwou; } if (!$this->gooeyogikcusgwuu()) { goto cuwkqgemkmuuegkc; } if (!$this->cskwmweqysskwckg()) { goto eecgougegqassgyq; } $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if (!isset($uiewakwqscemywuo["\163\x75\x63\143\145\x73\163"]) || !$uiewakwqscemywuo["\x73\x75\143\143\x65\163\163"]) { goto iuaommmyqoecmuss; } if ($this->cskwmweqysskwckg("\x71\x75\145\x72\x79\137\163\x74\x72\151\x6e\x67") && !$this->koguieumooaesyww()) { goto eqieeecackceeweg; } if ($this->cskwmweqysskwckg("\162\145\152\x65\143\x74\145\x64\137\143\157\x6f\153\151\145") && $this->cokqaygwwygweuyk()) { goto cycyaqqawmwiywwe; } if ($this->cskwmweqysskwckg("\x69\x67\x6e\157\162\x65\144\x5f\x75\x72\154\x73") && $this->sywgeyscigqsokyg()) { goto koawwmccgquqqmwa; } if (!($this->cskwmweqysskwckg("\x72\x65\x73\164") && $this->okimameeykkqkuww())) { goto wogokmgkgkumqcws; } $uamcoiueqaamsqma = "\111\147\x6e\x6f\162\x65\x64\40\165\x72\154\x20\x72\x65\163\164\x20\x72\145\x71\x75\145\x73\x74\x73\56"; wogokmgkgkumqcws: goto cokacyaayuueyuuu; koawwmccgquqqmwa: $uamcoiueqaamsqma = "\111\x67\x6e\x6f\x72\x65\x64\x20\165\162\x6c\x20\146\157\165\156\144\x2e"; cokacyaayuueyuuu: goto ckowiuagwmsqmiqc; cycyaqqawmwiywwe: $uamcoiueqaamsqma = "\x45\x78\x63\154\x75\x64\145\144\40\143\x6f\x6f\153\151\145\40\x66\x6f\165\x6e\x64\x2e"; $mgkceomocowocqyo = ["\x65\170\x63\154\165\144\145\144\137\143\157\157\153\x69\145\163" => $this->cokqaygwwygweuyk()]; ckowiuagwmsqmiqc: goto ygywkqgioiscmuie; eqieeecackceeweg: $uamcoiueqaamsqma = "\121\165\x65\162\171\40\x73\x74\x72\x69\x6e\147\40\125\x52\114\40\x69\163\40\x65\170\x63\x6c\165\x64\145\144\x2e"; ygywkqgioiscmuie: goto ikeyoyoigsuouokm; iuaommmyqoecmuss: $uamcoiueqaamsqma = "\116\x6f\x20\143\157\x6e\146\x69\147\x20\x66\x69\x6c\x65\x20\146\157\165\156\144\56"; $mgkceomocowocqyo = ["\143\157\156\x66\151\x67\137\x70\x61\x74\x68" => $uiewakwqscemywuo["\160\141\164\x68"]]; ikeyoyoigsuouokm: eecgougegqassgyq: goto oyicskieeaewgwce; cuwkqgemkmuuegkc: $uamcoiueqaamsqma = "\122\x65\161\x75\145\x73\164\x20\155\145\164\150\x6f\x64\x20\x69\x73\x20\x6e\x6f\x74\40\x61\154\x6c\x6f\x77\x65\x64\x2e\x20\x50\x61\x67\145\40\143\x61\x6e\x6e\157\x74\40\x62\x65\x20\x63\141\143\150\x65\144\x2e"; $mgkceomocowocqyo = ["\162\145\x71\165\145\163\x74\137\155\x65\164\x68\157\x64" => $this->ciyocmkwssocskiy()]; oyicskieeaewgwce: goto cceakqgoysacqwmc; wemmseueskwkcwou: $uamcoiueqaamsqma = "\x43\165\163\164\157\x6d\x69\x7a\145\x72\40\160\162\x65\166\151\145\x77\40\x69\x73\x20\x65\170\x63\154\165\x64\x65\x64\x2e"; cceakqgoysacqwmc: goto ceeqguaoysyaasey; scaimkkukmgoeaya: $uamcoiueqaamsqma = "\101\x64\x6d\151\156\x20\157\x72\40\x41\112\x41\x58\40\125\122\114\40\151\x73\x20\145\170\143\x6c\165\144\145\x64\x2e"; ceeqguaoysyaasey: goto cugkqmkuyuwwqcec; ekmqouqsgsaukeiq: $uamcoiueqaamsqma = "\120\x48\120\x2c\x20\x58\115\114\54\x20\x6f\162\x20\130\123\114\40\x66\x69\x6c\145\40\x69\163\x20\x65\170\143\154\165\144\x65\x64\56"; cugkqmkuyuwwqcec: goto wceiuqaeywmgscww; ewooakeuigcyuemu: $uamcoiueqaamsqma = "\x52\157\x62\x6f\x74\163\x2e\x74\x78\x74\x20\157\x72\x20\x2e\150\164\x61\x63\x63\x65\163\x73\40\146\x69\x6c\145\x20\151\x73\x20\145\x78\x63\154\x75\144\145\x64\x2e"; wceiuqaeywmgscww: $yciaosuiyeieceug = true; if (!$uamcoiueqaamsqma) { goto kacgiqwewyeeyyam; } $this->log($uamcoiueqaamsqma, $mgkceomocowocqyo); $yciaosuiyeieceug = false; kacgiqwewyeeyyam: return $yciaosuiyeieceug; } public function ocysssyiuaueqiei($iqaosyayeiuaisqi = null) : bool { return (bool) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\157\x70\164\137\141\154\x6c\x6f\167\137\x74\157\x5f\x6f\160\164\151\155\151\172\x65"), false, $iqaosyayeiuaisqi); } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { $yciaosuiyeieceug = true; $this->lastError = []; if (strlen($moooemyaqewumiay) <= 255) { goto uauqmaeueukkmuwa; } if (!$this->ocysssyiuaueqiei("\154\145\x76\145\x6c\55\x31")) { goto cqeceeagmysoyoqg; } if (http_response_code() !== 200) { goto sickakeesgcgwisw; } if ($this->cskwmweqysskwckg("\x64\157\x6e\x6f\164\x63\x61\143\150\x65\160\141\147\x65") && $this->uykysuaiooyewmsc()) { goto eywcgeccsmquugsw; } if ($this->cskwmweqysskwckg("\167\x70\137\64\60\64") && $this->kmmyuiwaogukwqqi()) { goto iuieyqacggsykgus; } if ($this->cskwmweqysskwckg("\x73\145\x61\x72\143\150") && $this->gouusicsisumuiei()) { goto cqyiukmuqceicqwa; } if ($this->cskwmweqysskwckg("\x61\152\141\x78") && $this->mcgoysmkqsqooceq()) { goto goimywgsweeqsewo; } if ($this->cskwmweqysskwckg("\x63\x72\x6f\x6e") && $this->auqoeckqueqiiike()) { goto ywmuoigomwwigqea; } if (!($this->cskwmweqysskwckg("\x72\x65\163\164") && $this->okimameeykkqkuww())) { goto qwogeocemuaaasiw; } $this->log("\x52\x65\x73\x74\40\101\x50\x49\40\122\x65\x71\x75\145\x73\164\40\x69\163\x20\145\x78\x63\154\x75\144\145\144\56"); $yciaosuiyeieceug = false; qwogeocemuaaasiw: goto cgqkqmiekaageyka; ywmuoigomwwigqea: $this->log("\x43\x72\157\156\40\122\x65\x71\x75\x65\163\x74\40\151\163\40\145\x78\143\x6c\165\x64\x65\144\x2e"); $yciaosuiyeieceug = false; cgqkqmiekaageyka: goto uomwseyiqckeewgo; goimywgsweeqsewo: $this->log("\101\x6a\x61\170\40\122\x65\161\165\x65\x73\x74\40\151\x73\40\145\x78\x63\154\x75\144\145\144\56"); $yciaosuiyeieceug = false; uomwseyiqckeewgo: goto kmocamaieycogugg; cqyiukmuqceicqwa: $this->log("\123\x65\141\x72\x63\x68\x20\x70\x61\x67\145\x20\151\x73\40\145\x78\x63\x6c\165\144\x65\x64\x2e"); $yciaosuiyeieceug = false; kmocamaieycogugg: goto wamkaouokmyoyuqu; iuieyqacggsykgus: $this->log("\127\x50\40\x34\60\x34\x20\x70\141\x67\x65\x20\151\163\40\145\x78\x63\154\x75\x64\145\x64\56"); $yciaosuiyeieceug = false; wamkaouokmyoyuqu: goto wwskeewecyukygeg; eywcgeccsmquugsw: $this->log("\104\117\x4e\117\x54\103\101\x43\110\x45\120\101\x47\105\x20\x69\163\40\x64\145\146\x69\x6e\x65\x64\56\x20\120\x61\147\145\40\143\x61\x6e\156\157\164\40\x62\145\x20\x63\141\143\150\x65\144\56"); $yciaosuiyeieceug = false; wwskeewecyukygeg: goto wmqegaqemgiggsce; sickakeesgcgwisw: $this->log("\x50\x61\147\x65\x20\x69\163\x20\x6e\x6f\x74\x20\141\40\62\x30\60\x20\x48\x54\x54\x50\x20\162\x65\x73\160\x6f\x6e\x73\145\40\x61\156\x64\x20\x63\141\x6e\156\x6f\x74\40\142\x65\40\143\x61\143\150\145\144\56"); $yciaosuiyeieceug = false; wmqegaqemgiggsce: goto wggeggkumkwaaesu; cqeceeagmysoyoqg: $this->log("\x6e\157\164\40\x61\154\154\157\167\40\164\x6f\40\157\160\x74\x69\x6d\151\x7a\145\40\x74\x68\151\163\x20\x70\141\147\145\x2e"); $yciaosuiyeieceug = false; wggeggkumkwaaesu: goto gkyguugwwoaqoigy; uauqmaeueukkmuwa: $this->log("\x42\165\146\x66\x65\x72\x20\143\157\x6e\x74\145\156\x74\x20\165\156\144\x65\162\x20\x32\x35\65\40\143\141\x72\x61\143\164\x65\162\163\56\x3a\40{$moooemyaqewumiay}"); $yciaosuiyeieceug = false; gkyguugwwoaqoigy: return $yciaosuiyeieceug; } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg($ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto kmikwoqwigwuyqae; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]); goto qcuywygiosoqycaa; kmikwoqwigwuyqae: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); qcuywygiosoqycaa: return $umuecysoywoumgwo; } public function okkwqquawsoemamu(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto coaysoeouasaekie; } return $this->eecucukcqkqysiau(__FUNCTION__); coaysoeouasaekie: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto ykymogaqkgaiiiyi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ykymogaqkgaiiiyi: $ucasskoyoewwmmii = ["\x72\x6f\142\157\164\x73\56\x74\x78\x74", "\56\x68\x74\x61\143\x63\145\x73\163"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto qsyyeoosgigiiequ; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qsyyeoosgigiiequ: qoigaauuokyusmgk: } uusyaguomkqeakkm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto jweeyemwqyqmyuys; } return $this->eecucukcqkqysiau(__FUNCTION__); jweeyemwqyqmyuys: $iyiwooigkweeewey = $this->iqyukmiuoisswoei(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($iyiwooigkweeewey && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $iyiwooigkweeewey, $meyiiwcswqmuggyg))) { goto yegkgccwomcgkumi; } if (!($meyiiwcswqmuggyg[0] === $iyiwooigkweeewey)) { goto mgiwqumikeuieocg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); mgiwqumikeuieocg: yegkgccwomcgkumi: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qikmwaessamuueoe; } return $this->eecucukcqkqysiau(__FUNCTION__); qikmwaessamuueoe: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto aeekgeqawgsmgiqw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); aeekgeqawgsmgiqw: if (!(strtolower($iyiwooigkweeewey) === "\57\151\x6e\x64\x65\170\56\x70\150\160")) { goto imgagmqusgiqissi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); imgagmqusgiqissi: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\150\x70" => 1, "\170\155\x6c" => 1, "\170\x73\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || defined("\104\x4f\x49\116\107\137\101\x4a\101\x58") && DOING_AJAX; } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\x70\x5f\143\x75\163\164\157\155\151\x7a\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\x45\124" => 1, "\x48\x45\101\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto scaciowogmayswms; } return $this->eecucukcqkqysiau(__FUNCTION__); scaciowogmayswms: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto cesaaiguwciccysi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cesaaiguwciccysi: $yccgiaiouekkouay = [ "\154\141\x6e\147" => 1, "\x70\x72\145\x6c\x6f\x61\144" => 1, "\x6f\160\164\55\160\162\145\x6c\x6f\141\x64" => 1, "\160\145\x72\155\141\154\151\156\153\x5f\x6e\x61\155\x65" => 1, "\154\x70\x2d\166\x61\162\151\x61\164\x69\x6f\x6e\x2d\151\144" => 1, "\x58\104\105\102\x55\x47\x5f\x53\x45\123\x53\111\117\116\137\x53\124\x41\122\x54" => 1, ]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto wskccugoccagaqcw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wskccugoccagaqcw: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\x61\x63\150\145\x5f\x71\165\145\x72\x79\x5f\x73\164\x72\x69\156\x67\163"); if ($yccgiaiouekkouay) { goto sqyceswygksmmqqa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); sqyceswygksmmqqa: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kqsyqwwscwoswsgk; } return $this->eecucukcqkqysiau(__FUNCTION__); kqsyqwwscwoswsgk: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto yemuiyokmqoqckwu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yemuiyokmqoqckwu: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto qocmmyskykeuwsae; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qocmmyskykeuwsae: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto yquysamwsoyyqcya; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; yquysamwsoyyqcya: syquiiogeymgicuy: } kywmiquiiwmwgooy: if (empty($eiocugauqgouiuyi)) { goto qsycguggqkgywgaq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); qsycguggqkgywgaq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function uykysuaiooyewmsc() : bool { if (!(!defined("\x4f\120\x54\111\115\x49\x5a\x41\x54\111\117\116\x5f\104\x4f\x4e\124\137\103\101\x43\x48\x45\x5f\x50\x41\x47\x45") || !OPTIMIZATION_DONT_CACHE_PAGE)) { goto wsyeqyekimescwkq; } return false; wsyeqyekimescwkq: return !apply_filters("\x63\141\x63\150\145\137\157\166\x65\x72\162\x69\x64\145\137\144\x6f\156\164\137\143\141\x63\150\x65\137\160\141\147\145", false); } public function kmmyuiwaogukwqqi() : bool { $weksiguqgqscsoee = false; if (!function_exists("\x69\163\137\x34\60\x34")) { goto gyceukwoyaasuwik; } $weksiguqgqscsoee = is_404(); gyceukwoyaasuwik: return $weksiguqgqscsoee; } public function okimameeykkqkuww() : bool { $cccswkigaicmqkkc = "\167\160\55\x6a\x73\157\x6e"; if (!function_exists("\162\x65\x73\x74\x5f\147\x65\164\x5f\x75\162\154\x5f\x70\162\x65\146\151\x78")) { goto iiyamaquicwswcyu; } $cccswkigaicmqkkc = rest_get_url_prefix(); iiyamaquicwswcyu: return false !== strpos($this->iqyukmiuoisswoei(), trailingslashit($cccswkigaicmqkkc)); } public function auqoeckqueqiiike() : bool { $weksiguqgqscsoee = false; if (!function_exists("\x77\160\x5f\144\157\151\x6e\x67\137\143\162\x6f\x6e")) { goto iiyggeuemwuwqiey; } $weksiguqgqscsoee = wp_doing_cron(); iiyggeuemwuwqiey: return $weksiguqgqscsoee; } public function mcgoysmkqsqooceq() : bool { $weksiguqgqscsoee = false; if (function_exists("\x77\x70\137\x64\157\151\156\x67\x5f\x61\x6a\x61\x78") && wp_doing_ajax()) { goto aigeoggkowgwwwqg; } if (function_exists("\151\x73\137\141\x6a\x61\x78") && is_ajax()) { goto agokkauammisaqke; } if (!(isset($_SERVER["\x48\124\x54\x50\x5f\x58\x5f\122\105\121\x55\105\x53\x54\x45\x44\137\x57\111\x54\x48"]) && $_SERVER["\x48\x54\124\120\137\130\x5f\x52\105\x51\x55\x45\123\124\105\x44\137\127\x49\x54\x48"] === "\x58\x4d\x4c\110\x74\164\x70\x52\x65\x71\x75\145\x73\x74")) { goto omeookmiomoieeee; } $weksiguqgqscsoee = true; omeookmiomoieeee: goto ggoyigsoyccmscum; agokkauammisaqke: $weksiguqgqscsoee = true; ggoyigsoyccmscum: goto pscqogmyseiwuqye; aigeoggkowgwwwqg: $weksiguqgqscsoee = true; pscqogmyseiwuqye: return $weksiguqgqscsoee; } public function gouusicsisumuiei() : bool { if (!(function_exists("\x69\163\137\163\145\x61\162\x63\150") && !is_search())) { goto cyyecekuwygaqwcy; } return false; cyyecekuwygaqwcy: return !apply_filters("\143\x61\x63\x68\145\137\x63\141\143\x68\145\137\x73\x65\x61\x72\143\x68", false); } public function iqyukmiuoisswoei() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\121\125\105\x53\x54\x5f\125\122\111", ''); if (!$iyiwooigkweeewey) { goto muqeeocooyiosouk; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\x2f"); muqeeocooyiosouk: return $iyiwooigkweeewey; } public function mcqmgiwowqqyiewk() : string { if (!($iyiwooigkweeewey = $this->iqyukmiuoisswoei())) { goto wcagqkquasswioos; } $iyiwooigkweeewey = explode("\x3f", $iyiwooigkweeewey); $iyiwooigkweeewey = reset($iyiwooigkweeewey); wcagqkquasswioos: return $iyiwooigkweeewey; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\x55\105\123\124\x5f\115\x45\x54\x48\117\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto ayggiggmcqckqwom; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\141\x63\x68\145\137\x69\147\x6e\157\x72\145\x64\x5f\160\x61\162\x61\155\x65\164\x65\x72\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto ogywsgmqcgioaoqk; } ksort($eyagkkkqkwcuygso); ogywsgmqcgioaoqk: ayggiggmcqckqwom: return $eyagkkkqkwcuygso; } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto wiiyageyqowkmmko; } $icwicymcioeyeyek["\x70\145\x72\155\x61\154\x69\x6e\x6b"] = $this->iqyukmiuoisswoei(); $this->uiagwusgwcassqua($uamcoiueqaamsqma, $icwicymcioeyeyek); wiiyageyqowkmmko: } }
