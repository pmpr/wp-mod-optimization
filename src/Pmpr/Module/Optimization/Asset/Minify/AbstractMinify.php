<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65198726e209e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Minify; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class AbstractMinify extends Common { public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\50\74{$kqywgoqsmuswammk}\x5b\x5c\x73\x5c\x53\135\x2a\77\x3e\x29\x28\133\134\163\x5c\x53\x5d\52\77\x29\x28\x3c\x5c\57{$kqywgoqsmuswammk}\x3e\x29\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = ManipulateArray::get($meyiiwcswqmuggyg, 1); $ewgwqamkygiqaawc = ManipulateArray::get($meyiiwcswqmuggyg, 2); $muiegiugiocacqkm = ManipulateArray::get($meyiiwcswqmuggyg, 3); if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto suqckoccuyeeymww; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); suqckoccuyeeymww: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto giugwaeuwaomossq; } $ewgwqamkygiqaawc = $mgaesessocgwasym; giugwaeuwaomossq: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\136\133\136\x5c\156\x5c\x74\x5c\162\x5d\53\50\x5c\x72\134\x74\x5c\156\77\174\x5c\164\134\x6e\x29\x3f\x24\57", $nsmgceoqaqogqmuw); } }
