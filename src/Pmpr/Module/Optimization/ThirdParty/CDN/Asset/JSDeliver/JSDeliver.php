<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d22d2c9f327             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset\JSDeliver; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\CDNData; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\Common; use WP_Dependencies; use WP_Scripts; class JSDeliver extends Common { const uaiimqkkiecgmkwm = "\x68\x74\164\x70\x73\72\x2f\57\143\x64\156\56\152\x73\x64\x65\x6c\151\x76\x72\x2e\156\145\x74\x2f"; const qswqmkwmqmggomug = "\150\164\164\160\x73\x3a\x2f\57\144\x61\164\141\56\152\x73\x64\x65\154\x69\x76\162\56\x63\x6f\x6d\x2f\166\61\57\154\x6f\157\x6b\x75\160\x2f\x68\x61\163\150\57"; const iqcyaamgiewkaowe = "\57\x5c\57\x5c\52\x5b\134\x73\134\x53\135\x2a\77\x5c\52\x5c\x2f\x7c\x5c\x2f\134\x2f\x2e\x2a\x3f\50\x3f\x3a\134\156\x7c\44\51\x2f"; public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\151\x6e\x69\164"])->qcsmikeggeemccuu(Process::ANALYZE, [$this, "\x79\x71\x67\x69\x71\161\x61\x79\141\x6d\x79\145\x65\155\x75\165"])->qcsmikeggeemccuu(Process::akguikecmoggsykg, [$this, "\x61\x73\x71\x77\x71\141\161\x6f\167\147\x65\171\171\x61\171\x77"]); } public function init() { Process::symcgieuakksimmu()->cywkaeaiwmweciui(); Process::symcgieuakksimmu()->mciwicaywiwmccoc(); } public function yqgiqqayamyeemuu() { global $wp_scripts, $wp_styles; $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cwkywyqksyucoyia([Constants::igecewwoemccgwsq => $gcskoooiimggowew::gycwocuuococmiqw, Constants::iocouekmygsaocuo => [Constants::euoaaiqkqcqcgeco => Constants::weigugswsgkycqkc]]); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { $uueqecyckaweeyai = $gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, Constants::acyomymuuygeoqks); $iakkeikwceeomgyq = $wp_styles->registered[$uueqecyckaweeyai] ?? $wp_scripts[$uueqecyckaweeyai] ?? false; if (!($iakkeikwceeomgyq->src && ($eeamcawaiqocomwy = $this->giyqgiugumwkewgw($iakkeikwceeomgyq)))) { goto ggaucuaykyuiikem; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::iocouekmygsaocuo => $eeamcawaiqocomwy]); ggaucuaykyuiikem: iqwsqykoueqyyomy: } coogyackikgmecic: } public function asqwqaqowgeyyayw() { $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cyyqcumykgmwakcs(CDNData::gycwocuuococmiqw); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { if (!(time() - strtotime($gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS * 2)) { goto yoaewquyogiimyic; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); yoaewquyogiimyic: caaygouikgagsssc: } egikqoaqqegawugu: } public function giyqgiugumwkewgw($iakkeikwceeomgyq) : ?string { $myeuaywkqeuqowes = ''; $wsqkocmmsoiquqwm = $iakkeikwceeomgyq->src; if (!$wsqkocmmsoiquqwm) { goto ciwggusyecgskagy; } $muqcqaqwsaoagykg = []; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $kuuiuigeacouwmaa = strpos($wsqkocmmsoiquqwm, "\x2f\57"); if (false !== $kuuiuigeacouwmaa) { goto wmcmqmmcweecqmsw; } $ykscweuoqwqcmsmo = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wsqkocmmsoiquqwm); goto aakoeuuosouyeemc; wmcmqmmcweecqmsw: $keccaugmemegoimu = wp_safe_remote_get((0 === $kuuiuigeacouwmaa ? "\x68\x74\x74\x70\x3a" : '') . $wsqkocmmsoiquqwm, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); aakoeuuosouyeemc: if (!$ykscweuoqwqcmsmo) { goto ycweseaccsomkioa; } $mgeemcksyiuqaemy = hash("\x73\150\141\62\x35\x36", $ykscweuoqwqcmsmo); $icwicymcioeyeyek = $this->yaouiiywcouyyimi($mgeemcksyiuqaemy); if (isset($icwicymcioeyeyek[Constants::kekgqaemqessuwmq])) { goto aaiymmkqmocgakei; } if (preg_match("\x2f\167\160\x2d\143\157\x6e\164\x65\156\164\x5c\57\160\154\x75\147\x69\156\x73\x5c\x2f\x28\x3f\74\x70\x6c\165\x67\x69\156\76\x5b\136\x5c\57\135\x2a\x29\x5c\57\x28\x3f\74\146\x69\154\x65\x3e\x2e\x2a\x29\57\151", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto cqaeiesyciakcagu; } if (!preg_match("\57\x77\160\55\x63\x6f\x6e\x74\x65\x6e\164\134\57\x74\150\x65\155\145\163\x5c\x2f\50\x3f\x3c\164\x68\145\x6d\x65\x3e\x5b\136\x5c\57\135\52\51\134\x2f\x28\x3f\x3c\x66\151\154\145\x3e\56\52\51\57\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto gemwkqocygssmequ; } if (!($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto egmocemomockemia; } $mumucmmgemqwqiia = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]); if (!$mumucmmgemqwqiia->exists()) { goto wwwggoemicgwwasy; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\x77\160\x2f\164\150\145\x6d\x65\x73\x2f{$meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]}\x2f{$mumucmmgemqwqiia->get(Constants::auugqowqueaocgsu)}\57{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto sescaagayikiggyq; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; sescaagayikiggyq: wwwggoemicgwwasy: egmocemomockemia: gemwkqocygssmequ: goto acisycocoswkekik; cqaeiesyciakcagu: if (!($meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto csggsqueaqmwgwkk; } $plugin_file = ABSPATH . "\167\x70\55\x63\x6f\156\x74\145\156\164\x2f\x70\x6c\x75\147\151\156\163\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\57{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2e\160\150\160"; if (file_exists($plugin_file)) { goto meseuuacmkuowqau; } $php_files = glob(ABSPATH . "\167\160\x2d\143\x6f\x6e\x74\x65\156\164\57\x70\x6c\165\147\151\156\163\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\57\52\56\160\150\160"); foreach ($php_files as $mkomwsiykqigmqca) { $muqcqaqwsaoagykg = get_plugin_data($mkomwsiykqigmqca); if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto wycuyiukyceccaow; } goto ugcwqacogqoswyse; wycuyiukyceccaow: saekesoeysauokkq: } ugcwqacogqoswyse: goto sqmiymiemeegegic; meseuuacmkuowqau: $muqcqaqwsaoagykg = get_plugin_data($plugin_file); sqmiymiemeegegic: if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto esqiocgueosoksyq; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\x77\160\x2f\x70\x6c\165\x67\151\x6e\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f\x74\141\147\x73\57{$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]}\57{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto csqakuuiyywassgw; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; csqakuuiyywassgw: esqiocgueosoksyq: csggsqueaqmwgwkk: acisycocoswkekik: goto kucqcqeesaiacekm; aaiymmkqmocgakei: if (!("\x57\x6f\162\x64\x50\162\145\163\163\57\x57\x6f\162\x64\x50\x72\145\163\163" === $icwicymcioeyeyek[Constants::NAME])) { goto qsmoiwqcuamyuwyu; } $icwicymcioeyeyek[Constants::auugqowqueaocgsu] = get_bloginfo(Constants::auugqowqueaocgsu); qsmoiwqcuamyuwyu: $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "{$icwicymcioeyeyek[Constants::squoamkioomemiyi]}\x2f{$icwicymcioeyeyek[Constants::NAME]}\x40{$icwicymcioeyeyek[Constants::auugqowqueaocgsu]}{$icwicymcioeyeyek[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto cicegcoqyuoggiwy; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; cicegcoqyuoggiwy: kucqcqeesaiacekm: if ($this->cgsqaegiswcuoggi($ykscweuoqwqcmsmo)) { goto cewyaqiqmmwmauce; } $myeuaywkqeuqowes = substr_replace($myeuaywkqeuqowes, "\x2e\155\151\156", strrpos($myeuaywkqeuqowes, "\56"), 0); cewyaqiqmmwmauce: $gqqycaoyaweqigmi = wp_check_filetype($myeuaywkqeuqowes); $wuayakmyggcomiuy = wp_check_filetype($wsqkocmmsoiquqwm); if (!($wuayakmyggcomiuy["\x65\170\164"] !== $gqqycaoyaweqigmi["\x65\170\x74"])) { goto scyqmcegwikkoesw; } $myeuaywkqeuqowes = ''; scyqmcegwikkoesw: ycweseaccsomkioa: ciwggusyecgskagy: return $myeuaywkqeuqowes; } private function cgsqaegiswcuoggi($ykscweuoqwqcmsmo) : bool { $ymacoouqwcqwwagu = preg_replace(self::iqcyaamgiewkaowe, '', $ykscweuoqwqcmsmo); return strlen($ymacoouqwcqwwagu) / count(explode("\12", $ymacoouqwcqwwagu)) > 200; } private function yaouiiywcouyyimi(string $mgeemcksyiuqaemy) : array { $sogksuscggsicmac = []; $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk(self::qswqmkwmqmggomug . $mgeemcksyiuqaemy, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); if (!$ykscweuoqwqcmsmo) { goto sccqekuwywiisami; } $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ykscweuoqwqcmsmo); $sogksuscggsicmac["\163\x68\x61\62\x35\x36"] = $mgeemcksyiuqaemy; sccqekuwywiisami: return $sogksuscggsicmac; } public function qycuagacqaecigyi(string $eeamcawaiqocomwy, string $mgeemcksyiuqaemy) : bool { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->awemwqyugsqgcsyu($eeamcawaiqocomwy, $this->eeykuoewogequiii()); if (!(is_wp_error($keccaugmemegoimu) || (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) !== 200)) { goto eokcuuwqaomkooag; } return false; eokcuuwqaomkooag: $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $kyquyseskckkouak = hash("\163\150\x61\62\x35\66", $ykscweuoqwqcmsmo); return $kyquyseskckkouak === $mgeemcksyiuqaemy; } public function agkwcckksaegcsce(?string $ogomymegcoacqisg) : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($yyauwyaeewsickwk->skksumsyamssouqc($ogomymegcoacqisg, "\57\x2f")) { goto ksqgwiceoomkuuiy; } $acqcekoeswseswws = ltrim($ogomymegcoacqisg, "\x2f"); goto gkoiyaagwgycysim; ksqgwiceoomkuuiy: $cgmkimaosyyuqeyg = site_url(); if (str_starts_with($ogomymegcoacqisg, $cgmkimaosyyuqeyg)) { goto qgqasacusgwmoegy; } $acqcekoeswseswws = $ogomymegcoacqisg; goto qscqkykqskqmisgw; qgqasacusgwmoegy: $acqcekoeswseswws = ltrim(str_replace($cgmkimaosyyuqeyg, '', $ogomymegcoacqisg), "\x2f"); qscqkykqskqmisgw: gkoiyaagwgycysim: return $acqcekoeswseswws; } private function eeykuoewogequiii() : array { return ["\x68\145\141\x64\x65\x72\163" => ["\125\x73\145\162\x2d\x41\x67\x65\156\164" => "\120\x4d\x50\122\x20\x4f\x70\164\151\155\151\x7a\141\164\151\157\156\x20\x4d\157\144\165\154\x65\57" . $this->couwksyewgyeooqe()->gikwwgqmwccescgy()]]; } }
