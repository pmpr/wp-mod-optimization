<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d04ce34c3b0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\API\Manager; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use WP_Error; class API extends Manager { public function kwauokaoasomsimk(&$uamcoiueqaamsqma) { $keccaugmemegoimu = $this->get("\x2f\142\x75\x64\147\x65\x74\57\x67\145\x74\x2d\x62\x75\144\x67\145\x74"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma, $amkukiggyuqwkuyo)) { goto awkqcyusycccekwq; } $mkecsaoyggsmwmau = $this->oemauiimmycumcsk($uamcoiueqaamsqma); goto yugmwomumkosucsc; awkqcyusycccekwq: $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $kigowwqauiumummw = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $uamcoiueqaamsqma); if (!$kigowwqauiumummw) { goto qsaoyggkqwcgskwk; } $mkecsaoyggsmwmau = ManipulateArray::get($sogksuscggsicmac, self::uiwqcumqkgikqyue); goto myooisakyuggoggc; qsaoyggkqwcgskwk: $mkecsaoyggsmwmau = $this->oemauiimmycumcsk(__("\131\x6f\165\x20\141\x72\x65\40\x6f\x75\164\x20\157\146\40\x74\x68\x65\40\142\165\144\x67\145\164", PR__MDL__OPTIMIZATION)); myooisakyuggoggc: yugmwomumkosucsc: return $mkecsaoyggsmwmau; } public function eqgwiuussiawqewi($ocqawgquwsqioses, &$iswcokucwmiosiaq) { $comaqioyokiawoyo = []; $ksaameoqigiaoigg = []; foreach ($ocqawgquwsqioses as $uusmaiomayssaecw => $icwicymcioeyeyek) { if (!($migiiksoiymissge = $this->yyauwmoecaeskcae($icwicymcioeyeyek))) { goto aqksouwmeckaqyaq; } $comaqioyokiawoyo[$uusmaiomayssaecw] = array_merge($icwicymcioeyeyek, [self::sauwwsocmukoaayu => $migiiksoiymissge]); aqksouwmeckaqyaq: ykogqmmywykgouqy: } kqwyogqqwumumiwg: if (!$comaqioyokiawoyo) { goto eiicmcasqikiyasw; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\160\x61\147\145\57\x6d\x75\154\x74\x69\55\141\144\144", [self::qmwqkaeamecekiso => [self::yusuiaeueqwieqqq => $comaqioyokiawoyo]], self::mswoacegomcucaik); if (!$this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { goto gmsyoscesymiwwue; } $ksaameoqigiaoigg = ManipulateArray::qamwegcyimgcqksw($sogksuscggsicmac, "\x64\141\x74\141\x2e\x70\x61\x67\x65\163", []); gmsyoscesymiwwue: eiicmcasqikiyasw: return $ksaameoqigiaoigg; } public function kgyokgoeqoaewyye($suaemuyiacqyugsm, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($suaemuyiacqyugsm, "\x72\x65\155\157\166\145", $uamcoiueqaamsqma, $kgicwkyskyemksca, "\144\145\x6c\145\x74\145"); } public function oskcgsywauyywyum($suaemuyiacqyugsm, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($suaemuyiacqyugsm, "\143\150\x61\156\147\x65\x2d\163\164\x61\x74\x75\163", $uamcoiueqaamsqma, $kgicwkyskyemksca); } private function ksicesygeskkewug($suaemuyiacqyugsm, $aiamqeawckcsuaou, &$uamcoiueqaamsqma, &$kgicwkyskyemksca, string $qgciuiagkkguykgs = self::mswoacegomcucaik) : bool { $kigowwqauiumummw = false; if ($migiiksoiymissge = $this->yyauwmoecaeskcae($suaemuyiacqyugsm)) { goto mcmcocyuugueaeww; } $uamcoiueqaamsqma = __("\x50\141\x67\145\x20\151\163\x20\156\157\x74\40\166\141\154\151\144", PR__MDL__OPTIMIZATION); goto eucakkcoiiwkwsme; mcmcocyuugueaeww: if ($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, $qgciuiagkkguykgs)) { goto kwayumouacgkgyas; } $uamcoiueqaamsqma = __("\123\x65\x72\166\145\x72\x20\x65\x72\x72\157\x72", PR__MDL__OPTIMIZATION); goto rgaagksgsewuwgmo; kwayumouacgkgyas: $keccaugmemegoimu = $this->{$qgciuiagkkguykgs}("\x2f\x70\141\147\145\x2f{$aiamqeawckcsuaou}", [self::qmwqkaeamecekiso => ManipulateFormat::omaawkkwwyesqwcc($suaemuyiacqyugsm, [self::imywcsggckkcywgk => $migiiksoiymissge])]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma, $amkukiggyuqwkuyo)) { goto cwyaysecsakaqgew; } $kgicwkyskyemksca = ManipulateArray::get($amkukiggyuqwkuyo, self::vswoiouoaykswgym); switch ($kgicwkyskyemksca) { case 404: if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto swesqeqmagkicuws; } $myagqecycsaiyqsk = $jwsqucqyaoaasykk->oqomcmyuuakigusk([self::squoamkioomemiyi => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::squoamkioomemiyi), self::mgsccwumkcawaqcy => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::mgsccwumkcawaqcy)]); if (!$myagqecycsaiyqsk) { goto wsqeiwkgoiekwasy; } $jwsqucqyaoaasykk->sgcuwcowgwimgsgk($jwsqucqyaoaasykk->keeuqgyooycqoygw($suaemuyiacqyugsm)); wsqeiwkgoiekwasy: swesqeqmagkicuws: goto ayucsuwsiocgycww; } smmagoyuqoigoesc: ayucsuwsiocgycww: goto kgqgcggccmiwayua; cwyaysecsakaqgew: $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); $kigowwqauiumummw = $this->yquuyiaogsgwmaem($keccaugmemegoimu, $uamcoiueqaamsqma); kgqgcggccmiwayua: rgaagksgsewuwgmo: eucakkcoiiwkwsme: return $kigowwqauiumummw; } }
