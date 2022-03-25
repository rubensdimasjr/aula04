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
    <nav>
    <ul class="nav justify-content-center mt-2">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Insert</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./produtos.php">Produtos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Delete</a>
        </li>
        </ul>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="POST" action="./addProdutos.php">
                    <div class="card">
                        <div class="card-header">
                            <h2>Inserção Produtos</h2>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label"> Produto: </label>
                                <input type="text" class="form-control" 
                                placeholder=""
                                name="produto">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Quantidade: </label>
                                <input type="number" class="form-control" 
                                name="qtde">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Valor: </label><input type="text" class="form-control"
                                name="valor"
                                placeholdername="valor"><br>
                            </div>
                            <div class="mb-3">
                                <input class="btn btn-primary" type="submit" value="Cadastrar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mt-3">
                    <div class="card-header">
                        <h2>Deleção Produto</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="./excluirProdutos.php">
                            <div class="mb-3">
                                <label class="form-label"> Codigo: </label>
                                <input type="number" class="form-control" name="codigo">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" value="Excluir Produto">
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