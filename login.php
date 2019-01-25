<?php
define('HOST','localhost');
define('USER','id8562485_sistema');
define('PASS','1234567890');
define('DB','id8562485_base1');
$con = mysqli_connect(HOST,USER,PASS,DB);
$username = $_GET['Usuario'];
$password = $_GET['pass'];
$sql = "select * from Persona where Usuario='$username' and pass='$password'";
$res = mysqli_query($con,$sql);
$check = mysqli_fetch_array($res);
if(isset($check)){
	echo 'success';
}else{
	echo 'failure';
} 
mysqli_close($con);
?>