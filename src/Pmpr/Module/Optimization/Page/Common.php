<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c1ef6c8776             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Page\Interfaces\CommonInterface; use WP_Post; use WP_Post_Type; class Common extends Container implements CommonInterface { public function okgswumokyoaosow($ccamueccusigaaio) { $yyimiwcuegayoskq = []; $migiiksoiymissge = ''; if ($ccamueccusigaaio instanceof WP_Post) { goto kiewcwsykccgocuc; } if (!$ccamueccusigaaio instanceof WP_Post_Type) { goto suscosoukqeyyqgs; } $migiiksoiymissge = ManipulatePost::mqgeysameoesmuqw($ccamueccusigaaio); $yyimiwcuegayoskq = [self::squoamkioomemiyi => self::mswmgkkakuooukme, self::qescuiwgsyuikume => sprintf("\x25\163\40\55\40\x25\x73", $ccamueccusigaaio->label, __("\x53\160\145\143\151\141\x6c\x20\120\141\x67\145\x73", PR__MDL__OPTIMIZATION)), self::mgsccwumkcawaqcy => $ccamueccusigaaio->name, self::sauwwsocmukoaayu => $migiiksoiymissge, "\160\x61\147\x65\x5f\x74\171\x70\x65" => sprintf(__("\x25\163\x20\x28\101\162\143\150\151\166\145\51", PR__MDL__OPTIMIZATION), $ccamueccusigaaio->label)]; suscosoukqeyyqgs: goto eysuawiooiswaseq; kiewcwsykccgocuc: $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio); $yyimiwcuegayoskq = [self::squoamkioomemiyi => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio), "\160\141\x67\x65\137\x74\171\160\x65" => ManipulatePost::gueasuouwqysmomu($ccamueccusigaaio, true)->labels->singular_name, self::qescuiwgsyuikume => ManipulatePost::qcgakseyaikigqco($ccamueccusigaaio), self::mgsccwumkcawaqcy => ManipulatePost::mwikyscisascoeea($ccamueccusigaaio), self::sauwwsocmukoaayu => $migiiksoiymissge]; eysuawiooiswaseq: $meqocwsecsywiiqs = ManipulateArray::get($yyimiwcuegayoskq, self::qescuiwgsyuikume, ''); if (!$meqocwsecsywiiqs) { goto iecqkqoiqimmisyw; } $yyimiwcuegayoskq[self::qescuiwgsyuikume] = ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\x72\x65\x66" => $migiiksoiymissge, "\x74\141\162\x67\145\x74" => "\137\142\x6c\141\156\153", "\x73\x74\x79\154\145" => "\x74\145\170\164\55\144\145\143\157\162\141\x74\151\x6f\156\72\x20\156\157\156\145\73"], $meqocwsecsywiiqs)); iecqkqoiqimmisyw: if (untrailingslashit($migiiksoiymissge)) { goto eogomkswkaqwyycm; } $yyimiwcuegayoskq = false; eogomkswkaqwyycm: return $yyimiwcuegayoskq; } public function yoeoaweeseqiyesg(&$uamcoiueqaamsqma = '') : bool { $mkecsaoyggsmwmau = API::symcgieuakksimmu()->kwauokaoasomsimk($uamcoiueqaamsqma); $kigowwqauiumummw = false; if (!is_wp_error($mkecsaoyggsmwmau)) { goto euuekiyqwkowiees; } $uamcoiueqaamsqma = $this->gcsweumukyckmgik($mkecsaoyggsmwmau); goto assoyoeukmqiucyq; euuekiyqwkowiees: if (!($mkecsaoyggsmwmau && isset($mkecsaoyggsmwmau[self::qiyqwyiiwykeccmo], $mkecsaoyggsmwmau[self::uikygkewwaiowmwe]))) { goto egiauwuekseyeaeq; } $kigowwqauiumummw = true; $uamcoiueqaamsqma = __("\x42\x75\x64\x67\145\x74\x20\x75\160\x64\x61\x74\145\x64\40\163\165\143\143\145\x73\x73\146\x75\x6c\x6c\171", PR__MDL__OPTIMIZATION); DecoratorOption::update(self::kqgagmgieeucmuik, $mkecsaoyggsmwmau); egiauwuekseyeaeq: assoyoeukmqiucyq: if ($kigowwqauiumummw) { goto kikkkoqiumqoeiyy; } DecoratorOption::delete(self::kqgagmgieeucmuik); kikkkoqiumqoeiyy: return $kigowwqauiumummw; } }