<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d04ce34c3b0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Traits\CommonTrait; abstract class Container extends BaseClass { const wowuwuigyoceikas = "\160\155\x70\162\55\x6f\x70\164\151\155\151\x7a\x61\164\x69\x6f\x6e"; const kqgagmgieeucmuik = self::wowuwuigyoceikas . "\137\x62\x75\x64\147\145\x74\163"; const ikmkgmwegyasgqmo = self::wowuwuigyoceikas . "\137\162\x65\155\157\x74\x65\x5f\x61\x70\160\163"; const muqmwceaiwwakwws = "\117\120\124\x49\x4d\111\x5a\101\124\111\117\x4e\x5f\103\117\116\106\x49\107\x5f\120\x41\x54\x48"; use CommonTrait; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function ukacwyckseuqsqgc($ogomymegcoacqisg) { if (!strpos($ogomymegcoacqisg, "\166\145\162\x3d")) { goto qcwkymcgqacaaywc; } $ogomymegcoacqisg = DecoratorQuery::oiamiqcuyksmmomm("\166\145\x72", $ogomymegcoacqisg); qcwkymcgqacaaywc: return $ogomymegcoacqisg; } public function aoaeiwswyagmesku($eeamcawaiqocomwy) : bool { return ManipulateFormat::aoaeiwswyagmesku($eeamcawaiqocomwy); } public function omkiaysccawouqig($egsumesakcaaukem) : bool { $couiucmsqaieciue = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\x5f\x65\x78\143\154\x75\x64\x65\x5f\x73\x6f\x75\162\143\x65\x73"), [], $egsumesakcaaukem); $eekyacmiyoweyeea = false; foreach ($couiucmsqaieciue as $yemgmmgogcwccuky) { if (!(strpos($egsumesakcaaukem, $yemgmmgogcwccuky) !== false)) { goto yyyyawaqcowsgqcs; } $eekyacmiyoweyeea = true; goto wmcucyuieqgqisis; yyyyawaqcowsgqcs: qwsmiaegmcwuskwi: } wmcucyuieqgqisis: return $eekyacmiyoweyeea; } public function qwmkuasciiicwaie() : bool { return DecoratorUser::ksgkoukcicwkkaum() && DecoratorUser::scmcyesmmikkucie(); } public function aumueocimuaiwyee() : ?string { return $this->weysguygiseoukqw(Setting::mkuaccemgegcsyuq); } public function quycagwoqskgemms($ccamueccusigaaio) : bool { $emoqwwkmassqsoaw = ManipulateServer::get(self::wowuwuigyoceikas . "\x2d\x73\x65\143\55\153\x65\171"); $aiamqeawckcsuaou = ManipulateServer::get(self::wowuwuigyoceikas . "\x2d{$ccamueccusigaaio}"); $swecuewakscmiogg = ManipulateServer::get(self::wowuwuigyoceikas); return $swecuewakscmiogg && $emoqwwkmassqsoaw && $aiamqeawckcsuaou && $emoqwwkmassqsoaw === $this->aumueocimuaiwyee(); } public function miueaekaaugaccmg(&$iswcokucwmiosiaq, $aiowsaccomcoikus = self::xwwaeweqegiqeqkm) : bool { $kuuugksiksqcaaaa = parent::miueaekaaugaccmg($iswcokucwmiosiaq, $aiowsaccomcoikus); if (!($kuuugksiksqcaaaa && !$this->qwmkuasciiicwaie())) { goto usmagcaocwiugqum; } $iswcokucwmiosiaq = __("\120\145\x72\x6d\151\x73\163\x69\x6f\x6e\x20\x64\x65\156\x69\x65\x64", PR__MDL__OPTIMIZATION); usmagcaocwiugqum: return $kuuugksiksqcaaaa; } }
