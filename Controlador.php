<?php

require_once './Entidad.php';
require_once './Modelo.php';

// Logica
$elementos = new Elementos();
$modelo = new ElementosModelo();

if (isset($_REQUEST['operacion'])) {
    switch ($_REQUEST['operacion']) {
        case 'registrar':
            $elementos->__SET('idEcuesta', $_REQUEST['idEcuesta']);
            $elementos->__SET('nombre', $_REQUEST['txtNombre']);
            $elementos->__SET('no_control', $_REQUEST['txtNC']);
            $elementos->__SET('carrera', $_REQUEST['txtCarrera']);
            $elementos->__SET('ano_de_egreso', $_REQUEST['txtADE']);
            $elementos->__SET('titulado', $_REQUEST['txtTitulado']);
            $elementos->__SET('ano_de_titulacion', $_REQUEST['txtADT']);
            $elementos->__SET('opcion_de_titulacion', $_REQUEST['txtODT']);
            $elementos->__SET('laborar', $_REQUEST['txtLabora']);
            $elementos->__SET('estudiar_posgrado', $_REQUEST['txtEstudiarP']);
            $elementos->__SET('area_de_interes_en_el_posgrado', $_REQUEST['txtADIP']);
            $elementos->__SET('correo_electronico', $_REQUEST['txtE-mail']);
            $elementos->__SET('telefono_particular', $_REQUEST['txtTelefonoP']);
            $elementos->__SET('telefono_celular', $_REQUEST['txtTelefonoC']);
            $elementos->__SET('actualmente_trabaja', $_REQUEST['txtAT']);
            $elementos->__SET('empresa', $_REQUEST['txtEmpresa']);
            $elementos->__SET('puesto', $_REQUEST['txtPuesto']);
            $elementos->__SET('tels', $_REQUEST['txtTels']);
            $elementos->__SET('empresa_donde_realizaste_tu_servicio_social', $_REQUEST['txtEDRTSS']);
            $elementos->__SET('empresa_donde_realizaste_tu_residencia_profesional', $_REQUEST['txtEDRTRP']);
            $elementos->__SET('idioma_ingles', $_REQUEST['txtIdiomaI']);
            $elementos->__SET('experiencia_en_el_servicio_social', $_REQUEST['txtES']);
            $elementos->__SET('experiencia_en_las_residencias_profesionales', $_REQUEST['txtER']);
            $elementos->__SET('actividades_extraescolares', $_REQUEST['txtActividadesE']);
            $elementos->__SET('tramites_escolares', $_REQUEST['txtTramitesE']);
            $elementos->__SET('tramites_de_titulacion', $_REQUEST['txtTramitesT']);
            $elementos->__SET('instalaciones', $_REQUEST['txtInstalaciones']);
            $elementos->__SET('laboratorios', $_REQUEST['txtLaboratorios']);

            if (empty($_REQUEST['txtNombre'])) {
                echo '<script>alert (" El campo Nombre: esta vacío");</script>';
            } else {
                $modelo->Registrar($elementos);
                header('Location: encuesta_salida.php');
            }

            break;
            
            case 'eliminar':
            $modelo->Eliminar($_REQUEST['idActividad']);
            header('Location: lista_de_actividades_complementarias.php');
            break;
        
            case 'eliminarInscripcion':
            $modelo->EliminarInscripcion($_REQUEST['idActividad']);
            header('Location: lista_de_actividades_complementarias.php');
            break;
    }
}

