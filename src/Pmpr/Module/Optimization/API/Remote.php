<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6654cb65a9906             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Module\Optimization\Interfaces\CommonInterface; class Remote extends Cartridge implements CommonInterface { protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = ["\150\x74\164\160\72\x2f\57\61\x32\67\56\60\x2e\x30\56\x31\x3a\65\60\x30\x30"]; if (!$usmiuwiumyygmucg) { goto coywmiyqgsweuiic; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto ieumumsgyguceusy; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); ieumumsgyguceusy: yssscwioiyygssec: } qcessicwuikwqsis: $this->kiaqywwoysssqgig("\x43\x6f\157\153\151\x65", "\x70\x6d\160\x72\55\143\154\x69\x65\x6e\164\75\x74\162\x75\x65"); parent::__construct(); coywmiyqgsweuiic: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f{$this->gueasuouwqysmomu()}\x2f\x63\150\145\143\153\x2d\152\157\142", [self::kugiewcgiawaeiaq => [self::gouqcwikiiygyasc => $aokagokqyuysuksm]], self::mswoacegomcucaik); $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto wwkgkaecgiwggcck; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[self::eikgweiqgomeisyo])) { goto gygawoqywkukmqee; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto kciouyuaqkyqomam; gygawoqywkukmqee: switch ($sogksuscggsicmac[self::eikgweiqgomeisyo]) { case self::amcogigwsaqssuai: if (isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && $sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto oouoqimaaqcmccay; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto sycygoiaiqqageym; oouoqimaaqcmccay: $iueymcwwscwqkiyq = self::gymusgeumuwomwuy; sycygoiaiqqageym: goto siqagquguiemuoku; case self::uasuowkaguiwoouw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; } ycakugokkqkuqyiu: siqagquguiemuoku: kciouyuaqkyqomam: goto umgaesggesswoaqe; wwkgkaecgiwggcck: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; umgaesggesswoaqe: return [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uiwqcumqkgikqyue => $sogksuscggsicmac[self::uiwqcumqkgikqyue] ?? []]; } }
