<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6689b42493617             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait MemoizeTrait { protected ?array $memoized = []; public function acqakueoqmiuokaq() : ?array { return $this->memoized; } private function kwaaokggemygammc(array $ywmkwiwkosakssii) : string { $eugsosgsugioquqe = "\x64\x37\x35\61\67\61\63\x39\x38\x38\x39\70\x37\x65\71\x33\x33\x31\71\x38\60\x33\66\63\145\62\x34\x31\70\71\143\145"; if (!([] !== $ywmkwiwkosakssii)) { goto ycakugokkqkuqyiu; } md5(call_user_func("\152\x73\157\156\x5f\x65\x6e\143\157\x64\x65", $ywmkwiwkosakssii)); ycakugokkqkuqyiu: return $eugsosgsugioquqe; } public final function koeusmomaqogossg(string $qgciuiagkkguykgs, $ywmkwiwkosakssii = []) : bool { $eugsosgsugioquqe = $this->kwaaokggemygammc($ywmkwiwkosakssii); return isset($this->acqakueoqmiuokaq()[$qgciuiagkkguykgs][$eugsosgsugioquqe]); } public final function eecucukcqkqysiau(string $qgciuiagkkguykgs, $ywmkwiwkosakssii = []) { $eugsosgsugioquqe = $this->kwaaokggemygammc($ywmkwiwkosakssii); $yausomeaesmmaeug = $this->memoized; return $yausomeaesmmaeug[$qgciuiagkkguykgs][$eugsosgsugioquqe] ?? null; } public final function woqeaywukmiuaiyu(string $qgciuiagkkguykgs, array $ywmkwiwkosakssii = [], $eqgoocgaqwqcimie = null) { $eugsosgsugioquqe = $this->kwaaokggemygammc($ywmkwiwkosakssii); $this->memoized[$qgciuiagkkguykgs][$eugsosgsugioquqe] = $eqgoocgaqwqcimie; return $this->acqakueoqmiuokaq()[$qgciuiagkkguykgs][$eugsosgsugioquqe]; } }
