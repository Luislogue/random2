<?php

$personas = ['toni','lolo','jordi','alexis','luis','alejeandro','adrian','fran','cristian','petro','julia','jorge','jose','jaume','mateo','david'];

$parejas = count($personas)/2;
// echo($parejas);

// for($i = 0; $i< $parejas; $i++){

$contar = count($personas);
// echo($contar);

 $primer_numero = mt_rand(0,$contar) ; //
 //echo $primer_numero;
$primera_persona = $personas[$primer_numero];
//echo ($personas[0]);//
//echo $primera_persona;
echo $parejas;
 unset($personas[$primer_numero]); // unset destruye la variable

// $segundo_numero = mt_rand(0,count($personas)-1);
// while($primer_numero == $segundo_numero){

//     $segunda_persona = mt_rand(0,count($personas)-1);
// }


// $segunda_persona = $personas[$segundo_numero];
// unset($parejas[$segundo_numero]);
    

// echo $primera_persona." ----->".$segunda_persona."<br>";
// };




?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Random</title>
 </head>
 <body>
    





</body>
</html>