<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e645a0a3356             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Cloudflare; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; class Cloudflare extends Common { const yuwieqykuwacwmuw = self::wowuwuigyoceikas . "\x5f\143\x66\x5f\143\157\157\x6b\x69\x65"; public function __construct() { if (!$this->cyowaaeywssoooeo()) { goto wgewmqieuamsoayy; } parent::__construct(); $this->iemaakgqgqosiecm(); wgewmqieuamsoayy: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\x69\x74", [$this, "\151\x6e\151\x74"])->qcsmikeggeemccuu("\141\x64\x6d\151\156\137\x69\x6e\x69\x74", [$this, "\x79\145\x79\x69\147\x75\x79\145\x67\x6d\x6d\x79\x75\x73\145\x61"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\x74\137\142\145\x66\x6f\162\145\x5f\x73\x74\141\x72\164\137\x70\162\145\x6c\x6f\x61\x64"), [$this, "\165\171\163\x65\x63\161\153\141\141\155\x69\153\x79\x69\x6d\145"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\164\137\143\x6c\x6f\165\x64\x66\x6c\x61\162\145\137\145\156\x61\142\x6c\145\144"), [$this, "\x79\167\147\x65\151\145\165\143\155\143\151\x71\147\151\147\163"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\x5f\160\x72\145\x6c\157\141\144\151\x6e\147\x5f\x74\x61\x73\153\137\x6f\160\x74\x69\x6f\x6e\163"), [$this, "\171\x67\x73\141\157\167\x69\x77\x73\x73\153\x79\147\153\165\171"]); parent::kgquecmsgcouyaya(); } public function ywgeieucmciqgigs(bool $iqsymysgkgosmiys = false) : bool { return $this->yusooeuwemoqcwmm(); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\120\122\x5f\x5f\103\101\103\110\105\x5f\137\120\x41\124\110")) { goto kqgcyoscsusgoaqi; } $this->syiuacooagmooima("\143\154\157\x75\x64\146\x6c\141\162\x65\55\160\x61\x74\150", __("\117\x70\x74\x69\x6d\x69\x7a\141\164\x69\x6f\156\x20\103\x6c\157\x75\x64\146\154\x61\162\145\x20\120\141\164\x68", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); goto ueigkucgaucgeimc; kqgcyoscsusgoaqi: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck("\x4f\120\x54\111\115\111\x5a\x41\124\111\x4f\x4e\137\103\114\117\125\x44\x46\x4c\101\122\105\x5f\x50\x41\124\110", "{$skacuygeqykiwiwy}\57\x63\154\157\x75\144\x66\154\x61\162\x65"); ueigkucgaucgeimc: return $ksaameoqigiaoigg; } public function iemaakgqgqosiecm() { Purge::symcgieuakksimmu(); Redirect::symcgieuakksimmu(); Controller::symcgieuakksimmu(); if (ManipulateAjax::mcgoysmkqsqooceq()) { goto wkeuuycukmuqiaom; } if (!is_admin()) { goto sggawugoykqcmsug; } Setting::symcgieuakksimmu(); sggawugoykqcmsug: goto wakmayaoqoskekqy; wkeuuycukmuqiaom: Ajax::symcgieuakksimmu(); wakmayaoqoskekqy: } public function init() { $seiwgiesegcmssam = DecoratorUser::ksgkoukcicwkkaum(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!$seiwgiesegcmssam) { goto qmuwoecuacmkwgem; } $wcyykoegqiuckcku = $eygsasmqycagyayw->owygwqwawqoiusis("\142\x75\x73\164\x65\x72", false)->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\142\x75\163\x74\x65\162\56\x6a\x73"))->yiuoscqaekcgiyuy("\144\x61\164\141\55\143\x66\x61\163\171\156\143", 1); $eygsasmqycagyayw->oeoquuwkoywiuesy($wcyykoegqiuckcku)->ayeieigcckcmsikq($wcyykoegqiuckcku); qmuwoecuacmkwgem: if (is_admin()) { goto owmuceyswmgueasi; } $eygsasmqycagyayw->ieayqiyiuuguowyq("\143\154\x6f\x75\x64\x66\x6c\x61\162\145", ["\x62\x75\x73\164\145\x72" => self::yyeseoqwcecweeii, "\163\x65\x6c\x65\143\164\x6f\162" => "\141"]); goto mwsmsguqqkcwiiuk; owmuceyswmgueasi: $eygsasmqycagyayw->ikqyiskqaaymscgw("\x63\154\x6f\x75\144\x66\154\141\x72\x65", ["\141\x6a\141\x78" => Ajax::myikkigscysoykgy, "\x73\x65\154\145\143\x74\x6f\x72" => implode("\x2c\x20", ["\43\145\x64\x69\x74\157\x72\x20\56\145\x64\151\x74\157\x72\55\160\157\x73\164\55\160\x65\x72\155\x61\x6c\151\x6e\x6b\x5f\x5f\x6c\x69\x6e\x6b", "\43\167\x70\55\141\144\x6d\151\156\55\142\x61\162\x2d\x6d\x79\55\163\151\164\x65\x73\x2d\154\x69\x73\164\x20\141", "\x23\x65\x64\151\164\x6f\162\40\x2e\x65\x64\151\x74\x6f\162\x2d\x70\x6f\x73\x74\55\160\162\x65\166\151\x65\167", "\x23\167\160\55\141\144\155\151\x6e\x2d\x62\141\x72\x2d\163\151\x74\x65\x2d\x6e\141\155\x65\40\141", "\43\167\160\x2d\141\x64\155\151\156\x2d\142\x61\x72\x2d\166\151\145\167\55\x73\x69\164\145\40\141", "\43\x73\x61\155\160\x6c\145\x2d\x70\x65\x72\155\141\x6c\151\156\x6b\x20\141", "\x23\167\x70\55\x61\x64\x6d\x69\x6e\55\142\x61\x72\55\166\151\145\x77\40\141", "\x23\145\144\x69\x74\157\162\40\x2e\x69\163\x2d\x6c\151\156\x6b", "\56\162\x6f\x77\x2d\x61\x63\164\x69\x6f\x6e\163\x20\141", "\43\155\145\x73\163\x61\147\145\x20\141", "\56\x70\162\x65\x76\x69\x65\x77"]), "\142\165\x73\x74\x65\162" => self::yyeseoqwcecweeii, "\x70\x75\x72\147\x65\137\160\157\163\x74\x5f\x63\x61\x63\x68\x65" => ["\164\151\x74\154\x65" => __("\x50\x75\x72\x67\x65\40\120\x6f\163\x74\x20\103\141\x63\x68\145", PR__MDL__OPTIMIZATION)]]); mwsmsguqqkcwiiuk: } public function yeyiguyegmmyusea() { if (!$this->kmuweyayaqoeqiyw()->eaiyegoagkgeowae()) { goto guykyqecgswcsmws; } $eggwswqquakgowom = $this->yayksoygskcuaygq(); $yqimccamkgmmuuyg = Controller::symcgieuakksimmu()->auamgqiwisysomsa(); if (!(!$eggwswqquakgowom || count($eggwswqquakgowom) > 1)) { goto emmsycooskoqmgeg; } if (!$this->weysguygiseoukqw(Setting::swqscmwcgukkcuau)) { goto qgeugwymkkiacwoc; } if ($eggwswqquakgowom = $yqimccamkgmmuuyg->yayksoygskcuaygq($iswcokucwmiosiaq)) { goto ciykoyeioqgyaeqo; } if (!$iswcokucwmiosiaq) { goto asiqwuoswmigcaki; } $this->cimaucgayqyyccoc($iswcokucwmiosiaq, "\x63\x66\55\147\x65\164\55\172\157\x6e\145\55\x69\x64\x2d\154\151\163\164", self::imkacwmiuiykyuim); asiqwuoswmigcaki: goto mqicocmqegwukkwg; ciykoyeioqgyaeqo: $wegekcwgakqeqsmq = $this->weysguygiseoukqw(Setting::qeykiyegimcyucgk, Setting::fsekswokoseswcqm); $qeqooyuoiasweuck = $this->aoqykkmokwseeeie(); if (!$qeqooyuoiasweuck) { goto wcugqegqsuuuwqao; } $ogookoeuwuoiaaac = Manipulate::goewgasukwccacim(); if ($wegekcwgakqeqsmq === Setting::eywauigiwgqckygk) { goto wagqgeqymeqoeuyi; } if (!in_array($ogookoeuwuoiaaac, $eggwswqquakgowom, true)) { goto msemumccgceyugmg; } $cgaiqcoosmmymqqm = ManipulateArray::get(array_flip($eggwswqquakgowom), $ogookoeuwuoiaaac); if (!$cgaiqcoosmmymqqm) { goto eogwckcymuugikuy; } $qeqooyuoiasweuck[Setting::kymimiuqukascgmw] = $cgaiqcoosmmymqqm; $qeqooyuoiasweuck[Setting::aygoyiggsequgiua] = self::ON; $qeqooyuoiasweuck[Setting::suwymqqyesquiqqc] = [$cgaiqcoosmmymqqm => $ogookoeuwuoiaaac]; eogwckcymuugikuy: msemumccgceyugmg: goto qoqskyuuwueqkquk; wagqgeqymeqoeuyi: $iiqoeuwqmkiyigwm = $this->weysguygiseoukqw(Setting::kgigwyeaumymgaca); if (!$iiqoeuwqmkiyigwm) { goto eeauyscekuckoues; } $qeqooyuoiasweuck[Setting::kymimiuqukascgmw] = ManipulateArray::get($eggwswqquakgowom, $iiqoeuwqmkiyigwm); $qeqooyuoiasweuck[Setting::aygoyiggsequgiua] = self::ON; eeauyscekuckoues: qoqskyuuwueqkquk: if (!(self::ON === ManipulateArray::get($qeqooyuoiasweuck, Setting::aygoyiggsequgiua))) { goto iwsuawwqomaowuii; } $yqimccamkgmmuuyg->eigwgcuaamoqkuyw($iswcokucwmiosiaq); iwsuawwqomaowuii: $this->kmuweyayaqoeqiyw()::oqyuwccsuskiwgew($qeqooyuoiasweuck); wcugqegqsuuuwqao: mqicocmqegwukkwg: qgeugwymkkiacwoc: emmsycooskoqmgeg: if ($this->yoaiuuuwwssswyqa()) { goto oomguqikqokqwgku; } if ($wquasmyyscuqaqom = $yqimccamkgmmuuyg->ymkgoumkoycwwmmq($iswcokucwmiosiaq)) { goto mugqyyeayeyggqqk; } if (!$iswcokucwmiosiaq) { goto ouamogymawucwswu; } $this->cimaucgayqyyccoc($iswcokucwmiosiaq, "\143\x66\x2d\147\x65\x74\55\x7a\157\156\x65\x2d\151\x64\55\154\x69\x73\164", self::imkacwmiuiykyuim); ouamogymawucwswu: $this->oaumimwssciwumys("\103\x61\x6e\x20\x6e\157\x74\40\147\x65\x74\40\x64\145\166\x65\154\157\x70\155\145\x6e\x74\40\x6d\x6f\x64\145\40\x64\141\164\141\x2e\x20{$iswcokucwmiosiaq}"); goto acsqgiuageaasiyy; mugqyyeayeyggqqk: $this->awwuyycwuuuggkqy($wquasmyyscuqaqom); acsqgiuageaasiyy: oomguqikqokqwgku: if (!$this->yusooeuwemoqcwmm()) { goto wyuemgggaqogsmsq; } $gyamuieuowceasyo = $this->weysguygiseoukqw(Setting::scikeyuygqwyiisg); $wesqeosimkuoiogg = $this->weysguygiseoukqw(Setting::myguioueuiaacsko); if (!(!$gyamuieuowceasyo || !$wesqeosimkuoiogg)) { goto samwkqgwouggsguc; } $yqimccamkgmmuuyg->eigwgcuaamoqkuyw($iswcokucwmiosiaq, true); samwkqgwouggsguc: wyuemgggaqogsmsq: guykyqecgswcsmws: } public function uysecqkaamikyime() { if (!($yqimccamkgmmuuyg = API::symcgieuakksimmu())) { goto miweggwqeiaeweia; } $aecgggeoymywyumm = $yqimccamkgmmuuyg->ukuooogwaoiwagqs(); if (!$aecgggeoymywyumm) { goto kkumywowcoycymeo; } DecoratorOption::update(self::yuwieqykuwacwmuw, $aecgggeoymywyumm); kkumywowcoycymeo: miweggwqeiaeweia: } public function ygsaowiwsskygkuy($qiouiwasaauyaaue) : array { $aecgggeoymywyumm = DecoratorOption::get(self::yuwieqykuwacwmuw); if (!$aecgggeoymywyumm) { goto ousiuuwgwkiyikyq; } $ymqmyyeuycgmigyo = ManipulateArray::get($aecgggeoymywyumm, "\x4e\141\x6d\x65"); $eqgoocgaqwqcimie = ManipulateArray::get($aecgggeoymywyumm, "\126\141\154\x75\145"); if (!($ymqmyyeuycgmigyo && $eqgoocgaqwqcimie)) { goto kqqiegkuqagcqsya; } $qiouiwasaauyaaue["\x68\x65\141\144\145\x72\x73"]["\103\157\x6f\x6b\x69\x65"] = "{$ymqmyyeuycgmigyo}\75{$eqgoocgaqwqcimie}"; kqqiegkuqagcqsya: ousiuuwgwkiyikyq: return $qiouiwasaauyaaue; } }
