<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e0e3312730f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Optimization\Tab; class Setting extends Tab { const quekmgksoiyceykk = "\x6d\x69\x6e\x69\146\x79\137"; const eumicecccemicqey = self::quekmgksoiyceykk . "\x6a\x73"; const ykqawckyqkmqiamq = self::quekmgksoiyceykk . "\143\163\163"; const sikyekqowskqiqga = self::quekmgksoiyceykk . "\150\164\x6d\x6c"; const ccoaqmuiqioqaooa = self::iccwcygaeqmomooo . "\x5f\x6d\x69\156\151\146\x79"; const ouysiyiqiqogowwy = "\x63\144\156\x5f"; const guiakysqekasiwso = self::ouysiyiqiqogowwy . "\146\157\x6e\x74"; const ewqwqyyqgaaaeuwu = self::ouysiyiqiqogowwy . "\146\157\156\164\x5f\165\x72\x6c"; const geqkcgkoqqeyuqkg = self::ouysiyiqiqogowwy . "\146\x6f\x6e\164\137\x6e\141\x6d\x65"; const sewumqkiymkquogk = self::ouysiyiqiqogowwy . "\145\x6e\x61\142\x6c\x65\137\x6a\x73\144\x65\154\x69\x76\145\x72"; const ggwcgwwicaucowgo = "\x63\162\x69\x74\x69\143\141\x6c\x5f"; const qwmwuwqwwaiiaqou = self::ggwcgwwicaucowgo . "\x65\x78\x74\162\x61\137\143\163\x73"; const kuqaeysqaeyocckm = self::iccwcygaeqmomooo . self::ggwcgwwicaucowgo . "\143\163\x73"; const aqywkwyscogcecei = "\155\145\144\151\x61\x5f"; const meciimymegqueigk = self::aqywkwyscogcecei . "\x6c\141\x7a\x79\x5f\154\x6f\141\x64\137"; const moosyqmaqgsikgcg = self::meciimymegqueigk . "\x65\x6e\141\x62\154\x65"; const uwgswmisuuigoucw = self::meciimymegqueigk . "\x69\155\x61\x67\145\x73"; const ekequaesakywuioq = self::aqywkwyscogcecei . "\x69\x6d\x61\147\145\x5f\x63\157\x6c\157\162\137\x64\157\x6d\x69\156\141\x74\157\x72"; const semmsmiiwgwsqeqi = self::aqywkwyscogcecei . "\x64\157\x6d\x69\156\141\164\157\x72\x5f\x64\145\146\141\165\x6c\x74\x5f\143\x6f\x6c\157\162"; const gowiqmkskqiqsgsc = self::meciimymegqueigk . "\x69\x66\x72\x61\x6d\x65\137\141\156\144\x5f\x76\x69\144\145\157\163"; const twykececsuscsygc = "\143\154\x65\x61\x6e\165\160\137"; const qoyskaoaaakosmaq = self::twykececsuscsygc . "\x61\144\x64\137\x62\x6c\x61\x6e\x6b\137\146\141\166\151\143\157\x6e"; const yaggsqosuggmgykq = self::twykececsuscsygc . "\163\160\x65\143\x69\x66\x79\x5f\x64\x69\155\x65\156\163\151\157\x6e\163"; const aysyuueaueiamysu = self::twykececsuscsygc . "\162\145\155\157\x76\145\137\x68\164\164\160\x5f\x70\x72\157\164\157\x63\x6f\154"; const ookqmecseqmewmeo = self::yaggsqosuggmgykq . "\x5f\x65\170\x74\145\162\x6e\x61\x6c\x5f\x69\x6d\x61\147\145\x73"; const emeseeausaemuoeq = self::twykececsuscsygc . "\x78\155\x6c\x72\160\143"; const wkasasawguckeyuc = self::twykececsuscsygc . "\150\x69\x64\x65\x5f\x77\x70\137\x76\x65\x72\163\151\x6f\x6e"; const wamuucmcqykegkoc = self::twykececsuscsygc . "\x72\x73\x64\137\x6c\x69\x6e\x6b"; const iqmqemikwcuuiyom = self::twykececsuscsygc . "\162\x65\x73\x74\137\x61\x70\151"; const sqaukikimiwcqmew = self::twykececsuscsygc . "\x73\150\x6f\162\x74\x6c\151\156\x6b"; const aaisgiycykyqiqcm = self::twykececsuscsygc . "\167\x6c\x77\137\x6d\x61\156\x69\146\x65\163\x74\137\154\151\x6e\x6b"; const oeiwkesueukkqggs = self::twykececsuscsygc . "\145\155\x6f\152\151\163"; const owgquqcyoseeeiqg = self::twykececsuscsygc . "\145\x6d\142\145\144\163"; const uwcmcaucigmuiugg = self::twykececsuscsygc . "\x64\141\163\150\151\143\157\x6e\163"; const gukmqsiumkmukaoe = self::twykececsuscsygc . "\x67\165\164\x65\x6e\x62\145\x72\147\x5f\143\163\163"; const qwcseoyssyaciyqk = self::twykececsuscsygc . "\152\161\165\145\162\x79\137\155\151\147\162\141\x74\145"; const kcgocyessaswyike = self::twykececsuscsygc . "\160\141\x73\163\x77\x6f\162\x64\x5f\x73\164\x72\x65\x6e\147\x74\150\137\x6d\145\164\145\x72"; const qecgmkquiegacugk = "\x61\x73\171\156\143\x5f\x6c\x6f\141\144\137"; const hoeamwwegymyeeeg = self::qecgmkquiegacugk . "\x73\164\x79\x6c\145"; const qogwyiiyouiiuaas = self::hoeamwwegymyeeeg . "\x5f\143\144\156"; const kmqkicgwmisqiuoq = self::hoeamwwegymyeeeg . "\137\x65\x78\143\x6c\x75\x64\145"; const komosgcgwesseeqo = self::qecgmkquiegacugk . "\152\141\166\x61\163\143\x72\x69\x70\164"; const wsosyuyuggeiiyeu = self::komosgcgwesseeqo . "\137\x63\x64\156"; const uoiiqmyeiqseuosu = self::komosgcgwesseeqo . "\x5f\145\170\x63\x6c\x75\144\x65"; const ikwassqmsckwwawo = "\144\x79\x6e\141\155\x69\x63\x5f\x72\x65\156\x64\145\162\x69\x6e\x67"; public function aucimgwswmgaocae($ywoucyskcquysiwc = []) : array { $yuwymayicwwqiske = $this->aakmagwggmkoiiyu() . "\x5f\x61\163\x73\145\x74\163"; $ywoucyskcquysiwc[] = self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\x74\x61\x62", __("\x41\x73\x73\x65\x74\x73", PR__MDL__OPTIMIZATION))->sikqggwmmykuiymy($this->ecmoqcoyysugcqey($yuwymayicwwqiske))->sikqggwmmykuiymy($this->wywgqayqssuqewyw($yuwymayicwwqiske))->sikqggwmmykuiymy($this->quqkimmaaoeumckc($yuwymayicwwqiske))->sikqggwmmykuiymy($this->ogwgiimweiigcomw($yuwymayicwwqiske))->sikqggwmmykuiymy($this->oumykgggccscaasy($yuwymayicwwqiske))->sikqggwmmykuiymy($this->wseoiekkiwuiuacg($yuwymayicwwqiske))->sikqggwmmykuiymy($this->aiguiusgagaacige($yuwymayicwwqiske))->saemoowcasogykak(IconFontawesomeInterface::qymemaukeumsukku)->jyumyyugiwwiqomk(10); return parent::aucimgwswmgaocae($ywoucyskcquysiwc); } public function oumykgggccscaasy($yuwymayicwwqiske) : MetaBox { $gcwumimeouemawcc = $this->igsmkkoyasgwmkqm(); return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\137\x64\x79\x6e\141\155\x69\143\137\162\145\156\x64\x65\x72\151\x6e\x67", __("\x44\x79\x6e\141\x6d\x69\143\40\x52\x65\156\144\x65\x72\x69\x6e\x67", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ikwassqmsckwwawo, __("\101\143\x74\151\166\x61\x74\151\157\156", PR__MDL__OPTIMIZATION))->ooowowweyusommmm($gcwumimeouemawcc[self::qescuiwgsyuikume], $gcwumimeouemawcc[self::eoskkkieowogacws], self::smkwuwawwaqyimcq, true))->saemoowcasogykak(IconFontawesomeInterface::qkkgsackwasemsag); } public function wseoiekkiwuiuacg($yuwymayicwwqiske) : MetaBox { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\137\x63\x64\156", __("\x43\157\x6e\x74\145\x6e\x74\40\x44\145\x6c\151\x76\x65\x72\x79\40\x4e\145\164\x77\157\162\153\x20\50\103\104\x4e\x29", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\143\x6e\x64\137\152\163\x64\145\x6c\x69\x76\145\162", __("\112\123\104\145\154\151\166\145\x72", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::sewumqkiymkquogk, __("\105\x6e\141\142\154\145\40\x4a\123\x44\x65\154\151\166\145\x72", PR__MDL__OPTIMIZATION), __("\x43\x68\145\x63\153\40\164\x68\x69\x73\x20\x69\x74\x65\155\40\x74\x6f\40\x72\145\x70\154\141\143\145\x20\162\145\x73\157\165\x72\x63\x65\163\40\x62\171\x20\112\123\x44\x65\x6c\x69\166\145\162\x20\x63\x64\156\x2e", PR__MDL__OPTIMIZATION))->yeigkegagskeaaim())->saemoowcasogykak(IconFontawesomeInterface::oykyeemoeeyooomc))->saemoowcasogykak(IconFontawesomeInterface::yemsakwkwimksusy); } public function ecmoqcoyysugcqey($yuwymayicwwqiske) { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\137\155\x65\144\151\x61", __("\x4d\x65\x64\x69\x61", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\155\x65\144\x69\141\137\x6c\141\172\x79\154\157\x61\x64", __("\x4c\x61\172\171\x6c\x6f\141\x64", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::moosyqmaqgsikgcg, __("\101\x63\164\151\166\x61\x74\x69\157\x6e", PR__MDL__OPTIMIZATION))->agywyaaquwawwuiy([self::uwgswmisuuigoucw, self::gowiqmkskqiqsgsc]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::uwgswmisuuigoucw, __("\x49\155\141\147\145\x73", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::gowiqmkskqiqsgsc, __("\151\106\162\141\x6d\x65\40\x61\x6e\x64\x20\126\x69\x64\x65\x6f\x73", PR__MDL__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::ewcsmakmqeeueqec))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\x6d\145\x64\x69\x61\137\x64\x6f\x6d\x69\156\141\x74\x6f\162", __("\x43\157\x6c\x6f\162\40\104\157\155\x69\156\x61\164\x6f\x72", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ekequaesakywuioq, __("\111\155\x61\x67\x65\x20\x43\x6f\x6c\157\162\x20\x44\x6f\x6d\x69\x6e\x61\x74\x6f\162", PR__MDL__OPTIMIZATION))->agywyaaquwawwuiy(self::semmsmiiwgwsqeqi))->mkksewyosgeumwsa(self::mwmcsiqiwkweayuw(self::semmsmiiwgwsqeqi, __("\x44\145\146\141\x75\x6c\x74\40\104\157\155\x69\x6e\141\x74\x6f\162\40\103\x6f\154\x6f\162", PR__MDL__OPTIMIZATION))->eyygsasuqmommkua("\x23\106\106\x46"))->saemoowcasogykak(IconFontawesomeInterface::kuicceqcgamkcsuw))->saemoowcasogykak(IconFontawesomeInterface::wauosagckgqiqoio); } public function wywgqayqssuqewyw($yuwymayicwwqiske) : MetaBox { $mkqqqewsokcswckc = __("\103\x68\145\143\153\40\x74\150\x69\163\x20\151\x74\x65\155\40\151\146\x20\x79\157\x75\x20\x77\x61\x6e\164\x20\155\x69\156\151\x66\x79\40\45\x73\x2e", PR__MDL__OPTIMIZATION); return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\x5f\155\x69\x6e\x69\x66\x79", __("\x4d\151\156\151\x66\171", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ccoaqmuiqioqaooa, __("\105\156\x61\142\154\x65\x20\115\x69\x6e\151\x66\171", PR__MDL__OPTIMIZATION))->agywyaaquwawwuiy([self::sikyekqowskqiqga, self::ykqawckyqkmqiamq, self::eumicecccemicqey])->ccmwycqioaicegoc(__("\103\x68\145\x63\153\x20\164\150\x69\x73\x20\x69\164\x65\155\40\x74\x6f\x20\145\x6e\141\142\154\x65\x20\x6d\x69\x6e\x69\x66\x79\x20\146\165\156\143\x74\x69\157\156\x61\154\151\x74\171\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::sikyekqowskqiqga, __("\x4d\151\x6e\151\146\171\40\x48\124\x4d\x4c", PR__MDL__OPTIMIZATION), sprintf($mkqqqewsokcswckc, "\x3c\143\x6f\x64\145\x3e\110\x54\x4d\x4c\74\x2f\x63\x6f\x64\x65\76")))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ykqawckyqkmqiamq, __("\x4d\x69\156\x69\146\171\40\103\123\x53", PR__MDL__OPTIMIZATION), sprintf($mkqqqewsokcswckc, "\x3c\143\x6f\144\x65\76\103\123\123\74\57\x63\157\x64\145\76")))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::eumicecccemicqey, __("\x4d\151\156\x69\146\171\40\x4a\x53", PR__MDL__OPTIMIZATION), sprintf($mkqqqewsokcswckc, "\74\143\x6f\144\x65\x3e\x4a\x61\166\x61\x53\x63\x72\x69\160\164\74\x2f\x63\157\144\x65\76")))->saemoowcasogykak(IconFontawesomeInterface::yesiuuqooeauouoq); } public function aiguiusgagaacige($yuwymayicwwqiske) : MetaBox { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\x5f\x63\x6c\x65\141\x6e\165\160", __("\x43\x6c\x65\x61\156\x75\x70", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\x63\154\x65\x61\x6e\x75\160\137\x69\155\141\147\x65", __("\x49\x6d\x61\147\x65\x73", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::qoyskaoaaakosmaq, __("\x41\x64\144\40\x42\x6c\141\156\153\40\106\x61\x76\151\x63\157\156", PR__MDL__OPTIMIZATION), __("\101\x64\144\x20\141\x20\x62\x6c\141\x6e\153\40\x66\141\x76\x69\143\157\156\40\x74\157\x20\171\157\165\x72\40\x57\x6f\x72\x64\120\162\145\163\163\x20\150\x65\x61\144\145\x72\x20\x77\150\151\143\x68\40\x77\151\x6c\x6c\40\x70\162\145\x76\145\x6e\164\x20\x61\40\115\x69\x73\x73\151\x6e\x67\x20\106\x61\x76\x69\x63\x6f\156\40\157\162\40\x34\x30\x34\x20\145\x72\x72\157\162\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::yaggsqosuggmgykq, __("\123\160\x65\x63\151\x66\171\40\x49\155\141\x67\145\x20\104\x69\x6d\x65\156\x73\151\157\156\x73", PR__MDL__OPTIMIZATION), __("\101\x64\144\40\x77\x69\144\x74\150\x20\141\x6e\144\40\x68\145\x69\147\150\x74\x20\141\164\x74\x72\151\142\165\x74\145\40\x74\157\x20\151\155\x61\x67\145\x73\40\151\x66\40\156\x6f\164\x20\145\x78\151\x73\164\x2e", PR__MDL__OPTIMIZATION))->agywyaaquwawwuiy(self::ookqmecseqmewmeo))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ookqmecseqmewmeo, __("\x45\x78\164\145\x72\156\x61\x6c\40\111\155\141\x67\x65\x73\x20\x44\x69\x6d\145\x6e\163\151\157\156\163", PR__MDL__OPTIMIZATION), __("\x44\x6f\40\x73\x70\145\143\151\146\x79\40\151\155\x61\147\145\40\144\151\155\x65\x6e\163\151\x6f\x6e\x73\40\146\157\x72\40\145\x78\164\145\x72\156\x61\x6c\40\151\155\141\x67\145\x73\x2e", PR__MDL__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::sesaeqomsuesouac))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\143\154\145\x61\x6e\x75\x70\x5f\152\x73\x5f\x63\x73\x73", __("\112\123\40\46\40\x43\123\123\x20\46\40\110\x54\x4d\114", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::oeiwkesueukkqggs, __("\104\151\x73\141\x62\154\x65\40\105\155\157\x6a\x69\163", PR__MDL__OPTIMIZATION), __("\122\145\155\x6f\166\145\x73\x20\x57\157\162\x64\120\x72\145\163\x73\x20\105\x6d\x6f\x6a\x69\x73\x20\x4a\x61\166\x61\123\143\162\x69\x70\x74\x20\x66\151\x6c\x65\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::owgquqcyoseeeiqg, __("\x44\151\163\x61\x62\x6c\145\40\x45\155\142\145\x64\x73", PR__MDL__OPTIMIZATION), __("\122\x65\x6d\157\166\145\163\x20\127\157\162\144\120\162\x65\x73\x73\40\x45\155\x62\145\144\40\x4a\141\166\141\x53\143\x72\x69\160\x74\40\x66\151\154\145\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::qwcseoyssyaciyqk, __("\x52\145\x6d\x6f\166\145\x20\x6a\121\165\x65\x72\x79\x20\115\x69\x67\x72\141\164\x65", PR__MDL__OPTIMIZATION), __("\122\x65\155\157\x76\x65\163\40\152\x51\x75\x65\x72\x79\x20\115\x69\x67\x72\141\x74\x65\x20\x4a\x61\166\141\123\143\x72\x69\x70\164\40\x66\151\154\145\x2e", PR__MDL__OPTIMIZATION))->yeigkegagskeaaim())->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::uwcmcaucigmuiugg, __("\104\151\x73\141\x62\154\145\40\104\x61\x73\150\x69\x63\x6f\x6e\163", PR__MDL__OPTIMIZATION), __("\x44\151\163\141\x62\x6c\145\x73\x20\x64\x61\x73\x68\x69\143\x6f\156\x73\x20\x6f\x6e\x20\164\150\x65\x20\146\x72\x6f\x6e\164\x20\x65\156\x64\40\x77\x68\x65\x6e\40\x6e\x6f\164\x20\x6c\157\147\x67\145\x64\x20\151\156\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::gukmqsiumkmukaoe, __("\x44\151\163\141\x62\x6c\145\40\x47\165\x74\145\156\142\145\162\147\40\x42\x6c\157\143\x6b\40\x4c\x69\142\x72\x61\x72\x79", PR__MDL__OPTIMIZATION), __("\x44\x69\163\x61\x62\154\x65\x73\x20\x67\165\164\x65\156\142\x65\x72\147\40\x62\x6c\157\143\x6b\x20\x6c\x69\x62\x72\x61\x72\171\x20\157\x6e\40\x74\150\145\40\146\x72\157\156\164\x20\x65\156\144\x20\x77\x68\x65\156\40\156\x6f\x74\40\154\157\147\x67\x65\x64\40\x69\156\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::kcgocyessaswyike, __("\104\x69\163\141\x62\x6c\x65\x20\120\x61\x73\163\x77\157\162\144\x20\123\164\162\145\156\147\x74\x68\x20\115\145\164\145\x72", PR__MDL__OPTIMIZATION), __("\x52\145\x6d\x6f\x76\145\x73\x20\127\157\162\x64\120\x72\x65\x73\x73\x20\141\156\x64\x20\127\157\157\x43\157\x6d\155\x65\162\143\x65\x20\120\x61\163\x73\167\x6f\x72\x64\x20\x53\164\162\145\x6e\147\164\150\40\115\x65\x74\145\162\40\x73\143\x72\151\160\x74\163\x20\146\x72\x6f\x6d\x20\x6e\157\x6e\40\x65\163\163\145\x6e\164\151\141\154\x20\160\x61\x67\145\x73\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::aysyuueaueiamysu, __("\x52\145\155\157\x76\x65\40\110\124\x54\x50\40\x50\162\x6f\164\x6f\x63\x6f\x6c", PR__MDL__OPTIMIZATION), sprintf(__("\122\145\160\x6c\x61\143\x65\40\45\x73\x20\x77\x69\164\150\40\x25\x73\40\x69\156\x20\x25\163\x20\164\x61\147\163\56", PR__MDL__OPTIMIZATION), "\74\143\x6f\144\145\x3e\x68\164\x74\x70\x3c\57\143\x6f\144\x65\x3e\174\x3c\x63\157\x64\145\76\x68\164\164\160\163\x3c\x2f\143\157\144\x65\x3e", "\x3c\x63\157\x64\145\x3e\57\x2f\x3c\57\x63\x6f\x64\145\x3e", "\x3c\x63\157\x64\145\76\x73\143\162\x69\x70\164\x3c\x2f\143\x6f\144\145\x3e\x7c\x3c\143\157\x64\145\76\154\x69\x6e\x6b\x3c\57\x63\157\x64\x65\x3e\x7c\x3c\x63\x6f\x64\x65\76\x69\x6d\147\74\x2f\143\157\x64\x65\x3e\x7c\74\x63\x6f\144\x65\76\146\x6f\162\x6d\74\57\x63\157\144\145\x3e")))->saemoowcasogykak(IconFontawesomeInterface::yukkwocaqagsumum))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\143\x6c\x65\141\x6e\165\160\x5f\x68\145\141\144\x5f\x74\141\147\163", __("\x48\145\141\x64\40\124\x61\x67\163", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::emeseeausaemuoeq, __("\x44\151\x73\141\142\x6c\x65\x20\130\x4d\x4c\55\122\x50\x43", PR__MDL__OPTIMIZATION), __("\122\x65\155\x6f\x76\145\x73\x20\x57\x6f\x72\x64\120\162\145\x73\163\40\x58\x4d\x4c\x2d\122\120\x43\40\146\x75\x6e\x63\164\x69\157\156\141\154\151\164\x79\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::wamuucmcqykegkoc, __("\122\x65\155\x6f\166\x65\40\x52\x53\104\40\x4c\x69\x6e\153", PR__MDL__OPTIMIZATION), __("\x52\x65\x6d\x6f\166\x65\x20\122\123\104\x20\50\122\x65\x61\154\40\123\x69\155\160\154\145\x20\104\x69\163\143\x6f\166\145\162\x79\x29\x20\x6c\x69\x6e\153\x20\x74\x61\x67\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::wkasasawguckeyuc, __("\110\151\144\145\40\127\120\40\x56\x65\x72\163\151\x6f\156", PR__MDL__OPTIMIZATION), __("\124\x68\151\163\40\151\x73\40\x67\x6f\157\x64\x20\146\157\x72\40\x73\145\143\165\x72\x69\164\171\x20\x70\x75\162\x70\157\x73\145\x73\40\141\x73\40\x77\x65\154\x6c\54\x20\163\x69\156\x63\145\x20\151\x74\x20\x68\151\144\145\x73\x20\164\150\145\x20\127\157\x72\144\120\x72\145\x73\163\40\x76\145\x72\x73\151\x6f\x6e\x20\x79\157\165\x27\162\x65\x20\165\163\x69\156\147\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::aaisgiycykyqiqcm, __("\122\145\x6d\x6f\166\145\40\167\154\x77\x6d\x61\156\x69\x66\145\163\x74\40\114\151\x6e\x6b", PR__MDL__OPTIMIZATION), __("\x49\x66\40\x79\x6f\x75\x20\x64\x6f\40\156\x6f\x74\40\165\163\x65\40\127\151\156\144\157\167\x73\40\114\151\166\x65\x20\x57\x72\x69\x74\x65\162\x20\x74\x6f\x20\x65\144\x69\x74\x20\171\157\165\x72\40\142\x6c\157\x67\x20\x63\x6f\156\x74\145\156\164\x73\54\40\x74\x68\145\156\40\151\164\x27\163\40\x73\141\146\x65\x20\x74\157\40\x72\145\155\x6f\x76\x65\40\164\150\x69\x73\x2e", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::sqaukikimiwcqmew, __("\122\145\x6d\x6f\166\145\40\x53\x68\x6f\162\x74\x6c\151\x6e\x6b", PR__MDL__OPTIMIZATION), __("\101\x72\145\x20\x79\157\165\40\x75\163\151\x6e\147\40\x53\x45\x4f\x20\x66\x72\151\145\x6e\144\154\171\x20\x55\122\114\163\x20\141\x6e\144\x20\x64\x6f\x20\x6e\x6f\x74\x20\x6e\x65\x65\x64\40\164\150\145\40\144\x65\x66\x61\x75\154\x74\x20\127\157\162\x64\120\162\145\163\163\x20\163\150\x6f\x72\164\154\151\x6e\x6b\77\x20\x79\157\165\x20\x63\x61\156\40\162\145\x6d\x6f\x76\145\x20\164\150\x69\163\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::iqmqemikwcuuiyom, __("\122\145\155\x6f\x76\145\x20\122\x45\x53\x54\40\x41\120\x49", PR__MDL__OPTIMIZATION), __("\101\162\145\x20\x79\157\165\x20\141\x63\143\x65\163\163\x69\x6e\x67\x20\171\x6f\165\162\x20\143\157\x6e\x74\145\x6e\164\40\164\150\x72\x6f\165\x67\x68\40\145\156\144\x70\157\151\156\164\163\x3f\40\111\x66\x20\x6e\157\x74\x2c\x20\x79\157\165\40\x63\141\156\x20\162\x65\155\x6f\166\x65\40\x74\150\x69\x73\x2e", PR__MDL__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::wyssocuugkyeuyqq))->saemoowcasogykak(IconFontawesomeInterface::kgsuyaquimiyogeo); } public function quqkimmaaoeumckc($yuwymayicwwqiske) : MetaBox { $gcwumimeouemawcc = $this->igsmkkoyasgwmkqm(); return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\x5f\x63\x72\151\x74\151\x63\x61\x6c\x5f\x65\x78\164\x72\141\143\164\x69\x6f\x6e", __("\103\162\151\164\x69\143\x61\x6c\40\x45\x78\164\162\x61\143\164\x69\157\156", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\143\x72\x69\x74\151\x63\x61\x6c\137\x63\163\x73", __("\x43\162\x69\164\151\143\141\x6c\40\103\123\x53", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::kuqaeysqaeyocckm, __("\105\156\141\142\154\x65\x20\103\162\151\x74\151\143\x61\x6c\40\103\123\x53", PR__MDL__OPTIMIZATION))->ooowowweyusommmm($gcwumimeouemawcc[self::qescuiwgsyuikume], $gcwumimeouemawcc[self::eoskkkieowogacws], self::smkwuwawwaqyimcq, true)->agywyaaquwawwuiy(self::qwmwuwqwwaiiaqou))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::qwmwuwqwwaiiaqou, __("\x45\170\x74\x72\x61\x20\x43\123\x53\x20\103\157\x64\x65", PR__MDL__OPTIMIZATION))->wcgckeeiiseccqkc())->saemoowcasogykak(IconFontawesomeInterface::yukkwocaqagsumum))->saemoowcasogykak(IconFontawesomeInterface::skqmaokqagyceasc); } public function ogwgiimweiigcomw($yuwymayicwwqiske) : MetaBox { $gcwumimeouemawcc = $this->igsmkkoyasgwmkqm(); $yuwymayicwwqiske = "{$yuwymayicwwqiske}\x5f\x61\163\171\156\143\137\x6c\157\141\144\151\156\147"; return self::cgygmuguceeosoey($yuwymayicwwqiske, __("\101\163\x79\x6e\143\40\x4c\x6f\141\144", PR__MDL__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\152\141\x76\x61\x73\x63\162\x69\160\164", __("\112\x61\x76\x61\x73\x63\162\x69\x70\x74", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::komosgcgwesseeqo, __("\x41\x63\x74\151\166\x61\x74\x69\157\x6e", PR__MDL__OPTIMIZATION))->yeigkegagskeaaim()->agywyaaquwawwuiy([self::uoiiqmyeiqseuosu, self::wsosyuyuggeiiyeu]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::wsosyuyuggeiiyeu, __("\101\x63\164\151\166\141\164\x65\x20\146\157\x72\x20\103\x44\x4e\40\x4a\x61\x76\141\163\x63\162\x69\x70\164", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::uoiiqmyeiqseuosu, __("\x45\x78\x63\x6c\165\x64\x65\x20\112\141\x76\141\163\143\162\x69\x70\164", PR__MDL__OPTIMIZATION))->qsecygiycssgacqs(5)->yskkmqiusguummwa())->saemoowcasogykak(IconFontawesomeInterface::yukkwocaqagsumum))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\163\x74\171\x6c\x65", __("\123\x74\171\x6c\x65\40\50\x43\x53\x53\51", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::hoeamwwegymyeeeg, __("\101\143\164\151\166\x61\x74\x69\x6f\x6e", PR__MDL__OPTIMIZATION))->ooowowweyusommmm($gcwumimeouemawcc[self::qescuiwgsyuikume], $gcwumimeouemawcc[self::eoskkkieowogacws], self::smkwuwawwaqyimcq, true)->agywyaaquwawwuiy([self::kmqkicgwmisqiuoq, self::qogwyiiyouiiuaas]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::qogwyiiyouiiuaas, __("\x41\143\x74\x69\166\x61\164\145\x20\146\157\x72\40\103\x44\x4e\40\x53\164\x79\154\x65", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::kmqkicgwmisqiuoq, __("\105\170\x63\154\x75\x64\x65\x20\x53\x74\171\x6c\x65", PR__MDL__OPTIMIZATION))->qsecygiycssgacqs(5)->yskkmqiusguummwa())->saemoowcasogykak(IconFontawesomeInterface::yukkwocaqagsumum))->saemoowcasogykak(IconFontawesomeInterface::yqqwkcykyeagkakg); } public function aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw) { $ggauoeuaesiymgee = []; switch ($uusmaiomayssaecw) { case self::miaqqqiaweeausws: $ggauoeuaesiymgee = [self::eumicecccemicqey => true, self::ykqawckyqkmqiamq => true, self::sikyekqowskqiqga => true, self::ccoaqmuiqioqaooa => true, self::emeseeausaemuoeq => true, self::oeiwkesueukkqggs => true, self::owgquqcyoseeeiqg => true, self::wamuucmcqykegkoc => true, self::wkasasawguckeyuc => true, self::iqmqemikwcuuiyom => true, self::sqaukikimiwcqmew => true, self::uwgswmisuuigoucw => true, self::moosyqmaqgsikgcg => true, self::hoeamwwegymyeeeg => true, self::qoyskaoaaakosmaq => true, self::uwcmcaucigmuiugg => true, self::ikwassqmsckwwawo => true, self::yaggsqosuggmgykq => true, self::kuqaeysqaeyocckm => true, self::sewumqkiymkquogk => true, self::aysyuueaueiamysu => true, self::qogwyiiyouiiuaas => true, self::ekequaesakywuioq => true, self::komosgcgwesseeqo => true, self::gukmqsiumkmukaoe => true, self::qwcseoyssyaciyqk => true, self::qwcseoyssyaciyqk => true, self::aaisgiycykyqiqcm => true, self::wsosyuyuggeiiyeu => true, self::gowiqmkskqiqsgsc => true, self::kcgocyessaswyike => true, self::ookqmecseqmewmeo => true]; goto mkuigmcgkawyawee; case self::okeoeeywmosegiiy: $ggauoeuaesiymgee = [self::eumicecccemicqey => false, self::ykqawckyqkmqiamq => true, self::sikyekqowskqiqga => true, self::ccoaqmuiqioqaooa => true, self::emeseeausaemuoeq => false, self::oeiwkesueukkqggs => false, self::owgquqcyoseeeiqg => false, self::wamuucmcqykegkoc => false, self::wkasasawguckeyuc => false, self::iqmqemikwcuuiyom => false, self::sqaukikimiwcqmew => false, self::uwgswmisuuigoucw => true, self::moosyqmaqgsikgcg => true, self::hoeamwwegymyeeeg => false, self::qoyskaoaaakosmaq => true, self::uwcmcaucigmuiugg => false, self::ikwassqmsckwwawo => true, self::yaggsqosuggmgykq => false, self::kuqaeysqaeyocckm => false, self::sewumqkiymkquogk => false, self::aysyuueaueiamysu => false, self::qogwyiiyouiiuaas => false, self::ekequaesakywuioq => false, self::komosgcgwesseeqo => false, self::gukmqsiumkmukaoe => false, self::qwcseoyssyaciyqk => false, self::qwcseoyssyaciyqk => false, self::aaisgiycykyqiqcm => false, self::wsosyuyuggeiiyeu => false, self::gowiqmkskqiqsgsc => true, self::kcgocyessaswyike => false, self::ookqmecseqmewmeo => false]; goto mkuigmcgkawyawee; } ouqwmaaskykywyqo: mkuigmcgkawyawee: if (!$ggauoeuaesiymgee) { goto agqmoymkiswqswqo; } $qiouiwasaauyaaue = array_merge($qiouiwasaauyaaue, $ggauoeuaesiymgee); agqmoymkiswqswqo: return parent::aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw); } private function igsmkkoyasgwmkqm() : array { $uamcoiueqaamsqma = __("\124\x68\x69\163\x20\x73\x65\164\x74\x69\x6e\x67\x20\x6f\x6e\x6c\171\40\x61\x70\x70\x6c\151\x65\x73\x20\164\x6f\x20\x4c\145\166\145\x6c\x20\x32\40\160\x61\x67\x65\163\56", PR__MDL__OPTIMIZATION); $wksoawcgagcgoask = self::couwksyewgyeooqe(); if (!($wksoawcgagcgoask && $wksoawcgagcgoask->qcgakseyaikigqco())) { goto kwaqakoogeiacmwi; } $uamcoiueqaamsqma = "{$uamcoiueqaamsqma}\x20" . sprintf(__("\x41\x70\x70\x6c\x79\40\164\x6f\x20\142\165\171\40\x6f\x72\40\x69\156\143\x72\x65\141\163\145\x20\164\x68\145\40\x62\x75\144\147\145\x74\x20\x74\150\162\157\165\x67\x68\x20\x74\150\x65\40\x25\163\56", PR__MDL__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(ManipulateHTML::yuawgssgauywkiia($wksoawcgagcgoask->qcgakseyaikigqco(), $wksoawcgagcgoask->giiuwsmyumqwwiyq(self::sauwwsocmukoaayu), ["\164\141\162\x67\x65\x74" => "\137\x62\154\141\156\153"]))); kwaqakoogeiacmwi: return [self::qescuiwgsyuikume => __("\x4a\165\163\x74\x20\x66\x6f\162\40\x4c\x65\x76\x65\x6c\x20\62\x20\x50\141\x67\145\x73", PR__MDL__OPTIMIZATION), self::eoskkkieowogacws => $uamcoiueqaamsqma]; } }
