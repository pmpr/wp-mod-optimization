<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a69ee00a3ca             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto kuaiscyqkgcouiye; } $this->miasamwyaiagioug([$this, "\x6f\153\x75\147\165\171\x61\143\x67\x67\163\x61\x67\145\x71\x71"], 50); kuaiscyqkgcouiye: $this->aqaqisyssqeomwom("\155\151\x6e\x69\146\x79\137{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\x6b\x75\147\x75\171\x61\143\147\x67\163\x61\147\145\161\161"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\x28\74{$kqywgoqsmuswammk}\133\134\163\134\x53\135\52\x3f\76\51\x28\x5b\134\163\134\123\135\x2a\x3f\x29\50\x3c\x5c\57{$kqywgoqsmuswammk}\x3e\51\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto ooooceiweeackgie; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); ooooceiweeackgie: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto gkeymcqqsewayscs; } $ewgwqamkygiqaawc = $mgaesessocgwasym; gkeymcqqsewayscs: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\136\133\136\x5c\156\x5c\164\x5c\x72\135\x2b\x28\134\162\134\x74\x5c\156\x3f\174\134\164\x5c\x6e\51\x3f\x24\x2f", $nsmgceoqaqogqmuw); } }
