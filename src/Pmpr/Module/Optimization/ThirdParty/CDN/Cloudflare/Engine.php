<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132a7dc622             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\x62\x72\157\x77\x73\x65\162\x5f\164\164\x6c"; const ewoiqwokqwgckgko = "\162\x65\x73\x70\145\143\164\137\157\x72\x69\x67\151\x6e"; const semgeiqsogkegsee = "\x61\143\164\x69\157\156\137\160\141\162\x61\155\145\164\145\x72\x73"; const meigsywkomcimgyk = "\x73\x65\x74\x5f\143\141\143\150\145\137\163\x65\164\164\151\x6e\147\x73"; const mcquuuwkyksuqaso = "\x63\x61\143\x68\145\x5f\142\171\x5f\144\145\166\x69\143\x65\x5f\x74\171\x70\145"; const sosggameqyisqsaw = "\x63\x61\143\x68\145\x5f\144\x65\143\145\x70\164\151\x6f\x6e\137\x61\162\x6d\157\162"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto amqgiisymksuuuss; } $this->api = API::symcgieuakksimmu(); amqgiisymksuuuss: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto iwgmywqocewwgoeo; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); iwgmywqocewwgoeo: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto syoeqaqkseguwmgy; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); syoeqaqkseguwmgy: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto sgiouaqukyycswqm; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); sgiouaqukyycswqm: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto uugwmywmaqomeksa; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto gwkawguwsamuomuo; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto ucasigqmoiwaimkk; gwkawguwsamuomuo: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; ucasigqmoiwaimkk: uugwmywmaqomeksa: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto geasgywiogoeamek; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto wowmysuygugawmmu; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); wowmysuygugawmmu: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto umemmgiwimkymaya; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x43\141\156\x20\x6e\157\164\x20\x63\162\x65\141\x74\x65\40\157\162\40\x66\x65\164\143\x68\40\x63\x61\x63\x68\145\x20\x72\x75\x6c\145\163\x65\164\72\x20{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); goto omsmaougqkqigogw; umemmgiwimkymaya: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto gsiaskgsukseumig; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto xogaycsaesgqeqig; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); xogaycsaesgqeqig: iquugwoswgkoiieg: } mmmqqoemusicwgqg: gsiaskgsukseumig: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto imwiyqcekcykscui; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto syiyemqigyugagks; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto woqkgwmkmqsuceuy; syiyemqigyugagks: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; woqkgwmkmqsuceuy: imwiyqcekcykscui: omsmaougqkqigogw: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); geasgywiogoeamek: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto qweyymyuuqwcmkqg; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); qweyymyuuqwcmkqg: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\50\x73\164\141\x72\164\163\x5f\x77\151\x74\x68\x28\x68\164\164\160\56\x72\x65\161\165\x65\x73\x74\x2e\x75\x72\151\56\160\x61\x74\x68\x2c\x20\x22\x2f\x22\x29\x29", Constants::eqkeooqcsscoggia => "\103\x61\x63\x68\x65\40\106\x72\x6f\x6e\164\x65\156\x64\40\101\x72\x65\x61", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto guqmgiqaaowaauyo; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); guqmgiqaaowaauyo: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\163\164\x61\162\x74\163\137\167\151\x74\x68\50\x68\x74\x74\x70\x2e\x72\145\x71\x75\145\163\164\x2e\165\162\151\56\160\x61\164\150\54\x20\x22\57\167\160\x2d\x61\x64\155\151\156\57\x22\x29\51", Constants::eqkeooqcsscoggia => "\102\x79\160\x61\x73\x73\40\x42\141\x63\153\x65\x6e\144\x20\101\162\x65\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto mccimkgwkkamsime; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\x6c\157\165\x64\146\154\141\162\x65\40\x25\x73\40\x6e\x6f\x74\40\145\156\164\x65\x72\145\x64\41", PR__MDL__OPTIMIZATION), __("\x65\x2d\155\141\x69\x6c", PR__MDL__OPTIMIZATION))); mccimkgwkkamsime: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto oasisywuwssumsok; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\x6c\x6f\x75\x64\146\x6c\x61\162\x65\x20\x25\163\x20\x6e\x6f\x74\x20\x65\156\164\x65\162\x65\x64\x21", PR__MDL__OPTIMIZATION), __("\x41\120\x49\x20\x54\157\153\x65\x6e", PR__MDL__OPTIMIZATION))); oasisywuwssumsok: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge()))) { goto iaoyeugekskmewgs; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\x68\x65\162\145\x20\x69\x73\x20\x61\40\x70\x72\x6f\142\154\x65\155\x20\x6f\x6e\x20\146\145\x74\x63\x68\x69\156\147\x20\162\x65\154\x61\x74\x65\x64\40\144\157\155\x61\x69\156\40\164\x6f\40\x65\x6e\x74\x65\162\145\144\40\141\160\151\x20\x74\x6f\x6b\145\x6e\x2e", PR__MDL__OPTIMIZATION)); iaoyeugekskmewgs: goto ucaoyoamaycsiacq; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto iokemmkgmcaksiqu; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\154\157\x75\144\x66\154\x61\162\x65\x20\x25\x73\x20\x6e\157\164\40\x65\156\x74\145\162\145\144\x21", PR__MDL__OPTIMIZATION), __("\101\120\x49\x20\x4b\145\x79", PR__MDL__OPTIMIZATION))); iokemmkgmcaksiqu: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow()))) { goto okagauksoqkoqygi; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\x68\x65\x72\145\x20\x69\163\40\x61\40\x70\162\x6f\x62\x6c\x65\x6d\x20\x6f\156\40\x66\145\x74\143\x68\x69\156\147\40\162\x65\x6c\141\164\x65\144\40\x7a\x6f\156\x65\40\x69\144\x20\x74\157\40\145\156\x74\x65\x72\145\x64\x20\x61\160\x69\x20\x6b\145\171\x2e", PR__MDL__OPTIMIZATION)); okagauksoqkoqygi: goto ucaoyoamaycsiacq; } iuyagqakcieasiua: ucaoyoamaycsiacq: return true; } }
