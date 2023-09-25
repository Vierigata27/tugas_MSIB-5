<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array 3</title>
</head>
<body>
<?php
    $mahasiswa1 = ['nim' => '000001', 'nama' => 'Vieri', 'nilai' => 80];
    $mahasiswa2 = ['nim' => '000002', 'nama' => 'Gata', 'nilai' => 55];
    $mahasiswa3 = ['nim' => '000003', 'nama' => 'Echa', 'nilai' => 95];
    $mahasiswa4 = ['nim' => '000004', 'nama' => 'Ersa', 'nilai' => 88];
    $mahasiswa5 = ['nim' => '000005', 'nama' => 'Firda', 'nilai' => 84];
    $mahasiswa6 = ['nim' => '000006', 'nama' => 'Amalia', 'nilai' => 89];
    $mahasiswa7 = ['nim' => '000007', 'nama' => 'Arief', 'nilai' => 66];
    $mahasiswa8 = ['nim' => '000008', 'nama' => 'Maulana', 'nilai' => 44];
    $mahasiswa9 = ['nim' => '000009', 'nama' => 'Budi', 'nilai' => 59];
    $mahasiswa10 = ['nim' => '0000010', 'nama' => 'Boby', 'nilai' => 60];

    $judul_1 = ['No', 'NIM', 'Nama Mahasiswa', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
    $mahasiswa = [$mahasiswa1, $mahasiswa2, $mahasiswa3, $mahasiswa4, $mahasiswa5, $mahasiswa6, $mahasiswa7, $mahasiswa8, $mahasiswa9, $mahasiswa10 ];

    $mhs = count($mahasiswa);
    $nilai_mhs = array_column($mahasiswa,'nilai');
    $nilai_tertinggi = max($nilai_mhs);
    $nilai_terendah = min($nilai_mhs);
    $total_nilai = array_sum($nilai_mhs);
    $nilai_ratarata = $total_nilai / $mhs;

    $keterangan = [
        'Jumlah Mahasiswa' => $mhs,
        'Nilai Tertinggi' => $nilai_tertinggi,
        'Nilai Terendah' => $nilai_terendah,
        'Nilai Rata - Rata' => $nilai_ratarata,
        'Total Nilai Keseluruhan' => $total_nilai,
    ];
?>  

<table border="1">
    <thead>
        <tr>
            <?php
                foreach($judul_1 as $judul){
                    echo '<th>'.$judul.'</th>';
                }
            ?>

        </tr>
    </thead>
    <tbody>
            <?php
                $no = 1;
                foreach($mahasiswa as $mahasiswa_cetak){
                    echo '<tr>';
                    echo '<td>'. $no .'</td>';
                    echo '<td>'. $mahasiswa_cetak['nim'] .'</td>';
                    echo '<td>'. $mahasiswa_cetak['nama'] .'</td>';
                    echo '<td>'. $mahasiswa_cetak['nilai'] .'</td>';
                    echo '<td>' . ($mahasiswa_cetak['nilai'] >= 60 ? 'Lulus' : 'Tidak Lulus') . '</td>';
                    echo '<td>';
                    if($mahasiswa_cetak['nilai'] >= 90){
                        $predikat = 'A';
                        echo 'A';
                    } elseif ($mahasiswa_cetak['nilai'] >= 80){
                        $predikat = 'B';
                        echo 'B';
                    } elseif ($mahasiswa_cetak['nilai'] >= 70){
                        $predikat = 'C';
                        echo 'C';
                    }elseif ($mahasiswa_cetak['nilai'] >= 60){
                        $predikat = 'D';
                        echo 'D';
                    }else {
                        $predikat = 'E';
                        echo 'E';
                    }
                    echo '</td>';
                    echo '<td>';
                    switch ($predikat){
                        case 'A':
                            echo 'SANGAT BAIK';
                            break;
                        case 'B':
                            echo 'BAIK';
                            break; 
                        case 'C':
                            echo 'CUKUP';
                            break;
                        case 'D':
                            echo 'KURANG';
                            break; 
                        case 'E':
                            echo 'SANGAT KURANG';
                            break; 

                    }
                    echo '</td>';
                    echo '</tr>';
                    $no++;

                }
            ?>
    </tbody>
    <tfoot>
    <?php foreach($keterangan as $ket => $hasil){ ?>
            <tr>
                <th colspan="3"><?= $ket ?></th>
                 <th colspan="5"><?= $hasil ?></th>
            </tr>    
             <?php  } ?>
    </tfoot>
</table>


</body>
</html>