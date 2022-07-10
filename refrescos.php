<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';

?>
<head>
        <title>Shaddai</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/styles.css">
    </head>
<body>
</html>
<br>
<br>
<br>
     <?php if($mensaje!=""){?>
     <div class="alert alert-success" role="alert">
     <?php echo $mensaje; ?>
        
        <a href="mostrarCarrito.php" class="badge badge-success">Ver carrito</a>
    </div>
     <?php } ?>
 
    <div class="row">
     <?php
     $sentencia=$pdo->prepare("SELECT * FROM refrescos");
     $sentencia->execute();
     $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
     //print_r($listaProductos);
    
     
     ?>

<?php foreach($listaProductos as $producto){ ?>
    <div class="col-xs-3 col-md-3">
         <div class="card">
             <img 
             title="<?php echo $producto['nombre'];?>"
             alt="<?php echo $producto['nombre'];?>"
             class="card-img-top" 
             src="<?php echo $producto['imagen'];?>"
             data-toggle="popover"
             data-trigger="hover"
             data-content="<?php echo $producto['descripcion'];?>"
            height="317px"

             >
             <div class="card-body">
                 <span> <?php echo $producto['nombre'];?></span>
                 
                 <h5 class="card-title">$<?php echo $producto['precio'];?></h5>
                 
                
                 
                

                <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'],COD,KEY);?>">
                    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['nombre'],COD,KEY);?>">
                    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['precio'],COD,KEY);?>">
                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">
                    

        
                 
            <button class="btn btn-primary" 
                name="btnAccion" 
                value="Agregar"
                type="submit">
                Agregar al carrito
                                     </button>
                
                 
             </div>
         </div>
        </div>

<?php }?>

</div>

    </div>
<script> 

$(function () {
  $('[data-toggle="popover"]').popover()
})

</script>

<?php include 'templates/pie.php'; ?>
