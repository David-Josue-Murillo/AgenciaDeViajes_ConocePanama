<?php

include_once 'conexion.php';

// Consulta la creación y verificación de la tabla (si existen)
//$nombre_db = 'u973323379_David';
$name_db = 'conoce_panama';

/* ************************************************************************** */
/*                               Usuario ROOT                                 */
/* ************************************************************************** */

$sql = "INSERT INTO usuarios (nombre, apellido, telefono, email, password, tipo_usuario) VALUES ('David', 'Murillo', 64224268, 'dm514821@gmail.com', '123456789', 1);";
$resultado = $conexion->query($sql);

if ($conexion->affected_rows > 0) {
    echo "Datos de usuario insertados correctamente<br>";
}

/* ************************************************************************** */
/*                          Datos del destino                                 */
/* ************************************************************************** */

$sql = "INSERT INTO destinos (id_destino, nombre_destino, direccion, descripcion, ulr_imagen) VALUES
(1, 'Archipielago de las Perlas', 'Panamá', 'Atrévete a disfrutar una estadía inolvidable; ubicada en la Isla Bolaños, al norte del Archipiélago de las Perlas; este destino te transportará a una experiencia tropical nueva. Contempla las aguas turquesas y cristalinas de sus hermosas playas, descansa en sus cabañas privadas de estilo rústico con un toque de modernidad, mirando atardeceres espectaculares como sacados de las mejores escenas del cine.', 'https://lh4.googleusercontent.com/proxy/WnQE2hmrKDqp7ZuD4h87KuoE1s0K9TeWzll8ZI4SAyy9PLIKGHB_jITpDST0YBA1Jssr0uPI8cNo84Qg5l-EmtfG8vvV'),
(2, 'Isla Contadora', 'Panamá', 'Divertido tour pasadía en Isla Contadora con almuerzos, sillas de playa, sombrillas para el sol y traslados ida y vueta en el ferry desde Ciudad de Panamá.', 'https://images.squarespace-cdn.com/content/v1/5efce1f1f1c14550f51a35e4/1626899376270-0STX0GVVPRDPUUXFZ5IR/Alma+de+Viaje+-+Contadora+Panama+-60.jpg'),
(3, 'Isla Taboga', 'Panamá', 'Pasar un día en este lugar es una experiencia inolvidable, con sus hermosas playas y la suave brisa del mar te sentirás en un paraíso sin lugar a dudas. Este destino te proporciona todo lo necesario para que disfrutes completamente tu día de la forma más increíble posible, tú solo debes disfrutar del destino que de lo demás nos encargamos nosotros.\r\n\r\nRelájate en las preciosas playas de la zona, disfrutando del sol y el mar tanto como quieras; ya sea una salida romántica, unas vacaciones en familia o simplemente un día personal para consentirte, este destino es ideal para cualquier ocasión en la que desees pasar un día extraordinario cerca al mar. No esperes más y reserva ahora en este maravilloso destino.', 'https://viajerosocultos.com/wp-content/uploads/2021/09/7470442874_dd98dfc883_k.jpg'),
(4, 'Parque Nacional Soberanía', 'Panamá', 'Su aventura comienza con una caminata por el bosque secundario maduro que rodea el Canal\r\nde Panamá, en uno de los varios senderos que el Parque Nacional Soberanía tiene para ofrecer.\r\nLuego, continuará su búsqueda de vida silvestre mientras se embarca en un paseo en bote de\r\n2 horas por el lago Gatún. Monos aulladores, cocodrilos, perezosos y tucanes son solo algunas de las especies que podrían cruzarse en tu camino durante esta divertida e interesante aventura.\r\nPrecio Incluye: Guía interpretativo certificado por la ATP, lancha techada con salvavidas,\r\ntransporte desde y hacia la ciudad de Panamá.', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/34/c7/cd/photo0jpg.jpg?w=1200&h=-1&s=1'),
(5, 'Playa Blanca', 'Penonome', 'Elegantes y modernos apartamentos tipo Suites y Master Suites, completamente equipados, con cocina integrada, balcones con hermosas vistas hacia la piscina o hacia el mar y acceso a la piscina de agua salada más grande de Centroamérica.', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/484926801.jpg?k=58f4c51b5be21e39fd863931e94a44247d63b7e5d4ca2798ba2bc68b08d26532&o=&hp=1'),
(6, 'Azul Paradise', 'Bocas del toro', 'El Azul Paradise está situado junto a la playa de Bocas del Toro, alberga restaurante y ofrece bungalows sobre el agua con vistas al océano. Proporciona desayuno, almuerzo y cena por un suplemento, así como WiFi gratuita. Los bungalows ecológicos de este complejo disponen de balcón, TV Apple y baño. El Azul Paradise cuenta con jardín, bar tiki, club house, servicio de entrega de comestibles, salón compartido e instalaciones para reuniones. En el hotel o en los alrededores, se pueden practicar varias actividades, como pesca, senderismo, buceo, surf, yoga, kayak y pádel. El establecimiento ofrece lecciones y también puede organizar excursiones. El parque nacional marino de Isla Bastimentos se encuentra a 2 km. Además, el complejo se halla a 4 km de Punta Vieja.', 'https://pty.life/wp-content/uploads/2017/11/Club-Elsewhere-Stories-for-and-by-the-world-edited-by-Panama-Travel-writer-Rosie-Bell-Bocas-del-Toro-Panama-Tips-Azul-Paradise-Resort-Bocas-del-Toro-4min.jpg');";

if ($conexion->query($sql)) {
    echo "Datos de destino insertados correctamente<br>";
}

/* ************************************************************************** */
/*                            Fechas Paquetes                                 */
/* ************************************************************************** */

$sql = "INSERT INTO fecha_paquetes (id_fecha_paquete, fecha_inicio, fecha_fin, id_destino) VALUES
(1, '2024-08-01', '2024-07-05', 1),
(2, '2024-07-02', '2024-07-10', 1),
(3, '2024-07-03', '2024-07-08', 2),
(4, '2024-07-10', '2024-07-14', 2),
(5, '2024-07-03', '2024-07-06', 3),
(6, '2024-07-04', '2024-07-10', 3),
(7, '2024-07-04', '2024-07-05', 4),
(8, '2024-07-05', '2024-07-06', 4);";

if ($conexion->query($sql)) {
    echo "Datos de fechas de paquetes insertados correctamente<br>";
}

/* ************************************************************************** */
/*                            Guias Turisticas                                */
/* ************************************************************************** */

$sql = "INSERT INTO guias (guia_id, nombre_guia, url_perfil, designacion) VALUES
(1, 'Juan Murillo', 'https://www.metrolibre.com/binrepository/977x550/0c0/855d550/none/83989904/GDPW/72565419_101-5422879_20231120173652.jpg', 1),
(2, 'Fernanda Zaragoza', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO0uIdD8YgcqLrQF_ihOHvRTyjx-A6E5lAbw&s', 4);";

if ($conexion->query($sql)) {
    echo "Datos de guias turisticas insertados correctamente<br>";
}

/* ************************************************************************** */
/*                            Paquetes Turisticos                             */
/* ************************************************************************** */

$sql = "INSERT INTO paquetes (id_paquete, nombre_paquete, fecha_inicio, fecha_fin, descripcion, cantidad_personas, precio, id_destino) VALUES
(1, 'Sonny Island Resort', '2024-07-03', '2024-07-06', 'Vistas al mar, jardín, terraza, restaurante, bar y instalaciones para deportes acuáticos', 2, 60.00, 1),
(2, 'Pasadia Isla Contadora', '2024-07-07', '2024-07-11', 'El Mar Y Oro está situado en la isla Contadora, en Panamá. Se encuentra en medio de jardines tropicales amplios y ofrece consigna de equipaje y restaurante. Las habitaciones y las suites tienen WiFi, aire acondicionado y vistas al jardín o el paseo marítimo. Incluyen baño con ducha y artículos de aseo gratuitos. El restaurante del Mar Y Oro sirve especialidades de cocina local de Panamá junto con platos internacionales de Francia, Italia y México. A 1 km encontrará otros restaurantes. El Mar y Oro puede ponerse en contacto con agencias turísticas locales para organizar salidas o actividades como snorkel y pesca deportiva. La zona también es ideal para realizar excursiones en catamarán. La ciudad de Panamá está a 40 km. A las parejas les encanta la ubicación — Le han puesto un 9,5 para viajes de dos personas. Servicios más populares: WiFi gratis, situado frente a la playa, restaurante, traslado aeropuerto, habitaciones sin humo, parking gratis, servicio de habitaciones, habitaciones familiares, bar', 5, 175.00, 2),
(3, 'Pasadia Isla Taboga', '2024-07-10', '2024-07-12', 'Su Pasadía en Taboga incluye todo lo que necesita para tener un día maravilloso y relajante en nuestra hermosa isla. Nos aseguraremos de que todo esté en orden para que no tengas que hacerlo. Transporte hacia y desde la isla en nuestro ferry. Sillas y sombrillas en la playa. Una excursión histórica de 1 hora caminando con una guía bilingüe, que explicará la fascinante historia de nuestra hermosa isla durante los tiempos de los piratas, la Segunda Guerra Mundial y mucho más. Este tour también incluye una visita a la iglesia de San Pedro, que es la segunda iglesia más antigua de América Latina y fue construida en el año 1524. El almuerzo es una comida completa con postre (hecho fresco cada día), y su elección de las siguientes 5 opciones de almuerzo: filete de pescado, pescado frito, filete de pollo a la plancha, camarones al ajillo, pulpo al ajillo. Opciones vegetarianas/veganas disponibles. Todas las comidas vienen con una ensalada y su elección de papas fritas, arroz o patacones. Todas las comidas vienen con una botella de agua, limonada, soda o cerveza Nacional.', 1, 140.00, 1),
(4, 'Tour Parque Soberanía', '2024-07-09', '2024-07-10', 'Su aventura comienza con una caminata por el bosque secundario maduro que rodea el Canal de Panamá, en uno de los varios senderos que el Parque Nacional Soberanía tiene para ofrecer. Luego, continuará su búsqueda de vida silvestre mientras se embarca en un paseo en bote de 2 horas por el lago Gatún. Monos aulladores, cocodrilos, perezosos y tucanes son solo algunas de las especies que podrían cruzarse en tu camino durante esta divertida e interesante aventura. Precio Incluye: Guía interpretativo certificado por la ATP, lancha techada con salvavidas, transporte desde y hacia la ciudad de Panamá. Duración: 5 horas. Dificultad: Fácil. Opcional: Acceso a Torre Discovery $12.00 por persona.', 2, 45.00, 4),
(5, 'Resort Playa Blanca', '2024-07-07', '2024-07-14', 'Este hotel está situado en la bonita playa de Playa Blanca, en Panamá. Dispone de 2 piscinas, bañeras de hidromasaje y pistas de tenis, y ofrece servicio de todo incluido. Además, los huéspedes pueden utilizar kayaks y asistir a clases de baile o aeróbic de forma gratuita. Las habitaciones y suites del Playa Blanca Resort están equipadas con TV por cable, caja fuerte, nevera, cafetera y baño privado. También tienen balcón con vistas a los jardines, al mar o a la piscina. El establecimiento dispone de cafetería y alberga 3 restaurantes que ofrecen gran variedad de platos panameños e internacionales, como por ejemplo sushi y comida mexicana. El hotel organiza diversas actividades para adultos y niños, y tiene gimnasio y spa en sus instalaciones. El aeropuerto internacional de Tocumen se encuentra a 2 horas en coche. A las parejas les encanta la ubicación — Le han puesto un 8,2 para viajes de dos personas. Servicios más populares: 2 piscinas, WiFi gratis, habitaciones familiares, traslado aeropuerto, 2 restaurantes, gimnasio, spa y centro de bienestar, bar, zona privada de playa', 3, 210.00, 5),
(6, 'Hotel Azul Paradise', '2024-07-05', '2024-07-10', 'Azul Over-the-Water Resort dispone de jardín, salón de uso común, terraza y restaurante en Bocas del Toro. Este alojamiento ofrece bar y zona de playa privada. El resort también ofrece wifi gratis y servicio de traslado de pago para ir o volver del aeropuerto. En el resort, todas las habitaciones están equipadas con balcón. Las habitaciones de este alojamiento tienen baño privado con ducha y artículos de aseo gratuitos, y también disponen de vistas al mar. Las habitaciones cuentan con aire acondicionado, caja fuerte y TV de pantalla plana. La clientela puede practicar actividades en Bocas del Toro y alrededores, como senderismo y piragüismo. A las parejas les encanta la ubicación — Le han puesto un 9,3 para viajes de dos personas. Servicio más populares: situado frente a la playa, WiFi gratis, traslado aeropuerto, habitaciones familiares, 2 restaurantes, habitaciones sin humo, bar, zona privada de playa', 3, 250.00, 6),
(8, 'Pasadia Isla Taboga', '2024-07-10', '2024-07-12', 'Disfrute de un día maravilloso y relajante en nuestra hermosa isla con nuestro Pasadía en Taboga, que incluye todo lo que necesita para una experiencia inolvidable. Nos encargaremos de que todo esté en orden para que no tenga que preocuparse por nada. Le proporcionaremos transporte hacia y desde la isla en nuestro ferry, así como sillas y sombrillas en la playa para su comodidad. Además, disfrute de una excursión histórica de una hora caminando con una guía bilingüe que le explicará la fascinante historia de nuestra isla, que incluye los tiempos de los piratas, la Segunda Guerra Mundial y mucho más. También visitaremos la iglesia de San Pedro, la segunda iglesia más antigua de América Latina construida en el año 1524. El almuerzo está incluido y es una comida completa con postre hecho fresco todos los días. Le ofrecemos cinco opciones para elegir su plato principal, que incluyen filete de pescado, pescado frito, filete de pollo a la plancha, camarones al ajillo y pulpo al ajillo. Además, también ofrecemos opciones vegetarianas/veganas. Todas las comidas vienen con una ensalada y su elección de papas fritas, arroz o patacones. No se preocupe por su bebida, todas las comidas incluyen una botella de agua, limonada, soda o cerveza Nacional para su disfrute. ¡Venga y disfrute de una experiencia única en Taboga con nuestro Pasadía! Incluye: Almuerzo, bebida de cortesía, boleto ida y vuelta en ferry, gastos de muellaje, silla y sombrilla en la playa, tripulación. No incluye: camarero, DJ en vivo, servicio de compra de bebidas y comidas (catering), traslados hasta la marina de embarque.', 2, 40.00, 3),
(9, 'Resort Playa Blanca', '2024-07-07', '2024-07-14', 'Descubre el Paraíso con el Mejor Todo Incluido de Panamá', 4, 110.00, 5),
(10, 'Sonny Island Resort', '2024-07-03', '2024-07-06', 'Sonny Island Resort está en Punta Bajo Rico y dispone de vistas al mar, jardín, terraza, restaurante, bar y instalaciones para deportes acuáticos. Hay wifi gratis. En el lodge se sirve cada mañana un desayuno americano. Se puede practicar snorkel en la zona, y Sonny Island Resort ofrece zona de playa privada. A las parejas les encanta la ubicación — Le han puesto un 9,3 para viajes de dos personas. Servicios más populares: habitaciones sin humo, restaurante, WiFi gratis, habitaciones familiares, situado frente a la playa, bar, zona privada de playa, desayuno', 2, 140.00, 1);";

if ($conexion->query($sql)) {
    echo "Datos de paquetes turisticos insertados correctamente<br>";
}

/* ************************************************************************** */
/*                            Reservas Turisticas                             */
/* ************************************************************************** */

$sql = "INSERT INTO reservas (id_reserva, id_usuario, id_paquete, descripcion_reserva, precio_venta, metodo_pago) VALUES
(4, 1, 1, 'Estadia: 6 dias\r\nCantidad de Personas: 2 Personas\r\nDescripción: Vistas al mar, jardín, terraza, restaurante, bar y instalaciones para deportes acuáticos', 140.00, 'Visa'),
(5, 1, 4, 'Estadia: 1 dia\r\nCantidad de Personas: 2 Personas\r\nDescripción: Tours Actividades Tours a pie, Aventura y naturaleza', 45.00, 'Visa'),
(6, 1, 8, 'Estadia: 2 dias\r\nCantidad de Personas: 2 Personas\r\nDescripción: Conoce los bellas aguas de las isla Taboga', 140.00, 'Yappy'),
(7, 1, 5, 'Estadia: 7 dias\r\nCantidad de Personas: 3 Personas\r\nDescripción: Town Centers, Playas, Restaurantes y más', 210.00, 'PayPal');";

if ($conexion->query($sql)) {
    echo "Datos de reservas turisticas insertados correctamente<br>";
}


header('Location: ../../index.php');
exit();
