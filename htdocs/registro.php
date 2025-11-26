<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}

include("./header.php");
?>

<h4 class="blue-text">Registrar Nuevo Usuario</h4>
<br>
<form action="./logica/create.php" method="POST">

    <div class="input-field">
        <input type="text" name="nombre" required>
        <label>Nombre Completo</label>
    </div>

    <div class="input-field">
        <input type="email" name="email" required
            maxlength="150"
            pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
            title="Solo minúsculas, sin acentos y formato válido.">
        <label>Email</label>
    </div>

    <div class="input-field">
        <input type="text" name="telefono" required
            minlength="10" maxlength="10"
            pattern="[0-9]{10}"
            title="Solo 10 caracteres numéricos.">
    <label>Teléfono</label>
    </div>

    <button class="btn green">Registrar</button>
    <a href="./listar.php" class="btn grey">Regresar</a>

</form>

<br>

<?php include("./footer.php"); ?>
