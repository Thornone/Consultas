<?php 
# http://livedemo00.template-help.com/wt_53534

if ( isset($_GET['m']) ){
    switch ($_GET['m']) {
        # nosotros
        case "nosotros":
            $paginPHP = "php/nosotros.php";
        break;
        case "quienes":
            $paginPHP = "php/quienes.php";
        break;
        case "nuestra":
            $paginPHP = "php/nuestra.php";
        break;

        # nuestras ediciones
        case "nuestras":
            $paginPHP = "php/nuestras.php";
        break;
        case "impresa":
            $paginPHP = "php/impresa.php";
        break;
        case "online":
            $paginPHP = "php/online.php";
        break;

        # acceso
        case "acceso":
            $paginPHP = "php/acceso.php";
        break;

        # tarifa
        case "sicer":
            $paginPHP = "php/impresa.php";
        break;

        # contacto
        case "contacto":
            $paginPHP = "php/contacto.php";
        break;
    }
} else {
    $paginPHP = "php/index.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<meta name = "format-detection" content = "telephone=no" />
<!--CSS-->
<link rel="stylesheet" href="/css/bootstrap.css" >
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/animate.css">
<link rel="stylesheet" href="/css/camera.css">
<link rel="stylesheet" href="/css/search-form.css">
<link rel="stylesheet" href="/css/font-awesome.css">
<!--JS-->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/jquery.mobilemenu.js"></script>
<script src="/js/jquery.equalheights.js"></script> 
<script src="/js/camera.js"></script>
<script src="/js/sForm.js"></script> 
<!--[if (gt IE 9)|!(IE)]><!-->
      <script src="/js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->
<script src="/js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="/js/jquery.touchSwipe.min.js"></script>
<script>
    $(document).ready(function(){
        jQuery('.camera_wrap').camera();
    });
</script>
<script>
$(window).load(function() {
    $(function() {
        $('#foo1').carouFredSel({
			auto: false,
			responsive: true,
			width: '100%',
			scroll: 1,
            pagination  : "#foo2_pag",
			items: {
				height: 'auto',
				width:370,
				visible: {
					min: 1,
					max: 1
				}
			},
			mousewheel: true,
			swipe: {
				onMouse: true,
				onTouch: true
			}
		});
	}); 	 				
});
</script>


<!--[if (gt IE 9)|!(IE)]><!-->
<script src="/js/wow.js"></script>
<script src="/js/device.min.js"></script>
<script>
    $(document).ready(function () {       
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }   
    });
</script>
<!--<![endif]-->

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.http://livedemo00.template-help.com/wt_53534/js/1.3.0/respond.min.js"></script>

    <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
      <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
        <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
      </map>
  </div>
  <![endif]-->
</head>
<body>
<!--header-->
<header class="indent clearfix">
    <div class="follow-box">
        <div class="container"> 
            <h1 class="navbar-brand navbar-brand_"><a href="index.html"><img src="/img/logo.png" alt="logo"></a></h1>
            <ul class="address_icon">
                <li><span class="fa fa-map-marker"></span>9870 St Vincent Place, Glasgow, DC 45 Fr 45.</li>
                <li><span class="fa fa-envelope"></span><a href="#">contact@demolink.org</a></li>
                <li><span class="fa fa-phone"></span>+1 800 559 6580</li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
        <div class="container">
            <ul class="nav sf-menu clearfix">
                <li class="active"><a href="/index.php">Inicio</a></li>
                <li class="sub-menu"><a href="/nosotros/">Nosotros</a><span></span>
                    <ul class="submenu">
        				<li><a href="/nosotros/quienes-somos">Quienes Somos</a></li>
        				<li><a href="/nosotros/nuestra-editorial">Nuestra Editorial</a></li>
        			</ul>
                </li>
                <li class="sub-menu"><a href="/nuestras-ediciones/">Nuestras Ediciones</a><span></span>
                    <ul class="submenu">
                        <li><a href="/nuestras-ediciones/impresa">Tarifa Impresa</a></li>
                        <li><a href="/nuestras-ediciones/online/">Tarifa En Lin&eacute;a</a></li>
                    </ul>
                </li>
                <li><a href="/acceso/">Acceso a Clientes</a></li>
                <li class="sub-menu"><a href="#">Tarifa</a><span></span>
                    <ul class="submenu">
                        <li><a href="/sicer/">SICER</a></li>
                        <li><a href="http://24.173.218.108/consultasaduanales/login.aspx" target="_blank">Enlace SLAM</a></li>
                    </ul>
                </li>
                <li><a href="/contacto/">Contacto</a></li>
            </ul>
            <div class="js-search flt__l flt__n-xl">
            	<div class="toggle"></div>
            	<form id="search" class="search-form" action="search.php" method="GET" accept-charset="utf-8">
            		<label class="input" for="in">
            			<input id="in" type="text" name="s" value="Search" onblur="if(this.value == '') { this.value='Search'}" onfocus="if (this.value == 'Search') {this.value=''}">
                        <a href="#" onClick="document.getElementById('search').submit()" class="js-find"></a>
            		</label>
            	</form>
            </div>
        </div>
    </nav>
