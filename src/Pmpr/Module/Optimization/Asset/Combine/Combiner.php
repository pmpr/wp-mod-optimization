<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65198726e209e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; use WP_Dependencies; use WP_Styles; abstract class Combiner extends Common { const qqckkouoyyeimmac = 90000; const osusmouuukykwasy = 30000; public function gaiaksuyqkeeiqgo($ugmuiugkaygmsagq) { $megmggkiokqkcwou = 0; $ssimsmwwkqmmgqeg = []; $usyqkyomqcuocgoa = []; $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($this->ocysssyiuaueqiei() && $ugmuiugkaygmsagq instanceof WP_Dependencies)) { goto yuoeumyiuqkuouey; } $qmyyckkowqwaacqi = $ugmuiugkaygmsagq instanceof WP_Styles; $okcwyqcycoicewqy = $qmyyckkowqwaacqi ? "\143\x73\163" : "\152\x73"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $qamuuegkguqmisam = $this->agkwcckksaegcsce("\x6d\x61\156\151\x66\145\x73\x74\56\152\163\157\x6e", $okcwyqcycoicewqy); if ($iiaumsgauuyeqksw->exists($qamuuegkguqmisam)) { goto ussceseaimqywuiy; } $aoiemswgeosamowe = []; goto oyiuemaaykgkqqam; ussceseaimqywuiy: $aoiemswgeosamowe = json_decode($iiaumsgauuyeqksw->souwykwwmyygqyqi($qamuuegkguqmisam), true); oyiuemaaykgkqqam: $coagmqgaakeqmqmw = $ugmuiugkaygmsagq->queue; $eswwueuissckicww = ManipulateServer::ekcymmyqoceukosc(); $yyimiwcuegayoskq = ManipulateArray::get($aoiemswgeosamowe, $eswwueuissckicww); if (!$yyimiwcuegayoskq) { goto yoagcooekomeokwg; } $umgkqiimgiyocmqy = ManipulateArray::get($yyimiwcuegayoskq, "\155\x61\151\x6e"); $siwkgiismmgqgykc = ManipulateArray::get($yyimiwcuegayoskq, "\143\157\x6d\142\x69\156\x65\144"); $oqciymuueukmciea = ManipulateArray::get($yyimiwcuegayoskq, "\151\x6e\x6c\x69\156\145"); $gaemwaimkkayyegw = $iiaumsgauuyeqksw->souwykwwmyygqyqi($oqciymuueukmciea); goto eckcqesiokgwkkiw; yoagcooekomeokwg: foreach ($coagmqgaakeqmqmw as $momcykaoccoymeig => $eueuqacmukymcyya) { $egsumesakcaaukem = ManipulateArray::get($ugmuiugkaygmsagq->registered, $eueuqacmukymcyya); if (!$egsumesakcaaukem instanceof _WP_Dependency) { goto yuqgwwmqwqiuwmaw; } $ogomymegcoacqisg = $this->mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq); $ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($ogomymegcoacqisg); $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); if ($ewgwqamkygiqaawc) { goto qkuiwoqksgayqqmg; } ManipulateArray::unset($coagmqgaakeqmqmw, $momcykaoccoymeig); goto easqmyamcmeesgya; qkuiwoqksgayqqmg: $oiegiwogmwmawkeo = mb_strlen($ewgwqamkygiqaawc, "\x38\142\x69\164"); if ($oiegiwogmwmawkeo <= self::osusmouuukykwasy && $megmggkiokqkcwou <= self::qqckkouoyyeimmac) { goto goqmywuiicciasyk; } if (!$egsumesakcaaukem->extra) { goto oyiuyywyeoskckuw; } foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie && in_array($uusmaiomayssaecw, ["\x61\x66\x74\145\162", "\x62\145\x66\157\x72\x65"]))) { goto wkgskiuiukiuyque; } if (!is_array($eqgoocgaqwqcimie)) { goto ukomuiwukymcoaso; } $eqgoocgaqwqcimie = implode('', $eqgoocgaqwqcimie); ukomuiwukymcoaso: $usyqkyomqcuocgoa[] = $eqgoocgaqwqcimie; wkgskiuiukiuyque: ceiwqkyquikcemmo: } uycesqqkoeamocgm: oyiuyywyeoskckuw: $ssimsmwwkqmmgqeg[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; goto siecswkggyikqkga; goqmywuiicciasyk: $megmggkiokqkcwou += $oiegiwogmwmawkeo; $usyqkyomqcuocgoa[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; siecswkggyikqkga: easqmyamcmeesgya: yuqgwwmqwqiuwmaw: sqmoqymckwsogsqg: } gqmewagyagamokok: $wkcwykowmmmwioqs = "{$this->ygykiseoqukukskk($okcwyqcycoicewqy)}\x2f\x73\x74\x79\154\x65"; $umgkqiimgiyocmqy = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\56{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $oqciymuueukmciea = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\x2d\151\x6e\x6c\x69\x6e\145\x2e{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $ewwqgggaowaceeso = $this->wamiiiagcwwigucu(implode('', $ssimsmwwkqmmgqeg), $okcwyqcycoicewqy); $gaemwaimkkayyegw = $this->wamiiiagcwwigucu(implode('', $usyqkyomqcuocgoa), $okcwyqcycoicewqy); if (!($ewwqgggaowaceeso && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($umgkqiimgiyocmqy, $ewwqgggaowaceeso))) { goto quaqmuusokiyqgqe; } $aoiemswgeosamowe[$eswwueuissckicww]["\155\x61\x69\x6e"] = $umgkqiimgiyocmqy; quaqmuusokiyqgqe: if (!($gaemwaimkkayyegw && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($oqciymuueukmciea, $gaemwaimkkayyegw))) { goto smiemmcqqukyguuu; } $aoiemswgeosamowe[$eswwueuissckicww]["\151\156\x6c\x69\156\x65"] = $oqciymuueukmciea; smiemmcqqukyguuu: $siwkgiismmgqgykc = $coagmqgaakeqmqmw; if (!$siwkgiismmgqgykc) { goto iksewmsaugayqaqq; } $aoiemswgeosamowe[$eswwueuissckicww]["\x63\x6f\x6d\x62\x69\x6e\x65\x64"] = $siwkgiismmgqgykc; iksewmsaugayqaqq: if (!$aoiemswgeosamowe) { goto yamyagayiooyeekg; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($qamuuegkguqmisam, json_encode($aoiemswgeosamowe, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); yamyagayiooyeekg: eckcqesiokgwkkiw: if (!is_array($siwkgiismmgqgykc)) { goto skuqigsokaguscas; } foreach ($siwkgiismmgqgykc as $eueuqacmukymcyya) { if ($qmyyckkowqwaacqi) { goto qmoocweoekqueuyy; } wp_dequeue_script($eueuqacmukymcyya); wp_deregister_script($eueuqacmukymcyya); goto sgiwoiscywusgmmm; qmoocweoekqueuyy: wp_dequeue_style($eueuqacmukymcyya); wp_deregister_style($eueuqacmukymcyya); sgiwoiscywusgmmm: mqiiqkuaoekeuswo: } ecouwqosmoyyqmkw: skuqigsokaguscas: $eueuqacmukymcyya = "\x6f\x70\x74\x2d\143\157\155\142\151\156\145\144\55{$okcwyqcycoicewqy}"; if (!($umgkqiimgiyocmqy && $iiaumsgauuyeqksw->exists($umgkqiimgiyocmqy))) { goto wmumywgyyeagqoeq; } $eeamcawaiqocomwy = $eygsasmqycagyayw->cwuqascimsgmiyca($umgkqiimgiyocmqy); if ($qmyyckkowqwaacqi) { goto quyogmwugsyoaaiu; } DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); goto mmgmqogugasaqkgg; quyogmwugsyoaaiu: DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); mmgmqogugasaqkgg: wmumywgyyeagqoeq: if (!$gaemwaimkkayyegw) { goto eoyiumycaigawmmc; } if ($qmyyckkowqwaacqi) { goto smcguieygyqcaqgs; } DecoratorAsset::yocqwqycwegayowg($eueuqacmukymcyya, $gaemwaimkkayyegw); goto mgcuiguaomoqwwwm; smcguieygyqcaqgs: DecoratorAsset::oiqqguakwcieaioo($eueuqacmukymcyya, $gaemwaimkkayyegw); mgcuiguaomoqwwwm: eoyiumycaigawmmc: yuoeumyiuqkuouey: } public abstract function qqcykaeioiwwaqos(); public function ywgkkwweiyqsyiwu($esaqeawoigqgagum) : bool { return $this->kcciqwskewsuaemk()->exists($esaqeawoigqgagum); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { return $this->ukacwyckseuqsqgc($egsumesakcaaukem->src); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { return $ewgwqamkygiqaawc; } public function agkwcckksaegcsce($wkcwykowmmmwioqs, $sqeykgyoooqysmca) : string { $mkomwsiykqigmqca = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\120\122\137\117\x50\124\x5f\x43\x4f\x4d\102\111\x4e\x45\137\120\101\124\x48"); return "{$mkomwsiykqigmqca}\57{$sqeykgyoooqysmca}\57{$wkcwykowmmmwioqs}"; } public function ygykiseoqukukskk($sqeykgyoooqysmca, $cywsgckammeuyqyq = 4) { $ymqmyyeuycgmigyo = ManipulateString::uniqid($cywsgckammeuyqyq); $mkomwsiykqigmqca = $this->agkwcckksaegcsce($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto eyiwqgqcsqakwqss; } $ymqmyyeuycgmigyo = $this->ygykiseoqukukskk($sqeykgyoooqysmca); eyiwqgqcsqakwqss: return $ymqmyyeuycgmigyo; } public function wamiiiagcwwigucu($ewgwqamkygiqaawc, $sqeykgyoooqysmca) { $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\157\160\x74\151\x6d\x69\172\141\164\x69\157\x6e\x5f\x6d\x69\156\151\x66\171\x5f{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\157\160\x74\x69\155\x69\172\x61\164\151\x6f\x6e\137\141\144\166\x61\156\x63\145\x5f\x6d\x69\156\x69\x66\171\137{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); return $ewgwqamkygiqaawc; } }
