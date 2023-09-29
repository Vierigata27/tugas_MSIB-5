<?php
require 'bank.php';

$n1 = new bank ('001', 'Vieri', 600000);
$n2 = new bank ('002', 'Arief', 600000);
$n3 = new bank ('003', 'Maulana', 600000);
$n4 = new bank ('004', 'Echa', 600000);
$n5 = new bank ('005', 'Ersa', 600000);


echo '<h3 aligin ="center">' .bank::BANK. '</h3>';
$n1->cetak();
$n2->cetak();
$n3->cetak();
$n4->cetak();
$n5->cetak();
?>