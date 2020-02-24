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
    <title>registrasi</title>
</head>
<style>
    body{
	font-family: sans-serif;
	background-image: url("13.gif");
}
 
h1{
	text-align: center;
	font-weight: 300;
}
 
.tulisan_reg{
	text-align: center;
	text-transform: uppercase;
}
 
.kotak_reg{
	width: 350px;
	background: white;
	margin: 80px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 11pt;
}
 
.form_reg{
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 10pt;
	margin-bottom: 10px;
}
 
.tombol_reg{
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

<br>
    
	<div class="kotak_reg">
		<p class="tulisan_reg">REGISTRASI</p>
 
		<form action="regi.php" method="POST">
		<table>
			<tr>
				<td><label>First Name</label></td>
            	<td><input type="text" name="first_name" class="form_reg" placeholder="first name"></td>
			</tr>

			<tr>
				<td><label>Last Name</label></td>
            	<td><input type="text" name="last_name" class="form_reg" placeholder="last name"></td>
			</tr>

			<tr>
				<td><label>E-Mail</label></td>
            	<td><input type="text" name="email" class="form_reg" placeholder="email"></td>
			</tr>

            <tr>
				<td><label>Username</label></td>
            	<td><input type="text" name="username" class="form_reg" placeholder="username"></td>
			</tr>

			<tr>
				<td><label>Password</label></td>
            	<td><input type="password" name="password" class="form_reg" placeholder="password"></td>
			</tr>

			<tr>
				<td><input type="submit" class="tombol_reg" value="REGIST"></td>
			</tr>

		</table>
		</form>
	</div>
    
</body>
</html>