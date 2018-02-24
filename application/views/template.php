<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="<?php echo base_url('themes/website/images/favicon.ico');?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url('themes/website/images/favicon.ico');?>" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo base_url('themes/website/css/bootstrap.css');?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('themes/website/css/responsive.css');?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('themes/website/css/camera.css');?>" type="text/css" media="screen"> 
    <link rel="stylesheet" href="<?php echo base_url('themes/website/css/style.css');?>" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  	<script type="text/javascript" src="<?php echo base_url('themes/website/js/jquery.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('themes/website/js/jquery.easing.1.3.js');?>"></script>
  	<script type="text/javascript" src="<?php echo base_url('themes/website/js/camera.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('themes/website/js/superfish.js');?>"></script>
    <script src="<?php echo base_url('themes/website/js/jquery.ui.totop.js');?>" type="text/javascript"></script>
    
  	<script>
        $(document).ready(function(){   
                jQuery('.camera_wrap').camera();
          });    
  	</script>		
  	<!--[if lt IE 8]>
    		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
   	<![endif]-->
    
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script type="text/javascript" src="<?php echo base_url('themes/website/js/jquery.mobile.customized.min.js');?>"></script>
    <!--<![endif]-->
    	<!--[if lt IE 9]>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
      <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <![endif]-->
</head>

<body>
<!--==============================Header=================================-->
<header>
    <div class="container">
    	<div class="row">
        	<div class="span12">
            	<div class="clearfix">
                    <div class="clearfix header-block-pad">
                        <h1 class="brand"><a href="index.html"><img src="i<?php echo base_url('themes/website/mages/logo.png');?>" alt=""></a><span>global communication solutions</span></h1>
                        <form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
                            <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''"  >
                            <a href="#" onClick="document.getElementById('search-form').submit()"></a>
                        </form>
                        <span class="contacts">Call Us: <span>+1 234 567 89 00</span><br>E-mail: <a href="#">email@companyname.com</a></span>
                    </div>
              </div>
           </div>
      </div>   
    </div>
    
    <!--==============================Nav=================================-->          
    <div id="nav_section">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="navbar navbar_ clearfix">
              <div class="navbar-inner navbar-inner_">
                  <div class="container">
                      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">MENU</a>                                                   
                      <div class="nav-collapse nav-collapse_ collapse">
                      <?php 
                          echo $this->multi_menu->render(
                                array(
                                  'nav_tag_open'        => '<ul class="nav sf-menu">',            
                                  'parentl1_tag_open'   => '<li class="li-first">',
                                  'parentl1_anchor'     => '<a href="%s">%s</a>',
                                  'parent_tag_open'     => '<li class="sub-menu">',
                                  'parent_anchor'       => '<a href="%s">%s</a>',
                                  'children_tag_open'   => '<ul>'
                              )
                          ); ?>
                          <!--<ul class="nav sf-menu">
                            <li class="active li-first"><a href="index.html">Home</a></li>
                            <li class="sub-menu"><a href="index-1.html">about</a>
                              <ul>
                                <li><a href="#">Our team</a></li>
                                <li><a href="#">Company Profile</a></li>
                                <li><a href="#">News and events</a></li>
                              </ul>
                            </li>
                            <li><a href="index-2.html">services</a></li>
                            <li><a href="index-3.html">partners</a></li>
                            <li><a href="index-4.html">projects</a></li>
                            <li><a href="index-5.html">contacts</a></li>
                          </ul>-->
                      </div>
                      <ul class="social-icons">
                          <li><a href="#"><img src="<?php echo base_url('themes/website/images/twitter.gif');?>" alt=""></a></li>
                          <li><a href="#"><img src="<?php echo base_url('themes/website/images/flickr.gif');?>" alt=""></a></li>
                          <li><a href="#"><img src="<?php echo base_url('themes/website/images/facebook.gif');?>" alt=""></a></li>
                          <li><a href="#"><img src="<?php echo base_url('themes/website/images/linkedin.gif');?>" alt=""></a></li>
                          <li><a href="#"><img src="<?php echo base_url('themes/website/images/youtube.gif');?>" alt=""></a></li>
                      </ul>
                  </div>
              </div>
            </div>
          </div>
        </div>   
      </div>
    </div>
    <!--==============================End Nav=================================-->

    <!--==============================Slider=================================--> 
    <?php 
    if ($this->router->fetch_class() == "home") { ?>
    <div class="slider">
      <div class="camera_wrap">
          <div data-src="<?php echo base_url('themes/website/images/slide1.jpg');?>"></div>
          <div data-src="<?php echo base_url('themes/website/images/slide2.jpg');?>">
            <div class="camera_caption">
              <div class="container">
                <div class="row">
                  <div class="span12">
                    <h2>Find</h2> <h3>the optimal<br/> solution</h3>
                  </div>
                </div>
              </div> 
            </div>     
          </div>
          <div data-src="<?php echo base_url('themes/website/images/slide3.jpg');?>">
            <div class="camera_caption">
              <div class="container">
                <div class="row">
                  <div class="span12">
                    <h2>optimal</h2> <h3>communication<br/> solutions</h3>
                  </div>
                </div>
              </div>    
            </div>
          </div>
          <div data-src="<?php echo base_url('themes/website/images/slide4.jpg');?>">
            <div class="camera_caption">
              <div class="container">
                <div class="row">
                  <div class="span12">
                    <h2>optimal</h2> <h3>communication<br/> solutions</h3>
                  </div>
                </div>
              </div>      
            </div>
          </div>
      </div>
    <?php } ?>
  </div>
