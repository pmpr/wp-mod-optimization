<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d55de5ebbe6             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Exception; use FilesystemIterator; use IteratorIterator; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Pmpr\Package\Optimization\Manipulate\Manipulate as BaseClass; use RegexIterator; class Manipulate extends BaseClass { public static function gskqygiceygcguyo() { $mkomwsiykqigmqca = self::cmaecekuqkwmemms("\x4f\120\124\x49\x4d\x49\x5a\x41\124\111\x4f\116\x5f\103\101\103\110\x45\137\120\101\x54\x48", false); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if ($iiaumsgauuyeqksw->exists($mkomwsiykqigmqca)) { goto meiqywmwuoogckss; } $iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca); meiqywmwuoogckss: if (!is_string($mkomwsiykqigmqca)) { goto oyeygeykqwcqoeic; } $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca); oyeygeykqwcqoeic: return $mkomwsiykqigmqca; } public static function ymqgwsmwqswgsgeg() { global $is_apache; $skacuygeqykiwiwy = self::gskqygiceygcguyo(); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if ($iiaumsgauuyeqksw->asysewkmisimumay($skacuygeqykiwiwy)) { goto eomcuogskessyicy; } $iiaumsgauuyeqksw->mkdir($skacuygeqykiwiwy); eomcuogskessyicy: if ($iiaumsgauuyeqksw->mecmkmogggamegic("{$skacuygeqykiwiwy}\x2f\151\156\144\x65\170\56\x68\164\155\154")) { goto isaacywgkascmcsw; } $iiaumsgauuyeqksw->touch("{$skacuygeqykiwiwy}\x2f\x69\x6e\x64\145\170\56\x68\x74\155\x6c"); isaacywgkascmcsw: if (!$is_apache) { goto iicaisyekagswmey; } $kkeqqamysgasaeyi = "{$skacuygeqykiwiwy}\x2f\56\150\164\141\x63\143\145\163\163"; if ($iiaumsgauuyeqksw->mecmkmogggamegic($kkeqqamysgasaeyi)) { goto quiguyyimiqeqcwa; } $iiaumsgauuyeqksw->touch($kkeqqamysgasaeyi); $iiaumsgauuyeqksw->ockyokocuwwmkesa($kkeqqamysgasaeyi, "\74\x49\146\x4d\x6f\144\x75\x6c\x65\x20\155\157\x64\x5f\141\x75\164\157\x69\156\x64\x65\x78\56\x63\x3e\12\x4f\160\164\x69\157\x6e\163\40\x2d\111\156\x64\x65\x78\x65\163\xa\74\57\x49\x66\x4d\x6f\144\165\x6c\x65\x3e"); quiguyyimiqeqcwa: iicaisyekagswmey: } public static function gqguucgwsqasamke(string $ykgaiqusyiekqqec, $skacuygeqykiwiwy = '', $iuomscuiswckwcoe = false) { static $eewgemuwouukmwgk = []; if (!(true === $iuomscuiswckwcoe)) { goto ogwwasqkaageiwwi; } $eewgemuwouukmwgk = []; return []; ogwwasqkaageiwwi: if (!isset($eewgemuwouukmwgk[$ykgaiqusyiekqqec])) { goto sosqgaswegsomgkw; } return $eewgemuwouukmwgk[$ykgaiqusyiekqqec]; sosqgaswegsomgkw: if (!empty($skacuygeqykiwiwy)) { goto eiegguecasykwmyq; } $skacuygeqykiwiwy = self::gskqygiceygcguyo(); eiegguecasykwmyq: try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($skacuygeqykiwiwy)); } catch (Exception $iewosgggaueeyymg) { return []; } $ucccueqywigcukcc = sprintf("\x2f\x25\61\44\x73\45\x32\x24\x73\50\x2e\52\51\57\151", ManipulateFile::cgwcgscqeqauaagi($skacuygeqykiwiwy, true), $ykgaiqusyiekqqec); try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); } catch (Exception $iewosgggaueeyymg) { return []; } $eewgemuwouukmwgk[$ykgaiqusyiekqqec] = []; foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$ykgaiqusyiekqqec][] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); iaywwgssaoecwmeg: } qiiqceousoicgeee: return $eewgemuwouukmwgk[$ykgaiqusyiekqqec]; } }
