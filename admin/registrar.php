<?php 

include("conexion.php");
if(isset($_POST["registrar"])){
    if(
        strlen($_POST['name'])>=1&&
        strlen($_POST['email'])>= 1&&
        strlen($_POST['direccion'])>= 1&&
        strlen($_POST['telefono'])>=1&&
        strlen($_POST['pass'])>= 1
        ){
            $name=trim($_POST['name']);
            $email=trim($_POST['email']);
            $direccion=trim($_POST['direccion']);
            $telefono=trim($_POST['telefono']);
            $password=trim($_POST['password']);
            $fecha=date("a/m/y");      
            $consulta="INSERT INTO datos(nombre,email,direccion,telefono,contrasenna,fecha)
                VALUES('$name','$email','$direccion','$telefono','$password','$fecha')";   
             $result=mysqli_query($con,$consulta);
             if($result){
             ?>
             <h3 class="success"> Tu registro se a completado</h3>
             <?php
             }else{ 
                ?>
             <h3 class="success">Ocurrio un error</h3>
             <?php
             }
}

}
?>