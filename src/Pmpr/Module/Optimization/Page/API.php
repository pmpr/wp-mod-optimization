<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624eb0824ce5d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\API\Manager; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use WP_Error; class API extends Manager { public function kwauokaoasomsimk(&$uamcoiueqaamsqma) { $keccaugmemegoimu = $this->get("\57\142\165\144\147\145\164\x2f\x67\145\164\x2d\142\165\x64\147\145\164"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma, $amkukiggyuqwkuyo)) { goto suwsiaeoumiwkiqg; } $mkecsaoyggsmwmau = $this->oemauiimmycumcsk($uamcoiueqaamsqma); goto yoauoocuckogmsuw; suwsiaeoumiwkiqg: $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $kigowwqauiumummw = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $uamcoiueqaamsqma); if (!$kigowwqauiumummw) { goto emioyucskiowqumg; } $mkecsaoyggsmwmau = ManipulateArray::get($sogksuscggsicmac, self::uiwqcumqkgikqyue); goto jkaemsuwyyoamwim; emioyucskiowqumg: $mkecsaoyggsmwmau = $this->oemauiimmycumcsk(__("\131\x6f\165\40\141\162\145\40\x6f\165\164\x20\x6f\146\40\x74\x68\x65\x20\142\165\144\147\x65\x74", PR__MDL__OPTIMIZATION)); jkaemsuwyyoamwim: yoauoocuckogmsuw: return $mkecsaoyggsmwmau; } private function ycqquoiyyuesegsy($sqeykgyoooqysmca, $ccamueccusigaaio) : string { return $sqeykgyoooqysmca === self::mswmgkkakuooukme ? ManipulatePost::mqgeysameoesmuqw($ccamueccusigaaio) : ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio); } public function auuqggkaeoomcksu($sqeykgyoooqysmca, $ccamueccusigaaio, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, "\x61\144\144", $uamcoiueqaamsqma, $kgicwkyskyemksca, self::mswoacegomcucaik, [self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]); } public function kgyokgoeqoaewyye($sqeykgyoooqysmca, $ccamueccusigaaio, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, "\162\x65\x6d\157\x76\x65", $uamcoiueqaamsqma, $kgicwkyskyemksca, "\x64\x65\154\145\x74\145"); } public function oskcgsywauyywyum($iueymcwwscwqkiyq, $sqeykgyoooqysmca, $ccamueccusigaaio, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, "\143\150\141\x6e\147\145\55\x73\164\x61\x74\165\x73", $uamcoiueqaamsqma, $kgicwkyskyemksca, self::mswoacegomcucaik, [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); } private function ksicesygeskkewug($sqeykgyoooqysmca, $ccamueccusigaaio, $aiamqeawckcsuaou, &$uamcoiueqaamsqma, &$kgicwkyskyemksca, $qgciuiagkkguykgs = self::mswoacegomcucaik, $icwicymcioeyeyek = []) : bool { $kigowwqauiumummw = false; $migiiksoiymissge = $this->ycqquoiyyuesegsy($sqeykgyoooqysmca, $ccamueccusigaaio); if ($migiiksoiymissge) { goto aymoguycgmuggcik; } $uamcoiueqaamsqma = __("\x50\141\147\145\x20\151\x73\40\156\x6f\x74\x20\166\141\154\x69\144", PR__MDL__OPTIMIZATION); goto qayiqaykkywcyisq; aymoguycgmuggcik: if ($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, $qgciuiagkkguykgs)) { goto kikkkocywiyuyuqw; } $uamcoiueqaamsqma = __("\123\145\x72\x76\x65\x72\40\x65\162\x72\157\x72", PR__MDL__OPTIMIZATION); goto aqeyqwuywqcmuoce; kikkkocywiyuyuqw: $keccaugmemegoimu = $this->{$qgciuiagkkguykgs}("\57\x70\141\x67\145\x2f{$aiamqeawckcsuaou}", [self::qmwqkaeamecekiso => ManipulateFormat::omaawkkwwyesqwcc($icwicymcioeyeyek, [self::imywcsggckkcywgk => $migiiksoiymissge])]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma, $amkukiggyuqwkuyo)) { goto yosyyiksyyscacus; } $kgicwkyskyemksca = ManipulateArray::get($amkukiggyuqwkuyo, self::vswoiouoaykswgym); switch ($kgicwkyskyemksca) { case 404: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $suaemuyiacqyugsm = $jwsqucqyaoaasykk->oqomcmyuuakigusk([self::squoamkioomemiyi => $sqeykgyoooqysmca, self::mgsccwumkcawaqcy => $ccamueccusigaaio]); if (!$suaemuyiacqyugsm) { goto qiqegseqwywcmwoe; } $jwsqucqyaoaasykk->sgcuwcowgwimgsgk($jwsqucqyaoaasykk->keeuqgyooycqoygw($suaemuyiacqyugsm)); qiqegseqwywcmwoe: goto amyaoueckysgmmas; } koiyaaokigmamqyc: amyaoueckysgmmas: goto kwcscewawgicomok; yosyyiksyyscacus: $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); $kigowwqauiumummw = $this->yquuyiaogsgwmaem($keccaugmemegoimu, $uamcoiueqaamsqma); kwcscewawgicomok: aqeyqwuywqcmuoce: qayiqaykkywcyisq: return $kigowwqauiumummw; } }
