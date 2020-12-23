<?php
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>PROYECTO</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="light">
</head>
<body class="bg-light">
<div class="container">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-light" style="background-color: #e3f2fd">
                <div class="container-fluid">
                    ***
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php
            echo "<li><a href='index.php?BIENVENIDO'>Inicio</a></li>";
            switch ($_SESSION["tipo"]){
                case "profesor":
                    echo "Profesor 
                            <li><a href='#'>Ver cursos a Cargo</a></li>";
                    break;
                case "estudiante":
                    echo "Estudiante 
                            <li><a href='#'>Ver Notas</a></li>
                            <li><a href='#'>Matricula</a></li>";
                    break;
                case "administrador":
                    echo "Administrador 
                            <li><a href='index.php?Crear-Usuarios'>Crear Usuarios</a></li>
                            <li><a href='index.php?Crear-Plan-De-Estudios'>Crear Plan de Estudios</a></li>
                            <li><a href='index.php?Asignar-Cursos'>Asignar Cursos</a></li>";
                    break;
            }
            echo "<li><a href='logout.php'>Salir</a></li>";

            ?>
        </div>

        <div class="col-9">