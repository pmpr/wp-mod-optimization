<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb56de52d1c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\Search; use Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Search\Setting; use Pmpr\Module\Optimization\PageManager\Model\Common; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; class History extends Common { public $timestamps = null; const imkkyggguymaqgqi = "\x68\x61\163\137\162\145\163\x75\x6c\164"; public function ckgmycmaukqgkosk() { $this->oyeskqayoscwciem()->guiaswksukmgageq(__("\x53\x65\x61\162\x63\150\40\110\x69\x73\164\157\x72\x79", PR__MDL__OPTIMIZATION))->muuwuqssqkaieqge(__("\123\145\x61\x72\143\150\x20\110\151\x73\164\157\x72\151\x65\x73", PR__MDL__OPTIMIZATION)); parent::ckgmycmaukqgkosk(); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->usqseiuaeauwuwus(self::yoayaissyomokiui)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\123\x65\141\x72\143\150\145\x64\40\124\145\162\155", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->vsuwiusoqmuueegu(self::qiyqwyiiwykeccmo)->ogymmssscoqeuyye()->gswweykyogmsyawy(__("\x43\x6f\165\x6e\164", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->omkueasmegecueyk(self::imkkyggguymaqgqi)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\x48\x61\163\x20\122\145\x73\165\x6c\x74", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(self::ciywsqoeiymemsys)->gswweykyogmsyawy(__("\x53\x74\x61\x74\165\x73", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(1, self::sgoswgskyiiwkyuo, __("\x50\145\x6e\144\x69\156\147", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, self::cqymgkkgeosmoowe, __("\x41\144\x64\145\x64", PR__MDL__OPTIMIZATION))->eyygsasuqmommkua(self::sgoswgskyiiwkyuo)); parent::ewaqwooqoqmcoomi(); } public function ysouksugwwuisyye($icwicymcioeyeyek) { $auuqggkaeoomcksu = true; $kcawyocaiuqkigag = Search::symcgieuakksimmu(); if (!(self::yuwueyysmgkecygw === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::ckekocwocaogoeye, self::yuwueyysmgkecygw))) { goto wscikmsmwmocsqeu; } $gaeqamemwmwsyukm = (int) $kcawyocaiuqkigag->weysguygiseoukqw(Setting::mwcsquoskuckeweg, 10); $auuqggkaeoomcksu = $icwicymcioeyeyek[self::qiyqwyiiwykeccmo] >= $gaeqamemwmwsyukm; wscikmsmwmocsqeu: if (!($auuqggkaeoomcksu && self::qwssyugmmaoeqiei === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::okomcksyqygykaoo, self::qwssyugmmaoeqiei))) { goto icawmkaswkmwicsa; } $auuqggkaeoomcksu = (bool) $icwicymcioeyeyek[self::imkkyggguymaqgqi]; icawmkaswkmwicsa: if (!$auuqggkaeoomcksu) { goto kmeekqukcecuscye; } $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $eouekqmooogkoqoo = $jwkieqegmyuwayce->oqomcmyuuakigusk([Pattern::squoamkioomemiyi => Pattern::usoeisyyakwkuyoy, Pattern::usoeisyyakwkuyoy => Pattern::yayciqueeakqwese]); if (!$eouekqmooogkoqoo) { goto qwueqigcisoogaec; } $suaemuyiacqyugsm = $this->wkagassgcaqeosio()->gmowkweososugauu("\57\77\163\x3d{$icwicymcioeyeyek[self::yoayaissyomokiui]}", $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo), self::yayciqueeakqwese, $jwkieqegmyuwayce::usoeisyyakwkuyoy); $sogksuscggsicmac = Page::symcgieuakksimmu()->sigsaicaiyegiqea($suaemuyiacqyugsm); if (!($sogksuscggsicmac && $sogksuscggsicmac[self::ckcawaoawwioqecq])) { goto imsgusweocmiyygi; } $icwicymcioeyeyek[self::ciywsqoeiymemsys] = self::cqymgkkgeosmoowe; imsgusweocmiyygi: qwueqigcisoogaec: kmeekqukcecuscye: return parent::ysouksugwwuisyye($icwicymcioeyeyek); } }
