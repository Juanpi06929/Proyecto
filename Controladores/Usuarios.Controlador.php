<?php
class ControladorUsuario{

    //Ingreso de Usuario

    public function CrtIngresoUsuario(){
        if(isset($_POST["ingresoUsuario"])){
            if (preg_match('/^[a-zA-Z0-9]+$/',$_POST["ingresoUsuario"])&preg_match('/^[a-zA-Z0-9]+$/',$_POST["ingresoPassword"])){
                $tabla="usuario";
                $item="usuario";
                $valor=$_POST["ingresoUsuario"];
                $respuesta=ModeloUsuarios::MdlMostrarUsuarios($tabla,$item,$valor);
                var_dump($respuesta);
            }
        }
    }

}
