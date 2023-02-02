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
   
   $ano = 2023;
   
    $idade = $ano - 2005;

    echo "quem nasceu em $ano tem idade de $idade";

    $tipo = ($idade>=18 && $idade<65)?"VOTO OBRIGATORIO":"NÂO VOTA";

    echo "<br>seu voto é: $tipo";
    ?>

</body>
</html>