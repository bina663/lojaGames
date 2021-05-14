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
        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header p-4 h4 text-primary">Você escolheu comprar</div>
            <div class="card-body">
                <h3 class="card-title"><?echo $produto[$id]['nome'];?></h3>
                <p class="card-text mt-5 mb-5"><?echo $produto[$id]['descrisao']?></p>
                <h5 class="card-text">Você ira pagar <strong class='text-success'>R$<?echo $produto[$id]['preco']?></strong></h5>            
            </div>
        </div>

        <form method='POST' action='Envio.php?<?$id?>'>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><h4 class='display-5'>Seu e-mail</h4></label>
                <input type="email" class="form-control" id="exampleInputEmail1" name='email' aria-describedby="emailHelp" placeholder='Example@gmail.com'>
                <? if(isset($_GET['campo_vazio'])){?>
                    <div id="emailHelp" class="form-text text-danger mt-2 mb-2">Por favor digite seu E-mail.</div>
                <?}?>
            </div>
            <button type="submit" class="btn btn-success p-2">Confirmar</button>
        </form>
    </div><!-- container -->
</body>
</html>