<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d04ce34c3b0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; use WP_Dependencies; use WP_Styles; abstract class Combiner extends Common { const qqckkouoyyeimmac = 90000; const osusmouuukykwasy = 30000; public function gaiaksuyqkeeiqgo($ugmuiugkaygmsagq) { $megmggkiokqkcwou = 0; $ssimsmwwkqmmgqeg = []; $usyqkyomqcuocgoa = []; $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($this->ocysssyiuaueqiei() && $ugmuiugkaygmsagq instanceof WP_Dependencies)) { goto oiiqqgyqmggyiums; } $qmyyckkowqwaacqi = $ugmuiugkaygmsagq instanceof WP_Styles; $okcwyqcycoicewqy = $qmyyckkowqwaacqi ? "\143\x73\x73" : "\152\x73"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $qamuuegkguqmisam = $this->agkwcckksaegcsce("\x6d\141\156\151\146\x65\163\164\x2e\152\x73\157\156", $okcwyqcycoicewqy); if ($iiaumsgauuyeqksw->exists($qamuuegkguqmisam)) { goto cumeycwmuuqawwyu; } $aoiemswgeosamowe = []; goto uaicwcqwauosmsqm; cumeycwmuuqawwyu: $aoiemswgeosamowe = json_decode($iiaumsgauuyeqksw->souwykwwmyygqyqi($qamuuegkguqmisam), true); uaicwcqwauosmsqm: $coagmqgaakeqmqmw = $ugmuiugkaygmsagq->queue; $eswwueuissckicww = ManipulateServer::ekcymmyqoceukosc(); $yyimiwcuegayoskq = ManipulateArray::get($aoiemswgeosamowe, $eswwueuissckicww); if (!$yyimiwcuegayoskq) { goto cigesysuauaiccms; } $umgkqiimgiyocmqy = ManipulateArray::get($yyimiwcuegayoskq, "\155\141\x69\x6e"); $siwkgiismmgqgykc = ManipulateArray::get($yyimiwcuegayoskq, "\143\157\x6d\142\x69\x6e\x65\x64"); $oqciymuueukmciea = ManipulateArray::get($yyimiwcuegayoskq, "\x69\156\x6c\151\x6e\145"); $gaemwaimkkayyegw = $iiaumsgauuyeqksw->souwykwwmyygqyqi($oqciymuueukmciea); goto qumkwsqqocooyuoq; cigesysuauaiccms: foreach ($coagmqgaakeqmqmw as $momcykaoccoymeig => $eueuqacmukymcyya) { $egsumesakcaaukem = ManipulateArray::get($ugmuiugkaygmsagq->registered, $eueuqacmukymcyya); if (!$egsumesakcaaukem instanceof _WP_Dependency) { goto asaowisseacciyia; } $ogomymegcoacqisg = $this->mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq); $ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($ogomymegcoacqisg); $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); if ($ewgwqamkygiqaawc) { goto oqwcmgwimeisusoe; } ManipulateArray::unset($coagmqgaakeqmqmw, $momcykaoccoymeig); goto acesyuieuuqwgkwm; oqwcmgwimeisusoe: $oiegiwogmwmawkeo = mb_strlen($ewgwqamkygiqaawc, "\70\142\x69\164"); if ($oiegiwogmwmawkeo <= self::osusmouuukykwasy && $megmggkiokqkcwou <= self::qqckkouoyyeimmac) { goto kgysyqkoqgwmoscq; } if (!$egsumesakcaaukem->extra) { goto cuseccewekgcgkyg; } foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie && in_array($uusmaiomayssaecw, ["\141\146\164\x65\162", "\x62\x65\x66\157\x72\145"]))) { goto ookcgumoacskyymy; } if (!is_array($eqgoocgaqwqcimie)) { goto owisckseoogsugqq; } $eqgoocgaqwqcimie = implode('', $eqgoocgaqwqcimie); owisckseoogsugqq: $usyqkyomqcuocgoa[] = $eqgoocgaqwqcimie; ookcgumoacskyymy: ysweqawmawicakeo: } iaomqomgiwiegoca: cuseccewekgcgkyg: $ssimsmwwkqmmgqeg[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; goto makomwwyomweyamm; kgysyqkoqgwmoscq: $megmggkiokqkcwou += $oiegiwogmwmawkeo; $usyqkyomqcuocgoa[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; makomwwyomweyamm: acesyuieuuqwgkwm: asaowisseacciyia: goaowamiyyamueiw: } gsqcoqqsioiyoykq: $wkcwykowmmmwioqs = "{$this->ygykiseoqukukskk($okcwyqcycoicewqy)}\57\163\164\171\154\x65"; $umgkqiimgiyocmqy = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\x2e{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $oqciymuueukmciea = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\55\x69\156\x6c\151\x6e\x65\x2e{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $ewwqgggaowaceeso = $this->wamiiiagcwwigucu(implode('', $ssimsmwwkqmmgqeg), $okcwyqcycoicewqy); $gaemwaimkkayyegw = $this->wamiiiagcwwigucu(implode('', $usyqkyomqcuocgoa), $okcwyqcycoicewqy); if (!($ewwqgggaowaceeso && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($umgkqiimgiyocmqy, $ewwqgggaowaceeso))) { goto qiaaqkymeuuueoqk; } $aoiemswgeosamowe[$eswwueuissckicww]["\155\141\x69\156"] = $umgkqiimgiyocmqy; qiaaqkymeuuueoqk: if (!($gaemwaimkkayyegw && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($oqciymuueukmciea, $gaemwaimkkayyegw))) { goto ugswokwmkumcmigc; } $aoiemswgeosamowe[$eswwueuissckicww]["\x69\x6e\154\x69\156\x65"] = $oqciymuueukmciea; ugswokwmkumcmigc: $siwkgiismmgqgykc = $coagmqgaakeqmqmw; if (!$siwkgiismmgqgykc) { goto gwiaimosqoiquwkc; } $aoiemswgeosamowe[$eswwueuissckicww]["\143\x6f\155\142\x69\x6e\145\144"] = $siwkgiismmgqgykc; gwiaimosqoiquwkc: if (!$aoiemswgeosamowe) { goto owgakkqgckqcegoi; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($qamuuegkguqmisam, json_encode($aoiemswgeosamowe, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); owgakkqgckqcegoi: qumkwsqqocooyuoq: if (!is_array($siwkgiismmgqgykc)) { goto ocgkwqqmgasuoies; } foreach ($siwkgiismmgqgykc as $eueuqacmukymcyya) { if ($qmyyckkowqwaacqi) { goto wwswmaewcaisauei; } wp_dequeue_script($eueuqacmukymcyya); wp_deregister_script($eueuqacmukymcyya); goto wsemeeocquawyauo; wwswmaewcaisauei: wp_dequeue_style($eueuqacmukymcyya); wp_deregister_style($eueuqacmukymcyya); wsemeeocquawyauo: kkewoqqowugagwoy: } gcskyqewysqaceeg: ocgkwqqmgasuoies: $eueuqacmukymcyya = "\157\160\x74\x2d\143\157\x6d\x62\151\x6e\x65\144\x2d{$okcwyqcycoicewqy}"; if (!($umgkqiimgiyocmqy && $iiaumsgauuyeqksw->exists($umgkqiimgiyocmqy))) { goto kwoyiysciqumswcy; } $eeamcawaiqocomwy = $eygsasmqycagyayw->cwuqascimsgmiyca($umgkqiimgiyocmqy); if ($qmyyckkowqwaacqi) { goto wmaeicoyyciuaiuy; } DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); goto ooysmgyeqoiesgqm; wmaeicoyyciuaiuy: DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); ooysmgyeqoiesgqm: kwoyiysciqumswcy: if (!$gaemwaimkkayyegw) { goto isqwwmikecauwyuc; } if ($qmyyckkowqwaacqi) { goto aaogeemgkogagkai; } DecoratorAsset::yocqwqycwegayowg($eueuqacmukymcyya, $gaemwaimkkayyegw); goto qqmmycmsoqegcqqw; aaogeemgkogagkai: DecoratorAsset::oiqqguakwcieaioo($eueuqacmukymcyya, $gaemwaimkkayyegw); qqmmycmsoqegcqqw: isqwwmikecauwyuc: oiiqqgyqmggyiums: } public abstract function qqcykaeioiwwaqos(); public function ywgkkwweiyqsyiwu($esaqeawoigqgagum) : bool { return $this->kcciqwskewsuaemk()->exists($esaqeawoigqgagum); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { return $this->ukacwyckseuqsqgc($egsumesakcaaukem->src); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { return $ewgwqamkygiqaawc; } public function agkwcckksaegcsce($wkcwykowmmmwioqs, $sqeykgyoooqysmca) : string { $mkomwsiykqigmqca = Manipulate::cmaecekuqkwmemms("\x4f\x50\x54\x49\115\x49\x5a\x41\124\x49\117\116\x5f\x43\117\115\x42\x49\116\105\137\x50\101\x54\110"); return "{$mkomwsiykqigmqca}\x2f{$sqeykgyoooqysmca}\x2f{$wkcwykowmmmwioqs}"; } public function ygykiseoqukukskk($sqeykgyoooqysmca, $cywsgckammeuyqyq = 4) { $ymqmyyeuycgmigyo = ManipulateString::uniqid($cywsgckammeuyqyq); $mkomwsiykqigmqca = $this->agkwcckksaegcsce($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto magymcqykamwqigw; } $ymqmyyeuycgmigyo = $this->ygykiseoqukukskk($sqeykgyoooqysmca); magymcqykamwqigw: return $ymqmyyeuycgmigyo; } public function wamiiiagcwwigucu($ewgwqamkygiqaawc, $sqeykgyoooqysmca) { $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\157\160\x74\151\x6d\151\x7a\141\164\x69\157\156\x5f\155\x69\x6e\x69\146\x79\x5f{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\x6f\x70\164\151\x6d\x69\x7a\x61\164\151\x6f\156\137\x61\144\166\x61\156\143\145\x5f\155\151\x6e\151\x66\171\x5f{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); return $ewgwqamkygiqaawc; } }
