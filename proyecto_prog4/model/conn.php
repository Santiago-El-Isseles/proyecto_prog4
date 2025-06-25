<?php
$conn = new mysqli("localhost", "root", "", "ds");

if ($conn->connect_error) { // 
    die("Conexion fallida: " . $conn->connect_error);
}

$conn ->set_charset("utf8");
?>