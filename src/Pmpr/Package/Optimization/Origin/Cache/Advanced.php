<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d45f1553980             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Decorator\Decorator; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Engine; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\Common as BaseManipulateType; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; use Pmpr\Package\Optimization\Buffer\Config; use Pmpr\Package\Optimization\Buffer\Test; use Pmpr\Package\Optimization\Manipulate\Manipulate; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Notice; use Pmpr\Package\Optimization\Optimization; use Pmpr\Package\Optimization\Traits\MemoizeTrait; use Pmpr\Package\Optimization\Buffer\Buffer as BaseBuffer; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseManipulate; class Advanced extends Common { const aeoikmkskgikaqmk = "\141\x64\166\x61\156\143\145\x64\x2d\143\141\x63\150\x65\56\x70\150\x70"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\x69\x6e\137\151\156\x69\x74", [$this, "\x79\x65\x79\151\147\x75\171\x65\x67\x6d\155\x79\165\163\x65\x61"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto omqyuuomwywmqeiq; } $this->qeoakmiowssoqaom(); omqyuuomwywmqeiq: } public function qeoakmiowssoqaom() { $mkomwsiykqigmqca = $this->moassygiomssikqe(); $acqcekoeswseswws = $mkomwsiykqigmqca . self::aeoikmkskgikaqmk; $easioyqacwuockya = ManipulateFile::qucagkayiequsiia(Foundation::class); $gwcwqmuggecygcca = ManipulateFile::qucagkayiequsiia(Optimization::class); if (!($easioyqacwuockya && $gwcwqmuggecygcca)) { goto misiasooemyskoay; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!(!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk())) { goto oysyuiqmsokoykaq; } $cmkqisoeyioisqaw = [Test::class, Config::class, Buffer::class, BaseBuffer::class, Engine::class, Storage::class, Container::class, Filesystem::class, Decorator::class, DecoratorHook::class, LogTrait::class, AjaxTrait::class, HookTrait::class, SettingTrait::class, MemoizeTrait::class, TemplateTrait::class, SingletonTrait::class, ComponentTrait::class, TranslateTrait::class, BaseManipulate::class, ManipulateHook::class, ManipulateArray::class, ManipulateFormat::class, ManipulateString::class, ManipulateServer::class, BaseManipulateType::class, ManipulateValidation::class, BaseManipulateFormat::class, ConstantInterface::class]; $cmkqisoeyioisqaw = $this->cqmcaceygyqmuokq($cmkqisoeyioisqaw); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\141\x64\166\141\156\x63\x65\144\56\x70\x68\x70", ["\165\163\x65\x73" => [Test::class, Buffer::class, Config::class], "\143\x6c\x61\163\163\x65\163" => $cmkqisoeyioisqaw, "\x6e\141\x6d\x65\163\160\x61\x63\x65" => $this->gysieksskcaeyuom(Cache::class), "\x76\145\x6e\144\x6f\x72\137\x70\x61\164\x68" => Foundation::couwksyewgyeooqe()->aksiegmauqiaueis(), "\143\141\143\150\x65\137\x70\141\x74\x68" => $this->gskqygiceygcguyo(), "\143\157\156\146\151\147\x5f\x70\x61\x74\150" => Manipulate::cmaecekuqkwmemms("\x4f\x50\124\x49\x4d\x49\132\101\x54\111\117\x4e\x5f\103\117\116\x46\111\x47\x5f\120\101\x54\110")]); $ewgwqamkygiqaawc = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\141\x64\x76\x61\x6e\x63\x65\x64\x5f\143\x61\x63\x68\145\x5f\146\x69\154\145"), $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, self::aeoikmkskgikaqmk, $ewgwqamkygiqaawc); Notice::info(sprintf(__("\x4f\x70\164\x69\155\151\172\x61\x74\151\157\x6e\40\101\x64\x76\141\x6e\x63\x65\x64\x20\x43\x61\143\x68\x65\x20\146\151\x6c\145\x20\147\145\x6e\145\162\x61\164\x65\x64\x20\x73\165\143\143\x65\163\163\x66\x75\x6c\x6c\x79\x20\x69\x6e\40\45\163\56", PR__PKG__OPTIMIZATION), $mkomwsiykqigmqca), "\x61\x64\x76\141\x6e\143\x65\55\143\141\x63\x68\145"); oysyuiqmsokoykaq: misiasooemyskoay: } public function cqmcaceygyqmuokq($cmkqisoeyioisqaw) : array { $aqykuigiuwmmcieu = []; foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $aqykuigiuwmmcieu[$egkyssmuqcwaciya] = ManipulateFile::eyqooeqgoyokqeoq($egkyssmuqcwaciya); cqkyumayoemqsueu: } eomqeimoequmagum: return $aqykuigiuwmmcieu; } public function gysieksskcaeyuom($egkyssmuqcwaciya) : string { return substr($egkyssmuqcwaciya, 0, strrpos($egkyssmuqcwaciya, "\134")); } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; if (!(!$this->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->moassygiomssikqe()) && !Manipulate::cmaecekuqkwmemms("\103\x41\x43\110\105\x5f\101\104\x56\101\116\x43\105\x44\137\103\101\103\x48\x45") && !$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\x63\141\143\150\x65\137\x67\x65\156\145\162\x61\164\x65\x5f\141\x64\x76\x61\x6e\143\145\x64\x5f\143\x61\x63\150\145\x5f\146\x69\x6c\x65"), true))) { goto ksqmcugkcmsooeaw; } $umuecysoywoumgwo = false; Notice::ymqcyaqqcyuicwqu("\143\141\x63\x68\x65\x5f\141\144\166\141\x6e\x63\x65\144\137\143\x61\143\150\x65\137\x70\145\162\155\x69\x73\x73\151\x6f\156\x73", $this->moassygiomssikqe(), __("\x43\141\143\150\145", PR__PKG__OPTIMIZATION)); ksqmcugkcmsooeaw: return $umuecysoywoumgwo; } public function moassygiomssikqe() : ?string { return trailingslashit(WPMU_PLUGIN_DIR); } }