</header>
<div class="slider">  
    <div class="camera_wrap">
        <div data-src="http://livedemo00.template-help.com/wt_53534/img/picture1.jpg"><div class="camera-caption fadeIn"><p class="title">With our professional <br>CV your job interview <br>is guaranteed</p><a href="#" class="btn-default btn1">order now!</a></div></div>
        <div data-src="http://livedemo00.template-help.com/wt_53534/img/picture2.jpg"><div class="camera-caption fadeIn"><p class="title">Professional CVs <br>and cover letters <br>for every job description</p><a href="#" class="btn-default btn1">order now!</a></div></div>
        <div data-src="http://livedemo00.template-help.com/wt_53534/img/picture3.jpg"><div class="camera-caption fadeIn"><p class="title">Your first step <br>in climbing up <br>the service ladder</p><a href="#" class="btn-default btn1">order now!</a></div></div>
    </div>
</div>
<!--content-->
<div class="content"> 
    <div class="thumb-box">
        <div class="container">
            <strong>CONSULTAS ADUANALES DE NUEVO LAREDO</strong>
            <p>Es una empresa dedicada a la venta y reproduccion de TARIFAS ARANCELARIAS, con el fin de responder a las necesidades en materia de comercio exterior e información aduanera.</p>
        </div>
    </div>
    <div class="thumb-box1">
        <div class="container">
            <h2>Resume services</h2>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInLeft" data-wow-delay="0.15s">
                    <div class="thumb-pad1 maxheight">
                        <div class="thumbnail">
                            <figure><img src="http://livedemo00.template-help.com/wt_53534/img/page1_icon1.png" alt=""></figure>
                            <div class="caption">
                                <a href="#">Entry level</a>
                                <p>Just starting out? There's no need to worry about inexperience. We can find your best attributes while displaying your unlimited potential.</p>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInLeft">
                    <div class="thumb-pad1 maxheight">
                        <div class="thumbnail">
                            <figure><img src="http://livedemo00.template-help.com/wt_53534/img/page1_icon2.png" alt=""></figure>
                            <div class="caption">
                                <a href="#">Professional</a>
                                <p>This type of resume is best for those who are already established in a particular field or have an impressive history to back-up a job change.</p>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInRight">
                    <div class="thumb-pad1 maxheight">
                        <div class="thumbnail">
                            <figure><img src="http://livedemo00.template-help.com/wt_53534/img/page1_icon3.png" alt=""></figure>
                            <div class="caption">
                                <a href="#">Executive</a>
                                <p>With this resume your career accomplishments will be emphasized while highlighting your experience as an executive level professional.</p>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInRight" data-wow-delay="0.15s">
                    <div class="thumb-pad1 maxheight">
                        <div class="thumbnail">
                            <figure><img src="http://livedemo00.template-help.com/wt_53534/img/page1_icon4.png" alt=""></figure>
                            <div class="caption">
                                <a href="#">Career Change</a>
                                <p>Our expert writers will help you to identify your transferable skills and qualifications so you can start your new career today.</p>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="stellar-section">
        <div class="thumb-box2" data-stellar-background-ratio="0.1">
                <div class="row">   
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="list_carousel1 responsive clearfix">
                            <ul id="foo1">
                                <li>
                                    <strong>Free job hunting advice from our resume experts</strong>
                                    <p><q>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam.</q></p>
                                    <p class="name">Sam Kromstain (CV consultant)</p>
                                </li>
                                <li>
                                    <strong>Free job hunting advice from our resume experts</strong>
                                    <p><q>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam.</q></p>
                                    <p class="name">Sam Kromstain (CV consultant)</p>
                                </li>
                                <li>
                                    <strong>Free job hunting advice from our resume experts</strong>
                                    <p><q>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam.</q></p>
                                    <p class="name">Sam Kromstain (CV consultant)</p>
                                </li>
                            </ul>
                        </div>
                        <div class="foo-btn clearfix">
                            <div class="pagination" id="foo2_pag"></div>
                        </div>
                        <a href="#" class="btn-default btn2">click for details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="thumb-box3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 wow fadeInLeft">
                    <h2>Resume editing</h2>
                    <h3>Nam libero tempore cum soluta</h3>
                    <div class="thumb-pad2">
                        <div class="thumbnail">
                            <figure><img src="http://livedemo00.template-help.com/wt_53534/img/page1_pic1.jpg" alt=""></figure>
                            <div class="caption">
                                <h4>Lorem ipsum dolor sit amet, consectet ur omnis iste natus error adipisicing elit, sed do eiusmod</h4>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porroquisquam est, dolorem ipsum quia dolor sit amet, consectetur.</p>
                            </div>  
                        </div>
                        <a href="#" class="btn-default btn3">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInRight">
                    <h2>Why choose us</h2>
                    <h3>Nam libero tempore cum soluta</h3>
                    <div class="thumb-pad2">
                        <div class="thumbnail">
                            <figure><img src="http://livedemo00.template-help.com/wt_53534/img/page1_pic2.jpg" alt=""></figure>
                            <div class="caption">
                                <h4>Consectetr adipisicing elit sed oluptas sit aspernatur do tempor incididunt ut labore </h4>
                                <ul class="list1">
                                    <li><a href="#">Nemo enim ipsam voluptatem quia voluptas</a></li>
                                    <li><a href="#">Sit aspernatur aut odit aut fugit, sed quia conse</a></li>
                                    <li><a href="#">Magni dolores eos qui ratione voluptatem</a></li>
                                </ul>
                            </div>  
                        </div>
                        <a href="#" class="btn-default btn3">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="thumb-box4">
        <div class="container">
            <div class="box">
                <div class="box1">
                    <strong>Sign up to get fresh news & deals</strong>
                    <span>Subscribe to our mailing list</span>
                </div>
                <form id="newsletter" accept-charset="utf-8">
        			<div class="success">Your subscribe request has been sent!</div>
                    <label class="email">
        		    	<input type="email" value="">
        		    	<span class="error">*This is not a valid email address.</span>
        		    </label>
                    <a href="#" data-type="submit" class="btn-default btn4">submit</a>
        		</form>
            </div>
            <ul class="list2">
                <li><a href="#"><img src="http://livedemo00.template-help.com/wt_53534/img/company1.png" alt=""></a></li>
                <li><a href="#"><img src="http://livedemo00.template-help.com/wt_53534/img/company2.png" alt=""></a></li>
                <li><a href="#"><img src="http://livedemo00.template-help.com/wt_53534/img/company3.png" alt=""></a></li>
                <li><a href="#"><img src="http://livedemo00.template-help.com/wt_53534/img/company4.png" alt=""></a></li>
                <li><a href="#"><img src="http://livedemo00.template-help.com/wt_53534/img/company5.png" alt=""></a></li>
                <li><a href="#"><img src="http://livedemo00.template-help.com/wt_53534/img/company6.png" alt=""></a></li>
            </ul>
        </div>
    </div>
