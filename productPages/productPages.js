function changeImg(imgPath) {
  document.getElementById("mainImg").src = imgPath;
}

const frases = [
  "Domine as quadras com estilo e confiança!",
  "Basquete: mais que um esporte apaixonante!",
  "Inspire-se com Jerseys exclusivas do basquete!",
  "Faça parte do jogo com as melhores Jerseys do mercado.",
  "Mostre seu amor pelo basquete com qualidade.",
];

const textoElemento = document.createElement("p");
textoElemento.classList.add("texto-efeito");
const mainElemento = document.getElementById("main");
mainElemento.appendChild(textoElemento);

let index = 0;
let fotoIndex = 0;

function escreverTexto() {
  const frase = frases[index];
  const textoAtual = frase.slice(0, fotoIndex + 1);
  textoElemento.textContent = textoAtual;

  if (fotoIndex === frase.length) {
    index++;
    fotoIndex = 0;
    if (index === frases.length) {
      index = 0;
    }
    setTimeout(escreverTexto, 2000); // Intervalo de 2,25 segundos entre cada frase
  } else {
    fotoIndex++;
    setTimeout(escreverTexto, 40); // Intervalo de 50 milissegundos entre cada letra
  }
}

escreverTexto();

// Captura os elementos do DOM
var contadorInput = document.getElementById("contador");
var btnDiminuir = document.getElementById("btnDiminuir");
var btnAumentar = document.getElementById("btnAumentar");

// Define o evento de clique para o botão de diminuir
btnDiminuir.addEventListener("click", function () {
  var valorAtual = parseInt(contadorInput.value);
  if (valorAtual > 0) {
    contadorInput.value = valorAtual - 1;
  }
});

// Define o evento de clique para o botão de aumentar
btnAumentar.addEventListener("click", function () {
  var valorAtual = parseInt(contadorInput.value);
  contadorInput.value = valorAtual + 1;
});

function updateCodProdValue() {
  var codProdElement = document.getElementById("codProd");
  var codProdValue = codProdElement.innerText.split(":")[1].trim();
  var inputElement = document.createElement("input");
  inputElement.type = "hidden";
  inputElement.name = "codProd";
  inputElement.value = codProdValue;
  document.querySelector("form").appendChild(inputElement);
}
document.addEventListener("DOMContentLoaded", function () {
  var productNameElement = document.getElementById("productname");
  var h2Element = document.querySelector("h2");
  productNameElement.value = h2Element.innerText;
});
