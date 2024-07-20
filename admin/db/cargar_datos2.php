<?php

include_once 'conexion.php';

// Consulta la creación y verificación de la tabla (si existen)
//$nombre_db = 'u973323379_David';
$name_db = 'conoce_panama';

/* ************************************************************************** */
/*                            Tipos de Usuarios                               */
/* ************************************************************************** */

$sql = "INSERT INTO tipo_usuarios (usuario_id, tipo_usuario) VALUES
(3, 'Usuario'),
(2, 'Administrador'),
(1, 'ROOT');";

if ($conexion->query($sql)) {
    echo "Datos de tipos de usuarios insertados correctamente<br>";
}

/* ************************************************************************** */
/*                            Indices de Tablas                               */
/* ************************************************************************** */

$sql = "ALTER TABLE fecha_paquetes ADD KEY fk_paquete (`id_destino`);";
if($conexion->query($sql)){
    echo "Clave Foranea agregada con exito<br>";
}

$sql = "ALTER TABLE guias ADD KEY fk_designacion (`designacion`);";
if($conexion->query($sql)){
    echo "Clave Foranea agregada con exito<br>";
}

$sql = "ALTER TABLE paquetes ADD KEY fk_destinos_paquetes (`id_destino`);";
if($conexion->query($sql)){
    echo "Clave Foranea agregada con exito<br>";
}

$sql = "ALTER TABLE reservas ADD KEY fk_usuario_reservas (`id_usuario`) USING BTREE,
      ADD KEY id_paquete_reservas (`id_paquete`);";
if($conexion->query($sql)){
    echo "Clave Foranea agregada con exito<br>";
}

$sql = "ALTER TABLE usuarios ADD KEY fk_tipo_usuario (`tipo_usuario`);";
if($conexion->query($sql)){
    echo "Clave Foranea agregada con exito<br>";
}


/* ************************************************************************** */
/*                     Modificar valores de autoincremento                    */
/* ************************************************************************** */

$sql = "ALTER TABLE destinos MODIFY id_destino int NOT NULL AUTO_INCREMENT;";
if($conexion->query($sql)){
    echo "Clave Foranea agregada con exito<br>";
}

$sql = "ALTER TABLE guias MODIFY guia_id int NOT NULL AUTO_INCREMENT;";
if($conexion->query($sql)){
    echo "Clave Foranea agregada con exito<br>";
} 

$sql = "ALTER TABLE paquetes MODIFY id_paquete int NOT NULL AUTO_INCREMENT;";
if($conexion->query($sql)){
    echo "Clave Foranea agregada con exito<br>";
}

$sql = "ALTER TABLE reservas MODIFY id_reserva int NOT NULL AUTO_INCREMENT;";
if($conexion->query($sql)){
    echo "Clave Foranea agregada con exito<br>";
}

$sql = "ALTER TABLE usuarios MODIFY id_usuario int NOT NULL AUTO_INCREMENT;";
if($conexion->query($sql)){
    echo "Clave Foranea agregada con exito<br>";
}


/* ************************************************************************** */
/*                            LLaves foranes                                  */
/* ************************************************************************** */

$sql = "ALTER TABLE fecha_paquetes ADD CONSTRAINT fk_paquete FOREIGN KEY (`id_destino`) REFERENCES paquetes (`id_paquete`) ON DELETE RESTRICT ON UPDATE RESTRICT;";
if($conexion->query($sql)){
    echo "Clave Foranea agregada con exito<br>";
}

$sql = "ALTER TABLE guias ADD CONSTRAINT fk_designacion FOREIGN KEY (`designacion`) REFERENCES destinos (`id_destino`) ON DELETE RESTRICT ON UPDATE RESTRICT;";
if($conexion->query($sql)){
    echo "Clave Foranea agregada con exito<br>";
}

$sql = "ALTER TABLE paquetes ADD CONSTRAINT id_destinos_paquetes FOREIGN KEY (`id_destino`) REFERENCES destinos (`id_destino`) ON DELETE RESTRICT ON UPDATE RESTRICT;";
if($conexion->query($sql)){
    echo "Clave Foranea agregada con exito<br>";
}

$sql = "ALTER TABLE reservas ADD CONSTRAINT id_paquete_reservas FOREIGN KEY (`id_paquete`) REFERENCES paquetes (`id_paquete`) ON DELETE RESTRICT ON UPDATE RESTRICT;";
if($conexion->query($sql)){
    echo "Clave Foranea agregada con exito<br>";
}

$sql = "ALTER TABLE usuarios ADD CONSTRAINT fk_tipo_usuario FOREIGN KEY (`tipo_usuario`) REFERENCES tipo_usuarios (`usuario_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;";
if ($conexion->query($sql)) {
    echo "Llaves foraneas agregadas exitosamente<br>";
}


header('Location: ../../index.php');
exit();
