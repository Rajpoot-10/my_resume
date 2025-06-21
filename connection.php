<?php
$host="localhost";
$username="root";
$password=null;


$connect= new PDO("mysql:host=$host; dbname=portfolio",$username,$password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>