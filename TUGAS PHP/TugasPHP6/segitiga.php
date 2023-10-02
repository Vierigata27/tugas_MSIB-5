<?php
require_once 'AbstractClass.php';
class Segitiga extends Bentuk2D {
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang() {
        return "Segitiga";
    }

    public function luasBidang() {
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }

    public function kelilingBidang() {
        $sisiMiring = sqrt(pow($this->alas, 2) + pow($this->tinggi, 2));
        $keliling = $this->alas + $this->tinggi + $sisiMiring;
        return $keliling;
    }
}
?>