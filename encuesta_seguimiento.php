<?php
require_once 'Entidad.php';
require_once 'Modelo.php';
require_once 'Controlador.php';

?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from foxythemes.net/preview/products/beagle2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jun 2017 21:43:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>SIDI</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/jqvmap/jqvmap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
  </head>
  <body>
    <div class="be-wrapper be-fixed-sidebar">
      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          <div class="navbar-header"><a href="index.php" class="navbar-brand"></a>
          </div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="assets/img/avatar.png" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info">
                      <div class="user-name">Túpac Amaru</div>
                      <div class="user-position online">Available</div>
                    </div>
                  </li>
                  <li><a href="#"><span class="icon mdi mdi-face"></span> Account</a></li>
                  <li><a href="#"><span class="icon mdi mdi-settings"></span> Settings</a></li>
                  <li><a href="#"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"><span>SIDI</span></div>
            <ul class="nav navbar-nav navbar-right be-icons-nav">
              <li class="dropdown"><a href="#" role="button" aria-expanded="false" class="be-toggle-right-sidebar"><span class="icon mdi mdi-settings"></span></a></li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                <ul class="dropdown-menu be-notifications">
                  <li>
                    <div class="title">Notifications<span class="badge">3</span></div>
                    <div class="list">
                      <div class="be-scroller">
                        <div class="content">
                          <ul>
                            <li class="notification notification-unread"><a href="#">
                                <div class="image"><img src="assets/img/avatar2.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div><span class="date">2 min ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="assets/img/avatar3.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Joel King</span> is now following you</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="assets/img/avatar4.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="assets/img/avatar5.png" alt="Avatar"></div>
                                <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">View all notifications</a></div>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-apps"></span></a>
                <ul class="dropdown-menu be-connections">
                  <li>
                    <div class="list">
                      <div class="content">
                        <div class="row">
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/github.png" alt="Github"><span>GitHub</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/bitbucket.png" alt="Bitbucket"><span>Bitbucket</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/slack.png" alt="Slack"><span>Slack</span></a></div>
                        </div>
                        <div class="row">
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/dribbble.png" alt="Dribbble"><span>Dribbble</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/mail_chimp.png" alt="Mail Chimp"><span>Mail Chimp</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/dropbox.png" alt="Dropbox"><span>Dropbox</span></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">More</a></div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">SIDI</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li class="active"><a href="index.php"><i class="icon mdi mdi-home"></i><span>SIDI</span></a>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>Departamento de Vinculación</span></a>
                    <ul class="sub-menu"> 
                         <li class="parent"><a href="#"><i class="icon mdi mdi-file-text"></i><span> Encuestas</span></a>
                    <ul class="sub-menu"> 
                        <li><a href="encuesta_salida.php">ENCUESTA DE SALIDA</a>
                      </li>
                      <li><a href="encuesta_seguimiento.php">ENCUESTA DE SEGUIMIENTO DE EGRESADOS</a>
                      </li>
                      <li><a href="encuesta_empresas_empleadoras.php">ENCUESTA A EMPRESAS EMPLEADORAS</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span> Actividades complementarias</span></a>
                      <ul class="sub-menu"> 
                          <li><a href="lista_de_actividades_complementarias.php">Listas de actividades Conmplementarias</a>
                      </li>
                      </ul></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary"> 
                <div class="panel-heading panel-heading-divider">
                    <div class="row xs-pt-15">
                        <div class="form-group col-md-6"><label>ENCUESTA DE SEGUIMIENTO</label></div>
                                        <div  class="form-group col-md-3"><img  src="assets/img/gallery/SEP.png" alt="" width="100%"/></div>
                                        <div  class="form-group col-md-3"><img  src="assets/img/gallery/Sistema nacional de educación tecnologica.gif" alt="" width="100%"/></div>
                                        <div class="panel-body"></div>
                <div class="panel-body">
                    
                  <form id="encuestaSeguimiento" method="post" action="?operacion2=<?php echo $elementos->idEcuesta2 > 0 ? 'actualizar2' : 'registrar2'; ?>">
                      <input type="hidden" name="idEcuesta2" value="<?php echo $elementos->__GET('idEcuesta2'); ?>" />
                    <div class="row xs-pt-15">
                        <div class="form-group col-md-10"></div>
                      <div class="form-group col-md-2">
                      <label>No. de folio:</label>
                      <input type="text" id="txtNoFolio" name="txtNoFolio"  class="form-control" required>
                    </div>
                          </div>
                      <h3>I.- PERFIL DEL EGRESADO</h3>
                      <div class="row xs-pt-15"> <!-- Primera linea de la encuesta-->
                      <div class="form-group col-md-8">
                      <label>Nombre(s):</label>
                      <input type="text" id="txtNombre2" name="txtNombre2" class="form-control" required>
                      </div>
                      <div class="form-group col-md-4">
                      <label>No. de control:</label>
                      <input type="text" id="txtNoControl2" name="txtNoControl2" class="form-control" required>
                      </div>
                      </div><!--Fin de la Primera linea de la encuesta-->
                      <div class="row xs-pt-15"><!-- segunda linea de la encuesta-->
                      <div class="form-group col-md-4">
                      <label>Fecha de Nacimiento:</label>
                      <input type="text" id="txtFechaNacimiento" name="txtFechaNacimiento" placeholder="dd/mm/aa" class="form-control" required>
                      </div>
                      <div class="form-group col-md-8">
                      <label>CURP:</label>
                      <input type="text" id="txtCurp" name="txtCurp" class="form-control" required>
                      </div>
                      </div><!--Fin de la Segunda linea de la encuesta-->
                      <div class="row xs-pt-15">   <!--Tercer linea de la encuesta-->
                        <div class="form-check col-md-1">
                            <label>Sexo: </label></div>
                                <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtSexo" name="txtSexo" value="Hombre">
                                Hombre
                            </label>
                        </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtSexo" name="txtSexo" value="Mujer">
                                Mujer
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label>Estado Civil: </label>
                          </div>
                                <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtEstadoCivil" name="txtEstadoCivil" value="Soltero(a)">
                                Soltero(a)
                            </label>
                        </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtEstadoCivil" name="txtEstadoCivil" value="Cazado(a)">
                                Cazado(a)
                            </label>
                                </div>
                          <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtEstadoCivil" name="txtEstadoCivil" value="Otro">
                                Otro
                            </label>
                                </div>
                            </div><!--Fin de la Tercer linea de la encuesta-->
                            
                      <label>Domicilio:</label><!--Cuarta linea de la encuesta-->
                      
                      <div class="row xs-pt-15">
                    <div class="form-group col-md-3">
                        <label>Calle:</label>
                        <input type="text" id="txtCalle" name="txtCalle" placeholder="calle" class="form-control" required>
                    </div>
                     <div class="form-group col-md-3">
                         <label>No. :</label>
                         <input type="text" id="txtNo2" name="txtNo2" placeholder="No." class="form-control" required>
                    </div>
                          <div class="form-group col-md-3">
                         <label>Colonia:</label>
                         <input type="text" id="txtColonia_egresado" name="txtColonia_egresado" placeholder="Colonia" class="form-control" required>
                    </div>
                          <div class="form-group col-md-3">
                         <label>C.P. :</label>
                         <input type="text" id="txtCP" name="txtCP" placeholder="Código Postal" class="form-control" required>
                    </div>
                      </div><!--Fin de la Cuarta linea de la encuesta-->
                    <div class="row xs-pt-15"><!--Quinta linea de la encuesta-->
                      <div class="form-group col-md-4">
                      <label>Ciudad:</label>
                      <input type="text" id="txtCiudad" name="txtCiudad"  class="form-control" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Municipio:</label>
                      <input type="text" id="txtMunicipio" name="txtMunicipio"  class="form-control" required>
                    </div>
                        <div class="form-group col-md-4">
                      <label>Estado:</label>
                      <input type="text" id="txtEstado2" name="txtEstado2" class="form-control" required>
                    </div>
                          </div><!--Fin de la Quinta linea de la encuesta-->
                          
                          <div class="row xs-pt-15"><!--Sexta linea de la encuesta-->
                      <div class="form-group col-md-6">
                      <label>Tel.:</label>
                      <input type="tel" id="txtTel2" name="txtTel2" placeholder="" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>E-maill:</label>
                      <input type="email" id="txtEmail2" name="txtEmail2" placeholder="" class="form-control" required>
                    </div>
                          </div><!--Fin de la Sexta linea de la encuesta-->
                           <div class="form-group"><!--Setima linea de la encuesta-->
                      <label>Tel. casa paterna:</label>
                      <input type="tel" id="txtTelCasaP" name="txtTelCasaP" placeholder="" class="form-control" required>
                    </div><!--Fin de la Setima linea de la encuesta-->
                    
                      <div class="form-group"><!--Octaba linea de la encuesta-->
                      <label>Carrera de Egreso y especialidad:</label>
                      <input type="text" id="txtCarreraEE" name="txtCarreraEE" placeholder="ING.SISTEMAS COMPUTACIONALES, SEGURIDAD" class="form-control" required>
                    </div><!--Fin de la Octaba linea de la encuesta-->
                    
                  <div class="row xs-pt-15">   <!--Tercer linea de la encuesta-->
                    <div class="form-group col-md-6"><!--Novena linea de la encuesta-->
                      <label>Mes y Año de egreso:</label>
                      <input type="text" id="txtMesAnoE" name="txtMesAnoE"  class="form-control" required>
                    </div><!--Fin de la Novena linea de la encuesta-->
                    <div class="form-group col-md-2"></div>
                    <div class="form-check col-md-1">
                            <label>Titulado(a): </label></div>
                                <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtTitulados" name="txtTitulados" value="si">
                                si
                            </label>
                        </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtTitulados" name="txtTitulados" value="no">
                                no
                            </label>
                                </div>
                          
                    </div><!--Fin de la Tercer linea de la encuesta-->
                    
                    <div class="row xs-pt-15"><!--Decima linea de la encuesta-->
                      <div class="form-group col-md-6">
                      <label>Dominio de idiomas extranjero: </label>
                      <br>ingles<input type="TEXT" id="txtLIngles" name="txtLIngles" placeholder="50%" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <br><label>Otro:</label>
                      <input type="text" id="txtOtro2" name="txtOtro2" placeholder="Otro, 50%" class="form-control">
                    </div>
                          </div><!--Fin de la Decima linea de la encuesta-->
                    
                    <div class="form-group"><!--Onceaba linea de la encuesta-->
                      <label>Manejo de paquetes computacionales(especificar):</label>
                      <input type="text" id="txtMPC" name="txtMPC" placeholder="" class="form-control" required>
                    </div><!--Fin de la Onceaba linea de la encuesta-->
                    <br><br>
                    <h3>II. PERTINENCIA Y DISPONIBILIDAD DE MEDIOS Y RECURSOS PARA EL APRENDIZAJE</h3>
                    <p>Califique la calidad de la educación profesional proporcionada por el personal docente, así como el plan de Estudios de la carrera
                    que curso y las condiciones del plantel en cuanto a infraestructura.</p>
                    <div class="row xs-pt-15"><!--Primer Linea, Segunda Encuesta-->
                    <div class="form-check col-md-4">
                            <label>II.1 Calidad de los docentes: </label>
                          </div>
                                <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtCalidadD" name="txtCalidadD" value="Muy Buena">
                                Muy Buena
                            </label>
                        </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCalidadD" name="txtCalidadD" value="Buena">
                                Buena
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCalidadD" name="txtCalidadD" value="Regular">
                                Regular
                            </label>
                          </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCalidadD" name="txtCalidadD" value="Mala">
                                Mala
                            </label>
                          </div>
                    
                    </div><!--Fin de al Primer Linea, Segunda Encuesta--> 
                    
                    <div class="row xs-pt-15"><!--Segunda Linea, Segunda Encuesta-->
                    <div class="form-check col-md-4">
                            <label>II.2 Plan de Estudios: </label>
                          </div>
                                <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtPlanEs" name="txtPlanEs" value="Muy Buenos">
                                Muy Buenos
                            </label>
                        </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtPlanEs" name="txtPlanEs" value="Buenos">
                                Buenos
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtPlanEs" name="txtPlanEs" value="Regulares">
                                Regulares
                            </label>
                          </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtPlanEs" name="txtPlanEs" value="Malos">
                                Malos
                            </label>
                          </div>
                    
                    </div><!--Fin de al Segunda Linea, Segunda Encuesta-->
                    
                     <div class="row xs-pt-15"><!--Tercera Linea, Segunda Encuesta-->
                    <div class="form-check col-md-4">
                            <label>II.3 Oportunidad de participar en proyectos de investigación y desarrollo: </label>
                          </div>
                                <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtOPPID" name="txtOPPID" value="Muy Buena">
                                Muy Buena
                            </label>
                        </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtOPPID" name="txtOPPID" value="Buena">
                                Buena
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtOPPID" name="txtOPPID" value="Regular">
                                Regular
                            </label>
                          </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtOPPID" name="txtOPPID" value="Mala">
                                Mala
                            </label>
                          </div>
                    
                    </div><!--Fin de al Tercera Linea, Segunda Encuesta-->
                    
                    <div class="row xs-pt-15"><!--Cuarta Linea, Segunda Encuesta-->
                    <div class="form-check col-md-4">
                            <label>II.4 Énfasis que se le prestaba a la investigación y desarrollo: </label>
                          </div>
                                <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtEPID" name="txtEPID" value="Muy Buena">
                                Muy Buena
                            </label>
                        </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtEPID" name="txtEPID" value="Buena">
                                Buena
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtEPID" name="txtEPID" value="Regular">
                                Regular
                            </label>
                          </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtEPID" name="txtEPID" value="Mala">
                                Mala
                            </label>
                          </div>
                    
                    </div><!--Fin de al Cuarta Linea, Segunda Encuesta-->
                    
                    <div class="row xs-pt-15"><!--Quinta Linea, Segunda Encuesta-->
                    <div class="form-check col-md-4">
                            <label>II.5 Satisfaccion con las condiciones de estudio(infraestructura): </label>
                          </div>
                                <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtSCE" name="txtSCE" value="Muy Buena">
                                Muy Buena
                            </label>
                        </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtSCE" name="txtSCE" value="Buena">
                                Buena
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtSCE" name="txtSCE" value="Regular">
                                Regular
                            </label>
                          </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtSCE" name="txtSCE" value="Mala">
                                Mala
                            </label>
                          </div>
                    
                    </div><!--Fin de al Quinta Linea, Segunda Encuesta-->
                    
                    <div class="row xs-pt-15"><!--Sexta Linea, Segunda Encuesta-->
                    <div class="form-check col-md-4">
                            <label>II.6 Experiencia obtenida a través de la residencia profesional: </label>
                          </div>
                                <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtEOTRP" name="txtEOTRP" value="Muy Buena">
                                Muy Buena
                            </label>
                        </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtEOTRP" name="txtEOTRP" value="Buena">
                                Buena
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtEOTRP" name="txtEOTRP" value="Regular">
                                Regular
                            </label>
                          </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtEOTRP" name="txtEOTRP" value="Mala">
                                Mala
                            </label>
                          </div>
                    
                    </div><!--Fin de al Sexta Linea, Segunda Encuesta-->
                    
                    <br><br>
                    
                    <h3>III. UBICACIÓN LABORAL DE LOS EGRESADOS</h3>
                    <p>Indique a cuál de los siguientes puntos corresponde su situación actual.</p>
                    
                    <div class="panel-heading panel-heading-divider"></div>
                    
                    <div class="row xs-pt-15"><!--Primer Linea, Segunda Encuesta-->
                    <div class="form-check col-md-4">
                            <label>III.1 Actividad a la que se dedíca actualmente: </label>
                          </div>
                                <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtADA" name="txtADA" value="Trabaja">
                                Trabaja
                            </label>
                        </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtADA" name="txtADA" value="Estudia">
                                Estudia
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtADA" name="txtADA" value="Estudia y Trabaja">
                                Estudia y Trabaja
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtADA" name="txtADA" value="No estudia ni trabaja">
                                No estudia ni trabaja
                            </label>
                          </div>
                    </div><!--Fin de al Primer Linea, Segunda Encuesta-->
                    
                    <div class="row xs-pt-15"><!--Segunda Linea, Tercer parte de la encuesta 2-->
                    <div class="form-check col-md-3">
                            <label>Si estudia, indica si es: </label>
                          </div>
                                <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtSiEstudia" name="txtSiEstudia" value="Especialidad">
                                Especialidad
                            </label>
                        </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtSiEstudia" name="txtSiEstudia" value="Maestria">
                                Maestria
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtSiEstudia" name="txtSiEstudia" value="Doctorado">
                                Doctorado
                            </label>
                          </div>
                        <div class="form-check col-md-3">
                            <label class="form-check-label"><br>
                                    Otro: <input type="Text" class="form-check-input" id="txtSiEstudiaOtro" name="txtSiEstudiaOtro" >
                            </label>
                          </div>
                    </div><!--Fin de al Segunda Linea, Tercer parte de la encuesta 2-->
                    <div class="form-group">
                      <label>Eapecialidad e institución:</label>
                      <input type="text" id="txtEspecialidadI" name="txtEspecialidadI" placeholder="" class="form-control">
                      </div>
                    <div class="panel-heading panel-heading-divider"></div>
                    
                    <div class="row xs-pt-15"><!--Tercera Linea, Tercer parte de la encuesta 2-->
                    <div class="form-check col-md-4">
                            <label>III. 2 En el caso de trabajar: Tiempo transcurrido para obtener el primer empleo </label>
                          </div>
                                <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtSiTrabaja" name="txtSiTrabaja" value="Antes de Egresar">
                                Antes de Egresar
                            </label>
                        </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtSiTrabaja" name="txtSiTrabaja" value="Menos de seis meses">
                                Menos de seis meses
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtSiTrabaja" name="txtSiTrabaja" value="Entre seis meses y un año">
                                Entre seis meses y un año
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtSiTrabaja" name="txtSiTrabaja" value="Más de un año">
                                Más de un año
                            </label>
                          </div>
                    </div><!--Fin de al Tercera Linea, Tercer parte de la encuesta 2-->
                    
                    <div class="panel-heading panel-heading-divider"></div>
                    
                    <div class="row xs-pt-15"><!--Cuarta Linea, Tercer parte de la encuesta 2-->
                    <div class="form-check col-md-4">
                            <label>III. 3 Medio para Obtener el Empleo </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtMOP" name="txtMOP" value="Bolsa de trabajo del plantel">
                                Bolsa de trabajo del plantel
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtMOP" name="txtMOP" value="Contactos personales">
                                Contactos personales
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtMOP" name="txtMOP" value="Residencia Profesiional">
                                Residencia Profesiional
                            </label>
                          </div>
                        
                                <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtMOP" name="txtMOP" value="Medios masivos de comunicación">
                                Medios masivos de comunicación
                            </label>
                        </div>
                        <div class="form-check col-md-4"></div>
                        <div class="form-check col-md-3">
                            <label class="form-check-label"><br>
                                    Otro: <input type="Text" class="form-check-input" id="txtMOPOtro" name="txtMOPOtro" >
                            </label>
                          </div>
                    </div><!--Fin de al Cuarta Linea, Tercer parte de la encuesta 2-->
                    
                    <div class="panel-heading panel-heading-divider"></div>
                    
                    <div class="row xs-pt-15"><!--Quinta Linea, Tercer parte de la encuesta 2-->
                    <div class="form-check col-md-4">
                            <label>III. 4 Requísitos de contratación</label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtRC" name="txtRC" value="Competencias Laborales">
                                Competencias Laborales
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtRC" name="txtRC" value="Titulo Profesional">
                                Titulo Profesional
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtRC" name="txtRC" value="Examen de selección">
                                Examen de selección
                            </label>
                          </div>
                        
                                <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtRC" name="txtRC" value="Idiomas Extranjeros">
                                Idiomas Extranjeros
                            </label>
                        </div>
                        <div class="form-check col-md-4"></div>
                        <div class="form-check col-md-6">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtRC" name="txtRC" value="Actividades y habilidades socio-cominicativas(principios y valores)">
                                Actividades y habilidades socio-cominicativas(principios y valores)
                            </label>
                        </div>
                        <div class="form-check col-md-4"></div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtRC" name="txtRC" value="Ninguno">
                                Ninguno
                            </label>
                        </div>
                        <div class="form-check col-md-3">
                            <label class="form-check-label"><br>
                                    Otro: <input type="Text" class="form-check-input" id="txtRCOtro" name="txtRCOtro" >
                            </label>
                          </div>
                        </div><!--Fin de al Quinta Linea, Tercer parte de la encuesta 2-->
                        
                        <div class="panel-heading panel-heading-divider"></div>
                        
                        <div class="row xs-pt-15"><!--Sexta Linea, Tercer parte de la encuesta 2-->
                    <div class="form-check col-md-4">
                            <label>III. 5 Idioma que utiliza en su trabajo</label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtIUT" name="txtIUT" value="Inglés">
                                Inglés
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtIUT" name="txtIUT" value="Francés">
                                Francés
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtIUT" name="txtIUT" value="Alemán">
                                Alemán
                            </label>
                          </div>
                            <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtIUT" name="txtIUT" value="Japonés">
                                Japonés
                            </label>
                          </div>
                        <div class="form-check col-md-4"></div>
                        
                        <div class="form-check col-md-3">
                            <label class="form-check-label"><br>
                                    Otro: <input type="Text" class="form-check-input" id="txtIUTOtro" name="txtIUTOtro" >
                            </label>
                          </div>
                        </div><!--Fin de al Sexta Linea, Tercer parte de la encuesta 2-->
                        
                        <div class="panel-heading panel-heading-divider"></div>
                        
                        <div class="row xs-pt-15"><!--Septima Linea, Tercer parte de la encuesta 2-->
                    <div class="form-check col-md-4">
                            <label>III. 6 En que proporción utiliza en el desempeño de susactividades laborales cada una de las hobilidades del Idioma extrenjero</label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                  Hablar :  <input type="text" class="form-check-input" id="txtHablar" name="txtHablar" placeholder="%">
                                
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                   Escribir :<input type="text" class="form-check-input" id="txtEscribir" name="txtEscribir" placeholder="%">
                                
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    Leer :<input type="text" class="form-check-input" id="txtLeer" name="txtLeer" placeholder="%">
                                
                            </label>
                          </div>
                          </div>
                        <div class="row xs-pt-15"> <div class="form-check col-md-4"></div>
                            <div class="form-check col-md-3">
                            <label class="form-check-label"><br>
                                Escuchar : <input type="text" class="form-check-input" id="txtEscuchar" name="txtEscuchar" placeholder="%" >
                                
                            </label>
                                 </div>
                        </div><!--Fin de al Septima Linea, Tercer parte de la encuesta 2-->
                        
                        <div class="panel-heading panel-heading-divider"></div>
                        
                        <div class="row xs-pt-15"><!--Octaba Linea, Tercer parte de la encuesta 2-->
                    <div class="form-check col-md-4">
                            <label>III. 7 Antigüedad en la empresa</label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtAE" name="txtAE" value="Menos de un año">
                                Menos de un año
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtAE" name="txtAE" value="Un año">
                                Un año 
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtAE" name="txtAE" value="Dos años">
                                Dos años
                            </label>
                          </div>
                            <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtAE" name="txtAE" value="Tres Años" >
                                Tres Años
                            </label>
                          </div>
                            
                            <div class="form-check col-md-4"></div>
                            <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtAE" name="txtAE" value="Más de Tres Años" >
                                Más de Tres Años
                            </label>
                          </div>
                        <div class="form-check col-md-3">
                            <label class="form-check-label"><br>
                                    Año de ingreso: <input type="Text" class="form-check-input" id="txtAñoDI" name="txtAñoDI" >
                            </label>
                          </div>
                        </div><!--Fin de al Octaba Linea, Tercer parte de la encuesta 2-->
                    
                        <div class="panel-heading panel-heading-divider"></div>
                        
                        <div class="row xs-pt-15"><!--Novena Linea, Tercer parte de la encuesta 2-->
                    <div class="form-check col-md-4">
                            <label>III. 8 Ingreso(salario mínimo diario):</label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtIngreso" name="txtIngreso" value="Menos de cinco">
                                Menos de cinco
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtIngreso" name="txtIngreso" value="Entre cincon y siete">
                                Entre cincon y siete 
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtIngreso" name="txtIngreso" value="Entre ocho y diez">
                                Entre ocho y diez
                            </label>
                          </div>
                            <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtIngreso" name="txtIngreso" value=" Más de diez" >
                                Más de diez
                            </label>
                          </div>
                        </div><!--Fin de al Novena Linea, Tercer parte de la encuesta 2-->
                        
                        <div class="panel-heading panel-heading-divider"></div>
                        
                        <div class="row xs-pt-15"><!--Decima Linea, Tercer parte de la encuesta 2-->
                    <div class="form-check col-md-4">
                            <label>III. 9 Nivel jerárquico en el trabajo</label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtNJT" name="txtNJT" value="Técnico">
                                Técnico
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtNJT" name="txtNJT" value="Supervisor">
                                Supervisor
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtNJT" name="txtNJT" value="Jefe de área">
                                Jefe de área
                            </label>
                          </div>
                            <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtNJT" name="txtNJT" value="Funcionario" >
                                Funcionario
                            </label>
                          </div>
                            <div class="form-check col-md-4"></div>
                            <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtNJT" name="txtNJT" value="Directivo" >
                                Directivo
                            </label>
                          </div>
                            <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtNJT" name="txtNJT" value="Empresario" >
                                Empresario
                            </label>
                          </div>
                        </div><!--Fin de al Desima Linea, Tercer parte de la encuesta 2-->
                        
                        <div class="panel-heading panel-heading-divider"></div>
                        
                        <div class="row xs-pt-15"><!--Onceaba Linea, Tercer parte de la encuesta 2-->
                    <div class="form-check col-md-4">
                            <label>III. 10 Condición de trabajo</label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtCT" name="txtCT" value="Base">
                                Base
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtCT" name="txtCT" value="Eventual">
                                Eventual
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtCT" name="txtCT" value="Contrato">
                                Contrato
                            </label>
                          </div>
                            <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                Otros: <input type="text" class="form-check-input" id="txtCTOtro" name="txtCTOtro">
                            </label>
                          </div>
                        </div><!--Fin de al Oceaba Linea, Tercer parte de la encuesta 2-->
                        
                        <div class="panel-heading panel-heading-divider"></div>
                        
                        <div class="row xs-pt-15"><!--Doceaba Linea, Tercer parte de la encuesta 2-->
                    <div class="form-check col-md-4">
                            <label>III. 11 Relación del trabajador con su área de formación</label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtRTAF" name="txtRTAF" value="0%">
                                0%
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtRTAF" name="txtRTAF" value="20%">
                                20%
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtRTAF" name="txtRTAF" value="40%">
                                40%
                            </label>
                          </div>
                            <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtRTAF" name="txtRTAF" value="60%">
                                60%
                            </label>
                          </div>
                            <div class="form-check col-md-4"></div>
                            <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtRTAF" name="txtRTAF" value="80%">
                                80%
                            </label>
                          </div>
                            <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtRTAF" name="txtRTAF" value="100%">
                                100%
                            </label>
                          </div>
                        </div><!--Fin de al Doceaba Linea, Tercer parte de la encuesta 2-->
                        
                        <div class="panel-heading panel-heading-divider"></div>
                        <label>III. 12 Datos de la empresa u organismo</label>
                        <div class="row xs-pt-15"><!--Treceaba Linea, Tercer parte de la encuesta 2-->
                    <div class="form-check col-md-4">
                        <p>ORGANISMO:</p>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtOrganismo" name="txtOrganismo" value="Público">
                                Público
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtOrganismo" name="txtOrganismo" value="Privado">
                                Privado
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtOrganismo" name="txtOrganismo" value="Social">
                                Social
                            </label>
                          </div>
                            <div class="form-check col-md-2">
                          </div>
                            <div class="form-group col-md-12">
                      <label>Giro o actividad principal de la empresa u organismo:</label>
                      <input type="text" id="txtGiroA" name="txtGiroA" class="form-control">
                      </div>
                      <div class="form-group col-md-12">
                      <label>Razón Social:</label>
                      <input type="text" id="txtRazonA" name="txtRazonA" class="form-control">
                      </div>
                          <div class="form-group col-md-12">
                              <label>Domicilio:</label></div>
                    <div class="form-group col-md-3">
                        <label>Calle:</label>
                      <input type="text" id="txtCalle_empresa" name="txtCalle_empresa" placeholder="calle" class="form-control">
                    </div>
                     <div class="form-group col-md-3">
                         <label>No. :</label>
                      <input type="text" id="txtNo_empresa" name="txtNo_empresa" placeholder="No." class="form-control">
                    </div>
                          <div class="form-group col-md-3">
                         <label>Colonia:</label>
                      <input type="text" id="txtColonia_empresa" name="txtColonia_empresa" placeholder="Colonia" class="form-control">
                    </div>
                          <div class="form-group col-md-3">
                         <label>C.P. :</label>
                      <input type="text" id="txtCP_empresa" name="txtCP_empresa" placeholder="Código Postal" class="form-control">
                    </div>
                        
                            <div class="form-group col-md-4">
                        <label>Ciudad:</label>
                      <input type="text" id="txtCiudad_empresa" name="txtCiudad_empresa" class="form-control">
                    </div>
                     <div class="form-group col-md-4">
                         <label>Municipio:</label>
                      <input type="text" id="txtMunicipio_empresa" name="txtMunicipio_empresa" class="form-control">
                    </div>
                          <div class="form-group col-md-4">
                         <label>Estado:</label>
                      <input type="text" id="txtEstado_empresa" name="txtEstado_empresa" class="form-control">
                    </div>
                      
                            <div class="form-group col-md-12">
                                <label>Teléfonos:</label>
                            </div>
                            <div class="form-group col-md-4">
                        <label>Tel y Ext:</label>
                      <input type="text" id="txtTelefono_extencion_empresa" name="txtTelefono_extencion_empresa" class="form-control">
                    </div>
                     <div class="form-group col-md-4">
                         <label>Fax:</label>
                      <input type="text" id="txtFax_empresa" name="txtFax_empresa" class="form-control">
                    </div>
                          <div class="form-group col-md-4">
                         <label>E-m@il:</label>
                      <input type="text" id="txtCorreo_empresa" name="txtCorreo_empresa" class="form-control">
                    </div>
                            <div class="form-group col-md-12">
                         <label>Página web:</label>
                      <input type="text" id="txtPaginaWeb_empresa" name="txtPaginaWeb_empresa" class="form-control">
                    </div>
                            <div class="form-group col-md-12">
                         <label>Nombre y Puesto del Jefe Inmediato:</label>
                      <input type="text" id="txtNPJI_empresa" name="txtNPJI_empresa" class="form-control">
                    </div> 
                        </div><!--Fin de al Treceaba Linea, Tercer parte de la encuesta 2-->
                        
                        <div class="panel-heading panel-heading-divider"></div>
                        
                        <div class="row xs-pt-15"><!--Cartoceaba Linea, Tercer parte de la encuesta 2-->
                    <div class="form-check col-md-12">
                            <label>III. 13 Sector Económico de la Empresa u Organización</label>
                          </div>
                            <div class="form-check col-md-12">
                                <label>SECTOR PRIMARIO:</label>
                            </div>
                        <div class="form-check col-md-3">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtSP" name="txtSP" value="Agroindustria">
                                Agroindustria
                            </label>
                                </div>
                          <div class="form-check col-md-3">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtSP" name="txtSP" value="Pesquero">
                                Pesquero
                            </label>
                          </div>
                        <div class="form-check col-md-3">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtSP" name="txtSP" value="Minero">
                                Minero
                            </label>
                          </div>
                            <div class="form-check col-md-3">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtSP" name="txtSP" value="Otros">
                                Otros
                            </label>
                          </div>
                            
                            <div class="form-group col-md-12"></div>
                            
                            <div class="form-check col-md-12">
                                <label>SECTOR SECUNDARIO:</label>
                            </div>
                        <div class="form-check col-md-3">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtSS" name="txtSS" value="Industrial">
                                Industrial
                            </label>
                                </div>
                          <div class="form-check col-md-3">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtSS" name="txtSS" value="Construcción">
                                Construcción
                            </label>
                          </div>
                        <div class="form-check col-md-3">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtSS" name="txtSS" value="Petroleo">
                                Petroleo
                            </label>
                          </div>
                            <div class="form-check col-md-3">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtSS" name="txtSS" value="Otros">
                                Otros
                            </label>
                          </div>
                            
                            <div class="form-group col-md-12"></div>
                            
                            <div class="form-check col-md-12">
                                <label>SECTOR TERCIARIO:</label>
                            </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtST" name="txtST" value="Educativo">
                                Educativo
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtST" name="txtST" value="Turismo">
                                Turismo
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtST" name="txtST" value="Comercio">
                                Comercio
                            </label>
                          </div>
                            <div class="form-check col-md-3">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtST" name="txtST" value="Comercio">
                                Servicios Financieros
                            </label>
                          </div>
                            <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtST" name="txtST" value="Otros">
                                Otros
                            </label>
                          </div>
                            
                        </div><!--Fin de al Cartoceaba Linea, Tercer parte de la encuesta 2-->
                        
                        <div class="panel-heading panel-heading-divider"></div>
                        
                        <div class="row xs-pt-15"><!--Quintuajecima Linea, Tercer parte de la encuesta 2-->
                    <div class="form-check col-md-4">
                            <label>III. 14 Tamaño de la empresa u organización</label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtTEO" name="txtTEO" value="Microempresa(1-30)">
                                Microempresa(1-30)
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtTEO" name="txtTEO" value="Pequeña(31-100)">
                                Pequeña(31-100)
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtTEO" name="txtTEO" value="Mediana(101-500)">
                                Mediana(101-500)
                            </label>
                          </div>
                            <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtTEO" name="txtTEO" value="Grande(más de 500)">
                                Grande(más de 500)
                            </label>
                          </div>
                        </div><!--Fin de al Quintuajecima Linea, Tercer parte de la encuesta 2-->
                        <br><br>               
                        <h3>IV. DESEMPEÑO PROFESIONAL DE LOS EGRESADOS<h4>(COHERENCIA ENTRE LA FORMACIÓN Y EL TIPO DE EMPLEO)</h4></h3>
                    <p>Marcar los campos que corresponda a su trayecto profesional</p>
                    
                    <div class="panel-heading panel-heading-divider"></div>
                        
                    <div class="row xs-pt-15"><!--Primer Linea, Segunda Encuesta IV-->
                    <div class="form-check col-md-12">
                            <label>IV.1 Eficiencia para realizae las actividades laborales, en relación con su formación académica</label>
                          </div>
                                <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtEficiencia" name="txtEficiencia" value="Muy Eficiente">
                                Muy Eficiente
                            </label>
                        </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtEficiencia" name="txtEficiencia" value="Eficiente">
                                Eficiente
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtEficiencia" name="txtEficiencia" value="Poco Eficiente">
                                Poco Eficiente
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtEficiencia" name="txtEficiencia" value="Deficiente">
                                Deficiente
                            </label>
                          </div>
                    </div><!--Fin de al Primer Linea, Segunda Encuesta IV-->
                    
                    <div class="row xs-pt-15"><!--Segunda Linea, Segunda Encuesta IV-->
                    <div class="form-check col-md-12">
                            <label>IV. 2 Como califica su formación academica con respecto a su desempeño laboral</label>
                          </div>
                                <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtCalidadFARDL" name="txtCalidadFARDL" value="Excelente">
                                Excelente
                            </label>
                        </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCalidadFARDL" name="txtCalidadFARDL" value="Bueno">
                                Bueno
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCalidadFARDL" name="txtCalidadFARDL" value="Regular">
                                Regular
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCalidadFARDL" name="txtCalidadFARDL" value="Malo">
                                Malo
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCalidadFARDL" name="txtCalidadFARDL" value="Pésimo">
                                Pésimo
                            </label>
                          </div>
                    </div><!--Fin de al Segunda Linea, Segunda Encuesta IV-->
                    
                    <div class="row xs-pt-15"><!--Tercera Linea, Segunda Encuesta IV-->
                    <div class="form-check col-md-12">
                            <label>IV. 3 Utilidad de las residencias profesionales o practicas profesionales para su desarrollo laboral y profesional</label>
                          </div>
                                <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtUtilidadRP" name="txtUtilidadRP" value="Excelente">
                                Excelente
                            </label>
                        </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtUtilidadRP" name="txtUtilidadRP" value="Bueno">
                                Bueno
                            </label>
                                </div>
                          <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtUtilidadRP" name="txtUtilidadRP" value="Regular">
                                Regular
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtUtilidadRP" name="txtUtilidadRP" value="Malo">
                                Malo
                            </label>
                          </div>
                        <div class="form-check col-md-2">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtUtilidadRP" name="txtUtilidadRP" value="Pésimo">
                                Pésimo
                            </label>
                          </div>
                    </div><!--Fin de al Tercera Linea, Segunda Encuesta IV-->
                    
                    <div class="row xs-pt-15">
                    <div class="form-check col-md-12"><!--Cuarta Linea, Segunda Encuesta IV-->
                            <label>IV. 4 Aspectos que valora la empresa u organismo para la contratación de egresados:</label>
                    </div></div>
                      <div class="row xs-pt-15">
                          <div class="form-check col-md-7"> </div>
                          <div class="form-check col-md-4"> 
                              <label>Poco</label>
                          </div>
                          <div class="form-check col-md-1"> 
                              <label>Mucho</label>
                          </div>
                          
                          <div class="form-check col-md-7">
                              <label>1. Área o Campo de Estudio</label>
                          </div>
                                <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtACE" name="txtACE" value="1">
                                1
                            </label>
                        </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtACE" name="txtACE" value="2">
                                2
                            </label>
                                </div>
                          <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtACE" name="txtACE" value="3">
                                3
                            </label>
                          </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtACE" name="txtACE" value="4">
                                4
                            </label>
                          </div>
                              <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtACE" name="txtACE" value="5">
                                5
                            </label>
                          </div>
                          
                          <div class="form-check col-md-7">
                              <label>2. Titulación</label>
                          </div>
                                <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtTitulacion2" name="txtTitulacion2" value="1">
                                1
                            </label>
                        </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtTitulacion2" name="txtTitulacion2" value="2">
                                2
                            </label>
                                </div>
                          <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtTitulacion2" name="txtTitulacion2" value="3">
                                3
                            </label>
                          </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtTitulacion2" name="txtTitulacion2" value="4">
                                4
                            </label>
                          </div>
                              <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtTitulacion2" name="txtTitulacion2" value="5">
                                5
                            </label>
                          </div>
                          
                          <div class="form-check col-md-7">
                              <label>3. Experiencia Laboral/práctica (antes de egresar)</label>
                          </div>
                                <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtExperienciaL" name="txtExperienciaL" value="1">
                                1
                            </label>
                        </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtExperienciaL" name="txtExperienciaL" value="2">
                                2
                            </label>
                                </div>
                          <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtExperienciaL" name="txtExperienciaL" value="3">
                                3
                            </label>
                          </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtExperienciaL" name="txtExperienciaL" value="4">
                                4
                            </label>
                          </div>
                              <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtExperienciaL" name="txtExperienciaL" value="5">
                                5
                            </label>
                          </div>
                          
                          <div class="form-check col-md-7">
                              <label>4. Competencia Laboral: Habilidad para resolver proboemas, capacidad de análisis, habilidad para el aprendizaje, creatividad, administración del tiempo, capacidad de negiciación,
                              habilidades manuales, trabajo en equipo, iniciativa, honestidad, persistencia, etc.</label>
                          </div>
                                <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtCompetenciaL" name="txtCompetenciaL" value="1">
                                1
                            </label>
                        </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCompetenciaL" name="txtCompetenciaL" value="2">
                                2
                            </label>
                                </div>
                          <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCompetenciaL" name="txtCompetenciaL" value="3">
                                3
                            </label>
                          </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCompetenciaL" name="txtCompetenciaL" value="4">
                                4
                            </label>
                          </div>
                              <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCompetenciaL" name="txtCompetenciaL" value="5">
                                5
                            </label>
                          </div>
                          
                          <div class="form-check col-md-7">
                              <label>5. Posicionamiento de la institución de Egreso</label>
                          </div>
                                <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtPosicionamientoIE" name="txtPosicionamientoIE" value="1">
                                1
                            </label>
                        </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtPosicionamientoIE" name="txtPosicionamientoIE" value="2">
                                2
                            </label>
                                </div>
                          <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtPosicionamientoIE" name="txtPosicionamientoIE" value="3">
                                3
                            </label>
                          </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtPosicionamientoIE" name="txtPosicionamientoIE" value="4">
                                4
                            </label>
                          </div>
                              <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtPosicionamientoIE" name="txtPosicionamientoIE" value="5">
                                5
                            </label>
                          </div>
                          
                          <div class="form-check col-md-7">
                              <label>6. Conocimientos de idiomas Extranjeros</label>
                          </div>
                                <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtCIE" name="txtCIE" value="1">
                                1
                            </label>
                        </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCIE" name="txtCIE" value="2">
                                2
                            </label>
                                </div>
                          <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCIE" name="txtCIE" value="3">
                                3
                            </label>
                          </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCIE" name="txtCIE" value="4">
                                4
                            </label>
                          </div>
                              <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCIE" name="txtCIE" value="5">
                                5
                            </label>
                          </div>
                          
                          <div class="form-check col-md-7">
                              <label>7. Recomendaciones/ referencias</label>
                          </div>
                                <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtRecomendaciones" name="txtRecomendaciones" value="1">
                                1
                            </label>
                        </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtRecomendaciones" name="txtRecomendaciones" value="2">
                                2
                            </label>
                                </div>
                          <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtRecomendaciones" name="txtRecomendaciones" value="3">
                                3
                            </label>
                          </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtRecomendaciones" name="txtRecomendaciones" value="4">
                                4
                            </label>
                          </div>
                              <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtRecomendaciones" name="txtRecomendaciones" value="5">
                                5
                            </label>
                          </div>
                          
                          <div class="form-check col-md-7">
                              <label>8. Personalidad/ Actitudes</label>
                          </div>
                                <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtPersonalidad" name="txtPersonalidad" value="1">
                                1
                            </label>
                        </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtPersonalidad" name="txtPersonalidad" value="2">
                                2
                            </label>
                                </div>
                          <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtPersonalidad" name="txtPersonalidad" value="3">
                                3
                            </label>
                          </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtPersonalidad" name="txtPersonalidad" value="4">
                                4
                            </label>
                          </div>
                              <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtPersonalidad" name="txtPersonalidad" value="5">
                                5
                            </label>
                          </div>
                          
                          <div class="form-check col-md-7">
                              <label>9. Capacidad de liderazgo</label>
                          </div>
                                <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtCDL" name="txtCDL" value="1">
                                1
                            </label>
                        </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCDL" name="txtCDL" value="2">
                                2
                            </label>
                                </div>
                          <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCDL" name="txtCDL" value="3">
                                3
                            </label>
                          </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCDL" name="txtCDL" value="4">
                                4
                            </label>
                          </div>
                              <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtCDL" name="txtCDL" value="5">
                                5
                            </label>
                          </div>
                          
                          <div class="form-check col-md-7">
                              <label>10. Otros</label>
                          </div>
                                <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtOtros3" name="txtOtros3" value="1">
                                1
                            </label>
                        </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtOtros3" name="txtOtros3" value="2">
                                2
                            </label>
                                </div>
                          <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtOtros3" name="txtOtros3" value="3">
                                3
                            </label>
                          </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtOtros3" name="txtOtros3" value="4">
                                4
                            </label>
                          </div>
                              <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtOtros3" name="txtOtros3" value="5">
                                5
                            </label>
                          </div>
                    </div><!--Fin de al Cuarta Linea, Segunda Encuesta IV-->
                    
                     <br><br>               
                        <h3>V. EXPECTATIVAS DE DESARROLLO, SUPERACIÓN PROFESIONAL Y DE ACTUALIZACIÓN</h3>
                        
                    <div class="panel-heading panel-heading-divider"></div>
                    
                    <div class="row xs-pt-15"><!--Primer Linea, Segunda Encuesta V-->
                    <div class="form-check col-md-12">
                            <label>V.1 ACTUALIZACIÓN DE CONOCIMIENTOS</label>
                          </div>
                            <div class="form-check col-md-5">
                                <label>Le gusta tomar cursos de actualización</label>
                            </div>
                           <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtLTCA" name="txtLTCA" value=" Si">
                                Si
                            </label>
                        </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtLTCA" name="txtLTCA" value="No">
                                No
                            </label>
                                </div>
                          <div class="form-check col-md-5">
                            <label class="form-check-label"><br>
                                ¿Cuales?<input type="text" class="form-check-input" id="txtCual" name="txtCual" >
                               
                            </label>
                          </div>
                        
                            <div class="form-check col-md-5">
                                <label>Le gusta tomar algún Posgrado</label>
                            </div>
                           <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtLGTAP" name="txtLGTAP" value=" Si">
                                Si
                            </label>
                        </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtLGTAP" name="txtLGTAP" value="No">
                                No
                            </label>
                                </div>
                          <div class="form-check col-md-5">
                            <label class="form-check-label"><br>
                                ¿Cuales?<input type="text" class="form-check-input" id="txtCual2" name="txtCual2" >
                               
                            </label>
                          </div>
                    </div><!--Fin de al Primer Linea, Segunda Encuesta V-->

                    <br><br>               
                        <h3>VI. PARTICIPACIÓN SOCIAL DE LOS EGRESADOS</h3>
                        
                    <div class="panel-heading panel-heading-divider"></div>
                    
                    <div class="row xs-pt-15"><!--Primer Linea, Segunda Encuesta VI-->
                            <div class="form-check col-md-5">
                                <label>VI.1 Pertenece a organizaciones sociales</label>
                            </div>
                           <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtPOS" name="txtPOS" value=" Si">
                                Si
                            </label>
                        </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtPOS" name="txtPOS" value="No">
                                No
                            </label>
                                </div>
                          <div class="form-check col-md-5">
                            <label class="form-check-label"><br>
                                ¿Cuales?<input type="text" class="form-check-input" id="txtCual3" name="txtCual3" >
                               
                            </label>
                          </div>
                        
                            <div class="form-check col-md-5">
                                <label>VI. 2 Pertenece a organismos de profesionistas</label>
                            </div>
                           <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtPOP" name="txtPOP" value=" Si">
                                Si
                            </label>
                        </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtPOP" name="txtPOP" value="No">
                                No
                            </label>
                                </div>
                          <div class="form-check col-md-5">
                            <label class="form-check-label"><br>
                                ¿Cuales?<input type="text" class="form-check-input" id="txtCual4" name="txtCual4" >
                               
                            </label>
                          </div>
                        
                        <div class="form-check col-md-5">
                                <label>VI. 3 Pertenece a la asociación de egresados</label>
                            </div>
                           <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtPAE" name="txtPAE" value=" Si">
                                Si
                            </label>
                        </div>
                        <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtPAE" name="txtPAE" value="No">
                                No
                            </label>
                                </div>
                    </div><!--Fin de al Primer Linea, Segunda Encuesta VI-->
                    
                    <br><br>               
                        <h3>VIII. COMENTARIOS Y SUGERENCIAS</h3>
                        
                    <div class="panel-heading panel-heading-divider"></div>

                    <div class="row xs-pt-15"><!--Primer Linea, Segunda Encuesta VIII-->
                    
                        <div class="form-check col-md-12">
                                <label>Opinión o recomendación para mejorar la formación profesional de un egresado de su carrera</label>
                            </div>
                        
                    <div class="form-check col-md-12">
                                <input type="text" class="form-control" id="txtRecomendaciones2" name="txtRecomendaciones2" >
                                </div>
                    </div><!--Fin de la Primer Linea, Segunda Encuesta VIII-->
                    <center><h3>¡Muchas gracias por su gentil colaboración!</h3></center>
                     <div class="row xs-pt-15">
                      <div class="col-xs-6">
                        <div class="be-checkbox">
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <p class="text-right">
                          <button type="submit" class="btn btn-space btn-primary">registrar</button>
                        </p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
      </div>
      </div>
      </div>
      <nav class="be-right-sidebar">
        <div class="sb-content">
          <div class="tab-navigation">
            <ul role="tablist" class="nav nav-tabs nav-justified">
              <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Chat</a></li>
              <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Todo</a></li>
              <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Settings</a></li>
            </ul>
          </div>
          <div class="tab-panel">
            <div class="tab-content">
              <div id="tab1" role="tabpanel" class="tab-pane tab-chat active">
                <div class="chat-contacts">
                  <div class="chat-sections">
                    <div class="be-scroller">
                      <div class="content">
                        <h2>Recent</h2>
                        <div class="contact-list contact-list-recent">
                          <div class="user"><a href="#"><img src="assets/img/avatar1.png" alt="Avatar">
                              <div class="user-data"><span class="status away"></span><span class="name">Claire Sassu</span><span class="message">Can you share the...</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar2.png" alt="Avatar">
                              <div class="user-data"><span class="status"></span><span class="name">Maggie jackson</span><span class="message">I confirmed the info.</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar3.png" alt="Avatar">
                              <div class="user-data"><span class="status offline"></span><span class="name">Joel King		</span><span class="message">Ready for the meeti...</span></div></a></div>
                        </div>
                        <h2>Contacts</h2>
                        <div class="contact-list">
                          <div class="user"><a href="#"><img src="assets/img/avatar4.png" alt="Avatar">
                              <div class="user-data2"><span class="status"></span><span class="name">Mike Bolthort</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar5.png" alt="Avatar">
                              <div class="user-data2"><span class="status"></span><span class="name">Maggie jackson</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar6.png" alt="Avatar">
                              <div class="user-data2"><span class="status offline"></span><span class="name">Jhon Voltemar</span></div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bottom-input">
                    <input type="text" placeholder="Search..." name="q"><span class="mdi mdi-search"></span>
                  </div>
                </div>
                <div class="chat-window">
                  <div class="title">
                    <div class="user"><img src="assets/img/avatar2.png" alt="Avatar">
                      <h2>Maggie jackson</h2><span>Active 1h ago</span>
                    </div><span class="icon return mdi mdi-chevron-left"></span>
                  </div>
                  <div class="chat-messages">
                    <div class="be-scroller">
                      <div class="content">
                        <ul>
                          <li class="friend">
                            <div class="msg">Hello</div>
                          </li>
                          <li class="self">
                            <div class="msg">Hi, how are you?</div>
                          </li>
                          <li class="friend">
                            <div class="msg">Good, I'll need support with my pc</div>
                          </li>
                          <li class="self">
                            <div class="msg">Sure, just tell me what is going on with your computer?</div>
                          </li>
                          <li class="friend">
                            <div class="msg">I don't know it just turns off suddenly</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="chat-input">
                    <div class="input-wrapper"><span class="photo mdi mdi-camera"></span>
                      <input type="text" placeholder="Message..." name="q" autocomplete="off"><span class="send-msg mdi mdi-mail-send"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab2" role="tabpanel" class="tab-pane tab-todo">
                <div class="todo-container">
                  <div class="todo-wrapper">
                    <div class="be-scroller">
                      <div class="todo-content"><span class="category-title">Today</span>
                        <ul class="todo-list">
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo1" type="checkbox" checked="">
                              <label for="todo1">Initialize the project</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo2" type="checkbox">
                              <label for="todo2">Create the main structure</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo3" type="checkbox">
                              <label for="todo3">Updates changes to GitHub</label>
                            </div>
                          </li>
                        </ul><span class="category-title">Tomorrow</span>
                        <ul class="todo-list">
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo4" type="checkbox">
                              <label for="todo4">Initialize the project</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo5" type="checkbox">
                              <label for="todo5">Create the main structure</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo6" type="checkbox">
                              <label for="todo6">Updates changes to GitHub</label>
                            </div>
                          </li>
                          <li>
                            <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                              <input id="todo7" type="checkbox">
                              <label for="todo7" title="This task is too long to be displayed in a normal space!">This task is too long to be displayed in a normal space!</label>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="bottom-input">
                    <input type="text" placeholder="Create new task..." name="q"><span class="mdi mdi-plus"></span>
                  </div>
                </div>
              </div>
              <div id="tab3" role="tabpanel" class="tab-pane tab-settings">
                <div class="settings-wrapper">
                  <div class="be-scroller"><span class="category-title">General</span>
                    <ul class="settings-list">
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st1" id="st1"><span>
                            <label for="st1"></label></span>
                        </div><span class="name">Available</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st2" id="st2"><span>
                            <label for="st2"></label></span>
                        </div><span class="name">Enable notifications</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st3" id="st3"><span>
                            <label for="st3"></label></span>
                        </div><span class="name">Login with Facebook</span>
                      </li>
                    </ul><span class="category-title">Notifications</span>
                    <ul class="settings-list">
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="st4" id="st4"><span>
                            <label for="st4"></label></span>
                        </div><span class="name">Email notifications</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st5" id="st5"><span>
                            <label for="st5"></label></span>
                        </div><span class="name">Project updates</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st6" id="st6"><span>
                            <label for="st6"></label></span>
                        </div><span class="name">New comments</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="st7" id="st7"><span>
                            <label for="st7"></label></span>
                        </div><span class="name">Chat messages</span>
                      </li>
                    </ul><span class="category-title">Workflow</span>
                    <ul class="settings-list">
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="st8" id="st8"><span>
                            <label for="st8"></label></span>
                        </div><span class="name">Deploy on commit</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      
      });
    </script>
  </body>

<!-- Mirrored from foxythemes.net/preview/products/beagle2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jun 2017 21:44:32 GMT -->
</html>