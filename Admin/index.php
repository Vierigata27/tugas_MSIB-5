<?php
    include_once 'top.php';
    include_once 'menu.php';
?>

<div>
    <div class="container-fluid px-4">
        <!-- <h1>Selamat Datang</h1> -->
    <?php
         $url = isset($_GET['url']) ? $_GET['url'] : 'dashboard';
        if($url == 'dashboard'){
            include_once 'dashboard.php';
        }else if(!empty($url)){
            include_once ''.$url.'.php'; 
        }else{
            include_once 'dashboard.php';
        }
    ?>
    </div>
</div>

<?= 
include_once 'buttom.php';
 ?>