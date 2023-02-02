<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Estudo php guanabara aula #07</title>

</head>
<body>
    
    <?php
    $a = 4;

    $b = "4";

    echo "identico: <br>";
    $r = ($a === $b)?"verdadeiro":"FALSO";
    
    echo "<br>Os operadores $a e ''$b'' são identicos? $r <br><br>";


    echo "Igual: <br>";
    $r = ($a == $b)?"verdadeiro":"FALSO";

    echo "<br>Os operadores $a e ''$b'' são identicos? $r <br><br>";
    ?>

</body>
</html>