<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c6d174213a3             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Traits; trait MemoizeTrait { protected ?array $memoized = []; public function acqakueoqmiuokaq() : ?array { return $this->memoized; } private final function kwaaokggemygammc(array $ywmkwiwkosakssii) : string { $eugsosgsugioquqe = "\144\67\65\x31\67\61\63\x39\x38\70\x39\70\x37\x65\71\x33\x33\61\x39\x38\60\63\x36\63\x65\x32\x34\x31\70\71\143\x65"; if (!([] !== $ywmkwiwkosakssii)) { goto cecuyayqoioasumi; } md5(call_user_func("\152\163\157\156\137\x65\156\x63\x6f\x64\145", $ywmkwiwkosakssii)); cecuyayqoioasumi: return $eugsosgsugioquqe; } public final function koeusmomaqogossg(string $qgciuiagkkguykgs, $ywmkwiwkosakssii = []) : bool { $eugsosgsugioquqe = $this->kwaaokggemygammc($ywmkwiwkosakssii); return isset($this->acqakueoqmiuokaq()[$qgciuiagkkguykgs][$eugsosgsugioquqe]); } public final function eecucukcqkqysiau(string $qgciuiagkkguykgs, $ywmkwiwkosakssii = []) { $eugsosgsugioquqe = $this->kwaaokggemygammc($ywmkwiwkosakssii); $yausomeaesmmaeug = $this->memoized; return $yausomeaesmmaeug[$qgciuiagkkguykgs][$eugsosgsugioquqe] ?? null; } public final function woqeaywukmiuaiyu(string $qgciuiagkkguykgs, array $ywmkwiwkosakssii = [], $eqgoocgaqwqcimie = null) { $eugsosgsugioquqe = $this->kwaaokggemygammc($ywmkwiwkosakssii); $this->memoized[$qgciuiagkkguykgs][$eugsosgsugioquqe] = $eqgoocgaqwqcimie; return $this->acqakueoqmiuokaq()[$qgciuiagkkguykgs][$eugsosgsugioquqe]; } }
