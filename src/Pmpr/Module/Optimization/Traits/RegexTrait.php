<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cf4bb05f1e1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\x55\x6d\163\151") : array { preg_match_all("\57" . $eouekqmooogkoqoo . "\57" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto gqyyccceswkqcmaa; } return []; gqyyccceswkqcmaa: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\x21\x2d\x2d\134\163\52\156\x6f\160\x74\151\x6d\x69\172\x65\x5c\163\x2a\55\55\x3e\x2e\x2a\77\x3c\x21\55\55\134\163\52\x2f\134\x73\52\156\157\x70\164\151\155\151\x7a\x65\x5c\163\52\55\55\x3e\43\151\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto sykuuisikqcwuaqu; } return $nsmgceoqaqogqmuw; sykuuisikqcwuaqu: $moyaaaascoeowegu = preg_replace("\x2f\x3c\x21\55\x2d\50\56\52\51\55\x2d\76\57\125\x69\163", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto mquyemuqcqeassqc; } return $nsmgceoqaqogqmuw; mquyemuqcqeassqc: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\163\x63\x72\x69\x70\x74\x5b\x5e\x3e\135\x2a\76\x2e\52\77\74\x5c\57\x73\143\x72\151\160\x74\x5c\x73\x2a\76\x23\x6d\x69\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto weiaigyyigkusucy; } return $nsmgceoqaqogqmuw; weiaigyyigkusucy: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\156\157\163\143\x72\151\160\164\133\x5e\x3e\x5d\52\76\x2e\52\x3f\x3c\134\57\156\157\x73\143\162\151\x70\164\x5c\x73\52\x3e\43\155\x69\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto bagkewioewygysea; } return $nsmgceoqaqogqmuw; bagkewioewygysea: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\x23\74\x78\155\x70\x2e\x2a\x3e\x2e\x2a\x3c\x2f\x78\x6d\x70\x3e\x23\x55\151\163"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\x63\x63\x71\x6b\x77\143\x6d\x65\x65\153\147\151\151\157\x69\167"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto mgieeyuyuoeccaog; } return $nsmgceoqaqogqmuw; mgieeyuyuoeccaog: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\74\41\x2d\55\x20\x25\x73\x20\55\x2d\76", uniqid("\127\x50\122\x5f\x58\115\x50\x5f", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto amgsicqmemeuuaem; } return $nsmgceoqaqogqmuw; amgsicqmemeuuaem: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
