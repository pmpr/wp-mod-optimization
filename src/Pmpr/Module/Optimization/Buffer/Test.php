<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6326c8204f364             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Buffer; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\162\x69" => 1, "\141\152\141\170" => 1, "\143\162\x6f\x6e" => 1, "\162\x65\163\164" => 1, "\167\x70\x5f\64\60\x34" => 1, "\x73\x65\141\162\x63\x68" => 1, "\x71\165\145\162\x79\x5f\163\x74\x72\x69\x6e\x67" => 1, "\x69\x67\x6e\x6f\162\x65\144\137\165\x72\154\163" => 1, "\144\157\x6e\x6f\164\x63\x61\143\150\145\160\x61\147\x65" => 1, "\162\145\x6a\x65\143\x74\145\x64\137\x63\x6f\x6f\x6b\151\x65" => 1, "\x6d\141\x6e\x64\141\164\157\x72\171\137\x63\x6f\x6f\153\x69\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; $ywmkwiwkosakssii = wp_parse_args($ywmkwiwkosakssii, ["\x67\145\164" => is_array($_GET) && $_GET ? $_GET : [], "\160\x6f\x73\x74" => is_array($_POST) && $_POST ? $_POST : [], "\164\145\x73\164" => [], "\143\x6f\157\153\x69\145\x73" => is_array($_COOKIE) && $_COOKIE ? $_COOKIE : []]); if ($ywmkwiwkosakssii["\164\x65\163\x74"]) { goto qimieogaimwmukmu; } $this->okkwqquawsoemamu((array) $ywmkwiwkosakssii["\164\145\163\x74"]); qimieogaimwmukmu: $this->get = $ywmkwiwkosakssii["\147\145\x74"] && is_array($ywmkwiwkosakssii["\147\145\164"]) ? $ywmkwiwkosakssii["\x67\x65\164"] : []; $this->post = $ywmkwiwkosakssii["\160\x6f\x73\x74"] && is_array($ywmkwiwkosakssii["\x70\x6f\x73\x74"]) ? $ywmkwiwkosakssii["\x70\x6f\x73\x74"] : []; $this->cookies = $ywmkwiwkosakssii["\143\x6f\x6f\x6b\x69\145\163"] && is_array($ywmkwiwkosakssii["\143\157\x6f\x6b\151\145\x73"]) ? $ywmkwiwkosakssii["\x63\157\157\153\x69\145\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto gmymycwymqkuiisi; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\x70\x5f\143\x75\163\x74\157\155\151\172\145" => '']); gmymycwymqkuiisi: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { $uamcoiueqaamsqma = ''; $mgkceomocowocqyo = []; $this->lastError = []; if ($this->kgkoeoeseyuugaao()) { goto ewooakeuigcyuemu; } if ($this->gymgcceeqssmesiu()) { goto ekmqouqsgsaukeiq; } if ($this->goecwaaykqoaaagg()) { goto scaimkkukmgoeaya; } if ($this->sgsscqasgeyeicoe()) { goto wemmseueskwkcwou; } if (!$this->gooeyogikcusgwuu()) { goto cuwkqgemkmuuegkc; } if (!$this->cskwmweqysskwckg()) { goto eecgougegqassgyq; } $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if (!isset($uiewakwqscemywuo["\163\165\143\143\145\x73\x73"]) || !$uiewakwqscemywuo["\x73\165\x63\x63\x65\x73\x73"]) { goto iuaommmyqoecmuss; } if ($this->cskwmweqysskwckg("\x71\x75\145\x72\171\x5f\163\x74\162\151\x6e\x67") && !$this->koguieumooaesyww()) { goto eqieeecackceeweg; } if ($this->cskwmweqysskwckg("\162\x65\152\145\143\x74\x65\x64\x5f\143\x6f\x6f\x6b\151\145") && $this->cokqaygwwygweuyk()) { goto cycyaqqawmwiywwe; } if ($this->cskwmweqysskwckg("\x69\147\x6e\157\x72\145\x64\x5f\165\162\154\163") && $this->sywgeyscigqsokyg()) { goto koawwmccgquqqmwa; } if (!($this->cskwmweqysskwckg("\x72\x65\x73\x74") && $this->okimameeykkqkuww())) { goto wogokmgkgkumqcws; } $uamcoiueqaamsqma = "\x49\147\156\157\162\145\144\40\x75\x72\x6c\40\162\145\x73\x74\x20\162\x65\161\x75\x65\x73\164\x73\56"; wogokmgkgkumqcws: goto cokacyaayuueyuuu; koawwmccgquqqmwa: $uamcoiueqaamsqma = "\111\x67\x6e\x6f\x72\145\144\40\165\162\154\x20\146\x6f\x75\156\x64\56"; cokacyaayuueyuuu: goto ckowiuagwmsqmiqc; cycyaqqawmwiywwe: $uamcoiueqaamsqma = "\105\170\143\x6c\x75\144\x65\x64\x20\x63\x6f\157\x6b\151\145\40\146\157\x75\x6e\144\x2e"; $mgkceomocowocqyo = ["\145\x78\x63\154\165\x64\145\x64\137\143\157\x6f\x6b\151\x65\x73" => $this->cokqaygwwygweuyk()]; ckowiuagwmsqmiqc: goto ygywkqgioiscmuie; eqieeecackceeweg: $uamcoiueqaamsqma = "\x51\165\x65\162\x79\40\x73\x74\162\x69\x6e\x67\40\x55\x52\x4c\x20\x69\x73\x20\x65\x78\143\154\165\x64\x65\144\56"; ygywkqgioiscmuie: goto ikeyoyoigsuouokm; iuaommmyqoecmuss: $uamcoiueqaamsqma = "\x4e\157\x20\143\x6f\x6e\146\151\147\x20\x66\x69\x6c\145\x20\146\157\165\x6e\x64\x2e"; $mgkceomocowocqyo = ["\143\157\156\146\x69\147\x5f\x70\141\x74\150" => $uiewakwqscemywuo["\160\141\x74\x68"]]; ikeyoyoigsuouokm: eecgougegqassgyq: goto oyicskieeaewgwce; cuwkqgemkmuuegkc: $uamcoiueqaamsqma = "\x52\x65\x71\x75\x65\163\x74\40\x6d\x65\164\150\x6f\144\x20\151\x73\40\156\x6f\x74\40\x61\x6c\x6c\x6f\167\x65\x64\x2e\40\120\x61\147\x65\40\x63\x61\x6e\x6e\157\164\40\142\x65\x20\x63\x61\143\150\x65\144\56"; $mgkceomocowocqyo = ["\x72\x65\161\x75\145\x73\164\137\x6d\145\x74\150\x6f\144" => $this->ciyocmkwssocskiy()]; oyicskieeaewgwce: goto cceakqgoysacqwmc; wemmseueskwkcwou: $uamcoiueqaamsqma = "\103\x75\163\x74\157\x6d\151\x7a\145\162\40\x70\x72\x65\166\x69\145\x77\x20\151\163\x20\x65\x78\x63\x6c\x75\144\x65\144\56"; cceakqgoysacqwmc: goto ceeqguaoysyaasey; scaimkkukmgoeaya: $uamcoiueqaamsqma = "\101\x64\x6d\151\156\x20\x6f\162\40\x41\x4a\101\x58\40\x55\122\x4c\x20\151\163\x20\145\x78\143\154\x75\144\145\144\x2e"; ceeqguaoysyaasey: goto cugkqmkuyuwwqcec; ekmqouqsgsaukeiq: $uamcoiueqaamsqma = "\120\110\x50\54\x20\x58\115\114\x2c\x20\x6f\162\x20\x58\x53\x4c\40\146\x69\154\145\x20\151\163\40\145\x78\x63\x6c\x75\144\145\x64\56"; cugkqmkuyuwwqcec: goto wceiuqaeywmgscww; ewooakeuigcyuemu: $uamcoiueqaamsqma = "\x52\157\x62\157\164\163\56\x74\170\x74\40\157\x72\40\x2e\150\164\141\x63\x63\x65\163\x73\x20\x66\x69\154\145\x20\151\x73\40\145\x78\143\154\x75\144\145\144\56"; wceiuqaeywmgscww: $yciaosuiyeieceug = true; if (!$uamcoiueqaamsqma) { goto kacgiqwewyeeyyam; } $this->log($uamcoiueqaamsqma, $mgkceomocowocqyo); $yciaosuiyeieceug = false; kacgiqwewyeeyyam: return $yciaosuiyeieceug; } public function ocysssyiuaueqiei($iqaosyayeiuaisqi = null) : bool { return (bool) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\157\x70\x74\x5f\x61\154\x6c\x6f\167\x5f\164\157\137\157\160\x74\151\x6d\151\x7a\145"), false, $iqaosyayeiuaisqi); } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { $yciaosuiyeieceug = true; $this->lastError = []; if (strlen($moooemyaqewumiay) <= 255) { goto uauqmaeueukkmuwa; } if (!$this->ocysssyiuaueqiei("\x6c\x65\166\145\x6c\x2d\61")) { goto cqeceeagmysoyoqg; } if (http_response_code() !== 200) { goto sickakeesgcgwisw; } if ($this->cskwmweqysskwckg("\144\157\156\157\x74\143\141\x63\x68\x65\160\141\147\145") && $this->uykysuaiooyewmsc()) { goto eywcgeccsmquugsw; } if ($this->cskwmweqysskwckg("\167\x70\137\64\60\x34") && $this->kmmyuiwaogukwqqi()) { goto iuieyqacggsykgus; } if ($this->cskwmweqysskwckg("\163\x65\x61\162\143\150") && $this->gouusicsisumuiei()) { goto cqyiukmuqceicqwa; } if ($this->cskwmweqysskwckg("\141\152\x61\x78") && $this->mcgoysmkqsqooceq()) { goto goimywgsweeqsewo; } if ($this->cskwmweqysskwckg("\143\x72\157\156") && $this->auqoeckqueqiiike()) { goto ywmuoigomwwigqea; } if (!($this->cskwmweqysskwckg("\162\x65\x73\164") && $this->okimameeykkqkuww())) { goto qwogeocemuaaasiw; } $this->log("\122\145\163\x74\x20\101\x50\111\40\x52\x65\x71\165\145\163\x74\x20\x69\x73\40\x65\x78\143\x6c\x75\x64\x65\x64\x2e"); $yciaosuiyeieceug = false; qwogeocemuaaasiw: goto cgqkqmiekaageyka; ywmuoigomwwigqea: $this->log("\103\162\x6f\156\x20\122\145\161\165\145\x73\164\40\151\163\x20\x65\x78\143\154\165\144\145\x64\56"); $yciaosuiyeieceug = false; cgqkqmiekaageyka: goto uomwseyiqckeewgo; goimywgsweeqsewo: $this->log("\x41\152\141\x78\x20\122\145\x71\x75\145\163\x74\40\151\x73\x20\x65\x78\x63\154\x75\144\145\144\56"); $yciaosuiyeieceug = false; uomwseyiqckeewgo: goto kmocamaieycogugg; cqyiukmuqceicqwa: $this->log("\123\145\141\162\143\x68\x20\x70\141\147\x65\40\x69\163\x20\145\170\143\x6c\x75\x64\145\x64\56"); $yciaosuiyeieceug = false; kmocamaieycogugg: goto wamkaouokmyoyuqu; iuieyqacggsykgus: $this->log("\x57\120\40\x34\x30\64\40\160\141\147\x65\x20\151\163\40\x65\x78\x63\x6c\x75\x64\145\144\56"); $yciaosuiyeieceug = false; wamkaouokmyoyuqu: goto wwskeewecyukygeg; eywcgeccsmquugsw: $this->log("\104\117\x4e\x4f\124\x43\101\103\110\105\x50\x41\x47\x45\40\151\x73\x20\144\x65\146\151\156\x65\144\56\x20\x50\x61\x67\145\40\143\141\x6e\156\x6f\x74\40\142\145\x20\143\141\x63\150\x65\x64\x2e"); $yciaosuiyeieceug = false; wwskeewecyukygeg: goto wmqegaqemgiggsce; sickakeesgcgwisw: $this->log("\120\x61\147\145\x20\151\x73\x20\x6e\x6f\x74\x20\141\40\62\60\x30\40\x48\124\124\120\40\162\145\x73\x70\157\x6e\163\x65\x20\x61\156\x64\40\x63\141\156\x6e\157\x74\x20\142\x65\x20\143\141\143\150\x65\x64\56"); $yciaosuiyeieceug = false; wmqegaqemgiggsce: goto wggeggkumkwaaesu; cqeceeagmysoyoqg: $this->log("\x6e\x6f\x74\40\x61\154\x6c\157\167\40\164\x6f\40\x6f\160\x74\x69\155\151\172\x65\x20\164\x68\151\x73\x20\160\x61\147\x65\x2e"); $yciaosuiyeieceug = false; wggeggkumkwaaesu: goto gkyguugwwoaqoigy; uauqmaeueukkmuwa: $this->log("\x42\x75\146\x66\x65\x72\x20\143\x6f\x6e\164\x65\156\x74\40\165\156\x64\145\x72\x20\62\x35\x35\x20\x63\x61\162\x61\143\164\x65\162\x73\56\72\40{$moooemyaqewumiay}"); $yciaosuiyeieceug = false; gkyguugwwoaqoigy: return $yciaosuiyeieceug; } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg($ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto kmikwoqwigwuyqae; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]); goto qcuywygiosoqycaa; kmikwoqwigwuyqae: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); qcuywygiosoqycaa: return $umuecysoywoumgwo; } public function okkwqquawsoemamu(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto coaysoeouasaekie; } return $this->eecucukcqkqysiau(__FUNCTION__); coaysoeouasaekie: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto ykymogaqkgaiiiyi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ykymogaqkgaiiiyi: $ucasskoyoewwmmii = ["\x72\x6f\x62\x6f\164\x73\56\164\x78\164", "\56\150\x74\141\143\143\145\163\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto qsyyeoosgigiiequ; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qsyyeoosgigiiequ: qoigaauuokyusmgk: } uusyaguomkqeakkm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto jweeyemwqyqmyuys; } return $this->eecucukcqkqysiau(__FUNCTION__); jweeyemwqyqmyuys: $iyiwooigkweeewey = $this->iqyukmiuoisswoei(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($iyiwooigkweeewey && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $iyiwooigkweeewey, $meyiiwcswqmuggyg))) { goto yegkgccwomcgkumi; } if (!($meyiiwcswqmuggyg[0] === $iyiwooigkweeewey)) { goto mgiwqumikeuieocg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); mgiwqumikeuieocg: yegkgccwomcgkumi: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qikmwaessamuueoe; } return $this->eecucukcqkqysiau(__FUNCTION__); qikmwaessamuueoe: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto aeekgeqawgsmgiqw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); aeekgeqawgsmgiqw: if (!(strtolower($iyiwooigkweeewey) === "\x2f\151\x6e\144\145\x78\56\160\150\160")) { goto imgagmqusgiqissi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); imgagmqusgiqissi: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\x68\160" => 1, "\170\155\x6c" => 1, "\x78\163\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || defined("\x44\x4f\111\116\107\137\101\112\101\x58") && DOING_AJAX; } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\x70\137\143\x75\163\164\x6f\x6d\151\x7a\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\x45\124" => 1, "\110\x45\x41\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto scaciowogmayswms; } return $this->eecucukcqkqysiau(__FUNCTION__); scaciowogmayswms: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto cesaaiguwciccysi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cesaaiguwciccysi: $yccgiaiouekkouay = [ "\154\141\156\x67" => 1, "\x70\x72\145\154\157\x61\144" => 1, "\x6f\160\164\55\160\x72\145\x6c\x6f\141\x64" => 1, "\x70\145\162\x6d\x61\154\151\156\153\x5f\x6e\141\155\x65" => 1, "\154\x70\55\x76\141\162\x69\141\164\x69\x6f\156\55\151\x64" => 1, "\x58\x44\105\x42\125\107\137\x53\x45\x53\123\111\x4f\116\137\123\124\x41\x52\124" => 1, ]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto wskccugoccagaqcw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wskccugoccagaqcw: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\x61\143\150\x65\x5f\x71\x75\145\x72\x79\137\163\x74\162\x69\156\147\x73"); if ($yccgiaiouekkouay) { goto sqyceswygksmmqqa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); sqyceswygksmmqqa: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kqsyqwwscwoswsgk; } return $this->eecucukcqkqysiau(__FUNCTION__); kqsyqwwscwoswsgk: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto yemuiyokmqoqckwu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yemuiyokmqoqckwu: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto qocmmyskykeuwsae; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qocmmyskykeuwsae: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto yquysamwsoyyqcya; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; yquysamwsoyyqcya: syquiiogeymgicuy: } kywmiquiiwmwgooy: if (empty($eiocugauqgouiuyi)) { goto qsycguggqkgywgaq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); qsycguggqkgywgaq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function uykysuaiooyewmsc() : bool { if (!(!defined("\117\120\124\111\x4d\111\132\x41\124\111\x4f\116\137\x44\117\116\x54\x5f\103\x41\x43\x48\105\x5f\120\101\x47\x45") || !OPTIMIZATION_DONT_CACHE_PAGE)) { goto wsyeqyekimescwkq; } return false; wsyeqyekimescwkq: return !apply_filters("\x63\141\x63\150\145\137\157\166\145\x72\162\x69\x64\145\x5f\x64\157\156\164\137\143\141\143\150\x65\x5f\160\x61\x67\x65", false); } public function kmmyuiwaogukwqqi() : bool { $weksiguqgqscsoee = false; if (!function_exists("\x69\163\137\64\x30\64")) { goto gyceukwoyaasuwik; } $weksiguqgqscsoee = is_404(); gyceukwoyaasuwik: return $weksiguqgqscsoee; } public function okimameeykkqkuww() : bool { $cccswkigaicmqkkc = "\167\160\x2d\152\163\x6f\x6e"; if (!function_exists("\162\145\x73\164\137\x67\x65\164\137\x75\162\x6c\x5f\160\x72\x65\146\151\x78")) { goto iiyamaquicwswcyu; } $cccswkigaicmqkkc = rest_get_url_prefix(); iiyamaquicwswcyu: return false !== strpos($this->iqyukmiuoisswoei(), trailingslashit($cccswkigaicmqkkc)); } public function auqoeckqueqiiike() : bool { $weksiguqgqscsoee = false; if (!function_exists("\x77\160\x5f\x64\157\x69\156\x67\x5f\x63\x72\x6f\156")) { goto iiyggeuemwuwqiey; } $weksiguqgqscsoee = wp_doing_cron(); iiyggeuemwuwqiey: return $weksiguqgqscsoee; } public function mcgoysmkqsqooceq() : bool { $weksiguqgqscsoee = false; if (function_exists("\x77\160\137\144\x6f\x69\x6e\147\x5f\x61\152\141\170") && wp_doing_ajax()) { goto aigeoggkowgwwwqg; } if (function_exists("\x69\x73\x5f\141\152\141\x78") && is_ajax()) { goto agokkauammisaqke; } if (!(isset($_SERVER["\x48\124\x54\120\x5f\x58\137\122\x45\121\x55\x45\x53\124\105\x44\137\127\x49\x54\x48"]) && $_SERVER["\x48\124\124\120\137\x58\137\x52\x45\x51\x55\105\x53\x54\105\104\x5f\127\111\x54\x48"] === "\x58\x4d\x4c\110\164\164\160\x52\145\x71\x75\145\x73\164")) { goto omeookmiomoieeee; } $weksiguqgqscsoee = true; omeookmiomoieeee: goto ggoyigsoyccmscum; agokkauammisaqke: $weksiguqgqscsoee = true; ggoyigsoyccmscum: goto pscqogmyseiwuqye; aigeoggkowgwwwqg: $weksiguqgqscsoee = true; pscqogmyseiwuqye: return $weksiguqgqscsoee; } public function gouusicsisumuiei() : bool { if (!(function_exists("\151\163\137\163\x65\x61\x72\x63\x68") && !is_search())) { goto cyyecekuwygaqwcy; } return false; cyyecekuwygaqwcy: return !apply_filters("\x63\141\143\x68\x65\x5f\x63\141\143\150\145\x5f\163\x65\141\x72\x63\x68", false); } public function iqyukmiuoisswoei() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\x51\125\105\123\124\x5f\x55\122\111", ''); if (!$iyiwooigkweeewey) { goto muqeeocooyiosouk; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\x2f"); muqeeocooyiosouk: return $iyiwooigkweeewey; } public function mcqmgiwowqqyiewk() : string { if (!($iyiwooigkweeewey = $this->iqyukmiuoisswoei())) { goto wcagqkquasswioos; } $iyiwooigkweeewey = explode("\77", $iyiwooigkweeewey); $iyiwooigkweeewey = reset($iyiwooigkweeewey); wcagqkquasswioos: return $iyiwooigkweeewey; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\121\125\x45\x53\x54\x5f\115\x45\124\x48\x4f\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto ayggiggmcqckqwom; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\x61\143\150\x65\137\x69\147\x6e\x6f\x72\x65\144\x5f\160\141\162\x61\155\145\164\x65\x72\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto ogywsgmqcgioaoqk; } ksort($eyagkkkqkwcuygso); ogywsgmqcgioaoqk: ayggiggmcqckqwom: return $eyagkkkqkwcuygso; } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto wiiyageyqowkmmko; } $icwicymcioeyeyek["\x70\x65\162\155\x61\154\x69\x6e\153"] = $this->iqyukmiuoisswoei(); $this->uiagwusgwcassqua($uamcoiueqaamsqma, $icwicymcioeyeyek); wiiyageyqowkmmko: } }