if (isset($_REQUEST['operacion2'])) {
    switch ($_REQUEST['operacion2']) {
        case 'registrar2':
            //atributos de la seccion 1 de la encuesta2
            $elementos->__SET('idEcuesta2', $_REQUEST['idEcuesta2']);
            $elementos->__SET('no_folio', $_REQUEST['txtNoFolio']);
            $elementos->__SET('nombre_egresado', $_REQUEST['txtNombre2']);
            $elementos->__SET("no_control_egresado", $_REQUEST['txtNoControl2']);
            $elementos->__SET('fecha_nacimiento', $_REQUEST['txtFechaNacimiento']);
            $elementos->__SET('curp', $_REQUEST['txtCurp']);
            $elementos->__SET('sexo_2', $_REQUEST['txtSexo']);
            $elementos->__SET('estado_civil', $_REQUEST['txtEstadoCivil']);
            $elementos->__SET('calle_del_egresado', $_REQUEST['txtCalle']);
            $elementos->__SET('no_2_del_egresado', $_REQUEST['txtNo2']);
            $elementos->__SET('colonia_egresado', $_REQUEST['txtColonia_egresado']);
            $elementos->__SET('codigo_postal_del_egresado', $_REQUEST['txtCP']);
            $elementos->__SET('ciudad_del_egresado', $_REQUEST['txtCiudad']);
            $elementos->__SET('municipio_del_egresado', $_REQUEST['txtMunicipio']);
            $elementos->__SET('estado_del_egresado', $_REQUEST['txtEstado2']);
            $elementos->__SET('telefono_del_egresado', $_REQUEST['txtTel2']);
            $elementos->__SET('correo_del_egresado', $_REQUEST['txtEmail2']);
            $elementos->__SET('telefono_de_casa_del_egresado', $_REQUEST['txtTelCasaP']);
            $elementos->__SET('carrera_de_egreso_y_especialidad', $_REQUEST['txtCarreraEE']);
            $elementos->__SET('titulados', $_REQUEST['txtTitulados']);
            $elementos->__SET('dominio_de_idiomas_extranjero_ingles', $_REQUEST['txtLIngles']);
            $elementos->__SET('dominio_de_idiomas_extranjero_otro', $_REQUEST['txtOtro2']);
            $elementos->__SET('manejo_de_paquetes_computacionales_especificar', $_REQUEST['txtMPC']);

            //atributos de la seccion 2 de la encuesta2
            $elementos->__SET('calidad_de_los_docentes', $_REQUEST['txtCalidadD']);
            $elementos->__SET('plan_de_estudios', $_REQUEST['txtPlanEs']);
            $elementos->__SET('oportunidad_de_participar_en_proyectos_de_investigacion_y_desarr', $_REQUEST['txtOPPID']);
            $elementos->__SET('enfasis_que_se_le_prestaba_a_la_investigacion_y_desarrollo', $_REQUEST['txtEPID']);
            $elementos->__SET('satisfaccion_con_las_condiciones_de_estudio_infraestructura', $_REQUEST['txtSCE']);
            $elementos->__SET('experiencia_obtenida_a_traves_de_la_residencia_profesional', $_REQUEST['txtEOTRP']);

            //atributos de la seccion 3 de la encuesta2
            $elementos->__SET('actividad_a_la_que_se_dedica_actualmente', $_REQUEST['txtADA']);
            if (isset($_REQUEST['txtSiEstudia'])) {
            $elementos->__SET('si_estudia_indica_si_es', $_REQUEST['txtSiEstudia']);}else{
                $elementos->__SET('si_estudia_indica_si_es', $_REQUEST['txtSiEstudiaOtro']);
            }
            $elementos->__SET("especialidad_e_institucion", $_REQUEST['txtEspecialidadI']);
            $elementos->__SET('en_el_caso_de_trabajar_Tiempo_transcurrido_para_obtener_lo', $_REQUEST['txtSiTrabaja']);
            if (isset($_REQUEST['txtMOP'])) {
            $elementos->__SET('medio_para_obtener_el_empleo', $_REQUEST['txtMOP']);}else{
                $elementos->__SET('medio_para_obtener_el_empleo', $_REQUEST['txtMOPOtro']);
            }
             if (isset($_REQUEST['txtRC'])) {
             $elementos->__SET('requisitos_de_contratacion', $_REQUEST['txtRC']);}else{
                 $elementos->__SET('requisitos_de_contratacion', $_REQUEST['txtRCOtro']);
             }
             if (isset($_REQUEST['txtIUT'])) {
             $elementos->__SET('idioma_que_utiliza_en_su_trabajo', $_REQUEST['txtIUT']);}else{
                 $elementos->__SET('idioma_que_utiliza_en_su_trabajo', $_REQUEST['txtIUTOtro']);
             }
            $elementos->__SET('en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_hablar', $_REQUEST['txtHablar']);
            $elementos->__SET('en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_escribi', $_REQUEST['txtEscribir']);
            $elementos->__SET('en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_leer', $_REQUEST['txtLeer']);
            $elementos->__SET('en_que_proporcion_utiliza_en_el_desempeno_de_habilidades_escucha', $_REQUEST['txtEscuchar']);
            $elementos->__SET('antiguedad_en_la_empresa', $_REQUEST['txtAE']);
            $elementos->__SET('ano_de_ingreso', $_REQUEST['txtAñoDI']);
            $elementos->__SET('ingreso_salario_minimo_diario', $_REQUEST['txtIngreso']);
            $elementos->__SET('nivel_jerarquico_en_el_trabajo', $_REQUEST['txtNJT']);
            if (isset($_REQUEST['txtCT'])) {
            $elementos->__SET('condicion_de_trabajo', $_REQUEST['txtCT']);}else{
                $elementos->__SET('condicion_de_trabajo', $_REQUEST['txtCTOtro']);
            }
            $elementos->__SET('relacion_del_trabajador_con_su_area_de_formacion', $_REQUEST['txtRTAF']);
            $elementos->__SET('datos_de_la_empresa_u_organismo_organismo', $_REQUEST['txtOrganismo']);
            $elementos->__SET('giro_o_actividad_principal_de_la_empresa_u_organismo', $_REQUEST['txtGiroA']);
            $elementos->__SET('razon_social', $_REQUEST['txtRazonA']);
            $elementos->__SET('domicilio_calle_de_la_empresa', $_REQUEST['txtCalle_empresa']);
            $elementos->__SET('domicilio_No_de_la_empresa', $_REQUEST['txtNo_empresa']);
            $elementos->__SET('domicilio_colonia_de_la_empresa', $_REQUEST['txtColonia_empresa']);
            $elementos->__SET('domicilio_CP_de_la_empresa', $_REQUEST['txtCP_empresa']);
            $elementos->__SET('domicilio_ciudad_de_la_empresa', $_REQUEST['txtCiudad_empresa']);
            $elementos->__SET('domicilio_municipio_de_la_empresa', $_REQUEST['txtMunicipio_empresa']);
            $elementos->__SET('domicilio_estado_de_la_empresa', $_REQUEST['txtEstado_empresa']);
            $elementos->__SET('tel_y_ext', $_REQUEST['txtTelefono_extencion_empresa']);
            $elementos->__SET('fax', $_REQUEST['txtFax_empresa']);
            $elementos->__SET('email', $_REQUEST['txtCorreo_empresa']);
            $elementos->__SET('pagina_web', $_REQUEST['txtPaginaWeb_empresa']);
            $elementos->__SET('nombre_y_puesto_del_jefe_inmediato', $_REQUEST['txtNPJI_empresa']);
            $elementos->__SET('sector_economico_de_la_empresa_u_organizacion_sector_primario', $_REQUEST['txtSP']);
            $elementos->__SET('sector_economico_de_la_empresa_u_organizacion_sector_secundario', $_REQUEST['txtSS']);
            $elementos->__SET('sector_economico_de_la_empresa_u_organizacion_sector_terciario', $_REQUEST['txtST']);
            $elementos->__SET('tamano_de_la_empresa_u_organizacion', $_REQUEST['txtTEO']);

            //atributos de la seccion 4 de la encuesta2
            $elementos->__SET('eficiencia_actividades_formacion_academica', $_REQUEST['txtEficiencia']);
            $elementos->__SET('como_califica_su_formacion_academica_desempeno_laboral', $_REQUEST['txtCalidadFARDL']);
            $elementos->__SET('utilidad_de_residencias_profesionales_o_practicas_profesionales', $_REQUEST['txtUtilidadRP']);
            $elementos->__SET('aspectos_que_valora_empresa_u_organismo_area_o_campo_de_estudio', $_REQUEST['txtACE']);
            $elementos->__SET('aspectos_que_valora_empresa_u_organismo_titulacion', $_REQUEST['txtTitulacion2']);
            $elementos->__SET('aspectos_que_valora_empresa_u_organismo_experiencia_laboral', $_REQUEST['txtExperienciaL']);
            $elementos->__SET('aspectos_que_valora_empresa_u_organismo_competencia_laboral', $_REQUEST['txtCompetenciaL']);
            $elementos->__SET('aspectos_que_valora_empresa_u_organismo_posicionamiento_de_la_IN', $_REQUEST['txtCompetenciaL']);
            $elementos->__SET('aspectos_que_valora_empresa_u_organismo_conocimientos_idiomas_EX', $_REQUEST['txtCIE']);
            $elementos->__SET('aspectos_que_valora_empresa_u_organismo_recomendaciones_referenc', $_REQUEST['txtRecomendaciones']);
            $elementos->__SET('aspectos_que_valora_empresa_u_organismo_personalidad_actitudes', $_REQUEST['txtPersonalidad']);
            $elementos->__SET('aspectos_que_valora_empresa_u_organismo_capacidad_de_liderazgo', $_REQUEST['txtCDL']);
            $elementos->__SET('aspectos_que_valora_empresa_u_organismo_otros', $_REQUEST['txtOtros3']);

            //atributos de la seccion 5 de la encuesta2
            $elementos->__SET('actualizacion_de_conocimientos_le_gusta_tomar_cursos_de_act', $_REQUEST['txtLTCA']);
            $elementos->__SET('actualizacion_de_conocimientos_le_gusta_tomar_cursos_de_act_cual', $_REQUEST['txtCual']);
            $elementos->__SET('actualizacion_de_conocimientos_le_gusta_tomar_algun_posgrado', $_REQUEST['txtLGTAP']);
            $elementos->__SET('actualizacion_de_conocimientos_le_gusta_tomar_algun_posgrado_cua', $_REQUEST['txtCual2']);
            
            //atributos de la seccion 6 de la encuesta2
            $elementos->__SET('pertenece_a_organizaciones_sociales', $_REQUEST['txtPOS']);
            $elementos->__SET('pertenece_a_organizaciones_sociales_cual', $_REQUEST['txtCual3']);
            $elementos->__SET('pertenece_a_organismos_de_profesionistas', $_REQUEST['txtPOP']);
            $elementos->__SET('pertenece_a_organismos_de_profesionistas_cual', $_REQUEST['txtCual4']);
            $elementos->__SET('pertenece_a_la_asociacion_de_egresados', $_REQUEST['txtPAE']);
            
            //atributos de la seccion 7 de la encuesta2
            $elementos->__SET('opinion_para_mejorar_formacion_profesional_de_un_egresado', $_REQUEST['txtRecomendaciones2']);

            $modelo->Registrar2($elementos);
            header('Location: encuesta_seguimiento.php');
            break;
    }
}

