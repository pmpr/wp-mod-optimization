<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d04ce34c3b0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Minify; use Pmpr\Module\Optimization\Asset\Setting; class Minify extends Common { protected array $enables = []; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\x5f\x62\165\x66\146\x65\162\x5f\x70\x72\x6f\143\x65\163\x73"), [$this, "\x77\x61\155\x69\x69\x69\141\x67\x63\167\x77\x69\147\165\x63\x75"], 50); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { if (!$this->weysguygiseoukqw(Setting::ccoaqmuiqioqaooa, false)) { goto yuimwyoywaiiqacs; } if (!$this->weysguygiseoukqw(Setting::sikyekqowskqiqga)) { goto ikuuiauwouuqawuw; } HTML::symcgieuakksimmu(); ikuuiauwouuqawuw: if (!$this->weysguygiseoukqw(Setting::ykqawckyqkmqiamq)) { goto yoqakewookqoqacm; } CSS::symcgieuakksimmu(); yoqakewookqoqacm: if (!$this->weysguygiseoukqw(Setting::eumicecccemicqey)) { goto gswcoeiisamakwii; } JS::symcgieuakksimmu(); gswcoeiisamakwii: yuimwyoywaiiqacs: } public function wamiiiagcwwigucu(?string $nsmgceoqaqogqmuw) : ?string { $qsucisggsqskmcse = [Setting::eumicecccemicqey => JS::symcgieuakksimmu(), Setting::ykqawckyqkmqiamq => CSS::symcgieuakksimmu(), Setting::sikyekqowskqiqga => HTML::symcgieuakksimmu()]; foreach ($qsucisggsqskmcse as $amakmumgguksgmum => $aksgkeoomwimawms) { if (!($this->weysguygiseoukqw($amakmumgguksgmum, false) && $aksgkeoomwimawms instanceof AbstractMinify)) { goto iwsmmkqaoksmocok; } $nsmgceoqaqogqmuw = $aksgkeoomwimawms->okuguyacggsageqq($nsmgceoqaqogqmuw); iwsmmkqaoksmocok: emqswoaawgeyosmi: } ocywegekakimmwcq: return $nsmgceoqaqogqmuw; } }
