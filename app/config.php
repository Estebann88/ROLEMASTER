<?php

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','rolemaster');

define('APP_NAME','ROLEMASTER');
define('APP_URL','http://localhost/rolemaster');
define('KEY_API_MAPS','');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
}catch (PDOException $e){
    print_r($e);
    echo "error no se pudo conectar a la base de datos";
}

date_default_timezone_set("America/Bogota");
$fechaHora = date('Y-m-d H:i:s');

$fecha_actual = date('Y-m-d');
$dia_actual = date('d');
$mes_actual = date('m');
$ano_actual = date('Y');

$estado_de_registro = '1';



