<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ef4c57cf814             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Dependencies; use WP_Scripts; class Engine extends Common { protected bool $added = false; public function auioqsqaowomwaoe() : bool { return $this->added; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x70\x5f\160\x69\156\164\137\163\164\171\x6c\145\x73", [$this, "\153\171\x79\167\167\x71\x6f\147\x63\157\143\147\x63\147\167\x6d"], 9999)->qcsmikeggeemccuu("\167\x70\x5f\160\151\x6e\x74\137\163\x63\162\x69\x70\x74\x73", [$this, "\x6f\171\165\161\163\155\x6b\x69\x77\151\x6b\147\x61\x71\163\x77"], 9999); } public function kyywwqogcocgcgwm() { global $wp_styles; $this->enqueue($wp_styles); } public function oyuqsmkiwikgaqsw() { global $wp_scripts; $this->enqueue($wp_scripts); } public function enqueue($oseqkueswiwsceis) { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto owismwmeqcmukagu; } $ecukkacusqswqoem = false; if (!$oseqkueswiwsceis instanceof WP_Dependencies) { goto oqckuigyqswmqcqg; } foreach ($oseqkueswiwsceis->queue as $eueuqacmukymcyya) { $ecukkacusqswqoem = $this->waowasqqegsqwoay($eueuqacmukymcyya, $oseqkueswiwsceis) || $ecukkacusqswqoem; ioiwoukauoeamuca: } cceggewquoaemcwq: oqckuigyqswmqcqg: owismwmeqcmukagu: } private function waowasqqegsqwoay(string $eueuqacmukymcyya, ?WP_Dependencies $ugmuiugkaygmsagq = null) : bool { if (!$ugmuiugkaygmsagq) { goto wsqeiwkgoiekwasy; } $sqeykgyoooqysmca = $ugmuiugkaygmsagq instanceof WP_Scripts ? Constants::qssgasiyswwaciwc : Constants::wwukgkqwyakeqwqk; $egsumesakcaaukem = $ugmuiugkaygmsagq->registered[$eueuqacmukymcyya] ?? null; $aguwegoioikwgooy = "{$sqeykgyoooqysmca}\55{$eueuqacmukymcyya}"; if (!($egsumesakcaaukem && !preg_match("\57\143\144\156\x2e\x6a\x73\x64\145\154\151\x76\x72\56\x6e\x65\x74\x7c\147\x6f\x6f\147\x6c\x65\x61\x70\151\57\x69", $egsumesakcaaukem->src))) { goto smmagoyuqoigoesc; } $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $aoikqkkeucuokoay = $gcskoooiimggowew->oqomcmyuuakigusk([Constants::ascagqcquwgmygkm => $aguwegoioikwgooy, Constants::igecewwoemccgwsq => $gcskoooiimggowew::gycwocuuococmiqw]); if (empty($aoikqkkeucuokoay)) { goto aqksouwmeckaqyaq; } if (!(time() - strtotime($gcskoooiimggowew->qogaqkcsogcqiaic($aoikqkkeucuokoay, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS)) { goto ykogqmmywykgouqy; } $gcskoooiimggowew->wqikesawekycweoi($aoikqkkeucuokoay, [$gcskoooiimggowew::equemyqwoqoousqq => time()]); $ogomymegcoacqisg = $gcskoooiimggowew->qogaqkcsogcqiaic($aoikqkkeucuokoay, Constants::iocouekmygsaocuo); if ($ogomymegcoacqisg) { goto oiywguooqeasueqq; } $ogomymegcoacqisg = $egsumesakcaaukem->src; oiywguooqeasueqq: $this->added = true; $geoqacegumkcaskk = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); if (Constants::qssgasiyswwaciwc === $sqeykgyoooqysmca) { goto yugmwomumkosucsc; } $geoqacegumkcaskk->iqmcmgkyssqgoqok($eueuqacmukymcyya); $geoqacegumkcaskk->mkaaikgsosqiaiqg($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $geoqacegumkcaskk->ciuuyygmkuwgoiki($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); awkqcyusycccekwq: } myooisakyuggoggc: goto kqwyogqqwumumiwg; yugmwomumkosucsc: $geoqacegumkcaskk->cawwmsmyseesuyee($eueuqacmukymcyya); $geoqacegumkcaskk->wyouyuiqisgqwgww($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $geoqacegumkcaskk->keecueggosiqseiw($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); qsaoyggkqwcgskwk: } equwcsciiggsuiam: kqwyogqqwumumiwg: ykogqmmywykgouqy: goto gmsyoscesymiwwue; aqksouwmeckaqyaq: $gcskoooiimggowew->gscuuyuyauokoyuo([Constants::acyomymuuygeoqks => $eueuqacmukymcyya, Constants::iocouekmygsaocuo => '', $gcskoooiimggowew::equemyqwoqoousqq => time()]); gmsyoscesymiwwue: foreach ($egsumesakcaaukem->deps as $icycamqakysyomsi) { $this->waowasqqegsqwoay($icycamqakysyomsi, $ugmuiugkaygmsagq); ayucsuwsiocgycww: } eiicmcasqikiyasw: smmagoyuqoigoesc: wsqeiwkgoiekwasy: } }
