<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b0d2da8c55b             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\CDN; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateRequest; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Dependencies; use WP_Scripts; class JsDeliver extends Common { const ADVANCED_MODE = "\141\x64\166\x61\156\x63\145\x64\x5f\x6d\x6f\x64\x65"; const JSDELIVR_URL = "\x6a\x73\144\x65\x6c\151\166\x72\x5f\x75\162\x6c"; const AUTO_ENABLE = "\x61\x75\x74\157\145\x6e\141\x62\x6c\145"; const AUTO_MINIFY = "\141\165\x74\x6f\155\x69\x6e\151\146\x79"; const SOURCE_LIST = "\x73\157\x75\x72\x63\x65\137\154\x69\163\x74"; const SCHEDULE_KEY = "\x6f\160\x74\x69\x6d\151\x7a\x61\164\x69\157\156\x5f\x66\x69\146\164\145\145\156\137\155\x69\156\165\164\145\x73"; const CDN_URL = "\x68\x74\164\160\163\x3a\57\x2f\x63\144\x6e\56\152\x73\x64\145\154\151\x76\x72\56\x6e\x65\164\57"; const STORED_ITEMS = "\x6f\x70\x74\151\x6d\x69\x7a\x61\164\x69\x6f\156\x5f\143\156\144\137\152\163\137\x64\x65\154\151\166\x65\162\x5f\x69\164\145\x6d\x73"; const HASH_LOOKUP_URL = "\150\x74\x74\160\x73\72\57\57\144\141\164\x61\x2e\152\163\x64\x65\x6c\x69\x76\162\56\143\157\155\x2f\166\61\57\154\x6f\x6f\153\x75\x70\x2f\150\141\x73\x68\x2f"; const LAST_LOADED_DATETIME = "\154\x61\x73\164\137\x6c\157\141\144\145\144\137\x64\x61\x74\x65\x74\x69\x6d\145"; const ANALYZE_CRON_HOOK = "\157\x70\x74\151\x6d\151\172\141\164\x69\157\x6e\x5f\x63\156\x64\x5f\x6a\163\144\x65\154\x69\x76\x72\137\x61\156\141\x6c\x79\x7a\x65\137\143\162\x6f\156\x5f\150\x6f\x6f\x6b"; const REMOVE_OLD_CRON_HOOK = "\157\160\164\151\x6d\x69\x7a\141\164\x69\157\x6e\137\x63\156\144\x5f\152\163\x64\x65\154\x69\166\162\137\x72\145\155\x6f\x76\145\137\x6f\154\144\x5f\143\162\157\156\x5f\x68\x6f\x6f\x6b"; const COMMENT_PATTERN = "\57\x5c\x2f\x5c\x2a\133\x5c\163\x5c\123\x5d\52\77\134\52\134\x2f\x7c\x5c\x2f\134\57\56\52\x3f\x28\77\x3a\134\156\174\44\51\57"; protected array $items = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\x69\x6e\151\x74"])->qcsmikeggeemccuu(self::ANALYZE_CRON_HOOK, [$this, "\171\x71\x67\x69\x71\161\x61\x79\x61\x6d\x79\145\x65\155\x75\x75"])->qcsmikeggeemccuu(self::REMOVE_OLD_CRON_HOOK, [$this, "\141\x73\x71\167\x71\141\161\x6f\x77\147\145\x79\x79\141\x79\x77"])->qcsmikeggeemccuu("\x77\x70\x5f\160\162\151\156\x74\x5f\x73\143\x72\x69\160\164\x73", [$this, "\157\x79\x75\x71\x73\x6d\x6b\151\167\151\x6b\x67\x61\161\x73\167"], 9999)->qcsmikeggeemccuu("\167\x70\x5f\160\x72\x69\x6e\164\x5f\x73\x74\171\x6c\145\x73", [$this, "\x6b\171\x79\x77\167\x71\157\147\143\x6f\x63\x67\143\147\x77\155"], 9999); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\143\x72\x6f\x6e\x5f\163\143\150\x65\144\165\x6c\145\163", [$this, "\163\x69\x79\x6b\x6d\x6d\x75\163\153\163\155\161\155\x73\x77\x63"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\145\x78\x63\154\165\x64\x65\137\163\157\165\162\x63\145\163"), [$this, "\x67\x73\x67\x73\155\153\x65\171\165\167\x71\161\155\x73\x69\151"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\160\x65\x72\x66\157\162\155\x61\x6e\143\145\x5f\162\x65\x73\157\x75\162\143\x65\x5f\x68\x69\156\164"), [$this, "\x77\x61\x6b\157\147\143\x6d\167\143\141\x79\143\151\157\x71\145"]); parent::kgquecmsgcouyaya(); } public function gsgsmkeyuwqqmsii(array $couiucmsqaieciue = []) : array { $couiucmsqaieciue[] = self::CDN_URL; return $couiucmsqaieciue; } public function wakogcmwcaycioqe($wqogggcaamgeiwew) { $wqogggcaamgeiwew[] = self::CDN_URL; return $wqogggcaamgeiwew; } public function init() { goto qmoocweoekqueuyy; eoyiumycaigawmmc: $this->items = [self::SOURCE_LIST => [], self::AUTO_MINIFY => true, self::AUTO_ENABLE => true, self::ADVANCED_MODE => false]; goto yuoeumyiuqkuouey; sgiwoiscywusgmmm: DecoratorCron::uwugaiqywmseksqm(time(), self::SCHEDULE_KEY, self::ANALYZE_CRON_HOOK); goto skuqigsokaguscas; yuoeumyiuqkuouey: $this->ciaesowswgmgckaa(); goto eyiwqgqcsqakwqss; smcguieygyqcaqgs: $this->items = DecoratorOption::get(self::STORED_ITEMS, []); goto mgcuiguaomoqwwwm; mmgmqogugasaqkgg: DecoratorCron::uwugaiqywmseksqm(time(), self::DAILY, self::REMOVE_OLD_CRON_HOOK); goto wmumywgyyeagqoeq; qmoocweoekqueuyy: if (DecoratorCron::sceqickmyoseqcue(self::ANALYZE_CRON_HOOK)) { goto eckcqesiokgwkkiw; } goto sgiwoiscywusgmmm; skuqigsokaguscas: eckcqesiokgwkkiw: goto quyogmwugsyoaaiu; mgcuiguaomoqwwwm: if ($this->wasgwsogmuquqeaa()) { goto mqiiqkuaoekeuswo; } goto eoyiumycaigawmmc; quyogmwugsyoaaiu: if (DecoratorCron::sceqickmyoseqcue(self::REMOVE_OLD_CRON_HOOK)) { goto ecouwqosmoyyqmkw; } goto mmgmqogugasaqkgg; eyiwqgqcsqakwqss: mqiiqkuaoekeuswo: goto sckioayasmkcoeoo; wmumywgyyeagqoeq: ecouwqosmoyyqmkw: goto smcguieygyqcaqgs; sckioayasmkcoeoo: } public function wasgwsogmuquqeaa() : array { return $this->items; } public function yqgiqqayamyeemuu() : array { goto kgmeiwiakwicgkkk; saauykgakaeiyoua: return $icwicymcioeyeyek; goto qwemkcoaseywkuuc; kgmeiwiakwicgkkk: global $wp_scripts, $wp_styles; goto suuskagowwgsouqw; cquecqekuucwoumw: $this->items = $oammesyieqmwuwyi; goto koiscokkkaimiecq; owuuuiekkaeoeacq: cwswueuqoamqasya: goto saauykgakaeiyoua; suuskagowwgsouqw: $icwicymcioeyeyek = []; goto omykokikgocoikec; agemwookwseyycqo: if (!$ecukkacusqswqoem) { goto cwswueuqoamqasya; } goto cquecqekuucwoumw; csieaismmmocyacu: $ecukkacusqswqoem = false; goto aquqkiggamaoegoo; aquqkiggamaoegoo: foreach ($oammesyieqmwuwyi[self::SOURCE_LIST] as $eueuqacmukymcyya => $egsumesakcaaukem) { goto iauwuugggmegwisk; kqyoakickmseyyeq: if (!$iakkeikwceeomgyq) { goto wgiygcmqaokywuqa; } goto micceocwuwkyusic; acggikioyeueeowg: osmmoyqkqoucsgow: goto cwikoaeqmmoimmso; egaymskkosukqeao: wgiygcmqaokywuqa: goto kaiesowkgwogqseg; kaiesowkgwogqseg: ooqksueucyagyuoe: goto kicwiowcogmauwiy; cwikoaeqmmoimmso: $icwicymcioeyeyek[$eueuqacmukymcyya] = $oammesyieqmwuwyi[self::SOURCE_LIST][$eueuqacmukymcyya][self::JSDELIVR_URL]; goto egaymskkosukqeao; iauwuugggmegwisk: $uueqecyckaweeyai = $egsumesakcaaukem["\x68\141\156\x64\x6c\x65"]; goto aukucaieceiwesmm; ykwasaaoeeiuomim: $ecukkacusqswqoem = true; goto acggikioyeueeowg; aukucaieceiwesmm: $iakkeikwceeomgyq = ManipulateArray::get($wp_styles->registered, $uueqecyckaweeyai, ManipulateArray::get($wp_scripts->registered, $uueqecyckaweeyai, false)); goto kqyoakickmseyyeq; micceocwuwkyusic: if (!(!$egsumesakcaaukem[self::JSDELIVR_URL] && $iakkeikwceeomgyq->src)) { goto osmmoyqkqoucsgow; } goto iwueukqcywkiyqge; iwueukqcywkiyqge: $oammesyieqmwuwyi[self::SOURCE_LIST][$eueuqacmukymcyya][self::JSDELIVR_URL] = $this->giqeuqaeqeaogcgo($iakkeikwceeomgyq); goto ykwasaaoeeiuomim; kicwiowcogmauwiy: } goto mykiyqcqiegkiqys; koiscokkkaimiecq: $this->ciaesowswgmgckaa(); goto owuuuiekkaeoeacq; mykiyqcqiegkiqys: yssqmyoaokkksukc: goto agemwookwseyycqo; omykokikgocoikec: $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); goto csieaismmmocyacu; qwemkcoaseywkuuc: } public function giqeuqaeqeaogcgo($iakkeikwceeomgyq) { goto ayceeyuocgowqwsa; eqiiaokcgakicaye: $keccaugmemegoimu = wp_safe_remote_get((0 === $kuuiuigeacouwmaa ? "\x68\x74\164\160\x3a" : '') . $wsqkocmmsoiquqwm, $this->eeykuoewogequiii()); goto gcucsowqoeiwmyyq; qcssigmcayuyweiy: if (!preg_match("\x2f\x77\x70\x2d\x63\157\156\x74\x65\x6e\164\x5c\x2f\164\150\x65\x6d\x65\x73\134\57\x28\77\x3c\x74\x68\x65\x6d\x65\76\133\x5e\134\57\x5d\x2a\51\134\57\50\77\x3c\146\151\x6c\145\76\x2e\x2a\51\57\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto owgsameoayaogsma; } goto iymaiwqimisgacmk; qyyyycwaookqaoke: if (!$mumucmmgemqwqiia->exists()) { goto icumkkykaoqycqqu; } goto ssywsaaqqaucesau; iymaiwqimisgacmk: if (!($meyiiwcswqmuggyg["\164\150\x65\x6d\x65"] && $meyiiwcswqmuggyg["\x66\151\x6c\x65"])) { goto oeamoqweiueaueay; } goto mugscgugcogcasue; mosuacsuaasssciu: qkyciyiwkmgkmquk: goto qksckewucmosemuo; ousmyagwsiooumos: icumkkykaoqycqqu: goto qeuyekusasqmcqms; awaqksikyomsuaeo: awgmegueeqeyqamu: goto cuommomwmsackoqc; sgocecweikecwwgq: goto awgmegueeqeyqamu; goto qwisiamkmkkwucyo; sicgyiyiocyygkoc: $ykscweuoqwqcmsmo = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wsqkocmmsoiquqwm); goto cyosacayacumuaks; eekaiaeqewiqkkgm: $yuoeykkoggaegkiu = substr_replace($yuoeykkoggaegkiu, "\x2e\155\x69\156", strrpos($yuoeykkoggaegkiu, "\x2e"), 0); goto kceuusiekagyeoys; ayceeyuocgowqwsa: $yuoeykkoggaegkiu = ''; goto iuwkiyimqmgguose; yqicwmekwuoywyus: aoaqwygkaagiuuws: goto gkoaeuekqockuoiq; kmooekeyemqgucci: return $yuoeykkoggaegkiu; goto skuuyysooocugyww; ysiqakyaiooyscwy: $yuoeykkoggaegkiu = $mckmqeqaekwkwems; goto auumaoycmsmsgigs; qmokwkocmcyeyesc: maaisuqwkymeguys: goto mosuacsuaasssciu; yiceawuuiusakwiq: owgsameoayaogsma: goto sgocecweikecwwgq; uwaimsisescsgyqk: $icwicymcioeyeyek["\x76\145\x72\x73\151\x6f\x6e"] = get_bloginfo("\166\145\162\x73\151\x6f\156"); goto uqcsksaywyqeumig; yggseoaommssscwo: $wsqkocmmsoiquqwm = $iakkeikwceeomgyq->src; goto aeiemwacaiygemmg; ygcgoaokauigwuus: if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto eweaaismksecwagy; } goto ysiqakyaiooyscwy; ukwoswyyogmsygqg: if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto mceucsaeouuwyumm; } goto jsmisuccwyukksgc; kwuckkyqaygwgcuy: $kuuiuigeacouwmaa = strpos($wsqkocmmsoiquqwm, "\x2f\57"); goto giuccakymqymawgk; ekoqieigyoeyauqa: $mckmqeqaekwkwems = self::CDN_URL . "\x77\x70\x2f\160\x6c\165\x67\151\x6e\x73\x2f{$meyiiwcswqmuggyg["\160\x6c\165\x67\151\x6e"]}\57\x74\141\147\163\x2f{$muqcqaqwsaoagykg["\x56\145\162\163\151\x6f\x6e"]}\57{$meyiiwcswqmuggyg["\x66\x69\x6c\145"]}"; goto cuwcsamuuqyuyqsu; cuwcsamuuqyuyqsu: if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto egesuwkqkmaigaoe; } goto mimacwyuueomgwwy; oasggeyceiyieuuo: $mgeemcksyiuqaemy = hash("\x73\x68\141\62\65\66", $ykscweuoqwqcmsmo); goto omuauimgkygcecsc; yqcusaeysomccaok: if (!($meyiiwcswqmuggyg["\160\154\x75\147\x69\x6e"] && $meyiiwcswqmuggyg["\x66\151\x6c\145"])) { goto mcqucouuiuoagqwc; } goto iwkckkeimmeoquyq; iwkckkeimmeoquyq: $plugin_file = ABSPATH . "\167\x70\x2d\143\x6f\x6e\164\x65\x6e\x74\57\160\154\165\147\x69\x6e\x73\57{$meyiiwcswqmuggyg["\160\x6c\165\x67\151\156"]}\57{$meyiiwcswqmuggyg["\x70\x6c\x75\x67\151\x6e"]}\x2e\x70\x68\x70"; goto masakmomqmeocqqg; ggeoqeowscwkeumy: gqimwsyemoewagcy: goto qyeswawykmasuqye; aumowowgewgqmwci: if (!$ykscweuoqwqcmsmo) { goto qkyciyiwkmgkmquk; } goto oasggeyceiyieuuo; quamuugoocyyceec: if (preg_match("\x2f\x77\160\55\143\157\x6e\164\145\156\x74\134\x2f\160\154\x75\x67\151\156\x73\134\57\50\77\x3c\160\154\x75\147\x69\x6e\76\x5b\x5e\x5c\57\135\x2a\51\x5c\x2f\50\x3f\x3c\x66\151\x6c\145\76\56\52\51\x2f\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto kyiwsiakwgiwouyi; } goto qcssigmcayuyweiy; masakmomqmeocqqg: if (file_exists($plugin_file)) { goto ykqsuiyyosyeyscc; } goto yksywwikmeksikqc; cuommomwmsackoqc: goto aoaqwygkaagiuuws; goto ggeoqeowscwkeumy; igwkcikeyoowosoi: syusgosewwkoagoq: goto iqsgossweywksoia; suqckoccuyeeymww: ceiuqsiqgiuiekem: goto giugwaeuwaomossq; kwmiwaecqcgiaqye: mceucsaeouuwyumm: goto yqicwmekwuoywyus; yoqsigmoyaaceqky: foreach ($php_files as $mkomwsiykqigmqca) { goto isewysikysqewkis; igmmqwyawcuuckkq: goto ceiuqsiqgiuiekem; goto eouwacqiommmeaqc; sqwuqegeiisoiiuq: gsymkkskwsgggoic: goto uscokkmquayiukag; eouwacqiommmeaqc: ugykmcouiwiscoqu: goto sqwuqegeiisoiiuq; wiwoiyoakywqyaiy: if (!$muqcqaqwsaoagykg["\x56\145\162\x73\x69\157\156"]) { goto ugykmcouiwiscoqu; } goto igmmqwyawcuuckkq; isewysikysqewkis: $muqcqaqwsaoagykg = get_plugin_data($mkomwsiykqigmqca); goto wiwoiyoakywqyaiy; uscokkmquayiukag: } goto suqckoccuyeeymww; uqcsksaywyqeumig: gkqiqaqecmoogmaa: goto yggmaskeguaqkusc; aeiemwacaiygemmg: $muqcqaqwsaoagykg = []; goto yyqygaokeccgugos; mwieyyqamgwicgco: $wuayakmyggcomiuy = wp_check_filetype($wsqkocmmsoiquqwm); goto wkiymcoqqiigqaaw; mqgeseysuwcaqwiy: if (!$muqcqaqwsaoagykg["\x56\x65\x72\x73\x69\157\156"]) { goto syusgosewwkoagoq; } goto ekoqieigyoeyauqa; mimacwyuueomgwwy: $yuoeykkoggaegkiu = $mckmqeqaekwkwems; goto ksckqkmwiqggykke; yggmaskeguaqkusc: $mckmqeqaekwkwems = self::CDN_URL . "{$icwicymcioeyeyek["\164\171\160\x65"]}\x2f{$icwicymcioeyeyek["\156\141\155\145"]}\x40{$icwicymcioeyeyek["\x76\145\162\163\x69\157\x6e"]}{$icwicymcioeyeyek["\146\151\x6c\x65"]}"; goto ukwoswyyogmsygqg; cyosacayacumuaks: goto kwyimqumkuuyaiku; goto ikcwmsgocyuqiumc; qksckewucmosemuo: sksgcusuyqcwqswe: goto kmooekeyemqgucci; kyiuewcikkqagwwg: kwyimqumkuuyaiku: goto aumowowgewgqmwci; sycougcyeqmeiagk: $muqcqaqwsaoagykg = get_plugin_data($plugin_file); goto ssagcgqaucssyego; omuauimgkygcecsc: $icwicymcioeyeyek = $this->yaouiiywcouyyimi($mgeemcksyiuqaemy); goto wwcqoeuwskquakwy; ssywsaaqqaucesau: $mckmqeqaekwkwems = self::CDN_URL . "\167\160\57\164\150\145\x6d\x65\x73\57{$meyiiwcswqmuggyg["\x74\x68\145\155\x65"]}\57{$mumucmmgemqwqiia->get("\x56\145\x72\163\x69\x6f\x6e")}\x2f{$meyiiwcswqmuggyg["\x66\x69\x6c\145"]}"; goto ygcgoaokauigwuus; wkiymcoqqiigqaaw: if (!($wuayakmyggcomiuy["\145\x78\x74"] !== $gqqycaoyaweqigmi["\145\170\x74"])) { goto maaisuqwkymeguys; } goto esqwswmoegiqcckg; qwisiamkmkkwucyo: kyiwsiakwgiwouyi: goto yqcusaeysomccaok; giuccakymqymawgk: if (false !== $kuuiuigeacouwmaa) { goto mqimkwickkgqqeoi; } goto sicgyiyiocyygkoc; iqsgossweywksoia: mcqucouuiuoagqwc: goto awaqksikyomsuaeo; kceuusiekagyeoys: esagiiawomyacuiw: goto uyeyscsaigimsqwq; ssagcgqaucssyego: ugogoekeckgcmuaw: goto mqgeseysuwcaqwiy; auumaoycmsmsgigs: eweaaismksecwagy: goto ousmyagwsiooumos; qyeswawykmasuqye: if (!("\127\x6f\x72\144\120\162\x65\x73\x73\x2f\127\157\x72\x64\120\x72\x65\163\163" === $icwicymcioeyeyek["\x6e\x61\x6d\145"])) { goto gkqiqaqecmoogmaa; } goto uwaimsisescsgyqk; acgqaeakoyasgkku: ykqsuiyyosyeyscc: goto sycougcyeqmeiagk; yyqygaokeccgugos: $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); goto oeusomaaeekakake; iuwkiyimqmgguose: $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); goto yggseoaommssscwo; qeuyekusasqmcqms: oeamoqweiueaueay: goto yiceawuuiusakwiq; gkoaeuekqockuoiq: if (!($oammesyieqmwuwyi[self::AUTO_MINIFY] && !$this->cgsqaegiswcuoggi($ykscweuoqwqcmsmo))) { goto esagiiawomyacuiw; } goto eekaiaeqewiqkkgm; ikcwmsgocyuqiumc: mqimkwickkgqqeoi: goto eqiiaokcgakicaye; gcucsowqoeiwmyyq: $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); goto kyiuewcikkqagwwg; esqwswmoegiqcckg: $yuoeykkoggaegkiu = ''; goto qmokwkocmcyeyesc; oeusomaaeekakake: if (!$wsqkocmmsoiquqwm) { goto sksgcusuyqcwqswe; } goto kwuckkyqaygwgcuy; giugwaeuwaomossq: goto ugogoekeckgcmuaw; goto acgqaeakoyasgkku; jsmisuccwyukksgc: $yuoeykkoggaegkiu = $mckmqeqaekwkwems; goto kwmiwaecqcgiaqye; uyeyscsaigimsqwq: $gqqycaoyaweqigmi = wp_check_filetype($yuoeykkoggaegkiu); goto mwieyyqamgwicgco; mugscgugcogcasue: $mumucmmgemqwqiia = wp_get_theme($meyiiwcswqmuggyg["\x74\150\145\155\x65"]); goto qyyyycwaookqaoke; wwcqoeuwskquakwy: if (isset($icwicymcioeyeyek["\x66\151\154\x65"])) { goto gqimwsyemoewagcy; } goto quamuugoocyyceec; yksywwikmeksikqc: $php_files = glob(ABSPATH . "\167\x70\55\143\157\156\164\x65\156\164\x2f\160\154\x75\147\x69\156\163\57{$meyiiwcswqmuggyg["\160\154\165\x67\151\156"]}\x2f\x2a\x2e\x70\150\160"); goto yoqsigmoyaaceqky; ksckqkmwiqggykke: egesuwkqkmaigaoe: goto igwkcikeyoowosoi; skuuyysooocugyww: } private function cgsqaegiswcuoggi($ykscweuoqwqcmsmo) : bool { $ymacoouqwcqwwagu = preg_replace(self::COMMENT_PATTERN, '', $ykscweuoqwqcmsmo); return strlen($ymacoouqwcqwwagu) / count(preg_split("\x2f\x5c\156\57", $ymacoouqwcqwwagu)) > 200; } private function yaouiiywcouyyimi(string $mgeemcksyiuqaemy) { goto mkgmaguyswskyioa; mkgmaguyswskyioa: $sogksuscggsicmac = false; goto skwusmoyomgqkimm; ismeikacqqyqcmqe: cmmusgkieoqyymgs: goto qsokkkyoackoycie; kakkuyeccaacewyo: $sogksuscggsicmac = json_decode($ykscweuoqwqcmsmo, true); goto cysgqimowcqoqqsc; cysgqimowcqoqqsc: $sogksuscggsicmac["\163\x68\141\62\65\66"] = $mgeemcksyiuqaemy; goto ismeikacqqyqcmqe; gicuuwuuuwumyooa: if (!$ykscweuoqwqcmsmo) { goto cmmusgkieoqyymgs; } goto kakkuyeccaacewyo; qsokkkyoackoycie: return $sogksuscggsicmac; goto casgoamcqkekgeeo; skwusmoyomgqkimm: $keccaugmemegoimu = ManipulateRequest::yyqgamuwwakgciey(self::HASH_LOOKUP_URL . $mgeemcksyiuqaemy, $this->eeykuoewogequiii()); goto usyckeewsgwaysam; usyckeewsgwaysam: $ykscweuoqwqcmsmo = ManipulateRequest::ykqgmaeumqwokcmo($keccaugmemegoimu); goto gicuuwuuuwumyooa; casgoamcqkekgeeo: } public function qycuagacqaecigyi(string $eeamcawaiqocomwy, string $mgeemcksyiuqaemy) : bool { goto qcgyggiaowuqswuw; qcgyggiaowuqswuw: $cqaakiwueoeaoewq = [200]; goto sooecucuakgkuyis; kwsqgqmwyyeykgum: return false; goto emauuoieewwoeyqq; oqwwacmigasucsoc: return $kyquyseskckkouak === $mgeemcksyiuqaemy; goto egkeqqgakieyimuq; koukiyqaccegmquc: $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); goto ekakkiuuquqkccse; sooecucuakgkuyis: $keccaugmemegoimu = wp_safe_remote_get($eeamcawaiqocomwy, $this->eeykuoewogequiii()); goto ywqakqkmmcoceqka; ywqakqkmmcoceqka: if (!(is_wp_error($keccaugmemegoimu) || !in_array(wp_remote_retrieve_response_code($keccaugmemegoimu), $cqaakiwueoeaoewq, true))) { goto yseyyukqaowwouua; } goto kwsqgqmwyyeykgum; ekakkiuuquqkccse: $kyquyseskckkouak = hash("\163\x68\141\62\x35\66", $ykscweuoqwqcmsmo); goto oqwwacmigasucsoc; emauuoieewwoeyqq: yseyyukqaowwouua: goto koukiyqaccegmquc; egkeqqgakieyimuq: } public function enqueue($oseqkueswiwsceis) { goto uaicwcqwauosmsqm; kgysyqkoqgwmoscq: ckwmkquuyyugigom: goto makomwwyomweyamm; ysweqawmawicakeo: cakuguiciaiaeukg: goto owisckseoogsugqq; makomwwyomweyamm: cumeycwmuuqawwyu: goto oqwcmgwimeisusoe; uaicwcqwauosmsqm: if (!$this->ocysssyiuaueqiei()) { goto cumeycwmuuqawwyu; } goto gsqcoqqsioiyoykq; ookcgumoacskyymy: $this->ciaesowswgmgckaa(); goto cuseccewekgcgkyg; cuseccewekgcgkyg: awwaiioyywmokwsm: goto kgysyqkoqgwmoscq; owisckseoogsugqq: if (!$ecukkacusqswqoem) { goto awwaiioyywmokwsm; } goto ookcgumoacskyymy; goaowamiyyamueiw: if (!$oseqkueswiwsceis instanceof WP_Dependencies) { goto ckwmkquuyyugigom; } goto iaomqomgiwiegoca; gsqcoqqsioiyoykq: $ecukkacusqswqoem = false; goto goaowamiyyamueiw; iaomqomgiwiegoca: foreach ($oseqkueswiwsceis->queue as $eueuqacmukymcyya) { $ecukkacusqswqoem = $this->waowasqqegsqwoay($eueuqacmukymcyya, $oseqkueswiwsceis) || $ecukkacusqswqoem; wswikooyuaaouqgk: } goto ysweqawmawicakeo; oqwcmgwimeisusoe: } public function kyywwqogcocgcgwm() { global $wp_styles; $this->enqueue($wp_styles); } public function oyuqsmkiwikgaqsw() { global $wp_scripts; $this->enqueue($wp_scripts); } public function ciaesowswgmgckaa() { DecoratorOption::update(self::STORED_ITEMS, $this->wasgwsogmuquqeaa()); } public function asqwqaqowgeyyayw() { goto wwswmaewcaisauei; ocgkwqqmgasuoies: foreach ($oammesyieqmwuwyi[self::SOURCE_LIST] as $momcykaoccoymeig => $egsumesakcaaukem) { goto ugswokwmkumcmigc; cigesysuauaiccms: qiaaqkymeuuueoqk: goto qumkwsqqocooyuoq; gwiaimosqoiquwkc: unset($oammesyieqmwuwyi[self::SOURCE_LIST][$momcykaoccoymeig]); goto owgakkqgckqcegoi; owgakkqgckqcegoi: $ecukkacusqswqoem = true; goto cigesysuauaiccms; ugswokwmkumcmigc: if (!(time() - $egsumesakcaaukem[self::LAST_LOADED_DATETIME] > 60 * 60 * 24 * 2)) { goto qiaaqkymeuuueoqk; } goto gwiaimosqoiquwkc; qumkwsqqocooyuoq: asaowisseacciyia: goto gcskyqewysqaceeg; gcskyqewysqaceeg: } goto wmaeicoyyciuaiuy; ooysmgyeqoiesgqm: if (!$ecukkacusqswqoem) { goto kkewoqqowugagwoy; } goto kwoyiysciqumswcy; wsemeeocquawyauo: $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); goto ocgkwqqmgasuoies; qqmmycmsoqegcqqw: kkewoqqowugagwoy: goto isqwwmikecauwyuc; aaogeemgkogagkai: $this->ciaesowswgmgckaa(); goto qqmmycmsoqegcqqw; wwswmaewcaisauei: $ecukkacusqswqoem = false; goto wsemeeocquawyauo; wmaeicoyyciuaiuy: acesyuieuuqwgkwm: goto ooysmgyeqoiesgqm; kwoyiysciqumswcy: $this->items = $oammesyieqmwuwyi; goto aaogeemgkogagkai; isqwwmikecauwyuc: } public function siykmmusksmqmswc($immuisiomomksweo) { goto magymcqykamwqigw; magymcqykamwqigw: $immaoamcsocgawcg = ManipulateArray::get($immuisiomomksweo, self::SCHEDULE_KEY); goto ukogwqiuuuakkawy; ukogwqiuuuakkawy: if ($immaoamcsocgawcg) { goto oiiqqgyqmggyiums; } goto gicmaqmuscawegie; gicmaqmuscawegie: $immuisiomomksweo[self::SCHEDULE_KEY] = ["\151\156\x74\x65\x72\x76\141\x6c" => 15 * 60, "\144\x69\x73\160\154\x61\171" => esc_html__("\105\x76\x65\x72\x79\40\106\x69\x66\x74\145\145\156\40\115\x69\156\165\164\x65\163", PR__PKG__OPTIMIZATION)]; goto oymyqcoekqyuiguq; oymyqcoekqyuiguq: oiiqqgyqmggyiums: goto ayamomygygmgwgkg; ayamomygygmgwgkg: return $immuisiomomksweo; goto gygqgauaceiuawkq; gygqgauaceiuawkq: } private function waowasqqegsqwoay(string $eueuqacmukymcyya, ?WP_Dependencies $ugmuiugkaygmsagq = null) : bool { goto kskqquqsegiiogek; wowmysuygugawmmu: if (!("\x73\164\x79\154\145" === $sqeykgyoooqysmca)) { goto yimeskeioamqmuwg; } goto mmmqqoemusicwgqg; ucaoyoamaycsiacq: $this->items = $oammesyieqmwuwyi; goto iuyagqakcieasiua; aeaciamekuqyieys: if (!isset($oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy])) { goto iyeswoaqkaeggiiy; } goto ugiqiewymimqecsu; umemmgiwimkymaya: wp_deregister_script($eueuqacmukymcyya); goto omsmaougqkqigogw; ggyoywwggggekycs: ucksaiwquekagyqe: goto gkkwmqoacciwomqs; iuyagqakcieasiua: foreach ($egsumesakcaaukem->deps as $icycamqakysyomsi) { $ecukkacusqswqoem = $ecukkacusqswqoem || $this->waowasqqegsqwoay($icycamqakysyomsi, $ugmuiugkaygmsagq); ekoegocuqoycoeyq: } goto oasisywuwssumsok; mocaoayiouggauiy: if (!$ugmuiugkaygmsagq) { goto akeoaicoieaiekcw; } goto ygskksomysgaokek; okagauksoqkoqygi: return $ecukkacusqswqoem; goto eciksmgaqikwegwq; iquugwoswgkoiieg: wp_register_style($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); goto xogaycsaesgqeqig; ugiqiewymimqecsu: if (!(time() - $oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy][self::LAST_LOADED_DATETIME] > 60 * 60 * 24)) { goto ucksaiwquekagyqe; } goto iuysqgmmgqiywssm; iaoyeugekskmewgs: yksamaucqkqsawkk: goto iokemmkgmcaksiqu; qgkiguggkyiycwow: $egsumesakcaaukem = ManipulateArray::get($ugmuiugkaygmsagq->registered, $eueuqacmukymcyya); goto becceuuwokgoaewy; syoeqaqkseguwmgy: $ogomymegcoacqisg = $oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy][self::JSDELIVR_URL]; goto sgiouaqukyycswqm; wyugqoowakyicyic: if (!($egsumesakcaaukem && !preg_match("\57\x63\x64\156\56\x6a\x73\144\x65\x6c\151\166\162\x2e\x6e\x65\x74\174\x67\157\x6f\147\154\145\141\x70\151\57\x69", $egsumesakcaaukem->src))) { goto yksamaucqkqsawkk; } goto aeaciamekuqyieys; omsmaougqkqigogw: wp_register_script($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver, true); goto geasgywiogoeamek; xogaycsaesgqeqig: foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { wp_style_add_data($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); eacysqsegwcqawsa: } goto gsiaskgsukseumig; imwiyqcekcykscui: yeemsgmumygmumqw: goto umemmgiwimkymaya; iwgmywqocewwgoeo: if (!(isset($oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy]) && $oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy][self::JSDELIVR_URL])) { goto cwugokqsmiomgmqg; } goto syoeqaqkseguwmgy; oasisywuwssumsok: uuuceqkseqkqawko: goto iaoyeugekskmewgs; gkkwmqoacciwomqs: goto asqqqqakiagymemk; goto kucqcgeesiccuuia; kucqcgeesiccuuia: iyeswoaqkaeggiiy: goto oycuaqewsskgkqci; ucasigqmoiwaimkk: jkgouewqysmscmqs: goto uugwmywmaqomeksa; kskqquqsegiiogek: $ecukkacusqswqoem = false; goto mocaoayiouggauiy; gwkawguwsamuomuo: $ogomymegcoacqisg = $egsumesakcaaukem->src; goto ucasigqmoiwaimkk; gsiaskgsukseumig: iquecygaakmiomeg: goto syiyemqigyugagks; sgiouaqukyycswqm: if ($ogomymegcoacqisg) { goto jkgouewqysmscmqs; } goto gwkawguwsamuomuo; qweyymyuuqwcmkqg: sgiuwkisugmewmcs: goto guqmgiqaaowaauyo; ygskksomysgaokek: $sqeykgyoooqysmca = $ugmuiugkaygmsagq instanceof WP_Scripts ? "\x73\143\x72\x69\x70\164" : "\163\x74\x79\154\145"; goto wwcwmkowgooocaem; iokemmkgmcaksiqu: akeoaicoieaiekcw: goto okagauksoqkoqygi; weouocwmwicayyiy: $ecukkacusqswqoem = true; goto ggyoywwggggekycs; mmmqqoemusicwgqg: wp_deregister_style($eueuqacmukymcyya); goto iquugwoswgkoiieg; oycuaqewsskgkqci: $oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy] = ["\150\141\156\144\154\x65" => $eueuqacmukymcyya, self::JSDELIVR_URL => '', self::LAST_LOADED_DATETIME => time()]; goto ocmagamuyawyiyka; guqmgiqaaowaauyo: wkaoyycsoeoyqcae: goto mccimkgwkkamsime; woqkgwmkmqsuceuy: goto wkaoyycsoeoyqcae; goto imwiyqcekcykscui; ocmagamuyawyiyka: $ecukkacusqswqoem = true; goto amqgiisymksuuuss; mccimkgwkkamsime: cwugokqsmiomgmqg: goto ucaoyoamaycsiacq; geasgywiogoeamek: foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { wp_script_add_data($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); kceeuicccqscwgsu: } goto qweyymyuuqwcmkqg; wwcwmkowgooocaem: $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); goto qgkiguggkyiycwow; uugwmywmaqomeksa: if ("\163\143\162\151\160\164" === $sqeykgyoooqysmca) { goto yeemsgmumygmumqw; } goto wowmysuygugawmmu; amqgiisymksuuuss: asqqqqakiagymemk: goto iwgmywqocewwgoeo; syiyemqigyugagks: yimeskeioamqmuwg: goto woqkgwmkmqsuceuy; iuysqgmmgqiywssm: $oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy][self::LAST_LOADED_DATETIME] = time(); goto weouocwmwicayyiy; becceuuwokgoaewy: $aguwegoioikwgooy = "{$sqeykgyoooqysmca}\x2d{$eueuqacmukymcyya}"; goto wyugqoowakyicyic; eciksmgaqikwegwq: } public function agkwcckksaegcsce(string $ogomymegcoacqisg) : string { goto wiaesksmicgikqcm; agemeseegiuuowgo: measoqewessauqma: goto goswwiomuackymqi; qowcwmsiyscackaa: qckouamqueqiykqi: goto aqigiwmamkowomiw; aqigiwmamkowomiw: auaigccmwqwsqsku: goto qesqgumuouyymcwa; usgcoawgqswoeiec: $acqcekoeswseswws = ltrim(str_replace($cgmkimaosyyuqeyg, '', $ogomymegcoacqisg), "\57"); goto qowcwmsiyscackaa; uuisaeysawuagysg: goto qckouamqueqiykqi; goto ggqeakyaggiuegek; mcucegiogmuyogki: $acqcekoeswseswws = ltrim($ogomymegcoacqisg, "\x2f"); goto gqaimiooakyykccy; gqaimiooakyykccy: goto auaigccmwqwsqsku; goto agemeseegiuuowgo; ggqeakyaggiuegek: kieyoaoawqacqamy: goto usgcoawgqswoeiec; wiaesksmicgikqcm: if (strpos($ogomymegcoacqisg, "\x2f\x2f") !== false) { goto measoqewessauqma; } goto mcucegiogmuyogki; gykuaukukosiocoy: if (strpos($ogomymegcoacqisg, $cgmkimaosyyuqeyg) === 0) { goto kieyoaoawqacqamy; } goto camawumockccayaq; camawumockccayaq: $acqcekoeswseswws = $ogomymegcoacqisg; goto uuisaeysawuagysg; qesqgumuouyymcwa: return $acqcekoeswseswws; goto csyoimsqgwcmiwki; goswwiomuackymqi: $cgmkimaosyyuqeyg = site_url(); goto gykuaukukosiocoy; csyoimsqgwcmiwki: } private function eeykuoewogequiii() : array { return []; } }
