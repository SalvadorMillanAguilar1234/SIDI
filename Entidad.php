<?php
class Elementos{
	private $idEcuesta;
        private $nombre;
        private $no_control;
        private $carrera;
        private $ano_de_egreso;
        private $titulado; 
        private $ano_de_titulacion;
        private $opcion_de_titulacion;
        private $laborar;
        private $estudiar_posgrado;
        private $area_de_interes_en_el_posgrado;
        private $correo_electronico;
        private $telefono_particular;
        private $telefono_celular;
        private $actualmente_trabaja;
        private $empresa;
        private $puesto;
        private $tels;
        private $empresa_donde_realizaste_tu_servicio_social;
        private $empresa_donde_realizaste_tu_residencia_profesional;
        private $idioma_ingles;
        private $experiencia_en_el_servicio_social;
        private $experiencia_en_las_residencias_profesionales;
        private $actividades_extraescolares;
        private $tramites_escolares;
        private $tramites_de_titulacion;
        private $instalaciones;
        private $laboratorios;
        
        //TABLA encuesta_seguimiento_perfil_de_egresados
        private $idEcuesta2;
        private $no_folio;
        private $nombre_egresado;
        private $no_control_egresado;
        private $fecha_nacimiento;
        private $curp;
        private $sexo_2;
        private $estado_civil;
        private $calle_del_egresado;
        private $no_2_del_egresado;
        private $colonia_egresado;
        private $codigo_postal_del_egresado;
        private $ciudad_del_egresado;
        private $municipio_del_egresado;
        private $estado_del_egresado;
        private $telefono_del_egresado;
        private $correo_del_egresado;
        private $telefono_de_casa_del_egresado;
        private $carrera_de_egreso_y_especialidad;
        private $titulados;
        private $dominio_de_idiomas_extranjero_ingles;
        private $dominio_de_idiomas_extranjero_otro;
        private $manejo_de_paquetes_computacionales_especificar;
        
        
        private $calidad_de_los_docentes;
        private $plan_de_estudios;
        private $oportunidad_de_participar_en_proyectos_de_investigacion_y_desarr;
        private $enfasis_que_se_le_prestaba_a_la_investigacion_y_desarrollo;
        private $satisfaccion_con_las_condiciones_de_estudio_infraestructura;
        private $experiencia_obtenida_a_traves_de_la_residencia_profesional;
        
        private $actividad_a_la_que_se_dedica_actualmente;
        private $si_estudia_indica_si_es;
        private $especialidad_e_institucion;
        private $en_el_caso_de_trabajar_Tiempo_transcurrido_para_obtener_lo;
        private $medio_para_obtener_el_empleo;
        private $requisitos_de_contratacion;
        private $idioma_que_utiliza_en_su_trabajo;
        private $en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_hablar;
        private $en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_escribi;
        private $en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_leer;
        private $en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_escucha;
        private $antiguedad_en_la_empresa;
        private $ano_de_ingreso;
        private $ingreso_salario_minimo_diario;
        private $nivel_jerarquico_en_el_trabajo;
        private $condicion_de_trabajo;
        private $relacion_del_trabajador_con_su_area_de_formacion;
        private $datos_de_la_empresa_u_organismo_organismo;
        private $giro_o_actividad_principal_de_la_empresa_u_organismo;
        private $razon_social;
        private $domicilio_calle_de_la_empresa;
        private $domicilio_No_de_la_empresa;
        private $domicilio_colonia_de_la_empresa;
        private $domicilio_CP_de_la_empresa;
        private $domicilio_ciudad_de_la_empresa;
        private $domicilio_municipio_de_la_empresa;
        private $domicilio_estado_de_la_empresa;
        private $tel_y_ext;
        private $fax;
        private $email;
        private $pagina_web;
        private $nombre_y_puesto_del_jefe_inmediato;
        private $sector_economico_de_la_empresa_u_organizacion_sector_primario;
        private $sector_economico_de_la_empresa_u_organizacion_sector_secundario;
        private $sector_economico_de_la_empresa_u_organizacion_sector_terciario;
        private $tamano_de_la_empresa_u_organizacion;
        
        
        private $eficiencia_actividades_formacion_academica;
        private $como_califica_su_formacion_academica_desempeno_laboral;
        private $utilidad_de_residencias_profesionales_o_practicas_profesionales;
        private $aspectos_que_valora_empresa_u_organismo_area_o_campo_de_estudio;
        private $aspectos_que_valora_empresa_u_organismo_titulacion;
        private $aspectos_que_valora_empresa_u_organismo_experiencia_laboral;
        private $aspectos_que_valora_empresa_u_organismo_competencia_laboral;
        private $aspectos_que_valora_empresa_u_organismo_posicionamiento_de_la_IN;
        private $aspectos_que_valora_empresa_u_organismo_conocimientos_idiomas_EX;
        private $aspectos_que_valora_empresa_u_organismo_recomendaciones_referenc;
        private $aspectos_que_valora_empresa_u_organismo_personalidad_actitudes;
        private $aspectos_que_valora_empresa_u_organismo_capacidad_de_liderazgo;
        private $aspectos_que_valora_empresa_u_organismo_otros;
        
