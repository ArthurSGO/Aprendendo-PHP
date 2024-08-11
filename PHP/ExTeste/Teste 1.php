<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Testando PHP no HTML</title>
</head>
<body>
    <h1>Exemplo PHP</h1>
    <?php 
    // $ é o simbolo utilizado para declarar uma variavel
        $nome = "Arthur";
        $sobrenome = "Soares Gardim";
    ?>

    <?= 
    /*Caso eu vá criar uma tag php com apenas um echo dentro dela, 
    não é necessario utilizar <?php echo "Meu nome é $nome $sobrenome", 
    pode ser simplificado para <?= "Meu nome é $nome $sobrenome ?> 
    Porem isso só poder ser utilizado se o codigo for apenas um echo*/
    "Meu nome é $nome $sobrenome"
    ?>



</body>
</html>