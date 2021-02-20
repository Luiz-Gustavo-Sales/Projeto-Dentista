<link rel="stylesheet" href="css/colorbox.css" />
<script src="js/jquery.min.js"></script>
<script src="js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"50%", height:"90%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>

	
	<style type="text/css">
						/* REMOVE THIS, USE YOUR OWN  */
html,body {
  margin: 0;
  padding: 0;
  font-family: Arial, Helvetica, Sans-serif;
  
}
.dummy_page {
  height: 200px;
  width: 100%;
  background-color: #f0f0f0;
  text-align: center;
  box-sizing: border-box;
  padding: 60px 0px;
}
/* STYLES SPECIFIC TO FOOTER  */
.footer {
  width: 100%;
  position: relative;
  height: auto;
  background-color: #161616e6;
}
.footer .col {
  width: 190px;
  height: auto;
  float: left;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  padding: 0px 20px 20px 20px;
}
.footer .col h1 {
  margin: 0;
  padding: 0;
  font-family: inherit;
  font-size: 12px;
  line-height: 17px;
  padding: 20px 0px 5px 0px;
  color: rgba(255,255,255,0.2);
  font-weight: normal;
  text-transform: uppercase;
  letter-spacing: 0.250em;
}
.footer .col ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.footer .col ul li {
  color: #999999;
  font-size: 14px;
  font-family: inherit;
  font-weight: bold;
  padding: 5px 0px 5px 0px;
  cursor: pointer;
  transition: .2s;
  -webkit-transition: .2s;
  -moz-transition: .2s;
}
.social ul li {
  display: inline-block;
  padding-right: 5px !important;
}

.footer .col ul li:hover {
  color: #ffffff;
  transition: .1s;
  -webkit-transition: .1s;
  -moz-transition: .1s;
}
.clearfix {
  clear: both;
}
@media only screen and (min-width: 1280px) {
  .contain {
    width: 1200px;
    margin: 0 auto;
  }
}
@media only screen and (max-width: 1139px) {
  .contain .social {
    width: 1000px;
    display: block;
  }
  .social h1 {
    margin: 0px;
  }
}
@media only screen and (max-width: 950px) {
  .footer .col {
    width: 33%;
  }
  .footer .col h1 {
    font-size: 14px;
  }
  .footer .col ul li {
    font-size: 13px;
  }
}
@media only screen and (max-width: 500px) {
    .footer .col {
      width: 50%;
    }
    .footer .col h1 {
      font-size: 14px;
    }
    .footer .col ul li {
      font-size: 13px;
    }
}
@media only screen and (max-width: 340px) {
  .footer .col {
    width: 100%;
  }
}
</style>
		<style type="text/css">
					
					   #coluna{
							  margin-top: -50px;
							  float: left;
							  width: 33.33%;
							  .row::after {
							  content: "";
							  clear: both;
							  display: table;
							  width:50%;
							  height:50%;
							  }
							 							
					</style>
<div class="dummy_page">


<div class="row">

<div  class="col-sm-4" id="coluna" style="margin-left:10%;">
<h4>Matriz</h4>
  <ul style="list-style: none;">
      <li>Crown Odonto Vila olimpia</li>
	  <li>Rua Pequetita, 145 Cj. 101 Vila Olímpia </li>
     <li>São Paulo CEP 04552-060</li>
     <li><img src="img/tel.png" alt="" height="30" width="30"> (11) 2813-2000</li>
	 <li><img src="img/whats.png" alt="" height="30" width="30"> (11) 98821-8843</li>
 </ul>
 </div>
 <div  class="col-sm-4" id="coluna" >
<h4>Filial</h4>
<ul style="list-style: none;">
	<li>Crown Odonto São José dos Campos</li>
   <li> Rua Euclides Miragaia, 145 cj 509 Centro.</li>
    <li>São José dos Campos - SP, 12245-820</li>
	<li><img src="img/tel.png" alt="" height="30" width="30">(12) 3209-7214</li>
	<li><img src="img/whats.png" alt="" height="30" width="30">(12) 99184-3311</li>  
