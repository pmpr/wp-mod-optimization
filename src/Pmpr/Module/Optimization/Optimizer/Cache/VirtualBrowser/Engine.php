<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665e2ce1dff84             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser; use Pmpr\Module\Optimization\Optimizer\Asset\Setting as AssetSetting; use Pmpr\Module\Optimization\Optimizer\Media\LazyLoad\Setting as LazyLoadSetting; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use WP_Error; class Engine extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu(self::skcaqcukeyugwmke, [$this, "\141\145\153\165\x69\x6f\153\163\x6d\161\161\143\x63\x79\165\x75"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\166\151\162\x74\165\141\154\137\142\162\x6f\x77\x73\x65\162\137\x63\x68\145\143\153\x5f\146\x69\x6e\151\x73\150\145\144", [$this, "\x61\145\153\x75\x69\x6f\153\163\155\161\x71\x63\143\171\x75\x75"])->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\x76\x69\162\x74\165\141\154\x5f\x62\162\x6f\x77\x73\145\162\137\141\144\144\137\152\157\142", [$this, "\x77\x79\163\157\x61\x71\x6b\x6b\141\x79\x65\165\x73\163\155\x75"], 10, 3)->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\x76\151\162\164\165\141\154\137\142\x72\x6f\x77\x73\145\162\137\151\x73\137\x63\141\143\x68\x65\x64", [$this, "\145\x77\x71\151\x61\145\145\147\x65\x6f\x65\157\147\x79\143\x67"], 10, 2)->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\x76\x69\x72\x74\x75\141\154\137\x62\162\157\x77\163\x65\x72\137\x67\145\164\137\143\141\x63\x68\x65\x64\137\x64\141\x74\x61", [$this, "\167\147\x71\x77\143\x71\145\x6f\x69\163\x77\x6d\151\161\145\167"], 10, 2); } public function ewqiaeegeoeogycg($skqeckgiuieeusoy, $sameaqkagyqomooq) : bool { return $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($this->csyeqcysyissgowm($sameaqkagyqomooq)); } public function aekuioksmqqccyuu($sameaqkagyqomooq) { $syoewmweaqiqswgu = "\166\151\x72\164\165\x61\154\x5f\142\x72\157\167\163\x65\162\137\161\165\x65\x75\145\x5f{$sameaqkagyqomooq}\x5f\x74\x72\141\x6e\163\151\x65\156\164"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $sogksuscggsicmac = $this->gcquqoykkywkwuey($sameaqkagyqomooq); if (is_bool($sogksuscggsicmac)) { goto iwekmyyccgiyuecc; } if (!is_wp_error($sogksuscggsicmac)) { goto ousiuuwgwkiyikyq; } $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x76\x69\x72\x74\x75\141\x6c\x5f\142\162\x6f\167\x73\145\162\137\x72\145\164\x72\x69\x65\166\x65\137\162\145\163\x75\x6c\164\x5f\146\x61\151\154\x65\144", $sameaqkagyqomooq); goto ogsaaqsaogcqiouy; ousiuuwgwkiyikyq: $wciyuagckicucysk = $qkqgcaykemoiecma->igqksmmwesguiaae($syoewmweaqiqswgu); if (!(empty($wciyuagckicucysk) || $wciyuagckicucysk < 0)) { goto wyuemgggaqogsmsq; } $wciyuagckicucysk = 1; wyuemgggaqogsmsq: if ($wciyuagckicucysk <= 3) { goto guykyqecgswcsmws; } $cqgoimumaewouews = MINUTE_IN_SECONDS * 10; goto kkumywowcoycymeo; guykyqecgswcsmws: $cqgoimumaewouews = Remote::symcgieuakksimmu()->qcwwiyuycagsaikk($sogksuscggsicmac) * $wciyuagckicucysk; kkumywowcoycymeo: if ($wciyuagckicucysk <= 10) { goto miweggwqeiaeweia; } $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\166\151\x72\164\x75\141\x6c\137\142\162\157\x77\x73\145\162\137\x72\145\164\162\151\x65\166\145\137\162\x65\x73\165\154\x74\x5f\146\x61\151\154\145\144", $sameaqkagyqomooq); goto kqqiegkuqagcqsya; miweggwqeiaeweia: $qkqgcaykemoiecma->gawcqwcqgwgucgya($syoewmweaqiqswgu, ++$wciyuagckicucysk); Process::symcgieuakksimmu()->mkgmgessyuewwswa($cqgoimumaewouews, $sameaqkagyqomooq); kqqiegkuqagcqsya: $sogksuscggsicmac = false; ogsaaqsaogcqiouy: goto ikqqskkqqwmwssoo; iwekmyyccgiyuecc: $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); ikqqskkqqwmwssoo: return $sogksuscggsicmac; } public function gcquqoykkywkwuey($sameaqkagyqomooq) { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); $scwwcyaqyywsweoq = $ycikkiiimgoqqgsq->oqomcmyuuakigusk([Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::ciywsqoeiymemsys => self::eyemmiwoaayukksq]); $ksaameoqigiaoigg = false; if (!($scwwcyaqyywsweoq && ($esaqeawoigqgagum = $ycikkiiimgoqqgsq->csyeqcysyissgowm($scwwcyaqyywsweoq)))) { goto ogqmesokykywseys; } if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($esaqeawoigqgagum)) { goto cwwmimggaaecmucw; } if (!($giogkommscssioky = $ycikkiiimgoqqgsq->oqggmyigigeeqwye($scwwcyaqyywsweoq))) { goto aomysykcgikegiau; } $ksaameoqigiaoigg = $this->guksgkgiseiigkaw($giogkommscssioky, $esaqeawoigqgagum, $sameaqkagyqomooq); aomysykcgikegiau: goto awoaooyoeoyeeqee; cwwmimggaaecmucw: $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc); awoaooyoeoyeeqee: ogqmesokykywseys: if (!($scwwcyaqyywsweoq && !$ksaameoqigiaoigg)) { goto ykomgumacooyomsk; } $ksaameoqigiaoigg = $scwwcyaqyywsweoq; ykomgumacooyomsk: return $ksaameoqigiaoigg; } public function wysoaqkkayeussmu(array $icwicymcioeyeyek, int $sameaqkagyqomooq, string $eeamcawaiqocomwy) { if ($this->ysuiqkgycmagqqyu($sameaqkagyqomooq)) { goto uiosisocuwokwkie; } $ccowyogiqwikkkie = []; if (!(self::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(AssetSetting::eoeewcigeywcquis))) { goto mqkmcysgoiaouiwm; } $ccowyogiqwikkkie[] = self::eoeewcigeywcquis; mqkmcysgoiaouiwm: if (!(LazyLoadSetting::ekoiwoksaoemsgky === $this->weysguygiseoukqw(LazyLoadSetting::kmkkamyqcgmygkoi))) { goto kosaqwikueyksqmw; } $ccowyogiqwikkkie[] = self::esoamusawucumuew; kosaqwikueyksqmw: if (!$ccowyogiqwikkkie) { goto iikiiioqiyegyaak; } $icwicymcioeyeyek = API::symcgieuakksimmu()->wysoaqkkayeussmu($eeamcawaiqocomwy, $ccowyogiqwikkkie); if (is_wp_error($icwicymcioeyeyek)) { goto gicyayswqyuoekcq; } Process::symcgieuakksimmu()->mkgmgessyuewwswa($icwicymcioeyeyek[self::kyakumqgcsaskweq] ?? 30, $sameaqkagyqomooq); gicyayswqyuoekcq: iikiiioqiyegyaak: uiosisocuwokwkie: return $icwicymcioeyeyek; } public function guksgkgiseiigkaw(string $giogkommscssioky, string $gmukeskyyskueium, string $okuucwisauuawocs) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = API::symcgieuakksimmu()->uiqqikcuycqyeooa($giogkommscssioky); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($sogksuscggsicmac[self::ciywsqoeiymemsys]) { case self::uasuowkaguiwoouw: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(sprintf(__("\x56\151\162\164\x75\141\154\x20\142\x72\157\x77\x73\145\x72\40\x73\164\141\x74\x75\x73\40\146\x61\151\x6c\145\x64\72\40\x25\163", PR__MDL__OPTIMIZATION), $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\162\145\141\163\157\156", ''))); $this->oaumimwssciwumys(sprintf("\126\102\72\40\126\x69\x72\164\165\x61\154\x20\142\x72\x6f\167\x73\x65\x72\40\163\164\x61\x74\x75\163\40\146\x61\x69\x6c\x65\x64\x20\x3d\x3e\40\45\163", $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\162\x65\x61\x73\x6f\156", ''))); goto cuumeogeomowqisc; case self::amcogigwsaqssuai: case self::gymusgeumuwomwuy: $this->oaumimwssciwumys("\x56\102\x3a\40\x56\x69\x72\x74\165\x61\154\x20\x62\162\157\x77\x73\145\x72\x20\163\164\141\164\165\163\40\x63\157\x6d\x70\154\145\164\x65\x64"); if (!($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($gmukeskyyskueium))) { goto qmkaeeomgkwggoyo; } $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($okuucwisauuawocs, $ewgwqamkygiqaawc); qmkaeeomgkwggoyo: goto cuumeogeomowqisc; } gcckqucukawcasgk: cuumeogeomowqisc: return $ksaameoqigiaoigg; } public function cgosiioosmgsgecq($esaqeawoigqgagum) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("{$esaqeawoigqgagum}\57\166\151\162\x74\x75\141\x6c\x2d\142\x72\157\167\163\x65\162\56\x6a\163\x6f\156"); if (!(200 === (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) && ($kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu)))) { goto csammceowmqwaamq; } $this->oaumimwssciwumys("\126\102\72\40\112\123\x4f\x4e\x20\106\151\x6c\x65\x20\122\x65\x74\162\151\x65\x76\x65\144\x2e"); return $kuukgsmqkagwaciu; csammceowmqwaamq: return false; } public function qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc) { $ksaameoqigiaoigg = false; if (!($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq))) { goto cogywoqcqummsyus; } $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); if (!isset($icwicymcioeyeyek[self::skogicecygyyskkq], $icwicymcioeyeyek[self::mcaucuyeeiwsmmuy])) { goto eekcoeikaeaaeyii; } $swyigkueoywiacam = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if (!$swyigkueoywiacam->exists($esaqeawoigqgagum)) { goto ocaguquugeamqckq; } $swyigkueoywiacam->remove($esaqeawoigqgagum); ocaguquugeamqckq: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $ewgwqamkygiqaawc); eekcoeikaeaaeyii: cogywoqcqummsyus: if ($ksaameoqigiaoigg !== false) { goto gmwykkouysyaqwqm; } $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\166\x69\162\164\x75\141\154\x5f\142\162\157\x77\163\x65\x72\x5f\162\x65\x73\x75\x6c\x74\137\x63\141\143\x68\x65\x5f\x66\x61\x69\x6c\145\x64", $sameaqkagyqomooq, $ewgwqamkygiqaawc); $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\x52\x65\163\165\x6c\x74\40\x66\x65\x74\143\x68\x65\144\x20\x62\165\164\x20\x63\x61\156\x20\x6e\x6f\164\40\x63\x61\x63\x68\x65\40\x69\x74\x2e", PR__MDL__OPTIMIZATION)); $this->oaumimwssciwumys("\x56\102\72\x20\x52\145\163\165\x6c\x74\40\146\145\x74\x63\x68\x65\144\x20\x62\165\x74\40\x63\141\156\x20\156\157\x74\x20\x63\141\143\150\145\x20\x69\164\x2e"); goto ugqwuugsweqgmywk; gmwykkouysyaqwqm: $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x76\151\x72\x74\165\141\154\x5f\142\162\x6f\x77\163\x65\162\137\162\x65\163\x75\x6c\x74\137\x63\x61\x63\150\x65\x64", $sameaqkagyqomooq, $ewgwqamkygiqaawc); ugqwuugsweqgmywk: return $ksaameoqigiaoigg; } public function wgqwcqeoiswmiqew($icwicymcioeyeyek, $sameaqkagyqomooq) { if (!($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq))) { goto sockeswygwcskeuq; } $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($esaqeawoigqgagum); if (!$ewgwqamkygiqaawc) { goto uaukmuiwskcemcsw; } $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); uaukmuiwskcemcsw: sockeswygwcskeuq: return $icwicymcioeyeyek; } public function csyeqcysyissgowm(string $sameaqkagyqomooq) : string { $esaqeawoigqgagum = ''; if (!($skacuygeqykiwiwy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->cmaecekuqkwmemms(self::cmiuooquqeyoccay))) { goto mkwkkmkgiqiamacc; } $esaqeawoigqgagum = "{$skacuygeqykiwiwy}\57{$sameaqkagyqomooq}\x2e\x6a\163\157\x6e"; mkwkkmkgiqiamacc: return $esaqeawoigqgagum; } }
