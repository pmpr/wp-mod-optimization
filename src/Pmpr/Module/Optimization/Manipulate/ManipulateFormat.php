<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6327197fdd72f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class ManipulateFormat extends BaseClass { public static function ocyiomiukusoicuc(?string $migiiksoiymissge) : ?string { $migiiksoiymissge = self::gokuyqsimauyacke($migiiksoiymissge); if (self::cmaecekuqkwmemms("\117\x50\x54\x5f\103\101\x43\x48\x45\137\104\x4f\116\x54\137\105\116\x43\x4f\104\x45\137\106\111\x4c\x45\116\101\115\x45\x53")) { goto gsusqquicmukegcs; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); iikgiaocummweiga: } ueqsiwuwumoqgsck: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); gsusqquicmukegcs: return untrailingslashit($migiiksoiymissge) . "\57\x69\156\144\x65\x78"; } public static function kcwgwosqkkkkmuks(string $eeamcawaiqocomwy) { $kocecsiyeigoycei = preg_replace_callback("\x25\133\136\72\57\x40\x3f\x26\x3d\43\135\53\45\165\x73\104", static function ($meyiiwcswqmuggyg) { return rawurlencode($meyiiwcswqmuggyg[0]); }, $eeamcawaiqocomwy); $eeamcawaiqocomwy = self::gooqqcmsyseiaikc($kocecsiyeigoycei); $gwgucoaaqcwwciqq = strtolower(ManipulateArray::get("\150\x6f\x73\x74", '')); $mkomwsiykqigmqca = ManipulateArray::get($eeamcawaiqocomwy, "\160\x61\x74\150", ''); $gqgemcmoicmgaqie = ManipulateArray::get($eeamcawaiqocomwy, "\x71\x75\x65\162\171", ''); $aaceqemaqqeckueq = ManipulateArray::get($eeamcawaiqocomwy, "\163\x63\150\145\155\141", ''); $geqceacmoksoayem = ManipulateArray::get($eeamcawaiqocomwy, "\146\x72\141\147\x6d\145\156\x74", ''); $yiasugywggckywoa = (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x6f\x70\x74\x5f\160\x61\x72\x73\145\137\165\162\154"), ["\x68\x6f\x73\x74" => $gwgucoaaqcwwciqq, "\x70\x61\x74\150" => $mkomwsiykqigmqca, "\x73\x63\150\x65\x6d\145" => $aaceqemaqqeckueq, "\x71\165\x65\x72\x79" => $gqgemcmoicmgaqie, "\x66\162\141\x67\x6d\145\x6e\x74" => $geqceacmoksoayem]); return array_filter($yiasugywggckywoa, "\x75\x72\154\144\145\x63\157\144\x65"); } }
