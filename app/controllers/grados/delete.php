<?php

include ('../../../app/config.php');

$id_grado = $_POST['id_grado'];

$sentencia = $pdo->prepare("DELETE FROM grados WHERE id_grados=:id_grado ");
$sentencia->bindParam('id_grado', $id_grado);

try {
    if($sentencia->execute()){
        session_start();
        $_SESSION['mensaje'] = "Se eliminó el grado correctamente de la base de datos";
        $_SESSION['icono'] = "success";
        echo '<script>window.location.href = "'.APP_URL.'/admin/grados";</script>';
        exit();
    }else{
        session_start();
        $_SESSION['mensaje'] = "No se pudo eliminar el grado. Intente nuevamente o contacte al administrador.";
        $_SESSION['icono'] = "error";
        echo '<script>window.location.href = "'.APP_URL.'/admin/grados";</script>';
        exit();
    }
} catch (PDOException $e) {
    session_start();
    $_SESSION['mensaje'] = "No se pudo eliminar el grado. Puede que tenga dependencias asociadas.";
    $_SESSION['icono'] = "error";
    echo '<script>window.location.href = "'.APP_URL.'/admin/grados";</script>';
    exit();
}
