<?php
    if (!isset($_SESSION)){
        session_start();
    }

    class MySQL{
        private $banco;
        private $host;
        private $user;
        private $password;
        private $database;
        
        function __construct() {
            try{
                $this->host = 'localhost';
                $this->user = 'root';
                $this->password = '';
                $this->database = 'futurismo';
                $this->banco = new mysqli($this->host, $this->user, $this->password, $this->database);
        
            } catch (mysqli_sql_exception $e){
                echo $_SESSION['message'] = $e->getMessage();
                // $this->error();
            }
        }

        public function busca($sql_code){
            try{
                $sql_query = $this->banco->query($sql_code);
                return $sql_query;
            } catch (mysqli_sql_exception $e){
                echo $_SESSION['message'] = $e->getMessage();
                // $this->error();
            }
        }

        public function scape($string){
            return $this->banco->real_escape_string($string);
        }

        function __destruct()
        {
            try{
                $this->banco->close();
                unset($this->banco);
            }
            catch (mysqli_sql_exception $e){
                echo $_SESSION['message'] = $e->getMessage();
                // $this->error();
            }
        }

        private function error(){
            require_once(PATH_VIEW . "500.php");
            exit();
        }
    }
?>