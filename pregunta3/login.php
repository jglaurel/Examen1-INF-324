<?php
$con = mysqli_connect("localhost","root","","mibasejoselaurel");
//include "conexion.php";
if(isset($_GET['usuario'])){
    
    $sql= "SELECT * from  acceso xa, persona  xp where xa.ci=xp.ci and xa.usuario='".$_GET['usuario']."' and xa.password='".$_GET['password']."'";
    $resultado=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    if($row==null){
        header("Location: index.php");
        die();
        mysqli_close($con);
    }else{
        session_start();
        $_SESSION["usuario"]=$_GET['usuario'];
        $_SESSION["password"]=$_GET['passw'];
        $_SESSION["nombre"]=$row['nombre'];
        //tiempo ahora
        $_SESSION["timeout"] = time();
        // Establecer tiempo de vida de la sesión en segundos(10min)
        $inactividad = 600;
        // Comprobar si $_SESSION["timeout"] está establecida
        if(isset($_SESSION["timeout"])){
        // Calcular el tiempo de vida de la sesión 
            $sessionTTL = time() - $_SESSION["timeout"];
            if($sessionTTL > $inactividad){
                session_destroy();
                header("Location: index.php");
            }
        }
        header("Location: index2.php");
    }
}else{
    header("Location: index.php");
}
?>