<?php
namespace App\Controladores;
include_once "includes/autoload.php";

class ControladorFacultad
{
    public function guardar(String $Nombre): void{
        $Facultad = new Facultad();
        $Facultad->setNombre($Nombre);
        $Filas = $Facultad->insertar();

        if($Filas!=0){
            echo "Facultad guardada";
        }else{
            echo "Error: No se pudo guardar la informacion";
        }
    }
}