class Animal {
constructor(name, patas) {
    this.name = name;
    this.patas = patas;
}

correr() {
    document.getElementById("mostrar").innerHTML = this.name + " está correndo";
    console.log(`${this.name} está correndo`);
}
}

class Cachorro extends Animal {
constructor(nome) {
    super(nome, 4);
}
}

class Humano extends Animal {
constructor(nome) {
    super(nome, 2);
}
}

function criaObjeto() {
    let nome = document.getElementById("nomeInput").value;
    let patas = parseInt(document.getElementById("patasInput").value);

if (patas === 2) {
    return new Humano(nome);
} else if (patas === 4) {
    return new Cachorro(nome);
} else {
    return null;
}
}

function criarAnimal() {
let obj = criaObjeto();
if (obj === null) {
    console.log(`Para patas é 2 ou 4 apenas`);
} else {
    obj.correr();
}
}

