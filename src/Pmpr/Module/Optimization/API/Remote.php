<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6634ff5a86835             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Module\Optimization\Interfaces\CommonInterface; class Remote extends Cartridge implements CommonInterface { protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = ["\x68\x74\x74\160\72\x2f\x2f\61\62\67\x2e\60\56\x30\x2e\61\72\x35\60\x30\x30"]; if (!$usmiuwiumyygmucg) { goto scockmiqikwwkqse; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto mcukocaaoyuugoeu; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); mcukocaaoyuugoeu: iiiwsgameuomumgw: } agyooskogigyayws: $this->kiaqywwoysssqgig("\103\157\x6f\x6b\x69\x65", "\160\155\x70\162\x2d\x63\154\151\x65\x6e\164\75\x74\162\x75\145"); parent::__construct(); scockmiqikwwkqse: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f{$this->gueasuouwqysmomu()}\57\143\x68\145\143\153\55\152\x6f\142", [self::kugiewcgiawaeiaq => [self::gouqcwikiiygyasc => $aokagokqyuysuksm]], self::mswoacegomcucaik); $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto acaeigkmigikeuyu; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[self::eikgweiqgomeisyo])) { goto uwusswwekqcsisus; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto mciumqyyossyiuyk; uwusswwekqcsisus: switch ($sogksuscggsicmac[self::eikgweiqgomeisyo]) { case self::amcogigwsaqssuai: if (isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && $sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto egwgyekaiqomyeaa; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto kssuqmsgmaaeqigw; egwgyekaiqomyeaa: $iueymcwwscwqkiyq = self::gymusgeumuwomwuy; kssuqmsgmaaeqigw: goto okycquokqoamsquy; case self::uasuowkaguiwoouw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; } cgwokqwakqcmiieo: okycquokqoamsquy: mciumqyyossyiuyk: goto kqyeukywmgismyaq; acaeigkmigikeuyu: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; kqyeukywmgismyaq: return [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uiwqcumqkgikqyue => $sogksuscggsicmac[self::uiwqcumqkgikqyue] ?? []]; } }
