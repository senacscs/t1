function mensagem(text) {
    $('#current_loading').html(text);
}

function loading() {
    if (imagens() == true) {
        mensagem('Carregado imagens');
    }
    if (videos() == true) {
        mensagem('Carregado videos');
    }
    if (louvor() == true) {
        mensagem('Carregado louvor');
    }
    if (biblia() == true) {
        mensagem('Carregado biblia');
    }
}
loading();

function imagens() {
    for (a = 0; a <= 10000; a++) {
        console.log(a);
        if (a == 10000) {
            mensagem('Carregado imagens');
        }
    }
}

function videos() {
    for (a = 0; a < 10000; a++) {}
    return true;
}

function louvor() {
    for (a = 0; a < 10000; a++) {}
    return true;
}

function biblia() {
    for (a = 0; a < 10000; a++) {}
    return true;
}
var stop_color = false;

function color_animate(tempo) {
    let r = Math.floor(Math.random() * 256);
    let g = Math.floor(Math.random() * 256);
    let b = Math.floor(Math.random() * 256);
    let r2 = Math.floor(Math.random() * 256);
    let g2 = Math.floor(Math.random() * 256);
    let b2 = Math.floor(Math.random() * 256);
    let r3 = Math.floor(Math.random() * 256);
    let g3 = Math.floor(Math.random() * 256);
    let b3 = Math.floor(Math.random() * 256);
    $('.tree').css('fill', 'url(#gradient)');
    $('#inicio_gradiente').attr('stop-color', 'rgb(' + r + ',' + g + ',' + b + ')');
    $('#meio_gradiente').attr('stop-color', 'rgb(' + r2 + ',' + g2 + ',' + b2 + ')');
    $('#fim_gradiente').attr('stop-color', 'rgb(' + r3 + ',' + g3 + ',' + b3 + ')');
    if (!stop) {
        setTimeout(() => color_animate(tempo), tempo);
    }
}
color_animate(5000);

function parar() {
    stop_color = true;
}