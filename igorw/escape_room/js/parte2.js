var Sensei = document.getElementById('Sensei');

Sensei.onclick = function(){
    senha = prompt("Nome Completo do Sensei");
if (senha =="Jubileu Henrique da Silva"){ 
    window.location = "final.html"
}else if(senha =="dojo"){
alert("Entrendo no dojo");window.location = "jogo.html"
}else{
alert("Você Errou");window.location = "#"
}  
}
