<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62fab02fddc1b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; use WP_Dependencies; use WP_Styles; abstract class Combiner extends Common { const qqckkouoyyeimmac = 90000; const osusmouuukykwasy = 30000; public function gaiaksuyqkeeiqgo($ugmuiugkaygmsagq) { $megmggkiokqkcwou = 0; $ssimsmwwkqmmgqeg = []; $usyqkyomqcuocgoa = []; $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($this->ocysssyiuaueqiei() && $ugmuiugkaygmsagq instanceof WP_Dependencies)) { goto ccyiggckemwgooco; } $qmyyckkowqwaacqi = $ugmuiugkaygmsagq instanceof WP_Styles; $okcwyqcycoicewqy = $qmyyckkowqwaacqi ? "\143\163\163" : "\152\x73"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $qamuuegkguqmisam = $this->agkwcckksaegcsce("\x6d\141\x6e\x69\x66\x65\x73\164\x2e\x6a\163\157\156", $okcwyqcycoicewqy); if ($iiaumsgauuyeqksw->exists($qamuuegkguqmisam)) { goto cwcmwogseemgqgqq; } $aoiemswgeosamowe = []; goto yuoyackaoigyyyso; cwcmwogseemgqgqq: $aoiemswgeosamowe = json_decode($iiaumsgauuyeqksw->souwykwwmyygqyqi($qamuuegkguqmisam), true); yuoyackaoigyyyso: $coagmqgaakeqmqmw = $ugmuiugkaygmsagq->queue; $eswwueuissckicww = ManipulateServer::ekcymmyqoceukosc(); $yyimiwcuegayoskq = ManipulateArray::get($aoiemswgeosamowe, $eswwueuissckicww); if (!$yyimiwcuegayoskq) { goto iisieuaeyiqwckou; } $umgkqiimgiyocmqy = ManipulateArray::get($yyimiwcuegayoskq, "\x6d\141\151\x6e"); $siwkgiismmgqgykc = ManipulateArray::get($yyimiwcuegayoskq, "\x63\157\x6d\142\x69\156\145\144"); $oqciymuueukmciea = ManipulateArray::get($yyimiwcuegayoskq, "\151\x6e\x6c\x69\156\x65"); $gaemwaimkkayyegw = $iiaumsgauuyeqksw->souwykwwmyygqyqi($oqciymuueukmciea); goto oskwkeaemiqcaqkc; iisieuaeyiqwckou: foreach ($coagmqgaakeqmqmw as $momcykaoccoymeig => $eueuqacmukymcyya) { $egsumesakcaaukem = ManipulateArray::get($ugmuiugkaygmsagq->registered, $eueuqacmukymcyya); if (!$egsumesakcaaukem instanceof _WP_Dependency) { goto cgmcwkmmcmmkiooc; } $ogomymegcoacqisg = $this->mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq); $ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($ogomymegcoacqisg); $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); if ($ewgwqamkygiqaawc) { goto bgoygegmogcmeaou; } ManipulateArray::unset($coagmqgaakeqmqmw, $momcykaoccoymeig); goto awgaewwsskasueke; bgoygegmogcmeaou: $oiegiwogmwmawkeo = mb_strlen($ewgwqamkygiqaawc, "\x38\142\151\x74"); if ($oiegiwogmwmawkeo <= self::osusmouuukykwasy && $megmggkiokqkcwou <= self::qqckkouoyyeimmac) { goto mgwgiesscqoaqcau; } if (!$egsumesakcaaukem->extra) { goto geugsymgsiuuqccg; } foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie && in_array($uusmaiomayssaecw, ["\141\x66\164\145\x72", "\142\x65\x66\157\x72\145"]))) { goto quewwumogiocouii; } if (!is_array($eqgoocgaqwqcimie)) { goto eyuoecmogqwkmomi; } $eqgoocgaqwqcimie = implode('', $eqgoocgaqwqcimie); eyuoecmogqwkmomi: $usyqkyomqcuocgoa[] = $eqgoocgaqwqcimie; quewwumogiocouii: gqywcowiigceimaw: } gsimeiqkoyqkuecq: geugsymgsiuuqccg: $ssimsmwwkqmmgqeg[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; goto ioacywuoyuskqmwy; mgwgiesscqoaqcau: $megmggkiokqkcwou += $oiegiwogmwmawkeo; $usyqkyomqcuocgoa[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; ioacywuoyuskqmwy: awgaewwsskasueke: cgmcwkmmcmmkiooc: wukuisoeoeomgegu: } kcqieuukskyiywss: $wkcwykowmmmwioqs = "{$this->ygykiseoqukukskk($okcwyqcycoicewqy)}\57\163\x74\171\154\145"; $umgkqiimgiyocmqy = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\56{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $oqciymuueukmciea = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\55\x69\x6e\154\x69\156\x65\x2e{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $ewwqgggaowaceeso = $this->wamiiiagcwwigucu(implode('', $ssimsmwwkqmmgqeg), $okcwyqcycoicewqy); $gaemwaimkkayyegw = $this->wamiiiagcwwigucu(implode('', $usyqkyomqcuocgoa), $okcwyqcycoicewqy); if (!($ewwqgggaowaceeso && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($umgkqiimgiyocmqy, $ewwqgggaowaceeso))) { goto iamooqskosymqsmw; } $aoiemswgeosamowe[$eswwueuissckicww]["\x6d\x61\x69\156"] = $umgkqiimgiyocmqy; iamooqskosymqsmw: if (!($gaemwaimkkayyegw && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($oqciymuueukmciea, $gaemwaimkkayyegw))) { goto wwccoougkywoaoui; } $aoiemswgeosamowe[$eswwueuissckicww]["\x69\156\154\x69\x6e\x65"] = $oqciymuueukmciea; wwccoougkywoaoui: $siwkgiismmgqgykc = $coagmqgaakeqmqmw; if (!$siwkgiismmgqgykc) { goto eygqeoiskweuiuqi; } $aoiemswgeosamowe[$eswwueuissckicww]["\x63\157\155\142\151\x6e\145\x64"] = $siwkgiismmgqgykc; eygqeoiskweuiuqi: if (!$aoiemswgeosamowe) { goto uykwmucgoywoesui; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($qamuuegkguqmisam, json_encode($aoiemswgeosamowe, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); uykwmucgoywoesui: oskwkeaemiqcaqkc: if (!is_array($siwkgiismmgqgykc)) { goto wqmwcuggcisqieao; } foreach ($siwkgiismmgqgykc as $eueuqacmukymcyya) { if ($qmyyckkowqwaacqi) { goto iwosouqsesoqcska; } wp_dequeue_script($eueuqacmukymcyya); wp_deregister_script($eueuqacmukymcyya); goto iacwyogogoccmwsg; iwosouqsesoqcska: wp_dequeue_style($eueuqacmukymcyya); wp_deregister_style($eueuqacmukymcyya); iacwyogogoccmwsg: iaygaasesyymwgss: } kiqmcymowosckmii: wqmwcuggcisqieao: $eueuqacmukymcyya = "\157\160\x74\x2d\143\157\x6d\x62\x69\x6e\145\144\55{$okcwyqcycoicewqy}"; if (!($umgkqiimgiyocmqy && $iiaumsgauuyeqksw->exists($umgkqiimgiyocmqy))) { goto yeiicwscguyokwyu; } $eeamcawaiqocomwy = $eygsasmqycagyayw->cwuqascimsgmiyca($umgkqiimgiyocmqy); if ($qmyyckkowqwaacqi) { goto qsyqcokomswykyso; } DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); goto issgmmkcgesyeoas; qsyqcokomswykyso: DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); issgmmkcgesyeoas: yeiicwscguyokwyu: if (!$gaemwaimkkayyegw) { goto mssaawaiaimogowg; } if ($qmyyckkowqwaacqi) { goto yueosioyegouuwqo; } DecoratorAsset::yocqwqycwegayowg($eueuqacmukymcyya, $gaemwaimkkayyegw); goto giuoqsumkimmuaya; yueosioyegouuwqo: DecoratorAsset::oiqqguakwcieaioo($eueuqacmukymcyya, $gaemwaimkkayyegw); giuoqsumkimmuaya: mssaawaiaimogowg: ccyiggckemwgooco: } public abstract function qqcykaeioiwwaqos(); public function ywgkkwweiyqsyiwu($esaqeawoigqgagum) : bool { return $this->kcciqwskewsuaemk()->exists($esaqeawoigqgagum); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { return $this->ukacwyckseuqsqgc($egsumesakcaaukem->src); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { return $ewgwqamkygiqaawc; } public function agkwcckksaegcsce($wkcwykowmmmwioqs, $sqeykgyoooqysmca) : string { $mkomwsiykqigmqca = Manipulate::cmaecekuqkwmemms("\117\120\124\x49\115\x49\132\x41\x54\x49\117\x4e\137\x43\117\115\102\x49\x4e\x45\x5f\x50\x41\124\x48"); return "{$mkomwsiykqigmqca}\57{$sqeykgyoooqysmca}\57{$wkcwykowmmmwioqs}"; } public function ygykiseoqukukskk($sqeykgyoooqysmca, $cywsgckammeuyqyq = 4) { $ymqmyyeuycgmigyo = ManipulateString::uniqid($cywsgckammeuyqyq); $mkomwsiykqigmqca = $this->agkwcckksaegcsce($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto umamqqwcoewcigew; } $ymqmyyeuycgmigyo = $this->ygykiseoqukukskk($sqeykgyoooqysmca); umamqqwcoewcigew: return $ymqmyyeuycgmigyo; } public function wamiiiagcwwigucu($ewgwqamkygiqaawc, $sqeykgyoooqysmca) { $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\x6f\x70\x74\x69\x6d\151\x7a\x61\x74\x69\x6f\x6e\137\155\x69\156\x69\x66\x79\137{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\157\160\x74\151\x6d\151\172\x61\x74\151\157\156\x5f\141\x64\x76\x61\156\143\x65\137\155\151\x6e\151\146\x79\x5f{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); return $ewgwqamkygiqaawc; } }
