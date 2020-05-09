var anterior = 0;
var anteriorHover = 0;
var duploClique = 0;

var atual = 1;
    var gifAtivo = 0;

    function abreGif(){
        document.getElementById("gifLogo").src = ""
        document.getElementById("gifLogo").src = "https://firebasestorage.googleapis.com/v0/b/bird-9fcef.appspot.com/o/robotoMaiusculo.gif?alt=media&token=3c083925-8f77-4126-b5ca-d2b9421906b0"
        
        
        document.getElementById("textoCapa").classList.remove("fechaTudo");
        fechaGif();
            

        
    }

    function fechaGif(){
        
        setTimeout( function() {
            gifAtivo = 0;
            console.log("tempo acabou");
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
                console.log("gif atual>6 "+gifAtivo)
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





// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyAw6xl5wzRaJDJPWVqrrWlhKBiR3EvZO0M",
    authDomain: "jornal-porto-do-pecem.firebaseapp.com",
    databaseURL: "https://jornal-porto-do-pecem.firebaseio.com",
    projectId: "jornal-porto-do-pecem",
    storageBucket: "jornal-porto-do-pecem.appspot.com",
    messagingSenderId: "117754526845",
    appId: "1:117754526845:web:4f764a08dd39dbbc9f0514",
    measurementId: "G-KWJJNLNFEC"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

function uploadImage(){
    
    document.getElementById('caixa-confirma').classList.remove("desativado");
    document.getElementById('caixa-confirma').classList.add("ativo");
    const ref = firebase.storage().ref()
    const file = document.querySelector('#foto').files[0]
    const name = new Date() + '-' + file.name
    const metadata = {
        contentType:file.type
    }

    const task = ref.child("noticias/"+name).put(file, metadata)
    task.then(snapshot => snapshot.ref.getDownloadURL()).then(url =>{
        const imageelement = document.querySelector("#imagem")
        const testeelement = document.querySelector("#teste")


        document.getElementById('img-processando').classList.remove("ativo");
        document.getElementById('img-processando').classList.add("desativado");

        document.getElementById('img-concluido').classList.remove("desativado");
        document.getElementById('img-concluido').classList.add("ativo");

        document.getElementById('btn-confirma').classList.remove("desativado");
        document.getElementById('btn-confirma').classList.add("ativado");
        
        imageelement.src = url
        testeelement.value = url
        
        
    })
}



firebase.analytics();