<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c342aab9e69             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Decorator\Decorator; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Engine; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\Common as BaseManipulateType; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; use Pmpr\Package\Optimization\Buffer\Config; use Pmpr\Package\Optimization\Buffer\Test; use Pmpr\Package\Optimization\Manipulate\Manipulate; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Notice; use Pmpr\Package\Optimization\Optimization; use Pmpr\Package\Optimization\Traits\MemoizeTrait; use Pmpr\Package\Optimization\Buffer\Buffer as BaseBuffer; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseManipulate; class Advanced extends Common { const aeoikmkskgikaqmk = "\x61\x64\166\141\156\143\145\144\x2d\143\x61\143\x68\x65\56\160\x68\160"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\151\x6e\137\x69\x6e\x69\164", [$this, "\171\145\x79\151\x67\x75\171\x65\x67\x6d\155\171\165\x73\145\x61"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto eeomcmuiqwgwwuqk; } $this->qeoakmiowssoqaom(); eeomcmuiqwgwwuqk: } public function qeoakmiowssoqaom() { $mkomwsiykqigmqca = $this->moassygiomssikqe(); $acqcekoeswseswws = $mkomwsiykqigmqca . self::aeoikmkskgikaqmk; $easioyqacwuockya = ManipulateFile::qucagkayiequsiia(Foundation::class); $gwcwqmuggecygcca = ManipulateFile::qucagkayiequsiia(Optimization::class); if (!($easioyqacwuockya && $gwcwqmuggecygcca)) { goto uookseqsmsqgweuy; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!(!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk())) { goto mseokuecmeoyoggk; } $cmkqisoeyioisqaw = [Test::class, Config::class, Buffer::class, BaseBuffer::class, Engine::class, Storage::class, Container::class, Filesystem::class, Decorator::class, DecoratorHook::class, LogTrait::class, AjaxTrait::class, HookTrait::class, SettingTrait::class, MemoizeTrait::class, TemplateTrait::class, SingletonTrait::class, ComponentTrait::class, TranslateTrait::class, BaseManipulate::class, ManipulateHook::class, ManipulateArray::class, ManipulateFormat::class, ManipulateString::class, ManipulateServer::class, BaseManipulateType::class, ManipulateValidation::class, BaseManipulateFormat::class, ConstantInterface::class]; $cmkqisoeyioisqaw = $this->cqmcaceygyqmuokq($cmkqisoeyioisqaw); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\141\x64\166\x61\x6e\x63\145\x64\x2e\x70\150\160", ["\x75\163\x65\x73" => [Test::class, Buffer::class, Config::class], "\x63\154\x61\163\x73\x65\163" => $cmkqisoeyioisqaw, "\156\x61\155\145\x73\x70\x61\143\145" => $this->gysieksskcaeyuom(Cache::class), "\x76\x65\x6e\x64\157\162\137\160\x61\164\150" => Foundation::couwksyewgyeooqe()->aksiegmauqiaueis(), "\x63\x61\x63\150\x65\x5f\160\x61\164\150" => $this->gskqygiceygcguyo(), "\143\x6f\x6e\146\151\147\x5f\x70\x61\164\x68" => Manipulate::cmaecekuqkwmemms("\117\x50\x54\x49\115\111\x5a\101\124\x49\x4f\x4e\137\103\x4f\x4e\106\x49\107\x5f\120\x41\x54\x48")]); $ewgwqamkygiqaawc = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\141\x64\166\141\156\143\x65\144\137\143\x61\143\150\145\x5f\146\151\154\x65"), $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, self::aeoikmkskgikaqmk, $ewgwqamkygiqaawc); Notice::info(sprintf(__("\x4f\x70\x74\151\155\x69\172\141\x74\x69\x6f\x6e\40\x41\144\166\141\156\143\x65\144\x20\x43\x61\143\x68\145\40\146\x69\x6c\145\x20\147\145\156\x65\x72\141\x74\x65\144\40\x73\x75\143\143\x65\163\163\x66\x75\x6c\154\171\x20\151\x6e\40\x25\163\x2e", PR__PKG__OPTIMIZATION), $mkomwsiykqigmqca), "\141\144\166\x61\x6e\143\x65\55\143\x61\x63\x68\145"); mseokuecmeoyoggk: uookseqsmsqgweuy: } public function cqmcaceygyqmuokq($cmkqisoeyioisqaw) : array { $aqykuigiuwmmcieu = []; foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $aqykuigiuwmmcieu[$egkyssmuqcwaciya] = ManipulateFile::eyqooeqgoyokqeoq($egkyssmuqcwaciya); esgyqksmcukeuwyk: } yeaqsiqgakskoykg: return $aqykuigiuwmmcieu; } public function gysieksskcaeyuom($egkyssmuqcwaciya) : string { return substr($egkyssmuqcwaciya, 0, strrpos($egkyssmuqcwaciya, "\134")); } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; if (!(!$this->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->moassygiomssikqe()) && !Manipulate::cmaecekuqkwmemms("\x43\101\x43\110\105\x5f\x41\x44\126\101\x4e\x43\105\104\137\x43\101\103\110\x45") && !$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\x63\141\x63\x68\145\137\147\x65\156\145\162\x61\164\145\137\141\x64\166\141\156\x63\145\x64\x5f\x63\x61\x63\150\x65\x5f\146\151\x6c\145"), true))) { goto iigmgswcogqemgao; } $umuecysoywoumgwo = false; Notice::ymqcyaqqcyuicwqu("\x63\x61\x63\x68\145\137\141\x64\x76\x61\156\143\x65\x64\x5f\143\141\x63\x68\145\x5f\x70\x65\162\155\151\163\163\151\157\x6e\x73", $this->moassygiomssikqe(), __("\103\141\x63\x68\x65", PR__PKG__OPTIMIZATION)); iigmgswcogqemgao: return $umuecysoywoumgwo; } public function moassygiomssikqe() : ?string { return trailingslashit(WPMU_PLUGIN_DIR); } }
