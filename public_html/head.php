<?php $headtext = '
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> EUROSOI-ULIS 2017 </title>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/mobile.css" rel="stylesheet">
  <link href="css/responsive-menu.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="images/favicon.ico">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="js/responsive-menu.js"></script>
  <script src="http://cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js"></script>

  
  <!-- Setup Responsive Menu -->
    <script>
        jQuery(function ($) {
            var menu = $(".rm-nav").rMenu({

                // Optional Settings

                /**
                 * Minimum width for expanded layout in pixels - String
                 * The media query in css file should be changed to match this
                 * Must be in pixels and include px units if not using Modernizr.
                 * @default "769px"
                 */
                minWidth: "769px",

                /**
                 * The opening and closing speed of the menus in milliseconds
                 * @default 400
                 */
                //transitionSpeed: 400,

                /**
                 * The jQuery easing function - used with jQuery transitions
                 * @default "swing"
                 * @options "swing", "linear"
                 */
                //jqueryEasing: "swing",

                /**
                 * The CSS3 transitions easing function - used with CSS3 transitions
                 * @default "ease"
                 */
                //css3Easing: "ease",

                /**
                 * Use button as toggle link - instead of text
                 * @default true
                 */
                //toggleBtnBool: true,

                /**
                 * The Toggle Link selector
                 * @default ".rm-toggle"
                 */
                //toggleSel: ".rm-toggle",


                /**
                 * The menu/sub-menu selector
                 * @default "ul"
                 */
                //menuSel: "ul",

                /**
                 * The menu items selector
                 * @default "li"
                 */
                //menuItemsSel: "li",

                /**
                 * Use CSS3 animation/transitions Boolean
                 * @default true
                 * Do not use animation/transitions: false
                 */
                //animateBool: false,

                /**
                 * Force GPU Acceleration Boolean
                 * @default false
                 * Do not force: false
                 */
                //accelerateBool: true,

                /**
                 * the setup complete callback function
                 * @default "false"
                 */
                //setupCallback: false,

                /**
                 * the tabindex start value - integer
                 * @default 1
                 */
                //tabindexStart: 5,

                /**
                 * Use development mode - outputs information to console
                 * @default false
                 */
                //developmentMode: false

            });
        });
    </script>
</head>';

echo $headtext;?>