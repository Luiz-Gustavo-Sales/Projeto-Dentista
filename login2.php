<?php include 'topo.php' ?>
  <!-- End Header --> 
  
  <!-- Bnr Header -->
  <section class="sub-bnr" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
      <div class="container">
        <h3>WE ARE MEDICAL</h3>
        <h1>BLOG</h1>
        
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">BLOG</li>
        </ol>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- News -->
    <section class="p-t-b-150">
      <div class="container"> 
        
        <!-- Latest News -->
        <div class="news">
          <div class="row"> 
            
 
            
           
            
            <!-- News Post -->
            <div class="col-md-4"> 
              <!-- Article -->
              <article class="news-post">
               
               <form method="post" id="form_login">
				<input type="hidden" name="sitenovo" value="true">
				<input id="caracteristicas" type="hidden" name="usuario.caracteristicas">
		<div class="row" id="DivLogin" style="display: block;">
			<div class="col-md-12">
				<label>Login</label>
				<select onchange="reapareceDiv(this)" name="usuario.tipoPerfil" id="usuario.tipoPerfil" style="width:100%; padding: 5px; margin: 10px 0 0 0; clear: both;">
					<option value="0" selected="">Selecione</option>
					<option value="7">Beneficiário</option>
					<option value="1">Dentista</option>
					<option value="3">Empresa</option>
					<option value="12">Representante</option>
					<option value="6">Vendedor</option>
				</select>
			</div>
		</div>

		<div class="row" id="div1" style="display: none;">
			<div class="col-md-12 ">
				<div class="row">
					<div class="col-md-2" id="uf" style="display: block;">
						<b>UF</b>
						<br>
						<select id="comboUf" name="usuario.estado.codigo">
							<option value="0">UF</option>
							<option value="1">AC</option>
							<option value="2">AL</option>
							<option value="3">AP</option>
							<option value="4">AM</option>
							<option value="5">BA</option>
							<option value="6">CE</option>
							<option value="7">DF</option>
							<option value="8">ES</option>
							<option value="10">GO</option>
							<option value="11">MA</option>
							<option value="12">MT</option>
							<option value="13">MS</option>
							<option value="14">MG</option>
							<option value="15">PA</option>
							<option value="16">PB</option>
							<option selected="selected" value="17">PR</option>
							<option value="18">PE</option>
							<option value="19">PI</option>
							<option value="20">RJ</option>
							<option value="21">RN</option>
							<option value="22">RS</option>
							<option value="23">RO</option>
							<option value="9">RR</option>
							<option value="25">SC</option>
							<option value="26">SP</option>
							<option value="27">SE</option>
							<option value="24">TO</option>
						</select>
					</div>
					<div class="col-md-4 col-lg-3" id="div_usr">
						<b id="login" style="display: inline;">Dados do Titular:</b>
						<br>
						<input type="text" name="usuario.login" class="form-control" id="usr" placeholder="CRO">
					</div>

					<div class="col-md-4">
						<b>Senha</b>
						<br>
						<input type="password" name="usuario.senha" class="form-control senha" placeholder="Senha">
					</div>
					<div class="col-md-3 btns-logins">
						<button type="button" class="btn evniarSolicita " onclick="loginSite()" title="enviar" style="width: auto; padding: 6px; margin-top: 5px;">OK</button>

						<button type="button" class="btn btn-default " onclick="reaparecelogin()" title="enviar" style="width: auto; padding: 6px; margin-top: 5px;">Voltar</button>
					</div>
				</div>

				<div class="row ">
					<div class="col-lg-4" id="dica" style="display: none;">
						<small title="" data-toggle="tooltip" data-placement="bottom" data-original-title="para o primeiro acesso utilize o CPF do titluar como login e CPF do titular como senha">
						Meu primeiro acesso
						</small>
					</div>
					<div class="col-lg-6" id="dica">
						<a class="esqueci_senha" title="esqueci minha senha" href="javascript: esqueciMinhaSenha();">
							<small>Esqueci minha senha</small>
						</a>
					</div>
				</div>

			</div>
		</div>
	</form> 
             
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
<?php include 'rodape.php' ?>