<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6654cb65a9906             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting; use Pmpr\Module\Optimization\Optimizer\Cache\Purge\Engine as BaseClass; use Pmpr\Module\Optimization\PageManager\Model\Page; use WP_Post; use WP_Term; class Engine extends BaseClass { public function gimogqqgyqwiwsmi() : bool { return (bool) $this->weysguygiseoukqw(Setting::aqaeiauuykqeiyoi, false); } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { $ksaameoqigiaoigg = false; if (!$this->gimogqqgyqwiwsmi()) { goto ocywegekakimmwcq; } $ksaameoqigiaoigg = $this->caoeosiqwyaauaio(Ajax::symcgieuakksimmu()->gskqygiceygcguyo()); if (!$ksaameoqigiaoigg) { goto yuimwyoywaiiqacs; } $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x63\x61\x63\150\x65\137\x68\164\x6d\154\137\x61\x6c\x6c\137\160\x75\x72\x67\145\144", ...$ywmkwiwkosakssii); yuimwyoywaiiqacs: ocywegekakimmwcq: return $ksaameoqigiaoigg; } public function qwgwwmwcgwommmcy(array $auwuoyyagaiegwae) : bool { $auwuoyyagaiegwae = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\x61\143\150\145\137\150\x74\x6d\154\x5f\160\x75\162\x67\x65\137\x75\x72\x6c\163", $auwuoyyagaiegwae); if (!(empty($auwuoyyagaiegwae) || !$this->gimogqqgyqwiwsmi())) { goto emqswoaawgeyosmi; } return false; emqswoaawgeyosmi: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->caoeosiqwyaauaio(dirname(Ajax::symcgieuakksimmu()->cckisoakyqqgywey($eeamcawaiqocomwy))); esikeyqyuikmaiek: } iwsmmkqaoksmocok: $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x63\141\x63\150\x65\137\150\164\x6d\154\137\x75\162\x6c\x73\137\160\x75\x72\147\145\x64", $auwuoyyagaiegwae); return true; } public function miemuiuwumuyqykm($swaukaagekiououo = '') : bool { if ($this->gimogqqgyqwiwsmi()) { goto okkmcocqokkskasy; } return false; okkmcocqokkskasy: return true; } public function syicukiqeoyaqsok($iwewcwusemqaiggk) : bool { } public function ussmokeesuogauca($post) : bool { if ($this->gimogqqgyqwiwsmi()) { goto qiiigwkqeoewsuwm; } return false; qiiigwkqeoewsuwm: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { goto esaqcqqwuussiiwo; } return false; esaqcqqwuussiiwo: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gcqseksiskwueksc = 0; if (!is_numeric($post)) { goto ikqeeaysmqgcgawq; } $gcqseksiskwueksc = $post; $post = $seumokooiykcomco->get($post); ikqeeaysmqgcgawq: if (is_object($post)) { goto mscgewkcqcoowweg; } return false; mscgewkcqcoowweg: if ($gcqseksiskwueksc) { goto suqcsgaosywaauuu; } $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); suqcsgaosywaauuu: static $gqiuywqwmiieqcww = []; if (!isset($gqiuywqwmiieqcww[$gcqseksiskwueksc])) { goto wwukgaquuyoissgy; } return false; wwukgaquuyoissgy: $iueymcwwscwqkiyq = $seumokooiykcomco->ucwmcwqmqwaymkkc($post); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); if (!(empty($useksmwkuswkwcqg) || in_array($iueymcwwscwqkiyq, [self::iuemaweiggauysws, self::ywskismomwmcsqam], true) || in_array($useksmwkuswkwcqg, [self::mskugisegsqmcqkk, self::cqycgsyykemiygou], true))) { goto gsygwgsiawgmqiyi; } return false; gsygwgsiawgmqiyi: $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $kgioguqigccoiyca = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($kgioguqigccoiyca === null || !$cskucqcumqsyimye->cekoogweeooasayu($kgioguqigccoiyca))) { goto qsgqwyqaqiowkmco; } return false; qsgqwyqaqiowkmco: $swaukaagekiououo = $this->isgmmgcaqsguwias()->gagsyqagguwwauac()->emqmaiomewcmuacu($post); $kggeaycqkokcquqk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->sewesguyaqwccksa($post); $kggeaycqkokcquqk = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x70\x6f\163\164\137\x70\165\162\x67\x65\137\x75\x72\154\163", $kggeaycqkokcquqk, $post); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x62\145\146\157\x72\x65\137\143\154\x65\141\x6e\x5f\x70\157\163\x74", $post, $kggeaycqkokcquqk, $swaukaagekiououo); $this->qwgwwmwcgwommmcy($kggeaycqkokcquqk); $this->miemuiuwumuyqykm($swaukaagekiououo); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\141\146\164\145\x72\x5f\x63\x6c\x65\x61\x6e\x5f\x70\157\x73\x74", $post, $kggeaycqkokcquqk, $swaukaagekiououo); return true; } public function megokskeiiacqoii($suaemuyiacqyugsm) : bool { if ($this->gimogqqgyqwiwsmi()) { goto yqagomygmeoecwey; } return false; yqagomygmeoecwey: $mksyucucyswaukig = Page::symcgieuakksimmu()->eiswegiqykyigwig($suaemuyiacqyugsm); if ($mksyucucyswaukig instanceof WP_Post) { goto aiccyaswigkaycqk; } if ($mksyucucyswaukig instanceof WP_Term) { goto eucqomyqykgoiuge; } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($mksyucucyswaukig)) { goto qikaewekoecykeou; } $this->qwgwwmwcgwommmcy([$mksyucucyswaukig]); qikaewekoecykeou: goto usymasgsyqgsuocg; eucqomyqykgoiuge: $this->syicukiqeoyaqsok($mksyucucyswaukig); usymasgsyqgsuocg: goto sqyokemumceysegy; aiccyaswigkaycqk: $this->ussmokeesuogauca($mksyucucyswaukig); sqyokemumceysegy: return true; } public function igkscowaqiikiwam($eouekqmooogkoqoo) : bool { if ($this->gimogqqgyqwiwsmi()) { goto oqousikwiiqagoyw; } return false; oqousikwiiqagoyw: $ocqawgquwsqioses = Page::symcgieuakksimmu()->woimamkkeyoyauoa(Page::ewyamgkooeqiecwg, $eouekqmooogkoqoo); foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { $this->megokskeiiacqoii($suaemuyiacqyugsm); aueaceeyommgkicu: } zayqqeqgcwkekwws: return true; } }
