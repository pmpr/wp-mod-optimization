<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e8fa75eb5af             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Page\Admin\Tab as BaseClass; class Tab extends BaseClass { protected ?ListTable $listTable = null; public function __construct($aasascamegmwqmqk, $aokagokqyuysuksm = '', $meqocwsecsywiiqs = '', $ukwokcuqauuosmoo = '', $sqqewmoeaekuyyas = 1) { $this->listTable = $aasascamegmwqmqk; parent::__construct($aokagokqyuysuksm, $meqocwsecsywiiqs, $ukwokcuqauuosmoo, $sqqewmoeaekuyyas); } public function waeasakssissiuqg() : ?ListTable { return $this->listTable; } public function eiieguqemowyacgi() { $qsyooiqcmkcieyuk = $this->waeasakssissiuqg(); if (!$qsyooiqcmkcieyuk) { goto mmmqqoemusicwgqg; } $qsyooiqcmkcieyuk->prepare_items(); mmmqqoemusicwgqg: parent::eiieguqemowyacgi(); } public function gayqqwwuycceosii() : array { return ["\164\141\x62" => $this->mwikyscisascoeea(), "\160\141\147\145" => $this->oyqkaeooscmcweyc("\142\x61\163\151\143\x5f\x70\141\147\x65"), "\163\x65\x61\162\143\x68\x5f\164\145\x78\x74" => __("\123\145\141\x72\x63\150", PR__MDL__OPTIMIZATION), "\154\x69\x73\x74\x5f\x74\141\x62\154\145" => $this->waeasakssissiuqg(), self::uwceyikaaaqgkkee => "\164\x61\x62"]; } }
