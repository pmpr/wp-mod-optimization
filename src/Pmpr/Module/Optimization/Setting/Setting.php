<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581d1c9b1ab             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Traits\HelperTrait; use Pmpr\Module\Optimization\Optimizer\HTML\Setting as HTMLSetting; use Pmpr\Module\Optimization\Optimizer\Asset\Setting as AssetSetting; use Pmpr\Module\Optimization\Optimizer\Media\Setting as MediaSetting; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\Setting as CDNAssetSetting; use Pmpr\Module\Optimization\Optimizer\Extension\Setting as ExtensionSetting; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting as CacheHTMLSetting; use Pmpr\Module\Optimization\Optimizer\Preprocess\Setting as PreprocessSetting; use Pmpr\Module\Optimization\PageManager\SpeedTest\Setting as SpeedTestSetting; use Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare\Setting as CloudflareSetting; use Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Setting as SpecialPageSetting; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Setting extends BaseClass { use HelperTrait; const qiayoyomewkuswqw = "\155\x6f\x62\x69\154\x65\x5f\x64\x69\x6d\145\156\163\151\157\x6e"; const acqamcqkaoggwkkm = "\144\145\163\153\164\x6f\x70\x5f\144\151\155\145\156\163\151\157\x6e"; const umaucaksymaeccge = "\63\66\x30\x78\x38\x30\60"; const aeqycwwemyeysiko = "\x33\x39\x30\170\x38\64\x34"; const imiuucoaeuuguquy = "\63\x39\x33\x78\70\x37\x33"; const aaosuccwseqeccqi = "\x34\x31\x32\x78\x38\62\x33"; const esuewmgequaouqia = "\x34\x31\62\170\71\x31\65"; const swyqcuuksoawqeuo = "\61\x39\62\x30\x78\x31\x30\70\x30"; const iyuyewuiiymiwaee = "\61\66\x30\x30\x78\x31\62\x30\x30"; const aqwkikuscwyukgwo = "\x31\x33\66\66\170\67\x36\x38"; const osmaaoowcmmksguk = "\x31\x32\70\x30\x78\x37\x32\60"; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->igiywquyccyiaucw(Constants::kekcgssiyagioocg, 6); $this->igiywquyccyiaucw(Constants::qoquaeuooeycomks, $this->mwikyscisascoeea()); } public function wyyuauosmqoeucmg() { $this->title = __("\x4f\160\x74\x69\x6d\151\172\141\164\x69\x6f\x6e\x20\x53\x65\x74\x74\151\x6e\147", PR__MDL__OPTIMIZATION); $this->igiywquyccyiaucw(Constants::qsegwakiwaiyimyy, __("\x53\145\164\x74\151\156\x67", PR__MDL__OPTIMIZATION)); } public function ykwqaukkycogooii() { $wamcomkuwysqgwgk = "\x25\163\x20\50\x25\x73\x29"; $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg(Constants::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__("\107\145\x6e\x65\162\141\x6c", PR__MDL__OPTIMIZATION))->gucwmccyimoagwcm(__("\x47\145\x6e\145\162\141\154\x20\123\145\164\x74\x69\156\x67\40\103\x6f\156\x66\x69\x67\x75\x72\x61\x74\x69\x6f\x6e", PR__MDL__OPTIMIZATION))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\166\x69\163\x69\x74\x6f\x72\137\x64\x65\x76\x69\x63\145")->saemoowcasogykak(IconInterface::kgeuosquiegysmmq)->gswweykyogmsyawy(__("\126\x69\x73\x69\x74\157\162\x20\104\145\166\x69\143\145", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::qiayoyomewkuswqw)->eumecwmqmukqgyea()->eyygsasuqmommkua(self::aaosuccwseqeccqi)->gswweykyogmsyawy(__("\x4d\x6f\x62\151\154\145\40\x53\143\x72\145\145\156\x20\104\x69\x6d\145\156\163\151\x6f\156", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(self::umaucaksymaeccge, sprintf($wamcomkuwysqgwgk, "\x4d\157\x74\x6f\x72\x6f\x6c\141\40\x4d\x6f\164\157\40\105\67", self::umaucaksymaeccge))->kesomeowemmyygey(self::aeqycwwemyeysiko, sprintf($wamcomkuwysqgwgk, "\x47\x6f\157\147\x6c\145\x20\x50\151\x78\145\154\40\x36\141", self::aeqycwwemyeysiko))->kesomeowemmyygey(self::imiuucoaeuuguquy, sprintf($wamcomkuwysqgwgk, "\x48\x75\141\x77\x65\151\40\120\63\x30\40\114\x69\x74\x65", self::imiuucoaeuuguquy))->kesomeowemmyygey(self::aaosuccwseqeccqi, sprintf($wamcomkuwysqgwgk, "\115\157\164\x6f\x20\x47\40\120\x6f\x77\x65\x72", self::esuewmgequaouqia))->kesomeowemmyygey(self::esuewmgequaouqia, sprintf($wamcomkuwysqgwgk, "\151\120\150\x6f\x6e\x65\x20\x31\x35", self::esuewmgequaouqia)))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::acqamcqkaoggwkkm)->eumecwmqmukqgyea()->eyygsasuqmommkua(self::iyuyewuiiymiwaee)->gswweykyogmsyawy(__("\104\145\x73\x6b\x74\x6f\x70\x20\123\x63\x72\x65\x65\156\x20\x44\x69\155\145\156\163\x69\157\x6e", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(self::swyqcuuksoawqeuo, sprintf($wamcomkuwysqgwgk, "\x46\165\154\x6c\x20\110\x44", self::swyqcuuksoawqeuo))->kesomeowemmyygey(self::iyuyewuiiymiwaee, sprintf($wamcomkuwysqgwgk, "\x48\104\53", self::iyuyewuiiymiwaee))->kesomeowemmyygey(self::aqwkikuscwyukgwo, sprintf($wamcomkuwysqgwgk, "\x48\x44\40\x52\x65\x61\x64\171", self::aqwkikuscwyukgwo))->kesomeowemmyygey(self::osmaaoowcmmksguk, sprintf($wamcomkuwysqgwgk, "\x48\104", self::osmaaoowcmmksguk))))); parent::ykwqaukkycogooii(); $this->oiawceqcyuywusmi(); } public function oiawceqcyuywusmi() { HTMLSetting::symcgieuakksimmu(); MediaSetting::symcgieuakksimmu(); AssetSetting::symcgieuakksimmu(); CDNAssetSetting::symcgieuakksimmu(); ExtensionSetting::symcgieuakksimmu(); SpeedTestSetting::symcgieuakksimmu(); CacheHTMLSetting::symcgieuakksimmu(); CloudflareSetting::symcgieuakksimmu(); PreprocessSetting::symcgieuakksimmu(); SpecialPageSetting::symcgieuakksimmu(); VirtualBrowserSetting::symcgieuakksimmu(); } public function gugawkcggyameeky($amakmumgguksgmum) { return $this->giiuwsmyumqwwiyq($amakmumgguksgmum, [], [Constants::ascagqcquwgmygkm => Constants::ccyeycyyykwuymsy]); } public function qkikgkocoikymiac($omkysikckkcieckq, $eqgoocgaqwqcimie) { switch ($omkysikckkcieckq) { case Constants::qeuquamuuwueeiyi: $this->kmyyisssekummkcg(); break; } parent::qkikgkocoikymiac($omkysikckkcieckq, $eqgoocgaqwqcimie); } public function swqaqgaeiewsykyc($qiouiwasaauyaaue = []) { $this->kmyyisssekummkcg(); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x70\x75\x72\147\x65\x5f\x68\164\155\x6c\137\143\141\x63\x68\145"); parent::swqaqgaeiewsykyc($qiouiwasaauyaaue); } public function eiqmgkyumaiemwiq() : array { $yiuqooeaqugiowke = explode("\170", $this->giiuwsmyumqwwiyq(self::qiayoyomewkuswqw, self::aaosuccwseqeccqi)); $kgyccakaqaeyuoau = explode("\170", $this->giiuwsmyumqwwiyq(self::acqamcqkaoggwkkm, self::iyuyewuiiymiwaee)); return [Constants::skogicecygyyskkq => [Constants::qomookamaskuoswk => $yiuqooeaqugiowke[0] ?? "\x34\61\62", Constants::sogmkkcwuamuqegw => $yiuqooeaqugiowke[1] ?? "\x38\x32\x33"], Constants::mcaucuyeeiwsmmuy => [Constants::qomookamaskuoswk => $kgyccakaqaeyuoau[0] ?? "\61\x36\x30\60", Constants::sogmkkcwuamuqegw => $kgyccakaqaeyuoau[1] ?? "\61\x32\x30\x30"]]; } private function kmyyisssekummkcg() { $swyigkueoywiacam = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $ucasskoyoewwmmii = $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->igyiymiwguiiqgqm(); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if ($swyigkueoywiacam->exists($qogsmwakwacwqogk)) { $swyigkueoywiacam->remove($qogsmwakwacwqogk); } } } }
