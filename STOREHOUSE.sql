-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2023 a las 02:27:25
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `storehouse`
--
CREATE DATABASE IF NOT EXISTS `storehouse` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `storehouse`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(1, 'Laptop'),
(2, 'Monitor'),
(3, 'Computadora'),
(4, 'iPad'),
(5, 'Impresora'),
(6, 'SmartWatch');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `email`, `telefono`, `direccion`) VALUES
(1, 'María Elena Santana', 'preigaxeiquenni-5505@yopmail.com', '5555725495', 'VICENTE GUERRERO NO. 320 NO. B, AGUA BLANCA, 45235'),
(2, 'Dolores Alvarez', 'joigidutrauwau-8575@yopmail.com', '7222136302', '26 NO. 125, TORREON CENTRO'),
(3, 'José Arredondo', 'broiddeijimmenno-5057@yopmail.com', '7223336525', 'J MA MORELOS 2602, PRADO HERMOSO, 37238'),
(4, 'Barbara Gil', 'vellacogesso-2549@yopmail.com', '5959549712', 'MIRA AZUL 45, CUMBRIA, 54740'),
(5, 'Ignacio Laura Burgos Borrego', 'gremivukottoi-2377@yopmail.com', '5516659242', 'GUADALCANAL NO. 53, EUZKADI, 02660'),
(6, 'Abraham Angulo Apodaca', 'yeunoppebrenno-7230@yopmail.com', '5521226060', 'FERNANDO MONTES DE OCA NO. 165, SAN MIGUEL CHAPULTEPEC, 11850'),
(7, 'Juana Segura', 'wauxunuroureu-1796@yopmail.com', '5553630432', 'MIGUEL DE LA MADRID NO. 874 LOC NO. 3, LAS PALMAS, 28869'),
(8, 'José Luis Caraballo', 'frougruffeilaubra-9049@yopmail.com', '0180036646', 'CORREGIDORA OTE NO. 55, ZAMORA DE HIDALGO CENTRO, 59600'),
(9, 'María Luna', 'yivounaredou-8911@yopmail.com', '7222772020', 'AVENA NO. 218 NO. 1, GRANJAS MEXICO, 08400');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `producto` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `cantidad` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `precio` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `subtotal` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `iva` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `total` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `proveedor` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `sexo` varchar(20) CHARACTER SET latin1 NOT NULL,
  `fechaNac` date NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `telefono` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `sexo`, `fechaNac`, `email`, `telefono`, `direccion`) VALUES
