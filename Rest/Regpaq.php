<?php

if (isset($_POST['registro'])) {
    $nombrep = trim($_POST['nombrepaq']);
    $descp = trim($_POST['desc']);
    $prep = trim($_POST['pre']);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://localhost/API/postPaq.php");

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "nombrepaq=$nombrep&descripcion=$descp&precio=$prep");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$remote_server_output = curl_exec ($ch);

curl_close ($ch);
if (print_r($remote_server_output)){
    echo "<script>alert('REGISTRO CORRECTO!');window.location='/ApiResPhp/Paquetes.php'</script>";
}
}

?>