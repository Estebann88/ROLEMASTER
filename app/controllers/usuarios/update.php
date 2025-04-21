<?php

include ('../../../app/config.php');

$id_usuario = $_POST['id_usuario'];
$nombres = $_POST['nombres'];
$rol_id = $_POST['rol_id'];
$email = $_POST['email'];

$password = $_POST['password'];
$password_repet = $_POST['password_repet'];

if($password == ""){

        $sentencia = $pdo->prepare("UPDATE usuarios 
        SET nombres=:nombres,
            rol_id=:rol_id,
            email=:email,
            fyh_actualizacion=:fyh_actualizacion
        WHERE id_usuario=:id_usuario ");

        $sentencia->bindParam(':nombres',$nombres);
        $sentencia->bindParam(':rol_id',$rol_id);
        $sentencia->bindParam(':email',$email);
        $sentencia->bindParam('fyh_actualizacion',$fechaHora);
        $sentencia->bindParam('id_usuario',$id_usuario);

        try{
            if($sentencia->execute()){
                session_start();
                $_SESSION['mensaje'] = "El usuario se ha actualizazdo de manera correcta";
                $_SESSION['icono'] = "success";
                header('Location:'.APP_URL."/admin/usuarios");
            }else {
                session_start();
                $_SESSION['mensaje'] = "No se pudo actualizar correctamente, comuniquese con el administrador";
                $_SESSION['icono'] = "error";
                ?><script>window.history.back();</script><?php
            }
        }catch (Exception $exception){
            session_start();
            $_SESSION['mensaje'] = "Este usuario ya existe";
            $_SESSION['icono'] = "error";
            ?><script>window.history.back();</script><?php
        }


}else{

    if($password == $password_repet){
        //echo "las contraseñas son iguales";
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sentencia = $pdo->prepare("UPDATE usuarios 
        SET nombres=:nombres,
            rol_id=:rol_id,
            email=:email,
            password=:password,
            fyh_actualizacion=:fyh_actualizacion
        WHERE id_usuario=:id_usuario ");

        $sentencia->bindParam(':nombres',$nombres);
        $sentencia->bindParam(':rol_id',$rol_id);
        $sentencia->bindParam(':email',$email);
        $sentencia->bindParam(':password',$password);
        $sentencia->bindParam('fyh_actualizacion',$fechaHora);
        $sentencia->bindParam('id_usuario',$id_usuario);

        try{
            if($sentencia->execute()){
                session_start();
                $_SESSION['mensaje'] = "Se ha registrado el usuario de manera correcta";
                $_SESSION['icono'] = "success";
                header('Location:'.APP_URL."/admin/usuarios");
            }else {
                session_start();
                $_SESSION['mensaje'] = "No se pudo registrar correctamente, comuniquese con el administrador";
                $_SESSION['icono'] = "error";
                ?><script>window.history.back();</script><?php
            }
        }catch (Exception $exception){
            session_start();
            $_SESSION['mensaje'] = "Este usuario ya existe!";
            $_SESSION['icono'] = "error";
            ?><script>window.history.back();</script><?php
        }
    }else{
        echo "las contraseñas no son iguales";
        session_start();
        $_SESSION['mensaje'] = "Las contraseñas introducidas no son iguales";
        $_SESSION['icono'] = "error";
        ?><script>window.history.back();</script><?php
    }
}







