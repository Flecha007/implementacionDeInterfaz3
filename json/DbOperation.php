<?php

    class DbOperation{

        private $con;

        function __construct(){
            require_once dirname(__FILE__).'/DbConnect.php';
            $db = new DbConnect();
            $this->con = $db->connect();
        }

        
        public function show_Data_All(){
           
            $stmt = $this->con->prepare("SELECT `nombre`,`apellidos`,`nrodocumneto`,`correo`,`usuario` FROM `bdprueba`.`usuario` WHERE `id` > 0");
            $stmt->execute();
            $stmt->bind_result($nombre,$apellidos,$nrodocumneto,$correo,$usuario);
            
            $usuarios_JS = array();

            while($stmt->fetch()){
                $temp = array();

                $temp["Nombre"]=utf8_encode($nombre);
                $temp["Apellidos"]=utf8_encode($apellidos);
                $temp["CI"]=utf8_encode($nrodocumneto);
                $temp["Correo"]=utf8_encode($correo);
                $temp["NombreUsuario"]=utf8_encode($usuario);

                array_push($usuarios_JS,$temp);
                
            }

            return $usuarios_JS;
        }

    }

?>