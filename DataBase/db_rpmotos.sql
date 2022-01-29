-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2021 a las 19:02:03
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_rpmotos`
--
CREATE DATABASE IF NOT EXISTS `db_rpmotos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_rpmotos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_compra` int(11) NOT NULL,
  `Usuario` int(11) DEFAULT NULL,
  `Producto` int(11) DEFAULT NULL,
  `cantidad_solicitada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_producto`
--

CREATE TABLE `info_producto` (
  `idProducto` int(11) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `URL_imagen` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `info_producto`
--

INSERT INTO `info_producto` (`idProducto`, `descripcion`, `URL_imagen`) VALUES
(19, 'Aceite 4t Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa voluptate ducimus facilis impedit molestias doloremque nisi explicabo sit, repellendus corrupti aliquam, ex praesentium vitae consequuntur voluptatum nemo quod nesciunt sed! Ut tempore ducimus laborum, rem animi ex enim ratione sapiente accusamus soluta similique molestiae minus quia excepturi, atque mollitia illo numquam. Natus cum placeat hic ipsum architecto necessitatibus nihil rerum! Libero officiis tempore ipsam odit ducimus! Ipsum eum nisi modi architecto totam unde sint recusandae ratione fuga, quas numquam saepe obcaecati nulla aperiam quos facilis porro ab laudantium! Quidem, voluptatem. Ratione veniam rem necessitatibus aliquid provident enim optio, eaque accusantium porro deserunt illum. Dolore accusantium labore, dolores culpa porro exercitationem, perspiciatis animi quasi cupiditate impedit, aspernatur voluptatibus laudantium nemo nesciunt. Eligendi alias numquam consectetur dolor, quia dignissimos cum nulla deleniti dolores. Iure illo voluptatum amet velit fugit officiis non, commodi facilis nobis similique est aperiam ad id excepturi consequatur qui! Esse aliquam, modi a vero quia tenetur ipsum at doloremque quidem, fugit harum possimus quae illum quisquam nesciunt sit amet, delectus qui! Ex molestias omnis nemo accusamus amet nisi ipsum! Error rem laborum', 'assets/img/Motul4T.jpg'),
(20, 'Casco Integral Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa voluptate ducimus facilis impedit molestias doloremque nisi explicabo sit, repellendus corrupti aliquam, ex praesentium vitae consequuntur voluptatum nemo quod nesciunt sed! Ut tempore ducimus laborum, rem animi ex enim ratione sapiente accusamus soluta similique molestiae minus quia excepturi, atque mollitia illo numquam. Natus cum placeat hic ipsum architecto necessitatibus nihil rerum! Libero officiis tempore ipsam odit ducimus! Ipsum eum nisi modi architecto totam unde sint recusandae ratione fuga, quas numquam saepe obcaecati nulla aperiam quos facilis porro ab laudantium! Quidem, voluptatem. Ratione veniam rem necessitatibus aliquid provident enim optio, eaque accusantium porro deserunt illum. Dolore accusantium labore, dolores culpa porro exercitationem, perspiciatis animi quasi cupiditate impedit, aspernatur voluptatibus laudantium nemo nesciunt. Eligendi alias numquam consectetur dolor, quia dignissimos cum nulla deleniti dolores. Iure illo voluptatum amet velit fugit officiis non, commodi facilis nobis similique est aperiam ad id excepturi consequatur qui! Esse aliquam, modi a vero quia tenetur ipsum at doloremque quidem, fugit harum possimus quae illum quisquam nesciunt sit amet, delectus qui! Ex molestias omnis nemo accusamus amet nisi ipsum! Error rem laborum', 'assets/img/cascoIntegral.jpg'),
(21, 'CARBURADOR POWERJECT Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa voluptate ducimus facilis impedit molestias doloremque nisi explicabo sit, repellendus corrupti aliquam, ex praesentium vitae consequuntur voluptatum nemo quod nesciunt sed! Ut tempore ducimus laborum, rem animi ex enim ratione sapiente accusamus soluta similique molestiae minus quia excepturi, atque mollitia illo numquam. Natus cum placeat hic ipsum architecto necessitatibus nihil rerum! Libero officiis tempore ipsam odit ducimus! Ipsum eum nisi modi architecto totam unde sint recusandae ratione fuga, quas numquam saepe obcaecati nulla aperiam quos facilis porro ab laudantium! Quidem, voluptatem. Ratione veniam rem necessitatibus aliquid provident enim optio, eaque accusantium porro deserunt illum. Dolore accusantium labore, dolores culpa porro exercitationem, perspiciatis animi quasi cupiditate impedit, aspernatur voluptatibus laudantium nemo nesciunt. Eligendi alias numquam consectetur dolor, quia dignissimos cum nulla deleniti dolores. Iure illo voluptatum amet velit fugit officiis non, commodi facilis nobis similique est aperiam ad id excepturi consequatur qui! Esse aliquam, modi a vero quia tenetur ipsum at doloremque quidem, fugit harum possimus quae illum quisquam nesciunt sit amet, delectus qui! Ex molestias omnis nemo accusamus amet nisi ipsum! Error rem laborum', 'assets/img/CarburadorPowerjet.jpg'),
(22, 'CEPILLO Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa voluptate ducimus facilis impedit molestias doloremque nisi explicabo sit, repellendus corrupti aliquam, ex praesentium vitae consequuntur voluptatum nemo quod nesciunt sed! Ut tempore ducimus laborum, rem animi ex enim ratione sapiente accusamus soluta similique molestiae minus quia excepturi, atque mollitia illo numquam. Natus cum placeat hic ipsum architecto necessitatibus nihil rerum! Libero officiis tempore ipsam odit ducimus! Ipsum eum nisi modi architecto totam unde sint recusandae ratione fuga, quas numquam saepe obcaecati nulla aperiam quos facilis porro ab laudantium! Quidem, voluptatem. Ratione veniam rem necessitatibus aliquid provident enim optio, eaque accusantium porro deserunt illum. Dolore accusantium labore, dolores culpa porro exercitationem, perspiciatis animi quasi cupiditate impedit, aspernatur voluptatibus laudantium nemo nesciunt. Eligendi alias numquam consectetur dolor, quia dignissimos cum nulla deleniti dolores. Iure illo voluptatum amet velit fugit officiis non, commodi facilis nobis similique est aperiam ad id excepturi consequatur qui! Esse aliquam, modi a vero quia tenetur ipsum at doloremque quidem, fugit harum possimus quae illum quisquam nesciunt sit amet, delectus qui! Ex molestias omnis nemo accusamus amet nisi ipsum! Error rem laborum', 'assets/img/cepilloOsaka.jpg'),
(23, 'CORONA Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa voluptate ducimus facilis impedit molestias doloremque nisi explicabo sit, repellendus corrupti aliquam, ex praesentium vitae consequuntur voluptatum nemo quod nesciunt sed! Ut tempore ducimus laborum, rem animi ex enim ratione sapiente accusamus soluta similique molestiae minus quia excepturi, atque mollitia illo numquam. Natus cum placeat hic ipsum architecto necessitatibus nihil rerum! Libero officiis tempore ipsam odit ducimus! Ipsum eum nisi modi architecto totam unde sint recusandae ratione fuga, quas numquam saepe obcaecati nulla aperiam quos facilis porro ab laudantium! Quidem, voluptatem. Ratione veniam rem necessitatibus aliquid provident enim optio, eaque accusantium porro deserunt illum. Dolore accusantium labore, dolores culpa porro exercitationem, perspiciatis animi quasi cupiditate impedit, aspernatur voluptatibus laudantium nemo nesciunt. Eligendi alias numquam consectetur dolor, quia dignissimos cum nulla deleniti dolores. Iure illo voluptatum amet velit fugit officiis non, commodi facilis nobis similique est aperiam ad id excepturi consequatur qui! Esse aliquam, modi a vero quia tenetur ipsum at doloremque quidem, fugit harum possimus quae illum quisquam nesciunt sit amet, delectus qui! Ex molestias omnis nemo accusamus amet nisi ipsum! Error rem laborum', 'assets/img/CoronaKarting.jpg'),
(24, 'CAMPERA CAMPERA Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa voluptate ducimus facilis impedit molestias doloremque nisi explicabo sit, repellendus corrupti aliquam, ex praesentium vitae consequuntur voluptatum nemo quod nesciunt sed! Ut tempore ducimus laborum, rem animi ex enim ratione sapiente accusamus soluta similique molestiae minus quia excepturi, atque mollitia illo numquam. Natus cum placeat hic ipsum architecto necessitatibus nihil rerum! Libero officiis tempore ipsam odit ducimus! Ipsum eum nisi modi architecto totam unde sint recusandae ratione fuga, quas numquam saepe obcaecati nulla aperiam quos facilis porro ab laudantium! Quidem, voluptatem. Ratione veniam rem necessitatibus aliquid provident enim optio, eaque accusantium porro deserunt illum. Dolore accusantium labore, dolores culpa porro exercitationem, perspiciatis animi quasi cupiditate impedit, aspernatur voluptatibus laudantium nemo nesciunt. Eligendi alias numquam consectetur dolor, quia dignissimos cum nulla deleniti dolores. Iure illo voluptatum amet velit fugit officiis non, commodi facilis nobis similique est aperiam ad id excepturi consequatur qui! Esse aliquam, modi a vero quia tenetur ipsum at doloremque quidem, fugit harum possimus quae illum quisquam nesciunt sit amet, delectus qui! Ex molestias omnis nemo accusamus amet nisi ipsum! Error rem laborum', 'assets/img/CamperaCuero.jpg'),
(25, 'CARBURADOR KEIHIN Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa voluptate ducimus facilis impedit molestias doloremque nisi explicabo sit, repellendus corrupti aliquam, ex praesentium vitae consequuntur voluptatum nemo quod nesciunt sed! Ut tempore ducimus laborum, rem animi ex enim ratione sapiente accusamus soluta similique molestiae minus quia excepturi, atque mollitia illo numquam. Natus cum placeat hic ipsum architecto necessitatibus nihil rerum! Libero officiis tempore ipsam odit ducimus! Ipsum eum nisi modi architecto totam unde sint recusandae ratione fuga, quas numquam saepe obcaecati nulla aperiam quos facilis porro ab laudantium! Quidem, voluptatem. Ratione veniam rem necessitatibus aliquid provident enim optio, eaque accusantium porro deserunt illum. Dolore accusantium labore, dolores culpa porro exercitationem, perspiciatis animi quasi cupiditate impedit, aspernatur voluptatibus laudantium nemo nesciunt. Eligendi alias numquam consectetur dolor, quia dignissimos cum nulla deleniti dolores. Iure illo voluptatum amet velit fugit officiis non, commodi facilis nobis similique est aperiam ad id excepturi consequatur qui! Esse aliquam, modi a vero quia tenetur ipsum at doloremque quidem, fugit harum possimus quae illum quisquam nesciunt sit amet, delectus qui! Ex molestias omnis nemo accusamus amet nisi ipsum! Error rem laborum', 'assets/img/CarburadorKeihin.jpg'),
(26, 'CAMPERA HONDA Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa voluptate ducimus facilis impedit molestias doloremque nisi explicabo sit, repellendus corrupti aliquam, ex praesentium vitae consequuntur voluptatum nemo quod nesciunt sed! Ut tempore ducimus laborum, rem animi ex enim ratione sapiente accusamus soluta similique molestiae minus quia excepturi, atque mollitia illo numquam. Natus cum placeat hic ipsum architecto necessitatibus nihil rerum! Libero officiis tempore ipsam odit ducimus! Ipsum eum nisi modi architecto totam unde sint recusandae ratione fuga, quas numquam saepe obcaecati nulla aperiam quos facilis porro ab laudantium! Quidem, voluptatem. Ratione veniam rem necessitatibus aliquid provident enim optio, eaque accusantium porro deserunt illum. Dolore accusantium labore, dolores culpa porro exercitationem, perspiciatis animi quasi cupiditate impedit, aspernatur voluptatibus laudantium nemo nesciunt. Eligendi alias numquam consectetur dolor, quia dignissimos cum nulla deleniti dolores. Iure illo voluptatum amet velit fugit officiis non, commodi facilis nobis similique est aperiam ad id excepturi consequatur qui! Esse aliquam, modi a vero quia tenetur ipsum at doloremque quidem, fugit harum possimus quae illum quisquam nesciunt sit amet, delectus qui! Ex molestias omnis nemo accusamus amet nisi ipsum! Error rem laborum', 'assets/img/CamperaHondaYamaha.jpeg'),
(27, 'ACEITE 2T Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa voluptate ducimus facilis impedit molestias doloremque nisi explicabo sit, repellendus corrupti aliquam, ex praesentium vitae consequuntur voluptatum nemo quod nesciunt sed! Ut tempore ducimus laborum, rem animi ex enim ratione sapiente accusamus soluta similique molestiae minus quia excepturi, atque mollitia illo numquam. Natus cum placeat hic ipsum architecto necessitatibus nihil rerum! Libero officiis tempore ipsam odit ducimus! Ipsum eum nisi modi architecto totam unde sint recusandae ratione fuga, quas numquam saepe obcaecati nulla aperiam quos facilis porro ab laudantium! Quidem, voluptatem. Ratione veniam rem necessitatibus aliquid provident enim optio, eaque accusantium porro deserunt illum. Dolore accusantium labore, dolores culpa porro exercitationem, perspiciatis animi quasi cupiditate impedit, aspernatur voluptatibus laudantium nemo nesciunt. Eligendi alias numquam consectetur dolor, quia dignissimos cum nulla deleniti dolores. Iure illo voluptatum amet velit fugit officiis non, commodi facilis nobis similique est aperiam ad id excepturi consequatur qui! Esse aliquam, modi a vero quia tenetur ipsum at doloremque quidem, fugit harum possimus quae illum quisquam nesciunt sit amet, delectus qui! Ex molestias omnis nemo accusamus amet nisi ipsum! Error rem laborum', 'assets/img/Motul2T.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `producto` varchar(80) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `modelo` varchar(80) NOT NULL,
  `compatibilidad` varchar(255) NOT NULL,
  `proveedor` varchar(80) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `ubicacion` varchar(80) NOT NULL,
  `costo` int(11) NOT NULL,
  `precio_publico` int(11) NOT NULL,
  `pesoXunidad` varchar(10) NOT NULL,
  `garantia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `marca`, `modelo`, `compatibilidad`, `proveedor`, `cantidad`, `fecha_ingreso`, `ubicacion`, `costo`, `precio_publico`, `pesoXunidad`, `garantia`) VALUES
