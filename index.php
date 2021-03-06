<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>phppaper by Piethein Strengholt</title>
    <script src="javascripts/jquery.min.js"></script>
    <script src="javascripts/jquery.color.js"></script>
    <script src="javascripts/jquery.mCustomScrollbar.concat.min.js"></script>
    <link rel="stylesheet" href="stylesheets/styles.css">
    <link rel="stylesheet" href="stylesheets/jquery.mCustomScrollbar.css">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>
     (function($){
        $(window).load(function(){
           $("feedbar").mCustomScrollbar();
        });
     })(jQuery);

    </script>

  </head>

  <body>

      <top-nav>
          <?php include 'top-nav.php'; ?>
      </top-nav>

      <div id="nav-bar-shadow"></div>

      <div class="wrapper">

        <feedbar>
          <?php include 'feedbar.php'; ?>
        </feedbar>

        <section>
          <?php 

	    if ($_GET[view] == "list") {
		include 'list-view.php'; 
	    } else {
		include 'detailed-view.php';
	    }

	  ?>

        </section>

     </div>
  </body>

</html>
