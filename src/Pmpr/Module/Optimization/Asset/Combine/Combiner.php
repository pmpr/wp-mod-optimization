<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffc5814be8b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; use WP_Dependencies; use WP_Styles; abstract class Combiner extends Common { const qqckkouoyyeimmac = 90000; const osusmouuukykwasy = 30000; public function gaiaksuyqkeeiqgo($ugmuiugkaygmsagq) { $megmggkiokqkcwou = 0; $ssimsmwwkqmmgqeg = []; $usyqkyomqcuocgoa = []; $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($this->ocysssyiuaueqiei() && $ugmuiugkaygmsagq instanceof WP_Dependencies)) { goto kieyoaoawqacqamy; } $qmyyckkowqwaacqi = $ugmuiugkaygmsagq instanceof WP_Styles; $okcwyqcycoicewqy = $qmyyckkowqwaacqi ? "\x63\163\163" : "\152\163"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $qamuuegkguqmisam = $this->agkwcckksaegcsce("\x6d\x61\156\151\x66\x65\163\164\x2e\x6a\x73\157\156", $okcwyqcycoicewqy); if ($iiaumsgauuyeqksw->exists($qamuuegkguqmisam)) { goto kucqcgeesiccuuia; } $aoiemswgeosamowe = []; goto oycuaqewsskgkqci; kucqcgeesiccuuia: $aoiemswgeosamowe = json_decode($iiaumsgauuyeqksw->souwykwwmyygqyqi($qamuuegkguqmisam), true); oycuaqewsskgkqci: $coagmqgaakeqmqmw = $ugmuiugkaygmsagq->queue; $eswwueuissckicww = ManipulateServer::ekcymmyqoceukosc(); $yyimiwcuegayoskq = ManipulateArray::get($aoiemswgeosamowe, $eswwueuissckicww); if (!$yyimiwcuegayoskq) { goto umemmgiwimkymaya; } $umgkqiimgiyocmqy = ManipulateArray::get($yyimiwcuegayoskq, "\x6d\141\x69\x6e"); $siwkgiismmgqgykc = ManipulateArray::get($yyimiwcuegayoskq, "\143\x6f\x6d\x62\x69\x6e\x65\x64"); $oqciymuueukmciea = ManipulateArray::get($yyimiwcuegayoskq, "\x69\x6e\154\151\x6e\145"); $gaemwaimkkayyegw = $iiaumsgauuyeqksw->souwykwwmyygqyqi($oqciymuueukmciea); goto omsmaougqkqigogw; umemmgiwimkymaya: foreach ($coagmqgaakeqmqmw as $momcykaoccoymeig => $eueuqacmukymcyya) { $egsumesakcaaukem = ManipulateArray::get($ugmuiugkaygmsagq->registered, $eueuqacmukymcyya); if (!$egsumesakcaaukem instanceof _WP_Dependency) { goto xogaycsaesgqeqig; } $ogomymegcoacqisg = $this->mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq); $ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($ogomymegcoacqisg); $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); if ($ewgwqamkygiqaawc) { goto mmmqqoemusicwgqg; } ManipulateArray::unset($coagmqgaakeqmqmw, $momcykaoccoymeig); goto iquugwoswgkoiieg; mmmqqoemusicwgqg: $oiegiwogmwmawkeo = mb_strlen($ewgwqamkygiqaawc, "\70\142\151\164"); if ($oiegiwogmwmawkeo <= self::osusmouuukykwasy && $megmggkiokqkcwou <= self::qqckkouoyyeimmac) { goto uugwmywmaqomeksa; } if (!$egsumesakcaaukem->extra) { goto ucasigqmoiwaimkk; } foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie && in_array($uusmaiomayssaecw, ["\x61\146\164\x65\162", "\x62\145\x66\x6f\162\145"]))) { goto gwkawguwsamuomuo; } if (!is_array($eqgoocgaqwqcimie)) { goto sgiouaqukyycswqm; } $eqgoocgaqwqcimie = implode('', $eqgoocgaqwqcimie); sgiouaqukyycswqm: $usyqkyomqcuocgoa[] = $eqgoocgaqwqcimie; gwkawguwsamuomuo: syoeqaqkseguwmgy: } iwgmywqocewwgoeo: ucasigqmoiwaimkk: $ssimsmwwkqmmgqeg[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; goto wowmysuygugawmmu; uugwmywmaqomeksa: $megmggkiokqkcwou += $oiegiwogmwmawkeo; $usyqkyomqcuocgoa[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; wowmysuygugawmmu: iquugwoswgkoiieg: xogaycsaesgqeqig: amqgiisymksuuuss: } ocmagamuyawyiyka: $wkcwykowmmmwioqs = "{$this->ygykiseoqukukskk($okcwyqcycoicewqy)}\x2f\x73\164\171\x6c\145"; $umgkqiimgiyocmqy = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\56{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $oqciymuueukmciea = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\x2d\151\x6e\154\x69\156\x65\x2e{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $ewwqgggaowaceeso = $this->wamiiiagcwwigucu(implode('', $ssimsmwwkqmmgqeg), $okcwyqcycoicewqy); $gaemwaimkkayyegw = $this->wamiiiagcwwigucu(implode('', $usyqkyomqcuocgoa), $okcwyqcycoicewqy); if (!($ewwqgggaowaceeso && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($umgkqiimgiyocmqy, $ewwqgggaowaceeso))) { goto gsiaskgsukseumig; } $aoiemswgeosamowe[$eswwueuissckicww]["\x6d\141\x69\x6e"] = $umgkqiimgiyocmqy; gsiaskgsukseumig: if (!($gaemwaimkkayyegw && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($oqciymuueukmciea, $gaemwaimkkayyegw))) { goto syiyemqigyugagks; } $aoiemswgeosamowe[$eswwueuissckicww]["\x69\156\x6c\x69\x6e\145"] = $oqciymuueukmciea; syiyemqigyugagks: $siwkgiismmgqgykc = $coagmqgaakeqmqmw; if (!$siwkgiismmgqgykc) { goto woqkgwmkmqsuceuy; } $aoiemswgeosamowe[$eswwueuissckicww]["\143\157\155\x62\x69\156\x65\x64"] = $siwkgiismmgqgykc; woqkgwmkmqsuceuy: if (!$aoiemswgeosamowe) { goto imwiyqcekcykscui; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($qamuuegkguqmisam, json_encode($aoiemswgeosamowe, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); imwiyqcekcykscui: omsmaougqkqigogw: if (!is_array($siwkgiismmgqgykc)) { goto ucaoyoamaycsiacq; } foreach ($siwkgiismmgqgykc as $eueuqacmukymcyya) { if ($qmyyckkowqwaacqi) { goto guqmgiqaaowaauyo; } wp_dequeue_script($eueuqacmukymcyya); wp_deregister_script($eueuqacmukymcyya); goto mccimkgwkkamsime; guqmgiqaaowaauyo: wp_dequeue_style($eueuqacmukymcyya); wp_deregister_style($eueuqacmukymcyya); mccimkgwkkamsime: qweyymyuuqwcmkqg: } geasgywiogoeamek: ucaoyoamaycsiacq: $eueuqacmukymcyya = "\x6f\160\164\55\x63\157\x6d\142\x69\156\145\144\x2d{$okcwyqcycoicewqy}"; if (!($umgkqiimgiyocmqy && $iiaumsgauuyeqksw->exists($umgkqiimgiyocmqy))) { goto iaoyeugekskmewgs; } $eeamcawaiqocomwy = $eygsasmqycagyayw->cwuqascimsgmiyca($umgkqiimgiyocmqy); if ($qmyyckkowqwaacqi) { goto iuyagqakcieasiua; } DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); goto oasisywuwssumsok; iuyagqakcieasiua: DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); oasisywuwssumsok: iaoyeugekskmewgs: if (!$gaemwaimkkayyegw) { goto eciksmgaqikwegwq; } if ($qmyyckkowqwaacqi) { goto iokemmkgmcaksiqu; } DecoratorAsset::yocqwqycwegayowg($eueuqacmukymcyya, $gaemwaimkkayyegw); goto okagauksoqkoqygi; iokemmkgmcaksiqu: DecoratorAsset::oiqqguakwcieaioo($eueuqacmukymcyya, $gaemwaimkkayyegw); okagauksoqkoqygi: eciksmgaqikwegwq: kieyoaoawqacqamy: } public abstract function qqcykaeioiwwaqos(); public function ywgkkwweiyqsyiwu($esaqeawoigqgagum) : bool { return $this->kcciqwskewsuaemk()->exists($esaqeawoigqgagum); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { return $this->ukacwyckseuqsqgc($egsumesakcaaukem->src); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { return $ewgwqamkygiqaawc; } public function agkwcckksaegcsce($wkcwykowmmmwioqs, $sqeykgyoooqysmca) : string { $mkomwsiykqigmqca = Manipulate::cmaecekuqkwmemms("\x4f\x50\x54\x49\115\111\x5a\x41\x54\x49\x4f\116\137\x43\x4f\x4d\102\111\x4e\105\x5f\x50\101\x54\x48"); return "{$mkomwsiykqigmqca}\57{$sqeykgyoooqysmca}\57{$wkcwykowmmmwioqs}"; } public function ygykiseoqukukskk($sqeykgyoooqysmca, $cywsgckammeuyqyq = 4) { $ymqmyyeuycgmigyo = ManipulateString::uniqid($cywsgckammeuyqyq); $mkomwsiykqigmqca = $this->agkwcckksaegcsce($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto qckouamqueqiykqi; } $ymqmyyeuycgmigyo = $this->ygykiseoqukukskk($sqeykgyoooqysmca); qckouamqueqiykqi: return $ymqmyyeuycgmigyo; } public function wamiiiagcwwigucu($ewgwqamkygiqaawc, $sqeykgyoooqysmca) { $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\157\x70\x74\x69\x6d\x69\172\x61\x74\151\x6f\x6e\x5f\155\x69\x6e\x69\146\171\137{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\x6f\160\x74\151\x6d\151\172\141\164\151\157\x6e\137\141\x64\x76\141\156\x63\145\x5f\x6d\x69\x6e\x69\x66\x79\137{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); return $ewgwqamkygiqaawc; } }
