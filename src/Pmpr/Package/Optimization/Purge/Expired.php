<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c3699ff30b7             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Purge; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use CallbackFilterIterator; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; class Expired extends Common { const swmaucwuymuqokiu = "\157\x70\x74\x69\155\x69\x7a\x61\164\151\x6f\x6e\x5f\x70\x75\x72\x67\x65\x5f\x74\151\155\x65\137\x65\166\145\156\x74"; protected ?string $path = ''; public function __construct(?string $mkomwsiykqigmqca) { $this->path = $mkomwsiykqigmqca; parent::__construct(); } public function amqagusacuuuaswg() : ?string { return $this->path; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\165\x77\165\147\x61\x69\161\x79\x77\155\x73\x65\153\163\161\155"]); parent::wigskegsqequoeks(); } public function uwugaiqywmseksqm() { if (!($this->get_cache_lifespan() && !wp_next_scheduled(static::swmaucwuymuqokiu))) { goto oocuemosmeeekgas; } $ycooswiwewekokei = $this->get_interval(); wp_schedule_event(time() + $ycooswiwewekokei, "\x6f\160\x74\137\145\x78\160\151\x72\x65\144\137\x63\x61\x63\x68\145\x5f\x63\x72\x6f\x6e\137\x69\x6e\x74\145\162\166\141\x6c", static::swmaucwuymuqokiu); oocuemosmeeekgas: } private function aymegqumcmuwyuqm(string $mkomwsiykqigmqca) : bool { $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto egsycocugqyyswsi; } goto uoeasoimegouymka; egsycocugqyyswsi: return false; uoeasoimegouymka: } qkcsykuocwuyaice: return true; } private function ycumyoqmwqsqgmeu($qogsmwakwacwqogk) { $eouekqmooogkoqoo = "\x40\136" . preg_quote($qogsmwakwacwqogk["\150\157\163\x74"], "\x40") . "\100"; $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($this->amqagusacuuuaswg()); $yicgeeqawwokyssy = rtrim($qogsmwakwacwqogk["\160\141\164\150"], "\x2f"); if (!$mcowwqgmkuemoumu) { goto ciucewqgyoiouesq; } return new CallbackFilterIterator($mcowwqgmkuemoumu, function ($yeacayasgueouoqc) use($eouekqmooogkoqoo, $yicgeeqawwokyssy) { if (!(!ManipulateFile::oagwcgcemwwykokc($yeacayasgueouoqc) || ManipulateFile::qkuqsuugayciskek($yeacayasgueouoqc))) { goto qiaimmucomukkeka; } return false; qiaimmucomukkeka: if (preg_match($eouekqmooogkoqoo, ManipulateFile::mawoacksgosuccme($yeacayasgueouoqc))) { goto aoquoewagkseayug; } return false; aoquoewagkseayug: if (!('' !== $yicgeeqawwokyssy && !$this->kcciqwskewsuaemk()->exists(ManipulateFile::scikcaaaiwcsqowm($yeacayasgueouoqc) . $yicgeeqawwokyssy))) { goto osuscoaaomwcqkew; } return false; osuscoaaomwcqkew: return true; }); ciucewqgyoiouesq: return false; } public function ccuciuoaysakakqu($wumscqwikueeogok) { if (!$wumscqwikueeogok) { goto oyiuyywyeoskckuw; } $ggauoeuaesiymgee = $auwuoyyagaiegwae = ManipulateI18N::mceoyuqgagciommq(); $ooqwimmeoeeaikyg = time() - $wumscqwikueeogok; $auwuoyyagaiegwae = $this->sscegwueamckwmcy("\x63\141\x63\x68\145\137\141\165\x74\157\x6d\141\x74\x69\x63\137\x63\x61\x63\150\145\137\x70\165\162\147\145\137\165\162\x6c\163", $auwuoyyagaiegwae, $ooqwimmeoeeaikyg); if (is_array($auwuoyyagaiegwae)) { goto cgmgqucewwssmicq; } $auwuoyyagaiegwae = $ggauoeuaesiymgee; cgmgqucewwssmicq: $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae, "\151\x73\x5f\x73\x74\x72\x69\x6e\147"); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto wkgskiuiukiuyque; } $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $meisgakuwcmwosms = []; $igyewwsuegggmkkk = Buffer::omgegoiwsakgwwug(); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq("\x63\x61\143\150\x65\137\x62\145\x66\x6f\x72\145\x5f\141\165\x74\157\x6d\141\x74\x69\143\137\143\141\143\x68\145\137\x70\165\162\x67\145\x5f\x64\x69\x72", $eeamcawaiqocomwy, $ooqwimmeoeeaikyg); $oicyaaqouscyiycq = []; if (!$igyewwsuegggmkkk) { goto ukomuiwukymcoaso; } $qogsmwakwacwqogk = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iuaemokqameyemms = rtrim($qogsmwakwacwqogk["\x70\x61\x74\x68"], "\x2f"); $ucasskoyoewwmmii = $this->ycumyoqmwqsqgmeu($qogsmwakwacwqogk); foreach ($ucasskoyoewwmmii as $igqsaukqcqscimok) { $sgoqsiukkecgiiso = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); $qaisqkcgsgakqykq = $sgoqsiukkecgiiso . $iuaemokqameyemms; $ccykqsgoygiaowac = $this->euyowcyakomciogy($qaisqkcgsgakqykq, $ooqwimmeoeeaikyg); if (!$ccykqsgoygiaowac) { goto sqmoqymckwsogsqg; } $oicyaaqouscyiycq[] = ["\150\x6f\155\145\x5f\165\x72\154" => $eeamcawaiqocomwy, "\150\x6f\x6d\x65\x5f\x70\141\164\x68" => $qaisqkcgsgakqykq, "\x6c\157\x67\x67\x65\144\137\151\156" => $sgoqsiukkecgiiso !== $this->amqagusacuuuaswg() . $qogsmwakwacwqogk["\x68\x6f\163\x74"], "\146\151\x6c\145\x73" => $ccykqsgoygiaowac]; sqmoqymckwsogsqg: if (!$this->aymegqumcmuwyuqm($sgoqsiukkecgiiso)) { goto uycesqqkoeamocgm; } $this->kcciqwskewsuaemk()->remove($sgoqsiukkecgiiso); uycesqqkoeamocgm: gqmewagyagamokok: } oyiuemaaykgkqqam: if (!$oicyaaqouscyiycq) { goto ceiwqkyquikcemmo; } $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $oicyaaqouscyiycq); ceiwqkyquikcemmo: ukomuiwukymcoaso: $ywmkwiwkosakssii = ["\165\162\154" => $eeamcawaiqocomwy, "\154\x69\x66\x65\x73\160\x61\156" => $wumscqwikueeogok, "\146\x69\x6c\x65\137\141\x67\x65\x5f\x6c\x69\155\151\164" => $ooqwimmeoeeaikyg]; $this->cqscqicucmeamkyq("\143\141\x63\150\145\137\x61\146\x74\x65\x72\137\141\165\164\157\155\x61\x74\x69\x63\137\143\141\143\150\x65\x5f\x70\165\x72\x67\145\x5f\x64\x69\x72", $oicyaaqouscyiycq, $ywmkwiwkosakssii); ussceseaimqywuiy: } mkomygccqkmkumsi: $ywmkwiwkosakssii = ["\x6c\x69\x66\x65\163\160\x61\x6e" => $wumscqwikueeogok, "\x66\151\154\x65\137\141\x67\x65\137\x6c\x69\155\x69\164" => $ooqwimmeoeeaikyg]; $this->cqscqicucmeamkyq("\143\141\143\x68\145\x5f\x61\x66\x74\x65\x72\x5f\141\165\x74\x6f\155\x61\164\x69\x63\137\143\141\x63\150\x65\x5f\x70\x75\x72\147\x65", $meisgakuwcmwosms, $ywmkwiwkosakssii); wkgskiuiukiuyque: oyiuyywyeoskckuw: } private function euyowcyakomciogy($mkomwsiykqigmqca, $ooqwimmeoeeaikyg) : array { $meisgakuwcmwosms = []; $mcowwqgmkuemoumu = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!ManipulateFile::qkuqsuugayciskek($igqsaukqcqscimok)) { goto qkuiwoqksgayqqmg; } goto siecswkggyikqkga; qkuiwoqksgayqqmg: if (ManipulateFile::oagwcgcemwwykokc($igqsaukqcqscimok)) { goto smiemmcqqukyguuu; } if (!(ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok) && ManipulateFile::awosikuiguowiumy($igqsaukqcqscimok) < $ooqwimmeoeeaikyg)) { goto quaqmuusokiyqgqe; } $esaqeawoigqgagum = ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok); if ($this->kcciqwskewsuaemk()->remove($esaqeawoigqgagum)) { goto easqmyamcmeesgya; } goto siecswkggyikqkga; easqmyamcmeesgya: $mkomwsiykqigmqca = dirname($esaqeawoigqgagum); if (in_array($mkomwsiykqigmqca, $meisgakuwcmwosms, true)) { goto yuqgwwmqwqiuwmaw; } $meisgakuwcmwosms[] = $mkomwsiykqigmqca; yuqgwwmqwqiuwmaw: quaqmuusokiyqgqe: goto iksewmsaugayqaqq; smiemmcqqukyguuu: $kmgucgmywowuywem = $this->euyowcyakomciogy(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok), $ooqwimmeoeeaikyg); $meisgakuwcmwosms = array_merge($meisgakuwcmwosms, $kmgucgmywowuywem); iksewmsaugayqaqq: siecswkggyikqkga: } goqmywuiicciasyk: if (!$this->aymegqumcmuwyuqm($mkomwsiykqigmqca)) { goto yamyagayiooyeekg; } $this->kcciqwskewsuaemk()->remove($mkomwsiykqigmqca); yamyagayiooyeekg: return $meisgakuwcmwosms; } }
