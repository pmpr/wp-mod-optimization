<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d3161a77b51             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting; use Pmpr\Module\Optimization\Optimizer\Cache\Purge\Engine as BaseClass; use Pmpr\Module\Optimization\PageManager\Model\Page; use WP_Post; use WP_Term; class Engine extends BaseClass { public function gimogqqgyqwiwsmi() : bool { return (bool) $this->weysguygiseoukqw(Setting::aqaeiauuykqeiyoi, false); } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { $ksaameoqigiaoigg = false; if (!$this->gimogqqgyqwiwsmi()) { goto amqgiisymksuuuss; } $ksaameoqigiaoigg = $this->caoeosiqwyaauaio(Ajax::symcgieuakksimmu()->gskqygiceygcguyo()); if (!$ksaameoqigiaoigg) { goto ocmagamuyawyiyka; } $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x63\x61\143\150\x65\137\x68\164\155\x6c\137\x61\x6c\154\x5f\160\x75\x72\147\x65\x64", ...$ywmkwiwkosakssii); ocmagamuyawyiyka: amqgiisymksuuuss: return $ksaameoqigiaoigg; } public function sksuceuccwmiokoe($ccamueccusigaaio) : bool { if (!is_string($ccamueccusigaaio)) { goto iwgmywqocewwgoeo; } $this->caoeosiqwyaauaio(dirname(Ajax::symcgieuakksimmu()->cckisoakyqqgywey($ccamueccusigaaio))); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x63\141\143\x68\x65\137\150\164\x6d\154\137\x75\162\x6c\x5f\160\x75\x72\147\145\x64", $ccamueccusigaaio); return true; iwgmywqocewwgoeo: return false; } public function qwgwwmwcgwommmcy(array $auwuoyyagaiegwae) : bool { $auwuoyyagaiegwae = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\143\141\x63\150\x65\x5f\x68\164\155\x6c\137\160\x75\162\x67\145\137\165\162\x6c\x73", $auwuoyyagaiegwae); if (!(empty($auwuoyyagaiegwae) || !$this->gimogqqgyqwiwsmi())) { goto syoeqaqkseguwmgy; } return false; syoeqaqkseguwmgy: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->sksuceuccwmiokoe($eeamcawaiqocomwy); gwkawguwsamuomuo: } sgiouaqukyycswqm: $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x63\141\143\150\145\137\x68\164\x6d\x6c\137\165\x72\x6c\163\x5f\x70\165\162\x67\x65\144", $auwuoyyagaiegwae); return true; } public function miemuiuwumuyqykm($swaukaagekiououo = '') : bool { if ($this->gimogqqgyqwiwsmi()) { goto ucasigqmoiwaimkk; } return false; ucasigqmoiwaimkk: return true; } public function syicukiqeoyaqsok($iwewcwusemqaiggk) : bool { if ($this->gimogqqgyqwiwsmi()) { goto uugwmywmaqomeksa; } return false; uugwmywmaqomeksa: return true; } public function ussmokeesuogauca($post) : bool { if ($this->gimogqqgyqwiwsmi()) { goto wowmysuygugawmmu; } return false; wowmysuygugawmmu: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { goto mmmqqoemusicwgqg; } return false; mmmqqoemusicwgqg: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gcqseksiskwueksc = 0; if (!is_numeric($post)) { goto iquugwoswgkoiieg; } $gcqseksiskwueksc = $post; $post = $seumokooiykcomco->get($post); iquugwoswgkoiieg: if (is_object($post)) { goto xogaycsaesgqeqig; } return false; xogaycsaesgqeqig: if ($gcqseksiskwueksc) { goto gsiaskgsukseumig; } $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); gsiaskgsukseumig: static $gqiuywqwmiieqcww = []; if (!isset($gqiuywqwmiieqcww[$gcqseksiskwueksc])) { goto syiyemqigyugagks; } return false; syiyemqigyugagks: $iueymcwwscwqkiyq = $seumokooiykcomco->ucwmcwqmqwaymkkc($post); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); if (!(empty($useksmwkuswkwcqg) || in_array($iueymcwwscwqkiyq, [Constants::iuemaweiggauysws, Constants::ywskismomwmcsqam], true) || in_array($useksmwkuswkwcqg, [Constants::mskugisegsqmcqkk, Constants::cqycgsyykemiygou], true))) { goto woqkgwmkmqsuceuy; } return false; woqkgwmkmqsuceuy: $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $kgioguqigccoiyca = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($kgioguqigccoiyca === null || !$cskucqcumqsyimye->cekoogweeooasayu($kgioguqigccoiyca))) { goto imwiyqcekcykscui; } return false; imwiyqcekcykscui: $swaukaagekiououo = $this->isgmmgcaqsguwias()->gagsyqagguwwauac()->emqmaiomewcmuacu($post); $kggeaycqkokcquqk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->sewesguyaqwccksa($post); $kggeaycqkokcquqk = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\160\157\x73\x74\137\160\165\x72\147\145\x5f\x75\x72\x6c\x73", $kggeaycqkokcquqk, $post); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x62\x65\x66\x6f\162\145\137\x63\x6c\145\x61\156\137\x70\157\x73\164", $post, $kggeaycqkokcquqk, $swaukaagekiououo); $this->qwgwwmwcgwommmcy($kggeaycqkokcquqk); $this->miemuiuwumuyqykm($swaukaagekiououo); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\141\146\x74\x65\x72\x5f\143\x6c\145\141\x6e\x5f\160\x6f\163\164", $post, $kggeaycqkokcquqk, $swaukaagekiououo); return true; } public function megokskeiiacqoii($suaemuyiacqyugsm) : bool { if ($this->gimogqqgyqwiwsmi()) { goto umemmgiwimkymaya; } return false; umemmgiwimkymaya: $mksyucucyswaukig = Page::symcgieuakksimmu()->eiswegiqykyigwig($suaemuyiacqyugsm); if ($mksyucucyswaukig instanceof WP_Post) { goto guqmgiqaaowaauyo; } if ($mksyucucyswaukig instanceof WP_Term) { goto geasgywiogoeamek; } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($mksyucucyswaukig)) { goto omsmaougqkqigogw; } $this->qwgwwmwcgwommmcy([$mksyucucyswaukig]); omsmaougqkqigogw: goto qweyymyuuqwcmkqg; geasgywiogoeamek: $this->syicukiqeoyaqsok($mksyucucyswaukig); qweyymyuuqwcmkqg: goto mccimkgwkkamsime; guqmgiqaaowaauyo: $this->ussmokeesuogauca($mksyucucyswaukig); mccimkgwkkamsime: return true; } public function igkscowaqiikiwam($eouekqmooogkoqoo) : bool { if ($this->gimogqqgyqwiwsmi()) { goto ucaoyoamaycsiacq; } return false; ucaoyoamaycsiacq: $ocqawgquwsqioses = Page::symcgieuakksimmu()->woimamkkeyoyauoa(Page::ewyamgkooeqiecwg, $eouekqmooogkoqoo); foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { $this->megokskeiiacqoii($suaemuyiacqyugsm); oasisywuwssumsok: } iuyagqakcieasiua: return true; } }
