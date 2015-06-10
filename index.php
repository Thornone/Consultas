<?php 
# http://livedemo00.template-help.com/wt_53534
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
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/camera.css">
<link rel="stylesheet" href="css/search-form.css">
<link rel="stylesheet" href="css/font-awesome.css">
<!--JS-->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.equalheights.js"></script> 
<script src="js/camera.js"></script>
<script src="js/sForm.js"></script> 
<!--[if (gt IE 9)|!(IE)]><!-->
      <script src="js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
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
<script src="js/wow.js"></script>
<script src="js/device.min.js"></script>
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
            <h1 class="navbar-brand navbar-brand_"><a href="index.html"><img src="img/logo.png" alt="logo"></a></h1>
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
                <li class="active"><a href="/index.php">Inicio</a></li>
                <li class="sub-menu"><a href="/nosotros/">Nosotros</a><span></span>
                    <ul class="submenu">
        				<li><a href="#">Quienes Somos</a></li>
        				<li><a href="#">Nuestra Editorial</a></li>
        			</ul>
                </li>
                <li class="sub-menu"><a href="/nosotros/">Nuestras Ediciones</a><span></span>
                    <ul class="submenu">
                        <li><a href="#">Tarifa Impresa</a></li>
                        <li><a href="#">Tarifa En Lin&eacute;a</a></li>
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
        <div data-src="http://livedemo00.template-help.com/wt_53534/img/picture1.jpg"><div class="camera-caption fadeIn"><p class="title">Con nuestros Profesionales <br>las entrevistas de Servicios <br>son Garantizadas</p><a href="#" class="btn-default btn1">Ordene Ahora!</a></div></div>
        <div data-src="http://livedemo00.template-help.com/wt_53534/img/picture2.jpg"><div class="camera-caption fadeIn"><p class="title">Profesionales <br>que cubren el negocio <br>para cada una de sus descripciones</p><a href="#" class="btn-default btn1">Ordene Ahora!</a></div></div>
        <div data-src="http://livedemo00.template-help.com/wt_53534/img/picture3.jpg"><div class="camera-caption fadeIn"><p class="title">Tu primer paso <br> es escalar <br>por las brechas de un buen servicio</p><a href="#" class="btn-default btn1">Ordene Ahora!</a></div></div>
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
            <h2>SERVICIOS</h2>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInLeft" data-wow-delay="0.15s">
                    <div class="thumb-pad1 maxheight">
                        <div class="thumbnail">
                            <figure><img src="http://livedemo00.template-help.com/wt_53534/img/page1_icon1.png" alt=""></figure>
                            <div class="caption">
                                <a href="#">Arancel General</a>
                                <p>El Acuerdo sobre la OMC incluye el "Acuerdo General sobre Aranceles Aduaneros y Comercio de
