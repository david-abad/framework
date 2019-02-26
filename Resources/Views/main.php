<html lang="es">
    
</style>
	<head>
                <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Registro de fichas">
        <meta name="author" content="David Abad Aguilar">
		<meta charset="utf-8">
		<title>Principal</title>
        <link href="navbar-top-fixed.css" rel="stylesheet">
		<link href="dist/css/bootstrap.min.css" rel="stylesheet">
       
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
		
		<style>
			body {
			padding-top: 0px;
			padding-bottom: 0px;
			}
		</style> 
            
	</head>
	
	<body>
        
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">Inicio</a>
            <a class="navbar-brand" href="">Registrar</a> 
      <div class="collapse navbar-collapse" id="navbarCollapse">
      </div>
    </nav>
        
		<div class="container">		
					<form class="form-signin" name="form1" id="form1" method="post" action="login.php" enctype="multipart/form-data">

                        
                        <br>
                        <br>
                                         
					<center>	<div class="form-group">
                                 <img class="mb-4" src="123.png" alt="" width="240" height="220"> 
                            
                            	<h4 class="h3 mb-3">Iniciar Sesión</h4>  
                             
                        
                        
                           <div class="col-sm-2">
								<input type="text" class="form-control" placeholder="Usuario"  name="nombre" maxlength="20"  required=""  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"> 
                            
                
                            
                        </div> 
                        
                        <br>
                            
                  
                        
                        <div class="col-sm-2">
								<input type="text" class="form-control" placeholder="Contraseña"  name="contraseña" maxlength="4" required="" oninput="maxLengthCheck(this)" pattern="[0-9]{1}"> 
                            
                        </div> 
                           
							<br>
                        <center>  <button type="submit" class=" btn btn-lg btn-secondary">Ingresar</button>
                                    
                                    
                         </center>      
                           
                           
                        <br> 
                       
                        <a href="registro_aspirantes.html" class=" btn btn-lg btn-secondary">Registrar</a>
                        
						</div>
                        </center>
					</form>
		</div>
	</body>
</html>
