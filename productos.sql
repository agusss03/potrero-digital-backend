-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2024 a las 22:32:58
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productos_belleza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `imagen` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `cantidad`, `imagen`) VALUES
(1, 'Crema Hidratante', 'Crema Hidratante marca Dermaglos', 25, 2, 'https://www.dermaglos.com/Portals/0/images/ecommerce/7793742007897.jpg'),
(2, 'Serum Antienvejecimiento', 'Serum Antienvejecimiento marca Sesderma', 30, 2, 'https://www.sesderma.co.cr/media/catalog/product/cache/35/image/9df78eab33525d08d6e5fb8d27136e95/r/e/reti_age_serum_resize.jpg'),
(3, 'Mascarilla Facial', 'Mascarilla facial de Garnier', 20, 1, 'https://www.farmacialeloir.com.ar/img/articulos/garnier_skin_active_mascarilla_hidratante_revitalizante_1_imagen1.jpg'),
(4, 'Gel Limpiador', 'Gel limpiador facial Neutrogena', 18, 5, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTULEhwsxO5ghAYRlN57s8WRVAyUDhg0z157Q&s'),
(5, 'Tónico Facial', 'Tónico Facial hidratante La Roche-Posay', 23, 3, 'https://img1.elyerromenu.com/images/lidi-skincare/tonico-hidratante-de-la-roche-posay/img.webp'),
(6, 'Protector Solar', 'Protector solar SPF 50 de Eucerin', 35, 10, 'https://farmacityar.vtexassets.com/arquivos/ids/241126/233159_protector-solar-eucerin-sun-hydro-fluid-fps50-x-50-ml_imagen-1.jpg?v=638180343708730000'),
(7, 'Crema Antiarrugas', 'Crema antiarrugas marca Vichy', 40, 7, 'https://farmacityar.vtexassets.com/arquivos/ids/198896/149421_crema-antiarrugas-liftactiv-supreme-para-piel-normal-a-mixta-x-50-ml_imagen-1.jpg?v=637267808936330000'),
(8, 'Jabón Facial', 'Jabón facial suave marca Cetaphil', 15, 4, 'https://farmaciadelsiglo.com.ar/wp-content/uploads/sites/4/2020/06/cetaphil_espuma_de_limpieza_suave_facial_imagen1.jpg'),
(9, 'Aceite Facial', 'Aceite facial rejuvenecedor The Ordinary', 28, 6, 'https://healthyskinec.com/wp-content/uploads/2023/06/1-kit-rejuvenecedor.png'),
(10, 'Crema Corporal', 'Crema corporal nutritiva Nivea', 12, 15, 'https://perfugroupar.vtexassets.com/arquivos/ids/186862/4005900984623-2.jpg?v=638180381726330000'),
(11, 'Exfoliante Facial', 'Exfoliante facial St. Ives', 19, 3, 'https://m.media-amazon.com/images/I/51SzUn43PyL._SL1000_.jpg'),
(12, 'Loción Micelar', 'Loción micelar desmaquillante Garnier', 10, 20, 'https://farmacityar.vtexassets.com/arquivos/ids/247502/204369_agua-micelar-skin-active-x-400-ml__imagen-1.jpg?v=638315223713500000'),
(13, 'Mascarilla de Barro', 'Mascarilla de barro purificante Dead Sea', 25, 5, 'https://m.media-amazon.com/images/I/71zldkQ73bL._AC_UF1000,1000_QL80_.jpg'),
(14, 'Contorno de Ojos', 'Crema para contorno de ojos Olay', 35, 8, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRS2IxLG7UbooQlJn-BKoBPrVNWKiF8gi1n6Q&s'),
(15, 'Espuma Limpiadora', 'Espuma limpiadora facial Biore', 18, 12, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4wtW_Ftrq3qsuD6yt7L9J8HxOuHAd4NHBjw&s'),
(16, 'Desmaquillante Bifásico', 'Desmaquillante bifásico de ojos L\'Oréal', 13, 9, 'https://www.farmacialeloir.com.ar/img/articulos/2021/01/loreal_paris_hidra_total_5_desmaquillante_bifasico_imagen1.jpg'),
(17, 'Serum Vitamina C', 'Serum antioxidante con vitamina C Eucerin', 32, 7, 'https://images-1.eucerin.com/~/media/eucerin%20relaunch%20media/eucerin/local/latam/sales%20visuals/hyaluron%20filler%20x3/hyaluron-filler-x3/83509_eucerin%20hyaluron%20filler%20vitamin%20c/latam_sp_ecn_83509_hyfi_vitamin%20c_sv_product.jpg?rx=0&ry=0&rw=1000&rh=1000&hash=661390758CA44B9297466A68792B4A6C'),
(18, 'Cremas de Manos', 'Crema reparadora para manos Neutrogena', 9, 25, 'https://www.farmacialeloir.com.ar/img/articulos/2021/01/neutrogena_crema_hidratante_para_manos_formula_noruega_3_imagen2.jpg'),
(19, 'Crema para Pies', 'Crema hidratante para pies secos Amopé', 14, 10, 'https://www.farmacialeloir.com.ar/img/articulos/amope_pedi_perfect_locion_hidratante_x_250ml_2_thumb1.jpg'),
(20, 'Spray Facial', 'Spray facial hidratante marca Mario Badescu', 16, 6, 'https://acdn.mitiendanube.com/stores/001/680/124/products/mario-badescu-rose-water-21-5cbbfb412477ac2d9816464005173398-640-0.jpg'),
(21, 'Mascarilla Nocturna', 'Mascarilla hidratante nocturna Laneige', 30, 4, 'https://highxtar.com/wp-content/uploads/2024/03/thumb-laneige-bouncy-firm-sleeping-mask-1440x1080.jpg'),
(22, 'Polvo Exfoliante', 'Polvo exfoliante suave Dermalogica', 28, 5, 'https://www.sephora.com.mx/on/demandware.static/-/Sites-masterCatalog_Sephora/es_MX/dw973afe5c/images/hi-res/boletos/LUIS%20MOYA/DERMALOGICA/666151112780_1.jpg'),
(23, 'Aceite Corporal', 'Aceite corporal relajante marca Weleda', 22, 3, 'https://acdn.mitiendanube.com/stores/735/492/products/diseno-sin-titulo-2024-08-21t161620-960-3192710ceaed0cdae717242678299545-480-0.png'),
(25, 'Balsamo labial', 'Balsamo labial de la marca EOS', 14, 8, 'https://cloudinary.images-iherb.com/image/upload/f_auto,q_auto:eco/images/eos/eos00284/y/19.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
