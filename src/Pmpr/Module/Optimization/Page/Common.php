<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624eb0824ce5d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Page\Interfaces\CommonInterface; use WP_Post; use WP_Post_Type; class Common extends Container implements CommonInterface { public function okgswumokyoaosow($ccamueccusigaaio) { $yyimiwcuegayoskq = []; $migiiksoiymissge = ''; if ($ccamueccusigaaio instanceof WP_Post) { goto oaociaioauummsey; } if (!$ccamueccusigaaio instanceof WP_Post_Type) { goto akoweomooyuwamow; } $migiiksoiymissge = ManipulatePost::mqgeysameoesmuqw($ccamueccusigaaio); $yyimiwcuegayoskq = [self::squoamkioomemiyi => self::mswmgkkakuooukme, self::qescuiwgsyuikume => sprintf("\45\163\40\x2d\x20\x25\163", $ccamueccusigaaio->label, __("\x53\x70\145\143\151\141\154\40\120\141\147\x65\163", PR__MDL__OPTIMIZATION)), self::mgsccwumkcawaqcy => $ccamueccusigaaio->name, self::sauwwsocmukoaayu => $migiiksoiymissge, "\160\141\x67\145\137\164\x79\160\x65" => sprintf(__("\x25\x73\40\50\x41\x72\143\150\151\x76\x65\x29", PR__MDL__OPTIMIZATION), $ccamueccusigaaio->label)]; akoweomooyuwamow: goto cueuscqkicwwicei; oaociaioauummsey: $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio); $yyimiwcuegayoskq = [self::squoamkioomemiyi => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio), "\160\141\x67\145\137\164\171\x70\x65" => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio, true)->labels->singular_name, self::qescuiwgsyuikume => ManipulatePost::qcgakseyaikigqco($ccamueccusigaaio), self::mgsccwumkcawaqcy => ManipulatePost::mwikyscisascoeea($ccamueccusigaaio), self::sauwwsocmukoaayu => $migiiksoiymissge]; cueuscqkicwwicei: $meqocwsecsywiiqs = ManipulateArray::get($yyimiwcuegayoskq, self::qescuiwgsyuikume, ''); if (!$meqocwsecsywiiqs) { goto gcecamucuogcciig; } $yyimiwcuegayoskq[self::qescuiwgsyuikume] = ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\x65\146" => $migiiksoiymissge, "\164\141\162\147\x65\x74" => "\x5f\142\x6c\141\x6e\153", "\163\164\x79\154\x65" => "\x74\145\170\x74\55\144\x65\x63\157\162\x61\164\x69\157\156\72\40\156\157\156\145\73"], $meqocwsecsywiiqs)); gcecamucuogcciig: if (untrailingslashit($migiiksoiymissge)) { goto suscosoukqeyyqgs; } $yyimiwcuegayoskq = false; suscosoukqeyyqgs: return $yyimiwcuegayoskq; } public function yoeoaweeseqiyesg(&$uamcoiueqaamsqma = '') : bool { $mkecsaoyggsmwmau = API::symcgieuakksimmu()->kwauokaoasomsimk($uamcoiueqaamsqma); $kigowwqauiumummw = false; if (!is_wp_error($mkecsaoyggsmwmau)) { goto eysuawiooiswaseq; } $uamcoiueqaamsqma = $this->gcsweumukyckmgik($mkecsaoyggsmwmau); goto iecqkqoiqimmisyw; eysuawiooiswaseq: if (!($mkecsaoyggsmwmau && isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]))) { goto kiewcwsykccgocuc; } $kigowwqauiumummw = true; $uamcoiueqaamsqma = __("\x42\165\144\147\145\x74\40\x75\x70\144\x61\164\145\x64\x20\x73\x75\x63\x63\x65\x73\163\x66\165\x6c\x6c\x79", PR__MDL__OPTIMIZATION); DecoratorOption::update(self::kqgagmgieeucmuik, $mkecsaoyggsmwmau); kiewcwsykccgocuc: iecqkqoiqimmisyw: if ($kigowwqauiumummw) { goto eogomkswkaqwyycm; } DecoratorOption::delete(self::kqgagmgieeucmuik); eogomkswkaqwyycm: return $kigowwqauiumummw; } }
