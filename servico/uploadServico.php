<?php

function uploadImagem($arquivo, $caminhoImagem = "publico/upload/imagens/") {
    $imagem_tmp = $arquivo["tmp_name"];
    $imagem = basename($arquivo["name"]);

    $upload = move_uploaded_file($imagem_tmp, $caminhoImagem . $imagem);
    $diretorio_da_imagem = $caminhoImagem . $imagem;

    if(!$upload){
    	echo "Erro no upload!";
    }
    
    return $diretorio_da_imagem;
}
