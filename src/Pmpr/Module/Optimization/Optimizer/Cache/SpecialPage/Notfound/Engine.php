<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f18cb0c5939             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Notfound; use Pmpr\Common\Foundation\Interfaces\Constants; class Engine extends Common { public function gskqygiceygcguyo() : string { return untrailingslashit($this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::umciwouwwsyqumae)) . "\x2f\156\x6f\x74\x66\157\165\x6e\144"; } public function guwogeosiyasimgk() : string { return "{$this->gskqygiceygcguyo()}\57\64\x30\x34\56\x74\x78\164"; } public function wuceuyakuwiquase() : string { return "{$this->gskqygiceygcguyo()}\57\x34\60\x34\56\150\164\x6d\154"; } public function cqqyaosqycscowyw() : array { $megmggkiokqkcwou = []; $esaqeawoigqgagum = $this->guwogeosiyasimgk(); if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($esaqeawoigqgagum)) { goto kmcygqkmwcgwamkw; } $megmggkiokqkcwou = file($esaqeawoigqgagum, FILE_IGNORE_NEW_LINES); if ($megmggkiokqkcwou) { goto yicaqocukqoauqgc; } $megmggkiokqkcwou = []; yicaqocukqoauqgc: kmcygqkmwcgwamkw: return $megmggkiokqkcwou; } public function iuwqmqagcwaeoksk(?string $aaokuekaimigoyue, ?array $essikcmqiyqaqoaq = null) { $ksaameoqigiaoigg = false; if (!$aaokuekaimigoyue) { goto mmesoisgqucowwms; } if (is_array($essikcmqiyqaqoaq)) { goto gysmigyakgaakeoy; } $essikcmqiyqaqoaq = $this->cqqyaosqycscowyw(); gysmigyakgaakeoy: if (!($essikcmqiyqaqoaq && in_array($aaokuekaimigoyue, $essikcmqiyqaqoaq, true))) { goto sueeqeioeiwkscao; } $ksaameoqigiaoigg = array_search($aaokuekaimigoyue, $essikcmqiyqaqoaq, true); sueeqeioeiwkscao: mmesoisgqucowwms: return $ksaameoqigiaoigg; } public function kywqieosgkokaiue(?string $aaokuekaimigoyue) { if (!($this->iuwqmqagcwaeoksk($aaokuekaimigoyue) === false)) { goto uieuouugckwokske; } $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->guwogeosiyasimgk(), $aaokuekaimigoyue . PHP_EOL, FILE_APPEND); uieuouugckwokske: } }
