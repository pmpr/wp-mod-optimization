<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624eb0824ce5d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Minify; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class AbstractMinify extends Common { public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\50\x3c{$kqywgoqsmuswammk}\133\134\163\x5c\123\x5d\52\77\x3e\51\x28\x5b\x5c\x73\x5c\123\135\52\77\51\x28\x3c\x5c\57{$kqywgoqsmuswammk}\x3e\x29\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = ManipulateArray::get($meyiiwcswqmuggyg, 1); $ewgwqamkygiqaawc = ManipulateArray::get($meyiiwcswqmuggyg, 2); $muiegiugiocacqkm = ManipulateArray::get($meyiiwcswqmuggyg, 3); if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto iuwccksomkkouogy; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); iuwccksomkkouogy: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto cceggewquoaemcwq; } $ewgwqamkygiqaawc = $mgaesessocgwasym; cceggewquoaemcwq: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\x5e\x5b\x5e\x5c\x6e\134\164\x5c\x72\x5d\x2b\50\x5c\x72\134\x74\134\x6e\x3f\174\134\164\134\x6e\51\77\x24\57", $nsmgceoqaqogqmuw); } }
