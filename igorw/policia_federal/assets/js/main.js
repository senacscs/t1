// Se você quiser adicionar alguma interatividade ao seu site, pode adicionar código JavaScript aqui.
// Por exemplo, você pode criar uma função que seja executada quando um botão é clicado.
// Aqui está um exemplo simples que exibe um alerta quando um botão é clicado:

function mostrarAlerta() {
    alert('Você clicou no botão!');
  }
  
  var meuBotao = document.querySelector('button');
  meuBotao.addEventListener('click', mostrarAlerta);