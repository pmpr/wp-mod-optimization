<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665afacdd5cec             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; class Cloudflare extends Common { public function ikcgmcycisiccyuc() { $this->guyooeyuaoocssog(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\x69\x74", [$this, "\145\156\161\165\145\x75\x65"])->qcsmikeggeemccuu("\141\144\155\151\x6e\137\151\156\x69\164", [$this, "\x79\x65\171\x69\x67\165\x79\145\147\x6d\155\171\x75\163\x65\x61"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::suyoqewagugqoeuy . self::yyicwqsqaecyqwco, [$this, "\x79\165\x73\157\x6f\x65\x75\167\x65\x6d\157\161\143\x77\155\155"], 10, 0); } public function mameiwsayuyquoeq() { Purge::symcgieuakksimmu(); Setting::symcgieuakksimmu(); Controller::symcgieuakksimmu(); if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { goto ccyiggckemwgooco; } Ajax::symcgieuakksimmu(); ccyiggckemwgooco: } public function yeyiguyegmmyusea() { $this->osiqmmmksqqmscmc(); if (!$this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw()) { goto swkeiggkawwgewuw; } $wewwcsywcagywaay = $this->uykissogmuaaocsg()->omimwscgequgiaue(); if (!is_wp_error($wewwcsywcagywaay)) { goto umamqqwcoewcigew; } $this->cimaucgayqyyccoc(sprintf(__("\120\x6c\145\141\x73\145\x20\143\x6f\x6d\x70\x6c\145\164\x65\x20\x63\x6c\157\165\144\146\x6c\x61\162\145\40\x74\141\142\x20\151\156\x66\x6f\x72\x6d\x61\164\151\x6f\x6e\72\40\45\163", PR__MDL__OPTIMIZATION), $this->gcsweumukyckmgik($wewwcsywcagywaay)), "\143\x66\55\156\157\x74\55\x76\x61\x6c\151\144\55\143\x6f\x6e\x66\x69\x67"); umamqqwcoewcigew: swkeiggkawwgewuw: } public function osiqmmmksqqmscmc() { if (!$this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw()) { goto ykuqeyogsasokqis; } $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); if ($this->weysguygiseoukqw(Setting::iqksqseqeqmaukkk)) { goto sikmqkecsiyciaei; } $qeqooyuoiasweuck = []; if (!$this->weysguygiseoukqw(Setting::yeeemccgmikyeiqq)) { goto usmagcaocwiugqum; } $eggwswqquakgowom = $goqqimcssiyagkwy->iqokecwcgkaookuc(); if (is_wp_error($eggwswqquakgowom)) { goto qwsmiaegmcwuskwi; } if (!is_array($eggwswqquakgowom)) { goto wmcucyuieqgqisis; } $this->uiagwusgwcassqua("\103\x6c\x6f\165\144\146\x6c\141\162\x65\x20\x7a\157\156\x65\x69\x64\163\x20\x66\x65\164\x63\150\x65\144\x20\x73\x75\143\143\145\x73\163\x66\x75\x6c\x6c\171\x2e", $eggwswqquakgowom); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wegekcwgakqeqsmq = $this->weysguygiseoukqw(Setting::uksumkeyuauyuiqm, Setting::fsekswokoseswcqm); $kwyuqamwgumokoac = $this->goewgasukwccacim(); if ($wegekcwgakqeqsmq === Setting::eywauigiwgqckygk) { goto aacaoywsaqscgyua; } if (!in_array($kwyuqamwgumokoac, $eggwswqquakgowom, true)) { goto oaskqsoyesmmeaew; } if (!($kkuqeemoawuaqiwu = $gkyciwoiiisgywcs->get(array_flip($eggwswqquakgowom), $kwyuqamwgumokoac))) { goto kuimgwmkcgcoecko; } $qeqooyuoiasweuck[Setting::iqksqseqeqmaukkk] = $kkuqeemoawuaqiwu; $qeqooyuoiasweuck[Setting::kwuagsmkgsoqgqqi] = self::ON; kuimgwmkcgcoecko: oaskqsoyesmmeaew: goto miigqygoawqmkkqm; aacaoywsaqscgyua: $cqwquiiwkgakwmam = $this->weysguygiseoukqw(Setting::kiuyeswmgaikeiuo); if (!$cqwquiiwkgakwmam) { goto gaiaucesmcqgqwac; } $qeqooyuoiasweuck[Setting::iqksqseqeqmaukkk] = $gkyciwoiiisgywcs->get($eggwswqquakgowom, $cqwquiiwkgakwmam); $qeqooyuoiasweuck[Setting::kwuagsmkgsoqgqqi] = self::ON; gaiaucesmcqgqwac: miigqygoawqmkkqm: if (!$gkyciwoiiisgywcs->get($qeqooyuoiasweuck, Setting::kwuagsmkgsoqgqqi)) { goto qcwkymcgqacaaywc; } $sogksuscggsicmac = $goqqimcssiyagkwy->eigwgcuaamoqkuyw(); if (!is_wp_error($sogksuscggsicmac)) { goto ywqouwqomiqwoquu; } foreach ($qeqooyuoiasweuck as $amakmumgguksgmum => $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($amakmumgguksgmum, $eqgoocgaqwqcimie); eykiuqsamowqykam: } yywwaaiicukuwcao: ywqouwqomiqwoquu: qcwkymcgqacaaywc: wmcucyuieqgqisis: goto yyyyawaqcowsgqcs; qwsmiaegmcwuskwi: $this->cimaucgayqyyccoc($this->gcsweumukyckmgik($eggwswqquakgowom), self::suyoqewagugqoeuy . "\x67\145\164\137\x7a\157\x6e\x65\137\x69\x64", self::imkacwmiuiykyuim); yyyyawaqcowsgqcs: usmagcaocwiugqum: sikmqkecsiyciaei: if ($this->yoaiuuuwwssswyqa()) { goto cquyuwsisgqscemm; } $wquasmyyscuqaqom = $goqqimcssiyagkwy->ymkgoumkoycwwmmq(); if ($wquasmyyscuqaqom && !is_wp_error($wquasmyyscuqaqom)) { goto wammkmaqucqagqww; } $iswcokucwmiosiaq = $this->gcsweumukyckmgik($wquasmyyscuqaqom); if (!is_wp_error($wquasmyyscuqaqom)) { goto wmycwscioqackeig; } $this->cimaucgayqyyccoc($iswcokucwmiosiaq, self::suyoqewagugqoeuy . "\x67\x65\164\137\x64\x65\x76\x5f\x6d\x6f\144\x65", self::imkacwmiuiykyuim); wmycwscioqackeig: $this->oaumimwssciwumys("\x43\x61\x6e\40\x6e\x6f\164\x20\147\x65\164\x20\x64\x65\166\145\154\157\160\x6d\145\156\x74\x20\155\x6f\x64\x65\x20\x64\x61\x74\141\56\x20{$iswcokucwmiosiaq}"); goto iuooqassskiyeemo; wammkmaqucqagqww: $this->awwuyycwuuuggkqy($wquasmyyscuqaqom); iuooqassskiyeemo: cquyuwsisgqscemm: if (!($this->yusooeuwemoqcwmm() && empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)))) { goto eokikuciuqkyauum; } $sogksuscggsicmac = $goqqimcssiyagkwy->eigwgcuaamoqkuyw(true); if (!is_wp_error($sogksuscggsicmac)) { goto imykswegcuekqwio; } $this->cimaucgayqyyccoc($this->gcsweumukyckmgik($sogksuscggsicmac), self::suyoqewagugqoeuy . "\145\x6e\x61\x62\x6c\145\137\160\141\x67\x65\x5f\143\x61\143\150\145", self::imkacwmiuiykyuim); imykswegcuekqwio: eokikuciuqkyauum: ykuqeyogsasokqis: } public function enqueue() { $seiwgiesegcmssam = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!$seiwgiesegcmssam) { goto mqaamqyoywyekiko; } $wcyykoegqiuckcku = $eygsasmqycagyayw->owygwqwawqoiusis("\x62\x75\163\x74\x65\x72")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\142\165\163\x74\x65\x72\x2e\152\x73"))->yiuoscqaekcgiyuy("\x64\x61\164\x61\x2d\x63\146\x61\x73\x79\156\x63", 1); $eygsasmqycagyayw->oeoquuwkoywiuesy($wcyykoegqiuckcku)->ayeieigcckcmsikq($wcyykoegqiuckcku); mqaamqyoywyekiko: if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto smkakiyekkqoggao; } $eygsasmqycagyayw->ieayqiyiuuguowyq("\143\154\x6f\165\x64\146\154\141\x72\145", ["\142\165\163\x74\145\x72" => self::kakkwkmmmaykeoeq, "\x73\x65\154\x65\143\164\157\162" => "\x61"]); goto zggweikegkcgkmma; smkakiyekkqoggao: $eygsasmqycagyayw->ikqyiskqaaymscgw("\x63\154\x6f\x75\x64\x66\154\141\x72\145", ["\141\x6a\141\x78" => Ajax::myikkigscysoykgy, "\163\145\x6c\x65\143\x74\x6f\x72" => implode("\54\x20", ["\43\145\x64\x69\x74\157\162\40\x2e\145\x64\x69\x74\x6f\x72\x2d\x70\157\163\x74\55\160\145\162\x6d\x61\154\151\156\x6b\137\137\x6c\x69\156\153", "\x23\167\160\55\141\x64\155\x69\156\55\142\x61\162\55\x6d\171\55\x73\151\164\x65\x73\55\154\151\163\x74\x20\x61", "\43\145\144\x69\x74\x6f\x72\40\56\145\144\x69\x74\157\162\x2d\160\157\x73\164\x2d\x70\x72\145\166\x69\145\x77", "\43\167\160\55\141\x64\x6d\x69\156\x2d\142\141\162\x2d\x73\151\164\145\55\156\141\155\145\x20\141", "\43\167\160\x2d\141\x64\x6d\151\156\55\142\x61\x72\x2d\166\x69\x65\167\55\163\x69\164\x65\40\x61", "\43\163\x61\155\x70\154\145\x2d\x70\145\162\155\141\x6c\151\156\x6b\x20\141", "\x23\167\x70\55\x61\x64\155\x69\x6e\55\142\x61\x72\55\x76\x69\145\167\x20\141", "\43\145\x64\x69\x74\x6f\x72\40\x2e\151\163\x2d\x6c\151\x6e\x6b", "\56\x72\x6f\167\x2d\x61\x63\x74\x69\x6f\x6e\163\40\141", "\43\155\x65\x73\163\x61\x67\145\40\x61", "\x2e\160\x72\x65\x76\x69\145\x77"]), "\x62\x75\163\x74\x65\x72" => self::kakkwkmmmaykeoeq, "\x70\165\x72\147\x65\137\160\157\x73\x74\x5f\143\x61\143\x68\x65" => ["\x74\151\164\154\x65" => __("\120\x75\x72\147\145\40\x50\x6f\163\164\40\103\141\x63\150\145", PR__MDL__OPTIMIZATION)]]); zggweikegkcgkmma: } public function goewgasukwccacim() { $eeamcawaiqocomwy = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy(untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ieokeoyugcmwuumq())); preg_match("\x23\133\136\56\x5d\52\134\x2e\133\136\56\x5d\x7b\62\54\63\x7d\50\x3f\x3a\x5c\56\x5b\136\56\x5d\x7b\x32\54\x33\175\51\x3f\44\x23", $eeamcawaiqocomwy, $meyiiwcswqmuggyg); return $meyiiwcswqmuggyg[0] ?? ''; } public function guyooeyuaoocssog() { if (!($this->wsaocqmcggmqiskw() && !$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim())) { goto yisoawmmammassqk; } $_SERVER["\x48\x54\124\x50\x53"] = self::ON; yisoawmmammassqk: } private function wsaocqmcggmqiskw() : bool { $aaqqeciegmgusoye = false; $mqkcyikamyyaqicq = ["\110\124\124\120\137\x43\x46\137\126\x49\x53\x49\x54\x4f\x52", "\x48\124\124\x50\x5f\x58\137\x46\117\x52\127\101\122\x44\x45\104\137\x50\122\x4f\x54\x4f"]; foreach ($mqkcyikamyyaqicq as $kwsemgmaugsiusqg) { if (!(isset($_SERVER[$kwsemgmaugsiusqg]) && strpos($_SERVER[$kwsemgmaugsiusqg], "\x68\164\164\x70\x73") !== false)) { goto coskmuqsawiaeyqg; } $aaqqeciegmgusoye = true; goto gcsosokicycukoyc; coskmuqsawiaeyqg: seqammocqkyswaim: } gcsosokicycukoyc: return $aaqqeciegmgusoye; } }
