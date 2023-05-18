senha = prompt("digite sua senha: digite sair para cancelar","");

    if (senha =="016"){

    document.getElementById('pagina').style.display = 'block';

    }else if(senha ==""){

        alert("campo obrigatorio");window.location = "login.html"

        }else if(senha =="sair"){

        alert("cancelado");window.location = "https://www.codigofonte.com.br"

}else{

alert("senha errada");window.location = "login.html"

}