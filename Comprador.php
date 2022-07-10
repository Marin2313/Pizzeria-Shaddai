<?php
    include_once 'database.php';
    ?>
    <?php
    session_start();
    if(!isset($_SESSION['Rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['Rol'] != 1){
            header('location: login.php');
        }
    }
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<div class='alert alert-success mt-4' role='alert'><strong>Welcome!</strong> $row[Name]			
        <p><a href='index.php'>Pagina Principal</a></p>	
        <p><a href='nuevo.php'>Vender</a></p>	
        <p><a href='edit-profile.php'>Editar perfil</a></p>
        <p><a href='logout.php'>Cerrar sesion</a></p></div>	
    
    
        
    </form>
</body>
</html>

