<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65310fbf7f1f7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Buffer; use Pmpr\Common\Foundation\Helper\Traits\HelperTrait; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Wrapper\Traits\WrapperTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, HelperTrait, WrapperTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\x72\x69" => 1, "\141\x6a\x61\x78" => 1, "\143\162\x6f\x6e" => 1, "\x72\145\x73\x74" => 1, "\x77\x70\137\64\60\x34" => 1, "\x73\145\141\162\x63\x68" => 1, "\x71\x75\x65\162\171\137\x73\x74\162\x69\x6e\147" => 1, "\151\147\156\x6f\x72\x65\x64\137\165\x72\x6c\163" => 1, "\x64\x6f\x6e\157\164\143\x61\143\150\x65\160\141\x67\145" => 1, "\162\145\152\x65\143\164\x65\x64\137\143\157\x6f\153\151\x65" => 1, "\x6d\141\x6e\144\141\x74\x6f\x72\171\x5f\143\157\157\x6b\151\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; $ywmkwiwkosakssii = wp_parse_args($ywmkwiwkosakssii, ["\147\145\164" => is_array($_GET) && $_GET ? $_GET : [], "\x70\157\x73\164" => is_array($_POST) && $_POST ? $_POST : [], "\164\145\163\164" => [], "\143\157\x6f\x6b\x69\145\x73" => is_array($_COOKIE) && $_COOKIE ? $_COOKIE : []]); if ($ywmkwiwkosakssii["\164\145\x73\164"]) { goto ukigmkeewuqomooc; } $this->okkwqquawsoemamu((array) $ywmkwiwkosakssii["\x74\145\163\x74"]); ukigmkeewuqomooc: $this->get = $ywmkwiwkosakssii["\x67\145\x74"] && is_array($ywmkwiwkosakssii["\x67\x65\x74"]) ? $ywmkwiwkosakssii["\147\145\164"] : []; $this->post = $ywmkwiwkosakssii["\x70\157\x73\x74"] && is_array($ywmkwiwkosakssii["\x70\157\163\x74"]) ? $ywmkwiwkosakssii["\160\x6f\163\164"] : []; $this->cookies = $ywmkwiwkosakssii["\x63\x6f\157\153\x69\x65\x73"] && is_array($ywmkwiwkosakssii["\143\157\157\153\x69\x65\x73"]) ? $ywmkwiwkosakssii["\x63\x6f\x6f\x6b\x69\x65\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto wwgikwuigiiqsswq; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\160\x5f\x63\165\163\x74\157\x6d\151\x7a\x65" => '']); wwgikwuigiiqsswq: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { $uamcoiueqaamsqma = ''; $mgkceomocowocqyo = []; $this->lastError = []; if ($this->kgkoeoeseyuugaao()) { goto uckusgwkoycmkeam; } if ($this->gymgcceeqssmesiu()) { goto ikukqooiowqywyqo; } if ($this->goecwaaykqoaaagg()) { goto gqeoaceyoiicoaec; } if ($this->sgsscqasgeyeicoe()) { goto msmmiaumiasmsiog; } if (!$this->gooeyogikcusgwuu()) { goto wicuauokauykwoeu; } if (!$this->cskwmweqysskwckg()) { goto kcwgiwimgqesukqu; } $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if (!isset($uiewakwqscemywuo["\x73\x75\143\x63\x65\x73\x73"]) || !$uiewakwqscemywuo["\x73\165\x63\x63\x65\x73\163"]) { goto ggsugekocmsukuci; } if ($this->cskwmweqysskwckg("\161\165\x65\x72\171\137\x73\x74\x72\151\x6e\x67") && !$this->koguieumooaesyww()) { goto cwmuqmoeauqcewoy; } if ($this->cskwmweqysskwckg("\162\x65\x6a\145\143\164\x65\x64\137\143\157\x6f\153\151\145") && $this->cokqaygwwygweuyk()) { goto qoaawmmcqyacokws; } if ($this->cskwmweqysskwckg("\x69\x67\156\x6f\162\x65\x64\137\165\162\154\x73") && $this->sywgeyscigqsokyg()) { goto uugiuqkesegaamqw; } if (!($this->cskwmweqysskwckg("\162\145\x73\x74") && $this->okimameeykkqkuww())) { goto seyygcwcaogkmaqe; } $uamcoiueqaamsqma = "\111\x67\x6e\x6f\162\x65\x64\40\x75\x72\154\40\162\145\x73\x74\x20\x72\145\161\165\x65\x73\164\x73\x2e"; seyygcwcaogkmaqe: goto ykcmomsiayaymysm; uugiuqkesegaamqw: $uamcoiueqaamsqma = "\111\x67\156\157\x72\145\144\40\x75\x72\x6c\40\x66\157\x75\x6e\x64\56"; ykcmomsiayaymysm: goto uwyeycaywowwiquu; qoaawmmcqyacokws: $uamcoiueqaamsqma = "\105\170\143\154\165\x64\x65\144\40\x63\x6f\157\153\151\x65\40\146\157\165\156\x64\56"; $mgkceomocowocqyo = ["\x65\x78\x63\x6c\x75\144\x65\144\x5f\x63\157\x6f\x6b\151\x65\x73" => $this->cokqaygwwygweuyk()]; uwyeycaywowwiquu: goto eiecgqokmuekaesc; cwmuqmoeauqcewoy: $uamcoiueqaamsqma = "\121\165\x65\162\171\x20\x73\164\162\x69\x6e\x67\40\x55\x52\x4c\40\151\163\40\145\x78\x63\154\x75\x64\x65\x64\x2e"; eiecgqokmuekaesc: goto ceosmkqgqgwsowwg; ggsugekocmsukuci: $uamcoiueqaamsqma = "\x4e\157\x20\143\157\x6e\146\x69\147\40\146\151\154\145\40\146\x6f\x75\x6e\x64\x2e"; $mgkceomocowocqyo = ["\x63\x6f\156\146\151\x67\137\160\141\x74\150" => $uiewakwqscemywuo["\x70\x61\164\x68"]]; ceosmkqgqgwsowwg: kcwgiwimgqesukqu: goto gcecieuocqawmgci; wicuauokauykwoeu: $uamcoiueqaamsqma = "\x52\145\161\x75\x65\163\164\x20\x6d\x65\x74\150\x6f\144\40\x69\163\40\156\157\164\40\141\154\154\x6f\167\145\x64\56\40\x50\141\x67\x65\x20\x63\x61\x6e\156\x6f\x74\40\x62\x65\40\x63\x61\x63\x68\x65\144\x2e"; $mgkceomocowocqyo = ["\162\x65\x71\x75\145\x73\x74\137\155\x65\x74\150\x6f\x64" => $this->ciyocmkwssocskiy()]; gcecieuocqawmgci: goto oksqsucimimsswcg; msmmiaumiasmsiog: $uamcoiueqaamsqma = "\103\x75\x73\164\x6f\155\x69\172\x65\x72\x20\160\162\x65\x76\151\145\167\40\x69\163\x20\145\170\143\154\165\x64\x65\x64\56"; oksqsucimimsswcg: goto kkckyqmcyussauma; gqeoaceyoiicoaec: $uamcoiueqaamsqma = "\101\144\155\151\x6e\x20\x6f\x72\x20\101\112\101\x58\x20\x55\122\x4c\x20\151\x73\x20\x65\170\x63\154\165\144\x65\x64\x2e"; kkckyqmcyussauma: goto cciakcwuweqmcose; ikukqooiowqywyqo: $uamcoiueqaamsqma = "\120\x48\120\54\40\130\115\114\54\40\x6f\162\40\130\123\x4c\x20\146\x69\x6c\x65\40\151\x73\40\x65\x78\x63\154\x75\x64\x65\144\x2e"; cciakcwuweqmcose: goto gscyiqmmegqmqcoe; uckusgwkoycmkeam: $uamcoiueqaamsqma = "\122\157\142\157\x74\163\x2e\x74\x78\x74\40\157\x72\x20\x2e\x68\164\x61\143\143\145\163\x73\x20\146\151\x6c\145\40\151\x73\x20\x65\x78\x63\x6c\x75\144\145\x64\x2e"; gscyiqmmegqmqcoe: $yciaosuiyeieceug = true; if (!$uamcoiueqaamsqma) { goto mieoguuqiwqioeqa; } $this->log($uamcoiueqaamsqma, $mgkceomocowocqyo); $this->caokeucsksukesyo()->gyecsegqciqykomu()->wwckmeoskuagomki("\x50\122\x5f\117\120\124\137\x44\117\x4e\x54\137\x4f\x50\x54\111\x4d\111\x5a\105\137\120\x41\x47\105", 1); $yciaosuiyeieceug = false; mieoguuqiwqioeqa: return $yciaosuiyeieceug; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { $uamcoiueqaamsqma = ''; $this->lastError = []; if (strlen($moooemyaqewumiay) <= 255) { goto gqaqamewqeaqwcia; } if (http_response_code() !== 200) { goto ewsigoeswimiueqe; } if ($this->cskwmweqysskwckg("\x64\x6f\x6e\157\164\x6f\x70\x74\151\x6d\151\x7a\145\160\141\147\x65") && $this->emeiqaoqwawaeaku()) { goto iomwkkieqcswkkaw; } if ($this->cskwmweqysskwckg("\x77\160\137\64\60\64") && $this->kmmyuiwaogukwqqi()) { goto cuayqmasemsqsume; } if ($this->cskwmweqysskwckg("\x73\145\x61\162\x63\x68") && $this->gouusicsisumuiei()) { goto gcqssckowmywoesw; } if ($this->cskwmweqysskwckg("\141\152\141\170") && $this->mcgoysmkqsqooceq()) { goto icoiqskygugkgmkm; } if ($this->cskwmweqysskwckg("\x63\162\157\x6e") && $this->auqoeckqueqiiike()) { goto swicauyqusmgeccu; } if (!($this->cskwmweqysskwckg("\162\145\163\164") && $this->okimameeykkqkuww())) { goto qosswumywsaeyqus; } $uamcoiueqaamsqma = "\122\x65\163\164\x20\x41\120\111\40\x52\145\x71\165\145\163\x74\x20\x69\163\x20\x65\170\143\x6c\165\x64\x65\144\x2e"; qosswumywsaeyqus: goto maguoggkqamaiuag; swicauyqusmgeccu: $uamcoiueqaamsqma = "\x43\x72\x6f\156\x20\122\145\161\x75\x65\163\164\40\x69\x73\x20\145\x78\143\154\x75\x64\x65\144\x2e"; maguoggkqamaiuag: goto kocaieyauyiqmyiy; icoiqskygugkgmkm: $uamcoiueqaamsqma = "\x41\152\x61\170\x20\x52\145\x71\x75\145\x73\x74\x20\151\x73\x20\145\x78\143\154\165\x64\145\144\56"; kocaieyauyiqmyiy: goto eekkcooqswqouoei; gcqssckowmywoesw: $uamcoiueqaamsqma = "\x53\145\x61\162\x63\150\40\160\x61\147\x65\40\x69\x73\40\x65\170\x63\x6c\165\x64\145\x64\x2e"; eekkcooqswqouoei: goto igmawmwssyskqqag; cuayqmasemsqsume: $uamcoiueqaamsqma = "\127\120\x20\x34\60\64\x20\x70\141\147\x65\x20\x69\163\40\145\x78\143\x6c\165\x64\145\x64\56"; igmawmwssyskqqag: goto eussqkkimciywios; iomwkkieqcswkkaw: $uamcoiueqaamsqma = "\104\117\x4e\x54\x4f\x50\x54\x49\115\x49\x5a\x45\x44\x50\101\107\x45\40\x69\163\40\x64\x65\146\x69\x6e\145\144\56\x20\120\141\147\145\x20\x63\141\x6e\156\x6f\x74\x20\142\x65\40\143\141\x63\150\145\x64\56"; eussqkkimciywios: goto gaskcgoeywuyukke; ewsigoeswimiueqe: $uamcoiueqaamsqma = "\120\141\x67\x65\x20\151\163\40\156\x6f\x74\x20\141\40\x32\60\x30\x20\x48\124\x54\120\x20\x72\x65\163\x70\157\156\163\x65\40\x61\x6e\144\x20\x63\141\156\156\157\164\40\x62\x65\x20\x63\141\x63\x68\x65\144\x2e"; gaskcgoeywuyukke: goto okuqsqaiwwiigmyu; gqaqamewqeaqwcia: $uamcoiueqaamsqma = "\x42\x75\146\146\145\162\40\x63\157\156\164\145\x6e\164\x20\165\156\144\x65\x72\40\x32\65\x35\x20\x63\x68\x61\162\x61\143\164\x65\162\x73\x2e\x3a\x20{$moooemyaqewumiay}"; okuqsqaiwwiigmyu: $yciaosuiyeieceug = true; if (!$uamcoiueqaamsqma) { goto ksiwgckusukisueg; } $this->log($uamcoiueqaamsqma); $this->caokeucsksukesyo()->gyecsegqciqykomu()->wwckmeoskuagomki("\120\x52\x5f\117\x50\124\137\104\x4f\x4e\124\x5f\117\120\124\x49\x4d\x49\x5a\x45\x5f\x50\x41\107\105", 1); $yciaosuiyeieceug = false; ksiwgckusukisueg: return $yciaosuiyeieceug; } public function ocysssyiuaueqiei($iqaosyayeiuaisqi = null) : bool { return (bool) $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x6f\160\164\137\141\x6c\154\x6f\167\137\x74\157\137\157\160\164\151\155\151\172\145", false, $iqaosyayeiuaisqi); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg($ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto sgkqgucguyccaaki; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]); goto omuemegmkesqgwys; sgkqgucguyccaaki: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); omuemegmkesqgwys: return $umuecysoywoumgwo; } public function okkwqquawsoemamu(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto geyiosucqswaeasw; } return $this->eecucukcqkqysiau(__FUNCTION__); geyiosucqswaeasw: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto cmsiuimsiycomyay; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cmsiuimsiycomyay: $ucasskoyoewwmmii = ["\x72\157\142\157\x74\163\56\x74\x78\164", "\56\150\x74\141\x63\x63\x65\x73\163"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto gmeiuoeewucukque; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gmeiuoeewucukque: ccgsycueagwegqeu: } qmqmskywcgiqgygm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto sayqggaieocmskko; } return $this->eecucukcqkqysiau(__FUNCTION__); sayqggaieocmskko: $iyiwooigkweeewey = $this->iqyukmiuoisswoei(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($iyiwooigkweeewey && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $iyiwooigkweeewey, $meyiiwcswqmuggyg))) { goto ycecaauekkiqacuu; } if (!($meyiiwcswqmuggyg[0] === $iyiwooigkweeewey)) { goto qmguoqeawegcoeoa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qmguoqeawegcoeoa: ycecaauekkiqacuu: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ceaamccscgcmqgka; } return $this->eecucukcqkqysiau(__FUNCTION__); ceaamccscgcmqgka: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto omumkeywqqogwwue; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); omumkeywqqogwwue: if (!(strtolower($iyiwooigkweeewey) === "\x2f\x69\156\144\145\x78\56\160\x68\160")) { goto igyesgemqesackws; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); igyesgemqesackws: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\x68\x70" => 1, "\170\x6d\154" => 1, "\x78\x73\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || defined("\104\117\111\116\107\x5f\x41\x4a\x41\130") && DOING_AJAX; } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\x70\137\143\165\163\x74\157\x6d\151\172\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\105\x54" => 1, "\110\x45\x41\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wiaymoucakyaikii; } return $this->eecucukcqkqysiau(__FUNCTION__); wiaymoucakyaikii: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto ociesuicgmkekcue; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ociesuicgmkekcue: $yccgiaiouekkouay = [ "\x6c\141\x6e\x67" => 1, "\160\x72\145\x6c\157\141\x64" => 1, "\157\160\164\x2d\x70\162\145\154\157\141\144" => 1, "\160\145\162\x6d\x61\154\x69\x6e\153\137\x6e\141\155\x65" => 1, "\154\x70\55\x76\x61\162\151\141\x74\151\157\x6e\55\151\x64" => 1, "\130\x44\105\x42\x55\107\x5f\123\x45\x53\123\x49\117\116\137\123\x54\101\x52\124" => 1, ]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto ymucaguacemwsgsi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ymucaguacemwsgsi: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\141\x63\150\145\x5f\161\165\x65\162\171\137\x73\164\x72\151\x6e\147\163"); if ($yccgiaiouekkouay) { goto qiikwossequwiuom; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qiikwossequwiuom: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gaouaiemokqqgssw; } return $this->eecucukcqkqysiau(__FUNCTION__); gaouaiemokqqgssw: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto wqwmuuicoqigqwyc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wqwmuuicoqigqwyc: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto oqgymyiwckkwueuw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oqgymyiwckkwueuw: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto ywokggauuiosegog; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; ywokggauuiosegog: yqqseqskcqeqkacm: } qywkykqkeeuccoui: if (empty($eiocugauqgouiuyi)) { goto uoewiggumomegksg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); uoewiggumomegksg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function emeiqaoqwawaeaku() : bool { $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); return !$gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x6f\160\164\137\157\x76\145\162\162\x69\144\x65\x5f\x64\x6f\156\x74\x5f\x6f\x70\x74\x69\x6d\151\172\145\x5f\160\141\147\x65", $gsyaugcyoggmiuwy->cmaecekuqkwmemms("\x50\x52\x5f\117\120\124\x5f\x44\x4f\116\124\137\117\x50\124\111\115\111\132\x45\137\x50\x41\107\x45", false)); } public function kmmyuiwaogukwqqi() : bool { $weksiguqgqscsoee = false; if (!function_exists("\x69\x73\137\x34\x30\64")) { goto sockocsycmkaeosg; } $weksiguqgqscsoee = is_404(); sockocsycmkaeosg: return $weksiguqgqscsoee; } public function okimameeykkqkuww() : bool { $cccswkigaicmqkkc = "\x77\x70\55\152\x73\x6f\156"; if (!function_exists("\162\x65\163\164\137\147\x65\164\137\165\162\x6c\x5f\x70\162\x65\146\x69\x78")) { goto ugkwqaywmwqucoeo; } $cccswkigaicmqkkc = rest_get_url_prefix(); ugkwqaywmwqucoeo: return false !== strpos($this->iqyukmiuoisswoei(), trailingslashit($cccswkigaicmqkkc)); } public function auqoeckqueqiiike() : bool { $weksiguqgqscsoee = false; if (!function_exists("\x77\160\x5f\x64\x6f\x69\x6e\147\137\143\x72\157\x6e")) { goto syisomgawcsqeemk; } $weksiguqgqscsoee = wp_doing_cron(); syisomgawcsqeemk: return $weksiguqgqscsoee; } public function mcgoysmkqsqooceq() : bool { $weksiguqgqscsoee = false; if (function_exists("\x77\x70\137\x64\157\151\156\x67\x5f\x61\x6a\141\x78") && wp_doing_ajax()) { goto oaqeoqsksuyyggmg; } if (function_exists("\151\x73\137\141\152\x61\x78") && is_ajax()) { goto kwasqmcyiswoaiuu; } if (!(isset($_SERVER["\110\124\124\120\137\x58\137\122\x45\121\125\x45\123\x54\x45\104\137\127\x49\124\x48"]) && $_SERVER["\110\x54\x54\120\137\x58\x5f\x52\x45\x51\125\105\x53\124\105\x44\x5f\127\x49\124\110"] === "\130\x4d\114\110\x74\x74\160\x52\145\161\165\x65\x73\x74")) { goto asoecuscmsyusmkg; } $weksiguqgqscsoee = true; asoecuscmsyusmkg: goto kiskwawumeiiieuk; kwasqmcyiswoaiuu: $weksiguqgqscsoee = true; kiskwawumeiiieuk: goto kkmuuoscccmokkiw; oaqeoqsksuyyggmg: $weksiguqgqscsoee = true; kkmuuoscccmokkiw: return $weksiguqgqscsoee; } public function gouusicsisumuiei() : bool { if (!(function_exists("\x69\163\x5f\x73\145\141\162\x63\150") && !is_search())) { goto awuwuuuagqysukku; } return false; awuwuuuagqysukku: return !$this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x6f\160\164\137\x6f\x70\x74\x69\x6d\x69\x7a\x65\x5f\163\x65\141\x72\x63\150", false); } public function iqyukmiuoisswoei() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\121\x55\105\x53\x54\x5f\125\122\111", ''); if (!$iyiwooigkweeewey) { goto miugmimciywcgswm; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\57"); miugmimciywcgswm: return $iyiwooigkweeewey; } public function mcqmgiwowqqyiewk() : string { if (!($iyiwooigkweeewey = $this->iqyukmiuoisswoei())) { goto aqekkeqmmewoyawu; } $iyiwooigkweeewey = explode("\77", $iyiwooigkweeewey); $iyiwooigkweeewey = reset($iyiwooigkweeewey); aqekkeqmmewoyawu: return $iyiwooigkweeewey; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\121\125\105\x53\x54\x5f\115\105\x54\x48\117\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto emeeocqaisksyioq; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\141\x63\x68\x65\137\151\147\156\x6f\x72\x65\144\x5f\x70\141\x72\141\x6d\x65\x74\145\162\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto mcqwuawosciucemq; } ksort($eyagkkkqkwcuygso); mcqwuawosciucemq: emeeocqaisksyioq: return $eyagkkkqkwcuygso; } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto maggecymmmesqmqs; } $icwicymcioeyeyek["\x70\x65\162\x6d\x61\154\x69\156\x6b"] = $this->iqyukmiuoisswoei(); $this->uiagwusgwcassqua($uamcoiueqaamsqma, $icwicymcioeyeyek); maggecymmmesqmqs: } }
