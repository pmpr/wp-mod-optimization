<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624eb0824ce5d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Cloudflare; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Pmpr\Module\Optimization\Notice; class Cloudflare extends Common { const yuwieqykuwacwmuw = self::wowuwuigyoceikas . "\137\x63\146\137\143\157\x6f\x6b\151\145"; public function __construct() { if (!$this->cyowaaeywssoooeo()) { goto ykuqeyogsasokqis; } parent::__construct(); $this->iemaakgqgqosiecm(); ykuqeyogsasokqis: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\164", [$this, "\151\x6e\151\164"])->qcsmikeggeemccuu("\141\x64\x6d\151\x6e\x5f\151\x6e\x69\x74", [$this, "\x79\x65\171\x69\147\165\171\145\147\x6d\x6d\171\x75\x73\145\x61"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x62\x65\146\x6f\162\x65\x5f\x73\164\x61\x72\x74\x5f\x70\x72\x65\154\157\141\x64"), [$this, "\x75\x79\x73\x65\x63\x71\153\x61\x61\155\x69\153\171\151\x6d\x65"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\137\160\x72\x65\x6c\157\141\x64\151\x6e\x67\x5f\x74\x61\163\153\137\157\160\164\151\157\156\x73"), [$this, "\x79\147\x73\141\157\167\151\x77\x73\163\153\171\x67\153\x75\171"]); parent::kgquecmsgcouyaya(); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\x50\122\x5f\x5f\103\x41\x43\110\105\x5f\x5f\x50\x41\124\110")) { goto mqaamqyoywyekiko; } $this->syiuacooagmooima("\x63\x6c\157\165\x64\146\154\x61\x72\x65\x2d\160\x61\164\x68", __("\117\160\164\151\155\x69\172\141\x74\151\x6f\156\40\103\154\157\165\144\146\154\141\x72\145\40\x50\x61\164\x68", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); goto smkakiyekkqoggao; mqaamqyoywyekiko: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck("\117\x50\x54\111\x4d\111\x5a\x41\124\111\117\x4e\x5f\103\x4c\x4f\125\104\x46\x4c\x41\x52\x45\137\120\x41\x54\110", "{$skacuygeqykiwiwy}\57\143\x6c\x6f\165\x64\x66\154\x61\162\145"); smkakiyekkqoggao: return $ksaameoqigiaoigg; } public function iemaakgqgqosiecm() { Purge::symcgieuakksimmu(); Redirect::symcgieuakksimmu(); Controller::symcgieuakksimmu(); if (ManipulateAjax::mcgoysmkqsqooceq()) { goto yisoawmmammassqk; } if (!is_admin()) { goto zggweikegkcgkmma; } Setting::symcgieuakksimmu(); zggweikegkcgkmma: goto gcsosokicycukoyc; yisoawmmammassqk: Ajax::symcgieuakksimmu(); gcsosokicycukoyc: } public function init() { $seiwgiesegcmssam = DecoratorUser::ksgkoukcicwkkaum(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!$seiwgiesegcmssam) { goto seqammocqkyswaim; } $wcyykoegqiuckcku = $eygsasmqycagyayw->owygwqwawqoiusis("\x62\165\x73\x74\145\x72", false)->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\142\x75\163\164\x65\x72\x2e\152\x73"))->yiuoscqaekcgiyuy("\144\x61\x74\x61\x2d\x63\x66\141\x73\x79\x6e\x63", 1); $eygsasmqycagyayw->oeoquuwkoywiuesy($wcyykoegqiuckcku)->ayeieigcckcmsikq($wcyykoegqiuckcku); seqammocqkyswaim: if (is_admin()) { goto coskmuqsawiaeyqg; } $eygsasmqycagyayw->ieayqiyiuuguowyq("\x63\154\x6f\x75\x64\146\154\x61\162\145", ["\142\165\x73\x74\x65\162" => self::yyeseoqwcecweeii, "\163\145\x6c\x65\x63\164\157\162" => "\141"]); goto umccwcqwkoiaakmu; coskmuqsawiaeyqg: $eygsasmqycagyayw->ikqyiskqaaymscgw("\143\154\x6f\x75\144\146\154\x61\x72\145", ["\141\x6a\x61\x78" => Ajax::myikkigscysoykgy, "\163\x65\154\145\143\x74\157\x72" => implode("\54\x20", ["\x23\x65\144\x69\164\x6f\162\x20\x2e\145\144\x69\164\x6f\x72\55\160\x6f\x73\x74\x2d\x70\x65\162\x6d\141\x6c\151\x6e\153\x5f\x5f\x6c\x69\156\153", "\x23\x77\160\55\x61\x64\x6d\x69\x6e\x2d\142\141\x72\x2d\x6d\x79\55\163\x69\x74\x65\163\x2d\x6c\x69\x73\x74\40\x61", "\x23\x65\x64\151\164\x6f\162\x20\x2e\x65\x64\151\x74\157\x72\55\160\157\x73\164\55\x70\162\145\x76\x69\145\x77", "\43\x77\x70\x2d\141\144\155\x69\156\x2d\142\x61\162\x2d\163\x69\164\145\55\x6e\x61\155\x65\x20\x61", "\x23\x77\160\x2d\141\144\x6d\x69\x6e\x2d\142\141\x72\55\x76\151\145\167\x2d\163\x69\x74\x65\40\141", "\43\x73\141\155\160\154\145\x2d\160\x65\x72\x6d\141\154\151\x6e\153\40\x61", "\43\167\x70\x2d\141\x64\x6d\151\156\55\x62\x61\x72\55\166\151\145\167\x20\141", "\43\x65\x64\x69\x74\157\x72\40\56\151\x73\55\x6c\151\156\153", "\56\162\157\x77\55\x61\143\x74\x69\157\x6e\x73\x20\x61", "\43\155\145\x73\163\141\147\x65\40\141", "\x2e\x70\162\x65\166\151\145\167"]), "\142\165\163\164\x65\x72" => self::yyeseoqwcecweeii, "\x70\165\162\147\x65\137\x70\x6f\x73\x74\137\143\x61\x63\150\x65" => ["\164\x69\164\x6c\x65" => __("\x50\x75\162\147\145\40\120\x6f\x73\164\40\103\x61\x63\x68\145", PR__MDL__OPTIMIZATION)]]); umccwcqwkoiaakmu: } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto gysmigyakgaakeoy; } if (!$this->kmuweyayaqoeqiyw()->eaiyegoagkgeowae()) { goto kmcygqkmwcgwamkw; } $eggwswqquakgowom = $this->yayksoygskcuaygq(); $yqimccamkgmmuuyg = Controller::symcgieuakksimmu()->auamgqiwisysomsa(); if (!(!is_array($eggwswqquakgowom) || !$eggwswqquakgowom || count($eggwswqquakgowom) > 1)) { goto gsggsmmwcmkgyyss; } if ($eggwswqquakgowom = $yqimccamkgmmuuyg->yayksoygskcuaygq($iswcokucwmiosiaq)) { goto uagsgicwwcakecwq; } if (!$iswcokucwmiosiaq) { goto kcqueaewmayywqeq; } $this->yiggueaiwiygoiyi($iswcokucwmiosiaq, "\143\x66\x2d\x67\145\x74\55\172\x6f\156\x65\55\151\x64\x2d\154\x69\163\164", self::imkacwmiuiykyuim); kcqueaewmayywqeq: goto qocgmocqauaaekii; uagsgicwwcakecwq: $wegekcwgakqeqsmq = $this->weysguygiseoukqw(Setting::qeykiyegimcyucgk, Setting::fsekswokoseswcqm); $qeqooyuoiasweuck = $this->aoqykkmokwseeeie(); if (!$qeqooyuoiasweuck) { goto gcoeaokkagaaeuse; } $ogookoeuwuoiaaac = Manipulate::goewgasukwccacim(); if ($wegekcwgakqeqsmq == Setting::eywauigiwgqckygk) { goto smksoismyouykeoa; } if (!in_array($ogookoeuwuoiaaac, $eggwswqquakgowom)) { goto imquwacukaswoyka; } $cgaiqcoosmmymqqm = ManipulateArray::get(array_flip($eggwswqquakgowom), $ogookoeuwuoiaaac); if (!$cgaiqcoosmmymqqm) { goto wyyowcsciaqkuiuq; } $qeqooyuoiasweuck[Setting::kymimiuqukascgmw] = $cgaiqcoosmmymqqm; $qeqooyuoiasweuck[Setting::aygoyiggsequgiua] = "\157\156"; $qeqooyuoiasweuck[Setting::suwymqqyesquiqqc] = [$cgaiqcoosmmymqqm => $ogookoeuwuoiaaac]; wyyowcsciaqkuiuq: imquwacukaswoyka: goto qwgkwokcyocqiyee; smksoismyouykeoa: $iiqoeuwqmkiyigwm = $this->weysguygiseoukqw(Setting::kgigwyeaumymgaca); if (!$iiqoeuwqmkiyigwm) { goto ekgkiioywougquka; } $qeqooyuoiasweuck[Setting::kymimiuqukascgmw] = ManipulateArray::get($eggwswqquakgowom, $iiqoeuwqmkiyigwm); $qeqooyuoiasweuck[Setting::aygoyiggsequgiua] = "\157\156"; ekgkiioywougquka: qwgkwokcyocqiyee: if (!(isset($qeqooyuoiasweuck[Setting::aygoyiggsequgiua]) && $qeqooyuoiasweuck[Setting::aygoyiggsequgiua] == "\x6f\x6e")) { goto maeccckgcsaaumkw; } $yqimccamkgmmuuyg->eigwgcuaamoqkuyw($iswcokucwmiosiaq); maeccckgcsaaumkw: $this->kmuweyayaqoeqiyw()::oqyuwccsuskiwgew($qeqooyuoiasweuck); gcoeaokkagaaeuse: qocgmocqauaaekii: gsggsmmwcmkgyyss: if ($this->yoaiuuuwwssswyqa()) { goto cycasoiysmksuwqk; } if ($wquasmyyscuqaqom = $yqimccamkgmmuuyg->ymkgoumkoycwwmmq($iswcokucwmiosiaq)) { goto ikygockuuyimmmwk; } if (!$iswcokucwmiosiaq) { goto yweucowesgsoewyc; } $this->yiggueaiwiygoiyi($iswcokucwmiosiaq, "\x63\146\55\x67\145\164\55\x7a\157\156\145\55\151\x64\55\x6c\151\163\x74", self::imkacwmiuiykyuim); yweucowesgsoewyc: $this->oaumimwssciwumys("\x43\x61\156\x20\156\x6f\164\x20\x67\145\x74\40\144\x65\166\x65\x6c\157\x70\x6d\x65\156\x74\40\x6d\157\144\x65\40\x64\141\164\x61\56\x20{$iswcokucwmiosiaq}"); goto uwmcugkwqwcuqqsq; ikygockuuyimmmwk: $this->awwuyycwuuuggkqy($wquasmyyscuqaqom); uwmcugkwqwcuqqsq: cycasoiysmksuwqk: if (!$this->yusooeuwemoqcwmm()) { goto yicaqocukqoauqgc; } $gyamuieuowceasyo = $this->weysguygiseoukqw(Setting::scikeyuygqwyiisg); $wesqeosimkuoiogg = $this->weysguygiseoukqw(Setting::myguioueuiaacsko); if (!(!$gyamuieuowceasyo || !$wesqeosimkuoiogg)) { goto muimagegskoisckc; } $yqimccamkgmmuuyg->eigwgcuaamoqkuyw($iswcokucwmiosiaq, true); muimagegskoisckc: yicaqocukqoauqgc: kmcygqkmwcgwamkw: gysmigyakgaakeoy: } public function uysecqkaamikyime() { $yqimccamkgmmuuyg = API::symcgieuakksimmu(); $aecgggeoymywyumm = $yqimccamkgmmuuyg->ukuooogwaoiwagqs(); if (!$aecgggeoymywyumm) { goto sueeqeioeiwkscao; } DecoratorOption::update(self::yuwieqykuwacwmuw, $aecgggeoymywyumm); sueeqeioeiwkscao: } public function ygsaowiwsskygkuy($qiouiwasaauyaaue) : array { $aecgggeoymywyumm = DecoratorOption::get(self::yuwieqykuwacwmuw); if (!$aecgggeoymywyumm) { goto uieuouugckwokske; } $ymqmyyeuycgmigyo = ManipulateArray::get($aecgggeoymywyumm, "\x4e\141\x6d\x65"); $eqgoocgaqwqcimie = ManipulateArray::get($aecgggeoymywyumm, "\x56\x61\154\165\145"); if (!($ymqmyyeuycgmigyo && $eqgoocgaqwqcimie)) { goto mmesoisgqucowwms; } $qiouiwasaauyaaue["\x68\x65\141\144\145\162\x73"]["\x43\x6f\x6f\x6b\151\145"] = "{$ymqmyyeuycgmigyo}\75{$eqgoocgaqwqcimie}"; mmesoisgqucowwms: uieuouugckwokske: return $qiouiwasaauyaaue; } }
