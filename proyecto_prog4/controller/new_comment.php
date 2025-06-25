<?php
include("model/conn.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["btnEnviar"])) {
    $nombre     = trim($_POST["nombreyapellido"] ?? '');
    $correo     = trim($_POST["correo"] ?? '');
    $comentario = trim($_POST["comentario"] ?? '');
    $fecha      = date("d/m/Y H:i:s");

    if ($nombre !== '' && $correo !== '' && $comentario !== '') {
        $stmt = $conn->prepare("INSERT INTO comments (nombreyapellido, email, nota, fechanota) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nombre, $correo, $comentario, $fecha);

        //lo que hay a partir de aqui es una ALTERNATIVA que no me da error, el metodo explicado en clases me estaba dando errores (el POST se bugeaba por alguna razon)
        if ($stmt->execute()) {
            echo "<script>
                alert('Comentario enviado correctamente');
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href.split('?')[0]);
                }
            </script>";
        } else {
            echo "<script>alert('Error al registrar: " . $stmt->error . "');</script>";
        }
    } else {
        echo "<script>alert('Todos los campos son obligatorios.');</script>";
    }
}
?>