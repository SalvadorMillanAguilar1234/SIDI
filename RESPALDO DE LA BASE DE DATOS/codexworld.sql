-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2017 a las 22:31:07
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `codexworld`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades_complementarias`
--

CREATE TABLE `actividades_complementarias` (
  `idActividad` int(11) NOT NULL,
  `tipo_de_taller` varchar(50) NOT NULL,
  `nombre_del_taller` varchar(50) NOT NULL,
  `dias` varchar(100) NOT NULL,
  `promotor` varchar(100) NOT NULL,
  `horario` varchar(100) NOT NULL,
  `lugar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividades_complementarias`
--

INSERT INTO `actividades_complementarias` (`idActividad`, `tipo_de_taller`, `nombre_del_taller`, `dias`, `promotor`, `horario`, `lugar`) VALUES
(11, 'culturales', 'n', 'uj', 'uju', 'hu', 'hu'),
(12, 'deportivas', 'as', 'a', 'sa', 'sa', 'sa'),
(13, 'culturales', 'Arte en lleso', 'Lunes y Viernes', 'Marta DÃ­az Zanchez', '15:00 - 16:00', 'CASA DE LA MUJER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_empresas_empleadoras_competencias_laborales`
--

CREATE TABLE `encuesta_empresas_empleadoras_competencias_laborales` (
  `idEcuesta3_3` int(11) NOT NULL,
  `habilidad_para_resolver_conflictos` int(2) DEFAULT NULL,
  `ortografia_Y_redaccion` int(2) DEFAULT NULL,
  `mejora_de_procesos` int(2) DEFAULT NULL,
  `trabajo_en_equipo` int(2) DEFAULT NULL,
  `habilidad_para_administrar_el_tiempo` int(2) DEFAULT NULL,
  `seguridad_personal` int(2) DEFAULT NULL,
  `facilidad_de_palabra` int(2) DEFAULT NULL,
  `gestion_de_proyectos` int(2) DEFAULT NULL,
  `puntualidad_y_asistencia` int(2) DEFAULT NULL,
  `cumplimiento_de_las_normas` int(2) DEFAULT NULL,
  `integracion_al_trabajo` int(2) DEFAULT NULL,
  `creatividad_y_innovacion` int(2) DEFAULT NULL,
  `capacidad_de_negociacion` int(2) DEFAULT NULL,
  `camacidad_deabstraccion_analisis_y_sintesis` int(2) DEFAULT NULL,
  `liderasgo_y_toma_de_decisiones` int(2) DEFAULT NULL,
  `adaptacion_al_cambio` int(2) DEFAULT NULL,
  `otra_competencia_laboral` varchar(100) DEFAULT NULL,
  `desempeno_laboral_del_egresado` varchar(20) DEFAULT NULL,
  `sugerensia_de_formacion_del_egresado` varchar(100) DEFAULT NULL,
  `comentarios_y_sugerencias` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_empresas_empleadoras_datos_generales_de_la_empresa_u_or`
--

CREATE TABLE `encuesta_empresas_empleadoras_datos_generales_de_la_empresa_u_or` (
  `idEcuesta3` int(11) NOT NULL,
  `no_folio_empresa` int(20) DEFAULT NULL,
  `nombre_comercial_de_la_empresa` varchar(100) DEFAULT NULL,
  `ciudad_de_la_empresa` varchar(100) DEFAULT NULL,
  `municipio_de_la_empresa` varchar(100) DEFAULT NULL,
  `estado_de_la_empresa` varchar(100) DEFAULT NULL,
  `telefonos_de_la_empresa` int(20) DEFAULT NULL,
  `correo_de_la_empresa` varchar(100) DEFAULT NULL,
  `tipo_de_empresa` varchar(100) DEFAULT NULL,
  `tamano_de_la_empresa` varchar(50) DEFAULT NULL,
  `actividad_de_la_empresa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_empresas_empleadoras_ubicacion_laboral_de_los_egresados`
--

CREATE TABLE `encuesta_empresas_empleadoras_ubicacion_laboral_de_los_egresados` (
  `idEcuesta3_1` int(11) NOT NULL,
  `numero_de_profesionales_en_su_empresa` varchar(50) DEFAULT NULL,
  `carreda_y_mando_de_los_egresado` varchar(250) DEFAULT NULL,
  `congruencia_del_perfil_profesional_del_egresado` varchar(50) DEFAULT NULL,
  `requisito_de_la_empresa` varchar(400) DEFAULT NULL,
  `carreras_que_demandan_preferencia_su_empresa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_salida`
--

CREATE TABLE `encuesta_salida` (
  `idEcuesta` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `no_control` int(7) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `ano_de_egreso` int(4) NOT NULL,
  `titulado` varchar(2) NOT NULL,
  `ano_de_titulacion` int(4) DEFAULT NULL,
  `opcion_de_titulacion` varchar(100) NOT NULL,
  `laborar` varchar(2) DEFAULT NULL,
  `estudiar_posgrado` varchar(2) DEFAULT NULL,
  `area_de_interes_en_el_posgrado` varchar(100) DEFAULT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `telefono_particular` int(12) NOT NULL,
  `telefono_celular` int(10) NOT NULL,
  `actualmente_trabaja` int(2) DEFAULT NULL,
  `empresa` varchar(100) DEFAULT NULL,
  `puesto` varchar(100) DEFAULT NULL,
  `tels` int(12) NOT NULL,
  `empresa_donde_realizaste_tu_servicio_social` varchar(100) NOT NULL,
  `empresa_donde_realizaste_tu_residencia_profesional` varchar(100) NOT NULL,
  `idioma_ingles` int(1) NOT NULL,
  `experiencia_en_el_servicio_social` int(1) NOT NULL,
  `experiencia_en_las_residencias_profesionales` int(1) NOT NULL,
  `actividades_extraescolares` int(1) NOT NULL,
  `tramites_escolares` int(1) NOT NULL,
  `tramites_de_titulacion` int(1) NOT NULL,
  `instalaciones` int(1) NOT NULL,
  `laboratorios` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta_salida`
--

INSERT INTO `encuesta_salida` (`idEcuesta`, `nombre`, `no_control`, `carrera`, `ano_de_egreso`, `titulado`, `ano_de_titulacion`, `opcion_de_titulacion`, `laborar`, `estudiar_posgrado`, `area_de_interes_en_el_posgrado`, `correo_electronico`, `telefono_particular`, `telefono_celular`, `actualmente_trabaja`, `empresa`, `puesto`, `tels`, `empresa_donde_realizaste_tu_servicio_social`, `empresa_donde_realizaste_tu_residencia_profesional`, `idioma_ingles`, `experiencia_en_el_servicio_social`, `experiencia_en_las_residencias_profesionales`, `actividades_extraescolares`, `tramites_escolares`, `tramites_de_titulacion`, `instalaciones`, `laboratorios`) VALUES
(1, 'zwearxsdtfvuinho', 123456789, 'xtserdcfvygbhunj', 1234567, 'si', 1234567, 'xrsdctfvygbuhn', 'si', 'si', 'cdrtfvygbuhnjm', 'ctvybuhnijm@ytgbuhnjm.xcom', 1234567, 2345678, 0, '0jweiof', 'xdcfvgbhjnk', 1234567, 'xrctfvgbhnjk', 'd5ftvygbhnjmk,', 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_seguimiento_comentarios_sugerencias`
--

CREATE TABLE `encuesta_seguimiento_comentarios_sugerencias` (
  `idEcuesta2_6` int(11) NOT NULL,
  `opinion_para_mejorar_formacion_profesional_de_un_egresado` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta_seguimiento_comentarios_sugerencias`
--

INSERT INTO `encuesta_seguimiento_comentarios_sugerencias` (`idEcuesta2_6`, `opinion_para_mejorar_formacion_profesional_de_un_egresado`) VALUES
(3, 'rxctvybunijmok,l'),
(4, 'xerctfvygbuhnijmok,'),
(5, 'xerctfvygbuhnijmok,');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_seguimiento_desempeno_profesionale`
--

CREATE TABLE `encuesta_seguimiento_desempeno_profesionale` (
  `idEncuestas2_3` int(11) NOT NULL,
  `eficiencia_actividades_formacion_academica` varchar(20) NOT NULL,
  `como_califica_su_formacion_academica_desempeno_laboral` varchar(20) NOT NULL,
  `utilidad_de_residencias_profesionales_o_practicas_profesionales` varchar(20) NOT NULL,
  `aspectos_que_valora_empresa_u_organismo_area_o_campo_de_estudio` int(3) NOT NULL,
  `aspectos_que_valora_empresa_u_organismo_titulacion` int(3) NOT NULL,
  `aspectos_que_valora_empresa_u_organismo_experiencia_laboral` int(3) NOT NULL,
  `aspectos_que_valora_empresa_u_organismo_competencia_laboral` int(3) NOT NULL,
  `aspectos_que_valora_empresa_u_organismo_posicionamiento_de_la_IN` int(3) NOT NULL,
  `aspectos_que_valora_empresa_u_organismo_recomendaciones_referenc` int(3) NOT NULL,
  `aspectos_que_valora_empresa_u_organismo_personalidad_actitudes` int(3) NOT NULL,
  `aspectos_que_valora_empresa_u_organismo_capacidad_de_liderazgo` int(3) NOT NULL,
  `aspectos_que_valora_empresa_u_organismo_otros` int(3) NOT NULL,
  `aspectos_que_valora_empresa_u_organismo_conocimientos_idiomas_EX` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta_seguimiento_desempeno_profesionale`
--

INSERT INTO `encuesta_seguimiento_desempeno_profesionale` (`idEncuestas2_3`, `eficiencia_actividades_formacion_academica`, `como_califica_su_formacion_academica_desempeno_laboral`, `utilidad_de_residencias_profesionales_o_practicas_profesionales`, `aspectos_que_valora_empresa_u_organismo_area_o_campo_de_estudio`, `aspectos_que_valora_empresa_u_organismo_titulacion`, `aspectos_que_valora_empresa_u_organismo_experiencia_laboral`, `aspectos_que_valora_empresa_u_organismo_competencia_laboral`, `aspectos_que_valora_empresa_u_organismo_posicionamiento_de_la_IN`, `aspectos_que_valora_empresa_u_organismo_recomendaciones_referenc`, `aspectos_que_valora_empresa_u_organismo_personalidad_actitudes`, `aspectos_que_valora_empresa_u_organismo_capacidad_de_liderazgo`, `aspectos_que_valora_empresa_u_organismo_otros`, `aspectos_que_valora_empresa_u_organismo_conocimientos_idiomas_EX`) VALUES
(9, 'Poco Eficiente', 'Regular', 'Regular', 1, 2, 3, 4, 4, 4, 3, 2, 1, 2),
(10, 'Poco Eficiente', 'Regular', 'Regular', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(11, 'Poco Eficiente', 'Regular', 'Regular', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_seguimiento_expectativas_de_desarrollo`
--

CREATE TABLE `encuesta_seguimiento_expectativas_de_desarrollo` (
  `idEcuesta2_4` int(11) NOT NULL,
  `actualizacion_de_conocimientos_le_gusta_tomar_cursos_de_act` varchar(3) NOT NULL,
  `actualizacion_de_conocimientos_le_gusta_tomar_cursos_de_act_cual` varchar(50) DEFAULT NULL,
  `actualizacion_de_conocimientos_le_gusta_tomar_algun_posgrado` varchar(3) NOT NULL,
  `actualizacion_de_conocimientos_le_gusta_tomar_algun_posgrado_cua` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta_seguimiento_expectativas_de_desarrollo`
--

INSERT INTO `encuesta_seguimiento_expectativas_de_desarrollo` (`idEcuesta2_4`, `actualizacion_de_conocimientos_le_gusta_tomar_cursos_de_act`, `actualizacion_de_conocimientos_le_gusta_tomar_cursos_de_act_cual`, `actualizacion_de_conocimientos_le_gusta_tomar_algun_posgrado`, `actualizacion_de_conocimientos_le_gusta_tomar_algun_posgrado_cua`) VALUES
(8, 'No', 'crtvybunio', 'No', 'vybnjmk,'),
(9, ' Si', 'fryvbuhnij', ' Si', 'vybuin'),
(10, ' Si', 'fryvbuhnij', ' Si', 'vybuin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_seguimiento_participacion_social_de_los_egresados`
--

CREATE TABLE `encuesta_seguimiento_participacion_social_de_los_egresados` (
  `idEcuesta2_5` int(11) NOT NULL,
  `pertenece_a_organizaciones_sociales` varchar(3) NOT NULL,
  `pertenece_a_organizaciones_sociales_cual` varchar(50) NOT NULL,
  `pertenece_a_organismos_de_profesionistas` varchar(3) NOT NULL,
  `pertenece_a_organismos_de_profesionistas_cual` varchar(50) NOT NULL,
  `pertenece_a_la_asociacion_de_egresados` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta_seguimiento_participacion_social_de_los_egresados`
--

INSERT INTO `encuesta_seguimiento_participacion_social_de_los_egresados` (`idEcuesta2_5`, `pertenece_a_organizaciones_sociales`, `pertenece_a_organizaciones_sociales_cual`, `pertenece_a_organismos_de_profesionistas`, `pertenece_a_organismos_de_profesionistas_cual`, `pertenece_a_la_asociacion_de_egresados`) VALUES
(4, 'No', 'rtino', 'No', 'df ghbjnm', ' Si'),
(5, ' Si', 'ryvbuinjom', ' Si', 'vgybuhnij', ' Si'),
(6, ' Si', 'ryvbuinjom', ' Si', 'vgybuhnij', ' Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_seguimiento_perfil_de_egresados`
--

CREATE TABLE `encuesta_seguimiento_perfil_de_egresados` (
  `idEcuesta2` int(11) NOT NULL,
  `no_folio` int(15) NOT NULL,
  `nombre_egresado` varchar(50) NOT NULL,
  `no_control_egresado` int(15) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `curp` varchar(30) NOT NULL,
  `sexo_2` varchar(15) NOT NULL,
  `estado_civil` varchar(30) NOT NULL,
  `calle_del_egresado` varchar(30) NOT NULL,
  `no_2_del_egresado` varchar(30) NOT NULL,
  `colonia_egresado` varchar(30) NOT NULL,
  `codigo_postal_del_egresado` int(10) NOT NULL,
  `ciudad_del_egresado` varchar(50) NOT NULL,
  `municipio_del_egresado` varchar(50) NOT NULL,
  `estado_del_egresado` varchar(50) NOT NULL,
  `telefono_del_egresado` int(15) NOT NULL,
  `correo_del_egresado` varchar(50) NOT NULL,
  `telefono_de_casa_del_egresado` int(15) NOT NULL,
  `carrera_de_egreso_y_especialidad` varchar(50) NOT NULL,
  `dominio_de_idiomas_extranjero_ingles` varchar(8) NOT NULL,
  `dominio_de_idiomas_extranjero_otro` varchar(30) DEFAULT NULL,
  `manejo_de_paquetes_computacionales_especificar` varchar(50) NOT NULL,
  `titulado` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta_seguimiento_perfil_de_egresados`
--

INSERT INTO `encuesta_seguimiento_perfil_de_egresados` (`idEcuesta2`, `no_folio`, `nombre_egresado`, `no_control_egresado`, `fecha_nacimiento`, `curp`, `sexo_2`, `estado_civil`, `calle_del_egresado`, `no_2_del_egresado`, `colonia_egresado`, `codigo_postal_del_egresado`, `ciudad_del_egresado`, `municipio_del_egresado`, `estado_del_egresado`, `telefono_del_egresado`, `correo_del_egresado`, `telefono_de_casa_del_egresado`, `carrera_de_egreso_y_especialidad`, `dominio_de_idiomas_extranjero_ingles`, `dominio_de_idiomas_extranjero_otro`, `manejo_de_paquetes_computacionales_especificar`, `titulado`) VALUES
(69, 123456789, 'rftyhui', 1234567, '0000-00-00', 'ezsxrdcfvgbhnj', 'Hombre', 'Soltero(a)', 'rxedctvybuhnij', '234567', 'drtfyuhij', 3245678, 'dxrctfvygbhj', 'fgybunijmok', 'ctvybuhnim', 12345678, 'cfvgbhnjm@dfghj.com', 123456789, 'swedrftyuhio', '50', 'crtvbyuhnijmok,p50', 'defygubhinjmok', 'si'),
(70, 123456789, 'rftyhui', 1234567, '0000-00-00', 'ezsxrdcfvgbhnj', 'Hombre', 'Soltero(a)', 'rxedctvybuhnij', '234567', 'drtfyuhij', 3245678, 'dxrctfvygbhj', 'fgybunijmok', 'ctvybuhnim', 12345678, 'cfvgbhnjm@dfghj.com', 123456789, 'swedrftyuhio', '50', 'crtvbyuhnijmok,p50', 'defygubhinjmok', 'si'),
(71, 123456789, 'rftyhui', 1234567, '0000-00-00', 'ezsxrdcfvgbhnj', 'Hombre', 'Soltero(a)', 'rxedctvybuhnij', '234567', 'drtfyuhij', 3245678, 'dxrctfvygbhj', 'fgybunijmok', 'ctvybuhnim', 12345678, 'cfvgbhnjm@dfghj.com', 123456789, 'swedrftyuhio', '50', 'crtvbyuhnijmok,p50', 'defygubhinjmok', 'si'),
(72, 123456789, 'rftyhui', 1234567, '0000-00-00', 'ezsxrdcfvgbhnj', 'Hombre', 'Soltero(a)', 'rxedctvybuhnij', '234567', 'drtfyuhij', 3245678, 'dxrctfvygbhj', 'fgybunijmok', 'ctvybuhnim', 12345678, 'cfvgbhnjm@dfghj.com', 123456789, 'swedrftyuhio', 'si', '50', 'crtvbyuhnijmok,p50', 'def'),
(73, 123456789, 'rftyhui', 1234567, '0000-00-00', 'ezsxrdcfvgbhnj', 'Hombre', 'Soltero(a)', 'rxedctvybuhnij', '234567', 'drtfyuhij', 3245678, 'dxrctfvygbhj', 'fgybunijmok', 'ctvybuhnim', 12345678, 'cfvgbhnjm@dfghj.com', 123456789, 'swedrftyuhio', 'si', '50', 'crtvbyuhnijmok,p50', 'def'),
(74, 123456789, 'rftyhui', 1234567, '0000-00-00', 'ezsxrdcfvgbhnj', 'Hombre', 'Soltero(a)', 'rxedctvybuhnij', '234567', 'drtfyuhij', 3245678, 'dxrctfvygbhj', 'fgybunijmok', 'ctvybuhnim', 12345678, 'cfvgbhnjm@dfghj.com', 123456789, 'swedrftyuhio', 'si', '50', 'crtvbyuhnijmok,p50', 'def'),
(75, 123456789, 'rftyhui', 1234567, '0000-00-00', 'ezsxrdcfvgbhnj', 'Hombre', 'Soltero(a)', 'rxedctvybuhnij', '234567', 'drtfyuhij', 3245678, 'dxrctfvygbhj', 'fgybunijmok', 'ctvybuhnim', 12345678, 'cfvgbhnjm@dfghj.com', 123456789, 'swedrftyuhio', 'si', '50', 'crtvbyuhnijmok,p50', 'def'),
(76, 123456789, 'rftyhui', 1234567, '0000-00-00', 'ezsxrdcfvgbhnj', 'Hombre', 'Soltero(a)', 'rxedctvybuhnij', '234567', 'drtfyuhij', 3245678, 'dxrctfvygbhj', 'fgybunijmok', 'ctvybuhnim', 12345678, 'cfvgbhnjm@dfghj.com', 123456789, 'swedrftyuhio', 'si', '50', 'crtvbyuhnijmok,p50', 'def'),
(77, 123456789, 'rftyhui', 1234567, '0000-00-00', 'ezsxrdcfvgbhnj', 'Hombre', 'Soltero(a)', 'rxedctvybuhnij', '234567', 'drtfyuhij', 3245678, 'dxrctfvygbhj', 'fgybunijmok', 'ctvybuhnim', 12345678, 'cfvgbhnjm@dfghj.com', 123456789, 'swedrftyuhio', 'si', '50', 'crtvbyuhnijmok,p50', 'def'),
(78, 123456789, 'rftyhui', 1234567, '0000-00-00', 'ezsxrdcfvgbhnj', 'Hombre', 'Soltero(a)', 'rxedctvybuhnij', '234567', 'drtfyuhij', 3245678, 'dxrctfvygbhj', 'fgybunijmok', 'ctvybuhnim', 12345678, 'cfvgbhnjm@dfghj.com', 123456789, 'swedrftyuhio', 'si', '50', 'crtvbyuhnijmok,p50', 'def'),
(79, 123456789, 'rftyhui', 1234567, '0000-00-00', 'ezsxrdcfvgbhnj', 'Hombre', 'Soltero(a)', 'rxedctvybuhnij', '234567', 'drtfyuhij', 3245678, 'dxrctfvygbhj', 'fgybunijmok', 'ctvybuhnim', 12345678, 'cfvgbhnjm@dfghj.com', 123456789, 'swedrftyuhio', 'si', '50', 'crtvbyuhnijmok,p50', 'def'),
(80, 234567890, 'sdefrtgyhujiko', 2345678, '0000-00-00', 'rdctfvygbuhnijmok,pl', 'Hombre', 'Soltero(a)', 'erdctfvygbuhnj', '2345678', 'vgbhnjmk', 3456789, 'crdtfvgybhjnkml', 'tvybunij', 'fvhgbjnk', 23456789, 'rcr@dfghjk.com', 1234567890, 'xrcvfygbhnj', 'si', '50%', 'espano, 50%', 'zxr'),
(81, 234567890, 'sdefrtgyhujiko', 2345678, '0000-00-00', 'rdctfvygbuhnijmok,pl', 'Hombre', 'Soltero(a)', 'erdctfvygbuhnj', '2345678', 'vgbhnjmk', 3456789, 'crdtfvgybhjnkml', 'tvybunij', 'fvhgbjnk', 23456789, 'rcr@dfghjk.com', 1234567890, 'xrcvfygbhnj', 'si', '50%', 'espano, 50%', 'zxr');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_seguimiento_recursos_aprendizaje`
--

CREATE TABLE `encuesta_seguimiento_recursos_aprendizaje` (
  `idEcuesta2_1` int(11) NOT NULL,
  `calidad_de_los_docentes` varchar(15) NOT NULL,
  `plan_de_estudios` varchar(15) NOT NULL,
  `oportunidad_de_participar_en_proyectos_de_investigacion_y_desarr` varchar(15) NOT NULL,
  `enfasis_que_se_le_prestaba_a_la_investigacion_y_desarrollo` varchar(15) NOT NULL,
  `satisfaccion_con_las_condiciones_de_estudio_infraestructura` varchar(15) NOT NULL,
  `experiencia_obtenida_a_traves_de_la_residencia_profesional` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta_seguimiento_recursos_aprendizaje`
--

INSERT INTO `encuesta_seguimiento_recursos_aprendizaje` (`idEcuesta2_1`, `calidad_de_los_docentes`, `plan_de_estudios`, `oportunidad_de_participar_en_proyectos_de_investigacion_y_desarr`, `enfasis_que_se_le_prestaba_a_la_investigacion_y_desarrollo`, `satisfaccion_con_las_condiciones_de_estudio_infraestructura`, `experiencia_obtenida_a_traves_de_la_residencia_profesional`) VALUES
(57, 'Muy Buena', 'Muy Buenos', 'Muy Buena', 'Muy Buena', 'Muy Buena', 'Muy Buena'),
(58, 'Muy Buena', 'Muy Buenos', 'Muy Buena', 'Muy Buena', 'Muy Buena', 'Muy Buena'),
(59, 'Muy Buena', 'Muy Buenos', 'Muy Buena', 'Muy Buena', 'Muy Buena', 'Muy Buena'),
(60, 'Muy Buena', 'Muy Buenos', 'Muy Buena', 'Muy Buena', 'Muy Buena', 'Muy Buena'),
(61, 'Muy Buena', 'Muy Buenos', 'Muy Buena', 'Muy Buena', 'Muy Buena', 'Muy Buena'),
(62, 'Muy Buena', 'Muy Buenos', 'Muy Buena', 'Muy Buena', 'Muy Buena', 'Muy Buena'),
(63, 'Muy Buena', 'Muy Buenos', 'Muy Buena', 'Muy Buena', 'Muy Buena', 'Muy Buena'),
(64, 'Muy Buena', 'Muy Buenos', 'Muy Buena', 'Muy Buena', 'Muy Buena', 'Muy Buena'),
(65, 'Muy Buena', 'Muy Buenos', 'Muy Buena', 'Muy Buena', 'Muy Buena', 'Muy Buena'),
(66, 'Muy Buena', 'Muy Buenos', 'Muy Buena', 'Muy Buena', 'Muy Buena', 'Muy Buena'),
(67, 'Muy Buena', 'Muy Buenos', 'Muy Buena', 'Muy Buena', 'Muy Buena', 'Muy Buena'),
(68, 'Muy Buena', 'Muy Buenos', 'Muy Buena', 'Muy Buena', 'Muy Buena', 'Muy Buena'),
(69, 'Muy Buena', 'Muy Buenos', 'Muy Buena', 'Muy Buena', 'Muy Buena', 'Muy Buena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_seguimiento_ubicacion_laboral_egresados`
--

CREATE TABLE `encuesta_seguimiento_ubicacion_laboral_egresados` (
  `actividad_a_la_que_se_dedica_actualmente` varchar(50) NOT NULL,
  `si_estudia_indica_si_es` varchar(50) NOT NULL,
  `especialidad_e_institucion` varchar(50) NOT NULL,
  `en_el_caso_de_trabajar_Tiempo_transcurrido_para_obtener_lo` varchar(50) NOT NULL,
  `medio_para_obtener_el_empleo` varchar(100) NOT NULL,
  `requisitos_de_contratacion` varchar(100) NOT NULL,
  `idioma_que_utiliza_en_su_trabajo` varchar(50) NOT NULL,
  `en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_hablar` varchar(10) DEFAULT NULL,
  `en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_escribi` varchar(10) DEFAULT NULL,
  `en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_leer` varchar(10) DEFAULT NULL,
  `en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_escucha` varchar(10) DEFAULT NULL,
  `antiguedad_en_la_empresa` varchar(50) NOT NULL,
  `ano_de_ingreso` varchar(50) NOT NULL,
  `ingreso_salario_minimo_diario` varchar(50) NOT NULL,
  `nivel_jerarquico_en_el_trabajo` varchar(50) NOT NULL,
  `condicion_de_trabajo` varchar(50) NOT NULL,
  `relacion_del_trabajador_con_su_area_de_formacion` varchar(6) NOT NULL,
  `datos_de_la_empresa_u_organismo_organismo` varchar(20) NOT NULL,
  `giro_o_actividad_principal_de_la_empresa_u_organismo` varchar(50) NOT NULL,
  `razon_social` varchar(50) NOT NULL,
  `domicilio_calle_de_la_empresa` varchar(50) NOT NULL,
  `domicilio_No_de_la_empresa` int(10) NOT NULL,
  `domicilio_colonia_de_la_empresa` varchar(50) NOT NULL,
  `domicilio_CP_de_la_empresa` int(10) NOT NULL,
  `domicilio_ciudad_de_la_empresa` varchar(50) NOT NULL,
  `domicilio_municipio_de_la_empresa` varchar(50) NOT NULL,
  `domicilio_estado_de_la_empresa` varchar(50) NOT NULL,
  `tel_y_ext` int(20) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pagina_web` varchar(60) NOT NULL,
  `nombre_y_puesto_del_jefe_inmediato` varchar(60) NOT NULL,
  `sector_economico_de_la_empresa_u_organizacion_sector_primario` varchar(30) NOT NULL,
  `sector_economico_de_la_empresa_u_organizacion_sector_secundario` varchar(30) NOT NULL,
  `sector_economico_de_la_empresa_u_organizacion_sector_terciario` varchar(30) NOT NULL,
  `tamano_de_la_empresa_u_organizacion` varchar(30) NOT NULL,
  `idEcuesta2_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta_seguimiento_ubicacion_laboral_egresados`
--

INSERT INTO `encuesta_seguimiento_ubicacion_laboral_egresados` (`actividad_a_la_que_se_dedica_actualmente`, `si_estudia_indica_si_es`, `especialidad_e_institucion`, `en_el_caso_de_trabajar_Tiempo_transcurrido_para_obtener_lo`, `medio_para_obtener_el_empleo`, `requisitos_de_contratacion`, `idioma_que_utiliza_en_su_trabajo`, `en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_hablar`, `en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_escribi`, `en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_leer`, `en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_escucha`, `antiguedad_en_la_empresa`, `ano_de_ingreso`, `ingreso_salario_minimo_diario`, `nivel_jerarquico_en_el_trabajo`, `condicion_de_trabajo`, `relacion_del_trabajador_con_su_area_de_formacion`, `datos_de_la_empresa_u_organismo_organismo`, `giro_o_actividad_principal_de_la_empresa_u_organismo`, `razon_social`, `domicilio_calle_de_la_empresa`, `domicilio_No_de_la_empresa`, `domicilio_colonia_de_la_empresa`, `domicilio_CP_de_la_empresa`, `domicilio_ciudad_de_la_empresa`, `domicilio_municipio_de_la_empresa`, `domicilio_estado_de_la_empresa`, `tel_y_ext`, `fax`, `email`, `pagina_web`, `nombre_y_puesto_del_jefe_inmediato`, `sector_economico_de_la_empresa_u_organizacion_sector_primario`, `sector_economico_de_la_empresa_u_organizacion_sector_secundario`, `sector_economico_de_la_empresa_u_organizacion_sector_terciario`, `tamano_de_la_empresa_u_organizacion`, `idEcuesta2_2`) VALUES
('Trabaja', 'Especialidad', 'asdasdasda', 'MÃ¡s de un aÃ±o', 'Residencia Profesiional', 'Titulo Profesional', 'FrancÃ©s', NULL, NULL, NULL, NULL, 'Menos de un aÃ±o', '12345678', 'Entre cincon y siete', 'Supervisor', 'Eventual', '100%', 'Privado', '', '', 'xcrvtbynu', 2345678, 'ertyuio', 345678, 'dfghjkl', 'dfghjk', 'rfgthyjkl', 1234567, 'as4de5fr6tgy', 'xcrtvybunijmo,@byhumi.com', 'dfrtgyhuio', 'crtvybuhnjmk', 'Pesquero', 'ConstrucciÃ³n', 'Comercio', 'Microempresa(1-30)', 20),
('Trabaja', 'Especialidad', 'xrctvybunim', 'Antes de Egresar', 'Bolsa de trabajo del plantel', 'Competencias Laborales', 'InglÃ©s', NULL, NULL, NULL, NULL, 'Un aÃ±o', '23456789', 'Menos de cinco', 'TÃ©cnico', 'Base', '100%', 'PÃºblico', 'defrgtyhuijop', 'xcvybunijmok,', 'cfvgbhnj', 234567, 'cfvgbhjnjmk', 12345678, 'xerdctfvybguhnj', 'dcfvgbhnjmk', 'fygbhnjkm', 12345678, '12345678', 'xcgfvhbgjn@hvgbjhk', 'exrctvybunim', 'rctvybuhnjm', 'Pesquero', 'ConstrucciÃ³n', 'Comercio', 'Microempresa(1-30)', 21),
('Trabaja', 'Especialidad', 'xrctvybunim', 'Antes de Egresar', 'Bolsa de trabajo del plantel', 'Competencias Laborales', 'InglÃ©s', '50%', '50%', '50%', '50%', 'Un aÃ±o', '23456789', 'Menos de cinco', 'TÃ©cnico', 'Base', '100%', 'PÃºblico', 'defrgtyhuijop', 'xcvybunijmok,', 'cfvgbhnj', 234567, 'cfvgbhjnjmk', 12345678, 'xerdctfvybguhnj', 'dcfvgbhnjmk', 'fygbhnjkm', 12345678, '12345678', 'xcgfvhbgjn@hvgbjhk', 'exrctvybunim', 'rctvybuhnjm', 'Pesquero', 'ConstrucciÃ³n', 'Comercio', 'Microempresa(1-30)', 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `hola_e` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades_complementarias`
--
ALTER TABLE `actividades_complementarias`
  ADD PRIMARY KEY (`idActividad`);

--
-- Indices de la tabla `encuesta_empresas_empleadoras_competencias_laborales`
--
ALTER TABLE `encuesta_empresas_empleadoras_competencias_laborales`
  ADD PRIMARY KEY (`idEcuesta3_3`);

--
-- Indices de la tabla `encuesta_empresas_empleadoras_datos_generales_de_la_empresa_u_or`
--
ALTER TABLE `encuesta_empresas_empleadoras_datos_generales_de_la_empresa_u_or`
  ADD PRIMARY KEY (`idEcuesta3`);

--
-- Indices de la tabla `encuesta_empresas_empleadoras_ubicacion_laboral_de_los_egresados`
--
ALTER TABLE `encuesta_empresas_empleadoras_ubicacion_laboral_de_los_egresados`
  ADD PRIMARY KEY (`idEcuesta3_1`);

--
-- Indices de la tabla `encuesta_salida`
--
ALTER TABLE `encuesta_salida`
  ADD PRIMARY KEY (`idEcuesta`);

--
-- Indices de la tabla `encuesta_seguimiento_comentarios_sugerencias`
--
ALTER TABLE `encuesta_seguimiento_comentarios_sugerencias`
  ADD PRIMARY KEY (`idEcuesta2_6`);

--
-- Indices de la tabla `encuesta_seguimiento_desempeno_profesionale`
--
ALTER TABLE `encuesta_seguimiento_desempeno_profesionale`
  ADD PRIMARY KEY (`idEncuestas2_3`);

--
-- Indices de la tabla `encuesta_seguimiento_expectativas_de_desarrollo`
--
ALTER TABLE `encuesta_seguimiento_expectativas_de_desarrollo`
  ADD PRIMARY KEY (`idEcuesta2_4`);

--
-- Indices de la tabla `encuesta_seguimiento_participacion_social_de_los_egresados`
--
ALTER TABLE `encuesta_seguimiento_participacion_social_de_los_egresados`
  ADD PRIMARY KEY (`idEcuesta2_5`);

--
-- Indices de la tabla `encuesta_seguimiento_perfil_de_egresados`
--
ALTER TABLE `encuesta_seguimiento_perfil_de_egresados`
  ADD PRIMARY KEY (`idEcuesta2`);

--
-- Indices de la tabla `encuesta_seguimiento_recursos_aprendizaje`
--
ALTER TABLE `encuesta_seguimiento_recursos_aprendizaje`
  ADD PRIMARY KEY (`idEcuesta2_1`);

--
-- Indices de la tabla `encuesta_seguimiento_ubicacion_laboral_egresados`
--
ALTER TABLE `encuesta_seguimiento_ubicacion_laboral_egresados`
  ADD PRIMARY KEY (`idEcuesta2_2`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades_complementarias`
--
ALTER TABLE `actividades_complementarias`
  MODIFY `idActividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `encuesta_empresas_empleadoras_competencias_laborales`
--
ALTER TABLE `encuesta_empresas_empleadoras_competencias_laborales`
  MODIFY `idEcuesta3_3` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `encuesta_empresas_empleadoras_datos_generales_de_la_empresa_u_or`
--
ALTER TABLE `encuesta_empresas_empleadoras_datos_generales_de_la_empresa_u_or`
  MODIFY `idEcuesta3` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `encuesta_empresas_empleadoras_ubicacion_laboral_de_los_egresados`
--
ALTER TABLE `encuesta_empresas_empleadoras_ubicacion_laboral_de_los_egresados`
  MODIFY `idEcuesta3_1` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `encuesta_salida`
--
ALTER TABLE `encuesta_salida`
  MODIFY `idEcuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `encuesta_seguimiento_comentarios_sugerencias`
--
ALTER TABLE `encuesta_seguimiento_comentarios_sugerencias`
  MODIFY `idEcuesta2_6` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `encuesta_seguimiento_desempeno_profesionale`
--
ALTER TABLE `encuesta_seguimiento_desempeno_profesionale`
  MODIFY `idEncuestas2_3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `encuesta_seguimiento_expectativas_de_desarrollo`
--
ALTER TABLE `encuesta_seguimiento_expectativas_de_desarrollo`
  MODIFY `idEcuesta2_4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `encuesta_seguimiento_participacion_social_de_los_egresados`
--
ALTER TABLE `encuesta_seguimiento_participacion_social_de_los_egresados`
  MODIFY `idEcuesta2_5` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `encuesta_seguimiento_perfil_de_egresados`
--
ALTER TABLE `encuesta_seguimiento_perfil_de_egresados`
  MODIFY `idEcuesta2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT de la tabla `encuesta_seguimiento_recursos_aprendizaje`
--
ALTER TABLE `encuesta_seguimiento_recursos_aprendizaje`
  MODIFY `idEcuesta2_1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT de la tabla `encuesta_seguimiento_ubicacion_laboral_egresados`
--
ALTER TABLE `encuesta_seguimiento_ubicacion_laboral_egresados`
  MODIFY `idEcuesta2_2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
