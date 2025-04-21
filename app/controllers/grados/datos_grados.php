<?php

$sql_grados = "SELECT * FROM grados as gra inner join niveles as niv on gra.nivel_id = niv.id_nivel 
where gra.estado = '1' and id_grados = '$id_grado' ";
$query_grados = $pdo->prepare($sql_grados);
$query_grados->execute();
$grados = $query_grados->fetchAll(PDO::FETCH_ASSOC);

foreach ($grados as $grado) {
    $nivel_id = $grado['nivel_id'];
    $curso = $grado['curso'];
    $grupo = $grado['grupo'];
    $nivel = $grado['nivel'];
    $turno = $grado['turno'];
    $fyh_creacion = $grado['fyh_creacion'];
    $estado = $grado['estado'];

}
