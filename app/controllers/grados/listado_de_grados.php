<?php

$sql_grados = "SELECT * FROM grados as gra inner join niveles as niv on gra.nivel_id = niv.id_nivel where gra.estado = '1' ";
$query_grados = $pdo->prepare($sql_grados);
$query_grados->execute();
$grados = $query_grados->fetchAll(PDO::FETCH_ASSOC);