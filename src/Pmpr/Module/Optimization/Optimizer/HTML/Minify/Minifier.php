<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665e31ae394a5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto qowcwmsiyscackaa; } $this->miasamwyaiagioug([$this, "\157\x6b\165\147\165\x79\x61\143\147\147\163\x61\147\145\161\161"], 50); qowcwmsiyscackaa: $this->aqaqisyssqeomwom("\155\x69\156\x69\x66\x79\137{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\x6b\165\x67\165\171\141\x63\x67\x67\x73\141\x67\x65\x71\161"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\x28\74{$kqywgoqsmuswammk}\133\134\x73\x5c\123\x5d\x2a\77\x3e\x29\50\133\134\163\x5c\x53\x5d\x2a\x3f\x29\50\x3c\134\x2f{$kqywgoqsmuswammk}\76\51\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto aqigiwmamkowomiw; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); aqigiwmamkowomiw: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto qesqgumuouyymcwa; } $ewgwqamkygiqaawc = $mgaesessocgwasym; qesqgumuouyymcwa: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\x5e\133\136\134\x6e\134\164\134\x72\x5d\x2b\x28\x5c\162\134\x74\x5c\156\x3f\x7c\134\x74\x5c\x6e\x29\x3f\44\x2f", $nsmgceoqaqogqmuw); } }
