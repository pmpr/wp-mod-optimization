<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652bc1a0098e2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Extension\Plugin\Woocommerce; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Module\Optimization\Extension\Common; use Pmpr\Module\Optimization\Purge\Traits\PurgeTrait; class Purge extends Common { use PurgeTrait; public function wigskegsqequoeks() { if (!$this->weysguygiseoukqw(Setting::qcckqskeimawaeqi)) { goto eiawsoasmscmqswa; } $this->qcsmikeggeemccuu("\x77\157\157\143\x6f\x6d\155\x65\162\143\145\x5f\x75\x70\x64\x61\x74\145\144\137\160\162\x6f\x64\165\143\164\137\x73\164\x6f\x63\153", [$this, "\141\x63\153\143\143\143\x6f\x77\155\x67\x73\143\157\171\165\x6b"], PHP_INT_MAX); eiawsoasmscmqswa: if (!$this->weysguygiseoukqw(Setting::oqosscouoeiqyeak)) { goto ickcmqoiosquugwe; } $this->qcsmikeggeemccuu("\167\x63\137\x61\x66\x74\145\x72\137\160\162\x6f\x64\165\x63\x74\163\137\x65\x6e\x64\x69\156\147\137\163\x61\x6c\145\163", [$this, "\x6d\x75\x69\x67\x69\145\x67\x73\x71\x61\171\157\167\x63\157\143"], PHP_INT_MAX)->qcsmikeggeemccuu("\167\143\x5f\x61\146\164\145\162\x5f\160\162\157\144\x75\x63\x74\x73\x5f\163\x74\x61\x72\164\x69\156\147\x5f\x73\x61\x6c\145\163", [$this, "\x6d\165\x69\147\x69\x65\147\163\161\141\171\x6f\x77\x63\157\143"], PHP_INT_MAX); ickcmqoiosquugwe: } public function ackcccowmgscoyuk($product) { if (!function_exists("\167\x63\x5f\147\145\164\137\x6f\162\x64\145\162")) { goto cgewcsueoyaeikgm; } $auwuoyyagaiegwae = []; if (!($suaemuyiacqyugsm = DecoratorWoocommerce::imsiwqgqaeceoomu("\x73\x68\x6f\x70"))) { goto qmeoaqmsuseueqiy; } $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($suaemuyiacqyugsm); qmeoaqmsuseueqiy: $eyscsimwcyaqakqg = wc_get_product_cat_ids($product); foreach ($eyscsimwcyaqakqg as $guwumyyyakswawas) { $auwuoyyagaiegwae[] = $this->qmgcisuuikgmqcsu($guwumyyyakswawas); cuoqqgaygogsmmic: } ygkcacsyyckescqs: $auwuoyyagaiegwae = array_merge($auwuoyyagaiegwae, $this->wgaamqmkuoaqgaqw($product)); $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $this->kggeaycqkokcquqk($auwuoyyagaiegwae); $this->oaumimwssciwumys("\120\x75\x72\147\x65\x20\x70\162\157\x64\165\x63\x74\40\x70\141\147\145\x73\40\141\x6e\x64\40\x63\141\x74\x65\x67\157\162\x69\x65\x73\40\146\x6f\x72\40\127\157\157\103\x6f\155\155\145\x72\143\x65\x20\157\x72\144\x65\162"); cgewcsueoyaeikgm: } public function muigiegsqayowcoc($iskcmykisgqeqkcy) { $auwuoyyagaiegwae = []; if (!(is_array($iskcmykisgqeqkcy) && $iskcmykisgqeqkcy)) { goto twkmiuomimomscew; } foreach ($iskcmykisgqeqkcy as $product) { $migiiksoiymissge = $this->ycqquoiyyuesegsy($product); if (!$migiiksoiymissge) { goto mqccmesakuemceqi; } $auwuoyyagaiegwae[] = $migiiksoiymissge; mqccmesakuemceqi: igymseewwyiocoug: } sukskmcwsoysiuqu: if (!$auwuoyyagaiegwae) { goto eyiamcekkgkiawqy; } $this->kggeaycqkokcquqk($auwuoyyagaiegwae); eyiamcekkgkiawqy: twkmiuomimomscew: } }
