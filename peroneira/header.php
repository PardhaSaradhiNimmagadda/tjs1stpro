
        <!-- Bootstrap -->
    	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" type="text/css" media="screen" />
        <!-- Supersized -->
        <link rel="stylesheet" href="css/supersized/supersized.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/supersized/supersized.shutter.css" type="text/css" media="screen" />
        <!-- Animate -->
        <link rel="stylesheet" href="css/animate/animate.css" type="text/css" media="screen" />
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css" type="text/css" media="screen" />
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="css/owlcarousel/owl.carousel.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/owlcarousel/owl.theme.css" type="text/css" media="screen" />
        <!-- Font -->
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
        <!-- Theme CSS -->
    	<link href="css/style.css" rel="stylesheet" media="screen">
        <!-- Skin CSS - Create alternate theme color. Just remove the comment tag from the css below -->
    	<!-- <link href="css/skin/pink.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/skin/purple.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/skin/brown.css" rel="stylesheet" media="screen"> -->
        
        <!--[if IE 9]>
        <style>
			#footer_text{
				margin-bottom: -20px; /*for fixing ie bug */		
			}
        </style>    
		<![endif]-->
        	<script src="js/jquery-1.9.1.js"></script>
        <script>
        $(window).scroll(function(e) {
			
			 
			 $("#nav").hide();
			
			 if($(this).scrollTop()>600 ){
				
				 $("#nav").show();
			 }else{
			 $("#nav").hide();
			 }
          
        });
        
        </script>
                	 <?php
include "admin/database/Insert.php";
include "admin/database/update.php";
 ?>
<section id="home">
			<div id="logo_wrapper" class="container">
				<div class="row">
					<div class="col-md-1">
                    	<!--<a id="logo_link" href="index.html">
                    		<span id="logo" class="animation">
                       		<img src="images/vsp-logo.png" width="100%">
                            </span>
                        </a>-->
                    </div>
				</div>
            </div>
            <div class="container">
            	<div id="slide_content" class="row" align="center">
                <div id="slide_text" style="position:relative;top:0px;left:0px;z-index:2000;opacity:0.95;"><img src="images/index.png" width="100%"  >
               
              <div><ul class="peronera_menu" id="nav_list_peroneira" >
        					
                                <li class="aboutus"><a href="index.php#aboutvsp">About Us</a></li>	
                                <li class="projects"><a href="index.php#Projects">projects</a></li>
                                <!--<li class="quality"><a href="#quality">quality</a></li>-->
                                <li class="services"><a href="index.php#Services">services</a></li>
                                <li class="gallery"><a href="index.php#gallery">gallery</a></li>
                            <!--    <li class="clientele"><a href="#clientele">clientele</a></li>-->
                                <li class="contact"><a href="index.php#contact">contact</a></li>
     						</ul></div>  
                            
                 <!-- usemap="#Map"<map name="Map" id="nav_list_peroneira" class="nav navbar-nav navbar-right">
                    <area shape="rect" coords="203,214,265,236" href="#contact">
                    <area shape="rect" coords="130,270,197,292" href="#aboutvsp">
                    <area shape="rect" coords="499,90,563,124" href="#Services">
                    <area shape="rect" coords="674,293,746,318" href="#Projects">
                    <area shape="rect" coords="929,192,995,213" href="#gallery">
                  </map>-->
                </div>
                	<div class="col-md-4 pull-right text-right">
                    	
						<!--<div id="slide_text">
                            <span id="slide_text1">VSP</span><br>
                            <span id="slide_text2">SPINNING</span><br>
                            <span id="slide_text3" >MILLS</span><br>
                            
						</div>-->
                       
                  </div>
                </div>
            </div>
            <header>
            	<nav id="nav" class="navbar navbar-default" role="navigation" per="menuPer">
  					<div class="container">
    					<!-- Brand and toggle get grouped for better mobile display -->
    					<!--<div class="navbar-header">
      						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav_menu">
        						<span class="sr-only">Toggle navigation</span>
        						<span class="icon-bar"></span>
        						<span class="icon-bar"></span>
        						<span class="icon-bar"></span>
     						</button>
   						</div>-->

    					<!-- Collect the nav links, forms, and other content for toggling -->
                        
   			<div class="collapse navbar-collapse" id="nav_menu">
     		<ul id="nav_list" class="nav navbar-nav navbar-right">
        						
                  <li id="aboutus" style="background:url(images/menu%20tiles/about.png) no-repeat top left; background-size:contain;"><a style="display:block;height:85px;width:85px;" href="index.php#aboutvsp"></a></li>	
                
                                <li class="active" style="background:url(images/menu%20tiles/project_03.png) no-repeat top left; background-size:contain;"><a style="display:block;height:85px;width:85px;"  href="index.php#Projects"></a></li>
                              
                                <li style="background:url(images/menu%20tiles/services_11.png) no-repeat top left; background-size:contain;"><a style="display:block;height:85px;width:85px;" href="index.php#Services"></a></li>
                                <li style="background:url(images/menu%20tiles/gallery_06.png) no-repeat top left; background-size:contain;"><a style="display:block;height:85px;width:85px;" href="index.php#gallery"></a></li>
                              
                                <li  style="background:url(images/menu%20tiles/contact_03.png) no-repeat top left; background-size:contain;"><a style="display:block;height:85px;width:85px;" href="index.php#contact"></a></li>
     						</ul>
   						</div><!-- /.navbar-collapse -->
  					</div><!-- /.container -->
				</nav>
            </header>
        </section>