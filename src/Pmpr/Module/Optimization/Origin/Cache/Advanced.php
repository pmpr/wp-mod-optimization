<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e8fa75eb5af             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Decorator\Decorator; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Engine; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateComponent; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\Common as BaseManipulateType; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Notice\Traits\NoticeTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\ErrorTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Traits\MemoizeTrait; use Pmpr\Module\Optimization\Buffer\Buffer as BaseBuffer; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseManipulate; class Advanced extends Common { const aeoikmkskgikaqmk = "\141\x64\x76\141\x6e\143\x65\144\x2d\143\x61\x63\x68\x65\x2e\160\150\160"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\x69\156\x5f\x69\x6e\151\x74", [$this, "\171\x65\171\x69\x67\165\171\145\147\155\x6d\x79\x75\x73\x65\141"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\164\137\x64\151\163\141\x62\154\x65\144"), [$this, "\163\x77\x69\x65\141\171\145\x79\x73\x61\x77\x63\x65\145\x6b\x6b"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto qmokwkocmcyeyesc; } $this->qeoakmiowssoqaom(); qmokwkocmcyeyesc: } public function swieayeysawceekk() { if (!($iiaumsgauuyeqksw = $this->kcciqwskewsuaemk())) { goto mosuacsuaasssciu; } $iiaumsgauuyeqksw->remove($this->moassygiomssikqe() . self::aeoikmkskgikaqmk); mosuacsuaasssciu: } public function qeoakmiowssoqaom() { $mkomwsiykqigmqca = $this->moassygiomssikqe(); $acqcekoeswseswws = $mkomwsiykqigmqca . self::aeoikmkskgikaqmk; $easioyqacwuockya = ManipulateFile::qucagkayiequsiia(Foundation::class); $gwcwqmuggecygcca = ManipulateFile::qucagkayiequsiia(Optimization::class); if (!($easioyqacwuockya && $gwcwqmuggecygcca)) { goto kmooekeyemqgucci; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!(!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk())) { goto qksckewucmosemuo; } $cmkqisoeyioisqaw = [Test::class, Config::class, Buffer::class, BaseBuffer::class, Engine::class, Storage::class, Container::class, Filesystem::class, Decorator::class, DecoratorHook::class, LogTrait::class, AjaxTrait::class, HookTrait::class, ErrorTrait::class, NoticeTrait::class, SettingTrait::class, MemoizeTrait::class, TemplateTrait::class, SingletonTrait::class, ComponentTrait::class, TranslateTrait::class, BaseManipulate::class, ManipulateHook::class, ManipulateArray::class, ManipulateFormat::class, ManipulateString::class, ManipulateServer::class, ManipulateSetting::class, BaseManipulateType::class, ManipulateComponent::class, ManipulateValidation::class, BaseManipulateFormat::class, ConstantInterface::class]; $cmkqisoeyioisqaw = $this->cqmcaceygyqmuokq($cmkqisoeyioisqaw); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x61\144\166\141\156\143\x65\x64\x2e\160\x68\x70", ["\165\x73\x65\x73" => [Test::class, Buffer::class, Config::class], "\x63\x6c\141\x73\163\145\163" => $cmkqisoeyioisqaw, "\x6e\141\155\x65\x73\x70\141\143\145" => $this->gysieksskcaeyuom(Cache::class), "\166\x65\x6e\x64\157\162\x5f\x70\141\x74\150" => Foundation::couwksyewgyeooqe()->aksiegmauqiaueis(), "\143\x61\x63\x68\145\137\160\x61\x74\150" => $this->gskqygiceygcguyo(), "\143\x6f\x6e\x66\151\x67\x5f\x70\x61\164\x68" => Manipulate::cmaecekuqkwmemms("\117\120\x54\111\115\111\132\x41\124\111\x4f\x4e\137\103\117\x4e\x46\111\107\x5f\120\101\124\x48")]); $ewgwqamkygiqaawc = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\141\144\x76\x61\x6e\143\145\x64\137\143\141\x63\x68\x65\137\146\151\x6c\145"), $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, self::aeoikmkskgikaqmk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\160\x74\151\155\x69\172\141\164\x69\157\156\x20\x41\x64\x76\141\x6e\143\145\144\x20\103\141\x63\150\x65\40\146\151\x6c\x65\40\x67\x65\156\145\162\x61\164\145\144\40\x73\x75\x63\143\x65\163\163\x66\x75\x6c\154\x79\40\x69\x6e\x20\45\x73\x2e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca), "\x61\x64\166\141\x6e\143\x65\55\143\141\x63\150\x65", self::smkwuwawwaqyimcq); qksckewucmosemuo: kmooekeyemqgucci: } public function cqmcaceygyqmuokq($cmkqisoeyioisqaw) : array { $aqykuigiuwmmcieu = []; foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $aqykuigiuwmmcieu[$egkyssmuqcwaciya] = ManipulateFile::eyqooeqgoyokqeoq($egkyssmuqcwaciya); cmmusgkieoqyymgs: } skuuyysooocugyww: return $aqykuigiuwmmcieu; } public function gysieksskcaeyuom($egkyssmuqcwaciya) : string { return substr($egkyssmuqcwaciya, 0, strrpos($egkyssmuqcwaciya, "\134")); } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; if (!(!$this->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->moassygiomssikqe()) && !Manipulate::cmaecekuqkwmemms("\x43\101\x43\110\x45\137\101\x44\126\101\116\x43\x45\104\137\x43\101\103\110\105") && !$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x63\x61\x63\150\145\x5f\147\145\x6e\145\x72\141\164\x65\137\141\x64\x76\141\156\x63\145\x64\x5f\143\x61\x63\x68\x65\137\x66\x69\154\145"), true))) { goto mkgmaguyswskyioa; } $umuecysoywoumgwo = false; $this->syiuacooagmooima("\141\144\x76\141\x6e\143\x65\144\137\x63\141\x63\150\x65", __("\x43\x61\x63\150\x65", PR__MDL__OPTIMIZATION), $this->moassygiomssikqe()); mkgmaguyswskyioa: return $umuecysoywoumgwo; } public function moassygiomssikqe() : ?string { return trailingslashit(WPMU_PLUGIN_DIR); } }
