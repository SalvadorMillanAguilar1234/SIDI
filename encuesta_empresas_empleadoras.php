<?php
require_once 'Entidad.php';
require_once 'Modelo.php';
require_once 'Controlador.php';
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from foxythemes.net/preview/products/beagle2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jun 2017 21:43:34 GMT -->
    <head>
        <script language="javascript">
            step = 0;
            function autoImgFlip() {
                if (step < 50) {
                    step++;
                } else {
                    step = 0;
                }
                if (step == 1)
                {
                    a.src = "assets/img/gallery/4k-desktop-background_065226855_309.jpg";
                }
                if (step == 15)
                {
                    a.src = "assets/img/gallery/4k-Car-Wallpaper-Free-HD.jpg";
                }
                if (step == 29)
                {
                    a.src = "assets/img/gallery/4K-HD-Wallpapers.jpg";
                }
                setTimeout("autoImgFlip()", 400);
                if (step == 43)
                {
                    a.src = "assets/img/gallery/4k-desktop-wallpaper_065227602_309.jpg";
                }
            }

        </script>
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
    <body onLoad="autoImgFlip();">
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
                                        <div class="form-group col-md-6"><label>ENCUESTA DE EMPRESAS EMPLEADORAS</label></div>
                                        <div  class="form-group col-md-3"><img  src="assets/img/gallery/SEP.png" alt="" width="100%"/></div>
                                        <div  class="form-group col-md-3"><img  src="assets/img/gallery/Sistema nacional de educación tecnologica.gif" alt="" width="100%"/></div>
                                        <div class="panel-body">



                                            <!--Inicio del formilario -->
                                            <form id="encuestaSalida" method="post" action="?operacion3=<?php echo $elementos->idEcuesta3 > 0 ? 'actualizar3' : 'registrar3'; ?>">
                                                <input type="hidden" name="idEcuesta3" value="<?php echo $elementos->__GET('idEcuesta3'); ?>" />

                                                <div class="row xs-pt-15">
                                                    <div class="form-group col-md-10"></div>
                                                    <div class="form-group col-md-2">
                                                        <label>No. de folio:</label>
                                                        <input type="text" id="txtNoFolio_empresa" name="txtNoFolio_empresa"  class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row xs-pt-15">
                                                    <div class="form-group col-sm-12">
                                                        <h2>A. DATOS GENERALES DE LA EMPRESA U ORGANISMO</h2>
                                                    </div></div>

                                                <!--Inicio de la primer sección -->

                                                <div class="form-group">
                                                    <h3>1. Nombre Comercial de la Empresa:</h3>
                                                    <input type="text" id="txtNombreComercialEmpresa" name="txtNombreComercialEmpresa"  class="form-control" required>
                                                </div>
                                                <h4>Domicilio:</h4>

                                                <div class="row xs-pt-15">
                                                    <div class="form-group col-md-4">
                                                        <label>Ciudad:</label>
                                                        <input type="text" id="txtCiudadEmpresaEmpleadora" name="txtCiudadEmpresaEmpleadora"  class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Municipio:</label>
                                                        <input type="text" id="txtMunicipioEmpresaEmpleadora" name="txtMunicipioEmpresaEmpleadora" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Estado:</label>
                                                        <input type="text" id="txtEstadoEmpresaEmpleadora" name="txtEstadoEmpresaEmpleadora" class="form-control" required>
                                                    </div>
                                                </div>

                                                <div class="row xs-pt-15">
                                                    <div class="form-group col-md-6">
                                                        <label>Teléfono(s):</label>
                                                        <input type="tel" id="txtTelefonosEmpresasEmpleadoras" name="txtTelefonosEmpresasEmpleadoras"  class="form-control" required>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>Correo eléctronico:</label>
                                                        <input type="email" id="txtCorreoEmpresasEmpleadoras" name="txtCorreoEmpresasEmpleadoras"  class="form-control" required>
                                                    </div>
                                                </div>
                                                <!--Fin de la primer sección -->


                                                <!--Inicio de la segunda sección -->

                                                <div class="row xs-pt-15">   
                                                    <div class="form-check col-md-12">
                                                        <h3>2 Su empresa u organismo es:</h3>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtTipoDeEmpresa" name="txtTipoDeEmpresa" value="publica">
                                                                Pública
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtTipoDeEmpresa" name="txtTipoDeEmpresa" value="Privada">
                                                                Privada
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtTipoDeEmpresa" name="txtTipoDeEmpresa" value="Social">
                                                                Social
                                                            </label>
                                                        </div>   

                                                    </div><!--Fin de la segunda sección-->

                                                </div>

                                                <!--Inicio de la tercer sección -->
                                                <div class="row xs-pt-15">   
                                                    <div class="form-check col-md-12">
                                                        <h3>3 Tamaño de la empresa u organismo:</h3>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtTamanoEmpresa" name="txtTamanoEmpresa" value=" Microempresa(De 1 a30)">
                                                                Microempresa(De 1 a 30)
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtTamanoEmpresa" name="txtTamanoEmpresa" value="Pequena(De 31 a 100)">
                                                                Pequeña(De 31 a 100)
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtTamanoEmpresa" name="txtTamanoEmpresa" value="Mediana(De 101 a 500)">
                                                                Mediana(De 101 a 500)
                                                            </label>
                                                        </div>   

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtTamanoEmpresa" name="txtTamanoEmpresa" value="Grande(Mas de 500)">
                                                                Grande(Más de 500)
                                                            </label>
                                                        </div>   
                                                    </div>
                                                </div><!--Fin de la Tercer sección-->


                                                <!--Inicio de la Cuarta sección -->
                                                <div class="row xs-pt-15">   
                                                    <div class="form-check col-md-12">
                                                        <h3>4 Actividad económica de la empresa u organismo. Indique a cual clasificación corresponde su empresa:</h3>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Agro-industrial">
                                                                Agro-industrial
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Sílvicultura">
                                                                Sílvicultura
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Pesca y acuacultura">
                                                                Pesca y acuacultura
                                                            </label>
                                                        </div>   

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Mineria">
                                                                Minería
                                                            </label>
                                                        </div>   

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Alimentos, bebidas y tabaco">
                                                                Alimentos, bebidas y tabaco
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Textiles, vestido y cuero">
                                                                Textiles, vestido y cuero
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Madera y sus productos">
                                                                Madera y sus productos
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Papel, imprenta y editoriales">
                                                                Papel, imprenta y editoriales
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Quimica">
                                                                Química
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Caucho y Plastico">
                                                                Caucho y Plástico
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Minerales no metalicos">
                                                                Minerales no metálicos
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Industrias metalicas basicas">
                                                                Industrias metálicas básicas
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Productos metalicos, maquinaria y equipo">
                                                                Productos metálicos, maquinaria y equipo
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Construccion">
                                                                Construcción
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Electricidad, gas y aguas">
                                                                Electricidad, gas y aguas
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Comercio y turismo">
                                                                Comercio y turismo
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Transporte, almacenaje y comunicaciones">
                                                                Transporte, almacenaje y comunicaciones
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Servicios financiers, seguros, activicaces inmobiliarias y de alquiler">
                                                                Servicios financiers, seguros, activicaces inmobiliarias y de alquiler
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtActividadDeLaEmpresa" name="txtActividadDeLaEmpresa" value="Educacion">
                                                                Educación
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                Otro (específique): <input type="text" class="form-check-input" id="txtActividadDeLaEmpresaOtro" name="txtActividadDeLaEmpresaOtro">

                                                            </label>
                                                        </div>
                                                    </div>
                                                </div><!--Fin de la Cuarta sección-->

                                                <h2>B. UBICACIÓN LABORAL DE LOS EGRESADOS</h2>

                                                <!--Inicio de la quinta sección -->
                                                <div class="row xs-pt-15">   
                                                    <div class="form-check col-md-12">
                                                        <h3>5. Número de profesionistas con nivel de licenciatura que laboran en la empresa u organísmo:</h3>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtNumerosDeProfesionistas" name="txtNumerosDeProfesionistas" value=" 1">
                                                                1
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtNumerosDeProfesionistas" name="txtNumerosDeProfesionistas" value="De 2 a 5">
                                                                De 2 a 5
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtNumerosDeProfesionistas" name="txtNumerosDeProfesionistas" value="De 6 a 8">
                                                                De 6 a 8
                                                            </label>
                                                        </div>   

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtNumerosDeProfesionistas" name="txtNumerosDeProfesionistas" value="De 9 a 10">
                                                                De 9 a 10
                                                            </label>
                                                        </div>   
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtNumerosDeProfesionistas" name="txtNumerosDeProfesionistas" value="Más de 10">
                                                                Más de 10
                                                            </label>
                                                        </div>  
                                                    </div>
                                                </div><!--Fin de la quinta uinta sección-->

                                                <!--Inicio de la sexta sección -->
                                                <div class="row xs-pt-15">   
                                                    <div class="form-check col-md-12">
                                                        <h3>6. Número de egresados del Instituto Tecnológico y nivel jerátquico que ocupan en su organización:</h3>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <h3 >Carrerá</h3><br>
                                                                <input type="text" class="form-check-input" id="txtEgresadoCarrera" name="txtEgresadoCarrera"  placeholder="Primero">
                                                                <br><br>
                                                                <input type="radio" class="form-check-input" id="txtMandoDelProfesionistas" name="txtMandoDelProfesionistas" value="Mando superior">
                                                                Mando superior
                                                                <br><br>
                                                                <input type="radio" class="form-check-input" id="txtMandoDelProfesionistas" name="txtMandoDelProfesionistas" value="Mando Intermedio">
                                                                Mando Intermedio
                                                                <br><br>
                                                                <input type="radio" class="form-check-input" id="txtMandoDelProfesionistas" name="txtMandoDelProfesionistas" value="Supervisor o equivalente">
                                                                Supervisor o equivalente
                                                                <br><br>
                                                                <input type="radio" class="form-check-input" id="txtMandoDelProfesionistas" name="txtMandoDelProfesionistas" value="Tecnico o Auxiliar">
                                                                Técnico o Auxiliar
                                                                <br><br>
                                                                <h4>Otros(Especifique)</h4><br>
                                                                <input type="text" class="form-check-input" id="txtOtroMandoDelProfesionistas" name="txtOtroMandoDelProfesionistas" >
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <h3 >Carrerá</h3><br>
                                                                <input type="text" class="form-check-input" id="txtEgresadoCarrera2" name="txtEgresadoCarrera2"  placeholder="Segundo">
                                                                <br><br>
                                                                <input type="radio" class="form-check-input" id="txtMandoDelProfesionistas2" name="txtMandoDelProfesionistas2" value="Mando superior">
                                                                Mando superior
                                                                <br><br>
                                                                <input type="radio" class="form-check-input" id="txtMandoDelProfesionistas2" name="txtMandoDelProfesionistas2" value="Mando Intermedio">
                                                                Mando Intermedio
                                                                <br><br>
                                                                <input type="radio" class="form-check-input" id="txtMandoDelProfesionistas2" name="txtMandoDelProfesionistas2" value="Supervisor o equivalente">
                                                                Supervisor o equivalente
                                                                <br><br>
                                                                <input type="radio" class="form-check-input" id="txtMandoDelProfesionistas2" name="txtMandoDelProfesionistas2" value="Tecnico o Auxiliar">
                                                                Técnico o Auxiliar
                                                                <br><br>
                                                                <h4>Otros(Especifique)</h4><br>
                                                                <input type="text" class="form-check-input" id="txtOtroMandoDelProfesionistas2" name="txtOtroMandoDelProfesionistas2" >
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <h3 >Carrerá</h3><br>
                                                                <input type="text" class="form-check-input" id="txtEgresadoCarrera3" name="txtEgresadoCarrera3"  placeholder="Tercero">
                                                                <br><br>
                                                                <input type="radio" class="form-check-input" id="txtMandoDelProfesionistas3" name="txtMandoDelProfesionistas3" value="Mando superior">
                                                                Mando superior
                                                                <br><br>
                                                                <input type="radio" class="form-check-input" id="txtMandoDelProfesionistas3" name="txtMandoDelProfesionistas3" value="Mando Intermedio">
                                                                Mando Intermedio
                                                                <br><br>
                                                                <input type="radio" class="form-check-input" id="txtMandoDelProfesionistas3" name="txtMandoDelProfesionistas3" value="Supervisor o equivalente">
                                                                Supervisor o equivalente
                                                                <br><br>
                                                                <input type="radio" class="form-check-input" id="txtMandoDelProfesionistas3" name="txtMandoDelProfesionistas3" value="Tecnico o Auxiliar">
                                                                Técnico o Auxiliar
                                                                <br><br>
                                                                <h4>Otros(Especifique)</h4><br>
                                                                <input type="text" class="form-check-input" id="txtOtroMandoDelProfesionistas3" name="txtOtroMandoDelProfesionistas3" >
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <h3 >Carrerá</h3><br>
                                                                <input type="text" class="form-check-input" id="txtEgresadoCarrera4" name="txtEgresadoCarrera4"  placeholder="Cuarto">
                                                                <br><br>
                                                                <input type="radio" class="form-check-input" id="txtMandoDelProfesionistas4" name="txtMandoDelProfesionistas4" value="Mando superior">
                                                                Mando superior
                                                                <br><br>
                                                                <input type="radio" class="form-check-input" id="txtMandoDelProfesionistas4" name="txtMandoDelProfesionistas4" value="Mando Intermedio">
                                                                Mando Intermedio
                                                                <br><br>
                                                                <input type="radio" class="form-check-input" id="txtMandoDelProfesionistas4" name="txtMandoDelProfesionistas4" value="Supervisor o equivalente">
                                                                Supervisor o equivalente
                                                                <br><br>
                                                                <input type="radio" class="form-check-input" id="txtMandoDelProfesionistas4" name="txtMandoDelProfesionistas4" value="Tecnico o Auxiliar">
                                                                Técnico o Auxiliar
                                                                <br><br>
                                                                <h4>Otros(Especifique)</h4><br>
                                                                <input type="text" class="form-check-input" id="txtOtroMandoDelProfesionistas4" name="txtOtroMandoDelProfesionistas4" >
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div><!--Fin de la sexta uinta sección-->

                                                <!--Inicio de la seven sección -->
                                                <div class="row xs-pt-15">   
                                                    <div class="form-check col-md-12">
                                                        <h3>7. Congruencia entre perfil profesional y función que desarrollan los egresados del instituto Tecnológico en su
                                                            empresa u organización. Del total de egresados anote el porcentaje que corresponda:</h3>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtCongruensiaEntrePerfil" name="txtCongruensiaEntrePerfil" value="Completamente">
                                                                a. Completamente
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtCongruensiaEntrePerfil" name="txtCongruensiaEntrePerfil" value="Medianamente">
                                                                b. Medianamente
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtCongruensiaEntrePerfil" name="txtCongruensiaEntrePerfil" value="Ligeramente">
                                                                c. Ligeramente
                                                            </label>
                                                        </div>   

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtCongruensiaEntrePerfil" name="txtCongruensiaEntrePerfil" value="Ninguna relacion">
                                                                d. Ninguna relación
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div><!--Fin de la seven uinta sección-->

                                                <!--Inicio de la Octava sección -->
                                                <div class="row xs-pt-15">   
                                                    <div class="form-check col-md-12">
                                                        <h3>8. Requisitos que establece su empresa u organización para la contratación de personal con nivel de licenciatura.</h3>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtRequisitosDeLaEmpresa1" name="txtRequisitosDeLaEmpresa1" value="Area o campo de estudio">
                                                                a. Área o campo de estudio
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtRequisitosDeLaEmpresa2" name="txtRequisitosDeLaEmpresa2" value="Titulacion">
                                                                b. Titulación
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtRequisitosDeLaEmpresa3" name="txtRequisitosDeLaEmpresa3" value="Ligeramente">
                                                                c. Experiencia laboral/práctica(antes de egresar)
                                                            </label>
                                                        </div>   

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtRequisitosDeLaEmpresa4" name="txtRequisitosDeLaEmpresa4" value="Ninguna relacion">
                                                                d. Posicionamiento de la institución de Egreso
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtRequisitosDeLaEmpresa5" name="txtRequisitosDeLaEmpresa5" value="Conocimientos de idiomas extranjeros">
                                                                e. Conocimientos de idiomas extranjeros
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtRequisitosDeLaEmpresa6" name="txtRequisitosDeLaEmpresa6" value="Recomendaciones/Referencias">
                                                                f. Recomendaciones/Referencias
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtRequisitosDeLaEmpresa7" name="txtRequisitosDeLaEmpresa7" value="Personalidad/ actitudes">
                                                                g. Personalidad/ actitudes
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtRequisitosDeLaEmpresa8" name="txtRequisitosDeLaEmpresa8" value="Capacidad de liderazgo">
                                                                h. Capacidad de liderazgo
                                                            </label>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label ><br>
                                                                i. Otras (especifique)</label> <input type="text" class="form-control" id="txtRequisitosDeLaEmpresa9" name="txtRequisitosDeLaEmpresa9" >
                                                        </div>

                                                    </div>
                                                </div><!--Fin de la Octava uinta sección-->


                                                <!--Inicio de la Novena sección -->
                                                <div class="row xs-pt-15">   
                                                    <div class="form-check col-md-12">
                                                        <h3>9. Carreras que demanda preferentemente su empresa u orgamismo.</h3>
                                                        <div class="form-group col-md-12">
                                                            <input type="text" class="form-control" id="txtCarreraPreferente" name="txtCarreraPreferente" required>
                                                        </div>
                                                    </div>
                                                </div><!--Fin de la Novena linta sección-->

                                                <h2>C. COMPETENCIAS LABORALES</h2>
                                                <!--Inicio de la Decima sección -->
                                                <div class="row xs-pt-15">   
                                                    <div class="form-check col-md-12">
                                                        <h3>10. En su opinión ¿qué competencias considera deben desarrollar los egresados del instituto Tecnológico, para desempeñarse eficientemente
                                                            en sus actividades laborales?</h3>
                                                        <h4>Por favor evalúe conforme a la tabla siguiente: Califique del 1(menor) al 5(mayor).</h4>

                                                        <div class="form-check col-md-7">
                                                            <label>Competemcia Laboral: </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-check col-md-12">
                                                        <div class="form-check col-md-7"><label>a. Habilidad para resolver conflictos</label></div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtHabilidadResolverConflictos" name="txtHabilidadResolverConflictos" value="1">
                                                            1
                                                        </div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtHabilidadResolverConflictos" name="txtHabilidadResolverConflictos" value="2">
                                                            2</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtHabilidadResolverConflictos" name="txtHabilidadResolverConflictos" value="3">
                                                            3</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtHabilidadResolverConflictos" name="txtHabilidadResolverConflictos" value="4">
                                                            4</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtHabilidadResolverConflictos" name="txtHabilidadResolverConflictos" value="5">
                                                            5</div>

                                                        <div class="form-check col-md-7"><label>b. Ortografía y redacción de documentos</label></div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtOrtografiaRedaccion" name="txtOrtografiaRedaccion" value="1">
                                                            1</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtOrtografiaRedaccion" name="txtOrtografiaRedaccion" value="2">
                                                            2</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtOrtografiaRedaccion" name="txtOrtografiaRedaccion" value="3">
                                                            3</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtOrtografiaRedaccion" name="txtOrtografiaRedaccion" value="4">
                                                            4</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtOrtografiaRedaccion" name="txtOrtografiaRedaccion" value="5">
                                                            5</div>

                                                        <div class="form-check col-md-7"><label>c. Mejora de procesos</label></div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtMejoraProcesos" name="txtMejoraProcesos" value="1">
                                                            1</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtMejoraProcesos" name="txtMejoraProcesos" value="2">
                                                            2</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtMejoraProcesos" name="txtMejoraProcesos" value="3">
                                                            3</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtMejoraProcesos" name="txtMejoraProcesos" value="4">
                                                            4</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtMejoraProcesos" name="txtMejoraProcesos" value="5">
                                                            5</div>

                                                        <div class="form-check col-md-7"><label>d. Trabajo en equipo</label></div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtTrabajoEquipo" name="txtTrabajoEquipo" value="1">
                                                            1</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtTrabajoEquipo" name="txtTrabajoEquipo" value="2">
                                                            2</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtTrabajoEquipo" name="txtTrabajoEquipo" value="3">
                                                            3</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtTrabajoEquipo" name="txtTrabajoEquipo" value="4">
                                                            4</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtTrabajoEquipo" name="txtTrabajoEquipo" value="5">
                                                            5</div>

                                                        <div class="form-check col-md-7"><label>e. Habilidad para administrar tiempo</label></div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtAdministrarTiempo" name="txtAdministrarTiempo" value="1">
                                                            1</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtAdministrarTiempo" name="txtAdministrarTiempo" value="2">
                                                            2</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtAdministrarTiempo" name="txtAdministrarTiempo" value="3">
                                                            3</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtAdministrarTiempo" name="txtAdministrarTiempo" value="4">
                                                            4</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtAdministrarTiempo" name="txtAdministrarTiempo" value="5">
                                                            5</div>

                                                        <div class="form-check col-md-7"><label>f. Seguridad personal</label></div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtSeguridadPersonal" name="txtSeguridadPersonal" value="1">
                                                            1</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtSeguridadPersonal" name="txtSeguridadPersonal" value="2">
                                                            2</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtSeguridadPersonal" name="txtSeguridadPersonal" value="3">
                                                            3</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtSeguridadPersonal" name="txtSeguridadPersonal" value="4">
                                                            4</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtSeguridadPersonal" name="txtSeguridadPersonal" value="5">
                                                            5</div>

                                                        <div class="form-check col-md-7"><label>g. Facilidad de palabra</label></div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtFacilidadPalabra" name="txtFacilidadPalabra" value="1">
                                                            1</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtFacilidadPalabra" name="txtFacilidadPalabra" value="2">
                                                            2</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtFacilidadPalabra" name="txtFacilidadPalabra" value="3">
                                                            3</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtFacilidadPalabra" name="txtFacilidadPalabra" value="4">
                                                            4</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtFacilidadPalabra" name="txtFacilidadPalabra" value="5">
                                                            5</div>

                                                        <div class="form-check col-md-7"><label>h. Gestión de Proyectos</label></div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtGestionProyectos" name="txtGestionProyectos" value="1">
                                                            1</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtGestionProyectos" name="txtGestionProyectos" value="2">
                                                            2</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtGestionProyectos" name="txtGestionProyectos" value="3">
                                                            3</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtGestionProyectos" name="txtGestionProyectos" value="4">
                                                            4</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtGestionProyectos" name="txtGestionProyectos" value="5">
                                                            5</div>

                                                        <div class="form-check col-md-7"><label>i. Puntualidad y Asistencia</label></div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtPuntualidadAsistencia" name="txtPuntualidadAsistencia" value="1">
                                                            1</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtPuntualidadAsistencia" name="txtPuntualidadAsistencia" value="2">
                                                            2</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtPuntualidadAsistencia" name="txtPuntualidadAsistencia" value="3">
                                                            3</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtPuntualidadAsistencia" name="txtPuntualidadAsistencia" value="4">
                                                            4</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtPuntualidadAsistencia" name="txtPuntualidadAsistencia" value="5">
                                                            5</div>

                                                        <div class="form-check col-md-7"><label>j. Cumplimiento de las normas</label></div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCumplimientoNormas" name="txtCumplimientoNormas" value="1">
                                                            1</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCumplimientoNormas" name="txtCumplimientoNormas" value="2">
                                                            2</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCumplimientoNormas" name="txtCumplimientoNormas" value="3">
                                                            3</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCumplimientoNormas" name="txtCumplimientoNormas" value="4">
                                                            4</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCumplimientoNormas" name="txtCumplimientoNormas" value="5">
                                                            5</div>

                                                        <div class="form-check col-md-7"><label>k. Integración al trabajo</label></div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtIntegracionTrabajo" name="txtIntegracionTrabajo" value="1">
                                                            1</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtIntegracionTrabajo" name="txtIntegracionTrabajo" value="2">
                                                            2</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtIntegracionTrabajo" name="txtIntegracionTrabajo" value="3">
                                                            3</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtIntegracionTrabajo" name="txtIntegracionTrabajo" value="4">
                                                            4</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtIntegracionTrabajo" name="txtIntegracionTrabajo" value="5">
                                                            5</div>

                                                        <div class="form-check col-md-7"><label>l. Creatividad e innovación</label></div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCreatividadInnovacion" name="txtCreatividadInnovacion" value="1">
                                                            1</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCreatividadInnovacion" name="txtCreatividadInnovacion" value="2">
                                                            2</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCreatividadInnovacion" name="txtCreatividadInnovacion" value="3">
                                                            3</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCreatividadInnovacion" name="txtCreatividadInnovacion" value="4">
                                                            4</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCreatividadInnovacion" name="txtCreatividadInnovacion" value="5">
                                                            5</div>

                                                        <div class="form-check col-md-7"><label>m. Capecidad de negociación</label></div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCapacidadNegociar" name="txtCapacidadNegociar" value="1">
                                                            1</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCapacidadNegociar" name="txtCapacidadNegociar" value="2">
                                                            2</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCapacidadNegociar" name="txtCapacidadNegociar" value="3">
                                                            3</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCapacidadNegociar" name="txtCapacidadNegociar" value="4">
                                                            4</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCapacidadNegociar" name="txtCapacidadNegociar" value="5">
                                                            5</div>

                                                        <div class="form-check col-md-7"><label>n. Capacidad de abstracción, análisis y sintesis</label></div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCapacidadAbstraccion" name="txtCapacidadAbstraccion" value="1">
                                                            1</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCapacidadAbstraccion" name="txtCapacidadAbstraccion" value="2">
                                                            2</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCapacidadAbstraccion" name="txtCapacidadAbstraccion" value="3">
                                                            3</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCapacidadAbstraccion" name="txtCapacidadAbstraccion" value="4">
                                                            4</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtCapacidadAbstraccion" name="txtCapacidadAbstraccion" value="5">
                                                            5</div>

                                                        <div class="form-check col-md-7"><label>o. Liderazgo y toma de decisiones</label></div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtLiderazgoTDecisiones" name="txtLiderazgoTDecisiones" value="1">
                                                            1</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtLiderazgoTDecisiones" name="txtLiderazgoTDecisiones" value="2">
                                                            2</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtLiderazgoTDecisiones" name="txtLiderazgoTDecisiones" value="3">
                                                            3</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtLiderazgoTDecisiones" name="txtLiderazgoTDecisiones" value="4">
                                                            4</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtLiderazgoTDecisiones" name="txtLiderazgoTDecisiones" value="5">
                                                            5</div>


                                                        <div class="form-check col-md-7"><label>p. Adaptación al cambio</label></div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtAdaptacionCambio" name="txtAdaptacionCambio" value="1">
                                                            1</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtAdaptacionCambio" name="txtAdaptacionCambio" value="2">
                                                            2</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtAdaptacionCambio" name="txtAdaptacionCambio" value="3">
                                                            3</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtAdaptacionCambio" name="txtAdaptacionCambio" value="4">
                                                            4</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtAdaptacionCambio" name="txtAdaptacionCambio" value="5">
                                                            5</div>


                                                        <div class="form-check col-md-7"><label>q. Otrss, especifique: </label><label> </label><input type="text" class="form-check-input" id="txtOtraCapacidad" name="txtOtraCapacidad"></div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtOtraCapacidadLaboral" name="txtOtraCapacidadLaboral" value="1">
                                                            1</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtOtraCapacidadLaboral" name="txtOtraCapacidadLaboral" value="2">
                                                            2</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtOtraCapacidadLaboral" name="txtOtraCapacidadLaboral" value="3">
                                                            3</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtOtraCapacidadLaboral" name="txtOtraCapacidadLaboral" value="4">
                                                            4</div>
                                                        <div class="form-check col-md-1">
                                                            <input type="radio" class="form-check-input" id="txtOtraCapacidadLaboral" name="txtOtraCapacidadLaboral" value="5">
                                                            5</div>
                                                    </div>
                                                </div><!--Fin de la Decima linta sección-->

                                                <div class="row xs-pt-15"><!--Inicio de la Onceaba linta sección-->

                                                    <div class="form-check col-md-12">
                                                        <h3>11. Con base al desempeño laboral así como a las actividades laborales que realiza el egresado ¿Cómo considera
                                                            su desempeño laboral respecto a su formación academica? Del total de egresados anote el porcentaje que corresponde</h3>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtDesempenoLaboral" name="txtDesempenoLaboral" value="Excelente">
                                                                a. Excelente
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtDesempenoLaboral" name="txtDesempenoLaboral" value="Muy bueno">
                                                                b. Muy bueno
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-3">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtDesempenoLaboral" name="txtDesempenoLaboral" value="Bueno">
                                                                c. Bueno
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-2">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtDesempeñoLaboral" name="txtDesempeñoLaboral" value="Regular">
                                                                d. Regular
                                                            </label>
                                                        </div>

                                                        <div class="form-check col-md-1">
                                                            <label class="form-check-label"><br>
                                                                <input type="radio" class="form-check-input" id="txtDesempenoLaboral" name="txtDesempenoLaboral" value="Malo">
                                                                e. Malo
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div><!--Fin de la Onceaba linta sección-->

                                                <div class="row xs-pt-15"><!--Inicio de la Doceaba linta sección-->
                                                    <div class="form-check col-md-12">
                                                        <h3>12. De acuaerdo con las necesidades de su empresa u organismo. ¿qué sugiere para mejorar la formación de los egresados del Instituto Tecnológico?</h3>
                                                        <div class="form-group col-md-12">
                                                            <input type="text" class="form-control" id="txtSugerensiaFormacionEgresados" name="txtSugerensiaFormacionEgresados" required>
                                                        </div>
                                                    </div>
                                                </div><!--Fin de la Doceaba linta sección-->

                                                <div class="row xs-pt-15"><!--Inicio de la treceaba linta sección-->
                                                    <div class="form-check col-md-12">
                                                        <h3>13. Comentarios y sugerencias:</h3>
                                                        <div class="form-group col-md-12">
                                                            <input type="text" class="form-control" id="txtComentariosSuegerencias" name="txtComentariosSuegerencias" required>
                                                        </div>
                                                    </div>
                                                </div><!--Fin de la treceaba linta sección-->
                                                <br>

                                                <h4><center>GRACIAS POR SU AMABLE COLABORACIÓN</center><br>LO INVITAMOS CORDIALMENTE A CONTINUAR PARTICIPANDO CON EL INSTITUTO TECNOLÓGICO, APORTENDO SUS OPINIONES Y/O SUGERENCIAS EN EL MOMENTO QUE USTED LO
                                                    CONSIDERE OPORTUNO A TRAVES DEL RESPONSABLE DEL SEGUIMIENTO DE EGRESADOS.</h4>


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
                                            </form><!--Fin del formilario -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div></div></div>

            <div class="be-content">
                <div class="main-content container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default panel-border-color panel-border-color-primary">
                                <div class="panel-heading panel-heading-divider">
                                    <div id="imagen">
                                        <img src="objetos/foto1.jpg" id="a" width="100%">
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
        $(document).ready(function () {
            //initialize the javascript
            App.init();
            App.dashboard();

        });
        </script>
    </body>

    <!-- Mirrored from foxythemes.net/preview/products/beagle2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jun 2017 21:44:32 GMT -->
</html>