<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6686aaf854850             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Dashboard; use Pmpr\Common\Foundation\Backend\Page as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; class Page extends BaseClass implements CommonInterface { use SubscriptionEngineTrait; const wwgqqgayyagycysu = "\x70\165\x72\x67\145\x5f\x63\141\143\150\145"; const wwkyymgusywcykuk = "\160\162\145\154\x6f\141\144\137\160\x61\x67\145\163"; public function qiccuiwooiquycsg() { $this->eukmukacucooequu([self::kekcgssiyagioocg => 0, self::wuowaiyouwecckaw => "\157\160\164\x5f\144\x61\163\x68\142\157\x61\x72\144", self::ysgwugcqguggmigq => __("\104\141\x73\x68\142\x6f\x61\x72\144", PR__MDL__OPTIMIZATION), self::qoquaeuooeycomks => $this->akuociswqmoigkas()]); } public function enqueue() { $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $gaumukogkkgkiiuo->ayeieigcckcmsikq($gaumukogkkgkiiuo->owygwqwawqoiusis("\144\141\x73\150\x62\x6f\141\x72\x64", $gaumukogkkgkiiuo->get("\x64\x61\163\150\142\x6f\x61\x72\x64\x2e\x6a\163"))->okawmmwsiuauwsiu(self::qiaqeaemuukkikmi)); $gaumukogkkgkiiuo->ayeieigcckcmsikq($gaumukogkkgkiiuo->owygwqwawqoiusis("\163\x75\142\x73\143\x72\151\x70\x74\151\x6f\156", $gaumukogkkgkiiuo->get("\x73\165\142\163\x63\x72\151\160\164\x69\157\x6e\56\152\x73"))->okawmmwsiuauwsiu(self::qiaqeaemuukkikmi)); $gaumukogkkgkiiuo->ikqyiskqaaymscgw("\x64\141\x73\150\x62\157\x61\162\144", ["\x61\x6a\x61\x78" => Ajax::myikkigscysoykgy]); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $eisusiekaciioueg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(self::qeuquamuuwueeiyi, false); $mwuweekukywuqgsm = __("\x50\x75\162\147\x65\40\x43\141\143\150\x65", PR__MDL__OPTIMIZATION); $qyaaumygmwoyoeec = self::uucoeqmmykkwsmqc !== $ykquycoiqesuckco->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, self::uucoeqmmykkwsmqc); $qyusceuomywuquqc = $eisusiekaciioueg ? __("\104\x69\163\141\x62\154\x65\x20\104\x65\x76\x65\x6c\x6f\160\155\145\156\164\40\x4d\157\x64\145", PR__MDL__OPTIMIZATION) : __("\x45\156\141\142\154\x65\40\104\x65\166\x65\x6c\x6f\160\155\x65\x6e\164\40\115\x6f\x64\x65", PR__MDL__OPTIMIZATION); $mgsegoqmgegikkig = ["\163\x79\x6e\143\x5f\x64\141\164\x61" => $this->cqscwmqsgomkogoq()->kscwewuywiakosos(), self::wwgqqgayyagycysu => $uuyucgkyusckoaeq->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $mwuweekukywuqgsm, self::ssmskyqgcmeiayco => __("\x41\x72\x65\x20\171\157\x75\40\163\x75\162\145\40\141\x62\157\165\164\40\x70\x75\162\x67\145\x20\x63\x61\x63\150\x65\77", PR__MDL__OPTIMIZATION), self::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__("\x50\x72\x65\154\x6f\141\x64\40\x69\163\x20\145\x6e\x61\142\154\x65\x20\141\x6e\144\x20\x61\146\x74\x65\x72\x20\160\165\162\x67\x65\40\x63\141\x63\150\x65\54\x20\x72\x65\x67\145\156\x65\162\141\x74\145\40\x63\141\x63\x68\145\x20\x66\151\x6c\145\x20\x73\164\141\x72\164\x65\144\40\141\165\x74\157\155\141\164\x69\x63\x61\x6c\154\x79\x2e", PR__MDL__OPTIMIZATION), true) : '', self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\x63\154\141\x73\x73" => "\157\160\164\55\160\165\162\147\x65\x2d\141\x6c\154\55\143\x61\x63\x68\x65\x20\160\162\x2d\142\x74\x6e\40\142\164\x6e\x2d\x64\141\156\x67\145\x72", self::qescuiwgsyuikume => $mwuweekukywuqgsm]]], $mwuweekukywuqgsm, ["\x63\x6c\x61\163\163" => "\167\55\x31\60\60\40\160\162\55\142\x74\156\x20\142\x74\x6e\x2d\141\x63\x74\151\x6f\x6e\40\x62\164\x6e\x2d\x6f\165\x74\x6c\151\x6e\x65\x2d\x70\162\x69\155\141\162\x79"]), self::qeuquamuuwueeiyi => $uuyucgkyusckoaeq->igiawkoqiogocsau([self::squoamkioomemiyi => $eisusiekaciioueg ? self::ckcawaoawwioqecq : self::ecioqysekgaasegg, self::qescuiwgsyuikume => $qyusceuomywuquqc, self::ssmskyqgcmeiayco => $eisusiekaciioueg ? __("\104\x69\163\x61\x62\x6c\x69\156\147\x20\x44\145\x76\145\x6c\x6f\x70\x6d\145\x6e\164\40\115\157\x64\x65\40\164\x75\162\156\163\x20\x6f\x6e\x20\x63\x61\143\x68\151\x6e\x67\40\x66\157\162\40\171\157\165\162\x20\163\x69\x74\x65\56\40\x41\x72\145\x20\x79\157\x75\40\163\165\162\x65\x20\x79\157\165\40\167\141\x6e\164\x20\164\157\x20\x63\157\x6e\164\x69\x6e\165\x65\77", PR__MDL__OPTIMIZATION) : __("\105\156\141\x62\154\x69\156\147\40\x44\145\x76\145\x6c\x6f\x70\155\145\x6e\164\40\x4d\157\x64\145\x20\x74\x75\x72\x6e\163\x20\157\146\x66\x20\143\x61\x63\150\x69\x6e\x67\x20\x66\x6f\162\40\x79\157\165\162\x20\163\151\164\x65\56\40\x41\x72\145\x20\171\157\x75\x20\x73\x75\162\x65\40\171\157\x75\x20\167\141\x6e\164\40\164\x6f\40\x63\157\156\164\x69\156\x75\x65\x3f", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\x6c\141\x73\x73" => "\x6f\x70\x74\x2d\x63\150\x61\x6e\x67\x65\x2d\144\145\166\55\x6d\157\144\x65\x20\x70\x72\x2d\142\164\156\x20\x62\x74\156\55" . ($eisusiekaciioueg ? self::ckcawaoawwioqecq : self::ecioqysekgaasegg), self::qescuiwgsyuikume => $qyusceuomywuquqc, "\x64\141\164\x61\55\x64\145\166\x2d\x6d\157\144\x65" => $eisusiekaciioueg ? self::OFF : self::ON]]], __("\x44\x65\166\x65\x6c\x6f\160\x6d\145\x6e\x74\x20\115\157\144\145", PR__MDL__OPTIMIZATION), ["\143\154\141\163\x73" => "\167\x2d\x31\60\x30\x20\x70\x72\x2d\142\164\x6e\40\142\x74\156\55\x61\x63\164\x69\157\x6e\x20\142\164\x6e\x2d\157\165\164\x6c\x69\156\x65\x2d\x70\162\151\x6d\x61\x72\x79"])]; if (!$qyaaumygmwoyoeec) { goto yiwiqaqmwiogawym; } yiwiqaqmwiogawym: $skeuoeoiuwwyqwou = Panel::symcgieuakksimmu("\144\x61\x73\150\x62\157\x61\162\144\x5f\x72\x65\160\157\162\x74\163"); $skeuoeoiuwwyqwou->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\160\165\x72\x63\150\x61\163\145\x73")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\55\60\40\160\x74\55\62")->gswweykyogmsyawy(__("\x50\x75\162\x63\150\141\163\145", PR__MDL__OPTIMIZATION))->saemoowcasogykak(IconInterface::sssqeiwoeckqywku)->oguessuismosauuu([$this, "\171\x61\157\x73\147\143\163\157\151\167\x6d\x79\x65\x6f\163\161"]))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\x75\163\x61\147\145\x73")->uguqimqkesuguqau()->cooeyaumiimygakm("\x70\x2d\60\40\x70\x74\x2d\62")->gswweykyogmsyawy(__("\x55\x73\x61\x67\x65", PR__MDL__OPTIMIZATION))->saemoowcasogykak(IconInterface::okgwkgguoawyiecg)->oguessuismosauuu([$this, "\144\x6b\x63\x61\x75\155\x6d\x73\143\153\165\x6b\157\147\x63\x6d"]))->mkiqamegmeucqeyy(); $qookweymeqawmcwo[self::imiuwqeccyaimyaw] = ["\x70\141\156\x65\154" => $skeuoeoiuwwyqwou->render(false, ["\x68\141\163\137\x77\x72\x61\x70" => false, "\166\x65\x72\164\151\143\x61\154" => false]), self::qescuiwgsyuikume => __("\120\165\x72\x63\150\x61\163\145\x20\x61\x6e\144\40\x43\157\156\163\165\155\160\164\151\157\x6e\40\x52\145\160\157\162\164", PR__MDL__OPTIMIZATION)]; $qookweymeqawmcwo["\161\165\x69\143\x6b\137\141\x63\x74\151\157\x6e\163"] = $mgsegoqmgegikkig; $qookweymeqawmcwo["\x71\x75\x69\x63\x6b\137\141\x63\x74\151\x6f\x6e\x5f\x74\151\164\154\x65"] = __("\x51\x75\x69\x63\x6b\40\x41\x63\164\151\157\156\163", PR__MDL__OPTIMIZATION); $qookweymeqawmcwo[self::eoigaocgcaekssuw] = $this->cqscwmqsgomkogoq()->samoqkkuimogeyew()[self::eoigaocgcaekssuw] ?? []; return $qookweymeqawmcwo; } public function yaosgcsoiwmyeosq() : string { return $this->cqscwmqsgomkogoq()->aaasykywsggkskse(true); } public function dkcaummsckukogcm() : string { return $this->cqscwmqsgomkogoq()->aksiycwcekcecuec(true); } }
