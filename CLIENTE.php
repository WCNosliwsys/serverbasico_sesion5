<?php
define('HOST','localhost');
define('USER','id8562485_sistema');
define('PASS','1234567890');
define('DB','id8562485_base1');
 
$con = mysqli_connect(HOST,USER,PASS,DB);
 
$sql = "SELECT Cod_persona, Nombre, Apellidos FROM  `Persona` ORDER BY Nombre DESC ";
 
$res = mysqli_query($con,$sql);
/*
echo $sql;
if($res)
	echo 'Consulta correcta';
else
	echo 'Error en la consulta';*/
 
$jsonData = array();
while ($array = mysqli_fetch_array($res)) {
    $row_array['Cod_persona'] = $array['Cod_persona'];
    $row_array['Nombre'] = $array['Nombre'];
    $row_array['Apellidos'] = $array['Apellidos'];
    //$row_array['Sexo'] = $array['Sexo'];
	//$jsonData['puntuaciones'][]=$array;
    array_push($jsonData,$row_array);
}

echo json_encode($jsonData);
 

mysqli_close($con);
?>
