<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b73dc7163             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset\JSDeliver; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\CDNData; class JSDeliver extends Container { const uaiimqkkiecgmkwm = "\150\164\x74\x70\163\x3a\x2f\57\x63\144\156\x2e\152\x73\144\x65\154\151\166\x72\x2e\x6e\145\x74\57"; const qswqmkwmqmggomug = "\x68\x74\x74\x70\163\x3a\x2f\57\x64\141\164\141\x2e\x6a\x73\x64\145\154\x69\x76\x72\x2e\143\x6f\x6d\57\x76\x31\57\x6c\x6f\x6f\x6b\x75\x70\x2f\x68\141\x73\x68\x2f"; const iqcyaamgiewkaowe = "\57\134\x2f\x5c\52\133\134\163\134\x53\x5d\52\77\x5c\52\x5c\x2f\x7c\x5c\57\x5c\57\x2e\x2a\x3f\50\x3f\x3a\x5c\156\x7c\44\x29\x2f"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\x69\164", [$this, "\x69\x6e\x69\x74"])->qcsmikeggeemccuu(Process::ANALYZE, [$this, "\x79\x71\147\x69\x71\161\x61\x79\x61\155\x79\x65\x65\155\165\x75"])->qcsmikeggeemccuu(Process::akguikecmoggsykg, [$this, "\141\x73\161\x77\161\x61\161\157\x77\147\x65\x79\171\x61\171\x77"]); } public function init() { Process::symcgieuakksimmu()->cywkaeaiwmweciui(); Process::symcgieuakksimmu()->mciwicaywiwmccoc(); } public function yqgiqqayamyeemuu() { global $wp_scripts, $wp_styles; $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $oammesyieqmwuwyi = $gcskoooiimggowew->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, $gcskoooiimggowew::gycwocuuococmiqw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::iocouekmygsaocuo)->wegeyaguowmkqiac()]); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { $uueqecyckaweeyai = $gcskoooiimggowew->waecsyqmwascmqoa($egsumesakcaaukem, Constants::acyomymuuygeoqks); $iakkeikwceeomgyq = $wp_styles->registered[$uueqecyckaweeyai] ?? $wp_scripts[$uueqecyckaweeyai] ?? false; if ($iakkeikwceeomgyq->src && ($eeamcawaiqocomwy = $this->giyqgiugumwkewgw($iakkeikwceeomgyq))) { $gcskoooiimggowew->gssiscqyqsacmeca()->wqikesawekycweoi($egsumesakcaaukem, [Constants::iocouekmygsaocuo => $eeamcawaiqocomwy]); } } } public function asqwqaqowgeyyayw() { $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cyyqcumykgmwakcs(CDNData::gycwocuuococmiqw); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { if (time() - strtotime($gcskoooiimggowew->waecsyqmwascmqoa($egsumesakcaaukem, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS * 2) { $gcskoooiimggowew->gssiscqyqsacmeca()->wqikesawekycweoi($egsumesakcaaukem, [Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); } } } public function giyqgiugumwkewgw($iakkeikwceeomgyq) : ?string { $myeuaywkqeuqowes = ''; $wsqkocmmsoiquqwm = $iakkeikwceeomgyq->src; if ($wsqkocmmsoiquqwm) { $muqcqaqwsaoagykg = []; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $kuuiuigeacouwmaa = strpos($wsqkocmmsoiquqwm, "\57\x2f"); if (false !== $kuuiuigeacouwmaa) { $keccaugmemegoimu = wp_safe_remote_get((0 === $kuuiuigeacouwmaa ? "\x68\x74\164\x70\x3a" : '') . $wsqkocmmsoiquqwm, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); } else { $ykscweuoqwqcmsmo = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wsqkocmmsoiquqwm); } if ($ykscweuoqwqcmsmo) { $mgeemcksyiuqaemy = hash("\163\x68\x61\62\x35\66", $ykscweuoqwqcmsmo); $icwicymcioeyeyek = $this->yaouiiywcouyyimi($mgeemcksyiuqaemy); if (isset($icwicymcioeyeyek[Constants::kekgqaemqessuwmq])) { if ("\127\x6f\162\x64\x50\162\145\x73\x73\x2f\x57\x6f\x72\144\120\x72\145\163\x73" === $icwicymcioeyeyek[Constants::NAME]) { $icwicymcioeyeyek[Constants::auugqowqueaocgsu] = get_bloginfo(Constants::auugqowqueaocgsu); } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "{$icwicymcioeyeyek[Constants::squoamkioomemiyi]}\57{$icwicymcioeyeyek[Constants::NAME]}\x40{$icwicymcioeyeyek[Constants::auugqowqueaocgsu]}{$icwicymcioeyeyek[Constants::kekgqaemqessuwmq]}"; if ($this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { $myeuaywkqeuqowes = $mckmqeqaekwkwems; } } else { if (preg_match("\57\x77\x70\55\143\x6f\x6e\x74\x65\156\x74\x5c\57\160\x6c\165\x67\x69\x6e\x73\134\x2f\x28\x3f\74\x70\x6c\165\147\151\156\x3e\133\x5e\x5c\57\x5d\x2a\51\134\57\x28\x3f\74\146\151\x6c\145\76\56\x2a\51\x2f\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { if ($meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]) { $plugin_file = ABSPATH . "\x77\x70\x2d\x63\x6f\156\x74\x65\x6e\164\57\x70\154\x75\147\x69\x6e\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\57{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\56\160\x68\160"; if (file_exists($plugin_file)) { $muqcqaqwsaoagykg = get_plugin_data($plugin_file); } else { $php_files = glob(ABSPATH . "\x77\x70\55\x63\x6f\x6e\164\145\x6e\164\57\x70\154\165\x67\x69\156\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\57\52\x2e\160\150\160"); foreach ($php_files as $mkomwsiykqigmqca) { $muqcqaqwsaoagykg = get_plugin_data($mkomwsiykqigmqca); if ($muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { break; } } } if ($muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\x77\160\57\x70\154\165\x67\151\156\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f\x74\x61\147\x73\57{$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]}\57{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if ($this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { $myeuaywkqeuqowes = $mckmqeqaekwkwems; } } } } else { if (preg_match("\57\167\160\55\143\157\x6e\x74\145\x6e\x74\x5c\x2f\164\150\145\155\145\163\134\57\50\77\x3c\x74\x68\145\155\145\x3e\133\136\x5c\57\135\52\x29\134\x2f\50\x3f\74\146\151\154\x65\76\56\52\x29\57\151", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { if ($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]) { $mumucmmgemqwqiia = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]); if ($mumucmmgemqwqiia->exists()) { $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\x77\160\57\x74\x68\x65\x6d\x65\x73\57{$meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]}\57{$mumucmmgemqwqiia->get(Constants::auugqowqueaocgsu)}\x2f{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if ($this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { $myeuaywkqeuqowes = $mckmqeqaekwkwems; } } } } } } if (!$this->cgsqaegiswcuoggi($ykscweuoqwqcmsmo)) { $myeuaywkqeuqowes = substr_replace($myeuaywkqeuqowes, "\56\x6d\151\156", strrpos($myeuaywkqeuqowes, "\56"), 0); } $gqqycaoyaweqigmi = wp_check_filetype($myeuaywkqeuqowes); $wuayakmyggcomiuy = wp_check_filetype($wsqkocmmsoiquqwm); if ($wuayakmyggcomiuy["\x65\x78\164"] !== $gqqycaoyaweqigmi["\145\x78\x74"]) { $myeuaywkqeuqowes = ''; } } } return $myeuaywkqeuqowes; } private function cgsqaegiswcuoggi($ykscweuoqwqcmsmo) : bool { $ymacoouqwcqwwagu = preg_replace(self::iqcyaamgiewkaowe, '', $ykscweuoqwqcmsmo); return strlen($ymacoouqwcqwwagu) / count(explode("\12", $ymacoouqwcqwwagu)) > 200; } private function yaouiiywcouyyimi(string $mgeemcksyiuqaemy) : array { $sogksuscggsicmac = []; $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk(self::qswqmkwmqmggomug . $mgeemcksyiuqaemy, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); if ($ykscweuoqwqcmsmo) { $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ykscweuoqwqcmsmo); $sogksuscggsicmac["\x73\x68\x61\x32\x35\x36"] = $mgeemcksyiuqaemy; } return $sogksuscggsicmac; } public function qycuagacqaecigyi(string $eeamcawaiqocomwy, string $mgeemcksyiuqaemy) : bool { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->awemwqyugsqgcsyu($eeamcawaiqocomwy, $this->eeykuoewogequiii()); if (is_wp_error($keccaugmemegoimu) || (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) !== 200) { return false; } $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $kyquyseskckkouak = hash("\163\x68\x61\x32\x35\x36", $ykscweuoqwqcmsmo); return $kyquyseskckkouak === $mgeemcksyiuqaemy; } public function agkwcckksaegcsce(?string $ogomymegcoacqisg) : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($yyauwyaeewsickwk->skksumsyamssouqc($ogomymegcoacqisg, "\57\57")) { $cgmkimaosyyuqeyg = site_url(); if (str_starts_with($ogomymegcoacqisg, $cgmkimaosyyuqeyg)) { $acqcekoeswseswws = ltrim(str_replace($cgmkimaosyyuqeyg, '', $ogomymegcoacqisg), "\57"); } else { $acqcekoeswseswws = $ogomymegcoacqisg; } } else { $acqcekoeswseswws = ltrim($ogomymegcoacqisg, "\57"); } return $acqcekoeswseswws; } private function eeykuoewogequiii() : array { return ["\150\145\x61\x64\x65\x72\163" => ["\x55\163\145\162\x2d\x41\147\145\x6e\x74" => "\120\x4d\x50\122\x20\117\160\x74\x69\155\x69\x7a\141\164\151\157\156\40\115\157\144\x75\154\145\x2f" . $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gikwwgqmwccescgy($this)]]; } }
