-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3308
-- Tiempo de generación: 18-02-2026 a las 00:20:51
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
-- Base de datos: `mi_curriculum`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `autor` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `post_id`, `autor`, `contenido`, `created_at`, `updated_at`) VALUES
(5, 7, 'Joao Cabral', 'Asi es... Buena visión', '2025-04-01 08:38:05', '2025-04-01 08:38:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formaciones`
--

CREATE TABLE `formaciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `centro_formacion` varchar(255) NOT NULL,
  `titulo_curso` varchar(255) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `horas_formativas` int(11) NOT NULL,
  `horas_pnl` int(11) DEFAULT NULL,
  `familia_profesional` varchar(255) DEFAULT NULL,
  `codigo_curso` varchar(255) DEFAULT NULL,
  `financiado_por` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `formaciones`
--

INSERT INTO `formaciones` (`id`, `centro_formacion`, `titulo_curso`, `fecha_inicio`, `fecha_fin`, `horas_formativas`, `horas_pnl`, `familia_profesional`, `codigo_curso`, `financiado_por`, `created_at`, `updated_at`) VALUES
(1, 'FEI. Vista Alegre', 'ANDROID REACT y HTML', '2025-01-16', '2025-02-18', 120, NULL, 'Informática y Comunicaciones', '74349 (11/3720)', 'Comunidad de Madrid', NULL, NULL),
(2, 'CENTRO GDOCE. Grupo Empresarial de Servicios, S.L.', 'CONFECCIÓN Y PUBLICACIÓN DE PÁGINAS WEB -IFC297_2', '2024-05-07', '2024-10-23', 560, 80, 'Informática y Comunicaciones', 'IFCD0110', 'SECRETARÍA GENERAL DE FORMACIÓN PROFESIONAL', NULL, NULL),
(3, 'CENTRO DE FORMACIÓN MUNICIPAL MÓSTOLES DESARROLLO', 'Desarrollo de Aplicaciones con Tecnologías Web', '2023-06-21', '2023-11-23', 510, 80, 'Informática y Comunicaciones', '22/2019/FDA', 'CONSEJERÍA ECONOMÍA, EMPLEO Y HACIENDA CAM', NULL, NULL),
(4, 'GROUPLANCE AM SERVICIOS SL', 'PROGRAMCIÓN DE APLICACIONES ORIENTADA A OBJECTOS', '2024-01-31', '2024-03-14', 60, 0, 'Informática y Comunicaciones', '(IFCD043PO) - FC22-7/2022/5116SEP - Modalidad presencial/virtual', 'Consejera de Economía, Empleo y Competitividad', NULL, NULL),
(5, 'EIE - ESCUELA INTERNACIONAL DE EMPRESAS. ACADEMIA LAGASCA SERRANO, S.A.', 'Programación Web con Software Libre', '2023-05-10', '2023-07-29', 80, 0, 'Informática y Comunicaciones', '22/2392 IFCT092PO', 'cOMUNIDAD DE mADRID', NULL, NULL),
(6, 'CORE NETWORKS S.L. - Teleformación', 'CREACIÓN DE BLOGS Y REDES SOCIALES', '2021-10-28', '2021-11-29', 50, 0, 'Informática y Comunicaciones', 'Código acción formativa: 3 - Código grupo: 100', 'Comunidad Madrid', NULL, NULL),
(7, 'CCC CENTRO DE ESTUDIOS PROFESIONALES - Teleformación', 'Internet Seguro', '2020-12-27', '2021-02-10', 50, 0, 'Informática y Comunicaciones', 'IFCT057PO', 'Comunidad de Madrid', NULL, NULL),
(8, 'CORE NETWORKS S.L. - tELEFORMACIÓN', 'CREACIÓN, PROGRAMACIÓN, DISEÑO DE PÁGINAS WEB con HTML5 Y CSS3', '2020-10-28', '2021-02-01', 210, 0, 'Informática y Comunicaciones', 'Expediente: f181389AA - Acción: 17', 'Comunidad de Madrid', NULL, NULL),
(9, 'N-nascor Formación - Teleformación', 'INTRODUCCIÓN A AJAX', '2021-09-23', '2021-10-07', 50, 0, 'Informática y Comunicaciones', 'Expediente FC13-09/2018/4238TG - Acción 59', 'Comunidad de Madrid', NULL, NULL),
(10, 'CCC CENTRO DE ESTUDIOS PROFESIONALES - tELEFORMACIÓN', 'Novedades en la Seguridad de Datos Personales', '2020-10-14', '2020-11-05', 15, 0, 'Informática y Comunicaciones', 'ADGD345PO', 'Fundación Estatal', NULL, NULL),
(11, 'Educación UDEMY: Juan Pablo de la Torre Valdez', 'Desarrollo Web Completo con HTML5, CSS3, JS, AJAX, PHP y MySql', '2022-12-05', '2023-06-12', 86, 0, 'Informática y Comunicaciones', 'UDEMY', 'Personal', NULL, NULL),
(12, 'Educación UDEMY - Jordan Alexander', 'CURSO CSS3', '2023-08-02', '2023-09-24', 28, 0, 'Informática y Comunicaciones', 'UDEMY', 'Personal', NULL, NULL),
(13, 'Educación UDEMY -Carlos Arturo Esparza', 'PHP8 y MySql, El curso Completo, Práctico y Desde Cero!', '2023-11-02', '2023-12-17', 20, NULL, 'Informática y Comnucaciones', 'UDEMY', 'Personal', NULL, NULL),
(14, 'Educación UDEMY - Juan Pablo de la Torre Valdez', 'Bootstrap 5 y SASS - La Guia Práctica - Crea 10 Sitios Web', '2022-11-13', '2023-01-27', 13, 0, 'Informática y Comunicaciones', 'UDEMY', 'Personal', NULL, NULL),
(15, 'Educación UDEMY - Juan Pablo de la Torre Valdez', 'React - La Guía Completa: Hooks Context Redux MERM + 15 Apps', '2024-01-03', '2024-03-15', 65, 0, 'Informática y Comunicaciones', 'UDEMY', 'Personal', NULL, NULL),
(16, 'Educación UDEMY - Juan Pablo de la Torre Valdez', 'Desarrollo Profesional de Temas y Plugins de WordPress', '2024-02-02', '2023-03-06', 18, 0, 'Informática y Comunicaciones', 'UDEMY', 'Personal', NULL, NULL),
(17, 'Educación UDEMY - Juan Pablo de la Torre Valdez', 'CSS La Guía Completa - Flexbox, CSS Grid, SASS + 20 Proyectos', '2023-12-06', '2023-01-12', 37, 0, 'Informática y Comunicaciones', 'UDEMY', 'Personal', NULL, NULL),
(18, 'Educación UDEMY - Pedro Jiménez', 'Master en Programación Fullstack, JavaScript, Angular, Node', '2022-12-12', '2023-06-10', 37, 0, 'UDEMY', 'Personal', NULL, NULL, NULL),
(19, 'Educación UDEMY - Jordan Alexander', 'Domina Tailwind CSS - Desde Cero a Experto, proyectos reales', '2024-02-04', '2024-04-19', 6, 0, 'Udemy', 'UDEMY', 'Personal', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_05_235923_create_formaciones_table', 1),
(5, '2025_03_06_000108_create_modulos_table', 1),
(6, '2025_03_07_184539_create_portafolio_table', 2),
(7, '2025_03_28_165443_create_posts_table', 3),
(8, '2025_03_28_165637_create_comentarios_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `formacion_id` bigint(20) UNSIGNED NOT NULL,
  `codigo_modulo` varchar(255) NOT NULL,
  `nombre_modulo` varchar(255) NOT NULL,
  `horas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id`, `formacion_id`, `codigo_modulo`, `nombre_modulo`, `horas`, `created_at`, `updated_at`) VALUES
(1, 2, 'MF0950_2', 'Construcción de Páginas Web', 210, NULL, NULL),
(3, 2, 'MF0951_2', 'Integración de Componentes Software en Páginas Web', 180, NULL, NULL),
(4, 2, 'MF0952_2', 'Publicación de Páginas Web', 90, NULL, NULL),
(5, 2, 'MP0278', 'Módulo de Prácticas Profesional no Laborables', 80, NULL, NULL),
(6, 3, 'MP0391', 'Módulo de Práticas Profesionles No Laborábles', 80, NULL, NULL),
(7, 3, 'MF0491_3', 'Programación Web en el Entorno Cliente', 180, NULL, NULL),
(8, 3, 'MF0492_3', 'Programación Web en el Entorno Servidor', 180, NULL, NULL),
(9, 3, 'MF0493_3', 'Implantación de Aplicaciones Web en el Entorno Internet, Intranet y Estranet', 90, NULL, NULL),
(10, 4, 'IFCD043PO', 'GROUPO 102', 0, NULL, NULL),
(11, 4, 'IFCD043PO', 'GROUPO 102', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafolio`
--

CREATE TABLE `portafolio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `portafolio`
--

INSERT INTO `portafolio` (`id`, `titulo`, `imagen`, `url`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, '\"Carrito de Compras para productos variados\"', 'carrito.jpeg', 'https://carrito-de-compras2-jcmc.netlify.app/', '\"Curso UDEMY. \r\nAprende el lenguaje más popular JavaScript\" \r\nSintaxis: ECMAScript ...ES10, ES11 y ES12 o también conocida como JavaScript Moderno. \r\nIncluye Node.js, Vue.js Express, Mongodb, React y mucho más! \r\nAprendi JavaScript fundamentos hasta temas avanzados:\r\nPrototypes, Delegation, Classes, Ajax, Promises, Generadores, Orientado a Objetos, Fetch API, Async Await, Async JS, Objetos, así como consumir REST APIs, API\'s de JavaScript nátivas y mucho más!\r\n\r\n!La mejor forma de aprender es desarrollando. Cree bastantes proyectos que me llevó desde el nivel básico hasta medio avanzado!\r\n', NULL, NULL),
(2, '\"BLACKJACK\"', 'blackjack.jpg', 'https://cartas-blackjack-jcmc.netlify.app/', '\"Curso UDEMY. \r\n\r\nReact, TypeScript, Vite. ', NULL, NULL),
(3, 'Calculadora de Propinas y Consumo: React Ts Reducer', 'calculadorapropinascalorias.jpg', 'https://calculadora-propinas-usereducer-jcmc.netlify.app/', 'Elige la comida que vas a comer, tendras precio, calorias consumidas y la propina que tendrás que aportar.', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `autor` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `contenido`, `imagen`, `autor`, `created_at`, `updated_at`) VALUES
(6, 'Inteligencia Artificial', 'La inteligencia artificial es un campo de la ciencia relacionado con la creación de computadoras y máquinas que pueden razonar, aprender y actuar de una manera que normalmente requeriría inteligencia humana o que involucra datos cuya escala excede lo que los humanos pueden analizar.', 'posts/m4gAPpiZ3KQBEOeLOEnJSVmYdTSEDrQEhgCJR3jw.jpg', 'Joao Cabral', '2025-04-01 08:35:05', '2025-04-01 08:35:05'),
(7, 'Cómo usar la IA para escribir texto nuevo', 'En una computadora, abre un archivo de Documentos de Google. En el documento, haz clic donde quieras escribir. A la derecha, haz clic en Ayúdame a escribir . Ingresa una indicación.', 'posts/uMFZehOVJ6wRJObkotjEHY4dZSe8hTDcxJGMMWGD.jpg', 'Lua Cabral Sanchez', '2025-04-01 08:37:42', '2025-04-01 08:37:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('CkJwvyEVP9S6h9r6062sXR6Y9qOXXl5TouJUlMXK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ2tRRVNjM1ZYZU5JT2ZxOTZnM1NlU1pLQWNOTkRHWndtSjJvUmJhOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1754239051),
('DiC4KdT7QUERuAmSWCeHKLWHSqVxru9Fq28UC1fq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVBndDhIYmt0VW9KSTF6MXRkb0pQbWpqdFNLeUxFR3lHdWdFOG5VdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb250YWN0byI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1754153876),
('kZlpNWTuNzsByZz1XQIw0kvb4BCBkO0zJepuamUL', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidGdnVll2Yk1KZlE1TWpiZ3ZxUllSR1Q2czA2NDFjcUIwUzh0M2VkdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1771023984),
('pjOu0bwFeOez7pvHUkOobjHee8pOSv6zNjjoOUhY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVV6Z1JZS3B6MGZwMlk3SUVLMjZmUnI0anNia1lmYlNhU3I3eXRvZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wb3J0YWZvbGlvIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1770491899),
('qNDm4p8JRqwAQRskqH2RTkhtXCrJOiSn0446Bq3H', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidDBEaDd3RDBqd2JqbGJIbGoybENyVXFaTjhYMXdYampzZk1GVmluaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1754217840),
('qqUJjmPnEF8SQI6khsyM633JNbmkYaJflMTPAUG4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQURzSlJQQXN0bDlDbWl5cVJabjlhTm5YejZGQWxsVnEzSkJ6bnBZNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9mb3JtYWNpb24iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1771198214),
('rmX5EeFi8OSTIThtxiYBXuNnuKUssu9YLOqk0VzV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRDBqNUN0QmZwcnZWWWxXYjFIem9EWGh2RVdnNDlNUTNNUmNaV3FHYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1754169390),
('vIJMl1Ej1fKPXKpPypMhPI87dDrpGhPl1SoEYQR8', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmo2NUFJTmRrcHk4Rmo0cTd0blYyVVA4VXFjVkxlbVE2eEhnMlA3eSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wb3J0YWZvbGlvIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1771097343),
('woH8sPClcsITEYUWWswWoquShFjhpryPSgdWUPjO', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY003cjE3NXd2WDZpdXNXOFZCbXlwdVRHODB1OUllZzJ6SXp4R1F1MiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1761740339);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentarios_post_id_foreign` (`post_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `formaciones`
--
ALTER TABLE `formaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modulos_formacion_id_foreign` (`formacion_id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formaciones`
--
ALTER TABLE `formaciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD CONSTRAINT `modulos_formacion_id_foreign` FOREIGN KEY (`formacion_id`) REFERENCES `formaciones` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
