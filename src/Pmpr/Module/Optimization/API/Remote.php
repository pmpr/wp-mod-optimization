<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64202c1126f08             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Module\Optimization\Optimization; class Remote extends Cartridge { public function __construct() { if (!($usmiuwiumyygmucg = DecoratorOption::get(Optimization::ikmkgmwegyasgqmo, []))) { goto scaciowogmayswms; } foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!ManipulateValidation::wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto imgagmqusgiqissi; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); imgagmqusgiqissi: aeekgeqawgsmgiqw: } qikmwaessamuueoe: $this->kiaqywwoysssqgig("\x43\x6f\157\x6b\x69\145", "\x70\155\x70\x72\55\143\154\x69\145\x6e\164\x3d\164\162\x75\145"); parent::__construct(); scaciowogmayswms: } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm, ?string $sqeykgyoooqysmca) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\57\152\157\x62\57\x63\150\x65\x63\x6b", [self::kugiewcgiawaeiaq => [self::gouqcwikiiygyasc => $aokagokqyuysuksm, self::squoamkioomemiyi => $sqeykgyoooqysmca]], self::mswoacegomcucaik); $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto kywmiquiiwmwgooy; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[self::eikgweiqgomeisyo])) { goto yemuiyokmqoqckwu; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto qocmmyskykeuwsae; yemuiyokmqoqckwu: switch ($sogksuscggsicmac[self::eikgweiqgomeisyo]) { case self::amcogigwsaqssuai: if (isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && $sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto sqyceswygksmmqqa; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; goto kqsyqwwscwoswsgk; sqyceswygksmmqqa: $iueymcwwscwqkiyq = self::gymusgeumuwomwuy; kqsyqwwscwoswsgk: goto cesaaiguwciccysi; case self::uasuowkaguiwoouw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; } wskccugoccagaqcw: cesaaiguwciccysi: qocmmyskykeuwsae: goto syquiiogeymgicuy; kywmiquiiwmwgooy: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; syquiiogeymgicuy: return [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uiwqcumqkgikqyue => $sogksuscggsicmac[self::uiwqcumqkgikqyue] ?? []]; } }
