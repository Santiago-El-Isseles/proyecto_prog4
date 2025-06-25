<?php
include("model/conn.php");

$id = $_GET['edit'] ?? null;
if (!$id) {
    echo "<div class='alert alert-danger text-center mt-3'>ID no válido.</div>";
    exit;
}
$sql = $conn->query("SELECT * FROM comments WHERE id = $id");
$datos = $sql->fetch_object();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Comentario</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white d-flex flex-column min-vh-100">
<div class="container mt-5 flex-grow-1">
    <form method="POST" action="controller/edit_comment.php" class="col-md-5 mx-auto border border-warning p-4 rounded bg-dark">
        <h3 class="text-center text-warning mb-4">Editar Comentario</h3>

        <input type="hidden" name="id" value="<?= $datos->id ?>">

        <div class="mb-3">
            <label class="form-label">Nombre y Apellido</label>
            <input type="text" name="nombreyapellido" class="form-control bg-dark text-white border-light" value="<?= $datos->nombreyapellido ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Correo</label>
            <input type="email" name="email" class="form-control bg-dark text-white border-light" value="<?= $datos->email ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nota</label>
            <textarea name="nota" class="form-control bg-dark text-white border-light" rows="3" required><?= $datos->nota ?></textarea>
        </div>

        <div class="text-center">
            <button type="submit" name="btnupdate" class="btn btn-warning">Actualizar</button>
            <a href="index.php" class="btn btn-secondary ms-2">Cancelar</a>
        </div>
    </form>

</div>
    <footer class="py-4 bg-black text-light mt-auto">
            <div class="container">
                <p>&copy; 2025 El Dark Souls. Todos los derechos reservados a Santiago Suarez.</p>
            </div>
        </footer>
</body>
</html>
