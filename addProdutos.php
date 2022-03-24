<?php
    require_once './conexao.php';
    require_once './funcoesProdutos.php';
    
    $produto = $_POST['produto'];
    $qtde = $_POST['qtde'];
    $valor = $_POST['valor'];

   $adicionado = adicionarProduto($conexao, $produto, $qtde, $valor);

   if($adicionado){
       echo "O produto $produto, foi cadastrado com sucesso!";
   }else{
       echo "Produto nao cadastrado!";
   }
   