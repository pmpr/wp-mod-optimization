<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b9397c5c62b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use WP_Error; class Engine extends Common { private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto wkcwuemioaiyouek; } $this->api = API::symcgieuakksimmu(); wkcwuemioaiyouek: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto usgmimcwygsmcioa; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); usgmimcwygsmcioa: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto qggiogeyowcoaiqy; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); qggiogeyowcoaiqy: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto ekgcquiosyesyism; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); ekgcquiosyesyism: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto kgeggsckmgcgwcqm; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto qosckaqceoumcasm; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto gmcqkoqwkiawaikw; qosckaqceoumcasm: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; gmcqkoqwkiawaikw: kgeggsckmgcgwcqm: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto ikeyoyoigsuouokm; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto qimieogaimwmukmu; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); qimieogaimwmukmu: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto ygywkqgioiscmuie; } $this->oaumimwssciwumys("\x43\x61\156\40\x6e\157\x74\40\x63\x72\145\x61\x74\145\40\157\x72\40\x66\x65\164\143\150\40\x63\x61\143\150\145\x20\x72\165\x6c\145\x73\x65\x74\x3a\40{$this->gcsweumukyckmgik($keyoqcuykssgcoau)}"); goto iuaommmyqoecmuss; ygywkqgioiscmuie: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto cokacyaayuueyuuu; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[self::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto koawwmccgquqqmwa; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); koawwmccgquqqmwa: wogokmgkgkumqcws: } gmymycwymqkuiisi: cokacyaayuueyuuu: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto eqieeecackceeweg; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto cycyaqqawmwiywwe; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto ckowiuagwmsqmiqc; cycyaqqawmwiywwe: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; ckowiuagwmsqmiqc: eqieeecackceeweg: iuaommmyqoecmuss: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); ikeyoyoigsuouokm: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto eecgougegqassgyq; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); eecgougegqassgyq: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [self::uqgcmmosieyimiku => self::meigsywkomcimgyk, self::yyicwqsqaecyqwco => true, self::guqyegycwyqquagq => "\50\x73\164\141\x72\x74\163\x5f\x77\x69\164\150\x28\150\164\164\x70\x2e\x72\x65\x71\165\x65\x73\x74\x2e\165\162\x69\x2e\160\141\x74\150\x2c\40\42\57\42\51\x29", self::eqkeooqcsscoggia => "\x43\141\143\x68\145\40\x46\x72\157\x6e\164\145\156\144\40\101\x72\145\141", self::semgeiqsogkegsee => [self::mqakwueykamgwqci => true, self::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [self::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto cuwkqgemkmuuegkc; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); cuwkqgemkmuuegkc: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [self::uqgcmmosieyimiku => self::meigsywkomcimgyk, self::yyicwqsqaecyqwco => true, self::guqyegycwyqquagq => "\x28\x73\164\141\x72\164\x73\137\167\151\x74\150\50\150\164\x74\160\56\x72\145\161\x75\x65\x73\x74\56\165\x72\x69\x2e\160\141\164\x68\x2c\x20\x22\57\167\160\55\141\144\x6d\151\156\x2f\x22\51\51", self::eqkeooqcsscoggia => "\x42\171\160\x61\163\163\x20\102\x61\143\153\145\156\x64\x20\101\x72\x65\141", self::semgeiqsogkegsee => [self::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto oyicskieeaewgwce; } return $this->oemauiimmycumcsk(sprintf(__("\103\154\157\165\x64\x66\154\x61\x72\x65\40\x25\163\x20\x6e\157\x74\x20\x65\x6e\164\145\x72\x65\x64\x21", PR__MDL__OPTIMIZATION), __("\145\x2d\x6d\x61\151\x6c", PR__MDL__OPTIMIZATION))); oyicskieeaewgwce: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto scaimkkukmgoeaya; } return $this->oemauiimmycumcsk(sprintf(__("\103\x6c\x6f\165\144\146\154\141\x72\x65\x20\x25\163\40\x6e\157\164\40\145\x6e\x74\x65\x72\145\x64\41", PR__MDL__OPTIMIZATION), __("\x41\120\111\x20\x54\157\153\145\156", PR__MDL__OPTIMIZATION))); scaimkkukmgoeaya: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge()))) { goto ceeqguaoysyaasey; } return $this->oemauiimmycumcsk(__("\x54\x68\145\162\145\40\x69\163\40\141\x20\x70\162\x6f\x62\154\x65\155\40\157\x6e\40\x66\145\164\x63\150\151\x6e\x67\40\162\x65\x6c\141\x74\145\144\x20\x64\x6f\155\x61\151\156\40\164\x6f\x20\145\156\164\x65\x72\145\x64\x20\x61\160\151\x20\164\x6f\153\145\x6e\x2e", PR__MDL__OPTIMIZATION)); ceeqguaoysyaasey: goto wemmseueskwkcwou; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto ekmqouqsgsaukeiq; } return $this->oemauiimmycumcsk(sprintf(__("\x43\154\x6f\165\144\x66\154\x61\162\x65\40\45\x73\40\x6e\157\164\x20\145\156\164\145\162\x65\x64\41", PR__MDL__OPTIMIZATION), __("\101\x50\111\x20\x4b\x65\171", PR__MDL__OPTIMIZATION))); ekmqouqsgsaukeiq: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow()))) { goto cugkqmkuyuwwqcec; } return $this->oemauiimmycumcsk(__("\124\x68\145\162\x65\x20\x69\x73\40\x61\x20\160\162\157\x62\154\x65\155\x20\157\156\x20\x66\145\164\143\x68\x69\156\147\40\x72\x65\x6c\x61\164\x65\144\x20\172\x6f\156\145\40\x69\144\x20\164\x6f\40\x65\156\x74\x65\162\145\144\x20\141\x70\x69\40\x6b\x65\171\56", PR__MDL__OPTIMIZATION)); cugkqmkuyuwwqcec: goto wemmseueskwkcwou; } cceakqgoysacqwmc: wemmseueskwkcwou: return true; } }
