<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             629654a236839             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; abstract class Base extends Common { const oeccaaoegccisqqe = "\x70\x72\145\x6c\157\x61\x64\x5f\x25\x73\137\x73\x74\141\x72\164"; const oisqgeeswcsoqcim = "\x70\x72\145\x6c\157\141\x64\x5f\x6f\x6e\137\x69\156\x73\x65\162\x74\x5f\x6d\x65\x74\141\144\141\x74\141"; const cusqisyimeiygwqy = "\45\x73\137\x70\162\x65\x6c\157\141\144\x5f\x72\x75\x6e\x6e\151\156\147"; protected ?string $name = null; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function __construct() { if ($this->name) { goto yosyyiksyyscacus; } $this->name = strtolower(self::ugwmakayykcmcmqa()); yosyyiksyyscacus: parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\x69\156\137\151\156\x69\164", [$this, "\161\x71\155\171\x65\147\161\x6d\151\x67\x63\155\x61\165\x67\141"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\160\x75\x72\x67\145\137\141\x6c\x6c"), [$this, "\153\x73\x6b\x6b\x69\167\143\x61\171\163\x75\x77\x77\x73\167\x67"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\160\x75\x72\147\x65\x5f\165\162\154\x73"), [$this, "\161\x71\x65\x71\x6f\x61\163\x63\171\x63\165\145\157\151\x69\x75"])->qcsmikeggeemccuu("\143\162\x65\x61\164\x65\x5f\x74\x65\162\x6d", [$this, "\154\163\x73\153\x6d\155\147\x73\x63\x6b\x67\161\x77\171\x65\161"], 10, 3)->qcsmikeggeemccuu("\167\x70\x5f\x69\156\x73\x65\162\x74\137\160\157\x73\164", [$this, "\x71\x79\x79\x71\141\x79\143\x75\x69\x6d\x6d\x69\x65\141\x75\157"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x61\x75\x74\x6f\137\x70\x72\145\154\x6f\x61\144"), [$this, "\x65\165\x6f\x71\x63\141\153\x73\141\x67\153\x65\x65\x6b\165\155"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f{$this->aakmagwggmkoiiyu()}\137\x61\165\164\157\x5f\x70\162\145\x6c\x6f\141\144"), [$this, "\x65\165\157\x71\143\141\x6b\x73\x61\147\153\x65\x65\x6b\165\155"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\x74\x5f\160\x72\x65\154\157\x61\144\137\165\162\154"), [$this, "\x75\145\x77\167\145\x6b\x65\x73\155\151\167\x65\x6f\x61\161\147"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\x74\137{$this->aakmagwggmkoiiyu()}\137\160\x72\145\x6c\x6f\141\144\137\x75\162\x6c"), [$this, "\165\x65\x77\x77\x65\153\145\x73\155\x69\x77\145\157\141\x71\x67"], 10, 2); parent::wigskegsqequoeks(); } public function qyyqaycuimmieauo($gcqseksiskwueksc, $post) { if (!(!ManipulatePost::igawqaomowicuayw(self::oisqgeeswcsoqcim, $gcqseksiskwueksc) && ManipulatePost::ucwmcwqmqwaymkkc($post) === self::wmmucsiyiyusmssm)) { goto kwcscewawgicomok; } $this->uewwekesmiweoaqg(ManipulatePost::ycqquoiyyuesegsy($post), $gcqseksiskwueksc); ManipulatePost::ksmqawcowkmegigw(self::oisqgeeswcsoqcim, $gcqseksiskwueksc); kwcscewawgicomok: } public function lsskmmgsckgqwyeq($ucicuwcaawugkseg, $aioqgggsymcimwqa, $kesssewsiegssiya) { if (!ManipulateTaxonomy::cekoogweeooasayu($kesssewsiegssiya)) { goto kikkkocywiyuyuqw; } $this->uewwekesmiweoaqg(ManipulateTerm::qmgcisuuikgmqcsu($ucicuwcaawugkseg, $kesssewsiegssiya), $ucicuwcaawugkseg); kikkkocywiyuyuqw: } public function iaygaicgokyskgmq() : string { return sprintf(self::oeccaaoegccisqqe, $this->aakmagwggmkoiiyu()); } public function mgyqciwsceoswuoq(int $gaeqamemwmwsyukm = 0) : bool { return true; } public function euoqcaksagkeekum() { $this->iycqweieskasuimy(); } public function kskkiwcaysuwwswg() { $this->iycqweieskasuimy(); } public function qqeqoascycueoiiu($auwuoyyagaiegwae) { if (!$auwuoyyagaiegwae) { goto aqeyqwuywqcmuoce; } $this->iycqweieskasuimy($auwuoyyagaiegwae); aqeyqwuywqcmuoce: } public function iycqweieskasuimy($auwuoyyagaiegwae = null) { $omqquekswieeogws = $this->iaygaicgokyskgmq(); $omkysikckkcieckq = DecoratorOption::get($omqquekswieeogws, []); $omkysikckkcieckq[self::sqsuiimgeguwgmcg] = date("\131\55\155\x2d\144\x20\x48\72\x69\72\x73", strtotime("\x2b\62\40\x6d\x69\156\165\x74\x65\x73")); if (!(isset($omkysikckkcieckq[self::eimuuyqioyqiqwgq]) && !$auwuoyyagaiegwae)) { goto aymoguycgmuggcik; } unset($omkysikckkcieckq[self::eimuuyqioyqiqwgq]); aymoguycgmuggcik: if (!($auwuoyyagaiegwae && is_array($auwuoyyagaiegwae))) { goto akoweomooyuwamow; } if (!isset($omkysikckkcieckq[self::eimuuyqioyqiqwgq])) { goto qayiqaykkywcyisq; } $auwuoyyagaiegwae = array_merge($auwuoyyagaiegwae, $omkysikckkcieckq[self::eimuuyqioyqiqwgq]); qayiqaykkywcyisq: $omkysikckkcieckq[self::eimuuyqioyqiqwgq] = ManipulateArray::giwoasoewgaqiuis($auwuoyyagaiegwae); akoweomooyuwamow: DecoratorOption::update($omqquekswieeogws, $omkysikckkcieckq); } public function qqmyegqmigcmauga() { $omqquekswieeogws = $this->iaygaicgokyskgmq(); $omkysikckkcieckq = DecoratorOption::get($omqquekswieeogws); $ggkaciewmeqmgckg = ManipulateArray::get($omkysikckkcieckq, self::sqsuiimgeguwgmcg); if (!($ggkaciewmeqmgckg && ManipulateDatetime::wguceomqgwouoyks($ggkaciewmeqmgckg))) { goto gcecamucuogcciig; } if ($auwuoyyagaiegwae = ManipulateArray::get($omkysikckkcieckq, self::eimuuyqioyqiqwgq, [])) { goto oaociaioauummsey; } $this->owacqyiaemgywyuy(); goto cueuscqkicwwicei; oaociaioauummsey: $this->sikgsmsiumsmwmsk($auwuoyyagaiegwae); cueuscqkicwwicei: DecoratorOption::delete($omqquekswieeogws); gcecamucuogcciig: } public function owacqyiaemgywyuy() { $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\160\162\x65\154\157\x61\144\x5f\x61\154\154\x5f\x75\162\x6c\163"), [], $this->aakmagwggmkoiiyu()); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\137\160\x72\x65\154\157\x61\144\137\x61\154\x6c\x5f{$this->aakmagwggmkoiiyu()}\x5f\x75\162\154\x73"), $auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto suscosoukqeyyqgs; } $this->sikgsmsiumsmwmsk($auwuoyyagaiegwae); suscosoukqeyyqgs: } public function uewwekesmiweoaqg($eeamcawaiqocomwy, $aokagokqyuysuksm) { $this->sikgsmsiumsmwmsk([$aokagokqyuysuksm => $eeamcawaiqocomwy]); } public function sikgsmsiumsmwmsk($auwuoyyagaiegwae) { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\160\x72\145\154\157\x61\x64\137\165\162\x6c\163"), $auwuoyyagaiegwae); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\x70\162\145\x6c\157\141\x64\x5f{$ymqmyyeuycgmigyo}\x5f\165\x72\154\163"), $auwuoyyagaiegwae); $auwuoyyagaiegwae = ManipulateArray::giwoasoewgaqiuis($auwuoyyagaiegwae); $gaeqamemwmwsyukm = count($auwuoyyagaiegwae); if (!$this->mgyqciwsceoswuoq($gaeqamemwmwsyukm)) { goto eysuawiooiswaseq; } try { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\x62\x65\x66\x6f\x72\x65\x5f\x73\164\141\162\x74\137\x70\x72\145\154\x6f\141\x64"), $auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137\142\145\x66\x6f\x72\145\137\163\164\141\x72\x74\137{$ymqmyyeuycgmigyo}\137\160\162\x65\154\x6f\141\x64"), $auwuoyyagaiegwae); if (!($auwuoyyagaiegwae = $this->wiocumuiaykkiwgq($auwuoyyagaiegwae))) { goto kiewcwsykccgocuc; } $this->start($auwuoyyagaiegwae); kiewcwsykccgocuc: } catch (Exception $wgaoewqkwgomoaai) { } eysuawiooiswaseq: } public function wiocumuiaykkiwgq(array $auwuoyyagaiegwae) : array { foreach ($auwuoyyagaiegwae as $aokagokqyuysuksm => $eeamcawaiqocomwy) { if (is_string($eeamcawaiqocomwy) && ($qsqwqsymmqeoqwcu = $this->asquciqsymgmcuci($eeamcawaiqocomwy))) { goto egiauwuekseyeaeq; } unset($auwuoyyagaiegwae[$aokagokqyuysuksm]); goto euuekiyqwkowiees; egiauwuekseyeaeq: $auwuoyyagaiegwae[$aokagokqyuysuksm] = $qsqwqsymmqeoqwcu; euuekiyqwkowiees: eogomkswkaqwyycm: } iecqkqoiqimmisyw: return $auwuoyyagaiegwae; } public function asquciqsymgmcuci(string $eeamcawaiqocomwy) : string { $kuuugksiksqcaaaa = false; $auauqswyyugocuem = $this->cmwowcwwqqesoagc($eeamcawaiqocomwy); if (!($auauqswyyugocuem && !DecoratorOption::igqksmmwesguiaae($auauqswyyugocuem))) { goto assoyoeukmqiucyq; } $kuuugksiksqcaaaa = DecoratorOption::gawcqwcqgwgucgya($auauqswyyugocuem, 1, HOUR_IN_SECONDS); assoyoeukmqiucyq: if ($kuuugksiksqcaaaa) { goto kikkkoqiumqoeiyy; } $eeamcawaiqocomwy = ''; kikkkoqiumqoeiyy: return $eeamcawaiqocomwy; } public function iqqgmieeqemiowuk(?string $eeamcawaiqocomwy) : bool { $auauqswyyugocuem = $this->cmwowcwwqqesoagc($eeamcawaiqocomwy); return $auauqswyyugocuem && DecoratorOption::igqksmmwesguiaae($auauqswyyugocuem); } public function cmwowcwwqqesoagc(?string $eeamcawaiqocomwy) : ?string { $auauqswyyugocuem = null; if (!($mkomwsiykqigmqca = ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy, PHP_URL_PATH))) { goto wyqueeskecameuks; } $auauqswyyugocuem = sprintf(self::cusqisyimeiygwqy, "{$mkomwsiykqigmqca}\x5f{$this->aakmagwggmkoiiyu()}"); wyqueeskecameuks: return $auauqswyyugocuem; } public abstract function start($auwuoyyagaiegwae); }
