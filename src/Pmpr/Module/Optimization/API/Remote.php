<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6635076d1df7d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Module\Optimization\Interfaces\CommonInterface; class Remote extends Cartridge implements CommonInterface { protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = ["\150\164\x74\160\x3a\57\57\61\62\x37\x2e\60\x2e\x30\56\61\x3a\x35\60\60\60"]; if (!$usmiuwiumyygmucg) { goto scockmiqikwwkqse; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto mcukocaaoyuugoeu; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); mcukocaaoyuugoeu: iiiwsgameuomumgw: } agyooskogigyayws: $this->kiaqywwoysssqgig("\103\x6f\157\153\x69\x65", "\x70\x6d\x70\x72\55\x63\x6c\x69\145\x6e\x74\x3d\x74\x72\165\145"); parent::__construct(); scockmiqikwwkqse: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f{$this->gueasuouwqysmomu()}\x2f\x63\x68\145\x63\153\x2d\x6a\157\142", [self::kugiewcgiawaeiaq => [self::gouqcwikiiygyasc => $aokagokqyuysuksm]], self::mswoacegomcucaik); $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto acaeigkmigikeuyu; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[self::eikgweiqgomeisyo])) { goto uwusswwekqcsisus; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto mciumqyyossyiuyk; uwusswwekqcsisus: switch ($sogksuscggsicmac[self::eikgweiqgomeisyo]) { case self::amcogigwsaqssuai: if (isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && $sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto egwgyekaiqomyeaa; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto kssuqmsgmaaeqigw; egwgyekaiqomyeaa: $iueymcwwscwqkiyq = self::gymusgeumuwomwuy; kssuqmsgmaaeqigw: goto okycquokqoamsquy; case self::uasuowkaguiwoouw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; } cgwokqwakqcmiieo: okycquokqoamsquy: mciumqyyossyiuyk: goto kqyeukywmgismyaq; acaeigkmigikeuyu: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; kqyeukywmgismyaq: return [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uiwqcumqkgikqyue => $sogksuscggsicmac[self::uiwqcumqkgikqyue] ?? []]; } }
