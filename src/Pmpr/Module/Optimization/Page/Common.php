<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63171273d0496             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Page\Interfaces\CommonInterface; use WP_Post; use WP_Post_Type; class Common extends Container implements CommonInterface { public function okgswumokyoaosow($ccamueccusigaaio) { $yyimiwcuegayoskq = []; $migiiksoiymissge = ''; if ($ccamueccusigaaio instanceof WP_Post) { goto scockmiqikwwkqse; } if (!$ccamueccusigaaio instanceof WP_Post_Type) { goto mcukocaaoyuugoeu; } $migiiksoiymissge = ManipulatePost::mqgeysameoesmuqw($ccamueccusigaaio); $yyimiwcuegayoskq = [self::squoamkioomemiyi => self::mswmgkkakuooukme, self::qescuiwgsyuikume => sprintf("\x25\x73\40\55\40\x25\163", $ccamueccusigaaio->label, __("\x53\160\x65\143\x69\x61\x6c\40\x50\x61\147\145\163", PR__MDL__OPTIMIZATION)), self::mgsccwumkcawaqcy => $ccamueccusigaaio->name, self::sauwwsocmukoaayu => $migiiksoiymissge, "\160\x61\x67\145\x5f\x74\171\x70\145" => sprintf(__("\45\163\x20\50\101\162\143\x68\x69\166\145\x29", PR__MDL__OPTIMIZATION), $ccamueccusigaaio->label)]; mcukocaaoyuugoeu: goto okycquokqoamsquy; scockmiqikwwkqse: $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio); $yyimiwcuegayoskq = [self::squoamkioomemiyi => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio), "\x70\141\x67\145\137\164\171\160\x65" => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio, true)->labels->singular_name, self::qescuiwgsyuikume => ManipulatePost::qcgakseyaikigqco($ccamueccusigaaio), self::mgsccwumkcawaqcy => ManipulatePost::mwikyscisascoeea($ccamueccusigaaio), self::sauwwsocmukoaayu => $migiiksoiymissge]; okycquokqoamsquy: $meqocwsecsywiiqs = ManipulateArray::get($yyimiwcuegayoskq, self::qescuiwgsyuikume, ''); if (!$meqocwsecsywiiqs) { goto cgwokqwakqcmiieo; } $yyimiwcuegayoskq[self::qescuiwgsyuikume] = ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\x72\145\x66" => $migiiksoiymissge, "\x74\141\162\147\x65\x74" => "\137\142\154\x61\156\153", "\x73\x74\x79\154\145" => "\x74\x65\170\x74\x2d\x64\x65\143\157\x72\141\x74\151\x6f\156\x3a\x20\156\x6f\x6e\x65\73"], $meqocwsecsywiiqs)); cgwokqwakqcmiieo: if (untrailingslashit($migiiksoiymissge)) { goto egwgyekaiqomyeaa; } $yyimiwcuegayoskq = false; egwgyekaiqomyeaa: return $yyimiwcuegayoskq; } public function yoeoaweeseqiyesg(&$uamcoiueqaamsqma = '') : bool { $mkecsaoyggsmwmau = API::symcgieuakksimmu()->kwauokaoasomsimk($uamcoiueqaamsqma); $kigowwqauiumummw = false; if (!is_wp_error($mkecsaoyggsmwmau)) { goto uwusswwekqcsisus; } $uamcoiueqaamsqma = $this->gcsweumukyckmgik($mkecsaoyggsmwmau); goto mciumqyyossyiuyk; uwusswwekqcsisus: if (!($mkecsaoyggsmwmau && isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]))) { goto kssuqmsgmaaeqigw; } $kigowwqauiumummw = true; $uamcoiueqaamsqma = __("\x42\x75\144\147\145\x74\40\165\x70\144\141\x74\145\x64\40\163\x75\x63\x63\145\x73\163\146\165\x6c\x6c\171", PR__MDL__OPTIMIZATION); DecoratorOption::update(self::kqgagmgieeucmuik, $mkecsaoyggsmwmau); kssuqmsgmaaeqigw: mciumqyyossyiuyk: if ($kigowwqauiumummw) { goto acaeigkmigikeuyu; } DecoratorOption::delete(self::kqgagmgieeucmuik); acaeigkmigikeuyu: return $kigowwqauiumummw; } }
