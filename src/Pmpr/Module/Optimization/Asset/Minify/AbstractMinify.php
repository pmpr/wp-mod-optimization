<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624f0c0d6af12             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Minify; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class AbstractMinify extends Common { public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\50\x3c{$kqywgoqsmuswammk}\133\134\x73\134\x53\x5d\x2a\77\76\x29\50\133\134\163\x5c\x53\x5d\x2a\x3f\x29\50\x3c\134\x2f{$kqywgoqsmuswammk}\x3e\51\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = ManipulateArray::get($meyiiwcswqmuggyg, 1); $ewgwqamkygiqaawc = ManipulateArray::get($meyiiwcswqmuggyg, 2); $muiegiugiocacqkm = ManipulateArray::get($meyiiwcswqmuggyg, 3); if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto sicgyiyiocyygkoc; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); sicgyiyiocyygkoc: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto cyosacayacumuaks; } $ewgwqamkygiqaawc = $mgaesessocgwasym; cyosacayacumuaks: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\x5e\133\136\134\156\x5c\164\x5c\x72\x5d\53\x28\x5c\x72\x5c\164\134\x6e\x3f\174\134\164\x5c\x6e\x29\77\x24\x2f", $nsmgceoqaqogqmuw); } }
