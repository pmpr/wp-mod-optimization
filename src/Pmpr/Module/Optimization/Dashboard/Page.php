<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a5875d8609d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Dashboard; use Pmpr\Common\Foundation\Backend\Page as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use Pmpr\Module\Optimization\Subscription\Page as SubscriptionPage; class Page extends BaseClass implements CommonInterface { use SubscriptionEngineTrait; const wwgqqgayyagycysu = "\160\x75\x72\x67\145\137\143\141\x63\x68\145"; const wwkyymgusywcykuk = "\x70\x72\x65\154\x6f\x61\144\137\x70\x61\x67\145\163"; public function qiccuiwooiquycsg() { $this->eukmukacucooequu([self::kekcgssiyagioocg => 0, self::wuowaiyouwecckaw => "\157\160\x74\137\144\141\163\x68\142\157\141\162\144", self::ysgwugcqguggmigq => __("\x44\x61\x73\x68\142\157\141\162\x64", PR__MDL__OPTIMIZATION), self::qoquaeuooeycomks => $this->akuociswqmoigkas()]); } public function enqueue() { $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $gaumukogkkgkiiuo->ayeieigcckcmsikq($gaumukogkkgkiiuo->owygwqwawqoiusis("\x64\x61\x73\150\x62\x6f\x61\162\144", $gaumukogkkgkiiuo->get("\x64\x61\x73\150\142\157\141\x72\x64\56\152\163"))->okawmmwsiuauwsiu(self::qiaqeaemuukkikmi))->ikqyiskqaaymscgw("\144\x61\163\x68\x62\x6f\141\x72\x64", ["\x61\x6a\141\x78" => Ajax::myikkigscysoykgy]); SubscriptionPage::symcgieuakksimmu()->enqueue(); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $eisusiekaciioueg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(self::qeuquamuuwueeiyi, false); $mwuweekukywuqgsm = __("\120\x75\162\x67\145\40\103\141\x63\x68\x65", PR__MDL__OPTIMIZATION); $qyaaumygmwoyoeec = self::uucoeqmmykkwsmqc !== $ykquycoiqesuckco->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, self::uucoeqmmykkwsmqc); $qyusceuomywuquqc = $eisusiekaciioueg ? __("\104\x69\x73\x61\142\154\x65\x20\104\145\x76\x65\154\157\x70\155\145\x6e\164\40\115\x6f\x64\145", PR__MDL__OPTIMIZATION) : __("\x45\156\141\142\154\x65\x20\104\145\x76\x65\x6c\157\x70\x6d\145\156\164\x20\115\x6f\x64\145", PR__MDL__OPTIMIZATION); $mgsegoqmgegikkig = ["\163\171\x6e\x63\x5f\x64\141\164\x61" => $this->cqscwmqsgomkogoq()->kscwewuywiakosos(), self::wwgqqgayyagycysu => $uuyucgkyusckoaeq->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $mwuweekukywuqgsm, self::ssmskyqgcmeiayco => __("\101\162\145\x20\x79\x6f\165\x20\x73\165\x72\145\40\141\x62\157\x75\x74\x20\160\x75\x72\x67\145\40\x63\141\143\150\145\77", PR__MDL__OPTIMIZATION), self::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__("\x50\x72\145\154\x6f\x61\144\x20\x69\x73\x20\x65\x6e\141\142\x6c\x65\x20\141\156\144\x20\141\x66\x74\x65\x72\x20\160\x75\162\147\145\40\143\141\143\x68\x65\54\40\x72\x65\147\x65\x6e\145\162\141\164\x65\x20\x63\141\x63\150\145\x20\146\151\x6c\145\40\x73\164\x61\x72\164\x65\x64\x20\x61\x75\164\x6f\x6d\141\164\151\x63\141\154\x6c\171\56", PR__MDL__OPTIMIZATION), true) : '', self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\x6c\141\163\163" => "\157\160\164\55\160\165\x72\147\x65\55\141\x6c\154\55\143\141\143\x68\x65\x20\160\162\55\x62\164\x6e\x20\142\164\156\x2d\144\141\x6e\147\x65\x72", self::qescuiwgsyuikume => $mwuweekukywuqgsm]]], $mwuweekukywuqgsm, ["\x63\154\141\x73\x73" => "\167\x2d\x31\60\60\x20\160\162\x2d\142\x74\156\x20\x62\164\x6e\x2d\141\143\164\x69\157\x6e\x20\142\x74\x6e\x2d\x6f\165\164\154\151\x6e\x65\x2d\160\162\151\x6d\x61\x72\x79"]), self::qeuquamuuwueeiyi => $uuyucgkyusckoaeq->igiawkoqiogocsau([self::squoamkioomemiyi => $eisusiekaciioueg ? self::ckcawaoawwioqecq : self::ecioqysekgaasegg, self::qescuiwgsyuikume => $qyusceuomywuquqc, self::ssmskyqgcmeiayco => $eisusiekaciioueg ? __("\x44\x69\x73\x61\x62\x6c\x69\156\x67\x20\x44\x65\x76\145\154\x6f\x70\155\145\x6e\164\40\115\x6f\144\145\x20\164\x75\162\156\163\x20\157\x6e\x20\x63\x61\143\x68\x69\x6e\147\40\x66\157\x72\x20\171\x6f\165\162\x20\x73\151\164\x65\56\40\x41\162\x65\40\x79\157\x75\40\163\165\x72\x65\x20\171\157\165\x20\x77\141\x6e\164\40\x74\157\40\x63\x6f\x6e\164\151\156\x75\x65\77", PR__MDL__OPTIMIZATION) : __("\105\156\x61\x62\154\151\x6e\147\x20\104\x65\166\145\154\x6f\x70\x6d\145\x6e\164\x20\x4d\x6f\x64\x65\x20\x74\165\162\156\163\40\x6f\146\146\x20\143\141\x63\150\151\x6e\147\x20\x66\x6f\162\40\x79\x6f\x75\162\x20\163\x69\164\x65\x2e\x20\x41\162\x65\40\x79\x6f\x75\x20\163\165\162\x65\40\171\x6f\x75\x20\167\x61\156\x74\40\164\x6f\40\x63\157\156\164\x69\x6e\165\x65\x3f", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\x6c\x61\163\x73" => "\157\x70\164\x2d\x63\x68\141\x6e\147\x65\55\x64\x65\x76\x2d\155\x6f\x64\145\x20\x70\x72\55\142\164\156\x20\142\164\x6e\x2d" . ($eisusiekaciioueg ? self::ckcawaoawwioqecq : self::ecioqysekgaasegg), self::qescuiwgsyuikume => $qyusceuomywuquqc, "\x64\x61\164\x61\x2d\144\x65\x76\x2d\155\x6f\144\145" => $eisusiekaciioueg ? self::OFF : self::ON]]], __("\104\x65\166\145\154\157\160\155\x65\156\164\x20\115\157\144\x65", PR__MDL__OPTIMIZATION), ["\143\x6c\141\x73\x73" => "\x77\x2d\61\x30\60\40\160\162\x2d\142\164\x6e\40\142\x74\156\x2d\141\x63\164\x69\157\x6e\40\142\164\x6e\x2d\157\165\x74\x6c\x69\x6e\x65\x2d\x70\x72\151\x6d\141\x72\171"])]; if (!$qyaaumygmwoyoeec) { goto myoicgcuugciueis; } myoicgcuugciueis: $skeuoeoiuwwyqwou = Panel::symcgieuakksimmu("\x64\141\x73\150\142\x6f\141\162\x64\137\162\145\160\157\x72\164\163"); $skeuoeoiuwwyqwou->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\160\165\162\x63\x68\x61\x73\145\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\55\x30\40\160\164\x2d\x32")->gswweykyogmsyawy(__("\x50\x75\162\x63\x68\141\163\145\40\122\145\x70\157\162\164", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\171\141\x6f\163\147\x63\x73\x6f\151\x77\x6d\x79\145\157\x73\x71"]))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\x75\x73\x61\x67\145\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\x70\x2d\60\40\160\x74\x2d\x32")->gswweykyogmsyawy(__("\x55\163\141\147\145\x20\x52\x65\160\x6f\162\x74", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\144\x6b\x63\x61\165\155\x6d\x73\x63\x6b\x75\x6b\157\x67\x63\x6d"]))->mkiqamegmeucqeyy(); $qookweymeqawmcwo[self::imiuwqeccyaimyaw] = ["\160\141\x6e\145\154" => $skeuoeoiuwwyqwou->render(false, ["\150\141\x73\x5f\x77\162\x61\x70" => false, "\x76\145\x72\x74\151\x63\x61\154" => false]), self::qescuiwgsyuikume => __("\x50\x75\x72\143\x68\141\x73\145\x20\x61\x6e\x64\x20\x43\x6f\156\163\165\x6d\160\x74\151\x6f\156\40\x52\x65\160\x6f\x72\x74", PR__MDL__OPTIMIZATION)]; $qookweymeqawmcwo["\161\165\151\x63\153\137\141\x63\164\x69\x6f\x6e\163"] = $mgsegoqmgegikkig; $qookweymeqawmcwo["\x71\x75\x69\x63\153\x5f\141\x63\164\x69\x6f\x6e\x5f\164\151\x74\x6c\x65"] = __("\121\x75\151\143\x6b\x20\101\x63\x74\x69\x6f\x6e\163", PR__MDL__OPTIMIZATION); $qookweymeqawmcwo[self::eoigaocgcaekssuw] = $this->cqscwmqsgomkogoq()->samoqkkuimogeyew()[self::eoigaocgcaekssuw] ?? []; return $qookweymeqawmcwo; } public function yaosgcsoiwmyeosq() : string { return $this->cqscwmqsgomkogoq()->aaasykywsggkskse(true); } public function dkcaummsckukogcm() : string { return $this->cqscwmqsgomkogoq()->aksiycwcekcecuec(true); } }
