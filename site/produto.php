<?
    require_once('acesso.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@1,200&display=swap" rel="stylesheet">
    
    <title>Carrinho Php</title>
</head>
<body>
    <?
    require_once('header.php');
    ?>
    <div class="container d-flex justify-content-around card-group mt-5 mb-5">

        <div class="card" style="width: 14rem;">
            <img src="../media/<?echo $produto[$id]['imagem']?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h2 class="card-title"><?echo $produto[$id]['nome']?></h2>
            <p class="card-text"><?echo $produto[$id]['descrisao']?></p>
            <h4 class="card-text mb-3 text-success">R$<?echo $produto[$id]['preco']?></h4>
            <a href="Comprar.php?produto=<?echo $id;?>" class="btn btn-success">Comprar</a>
        </div>
    </div>
    </div><!-- container -->
</body>
</html>
