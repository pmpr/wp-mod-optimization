<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d32325cda1b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\Search; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Search\Setting; use Pmpr\Module\Optimization\PageManager\Model\Common; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; class History extends Common { public $timestamps = null; const imkkyggguymaqgqi = "\150\141\163\x5f\x72\145\x73\x75\154\164"; public function ckgmycmaukqgkosk() { $this->oyeskqayoscwciem()->guiaswksukmgageq(__("\123\145\141\162\x63\x68\x20\x48\151\x73\164\x6f\162\x79", PR__MDL__OPTIMIZATION))->muuwuqssqkaieqge(__("\123\x65\141\162\143\150\40\110\x69\163\x74\x6f\x72\151\x65\163", PR__MDL__OPTIMIZATION)); parent::ckgmycmaukqgkosk(); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->usqseiuaeauwuwus(Constants::yoayaissyomokiui)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\123\145\141\162\143\150\145\144\x20\x54\145\162\155", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->vsuwiusoqmuueegu(Constants::qiyqwyiiwykeccmo)->ogymmssscoqeuyye()->gswweykyogmsyawy(__("\x43\x6f\x75\x6e\x74", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->omkueasmegecueyk(self::imkkyggguymaqgqi)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\x48\141\x73\x20\x52\x65\163\x75\154\x74", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->gswweykyogmsyawy(__("\123\x74\x61\x74\165\x73", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(1, Constants::sgoswgskyiiwkyuo, __("\120\x65\156\144\x69\x6e\x67", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, Constants::cqymgkkgeosmoowe, __("\101\x64\x64\145\144", PR__MDL__OPTIMIZATION))->eyygsasuqmommkua(Constants::sgoswgskyiiwkyuo)); parent::ewaqwooqoqmcoomi(); } public function ysouksugwwuisyye($icwicymcioeyeyek) { $auuqggkaeoomcksu = true; $kcawyocaiuqkigag = Search::symcgieuakksimmu(); if (!(Constants::yuwueyysmgkecygw === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::ckekocwocaogoeye, Constants::yuwueyysmgkecygw))) { goto osoqssymqqoqcuky; } $gaeqamemwmwsyukm = (int) $kcawyocaiuqkigag->weysguygiseoukqw(Setting::mwcsquoskuckeweg, 10); $auuqggkaeoomcksu = $icwicymcioeyeyek[Constants::qiyqwyiiwykeccmo] >= $gaeqamemwmwsyukm; osoqssymqqoqcuky: if (!($auuqggkaeoomcksu && Constants::qwssyugmmaoeqiei === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::okomcksyqygykaoo, Constants::qwssyugmmaoeqiei))) { goto qcywwqceiqogcoyo; } $auuqggkaeoomcksu = (bool) $icwicymcioeyeyek[self::imkkyggguymaqgqi]; qcywwqceiqogcoyo: if (!$auuqggkaeoomcksu) { goto uckeuuaqimqamuyc; } $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $eouekqmooogkoqoo = $jwkieqegmyuwayce->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Pattern::usoeisyyakwkuyoy, Pattern::usoeisyyakwkuyoy => Constants::yayciqueeakqwese]); if (!$eouekqmooogkoqoo) { goto awikkaqmmuqkukma; } $suaemuyiacqyugsm = $this->wkagassgcaqeosio()->gmowkweososugauu("\57\77\x73\x3d{$icwicymcioeyeyek[Constants::yoayaissyomokiui]}", $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo), Constants::yayciqueeakqwese, $jwkieqegmyuwayce::usoeisyyakwkuyoy); $sogksuscggsicmac = Page::symcgieuakksimmu()->sigsaicaiyegiqea($suaemuyiacqyugsm); if (!($sogksuscggsicmac && $sogksuscggsicmac[Constants::ckcawaoawwioqecq])) { goto giiucsyqgcooaima; } $icwicymcioeyeyek[Constants::ciywsqoeiymemsys] = Constants::cqymgkkgeosmoowe; giiucsyqgcooaima: awikkaqmmuqkukma: uckeuuaqimqamuyc: return parent::ysouksugwwuisyye($icwicymcioeyeyek); } }
