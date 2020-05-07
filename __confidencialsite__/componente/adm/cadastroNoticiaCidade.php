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
                    <h1>Adicionar Nova Notícia</h1>
                    <form method="POST" action="processa"  enctype="multipart/form-data" id="form-noticia">
                            
                        <h2>Imagem da Notícia</h2>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Escolha uma imagem</label>
                            <input name="imagem" type="file" class="form-control-file" id="foto" required>
                            <img id="imagem"/>
                            
                        </div>

                        <div class="form-group" style="display:none">
                                <label for="exampleInputEmail1">Link da imagem</label>
                                <input id="teste" name="link-image" type="text" class="form-control" >        
                        </div>

                        <div class="form-group">
                                <label for="exampleInputEmail1">Legenda</label>
                                <input type="text" name="legenda" class="form-control" placeholder="Legenda Foto">
                                
                        </div>



                        <h2>Dados da Notícia</h2>
                        <div class="form-group">
                                <label for="exampleInputEmail1">Título</label>
                                <input type="text" name="titulo" class="form-control" placeholder="Título da Notícia" required>
                                
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Destacar na tela Inicial</label>
                            <select name="destacar" class="form-control" id="exampleFormControlSelect1" required>
                                    
                                <option value=0>Não</option> 
                                <option value=1>Sim</option> 
                            
                            </select>
                        </div>
                        
                        <label for="exampleInputPassword1">Tipo de Notícia</label>
                        <select name="tipo" class="form-control" required style="margin-bottom:20px">
                            <label for="exampleInputPassword1">Tipo da noticia</label>
                            <option value="" selected disabled hidden>Escolha o tipo da noticia</option>
                            <option value="1">Artigos</option>
                            <option value="2">Boletim Portuário</option>
                            <option value="3">Caucaia</option>
                            <option value="4" >Comércio Exterior</option>
                            <option value="5">Complexo Portuário</option>
                            <option value="6">Destaques Portuários</option> 
                            <!-- <option value="direito">Direito Aduaneiro</option> -->
                            <option value="7">Entrevistas</option> 
                            <option value="8">Eventos</option>
                            <option value="9">Logística e Transporte</option>
                            <!-- <option value="marketing">Marketing Portuário</option> -->
                            <option value="10" >Notícia Internacional</option>
                            <option value="11">Notícia Nacional</option> 
                            <option value="12" >Portos do Brasil</option>
                            <option value="13">Porto e Turismo</option> 
                            <option value="14">São Gonçalo</option>
                            
                        </select>


                        <div class="form-group">
                                <label for="exampleInputEmail1">Resumo</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="resumo"></textarea>
                                
                        </div>
                    
                        <div class="form-group">
                                <label for="exampleInputEmail1">Autor</label>
                                <input type="text" name="autor" class="form-control"  placeholder="Autor" required>
                                
                        </div>
                        <div class="form-group">
                                <label for="exampleInputEmail1">Conteúdo</label>
                                <textarea name="conteudo" id="summernote"></textarea>
                                </textarea>
                        </div>

                        
                        <button type="button" onclick="uploadImage()" class="btn btn-primary botao-up">Enviar</button>

                        <div class="caixa-confirma-aparece desativado" id="caixa-confirma">
                            <div class="container quadro-escolha" style="width:320px">
                                <img id='img-processando' class='img-processando ativo' src="https://firebasestorage.googleapis.com/v0/b/jornal-porto-do-pecem.appspot.com/o/processando.gif?alt=media&token=c025e6f2-b548-4309-9779-0083b785db58"/>
                                <img id='img-concluido' class='img-concluido desativado' src="https://firebasestorage.googleapis.com/v0/b/jornal-porto-do-pecem.appspot.com/o/source.gif?alt=media&token=092cd258-d37c-4b4d-a22a-ab0ff15ee0d6"/>
                                <button id="btn-confirma" type="submit" class="btn btn-primary botao-enviar  desativado">Confirmar</button>
                            </div>
                            
                        </div>
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>