<div class="container-flex divMissao divDestaque" >
    <div class="tituloPerfilCidade">
        <h1>As Notícias e os 
        <br>perfis das cidades</h1>

        <div class="propagandasPerfilCidade">

        </div>
    </div>
    
    <div class="container mapaCidade">
        <div class="mapSvg">
            <?php include("mapaID.html") ?>
            
        </div>
        <div class="linksCidades">
            <form >
                <div class="form-group barraPesquisa">
                    
                    <input id="pesquisa" type="text" name="pesquisa" class="form-control" placeholder="Procure por cidade" >

                    
                    
                        
                </div>
                
            </form>
            <div id="resultado">

            

            <?php 
                
                $resultadoPesquisa = $connect->prepare("select nome, id, nomecru from cidades where id>0 order by nome asc");
                $resultadoPesquisa->execute();
                $resultadoPesquisa->bind_result($nomeCidadePesquisa, $idCidadePesquisa, $nomeCruPesquisa);

                echo "<ul class='tabelaNomeCidade'>";
                    while ($resultadoPesquisa->fetch()){
                        echo "
                            <li><a id='".$idCidadePesquisa."' onmouseover='mudarCor(this.id)' onmouseout='voltarCor(this.id)' href='municipios/$nomeCruPesquisa'>
                                $nomeCidadePesquisa
                            </a></li>
                        ";
                    }

                        
                echo "</ul>";
                
                // while($exibeTodasCidades = mysqli_fetch_assoc($resultTodasCidades)){
                //     $linkCidade = "municipios/".$exibeTodasCidades['nomecru'];
                //     echo "<a href='".$linkCidade."'>".$exibeTodasCidades['nome']."</a><br>";
                // }
            ?>
            </div>
        </div>
        
    </div>
</div>