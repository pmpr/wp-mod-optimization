<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6688fb3b4b1ce             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\125\155\x73\x69") : array { preg_match_all("\57" . $eouekqmooogkoqoo . "\57" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto twkmiuomimomscew; } return []; twkmiuomimomscew: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\41\x2d\x2d\134\x73\52\x6e\157\x70\x74\x69\155\x69\x7a\145\x5c\163\x2a\x2d\55\x3e\56\x2a\x3f\x3c\41\55\55\134\x73\52\57\x5c\x73\52\x6e\157\x70\x74\151\155\x69\x7a\x65\134\163\52\x2d\55\x3e\43\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto kooskuwkuayiuose; } return $nsmgceoqaqogqmuw; kooskuwkuayiuose: $moyaaaascoeowegu = preg_replace("\x2f\x3c\41\x2d\55\50\56\52\51\x2d\55\76\57\125\x69\163", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto qwcegcuowwgiccos; } return $nsmgceoqaqogqmuw; qwcegcuowwgiccos: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\163\143\162\x69\160\164\133\136\x3e\x5d\52\x3e\56\52\77\x3c\x5c\x2f\x73\x63\x72\x69\x70\164\x5c\163\x2a\76\x23\x6d\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto qcessicwuikwqsis; } return $nsmgceoqaqogqmuw; qcessicwuikwqsis: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\156\157\163\143\x72\x69\160\164\x5b\x5e\76\135\x2a\x3e\56\52\77\x3c\134\x2f\156\157\163\x63\162\x69\160\164\134\163\x2a\x3e\x23\155\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto yssscwioiyygssec; } return $nsmgceoqaqogqmuw; yssscwioiyygssec: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\43\74\x78\155\160\56\x2a\x3e\56\x2a\x3c\x2f\x78\155\x70\76\x23\125\x69\163"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\143\x63\x71\153\167\x63\x6d\145\145\153\x67\151\x69\x6f\151\167"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto ieumumsgyguceusy; } return $nsmgceoqaqogqmuw; ieumumsgyguceusy: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\74\41\x2d\x2d\40\45\x73\x20\x2d\x2d\x3e", uniqid("\x57\x50\x52\137\x58\115\x50\137")); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto coywmiyqgsweuiic; } return $nsmgceoqaqogqmuw; coywmiyqgsweuiic: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
