<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63171273d0496             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; use WP_Dependencies; use WP_Styles; abstract class Combiner extends Common { const qqckkouoyyeimmac = 90000; const osusmouuukykwasy = 30000; public function gaiaksuyqkeeiqgo($ugmuiugkaygmsagq) { $megmggkiokqkcwou = 0; $ssimsmwwkqmmgqeg = []; $usyqkyomqcuocgoa = []; $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($this->ocysssyiuaueqiei() && $ugmuiugkaygmsagq instanceof WP_Dependencies)) { goto gsygwgsiawgmqiyi; } $qmyyckkowqwaacqi = $ugmuiugkaygmsagq instanceof WP_Styles; $okcwyqcycoicewqy = $qmyyckkowqwaacqi ? "\x63\x73\163" : "\x6a\163"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $qamuuegkguqmisam = $this->agkwcckksaegcsce("\x6d\x61\x6e\151\x66\145\163\x74\x2e\152\x73\x6f\x6e", $okcwyqcycoicewqy); if ($iiaumsgauuyeqksw->exists($qamuuegkguqmisam)) { goto sioekkmekwygemyc; } $aoiemswgeosamowe = []; goto yiowgigkkwsoqcci; sioekkmekwygemyc: $aoiemswgeosamowe = json_decode($iiaumsgauuyeqksw->souwykwwmyygqyqi($qamuuegkguqmisam), true); yiowgigkkwsoqcci: $coagmqgaakeqmqmw = $ugmuiugkaygmsagq->queue; $eswwueuissckicww = ManipulateServer::ekcymmyqoceukosc(); $yyimiwcuegayoskq = ManipulateArray::get($aoiemswgeosamowe, $eswwueuissckicww); if (!$yyimiwcuegayoskq) { goto gswcoeiisamakwii; } $umgkqiimgiyocmqy = ManipulateArray::get($yyimiwcuegayoskq, "\x6d\141\x69\x6e"); $siwkgiismmgqgykc = ManipulateArray::get($yyimiwcuegayoskq, "\143\157\x6d\x62\x69\x6e\145\x64"); $oqciymuueukmciea = ManipulateArray::get($yyimiwcuegayoskq, "\x69\156\154\151\x6e\145"); $gaemwaimkkayyegw = $iiaumsgauuyeqksw->souwykwwmyygqyqi($oqciymuueukmciea); goto yuimwyoywaiiqacs; gswcoeiisamakwii: foreach ($coagmqgaakeqmqmw as $momcykaoccoymeig => $eueuqacmukymcyya) { $egsumesakcaaukem = ManipulateArray::get($ugmuiugkaygmsagq->registered, $eueuqacmukymcyya); if (!$egsumesakcaaukem instanceof _WP_Dependency) { goto yykqaowwsqgqysmq; } $ogomymegcoacqisg = $this->mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq); $ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($ogomymegcoacqisg); $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); if ($ewgwqamkygiqaawc) { goto oeocukauoyosicso; } ManipulateArray::unset($coagmqgaakeqmqmw, $momcykaoccoymeig); goto suqceasgacskcmkc; oeocukauoyosicso: $oiegiwogmwmawkeo = mb_strlen($ewgwqamkygiqaawc, "\x38\x62\x69\164"); if ($oiegiwogmwmawkeo <= self::osusmouuukykwasy && $megmggkiokqkcwou <= self::qqckkouoyyeimmac) { goto wkwamkgkwykeqkec; } if (!$egsumesakcaaukem->extra) { goto mogkoocsoeuyoqqa; } foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie && in_array($uusmaiomayssaecw, ["\x61\146\x74\145\x72", "\142\x65\146\x6f\x72\x65"]))) { goto wsesqmcqoiyyqkqi; } if (!is_array($eqgoocgaqwqcimie)) { goto iesekaeqeomeuaui; } $eqgoocgaqwqcimie = implode('', $eqgoocgaqwqcimie); iesekaeqeomeuaui: $usyqkyomqcuocgoa[] = $eqgoocgaqwqcimie; wsesqmcqoiyyqkqi: oyeyomcgkmgymogq: } mscyggqcesgqqksu: mogkoocsoeuyoqqa: $ssimsmwwkqmmgqeg[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; goto oimkeqocuguqqsqk; wkwamkgkwykeqkec: $megmggkiokqkcwou += $oiegiwogmwmawkeo; $usyqkyomqcuocgoa[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; oimkeqocuguqqsqk: suqceasgacskcmkc: yykqaowwsqgqysmq: gamqcwuwkikwqoay: } ieqesiiageaauiuw: $wkcwykowmmmwioqs = "{$this->ygykiseoqukukskk($okcwyqcycoicewqy)}\x2f\163\x74\x79\154\145"; $umgkqiimgiyocmqy = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\56{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $oqciymuueukmciea = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\x2d\151\x6e\x6c\151\156\145\x2e{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $ewwqgggaowaceeso = $this->wamiiiagcwwigucu(implode('', $ssimsmwwkqmmgqeg), $okcwyqcycoicewqy); $gaemwaimkkayyegw = $this->wamiiiagcwwigucu(implode('', $usyqkyomqcuocgoa), $okcwyqcycoicewqy); if (!($ewwqgggaowaceeso && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($umgkqiimgiyocmqy, $ewwqgggaowaceeso))) { goto kwiggogcgciwuwqk; } $aoiemswgeosamowe[$eswwueuissckicww]["\x6d\141\x69\x6e"] = $umgkqiimgiyocmqy; kwiggogcgciwuwqk: if (!($gaemwaimkkayyegw && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($oqciymuueukmciea, $gaemwaimkkayyegw))) { goto uckewycoogsogwiy; } $aoiemswgeosamowe[$eswwueuissckicww]["\x69\156\x6c\x69\x6e\145"] = $oqciymuueukmciea; uckewycoogsogwiy: $siwkgiismmgqgykc = $coagmqgaakeqmqmw; if (!$siwkgiismmgqgykc) { goto ikuuiauwouuqawuw; } $aoiemswgeosamowe[$eswwueuissckicww]["\x63\157\155\x62\151\x6e\145\144"] = $siwkgiismmgqgykc; ikuuiauwouuqawuw: if (!$aoiemswgeosamowe) { goto yoqakewookqoqacm; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($qamuuegkguqmisam, json_encode($aoiemswgeosamowe, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); yoqakewookqoqacm: yuimwyoywaiiqacs: if (!is_array($siwkgiismmgqgykc)) { goto okkmcocqokkskasy; } foreach ($siwkgiismmgqgykc as $eueuqacmukymcyya) { if ($qmyyckkowqwaacqi) { goto iwsmmkqaoksmocok; } wp_dequeue_script($eueuqacmukymcyya); wp_deregister_script($eueuqacmukymcyya); goto esikeyqyuikmaiek; iwsmmkqaoksmocok: wp_dequeue_style($eueuqacmukymcyya); wp_deregister_style($eueuqacmukymcyya); esikeyqyuikmaiek: emqswoaawgeyosmi: } ocywegekakimmwcq: okkmcocqokkskasy: $eueuqacmukymcyya = "\157\x70\x74\x2d\143\x6f\155\x62\151\156\145\x64\55{$okcwyqcycoicewqy}"; if (!($umgkqiimgiyocmqy && $iiaumsgauuyeqksw->exists($umgkqiimgiyocmqy))) { goto ikqeeaysmqgcgawq; } $eeamcawaiqocomwy = $eygsasmqycagyayw->cwuqascimsgmiyca($umgkqiimgiyocmqy); if ($qmyyckkowqwaacqi) { goto qiiigwkqeoewsuwm; } DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); goto esaqcqqwuussiiwo; qiiigwkqeoewsuwm: DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); esaqcqqwuussiiwo: ikqeeaysmqgcgawq: if (!$gaemwaimkkayyegw) { goto wwukgaquuyoissgy; } if ($qmyyckkowqwaacqi) { goto mscgewkcqcoowweg; } DecoratorAsset::yocqwqycwegayowg($eueuqacmukymcyya, $gaemwaimkkayyegw); goto suqcsgaosywaauuu; mscgewkcqcoowweg: DecoratorAsset::oiqqguakwcieaioo($eueuqacmukymcyya, $gaemwaimkkayyegw); suqcsgaosywaauuu: wwukgaquuyoissgy: gsygwgsiawgmqiyi: } public abstract function qqcykaeioiwwaqos(); public function ywgkkwweiyqsyiwu($esaqeawoigqgagum) : bool { return $this->kcciqwskewsuaemk()->exists($esaqeawoigqgagum); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { return $this->ukacwyckseuqsqgc($egsumesakcaaukem->src); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { return $ewgwqamkygiqaawc; } public function agkwcckksaegcsce($wkcwykowmmmwioqs, $sqeykgyoooqysmca) : string { $mkomwsiykqigmqca = Manipulate::cmaecekuqkwmemms("\117\x50\124\111\115\x49\x5a\101\124\111\x4f\116\137\x43\117\115\102\111\116\105\137\x50\x41\124\110"); return "{$mkomwsiykqigmqca}\x2f{$sqeykgyoooqysmca}\57{$wkcwykowmmmwioqs}"; } public function ygykiseoqukukskk($sqeykgyoooqysmca, $cywsgckammeuyqyq = 4) { $ymqmyyeuycgmigyo = ManipulateString::uniqid($cywsgckammeuyqyq); $mkomwsiykqigmqca = $this->agkwcckksaegcsce($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto qsgqwyqaqiowkmco; } $ymqmyyeuycgmigyo = $this->ygykiseoqukukskk($sqeykgyoooqysmca); qsgqwyqaqiowkmco: return $ymqmyyeuycgmigyo; } public function wamiiiagcwwigucu($ewgwqamkygiqaawc, $sqeykgyoooqysmca) { $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\x6f\160\164\151\x6d\x69\172\141\164\x69\x6f\x6e\x5f\155\x69\156\151\146\x79\137{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\x6f\x70\x74\151\155\x69\172\x61\x74\151\157\156\x5f\141\144\166\141\156\143\145\137\155\151\156\151\x66\171\137{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); return $ewgwqamkygiqaawc; } }
