<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132a7dc622             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\Search; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Search\Setting; use Pmpr\Module\Optimization\PageManager\Model\Common; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; class History extends Common { public $timestamps = null; const imkkyggguymaqgqi = "\150\141\x73\137\162\x65\x73\165\154\x74"; public function ckgmycmaukqgkosk() { $this->oyeskqayoscwciem()->guiaswksukmgageq(__("\x53\145\x61\162\143\150\x20\x48\x69\163\164\x6f\162\171", PR__MDL__OPTIMIZATION))->muuwuqssqkaieqge(__("\123\x65\141\162\143\x68\40\x48\x69\163\x74\x6f\162\x69\145\163", PR__MDL__OPTIMIZATION)); parent::ckgmycmaukqgkosk(); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->usqseiuaeauwuwus(Constants::yoayaissyomokiui)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x53\x65\x61\162\x63\x68\x65\x64\x20\124\145\162\155", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->vsuwiusoqmuueegu(Constants::qiyqwyiiwykeccmo)->ogymmssscoqeuyye()->gswweykyogmsyawy(__("\103\157\x75\156\x74", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->omkueasmegecueyk(self::imkkyggguymaqgqi)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\x48\141\x73\x20\122\x65\163\x75\154\164", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->gswweykyogmsyawy(__("\123\x74\x61\164\x75\163", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(1, Constants::sgoswgskyiiwkyuo, __("\x50\145\156\144\x69\156\147", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, Constants::cqymgkkgeosmoowe, __("\101\x64\x64\x65\144", PR__MDL__OPTIMIZATION))->eyygsasuqmommkua(Constants::sgoswgskyiiwkyuo)); parent::ewaqwooqoqmcoomi(); } public function ysouksugwwuisyye($icwicymcioeyeyek) { $auuqggkaeoomcksu = true; $kcawyocaiuqkigag = Search::symcgieuakksimmu(); if (!(Constants::yuwueyysmgkecygw === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::ckekocwocaogoeye, Constants::yuwueyysmgkecygw))) { goto gygwewcqsmwqismo; } $gaeqamemwmwsyukm = (int) $kcawyocaiuqkigag->weysguygiseoukqw(Setting::mwcsquoskuckeweg, 10); $auuqggkaeoomcksu = $icwicymcioeyeyek[Constants::qiyqwyiiwykeccmo] >= $gaeqamemwmwsyukm; gygwewcqsmwqismo: if (!($auuqggkaeoomcksu && Constants::qwssyugmmaoeqiei === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::okomcksyqygykaoo, Constants::qwssyugmmaoeqiei))) { goto uougwgeyiokewkkm; } $auuqggkaeoomcksu = (bool) $icwicymcioeyeyek[self::imkkyggguymaqgqi]; uougwgeyiokewkkm: if (!$auuqggkaeoomcksu) { goto ucqmumuygcywwqma; } $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $eouekqmooogkoqoo = $jwkieqegmyuwayce->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Pattern::usoeisyyakwkuyoy, Pattern::usoeisyyakwkuyoy => Constants::yayciqueeakqwese]); if (!$eouekqmooogkoqoo) { goto ukqocwewouckikso; } $suaemuyiacqyugsm = $this->wkagassgcaqeosio()->gmowkweososugauu("\57\77\163\x3d{$icwicymcioeyeyek[Constants::yoayaissyomokiui]}", $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo), Constants::yayciqueeakqwese, $jwkieqegmyuwayce::usoeisyyakwkuyoy); $sogksuscggsicmac = Page::symcgieuakksimmu()->sigsaicaiyegiqea($suaemuyiacqyugsm); if (!($sogksuscggsicmac && $sogksuscggsicmac[Constants::ckcawaoawwioqecq])) { goto gommacygsykyussk; } $icwicymcioeyeyek[Constants::ciywsqoeiymemsys] = Constants::cqymgkkgeosmoowe; gommacygsykyussk: ukqocwewouckikso: ucqmumuygcywwqma: return parent::ysouksugwwuisyye($icwicymcioeyeyek); } }
