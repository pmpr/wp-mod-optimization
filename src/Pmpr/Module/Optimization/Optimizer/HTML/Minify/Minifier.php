<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665afacdd5cec             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto csyoimsqgwcmiwki; } $this->miasamwyaiagioug([$this, "\157\x6b\165\147\x75\171\x61\143\x67\147\163\x61\x67\145\x71\x71"], 50); csyoimsqgwcmiwki: $this->aqaqisyssqeomwom("\x6d\x69\x6e\151\146\171\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\x6b\165\147\x75\x79\x61\x63\x67\x67\x73\141\x67\145\161\161"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\50\74{$kqywgoqsmuswammk}\133\134\163\x5c\123\x5d\x2a\x3f\76\x29\x28\133\134\x73\134\x53\x5d\52\77\51\50\x3c\134\57{$kqywgoqsmuswammk}\x3e\51\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto ggqwcqssoauckuic; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); ggqwcqssoauckuic: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto ggwcauaeuagekeyo; } $ewgwqamkygiqaawc = $mgaesessocgwasym; ggwcauaeuagekeyo: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\136\133\136\x5c\x6e\x5c\x74\x5c\x72\135\x2b\50\134\162\x5c\164\x5c\x6e\77\174\x5c\164\x5c\x6e\x29\77\44\x2f", $nsmgceoqaqogqmuw); } }
