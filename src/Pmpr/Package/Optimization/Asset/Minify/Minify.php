<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c70cbf24c2f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Minify; use Pmpr\Package\Optimization\Asset\Setting; class Minify extends Common { protected array $enables = []; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x62\165\146\x66\x65\x72\137\x70\162\x6f\143\x65\163\x73"), [$this, "\x77\141\x6d\151\151\x69\x61\x67\143\167\167\151\147\165\x63\x75"], 50); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { if (!$this->weysguygiseoukqw(Setting::ccoaqmuiqioqaooa, false)) { goto qmuikumqukcyaeqa; } if (!$this->weysguygiseoukqw(Setting::sikyekqowskqiqga)) { goto pssquaaiioygwqoq; } HTML::symcgieuakksimmu(); pssquaaiioygwqoq: if (!$this->weysguygiseoukqw(Setting::ykqawckyqkmqiamq)) { goto ucugeysomcyceyos; } CSS::symcgieuakksimmu(); ucugeysomcyceyos: if (!$this->weysguygiseoukqw(Setting::eumicecccemicqey)) { goto momgmqemgcasyuqq; } JS::symcgieuakksimmu(); momgmqemgcasyuqq: qmuikumqukcyaeqa: } public function wamiiiagcwwigucu(?string $nsmgceoqaqogqmuw) : ?string { $qsucisggsqskmcse = [Setting::eumicecccemicqey => JS::symcgieuakksimmu(), Setting::ykqawckyqkmqiamq => CSS::symcgieuakksimmu(), Setting::sikyekqowskqiqga => HTML::symcgieuakksimmu()]; foreach ($qsucisggsqskmcse as $amakmumgguksgmum => $aksgkeoomwimawms) { if (!($this->weysguygiseoukqw($amakmumgguksgmum, false) && $aksgkeoomwimawms instanceof AbstractMinify)) { goto mioqycmmeucswoms; } $nsmgceoqaqogqmuw = $aksgkeoomwimawms->okuguyacggsageqq($nsmgceoqaqogqmuw); mioqycmmeucswoms: imaiuooqwwokwemw: } keyiswqkmqqquosw: return $nsmgceoqaqogqmuw; } }
