
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



                            <input type="text" class="form-control" placeholder="fruta" name="fruta1" style="width: 300px;"><br>
                                                      
                            <input type="text" class="form-control" placeholder="url" name="url1" style="width: 300px;"><br>

                            <input type="text" class="form-control" placeholder="fruta" name="fruta2" style="width: 300px;"><br>
                                                      
                            <input type="text" class="form-control" placeholder="url" name="url2" style="width: 300px;"><br>

                            <input type="text" class="form-control" placeholder="fruta" name="fruta3" style="width: 300px;"><br>
                                                      
                            <input type="text" class="form-control" placeholder="url" name="url3" style="width: 300px;"><br>

                            <input type="text" class="form-control" placeholder="fruta" name="fruta4" style="width: 300px;"><br>
                                                      
                            <input type="text" class="form-control" placeholder="url" name="url4" style="width: 300px;"><br>

                            <input type="text" class="form-control" placeholder="fruta" name="fruta5" style="width: 300px;"><br>
                                                      
                            <input type="text" class="form-control" placeholder="url" name="url5" style="width: 300px;"><br>
                         
                            
                        </div>
                        	<button type="submit" class="btn btn-primary mt-5" name="mostrar" style="margin: 10px;">mostrar</button>
                       

                        <div class="card" style="width: 37rem; height: 15rem;">
						  <?php

						if (isset($_POST["mostrar"])) {
                            $frutas1=$_POST["fruta1"];
                            $urls1=$_POST["url1"]; 

                            $frutas2=$_POST["fruta2"];
                            $urls2=$_POST["url2"];

                            $frutas3=$_POST["fruta3"];
                            $urls3=$_POST["url3"];

                            $frutas4=$_POST["fruta4"];
                            $urls4=$_POST["url4"];

                            $frutas5=$_POST["fruta5"];
                            $urls5=$_POST["url5"];


                                echo($frutas1." ".$urls1);
                                echo "<br>";
                                echo($frutas2." ".$urls2);
                                echo "<br>";
                                echo($frutas3." ".$urls3);
                                echo "<br>";
                                echo($frutas4." ".$urls4);
                                echo "<br>";
                                echo($frutas5." ".$urls5);
                                
                            
						}
						?>
                            
                        </div>
						</div>                      
                    </form>
                </div>
</body>
</html>


