<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             629654a236839             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\API\Manager; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use WP_Error; class API extends Manager { public function kwauokaoasomsimk(&$uamcoiueqaamsqma) { $keccaugmemegoimu = $this->get("\x2f\x62\165\144\147\x65\x74\57\147\x65\164\x2d\142\165\x64\147\x65\164"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma, $amkukiggyuqwkuyo)) { goto yueosioyegouuwqo; } $mkecsaoyggsmwmau = $this->oemauiimmycumcsk($uamcoiueqaamsqma); goto giuoqsumkimmuaya; yueosioyegouuwqo: $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $kigowwqauiumummw = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $uamcoiueqaamsqma); if (!$kigowwqauiumummw) { goto issgmmkcgesyeoas; } $mkecsaoyggsmwmau = ManipulateArray::get($sogksuscggsicmac, self::uiwqcumqkgikqyue); goto yeiicwscguyokwyu; issgmmkcgesyeoas: $mkecsaoyggsmwmau = $this->oemauiimmycumcsk(__("\131\x6f\x75\40\141\x72\145\40\157\165\x74\x20\x6f\146\40\x74\150\145\40\x62\x75\x64\x67\x65\x74", PR__MDL__OPTIMIZATION)); yeiicwscguyokwyu: giuoqsumkimmuaya: return $mkecsaoyggsmwmau; } private function ycqquoiyyuesegsy($sqeykgyoooqysmca, $ccamueccusigaaio) : string { return $sqeykgyoooqysmca === self::mswmgkkakuooukme ? ManipulatePost::mqgeysameoesmuqw($ccamueccusigaaio) : ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio); } public function auuqggkaeoomcksu($sqeykgyoooqysmca, $ccamueccusigaaio, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, "\x61\144\144", $uamcoiueqaamsqma, $kgicwkyskyemksca, self::mswoacegomcucaik, [self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]); } public function kgyokgoeqoaewyye($sqeykgyoooqysmca, $ccamueccusigaaio, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, "\162\145\x6d\x6f\166\x65", $uamcoiueqaamsqma, $kgicwkyskyemksca, "\x64\x65\x6c\x65\164\x65"); } public function oskcgsywauyywyum($iueymcwwscwqkiyq, $sqeykgyoooqysmca, $ccamueccusigaaio, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, "\x63\150\141\x6e\147\x65\55\163\x74\141\164\165\x73", $uamcoiueqaamsqma, $kgicwkyskyemksca, self::mswoacegomcucaik, [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); } private function ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, $aiamqeawckcsuaou, &$uamcoiueqaamsqma, &$kgicwkyskyemksca, $qgciuiagkkguykgs = self::mswoacegomcucaik, $icwicymcioeyeyek = []) : bool { $kigowwqauiumummw = false; $migiiksoiymissge = $this->ycqquoiyyuesegsy($sqeykgyoooqysmca, $ccamueccusigaaio); if ($migiiksoiymissge) { goto aacaoywsaqscgyua; } $uamcoiueqaamsqma = __("\x50\141\x67\145\40\x69\163\x20\156\157\x74\x20\166\x61\x6c\151\144", PR__MDL__OPTIMIZATION); goto miigqygoawqmkkqm; aacaoywsaqscgyua: if ($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, $qgciuiagkkguykgs)) { goto kuimgwmkcgcoecko; } $uamcoiueqaamsqma = __("\x53\145\162\166\145\x72\x20\x65\x72\x72\157\162", PR__MDL__OPTIMIZATION); goto oaskqsoyesmmeaew; kuimgwmkcgcoecko: $keccaugmemegoimu = $this->{$qgciuiagkkguykgs}("\x2f\160\141\147\x65\57{$aiamqeawckcsuaou}", [self::qmwqkaeamecekiso => ManipulateFormat::omaawkkwwyesqwcc($icwicymcioeyeyek, [self::imywcsggckkcywgk => $migiiksoiymissge])]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma, $amkukiggyuqwkuyo)) { goto swkeiggkawwgewuw; } $kgicwkyskyemksca = ManipulateArray::get($amkukiggyuqwkuyo, self::vswoiouoaykswgym); switch ($kgicwkyskyemksca) { case 404: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $suaemuyiacqyugsm = $jwsqucqyaoaasykk->oqomcmyuuakigusk([self::squoamkioomemiyi => $sqeykgyoooqysmca, self::mgsccwumkcawaqcy => $ccamueccusigaaio]); if (!$suaemuyiacqyugsm) { goto umamqqwcoewcigew; } $jwsqucqyaoaasykk->sgcuwcowgwimgsgk($jwsqucqyaoaasykk->keeuqgyooycqoygw($suaemuyiacqyugsm)); umamqqwcoewcigew: goto mssaawaiaimogowg; } ccyiggckemwgooco: mssaawaiaimogowg: goto gaiaucesmcqgqwac; swkeiggkawwgewuw: $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); $kigowwqauiumummw = $this->yquuyiaogsgwmaem($keccaugmemegoimu, $uamcoiueqaamsqma); gaiaucesmcqgqwac: oaskqsoyesmmeaew: miigqygoawqmkkqm: return $kigowwqauiumummw; } }
