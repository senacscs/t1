function handleClick(event) {
    const x = event.clientX;
    const y = event.clientY;
  
    const minX = 653;
    const maxX = 595;
    const minY = 711;
    const maxY = 681;
  
    if (x >= minX && x <= maxX && y >= minY && y <= maxY) {
      exibirCharada();
    }
  }
  
  function exibirCharada() {
    const charada = document.getElementById("charada");
    charada.classList.remove("hidden");
  }
  
  function fecharCharada() {
    const charada = document.getElementById("charada");
    charada.classList.add("hidden");
  }
  function volta() {
    window.history.back()
}
