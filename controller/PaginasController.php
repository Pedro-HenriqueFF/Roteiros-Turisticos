<?php
    class PaginasController
    {
        public function carregarPagina($nomeView)
        {
            //Verifica se a pagina é um erro 404
            if ($nomeView == '404') {
                require_once(PATH_VIEW . "$nomeView.php");
                exit;
            }

            // Renderiza a pagina requisitada
            require_once(PATH_VIEW . "$nomeView.php"); 
        }
    }
?>