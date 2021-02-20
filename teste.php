<?php
  
  $json_is = "http://wise.no-ip.info:1418/Crown/app/dentistas/estados";
  $video_info = file_get_contents ( $json_is,FILE_USE_INCLUDE_PATH);
  echo $video_info;
?>