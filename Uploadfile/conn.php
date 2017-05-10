<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ulpoadfile';

$conn = mysql_connect($host,$user,$pass,$db)or die(mysql_error("gagal koneksi"));
?>