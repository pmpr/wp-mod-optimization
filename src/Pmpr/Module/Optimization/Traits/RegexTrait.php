<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66696e7e43c2d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function ksiyqouuaoymsycg(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\125\155\163\151") : array { preg_match_all("\x2f" . $eouekqmooogkoqoo . "\57" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto eiawsoasmscmqswa; } return []; eiawsoasmscmqswa: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\41\55\x2d\134\163\x2a\156\x6f\160\x74\x69\155\x69\x7a\145\x5c\x73\52\x2d\x2d\x3e\56\52\x3f\74\x21\55\x2d\134\163\52\57\x5c\x73\x2a\156\x6f\x70\x74\151\155\x69\x7a\145\134\x73\52\55\x2d\76\43\x69\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto ickcmqoiosquugwe; } return $nsmgceoqaqogqmuw; ickcmqoiosquugwe: $moyaaaascoeowegu = preg_replace("\x2f\74\41\x2d\x2d\x28\x2e\x2a\51\x2d\55\x3e\57\x55\151\x73", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto qmeoaqmsuseueqiy; } return $nsmgceoqaqogqmuw; qmeoaqmsuseueqiy: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\163\x63\162\151\x70\x74\133\x5e\76\135\52\76\56\52\77\x3c\134\x2f\x73\x63\162\151\x70\x74\x5c\x73\52\x3e\x23\x6d\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto ygkcacsyyckescqs; } return $nsmgceoqaqogqmuw; ygkcacsyyckescqs: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\156\x6f\x73\x63\x72\151\x70\164\x5b\x5e\76\x5d\52\x3e\56\x2a\x3f\74\x5c\x2f\x6e\157\163\143\162\151\x70\164\x5c\x73\x2a\x3e\x23\x6d\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto cuoqqgaygogsmmic; } return $nsmgceoqaqogqmuw; cuoqqgaygogsmmic: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\43\74\170\155\x70\x2e\52\76\56\52\74\57\170\x6d\x70\76\43\125\x69\x73"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\143\143\x71\x6b\x77\x63\155\x65\x65\153\147\151\x69\157\151\167"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto cgewcsueoyaeikgm; } return $nsmgceoqaqogqmuw; cgewcsueoyaeikgm: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\74\41\55\x2d\x20\45\163\x20\55\x2d\x3e", uniqid("\x57\x50\x52\x5f\x58\x4d\120\137")); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto sukskmcwsoysiuqu; } return $nsmgceoqaqogqmuw; sukskmcwsoysiuqu: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
