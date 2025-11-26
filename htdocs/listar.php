<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}

include("./header.php");
include("./logica/db.php");

$usuarios = $conn->query("SELECT * FROM usuarios");
?>

<h4 class="blue-text">Usuarios Registrados</h4>

<div class="right-align" style="margin-bottom:20px;">
    <a href="./registro.php" class="btn blue-grey darken-4">
        <i class="material-icons left">person_add</i>Registro
    </a>
</div>

<?php if ($usuarios->num_rows > 0): ?>
    <div style="overflow-x: auto; width: 100%;">
        <table class="highlight centered">
            <thead class="blue-grey darken-1 white-text">
                <tr>
                    <th style="width: 70px;">ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($row = $usuarios->fetch_assoc()) { ?>
                    <tr>
                        <td><input type="text" value="<?= $row['id'] ?>" disabled></td>
                        <td><input type="text" id="nombre-<?= $row['id'] ?>" value="<?= $row['nombre'] ?>" disabled></td>

                        <td>
                            <input type="text"
                                id="email-<?= $row['id'] ?>"
                                value="<?= $row['email'] ?>"
                                disabled
                                maxlength="150"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                title="Ingresa un email válido.">
                        </td>

                        <td>
                            <input type="text" 
                                id="telefono-<?= $row['id']; ?>" 
                                value="<?= $row['telefono']; ?>" 
                                disabled 
                                maxlength="10"
                                pattern="[0-9]{10}"
                                title="Solo 10 dígitos.">
                        </td>

                        <td id="acciones-<?= $row['id'] ?>">
                            <button class="btn-small blue" onclick="editar(<?= $row['id'] ?>)">
                                <i class='material-icons'>edit</i>
                            </button>

                            <a href='./logica/delete.php?id=<?= $row['id'] ?>'
                                class='btn-small red'
                                onclick="return confirm('¿Eliminar usuario?');">
                                <i class='material-icons'>delete</i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>    
    </div>
<?php else: ?>
    <div class="card-panel grey lighten-4 center black-text">
        No hay usuarios registrados.
    </div>
<?php endif; ?>

<br>

<script>
function editar(id) {
    document.getElementById("nombre-" + id).disabled = false;
    document.getElementById("email-" + id).disabled = false;
    document.getElementById("telefono-" + id).disabled = false;

    document.getElementById("acciones-" + id).innerHTML = `
        <button class="btn-small green" onclick="aceptar(${id})">
            <i class='material-icons'>check</i>
        </button>
        <button class="btn-small grey" onclick="cancelar()">
            <i class='material-icons'>close</i>
        </button>
    `;
}

function cancelar() {
    location.reload();
}

function aceptar(id) {
    let nombre = document.getElementById("nombre-" + id).value;
    let email = document.getElementById("email-" + id).value.toLowerCase(); // Convierte todo a minúsculas.
    let telefono = document.getElementById("telefono-" + id).value;

    window.location = "./logica/update.php?id=" + id + "&nombre=" + nombre + "&email=" + email + "&telefono=" + telefono;
}
</script>

<?php include("./footer.php"); ?>