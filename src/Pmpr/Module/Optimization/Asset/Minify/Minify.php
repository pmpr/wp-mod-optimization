<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e79fd80d6bb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Minify; use Pmpr\Module\Optimization\Asset\Setting; class Minify extends Common { protected array $enables = []; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\142\x75\x66\x66\145\x72\137\160\x72\x6f\x63\x65\163\163"), [$this, "\167\141\155\x69\x69\151\x61\x67\143\x77\167\x69\147\165\143\165"], 50); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { if (!$this->weysguygiseoukqw(Setting::ccoaqmuiqioqaooa, false)) { goto qwsmiaegmcwuskwi; } if (!$this->weysguygiseoukqw(Setting::sikyekqowskqiqga)) { goto ywqouwqomiqwoquu; } HTML::symcgieuakksimmu(); ywqouwqomiqwoquu: if (!$this->weysguygiseoukqw(Setting::ykqawckyqkmqiamq)) { goto qcwkymcgqacaaywc; } CSS::symcgieuakksimmu(); qcwkymcgqacaaywc: if (!$this->weysguygiseoukqw(Setting::eumicecccemicqey)) { goto wmcucyuieqgqisis; } JS::symcgieuakksimmu(); wmcucyuieqgqisis: qwsmiaegmcwuskwi: } public function wamiiiagcwwigucu(?string $nsmgceoqaqogqmuw) : ?string { $qsucisggsqskmcse = [Setting::eumicecccemicqey => JS::symcgieuakksimmu(), Setting::ykqawckyqkmqiamq => CSS::symcgieuakksimmu(), Setting::sikyekqowskqiqga => HTML::symcgieuakksimmu()]; foreach ($qsucisggsqskmcse as $amakmumgguksgmum => $aksgkeoomwimawms) { if (!($this->weysguygiseoukqw($amakmumgguksgmum, false) && $aksgkeoomwimawms instanceof AbstractMinify)) { goto sikmqkecsiyciaei; } $nsmgceoqaqogqmuw = $aksgkeoomwimawms->okuguyacggsageqq($nsmgceoqaqogqmuw); sikmqkecsiyciaei: usmagcaocwiugqum: } yyyyawaqcowsgqcs: return $nsmgceoqaqogqmuw; } }
