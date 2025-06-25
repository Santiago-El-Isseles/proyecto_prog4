<?php
include("../model/conn.php");

if (isset($_POST["btnupdate"])) {
    $id = $_POST["id"];
    $nombre = trim($_POST["nombreyapellido"]);
    $email = trim($_POST["email"]);
    $nota = trim($_POST["nota"]);
    $fecha = date("Y-m-d H:i:s");

    if ($nombre && $email && $nota) {
        $update = $conn->query("UPDATE comments SET 
            nombreyapellido = '$nombre',
            email = '$email',
            nota = '$nota',
            fechanota = '$fecha'
            WHERE id = $id
        ");

        if ($update) {
            header("Location: ../index.php?success=1");
            exit;
        } else {
            echo "<div class='alert alert-danger text-center'>Error al actualizar: " . $conn->error . "</div>";
        }
    } else {
        echo "<div class='alert alert-warning text-center'>Todos los campos son obligatorios</div>";
    }
}
?>
