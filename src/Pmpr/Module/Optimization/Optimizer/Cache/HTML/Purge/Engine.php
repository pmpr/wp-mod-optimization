<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6637d2bee1dc0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting; use Pmpr\Module\Optimization\Optimizer\Cache\Purge\Engine as BaseClass; use Pmpr\Module\Optimization\PageManager\Model\Page; use WP_Post; use WP_Term; class Engine extends BaseClass { public function gimogqqgyqwiwsmi() : bool { return (bool) $this->weysguygiseoukqw(Setting::aqaeiauuykqeiyoi, false); } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { if ($this->gimogqqgyqwiwsmi()) { goto esokkakkumskkmiu; } return false; esokkakkumskkmiu: return $this->caoeosiqwyaauaio(Ajax::symcgieuakksimmu()->gskqygiceygcguyo()); } public function qwgwwmwcgwommmcy(array $auwuoyyagaiegwae) : bool { $auwuoyyagaiegwae = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\141\143\x68\x65\137\150\x74\155\x6c\137\x70\x75\x72\x67\145\137\165\x72\x6c\x73", $auwuoyyagaiegwae); if (!(empty($auwuoyyagaiegwae) || !$this->gimogqqgyqwiwsmi())) { goto msiuqseowuumiwuo; } return false; msiuqseowuumiwuo: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->caoeosiqwyaauaio(dirname(Ajax::symcgieuakksimmu()->cckisoakyqqgywey($eeamcawaiqocomwy))); sqiyuasgusgawuoi: } gqycmyieayoegcsy: $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x63\x61\x63\x68\x65\x5f\150\x74\x6d\x6c\137\165\x72\154\x73\137\160\x75\162\x67\x65\x64", $auwuoyyagaiegwae); return true; } public function miemuiuwumuyqykm($swaukaagekiououo = '') : bool { if ($this->gimogqqgyqwiwsmi()) { goto iayguaeseyaemwkk; } return false; iayguaeseyaemwkk: return true; } public function syicukiqeoyaqsok($iwewcwusemqaiggk) : bool { } public function ussmokeesuogauca($post) : bool { if ($this->gimogqqgyqwiwsmi()) { goto akyiiioycmgqyuok; } return false; akyiiioycmgqyuok: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { goto ycomeuqeessamows; } return false; ycomeuqeessamows: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gcqseksiskwueksc = 0; if (!is_numeric($post)) { goto owiguescmqyqukui; } $gcqseksiskwueksc = $post; $post = $seumokooiykcomco->get($post); owiguescmqyqukui: if (is_object($post)) { goto guummoewucyeuiek; } return false; guummoewucyeuiek: if ($gcqseksiskwueksc) { goto mqacqosyicuiqwia; } $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); mqacqosyicuiqwia: static $gqiuywqwmiieqcww = []; if (!isset($gqiuywqwmiieqcww[$gcqseksiskwueksc])) { goto mcuoyseuwoueyaie; } return false; mcuoyseuwoueyaie: $iueymcwwscwqkiyq = $seumokooiykcomco->ucwmcwqmqwaymkkc($post); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); if (!(empty($useksmwkuswkwcqg) || in_array($iueymcwwscwqkiyq, [self::iuemaweiggauysws, self::ywskismomwmcsqam], true) || in_array($useksmwkuswkwcqg, [self::mskugisegsqmcqkk, self::cqycgsyykemiygou], true))) { goto kwowggaooiyqawyq; } return false; kwowggaooiyqawyq: $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $kgioguqigccoiyca = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($kgioguqigccoiyca === null || !$cskucqcumqsyimye->cekoogweeooasayu($kgioguqigccoiyca))) { goto ieoeeyieoskuyiyw; } return false; ieoeeyieoskuyiyw: $swaukaagekiououo = $this->isgmmgcaqsguwias()->gagsyqagguwwauac()->emqmaiomewcmuacu($post); $kggeaycqkokcquqk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->sewesguyaqwccksa($post); $kggeaycqkokcquqk = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x70\157\163\x74\137\x70\x75\x72\x67\x65\137\x75\x72\154\163", $kggeaycqkokcquqk, $post); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x62\x65\x66\x6f\162\145\x5f\x63\x6c\145\141\x6e\x5f\160\157\x73\164", $post, $kggeaycqkokcquqk, $swaukaagekiououo); $this->qwgwwmwcgwommmcy($kggeaycqkokcquqk); $this->miemuiuwumuyqykm($swaukaagekiououo); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x61\146\164\x65\x72\137\x63\154\x65\141\x6e\x5f\x70\x6f\x73\164", $post, $kggeaycqkokcquqk, $swaukaagekiououo); return true; } public function megokskeiiacqoii($suaemuyiacqyugsm) : bool { if ($this->gimogqqgyqwiwsmi()) { goto ciiyqsiswkcwsocm; } return false; ciiyqsiswkcwsocm: $mksyucucyswaukig = Page::symcgieuakksimmu()->eiswegiqykyigwig($suaemuyiacqyugsm); if ($mksyucucyswaukig instanceof WP_Post) { goto wwgikwuigiiqsswq; } if ($mksyucucyswaukig instanceof WP_Term) { goto soqkewsayowwcmco; } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($mksyucucyswaukig)) { goto ugyawwukegyoqmsq; } $this->qwgwwmwcgwommmcy([$mksyucucyswaukig]); ugyawwukegyoqmsq: goto ukigmkeewuqomooc; soqkewsayowwcmco: $this->syicukiqeoyaqsok($mksyucucyswaukig); ukigmkeewuqomooc: goto seyygcwcaogkmaqe; wwgikwuigiiqsswq: $this->ussmokeesuogauca($mksyucucyswaukig); seyygcwcaogkmaqe: return true; } public function igkscowaqiikiwam($eouekqmooogkoqoo) : bool { if ($this->gimogqqgyqwiwsmi()) { goto uugiuqkesegaamqw; } return false; uugiuqkesegaamqw: $ocqawgquwsqioses = Page::symcgieuakksimmu()->woimamkkeyoyauoa(Page::ewyamgkooeqiecwg, $eouekqmooogkoqoo); foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { $this->megokskeiiacqoii($suaemuyiacqyugsm); qoaawmmcqyacokws: } ykcmomsiayaymysm: return true; } }
