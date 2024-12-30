<?php

$servername = "localhoat";
$username = "root";
$password = "";
$namadb = "lembaga_akreditasi";

$conn = mysqli_connect($servername, $username, $password, $namadb);


if ($conn->connect_error) {
    die("error!");
}else{
}


?>