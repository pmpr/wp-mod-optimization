<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62f7cb380fe9d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class ManipulateFormat extends BaseClass { public static function kcwgwosqkkkkmuks(string $eeamcawaiqocomwy) { $kocecsiyeigoycei = preg_replace_callback("\x25\x5b\136\x3a\57\x40\x3f\x26\75\x23\135\x2b\45\x75\x73\x44", static function ($meyiiwcswqmuggyg) { return rawurlencode($meyiiwcswqmuggyg[0]); }, $eeamcawaiqocomwy); $eeamcawaiqocomwy = self::gooqqcmsyseiaikc($kocecsiyeigoycei); $gwgucoaaqcwwciqq = strtolower(ManipulateArray::get("\x68\157\x73\x74", '')); $mkomwsiykqigmqca = ManipulateArray::get($eeamcawaiqocomwy, "\x70\141\164\x68", ''); $gqgemcmoicmgaqie = ManipulateArray::get($eeamcawaiqocomwy, "\161\165\x65\162\171", ''); $aaceqemaqqeckueq = ManipulateArray::get($eeamcawaiqocomwy, "\163\x63\150\x65\x6d\141", ''); $geqceacmoksoayem = ManipulateArray::get($eeamcawaiqocomwy, "\x66\162\141\x67\x6d\x65\156\164", ''); $yiasugywggckywoa = (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x6f\x70\x74\x5f\160\141\x72\x73\x65\137\x75\162\154"), ["\150\x6f\163\x74" => $gwgucoaaqcwwciqq, "\x70\x61\x74\150" => $mkomwsiykqigmqca, "\x73\143\150\x65\155\145" => $aaceqemaqqeckueq, "\x71\x75\145\x72\171" => $gqgemcmoicmgaqie, "\146\x72\141\x67\155\145\x6e\x74" => $geqceacmoksoayem]); return array_filter($yiasugywggckywoa, "\165\x72\154\x64\145\143\x6f\x64\x65"); } }
