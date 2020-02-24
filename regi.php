<?php
include './koneksi.php';

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

$query = "INSERT INTO reg(first_name, last_name, email, username, password)
            VALUES('$first_name', '$last_name', '$email', '$username', '$password')";
$result = mysqli_query($koneksi, $query);
$num = mysqli_affected_rows($koneksi);
if($num>0){
    echo "berhasil menambah data";
}else{
    echo "gagal tambah data: ".mysqli_error($koneksi);
}


?>