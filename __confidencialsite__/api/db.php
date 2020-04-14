<?php
    $connect = mysqli_connect("noticiaspecem2.mysql.uhserver.com", "jppecem2", "GIGANTE1@ff1") OR DIE ("Falha ao conectar");
    $db = mysqli_select_db($connect, "noticiaspecem2") OR DIE("Não selecionou o db");
   
?>