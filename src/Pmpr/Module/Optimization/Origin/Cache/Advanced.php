<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62d7c3928abb7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Decorator\Decorator; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Engine; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateComponent; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\Common as BaseManipulateType; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Notice\Traits\NoticeTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\ErrorTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Traits\MemoizeTrait; use Pmpr\Module\Optimization\Buffer\Buffer as BaseBuffer; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseManipulate; class Advanced extends Common { const aeoikmkskgikaqmk = "\x61\144\166\141\156\143\145\x64\55\143\x61\143\150\x65\x2e\x70\x68\x70"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\151\x6e\x5f\x69\156\x69\x74", [$this, "\x79\145\171\151\147\x75\x79\x65\147\155\155\x79\165\163\145\x61"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\164\137\144\x69\x73\x61\x62\154\145\x64"), [$this, "\163\x77\151\145\x61\x79\x65\171\x73\x61\x77\x63\145\145\x6b\x6b"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto uqcsksaywyqeumig; } $this->qeoakmiowssoqaom(); uqcsksaywyqeumig: } public function swieayeysawceekk() { if (!($iiaumsgauuyeqksw = $this->kcciqwskewsuaemk())) { goto yggmaskeguaqkusc; } $iiaumsgauuyeqksw->remove($this->moassygiomssikqe() . self::aeoikmkskgikaqmk); yggmaskeguaqkusc: } public function qeoakmiowssoqaom() { $mkomwsiykqigmqca = $this->moassygiomssikqe(); $acqcekoeswseswws = $mkomwsiykqigmqca . self::aeoikmkskgikaqmk; $easioyqacwuockya = ManipulateFile::qucagkayiequsiia(Foundation::class); $gwcwqmuggecygcca = ManipulateFile::qucagkayiequsiia(Optimization::class); if (!($easioyqacwuockya && $gwcwqmuggecygcca)) { goto jsmisuccwyukksgc; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!(!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk())) { goto ukwoswyyogmsygqg; } $cmkqisoeyioisqaw = [Test::class, Config::class, Buffer::class, BaseBuffer::class, Engine::class, Storage::class, Container::class, Filesystem::class, Decorator::class, DecoratorHook::class, LogTrait::class, AjaxTrait::class, HookTrait::class, ErrorTrait::class, NoticeTrait::class, SettingTrait::class, MemoizeTrait::class, TemplateTrait::class, SingletonTrait::class, ComponentTrait::class, TranslateTrait::class, BaseManipulate::class, ManipulateHook::class, ManipulateArray::class, ManipulateFormat::class, ManipulateString::class, ManipulateServer::class, ManipulateSetting::class, BaseManipulateType::class, ManipulateComponent::class, ManipulateValidation::class, BaseManipulateFormat::class, ConstantInterface::class]; $cmkqisoeyioisqaw = $this->cqmcaceygyqmuokq($cmkqisoeyioisqaw); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\141\x64\x76\141\156\143\x65\x64\56\x70\x68\160", ["\165\163\145\163" => [Test::class, Buffer::class, Config::class], "\143\154\141\163\x73\145\163" => $cmkqisoeyioisqaw, "\x6e\x61\x6d\x65\163\x70\141\x63\x65" => $this->gysieksskcaeyuom(Cache::class), "\166\x65\156\144\x6f\x72\x5f\160\141\164\x68" => Foundation::couwksyewgyeooqe()->aksiegmauqiaueis(), "\143\x61\143\150\x65\137\x70\141\164\150" => $this->gskqygiceygcguyo(), "\143\x6f\156\146\151\147\x5f\x70\x61\x74\x68" => Manipulate::cmaecekuqkwmemms("\117\120\x54\x49\x4d\111\132\101\x54\111\x4f\116\x5f\103\x4f\116\106\111\107\x5f\120\x41\124\110")]); $ewgwqamkygiqaawc = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\141\144\166\141\x6e\x63\145\144\137\143\x61\x63\x68\145\137\146\151\x6c\x65"), $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, self::aeoikmkskgikaqmk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\x70\164\x69\x6d\x69\x7a\x61\164\151\x6f\156\x20\x41\x64\166\x61\156\x63\145\x64\x20\x43\141\x63\x68\145\40\x66\x69\x6c\145\40\147\145\x6e\x65\162\x61\164\x65\144\x20\x73\x75\143\143\x65\163\163\x66\165\154\154\x79\40\x69\156\x20\x25\163\56", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca), "\141\x64\x76\x61\156\143\145\x2d\x63\141\x63\150\x65", self::smkwuwawwaqyimcq); ukwoswyyogmsygqg: jsmisuccwyukksgc: } public function cqmcaceygyqmuokq($cmkqisoeyioisqaw) : array { $aqykuigiuwmmcieu = []; foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $aqykuigiuwmmcieu[$egkyssmuqcwaciya] = ManipulateFile::eyqooeqgoyokqeoq($egkyssmuqcwaciya); yqicwmekwuoywyus: } kwmiwaecqcgiaqye: return $aqykuigiuwmmcieu; } public function gysieksskcaeyuom($egkyssmuqcwaciya) : string { return substr($egkyssmuqcwaciya, 0, strrpos($egkyssmuqcwaciya, "\x5c")); } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; if (!(!$this->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->moassygiomssikqe()) && !Manipulate::cmaecekuqkwmemms("\103\x41\103\x48\105\x5f\x41\104\126\101\116\x43\105\x44\x5f\x43\x41\103\110\105") && !$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\143\x61\143\150\145\137\147\x65\156\145\x72\141\164\145\x5f\x61\144\166\141\156\143\145\144\137\x63\141\x63\150\x65\x5f\146\x69\x6c\145"), true))) { goto gkoaeuekqockuoiq; } $umuecysoywoumgwo = false; $this->syiuacooagmooima("\141\x64\x76\141\x6e\143\x65\144\137\143\141\x63\150\145", __("\103\x61\x63\150\145", PR__MDL__OPTIMIZATION), $this->moassygiomssikqe()); gkoaeuekqockuoiq: return $umuecysoywoumgwo; } public function moassygiomssikqe() : ?string { return trailingslashit(WPMU_PLUGIN_DIR); } }
