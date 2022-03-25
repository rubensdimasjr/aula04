<?php 

  require_once ('./conexao.php');
  require_once ('./funcoesProdutos.php');

  if(isset($_GET['id'])){
    $codigo = $_GET['id'];
    $produto = buscarProduto($conexao, $codigo);
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alteração produto #<?= $produto['codigo'] ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h2>Alterar produto #<?= $produto['codigo'] ?></h2>
          </div>
          <div class="card-body">
            <form action="./atualizaProduto.php" method="POST">
              <input type="hidden" name="codigo" value="<?= $produto['codigo'] ?>">
              <div class="mb-3">
                <label class="form-label"> Produto: </label>
                <input type="text" class="form-control" value="<?= $produto['descricao'] ?>" name="produto">
              </div>
              <div class="mb-3">
                <label class="form-label"> Quantidade: </label>
                <input type="number" class="form-control" value="<?= $produto['qtde'] ?>" name="qtde">
              </div>
              <div class="mb-3">
                <label class="form-label"> Valor: </label><input type="text" class="form-control" value="<?= $produto['valor'] ?>"
                name="valor">
              </div>
              <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Atualizar">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>