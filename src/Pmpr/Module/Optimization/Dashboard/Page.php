<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a2f44c67227             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Dashboard; use Pmpr\Common\Foundation\Backend\Page as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use Pmpr\Module\Optimization\Subscription\Page as SubscriptionPage; class Page extends BaseClass implements CommonInterface { use SubscriptionEngineTrait; const wwgqqgayyagycysu = "\160\x75\x72\147\145\x5f\143\141\x63\x68\x65"; const wwkyymgusywcykuk = "\x70\162\145\x6c\157\x61\x64\137\x70\x61\x67\x65\x73"; public function qiccuiwooiquycsg() { $this->eukmukacucooequu([self::kekcgssiyagioocg => 0, self::wuowaiyouwecckaw => "\x6f\x70\164\x5f\144\141\163\x68\x62\157\x61\x72\x64", self::ysgwugcqguggmigq => __("\x44\141\x73\x68\142\157\x61\162\x64", PR__MDL__OPTIMIZATION), self::qoquaeuooeycomks => $this->akuociswqmoigkas()]); } public function enqueue() { $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $gaumukogkkgkiiuo->ayeieigcckcmsikq($gaumukogkkgkiiuo->owygwqwawqoiusis("\144\141\x73\x68\142\157\141\162\144", $gaumukogkkgkiiuo->get("\144\141\163\x68\x62\157\x61\162\x64\x2e\152\163"))->okawmmwsiuauwsiu(self::qiaqeaemuukkikmi))->ikqyiskqaaymscgw("\x64\141\163\x68\x62\157\x61\162\x64", ["\141\152\141\x78" => Ajax::myikkigscysoykgy]); SubscriptionPage::symcgieuakksimmu()->enqueue(); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $eisusiekaciioueg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(self::qeuquamuuwueeiyi, false); $mwuweekukywuqgsm = __("\120\x75\162\x67\145\x20\103\141\143\x68\145", PR__MDL__OPTIMIZATION); $qyaaumygmwoyoeec = self::uucoeqmmykkwsmqc !== $ykquycoiqesuckco->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, self::uucoeqmmykkwsmqc); $qyusceuomywuquqc = $eisusiekaciioueg ? __("\x44\x69\163\141\x62\x6c\x65\x20\104\145\166\145\x6c\157\x70\x6d\x65\x6e\164\40\x4d\x6f\x64\145", PR__MDL__OPTIMIZATION) : __("\105\156\141\x62\154\145\40\104\x65\166\x65\x6c\x6f\x70\155\145\x6e\x74\x20\115\x6f\144\x65", PR__MDL__OPTIMIZATION); $mgsegoqmgegikkig = ["\163\171\x6e\x63\x5f\x64\141\164\x61" => $this->cqscwmqsgomkogoq()->kscwewuywiakosos(), self::wwgqqgayyagycysu => $uuyucgkyusckoaeq->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $mwuweekukywuqgsm, self::ssmskyqgcmeiayco => __("\101\162\145\40\x79\x6f\165\x20\163\165\x72\145\x20\x61\142\x6f\165\164\x20\x70\x75\x72\147\145\x20\x63\x61\x63\150\x65\x3f", PR__MDL__OPTIMIZATION), self::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__("\120\162\x65\x6c\x6f\141\144\x20\151\163\40\145\156\141\142\154\x65\40\141\x6e\x64\x20\141\x66\164\x65\x72\40\160\x75\162\147\x65\x20\x63\x61\143\150\x65\x2c\40\x72\145\x67\145\x6e\145\x72\141\x74\145\40\143\141\x63\x68\145\40\146\x69\x6c\145\x20\x73\164\x61\162\x74\x65\x64\40\141\165\x74\157\x6d\x61\164\151\x63\x61\x6c\x6c\x79\56", PR__MDL__OPTIMIZATION), true) : '', self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\x6c\x61\163\x73" => "\157\160\x74\55\x70\165\162\147\145\55\141\x6c\154\55\x63\x61\143\x68\x65\40\160\162\x2d\142\x74\x6e\40\142\164\x6e\55\144\x61\156\147\x65\162", self::qescuiwgsyuikume => $mwuweekukywuqgsm]]], $mwuweekukywuqgsm, ["\143\x6c\141\163\163" => "\x77\55\61\x30\60\40\160\162\55\x62\164\x6e\x20\142\x74\x6e\x2d\x61\143\164\x69\x6f\156\40\x62\164\x6e\55\157\x75\164\154\151\x6e\145\x2d\x70\x72\x69\155\x61\x72\x79"]), self::qeuquamuuwueeiyi => $uuyucgkyusckoaeq->igiawkoqiogocsau([self::squoamkioomemiyi => $eisusiekaciioueg ? self::ckcawaoawwioqecq : self::ecioqysekgaasegg, self::qescuiwgsyuikume => $qyusceuomywuquqc, self::ssmskyqgcmeiayco => $eisusiekaciioueg ? __("\104\x69\163\x61\x62\x6c\151\156\x67\40\104\x65\x76\x65\x6c\x6f\160\x6d\x65\156\164\40\115\x6f\x64\145\40\x74\x75\162\156\x73\x20\x6f\156\x20\143\141\143\x68\151\156\147\x20\x66\x6f\x72\x20\x79\x6f\165\162\x20\x73\x69\164\145\56\40\x41\162\x65\40\171\157\165\x20\163\x75\162\x65\x20\x79\157\165\x20\x77\x61\x6e\x74\40\x74\157\x20\x63\x6f\156\x74\151\x6e\x75\145\x3f", PR__MDL__OPTIMIZATION) : __("\105\156\141\142\x6c\x69\x6e\147\40\104\x65\166\145\x6c\x6f\160\155\x65\156\164\x20\x4d\x6f\144\x65\40\164\x75\162\156\x73\40\x6f\146\146\40\143\x61\143\150\151\x6e\x67\40\146\x6f\x72\x20\x79\x6f\x75\x72\x20\x73\151\x74\145\x2e\x20\101\x72\145\40\171\157\x75\40\163\165\x72\x65\40\171\157\165\x20\167\141\x6e\x74\x20\164\x6f\40\143\157\x6e\x74\151\156\x75\x65\77", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\x63\154\141\163\x73" => "\157\160\164\55\143\x68\141\156\147\145\55\x64\x65\x76\x2d\155\157\x64\x65\40\x70\x72\55\x62\x74\x6e\x20\x62\x74\156\x2d" . ($eisusiekaciioueg ? self::ckcawaoawwioqecq : self::ecioqysekgaasegg), self::qescuiwgsyuikume => $qyusceuomywuquqc, "\144\141\x74\141\x2d\144\x65\x76\x2d\155\157\x64\145" => $eisusiekaciioueg ? self::OFF : self::ON]]], __("\x44\x65\x76\x65\x6c\x6f\x70\x6d\x65\156\x74\x20\115\x6f\x64\x65", PR__MDL__OPTIMIZATION), ["\143\x6c\x61\163\163" => "\x77\x2d\x31\x30\60\x20\x70\162\55\x62\164\x6e\x20\x62\164\x6e\55\141\143\164\151\x6f\156\40\x62\164\x6e\55\x6f\x75\x74\x6c\151\x6e\145\x2d\160\x72\151\155\x61\x72\x79"])]; if (!$qyaaumygmwoyoeec) { goto myoicgcuugciueis; } myoicgcuugciueis: $skeuoeoiuwwyqwou = Panel::symcgieuakksimmu("\x64\141\x73\x68\x62\x6f\x61\x72\x64\137\162\x65\160\x6f\x72\x74\x73"); $skeuoeoiuwwyqwou->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\160\165\x72\x63\x68\141\163\x65\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\x70\x2d\60\40\160\x74\55\x32")->gswweykyogmsyawy(__("\x50\165\x72\143\150\141\x73\145\x20\122\145\x70\157\162\164", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\171\x61\157\163\x67\143\163\157\151\x77\155\x79\x65\157\163\161"]))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\165\x73\141\147\x65\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\x2d\60\x20\160\164\55\x32")->gswweykyogmsyawy(__("\125\x73\x61\x67\x65\40\122\x65\x70\157\x72\x74", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\x64\153\143\141\165\155\x6d\163\x63\153\x75\x6b\157\x67\143\155"]))->mkiqamegmeucqeyy(); $qookweymeqawmcwo[self::imiuwqeccyaimyaw] = ["\160\141\156\x65\154" => $skeuoeoiuwwyqwou->render(false, ["\x68\x61\x73\137\x77\162\141\x70" => false, "\166\145\162\164\x69\143\141\x6c" => false]), self::qescuiwgsyuikume => __("\120\x75\x72\143\x68\141\163\145\x20\x61\156\144\x20\103\x6f\x6e\x73\x75\x6d\160\x74\151\x6f\x6e\x20\x52\145\160\157\162\164", PR__MDL__OPTIMIZATION)]; $qookweymeqawmcwo["\161\165\x69\x63\x6b\x5f\141\x63\164\x69\157\x6e\x73"] = $mgsegoqmgegikkig; $qookweymeqawmcwo["\161\x75\x69\x63\153\x5f\x61\143\x74\151\x6f\156\x5f\x74\x69\164\154\145"] = __("\121\x75\151\143\153\x20\101\x63\x74\x69\x6f\x6e\x73", PR__MDL__OPTIMIZATION); $qookweymeqawmcwo[self::eoigaocgcaekssuw] = $this->cqscwmqsgomkogoq()->samoqkkuimogeyew()[self::eoigaocgcaekssuw] ?? []; return $qookweymeqawmcwo; } public function yaosgcsoiwmyeosq() : string { return $this->cqscwmqsgomkogoq()->aaasykywsggkskse(true); } public function dkcaummsckukogcm() : string { return $this->cqscwmqsgomkogoq()->aksiycwcekcecuec(true); } }
