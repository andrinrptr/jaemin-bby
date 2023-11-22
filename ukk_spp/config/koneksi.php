<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'spp';

$koneksi = mysqli_connect($server,$user,$pass,$db);

if(!$koneksi){
    echo 'koneksi gagal';
    
}