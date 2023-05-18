senha = prompt("Dica: Sua data de Nascimento (sem /)","");
if (senha =="13111978"){
document.getElementById('pagina').style.display = 'block';
}else if(senha ==""){
    alert("campo obrigatorio");window.location = "index.html" 
    }else if(senha =="sair"){
    alert("saindo");window.location = "https://profluiz.com/emsenac/igorw/"
}else{
alert("senha errada");window.location = "index.html"
}