</ul>
</div>

</div>

</div>

<!-- FOOTER START -->
<div class="footer">
  <div class="contain">
 
  <div class="col">
    <h1>Atendimento</h1>
    <ul>
     <a class='iframe' href="contato_rodape.php"> <li>Envie um
email</li></a>
<a href="ouvidoria.php"><li>Ouvidoria</li></a>
    
    </ul>
  </div>
  <div class="col">
   <h1>Empresas</h1>
    <ul>
    <a href="empresal.php"><li>Portal das Empresas</li></a>     
    </ul>
  </div>
  <div class="col">
    <h1>Associados</h1>
    <ul>
      <li>Portal do Associado</li>
      <li>Encontre seu dentista</li>
      <a href="indique-seu-dentista.php"><li>Indique seu dentista</li></a>
    </ul>
  </div>
   <div class="col">
    <h1>Dentistas</h1>
    <ul>
      <a href="dentistal.php"><li>Portal do Dentista</li></a>
      <a href="credenciado.php"><li>Seja um credenciado</li></a>
	  <a href="http://crownodonto.com.br/novosite/portaltiss.html" target="_blank"><li>Portal TISS</li></a>
   </ul>
  </div>
   <div class="col">
    <h1>Sobre a Crown
Odonto</h1>
    <ul>
      <li>Prêmios
Registro dos
Planos</li>
<li>Demonstrativos
Financeiros
IDSS</li>
     
    </ul>
  </div>
     <div class="col">
    <h1>CONTATO</h1>
    <ul>
     <li>comercial@crownodonto.com.br</li>
     <li>crown@crownodonto.com.br</li>
	 <li><img src="img/tel.png" alt="" height="30" width="30"> (11) 2813-2000</li>
	  <li><img src="img/whats.png" alt="" height="30" width="30"> (11) 98821-8843</li>
    </ul>
	
  </div>

  <div class="col social">

    <ul>
     <a href="http://www.ans.gov.br/"  target="_blank"> <li><img src="img/logoAns.png" width="32" style="width: 52px;"></li></a>
      <a href="http://www.ans.gov.br/planos-de-saude-e-operadoras/informacoes-e-avaliacoes-de-operadoras/indice-de-reclamacoes/indice-geral-de-reclamacoes-igr"  target="_blank"><li><img src="img/igr.png" width="32" style="width: 52px;"></li> </a>
      <a href="http://www.ans.gov.br/prestadores/tiss-troca-de-informacao-de-saude-suplementar"  target="_blank"><li><img src="img/logoTiss.png" width="32" style="width: 52px;"></li></a>
	  <li><img src="img/ans-novo.jpg" width="32" style="width: 52px;"></li>
    </ul>
  </div>
<div class="clearfix"></div>
</div>
</div>
<!-- END OF FOOTER -->
  
  <!-- Rights -->
  <div class="rights style-2">
    <div class="container">
	<script src="//code.jivosite.com/widget/BXqRbkKzHj" async></script>
      <p>© 2021 CROWN ODONTO</p>
    </div>
  </div>
  
  <!-- GO TO TOP  --> 
  <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
  <!-- GO TO TOP  --> 
</div>
<!-- End Page Wrapper --> 

<!-- JavaScripts --> 

<script src="js/vendors/wow.min.js"></script> 
<script src="js/vendors/bootstrap.min.js"></script> 
<script src="js/vendors/own-menu.js"></script> 
<script src="js/vendors/jquery.sticky.js"></script> 
<script src="js/vendors/owl.carousel.min.js"></script> 
<script src="js/vendors/jquery.magnific-popup.min.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 

<script type="text/javascript" src="rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.tp.min.js"></script> 
<script src="js/main.js"></script>


</html>
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "5511988218843", // WhatsApp number
            call_to_action: "Posso ajudar? ", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>