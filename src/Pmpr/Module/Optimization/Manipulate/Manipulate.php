<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e8fa75eb5af             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Page\Model; class Manipulate extends BaseClass { public static function kcwoaesycwouwems() : bool { return ManipulateServer::get(self::imywcsggckkcywgk) === Model::symcgieuakksimmu()->miwqiiqeegeqcwis(); } public static function qkaowsuomuucgcck() : bool { $wymyeyweagqomiim = false; if (isset($_SERVER["\110\x54\124\x50\123"])) { goto wamgcqkaieummksu; } if (!(isset($_SERVER["\123\x45\x52\x56\105\122\137\x50\x4f\x52\x54"]) && "\64\x34\x33" === (string) DecoratorSanitize::aoeoykwemwaqsikc(wp_unslash($_SERVER["\123\x45\x52\126\x45\x52\x5f\x50\117\x52\124"])))) { goto kcwyeqmysgqkoqcm; } $wymyeyweagqomiim = true; kcwyeqmysgqkoqcm: goto mwgaaiaswusakkaq; wamgcqkaieummksu: $ueicioocowkieeme = DecoratorSanitize::aoeoykwemwaqsikc(wp_unslash($_SERVER["\x48\x54\124\x50\123"])); if (!("\x31" === (string) $ueicioocowkieeme || "\157\156" === strtolower($ueicioocowkieeme))) { goto isaouwiaamimceeg; } $wymyeyweagqomiim = true; isaouwiaamimceeg: mwgaaiaswusakkaq: return $wymyeyweagqomiim; } public static function swuauuwqoauayowm() : bool { $ccikgcseeuuaaggm = [ "\145\154\145\x6d\145\156\x74\x6f\162\55\160\162\x65\166\x69\145\167", "\146\x6c\137\x62\x75\151\154\144\145\x72", "\x63\164\x5f\142\x75\x69\x6c\x64\x65\162", "\145\x74\x5f\146\142", "\164\x76\x65", ]; $ksaameoqigiaoigg = false; foreach ($ccikgcseeuuaaggm as $siykeiywomwwuoiw) { if (!isset($_GET[$siykeiywomwwuoiw])) { goto oeosugomyqyekmuq; } $ksaameoqigiaoigg = true; goto ugowqoisymsioeye; oeosugomyqyekmuq: gooqkmwgsmseuiwq: } ugowqoisymsioeye: return $ksaameoqigiaoigg; } public static function yoqccqiiaagckoou($migiiksoiymissge) { $ywmkwiwkosakssii = []; if (!ManipulateSetting::esoowymaimwcuecq()) { goto emgssiqceagusgyg; } $ywmkwiwkosakssii["\x63\x6f\157\153\x69\145\163"] = ["\130\104\105\x42\125\x47\137\123\x45\123\123\111\x4f\x4e" => "\130\x44\105\102\125\x47\x5f\x45\x43\114\x49\120\123\105"]; emgssiqceagusgyg: return wp_remote_get($migiiksoiymissge, $ywmkwiwkosakssii); } public static function maykkqauyaoqmqeu($aqykuigiuwmmcieu = self::emgcgiseaoouacge) : ?array { return ManipulatePost::mwoyqeeigwqoamiw([self::aisguagukaewucii => $aqykuigiuwmmcieu, self::ccyeycyyykwuymsy => ["\x6a\145\x74\x2d\155\145\x6e\165", "\x61\x74\x74\x61\143\150\x6d\x65\x6e\x74", "\x77\x63\137\160\162\157\144\x75\143\164\137\164\141\x62", "\x6a\x65\x74\x2d\x74\150\x65\x6d\145\55\143\157\162\145", "\x65\x6c\x65\x6d\x65\x6e\164\x6f\162\137\154\151\142\162\141\162\x79", "\x61\163\164\x72\x61\55\x61\x64\x76\141\x6e\x63\145\144\x2d\x68\x6f\157\x6b"]]); } public static function iikwikykskimciuc($aqykuigiuwmmcieu = self::emgcgiseaoouacge) : ?array { return ManipulateTaxonomy::ciugwooasaqcywas([self::aisguagukaewucii => $aqykuigiuwmmcieu]); } public static function imyuqaesowgauoam(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ccyeycyyykwuymsy => [], self::kkekqeuyycwqggou => [], self::kcaoouwiygwwmiok => []]); $egeqeuwiswigogyk = $ywmkwiwkosakssii[self::kkekqeuyycwqggou]; $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, ManipulateServer::gmigwwwmwemyaayy("\57"), "\x68\157\155\x65"); if (!ManipulatePage::eokiwumgqmymgyoa()) { goto ysusaysykymegguk; } $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, ManipulatePage::symuoymymumgwkaw(), "\x62\x6c\157\x67"); ysusaysykymegguk: if (!($sciomagaqmgggsiu = self::maykkqauyaoqmqeu())) { goto wkwkeicwosmkcygc; } foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg), $useksmwkuswkwcqg); oaciskoioaecgwee: } yskswskmsgoouyco: $wyoiwuqokyeeuguk = ManipulatePost::ciugwooasaqcywas($sciomagaqmgggsiu, [self::gikuasuikwemyqoq => self::wmmucsiyiyusmssm, self::kcaoouwiygwwmiok => $ywmkwiwkosakssii[self::kcaoouwiygwwmiok]]); foreach ($wyoiwuqokyeeuguk as $post) { $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post, true); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post, true); $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, $migiiksoiymissge, "{$useksmwkuswkwcqg}\137{$gcqseksiskwueksc}"); mmusoowesqcmuqew: } csskguekqcwcmocu: wkwkeicwosmkcygc: if (!($seyqqsmuaiegkeeq = self::iikwikykskimciuc())) { goto iqukigoyiqgcggue; } foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, ManipulateTaxonomy::myagyqumwekameww($kesssewsiegssiya), $kesssewsiegssiya); yuoyeeuqqaockyqw: } ugcyukgoaiiysymc: $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($seyqqsmuaiegkeeq, [self::ccyeycyyykwuymsy => $ywmkwiwkosakssii[self::ccyeycyyykwuymsy]]); foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $ucicuwcaawugkseg = ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk, true); $kesssewsiegssiya = ManipulateTerm::yyoeeseewqmmyaee($iwewcwusemqaiggk); $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); $egeqeuwiswigogyk = ManipulateArray::aoecsisqoyuyecmy($egeqeuwiswigogyk, $migiiksoiymissge, "{$kesssewsiegssiya}\137{$ucicuwcaawugkseg}"); qkiqquymecyoouki: } kygcymkakucoeock: iqukigoyiqgcggue: return (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\157\160\x74\x5f\x70\165\142\154\x69\143\x5f\160\145\x72\x6d\x61\154\151\156\x6b\163"), $egeqeuwiswigogyk); } public static function asywsogcwameaaau(?string $omkysikckkcieckq) : bool { return ManipulatePost::igawqaomowicuayw("\157\160\x74\137\145\170\x63\154\x75\144\x65\x5f{$omkysikckkcieckq}"); } public static function yygaymuiikwoakuc($aokagokqyuysuksm, $meqocwsecsywiiqs = null, $ymqmyyeuycgmigyo = null) : array { $migiiksoiymissge = ['', '']; $post = ManipulatePost::get($aokagokqyuysuksm); if (!$post) { goto qcywwqceiqogcoyo; } $sqeykgyoooqysmca = ManipulatePost::gueasuouwqysmomu($post, true); $cqeiqmmwywksgiko = ManipulatePost::ucwmcwqmqwaymkkc($post); $imqwkwqqwcysuice = $post->post_date; $gqwoukkugawigkik = $post->post_name; if (!in_array($cqeiqmmwywksgiko, ["\144\x72\x61\x66\164", "\160\x65\x6e\144\x69\x6e\x67"], true)) { goto amkcomscieegkygc; } $post->post_status = "\x70\x75\142\x6c\151\x73\x68"; $post->post_name = DecoratorSanitize::meqocwsecsywiiqs($post->post_name ? $post->post_name : $post->post_title, $post->ID); amkcomscieegkygc: if (is_null($ymqmyyeuycgmigyo)) { goto uugekiumuwemyuyc; } $post->post_name = sanitize_title($ymqmyyeuycgmigyo ? $ymqmyyeuycgmigyo : $meqocwsecsywiiqs, $post->ID); uugekiumuwemyuyc: $post->post_name = wp_unique_post_slug($post->post_name, $post->ID, $post->post_status, $post->post_type, $post->post_parent); $post->filter = "\x73\141\x6d\160\x6c\x65"; $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); $migiiksoiymissge = str_replace("\45{$sqeykgyoooqysmca->name}\x25", "\x25\160\141\147\x65\156\x61\x6d\x65\x25", $migiiksoiymissge); if (!$sqeykgyoooqysmca->hierarchical) { goto osoqssymqqoqcuky; } $xeciwimgioieayek = get_page_uri($post); $xeciwimgioieayek = untrailingslashit($xeciwimgioieayek); $xeciwimgioieayek = strrev(strstr(strrev($xeciwimgioieayek), "\x2f")); $xeciwimgioieayek = untrailingslashit($xeciwimgioieayek); $xeciwimgioieayek = DecoratorHook::sscegwueamckwmcy("\x65\x64\x69\x74\141\x62\x6c\145\x5f\x73\154\165\147", $xeciwimgioieayek, $post); if (empty($xeciwimgioieayek)) { goto qoameasiqwaqgmca; } $xeciwimgioieayek .= "\57"; qoameasiqwaqgmca: $migiiksoiymissge = str_replace("\45\160\x61\147\145\x6e\x61\x6d\x65\x25", "{$xeciwimgioieayek}\x25\160\141\147\145\x6e\x61\155\x65\x25", $migiiksoiymissge); osoqssymqqoqcuky: $migiiksoiymissge = [$migiiksoiymissge, DecoratorHook::sscegwueamckwmcy("\x65\144\x69\x74\x61\x62\x6c\145\137\163\154\165\147", $post->post_name, $post)]; $post->post_status = $cqeiqmmwywksgiko; $post->post_date = $imqwkwqqwcysuice; $post->post_name = $gqwoukkugawigkik; unset($post->filter); qcywwqceiqogcoyo: return $migiiksoiymissge; } }
