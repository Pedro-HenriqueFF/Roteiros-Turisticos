<?php
    require_once(PATH_MODEL . "dbModel.php");
    if (!isset($_SESSION)){
        session_start();
    }
    class Catalogo{
        public function carregarCatalogo(){

            $mysqli = new MySQL();
            
            $sql_code = "SELECT nome_local as nome, pathing_local as pasta FROM locais"; 
            $valores = $mysqli->executar($sql_code)->fetch_all(MYSQLI_ASSOC);
            
            unset($mysqli);

            return $valores;
        }

        public function filtro(){

        }

        public function buildPath($caminho){

            
        }
    }
?>