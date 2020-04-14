var anterior = 0;
var anteriorHover = 0;



function selecionado(recebido){
    
    if (anterior === 0){
        
        document.getElementById(recebido.id).classList.remove("st7");
        document.getElementById(recebido.id).classList.add("st8");
        document.getElementById(recebido.id).classList.add("ativado");
        
        
    }
    else{
        
        document.getElementById(anterior).classList.remove("st8");
        document.getElementById(anterior).classList.add("st7");
        document.getElementById(anterior).classList.remove("ativado");

        document.getElementById(recebido.id).classList.remove("st7");
        document.getElementById(recebido.id).classList.add("st8");
        document.getElementById(recebido.id).classList.add("ativado");
        
    }
    
    anterior = recebido.id;
    
}

function mudarCor(recebido){
    fechaDivInfo(anteriorHover);
    document.getElementById(recebido.id).classList.remove("st7");
    document.getElementById(recebido.id).classList.add("st8");
    abreDivInfo(recebido.classList[0]);
    anteriorHover = recebido.classList[0]
}

function voltarCor(recebido){
    if (recebido.classList[2]!="ativado"){
        document.getElementById(recebido.id).classList.remove("st8");
        document.getElementById(recebido.id).classList.add("st7");
    }
    
}

function abreDivInfo(idRecebido){
    console.log("abre cidade"+idRecebido)
    var teste = "cidade" + idRecebido;
    document.getElementById(teste).classList.remove("cidadeDesativada");
    document.getElementById(teste).classList.add("cidadeAtivada");
    
}
function fechaDivInfo(idRecebido){
    console.log("fecha cidade"+idRecebido)
    document.getElementById("cidade"+idRecebido).classList.remove("cidadeAtivada");
    document.getElementById("cidade"+idRecebido).classList.add("cidadeDesativada");
}