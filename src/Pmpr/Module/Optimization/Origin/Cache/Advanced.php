<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             630109f80ebad             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Decorator\Decorator; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Engine; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateComponent; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\Common as BaseManipulateType; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Notice\Traits\NoticeTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\ErrorTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Traits\MemoizeTrait; use Pmpr\Module\Optimization\Buffer\Buffer as BaseBuffer; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseManipulate; class Advanced extends Common { const aeoikmkskgikaqmk = "\141\x64\x76\141\156\143\145\x64\55\x63\x61\143\x68\x65\56\160\150\x70"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\151\156\x5f\151\156\x69\164", [$this, "\171\145\x79\151\147\165\171\145\147\x6d\155\171\165\163\x65\141"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\164\137\144\151\x73\141\142\154\145\144"), [$this, "\163\x77\x69\145\x61\171\145\171\163\141\167\143\x65\145\x6b\153"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto uqugcugeomqakcqo; } $this->qeoakmiowssoqaom(); uqugcugeomqakcqo: } public function swieayeysawceekk() { if (!($iiaumsgauuyeqksw = $this->kcciqwskewsuaemk())) { goto qmoisuweiskkekca; } $iiaumsgauuyeqksw->remove($this->moassygiomssikqe() . self::aeoikmkskgikaqmk); qmoisuweiskkekca: } public function qeoakmiowssoqaom() { $mkomwsiykqigmqca = $this->moassygiomssikqe(); $acqcekoeswseswws = $mkomwsiykqigmqca . self::aeoikmkskgikaqmk; $easioyqacwuockya = ManipulateFile::qucagkayiequsiia(Foundation::class); $gwcwqmuggecygcca = ManipulateFile::qucagkayiequsiia(Optimization::class); if (!($easioyqacwuockya && $gwcwqmuggecygcca)) { goto gwyseusuceuwwccu; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!(!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk())) { goto wywwieycqskuqcwc; } $cmkqisoeyioisqaw = [Test::class, Config::class, Buffer::class, BaseBuffer::class, Engine::class, Storage::class, Container::class, Filesystem::class, Decorator::class, DecoratorHook::class, LogTrait::class, AjaxTrait::class, HookTrait::class, ErrorTrait::class, NoticeTrait::class, SettingTrait::class, MemoizeTrait::class, TemplateTrait::class, SingletonTrait::class, ComponentTrait::class, TranslateTrait::class, BaseManipulate::class, ManipulateHook::class, ManipulateArray::class, ManipulateFormat::class, ManipulateString::class, ManipulateServer::class, ManipulateSetting::class, BaseManipulateType::class, ManipulateComponent::class, ManipulateValidation::class, BaseManipulateFormat::class, ConstantInterface::class]; $cmkqisoeyioisqaw = $this->cqmcaceygyqmuokq($cmkqisoeyioisqaw); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\141\144\166\141\156\x63\145\144\x2e\160\x68\x70", ["\165\x73\x65\163" => [Test::class, Buffer::class, Config::class], "\143\x6c\x61\163\x73\145\x73" => $cmkqisoeyioisqaw, "\156\141\x6d\x65\x73\x70\141\x63\x65" => $this->gysieksskcaeyuom(Cache::class), "\166\145\156\144\157\162\137\x70\x61\x74\150" => Foundation::couwksyewgyeooqe()->aksiegmauqiaueis(), "\143\141\x63\x68\x65\137\160\141\164\150" => $this->gskqygiceygcguyo(), "\143\x6f\x6e\x66\151\x67\137\x70\141\164\150" => Manipulate::cmaecekuqkwmemms("\x4f\x50\124\111\115\x49\x5a\x41\124\111\x4f\x4e\x5f\103\117\x4e\106\x49\107\137\x50\101\124\110")]); $ewgwqamkygiqaawc = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\x61\x64\166\141\156\143\x65\144\x5f\x63\141\x63\x68\145\x5f\146\151\x6c\145"), $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, self::aeoikmkskgikaqmk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\x70\164\x69\x6d\x69\x7a\x61\164\151\x6f\156\40\101\144\x76\141\156\x63\145\144\40\x43\141\143\150\x65\40\146\151\154\145\x20\147\145\x6e\145\x72\141\164\145\x64\x20\x73\x75\143\143\x65\163\163\146\x75\154\x6c\171\x20\x69\156\40\x25\x73\x2e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca), "\141\x64\x76\x61\156\143\145\55\143\141\143\x68\145", self::smkwuwawwaqyimcq); wywwieycqskuqcwc: gwyseusuceuwwccu: } public function cqmcaceygyqmuokq($cmkqisoeyioisqaw) : array { $aqykuigiuwmmcieu = []; foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $aqykuigiuwmmcieu[$egkyssmuqcwaciya] = ManipulateFile::eyqooeqgoyokqeoq($egkyssmuqcwaciya); ocmwuquguuqigose: } icouowaoycuuisqe: return $aqykuigiuwmmcieu; } public function gysieksskcaeyuom($egkyssmuqcwaciya) : string { return substr($egkyssmuqcwaciya, 0, strrpos($egkyssmuqcwaciya, "\134")); } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; if (!(!$this->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->moassygiomssikqe()) && !Manipulate::cmaecekuqkwmemms("\x43\x41\x43\x48\x45\137\x41\104\x56\x41\x4e\x43\x45\x44\x5f\103\x41\103\110\x45") && !$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\x5f\143\141\x63\x68\x65\137\x67\x65\x6e\x65\162\x61\x74\x65\137\141\144\x76\141\156\143\x65\x64\x5f\x63\x61\143\150\x65\x5f\146\151\x6c\145"), true))) { goto kmqusaiaiogecyiy; } $umuecysoywoumgwo = false; $this->syiuacooagmooima("\x61\144\x76\x61\156\x63\145\144\137\143\141\143\x68\145", __("\x43\141\143\x68\145", PR__MDL__OPTIMIZATION), $this->moassygiomssikqe()); kmqusaiaiogecyiy: return $umuecysoywoumgwo; } public function moassygiomssikqe() : ?string { return trailingslashit(WPMU_PLUGIN_DIR); } }
