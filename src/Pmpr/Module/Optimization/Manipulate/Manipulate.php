<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64202c1126f08             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Page\Model; class Manipulate extends BaseClass { public static function kcwoaesycwouwems() : bool { return ManipulateServer::get(self::imywcsggckkcywgk) === Model::symcgieuakksimmu()->miwqiiqeegeqcwis(); } public static function qkaowsuomuucgcck() : bool { $wymyeyweagqomiim = false; if (isset($_SERVER["\x48\x54\x54\120\x53"])) { goto acsigwcaesyyoiie; } if (!(isset($_SERVER["\123\x45\122\126\x45\x52\x5f\120\117\x52\x54"]) && "\x34\x34\x33" === (string) DecoratorSanitize::aoeoykwemwaqsikc(wp_unslash($_SERVER["\x53\105\122\126\x45\122\137\120\x4f\122\x54"])))) { goto iyikuwuweqigiuey; } $wymyeyweagqomiim = true; iyikuwuweqigiuey: goto aqaaqeucgoegeeuk; acsigwcaesyyoiie: $ueicioocowkieeme = DecoratorSanitize::aoeoykwemwaqsikc(wp_unslash($_SERVER["\110\x54\124\x50\x53"])); if (!("\61" === (string) $ueicioocowkieeme || "\x6f\x6e" === strtolower($ueicioocowkieeme))) { goto gysmmooawoeggaow; } $wymyeyweagqomiim = true; gysmmooawoeggaow: aqaaqeucgoegeeuk: return $wymyeyweagqomiim; } public static function swuauuwqoauayowm() : bool { $ccikgcseeuuaaggm = [ "\x65\154\145\x6d\145\156\x74\157\x72\x2d\160\162\x65\x76\151\145\x77", "\146\154\x5f\142\165\x69\154\144\x65\x72", "\x63\164\x5f\x62\x75\151\154\144\145\162", "\x65\x74\137\146\142", "\164\166\x65", ]; $ksaameoqigiaoigg = false; foreach ($ccikgcseeuuaaggm as $siykeiywomwwuoiw) { if (!isset($_GET[$siykeiywomwwuoiw])) { goto iyceygqsmokgmams; } $ksaameoqigiaoigg = true; goto wycmcqaauqkgegau; iyceygqsmokgmams: qcweoyigoaeacsow: } wycmcqaauqkgegau: return $ksaameoqigiaoigg; } public static function yoqccqiiaagckoou($migiiksoiymissge) { $ywmkwiwkosakssii = []; if (!ManipulateSetting::esoowymaimwcuecq()) { goto wcekgciqeggiiwgk; } $ywmkwiwkosakssii["\143\x6f\x6f\153\151\x65\163"] = ["\130\x44\105\x42\125\107\x5f\123\x45\123\123\111\x4f\x4e" => "\130\104\x45\102\x55\107\137\105\103\114\x49\120\123\x45"]; wcekgciqeggiiwgk: return wp_remote_get($migiiksoiymissge, $ywmkwiwkosakssii); } public static function maykkqauyaoqmqeu($aqykuigiuwmmcieu = self::emgcgiseaoouacge) : ?array { return ManipulatePost::mwoyqeeigwqoamiw([self::aisguagukaewucii => $aqykuigiuwmmcieu, self::ccyeycyyykwuymsy => ["\x6a\145\164\55\x6d\x65\x6e\x75", "\x61\x74\164\141\x63\150\155\145\x6e\164", "\x77\x63\137\160\162\157\144\x75\143\164\x5f\x74\x61\x62", "\152\x65\x74\55\164\x68\145\155\x65\55\x63\x6f\162\145", "\x65\154\145\x6d\x65\x6e\164\x6f\x72\137\x6c\x69\142\162\x61\x72\x79", "\141\163\164\162\x61\x2d\x61\x64\x76\x61\x6e\x63\x65\x64\55\x68\157\x6f\x6b"]]); } public static function iikwikykskimciuc($aqykuigiuwmmcieu = self::emgcgiseaoouacge) : ?array { return ManipulateTaxonomy::ciugwooasaqcywas([self::aisguagukaewucii => $aqykuigiuwmmcieu]); } public static function imyuqaesowgauoam(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ccyeycyyykwuymsy => [], self::kkekqeuyycwqggou => [], self::kcaoouwiygwwmiok => []]); $egeqeuwiswigogyk = $ywmkwiwkosakssii[self::kkekqeuyycwqggou]; $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, ManipulateServer::gmigwwwmwemyaayy("\57"), "\x68\157\x6d\x65"); if (!ManipulatePage::eokiwumgqmymgyoa()) { goto gkwuewqmqeswqukg; } $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, ManipulatePage::symuoymymumgwkaw(), "\142\154\157\147"); gkwuewqmqeswqukg: if (!($sciomagaqmgggsiu = self::maykkqauyaoqmqeu())) { goto uamuuwkyuqomqyuy; } foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg), $useksmwkuswkwcqg); uqcwyyiykmwygeau: } sagemooicmgceiug: $wyoiwuqokyeeuguk = ManipulatePost::ciugwooasaqcywas($sciomagaqmgggsiu, [self::gikuasuikwemyqoq => self::wmmucsiyiyusmssm, self::kcaoouwiygwwmiok => $ywmkwiwkosakssii[self::kcaoouwiygwwmiok]]); foreach ($wyoiwuqokyeeuguk as $post) { $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post, true); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post, true); $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, $migiiksoiymissge, "{$useksmwkuswkwcqg}\137{$gcqseksiskwueksc}"); kkmwwqyesmkescyg: } yeiokcoikcysyimu: uamuuwkyuqomqyuy: if (!($seyqqsmuaiegkeeq = self::iikwikykskimciuc())) { goto eoeiaccouaymakgm; } foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, ManipulateTaxonomy::myagyqumwekameww($kesssewsiegssiya), $kesssewsiegssiya); iyaugygcsmqqqkmo: } ekwuycsiuqwycqea: $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($seyqqsmuaiegkeeq, [self::ccyeycyyykwuymsy => $ywmkwiwkosakssii[self::ccyeycyyykwuymsy]]); foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $ucicuwcaawugkseg = ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk, true); $kesssewsiegssiya = ManipulateTerm::yyoeeseewqmmyaee($iwewcwusemqaiggk); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, $migiiksoiymissge, "{$kesssewsiegssiya}\x5f{$ucicuwcaawugkseg}"); yggciikgkomgeqsc: } cieumoqayigkoocy: eoeiaccouaymakgm: return (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\157\x70\x74\x5f\160\x75\142\154\x69\143\137\x70\x65\162\155\141\x6c\x69\x6e\x6b\x73"), $egeqeuwiswigogyk); } public static function asywsogcwameaaau(?string $omkysikckkcieckq) : bool { return ManipulatePost::igawqaomowicuayw("\x6f\160\x74\137\145\x78\x63\x6c\x75\x64\145\137{$omkysikckkcieckq}"); } public static function yygaymuiikwoakuc($aokagokqyuysuksm, $meqocwsecsywiiqs = null, $ymqmyyeuycgmigyo = null) : array { $migiiksoiymissge = ['', '']; $post = ManipulatePost::get($aokagokqyuysuksm); if (!$post) { goto umcyeiusoakewyaa; } $sqeykgyoooqysmca = ManipulatePost::gueasuouwqysmomu($post, true); $cqeiqmmwywksgiko = ManipulatePost::ucwmcwqmqwaymkkc($post); $imqwkwqqwcysuice = $post->post_date; $gqwoukkugawigkik = $post->post_name; if (!in_array($cqeiqmmwywksgiko, ["\x64\x72\x61\x66\x74", "\160\x65\x6e\x64\151\x6e\147"], true)) { goto owaimkmgemoqewmm; } $post->post_status = "\160\x75\142\154\x69\163\150"; $post->post_name = DecoratorSanitize::meqocwsecsywiiqs($post->post_name ? $post->post_name : $post->post_title, $post->ID); owaimkmgemoqewmm: if (is_null($ymqmyyeuycgmigyo)) { goto ysoqeuugiuswykyu; } $post->post_name = sanitize_title($ymqmyyeuycgmigyo ? $ymqmyyeuycgmigyo : $meqocwsecsywiiqs, $post->ID); ysoqeuugiuswykyu: $post->post_name = wp_unique_post_slug($post->post_name, $post->ID, $post->post_status, $post->post_type, $post->post_parent); $post->filter = "\163\141\x6d\160\154\145"; $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); $migiiksoiymissge = str_replace("\45{$sqeykgyoooqysmca->name}\45", "\45\160\x61\x67\145\x6e\x61\x6d\145\45", $migiiksoiymissge); if (!$sqeykgyoooqysmca->hierarchical) { goto koiiaewwicsckseu; } $xeciwimgioieayek = get_page_uri($post); $xeciwimgioieayek = untrailingslashit($xeciwimgioieayek); $xeciwimgioieayek = strrev(strstr(strrev($xeciwimgioieayek), "\x2f")); $xeciwimgioieayek = untrailingslashit($xeciwimgioieayek); $xeciwimgioieayek = DecoratorHook::sscegwueamckwmcy("\145\144\151\164\x61\x62\x6c\145\x5f\163\x6c\165\x67", $xeciwimgioieayek, $post); if (empty($xeciwimgioieayek)) { goto usmuqsuwuueogimc; } $xeciwimgioieayek .= "\x2f"; usmuqsuwuueogimc: $migiiksoiymissge = str_replace("\x25\160\x61\147\x65\156\141\155\145\45", "{$xeciwimgioieayek}\x25\160\141\x67\145\156\x61\155\x65\x25", $migiiksoiymissge); koiiaewwicsckseu: $migiiksoiymissge = [$migiiksoiymissge, DecoratorHook::sscegwueamckwmcy("\145\144\x69\x74\x61\142\154\145\x5f\x73\x6c\x75\147", $post->post_name, $post)]; $post->post_status = $cqeiqmmwywksgiko; $post->post_date = $imqwkwqqwcysuice; $post->post_name = $gqwoukkugawigkik; unset($post->filter); umcyeiusoakewyaa: return $migiiksoiymissge; } }
