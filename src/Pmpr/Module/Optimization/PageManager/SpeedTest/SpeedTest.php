<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b73dc7163             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\SpeedTest; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page as PageModel; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class SpeedTest extends Container { use PageManagerEngineTrait; const smsimmcqmsmgyuii = "\x73\x70\x65\x65\144\x74\145\163\x74"; const quouokcgsyacigiu = "\x73\160\x65\145\144\x5f\x74\145\163\x74"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\151\156\x5f\x69\x6e\x69\164", [$this, "\x79\145\x79\151\147\165\171\145\x67\x6d\x6d\171\x75\163\x65\141"])->qcsmikeggeemccuu(Process::eqcogaqyemgysumq, [$this, "\x61\171\153\x79\145\x67\163\x71\x69\163\167\155\151\155\x75\171"], 10, 2)->qcsmikeggeemccuu(Process::asueeykmyygakoqs, [$this, "\x61\145\153\x75\x69\157\153\163\x6d\161\x71\143\143\171\165\x75"], 10, 2); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . "\143\141\x63\150\x65\137\150\164\155\x6c\x5f\x67\145\x6e\145\x72\x61\x74\x65\x64", [$this, "\x6d\143\x6b\167\161\151\157\x6d\x6d\145\151\171\167\x65\x79\x77"], 10, 2); } public function mameiwsayuyquoeq() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Page::symcgieuakksimmu(); } } public function yeyiguyegmmyusea() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy() && $this->qckwuesaysuoqcuk() && !$this->guaegcucuwakigoa() && !$this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw()) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__("\131\x6f\x75\x72\40\x73\151\x74\145\40\x69\x73\x20\x75\156\x61\166\x61\x69\x6c\141\x62\x6c\145\40\50\45\x73\51\40\x62\x79\x20\x47\x6f\157\147\x6c\145\40\146\157\x72\40\160\x61\x67\145\x20\x73\160\x65\145\x64\40\164\x65\163\x74\151\156\147\56", PR__MDL__OPTIMIZATION), "\110\x54\124\x50\40\x53\x74\141\x74\x75\163\x20\103\x6f\x64\x65\x20\x34\x30\63") . $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\x4d\x6f\162\145\40\111\156\x66\157\162\x6d\x61\x74\x69\157\156", PR__MDL__OPTIMIZATION), $this->kmuweyayaqoeqiyw()->gamgkoooceoaaeie("\163\x70\x65\145\x64\x5f\164\145\x73\x74")), "\163\151\164\x65\55\156\x6f\x74\55\x64\151\x73\160\141\x74\x63\150\x61\x62\x6c\x65"); } } public function mckwqiommeiyweyw($esaqeawoigqgagum, $eeamcawaiqocomwy) { if (basename($esaqeawoigqgagum) === "\151\156\144\145\x78\x2e\150\164\155\154" && $this->gcqaaiygcykaqwym()) { $iuekmkswcsacoawq = PageModel::symcgieuakksimmu(); $eeamcawaiqocomwy = $iuekmkswcsacoawq->esewqawcwouwyesq($eeamcawaiqocomwy, false); $suaemuyiacqyugsm = $iuekmkswcsacoawq->iekyeyicoyyawomk()->akkkoiiymmamsauc($eeamcawaiqocomwy, Constants::auqoykcmsiauccao); if ($suaemuyiacqyugsm && $iuekmkswcsacoawq->waecsyqmwascmqoa($suaemuyiacqyugsm, $iuekmkswcsacoawq::aewquksqwqiawiei, 0)) { Process::symcgieuakksimmu()->gkimgkucuskgagqo($iuekmkswcsacoawq->esewqawcwouwyesq($eeamcawaiqocomwy), $iuekmkswcsacoawq->mwyqswsaeeewsosm($suaemuyiacqyugsm)); } } } public function aykyegsqiswmimuy($eeamcawaiqocomwy, $qkcoyiyeuoyyoocy) { $sogksuscggsicmac = false; if ($this->gcqaaiygcykaqwym()) { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $gcemueskwuiggwki = $goqqimcssiyagkwy->sweusgyeqwgmyauq(Constants::imywcsggckkcywgk, $qkcoyiyeuoyyoocy, self::quouokcgsyacigiu, Constants::eyemmiwoaayukksq); if (!$gcemueskwuiggwki) { $sogksuscggsicmac = API::symcgieuakksimmu()->wysoaqkkayeussmu($eeamcawaiqocomwy); if (!is_wp_error($sogksuscggsicmac)) { $this->wkagassgcaqeosio()->qiskoakuecueiauy($qkcoyiyeuoyyoocy, $sogksuscggsicmac); Process::symcgieuakksimmu()->mkgmgessyuewwswa($sogksuscggsicmac[Constants::kyakumqgcsaskweq] ?? 30, $eeamcawaiqocomwy, $qkcoyiyeuoyyoocy); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\x6e\x6f\164\x68\145\x72\x20\x70\x72\157\143\x65\x73\x73\40\141\154\162\145\141\144\x79\40\x73\164\x61\162\x74\145\144\56", PR__MDL__OPTIMIZATION), 401); } } return $sogksuscggsicmac; } public function aekuioksmqqccyuu($eeamcawaiqocomwy, $qkcoyiyeuoyyoocy) { $syoewmweaqiqswgu = "\163\160\x65\x65\x64\x5f\164\x65\x73\164\137\x71\165\145\165\145\x5f{$qkcoyiyeuoyyoocy}\137\164\x72\141\156\x73\151\x65\156\164"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $sogksuscggsicmac = false; if ($this->gcqaaiygcykaqwym()) { $sogksuscggsicmac = $this->paekekswsswiicis($qkcoyiyeuoyyoocy); if (is_bool($sogksuscggsicmac)) { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); } else { if (!is_wp_error($sogksuscggsicmac)) { if (!API::symcgieuakksimmu()->goaikaqccaawcswu()) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::quyascocmiiossme, true); $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x59\157\x75\x72\x20\x73\x69\164\x65\40\x69\163\x20\165\x6e\141\x76\x61\151\154\141\x62\x6c\x65\x20\50\45\x73\51\40\142\171\x20\107\157\157\147\154\145\40\146\157\x72\40\160\141\x67\x65\x20\163\160\x65\x65\144\40\164\145\163\x74\x69\x6e\x67\x2e", PR__MDL__OPTIMIZATION), "\x48\x54\124\x50\x20\123\164\141\x74\165\163\x20\x43\157\x64\x65\x20\x34\60\63")); } else { $wciyuagckicucysk = $qkqgcaykemoiecma->igqksmmwesguiaae($syoewmweaqiqswgu); if (empty($wciyuagckicucysk) || $wciyuagckicucysk < 0) { $wciyuagckicucysk = 1; } if ($wciyuagckicucysk <= 3) { $cqgoimumaewouews = Remote::symcgieuakksimmu()->qcwwiyuycagsaikk($sogksuscggsicmac) * $wciyuagckicucysk; } else { $cqgoimumaewouews = MINUTE_IN_SECONDS * 10; } if ($wciyuagckicucysk <= 10) { $qkqgcaykemoiecma->gawcqwcqgwgucgya($syoewmweaqiqswgu, ++$wciyuagckicucysk); Process::symcgieuakksimmu()->mkgmgessyuewwswa($cqgoimumaewouews, $qkcoyiyeuoyyoocy); } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\163\x70\x65\x65\144\137\164\145\163\164\x5f\162\145\x74\x72\151\145\166\145\x5f\x72\145\163\x75\x6c\164\x5f\146\x61\x69\x6c\x65\x64", $qkcoyiyeuoyyoocy); } $sogksuscggsicmac = false; } } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\163\160\145\x65\x64\137\x74\x65\x73\x74\137\162\x65\x74\162\151\145\166\145\x5f\162\x65\163\165\154\x74\137\x66\x61\151\154\145\144", $qkcoyiyeuoyyoocy); } } } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\163\160\145\145\x64\137\x74\x65\x73\x74\x5f\162\x65\164\x72\151\x65\166\145\137\162\145\163\165\x6c\x74\137\x66\x61\x69\154\x65\x64", $qkcoyiyeuoyyoocy); } return $sogksuscggsicmac; } public function paekekswsswiicis($qkcoyiyeuoyyoocy) { $scwwcyaqyywsweoq = $this->wkagassgcaqeosio()->sweusgyeqwgmyauq(Constants::imywcsggckkcywgk, $qkcoyiyeuoyyoocy, self::quouokcgsyacigiu, Constants::eyemmiwoaayukksq); $ksaameoqigiaoigg = false; if ($scwwcyaqyywsweoq) { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if ($esaqeawoigqgagum = $ycikkiiimgoqqgsq->csyeqcysyissgowm($scwwcyaqyywsweoq)) { if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($esaqeawoigqgagum)) { $ksaameoqigiaoigg = $this->gkaocuaauikgisuc($qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc); } else { if ($giogkommscssioky = $ycikkiiimgoqqgsq->oqggmyigigeeqwye($scwwcyaqyywsweoq)) { $ksaameoqigiaoigg = $this->guksgkgiseiigkaw($giogkommscssioky, $esaqeawoigqgagum, $qkcoyiyeuoyyoocy); } } } } if ($scwwcyaqyywsweoq && !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $scwwcyaqyywsweoq; } return $ksaameoqigiaoigg; } public function cgosiioosmgsgecq($esaqeawoigqgagum) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("{$esaqeawoigqgagum}\57\x73\x70\145\x65\x64\164\145\x73\164\x2e\152\163\157\x6e"); if (200 === (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) && ($kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu))) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x53\160\x65\145\144\40\124\x65\163\164\72\x20\x4a\x53\117\x4e\40\106\x69\x6c\145\40\x52\145\x74\x72\151\145\166\x65\x64\x2e"); return $kuukgsmqkagwaciu; } return false; } public function guksgkgiseiigkaw(string $giogkommscssioky, string $gmukeskyyskueium, string $okuucwisauuawocs) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = API::symcgieuakksimmu()->uiqqikcuycqyeooa($giogkommscssioky); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($sogksuscggsicmac[Constants::ciywsqoeiymemsys]) { case Constants::uasuowkaguiwoouw: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\123\160\145\145\144\40\124\145\x73\x74\40\x73\x74\141\164\165\x73\x20\x66\141\x69\x6c\145\x64\72\x20\x25\163", PR__MDL__OPTIMIZATION), $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\162\x65\x61\163\157\x6e", ''))); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug(sprintf("\x53\160\x65\x65\x64\40\124\145\x73\164\72\x20\163\164\141\x74\x75\163\x20\146\x61\151\154\145\144\40\75\x3e\40\45\x73", $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\162\x65\x61\163\x6f\156", ''))); break; case Constants::amcogigwsaqssuai: case Constants::gymusgeumuwomwuy: $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x53\160\x65\x65\x64\x20\124\145\x73\164\x3a\x20\x73\164\141\164\x75\163\x20\143\157\x6d\160\x6c\145\x74\x65\x64"); if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($gmukeskyyskueium)) { $ksaameoqigiaoigg = $this->gkaocuaauikgisuc($okuucwisauuawocs, $ewgwqamkygiqaawc); } break; } return $ksaameoqigiaoigg; } public function gkaocuaauikgisuc($qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); if ($sogksuscggsicmac) { $icwicymcioeyeyek = [Model::aaegquasauuywyey => $sogksuscggsicmac[Constants::auugqowqueaocgsu] ?? 0]; $yygmoeguaqyumuui = ["\163\143\157\x72\145", "\146\x63\x70", "\x6c\143\x70", "\x63\x6c\163", "\164\142\164", "\x73\x69"]; $yqkagouksaimoyqa = [Constants::mcaucuyeeiwsmmuy, Constants::skogicecygyyskkq]; foreach ($yqkagouksaimoyqa as $ykeeyqcewuccwkeo) { foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $eqgoocgaqwqcimie = $sogksuscggsicmac[$ykeeyqcewuccwkeo][$uusmaiomayssaecw] ?? false; if ($eqgoocgaqwqcimie !== false) { $icwicymcioeyeyek["{$ykeeyqcewuccwkeo}\x5f{$uusmaiomayssaecw}"] = $eqgoocgaqwqcimie; } } } if ($icwicymcioeyeyek) { $icwicymcioeyeyek[Constants::egukegmcemkeegqq] = $qkcoyiyeuoyyoocy; $sogksuscggsicmac = Model::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $ksaameoqigiaoigg = true; } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x53\160\145\145\x64\40\x54\x65\x73\x74\72\x20{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac[Constants::iwyueouqaqegmcas])}\x2e"); } } } if ($ksaameoqigiaoigg !== false) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\163\x70\x65\145\144\x5f\x74\145\x73\x74\137\x72\145\163\x75\154\164\137\x73\x61\x76\x65\144", $qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc); } else { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\163\x70\145\x65\x64\137\x74\x65\x73\164\137\162\x65\163\x75\x6c\164\x5f\x73\x61\x76\145\137\146\141\x69\x6c\x65\144", $qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc); $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\x65\163\x75\154\x74\40\x66\x65\x74\143\150\145\144\40\x62\165\x74\40\x63\x61\x6e\x20\x6e\157\164\x20\x73\141\166\145\40\151\164\x2e", PR__MDL__OPTIMIZATION)); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x53\160\145\145\144\x20\124\x65\163\164\x3a\40\x52\x65\x73\165\154\164\x20\146\x65\164\143\150\145\x64\40\142\165\164\40\x63\x61\x6e\40\156\x6f\164\x20\163\x61\166\x65\x20\151\164\x2e"); } return $ksaameoqigiaoigg; } public function qckwuesaysuoqcuk() : bool { return $this->weysguygiseoukqw(Setting::uauwkaimuwugwwma, false); } public function guaegcucuwakigoa() : bool { return !$this->weysguygiseoukqw(Setting::quyascocmiiossme, false); } public function gcqaaiygcykaqwym() : bool { return $this->qckwuesaysuoqcuk() && $this->guaegcucuwakigoa(); } }
