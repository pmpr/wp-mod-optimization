<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64202c1126f08             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Page\Interfaces\CommonInterface; use WP_Post; use WP_Post_Type; class Common extends Container implements CommonInterface { public function okgswumokyoaosow($ccamueccusigaaio) { $yyimiwcuegayoskq = []; $migiiksoiymissge = ''; if ($ccamueccusigaaio instanceof WP_Post) { goto mciumqyyossyiuyk; } if (!$ccamueccusigaaio instanceof WP_Post_Type) { goto uwusswwekqcsisus; } $migiiksoiymissge = ManipulatePost::mqgeysameoesmuqw($ccamueccusigaaio); $yyimiwcuegayoskq = [self::squoamkioomemiyi => self::mswmgkkakuooukme, self::qescuiwgsyuikume => sprintf("\45\163\x20\x2d\40\45\x73", $ccamueccusigaaio->label, __("\x53\x70\x65\143\x69\141\x6c\x20\x50\x61\147\x65\x73", PR__MDL__OPTIMIZATION)), self::mgsccwumkcawaqcy => $ccamueccusigaaio->name, self::sauwwsocmukoaayu => $migiiksoiymissge, "\x70\x61\x67\145\137\x74\171\x70\x65" => sprintf(__("\x25\163\40\50\101\x72\x63\150\151\x76\x65\x29", PR__MDL__OPTIMIZATION), $ccamueccusigaaio->label)]; uwusswwekqcsisus: goto acaeigkmigikeuyu; mciumqyyossyiuyk: $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio); $yyimiwcuegayoskq = [self::squoamkioomemiyi => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio), "\x70\141\x67\x65\137\x74\171\160\x65" => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio, true)->labels->singular_name, self::qescuiwgsyuikume => ManipulatePost::qcgakseyaikigqco($ccamueccusigaaio), self::mgsccwumkcawaqcy => ManipulatePost::mwikyscisascoeea($ccamueccusigaaio), self::sauwwsocmukoaayu => $migiiksoiymissge]; acaeigkmigikeuyu: $meqocwsecsywiiqs = ManipulateArray::get($yyimiwcuegayoskq, self::qescuiwgsyuikume, ''); if (!$meqocwsecsywiiqs) { goto kqyeukywmgismyaq; } $yyimiwcuegayoskq[self::qescuiwgsyuikume] = ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\x72\x65\146" => $migiiksoiymissge, "\x74\x61\162\147\145\x74" => "\137\142\x6c\141\x6e\x6b", "\163\164\171\154\x65" => "\x74\145\170\164\x2d\144\x65\143\x6f\x72\x61\x74\x69\x6f\156\72\40\156\157\156\145\73"], $meqocwsecsywiiqs)); kqyeukywmgismyaq: if (untrailingslashit($migiiksoiymissge)) { goto mukwsuuuqcgesmwc; } $yyimiwcuegayoskq = false; mukwsuuuqcgesmwc: return $yyimiwcuegayoskq; } public function yoeoaweeseqiyesg(&$uamcoiueqaamsqma = '') : bool { $mkecsaoyggsmwmau = API::symcgieuakksimmu()->kwauokaoasomsimk($uamcoiueqaamsqma); $kigowwqauiumummw = false; if (!is_wp_error($mkecsaoyggsmwmau)) { goto omgcsmsikaggaooc; } $uamcoiueqaamsqma = $this->gcsweumukyckmgik($mkecsaoyggsmwmau); goto wykuosegisygosiq; omgcsmsikaggaooc: if (!($mkecsaoyggsmwmau && isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]))) { goto cqeoguiqiymkyweo; } $kigowwqauiumummw = true; $uamcoiueqaamsqma = __("\x42\165\144\147\145\x74\x20\165\160\144\x61\164\x65\144\40\163\165\143\x63\x65\x73\x73\x66\165\x6c\x6c\171", PR__MDL__OPTIMIZATION); DecoratorOption::update(self::kqgagmgieeucmuik, $mkecsaoyggsmwmau); cqeoguiqiymkyweo: wykuosegisygosiq: if ($kigowwqauiumummw) { goto ugikgkwuwmgymgus; } DecoratorOption::delete(self::kqgagmgieeucmuik); ugikgkwuwmgymgus: return $kigowwqauiumummw; } }
