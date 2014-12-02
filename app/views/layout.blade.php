<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema de administracion de comercios en la nube</title>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="css/ionicons.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/app.css" />
     <link rel="stylesheet" href="css/rev.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>
  <header>
    <div class="contain-to-grid sticky">
        <nav class="top-bar" data-topbar role="navigation">
              <ul class="title-area">
                <li class="name">
                  <h1><a href="#">Tiena APP LOGO</a></h1>
                </li>
                 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
              </ul>

              <section class="top-bar-section">
                <!-- Right Nav Section -->
                <ul class="right">
                  <li class="has-dropdown">
                    <a href="#">Mi tienda</a>
                    <ul class="dropdown">
                      <li><a href="#">Usuarios</a></li>
                      <li><a href="#">Configuración</a></li>
                      <li class="active"><a href="#"> <i class="icon ion-loading-a"></i> Cerrar Sesion</a></li>
                    </ul>
                  </li>
                </ul>

                <!-- Left Nav Section -->
                <ul class="left">
                  <li class="active"><a href="#">Inicio</a></li>
                  <li><a href="#">Proveedores</a></li>
                  <li><a href="#">Clientes</a></li>
                  <li><a href="#">Compras</a></li>
                  <li><a href="#">Ventas</a></li>
                   <li class="has-dropdown">
                    <a href="#">Productos</a>
                    <ul class="dropdown">
                      <li><a href="#">Productos</a></li>
                      <li><a href="#">Insumos</a></li>
                    </ul>
                  </li>
                </ul>
              </section>
       </nav>
    </div>
  </header>
    <div class="row">
      <div class="large-12 columns">
        <h1>Welcome to Foundation</h1>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <div class="panel">
              @yield('content')
        </div>
      </div>
    </div>

    <div class="row">
      <div class="large-8 medium-8 columns">
        <h5>Here&rsquo;s your basic grid:</h5>
        <!-- Grid Example -->

        <div class="row">
          <div class="large-12 columns">
            <div class="callout panel">
              <p><strong>This is a twelve column section in a row.</strong> Each of these includes a div.panel element so you can see where the columns are - it's not required at all for the grid.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="large-6 medium-6 columns">
            <div class="callout panel">
              <p>Six columns</p>
            </div>
          </div>
          <div class="large-6 medium-6 columns">
            <div class="callout panel">
              <p>Six columns</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <p>Four columns</p>
            </div>
          </div>
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <p>Four columns</p>
            </div>
          </div>
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <p>Four columns</p>
            </div>
          </div>
        </div>

        <hr />

        <h5>We bet you&rsquo;ll need a form somewhere:</h5>
        <form>
          <div class="row">
            <div class="large-12 columns">
              <label>Input Label</label>
              <input type="text" placeholder="large-12.columns" />
            </div>
          </div>
          <div class="row">
            <div class="large-4 medium-4 columns">
              <label>Input Label</label>
              <input type="text" placeholder="large-4.columns" />
            </div>
            <div class="large-4 medium-4 columns">
              <label>Input Label</label>
              <input type="text" placeholder="large-4.columns" />
            </div>
            <div class="large-4 medium-4 columns">
              <div class="row collapse">
                <label>Input Label</label>
                <div class="small-9 columns">
                  <input type="text" placeholder="small-9.columns" />
                </div>
                <div class="small-3 columns">
                  <span class="postfix">.com</span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Select Box</label>
              <select>
                <option value="husker">Husker</option>
                <option value="starbuck">Starbuck</option>
                <option value="hotdog">Hot Dog</option>
                <option value="apollo">Apollo</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="large-6 medium-6 columns">
              <label>Choose Your Favorite</label>
              <input type="radio" class="css-radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed" class="css-radio-label" >Radio 1</label>
              <input type="radio" class="css-radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue" class="css-radio-label" >Radio 2</label>

            </div>
            <div class="large-6 medium-6 columns">
              <label>Check these out</label>
              <input id="checkbox1" type="checkbox" class="css-checkbox"><label for="checkbox1" class="css-label">Checkbox 1</label>
              <input type="checkbox" name="checkboxG1" id="checkboxG1" class="css-checkbox" /><label for="checkboxG1" class="css-label">Option 1</label>
              <input id="checkbox2" type="checkbox" class="css-checkbox"><label for="checkbox2" class="css-label">Checkbox 2</label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Textarea Label</label>
              <textarea placeholder="small-12.columns"></textarea>
            </div>
          </div>
        </form>
      </div>

      <div class="large-4 medium-4 columns">
        <h5>Try one of these buttons:</h5>
        <p><a href="#" class="small button">Simple Button</a><br/>
        <a href="#" class="small radius button">Radius Button</a><br/>
        <a href="#" class="small round button">Round Button</a><br/>
        <a href="#" class="medium success button">Success Btn</a><br/>
        <a href="#" class="medium alert button">Alert Btn</a><br/>
        <a href="#" class="medium secondary button">Secondary Btn</a></p>
        <div class="panel">
          <h5>So many components, girl!</h5>
          <p>A whole kitchen sink of goodies comes with Foundation. Check out the docs to see them all, along with details on making them your own.</p>
          <a href="http://foundation.zurb.com/docs/" class="small button">Go to Foundation Docs</a>
        </div>
      </div>
    </div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
