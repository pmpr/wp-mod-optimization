<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66c7b6e5555be             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\x55\x6d\163\x69") : array { preg_match_all("\x2f" . $eouekqmooogkoqoo . "\x2f" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto yayykakkyeoieicm; } return []; yayykakkyeoieicm: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\41\55\55\x5c\x73\x2a\x6e\x6f\160\x74\x69\x6d\x69\172\145\134\x73\52\x2d\55\76\56\x2a\77\x3c\41\x2d\55\x5c\x73\52\57\x5c\x73\52\x6e\157\160\164\151\155\151\172\x65\x5c\163\52\x2d\x2d\76\x23\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto yuiouamaogkkqmck; } return $nsmgceoqaqogqmuw; yuiouamaogkkqmck: $moyaaaascoeowegu = preg_replace("\x2f\x3c\41\55\55\50\56\52\x29\55\x2d\76\x2f\125\x69\163", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto mmwqwowqcaseyyki; } return $nsmgceoqaqogqmuw; mmwqwowqcaseyyki: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\x73\x63\162\151\160\x74\x5b\136\76\135\52\76\x2e\x2a\x3f\x3c\x5c\57\x73\143\x72\151\160\164\134\x73\52\x3e\x23\x6d\x69\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto wsckacayikksiswo; } return $nsmgceoqaqogqmuw; wsckacayikksiswo: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\x6e\x6f\x73\143\x72\x69\160\164\x5b\136\x3e\x5d\52\x3e\56\52\77\74\x5c\57\156\x6f\x73\x63\x72\x69\x70\x74\x5c\x73\x2a\x3e\43\155\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto qiawociayswicugw; } return $nsmgceoqaqogqmuw; qiawociayswicugw: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\x23\x3c\x78\x6d\160\x2e\52\x3e\x2e\x2a\74\x2f\170\x6d\160\76\43\125\151\x73"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\x63\x63\161\x6b\x77\x63\155\x65\145\x6b\147\x69\151\x6f\151\x77"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto ngagwiymmmycgscu; } return $nsmgceoqaqogqmuw; ngagwiymmmycgscu: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\x3c\x21\x2d\x2d\x20\x25\163\40\55\55\x3e", uniqid("\127\x50\x52\x5f\x58\115\120\137")); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto qimomesqamyyicmo; } return $nsmgceoqaqogqmuw; qimomesqamyyicmo: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
