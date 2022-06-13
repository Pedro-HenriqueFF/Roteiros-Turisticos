<?php
    // Navegador -> index.php -> conf_rotas -> PaginasController -> model -> Views -> [caminho reverso]

    session_start();

    require_once('config/constantes.php'); // Arquivo com constantes usadas no projeto (geralmente para redirecionamento).
    require_once('config/rotas.php'); // Arquivo com array de rotas.
    require_once('config/conf_rotas.php'); // Trata as requisições de rotas.

    new ConfRotas($rotas);
?>