<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ccf32654208             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Extension\Plugin\Woocommerce; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Module\Optimization\Extension\Common; use Pmpr\Module\Optimization\Purge\Traits\PurgeTrait; class Purge extends Common { use PurgeTrait; public function wigskegsqequoeks() { if (!$this->weysguygiseoukqw(Setting::qcckqskeimawaeqi)) { goto mqicocmqegwukkwg; } $this->qcsmikeggeemccuu("\x77\157\x6f\143\157\x6d\x6d\145\x72\143\x65\x5f\x75\160\144\141\x74\145\144\x5f\x70\162\x6f\144\165\x63\164\x5f\x73\164\157\143\153", [$this, "\141\143\153\x63\143\143\x6f\167\155\x67\163\143\x6f\x79\x75\x6b"], PHP_INT_MAX); mqicocmqegwukkwg: if (!$this->weysguygiseoukqw(Setting::oqosscouoeiqyeak)) { goto qgeugwymkkiacwoc; } $this->qcsmikeggeemccuu("\x77\143\137\141\x66\x74\145\x72\137\160\x72\157\x64\x75\143\164\x73\x5f\x65\156\144\x69\156\147\137\x73\x61\154\145\x73", [$this, "\155\x75\x69\147\x69\145\x67\163\161\141\171\x6f\x77\x63\157\x63"], PHP_INT_MAX)->qcsmikeggeemccuu("\x77\143\137\141\146\x74\145\x72\137\x70\162\x6f\x64\x75\143\x74\163\137\163\164\x61\x72\164\151\156\x67\137\x73\141\x6c\x65\163", [$this, "\155\x75\x69\x67\x69\145\x67\163\x71\141\x79\x6f\167\143\157\x63"], PHP_INT_MAX); qgeugwymkkiacwoc: } public function ackcccowmgscoyuk($product) { if (!function_exists("\x77\143\137\x67\x65\x74\137\157\x72\144\145\162")) { goto acsqgiuageaasiyy; } $auwuoyyagaiegwae = []; if (!($suaemuyiacqyugsm = DecoratorWoocommerce::imsiwqgqaeceoomu("\x73\150\157\160"))) { goto emmsycooskoqmgeg; } $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($suaemuyiacqyugsm); emmsycooskoqmgeg: $eyscsimwcyaqakqg = wc_get_product_cat_ids($product); foreach ($eyscsimwcyaqakqg as $guwumyyyakswawas) { $auwuoyyagaiegwae[] = $this->qmgcisuuikgmqcsu($guwumyyyakswawas); mugqyyeayeyggqqk: } ouamogymawucwswu: $auwuoyyagaiegwae = array_merge($auwuoyyagaiegwae, $this->wgaamqmkuoaqgaqw($product)); $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $this->kggeaycqkokcquqk($auwuoyyagaiegwae); $this->oaumimwssciwumys("\120\x75\x72\147\145\40\160\162\157\x64\165\143\164\x20\160\x61\x67\x65\x73\40\x61\156\144\x20\143\x61\x74\x65\147\x6f\x72\151\145\x73\x20\x66\x6f\162\40\127\x6f\157\x43\157\155\x6d\145\162\x63\145\40\x6f\162\144\x65\x72"); acsqgiuageaasiyy: } public function muigiegsqayowcoc($iskcmykisgqeqkcy) { $auwuoyyagaiegwae = []; if (!(is_array($iskcmykisgqeqkcy) && $iskcmykisgqeqkcy)) { goto kkumywowcoycymeo; } foreach ($iskcmykisgqeqkcy as $product) { $migiiksoiymissge = $this->ycqquoiyyuesegsy($product); if (!$migiiksoiymissge) { goto wyuemgggaqogsmsq; } $auwuoyyagaiegwae[] = $migiiksoiymissge; wyuemgggaqogsmsq: samwkqgwouggsguc: } oomguqikqokqwgku: if (!$auwuoyyagaiegwae) { goto guykyqecgswcsmws; } $this->kggeaycqkokcquqk($auwuoyyagaiegwae); guykyqecgswcsmws: kkumywowcoycymeo: } }
