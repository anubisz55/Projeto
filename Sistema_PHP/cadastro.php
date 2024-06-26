<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php 
        require 'modulos.php';
        include 'menu.html';

        session_start();
        if ($_SESSION['logado']):
    ?>

    <div class="container container-cadastro">

        <h2>Cadastro de usuário</h2>
        <form action="" method="POST">
            <p>Nome:<input type="text" name="nome" placeholder="Digite o nome"></p>
            <p>Nome do 1° Tutor:<input type="text" name="nome_tutor" placeholder="Digite o nome do 1º Tutor"></p>
            <p>Nome do 2º Tutor:<input type="text" name="nome_tutora" placeholder="Digite o nome do 2º Tutor"></p>
            <p>Endereço:<input type="text" name="endereco" placeholder="Digite o endereço"></p>
            <p>Telefone:<input type="text" name="telefone" placeholder="Digite o número de telefone"></p>
            <p>Usuário: <span id='aviso-usuario'></span>

                <input type="text" name="usuario" placeholder="Digite um usuário único">
            </p>
            <p>Senha: <input type="password" name="senha" placeholder="Digite a senha aqui"></p>
            <input type="submit" name="cadastrar" value="Cadastrar">
        </form>

    </div>

    <?php 
        else:
            login_necessario();
        endif
    ?>


</body>

</html>

<?php 

    $cadastrado = false;
    $usuario_existente = false;
    require 'conexao.php';

    if (isset($_POST['cadastrar'])) {

        if (existe_usuario($_POST['usuario'])) {
            aviso_usuario_existente();
        } else {
            $nome = $_POST['nome'];
            $nome_tutor = $_POST['nome tutor'];
            $nome_tutora = $_POST['nome tutora'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $usuario = $_POST['usuario'];
            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
            $cadastro = $conexao->prepare(
                "INSERT INTO pacientes (nome, endereco, nome_tutor, nome_tutora, telefone, usuario, senha) VALUES (:nome, :nome_tutor, :nome_tutora, :endereco, :telefone, :usuario, :senha);"
            );
            $cadastro->bindValue(":nome", $nome);
            $cadastro->bindValue(":nome tutor", $nome_tutor);
            $cadastro->bindValue(":nome tutora", $nome_tutora);
            $cadastro->bindValue(":endereco", $endereco);
            $cadastro->bindValue(":telefone", $telefone);
            $cadastro->bindValue(":usuario", $usuario);
            $cadastro->bindValue(":senha", $senha);
            $cadastro->execute();
            $cadastrado = true;
        }

    }

    if ($cadastrado):
?>

<script>
alert('Cadastrado com sucesso!')
</script>


<?php 
    endif
?>