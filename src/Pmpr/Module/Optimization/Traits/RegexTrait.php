<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2ec2cd5b75             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\x55\155\163\151") : array { preg_match_all("\x2f" . $eouekqmooogkoqoo . "\x2f" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto iyceygqsmokgmams; } return []; iyceygqsmokgmams: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\41\55\55\x5c\163\52\156\x6f\160\x74\151\x6d\151\172\x65\134\163\x2a\x2d\55\x3e\56\x2a\77\x3c\x21\x2d\x2d\x5c\163\x2a\x2f\134\163\52\x6e\x6f\x70\x74\151\x6d\x69\172\145\134\163\x2a\x2d\x2d\x3e\43\151\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto wcekgciqeggiiwgk; } return $nsmgceoqaqogqmuw; wcekgciqeggiiwgk: $moyaaaascoeowegu = preg_replace("\57\x3c\x21\x2d\55\x28\x2e\x2a\51\55\55\76\57\x55\151\163", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto gkwuewqmqeswqukg; } return $nsmgceoqaqogqmuw; gkwuewqmqeswqukg: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\163\143\x72\151\x70\x74\133\136\76\x5d\52\x3e\56\52\x3f\74\134\x2f\163\143\x72\151\x70\x74\134\163\x2a\76\43\x6d\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto sagemooicmgceiug; } return $nsmgceoqaqogqmuw; sagemooicmgceiug: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\x6e\x6f\x73\143\162\151\160\164\133\x5e\x3e\135\x2a\76\56\x2a\x3f\x3c\134\x2f\156\157\163\x63\x72\151\x70\x74\134\x73\x2a\x3e\43\x6d\151\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto uqcwyyiykmwygeau; } return $nsmgceoqaqogqmuw; uqcwyyiykmwygeau: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\43\74\x78\x6d\160\56\52\x3e\56\52\74\57\x78\155\160\x3e\x23\125\151\x73"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\x63\143\x71\153\167\x63\x6d\x65\145\x6b\x67\x69\151\157\x69\167"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto yeiokcoikcysyimu; } return $nsmgceoqaqogqmuw; yeiokcoikcysyimu: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\x3c\x21\55\x2d\x20\45\163\40\55\55\x3e", uniqid("\127\x50\122\x5f\x58\115\x50\x5f", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto kkmwwqyesmkescyg; } return $nsmgceoqaqogqmuw; kkmwwqyesmkescyg: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
