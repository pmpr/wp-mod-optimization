<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6626f1ce4e690             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function ksiyqouuaoymsycg(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\125\x6d\163\x69") : array { preg_match_all("\x2f" . $eouekqmooogkoqoo . "\x2f" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto omemqagskckoeoog; } return []; omemqagskckoeoog: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\41\x2d\x2d\134\x73\52\x6e\x6f\x70\x74\x69\x6d\151\172\145\x5c\163\x2a\55\x2d\x3e\x2e\x2a\x3f\74\x21\55\55\134\163\x2a\57\x5c\163\52\156\157\160\164\x69\155\x69\x7a\x65\134\163\52\x2d\55\x3e\x23\151\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto aeuosggumiiwoesm; } return $nsmgceoqaqogqmuw; aeuosggumiiwoesm: $moyaaaascoeowegu = preg_replace("\x2f\74\41\x2d\55\50\x2e\52\51\x2d\x2d\x3e\x2f\x55\x69\x73", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto wyqmeyoaggwuioak; } return $nsmgceoqaqogqmuw; wyqmeyoaggwuioak: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\163\x63\x72\151\x70\164\x5b\136\x3e\x5d\52\x3e\x2e\52\x3f\74\134\x2f\163\143\x72\x69\x70\x74\x5c\163\x2a\x3e\x23\155\151\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto uyksacasqywyessc; } return $nsmgceoqaqogqmuw; uyksacasqywyessc: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\x6e\157\x73\x63\162\151\x70\x74\x5b\136\76\135\x2a\x3e\x2e\52\x3f\74\x5c\x2f\156\157\163\143\x72\x69\x70\164\x5c\x73\x2a\76\x23\155\x69\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto sqmqwqeoygcmqcim; } return $nsmgceoqaqogqmuw; sqmqwqeoygcmqcim: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\43\x3c\x78\x6d\x70\56\x2a\x3e\56\52\x3c\57\x78\155\x70\x3e\x23\x55\x69\163"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\x63\x63\x71\153\x77\x63\155\145\145\x6b\147\151\x69\x6f\x69\167"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto syykqmkiyoekqsek; } return $nsmgceoqaqogqmuw; syykqmkiyoekqsek: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\74\41\x2d\55\40\45\163\x20\x2d\55\76", uniqid("\x57\x50\x52\137\130\x4d\120\x5f")); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto aiqekkyauwswayyq; } return $nsmgceoqaqogqmuw; aiqekkyauwswayyq: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
