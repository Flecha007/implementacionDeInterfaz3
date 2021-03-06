<?php
 
    class DbConnect
    {
        private $conn;
        
        function __construct(){

        }

        function connect(){
            include_once dirname(__FILE__).'/Constants.php';
            // Conexion MySqli - PDO
            $this->conn = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
            
            if(mysqli_connect_errno()){
                echo "No se pudo conectar.".mysqli_connect_errno();
                return null;
            }else{
                return $this->conn;
            }
            
        }

    }

?>