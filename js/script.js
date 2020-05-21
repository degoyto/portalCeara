var anterior = 0;
var anteriorHover = 0;
var duploClique = 0;

var atual = 1;
    var gifAtivo = 0;

    function abreGif(){
        document.getElementById("gifLogo").src = ""
        document.getElementById("gifLogo").src = "https://firebasestorage.googleapis.com/v0/b/o-portal-do-ceara.appspot.com/o/outros%2FgifLogoOportal.gif?alt=media&token=c79034c6-03c7-4df4-be27-dd963bb0b02d"
        
        
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


function mudarCor(recebido){
    
    document.getElementById(recebido).classList.add("st19");
    
    anteriorHover = recebido;
}

function voltarCor(recebido){
    document.getElementById(recebido).classList.remove("st19");
        
    
    
}









