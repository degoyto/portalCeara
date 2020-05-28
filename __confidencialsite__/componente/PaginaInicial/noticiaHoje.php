<?php 
    
    
    
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    function data($data){
       
        $datinha = $data;
        $dataP = explode('-', $data);
        $dataParaExibir = $dataP[2].'/'.$dataP[1].'/'.$dataP[0];
        return $dataParaExibir;
        
        
    }
?>


<div class="divMissao container-flex" id="inicio">
    <h1>O Portal do Ceará hoje</h1>
    <div class="conteudo container">
        
         <div class="imagemLogo">
            <img src="https://firebasestorage.googleapis.com/v0/b/o-portal-do-ceara.appspot.com/o/outros%2FLOGO%20(1).png?alt=media&token=045729e0-207a-401f-9171-e70ea5852330"/>
        </div> 
        <div class="textoNoticiaPrincipal">
            <?php 
                while($exibeTodasCidades = mysqli_fetch_assoc($noticiaPrincipal)){
                    $cidade = pegaCidadeNoticiaPrincipal($connect, $exibeTodasCidades['id']);
                    

                    echo "
                        <div class='noticiaPrincipal'>
                            <a href='municipios/".$cidade['nomecru']."'>".$cidade['nome']."</a>
                            <h1>".$exibeTodasCidades['titulo']."</h1>
                            <h2>".$exibeTodasCidades['autor']."<br>".data($exibeTodasCidades['createdAt'])."</h2>
                            <div class='noticiaImagemPrincipal'>
                                <img src ='".$exibeTodasCidades['foto']."'/>
                                    

                                
                            </div>
                            <p>".$exibeTodasCidades['conteudo']."</p>
                        </div>
                    ";
                    
                }
            ?>
        </div>
        
    </div>
</div>