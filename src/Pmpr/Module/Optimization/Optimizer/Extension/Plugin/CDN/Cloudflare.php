<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b73dc7163             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\CDN; use CF\WordPress\Hooks; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; class Cloudflare extends Container { private $hooks = null; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\x6d\x69\156\x5f\x6e\x6f\164\x69\143\x65\163", [$this, "\155\145\171\147\x73\x79\x77\x75\x69\x6b\x69\157\x6b\x73\153\147"])->qcsmikeggeemccuu("\141\x64\x6d\151\156\137\x6e\157\164\x69\143\x65\163", [$this, "\x6f\151\x6b\x6d\x69\x65\x79\x6f\157\x73\x77\153\x75\161\167\157"])->qcsmikeggeemccuu("\141\144\155\x69\x6e\137\156\157\164\151\143\145\163", [$this, "\x6d\171\x6b\x63\147\165\167\155\x61\x63\161\x75\x65\x6d\x6b\163"]); } public function meygsywuikiokskg() { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); if (!$uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\x4c\x4f\125\x44\x46\x4c\x41\x52\x45\137\120\x4c\125\x47\x49\x4e\x5f\104\111\x52") || !$uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\x4c\117\x55\104\106\x4c\x41\x52\x45\x5f\x48\124\x54\x50\62\x5f\x53\105\x52\x56\x45\122\x5f\x50\125\x53\x48\137\101\x43\x54\111\x56\105")) { return; } if ($this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw() || !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie(Constants::gewmeskawiqikkoc)) { return; } $uamcoiueqaamsqma = __("\103\x6c\x6f\x75\144\146\154\x61\162\145\47\163\40\110\x54\124\x50\57\x32\x20\x53\145\x72\x76\x65\x72\x20\x50\x75\x73\150\40\151\x73\x20\151\x6e\143\x6f\155\x70\x61\x74\x69\142\x6c\x65\x20\x77\x69\164\150\40\164\x68\145\40\146\145\141\x74\x75\x72\x65\163\40\x6f\x66\40\x52\145\155\157\x76\x65\40\x55\156\x75\163\x65\144\40\103\x53\x53\x2e\x20\127\x65\40\x73\x74\162\157\x6e\147\154\171\x20\162\x65\x63\157\155\x6d\x65\156\144\x20\144\x69\163\x61\142\x6c\151\156\x67\40\151\x74\x2e", PR__MDL__OPTIMIZATION); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, $uamcoiueqaamsqma, "\143\154\x6f\x75\144\x66\154\x61\x72\x65\137\163\x65\x72\166\145\162\x5f\160\x75\x73\x68"); } public function oikmieyooswkuqwo() { } public function mykcguwmacquemks() { } private function aiomiwiwyeyqeoqs() : bool { if (!$this->uwkmaywceaaaigwo()->essaugkeosgskqme()->ggocakcisguuokai("\143\154\x6f\165\x64\146\154\x61\162\145\57\143\x6c\157\x75\144\x66\x6c\141\162\x65\56\160\150\160")) { return false; } $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if (empty($qkqgcaykemoiecma->get("\143\x6c\157\165\x64\146\154\x61\162\145\x5f\141\160\x69\x5f\145\155\x61\x69\x6c")) || empty($qkqgcaykemoiecma->get("\x63\x6c\x6f\165\144\x66\x6c\x61\x72\x65\x5f\141\x70\x69\137\x6b\x65\x79")) || empty($qkqgcaykemoiecma->get("\143\x6c\x6f\x75\x64\x66\154\141\x72\x65\137\x63\x61\143\x68\145\144\137\144\x6f\155\x61\151\156\137\x6e\141\155\x65"))) { return false; } return true; } private function egakasqqyawukwco() : Hooks { if (!$this->hooks) { $this->hooks = new Hooks(); } return $this->hooks; } public function wciuogmwscgcqkmc() { $this->egakasqqyawukwco()->purgeCacheEverything(); } public function kggeaycqkokcquqk($ooosquycguwewsao) { $this->egakasqqyawukwco()->purgeCacheByRelevantURLs($ooosquycguwewsao); } }
