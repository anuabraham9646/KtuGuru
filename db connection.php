<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "ktu";

$con = mysqli_connect("$server","$username","$password","$database");
if(mysqli_connect_errno())
{
	echo" mysqli connection not established". mysqli_connect_errno();

}
?>