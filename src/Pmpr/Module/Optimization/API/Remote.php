<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66696e7e43c2d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Module\Optimization\Interfaces\CommonInterface; class Remote extends Cartridge implements CommonInterface { protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = ["\150\x74\164\x70\72\x2f\x2f\x31\62\67\56\x30\56\x30\56\x31\72\x35\60\60\x30"]; if (!$usmiuwiumyygmucg) { goto ycakugokkqkuqyiu; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto siqagquguiemuoku; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); siqagquguiemuoku: coywmiyqgsweuiic: } ieumumsgyguceusy: $this->kiaqywwoysssqgig("\x43\157\x6f\x6b\x69\x65", "\x70\x6d\160\162\55\x63\154\151\145\x6e\x74\x3d\164\162\x75\145"); parent::__construct(); ycakugokkqkuqyiu: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\57{$this->gueasuouwqysmomu()}\x2f\143\x68\145\143\x6b\x2d\152\157\142", [self::kugiewcgiawaeiaq => [self::gouqcwikiiygyasc => $aokagokqyuysuksm]], self::mswoacegomcucaik); $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto qsygcycwieukkgwc; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[self::eikgweiqgomeisyo])) { goto wwkgkaecgiwggcck; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto umgaesggesswoaqe; wwkgkaecgiwggcck: switch ($sogksuscggsicmac[self::eikgweiqgomeisyo]) { case self::amcogigwsaqssuai: if (isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && $sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto gygawoqywkukmqee; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto kciouyuaqkyqomam; gygawoqywkukmqee: $iueymcwwscwqkiyq = self::gymusgeumuwomwuy; kciouyuaqkyqomam: goto oouoqimaaqcmccay; case self::uasuowkaguiwoouw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; } sycygoiaiqqageym: oouoqimaaqcmccay: umgaesggesswoaqe: goto kiwqkcaekqqyuegq; qsygcycwieukkgwc: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; kiwqkcaekqqyuegq: return [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uiwqcumqkgikqyue => $sogksuscggsicmac[self::uiwqcumqkgikqyue] ?? []]; } }
