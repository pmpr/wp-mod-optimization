<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d31ce4ed382             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; class Remote extends Cartridge { use SubscriptionEngineTrait; protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = $this->cqscwmqsgomkogoq()->wskswuomqkmqkkmm(); if (!$usmiuwiumyygmucg) { goto qwigomakwmyiwkgo; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto qgoiooayqmqqsiok; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); qgoiooayqmqqsiok: qogqewiwmwiwskgm: } qiaqsassksqiuyae: $this->kiaqywwoysssqgig("\x43\157\157\153\151\145", "\x70\x6d\x70\162\x2d\x63\x6c\x69\145\156\x74\75\x74\162\165\145"); parent::__construct(); qwigomakwmyiwkgo: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\57{$this->gueasuouwqysmomu()}\57\143\x68\145\x63\x6b\x2d\x6a\157\x62", [self::kugiewcgiawaeiaq => [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm]], Constants::mswoacegomcucaik); $iueymcwwscwqkiyq = Constants::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto sciwggaeogcoesiu; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[Constants::eikgweiqgomeisyo])) { goto kuicqywysciceggs; } $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; goto mkwskuycuyguqqok; kuicqywysciceggs: switch ($sogksuscggsicmac[Constants::eikgweiqgomeisyo]) { case Constants::amcogigwsaqssuai: if (isset($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) && $sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto csscmcacoikwsecs; } $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; goto cuykwgmswkskqkyi; csscmcacoikwsecs: $iueymcwwscwqkiyq = Constants::gymusgeumuwomwuy; cuykwgmswkskqkyi: goto myoicgcuugciueis; case Constants::uasuowkaguiwoouw: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; } asmecuqiyyswueqe: myoicgcuugciueis: mkwskuycuyguqqok: goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; eqkauqciwewmgeoi: return [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Constants::uiwqcumqkgikqyue => $sogksuscggsicmac[Constants::uiwqcumqkgikqyue] ?? []]; } }
