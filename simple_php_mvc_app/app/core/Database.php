<?php
    class Database
    {
        private string $Host = 'localhost';
        private string $Db = 'webshop';
        private string $Username = 'root';
        private string $Password = '';
        private function Connect()
        {
            try {
                $Pdo = new PDO("mysql:host=$this->Host;dbname=$this->Db;charset=utf8;", $this->Username, $this->Password);
                $Pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $Pdo;
            } catch (PDOException $ex) {
                return "Database connection failed. Error: {$ex->getMessage()}";
            }
        }
        public function Query($PreparedQuery = '', $Params = [])
        {
            try {
                $Connection = $this->Connect();
                $Statement = $Connection->prepare($PreparedQuery);
                for($i = 0; $i < count($Params); ++$i) {
                    $Statement->bindParam($i + 1, $Params[$i]);
                }
                $Statement->execute();
                $Data = $Statement->fetchAll();
                $Connection = null;
                return $Data;
            } catch (PDOException $ex) {
                return "Database Query Error: {$ex->getMessage()}";
            }
        }
    }