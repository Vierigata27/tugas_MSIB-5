<?php

function cekLogin(){
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === 'admin' && $password === 'mimin') {
            // Redirect ke halaman lain atau lakukan tindakan lain
            header('Location: Admin.php');
            exit;
        } else {
            echo "<script type='text/javascript'>";  
            echo "window.alert('Maaf, Password/Username Anda Salah')";  
            echo "</script>"; 
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    cekLogin();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP 4</title>
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

        
        .form_login {
        width: 500px; 
        margin: 0 auto; 
        padding: 20px;
        border: 1px solid #ffff; 
        }

        .form_login h2 {
        font-size: 24px; 
        margin-bottom: 20px; 
        }

        .form_login input[type="text"],
        .form_login input[type="password"] {
        width: 100%;
        padding: 10px; 
        margin-bottom: 15px; 
        border: 1px solid #ccc; 
        border-radius: 5px; 
        }

        .form_login button[type="submit"] {
        width: 100%; 
        padding: 10px; 
        background-color: #ebc178; 
        color: #fff; 
        border: none; 
        border-radius: 5px; 
        cursor: pointer; 
        }

        .form_login button[type="submit"]:hover {
        background-color: #ffff; 
        color: black; 
        }


    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="">
            <h2>Tugas PHP 4</h2>
        </div>
        <ul>
            <li><a href="">MAIN</a> </li>
            <li><a href="">PROFIL</a> </li>
            <li><a href="">PORTOFOLIO</a> </li>
        </ul>
    </header>

    <div class="main">
    

    <div class="form_login">
        <form action="" method="Post">
        <h2>Form Login</h2>
        <input type="text" name="username" id="username" placeholder="Masukan Username Anda " required>

        <input type="password" name="password" id="password" placeholder="Masukan Password Anda " required>

        <button type="submit"  name="masuk">Masuk</button>

        </form>

    </div>
       
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
