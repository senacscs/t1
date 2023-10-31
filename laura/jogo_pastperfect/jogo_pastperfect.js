function validarForm(){
    var questao1 = document.getElementById("quest1");
    var questao2 = document.getElementById("quest2");
    var questao3 = document.getElementById("quest3");
    var questao4 = document.getElementById("quest4");
    var questao5 = document.getElementById("quest5");

    if(questao1.value == "errado" && questao2.value == "errado" && questao3.value == "errado" && questao4.value == "errado" && questao5.value == "errado"){
        window.alert("errou");
    }
    if(questao1.value == "certo" && questao2.value == "certo" && questao3.value == "certo" && questao4.value == "certo" && questao5.value == "errado"){
        window.alert("errado na(s) questão(ões): 5");
    }
    if(questao1.value == "certo" && questao2.value == "certo" && questao3.value == "certo" && questao4.value == "errado" && questao5.value == "certo"){
        window.alert("errado na(s) questão(ões): 4");
    }
    if(questao1.value == "certo" && questao2.value == "certo" && questao3.value == "errado" && questao4.value == "certo" && questao5.value == "certo"){
        window.alert("errado na(s) questão(ões): 3");
    }
    if(questao1.value == "certo" && questao2.value == "errado" && questao3.value == "certo" && questao4.value == "certo" && questao5.value == "certo"){
        window.alert("errado na(s) questão(ões): 2");
    }
    if(questao1.value == "errado" && questao2.value == "certo" && questao3.value == "certo" && questao4.value == "certo" && questao5.value == "certo"){
        window.alert("errado na(s) questão(ões): 1");
    }
    else{
        window.alert("acertou");
    }
}