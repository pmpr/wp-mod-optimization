<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d45f1553980             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Package\Optimization\Manipulate\Manipulate; use Pmpr\Package\Optimization\Page\Model; use WP_Post; use WP_Post_Type; use WP_Taxonomy; class ListTable extends WPListTable { protected $type = null; public function __construct($sqeykgyoooqysmca, $ywmkwiwkosakssii = []) { $this->type = $sqeykgyoooqysmca; parent::__construct($ywmkwiwkosakssii); } public function gueasuouwqysmomu() { return $this->type; } public function get_columns() { return [self::qescuiwgsyuikume => __("\124\x69\x74\x6c\x65", PR__PKG__OPTIMIZATION), "\x6f\160\x74\x5f\163\x74\141\164\165\163" => __("\117\x70\x74\40\x53\164\x61\164\x75\163", PR__PKG__OPTIMIZATION)]; } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { $ccowyogiqwikkkie = ''; if (!($micmwmywmkguiyyk === $column_name)) { goto syuywgysqyckcqay; } $ccowyogiqwikkkie = []; $migiiksoiymissge = ''; if (!$igqsaukqcqscimok instanceof WP_Post) { goto kmseiouukkqiumum; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok); kmseiouukkqiumum: $meqocwsecsywiiqs = __("\120\x75\162\147\145\40\103\141\143\150\145", PR__PKG__OPTIMIZATION); $ccowyogiqwikkkie[] = ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\162\145\x66" => "\x23", "\143\154\141\163\x73" => "\157\160\164\55\x70\141\x67\145\55\x61\143\164\151\x6f\156\40\x70\162\55\143\157\x6e\x66\x69\162\155\141\x62\x6c\x65\55\x61\x63\164\x69\157\x6e", "\x61\x72\151\x61\x2d\154\x61\142\x65\154" => $meqocwsecsywiiqs, "\144\x61\164\x61\x2d\x63\x6f\156\x66\x69\x67" => ManipulateHTML::uskieqmcqyecigmy(["\x74\171\160\x65" => self::wyaqwomqwwaoiwas, "\164\x69\x74\x6c\x65" => $meqocwsecsywiiqs, "\143\157\156\x74\145\156\x74" => __("\101\x72\145\40\171\x6f\165\40\163\x75\162\145\40\141\142\x6f\x75\x74\40\x72\x65\x4f\160\x74\151\x6d\x69\x7a\x65\40\164\x68\x69\x73\40\160\x61\147\145\x3f", PR__PKG__OPTIMIZATION), "\x62\x75\164\x74\157\156\163" => ["\x63\x61\x6e\143\145\x6c", ["\x63\x6c\141\x73\x73" => "\157\x70\x74\x2d\x70\165\162\147\x65\x2d\x70\157\x73\164\x2d\x63\x61\x63\150\x65\40\x62\x74\x6e\40\x62\164\x6e\55\x70\x72\x69\155\x61\162\x79", "\x74\151\x74\154\145" => $meqocwsecsywiiqs, "\144\141\x74\x61\55\x70\x65\162\155\x61\x6c\x69\156\153" => $migiiksoiymissge, "\144\x61\164\x61\x2d\155\151\x63\x72\x6f\155\x6f\144\x61\154\55\x63\154\x6f\x73\145"]]])], $meqocwsecsywiiqs); $ccowyogiqwikkkie = $this->row_actions($ccowyogiqwikkkie); syuywgysqyckcqay: return $ccowyogiqwikkkie; } protected function column_default($igqsaukqcqscimok, $column_name) { $aqykuigiuwmmcieu = ''; $meqocwsecsywiiqs = ''; $migiiksoiymissge = ''; if (!$igqsaukqcqscimok instanceof WP_Post) { goto ggewkaiwwgkmkwgc; } $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($igqsaukqcqscimok); $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok); ggewkaiwwgkmkwgc: switch ($column_name) { case self::qescuiwgsyuikume: $aqykuigiuwmmcieu = ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\162\x65\x66" => $migiiksoiymissge, "\x74\x61\162\x67\145\164" => "\x5f\142\x6c\x61\156\x6b"], ManipulateHTML::ciuuiyckmsygceis($meqocwsecsywiiqs)); goto kkieqqwwascekcmo; case "\157\160\x74\137\x73\x74\141\164\x75\163": $aqykuigiuwmmcieu = Manipulate::oeqqgiayuaouaeuc($migiiksoiymissge); goto kkieqqwwascekcmo; } ycueoqkeakismiqw: kkieqqwwascekcmo: return $aqykuigiuwmmcieu; } public function prepare_items() { global $wp_query, $per_page; $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); $suaemuyiacqyugsm = $this->get_pagenum(); $ymqmyyeuycgmigyo = $sqeykgyoooqysmca->name; $ywmkwiwkosakssii = [self::goqgcigmiawyauai => $per_page, self::imywcsggckkcywgk => $suaemuyiacqyugsm]; $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = $jwsqucqyaoaasykk->ssiyoimagsskwsoi([ $jwsqucqyaoaasykk::squoamkioomemiyi => $ymqmyyeuycgmigyo, $jwsqucqyaoaasykk::ciywsqoeiymemsys => [self::ciyoccqkiamemcmm => $jwsqucqyaoaasykk::wiewguakgwmoqaea, self::eugyciakiowwcuwm => "\x21\75"], ], $jwsqucqyaoaasykk::mgsccwumkcawaqcy); $this->items = ManipulatePost::ciugwooasaqcywas($ymqmyyeuycgmigyo, $ywmkwiwkosakssii); $uuwmqqqiwksuaise = 0; if ($wp_query->found_posts || $suaemuyiacqyugsm === 1) { goto mugeiwyysiemwaym; } if (!$sqeykgyoooqysmca instanceof WP_Post_Type) { goto awimwukcyiceackk; } $gaeqamemwmwsyukm = (array) wp_count_posts($sqeykgyoooqysmca->name, "\162\145\x61\x64\141\x62\154\x65"); $uuwmqqqiwksuaise = array_sum($gaeqamemwmwsyukm); awimwukcyiceackk: goto euymeegkukskiowq; mugeiwyysiemwaym: $uuwmqqqiwksuaise = $wp_query->found_posts; euymeegkukskiowq: $qqkyekmackggcick = []; $wkkweuacukumqmya = $this->get_columns(); $osmkwgikieoyykwg = []; $this->_column_headers = [$wkkweuacukumqmya, $qqkyekmackggcick, $osmkwgikieoyykwg]; $this->set_pagination_args(["\x74\157\x74\x61\x6c\137\151\164\145\x6d\x73" => $uuwmqqqiwksuaise, self::ausqeuugegoygouq => $per_page]); } }
