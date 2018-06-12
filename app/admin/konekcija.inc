<?php
$ime_servera="mysql.hostinger.hr";
$kor_ime="u351655433_david";
$lozinka="davidict";
$ime_baze="u351655433_david";
$dbc=mysqli_connect($ime_servera,$kor_ime,$lozinka,$ime_baze) OR die('error: ' .mysqli_connect_error());
mysqli_set_charset($dbc, 'utf-8');
?>