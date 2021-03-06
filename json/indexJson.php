<?php 	

    require_once 'DbOperation.php';

    $response = array();

                $db = new DbOperation();
                $Datos = $db->show_Data_All();

                $cadena = json_encode($Datos,JSON_PRETTY_PRINT);
                header("Content-Type: application/json; charset=UTF-8");
                echo ($cadena);


                $handler = fopen("objeto.json", "w+");
                fwrite($handler, $cadena);
                fclose($handler);
?>