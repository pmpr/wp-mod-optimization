<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a156d8f54b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Extension; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\Optimization\Bypass\Setting as BypassSetting; abstract class Bypass extends Common { protected string $name = ''; public function aakmagwggmkoiiyu() : string { return $this->name; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\151\156\137\x69\x6e\151\x74", [$this, "\161\161\157\143\141\143\141\x6d\151\151\x69\x77\165\x77\151\x73"]); } public function qqocacamiiiwuwis() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto gimquiiwucueoqkw; } $omqquekswieeogws = "\x6f\x70\164\137\141\x75\164\x6f\137\x62\x79\x70\141\x73\x73\137{$this->aakmagwggmkoiiyu()}\x5f\141\144\x64\145\x64"; $oakymgscysyssksa = DecoratorOption::get($omqquekswieeogws, false); if (!(!$oakymgscysyssksa && ($uescmseksquycukc = $this->ekkycgeasgwaqiwu()))) { goto ggoimgeeuugseiwk; } $uuycqiugegwuigqc = $this->weysguygiseoukqw(BypassSetting::koqiyueekmymguyq, []); $this->kmuweyayaqoeqiyw()::eiaacegkigqiwawg(BypassSetting::koqiyueekmymguyq, array_merge($uuycqiugegwuigqc, $uescmseksquycukc), false); DecoratorOption::update($omqquekswieeogws, 1); ggoimgeeuugseiwk: gimquiiwucueoqkw: } public function wauacaemuqggkyue($oysoyeaucuawyaky, string $sqeykgyoooqysmca) : array { $yqisouqmuqkgmwuy = [self::squoamkioomemiyi => BypassSetting::kowaogweeucieykc, BypassSetting::ymycaemoukukoqoe => $sqeykgyoooqysmca]; $ccamueccusigaaio = self::ucoiewcoucauqwko; if (!in_array($sqeykgyoooqysmca, ManipulatePost::mwoyqeeigwqoamiw(), true)) { goto eimouyomcoqkmaae; } $ccamueccusigaaio = self::qgmuskygocwmouos; eimouyomcoqkmaae: if (is_array($oysoyeaucuawyaky)) { goto kkwqmoeeqygoimwg; } $oysoyeaucuawyaky = [$oysoyeaucuawyaky]; kkwqmoeeqygoimwg: $yqisouqmuqkgmwuy[$ccamueccusigaaio] = $oysoyeaucuawyaky; return $yqisouqmuqkgmwuy; } public function kcmqkuugeukkkiug(string $ekuqiqmikiicgoss) : array { return [self::squoamkioomemiyi => BypassSetting::qeesogequqsoiymo, BypassSetting::kcwcmkwmmwqimwyk => $ekuqiqmikiicgoss]; } public abstract function ekkycgeasgwaqiwu() : array; }
