<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663755093ace2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto ooykyoowougqkaso; } $this->miasamwyaiagioug([$this, "\157\x6b\165\147\165\x79\x61\x63\x67\x67\x73\141\x67\145\161\x71"], 50); ooykyoowougqkaso: $this->aqaqisyssqeomwom("\x6d\151\x6e\x69\x66\x79\137{$this->aakmagwggmkoiiyu()}", [$this, "\157\x6b\165\147\x75\x79\x61\x63\x67\x67\163\x61\x67\145\161\161"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\x28\74{$kqywgoqsmuswammk}\x5b\134\163\x5c\x53\135\x2a\x3f\76\51\x28\133\134\163\x5c\x53\135\x2a\77\x29\x28\74\134\x2f{$kqywgoqsmuswammk}\x3e\x29\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto sckyiekoceuisqyq; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); sckyiekoceuisqyq: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto kusuakkwcuqkcqaw; } $ewgwqamkygiqaawc = $mgaesessocgwasym; kusuakkwcuqkcqaw: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\x5e\x5b\x5e\x5c\156\134\164\x5c\x72\x5d\x2b\50\x5c\x72\x5c\164\134\x6e\x3f\174\x5c\164\134\x6e\x29\77\x24\x2f", $nsmgceoqaqogqmuw); } }
