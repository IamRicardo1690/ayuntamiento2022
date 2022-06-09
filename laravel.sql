-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2020 a las 22:21:08
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `folio` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `clave_catastral` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `id_ciudadano` int(10) UNSIGNED NOT NULL,
  `id_servicio` int(10) UNSIGNED NOT NULL,
  `id_horario` int(10) UNSIGNED NOT NULL,
  `id_propietario` int(10) UNSIGNED NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`folio`, `fecha`, `clave_catastral`, `id`, `id_ciudadano`, `id_servicio`, `id_horario`, `id_propietario`, `updated_at`, `created_at`) VALUES
(1, '2020-08-25', '123 12 456 12', 1, 1, 800, 401, 1, NULL, NULL),
(2, '2020-08-26', NULL, 1, 2, 600, 400, 2, NULL, NULL),
(3, '2020-08-19', '123 23 345 34', 1, 3, 800, 403, 3, NULL, NULL),
(4, '2020-08-26', NULL, 1, 4, 300, 401, 4, NULL, NULL),
(5, '2020-08-26', NULL, 1, 5, 300, 401, 5, NULL, NULL),
(6, '2020-08-26', NULL, 1, 6, 500, 401, 6, NULL, NULL),
(7, '2020-09-15', NULL, 1, 7, 300, 403, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudadanos`
--

CREATE TABLE `ciudadanos` (
  `id_ciudadano` int(10) UNSIGNED NOT NULL,
  `nombre_ciudadano` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos_c` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_domicilio` int(10) UNSIGNED NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ciudadanos`
--

INSERT INTO `ciudadanos` (`id_ciudadano`, `nombre_ciudadano`, `apellidos_c`, `id_domicilio`, `updated_at`, `created_at`) VALUES
(1, 'Ricardo', 'Sanchez Marcos', 1, NULL, NULL),
(2, 'Ana Luisa', 'Venancio Lopez', 2, NULL, NULL),
(3, 'Miriam', 'Quintana Romulo', 3, NULL, NULL),
(4, 'Edgar', 'Reyes Hernandez', 4, NULL, NULL),
(5, 'Edgar', 'Reyes Hernandez', 5, NULL, NULL),
(6, 'Karl Cecilia', 'Martienez Carmona', 6, NULL, NULL),
(7, 'Adriana', 'Vidal Clemente', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilios`
--

CREATE TABLE `domicilios` (
  `id_domicilio` int(10) UNSIGNED NOT NULL,
  `numero` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colonia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_localidad` int(10) UNSIGNED NOT NULL,
  `id_municipio` int(10) UNSIGNED NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `domicilios`
--

INSERT INTO `domicilios` (`id_domicilio`, `numero`, `calle`, `colonia`, `id_localidad`, `id_municipio`, `updated_at`, `created_at`) VALUES
(1, '103', 'por el auditorio', 'San Juan 2da Seccion', 35, 110, '2020-08-25 09:40:51', '2020-08-25 09:40:51'),
(2, NULL, 'por la iglecia de san jeronimo', 'San Jeronimo 2da Seccion', 28, 110, '2020-08-25 09:44:01', '2020-08-25 09:44:01'),
(3, '304', 'Esquina con tienda de abarrotes', 'San Miguel 1ra Seccion', 47, 110, '2020-08-25 10:09:33', '2020-08-25 10:09:33'),
(4, '12', 'Frente a la montesion', 'San Juan 1ra Seccion', 34, 110, '2020-08-25 10:17:26', '2020-08-25 10:17:26'),
(5, '12', 'Frente a la montesion', 'San Juan 1ra Seccion', 34, 110, '2020-08-25 10:18:13', '2020-08-25 10:18:13'),
(6, NULL, 'Esquina con bar', 'San Bartolo 4ta Seccion', 24, 110, '2020-08-25 10:43:11', '2020-08-25 10:43:11'),
(7, '12', 'Jardines de morelos', 'san juan 2da seccion', 24, 110, '2020-09-12 02:50:54', '2020-09-12 02:50:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domiciliosinms`
--

CREATE TABLE `domiciliosinms` (
  `id_domicilioinms` int(10) UNSIGNED NOT NULL,
  `numerodos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calledos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coloniados` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_localidaddos` int(10) UNSIGNED NOT NULL,
  `id_municipiodos` int(10) UNSIGNED NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `domiciliosinms`
--

INSERT INTO `domiciliosinms` (`id_domicilioinms`, `numerodos`, `calledos`, `coloniados`, `id_localidaddos`, `id_municipiodos`, `updated_at`, `created_at`) VALUES
(1, '205', 'por el campirano', 'San Bartolo 3ra Seccion', 23, 110, NULL, NULL),
(2, NULL, 'tras de la iglesia', 'San Jeronimo 1ra Seccion', 27, 110, NULL, NULL),
(3, '134', 'av 16 de septiembre', 'amanalco centro', 1, 110, NULL, NULL),
(4, NULL, 'por la cascada', 'San lucas 3ra Seccion', 40, 110, NULL, NULL),
(5, NULL, 'por la cascada', 'San lucas 3ra Seccion', 40, 110, NULL, NULL),
(6, '192', 'llegando al campo', 'San Juan 3ra Seccion', 36, 110, NULL, NULL),
(7, '12', 'por la recta', 'san mateo 3ra seccion', 26, 110, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` int(10) UNSIGNED NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id_horario`, `hora`) VALUES
(400, '09:30:00'),
(401, '11:00:00'),
(402, '11:30:00'),
(403, '01:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `id_localidad` int(10) UNSIGNED NOT NULL,
  `nombre_localidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id_localidad`, `nombre_localidad`) VALUES
(1, 'Amanalco centro'),
(2, 'Agua Bendita; (pueblo)'),
(3, 'Agua Bendita 2a Sección (Cruz Labrada)'),
(4, 'Capilla Vieja; (ranchería)'),
(5, 'Corral de Piedra; (ranchería)'),
(6, 'El Capulín Primera Sección'),
(7, 'El Capulín Segunda Sección'),
(8, 'El Capulín Tercera Sección (Palo Mancornado)'),
(9, 'El Pedregal; (ranchería)'),
(10, 'El Potrero Primera Sección'),
(11, 'El Potrero Segunda Sección'),
(12, 'El Potrero Tercera Sección (Loma del Potrero)'),
(13, 'El Potrero Cuarta Sección (El Chorrito)'),
(14, 'Huacal Viejo'),
(15, 'Hacienda Nueva (ranchería)'),
(16, 'Rincón de Guadalupe Primera Sección'),
(17, 'Rincón de Guadalupe Segunda Sección'),
(18, 'Rincón de Guadalupe Tercera Sección (Loma de Rincón de Guadalupe)'),
(19, 'Rincón de Guadalupe Cuarta Sección (El Tejocote)'),
(20, 'Rincón de Guadalupe Quinta Sección (El Zacatonal); (ranchería)'),
(21, 'San Bartolo Primera Sección'),
(22, 'San Bartolo Segunda Sección'),
(23, 'San Bartolo Tercera Sección'),
(24, 'San Bartolo Cuarta Sección'),
(25, 'San Bartolo Quinta Sección (Polvillos)'),
(26, 'San Bartolo Sexta Sección (Plan de Polvillos)'),
(27, 'San Jerónimo Primera Sección'),
(28, 'San Jerónimo Segunda Sección'),
(29, 'San Jerónimo Tercera Sección'),
(30, 'San Jerónimo Cuarta Sección (El Ancón)'),
(31, 'San Jerónimo Quinta Sección (El Convento)'),
(32, 'San Jerónimo Sexta Sección (Cerro Cuate)'),
(33, 'San Jerónimo Séptima Sección (La Peña)'),
(34, 'San Juan Primera Sección'),
(35, 'San Juan Segunda Sección'),
(36, 'San Juan Tercera Sección'),
(37, 'San Juan Cuarta Sección (El Temporal)'),
(38, 'San Lucas Primera Sección'),
(39, 'San Lucas Segunda Sección'),
(40, 'San Lucas Tercera Sección'),
(41, 'San Lucas Cuarta Sección (San Francisco)'),
(42, 'San Mateo Primera Sección'),
(43, 'San Mateo Segunda Sección'),
(44, 'San Mateo Tercera Sección'),
(45, 'San Mateo Cuarta Sección (Pueblo Nuevo)'),
(46, 'San Mateo Quinta Sección (La Providencia)'),
(47, 'San Miguel Tenextepec Primera Sección'),
(48, 'San Miguel Tenextepec Segunda Sección'),
(49, 'San Sebastián Chico Primera Sección'),
(50, 'San Sebastián Chico Segunda Sección'),
(51, 'San Sebastián Grande Primera Sección'),
(52, 'San Sebastián Grande Segunda Sección'),
(53, 'San Sebastián Grande Tercera Sección (La Loma de San Sebastián Grande)'),
(54, 'Subdelegación Las Pilas'),
(55, 'Subdelegación Ojo de Agua'),
(56, 'Subdelegación San Vicente'),
(57, 'Subdelegación Lomas de Providencia'),
(58, 'Subdelegación Monte Alto'),
(59, 'Subdelegación Chupa Muerto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidadesdos`
--

CREATE TABLE `localidadesdos` (
  `id_localidaddos` int(10) UNSIGNED NOT NULL,
  `nombre_localidaddos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `localidadesdos`
--

INSERT INTO `localidadesdos` (`id_localidaddos`, `nombre_localidaddos`) VALUES
(1, 'Amanalco centro'),
(2, 'Agua Bendita; (pueblo)'),
(3, 'Agua Bendita 2a Sección (Cruz Labrada)'),
(4, 'Capilla Vieja; (ranchería)'),
(5, 'Corral de Piedra; (ranchería)'),
(6, 'El Capulín Primera Sección'),
(7, 'El Capulín Segunda Sección'),
(8, 'El Capulín Tercera Sección (Palo Mancornado)'),
(9, 'El Pedregal; (ranchería)'),
(10, 'El Potrero Primera Sección'),
(11, 'El Potrero Segunda Sección'),
(12, 'El Potrero Tercera Sección (Loma del Potrero)'),
(13, 'El Potrero Cuarta Sección (El Chorrito)'),
(14, 'Huacal Viejo'),
(15, 'Hacienda Nueva (ranchería)'),
(16, 'Rincón de Guadalupe Primera Sección'),
(17, 'Rincón de Guadalupe Segunda Sección'),
(18, 'Rincón de Guadalupe Tercera Sección (Loma de Rincón de Guadalupe)'),
(19, 'Rincón de Guadalupe Cuarta Sección (El Tejocote)'),
(20, 'Rincón de Guadalupe Quinta Sección (El Zacatonal); (ranchería)'),
(21, 'San Bartolo Primera Sección'),
(22, 'San Bartolo Segunda Sección'),
(23, 'San Bartolo Tercera Sección'),
(24, 'San Bartolo Cuarta Sección'),
(25, 'San Bartolo Quinta Sección (Polvillos)'),
(26, 'San Bartolo Sexta Sección (Plan de Polvillos)'),
(27, 'San Jerónimo Primera Sección'),
(28, 'San Jerónimo Segunda Sección'),
(29, 'San Jerónimo Tercera Sección'),
(30, 'San Jerónimo Cuarta Sección (El Ancón)'),
(31, 'San Jerónimo Quinta Sección (El Convento)'),
(32, 'San Jerónimo Sexta Sección (Cerro Cuate)'),
(33, 'San Jerónimo Séptima Sección (La Peña)'),
(34, 'San Juan Primera Sección'),
(35, 'San Juan Segunda Sección'),
(36, 'San Juan Tercera Sección'),
(37, 'San Juan Cuarta Sección (El Temporal)'),
(38, 'San Lucas Primera Sección'),
(39, 'San Lucas Segunda Sección'),
(40, 'San Lucas Tercera Sección'),
(41, 'San Lucas Cuarta Sección (San Francisco)'),
(42, 'San Mateo Primera Sección'),
(43, 'San Mateo Segunda Sección'),
(44, 'San Mateo Tercera Sección'),
(45, 'San Mateo Cuarta Sección (Pueblo Nuevo)'),
(46, 'San Mateo Quinta Sección (La Providencia)'),
(47, 'San Miguel Tenextepec Primera Sección'),
(48, 'San Miguel Tenextepec Segunda Sección'),
(49, 'San Sebastián Chico Primera Sección'),
(50, 'San Sebastián Chico Segunda Sección'),
(51, 'San Sebastián Grande Primera Sección'),
(52, 'San Sebastián Grande Segunda Sección'),
(53, 'San Sebastián Grande Tercera Sección (La Loma de San Sebastián Grande)'),
(54, 'Subdelegación Las Pilas'),
(55, 'Subdelegación Ojo de Agua'),
(56, 'Subdelegación San Vicente'),
(57, 'Subdelegación Lomas de Providencia'),
(58, 'Subdelegación Monte Alto'),
(59, 'Subdelegación Chupa Muerto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(183, '2020_08_10_042159_create_permission_tables', 1),
(219, '2014_07_10_173411_create_tipos_usuarios_table', 2),
(220, '2014_10_12_000000_create_users_table', 2),
(221, '2014_10_12_100000_create_password_resets_table', 2),
(222, '2019_08_19_000000_create_failed_jobs_table', 2),
(223, '2020_07_24_172737_create_servicios_table', 2),
(224, '2020_07_24_173134_create_municipios_table', 2),
(225, '2020_07_24_173204_create_localidades_table', 2),
(226, '2020_07_24_173248_create_horarios_table', 2),
(227, '2020_07_24_173610_create_citas_table', 2),
(228, '2020_07_24_173651_create_ciudadanos_table', 2),
(229, '2020_07_24_173724_create_domicilios_table', 2),
(230, '2020_07_24_173913_create_propietarios_table', 2),
(231, '2020_08_05_063059_create_domiciliosinms_table', 2),
(232, '2020_08_06_025144_create_localidadesdos_table', 2),
(233, '2020_08_06_025451_create_municipiosdos_table', 2),
(234, '2020_08_10_054610_create_role_user_table', 2),
(235, '2020_08_10_061328_create_roles_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_municipio` int(10) UNSIGNED NOT NULL,
  `nombre_municipio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_municipio`, `nombre_municipio`) VALUES
(110, 'Amanalco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipiosdos`
--

CREATE TABLE `municipiosdos` (
  `id_municipiodos` int(10) UNSIGNED NOT NULL,
  `nombre_municipiodos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `municipiosdos`
--

INSERT INTO `municipiosdos` (`id_municipiodos`, `nombre_municipiodos`) VALUES
(110, 'Amanalco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `id_propietario` int(10) UNSIGNED NOT NULL,
  `nombre_propietario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos_p` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_domicilioinm` int(10) UNSIGNED NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`id_propietario`, `nombre_propietario`, `apellidos_p`, `id_domicilioinm`, `updated_at`, `created_at`) VALUES
(1, 'Daniela Michelle', 'Vilchis Martinez', 1, NULL, NULL),
(2, 'Juan Carlos', 'Quintin Sotero', 2, NULL, NULL),
(3, 'Martha Elizabeth', 'Nieto Sanchez', 3, NULL, NULL),
(4, 'Shara Lulu', 'Lucas Clemente', 4, NULL, NULL),
(5, 'Shara Lulu', 'Lucas Clemente', 5, NULL, NULL),
(6, 'Alejando', 'Vidal Gomez', 6, NULL, NULL),
(7, 'Diana', 'Sanchez Marcos', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-08-25 09:21:35', '2020-08-25 09:21:35'),
(2, 'user', 'User', '2020-08-25 09:21:35', '2020-08-25 09:21:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2020-08-25 09:30:38', '2020-08-25 09:30:38'),
(2, 2, 2, '2020-08-25 09:31:48', '2020-08-25 09:31:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(10) UNSIGNED NOT NULL,
  `nombre_servicio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `nombre_servicio`) VALUES
(300, 'Plano de localizacion'),
(400, 'Imagen satelital con coordenadas UTM'),
(500, 'Manifestacion catastral'),
(600, 'Traslado de dominio'),
(700, 'Certificación de plano manzanero'),
(800, 'Certificación de clave y valor catastral'),
(900, 'Verificación de linderos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_usuarios`
--

CREATE TABLE `tipos_usuarios` (
  `id_tipousuario` int(10) UNSIGNED NOT NULL,
  `desc_tipousuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipos_usuarios`
--

INSERT INTO `tipos_usuarios` (`id_tipousuario`, `desc_tipousuario`) VALUES
(100, 'Administrador'),
(200, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_tipousuario` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `id_tipousuario`) VALUES
(1, 'Administrador', 'admin@catastro.com', NULL, '$2y$10$Qqw7bIOtWh8jB45VMxbdQ.1Gxa0eqeK4pcU3/XPltizyktXczUNFu', NULL, '2020-08-25 09:30:37', '2020-08-25 09:30:37', 100),
(2, 'Invitado', 'usuario@catastro.com', NULL, '$2y$10$KV43Aja0sj8zyaFZyNLuNumvZOXTkHpxTSuHWwqFDQ3sfDTfRZbJa', NULL, '2020-08-25 09:31:48', '2020-08-25 09:31:48', 200);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`folio`);

--
-- Indices de la tabla `ciudadanos`
--
ALTER TABLE `ciudadanos`
  ADD PRIMARY KEY (`id_ciudadano`);

--
-- Indices de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD PRIMARY KEY (`id_domicilio`);

--
-- Indices de la tabla `domiciliosinms`
--
ALTER TABLE `domiciliosinms`
  ADD PRIMARY KEY (`id_domicilioinms`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id_localidad`);

--
-- Indices de la tabla `localidadesdos`
--
ALTER TABLE `localidadesdos`
  ADD PRIMARY KEY (`id_localidaddos`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_municipio`);

--
-- Indices de la tabla `municipiosdos`
--
ALTER TABLE `municipiosdos`
  ADD PRIMARY KEY (`id_municipiodos`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`id_propietario`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  ADD PRIMARY KEY (`id_tipousuario`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `folio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ciudadanos`
--
ALTER TABLE `ciudadanos`
  MODIFY `id_ciudadano` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  MODIFY `id_domicilio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `domiciliosinms`
--
ALTER TABLE `domiciliosinms`
  MODIFY `id_domicilioinms` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id_horario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=404;

--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
  MODIFY `id_localidad` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `localidadesdos`
--
ALTER TABLE `localidadesdos`
  MODIFY `id_localidaddos` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_municipio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `municipiosdos`
--
ALTER TABLE `municipiosdos`
  MODIFY `id_municipiodos` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `id_propietario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=901;

--
-- AUTO_INCREMENT de la tabla `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  MODIFY `id_tipousuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
