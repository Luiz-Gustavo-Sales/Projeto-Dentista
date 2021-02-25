<?php
          //selecionando o código manual
          $codigoEstado=2;
          //requisição para API
          $url="https://sio-teste.fswise.com.br/Crown/api/dentistas/cidades/$codigoEstado";
          $ch= curl_init($url);
          curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            $resultado= json_decode(curl_exec($ch));
        ?>
        

      <!-- ==============SELECT DO ARQUIVO  ==============  -->
        <script>
          // $('select[name=""]')
        </script>

        <select name="cidadeDentista_a" class="form-control" id="cidadeDentista_a" required="required" >
        <?php 
        foreach($resultado->cidades as $Cidade){
        ?>                   
        <option value="<?php echo $Cidade->codigoCidade?>" selected="selected"><?php echo $Cidade->nomeCidade ?></option>
        <?php
          }
        ?>
        </select>
        <script type="text/javascript" src="dentistas.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
       

 