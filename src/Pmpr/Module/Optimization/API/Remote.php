<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665dbcb8a031d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Module\Optimization\Interfaces\CommonInterface; class Remote extends Cartridge implements CommonInterface { protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = ["\x68\164\x74\160\72\x2f\x2f\61\62\67\56\x30\x2e\60\x2e\x31\x3a\65\60\x30\x30"]; if (!$usmiuwiumyygmucg) { goto coywmiyqgsweuiic; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto ieumumsgyguceusy; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); ieumumsgyguceusy: yssscwioiyygssec: } qcessicwuikwqsis: $this->kiaqywwoysssqgig("\x43\x6f\157\153\151\x65", "\x70\x6d\x70\x72\x2d\143\154\151\145\156\164\75\164\x72\165\145"); parent::__construct(); coywmiyqgsweuiic: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\57{$this->gueasuouwqysmomu()}\57\x63\150\x65\143\x6b\x2d\x6a\x6f\x62", [self::kugiewcgiawaeiaq => [self::gouqcwikiiygyasc => $aokagokqyuysuksm]], self::mswoacegomcucaik); $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto wwkgkaecgiwggcck; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[self::eikgweiqgomeisyo])) { goto gygawoqywkukmqee; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto kciouyuaqkyqomam; gygawoqywkukmqee: switch ($sogksuscggsicmac[self::eikgweiqgomeisyo]) { case self::amcogigwsaqssuai: if (isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && $sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto oouoqimaaqcmccay; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto sycygoiaiqqageym; oouoqimaaqcmccay: $iueymcwwscwqkiyq = self::gymusgeumuwomwuy; sycygoiaiqqageym: goto siqagquguiemuoku; case self::uasuowkaguiwoouw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; } ycakugokkqkuqyiu: siqagquguiemuoku: kciouyuaqkyqomam: goto umgaesggesswoaqe; wwkgkaecgiwggcck: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; umgaesggesswoaqe: return [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uiwqcumqkgikqyue => $sogksuscggsicmac[self::uiwqcumqkgikqyue] ?? []]; } }
