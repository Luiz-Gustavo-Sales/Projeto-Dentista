<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<!-- Document Title -->
<title>Crown Odonto | Abrindo um sorriso para você !
</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<!-- StyleSheets -->
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">	
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">

<!-- Fonts Online -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Raleway:200,300,400,500,600,700,800,900" rel="stylesheet">

<!-- JavaScripts -->
<script src="js/vendors/modernizr.js"></script>
<script type="text/javascript" src="form/jquery-2.2.1.min.js"></script>
<script>
			function reaparecelogin() {
			$("#DivLogin").show();
			$("#div1").hide();
			}
			function reapareceDiv(campo) {
			$("#div1").hide();
			switch (campo.value) {
			case '7':
			$("#DivLogin").hide();
			$("#uf").hide();
			$("#comboUf").attr("disabled", "disabled");
			$("#div_usr").removeClass("col-lg-3");
			$("#div_usr").addClass("col-lg-4");
			$("#usr").attr("placeholder", "Cartão ou CPF");
			$("#login").text("Titular:");
			$("#dica").show();
			$("#div1").show();
			break;
			case '1':
			$("#DivLogin").hide();
			$("#uf").show();
			$("#comboUf").removeAttr("disabled");
			$("#div_usr").removeClass("col-lg-4");
			$("#div_usr").addClass("col-lg-3");
			$("#usr").attr("placeholder", "CRO");
			$("#dica").hide();
			$("#div1").show();
			break;
			case '3':
			$("#DivLogin").hide();
			$("#comboUf").attr("disabled", "disabled");
			$("#uf").hide();
			$("#div_usr").removeClass("col-lg-3");
			$("#div_usr").addClass("col-lg-4");
			$("#usr").attr("placeholder", "Cod Empresa");
			$("#dica").hide();
			$("#div1").show();
			break;
			case '12':
			$("#DivLogin").hide();
			$("#comboUf").attr("disabled", "disabled");
			$("#uf").hide();
			$("#div_usr").removeClass("col-lg-3");
			$("#div_usr").addClass("col-lg-4");
			$("#usr").attr("placeholder", "Matricula");
			$("#dica").hide();
			$("#div1").show();
			break;
			case '6':
			$("#DivLogin").hide();
			$("#comboUf").attr("disabled", "disabled");
			$("#uf").hide();
			$("#div_usr").removeClass("col-lg-3");
			$("#div_usr").addClass("col-lg-4");
			$("#usr").attr("placeholder", "Cod Vendedor");
			$("#dica").hide();
			$("#div1").show();
			break;
			default:
			$("#DivLogin").show();
			$("#comboUf").attr("disabled", "disabled");
			$("#uf").hide();
			$("#div_usr").removeClass("col-lg-3");
			$("#div_usr").addClass("col-lg-4");
			$("#usr").attr("placeholder", "");
			$("#dica").hide();
			$("#div1").hide();
			break;
			}
			}
	</script>
</head>
<body>

<!-- Page Loader -->
<div id="loader">
  <div class="position-center-center">
    <div class="cssload-thecube">
      <div class="cssload-cube cssload-c1"></div>
      <div class="cssload-cube cssload-c2"></div>
      <div class="cssload-cube cssload-c4"></div>
      <div class="cssload-cube cssload-c3"></div>
    </div>
  </div>
</div>

<!-- Page Wrapper -->
<div id="wrap">
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p></p>
        </div>
        <div class="col-sm-6">
          <div class="social-icons"><a href="https://www.facebook.com/Crown-Odonto-219923421498805/"><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-instagram"></i></a> </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Header -->
  <header class="header-style-2">
    <div class="container">
      <div class="logo"> <a href="index.php"><img src="images/logo_crow3.png" alt=""><p class="slogan"><font size="2" >Abrindo um sorriso para você !</a></font> </p></div>
	  

      <div class="head-info">
        <ul>
		

	
          <li> <i class="fa fa-phone"></i>
            <p>(11) 2813-2000<br>(11) 98821-8843
              </p>
          </li>
          <li> <i class="fa fa-envelope-o"></i>
            <p>contato@crownodonto.com.br<br>
              info@crownodonto.com.br</p>
          </li>
          <a href =https://www.google.com.br/maps?q=Rua+Pequetita,+145,+S%C3%A3o+Paulo&hl=pt-BR&ie=UTF8&ll=-23.592051,-46.684921&spn=0.008741,0.016512&sll=-23.551831,-46.633658&sspn=0.034029,0.066047&vpsrc=0&t=m&z=17><li> <i class="fa fa-map-marker"></i>
            <p>Rua Pequetita,  145 Cj. 101 <br>
              Vila Olímpia SP CEP 04552-060</p>
          </li></a>
        </ul>
      </div>
    </div>
    
    <!-- Nav -->
    <nav class="navbar ownmenu">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
        </div>
        
        <!-- NAV -->
        <div class="collapse navbar-collapse" id="nav-open-btn">
          <ul class="nav">
            <li> <a href="index.php">Home </a>
            </li>
            <li  class="dropdown"><a href="#">Empresa</a>
			<ul class="dropdown-menu animated-2s fadeInRight">
               <li><a href="crown.php">A CROWN ODONTO</a></li>
               <li><a href="missao.php">Missão</a></li>
            </ul>
			</li>
			<li> <a href="http://crownodonto.com.br/blog/index.php">Blog</a>
			</li>
			 <li  class="dropdown"><a href="#">Planos</a>
			 <ul class="dropdown-menu animated-2s fadeInRight">
               <li><a href="planos_juridico.php">PME</a></li>
               <li><a href="planos_fisico.php">Pessoa Fisica</a></li>
            </ul>
           </li>
           </li>
            <li><a href="contato.php">contato </a></li>
            <li><a href="dentista.php">Encontre seu dentista</a></li>
			<li  class="dropdown"><a href="login.php">LOGIN</a>
			<ul class="dropdown-menu animated-2s fadeInRight">
               <li><a href="beneficiario.php">Beneficiário</a></li>
               <li><a href="dentistal.php">Dentista</a></li>
			   <li><a href="empresal.php">Empresa</a></li>
			   <li><a href="representante.php">Representante</a></li>
			   <li><a href="vendedor.php">Vendedor</a></li>
            </ul>
			</li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End Header --> 
