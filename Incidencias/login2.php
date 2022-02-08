<?php
session_start();
require_once ("./clases/conexion.php");
require_once ("./clases/usuarios/usuario.php");
require_once './clases/trabajador/class_trabajador.php';
require_once './clases/tecnico/class_tecnico.php';

$user = $_POST['user01'];
$pass = $_POST['pass01'];
$clase = new usuario();
$lg = $clase->login($user, $pass);
$claset= new trabajador();
$lgt=$claset->login_trabajador($user, $pass);
$clasetec=new tecnico();
$lgtec=$clasetec->login_tecnico($user, $pass);

$msj = "Usuario o password incorrectos";
if ($user != "" && $pass != "") {
    //usuario
    if ($lg[0]['id_usuario'] != null) {
        $_SESSION['user'] = $lg[0]['razon_social'];
        $_SESSION['id_user'] = $lg[0]['id_usuario'];
          header("location:mantenimiento/trabajadores/vista_trabajadores.php");
        
    } 
    //trabajador
   else if ($lgt[0]['id_trabajador'] != null) {
        $_SESSION['trabajador'] = $lgt[0]['razon_social'];
        $_SESSION['id_trabajador'] = $lgt[0]['id_trabajador'];
        $_SESSION['num_trabajador'] = 1;
        $_SESSION['num_trabajador_terminar'] = 1;
          header("location:mantenimiento/ticket/vista_ticket.php");
    }
    //tecnico
    else if ($lgtec[0]['id_tecnico'] != null) {
        $_SESSION['tecnico'] = $lgtec[0]['razon_social'];
        $_SESSION['id_tecnico'] = $lgtec[0]['id_tecnico'];
        $_SESSION['num_tecnico'] = 1;
        $_SESSION['num_tecnico_dos'] = 1;
          header("location:mantenimiento/tecnico/vista_tecnico_ticket_espera.php");
    }
    
    else {
        $msg = "Mensaje :El usuario o password son incorrectos";
        header("location:login.php?msg=$msg");
    }
} else {
    $msg = "Mensaje :Ingrese su nombre de usuario y password";
    header("location:login.php?msg=$msg");
}
?>

