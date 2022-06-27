<?php
    require_once(PATH_MODEL . "dbModel.php");
    if (!isset($_SESSION)){
        session_start();
    }
    class Catalogo{
        public function carregarCatalogo(){

            # Cria conexão com o banco de daados
            $mysqli = new MySQL();
            
            # Busca todos os locais no catálogo
            $sql_code = "SELECT id_local as id, nome_local as nome, endereco_local as endereco, descricao_local as descricao, pathing_local as file_path FROM locais"; 
            $valores = $mysqli->executar($sql_code)->fetch_all(MYSQLI_ASSOC);
            
            # Fecha conexão
            unset($mysqli);

            # Retorna os valores dos locais
            return $valores;
        }

        public function filtro(){

        }
    }
?>