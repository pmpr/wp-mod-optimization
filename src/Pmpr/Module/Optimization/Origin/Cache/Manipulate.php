<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62fab2e386f55             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Exception; use FilesystemIterator; use IteratorIterator; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Pmpr\Module\Optimization\Manipulate\Manipulate as BaseClass; use RegexIterator; class Manipulate extends BaseClass { public static function gskqygiceygcguyo() { $mkomwsiykqigmqca = self::cmaecekuqkwmemms("\x4f\120\x54\x49\x4d\x49\132\101\x54\x49\117\x4e\137\x43\x41\103\110\105\x5f\120\101\124\x48", false); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if ($iiaumsgauuyeqksw->exists($mkomwsiykqigmqca)) { goto mosuacsuaasssciu; } $iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca); mosuacsuaasssciu: if (!is_string($mkomwsiykqigmqca)) { goto qksckewucmosemuo; } $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca); qksckewucmosemuo: return $mkomwsiykqigmqca; } public static function ymqgwsmwqswgsgeg() { global $is_apache; $skacuygeqykiwiwy = self::gskqygiceygcguyo(); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if ($iiaumsgauuyeqksw->asysewkmisimumay($skacuygeqykiwiwy)) { goto kmooekeyemqgucci; } $iiaumsgauuyeqksw->mkdir($skacuygeqykiwiwy); kmooekeyemqgucci: if ($iiaumsgauuyeqksw->mecmkmogggamegic("{$skacuygeqykiwiwy}\57\x69\x6e\x64\145\170\56\x68\164\x6d\x6c")) { goto skuuyysooocugyww; } $iiaumsgauuyeqksw->touch("{$skacuygeqykiwiwy}\57\151\x6e\144\x65\x78\x2e\x68\164\155\154"); skuuyysooocugyww: if (!$is_apache) { goto mkgmaguyswskyioa; } $kkeqqamysgasaeyi = "{$skacuygeqykiwiwy}\57\x2e\150\164\x61\143\143\x65\x73\163"; if ($iiaumsgauuyeqksw->mecmkmogggamegic($kkeqqamysgasaeyi)) { goto cmmusgkieoqyymgs; } $iiaumsgauuyeqksw->touch($kkeqqamysgasaeyi); $iiaumsgauuyeqksw->ockyokocuwwmkesa($kkeqqamysgasaeyi, "\x3c\x49\146\115\157\x64\x75\154\145\40\x6d\x6f\x64\x5f\141\165\164\157\x69\156\144\145\170\56\143\x3e\xa\x4f\160\164\x69\x6f\x6e\163\x20\55\111\x6e\x64\145\170\145\x73\12\74\x2f\x49\146\115\157\x64\165\x6c\x65\x3e"); cmmusgkieoqyymgs: mkgmaguyswskyioa: } public static function gqguucgwsqasamke(string $ykgaiqusyiekqqec, $skacuygeqykiwiwy = '', $iuomscuiswckwcoe = false) { static $eewgemuwouukmwgk = []; if (!(true === $iuomscuiswckwcoe)) { goto skwusmoyomgqkimm; } $eewgemuwouukmwgk = []; return []; skwusmoyomgqkimm: if (!isset($eewgemuwouukmwgk[$ykgaiqusyiekqqec])) { goto usyckeewsgwaysam; } return $eewgemuwouukmwgk[$ykgaiqusyiekqqec]; usyckeewsgwaysam: if (!empty($skacuygeqykiwiwy)) { goto gicuuwuuuwumyooa; } $skacuygeqykiwiwy = self::gskqygiceygcguyo(); gicuuwuuuwumyooa: try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($skacuygeqykiwiwy)); } catch (Exception $iewosgggaueeyymg) { return []; } $ucccueqywigcukcc = sprintf("\57\x25\61\44\163\x25\x32\44\163\x28\x2e\52\51\57\151", ManipulateFile::cgwcgscqeqauaagi($skacuygeqykiwiwy, true), $ykgaiqusyiekqqec); try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); } catch (Exception $iewosgggaueeyymg) { return []; } $eewgemuwouukmwgk[$ykgaiqusyiekqqec] = []; foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$ykgaiqusyiekqqec][] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); cysgqimowcqoqqsc: } kakkuyeccaacewyo: return $eewgemuwouukmwgk[$ykgaiqusyiekqqec]; } }
