<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0d3aa9dad2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\142\162\157\167\163\x65\x72\137\164\x74\x6c"; const ewoiqwokqwgckgko = "\162\x65\x73\x70\x65\143\164\137\157\162\151\147\151\156"; const semgeiqsogkegsee = "\x61\143\164\151\157\x6e\137\x70\x61\x72\x61\x6d\145\x74\145\162\x73"; const meigsywkomcimgyk = "\163\145\x74\x5f\143\x61\143\x68\x65\x5f\x73\145\164\164\151\x6e\147\163"; const mcquuuwkyksuqaso = "\x63\141\x63\x68\x65\x5f\x62\171\137\144\145\x76\x69\143\x65\x5f\x74\x79\x70\x65"; const sosggameqyisqsaw = "\x63\141\143\x68\x65\x5f\x64\x65\x63\145\160\x74\x69\157\156\137\141\162\x6d\x6f\162"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto amqgiisymksuuuss; } $this->api = API::symcgieuakksimmu(); amqgiisymksuuuss: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto iwgmywqocewwgoeo; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); iwgmywqocewwgoeo: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto syoeqaqkseguwmgy; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); syoeqaqkseguwmgy: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto sgiouaqukyycswqm; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); sgiouaqukyycswqm: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto uugwmywmaqomeksa; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto gwkawguwsamuomuo; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto ucasigqmoiwaimkk; gwkawguwsamuomuo: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; ucasigqmoiwaimkk: uugwmywmaqomeksa: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto geasgywiogoeamek; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto wowmysuygugawmmu; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); wowmysuygugawmmu: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto umemmgiwimkymaya; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x43\141\156\40\156\157\164\x20\143\x72\x65\x61\x74\145\40\157\162\40\x66\145\x74\x63\150\40\x63\x61\143\150\x65\40\x72\x75\154\145\163\x65\x74\x3a\x20{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); goto omsmaougqkqigogw; umemmgiwimkymaya: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto gsiaskgsukseumig; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto xogaycsaesgqeqig; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); xogaycsaesgqeqig: iquugwoswgkoiieg: } mmmqqoemusicwgqg: gsiaskgsukseumig: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto imwiyqcekcykscui; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto syiyemqigyugagks; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto woqkgwmkmqsuceuy; syiyemqigyugagks: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; woqkgwmkmqsuceuy: imwiyqcekcykscui: omsmaougqkqigogw: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); geasgywiogoeamek: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto qweyymyuuqwcmkqg; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); qweyymyuuqwcmkqg: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\50\163\x74\141\162\164\163\137\167\151\164\150\x28\150\x74\x74\160\x2e\x72\x65\x71\x75\145\x73\x74\56\x75\162\x69\56\160\x61\164\150\54\x20\42\x2f\42\x29\x29", Constants::eqkeooqcsscoggia => "\x43\141\143\150\145\40\x46\x72\157\156\164\145\156\x64\40\101\162\x65\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto guqmgiqaaowaauyo; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); guqmgiqaaowaauyo: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\x73\164\x61\x72\x74\163\137\x77\151\x74\x68\50\150\164\164\x70\56\162\x65\161\x75\145\x73\x74\56\165\x72\x69\x2e\160\x61\x74\x68\x2c\40\x22\x2f\x77\x70\55\141\144\x6d\151\156\x2f\x22\x29\x29", Constants::eqkeooqcsscoggia => "\102\171\160\x61\x73\163\x20\102\x61\143\x6b\x65\x6e\144\40\101\162\x65\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto mccimkgwkkamsime; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\154\157\165\x64\146\x6c\141\162\145\x20\45\x73\40\x6e\x6f\x74\40\145\156\164\x65\162\145\144\x21", PR__MDL__OPTIMIZATION), __("\x65\x2d\155\141\151\x6c", PR__MDL__OPTIMIZATION))); mccimkgwkkamsime: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto oasisywuwssumsok; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\154\x6f\x75\144\x66\154\x61\x72\145\40\x25\x73\40\x6e\x6f\x74\40\145\156\x74\145\162\145\x64\41", PR__MDL__OPTIMIZATION), __("\101\120\x49\40\x54\x6f\x6b\x65\156", PR__MDL__OPTIMIZATION))); oasisywuwssumsok: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge()))) { goto iaoyeugekskmewgs; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\x68\x65\x72\x65\40\151\163\x20\141\40\x70\162\157\142\154\x65\x6d\40\157\156\x20\146\x65\x74\143\150\151\x6e\x67\40\162\x65\154\141\164\145\x64\x20\144\157\155\x61\151\x6e\x20\164\157\x20\145\x6e\164\145\x72\x65\144\x20\141\160\151\40\x74\x6f\x6b\145\x6e\56", PR__MDL__OPTIMIZATION)); iaoyeugekskmewgs: goto ucaoyoamaycsiacq; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto iokemmkgmcaksiqu; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\154\x6f\165\x64\146\x6c\141\162\145\x20\x25\163\40\156\x6f\x74\40\x65\x6e\164\145\162\x65\144\41", PR__MDL__OPTIMIZATION), __("\101\x50\x49\40\x4b\145\x79", PR__MDL__OPTIMIZATION))); iokemmkgmcaksiqu: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow()))) { goto okagauksoqkoqygi; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\x68\x65\162\x65\40\x69\163\x20\141\40\160\162\x6f\142\154\x65\155\x20\157\156\x20\146\x65\x74\x63\150\x69\156\x67\40\x72\145\154\141\x74\x65\144\40\x7a\157\x6e\145\x20\x69\x64\x20\164\x6f\40\145\156\164\x65\x72\145\144\x20\x61\x70\151\x20\153\145\171\x2e", PR__MDL__OPTIMIZATION)); okagauksoqkoqygi: goto ucaoyoamaycsiacq; } iuyagqakcieasiua: ucaoyoamaycsiacq: return true; } }
