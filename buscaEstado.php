<?php
//  ========listar estados==========
 $url="https://sio-teste.fswise.com.br/Crown/api/dentistas/estados";
 $ch= curl_init($url);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
   $resultado= json_decode(curl_exec($ch));
  
?>
 <script>
 
 </script>


<select name="estadoDentista_a" class="form-control" id="estadoDentista_a" required="required">
<?php 
foreach($resultado->estados as $estado){
?>                   
<option value="<?php echo $estado->codigo?>" selected="selected"><?php echo $estado->sigla ?></option>
<?php
 }
?>
</select>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
