<?php

$personas = ['toni','lolo','jordi','alexis','luis','alejeandro','adrian','fran','cristian','petro','julia','jorge','jose','jaume','mateo','david'];

$parejas = count($personas)/2;

for($i = 0; $i< $parejas; $i++){

$primer_numero = mt_rand(0,count($personas));
$primera_persona = $personas[$primer_numero];
unset($parejas[$primer_numero]);

$segundo_numero = mt_rand(0,count($personas)-1);
while($primer_numero == $segundo_numero){

    $segunda_persona = mt_rand(0,count($personas)-1);
}


$segunda_persona = $personas[$segundo_numero];
unset($parejas[$segundo_numero]);
    

echo $primera_persona." ----->".$segunda_persona."<br>;
}








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