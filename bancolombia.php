<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="estilos1.css">
</head>
<body>

<div class="container" style="background-color: rgba(120, 120, 120, 0.25); height: 100%; width: 100%;"> 
	<div class="row justify-content-center">
		<div class=" col-4">
		<form class="mt-5" action="bancolombia.php" method="POST">

			<div><img src="img/logo-bancolombia.png" style="width: 400px;"></div>
			  <div class="row">
			    <div class="col">		    	

                <div class="cards" >
                    <div class="card">
                     <p style="justify-content: space-around;">usuario 1
			      <input type="text" class="form-control" placeholder="Nombre" name="nombre1">
			      <input type="text" class="form-control" placeholder="Telefono" name="telefono1">
			      <input type="text" class="form-control" placeholder="Direccion" name="direccion1">
			      <input type="text" class="form-control" placeholder="Salario" name="salario1"></p>   
                    </div>

                    <div class="card">
                     <p style="justify-content: space-around;">usuario 2
			      <input type="text" class="form-control" placeholder="Nombre" name="nombre2">
			      <input type="text" class="form-control" placeholder="Telefono" name="telefono2">
			      <input type="text" class="form-control" placeholder="Direccion" name="direccion2">
			      <input type="text" class="form-control" placeholder="Salario" name="salario2"></p>   
                    </div>

                    <div class="card">
                      <p style="justify-content: space-around;">usuario 3
			      <input type="text" class="form-control" placeholder="Nombre" name="nombre3">
			      <input type="text" class="form-control" placeholder="Telefono" name="telefono3">
			      <input type="text" class="form-control" placeholder="Direccion" name="direccion3">
			      <input type="text" class="form-control" placeholder="Salario" name="salario3"></p>  


                    </div>

                    <div class="card">
                      <p style="justify-content: space-around;">usuario 4
			      <input type="text" class="form-control" placeholder="Nombre" name="nombre4">
			      <input type="text" class="form-control" placeholder="Telefono" name="telefono4">
			      <input type="text" class="form-control" placeholder="Direccion" name="direccion4">
			      <input type="text" class="form-control" placeholder="Salario" name="salario4"></p>       
                    </div>

                    <div class="card">
                      <p style="justify-content: space-around;">usuario 5
			      <input type="text" class="form-control" placeholder="Nombre" name="nombre5">
			      <input type="text" class="form-control" placeholder="Telefono" name="telefono5">
			      <input type="text" class="form-control" placeholder="Direccion" name="direccion5">
			      <input type="text" class="form-control" placeholder="Salario" name="salario5"></p>                       
                    </div>

                    
                </div>

                <button type="submit" class="btn btn-primary mt-5" name="calculo1" style="position: center;">calcular</button>

                <div class="card1">
<?php

if (isset($_POST["calculo1"])) {

 $sumatoriaSalarios; 
 $mayorIngreso;


$nombre1=$_POST["nombre1"];
$nombre2=$_POST["nombre2"];
$nombre3=$_POST["nombre3"];
$nombre4=$_POST["nombre4"];
$nombre5=$_POST["nombre5"];

$telefono1=$_POST["telefono1"];
$telefono2=$_POST["telefono2"];
$telefono3=$_POST["telefono3"];
$telefono4=$_POST["telefono4"];
$telefono5=$_POST["telefono5"];

$direccion1=$_POST["direccion1"];
$direccion2=$_POST["direccion2"];
$direccion3=$_POST["direccion3"];
$direccion4=$_POST["direccion4"];
$direccion5=$_POST["direccion5"];

$salario1=$_POST["salario1"];
$salario2=$_POST["salario2"];
$salario3=$_POST["salario3"];
$salario4=$_POST["salario4"];
$salario5=$_POST["salario5"];

$sumatoriaA=$salario1+$salario2+$salario3+$salario4+$salario5;
$sumatoriaB=20000000;
$sumatoriaC=15000000;


echo ("<br>Los usuarios registrados en la sucursal A son: ");
echo("<br>");
echo ("<br>".$nombre1." - ".$telefono1." - ".$direccion1." - $".$salario1);
echo ("<br>".$nombre2." - ".$telefono2." - ".$direccion2." - $".$salario2);
echo ("<br>".$nombre3." - ".$telefono3." - ".$direccion3." - $".$salario3);
echo ("<br>".$nombre4." - ".$telefono4." - ".$direccion4." - $".$salario4);
echo ("<br>".$nombre5." - ".$telefono5." - ".$direccion5." - $".$salario5."<br>");

if($sumatoriaA>$sumatoriaB && $sumatoriaA>$sumatoriaC){
    $mayorIngreso="El mayor ingreso lo tiene la sucursal A";
}else if($sumatoriaB>$sumatoriaA && $sumatoriaB>$sumatoriaC){
    $mayorIngreso="El mayor ingreso lo tiene la sucursal B";
}else if($sumatoriaC>$sumatoriaA && $sumatoriaC>$sumatoriaB){
    $mayorIngreso="El mayor ingreso lo tiene la sucursal C";
}

echo ("<br>".$mayorIngreso);

}

?>
</div>		    
			    </div>
			  </div>
              </div>
		</form>
	</div>
</div>
</div>
</body>
</html>


