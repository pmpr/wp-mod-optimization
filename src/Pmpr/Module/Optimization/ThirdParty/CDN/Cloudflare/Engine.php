<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d31ce4ed382             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\142\x72\157\167\163\145\x72\x5f\164\x74\x6c"; const ewoiqwokqwgckgko = "\x72\x65\163\160\x65\x63\164\x5f\x6f\x72\151\x67\151\x6e"; const semgeiqsogkegsee = "\x61\x63\164\x69\x6f\156\137\160\x61\x72\141\x6d\x65\x74\145\162\163"; const meigsywkomcimgyk = "\x73\x65\x74\137\x63\141\x63\150\x65\137\163\x65\x74\x74\x69\x6e\147\163"; const mcquuuwkyksuqaso = "\143\x61\x63\150\145\137\x62\x79\137\144\145\x76\x69\x63\145\137\x74\171\x70\x65"; const sosggameqyisqsaw = "\x63\x61\143\x68\145\x5f\144\145\x63\145\160\x74\151\x6f\x6e\x5f\141\x72\x6d\157\162"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto jgaoqcmiqagoiuko; } $this->api = API::symcgieuakksimmu(); jgaoqcmiqagoiuko: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto iekesyeicomwcuas; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); iekesyeicomwcuas: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto wimggeysyugwwkca; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); wimggeysyugwwkca: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto oycikycyewimcaew; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); oycikycyewimcaew: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto cwsgieeaugwciiwu; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto sqokyowsuawgkusy; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto iyekgiaayeasoggw; sqokyowsuawgkusy: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; iyekgiaayeasoggw: cwsgieeaugwciiwu: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto ykcymsoikgqeaukw; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto wiigoqowismumcsm; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); wiigoqowismumcsm: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto wgcuewwyieoqaoek; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x43\x61\x6e\40\x6e\x6f\164\40\143\x72\x65\141\164\x65\x20\157\162\x20\146\x65\x74\x63\x68\x20\143\141\143\150\x65\40\162\x75\154\x65\163\145\164\x3a\40{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); goto wksssmewgogkacei; wgcuewwyieoqaoek: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto caskqicqwmyuugku; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto ukcukckucsyaggmw; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); ukcukckucsyaggmw: aikukgimkamkgwsu: } mwkcmgksoyycumos: caskqicqwmyuugku: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto qqiwcikkcgmmakow; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto assyuumuuuocycyy; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto oiueawimuggcqgky; assyuumuuuocycyy: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; oiueawimuggcqgky: qqiwcikkcgmmakow: wksssmewgogkacei: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); ykcymsoikgqeaukw: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto akcqguucucewaqws; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); akcqguucucewaqws: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\50\163\x74\x61\162\x74\x73\137\x77\x69\164\150\50\x68\x74\164\x70\x2e\x72\145\161\165\x65\163\x74\56\x75\x72\x69\56\160\x61\x74\x68\x2c\x20\x22\57\42\51\x29", Constants::eqkeooqcsscoggia => "\103\x61\143\x68\x65\40\106\x72\x6f\156\x74\x65\x6e\144\x20\x41\162\x65\x61", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto akycayowsciesmug; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); akycayowsciesmug: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\50\163\x74\x61\162\164\x73\137\x77\x69\x74\150\x28\150\164\x74\x70\x2e\x72\x65\x71\x75\145\163\x74\x2e\165\162\x69\56\x70\x61\164\x68\54\x20\42\57\x77\160\x2d\141\x64\x6d\151\156\x2f\42\51\51", Constants::eqkeooqcsscoggia => "\x42\x79\160\141\x73\163\x20\x42\141\x63\153\145\156\144\40\101\x72\145\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto ogqaueuweieisowc; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\154\x6f\x75\144\x66\x6c\141\x72\x65\40\x25\163\x20\156\157\164\40\x65\x6e\164\x65\x72\x65\144\41", PR__MDL__OPTIMIZATION), __("\145\x2d\155\x61\x69\154", PR__MDL__OPTIMIZATION))); ogqaueuweieisowc: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto waiqmywasoeggkce; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\x6c\x6f\165\144\146\x6c\141\x72\x65\40\x25\x73\x20\x6e\x6f\164\40\145\x6e\164\145\162\145\x64\41", PR__MDL__OPTIMIZATION), __("\101\x50\x49\40\124\x6f\x6b\145\156", PR__MDL__OPTIMIZATION))); waiqmywasoeggkce: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge()))) { goto ggcayqaayysyqmia; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\x68\145\x72\x65\40\x69\x73\40\x61\40\x70\x72\157\142\154\145\x6d\40\x6f\156\x20\x66\x65\164\143\x68\151\x6e\x67\40\162\145\154\x61\x74\x65\x64\40\144\x6f\x6d\141\x69\x6e\x20\164\157\40\145\156\164\x65\162\145\x64\40\141\160\151\40\164\x6f\153\x65\x6e\x2e", PR__MDL__OPTIMIZATION)); ggcayqaayysyqmia: goto yaokowamwsaggege; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto miiegqgiuamasook; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\x6c\157\165\x64\x66\154\141\162\x65\x20\45\163\40\156\157\x74\x20\x65\156\x74\x65\x72\x65\144\x21", PR__MDL__OPTIMIZATION), __("\x41\x50\x49\40\x4b\145\171", PR__MDL__OPTIMIZATION))); miiegqgiuamasook: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow()))) { goto eskmkooukwwieuke; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\x68\145\x72\x65\40\151\x73\40\141\40\x70\x72\x6f\142\x6c\x65\x6d\x20\x6f\156\40\146\x65\164\143\150\151\156\x67\40\x72\145\154\141\164\145\144\40\x7a\x6f\156\x65\40\151\x64\40\x74\x6f\x20\145\156\164\x65\x72\145\x64\40\141\160\151\40\x6b\145\171\56", PR__MDL__OPTIMIZATION)); eskmkooukwwieuke: goto yaokowamwsaggege; } qwqwwywiiuqayaca: yaokowamwsaggege: return true; } }
