<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665e31ae394a5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting; use Pmpr\Module\Optimization\Optimizer\Cache\Purge\Engine as BaseClass; use Pmpr\Module\Optimization\PageManager\Model\Page; use WP_Post; use WP_Term; class Engine extends BaseClass { public function gimogqqgyqwiwsmi() : bool { return (bool) $this->weysguygiseoukqw(Setting::aqaeiauuykqeiyoi, false); } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { $ksaameoqigiaoigg = false; if (!$this->gimogqqgyqwiwsmi()) { goto yoqakewookqoqacm; } $ksaameoqigiaoigg = $this->caoeosiqwyaauaio(Ajax::symcgieuakksimmu()->gskqygiceygcguyo()); if (!$ksaameoqigiaoigg) { goto ikuuiauwouuqawuw; } $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x63\141\x63\150\145\x5f\x68\x74\155\x6c\x5f\x61\x6c\154\137\160\x75\162\x67\145\x64", ...$ywmkwiwkosakssii); ikuuiauwouuqawuw: yoqakewookqoqacm: return $ksaameoqigiaoigg; } public function qwgwwmwcgwommmcy(array $auwuoyyagaiegwae) : bool { $auwuoyyagaiegwae = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\x61\143\150\145\x5f\x68\164\x6d\x6c\x5f\160\165\x72\x67\x65\x5f\x75\x72\x6c\163", $auwuoyyagaiegwae); if (!(empty($auwuoyyagaiegwae) || !$this->gimogqqgyqwiwsmi())) { goto gswcoeiisamakwii; } return false; gswcoeiisamakwii: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->caoeosiqwyaauaio(dirname(Ajax::symcgieuakksimmu()->cckisoakyqqgywey($eeamcawaiqocomwy))); ocywegekakimmwcq: } yuimwyoywaiiqacs: $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x63\141\143\x68\x65\137\150\164\155\x6c\x5f\165\x72\154\163\137\x70\x75\x72\147\145\x64", $auwuoyyagaiegwae); return true; } public function miemuiuwumuyqykm($swaukaagekiououo = '') : bool { if ($this->gimogqqgyqwiwsmi()) { goto emqswoaawgeyosmi; } return false; emqswoaawgeyosmi: return true; } public function syicukiqeoyaqsok($iwewcwusemqaiggk) : bool { } public function ussmokeesuogauca($post) : bool { if ($this->gimogqqgyqwiwsmi()) { goto iwsmmkqaoksmocok; } return false; iwsmmkqaoksmocok: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { goto esikeyqyuikmaiek; } return false; esikeyqyuikmaiek: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gcqseksiskwueksc = 0; if (!is_numeric($post)) { goto okkmcocqokkskasy; } $gcqseksiskwueksc = $post; $post = $seumokooiykcomco->get($post); okkmcocqokkskasy: if (is_object($post)) { goto qiiigwkqeoewsuwm; } return false; qiiigwkqeoewsuwm: if ($gcqseksiskwueksc) { goto esaqcqqwuussiiwo; } $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); esaqcqqwuussiiwo: static $gqiuywqwmiieqcww = []; if (!isset($gqiuywqwmiieqcww[$gcqseksiskwueksc])) { goto ikqeeaysmqgcgawq; } return false; ikqeeaysmqgcgawq: $iueymcwwscwqkiyq = $seumokooiykcomco->ucwmcwqmqwaymkkc($post); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); if (!(empty($useksmwkuswkwcqg) || in_array($iueymcwwscwqkiyq, [self::iuemaweiggauysws, self::ywskismomwmcsqam], true) || in_array($useksmwkuswkwcqg, [self::mskugisegsqmcqkk, self::cqycgsyykemiygou], true))) { goto mscgewkcqcoowweg; } return false; mscgewkcqcoowweg: $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $kgioguqigccoiyca = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($kgioguqigccoiyca === null || !$cskucqcumqsyimye->cekoogweeooasayu($kgioguqigccoiyca))) { goto suqcsgaosywaauuu; } return false; suqcsgaosywaauuu: $swaukaagekiououo = $this->isgmmgcaqsguwias()->gagsyqagguwwauac()->emqmaiomewcmuacu($post); $kggeaycqkokcquqk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->sewesguyaqwccksa($post); $kggeaycqkokcquqk = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\160\157\x73\164\x5f\160\x75\162\147\x65\x5f\165\162\154\163", $kggeaycqkokcquqk, $post); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\142\145\x66\157\162\145\x5f\143\154\145\141\156\137\160\x6f\163\164", $post, $kggeaycqkokcquqk, $swaukaagekiououo); $this->qwgwwmwcgwommmcy($kggeaycqkokcquqk); $this->miemuiuwumuyqykm($swaukaagekiououo); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x61\x66\164\145\162\x5f\143\x6c\145\141\x6e\137\x70\157\163\x74", $post, $kggeaycqkokcquqk, $swaukaagekiououo); return true; } public function megokskeiiacqoii($suaemuyiacqyugsm) : bool { if ($this->gimogqqgyqwiwsmi()) { goto wwukgaquuyoissgy; } return false; wwukgaquuyoissgy: $mksyucucyswaukig = Page::symcgieuakksimmu()->eiswegiqykyigwig($suaemuyiacqyugsm); if ($mksyucucyswaukig instanceof WP_Post) { goto qikaewekoecykeou; } if ($mksyucucyswaukig instanceof WP_Term) { goto qsgqwyqaqiowkmco; } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($mksyucucyswaukig)) { goto gsygwgsiawgmqiyi; } $this->qwgwwmwcgwommmcy([$mksyucucyswaukig]); gsygwgsiawgmqiyi: goto yqagomygmeoecwey; qsgqwyqaqiowkmco: $this->syicukiqeoyaqsok($mksyucucyswaukig); yqagomygmeoecwey: goto eucqomyqykgoiuge; qikaewekoecykeou: $this->ussmokeesuogauca($mksyucucyswaukig); eucqomyqykgoiuge: return true; } public function igkscowaqiikiwam($eouekqmooogkoqoo) : bool { if ($this->gimogqqgyqwiwsmi()) { goto usymasgsyqgsuocg; } return false; usymasgsyqgsuocg: $ocqawgquwsqioses = Page::symcgieuakksimmu()->woimamkkeyoyauoa(Page::ewyamgkooeqiecwg, $eouekqmooogkoqoo); foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { $this->megokskeiiacqoii($suaemuyiacqyugsm); sqyokemumceysegy: } aiccyaswigkaycqk: return true; } }
