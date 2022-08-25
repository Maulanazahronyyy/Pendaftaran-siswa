<?php

$server = "localhost";
$user = "root";
$pasword = "";
$nama_database = "p_s";

$db = mysqli_connect($server, $user, $pasword, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan data base: " . mysqli_connect_error());
}

?>
