<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c3699ff30b7             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Minify; use Pmpr\Package\Optimization\Asset\Setting; class Minify extends Common { protected array $enables = []; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\164\137\x62\165\x66\x66\145\x72\137\x70\162\157\143\145\163\163"), [$this, "\167\x61\x6d\x69\x69\151\141\147\143\167\167\x69\147\165\x63\x75"], 50); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { if (!$this->weysguygiseoukqw(Setting::ccoaqmuiqioqaooa, false)) { goto saycoceqywiekqsi; } if (!$this->weysguygiseoukqw(Setting::sikyekqowskqiqga)) { goto qugsgsscqyikugyc; } HTML::symcgieuakksimmu(); qugsgsscqyikugyc: if (!$this->weysguygiseoukqw(Setting::ykqawckyqkmqiamq)) { goto gskaqcgccswmuqsy; } CSS::symcgieuakksimmu(); gskaqcgccswmuqsy: if (!$this->weysguygiseoukqw(Setting::eumicecccemicqey)) { goto uccuykggugcmiyam; } JS::symcgieuakksimmu(); uccuykggugcmiyam: saycoceqywiekqsi: } public function wamiiiagcwwigucu(?string $nsmgceoqaqogqmuw) : ?string { $qsucisggsqskmcse = [Setting::eumicecccemicqey => JS::symcgieuakksimmu(), Setting::ykqawckyqkmqiamq => CSS::symcgieuakksimmu(), Setting::sikyekqowskqiqga => HTML::symcgieuakksimmu()]; foreach ($qsucisggsqskmcse as $amakmumgguksgmum => $aksgkeoomwimawms) { if (!($this->weysguygiseoukqw($amakmumgguksgmum, false) && $aksgkeoomwimawms instanceof AbstractMinify)) { goto waycokyiesmqgqcg; } $nsmgceoqaqogqmuw = $aksgkeoomwimawms->okuguyacggsageqq($nsmgceoqaqogqmuw); waycokyiesmqgqcg: eqmauwqqowsiwaue: } sqaowueaequoigsa: return $nsmgceoqaqogqmuw; } }
