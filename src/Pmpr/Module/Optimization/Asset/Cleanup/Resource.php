<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62d7c3928abb7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Cleanup; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Asset\Setting; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; class Resource extends Common { const gucqkiywkqyomkye = "\57\x3c\41\55\55\134\x5b\x69\x66\133\x5e\x5c\x5d\x5d\x2a\77\x5c\x5d\76\x2e\52\77\x3c\41\134\x5b\145\x6e\144\151\x66\x5c\x5d\x2d\55\x3e\x2f\x69\x73"; protected ?array $conditionals = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\x69\156\151\x74"])->qcsmikeggeemccuu("\167\160\137\x65\x6e\161\x75\x65\165\x65\137\x73\x63\162\151\160\x74\x73", [$this, "\x6d\151\167\x6f\143\x63\x75\x75\163\141\161\153\x79\x67\163\x71"], 999); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x62\x75\146\146\145\x72\137\160\x72\157\143\x65\163\x73"), [$this, "\x6f\x67\171\x6b\143\x63\165\x61\x61\153\165\x6f\141\145\163\x65"], 25)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\137\x62\165\x66\146\x65\x72\137\160\x72\157\x63\145\x73\163"), [$this, "\163\x6b\x6f\x79\x73\165\x71\x77\165\167\155\147\x71\x63\153\x71"], 25); if (!($this->weysguygiseoukqw(Setting::qwcseoyssyaciyqk) && !Manipulate::swuauuwqoauayowm())) { goto gqaqamewqeaqwcia; } $this->cecaguuoecmccuse("\x77\160\137\145\x6e\x71\165\145\165\145\137\163\x63\162\151\160\x74\163", [$this, "\163\x73\153\161\x71\x69\x63\157\x79\x6d\x6b\x67\157\163\x6d\147"], 999); gqaqamewqeaqwcia: if (!$this->ygyygikyocoymgaw(Setting::aysyuueaueiamysu)) { goto okuqsqaiwwiigmyu; } $this->cecaguuoecmccuse("\x77\160\137\x63\x61\x6c\143\x75\x6c\x61\x74\x65\137\x69\155\x61\x67\x65\137\x73\x72\143\163\x65\164", [$this, "\x73\145\165\x69\147\167\171\x79\165\x6f\x73\x67\145\x71\143\x6f"], 21)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\142\x75\x66\146\x65\x72\137\160\x72\x6f\x63\x65\163\x73"), [$this, "\x69\x67\x71\x69\x79\171\x75\x63\x65\161\147\x63\x69\157\161\171"], 21); okuqsqaiwwiigmyu: $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\x62\x75\x66\146\x65\x72\x5f\x70\162\x6f\x63\145\x73\163"), [$this, "\151\147\x6b\171\x75\153\x71\153\x79\x77\x77\167\x79\x79\x61\141"], 1)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\x5f\142\x75\x66\146\145\x72\x5f\160\162\x6f\x63\145\x73\163"), [$this, "\x69\x61\x71\x61\155\167\x77\x65\161\171\x6b\x6b\165\171\x73\143"], 99999); parent::kgquecmsgcouyaya(); } public function init() { if (!$this->weysguygiseoukqw(Setting::oeiwkesueukkqggs)) { goto ksiwgckusukisueg; } $this->yguckmcqkqsysmwu(); ksiwgckusukisueg: if (!$this->weysguygiseoukqw(Setting::owgquqcyoseeeiqg)) { goto sgkqgucguyccaaki; } $this->yausywiikmmqckki(); sgkqgucguyccaaki: } public function yguckmcqkqsysmwu() { $this->cecaguuoecmccuse("\145\155\157\152\151\137\163\166\x67\x5f\x75\162\x6c", "\137\x5f\162\145\x74\x75\x72\156\137\146\x61\154\163\145")->kuieicsuscgmwigg("\167\160\x5f\160\x72\x69\156\x74\137\163\x74\171\154\x65\163", "\x70\162\x69\x6e\x74\137\x65\x6d\157\x6a\x69\137\163\164\171\154\145\163")->ggmgmqswqkgecosg("\143\157\x6d\155\x65\156\164\x5f\x74\145\170\164\137\x72\x73\163", "\167\160\137\163\164\141\x74\x69\x63\151\x7a\145\x5f\x65\155\x6f\152\x69")->ggmgmqswqkgecosg("\164\x68\x65\137\143\157\x6e\x74\145\x6e\164\x5f\146\x65\x65\144", "\x77\160\137\163\x74\x61\164\x69\x63\x69\172\145\137\x65\x6d\157\152\151")->ggmgmqswqkgecosg("\x77\x70\x5f\x6d\141\151\x6c", "\167\160\x5f\163\x74\141\164\151\143\151\172\x65\x5f\145\x6d\x6f\152\151\137\146\x6f\162\x5f\145\155\141\151\154")->kuieicsuscgmwigg("\x77\160\137\x68\x65\141\x64", "\x70\x72\x69\156\164\x5f\x65\155\157\152\151\137\144\x65\x74\145\x63\164\x69\157\156\x5f\x73\x63\x72\151\x70\x74", 7)->cecaguuoecmccuse("\167\160\137\162\x65\163\x6f\x75\162\x63\x65\x5f\x68\151\x6e\x74\163", [$this, "\x6d\141\x79\x6b\x63\x6d\x79\x79\145\x71\163\153\147\x6d\145\x77"], 10, 2); } public function yausywiikmmqckki() { global $wp; $wp->public_query_vars = array_diff($wp->public_query_vars, ["\x65\155\x62\145\144"]); $this->kuieicsuscgmwigg("\x77\x70\137\x68\x65\x61\144", "\x77\x70\137\157\145\x6d\x62\145\x64\x5f\x61\144\144\137\x68\157\x73\x74\137\152\163")->cecaguuoecmccuse("\145\x6d\x62\145\144\137\157\145\155\142\145\x64\x5f\x64\151\163\x63\157\x76\145\162", "\x5f\x5f\162\x65\x74\x75\x72\156\137\146\141\154\163\x65")->kuieicsuscgmwigg("\x77\160\x5f\150\145\141\x64", "\167\160\137\157\145\x6d\142\x65\x64\137\141\x64\x64\x5f\144\x69\x73\x63\x6f\166\x65\x72\171\137\154\x69\x6e\x6b\163")->kuieicsuscgmwigg("\162\x65\x73\x74\137\141\x70\x69\137\x69\x6e\x69\x74", "\167\x70\137\157\x65\155\142\x65\144\x5f\162\x65\x67\x69\x73\164\x65\162\x5f\x72\x6f\x75\164\x65")->cecaguuoecmccuse("\x72\x65\x77\x72\x69\164\145\137\x72\165\154\145\163\x5f\141\162\162\x61\171", [$this, "\171\161\x6f\171\x61\x65\x63\157\x67\167\163\153\x6d\x65\x6b\x6f"])->ggmgmqswqkgecosg("\157\145\155\x62\x65\144\x5f\x64\x61\164\141\x70\141\162\x73\x65", "\167\x70\137\x66\x69\x6c\x74\145\162\137\x6f\x65\x6d\x62\145\x64\137\162\145\x73\x75\x6c\164")->ggmgmqswqkgecosg("\x70\162\x65\137\157\145\155\x62\145\x64\137\x72\145\x73\165\x6c\x74", "\167\x70\137\x66\x69\154\x74\145\x72\x5f\160\162\x65\137\157\x65\155\142\x65\x64\x5f\162\x65\x73\165\154\x74"); } public function yqoyaecogwskmeko($acqqmqmcquukaqsc) { foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss => $squgkkgwywimowua) { if (!(false !== strpos($squgkkgwywimowua, "\x65\155\x62\x65\144\x3d\164\162\165\145"))) { goto cmsiuimsiycomyay; } ManipulateArray::unset($acqqmqmcquukaqsc, $ekuqiqmikiicgoss); cmsiuimsiycomyay: geyiosucqswaeasw: } omuemegmkesqgwys: return $acqqmqmcquukaqsc; } public function maykcmyyeqskgmew($auwuoyyagaiegwae, $ayegqaqygsqsmews) : array { if (!("\144\156\x73\x2d\160\162\145\146\x65\164\x63\150" == $ayegqaqygsqsmews)) { goto ccgsycueagwegqeu; } $ycoyiwsmwwiqwogw = $this->sscegwueamckwmcy("\145\155\x6f\152\151\137\163\166\x67\x5f\165\162\154", "\x68\x74\164\160\x73\72\57\57\163\56\167\56\x6f\162\147\57\x69\x6d\x61\x67\x65\163\57\143\157\x72\x65\x2f\x65\x6d\157\x6a\151\57\62\56\62\x2e\x31\x2f\163\166\x67\57"); if (!$ycoyiwsmwwiqwogw) { goto qmqmskywcgiqgygm; } $auwuoyyagaiegwae = array_diff($auwuoyyagaiegwae, [$ycoyiwsmwwiqwogw]); qmqmskywcgiqgygm: ccgsycueagwegqeu: return $auwuoyyagaiegwae; } public function miwoccuusaqkygsq() { if (!$this->ocysssyiuaueqiei()) { goto ycecaauekkiqacuu; } if (!$this->weysguygiseoukqw(Setting::uwcmcaucigmuiugg)) { goto gmeiuoeewucukque; } DecoratorAsset::qkyugogwegiuiime("\x64\x61\163\150\151\143\x6f\156\163"); gmeiuoeewucukque: if (!$this->weysguygiseoukqw(Setting::gukmqsiumkmukaoe)) { goto sayqggaieocmskko; } DecoratorAsset::qkyugogwegiuiime("\x77\x63\x2d\x62\x6c\x6f\x63\153\x73\55\x73\x74\171\154\x65"); DecoratorAsset::qkyugogwegiuiime("\167\x70\x2d\142\x6c\x6f\143\x6b\55\x6c\151\x62\x72\x61\x72\171"); DecoratorAsset::qkyugogwegiuiime("\167\160\x2d\x62\x6c\157\143\153\55\x6c\151\142\162\141\162\171\55\164\x68\x65\x6d\145"); DecoratorAsset::qkyugogwegiuiime("\x77\143\55\142\x6c\x6f\x63\153\x73\x2d\166\145\156\144\157\162\x73\x2d\x73\164\171\x6c\145"); sayqggaieocmskko: if (!($this->weysguygiseoukqw(Setting::kcgocyessaswyike) && ManipulateWoocommerce::ayseokmqycoqaigc() && (DecoratorWoocommerce::ckeyeaouokcgeqeq() || DecoratorWoocommerce::gqoskmoekogyqwsc()))) { goto qmguoqeawegcoeoa; } DecoratorAsset::saisougiwmauksiy("\172\x78\x63\166\142\x6e\x2d\141\x73\171\156\143"); DecoratorAsset::saisougiwmauksiy("\160\141\163\163\x77\157\162\144\55\163\x74\162\x65\x6e\x67\x74\x68\x2d\x6d\145\164\x65\x72"); DecoratorAsset::saisougiwmauksiy("\x77\x63\x2d\160\x61\163\163\x77\157\x72\144\x2d\x73\x74\162\145\156\x67\x74\150\x2d\155\x65\164\145\162"); qmguoqeawegcoeoa: ycecaauekkiqacuu: } private function smyqoiyugouyymcq() : bool { return !Manipulate::cmaecekuqkwmemms("\104\x4f\x4e\x54\x5f\120\105\122\x46\117\122\x4d\x41\116\103\x45\137\x4f\120\x54\x49\x4d\x49\x5a\x45", false); } public function xwgeqeiyismgqqgc() { $couiucmsqaieciue = ["\x67\151\163\164\56\x67\151\164\150\165\142\x2e\x63\157\155", "\x63\x6f\156\164\x65\156\164\56\152\167\x70\x6c\141\164\146\x6f\x72\155\56\143\157\155", "\x6a\163\56\x68\x73\x66\157\x72\x6d\163\x2e\156\145\x74", "\167\x77\x77\56\165\160\x6c\141\x75\156\143\x68\x2e\143\157\155", "\147\157\x6f\x67\154\x65\x2e\x63\157\155\57\162\x65\143\x61\160\x74\x63\150\141", "\x77\x69\144\x67\145\164\x2e\162\x65\166\151\x65\x77\163\x2e\x63\x6f\56\x75\x6b", "\x76\145\162\x69\x66\x79\x2e\141\165\x74\x68\x6f\162\x69\x7a\x65\56\156\145\164\x2f\x61\x6e\x65\x74\163\x65\x61\x6c", "\154\151\x62\57\141\x64\155\151\x6e\57\x61\163\163\x65\x74\57\x6c\x69\x62\x2f\167\145\142\146\157\156\164\57\167\x65\x62\146\157\x6e\164\x2e\x6d\151\x6e\x2e\152\163", "\x61\160\160\x2e\155\x61\x69\154\145\x72\x6c\151\x74\x65\56\143\x6f\155", "\x77\151\x64\x67\x65\x74\x2e\162\145\166\x69\x65\x77\163\x2e\x69\157"]; $igqaiqowiaqywsyi = "\x63\144\x6e\152\x73\x2e\x63\x6c\157\x75\x64\146\x6c\x61\x72\x65\x2e\143\157\x6d\x2f\x61\x6a\141\170\57\x6c\151\x62\x73\57\152\161\x75\145\x72\x79\x2f\50\x3f\72\x2e\53\x29\x2f\x6a\161\165\x65\x72\171\x28\77\x3a\x5c\56\155\x69\156\x29\77\x2e\152\163"; $aiecucumasmeiqug = site_url(wp_scripts()->registered["\x6a\x71\x75\145\x72\x79\x2d\143\x6f\162\x65"]->src); $iumcyomuwmqgsoca = "\x63\60\56\x77\x70\x2e\143\157\x6d\57\143\57\x28\x3f\x3a\56\x2b\51\57\167\x70\x2d\x69\156\143\154\165\144\145\x73\57\x6a\163\57\152\161\x75\145\x72\171\x2f\152\161\165\x65\x72\x79\56\x6a\163"; $gkwsawwcyyswewmw = "\x61\152\141\170\56\147\x6f\157\147\x6c\145\x61\160\151\163\x2e\143\x6f\155\57\x61\152\141\170\x2f\154\151\142\x73\x2f\152\161\x75\x65\162\171\x2f\50\77\72\56\x2b\x29\x2f\152\x71\x75\145\162\171\x28\x3f\72\x5c\56\x6d\x69\156\51\77\x2e\x6a\x73"; $couiucmsqaieciue[] = $aiecucumasmeiqug ? ManipulateFormat::gooqqcmsyseiaikc($aiecucumasmeiqug, PHP_URL_PATH) : false; $couiucmsqaieciue[] = $iumcyomuwmqgsoca; $couiucmsqaieciue[] = $gkwsawwcyyswewmw; $couiucmsqaieciue[] = $igqaiqowiaqywsyi; $couiucmsqaieciue = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x70\x65\162\x66\x6f\x72\x6d\141\x6e\143\145\x5f\162\x65\x73\157\165\x72\143\x65\x5f\x65\170\x63\x6c\165\x64\x65\x5f\x64\145\146\x65\162\137\152\x73"), $couiucmsqaieciue); foreach ($couiucmsqaieciue as $ciyackuwsqkoqese => $yemgmmgogcwccuky) { $couiucmsqaieciue[$ciyackuwsqkoqese] = str_replace("\x23", "\134\x23", $yemgmmgogcwccuky); omumkeywqqogwwue: } ceaamccscgcmqgka: return $couiucmsqaieciue; } public function ogykccuaakuoaese($moooemyaqewumiay) { if (!($moooemyaqewumiay && $this->smyqoiyugouyymcq())) { goto igyesgemqesackws; } $moooemyaqewumiay = DOMCrawler::igmaewykumgwoaoy($moooemyaqewumiay, ["\163\x63\x72\x69\x70\164\133\x73\162\x63\x5d" => ["\x64\145\146\x65\162" => "\x31"]]); igyesgemqesackws: return $moooemyaqewumiay; } public function skoysuqwuwmgqckq($scwiymciagumsuiw) { return preg_replace("\x2f\x74\x79\x70\145\x3d\133\x27\42\x5d\164\145\170\164\134\57\x28\x6a\x61\166\x61\x73\143\162\x69\160\164\174\x63\x73\163\x29\133\47\x22\x5d\57", '', $scwiymciagumsuiw); } public function sskqqicoymkgosmg() { global $wp_scripts; if (!(isset($wp_scripts->registered["\x6a\161\x75\x65\x72\171"]) && $wp_scripts->registered["\152\x71\165\x65\162\171"])) { goto wiaymoucakyaikii; } $ugmuiugkaygmsagq = $wp_scripts->registered["\x6a\x71\x75\x65\x72\x79"]->deps; $wp_scripts->registered["\x6a\x71\x75\145\162\171"]->deps = array_diff($ugmuiugkaygmsagq, ["\152\161\165\145\162\171\55\x6d\x69\x67\162\x61\164\145"]); wiaymoucakyaikii: } private function qakkmcaacokcggca() : bool { return !empty($this->conditionals); } public function igkyukqkywwwyyaa(string $nsmgceoqaqogqmuw) : string { if (!preg_match_all(self::gucqkiywkqyomkye, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg)) { goto qiikwossequwiuom; } foreach ($meyiiwcswqmuggyg[0] as $oskqwiqyoigkqgys) { $this->conditionals[] = $oskqwiqyoigkqgys; ymucaguacemwsgsi: } ociesuicgmkekcue: $nsmgceoqaqogqmuw = preg_replace(self::gucqkiywkqyomkye, '', $nsmgceoqaqogqmuw); qiikwossequwiuom: return $nsmgceoqaqogqmuw; } public function iaqamwweqykkuysc(string $nsmgceoqaqogqmuw) : string { if (!$this->qakkmcaacokcggca()) { goto qywkykqkeeuccoui; } foreach ($this->conditionals as $oskqwiqyoigkqgys) { if (!preg_match("\x40\136\x28\77\74\x6f\160\x65\x6e\151\x6e\147\76\74\x21\x2d\x2d\134\133\151\x66\133\x5e\x5c\x5d\135\52\x3f\x5c\135\x3e\134\163\x2a\x3f\50\77\72\74\41\x2d\55\76\51\x3f\x5c\163\52\74\163\143\162\151\x70\164\x28\x3f\72\134\163\133\136\x3e\135\x2a\x3f\76\51\x29\x5c\163\x2a\x28\77\74\143\x6f\x6e\164\x65\x6e\164\76\x2e\x2a\x3f\x29\134\x73\x2a\x28\77\x3c\143\x6c\x6f\163\x69\x6e\147\76\x3c\x2f\163\x63\x72\151\x70\x74\x3e\x5c\163\x2a\50\77\x3a\x3c\41\x2d\x2d\51\77\134\163\52\77\x3c\x21\134\x5b\x65\x6e\x64\x69\x66\134\135\55\x2d\76\x29\44\x40\151\x73", $oskqwiqyoigkqgys, $meyiiwcswqmuggyg)) { goto oqgymyiwckkwueuw; } $oskqwiqyoigkqgys = $meyiiwcswqmuggyg["\x6f\x70\145\156\x69\156\x67"] . preg_replace("\43\50\77\x3c\x21\134\x5c\x29\x28\134\x24\174\x5c\134\x29\43", "\x5c\x5c\x24\x31", $meyiiwcswqmuggyg["\x63\157\x6e\164\x65\x6e\x74"]) . $meyiiwcswqmuggyg["\x63\x6c\157\x73\x69\156\x67"]; oqgymyiwckkwueuw: $nsmgceoqaqogqmuw = ManipulateString::wiecmkiugmyyqiqc("\x3c\150\164\155\154\x3e", "{$oskqwiqyoigkqgys}\x3c\x68\x74\x6d\154\x3e", $nsmgceoqaqogqmuw); wqwmuuicoqigqwyc: } gaouaiemokqqgssw: qywkykqkeeuccoui: return $nsmgceoqaqogqmuw; } public function igqiyyuceqgcioqy(string $moooemyaqewumiay) : string { $kemceeaciueqwiaq = "\57\x28\74\x28\x73\143\162\x69\160\x74\x7c\x6c\151\156\153\174\x69\x6d\x67\174\x66\x6f\162\155\x29\x28\x5b\x5e\76\x5d\52\x29\x28\x68\162\x65\x66\174\163\162\143\174\x61\x63\x74\x69\x6f\x6e\x29\x3d\x5b\x22\47\x5d\51\x68\164\x74\160\163\x3f\x3a\134\57\x5c\x2f\57\x69"; $wegkgaogqceaicai = "\x24\61\57\57"; $ksaameoqigiaoigg = preg_replace($kemceeaciueqwiaq, $wegkgaogqceaicai, $moooemyaqewumiay); if (!$ksaameoqigiaoigg) { goto yqqseqskcqeqkacm; } $moooemyaqewumiay = $ksaameoqigiaoigg; yqqseqskcqeqkacm: return $moooemyaqewumiay; } public function seuigwyyuosgeqco(array $oseqkueswiwsceis) : array { if (!$oseqkueswiwsceis) { goto sockocsycmkaeosg; } foreach ($oseqkueswiwsceis as $ciyackuwsqkoqese => $egsumesakcaaukem) { $oseqkueswiwsceis[$ciyackuwsqkoqese]["\165\162\x6c"] = str_replace(["\x68\164\x74\160\x3a", "\x68\164\x74\160\x73\x3a"], '', $egsumesakcaaukem["\165\x72\x6c"]); uoewiggumomegksg: } ywokggauuiosegog: sockocsycmkaeosg: return $oseqkueswiwsceis; } }
