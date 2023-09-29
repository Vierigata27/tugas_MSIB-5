<?php

require 'suhu.php';
$k1 = new konversiSuhu ('Celcius','Fahrenheit',30);
$k2 = new konversiSuhu ('Celcius','Fahrenheit',100);
$k3 = new konversiSuhu ('Fahrenheit','Celcius',50);
$k4 = new konversiSuhu ('Fahrenheit','Celcius',10);
$k5 = new konversiSuhu ('Celcius','Reamur',120);
$k6 = new konversiSuhu ('Celcius','Reamur',40);
$k7 = new konversiSuhu ('Reamur','Celcius',30);
$k8 = new konversiSuhu ('Reamur','Celcius',100);
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
        height: auto;
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
            <h2>Tugas PHP 5</h2>
        </div>
        <ul>
            <li><a href="">MAIN</a> </li>
            <li><a href="">PROFIL</a> </li>
            <li><a href="">PORTOFOLIO</a> </li>
        </ul>
    </header>

    <div class="main" scroll>
    <h2>Data Konversi</h2>
    <br>
        <?php
            $k1->cetak();
            $k2->cetak();
            $k3->cetak();
            $k4->cetak();
            $k5->cetak();
            $k6->cetak();
            $k7->cetak();
            $k8->cetak();
        ?>
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
