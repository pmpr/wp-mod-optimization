<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2162b04da4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Dashboard; use Pmpr\Common\Foundation\Backend\Page as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use Pmpr\Module\Optimization\Subscription\Page as SubscriptionPage; class Page extends BaseClass { use SubscriptionEngineTrait; const wwgqqgayyagycysu = "\x70\165\x72\x67\x65\137\x63\x61\143\x68\x65"; const wwkyymgusywcykuk = "\160\x72\145\154\x6f\141\144\137\160\x61\x67\x65\163"; public function qiccuiwooiquycsg() { $this->eukmukacucooequu([Constants::kekcgssiyagioocg => 1, Constants::wuowaiyouwecckaw => "\x6f\160\164\137\144\x61\163\x68\x62\157\141\162\144", Constants::ysgwugcqguggmigq => __("\104\x61\163\150\x62\157\141\162\144", PR__MDL__OPTIMIZATION), Constants::qoquaeuooeycomks => $this->akuociswqmoigkas()]); } public function enqueue() { $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $gaumukogkkgkiiuo->ayeieigcckcmsikq($gaumukogkkgkiiuo->owygwqwawqoiusis("\x64\141\163\150\142\x6f\141\x72\x64", $gaumukogkkgkiiuo->get("\144\x61\163\150\142\157\x61\162\x64\x2e\x6a\x73"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ikqyiskqaaymscgw("\144\141\163\x68\142\x6f\141\162\144", ["\141\152\141\x78" => Ajax::myikkigscysoykgy]); SubscriptionPage::symcgieuakksimmu()->enqueue(); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $eisusiekaciioueg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false); $mwuweekukywuqgsm = __("\120\x75\x72\147\x65\x20\x43\x61\x63\150\x65", PR__MDL__OPTIMIZATION); $qyaaumygmwoyoeec = Constants::uucoeqmmykkwsmqc !== $ykquycoiqesuckco->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, Constants::uucoeqmmykkwsmqc); $qyusceuomywuquqc = $eisusiekaciioueg ? __("\104\x69\163\141\142\154\145\40\x44\x65\166\145\x6c\x6f\x70\x6d\x65\x6e\x74\40\115\157\x64\145", PR__MDL__OPTIMIZATION) : __("\105\156\141\x62\x6c\x65\40\104\x65\166\145\x6c\157\x70\155\x65\156\164\x20\115\x6f\x64\x65", PR__MDL__OPTIMIZATION); $mgsegoqmgegikkig = ["\x73\171\x6e\143\137\x64\x61\164\141" => $this->cqscwmqsgomkogoq()->kscwewuywiakosos(), self::wwgqqgayyagycysu => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $mwuweekukywuqgsm, Constants::ssmskyqgcmeiayco => __("\101\162\145\x20\x79\157\x75\x20\163\165\162\145\x20\141\x62\157\165\x74\x20\160\165\x72\147\x65\40\143\x61\143\x68\145\x3f", PR__MDL__OPTIMIZATION), Constants::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__("\x50\x72\145\x6c\x6f\141\144\x20\x69\163\x20\x65\x6e\x61\142\154\x65\40\x61\x6e\x64\40\141\x66\x74\x65\x72\x20\x70\165\x72\147\145\40\143\141\143\150\x65\x2c\40\x72\145\147\x65\156\145\x72\x61\x74\145\x20\143\x61\x63\150\x65\40\x66\151\154\x65\x20\163\164\141\162\x74\x65\x64\40\x61\165\164\157\x6d\141\x74\x69\x63\141\x6c\x6c\x79\x2e", PR__MDL__OPTIMIZATION), true) : '', Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\x6c\141\163\x73" => "\x6f\160\164\55\160\165\x72\147\145\x2d\141\154\x6c\x2d\x63\x61\x63\150\x65\x20\160\x72\55\142\164\x6e\x20\142\x74\156\x2d\144\141\x6e\147\x65\x72", Constants::qescuiwgsyuikume => $mwuweekukywuqgsm]]], $mwuweekukywuqgsm, ["\x63\154\x61\163\x73" => "\167\x2d\x31\x30\60\x20\x70\x72\x2d\142\x74\x6e\40\142\164\x6e\55\x61\x63\164\151\x6f\x6e\40\x62\x74\x6e\55\157\x75\164\154\x69\156\x65\55\x70\x72\151\155\141\162\x79"]), Constants::qeuquamuuwueeiyi => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => $eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => $qyusceuomywuquqc, Constants::ssmskyqgcmeiayco => $eisusiekaciioueg ? __("\x44\x69\163\x61\x62\154\x69\156\x67\40\104\x65\166\145\154\157\x70\x6d\x65\156\164\x20\115\x6f\144\x65\x20\164\x75\162\156\163\x20\157\x6e\40\x63\141\x63\150\x69\156\x67\x20\146\157\x72\40\x79\x6f\x75\x72\40\x73\151\x74\x65\56\x20\x41\x72\x65\x20\171\157\165\40\163\165\x72\x65\x20\x79\157\x75\40\167\141\156\164\40\164\157\40\143\x6f\x6e\164\151\x6e\x75\145\77", PR__MDL__OPTIMIZATION) : __("\x45\156\141\x62\x6c\x69\156\147\40\x44\145\166\x65\154\x6f\x70\x6d\x65\x6e\164\40\115\x6f\x64\x65\40\164\x75\x72\x6e\x73\40\x6f\x66\x66\x20\143\x61\143\x68\x69\x6e\147\40\146\x6f\x72\x20\171\157\165\162\40\163\x69\164\x65\56\40\x41\x72\x65\40\171\157\x75\40\163\165\x72\x65\40\171\157\x75\x20\x77\x61\x6e\x74\40\x74\157\x20\x63\157\x6e\x74\151\156\165\x65\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\x6c\x61\x73\163" => "\x6f\160\164\55\x63\x68\141\156\147\x65\55\x64\x65\x76\x2d\x6d\x6f\144\145\40\x70\162\55\x62\x74\x6e\40\x62\x74\x6e\x2d" . ($eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg), Constants::qescuiwgsyuikume => $qyusceuomywuquqc, "\x64\x61\164\141\x2d\x64\x65\x76\x2d\155\x6f\144\x65" => $eisusiekaciioueg ? Constants::OFF : Constants::ON]]], __("\x44\x65\166\145\154\157\x70\155\x65\156\x74\x20\x4d\x6f\144\x65", PR__MDL__OPTIMIZATION), ["\x63\x6c\141\163\163" => "\x77\x2d\x31\60\60\40\x70\x72\55\x62\x74\156\40\x62\x74\156\x2d\141\x63\x74\151\157\x6e\40\142\x74\x6e\55\157\x75\x74\x6c\x69\156\x65\x2d\160\x72\151\x6d\141\162\x79"])]; if (!$qyaaumygmwoyoeec) { goto qoacckkkwsqkokye; } qoacckkkwsqkokye: $skeuoeoiuwwyqwou = Panel::symcgieuakksimmu("\x64\141\x73\150\142\157\x61\x72\x64\x5f\162\x65\160\x6f\162\164\163"); $skeuoeoiuwwyqwou->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\160\x75\162\143\x68\x61\x73\x65\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\55\60\40\160\164\x2d\62")->gswweykyogmsyawy(__("\120\x75\x72\143\x68\x61\163\x65\x20\122\145\x70\157\x72\x74", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\x79\x61\157\163\147\x63\163\x6f\x69\167\x6d\x79\x65\157\163\x71"]))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\165\163\141\147\x65\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\x70\x2d\60\x20\160\164\x2d\62")->gswweykyogmsyawy(__("\x55\x73\x61\x67\145\40\x52\x65\160\x6f\162\164", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\x64\153\143\x61\165\x6d\155\x73\x63\153\x75\153\x6f\x67\x63\155"]))->mkiqamegmeucqeyy(); $qookweymeqawmcwo[Constants::imiuwqeccyaimyaw] = ["\160\x61\x6e\145\154" => $skeuoeoiuwwyqwou->render(false, ["\x68\141\x73\137\167\x72\x61\x70" => false, "\166\x65\x72\x74\x69\143\x61\154" => false]), Constants::qescuiwgsyuikume => __("\120\x75\x72\x63\x68\x61\x73\x65\x20\x61\x6e\x64\x20\103\x6f\156\x73\165\155\x70\x74\x69\157\156\40\x52\145\160\x6f\162\x74", PR__MDL__OPTIMIZATION)]; $qookweymeqawmcwo["\x71\165\x69\x63\x6b\x5f\141\143\x74\151\x6f\156\x73"] = $mgsegoqmgegikkig; $qookweymeqawmcwo["\161\165\151\x63\x6b\137\x61\143\x74\x69\157\x6e\137\164\x69\x74\x6c\145"] = __("\121\165\x69\x63\x6b\40\x41\x63\164\151\x6f\156\163", PR__MDL__OPTIMIZATION); $qookweymeqawmcwo[Constants::eoigaocgcaekssuw] = $this->cqscwmqsgomkogoq()->samoqkkuimogeyew()[Constants::eoigaocgcaekssuw] ?? []; return $qookweymeqawmcwo; } public function yaosgcsoiwmyeosq() : string { return $this->cqscwmqsgomkogoq()->aaasykywsggkskse(true); } public function dkcaummsckukogcm() : string { return $this->cqscwmqsgomkogoq()->aksiycwcekcecuec(true); } }
