<!DOCTYPE html >
<html>
<?php
		session_start();
		if(!isset($_SESSION['userid'] )){
			header("location:login.php");
		} else 
		{
	
	?>
<head>
	<title>Software Contable</title>
	<link rel="StyleSheet" href="css/style.css" type="css/text">
	<link rel="StyleSheet" href="css/graficos.css" type="css/text">
	<link rel="StyleSheet" href="css/style-circulos.css" type="css/text">
	<link rel="StyleSheet" href="css/style-circulos2.css" type="css/text">
	<link rel="StyleSheet" href="css/footer.css" type="css/text">
	<link rel="StyleSheet" href="css/redes.css" type="css/text">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/nav.js"></script>	
	<script src="js/Chart.js"></script>	
	<script src="js/scriptgrafi.js"></script>
	
</head>

	<body>
				

				<div class="container" >
			
			
			
			<img src="img/gaode1.png" width="420" height="90"></img>

			<section class="nav-container">

				<div class="nav">
				<ul>
			         <li><a href="index_contable.php">Inicio</a></li>
			        <li><a href="contabilidad.php">Contabilidad</a></li>
			        <li><a href="presupuesto.php">Presupuesto</a></li>
			        <li><a href="gastos.php">Gastos</a></li>
			        <li><a href="pagos.php">Pagos</a></li>
			        <li><a href="proveedores.php">Proveedores</a></li>
			        <li><a href="invetario.php">Inventario</a></li>
			        <li><a href="reportes.php">Reportes</a></li>
			        <li><a href="cartera.php">Cartera</a></li>
			        <li><a href="tesoreria.php">Tesoreria</a></li>			    </ul>
    				<div class="clear"></div>
				</div>	
			</section >	
			<br>
			<br>
			<br>
			<br>

			
			
			<div class="soporte">
				
				<ul>  

					
					<li><a href="sdf"><img src="img/servicio_tecnico.png" width="38px" heigth="38px;"></a></li>      

				</ul>

			</div>
		
						<div class="container">
				<h1 style="text-align: center;font-family: arial;color:#e73715;">Agregar proveedor</h1>
				<br>
				<br>
				<br>
				
				<form class="form-prove" method="post" style="width: 100%;height:250px">
					<div style="width: 50%;height: auto; float:left;text-align: center;">
						
							<label>Nombre</label>
							<br>
							<input >
							<br>
							<br>
							<label>Apellido</label>
							<br>
							<input>
							<br>
							<br>
							<label>Tipo servicio</label>
							<br>
							<input>
							
						
					</div>

					<div style="width: 50%; height: auto;float:right;text-align: center;">
						
							<label>Direccion</label>
							<br>
							<input>
							<br>
							<br>
							<label>Telefono</label>
							<br>
							<input>
							<br>
							<br>
							<label>email</label>
							<br>
							<input>
						
					</div>
					<br>


					<button>Guardar</button>

				</form>
				<br>
				<br>
				<br>


			</div>
			
			
			
			

			

			<section class="footer">
			
				<img class="subir" src="flecha.png" width="70px" heigth="70px;">
				
				<div class="redes">

					
					<br>
					<p class="pf"> Gao Developers </p>
					<div class='social_bookmarks_container'>
						<ul class='social_bookmarks'>
						
						<li class='iconrss'>
						<a href='/atom.xml'>
						RSS
						</a>
						</li>
						<li class='iconrssmail'>
						<a href='http://feedburner.google.com/fb/a/mailverify?uri=NombreDelFeed'>
						RSS Mail
						</a>
						</li>
						<li class='icontwitter'>
						<a href='http://twitter.com/usuario'>
						Twitter
						</a>
						</li>
						<li class='iconfacebook'>
						<a href='http://facebook.com/usuario'>
						Facebook
						</a>
						</li>
						<li class='icongplus'>
						<a href='http://plus.google.com/+usuario/about'>
						Google Plus
						</a>
						</li>
						</ul>
						</div>
		  
				</div>

				<div class="info">

					
					<div class ="list">
						<ul class="list1">
							<li><a href="">Empresa</a></li>
							<li><a href="">Sucursales</a></li>
							<li><a href="">Reportes</a></li>
							<li><a href="">Proveedores</a></li>
							<li><a href="">Empresa</a></li>
							<li><a href="">Clientes</a></li>
							
						</ul>

						<ul class="list2">
							<li><a href="">Facturas</a></li>
							<li><a href="">Ventas</a></li>
							<li><a href="">Inventario</a></li>
							<li><a href="">Cuentas por cobrar</a></li>
							<li><a href="">Cuentas por pagar</a></li>
						</ul>

					</div>

					<div class ="sopor">
						<ul >
							<li><a href="">Soporte</a></li>
							<li><a href="">Ayuda</a></li>
							<li><a href="logout.php">Log out</a></li>
							
							
						</ul>


					</div>

				</div>

			</section>


		</div>
	</body>
<?php 
  }
?>
</html>