<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d04ce34c3b0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Extension\Plugin\Woocommerce; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Module\Optimization\Extension\Common; use Pmpr\Module\Optimization\Purge\Traits\PurgeTrait; class Purge extends Common { use PurgeTrait; public function wigskegsqequoeks() { if (!$this->weysguygiseoukqw(Setting::qcckqskeimawaeqi)) { goto mqicocmqegwukkwg; } $this->qcsmikeggeemccuu("\167\x6f\157\x63\157\x6d\x6d\x65\x72\143\145\x5f\x75\160\144\x61\x74\x65\144\137\x70\162\157\144\165\x63\164\x5f\163\x74\157\x63\153", [$this, "\141\x63\153\x63\143\x63\157\167\x6d\147\163\x63\x6f\x79\x75\x6b"], PHP_INT_MAX); mqicocmqegwukkwg: if (!$this->weysguygiseoukqw(Setting::oqosscouoeiqyeak)) { goto qgeugwymkkiacwoc; } $this->qcsmikeggeemccuu("\x77\143\x5f\141\146\x74\x65\162\137\x70\x72\x6f\x64\165\x63\164\163\137\x65\156\144\x69\156\x67\x5f\x73\141\x6c\x65\163", [$this, "\x6d\x75\151\x67\x69\145\147\x73\161\141\x79\x6f\x77\x63\157\143"], PHP_INT_MAX)->qcsmikeggeemccuu("\167\x63\x5f\141\146\164\145\x72\137\160\162\157\x64\165\143\x74\x73\x5f\x73\x74\141\x72\x74\151\x6e\147\137\163\141\154\x65\163", [$this, "\x6d\x75\151\x67\151\145\x67\x73\x71\x61\x79\x6f\x77\x63\x6f\143"], PHP_INT_MAX); qgeugwymkkiacwoc: } public function ackcccowmgscoyuk($product) { if (!function_exists("\x77\x63\137\147\x65\x74\137\157\162\x64\x65\162")) { goto acsqgiuageaasiyy; } $auwuoyyagaiegwae = []; if (!($suaemuyiacqyugsm = DecoratorWoocommerce::imsiwqgqaeceoomu("\163\150\x6f\160"))) { goto emmsycooskoqmgeg; } $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($suaemuyiacqyugsm); emmsycooskoqmgeg: $eyscsimwcyaqakqg = wc_get_product_cat_ids($product); foreach ($eyscsimwcyaqakqg as $guwumyyyakswawas) { $auwuoyyagaiegwae[] = $this->qmgcisuuikgmqcsu($guwumyyyakswawas); mugqyyeayeyggqqk: } ouamogymawucwswu: $auwuoyyagaiegwae = array_merge($auwuoyyagaiegwae, $this->wgaamqmkuoaqgaqw($product)); $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $this->kggeaycqkokcquqk($auwuoyyagaiegwae); $this->oaumimwssciwumys("\120\x75\162\147\x65\40\x70\162\x6f\x64\x75\143\x74\40\x70\x61\147\145\163\x20\x61\x6e\x64\x20\143\141\164\x65\147\x6f\x72\x69\145\163\40\x66\x6f\162\40\127\157\x6f\x43\x6f\155\155\x65\x72\x63\145\x20\x6f\162\x64\145\162"); acsqgiuageaasiyy: } public function muigiegsqayowcoc($iskcmykisgqeqkcy) { $auwuoyyagaiegwae = []; if (!(is_array($iskcmykisgqeqkcy) && $iskcmykisgqeqkcy)) { goto kkumywowcoycymeo; } foreach ($iskcmykisgqeqkcy as $product) { $migiiksoiymissge = $this->ycqquoiyyuesegsy($product); if (!$migiiksoiymissge) { goto wyuemgggaqogsmsq; } $auwuoyyagaiegwae[] = $migiiksoiymissge; wyuemgggaqogsmsq: samwkqgwouggsguc: } oomguqikqokqwgku: if (!$auwuoyyagaiegwae) { goto guykyqecgswcsmws; } $this->kggeaycqkokcquqk($auwuoyyagaiegwae); guykyqecgswcsmws: kkumywowcoycymeo: } }
