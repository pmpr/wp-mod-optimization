<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cf8fcabf8fd             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Dashboard; use Pmpr\Common\Foundation\Backend\Page as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use Pmpr\Module\Optimization\Subscription\Page as SubscriptionPage; class Page extends BaseClass { use SubscriptionEngineTrait; const wwgqqgayyagycysu = "\160\165\x72\147\x65\x5f\143\x61\143\x68\145"; const wwkyymgusywcykuk = "\x70\162\x65\154\157\141\144\137\x70\x61\x67\x65\163"; public function qiccuiwooiquycsg() { $this->eukmukacucooequu([Constants::kekcgssiyagioocg => 1, Constants::wuowaiyouwecckaw => "\x6f\x70\164\x5f\144\x61\x73\x68\x62\x6f\x61\162\144", Constants::ysgwugcqguggmigq => __("\104\x61\163\150\x62\x6f\141\x72\144", PR__MDL__OPTIMIZATION), Constants::qoquaeuooeycomks => $this->akuociswqmoigkas()]); } public function enqueue() { $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $gaumukogkkgkiiuo->ayeieigcckcmsikq($gaumukogkkgkiiuo->owygwqwawqoiusis("\x64\141\x73\150\142\x6f\x61\162\x64", $gaumukogkkgkiiuo->get("\x64\x61\163\x68\x62\157\x61\x72\x64\x2e\152\163"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ikqyiskqaaymscgw("\x64\141\163\x68\142\x6f\141\162\144", ["\x61\x6a\141\170" => Ajax::myikkigscysoykgy]); SubscriptionPage::symcgieuakksimmu()->enqueue(); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $eisusiekaciioueg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false); $mwuweekukywuqgsm = __("\x50\165\x72\x67\145\x20\x43\x61\143\150\145", PR__MDL__OPTIMIZATION); $qyaaumygmwoyoeec = Constants::uucoeqmmykkwsmqc !== $ykquycoiqesuckco->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, Constants::uucoeqmmykkwsmqc); $qyusceuomywuquqc = $eisusiekaciioueg ? __("\104\x69\x73\141\142\154\x65\x20\x44\x65\x76\x65\154\157\160\x6d\x65\x6e\x74\x20\x4d\x6f\144\145", PR__MDL__OPTIMIZATION) : __("\105\156\x61\142\x6c\145\40\104\x65\166\x65\154\157\x70\155\145\156\x74\40\x4d\x6f\x64\x65", PR__MDL__OPTIMIZATION); $mgsegoqmgegikkig = ["\163\171\x6e\143\x5f\144\x61\x74\x61" => $this->cqscwmqsgomkogoq()->kscwewuywiakosos(), self::wwgqqgayyagycysu => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $mwuweekukywuqgsm, Constants::ssmskyqgcmeiayco => __("\101\x72\145\40\171\x6f\x75\x20\163\165\162\145\x20\141\142\157\x75\x74\x20\x70\x75\x72\x67\x65\40\143\141\143\150\x65\x3f", PR__MDL__OPTIMIZATION), Constants::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__("\120\x72\x65\x6c\x6f\141\x64\40\x69\x73\40\145\x6e\141\x62\154\x65\40\141\156\x64\x20\x61\x66\164\x65\x72\x20\160\x75\162\x67\x65\x20\x63\141\143\150\145\54\40\162\x65\147\x65\x6e\145\162\141\164\145\40\143\141\x63\x68\145\40\x66\151\x6c\145\40\163\x74\141\x72\164\x65\144\40\141\x75\164\x6f\155\x61\164\151\x63\x61\x6c\154\x79\x2e", PR__MDL__OPTIMIZATION), true) : '', Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\154\141\x73\163" => "\x6f\x70\164\x2d\160\165\162\x67\x65\x2d\x61\154\x6c\x2d\143\x61\143\150\x65\x20\x70\162\x2d\x62\164\156\x20\x62\164\x6e\55\144\x61\x6e\x67\145\162", Constants::qescuiwgsyuikume => $mwuweekukywuqgsm]]], $mwuweekukywuqgsm, ["\143\154\141\163\x73" => "\x77\x2d\61\60\60\x20\x70\162\x2d\142\164\x6e\x20\142\164\156\55\x61\x63\x74\x69\x6f\x6e\40\x62\x74\156\55\157\165\164\154\x69\x6e\x65\55\x70\162\x69\155\141\x72\x79"]), Constants::qeuquamuuwueeiyi => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => $eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => $qyusceuomywuquqc, Constants::ssmskyqgcmeiayco => $eisusiekaciioueg ? __("\x44\151\x73\x61\x62\x6c\x69\x6e\147\x20\104\145\166\x65\154\x6f\160\x6d\x65\156\164\x20\115\x6f\144\x65\x20\164\x75\162\156\x73\40\157\156\x20\143\x61\143\x68\x69\156\147\x20\146\x6f\162\x20\171\x6f\x75\162\x20\163\x69\x74\145\x2e\40\x41\x72\145\40\171\x6f\x75\40\x73\165\162\x65\40\171\x6f\165\40\x77\141\x6e\164\40\x74\157\40\143\x6f\x6e\x74\x69\x6e\x75\x65\77", PR__MDL__OPTIMIZATION) : __("\105\156\141\142\154\x69\x6e\147\40\104\145\166\x65\154\157\x70\155\x65\x6e\164\x20\115\x6f\144\145\40\x74\165\162\156\163\40\157\146\146\x20\143\x61\x63\x68\x69\x6e\147\x20\x66\x6f\x72\x20\x79\x6f\165\x72\x20\x73\x69\164\x65\x2e\x20\101\162\145\40\x79\157\165\40\x73\165\x72\145\x20\171\x6f\x75\x20\x77\141\156\164\x20\x74\157\x20\143\x6f\x6e\x74\x69\x6e\165\x65\x3f", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\154\141\x73\163" => "\x6f\x70\164\x2d\x63\x68\x61\156\x67\x65\x2d\144\x65\x76\x2d\x6d\x6f\144\x65\40\x70\162\55\x62\164\156\40\x62\x74\x6e\x2d" . ($eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg), Constants::qescuiwgsyuikume => $qyusceuomywuquqc, "\x64\141\x74\x61\55\144\145\x76\55\155\157\x64\x65" => $eisusiekaciioueg ? Constants::OFF : Constants::ON]]], __("\x44\145\x76\145\x6c\157\160\155\x65\x6e\164\x20\x4d\157\144\x65", PR__MDL__OPTIMIZATION), ["\143\x6c\x61\163\x73" => "\167\55\61\60\x30\x20\160\x72\x2d\142\x74\x6e\x20\142\164\156\x2d\141\x63\x74\x69\157\156\40\142\x74\x6e\55\x6f\x75\164\154\x69\x6e\x65\55\x70\162\151\155\141\162\x79"])]; if (!$qyaaumygmwoyoeec) { goto kqwyogqqwumumiwg; } kqwyogqqwumumiwg: $skeuoeoiuwwyqwou = Panel::symcgieuakksimmu("\x64\141\x73\x68\142\157\x61\x72\144\x5f\162\x65\160\x6f\x72\x74\163"); $skeuoeoiuwwyqwou->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\x70\x75\162\x63\x68\141\163\x65\x73")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\55\60\x20\160\164\x2d\62")->gswweykyogmsyawy(__("\x50\x75\162\143\150\x61\x73\x65\40\122\145\x70\157\162\164", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\171\141\x6f\163\x67\x63\x73\157\151\167\x6d\x79\x65\x6f\x73\161"]))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\x75\163\141\147\145\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\x70\55\x30\x20\x70\x74\55\x32")->gswweykyogmsyawy(__("\x55\163\x61\x67\145\x20\122\x65\x70\x6f\162\164", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\x64\153\143\141\x75\155\x6d\x73\143\153\165\x6b\157\x67\x63\x6d"]))->mkiqamegmeucqeyy(); $qookweymeqawmcwo[Constants::imiuwqeccyaimyaw] = ["\160\141\156\x65\154" => $skeuoeoiuwwyqwou->render(false, ["\150\x61\x73\x5f\167\x72\x61\160" => false, "\166\145\162\164\151\x63\x61\x6c" => false]), Constants::qescuiwgsyuikume => __("\x50\165\162\x63\150\x61\x73\145\x20\x61\x6e\144\x20\x43\157\x6e\x73\165\155\160\164\x69\x6f\x6e\x20\122\x65\160\x6f\x72\164", PR__MDL__OPTIMIZATION)]; $qookweymeqawmcwo["\161\165\151\143\153\137\x61\x63\x74\151\157\x6e\163"] = $mgsegoqmgegikkig; $qookweymeqawmcwo["\161\x75\151\x63\153\137\x61\143\164\x69\x6f\x6e\x5f\x74\151\x74\x6c\145"] = __("\121\x75\x69\143\153\x20\101\143\x74\151\157\x6e\163", PR__MDL__OPTIMIZATION); $qookweymeqawmcwo[Constants::eoigaocgcaekssuw] = $this->cqscwmqsgomkogoq()->samoqkkuimogeyew()[Constants::eoigaocgcaekssuw] ?? []; return $qookweymeqawmcwo; } public function yaosgcsoiwmyeosq() : string { return $this->cqscwmqsgomkogoq()->aaasykywsggkskse(true); } public function dkcaummsckukogcm() : string { return $this->cqscwmqsgomkogoq()->aksiycwcekcecuec(true); } }
