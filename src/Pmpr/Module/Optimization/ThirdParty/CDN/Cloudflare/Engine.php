<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6686aaf854850             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use WP_Error; class Engine extends Common { private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto eokikuciuqkyauum; } $this->api = API::symcgieuakksimmu(); eokikuciuqkyauum: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto ykuqeyogsasokqis; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); ykuqeyogsasokqis: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto mqaamqyoywyekiko; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); mqaamqyoywyekiko: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto smkakiyekkqoggao; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); smkakiyekkqoggao: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto gcsosokicycukoyc; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto zggweikegkcgkmma; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto yisoawmmammassqk; zggweikegkcgkmma: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; yisoawmmammassqk: gcsosokicycukoyc: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto kcqueaewmayywqeq; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto seqammocqkyswaim; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); seqammocqkyswaim: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto maeccckgcsaaumkw; } $this->oaumimwssciwumys("\103\141\x6e\40\x6e\x6f\164\40\x63\162\x65\x61\x74\145\x20\157\162\40\x66\x65\x74\143\150\40\x63\141\x63\x68\x65\40\162\165\154\145\163\x65\x74\72\40{$this->gcsweumukyckmgik($keyoqcuykssgcoau)}"); goto gcoeaokkagaaeuse; maeccckgcsaaumkw: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto wyyowcsciaqkuiuq; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[self::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto ekgkiioywougquka; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); ekgkiioywougquka: umccwcqwkoiaakmu: } coskmuqsawiaeyqg: wyyowcsciaqkuiuq: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto qwgkwokcyocqiyee; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto imquwacukaswoyka; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto smksoismyouykeoa; imquwacukaswoyka: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; smksoismyouykeoa: qwgkwokcyocqiyee: gcoeaokkagaaeuse: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); kcqueaewmayywqeq: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto uagsgicwwcakecwq; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); uagsgicwwcakecwq: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [self::uqgcmmosieyimiku => self::meigsywkomcimgyk, self::yyicwqsqaecyqwco => true, self::guqyegycwyqquagq => "\x28\x73\164\141\162\x74\x73\137\x77\151\x74\150\x28\150\164\x74\x70\56\162\145\161\x75\145\163\x74\x2e\x75\x72\151\x2e\x70\141\164\150\x2c\40\x22\x2f\x22\51\x29", self::eqkeooqcsscoggia => "\x43\x61\x63\150\145\40\106\x72\x6f\156\164\x65\156\144\x20\101\162\x65\141", self::semgeiqsogkegsee => [self::mqakwueykamgwqci => true, self::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [self::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto qocgmocqauaaekii; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); qocgmocqauaaekii: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [self::uqgcmmosieyimiku => self::meigsywkomcimgyk, self::yyicwqsqaecyqwco => true, self::guqyegycwyqquagq => "\50\x73\x74\141\x72\164\x73\137\x77\x69\164\150\x28\x68\x74\164\x70\56\x72\145\161\165\145\163\164\56\165\162\x69\x2e\x70\x61\164\x68\54\x20\x22\x2f\x77\x70\x2d\x61\x64\155\151\156\57\42\51\x29", self::eqkeooqcsscoggia => "\x42\171\160\141\x73\x73\40\x42\141\143\153\x65\156\x64\x20\101\x72\145\141", self::semgeiqsogkegsee => [self::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue() { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto gsggsmmwcmkgyyss; } return $this->oemauiimmycumcsk(sprintf(__("\103\154\x6f\x75\x64\146\154\141\x72\145\40\x25\163\40\156\x6f\164\40\145\x6e\164\145\162\x65\x64\x21", PR__MDL__OPTIMIZATION), __("\x65\x2d\155\x61\151\x6c", PR__MDL__OPTIMIZATION))); gsggsmmwcmkgyyss: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto uwmcugkwqwcuqqsq; } return $this->oemauiimmycumcsk(sprintf(__("\103\154\x6f\165\144\x66\x6c\141\x72\145\40\x25\163\40\x6e\x6f\x74\40\145\x6e\164\x65\162\145\144\x21", PR__MDL__OPTIMIZATION), __("\x41\x50\111\40\x54\157\153\145\156", PR__MDL__OPTIMIZATION))); uwmcugkwqwcuqqsq: if (!empty($yqimccamkgmmuuyg->sawoqaskqkasksge())) { goto cycasoiysmksuwqk; } return $this->oemauiimmycumcsk(__("\124\150\x65\x72\x65\x20\151\x73\40\x61\40\160\x72\x6f\142\x6c\145\x6d\x20\x6f\x6e\x20\146\x65\164\x63\150\151\156\147\x20\x72\145\x6c\x61\x74\145\144\x20\144\157\x6d\x61\151\156\x20\164\157\x20\x65\x6e\x74\x65\162\x65\144\40\141\x70\151\x20\164\x6f\153\x65\x6e\56", PR__MDL__OPTIMIZATION)); cycasoiysmksuwqk: goto yweucowesgsoewyc; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto muimagegskoisckc; } return $this->oemauiimmycumcsk(sprintf(__("\x43\154\157\x75\x64\x66\x6c\141\162\x65\40\45\x73\x20\156\x6f\x74\40\145\156\164\x65\162\145\x64\41", PR__MDL__OPTIMIZATION), __("\101\120\x49\x20\113\145\x79", PR__MDL__OPTIMIZATION))); muimagegskoisckc: if (!empty($yqimccamkgmmuuyg->mekmkysuwsuseaow())) { goto yicaqocukqoauqgc; } return $this->oemauiimmycumcsk(__("\x54\150\145\162\145\40\x69\163\40\x61\x20\x70\x72\x6f\142\154\x65\x6d\x20\x6f\x6e\40\x66\145\x74\x63\x68\x69\x6e\147\x20\162\145\154\x61\x74\x65\x64\x20\172\157\x6e\145\x20\x69\x64\x20\x74\157\40\145\x6e\164\145\162\x65\144\40\141\160\x69\40\153\x65\x79\x2e", PR__MDL__OPTIMIZATION)); yicaqocukqoauqgc: goto yweucowesgsoewyc; } ikygockuuyimmmwk: yweucowesgsoewyc: return true; } }
