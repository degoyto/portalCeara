var anterior = 0;
var anteriorHover = 0;
var duploClique = 0;

var atual = 1;
    var gifAtivo = 0;

    function abreGif(){
        document.getElementById("gifLogo").src = ""
        document.getElementById("gifLogo").src = "https://firebasestorage.googleapis.com/v0/b/o-portal-do-ceara.appspot.com/o/outros%2Flogo.gif?alt=media&token=efe6027e-9f19-4da4-b6c8-6b4353613d0e"
        
        
        document.getElementById("textoCapa").classList.remove("fechaTudo");
        fechaGif();
            

        
    }

    function fechaGif(){
        
        setTimeout( function() {
            gifAtivo = 0;
            
            document.getElementById("item"+atual).classList.remove("active");
            atual = 1;
            document.getElementById("item"+atual).classList.add("active");
            
            document.getElementById("textoCapa").classList.add("fechaTudo");
            
            
            abreProximoSlide();
        }, 8800 );

        
    }
    

    function abreProximoSlide(){
        setTimeout( function() {
            document.getElementById("item"+atual).classList.remove("active");
            atual++;
            // console.log(atual+" "+gifAtivo);
            if (atual>6){
                atual = 1;
                gifAtivo = 1;
                abreGif();
               
            }
            // console.log("depois do if "+atual+" "+gifAtivo);
            document.getElementById("item"+atual).classList.add("active");
            if(gifAtivo == 0){
                
                abreProximoSlide();
            }
            
        }, 2000 );
    }
    
    abreProximoSlide();
    // mudar cor do mapa
function selecionado(recebido){
    duploClique++;
    if (duploClique>=2){
        redireciona();
    }
    else{
        if (anterior === 0){
        
            document.getElementById(recebido.id).classList.add("st19");
            document.getElementById(recebido.id).classList.add("ativado");
            
            
        }
        else{
            
            document.getElementById(anterior).classList.remove("st19");
            
            document.getElementById(anterior).classList.remove("ativado");
    
            
            document.getElementById(recebido.id).classList.add("st19");
            document.getElementById(recebido.id).classList.add("ativado");
            
        }
    }
    
    
    anterior = recebido.id;
    
}

function mudarCor(recebido){
    
    document.getElementById(recebido.id).classList.add("st19");
    fechaDivInfo(anteriorHover)
    abreDivInfo(recebido.id)
    anteriorHover = recebido.id;
}

function voltarCor(recebido){
    duploClique = 0;
    if (recebido.classList[2]!="ativado"){
        document.getElementById(recebido.id).classList.remove("st19");
        
    }
    
}

function abreDivInfo(idRecebido){
    
    
    document.getElementById("cidade" + idRecebido).classList.remove("cidadeDesativada");
    document.getElementById("cidade" + idRecebido).classList.add("cidadeAtivada");
    
}
function fechaDivInfo(idRecebido){
    
    
    document.getElementById("cidade"+idRecebido).classList.remove("cidadeAtivada");
    document.getElementById("cidade"+idRecebido).classList.add("cidadeDesativada");
   
    
}





