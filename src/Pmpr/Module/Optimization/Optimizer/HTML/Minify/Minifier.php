<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a2f44c67227             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto eiicmcasqikiyasw; } $this->miasamwyaiagioug([$this, "\x6f\x6b\165\147\165\171\141\143\147\x67\x73\141\x67\x65\x71\161"], 50); eiicmcasqikiyasw: $this->aqaqisyssqeomwom("\155\151\156\151\146\x79\137{$this->aakmagwggmkoiiyu()}", [$this, "\157\153\x75\147\x75\171\x61\143\147\147\163\x61\x67\x65\161\x71"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\50\74{$kqywgoqsmuswammk}\x5b\x5c\163\x5c\x53\x5d\x2a\77\76\51\50\133\134\x73\x5c\x53\135\x2a\x3f\x29\50\74\x5c\x2f{$kqywgoqsmuswammk}\76\x29\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto ayucsuwsiocgycww; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); ayucsuwsiocgycww: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto smmagoyuqoigoesc; } $ewgwqamkygiqaawc = $mgaesessocgwasym; smmagoyuqoigoesc: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\136\133\136\134\x6e\x5c\164\134\162\135\x2b\50\134\162\134\164\134\156\77\x7c\134\164\134\156\x29\77\44\x2f", $nsmgceoqaqogqmuw); } }
