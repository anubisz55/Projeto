<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php 
        require 'modulos.php';
        include 'menu.html';
        session_start();
        if ($_SESSION['logado'] != true) {
            login_necessario();
        }
    ?>

    <div class="container">

    <h1>Seja bem vindo, <?php if (isset($_COOKIE['nome'])) { echo $_COOKIE['nome']; }?>!</h1>
        <p>Sistema pertencente a clínica veterinária "Pets&Cia", desenvolvido para meios de coleta e atualizações de dados dos pacientes! </p>
        <p>Desenvolvido por Ariadne Saraiva dos Santos e Nubia Abreu de Oliveira sobre a matéria de Linguagem de Programação IV, com o professor Jônatas Cerqueira Dias do curso de ADS 
        da Fatec de Praia Grande. </p>

    </div>

</body>

</html>