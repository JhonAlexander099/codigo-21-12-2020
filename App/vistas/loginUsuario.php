<?php
    use App\controladores\ControladorUsuario;

?>
<form method="post" action="index.php?login">
    <input type="text" name="codigo" placeholder="Ingresar Codigo"><br>
    <input type="text" name="pass" placeholder="Ingresar Contraseña"><br>
    <input type="submit" name="submit" value="Login"><br>
</form>
<?php
    if(isset($_POST["submit"])){
        $Codigo = (int) $_POST["codigo"];
        $Password = $_POST["pass"];
        $ControladorUsuario = new ControladorUsuario();
        $ControladorUsuario->login($Codigo, $Password);
    }