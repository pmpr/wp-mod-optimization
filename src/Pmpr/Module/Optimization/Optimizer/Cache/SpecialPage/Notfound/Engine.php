<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d22e0b4cda5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Notfound; use Pmpr\Common\Foundation\Interfaces\Constants; class Engine extends Common { public function gskqygiceygcguyo() : string { return untrailingslashit($this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::umciwouwwsyqumae)) . "\x2f\156\x6f\164\146\157\x75\x6e\144"; } public function guwogeosiyasimgk() : string { return "{$this->gskqygiceygcguyo()}\57\64\x30\64\56\164\170\164"; } public function wuceuyakuwiquase() : string { return "{$this->gskqygiceygcguyo()}\57\x34\60\x34\x2e\x68\164\x6d\x6c"; } public function cqqyaosqycscowyw() : array { $megmggkiokqkcwou = []; $esaqeawoigqgagum = $this->guwogeosiyasimgk(); if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($esaqeawoigqgagum)) { goto kyggwyywiycksgqq; } $megmggkiokqkcwou = file($esaqeawoigqgagum, FILE_IGNORE_NEW_LINES); if ($megmggkiokqkcwou) { goto gyeayeuuyiemuwuq; } $megmggkiokqkcwou = []; gyeayeuuyiemuwuq: kyggwyywiycksgqq: return $megmggkiokqkcwou; } public function iuwqmqagcwaeoksk(?string $aaokuekaimigoyue, ?array $essikcmqiyqaqoaq = null) { $ksaameoqigiaoigg = false; if (!$aaokuekaimigoyue) { goto aqmiewawgseaqeqk; } if (is_array($essikcmqiyqaqoaq)) { goto sugumgeqcwgekcqs; } $essikcmqiyqaqoaq = $this->cqqyaosqycscowyw(); sugumgeqcwgekcqs: if (!($essikcmqiyqaqoaq && in_array($aaokuekaimigoyue, $essikcmqiyqaqoaq, true))) { goto imeaiksowuukikui; } $ksaameoqigiaoigg = array_search($aaokuekaimigoyue, $essikcmqiyqaqoaq, true); imeaiksowuukikui: aqmiewawgseaqeqk: return $ksaameoqigiaoigg; } public function kywqieosgkokaiue(?string $aaokuekaimigoyue) { if (!($this->iuwqmqagcwaeoksk($aaokuekaimigoyue) === false)) { goto gaceikykesgywssm; } $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->guwogeosiyasimgk(), $aaokuekaimigoyue . PHP_EOL, FILE_APPEND); gaceikykesgywssm: } }
