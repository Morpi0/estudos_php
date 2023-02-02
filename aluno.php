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
    $nota1 = 7;

    $nota2 = 10;

    $m = ($nota1+$nota2)/2;

    echo "<br>" .  $m;


    echo "<br> O aluno está: " . (($m<6)?"reprovado":"APROVADO"); #a expressão tem que estar entre parenteses para funcionar # operador unario junto com o echo que vai dar o resultado final

   
    ?>

</body>
</html>