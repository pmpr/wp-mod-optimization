<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63281a1ecd5e6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; trait MemoizeTrait { protected ?array $memoized = []; public function acqakueoqmiuokaq() : ?array { return $this->memoized; } private function kwaaokggemygammc(array $ywmkwiwkosakssii) : string { $eugsosgsugioquqe = "\144\x37\x35\x31\67\61\x33\71\70\70\x39\x38\67\x65\71\63\x33\61\x39\70\x30\63\66\63\145\62\x34\x31\x38\x39\143\x65"; if (!([] !== $ywmkwiwkosakssii)) { goto eqkauqciwewmgeoi; } md5(ManipulateString::wegeuqkaeuusoike($ywmkwiwkosakssii)); eqkauqciwewmgeoi: return $eugsosgsugioquqe; } public final function koeusmomaqogossg(string $qgciuiagkkguykgs, $ywmkwiwkosakssii = []) : bool { $eugsosgsugioquqe = $this->kwaaokggemygammc($ywmkwiwkosakssii); return isset($this->acqakueoqmiuokaq()[$qgciuiagkkguykgs][$eugsosgsugioquqe]); } public final function eecucukcqkqysiau(string $qgciuiagkkguykgs, $ywmkwiwkosakssii = []) { $eugsosgsugioquqe = $this->kwaaokggemygammc($ywmkwiwkosakssii); $yausomeaesmmaeug = $this->memoized; return $yausomeaesmmaeug[$qgciuiagkkguykgs][$eugsosgsugioquqe] ?? null; } public final function woqeaywukmiuaiyu(string $qgciuiagkkguykgs, array $ywmkwiwkosakssii = [], $eqgoocgaqwqcimie = null) { $eugsosgsugioquqe = $this->kwaaokggemygammc($ywmkwiwkosakssii); $this->memoized[$qgciuiagkkguykgs][$eugsosgsugioquqe] = $eqgoocgaqwqcimie; return $this->acqakueoqmiuokaq()[$qgciuiagkkguykgs][$eugsosgsugioquqe]; } }
