<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e0e3312730f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Cloudflare; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; class Cloudflare extends Common { const yuwieqykuwacwmuw = self::wowuwuigyoceikas . "\137\x63\x66\x5f\143\157\157\153\x69\145"; public function __construct() { if (!$this->cyowaaeywssoooeo()) { goto wgewmqieuamsoayy; } parent::__construct(); $this->iemaakgqgqosiecm(); wgewmqieuamsoayy: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\151\x6e\x69\x74"])->qcsmikeggeemccuu("\141\x64\155\151\x6e\x5f\151\156\151\x74", [$this, "\171\145\171\151\x67\x75\171\x65\x67\x6d\x6d\x79\165\163\145\141"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\x74\x5f\142\x65\146\x6f\x72\145\137\x73\164\141\162\164\137\160\x72\x65\x6c\157\141\x64"), [$this, "\165\x79\x73\145\x63\161\x6b\x61\x61\x6d\151\153\x79\x69\155\x65"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\137\x63\x6c\157\165\144\x66\x6c\x61\x72\145\x5f\x65\156\141\x62\x6c\145\x64"), [$this, "\171\x77\x67\x65\151\145\x75\143\155\x63\151\161\147\151\147\163"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\164\137\x70\162\145\x6c\157\141\x64\x69\x6e\147\137\164\141\x73\153\x5f\157\x70\164\151\x6f\156\163"), [$this, "\x79\147\163\141\x6f\167\151\167\x73\163\x6b\171\x67\x6b\165\x79"]); parent::kgquecmsgcouyaya(); } public function ywgeieucmciqgigs(bool $iqsymysgkgosmiys = false) : bool { return $this->yusooeuwemoqcwmm(); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\120\122\x5f\x5f\x43\x41\103\110\x45\x5f\137\120\x41\124\x48")) { goto kqgcyoscsusgoaqi; } $this->syiuacooagmooima("\x63\x6c\x6f\165\x64\x66\x6c\x61\x72\145\55\x70\141\164\x68", __("\x4f\160\164\151\155\x69\x7a\141\x74\151\157\x6e\x20\103\x6c\x6f\x75\x64\146\x6c\141\162\145\x20\x50\x61\164\150", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); goto ueigkucgaucgeimc; kqgcyoscsusgoaqi: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck("\x4f\120\x54\111\115\111\132\101\x54\x49\117\x4e\x5f\103\x4c\x4f\x55\x44\106\x4c\101\x52\105\x5f\120\x41\124\x48", "{$skacuygeqykiwiwy}\57\x63\154\157\x75\144\x66\x6c\141\162\x65"); ueigkucgaucgeimc: return $ksaameoqigiaoigg; } public function iemaakgqgqosiecm() { Purge::symcgieuakksimmu(); Redirect::symcgieuakksimmu(); Controller::symcgieuakksimmu(); if (ManipulateAjax::mcgoysmkqsqooceq()) { goto wkeuuycukmuqiaom; } if (!is_admin()) { goto sggawugoykqcmsug; } Setting::symcgieuakksimmu(); sggawugoykqcmsug: goto wakmayaoqoskekqy; wkeuuycukmuqiaom: Ajax::symcgieuakksimmu(); wakmayaoqoskekqy: } public function init() { $seiwgiesegcmssam = DecoratorUser::ksgkoukcicwkkaum(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!$seiwgiesegcmssam) { goto qmuwoecuacmkwgem; } $wcyykoegqiuckcku = $eygsasmqycagyayw->owygwqwawqoiusis("\x62\x75\163\x74\x65\x72", false)->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\142\x75\x73\x74\145\x72\56\152\163"))->yiuoscqaekcgiyuy("\144\141\164\141\55\x63\x66\x61\163\x79\x6e\143", 1); $eygsasmqycagyayw->oeoquuwkoywiuesy($wcyykoegqiuckcku)->ayeieigcckcmsikq($wcyykoegqiuckcku); qmuwoecuacmkwgem: if (is_admin()) { goto owmuceyswmgueasi; } $eygsasmqycagyayw->ieayqiyiuuguowyq("\143\x6c\157\165\144\x66\x6c\141\162\145", ["\142\x75\163\x74\x65\162" => self::yyeseoqwcecweeii, "\163\145\154\x65\x63\164\x6f\x72" => "\x61"]); goto mwsmsguqqkcwiiuk; owmuceyswmgueasi: $eygsasmqycagyayw->ikqyiskqaaymscgw("\x63\x6c\157\x75\144\146\x6c\141\x72\145", ["\x61\x6a\x61\170" => Ajax::myikkigscysoykgy, "\x73\x65\x6c\x65\x63\164\x6f\x72" => implode("\x2c\40", ["\x23\145\x64\x69\164\x6f\x72\x20\56\145\144\x69\164\157\x72\x2d\x70\x6f\163\x74\x2d\160\x65\162\155\x61\154\x69\x6e\x6b\137\137\x6c\151\x6e\x6b", "\x23\167\160\x2d\141\144\155\x69\156\55\142\x61\x72\55\x6d\171\x2d\163\151\164\145\x73\55\x6c\x69\x73\x74\40\x61", "\43\x65\144\x69\164\157\x72\x20\56\145\144\x69\x74\157\x72\55\x70\157\x73\x74\55\160\x72\145\166\x69\x65\x77", "\x23\x77\x70\x2d\x61\x64\x6d\151\x6e\55\x62\141\162\x2d\x73\151\164\x65\x2d\x6e\141\x6d\x65\40\x61", "\x23\x77\160\x2d\141\x64\x6d\x69\156\x2d\142\141\x72\x2d\x76\151\x65\167\55\163\151\164\145\40\x61", "\x23\x73\141\155\x70\x6c\x65\55\160\x65\162\155\x61\x6c\x69\x6e\153\x20\x61", "\x23\x77\160\55\x61\144\x6d\151\x6e\x2d\142\x61\x72\x2d\x76\151\x65\167\40\141", "\43\145\144\151\164\x6f\x72\x20\56\151\x73\55\154\151\156\x6b", "\56\162\157\x77\x2d\141\x63\x74\151\157\x6e\x73\x20\x61", "\43\155\x65\x73\163\x61\x67\145\x20\x61", "\56\x70\x72\x65\x76\151\x65\x77"]), "\142\165\x73\x74\145\162" => self::yyeseoqwcecweeii, "\160\165\162\147\x65\x5f\160\x6f\163\164\137\143\x61\143\150\x65" => ["\164\x69\x74\154\145" => __("\x50\x75\162\147\x65\40\x50\157\x73\164\x20\x43\x61\143\150\145", PR__MDL__OPTIMIZATION)]]); mwsmsguqqkcwiiuk: } public function yeyiguyegmmyusea() { if (!$this->kmuweyayaqoeqiyw()->eaiyegoagkgeowae()) { goto guykyqecgswcsmws; } $eggwswqquakgowom = $this->yayksoygskcuaygq(); $yqimccamkgmmuuyg = Controller::symcgieuakksimmu()->auamgqiwisysomsa(); if (!(!$eggwswqquakgowom || count($eggwswqquakgowom) > 1)) { goto emmsycooskoqmgeg; } if (!$this->weysguygiseoukqw(Setting::swqscmwcgukkcuau)) { goto qgeugwymkkiacwoc; } if ($eggwswqquakgowom = $yqimccamkgmmuuyg->yayksoygskcuaygq($iswcokucwmiosiaq)) { goto ciykoyeioqgyaeqo; } if (!$iswcokucwmiosiaq) { goto asiqwuoswmigcaki; } $this->cimaucgayqyyccoc($iswcokucwmiosiaq, "\x63\146\55\147\x65\164\x2d\172\157\156\145\55\151\144\x2d\154\x69\163\x74", self::imkacwmiuiykyuim); asiqwuoswmigcaki: goto mqicocmqegwukkwg; ciykoyeioqgyaeqo: $wegekcwgakqeqsmq = $this->weysguygiseoukqw(Setting::qeykiyegimcyucgk, Setting::fsekswokoseswcqm); $qeqooyuoiasweuck = $this->aoqykkmokwseeeie(); if (!$qeqooyuoiasweuck) { goto wcugqegqsuuuwqao; } $ogookoeuwuoiaaac = Manipulate::goewgasukwccacim(); if ($wegekcwgakqeqsmq === Setting::eywauigiwgqckygk) { goto wagqgeqymeqoeuyi; } if (!in_array($ogookoeuwuoiaaac, $eggwswqquakgowom, true)) { goto msemumccgceyugmg; } $cgaiqcoosmmymqqm = ManipulateArray::get(array_flip($eggwswqquakgowom), $ogookoeuwuoiaaac); if (!$cgaiqcoosmmymqqm) { goto eogwckcymuugikuy; } $qeqooyuoiasweuck[Setting::kymimiuqukascgmw] = $cgaiqcoosmmymqqm; $qeqooyuoiasweuck[Setting::aygoyiggsequgiua] = self::ON; $qeqooyuoiasweuck[Setting::suwymqqyesquiqqc] = [$cgaiqcoosmmymqqm => $ogookoeuwuoiaaac]; eogwckcymuugikuy: msemumccgceyugmg: goto qoqskyuuwueqkquk; wagqgeqymeqoeuyi: $iiqoeuwqmkiyigwm = $this->weysguygiseoukqw(Setting::kgigwyeaumymgaca); if (!$iiqoeuwqmkiyigwm) { goto eeauyscekuckoues; } $qeqooyuoiasweuck[Setting::kymimiuqukascgmw] = ManipulateArray::get($eggwswqquakgowom, $iiqoeuwqmkiyigwm); $qeqooyuoiasweuck[Setting::aygoyiggsequgiua] = self::ON; eeauyscekuckoues: qoqskyuuwueqkquk: if (!(self::ON === ManipulateArray::get($qeqooyuoiasweuck, Setting::aygoyiggsequgiua))) { goto iwsuawwqomaowuii; } $yqimccamkgmmuuyg->eigwgcuaamoqkuyw($iswcokucwmiosiaq); iwsuawwqomaowuii: $this->kmuweyayaqoeqiyw()::oqyuwccsuskiwgew($qeqooyuoiasweuck); wcugqegqsuuuwqao: mqicocmqegwukkwg: qgeugwymkkiacwoc: emmsycooskoqmgeg: if ($this->yoaiuuuwwssswyqa()) { goto oomguqikqokqwgku; } if ($wquasmyyscuqaqom = $yqimccamkgmmuuyg->ymkgoumkoycwwmmq($iswcokucwmiosiaq)) { goto mugqyyeayeyggqqk; } if (!$iswcokucwmiosiaq) { goto ouamogymawucwswu; } $this->cimaucgayqyyccoc($iswcokucwmiosiaq, "\143\x66\x2d\147\x65\x74\x2d\x7a\157\156\x65\55\151\144\x2d\x6c\x69\163\x74", self::imkacwmiuiykyuim); ouamogymawucwswu: $this->oaumimwssciwumys("\103\141\156\40\156\157\164\40\147\x65\x74\40\144\145\166\145\x6c\157\x70\155\145\x6e\x74\x20\x6d\157\144\x65\x20\144\x61\164\x61\56\40{$iswcokucwmiosiaq}"); goto acsqgiuageaasiyy; mugqyyeayeyggqqk: $this->awwuyycwuuuggkqy($wquasmyyscuqaqom); acsqgiuageaasiyy: oomguqikqokqwgku: if (!$this->yusooeuwemoqcwmm()) { goto wyuemgggaqogsmsq; } $gyamuieuowceasyo = $this->weysguygiseoukqw(Setting::scikeyuygqwyiisg); $wesqeosimkuoiogg = $this->weysguygiseoukqw(Setting::myguioueuiaacsko); if (!(!$gyamuieuowceasyo || !$wesqeosimkuoiogg)) { goto samwkqgwouggsguc; } $yqimccamkgmmuuyg->eigwgcuaamoqkuyw($iswcokucwmiosiaq, true); samwkqgwouggsguc: wyuemgggaqogsmsq: guykyqecgswcsmws: } public function uysecqkaamikyime() { if (!($yqimccamkgmmuuyg = API::symcgieuakksimmu())) { goto miweggwqeiaeweia; } $aecgggeoymywyumm = $yqimccamkgmmuuyg->ukuooogwaoiwagqs(); if (!$aecgggeoymywyumm) { goto kkumywowcoycymeo; } DecoratorOption::update(self::yuwieqykuwacwmuw, $aecgggeoymywyumm); kkumywowcoycymeo: miweggwqeiaeweia: } public function ygsaowiwsskygkuy($qiouiwasaauyaaue) : array { $aecgggeoymywyumm = DecoratorOption::get(self::yuwieqykuwacwmuw); if (!$aecgggeoymywyumm) { goto ousiuuwgwkiyikyq; } $ymqmyyeuycgmigyo = ManipulateArray::get($aecgggeoymywyumm, "\x4e\x61\155\x65"); $eqgoocgaqwqcimie = ManipulateArray::get($aecgggeoymywyumm, "\x56\141\154\165\x65"); if (!($ymqmyyeuycgmigyo && $eqgoocgaqwqcimie)) { goto kqqiegkuqagcqsya; } $qiouiwasaauyaaue["\150\145\141\x64\x65\162\163"]["\103\x6f\x6f\x6b\151\x65"] = "{$ymqmyyeuycgmigyo}\x3d{$eqgoocgaqwqcimie}"; kqqiegkuqagcqsya: ousiuuwgwkiyikyq: return $qiouiwasaauyaaue; } }
