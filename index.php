
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Random</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Pairs Generator</h1>
        </header>
    
    <div class="parejas">
    <?php
        $alumnos = ['Toni','Lolo','Llordi el retrasao','Alexis','Luis','Alejeandro','Adrian','Fran','Cristian','Petro','Julia','Jorge','Jose','Jaume','Mateo','David el crackhead'];
        $parejas = count($alumnos)/2;
        shuffle($alumnos);
        $contador = 0;
       ;
        for($i = 0; $i < $parejas;$i++){
            $primeraPersona = $alumnos[$contador];
            $contador++;
            $segundaPersona = $alumnos[$contador];
            $contador++;
            echo "<li>".$primeraPersona."</li>"." "."<li>".$segundaPersona."</li>"."<br>";
        }
        echo "</ul>";
    
?>

    </div>
    </div>



</body>
</html>