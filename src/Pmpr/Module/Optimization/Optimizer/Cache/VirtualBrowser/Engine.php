<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a54fbc54301             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use WP_Error; class Engine extends Common { use SubscriptionEngineTrait; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu(self::skcaqcukeyugwmke, [$this, "\x61\145\153\x75\x69\157\x6b\163\155\161\x71\143\x63\x79\165\165"]); $this->waqewsckuayqguos(self::kgswyesggeyekgmg . "\x76\151\x72\x74\165\x61\x6c\137\x62\162\x6f\x77\163\145\162\x5f\143\x61\x63\150\145\x5f\162\145\163\165\x6c\x74", [$this, "\x71\161\x79\161\x71\157\153\x77\x6b\155\x6f\143\147\151\141\145"], 10, 2); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\166\151\162\x74\165\x61\154\137\142\162\x6f\x77\163\x65\x72\137\x63\150\145\x63\x6b\x5f\x66\x69\156\151\163\x68\x65\x64", [$this, "\141\145\x6b\165\x69\157\153\x73\155\161\x71\143\x63\x79\x75\165"])->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\166\x69\162\164\165\141\x6c\137\x62\162\157\167\x73\145\162\137\x61\144\144\x5f\152\x6f\142", [$this, "\x77\x79\x73\x6f\141\161\153\153\x61\x79\145\x75\x73\x73\x6d\x75"], 10, 3)->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\x76\151\x72\x74\165\x61\154\137\142\x72\x6f\167\x73\145\162\x5f\151\x73\x5f\x63\x61\x63\x68\145\144", [$this, "\145\167\161\x69\141\x65\x65\147\x65\x6f\x65\157\147\171\x63\147"], 10, 2)->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\x76\x69\x72\x74\x75\141\x6c\x5f\142\x72\x6f\x77\x73\145\162\137\x67\x65\x74\137\143\141\x63\150\x65\x64\137\x64\141\x74\141", [$this, "\167\x67\161\x77\143\161\x65\157\x69\x73\x77\155\x69\x71\145\x77"], 10, 2); } public function ewqiaeegeoeogycg($skqeckgiuieeusoy, $sameaqkagyqomooq) : bool { return $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($this->csyeqcysyissgowm($sameaqkagyqomooq)); } public function aekuioksmqqccyuu($sameaqkagyqomooq) { $syoewmweaqiqswgu = "\166\x69\162\164\165\141\154\x5f\142\162\157\x77\163\x65\x72\x5f\161\165\x65\165\x65\x5f{$sameaqkagyqomooq}\137\x74\x72\141\x6e\163\151\145\x6e\x74"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $sogksuscggsicmac = $this->gcquqoykkywkwuey($sameaqkagyqomooq); if (is_bool($sogksuscggsicmac)) { goto mwskgsimqagmkcgq; } if (!is_wp_error($sogksuscggsicmac)) { goto suoymucmyegewkmu; } $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x76\x69\162\x74\165\x61\x6c\137\142\x72\157\x77\163\145\x72\x5f\162\x65\x74\x72\151\145\166\145\x5f\162\x65\163\x75\154\164\x5f\x66\141\151\x6c\145\144", $sameaqkagyqomooq); goto uqagqomggiacosqm; suoymucmyegewkmu: $wciyuagckicucysk = $qkqgcaykemoiecma->igqksmmwesguiaae($syoewmweaqiqswgu); if (!(empty($wciyuagckicucysk) || $wciyuagckicucysk < 0)) { goto qkkqiagwgaoyauki; } $wciyuagckicucysk = 1; qkkqiagwgaoyauki: if ($wciyuagckicucysk <= 3) { goto oyywywoqaqcykucs; } $cqgoimumaewouews = MINUTE_IN_SECONDS * 10; goto iqeqqwcmaiqakawc; oyywywoqaqcykucs: $cqgoimumaewouews = Remote::symcgieuakksimmu()->qcwwiyuycagsaikk($sogksuscggsicmac) * $wciyuagckicucysk; iqeqqwcmaiqakawc: if ($wciyuagckicucysk <= 10) { goto gioqkcywauuckmua; } $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\166\151\162\x74\165\141\154\x5f\142\x72\x6f\x77\x73\x65\162\x5f\162\145\164\162\x69\x65\x76\x65\x5f\x72\x65\163\165\154\164\137\x66\141\x69\154\145\144", $sameaqkagyqomooq); goto miaiggsoiaekmqwy; gioqkcywauuckmua: $qkqgcaykemoiecma->gawcqwcqgwgucgya($syoewmweaqiqswgu, ++$wciyuagckicucysk); Process::symcgieuakksimmu()->mkgmgessyuewwswa($cqgoimumaewouews, $sameaqkagyqomooq); miaiggsoiaekmqwy: $sogksuscggsicmac = false; uqagqomggiacosqm: goto mkuigmcgkawyawee; mwskgsimqagmkcgq: $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); mkuigmcgkawyawee: return $sogksuscggsicmac; } public function gcquqoykkywkwuey($sameaqkagyqomooq) { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); $scwwcyaqyywsweoq = $ycikkiiimgoqqgsq->oqomcmyuuakigusk([Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::ciywsqoeiymemsys => self::eyemmiwoaayukksq]); $ksaameoqigiaoigg = false; if (!($scwwcyaqyywsweoq && ($esaqeawoigqgagum = $ycikkiiimgoqqgsq->csyeqcysyissgowm($scwwcyaqyywsweoq)))) { goto ccqgkeesikyegcik; } if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($esaqeawoigqgagum)) { goto agqmoymkiswqswqo; } if (!($giogkommscssioky = $ycikkiiimgoqqgsq->oqggmyigigeeqwye($scwwcyaqyywsweoq))) { goto ouqwmaaskykywyqo; } $ksaameoqigiaoigg = $this->guksgkgiseiigkaw($giogkommscssioky, $esaqeawoigqgagum, $sameaqkagyqomooq); ouqwmaaskykywyqo: goto kwaqakoogeiacmwi; agqmoymkiswqswqo: $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc); kwaqakoogeiacmwi: ccqgkeesikyegcik: if (!($scwwcyaqyywsweoq && !$ksaameoqigiaoigg)) { goto aakwscykmyyykoms; } $ksaameoqigiaoigg = $scwwcyaqyywsweoq; aakwscykmyyykoms: return $ksaameoqigiaoigg; } public function wysoaqkkayeussmu(array $icwicymcioeyeyek, int $sameaqkagyqomooq, string $eeamcawaiqocomwy) { if ($this->ysuiqkgycmagqqyu($sameaqkagyqomooq)) { goto oqwyemgwoossauyk; } if (!($ccowyogiqwikkkie = $this->cqscwmqsgomkogoq()->wmeeckgouqiwiqco($sameaqkagyqomooq))) { goto wcoqiwuusoeqiqwi; } $icwicymcioeyeyek = API::symcgieuakksimmu()->wysoaqkkayeussmu($eeamcawaiqocomwy, $ccowyogiqwikkkie); if (is_wp_error($icwicymcioeyeyek)) { goto iiuawywwoaeyauge; } Process::symcgieuakksimmu()->mkgmgessyuewwswa($icwicymcioeyeyek[self::kyakumqgcsaskweq] ?? 30, $sameaqkagyqomooq); iiuawywwoaeyauge: wcoqiwuusoeqiqwi: oqwyemgwoossauyk: return $icwicymcioeyeyek; } public function guksgkgiseiigkaw(string $giogkommscssioky, string $gmukeskyyskueium, string $okuucwisauuawocs) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = API::symcgieuakksimmu()->uiqqikcuycqyeooa($giogkommscssioky); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($sogksuscggsicmac[self::ciywsqoeiymemsys]) { case self::uasuowkaguiwoouw: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(sprintf(__("\126\x69\x72\x74\x75\141\x6c\40\142\162\x6f\167\163\145\x72\40\163\164\x61\164\165\x73\40\x66\x61\x69\x6c\x65\x64\72\x20\x25\x73", PR__MDL__OPTIMIZATION), $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\162\x65\x61\x73\157\x6e", ''))); $this->oaumimwssciwumys(sprintf("\126\102\x3a\x20\163\x74\x61\164\x75\163\40\146\x61\x69\154\x65\x64\40\75\76\40\x25\x73", $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\162\x65\141\x73\x6f\x6e", ''))); goto cwcmwogseemgqgqq; case self::amcogigwsaqssuai: case self::gymusgeumuwomwuy: $this->oaumimwssciwumys("\x56\x42\x3a\40\x73\164\x61\x74\165\163\x20\143\157\155\160\x6c\x65\x74\x65\x64"); if (!($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($gmukeskyyskueium))) { goto kcqieuukskyiywss; } $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($okuucwisauuawocs, $ewgwqamkygiqaawc); kcqieuukskyiywss: goto cwcmwogseemgqgqq; } yuoyackaoigyyyso: cwcmwogseemgqgqq: return $ksaameoqigiaoigg; } public function cgosiioosmgsgecq($esaqeawoigqgagum) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("{$esaqeawoigqgagum}\x2f\x76\x69\162\x74\165\x61\154\55\142\162\x6f\167\163\x65\162\x2e\152\x73\157\x6e"); if (!(200 === (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) && ($kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu)))) { goto wukuisoeoeomgegu; } $this->oaumimwssciwumys("\x56\x42\72\x20\x4a\x53\117\x4e\x20\x46\151\x6c\145\40\x52\145\164\x72\151\145\x76\x65\x64\x2e"); return $kuukgsmqkagwaciu; wukuisoeoeomgegu: return false; } public function qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc) { $ksaameoqigiaoigg = false; if (!($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq))) { goto eyuoecmogqwkmomi; } $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); if (!isset($icwicymcioeyeyek[self::skogicecygyyskkq], $icwicymcioeyeyek[self::mcaucuyeeiwsmmuy])) { goto gqywcowiigceimaw; } $swyigkueoywiacam = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if (!$swyigkueoywiacam->exists($esaqeawoigqgagum)) { goto gsimeiqkoyqkuecq; } $swyigkueoywiacam->remove($esaqeawoigqgagum); gsimeiqkoyqkuecq: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $ewgwqamkygiqaawc); gqywcowiigceimaw: eyuoecmogqwkmomi: if ($ksaameoqigiaoigg !== false) { goto quewwumogiocouii; } $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\166\x69\162\x74\165\141\x6c\137\142\162\x6f\x77\163\x65\162\x5f\x72\145\163\165\x6c\x74\137\x63\x61\x63\150\x65\137\146\141\x69\x6c\145\x64", $sameaqkagyqomooq, $ewgwqamkygiqaawc); $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\122\145\163\x75\x6c\164\x20\146\x65\164\143\x68\x65\144\40\142\165\164\40\143\x61\x6e\40\x6e\157\x74\40\143\141\143\x68\145\40\x69\x74\x2e", PR__MDL__OPTIMIZATION)); $this->oaumimwssciwumys("\x56\102\x3a\x20\122\145\163\x75\154\x74\40\x66\x65\164\143\150\145\x64\x20\x62\x75\164\x20\x63\x61\156\40\x6e\x6f\164\40\143\141\x63\150\x65\40\151\164\x2e"); goto geugsymgsiuuqccg; quewwumogiocouii: $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x76\151\162\x74\165\141\x6c\137\x62\x72\157\167\163\145\x72\x5f\x72\x65\163\165\154\164\x5f\x63\141\x63\150\145\144", $sameaqkagyqomooq, $ewgwqamkygiqaawc); geugsymgsiuuqccg: return $ksaameoqigiaoigg; } public function wgqwcqeoiswmiqew($icwicymcioeyeyek, $sameaqkagyqomooq) { if (!($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq))) { goto ioacywuoyuskqmwy; } $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($esaqeawoigqgagum); if (!$ewgwqamkygiqaawc) { goto mgwgiesscqoaqcau; } $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); mgwgiesscqoaqcau: ioacywuoyuskqmwy: return $icwicymcioeyeyek; } public function csyeqcysyissgowm(string $sameaqkagyqomooq) : string { $esaqeawoigqgagum = ''; if (!($skacuygeqykiwiwy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->cmaecekuqkwmemms(self::cmiuooquqeyoccay))) { goto bgoygegmogcmeaou; } $uusmaiomayssaecw = Pattern::symcgieuakksimmu()->uiiqeakeuswqomey($sameaqkagyqomooq); $esaqeawoigqgagum = "{$skacuygeqykiwiwy}\x2f{$uusmaiomayssaecw}\56\x6a\x73\x6f\x6e"; bgoygegmogcmeaou: return $esaqeawoigqgagum; } }
