<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d31c5704a7a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; class Remote extends Cartridge { use SubscriptionEngineTrait; protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = $this->cqscwmqsgomkogoq()->wskswuomqkmqkkmm(); if (!$usmiuwiumyygmucg) { goto qwigomakwmyiwkgo; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto qgoiooayqmqqsiok; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); qgoiooayqmqqsiok: qogqewiwmwiwskgm: } qiaqsassksqiuyae: $this->kiaqywwoysssqgig("\x43\x6f\x6f\x6b\151\145", "\x70\155\160\x72\x2d\x63\x6c\x69\145\x6e\164\x3d\x74\162\x75\x65"); parent::__construct(); qwigomakwmyiwkgo: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f{$this->gueasuouwqysmomu()}\57\x63\x68\145\143\153\x2d\x6a\157\142", [self::kugiewcgiawaeiaq => [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm]], Constants::mswoacegomcucaik); $iueymcwwscwqkiyq = Constants::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto sciwggaeogcoesiu; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[Constants::eikgweiqgomeisyo])) { goto kuicqywysciceggs; } $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; goto mkwskuycuyguqqok; kuicqywysciceggs: switch ($sogksuscggsicmac[Constants::eikgweiqgomeisyo]) { case Constants::amcogigwsaqssuai: if (isset($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) && $sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto csscmcacoikwsecs; } $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; goto cuykwgmswkskqkyi; csscmcacoikwsecs: $iueymcwwscwqkiyq = Constants::gymusgeumuwomwuy; cuykwgmswkskqkyi: goto myoicgcuugciueis; case Constants::uasuowkaguiwoouw: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; } asmecuqiyyswueqe: myoicgcuugciueis: mkwskuycuyguqqok: goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; eqkauqciwewmgeoi: return [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Constants::uiwqcumqkgikqyue => $sogksuscggsicmac[Constants::uiwqcumqkgikqyue] ?? []]; } }
