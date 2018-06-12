<?php
$ime_servera="localhost";
$kor_ime="root";
$lozinka="";
$ime_baze="david";
$dbc=mysqli_connect($ime_servera,$kor_ime,$lozinka,$ime_baze) OR die('error: ' .mysqli_connect_error());
mysqli_set_charset($dbc, 'utf-8');
?>