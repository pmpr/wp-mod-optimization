<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581d1c9b1ab             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\x55\x6d\163\x69") : array { preg_match_all("\x2f" . $eouekqmooogkoqoo . "\57" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (empty($meyiiwcswqmuggyg)) { return []; } return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\x21\x2d\x2d\134\163\x2a\156\157\160\x74\x69\155\x69\x7a\x65\134\x73\52\55\55\x3e\56\52\x3f\x3c\x21\55\x2d\134\163\52\57\134\163\x2a\x6e\x6f\x70\164\151\x6d\151\172\x65\x5c\163\x2a\x2d\x2d\x3e\x23\151\163", '', $nsmgceoqaqogqmuw); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } $moyaaaascoeowegu = preg_replace("\57\74\41\55\55\x28\56\x2a\51\55\55\76\57\125\x69\x73", '', $moyaaaascoeowegu); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\163\143\162\x69\x70\x74\x5b\136\x3e\135\x2a\x3e\56\52\x3f\74\x5c\x2f\163\143\162\x69\x70\x74\134\163\52\76\x23\155\151\x73", '', $nsmgceoqaqogqmuw); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\156\x6f\x73\143\162\x69\x70\164\133\136\x3e\135\x2a\76\56\52\77\x3c\x5c\57\156\157\x73\x63\162\151\x70\x74\134\163\x2a\x3e\43\155\x69\163", '', $nsmgceoqaqogqmuw); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\x23\74\x78\x6d\x70\56\52\76\x2e\52\x3c\57\170\155\160\x3e\43\125\151\x73"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\143\143\x71\153\x77\x63\x6d\x65\145\x6b\147\x69\151\157\151\x77"], $nsmgceoqaqogqmuw); if (empty($replaced_html)) { return $nsmgceoqaqogqmuw; } return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\x3c\x21\55\55\x20\45\x73\x20\55\55\x3e", uniqid("\127\x50\122\137\130\x4d\120\x5f", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (empty($this->XMPReplace)) { return $nsmgceoqaqogqmuw; } return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
