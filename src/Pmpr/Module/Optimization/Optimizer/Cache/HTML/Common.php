<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d2162b04da4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\Common as BaseClass; abstract class Common extends BaseClass { public function gusmkkagsgyegacm($eeamcawaiqocomwy, $syowsmcowosssaos = null) : string { $wkcwykowmmmwioqs = $this->aisuyoiqugewaocg($eeamcawaiqocomwy); if (!$syowsmcowosssaos) { goto kakkuyeccaacewyo; } switch ($syowsmcowosssaos) { case Constants::skogicecygyyskkq: $wkcwykowmmmwioqs .= "\x2d\x6d\157\x62\151\154\x65"; goto usyckeewsgwaysam; } gicuuwuuuwumyooa: usyckeewsgwaysam: kakkuyeccaacewyo: return "{$wkcwykowmmmwioqs}\x2e\x68\164\x6d\154"; } public function ysuiqkgycmagqqyu(?string $eeamcawaiqocomwy, $syowsmcowosssaos = null) : bool { if (!$syowsmcowosssaos) { goto yseyyukqaowwouua; } $skqeckgiuieeusoy = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($this->cckisoakyqqgywey($eeamcawaiqocomwy, $syowsmcowosssaos)); goto qcgyggiaowuqswuw; yseyyukqaowwouua: $smagieqmacsmsoyo = [Constants::mcaucuyeeiwsmmuy]; if (!(Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(Setting::egcsacmywomuowsc))) { goto cysgqimowcqoqqsc; } $smagieqmacsmsoyo[] = Constants::skogicecygyyskkq; cysgqimowcqoqqsc: foreach ($smagieqmacsmsoyo as $qsuygaucsawsekqe) { if ($this->ysuiqkgycmagqqyu($eeamcawaiqocomwy, $qsuygaucsawsekqe)) { goto casgoamcqkekgeeo; } return false; casgoamcqkekgeeo: qsokkkyoackoycie: } ismeikacqqyqcmqe: $skqeckgiuieeusoy = true; qcgyggiaowuqswuw: return $skqeckgiuieeusoy; } public function cckisoakyqqgywey($eeamcawaiqocomwy, $syowsmcowosssaos = null) : string { return "{$this->gskqygiceygcguyo()}\57{$this->gusmkkagsgyegacm($eeamcawaiqocomwy, $syowsmcowosssaos)}"; } public function gskqygiceygcguyo() : ?string { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(HTML::ucgeywccqcsggsyw, ''); } public function smemquqkamygequg() : ?string { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq, ''); } }
