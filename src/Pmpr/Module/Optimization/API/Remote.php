<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665872dfe6b03             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Module\Optimization\Interfaces\CommonInterface; class Remote extends Cartridge implements CommonInterface { protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = ["\150\164\164\160\72\57\57\x31\62\67\x2e\x30\x2e\60\x2e\x31\72\x35\60\60\60"]; if (!$usmiuwiumyygmucg) { goto coywmiyqgsweuiic; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto ieumumsgyguceusy; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); ieumumsgyguceusy: yssscwioiyygssec: } qcessicwuikwqsis: $this->kiaqywwoysssqgig("\x43\x6f\x6f\x6b\x69\145", "\160\x6d\x70\x72\x2d\143\x6c\151\145\156\164\x3d\164\x72\x75\145"); parent::__construct(); coywmiyqgsweuiic: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f{$this->gueasuouwqysmomu()}\x2f\143\150\145\143\x6b\x2d\152\157\142", [self::kugiewcgiawaeiaq => [self::gouqcwikiiygyasc => $aokagokqyuysuksm]], self::mswoacegomcucaik); $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto wwkgkaecgiwggcck; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[self::eikgweiqgomeisyo])) { goto gygawoqywkukmqee; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto kciouyuaqkyqomam; gygawoqywkukmqee: switch ($sogksuscggsicmac[self::eikgweiqgomeisyo]) { case self::amcogigwsaqssuai: if (isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && $sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto oouoqimaaqcmccay; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto sycygoiaiqqageym; oouoqimaaqcmccay: $iueymcwwscwqkiyq = self::gymusgeumuwomwuy; sycygoiaiqqageym: goto siqagquguiemuoku; case self::uasuowkaguiwoouw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; } ycakugokkqkuqyiu: siqagquguiemuoku: kciouyuaqkyqomam: goto umgaesggesswoaqe; wwkgkaecgiwggcck: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; umgaesggesswoaqe: return [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uiwqcumqkgikqyue => $sogksuscggsicmac[self::uiwqcumqkgikqyue] ?? []]; } }
