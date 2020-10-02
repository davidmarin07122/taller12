
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
<body style="padding: 400px; padding-top: 20px;">

<div class="row justify-content-center" style="align-content: center;">
<form class="mt-5" action="LasFrutas.php" method="POST">
                    <div><img src="img/frutas.png" style="width: 320px; margin: 30px;"></div>
                        <div class="row">


                        	<?php for ($i=1; $i <=5 ; $i++) { 
                        		
                        	 ?>

                            <input type="text" class="form-control" placeholder="fruta" name="fruta" style="width: 300px;"><br>
                                                      
                            <input type="text" class="form-control" placeholder="url" name="url" style="width: 300px;"><br>
                            <?php }?>
                            
                        </div>
                        	<button type="submit" class="btn btn-primary mt-5" name="mostrar" style="margin: 10px;">mostrar</button>
                       

                        <div class="card" style="width: 37rem; height: 10rem;">
						  <?php

						if (isset($_POST["mostrar"])) {

						$frutas=$_POST["fruta"];
						$urls=$_POST["url"];									

						print_r($_POST);
						//print_r($urls[$i]);

						
						}
						?>
						
						</div>
						</div>                      
                    </form>
                </div>
</body>
</html>


