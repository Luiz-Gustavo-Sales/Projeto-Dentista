<?php
$teste= $_GET['data'];
// $dados = json_decode($teste, true);
echo $teste;

// if($x=="codigoCidade"){
  
// //  ========listar BAIRROS==========
// $codCidade=88412;
//  $url="https://sio-teste.fswise.com.br/Crown/api/dentistas/bairros/$CODcidade";
//  $ch= curl_init($url);
//  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//    $resultado= json_decode(curl_exec($ch));

// }else{
//   $dadosjson['result']=true;
//     $dadosjson['msg']="ERRO";
//     echo json_encode($dadosjson);
// }


?>



<select name="bairroDentista_a" class="form-control" id="bairroDentista_a" required="required">
<?php 
foreach($resultado->bairros as $bairro){
?>                   
<option value="<?php echo $bairro->codigoBairro?>" selected="selected"><?php echo $bairro->nomeBairro ?></option>
<?php
 }
?>
</select>
<script type="text/javascript" src="dentistas.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
       

 
 