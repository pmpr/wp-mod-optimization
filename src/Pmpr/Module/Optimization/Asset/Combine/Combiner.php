<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6321c656ef420             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; use WP_Dependencies; use WP_Styles; abstract class Combiner extends Common { const qqckkouoyyeimmac = 90000; const osusmouuukykwasy = 30000; public function gaiaksuyqkeeiqgo($ugmuiugkaygmsagq) { $megmggkiokqkcwou = 0; $ssimsmwwkqmmgqeg = []; $usyqkyomqcuocgoa = []; $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($this->ocysssyiuaueqiei() && $ugmuiugkaygmsagq instanceof WP_Dependencies)) { goto esaqcqqwuussiiwo; } $qmyyckkowqwaacqi = $ugmuiugkaygmsagq instanceof WP_Styles; $okcwyqcycoicewqy = $qmyyckkowqwaacqi ? "\x63\x73\163" : "\x6a\163"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $qamuuegkguqmisam = $this->agkwcckksaegcsce("\x6d\141\156\x69\x66\145\163\x74\56\152\163\x6f\x6e", $okcwyqcycoicewqy); if ($iiaumsgauuyeqksw->exists($qamuuegkguqmisam)) { goto uimeeckqksqeekqq; } $aoiemswgeosamowe = []; goto iuuuususuuuaieem; uimeeckqksqeekqq: $aoiemswgeosamowe = json_decode($iiaumsgauuyeqksw->souwykwwmyygqyqi($qamuuegkguqmisam), true); iuuuususuuuaieem: $coagmqgaakeqmqmw = $ugmuiugkaygmsagq->queue; $eswwueuissckicww = ManipulateServer::ekcymmyqoceukosc(); $yyimiwcuegayoskq = ManipulateArray::get($aoiemswgeosamowe, $eswwueuissckicww); if (!$yyimiwcuegayoskq) { goto yykqaowwsqgqysmq; } $umgkqiimgiyocmqy = ManipulateArray::get($yyimiwcuegayoskq, "\155\141\151\156"); $siwkgiismmgqgykc = ManipulateArray::get($yyimiwcuegayoskq, "\143\x6f\155\142\151\x6e\145\x64"); $oqciymuueukmciea = ManipulateArray::get($yyimiwcuegayoskq, "\151\x6e\154\151\156\x65"); $gaemwaimkkayyegw = $iiaumsgauuyeqksw->souwykwwmyygqyqi($oqciymuueukmciea); goto kwiggogcgciwuwqk; yykqaowwsqgqysmq: foreach ($coagmqgaakeqmqmw as $momcykaoccoymeig => $eueuqacmukymcyya) { $egsumesakcaaukem = ManipulateArray::get($ugmuiugkaygmsagq->registered, $eueuqacmukymcyya); if (!$egsumesakcaaukem instanceof _WP_Dependency) { goto mogkoocsoeuyoqqa; } $ogomymegcoacqisg = $this->mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq); $ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($ogomymegcoacqisg); $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); if ($ewgwqamkygiqaawc) { goto iesekaeqeomeuaui; } ManipulateArray::unset($coagmqgaakeqmqmw, $momcykaoccoymeig); goto wsesqmcqoiyyqkqi; iesekaeqeomeuaui: $oiegiwogmwmawkeo = mb_strlen($ewgwqamkygiqaawc, "\x38\x62\151\164"); if ($oiegiwogmwmawkeo <= self::osusmouuukykwasy && $megmggkiokqkcwou <= self::qqckkouoyyeimmac) { goto mscyggqcesgqqksu; } if (!$egsumesakcaaukem->extra) { goto gamqcwuwkikwqoay; } foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie && in_array($uusmaiomayssaecw, ["\141\x66\164\x65\162", "\142\x65\146\x6f\x72\145"]))) { goto ieqesiiageaauiuw; } if (!is_array($eqgoocgaqwqcimie)) { goto yiowgigkkwsoqcci; } $eqgoocgaqwqcimie = implode('', $eqgoocgaqwqcimie); yiowgigkkwsoqcci: $usyqkyomqcuocgoa[] = $eqgoocgaqwqcimie; ieqesiiageaauiuw: sioekkmekwygemyc: } qukocuwgakemmyga: gamqcwuwkikwqoay: $ssimsmwwkqmmgqeg[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; goto oyeyomcgkmgymogq; mscyggqcesgqqksu: $megmggkiokqkcwou += $oiegiwogmwmawkeo; $usyqkyomqcuocgoa[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; oyeyomcgkmgymogq: wsesqmcqoiyyqkqi: mogkoocsoeuyoqqa: uqokiksoqcwwqgio: } kocqqoyymosmuksu: $wkcwykowmmmwioqs = "{$this->ygykiseoqukukskk($okcwyqcycoicewqy)}\57\x73\x74\171\154\x65"; $umgkqiimgiyocmqy = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\56{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $oqciymuueukmciea = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\x2d\x69\x6e\x6c\151\156\x65\x2e{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $ewwqgggaowaceeso = $this->wamiiiagcwwigucu(implode('', $ssimsmwwkqmmgqeg), $okcwyqcycoicewqy); $gaemwaimkkayyegw = $this->wamiiiagcwwigucu(implode('', $usyqkyomqcuocgoa), $okcwyqcycoicewqy); if (!($ewwqgggaowaceeso && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($umgkqiimgiyocmqy, $ewwqgggaowaceeso))) { goto wkwamkgkwykeqkec; } $aoiemswgeosamowe[$eswwueuissckicww]["\155\141\151\x6e"] = $umgkqiimgiyocmqy; wkwamkgkwykeqkec: if (!($gaemwaimkkayyegw && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($oqciymuueukmciea, $gaemwaimkkayyegw))) { goto oimkeqocuguqqsqk; } $aoiemswgeosamowe[$eswwueuissckicww]["\x69\156\154\x69\156\x65"] = $oqciymuueukmciea; oimkeqocuguqqsqk: $siwkgiismmgqgykc = $coagmqgaakeqmqmw; if (!$siwkgiismmgqgykc) { goto oeocukauoyosicso; } $aoiemswgeosamowe[$eswwueuissckicww]["\143\157\155\142\x69\x6e\145\x64"] = $siwkgiismmgqgykc; oeocukauoyosicso: if (!$aoiemswgeosamowe) { goto suqceasgacskcmkc; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($qamuuegkguqmisam, json_encode($aoiemswgeosamowe, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); suqceasgacskcmkc: kwiggogcgciwuwqk: if (!is_array($siwkgiismmgqgykc)) { goto yuimwyoywaiiqacs; } foreach ($siwkgiismmgqgykc as $eueuqacmukymcyya) { if ($qmyyckkowqwaacqi) { goto yoqakewookqoqacm; } wp_dequeue_script($eueuqacmukymcyya); wp_deregister_script($eueuqacmukymcyya); goto gswcoeiisamakwii; yoqakewookqoqacm: wp_dequeue_style($eueuqacmukymcyya); wp_deregister_style($eueuqacmukymcyya); gswcoeiisamakwii: ikuuiauwouuqawuw: } uckewycoogsogwiy: yuimwyoywaiiqacs: $eueuqacmukymcyya = "\x6f\x70\x74\x2d\x63\157\x6d\142\x69\156\145\x64\x2d{$okcwyqcycoicewqy}"; if (!($umgkqiimgiyocmqy && $iiaumsgauuyeqksw->exists($umgkqiimgiyocmqy))) { goto iwsmmkqaoksmocok; } $eeamcawaiqocomwy = $eygsasmqycagyayw->cwuqascimsgmiyca($umgkqiimgiyocmqy); if ($qmyyckkowqwaacqi) { goto ocywegekakimmwcq; } DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); goto emqswoaawgeyosmi; ocywegekakimmwcq: DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); emqswoaawgeyosmi: iwsmmkqaoksmocok: if (!$gaemwaimkkayyegw) { goto qiiigwkqeoewsuwm; } if ($qmyyckkowqwaacqi) { goto esikeyqyuikmaiek; } DecoratorAsset::yocqwqycwegayowg($eueuqacmukymcyya, $gaemwaimkkayyegw); goto okkmcocqokkskasy; esikeyqyuikmaiek: DecoratorAsset::oiqqguakwcieaioo($eueuqacmukymcyya, $gaemwaimkkayyegw); okkmcocqokkskasy: qiiigwkqeoewsuwm: esaqcqqwuussiiwo: } public abstract function qqcykaeioiwwaqos(); public function ywgkkwweiyqsyiwu($esaqeawoigqgagum) : bool { return $this->kcciqwskewsuaemk()->exists($esaqeawoigqgagum); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { return $this->ukacwyckseuqsqgc($egsumesakcaaukem->src); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { return $ewgwqamkygiqaawc; } public function agkwcckksaegcsce($wkcwykowmmmwioqs, $sqeykgyoooqysmca) : string { $mkomwsiykqigmqca = Manipulate::cmaecekuqkwmemms("\117\120\124\x49\115\x49\132\x41\124\x49\x4f\x4e\137\103\117\115\x42\x49\116\105\137\x50\101\x54\x48"); return "{$mkomwsiykqigmqca}\x2f{$sqeykgyoooqysmca}\x2f{$wkcwykowmmmwioqs}"; } public function ygykiseoqukukskk($sqeykgyoooqysmca, $cywsgckammeuyqyq = 4) { $ymqmyyeuycgmigyo = ManipulateString::uniqid($cywsgckammeuyqyq); $mkomwsiykqigmqca = $this->agkwcckksaegcsce($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto ikqeeaysmqgcgawq; } $ymqmyyeuycgmigyo = $this->ygykiseoqukukskk($sqeykgyoooqysmca); ikqeeaysmqgcgawq: return $ymqmyyeuycgmigyo; } public function wamiiiagcwwigucu($ewgwqamkygiqaawc, $sqeykgyoooqysmca) { $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\157\160\x74\151\155\151\x7a\141\164\151\x6f\x6e\137\x6d\151\156\151\x66\171\137{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\157\x70\x74\151\x6d\151\x7a\141\x74\x69\x6f\156\137\x61\144\166\141\x6e\x63\x65\137\x6d\151\156\x69\x66\171\x5f{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); return $ewgwqamkygiqaawc; } }
