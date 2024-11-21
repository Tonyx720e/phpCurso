<?php
$nombre = "Tony";
$isDev = true;
if(true){
    $isDev = "Si es desarrollador";
}else{
    $isDev = "No es desarollado y es quedado";
}
$edad = "34";
var_dump($nombre);
var_dump($isDev);
var_dump($edad);
$output = "<script> alert('hola')</script> eres desarrollador? <br />  ";
const CONEXION = "db";
?>
<h1>
    <?= "hola " 
    . $nombre 
    . " $output"
    . $isDev
    . " y su edad es "
    . $edad
    . " Tiene una conexio de "
    . CONEXION
    ?>
</h1>

<ol>
    <ul><?= $isDev ?></ul>
    <ul><?= $edad ?></ul>
</ol>
<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>