<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6533a38a20125             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; use WP_Dependencies; use WP_Styles; abstract class Combiner extends Common { const qqckkouoyyeimmac = 90000; const osusmouuukykwasy = 30000; public function gaiaksuyqkeeiqgo($ugmuiugkaygmsagq) { $megmggkiokqkcwou = 0; $ssimsmwwkqmmgqeg = []; $usyqkyomqcuocgoa = []; $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($this->ocysssyiuaueqiei("\x63\157\x6d\x62\x69\x6e\x65\x72") && $ugmuiugkaygmsagq instanceof WP_Dependencies)) { goto gkoaeuekqockuoiq; } $qmyyckkowqwaacqi = $ugmuiugkaygmsagq instanceof WP_Styles; $okcwyqcycoicewqy = $qmyyckkowqwaacqi ? "\x63\163\163" : "\x6a\x73"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $qamuuegkguqmisam = $this->agkwcckksaegcsce("\x6d\x61\156\151\146\145\x73\164\x2e\152\163\157\x6e", $okcwyqcycoicewqy); if ($iiaumsgauuyeqksw->exists($qamuuegkguqmisam)) { goto yiceawuuiusakwiq; } $aoiemswgeosamowe = []; goto sgocecweikecwwgq; yiceawuuiusakwiq: $aoiemswgeosamowe = json_decode($iiaumsgauuyeqksw->souwykwwmyygqyqi($qamuuegkguqmisam), true); sgocecweikecwwgq: $coagmqgaakeqmqmw = $ugmuiugkaygmsagq->queue; $eswwueuissckicww = ManipulateServer::ekcymmyqoceukosc(); $yyimiwcuegayoskq = ManipulateArray::get($aoiemswgeosamowe, $eswwueuissckicww); if (!$yyimiwcuegayoskq) { goto igwkcikeyoowosoi; } $umgkqiimgiyocmqy = ManipulateArray::get($yyimiwcuegayoskq, "\155\141\151\156"); $siwkgiismmgqgykc = ManipulateArray::get($yyimiwcuegayoskq, "\x63\157\155\142\151\x6e\x65\144"); $oqciymuueukmciea = ManipulateArray::get($yyimiwcuegayoskq, "\151\156\x6c\151\156\x65"); $gaemwaimkkayyegw = $iiaumsgauuyeqksw->souwykwwmyygqyqi($oqciymuueukmciea); goto iqsgossweywksoia; igwkcikeyoowosoi: foreach ($coagmqgaakeqmqmw as $momcykaoccoymeig => $eueuqacmukymcyya) { $egsumesakcaaukem = ManipulateArray::get($ugmuiugkaygmsagq->registered, $eueuqacmukymcyya); if (!$egsumesakcaaukem instanceof _WP_Dependency) { goto mqgeseysuwcaqwiy; } $ogomymegcoacqisg = $this->mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq); $ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($ogomymegcoacqisg); $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); if ($ewgwqamkygiqaawc) { goto sycougcyeqmeiagk; } ManipulateArray::unset($coagmqgaakeqmqmw, $momcykaoccoymeig); goto ssagcgqaucssyego; sycougcyeqmeiagk: $oiegiwogmwmawkeo = mb_strlen($ewgwqamkygiqaawc, "\70\142\x69\164"); if ($oiegiwogmwmawkeo <= self::osusmouuukykwasy && $megmggkiokqkcwou <= self::qqckkouoyyeimmac) { goto giugwaeuwaomossq; } if (!$egsumesakcaaukem->extra) { goto suqckoccuyeeymww; } foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie && in_array($uusmaiomayssaecw, ["\x61\x66\x74\x65\x72", "\x62\x65\146\x6f\x72\x65"]))) { goto yoqsigmoyaaceqky; } if (!is_array($eqgoocgaqwqcimie)) { goto yksywwikmeksikqc; } $eqgoocgaqwqcimie = implode('', $eqgoocgaqwqcimie); yksywwikmeksikqc: $usyqkyomqcuocgoa[] = $eqgoocgaqwqcimie; yoqsigmoyaaceqky: masakmomqmeocqqg: } iwkckkeimmeoquyq: suqckoccuyeeymww: $ssimsmwwkqmmgqeg[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; goto acgqaeakoyasgkku; giugwaeuwaomossq: $megmggkiokqkcwou += $oiegiwogmwmawkeo; $usyqkyomqcuocgoa[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; acgqaeakoyasgkku: ssagcgqaucssyego: mqgeseysuwcaqwiy: yqcusaeysomccaok: } qwisiamkmkkwucyo: $wkcwykowmmmwioqs = "{$this->ygykiseoqukukskk($okcwyqcycoicewqy)}\x2f\x73\164\x79\154\145"; $umgkqiimgiyocmqy = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\56{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $oqciymuueukmciea = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\55\x69\156\x6c\151\x6e\145\x2e{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $ewwqgggaowaceeso = $this->wamiiiagcwwigucu(implode('', $ssimsmwwkqmmgqeg), $okcwyqcycoicewqy); $gaemwaimkkayyegw = $this->wamiiiagcwwigucu(implode('', $usyqkyomqcuocgoa), $okcwyqcycoicewqy); if (!($ewwqgggaowaceeso && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($umgkqiimgiyocmqy, $ewwqgggaowaceeso))) { goto ekoqieigyoeyauqa; } $aoiemswgeosamowe[$eswwueuissckicww]["\x6d\x61\151\156"] = $umgkqiimgiyocmqy; ekoqieigyoeyauqa: if (!($gaemwaimkkayyegw && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($oqciymuueukmciea, $gaemwaimkkayyegw))) { goto cuwcsamuuqyuyqsu; } $aoiemswgeosamowe[$eswwueuissckicww]["\151\156\x6c\151\156\145"] = $oqciymuueukmciea; cuwcsamuuqyuyqsu: $siwkgiismmgqgykc = $coagmqgaakeqmqmw; if (!$siwkgiismmgqgykc) { goto mimacwyuueomgwwy; } $aoiemswgeosamowe[$eswwueuissckicww]["\143\x6f\x6d\142\x69\x6e\145\144"] = $siwkgiismmgqgykc; mimacwyuueomgwwy: if (!$aoiemswgeosamowe) { goto ksckqkmwiqggykke; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($qamuuegkguqmisam, json_encode($aoiemswgeosamowe, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); ksckqkmwiqggykke: iqsgossweywksoia: if (!is_array($siwkgiismmgqgykc)) { goto uwaimsisescsgyqk; } foreach ($siwkgiismmgqgykc as $eueuqacmukymcyya) { if ($qmyyckkowqwaacqi) { goto ggeoqeowscwkeumy; } wp_dequeue_script($eueuqacmukymcyya); wp_deregister_script($eueuqacmukymcyya); goto qyeswawykmasuqye; ggeoqeowscwkeumy: wp_dequeue_style($eueuqacmukymcyya); wp_deregister_style($eueuqacmukymcyya); qyeswawykmasuqye: cuommomwmsackoqc: } awaqksikyomsuaeo: uwaimsisescsgyqk: $eueuqacmukymcyya = "\x6f\160\x74\x2d\143\x6f\x6d\142\151\156\145\144\55{$okcwyqcycoicewqy}"; if (!($umgkqiimgiyocmqy && $iiaumsgauuyeqksw->exists($umgkqiimgiyocmqy))) { goto ukwoswyyogmsygqg; } $eeamcawaiqocomwy = $eygsasmqycagyayw->cwuqascimsgmiyca($umgkqiimgiyocmqy); if ($qmyyckkowqwaacqi) { goto uqcsksaywyqeumig; } DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); goto yggmaskeguaqkusc; uqcsksaywyqeumig: DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); yggmaskeguaqkusc: ukwoswyyogmsygqg: if (!$gaemwaimkkayyegw) { goto yqicwmekwuoywyus; } if ($qmyyckkowqwaacqi) { goto jsmisuccwyukksgc; } DecoratorAsset::yocqwqycwegayowg($eueuqacmukymcyya, $gaemwaimkkayyegw); goto kwmiwaecqcgiaqye; jsmisuccwyukksgc: DecoratorAsset::oiqqguakwcieaioo($eueuqacmukymcyya, $gaemwaimkkayyegw); kwmiwaecqcgiaqye: yqicwmekwuoywyus: gkoaeuekqockuoiq: } public abstract function qqcykaeioiwwaqos(); public function ywgkkwweiyqsyiwu($esaqeawoigqgagum) : bool { return $this->kcciqwskewsuaemk()->exists($esaqeawoigqgagum); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { return $this->ukacwyckseuqsqgc($egsumesakcaaukem->src); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { return $ewgwqamkygiqaawc; } public function agkwcckksaegcsce($wkcwykowmmmwioqs, $sqeykgyoooqysmca) : string { $mkomwsiykqigmqca = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\120\x52\x5f\x4f\x50\124\137\103\x4f\115\x42\x49\x4e\105\x5f\x50\101\124\110"); return "{$mkomwsiykqigmqca}\57{$sqeykgyoooqysmca}\x2f{$wkcwykowmmmwioqs}"; } public function ygykiseoqukukskk($sqeykgyoooqysmca, $cywsgckammeuyqyq = 4) { $ymqmyyeuycgmigyo = ManipulateString::uniqid($cywsgckammeuyqyq); $mkomwsiykqigmqca = $this->agkwcckksaegcsce($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto eekaiaeqewiqkkgm; } $ymqmyyeuycgmigyo = $this->ygykiseoqukukskk($sqeykgyoooqysmca); eekaiaeqewiqkkgm: return $ymqmyyeuycgmigyo; } public function wamiiiagcwwigucu($ewgwqamkygiqaawc, $sqeykgyoooqysmca) { $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\x6f\160\x74\151\x6d\151\172\141\164\151\x6f\156\137\x6d\151\x6e\151\146\171\x5f{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\157\x70\x74\x69\x6d\x69\x7a\141\x74\x69\157\156\137\x61\x64\166\x61\156\143\x65\x5f\155\151\156\151\x66\x79\x5f{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); return $ewgwqamkygiqaawc; } }
