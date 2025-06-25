<?php
include("../model/conn.php");

if (!empty($_GET["id"])) {
    $id = $_GET["id"];

    $sql = $conn->query("DELETE FROM comments WHERE id = $id");

    if ($sql === TRUE) {
        header("Location: ../index.php?deleted=1");
        exit;
    } else {
        echo "<div class='alert alert-danger text-center mt-3'>Error al borrar el comentario</div>";
    }
} else {
    echo "<div class='alert alert-warning text-center mt-3'>ID no válido</div>";
}
?>
