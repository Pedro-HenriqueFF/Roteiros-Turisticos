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
                $sql_query = $mysqli->executar($sql_code);
                $sql_query_qrd = $sql_query->num_rows;
                if ($sql_query_qrd == 1){
                    $id_pessoa = $sql_query->fetch_assoc()['id'];
                    $sql_code = "INSERT INTO sugestoes (`get_id_pessoa`, `nome_local`, `tipo_local`, `texto_sugestao`)
                                 VALUES ('$id_pessoa', '$local', '$tipo', '$sugestao')";
                    $mysqli->executar($sql_code);
                }
                else{
                    $sql_code = "INSERT INTO pessoas (`nome_pessoa`, `email_pessoa`) VALUES ('$nome', '$email')";
                    $mysqli->executar($sql_code);
                    $sql_code = "SELECT id_pessoa as id FROM pessoas WHERE nome_pessoa = '$nome' AND email_pessoa = '$email'";
                    $sql_query = $mysqli->executar($sql_code);
                    $id_pessoa = $sql_query->fetch_assoc()['id'];
                    $sql_code = "INSERT INTO sugestoes (`get_id_pessoa`, `nome_local`, `tipo_local`, `texto_sugestao`)
                                 VALUES ('$id_pessoa', '$local', '$tipo', '$sugestao')";
                    $mysqli->executar($sql_code);

                }
                unset($mysqli);
            }
        }

        public function notificacao(){
            if (isset($_POST['nomeNotif']) && isset($_POST['emailNotif']) && isset($_POST['tipoNotif'])){

                $mysqli = new MySQL();
                $nome = $mysqli->scape($_POST['nomeNotif']);
                $email = $mysqli->scape($_POST['emailNotif']);
                $tipo1 = $_POST['tipoNotif'][0];
                $tipo2 = $_POST['tipoNotif'][1];
                $tipo3 = $_POST['tipoNotif'][2];

                $sql_code = "SELECT id_pessoa as id FROM pessoas WHERE nome_pessoa = '$nome' AND email_pessoa = '$email'";
                $sql_query = $mysqli->executar($sql_code);
                $sql_query_qrd = $sql_query->num_rows;
                if ($sql_query_qrd == 1){
                    $id_pessoa = $sql_query->fetch_assoc()['id'];
                    $sql_code = "INSERT INTO notificacao (`get_id_pessoa`, `get_id_genero_1`, `get_id_genero_2`, `get_id_genero_3`)
                                 VALUES ('$id_pessoa', '$tipo1', '$tipo2', '$tipo3')";
                    $mysqli->executar($sql_code);
                }
                else{
                    $sql_code = "INSERT INTO pessoas (`nome_pessoa`, `email_pessoa`) VALUES ('$nome', '$email')";
                    $mysqli->executar($sql_code);
                    $sql_code = "SELECT id_pessoa as id FROM pessoas WHERE nome_pessoa = '$nome' AND email_pessoa = '$email'";
                    $sql_query = $mysqli->executar($sql_code);
                    $id_pessoa = $sql_query->fetch_assoc()['id'];
                    $sql_code = "INSERT INTO notificacao (`get_id_pessoa`, `get_id_genero_1`, `get_id_genero_2`, `get_id_genero_3`)
                                 VALUES ('$id_pessoa', '$tipo1', '$tipo2', '$tipo3')";
                    $mysqli->executar($sql_code);

                }
                unset($mysqli);
            }
        }
    }
?>