<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             622137a05c93e             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Decorator\Decorator; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Engine; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\Common as BaseManipulateType; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; use Pmpr\Package\Optimization\Buffer\Config; use Pmpr\Package\Optimization\Buffer\Test; use Pmpr\Package\Optimization\Manipulate\Manipulate; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Notice; use Pmpr\Package\Optimization\Optimization; use Pmpr\Package\Optimization\Traits\MemoizeTrait; use Pmpr\Package\Optimization\Buffer\Buffer as BaseBuffer; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseManipulate; class Advanced extends Common { const aeoikmkskgikaqmk = "\x61\x64\166\141\x6e\143\x65\x64\x2d\143\x61\x63\x68\145\56\x70\x68\x70"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\x69\156\137\151\156\151\x74", [$this, "\171\x65\171\x69\147\x75\171\145\x67\x6d\155\171\x75\163\x65\x61"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto qcwkymcgqacaaywc; } $this->qeoakmiowssoqaom(); qcwkymcgqacaaywc: } public function qeoakmiowssoqaom() { $mkomwsiykqigmqca = $this->moassygiomssikqe(); $acqcekoeswseswws = $mkomwsiykqigmqca . self::aeoikmkskgikaqmk; $easioyqacwuockya = ManipulateFile::qucagkayiequsiia(Foundation::class); $gwcwqmuggecygcca = ManipulateFile::qucagkayiequsiia(Optimization::class); if (!($easioyqacwuockya && $gwcwqmuggecygcca)) { goto qwsmiaegmcwuskwi; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!(!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk())) { goto wmcucyuieqgqisis; } $cmkqisoeyioisqaw = [Test::class, Config::class, Buffer::class, BaseBuffer::class, Engine::class, Storage::class, Container::class, Filesystem::class, Decorator::class, DecoratorHook::class, LogTrait::class, AjaxTrait::class, HookTrait::class, SettingTrait::class, MemoizeTrait::class, TemplateTrait::class, SingletonTrait::class, ComponentTrait::class, TranslateTrait::class, BaseManipulate::class, ManipulateHook::class, ManipulateArray::class, ManipulateFormat::class, ManipulateString::class, ManipulateServer::class, BaseManipulateType::class, ManipulateValidation::class, BaseManipulateFormat::class, ConstantInterface::class]; $cmkqisoeyioisqaw = $this->cqmcaceygyqmuokq($cmkqisoeyioisqaw); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\141\x64\166\x61\156\143\145\144\56\160\x68\160", ["\165\x73\x65\x73" => [Test::class, Buffer::class, Config::class], "\x63\x6c\141\163\163\x65\163" => $cmkqisoeyioisqaw, "\156\x61\155\x65\x73\160\141\143\x65" => $this->gysieksskcaeyuom(Cache::class), "\x76\x65\156\x64\x6f\162\137\160\141\164\x68" => Foundation::couwksyewgyeooqe()->aksiegmauqiaueis(), "\x63\x61\x63\150\x65\137\160\141\x74\x68" => $this->gskqygiceygcguyo(), "\x63\x6f\156\146\151\x67\137\x70\141\x74\150" => Manipulate::cmaecekuqkwmemms("\117\120\x54\111\115\x49\x5a\x41\124\x49\x4f\116\137\103\x4f\116\106\x49\x47\x5f\x50\101\x54\x48")]); $ewgwqamkygiqaawc = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\x61\144\166\x61\156\x63\x65\144\x5f\x63\x61\x63\150\x65\137\146\x69\x6c\145"), $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, self::aeoikmkskgikaqmk, $ewgwqamkygiqaawc); Notice::info(sprintf(__("\x4f\160\x74\x69\155\151\x7a\x61\164\151\x6f\156\40\101\x64\x76\x61\156\x63\x65\x64\x20\x43\141\143\150\x65\x20\x66\151\x6c\x65\x20\x67\x65\156\145\162\141\x74\x65\144\40\163\165\x63\143\x65\163\x73\146\165\x6c\154\x79\40\151\x6e\40\x25\x73\56", PR__PKG__OPTIMIZATION), $mkomwsiykqigmqca), "\141\x64\x76\141\x6e\143\x65\x2d\143\141\143\x68\145"); wmcucyuieqgqisis: qwsmiaegmcwuskwi: } public function cqmcaceygyqmuokq($cmkqisoeyioisqaw) : array { $aqykuigiuwmmcieu = []; foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $aqykuigiuwmmcieu[$egkyssmuqcwaciya] = ManipulateFile::eyqooeqgoyokqeoq($egkyssmuqcwaciya); usmagcaocwiugqum: } yyyyawaqcowsgqcs: return $aqykuigiuwmmcieu; } public function gysieksskcaeyuom($egkyssmuqcwaciya) : string { return substr($egkyssmuqcwaciya, 0, strrpos($egkyssmuqcwaciya, "\x5c")); } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; if (!(!$this->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->moassygiomssikqe()) && !Manipulate::cmaecekuqkwmemms("\x43\x41\x43\x48\105\x5f\101\x44\126\101\116\x43\105\104\137\103\101\x43\x48\105") && !$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\143\x61\143\x68\145\x5f\147\x65\x6e\145\x72\x61\x74\x65\137\141\144\166\141\x6e\143\x65\x64\x5f\x63\141\x63\x68\145\x5f\x66\151\x6c\145"), true))) { goto sikmqkecsiyciaei; } $umuecysoywoumgwo = false; Notice::ymqcyaqqcyuicwqu("\143\141\x63\x68\145\x5f\x61\144\166\x61\x6e\143\x65\144\x5f\x63\x61\143\x68\x65\x5f\160\x65\162\x6d\x69\x73\163\151\x6f\x6e\x73", $this->moassygiomssikqe(), __("\x43\141\143\x68\145", PR__PKG__OPTIMIZATION)); sikmqkecsiyciaei: return $umuecysoywoumgwo; } public function moassygiomssikqe() : ?string { return trailingslashit(WPMU_PLUGIN_DIR); } }
