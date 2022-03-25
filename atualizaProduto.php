<?php
    require_once './conexao.php';
    require_once './funcoesProdutos.php';
    
    $codigo = $_POST['codigo'];
    $produto = $_POST['produto'];
    $qtde = $_POST['qtde'];
    $valor = $_POST['valor'];

   $atualizado = atualizaProduto($conexao, $codigo, $produto, $qtde, $valor);

   if($atualizado){
       echo "O produto $produto, foi atualizado com sucesso!";
   }else{
       echo "Falha na alteração do produto $produto!";
   }
   