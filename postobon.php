<!DOCTYPE html>
<html>
<head>
	<title></title>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>

<div class="container" style="background-color: rgba(120, 120, 120, 0.25); height: 620px;"> 
	<div class="row justify-content-center">
		<div class=" col-4">
		<form class="mt-5" action="postobon.php" method="POST">

			<div><img src="img/postobon.png" style="width: 320px;"></div>
			  <div class="row">
			    <div class="col">
			      <input type="text" class="form-control" placeholder="Cantidad de horas" name="horastrbajadas">

			      <button type="submit" class="btn btn-primary mt-5" name="calculo1" style="position: center;">calcular</button>
			    </div>

			  </div>

			  <input type="text" class="form-control" placeholder="" name="resultado" style="height: 1px;">
                        </div>

<?php

if (isset($_POST["calculo1"])) {


$horasTrabajadas = $_POST["horastrbajadas"];

$salario = 0;
$valorHora = 0;

if ($horasTrabajadas <= 40 ) {
	$valorHora = 20000;
}else {
	$valorHora = 25000;
}

$salario = $horasTrabajadas * $valorHora;

echo ("su salario mensual es de: " . $salario);

}

?>

		</form>
		</div>
	</div>
</div>
</body>
</html>


