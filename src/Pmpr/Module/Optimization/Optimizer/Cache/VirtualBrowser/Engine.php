<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6686f091293fe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use WP_Error; class Engine extends Common { use SubscriptionEngineTrait; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu(self::skcaqcukeyugwmke, [$this, "\141\x65\x6b\x75\151\x6f\153\163\155\161\161\143\x63\x79\165\165"]); $this->waqewsckuayqguos(self::kgswyesggeyekgmg . "\166\x69\162\x74\165\x61\x6c\137\142\162\x6f\167\163\x65\162\x5f\143\x61\143\150\145\137\162\145\x73\165\154\x74", [$this, "\161\161\x79\161\x71\157\153\167\153\x6d\x6f\143\147\x69\x61\145"], 10, 2); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\166\x69\x72\x74\x75\x61\x6c\137\x62\162\x6f\167\163\x65\162\x5f\143\150\145\143\153\x5f\x66\151\x6e\x69\163\150\145\144", [$this, "\141\x65\153\165\151\x6f\153\163\x6d\x71\161\143\x63\x79\165\x75"])->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\166\151\162\164\165\141\x6c\x5f\x62\162\x6f\x77\163\x65\162\137\x61\144\144\x5f\152\x6f\x62", [$this, "\167\x79\163\157\141\161\x6b\153\x61\171\x65\x75\163\163\155\x75"], 10, 3)->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\x76\x69\162\164\x75\141\x6c\x5f\x62\x72\157\167\x73\x65\x72\x5f\151\163\x5f\x63\141\143\150\x65\x64", [$this, "\x65\x77\x71\x69\x61\145\145\147\145\x6f\145\x6f\x67\171\x63\x67"], 10, 2)->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\x76\151\162\164\165\x61\x6c\x5f\x62\x72\x6f\167\163\145\162\137\147\x65\x74\x5f\x63\x61\143\150\x65\144\x5f\x64\x61\164\x61", [$this, "\167\x67\x71\167\x63\x71\145\157\151\x73\167\155\151\x71\x65\x77"], 10, 2); } public function ewqiaeegeoeogycg($skqeckgiuieeusoy, $sameaqkagyqomooq) : bool { return $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($this->csyeqcysyissgowm($sameaqkagyqomooq)); } public function aekuioksmqqccyuu($sameaqkagyqomooq) { $syoewmweaqiqswgu = "\x76\151\162\164\165\141\x6c\x5f\142\162\157\x77\x73\x65\x72\x5f\x71\x75\x65\165\x65\137{$sameaqkagyqomooq}\137\164\162\x61\156\x73\151\145\x6e\164"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $sogksuscggsicmac = $this->gcquqoykkywkwuey($sameaqkagyqomooq); if (is_bool($sogksuscggsicmac)) { goto cwikoaeqmmoimmso; } if (!is_wp_error($sogksuscggsicmac)) { goto ykwasaaoeeiuomim; } $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x76\x69\162\164\165\141\154\x5f\142\162\157\167\163\x65\x72\137\162\x65\164\x72\x69\145\166\x65\x5f\162\145\163\165\154\x74\137\146\x61\151\154\145\x64", $sameaqkagyqomooq); goto acggikioyeueeowg; ykwasaaoeeiuomim: $wciyuagckicucysk = $qkqgcaykemoiecma->igqksmmwesguiaae($syoewmweaqiqswgu); if (!(empty($wciyuagckicucysk) || $wciyuagckicucysk < 0)) { goto iauwuugggmegwisk; } $wciyuagckicucysk = 1; iauwuugggmegwisk: if ($wciyuagckicucysk <= 3) { goto aukucaieceiwesmm; } $cqgoimumaewouews = MINUTE_IN_SECONDS * 10; goto kqyoakickmseyyeq; aukucaieceiwesmm: $cqgoimumaewouews = Remote::symcgieuakksimmu()->qcwwiyuycagsaikk($sogksuscggsicmac) * $wciyuagckicucysk; kqyoakickmseyyeq: if ($wciyuagckicucysk <= 10) { goto micceocwuwkyusic; } $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\166\x69\162\164\165\141\154\137\142\x72\x6f\x77\163\145\162\x5f\x72\145\x74\162\151\145\x76\145\x5f\162\145\163\x75\x6c\164\137\x66\x61\151\x6c\x65\144", $sameaqkagyqomooq); goto iwueukqcywkiyqge; micceocwuwkyusic: $qkqgcaykemoiecma->gawcqwcqgwgucgya($syoewmweaqiqswgu, ++$wciyuagckicucysk); Process::symcgieuakksimmu()->mkgmgessyuewwswa($cqgoimumaewouews, $sameaqkagyqomooq); iwueukqcywkiyqge: $sogksuscggsicmac = false; acggikioyeueeowg: goto egaymskkosukqeao; cwikoaeqmmoimmso: $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); egaymskkosukqeao: return $sogksuscggsicmac; } public function gcquqoykkywkwuey($sameaqkagyqomooq) { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); $scwwcyaqyywsweoq = $ycikkiiimgoqqgsq->oqomcmyuuakigusk([Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::ciywsqoeiymemsys => self::eyemmiwoaayukksq]); $ksaameoqigiaoigg = false; if (!($scwwcyaqyywsweoq && ($esaqeawoigqgagum = $ycikkiiimgoqqgsq->csyeqcysyissgowm($scwwcyaqyywsweoq)))) { goto kgmeiwiakwicgkkk; } if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($esaqeawoigqgagum)) { goto kicwiowcogmauwiy; } if (!($giogkommscssioky = $ycikkiiimgoqqgsq->oqggmyigigeeqwye($scwwcyaqyywsweoq))) { goto kaiesowkgwogqseg; } $ksaameoqigiaoigg = $this->guksgkgiseiigkaw($giogkommscssioky, $esaqeawoigqgagum, $sameaqkagyqomooq); kaiesowkgwogqseg: goto cwswueuqoamqasya; kicwiowcogmauwiy: $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc); cwswueuqoamqasya: kgmeiwiakwicgkkk: if (!($scwwcyaqyywsweoq && !$ksaameoqigiaoigg)) { goto suuskagowwgsouqw; } $ksaameoqigiaoigg = $scwwcyaqyywsweoq; suuskagowwgsouqw: return $ksaameoqigiaoigg; } public function wysoaqkkayeussmu(array $icwicymcioeyeyek, int $sameaqkagyqomooq, string $eeamcawaiqocomwy) { if ($this->ysuiqkgycmagqqyu($sameaqkagyqomooq)) { goto aquqkiggamaoegoo; } if (!($ccowyogiqwikkkie = $this->cqscwmqsgomkogoq()->wmeeckgouqiwiqco($sameaqkagyqomooq))) { goto csieaismmmocyacu; } $icwicymcioeyeyek = API::symcgieuakksimmu()->wysoaqkkayeussmu($eeamcawaiqocomwy, $ccowyogiqwikkkie); if (is_wp_error($icwicymcioeyeyek)) { goto omykokikgocoikec; } Process::symcgieuakksimmu()->mkgmgessyuewwswa($icwicymcioeyeyek[self::kyakumqgcsaskweq] ?? 30, $sameaqkagyqomooq); omykokikgocoikec: csieaismmmocyacu: aquqkiggamaoegoo: return $icwicymcioeyeyek; } public function guksgkgiseiigkaw(string $giogkommscssioky, string $gmukeskyyskueium, string $okuucwisauuawocs) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = API::symcgieuakksimmu()->uiqqikcuycqyeooa($giogkommscssioky); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($sogksuscggsicmac[self::ciywsqoeiymemsys]) { case self::uasuowkaguiwoouw: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(sprintf(__("\x56\x69\162\164\165\x61\x6c\x20\142\162\x6f\x77\x73\x65\x72\x20\163\x74\141\164\x75\163\40\146\x61\x69\154\x65\144\72\x20\x25\x73", PR__MDL__OPTIMIZATION), $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x72\x65\141\x73\x6f\156", ''))); $this->oaumimwssciwumys(sprintf("\126\x42\x3a\x20\x73\x74\141\x74\x75\163\x20\146\x61\x69\154\145\x64\40\75\76\x20\45\163", $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x72\145\x61\x73\157\156", ''))); goto mykiyqcqiegkiqys; case self::amcogigwsaqssuai: case self::gymusgeumuwomwuy: $this->oaumimwssciwumys("\126\x42\x3a\40\163\x74\x61\x74\165\163\40\143\x6f\155\x70\x6c\145\x74\145\x64"); if (!($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($gmukeskyyskueium))) { goto cquecqekuucwoumw; } $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($okuucwisauuawocs, $ewgwqamkygiqaawc); cquecqekuucwoumw: goto mykiyqcqiegkiqys; } agemwookwseyycqo: mykiyqcqiegkiqys: return $ksaameoqigiaoigg; } public function cgosiioosmgsgecq($esaqeawoigqgagum) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("{$esaqeawoigqgagum}\57\x76\x69\162\x74\x75\141\154\55\x62\162\x6f\x77\163\145\x72\56\152\x73\x6f\156"); if (!(200 === (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) && ($kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu)))) { goto koiscokkkaimiecq; } $this->oaumimwssciwumys("\x56\102\x3a\40\112\123\117\116\40\x46\151\x6c\145\x20\x52\145\164\162\x69\x65\x76\145\144\56"); return $kuukgsmqkagwaciu; koiscokkkaimiecq: return false; } public function qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc) { $ksaameoqigiaoigg = false; if (!($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq))) { goto qwemkcoaseywkuuc; } $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); if (!isset($icwicymcioeyeyek[self::skogicecygyyskkq], $icwicymcioeyeyek[self::mcaucuyeeiwsmmuy])) { goto saauykgakaeiyoua; } $swyigkueoywiacam = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if (!$swyigkueoywiacam->exists($esaqeawoigqgagum)) { goto owuuuiekkaeoeacq; } $swyigkueoywiacam->remove($esaqeawoigqgagum); owuuuiekkaeoeacq: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $ewgwqamkygiqaawc); saauykgakaeiyoua: qwemkcoaseywkuuc: if ($ksaameoqigiaoigg !== false) { goto mqimkwickkgqqeoi; } $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\166\x69\x72\x74\x75\x61\x6c\137\142\162\157\167\163\145\x72\137\162\x65\x73\x75\154\164\137\143\141\143\x68\x65\x5f\x66\x61\x69\154\145\144", $sameaqkagyqomooq, $ewgwqamkygiqaawc); $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\x52\x65\x73\165\x6c\x74\x20\146\145\164\x63\x68\x65\x64\x20\x62\165\x74\x20\x63\x61\156\x20\156\x6f\x74\x20\143\141\143\x68\x65\x20\151\164\x2e", PR__MDL__OPTIMIZATION)); $this->oaumimwssciwumys("\x56\x42\x3a\40\x52\145\x73\165\154\x74\x20\x66\x65\164\x63\x68\x65\x64\x20\x62\165\x74\40\x63\141\x6e\x20\156\157\164\x20\x63\x61\143\150\145\40\151\164\56"); goto kwyimqumkuuyaiku; mqimkwickkgqqeoi: $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\166\x69\162\x74\x75\141\x6c\x5f\142\x72\x6f\x77\x73\x65\162\137\x72\x65\x73\x75\154\x74\x5f\x63\x61\143\150\145\x64", $sameaqkagyqomooq, $ewgwqamkygiqaawc); kwyimqumkuuyaiku: return $ksaameoqigiaoigg; } public function wgqwcqeoiswmiqew($icwicymcioeyeyek, $sameaqkagyqomooq) { if (!($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq))) { goto mceucsaeouuwyumm; } $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($esaqeawoigqgagum); if (!$ewgwqamkygiqaawc) { goto gkqiqaqecmoogmaa; } $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); gkqiqaqecmoogmaa: mceucsaeouuwyumm: return $icwicymcioeyeyek; } public function csyeqcysyissgowm(string $sameaqkagyqomooq) : string { $esaqeawoigqgagum = ''; if (!($skacuygeqykiwiwy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->cmaecekuqkwmemms(self::cmiuooquqeyoccay))) { goto ceiuqsiqgiuiekem; } $uusmaiomayssaecw = Pattern::symcgieuakksimmu()->uiiqeakeuswqomey($sameaqkagyqomooq); $esaqeawoigqgagum = "{$skacuygeqykiwiwy}\57{$uusmaiomayssaecw}\56\152\163\157\156"; ceiuqsiqgiuiekem: return $esaqeawoigqgagum; } }