</header>

<!--==============================Content=================================--> 
<section id="content" class="main-content">
  <div class="container">
    <div class="row">
      <div class="span12">        
        <ul class="thumbnails">
          <li class="span3">
            <div class="thumbnail">
              <div class="caption">
              	<img src="<?php echo base_url('themes/website/images/img-1.png');?>" alt="">
                <h5>Global</h5>
                <h3>Research</h3>
              </div>  
              <div class="thumbnail-pad">
                  <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                  <a href="#" class="btn btn_">more info</a>
              </div>
              <img src="<?php echo base_url('themes/website/images/shadow-thumb.jpg');?>">
            </div>
          </li>
          <li class="span3">
            <div class="thumbnail">
              <div class="caption">
              	<img src="<?php echo base_url('themes/website/images/img-2.png');?>" alt="">
                <h5>Communication</h5>
                <h3>resources</h3>
              </div>  
              <div class="thumbnail-pad">
                  <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. </p>
                  <a href="#" class="btn btn_">more info</a>
              </div>
              <img src="<?php echo base_url('themes/website/images/shadow-thumb.jpg');?>">
            </div>
          </li>
          <li class="span3">
            <div class="thumbnail">
              <div class="caption">
              	<img src="<?php echo base_url('themes/website/images/img-3.png');?>" alt="">
                <h5>Confidentiality</h5>
                <h3>guarantee</h3>
              </div>  
              <div class="thumbnail-pad">
                  <p>Maecenas sit amet augue. Sed blandit lectus eget lectus. Mauris justo. Curabitur nibh lectus, dapibus id, tempor eu.</p>
                  <a href="#" class="btn btn_">more info</a>
              </div>
              <img src="<?php echo base_url('themes/website/images/shadow-thumb.jpg');?>">
            </div>
          </li>
          <li class="span3">
            <div class="thumbnail">
              <div class="caption">
              	<img src="<?php echo base_url('themes/website/images/img-4.png');?>" alt="">
                <h5>Network</h5>
                <h3>Solutions</h3>
              </div>
              <div class="thumbnail-pad">  
                  <p>Praesent vestibulum molestie lacus. Aenean noy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.</p>
                  <a href="#" class="btn btn_">more info</a>
              </div>
              <img src="<?php echo base_url('themes/website/images/shadow-thumb.jpg');?>">
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="row divider1">
    	<div class="span8">
          <h2>Welcome to worldcom</h2>
          <div class="clearfix">
            <img src="<?php echo base_url('themes/website/images/img1.jpg');?>" alt="" class="img-radius alignleft">
            <h5 class="indent-3">SINCE 2001</h5>
            <p class="lead">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p>
          </div>
          <p><strong>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</strong></p>
          <p class="max-size1">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.  Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. <a href="#">Fusce feugiat malesuada odio.</a> Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. ulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. </p>
      </div>
           
      <div class="span4">
      	<h2>Latest News</h2>
          <ul class="list-news">
          	  <li>
              	<a href="#" class="btn btn_"><img src="<?php echo base_url('themes/website/images/month.png');?>">Apr 21, 2012</a>
                  <p class="text-info">Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cu</p>
                  Eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.<br/>
                  <a href="#" class="link">details</a>
              </li>
              <li>
                <a href="#" class="btn btn_"><img src="<?php echo base_url('themes/website/images/month.png');?>">Apr 21, 2012</a>
                  <p class="text-info">Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cu</p>
                  Eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.<br/>
                  <a href="#" class="link">details</a>
              </li>
          </ul>
      </div>
    </div> 

  </div>
</section>


<!--==============================Bottom content=================================--> 
<aside id="bottom-content">
  <div class="container">
    <div class="row">
        <div class="clearfix">
          <div class="span3">
            <h5>About Worldcom</h5>
            <p class="lead">Maecenas sit amet augue.</p>
          </div>
          <div class="span9">
            <p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.   <a href="#"> >>> </a></p>
          </div>
        </div>

        <div class="padbotcontent"></div> 

        <div class="clearfix">
          <div class="span3">
            <h5>Our Partners</h5>
            <p class="lead">Maecenas sit amet augue.</p>
          </div>
          <div class="span9">
            <img src="<?php echo base_url('themes/website/images/partners.jpg');?>">
          </div>
        </div>
   
    </div>
  </div>    
</aside>

<!--==============================Footer=================================--> 
<footer>
   <div class="container">
    <div class="row">
      <div class="span8">
        <ul class="footer-menu">
            <li><a href="index.html" class="current">home</a></li>
            <li><a href="index-1.html">about</a></li>
            <li><a href="index-2.html">services</a></li>
            <li><a href="index-3.html">partners</a></li>
            <li><a href="index-4.html">projects</a></li>
            <li><a href="index-5.html">contact us</a></li>
        </ul>
      </div>

      <div class="span4">
        <p class="phone">+1 123<span style="display:none">no skype addon</span> 456 78 90</p>
      </div>
      <div class="span12">
        WORLDCOM  ©  2012. ALL RIGHTS RESERVED. &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;   <a href="index-6.html">Privacy Policy</a> <!-- {%FOOTER_LINK} -->
      </div>
    </div>
   </div>
</footer>
<script type="text/javascript" src="<?php echo base_url('themes/website/js/bootstrap.js');?>"></script>
</body>
</html>