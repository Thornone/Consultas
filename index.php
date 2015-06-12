<?php 
# http://livedemo00.template-help.com/wt_53534

if ( isset($_GET['m']) ){
    switch ($_GET['m']) {
        # nosotros
        case "nosotros":
            $paginPHP = "php/nosotros.php";
        break;

        # nuestras ediciones
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
            $paginPHP = "php/sicer.php";
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
            <h1 class="navbar-brand navbar-brand_"><a href="index.html"><img src="/img/logo.png" alt="logo" style="width:250px;"></a></h1>
            <ul class="address_icon">
                <li><span class="fa fa-map-marker"></span>Nuevo Laredo, Tamps. INDEPENDENCIA #3335 Sector Centro</li>
                <li><span class="fa fa-envelope"></span><a href="#">marthaeva@consultasaduanales.com.mx</a></li>
                <li><span class="fa fa-phone"></span>TEL: (867) 712-34-48</li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
        <div class="container">
            <ul class="nav sf-menu clearfix">
                <li class="<?php if (!isset($_GET['m'])) echo 'active'; ?>"><a href="/index.php">Inicio</a></li>
                <li class="<?php if (@$_GET['m'] == "nosotros") echo 'active'; ?>"><a href="/nosotros/">Nosotros</a></li>
                <li class="sub-menu"><a href="#">Nuestras Ediciones</a><span></span>
                    <ul class="submenu">
                        <li><a href="/tarifa-impresa/">Tarifa Impresa</a></li>
                        <li><a href="/tarifa-online/">Tarifa En Lin&eacute;a</a></li>
                    </ul>
                </li>
                <li><a href="/acceso/">Acceso a Clientes</a></li>
                <li class="sub-menu"><a href="/tarifa/">Tarifa</a><span></span>
                    <ul class="submenu">
                        <li><a href="/sicer/">SICER</a></li>
                        <li><a href="http://24.173.218.108/consultasaduanales/login.aspx">Enlace SLAM</a></li>
                    </ul>
                </li>
                <li><a href="/contacto/">Contacto</a></li>
            </ul>
        </div>
    </nav>
</header>
<?php
if (!isset($_GET['m'])){
?>
    <div class="slider">  
        <div class="camera_wrap">
            <div data-src="http://livedemo00.template-help.com/wt_53534/img/picture1.jpg"><div class="camera-caption fadeIn"><p class="title">Con nuestros Profesionales <br>las entrevistas de Servicios <br>son Garantizadas</p><a href="#" class="btn-default btn1">Ordene Ahora!</a></div></div>
            <div data-src="http://livedemo00.template-help.com/wt_53534/img/picture2.jpg"><div class="camera-caption fadeIn"><p class="title">Profesionales <br>que cubren el negocio <br>para cada una de sus descripciones</p><a href="#" class="btn-default btn1">Ordene Ahora!</a></div></div>
            <div data-src="http://livedemo00.template-help.com/wt_53534/img/picture3.jpg"><div class="camera-caption fadeIn"><p class="title">Tu primer paso <br> es escalar <br>por las brechas de un buen servicio</p><a href="#" class="btn-default btn1">Ordene Ahora!</a></div></div>
        </div>
    </div>
<?php
}
?>

<!--content-->
<div class="content <?php if (isset($_GET['m'])) echo "indent"; ?>">
    <?php include $paginPHP; ?>
    <br><br>
</div>

<!--footer-->
<footer>
    <div class="tools-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="maxheight3">
                        <p class="title">Manejo de Ediciones Impresas</p>
                        <ul class="list1-1">
                            <li><a href="#"></a>Ley del Impuesto General de Importacion</li>
                            <li><a href="#"></a>Notas Explicativas</li>
                            <li><a href="#"></a>Compendio de Comercio Exterior</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="maxheight3">
                        <p class="title">Direcci&oacute;n y Contacto</p>
                        <p>INDEPENDENCIA #3335 <br> SECTOR CENTRO <br>TEL: (867) 712-34-48 <br>Departamento de Ventas:<br><a href="#">marthaeva@consultasaduanales.com.mx</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="maxheight3">
                        <p class="title">Ubicaci&oacute;n</p>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="indent maxheight3">
                        <p class="title">CONSULTAS ADUANALES DE NUEVO LAREDO, S.A. DE C.V.</p>
                        <p class="text-center">
                            <br>
                            <a href="http://nuevolaredo.f403.mx" target="_blank">Desarrollo por F403 Nuevo Laredo</a>
                        </p>
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