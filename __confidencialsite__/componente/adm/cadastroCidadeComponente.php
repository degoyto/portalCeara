<section class="container">
    <div>
        <div class="container">
            <div >
                <h3>Cadastro de Cidade</h3>
                <?php 
                    if(isset($_SESSION['cadastro_sucesso'])):
                        
                    
                ?>
                
                    <div class="notification is-success">
                        <p>Cadastro feito com Sucesso</p>
                    </div>
                
                <?php 
                    endif;
                    unset($_SESSION['cadastro_sucesso']);

                   
                ?>
                
                <div class="container">
                    <form action="cadastrarCidade" method="POST">
                        <div class="form-group">
                            <label for="exampleInputNome1">Nome da Cidade</label>
                            <input name="nome" type="text" class="form-control" id="exampleInputNome1" placeholder="Nome da Cidade">
                            
                        </div>

                        <div class="form-group">
                            <label for="exampleInputResumo1">Resumo</label>
                            <textarea name="resumo" type="text" class="form-control"  rows="10" id="exampleInputResumo1" ></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputNome1">Municípios Limitrófes</label>
                            <textarea name="limite" type="text" class="form-control" id="exampleInputNome1" placeholder="Municípios limitrófes"></textarea>
                            
                        </div>

                        <div class="form-group">
                            <label for="exampleInputNome1">Área em Km</label>
                            <input name="area" type="number" step="any" class="form-control" id="exampleInputNome1" placeholder="Área em Km">
                            
                        </div>
                        

                        <div class="form-group">
                            <label for="exampleInputNome1">Colocação PIB</label>
                            <input name="pib" type="number" class="form-control" id="exampleInputNome1" placeholder="Colocação PIB">
                            
                        </div>

                        <div class="form-group">
                            <label for="exampleInputNome1">População</label>
                            <input name="populacao" type="number" class="form-control" id="exampleInputNome1"  placeholder="População">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNome1">Aniversário da Cidade</label>
                            <input name="aniversario" type="date" class="form-control" id="exampleInputNome1" placeholder="Aniversário da Cidade">
                            
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>