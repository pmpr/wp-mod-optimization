<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d3161a77b51             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\x55\x6d\163\151") : array { preg_match_all("\x2f" . $eouekqmooogkoqoo . "\x2f" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto iyceygqsmokgmams; } return []; iyceygqsmokgmams: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\x21\55\55\134\x73\52\x6e\x6f\160\x74\x69\155\x69\172\x65\134\163\52\55\x2d\76\56\x2a\x3f\x3c\41\55\55\134\163\x2a\57\134\163\52\x6e\157\x70\x74\151\155\x69\x7a\x65\134\163\52\55\55\x3e\x23\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto wcekgciqeggiiwgk; } return $nsmgceoqaqogqmuw; wcekgciqeggiiwgk: $moyaaaascoeowegu = preg_replace("\x2f\x3c\x21\x2d\55\x28\x2e\52\x29\x2d\55\76\57\125\x69\x73", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto gkwuewqmqeswqukg; } return $nsmgceoqaqogqmuw; gkwuewqmqeswqukg: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\163\143\x72\x69\160\164\x5b\136\x3e\135\52\76\56\52\x3f\74\x5c\57\163\143\x72\x69\x70\164\134\x73\52\76\43\155\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto sagemooicmgceiug; } return $nsmgceoqaqogqmuw; sagemooicmgceiug: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\x6e\157\x73\143\x72\x69\x70\x74\133\x5e\76\135\x2a\x3e\x2e\x2a\77\x3c\134\x2f\156\157\163\x63\162\151\x70\164\x5c\x73\x2a\x3e\x23\x6d\x69\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto uqcwyyiykmwygeau; } return $nsmgceoqaqogqmuw; uqcwyyiykmwygeau: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\x23\74\170\x6d\160\56\52\x3e\56\x2a\x3c\x2f\x78\155\160\76\43\x55\x69\163"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\143\x63\x71\x6b\167\x63\155\145\145\153\147\151\x69\x6f\151\167"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto yeiokcoikcysyimu; } return $nsmgceoqaqogqmuw; yeiokcoikcysyimu: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\74\x21\55\x2d\x20\45\163\x20\55\x2d\x3e", uniqid("\x57\120\122\137\x58\x4d\120\137", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto kkmwwqyesmkescyg; } return $nsmgceoqaqogqmuw; kkmwwqyesmkescyg: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
