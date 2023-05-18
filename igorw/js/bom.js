const greetingMessage = () => {
  //let h = new Date().toLocaleTimeString('pt-BR', { hour: 'numeric', hour12: false });
  let h = new Date().getHours();
  if (h <= 5) return 'Boa madrugada';
  if (h < 12) return 'Bom dia';
  if (h < 18) return 'Boa tarde';
  return 'Boa noite';
}

console.log(greetingMessage());