</div>
<!--footer-->
<footer>
    <div class="tools-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="maxheight3">
                        <p class="title">copyright</p>
                        <p class="priv">&copy; <em id="copyright-year"></em> <a href="index-5.html">Privacy Policy</a></p>
                        <strong>Resumex</strong>
                        <ul class="follow-list">
                            <li><a href="#">twitter</a></li>
                            <li><a href="#">facebook</a></li>
                            <li><a href="#">you tube</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="maxheight3">
                        <p class="title">Address</p>
                        <p>9870 St Vincent Place,<br>Glasgow, DC 45 Fr 45. <br>Freephone:  +1 800 559 6580 <br><a href="#">mail@demolink.org</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="maxheight3">
                        <p class="title">Support Menu</p>
                        <ul class="list1-1">
                            <li><a href="#">Lost Password?</a></li>
                            <li><a href="#">Forgot your Username?</a></li>
                            <li><a href="#">Your Membership</a></li>
                            <li><a href="#">Your Account</a></li>
                            <li><a href="#">Support Forum</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="indent maxheight3">
                        <p class="title">About Us</p>
                        <ul class="list1-1">
                            <li><a href="#">Customer focus</a></li>
                            <li><a href="#">Performance</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">CV Review</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- {%FOOTER_LINK} -->
</footer>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/superfish.js"></script>
</body>
</html>