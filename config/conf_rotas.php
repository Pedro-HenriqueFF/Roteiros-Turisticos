<?php
    require_once('controller/PaginasController.php');
    if (!isset($_SESSION)){
        session_start();
    }

    // Classe que trata as rotas da aplicação
    class ConfRotas
    {
        private $rotas;

        public function __construct(array $rotas)
        {
            $this->rotas = $rotas;

            $segmentos = $this->getSegmentosUrl();

            $this->processarRotas($segmentos);
        }

        // Tratar a requisição
        private function getSegmentosUrl()
        {
            $segmentos = $_SERVER["REQUEST_URI"];
            $segmentos = explode("/", $segmentos);

            foreach ($segmentos as $i => $value){
                if (empty($value)){
                    unset($segmentos[$i]);
                }
            }
            return end($segmentos);
        }

        //Processa a rota e chama a renderização da devida pagina
        private function processarRotas(string $segmentos)
        {
            foreach ($this->rotas as $confRota) {
                if ($confRota["rota"] == "/$segmentos") {
                    $rotaExiste = true;
                    $pagina = $confRota["pagina"];
                    (new PaginasController())->carregarPagina($pagina);
                    exit;
                }
            }

            if (!isset($rotaExiste)) {
                $_SESSION['message'] = "http://localhost".$_SERVER["REQUEST_URI"];
                (new PaginasController())->carregarPagina("404");
                exit;
            }
        }
    }
?>
