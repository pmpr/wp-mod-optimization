<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e0ae98933fc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; abstract class Base extends Common { const oeccaaoegccisqqe = "\x70\162\x65\x6c\x6f\x61\144\x5f\45\x73\137\163\x74\141\x72\x74"; const oisqgeeswcsoqcim = "\x70\162\145\x6c\x6f\141\144\137\157\x6e\137\151\156\163\x65\x72\164\137\x6d\145\x74\141\144\x61\164\x61"; const cusqisyimeiygwqy = "\45\163\x5f\160\x72\145\x6c\157\141\144\137\x25\163\137\162\x75\x6e\156\x69\x6e\x67"; protected ?string $name = null; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function __construct() { if ($this->name) { goto gkqiqaqecmoogmaa; } $this->name = strtolower(self::ugwmakayykcmcmqa()); gkqiqaqecmoogmaa: parent::__construct(); } public function wigskegsqequoeks() { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $this->qcsmikeggeemccuu("\x61\x64\x6d\151\x6e\137\151\156\x69\164", [$this, "\x71\x71\x6d\x79\x65\147\161\x6d\151\x67\x63\155\141\165\147\x61"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x70\165\162\147\x65\137\141\x6c\154"), [$this, "\x6b\163\153\x6b\x69\167\x63\141\171\x73\165\167\x77\163\x77\147"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\x74\x5f\x70\165\162\147\145\x5f\165\x72\x6c\163"), [$this, "\161\161\145\161\157\x61\x73\x63\x79\x63\165\x65\x6f\x69\x69\x75"])->qcsmikeggeemccuu("\143\x72\x65\x61\164\145\137\x74\145\162\155", [$this, "\154\x73\x73\x6b\x6d\x6d\147\x73\143\x6b\x67\161\x77\x79\x65\161"], 10, 3)->qcsmikeggeemccuu("\167\x70\137\x69\156\x73\x65\x72\164\x5f\160\157\x73\x74", [$this, "\161\x79\x79\161\x61\171\x63\x75\151\155\x6d\x69\x65\x61\165\x6f"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\164\x5f\141\165\x74\157\x5f\x70\162\145\154\x6f\141\144"), [$this, "\x65\x75\x6f\x71\x63\141\153\x73\x61\x67\153\145\145\153\x75\155"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f{$ymqmyyeuycgmigyo}\x5f\141\x75\164\x6f\x5f\x70\162\145\x6c\157\141\144"), [$this, "\145\165\x6f\x71\x63\x61\153\163\x61\147\153\145\145\153\165\155"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\164\x5f\160\162\x65\154\x6f\x61\x64\x5f\165\162\154"), [$this, "\165\145\x77\167\x65\153\145\x73\x6d\x69\167\x65\157\x61\161\x67"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f{$ymqmyyeuycgmigyo}\x5f\160\x72\145\x6c\157\141\x64\137\165\162\154"), [$this, "\x75\x65\167\x77\145\153\145\x73\x6d\151\167\145\x6f\141\x71\147"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\137\x70\141\x67\145\137\x73\x74\x61\x74\x75\163"), [$this, "\x79\x69\157\x79\x73\x6d\167\x65\x63\x67\x67\163\x65\x69\x6f\165"], 10, 2); } public function yioysmwecggseiou($iueymcwwscwqkiyq, $migiiksoiymissge) { if (!$this->iqqgmieeqemiowuk($migiiksoiymissge)) { goto mceucsaeouuwyumm; } $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; mceucsaeouuwyumm: return $iueymcwwscwqkiyq; } public function qyyqaycuimmieauo($gcqseksiskwueksc, $post) { if (!(!ManipulatePost::igawqaomowicuayw(self::oisqgeeswcsoqcim, $gcqseksiskwueksc) && ManipulatePost::ucwmcwqmqwaymkkc($post) === self::wmmucsiyiyusmssm)) { goto ceiuqsiqgiuiekem; } $this->uewwekesmiweoaqg(ManipulatePost::ycqquoiyyuesegsy($post), $gcqseksiskwueksc); ManipulatePost::ksmqawcowkmegigw(self::oisqgeeswcsoqcim, $gcqseksiskwueksc); ceiuqsiqgiuiekem: } public function lsskmmgsckgqwyeq($ucicuwcaawugkseg, $aioqgggsymcimwqa, $kesssewsiegssiya) { if (!ManipulateTaxonomy::cekoogweeooasayu($kesssewsiegssiya)) { goto gsymkkskwsgggoic; } $this->uewwekesmiweoaqg(ManipulateTerm::qmgcisuuikgmqcsu($ucicuwcaawugkseg, $kesssewsiegssiya), $ucicuwcaawugkseg); gsymkkskwsgggoic: } public function iaygaicgokyskgmq() : string { return sprintf(self::oeccaaoegccisqqe, $this->aakmagwggmkoiiyu()); } public function mgyqciwsceoswuoq(int $gaeqamemwmwsyukm = 0) : bool { return true; } public function euoqcaksagkeekum() { $this->iycqweieskasuimy(); } public function kskkiwcaysuwwswg() { $this->iycqweieskasuimy(); } public function qqeqoascycueoiiu($auwuoyyagaiegwae) { if (!$auwuoyyagaiegwae) { goto ugykmcouiwiscoqu; } $this->iycqweieskasuimy($auwuoyyagaiegwae); ugykmcouiwiscoqu: } public function iycqweieskasuimy($auwuoyyagaiegwae = []) { $this->qqmyegqmigcmauga($auwuoyyagaiegwae, false); } public function qqmyegqmigcmauga($auwuoyyagaiegwae = [], bool $gioggcykgoikcwiy = true) { if (!(!$auwuoyyagaiegwae && $gioggcykgoikcwiy)) { goto igmmqwyawcuuckkq; } $omqquekswieeogws = $this->iaygaicgokyskgmq(); $omkysikckkcieckq = DecoratorOption::get($omqquekswieeogws); $ggkaciewmeqmgckg = ManipulateArray::get($omkysikckkcieckq, self::sqsuiimgeguwgmcg); if ($ggkaciewmeqmgckg && ManipulateDatetime::wguceomqgwouoyks($ggkaciewmeqmgckg)) { goto isewysikysqewkis; } $gioggcykgoikcwiy = false; goto wiwoiyoakywqyaiy; isewysikysqewkis: $auwuoyyagaiegwae = (array) ManipulateArray::get($omkysikckkcieckq, self::eimuuyqioyqiqwgq, []); DecoratorOption::delete($omqquekswieeogws); wiwoiyoakywqyaiy: igmmqwyawcuuckkq: if (!($auwuoyyagaiegwae || $gioggcykgoikcwiy)) { goto uscokkmquayiukag; } if ($auwuoyyagaiegwae) { goto eouwacqiommmeaqc; } $this->owacqyiaemgywyuy(); goto sqwuqegeiisoiiuq; eouwacqiommmeaqc: $this->sikgsmsiumsmwmsk($auwuoyyagaiegwae); sqwuqegeiisoiiuq: uscokkmquayiukag: } public function owacqyiaemgywyuy() { $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\x5f\x70\162\145\154\157\141\x64\137\x61\154\154\x5f\x75\162\x6c\x73"), [], $this->aakmagwggmkoiiyu()); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\160\162\145\x6c\x6f\x61\144\x5f\x61\154\x6c\137{$this->aakmagwggmkoiiyu()}\x5f\x75\x72\154\x73"), $auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto ykqsuiyyosyeyscc; } $this->sikgsmsiumsmwmsk($auwuoyyagaiegwae); ykqsuiyyosyeyscc: } public function uewwekesmiweoaqg($eeamcawaiqocomwy, $aokagokqyuysuksm) { $this->sikgsmsiumsmwmsk([$aokagokqyuysuksm => $eeamcawaiqocomwy]); } public function sikgsmsiumsmwmsk($auwuoyyagaiegwae) { $this->uiagwusgwcassqua("\142\145\146\157\162\145\40\163\x74\141\162\x74\40\160\x72\145\154\157\141\144\x65\x72\x20\x66\x6f\x72"); $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\137\160\x72\x65\x6c\157\141\x64\x5f\x75\x72\154\163"), $auwuoyyagaiegwae); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\160\x72\145\x6c\157\x61\144\x5f{$ymqmyyeuycgmigyo}\x5f\x75\162\x6c\x73"), $auwuoyyagaiegwae); if (!($auwuoyyagaiegwae = ManipulateArray::giwoasoewgaqiuis($auwuoyyagaiegwae))) { goto mcqucouuiuoagqwc; } $gaeqamemwmwsyukm = count($auwuoyyagaiegwae); if ($this->mgyqciwsceoswuoq($gaeqamemwmwsyukm)) { goto egesuwkqkmaigaoe; } $this->uiagwusgwcassqua("\x63\x61\x6e\40\156\x6f\x74\x20\x73\x74\x61\x72\x74\x20\160\162\145\x6c\x6f\141\144\145\x72\56"); goto syusgosewwkoagoq; egesuwkqkmaigaoe: try { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x62\x65\x66\157\162\x65\x5f\x73\164\141\162\164\x5f\160\x72\x65\154\x6f\141\x64"), $auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\x62\x65\x66\x6f\162\x65\x5f\x73\x74\x61\162\x74\137{$ymqmyyeuycgmigyo}\137\160\x72\145\154\157\x61\x64"), $auwuoyyagaiegwae); if (!($auwuoyyagaiegwae = $this->wiocumuiaykkiwgq($auwuoyyagaiegwae))) { goto ugogoekeckgcmuaw; } $this->start($auwuoyyagaiegwae); ugogoekeckgcmuaw: } catch (Exception $wgaoewqkwgomoaai) { $this->uiagwusgwcassqua($this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } syusgosewwkoagoq: mcqucouuiuoagqwc: } public function wiocumuiaykkiwgq(array $auwuoyyagaiegwae) : array { foreach ($auwuoyyagaiegwae as $aokagokqyuysuksm => $eeamcawaiqocomwy) { if (is_string($eeamcawaiqocomwy) && ($qsqwqsymmqeoqwcu = $this->asquciqsymgmcuci($eeamcawaiqocomwy))) { goto oeamoqweiueaueay; } unset($auwuoyyagaiegwae[$aokagokqyuysuksm]); goto owgsameoayaogsma; oeamoqweiueaueay: $auwuoyyagaiegwae[$aokagokqyuysuksm] = $qsqwqsymmqeoqwcu; owgsameoayaogsma: icumkkykaoqycqqu: } eweaaismksecwagy: return $auwuoyyagaiegwae; } public function asquciqsymgmcuci(string $eeamcawaiqocomwy) : string { $kuuugksiksqcaaaa = false; if (!(self::amcogigwsaqssuai !== $this->eaoemakycwuywqsy($eeamcawaiqocomwy))) { goto awgmegueeqeyqamu; } $auauqswyyugocuem = $this->cmwowcwwqqesoagc($eeamcawaiqocomwy); if (!($auauqswyyugocuem && !DecoratorOption::igqksmmwesguiaae($auauqswyyugocuem))) { goto kyiwsiakwgiwouyi; } $kuuugksiksqcaaaa = DecoratorOption::gawcqwcqgwgucgya($auauqswyyugocuem, 1, MINUTE_IN_SECONDS * 3); kyiwsiakwgiwouyi: awgmegueeqeyqamu: if ($kuuugksiksqcaaaa) { goto gqimwsyemoewagcy; } $eeamcawaiqocomwy = ''; gqimwsyemoewagcy: return $eeamcawaiqocomwy; } public function iqqgmieeqemiowuk(?string $eeamcawaiqocomwy) : bool { $auauqswyyugocuem = $this->cmwowcwwqqesoagc($eeamcawaiqocomwy); return $auauqswyyugocuem && DecoratorOption::igqksmmwesguiaae($auauqswyyugocuem); } public function ieskuycqsewokycq(?string $eeamcawaiqocomwy) { DecoratorOption::cqgekgeqacmqquas($this->cmwowcwwqqesoagc($eeamcawaiqocomwy)); } public function cmwowcwwqqesoagc(?string $eeamcawaiqocomwy) : ?string { $auauqswyyugocuem = null; if (!($mkomwsiykqigmqca = ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy, PHP_URL_PATH))) { goto aoaqwygkaagiuuws; } $auauqswyyugocuem = sprintf(self::cusqisyimeiygwqy, $this->aakmagwggmkoiiyu(), $mkomwsiykqigmqca); aoaqwygkaagiuuws: return $auauqswyyugocuem; } public abstract function start($auwuoyyagaiegwae); }
