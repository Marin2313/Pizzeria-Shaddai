<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

    
<link rel="stylesheet" href="css/custom.css">
		<script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>	

    
    

    <!-- Bootstrap CSS -->
	
  </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <img src="images/logo.jpeg" width="75" height="53"/>    
    <a class="navbar-brand" href="index.php">Shaddai</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="header">
        <ul class="nav nav-pills pull-right">
        
        
        <li></li>
        <li></li>
                 
    </li>
                <li class="nav-item active">
                    <a class="nav-link " href="mostrarCarrito.php">Carrito(<?php
                    echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    ?>)<img src="images/carrito.png" > </a>
                    
                </li>
                
                    <li class="nav-item active ">
                    <a class="nav-link"  href="login.php">Login
                    <img src="images/login.png" > 
                    </a> 

                    </li>
                
                    <li class="nav-item active ">
                    <a class="nav-link"  href="refrescos.php">Refrescos
                    <img src="images/login.png" > 
                    </a> 

                   

                    


            </ul>
        </div>
    </nav>
    <br/>
    <br/>
    <div class="container">