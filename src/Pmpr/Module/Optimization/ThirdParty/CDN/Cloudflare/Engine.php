<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665dbcb8a031d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use WP_Error; class Engine extends Common { private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto ywokggauuiosegog; } $this->api = API::symcgieuakksimmu(); ywokggauuiosegog: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto uoewiggumomegksg; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); uoewiggumomegksg: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto sockocsycmkaeosg; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); sockocsycmkaeosg: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto ugkwqaywmwqucoeo; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); ugkwqaywmwqucoeo: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto kwasqmcyiswoaiuu; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto syisomgawcsqeemk; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto asoecuscmsyusmkg; syisomgawcsqeemk: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; asoecuscmsyusmkg: kwasqmcyiswoaiuu: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto ecgwgamiseokmise; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto kiskwawumeiiieuk; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); kiskwawumeiiieuk: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto maggecymmmesqmqs; } $this->oaumimwssciwumys("\x43\x61\156\x20\156\x6f\x74\40\x63\162\145\141\164\145\40\157\x72\x20\x66\x65\164\143\150\x20\143\141\x63\150\145\40\162\165\154\x65\x73\x65\164\72\x20{$this->gcsweumukyckmgik($keyoqcuykssgcoau)}"); goto csaksaisgawusswg; maggecymmmesqmqs: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto miugmimciywcgswm; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[self::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto awuwuuuagqysukku; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); awuwuuuagqysukku: kkmuuoscccmokkiw: } oaqeoqsksuyyggmg: miugmimciywcgswm: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto emeeocqaisksyioq; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto aqekkeqmmewoyawu; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto mcqwuawosciucemq; aqekkeqmmewoyawu: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; mcqwuawosciucemq: emeeocqaisksyioq: csaksaisgawusswg: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); ecgwgamiseokmise: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto qkiyyywwuiuackao; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); qkiyyywwuiuackao: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [self::uqgcmmosieyimiku => self::meigsywkomcimgyk, self::yyicwqsqaecyqwco => true, self::guqyegycwyqquagq => "\50\163\x74\141\x72\164\163\x5f\167\151\x74\x68\x28\150\x74\164\160\56\x72\145\161\x75\145\x73\x74\x2e\165\162\151\x2e\160\141\x74\150\x2c\x20\x22\57\42\x29\51", self::eqkeooqcsscoggia => "\103\x61\143\x68\x65\x20\106\162\x6f\x6e\164\145\156\x64\40\x41\162\145\x61", self::semgeiqsogkegsee => [self::mqakwueykamgwqci => true, self::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [self::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto gyskcwykkyakeims; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); gyskcwykkyakeims: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [self::uqgcmmosieyimiku => self::meigsywkomcimgyk, self::yyicwqsqaecyqwco => true, self::guqyegycwyqquagq => "\x28\x73\164\x61\162\x74\163\137\x77\151\x74\150\50\150\164\164\x70\56\162\x65\x71\165\145\163\x74\56\x75\x72\x69\56\160\141\164\x68\x2c\40\42\57\x77\x70\x2d\x61\x64\x6d\151\x6e\x2f\42\x29\51", self::eqkeooqcsscoggia => "\102\x79\160\x61\x73\x73\40\x42\141\x63\x6b\x65\156\144\x20\101\x72\145\x61", self::semgeiqsogkegsee => [self::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue() { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto ossakckwskyqusmm; } return $this->oemauiimmycumcsk(sprintf(__("\103\x6c\x6f\165\144\146\154\x61\162\145\x20\x25\163\40\x6e\x6f\x74\40\145\156\x74\145\x72\x65\x64\x21", PR__MDL__OPTIMIZATION), __("\145\55\155\x61\151\x6c", PR__MDL__OPTIMIZATION))); ossakckwskyqusmm: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto cimascmiesomqgqs; } return $this->oemauiimmycumcsk(sprintf(__("\x43\154\157\x75\144\x66\154\x61\x72\145\x20\x25\163\40\156\x6f\164\40\x65\x6e\x74\145\162\145\x64\x21", PR__MDL__OPTIMIZATION), __("\x41\120\x49\x20\124\x6f\x6b\x65\x6e", PR__MDL__OPTIMIZATION))); cimascmiesomqgqs: if (!empty($yqimccamkgmmuuyg->sawoqaskqkasksge())) { goto easuiqiooiwgswmm; } return $this->oemauiimmycumcsk(__("\124\x68\145\162\x65\x20\x69\163\40\x61\x20\x70\x72\157\x62\x6c\x65\x6d\x20\x6f\x6e\x20\x66\x65\x74\x63\150\151\156\x67\40\162\x65\x6c\141\164\145\144\x20\144\157\x6d\x61\151\156\40\164\x6f\40\x65\156\164\x65\x72\x65\144\40\x61\x70\151\x20\164\x6f\153\145\156\x2e", PR__MDL__OPTIMIZATION)); easuiqiooiwgswmm: goto mcagemacuqyskogs; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto saiuoomgskwgyeya; } return $this->oemauiimmycumcsk(sprintf(__("\x43\x6c\x6f\x75\x64\x66\x6c\x61\162\145\40\x25\163\x20\156\x6f\x74\40\145\156\x74\x65\162\x65\x64\41", PR__MDL__OPTIMIZATION), __("\x41\120\111\x20\x4b\145\x79", PR__MDL__OPTIMIZATION))); saiuoomgskwgyeya: if (!empty($yqimccamkgmmuuyg->mekmkysuwsuseaow())) { goto kuuawiosmkgqsscy; } return $this->oemauiimmycumcsk(__("\124\x68\x65\x72\145\40\151\163\x20\141\x20\x70\x72\157\x62\154\145\155\40\157\156\x20\x66\145\164\143\150\x69\156\147\x20\x72\x65\x6c\141\164\145\144\x20\172\x6f\x6e\145\x20\151\144\40\x74\x6f\40\145\x6e\164\x65\x72\145\x64\40\141\x70\x69\x20\153\145\171\x2e", PR__MDL__OPTIMIZATION)); kuuawiosmkgqsscy: goto mcagemacuqyskogs; } aamgqoqyyooimqkm: mcagemacuqyskogs: return true; } }
