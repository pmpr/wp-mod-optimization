<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b9397c5c62b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use MatthiasMullie\Minify\CSS; class Style extends Minifier { public function ikcgmcycisiccyuc() { $this->name = self::wwukgkqwyakeqwqk; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\x70\x5f\x61\x64\x64\137\151\156\x6c\151\x6e\145\x5f\x73\x74\x79\x6c\145\137\x64\141\164\141", [$this, "\x6f\153\165\x67\165\171\x61\143\147\x67\163\x61\x67\145\x71\161"]); parent::kgquecmsgcouyaya(); } public function okuguyacggsageqq($ewgwqamkygiqaawc, string $kqywgoqsmuswammk = null) { return parent::okuguyacggsageqq($ewgwqamkygiqaawc, "\163\x74\x79\154\145"); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { $aksgkeoomwimawms = new CSS($ewgwqamkygiqaawc); return $aksgkeoomwimawms->minify(); } public function ackccoemuqacsooc(?string $ewgwqamkygiqaawc) : ?string { $ewgwqamkygiqaawc = $this->oeyciyycaaeuacsu($ewgwqamkygiqaawc); return $this->keaqaesooiggwkkg($ewgwqamkygiqaawc); } public function oeyciyycaaeuacsu($ewgwqamkygiqaawc) : string { preg_match_all("\x2f\x40\x2e\52\77\x5b\x5e\173\135\53\x7b\x28\133\134\x73\x5c\x53\135\53\77\x7d\51\x5c\x73\52\175\x7c\50\x5b\x61\x2d\x7a\x30\x2d\71\x2c\x20\56\x28\x3a\51\x23\x5c\x5b\134\135\x3d\137\76\x2b\176\x5c\x2d\x40\135\x2b\51\x7b\x28\x5b\136\175\174\x5e\x7b\x5d\52\51\175\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[0] ?? []; if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto omugkkesagcyagmk; } $wukkyuqigkkuocmy = array_diff_assoc($meyiiwcswqmuggyg, array_unique($meyiiwcswqmuggyg)); foreach ($wukkyuqigkkuocmy as $mqgsiqkcgqocoaam) { $ewgwqamkygiqaawc = str_replace($mqgsiqkcgqocoaam, '', $ewgwqamkygiqaawc); mosqsmqimqgqoase: } ayyweymyuuiauamo: omugkkesagcyagmk: return $ewgwqamkygiqaawc; } public function keaqaesooiggwkkg($ewgwqamkygiqaawc) { return preg_replace("\57\133\x5e\175\x3b\x7b\134\156\135\x2b\173\134\x73\x2a\x7d\x2f", '', $ewgwqamkygiqaawc); } public function awgqiogkeqaeomoa($ewgwqamkygiqaawc) { $qgowgcsuycquswmo = $this->qaekoyawqougggiq($ewgwqamkygiqaawc); if (!$qgowgcsuycquswmo) { goto ssoucoucsgccekwe; } $yygmoeguaqyumuui = implode("\174", array_keys($qgowgcsuycquswmo)); if (!preg_match_all("\x2f\x76\141\x72\134\50\50\133\136\x29\135{$yygmoeguaqyumuui}\x29\134\x29\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg)) { goto qqewoyookaskiuek; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($meyiiwcswqmuggyg[0] as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg[1], $momcykaoccoymeig); $moyaaaascoeowegu = $gkyciwoiiisgywcs->get($qgowgcsuycquswmo, $uusmaiomayssaecw, $uammqaqiwgcmeska); if (!($moyaaaascoeowegu && $uammqaqiwgcmeska !== $moyaaaascoeowegu)) { goto iggyqogweyosuikc; } $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, $moyaaaascoeowegu, $ewgwqamkygiqaawc); iggyqogweyosuikc: kqksuugcgsyeoayy: } ygcsmkuycoagwyou: qqewoyookaskiuek: ssoucoucsgccekwe: return $ewgwqamkygiqaawc; } public function qaekoyawqougggiq(?string &$ewgwqamkygiqaawc = null) : array { preg_match_all("\57\x3a\162\x6f\157\x74\134\163\x2a\x7b\x28\x5b\x5c\x73\134\x53\135\x2b\x3f\51\x7d\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $moyaaaascoeowegu = []; $qgowgcsuycquswmo = []; if (!isset($meyiiwcswqmuggyg[1])) { goto suswcqoyyqkkquuo; } $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1]; foreach ($meyiiwcswqmuggyg as $uammqaqiwgcmeska) { $oammesyieqmwuwyi = explode("\x3b", $uammqaqiwgcmeska); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $skueimwaqauscmoc = explode("\x3a", $igqsaukqcqscimok); $ymqmyyeuycgmigyo = $skueimwaqauscmoc[0]; $eqgoocgaqwqcimie = $skueimwaqauscmoc[1]; if (!($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo)) { goto acaqummmoyiemqss; } if (preg_match("\x2f\x76\x61\x72\134\50\50\x5b\x5e\x29\135\x2a\51\134\51\x2f", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { goto wmmggowmigekyoso; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; goto soqqemyioggmoakg; wmmggowmigekyoso: $moyaaaascoeowegu[$ymqmyyeuycgmigyo] = $meyiiwcswqmuggyg[0]; soqqemyioggmoakg: acaqummmoyiemqss: ywqgcegomwaiuquc: } eegqyykygiccaoeo: $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, '', $ewgwqamkygiqaawc); miyqyeiwquwsacsm: } qkcyqocqqwmqgqww: suswcqoyyqkkquuo: return $this->akuukemmseeswsom($qgowgcsuycquswmo, $moyaaaascoeowegu); } protected function usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo) { $eouekqmooogkoqoo = implode("\174", array_keys($qgowgcsuycquswmo)); if (!preg_match("\x2f{$eouekqmooogkoqoo}\57", $mmomgiqeqykoeukg, $meyiiwcswqmuggyg)) { goto oqugqwcyomiaaoqu; } $ksiyqouuaoymsycg = $meyiiwcswqmuggyg[0] ?? ''; if (!($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgowgcsuycquswmo, $ksiyqouuaoymsycg))) { goto eeqesooyqagwawae; } $mmomgiqeqykoeukg = str_replace($mmomgiqeqykoeukg, $eqgoocgaqwqcimie, $mmomgiqeqykoeukg); eeqesooyqagwawae: oqugqwcyomiaaoqu: return $mmomgiqeqykoeukg; } protected function akuukemmseeswsom(array $qgowgcsuycquswmo, array $moyaaaascoeowegu) : array { if (!$moyaaaascoeowegu) { goto uguigkcmukuouway; } $oyiokksswogocuwm = count($moyaaaascoeowegu); $awqociesscimyymk = $gaeqamemwmwsyukm = $oyiokksswogocuwm; iekumemscwieugqw: if (!($oyiokksswogocuwm && $gaeqamemwmwsyukm)) { goto foeeqckqsyockkak; } foreach ($moyaaaascoeowegu as $ymqmyyeuycgmigyo => $mmomgiqeqykoeukg) { $eqgoocgaqwqcimie = $this->usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo); if (!($eqgoocgaqwqcimie !== $mmomgiqeqykoeukg)) { goto usquiuuyiyqaeyiu; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; unset($moyaaaascoeowegu[$ymqmyyeuycgmigyo]); usquiuuyiyqaeyiu: kymkucucyeoeikim: } hoeeyiowekaeemko: $gaeqamemwmwsyukm = count($moyaaaascoeowegu); if (!($gaeqamemwmwsyukm == $awqociesscimyymk)) { goto qicwaskssogcokgm; } goto foeeqckqsyockkak; qicwaskssogcokgm: $awqociesscimyymk = $gaeqamemwmwsyukm; $oyiokksswogocuwm--; goto iekumemscwieugqw; foeeqckqsyockkak: uguigkcmukuouway: return $qgowgcsuycquswmo; } }
