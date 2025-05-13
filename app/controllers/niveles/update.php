<?php


include ('../../../app/config.php');

$id_nivel = $_POST['id_nivel'];
$gestion_id = $_POST['gestion_id'];
$nivel = $_POST['nivel'];
$turno = $_POST['turno'];

// Validar que no exista ya un nivel con el mismo nombre y turno (excepto el actual)
$consulta = $pdo->prepare('SELECT COUNT(*) FROM niveles WHERE nivel = :nivel AND turno = :turno AND gestion_id = :gestion_id AND id_nivel != :id_nivel AND estado = 1');
$consulta->bindParam(':nivel', $nivel);
$consulta->bindParam(':turno', $turno);
$consulta->bindParam(':gestion_id', $gestion_id);
$consulta->bindParam(':id_nivel', $id_nivel);
$consulta->execute();
$existe = $consulta->fetchColumn();

if ($existe > 0) {
    session_start();
    $_SESSION['mensaje'] = "Ya existe un nivel con el mismo nombre y turno en esta gestión.";
    $_SESSION['icono'] = "error";
    header('Location:'.APP_URL."/admin/niveles/edit.php?id=".$id_nivel);
    exit();
}

$sentencia = $pdo->prepare('UPDATE niveles
 SET gestion_id=:gestion_id,
     nivel=:nivel,
     turno=:turno,
     fyh_actualizacion=:fyh_actualizacion
WHERE id_nivel=:id_nivel ');

$sentencia->bindParam(':gestion_id',$gestion_id);
$sentencia->bindParam(':nivel',$nivel);
$sentencia->bindParam(':turno',$turno);
$sentencia->bindParam('fyh_actualizacion',$fechaHora);
$sentencia->bindParam('id_nivel',$id_nivel);

if($sentencia->execute()){
    echo 'success';
    session_start();
    $_SESSION['mensaje'] = "Se actualizó el nivel de la manera correcta en la base de datos";
    $_SESSION['icono'] = "success";
    header('Location:'.APP_URL."/admin/niveles");
//header('Location:' .$URL.'/');
}else{
    echo 'error al registrar a la base de datos';
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo actualizar en la base datos, comuniquese con el administrador";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}