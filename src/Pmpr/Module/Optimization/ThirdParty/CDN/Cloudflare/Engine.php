<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6686855490492             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use WP_Error; class Engine extends Common { private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto cquyuwsisgqscemm; } $this->api = API::symcgieuakksimmu(); cquyuwsisgqscemm: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto imykswegcuekqwio; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); imykswegcuekqwio: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto eokikuciuqkyauum; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); eokikuciuqkyauum: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto ykuqeyogsasokqis; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); ykuqeyogsasokqis: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto zggweikegkcgkmma; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto mqaamqyoywyekiko; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto smkakiyekkqoggao; mqaamqyoywyekiko: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; smkakiyekkqoggao: zggweikegkcgkmma: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto maeccckgcsaaumkw; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto yisoawmmammassqk; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); yisoawmmammassqk: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto smksoismyouykeoa; } $this->oaumimwssciwumys("\x43\141\x6e\40\x6e\x6f\164\x20\143\162\145\x61\x74\145\x20\x6f\x72\x20\x66\145\x74\x63\150\x20\x63\141\x63\150\x65\x20\162\x75\154\x65\x73\x65\x74\72\40{$this->gcsweumukyckmgik($keyoqcuykssgcoau)}"); goto qwgkwokcyocqiyee; smksoismyouykeoa: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto umccwcqwkoiaakmu; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[self::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto coskmuqsawiaeyqg; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); coskmuqsawiaeyqg: seqammocqkyswaim: } gcsosokicycukoyc: umccwcqwkoiaakmu: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto imquwacukaswoyka; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto ekgkiioywougquka; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto wyyowcsciaqkuiuq; ekgkiioywougquka: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; wyyowcsciaqkuiuq: imquwacukaswoyka: qwgkwokcyocqiyee: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); maeccckgcsaaumkw: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto gcoeaokkagaaeuse; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); gcoeaokkagaaeuse: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [self::uqgcmmosieyimiku => self::meigsywkomcimgyk, self::yyicwqsqaecyqwco => true, self::guqyegycwyqquagq => "\x28\163\164\141\x72\164\163\137\x77\x69\164\x68\50\x68\164\164\x70\56\x72\x65\x71\x75\145\163\164\x2e\165\162\151\56\160\x61\x74\150\54\x20\42\57\42\51\x29", self::eqkeooqcsscoggia => "\103\x61\x63\150\x65\40\106\x72\157\x6e\x74\x65\156\144\x20\101\162\x65\141", self::semgeiqsogkegsee => [self::mqakwueykamgwqci => true, self::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [self::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto kcqueaewmayywqeq; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); kcqueaewmayywqeq: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [self::uqgcmmosieyimiku => self::meigsywkomcimgyk, self::yyicwqsqaecyqwco => true, self::guqyegycwyqquagq => "\x28\x73\164\x61\162\164\163\137\167\151\164\x68\50\150\x74\164\160\56\162\145\x71\165\x65\x73\164\x2e\165\x72\x69\56\160\x61\164\150\x2c\40\x22\x2f\x77\160\x2d\141\144\x6d\x69\x6e\x2f\42\51\x29", self::eqkeooqcsscoggia => "\x42\171\160\x61\x73\163\x20\x42\141\143\153\145\156\x64\40\x41\x72\145\x61", self::semgeiqsogkegsee => [self::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue() { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto uagsgicwwcakecwq; } return $this->oemauiimmycumcsk(sprintf(__("\103\154\x6f\x75\x64\146\x6c\141\162\145\40\45\x73\x20\156\x6f\164\x20\145\156\x74\x65\x72\x65\x64\41", PR__MDL__OPTIMIZATION), __("\x65\x2d\155\141\x69\x6c", PR__MDL__OPTIMIZATION))); uagsgicwwcakecwq: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto yweucowesgsoewyc; } return $this->oemauiimmycumcsk(sprintf(__("\x43\154\x6f\165\144\x66\x6c\141\162\x65\x20\x25\163\40\x6e\x6f\x74\x20\145\156\x74\145\162\145\x64\41", PR__MDL__OPTIMIZATION), __("\x41\x50\111\40\x54\157\153\x65\156", PR__MDL__OPTIMIZATION))); yweucowesgsoewyc: if (!empty($yqimccamkgmmuuyg->sawoqaskqkasksge())) { goto ikygockuuyimmmwk; } return $this->oemauiimmycumcsk(__("\124\150\145\162\145\x20\151\163\40\141\40\x70\162\x6f\x62\x6c\x65\x6d\x20\157\156\40\x66\x65\x74\143\150\151\x6e\147\40\162\145\154\141\x74\x65\144\x20\x64\x6f\x6d\141\151\x6e\40\164\x6f\x20\145\x6e\164\x65\x72\x65\144\x20\141\160\151\40\164\157\153\145\x6e\56", PR__MDL__OPTIMIZATION)); ikygockuuyimmmwk: goto qocgmocqauaaekii; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto uwmcugkwqwcuqqsq; } return $this->oemauiimmycumcsk(sprintf(__("\103\154\x6f\x75\144\146\154\x61\162\x65\40\x25\163\40\156\x6f\x74\x20\x65\x6e\164\145\x72\145\x64\41", PR__MDL__OPTIMIZATION), __("\x41\x50\x49\40\x4b\x65\x79", PR__MDL__OPTIMIZATION))); uwmcugkwqwcuqqsq: if (!empty($yqimccamkgmmuuyg->mekmkysuwsuseaow())) { goto cycasoiysmksuwqk; } return $this->oemauiimmycumcsk(__("\x54\150\x65\162\x65\x20\x69\163\40\x61\x20\160\x72\x6f\142\154\x65\155\x20\157\x6e\40\146\145\164\143\x68\x69\x6e\147\40\162\x65\154\141\x74\x65\x64\40\x7a\x6f\156\145\40\x69\x64\40\164\157\x20\x65\x6e\x74\145\x72\x65\144\40\x61\x70\x69\x20\153\145\x79\56", PR__MDL__OPTIMIZATION)); cycasoiysmksuwqk: goto qocgmocqauaaekii; } gsggsmmwcmkgyyss: qocgmocqauaaekii: return true; } }
