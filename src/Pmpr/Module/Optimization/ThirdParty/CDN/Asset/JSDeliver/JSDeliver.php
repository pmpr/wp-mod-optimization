<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d32f1aa2d0a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset\JSDeliver; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\CDNData; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\Common; use WP_Dependencies; use WP_Scripts; class JSDeliver extends Common { const uaiimqkkiecgmkwm = "\150\x74\x74\x70\163\x3a\57\x2f\x63\x64\x6e\56\x6a\163\144\145\154\x69\166\162\56\156\x65\x74\57"; const qswqmkwmqmggomug = "\x68\x74\x74\x70\163\x3a\57\57\144\x61\164\141\x2e\x6a\163\144\x65\x6c\151\166\162\x2e\x63\x6f\155\x2f\x76\61\57\154\157\157\153\165\x70\57\x68\x61\x73\150\57"; const iqcyaamgiewkaowe = "\57\x5c\57\134\x2a\133\x5c\x73\x5c\123\x5d\52\77\134\x2a\x5c\57\x7c\x5c\x2f\x5c\x2f\x2e\52\x3f\x28\x3f\x3a\134\x6e\174\x24\51\57"; public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\x69\156\x69\164"])->qcsmikeggeemccuu(Process::ANALYZE, [$this, "\x79\161\x67\x69\x71\161\x61\171\141\155\171\x65\145\155\165\x75"])->qcsmikeggeemccuu(Process::akguikecmoggsykg, [$this, "\x61\x73\161\x77\x71\141\x71\157\167\x67\x65\171\x79\x61\171\167"]); } public function init() { Process::symcgieuakksimmu()->cywkaeaiwmweciui(); Process::symcgieuakksimmu()->mciwicaywiwmccoc(); } public function yqgiqqayamyeemuu() { global $wp_scripts, $wp_styles; $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cwkywyqksyucoyia([Constants::igecewwoemccgwsq => $gcskoooiimggowew::gycwocuuococmiqw, Constants::iocouekmygsaocuo => [Constants::euoaaiqkqcqcgeco => Constants::weigugswsgkycqkc]]); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { $uueqecyckaweeyai = $gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, Constants::acyomymuuygeoqks); $iakkeikwceeomgyq = $wp_styles->registered[$uueqecyckaweeyai] ?? $wp_scripts[$uueqecyckaweeyai] ?? false; if (!($iakkeikwceeomgyq->src && ($eeamcawaiqocomwy = $this->giyqgiugumwkewgw($iakkeikwceeomgyq)))) { goto wmcmqmmcweecqmsw; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::iocouekmygsaocuo => $eeamcawaiqocomwy]); wmcmqmmcweecqmsw: yoaewquyogiimyic: } caaygouikgagsssc: } public function asqwqaqowgeyyayw() { $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cyyqcumykgmwakcs(CDNData::gycwocuuococmiqw); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { if (!(time() - strtotime($gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS * 2)) { goto cicegcoqyuoggiwy; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); cicegcoqyuoggiwy: qsmoiwqcuamyuwyu: } aakoeuuosouyeemc: } public function giyqgiugumwkewgw($iakkeikwceeomgyq) : ?string { $myeuaywkqeuqowes = ''; $wsqkocmmsoiquqwm = $iakkeikwceeomgyq->src; if (!$wsqkocmmsoiquqwm) { goto qscqkykqskqmisgw; } $muqcqaqwsaoagykg = []; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $kuuiuigeacouwmaa = strpos($wsqkocmmsoiquqwm, "\57\57"); if (false !== $kuuiuigeacouwmaa) { goto ugcwqacogqoswyse; } $ykscweuoqwqcmsmo = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wsqkocmmsoiquqwm); goto saekesoeysauokkq; ugcwqacogqoswyse: $keccaugmemegoimu = wp_safe_remote_get((0 === $kuuiuigeacouwmaa ? "\150\164\164\160\72" : '') . $wsqkocmmsoiquqwm, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); saekesoeysauokkq: if (!$ykscweuoqwqcmsmo) { goto qgqasacusgwmoegy; } $mgeemcksyiuqaemy = hash("\x73\x68\141\x32\x35\66", $ykscweuoqwqcmsmo); $icwicymcioeyeyek = $this->yaouiiywcouyyimi($mgeemcksyiuqaemy); if (isset($icwicymcioeyeyek[Constants::kekgqaemqessuwmq])) { goto ycweseaccsomkioa; } if (preg_match("\x2f\x77\160\55\x63\157\x6e\164\x65\156\164\x5c\57\x70\154\165\147\151\156\x73\x5c\x2f\50\77\x3c\160\x6c\x75\147\x69\x6e\x3e\133\x5e\134\x2f\135\52\51\x5c\57\50\77\x3c\146\x69\x6c\145\76\x2e\52\51\x2f\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto cewyaqiqmmwmauce; } if (!preg_match("\x2f\167\160\x2d\x63\x6f\x6e\164\x65\x6e\164\134\57\164\150\x65\x6d\145\x73\134\x2f\x28\x3f\74\164\x68\145\155\x65\76\x5b\x5e\134\x2f\135\x2a\51\134\57\x28\x3f\74\x66\x69\154\x65\x3e\x2e\52\x29\x2f\151", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto kucqcqeesaiacekm; } if (!($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto aaiymmkqmocgakei; } $mumucmmgemqwqiia = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]); if (!$mumucmmgemqwqiia->exists()) { goto acisycocoswkekik; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\x77\x70\x2f\164\x68\x65\155\145\x73\x2f{$meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]}\x2f{$mumucmmgemqwqiia->get(Constants::auugqowqueaocgsu)}\57{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto cqaeiesyciakcagu; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; cqaeiesyciakcagu: acisycocoswkekik: aaiymmkqmocgakei: kucqcqeesaiacekm: goto scyqmcegwikkoesw; cewyaqiqmmwmauce: if (!($meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto gemwkqocygssmequ; } $plugin_file = ABSPATH . "\x77\x70\55\x63\157\x6e\x74\x65\x6e\x74\x2f\x70\154\165\x67\151\x6e\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\56\160\150\160"; if (file_exists($plugin_file)) { goto csggsqueaqmwgwkk; } $php_files = glob(ABSPATH . "\167\160\x2d\143\x6f\x6e\x74\145\156\x74\57\x70\154\165\x67\151\x6e\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\57\x2a\56\160\x68\160"); foreach ($php_files as $mkomwsiykqigmqca) { $muqcqaqwsaoagykg = get_plugin_data($mkomwsiykqigmqca); if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto esqiocgueosoksyq; } goto sqmiymiemeegegic; esqiocgueosoksyq: csqakuuiyywassgw: } sqmiymiemeegegic: goto sescaagayikiggyq; csggsqueaqmwgwkk: $muqcqaqwsaoagykg = get_plugin_data($plugin_file); sescaagayikiggyq: if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto egmocemomockemia; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\x77\160\57\160\x6c\165\147\151\156\163\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\57\164\141\147\x73\x2f{$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]}\x2f{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto wwwggoemicgwwasy; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; wwwggoemicgwwasy: egmocemomockemia: gemwkqocygssmequ: scyqmcegwikkoesw: goto ciwggusyecgskagy; ycweseaccsomkioa: if (!("\127\x6f\x72\x64\120\162\x65\163\x73\x2f\127\x6f\162\x64\x50\x72\145\x73\x73" === $icwicymcioeyeyek[Constants::NAME])) { goto wycuyiukyceccaow; } $icwicymcioeyeyek[Constants::auugqowqueaocgsu] = get_bloginfo(Constants::auugqowqueaocgsu); wycuyiukyceccaow: $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "{$icwicymcioeyeyek[Constants::squoamkioomemiyi]}\x2f{$icwicymcioeyeyek[Constants::NAME]}\100{$icwicymcioeyeyek[Constants::auugqowqueaocgsu]}{$icwicymcioeyeyek[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto meseuuacmkuowqau; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; meseuuacmkuowqau: ciwggusyecgskagy: if ($this->cgsqaegiswcuoggi($ykscweuoqwqcmsmo)) { goto sccqekuwywiisami; } $myeuaywkqeuqowes = substr_replace($myeuaywkqeuqowes, "\x2e\x6d\x69\x6e", strrpos($myeuaywkqeuqowes, "\x2e"), 0); sccqekuwywiisami: $gqqycaoyaweqigmi = wp_check_filetype($myeuaywkqeuqowes); $wuayakmyggcomiuy = wp_check_filetype($wsqkocmmsoiquqwm); if (!($wuayakmyggcomiuy["\x65\x78\x74"] !== $gqqycaoyaweqigmi["\145\170\x74"])) { goto eokcuuwqaomkooag; } $myeuaywkqeuqowes = ''; eokcuuwqaomkooag: qgqasacusgwmoegy: qscqkykqskqmisgw: return $myeuaywkqeuqowes; } private function cgsqaegiswcuoggi($ykscweuoqwqcmsmo) : bool { $ymacoouqwcqwwagu = preg_replace(self::iqcyaamgiewkaowe, '', $ykscweuoqwqcmsmo); return strlen($ymacoouqwcqwwagu) / count(explode("\12", $ymacoouqwcqwwagu)) > 200; } private function yaouiiywcouyyimi(string $mgeemcksyiuqaemy) : array { $sogksuscggsicmac = []; $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk(self::qswqmkwmqmggomug . $mgeemcksyiuqaemy, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); if (!$ykscweuoqwqcmsmo) { goto ksqgwiceoomkuuiy; } $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ykscweuoqwqcmsmo); $sogksuscggsicmac["\x73\x68\x61\x32\65\x36"] = $mgeemcksyiuqaemy; ksqgwiceoomkuuiy: return $sogksuscggsicmac; } public function qycuagacqaecigyi(string $eeamcawaiqocomwy, string $mgeemcksyiuqaemy) : bool { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->awemwqyugsqgcsyu($eeamcawaiqocomwy, $this->eeykuoewogequiii()); if (!(is_wp_error($keccaugmemegoimu) || (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) !== 200)) { goto gkoiyaagwgycysim; } return false; gkoiyaagwgycysim: $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $kyquyseskckkouak = hash("\163\x68\141\x32\65\66", $ykscweuoqwqcmsmo); return $kyquyseskckkouak === $mgeemcksyiuqaemy; } public function agkwcckksaegcsce(?string $ogomymegcoacqisg) : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($yyauwyaeewsickwk->skksumsyamssouqc($ogomymegcoacqisg, "\57\x2f")) { goto swmgucaogosuueug; } $acqcekoeswseswws = ltrim($ogomymegcoacqisg, "\57"); goto uwsmcsiiisuocgwg; swmgucaogosuueug: $cgmkimaosyyuqeyg = site_url(); if (str_starts_with($ogomymegcoacqisg, $cgmkimaosyyuqeyg)) { goto ysssquieawyysiyc; } $acqcekoeswseswws = $ogomymegcoacqisg; goto yomoeykcqyukscmi; ysssquieawyysiyc: $acqcekoeswseswws = ltrim(str_replace($cgmkimaosyyuqeyg, '', $ogomymegcoacqisg), "\x2f"); yomoeykcqyukscmi: uwsmcsiiisuocgwg: return $acqcekoeswseswws; } private function eeykuoewogequiii() : array { return ["\150\145\141\x64\145\162\x73" => ["\125\163\x65\162\55\x41\147\145\156\164" => "\120\115\120\122\40\117\160\x74\x69\x6d\151\172\x61\164\x69\x6f\156\x20\115\x6f\144\x75\154\145\57" . $this->couwksyewgyeooqe()->gikwwgqmwccescgy()]]; } }
