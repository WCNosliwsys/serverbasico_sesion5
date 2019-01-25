<?php
$con = new mysqli('localhost', 'id8562485_sistema', '1234567890', 'id8562485_base1');
if ($con->connect_errno) {
echo 'Error al conectar base de datos: ', $con->connect_error;
exit();
}
$nombre = htmlspecialchars($_GET['nombre']);
$apellido = htmlspecialchars($_GET['apellido']);
$direccion = htmlspecialchars($_GET['direccion']);
$telefono = htmlspecialchars($_GET['telefono']);
$sexo = $_GET['sexo'];
$sql = $con->prepare('INSERT INTO Persona ( Nombre, Apellidos, Sexo, celular, Domicilio) VALUES (?, ?, ?,?,?)');
$sql->bind_param('ssiss', $nombre, $apellido,$sexo, $telefono,$direccion);
$sql->execute();
echo 'OK\n';
;
$con->close();
?>