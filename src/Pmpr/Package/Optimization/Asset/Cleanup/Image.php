<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0278673873             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Cleanup; use DOMElement; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Asset\Setting; class Image extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\x5f\150\145\x61\x64", [$this, "\153\x63\157\153\155\163\x6d\x6b\x75\153\x6b\x71\151\x6d\x69\161"])->qcsmikeggeemccuu("\141\144\x6d\x69\156\137\x68\x65\141\x64", [$this, "\x6b\143\x6f\153\x6d\163\x6d\153\x75\x6b\x6b\161\x69\155\x69\161"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x62\x75\x66\146\145\x72\137\x70\x72\x6f\x63\145\x73\163"), [$this, "\171\167\x6d\x6b\153\x69\157\x6f\x61\155\x75\151\167\x67\x6f\151"]); parent::kgquecmsgcouyaya(); } public function kcokmsmkukkqimiq() { if (!(!DecoratorOption::get("\163\x69\x74\x65\x5f\x69\x63\x6f\156", false) && $this->weysguygiseoukqw(Setting::ADD_BLANK_FAVICON))) { goto wycmcqaauqkgegau; } ManipulateHTML::awwqwouuoioauoaw("\x6c\151\156\153", ["\x68\x72\145\146" => "\x64\141\164\141\72\x69\155\x61\147\x65\57\170\55\151\x63\x6f\156\x3b\142\x61\x73\145\66\x34\54\151\126\102\117\122\167\60\113\x47\147\157\x41\101\x41\x41\x4e\123\125\x68\x45\x55\x67\101\x41\x41\102\x41\101\101\101\101\121\x45\101\131\101\x41\101\x42\x50\131\171\115\x69\x41\x41\101\x41\x42\155\x4a\114\122\60\124\x2f\57\x2f\57\57\57\57\x38\x4a\x57\x50\x66\143\x41\x41\101\x41\103\x58\x42\111\127\x58\115\101\101\101\x42\x49\x41\x41\101\x41\x53\x41\102\x47\x79\127\x73\x2b\x41\101\101\101\106\60\154\x45\x51\126\122\111\170\62\116\147\107\101\x57\152\131\102\x53\115\x67\x6c\105\x77\103\153\x62\x42\x53\101\143\x41\x43\102\101\101\101\x65\141\x52\x39\x63\x49\101\x41\101\101\x41\123\125\x56\x4f\122\x4b\65\x43\x59\111\x49\x3d", "\162\145\154" => "\151\143\157\x6e", "\164\171\x70\145" => "\x69\x6d\x61\x67\x65\57\170\x2d\151\x63\157\x6e"]); wycmcqaauqkgegau: } public function ywmkkiooamuiwgoi(?string $moooemyaqewumiay) : ?string { if (!$this->weysguygiseoukqw(Setting::SPECIFY_DIMENSIONS)) { goto owaimkmgemoqewmm; } $yuumukkaswwoywya = "\151\x6d\147\72\156\x6f\x74\50\x5b\167\x69\144\164\150\x5d\x29\72\156\157\164\50\133\x68\x65\151\147\150\x74\135\51"; if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto eoeiaccouaymakgm; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik, $kasgukgceywckyou) { if (!(!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\x74\141\55\x6c\141\172\x79\x2d\157\162\151\x67\151\x6e\141\154") && !DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\x74\141\x2d\x6e\x6f\55\151\155\x61\147\x65\55\x64\151\x6d\x65\x6e\x73\x69\157\156\163"))) { goto yggciikgkomgeqsc; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x72\143"); $yiasugywggckywoa = wp_parse_url($egsumesakcaaukem); if (!$this->aoaeiwswyagmesku($egsumesakcaaukem)) { goto wcekgciqeggiiwgk; } if (!(ini_get("\x61\x6c\x6c\x6f\x77\x5f\165\162\x6c\x5f\x66\x6f\x70\x65\x6e") && $this->weysguygiseoukqw(Setting::IMAGE_EXTERNAL_SPECIFY_DIMENSIONS))) { goto iyceygqsmokgmams; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\163\x63\x68\145\155\x65"] . "\72\57\57" . $yiasugywggckywoa["\x68\x6f\163\x74"] . $yiasugywggckywoa["\160\141\164\150"]); iyceygqsmokgmams: goto gkwuewqmqeswqukg; wcekgciqeggiiwgk: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa["\x70\x61\164\x68"]; if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto qcweoyigoaeacsow; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); qcweoyigoaeacsow: gkwuewqmqeswqukg: $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto uamuuwkyuqomqyuy; } if (!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, "\163\164\x79\154\x65")) { goto kkmwwqyesmkescyg; } $kswaimykcacqyaay = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\164\171\154\x65"); if (!preg_match_all("\x2f\50\x77\x69\x64\x74\150\51\x3a\134\163\52\50\x5c\144\53\x29\x70\170\x3b\174\50\x68\x65\151\147\150\164\x29\72\134\x73\x2a\x28\134\x64\53\x29\160\170\x3b\57", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto yeiokcoikcysyimu; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = ManipulateArray::get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = ManipulateArray::get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; uqcwyyiykmwygeau: } sagemooicmgceiug: $qeswwaqqsyymqawg = ManipulateArray::get($meyiiwcswqmuggyg, "\x77\x69\144\164\150", 0); $cswemwoyesycwkuq = ManipulateArray::get($meyiiwcswqmuggyg, "\150\x65\x69\147\150\x74", 0); yeiokcoikcysyimu: kkmwwqyesmkescyg: goto ekwuycsiuqwycqea; uamuuwkyuqomqyuy: $qeswwaqqsyymqawg = ManipulateArray::get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = ManipulateArray::get($wyicceigkekkkwgs, 1); ekwuycsiuqwycqea: if ($qeswwaqqsyymqawg && $cswemwoyesycwkuq) { goto iyaugygcsmqqqkmo; } $this->oaumimwssciwumys("\143\141\156\40\x6e\157\164\40\146\157\x75\156\x64\40\167\151\x64\x74\x68\x20\141\x6e\x64\40\150\145\151\x67\x68\x74\x20\164\157\x20\x73\160\145\143\x69\146\171\40\x69\x6e\40\151\x6d\141\147\x65\56"); goto cieumoqayigkoocy; iyaugygcsmqqqkmo: DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\x77\151\144\164\x68", $qeswwaqqsyymqawg); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\x68\x65\x69\147\150\164", $cswemwoyesycwkuq); cieumoqayigkoocy: yggciikgkomgeqsc: return $ymyisaeksssueeik; }, false, true); eoeiaccouaymakgm: owaimkmgemoqewmm: return $moooemyaqewumiay; } }
