<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e645a0a3356             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class ManipulateFormat extends BaseClass { public static function kcwgwosqkkkkmuks(string $eeamcawaiqocomwy) { $kocecsiyeigoycei = preg_replace_callback("\45\133\136\72\x2f\x40\77\x26\x3d\43\135\x2b\x25\165\163\104", static function ($meyiiwcswqmuggyg) { return rawurlencode($meyiiwcswqmuggyg[0]); }, $eeamcawaiqocomwy); $eeamcawaiqocomwy = self::gooqqcmsyseiaikc($kocecsiyeigoycei); $gwgucoaaqcwwciqq = strtolower(ManipulateArray::get("\x68\x6f\x73\x74", '')); $mkomwsiykqigmqca = ManipulateArray::get($eeamcawaiqocomwy, "\160\x61\x74\x68", ''); $gqgemcmoicmgaqie = ManipulateArray::get($eeamcawaiqocomwy, "\161\x75\x65\162\171", ''); $aaceqemaqqeckueq = ManipulateArray::get($eeamcawaiqocomwy, "\x73\x63\x68\x65\155\141", ''); $geqceacmoksoayem = ManipulateArray::get($eeamcawaiqocomwy, "\x66\x72\x61\147\155\x65\156\164", ''); $yiasugywggckywoa = (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x6f\160\164\137\x70\141\162\163\x65\x5f\x75\162\154"), ["\150\x6f\x73\164" => $gwgucoaaqcwwciqq, "\x70\x61\164\x68" => $mkomwsiykqigmqca, "\x73\x63\150\145\x6d\145" => $aaceqemaqqeckueq, "\161\x75\145\162\x79" => $gqgemcmoicmgaqie, "\146\x72\x61\147\x6d\145\x6e\x74" => $geqceacmoksoayem]); return array_filter($yiasugywggckywoa, "\x75\162\x6c\x64\x65\x63\157\x64\x65"); } }
