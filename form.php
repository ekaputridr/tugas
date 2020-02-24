<!DOCTYPE html>
<?php
session_start();

if(isset($_SESSION['username'])){
	header("location: menu.php");
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
</head>
<style>
    body{
	font-family: sans-serif;
	background-image: url("14.gif");
}
 
h1{
	text-align: center;
	font-weight: 300;
}
 
.tulisan_login{
	text-align: center;
	text-transform: uppercase;
}
 
.kotak_login{
	width: 350px;
	background: white;
	margin: 80px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 11pt;
}
 
.form_login{
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 10pt;
	margin-bottom: 10px;
}
 
.tombol_login{
	background: #808000;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
 
.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}
</style>
<body>

<?php

if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "gagal"){
		echo "login gagal! username atau password salah";
	}else if($_GET['pesan'] == "login"){
		echo "anda telah berhasil login";
	}
}
?>
<br>
    
	<div class="kotak_login">
		<p class="tulisan_login">log in</p>
 
		<form action="halaman.php" method="POST">
		<table>
			<tr>
				<div class="wrap-input2 validate-input" data-validate="Name is required">
				<td><label>Username</label></td>
            	<td><input type="text" name="username" class="form_login" placeholder="username"></td>
			</tr></div>

			<tr>
				<td><label>Password</label></td>
            	<td><input type="password" name="password" class="form_login" placeholder="password"></td>
			</tr>

			<tr>
				<td><input type="submit" class="tombol_login" value="LOG IN"></td>
			</tr>

		</table>
		</form>
	</div>
    
</body>
</html>