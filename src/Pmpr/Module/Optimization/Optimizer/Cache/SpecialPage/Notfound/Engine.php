<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d31c5704a7a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Notfound; use Pmpr\Common\Foundation\Interfaces\Constants; class Engine extends Common { public function gskqygiceygcguyo() : string { return untrailingslashit($this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::umciwouwwsyqumae)) . "\57\156\x6f\x74\146\157\x75\156\144"; } public function guwogeosiyasimgk() : string { return "{$this->gskqygiceygcguyo()}\57\x34\x30\x34\x2e\x74\x78\164"; } public function wuceuyakuwiquase() : string { return "{$this->gskqygiceygcguyo()}\57\x34\60\64\x2e\150\x74\x6d\x6c"; } public function cqqyaosqycscowyw() : array { $megmggkiokqkcwou = []; $esaqeawoigqgagum = $this->guwogeosiyasimgk(); if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($esaqeawoigqgagum)) { goto gaceikykesgywssm; } $megmggkiokqkcwou = file($esaqeawoigqgagum, FILE_IGNORE_NEW_LINES); if ($megmggkiokqkcwou) { goto aqmiewawgseaqeqk; } $megmggkiokqkcwou = []; aqmiewawgseaqeqk: gaceikykesgywssm: return $megmggkiokqkcwou; } public function iuwqmqagcwaeoksk(?string $aaokuekaimigoyue, ?array $essikcmqiyqaqoaq = null) { $ksaameoqigiaoigg = false; if (!$aaokuekaimigoyue) { goto ssmgmiuqoeiuacsa; } if (is_array($essikcmqiyqaqoaq)) { goto weggeeowykuqooyg; } $essikcmqiyqaqoaq = $this->cqqyaosqycscowyw(); weggeeowykuqooyg: if (!($essikcmqiyqaqoaq && in_array($aaokuekaimigoyue, $essikcmqiyqaqoaq, true))) { goto cqkuuyouqoqyguus; } $ksaameoqigiaoigg = array_search($aaokuekaimigoyue, $essikcmqiyqaqoaq, true); cqkuuyouqoqyguus: ssmgmiuqoeiuacsa: return $ksaameoqigiaoigg; } public function kywqieosgkokaiue(?string $aaokuekaimigoyue) { if (!($this->iuwqmqagcwaeoksk($aaokuekaimigoyue) === false)) { goto wiqigqgiegmacgsw; } $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->guwogeosiyasimgk(), $aaokuekaimigoyue . PHP_EOL, FILE_APPEND); wiqigqgiegmacgsw: } }
