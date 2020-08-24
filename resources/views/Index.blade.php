<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <link rel="icon" type="image/png" href="/img/favicon.ico">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <title>Icfes DashBoard</title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
      <meta name="viewport" content="width=device-width" />
      <!-- Bootstrap core CSS     -->
      <link href="/css/bootstrap.min.css" rel="stylesheet" />
      <link href="/css/chartist-plugin-tooltip.css" rel="stylesheet" />
      <!-- Animation library for notifications   -->
      <link href="/css/animate.min.css" rel="stylesheet"/>
      <!--  Light Bootstrap Table core CSS    -->
      <link href="/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
      <!--  CSS for Demo Purpose, don't include it in your project     -->
      <link href="/css/demo.css" rel="stylesheet" />
      <!--     Fonts and icons     -->
      <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
      <link href="/css/pe-icon-7-stroke.css" rel="stylesheet" />
   </head>
   <body>
      <div class="wrapper">
         <div class="sidebar" data-color="blue" data-image="/img/sidebar-5.jpg">
            <!--
               Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
               Tip 2: you can also add an image using data-image tag

               -->
            <div class="sidebar-wrapper">
               <div class="logo">
                  <a href="http://www.creative-tim.com" class="simple-text">
                  icfes DashBoard
                  </a>
               </div>
               <ul class="nav">
                  <li class="active">
                     <a href="/index">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                     </a>
                  </li>
                  <li class="">
                     <a href="/ruta2">
                        <i class="pe-7s-smile"></i>
                        <p>Pag prubas</p>
                     </a>
                  </li>
                  <li class="active-pro">
                     <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>administración</p>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
               <div class="container-fluid">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                     <a class="navbar-brand">Dashboard</a>
                  </div>
                  <div class="collapse navbar-collapse">
                     <ul class="nav navbar-nav navbar-left">
                        <li>
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-dashboard"></i>
                              <p class="hidden-lg hidden-md">Dashboard</p>
                           </a>
                        </li>
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-globe"></i>
                              <b class="caret hidden-lg hidden-md"></b>
                              <p class="hidden-lg hidden-md">
                                 5 Notifications
                                 <b class="caret"></b>
                              </p>
                           </a>
                           <ul class="dropdown-menu">
                              <li><a href="#">Notificación 1</a></li>
                           </ul>
                        </li>
                        <li>
                           <a >
                              <i class="fa fa-search"></i>
                              <p class="hidden-lg hidden-md">Search</p>
                           </a>
                        </li>
                     </ul>
                     <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <p>
                                 Menu
                                 <b class="caret"></b>
                              </p>
                           </a>
                           <ul class="dropdown-menu">
                              <li><a href="#">link 1</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Link 2</a></li>
                           </ul>
                        </li>
                        <li class="separator hidden-lg"></li>
                     </ul>
                  </div>
               </div>
            </nav>
            <div class="content">
               <div class="container-fluid">
                  <div class="row">

                     <div class="col-md-12 ">
                        <div class="card">
                           <div class="content"></div>
                           <div class="row">
                            <div class="content col-md-offset-1 col-md-2 ">
                                <select class="browser-default custom-select" onchange="cargarDatos()" id="moduloGenerico">
                                   <option value="competenciaCiudadana" selected>Cargando...</option>
                                </select>
                             </div>
                             <div class="content col-md-2">
                                <select class="browser-default custom-select" onchange="SelectUniversidades()" id="universidades">
                                   <option value="competenciaCiudadana" selected>Cargando...</option>
                                </select>
                             </div>
                             <div class="content col-md-2 ">
                                <select class="browser-default custom-select" onchange="cargarDatos()" id="moduloGenerico">
                                   <option value="competenciaCiudadana" selected>Cargando...</option>
                                </select>
                             </div>
                              <div class="custom-control custom-radio col-md-2  ">
                                 <div>
                                    <label class="custom-control-label" for="barras">  Filtro Año   </label>
                                 </div>
                                 <input type="checkbox" class = "date" value="2016" onclick="modifyDate();"> 2016<br>
                                 <input type="checkbox" class = "date" value="2017" onclick="modifyDate();"> 2017<br>
                                 <input type="checkbox" class = "date" value="2018" onclick="modifyDate();"> 2018<br>
                                 <input type="checkbox" class = "date" value="2019" onclick="modifyDate();"> 2019<br>
                              </div>

                              <div class="custom-control custom-radio  col-md-2  ">
                                 <input type="radio" class="custom-control-input" id="barras" name="TipoGrafica">
                                 <label class="custom-control-label" for="barras">Grafica de barras</label>
                              </div>
                              <div class="custom-control custom-radio col-md-2">
                                 <input type="radio" class="custom-control-input" id="linear" name="TipoGrafica" checked>
                                 <label class="custom-control-label" for="linear">Grafica linear</label>
                              </div>
                              <div class="custom-control custom-radio col-md-2">
                                 <input type="radio" class="custom-control-input" id="pastel" name="TipoGrafica">
                                 <label class="custom-control-label" for="pastel">Grafica de pastel</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 ">
                     <div class="card">
                        <div class="header">
                           <h4 class="title" style="font-family: sans-serif;text-align: center;">Modulos Genericos</h4>
                           <p class="category">..</p>
                        </div>
                        <div class="content">
                           <div id="PosicionUniversidades" class="ct-chart"></div>
                           <div class="footer">
                              <div class="legend">
                              </div>
                              <hr>
                              <div class="stats">
                                 <i class="fa fa-history"></i> Pie de pagina
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <footer class="footer">
               <div class="container-fluid">
                  <nav class="pull-left">
                     <ul>
                        <li>
                           <a href="#">
                           Inicio
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           Proyecto Integrador
                           </a>
                        </li>
                     </ul>
                  </nav>
                  <p class="copyright pull-right">
                     &copy; <script>document.write(new Date().getFullYear())</script> <a href=""> Integrator project</a>, made with love for a better web
                  </p>
               </div>
            </footer>
         </div>
      </div>
   </body>
   <!--   Core JS Files   -->
   <script src="/js/jquery.3.2.1.min.js" type="text/javascript"></script>
   <script src="/js/bootstrap.min.js" type="text/javascript"></script>
   <!--  Charts Plugin -->
   <script src="/js/chartist.min.js"></script>
   <script src="/js/plugins/chartist-plugin-tooltip.js"></script>
   <!--  Notifications Plugin    -->
   <script src="/js/bootstrap-notify.js"></script>
   <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
   <script src="/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
   <!-- Js functions -->
   <script src="/js/graficar.js"></script>
   <script src="/js/funciones.js"></script>
   <script src="/js/queryController.js"></script>
</html>