1994". Este instrumento, denominado "GATT de 1994", se basa en el texto del Acuerdo General
sobre Aranceles Aduaneros y Comercio original, denominado "GATT de 1947". </p>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInLeft">
                    <div class="thumb-pad1 maxheight">
                        <div class="thumbnail">
                            <figure><img src="http://livedemo00.template-help.com/wt_53534/img/page1_icon2.png" alt=""></figure>
                            <div class="caption">
                                <a href="#">Cuotas Compensatorias</a>
                                <p>Circular No. G-0050/2015 Resolucion por la que se acepta la resolucion de parte interesada y se declara el Inicio de la investigacion Antidumping sobre las importaciones de productos de presfuerzo.</p>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInRight">
                    <div class="thumb-pad1 maxheight">
                        <div class="thumbnail">
                            <figure><img src="http://livedemo00.template-help.com/wt_53534/img/page1_icon3.png" alt=""></figure>
                            <div class="caption">
                                <a href="#">Normas Oficiales Mexicanas</a>
                                <p>Consulte las Normas Oficiales Mexicanas de esta Comisión Federal elaboradas por el Comité Consultivo Nacional de Normalización de Regulación y Fomento Sanitario las cuales establecen, las reglas, especificaciones, atributos, directrices, características o prescripciones aplicables a un producto.</p>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInRight" data-wow-delay="0.15s">
                    <div class="thumb-pad1 maxheight">
                        <div class="thumbnail">
                            <figure><img src="http://livedemo00.template-help.com/wt_53534/img/page1_icon4.png" alt=""></figure>
                            <div class="caption">
                                <a href="#">Indice Nacional de Precios al Consumidor.</a>
                                <p>Para determinar el pago de las contribuciones y sus accesorios, se utiliza el índice nacional de precios al consumidor (INPC) que se da a conocer por el Instituto Nacional de Estadística y Geografía e Informática (INEGI) y se publica en el Diario Oficial de la Federación en los primeros diez días del mes siguiente al que corresponda.</p>
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
                                    <strong>LEY DEL IMPUESTO GENERAL DE IMPORTACION Y EXPORTACION</strong>
                                    <p><q>Ley de los Impuestos Generales de Importación y de Exportación u otra disposición u ordenamiento que la establezca o altere. Además, dichas clasificaciones pueden adoptar las siguientes modalides:</q></p>
                                </li>
                                <li>
                                    <strong>NOTAS LEGALES Y EXPLICATIVAS</strong>
                                    <p><q>Se presenta el tratamiento arancelario aplicable a la importacion de mercanciasal Amparo de los tratados y convenios comerciales suscritos por Mexico en el Exterior.</q></p>
                                </li>
                                <li>
                                    <strong>COMPENDIO DE COMERCIO EXTERIOR</strong>
                                    <p><q>Abreviaturas e índice temático Ley aduanera Reglamento de la ley aduanera Ley federal de derechos (artículos relacionados) Reglas de carácter general en materia de comercio exterior Anexo glosario de definiciones y acrónimos de reglas de carácter general en materia de comercio exterior para 2012.</q></p>
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
                    <h2>RESUMEN</h2>
                    <h3>Consultas Aduanales de Nuevo Laredo</h3>
                    <div class="thumb-pad2">
                        <div class="thumbnail">
                            <figure><img src="http://livedemo00.template-help.com/wt_53534/img/page1_pic1.jpg" alt=""></figure>
                            <div class="caption">
                                <h4>Sin mas por el Momento y agradeciendo la atencion prestada quedamos de usted a sus ordenes.</h4>
                                <p>Enviamos Diariamente un Aviso de las Publicaciones del Diario Oficial de la Federacion que afecten la "Ley de los Impuestos Generales de Importacion y Exportacion" y de las Resoluciones que modifiquen la Miscelanea de Comercio Exterior, esperamos con este servicio responder eficientemente a sus necesidades.</p>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="thumb-box4">
        <div class="container">
            <div class="box">
                <div class="box1">
                    <strong>Registrate para obtener Detalles & Nuevas Ofertas</strong>
                    <span>Suscribete a nuestro listado de correos</span>
                </div>
                <form id="newsletter" accept-charset="utf-8">
        			<div class="success">Tu suscripcion a sido enviada!</div>
                    <label class="email">
        		    	<input type="email" value="">
        		    	<span class="error">*Email Invalido</span>
        		    </label>
                    <a href="#" data-type="submit" class="btn-default btn4">Enter</a>
        		</form>
            </div>
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
                        <p class="title">Direccion</p>
                        <p>Departamento de Ventas:<br>INDEPENDENCIA #3335 <br> SECTOR CENTRO <br>TEL: (867) 712-34-48 <br><a href="#">marthaeva@consultasaduanales.com.mx</a></p>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="indent maxheight3">
                        <p class="title">Manejo de Ediciones Impresas</p>
                        <ul class="list1-1">
                            <li><a href="#"></a>Ley del Impuesto General de Importacion</li>
                            <li><a href="#"></a>Notas Explicativas</li>
                            <li><a href="#"></a>Compendio de Comercio Exterior</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- {%FOOTER_LINK} -->
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/superfish.js"></script>
</body>
</html>