<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63171273d0496             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Cleanup; use DOMElement; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Asset\Setting; class Image extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160\x5f\x68\x65\141\x64", [$this, "\153\x63\x6f\153\155\x73\155\x6b\x75\153\x6b\161\x69\155\x69\161"])->qcsmikeggeemccuu("\141\x64\155\151\x6e\137\150\145\141\x64", [$this, "\153\143\x6f\153\155\163\x6d\153\165\153\x6b\x71\x69\155\x69\x71"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\137\142\x75\x66\x66\145\x72\x5f\160\162\x6f\143\145\163\163"), [$this, "\171\x77\155\153\x6b\x69\x6f\157\141\x6d\165\x69\x77\x67\x6f\151"]); } public function kcokmsmkukkqimiq() { if (!(!DecoratorOption::get("\x73\x69\x74\145\x5f\x69\x63\157\x6e", false) && $this->weysguygiseoukqw(Setting::qoyskaoaaakosmaq))) { goto gcucsowqoeiwmyyq; } ManipulateHTML::awwqwouuoioauoaw("\x6c\151\156\153", ["\150\162\145\x66" => "\144\x61\x74\141\x3a\151\x6d\x61\147\145\57\x78\x2d\x69\x63\x6f\x6e\x3b\142\x61\163\x65\66\64\x2c\151\x56\x42\117\122\x77\60\113\x47\x67\157\x41\101\x41\101\x4e\123\125\150\105\125\x67\x41\101\101\x42\101\x41\101\101\x41\x51\105\101\x59\x41\x41\101\102\120\131\171\x4d\151\x41\x41\101\101\102\x6d\112\114\x52\60\124\57\x2f\x2f\x2f\57\x2f\x2f\70\x4a\x57\x50\146\143\x41\x41\x41\x41\103\x58\102\111\x57\130\x4d\x41\x41\101\102\x49\101\x41\101\x41\x53\101\x42\x47\171\x57\x73\x2b\101\x41\101\101\106\60\154\x45\121\126\x52\111\x78\62\x4e\147\107\x41\127\x6a\131\x42\x53\115\x67\154\x45\167\x43\153\142\x42\123\x41\143\101\103\x42\x41\x41\x41\x65\x61\122\x39\x63\111\x41\x41\x41\101\101\x53\x55\126\x4f\x52\x4b\x35\103\x59\x49\x49\x3d", "\162\145\154" => "\151\143\x6f\156", "\164\x79\x70\145" => "\x69\x6d\141\147\x65\57\x78\55\x69\x63\157\x6e"]); gcucsowqoeiwmyyq: } public function ywmkkiooamuiwgoi(?string $moooemyaqewumiay) : ?string { if (!$this->weysguygiseoukqw(Setting::yaggsqosuggmgykq)) { goto auumaoycmsmsgigs; } $yuumukkaswwoywya = "\x69\x6d\147\x3a\156\x6f\164\x28\133\167\151\144\x74\150\135\51\72\x6e\x6f\x74\50\133\x68\145\x69\147\150\164\x5d\x29"; if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto ysiqakyaiooyscwy; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik, $kasgukgceywckyou) { if (!(!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, "\144\141\164\x61\x2d\x6c\141\x7a\171\x2d\x6f\162\151\x67\151\156\x61\154") && !DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, "\144\x61\164\x61\55\156\x6f\x2d\151\155\x61\x67\x65\x2d\144\151\x6d\x65\x6e\163\151\157\156\x73"))) { goto ygcgoaokauigwuus; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\162\x63"); $yiasugywggckywoa = wp_parse_url($egsumesakcaaukem); try { if (!$this->aoaeiwswyagmesku($egsumesakcaaukem)) { goto oasggeyceiyieuuo; } if (!(ini_get("\141\154\x6c\x6f\167\137\x75\162\154\137\146\157\x70\x65\x6e") && $this->weysguygiseoukqw(Setting::ookqmecseqmewmeo))) { goto aumowowgewgqmwci; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\x73\x63\150\145\x6d\x65"] . "\x3a\x2f\57" . $yiasugywggckywoa["\x68\x6f\163\x74"] . $yiasugywggckywoa["\160\141\164\150"]); aumowowgewgqmwci: goto omuauimgkygcecsc; oasggeyceiyieuuo: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa["\x70\x61\164\x68"]; if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto kyiuewcikkqagwwg; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); kyiuewcikkqagwwg: omuauimgkygcecsc: } catch (Exception $wgaoewqkwgomoaai) { } $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto mugscgugcogcasue; } if (!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, "\x73\164\x79\154\x65")) { goto iymaiwqimisgacmk; } $kswaimykcacqyaay = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\164\171\x6c\145"); if (!preg_match_all("\x2f\x28\x77\151\144\164\x68\x29\x3a\134\163\x2a\50\134\x64\53\x29\160\x78\x3b\x7c\x28\150\145\151\x67\150\x74\x29\72\134\163\x2a\50\x5c\x64\x2b\51\x70\x78\x3b\57", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto qcssigmcayuyweiy; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = ManipulateArray::get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = ManipulateArray::get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; quamuugoocyyceec: } wwcqoeuwskquakwy: $qeswwaqqsyymqawg = ManipulateArray::get($meyiiwcswqmuggyg, self::qomookamaskuoswk, 0); $cswemwoyesycwkuq = ManipulateArray::get($meyiiwcswqmuggyg, self::sogmkkcwuamuqegw, 0); qcssigmcayuyweiy: iymaiwqimisgacmk: goto qyyyycwaookqaoke; mugscgugcogcasue: $qeswwaqqsyymqawg = ManipulateArray::get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = ManipulateArray::get($wyicceigkekkkwgs, 1); qyyyycwaookqaoke: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto ssywsaaqqaucesau; } DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, self::qomookamaskuoswk, $qeswwaqqsyymqawg); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, self::sogmkkcwuamuqegw, $cswemwoyesycwkuq); ssywsaaqqaucesau: ygcgoaokauigwuus: return $ymyisaeksssueeik; }, false, true); ysiqakyaiooyscwy: auumaoycmsmsgigs: return $moooemyaqewumiay; } }