(19, 'Aceite 4T', 'Motul', '10W40', '------------', 'Caseros', 7, '2021-06-10', 'derecha', 600, 1500, '2 kg', '1 mes'),
(20, 'Casco Integral', 'Ls2', 'Ff352', '------------', 'Villa Urquiza', 3, '2021-06-13', 'izquierda centro', 9500, 15000, '3,6 kg', '6 meses'),
(21, 'Carburador', 'Powerjet', 'PPJ', '------------', 'Caseros', 15, '2020-08-10', 'derecha', 3050, 5400, '3,2 kg', '6 meses'),
(22, 'Cepillo limpia cadena', 'Osaka', 'KK244', '------------', 'Villa Raffo', 25, '2020-12-05', 'izquierda centro', 110, 270, '1,2 kg', '1 mes'),
(23, 'Corona', 'Karting', '428', '------------', 'Morón', 56, '2019-09-09', 'derecha', 455, 740, '0.5kg', '3 meses'),
(24, 'Campera de cuero vacuno negra', 'Tedge', 'Adrenaline', '------------', 'Chacarita', 6, '2018-01-18', 'izquierda centro', 11300, 17250, '2,5 kg', '4 meses'),
(25, 'Carburador', 'Keihin', 'PWK', '------------', 'Caseros', 11, '2021-04-15', 'derecha', 2970, 4800, '3,1 kg', '6 meses'),
(26, 'Campera Honda Yamaha Motocrross', 'Urban Ryder', 'Honda YAMAHA FMF', '------------', 'Villa Urquiza', 4, '2020-02-13', 'izquierda centro', 3500, 5200, '1,8 kg', '3 meses'),
(27, 'Aceite 2T', 'Motul', '10X45', '----------------', 'La Plata', 3, '2020-09-05', 'fondo derecha', 300, 950, '1,6 kg', '1 mes'),
(28, 'Aceite 4T', 'Motul', '10W40', '------------', 'Caseros', 7, '2021-06-10', 'derecha', 600, 1500, '2 kg', '1 mes'),
(29, 'Casco Integral', 'Ls2', 'Ff352', '------------', 'Villa Urquiza', 3, '2021-06-13', 'izquierda centro', 9500, 15000, '3,6 kg', '6 meses'),
(30, 'Carburador', 'Powerjet', 'PPJ', '------------', 'Caseros', 15, '2020-08-10', 'derecha', 3050, 5400, '3,2 kg', '6 meses'),
(31, 'Cepillo limpia cadena', 'Osaka', 'KK244', '------------', 'Villa Raffo', 25, '2020-12-05', 'izquierda centro', 110, 270, '1,2 kg', '1 mes'),
(32, 'Corona', 'Karting', '428', '------------', 'Morón', 56, '2019-09-09', 'derecha', 455, 740, '0.5kg', '3 meses'),
(33, 'Campera de cuero vacuno negra', 'Tedge', 'Adrenaline', '------------', 'Chacarita', 6, '2018-01-18', 'izquierda centro', 11300, 17250, '2,5 kg', '4 meses'),
(34, 'Carburador', 'Keihin', 'PWK', '------------', 'Caseros', 11, '2021-04-15', 'derecha', 2970, 4800, '3,1 kg', '6 meses'),
(35, 'Campera Honda Yamaha Motocrross', 'Urban Ryder', 'Honda YAMAHA FMF', '------------', 'Villa Urquiza', 4, '2020-02-13', 'izquierda centro', 3500, 5200, '1,8 kg', '3 meses');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre_usuario` varchar(45) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL,
  `rol` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre_usuario`, `email`, `contraseña`, `rol`) VALUES
(1, 'Agustin', 'agustin@gmail.com', 'agustin123', 'admin'),
(2, 'Carlos', 'carlos@gmail.com', 'carlos123', 'usuario'),
(3, 'Martin', 'martin@gmail.com', 'martin123', 'usuario'),
(4, 'sda', 'sda@gmail.com', 'sda', 'usuario'),
(5, 'Agustin Mendez', 'dsasadk@gmail.com', 'agusmendez', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `Usuario` (`Usuario`),
  ADD KEY `Producto` (`Producto`);

--
-- Indices de la tabla `info_producto`
--
ALTER TABLE `info_producto`
  ADD KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`Usuario`) REFERENCES `usuarios` (`idUsuario`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`Producto`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `info_producto`
--
ALTER TABLE `info_producto`
  ADD CONSTRAINT `info_producto_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
