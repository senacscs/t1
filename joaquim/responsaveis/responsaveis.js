senha = prompt("Esta página é privada, para isso é necessário uma senha.                      Coloque a senha","");
	if (senha =="colorado1971"){
	document.getElementById('pagina').style.display = 'block';
	}else if(senha ==""){
		alert("Campo obrigatório");window.location = "login.html" 
		}else if(senha =="sair"){
		alert("cancelado");window.location = "https://www.codigofonte.com.br"
}else{
alert("Senha errada");window.location = "login.html"
}