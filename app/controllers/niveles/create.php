<?php

include ('../../../app/config.php');

$gestion_id = $_POST['gestion_id'];
$nivel = $_POST['nivel'];
$turno = $_POST['turno'];

// Validar que no exista ya un nivel con el mismo nombre y turno
$consulta = $pdo->prepare('SELECT COUNT(*) FROM niveles WHERE nivel = :nivel AND turno = :turno AND gestion_id = :gestion_id AND estado = 1');
$consulta->bindParam(':nivel', $nivel);
$consulta->bindParam(':turno', $turno);
$consulta->bindParam(':gestion_id', $gestion_id);
$consulta->execute();
$existe = $consulta->fetchColumn();

if ($existe > 0) {
    session_start();
    $_SESSION['mensaje'] = "Ya existe un nivel con el mismo nombre y turno en esta gestión.";
    $_SESSION['icono'] = "error";
    header('Location:'.APP_URL."/admin/niveles/create.php");
    exit();
}

$sentencia = $pdo->prepare('INSERT INTO niveles
(gestion_id,nivel,turno, fyh_creacion, estado)
VALUES ( :gestion_id,:nivel,:turno,:fyh_creacion,:estado)');

$sentencia->bindParam(':gestion_id',$gestion_id);
$sentencia->bindParam(':nivel',$nivel);
$sentencia->bindParam(':turno',$turno);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado_de_registro);

if($sentencia->execute()){
    echo 'success';
    session_start();
    $_SESSION['mensaje'] = "Se registro el nivel de la manera correcta en la base de datos";
    $_SESSION['icono'] = "success";
    header('Location:'.APP_URL."/admin/niveles");
//header('Location:' .$URL.'/');
}else{
    echo 'error al registrar a la base de datos';
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo registrar en la base datos, comuniquese con el administrador";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
}