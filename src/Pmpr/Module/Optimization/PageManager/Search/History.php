<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665f4289276f4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\Search; use Pmpr\Module\Optimization\Optimizer\SpecialPage\Search\Setting; use Pmpr\Module\Optimization\PageManager\Model\Common; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; class History extends Common { public $timestamps = null; const imkkyggguymaqgqi = "\150\x61\163\137\162\x65\163\165\154\x74"; public function ckgmycmaukqgkosk() { $this->oyeskqayoscwciem()->guiaswksukmgageq(__("\x53\x65\x61\x72\x63\x68\x20\110\x69\163\164\x6f\x72\171", PR__MDL__OPTIMIZATION))->muuwuqssqkaieqge(__("\x53\145\x61\162\x63\x68\x20\110\151\x73\164\x6f\162\151\145\x73", PR__MDL__OPTIMIZATION)); parent::ckgmycmaukqgkosk(); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->usqseiuaeauwuwus(self::yoayaissyomokiui)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x53\145\141\x72\143\150\145\x64\40\x54\x65\x72\x6d", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->vsuwiusoqmuueegu(self::qiyqwyiiwykeccmo)->ogymmssscoqeuyye()->gswweykyogmsyawy(__("\x43\x6f\165\x6e\x74", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->omkueasmegecueyk(self::imkkyggguymaqgqi)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\x48\141\x73\40\x52\145\163\x75\x6c\164", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(self::ciywsqoeiymemsys)->gswweykyogmsyawy(__("\123\x74\141\164\x75\163", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(1, self::sgoswgskyiiwkyuo, __("\x50\145\x6e\x64\x69\x6e\x67", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, self::cqymgkkgeosmoowe, __("\101\144\x64\x65\x64", PR__MDL__OPTIMIZATION))->eyygsasuqmommkua(self::sgoswgskyiiwkyuo)); parent::ewaqwooqoqmcoomi(); } public function ysouksugwwuisyye($icwicymcioeyeyek) { $auuqggkaeoomcksu = true; $kcawyocaiuqkigag = Search::symcgieuakksimmu(); if (!(self::yuwueyysmgkecygw === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::ckekocwocaogoeye, self::yuwueyysmgkecygw))) { goto qsaoyggkqwcgskwk; } $gaeqamemwmwsyukm = (int) $kcawyocaiuqkigag->weysguygiseoukqw(Setting::mwcsquoskuckeweg, 10); $auuqggkaeoomcksu = $icwicymcioeyeyek[self::qiyqwyiiwykeccmo] >= $gaeqamemwmwsyukm; qsaoyggkqwcgskwk: if (!($auuqggkaeoomcksu && self::qwssyugmmaoeqiei === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::okomcksyqygykaoo, self::qwssyugmmaoeqiei))) { goto myooisakyuggoggc; } $auuqggkaeoomcksu = (bool) $icwicymcioeyeyek[self::imkkyggguymaqgqi]; myooisakyuggoggc: if (!$auuqggkaeoomcksu) { goto kqwyogqqwumumiwg; } $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $eouekqmooogkoqoo = $jwkieqegmyuwayce->oqomcmyuuakigusk([Pattern::squoamkioomemiyi => Pattern::usoeisyyakwkuyoy, Pattern::usoeisyyakwkuyoy => Pattern::yayciqueeakqwese]); if (!$eouekqmooogkoqoo) { goto yugmwomumkosucsc; } $suaemuyiacqyugsm = $this->wkagassgcaqeosio()->gmowkweososugauu("\57\x3f\163\x3d{$icwicymcioeyeyek[self::yoayaissyomokiui]}", $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo), self::yayciqueeakqwese, $jwkieqegmyuwayce::usoeisyyakwkuyoy); $sogksuscggsicmac = Page::symcgieuakksimmu()->sigsaicaiyegiqea($suaemuyiacqyugsm); if (!($sogksuscggsicmac && $sogksuscggsicmac[self::ckcawaoawwioqecq])) { goto awkqcyusycccekwq; } $icwicymcioeyeyek[self::ciywsqoeiymemsys] = self::cqymgkkgeosmoowe; awkqcyusycccekwq: yugmwomumkosucsc: kqwyogqqwumumiwg: return parent::ysouksugwwuisyye($icwicymcioeyeyek); } }
