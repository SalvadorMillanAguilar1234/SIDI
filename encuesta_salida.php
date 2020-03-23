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
                <div class="panel-heading panel-heading-divider">Encustas de salidas</div>
                <div class="panel-body">
                  <form id="encuestaSalida" method="post" action="?operacion=<?php echo $elementos->idEcuesta > 0 ? 'actualizar' : 'registrar'; ?>">
                      <input type="hidden" name="idEcuesta" value="<?php echo $elementos->__GET('idEcuesta'); ?>" />
                    <div class="form-group">
                      <label>Nombre(s):</label>
                      <input type="text" id="txtNombre" name="txtNombre"  class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>No.Control:</label>
                      <input type="text" id="txtNC" name="txtNC"  class="form-control" required>
                    </div>
                      <div class="form-group">
                      <label>Carrera:</label>
                      <input type="text" id="txtCarrera" name="txtCarrera" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Año de egreso:</label>
                      <input type="text" id="txtADE" name="txtADE" class="form-control" required>
                    </div>
                      <div class="row xs-pt-15">
                      <div class="form-group col-md-6">
                      <label>Titulado:</label>
                      <input type="text" id="txtTitulado" name="txtTitulado" placeholder="Si o No" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Año de titulación:</label>
                      <input type="text" id="txtADT" name="txtADT" class="form-control">
                    </div>
                          </div>
                      <div class="form-group">
                      <label>Opción de Titulación:</label>
                      <input type="text" id="txtODT" name="txtODT" class="form-control" required>
                    </div>
                    <div class="row xs-pt-15">
                    <div class="form-group col-md-2">
                      <label>Tu interés es:</label>
                    </div>
                        <div class="form-group col-md-5">
                      <label>Laborar:</label>
                      <input type="text" id="txtLabora" name="txtLabora" placeholder="Si o No"  class="form-control" required>
                    </div>
                        
                    <div class="form-group col-md-5">
                      <label>Estudiar Posgrado:</label>
                      <input type="text" id="txtEstudiarP" name="txtEstudiarP" placeholder="Si o No" class="form-control" required>
                    </div>
                      </div>
                       <div class="form-group">
                      <label>Área de interés en el posgrado:</label>
                      <input type="text" id="txtADIP" name="txtADIP" class="form-control">
                    </div>
                      <div class="form-group">
                      <label>Correo Electrónico:</label>
                      <input type="email" id="txtE-mail" name="txtE-mail" placeholder="nombre@hotmail.com" class="form-control" required>
                    </div>
                      <div class="form-group">
                      <label>Teléfomo particular:</label>
                      <input type="tel" id="txtTelefonoP" name="txtTelefonoP" class="form-control" required>
                    </div>
                      <div class="form-group">
                      <label>Teléfomo Celular:</label>
                      <input type="tel" id="txtTelefonoC" name="txtTelefonoC" class="form-control" required>
                    </div>
                            <div class="row xs-pt-15">   
                        <div class="form-check col-md-2">
                            <label>¿Actualmente Trabaja? </label></div>
                                <div class="form-check col-md-1">
                            <label class="form-check-label"><br>
                                <input type="radio" class="form-check-input" id="txtAT" name="txtAT" value="Si">
                                SI
                            </label>
                        </div>
                        <div class="form-check col-md-3">
                            <label class="form-check-label"><br>
                                    <input type="radio" class="form-check-input" id="txtAT" name="txtAT" value="No">
                                NO
                            </label>
                                </div>
                    <div class="form-group col-md-6">
                      <label>Empresa:</label>
                      <input type="text" id="txtEmpresa" name="txtEmpresa"  class="form-control">
                    </div>
                            </div>
                      <div class="row xs-pt-15">
                        <div class="form-group col-md-6">
                      <label>Puesto:</label>
                      <input type="text" id="txtPuesto" name="txtPuesto" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Tels:</label>
                      <input type="text" id="txtTels" name="txtTels" class="form-control">
                    </div>
                      </div>
                      <div class="form-group">
                      <label>Empresa donde realizaste tu servicio social:</label>
                      <input type="text" id="txtEDRTSS" name="txtEDRTSS" class="form-control" required>
                    </div>
                      <div class="form-group">
                      <label>Empresa donde realizaste tu residencia profecional:</label>
                      <input type="text" id="txtEDRTRP" name="txtEDRTRP" class="form-control" required>
                    </div>
                      <div class="form-group">
                      <CENTER><label>Cómo evalúas los siguientes servicios del ITSC, marcando 1(EXCELENTE), 2(MUY BUENO), 3(BUENO), 4(REGULAR) Y 5(MALO).</label></CENTER>
                    </div>
                      <div class="row xs-pt-15">
                        <div class="form-group col-xs-11">
                            <label>A) Idioma Inglés.</label></div>
                          <div class="form-group col-xs-1">
                              <input type="text" id="txtIdiomaI" name="txtIdiomaI" placeholder="1 al 5" class="form-control" required>
                    </div>
                      </div>
                      <div class="row xs-pt-15">
                        <div class="form-group col-xs-11">
                            <label>B) Experiencia en el Servicio social.</label></div>
                          <div class="form-group col-xs-1">
                              <input type="text" id="txtES" name="txtES" placeholder="1 al 5" class="form-control" required>
                    </div>
                      </div>
                      <div class="row xs-pt-15">
                        <div class="form-group col-xs-11">
                            <label>C) Experiencia en las Residencias profecionales.</label></div>
                          <div class="form-group col-xs-1">
                              <input type="text" id="txtER" name="txtER" placeholder="1 al 5" class="form-control" required>
                    </div>
                      </div>
                       <div class="row xs-pt-15">
                        <div class="form-group col-xs-11">
                            <label>D) Actividades extaescolares.</label></div>
                          <div class="form-group col-xs-1">
                              <input type="text" id="txtActividadesE" name="txtActividadesE" placeholder="1 al 5" class="form-control" required>
                    </div>
                      </div>
                       <div class="row xs-pt-15">
                        <div class="form-group col-xs-11">
                            <label>E) Trámites escolares.</label></div>
                          <div class="form-group col-xs-1">
                              <input type="text" id="txtTramitesE" name="txtTramitesE" placeholder="1 al 5" class="form-control" required>
                    </div>
                      </div>
                       <div class="row xs-pt-15">
                        <div class="form-group col-xs-11">
                            <label>F) Trámites de titulación.</label></div>
                          <div class="form-group col-xs-1">
                              <input type="text" id="txtTramitesT" name="txtTramitesT" placeholder="1 al 5" class="form-control" required>
                    </div>
                      </div>
                       <div class="row xs-pt-15">
                        <div class="form-group col-xs-11">
                            <label>G) Instalaciones.</label></div>
                          <div class="form-group col-xs-1">
                              <input type="text" id="txtInstalaciones" name="txtInstalaciones" placeholder="1 al 5" class="form-control" required>
                    </div>
                      </div>
                       <div class="row xs-pt-15">
                        <div class="form-group col-xs-11">
                            <label>H) Laboratorios.</label></div>
                          <div class="form-group col-xs-1">
                              <input type="text" id="txtLaboratorios" name="txtLaboratorios" placeholder="1 al 5" class="form-control" required>
                    </div>
                      </div>
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