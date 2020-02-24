<?php
$koneksi = mysqli_connect("localhost", "root", "", "resto");

if(! $koneksi){
    echo "koneksi database gagal : " . mysqli_connect_error();
}
?>