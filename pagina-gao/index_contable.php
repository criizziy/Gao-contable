<!DOCTYPE html >
<html>
<head>
	<title>Software Contable</title>
	<link rel="StyleSheet" href="css/style.css" type="css/text">
	<link rel="StyleSheet" href="css/graficos.css" type="css/text">
	<link rel="StyleSheet" href="css/style-circulos.css" type="css/text">
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
			
			
			
			<img src="img/gaode1.png" width="420" height="90" style="text-align:center;"></img>

			<section class="nav-container">

				<div class="nav">
				<ul>
			        <li><a href="">Inicio</a></li>
			        <li><a href="">Contabilidad</a></li>
			        <li><a href="">Presupuesto</a></li>
			        <li><a href="">Gastos</a></li>
			        <li><a href="">Pagos</a></li>
			        <li><a href="">Provedoores</a></li>
			        <li><a href="">Inventario</a></li>
			        <li><a href="">Reportes</a></li>
			        <li><a href="">Cartera</a></li>
			        <li><a href="">Tesoreria</a></li>
			    </ul>
    				<div class="clear"></div>
				</div>	
			</section >	
			<br>
			<br>
			<br>
			<div class="gan">
				<h1>Ganancias actuales</h1>
				<p>$1.200.234</p>

			</div>

			<div class="gas">

			</div>
			<br>

			
			
			<div class="soporte">
				
				<ul>  

					
					<li><a href="logear.php"><img src="img/servicio_tecnico.png" width="38px" heigth="38px;"></a></li>      

				</ul>

			</div>
			<br>
			<br>
			<br>
			<br>
			
			
			
			
			

			<section class="estadisticas">

				<?php include 'graficoPieVentas.php';   ?>

				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>

				<?php include 'graficoGastos.php';   ?>

				<?php include 'graficoGanancias.php';   ?>


			</section>

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
							<li><a href="">Log out</a></li>
							
							
						</ul>


					</div>

				</div>

			</section>


		</div>
	</body>

</html>