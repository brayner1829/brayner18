<?php
try {
    $servidor = 'localhost';
    $usuario = 'root';
    $password = 'root';
    $bd = 'proyectos';
    
    $coneccion =  mysqli_connect($servidor, $usuario, $password, $bd);
    echo ('coneccion exitosa');
} catch (\Throwable $th) {
    var_dump($th);
}