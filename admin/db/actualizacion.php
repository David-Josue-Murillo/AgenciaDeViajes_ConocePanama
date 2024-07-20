<?php

include 'conexion.php';

$sql = "UPDATE `tipo_usuarios` SET `tipo_usuario` = 'ROOT' WHERE `tipo_usuarios`.`usuario_id` = 1;";
if($conexion->query($sql) === TRUE){
    echo "Cambio de id exitoso<br>";
}

$sql = "UPDATE tipo_usuarios SET tipo_usuario = 'Administrador' WHERE tipo_usuarios.usuario_id = 2;";
if($conexion->query($sql)){
    echo "Cambio de id exitoso<br>";
}

/*$sql = "UPDATE `tipo_usuarios` SET `usuario_id` = '1' WHERE `tipo_usuarios`.`usuario_id` = 2;";
if($conexion->query($sql)){
    echo "Cambio de id exitoso<br>";
}*/


header('Location: ../../index.php');
exit();