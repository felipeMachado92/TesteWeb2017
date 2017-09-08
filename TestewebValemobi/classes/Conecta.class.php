<?php

/**
 * Classe criada para gerar conexão com o banco de dados
 *
 * @author Felipe
 */
class Conecta {
        private $usuario;
        private $senha;
        private $banco;
        private $servidor;
        private static $pdo;
        
        function __construct() {
            $this->usuario = "root";
            $this->senha = "";
            $this->banco = "testeweb";
            $this->servidor = "localhost";
        }
        
        public function conectar() {
            try{
                if(is_null(self::$pdo)){
                    self::$pdo = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco, $this->usuario, $this->senha);
                }
                return self::$pdo;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }
}
