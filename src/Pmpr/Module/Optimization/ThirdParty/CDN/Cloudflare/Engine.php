<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a69ee00a3ca             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use WP_Error; class Engine extends Common { private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto asmecuqiyyswueqe; } $this->api = API::symcgieuakksimmu(); asmecuqiyyswueqe: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto csscmcacoikwsecs; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); csscmcacoikwsecs: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto cuykwgmswkskqkyi; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); cuykwgmswkskqkyi: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto kuicqywysciceggs; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); kuicqywysciceggs: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto eqkauqciwewmgeoi; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto mkwskuycuyguqqok; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto sciwggaeogcoesiu; mkwskuycuyguqqok: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; sciwggaeogcoesiu: eqkauqciwewmgeoi: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto goacqqsgaaigyuaw; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto kwagwqyusyiyoaqs; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); kwagwqyusyiyoaqs: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto ocokwuuquaokmasc; } $this->oaumimwssciwumys("\x43\141\x6e\x20\x6e\157\164\x20\143\162\x65\141\x74\145\x20\157\162\40\146\x65\164\143\150\x20\143\x61\x63\x68\x65\x20\x72\165\x6c\x65\x73\145\164\x3a\x20{$this->gcsweumukyckmgik($keyoqcuykssgcoau)}"); goto yiwiqaqmwiogawym; ocokwuuquaokmasc: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto sqiciiuwmykocycc; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[self::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto iomcaiwewsawiamu; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); iomcaiwewsawiamu: kiqogmwcgcamwiig: } yowsmsiyimmimemc: sqiciiuwmykocycc: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto cggowoquuiwqkyew; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto eequksumcoogyoem; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto uukumskkeggaowck; eequksumcoogyoem: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; uukumskkeggaowck: cggowoquuiwqkyew: yiwiqaqmwiogawym: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); goacqqsgaaigyuaw: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto meawswgwagoqgkye; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); meawswgwagoqgkye: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [self::uqgcmmosieyimiku => self::meigsywkomcimgyk, self::yyicwqsqaecyqwco => true, self::guqyegycwyqquagq => "\50\x73\x74\141\x72\164\x73\x5f\167\x69\164\x68\x28\150\x74\164\160\x2e\162\x65\x71\165\x65\x73\x74\56\x75\162\151\56\x70\141\164\x68\54\x20\42\x2f\42\51\51", self::eqkeooqcsscoggia => "\103\141\x63\x68\x65\x20\106\162\x6f\156\x74\145\x6e\144\40\x41\x72\x65\x61", self::semgeiqsogkegsee => [self::mqakwueykamgwqci => true, self::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [self::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto wcesymwqykqoyuqk; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); wcesymwqykqoyuqk: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [self::uqgcmmosieyimiku => self::meigsywkomcimgyk, self::yyicwqsqaecyqwco => true, self::guqyegycwyqquagq => "\x28\x73\164\x61\162\x74\x73\x5f\x77\x69\164\150\50\150\164\164\160\56\x72\x65\x71\x75\145\x73\164\x2e\165\x72\151\56\160\x61\x74\x68\54\x20\42\x2f\167\160\55\x61\x64\x6d\151\x6e\x2f\42\51\51", self::eqkeooqcsscoggia => "\102\x79\160\x61\163\163\x20\x42\x61\x63\153\145\x6e\144\x20\101\x72\x65\141", self::semgeiqsogkegsee => [self::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue() { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto usqgaogkqgemuima; } return $this->oemauiimmycumcsk(sprintf(__("\x43\154\157\x75\144\x66\x6c\x61\162\x65\40\45\163\x20\156\x6f\164\40\145\x6e\x74\145\162\145\x64\x21", PR__MDL__OPTIMIZATION), __("\145\x2d\155\141\151\154", PR__MDL__OPTIMIZATION))); usqgaogkqgemuima: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto kecwuwwcwokuksyq; } return $this->oemauiimmycumcsk(sprintf(__("\103\154\x6f\x75\144\x66\x6c\141\x72\145\40\x25\x73\x20\156\x6f\164\40\x65\x6e\x74\x65\162\x65\144\41", PR__MDL__OPTIMIZATION), __("\101\120\x49\40\124\x6f\153\x65\x6e", PR__MDL__OPTIMIZATION))); kecwuwwcwokuksyq: if (!empty($yqimccamkgmmuuyg->sawoqaskqkasksge())) { goto qgegkeomwscwwiuw; } return $this->oemauiimmycumcsk(__("\x54\150\145\x72\145\40\151\x73\40\141\x20\160\162\x6f\142\x6c\x65\x6d\40\x6f\x6e\x20\146\x65\164\143\x68\151\x6e\147\x20\162\145\154\x61\164\x65\x64\x20\144\x6f\x6d\x61\x69\156\x20\164\157\40\145\156\x74\x65\162\145\144\40\141\x70\151\x20\x74\x6f\x6b\x65\x6e\x2e", PR__MDL__OPTIMIZATION)); qgegkeomwscwwiuw: goto mswsoaimesegiiic; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto qmiwsequckckoaei; } return $this->oemauiimmycumcsk(sprintf(__("\103\x6c\x6f\x75\144\x66\154\141\162\145\x20\45\x73\x20\156\157\x74\x20\145\x6e\164\145\x72\145\144\41", PR__MDL__OPTIMIZATION), __("\x41\x50\x49\40\113\x65\171", PR__MDL__OPTIMIZATION))); qmiwsequckckoaei: if (!empty($yqimccamkgmmuuyg->mekmkysuwsuseaow())) { goto goeoymmqqqeeoime; } return $this->oemauiimmycumcsk(__("\124\150\x65\162\145\40\x69\163\x20\141\x20\160\x72\x6f\142\x6c\145\x6d\40\157\156\x20\x66\145\164\x63\x68\x69\x6e\147\40\162\x65\x6c\141\x74\x65\x64\x20\x7a\157\x6e\x65\40\151\144\40\164\157\x20\x65\156\x74\145\162\145\x64\x20\x61\160\x69\40\x6b\145\x79\x2e", PR__MDL__OPTIMIZATION)); goeoymmqqqeeoime: goto mswsoaimesegiiic; } egasokooagakisiy: mswsoaimesegiiic: return true; } }
