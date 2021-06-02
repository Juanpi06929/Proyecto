<?php
class ControladorUsuario{

    //Ingreso de Usuario

    public function CrtIngresoUsuario(){
        if(isset($_POST["ingresoUsuario"])){
            if (preg_match('/^[a-zA-Z0-9]+$/',$_POST["ingresoUsuario"]) && preg_match('/^[a-zA-Z0-9]+$/',$_POST["ingresoPassword"])){
                $tabla="usuarios";
                $item="usuario";
                $valor=$_POST["ingresoUsuario"];
                $respuesta=ModeloUsuarios::MdlMostrarUsuarios($tabla,$item,$valor);
                if($respuesta["usuario"]==$_POST["ingresoUsuario"] && $respuesta["password"]==$_POST["ingresoPassword"]){
                    
                    $_SESSION["IniciarSesion"] = "ok";
                
                    echo '<script> 
                        window.location="Inicio";
                        console.log("llego aqui");
                        </script>';

                }else{
                    echo '<br><div class="alert alert-danger">Error al ingresar, usuario o contraseña incorrectos</div>';
                }
            }
        }
    }

}
