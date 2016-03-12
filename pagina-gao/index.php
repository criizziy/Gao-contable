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
				
   <div class="log"> 

   		<a href="login.php"><img style="float:right;margin-right:50%;margin-top:5px;" src="img/tienda/log.png" alt="40px" width="40px"></img></a>

   </div>
			<div class="container-main" >
			
			
					<section class="menu" >

						
						
						<div class="izquierda">
						
						 	<p class="nombre">GAO</p>
						
						</div>
						
						<div class="derecha">

							<div class="nav-container">

							<div id='cssmenu'>
								<ul>
								   <li><a href='#'><span>Home</span></a></li>
								   <li class='active has-sub'><a href='#'><span>Products</span></a>
								      <ul>
								         <li class='has-sub'><a href='#'><span>Product 1</span></a>
								            <ul>
								               <li><a href='#'><span>Sub Product</span></a></li>
								               <li class='last'><a href='#'><span>Sub Product</span></a></li>
								            </ul>
								         </li>
								         <li class='has-sub'><a href='#'><span>Product 2</span></a>
								            <ul>
								               <li><a href='#'><span>Sub Product</span></a></li>
								               <li class='last'><a href='#'><span>Sub Product</span></a></li>
								            </ul>
								         </li>
								      </ul>
								   </li>
								   <li><a href='#'><span>About</span></a></li>
								   <li class='last'><a href='#'><span>Contact</span></a></li>
								</ul>
							</div>
							</div>
						</div>

						
					</section>
					
					<div class="sli">
						<br>
						<br>
						<?php include 'slide.php'; ?>
						<br>
						<br>
					</div>

					
					<section class="body">
						<div class="dere">
							<br>
							
							<img style="float:right;margin-right:5%;" src="img/instan.png" width="400" height="200"></img>
							<img style="margin-left:10%;" src="img/compras.png" width="500" height="300"></img>
						</div>
						<div class="izqui">
							<img style="margin-right:10%;float:right;" src="img/produ.png" width="500" height="300"></img>
							<img style="float:left;margin-right:5%;" src="img/dispo.png" width="400" height="200"></img>

						</div>

					</section>

					<div class="inf">
						<img style="margin-left:40%;" src="img/carrito.png" width="300" height="250"></img>
					</div>

					<section class="footer">
					
				    </section>


			</div>
	
	</body>

</html>