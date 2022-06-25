<?php

use function PHPSTORM_META\type;

    require_once(PATH_MODEL . "dbModel.php");
    if (!isset($_SESSION)){
        session_start();
    }
    class Form{
        public function sugestao(){
            if (isset($_POST['nome_sugest']) && isset($_POST['email_sugest']) && isset($_POST['local_sugest']) && isset($_POST['tipo_sugest_1'])){

                # Cria a conexão com o banco de dados
                $mysqli = new MySQL();

                # Puxa as variáveis do POST
                $nome = $mysqli->scape($_POST['nome_sugest']);
                $email = $mysqli->scape($_POST['email_sugest']);
                $local = $mysqli->scape($_POST['local_sugest']);
                $tipo_1 = $_POST['tipo_sugest_1'];
                $tipo_2 = $_POST['tipo_sugest_2'];
                $tipo_3 = $_POST['tipo_sugest_3'];
                $sugestao = $mysqli->scape($_POST['sugestao_sugest']);

                # Procura se a pessoa que enviou a sugestão já está no banco de dados
                $sql_code = "SELECT id_pessoa as id FROM pessoas WHERE nome_pessoa = '$nome' AND email_pessoa = '$email'";
                $sql_query = $mysqli->executar($sql_code);
                $sql_query_qrd = $sql_query->num_rows;

                if ($sql_query_qrd == 1){

                    # Se a pessoa já está no banco apenas a sugestão é inserida
                    $id_pessoa = $sql_query->fetch_assoc()['id'];
                    if ($sugestao == ""){

                        # SQL code para sugestão nula
                        $sql_code = "INSERT INTO sugestoes (`get_id_pessoa`, `nome_sugestao`, `get_id_genero_1`, `get_id_genero_2`, `get_id_genero_3`, `texto_sugestao`)
                                 VALUES ($id_pessoa, '$local', $tipo_1, $tipo_2, $tipo_3, null)";
                    } else {
                        
                        # SQL code para sugestão enviada pela pessoa
                        $sql_code = "INSERT INTO sugestoes (`get_id_pessoa`, `nome_sugestao`, `get_id_genero_1`, `get_id_genero_2`, `get_id_genero_3`, `texto_sugestao`)
                                 VALUES ($id_pessoa, '$local', $tipo_1, $tipo_2, $tipo_3, '$sugestao')";
                    }

                    # Executa a query
                    $mysqli->executar($sql_code);
                }
                else { # Caso a pessoa ainda não esteja no banco de dados, insere a pessoa e depois a sugestão

                    # Inserindo a pessoa
                    $sql_code = "INSERT INTO pessoas (`nome_pessoa`, `email_pessoa`) VALUES ('$nome', '$email')";
                    $mysqli->executar($sql_code);

                    # Busca o id da pesoa que foi inserida
                    $sql_code = "SELECT id_pessoa as id FROM pessoas WHERE nome_pessoa = '$nome' AND email_pessoa = '$email'";
                    $sql_query = $mysqli->executar($sql_code);
                    $id_pessoa = $sql_query->fetch_assoc()['id'];

                    # Insere a sugestão
                    if ($sugestao == "") {

                        # SQL code para sugestão nula
                        $sql_code = "INSERT INTO sugestoes (`get_id_pessoa`, `nome_sugestao`, `get_id_genero_1`, `get_id_genero_2`, `get_id_genero_3`, `texto_sugestao`)
                                 VALUES ($id_pessoa, '$local', $tipo_1, $tipo_2, $tipo_3, null)";
                    } else {

                        # SQL code para sugestão enviada pela pessoa
                        $sql_code = "INSERT INTO sugestoes (`get_id_pessoa`, `nome_sugestao`, `get_id_genero_1`, `get_id_genero_2`, `get_id_genero_3`, `texto_sugestao`)
                                 VALUES ($id_pessoa, '$local', $tipo_1, $tipo_2, $tipo_3, '$sugestao')";
                    }

                    # Executa a query
                    $mysqli->executar($sql_code);

                }

                # Fecha a conexão com o banco
                unset($mysqli);
            }
        }

        public function notificacao(){
            if (isset($_POST['nome_notif']) && isset($_POST['email_notif']) && isset($_POST['tipo_notif_1'])){

                # Cria a conexão com o banco de dados
                $mysqli = new MySQL();

                # Puxa as variáveis do POST
                $nome = $mysqli->scape($_POST['nome_notif']);
                $email = $mysqli->scape($_POST['email_notif']);
                $tipo_1 = $_POST['tipo_notif_1'];
                $tipo_2 = $_POST['tipo_notif_2'];
                $tipo_3 = $_POST['tipo_notif_3'];

                # Procura se a pessoa já está no banco de dados
                $sql_code = "SELECT id_pessoa as id FROM pessoas WHERE nome_pessoa = '$nome' AND email_pessoa = '$email'";
                $sql_query = $mysqli->executar($sql_code);
                $sql_query_qrd = $sql_query->num_rows;

                if ($sql_query_qrd == 1){
                    # Se a pessoa já está no banco apenas a notificação é inserida
                    $id_pessoa = $sql_query->fetch_assoc()['id'];
                    $sql_code = "INSERT INTO notificacoes (`get_id_pessoa`, `get_id_genero_1`, `get_id_genero_2`, `get_id_genero_3`)
                                 VALUES ($id_pessoa, $tipo_1, $tipo_2, $tipo_3)";
                    $mysqli->executar($sql_code);
                }
                else{
                    # Inserindo a pessoa
                    $sql_code = "INSERT INTO pessoas (`nome_pessoa`, `email_pessoa`) VALUES ('$nome', '$email')";
                    $mysqli->executar($sql_code);

                    # Busca o id da pesoa que foi inserida
                    $sql_code = "SELECT id_pessoa as id FROM pessoas WHERE nome_pessoa = '$nome' AND email_pessoa = '$email'";
                    $sql_query = $mysqli->executar($sql_code);
                    $id_pessoa = $sql_query->fetch_assoc()['id'];

                    # Insere a notificação
                    $sql_code = "INSERT INTO notificacoes (`get_id_pessoa`, `get_id_genero_1`, `get_id_genero_2`, `get_id_genero_3`)
                                 VALUES ($id_pessoa, $tipo_1, $tipo_2, $tipo_3)";
                    $mysqli->executar($sql_code);

                }

                # Fecha a conexão com o banco
                unset($mysqli);
            }
        }
    }
?>