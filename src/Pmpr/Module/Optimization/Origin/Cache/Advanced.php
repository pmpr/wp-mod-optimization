<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6326c8204f364             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Decorator\Decorator; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Engine; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateComponent; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\Common as BaseManipulateType; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Notice\Traits\NoticeTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\ErrorTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Traits\MemoizeTrait; use Pmpr\Module\Optimization\Buffer\Buffer as BaseBuffer; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseManipulate; class Advanced extends Common { const aeoikmkskgikaqmk = "\141\x64\x76\x61\x6e\143\145\144\x2d\143\141\143\150\x65\56\160\150\160"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\151\x6e\137\151\156\x69\164", [$this, "\171\145\171\x69\x67\165\x79\x65\x67\x6d\x6d\171\165\x73\x65\x61"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\x74\x5f\x64\151\163\x61\x62\x6c\x65\x64"), [$this, "\163\x77\151\x65\141\171\x65\x79\163\141\x77\143\x65\x65\153\x6b"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto wmwgeoequuwwwywa; } $this->qeoakmiowssoqaom(); wmwgeoequuwwwywa: } public function swieayeysawceekk() { if (!($iiaumsgauuyeqksw = $this->kcciqwskewsuaemk())) { goto uqugcugeomqakcqo; } $iiaumsgauuyeqksw->remove($this->moassygiomssikqe() . self::aeoikmkskgikaqmk); uqugcugeomqakcqo: } public function qeoakmiowssoqaom() { $mkomwsiykqigmqca = $this->moassygiomssikqe(); $acqcekoeswseswws = $mkomwsiykqigmqca . self::aeoikmkskgikaqmk; $easioyqacwuockya = ManipulateFile::qucagkayiequsiia(Foundation::class); $gwcwqmuggecygcca = ManipulateFile::qucagkayiequsiia(Optimization::class); if (!($easioyqacwuockya && $gwcwqmuggecygcca)) { goto wywwieycqskuqcwc; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!(!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk())) { goto qmoisuweiskkekca; } $cmkqisoeyioisqaw = [Test::class, Config::class, Buffer::class, BaseBuffer::class, Engine::class, Storage::class, Container::class, Filesystem::class, Decorator::class, DecoratorHook::class, LogTrait::class, AjaxTrait::class, HookTrait::class, ErrorTrait::class, NoticeTrait::class, SettingTrait::class, MemoizeTrait::class, TemplateTrait::class, SingletonTrait::class, ComponentTrait::class, TranslateTrait::class, BaseManipulate::class, ManipulateHook::class, ManipulateArray::class, ManipulateFormat::class, ManipulateString::class, ManipulateServer::class, ManipulateSetting::class, BaseManipulateType::class, ManipulateComponent::class, ManipulateValidation::class, BaseManipulateFormat::class, ConstantInterface::class]; $cmkqisoeyioisqaw = $this->cqmcaceygyqmuokq($cmkqisoeyioisqaw); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x61\144\166\x61\156\x63\x65\144\56\160\150\x70", ["\x75\x73\145\x73" => [Test::class, Buffer::class, Config::class], "\143\x6c\x61\163\163\145\x73" => $cmkqisoeyioisqaw, "\x6e\141\155\x65\x73\x70\x61\143\x65" => $this->gysieksskcaeyuom(Cache::class), "\166\x65\156\144\x6f\162\137\x70\141\164\x68" => Foundation::couwksyewgyeooqe()->aksiegmauqiaueis(), "\143\x61\143\x68\145\137\x70\141\164\150" => $this->gskqygiceygcguyo(), "\x63\157\156\146\x69\147\137\x70\141\164\x68" => Manipulate::cmaecekuqkwmemms("\x4f\120\x54\111\115\x49\x5a\x41\x54\111\x4f\x4e\137\x43\x4f\x4e\106\x49\107\137\120\x41\124\x48")]); $ewgwqamkygiqaawc = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\141\144\166\x61\156\143\x65\144\x5f\x63\x61\x63\x68\x65\137\146\151\x6c\x65"), $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, self::aeoikmkskgikaqmk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\x70\164\151\155\151\172\141\164\151\157\x6e\40\101\144\166\x61\156\x63\x65\x64\40\x43\141\143\150\145\40\x66\x69\154\145\40\147\x65\x6e\x65\162\141\x74\x65\x64\x20\x73\x75\143\x63\145\x73\x73\146\x75\154\154\x79\x20\x69\156\40\x25\163\x2e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca), "\x61\144\166\x61\156\143\145\55\x63\141\x63\x68\x65", self::smkwuwawwaqyimcq); qmoisuweiskkekca: wywwieycqskuqcwc: } public function cqmcaceygyqmuokq($cmkqisoeyioisqaw) : array { $aqykuigiuwmmcieu = []; foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $aqykuigiuwmmcieu[$egkyssmuqcwaciya] = ManipulateFile::eyqooeqgoyokqeoq($egkyssmuqcwaciya); icouowaoycuuisqe: } gwyseusuceuwwccu: return $aqykuigiuwmmcieu; } public function gysieksskcaeyuom($egkyssmuqcwaciya) : string { return substr($egkyssmuqcwaciya, 0, strrpos($egkyssmuqcwaciya, "\134")); } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; if (!(!$this->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->moassygiomssikqe()) && !Manipulate::cmaecekuqkwmemms("\103\101\103\x48\105\137\x41\x44\126\x41\x4e\x43\x45\x44\137\x43\x41\103\110\105") && !$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\143\141\143\150\x65\x5f\147\145\x6e\x65\x72\141\x74\145\137\141\144\166\x61\x6e\x63\145\144\x5f\143\141\143\x68\145\137\146\x69\154\145"), true))) { goto ocmwuquguuqigose; } $umuecysoywoumgwo = false; $this->syiuacooagmooima("\x61\144\x76\141\156\143\x65\x64\x5f\143\x61\143\150\x65", __("\103\141\143\x68\145", PR__MDL__OPTIMIZATION), $this->moassygiomssikqe()); ocmwuquguuqigose: return $umuecysoywoumgwo; } public function moassygiomssikqe() : ?string { return trailingslashit(WPMU_PLUGIN_DIR); } }
