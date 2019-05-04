



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name = "viewport" content="width=device-width.initial-sacle=1.0">

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="../css/animate.css">

	<style>


		
		.fondo{

			margin: 0 auto;
	color: white;
	width: 50%;
	background-image: url(../img/admin_fondo.png);
	background-repeat: no-repeat;

		}


		.login{
	opacity: 0.6;
	padding: 40px;
	margin-left: -59px;
	margin-top: 20px;
	width: 800px;
	color: gray;
}

.login:hover{
	opacity: 0.9;
	background-color: white;
	padding: 40px;
	margin-left: -59px;
	margin-top: 20px;
	width: 800px;
	color: #fc8001;
}


.logo{
		

		margin: 0 auto;
		width: 200px;
    	height: 80px;
		background-image: url(../img/logo_pequeño.png);
		z-index: 3;
	}

.enviar{

		height: 40px;
		width: 140px;
	background: #faa854 !important;
	}


	.enviar:hover{
		box-shadow: 1px 0px 25px #998F8A;
		height: 40px;
		width: 140px;
	
	}


	.btnaDMIN{

		height: 40px;
		width: 140px;
	background: #faa854 !important;
	float: right;
	margin-top: 20px !important;
	}


	.btnaDMIN:hover{
		box-shadow: 1px 0px 25px #998F8A;
		height: 40px;
		width: 140px;
	
	}

	</style>
</head>
<body class="fondo" >


	<div class="ContenedorLogo">
		<a href="../../index.php" class="btn btnaDMIN animated slideInRight delay-0s">
			Volver
		</a>
		<div class=" logo animated slideInDown delay-0s"></div>

	</div>



	
	<div class="jumbotron login animated zoomIn delay-0s " >
		<h2>Regístrate</h2>
		<hr>




		<form action="../php2/registro.php" method="post">

	  <div class="form-group">
	    <label for="exampleInputEmail1">Nombre:</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="nombre" required="">
	    
	  </div>


	  <div class="form-group">
    <label for="exampleFormControlTextarea1" class="titulo">Correo: </label>
    <input type="email" name="correo" class="form-control" id="exampleFormControlTextarea1" required="">
  </div>

  	<br>
	<button type="submit" class="btn enviar">Enviar </button>

	</form>
	
	
			<?php
			
  			if (isset($_GET["registrado"])){
			echo "<br>" . "<div style='background-color:rgba(252,112,0,0.8);' ' class='btn  w-100'>!!Registro exitoso!! </div>";
		}
		?>

		
	


	</div>

		





<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>


</body>
</html>