if (isset($_REQUEST['operacion3'])) {
    switch ($_REQUEST['operacion3']) {
        case 'registrar3':
            //atributos de la seccion 1 de la encuesta2
            $elementos->__SET('idEcuesta3', $_REQUEST['idEcuesta3']);
            $elementos->__SET('no_folio_empresa', $_REQUEST['txtNoFolio_empresa']);
            $elementos->__SET('nombre_comercial_de_la_empresa', $_REQUEST['txtNombreComercialEmpresa']);
            $elementos->__SET('ciudad_de_la_empresa', $_REQUEST['txtCiudadEmpresaEmpleadora']);
            $elementos->__SET('municipio_de_la_empresa', $_REQUEST['txtMunicipioEmpresaEmpleadora']);
            $elementos->__SET('estado_de_la_empresa', $_REQUEST['txtEstadoEmpresaEmpleadora']);
            $elementos->__SET('telefonos_de_la_empresa', $_REQUEST['txtTelefonosEmpresasEmpleadoras']);
            $elementos->__SET('correo_de_la_empresa', $_REQUEST['txtCorreoEmpresasEmpleadoras']);
            $elementos->__SET('tipo_de_empresa', $_REQUEST['txtTipoDeEmpresa']);
            $elementos->__SET('tamano_de_la_empresa', $_REQUEST['txtTamanoEmpresa']);
            if (isset($_REQUEST['txtActividadDeLaEmpresa'])) {
            $elementos->__SET('actividad_de_la_empresa', $_REQUEST['txtActividadDeLaEmpresa']);
            }else{
                $elementos->__SET('actividad_de_la_empresa', $_REQUEST['txtActividadDeLaEmpresaOtro']);
            }
            $elementos->__SET('numero_de_profesionales_en_su_empresa', $_REQUEST['txtNumerosDeProfesionistas']);
            
            $elementos->__SET('carreda_del_egresado', $_REQUEST['txtEgresadoCarrera']);
            if (isset($_REQUEST['txtMandoDelProfesionistas'])) {
            $elementos->__SET('mando_del_egresado', $_REQUEST['txtMandoDelProfesionistas']);
            }else{
                $elementos->__SET('mando_del_egresado', $_REQUEST['txtOtroMandoDelProfesionistas']);
            }
            $elementos->__SET('carreda_del_egresado2', $_REQUEST['txtEgresadoCarrera2']);
            if (isset($_REQUEST['txtMandoDelProfesionistas2'])) {
            $elementos->__SET('mando_del_egresado2', $_REQUEST['txtMandoDelProfesionistas2']);
            }else{
                $elementos->__SET('mando_del_egresado2', $_REQUEST['txtOtroMandoDelProfesionistas2']);
            }
            $elementos->__SET('carreda_del_egresado3', $_REQUEST['txtEgresadoCarrera3']);
            if (isset($_REQUEST['txtMandoDelProfesionistas3'])) {
            $elementos->__SET('mando_del_egresado3', $_REQUEST['txtMandoDelProfesionistas3']);
            }else{
                $elementos->__SET('mando_del_egresado3', $_REQUEST['txtOtroMandoDelProfesionistas3']);
            }
            $elementos->__SET('carreda_del_egresado4', $_REQUEST['txtEgresadoCarrera4']);
            if (isset($_REQUEST['txtMandoDelProfesionistas4'])) {
            $elementos->__SET('mando_del_egresado4', $_REQUEST['txtMandoDelProfesionistas4']);
            }else{
                $elementos->__SET('mando_del_egresado4', $_REQUEST['txtOtroMandoDelProfesionistas4']);
            }
            $elementos->__SET('congruencia_del_perfil_profesional_del_egresado', $_REQUEST['txtCongruensiaEntrePerfil']);
            
            $elementos->__SET('requisito_de_la_empresa', $_REQUEST['txtRequisitosDeLaEmpresa1']);
            $elementos->__SET('requisito_de_la_empresa2', $_REQUEST['txtRequisitosDeLaEmpresa2']);
            $elementos->__SET('requisito_de_la_empresa3', $_REQUEST['txtRequisitosDeLaEmpresa3']);
            $elementos->__SET('requisito_de_la_empresa4', $_REQUEST['txtRequisitosDeLaEmpresa4']);
            $elementos->__SET('requisito_de_la_empresa5', $_REQUEST['txtRequisitosDeLaEmpresa5']);
            $elementos->__SET('requisito_de_la_empresa6', $_REQUEST['txtRequisitosDeLaEmpresa6']);
            $elementos->__SET('requisito_de_la_empresa7', $_REQUEST['txtRequisitosDeLaEmpresa7']);
            $elementos->__SET('requisito_de_la_empresa8', $_REQUEST['txtRequisitosDeLaEmpresa8']);
            $elementos->__SET('requisito_de_la_empresa9', $_REQUEST['txtRequisitosDeLaEmpresa9']);
            
            $elementos->__SET('carreras_que_demandan_preferencia_su_empresa', $_REQUEST['txtCarreraPreferente']);
            
            $elementos->__SET('habilidad_para_resolver_conflictos', $_REQUEST['txtHabilidadResolverConflictos']);
            $elementos->__SET('ortografia_Y_redaccion', $_REQUEST['txtOrtografiaRedaccion']);
            $elementos->__SET('mejora_de_procesos', $_REQUEST['txtMejoraProcesos']);
            $elementos->__SET('trabajo_en_equipo', $_REQUEST['txtTrabajoEquipo']);
            $elementos->__SET('habilidad_para_administrar_el_tiempo', $_REQUEST['txtAdministrarTiempo']);
            $elementos->__SET('seguridad_personal', $_REQUEST['txtSeguridadPersonal']);
            $elementos->__SET('facilidad_de_palabra', $_REQUEST['txtFacilidadPalabra']);
            $elementos->__SET('gestion_de_proyectos', $_REQUEST['txtGestionProyectos']);
            $elementos->__SET('puntualidad_y_asistencia', $_REQUEST['txtPuntualidadAsistencia']);
            $elementos->__SET('cumplimiento_de_las_normas', $_REQUEST['txtCumplimientoNormas']);
            $elementos->__SET('integracion_al_trabajo', $_REQUEST['txtIntegracionTrabajo']);
            $elementos->__SET('creatividad_y_innovacion', $_REQUEST['txtCreatividadInnovacion']);
            $elementos->__SET('capacidad_de_negociacion', $_REQUEST['txtCapacidadNegociar']);
            $elementos->__SET('camacidad_deabstraccion_analisis_y_sintesis', $_REQUEST['txtCapacidadAbstraccion']);
            $elementos->__SET('liderasgo_y_toma_de_decisiones', $_REQUEST['txtLiderazgoTDecisiones']);
            $elementos->__SET('adaptacion_al_cambio', $_REQUEST['txtAdaptacionCambio']);
            $elementos->__SET('nombre_otros_espesifica', $_REQUEST['txtOtraCapacidad']);
            $elementos->__SET('otros_espesifica', $_REQUEST['txtOtraCapacidadLaboral']);
            $elementos->__SET('desempeno_laboral_del_egresado', $_REQUEST['txtDesempenoLaboral']);
            $elementos->__SET('sugerensia_de_formacion_del_egresado', $_REQUEST['txtSugerensiaFormacionEgresados']);
            $elementos->__SET('comentarios_y_sugerencias', $_REQUEST['txtComentariosSuegerencias']);

            $modelo->Registrar3($elementos);
            header('Location: encuesta_empresas_empleadoras.php');
            break;
    }
}


