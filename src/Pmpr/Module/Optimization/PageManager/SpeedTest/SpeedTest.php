<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581d1c9b1ab             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\SpeedTest; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page as PageModel; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class SpeedTest extends Container { use PageManagerEngineTrait; const smsimmcqmsmgyuii = "\163\160\145\x65\144\164\145\163\x74"; const quouokcgsyacigiu = "\163\x70\145\x65\x64\x5f\x74\x65\x73\164"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\x69\156\137\x69\156\x69\164", [$this, "\x79\145\x79\151\x67\165\171\x65\x67\x6d\155\x79\165\x73\145\x61"])->qcsmikeggeemccuu(Process::eqcogaqyemgysumq, [$this, "\x61\x79\x6b\x79\x65\x67\163\x71\151\x73\167\x6d\151\155\165\171"], 10, 2)->qcsmikeggeemccuu(Process::asueeykmyygakoqs, [$this, "\141\145\153\165\x69\x6f\153\x73\x6d\x71\x71\x63\x63\x79\165\x75"], 10, 2); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . "\x63\x61\x63\x68\x65\137\150\164\x6d\154\x5f\147\x65\x6e\x65\x72\x61\x74\x65\144", [$this, "\155\x63\x6b\x77\161\x69\x6f\155\155\145\151\171\x77\145\171\167"], 10, 2); } public function mameiwsayuyquoeq() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Page::symcgieuakksimmu(); } } public function yeyiguyegmmyusea() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy() && $this->qckwuesaysuoqcuk() && !$this->guaegcucuwakigoa() && !$this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw()) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__("\x59\157\x75\162\40\163\x69\x74\x65\x20\151\x73\40\x75\x6e\141\166\141\151\x6c\x61\142\x6c\x65\x20\50\x25\x73\51\x20\142\x79\40\x47\157\x6f\147\154\145\x20\146\x6f\x72\x20\x70\x61\147\145\x20\x73\160\x65\145\x64\x20\x74\145\163\x74\x69\x6e\x67\x2e", PR__MDL__OPTIMIZATION), "\x48\124\124\x50\40\x53\x74\141\164\165\x73\x20\x43\157\144\x65\x20\64\60\x33") . $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\x4d\x6f\x72\x65\40\x49\156\146\157\162\155\x61\x74\151\157\156", PR__MDL__OPTIMIZATION), $this->kmuweyayaqoeqiyw()->gamgkoooceoaaeie("\163\x70\145\x65\144\x5f\x74\x65\x73\x74")), "\x73\x69\x74\145\55\156\157\x74\55\x64\151\x73\x70\141\164\x63\150\x61\142\154\x65"); } } public function mckwqiommeiyweyw($esaqeawoigqgagum, $eeamcawaiqocomwy) { if (basename($esaqeawoigqgagum) === "\151\x6e\x64\x65\x78\56\150\164\155\154" && $this->gcqaaiygcykaqwym()) { $iuekmkswcsacoawq = PageModel::symcgieuakksimmu(); $eeamcawaiqocomwy = $iuekmkswcsacoawq->esewqawcwouwyesq($eeamcawaiqocomwy, false); $suaemuyiacqyugsm = $iuekmkswcsacoawq->iekyeyicoyyawomk()->akkkoiiymmamsauc($eeamcawaiqocomwy, Constants::auqoykcmsiauccao); if ($suaemuyiacqyugsm && $iuekmkswcsacoawq->waecsyqmwascmqoa($suaemuyiacqyugsm, $iuekmkswcsacoawq::aewquksqwqiawiei, 0)) { Process::symcgieuakksimmu()->gkimgkucuskgagqo($iuekmkswcsacoawq->esewqawcwouwyesq($eeamcawaiqocomwy), $iuekmkswcsacoawq->mwyqswsaeeewsosm($suaemuyiacqyugsm)); } } } public function aykyegsqiswmimuy($eeamcawaiqocomwy, $qkcoyiyeuoyyoocy) { $sogksuscggsicmac = false; if ($this->gcqaaiygcykaqwym()) { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $gcemueskwuiggwki = $goqqimcssiyagkwy->sweusgyeqwgmyauq(Constants::imywcsggckkcywgk, $qkcoyiyeuoyyoocy, self::quouokcgsyacigiu, Constants::eyemmiwoaayukksq); if (!$gcemueskwuiggwki) { $sogksuscggsicmac = API::symcgieuakksimmu()->wysoaqkkayeussmu($eeamcawaiqocomwy); if (!is_wp_error($sogksuscggsicmac)) { $this->wkagassgcaqeosio()->qiskoakuecueiauy($qkcoyiyeuoyyoocy, $sogksuscggsicmac); Process::symcgieuakksimmu()->mkgmgessyuewwswa($sogksuscggsicmac[Constants::kyakumqgcsaskweq] ?? 30, $eeamcawaiqocomwy, $qkcoyiyeuoyyoocy); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\156\157\164\150\145\x72\x20\160\x72\x6f\x63\145\163\x73\x20\x61\154\162\145\141\x64\171\x20\163\x74\141\x72\164\x65\144\x2e", PR__MDL__OPTIMIZATION), 401); } } return $sogksuscggsicmac; } public function aekuioksmqqccyuu($eeamcawaiqocomwy, $qkcoyiyeuoyyoocy) { $syoewmweaqiqswgu = "\x73\160\x65\145\x64\137\x74\145\163\x74\x5f\161\x75\145\x75\145\x5f{$qkcoyiyeuoyyoocy}\137\x74\x72\x61\x6e\163\x69\145\156\164"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $sogksuscggsicmac = false; if ($this->gcqaaiygcykaqwym()) { $sogksuscggsicmac = $this->paekekswsswiicis($qkcoyiyeuoyyoocy); if (is_bool($sogksuscggsicmac)) { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); } else { if (!is_wp_error($sogksuscggsicmac)) { if (!API::symcgieuakksimmu()->goaikaqccaawcswu()) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::quyascocmiiossme, true); $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\131\157\165\x72\40\x73\151\164\145\x20\151\163\x20\x75\156\x61\166\x61\151\x6c\141\x62\x6c\x65\x20\x28\x25\163\51\40\142\x79\x20\107\x6f\157\x67\x6c\145\40\x66\x6f\162\x20\160\x61\x67\145\x20\163\x70\145\x65\144\x20\x74\x65\163\164\x69\156\x67\56", PR__MDL__OPTIMIZATION), "\x48\x54\x54\x50\40\x53\x74\141\164\x75\163\40\x43\x6f\144\x65\x20\x34\x30\63")); } else { $wciyuagckicucysk = $qkqgcaykemoiecma->igqksmmwesguiaae($syoewmweaqiqswgu); if (empty($wciyuagckicucysk) || $wciyuagckicucysk < 0) { $wciyuagckicucysk = 1; } if ($wciyuagckicucysk <= 3) { $cqgoimumaewouews = Remote::symcgieuakksimmu()->qcwwiyuycagsaikk($sogksuscggsicmac) * $wciyuagckicucysk; } else { $cqgoimumaewouews = MINUTE_IN_SECONDS * 10; } if ($wciyuagckicucysk <= 10) { $qkqgcaykemoiecma->gawcqwcqgwgucgya($syoewmweaqiqswgu, ++$wciyuagckicucysk); Process::symcgieuakksimmu()->mkgmgessyuewwswa($cqgoimumaewouews, $qkcoyiyeuoyyoocy); } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\163\x70\145\x65\144\137\164\145\163\164\137\162\x65\x74\162\x69\x65\x76\145\137\162\145\x73\x75\x6c\164\137\x66\141\151\154\x65\144", $qkcoyiyeuoyyoocy); } $sogksuscggsicmac = false; } } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\163\x70\x65\145\144\x5f\x74\145\163\164\137\162\145\164\162\x69\x65\x76\145\137\162\145\163\x75\154\x74\137\x66\141\151\154\x65\x64", $qkcoyiyeuoyyoocy); } } } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x73\x70\145\x65\x64\137\x74\145\x73\164\137\162\x65\164\x72\151\x65\x76\145\x5f\x72\x65\x73\165\x6c\x74\137\x66\141\x69\x6c\145\144", $qkcoyiyeuoyyoocy); } return $sogksuscggsicmac; } public function paekekswsswiicis($qkcoyiyeuoyyoocy) { $scwwcyaqyywsweoq = $this->wkagassgcaqeosio()->sweusgyeqwgmyauq(Constants::imywcsggckkcywgk, $qkcoyiyeuoyyoocy, self::quouokcgsyacigiu, Constants::eyemmiwoaayukksq); $ksaameoqigiaoigg = false; if ($scwwcyaqyywsweoq) { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if ($esaqeawoigqgagum = $ycikkiiimgoqqgsq->csyeqcysyissgowm($scwwcyaqyywsweoq)) { if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($esaqeawoigqgagum)) { $ksaameoqigiaoigg = $this->gkaocuaauikgisuc($qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc); } else { if ($giogkommscssioky = $ycikkiiimgoqqgsq->oqggmyigigeeqwye($scwwcyaqyywsweoq)) { $ksaameoqigiaoigg = $this->guksgkgiseiigkaw($giogkommscssioky, $esaqeawoigqgagum, $qkcoyiyeuoyyoocy); } } } } if ($scwwcyaqyywsweoq && !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $scwwcyaqyywsweoq; } return $ksaameoqigiaoigg; } public function cgosiioosmgsgecq($esaqeawoigqgagum) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("{$esaqeawoigqgagum}\x2f\x73\160\x65\x65\144\164\x65\x73\164\x2e\152\x73\x6f\x6e"); if (200 === (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) && ($kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu))) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\123\160\x65\x65\x64\x20\124\x65\163\x74\x3a\x20\112\123\x4f\x4e\40\106\151\x6c\145\x20\122\145\164\x72\151\x65\166\x65\x64\56"); return $kuukgsmqkagwaciu; } return false; } public function guksgkgiseiigkaw(string $giogkommscssioky, string $gmukeskyyskueium, string $okuucwisauuawocs) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = API::symcgieuakksimmu()->uiqqikcuycqyeooa($giogkommscssioky); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($sogksuscggsicmac[Constants::ciywsqoeiymemsys]) { case Constants::uasuowkaguiwoouw: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x53\x70\x65\145\144\40\124\145\x73\x74\40\x73\x74\141\x74\x75\x73\x20\x66\x61\151\x6c\145\144\x3a\x20\x25\163", PR__MDL__OPTIMIZATION), $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x72\x65\x61\x73\x6f\x6e", ''))); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug(sprintf("\x53\160\145\x65\x64\40\x54\x65\163\x74\x3a\40\163\x74\141\x74\x75\x73\x20\x66\x61\151\x6c\x65\x64\x20\75\x3e\40\45\x73", $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\162\145\141\163\157\x6e", ''))); break; case Constants::amcogigwsaqssuai: case Constants::gymusgeumuwomwuy: $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\123\160\145\145\x64\40\x54\x65\163\164\x3a\x20\163\x74\141\164\x75\x73\40\143\157\x6d\160\154\145\164\x65\144"); if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($gmukeskyyskueium)) { $ksaameoqigiaoigg = $this->gkaocuaauikgisuc($okuucwisauuawocs, $ewgwqamkygiqaawc); } break; } return $ksaameoqigiaoigg; } public function gkaocuaauikgisuc($qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); if ($sogksuscggsicmac) { $icwicymcioeyeyek = [Model::aaegquasauuywyey => $sogksuscggsicmac[Constants::auugqowqueaocgsu] ?? 0]; $yygmoeguaqyumuui = ["\x73\143\157\162\145", "\x66\143\x70", "\x6c\143\x70", "\143\154\163", "\164\x62\x74", "\x73\151"]; $yqkagouksaimoyqa = [Constants::mcaucuyeeiwsmmuy, Constants::skogicecygyyskkq]; foreach ($yqkagouksaimoyqa as $ykeeyqcewuccwkeo) { foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $eqgoocgaqwqcimie = $sogksuscggsicmac[$ykeeyqcewuccwkeo][$uusmaiomayssaecw] ?? false; if ($eqgoocgaqwqcimie !== false) { $icwicymcioeyeyek["{$ykeeyqcewuccwkeo}\x5f{$uusmaiomayssaecw}"] = $eqgoocgaqwqcimie; } } } if ($icwicymcioeyeyek) { $icwicymcioeyeyek[Constants::egukegmcemkeegqq] = $qkcoyiyeuoyyoocy; $sogksuscggsicmac = Model::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $ksaameoqigiaoigg = true; } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\123\x70\145\x65\x64\40\124\x65\163\164\x3a\40{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac[Constants::iwyueouqaqegmcas])}\x2e"); } } } if ($ksaameoqigiaoigg !== false) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\163\160\x65\x65\144\137\x74\x65\163\x74\x5f\162\x65\x73\x75\x6c\x74\137\x73\x61\166\x65\144", $qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc); } else { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\163\x70\145\x65\144\137\x74\145\x73\164\137\162\145\x73\165\x6c\x74\137\163\x61\x76\x65\137\146\x61\x69\154\x65\x64", $qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc); $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\x65\163\165\154\x74\x20\x66\145\164\143\150\145\x64\x20\x62\165\164\x20\x63\141\156\x20\x6e\x6f\164\40\163\x61\166\145\40\x69\x74\x2e", PR__MDL__OPTIMIZATION)); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x53\160\145\145\144\40\124\145\x73\x74\x3a\40\122\x65\x73\165\x6c\x74\x20\x66\145\x74\x63\150\x65\144\x20\142\165\164\40\143\141\x6e\x20\156\157\164\x20\163\x61\x76\x65\40\151\164\x2e"); } return $ksaameoqigiaoigg; } public function qckwuesaysuoqcuk() : bool { return $this->weysguygiseoukqw(Setting::uauwkaimuwugwwma, false); } public function guaegcucuwakigoa() : bool { return !$this->weysguygiseoukqw(Setting::quyascocmiiossme, false); } public function gcqaaiygcykaqwym() : bool { return $this->qckwuesaysuoqcuk() && $this->guaegcucuwakigoa(); } }
