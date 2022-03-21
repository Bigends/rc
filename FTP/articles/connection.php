<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ryzencode";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}