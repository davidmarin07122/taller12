<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <header>
    
          
    </header>
    <main>

        <div class="container">
            <div class="row justify-content-center">
               <div class="col-4">


                <form class="mt-5" action="index2.php" method="POST">
                    <h4>CALCULADORA BASICA</h4>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Numero1" name="numero1">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Numero2" name="numero2">
                            </div>
                            
                        </div>

                        <div>
                        <button type="submit" class="btn btn-primary mt-5" name="suma">sumar</button>
                        <button type="submit" class="btn btn-primary mt-5" name="resta">restar</button>
                        <button type="submit" class="btn btn-primary mt-5" name="multiplicacion">multiplicar</button>
                        <button type="submit" class="btn btn-primary mt-5" name="divicion">dividir</button>
                        </div>

                        <div class="col" style="padding: 10px;">
                                <input type="text" class="form-control" placeholder="resultado" name="resultado">
                        </div>
                        
                </form>

                <?php 
                
                    if(isset($_POST["suma"])){

                       $numeroUno=$_POST["numero1"];
                       $numeroDos=$_POST["numero2"];
                      
                       $total=$numeroUno+$numeroDos;

                       echo("El resultado es: ".$total);
                    }
                
                ?>

                <?php 
                
                    if(isset($_POST["resta"])){

                       $numeroUno=$_POST["numero1"];
                       $numeroDos=$_POST["numero2"];

                       $total=$numeroUno-$numeroDos;

                       echo("El resultado es: ".$total);
                    }
                
                ?>

                <?php 
                
                    if(isset($_POST["multiplicacion"])){

                       $numeroUno=$_POST["numero1"];
                       $numeroDos=$_POST["numero2"];

                       $total=$numeroUno*$numeroDos;

                       echo("El resultado es: ".$total);
                    }
                
                ?>

                <?php 
                
                    if(isset($_POST["divicion"])){

                       $numeroUno=$_POST["numero1"];
                       $numeroDos=$_POST["numero2"];

                       $total=$numeroUno/$numeroDos;

                       echo("El resultado es: ".$total);
                    }
                
                ?>

               </div> 
            </div>
        
        </div>
</main>
<footer>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
</body>
</html>