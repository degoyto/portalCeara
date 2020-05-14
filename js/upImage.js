// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyDqezyGCCjSIs4E4DEK5C9S-2nebi-eWrg",
    authDomain: "o-portal-do-ceara.firebaseapp.com",
    databaseURL: "https://o-portal-do-ceara.firebaseio.com",
    projectId: "o-portal-do-ceara",
    storageBucket: "o-portal-do-ceara.appspot.com",
    messagingSenderId: "653240735403",
    appId: "1:653240735403:web:3f933fe1cdd77ad74ac9ee",
    measurementId: "G-06290XZ944"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

function uploadImage(){
    const titulo = document.getElementById('tituloNoticia');
    document.getElementById('caixa-confirma').classList.remove("desativado");
    document.getElementById('caixa-confirma').classList.add("ativo");
   
    const ref = firebase.storage().ref()
    const file = document.querySelector('#foto').files[0]
    const name = titulo.value+" - "+new Date();
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