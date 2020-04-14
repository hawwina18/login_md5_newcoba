<?php
define('DB_USER', "root"); 
define('DB_PASSWORD', "salsabilla");
define('DB_DATABASE', "login");
define('DB_SERVER', "localhost");
define('DB_Port', 3306);
 
$koneksi = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE,DB_Port);
 
// Check connection
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
	echo "Koneksi Berhasil";
}
 
?>
