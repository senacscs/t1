$(function(){//Abrindo uma função
var vez = 1;//A variável "vez" tem o valor de 1
var vencedor = "";//A variável "vencedor" tem o valor de tem o valor indefinido

function casasIguais(a, b, c){//A abrindo uma função "casasIguais" que tem suas variáveis (a, b, c)
    var casaA = $("#casa"+a);//Ele puxa uma "class" do HTML e define a variável
    var casaB = $("#casa"+b);//Ele puxa uma "class" do HTML e define a variável
    var casaC = $("#casa"+c);//Ele puxa uma "class" do HTML e define a variável
    var bgA = $("#casa"+a).css("background-image");
    var bgB = $("#casa"+b).css("background-image");
    var bgC = $("#casa"+c).css("background-image");
    if( (bgA == bgB) && (bgB == bgC) && (bgA != "none" && bgA != "")){
        if(bgA.indexOf("1.png") >= 0)
            vencedor = "Sora Livia";
        else
            vencedor = "Sor Luiz";
        return true;
    }
    else{
        return false;
    }
}

function verificarFimDeJogo(){
    if( casasIguais(1, 2, 3) || casasIguais(4, 5, 6) || casasIguais(7, 8, 9) ||
        casasIguais(1, 4, 7) || casasIguais(2, 5, 8) || casasIguais(3, 6, 9) ||
        casasIguais(1, 5, 9) || casasIguais(3, 5, 7)
        ){
        $("#resultado").html("<h1>"+ vencedor + " venceu! </h1>");
        $(".casa").off("click");
    }
}

$(".casa").click(function(){
    var bg = $(this).css("background-image");
    if(bg == "none" || bg == "")
    {           
        var fig = "url(" + vez.toString() + ".png)";
        $(this).css("background", fig);
        vez = (vez == 1? 2:1);  
        verificarFimDeJogo();
    }
});
});