if (isset($_REQUEST['actividad'])) {
    switch ($_REQUEST['actividad']) {
        case 'agregar_actividad':
            $elementos->__SET('tipo_de_taller', $_REQUEST['txtTipoDeTaller']);
            $elementos->__SET('nombre_del_taller', $_REQUEST['txtNombreDelTaller']);
            $elementos->__SET('dias', $_REQUEST['txtDias']);
            $elementos->__SET('promotor', $_REQUEST['txtPromotor']);
            $elementos->__SET('horario', $_REQUEST['txtHorario']);
            $elementos->__SET('lugar', $_REQUEST['txtLugar']);
                

            if (empty($_REQUEST['txtTipoDeTaller'])) {
                echo '<script>alert ("Seleccione un tipo de taller");</script>';
            } else {
                $modelo->anadirActividad($elementos);
                header('Location: lista_de_actividades_complementarias.php');
            }

            break;
    }
}

if (isset($_REQUEST['prueba'])) {
                 switch ($_REQUEST['prueba']) {
            case 'inscribir':
            $elementos->__SET('numero_de_control', $_REQUEST['txtNumeroDeControl']);
            $elementos->__SET('nombre_del_alumno', $_REQUEST['txtNombreDelAlumno']);
            $elementos->__SET('nombre_de_la_ingenieria', $_REQUEST['txtNombreDeLaIngenieria']);
            $elementos->__SET('semestre', $_REQUEST['txtSemestre']);
            $elementos->__SET('nombre_del_taller_inscripcion', $_REQUEST['txtNombreDelTallerInscripciones']);
            if (empty($_REQUEST['txtNumeroDeControl'])) {
                echo '<script>alert ("Llene todos los campos");</script>';
            } else {
                
                $modelo->IncripcionesTalleres($elementos);
                header('Location: lista_de_actividades_complementarias.php');
            }

            break;
    }
}
?>
