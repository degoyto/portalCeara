<?php 
    session_start();
    include("api/db.php");
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    
    $linkImagem = filter_input(INPUT_POST, 'link-image', FILTER_SANITIZE_STRING);
    // $linkImagem = "teste";
    $legenda = filter_input(INPUT_POST, 'legenda', FILTER_SANITIZE_STRING);
    $resumo = filter_input(INPUT_POST, 'resumo', FILTER_SANITIZE_STRING);
    $conteudo = $_POST['conteudo'];
    $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);

    $tituloSemAcento =  preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $titulo ) );
    $tituloSemEspaco = preg_replace('<\W+>', "-", $tituloSemAcento); 
    $tituloConvertido = strtolower($tituloSemEspaco);
   

    $sql = "INSERT INTO noticias (titulo, conteudo, resumo, foto, tituloConvertido, legenda, autor, cidade, createdAt, updatedAt) VALUES ('$titulo','$conteudo','$resumo', '$linkImagem','$tituloConvertido','$legenda','$autor', '$cidade', NOW(), NOW())";
    if (mysqli_query($connect, $sql)) {
        echo "New record created successfully";
        $_SESSION["cadastro_sucesso"] = true;
        header('Location: cadastro-noticia-cidade');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }



   
   
    
?>
