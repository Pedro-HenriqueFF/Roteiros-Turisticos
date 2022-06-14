<?php
    require_once(PATH_MODEL . "dbModel.php");
    if (!isset($_SESSION)){
        session_start();
    }
    class Form{
        public function sugestao(){
            if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['local']) && isset($_POST['tipo'])){

                $mysqli = new MySQL();
                $nome = $mysqli->scape($_POST['nome']);
                $email = $mysqli->scape($_POST['email']);
                $local = $mysqli->scape($_POST['local']);
                $tipo = $mysqli->scape($_POST['tipo']);
                if (isset($_POST['sugestao']))
                    $sugestao = $mysqli->scape($_POST['sugestao']);
                else
                    $sugestao = null;
                
                $sql_code = "SELECT id_pessoa as id FROM pessoas WHERE nome_pessoa = '$nome' AND email_pessoa = '$email'";
                $sql_query = $mysqli->busca($sql_code);
                $sql_query_qrd = $sql_query->num_rows;
                if ($sql_query_qrd == 1){
                    $id_pessoa = $sql_query->fetch_assoc()['id'];
                    $sql_code = "INSERT INTO sugestoes (`get_id_pessoa`, `nome_local`, `tipo_local`, `texto_sugestao`)
                                 VALUES ('$id_pessoa', '$local', '$tipo', '$sugestao')";
                    $mysqli->busca($sql_code);
                }
                else{
                    $sql_code = "INSERT INTO pessoas (`nome_pessoa`, `email_pessoa`) VALUES ('$nome', '$email')";
                    $mysqli->busca($sql_code);
                    $sql_code = "SELECT id_pessoa as id FROM pessoas WHERE nome_pessoa = '$nome' AND email_pessoa = '$email'";
                    $sql_query = $mysqli->busca($sql_code);
                    $id_pessoa = $sql_query->fetch_assoc()['id'];
                    $sql_code = "INSERT INTO sugestoes (`get_id_pessoa`, `nome_local`, `tipo_local`, `texto_sugestao`)
                                 VALUES ('$id_pessoa', '$local', '$tipo', '$sugestao')";
                    $mysqli->busca($sql_code);

                }
                unset($mysqli);
            }
        }
    }
?>