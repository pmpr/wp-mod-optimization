<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cf8fcabf8fd             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\142\x72\157\x77\163\145\x72\x5f\x74\164\x6c"; const ewoiqwokqwgckgko = "\x72\x65\x73\x70\145\x63\x74\137\x6f\162\x69\x67\151\x6e"; const semgeiqsogkegsee = "\x61\143\164\x69\157\x6e\x5f\x70\x61\x72\x61\155\145\164\145\162\163"; const meigsywkomcimgyk = "\x73\x65\x74\x5f\143\141\143\150\x65\x5f\163\145\164\164\151\x6e\x67\163"; const mcquuuwkyksuqaso = "\x63\x61\x63\150\145\x5f\x62\x79\x5f\x64\145\x76\151\x63\x65\x5f\164\x79\x70\145"; const sosggameqyisqsaw = "\x63\141\143\x68\145\x5f\144\145\x63\x65\160\164\x69\x6f\156\x5f\141\162\x6d\x6f\162"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto wsyeqyekimescwkq; } $this->api = API::symcgieuakksimmu(); wsyeqyekimescwkq: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto gyceukwoyaasuwik; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); gyceukwoyaasuwik: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto iiyamaquicwswcyu; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); iiyamaquicwswcyu: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto iiyggeuemwuwqiey; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); iiyggeuemwuwqiey: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto ggoyigsoyccmscum; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto omeookmiomoieeee; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto agokkauammisaqke; omeookmiomoieeee: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; agokkauammisaqke: ggoyigsoyccmscum: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto ggkgseywksemuogc; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto aigeoggkowgwwwqg; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); aigeoggkowgwwwqg: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto mowauiysyiciqaaa; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x43\x61\156\40\156\x6f\x74\40\143\162\145\141\164\145\x20\x6f\x72\x20\x66\145\164\143\150\x20\143\141\x63\150\x65\40\x72\165\x6c\145\163\x65\x74\x3a\x20{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); goto msuyygiskkumokec; mowauiysyiciqaaa: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto wcagqkquasswioos; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto muqeeocooyiosouk; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); muqeeocooyiosouk: cyyecekuwygaqwcy: } pscqogmyseiwuqye: wcagqkquasswioos: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto wiiyageyqowkmmko; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto ogywsgmqcgioaoqk; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto ayggiggmcqckqwom; ogywsgmqcgioaoqk: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; ayggiggmcqckqwom: wiiyageyqowkmmko: msuyygiskkumokec: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); ggkgseywksemuogc: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto iyeswqeqcsmsoueq; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); iyeswqeqcsmsoueq: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\x73\164\141\x72\164\x73\x5f\x77\x69\x74\x68\50\150\164\164\x70\56\162\x65\161\x75\x65\163\x74\x2e\x75\x72\151\x2e\160\x61\164\150\54\40\x22\x2f\42\x29\x29", Constants::eqkeooqcsscoggia => "\103\x61\143\150\145\40\x46\162\157\x6e\164\145\156\144\x20\101\x72\x65\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto eiekcqosmyqmwqag; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); eiekcqosmyqmwqag: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\x73\164\141\162\x74\x73\137\x77\151\164\x68\x28\x68\164\x74\x70\x2e\162\145\x71\x75\145\x73\x74\x2e\x75\x72\x69\56\160\x61\164\x68\54\40\42\x2f\167\160\55\141\144\155\x69\x6e\57\42\51\x29", Constants::eqkeooqcsscoggia => "\x42\171\160\141\x73\x73\40\x42\x61\x63\x6b\145\156\144\40\101\162\145\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto mgscyaiwekksacco; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\x6c\157\165\x64\x66\x6c\x61\162\x65\40\45\163\x20\156\157\x74\x20\145\156\164\x65\162\145\144\x21", PR__MDL__OPTIMIZATION), __("\145\55\155\141\151\154", PR__MDL__OPTIMIZATION))); mgscyaiwekksacco: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto ggoquyyseekiwukq; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\x6c\157\165\144\x66\x6c\x61\162\145\40\x25\163\x20\156\157\x74\40\145\156\164\x65\162\x65\144\x21", PR__MDL__OPTIMIZATION), __("\x41\x50\111\x20\124\157\x6b\145\x6e", PR__MDL__OPTIMIZATION))); ggoquyyseekiwukq: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge()))) { goto dwciioycickkwawq; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\150\145\x72\x65\x20\151\163\40\x61\40\x70\162\157\142\154\x65\155\x20\157\x6e\40\x66\145\164\143\x68\x69\x6e\x67\x20\x72\x65\154\141\164\x65\144\40\144\x6f\x6d\141\151\156\40\x74\x6f\40\145\156\x74\145\162\145\x64\x20\141\x70\x69\40\x74\157\x6b\145\x6e\56", PR__MDL__OPTIMIZATION)); dwciioycickkwawq: goto sykwygmouoikuyws; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto yoociieskmuucgms; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\154\x6f\165\x64\146\x6c\x61\162\x65\40\x25\x73\x20\x6e\157\x74\40\x65\x6e\164\x65\x72\145\x64\x21", PR__MDL__OPTIMIZATION), __("\x41\x50\111\40\113\x65\171", PR__MDL__OPTIMIZATION))); yoociieskmuucgms: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow()))) { goto ysiuiuqawkaaamus; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\x68\x65\x72\x65\x20\151\x73\40\141\40\160\x72\157\142\154\x65\x6d\40\157\156\40\x66\x65\164\x63\150\151\156\x67\40\162\x65\x6c\141\164\x65\x64\x20\x7a\x6f\156\145\x20\151\144\x20\164\157\40\x65\156\x74\145\162\145\x64\x20\141\160\151\x20\x6b\145\x79\x2e", PR__MDL__OPTIMIZATION)); ysiuiuqawkaaamus: goto sykwygmouoikuyws; } keiciayiyqsemsys: sykwygmouoikuyws: return true; } }
