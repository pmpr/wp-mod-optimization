<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65310fbf7f1f7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Module\Optimization\Page\Model; use Pmpr\Module\Optimization\Setting; use Pmpr\Module\Optimization\Traits\CommonTrait; use Pmpr\Module\Optimization\Bypass\Setting as BypassSetting; use WP_Post; use WP_Post_Type; use WP_Query; use WP_Taxonomy; class ListTable extends WPListTable { use CommonTrait; protected $type; public function __construct($sqeykgyoooqysmca, $ywmkwiwkosakssii = []) { $this->type = $sqeykgyoooqysmca; parent::__construct($ywmkwiwkosakssii); } public function gueasuouwqysmomu() { return $this->type; } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { $ccowyogiqwikkkie = ''; if (!($micmwmywmkguiyyk === $column_name)) { goto saycoceqywiekqsi; } $ccowyogiqwikkkie = []; $migiiksoiymissge = ''; if (!$igqsaukqcqscimok instanceof WP_Post) { goto gskaqcgccswmuqsy; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok); gskaqcgccswmuqsy: if (!($this->icwseyeieagkgego($igqsaukqcqscimok) && !$this->uuqqoaacemswasgw($migiiksoiymissge))) { goto uccuykggugcmiyam; } $meqocwsecsywiiqs = __("\x72\x65\117\x70\x74\x69\x6d\x69\x7a\145", PR__MDL__OPTIMIZATION); $ccowyogiqwikkkie[] = ManipulateHTML::yuawgssgauywkiia($meqocwsecsywiiqs, "\x23", ["\x63\154\141\x73\163" => "\x6f\160\x74\x2d\x70\x61\x67\x65\x2d\x61\x63\x74\x69\157\156\x20\160\x72\55\x63\x6f\x6e\146\151\x72\155\141\142\154\145\x2d\x61\143\x74\x69\157\x6e", "\x61\x72\151\x61\x2d\154\141\142\x65\x6c" => $meqocwsecsywiiqs, "\144\141\x74\x61\x2d\x63\x6f\156\x66\x69\147" => ManipulateHTML::uskieqmcqyecigmy([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\x41\x72\x65\40\x79\x6f\165\x20\x73\165\x72\x65\40\x61\x62\157\165\x74\40\x72\145\x4f\160\164\151\155\x69\172\x65\40\x74\x68\x69\163\40\160\141\x67\145\77", PR__MDL__OPTIMIZATION), "\142\165\164\x74\157\156\163" => [self::mosycwwoqguicaeo, ["\x63\x6c\141\163\163" => "\x6f\160\x74\55\x70\x75\162\147\145\x2d\160\157\163\x74\55\x63\x61\x63\150\x65\x20\142\164\156\40\x62\164\156\55\160\162\x69\x6d\x61\x72\171", self::qescuiwgsyuikume => $meqocwsecsywiiqs, "\x64\x61\164\141\55\x70\x65\162\155\x61\x6c\151\156\x6b" => $migiiksoiymissge, "\x64\141\x74\141\x2d\155\x69\x63\x72\157\155\157\144\141\154\x2d\x63\154\157\x73\145"]]])]); uccuykggugcmiyam: $ccowyogiqwikkkie = $this->row_actions($ccowyogiqwikkkie); saycoceqywiekqsi: return $ccowyogiqwikkkie; } public function get_columns() { return [self::qescuiwgsyuikume => __("\124\151\164\x6c\145", PR__MDL__OPTIMIZATION), "\157\x70\x74\137\163\x74\141\164\165\163" => __("\117\160\164\x20\x53\164\141\x74\x75\163", PR__MDL__OPTIMIZATION), self::kumuoysauoagaiiy => __("\x44\x61\x74\145", PR__MDL__OPTIMIZATION)]; } public function column_opt_status($igqsaukqcqscimok) { echo $this->ccioymuswicowwkw(ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok)); } public function column_date($post) { global $wmekckkyoiyickmk; if ("\x30\60\x30\60\55\60\x30\55\60\60\x20\x30\60\72\x30\x30\x3a\x30\x30" === $post->post_date) { goto sqaowueaequoigsa; } $t_time = sprintf( __("\45\x31\44\x73\x20\x61\164\x20\x25\62\x24\163"), get_the_time(__("\x59\57\x6d\x2f\x64"), $post), get_the_time(__("\147\72\151\x20\x61"), $post) ); $cqgoimumaewouews = get_post_timestamp($post); $time_diff = time() - $cqgoimumaewouews; goto eqmauwqqowsiwaue; sqaowueaequoigsa: $t_time = __("\x55\156\x70\x75\x62\154\151\163\150\145\144"); $time_diff = 0; eqmauwqqowsiwaue: if (self::wmmucsiyiyusmssm === $post->post_status) { goto kkogaccoqmsmmkmo; } if ("\146\x75\164\x75\x72\145" === $post->post_status) { goto qmiqicgscsuoyeqo; } $iueymcwwscwqkiyq = __("\114\141\x73\164\40\115\x6f\x64\x69\x66\151\x65\144"); goto yuyiqaawwgaywgqo; kkogaccoqmsmmkmo: $iueymcwwscwqkiyq = __("\x50\165\x62\154\x69\163\150\145\144"); goto yuyiqaawwgaywgqo; qmiqicgscsuoyeqo: if ($time_diff > 0) { goto waycokyiesmqgqcg; } $iueymcwwscwqkiyq = __("\x53\x63\x68\145\x64\x75\154\145\x64"); goto yqkyoaiwcyqeaqwu; waycokyiesmqgqcg: $iueymcwwscwqkiyq = ManipulateHTML::ciuuiyckmsygceis(__("\115\x69\163\x73\x65\x64\x20\x73\143\x68\x65\144\x75\154\145"), ["\x63\154\x61\x73\x73" => "\145\x72\162\157\162\55\x6d\145\x73\163\x61\x67\x65"]); yqkyoaiwcyqeaqwu: yuyiqaawwgaywgqo: $iueymcwwscwqkiyq = $this->sscegwueamckwmcy("\x70\157\163\x74\x5f\x64\141\x74\145\x5f\143\157\154\165\x6d\x6e\x5f\x73\x74\141\x74\165\163", $iueymcwwscwqkiyq, $post, "\144\x61\x74\x65", $wmekckkyoiyickmk); if (!$iueymcwwscwqkiyq) { goto ysaumykuimqigeqa; } echo $iueymcwwscwqkiyq . "\74\142\x72\40\57\x3e"; ysaumykuimqigeqa: echo $this->sscegwueamckwmcy("\160\157\x73\x74\x5f\144\x61\164\x65\137\143\x6f\x6c\165\x6d\x6e\x5f\164\151\x6d\x65", $t_time, $post, "\144\x61\164\x65", $wmekckkyoiyickmk); } public function column_title($igqsaukqcqscimok) { $meqocwsecsywiiqs = ''; $migiiksoiymissge = ''; if (!$igqsaukqcqscimok instanceof WP_Post) { goto oegaywiwywuyksaq; } $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($igqsaukqcqscimok); $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok); oegaywiwywuyksaq: echo ManipulateHTML::yuawgssgauywkiia(ManipulateHTML::ciuuiyckmsygceis($meqocwsecsywiiqs), $migiiksoiymissge, [self::mgsccwumkcawaqcy => "\x5f\142\154\x61\156\x6b"]); if ($this->icwseyeieagkgego($igqsaukqcqscimok)) { goto eyskqaccgeomqmyw; } echo ManipulateHTML::yuawgssgauywkiia(ManipulateHTML::cgyigucuyougmoou(sprintf(__("\x49\164\47\163\40\x4c\x65\166\x65\154\40\45\x73", PR__MDL__OPTIMIZATION), $this->msywmyaoqmaegsuy(2)), [self::squoamkioomemiyi => self::ckcawaoawwioqecq]), ManipulateServer::msewgimgmcgcomey($this->oyqkaeooscmcweyc(self::imywcsggckkcywgk), ["\x73" => $meqocwsecsywiiqs]), ["\x63\x6c\x61\x73\x73" => "\155\154\55\x32", "\164\x69\164\154\x65" => __("\x54\x68\151\163\x20\x70\141\147\x65\x20\x63\x61\x6e\40\x62\145\x20\155\141\x6e\141\x67\145\x20\x62\171\x20\154\x65\166\x65\154\40\x32\x20\x6c\x69\x73\x74", PR__MDL__OPTIMIZATION)]); eyskqaccgeomqmyw: if (!($migiiksoiymissge && $this->uuqqoaacemswasgw($migiiksoiymissge))) { goto uiowwckamqucksim; } echo ManipulateHTML::yuawgssgauywkiia(ManipulateHTML::cgyigucuyougmoou(__("\x42\x79\x70\141\x73\x73\x65\x64", PR__MDL__OPTIMIZATION), [self::squoamkioomemiyi => self::wyaqwomqwwaoiwas]), BypassSetting::symcgieuakksimmu()->oiucukewkckkwiqc(), ["\x63\154\x61\163\163" => "\155\154\x2d\62", "\x74\151\x74\154\x65" => __("\124\150\x69\163\x20\x70\x61\x67\145\40\145\170\143\x6c\165\x64\x65\144\x20\x62\x79\40\143\x6f\156\x73\164\162\x61\151\156\164\163\x20\163\x65\x74\x74\151\156\147", PR__MDL__OPTIMIZATION)]); uiowwckamqucksim: } public function prepare_items() { $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); $suaemuyiacqyugsm = $this->get_pagenum(); $ymqmyyeuycgmigyo = ManipulatePost::yyqgaciccoiwuwyq($sqeykgyoooqysmca); $weyoqgcesqgeusiu = $this->get_items_per_page("\x65\x64\151\164\137{$ymqmyyeuycgmigyo}\x5f\160\x65\x72\137\160\141\x67\145"); $weyoqgcesqgeusiu = $this->sscegwueamckwmcy("\x65\144\x69\x74\137\x70\157\163\x74\163\137\160\145\x72\137\160\141\147\x65", $weyoqgcesqgeusiu, $ymqmyyeuycgmigyo); $ywmkwiwkosakssii = ["\163" => $_REQUEST["\163"] ?? '', self::kkcqmwgccaygggcu => $suaemuyiacqyugsm, self::uouymeyqasaeckso => $ymqmyyeuycgmigyo, self::gikuasuikwemyqoq => self::wmmucsiyiyusmssm, self::goqgcigmiawyauai => $weyoqgcesqgeusiu]; $gqgemcmoicmgaqie = new WP_Query($ywmkwiwkosakssii); $this->items = $gqgemcmoicmgaqie->get_posts(); if ($gqgemcmoicmgaqie->found_posts || $this->get_pagenum() === 1) { goto imsgusweocmiyygi; } $iueymcwwscwqkiyq = self::wmmucsiyiyusmssm; $uoiyqmsewicueqma = (array) ManipulatePost::wsqeykgqiemswysa($ymqmyyeuycgmigyo, $iueymcwwscwqkiyq, "\162\x65\x61\x64\x61\x62\x6c\x65"); if ($uoiyqmsewicueqma) { goto wscikmsmwmocsqeu; } $uuwmqqqiwksuaise = array_sum($uoiyqmsewicueqma); goto icawmkaswkmwicsa; wscikmsmwmocsqeu: $uuwmqqqiwksuaise = $uoiyqmsewicueqma; icawmkaswkmwicsa: goto qwueqigcisoogaec; imsgusweocmiyygi: $uuwmqqqiwksuaise = $gqgemcmoicmgaqie->found_posts; qwueqigcisoogaec: $qqkyekmackggcick = []; $wkkweuacukumqmya = $this->get_columns(); $osmkwgikieoyykwg = []; $this->_column_headers = [$wkkweuacukumqmya, $qqkyekmackggcick, $osmkwgikieoyykwg]; $this->set_pagination_args(["\164\x6f\x74\x61\x6c\137\x69\164\145\x6d\x73" => $uuwmqqqiwksuaise, self::ausqeuugegoygouq => $weyoqgcesqgeusiu]); } public function icwseyeieagkgego($igqsaukqcqscimok) : bool { $weksiguqgqscsoee = true; if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto igckskemqkqueukg; } if ($igqsaukqcqscimok instanceof WP_Post) { goto kmeekqukcecuscye; } $sqeykgyoooqysmca = ManipulateArray::get($igqsaukqcqscimok, self::squoamkioomemiyi); $ccamueccusigaaio = ManipulateArray::get($igqsaukqcqscimok, self::mgsccwumkcawaqcy); goto csoeisssoumqqeoa; kmeekqukcecuscye: $sqeykgyoooqysmca = ManipulatePost::gueasuouwqysmomu($igqsaukqcqscimok); $ccamueccusigaaio = ManipulatePost::mwikyscisascoeea($igqsaukqcqscimok); csoeisssoumqqeoa: if (!($ccamueccusigaaio && $sqeykgyoooqysmca)) { goto weuueokkumksgaeo; } $weksiguqgqscsoee = !$jwsqucqyaoaasykk->qumqowkwyaceeqwu([self::squoamkioomemiyi => $sqeykgyoooqysmca, self::mgsccwumkcawaqcy => $ccamueccusigaaio, self::ciywsqoeiymemsys => [self::ciyoccqkiamemcmm => self::wiewguakgwmoqaea, self::eugyciakiowwcuwm => "\41\75"]]); weuueokkumksgaeo: igckskemqkqueukg: return $weksiguqgqscsoee; } }
