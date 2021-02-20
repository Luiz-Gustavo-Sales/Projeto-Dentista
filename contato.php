<?php include 'topo.php' ?>  
<section class="main-banner">
    <div class="login-banner">
		<ul>
          <!-- SLIDE  -->
          <li> 
            <!-- MAIN IMAGE --> 
            <img src="img/bk_contato.jpg"  data-bgposition=" center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
           <div class="position-center-center" class="container"  style="z-index: 5; font-size:50px; font-weight:500; color:#fff;  max-width: auto; max-height: auto; white-space: nowrap;">
			  <div>
			  <font color="white" >
				<h3>Crown Odonto</h2>
				<h1>CONTATO</h1>
			  </font>
			  </div>
			</div>
          </li>
        </ul>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Contact Us -->
    <section class="p-t-b-150"> 
      <!-- CONTACT FORM -->
      <div class="container"> 
        <!-- Tittle -->
        <div class="heading-block">
          <h4>Entre em Contato</h4>
          <hr>
          <span>Qualquer que seja sua dúvida, nós estamos prontos para atendê-lo. 
Você profissional que deseja fazer parte do quadro de funcionários da Crown Odonto, poderá enviar seu currículo para a área de recursos humanos.</span> </div>
        <div class="contact">
          <div class="contact-form"> 
            <!-- FORM  -->
            <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
              <div class="row">
                <div class="col-md-6">
                  <ul class="row">
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="*Nome">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="*Email">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="company" id="company" placeholder="Telefone">
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="row">
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="website" id="website" placeholder="Departamento">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <textarea class="form-control" name="message" id="message" rows="5" placeholder="*Menssagem"></textarea>
                      </label>
                    </li>
                    <li class="col-sm-12 no-margin">
                      <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">Envie a menssagem</button>
                    </li>
                  </ul>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
    <!-- BOXES -->
    <section class="contact-box">
      <div class="container">
        <div class="row"> 
          
          <!-- Shop Location -->
          <div class="col-md-8">
            <div class="boxes-in">
              <h6>Contato Crown</h6>
              <ul class="location">
                <li> <i class="fa fa-location-arrow"></i>
                  <p>Rua Pequetita, 145 Cj. 101 Vila Olímpia</p>
                </li>
                <li> <i class="fa fa-phone"></i>
                  <p> (11) 2813-2000</p>
                  <p>Fax: 2813-2001</p>
                </li>
             
                  </ul>
            </div>
          </div>
          
          <!-- NEWSLETTER -->
          <div class="col-md-4">
            <div class="boxes-in">
              <h6>NETWORKS</h6>
              
              <!--======= FOOTER ICONS =========-->
              <ul class="social_icons">
                <li class="facebook"><a href="https://www.facebook.com/Crown-Odonto-219923421498805/"> <i class="fa fa-facebook"></i></a></li>
                <!--li class="linkedin"><a href="#."> <i class="fa fa-linkedin"></i></a></li-->
                <!--<li class="youtube"><a href="#."> <i class="fa fa-youtube"></i></a></li>-->
                <li class="instagram"><a href="#."> <i class="fa fa-instagram"></i></a></li>
             </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- MAP -->
    <section class="map-block margin-top-100">
        <div class="markers-wrapper addresses-block"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.330658575547!2d-46.68779658502155!3d-23.592471484667463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5746649b6a59%3A0xd05bd15ae7ac917d!2sR.+Pequetita%2C+145+-+Vila+Olimpia%2C+S%C3%A3o+Paulo+-+SP%2C+04552-060!5e0!3m2!1spt-BR!2sbr!4v1552677522029" width="1800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></a> </div>
    </section>
  </div>
   </div>
  
<?php include 'rodape.php' ?>