<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expresso 3B</title>
    <link rel="stylesheet" href=".css/style.css">
    <link rel="icon" type="imagem/png" href="img/bus.png">
</head>

<body>
    <?php include("partials/header.php") ?>
    <?php
    include("config/conexao.php");
    $origem = "SELECT `id_origem`, `cidade` FROM `origem`";
    $destino = "SELECT `id_destino`, `cidade` FROM `destino`";
    $resultado_origem = mysqli_query($mysqli, $origem);
    $resultado_destino = mysqli_query($mysqli, $destino);
    ?>
    <main>
        <section class="container-bus">
            <div class="bus-img">
                <img src="img/bus.png" alt="bus">
            </div>
            <div class="bus-box">
                <form id="form-bus-box" action="compra_passagem.php" method="POST">
                    <h2>Para onde vamos? </h2>
                    <select name="select-origem" id="" required>
                        <option value="" disabled selected>Selecione sua origem:</option>
                        <?php while ($row = mysqli_fetch_array($resultado_origem)) { ?>
                            <option value="<?php $row['id_origem'] ?>">
                                <?php echo $row['id_origem'] . " - " . $row['cidade'] ?>
                            </option>
                        <?php } ?>
                    </select>
                    
                    <select name="select-destino" id="" required>
                        <option value="" disabled selected>Selecione seu destino:</option>
                        <?php while ($row = mysqli_fetch_array($resultado_destino)) { ?>
                            <option value="<?php $row['id_destino'] ?>">
                                <?php echo $row['id_destino'] . " - " . $row['cidade'] ?>
                            </option><?php } ?>
                    </select>
                    
                    <input class="botao-submit" type="submit" value=" Buscar Horários">
                </form>
        </section>
        <hr><br>
        <div class="info-box">
            <h3>Próxima Linha a sair: </h3>
        </div>
    </main>
    <?php include("partials/footer.php") ?>
</body>

</html>