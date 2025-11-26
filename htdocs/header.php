<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="./css/materialize.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />
</head>

<body>

<nav class="blue-grey darken-4">
    <div class="nav-wrapper container">
            <a id="logo-container" href="./listar.php" class="brand-logo">Sistema</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="./listar.php">Usuarios</a></li>
                <li><a href="./logica/logout.php">Cerrar sesión</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="./listar.php">Usuarios</a></li>
                <li><a href="./logica/logout.php">Cerrar sesión</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
</nav>

<div class="container" style="margin-top: 30px;">