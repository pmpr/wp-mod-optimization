<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665f4289276f4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Module\Optimization\Interfaces\CommonInterface; class Remote extends Cartridge implements CommonInterface { protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = ["\x68\164\164\160\72\57\x2f\x31\x32\x37\x2e\x30\56\x30\56\61\x3a\x35\x30\60\x30"]; if (!$usmiuwiumyygmucg) { goto coywmiyqgsweuiic; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto ieumumsgyguceusy; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); ieumumsgyguceusy: yssscwioiyygssec: } qcessicwuikwqsis: $this->kiaqywwoysssqgig("\103\x6f\157\153\x69\145", "\x70\155\160\x72\x2d\143\x6c\x69\x65\156\164\x3d\x74\162\x75\x65"); parent::__construct(); coywmiyqgsweuiic: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\57{$this->gueasuouwqysmomu()}\x2f\x63\x68\145\x63\153\55\152\x6f\142", [self::kugiewcgiawaeiaq => [self::gouqcwikiiygyasc => $aokagokqyuysuksm]], self::mswoacegomcucaik); $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto wwkgkaecgiwggcck; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[self::eikgweiqgomeisyo])) { goto gygawoqywkukmqee; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto kciouyuaqkyqomam; gygawoqywkukmqee: switch ($sogksuscggsicmac[self::eikgweiqgomeisyo]) { case self::amcogigwsaqssuai: if (isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && $sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto oouoqimaaqcmccay; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto sycygoiaiqqageym; oouoqimaaqcmccay: $iueymcwwscwqkiyq = self::gymusgeumuwomwuy; sycygoiaiqqageym: goto siqagquguiemuoku; case self::uasuowkaguiwoouw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; } ycakugokkqkuqyiu: siqagquguiemuoku: kciouyuaqkyqomam: goto umgaesggesswoaqe; wwkgkaecgiwggcck: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; umgaesggesswoaqe: return [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uiwqcumqkgikqyue => $sogksuscggsicmac[self::uiwqcumqkgikqyue] ?? []]; } }
