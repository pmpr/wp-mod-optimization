<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6654cb65a9906             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function ksiyqouuaoymsycg(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\x55\x6d\163\x69") : array { preg_match_all("\x2f" . $eouekqmooogkoqoo . "\x2f" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto qmiwsequckckoaei; } return []; qmiwsequckckoaei: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\41\55\x2d\x5c\x73\x2a\x6e\157\160\164\x69\x6d\151\x7a\x65\x5c\x73\x2a\55\x2d\x3e\x2e\52\77\x3c\41\55\x2d\x5c\163\x2a\x2f\134\163\52\156\157\x70\164\x69\x6d\x69\x7a\145\x5c\163\52\55\x2d\76\43\x69\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto goeoymmqqqeeoime; } return $nsmgceoqaqogqmuw; goeoymmqqqeeoime: $moyaaaascoeowegu = preg_replace("\57\x3c\x21\x2d\x2d\50\56\x2a\51\x2d\x2d\76\57\125\x69\163", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto eiawsoasmscmqswa; } return $nsmgceoqaqogqmuw; eiawsoasmscmqswa: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\163\x63\x72\x69\160\x74\133\136\76\x5d\x2a\76\56\x2a\77\x3c\134\x2f\163\143\162\151\160\x74\x5c\163\52\x3e\43\155\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto ickcmqoiosquugwe; } return $nsmgceoqaqogqmuw; ickcmqoiosquugwe: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\156\x6f\x73\x63\162\x69\x70\x74\x5b\x5e\x3e\x5d\52\x3e\56\x2a\77\x3c\x5c\x2f\156\x6f\163\x63\162\x69\x70\164\134\163\52\x3e\43\155\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto qmeoaqmsuseueqiy; } return $nsmgceoqaqogqmuw; qmeoaqmsuseueqiy: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\x23\74\170\x6d\x70\56\x2a\76\x2e\x2a\74\57\x78\155\160\x3e\43\x55\151\163"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\x63\x63\161\x6b\x77\x63\155\x65\x65\153\x67\x69\x69\x6f\151\x77"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto ygkcacsyyckescqs; } return $nsmgceoqaqogqmuw; ygkcacsyyckescqs: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\74\41\55\55\40\45\x73\40\55\x2d\76", uniqid("\127\x50\x52\x5f\130\115\x50\x5f")); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto cuoqqgaygogsmmic; } return $nsmgceoqaqogqmuw; cuoqqgaygogsmmic: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
