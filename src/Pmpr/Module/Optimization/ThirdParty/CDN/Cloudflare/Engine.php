<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cf4c4bca826             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\142\162\157\167\163\x65\x72\137\x74\x74\x6c"; const ewoiqwokqwgckgko = "\x72\x65\163\160\145\x63\164\x5f\157\x72\151\x67\151\x6e"; const semgeiqsogkegsee = "\x61\x63\164\x69\x6f\x6e\x5f\160\x61\x72\141\x6d\145\x74\145\x72\163"; const meigsywkomcimgyk = "\163\x65\164\137\x63\x61\143\150\145\x5f\163\x65\164\x74\151\x6e\x67\163"; const mcquuuwkyksuqaso = "\x63\141\x63\150\x65\x5f\142\x79\x5f\144\x65\x76\151\143\x65\x5f\164\171\160\x65"; const sosggameqyisqsaw = "\x63\141\x63\150\145\x5f\144\145\143\x65\160\164\x69\157\x6e\137\141\162\155\157\x72"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto syquiiogeymgicuy; } $this->api = API::symcgieuakksimmu(); syquiiogeymgicuy: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto yquysamwsoyyqcya; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); yquysamwsoyyqcya: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto qsycguggqkgywgaq; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); qsycguggqkgywgaq: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto wsyeqyekimescwkq; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); wsyeqyekimescwkq: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto iiyggeuemwuwqiey; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto gyceukwoyaasuwik; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto iiyamaquicwswcyu; gyceukwoyaasuwik: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; iiyamaquicwswcyu: iiyggeuemwuwqiey: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto wiiyageyqowkmmko; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto omeookmiomoieeee; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); omeookmiomoieeee: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto ogywsgmqcgioaoqk; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\103\141\x6e\x20\156\x6f\164\x20\143\x72\x65\141\x74\145\40\157\162\40\x66\x65\x74\143\150\x20\143\141\x63\x68\145\40\162\165\x6c\x65\x73\145\x74\72\x20{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); goto ayggiggmcqckqwom; ogywsgmqcgioaoqk: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto pscqogmyseiwuqye; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto aigeoggkowgwwwqg; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); aigeoggkowgwwwqg: ggoyigsoyccmscum: } agokkauammisaqke: pscqogmyseiwuqye: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto wcagqkquasswioos; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto cyyecekuwygaqwcy; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto muqeeocooyiosouk; cyyecekuwygaqwcy: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; muqeeocooyiosouk: wcagqkquasswioos: ayggiggmcqckqwom: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); wiiyageyqowkmmko: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto mowauiysyiciqaaa; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); mowauiysyiciqaaa: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\50\163\164\141\162\x74\x73\137\167\x69\164\150\50\x68\x74\164\160\56\162\x65\161\165\x65\x73\164\56\165\x72\151\x2e\160\141\x74\150\54\40\x22\x2f\42\x29\51", Constants::eqkeooqcsscoggia => "\x43\x61\x63\x68\145\40\x46\162\x6f\x6e\164\145\156\144\40\101\162\x65\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto msuyygiskkumokec; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); msuyygiskkumokec: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\x73\x74\141\x72\164\x73\137\167\151\x74\x68\x28\150\164\164\160\x2e\162\x65\161\165\x65\x73\x74\56\165\x72\151\56\160\x61\164\x68\54\40\42\57\x77\160\55\141\144\x6d\x69\156\57\42\51\x29", Constants::eqkeooqcsscoggia => "\x42\x79\x70\141\x73\163\40\x42\x61\143\x6b\x65\x6e\x64\x20\101\162\145\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto ggkgseywksemuogc; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\154\x6f\x75\x64\146\154\141\x72\x65\40\45\163\x20\x6e\x6f\x74\x20\x65\156\164\145\162\145\x64\41", PR__MDL__OPTIMIZATION), __("\x65\x2d\x6d\x61\x69\x6c", PR__MDL__OPTIMIZATION))); ggkgseywksemuogc: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto mgscyaiwekksacco; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\154\x6f\165\144\146\154\141\x72\x65\x20\x25\x73\40\156\x6f\x74\40\x65\156\x74\145\162\x65\x64\41", PR__MDL__OPTIMIZATION), __("\x41\120\x49\x20\x54\157\153\145\156", PR__MDL__OPTIMIZATION))); mgscyaiwekksacco: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge()))) { goto sykwygmouoikuyws; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\x68\x65\x72\145\x20\x69\x73\40\x61\40\160\162\157\142\x6c\145\155\40\157\x6e\40\x66\145\x74\x63\150\151\156\147\x20\x72\145\x6c\141\x74\145\x64\40\144\x6f\155\x61\x69\x6e\40\x74\x6f\x20\145\x6e\164\145\162\145\x64\40\141\160\151\x20\x74\157\x6b\145\156\56", PR__MDL__OPTIMIZATION)); sykwygmouoikuyws: goto iyeswqeqcsmsoueq; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto keiciayiyqsemsys; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\154\x6f\x75\x64\146\x6c\141\162\145\x20\45\x73\x20\156\157\164\40\145\x6e\164\x65\x72\x65\x64\41", PR__MDL__OPTIMIZATION), __("\x41\120\111\40\x4b\x65\x79", PR__MDL__OPTIMIZATION))); keiciayiyqsemsys: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow()))) { goto ggoquyyseekiwukq; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\x65\x72\x65\x20\151\163\x20\x61\40\x70\x72\157\142\154\x65\155\x20\157\x6e\40\x66\x65\x74\143\150\x69\x6e\147\40\x72\145\x6c\x61\164\145\x64\x20\x7a\x6f\x6e\x65\x20\151\x64\x20\164\157\40\x65\x6e\x74\x65\x72\x65\x64\40\141\x70\x69\x20\153\x65\171\56", PR__MDL__OPTIMIZATION)); ggoquyyseekiwukq: goto iyeswqeqcsmsoueq; } eiekcqosmyqmwqag: iyeswqeqcsmsoueq: return true; } }
