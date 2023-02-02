<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina 40</title>
</head>
<body>
    <?php
//arrays

/*
    $lista[]; // indica que a variavel lista é um array
    $lista[0] = 10; //valor 10 entrou na posição 0 do array
    $lista[1] = "Pedro"; // pedro entrou na posição 1 do array
    $lista[] = 12; // 12 esta na posição 2 do array
    $lista[] = 13; // o 13 está logo em seguida do 12, na posição 3 do array
    $lista[] = 9;
*/
    // pode se usar a função array(), para atribuir valores a um vetor

/*
    $listagem = array(1, 2, 3, 4, 5, 6);

    echo $listagem[0];
*/

    //é possivel utilizar nomes em vez de numeros para referenciar um array
    /*

    $usuario['nome'] = "João";
    $usuario['idade'] = 22;
    $usuario['cidade'] = "japão";

    echo $usuario['idade']; // esta puxando a idade do usuario pelo nome de seu marcardor, e não por um numero
    echo $usuario['nome'];

    */
// matiz

    // é possivel utilizar mais de um indice em um array, tornando-o um array multidimensional

    // cria o primeiro usuario


    // não funciona erro:   Array to string conversion in
    $usuario_1['Nome'] = "Bruno";
    $usuario_1['Idade'] = 26;
    $usuario_1['Cidade'] = "são paulo";

    $usuario_2['Nome'] = "Carlos";
    $usuario_2['Idade'] = 36;
    $usuario_2['Cidade'] = "Belo horizonte";

    /* Armazena cada array usuario em uma
    posição do array dados */

    $dados[0] = $usuario_1;
    $dados[1] = $usuario_2;

    echo $dados[0];
    echo $dados[1];
    ?>
</body>
</html>