        private $actualizacion_de_conocimientos_le_gusta_tomar_cursos_de_act;
        private $actualizacion_de_conocimientos_le_gusta_tomar_cursos_de_act_cual;
        private $actualizacion_de_conocimientos_le_gusta_tomar_algun_posgrado;
        private $actualizacion_de_conocimientos_le_gusta_tomar_algun_posgrado_cua;
        
        private $pertenece_a_organizaciones_sociales;
        private $pertenece_a_organizaciones_sociales_cual;
        private $pertenece_a_organismos_de_profesionistas;
        private $pertenece_a_organismos_de_profesionistas_cual;
        private $pertenece_a_la_asociacion_de_egresados;
        
        private $opinion_para_mejorar_formacion_profesional_de_un_egresado;
	
        //Atribitos de la encuesta 3 de empresas empleadoras
        private $idEcuesta3;
        private $no_folio_empresa;
        private $nombre_comercial_de_la_empresa;
        private $ciudad_de_la_empresa;
        private $municipio_de_la_empresa;
        private $estado_de_la_empresa;
        private $telefonos_de_la_empresa;
        private $correo_de_la_empresa;
        private $tipo_de_empresa;
        private $tamano_de_la_empresa;
        private $actividad_de_la_empresa;
        private $numero_de_profesionales_en_su_empresa;
        private $carreda_del_egresado;
        private $mando_del_egresado;
        private $carreda_del_egresado2;
        private $mando_del_egresado2;
        private $carreda_del_egresado3;
        private $mando_del_egresado3;
        private $carreda_del_egresado4;
        private $mando_del_egresado4;
        private $congruencia_del_perfil_profesional_del_egresado;
        private $requisito_de_la_empresa;
        private $requisito_de_la_empresa2;
        private $requisito_de_la_empresa3;
        private $requisito_de_la_empresa4;
        private $requisito_de_la_empresa5;
        private $requisito_de_la_empresa6;
        private $requisito_de_la_empresa7;
        private $requisito_de_la_empresa8;
        private $requisito_de_la_empresa9;
        private $carreras_que_demandan_preferencia_su_empresa;
        private $habilidad_para_resolver_conflictos;
        private $ortografia_Y_redaccion;
        private $mejora_de_procesos;
        private $trabajo_en_equipo;
        private $habilidad_para_administrar_el_tiempo;
        private $seguridad_personal;
        private $facilidad_de_palabra;
        private $gestion_de_proyectos;
        private $puntualidad_y_asistencia;
        private $cumplimiento_de_las_normas;
        private $integracion_al_trabajo;
        private $creatividad_y_innovacion;
        private $capacidad_de_negociacion;
        private $camacidad_deabstraccion_analisis_y_sintesis;
        private $liderasgo_y_toma_de_decisiones;
        private $adaptacion_al_cambio;
        private $otros_espesifica;
        private $nombre_otros_espesifica;
        private $desempeno_laboral_del_egresado;
        private $sugerensia_de_formacion_del_egresado;
        private $comentarios_y_sugerencias;
        
        //Elementos de el registro de actividades complementarias
        private $idActividad;
        private $tipo_de_taller;
        private $nombre_del_taller;
        private $dias;
        private $promotor;
        private $horario;
        private $lugar;
        
        //Elementos de las inscripciones a actividades complementarias
        private $idTaller;
        private $numero_de_control;
        private $nombre_del_alumno;
        private $nombre_de_la_ingenieria;
        private $semestre;
        private $nombre_del_taller_inscripcion;
        private $comprobacion;


        public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}