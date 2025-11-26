<?php
session_start();

if (isset($_SESSION['admin'])) {
    header("Location: listar.php");
    exit();
}

include("./headerIndex.php");
?>

<h4 class="center blue-text">Inicio de Sesión</h4>

<form action="./logica/login.php" method="POST">

    <div class="input-field">
        <input type="text" name="usuario" required>
        <label>Usuario</label>
    </div>

    <div class="input-field">
        <input type="password" name="password" required>
        <label>Contraseña</label>
    </div>

    <button class="btn red-grey">Iniciar sesión</button>

</form>

<br>

<?php include("./footer.php"); ?>