(1, 'Alexia Cerdan', 'femenino', '1980-04-23', 'nimijoj309@dmonies.com', '3644626933', 'Av Atlacomulco 119,Tlalnepantla De Baz Estado de Mexico,54060'),
(2, 'Augusto Reyes', 'masculino', '1999-06-03', 'vomliborta@gufum.com', '5555654485', 'AV. RIO NILO NO. 7359, VILLAS DE ORIENTE, 45403'),
(3, 'Benito Centeno Magaña', 'masculino', '1980-02-13', 'Suble1965@rhyta.com', '7222136955', 'PETROLEROS MEXICANOS 100, LAZARO CARDENAS, 68140'),
(4, 'Luis Miguel Loya', 'masculino', '0990-04-19', 'hezallajovi-9890@yopmail.com', '7211410533', '3RA PONIENTE Y 16 NORTE NO. 13, CENTRO, 29000'),
(5, 'Virginia Alicia', 'femenino', '1980-09-02', 'douttabeixoque-9914@yopmail.com', '5553214040', 'AV. 1º DE MAYO NO. 1258, RICARDO FLORES MAGON, 91900'),
(6, 'Daniel Concepción', 'masculino', '1985-01-19', 'loiveittuppimma-6657@yopmail.com', '5557650637', 'MORELOS NO. 238 S/N, AGUASCALIENTE S CENTRO, 20000'),
(7, 'Verónica Marisela', 'femenino', '1981-12-06', 'foprunepremmu-1395@yopmail.com', '5536766309', 'LIBRAMIEINTO PERIFERICO TORREON ZACATECAS KM 0.200 S/N, EJIDO 5 DE MAYO, 34304'),
(8, 'Carlos Ponce', 'masculino', '1991-01-15', 'bromoicametru-4659@yopmail.com', '5553908288', 'J J RIOS OTE 162 S/N, JORGE ALMADA, 80200'),
(9, 'Eugenia Elvia', 'femenino', '1983-05-14', 'vaproddaunnaje-4340@yopmail.com', '5565702779', 'SALVADOR DIAZ MIRON 2985 NO. S/N, DEL MAESTRO, 91030');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `empresa` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `empresa`, `email`, `telefono`, `direccion`) VALUES
(1, 'PC Global', 'pabreinneweuqueu-4391@yopmail.com', '0155562319', 'CALZ DE TLALPAN NO. 3058 S/N, SANTA URSULA COAPA, 04850'),
(2, 'Compuservicio a Domicilio', 'cagoutrikeca-6916@yopmail.com', '5553976955', 'CIRCUITO COLONIAS 296, PEDREGALES DE TANLUM, 97210'),
(3, 'PC Star', 'zeimmefeixelo-1523@yopmail.com', '5553611845', 'SANTA MONICA NO. 230, CENTRO, 44100'),
(4, 'Cyber PC', 'troibillimmiseu-1700@yopmail.com', '5558901922', 'NORTE 19-A NO. 5183, NUEVA VALLEJO'),
(5, 'Compu Space', 'prufaumacroje-7879@yopmail.com', '5557151189', 'SIERRA MORENO NO. 26 NO. 205, INDEPENDENCIA, 44240'),
(6, 'PC Venta e Instalación', 'groufrimmoyoimmu-4863@yopmail.com', '5555763909', 'H ESCUELA NAVAL MILITAR NO. 433, SAN FRANCISCO CULHUACAN, 04420'),
(7, 'Ignition PC', 'hidaprepeutti-8606@yopmail.com', '5557785826', 'MATAMOROS 13, SAN JUAN DE LOS LAGOS CENTRO, 47000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciar_sesion`
--

CREATE TABLE `iniciar_sesion` (
  `id` int(11) NOT NULL,
  `user` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(16) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `iniciar_sesion`
--

INSERT INTO `iniciar_sesion` (`id`, `user`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `marca`) VALUES
(1, 'HP'),
(2, 'Lenovo'),
(3, 'Dell'),
(4, 'Asus'),
(5, 'Apple'),
(6, 'LG'),
(7, 'Samsung'),
(8, 'Huawei');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `producto` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `stock` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `stock_min` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `marca` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `categoria` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `costo` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `utilidad` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `precio` varchar(255) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `stock`, `stock_min`, `marca`, `categoria`, `costo`, `utilidad`, `precio`) VALUES
(1, 'Laser Jet Pro M428DW', '0', '5', 'HP', 'Impresora', '8000', '2500', '10500'),
(2, '34WP500-B', '0', '10', 'LG', 'Monitor', '7000', '2000', '9000'),
(3, 'Inspiron 24', '0', '15', 'Dell', 'Computadora', '26000', '2000', '28000'),
(4, 'VivoBook 14', '0', '15', 'Asus', 'Laptop', '12000', '3000', '15000'),
(5, 'iPad Air', '0', '20', 'Apple', 'iPad', '16000', '2000', '18000'),
(6, 'Inspiron G5', '0', '20', 'Dell', 'Laptop', '30000', '3000', '33000'),
(7, 'Legion 5', '0', '25', 'Lenovo', 'Laptop', '24500', '2500', '27000'),
(8, 'MacBook Pro', '0', '20', 'Apple', 'Laptop', '60000', '3000', '63000'),
(9, 'MateBook 16s', '0', '20', 'Huawei', 'Laptop', '45000', '3000', '48000'),
(10, 'Galaxy Book', '0', '20', 'Samsung', 'Laptop', '12000', '2000', '14000'),
(11, 'Galaxy Watch 5', '0', '15', 'Samsung', 'SmartWatch', '4000', '1000', '5000'),
(12, 'Watch GT3 Pro', '0', '15', 'Huawei', 'SmartWatch', '5500', '1000', '6500'),
(13, 'thinkbook 16 g4', '0', '15', 'Lenovo', 'Laptop', '24000', '1500', '25500'),
(14, 'All In One 22df0500la', '0', '15', 'HP', 'Computadora', '14500', '1500', '16000'),
(15, '34wn80c-b', '0', '15', 'LG', 'Monitor', '9500', '1000', '10500'),
(16, 'vg24vq', '0', '15', 'Asus', 'Monitor', '3500', '1000', '4500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `empresa` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `sitioweb` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `empresa`, `email`, `telefono`, `sitioweb`, `direccion`) VALUES
(1, 'Huawei', 'huawei.oficial@outlook.com', '3320160415', 'https://consumer.hua wei.com/mx/', 'Blvd. Puerta de Hierro No. 4965 Segundo Nivel Local UP77 - 193, 45116 Zapopan, Jal., México'),
(2, 'Samsung', 'samsung.ofi@hotmail.com', '8007267864', 'https://www.samsung .com/mx/', 'Mariano Escobedo No. 476, Piso 8, Colonia Anzures, Delegación Miguel Hidalgo, C.P. 11590, Ciudad de México.'),
(3, 'Hp', 'hp.oficial.@hotmail.com', '5550912455', 'https://www.hp.com/mx-es/home.html', 'Alc. Álvaro Obregón, C.P. 01376 Ciudad de México, México'),
(4, 'Apple', 'apple.ofc@outlook.com', '5547393890', 'https://www.apple.co  m/mx/', 'Ciudad de México, Antara Av. Ejército Nacional #843-B Centro Comercial Antara Fashion Hall, Miguel Hidalgo 11520 - Ciudad de México (Ciudad de México)'),
(5, 'LG', 'LG.oficia@hotmail.com', '5579602767', 'https://www.lg.com/ mx', 'AV ADOLFO LOPEZ MATEOS NORTE; 894; LADRON DE GUEVARA;, GUADALAJARA, JAL, 44600'),
(6, 'Asus', 'Asus.contact@gmail.com', '5519463663', 'https://www.asus.co  m/mx/', 'Av. de los Insurgentes Sur 1647, San José Insurgentes, Benito Juárez, 03900 Ciudad de México, CDMX'),
(7, 'Lenovo', 'lenovo.ofi.@hotmail.com', '518900365', 'https://www.lenovo.com', 'Monterrey Parque Tecnológico Apodaca Boulevar Escobedo #316 Apodaca Nuevo León 66601 México'),
(8, 'Dell', 'dell.ofi.mx@outlook.com', '8558392035', 'https://www.dell.com /es-mx/dt/index.htm', 'Sauce #38-A Col. Jardines del Rincón, A una cuadra del Periódico Provincia Morelia Michoacán MX 58270');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `id` int(11) NOT NULL,
  `subcategoria` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `categoria` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `marca` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `propiedades` varchar(100) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `iniciar_sesion`
--
ALTER TABLE `iniciar_sesion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `iniciar_sesion`
--
ALTER TABLE `iniciar_sesion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
