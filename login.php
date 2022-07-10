
  <!doctype html>
    <html lang="en">
  <head>
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
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">		
					<div class="card">
						<div class="loginBox">
							<img src="images/logo.jpeg" class="img-responsive" alt="PHP MySQL logos">
							<div class="wrapper">
	<div class="container">
							<h2>Login</h2>

							<form action="check-login.php" method="Post">                           	
								
							<div class="form-group">									
									<input type="email" class="form-control input-lg" name="email" placeholder="email" required>        
								</div>							
								<div class="form-group">        
									<input type="password" class="form-control input-lg" name="password" placeholder="password" required>       
								</div>								    
									<button type="submit" class="btn btn-success btn-block">Login</button>
							
								</form>
							<!-- Collapse a form when user click Lost your password? link-->
							<p><a href="#showForm" data-toggle="collapse" aria-expanded="false" aria-controls="collapse">Perdiste tu contraseña?</a></p>	
							<div class="collapse" id="showForm">
								<div class='well'>
									<form action="password-recovery.php" method="post">
										<div class="form-group">										
											<input type="email" class="form-control" name="email" placeholder="Enter the email associated with the password." required>
										</div>
										<button type="submit" class="btn btn-dark">Recuperar contraseña</button>
									</form>								
								</div>
							</div>
													
							<h1><p>Nuevo en Pizzas Shaddai?<a href="index.html" title="Create an account">Create una cuenta!!</a>.</p>								
						</div><!-- /.loginBox -->	
					</div><!-- /.card -->
				</div><!-- /.col -->
			</div><!--/.row-->
		</div><!-- /.container -->

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
	</body>
</html>	