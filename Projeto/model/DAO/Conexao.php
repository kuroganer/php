<?php
    class Conexao{
        private static $conexao;
        public static function getInstance(){
        if(!isset(self::$conexao)){
            try {
                $options= array(
                    PDO::ATTR_PERSISTENT=>true,
                    PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8;',
                    PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
                );
                self::$conexao = new PDO(
                "mysql:host=localhost;
                dbname=cadastro_C",
                "root",
                "",
                $options
                );
             
            } catch (PDOException $exe) {
                echo "Erro de conexão".$exe->getMessage();
            }
        }
        return self::$conexao;
        }
    }
    $conn=Conexao::getInstance();
   


?>