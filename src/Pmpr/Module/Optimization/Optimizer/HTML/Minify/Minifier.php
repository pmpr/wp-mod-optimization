<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66000aba21b1a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto esgyqksmcukeuwyk; } $this->miasamwyaiagioug([$this, "\157\153\x75\147\x75\x79\141\x63\x67\147\x73\x61\x67\x65\x71\x71"], 50); esgyqksmcukeuwyk: $this->aqaqisyssqeomwom("\155\x69\156\x69\x66\171\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\x6b\x75\147\165\171\141\x63\147\x67\x73\141\147\145\x71\161"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\50\74{$kqywgoqsmuswammk}\133\134\163\x5c\123\135\52\77\x3e\x29\x28\x5b\x5c\163\134\123\x5d\52\x3f\51\50\74\x5c\x2f{$kqywgoqsmuswammk}\x3e\51\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto iigmgswcogqemgao; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); iigmgswcogqemgao: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto ycaqooeeseougumo; } $ewgwqamkygiqaawc = $mgaesessocgwasym; ycaqooeeseougumo: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\136\x5b\x5e\134\x6e\x5c\164\x5c\162\135\x2b\50\134\162\x5c\x74\x5c\x6e\x3f\x7c\134\164\134\x6e\x29\x3f\44\57", $nsmgceoqaqogqmuw); } }
