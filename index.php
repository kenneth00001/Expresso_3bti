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
    <main><hr>
        <div class="container-bus">
            <div class="bus-img">
                <img src="img/bus.png" alt="bus">
            </div>
            <div class="bus-box">
                <form id="form-bus-box" action="" method="POST">
                    <h2>Para onde vamos? </h2>
                    <select name="" id="">
                        <option value="" disabled selected>Selecione sua origem</option>
                    </select>
                    <select name="" id="">
                        <option value="" disabled selected>Selecione seu destino</option>
                    </select>
                    <input class="botao-submit" type="submit" value=" Buscar Horários">
                </form>
            </div>
        </div><hr><br>
        <div class="info-box">
            <h3>Próxima Linha a sair: </h3>
        </div>
    </main>
</body>

</html>