<script type="text/javascript" src="js/plugin/slider-master/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/plugin/slider-master/jssor.js"></script>
<script type="text/javascript" src="js/plugin/slider-master/jssor.slider.js"></script>







    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 3,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 160,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 200,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 150,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 3,                                   //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 4,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 4                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 809));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>










    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 100%; height: 150px; overflow: hidden;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 100%; height: 150px; overflow: hidden;">
        <!--
            <div><img u="image" src="../img/ancient-lady/005.jpg" ondblclick="producto(2);"/></div>
            <div><img u="image" src="../img/ancient-lady/006.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/011.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/013.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/014.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/019.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/020.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/021.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/022.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/024.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/025.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/027.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/029.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/030.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/031.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/032.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/034.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/038.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/039.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/043.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/044.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/047.jpg" /></div>
            <div><img u="image" src="../img/ancient-lady/050.jpg" /></div>
-->

  @if($productos)   
    @foreach($productos as $producto)
       <div>
            <img u="image" src="{{ 'imagenes/'.$producto->imagen}}" ondblclick="myFunction({{$producto->id}},'{{$producto->nombre}}','{{$producto->precio_venta}}')"/>
            <center>sss</center>
       </div>
    @endforeach
  @endif


        </div>







        
        <!-- Bullet Navigator Skin Begin -->
        <style>
            /* jssor slider bullet navigator skin 03 css */
            /*
            .jssorb03 div           (normal)
            .jssorb03 div:hover     (normal mouseover)
            .jssorb03 .av           (active)
            .jssorb03 .av:hover     (active mouseover)
            .jssorb03 .dn           (mousedown)
            */
            .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av
            {
                background: url(../img/b03.png) no-repeat;
                overflow:hidden;
                cursor: pointer;
            }
            .jssorb03 div { background-position: -5px -4px; }
            .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
            .jssorb03 .av { background-position: -65px -4px; }
            .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
        </style>









<!--
        <div u="navigator" class="jssorb03" style="position: absolute; bottom: 4px; right: 6px;">
            <div u="prototype" style="position: absolute; width: 21px; height: 21px; text-align:center; line-height:21px; color:white; font-size:12px;"><div u="numbertemplate"></div></div>
        </div>
-->
        





        <!-- Arrow Navigator Skin Begin -->
        <style>
            /* jssor slider arrow navigator skin 03 css */
            /*
            .jssora03l              (normal)
            .jssora03r              (normal)
            .jssora03l:hover        (normal mouseover)
            .jssora03r:hover        (normal mouseover)
            .jssora03ldn            (mousedown)
            .jssora03rdn            (mousedown)
            */
            .jssora03l, .jssora03r, .jssora03ldn, .jssora03rdn
            {
                position: absolute;
                cursor: pointer;
                display: block;
                background: url(../img/a03.png) no-repeat;
                overflow:hidden;
            }
            .jssora03l { background-position: -3px -33px; }
            .jssora03r { background-position: -63px -33px; }
            .jssora03l:hover { background-position: -123px -33px; }
            .jssora03r:hover { background-position: -183px -33px; }
            .jssora03ldn { background-position: -243px -33px; }
            .jssora03rdn { background-position: -303px -33px; }
        </style>





        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora03l" style="width: 35px; height: 55px; top: 50px; left: 8px;">
        </span>


        <!-- Arrow Right -->
        <span u="arrowright" class="jssora03r" style="width: 35px; height: 55px; top: 50px; right: 8px">
        </span>




    </div>