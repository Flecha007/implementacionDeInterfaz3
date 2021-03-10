<?php

if (isset($_POST['registro'])) {
$nom= trim($_POST["nombre"]);
$nomus= trim($_POST["usuario"]);
$pass= trim($_POST["password"]);
$ci= trim($_POST["ci"]);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://localhost/API/postUs.php");

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "nombre=$nom&numdocumento=$ci&nomusuario=$nomus&password=$pass");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$remote_server_output = curl_exec ($ch);

curl_close ($ch);
if (print_r($remote_server_output)){
    echo "<script>alert('REGISTRO CORRECTO!');window.location='/ApiResPhp/Usuarios.php'</script>";
}
}

?>