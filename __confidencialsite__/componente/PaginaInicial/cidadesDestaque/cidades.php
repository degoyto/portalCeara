<div class="destaqueTexto">
    <div id="cidade0" class="cidadeAtivada">
        
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            <br><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            
        </p>
    </div>
    <?php 
        while($exibeTodasCidades = mysqli_fetch_assoc($resultTodasCidades)){
            $idAtual = $exibeTodasCidades['id'];
            echo 
            "<div id='cidade$idAtual' class='cidadeDesativada'>
                <h1>".$exibeTodasCidades['nome']."</h1>
                <p>".
                    $exibeTodasCidades['resumo']."

                </p>
            </div>";
            //echo $exibeTodasCidades['nome'] .'<br>';
        }
    
    ?>

    <div id="cidade2" class="cidadeDesativada">
        <h1>Maracanaú</h1>
        <p>
            Maracanaú é um município brasileiro do estado do Ceará, Região Nordeste do país. Fica localizado na Região Metropolitana de Fortaleza, a 24 km da capital. É o maior centro industrial do estado e conhecida como a maior cidade-dormitório do Ceará. É também a terra adotiva do escritor Rodolfo Teófilo.
        </p>
    </div>
    
</div>