var anterior = 0;
var anteriorHover = 0;
var duploClique = 0;


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
    
    console.log("clique: "+duploClique)
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
    
    console.log("abre cidade"+idRecebido)
    document.getElementById("cidade" + idRecebido).classList.remove("cidadeDesativada");
    document.getElementById("cidade" + idRecebido).classList.add("cidadeAtivada");
    
}
function fechaDivInfo(idRecebido){
    
    console.log("fecha cidade"+idRecebido)
    document.getElementById("cidade"+idRecebido).classList.remove("cidadeAtivada");
    document.getElementById("cidade"+idRecebido).classList.add("cidadeDesativada");
   
    
}
function redireciona(){
    console.log("redireciona")
}