<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6686aaf854850             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; class Cloudflare extends Common { public function ikcgmcycisiccyuc() { $this->guyooeyuaoocssog(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\x74", [$this, "\145\x6e\x71\x75\x65\165\145"])->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\137\x69\156\x69\x74", [$this, "\x6f\x73\x69\x71\x6d\155\x6d\153\x73\161\161\x6d\x73\x63\x6d\x63"]); $this->waqewsckuayqguos(self::kgswyesggeyekgmg . "\144\x65\x76\x5f\x6d\157\x64\145\x5f\143\150\141\156\147\145\x64", [$this, "\153\x65\147\163\x63\145\143\155\x61\147\151\145\147\157\x73\x65"])->waqewsckuayqguos(self::kgswyesggeyekgmg . "\142\x65\x66\x6f\162\145\137\x73\164\141\x72\x74\x5f\160\x72\x65\154\157\141\144\137\x75\162\x6c\x73", [$this, "\143\x79\x63\165\155\x75\171\x71\x61\x75\x61\145\153\157\171\x71"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\x70\x72\x65\154\157\141\144\x5f\x72\145\x71\165\x65\163\164\137\141\x72\147\163", [$this, "\x79\x69\141\141\143\145\167\155\x6b\x77\143\x77\x61\x6f\167\153"])->aqaqisyssqeomwom(self::suyoqewagugqoeuy . self::yyicwqsqaecyqwco, [$this, "\171\x75\x73\x6f\157\x65\165\x77\145\x6d\x6f\x71\x63\x77\x6d\x6d"], 10, 0); } public function mameiwsayuyquoeq() { Purge::symcgieuakksimmu(); Setting::symcgieuakksimmu(); Controller::symcgieuakksimmu(); } public function kegscecmagiegose($wquasmyyscuqaqom) { $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); if (!(in_array($wquasmyyscuqaqom, [self::ON, self::OFF], true) && $goqqimcssiyagkwy->omimwscgequgiaue())) { goto iaygaasesyymwgss; } $yeacayasgueouoqc = $goqqimcssiyagkwy->ymkgoumkoycwwmmq(); if (!is_wp_error($yeacayasgueouoqc)) { goto oskwkeaemiqcaqkc; } $this->oaumimwssciwumys("\x43\106\x3a\x20\x63\x61\x6e\40\156\157\x74\x20\x66\145\x74\143\x68\x20\x63\165\x72\162\145\156\164\x20\144\145\x76\40\x6d\x6f\144\x65\54\40{$this->gcsweumukyckmgik($yeacayasgueouoqc)}"); goto kiqmcymowosckmii; oskwkeaemiqcaqkc: if (!$yeacayasgueouoqc) { goto iisieuaeyiqwckou; } if ($yeacayasgueouoqc !== $wquasmyyscuqaqom) { goto eygqeoiskweuiuqi; } Setting::symcgieuakksimmu()->awwuyycwuuuggkqy($wquasmyyscuqaqom); goto uykwmucgoywoesui; eygqeoiskweuiuqi: $csgemygcekwywekw = $this->uykissogmuaaocsg()->emukusgiakigsoms($wquasmyyscuqaqom); if (!is_wp_error($csgemygcekwywekw)) { goto iamooqskosymqsmw; } $this->oaumimwssciwumys("\103\106\72\40\x53\x6f\155\x65\x74\150\x69\x6e\x67\40\167\162\157\x6e\x67\x20\157\x6e\40\x63\150\x61\x6e\x67\x69\x6e\147\40\144\x65\166\x20\155\157\144\x65\54\40{$this->gcsweumukyckmgik($csgemygcekwywekw)}"); goto wwccoougkywoaoui; iamooqskosymqsmw: Setting::symcgieuakksimmu()->awwuyycwuuuggkqy($wquasmyyscuqaqom); $this->oaumimwssciwumys("\103\106\72\x20\104\x65\166\x20\115\x6f\x64\145\x20\143\150\141\156\147\145\144\40\x73\x75\x63\x63\x65\163\x73\146\165\154\x6c\x79\56"); wwccoougkywoaoui: uykwmucgoywoesui: iisieuaeyiqwckou: kiqmcymowosckmii: iaygaasesyymwgss: } public function yiaacewmkwcwaowk($ywmkwiwkosakssii) { if (!($aecgggeoymywyumm = $this->weysguygiseoukqw(Setting::emausmuaoecugeeg))) { goto iacwyogogoccmwsg; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($aecgggeoymywyumm, "\x4e\x61\x6d\x65"); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($aecgggeoymywyumm, "\126\x61\x6c\x75\x65"); if (!($ymqmyyeuycgmigyo && $eqgoocgaqwqcimie)) { goto iwosouqsesoqcska; } $ywmkwiwkosakssii[self::gmosckicggqkicim]["\x43\x6f\x6f\x6b\151\x65"] = "{$ymqmyyeuycgmigyo}\x3d{$eqgoocgaqwqcimie}"; iwosouqsesoqcska: iacwyogogoccmwsg: return $ywmkwiwkosakssii; } public function cycumuyqauaekoyq() { if (!($aecgggeoymywyumm = $this->uykissogmuaaocsg()->mgmmiqgyemaeicim()->yuyomsisoyaokqgu())) { goto wqmwcuggcisqieao; } $this->uykissogmuaaocsg()->ewqscwwmugoqwomg(Setting::emausmuaoecugeeg, $aecgggeoymywyumm); wqmwcuggcisqieao: } public function osiqmmmksqqmscmc() { if (!$this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw()) { goto yywwaaiicukuwcao; } $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); $wewwcsywcagywaay = $goqqimcssiyagkwy->omimwscgequgiaue(); if ($wewwcsywcagywaay && !is_wp_error($wewwcsywcagywaay)) { goto aacaoywsaqscgyua; } $this->cimaucgayqyyccoc(sprintf(__("\120\154\x65\x61\163\145\x20\143\x6f\155\x70\x6c\145\164\x65\x20\143\154\x6f\165\144\146\x6c\x61\x72\145\40\x74\x61\x62\x20\x69\156\146\x6f\x72\155\x61\164\151\157\x6e\72\x20\x25\163", PR__MDL__OPTIMIZATION), $this->gcsweumukyckmgik($wewwcsywcagywaay)), self::suyoqewagugqoeuy . "\143\x6f\x6e\x66\x69\147\165\x72\x61\x74\x69\157\156"); goto miigqygoawqmkkqm; aacaoywsaqscgyua: if ($this->weysguygiseoukqw(Setting::iqksqseqeqmaukkk)) { goto mssaawaiaimogowg; } $eggwswqquakgowom = $goqqimcssiyagkwy->iqokecwcgkaookuc(); if (is_wp_error($eggwswqquakgowom)) { goto yueosioyegouuwqo; } if (!is_array($eggwswqquakgowom)) { goto yeiicwscguyokwyu; } $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iyamemcoiwsucioi, $eggwswqquakgowom); $this->uiagwusgwcassqua("\103\154\157\x75\x64\146\x6c\x61\162\145\x20\x7a\x6f\156\145\40\x69\144\163\40\146\145\164\x63\150\x65\144\40\x73\x75\143\143\x65\163\x73\x66\165\x6c\x6c\x79\56", $eggwswqquakgowom); if (!($kkuqeemoawuaqiwu = Setting::symcgieuakksimmu()->uiwouioqckimcqsq($eggwswqquakgowom))) { goto issgmmkcgesyeoas; } $qmykgskisgoyymoc = $goqqimcssiyagkwy->qmykgskisgoyymoc(); if (!is_wp_error($qmykgskisgoyymoc)) { goto qsyqcokomswykyso; } $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iqksqseqeqmaukkk, $kkuqeemoawuaqiwu); qsyqcokomswykyso: issgmmkcgesyeoas: yeiicwscguyokwyu: goto giuoqsumkimmuaya; yueosioyegouuwqo: $this->cimaucgayqyyccoc(sprintf(__("\103\x61\x6e\40\156\x6f\164\x20\147\x65\164\x20\143\154\157\x75\144\x66\x6c\141\162\x65\40\x7a\x6f\156\145\x73\x20\x6c\x69\163\x74\x3a\x20\45\163", PR__MDL__OPTIMIZATION), $this->gcsweumukyckmgik($eggwswqquakgowom)), self::suyoqewagugqoeuy . "\147\x65\164\137\172\157\x6e\x65\x5f\154\151\x73\x74", self::imkacwmiuiykyuim); giuoqsumkimmuaya: mssaawaiaimogowg: $ykquycoiqesuckco = Setting::symcgieuakksimmu(); if ($ykquycoiqesuckco->yoaiuuuwwssswyqa()) { goto gaiaucesmcqgqwac; } $wquasmyyscuqaqom = $goqqimcssiyagkwy->ymkgoumkoycwwmmq(); if ($wquasmyyscuqaqom && !is_wp_error($wquasmyyscuqaqom)) { goto umamqqwcoewcigew; } $iswcokucwmiosiaq = $this->gcsweumukyckmgik($wquasmyyscuqaqom); if (!is_wp_error($wquasmyyscuqaqom)) { goto ccyiggckemwgooco; } $this->cimaucgayqyyccoc(sprintf(__("\103\x61\156\x20\156\x6f\x74\x20\147\x65\x74\40\143\x6c\157\x75\144\x66\154\141\162\145\40\x64\145\x76\x65\x6c\x6f\x70\x6d\x65\156\164\40\x6d\x6f\144\145\x3a\x20\x25\163", PR__MDL__OPTIMIZATION), $this->gcsweumukyckmgik($iswcokucwmiosiaq)), self::suyoqewagugqoeuy . "\147\145\164\x5f\144\145\x76\137\x6d\157\144\145", self::imkacwmiuiykyuim); ccyiggckemwgooco: $this->oaumimwssciwumys("\x43\141\x6e\x20\x6e\157\x74\x20\147\145\x74\40\x64\145\166\145\x6c\157\160\155\x65\x6e\x74\x20\155\157\x64\145\x20\144\x61\164\x61\x2e\x20{$iswcokucwmiosiaq}"); goto swkeiggkawwgewuw; umamqqwcoewcigew: $ykquycoiqesuckco->awwuyycwuuuggkqy($wquasmyyscuqaqom); swkeiggkawwgewuw: gaiaucesmcqgqwac: if (!(!$this->yusooeuwemoqcwmm() || !$goqqimcssiyagkwy->ammwuioucccacgwc())) { goto oaskqsoyesmmeaew; } $qmykgskisgoyymoc = $goqqimcssiyagkwy->qmykgskisgoyymoc(); if (!is_wp_error($qmykgskisgoyymoc)) { goto kuimgwmkcgcoecko; } $this->cimaucgayqyyccoc($this->gcsweumukyckmgik($qmykgskisgoyymoc), self::suyoqewagugqoeuy . "\x65\x6e\141\142\154\145\137\x70\x61\147\x65\x5f\x63\141\143\150\x65", self::imkacwmiuiykyuim); kuimgwmkcgcoecko: oaskqsoyesmmeaew: miigqygoawqmkkqm: yywwaaiicukuwcao: } public function enqueue() { $seiwgiesegcmssam = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!$seiwgiesegcmssam) { goto eykiuqsamowqykam; } $wcyykoegqiuckcku = $eygsasmqycagyayw->owygwqwawqoiusis("\142\165\163\164\145\162")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\142\x75\x73\164\145\x72\56\x6a\163"))->yiuoscqaekcgiyuy("\144\141\x74\141\55\x63\x66\141\x73\x79\156\143", 1); $eygsasmqycagyayw->oeoquuwkoywiuesy($wcyykoegqiuckcku)->ayeieigcckcmsikq($wcyykoegqiuckcku); eykiuqsamowqykam: if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto ywqouwqomiqwoquu; } $eygsasmqycagyayw->ieayqiyiuuguowyq("\143\154\x6f\165\144\x66\154\x61\162\145", ["\142\165\x73\164\x65\162" => self::kakkwkmmmaykeoeq, "\x73\x65\x6c\145\143\164\x6f\162" => "\x61"]); goto qcwkymcgqacaaywc; ywqouwqomiqwoquu: $eygsasmqycagyayw->ikqyiskqaaymscgw("\143\x6c\x6f\165\x64\146\x6c\141\162\x65", ["\141\x6a\141\x78" => Ajax::myikkigscysoykgy, "\163\x65\x6c\145\x63\x74\x6f\x72" => implode("\x2c\x20", ["\x23\x65\144\151\x74\x6f\x72\40\56\x65\144\151\164\x6f\162\55\x70\157\x73\x74\x2d\160\145\162\155\141\154\151\156\x6b\x5f\137\154\151\x6e\x6b", "\x23\167\x70\55\x61\x64\x6d\x69\x6e\55\142\x61\x72\x2d\x6d\171\x2d\x73\151\x74\145\x73\55\154\151\163\x74\40\x61", "\x23\145\x64\x69\x74\157\x72\x20\x2e\145\144\151\x74\x6f\162\x2d\160\157\x73\164\x2d\160\162\145\166\x69\x65\167", "\x23\167\x70\55\141\144\x6d\151\x6e\55\142\141\162\x2d\x73\151\x74\145\55\156\141\x6d\x65\x20\141", "\x23\x77\160\55\141\144\155\x69\156\x2d\x62\141\x72\55\166\151\x65\167\55\x73\x69\x74\x65\40\x61", "\x23\163\x61\155\x70\x6c\145\x2d\x70\145\x72\155\141\x6c\x69\156\x6b\x20\141", "\x23\x77\160\x2d\x61\x64\x6d\x69\156\x2d\142\x61\162\x2d\166\151\145\167\x20\141", "\43\145\144\x69\x74\157\x72\40\56\x69\163\55\x6c\x69\x6e\x6b", "\56\162\x6f\167\x2d\x61\x63\164\151\157\156\163\x20\x61", "\43\x6d\x65\x73\163\141\147\x65\40\x61", "\x2e\160\x72\x65\x76\x69\145\x77"]), "\x62\x75\163\x74\x65\162" => self::kakkwkmmmaykeoeq, "\x70\x75\x72\x67\145\x5f\x70\157\163\164\137\143\141\x63\150\x65" => ["\x74\x69\x74\x6c\145" => __("\120\x75\162\147\x65\x20\x50\x6f\x73\164\40\x43\x61\x63\150\x65", PR__MDL__OPTIMIZATION)]]); qcwkymcgqacaaywc: } public function goewgasukwccacim() { $eeamcawaiqocomwy = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy(untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ieokeoyugcmwuumq())); preg_match("\43\133\136\x2e\x5d\52\134\x2e\133\x5e\56\135\x7b\x32\x2c\x33\x7d\50\77\72\134\56\x5b\136\x2e\x5d\173\62\x2c\63\175\51\x3f\x24\x23", $eeamcawaiqocomwy, $meyiiwcswqmuggyg); return $meyiiwcswqmuggyg[0] ?? ''; } public function guyooeyuaoocssog() { if (!($this->wsaocqmcggmqiskw() && !$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim())) { goto wmcucyuieqgqisis; } $_SERVER["\x48\124\x54\x50\123"] = self::ON; wmcucyuieqgqisis: } private function wsaocqmcggmqiskw() : bool { $aaqqeciegmgusoye = false; $mqkcyikamyyaqicq = ["\x48\124\124\x50\x5f\103\x46\x5f\x56\111\123\111\124\x4f\x52", "\110\124\124\x50\137\x58\x5f\106\117\x52\127\x41\x52\104\x45\x44\137\120\x52\117\x54\117"]; foreach ($mqkcyikamyyaqicq as $kwsemgmaugsiusqg) { if (!(isset($_SERVER[$kwsemgmaugsiusqg]) && strpos($_SERVER[$kwsemgmaugsiusqg], "\150\164\x74\x70\163") !== false)) { goto usmagcaocwiugqum; } $aaqqeciegmgusoye = true; goto qwsmiaegmcwuskwi; usmagcaocwiugqum: yyyyawaqcowsgqcs: } qwsmiaegmcwuskwi: return $aaqqeciegmgusoye; } }
