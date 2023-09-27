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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP 3</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* font-family: 'Luckiest Guy', cursive; */
            font-family: 'Quicksand', sans-serif;
        }

        body {
            background-color: #f5e5c4;
            
            
        }

        header {
            background-color: #ebc178;
            width: 100%;
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo{
            display: flex;
            padding-right: 650px;
        }

        .logo h2 {
            font-size: 24px;
            padding-top: 40px;
            padding-left: 15px;
        }

        .logo img{
            height: 100px;
        }

        ul {
            list-style: none;
            display: flex;
        }

        li {
            margin: 0 15px;
        }

        a {
         text-decoration: none; 
         color: black; 
         transition: color 0.3s ease;
        }

        a:hover{
         color: white;
        }

        .main{
        padding: 30px;
        height: auto;
        text-align: center;
        }

        footer {
        background-color: #ebc178;
        width: 100%;
        height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        bottom: 0;
        }

        footer li{
            margin: 0 5px;
        }

        footer img{
        height: 20px;
        vertical-align: middle;
        }

        table{
            margin-left: auto;
            margin-right: auto;
        }

        th, td{
            width: 150px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="">
            <h2>Tugas PHP 3</h2>
        </div>
        <ul>
            <li><a href="">MAIN</a> </li>
            <li><a href="">PROFIL</a> </li>
            <li><a href="">PORTOFOLIO</a> </li>
        </ul>
    </header>

    <div class="main">
    <h2>Data Mahasiswa</h2>
    <br>
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
    </div>

    <footer>
        <ul>
            <li>
                <img src="instagram.png" alt="">
                <a href="https://www.instagram.com/vieri_arief_m/">Instagram @vieri_arief_m</a> 
            </li>
        </ul>
    </footer>
</body>
</html>
