<?php

    function adicionarProduto($conexao, $codigo, $produto, $qtde, $valor){
        $sql = "INSERT INTO produtos(codigo, descricao, qtde, valor)
         VALUES($codigo, '$produto', $qtde, $valor)";

       return  mysqli_query($conexao, $sql);
    }
    
   function excluirProduto ($conexao, $codigo) {
       $sql = "DELETE FROM produtos WHERE codigo = $codigo";

       return  mysqli_query($conexao, $sql);
   }