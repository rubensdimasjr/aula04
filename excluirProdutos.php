<?php
    require_once './conexao.php';
    require_once './funcoesProdutos.php';
    
    $codigo = $_POST['codigo'];

   $excluido = excluirProduto($conexao, $codigo);

   if($excluido){
       echo "O produto, $codigo foi excluido com sucesso!";
   }else{
       echo "Produto nao excluido!";
   }
   