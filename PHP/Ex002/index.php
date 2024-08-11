<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de data e hora</h1>
    <?php
    
        /*O comando date_defaut_timezone_set serve para definir o fuso horário da hora que sera mostrada.
        Caso não seja utilizada, será mostrada a hora com o fuso CEST.
        Para utilizar fuso do Brasil, deve ser colocado exatamente assim "America/Sao_Paulo" */
        date_default_timezone_set("America/Sao_Paulo");

        /*Para colocar a data, (d) é para dia em numeros, (D) é para dia da semana por extenso,
        (m) é para o numero do mês, (M) é para mês por extenso,
        (y) mostro o somente os dois ultimos digitos do ano (24), (Y) mostra o ano todo (2024). */
        echo "Hoje é dia " . date("d/M/y");

        /*Para colocar a hora, (G) mostra a hora no fomato 24h, (g) mostra no formato 12h
        (G) 18:20, (g) 6:20. */
        echo " e a hora atual é " . date("G:i:s T")
    ?>

    <h1>Exemplo de variáveis</h1>

    <?php 

    // $ é o simbolo utilizado para declarar uma variavel
    $nome = "Arthur";
    $sobrenome = "Soares Gardim";
    
    $nome = "Leonardo";
    $sobrenome = "Costa Soares";

    echo "Meu nome é $nome $sobrenome"
    ?>

    <h1>Exemplo de constante</h1>

    <?php 
    $nome = "Velocimetro";
    $sobrenome = "Soares Gardim";

    /*Para declarar uma constante é feito dessa maneira, sem o $ antes da palavra.
    Esse valor da constante não pode mudar de maneira alguma do inicio ao fim do programa. */
    const PAIS = "Brasil";
    
    /* Para utilizar a constante no echo é necesssario chamar ela fora do texto,
    pois ela não tem o $ para ser diferenciada do texto */
    echo "Meu nome é $nome $sobrenome e eu moro no " . PAIS;
    ?>

    <?php 
    //Regras para nomes de identificadores

    //Regra 1 - Variáveis sempre começam com o simbolo $ 
    //Regra 2 - O segundo caractere do nome da variavel pode ser uma letra ou o simbolo [_] (underline)
    //Regra 3 - Do terceiro para frente é possivel utilizar letras [a-z], [A-Z], [0-9] e [_]
    //Regra 4 - Aceita caracteres da tabela ASCII a partir de 128
    //Regra 5 - Aceita caracteres acentuados como á, õ, ç
    //Regra 6 - A linguagem é case sensitive em relação aos nomes, então $nome e $Nome são variáveis diferentes
    //Regra 7 - Nomes especiais como $this não podem ser utilizados pois são palavras reservadas na linguagem
    ?>

    <?php 
    //Recomendações para dar nomes
    //Rec 1 - Coloque nomes claros e de fácil identificação
    //Rec 2 - Evite nomes muito curtos ou muito longos
    //Rec 3 - Defina um padrão e siga durante todo o projeto
    //Rec 4 - Para variáveis, dê preferencia para letras minúsculas
    //Rec 5 - Para constantes, dê preferencia para letras maúsculas
    //Rec 6 - Use camelCase para métodos e atributos
    //Rec 7 - Use SNAKE_CASE para nomear constantes
    $nomeCompletoCliente = "Camel Case";
    $nome_completo_cliente = "Snake Case";
    
    ?>
</body>
</html>