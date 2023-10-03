<?php
require_once 'AbstractClass.php';

class PersegiPanjang extends Bentuk2D{
    private $panjang;
    private $lebar;

    public function __construct($panjang,$lebar) {
        $this->panjang= $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang() {
        return "Persegi Panjang";
    }

    public function Keterangan(){
        return "Panjang = ".$this->panjang." Lebar = ".$this->lebar;
    }


    public function luasBidang() {
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }

    public function kelilingBidang() {
        $keliling = 2 * ($this->panjang + $this->lebar);
        return $keliling;
    }
} 
?>