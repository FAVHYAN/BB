
<!DOCTYPE html>
<html>
<div class="container">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

<head>
	<title>Prueba BackBone</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/coming-soon.min.css" rel="stylesheet">
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"  crossorigin="anonymous">
</head>



  <body>
    <div class="overlay"></div>

    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
    <h5 class="mb-3">	El siguiente producto contiene un calculo  generado desde los campos a continuación:</h5>
              <div class="form-group">
			           <label>Ingresar el valor resultante de la operación: </label>
                  <div class="input-group-append">
			             <input type="number" name="resultado" id="resultado" placeholder="resultado">
                </div>
               </div> 
              <div class="form-group">		
			          <label>Ingresar la cantidad con la cual debe ser calculada la operación</label>
                  <div class="input-group-append ">
		            	 <input type="number" name="cantidadMatriz" id="cantidadMatriz" placeholder="cantidad">
                </div> 
              </div>
              <div class="form-group">
			         <input type="submit" onclick="getWays()" class="btn btn-primary" value="Enviar">
                 <span id="div1" style="color:#ffffff"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</body>
	</div>
<footer>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/coming-soon.min.js"></script>
	<script src="node_modules/jquery/dist/jquery.js"></script>
	<script src="node_modules/jquery/dist/calculo.js"></script>
</footer>
</html>