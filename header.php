<?php 
echo '
    
<div class="headerUp">
     
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jssor_1_slider_init = function() {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1500,$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
//              $ArrowNavigatorOptions: {
//                $Class: $JssorArrowNavigator$
//              },
//              $BulletNavigatorOptions: {
//                $Class: $JssorBulletNavigator$
//              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don\'t want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize,960);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

    

  <div class="sliderContain max">
        
        
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 960px; height: 220px; overflow: hidden; visibility: hidden;"
         >
        
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
           <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url("img/loading.gif") no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 960px; height: 220px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/ulis02.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/ulis04.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/ulis01.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/ulis03.jpg" />
            </div>
        
        </div>
<!--         Bullet Navigator 
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
             bullet navigator item prototype 
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
         Arrow Navigator 
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
    </div>-->
    <script>
        jssor_1_slider_init();
    </script>
   </div>
  </div>

';
    
?>