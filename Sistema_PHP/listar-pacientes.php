<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes Cadastrados</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
        require 'modulos.php';
        require 'conexao.php';
        include 'menu.html';
        
        session_start();
        if ($_SESSION['logado'] != true) {
            login_necessario();
        }
    ?>


    <div class="container container-listagem">

        <ul>

            <?php 
                $dados = $conexao->prepare("SELECT * FROM pacientes");
                $dados->execute();
                $pacientes = $dados->fetchAll(PDO::FETCH_OBJ);
                foreach ($pacientes as $paciente) {
                    echo "
                    <li>
                        <div class='dados'>
                            <a href='atualizar-paciente.php?id=$paciente->id&nome=$paciente->nome&nome_tutor=$paciente->nome_tutor&nome_tutora=$paciente->nome_tutora&endereco=$paciente->endereco&telefone=$paciente->telefone&usuario=$paciente->usuario'>
                                <span class='titulo-item-listagem'>
                                    $paciente->nome
                                </span> <br>
                                <div class='descricao-item-listagem'>
                                    <ul>
                                        <li>Telefone: $paciente->telefone</li>
                                        <li>Endereço: $paciente->endereco</li>
                                        <li>Usuário: $paciente->usuario</li>
                                    </ul>

                                </div>
                            </a>
                        </div>

                        <div class='icone-lista'>
                            <a href='excluir.php?id=$paciente->id' onclick=\"return confirm('Tem certeza que deseja excluir $paciente->nome?'); return false;\">
                                <img src='imagens/excluir.png' alt='Excluir'>
                            </a>
                        </div>

                    </li>";
                }
            ?>

        </ul>

    </div>


</body>

</html>