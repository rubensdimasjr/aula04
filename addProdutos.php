<?php
    require_once './conexao.php';
    require_once './funcoesProdutos.php';
    
    $codigo = $_POST['codigo'];
    $produto = $_POST['produto'];
    $qtde = $_POST['qtde'];
    $valor = $_POST['valor'];

   $adicionado = adicionarProduto($conexao, $codigo, $produto, $qtde, $valor);

   if($adicionado){
       echo "O produto $produto, foi cadastrado com sucesso!";
   }else{
       echo "Produto nao cadastrado!";
   }
   