var cadeado = document.getElementById('cadeado');

cadeado.onclick = function(){
    senha = prompt("Senha para abrir o cadeado");
    if (senha ==2239){ 
    window.location = "saida.html"
    }else{
        alert("Você Errou");window.location = "#"
    }  
}