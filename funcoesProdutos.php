<?php

    function adicionarProduto($conexao, $produto, $qtde, $valor){
        $sql = "INSERT INTO produtos(descricao, qtde, valor)
         VALUES('$produto', $qtde, '$valor')";

       return  mysqli_query($conexao, $sql);
    }
    
   function excluirProduto ($conexao, $codigo) {
       $sql = "DELETE FROM produtos WHERE codigo = $codigo";

       return  mysqli_query($conexao, $sql);
   }

   function listarProdutos ($conexao){
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao, $sql);
    return $resultado;
   }