<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c70cbf24c2f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Purge; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use CallbackFilterIterator; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Expired extends Common { const swmaucwuymuqokiu = "\157\x70\x74\151\155\151\x7a\x61\x74\151\x6f\x6e\x5f\x70\x75\162\147\145\x5f\164\151\x6d\x65\x5f\145\x76\145\x6e\164"; protected ?string $path = ''; public function __construct(?string $mkomwsiykqigmqca) { $this->path = $mkomwsiykqigmqca; parent::__construct(); } public function amqagusacuuuaswg() : ?string { return $this->path; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\164", [$this, "\165\167\165\x67\x61\x69\161\x79\167\155\x73\x65\x6b\163\161\x6d"]); parent::wigskegsqequoeks(); } public function uwugaiqywmseksqm() { if (!($this->get_cache_lifespan() && !wp_next_scheduled(static::swmaucwuymuqokiu))) { goto osuscoaaomwcqkew; } $ycooswiwewekokei = $this->get_interval(); wp_schedule_event(time() + $ycooswiwewekokei, "\157\160\164\x5f\145\170\x70\151\x72\145\x64\x5f\143\141\x63\x68\x65\x5f\x63\162\x6f\x6e\x5f\151\x6e\164\145\x72\x76\x61\154", static::swmaucwuymuqokiu); osuscoaaomwcqkew: } private function aymegqumcmuwyuqm(string $mkomwsiykqigmqca) : bool { $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto mkomygccqkmkumsi; } goto cgmgqucewwssmicq; mkomygccqkmkumsi: return false; cgmgqucewwssmicq: } ciucewqgyoiouesq: return true; } private function ycumyoqmwqsqgmeu($qogsmwakwacwqogk) { $eouekqmooogkoqoo = "\100\x5e" . preg_quote($qogsmwakwacwqogk["\x68\157\163\x74"], "\100") . "\100"; $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($this->amqagusacuuuaswg()); $yicgeeqawwokyssy = rtrim($qogsmwakwacwqogk["\160\x61\164\x68"], "\57"); if (!$mcowwqgmkuemoumu) { goto sqmoqymckwsogsqg; } return new CallbackFilterIterator($mcowwqgmkuemoumu, function ($yeacayasgueouoqc) use($eouekqmooogkoqoo, $yicgeeqawwokyssy) { if (!(!ManipulateFile::oagwcgcemwwykokc($yeacayasgueouoqc) || ManipulateFile::qkuqsuugayciskek($yeacayasgueouoqc))) { goto ussceseaimqywuiy; } return false; ussceseaimqywuiy: if (preg_match($eouekqmooogkoqoo, ManipulateFile::mawoacksgosuccme($yeacayasgueouoqc))) { goto oyiuemaaykgkqqam; } return false; oyiuemaaykgkqqam: if (!('' !== $yicgeeqawwokyssy && !$this->kcciqwskewsuaemk()->exists(ManipulateFile::scikcaaaiwcsqowm($yeacayasgueouoqc) . $yicgeeqawwokyssy))) { goto gqmewagyagamokok; } return false; gqmewagyagamokok: return true; }); sqmoqymckwsogsqg: return false; } public function ccuciuoaysakakqu($wumscqwikueeogok) { if (!$wumscqwikueeogok) { goto quaqmuusokiyqgqe; } $ggauoeuaesiymgee = $auwuoyyagaiegwae = ManipulateI18N::mceoyuqgagciommq(); $ooqwimmeoeeaikyg = time() - $wumscqwikueeogok; $auwuoyyagaiegwae = $this->sscegwueamckwmcy("\x63\141\x63\150\x65\137\x61\165\164\157\155\x61\164\x69\143\x5f\143\141\143\x68\x65\x5f\x70\x75\162\147\x65\137\165\x72\154\x73", $auwuoyyagaiegwae, $ooqwimmeoeeaikyg); if (is_array($auwuoyyagaiegwae)) { goto uycesqqkoeamocgm; } $auwuoyyagaiegwae = $ggauoeuaesiymgee; uycesqqkoeamocgm: $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae, "\x69\x73\x5f\163\x74\x72\x69\156\147"); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto yuqgwwmqwqiuwmaw; } $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $meisgakuwcmwosms = []; $igyewwsuegggmkkk = Buffer::omgegoiwsakgwwug(); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq("\x63\141\x63\150\x65\137\x62\145\146\x6f\162\x65\137\141\x75\164\157\155\x61\164\x69\x63\x5f\x63\x61\143\150\x65\x5f\160\x75\162\147\145\x5f\x64\x69\162", $eeamcawaiqocomwy, $ooqwimmeoeeaikyg); $oicyaaqouscyiycq = []; if (!$igyewwsuegggmkkk) { goto easqmyamcmeesgya; } $qogsmwakwacwqogk = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iuaemokqameyemms = rtrim($qogsmwakwacwqogk["\x70\x61\164\x68"], "\57"); $ucasskoyoewwmmii = $this->ycumyoqmwqsqgmeu($qogsmwakwacwqogk); foreach ($ucasskoyoewwmmii as $igqsaukqcqscimok) { $sgoqsiukkecgiiso = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); $qaisqkcgsgakqykq = $sgoqsiukkecgiiso . $iuaemokqameyemms; $ccykqsgoygiaowac = $this->euyowcyakomciogy($qaisqkcgsgakqykq, $ooqwimmeoeeaikyg); if (!$ccykqsgoygiaowac) { goto goqmywuiicciasyk; } $oicyaaqouscyiycq[] = ["\150\157\155\145\x5f\x75\162\154" => $eeamcawaiqocomwy, "\x68\x6f\155\145\137\160\x61\x74\150" => $qaisqkcgsgakqykq, "\154\x6f\147\147\145\x64\137\151\156" => $sgoqsiukkecgiiso !== $this->amqagusacuuuaswg() . $qogsmwakwacwqogk["\x68\x6f\163\x74"], "\146\x69\154\145\x73" => $ccykqsgoygiaowac]; goqmywuiicciasyk: if (!$this->aymegqumcmuwyuqm($sgoqsiukkecgiiso)) { goto siecswkggyikqkga; } $this->kcciqwskewsuaemk()->remove($sgoqsiukkecgiiso); siecswkggyikqkga: oyiuyywyeoskckuw: } wkgskiuiukiuyque: if (!$oicyaaqouscyiycq) { goto qkuiwoqksgayqqmg; } $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $oicyaaqouscyiycq); qkuiwoqksgayqqmg: easqmyamcmeesgya: $ywmkwiwkosakssii = ["\x75\x72\x6c" => $eeamcawaiqocomwy, "\x6c\151\146\145\x73\x70\141\156" => $wumscqwikueeogok, "\146\x69\154\x65\137\x61\x67\x65\x5f\x6c\151\155\x69\x74" => $ooqwimmeoeeaikyg]; $this->cqscqicucmeamkyq("\143\141\143\x68\x65\137\x61\x66\164\x65\162\137\141\165\164\157\155\141\x74\151\x63\137\143\141\x63\150\145\137\160\x75\162\147\145\137\144\x69\x72", $oicyaaqouscyiycq, $ywmkwiwkosakssii); ukomuiwukymcoaso: } ceiwqkyquikcemmo: $ywmkwiwkosakssii = ["\x6c\151\146\145\163\x70\141\156" => $wumscqwikueeogok, "\x66\151\x6c\145\137\x61\x67\145\137\154\x69\155\151\164" => $ooqwimmeoeeaikyg]; $this->cqscqicucmeamkyq("\143\x61\143\x68\145\137\141\146\x74\145\162\x5f\141\165\164\157\155\141\164\x69\x63\x5f\x63\x61\x63\x68\145\x5f\160\165\162\x67\145", $meisgakuwcmwosms, $ywmkwiwkosakssii); yuqgwwmqwqiuwmaw: quaqmuusokiyqgqe: } private function euyowcyakomciogy($mkomwsiykqigmqca, $ooqwimmeoeeaikyg) : array { $meisgakuwcmwosms = []; $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto yamyagayiooyeekg; } goto iksewmsaugayqaqq; yamyagayiooyeekg: if (ManipulateFile::oagwcgcemwwykokc($igqsaukqcqscimok)) { goto mqiiqkuaoekeuswo; } if (!(ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok) && ManipulateFile::awosikuiguowiumy($igqsaukqcqscimok) < $ooqwimmeoeeaikyg)) { goto ecouwqosmoyyqmkw; } $esaqeawoigqgagum = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); if ($this->kcciqwskewsuaemk()->remove($esaqeawoigqgagum)) { goto yoagcooekomeokwg; } goto iksewmsaugayqaqq; yoagcooekomeokwg: $mkomwsiykqigmqca = dirname($esaqeawoigqgagum); if (in_array($mkomwsiykqigmqca, $meisgakuwcmwosms, true)) { goto eckcqesiokgwkkiw; } $meisgakuwcmwosms[] = $mkomwsiykqigmqca; eckcqesiokgwkkiw: ecouwqosmoyyqmkw: goto qmoocweoekqueuyy; mqiiqkuaoekeuswo: $kmgucgmywowuywem = $this->euyowcyakomciogy(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok), $ooqwimmeoeeaikyg); $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $kmgucgmywowuywem); qmoocweoekqueuyy: iksewmsaugayqaqq: } smiemmcqqukyguuu: if (!$this->aymegqumcmuwyuqm($mkomwsiykqigmqca)) { goto sgiwoiscywusgmmm; } $this->kcciqwskewsuaemk()->remove($mkomwsiykqigmqca); sgiwoiscywusgmmm: return $meisgakuwcmwosms; } }
