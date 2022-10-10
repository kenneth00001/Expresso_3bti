<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossa Empresa</title>
    <link rel="stylesheet" href=".css/style.css">
    <link rel="icon" type="imagem/png" href="img/bus.png">
</head>

<body>
    <?php include("partials/header.php") ?>
    <section class="container-nossaempresa">
        <p>Tava sem fazer nada, ai fizemos isso.... Taram, nossa empresa!</p>

        <select name="produto" id="produto">
            <?php require_once('class/Conexao.class.php');
            $resultado = $pdo->select("SELECT * FROM categoria");
            $pdo->desconectar();
            if (count($resultado)) {
                foreach ($resultado as $res) { ?> 
                <option value="<?php echo $res['id’];?>" ><?php echo $res[‘descricao']; ?></option> <?php }
                                                                                                                                                                                            } ?> </select>


    </section>
</body>

</html>