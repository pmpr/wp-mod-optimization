<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c04d4492ba5             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Cloudflare; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconBrandInterface; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\Optimization\Notice; use Pmpr\Package\Optimization\Tab; class Setting extends Tab { const AUTH_MODE_API_KEY = "\x61\160\x69\x6b\x65\171\137\155\157\x64\x65"; const AUTH_MODE_API_TOKEN = "\x74\157\153\145\x6e\153\x65\x79\137\x6d\157\x64\x65"; const CF_ = "\x63\x66\137"; const CF_EMAIL = self::CF_ . "\145\155\x61\151\154"; const CF_TOKEN = self::CF_ . "\x74\157\153\145\156"; const CF_ZONEID = self::CF_ . "\x7a\x6f\x6e\x65\x69\x64"; const CF_MAXAGE = self::CF_ . "\x6d\x61\170\x61\147\x65"; const CF_APIKEY = self::CF_ . "\141\x70\151\x6b\145\x79"; const CF_DEV_MODE = self::CF_ . "\x64\x65\166\137\x6d\x6f\x64\x65"; const CF_APITOKEN = self::CF_ . "\x61\x70\151\164\x6f\x6b\x65\156"; const CF_AUTH_MODE = self::CF_ . "\x61\165\x74\150\x5f\155\x6f\x64\x65"; const CF_OLD_BC_TTL = self::CF_ . "\x6f\x6c\x64\137\142\143\137\164\164\x6c"; const CF_ZONEID_LIST = self::CF_ . "\x7a\157\x6e\145\151\x64\x5f\x6c\x69\163\x74"; const CF_PAGE_RULE_ID = self::CF_ . "\x70\141\x67\145\x5f\162\165\154\145\x5f\151\144"; const CF_CACHE_ENABLED = self::CF_ . "\143\x61\143\150\x65\x5f\x65\156\141\142\154\145\x64"; const CF_BROWSER_MAXAGE = self::CF_ . "\142\162\157\167\163\x65\x72\x5f\155\x61\x78\x61\147\x65"; const CF_APITOKEN_DOMAIN = self::CF_ . "\x61\x70\151\164\157\x6b\x65\156\x5f\144\x6f\155\141\x69\x6e"; const CF_PURGE_ONLY_HTML = self::CF_ . "\160\x75\x72\147\x65\x5f\157\156\x6c\x79\137\150\164\155\154"; const CF_DISABLE_CACHE_PURGING_QUEUE = self::CF_ . "\144\151\163\x61\142\154\x65\x5f\143\x61\143\150\145\137\160\165\x72\147\x69\x6e\x67\137\x71\165\x65\165\145"; const CF_BYPASS_BACKEND_PAGE_RULE_ID = self::CF_ . "\x62\x79\x70\x61\x73\163\x5f\x62\141\143\153\145\156\x64\137\x70\x61\147\145\x5f\162\x75\154\x65\x5f\151\x64"; const CF_PREFETCH_URLS_VIEWPORT_TIMESTAMP = self::CF_ . "\160\162\145\146\145\x74\x63\150\137\165\x72\x6c\163\x5f\166\x69\145\167\x70\x6f\x72\x74\137\164\x69\155\x65\x73\x74\x61\155\x70"; public function aucimgwswmgaocae($ywoucyskcquysiwc = []) : array { $wyeyeaaekyoyimqu = 1; $cgaiqcoosmmymqqm = $this->qiouekgwkiumuiuu()->oywimmyysigqkeqa(); if (!$cgaiqcoosmmymqqm) { goto awwaiioyywmokwsm; } $wyeyeaaekyoyimqu = 2; awwaiioyywmokwsm: $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $cciauwuwuqaywgce = self::sgsmqaoowiyocqaa("{$ymqmyyeuycgmigyo}\137\x63\x6c\x6f\165\144\146\x6c\141\x72\145", __("\x43\x6c\157\x75\x64\146\x6c\x61\162\145", PR__PKG__OPTIMIZATION))->saemoowcasogykak(IconFontawesomeInterface::ICON_SMOKE)->jyumyyugiwwiqomk(5); $cciauwuwuqaywgce->uwymwiymwwekwuwe($this->ueiyqqwuiqmmqymc($wyeyeaaekyoyimqu))->uwymwiymwwekwuwe($this->ksycwoccugyuecyw($wyeyeaaekyoyimqu)); $ywcqeseeeuumcwkm = self::cgygmuguceeosoey("{$ymqmyyeuycgmigyo}\137\143\154\157\165\144\146\x6c\x61\162\x65\137\x61\x75\164\x68", __("\101\x63\143\157\165\156\x74", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::CF_AUTH_MODE, __("\101\x75\164\150\x65\x6e\164\x69\x63\x61\x74\151\x6f\156\40\155\157\144\x65", PR__PKG__OPTIMIZATION), [self::AUTH_MODE_API_KEY => __("\101\x50\x49\40\113\145\171", PR__PKG__OPTIMIZATION), self::AUTH_MODE_API_TOKEN => __("\101\x50\x49\40\x54\x6f\x6b\x65\x6e", PR__PKG__OPTIMIZATION)], __("\x41\x75\x74\x68\145\156\x74\151\x63\x61\x74\151\157\x6e\40\155\157\144\145\40\164\x6f\x20\x75\163\145\x20\x74\157\x20\x63\x6f\156\x6e\x65\x63\164\40\164\157\40\171\157\165\x72\40\x43\154\157\x75\144\146\x6c\x61\162\x65\x20\141\x63\143\x6f\x75\156\x74\56", PR__PKG__OPTIMIZATION))->oeeumggeiyyckkom(self::AUTH_MODE_API_KEY, self::CF_APIKEY)->oeeumggeiyyckkom(self::AUTH_MODE_API_TOKEN, [self::CF_APITOKEN, self::CF_APITOKEN_DOMAIN])->eyygsasuqmommkua(self::AUTH_MODE_API_KEY))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::CF_EMAIL, __("\x43\x6c\157\165\144\x66\154\141\162\145\x20\x65\x2d\155\141\151\x6c", PR__PKG__OPTIMIZATION), __("\x54\x68\145\x20\145\155\x61\x69\154\x20\x61\144\144\x72\145\x73\x73\40\x79\x6f\165\40\x75\x73\145\x20\x74\x6f\40\154\157\147\40\151\156\40\164\x6f\40\103\x6c\157\x75\144\x66\x6c\x61\x72\x65\56", PR__PKG__OPTIMIZATION))->mkiaygiogeeyogqm())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::CF_APIKEY, __("\x41\120\111\x20\113\x65\x79", PR__PKG__OPTIMIZATION), __("\124\150\145\x20\x47\x6c\157\142\141\x6c\40\x41\x50\111\x20\113\x65\x79\40\x65\x78\x74\x72\x61\160\x6f\x6c\x61\x74\145\144\40\146\162\157\x6d\40\171\x6f\165\162\x20\x43\x6c\157\165\144\146\154\x61\x72\145\40\141\143\143\x6f\x75\x6e\164\56", PR__PKG__OPTIMIZATION))->yskkmqiusguummwa())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::CF_APITOKEN, __("\101\120\111\40\124\157\153\145\156", PR__PKG__OPTIMIZATION), __("\x54\150\x65\40\x41\x50\x49\x20\124\157\153\x65\x6e\40\x65\x78\164\x72\141\x70\x6f\x6c\x61\164\x65\x64\x20\146\x72\x6f\x6d\40\171\157\165\x72\x20\x43\154\157\x75\x64\146\x6c\x61\x72\x65\40\x61\x63\x63\157\165\156\164\56", PR__PKG__OPTIMIZATION))->yskkmqiusguummwa())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::CF_APITOKEN_DOMAIN, __("\x44\157\155\141\x69\156\x20\x4e\141\x6d\x65", PR__PKG__OPTIMIZATION), __("\101\x64\144\40\164\150\x65\40\144\157\155\141\x69\x6e\40\x6e\x61\x6d\145\40\146\x6f\x72\40\167\x68\151\x63\x68\x20\171\157\165\x20\x77\141\156\164\x20\164\x6f\x20\x65\x6e\x61\x62\x6c\x65\40\164\150\x65\x20\x63\141\143\x68\145\x20\x65\x78\141\143\x74\154\x79\x20\x61\x73\x20\162\145\x70\x6f\162\164\x65\x64\x20\x6f\156\x20\x43\154\157\165\x64\x66\154\141\162\145\x2c\40\x74\150\x65\x6e\40\x63\x6c\151\143\153\40\157\156\40\x55\160\x64\x61\164\x65\40\163\x65\x74\164\151\156\147\x73\56", PR__PKG__OPTIMIZATION))->eyygsasuqmommkua(Manipulate::goewgasukwccacim())->yskkmqiusguummwa())->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::CF_ZONEID, __("\x44\x6f\155\x61\x69\156\40\116\141\x6d\145", PR__PKG__OPTIMIZATION), $this->qiouekgwkiumuiuu()->yayksoygskcuaygq(), __("\123\x65\154\x65\x63\x74\x20\164\150\x65\40\144\157\155\141\151\156\40\x66\x6f\x72\40\167\150\151\143\150\40\x79\157\x75\x20\167\x61\156\x74\40\x74\x6f\x20\x65\156\x61\x62\x6c\145\x20\164\150\x65\40\143\x61\x63\x68\x65\40\141\x6e\144\x20\x63\x6c\x69\143\x6b\40\x6f\156\40\x55\160\144\x61\x74\x65\40\x73\x65\164\x74\x69\156\147\x73\x2e", PR__PKG__OPTIMIZATION))->eyygsasuqmommkua($this->vkwquymckimskgmw())->kyiucygqsgequoys(__("\x53\145\154\x65\x63\164\x20\141\40\104\157\x6d\x61\x69\156\40\116\x61\x6d\145", PR__PKG__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::ICON_KEY_SKELETON); $cciauwuwuqaywgce->sikqggwmmykuiymy($ywcqeseeeuumcwkm); if (!($wyeyeaaekyoyimqu > 1)) { goto ckwmkquuyyugigom; } $cciauwuwuqaywgce->sikqggwmmykuiymy(self::cgygmuguceeosoey("{$ymqmyyeuycgmigyo}\x5f\143\x6c\157\165\144\146\154\141\x72\145\x5f\143\x61\143\150\x65", __("\103\x61\x63\x68\145", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::CF_MAXAGE, __("\103\154\x6f\x75\144\x66\x6c\x61\162\145\40\103\x61\143\150\145\55\103\157\x6e\164\x72\x6f\154\x20\x6d\x61\x78\55\x61\147\x65", PR__PKG__OPTIMIZATION), sprintf("\45\163\x3c\x62\x72\76\x3c\163\164\162\157\x6e\147\76\45\x73\x3c\57\x73\164\x72\x6f\x6e\147\x3e", __("\104\x6f\156\47\164\40\x74\157\165\143\150\40\x69\x66\40\171\157\165\x20\144\157\156\47\164\x20\x6b\156\x6f\x77\40\167\x68\141\164\x20\x69\x73\x20\x69\x74\x2e\x20\x4d\165\163\164\40\x62\145\x20\147\162\x65\x61\164\145\162\40\x74\150\x61\x6e\40\x7a\x65\162\157\x2e", PR__PKG__OPTIMIZATION), sprintf(__("\122\x65\x63\x6f\x6d\155\145\x6e\144\x65\x64\40\45\163", PR__PKG__OPTIMIZATION), 31536000)))->eyygsasuqmommkua(31536000)->escqqisecooswqgo(1))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::CF_BROWSER_MAXAGE, __("\102\x72\x6f\x77\163\x65\162\x20\x43\x61\143\150\145\55\x43\x6f\x6e\164\x72\x6f\x6c\40\x6d\x61\x78\55\x61\147\145", PR__PKG__OPTIMIZATION), sprintf("\45\x73\74\x62\x72\76\74\163\x74\162\x6f\156\147\x3e\x25\163\74\x2f\x73\164\162\157\x6e\147\76", __("\x44\x6f\x6e\47\x74\x20\164\x6f\165\143\150\x20\151\x66\40\171\157\x75\40\x64\157\x6e\x27\164\40\x6b\156\157\167\40\167\x68\141\x74\40\x69\163\40\x69\x74\x2e\x20\115\x75\163\164\40\x62\145\40\147\x72\145\141\164\145\162\x20\x74\150\x61\156\x20\x7a\x65\x72\157\56", PR__PKG__OPTIMIZATION), sprintf(__("\x52\145\x63\x6f\155\155\x65\x6e\144\x65\144\40\141\x20\x76\141\154\x75\x65\x20\x62\x65\x74\x77\x65\x65\x6e\40\x25\163\40\x61\156\x64\x20\45\163", PR__PKG__OPTIMIZATION), 60, 600)))->eyygsasuqmommkua(60)->escqqisecooswqgo(1))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::CF_PURGE_ONLY_HTML, __("\120\165\162\x67\145\40\110\x54\x4d\114\40\160\x61\x67\x65\163\40\x6f\156\154\x79", PR__PKG__OPTIMIZATION), __("\120\x75\162\x67\x65\x20\157\156\154\x79\40\164\150\x65\40\x63\x61\x63\150\x65\144\40\110\x54\x4d\x4c\x20\160\x61\x67\x65\163\x20\151\156\163\x74\145\141\x64\x20\x6f\x66\40\x74\x68\x65\x20\x77\150\157\x6c\145\40\103\154\157\x75\x64\x66\154\x61\x72\145\x20\143\141\143\150\145\40\50\x61\x73\163\x65\164\40\x2b\40\160\141\147\145\163\51\56", PR__PKG__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::ICON_BOX_ARCHIVE)); ckwmkquuyyugigom: $ywoucyskcquysiwc[] = $cciauwuwuqaywgce; return parent::aucimgwswmgaocae($ywoucyskcquysiwc); } public function ksycwoccugyuecyw($wyeyeaaekyoyimqu) : ?MetaBox { $qkweikswegyciaie = null; if (!($wyeyeaaekyoyimqu < 2)) { goto cumeycwmuuqawwyu; } $mokawwccycoiqeka = ManipulateServer::auksikwsewaywikq(); $gwgucoaaqcwwciqq = ManipulateFormat::gooqqcmsyseiaikc($mokawwccycoiqeka, PHP_URL_HOST); $eyagkkkqkwcuygso = ["\x67\165\151\144\x65\163" => ["\144\x61\x73\x68\x62\x6f\141\162\x64" => [self::qescuiwgsyuikume => __("\103\x6c\x6f\x75\x64\146\x6c\x61\x72\x65\x20\x44\x61\x73\x68\x62\x6f\x61\162\x64", PR__PKG__OPTIMIZATION), self::qwumqqyuasyskkkc => [1 => sprintf(__("\x25\61\44\x73\40\x6f\x72\x20\x25\62\x24\163\40\x6f\x6e\40\45\x33\x24\163", PR__PKG__OPTIMIZATION), ManipulateHTML::uuccukgasskgimsq("\141", ["\150\x72\145\x66" => "\x68\x74\164\160\163\x3a\57\57\144\x61\x73\x68\56\143\154\x6f\x75\x64\146\x6c\141\x72\x65\x2e\x63\x6f\x6d\57\163\151\147\156\55\x75\160", "\164\141\162\147\x65\164" => "\x5f\142\x6c\141\156\153"], __("\123\151\x67\x6e\x20\x75\160", PR__PKG__OPTIMIZATION)), ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\162\x65\x66" => "\150\x74\164\160\163\x3a\57\57\144\x61\163\150\x2e\143\154\157\x75\x64\x66\154\141\162\145\56\x63\157\155\x2f\x6c\157\x67\151\x6e", "\x74\x61\x72\x67\x65\x74" => "\x5f\x62\154\141\x6e\153"], __("\114\157\147\x69\156", PR__PKG__OPTIMIZATION)), __("\x43\x6c\x6f\x75\144\146\154\x61\162\145", PR__PKG__OPTIMIZATION)), 2 => sprintf(__("\x41\x64\144\40\x25\x73\40\x64\157\155\x61\x69\x6e", PR__PKG__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis($gwgucoaaqcwwciqq)), 3 => sprintf(__("\x49\x6e\x20\45\x73\x20\x70\141\147\145\40\x63\150\x6f\163\x65\40\45\x73\x20\160\x6c\141\x6e\40\146\x72\157\x6d\x20\x62\x65\154\x6f\x77\x20\x6f\x66\x20\x6c\151\x73\164", PR__PKG__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis("\123\x65\154\145\143\164\x20\141\40\160\154\x61\x6e"), ManipulateHTML::ciuuiyckmsygceis("\106\162\x65\x65")), 4 => sprintf(__("\111\156\40\x25\163\x20\160\141\147\145\x20\x63\154\151\x63\153\40\x6f\156\40\x25\163\x20\141\156\x64\x20\151\156\x20\45\163\x20\x77\x69\156\144\157\x77\40\x63\x6c\x69\x63\x6b\40\157\x6e\40\45\163", PR__PKG__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis("\101\144\x64\40\155\x6f\162\145\x20\x44\116\x53\40\162\145\x63\x6f\162\x64\163"), ManipulateHTML::ciuuiyckmsygceis("\103\x6f\156\164\151\156\x75\x65"), ManipulateHTML::ciuuiyckmsygceis("\x41\x64\x64\x20\x72\x65\143\x6f\162\x64\x73\40\154\141\164\x65\162"), ManipulateHTML::ciuuiyckmsygceis("\103\157\x6e\x66\151\162\155")), 5 => sprintf(__("\x49\156\x20\45\x73\40\x70\x61\x67\x65\x20\x62\141\163\145\x64\x20\157\x6e\x20\45\163\40\x61\x6e\x64\40\45\x73\40\x72\x65\x6d\x6f\x76\x65\40\x70\162\x65\x76\151\157\165\x73\40\x6e\x61\155\x65\x20\x73\145\x72\x76\145\162\163\40\157\146\40\x25\163\40\141\x6e\144\x20\x72\x65\160\x6c\x61\143\145\x20\143\x6c\157\165\x64\x66\x6c\141\x72\x65\40\x6e\x61\155\145\40\x73\x61\x76\x65\162\163\40\141\x6e\x64\x20\143\154\x69\143\x6b\40\x6f\156\40\x25\x73", PR__PKG__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis("\103\x68\x61\156\x67\145\40\x79\157\x75\162\x20\x6e\141\x6d\x65\163\145\x72\166\x65\x72\x73"), ManipulateHTML::ciuuiyckmsygceis($this->msywmyaoqmaegsuy(3)), ManipulateHTML::ciuuiyckmsygceis($this->msywmyaoqmaegsuy(4)), ManipulateHTML::ciuuiyckmsygceis($gwgucoaaqcwwciqq), ManipulateHTML::ciuuiyckmsygceis("\x44\157\156\x65\x2c\40\x63\150\x65\x63\153\x20\x6e\x61\155\x65\163\x65\162\x76\x65\x72\x73")) . ManipulateHTML::oockkqiqsssakuug(__("\x44\x6f\x20\164\150\151\163\40\142\x79\40\154\x6f\147\147\x69\x6e\x67\x20\151\156\40\164\157\40\171\157\165\x72\x20\144\x6f\x6d\x61\151\156\x20\x72\145\147\151\163\164\162\x61\x72\x20\x70\141\x6e\145\154", PR__PKG__OPTIMIZATION), self::smkwuwawwaqyimcq, [], false, true), 6 => sprintf(__("\x49\x6e\40\45\x73\40\160\x61\x67\x65\40\143\154\151\x63\x6b\40\157\156\x20\x25\163", PR__PKG__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis("\121\x75\x69\x63\x6b\x20\x53\x74\141\x72\164\40\107\x75\151\144\x65"), ManipulateHTML::ciuuiyckmsygceis("\x46\x69\156\x69\x73\150\x20\x6c\x61\x74\x65\x72")), 7 => sprintf(__("\103\x6c\x69\x63\153\40\157\156\x20\45\163\x20\x69\x6e\40\160\x72\x6f\146\151\x6c\145\x20\x6d\x65\x6e\165\40\x61\156\144\x20\151\x6e\40\x25\x73\x20\x74\141\x62\x20\x69\x6e\x20\45\163\x20\163\145\147\x6d\x65\156\164\x2c\x20\143\154\151\143\x6b\x20\x6f\156\40\45\x73\40\162\145\x6c\141\164\x65\144\x20\x74\157\x20\x25\163\x25\163\56\40\111\x6e\40\45\163\x20\155\157\x64\x61\154\x20\x65\x6e\x74\145\162\x20\171\157\x75\162\40\160\141\x73\x73\167\x6f\x72\x64\x20\x61\156\x64\x20\x63\x6c\151\x63\153\40\157\156\40\45\x73\40\x61\x6e\144\40\x63\x6f\160\171\x20\153\x65\x79\x20\164\145\x78\164\40\146\157\162\40\x75\x73\145\x20\x6f\156\40\156\x65\x78\164\x20\x73\x74\x65\x70\x73", PR__PKG__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis("\x4d\171\x20\120\x72\x6f\146\151\x6c\145"), ManipulateHTML::ciuuiyckmsygceis("\x41\120\x49\40\x54\x6f\153\x65\x6e\163"), ManipulateHTML::ciuuiyckmsygceis("\x41\x50\x49\40\113\x65\171\163"), ManipulateHTML::ciuuiyckmsygceis("\x56\x69\x65\167"), ManipulateHTML::ciuuiyckmsygceis("\107\154\x6f\142\x61\x6c\x20\x41\x50\x49\x20\113\x65\x79"), "\74\142\x72\x3e", ManipulateHTML::ciuuiyckmsygceis("\x59\x6f\x75\x72\x20\101\120\111\x20\x4b\x65\x79"), ManipulateHTML::ciuuiyckmsygceis("\126\151\x65\167"))]], "\167\160\x5f\141\144\x6d\151\156" => [self::qescuiwgsyuikume => __("\127\x6f\x72\144\x70\162\145\x73\x73\x20\x41\x64\155\151\156", PR__PKG__OPTIMIZATION), self::qwumqqyuasyskkkc => [1 => sprintf(__("\105\156\x74\x65\x72\x20\164\x68\145\40\145\x6d\141\151\x6c\40\171\157\x75\x20\162\x65\x67\x69\163\x74\x65\x72\145\144\x20\x77\151\x74\150\x20\x6f\x6e\40\143\154\x6f\165\144\x66\154\141\x72\x65\x20\151\156\40\x74\x68\145\x20\x25\x73\x20\x66\151\145\154\144", PR__PKG__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\103\x6c\157\x75\x64\146\x6c\141\162\145\40\145\x2d\x6d\x61\151\x6c", PR__PKG__OPTIMIZATION))), 2 => sprintf(__("\120\165\x74\x20\x74\x68\x65\x20\45\x73\40\x6f\x6e\40\x74\150\x65\x20\45\x73", PR__PKG__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\101\165\x74\x68\x65\x6e\x74\151\143\141\x74\151\157\156\40\x6d\x6f\144\x65", PR__PKG__OPTIMIZATION)), ManipulateHTML::ciuuiyckmsygceis(__("\x41\120\x49\x20\x4b\145\171", PR__PKG__OPTIMIZATION))), 3 => sprintf(__("\120\165\164\40\x74\150\x65\x20\x74\145\170\x74\40\x6f\146\x20\164\x68\145\40\x6b\145\x79\40\143\x6f\160\x69\145\144\x20\151\x6e\40\x74\150\145\x20\160\162\145\x76\151\157\165\x73\40\x73\x74\145\160\x73\40\x69\x6e\40\164\150\x65\40\x25\x73\x20\146\151\x65\x6c\x64", PR__PKG__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\101\120\111\x20\113\145\x79", PR__PKG__OPTIMIZATION))), 4 => sprintf(__("\x43\154\151\143\153\x20\x6f\156\40\45\x73\x20\142\x75\164\x74\x6f\x6e", PR__PKG__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\123\141\x76\x65\40\143\150\141\156\147\x65\x73", PR__PKG__OPTIMIZATION))), 5 => sprintf(__("\111\156\40\164\x68\x65\x20\45\x73\x20\x66\151\145\x6c\144\x2c\40\x73\x65\x6c\x65\x63\x74\x20\45\163", PR__PKG__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\104\157\155\141\x69\x6e\40\x4e\141\155\145", PR__PKG__OPTIMIZATION)), ManipulateHTML::ciuuiyckmsygceis($gwgucoaaqcwwciqq)) . ManipulateHTML::oockkqiqsssakuug(__("\111\x66\x20\x79\157\x75\x72\40\x64\x6f\155\141\151\156\40\156\x61\x6d\145\x20\x69\x73\x20\156\157\x74\x20\151\156\x20\164\150\145\x20\x6c\x69\x73\x74\x2c\40\162\145\x6c\157\x61\144\x20\x74\x68\x65\x20\x57\x6f\162\144\x50\x72\x65\163\163\x20\141\144\x6d\151\x6e\x20\160\141\x6e\145\x6c\40\x70\x61\147\x65", PR__PKG__OPTIMIZATION), self::ecioqysekgaasegg, ["\x63\x6c\141\163\x73" => "\x6d\171\55\60"], false, true), 6 => sprintf(__("\103\154\x69\x63\153\x20\157\156\x20\45\x73\x20\x62\x75\164\x74\157\156", PR__PKG__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\x53\x61\166\145\x20\x63\x68\x61\156\147\x65\163", PR__PKG__OPTIMIZATION)))]]]]; $qkweikswegyciaie = self::cgygmuguceeosoey($this->aakmagwggmkoiiyu() . "\137\x63\x6c\157\x75\144\x66\154\141\162\145\137\x69\x6e\163\x74\x61\154\x6c\x5f\147\165\151\x64\x65", __("\x49\x6e\x73\x74\x61\x6c\154\40\107\165\151\x64\145", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::aikamsoikcwsewac("\x69\156\x73\164\x61\x6c\154\x5f\147\165\151\144\x65\137\143\x6f\156\164\x65\156\164")->oguessuismosauuu($this->iuygowkemiiwqmiw("\147\x75\x69\x64\x65", $eyagkkkqkwcuygso)))->saemoowcasogykak(IconFontawesomeInterface::ICON_LIFE_RING); cumeycwmuuqawwyu: return $qkweikswegyciaie; } public function ueiyqqwuiqmmqymc($wyeyeaaekyoyimqu) : MetaBox { $oqkgomucoyswikgk = $this->qiouekgwkiumuiuu()->yusooeuwemoqcwmm(); $qkweikswegyciaie = self::cgygmuguceeosoey($this->aakmagwggmkoiiyu() . "\137\143\x6c\157\165\x64\x66\154\141\x72\145\137\x71\x75\x69\143\153\x5f\141\x63\164\x69\x6f\156\x73", __("\101\x63\164\x69\157\x6e\x73", PR__PKG__OPTIMIZATION))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEARS); if ($oqkgomucoyswikgk) { goto iaomqomgiwiegoca; } if (!($wyeyeaaekyoyimqu > 1)) { goto goaowamiyyamueiw; } $meqocwsecsywiiqs = __("\x45\156\141\142\154\145\40\x43\x61\x63\150\x69\156\x67", PR__PKG__OPTIMIZATION); $qkweikswegyciaie->mkksewyosgeumwsa(self::qoeiescseggagsqs("\157\x70\164\x5f\x63\x66\x5f\145\x6e\141\x62\x6c\145\x5f\x70\x61\x67\145\137\143\x61\x63\150\x65", $meqocwsecsywiiqs, __("\x45\x6e\x61\x62\x6c\145\40\x63\x6c\157\165\144\x66\154\x61\x72\145\40\143\x61\143\x68\x65\x20\146\165\156\143\164\x69\157\156\141\x6c\x69\164\x79\40\146\157\162\x20\x61\x6c\154\40\160\x61\x67\145\x73\x20\x61\156\144\x20\141\163\x73\x65\164\x2e", PR__PKG__OPTIMIZATION))->ukmcmuaawacquume(["\164\x79\x70\x65" => self::ckcawaoawwioqecq, "\x74\x69\x74\x6c\145" => $meqocwsecsywiiqs, "\x63\157\156\x74\145\x6e\x74" => __("\105\156\x61\142\154\151\x6e\147\40\143\154\157\165\144\146\154\141\162\145\x20\x63\x61\x63\150\x65\x20\143\141\x6e\40\x62\x6f\157\163\164\40\x79\x6f\x75\x72\x20\x73\x69\x74\x65\40\154\157\141\x64\40\163\160\x65\145\144\x2c\40\x63\157\x6e\164\x69\x6e\165\x65\x3f", PR__PKG__OPTIMIZATION), "\142\x75\x74\x74\157\156\163" => ["\x63\x61\x6e\x63\x65\x6c", ["\x63\154\x61\163\x73" => "\145\x6e\141\x62\154\x65\55\143\154\157\x75\x64\x66\x6c\141\x72\145\55\x63\x61\x63\150\x65\40\142\164\156\40\142\164\x6e\55\160\162\x69\x6d\x61\162\171", "\x74\x69\164\154\145" => __("\105\156\141\142\x6c\145", PR__PKG__OPTIMIZATION)]]])->ygagwkucacyassau()->mweyuoqsqugqwcca()); goaowamiyyamueiw: goto ysweqawmawicakeo; iaomqomgiwiegoca: $meqocwsecsywiiqs = __("\104\151\x73\x61\142\154\145\40\x43\141\143\150\151\x6e\x67", PR__PKG__OPTIMIZATION); $qkweikswegyciaie->mkksewyosgeumwsa(self::qoeiescseggagsqs("\157\x70\x74\x5f\x63\x66\137\144\151\163\x61\x62\x6c\145\x5f\160\141\x67\145\x5f\x63\x61\x63\150\145", $meqocwsecsywiiqs, __("\x44\151\163\141\142\154\145\x20\143\154\x6f\x75\144\146\x6c\x61\162\x65\x20\143\x61\143\150\x65\40\146\x75\x6e\x63\x74\x69\x6f\x6e\x61\154\x69\x74\x79\40\x66\x6f\x72\40\x61\x6c\x6c\40\x70\141\147\145\x73\40\x61\x6e\144\x20\141\163\x73\145\164\x2e", PR__PKG__OPTIMIZATION))->ukmcmuaawacquume(["\164\x79\x70\145" => self::ecioqysekgaasegg, "\164\151\x74\x6c\145" => $meqocwsecsywiiqs, "\143\x6f\x6e\x74\145\x6e\x74" => __("\x44\151\163\x61\142\154\145\40\x63\154\x6f\x75\x64\x66\154\x61\x72\x65\x20\x63\x61\x63\x68\x65\40\143\x61\x6e\x20\163\160\x65\x65\144\x20\x64\157\x77\156\x20\x79\157\165\x72\40\167\x65\142\x73\151\164\x65\56\x20\101\162\x65\40\x79\x6f\x75\x20\x73\165\162\x65\40\x79\157\x75\x20\167\x61\x6e\164\40\x74\x6f\x20\x63\157\156\164\x69\156\165\145\77", PR__PKG__OPTIMIZATION), "\142\165\x74\x74\157\x6e\163" => ["\x63\x61\x6e\x63\145\x6c", ["\x63\x6c\x61\x73\163" => "\x64\x69\163\141\x62\x6c\x65\55\143\154\157\x75\x64\x66\x6c\141\162\145\55\x63\x61\143\x68\x65\x20\x62\164\156\x20\142\164\156\55\160\x72\x69\155\x61\162\x79", "\164\x69\164\x6c\x65" => __("\104\151\163\141\142\x6c\x65", PR__PKG__OPTIMIZATION)]]])->ygagwkucacyassau()->muywawimuacwmkgw(true)); $eisusiekaciioueg = $this->qiouekgwkiumuiuu()->eisusiekaciioueg(); $meqocwsecsywiiqs = $eisusiekaciioueg ? __("\104\151\163\141\x62\154\145\x20\104\145\166\x65\154\x6f\160\x6d\145\x6e\x74\x20\115\x6f\x64\x65", PR__PKG__OPTIMIZATION) : __("\x45\156\141\142\x6c\x65\40\104\145\x76\145\154\x6f\x70\x6d\145\x6e\164\40\x4d\x6f\144\145", PR__PKG__OPTIMIZATION); $wquasmyyscuqaqom = self::qoeiescseggagsqs("\157\160\x74\x5f\x63\146\x5f\x63\150\141\156\x67\145\x5f\144\x65\x76\x5f\x6d\157\144\145", $meqocwsecsywiiqs, __("\124\x65\155\x70\157\x72\141\162\x69\154\171\40\x62\171\x70\141\x73\x73\x20\x63\x6c\157\165\144\x66\154\x61\162\145\x20\x63\141\143\150\145\56\x20\x53\145\145\x20\143\x68\x61\156\147\145\x73\40\164\x6f\40\171\x6f\x75\x72\40\x73\x69\164\145\x20\151\156\40\x72\x65\x61\154\x74\x69\155\x65\56", PR__PKG__OPTIMIZATION))->ukmcmuaawacquume(["\164\x79\x70\x65" => $eisusiekaciioueg ? "\163\x75\143\x63\x65\x73\x73" : "\x64\x61\156\147\x65\x72", "\x74\151\164\x6c\145" => $meqocwsecsywiiqs, "\x63\x6f\156\164\x65\x6e\164" => __("\x45\x6e\141\x62\x6c\151\x6e\147\x20\104\145\x76\x65\154\157\x70\155\145\x6e\x74\40\x4d\x6f\144\x65\x20\x74\x75\162\156\x73\40\x6f\x66\146\x20\143\154\x6f\x75\x64\x66\x6c\141\162\145\x20\x63\x61\143\150\151\x6e\147\x20\x66\157\x72\40\x79\x6f\165\x72\40\x73\x69\x74\145\56\x20\x41\162\145\40\171\157\x75\x20\163\165\162\145\x20\x79\157\x75\40\167\141\x6e\164\x20\164\x6f\40\143\157\x6e\x74\x69\156\165\x65\x3f", PR__PKG__OPTIMIZATION), "\142\165\164\x74\157\156\163" => ["\x63\141\x6e\x63\x65\154", ["\143\x6c\141\x73\x73" => "\x63\x68\x61\x6e\147\x65\x2d\143\x6c\x6f\165\144\x66\x6c\141\x72\x65\x2d\x6d\157\144\145\40\x62\x74\x6e\x20\142\x74\x6e\x2d\160\x72\x69\x6d\x61\162\171", "\164\x69\164\154\x65" => __("\103\150\141\x6e\x67\x65\40\115\157\144\x65", PR__PKG__OPTIMIZATION), "\144\141\x74\141\x2d\144\x65\x76\55\x6d\x6f\144\145" => $eisusiekaciioueg ? "\157\146\146" : "\157\156"]]])->ygagwkucacyassau(); if ($eisusiekaciioueg) { goto uaicwcqwauosmsqm; } $wquasmyyscuqaqom->muywawimuacwmkgw(true); goto gsqcoqqsioiyoykq; uaicwcqwauosmsqm: $wquasmyyscuqaqom->mweyuoqsqugqwcca(true); gsqcoqqsioiyoykq: $qkweikswegyciaie->mkksewyosgeumwsa($wquasmyyscuqaqom); ysweqawmawicakeo: return $qkweikswegyciaie; } public function qiouekgwkiumuiuu() : Cloudflare { return Cloudflare::symcgieuakksimmu(); } private function vkwquymckimskgmw() { $eggwswqquakgowom = $this->kmuweyayaqoeqiyw()::eiwcuqigayigimak(self::CF_ZONEID_LIST, []); $cgaiqcoosmmymqqm = null; if (!(is_array($eggwswqquakgowom) && $eggwswqquakgowom)) { goto kgysyqkoqgwmoscq; } $ogookoeuwuoiaaac = Manipulate::goewgasukwccacim(); foreach ($eggwswqquakgowom as $ymqmyyeuycgmigyo => $aokagokqyuysuksm) { if (!($ogookoeuwuoiaaac == $ymqmyyeuycgmigyo)) { goto cuseccewekgcgkyg; } $cgaiqcoosmmymqqm = $aokagokqyuysuksm; goto owisckseoogsugqq; cuseccewekgcgkyg: ookcgumoacskyymy: } owisckseoogsugqq: kgysyqkoqgwmoscq: return $cgaiqcoosmmymqqm; } }
