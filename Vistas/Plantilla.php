<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>MacarenaPos</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">



   <!-- icono de reemplazo de Xamp-->
    <link rel="icon" href="Vistas/img/Plantilla/icono-negro.png">
    
   



  <!-- PLUGIN DE CSS -->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="Vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="Vistas/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="Vistas/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="Vistas/dist/css/AdminLTE.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins-->

  <link rel="stylesheet" href="Vistas/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- PLUGIN DE JAVASCRIPT -->
  
 <!-- jQuery 3 -->
 <script src="Vistas/bower_components/jquery/dist/jquery.min.js"></script>

 <!-- Bootstrap 3.3.7 -->
 <script src="Vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

 <!-- SlimScroll 
 <script src="Vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>-->

 <!-- FastClick -->
 <script src="Vistas/bower_components/fastclick/lib/fastclick.js"></script>

 <!-- AdminLTE App -->
 <script src="Vistas/dist/js/adminlte.min.js"></script>

 <!-- AdminLTE for demo purposes -->
 <script src="Vistas/dist/js/demo.js"></script>

 <script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
 </script>
</head>

  <!-- CUERPO DEL DOCUMENTO -->


<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">

  <?php
   //Login de Inicio-->
  if (isset($_SESSION["IniciarSesion"])&&($_SESSION["IniciarSesion"]=="ok")){
    ////////////////////////////////////////////////////////////////////////////
    echo '<div class="wrapper">';

    //CABEZA-->

   include "Modulo/Cabezote.php";

   //MENU-->
   include "Modulo/Menu.php ";
   ///CONTENIDO-->
   //include "Modulo/Inicio.php";

   if(isset($_GET["ruta"])){

     if($_GET["ruta"]=="Inicio" ||
     $_GET["ruta"]=="Usuarios" ||
     $_GET["ruta"]=="Categoria"||
     $_GET["ruta"]=="Producto"||
     $_GET["ruta"]=="Cliente"||
     $_GET["ruta"]=="Venta"||
     $_GET["ruta"]=="Crear-Venta"||
     $_GET["ruta"]=="Reporte"){

       include "Modulo/".$_GET["ruta"].".php";

     }else{
       include "Modulo/404.php";
     }

   }else{
    include "Modulo/Inicio.php";
   }

   ///FOOTER-->
    include "Modulo/Footer.php";

    echo '</div>';



  

  }else{
    include "Modulo/Login.php";

    //login 014 siguiente
  }
  ?>
<!-- ./wrapper -->
</body>
</html>
