<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
            require_once("atleta.class.php");
            $atleta1 = new Atleta();
            $atleta1->setId(233);
            $atleta1->setNome("João Silva");
            $atleta1->setPeso(95);
            $atleta1->setAltura(1.80);

            $atleta2 = new Atleta();
            $atleta2->setId(450);
            $atleta2->setNome("Maria Soares");
            $atleta2->setPeso(75);
            $atleta2->setAltura(1.65);

            $id = $atleta1->getId();
            $nome = $atleta1->getNome();
            $peso = $atleta1->getPeso();
            $altura = $atleta1->getAltura();
            $imc = $atleta1->calculadoraIMC();
            echo "
            <fieldset>
            
            Atleta 1
            
            Id: $id <br>
            Nome: $nome <br>
            Peso: $peso <br>
            Altura: $altura <br>
            Imc: $imc <br>
            
            </fieldset>
            ";
            
            $id = $atleta2->getId();
            $nome = $atleta2->getNome();
            $peso = $atleta2->getPeso();
            $altura = $atleta2->getAltura();
            $imc = $atleta2->calculadoraIMC();
            echo "
            <fieldset>
            Atleta 2

            Id: $id <br>
            Nome: $nome <br>
            Peso: $peso <br>
            Altura: $altura <br>
            Imc: $imc <br>
            </fieldset>
            
            ";

?>
</body>
</html>