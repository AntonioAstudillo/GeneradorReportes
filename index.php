<!doctype html>
<html lang="en">
  <head>
  	<title>Generador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container-fluid px-md-5">
			<div class="row justify-content-between">
				<div class="col-md-8 order-md-last">
					<div class="row">
						<div class="col-md-6 text-center">
							<a class="navbar-brand" href="index.html">FPDF<span>Generador de reportes</span></a>
						</div>
						<div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
							<form action="#" class="searchform order-lg-last">
			          <div class="form-group d-flex">

			          </div>
			        </form>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="social-media">
   		    		<p class="mb-0 d-flex">
   		    			<a target="_blank" href="https://www.facebook.com/jesus.antonio.77312/" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
   		    			<a target="_blank" href="https://github.com/AntonioAstudillo" class="d-flex align-items-center justify-content-center"><span class="fa fa-github"><i class="sr-only">GitHub</i></span></a>
   		    			<a target="_blank" href="https://www.youtube.com/watch?v=xFOCY21EW1g" class="d-flex align-items-center justify-content-center"><span class="fa fa-youtube"><i class="sr-only">Youtube</i></span></a>
   		    		</p>
	            </div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   	   <div class="container-fluid">
   	      <div class="collapse navbar-collapse" id="ftco-nav">
   	         <ul class="navbar-nav m-auto">
   	           <li class="nav-item active"><a href="#" class="nav-link"></a></li>
   	         </ul>
   	      </div>
   	   </div>
	  </nav>
	</section>

   <section>
      <div class="container">
         <form action="generar.php" autocomplete="off" method="post">
            <div class="row">
               <div class="col-4">
                  <label for="nombre">Nombre</label>
                  <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Ingrese su nombre">
               </div>

               <div class="col-4">
                  <label for="apellidoP">Apellido Paterno</label>
                  <input id="apellidoP" name="apellidoP" type="text" class="form-control" placeholder="Ingrese su apellido paterno">
               </div>

               <div class="col-4">
                  <label for="apellidoM">Apellido Materno</label>
                  <input id="apellidoM" name="apellidoM" type="text" class="form-control" placeholder="Ingrese su apellido materno">
               </div>
            </div>

            <div class="row mt-4">
               <div class="col-6">
                  <label for="empresas">Empresas</label>
                  <select class="form-control" name="empresas">
                     <option disabled value="0" class="form-control">Elige una empresa</option>
                     <option class = "form-control" value="1">Banein</option>
                     <option class = "form-control" value="2">Chorizos DM Toluca</option>
                     <option class = "form-control" value="3">F??nix Farms</option>
                     <option class = "form-control" value="4">Gracia Bolsos</option>
                     <option class = "form-control" value="5">Abeja Reyna</option>
                  </select>
               </div>

               <div class="col-6">
                  <label for="fechaN">Fecha de Alta</label>
                  <input id="fechaN" name="fechaA" type="date" class="form-control">
               </div>
            </div>

            <div class="row mt-3">
               <div class="col-12">
                  <input type="submit" value="Generar reporte" class="btn btn-dark font-weight-bold" >
               </div>
            </div>
         </form>

      </div>
   </section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
