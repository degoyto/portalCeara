<?php
    $connect = mysqli_connect("portalceara.mysql.uhserver.com", "pceara", "GIGANTE1@ff1") OR DIE ("Falha ao conectar");
    $db = mysqli_select_db($connect, "portalceara") OR DIE("Não selecionou o db");
    mysqli_set_charset($connect,"utf8");
?>