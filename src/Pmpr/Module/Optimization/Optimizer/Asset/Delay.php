<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757f1c60b0e8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; use Pmpr\Module\Optimization\Traits\RegexTrait; class Delay extends Engine { use RegexTrait; protected array $excludes = []; public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\x61\145\147\x6b\161\145\155\143\x6d\x75\x63\143\x69\x67\x65\147"], 26)->miasamwyaiagioug([$this, "\x67\x73\167\x6d\145\x71\x65\x79\145\x65\x69\161\x79\151\x67\171"], 27)->miasamwyaiagioug([$this, "\155\x6b\x79\141\155\157\x77\141\171\x71\x6b\167\171\155\x6d\155"], 26)->miasamwyaiagioug([$this, "\161\x6b\151\x75\171\141\171\171\151\145\145\147\x6b\x67\x75\x77"], 25); } public function mkyamowayqkwymmm($moooemyaqewumiay) { if (Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(VirtualBrowserSetting::eoeewcigeywcquis) && $this->weysguygiseoukqw(VirtualBrowserSetting::ysqismgmgqwekqsu) && $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { $sogksuscggsicmac = $this->uwqicuuwkamyewyu($moooemyaqewumiay); $this->excludes = $this->yyymaeeksgioeiai("\x65\x78\x63\154\165\x64\x65\144\x5f\x64\145\x6c\141\x79\137\x73\x74\x79\x6c\145\163"); $scuukmeowggaqeea = preg_replace_callback("\x2f\x3c\x6c\x69\156\x6b\134\x73\53\x28\77\74\141\164\164\x72\76\133\x5e\76\135\52\77\x29\x5c\57\x3f\x3e\x2f\x55\x6d\x73\151", [$this, "\153\157\x65\x75\x6d\165\151\155\x6d\161\165\153\x63\145\167\167"], $sogksuscggsicmac); if ($scuukmeowggaqeea) { $moooemyaqewumiay = $this->auyeeommieeqigum($scuukmeowggaqeea); } } return $moooemyaqewumiay; } public function koeumuimmqukceww($meyiiwcswqmuggyg) : string { $meyiiwcswqmuggyg[Constants::aiawiouiowouwomc] = trim($meyiiwcswqmuggyg[Constants::aiawiouiowouwomc]); $mkyamowayqkwymmm = $meyiiwcswqmuggyg[0]; if (!empty($meyiiwcswqmuggyg[Constants::aiawiouiowouwomc])) { if (!preg_match("\x2f\x72\x65\154\x5c\x73\x2a\x3d\134\x73\x2a\133\x22\x27\x5d\50\163\164\171\154\x65\163\x68\145\145\x74\51\x5b\42\x27\x5d\57\x69", $meyiiwcswqmuggyg[Constants::aiawiouiowouwomc]) || $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($meyiiwcswqmuggyg[Constants::aiawiouiowouwomc], "\x74\x79\160\x65\75") !== false && !preg_match("\57\x74\x79\x70\x65\134\x73\52\x3d\134\x73\x2a\133\x22\47\135\x28\77\x3a\164\145\170\x74\174\141\160\160\x6c\151\143\x61\x74\151\157\x6e\x29\134\57\50\x3f\72\50\x3f\x3a\170\134\55\x29\x3f\x63\x73\163\x29\x5b\42\x27\x5d\57\151", $meyiiwcswqmuggyg[Constants::aiawiouiowouwomc])) { return $meyiiwcswqmuggyg[0]; } foreach ($this->excludes as $eouekqmooogkoqoo) { if (preg_match("\43{$eouekqmooogkoqoo}\x23\151", $meyiiwcswqmuggyg[0])) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4f\160\x74\151\x6d\x69\172\141\164\x69\x6f\x6e\40\x44\x65\154\x61\171\103\123\x53\x3a\x20\123\164\171\x6c\x65\x20{$meyiiwcswqmuggyg[0]}\x20\x65\170\x63\154\165\144\145\x64\x20\142\171\x20{$eouekqmooogkoqoo}"); return $meyiiwcswqmuggyg[0]; } } $kewwyuqsuygmksco = preg_replace("\57\164\x79\160\145\75\x28\x5b\x22\x27\x5d\51\50\x2e\52\x3f\x29\134\x31\57\151", "\144\141\164\141\55\160\162\x2d\x6f\x70\164\55\44\x30", $meyiiwcswqmuggyg[Constants::aiawiouiowouwomc], 1); if (null !== $kewwyuqsuygmksco) { $mkyamowayqkwymmm = preg_replace("\x23" . preg_quote($meyiiwcswqmuggyg[Constants::aiawiouiowouwomc], "\43") . "\x23\x69", $kewwyuqsuygmksco, $meyiiwcswqmuggyg[0], 1); } } return preg_replace("\x2f\x3c\154\x69\156\x6b\57\151", "\x3c\x6c\151\156\153\40\x74\x79\160\x65\x3d\42\164\145\x78\164\57\x68\x74\x6d\154\42\40\x63\x6c\x61\x73\163\75\42\x6f\x70\x74\144\145\x6c\x61\171\141\163\x73\x65\x74\x22\x20\155\145\144\151\x61\75\x22\x70\x72\x69\x6e\164\x22\x20", $mkyamowayqkwymmm, 1); } public function qkiuyayyieegkguw($moooemyaqewumiay) { $aiamqeawckcsuaou = $this->weysguygiseoukqw(VirtualBrowserSetting::kkygieaguayewaak); if ($aiamqeawckcsuaou && Constants::NONE !== $aiamqeawckcsuaou && Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(VirtualBrowserSetting::eoeewcigeywcquis) && $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { $this->excludes = $this->yyymaeeksgioeiai(VirtualBrowserSetting::gkqwyqeuosecqkqy); $sogksuscggsicmac = $this->uwqicuuwkamyewyu($moooemyaqewumiay); $scuukmeowggaqeea = preg_replace_callback("\57\74\154\x69\x6e\153\134\x73\x2b\x28\x5b\136\x3e\x5d\x2b\133\134\163\42\47\x5d\x29\77\x68\x72\145\146\134\163\x2a\x3d\x5c\x73\52\133\x27\42\x5d\x5c\163\x2a\77\50\77\74\x75\162\x6c\76\x5b\136\x27\42\135\53\x5c\56\143\x73\163\50\77\72\x5c\77\x5b\x5e\x27\x22\x5d\52\51\77\51\x5c\163\52\x3f\x5b\47\42\x5d\50\133\x5e\76\x5d\x2b\x29\x3f\x5c\57\77\76\x2f\125\155\163\x69", [$this, "\x73\161\x63\x75\145\157\141\165\145\153\x71\x77\151\x6d\x6f\x6d"], $sogksuscggsicmac); if ($scuukmeowggaqeea) { $moooemyaqewumiay = $this->auyeeommieeqigum($scuukmeowggaqeea); } } return $moooemyaqewumiay; } public function sqcueoauekqwimom($meyiiwcswqmuggyg) : string { foreach ($this->excludes as $eouekqmooogkoqoo) { if (preg_match("\x23{$eouekqmooogkoqoo}\43\x69", $meyiiwcswqmuggyg[0])) { return $meyiiwcswqmuggyg[0]; } } return ''; } public function aegkqemcmuccigeg($moooemyaqewumiay) { if ($moooemyaqewumiay && $this->weysguygiseoukqw(Setting::acmmwemggiumsoyo) && $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { $this->excludes = $this->yyymaeeksgioeiai(Setting::goaeqsqkouyekmoo); $sogksuscggsicmac = $this->uwqicuuwkamyewyu($moooemyaqewumiay); $scuukmeowggaqeea = preg_replace_callback("\x2f\x3c\x5c\163\x2a\163\x63\162\151\x70\164\x5c\x73\x2a\x28\x3f\74\141\164\x74\162\x3e\x5b\136\76\x5d\52\77\x29\x3f\x3e\50\77\74\143\157\156\x74\145\x6e\164\x3e\x2e\x2a\77\x29\77\74\134\x73\52\134\x2f\134\x73\52\163\x63\x72\x69\160\164\134\163\x2a\x3e\x2f\151\155\x73", [$this, "\145\145\x79\x65\x73\x77\143\x61\x6b\147\151\x65\x6d\x63\157\x67"], $sogksuscggsicmac); if ($scuukmeowggaqeea) { $moooemyaqewumiay = $this->auyeeommieeqigum($scuukmeowggaqeea); } } return $moooemyaqewumiay; } public function eeyeswcakgiemcog($meyiiwcswqmuggyg) : string { if ($this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($meyiiwcswqmuggyg[0], "\160\x72\x2d\x6f\160\164\55\x64\157\156\164\55\x64\145\x6c\141\171")) { return $meyiiwcswqmuggyg[0]; } foreach ($this->excludes as $eouekqmooogkoqoo) { if (preg_match("\43{$eouekqmooogkoqoo}\43\151", $meyiiwcswqmuggyg[0])) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4f\160\x74\x69\x6d\151\x7a\x61\x74\x69\x6f\x6e\40\x44\145\x6c\141\171\112\123\x3a\40\123\143\162\151\160\164\x20{$meyiiwcswqmuggyg[0]}\x20\x65\x78\x63\154\165\144\145\x64\x20\142\171\x20{$eouekqmooogkoqoo}"); return $meyiiwcswqmuggyg[0]; } } if (empty($meyiiwcswqmuggyg[Constants::aiawiouiowouwomc])) { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ssqqsemoqaeqcqka($meyiiwcswqmuggyg[Constants::ssmskyqgcmeiayco], [Constants::squoamkioomemiyi => "\164\145\170\164\x2f\150\x74\x6d\x6c", "\x63\154\x61\163\x73" => "\157\160\164\x64\145\154\141\171\x61\x73\x73\145\164"]); } $giioumomcoyuauuw = ["\164\x65\170\164\57\x6a\x61\x76\141\163\143\162\151\160\164", "\155\x6f\x64\165\154\x65", "\141\160\x70\x6c\151\143\x61\164\151\157\x6e\57\152\x61\166\x61\x73\143\x72\151\x70\164", "\141\x70\160\x6c\151\x63\x61\x74\151\157\x6e\57\x65\143\155\x61\163\143\x72\151\x70\x74", "\141\x70\160\x6c\151\x63\x61\164\151\x6f\x6e\x2f\x78\55\x65\143\155\141\163\x63\162\151\x70\x74", "\x61\160\160\x6c\151\143\x61\164\x69\157\x6e\x2f\x78\x2d\152\x61\166\141\163\143\x72\x69\x70\x74", "\x74\145\170\x74\57\145\143\155\141\163\x63\x72\151\x70\x74", "\x74\x65\x78\x74\x2f\x6a\x61\x76\x61\163\x63\x72\x69\160\x74\x31\x2e\x30", "\x74\x65\170\164\x2f\x6a\141\166\x61\163\x63\162\151\x70\164\x31\56\x31", "\164\145\170\x74\x2f\152\x61\166\141\163\143\162\x69\x70\x74\61\x2e\x32", "\164\145\170\164\57\x6a\141\x76\x61\x73\143\162\151\x70\x74\x31\56\x33", "\164\x65\x78\164\x2f\152\x61\x76\x61\x73\143\162\151\x70\164\x31\x2e\64", "\164\145\170\164\57\152\141\166\141\x73\x63\162\151\160\164\61\56\65", "\x74\x65\x78\164\57\x6a\163\143\162\151\x70\164", "\164\x65\170\x74\x2f\x6c\x69\166\x65\163\143\x72\151\x70\164", "\x74\145\x78\164\x2f\x78\55\145\143\x6d\x61\x73\143\x72\x69\160\164", "\x74\x65\170\164\57\170\x2d\152\x61\x76\141\163\x63\x72\x69\x70\164"]; $gigaegackcaiegaq = "\x2f\x74\171\160\145\134\163\52\75\x5c\x73\52\x28\x5b\x22\x27\135\x29\x28\x3f\x3c\164\x79\160\x65\76\56\x2a\x29\134\x31\57\151"; preg_match($gigaegackcaiegaq . "\125", $meyiiwcswqmuggyg[Constants::aiawiouiowouwomc], $cywkesmoekaioooc); if (!empty($cywkesmoekaioooc) && !empty(trim($cywkesmoekaioooc[Constants::squoamkioomemiyi])) && !in_array(strtolower(trim($cywkesmoekaioooc[Constants::squoamkioomemiyi])), $giioumomcoyuauuw, true)) { return $meyiiwcswqmuggyg[0]; } $meyiiwcswqmuggyg[Constants::aiawiouiowouwomc] = preg_replace("\x2f\x5c\x73\x2a\133\x5e\x22\x5d\141\163\171\x6e\x63\174\141\x73\x79\x6e\143\133\x5e\x22\135\57\x69", "\40\144\141\164\x61\x2d\x61\x73\x79\x6e\x63\x20", $meyiiwcswqmuggyg[Constants::aiawiouiowouwomc]); $meyiiwcswqmuggyg[Constants::aiawiouiowouwomc] = preg_replace("\57\134\x73\x2a\133\x5e\42\135\144\145\x66\x65\162\174\x64\145\x66\x65\162\133\136\42\x5d\x2f\151", "\x20\x64\141\164\x61\55\144\x65\x66\145\x72\40", $meyiiwcswqmuggyg[Constants::aiawiouiowouwomc]); $meyiiwcswqmuggyg[Constants::aiawiouiowouwomc] = preg_replace($gigaegackcaiegaq, "\x64\x61\x74\x61\55\160\162\55\157\160\x74\55\x74\x79\x70\x65\75\x24\61\44\x32\x24\x31", $meyiiwcswqmuggyg[Constants::aiawiouiowouwomc]); $meyiiwcswqmuggyg[Constants::aiawiouiowouwomc] = preg_replace("\57\50\x5c\x73\53\164\x79\160\x65\134\x73\53\x29\174\x28\136\x74\x79\x70\x65\134\163\x2b\x29\174\x28\134\x73\53\164\171\160\x65\x24\51\57\151", '', $meyiiwcswqmuggyg[Constants::aiawiouiowouwomc]); $ouoigkmgsyscaucw = "\57\x73\162\x63\x5c\x73\52\75\134\x73\52\x28\x5b\x22\x27\135\x29\50\x2e\52\x29\134\61\x2f\x69"; $meyiiwcswqmuggyg[Constants::aiawiouiowouwomc] = preg_replace($ouoigkmgsyscaucw, "\x64\141\x74\x61\55\x70\162\x2d\157\160\x74\55\163\162\x63\x3d\44\61\44\62\x24\61", $meyiiwcswqmuggyg[Constants::aiawiouiowouwomc]); $wwgucssaecqekuek = trim($meyiiwcswqmuggyg[Constants::aiawiouiowouwomc]); if ($this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($wwgucssaecqekuek, "\143\154\141\163\x73\75")) { $wwgucssaecqekuek = str_replace(["\143\154\141\x73\x73\75\x22", "\143\x6c\141\163\163\x3d\47"], ["\x63\x6c\x61\163\x73\x3d\42\x6f\160\x74\x64\145\x6c\141\171\141\163\x73\x65\164\40", "\x63\154\x61\x73\x73\75\47\157\x70\x74\x64\x65\x6c\141\x79\141\x73\163\x65\x74\x20"], $wwgucssaecqekuek); } else { $wwgucssaecqekuek .= "\x20\x63\x6c\x61\x73\163\x3d\x22\x6f\x70\x74\144\x65\x6c\141\171\x61\x73\163\145\164\x22"; } return "\74\163\x63\x72\151\x70\x74\x20\x74\x79\x70\145\x3d\42\164\x65\170\x74\x2f\x68\164\x6d\154\42\x20" . $wwgucssaecqekuek . "\x3e" . $meyiiwcswqmuggyg[Constants::ssmskyqgcmeiayco] . "\74\x2f\x73\x63\x72\x69\160\164\x3e"; } public function gswmeqeyeeiqyigy($moooemyaqewumiay) { if ($this->uyiwwseekuwoeoag()) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $oiqkocciuiuqggew = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->souwykwwmyygqyqi($this, "\144\145\x6c\x61\x79\x2e\x6a\x73", ["\154\157\x61\x64\x5f\x61\x70\160\162\x6f\x61\143\x68" => $this->weysguygiseoukqw(Setting::acmmwemggiumsoyo, Setting::oqiaceqksggqgoww)]); if ($oiqkocciuiuqggew) { $kuoicyiuewoqyaqe = $swqimwqeweekeusq->ssqqsemoqaeqcqka($oiqkocciuiuqggew, ["\x63\x6c\141\163\x73" => "\x70\162\x2d\157\160\x74\x2d\144\145\154\141\171"]); $moooemyaqewumiay = $swqimwqeweekeusq->cgeyeoimiuyogose($moooemyaqewumiay, "\142\x6f\144\171", $kuoicyiuewoqyaqe); } $gacsgayqmwmckmwo = $swqimwqeweekeusq->ssqqsemoqaeqcqka($this->aquaommioywqokos(), ["\143\x6c\141\x73\x73" => "\x70\162\55\x6f\160\x74\x2d\x64\x65\154\141\171\x2d\146\x61\x6c\154\142\141\x63\153"]); $moooemyaqewumiay = $swqimwqeweekeusq->cgeyeoimiuyogose($moooemyaqewumiay, "\142\157\144\x79", $gacsgayqmwmckmwo); } return $moooemyaqewumiay; } public function aquaommioywqokos() : string { return "\151\x66\50\156\x61\x76\151\x67\141\x74\x6f\x72\x2e\165\x73\x65\162\x41\x67\x65\156\x74\x2e\155\141\x74\x63\150\x28\x2f\x4d\x53\111\105\x7c\x49\156\x74\x65\162\x6e\145\164\x20\105\170\160\x6c\157\x72\145\x72\57\x69\51\x7c\174\x6e\x61\166\x69\x67\141\x74\x6f\162\x2e\x75\163\x65\x72\x41\147\145\x6e\x74\56\x6d\141\164\143\x68\50\57\x54\162\x69\144\145\x6e\164\134\x2f\x37\x5c\x2e\x2e\x2a\77\162\x76\72\x31\61\57\x69\51\x29\173\x76\x61\162\x20\150\162\145\x66\x3d\144\157\x63\165\x6d\145\156\164\56\x6c\157\x63\x61\164\151\x6f\156\56\150\x72\x65\x66\x3b\151\146\50\41\x68\x72\x65\146\56\x6d\141\164\143\150\50\57\x5b\77\46\135\156\157\x77\160\x6f\160\x74\x2f\x29\x29\173\151\x66\50\x68\x72\x65\x66\56\x69\156\x64\145\x78\117\146\50\42\x3f\x22\x29\75\75\55\x31\x29\x7b\151\146\x28\150\x72\145\146\x2e\x69\x6e\x64\145\x78\x4f\x66\50\42\x23\x22\x29\x3d\75\x2d\61\51\173\x64\157\x63\x75\x6d\x65\x6e\164\56\154\x6f\x63\141\x74\x69\x6f\x6e\56\x68\162\x65\x66\75\x68\162\x65\x66\x2b\x22\x3f\x6e\157\167\160\x6f\x70\164\75\x31\42\175\x65\x6c\163\x65\173\144\x6f\143\165\x6d\x65\156\x74\x2e\154\157\x63\x61\164\151\157\156\x2e\x68\x72\x65\146\75\150\x72\x65\146\x2e\162\x65\x70\x6c\141\143\x65\x28\x22\x23\x22\x2c\x22\77\156\157\167\x70\157\x70\164\75\61\x23\42\51\175\175\x65\x6c\163\x65\173\x69\x66\50\x68\x72\145\x66\x2e\151\156\144\145\170\117\146\x28\x22\43\42\x29\75\x3d\x2d\x31\x29\173\x64\157\x63\x75\155\x65\156\x74\x2e\154\x6f\x63\141\x74\x69\157\x6e\56\x68\x72\x65\146\x3d\150\162\145\146\53\x22\x26\156\157\167\x70\x6f\160\x74\75\x31\42\175\x65\x6c\163\x65\173\x64\157\143\x75\x6d\145\x6e\x74\x2e\x6c\x6f\143\x61\164\151\157\156\x2e\x68\x72\145\146\75\x68\x72\x65\x66\x2e\162\145\x70\x6c\141\143\x65\x28\x22\x23\x22\54\42\46\x6e\x6f\x77\x70\157\160\x74\x3d\61\x23\x22\51\175\x7d\x7d\175"; } public function yyymaeeksgioeiai(string $amakmumgguksgmum) : array { $couiucmsqaieciue = $this->kmuweyayaqoeqiyw()->gugawkcggyameeky($amakmumgguksgmum); $couiucmsqaieciue = (array) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\141\x73\x73\x65\164\x5f\x64\x65\154\141\171\x5f\145\x78\x63\x6c\x75\x64\145\163", $couiucmsqaieciue, $amakmumgguksgmum); array_map(static function ($eqgoocgaqwqcimie) { if (!is_string($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = (string) $eqgoocgaqwqcimie; } return str_replace(["\x2b", "\77\166\145\x72", "\x23"], ["\x5c\53", "\x5c\x3f\x76\x65\162", "\x5c\x23"], $eqgoocgaqwqcimie); }, $couiucmsqaieciue); return $couiucmsqaieciue; } public function uyiwwseekuwoeoag() : bool { return $this->weysguygiseoukqw(Setting::acmmwemggiumsoyo) && $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei(); } }
