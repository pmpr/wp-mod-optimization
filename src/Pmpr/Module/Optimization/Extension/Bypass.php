<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6321c656ef420             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Extension; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\Optimization\Bypass\Setting as BypassSetting; abstract class Bypass extends Common { protected string $name = ''; public function aakmagwggmkoiiyu() : string { return $this->name; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\x69\156\137\x69\156\x69\x74", [$this, "\x71\161\157\x63\141\143\141\155\151\x69\151\167\165\167\x69\x73"]); } public function qqocacamiiiwuwis() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto ekmogkwmcqsykgsq; } $omqquekswieeogws = "\157\160\164\137\141\x75\164\x6f\137\142\x79\x70\x61\163\x73\137{$this->aakmagwggmkoiiyu()}\x5f\141\x64\x64\145\x64"; $oakymgscysyssksa = DecoratorOption::get($omqquekswieeogws, false); if (!(!$oakymgscysyssksa && ($uescmseksquycukc = $this->ekkycgeasgwaqiwu()))) { goto aiwygewkmigcwusw; } $uuycqiugegwuigqc = $this->weysguygiseoukqw(BypassSetting::koqiyueekmymguyq, []); $this->kmuweyayaqoeqiyw()::eiaacegkigqiwawg(BypassSetting::koqiyueekmymguyq, array_merge($uuycqiugegwuigqc, $uescmseksquycukc), false); DecoratorOption::update($omqquekswieeogws, 1); aiwygewkmigcwusw: ekmogkwmcqsykgsq: } public function wauacaemuqggkyue($oysoyeaucuawyaky, string $sqeykgyoooqysmca) : array { $yqisouqmuqkgmwuy = [self::squoamkioomemiyi => BypassSetting::kowaogweeucieykc, BypassSetting::ymycaemoukukoqoe => $sqeykgyoooqysmca]; $ccamueccusigaaio = self::ucoiewcoucauqwko; if (!in_array($sqeykgyoooqysmca, ManipulatePost::mwoyqeeigwqoamiw(), true)) { goto ksoawacwkgasqgmk; } $ccamueccusigaaio = self::qgmuskygocwmouos; ksoawacwkgasqgmk: if (is_array($oysoyeaucuawyaky)) { goto yqeqouqemksasmqc; } $oysoyeaucuawyaky = [$oysoyeaucuawyaky]; yqeqouqemksasmqc: $yqisouqmuqkgmwuy[$ccamueccusigaaio] = $oysoyeaucuawyaky; return $yqisouqmuqkgmwuy; } public function kcmqkuugeukkkiug(string $ekuqiqmikiicgoss) : array { return [self::squoamkioomemiyi => BypassSetting::qeesogequqsoiymo, BypassSetting::kcwcmkwmmwqimwyk => $ekuqiqmikiicgoss]; } public abstract function ekkycgeasgwaqiwu() : array; }
