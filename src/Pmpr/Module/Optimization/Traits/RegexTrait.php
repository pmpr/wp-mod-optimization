<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             664697c805b60             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function ksiyqouuaoymsycg(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\125\155\163\151") : array { preg_match_all("\x2f" . $eouekqmooogkoqoo . "\x2f" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto qmiwsequckckoaei; } return []; qmiwsequckckoaei: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\41\55\55\134\x73\x2a\156\157\160\x74\x69\x6d\x69\172\145\x5c\163\x2a\x2d\x2d\x3e\56\x2a\77\x3c\x21\55\x2d\134\163\52\57\x5c\163\x2a\x6e\x6f\x70\x74\151\155\x69\x7a\145\134\163\52\55\55\x3e\43\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto goeoymmqqqeeoime; } return $nsmgceoqaqogqmuw; goeoymmqqqeeoime: $moyaaaascoeowegu = preg_replace("\x2f\x3c\x21\x2d\55\50\x2e\x2a\51\x2d\x2d\x3e\57\125\151\x73", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto eiawsoasmscmqswa; } return $nsmgceoqaqogqmuw; eiawsoasmscmqswa: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\x73\x63\162\x69\x70\164\133\x5e\76\x5d\52\x3e\56\52\x3f\x3c\x5c\x2f\163\x63\162\x69\x70\x74\134\163\52\x3e\43\155\x69\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto ickcmqoiosquugwe; } return $nsmgceoqaqogqmuw; ickcmqoiosquugwe: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\156\157\163\143\162\x69\x70\164\133\x5e\76\135\x2a\x3e\x2e\52\77\x3c\x5c\x2f\x6e\157\x73\143\x72\151\x70\164\134\x73\52\76\x23\155\x69\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto qmeoaqmsuseueqiy; } return $nsmgceoqaqogqmuw; qmeoaqmsuseueqiy: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\43\x3c\170\x6d\160\56\x2a\76\x2e\x2a\x3c\57\170\x6d\160\x3e\x23\x55\151\163"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\x63\143\x71\x6b\167\143\155\x65\x65\153\x67\151\151\157\x69\167"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto ygkcacsyyckescqs; } return $nsmgceoqaqogqmuw; ygkcacsyyckescqs: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\x3c\41\55\x2d\40\45\x73\40\x2d\x2d\76", uniqid("\x57\x50\x52\x5f\x58\x4d\120\x5f")); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto cuoqqgaygogsmmic; } return $nsmgceoqaqogqmuw; cuoqqgaygogsmmic: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
