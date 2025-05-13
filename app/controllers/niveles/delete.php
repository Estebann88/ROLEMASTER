<?php

include ('../../../app/config.php');

$id_nivel = $_POST['id_nivel'];


$sentencia = $pdo->prepare("DELETE FROM niveles where id_nivel=:id_nivel ");

$sentencia->bindParam('id_nivel',$id_nivel);

try {
    if($sentencia->execute()){
        session_start();
        $_SESSION['mensaje'] = "Se elimino los datos del nivel de la manera correcta en la base de datos";
        $_SESSION['icono'] = "success";
        echo '<script>window.location.href = "'.APP_URL.'/admin/niveles";</script>';
        exit();
    }else{
        session_start();
        $_SESSION['mensaje'] = "No se puede eliminar este nivel porque tiene grados asociados. Elimine o reasigne los grados antes de intentar borrar el nivel.";
        $_SESSION['icono'] = "error";
        echo '<script>window.location.href = "'.APP_URL.'/admin/niveles";</script>';
        exit();
    }
} catch (PDOException $e) {
    if ($e->getCode() == '23000') {
        session_start();
        $_SESSION['mensaje'] = "No se puede eliminar este nivel porque tiene grados asociados. Elimine o reasigne los grados antes de intentar borrar el nivel.";
        $_SESSION['icono'] = "error";
        echo '<script>window.location.href = "'.APP_URL.'/admin/niveles";</script>';
        exit();
    } else {
        throw $e;
    }
}
