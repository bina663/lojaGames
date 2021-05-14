<?
    require_once('array.php');
?>
<?  foreach ($produto as $key => $value) {?>
        <div class="card">
            <img src="./media/<?echo $value['imagem']?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title"><?echo $value['nome']?></h3>
            </div>
            <div class="card-footer text-center p-3">
            <h4 class="card-text mb-4 text-success">R$<?echo $value['preco']?></h4>
            <a class='btn btn-primary text-center' href='site/produto.php?produto=<?echo $key;?>'>Ver mais</a>
            </div>
        </div>
<?}?>
