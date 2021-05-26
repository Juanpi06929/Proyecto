<?php
require_once "Controladores/Plantilla.Controlador.php";
require_once "Controladores/Usuarios.Controlador.php";
require_once "Controladores/Categorias.Controlador.php";
require_once "Controladores/Productos.Controlador.php";
require_once "Controladores/Clientes.Controlador.php";
require_once "Controladores/Ventas.Controlador.php";


require_once "Modelos/Usuarios.Modelo.php";
require_once "Modelos/Categorias.Modelo.php";
require_once "Modelos/Productos.Modelo.php";
require_once "Modelos/Clientes.Modelo.php";
require_once "Modelos/Ventas.Modelo.php";

$Plantilla= new ControladorPlantilla();
$Plantilla->CtrPlantilla();
//
//   carpeta 02 AdminLTE y Modelo-Vista-Controlador ,video ->0.16 Iniciar Session -Parte 2 <-- esto tienes q continuar
//
//
