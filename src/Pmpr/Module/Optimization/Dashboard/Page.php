<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66c31d5dd19f7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Dashboard; use Pmpr\Common\Foundation\Backend\Page as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use Pmpr\Module\Optimization\Subscription\Page as SubscriptionPage; class Page extends BaseClass implements CommonInterface { use SubscriptionEngineTrait; const wwgqqgayyagycysu = "\x70\x75\162\147\x65\x5f\143\x61\x63\x68\145"; const wwkyymgusywcykuk = "\x70\x72\x65\154\x6f\x61\x64\x5f\160\141\x67\x65\163"; public function qiccuiwooiquycsg() { $this->eukmukacucooequu([self::kekcgssiyagioocg => 1, self::wuowaiyouwecckaw => "\x6f\x70\x74\x5f\144\x61\163\x68\x62\x6f\141\162\x64", self::ysgwugcqguggmigq => __("\104\x61\163\x68\142\157\141\x72\x64", PR__MDL__OPTIMIZATION), self::qoquaeuooeycomks => $this->akuociswqmoigkas()]); } public function enqueue() { $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $gaumukogkkgkiiuo->ayeieigcckcmsikq($gaumukogkkgkiiuo->owygwqwawqoiusis("\x64\x61\x73\150\x62\x6f\141\162\144", $gaumukogkkgkiiuo->get("\x64\141\163\x68\142\157\x61\x72\x64\x2e\x6a\x73"))->okawmmwsiuauwsiu(self::qiaqeaemuukkikmi))->ikqyiskqaaymscgw("\x64\x61\163\x68\x62\157\141\162\144", ["\x61\152\x61\170" => Ajax::myikkigscysoykgy]); SubscriptionPage::symcgieuakksimmu()->enqueue(); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $eisusiekaciioueg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(self::qeuquamuuwueeiyi, false); $mwuweekukywuqgsm = __("\120\x75\162\x67\x65\x20\103\141\143\150\145", PR__MDL__OPTIMIZATION); $qyaaumygmwoyoeec = self::uucoeqmmykkwsmqc !== $ykquycoiqesuckco->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, self::uucoeqmmykkwsmqc); $qyusceuomywuquqc = $eisusiekaciioueg ? __("\104\151\x73\x61\x62\x6c\145\x20\x44\145\x76\145\154\157\160\155\145\156\x74\x20\x4d\157\x64\145", PR__MDL__OPTIMIZATION) : __("\x45\x6e\141\142\x6c\145\40\104\x65\166\145\154\x6f\x70\x6d\x65\156\x74\40\115\157\x64\145", PR__MDL__OPTIMIZATION); $mgsegoqmgegikkig = ["\163\171\156\x63\x5f\x64\x61\164\x61" => $this->cqscwmqsgomkogoq()->kscwewuywiakosos(), self::wwgqqgayyagycysu => $uuyucgkyusckoaeq->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $mwuweekukywuqgsm, self::ssmskyqgcmeiayco => __("\x41\x72\145\x20\171\x6f\165\40\x73\x75\162\145\40\141\x62\x6f\165\x74\40\160\x75\x72\147\x65\40\x63\141\143\x68\145\x3f", PR__MDL__OPTIMIZATION), self::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__("\120\x72\145\x6c\157\141\x64\40\x69\x73\x20\145\156\x61\x62\x6c\145\x20\141\x6e\x64\40\x61\146\x74\x65\162\x20\160\x75\x72\147\x65\40\143\x61\x63\x68\145\x2c\40\x72\145\x67\x65\x6e\145\162\141\164\x65\40\143\141\143\150\x65\40\x66\151\x6c\145\40\x73\x74\x61\x72\164\145\144\x20\141\x75\x74\x6f\155\141\x74\151\143\x61\154\154\x79\56", PR__MDL__OPTIMIZATION), true) : '', self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\154\x61\163\x73" => "\x6f\x70\x74\x2d\160\165\162\147\145\55\141\154\154\55\x63\141\x63\150\145\x20\160\x72\x2d\x62\164\x6e\x20\142\164\x6e\55\x64\141\156\147\145\162", self::qescuiwgsyuikume => $mwuweekukywuqgsm]]], $mwuweekukywuqgsm, ["\x63\x6c\141\x73\163" => "\167\x2d\x31\x30\60\40\160\162\55\x62\x74\x6e\x20\142\x74\156\55\x61\x63\x74\151\x6f\x6e\x20\142\164\156\55\x6f\165\164\x6c\151\x6e\145\55\x70\162\x69\155\141\x72\x79"]), self::qeuquamuuwueeiyi => $uuyucgkyusckoaeq->igiawkoqiogocsau([self::squoamkioomemiyi => $eisusiekaciioueg ? self::ckcawaoawwioqecq : self::ecioqysekgaasegg, self::qescuiwgsyuikume => $qyusceuomywuquqc, self::ssmskyqgcmeiayco => $eisusiekaciioueg ? __("\x44\x69\163\x61\142\x6c\151\x6e\x67\x20\104\145\166\x65\154\x6f\160\x6d\x65\x6e\x74\40\x4d\157\144\145\x20\164\165\162\x6e\x73\x20\x6f\156\40\x63\141\x63\150\151\156\x67\40\146\157\x72\x20\x79\157\x75\162\x20\x73\x69\164\145\x2e\40\x41\162\x65\40\x79\x6f\x75\40\163\x75\162\x65\40\171\x6f\165\40\167\141\x6e\164\40\x74\x6f\40\x63\x6f\x6e\x74\x69\156\165\145\x3f", PR__MDL__OPTIMIZATION) : __("\105\x6e\x61\142\154\151\156\147\40\x44\x65\166\x65\154\157\160\x6d\145\156\x74\x20\115\157\144\x65\40\164\165\162\156\x73\40\157\146\x66\x20\x63\x61\x63\150\x69\x6e\147\40\x66\x6f\x72\x20\171\157\165\162\x20\x73\x69\x74\x65\x2e\x20\101\x72\145\40\x79\157\x75\40\163\165\162\x65\x20\x79\157\165\x20\x77\141\x6e\x74\40\164\157\40\143\157\x6e\x74\x69\x6e\x75\x65\77", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\x63\x6c\x61\163\163" => "\x6f\160\x74\55\143\x68\141\x6e\147\x65\x2d\144\145\166\x2d\x6d\x6f\144\145\40\x70\x72\55\142\164\x6e\x20\x62\164\x6e\x2d" . ($eisusiekaciioueg ? self::ckcawaoawwioqecq : self::ecioqysekgaasegg), self::qescuiwgsyuikume => $qyusceuomywuquqc, "\144\141\x74\141\x2d\x64\x65\x76\x2d\155\157\144\145" => $eisusiekaciioueg ? self::OFF : self::ON]]], __("\x44\x65\x76\x65\x6c\157\x70\155\x65\156\x74\x20\x4d\x6f\144\145", PR__MDL__OPTIMIZATION), ["\143\x6c\x61\163\163" => "\167\55\61\x30\60\x20\160\x72\55\142\x74\156\x20\x62\x74\156\x2d\x61\143\x74\x69\x6f\156\x20\142\164\156\x2d\x6f\x75\164\154\151\156\145\x2d\160\162\x69\x6d\x61\162\x79"])]; if (!$qyaaumygmwoyoeec) { goto ooykyoowougqkaso; } ooykyoowougqkaso: $skeuoeoiuwwyqwou = Panel::symcgieuakksimmu("\x64\141\163\x68\142\x6f\x61\x72\x64\137\x72\x65\160\157\x72\x74\163"); $skeuoeoiuwwyqwou->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\160\x75\162\x63\x68\141\x73\145\x73")->uguqimqkesuguqau()->cooeyaumiimygakm("\x70\x2d\x30\x20\160\x74\55\x32")->gswweykyogmsyawy(__("\x50\x75\x72\143\x68\x61\163\145\x20\122\x65\x70\x6f\162\x74", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\171\x61\157\x73\147\x63\x73\x6f\x69\x77\x6d\x79\145\x6f\x73\161"]))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\x75\163\141\147\x65\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\x70\55\x30\x20\160\x74\55\x32")->gswweykyogmsyawy(__("\125\163\141\x67\x65\x20\122\145\160\x6f\x72\x74", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\x64\153\143\x61\x75\155\x6d\163\x63\153\x75\153\157\x67\x63\x6d"]))->mkiqamegmeucqeyy(); $qookweymeqawmcwo[self::imiuwqeccyaimyaw] = ["\160\x61\156\x65\154" => $skeuoeoiuwwyqwou->render(false, ["\x68\x61\x73\137\167\162\x61\x70" => false, "\166\x65\x72\164\x69\143\x61\x6c" => false]), self::qescuiwgsyuikume => __("\120\x75\162\143\150\x61\x73\x65\40\x61\x6e\x64\40\x43\157\x6e\x73\x75\155\x70\x74\151\157\x6e\40\122\145\160\157\x72\164", PR__MDL__OPTIMIZATION)]; $qookweymeqawmcwo["\161\165\x69\143\x6b\x5f\141\x63\x74\x69\157\x6e\163"] = $mgsegoqmgegikkig; $qookweymeqawmcwo["\161\x75\151\143\x6b\137\x61\143\x74\x69\157\156\137\164\x69\164\154\x65"] = __("\121\165\x69\143\x6b\x20\x41\143\x74\151\157\156\x73", PR__MDL__OPTIMIZATION); $qookweymeqawmcwo[self::eoigaocgcaekssuw] = $this->cqscwmqsgomkogoq()->samoqkkuimogeyew()[self::eoigaocgcaekssuw] ?? []; return $qookweymeqawmcwo; } public function yaosgcsoiwmyeosq() : string { return $this->cqscwmqsgomkogoq()->aaasykywsggkskse(true); } public function dkcaummsckukogcm() : string { return $this->cqscwmqsgomkogoq()->aksiycwcekcecuec(true); } }
