<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffc5814be8b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\API\Manager; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use WP_Error; class API extends Manager { public function kwauokaoasomsimk(&$uamcoiueqaamsqma) { $keccaugmemegoimu = $this->get("\57\x62\x75\x64\147\x65\x74\x2f\x67\145\164\55\142\165\x64\x67\145\x74"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma, $amkukiggyuqwkuyo)) { goto eogwckcymuugikuy; } $mkecsaoyggsmwmau = $this->oemauiimmycumcsk($uamcoiueqaamsqma); goto msemumccgceyugmg; eogwckcymuugikuy: $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $kigowwqauiumummw = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $uamcoiueqaamsqma); if (!$kigowwqauiumummw) { goto mwsmsguqqkcwiiuk; } $mkecsaoyggsmwmau = ManipulateArray::get($sogksuscggsicmac, self::uiwqcumqkgikqyue); goto eeauyscekuckoues; mwsmsguqqkcwiiuk: $mkecsaoyggsmwmau = $this->oemauiimmycumcsk(__("\x59\x6f\165\x20\x61\x72\x65\x20\157\x75\x74\x20\x6f\146\40\x74\x68\145\40\142\165\x64\147\145\164", PR__MDL__OPTIMIZATION)); eeauyscekuckoues: msemumccgceyugmg: return $mkecsaoyggsmwmau; } public function eqgwiuussiawqewi($ocqawgquwsqioses, &$iswcokucwmiosiaq) { $comaqioyokiawoyo = []; $ksaameoqigiaoigg = []; foreach ($ocqawgquwsqioses as $uusmaiomayssaecw => $icwicymcioeyeyek) { if (!($migiiksoiymissge = $this->yyauwmoecaeskcae($icwicymcioeyeyek))) { goto iwsuawwqomaowuii; } $comaqioyokiawoyo[$uusmaiomayssaecw] = array_merge($icwicymcioeyeyek, [self::sauwwsocmukoaayu => $migiiksoiymissge]); iwsuawwqomaowuii: qoqskyuuwueqkquk: } wagqgeqymeqoeuyi: if (!$comaqioyokiawoyo) { goto asiqwuoswmigcaki; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\160\x61\147\x65\x2f\155\x75\154\x74\x69\x2d\141\144\144", [self::qmwqkaeamecekiso => [self::yusuiaeueqwieqqq => $comaqioyokiawoyo]], self::mswoacegomcucaik); if (!$this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { goto wcugqegqsuuuwqao; } $ksaameoqigiaoigg = ManipulateArray::qamwegcyimgcqksw($sogksuscggsicmac, "\x64\x61\164\141\x2e\x70\141\x67\x65\x73", []); wcugqegqsuuuwqao: asiqwuoswmigcaki: return $ksaameoqigiaoigg; } public function kgyokgoeqoaewyye($suaemuyiacqyugsm, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($suaemuyiacqyugsm, "\x72\x65\155\x6f\x76\145", $uamcoiueqaamsqma, $kgicwkyskyemksca, "\144\x65\154\145\x74\x65"); } public function oskcgsywauyywyum($suaemuyiacqyugsm, &$uamcoiueqaamsqma, &$kgicwkyskyemksca) : bool { return $this->ksicesygeskkewug($suaemuyiacqyugsm, "\x63\150\141\x6e\147\145\x2d\x73\164\141\x74\165\x73", $uamcoiueqaamsqma, $kgicwkyskyemksca); } private function ksicesygeskkewug($suaemuyiacqyugsm, $aiamqeawckcsuaou, &$uamcoiueqaamsqma, &$kgicwkyskyemksca, string $qgciuiagkkguykgs = self::mswoacegomcucaik) : bool { $kigowwqauiumummw = false; if ($migiiksoiymissge = $this->yyauwmoecaeskcae($suaemuyiacqyugsm)) { goto samwkqgwouggsguc; } $uamcoiueqaamsqma = __("\x50\141\x67\145\40\x69\x73\40\156\157\x74\x20\x76\141\154\x69\144", PR__MDL__OPTIMIZATION); goto wyuemgggaqogsmsq; samwkqgwouggsguc: if ($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($this, $qgciuiagkkguykgs)) { goto acsqgiuageaasiyy; } $uamcoiueqaamsqma = __("\123\145\162\166\145\x72\40\145\162\162\x6f\162", PR__MDL__OPTIMIZATION); goto oomguqikqokqwgku; acsqgiuageaasiyy: $keccaugmemegoimu = $this->{$qgciuiagkkguykgs}("\57\160\x61\x67\x65\57{$aiamqeawckcsuaou}", [self::qmwqkaeamecekiso => ManipulateFormat::omaawkkwwyesqwcc($suaemuyiacqyugsm, [self::imywcsggckkcywgk => $migiiksoiymissge])]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma, $amkukiggyuqwkuyo)) { goto ouamogymawucwswu; } $kgicwkyskyemksca = ManipulateArray::get($amkukiggyuqwkuyo, self::vswoiouoaykswgym); switch ($kgicwkyskyemksca) { case 404: if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto emmsycooskoqmgeg; } $myagqecycsaiyqsk = $jwsqucqyaoaasykk->oqomcmyuuakigusk([self::squoamkioomemiyi => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::squoamkioomemiyi), self::mgsccwumkcawaqcy => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::mgsccwumkcawaqcy)]); if (!$myagqecycsaiyqsk) { goto qgeugwymkkiacwoc; } $jwsqucqyaoaasykk->sgcuwcowgwimgsgk($jwsqucqyaoaasykk->keeuqgyooycqoygw($suaemuyiacqyugsm)); qgeugwymkkiacwoc: emmsycooskoqmgeg: goto ciykoyeioqgyaeqo; } mqicocmqegwukkwg: ciykoyeioqgyaeqo: goto mugqyyeayeyggqqk; ouamogymawucwswu: $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu); $kigowwqauiumummw = $this->yquuyiaogsgwmaem($keccaugmemegoimu, $uamcoiueqaamsqma); mugqyyeayeyggqqk: oomguqikqokqwgku: wyuemgggaqogsmsq: return $kigowwqauiumummw; } }
