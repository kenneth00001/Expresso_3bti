<?php
include('config/conexao.php');

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href=".css/style.css">
</head>

<body>
    <?php include("partials/header.php") ?>
    <main>
        <section class="container-login">
            <h1> Seja Bem-Vindo! </h1>
            <form action="" method="POST">
                <hr>
                <h3>E-mail</h3>
                <input type="email" name="email">
                <h3>Senha</h3>
                <input type="password" name="senha">
                <p>
                    <input type="submit" name="entrar" value="ENVIAR" style="background-color: var(--color3); color:var(--color1);">
                </p>
            </form>

            <?php


            if (isset($_POST['email']) || isset($_POST['senha'])) {

                if (strlen($_POST['email']) == 0) {
                    echo "<p class='msg_erro'> Prencha seu email </p>";
                } else if (strlen($_POST['senha']) == 0) {
                    echo "<p class='msg_erro'> Prencha sua senha </p>";
                } else {

                    $email = $mysqli->real_escape_string($_POST['email']);
                    $senha = $mysqli->real_escape_string($_POST['senha']);

                    $sql_code = "SELECT *  FROM usuarios WHERE email = '$email' AND senha = '$senha'";
                    $sql_query = $mysqli->query($sql_code) or die("Falha na exução do code sql: " . $mysqli->error);

                    $quantidade = $sql_query->num_rows;

                    if ($quantidade == 1) {

                        $usuario = $sql_query->fetch_assoc();

                        if (!isset($_SESSION)) {
                            session_start();
                        }

                        $_SESSION['id'] = $usuario['id'];
                        $_SESSION['nome'] = $usuario['nome'];

                        header("Location: index.php");
                    } else {
                        echo " <p class='msg_erro'>Email e Senha não conferem! </p>";
                    }
                }
            }

            ?>


        </section>
    </main>
</body>

</html>