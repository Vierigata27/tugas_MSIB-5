<?php
class KonversiSuhu {
    private $suhuSatuanAwal;
    private $suhuSatuanAkhir;
    private $besarSuhu;
    public $suhuAkhir;

    public function __construct($suhuSatuanAwal, $suhuSatuanAkhir, $besarSuhu) {
        $this->suhuSatuanAwal = $suhuSatuanAwal;
        $this->suhuSatuanAkhir = $suhuSatuanAkhir;
        $this->besarSuhu = $besarSuhu;
    }

    private function konversi() {
        if ($this->suhuSatuanAwal == 'Celcius' && $this->suhuSatuanAkhir == 'Fahrenheit') {
            $this->suhuAkhir = ($this->besarSuhu * 9/5) + 32;
        } elseif ($this->suhuSatuanAwal == 'Fahrenheit' && $this->suhuSatuanAkhir == 'Celcius') {
            $this->suhuAkhir = ($this->besarSuhu - 32) * 5/9;
        } elseif ($this->suhuSatuanAwal == 'Celcius' && $this->suhuSatuanAkhir == 'Reamur') {
            $this->suhuAkhir = ($this->besarSuhu * 4/5);
        } elseif ($this->suhuSatuanAwal == 'Reamur' && $this->suhuSatuanAkhir == 'Celcius') {
            $this->suhuAkhir = ($this->besarSuhu * 5/4);
        } else {
            $this->suhuAkhir = 'error';
        }
    }

    public function cetak() {
        $this->konversi();
        echo '<table border=1>';
        echo '<tr>';
             echo '<th colspan="2">'.$this->suhuSatuanAwal.'->'. $this->suhuSatuanAkhir;
             echo '</th>';
        echo '</tr>';
        echo '<tr>';
            echo '<td> Suhu Awal : ';
            echo '</td>';
            echo '<td>'.$this->besarSuhu;
            echo '</td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td> Suhu Akhir : ';
            echo '</td>';
            echo '<td>'.$this->suhuAkhir;
            echo '</td>';
        echo '</tr>';
        echo '</table>';
       echo '<br>';
    }
}
?>