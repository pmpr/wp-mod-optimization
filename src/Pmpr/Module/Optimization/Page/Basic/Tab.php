<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ae3139832e9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Page\Admin\Tab as BaseClass; class Tab extends BaseClass { protected ?ListTable $listTable = null; public function __construct($aasascamegmwqmqk, $aokagokqyuysuksm = '', $meqocwsecsywiiqs = '', $ukwokcuqauuosmoo = '', $sqqewmoeaekuyyas = 1) { $this->listTable = $aasascamegmwqmqk; parent::__construct($aokagokqyuysuksm, $meqocwsecsywiiqs, $ukwokcuqauuosmoo, $sqqewmoeaekuyyas); } public function waeasakssissiuqg() : ?ListTable { return $this->listTable; } public function eiieguqemowyacgi() { $qsyooiqcmkcieyuk = $this->waeasakssissiuqg(); if (!$qsyooiqcmkcieyuk) { goto acsigwcaesyyoiie; } $qsyooiqcmkcieyuk->prepare_items(); acsigwcaesyyoiie: parent::eiieguqemowyacgi(); } public function gayqqwwuycceosii() : array { return ["\164\x61\x62" => $this->mwikyscisascoeea(), self::imywcsggckkcywgk => $this->oyqkaeooscmcweyc("\x62\x61\x73\151\143\137\x70\x61\147\x65"), "\x73\x65\x61\x72\x63\150\137\x74\x65\170\164" => __("\123\x65\x61\162\x63\150", PR__MDL__OPTIMIZATION), "\x6c\x69\x73\164\x5f\x74\x61\142\154\145" => $this->waeasakssissiuqg(), self::uwceyikaaaqgkkee => "\164\141\142"]; } }
