<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d04ce34c3b0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Extension; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\Optimization\Bypass\Setting as BypassSetting; abstract class Bypass extends Common { protected string $name = ''; public function aakmagwggmkoiiyu() : string { return $this->name; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\x69\156\137\x69\156\x69\164", [$this, "\161\161\x6f\x63\141\143\x61\155\151\151\151\x77\165\x77\151\163"]); } public function qqocacamiiiwuwis() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto iwsuawwqomaowuii; } $omqquekswieeogws = "\x6f\160\164\137\x61\x75\x74\157\x5f\142\x79\x70\141\x73\x73\137{$this->aakmagwggmkoiiyu()}\x5f\141\144\144\145\144"; $oakymgscysyssksa = DecoratorOption::get($omqquekswieeogws, false); if (!(!$oakymgscysyssksa && ($uescmseksquycukc = $this->ekkycgeasgwaqiwu()))) { goto qoqskyuuwueqkquk; } $uuycqiugegwuigqc = $this->weysguygiseoukqw(BypassSetting::koqiyueekmymguyq, []); $this->kmuweyayaqoeqiyw()::eiaacegkigqiwawg(BypassSetting::koqiyueekmymguyq, array_merge($uuycqiugegwuigqc, $uescmseksquycukc), false); DecoratorOption::update($omqquekswieeogws, 1); qoqskyuuwueqkquk: iwsuawwqomaowuii: } public function wauacaemuqggkyue($oysoyeaucuawyaky, string $sqeykgyoooqysmca) : array { $yqisouqmuqkgmwuy = [self::squoamkioomemiyi => BypassSetting::kowaogweeucieykc, BypassSetting::ymycaemoukukoqoe => $sqeykgyoooqysmca]; $ccamueccusigaaio = self::ucoiewcoucauqwko; if (!in_array($sqeykgyoooqysmca, ManipulatePost::mwoyqeeigwqoamiw(), true)) { goto wcugqegqsuuuwqao; } $ccamueccusigaaio = self::qgmuskygocwmouos; wcugqegqsuuuwqao: if (is_array($oysoyeaucuawyaky)) { goto asiqwuoswmigcaki; } $oysoyeaucuawyaky = [$oysoyeaucuawyaky]; asiqwuoswmigcaki: $yqisouqmuqkgmwuy[$ccamueccusigaaio] = $oysoyeaucuawyaky; return $yqisouqmuqkgmwuy; } public function kcmqkuugeukkkiug(string $ekuqiqmikiicgoss) : array { return [self::squoamkioomemiyi => BypassSetting::qeesogequqsoiymo, BypassSetting::kcwcmkwmmwqimwyk => $ekuqiqmikiicgoss]; } public abstract function ekkycgeasgwaqiwu() : array; }
