<!doctype html>
<?php 
//starting the session
session_start();
?>
<html lang="pt-br">
    <head>
        <title> Login </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <meta name="author" content="Martin">
        <meta name="description" content="site de filmes">
        <meta name="keywords" content="html5, tecnologia, css, javasscript, php, filmes">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		  <!-- icons -->
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="style/normalize.css">
        <link rel="stylesheet" href="style/main.css">
      
    </head>
    <body class="no-js">
        
        <header class="header">
          <a href="index.html" class="logo-text"><i class="fa-solid fa-house-user"></i></a>
          
          <button style="display: none;" class="header__btnMenu"> <i class="fas fa-bars fa-2x"></i> <span class="sr-only">Menu</span></button>
          
        </header>
        
        <section class="hero" style="background-image: none;">
          
            <h3 class="hero__title-login">Login</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<!-- Link for redirecting page to Registration page -->
		<a href="register.php">Não tem conta ainda? Cadrastar-se aqui...</a>
		<br style="clear:both;"/><br />
		<div class="col-md-3"></div>
		<div class="col-md-6">

            <!-- Login Form Starts -->
			<form method="POST" action="login_query.php">	
				<div class="alert custom_alert-dark">Login</div>
				<div class="form-group">
					<label for="username">Usuário</label>
					<input type="text" name="username" class="form-control" required="required"/>
				</div>
				<div class="form-margin"></div>
				<div class="form-group">
					<label for="password">Senha</label>
					<input type="password" name="password" class="form-control" required="required"/>
				</div>
				<?php
					//checking if the session 'error' is set. Erro session is the message if the 'Username' and 'Password' is not valid.
					if(ISSET($_SESSION['error'])){
				?>
				<!-- Display Login Error message -->
					<div class="alert alert-danger"><?php echo $_SESSION['error']?></div>
				<?php
					//Unsetting the 'error' session after displaying the message. 
					unset($_SESSION['error']);
					}
				?>
				<div class="form-margin"></div>
				<button class="btn btn-primary custom_button-red" name="login"><span class="glyphicon glyphicon-log-in"></span> Login</button>
			</form>	
			<!-- Login Form Ends -->
                            
        </section>

    </body>
</html>
