<?php

class ElementosModelo {

    private $conexion;

    public function __CONSTRUCT() { #CONTRUSCTOR DE LA CLASE PARA CREAR LA CONEXION
        try {
            $this->conexion = new PDO('mysql:host=localhost;dbname=codexworld', 'root', '');
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(Elementos $datos) {
        try {
            $consulta = "INSERT INTO encuesta_salida( `nombre`, `no_control`, `carrera`, `ano_de_egreso`, `titulado`, `ano_de_titulacion`, `opcion_de_titulacion`, `laborar`, `estudiar_posgrado`, `area_de_interes_en_el_posgrado`, `correo_electronico`, `telefono_particular`, `telefono_celular`, `actualmente_trabaja`, `empresa`, `puesto`, `tels`, `empresa_donde_realizaste_tu_servicio_social`, `empresa_donde_realizaste_tu_residencia_profesional`, `idioma_ingles`, `experiencia_en_el_servicio_social`, `experiencia_en_las_residencias_profesionales`, `actividades_extraescolares`, `tramites_escolares`, `tramites_de_titulacion`, `instalaciones`, `laboratorios`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $this->conexion->prepare($consulta)->execute(array(
                $datos->__GET('nombre'),
                $datos->__GET('no_control'),
                $datos->__GET('carrera'),
                $datos->__GET('ano_de_egreso'),
                $datos->__GET('titulado'),
                $datos->__GET('ano_de_titulacion'),
                $datos->__GET('opcion_de_titulacion'),
                $datos->__GET('laborar'),
                $datos->__GET('estudiar_posgrado'),
                $datos->__GET('area_de_interes_en_el_posgrado'),
                $datos->__GET('correo_electronico'),
                $datos->__GET('telefono_particular'),
                $datos->__GET('telefono_celular'),
                $datos->__GET('actualmente_trabaja'),
                $datos->__GET('empresa'),
                $datos->__GET('puesto'),
                $datos->__GET('tels'),
                $datos->__GET('empresa_donde_realizaste_tu_servicio_social'),
                $datos->__GET('empresa_donde_realizaste_tu_residencia_profesional'),
                $datos->__GET('idioma_ingles'),
                $datos->__GET('experiencia_en_el_servicio_social'),
                $datos->__GET('experiencia_en_las_residencias_profesionales'),
                $datos->__GET('actividades_extraescolares'),
                $datos->__GET('tramites_escolares'),
                $datos->__GET('tramites_de_titulacion'),
                $datos->__GET('instalaciones'),
                $datos->__GET('laboratorios'),
            ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar2(Elementos $datos) {
        try {
            $consulta = "INSERT INTO `encuesta_seguimiento_perfil_de_egresados`(`no_folio`, `nombre_egresado`, `no_control_egresado`, `fecha_nacimiento`, `curp`, `sexo_2`, `estado_civil`, `calle_del_egresado`, `no_2_del_egresado`, `colonia_egresado`, `codigo_postal_del_egresado`, `ciudad_del_egresado`, `municipio_del_egresado`, `estado_del_egresado`, `telefono_del_egresado`, `correo_del_egresado`, `telefono_de_casa_del_egresado`, `carrera_de_egreso_y_especialidad`, `dominio_de_idiomas_extranjero_ingles`, `dominio_de_idiomas_extranjero_otro`, `manejo_de_paquetes_computacionales_especificar`, `titulado`)"
                    . " VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $this->conexion->prepare($consulta)->execute(array(
                $datos->__GET('no_folio'),
                $datos->__GET('nombre_egresado'),
                $datos->__GET('no_control_egresado'),
                $datos->__GET('fecha_nacimiento'),
                $datos->__GET('curp'),
                $datos->__GET('sexo_2'),
                $datos->__GET('estado_civil'),
                $datos->__GET('calle_del_egresado'),
                $datos->__GET('no_2_del_egresado'),
                $datos->__GET('colonia_egresado'),
                $datos->__GET('codigo_postal_del_egresado'),
                $datos->__GET('ciudad_del_egresado'),
                $datos->__GET('municipio_del_egresado'),
                $datos->__GET('estado_del_egresado'),
                $datos->__GET('telefono_del_egresado'),
                $datos->__GET('correo_del_egresado'),
                $datos->__GET('telefono_de_casa_del_egresado'),
                $datos->__GET('carrera_de_egreso_y_especialidad'),
                $datos->__GET('titulados'),
                $datos->__GET('dominio_de_idiomas_extranjero_ingles'),
                $datos->__GET('dominio_de_idiomas_extranjero_otro'),
                $datos->__GET('manejo_de_paquetes_computacionales_especificar'),
            ));
            
                $consulta2 ="INSERT INTO encuesta_seguimiento_recursos_aprendizaje( `calidad_de_los_docentes`, `plan_de_estudios`,"
                        . " `oportunidad_de_participar_en_proyectos_de_investigacion_y_desarr`, `enfasis_que_se_le_prestaba_a_la_investigacion_y_desarrollo`, "
                        . "`satisfaccion_con_las_condiciones_de_estudio_infraestructura`, `experiencia_obtenida_a_traves_de_la_residencia_profesional`)"
                        . " VALUES (?,?,?,?,?,?)";
                $this->conexion->prepare($consulta2)->execute(array(
                $datos->__GET('calidad_de_los_docentes'),
                $datos->__GET('plan_de_estudios'),
                $datos->__GET('oportunidad_de_participar_en_proyectos_de_investigacion_y_desarr'),
                $datos->__GET('enfasis_que_se_le_prestaba_a_la_investigacion_y_desarrollo'),
                $datos->__GET('satisfaccion_con_las_condiciones_de_estudio_infraestructura'),
                $datos->__GET('experiencia_obtenida_a_traves_de_la_residencia_profesional'),
            ));
             
                
                $consulta3 = "INSERT INTO encuesta_seguimiento_ubicacion_laboral_egresados(`actividad_a_la_que_se_dedica_actualmente`, "
                        . "`si_estudia_indica_si_es`,"
                        . " `especialidad_e_institucion`,"
                        . " `en_el_caso_de_trabajar_Tiempo_transcurrido_para_obtener_lo`,"
                        . " `medio_para_obtener_el_empleo`,"
                        . " `requisitos_de_contratacion`, "
                        . "`idioma_que_utiliza_en_su_trabajo`, "
                        . "`en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_hablar`,"
                        . " `en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_escribi`, "
                        . "`en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_leer`, "
                        . "`en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_escucha`, "
                        . "`antiguedad_en_la_empresa`,"
                        . " `ano_de_ingreso`,"
                        . " `ingreso_salario_minimo_diario`, "
                        . "`nivel_jerarquico_en_el_trabajo`, "
                        . "`condicion_de_trabajo`,"
                        . " `relacion_del_trabajador_con_su_area_de_formacion`, `datos_de_la_empresa_u_organismo_organismo`,"
                        . " `giro_o_actividad_principal_de_la_empresa_u_organismo`, `razon_social`, `domicilio_calle_de_la_empresa`, "
                        . "`domicilio_No_de_la_empresa`, `domicilio_colonia_de_la_empresa`, `domicilio_CP_de_la_empresa`, `domicilio_ciudad_de_la_empresa`,"
                        . " `domicilio_municipio_de_la_empresa`, `domicilio_estado_de_la_empresa`, `tel_y_ext`, `fax`, `email`, `pagina_web`, `nombre_y_puesto_del_jefe_inmediato`, `sector_economico_de_la_empresa_u_organizacion_sector_primario`, `sector_economico_de_la_empresa_u_organizacion_sector_secundario`, `sector_economico_de_la_empresa_u_organizacion_sector_terciario`, `tamano_de_la_empresa_u_organizacion`)"
                        . " VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                
                $this->conexion->prepare($consulta3)->execute(array(
                $datos->__GET('actividad_a_la_que_se_dedica_actualmente'),
                $datos->__GET('si_estudia_indica_si_es'),
                $datos->__GET('especialidad_e_institucion'),
                $datos->__GET('en_el_caso_de_trabajar_Tiempo_transcurrido_para_obtener_lo'),
                $datos->__GET('medio_para_obtener_el_empleo'),
                $datos->__GET('requisitos_de_contratacion'),
                $datos->__GET('idioma_que_utiliza_en_su_trabajo'),
                $datos->__GET('en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_hablar'),
                $datos->__GET('en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_escribi'),
                $datos->__GET('en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_leer'),
                $datos->__GET('en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_escucha'),
                $datos->__GET('antiguedad_en_la_empresa'),
                $datos->__GET('ano_de_ingreso'),
                $datos->__GET('ingreso_salario_minimo_diario'),
                $datos->__GET('nivel_jerarquico_en_el_trabajo'),
                $datos->__GET('condicion_de_trabajo'),
                $datos->__GET('relacion_del_trabajador_con_su_area_de_formacion'),
                $datos->__GET('datos_de_la_empresa_u_organismo_organismo'),
                $datos->__GET('giro_o_actividad_principal_de_la_empresa_u_organismo'),
                $datos->__GET('razon_social'),
                $datos->__GET('domicilio_calle_de_la_empresa'),
                $datos->__GET('domicilio_No_de_la_empresa'),
                $datos->__GET('domicilio_colonia_de_la_empresa'),
                $datos->__GET('domicilio_CP_de_la_empresa'),
                $datos->__GET('domicilio_ciudad_de_la_empresa'),
                $datos->__GET('domicilio_municipio_de_la_empresa'),
                $datos->__GET('domicilio_estado_de_la_empresa'),
                $datos->__GET('tel_y_ext'),
                $datos->__GET('fax'),
                $datos->__GET('email'),
                $datos->__GET('pagina_web'),
                $datos->__GET('nombre_y_puesto_del_jefe_inmediato'),
                $datos->__GET('sector_economico_de_la_empresa_u_organizacion_sector_primario'),
                $datos->__GET('sector_economico_de_la_empresa_u_organizacion_sector_secundario'),
                $datos->__GET('sector_economico_de_la_empresa_u_organizacion_sector_terciario'),
                $datos->__GET('tamano_de_la_empresa_u_organizacion'),
            ));
                
                $consulta4 ="INSERT INTO encuesta_seguimiento_desempeno_profesionale(`eficiencia_actividades_formacion_academica`,"
                        . " `como_califica_su_formacion_academica_desempeno_laboral`, `utilidad_de_residencias_profesionales_o_practicas_profesionales`,"
                        . " `aspectos_que_valora_empresa_u_organismo_area_o_campo_de_estudio`, `aspectos_que_valora_empresa_u_organismo_titulacion`,"
                        . " `aspectos_que_valora_empresa_u_organismo_experiencia_laboral`, `aspectos_que_valora_empresa_u_organismo_competencia_laboral`, "
                        . "`aspectos_que_valora_empresa_u_organismo_posicionamiento_de_la_IN`, `aspectos_que_valora_empresa_u_organismo_recomendaciones_referenc`,"
                        . " `aspectos_que_valora_empresa_u_organismo_personalidad_actitudes`, `aspectos_que_valora_empresa_u_organismo_capacidad_de_liderazgo`,"
                        . " `aspectos_que_valora_empresa_u_organismo_otros`, `aspectos_que_valora_empresa_u_organismo_conocimientos_idiomas_EX`)"
                        . " VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $this->conexion->prepare($consulta4)->execute(array(
                $datos->__GET('eficiencia_actividades_formacion_academica'),
                $datos->__GET('como_califica_su_formacion_academica_desempeno_laboral'),
                $datos->__GET('utilidad_de_residencias_profesionales_o_practicas_profesionales'),
                $datos->__GET('aspectos_que_valora_empresa_u_organismo_area_o_campo_de_estudio'),
                $datos->__GET('aspectos_que_valora_empresa_u_organismo_titulacion'),
                $datos->__GET('aspectos_que_valora_empresa_u_organismo_experiencia_laboral'),
                $datos->__GET('aspectos_que_valora_empresa_u_organismo_competencia_laboral'),
                $datos->__GET('aspectos_que_valora_empresa_u_organismo_posicionamiento_de_la_IN'),
                $datos->__GET('aspectos_que_valora_empresa_u_organismo_conocimientos_idiomas_EX'),
                $datos->__GET('aspectos_que_valora_empresa_u_organismo_recomendaciones_referenc'),
                $datos->__GET('aspectos_que_valora_empresa_u_organismo_personalidad_actitudes'),
                $datos->__GET('aspectos_que_valora_empresa_u_organismo_capacidad_de_liderazgo'),
                $datos->__GET('aspectos_que_valora_empresa_u_organismo_otros'),
            ));
                
                $consulta5 ="INSERT INTO encuesta_seguimiento_expectativas_de_desarrollo(`actualizacion_de_conocimientos_le_gusta_tomar_cursos_de_act`,"
                        . " `actualizacion_de_conocimientos_le_gusta_tomar_cursos_de_act_cual`, `actualizacion_de_conocimientos_le_gusta_tomar_algun_posgrado`,"
                        . " `actualizacion_de_conocimientos_le_gusta_tomar_algun_posgrado_cua`)"
                        . " VALUES (?,?,?,?)";
                $this->conexion->prepare($consulta5)->execute(array(
                $datos->__GET('actualizacion_de_conocimientos_le_gusta_tomar_cursos_de_act'),
                $datos->__GET('actualizacion_de_conocimientos_le_gusta_tomar_cursos_de_act_cual'),
                $datos->__GET('actualizacion_de_conocimientos_le_gusta_tomar_algun_posgrado'),
                $datos->__GET('actualizacion_de_conocimientos_le_gusta_tomar_algun_posgrado_cua'),
            ));
                
                $consulta6 ="INSERT INTO encuesta_seguimiento_participacion_social_de_los_egresados(`pertenece_a_organizaciones_sociales`,"
                        . " `pertenece_a_organizaciones_sociales_cual`, `pertenece_a_organismos_de_profesionistas`,"
                        . " `pertenece_a_organismos_de_profesionistas_cual`, `pertenece_a_la_asociacion_de_egresados`)"
                        . " VALUES (?,?,?,?,?)";
                $this->conexion->prepare($consulta6)->execute(array(
                $datos->__GET('pertenece_a_organizaciones_sociales'),
                $datos->__GET('pertenece_a_organizaciones_sociales_cual'),
                $datos->__GET('pertenece_a_organismos_de_profesionistas'),
                $datos->__GET('pertenece_a_organismos_de_profesionistas_cual'),
                $datos->__GET('pertenece_a_la_asociacion_de_egresados'),
            ));
                
                 $consulta7 ="INSERT INTO encuesta_seguimiento_comentarios_sugerencias(`opinion_para_mejorar_formacion_profesional_de_un_egresado`)"
                         . " VALUES (?)";
                $this->conexion->prepare($consulta7)->execute(array(
                $datos->__GET('opinion_para_mejorar_formacion_profesional_de_un_egresado'),
            ));
                
                
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Registrar3(Elementos $datos) {
        try {
             $consulta ="INSERT INTO encuesta_empresas_empleadoras_datos_generales_de_la_empresa_u_or(`no_folio_empresa`, `nombre_comercial_de_la_empresa`,"
                     . " `ciudad_de_la_empresa`, `municipio_de_la_empresa`, `estado_de_la_empresa`, `telefonos_de_la_empresa`, `correo_de_la_empresa`, "
                     . "`tipo_de_empresa`, `tamano_de_la_empresa`, `actividad_de_la_empresa`)"
                     . " VALUES (?,?,?,?,?,?,?,?,?,?)";
            $this->conexion->prepare($consulta)->execute(array(
                $datos->__GET('no_folio_empresa'),
                $datos->__GET('nombre_comercial_de_la_empresa'),
                $datos->__GET('ciudad_de_la_empresa'),
                $datos->__GET('municipio_de_la_empresa'),
                $datos->__GET('estado_de_la_empresa'),
                $datos->__GET('telefonos_de_la_empresa'),
                $datos->__GET('correo_de_la_empresa'),
                $datos->__GET('tipo_de_empresa'),
                $datos->__GET('tamano_de_la_empresa'),
                $datos->__GET('actividad_de_la_empresa'),
                ));
            $consulta2 ="INSERT INTO encuesta_empresas_empleadoras_ubicacion_laboral_de_los_egresados(`numero_de_profesionales_en_su_empresa`, `carreda_y_mando_de_los_egresado`,"
                    . " `congruencia_del_perfil_profesional_del_egresado`, `requisito_de_la_empresa`, `carreras_que_demandan_preferencia_su_empresa`)"
                    . " VALUES (?,?,?,?,?)";
             $this->conexion->prepare($consulta2)->execute(array(
                $datos->__GET('numero_de_profesionales_en_su_empresa'),
                $datos->__GET('carreda_del_egresado').'-'.$datos->__GET('mando_del_egresado').''
                        . ' '.$datos->__GET('carreda_del_egresado2').'-'.$datos->__GET('mando_del_egresado2').''
                        . ' '.$datos->__GET('carreda_del_egresado3').'-'.$datos->__GET('mando_del_egresado3').''
                . ' '.$datos->__GET('carreda_del_egresado4').'-'.$datos->__GET('mando_del_egresado4'),
                $datos->__GET('congruencia_del_perfil_profesional_del_egresado'),
                $datos->__GET('requisito_de_la_empresa').', '.$datos->__GET('requisito_de_la_empresa2').', '
                . ''.$datos->__GET('requisito_de_la_empresa3').', '.$datos->__GET('requisito_de_la_empresa4').', '
                . ''.$datos->__GET('requisito_de_la_empresa5').', '.$datos->__GET('requisito_de_la_empresa6').', '
                . ''.$datos->__GET('requisito_de_la_empresa7').', '.$datos->__GET('requisito_de_la_empresa8').', '
                . ''.$datos->__GET('requisito_de_la_empresa9'),
                $datos->__GET('carreras_que_demandan_preferencia_su_empresa'),
                 ));
             $consulta3="INSERT INTO encuesta_empresas_empleadoras_competencias_laborales(`habilidad_para_resolver_conflictos`, `ortografia_Y_redaccion`,"
                     . " `mejora_de_procesos`, `trabajo_en_equipo`, `habilidad_para_administrar_el_tiempo`, `seguridad_personal`, `facilidad_de_palabra`, `gestion_de_proyectos`,"
                     . " `puntualidad_y_asistencia`, `cumplimiento_de_las_normas`, `integracion_al_trabajo`, `creatividad_y_innovacion`, `capacidad_de_negociacion`,"
                     . " `camacidad_deabstraccion_analisis_y_sintesis`, `liderasgo_y_toma_de_decisiones`, `adaptacion_al_cambio`, `otra_competencia_laboral`,"
                     . " `desempeno_laboral_del_egresado`, `sugerensia_de_formacion_del_egresado`, `comentarios_y_sugerencias`)"
                     . " VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
             $this->conexion->prepare($consulta3)->execute(array(
                $datos->__GET('habilidad_para_resolver_conflictos'),
                $datos->__GET('ortografia_Y_redaccion'),
                $datos->__GET('mejora_de_procesos'),
                $datos->__GET('trabajo_en_equipo'),
                $datos->__GET('habilidad_para_administrar_el_tiempo'),
                $datos->__GET('seguridad_personal'),
                $datos->__GET('facilidad_de_palabra'),
                $datos->__GET('gestion_de_proyectos'),
                $datos->__GET('puntualidad_y_asistencia'),
                $datos->__GET('cumplimiento_de_las_normas'),
                $datos->__GET('integracion_al_trabajo'),
                $datos->__GET('creatividad_y_innovacion'),
                $datos->__GET('capacidad_de_negociacion'),
                $datos->__GET('camacidad_deabstraccion_analisis_y_sintesis'),
                $datos->__GET('liderasgo_y_toma_de_decisiones'),
                $datos->__GET('adaptacion_al_cambio'),
                $datos->__GET('nombre_otros_espesifica').", ".$datos->__GET('otros_espesifica'),
                $datos->__GET('desempeno_laboral_del_egresado'),
                $datos->__GET('sugerensia_de_formacion_del_egresado'),
                $datos->__GET('comentarios_y_sugerencias'),
            ));
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function anadirActividad(Elementos $datos) {
        try {
            
            $consulta="INSERT INTO actividades_complementarias(tipo_de_taller, nombre_del_taller, dias, promotor, horario, lugar) VALUES (?,?,?,?,?,?)";
            $this->conexion->prepare($consulta)->execute(array(
                $datos->__GET('tipo_de_taller'),
                $datos->__GET('nombre_del_taller'),
                $datos->__GET('dias'),
                $datos->__GET('promotor'),
                $datos->__GET('horario'),
                $datos->__GET('lugar'),
                ));
            
        } catch (Exception $e) {
             die($e->getMessage());
        } 
        
    }
    
    public function ListarCulturales(){
		try{
		     $resultado = array();

			$stm = $this->conexion->prepare("SELECT * FROM actividades_complementarias WHERE tipo_de_taller='culturales'");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $row){
				$datos = new Elementos();
                                
                                $datos->__SET('idActividad', $row->idActividad);
				$datos->__SET('nombre_del_taller', $row->nombre_del_taller);
				$datos->__SET('dias', $row->dias);
				$datos->__SET('promotor', $row->promotor);
				$datos->__SET('horario', $row->horario);
				$datos->__SET('lugar', $row->lugar);

				$resultado[] = $datos;
			}

			return $resultado;
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
        
        public function ListarDeportivos(){
		try{
		     $resultado = array();

			$stm = $this->conexion->prepare("SELECT * FROM actividades_complementarias WHERE tipo_de_taller='deportivas'");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $row){
				$datos = new Elementos();
                                $datos->__SET('idActividad', $row->idActividad);
				$datos->__SET('nombre_del_taller', $row->nombre_del_taller);
				$datos->__SET('dias', $row->dias);
				$datos->__SET('promotor', $row->promotor);
				$datos->__SET('horario', $row->horario);
				$datos->__SET('lugar', $row->lugar);

				$resultado[] = $datos;
			}

			return $resultado;
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
        
        
        public function IncripcionesTalleres(Elementos $datos) {
            
        try {
            $consulta="INSERT INTO inscripciones_a_taller(numero_de_control, nombre_del_alumno, nombre_de_la_ingenieria, semestre, nombre_del_taller_inscripcion) VALUES (?,?,?,?,?)";
            $this->conexion->prepare($consulta)->execute(array(
                $datos->__GET('numero_de_control'),
                $datos->__GET('nombre_del_alumno'),
                $datos->__GET('nombre_de_la_ingenieria'),
                $datos->__GET('semestre'),
                $datos->__GET('nombre_del_taller_inscripcion')
                ));
        } catch (Exception $e) {
             die($e->getMessage());
        } 
        
    }
    
    public function Eliminar($id){
		try {
			$stm = $this->conexion->prepare("DELETE FROM actividades_complementarias WHERE idActividad = ?");			          
			$stm->execute(array($id));
                        
		}
                catch (Exception $e){
			die($e->getMessage());
		}
	}
        
        public function TablasAlumnosInscritos(){
		try{
		     $resultado = array();

			$stm = $this->conexion->prepare("SELECT * FROM actividades_complementarias");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $row){
				$datos = new Elementos();
                                
				$datos->__SET('nombre_del_taller', $row->nombre_del_taller);

				$resultado[] = $datos;
			}

			return $resultado;
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
        
        public function TablasAlumnosInscritosDatos($filtro){
		try{
		     $resultado = array();

			$stm = $this->conexion->prepare("SELECT * FROM inscripciones_a_taller WHERE nombre_del_taller_inscripcion = '$filtro'");
                        $stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $row){
				$datos = new Elementos();
                                
                                $datos->__SET('idTaller', $row->idTaller);
				$datos->__SET('numero_de_control', $row->numero_de_control);
                                $datos->__SET('nombre_del_alumno', $row->nombre_del_alumno);
                                $datos->__SET('nombre_de_la_ingenieria', $row->nombre_de_la_ingenieria);
                                $datos->__SET('semestre', $row->semestre);
				$resultado[] = $datos;
			}

			return $resultado;
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
public function EliminarInscripcion($id){
		try {
			$stm = $this->conexion->prepare("DELETE FROM inscripciones_a_taller WHERE idTaller = ?");			          
			$stm->execute(array($id));
                        
		}
                catch (Exception $e){
			die($e->getMessage());
		}
	}
                
        
}
