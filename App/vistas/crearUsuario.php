<?php
    declare(strict_types=1);
    use App\Controladores\ControladorUsuario;
    include_once "app/vistas/layout/header.php";
?>
<h1>CREAR USUARIO</h1>
<form method="post" action="index.php?guardar-usuario">
    <div class="container">
    <input class="form-control mb-2" type="text" name="Nombres" placeholder="Ingrese Nombres">
    <input class="form-control mb-2" type="text" name="Apellidos" placeholder="Ingrese Apellidos">
    <input class="form-control mb-2" type="number" name="Codigo" placeholder="Ingrese Codigo y DNI">
    <input class="form-control mb-2" type="password" name="Password" placeholder="Ingrese Contraseña">
    <select class="form-control mb-2" name="Tipo">
        <option value="Alumno">Alumno</option>
        <option value="Docente">Docente</option>
        <option value="Administrador">Administrador</option>
    </select>
    <input class="btn btn-primary" type="submit" name="submit" value="Guardar">
    </div>
</form>
<?php
if(isset($_POST["submit"])){
    $Nombres = $_POST["Nombres"];
    $Apellidos = $_POST["Apellidos"];
    $Codigo = (int)$_POST["Codigo"];
    $Password = $_POST["Password"];
    $Tipo = $_POST["Tipo"];

    $controladorUsuario = new ControladorUsuario();
    echo $controladorUsuario->crearUsuario($Nombres, $Apellidos, $Codigo, $Password, $Tipo);
}
include_once "app/vistas/layout/footer.php";
