<?php include 'topo.php' ?>

<?php 


?>
  <section class="main-banner">
    <div class="login-banner">
		<ul>
          <!-- SLIDE  -->
          <li> 
            <!-- MAIN IMAGE --> 
            <img src="img/cobertura2.jpg"  data-bgposition=" center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
           <div class="position-center-center" class="container"  style="z-index: 5; font-size:50px; font-weight:500; color:#fff;  max-width: auto; max-height: auto; white-space: nowrap;">
			  <div>
			  <font color="white" >
				<h3>Crown Odonto</h2>
				<h1>PESQUISA</h1>
			  </font>
			  </div>
			</div>
          </li>
        </ul>
    </div>
  </section>
  
  <!-- Bnr Header -->
 <section class="p-t-b-150 padding-bottom-100">
  <div class="container">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	            <div class="heading-block">
          <h2>PESQUISE E ENCONTRE SEU DENTISTA</h2>
          <hr>
          <span>Com a Crown odonto fica muito mais facil para encontrar o dentista mais próximo de você faça a sua pesquisa .</span> 
		</div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Busca Rápida</h3>
        <p>* Campos Obrigatórios</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="form-group required">
        <!-- listando os estados das clínicas -->
          <label class="control-label">Estado</label>
          <?php include 'buscaEstado.php' ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        <div class="form-group required">
          <label class="control-label">Cidade</label>
          <!-- <select name="cidadeDentista_a" class="form-control" id="cidadeDentista_a" required="required" disabled>
            <option value="" selected="selected">Selecione</option>
          </select> -->
          <?php include 'buscaCidade.php' ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="box collapsed-box">
          <div class="box-header with-border">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <!--<label class="cpOpc">Campos opcionais</label>--> 
            </div>
            <div class="modal fade" id="mapas" role="dialog"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h5 class="modal-title">Ver Mapa</h5></div><div class="modal-body" id="modal_body"><p></p></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button></div></div></div></div>
            <div class="modal fade" id="planos" role="dialog"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h5 class="modal-title">Planos</h5></div><div class="modal-body" id="modal_body"><p></p></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button></div></div></div></div>
            <div class="box-body">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <label>Bairro</label> 
                  <!-- <select name="bairroDentista_a" class="form-control" id="bairroDentista_a" required="required" >
                    <option value="" selected="selected">Selecione</option>
                  </select> -->
                  <?php include 'buscaBairro.php' ?>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <label>Nome do Dentista / Clínica</label>
                  <input type="text" name="nome" id="nomeDentista_a" value="" class="form-control campoOP" onkeyup="this.value = retira_acentos(this.value);" onblur=" ($(this).val().length < 3) ? $(this).val('') : ''">
                </div>
                <!-- ============ESPECIALIDADE============ -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <label>Especialidade</label> 
                  <?php
                  global $url_especialidade;
              $url_especialidade="https://sio-teste.fswise.com.br/Crown/api/dentistas/especialidades";
              $ch= curl_init($url_especialidade);
              curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                $resultado= json_decode(curl_exec($ch));
          ?>
    <select name="especialidadeDentista_a" id="especialidadeDentista_a" style="height:42px" class="form-control" data-toggle="tooltip" data-placement="top" title="" data-original-title="Posicione seu mouse em cima da especialidade desejada para ver sua descrição, ao identificar a opção desejada clique nela e efetua a busca.">
    <?php 
     foreach($resultado->especialidades as $especi){
    ?>                   
    <option value="<?php echo $especi->codigoEspecialidade//echo $especi->nomeEspecialidade?>" selected="selected"><?php echo $especi->nomeEspecialidade ?></option>
    <?php

     }
   
     ?>
  </select>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pt-2">
      <!-- Botao pra realizar busca -->
        <input type="submit" style="margin-top:20px" id="buscarDentista_a" class="btn btn-lg btn-block buscarDentistarapido" value="Encontrar dentista">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px;">
        <div name="resultadoDentista_a" id="resultadoDentista_a" style="display:none"></div>
      </div>
    </div>
    <!-- </div> -->
    </div>
  </section>
  <!-- Content 

  <div id="test" />

  </div>
  -->
  <script type="text/javascript" src="js/dentistas.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <?php include 'rodape.php' ?>