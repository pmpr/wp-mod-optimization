<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62f7cb380fe9d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\API\Manager; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use WP_Error; class API extends Manager { public function kwauokaoasomsimk(&$uamcoiueqaamsqma) { $keccaugmemegoimu = $this->get("\57\142\x75\144\x67\145\x74\x2f\147\x65\164\x2d\x62\x75\144\147\x65\x74"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma, $amkukiggyuqwkuyo)) { goto ukogwqiuuuakkawy; } $mkecsaoyggsmwmau = $this->oemauiimmycumcsk($uamcoiueqaamsqma); goto gicmaqmuscawegie; ukogwqiuuuakkawy: $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $kigowwqauiumummw = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $uamcoiueqaamsqma); if (!$kigowwqauiumummw) { goto oiiqqgyqmggyiums; } $mkecsaoyggsmwmau = ManipulateArray::get($sogksuscggsicmac, self::uiwqcumqkgikqyue); goto magymcqykamwqigw; oiiqqgyqmggyiums: $mkecsaoyggsmwmau = $this->oemauiimmycumcsk(__("\x59\157\x75\40\x61\162\x65\x20\157\x75\x74\x20\157\146\x20\x74\x68\145\x20\x62\165\x64\147\145\164", PR__MDL__OPTIMIZATION)); magymcqykamwqigw: gicmaqmuscawegie: return $mkecsaoyggsmwmau; } public function eqgwiuussiawqewi($ocqawgquwsqioses, &$iswcokucwmiosiaq) { $comaqioyokiawoyo = []; $ksaameoqigiaoigg = []; foreach ($ocqawgquwsqioses as $uusmaiomayssaecw => $icwicymcioeyeyek) { if (!($migiiksoiymissge = $this->yyauwmoecaeskcae($icwicymcioeyeyek))) { goto gygqgauaceiuawkq; } $comaqioyokiawoyo[$uusmaiomayssaecw] = array_merge($icwicymcioeyeyek, [self::sauwwsocmukoaayu => $migiiksoiymissge]); gygqgauaceiuawkq: ayamomygygmgwgkg: } oymyqcoekqyuiguq: if (!$comaqioyokiawoyo) { goto iyeswoaqkaeggiiy; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\57\160\141\x67\x65\x2f\155\x75\x6c\x74\151\55\x61\144\x64", [self::qmwqkaeamecekiso => [self::yusuiaeueqwieqqq => $comaqioyokiawoyo]], self::mswoacegomcucaik); if (!$this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { goto ucksaiwquekagyqe; } $ksaameoqigiaoigg = ManipulateArray::qamwegcyimgcqksw($sogksuscggsicmac, "\x64\141\164\141\x2e\x70\x61\x67\145\163", []); ucksaiwquekagyqe: iyeswoaqkaeggiiy: return $ksaameoqigiaoigg; } public function kgyokgoeqoaewyye($suaemuyiacqyugsm, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($suaemuyiacqyugsm, "\x72\x65\155\x6f\x76\x65", $uamcoiueqaamsqma, $kgicwkyskyemksca, "\144\145\x6c\x65\x74\145"); } public function oskcgsywauyywyum($suaemuyiacqyugsm, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($suaemuyiacqyugsm, "\143\150\141\156\147\145\55\163\x74\x61\164\x75\x73", $uamcoiueqaamsqma, $kgicwkyskyemksca); } private function ksicesygeskkewug($suaemuyiacqyugsm, $aiamqeawckcsuaou, &$uamcoiueqaamsqma, &$kgicwkyskyemksca, string $qgciuiagkkguykgs = self::mswoacegomcucaik) : bool { $kigowwqauiumummw = false; if ($migiiksoiymissge = $this->yyauwmoecaeskcae($suaemuyiacqyugsm)) { goto wkaoyycsoeoyqcae; } $uamcoiueqaamsqma = __("\120\141\147\x65\x20\151\x73\40\156\157\164\x20\166\141\154\151\x64", PR__MDL__OPTIMIZATION); goto cwugokqsmiomgmqg; wkaoyycsoeoyqcae: if ($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, $qgciuiagkkguykgs)) { goto yimeskeioamqmuwg; } $uamcoiueqaamsqma = __("\x53\145\162\166\x65\162\x20\x65\x72\162\x6f\162", PR__MDL__OPTIMIZATION); goto yeemsgmumygmumqw; yimeskeioamqmuwg: $keccaugmemegoimu = $this->{$qgciuiagkkguykgs}("\57\160\141\x67\145\57{$aiamqeawckcsuaou}", [self::qmwqkaeamecekiso => ManipulateFormat::omaawkkwwyesqwcc($suaemuyiacqyugsm, [self::imywcsggckkcywgk => $migiiksoiymissge])]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma, $amkukiggyuqwkuyo)) { goto iquecygaakmiomeg; } $kgicwkyskyemksca = ManipulateArray::get($amkukiggyuqwkuyo, self::vswoiouoaykswgym); switch ($kgicwkyskyemksca) { case 404: if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto kceeuicccqscwgsu; } $myagqecycsaiyqsk = $jwsqucqyaoaasykk->oqomcmyuuakigusk([self::squoamkioomemiyi => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::squoamkioomemiyi), self::mgsccwumkcawaqcy => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::mgsccwumkcawaqcy)]); if (!$myagqecycsaiyqsk) { goto sgiuwkisugmewmcs; } $jwsqucqyaoaasykk->sgcuwcowgwimgsgk($jwsqucqyaoaasykk->keeuqgyooycqoygw($suaemuyiacqyugsm)); sgiuwkisugmewmcs: kceeuicccqscwgsu: goto asqqqqakiagymemk; } jkgouewqysmscmqs: asqqqqakiagymemk: goto eacysqsegwcqawsa; iquecygaakmiomeg: $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); $kigowwqauiumummw = $this->yquuyiaogsgwmaem($keccaugmemegoimu, $uamcoiueqaamsqma); eacysqsegwcqawsa: yeemsgmumygmumqw: cwugokqsmiomgmqg: return $kigowwqauiumummw; } }
