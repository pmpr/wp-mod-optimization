<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757f1c60b0e8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\SliderRevolution\Engine; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use RevSliderFunctions; use RevSliderSlide; use RevSliderSlider; abstract class Common extends Container { const gwcwicqkomiaaqwm = "\123\x52\x37"; const csiimaowugwesqke = "\x53\122\x36"; protected $useMultiple = []; protected array $multiple = []; protected string $type = ''; protected $sliderID = 0; protected array $breakpoints = []; protected ?RevSliderSlider $slider = null; public function maqaiymckiuukses($wwqymgsmqsouaoos, string $goqqimcssiyagkwy) { $emkaqwyswammaako = [Constants::mcaucuyeeiwsmmuy => [self::csiimaowugwesqke => "\144", self::gwcwicqkomiaaqwm => 1, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 1240], Constants::ssgmqmkaaguimasg => [self::csiimaowugwesqke => "\x6e", self::gwcwicqkomiaaqwm => 2, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 1024], Constants::oceskmgmuoseisoq => [self::csiimaowugwesqke => "\x74", self::gwcwicqkomiaaqwm => 3, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 778], Constants::skogicecygyyskkq => [self::csiimaowugwesqke => "\x6d", self::gwcwicqkomiaaqwm => 4, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 480]]; $cucuuiomouyeowaa = new RevSliderFunctions(); $kkyamqaagismicwk = $cucuuiomouyeowaa->get_global_settings(); if (self::gwcwicqkomiaaqwm === $goqqimcssiyagkwy && !empty($wwqymgsmqsouaoos->slider_v7)) { $this->slider = $wwqymgsmqsouaoos->slider_v7; } else { if (self::csiimaowugwesqke === $goqqimcssiyagkwy) { $this->slider = $wwqymgsmqsouaoos->slider; } } foreach ($emkaqwyswammaako as $ymqmyyeuycgmigyo => $gcgsqcoqciockquc) { $eqgoocgaqwqcimie = (int) $cucuuiomouyeowaa->get_val($kkyamqaagismicwk, [Constants::waguuiqqgsysuukq, $ymqmyyeuycgmigyo], $gcgsqcoqciockquc[Constants::wikgqsqysyuoykse]); $this->breakpoints[$gcgsqcoqciockquc[$goqqimcssiyagkwy]] = $eqgoocgaqwqcimie; } } public function suceocykemwuyiyg($wwqymgsmqsouaoos) { $nsmgceoqaqogqmuw = $kswaimykcacqyaay = ''; if ($aimmgaceygcsoowq = $this->slider) { $this->sliderID = $wwqymgsmqsouaoos->get_html_id(); $qiqeekyyamqqwgyy = null; foreach ($aimmgaceygcsoowq->slides as $ocouqoqqcgauwkuq) { if ($ocouqoqqcgauwkuq instanceof RevSliderSlide) { if ("\165\156\x70\165\x62\154\151\x73\150\145\144" !== $ocouqoqqcgauwkuq->get_param(["\160\x75\x62\x6c\x69\163\150", "\x73\x74\x61\x74\x65"])) { $qiqeekyyamqqwgyy = $ocouqoqqcgauwkuq; break; } } } if ($qiqeekyyamqqwgyy) { $wyumyomqwssswwyk = $ykwokoiuukogqgqs = ''; $this->qiccuiwooiquycsg(); $gkgeoauskcqaemye = $qiqeekyyamqqwgyy->emwyamaoaommokai(); foreach ($gkgeoauskcqaemye as $weyumiemecumqwiy) { if (!$this->ywogaocmueoimkuq($weyumiemecumqwiy)) { [$cmwgmqgicwcmsuec, $geaaqoqwaskmcycg] = $this->aaqmykiemciywigu($weyumiemecumqwiy); $wyumyomqwssswwyk .= $cmwgmqgicwcmsuec; $ykwokoiuukogqgqs .= $geaaqoqwaskmcycg; } } $maiscoecwcomqack = $this->gqkyomsuwooussyk($qiqeekyyamqqwgyy); $umegawicsoqusacm = $this->aaqmykiemciywigu($maiscoecwcomqack); [$nsmgceoqaqogqmuw, $kswaimykcacqyaay] = $this->cugysyiguwuyagco($wyumyomqwssswwyk, $ykwokoiuukogqgqs, $umegawicsoqusacm); } } return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } public function cugysyiguwuyagco($wyumyomqwssswwyk, $ykwokoiuukogqgqs, $maiscoecwcomqack = null) : array { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $kswaimykcacqyaay = $ykwokoiuukogqgqs; $ykkwecqcmogeaqwc = $swqimwqeweekeusq->uuccukgasskgimsq("\x70\162\55\163\143", [], $wyumyomqwssswwyk); if ($maiscoecwcomqack) { $kswaimykcacqyaay .= $maiscoecwcomqack[1]; $ykkwecqcmogeaqwc .= $maiscoecwcomqack[0]; } $eyagkkkqkwcuygso = $this->slider->get_params(); foreach ($this->breakpoints as $yqyousioqsoaouig => $ycuyiqagsmgikago) { if ($this->ammywaiaowqmcssa($yqyousioqsoaouig)) { $uoomaookgsyciacm = $this->yawwsmagaweysggs($yqyousioqsoaouig); [$eygasqqkgouqiuqk, $gyquugwkmmgwmkki] = $this->gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig); $eygasqqkgouqiuqk = $this->iumqmcessgoqomqu($eygasqqkgouqiuqk); $gyquugwkmmgwmkki = $this->iumqmcessgoqomqu($gyquugwkmmgwmkki); $okisissiiqkmgmca = $eygasqqkgouqiuqk; $okisissiiqkmgmca["\x70\157\163\151\164\151\157\x6e"] = "\x72\x65\x6c\x61\x74\151\x76\x65"; $kswaimykcacqyaay .= $this->yqacumgcswgcesyq($uoomaookgsyciacm, $this->ycgswoucgcsukwaq($eygasqqkgouqiuqk, "\x70\162\x2d\x73") . $this->ycgswoucgcsukwaq($gyquugwkmmgwmkki, "\160\162\x2d\163\x63") . $this->ycgswoucgcsukwaq($okisissiiqkmgmca)); } } $kswaimykcacqyaay .= $this->ycgswoucgcsukwaq(["\x66\x6f\x6e\164" => "\156\x6f\162\155\141\154\40\156\x6f\x72\155\x61\154\40\x6e\157\x72\x6d\141\x6c\40\61\64\x70\170\57\61\x20\106\x6f\156\x74\101\167\x65\x73\x6f\155\x65"], "\x69\x5b\143\x6c\x61\x73\163\136\x3d\42\x66\x61\55\x22\135"); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->uuccukgasskgimsq("\x70\162\55\x73", ["\x64\141\164\x61\x2d\x69\x64" => $this->slider->get_id(), "\144\x61\164\x61\55\164\171\160\145" => $this->type, Constants::gouqcwikiiygyasc => $this->sliderID], $ykkwecqcmogeaqwc); return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } protected function aaqmykiemciywigu(array $weyumiemecumqwiy) : array { $kswaimykcacqyaay = $nsmgceoqaqogqmuw = ''; if (isset($weyumiemecumqwiy[Constants::squoamkioomemiyi])) { $sqeykgyoooqysmca = $weyumiemecumqwiy[Constants::squoamkioomemiyi]; $aokagokqyuysuksm = $sqeykgyoooqysmca . $this->tsioiooeoyeieqye($weyumiemecumqwiy); $wwgucssaecqekuek = []; $kqywgoqsmuswammk = "\160\x72\55{$sqeykgyoooqysmca}"; $yuumukkaswwoywya = "{$kqywgoqsmuswammk}\43{$aokagokqyuysuksm}"; $ewgwqamkygiqaawc = $this->yiiekkiwayooaqiy($weyumiemecumqwiy); foreach ($this->breakpoints as $yqyousioqsoaouig => $ycuyiqagsmgikago) { if ($this->ammywaiaowqmcssa($yqyousioqsoaouig)) { $uoomaookgsyciacm = $this->yawwsmagaweysggs($yqyousioqsoaouig); $egkakcquemweqoum = $this->ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig); $egkakcquemweqoum = $this->iumqmcessgoqomqu($egkakcquemweqoum); $kswaimykcacqyaay .= $this->yqacumgcswgcesyq($uoomaookgsyciacm, $this->ycgswoucgcsukwaq($egkakcquemweqoum, $yuumukkaswwoywya)); } } $wwgucssaecqekuek[Constants::gouqcwikiiygyasc] = $aokagokqyuysuksm; $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq($kqywgoqsmuswammk, $wwgucssaecqekuek, $ewgwqamkygiqaawc); } return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } protected function yawwsmagaweysggs($momcykaoccoymeig) { $uoomaookgsyciacm = []; $ycuyiqagsmgikago = $this->breakpoints[$momcykaoccoymeig]; switch ($momcykaoccoymeig) { case "\144": case 1: $uoomaookgsyciacm["\x6d\151\156\x2d\167\151\x64\x74\150"] = $this->uaskqakcsowgmccg($momcykaoccoymeig); break; case "\x6e": case "\164": case 2: case 3: $uoomaookgsyciacm["\155\141\170\x2d\x77\x69\144\x74\150"] = $ycuyiqagsmgikago - 1; $uoomaookgsyciacm["\x6d\151\x6e\x2d\167\151\x64\x74\x68"] = $this->uaskqakcsowgmccg($momcykaoccoymeig); break; case "\155": case 4: $uoomaookgsyciacm["\155\x61\170\55\167\151\144\x74\x68"] = $ycuyiqagsmgikago; break; } return $uoomaookgsyciacm; } protected function yqacumgcswgcesyq(array $uoomaookgsyciacm, string $ekuqiqmikiicgoss) : string { $wocwawaaemuoqmig = ''; $geqcesmqwkeayoiu = "\x20\141\156\144\x20"; foreach ($uoomaookgsyciacm as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { $wocwawaaemuoqmig .= "\50{$oaukocmsckciqaok}\x3a\40{$eqgoocgaqwqcimie}\x70\x78\51{$geqcesmqwkeayoiu}"; } $wocwawaaemuoqmig = rtrim($wocwawaaemuoqmig, $geqcesmqwkeayoiu); return PHP_EOL . "\100\155\145\x64\x69\x61\40{$wocwawaaemuoqmig}\x20\x7b{$ekuqiqmikiicgoss}\x7d"; } protected function ycgswoucgcsukwaq(array $egkakcquemweqoum = [], string $yuumukkaswwoywya = '') : string { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sawckkwcugsmokmi("\160\162\55\x73\167\x23\160\x72\x5f{$this->sliderID}\x20{$yuumukkaswwoywya}", $egkakcquemweqoum); } protected function iumqmcessgoqomqu(array $egkakcquemweqoum) : array { foreach ($egkakcquemweqoum as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { $egkakcquemweqoum[$oaukocmsckciqaok] = $this->awkcisaoyasicqwq($oaukocmsckciqaok, $eqgoocgaqwqcimie); } return array_filter($egkakcquemweqoum); } protected function awkcisaoyasicqwq($oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (in_array($eqgoocgaqwqcimie, ["\156\157\156\145", "\43\141"])) { return ''; } switch ($oaukocmsckciqaok) { case "\142\141\143\x6b\147\x72\157\x75\x6e\144\x2d\x72\x65\160\145\x61\x74": if (!$eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = "\x6e\157\55\x72\145\x70\x65\141\164"; } break; case "\164\157\x70": case "\154\145\146\164": case "\162\x69\x67\x68\164": case "\x77\x69\x64\x74\x68": case "\150\145\x69\147\150\x74": case "\x66\157\x6e\164\x2d\x73\x69\172\x65": case "\x6d\x69\x6e\55\167\x69\x64\x74\x68": case "\155\151\156\55\x68\145\x69\x67\150\164": case "\x6d\x61\x78\x2d\x68\145\x69\147\150\164": case "\164\162\x61\156\163\x6c\141\x74\145\x58": case "\164\162\141\156\163\x6c\141\164\x65\x59": case "\x6c\151\156\x65\55\150\x65\x69\x67\150\x74": case "\x6c\x65\x74\x74\145\x72\x2d\x73\x70\141\143\151\156\x67": if (is_numeric($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie .= "\x70\x78"; } break; case "\142\141\x63\153\x67\162\x6f\165\x6e\144": case "\x62\141\143\153\147\162\x6f\165\x6e\144\x2d\151\155\141\x67\145": if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = "\x75\162\154\x28\47{$eqgoocgaqwqcimie}\47\51"; } break; } return $eqgoocgaqwqcimie; } protected function syckcsgsmwciwyyw($amakmumgguksgmum, $mkomwsiykqigmqca, $yqyousioqsoaouig = null, $ggauoeuaesiymgee = null, bool $eswoackiciccgasc = true) { $ymkqyawksmqcgsei = explode("\x2e", $mkomwsiykqigmqca); $eqgoocgaqwqcimie = $amakmumgguksgmum; foreach ($ymkqyawksmqcgsei as $agywggmyywaimwuy) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$agywggmyywaimwuy] ?? null; if (!$eqgoocgaqwqcimie) { break; } } $ekiuyucoiagmscgy = null; if ($eswoackiciccgasc && isset($this->useMultiple[$mkomwsiykqigmqca])) { $ekiuyucoiagmscgy = $this->useMultiple[$mkomwsiykqigmqca]; $eswoackiciccgasc = true; } else { $eswoackiciccgasc = false; } if (null !== $eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $this->usywmiiwiggsyium($mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig); $uwoyyuqywiwueaso = (float) $eqgoocgaqwqcimie; if ($uwoyyuqywiwueaso && !is_array($eqgoocgaqwqcimie) && $eswoackiciccgasc) { if ($this->qgwuyeagygomiiks(0) !== $yqyousioqsoaouig) { $uooewkwiswcwggao = $this->breakpoints[$yqyousioqsoaouig] ?? 1; $eqgoocgaqwqcimie = "\x63\141\154\143\x28\50\61\60\60\166\x77\40\57\40{$uooewkwiswcwggao}\51\40\52\40{$uwoyyuqywiwueaso}\51"; } } if (null === $eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } } else { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } return $eqgoocgaqwqcimie; } public function kegiemoekkccwkoa($egkakcquemweqoum, $iegmsyuiekaayqqy, $ymsweociooeskgwg, $ywcogicgakiqmesa, $uyyeawaokwsoigkk) { $egwaeiwuwuakeugo = in_array($ywcogicgakiqmesa, ["\x6d\x69\x64\x64\x6c\145", "\143\145\x6e\x74\145\162"], true); $auiemywmioieumqi = in_array($uyyeawaokwsoigkk, ["\x6d\x69\x64\x64\x6c\145", "\143\x65\x6e\164\145\162"], true); if ($iegmsyuiekaayqqy && $ymsweociooeskgwg) { $rqeoqqgeggasimwi = $egkakcquemweqoum["\x74\x72\x61\156\x73\146\x6f\x72\155"] ?? ''; if ($iegmsyuiekaayqqy === "\x61\165\x74\x6f" && $ymsweociooeskgwg === "\141\x75\x74\157") { if ($egwaeiwuwuakeugo && $auiemywmioieumqi) { $egkakcquemweqoum["\x74\157\160"] = "\65\x30\45"; $egkakcquemweqoum["\x6c\145\x66\x74"] = "\x35\60\45"; $rqeoqqgeggasimwi = "\164\162\x61\156\x73\x6c\141\164\x65\50\x2d\x35\x30\45\x2c\40\x2d\65\60\x25\x29\x20{$rqeoqqgeggasimwi}"; } else { if ($egwaeiwuwuakeugo) { $egkakcquemweqoum["\x74\157\x70"] = "\65\60\45"; $rqeoqqgeggasimwi = "\164\162\x61\x6e\x73\x6c\x61\164\x65\x59\x28\x2d\65\60\45\x29\x20{$rqeoqqgeggasimwi}"; } else { $egkakcquemweqoum[$ywcogicgakiqmesa] = "\60\x70\170"; } if ($auiemywmioieumqi) { $egkakcquemweqoum["\154\x65\146\x74"] = "\x35\60\x25"; $rqeoqqgeggasimwi = "\x74\x72\141\156\163\154\141\x74\x65\x58\50\55\65\60\x25\x29\40{$rqeoqqgeggasimwi}"; } else { $egkakcquemweqoum[$uyyeawaokwsoigkk] = "\60\160\x78"; } } } else { $mcmaiqckgiuqayau = ''; $kweggiqywassoewa = "\x30\x70\x78"; $lwqumgsaiiooowqw = "\60\160\x78"; if ($egwaeiwuwuakeugo && $auiemywmioieumqi) { $mcmaiqckgiuqayau = "\164\162\x61\x6e\163\x6c\141\x74\145\x28\55\65\x30\x25\x2c\x20\55\x35\60\x25\51"; $kweggiqywassoewa = "\x35\60\45"; $lwqumgsaiiooowqw = "\x35\x30\x25"; } else { if ($egwaeiwuwuakeugo) { $kweggiqywassoewa = "\65\x30\45"; $mcmaiqckgiuqayau = "\164\162\x61\156\x73\x6c\x61\x74\x65\x59\x28\55\65\x30\x25\x29"; } if ($auiemywmioieumqi) { $lwqumgsaiiooowqw = "\x35\x30\x25"; $mcmaiqckgiuqayau = "\164\162\x61\x6e\163\154\141\x74\145\x58\50\55\65\60\45\51"; } } if ($egwaeiwuwuakeugo) { $ywcogicgakiqmesa = "\x74\x6f\x70"; } if ($auiemywmioieumqi) { $uyyeawaokwsoigkk = "\154\145\146\164"; } if ($ywcogicgakiqmesa === "\x62\157\164\164\157\155") { $ymsweociooeskgwg = (int) $ymsweociooeskgwg * -1 . "\160\x78"; } if ($uyyeawaokwsoigkk === "\x72\x69\x67\x68\164") { $iegmsyuiekaayqqy = (int) $iegmsyuiekaayqqy * -1 . "\160\x78"; } $egkakcquemweqoum[$ywcogicgakiqmesa] = $kweggiqywassoewa; $egkakcquemweqoum[$uyyeawaokwsoigkk] = $lwqumgsaiiooowqw; if ($iegmsyuiekaayqqy === "\x61\165\x74\157") { $iegmsyuiekaayqqy = "\60"; } if ($ymsweociooeskgwg === "\x61\165\x74\157") { $ymsweociooeskgwg = "\60"; } $iegmsyuiekaayqqy = $this->awkcisaoyasicqwq("\164\x72\x61\156\x73\154\x61\x74\145\130", $iegmsyuiekaayqqy); $ymsweociooeskgwg = $this->awkcisaoyasicqwq("\x74\162\141\x6e\x73\154\x61\x74\145\x59", $ymsweociooeskgwg); $rqeoqqgeggasimwi = "{$mcmaiqckgiuqayau}\x20\164\x72\x61\156\x73\154\141\164\x65\x58\x28{$iegmsyuiekaayqqy}\51\x20\x74\x72\x61\156\x73\x6c\x61\x74\x65\x59\50{$ymsweociooeskgwg}\51\x20{$rqeoqqgeggasimwi}"; } $egkakcquemweqoum["\164\162\x61\156\163\x66\157\x72\155"] = $rqeoqqgeggasimwi; } return $egkakcquemweqoum; } private function sywoiecuewkusuei($yqyousioqsoaouig) : float { if (null === $yqyousioqsoaouig) { return 1; } if (!isset($this->multiple[$yqyousioqsoaouig])) { $kkikuskasemkcygg = 1; if ($oaesoigqgysugcsw = $this->wemcakmkkqkoyeow($yqyousioqsoaouig)) { $kkikuskasemkcygg = min(1, $oaesoigqgysugcsw / $this->breakpoints[$yqyousioqsoaouig] ?? 1); } $this->multiple[$yqyousioqsoaouig] = $kkikuskasemkcygg; } return $this->multiple[$yqyousioqsoaouig]; } protected function wemcakmkkqkoyeow($yqyousioqsoaouig, int $ggauoeuaesiymgee = 0) : int { $uoegiucegiomamuy = $this->contentSize["\x77\151\x64\x74\150"][$yqyousioqsoaouig] ?? $ggauoeuaesiymgee; $migimkookwymayqu = $this->contentSize["\167\x69\144\x74\x68"][$this->qgwuyeagygomiiks(0)] ?? $ggauoeuaesiymgee; return (int) min($migimkookwymayqu, $uoegiucegiomamuy); } protected function gauiuwiicosisakg($yqyousioqsoaouig, $ggauoeuaesiymgee = 0) : int { $aiyckuicisckwges = $this->contentSize["\x68\145\151\x67\x68\x74"][$yqyousioqsoaouig] ?? $ggauoeuaesiymgee; $uumegessqcyuayoy = $this->contentSize["\150\145\151\x67\x68\x74"][$this->qgwuyeagygomiiks(0)] ?? $ggauoeuaesiymgee; return (int) min($uumegessqcyuayoy, $aiyckuicisckwges); } protected function cogayqawswyasksk($eqgoocgaqwqcimie) : string { $iyqygqimawuycsyq = ''; if (is_string($eqgoocgaqwqcimie)) { if (preg_match("\57\50\160\x78\x7c\162\x65\x6d\174\x65\155\174\45\x7c\x76\x68\x7c\x76\167\174\x76\x6d\151\156\x7c\x76\x6d\141\170\x7c\x61\165\164\157\x29\x24\57", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { $iyqygqimawuycsyq = $meyiiwcswqmuggyg[0]; } if ($iyqygqimawuycsyq === $eqgoocgaqwqcimie) { $iyqygqimawuycsyq = ''; } } return $iyqygqimawuycsyq; } protected function ooeaouwceyecskck($equckmqsamsmgcwy, $eqgoocgaqwqcimie, $eusockqasqqmoess, $ekiuyucoiagmscgy = null) { if ($eqgoocgaqwqcimie) { $iyqygqimawuycsyq = $this->cogayqawswyasksk($equckmqsamsmgcwy); if ($eusockqasqqmoess !== 1 && $iyqygqimawuycsyq !== "\45") { $eqgoocgaqwqcimie *= $eusockqasqqmoess; } if (is_callable($ekiuyucoiagmscgy)) { $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie); } $eqgoocgaqwqcimie = (float) $eqgoocgaqwqcimie . $iyqygqimawuycsyq; } return $eqgoocgaqwqcimie; } protected function qgwuyeagygomiiks($momcykaoccoymeig, string $kuuiuigeacouwmaa = '') { $yygmoeguaqyumuui = array_keys($this->breakpoints); $eqgoocgaqwqcimie = $yygmoeguaqyumuui[$momcykaoccoymeig] ?? null; if ($eqgoocgaqwqcimie === null) { $eqgoocgaqwqcimie = $momcykaoccoymeig; } $mcmggciwccagmumi = array_search($eqgoocgaqwqcimie, $yygmoeguaqyumuui, true); $acuayeeoiwokyomo = 0; switch ($kuuiuigeacouwmaa) { case "\160\x72\x65\166": $acuayeeoiwokyomo = -1; break; case "\156\x65\170\x74": $acuayeeoiwokyomo = 1; break; } return $yygmoeguaqyumuui[$mcmggciwccagmumi + $acuayeeoiwokyomo] ?? null; } protected function ammywaiaowqmcssa($yqyousioqsoaouig) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($eiicaiwgqkgsekce->amkiaqeamgywsygm() && in_array($yqyousioqsoaouig, [4, "\64", "\155"], true)) { return true; } else { if (!$eiicaiwgqkgsekce->amkiaqeamgywsygm()) { return true; } } return false; } protected abstract function tsioiooeoyeieqye(array $weyumiemecumqwiy) : string; protected abstract function yqooukeogwwoqeau($weyumiemecumqwiy, $mkomwsiykqigmqca, $yqyousioqsoaouig = null) : string; protected abstract function uaskqakcsowgmccg($momcykaoccoymeig); protected abstract function wgogsacggwigyuee($momcykaoccoymeig); protected abstract function yiiekkiwayooaqiy($weyumiemecumqwiy) : string; protected abstract function gqkyomsuwooussyk($ocouqoqqcgauwkuq) : array; protected abstract function ywogaocmueoimkuq($weyumiemecumqwiy) : bool; protected abstract function qooeaookuemoqecm($eqgoocgaqwqcimie, ?string $uusmaiomayssaecw = null); protected abstract function euisqgeeigoksqui($eqgoocgaqwqcimie, $yqyousioqsoaouig) : bool; protected abstract function usywmiiwiggsyium(string $mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig); protected abstract function ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig) : array; protected abstract function gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig) : array; }
