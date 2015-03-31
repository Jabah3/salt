<!DOCTYPE html>
<!--<html>-->
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema de administracion de comercios en la nube</title>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="css/ionicons.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/rev.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <link rel="stylesheet" href="foundation-icons/foundation-icons.css" />


    <link rel="stylesheet" type="text/css" href="AnimatedSVGIcons/css/normalize.css" />
    <!--  
        <link rel="stylesheet" type="text/css" href="AnimatedSVGIcons/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="AnimatedSVGIcons/css/component.css" />-->
    <script src="AnimatedSVGIcons/js/snap.svg-min.js"></script>




    <style type="text/css">
      body,html{
          height:100%;
          width:100%;
      }

      .off-canvas-wrap,.inner-wrap{
          height:100%;   
      }  
      .step {
        display: inline-block;
        line-height: 1;
        width: 10%;
      }
      .size-12 { font-size: 12px; }
      
      .size-14 { font-size: 14px; }
      
      .size-16 { font-size: 16px; }
      
      .size-18 { font-size: 18px; }
      
      .size-21 { font-size: 21px; }
      
      .size-24 { font-size: 24px; }
      
      .size-36 { font-size: 36px; }
      
      .size-48 { font-size: 48px; }
      
      .size-60 { font-size: 60px; }
      
      .size-72 { font-size: 72px; }
      body{
        background: #ccc;
      }

      .si-icons span {
        display: inline-block;
        /* width: 64px;
        height: 64px;
       margin: 7px 7px;*/
        cursor: pointer;
        background-repeat: no-repeat;
        background-position: center center;
        padding: 7px;
      }

      #hamburgercross svg{
        height: 30px !important;
        width: 30px !important;
      }

    </style>
  </head>


<div class="off-canvas-wrap docs-wrap" data-offcanvas="">
  <div class="inner-wrap">



    <nav class="tab-bar">
      <section class="left-small">


<!--
        <a class="left-off-canvas-toggle menu-icon" aria-expanded="false"> <span></span>
          <section class="si-icons si-icons-default">
            <span class="si-icon si-icon-hamburger-cross" data-icon-name="hamburgerCross"></span>
          </section>  
        </a>-->


        <section class="left-off-canvas-toggle si-icons si-icons-default " aria-expanded="false">
            <span id="hamburgercross" class="si-icon si-icon-hamburger-cross" data-icon-name="hamburgerCross"></span>
          </section> 



      </section>

      <section class="middle tab-bar-section">
        <h1 class="title">-Tienda-</h1>
      </section>

      <section class="right-small">
        <!--<a class="right-off-canvas-toggle menu-icon" aria-expanded="false"><span></span></a>-->

        <section class="right-off-canvas-toggle si-icons si-icons-default " aria-expanded="false">
            <span id="hamburgercross" class="si-icon si-icon-hamburger-cross" data-icon-name="hamburgerCross"></span>
          </section> 

      </section>




    </nav>







    <aside class="left-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>Foundation</label></li>
        <li>{{ HTML::clever_link("/", 'Inicio' ) }}</li>
        <li>{{ HTML::clever_link("proveedores", 'Proveedores' ) }}</li>
        <li>{{ HTML::clever_link("clientes", 'Clientes' ) }}</li>
        <li>{{ HTML::clever_link("punto_venta", 'Punto de Venta' ) }}</li>
        <li>{{ HTML::clever_link("productos", 'Productos' ) }}</li>
        <li>{{ HTML::clever_link("roles", 'Roles' ) }}</li>
        <li>{{ HTML::clever_link("unidad_medida", 'Unidad de Medida' ) }}</li>
        <li>{{ HTML::clever_link("grupos", 'Grupos' ) }}</li>
        <li>{{ HTML::clever_link("sucursales", 'Sucursales' ) }}</li>
        <li>{{ HTML::clever_link("usuarios", 'Usuarios' ) }}</li>                     
        <li><label>Foundation and Empire</label></li>
        <li><a href="#">The General</a></li>
        <li><a href="#">The Mule</a></li>
      </ul>
    </aside>


    <aside class="right-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>Users</label></li>
        <li><a href="#">Hari Seldon</a></li>
        <li><a href="#">R. Giskard Reventlov</a></li>
        <li><a href="#">R. Daneel Olivaw</a></li>
        <li><a href="#">The Mule</a></li>
        <li><a href="#">Dors Venabili</a></li>
        <li><a href="#">Yugo Amaryl</a></li>
        <li><a href="#">The Mule</a></li>
        <li><a href="#">Emperor Cleon I</a></li>
        <li><a href="#">Gaal Dornick</a></li>
        <li><a href="#">Bel Riose</a></li>
        <li><a href="#">Salvor Hardin</a></li>
        <li><a href="#">Bel Riose</a></li>
      </ul>
    </aside>


    <section class="main-section">
      <div class="row">
        <div class="large-12 columns">

          <br>



           @yield('content')






        </div>
      </div>
    </section>

<!--
  <a class="exit-off-canvas"></a>-->

  </div>
</div>




    <script src="AnimatedSVGIcons/js/svgicons-config.js"></script>
    <script src="AnimatedSVGIcons/js/svgicons.js"></script>
    <script>
      (function() {
        // initialize all        
        [].slice.call( document.querySelectorAll( '.si-icons-default > .si-icon' ) ).forEach( function( el ) {
          var svgicon = new svgIcon( el, svgIconConfig );
        } );
        new svgIcon( document.querySelector( '.si-icons-easing .si-icon-hamburger-cross' ), svgIconConfig, { easing : mina.elastic, speed: 600 } );
      })();
    </script>




    <script src="bower_components/modernizr/modernizr.js"></script>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script src="bower_components/foundation/js/foundation/foundation.offcanvas.js"></script>



</body>
</html>
