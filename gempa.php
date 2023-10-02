<?php
class Gempa{
    private $lokasi;
    private $skala;


    public function _constraktor($lokasi, $skala){
        $this->lokasi=$lokasi;
        $this->skala=$skala;
    }

    private function dampak($skala){
        $this->skala = $skala;
        
    }
}

?>