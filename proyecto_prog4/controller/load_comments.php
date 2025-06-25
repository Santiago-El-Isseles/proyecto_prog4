<?php
include_once("model/conn.php");

$comentarios = [];

$resultado = $conn->query("SELECT * FROM comments ORDER BY fechanota DESC");
if ($resultado) {
    $comentarios = $resultado->fetch_all(MYSQLI_ASSOC);
}
?>