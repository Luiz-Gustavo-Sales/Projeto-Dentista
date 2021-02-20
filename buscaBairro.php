<?php
//  ========listar BAIRROS==========
$codCidade=88412;
 $url="https://sio-teste.fswise.com.br/Crown/api/dentistas/bairros/$codCidade";
 $ch= curl_init($url);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
   $resultado= json_decode(curl_exec($ch));
?>



<select name="estadoDentista_a" class="form-control" id="estadoDentista_a" required="required">
<?php 
foreach($resultado->bairros as $bairro){
?>                   
<option value="<?php echo $bairro->codigoBairro?>" selected="selected"><?php echo $bairro->nomeBairro ?></option>
<?php
 }
?>
</select>

 