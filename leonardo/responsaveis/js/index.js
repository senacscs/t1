
senha = prompt("digite sua senha:\na dica é minha data de nascimento\ndigite sair para cancelar","");
    if (senha =="20/11/2005"){
    document.getElementById('pagina').style.display = 'block';
    }else if(senha ==""){
        alert("campo obrigatorio");window.location = "login.html" 
        }else if(senha =="sair"){
        alert("cancelado");window.location = "https://profluiz.com/emsenac/leonardo/"
}else{
alert("errou palerma");window.location = "login.html"
}
