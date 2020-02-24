<!DOCTYPE html>
<?php

session_start();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>
<style>
    * {
        margin:0; 
        padding:0;
    }

    nav {
        margin:auto;
        text-align: center;
        width: 100%;
        font-family: arial;
    } 

    nav ul {
        background:	#556B2F;
        padding: 0 20px;
        list-style: none;
        position: relative;
        display: inline-table;
        width: 100%;
    }

    nav ul li{
        float:left;
    }

    nav ul li:hover{
        background:#9ACD32;
    }

    nav ul li:hover a{
        color:#000;
    }

    nav ul li a{
        display: block;
        padding: 25px;
        color: #fff;
        text-decoration: none;
    }

    button{
     position:  right;
     background-color: red;
     padding: 10px;
    }

</style>
<body>
    <br>
        <div style="align: justify;">
        <img height="120" src="awan.png" style="float: left; margin: 0px 9px 3px 0px;" width="140"/>
        </div>
        <img src="macflari.png" height="55" weight="60"><br>
        <font face="arial" color=#CFCD94><i><b>restaurant that you need</b></i></font>
            
    <nav>
        <ul>
            <li><a href="halaman.php?page=home">Home</a></li>
            <li><a href="halaman.php?page=menu">Menu</a></li>
            <li><a href="halaman.php?page=contact">Contact Us</a></li>
        </ul>
    </nav>
    
    <?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page){
			case 'home':
				include "page/home.php";
				break;
			case 'menu':
				include "page/menu.php";
				break;
			case 'contact':
				include "page/contact.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "page/home.php";
	}
 
	 ?>

</body>
</html>