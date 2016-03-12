<!DOCTYPE html >
<html>
<head>
	<title>Virtual shop</title>
	<link rel="stylesheet" href="css/tienda/styles.css">
	<link rel="stylesheet" href="css/tienda/nombre.css">
	<link rel="stylesheet" href="style.css">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/tienda/script.js"></script>
	<script src="js/tienda/slider-flex.js"></script>
	<script src="adsRotator.js"></script>
	<script src="js/tienda/nav.js"></script>
	
</head>

	<body>
				
   
			<div class="container-log" >

				<div class="form-log">

				<?php

				
					session_start(); 
			include ('conexion.class.php');

				
				function verificar_login($Usuario,$Password,&$result)
			    {
					//Creamos la instancia que nos conecta y listo conectados 
					$db=Mysql::getInstance(); 
			        

					$sql = "SELECT * FROM usuarios WHERE nombre='$Usuario' AND password='$Password'";

			        
					/* Ejecutamos la query */
					$result=$db->ejecutar($sql);
					
			        $count = 0;
					
			        while($variables =$db->resultados($result))
			        {
			            $count++;
			            $result = $variables;
			        }
			        if($count == 1)
			        {
			            return 1;
			        }
			        else
			        {
			            return 0;
			        }
			    }


			/*Luego haremos una serie de condicionales que identificaran el momento en el boton de login es presionado y cuando este sea presionado llamaremos a la función verificar_login() pasandole los parámetros ingresados:*/
			if(!isset($_SESSION['userid'])) //para saber si existe o no ya la variable de sesión que se va a crear cuando el usuario se logee
			{    if(isset($_POST['login'])) //Si la primera condición no pasa, haremos otra preguntando si el boton de login fue presionado
			    {   if(verificar_login($_POST['user'],$_POST['clave'],$result) == 1) //Si el boton fue presionado llamamos a la función verificar_login() dentro de otra condición preguntando si resulta verdadero y le pasamos los valores ingresados como parámetros.
			        {
			            /*Si el login fue correcto, registramos la variable de sesión y al mismo tiempo refrescamos la pagina index.php.*/
			             $_SESSION['userid'] = "1030671526";
			            header("location:index_contable.php");
			        }
			        else
			        {
			            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>'; //Si la función verificar_login() no pasa, que se muestre un mensaje de error.
			        }
			    }
			?>
							  

					<form  method="POST" >

						<label> Usuario </label>
						<br>
						<input type="text" name="user">
						<br>
						<br>
						<label> Clave </label>
						
						<br>
						<input type="password" name="clave" >
						<br>
						<br>
						<button class="login" type="submit" name="login">Iniciar</button>
						

						  <?php

				} else {

				    // Si la variable de sesión ‘userid’ ya existe, que muestre el mensaje de saludo.

				    echo 'Su usuario ingreso correctamente.';

				    echo '<a href="logout.php">Logout</a>';

				}

				?>

					</form>
				
						
				</div>
			</div>
	
	</body>

</html>