<?php
    session_start();

    ini_set('display_errors', true);
    error_reporting(E_ALL);

    date_default_timezone_set('America/Argentina/Buenos_Aires');
    
    $servidor= 'localhost';
    $usuario='root';
    $pass='';
    $db='di';

    $conexion=mysqli_connect($servidor,$usuario,$pass,$db);
    mysqli_set_charset($conexion, 'utf8');