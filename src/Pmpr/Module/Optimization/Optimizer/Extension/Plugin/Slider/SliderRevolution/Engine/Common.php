<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b73dc7163             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\SliderRevolution\Engine; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use RevSliderFunctions; use RevSliderSlide; use RevSliderSlider; abstract class Common extends Container { const gwcwicqkomiaaqwm = "\123\x52\67"; const csiimaowugwesqke = "\123\x52\66"; protected $useMultiple = []; protected array $multiple = []; protected string $type = ''; protected $sliderID = 0; protected array $breakpoints = []; protected ?RevSliderSlider $slider = null; public function maqaiymckiuukses($wwqymgsmqsouaoos, string $goqqimcssiyagkwy) { $emkaqwyswammaako = [Constants::mcaucuyeeiwsmmuy => [self::csiimaowugwesqke => "\144", self::gwcwicqkomiaaqwm => 1, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 1240], Constants::ssgmqmkaaguimasg => [self::csiimaowugwesqke => "\x6e", self::gwcwicqkomiaaqwm => 2, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 1024], Constants::oceskmgmuoseisoq => [self::csiimaowugwesqke => "\x74", self::gwcwicqkomiaaqwm => 3, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 778], Constants::skogicecygyyskkq => [self::csiimaowugwesqke => "\x6d", self::gwcwicqkomiaaqwm => 4, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 480]]; $cucuuiomouyeowaa = new RevSliderFunctions(); $kkyamqaagismicwk = $cucuuiomouyeowaa->get_global_settings(); if (self::gwcwicqkomiaaqwm === $goqqimcssiyagkwy && !empty($wwqymgsmqsouaoos->slider_v7)) { $this->slider = $wwqymgsmqsouaoos->slider_v7; } else { if (self::csiimaowugwesqke === $goqqimcssiyagkwy) { $this->slider = $wwqymgsmqsouaoos->slider; } } foreach ($emkaqwyswammaako as $ymqmyyeuycgmigyo => $gcgsqcoqciockquc) { $eqgoocgaqwqcimie = (int) $cucuuiomouyeowaa->get_val($kkyamqaagismicwk, [Constants::waguuiqqgsysuukq, $ymqmyyeuycgmigyo], $gcgsqcoqciockquc[Constants::wikgqsqysyuoykse]); $this->breakpoints[$gcgsqcoqciockquc[$goqqimcssiyagkwy]] = $eqgoocgaqwqcimie; } } public function suceocykemwuyiyg($wwqymgsmqsouaoos) { $nsmgceoqaqogqmuw = $kswaimykcacqyaay = ''; if ($aimmgaceygcsoowq = $this->slider) { $this->sliderID = $wwqymgsmqsouaoos->get_html_id(); $qiqeekyyamqqwgyy = null; foreach ($aimmgaceygcsoowq->slides as $ocouqoqqcgauwkuq) { if ($ocouqoqqcgauwkuq instanceof RevSliderSlide) { if ("\165\156\x70\165\x62\154\x69\163\150\145\144" !== $ocouqoqqcgauwkuq->get_param(["\160\165\142\154\151\x73\x68", "\163\x74\x61\x74\145"])) { $qiqeekyyamqqwgyy = $ocouqoqqcgauwkuq; break; } } } if ($qiqeekyyamqqwgyy) { $wyumyomqwssswwyk = $ykwokoiuukogqgqs = ''; $this->qiccuiwooiquycsg(); $gkgeoauskcqaemye = $qiqeekyyamqqwgyy->emwyamaoaommokai(); foreach ($gkgeoauskcqaemye as $weyumiemecumqwiy) { if (!$this->ywogaocmueoimkuq($weyumiemecumqwiy)) { [$cmwgmqgicwcmsuec, $geaaqoqwaskmcycg] = $this->aaqmykiemciywigu($weyumiemecumqwiy); $wyumyomqwssswwyk .= $cmwgmqgicwcmsuec; $ykwokoiuukogqgqs .= $geaaqoqwaskmcycg; } } $maiscoecwcomqack = $this->gqkyomsuwooussyk($qiqeekyyamqqwgyy); $umegawicsoqusacm = $this->aaqmykiemciywigu($maiscoecwcomqack); [$nsmgceoqaqogqmuw, $kswaimykcacqyaay] = $this->cugysyiguwuyagco($wyumyomqwssswwyk, $ykwokoiuukogqgqs, $umegawicsoqusacm); } } return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } public function cugysyiguwuyagco($wyumyomqwssswwyk, $ykwokoiuukogqgqs, $maiscoecwcomqack = null) : array { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $kswaimykcacqyaay = $ykwokoiuukogqgqs; $ykkwecqcmogeaqwc = $swqimwqeweekeusq->uuccukgasskgimsq("\x70\162\x2d\x73\143", [], $wyumyomqwssswwyk); if ($maiscoecwcomqack) { $kswaimykcacqyaay .= $maiscoecwcomqack[1]; $ykkwecqcmogeaqwc .= $maiscoecwcomqack[0]; } $eyagkkkqkwcuygso = $this->slider->get_params(); foreach ($this->breakpoints as $yqyousioqsoaouig => $ycuyiqagsmgikago) { if ($this->ammywaiaowqmcssa($yqyousioqsoaouig)) { $uoomaookgsyciacm = $this->yawwsmagaweysggs($yqyousioqsoaouig); [$eygasqqkgouqiuqk, $gyquugwkmmgwmkki] = $this->gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig); $eygasqqkgouqiuqk = $this->iumqmcessgoqomqu($eygasqqkgouqiuqk); $gyquugwkmmgwmkki = $this->iumqmcessgoqomqu($gyquugwkmmgwmkki); $okisissiiqkmgmca = $eygasqqkgouqiuqk; $okisissiiqkmgmca["\160\157\x73\x69\164\x69\157\156"] = "\162\x65\154\141\x74\x69\x76\145"; $kswaimykcacqyaay .= $this->yqacumgcswgcesyq($uoomaookgsyciacm, $this->ycgswoucgcsukwaq($eygasqqkgouqiuqk, "\160\x72\55\163") . $this->ycgswoucgcsukwaq($gyquugwkmmgwmkki, "\x70\162\55\163\x63") . $this->ycgswoucgcsukwaq($okisissiiqkmgmca)); } } $kswaimykcacqyaay .= $this->ycgswoucgcsukwaq(["\x66\x6f\x6e\164" => "\156\x6f\162\155\x61\x6c\40\x6e\157\162\x6d\141\x6c\40\x6e\157\162\x6d\141\x6c\40\61\x34\160\170\x2f\x31\40\106\157\156\x74\x41\167\x65\x73\157\155\145"], "\x69\133\x63\x6c\141\163\x73\x5e\x3d\42\146\x61\x2d\x22\135"); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->uuccukgasskgimsq("\160\162\x2d\x73", ["\144\x61\x74\141\x2d\151\x64" => $this->slider->get_id(), "\x64\141\x74\x61\x2d\x74\x79\x70\145" => $this->type, Constants::gouqcwikiiygyasc => $this->sliderID], $ykkwecqcmogeaqwc); return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } protected function aaqmykiemciywigu(array $weyumiemecumqwiy) : array { $kswaimykcacqyaay = $nsmgceoqaqogqmuw = ''; if (isset($weyumiemecumqwiy[Constants::squoamkioomemiyi])) { $sqeykgyoooqysmca = $weyumiemecumqwiy[Constants::squoamkioomemiyi]; $aokagokqyuysuksm = $sqeykgyoooqysmca . $this->tsioiooeoyeieqye($weyumiemecumqwiy); $wwgucssaecqekuek = []; $kqywgoqsmuswammk = "\x70\x72\55{$sqeykgyoooqysmca}"; $yuumukkaswwoywya = "{$kqywgoqsmuswammk}\43{$aokagokqyuysuksm}"; $ewgwqamkygiqaawc = $this->yiiekkiwayooaqiy($weyumiemecumqwiy); foreach ($this->breakpoints as $yqyousioqsoaouig => $ycuyiqagsmgikago) { if ($this->ammywaiaowqmcssa($yqyousioqsoaouig)) { $uoomaookgsyciacm = $this->yawwsmagaweysggs($yqyousioqsoaouig); $egkakcquemweqoum = $this->ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig); $egkakcquemweqoum = $this->iumqmcessgoqomqu($egkakcquemweqoum); $kswaimykcacqyaay .= $this->yqacumgcswgcesyq($uoomaookgsyciacm, $this->ycgswoucgcsukwaq($egkakcquemweqoum, $yuumukkaswwoywya)); } } $wwgucssaecqekuek[Constants::gouqcwikiiygyasc] = $aokagokqyuysuksm; $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq($kqywgoqsmuswammk, $wwgucssaecqekuek, $ewgwqamkygiqaawc); } return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } protected function yawwsmagaweysggs($momcykaoccoymeig) { $uoomaookgsyciacm = []; $ycuyiqagsmgikago = $this->breakpoints[$momcykaoccoymeig]; switch ($momcykaoccoymeig) { case "\144": case 1: $uoomaookgsyciacm["\x6d\x69\156\x2d\x77\x69\144\164\x68"] = $this->uaskqakcsowgmccg($momcykaoccoymeig); break; case "\x6e": case "\164": case 2: case 3: $uoomaookgsyciacm["\155\141\x78\55\x77\x69\x64\164\150"] = $ycuyiqagsmgikago - 1; $uoomaookgsyciacm["\155\x69\x6e\x2d\x77\151\144\164\x68"] = $this->uaskqakcsowgmccg($momcykaoccoymeig); break; case "\x6d": case 4: $uoomaookgsyciacm["\x6d\x61\170\x2d\x77\x69\x64\x74\x68"] = $ycuyiqagsmgikago; break; } return $uoomaookgsyciacm; } protected function yqacumgcswgcesyq(array $uoomaookgsyciacm, string $ekuqiqmikiicgoss) : string { $wocwawaaemuoqmig = ''; $geqcesmqwkeayoiu = "\40\141\x6e\144\x20"; foreach ($uoomaookgsyciacm as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { $wocwawaaemuoqmig .= "\x28{$oaukocmsckciqaok}\72\x20{$eqgoocgaqwqcimie}\x70\x78\51{$geqcesmqwkeayoiu}"; } $wocwawaaemuoqmig = rtrim($wocwawaaemuoqmig, $geqcesmqwkeayoiu); return PHP_EOL . "\x40\x6d\x65\144\x69\x61\x20{$wocwawaaemuoqmig}\x20\173{$ekuqiqmikiicgoss}\175"; } protected function ycgswoucgcsukwaq(array $egkakcquemweqoum = [], string $yuumukkaswwoywya = '') : string { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sawckkwcugsmokmi("\160\x72\x2d\163\x77\43\x70\162\x5f{$this->sliderID}\x20{$yuumukkaswwoywya}", $egkakcquemweqoum); } protected function iumqmcessgoqomqu(array $egkakcquemweqoum) : array { foreach ($egkakcquemweqoum as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { $egkakcquemweqoum[$oaukocmsckciqaok] = $this->awkcisaoyasicqwq($oaukocmsckciqaok, $eqgoocgaqwqcimie); } return array_filter($egkakcquemweqoum); } protected function awkcisaoyasicqwq($oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (in_array($eqgoocgaqwqcimie, ["\156\x6f\x6e\145", "\x23\141"])) { return ''; } switch ($oaukocmsckciqaok) { case "\142\141\x63\153\x67\x72\157\165\x6e\144\55\x72\145\160\x65\141\164": if (!$eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = "\156\x6f\55\x72\145\160\x65\x61\164"; } break; case "\x74\x6f\x70": case "\154\145\x66\164": case "\x72\x69\147\x68\164": case "\x77\151\144\x74\x68": case "\x68\x65\x69\147\x68\x74": case "\x66\157\x6e\164\55\163\151\x7a\145": case "\155\151\x6e\55\x77\151\x64\164\x68": case "\x6d\151\x6e\55\150\x65\x69\x67\x68\x74": case "\x6d\141\x78\55\x68\145\x69\x67\150\164": case "\164\x72\x61\156\163\x6c\141\164\x65\130": case "\x74\x72\x61\x6e\163\x6c\x61\164\x65\x59": case "\154\x69\x6e\145\55\150\145\x69\147\x68\164": case "\154\145\x74\164\x65\162\55\163\x70\x61\143\151\x6e\x67": if (is_numeric($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie .= "\x70\x78"; } break; case "\142\x61\143\x6b\147\162\x6f\x75\156\144": case "\x62\141\x63\153\147\x72\157\x75\156\x64\55\x69\155\x61\x67\145": if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = "\x75\162\154\50\47{$eqgoocgaqwqcimie}\x27\x29"; } break; } return $eqgoocgaqwqcimie; } protected function syckcsgsmwciwyyw($amakmumgguksgmum, $mkomwsiykqigmqca, $yqyousioqsoaouig = null, $ggauoeuaesiymgee = null, bool $eswoackiciccgasc = true) { $ymkqyawksmqcgsei = explode("\x2e", $mkomwsiykqigmqca); $eqgoocgaqwqcimie = $amakmumgguksgmum; foreach ($ymkqyawksmqcgsei as $agywggmyywaimwuy) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$agywggmyywaimwuy] ?? null; if (!$eqgoocgaqwqcimie) { break; } } $ekiuyucoiagmscgy = null; if ($eswoackiciccgasc && isset($this->useMultiple[$mkomwsiykqigmqca])) { $ekiuyucoiagmscgy = $this->useMultiple[$mkomwsiykqigmqca]; $eswoackiciccgasc = true; } else { $eswoackiciccgasc = false; } if (null !== $eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $this->usywmiiwiggsyium($mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig); $uwoyyuqywiwueaso = (float) $eqgoocgaqwqcimie; if ($uwoyyuqywiwueaso && !is_array($eqgoocgaqwqcimie) && $eswoackiciccgasc) { if ($this->qgwuyeagygomiiks(0) !== $yqyousioqsoaouig) { $uooewkwiswcwggao = $this->breakpoints[$yqyousioqsoaouig] ?? 1; $eqgoocgaqwqcimie = "\x63\x61\154\143\50\50\x31\x30\x30\x76\x77\x20\x2f\40{$uooewkwiswcwggao}\51\40\x2a\40{$uwoyyuqywiwueaso}\51"; } } if (null === $eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } } else { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } return $eqgoocgaqwqcimie; } public function kegiemoekkccwkoa($egkakcquemweqoum, $iegmsyuiekaayqqy, $ymsweociooeskgwg, $ywcogicgakiqmesa, $uyyeawaokwsoigkk) { $egwaeiwuwuakeugo = in_array($ywcogicgakiqmesa, ["\155\x69\144\x64\x6c\x65", "\x63\x65\x6e\164\x65\162"], true); $auiemywmioieumqi = in_array($uyyeawaokwsoigkk, ["\x6d\151\144\x64\154\x65", "\x63\x65\x6e\x74\145\x72"], true); if ($iegmsyuiekaayqqy && $ymsweociooeskgwg) { $rqeoqqgeggasimwi = $egkakcquemweqoum["\164\x72\x61\156\x73\x66\x6f\x72\x6d"] ?? ''; if ($iegmsyuiekaayqqy === "\141\x75\x74\x6f" && $ymsweociooeskgwg === "\x61\165\x74\157") { if ($egwaeiwuwuakeugo && $auiemywmioieumqi) { $egkakcquemweqoum["\164\x6f\160"] = "\x35\x30\x25"; $egkakcquemweqoum["\x6c\x65\x66\164"] = "\x35\x30\x25"; $rqeoqqgeggasimwi = "\164\x72\x61\156\x73\x6c\x61\164\x65\x28\55\65\60\x25\x2c\40\x2d\x35\x30\45\x29\40{$rqeoqqgeggasimwi}"; } else { if ($egwaeiwuwuakeugo) { $egkakcquemweqoum["\164\x6f\x70"] = "\65\x30\45"; $rqeoqqgeggasimwi = "\164\x72\141\156\163\154\141\x74\x65\x59\x28\x2d\x35\60\45\51\40{$rqeoqqgeggasimwi}"; } else { $egkakcquemweqoum[$ywcogicgakiqmesa] = "\60\x70\170"; } if ($auiemywmioieumqi) { $egkakcquemweqoum["\154\145\x66\x74"] = "\x35\x30\x25"; $rqeoqqgeggasimwi = "\x74\x72\x61\156\163\x6c\141\164\145\x58\50\x2d\65\x30\x25\51\40{$rqeoqqgeggasimwi}"; } else { $egkakcquemweqoum[$uyyeawaokwsoigkk] = "\60\160\x78"; } } } else { $mcmaiqckgiuqayau = ''; $kweggiqywassoewa = "\x30\160\x78"; $lwqumgsaiiooowqw = "\x30\160\x78"; if ($egwaeiwuwuakeugo && $auiemywmioieumqi) { $mcmaiqckgiuqayau = "\x74\x72\141\156\x73\154\141\164\x65\50\55\65\60\x25\x2c\x20\x2d\65\60\x25\51"; $kweggiqywassoewa = "\x35\60\45"; $lwqumgsaiiooowqw = "\65\x30\x25"; } else { if ($egwaeiwuwuakeugo) { $kweggiqywassoewa = "\x35\60\x25"; $mcmaiqckgiuqayau = "\x74\x72\x61\x6e\163\x6c\x61\x74\x65\131\50\55\x35\60\45\x29"; } if ($auiemywmioieumqi) { $lwqumgsaiiooowqw = "\x35\60\x25"; $mcmaiqckgiuqayau = "\164\x72\141\156\163\154\141\x74\x65\130\50\x2d\65\60\45\x29"; } } if ($egwaeiwuwuakeugo) { $ywcogicgakiqmesa = "\164\157\x70"; } if ($auiemywmioieumqi) { $uyyeawaokwsoigkk = "\x6c\145\x66\164"; } if ($ywcogicgakiqmesa === "\142\x6f\x74\x74\x6f\155") { $ymsweociooeskgwg = (int) $ymsweociooeskgwg * -1 . "\x70\x78"; } if ($uyyeawaokwsoigkk === "\162\x69\147\150\x74") { $iegmsyuiekaayqqy = (int) $iegmsyuiekaayqqy * -1 . "\160\170"; } $egkakcquemweqoum[$ywcogicgakiqmesa] = $kweggiqywassoewa; $egkakcquemweqoum[$uyyeawaokwsoigkk] = $lwqumgsaiiooowqw; if ($iegmsyuiekaayqqy === "\x61\165\164\157") { $iegmsyuiekaayqqy = "\x30"; } if ($ymsweociooeskgwg === "\x61\165\164\x6f") { $ymsweociooeskgwg = "\60"; } $iegmsyuiekaayqqy = $this->awkcisaoyasicqwq("\x74\162\x61\156\x73\154\141\x74\145\x58", $iegmsyuiekaayqqy); $ymsweociooeskgwg = $this->awkcisaoyasicqwq("\164\162\x61\x6e\163\x6c\x61\164\x65\x59", $ymsweociooeskgwg); $rqeoqqgeggasimwi = "{$mcmaiqckgiuqayau}\x20\x74\162\x61\x6e\x73\154\141\x74\x65\130\x28{$iegmsyuiekaayqqy}\x29\40\164\162\x61\x6e\163\x6c\x61\x74\x65\x59\50{$ymsweociooeskgwg}\x29\x20{$rqeoqqgeggasimwi}"; } $egkakcquemweqoum["\x74\x72\141\x6e\163\146\157\162\x6d"] = $rqeoqqgeggasimwi; } return $egkakcquemweqoum; } private function sywoiecuewkusuei($yqyousioqsoaouig) : float { if (null === $yqyousioqsoaouig) { return 1; } if (!isset($this->multiple[$yqyousioqsoaouig])) { $kkikuskasemkcygg = 1; if ($oaesoigqgysugcsw = $this->wemcakmkkqkoyeow($yqyousioqsoaouig)) { $kkikuskasemkcygg = min(1, $oaesoigqgysugcsw / $this->breakpoints[$yqyousioqsoaouig] ?? 1); } $this->multiple[$yqyousioqsoaouig] = $kkikuskasemkcygg; } return $this->multiple[$yqyousioqsoaouig]; } protected function wemcakmkkqkoyeow($yqyousioqsoaouig, int $ggauoeuaesiymgee = 0) : int { $uoegiucegiomamuy = $this->contentSize["\167\x69\x64\x74\x68"][$yqyousioqsoaouig] ?? $ggauoeuaesiymgee; $migimkookwymayqu = $this->contentSize["\x77\151\x64\164\150"][$this->qgwuyeagygomiiks(0)] ?? $ggauoeuaesiymgee; return (int) min($migimkookwymayqu, $uoegiucegiomamuy); } protected function gauiuwiicosisakg($yqyousioqsoaouig, $ggauoeuaesiymgee = 0) : int { $aiyckuicisckwges = $this->contentSize["\x68\x65\x69\x67\x68\x74"][$yqyousioqsoaouig] ?? $ggauoeuaesiymgee; $uumegessqcyuayoy = $this->contentSize["\x68\145\x69\147\150\164"][$this->qgwuyeagygomiiks(0)] ?? $ggauoeuaesiymgee; return (int) min($uumegessqcyuayoy, $aiyckuicisckwges); } protected function cogayqawswyasksk($eqgoocgaqwqcimie) : string { $iyqygqimawuycsyq = ''; if (is_string($eqgoocgaqwqcimie)) { if (preg_match("\x2f\x28\x70\x78\x7c\x72\x65\155\174\x65\155\174\45\x7c\x76\150\174\166\x77\x7c\x76\x6d\151\156\x7c\166\x6d\x61\x78\174\x61\x75\164\157\51\44\57", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { $iyqygqimawuycsyq = $meyiiwcswqmuggyg[0]; } if ($iyqygqimawuycsyq === $eqgoocgaqwqcimie) { $iyqygqimawuycsyq = ''; } } return $iyqygqimawuycsyq; } protected function ooeaouwceyecskck($equckmqsamsmgcwy, $eqgoocgaqwqcimie, $eusockqasqqmoess, $ekiuyucoiagmscgy = null) { if ($eqgoocgaqwqcimie) { $iyqygqimawuycsyq = $this->cogayqawswyasksk($equckmqsamsmgcwy); if ($eusockqasqqmoess !== 1 && $iyqygqimawuycsyq !== "\45") { $eqgoocgaqwqcimie *= $eusockqasqqmoess; } if (is_callable($ekiuyucoiagmscgy)) { $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie); } $eqgoocgaqwqcimie = (float) $eqgoocgaqwqcimie . $iyqygqimawuycsyq; } return $eqgoocgaqwqcimie; } protected function qgwuyeagygomiiks($momcykaoccoymeig, string $kuuiuigeacouwmaa = '') { $yygmoeguaqyumuui = array_keys($this->breakpoints); $eqgoocgaqwqcimie = $yygmoeguaqyumuui[$momcykaoccoymeig] ?? null; if ($eqgoocgaqwqcimie === null) { $eqgoocgaqwqcimie = $momcykaoccoymeig; } $mcmggciwccagmumi = array_search($eqgoocgaqwqcimie, $yygmoeguaqyumuui, true); $acuayeeoiwokyomo = 0; switch ($kuuiuigeacouwmaa) { case "\160\x72\145\166": $acuayeeoiwokyomo = -1; break; case "\x6e\x65\170\164": $acuayeeoiwokyomo = 1; break; } return $yygmoeguaqyumuui[$mcmggciwccagmumi + $acuayeeoiwokyomo] ?? null; } protected function ammywaiaowqmcssa($yqyousioqsoaouig) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($eiicaiwgqkgsekce->amkiaqeamgywsygm() && in_array($yqyousioqsoaouig, [4, "\x34", "\155"], true)) { return true; } else { if (!$eiicaiwgqkgsekce->amkiaqeamgywsygm()) { return true; } } return false; } protected abstract function tsioiooeoyeieqye(array $weyumiemecumqwiy) : string; protected abstract function yqooukeogwwoqeau($weyumiemecumqwiy, $mkomwsiykqigmqca, $yqyousioqsoaouig = null) : string; protected abstract function uaskqakcsowgmccg($momcykaoccoymeig); protected abstract function wgogsacggwigyuee($momcykaoccoymeig); protected abstract function yiiekkiwayooaqiy($weyumiemecumqwiy) : string; protected abstract function gqkyomsuwooussyk($ocouqoqqcgauwkuq) : array; protected abstract function ywogaocmueoimkuq($weyumiemecumqwiy) : bool; protected abstract function qooeaookuemoqecm($eqgoocgaqwqcimie, ?string $uusmaiomayssaecw = null); protected abstract function euisqgeeigoksqui($eqgoocgaqwqcimie, $yqyousioqsoaouig) : bool; protected abstract function usywmiiwiggsyium(string $mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig); protected abstract function ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig) : array; protected abstract function gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig) : array; }
