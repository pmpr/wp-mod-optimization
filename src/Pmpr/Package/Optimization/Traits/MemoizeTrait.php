<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c04d4492ba5             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Traits; trait MemoizeTrait { protected ?array $memoized = []; public function acqakueoqmiuokaq() : ?array { return $this->memoized; } private final function kwaaokggemygammc(array $ywmkwiwkosakssii) : string { $eugsosgsugioquqe = "\x64\x37\65\x31\67\61\x33\71\x38\x38\71\70\67\x65\71\63\63\x31\71\70\60\63\66\63\x65\62\x34\x31\70\71\x63\145"; if (!([] !== $ywmkwiwkosakssii)) { goto cecuyayqoioasumi; } md5(call_user_func("\x6a\163\x6f\156\137\145\156\x63\157\144\145", $ywmkwiwkosakssii)); cecuyayqoioasumi: return $eugsosgsugioquqe; } public final function koeusmomaqogossg(string $qgciuiagkkguykgs, $ywmkwiwkosakssii = []) : bool { $eugsosgsugioquqe = $this->kwaaokggemygammc($ywmkwiwkosakssii); return isset($this->acqakueoqmiuokaq()[$qgciuiagkkguykgs][$eugsosgsugioquqe]); } public final function eecucukcqkqysiau(string $qgciuiagkkguykgs, $ywmkwiwkosakssii = []) { $eugsosgsugioquqe = $this->kwaaokggemygammc($ywmkwiwkosakssii); $yausomeaesmmaeug = $this->memoized; return $yausomeaesmmaeug[$qgciuiagkkguykgs][$eugsosgsugioquqe] ?? null; } public final function woqeaywukmiuaiyu(string $qgciuiagkkguykgs, array $ywmkwiwkosakssii = [], $eqgoocgaqwqcimie = null) { $eugsosgsugioquqe = $this->kwaaokggemygammc($ywmkwiwkosakssii); $this->memoized[$qgciuiagkkguykgs][$eugsosgsugioquqe] = $eqgoocgaqwqcimie; return $this->acqakueoqmiuokaq()[$qgciuiagkkguykgs][$eugsosgsugioquqe]; } }
