<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d23d0b3ad57             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\CDN; use CF\WordPress\Hooks; use Pmpr\Common\Foundation\Interfaces\Constants; class Cloudflare extends Common { private $hooks = null; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\137\x6e\157\164\x69\143\x65\x73", [$this, "\155\x65\171\x67\x73\171\x77\x75\x69\x6b\151\x6f\153\163\153\147"])->qcsmikeggeemccuu("\141\144\155\151\156\137\156\157\164\x69\143\145\163", [$this, "\157\151\153\155\151\145\171\x6f\x6f\163\x77\153\x75\x71\167\157"])->qcsmikeggeemccuu("\141\144\155\151\x6e\x5f\x6e\157\x74\x69\143\145\163", [$this, "\155\x79\x6b\x63\147\x75\167\155\x61\x63\x71\x75\145\155\153\x73"]); } public function meygsywuikiokskg() { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); if (!(!$uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x43\x4c\x4f\x55\x44\x46\x4c\101\x52\105\x5f\x50\114\125\107\x49\x4e\137\104\x49\122") || !$uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\x4c\x4f\125\x44\x46\114\x41\x52\105\137\x48\124\124\120\x32\x5f\x53\x45\x52\126\x45\122\x5f\x50\x55\x53\x48\137\x41\103\124\x49\126\x45"))) { goto mscgewkcqcoowweg; } return; mscgewkcqcoowweg: if (!($this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw() || !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie(Constants::gewmeskawiqikkoc))) { goto suqcsgaosywaauuu; } return; suqcsgaosywaauuu: $uamcoiueqaamsqma = __("\x43\x6c\157\165\144\x66\x6c\x61\x72\x65\x27\x73\40\110\x54\124\120\x2f\62\40\123\145\x72\x76\x65\x72\x20\x50\165\x73\x68\x20\151\163\40\151\156\x63\x6f\155\x70\x61\x74\151\142\154\x65\40\x77\x69\164\x68\40\x74\150\145\x20\x66\145\141\x74\165\162\x65\163\x20\157\x66\40\122\145\155\157\x76\145\40\x55\156\165\x73\x65\x64\x20\x43\123\x53\56\40\x57\145\40\x73\164\162\157\156\x67\x6c\171\x20\162\145\x63\x6f\155\155\x65\156\x64\x20\144\151\x73\141\x62\x6c\151\156\x67\x20\151\x74\x2e", PR__MDL__OPTIMIZATION); $this->cimaucgayqyyccoc($uamcoiueqaamsqma, "\143\x6c\157\x75\x64\146\x6c\x61\x72\x65\x5f\163\145\x72\166\x65\162\x5f\160\165\x73\150"); } public function oikmieyooswkuqwo() { } public function mykcguwmacquemks() { } private function aiomiwiwyeyqeoqs() : bool { if ($this->uwkmaywceaaaigwo()->essaugkeosgskqme()->ggocakcisguuokai("\x63\154\157\165\144\x66\x6c\141\162\145\x2f\143\x6c\x6f\165\x64\146\154\x61\x72\145\56\x70\150\160")) { goto wwukgaquuyoissgy; } return false; wwukgaquuyoissgy: $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if (!(empty($qkqgcaykemoiecma->get("\x63\x6c\157\165\144\x66\154\x61\162\145\137\x61\160\x69\137\145\155\x61\151\x6c")) || empty($qkqgcaykemoiecma->get("\143\x6c\157\165\x64\x66\154\141\x72\x65\x5f\x61\160\x69\x5f\x6b\x65\x79")) || empty($qkqgcaykemoiecma->get("\143\154\x6f\165\x64\146\x6c\x61\162\145\x5f\143\x61\143\x68\x65\x64\x5f\x64\157\x6d\141\x69\156\x5f\156\x61\x6d\145")))) { goto gsygwgsiawgmqiyi; } return false; gsygwgsiawgmqiyi: return true; } private function egakasqqyawukwco() : Hooks { if ($this->hooks) { goto qsgqwyqaqiowkmco; } $this->hooks = new Hooks(); qsgqwyqaqiowkmco: return $this->hooks; } public function wciuogmwscgcqkmc() { $this->egakasqqyawukwco()->purgeCacheEverything(); } public function kggeaycqkokcquqk($ooosquycguwewsao) { $this->egakasqqyawukwco()->purgeCacheByRelevantURLs($ooosquycguwewsao); } }
