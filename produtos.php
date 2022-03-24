<?php 

  require_once ('./conexao.php');
  require_once ('./funcoesProdutos.php');

  $listaProdutos  = listarProdutos($conexao);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row table-responsive mt-5">
      <table class="table">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Descrição</th>
            <th>Quatidade</th>
            <th>Valor</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php while($produto = mysqli_fetch_assoc($listaProdutos)) { ?>
            <tr>
              <th scope="row"><?=$produto['codigo']?></th>
              <td><?=$produto['descricao']?></td>
              <td><?=$produto['qtde']?></td>
              <td><?=$produto['valor']?></td>
              <th>
                <a href="./alteraProduto?=<?= $produto['id'] ?>">Alterar</a></th>
            </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>