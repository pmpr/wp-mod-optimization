<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2f79d4da80             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use MatthiasMullie\Minify\CSS; use Pmpr\Common\Foundation\Interfaces\Constants; class Style extends Minifier { public function ikcgmcycisiccyuc() { $this->name = Constants::wwukgkqwyakeqwqk; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\x70\x5f\x61\144\x64\x5f\151\x6e\154\x69\x6e\145\137\x73\x74\x79\x6c\145\x5f\x64\141\x74\141", [$this, "\x6f\153\x75\147\x75\x79\x61\x63\x67\x67\x73\x61\147\x65\x71\161"]); parent::kgquecmsgcouyaya(); } public function okuguyacggsageqq($ewgwqamkygiqaawc, string $kqywgoqsmuswammk = null) { return parent::okuguyacggsageqq($ewgwqamkygiqaawc, "\163\164\x79\154\145"); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { $aksgkeoomwimawms = new CSS($ewgwqamkygiqaawc); return $aksgkeoomwimawms->minify(); } public function ackccoemuqacsooc(?string $ewgwqamkygiqaawc) : ?string { $ewgwqamkygiqaawc = $this->oeyciyycaaeuacsu($ewgwqamkygiqaawc); return $this->keaqaesooiggwkkg($ewgwqamkygiqaawc); } public function oeyciyycaaeuacsu($ewgwqamkygiqaawc) : string { preg_match_all("\57\100\x2e\52\x3f\133\x5e\173\x5d\x2b\173\x28\133\x5c\163\x5c\x53\x5d\x2b\x3f\175\x29\x5c\x73\x2a\175\174\x28\x5b\x61\x2d\172\x30\x2d\71\54\x20\x2e\50\x3a\51\x23\x5c\133\x5c\135\75\137\76\53\176\x5c\55\100\x5d\53\x29\173\x28\x5b\136\x7d\174\x5e\173\x5d\52\x29\175\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[0] ?? []; if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto kiwqkcaekqqyuegq; } $wukkyuqigkkuocmy = array_diff_assoc($meyiiwcswqmuggyg, array_unique($meyiiwcswqmuggyg)); foreach ($wukkyuqigkkuocmy as $mqgsiqkcgqocoaam) { $ewgwqamkygiqaawc = str_replace($mqgsiqkcgqocoaam, '', $ewgwqamkygiqaawc); qsygcycwieukkgwc: } umgaesggesswoaqe: kiwqkcaekqqyuegq: return $ewgwqamkygiqaawc; } public function keaqaesooiggwkkg($ewgwqamkygiqaawc) { return preg_replace("\x2f\133\136\x7d\73\173\x5c\x6e\x5d\x2b\x7b\x5c\x73\x2a\175\57", '', $ewgwqamkygiqaawc); } public function awgqiogkeqaeomoa($ewgwqamkygiqaawc) { $qgowgcsuycquswmo = $this->qaekoyawqougggiq($ewgwqamkygiqaawc); if (!$qgowgcsuycquswmo) { goto yqykqysmiquwoasu; } $yygmoeguaqyumuui = implode("\174", array_keys($qgowgcsuycquswmo)); if (!preg_match_all("\57\166\141\x72\x5c\50\50\x5b\x5e\x29\x5d{$yygmoeguaqyumuui}\51\x5c\x29\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg)) { goto cmqucgoewuyieoyk; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($meyiiwcswqmuggyg[0] as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg[1], $momcykaoccoymeig); $moyaaaascoeowegu = $gkyciwoiiisgywcs->get($qgowgcsuycquswmo, $uusmaiomayssaecw, $uammqaqiwgcmeska); if (!($moyaaaascoeowegu && $uammqaqiwgcmeska !== $moyaaaascoeowegu)) { goto gimmuoqwckiseaik; } $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, $moyaaaascoeowegu, $ewgwqamkygiqaawc); gimmuoqwckiseaik: iqcogmsguwoikame: } quwcqmyokicssyew: cmqucgoewuyieoyk: yqykqysmiquwoasu: return $ewgwqamkygiqaawc; } public function qaekoyawqougggiq(?string &$ewgwqamkygiqaawc = null) : array { preg_match_all("\57\72\162\x6f\157\164\134\163\x2a\x7b\50\133\x5c\163\134\123\135\x2b\x3f\51\x7d\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $moyaaaascoeowegu = []; $qgowgcsuycquswmo = []; if (!isset($meyiiwcswqmuggyg[1])) { goto ssoucoucsgccekwe; } $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1]; foreach ($meyiiwcswqmuggyg as $uammqaqiwgcmeska) { $oammesyieqmwuwyi = explode("\73", $uammqaqiwgcmeska); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $skueimwaqauscmoc = explode("\72", $igqsaukqcqscimok); $ymqmyyeuycgmigyo = $skueimwaqauscmoc[0]; $eqgoocgaqwqcimie = $skueimwaqauscmoc[1]; if (!($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo)) { goto qqewoyookaskiuek; } if (preg_match("\x2f\166\141\x72\x5c\50\x28\133\136\51\x5d\x2a\x29\x5c\51\57", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { goto kqksuugcgsyeoayy; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; goto iggyqogweyosuikc; kqksuugcgsyeoayy: $moyaaaascoeowegu[$ymqmyyeuycgmigyo] = $meyiiwcswqmuggyg[0]; iggyqogweyosuikc: qqewoyookaskiuek: ygcsmkuycoagwyou: } omugkkesagcyagmk: $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, '', $ewgwqamkygiqaawc); mosqsmqimqgqoase: } ayyweymyuuiauamo: ssoucoucsgccekwe: return $this->akuukemmseeswsom($qgowgcsuycquswmo, $moyaaaascoeowegu); } protected function usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo) { $eouekqmooogkoqoo = implode("\174", array_keys($qgowgcsuycquswmo)); if (!preg_match("\x2f{$eouekqmooogkoqoo}\57", $mmomgiqeqykoeukg, $meyiiwcswqmuggyg)) { goto miyqyeiwquwsacsm; } $ksiyqouuaoymsycg = $meyiiwcswqmuggyg[0] ?? ''; if (!($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgowgcsuycquswmo, $ksiyqouuaoymsycg))) { goto qkcyqocqqwmqgqww; } $mmomgiqeqykoeukg = str_replace($mmomgiqeqykoeukg, $eqgoocgaqwqcimie, $mmomgiqeqykoeukg); qkcyqocqqwmqgqww: miyqyeiwquwsacsm: return $mmomgiqeqykoeukg; } protected function akuukemmseeswsom(array $qgowgcsuycquswmo, array $moyaaaascoeowegu) : array { if (!$moyaaaascoeowegu) { goto eeqesooyqagwawae; } $oyiokksswogocuwm = count($moyaaaascoeowegu); $awqociesscimyymk = $gaeqamemwmwsyukm = $oyiokksswogocuwm; ywqgcegomwaiuquc: if (!($oyiokksswogocuwm && $gaeqamemwmwsyukm)) { goto eegqyykygiccaoeo; } foreach ($moyaaaascoeowegu as $ymqmyyeuycgmigyo => $mmomgiqeqykoeukg) { $eqgoocgaqwqcimie = $this->usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo); if (!($eqgoocgaqwqcimie !== $mmomgiqeqykoeukg)) { goto acaqummmoyiemqss; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; unset($moyaaaascoeowegu[$ymqmyyeuycgmigyo]); acaqummmoyiemqss: soqqemyioggmoakg: } wmmggowmigekyoso: $gaeqamemwmwsyukm = count($moyaaaascoeowegu); if (!($gaeqamemwmwsyukm == $awqociesscimyymk)) { goto suswcqoyyqkkquuo; } goto eegqyykygiccaoeo; suswcqoyyqkkquuo: $awqociesscimyymk = $gaeqamemwmwsyukm; $oyiokksswogocuwm--; goto ywqgcegomwaiuquc; eegqyykygiccaoeo: eeqesooyqagwawae: return $qgowgcsuycquswmo; } }
