<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6326c8204f364             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Extension\Plugin\Woocommerce; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Module\Optimization\Extension\Common; use Pmpr\Module\Optimization\Purge\Traits\PurgeTrait; class Purge extends Common { use PurgeTrait; public function wigskegsqequoeks() { if (!$this->weysguygiseoukqw(Setting::qcckqskeimawaeqi)) { goto emioyucskiowqumg; } $this->qcsmikeggeemccuu("\x77\x6f\157\143\157\x6d\x6d\x65\x72\143\x65\x5f\165\160\x64\x61\x74\145\x64\137\160\x72\157\x64\165\143\164\137\163\164\x6f\x63\153", [$this, "\141\143\153\143\x63\143\157\167\x6d\x67\163\143\x6f\171\x75\x6b"], PHP_INT_MAX); emioyucskiowqumg: if (!$this->weysguygiseoukqw(Setting::oqosscouoeiqyeak)) { goto jkaemsuwyyoamwim; } $this->qcsmikeggeemccuu("\167\143\137\141\146\164\145\162\x5f\160\162\x6f\x64\x75\x63\x74\x73\x5f\145\x6e\144\151\156\x67\137\163\141\154\x65\x73", [$this, "\x6d\165\x69\147\151\x65\x67\163\161\x61\171\157\167\x63\157\143"], PHP_INT_MAX)->qcsmikeggeemccuu("\167\143\x5f\141\146\164\x65\x72\137\x70\162\157\144\165\143\x74\x73\x5f\163\164\x61\162\x74\x69\156\147\x5f\163\141\154\x65\x73", [$this, "\155\165\x69\147\x69\145\147\163\x71\x61\171\157\x77\143\x6f\x63"], PHP_INT_MAX); jkaemsuwyyoamwim: } public function ackcccowmgscoyuk($product) { if (!function_exists("\167\143\x5f\x67\x65\x74\137\x6f\x72\144\x65\x72")) { goto koiyaaokigmamqyc; } $auwuoyyagaiegwae = []; if (!($suaemuyiacqyugsm = DecoratorWoocommerce::imsiwqgqaeceoomu("\163\x68\x6f\x70"))) { goto suwsiaeoumiwkiqg; } $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($suaemuyiacqyugsm); suwsiaeoumiwkiqg: $eyscsimwcyaqakqg = wc_get_product_cat_ids($product); foreach ($eyscsimwcyaqakqg as $guwumyyyakswawas) { $auwuoyyagaiegwae[] = $this->qmgcisuuikgmqcsu($guwumyyyakswawas); amyaoueckysgmmas: } yoauoocuckogmsuw: $auwuoyyagaiegwae = array_merge($auwuoyyagaiegwae, $this->cekqoisoaceaqiam($product)); $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $this->kggeaycqkokcquqk($auwuoyyagaiegwae); $this->oaumimwssciwumys("\120\165\x72\147\x65\x20\x70\162\157\x64\x75\143\164\40\x70\141\147\x65\x73\40\x61\156\144\40\x63\x61\x74\x65\x67\157\x72\x69\x65\x73\40\x66\157\162\x20\x57\157\x6f\103\x6f\x6d\x6d\145\x72\143\145\40\157\162\x64\x65\x72"); koiyaaokigmamqyc: } public function muigiegsqayowcoc($iskcmykisgqeqkcy) { $auwuoyyagaiegwae = []; if (!(is_array($iskcmykisgqeqkcy) && $iskcmykisgqeqkcy)) { goto aqeyqwuywqcmuoce; } foreach ($iskcmykisgqeqkcy as $product) { $migiiksoiymissge = $this->ycqquoiyyuesegsy($product); if (!$migiiksoiymissge) { goto kwcscewawgicomok; } $auwuoyyagaiegwae[] = $migiiksoiymissge; kwcscewawgicomok: yosyyiksyyscacus: } qiqegseqwywcmwoe: if (!$auwuoyyagaiegwae) { goto kikkkocywiyuyuqw; } $this->kggeaycqkokcquqk($auwuoyyagaiegwae); kikkkocywiyuyuqw: aqeyqwuywqcmuoce: } }
