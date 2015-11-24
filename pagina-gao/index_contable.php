<!DOCTYPE html >
<html>
<head>
	<title>Software Contable</title>
	<link rel="StyleSheet" href="css/style.css" type="css/text">
	<link rel="StyleSheet" href="css/graficos.css" type="css/text">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/nav.js"></script>	
	<script src="js/Chart.js"></script>	
</head>

	<body>
		<div class="container">
			<h1 style="color:black;font-family:Arial;">GAO Developers</h1>
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

			</section>


		</div>
	</body>

</html>