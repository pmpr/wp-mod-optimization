<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757f1c60b0e8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; abstract class Common extends Container { public function gusmkkagsgyegacm($eeamcawaiqocomwy, $syowsmcowosssaos = null) : string { $wkcwykowmmmwioqs = $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->aisuyoiqugewaocg($eeamcawaiqocomwy); if ($syowsmcowosssaos) { switch ($syowsmcowosssaos) { case Constants::skogicecygyyskkq: $wkcwykowmmmwioqs .= "\55\155\157\142\x69\x6c\x65"; break; } } return "{$wkcwykowmmmwioqs}\56\150\x74\x6d\154"; } public function ysuiqkgycmagqqyu(?string $eeamcawaiqocomwy, $syowsmcowosssaos = null) : bool { if (!$syowsmcowosssaos) { $smagieqmacsmsoyo = [Constants::mcaucuyeeiwsmmuy]; if (Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(Setting::egcsacmywomuowsc)) { $smagieqmacsmsoyo[] = Constants::skogicecygyyskkq; } foreach ($smagieqmacsmsoyo as $qsuygaucsawsekqe) { if (!$this->ysuiqkgycmagqqyu($eeamcawaiqocomwy, $qsuygaucsawsekqe)) { return false; } } $skqeckgiuieeusoy = true; } else { $skqeckgiuieeusoy = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($this->cckisoakyqqgywey($eeamcawaiqocomwy, $syowsmcowosssaos)); } return $skqeckgiuieeusoy; } public function cckisoakyqqgywey($eeamcawaiqocomwy, $syowsmcowosssaos = null) : string { return "{$this->gskqygiceygcguyo()}\57{$this->gusmkkagsgyegacm($eeamcawaiqocomwy, $syowsmcowosssaos)}"; } public function gskqygiceygcguyo() : ?string { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(HTML::ucgeywccqcsggsyw, ''); } public function smemquqkamygequg() : ?string { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq, ''); } }
