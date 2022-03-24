<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="./addProdutos.php">
        <label> Codigo: <input type="number" name="codigo"></label><br>
        <label> Produto: <input type="text" name="produto"></label><br>
        <label> Quantidade: <input type="number" name="qtde"></label><br>
        <label> Valor: <input type="number" name="valor"></label><br>
        <input type="submit" value="Cadastrar">
    </form>
    <form method="POST" action="./excluirProdutos.php"> 
         <label> Codigo: <input type="number" name="codigo"></label><br>
         <input type="submit" value="Excluir Produto">
    </form>
</body>
</html>