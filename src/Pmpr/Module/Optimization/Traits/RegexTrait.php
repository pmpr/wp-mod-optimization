<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6637558f2381c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function ksiyqouuaoymsycg(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\x55\155\x73\x69") : array { preg_match_all("\57" . $eouekqmooogkoqoo . "\57" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto aiqekkyauwswayyq; } return []; aiqekkyauwswayyq: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\41\55\x2d\x5c\163\x2a\x6e\x6f\160\x74\151\155\x69\x7a\145\134\x73\52\x2d\55\76\x2e\52\77\74\41\55\55\x5c\163\x2a\x2f\x5c\163\x2a\x6e\x6f\160\x74\151\155\x69\x7a\x65\x5c\163\x2a\x2d\x2d\x3e\43\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto mmcikqikqecaeswu; } return $nsmgceoqaqogqmuw; mmcikqikqecaeswu: $moyaaaascoeowegu = preg_replace("\57\x3c\41\55\55\50\x2e\52\51\55\x2d\x3e\57\x55\151\x73", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto ywsywoumuaykkeaa; } return $nsmgceoqaqogqmuw; ywsywoumuaykkeaa: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\x73\143\162\151\x70\164\x5b\x5e\x3e\135\x2a\76\x2e\x2a\77\x3c\x5c\57\163\x63\162\151\160\164\x5c\x73\52\76\x23\155\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto wsqiqkiucakewgou; } return $nsmgceoqaqogqmuw; wsqiqkiucakewgou: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\156\157\163\x63\162\x69\x70\164\x5b\136\76\135\52\x3e\56\52\x3f\x3c\x5c\57\156\157\163\143\162\x69\x70\164\x5c\163\52\76\43\155\x69\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto yaumwqeommqigswq; } return $nsmgceoqaqogqmuw; yaumwqeommqigswq: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\43\74\170\155\160\x2e\52\x3e\56\x2a\x3c\x2f\170\155\x70\76\43\125\151\x73"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\143\143\161\x6b\167\x63\x6d\145\145\x6b\x67\x69\151\157\151\x77"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto wiiqigwgyuiuksia; } return $nsmgceoqaqogqmuw; wiiqigwgyuiuksia: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\74\x21\55\55\x20\x25\163\x20\x2d\x2d\76", uniqid("\127\120\x52\x5f\130\115\x50\x5f")); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto mqoygcuqwacgycek; } return $nsmgceoqaqogqmuw; mqoygcuqwacgycek: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
