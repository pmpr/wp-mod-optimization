<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c1ef6c8776             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Traits\CommonTrait; class Container extends BaseClass { const wowuwuigyoceikas = "\x70\155\160\x72\x2d\157\160\x74\151\155\x69\x7a\x61\164\x69\157\x6e"; const kqgagmgieeucmuik = self::wowuwuigyoceikas . "\137\x62\165\x64\x67\x65\164\163"; const gwccmwywmiccammg = "\150\x65\x72\x6f\153\165\x5f\141\x70\x70\163"; const muqmwceaiwwakwws = "\x4f\120\124\111\115\x49\x5a\x41\124\x49\117\x4e\137\x43\117\x4e\x46\x49\x47\137\x50\x41\x54\x48"; use CommonTrait; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function eaoemakycwuywqsy($migiiksoiymissge, $suaemuyiacqyugsm = null) : ?string { $geyqgckicikewwke = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\151\163\x5f\157\x70\x74\151\155\x69\172\145\144"), [], $migiiksoiymissge, $suaemuyiacqyugsm); $iueymcwwscwqkiyq = ''; if (!$geyqgckicikewwke || !in_array(true, $geyqgckicikewwke, true)) { goto eiicmcasqikiyasw; } if (in_array(false, $geyqgckicikewwke, true)) { goto gmsyoscesymiwwue; } $iueymcwwscwqkiyq = self::amcogigwsaqssuai; gmsyoscesymiwwue: goto ayucsuwsiocgycww; eiicmcasqikiyasw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; ayucsuwsiocgycww: return $iueymcwwscwqkiyq; } public function ukacwyckseuqsqgc($ogomymegcoacqisg) { if (!strpos($ogomymegcoacqisg, "\166\145\162\75")) { goto smmagoyuqoigoesc; } $ogomymegcoacqisg = DecoratorQuery::oiamiqcuyksmmomm("\166\x65\x72", $ogomymegcoacqisg); smmagoyuqoigoesc: return $ogomymegcoacqisg; } public function aoaeiwswyagmesku($eeamcawaiqocomwy) : bool { return ManipulateFormat::aoaeiwswyagmesku($eeamcawaiqocomwy); } public function omkiaysccawouqig($egsumesakcaaukem) : bool { $couiucmsqaieciue = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\x65\x78\x63\x6c\x75\x64\x65\137\163\157\165\162\143\x65\163"), [], $egsumesakcaaukem); $eekyacmiyoweyeea = false; foreach ($couiucmsqaieciue as $yemgmmgogcwccuky) { if (!(strpos($egsumesakcaaukem, $yemgmmgogcwccuky) !== false)) { goto cwyaysecsakaqgew; } $eekyacmiyoweyeea = true; goto wsqeiwkgoiekwasy; cwyaysecsakaqgew: swesqeqmagkicuws: } wsqeiwkgoiekwasy: return $eekyacmiyoweyeea; } public function qwmkuasciiicwaie() : bool { return DecoratorUser::ksgkoukcicwkkaum() && DecoratorUser::scmcyesmmikkucie(); } public function aumueocimuaiwyee() : ?string { return $this->weysguygiseoukqw(Setting::mkuaccemgegcsyuq); } public function quycagwoqskgemms($ccamueccusigaaio) : bool { $emoqwwkmassqsoaw = ManipulateServer::get(self::wowuwuigyoceikas . "\x2d\163\x65\143\x2d\153\x65\171"); $aiamqeawckcsuaou = ManipulateServer::get(self::wowuwuigyoceikas . "\x2d{$ccamueccusigaaio}"); $swecuewakscmiogg = ManipulateServer::get(self::wowuwuigyoceikas); return $swecuewakscmiogg && $emoqwwkmassqsoaw && $aiamqeawckcsuaou && $emoqwwkmassqsoaw == $this->aumueocimuaiwyee(); } public function miueaekaaugaccmg(&$iswcokucwmiosiaq, $aiowsaccomcoikus = self::xwwaeweqegiqeqkm) : bool { $kuuugksiksqcaaaa = parent::miueaekaaugaccmg($iswcokucwmiosiaq, $aiowsaccomcoikus); if (!($kuuugksiksqcaaaa && !$this->qwmkuasciiicwaie())) { goto kgqgcggccmiwayua; } $iswcokucwmiosiaq = __("\x50\145\x72\x6d\151\x73\163\151\x6f\156\x20\144\x65\x6e\x69\145\144", PR__MDL__OPTIMIZATION); kgqgcggccmiwayua: return $kuuugksiksqcaaaa; } }