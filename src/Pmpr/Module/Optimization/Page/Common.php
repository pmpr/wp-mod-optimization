<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62d28016e6c23             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Page\Interfaces\CommonInterface; use WP_Post; use WP_Post_Type; class Common extends Container implements CommonInterface { public function okgswumokyoaosow($ccamueccusigaaio) { $yyimiwcuegayoskq = []; $migiiksoiymissge = ''; if ($ccamueccusigaaio instanceof WP_Post) { goto iiiwsgameuomumgw; } if (!$ccamueccusigaaio instanceof WP_Post_Type) { goto agyooskogigyayws; } $migiiksoiymissge = ManipulatePost::mqgeysameoesmuqw($ccamueccusigaaio); $yyimiwcuegayoskq = [self::squoamkioomemiyi => self::mswmgkkakuooukme, self::qescuiwgsyuikume => sprintf("\45\163\x20\55\x20\x25\x73", $ccamueccusigaaio->label, __("\x53\160\145\143\151\x61\154\40\x50\x61\x67\x65\163", PR__MDL__OPTIMIZATION)), self::mgsccwumkcawaqcy => $ccamueccusigaaio->name, self::sauwwsocmukoaayu => $migiiksoiymissge, "\x70\x61\147\145\x5f\164\x79\x70\x65" => sprintf(__("\x25\163\40\x28\x41\x72\143\x68\151\166\x65\51", PR__MDL__OPTIMIZATION), $ccamueccusigaaio->label)]; agyooskogigyayws: goto mcukocaaoyuugoeu; iiiwsgameuomumgw: $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio); $yyimiwcuegayoskq = [self::squoamkioomemiyi => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio), "\x70\141\x67\145\x5f\164\171\160\145" => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio, true)->labels->singular_name, self::qescuiwgsyuikume => ManipulatePost::qcgakseyaikigqco($ccamueccusigaaio), self::mgsccwumkcawaqcy => ManipulatePost::mwikyscisascoeea($ccamueccusigaaio), self::sauwwsocmukoaayu => $migiiksoiymissge]; mcukocaaoyuugoeu: $meqocwsecsywiiqs = ManipulateArray::get($yyimiwcuegayoskq, self::qescuiwgsyuikume, ''); if (!$meqocwsecsywiiqs) { goto scockmiqikwwkqse; } $yyimiwcuegayoskq[self::qescuiwgsyuikume] = ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\x65\146" => $migiiksoiymissge, "\x74\x61\162\x67\x65\x74" => "\137\142\x6c\x61\x6e\x6b", "\163\x74\171\154\145" => "\164\145\170\164\x2d\x64\x65\x63\157\x72\141\x74\x69\157\x6e\x3a\x20\156\x6f\x6e\x65\73"], $meqocwsecsywiiqs)); scockmiqikwwkqse: if (untrailingslashit($migiiksoiymissge)) { goto okycquokqoamsquy; } $yyimiwcuegayoskq = false; okycquokqoamsquy: return $yyimiwcuegayoskq; } public function yoeoaweeseqiyesg(&$uamcoiueqaamsqma = '') : bool { $mkecsaoyggsmwmau = API::symcgieuakksimmu()->kwauokaoasomsimk($uamcoiueqaamsqma); $kigowwqauiumummw = false; if (!is_wp_error($mkecsaoyggsmwmau)) { goto egwgyekaiqomyeaa; } $uamcoiueqaamsqma = $this->gcsweumukyckmgik($mkecsaoyggsmwmau); goto kssuqmsgmaaeqigw; egwgyekaiqomyeaa: if (!($mkecsaoyggsmwmau && isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]))) { goto cgwokqwakqcmiieo; } $kigowwqauiumummw = true; $uamcoiueqaamsqma = __("\x42\x75\x64\x67\145\x74\x20\x75\x70\144\x61\164\145\x64\x20\x73\x75\143\x63\145\163\163\146\165\154\x6c\x79", PR__MDL__OPTIMIZATION); DecoratorOption::update(self::kqgagmgieeucmuik, $mkecsaoyggsmwmau); cgwokqwakqcmiieo: kssuqmsgmaaeqigw: if ($kigowwqauiumummw) { goto uwusswwekqcsisus; } DecoratorOption::delete(self::kqgagmgieeucmuik); uwusswwekqcsisus: return $kigowwqauiumummw; } }
