<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ccf32654208             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Module\Optimization\Page\Model; use Pmpr\Module\Optimization\Setting; use Pmpr\Module\Optimization\Traits\CommonTrait; use Pmpr\Module\Optimization\Bypass\Setting as BypassSetting; use WP_Post; use WP_Post_Type; use WP_Query; use WP_Taxonomy; class ListTable extends WPListTable { use CommonTrait; protected $type; public function __construct($sqeykgyoooqysmca, $ywmkwiwkosakssii = []) { $this->type = $sqeykgyoooqysmca; parent::__construct($ywmkwiwkosakssii); } public function gueasuouwqysmomu() { return $this->type; } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { $ccowyogiqwikkkie = ''; if (!($micmwmywmkguiyyk === $column_name)) { goto egiauwuekseyeaeq; } $ccowyogiqwikkkie = []; $migiiksoiymissge = ''; if (!$igqsaukqcqscimok instanceof WP_Post) { goto iecqkqoiqimmisyw; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok); iecqkqoiqimmisyw: if (!($this->icwseyeieagkgego($igqsaukqcqscimok) && !$this->uuqqoaacemswasgw($migiiksoiymissge))) { goto eogomkswkaqwyycm; } $meqocwsecsywiiqs = __("\x72\x65\117\x70\164\151\x6d\x69\172\x65", PR__MDL__OPTIMIZATION); $ccowyogiqwikkkie[] = ManipulateHTML::yuawgssgauywkiia($meqocwsecsywiiqs, "\43", ["\143\154\141\x73\x73" => "\x6f\160\164\55\160\x61\147\145\x2d\x61\x63\164\151\x6f\x6e\x20\x70\x72\x2d\143\157\156\x66\151\162\x6d\141\x62\x6c\x65\55\141\x63\164\x69\x6f\156", "\141\162\x69\141\x2d\154\141\142\145\x6c" => $meqocwsecsywiiqs, "\x64\141\x74\141\55\x63\157\156\x66\151\147" => ManipulateHTML::uskieqmcqyecigmy([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\x41\162\145\x20\x79\157\165\x20\163\165\162\145\x20\x61\x62\157\x75\164\x20\162\x65\117\160\x74\x69\155\151\x7a\x65\40\x74\150\151\163\x20\x70\141\147\145\x3f", PR__MDL__OPTIMIZATION), "\142\x75\164\164\x6f\x6e\163" => [self::mosycwwoqguicaeo, ["\x63\x6c\x61\x73\x73" => "\x6f\x70\x74\55\160\165\162\x67\145\x2d\x70\x6f\163\164\x2d\143\141\x63\150\145\40\142\164\x6e\x20\142\164\156\x2d\160\162\151\155\141\x72\x79", self::qescuiwgsyuikume => $meqocwsecsywiiqs, "\144\x61\164\141\x2d\160\145\162\x6d\141\x6c\151\156\153" => $migiiksoiymissge, "\x64\141\164\x61\x2d\x6d\151\x63\x72\x6f\x6d\157\x64\x61\154\x2d\143\x6c\157\163\145"]]])]); eogomkswkaqwyycm: $ccowyogiqwikkkie = $this->row_actions($ccowyogiqwikkkie); egiauwuekseyeaeq: return $ccowyogiqwikkkie; } public function get_columns() { return [self::qescuiwgsyuikume => __("\x54\x69\164\x6c\145", PR__MDL__OPTIMIZATION), "\x6f\160\x74\x5f\163\x74\141\x74\165\163" => __("\117\x70\164\40\123\x74\x61\x74\165\163", PR__MDL__OPTIMIZATION), self::kumuoysauoagaiiy => __("\104\141\x74\145", PR__MDL__OPTIMIZATION)]; } public function column_opt_status($igqsaukqcqscimok) { echo $this->ccioymuswicowwkw(ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok)); } public function column_date($post) { global $wmekckkyoiyickmk; if ("\60\60\60\60\55\x30\60\55\60\60\x20\60\60\x3a\60\60\x3a\60\x30" === $post->post_date) { goto euuekiyqwkowiees; } $t_time = sprintf( __("\45\61\44\163\x20\x61\164\x20\x25\x32\44\163"), get_the_time(__("\x59\x2f\x6d\x2f\x64"), $post), get_the_time(__("\x67\x3a\x69\x20\141"), $post) ); $cqgoimumaewouews = get_post_timestamp($post); $time_diff = time() - $cqgoimumaewouews; goto assoyoeukmqiucyq; euuekiyqwkowiees: $t_time = __("\125\156\x70\x75\142\x6c\x69\163\150\145\144"); $time_diff = 0; assoyoeukmqiucyq: if (self::wmmucsiyiyusmssm === $post->post_status) { goto msiuqseowuumiwuo; } if ("\x66\x75\x74\165\162\x65" === $post->post_status) { goto gqycmyieayoegcsy; } $iueymcwwscwqkiyq = __("\114\141\163\164\x20\115\157\x64\151\146\151\145\144"); goto esokkakkumskkmiu; msiuqseowuumiwuo: $iueymcwwscwqkiyq = __("\x50\165\x62\154\151\x73\x68\145\x64"); goto esokkakkumskkmiu; gqycmyieayoegcsy: if ($time_diff > 0) { goto kikkkoqiumqoeiyy; } $iueymcwwscwqkiyq = __("\123\x63\x68\x65\144\x75\x6c\145\144"); goto wyqueeskecameuks; kikkkoqiumqoeiyy: $iueymcwwscwqkiyq = ManipulateHTML::ciuuiyckmsygceis(__("\x4d\x69\x73\x73\x65\x64\x20\163\143\x68\145\144\165\x6c\145"), ["\143\x6c\x61\x73\163" => "\x65\162\162\x6f\x72\55\x6d\x65\x73\x73\x61\x67\x65"]); wyqueeskecameuks: esokkakkumskkmiu: $iueymcwwscwqkiyq = $this->sscegwueamckwmcy("\x70\x6f\163\164\x5f\144\x61\x74\145\137\143\x6f\x6c\x75\155\156\137\163\164\141\x74\165\x73", $iueymcwwscwqkiyq, $post, "\144\x61\164\145", $wmekckkyoiyickmk); if (!$iueymcwwscwqkiyq) { goto sqiyuasgusgawuoi; } echo $iueymcwwscwqkiyq . "\x3c\x62\x72\x20\x2f\76"; sqiyuasgusgawuoi: echo $this->sscegwueamckwmcy("\x70\157\x73\x74\x5f\x64\x61\164\x65\x5f\143\x6f\154\165\x6d\x6e\137\x74\151\155\145", $t_time, $post, "\144\x61\164\x65", $wmekckkyoiyickmk); } public function column_title($igqsaukqcqscimok) { $meqocwsecsywiiqs = ''; $migiiksoiymissge = ''; if (!$igqsaukqcqscimok instanceof WP_Post) { goto iayguaeseyaemwkk; } $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($igqsaukqcqscimok); $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok); iayguaeseyaemwkk: echo ManipulateHTML::yuawgssgauywkiia(ManipulateHTML::ciuuiyckmsygceis($meqocwsecsywiiqs), $migiiksoiymissge, [self::mgsccwumkcawaqcy => "\137\142\154\141\156\x6b"]); if ($this->icwseyeieagkgego($igqsaukqcqscimok)) { goto akyiiioycmgqyuok; } echo ManipulateHTML::yuawgssgauywkiia(ManipulateHTML::cgyigucuyougmoou(sprintf(__("\x49\164\47\163\x20\114\x65\x76\x65\154\x20\x25\163", PR__MDL__OPTIMIZATION), $this->msywmyaoqmaegsuy(2)), [self::squoamkioomemiyi => self::ckcawaoawwioqecq]), ManipulateServer::msewgimgmcgcomey($this->oyqkaeooscmcweyc(self::imywcsggckkcywgk), ["\x73" => $meqocwsecsywiiqs]), ["\x63\154\x61\x73\x73" => "\155\x6c\x2d\62", "\x74\151\x74\x6c\x65" => __("\124\x68\x69\x73\40\160\x61\147\145\x20\143\141\156\40\x62\x65\x20\x6d\141\x6e\141\147\145\x20\142\x79\x20\x6c\x65\x76\x65\x6c\x20\62\40\x6c\x69\x73\x74", PR__MDL__OPTIMIZATION)]); akyiiioycmgqyuok: if (!($migiiksoiymissge && $this->uuqqoaacemswasgw($migiiksoiymissge))) { goto ycomeuqeessamows; } echo ManipulateHTML::yuawgssgauywkiia(ManipulateHTML::cgyigucuyougmoou(__("\102\x79\160\141\163\x73\145\144", PR__MDL__OPTIMIZATION), [self::squoamkioomemiyi => self::wyaqwomqwwaoiwas]), BypassSetting::symcgieuakksimmu()->oiucukewkckkwiqc(), ["\143\154\x61\163\163" => "\155\x6c\x2d\x32", "\164\x69\x74\154\x65" => __("\x54\x68\151\x73\40\x70\141\x67\x65\40\x65\170\x63\154\165\x64\145\x64\40\142\171\x20\143\157\156\x73\x74\162\141\151\x6e\x74\x73\x20\x73\145\164\164\151\x6e\x67", PR__MDL__OPTIMIZATION)]); ycomeuqeessamows: } public function prepare_items() { $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); $suaemuyiacqyugsm = $this->get_pagenum(); $ymqmyyeuycgmigyo = ManipulatePost::yyqgaciccoiwuwyq($sqeykgyoooqysmca); $weyoqgcesqgeusiu = $this->get_items_per_page("\145\144\151\164\x5f{$ymqmyyeuycgmigyo}\137\160\145\x72\x5f\160\141\147\x65"); $weyoqgcesqgeusiu = $this->sscegwueamckwmcy("\x65\144\x69\164\137\x70\157\x73\164\163\x5f\x70\145\162\137\160\141\147\x65", $weyoqgcesqgeusiu, $ymqmyyeuycgmigyo); $ywmkwiwkosakssii = ["\163" => $_REQUEST["\x73"] ?? '', self::kkcqmwgccaygggcu => $suaemuyiacqyugsm, self::uouymeyqasaeckso => $ymqmyyeuycgmigyo, self::gikuasuikwemyqoq => self::wmmucsiyiyusmssm, self::goqgcigmiawyauai => $weyoqgcesqgeusiu]; $gqgemcmoicmgaqie = new WP_Query($ywmkwiwkosakssii); $this->items = $gqgemcmoicmgaqie->get_posts(); if ($gqgemcmoicmgaqie->found_posts || $this->get_pagenum() === 1) { goto mqacqosyicuiqwia; } $iueymcwwscwqkiyq = self::wmmucsiyiyusmssm; $uoiyqmsewicueqma = (array) ManipulatePost::wsqeykgqiemswysa($ymqmyyeuycgmigyo, $iueymcwwscwqkiyq, "\162\x65\x61\x64\141\142\154\145"); if ($uoiyqmsewicueqma) { goto owiguescmqyqukui; } $uuwmqqqiwksuaise = array_sum($uoiyqmsewicueqma); goto guummoewucyeuiek; owiguescmqyqukui: $uuwmqqqiwksuaise = $uoiyqmsewicueqma; guummoewucyeuiek: goto mcuoyseuwoueyaie; mqacqosyicuiqwia: $uuwmqqqiwksuaise = $gqgemcmoicmgaqie->found_posts; mcuoyseuwoueyaie: $qqkyekmackggcick = []; $wkkweuacukumqmya = $this->get_columns(); $osmkwgikieoyykwg = []; $this->_column_headers = [$wkkweuacukumqmya, $qqkyekmackggcick, $osmkwgikieoyykwg]; $this->set_pagination_args(["\x74\x6f\x74\x61\x6c\137\151\x74\145\x6d\163" => $uuwmqqqiwksuaise, self::ausqeuugegoygouq => $weyoqgcesqgeusiu]); } public function icwseyeieagkgego($igqsaukqcqscimok) : bool { $weksiguqgqscsoee = true; if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto ugyawwukegyoqmsq; } if ($igqsaukqcqscimok instanceof WP_Post) { goto kwowggaooiyqawyq; } $sqeykgyoooqysmca = ManipulateArray::get($igqsaukqcqscimok, self::squoamkioomemiyi); $ccamueccusigaaio = ManipulateArray::get($igqsaukqcqscimok, self::mgsccwumkcawaqcy); goto ieoeeyieoskuyiyw; kwowggaooiyqawyq: $sqeykgyoooqysmca = ManipulatePost::gueasuouwqysmomu($igqsaukqcqscimok); $ccamueccusigaaio = ManipulatePost::mwikyscisascoeea($igqsaukqcqscimok); ieoeeyieoskuyiyw: if (!($ccamueccusigaaio && $sqeykgyoooqysmca)) { goto ciiyqsiswkcwsocm; } $weksiguqgqscsoee = !$jwsqucqyaoaasykk->qumqowkwyaceeqwu([self::squoamkioomemiyi => $sqeykgyoooqysmca, self::mgsccwumkcawaqcy => $ccamueccusigaaio, self::ciywsqoeiymemsys => [self::ciyoccqkiamemcmm => self::wiewguakgwmoqaea, self::eugyciakiowwcuwm => "\41\x3d"]]); ciiyqsiswkcwsocm: ugyawwukegyoqmsq: return $weksiguqgqscsoee; } }
