<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66c7b6e5555be             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset\JSDeliver; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\CDNData; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\Common; use WP_Dependencies; use WP_Scripts; class JSDeliver extends Common { const uaiimqkkiecgmkwm = "\150\164\164\x70\x73\x3a\57\57\x63\x64\156\56\x6a\163\x64\x65\154\x69\166\x72\56\156\x65\164\57"; const qswqmkwmqmggomug = "\x68\164\164\x70\x73\72\57\x2f\144\141\164\141\x2e\152\x73\144\x65\154\151\x76\162\x2e\x63\157\155\x2f\x76\x31\57\154\x6f\157\153\x75\x70\57\150\x61\x73\150\57"; const iqcyaamgiewkaowe = "\x2f\x5c\x2f\x5c\x2a\x5b\134\x73\134\x53\135\x2a\77\x5c\x2a\x5c\57\x7c\134\x2f\x5c\x2f\x2e\52\x3f\50\77\x3a\x5c\x6e\x7c\x24\51\57"; public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\151\x6e\151\x74"])->qcsmikeggeemccuu(Process::ANALYZE, [$this, "\x79\161\x67\x69\161\x71\x61\x79\x61\x6d\x79\145\x65\x6d\165\x75"])->qcsmikeggeemccuu(Process::akguikecmoggsykg, [$this, "\141\163\161\x77\x71\x61\161\157\167\147\x65\x79\171\x61\x79\167"]); } public function init() { Process::symcgieuakksimmu()->cywkaeaiwmweciui(); Process::symcgieuakksimmu()->mciwicaywiwmccoc(); } public function yqgiqqayamyeemuu() { global $wp_scripts, $wp_styles; $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cwkywyqksyucoyia([self::igecewwoemccgwsq => $gcskoooiimggowew::gycwocuuococmiqw, self::iocouekmygsaocuo => [self::euoaaiqkqcqcgeco => self::weigugswsgkycqkc]]); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { $uueqecyckaweeyai = $gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, self::acyomymuuygeoqks); $iakkeikwceeomgyq = $wp_styles->registered[$uueqecyckaweeyai] ?? $wp_scripts[$uueqecyckaweeyai] ?? false; if (!($iakkeikwceeomgyq->src && ($eeamcawaiqocomwy = $this->giyqgiugumwkewgw($iakkeikwceeomgyq)))) { goto akwwuuiykscgicuw; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [$gcskoooiimggowew::iocouekmygsaocuo => $eeamcawaiqocomwy]); akwwuuiykscgicuw: cyqokqcacysioeyc: } cksoeiwawiygyiyg: } public function asqwqaqowgeyyayw() { $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cyyqcumykgmwakcs(CDNData::gycwocuuococmiqw); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { if (!(time() - strtotime($gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS * 2)) { goto gsusqquicmukegcs; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [self::ciywsqoeiymemsys => self::sgoswgskyiiwkyuo]); gsusqquicmukegcs: iikgiaocummweiga: } ueqsiwuwumoqgsck: } public function giyqgiugumwkewgw($iakkeikwceeomgyq) : ?string { $myeuaywkqeuqowes = ''; $wsqkocmmsoiquqwm = $iakkeikwceeomgyq->src; if (!$wsqkocmmsoiquqwm) { goto ysoqeuugiuswykyu; } $muqcqaqwsaoagykg = []; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $kuuiuigeacouwmaa = strpos($wsqkocmmsoiquqwm, "\57\x2f"); if (false !== $kuuiuigeacouwmaa) { goto wcsysckgigeykkwy; } $ykscweuoqwqcmsmo = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wsqkocmmsoiquqwm); goto scgmwokeuqwiekkk; wcsysckgigeykkwy: $keccaugmemegoimu = wp_safe_remote_get((0 === $kuuiuigeacouwmaa ? "\x68\164\x74\160\x3a" : '') . $wsqkocmmsoiquqwm, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); scgmwokeuqwiekkk: if (!$ykscweuoqwqcmsmo) { goto owaimkmgemoqewmm; } $mgeemcksyiuqaemy = hash("\163\150\x61\x32\x35\x36", $ykscweuoqwqcmsmo); $icwicymcioeyeyek = $this->yaouiiywcouyyimi($mgeemcksyiuqaemy); if (isset($icwicymcioeyeyek[self::kekgqaemqessuwmq])) { goto iyaugygcsmqqqkmo; } if (preg_match("\57\167\160\x2d\143\x6f\x6e\164\145\156\164\x5c\x2f\x70\x6c\x75\147\x69\x6e\x73\134\x2f\x28\77\x3c\160\x6c\165\x67\151\156\x3e\133\x5e\134\57\x5d\52\x29\134\57\50\77\74\x66\151\154\145\x3e\x2e\52\x29\x2f\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto uamuuwkyuqomqyuy; } if (!preg_match("\57\167\160\x2d\143\157\156\164\x65\x6e\164\134\x2f\164\150\x65\x6d\x65\163\134\57\x28\x3f\x3c\x74\x68\x65\155\x65\76\133\x5e\134\x2f\x5d\x2a\x29\134\x2f\50\77\74\146\x69\154\145\76\x2e\52\51\57\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto kkmwwqyesmkescyg; } if (!($meyiiwcswqmuggyg[self::memoaagcmqqowsoy] && $meyiiwcswqmuggyg[self::kekgqaemqessuwmq])) { goto yeiokcoikcysyimu; } $mumucmmgemqwqiia = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw($meyiiwcswqmuggyg[self::memoaagcmqqowsoy]); if (!$mumucmmgemqwqiia->exists()) { goto uqcwyyiykmwygeau; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\x77\x70\x2f\164\150\x65\155\145\163\57{$meyiiwcswqmuggyg[self::memoaagcmqqowsoy]}\57{$mumucmmgemqwqiia->get(self::auugqowqueaocgsu)}\x2f{$meyiiwcswqmuggyg[self::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto sagemooicmgceiug; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; sagemooicmgceiug: uqcwyyiykmwygeau: yeiokcoikcysyimu: kkmwwqyesmkescyg: goto ekwuycsiuqwycqea; uamuuwkyuqomqyuy: if (!($meyiiwcswqmuggyg[self::akoscweoqiuiiooo] && $meyiiwcswqmuggyg[self::kekgqaemqessuwmq])) { goto gkwuewqmqeswqukg; } $plugin_file = ABSPATH . "\167\x70\55\x63\157\156\x74\x65\156\164\x2f\160\x6c\x75\x67\151\156\x73\x2f{$meyiiwcswqmuggyg[self::akoscweoqiuiiooo]}\x2f{$meyiiwcswqmuggyg[self::akoscweoqiuiiooo]}\x2e\160\x68\160"; if (file_exists($plugin_file)) { goto wycmcqaauqkgegau; } $php_files = glob(ABSPATH . "\167\160\x2d\143\157\x6e\164\x65\156\x74\57\x70\x6c\165\147\x69\x6e\163\x2f{$meyiiwcswqmuggyg[self::akoscweoqiuiiooo]}\57\x2a\56\x70\150\160"); foreach ($php_files as $mkomwsiykqigmqca) { $muqcqaqwsaoagykg = get_plugin_data($mkomwsiykqigmqca); if (!$muqcqaqwsaoagykg[self::auugqowqueaocgsu]) { goto aqaaqeucgoegeeuk; } goto iyikuwuweqigiuey; aqaaqeucgoegeeuk: acsigwcaesyyoiie: } iyikuwuweqigiuey: goto qcweoyigoaeacsow; wycmcqaauqkgegau: $muqcqaqwsaoagykg = get_plugin_data($plugin_file); qcweoyigoaeacsow: if (!$muqcqaqwsaoagykg[self::auugqowqueaocgsu]) { goto wcekgciqeggiiwgk; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\167\160\x2f\x70\x6c\x75\x67\151\x6e\x73\57{$meyiiwcswqmuggyg[self::akoscweoqiuiiooo]}\57\164\141\147\x73\x2f{$muqcqaqwsaoagykg[self::auugqowqueaocgsu]}\57{$meyiiwcswqmuggyg[self::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto iyceygqsmokgmams; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; iyceygqsmokgmams: wcekgciqeggiiwgk: gkwuewqmqeswqukg: ekwuycsiuqwycqea: goto cieumoqayigkoocy; iyaugygcsmqqqkmo: if (!("\127\x6f\162\x64\120\x72\x65\x73\x73\57\x57\157\162\x64\120\162\145\163\163" === $icwicymcioeyeyek[self::NAME])) { goto ceusyscosamyaiws; } $icwicymcioeyeyek[self::auugqowqueaocgsu] = get_bloginfo(self::auugqowqueaocgsu); ceusyscosamyaiws: $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "{$icwicymcioeyeyek[self::squoamkioomemiyi]}\57{$icwicymcioeyeyek[self::NAME]}\x40{$icwicymcioeyeyek[self::auugqowqueaocgsu]}{$icwicymcioeyeyek[self::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto gysmmooawoeggaow; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; gysmmooawoeggaow: cieumoqayigkoocy: if ($this->cgsqaegiswcuoggi($ykscweuoqwqcmsmo)) { goto yggciikgkomgeqsc; } $myeuaywkqeuqowes = substr_replace($myeuaywkqeuqowes, "\x2e\x6d\151\156", strrpos($myeuaywkqeuqowes, "\56"), 0); yggciikgkomgeqsc: $gqqycaoyaweqigmi = wp_check_filetype($myeuaywkqeuqowes); $wuayakmyggcomiuy = wp_check_filetype($wsqkocmmsoiquqwm); if (!($wuayakmyggcomiuy["\x65\170\164"] !== $gqqycaoyaweqigmi["\x65\x78\x74"])) { goto eoeiaccouaymakgm; } $myeuaywkqeuqowes = ''; eoeiaccouaymakgm: owaimkmgemoqewmm: ysoqeuugiuswykyu: return $myeuaywkqeuqowes; } private function cgsqaegiswcuoggi($ykscweuoqwqcmsmo) : bool { $ymacoouqwcqwwagu = preg_replace(self::iqcyaamgiewkaowe, '', $ykscweuoqwqcmsmo); return strlen($ymacoouqwcqwwagu) / count(explode("\12", $ymacoouqwcqwwagu)) > 200; } private function yaouiiywcouyyimi(string $mgeemcksyiuqaemy) : array { $sogksuscggsicmac = []; $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk(self::qswqmkwmqmggomug . $mgeemcksyiuqaemy, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); if (!$ykscweuoqwqcmsmo) { goto usmuqsuwuueogimc; } $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ykscweuoqwqcmsmo); $sogksuscggsicmac["\x73\150\x61\x32\65\66"] = $mgeemcksyiuqaemy; usmuqsuwuueogimc: return $sogksuscggsicmac; } public function qycuagacqaecigyi(string $eeamcawaiqocomwy, string $mgeemcksyiuqaemy) : bool { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->awemwqyugsqgcsyu($eeamcawaiqocomwy, $this->eeykuoewogequiii()); if (!(is_wp_error($keccaugmemegoimu) || (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) !== 200)) { goto koiiaewwicsckseu; } return false; koiiaewwicsckseu: $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $kyquyseskckkouak = hash("\163\x68\x61\62\x35\66", $ykscweuoqwqcmsmo); return $kyquyseskckkouak === $mgeemcksyiuqaemy; } public function agkwcckksaegcsce(?string $ogomymegcoacqisg) : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($yyauwyaeewsickwk->skksumsyamssouqc($ogomymegcoacqisg, "\57\57")) { goto yuqisiwgqacgmsym; } $acqcekoeswseswws = ltrim($ogomymegcoacqisg, "\x2f"); goto wickgagwgqqsomum; yuqisiwgqacgmsym: $cgmkimaosyyuqeyg = site_url(); if (str_starts_with($ogomymegcoacqisg, $cgmkimaosyyuqeyg)) { goto umcyeiusoakewyaa; } $acqcekoeswseswws = $ogomymegcoacqisg; goto ksawwekgswywwuwm; umcyeiusoakewyaa: $acqcekoeswseswws = ltrim(str_replace($cgmkimaosyyuqeyg, '', $ogomymegcoacqisg), "\x2f"); ksawwekgswywwuwm: wickgagwgqqsomum: return $acqcekoeswseswws; } private function eeykuoewogequiii() : array { return ["\150\x65\141\x64\x65\162\x73" => ["\x55\163\145\162\55\101\147\145\156\x74" => "\x50\115\120\x52\40\117\x70\x74\151\155\x69\x7a\141\x74\151\157\x6e\40\115\x6f\144\x75\x6c\x65\57" . $this->couwksyewgyeooqe()->gikwwgqmwccescgy()]]; } }
