<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665e0f163107a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser; use Pmpr\Module\Optimization\Optimizer\Asset\Setting as AssetSetting; use Pmpr\Module\Optimization\Optimizer\Media\LazyLoad\Setting as LazyLoadSetting; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use WP_Error; class Engine extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu(self::skcaqcukeyugwmke, [$this, "\x61\x65\153\x75\151\x6f\153\163\155\161\161\x63\143\x79\165\165"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\166\x69\162\x74\165\141\154\x5f\142\162\157\167\x73\x65\x72\137\143\150\x65\143\x6b\x5f\146\151\x6e\151\163\x68\x65\144", [$this, "\x61\145\153\x75\x69\x6f\x6b\x73\x6d\x71\x71\143\x63\171\165\x75"])->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\166\151\162\x74\x75\x61\154\x5f\x62\162\x6f\x77\163\145\162\x5f\x61\x64\144\137\x6a\x6f\x62", [$this, "\167\x79\163\157\x61\x71\x6b\153\x61\x79\x65\x75\163\163\x6d\x75"], 10, 3)->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\x76\151\x72\164\165\141\x6c\x5f\x62\x72\x6f\x77\163\x65\162\137\x69\163\x5f\x63\141\x63\x68\x65\x64", [$this, "\x65\x77\x71\151\141\145\x65\x67\x65\x6f\145\x6f\x67\x79\x63\147"], 10, 2)->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\166\151\x72\x74\165\141\x6c\137\x62\162\x6f\167\x73\145\162\137\x67\145\x74\x5f\143\x61\143\150\145\x64\137\144\141\164\141", [$this, "\x77\147\161\167\143\x71\x65\157\x69\163\167\x6d\151\x71\145\167"], 10, 2); } public function ewqiaeegeoeogycg($skqeckgiuieeusoy, $sameaqkagyqomooq) : bool { return $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($this->csyeqcysyissgowm($sameaqkagyqomooq)); } public function aekuioksmqqccyuu($sameaqkagyqomooq) { $syoewmweaqiqswgu = "\166\x69\162\x74\165\x61\x6c\137\142\162\x6f\167\163\x65\162\x5f\x71\x75\145\x75\x65\x5f{$sameaqkagyqomooq}\x5f\164\x72\141\156\x73\x69\145\156\x74"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $sogksuscggsicmac = $this->gcquqoykkywkwuey($sameaqkagyqomooq); if (is_bool($sogksuscggsicmac)) { goto iwekmyyccgiyuecc; } if (!is_wp_error($sogksuscggsicmac)) { goto ousiuuwgwkiyikyq; } $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\166\x69\162\164\x75\x61\154\x5f\142\x72\157\167\163\145\x72\x5f\x72\145\164\162\151\x65\x76\x65\x5f\x72\145\x73\165\x6c\164\137\146\141\151\154\x65\x64", $sameaqkagyqomooq); goto ogsaaqsaogcqiouy; ousiuuwgwkiyikyq: $wciyuagckicucysk = $qkqgcaykemoiecma->igqksmmwesguiaae($syoewmweaqiqswgu); if (!(empty($wciyuagckicucysk) || $wciyuagckicucysk < 0)) { goto wyuemgggaqogsmsq; } $wciyuagckicucysk = 1; wyuemgggaqogsmsq: if ($wciyuagckicucysk <= 3) { goto guykyqecgswcsmws; } $cqgoimumaewouews = MINUTE_IN_SECONDS * 10; goto kkumywowcoycymeo; guykyqecgswcsmws: $cqgoimumaewouews = Remote::symcgieuakksimmu()->qcwwiyuycagsaikk($sogksuscggsicmac) * $wciyuagckicucysk; kkumywowcoycymeo: if ($wciyuagckicucysk <= 10) { goto miweggwqeiaeweia; } $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\166\x69\x72\x74\165\x61\154\137\x62\x72\157\167\163\145\162\x5f\162\x65\x74\x72\151\145\x76\x65\x5f\x72\x65\x73\165\x6c\164\x5f\146\x61\x69\154\x65\x64", $sameaqkagyqomooq); goto kqqiegkuqagcqsya; miweggwqeiaeweia: $qkqgcaykemoiecma->gawcqwcqgwgucgya($syoewmweaqiqswgu, ++$wciyuagckicucysk); Process::symcgieuakksimmu()->mkgmgessyuewwswa($cqgoimumaewouews, $sameaqkagyqomooq); kqqiegkuqagcqsya: $sogksuscggsicmac = false; ogsaaqsaogcqiouy: goto ikqqskkqqwmwssoo; iwekmyyccgiyuecc: $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); ikqqskkqqwmwssoo: return $sogksuscggsicmac; } public function gcquqoykkywkwuey($sameaqkagyqomooq) { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); $scwwcyaqyywsweoq = $ycikkiiimgoqqgsq->oqomcmyuuakigusk([Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::ciywsqoeiymemsys => self::eyemmiwoaayukksq]); $ksaameoqigiaoigg = false; if (!($scwwcyaqyywsweoq && ($esaqeawoigqgagum = $ycikkiiimgoqqgsq->csyeqcysyissgowm($scwwcyaqyywsweoq)))) { goto ogqmesokykywseys; } if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($esaqeawoigqgagum)) { goto cwwmimggaaecmucw; } if (!($giogkommscssioky = $ycikkiiimgoqqgsq->oqggmyigigeeqwye($scwwcyaqyywsweoq))) { goto aomysykcgikegiau; } $ksaameoqigiaoigg = $this->guksgkgiseiigkaw($giogkommscssioky, $esaqeawoigqgagum, $sameaqkagyqomooq); aomysykcgikegiau: goto awoaooyoeoyeeqee; cwwmimggaaecmucw: $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc); awoaooyoeoyeeqee: ogqmesokykywseys: if (!($scwwcyaqyywsweoq && !$ksaameoqigiaoigg)) { goto ykomgumacooyomsk; } $ksaameoqigiaoigg = $scwwcyaqyywsweoq; ykomgumacooyomsk: return $ksaameoqigiaoigg; } public function wysoaqkkayeussmu(array $icwicymcioeyeyek, int $sameaqkagyqomooq, string $eeamcawaiqocomwy) { if ($this->ysuiqkgycmagqqyu($sameaqkagyqomooq)) { goto uiosisocuwokwkie; } $ccowyogiqwikkkie = []; if (!(self::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(AssetSetting::eoeewcigeywcquis))) { goto mqkmcysgoiaouiwm; } $ccowyogiqwikkkie[] = self::eoeewcigeywcquis; mqkmcysgoiaouiwm: if (!(LazyLoadSetting::ekoiwoksaoemsgky === $this->weysguygiseoukqw(LazyLoadSetting::kmkkamyqcgmygkoi))) { goto kosaqwikueyksqmw; } $ccowyogiqwikkkie[] = self::esoamusawucumuew; kosaqwikueyksqmw: if (!$ccowyogiqwikkkie) { goto iikiiioqiyegyaak; } $icwicymcioeyeyek = API::symcgieuakksimmu()->wysoaqkkayeussmu($eeamcawaiqocomwy, $ccowyogiqwikkkie); if (is_wp_error($icwicymcioeyeyek)) { goto gicyayswqyuoekcq; } Process::symcgieuakksimmu()->mkgmgessyuewwswa($icwicymcioeyeyek[self::kyakumqgcsaskweq] ?? 30, $sameaqkagyqomooq); gicyayswqyuoekcq: iikiiioqiyegyaak: uiosisocuwokwkie: return $icwicymcioeyeyek; } public function guksgkgiseiigkaw(string $giogkommscssioky, string $gmukeskyyskueium, string $okuucwisauuawocs) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = API::symcgieuakksimmu()->uiqqikcuycqyeooa($giogkommscssioky); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($sogksuscggsicmac[self::ciywsqoeiymemsys]) { case self::uasuowkaguiwoouw: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(sprintf(__("\126\x69\162\164\x75\141\x6c\40\x62\162\x6f\167\163\145\162\40\163\x74\x61\164\165\x73\40\x66\141\151\x6c\145\144\x3a\40\45\x73", PR__MDL__OPTIMIZATION), $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\162\x65\141\x73\157\x6e", ''))); $this->oaumimwssciwumys(sprintf("\126\x42\x3a\x20\126\x69\162\164\x75\141\x6c\x20\x62\x72\x6f\x77\163\x65\x72\40\163\x74\141\x74\165\163\x20\x66\x61\151\154\145\x64\x20\x3d\x3e\x20\x25\x73", $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x72\145\x61\x73\x6f\156", ''))); goto cuumeogeomowqisc; case self::amcogigwsaqssuai: case self::gymusgeumuwomwuy: $this->oaumimwssciwumys("\x56\x42\72\x20\x56\151\162\x74\x75\141\154\40\142\162\157\167\x73\145\162\40\163\164\x61\x74\x75\x73\x20\143\157\155\x70\154\x65\x74\x65\x64"); if (!($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($gmukeskyyskueium))) { goto qmkaeeomgkwggoyo; } $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($okuucwisauuawocs, $ewgwqamkygiqaawc); qmkaeeomgkwggoyo: goto cuumeogeomowqisc; } gcckqucukawcasgk: cuumeogeomowqisc: return $ksaameoqigiaoigg; } public function cgosiioosmgsgecq($esaqeawoigqgagum) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("{$esaqeawoigqgagum}\57\166\x69\x72\164\165\141\154\55\x62\162\x6f\167\x73\145\x72\56\152\163\157\x6e"); if (!(200 === (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) && ($kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu)))) { goto csammceowmqwaamq; } $this->oaumimwssciwumys("\126\x42\72\40\x4a\123\x4f\x4e\x20\106\x69\154\145\40\x52\145\x74\x72\x69\x65\166\x65\144\56"); return $kuukgsmqkagwaciu; csammceowmqwaamq: return false; } public function qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc) { $ksaameoqigiaoigg = false; if (!($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq))) { goto cogywoqcqummsyus; } $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); if (!isset($icwicymcioeyeyek[self::skogicecygyyskkq], $icwicymcioeyeyek[self::mcaucuyeeiwsmmuy])) { goto eekcoeikaeaaeyii; } $swyigkueoywiacam = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if (!$swyigkueoywiacam->exists($esaqeawoigqgagum)) { goto ocaguquugeamqckq; } $swyigkueoywiacam->remove($esaqeawoigqgagum); ocaguquugeamqckq: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $ewgwqamkygiqaawc); eekcoeikaeaaeyii: cogywoqcqummsyus: if ($ksaameoqigiaoigg !== false) { goto gmwykkouysyaqwqm; } $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\166\x69\162\x74\165\141\154\137\x62\162\x6f\167\163\145\x72\x5f\x72\x65\163\165\154\164\x5f\143\141\143\150\x65\x5f\x66\x61\x69\154\x65\144", $sameaqkagyqomooq, $ewgwqamkygiqaawc); $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\122\145\163\x75\154\164\x20\146\x65\x74\143\150\145\x64\40\x62\165\x74\x20\x63\141\156\40\156\157\164\40\143\x61\143\x68\x65\x20\151\x74\56", PR__MDL__OPTIMIZATION)); $this->oaumimwssciwumys("\126\102\x3a\40\122\145\163\x75\x6c\x74\x20\x66\x65\164\143\x68\x65\x64\40\x62\165\x74\40\143\141\x6e\x20\x6e\157\164\x20\x63\141\x63\x68\x65\40\151\x74\x2e"); goto ugqwuugsweqgmywk; gmwykkouysyaqwqm: $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\166\151\162\x74\165\141\154\137\142\162\157\x77\163\145\x72\x5f\162\145\163\x75\154\x74\x5f\x63\141\143\x68\x65\x64", $sameaqkagyqomooq, $ewgwqamkygiqaawc); ugqwuugsweqgmywk: return $ksaameoqigiaoigg; } public function wgqwcqeoiswmiqew($icwicymcioeyeyek, $sameaqkagyqomooq) { if (!($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq))) { goto sockeswygwcskeuq; } $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($esaqeawoigqgagum); if (!$ewgwqamkygiqaawc) { goto uaukmuiwskcemcsw; } $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); uaukmuiwskcemcsw: sockeswygwcskeuq: return $icwicymcioeyeyek; } public function csyeqcysyissgowm(string $sameaqkagyqomooq) : string { $esaqeawoigqgagum = ''; if (!($skacuygeqykiwiwy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->cmaecekuqkwmemms(self::cmiuooquqeyoccay))) { goto mkwkkmkgiqiamacc; } $esaqeawoigqgagum = "{$skacuygeqykiwiwy}\57{$sameaqkagyqomooq}\56\x6a\x73\157\156"; mkwkkmkgiqiamacc: return $esaqeawoigqgagum; } }
