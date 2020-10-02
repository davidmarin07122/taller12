<!DOCTYPE html>
<html>
<head>
	<title>BODY TECH</title>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>

<div class="container" style="background-color: rgba(120, 120, 120, 0.45); width: 100%; height: 400px;">
            <div class="row justify-content-center">
               <div class="col-4">

	<form class="mt-5" action="Bodytech.php" method="POST">
                    <div style="margin: 20px;"><img src="img/log-bodytech.png" style="width: 320px;"></div>
                        <div class="row">
                            <div>
                                <input type="text" class="form-control" placeholder="Peso" name="peso">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Estatura" name="estatura">
                            </div>
                            
                            </div>
                            <button type="submit" class="btn btn-primary mt-5" name="calculo">calcular</button>
                       

                            <div class="col" style="padding: 10px; height: 1px;">
                                <input type="text" class="form-control" placeholder="" name="resultado" style="height: 1px;">
                            </div>
<?php

if (isset($_POST["calculo"])) {
	$peso1=$_POST["peso"];
	$estatura1=$_POST["estatura"];




$r1 = $estatura1 * $estatura1;
$IMC = $peso1 / $r1;

echo "tu IMC es: " . $IMC . "<br>";

if ($IMC < 18.5){
    echo "peso insuficiente";
}else
 if ($IMC >= 18.5 && $IMC <= 24.9) {
    echo "normopeso";
}else if ($IMC >= 25 && $IMC <= 26.9) {
    echo "sobrepeso grado 1";
}else if ($IMC >= 27 && $IMC <= 29.9) {
    echo "sobrepeso grado 2(preobesidad)" ;
}else if ($IMC >= 30 && $IMC <= 34.9) {
    echo "obesidad tipo 1";
}else if ($IMC >= 35 && $IMC <= 39.9) {
    echo "obesidad tipo 2";
}else if ($IMC >= 40 && $IMC <= 49.9) {
    echo "obesidad tipo 3(morvida)";
}else if ($IMC > 50) {
    echo "obesidad tipo 4(extrema)";
}
}
?>


                </form>

 				</div> 
            </div>       
</div>
</body>
</html>




