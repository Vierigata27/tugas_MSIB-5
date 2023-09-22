<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        table{
            margin-left: auto;
            margin-right: auto;
        }

        th, td{
            width: 150px;
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

        button{
            height: 50px;
            width: 100px;
        }

        #reset{
            height: 50px;
            width: 100px;
        }

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="">
            <h2>Tugas PHP 2</h2>
        </div>
        <ul>
            <li><a href="">MAIN</a> </li>
            <li><a href="">PROFIL</a> </li>
            <li><a href="">PORTOFOLIO</a> </li>
        </ul>
    </header>

    <div class="main">
        <h2>Form Data Diri</h2>
        <form method="post">
            <table border="1">
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" placeholder="Masukan Nama anda"></td>
                </tr>
                <tr>
                    <th>Pekerjaan</th>
                    <td>
                    <select name="pekerjaan">
                    <option value="Polisi">Polisi</option>
                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                    <option value="TNI">TNI</option>
                    <option value="PNS">PNS</option>
                    <option value="Pedagang">Pedagang</option>
                    <option value="Programmer">Programmer</option>
                    <option value="Guru">Guru</option>
                    <option value="Investor">Investor</option>
                    <option value="Pilot">Pilot</option>
                    <option value="Pramugari">Pramugari</option>
                    </select>  
                    </td>
                </tr>
                <tr>
                    <th>Hobby</th>
                    <td>
                    <input type="radio" id="Menulis" name="hobby" value="Menulis">
                    <label for="Menulis">Menulis</label><br>
                    <input type="radio" id="musik" name="hobby" value="musik">
                    <label for="musik">musik</label><br>
                    <input type="radio" id="Sepakbola" name="hobby" value="Sepakbola">
                    <label for="Sepakbola">Sepakbola</label><br>
                    <input type="radio" id="basket" name="hobby" value="basket">
                    <label for="basket">basket</label><br>
                    <input type="radio" id="Ngoding" name="hobby" value="Ngoding">
                    <label for="Ngoding">Ngoding</label><br>
                    <input type="radio" id="berenang" name="hobby" value="berenang">
                    <label for="berenang">berenang</label><br>
                    <input type="radio" id="bersepeda" name="hobby" value="bersepeda">
                    <label for="bersepeda">bersepeda</label><br>
                    <input type="radio" id="memasak" name="hobby" value="memasak">
                    <label for="memasak">memasak</label><br>
                    <input type="radio" id="bulutangkis" name="hobby" value="bulutangkis">
                    <label for="bulutangkis">bulutangkis</label><br>
                    <input type="radio" id="game" name="hobby" value="game">
                    <label for="game">game</label><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" id="simpan">
                        <button type="submit" name="simpan" value="Simpan">Simpan</button>
                        <input type="reset" value="Riset" id="reset">
                    </td>
                </tr>
            </table>
        </form>

        <br>

        <?php
        $nama = $_POST["nama"];
        $pekerjaan = $_POST["pekerjaan"];
        $hobby = $_POST["hobby"];

        echo "<h2>Data yang telah disimpan:</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Nama</th>
                    <th>Pekerjaan</th>
                    <th>Hobby</th>
                </tr>
                <tr>
                    <td>$nama</td>
                    <td>$pekerjaan</td>
                    <td>$hobby</td>
                </tr>
              </table>";
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
