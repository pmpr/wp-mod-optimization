<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6689b42493617             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Dashboard; use Pmpr\Common\Foundation\Backend\Page as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Ajax; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use Pmpr\Module\Optimization\Subscription\Page as SubscriptionPage; class Page extends BaseClass implements CommonInterface { use SubscriptionEngineTrait; const wwgqqgayyagycysu = "\x70\x75\x72\x67\x65\137\x63\x61\x63\x68\145"; const wwkyymgusywcykuk = "\160\x72\x65\154\x6f\x61\144\x5f\x70\x61\147\x65\x73"; public function qiccuiwooiquycsg() { $this->eukmukacucooequu([self::kekcgssiyagioocg => 0, self::wuowaiyouwecckaw => "\x6f\160\x74\137\144\141\x73\150\142\157\x61\162\x64", self::ysgwugcqguggmigq => __("\x44\x61\x73\x68\x62\x6f\141\x72\x64", PR__MDL__OPTIMIZATION), self::qoquaeuooeycomks => $this->akuociswqmoigkas()]); } public function enqueue() { $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $gaumukogkkgkiiuo->ayeieigcckcmsikq($gaumukogkkgkiiuo->owygwqwawqoiusis("\144\x61\163\x68\142\157\141\162\x64", $gaumukogkkgkiiuo->get("\x64\x61\x73\150\142\x6f\141\x72\x64\x2e\152\163"))->okawmmwsiuauwsiu(self::qiaqeaemuukkikmi))->ikqyiskqaaymscgw("\x64\141\163\x68\142\157\x61\162\144", ["\x61\x6a\x61\170" => Ajax::myikkigscysoykgy]); SubscriptionPage::symcgieuakksimmu()->enqueue(); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $eisusiekaciioueg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(self::qeuquamuuwueeiyi, false); $mwuweekukywuqgsm = __("\x50\165\162\x67\x65\40\x43\141\143\x68\145", PR__MDL__OPTIMIZATION); $qyaaumygmwoyoeec = self::uucoeqmmykkwsmqc !== $ykquycoiqesuckco->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, self::uucoeqmmykkwsmqc); $qyusceuomywuquqc = $eisusiekaciioueg ? __("\x44\x69\x73\x61\x62\x6c\145\40\104\145\166\145\154\157\160\155\x65\156\164\40\115\x6f\x64\145", PR__MDL__OPTIMIZATION) : __("\105\x6e\x61\142\154\145\x20\104\145\x76\145\x6c\x6f\160\155\x65\156\x74\x20\115\x6f\x64\145", PR__MDL__OPTIMIZATION); $mgsegoqmgegikkig = ["\163\171\156\x63\137\144\141\164\x61" => $this->cqscwmqsgomkogoq()->kscwewuywiakosos(), self::wwgqqgayyagycysu => $uuyucgkyusckoaeq->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $mwuweekukywuqgsm, self::ssmskyqgcmeiayco => __("\101\x72\x65\40\171\x6f\x75\40\163\165\x72\145\x20\141\x62\x6f\x75\x74\40\x70\165\x72\x67\145\40\143\x61\x63\x68\145\77", PR__MDL__OPTIMIZATION), self::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__("\x50\162\x65\154\x6f\x61\144\x20\x69\163\40\145\x6e\x61\x62\154\145\40\x61\156\144\40\x61\x66\164\x65\162\40\160\165\162\x67\145\40\x63\141\x63\150\x65\54\40\162\x65\x67\x65\x6e\145\162\x61\164\145\x20\143\x61\x63\x68\x65\40\x66\x69\154\145\40\x73\x74\141\162\164\x65\144\40\141\165\164\x6f\155\141\164\151\x63\x61\154\x6c\x79\x2e", PR__MDL__OPTIMIZATION), true) : '', self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\x63\x6c\x61\163\x73" => "\157\x70\164\x2d\160\x75\x72\x67\x65\x2d\x61\x6c\154\55\143\x61\143\150\x65\40\160\x72\55\x62\x74\x6e\40\x62\164\x6e\55\144\141\x6e\x67\145\162", self::qescuiwgsyuikume => $mwuweekukywuqgsm]]], $mwuweekukywuqgsm, ["\x63\154\141\163\x73" => "\x77\x2d\61\x30\60\40\160\x72\55\x62\164\x6e\x20\x62\164\156\x2d\141\x63\x74\x69\x6f\156\40\142\x74\x6e\x2d\157\x75\x74\x6c\x69\x6e\x65\55\160\x72\x69\x6d\141\162\171"]), self::qeuquamuuwueeiyi => $uuyucgkyusckoaeq->igiawkoqiogocsau([self::squoamkioomemiyi => $eisusiekaciioueg ? self::ckcawaoawwioqecq : self::ecioqysekgaasegg, self::qescuiwgsyuikume => $qyusceuomywuquqc, self::ssmskyqgcmeiayco => $eisusiekaciioueg ? __("\x44\151\x73\x61\x62\x6c\x69\156\147\x20\104\x65\166\145\154\x6f\160\x6d\x65\x6e\164\40\x4d\157\x64\145\x20\x74\x75\162\x6e\163\40\157\156\40\143\141\x63\150\151\x6e\x67\x20\x66\x6f\x72\40\x79\x6f\165\x72\x20\x73\151\x74\x65\56\x20\101\x72\x65\x20\x79\157\165\40\x73\165\162\145\40\x79\x6f\165\x20\x77\x61\156\164\x20\x74\157\x20\x63\157\x6e\164\x69\156\x75\x65\77", PR__MDL__OPTIMIZATION) : __("\105\156\x61\x62\154\151\x6e\x67\40\104\145\x76\145\x6c\157\160\155\145\x6e\x74\40\115\157\144\145\x20\x74\x75\162\x6e\x73\40\x6f\146\146\40\x63\x61\143\x68\x69\156\147\x20\146\x6f\162\x20\x79\157\x75\162\x20\x73\151\164\145\x2e\x20\x41\x72\145\40\x79\157\165\40\x73\x75\x72\145\x20\x79\x6f\x75\x20\x77\x61\x6e\x74\40\164\157\40\x63\157\156\x74\151\156\x75\x65\x3f", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\154\141\163\x73" => "\x6f\160\164\x2d\143\150\x61\156\147\145\x2d\144\145\x76\55\155\157\144\x65\40\x70\162\x2d\x62\x74\x6e\x20\x62\164\x6e\x2d" . ($eisusiekaciioueg ? self::ckcawaoawwioqecq : self::ecioqysekgaasegg), self::qescuiwgsyuikume => $qyusceuomywuquqc, "\144\x61\164\x61\55\x64\145\x76\x2d\155\157\144\x65" => $eisusiekaciioueg ? self::OFF : self::ON]]], __("\104\x65\166\145\154\157\160\155\x65\x6e\164\x20\x4d\x6f\144\x65", PR__MDL__OPTIMIZATION), ["\143\154\141\163\x73" => "\167\55\x31\60\60\40\160\x72\55\142\164\x6e\40\142\x74\156\55\141\x63\x74\151\157\x6e\x20\x62\x74\x6e\x2d\x6f\165\x74\x6c\x69\156\145\x2d\160\x72\x69\155\x61\x72\171"])]; if (!$qyaaumygmwoyoeec) { goto yiwiqaqmwiogawym; } yiwiqaqmwiogawym: $skeuoeoiuwwyqwou = Panel::symcgieuakksimmu("\x64\141\x73\150\142\157\x61\162\x64\x5f\x72\x65\x70\157\x72\x74\163"); $skeuoeoiuwwyqwou->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\160\165\162\143\150\141\x73\145\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\55\60\40\160\x74\x2d\62")->gswweykyogmsyawy(__("\120\165\162\x63\150\x61\x73\x65", PR__MDL__OPTIMIZATION))->saemoowcasogykak(IconInterface::sssqeiwoeckqywku)->oguessuismosauuu([$this, "\171\x61\x6f\163\147\143\x73\x6f\x69\167\x6d\x79\x65\x6f\163\x71"]))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\165\x73\x61\x67\x65\x73")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\x2d\60\40\x70\164\55\62")->gswweykyogmsyawy(__("\x55\163\141\147\145", PR__MDL__OPTIMIZATION))->saemoowcasogykak(IconInterface::okgwkgguoawyiecg)->oguessuismosauuu([$this, "\x64\x6b\143\141\x75\x6d\155\163\x63\x6b\x75\153\x6f\147\x63\155"]))->mkiqamegmeucqeyy(); $qookweymeqawmcwo[self::imiuwqeccyaimyaw] = ["\160\x61\x6e\145\x6c" => $skeuoeoiuwwyqwou->render(false, ["\150\141\163\137\167\x72\141\160" => false, "\x76\145\162\x74\151\143\x61\x6c" => false]), self::qescuiwgsyuikume => __("\120\165\162\x63\150\141\x73\x65\40\141\156\x64\x20\103\x6f\x6e\163\x75\155\160\x74\151\x6f\156\40\122\145\x70\157\x72\164", PR__MDL__OPTIMIZATION)]; $qookweymeqawmcwo["\161\x75\x69\x63\153\137\141\x63\164\x69\x6f\x6e\x73"] = $mgsegoqmgegikkig; $qookweymeqawmcwo["\x71\165\151\143\x6b\137\x61\143\x74\x69\x6f\x6e\x5f\164\151\x74\x6c\x65"] = __("\x51\165\x69\x63\153\x20\x41\x63\164\x69\157\156\x73", PR__MDL__OPTIMIZATION); $qookweymeqawmcwo[self::eoigaocgcaekssuw] = $this->cqscwmqsgomkogoq()->samoqkkuimogeyew()[self::eoigaocgcaekssuw] ?? []; return $qookweymeqawmcwo; } public function yaosgcsoiwmyeosq() : string { return $this->cqscwmqsgomkogoq()->aaasykywsggkskse(true); } public function dkcaummsckukogcm() : string { return $this->cqscwmqsgomkogoq()->aksiycwcekcecuec(true); } }
